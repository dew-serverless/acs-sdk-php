<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'OpenITag',
    'version' => '2022-06-16',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 171721,
      'title' => '租户',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListTenants',
        1 => 'GetTenant',
        2 => 'UpdateTenant',
      ),
    ),
    1 => 
    array (
      'id' => 171725,
      'title' => '标注模板',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListTemplates',
        1 => 'CreateTemplate',
        2 => 'UpdateTemplate',
        3 => 'DeleteTemplate',
        4 => 'GetTemplateView',
        5 => 'GetTemplateQuestions',
        6 => 'GetTemplate',
      ),
    ),
    2 => 
    array (
      'id' => 171733,
      'title' => '标注任务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AppendAllDataToTask',
        1 => 'ListTasks',
        2 => 'CreateTask',
        3 => 'GetTask',
        4 => 'UpdateTask',
        5 => 'DeleteTask',
        6 => 'GetTaskTemplateViews',
        7 => 'GetTaskTemplateQuestions',
        8 => 'GetTaskTemplate',
        9 => 'GetTaskStatus',
        10 => 'GetTaskStatistics',
      ),
    ),
    3 => 
    array (
      'id' => 171744,
      'title' => '子任务包',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListSubtasks',
        1 => 'GetSubtask',
        2 => 'ListSubtaskItems',
        3 => 'GetSubtaskItem',
      ),
    ),
    4 => 
    array (
      'id' => 171749,
      'title' => '标注结果',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ExportAnnotations',
        1 => 'ListJobs',
        2 => 'GetJob',
      ),
    ),
    5 => 
    array (
      'id' => 171753,
      'title' => '标注人员管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListUsers',
        1 => 'GetUser',
        2 => 'CreateUser',
        3 => 'UpdateUser',
        4 => 'DeleteUser',
      ),
    ),
    6 => 
    array (
      'id' => 171759,
      'title' => '任务人员',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetTaskWorkforce',
        1 => 'AddWorkNodeWorkforce',
        2 => 'GetTaskWorkforceStatistic',
        3 => 'UpdateTaskWorkforce',
        4 => 'RemoveWorkNodeWorkforce',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'CreateTaskDetail' => 
      array (
        'title' => 'A short description of struct',
        'description' => '创建任务结构体。',
        'type' => 'object',
        'properties' => 
        array (
          'TaskName' => 
          array (
            'title' => '任务名称',
            'description' => '任务名称。',
            'type' => 'string',
            'required' => true,
            'example' => '测试任务202208101424',
          ),
          'UUID' => 
          array (
            'title' => '唯一标识ID；业务方控制',
            'description' => '唯一标识ID，业务方控制。',
            'type' => 'string',
            'required' => true,
            'example' => '16623***80757311',
          ),
          'TemplateId' => 
          array (
            'title' => '模版ID',
            'description' => '模板ID。如何获取模板ID，请参见[ListTemplates](~~454654~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '152936***8342353920',
          ),
          'AllowAppendData' => 
          array (
            'title' => '是否支持新增',
            'description' => '是否支持新增，取值如下：
- true：支持新增。
- false：不支持新增。',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'TaskTemplateConfig' => 
          array (
            'description' => '模板配置。',
            '$ref' => '#/components/schemas/TaskTemplateConfig',
          ),
          'Exif' => 
          array (
            'title' => '额外配置',
            'description' => '额外配置。JSON格式。',
            'type' => 'object',
            'required' => false,
            'example' => ' {  "TaskCaptionType": "DOC_LINK"}',
          ),
          'Admins' => 
          array (
            'title' => '管理员；默认创建人',
            'description' => '管理员，默认创建人。',
            'type' => 'object',
            'properties' => 
            array (
              'Users' => 
              array (
                'title' => '管理员',
                'description' => '管理员列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '参考SimpleUser的结构配置后，添加为管理员的功能。',
                  '$ref' => '#/components/schemas/SimpleUser',
                ),
              ),
            ),
          ),
          'TaskWorkflow' => 
          array (
            'title' => '工作流',
            'description' => '工作流列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '任务流节点配置项。',
              'type' => 'object',
              'properties' => 
              array (
                'NodeName' => 
                array (
                  'title' => '结点名称',
                  'description' => '结点名称，取值如下：
- MARK：标注。
- CHECK：检查。
- SAMPLING：验收。',
                  'type' => 'string',
                  'enumValueTitles' => 
                  array (
                  ),
                  'example' => 'MARK',
                  'enum' => 
                  array (
                    0 => 'MARK',
                    1 => 'CHECK',
                    2 => 'SAMPLING',
                  ),
                ),
              ),
              'enumValueTitles' => 
              array (
              ),
            ),
            'required' => true,
          ),
          'AssignConfig' => 
          array (
            'title' => '任务分配机制',
            'description' => '任务分配机制。',
            'required' => true,
            '$ref' => '#/components/schemas/TaskAssginConfig',
          ),
          'Tags' => 
          array (
            'title' => '任务标签',
            'description' => '任务标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'type' => 'string',
              'example' => 'text',
            ),
          ),
          'VoteConfigs' => 
          array (
            'title' => '投票配置',
            'description' => '投票配置',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '参考CreateTaskDetailVoteInfo的配置，配置投票信息。包括投票人数和最小投票数量。',
              '$ref' => '#/components/schemas/CreateTaskDetailVoteInfo',
            ),
          ),
          'DatasetProxyRelations' => 
          array (
            'title' => '数据集配置',
            'description' => '数据集配置列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '参考DatasetProxyConfig的配置，配置数据集。',
              '$ref' => '#/components/schemas/DatasetProxyConfig',
            ),
            'required' => true,
          ),
        ),
      ),
      'CreateTaskDetailVoteInfo' => 
      array (
        'title' => '投票信息',
        'description' => '创建任务详情投票信息',
        'type' => 'object',
        'properties' => 
        array (
          'VoteNum' => 
          array (
            'title' => '投票人数',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '3',
          ),
          'MinVote' => 
          array (
            'title' => '最小投票数量',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '3',
          ),
        ),
      ),
      'DatasetProxyConfig' => 
      array (
        'title' => 'A short description of struct',
        'description' => '数据集配置。',
        'type' => 'object',
        'properties' => 
        array (
          'Source' => 
          array (
            'title' => '数据集来源',
            'description' => '数据集来源，仅支持PAI。',
            'type' => 'string',
            'example' => 'PAI',
            'default' => 'PAI',
            'enum' => 
            array (
              0 => 'PAI',
            ),
          ),
          'SourceDatasetId' => 
          array (
            'title' => '来源数据集ID',
            'description' => '来源数据集ID。如何获取数据集ID，请参见[ListDatasets](~~457222~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '214***12514',
          ),
          'DatasetType' => 
          array (
            'title' => '数据集类型',
            'description' => '数据集类型，仅支持LABEL。',
            'type' => 'string',
            'example' => 'LABEL',
            'default' => 'LABEL',
          ),
        ),
      ),
      'FlowJobInfo' => 
      array (
        'title' => 'A short description of struct',
        'description' => '工作流信息。',
        'type' => 'object',
        'properties' => 
        array (
          'JobId' => 
          array (
            'title' => 'JobId',
            'description' => '任务ID。',
            'type' => 'string',
            'example' => '1475***441221943296',
          ),
          'JobType' => 
          array (
            'title' => 'Job类型',
            'description' => '任务类型，目前仅支持：DOWNLOWD_MARKRESULT_FLOW。',
            'type' => 'string',
            'example' => 'DOWNLOWD_MARKRESULT_FLOW',
          ),
          'ProcessType' => 
          array (
            'title' => '处理信息',
            'description' => '处理信息。',
            'type' => 'string',
            'example' => 'NEW_INIT',
          ),
          'MessageId' => 
          array (
            'title' => '消息ID',
            'description' => '消息ID。',
            'type' => 'string',
            'example' => '792B76F4000E681A95155146A002D5F8',
          ),
          'TaskId' => 
          array (
            'title' => '任务ID',
            'description' => '任务ID。',
            'type' => 'string',
            'example' => '1543***518306500608',
          ),
          'Display' => 
          array (
            'title' => '是否展示',
            'description' => '是否展示，可能值为：
- true：展示。
- false：不展示。',
            'type' => 'boolean',
            'example' => 'true',
          ),
        ),
      ),
      'Job' => 
      array (
        'title' => 'A short description of struct',
        'description' => '项目。',
        'type' => 'object',
        'properties' => 
        array (
          'Status' => 
          array (
            'title' => 'Job状态',
            'description' => '任务状态，可能值为：
- init: 初始化
- running: 运行中
- pause: 暂停
- stop: 停止
- succ: 成功
- fail: 失败',
            'type' => 'string',
            'example' => 'succ',
          ),
          'JobResult' => 
          array (
            'title' => 'Job结果',
            'description' => '任务结果。',
            'type' => 'object',
            'properties' => 
            array (
              'ResultLink' => 
              array (
                'title' => '返回值链接',
                'description' => '返回值链接，即返回标注结果所在的OSS路径。',
                'type' => 'string',
                'example' => 'oss://****-hz-oss.oss-cn-hangzhou.aliyuncs.com/output/ocr_demo001.manifest',
              ),
            ),
          ),
          'JobType' => 
          array (
            'title' => 'Job类型',
            'description' => '任务类型，目前仅支持：DOWNLOWD_MARKRESULT_FLOW。',
            'type' => 'string',
            'example' => 'DOWNLOWD_MARKRESULT_FLOW',
          ),
          'GmtCreateTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间。',
            'type' => 'string',
            'example' => '2021-12-28 11:42:19',
          ),
          'GmtModifiedTime' => 
          array (
            'title' => '修改时间',
            'description' => '修改时间。',
            'type' => 'string',
            'example' => '2021-12-28 11:42:20',
          ),
          'Creator' => 
          array (
            'description' => '任务创建者。',
            '$ref' => '#/components/schemas/SimpleUser',
          ),
          'JobId' => 
          array (
            'title' => 'JobId',
            'description' => '任务ID。',
            'type' => 'string',
            'example' => '147***441221943296',
          ),
        ),
      ),
      'MarkResult' => 
      array (
        'title' => 'A short description of struct',
        'description' => '标注结果。',
        'type' => 'object',
        'properties' => 
        array (
          'MarkResultId' => 
          array (
            'title' => '题目ID',
            'description' => '题目ID。',
            'type' => 'string',
            'example' => '1500***849089597440',
          ),
          'MarkTitle' => 
          array (
            'title' => '题目名称',
            'description' => '题目名称。',
            'type' => 'string',
            'example' => '单选',
          ),
          'MarkResult' => 
          array (
            'title' => '题目结果',
            'description' => '题目结果。',
            'type' => 'string',
            'example' => 'b',
          ),
          'QuestionId' => 
          array (
            'title' => '绑定题目',
            'description' => '绑定题目。',
            'type' => 'string',
            'example' => '1',
          ),
          'ResultType' => 
          array (
            'title' => '结果类型',
            'description' => '结果类型。可能值为：
- RADIO：单选
- SLOT：段落
- INPUT：填空题
- CHECKBOX：多选',
            'type' => 'string',
            'example' => 'RADIO',
          ),
          'Progress' => 
          array (
            'title' => '进度',
            'description' => '进度，返回值为None或JSON类型的数据。其中：
- Total：总的结果量。
- Finished：已完成的结果量。',
            'type' => 'string',
            'example' => 'None',
          ),
          'Version' => 
          array (
            'title' => '版本',
            'description' => '版本。',
            'type' => 'string',
            'example' => '1646643768468',
          ),
          'MarkTime' => 
          array (
            'title' => '标注时间',
            'description' => '标注时间。',
            'type' => 'string',
            'example' => 'Mon Mar 07 17:02:48 CST 2022',
          ),
          'UserMarkResultId' => 
          array (
            'title' => '用户标记结果ID',
            'description' => '用户标记结果ID。',
            'type' => 'string',
            'example' => '1500***849358032896',
          ),
          'IsNeedVoteJudge' => 
          array (
            'title' => '是否需要投票',
            'description' => '是否需要投票，取值如下：
- True：是
- False：否',
            'type' => 'boolean',
            'example' => 'False',
          ),
        ),
      ),
      'OpenDatasetProxyAppendDataRequest' => 
      array (
        'title' => 'A short description of struct',
        'description' => '数据追加结构体。',
        'type' => 'object',
        'properties' => 
        array (
          'TaskId' => 
          array (
            'title' => 'TaskId',
            'description' => '任务id，表示往该任务追加数据',
            'type' => 'string',
            'example' => '154***518306500608',
          ),
          'UUID' => 
          array (
            'title' => 'BizNo',
            'description' => '唯一标识ID，业务方控制。',
            'type' => 'string',
            'example' => 'e5c9db3f-f27c-445e-a52b-06ba6d1ba00f',
          ),
          'DataMeta' => 
          array (
            'title' => 'LabelDataList',
            'description' => '数据list，目前一次调用最多100条记录，数组中的每个元素是一个map',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'key-value表示原数据字段名和字段值。示例：{"cate": "dog"}',
              'type' => 'object',
              'additionalProperties' => 
              array (
                'description' => '原数据字段值。',
                'type' => 'string',
                'example' => 'http://test-bucket-duplicate.oss-cn-hangzhou.aliyuncs.com/fe-test/ocr/table/1.jpeg',
              ),
            ),
          ),
          'TraceId' => 
          array (
            'title' => 'TraceId',
            'description' => 'TraceId',
            'type' => 'string',
            'example' => '0bc1ec3916825622257033399edb6b',
          ),
        ),
      ),
      'QuestionOption' => 
      array (
        'title' => 'A short description of struct',
        'description' => '选项描述。',
        'type' => 'object',
        'properties' => 
        array (
          'Label' => 
          array (
            'title' => '标签展示名',
            'description' => '标签展示名。',
            'type' => 'string',
            'required' => true,
            'example' => 'dog',
          ),
          'Key' => 
          array (
            'title' => '标签名称',
            'description' => '标签名称。',
            'type' => 'string',
            'required' => true,
            'example' => '12',
          ),
          'Shortcut' => 
          array (
            'title' => '快捷键',
            'description' => '快捷键。',
            'type' => 'string',
            'example' => '1',
          ),
          'Color' => 
          array (
            'title' => '颜色',
            'description' => '颜色。',
            'type' => 'string',
            'example' => '#239125',
          ),
          'Remark' => 
          array (
            'title' => '备注',
            'description' => '备注。',
            'type' => 'string',
            'example' => '第一道题目',
          ),
          'Children' => 
          array (
            'title' => '下级选项',
            'description' => '下级选项列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '参考QuestionOption参数列表进行配置。',
              '$ref' => '#/components/schemas/QuestionOption',
            ),
          ),
        ),
      ),
      'QuestionPlugin' => 
      array (
        'title' => 'A short description of struct',
        'description' => '题目组件',
        'type' => 'object',
        'properties' => 
        array (
          'MarkTitle' => 
          array (
            'title' => '组件标题',
            'description' => '组件标题',
            'type' => 'string',
            'required' => true,
            'example' => '内部单选',
          ),
          'MarkTitleAlias' => 
          array (
            'title' => '题目别名',
            'description' => '题目别名',
            'type' => 'string',
            'example' => '单选',
          ),
          'Type' => 
          array (
            'title' => '组件类型',
            'description' => '组件类型',
            'type' => 'string',
            'required' => true,
            'example' => 'RADIO',
          ),
          'MustFill' => 
          array (
            'title' => '是否必填',
            'description' => '是否必填',
            'type' => 'boolean',
            'required' => true,
            'example' => 'False',
          ),
          'Display' => 
          array (
            'title' => '是否显示',
            'description' => '是否显示',
            'type' => 'boolean',
            'required' => true,
            'example' => 'True',
          ),
          'Selected' => 
          array (
            'title' => '是否选中',
            'description' => '是否选中',
            'type' => 'boolean',
            'example' => 'False',
          ),
          'SelectGroup' => 
          array (
            'title' => '选择组',
            'description' => '选择组',
            'type' => 'string',
            'example' => 'g1',
          ),
          'DefaultResult' => 
          array (
            'title' => '默认结果',
            'description' => '默认结果',
            'type' => 'string',
            'example' => '1',
          ),
          'Rule' => 
          array (
            'title' => '正则, 校验规则',
            'description' => '正则, 校验规则',
            'type' => 'string',
            'example' => '""',
          ),
          'CanSelect' => 
          array (
            'title' => '是否可以选择',
            'description' => '是否可以选择',
            'type' => 'boolean',
            'example' => 'False',
          ),
          'Children' => 
          array (
            'title' => '子组件',
            'description' => '子组件列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '子组件',
              '$ref' => '#/components/schemas/QuestionPlugin',
            ),
          ),
          'Exif' => 
          array (
            'title' => '额外备注信息',
            'description' => '额外备注信息',
            'type' => 'object',
            'example' => 'false',
          ),
          'PreOptions' => 
          array (
            'title' => '填空题预制选项',
            'description' => '填空题预制选项列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '预填',
              'type' => 'string',
              'example' => 'options',
            ),
          ),
          'Options' => 
          array (
            'title' => '选项配置',
            'description' => '选项配置列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '选项',
              '$ref' => '#/components/schemas/QuestionOption',
            ),
            'required' => true,
          ),
          'HotKeyMap' => 
          array (
            'title' => '快捷键Map',
            'description' => '快捷键Map',
            'type' => 'string',
            'example' => '""',
          ),
          'QuestionId' => 
          array (
            'title' => '题目组件ID',
            'description' => '题目组件ID',
            'type' => 'string',
            'required' => true,
            'example' => '123',
          ),
        ),
      ),
      'SimpleSubtask' => 
      array (
        'title' => 'A short description of struct',
        'description' => '简单的子任务结构。',
        'type' => 'object',
        'properties' => 
        array (
          'SubtaskId' => 
          array (
            'title' => '子任务ID',
            'description' => '子任务ID。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1500***457270333440',
          ),
          'Status' => 
          array (
            'title' => '状态',
            'description' => '状态。',
            'type' => 'string',
            'example' => 'FINISHED',
          ),
          'Items' => 
          array (
            'title' => '子任务的ITEM列表',
            'description' => '子任务的ITEM列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '项目。',
              'type' => 'object',
              'properties' => 
              array (
                'FeedbackRemark' => 
                array (
                  'title' => '验收反馈',
                  'description' => '验收反馈。',
                  'type' => 'string',
                  'example' => '验收完成',
                ),
                'FeedbackFlag' => 
                array (
                  'title' => '反馈标记',
                  'description' => '反馈标记。',
                  'type' => 'boolean',
                  'example' => 'false',
                ),
                'DataId' => 
                array (
                  'title' => '日期ID',
                  'description' => '日期ID。',
                  'type' => 'string',
                  'example' => '175296157992643****',
                ),
                'State' => 
                array (
                  'title' => '状态',
                  'description' => '状态：

- INIT：初始状态。
- TOPUBLISH：待发布。
- CREATED：已创建。
- HANDLING：处理中。
- VOTING：投票中。
- FNISHED：已完成。
- FAIL：失败。
- EXPIRE：超时。
- DISCARDED：被动废弃。
- DISABLE：主动废弃。
- LOCKED：锁定。
- OFFLINE：下线。
- MERGING：合并结果中。',
                  'type' => 'string',
                  'example' => 'HANDLING',
                ),
                'Mine' => 
                array (
                  'title' => '是否指派给我',
                  'description' => '是否指派给我：
- 0：表示不指派给我。
- 1：表示指派给我。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '0',
                ),
                'RejectFlag' => 
                array (
                  'title' => '跳过标记',
                  'description' => '跳过标记。',
                  'type' => 'boolean',
                  'example' => 'false',
                ),
                'FixedFlag' => 
                array (
                  'title' => '失败标记',
                  'description' => '失败标记。',
                  'type' => 'boolean',
                  'example' => 'false',
                ),
                'AbandonFlag' => 
                array (
                  'title' => '废弃标记',
                  'description' => '废弃标记。',
                  'type' => 'boolean',
                  'example' => 'false',
                ),
                'AbandonRemark' => 
                array (
                  'title' => '废弃说明',
                  'description' => '废弃说明。',
                  'type' => 'string',
                  'example' => '原始数据有问题',
                ),
                'Weight' => 
                array (
                  'title' => '权重',
                  'description' => '权重。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '311011',
                ),
                'ItemId' => 
                array (
                  'title' => 'ItemId',
                  'description' => '数据项ID。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '15116***94667356160',
                ),
              ),
            ),
          ),
        ),
      ),
      'SimpleTask' => 
      array (
        'title' => 'A short description of struct',
        'description' => '列表页任务描述。',
        'type' => 'object',
        'properties' => 
        array (
          'Creator' => 
          array (
            'title' => '创建人信息',
            'description' => '创建人信息。',
            '$ref' => '#/components/schemas/SimpleUser',
          ),
          'Modifier' => 
          array (
            'title' => '修改人信息',
            'description' => '修改人信息。',
            '$ref' => '#/components/schemas/SimpleUser',
          ),
          'GmtCreateTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建UTC时间。',
            'type' => 'string',
            'example' => '2021-07-07 16:09:20',
          ),
          'GmtModifiedTime' => 
          array (
            'title' => '修改时间',
            'description' => '修改UTC时间。',
            'type' => 'string',
            'example' => '2021-07-07 16:09:20',
          ),
          'TaskName' => 
          array (
            'title' => '任务名称',
            'description' => '任务名称。',
            'type' => 'string',
            'example' => 'demo',
          ),
          'TaskId' => 
          array (
            'title' => '任务ID',
            'description' => '任务ID。',
            'type' => 'string',
            'example' => '15438***8306500608',
          ),
          'TemplateId' => 
          array (
            'title' => '模版ID',
            'description' => '模板ID。',
            'type' => 'string',
            'example' => '1529***348342353920',
          ),
          'TaskType' => 
          array (
            'title' => '任务类型',
            'description' => '任务类型。',
            'type' => 'string',
            'example' => 'NORMAL',
          ),
          'TenantId' => 
          array (
            'title' => '租户ID',
            'description' => '租户ID。',
            'type' => 'string',
            'example' => 'GA***W134',
          ),
          'Remark' => 
          array (
            'title' => '备注信息',
            'description' => '备注信息。',
            'type' => 'string',
            'example' => '备注',
          ),
          'LabelStyle' => 
          array (
            'title' => '标签样式',
            'description' => '标签样式。',
            'type' => 'string',
            'example' => 'IMG',
          ),
          'WorkflowNodes' => 
          array (
            'title' => '工作流结点',
            'description' => '工作流节点。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '节点。',
              'type' => 'string',
              'example' => '节点值',
            ),
            'required' => false,
          ),
          'Tags' => 
          array (
            'title' => '任务标签',
            'description' => '任务标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'type' => 'string',
              'example' => 'text',
            ),
            'required' => false,
          ),
          'Archived' => 
          array (
            'title' => '是否已归档',
            'description' => '是否已归档。可能值：
- false：未归档。
- true：已归档。',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'Stage' => 
          array (
            'title' => '当前的结点',
            'description' => '当前的节点。可能值：
- MARK：标注中。
- CHECK：检查中。
- FINISHED：已完成。',
            'type' => 'string',
            'example' => 'MARK',
          ),
          'ArchivedInfos' => 
          array (
            'title' => '归档信息',
            'description' => '归档信息。',
            'type' => 'string',
            'example' => 'null',
          ),
          'Status' => 
          array (
            'title' => '任务状态',
            'description' => '任务状态。可能值：
- CREATED
- SUCCESS',
            'type' => 'string',
            'example' => 'CREATED',
          ),
          'RefTaskId' => 
          array (
            'title' => '周期任务ID',
            'description' => '周期任务ID。',
            'type' => 'string',
            'example' => '123***5124',
          ),
          'UUID' => 
          array (
            'title' => '唯一标识ID',
            'description' => '唯一标识ID。',
            'type' => 'string',
            'example' => 'paiworkspace-****',
          ),
        ),
      ),
      'SimpleTemplate' => 
      array (
        'title' => 'A short description of struct',
        'description' => '简单的模板结构',
        'type' => 'object',
        'properties' => 
        array (
          'TemplateId' => 
          array (
            'title' => '模板ID',
            'description' => '模板ID',
            'type' => 'string',
            'example' => '154***1431673270272',
          ),
          'TemplateName' => 
          array (
            'title' => '模板名称',
            'description' => '模板名称',
            'type' => 'string',
            'example' => '图片分割组合77aa',
          ),
          'TenantId' => 
          array (
            'title' => '模板所在租户ID',
            'description' => '模板所在租户ID',
            'type' => 'string',
            'example' => 'GA***W134',
          ),
          'Description' => 
          array (
            'title' => '模板简介',
            'description' => '模板简介',
            'type' => 'string',
            'example' => '图片分割的模板',
          ),
          'Status' => 
          array (
            'title' => '状态',
            'description' => '状态',
            'type' => 'string',
            'example' => 'DRAFT',
          ),
          'Tags' => 
          array (
            'title' => '标记',
            'description' => '标记列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标记',
              'type' => 'string',
              'example' => 'TEXT',
            ),
          ),
          'SharedMode' => 
          array (
            'title' => '是否共享',
            'description' => '是否共享',
            'type' => 'string',
            'example' => 'ALL',
          ),
          'AbandonReasons' => 
          array (
            'title' => '模板废弃的原因',
            'description' => '模板废弃的原因',
            'type' => 'string',
            'example' => '["无效"]',
          ),
          'Type' => 
          array (
            'title' => '类型',
            'description' => '类型',
            'type' => 'string',
            'example' => 'CUSTOM',
          ),
          'GmtCreateTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间',
            'type' => 'string',
            'example' => '2022-07-12 14:21:08',
          ),
          'GmtModifiedTime' => 
          array (
            'title' => '更新时间',
            'description' => '更新时间',
            'type' => 'string',
            'example' => '2022-07-12 14:21:08',
          ),
        ),
      ),
      'SimpleTenant' => 
      array (
        'title' => '租户信息',
        'description' => '租户信息',
        'type' => 'object',
        'properties' => 
        array (
          'Creator' => 
          array (
            'description' => '创建者',
            '$ref' => '#/components/schemas/SimpleUser',
          ),
          'GmtCreateTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间',
            'type' => 'string',
            'example' => '2021-07-07 16:09:20',
          ),
          'GmtModifiedTime' => 
          array (
            'title' => '修改时间',
            'description' => '修改时间',
            'type' => 'string',
            'example' => '2021-07-07 16:09:20',
          ),
          'TenantId' => 
          array (
            'title' => '租户ID',
            'description' => '租户ID',
            'type' => 'string',
            'example' => 'GA***W134',
          ),
          'TenantName' => 
          array (
            'title' => '租户名称',
            'description' => '租户名称',
            'type' => 'string',
            'example' => 'demo',
          ),
          'UUID' => 
          array (
            'title' => '唯一标志符',
            'description' => '唯一标志符',
            'type' => 'string',
            'example' => 'paiworkspace-0001',
          ),
          'Description' => 
          array (
            'title' => '描述',
            'description' => '描述',
            'type' => 'string',
            'example' => '这是一个测试租户',
          ),
          'Role' => 
          array (
            'title' => '角色信息',
            'description' => '角色信息',
            'type' => 'string',
            'example' => 'ADMIN',
          ),
          'Modifier' => 
          array (
            'title' => '修改人信息',
            'description' => '修改人信息',
            '$ref' => '#/components/schemas/SimpleUser',
          ),
        ),
      ),
      'SimpleUser' => 
      array (
        'title' => 'A short description of struct',
        'description' => '租户用户信息',
        'type' => 'object',
        'properties' => 
        array (
          'UserId' => 
          array (
            'title' => '用户ID',
            'description' => '用户ID',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '166***9980757311',
          ),
          'AccountType' => 
          array (
            'title' => '账户类型',
            'description' => '账户类型',
            'type' => 'string',
            'example' => 'ALIYUN',
          ),
          'AccountNo' => 
          array (
            'title' => '账户ID',
            'description' => '账户ID',
            'type' => 'string',
            'example' => '166***9980757310',
          ),
          'UserName' => 
          array (
            'title' => '用户名',
            'description' => '用户名',
            'type' => 'string',
            'example' => 'txdemo@test.aliyunid.com',
          ),
          'Role' => 
          array (
            'title' => '角色',
            'description' => '角色',
            'type' => 'string',
            'example' => 'ADMIN',
          ),
        ),
      ),
      'SimpleWorkforce' => 
      array (
        'description' => '项目。',
        'type' => 'object',
        'properties' => 
        array (
          'WorkNodeId' => 
          array (
            'title' => '结点ID',
            'description' => '结点ID。如何获取节点ID，请参见[GetTaskWorkforce](~~454697~~)。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '2',
          ),
          'UserIds' => 
          array (
            'title' => '人员信息',
            'description' => '人员信息列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用户ID。如何获取用户ID，请参见[GetTaskWorkforceStatistic](~~454699~~)。',
              'type' => 'integer',
              'format' => 'int64',
              'example' => '1662***980757311',
            ),
            'required' => false,
          ),
        ),
        'required' => false,
      ),
      'SingleTenant' => 
      array (
        'title' => 'A short description of struct',
        'description' => '单个租户信息',
        'type' => 'object',
        'properties' => 
        array (
          'Description' => 
          array (
            'title' => '租户描述',
            'description' => '租户描述',
            'type' => 'string',
            'example' => '该租户用来测试',
          ),
          'TenantName' => 
          array (
            'title' => '租户名称',
            'description' => '租户名称',
            'type' => 'string',
            'example' => 'demo',
          ),
          'UUID' => 
          array (
            'title' => '租户唯一标识',
            'description' => '租户唯一标识',
            'type' => 'string',
            'example' => 'paiworkspace-0001',
          ),
          'TenantId' => 
          array (
            'title' => '租户ID',
            'description' => '租户ID',
            'type' => 'string',
            'example' => 'GA***134',
          ),
          'Status' => 
          array (
            'title' => '租户状态',
            'description' => '租户状态',
            'type' => 'string',
            'example' => 'CREATED',
          ),
        ),
      ),
      'SubtaskDetail' => 
      array (
        'title' => 'A short description of struct',
        'description' => '简单的子任务结构',
        'type' => 'object',
        'properties' => 
        array (
          'SubtaskId' => 
          array (
            'title' => '子任务ID',
            'description' => '子任务ID',
            'type' => 'string',
            'example' => '1500***457270333440',
          ),
          'Status' => 
          array (
            'title' => '状态',
            'description' => '状态',
            'type' => 'string',
            'example' => 'FINISHED',
          ),
          'Items' => 
          array (
            'title' => '子任务的ITEM列表',
            'description' => '子任务的ITEM列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '项目',
              'type' => 'object',
              'properties' => 
              array (
                'FeedbackRemark' => 
                array (
                  'title' => '验收反馈',
                  'description' => '验收反馈',
                  'type' => 'string',
                  'example' => '标注内容合格',
                ),
                'FeedbackFlag' => 
                array (
                  'title' => '反馈标记',
                  'description' => '反馈标记',
                  'type' => 'boolean',
                  'example' => 'False',
                ),
                'DataId' => 
                array (
                  'title' => '日期ID',
                  'description' => '日期ID',
                  'type' => 'string',
                  'example' => '1957578084',
                ),
                'State' => 
                array (
                  'title' => '状态',
                  'description' => '状态',
                  'type' => 'string',
                  'enumValueTitles' => 
                  array (
                    'HANDLING' => 'HANDLING',
                    'CREATE' => 'CREATE',
                  ),
                  'example' => 'HANDLING',
                ),
                'Mine' => 
                array (
                  'title' => '是否指派给我',
                  'description' => '是否指派给我',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '0',
                ),
                'RejectFlag' => 
                array (
                  'title' => '跳过标记',
                  'description' => '跳过标记',
                  'type' => 'boolean',
                  'example' => 'False',
                ),
                'FixedFlag' => 
                array (
                  'title' => '失败标记',
                  'description' => '失败标记',
                  'type' => 'boolean',
                  'example' => 'False',
                ),
                'AbandonFlag' => 
                array (
                  'title' => '废弃标记',
                  'description' => '废弃标记',
                  'type' => 'boolean',
                  'example' => 'False',
                ),
                'AbandonRemark' => 
                array (
                  'title' => '废弃说明',
                  'description' => '废弃说明',
                  'type' => 'string',
                  'example' => '原始数据错误',
                ),
                'Weight' => 
                array (
                  'title' => '权重',
                  'description' => '权重',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '311011',
                ),
              ),
            ),
          ),
          'TaskId' => 
          array (
            'title' => '子任务所属任务ID',
            'description' => '子任务所属任务ID',
            'type' => 'string',
            'example' => '1511***994667356160',
          ),
          'CurrentWorkNode' => 
          array (
            'title' => '当前节点类型',
            'description' => '当前节点类型',
            'type' => 'string',
            'example' => 'MARK',
          ),
          'WorkNodeState' => 
          array (
            'title' => '当前节点状态',
            'description' => '当前节点状态',
            'type' => 'string',
            'example' => 'FINISHED',
          ),
          'Workforce' => 
          array (
            'title' => '子任务标注人力',
            'description' => '子任务标注人力列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '人力',
              '$ref' => '#/components/schemas/Workforce',
            ),
          ),
          'CanReassign' => 
          array (
            'title' => '是否能够分配',
            'description' => '是否能够分配',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'CanRelease' => 
          array (
            'title' => '是否能够释放',
            'description' => '是否能够释放',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'CanDiscard' => 
          array (
            'title' => '是否能够废弃',
            'description' => '是否能够废弃',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'Weight' => 
          array (
            'title' => '任务权重',
            'description' => '任务权重',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '631548',
          ),
          'ExtConfigs' => 
          array (
            'title' => '额外参数',
            'description' => '额外参数',
            'type' => 'string',
            'deprecated' => false,
            'example' => 'null',
          ),
        ),
      ),
      'SubtaskItemDetail' => 
      array (
        'title' => 'A short description of struct',
        'description' => '子任务ITEM详情',
        'type' => 'object',
        'properties' => 
        array (
          'ItemId' => 
          array (
            'title' => 'ITEM的ID',
            'description' => 'ITEM的ID',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1500***47176994816',
          ),
          'Annotations' => 
          array (
            'title' => '标注结果',
            'description' => '标注结果列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '项目',
              'type' => 'object',
              'properties' => 
              array (
                'FeedbackRemark' => 
                array (
                  'title' => '验收反馈',
                  'description' => '验收反馈',
                  'type' => 'string',
                  'example' => '验收成功/所有投票结果都未被采纳',
                ),
                'FeedbackFlag' => 
                array (
                  'title' => '反馈标记',
                  'description' => '反馈标记',
                  'type' => 'boolean',
                  'example' => 'False',
                ),
                'DataId' => 
                array (
                  'title' => '日期ID',
                  'description' => '日期ID',
                  'type' => 'string',
                  'example' => '1957578084',
                ),
                'State' => 
                array (
                  'title' => '状态',
                  'description' => '状态',
                  'type' => 'string',
                  'example' => 'HANDLING',
                ),
                'Mine' => 
                array (
                  'title' => '是否指派给我',
                  'description' => '是否指派给我',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '0',
                ),
                'RejectFlag' => 
                array (
                  'title' => '跳过标记',
                  'description' => '跳过标记',
                  'type' => 'boolean',
                  'example' => 'False',
                ),
                'FixedFlag' => 
                array (
                  'title' => '失败标记',
                  'description' => '失败标记',
                  'type' => 'boolean',
                  'example' => 'False',
                ),
                'AbandonFlag' => 
                array (
                  'title' => '废弃标记',
                  'description' => '废弃标记',
                  'type' => 'boolean',
                  'example' => 'False',
                ),
                'AbandonRemark' => 
                array (
                  'title' => '废弃说明',
                  'description' => '废弃说明',
                  'type' => 'string',
                  'example' => '原始数据错误',
                ),
                'Weight' => 
                array (
                  'title' => '权重',
                  'description' => '权重',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '311011',
                ),
              ),
            ),
          ),
          'DataSource' => 
          array (
            'title' => '数据源',
            'description' => '数据源',
            'type' => 'object',
            'example' => 'None',
          ),
        ),
      ),
      'TaskAssginConfig' => 
      array (
        'title' => 'A short description of struct',
        'description' => '创建分配结构体。',
        'type' => 'object',
        'properties' => 
        array (
          'AssignType' => 
          array (
            'title' => '分配类型',
            'description' => '任务包的分配规则，取值如下：
- FIXED_SIZE：按固定大小分配。
- AVG_SIZE：按平均数量进行分配。
- FIELD_BASE：按导入字段进行分配。',
            'type' => 'string',
            'example' => 'FIXED_SIZE',
            'default' => 'FIXED_SIZE',
            'enum' => 
            array (
              0 => 'FIXED_SIZE',
              1 => 'AVG_SIZE',
              2 => 'FIELD_BASE',
            ),
          ),
          'AssignCount' => 
          array (
            'title' => '分配数量',
            'description' => '分配数量。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '2',
          ),
          'AssignField' => 
          array (
            'title' => '按照字段进行分配',
            'description' => '按照字段进行分配。',
            'type' => 'string',
            'example' => 'label_field',
          ),
          'AssignSubTaskCount' => 
          array (
            'title' => '如果选择平均分配；任务包数量',
            'description' => '如果选择平均分配；任务包数量。',
            'type' => 'string',
            'example' => '0',
          ),
        ),
      ),
      'TaskDetail' => 
      array (
        'title' => 'A short description of struct',
        'description' => '任务详情',
        'type' => 'object',
        'properties' => 
        array (
          'Creator' => 
          array (
            'title' => '创建人信息',
            'description' => '创建人信息',
            '$ref' => '#/components/schemas/SimpleUser',
          ),
          'Modifier' => 
          array (
            'title' => '修改人信息',
            'description' => '修改人信息',
            '$ref' => '#/components/schemas/SimpleUser',
          ),
          'GmtCreateTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间',
            'type' => 'string',
            'example' => '2022-07-04 11:42:57',
          ),
          'GmtModifiedTime' => 
          array (
            'title' => '修改时间',
            'description' => '修改时间',
            'type' => 'string',
            'example' => '2022-08-16 18:38:42',
          ),
          'TaskName' => 
          array (
            'title' => '任务名称',
            'description' => '任务名称',
            'type' => 'string',
            'example' => '测试任务',
          ),
          'TaskId' => 
          array (
            'title' => '任务ID',
            'description' => '任务ID',
            'type' => 'string',
            'example' => '15438***8306500608',
          ),
          'TemplateId' => 
          array (
            'title' => '模版ID',
            'description' => '模版ID',
            'type' => 'string',
            'example' => '1529***348342353920',
          ),
          'TaskType' => 
          array (
            'title' => '任务类型',
            'description' => '任务类型',
            'type' => 'string',
            'example' => 'NORMAL',
          ),
          'TenantId' => 
          array (
            'title' => '租户ID',
            'description' => '租户ID',
            'type' => 'string',
            'example' => 'GA***W134',
          ),
          'Remark' => 
          array (
            'title' => '备注信息',
            'description' => '备注信息',
            'type' => 'string',
            'example' => 'demo',
          ),
          'LabelStyle' => 
          array (
            'title' => '标注样式',
            'description' => '标注样式',
            'type' => 'string',
            'example' => 'null',
          ),
          'WorkflowNodes' => 
          array (
            'title' => '工作流结点',
            'description' => '工作流节点列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '节点',
              'type' => 'string',
              'enumValueTitles' => 
              array (
                'SAMPLING' => 'SAMPLING',
                'CHECK' => 'CHECK',
                'MARK' => 'MARK',
              ),
              'example' => 'MARK',
            ),
            'required' => false,
          ),
          'Tags' => 
          array (
            'title' => '任务标签',
            'description' => '任务标签列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签',
              'type' => 'string',
              'example' => 'text',
            ),
            'required' => false,
          ),
          'Archived' => 
          array (
            'title' => '是否已归档',
            'description' => '是否已归档',
            'type' => 'boolean',
            'example' => '0',
          ),
          'Stage' => 
          array (
            'title' => '当前的结点',
            'description' => '当前的结点',
            'type' => 'string',
            'example' => 'MARK',
          ),
          'ArchivedInfos' => 
          array (
            'title' => '归档信息',
            'description' => '归档信息',
            'type' => 'string',
            'example' => 'null',
          ),
          'Status' => 
          array (
            'title' => '任务状态',
            'description' => '任务状态',
            'type' => 'string',
            'example' => 'CREATED',
          ),
          'RefTaskId' => 
          array (
            'title' => '周期任务ID',
            'description' => '周期任务ID',
            'type' => 'string',
            'example' => '12312414',
          ),
          'UUID' => 
          array (
            'title' => '唯一标识ID',
            'description' => '唯一标识ID',
            'type' => 'string',
            'example' => 'paiworkspace-0001',
          ),
          'TaskWorkflow' => 
          array (
            'title' => '任务流配置',
            'description' => '任务流配置列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '任务',
              'type' => 'object',
              'properties' => 
              array (
                'NodeName' => 
                array (
                  'title' => '节点名字',
                  'description' => '节点名字',
                  'type' => 'string',
                  'example' => 'MARK',
                ),
                'Exif' => 
                array (
                  'title' => '额外信息',
                  'description' => '额外信息',
                  'type' => 'object',
                  'example' => 'false',
                ),
                'Users' => 
                array (
                  'title' => '用户列表',
                  'description' => '用户列表',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '用户',
                    '$ref' => '#/components/schemas/SimpleUser',
                  ),
                ),
                'Groups' => 
                array (
                  'title' => '组列表',
                  'description' => '组列表',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '组',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                ),
              ),
            ),
          ),
          'Exif' => 
          array (
            'title' => '额外配置',
            'description' => '额外配置',
            'type' => 'object',
            'example' => 'null',
          ),
          'Admins' => 
          array (
            'title' => '任务管理员',
            'description' => '任务管理员列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用户',
              '$ref' => '#/components/schemas/SimpleUser',
            ),
          ),
          'AssignConfig' => 
          array (
            'title' => '任务分发配置',
            'description' => '任务分发配置',
            'type' => 'object',
            'example' => 'null',
          ),
          'TaskTemplateConfig' => 
          array (
            'title' => '任务模版补充配置',
            'description' => '任务模版补充配置',
            'type' => 'object',
            'properties' => 
            array (
              'Exif' => 
              array (
                'title' => '模版配置额外信息',
                'description' => '模版配置额外信息',
                'type' => 'object',
                'example' => 'false',
              ),
              'TemplateOptionMap' => 
              array (
                'title' => '选项配置',
                'description' => '选项配置',
                'type' => 'object',
                'example' => '{"1":[{"label":"label1","key":"label1"}]}',
              ),
              'SelectQuestions' => 
              array (
                'title' => '任务的题目小于模版可以选择需要的题目title',
                'description' => '任务的题目小于模版可以选择需要的题目列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '题目',
                  'type' => 'string',
                  'example' => '["question1"]',
                ),
              ),
              'RobotConfig' => 
              array (
                'title' => '机器人配置',
                'description' => '机器人配置',
                'type' => 'object',
                'example' => 'null',
              ),
              'TemplateRelationId' => 
              array (
                'title' => '模板关系ID',
                'description' => '模板关系ID',
                'type' => 'string',
                'example' => '200',
              ),
              'ResourceKey' => 
              array (
                'title' => '资源Key',
                'description' => '资源Key',
                'type' => 'string',
                'example' => 'picture1',
              ),
            ),
          ),
          'TenantName' => 
          array (
            'title' => '租户名',
            'description' => '租户名',
            'type' => 'string',
            'example' => '测试任务202208101424',
          ),
          'DatasetProxyRelations' => 
          array (
            'title' => '数据代理关系',
            'description' => '数据代理关系列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '数据代理',
              'type' => 'object',
              'properties' => 
              array (
                'DatasetId' => 
                array (
                  'title' => '数据集ID',
                  'description' => '数据集ID',
                  'type' => 'string',
                  'example' => '102***124',
                ),
                'Source' => 
                array (
                  'title' => '数据集来源',
                  'description' => '数据集来源',
                  'type' => 'string',
                  'example' => 'PAI',
                ),
                'SourceBizId' => 
                array (
                  'title' => '来源业务ID',
                  'description' => '来源业务ID',
                  'type' => 'string',
                  'example' => 'd-24eyimdzdn4a98jktk',
                ),
                'DatasetType' => 
                array (
                  'title' => '数据集类型',
                  'description' => '数据集类型',
                  'type' => 'string',
                  'example' => 'LABEL',
                ),
                'Exif' => 
                array (
                  'title' => '额外信息',
                  'description' => '额外信息',
                  'type' => 'object',
                  'example' => 'false',
                ),
                'SourceDatasetId' => 
                array (
                  'title' => '来源数据集ID',
                  'description' => '来源数据集ID',
                  'type' => 'string',
                  'example' => '2312124',
                ),
              ),
            ),
          ),
          'AllowAppendData' => 
          array (
            'title' => '是否允许追加数据',
            'description' => '是否允许追加数据',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'RelateTaskConfig' => 
          array (
            'title' => '关系任务配置',
            'description' => '关系任务配置',
            'type' => 'object',
            'example' => 'null',
          ),
          'PeriodConfig' => 
          array (
            'title' => '时间配置',
            'description' => '时间配置',
            'type' => 'object',
            'example' => '{"periodConfigId":"","status":""}',
          ),
          'MineConfigs' => 
          array (
            'title' => '我的配置',
            'description' => '我的配置',
            'type' => 'object',
            'example' => 'null',
          ),
          'VoteConfigs' => 
          array (
            'title' => '投票配置',
            'description' => '投票配置',
            'type' => 'object',
            'example' => '{"1":{"VoteNum":1,"MinVote":1}}',
          ),
          'NoticeConfig' => 
          array (
            'title' => 'Notice配置',
            'description' => 'Notice配置',
            'type' => 'object',
            'example' => '{"DingHook":"","ListenActions":[],"SubTaskAlertGap":""}',
          ),
          'ResultCallbackConfig' => 
          array (
            'title' => '结果回调配置',
            'description' => '结果回调配置',
            'type' => 'object',
            'example' => '{"RetMsgMode":"","Exif":{}}',
          ),
          'runMsg' => 
          array (
            'title' => '运行消息',
            'description' => '运行消息',
            'type' => 'string',
            'example' => 'xxxxx',
          ),
          'AlertTime' => 
          array (
            'title' => '提醒时间',
            'description' => '提醒时间',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '12412312',
          ),
        ),
      ),
      'TaskStatistic' => 
      array (
        'title' => 'A short description of struct',
        'description' => '任务统计信息',
        'type' => 'object',
        'properties' => 
        array (
          'TotalItemCount' => 
          array (
            'title' => '总的Item数量',
            'description' => '总的数据项',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '3',
            'default' => '0',
          ),
          'TotalSubtaskCount' => 
          array (
            'title' => '总的Subtask数量',
            'description' => '总的子任务数量',
            'type' => 'integer',
            'format' => 'int64',
            'minimum' => '0',
            'example' => '3',
            'default' => '0',
          ),
          'FinishedItemCount' => 
          array (
            'title' => '完成的Item数量',
            'description' => '完成的数据项',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '3',
          ),
          'FinishedSubtaskCount' => 
          array (
            'title' => '完成的Subtask数量',
            'description' => '完成的子任务数量',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '3',
          ),
          'FinalAbandonCount' => 
          array (
            'title' => '废弃Item数量',
            'description' => '废弃数据项',
            'type' => 'number',
            'format' => 'float',
            'example' => '0',
          ),
          'PreMarkFixedCount' => 
          array (
            'title' => '预标注订正数量',
            'description' => '预标注订正数量',
            'type' => 'number',
            'format' => 'float',
            'minimum' => '0',
            'example' => '0',
            'default' => '0',
          ),
          'AcceptItemCount' => 
          array (
            'title' => '通过的item数量',
            'description' => '通过的数据项',
            'type' => 'number',
            'format' => 'float',
            'example' => '0',
          ),
          'TotalCheckedCount' => 
          array (
            'title' => '总的检查数量',
            'description' => '总的检查数量',
            'type' => 'number',
            'format' => 'float',
            'example' => '0',
          ),
          'CheckedError' => 
          array (
            'title' => '检查流程发现错误数量',
            'description' => '检查流程发现错误数量',
            'type' => 'number',
            'format' => 'float',
            'example' => '0',
          ),
          'CheckAbandon' => 
          array (
            'title' => '检查流程废弃数量',
            'description' => '检查流程废弃数量',
            'type' => 'number',
            'format' => 'float',
            'example' => '0',
          ),
          'CheckedAccuracy' => 
          array (
            'title' => '检查准确率',
            'description' => '检查准确率',
            'type' => 'number',
            'format' => 'float',
            'minimum' => '0',
            'example' => '0',
            'default' => '0.0',
          ),
          'CheckedRejectCount' => 
          array (
            'title' => '检查数量',
            'description' => '检查数量',
            'type' => 'number',
            'format' => 'float',
            'example' => '0',
          ),
          'TotalSampledCount' => 
          array (
            'title' => '总的抽样数量',
            'description' => '总的抽样数量',
            'type' => 'number',
            'format' => 'float',
            'example' => '0',
          ),
          'SampledErrorCount' => 
          array (
            'title' => '抽样错误错误样本数量',
            'description' => '抽样错误样本数量',
            'type' => 'number',
            'format' => 'float',
            'example' => '0',
          ),
          'SampledRejectCount' => 
          array (
            'title' => '抽样被拒绝数量',
            'description' => '抽样被拒绝数量',
            'type' => 'number',
            'format' => 'float',
            'example' => '0',
          ),
          'SampledAccuracy' => 
          array (
            'title' => '抽样准确率',
            'description' => '抽样准确率',
            'type' => 'number',
            'format' => 'float',
            'minimum' => '0',
            'example' => '0',
            'default' => '0.0',
          ),
          'TotalSamplingCount' => 
          array (
            'title' => '总的抽样验收数量',
            'description' => '总的抽样验收数量',
            'type' => 'number',
            'format' => 'float',
            'example' => '0',
          ),
          'TotalCheckCount' => 
          array (
            'title' => '总的检查环节数量',
            'description' => '总的检查环节数量',
            'type' => 'number',
            'format' => 'float',
            'example' => '0',
          ),
          'TotalWorkTime' => 
          array (
            'title' => '总的工作时间（小时）',
            'description' => '总的工作时间（小时）',
            'type' => 'number',
            'format' => 'float',
            'example' => '0',
          ),
          'TotalMarkTime' => 
          array (
            'title' => '标注环节总时间（小时CheckEfficiency）',
            'description' => '标注环节总时间（小时CheckEfficiency）',
            'type' => 'number',
            'format' => 'float',
            'minimum' => '0',
            'example' => '0',
            'default' => '0.0',
          ),
          'MarkEfficiency' => 
          array (
            'title' => '标注效率（个/小时）',
            'description' => '标注效率（个/小时）',
            'type' => 'number',
            'format' => 'float',
            'example' => '0',
          ),
          'TotalCheckTime' => 
          array (
            'title' => '总检查时间（小时）',
            'description' => '总检查时间（小时）',
            'type' => 'number',
            'format' => 'float',
            'example' => '0',
            'default' => '0.0',
          ),
          'CheckEfficiency' => 
          array (
            'title' => '检查环节效率（个/小时）',
            'description' => '检查环节效率（个/小时）',
            'type' => 'number',
            'format' => 'float',
            'minimum' => '0',
            'example' => '0',
            'default' => '0.0',
          ),
          'SamplingAccuracy' => 
          array (
            'title' => '采样精度',
            'description' => '采样精度',
            'type' => 'number',
            'format' => 'float',
            'minimum' => '0',
            'example' => '0',
            'default' => '0.0',
          ),
          'CheckAccuracy' => 
          array (
            'title' => '检查精度',
            'description' => '检查精度',
            'type' => 'number',
            'format' => 'float',
            'minimum' => '0',
            'example' => '0',
            'default' => '0.0',
          ),
        ),
      ),
      'TaskTemplateConfig' => 
      array (
        'title' => 'A short description of struct',
        'description' => '任务模板补充配置。',
        'type' => 'object',
        'properties' => 
        array (
          'Exif' => 
          array (
            'title' => '拓展字段',
            'description' => '模板配置额外信息。',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '模板配置额外信息。',
              'type' => 'string',
              'example' => 'false',
            ),
          ),
          'TemplateOptionMap' => 
          array (
            'title' => '通用模版选项配置',
            'description' => '模板选项配置。',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '任务模板选项配置。',
              'example' => '{"1":[{"label":"Option-A","key":"Option-A"},{"label":"Option-A","key":"Option-A"}]}',
              '$ref' => '#/components/schemas/TaskTemplateOptionConfig',
            ),
          ),
          'SelectQuestions' => 
          array (
            'title' => '如果只需要模版部分题目；题目名称',
            'description' => '模板部分题目列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '题目。',
              'type' => 'string',
              'example' => '["question1","question2"]',
            ),
          ),
          'TemplateRelationId' => 
          array (
            'title' => '依赖的模版ID',
            'description' => '依赖的模板ID。',
            'type' => 'string',
            'example' => '154***2391839854592',
          ),
          'ResourceKey' => 
          array (
            'title' => 'View对应的展示字段',
            'description' => 'View对应的展示字段。',
            'type' => 'string',
            'example' => 'url',
          ),
        ),
      ),
      'TaskTemplateOptionConfig' => 
      array (
        'title' => 'A short description of struct',
        'description' => '通用模版（COMMON）题目配置。',
        'type' => 'object',
        'properties' => 
        array (
          'DefaultResult' => 
          array (
            'title' => 'DefaultResult',
            'description' => '默认值需要根据题目进行适配，若是单选或文本框则直接填写标签值；若是多选，则配置为["{标签 1}", "{标签 2}"]。',
            'type' => 'string',
            'example' => '猫咪',
          ),
          'Rule' => 
          array (
            'title' => 'Rule',
            'description' => '校验规则项；针对文本类填空题目有效。',
            'type' => 'string',
            'example' => '\\w+',
          ),
          'PreOptions' => 
          array (
            'title' => 'PreOptions',
            'description' => '文本类题目预制选项列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '文本选项。',
              'type' => 'string',
              'example' => 'options',
            ),
          ),
          'Options' => 
          array (
            'title' => 'Options',
            'description' => '选择题目选项列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '题目选项。',
              '$ref' => '#/components/schemas/QuestionOption',
            ),
          ),
        ),
      ),
      'TemplateDTO' => 
      array (
        'title' => 'A short description of struct',
        'description' => '模版基础结构',
        'type' => 'object',
        'properties' => 
        array (
          'TemplateName' => 
          array (
            'title' => 'TemplateName',
            'description' => '模板名称',
            'type' => 'string',
            'required' => true,
            'example' => 'demo',
          ),
          'Description' => 
          array (
            'title' => '模版描述',
            'description' => '模版描述',
            'type' => 'string',
            'example' => 'demo',
          ),
          'Exif' => 
          array (
            'title' => '模版额外信息',
            'description' => '模版额外信息',
            'type' => 'object',
            'example' => 'false',
          ),
          'Tags' => 
          array (
            'title' => '标签信息',
            'description' => '标签信息列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签',
              'type' => 'string',
              'example' => 'TEXT',
            ),
          ),
          'ViewConfigs' => 
          array (
            'title' => '视图层配置',
            'description' => '视图层配置',
            'type' => 'object',
            'properties' => 
            array (
              'ViewPlugins' => 
              array (
                'title' => '视图组件',
                'description' => '视图组件列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '视图',
                  'required' => false,
                  '$ref' => '#/components/schemas/ViewPlugin',
                ),
              ),
            ),
            'required' => true,
          ),
          'QuestionConfigs' => 
          array (
            'title' => '题目组件配置',
            'description' => '题目组件配置列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '参考',
              '$ref' => '#/components/schemas/QuestionPlugin',
            ),
            'required' => true,
          ),
          'Classify' => 
          array (
            'title' => '模板分类',
            'description' => '模板分类',
            'type' => 'string',
            'example' => 'picture',
          ),
          'SharedMode' => 
          array (
            'title' => '模板共享模式',
            'description' => '模板共享模式',
            'type' => 'string',
            'example' => 'true',
          ),
          'RobotConfigs' => 
          array (
            'title' => '只能辅助标注配置',
            'description' => '辅助标注配置列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '辅助',
              'type' => 'object',
              'example' => '{   "RobotId": "00001",   "QuestionId": 1,   "Stage": "LABEL",   "Params": {},   "Type": "HTTP_SERVICE",   "ResultPath": "content.label.url",   "DefaultResult": "1" }',
            ),
          ),
          'TemplateId' => 
          array (
            'title' => '模板ID',
            'description' => '模板ID',
            'type' => 'string',
            'example' => '1529***48342353920',
          ),
        ),
      ),
      'TemplateDetail' => 
      array (
        'title' => 'A short description of struct',
        'description' => '模版详情',
        'type' => 'object',
        'properties' => 
        array (
          'GmtCreateTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间',
            'type' => 'string',
            'example' => '2021-07-07 16:09:20',
          ),
          'GmtModifiedTime' => 
          array (
            'title' => '修改时间',
            'description' => '修改时间',
            'type' => 'string',
            'example' => '2021-07-07 16:09:20',
          ),
          'TemplateId' => 
          array (
            'title' => '模版ID',
            'description' => '模版ID',
            'type' => 'string',
            'example' => '1529***48342353920',
          ),
          'TemplateName' => 
          array (
            'title' => 'TemplateName',
            'description' => '模板名称',
            'type' => 'string',
            'example' => 'demo',
          ),
          'Description' => 
          array (
            'title' => '模版描述',
            'description' => '模版描述',
            'type' => 'string',
            'example' => 'demo',
          ),
          'Exif' => 
          array (
            'title' => '模版额外信息',
            'description' => '模版额外信息',
            'type' => 'object',
            'example' => 'false',
          ),
          'Status' => 
          array (
            'title' => '模版状态',
            'description' => '模版状态',
            'type' => 'string',
            'example' => 'CREATED',
          ),
          'Tags' => 
          array (
            'title' => '标签信息',
            'description' => '标签信息',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签',
              'type' => 'string',
              'example' => 'text',
            ),
          ),
          'AbandonReasons' => 
          array (
            'title' => '废弃原因',
            'description' => '废弃原因',
            'type' => 'array',
            'items' => 
            array (
              'description' => '原因',
              'type' => 'string',
              'example' => 'error',
            ),
          ),
          'Type' => 
          array (
            'title' => '模版类型',
            'description' => '模版类型',
            'type' => 'string',
            'example' => 'picture',
          ),
          'QuestionConfigs' => 
          array (
            'title' => '题目组件配置',
            'description' => '题目组件配置',
            'type' => 'array',
            'items' => 
            array (
              'description' => '题目',
              '$ref' => '#/components/schemas/QuestionPlugin',
            ),
          ),
          'Creator' => 
          array (
            'description' => '创建者',
            '$ref' => '#/components/schemas/SimpleUser',
          ),
          'Modifier' => 
          array (
            'description' => '修改者',
            '$ref' => '#/components/schemas/SimpleUser',
          ),
          'Classify' => 
          array (
            'title' => '模板分类',
            'description' => '模板分类',
            'type' => 'string',
            'example' => 'picture',
          ),
          'TenantId' => 
          array (
            'title' => '模板所在租户',
            'description' => '模板所在租户',
            'type' => 'string',
            'example' => 'GA***W134',
          ),
          'SharedMode' => 
          array (
            'title' => '模板共享模式',
            'description' => '模板共享模式',
            'type' => 'string',
            'example' => 'true',
          ),
          'ViewConfigs' => 
          array (
            'title' => '视图层配置',
            'description' => '视图层配置',
            'type' => 'object',
            'properties' => 
            array (
              'ViewPlugins' => 
              array (
                'title' => '视图组件',
                'description' => '视图组件',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '视图',
                  '$ref' => '#/components/schemas/ViewPlugin',
                ),
              ),
            ),
          ),
        ),
      ),
      'TemplateQuestion' => 
      array (
        'title' => 'A short description of struct',
        'description' => '模板题目',
        'type' => 'object',
        'properties' => 
        array (
          'QuestionId' => 
          array (
            'title' => '题目ID',
            'description' => '题目ID',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'MarkTitle' => 
          array (
            'title' => '标题',
            'description' => '标题',
            'type' => 'string',
            'example' => '题目1',
          ),
          'Type' => 
          array (
            'title' => '类型',
            'description' => '类型，包括如下：
- TEXT_EDIT
- CHECKBOX
- INPUT
- PICTURE
- VIDEO
- OPEN_ENDED
- SLOT
- RADIO',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'TEXT_EDIT' => 'TEXT_EDIT',
              'CHECKBOX' => 'CHECKBOX',
              'INPUT' => 'INPUT',
              'PICTURE' => 'PICTURE',
              'VIDEO' => 'VIDEO',
              'OPEN_ENDED' => 'OPEN_ENDED',
              'SLOT' => 'SLOT',
              'RADIO' => 'RADIO',
            ),
            'example' => 'RADIO',
          ),
          'PreOptions' => 
          array (
            'title' => '预填值',
            'description' => '预填值列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '预填',
              'type' => 'string',
              'example' => '预置选项',
            ),
          ),
          'Options' => 
          array (
            'title' => '选项',
            'description' => '选项列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '选项',
              '$ref' => '#/components/schemas/QuestionOption',
            ),
          ),
          'Exif' => 
          array (
            'title' => '额外属性',
            'description' => '额外属性',
            'type' => 'object',
            'example' => 'null',
          ),
          'Children' => 
          array (
            'title' => '子节点',
            'description' => '子节点列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '子节点',
              '$ref' => '#/components/schemas/TemplateQuestion',
            ),
          ),
        ),
      ),
      'TemplateView' => 
      array (
        'title' => 'A short description of struct',
        'description' => '模板题目',
        'type' => 'object',
        'properties' => 
        array (
          'Fields' => 
          array (
            'title' => '视图列表',
            'description' => '视图列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '视图',
              'type' => 'object',
              'properties' => 
              array (
                'Type' => 
                array (
                  'title' => '视图类型',
                  'description' => '视图类型',
                  'type' => 'string',
                  'example' => 'IMG',
                ),
                'FieldName' => 
                array (
                  'title' => '绑定字段名称',
                  'description' => '绑定字段名称',
                  'type' => 'string',
                  'example' => 'url',
                ),
                'DisplayOriImg' => 
                array (
                  'title' => '是否展示原图',
                  'description' => '是否展示原图',
                  'type' => 'boolean',
                  'example' => 'True',
                ),
                'VisitInfo' => 
                array (
                  'title' => '访问信息',
                  'description' => '访问信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'OssConf' => 
                    array (
                      'title' => 'OSS配置',
                      'description' => 'OSS配置',
                      'type' => 'object',
                      'example' => '{"ossEndpoint":"***","ossAk":"***","ossAs":"***","ossOwner":"","ossBucket":""}',
                    ),
                    'AftsConf' => 
                    array (
                      'title' => 'Afts配置',
                      'description' => 'Afts配置',
                      'type' => 'object',
                      'example' => '{"expiredTime":20}',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'UpdateTaskDTO' => 
      array (
        'title' => 'A short description of struct',
        'description' => '更新任务信息',
        'type' => 'object',
        'properties' => 
        array (
          'TaskName' => 
          array (
            'title' => '任务名称',
            'description' => '任务名称',
            'type' => 'string',
            'example' => 'demo',
          ),
          'Exif' => 
          array (
            'title' => '拓展字段',
            'description' => '拓展字段',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '拓展字段',
              'type' => 'string',
              'example' => 'false',
            ),
          ),
          'Tags' => 
          array (
            'title' => '标签',
            'description' => '标签列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签',
              'type' => 'string',
              'example' => 'TEXT',
            ),
          ),
          'Remark' => 
          array (
            'title' => '备注信息',
            'description' => '备注信息',
            'type' => 'string',
            'example' => 'demo',
          ),
        ),
      ),
      'UserStatistic' => 
      array (
        'title' => '人力统计',
        'description' => '人力统计',
        'type' => 'object',
        'properties' => 
        array (
          'UserId' => 
          array (
            'title' => '用户ID',
            'description' => '用户ID',
            'type' => 'string',
            'example' => '166***9980757311',
          ),
          'TotalMarkItemsCount' => 
          array (
            'title' => '总Items数',
            'description' => '总数据项',
            'type' => 'number',
            'format' => 'float',
            'example' => '172',
          ),
          'AcceptedMarkItemsCount' => 
          array (
            'title' => '通过Items数',
            'description' => '通过数据项',
            'type' => 'number',
            'format' => 'float',
            'example' => '172',
          ),
          'MarkTime' => 
          array (
            'title' => '标注时常；单位：小时',
            'description' => '标注时常；单位：小时',
            'type' => 'number',
            'format' => 'float',
            'example' => '0.1',
          ),
          'MarkEfficiency' => 
          array (
            'title' => '标注效率；标注效率  =  标注量/标注时长 (含驳回)；个/小时；',
            'description' => '标注效率；标注效率  =  标注量/标注时长 （含驳回），个/小时。',
            'type' => 'number',
            'format' => 'float',
            'example' => '0.1',
          ),
          'CheckCount' => 
          array (
            'title' => '总的检查数',
            'description' => '总的检查数',
            'type' => 'number',
            'format' => 'float',
            'example' => '140',
          ),
          'CheckedAcceptedCount' => 
          array (
            'title' => '检查通过数量',
            'description' => '检查通过数量',
            'type' => 'number',
            'format' => 'float',
            'example' => '100',
          ),
          'CheckedAccuracy' => 
          array (
            'title' => '检查准确率;  检查准确率 = 被检查错误量/被检查量',
            'description' => '检查准确率;  检查准确率 = 被检查错误量/被检查量',
            'type' => 'number',
            'format' => 'float',
            'example' => '95.33',
          ),
          'SamplingAccuracy' => 
          array (
            'title' => '抽样准确率; 被验收准确率 = 被验收错误量/被验收量',
            'description' => '抽样准确率; 被验收准确率 = 被验收错误量/被验收量',
            'type' => 'number',
            'format' => 'float',
            'example' => '84.92',
          ),
          'SamplingCount' => 
          array (
            'title' => '抽样总数',
            'description' => '抽样总数',
            'type' => 'number',
            'format' => 'float',
            'example' => '1',
          ),
          'SamplingErrorCount' => 
          array (
            'title' => '抽样错误数',
            'description' => '抽样错误数',
            'type' => 'number',
            'format' => 'float',
            'example' => '1',
          ),
        ),
      ),
      'ViewPlugin' => 
      array (
        'title' => 'A short description of struct',
        'description' => '视图层组件',
        'type' => 'object',
        'properties' => 
        array (
          'Type' => 
          array (
            'title' => '组件类型',
            'description' => '组件类型',
            'type' => 'string',
            'required' => true,
            'example' => 'TEXT',
          ),
          'CorsProxy' => 
          array (
            'title' => '是否处理跨域',
            'description' => '是否处理跨域',
            'type' => 'boolean',
            'required' => true,
            'example' => 'True',
          ),
          'RelationQuestionIds' => 
          array (
            'title' => '关联题目ID',
            'description' => '关联题目列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '题目',
              'type' => 'string',
              'example' => '题目ID',
            ),
            'required' => false,
          ),
          'Hide' => 
          array (
            'title' => '是否隐藏',
            'description' => '是否隐藏',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
          'VisitInfo' => 
          array (
            'title' => '访问信息',
            'description' => '访问信息',
            'type' => 'object',
            'properties' => 
            array (
              'ossConf' => 
              array (
                'title' => 'OSS配置',
                'description' => 'OSS配置',
                'type' => 'object',
                'example' => '{"ossEndpoint":"","ossAk":"","ossAs":"","ossOwner":"","ossBucket":"","folder":"","expiredTime":""}',
              ),
              'aftsConf' => 
              array (
                'title' => 'AFTS配置',
                'description' => 'AFTS配置',
                'type' => 'object',
                'example' => '{"expiredTime":1}',
              ),
            ),
            'required' => false,
          ),
          'Convertor' => 
          array (
            'title' => '数组转换udf',
            'description' => '数组转换udf',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
          ),
          'Plugins' => 
          array (
            'title' => '嵌套组件',
            'description' => '嵌套组件',
            'type' => 'object',
            'required' => false,
            'example' => '[]',
          ),
          'Exif' => 
          array (
            'title' => '额外信息',
            'description' => '额外信息',
            'type' => 'object',
            'required' => false,
            'example' => 'false',
          ),
          'BindField' => 
          array (
            'title' => '字段映射到数据集中字段',
            'description' => '字段映射到数据集中字段',
            'type' => 'string',
            'required' => true,
            'example' => 'url',
          ),
          'DisplayOriImg' => 
          array (
            'title' => '是否展示原图',
            'description' => '是否展示原图',
            'type' => 'boolean',
            'required' => true,
            'example' => 'true',
          ),
        ),
        'required' => false,
      ),
      'Workforce' => 
      array (
        'description' => '项目',
        'type' => 'object',
        'properties' => 
        array (
          'NodeType' => 
          array (
            'title' => '结点名称',
            'description' => '结点名称',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'SAMPLING' => 'SAMPLING',
              'CHECK' => 'CHECK',
              'MARK' => 'MARK',
            ),
            'example' => 'CHECK',
          ),
          'WorkNodeId' => 
          array (
            'title' => '结点ID',
            'description' => '结点ID',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '2',
          ),
          'Users' => 
          array (
            'title' => '人员信息',
            'description' => '人员信息列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '项目',
              '$ref' => '#/components/schemas/SimpleUser',
            ),
            'required' => false,
          ),
        ),
        'required' => false,
      ),
    ),
  ),
  'apis' => 
  array (
    'ListTenants' => 
    array (
      'summary' => '展示阿里云账号下的iTAG租户。',
      'path' => '/openapi/api/v1/tenants',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '146580',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页显示的租户数量，默认为20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '租户列表的页码。起始值为1，默认为1。',
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
            'title' => 'Schema of Response',
            'description' => '执行结果。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '返回编码，默认为0，表示执行正常。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息。',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1****',
              ),
              'Details' => 
              array (
                'description' => '详情。',
                'type' => 'string',
                'example' => '-',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，可能值：
- true：请求成功。
- false：请求失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'PageNumber' => 
              array (
                'description' => '返回查询的租户列表的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '返回每页显示的租户数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'TotalPage' => 
              array (
                'description' => '租户列表总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'TotalCount' => 
              array (
                'description' => '租户总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '22',
              ),
              'Tenants' => 
              array (
                'description' => '租户列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '租户。',
                  '$ref' => '#/components/schemas/SimpleTenant',
                ),
              ),
              'ErrorCode' => 
              array (
                'description' => '返回的错误码。',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1****\\",\\n  \\"Details\\": \\"-\\",\\n  \\"Success\\": true,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"TotalPage\\": 2,\\n  \\"TotalCount\\": 22,\\n  \\"Tenants\\": [\\n    {\\n      \\"Creator\\": {\\n        \\"UserId\\": 0,\\n        \\"AccountType\\": \\"BUC\\",\\n        \\"AccountNo\\": \\"\\",\\n        \\"UserName\\": \\"\\",\\n        \\"Role\\": \\"\\"\\n      },\\n      \\"GmtCreateTime\\": \\"\\",\\n      \\"GmtModifiedTime\\": \\"\\",\\n      \\"TenantId\\": \\"\\",\\n      \\"TenantName\\": \\"\\",\\n      \\"UUID\\": \\"\\",\\n      \\"Description\\": \\"\\",\\n      \\"Role\\": \\"\\",\\n      \\"Modifier\\": {\\n        \\"UserId\\": 0,\\n        \\"AccountType\\": \\"BUC\\",\\n        \\"AccountNo\\": \\"\\",\\n        \\"UserName\\": \\"\\",\\n        \\"Role\\": \\"\\"\\n      }\\n    }\\n  ],\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<ListTenantsResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>20</PageSize>\\n    <TotalPage>2</TotalPage>\\n    <TotalCount>22</TotalCount>\\n    <Tenants>\\n        <Creator>\\n            <AccountType>BUC</AccountType>\\n        </Creator>\\n        <Modifier>\\n            <AccountType>BUC</AccountType>\\n        </Modifier>\\n    </Tenants>\\n</ListTenantsResponse>","errorExample":""}]',
      'title' => '租户列表查询',
    ),
    'GetTenant' => 
    array (
      'summary' => '查询iTAG租户的相关信息。',
      'path' => '/openapi/api/v1/tenants/{TenantId}',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '146607',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户ID。如何获取租户ID，请参见[ListTenants](~~454649~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '返回编码，默认为0，表示执行正常。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息。',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1****',
              ),
              'Details' => 
              array (
                'description' => '详情。',
                'type' => 'string',
                'example' => '-',
              ),
              'Success' => 
              array (
                'description' => '是否成功，可能值：
- true：请求成功。
- false：请求失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Tenant' => 
              array (
                'description' => '租户信息。',
                '$ref' => '#/components/schemas/SingleTenant',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => '-',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1****\\",\\n  \\"Details\\": \\"-\\",\\n  \\"Success\\": true,\\n  \\"Tenant\\": {\\n    \\"Description\\": \\"\\",\\n    \\"TenantName\\": \\"\\",\\n    \\"UUID\\": \\"\\",\\n    \\"TenantId\\": \\"\\",\\n    \\"Status\\": \\"\\"\\n  },\\n  \\"ErrorCode\\": \\"-\\"\\n}","errorExample":""},{"type":"xml","example":"<GetTenantResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n    <Tenant/>\\n</GetTenantResponse>","errorExample":""}]',
      'title' => '查询租户信息',
    ),
    'UpdateTenant' => 
    array (
      'summary' => '修改iTAG租户的相关信息。',
      'path' => '/openapi/api/v1/tenants/{TenantId}',
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
      'consumes' => 
      array (
        0 => 'multipart/form-data',
        1 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '146807',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户ID。如何查询租户ID，请参见[ListTenants](~~454649~~) 。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '参数。',
            'type' => 'object',
            'properties' => 
            array (
              'TenantName' => 
              array (
                'description' => '租户名称。',
                'type' => 'string',
                'required' => false,
                'example' => '测试任务202208101424',
              ),
              'Description' => 
              array (
                'description' => '租户介绍。',
                'type' => 'string',
                'required' => false,
                'example' => 'demo',
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
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '返回编码，默认为0，表示执行正常。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息。',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1****',
              ),
              'Details' => 
              array (
                'description' => '详情。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Success' => 
              array (
                'description' => '是否成功，可能值：
- true：表示请求成功。
- false：表示请求失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1****\\",\\n  \\"Details\\": \\"null\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateTenantResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n</UpdateTenantResponse>","errorExample":""}]',
      'title' => '修改租户信息',
    ),
    'ListTemplates' => 
    array (
      'summary' => '展示当前租户的模板列表。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/templates',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '147791',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户id，可以通过ListTenants租户列表查询的API来查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'GAR***134',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页面标号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '0',
            'example' => '1',
            'default' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页面大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '20',
            'minimum' => '1',
            'example' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'SearchKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索内容',
            'type' => 'string',
            'required' => false,
            'example' => 'demo',
          ),
        ),
        4 => 
        array (
          'name' => 'Types',
          'in' => 'query',
          'style' => 'simple',
          'schema' => 
          array (
            'description' => '应用类型列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '类型，包括如下：
- COMMON
- CUSTOM',
              'type' => 'string',
              'required' => false,
              'example' => 'CUSTOM',
              'default' => 'CUSTOM',
              'enum' => 
              array (
                0 => 'COMMON',
                1 => 'CUSTOM',
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
            'description' => '项目',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '返回编码，默认为0，表示执行正常',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1F29E',
              ),
              'Details' => 
              array (
                'description' => '详情',
                'type' => 'string',
                'example' => 'null',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'PageNumber' => 
              array (
                'description' => '页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '单页大小',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'TotalPage' => 
              array (
                'description' => '总页数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'TotalCount' => 
              array (
                'description' => '总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '22',
              ),
              'Templates' => 
              array (
                'description' => '模板列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '模板',
                  '$ref' => '#/components/schemas/SimpleTemplate',
                ),
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1F29E\\",\\n  \\"Details\\": \\"null\\",\\n  \\"Success\\": true,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"TotalPage\\": 2,\\n  \\"TotalCount\\": 22,\\n  \\"Templates\\": [\\n    {\\n      \\"TemplateId\\": \\"1546741431673270272\\",\\n      \\"TemplateName\\": \\"图片分割组合77aa\\",\\n      \\"TenantId\\": \\"GARDAW134\\",\\n      \\"Description\\": \\"\\",\\n      \\"Status\\": \\"DRAFT\\",\\n      \\"Tags\\": [\\n        \\"\\"\\n      ],\\n      \\"SharedMode\\": \\"None\\",\\n      \\"AbandonReasons\\": \\"None\\",\\n      \\"Type\\": \\"CUSTOM\\",\\n      \\"GmtCreateTime\\": \\"2022-07-12 14:21:08\\",\\n      \\"GmtModifiedTime\\": \\"2022-07-12 14:21:08\\"\\n    }\\n  ],\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<ListTemplatesResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>20</PageSize>\\n    <TotalPage>2</TotalPage>\\n    <TotalCount>22</TotalCount>\\n    <Templates>\\n        <TemplateId>1546741431673270272</TemplateId>\\n        <TemplateName>图片分割组合77aa</TemplateName>\\n        <TenantId>GARDAW134</TenantId>\\n        <Status>DRAFT</Status>\\n        <SharedMode>None</SharedMode>\\n        <AbandonReasons>None</AbandonReasons>\\n        <Type>CUSTOM</Type>\\n        <GmtCreateTime>2022-07-12 14:21:08</GmtCreateTime>\\n        <GmtModifiedTime>2022-07-12 14:21:08</GmtModifiedTime>\\n    </Templates>\\n</ListTemplatesResponse>","errorExample":""}]',
      'title' => '模板列表展示',
    ),
    'CreateTemplate' => 
    array (
      'summary' => '您可以为当前租户添加新的模板，并根据自身的业务需求自定义标注模板。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/templates',
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
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '147794',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户ID。如何查询租户ID，请参见[ListTenants](~~454649~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'GAR***134',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '模板信息。',
            'required' => true,
            '$ref' => '#/components/schemas/TemplateDTO',
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
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '返回编码，默认为0，表示执行正常。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息。',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1****',
              ),
              'Details' => 
              array (
                'description' => '详情。',
                'type' => 'string',
                'example' => '-',
              ),
              'Success' => 
              array (
                'description' => '是否成功，可能值：
- true：表示请求成功。
- false：表示请求失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TemplateId' => 
              array (
                'description' => '模板ID。',
                'type' => 'string',
                'example' => '152***0348342353920',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => '-',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1****\\",\\n  \\"Details\\": \\"-\\",\\n  \\"Success\\": true,\\n  \\"TemplateId\\": \\"152***0348342353920\\",\\n  \\"ErrorCode\\": \\"-\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateTemplateResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n    <TemplateId>1529360348342353920</TemplateId>\\n</CreateTemplateResponse>","errorExample":""}]',
      'title' => '新增模板',
    ),
    'UpdateTemplate' => 
    array (
      'summary' => '修改当前租户下的模板。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/templates/{TemplateId}',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '149690',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户id，可以通过ListTenantId租户列表查询的API来查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '模板id，可在iTAG的模板管理中获取。',
            'type' => 'string',
            'required' => true,
            'example' => '152***0348342353920',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '模板',
            'required' => false,
            '$ref' => '#/components/schemas/TemplateDTO',
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
            'description' => '项目',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1F29E',
              ),
              'Details' => 
              array (
                'description' => '详情',
                'type' => 'string',
                'example' => 'null',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TemplateId' => 
              array (
                'description' => '模板id',
                'type' => 'string',
                'example' => '1529360348342353920',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1F29E\\",\\n  \\"Details\\": \\"null\\",\\n  \\"Success\\": true,\\n  \\"TemplateId\\": \\"1529360348342353920\\",\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateTemplateResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n    <TemplateId>1529360348342353920</TemplateId>\\n</UpdateTemplateResponse>","errorExample":""}]',
      'title' => '修改模版',
    ),
    'DeleteTemplate' => 
    array (
      'summary' => '删除当前租户下的模板。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/templates/{TemplateId}',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '148615',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户id，可以通过ListTenantId租户列表查询的API来查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '模板id，可在iTAG的模板管理中获取。',
            'type' => 'string',
            'required' => true,
            'example' => '1529***348342353920',
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
            'description' => '项目',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1F29E',
              ),
              'Details' => 
              array (
                'description' => '详情',
                'type' => 'string',
                'example' => '""',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TemplateId' => 
              array (
                'description' => '模板id',
                'type' => 'string',
                'example' => '152***348342353920',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1F29E\\",\\n  \\"Details\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"Success\\": true,\\n  \\"TemplateId\\": \\"152***348342353920\\",\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteTemplateResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n    <TemplateId>1529360348342353920</TemplateId>\\n</DeleteTemplateResponse>","errorExample":""}]',
      'title' => '删除模板',
    ),
    'GetTemplateView' => 
    array (
      'summary' => '查询模版中图片、文本、音频等展示信息。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/templates/{TemplateId}/views',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '147878',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户id，可以通过ListTenantId租户列表查询的API来查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '模板id，可在iTAG的模板管理中获取。',
            'type' => 'string',
            'required' => true,
            'example' => '1529***348342353920',
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
            'description' => '项目',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1F29E',
              ),
              'Details' => 
              array (
                'description' => '详情',
                'type' => 'string',
                'example' => '""',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ViewConfigs' => 
              array (
                'description' => '数据展示配置',
                'type' => 'object',
                'properties' => 
                array (
                  'ViewPlugins' => 
                  array (
                    'description' => '数据展示配置插件列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据展示',
                      '$ref' => '#/components/schemas/ViewPlugin',
                    ),
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1F29E\\",\\n  \\"Details\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"Success\\": true,\\n  \\"ViewConfigs\\": {\\n    \\"ViewPlugins\\": [\\n      {\\n        \\"Type\\": \\"\\",\\n        \\"CorsProxy\\": true,\\n        \\"RelationQuestionIds\\": [\\n          \\"题目ID\\"\\n        ],\\n        \\"Hide\\": true,\\n        \\"VisitInfo\\": {\\n          \\"ossConf\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"aftsConf\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        },\\n        \\"Convertor\\": \\"\\",\\n        \\"Plugins\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"Exif\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"BindField\\": \\"\\",\\n        \\"DisplayOriImg\\": true\\n      }\\n    ]\\n  },\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<GetTemplateViewResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n    <ViewConfigs>\\n        <ViewPlugins>\\n            <RelationQuestionIds>题目ID</RelationQuestionIds>\\n            <VisitInfo/>\\n        </ViewPlugins>\\n    </ViewConfigs>\\n</GetTemplateViewResponse>","errorExample":""}]',
      'title' => '查询模板展示信息',
    ),
    'GetTemplateQuestions' => 
    array (
      'summary' => '查询模版中的单选、多选等题目信息。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/templates/{TemplateId}/questions',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '148541',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '租户ID',
            'description' => '租户id，可以通过ListTenantId租户列表查询的API来查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '模版ID',
            'description' => '模板id，可在iTAG的模板管理中获取。',
            'type' => 'string',
            'required' => true,
            'example' => '1529***348342353920',
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
            'description' => '项目',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1F29E',
              ),
              'Details' => 
              array (
                'description' => '详情',
                'type' => 'string',
                'example' => 'null',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'QuestionConfigs' => 
              array (
                'description' => '问题配置列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '配置问题',
                  '$ref' => '#/components/schemas/QuestionPlugin',
                ),
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1F29E\\",\\n  \\"Details\\": \\"null\\",\\n  \\"Success\\": true,\\n  \\"QuestionConfigs\\": [\\n    {\\n      \\"MarkTitle\\": \\"内部单选\\",\\n      \\"MarkTitleAlias\\": \\"None\\",\\n      \\"Type\\": \\"RADIO\\",\\n      \\"MustFill\\": true,\\n      \\"Display\\": true,\\n      \\"Selected\\": true,\\n      \\"SelectGroup\\": \\"None\\",\\n      \\"DefaultResult\\": \\"None\\",\\n      \\"Rule\\": \\"None\\",\\n      \\"CanSelect\\": true,\\n      \\"Children\\": [\\n        {\\n          \\"MarkTitle\\": \\"内部单选\\",\\n          \\"MarkTitleAlias\\": \\"None\\",\\n          \\"Type\\": \\"RADIO\\",\\n          \\"MustFill\\": true,\\n          \\"Display\\": true,\\n          \\"Selected\\": true,\\n          \\"SelectGroup\\": \\"None\\",\\n          \\"DefaultResult\\": \\"None\\",\\n          \\"Rule\\": \\"None\\",\\n          \\"CanSelect\\": true,\\n          \\"Children\\": [\\n            {\\n              \\"MarkTitle\\": \\"内部单选\\",\\n              \\"MarkTitleAlias\\": \\"None\\",\\n              \\"Type\\": \\"RADIO\\",\\n              \\"MustFill\\": true,\\n              \\"Display\\": true,\\n              \\"Selected\\": true,\\n              \\"SelectGroup\\": \\"None\\",\\n              \\"DefaultResult\\": \\"None\\",\\n              \\"Rule\\": \\"None\\",\\n              \\"CanSelect\\": true,\\n              \\"Children\\": [],\\n              \\"Exif\\": {\\n                \\"test\\": \\"test\\",\\n                \\"test2\\": 1\\n              },\\n              \\"PreOptions\\": [\\n                \\"\\"\\n              ],\\n              \\"Options\\": [\\n                {\\n                  \\"Label\\": \\"\\",\\n                  \\"Key\\": \\"\\",\\n                  \\"Shortcut\\": \\"\\",\\n                  \\"Color\\": \\"\\",\\n                  \\"Remark\\": \\"\\",\\n                  \\"Children\\": [\\n                    {\\n                      \\"Label\\": \\"\\",\\n                      \\"Key\\": \\"\\",\\n                      \\"Shortcut\\": \\"\\",\\n                      \\"Color\\": \\"\\",\\n                      \\"Remark\\": \\"\\",\\n                      \\"Children\\": [\\n                        {\\n                          \\"Label\\": \\"\\",\\n                          \\"Key\\": \\"\\",\\n                          \\"Shortcut\\": \\"\\",\\n                          \\"Color\\": \\"\\",\\n                          \\"Remark\\": \\"\\",\\n                          \\"Children\\": []\\n                        }\\n                      ]\\n                    }\\n                  ]\\n                }\\n              ],\\n              \\"HotKeyMap\\": \\"None\\",\\n              \\"QuestionId\\": \\"\\"\\n            }\\n          ],\\n          \\"Exif\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"PreOptions\\": [\\n            \\"\\"\\n          ],\\n          \\"Options\\": [],\\n          \\"HotKeyMap\\": \\"None\\",\\n          \\"QuestionId\\": \\"\\"\\n        }\\n      ],\\n      \\"Exif\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"PreOptions\\": [\\n        \\"\\"\\n      ],\\n      \\"Options\\": [],\\n      \\"HotKeyMap\\": \\"None\\",\\n      \\"QuestionId\\": \\"\\"\\n    }\\n  ],\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<GetTemplateQuestionsResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n    <QuestionConfigs>\\n        <MarkTitle>内部单选</MarkTitle>\\n        <MarkTitleAlias>None</MarkTitleAlias>\\n        <Type>RADIO</Type>\\n        <MustFill>false</MustFill>\\n        <Display>true</Display>\\n        <Selected>false</Selected>\\n        <SelectGroup>None</SelectGroup>\\n        <DefaultResult>None</DefaultResult>\\n        <Rule>None</Rule>\\n        <CanSelect>false</CanSelect>\\n        <Children>\\n            <MarkTitle>内部单选</MarkTitle>\\n            <MarkTitleAlias>None</MarkTitleAlias>\\n            <Type>RADIO</Type>\\n            <MustFill>false</MustFill>\\n            <Display>true</Display>\\n            <Selected>false</Selected>\\n            <SelectGroup>None</SelectGroup>\\n            <DefaultResult>None</DefaultResult>\\n            <Rule>None</Rule>\\n            <CanSelect>false</CanSelect>\\n            <Options>\\n                <Children/>\\n            </Options>\\n            <HotKeyMap>None</HotKeyMap>\\n        </Children>\\n        <Options>\\n            <Children/>\\n        </Options>\\n        <HotKeyMap>None</HotKeyMap>\\n    </QuestionConfigs>\\n</GetTemplateQuestionsResponse>","errorExample":""}]',
      'title' => '查询模板题目信息',
    ),
    'GetTemplate' => 
    array (
      'summary' => '查询租户下的模版信息。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/templates/{TemplateId}',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '147816',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户id，可以通过ListTenantId租户列表查询的API来查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '模板id，可在iTAG的模板管理中获取。',
            'type' => 'string',
            'required' => true,
            'example' => '1529***348342353920',
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
            'description' => '项目',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1F29E',
              ),
              'Details' => 
              array (
                'description' => '详情id',
                'type' => 'string',
                'example' => 'null',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Template' => 
              array (
                'description' => '模板',
                '$ref' => '#/components/schemas/TemplateDetail',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1F29E\\",\\n  \\"Details\\": \\"null\\",\\n  \\"Success\\": true,\\n  \\"Template\\": {\\n    \\"GmtCreateTime\\": \\"\\",\\n    \\"GmtModifiedTime\\": \\"\\",\\n    \\"TemplateId\\": \\"\\",\\n    \\"TemplateName\\": \\"\\",\\n    \\"Description\\": \\"\\",\\n    \\"Exif\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"Status\\": \\"\\",\\n    \\"Tags\\": [\\n      \\"\\"\\n    ],\\n    \\"AbandonReasons\\": [\\n      \\"\\"\\n    ],\\n    \\"Type\\": \\"\\",\\n    \\"QuestionConfigs\\": [\\n      {\\n        \\"MarkTitle\\": \\"内部单选\\",\\n        \\"MarkTitleAlias\\": \\"None\\",\\n        \\"Type\\": \\"RADIO\\",\\n        \\"MustFill\\": true,\\n        \\"Display\\": true,\\n        \\"Selected\\": true,\\n        \\"SelectGroup\\": \\"None\\",\\n        \\"DefaultResult\\": \\"None\\",\\n        \\"Rule\\": \\"None\\",\\n        \\"CanSelect\\": true,\\n        \\"Children\\": [\\n          {\\n            \\"MarkTitle\\": \\"内部单选\\",\\n            \\"MarkTitleAlias\\": \\"None\\",\\n            \\"Type\\": \\"RADIO\\",\\n            \\"MustFill\\": true,\\n            \\"Display\\": true,\\n            \\"Selected\\": true,\\n            \\"SelectGroup\\": \\"None\\",\\n            \\"DefaultResult\\": \\"None\\",\\n            \\"Rule\\": \\"None\\",\\n            \\"CanSelect\\": true,\\n            \\"Children\\": [\\n              {\\n                \\"MarkTitle\\": \\"内部单选\\",\\n                \\"MarkTitleAlias\\": \\"None\\",\\n                \\"Type\\": \\"RADIO\\",\\n                \\"MustFill\\": true,\\n                \\"Display\\": true,\\n                \\"Selected\\": true,\\n                \\"SelectGroup\\": \\"None\\",\\n                \\"DefaultResult\\": \\"None\\",\\n                \\"Rule\\": \\"None\\",\\n                \\"CanSelect\\": true,\\n                \\"Children\\": [],\\n                \\"Exif\\": {\\n                  \\"test\\": \\"test\\",\\n                  \\"test2\\": 1\\n                },\\n                \\"PreOptions\\": [\\n                  \\"\\"\\n                ],\\n                \\"Options\\": [\\n                  {\\n                    \\"Label\\": \\"\\",\\n                    \\"Key\\": \\"\\",\\n                    \\"Shortcut\\": \\"\\",\\n                    \\"Color\\": \\"\\",\\n                    \\"Remark\\": \\"\\",\\n                    \\"Children\\": [\\n                      {\\n                        \\"Label\\": \\"\\",\\n                        \\"Key\\": \\"\\",\\n                        \\"Shortcut\\": \\"\\",\\n                        \\"Color\\": \\"\\",\\n                        \\"Remark\\": \\"\\",\\n                        \\"Children\\": [\\n                          {\\n                            \\"Label\\": \\"\\",\\n                            \\"Key\\": \\"\\",\\n                            \\"Shortcut\\": \\"\\",\\n                            \\"Color\\": \\"\\",\\n                            \\"Remark\\": \\"\\",\\n                            \\"Children\\": []\\n                          }\\n                        ]\\n                      }\\n                    ]\\n                  }\\n                ],\\n                \\"HotKeyMap\\": \\"None\\",\\n                \\"QuestionId\\": \\"\\"\\n              }\\n            ],\\n            \\"Exif\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            },\\n            \\"PreOptions\\": [\\n              \\"\\"\\n            ],\\n            \\"Options\\": [],\\n            \\"HotKeyMap\\": \\"None\\",\\n            \\"QuestionId\\": \\"\\"\\n          }\\n        ],\\n        \\"Exif\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"PreOptions\\": [\\n          \\"\\"\\n        ],\\n        \\"Options\\": [],\\n        \\"HotKeyMap\\": \\"None\\",\\n        \\"QuestionId\\": \\"\\"\\n      }\\n    ],\\n    \\"Creator\\": {\\n      \\"UserId\\": 0,\\n      \\"AccountType\\": \\"BUC\\",\\n      \\"AccountNo\\": \\"\\",\\n      \\"UserName\\": \\"\\",\\n      \\"Role\\": \\"\\"\\n    },\\n    \\"Modifier\\": {\\n      \\"UserId\\": 0,\\n      \\"AccountType\\": \\"BUC\\",\\n      \\"AccountNo\\": \\"\\",\\n      \\"UserName\\": \\"\\",\\n      \\"Role\\": \\"\\"\\n    },\\n    \\"Classify\\": \\"\\",\\n    \\"TenantId\\": \\"\\",\\n    \\"SharedMode\\": \\"\\",\\n    \\"ViewConfigs\\": {\\n      \\"ViewPlugins\\": [\\n        {\\n          \\"Type\\": \\"\\",\\n          \\"CorsProxy\\": true,\\n          \\"RelationQuestionIds\\": [\\n            \\"题目ID\\"\\n          ],\\n          \\"Hide\\": true,\\n          \\"VisitInfo\\": {\\n            \\"ossConf\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            },\\n            \\"aftsConf\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          },\\n          \\"Convertor\\": \\"\\",\\n          \\"Plugins\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"Exif\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"BindField\\": \\"\\",\\n          \\"DisplayOriImg\\": true\\n        }\\n      ]\\n    }\\n  },\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<GetTemplateResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n    <Template>\\n        <QuestionConfigs>\\n            <MarkTitle>内部单选</MarkTitle>\\n            <MarkTitleAlias>None</MarkTitleAlias>\\n            <Type>RADIO</Type>\\n            <MustFill>false</MustFill>\\n            <Display>true</Display>\\n            <Selected>false</Selected>\\n            <SelectGroup>None</SelectGroup>\\n            <DefaultResult>None</DefaultResult>\\n            <Rule>None</Rule>\\n            <CanSelect>false</CanSelect>\\n            <Children>\\n                <MarkTitle>内部单选</MarkTitle>\\n                <MarkTitleAlias>None</MarkTitleAlias>\\n                <Type>RADIO</Type>\\n                <MustFill>false</MustFill>\\n                <Display>true</Display>\\n                <Selected>false</Selected>\\n                <SelectGroup>None</SelectGroup>\\n                <DefaultResult>None</DefaultResult>\\n                <Rule>None</Rule>\\n                <CanSelect>false</CanSelect>\\n                <Options>\\n                    <Children/>\\n                </Options>\\n                <HotKeyMap>None</HotKeyMap>\\n            </Children>\\n            <Options>\\n                <Children/>\\n            </Options>\\n            <HotKeyMap>None</HotKeyMap>\\n        </QuestionConfigs>\\n        <Creator>\\n            <AccountType>BUC</AccountType>\\n        </Creator>\\n        <Modifier>\\n            <AccountType>BUC</AccountType>\\n        </Modifier>\\n        <ViewConfigs>\\n            <ViewPlugins>\\n                <RelationQuestionIds>题目ID</RelationQuestionIds>\\n                <VisitInfo/>\\n            </ViewPlugins>\\n        </ViewConfigs>\\n    </Template>\\n</GetTemplateResponse>","errorExample":""}]',
      'title' => '查询模板信息',
    ),
    'AppendAllDataToTask' => 
    array (
      'summary' => '任务追加数据。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/appendAllDataToTask',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '212667',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户ID。如何获取租户ID，请参见[ListTenants](~~454649~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'GAR***134',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务ID。如何获取任务ID，请参见[ListTasks](~~454662~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '154***518306500608',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '参数。',
            'required' => false,
            '$ref' => '#/components/schemas/OpenDatasetProxyAppendDataRequest',
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
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '返回编码，默认为0，表示执行正常。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息。',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1F29E',
              ),
              'Details' => 
              array (
                'description' => '详情。',
                'type' => 'string',
                'example' => 'null
',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1F29E\\",\\n  \\"Details\\": \\"null\\\\n\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","type":"json"}]',
      'title' => '追加数据',
    ),
    'ListTasks' => 
    array (
      'summary' => '展示当前租户标注任务列表。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/tasks',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '146812',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户id，可以通过ListTenantId租户列表查询的API来查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => ' 页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '0',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '1',
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
            'title' => 'Schema of Response',
            'description' => '项目',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1F29E',
              ),
              'Details' => 
              array (
                'description' => '详情',
                'type' => 'string',
                'example' => 'null',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'PageNumber' => 
              array (
                'description' => '页码',
                'type' => 'integer',
                'format' => 'int32',
                'minimum' => '0',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '单页大小',
                'type' => 'integer',
                'format' => 'int32',
                'maximum' => '20',
                'minimum' => '1',
                'example' => '20',
              ),
              'TotalPage' => 
              array (
                'description' => '总页数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'TotalCount' => 
              array (
                'description' => '总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '22',
              ),
              'Tasks' => 
              array (
                'description' => '任务列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '任务',
                  '$ref' => '#/components/schemas/SimpleTask',
                ),
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1F29E\\",\\n  \\"Details\\": \\"null\\",\\n  \\"Success\\": true,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"TotalPage\\": 2,\\n  \\"TotalCount\\": 22,\\n  \\"Tasks\\": [\\n    {\\n      \\"Creator\\": {\\n        \\"UserId\\": 0,\\n        \\"AccountType\\": \\"BUC\\",\\n        \\"AccountNo\\": \\"\\",\\n        \\"UserName\\": \\"\\",\\n        \\"Role\\": \\"\\"\\n      },\\n      \\"Modifier\\": {\\n        \\"UserId\\": 0,\\n        \\"AccountType\\": \\"BUC\\",\\n        \\"AccountNo\\": \\"\\",\\n        \\"UserName\\": \\"\\",\\n        \\"Role\\": \\"\\"\\n      },\\n      \\"GmtCreateTime\\": \\"\\",\\n      \\"GmtModifiedTime\\": \\"\\",\\n      \\"TaskName\\": \\"\\",\\n      \\"TaskId\\": \\"\\",\\n      \\"TemplateId\\": \\"\\",\\n      \\"TaskType\\": \\"\\",\\n      \\"TenantId\\": \\"\\",\\n      \\"Remark\\": \\"\\",\\n      \\"LabelStyle\\": \\"\\",\\n      \\"WorkflowNodes\\": [\\n        \\"结点值\\"\\n      ],\\n      \\"Tags\\": [\\n        \\"\\"\\n      ],\\n      \\"Archived\\": true,\\n      \\"Stage\\": \\"\\",\\n      \\"ArchivedInfos\\": \\"\\",\\n      \\"Status\\": \\"\\",\\n      \\"RefTaskId\\": \\"\\",\\n      \\"UUID\\": \\"\\"\\n    }\\n  ],\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<ListTasksResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>20</PageSize>\\n    <TotalPage>2</TotalPage>\\n    <TotalCount>22</TotalCount>\\n    <Tasks>\\n        <Creator>\\n            <AccountType>BUC</AccountType>\\n        </Creator>\\n        <Modifier>\\n            <AccountType>BUC</AccountType>\\n        </Modifier>\\n        <WorkflowNodes>结点值</WorkflowNodes>\\n    </Tasks>\\n</ListTasksResponse>","errorExample":""}]',
      'title' => '任务列表查询',
    ),
    'CreateTask' => 
    array (
      'summary' => '为当前租户新增标注任务。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/tasks',
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
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '147969',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户id，可以通过ListTenantId租户列表查询的API来查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '任务详情',
            'required' => true,
            '$ref' => '#/components/schemas/CreateTaskDetail',
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
            'description' => '项目',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1F29E',
              ),
              'Details' => 
              array (
                'description' => '详情',
                'type' => 'string',
                'example' => 'null',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TaskId' => 
              array (
                'description' => '任务id',
                'type' => 'string',
                'example' => '154***2518306500608',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1F29E\\",\\n  \\"Details\\": \\"null\\",\\n  \\"Success\\": true,\\n  \\"TaskId\\": \\"154***2518306500608\\",\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateTaskResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n    <TaskId>1543802518306500608</TaskId>\\n</CreateTaskResponse>","errorExample":""}]',
      'title' => '新增任务',
    ),
    'GetTask' => 
    array (
      'summary' => '查询单个标注任务信息。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '147093',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户ID。如何查询租户ID，请参见[ListTenants](~~454649~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务ID。如何查询任务ID，请参见[ListTasks](~~454662~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '15***2518306500608',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '本次请求条件下的数据总量，此参数为可选参数，默认可不返回。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息。',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0F01E603-8A9F-18ED-AD43-D52B5030****',
              ),
              'Details' => 
              array (
                'description' => '详情。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Success' => 
              array (
                'description' => '是否成功。取值如下：
- true：表示请求成功。
- false：表示请求失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Task' => 
              array (
                'description' => '任务。',
                '$ref' => '#/components/schemas/TaskDetail',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0F01E603-8A9F-18ED-AD43-D52B5030****\\",\\n  \\"Details\\": \\"null\\",\\n  \\"Success\\": true,\\n  \\"Task\\": {\\n    \\"Creator\\": {\\n      \\"UserId\\": 0,\\n      \\"AccountType\\": \\"BUC\\",\\n      \\"AccountNo\\": \\"\\",\\n      \\"UserName\\": \\"\\",\\n      \\"Role\\": \\"\\"\\n    },\\n    \\"Modifier\\": {\\n      \\"UserId\\": 0,\\n      \\"AccountType\\": \\"BUC\\",\\n      \\"AccountNo\\": \\"\\",\\n      \\"UserName\\": \\"\\",\\n      \\"Role\\": \\"\\"\\n    },\\n    \\"GmtCreateTime\\": \\"\\",\\n    \\"GmtModifiedTime\\": \\"\\",\\n    \\"TaskName\\": \\"\\",\\n    \\"TaskId\\": \\"\\",\\n    \\"TemplateId\\": \\"\\",\\n    \\"TaskType\\": \\"\\",\\n    \\"TenantId\\": \\"\\",\\n    \\"Remark\\": \\"\\",\\n    \\"LabelStyle\\": \\"\\",\\n    \\"WorkflowNodes\\": [\\n      \\"结点值\\"\\n    ],\\n    \\"Tags\\": [\\n      \\"\\"\\n    ],\\n    \\"Archived\\": true,\\n    \\"Stage\\": \\"\\",\\n    \\"ArchivedInfos\\": \\"\\",\\n    \\"Status\\": \\"\\",\\n    \\"RefTaskId\\": \\"\\",\\n    \\"UUID\\": \\"\\",\\n    \\"TaskWorkflow\\": [\\n      {\\n        \\"NodeName\\": \\"\\",\\n        \\"Exif\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"Users\\": [\\n          {\\n            \\"UserId\\": 0,\\n            \\"AccountType\\": \\"BUC\\",\\n            \\"AccountNo\\": \\"\\",\\n            \\"UserName\\": \\"\\",\\n            \\"Role\\": \\"\\"\\n          }\\n        ],\\n        \\"Groups\\": [\\n          \\"\\"\\n        ]\\n      }\\n    ],\\n    \\"Exif\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"Admins\\": [],\\n    \\"AssignConfig\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"TaskTemplateConfig\\": {\\n      \\"Exif\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"TemplateOptionMap\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"SelectQuestions\\": [\\n        \\"\\"\\n      ],\\n      \\"RobotConfig\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"TemplateRelationId\\": \\"\\",\\n      \\"ResourceKey\\": \\"\\"\\n    },\\n    \\"TenantName\\": \\"\\",\\n    \\"DatasetProxyRelations\\": [\\n      {\\n        \\"DatasetId\\": \\"\\",\\n        \\"Source\\": \\"\\",\\n        \\"SourceBizId\\": \\"\\",\\n        \\"DatasetType\\": \\"\\",\\n        \\"Exif\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"SourceDatasetId\\": \\"\\"\\n      }\\n    ],\\n    \\"AllowAppendData\\": true,\\n    \\"RelateTaskConfig\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"PeriodConfig\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"MineConfigs\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"VoteConfigs\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"NoticeConfig\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"ResultCallbackConfig\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"runMsg\\": \\"\\",\\n    \\"AlertTime\\": 0\\n  },\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<GetTaskResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>0F01E603-8A9F-18ED-AD43-D52B5030AFA2</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n    <Task>\\n        <Creator>\\n            <AccountType>BUC</AccountType>\\n        </Creator>\\n        <Modifier>\\n            <AccountType>BUC</AccountType>\\n        </Modifier>\\n        <WorkflowNodes>结点值</WorkflowNodes>\\n        <TaskWorkflow>\\n            <Users>\\n                <AccountType>BUC</AccountType>\\n            </Users>\\n        </TaskWorkflow>\\n        <Admins>\\n            <AccountType>BUC</AccountType>\\n        </Admins>\\n        <TaskTemplateConfig/>\\n        <DatasetProxyRelations/>\\n    </Task>\\n</GetTaskResponse>","errorExample":""}]',
      'title' => '单个任务信息',
    ),
    'UpdateTask' => 
    array (
      'summary' => '修改当前租户下的任务。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '148776',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户id，可以通过ListTenantId租户列表查询的API来查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务id，可在iTAG的任务中心中获取。',
            'type' => 'string',
            'required' => true,
            'example' => '15***518306500608',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '任务状态',
            'required' => true,
            '$ref' => '#/components/schemas/UpdateTaskDTO',
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
            'description' => '项目',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1F29E',
              ),
              'Details' => 
              array (
                'description' => '详情',
                'type' => 'string',
                'example' => 'null',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1F29E\\",\\n  \\"Details\\": \\"null\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateTaskResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n</UpdateTaskResponse>","errorExample":""}]',
      'title' => '修改任务',
    ),
    'DeleteTask' => 
    array (
      'summary' => '删除当前租户下的某个任务。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '147777',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户id，可以通过ListTenantId租户列表查询的API来查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务id，可在iTAG的任务中心中获取。',
            'type' => 'string',
            'required' => true,
            'example' => '15***2518306500608',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '项目',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1F29E',
              ),
              'Details' => 
              array (
                'description' => '详情',
                'type' => 'string',
                'example' => 'null',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1F29E\\",\\n  \\"Details\\": \\"null\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteTaskResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n</DeleteTaskResponse>","errorExample":""}]',
      'title' => '删除任务',
    ),
    'GetTaskTemplateViews' => 
    array (
      'summary' => '查询任务模版中的数据展示信息。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/template/views',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '147656',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户id，可以通过ListTenantId租户列表查询的API来查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务id，可在iTAG的任务中心中获取。',
            'type' => 'string',
            'required' => true,
            'example' => '154***2518306500608',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '项目',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1F29E',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Details' => 
              array (
                'description' => '详情',
                'type' => 'string',
                'example' => 'null',
              ),
              'Views' => 
              array (
                'description' => '视图',
                'type' => 'object',
                'properties' => 
                array (
                  'ViewPlugins' => 
                  array (
                    'description' => '视图插件列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '视图插件',
                      '$ref' => '#/components/schemas/ViewPlugin',
                    ),
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1F29E\\",\\n  \\"Success\\": true,\\n  \\"Details\\": \\"null\\",\\n  \\"Views\\": {\\n    \\"ViewPlugins\\": [\\n      {\\n        \\"Type\\": \\"\\",\\n        \\"CorsProxy\\": true,\\n        \\"RelationQuestionIds\\": [\\n          \\"题目ID\\"\\n        ],\\n        \\"Hide\\": true,\\n        \\"VisitInfo\\": {\\n          \\"ossConf\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"aftsConf\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        },\\n        \\"Convertor\\": \\"\\",\\n        \\"Plugins\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"Exif\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"BindField\\": \\"\\",\\n        \\"DisplayOriImg\\": true\\n      }\\n    ]\\n  },\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<GetTaskTemplateViewsResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Success>true</Success>\\n    <Details>null</Details>\\n    <Views>\\n        <ViewPlugins>\\n            <RelationQuestionIds>题目ID</RelationQuestionIds>\\n            <VisitInfo/>\\n        </ViewPlugins>\\n    </Views>\\n</GetTaskTemplateViewsResponse>","errorExample":""}]',
      'title' => '查询任务展示',
    ),
    'GetTaskTemplateQuestions' => 
    array (
      'summary' => '查询任务模板题目。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/template/questions',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '147635',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户id，可以通过ListTenantId租户列表查询的API来查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务id，可在iTAG的任务中心中获取。',
            'type' => 'string',
            'required' => true,
            'example' => '154***518306500608',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '项目',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1F29E',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Details' => 
              array (
                'description' => '详情',
                'type' => 'string',
                'example' => 'null',
              ),
              'Questions' => 
              array (
                'description' => '题目列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '题目插件',
                  '$ref' => '#/components/schemas/QuestionPlugin',
                ),
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1F29E\\",\\n  \\"Success\\": true,\\n  \\"Details\\": \\"null\\",\\n  \\"Questions\\": [\\n    {\\n      \\"MarkTitle\\": \\"内部单选\\",\\n      \\"MarkTitleAlias\\": \\"None\\",\\n      \\"Type\\": \\"RADIO\\",\\n      \\"MustFill\\": true,\\n      \\"Display\\": true,\\n      \\"Selected\\": true,\\n      \\"SelectGroup\\": \\"None\\",\\n      \\"DefaultResult\\": \\"None\\",\\n      \\"Rule\\": \\"None\\",\\n      \\"CanSelect\\": true,\\n      \\"Children\\": [\\n        {\\n          \\"MarkTitle\\": \\"内部单选\\",\\n          \\"MarkTitleAlias\\": \\"None\\",\\n          \\"Type\\": \\"RADIO\\",\\n          \\"MustFill\\": true,\\n          \\"Display\\": true,\\n          \\"Selected\\": true,\\n          \\"SelectGroup\\": \\"None\\",\\n          \\"DefaultResult\\": \\"None\\",\\n          \\"Rule\\": \\"None\\",\\n          \\"CanSelect\\": true,\\n          \\"Children\\": [\\n            {\\n              \\"MarkTitle\\": \\"内部单选\\",\\n              \\"MarkTitleAlias\\": \\"None\\",\\n              \\"Type\\": \\"RADIO\\",\\n              \\"MustFill\\": true,\\n              \\"Display\\": true,\\n              \\"Selected\\": true,\\n              \\"SelectGroup\\": \\"None\\",\\n              \\"DefaultResult\\": \\"None\\",\\n              \\"Rule\\": \\"None\\",\\n              \\"CanSelect\\": true,\\n              \\"Children\\": [],\\n              \\"Exif\\": {\\n                \\"test\\": \\"test\\",\\n                \\"test2\\": 1\\n              },\\n              \\"PreOptions\\": [\\n                \\"\\"\\n              ],\\n              \\"Options\\": [\\n                {\\n                  \\"Label\\": \\"\\",\\n                  \\"Key\\": \\"\\",\\n                  \\"Shortcut\\": \\"\\",\\n                  \\"Color\\": \\"\\",\\n                  \\"Remark\\": \\"\\",\\n                  \\"Children\\": [\\n                    {\\n                      \\"Label\\": \\"\\",\\n                      \\"Key\\": \\"\\",\\n                      \\"Shortcut\\": \\"\\",\\n                      \\"Color\\": \\"\\",\\n                      \\"Remark\\": \\"\\",\\n                      \\"Children\\": [\\n                        {\\n                          \\"Label\\": \\"\\",\\n                          \\"Key\\": \\"\\",\\n                          \\"Shortcut\\": \\"\\",\\n                          \\"Color\\": \\"\\",\\n                          \\"Remark\\": \\"\\",\\n                          \\"Children\\": []\\n                        }\\n                      ]\\n                    }\\n                  ]\\n                }\\n              ],\\n              \\"HotKeyMap\\": \\"None\\",\\n              \\"QuestionId\\": \\"\\"\\n            }\\n          ],\\n          \\"Exif\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"PreOptions\\": [\\n            \\"\\"\\n          ],\\n          \\"Options\\": [],\\n          \\"HotKeyMap\\": \\"None\\",\\n          \\"QuestionId\\": \\"\\"\\n        }\\n      ],\\n      \\"Exif\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"PreOptions\\": [\\n        \\"\\"\\n      ],\\n      \\"Options\\": [],\\n      \\"HotKeyMap\\": \\"None\\",\\n      \\"QuestionId\\": \\"\\"\\n    }\\n  ],\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<GetTaskTemplateQuestionsResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Success>true</Success>\\n    <Details>null</Details>\\n    <Questions>\\n        <MarkTitle>内部单选</MarkTitle>\\n        <MarkTitleAlias>None</MarkTitleAlias>\\n        <Type>RADIO</Type>\\n        <MustFill>false</MustFill>\\n        <Display>true</Display>\\n        <Selected>false</Selected>\\n        <SelectGroup>None</SelectGroup>\\n        <DefaultResult>None</DefaultResult>\\n        <Rule>None</Rule>\\n        <CanSelect>false</CanSelect>\\n        <Children>\\n            <MarkTitle>内部单选</MarkTitle>\\n            <MarkTitleAlias>None</MarkTitleAlias>\\n            <Type>RADIO</Type>\\n            <MustFill>false</MustFill>\\n            <Display>true</Display>\\n            <Selected>false</Selected>\\n            <SelectGroup>None</SelectGroup>\\n            <DefaultResult>None</DefaultResult>\\n            <Rule>None</Rule>\\n            <CanSelect>false</CanSelect>\\n            <Options>\\n                <Children/>\\n            </Options>\\n            <HotKeyMap>None</HotKeyMap>\\n        </Children>\\n        <Options>\\n            <Children/>\\n        </Options>\\n        <HotKeyMap>None</HotKeyMap>\\n    </Questions>\\n</GetTaskTemplateQuestionsResponse>","errorExample":""}]',
      'title' => '查询任务题目',
    ),
    'GetTaskTemplate' => 
    array (
      'summary' => '查询任务当前的模板信息。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/template',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '147633',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户ID。如何获取租户ID，请参见[ListTenants](~~454649~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务ID。如何获取任务ID，请参见[ListTasks](~~454662~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '154***518306500608',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '返回编码，默认为0，表示执行正常。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息。',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1****',
              ),
              'Details' => 
              array (
                'description' => '详情。',
                'type' => 'string',
                'example' => '""',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Template' => 
              array (
                'description' => '模板详情。',
                '$ref' => '#/components/schemas/TemplateDetail',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1****\\",\\n  \\"Details\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"Success\\": true,\\n  \\"Template\\": {\\n    \\"GmtCreateTime\\": \\"\\",\\n    \\"GmtModifiedTime\\": \\"\\",\\n    \\"TemplateId\\": \\"\\",\\n    \\"TemplateName\\": \\"\\",\\n    \\"Description\\": \\"\\",\\n    \\"Exif\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"Status\\": \\"\\",\\n    \\"Tags\\": [\\n      \\"\\"\\n    ],\\n    \\"AbandonReasons\\": [\\n      \\"\\"\\n    ],\\n    \\"Type\\": \\"\\",\\n    \\"QuestionConfigs\\": [\\n      {\\n        \\"MarkTitle\\": \\"内部单选\\",\\n        \\"MarkTitleAlias\\": \\"None\\",\\n        \\"Type\\": \\"RADIO\\",\\n        \\"MustFill\\": true,\\n        \\"Display\\": true,\\n        \\"Selected\\": true,\\n        \\"SelectGroup\\": \\"None\\",\\n        \\"DefaultResult\\": \\"None\\",\\n        \\"Rule\\": \\"None\\",\\n        \\"CanSelect\\": true,\\n        \\"Children\\": [\\n          {\\n            \\"MarkTitle\\": \\"内部单选\\",\\n            \\"MarkTitleAlias\\": \\"None\\",\\n            \\"Type\\": \\"RADIO\\",\\n            \\"MustFill\\": true,\\n            \\"Display\\": true,\\n            \\"Selected\\": true,\\n            \\"SelectGroup\\": \\"None\\",\\n            \\"DefaultResult\\": \\"None\\",\\n            \\"Rule\\": \\"None\\",\\n            \\"CanSelect\\": true,\\n            \\"Children\\": [\\n              {\\n                \\"MarkTitle\\": \\"内部单选\\",\\n                \\"MarkTitleAlias\\": \\"None\\",\\n                \\"Type\\": \\"RADIO\\",\\n                \\"MustFill\\": true,\\n                \\"Display\\": true,\\n                \\"Selected\\": true,\\n                \\"SelectGroup\\": \\"None\\",\\n                \\"DefaultResult\\": \\"None\\",\\n                \\"Rule\\": \\"None\\",\\n                \\"CanSelect\\": true,\\n                \\"Children\\": [],\\n                \\"Exif\\": {\\n                  \\"test\\": \\"test\\",\\n                  \\"test2\\": 1\\n                },\\n                \\"PreOptions\\": [\\n                  \\"\\"\\n                ],\\n                \\"Options\\": [\\n                  {\\n                    \\"Label\\": \\"\\",\\n                    \\"Key\\": \\"\\",\\n                    \\"Shortcut\\": \\"\\",\\n                    \\"Color\\": \\"\\",\\n                    \\"Remark\\": \\"\\",\\n                    \\"Children\\": [\\n                      {\\n                        \\"Label\\": \\"\\",\\n                        \\"Key\\": \\"\\",\\n                        \\"Shortcut\\": \\"\\",\\n                        \\"Color\\": \\"\\",\\n                        \\"Remark\\": \\"\\",\\n                        \\"Children\\": [\\n                          {\\n                            \\"Label\\": \\"\\",\\n                            \\"Key\\": \\"\\",\\n                            \\"Shortcut\\": \\"\\",\\n                            \\"Color\\": \\"\\",\\n                            \\"Remark\\": \\"\\",\\n                            \\"Children\\": []\\n                          }\\n                        ]\\n                      }\\n                    ]\\n                  }\\n                ],\\n                \\"HotKeyMap\\": \\"None\\",\\n                \\"QuestionId\\": \\"\\"\\n              }\\n            ],\\n            \\"Exif\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            },\\n            \\"PreOptions\\": [\\n              \\"\\"\\n            ],\\n            \\"Options\\": [],\\n            \\"HotKeyMap\\": \\"None\\",\\n            \\"QuestionId\\": \\"\\"\\n          }\\n        ],\\n        \\"Exif\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"PreOptions\\": [\\n          \\"\\"\\n        ],\\n        \\"Options\\": [],\\n        \\"HotKeyMap\\": \\"None\\",\\n        \\"QuestionId\\": \\"\\"\\n      }\\n    ],\\n    \\"Creator\\": {\\n      \\"UserId\\": 0,\\n      \\"AccountType\\": \\"BUC\\",\\n      \\"AccountNo\\": \\"\\",\\n      \\"UserName\\": \\"\\",\\n      \\"Role\\": \\"\\"\\n    },\\n    \\"Modifier\\": {\\n      \\"UserId\\": 0,\\n      \\"AccountType\\": \\"BUC\\",\\n      \\"AccountNo\\": \\"\\",\\n      \\"UserName\\": \\"\\",\\n      \\"Role\\": \\"\\"\\n    },\\n    \\"Classify\\": \\"\\",\\n    \\"TenantId\\": \\"\\",\\n    \\"SharedMode\\": \\"\\",\\n    \\"ViewConfigs\\": {\\n      \\"ViewPlugins\\": [\\n        {\\n          \\"Type\\": \\"\\",\\n          \\"CorsProxy\\": true,\\n          \\"RelationQuestionIds\\": [\\n            \\"题目ID\\"\\n          ],\\n          \\"Hide\\": true,\\n          \\"VisitInfo\\": {\\n            \\"ossConf\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            },\\n            \\"aftsConf\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          },\\n          \\"Convertor\\": \\"\\",\\n          \\"Plugins\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"Exif\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"BindField\\": \\"\\",\\n          \\"DisplayOriImg\\": true\\n        }\\n      ]\\n    }\\n  },\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<GetTaskTemplateResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n    <Template>\\n        <QuestionConfigs>\\n            <MarkTitle>内部单选</MarkTitle>\\n            <MarkTitleAlias>None</MarkTitleAlias>\\n            <Type>RADIO</Type>\\n            <MustFill>false</MustFill>\\n            <Display>true</Display>\\n            <Selected>false</Selected>\\n            <SelectGroup>None</SelectGroup>\\n            <DefaultResult>None</DefaultResult>\\n            <Rule>None</Rule>\\n            <CanSelect>false</CanSelect>\\n            <Children>\\n                <MarkTitle>内部单选</MarkTitle>\\n                <MarkTitleAlias>None</MarkTitleAlias>\\n                <Type>RADIO</Type>\\n                <MustFill>false</MustFill>\\n                <Display>true</Display>\\n                <Selected>false</Selected>\\n                <SelectGroup>None</SelectGroup>\\n                <DefaultResult>None</DefaultResult>\\n                <Rule>None</Rule>\\n                <CanSelect>false</CanSelect>\\n                <Options>\\n                    <Children/>\\n                </Options>\\n                <HotKeyMap>None</HotKeyMap>\\n            </Children>\\n            <Options>\\n                <Children/>\\n            </Options>\\n            <HotKeyMap>None</HotKeyMap>\\n        </QuestionConfigs>\\n        <Creator>\\n            <AccountType>BUC</AccountType>\\n        </Creator>\\n        <Modifier>\\n            <AccountType>BUC</AccountType>\\n        </Modifier>\\n        <ViewConfigs>\\n            <ViewPlugins>\\n                <RelationQuestionIds>题目ID</RelationQuestionIds>\\n                <VisitInfo/>\\n            </ViewPlugins>\\n        </ViewConfigs>\\n    </Template>\\n</GetTaskTemplateResponse>","errorExample":""}]',
      'title' => '查询任务模板信息',
    ),
    'GetTaskStatus' => 
    array (
      'summary' => '查询任务当前的状态。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/status',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '147091',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户ID。如何获取租户ID，请参见[ListTenants](~~454649~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务ID。如何获取任务ID，请参见[ListTasks](~~454662~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '154***518306500608',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '返回编码，默认为0，表示执行正常。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息。',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1****',
              ),
              'Details' => 
              array (
                'description' => '详情。',
                'type' => 'string',
                'example' => '""',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TaskStatus' => 
              array (
                'description' => '任务状态，可能值：
- INIT：初始化。
- PROCESSING：处理中。
- SUCC：成功。
- FAIL：失败。
- DELETED：删除。
- OFFLINE：下线。
- FINISHED：完成。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                ),
                'example' => 'SUCC',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1****\\",\\n  \\"Details\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"Success\\": true,\\n  \\"TaskStatus\\": \\"SUCC\\",\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<GetTaskStatusResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n    <TaskStatus>SUCC</TaskStatus>\\n</GetTaskStatusResponse>","errorExample":""}]',
      'title' => '查询任务状态',
    ),
    'GetTaskStatistics' => 
    array (
      'summary' => '查询任务当前的统计信息。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/statistics',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '147786',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户ID。如何获取租户ID，请参见[ListTenants](~~454649~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'GAR***134',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务ID。如何获取任务ID，请参见[ListTasks](~~454662~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '154***2518306500608',
          ),
        ),
        2 => 
        array (
          'name' => 'StatType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '统计类型，取值如下：
- OPERATORCELL：操作单元。
- ITEM：单样本。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'ITEM',
            'default' => 'Item',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '返回编码，默认为0，表示执行正常。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息。',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1****',
              ),
              'Details' => 
              array (
                'description' => '详情。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TaskStatistics' => 
              array (
                'description' => '任务统计。',
                '$ref' => '#/components/schemas/TaskStatistic',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1****\\",\\n  \\"Details\\": \\"null\\",\\n  \\"Success\\": true,\\n  \\"TaskStatistics\\": {\\n    \\"TotalItemCount\\": 0,\\n    \\"TotalSubtaskCount\\": 0,\\n    \\"FinishedItemCount\\": 0,\\n    \\"FinishedSubtaskCount\\": 0,\\n    \\"FinalAbandonCount\\": 0,\\n    \\"PreMarkFixedCount\\": 0,\\n    \\"AcceptItemCount\\": 0,\\n    \\"TotalCheckedCount\\": 0,\\n    \\"CheckedError\\": 0,\\n    \\"CheckAbandon\\": 0,\\n    \\"CheckedAccuracy\\": 0,\\n    \\"CheckedRejectCount\\": 0,\\n    \\"TotalSampledCount\\": 0,\\n    \\"SampledErrorCount\\": 0,\\n    \\"SampledRejectCount\\": 0,\\n    \\"SampledAccuracy\\": 0,\\n    \\"TotalSamplingCount\\": 0,\\n    \\"TotalCheckCount\\": 0,\\n    \\"TotalWorkTime\\": 0,\\n    \\"TotalMarkTime\\": 0,\\n    \\"MarkEfficiency\\": 0,\\n    \\"TotalCheckTime\\": 0,\\n    \\"CheckEfficiency\\": 0,\\n    \\"SamplingAccuracy\\": 0,\\n    \\"CheckAccuracy\\": 0\\n  },\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<GetTaskStatisticsResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n    <TaskStatistics/>\\n</GetTaskStatisticsResponse>","errorExample":""}]',
      'title' => '查询任务统计',
    ),
    'ListSubtasks' => 
    array (
      'summary' => '展示子任务包列表。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskID}/subtasks',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '147615',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户ID。如何获取租户ID，请参见[ListTenants](~~454649~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'GAR***134',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskID',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '如何获取任务ID，请参见[ListTasks](~~454662~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '154***2518306500608',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '子任务列表的页码。起始值为1，默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '0',
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页显示的子任务数量，默认为20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
            'default' => '0',
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
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '返回编码，默认为0，表示执行正常。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息。',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1****',
              ),
              'Details' => 
              array (
                'description' => '详情。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'PageNumber' => 
              array (
                'description' => '返回查询的子任务列表的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '返回每页显示的子任务数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'TotalPage' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'TotalCount' => 
              array (
                'description' => '子任务总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '22',
              ),
              'Subtasks' => 
              array (
                'description' => '子任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '子任务。',
                  '$ref' => '#/components/schemas/SubtaskDetail',
                ),
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1****\\",\\n  \\"Details\\": \\"null\\",\\n  \\"Success\\": true,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"TotalPage\\": 2,\\n  \\"TotalCount\\": 22,\\n  \\"Subtasks\\": [\\n    {\\n      \\"SubtaskId\\": \\"1500682457270333440\\",\\n      \\"Status\\": \\"FINISHED\\",\\n      \\"Items\\": [\\n        {\\n          \\"FeedbackRemark\\": \\"None\\",\\n          \\"FeedbackFlag\\": true,\\n          \\"DataId\\": \\"1957578084\\",\\n          \\"State\\": \\"HANDLING\\",\\n          \\"Mine\\": 0,\\n          \\"RejectFlag\\": true,\\n          \\"FixedFlag\\": true,\\n          \\"AbandonFlag\\": true,\\n          \\"AbandonRemark\\": \\"None\\",\\n          \\"Weight\\": 311011\\n        }\\n      ],\\n      \\"TaskId\\": \\"\\",\\n      \\"CurrentWorkNode\\": \\"MARK\\",\\n      \\"WorkNodeState\\": \\"FINISHED\\",\\n      \\"Workforce\\": [\\n        {\\n          \\"NodeType\\": \\"\\",\\n          \\"WorkNodeId\\": 0,\\n          \\"Users\\": [\\n            {\\n              \\"UserId\\": 0,\\n              \\"AccountType\\": \\"BUC\\",\\n              \\"AccountNo\\": \\"\\",\\n              \\"UserName\\": \\"\\",\\n              \\"Role\\": \\"\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"CanReassign\\": true,\\n      \\"CanRelease\\": true,\\n      \\"CanDiscard\\": true,\\n      \\"Weight\\": 0,\\n      \\"ExtConfigs\\": \\"\\"\\n    }\\n  ],\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<ListSubtasksResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>20</PageSize>\\n    <TotalPage>2</TotalPage>\\n    <TotalCount>22</TotalCount>\\n    <Subtasks>\\n        <SubtaskId>1500682457270333440</SubtaskId>\\n        <Status>FINISHED</Status>\\n        <Items>\\n            <FeedbackRemark>None</FeedbackRemark>\\n            <FeedbackFlag>false</FeedbackFlag>\\n            <DataId>1957578084</DataId>\\n            <State>HANDLING</State>\\n            <Mine>0</Mine>\\n            <RejectFlag>false</RejectFlag>\\n            <FixedFlag>false</FixedFlag>\\n            <AbandonFlag>false</AbandonFlag>\\n            <AbandonRemark>None</AbandonRemark>\\n            <Weight>311011</Weight>\\n        </Items>\\n        <CurrentWorkNode>MARK</CurrentWorkNode>\\n        <WorkNodeState>FINISHED</WorkNodeState>\\n        <Workforce>\\n            <Users>\\n                <AccountType>BUC</AccountType>\\n            </Users>\\n        </Workforce>\\n    </Subtasks>\\n</ListSubtasksResponse>","errorExample":""}]',
      'title' => '子任务列表查询',
    ),
    'GetSubtask' => 
    array (
      'summary' => '查询单个子任务包信息。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskID}/subtasks/{SubtaskId}',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '147782',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户ID。如何获取租户ID，请参见[ListTenants](~~454649~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskID',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务ID。如何获取任务ID，请参见[ListTasks](~~454662~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '154***2518306500608',
          ),
        ),
        2 => 
        array (
          'name' => 'SubtaskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '子任务ID。如何获取子任务ID，请参见[ListSubtasks](~~454675~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '150***502979956736',
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
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '返回编码，默认为0，表示执行正常。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息。',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1****',
              ),
              'Details' => 
              array (
                'description' => '详情。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Success' => 
              array (
                'description' => '是否成功。可能值：
- true：表示请求成功。
- false：表示请求失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Subtask' => 
              array (
                'description' => '子任务。',
                '$ref' => '#/components/schemas/SimpleSubtask',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1****\\",\\n  \\"Details\\": \\"null\\",\\n  \\"Success\\": true,\\n  \\"Subtask\\": {\\n    \\"SubtaskId\\": 1500682457270333400,\\n    \\"Status\\": \\"FINISHED\\",\\n    \\"Items\\": [\\n      {\\n        \\"FeedbackRemark\\": \\"None\\",\\n        \\"FeedbackFlag\\": true,\\n        \\"DataId\\": \\"1957578084\\",\\n        \\"State\\": \\"HANDLING\\",\\n        \\"Mine\\": 0,\\n        \\"RejectFlag\\": true,\\n        \\"FixedFlag\\": true,\\n        \\"AbandonFlag\\": true,\\n        \\"AbandonRemark\\": \\"None\\",\\n        \\"Weight\\": 311011,\\n        \\"ItemId\\": 0\\n      }\\n    ]\\n  },\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<GetSubtaskResponse>\\n    <Subtask>\\n        <SubtaskId>1500682457270333400</SubtaskId>\\n        <Status>FINISHED</Status>\\n        <Items>\\n            <FeedbackRemark>None</FeedbackRemark>\\n            <FeedbackFlag>false</FeedbackFlag>\\n            <DataId>1957578084</DataId>\\n            <State>HANDLING</State>\\n            <Mine>0</Mine>\\n            <RejectFlag>false</RejectFlag>\\n            <FixedFlag>false</FixedFlag>\\n            <AbandonFlag>false</AbandonFlag>\\n            <AbandonRemark>None</AbandonRemark>\\n            <Weight>311011</Weight>\\n        </Items>\\n    </Subtask>\\n</GetSubtaskResponse>","errorExample":""}]',
      'title' => '单个任务包信息',
    ),
    'ListSubtaskItems' => 
    array (
      'summary' => '展示单个子任务包的标注数据。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskID}/subtasks/{SubtaskId}/items',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '147676',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户ID。如何获取租户ID，请参见[ListTenants](~~454649~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskID',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务ID。如何获取任务ID，请参见[ListTasks](~~454662~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '154***18306500608',
          ),
        ),
        2 => 
        array (
          'name' => 'SubtaskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '子任务ID。如何获取子任务ID，请参见[ListSubtasks](~~454675~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '1500***2979956736',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务包标注数据的页码。起始值为1，默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '0',
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页显示的任务包标注数据的数量，默认为20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '20',
            'minimum' => '1',
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
            'title' => 'Schema of Response',
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '返回编码，默认为0，表示执行正常。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息。',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1****',
              ),
              'Details' => 
              array (
                'description' => '详情。',
                'type' => 'string',
                'example' => '""',
              ),
              'Success' => 
              array (
                'description' => '是否成功。可能值：
- true：表示请求成功。
- false：表示请求失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'PageNumber' => 
              array (
                'description' => '返回查询的任务包标注数据的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '返回每页显示的任务包标注数据的数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'TotalPage' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'TotalCount' => 
              array (
                'description' => '任务包标注数据总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '22',
              ),
              'Items' => 
              array (
                'description' => '数据项列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据项。',
                  '$ref' => '#/components/schemas/SubtaskItemDetail',
                ),
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1****\\",\\n  \\"Details\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"Success\\": true,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"TotalPage\\": 2,\\n  \\"TotalCount\\": 22,\\n  \\"Items\\": [\\n    {\\n      \\"ItemId\\": 1500758847176994800,\\n      \\"Annotations\\": [\\n        {\\n          \\"FeedbackRemark\\": \\"None\\",\\n          \\"FeedbackFlag\\": true,\\n          \\"DataId\\": \\"1957578084\\",\\n          \\"State\\": \\"HANDLING\\",\\n          \\"Mine\\": 0,\\n          \\"RejectFlag\\": true,\\n          \\"FixedFlag\\": true,\\n          \\"AbandonFlag\\": true,\\n          \\"AbandonRemark\\": \\"None\\",\\n          \\"Weight\\": 311011\\n        }\\n      ],\\n      \\"DataSource\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  ],\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<ListSubtaskItemsResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>20</PageSize>\\n    <TotalPage>2</TotalPage>\\n    <TotalCount>22</TotalCount>\\n    <Items>\\n        <ItemId>1500758847176994800</ItemId>\\n        <Annotations>\\n            <FeedbackRemark>None</FeedbackRemark>\\n            <FeedbackFlag>false</FeedbackFlag>\\n            <DataId>1957578084</DataId>\\n            <State>HANDLING</State>\\n            <Mine>0</Mine>\\n            <RejectFlag>false</RejectFlag>\\n            <FixedFlag>false</FixedFlag>\\n            <AbandonFlag>false</AbandonFlag>\\n            <AbandonRemark>None</AbandonRemark>\\n            <Weight>311011</Weight>\\n        </Annotations>\\n    </Items>\\n</ListSubtaskItemsResponse>","errorExample":""}]',
      'title' => '获取任务包标注数据',
    ),
    'GetSubtaskItem' => 
    array (
      'summary' => '查询子任务包中的单个标注数据。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/subtasks/{SubtaskId}/items/{ItemId}',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '147679',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnP8VCEV',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户ID。如何获取租户ID，请参见[ListTenants](~~454649~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务ID。如何获取任务ID，请参见[ListTasks](~~454662~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '154***518306500608',
          ),
        ),
        2 => 
        array (
          'name' => 'SubtaskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '子任务ID。如何获取子任务ID，请参见[ListSubtasks](~~454675~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '15***82502979956736',
          ),
        ),
        3 => 
        array (
          'name' => 'ItemId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据项ID。如何获取数据项ID，请参见[GetSubtask](~~454677~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '15***2994667356160',
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
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '返回编码，默认为0，表示执行正常。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息。',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1****',
              ),
              'Details' => 
              array (
                'description' => '详情。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Success' => 
              array (
                'description' => '是否成功。可能值：
- true：表示请求成功。
- false：表示请求失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Item' => 
              array (
                'description' => '数据项。',
                '$ref' => '#/components/schemas/SubtaskItemDetail',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1****\\",\\n  \\"Details\\": \\"null\\",\\n  \\"Success\\": true,\\n  \\"Item\\": {\\n    \\"ItemId\\": 1500758847176994800,\\n    \\"Annotations\\": [\\n      {\\n        \\"FeedbackRemark\\": \\"None\\",\\n        \\"FeedbackFlag\\": true,\\n        \\"DataId\\": \\"1957578084\\",\\n        \\"State\\": \\"HANDLING\\",\\n        \\"Mine\\": 0,\\n        \\"RejectFlag\\": true,\\n        \\"FixedFlag\\": true,\\n        \\"AbandonFlag\\": true,\\n        \\"AbandonRemark\\": \\"None\\",\\n        \\"Weight\\": 311011\\n      }\\n    ],\\n    \\"DataSource\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    }\\n  },\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<GetSubtaskItemResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n    <Item>\\n        <ItemId>1500758847176994800</ItemId>\\n        <Annotations>\\n            <FeedbackRemark>None</FeedbackRemark>\\n            <FeedbackFlag>false</FeedbackFlag>\\n            <DataId>1957578084</DataId>\\n            <State>HANDLING</State>\\n            <Mine>0</Mine>\\n            <RejectFlag>false</RejectFlag>\\n            <FixedFlag>false</FixedFlag>\\n            <AbandonFlag>false</AbandonFlag>\\n            <AbandonRemark>None</AbandonRemark>\\n            <Weight>311011</Weight>\\n        </Annotations>\\n    </Item>\\n</GetSubtaskItemResponse>","errorExample":""}]',
      'title' => '查询单个标注数据',
    ),
    'ExportAnnotations' => 
    array (
      'summary' => '导出标注任务的结果数据。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/annotations/export',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '147702',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户ID。如何获取租户ID，请参见[ListTenants](~~454649~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务ID。如何获取任务ID，请参见[ListTasks](~~454662~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '15***02518306500608',
          ),
        ),
        2 => 
        array (
          'name' => 'Target',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标。',
            'type' => 'string',
            'required' => false,
            'example' => 'PAI',
          ),
        ),
        3 => 
        array (
          'name' => 'OssPath',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'OSS路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://***-hz-oss.oss-cn-hangzhou.aliyuncs.com/output/',
          ),
        ),
        4 => 
        array (
          'name' => 'RegisterDataset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否注册成为PAI数据集。取值如下：
- true：将标注结果注册为PAI数据集。
- false：直接将标注结果导出至OSS目录，不注册数据集。',
            'type' => 'string',
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
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '返回编码，默认为0，表示执行正常。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息。',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1F29E',
              ),
              'Details' => 
              array (
                'description' => '详情。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Success' => 
              array (
                'description' => '是否成功，可能值：
- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'FlowJob' => 
              array (
                'description' => '工作流。',
                '$ref' => '#/components/schemas/FlowJobInfo',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。
- 当Success为false，返回业务错误码；
- 当Success为true，返回空值。',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1F29E\\",\\n  \\"Details\\": \\"null\\",\\n  \\"Success\\": true,\\n  \\"FlowJob\\": {\\n    \\"JobId\\": \\"\\",\\n    \\"JobType\\": \\"\\",\\n    \\"ProcessType\\": \\"\\",\\n    \\"MessageId\\": \\"\\",\\n    \\"TaskId\\": \\"\\",\\n    \\"Display\\": true\\n  },\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<ExportAnnotationsResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>false</Success>\\n    <FlowJob/>\\n</ExportAnnotationsResponse>","errorExample":""}]',
      'title' => '导出标注结果',
    ),
    'ListJobs' => 
    array (
      'summary' => '展示所有导出的标注结果的列表。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/jobs',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '147919',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户ID。如何获取租户ID，请参见[ListTenants](~~454649~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标注结果列表的页码。起始值为1，默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页显示的标注结果数量，默认为20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'JobType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务类型，暂时只开放：DOWNLOWD_MARKRESULT_FLOW。',
            'type' => 'string',
            'required' => false,
            'example' => 'DOWNLOWD_MARKRESULT_FLOW',
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
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '返回编码，默认为0，表示执行正常。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息。',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1****',
              ),
              'Details' => 
              array (
                'description' => '详情。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Success' => 
              array (
                'description' => '是否成功，可能值：
- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'PageNumber' => 
              array (
                'description' => '返回查询的标注结果列表的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '返回每页显示的标注结果数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'TotalPage' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'TotalCount' => 
              array (
                'description' => '标注结果总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '22',
              ),
              'Jobs' => 
              array (
                'description' => '任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '任务。',
                  '$ref' => '#/components/schemas/Job',
                ),
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。
- 当Success为false，返回业务错误码。
- 当Success为true，返回空值。',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1****\\",\\n  \\"Details\\": \\"null\\",\\n  \\"Success\\": true,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"TotalPage\\": 2,\\n  \\"TotalCount\\": 22,\\n  \\"Jobs\\": [\\n    {\\n      \\"Status\\": \\"\\",\\n      \\"JobResult\\": {\\n        \\"ResultLink\\": \\"\\"\\n      },\\n      \\"JobType\\": \\"\\",\\n      \\"GmtCreateTime\\": \\"\\",\\n      \\"GmtModifiedTime\\": \\"\\",\\n      \\"Creator\\": {\\n        \\"UserId\\": 0,\\n        \\"AccountType\\": \\"BUC\\",\\n        \\"AccountNo\\": \\"\\",\\n        \\"UserName\\": \\"\\",\\n        \\"Role\\": \\"\\"\\n      },\\n      \\"JobId\\": \\"\\"\\n    }\\n  ],\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<ListJobsResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>20</PageSize>\\n    <TotalPage>2</TotalPage>\\n    <TotalCount>22</TotalCount>\\n    <Jobs>\\n        <JobResult/>\\n        <Creator>\\n            <AccountType>BUC</AccountType>\\n        </Creator>\\n    </Jobs>\\n</ListJobsResponse>","errorExample":""}]',
      'title' => '导出的标注结果列表展示',
    ),
    'GetJob' => 
    array (
      'summary' => '查询单个标注导出结果的信息。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/jobs/{JobId}',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '147914',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户id，可以通过ListTenantId租户列表查询的API来查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'JobId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务id，可在iTAG的任务中心中获取。',
            'type' => 'string',
            'required' => true,
            'example' => '147***441221943296',
          ),
        ),
        2 => 
        array (
          'name' => 'JobType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务类型，暂时只开放：DOWNLOWD_MARKRESULT_FLOW。',
            'type' => 'string',
            'required' => false,
            'example' => 'DOWNLOWD_MARKRESULT_FLOW',
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
            'description' => '项目',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1F29E',
              ),
              'Details' => 
              array (
                'description' => '详情',
                'type' => 'string',
                'example' => 'null',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Job' => 
              array (
                'description' => '任务',
                '$ref' => '#/components/schemas/Job',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1F29E\\",\\n  \\"Details\\": \\"null\\",\\n  \\"Success\\": true,\\n  \\"Job\\": {\\n    \\"Status\\": \\"\\",\\n    \\"JobResult\\": {\\n      \\"ResultLink\\": \\"\\"\\n    },\\n    \\"JobType\\": \\"\\",\\n    \\"GmtCreateTime\\": \\"\\",\\n    \\"GmtModifiedTime\\": \\"\\",\\n    \\"Creator\\": {\\n      \\"UserId\\": 0,\\n      \\"AccountType\\": \\"BUC\\",\\n      \\"AccountNo\\": \\"\\",\\n      \\"UserName\\": \\"\\",\\n      \\"Role\\": \\"\\"\\n    },\\n    \\"JobId\\": \\"\\"\\n  },\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<GetJobResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n    <Job>\\n        <JobResult/>\\n        <Creator>\\n            <AccountType>BUC</AccountType>\\n        </Creator>\\n    </Job>\\n</GetJobResponse>","errorExample":""}]',
      'title' => '单个标注结果',
    ),
    'ListUsers' => 
    array (
      'summary' => '展示当前租户下的全部标注成员。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/users',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '147798',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户ID。如何获取租户ID，请参见[ListTenants](~~454649~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标注成员列表的页码。起始值为1，默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页显示的标注成员数量，默认为20。',
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
            'title' => 'Schema of Response',
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '返回编码，默认为0，表示执行正常。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息。',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1****',
              ),
              'Details' => 
              array (
                'description' => '详情。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Success' => 
              array (
                'description' => '是否成功，可能值：
- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'PageNumber' => 
              array (
                'description' => '返回查询的标注成员列表的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '返回每页显示的标注成员数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'TotalPage' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'TotalCount' => 
              array (
                'description' => '标注成员总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '22',
              ),
              'Users' => 
              array (
                'description' => '用户列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '用户。',
                  '$ref' => '#/components/schemas/SimpleUser',
                ),
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。
- 当Success为false，返回业务错误码；
- 当Success为true，返回空值。',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1****\\",\\n  \\"Details\\": \\"null\\",\\n  \\"Success\\": true,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"TotalPage\\": 2,\\n  \\"TotalCount\\": 22,\\n  \\"Users\\": [\\n    {\\n      \\"UserId\\": 0,\\n      \\"AccountType\\": \\"BUC\\",\\n      \\"AccountNo\\": \\"\\",\\n      \\"UserName\\": \\"\\",\\n      \\"Role\\": \\"\\"\\n    }\\n  ],\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<ListUsersResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>20</PageSize>\\n    <TotalPage>2</TotalPage>\\n    <TotalCount>22</TotalCount>\\n    <Users>\\n        <AccountType>BUC</AccountType>\\n    </Users>\\n</ListUsersResponse>","errorExample":""}]',
      'title' => '展示标注成员',
    ),
    'GetUser' => 
    array (
      'summary' => '查询租户里单个成员的详细信息。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/users/{UserId}',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '147871',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户ID。如何获取租户ID，请参见[ListTenants](~~454649~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '用户ID。如何查询用户ID，请参见[ListUsers](~~454688~~)。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '166***9980757311',
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
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '返回编码，默认为0，表示执行正常。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息。',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1****',
              ),
              'Details' => 
              array (
                'description' => '详情。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Success' => 
              array (
                'description' => '是否成功，可能值：
- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。
- 当Success为false，返回业务错误码；
- 当Success为true，返回空值。',
                'type' => 'string',
                'example' => '""',
              ),
              'User' => 
              array (
                'description' => '用户信息。',
                '$ref' => '#/components/schemas/SimpleUser',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1****\\",\\n  \\"Details\\": \\"null\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"User\\": {\\n    \\"UserId\\": 0,\\n    \\"AccountType\\": \\"BUC\\",\\n    \\"AccountNo\\": \\"\\",\\n    \\"UserName\\": \\"\\",\\n    \\"Role\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetUserResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n    <User>\\n        <AccountType>BUC</AccountType>\\n    </User>\\n</GetUserResponse>","errorExample":""}]',
      'title' => '查询单个成员信息',
    ),
    'CreateUser' => 
    array (
      'summary' => '租户内新增成员。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/users',
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
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '147885',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户ID。如何获取租户ID，请参见[ListTenants](~~454649~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'GAR***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'AccountNo' => 
              array (
                'description' => '当前阿里云账号（主账号）下的RAM用户（子账号）的UID。如何获取UID，请参见[GetUser](~~2330970~~)。',
                'type' => 'string',
                'required' => true,
                'example' => '166***980757310',
              ),
              'AccountType' => 
              array (
                'description' => '账号类型，目前仅开放：ALIYUN。',
                'type' => 'string',
                'required' => true,
                'example' => 'ALIYUN',
              ),
              'Role' => 
              array (
                'description' => '角色。取值如下：
- OPERATOR：标注员。
- ADMIN：管理员。
- LEADER：标注组长。',
                'type' => 'string',
                'required' => true,
                'example' => 'ADMIN',
              ),
              'UserName' => 
              array (
                'description' => '用户名。',
                'type' => 'string',
                'required' => false,
                'example' => 'user1',
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
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '返回编码，默认为0，表示执行正常。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息。',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1****',
              ),
              'Details' => 
              array (
                'description' => '详情。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Success' => 
              array (
                'description' => '是否成功，可能值：
- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'UserId' => 
              array (
                'description' => '用户ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '166233998075****',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。
- 当Success为false，返回业务错误码；
- 当Success为true，返回空值。',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1****\\",\\n  \\"Details\\": \\"null\\",\\n  \\"Success\\": true,\\n  \\"UserId\\": 0,\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateUserResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>false</Success>\\n    <UserId>1662339980757311</UserId>\\n</CreateUserResponse>","errorExample":""}]',
      'title' => '新增成员',
    ),
    'UpdateUser' => 
    array (
      'summary' => '更新租户内成员信息。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/users/{UserId}',
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
      'consumes' => 
      array (
        0 => 'multipart/form-data',
        1 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '147887',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户ID。如何获取租户ID，请参见[ListTenants](~~454649~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA**W134',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '用户ID。如何查询用户ID，请参见[ListUsers](~~454688~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '166***80757311',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'Role' => 
              array (
                'description' => '角色。可能值：
- OPERATOR：标注员。
- ADMIN：管理员。
- LEADER：标注组长。',
                'type' => 'string',
                'required' => true,
                'example' => 'ADMIN',
              ),
              'UserName' => 
              array (
                'description' => '用户名。',
                'type' => 'string',
                'required' => true,
                'example' => 'user1',
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
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '返回编码，默认为0，表示执行正常。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息。',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1****',
              ),
              'Details' => 
              array (
                'description' => '详情。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Success' => 
              array (
                'description' => '是否成功，可能值：
- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。
- 当Success为false，返回业务错误码；
- 当Success为true，返回空值。',
                'type' => 'string',
                'example' => '""',
              ),
              'UserId' => 
              array (
                'description' => '用户ID。',
                'type' => 'string',
                'example' => '166***980757311',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1****\\",\\n  \\"Details\\": \\"null\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"UserId\\": \\"166***980757311\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateUserResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n    <UserId>1662339980757311</UserId>\\n</UpdateUserResponse>","errorExample":""}]',
      'title' => '更新成员',
    ),
    'DeleteUser' => 
    array (
      'summary' => '删除租户内某个成员。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/users/{UserId}',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '147889',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户id，可以通过ListTenantId租户列表查询的API来查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'GAR***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '用户id',
            'type' => 'string',
            'required' => true,
            'example' => '166***980757311',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '项目',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1F29E',
              ),
              'Details' => 
              array (
                'description' => '详情',
                'type' => 'string',
                'example' => 'null',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1F29E\\",\\n  \\"Details\\": \\"null\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteUserResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n</DeleteUserResponse>","errorExample":""}]',
      'title' => '删除成员',
    ),
    'GetTaskWorkforce' => 
    array (
      'summary' => '查询任务中各个结点配置的人员信息。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/workforce',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '147892',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户ID。如何获取租户ID，请参见[ListTenants](~~454649~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'G***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务ID。如何获取任务ID，请参见[ListTasks](~~454662~~)。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '154***518306500608',
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
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '返回编码，默认为0，表示执行正常。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息。',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1****',
              ),
              'Details' => 
              array (
                'description' => '详情。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Success' => 
              array (
                'description' => '是否成功，可能值：
- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Workforce' => 
              array (
                'description' => '人力列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '人力。',
                  '$ref' => '#/components/schemas/Workforce',
                ),
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。
- 当Success为false，返回业务错误码；
- 当Success为true，返回空值。',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1****\\",\\n  \\"Details\\": \\"null\\",\\n  \\"Success\\": true,\\n  \\"Workforce\\": [\\n    {\\n      \\"NodeType\\": \\"\\",\\n      \\"WorkNodeId\\": 0,\\n      \\"Users\\": [\\n        {\\n          \\"UserId\\": 0,\\n          \\"AccountType\\": \\"BUC\\",\\n          \\"AccountNo\\": \\"\\",\\n          \\"UserName\\": \\"\\",\\n          \\"Role\\": \\"\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<GetTaskWorkforceResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n    <Workforce>\\n        <Users>\\n            <AccountType>BUC</AccountType>\\n        </Users>\\n    </Workforce>\\n</GetTaskWorkforceResponse>","errorExample":""}]',
      'title' => '查询任务人员配置信息',
    ),
    'AddWorkNodeWorkforce' => 
    array (
      'summary' => '为标注任务的工作节点（标注、质检和验收）进行人员分配。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/worknodes/{WorkNodeId}/workforce',
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
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '147915',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户ID。如何获取租户ID，请参见[ListTenants](~~454649~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务ID。如何获取任务ID，请参见[ListTasks](~~454662~~)。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1543***518306500608',
          ),
        ),
        2 => 
        array (
          'name' => 'WorkNodeId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '工作结点ID，工作流顺序，从0开始。例如标注-质检-验收中，标注是0，质检是1，验收是2。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'UserIds' => 
              array (
                'description' => '用户列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '用户的阿里云账号ID。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '1662****80757311',
                ),
                'required' => false,
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
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '返回编码，默认为0，表示执行正常。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息。',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1****',
              ),
              'Details' => 
              array (
                'description' => '详情。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Success' => 
              array (
                'description' => '是否成功，可能值：
- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。
- 当Success为false，返回业务错误码。
- 当Success为true，返回空值。',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1****\\",\\n  \\"Details\\": \\"null\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<AddWorkNodeWorkforceResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>false</Success>\\n</AddWorkNodeWorkforceResponse>","errorExample":""}]',
      'title' => '增加成员',
    ),
    'GetTaskWorkforceStatistic' => 
    array (
      'summary' => '查询任务中各成员的统计数据。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/workforce/statistic',
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
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '147911',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '租户ID',
            'description' => '租户ID。如何获取租户ID，请参见[ListTenants](~~454649~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务ID。如何获取任务ID，请参见[ListTasks](~~454662~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '154****8306500608',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务成员列表的页码。起始值为1，默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页显示的任务成员数量，默认为20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'StatType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '统计类型',
            'description' => '统计类型，取值如下：
- ITEM：按照单条审核记录。
- OPERATORCELL：按照操作单元，一个ITEM可能会包含多个操作单元。',
            'type' => 'string',
            'required' => false,
            'example' => 'ITEM',
            'default' => 'ITEM',
            'enum' => 
            array (
              0 => 'ITEM',
              1 => 'OPERATORCELL',
            ),
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '返回编码，默认为0，表示执行正常。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息。',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1****',
              ),
              'Details' => 
              array (
                'description' => '详情。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Success' => 
              array (
                'description' => '是否成功，可能值：
- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'UsersStatistic' => 
              array (
                'description' => '用户统计列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '用户统计信息。',
                  '$ref' => '#/components/schemas/UserStatistic',
                ),
              ),
              'PageNumber' => 
              array (
                'description' => '返回查询的任务成员列表的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '返回每页显示的任务成员数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'TotalPage' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'TotalCount' => 
              array (
                'description' => '任务成员总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '22',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。
- 当Success为false，返回业务错误码；
- 当Success为true，返回空值。',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1****\\",\\n  \\"Details\\": \\"null\\",\\n  \\"Success\\": true,\\n  \\"UsersStatistic\\": [\\n    {\\n      \\"UserId\\": \\"\\",\\n      \\"TotalMarkItemsCount\\": 0,\\n      \\"AcceptedMarkItemsCount\\": 0,\\n      \\"MarkTime\\": 0,\\n      \\"MarkEfficiency\\": 0,\\n      \\"CheckCount\\": 0,\\n      \\"CheckedAcceptedCount\\": 0,\\n      \\"CheckedAccuracy\\": 0,\\n      \\"SamplingAccuracy\\": 0,\\n      \\"SamplingCount\\": 0,\\n      \\"SamplingErrorCount\\": 0\\n    }\\n  ],\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"TotalPage\\": 2,\\n  \\"TotalCount\\": 22,\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<GetTaskWorkforceStatisticResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n    <UsersStatistic/>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>20</PageSize>\\n    <TotalPage>2</TotalPage>\\n    <TotalCount>22</TotalCount>\\n</GetTaskWorkforceStatisticResponse>","errorExample":""}]',
      'title' => '查询任务成员统计',
    ),
    'UpdateTaskWorkforce' => 
    array (
      'summary' => '更新任务成员。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/workforce',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '147907',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户ID。如何获取租户ID，请参见[ListTenants](~~454649~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'G***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '如何获取任务ID，请参见[ListTasks](~~454662~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '15***518306500608',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'Workforce' => 
              array (
                'description' => '用户列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '人力结点。',
                  'required' => false,
                  '$ref' => '#/components/schemas/SimpleWorkforce',
                ),
                'required' => false,
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
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '返回编码，默认为0，表示执行正常。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息。',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1****',
              ),
              'Details' => 
              array (
                'description' => '详情。',
                'type' => 'string',
                'example' => '""',
              ),
              'Success' => 
              array (
                'description' => '是否成功，可能值：
- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。
- 当Success为false，返回业务错误码；
- 当Success为true，返回空值。',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1****\\",\\n  \\"Details\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateTaskWorkforceResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n</UpdateTaskWorkforceResponse>","errorExample":""}]',
      'title' => '更新成员',
    ),
    'RemoveWorkNodeWorkforce' => 
    array (
      'summary' => '删除任务中某个工作结点（包括标注、质检或验收）的成员。',
      'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/worknodes/{WorkNodeId}/workforce',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '147916',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnF2O1M4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TenantId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '租户ID。如何获取租户ID，请参见[ListTenants](~~454649~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'GA***W134',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务ID。如何获取任务ID，请参见[ListTasks](~~454662~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '154***518306500608',
          ),
        ),
        2 => 
        array (
          'name' => 'WorkNodeId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '工作结点ID，工作流顺序，从0开始。例如标注-质检-验收中，标注是0，质检是1，验收是2。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'minimum' => '0',
            'example' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'UserIds' => 
              array (
                'description' => '用户ID。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '用户ID。如何获取用户ID，请参见[GetTaskWorkforce](~~454697~~)。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '166***9980757311',
                ),
                'required' => false,
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
            'description' => '项目。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '返回编码，默认为0，表示执行正常。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '请求的返回信息。',
                'type' => 'string',
                'required' => true,
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '90ABA848-AD74-1F6E-84BC-4182A7F1****',
              ),
              'Details' => 
              array (
                'description' => '详情。',
                'type' => 'string',
                'example' => '""',
              ),
              'Success' => 
              array (
                'description' => '是否成功，可能值：
- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。
- 当Success为false，返回业务错误码。
- 当Success为true，返回空值。',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"90ABA848-AD74-1F6E-84BC-4182A7F1****\\",\\n  \\"Details\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveWorkNodeWorkforceResponse>\\n    <Code>0</Code>\\n    <Message>success</Message>\\n    <RequestId>90ABA848-AD74-1F6E-84BC-4182A7F1F29E</RequestId>\\n    <Details>null</Details>\\n    <Success>true</Success>\\n</RemoveWorkNodeWorkforceResponse>","errorExample":""}]',
      'title' => '删除成员',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'openitag.cn-beijing.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'openitag.cn-hangzhou.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'openitag.cn-shanghai.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'openitag.cn-shenzhen.aliyuncs.com',
    ),
  ),
);
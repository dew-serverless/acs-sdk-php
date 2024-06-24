<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Qualitycheck',
    'version' => '2019-01-15',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 172590,
      'title' => '数据上传',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UploadAudioData',
        1 => 'UploadDataV4',
        2 => 'UploadData',
        3 => 'UpdateQualityCheckData',
      ),
    ),
    1 => 
    array (
      'id' => 77484,
      'title' => '质检规则&方案',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 77485,
          'title' => '质检规则管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'AddRuleV4',
            1 => 'UpdateRuleV4',
            2 => 'ListRulesV4',
            3 => 'GetRuleV4',
            4 => 'DeleteRuleV4',
            5 => 'TestRuleV4',
          ),
        ),
        1 => 
        array (
          'id' => 171992,
          'title' => '质检方案管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateQualityCheckScheme',
            1 => 'UpdateQualityCheckScheme',
            2 => 'GetQualityCheckScheme',
            3 => 'ListQualityCheckScheme',
            4 => 'DeleteQualityCheckScheme',
            5 => 'UpdateRuleToScheme',
            6 => 'CreateCheckTypeToScheme',
            7 => 'UpdateCheckTypeToScheme',
          ),
        ),
        2 => 
        array (
          'id' => 77498,
          'title' => '质检规则-分类',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'AddRuleCategory',
            1 => 'GetRuleCategory',
            2 => 'DelRuleCategory',
          ),
        ),
        3 => 
        array (
          'id' => 77409,
          'title' => '质检规则-适用业务',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'AddBusinessCategory',
            1 => 'DeleteBusinessCategory',
            2 => 'GetBusinessCategoryList',
          ),
        ),
      ),
    ),
    2 => 
    array (
      'id' => 172422,
      'title' => '呼叫中心-质检任务管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateSchemeTaskConfig',
        1 => 'UpdateSchemeTaskConfig',
        2 => 'ListSchemeTaskConfig',
      ),
    ),
    3 => 
    array (
      'id' => 77441,
      'title' => '数据集',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SubmitQualityCheckTask',
        1 => 'SaveConfigDataSet',
        2 => 'ListDataSet',
        3 => 'DeleteDataSet',
      ),
    ),
    4 => 
    array (
      'id' => 77422,
      'title' => '质检结果',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 172605,
          'title' => '质检结果',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'GetResult',
            1 => 'GetResultToReview',
          ),
        ),
        1 => 
        array (
          'id' => 172423,
          'title' => '会话组质检',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListSessionGroup',
            1 => 'AssignReviewerBySessionGroup',
            2 => 'RevertAssignedSessionGroup',
          ),
        ),
        2 => 
        array (
          'id' => 77435,
          'title' => '申诉&复核&分配',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'AssignReviewer',
            1 => 'SubmitReviewInfo',
            2 => 'BatchSubmitReviewInfo',
            3 => 'SubmitComplaint',
            4 => 'HandleComplaint',
            5 => 'RevertAssignedSession',
          ),
        ),
      ),
    ),
    5 => 
    array (
      'id' => 77417,
      'title' => '语音模型训练',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 77472,
          'title' => '热词模型',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateAsrVocab',
            1 => 'UpdateAsrVocab',
            2 => 'GetAsrVocab',
            3 => 'ListAsrVocab',
            4 => 'DeleteAsrVocab',
          ),
        ),
        1 => 
        array (
          'id' => 77451,
          'title' => '语言模型',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'GetCustomizationConfigList',
            1 => 'DeleteCustomizationConfig',
          ),
        ),
        2 => 
        array (
          'id' => 172606,
          'title' => '模型效果评测',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'SubmitPrecisionTask',
            1 => 'GetPrecisionTask',
            2 => 'ListPrecisionTask',
            3 => 'DeletePrecisionTask',
          ),
        ),
        3 => 
        array (
          'id' => 172622,
          'title' => '人工评测',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'GetNextResultToVerify',
            1 => 'VerifyFile',
            2 => 'VerifySentence',
          ),
        ),
      ),
    ),
    6 => 
    array (
      'id' => 77454,
      'title' => '系统管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 77493,
          'title' => '复核管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateTaskAssignRule',
            1 => 'UpdateTaskAssignRule',
            2 => 'ListTaskAssignRules',
            3 => 'DeleteTaskAssignRule',
          ),
        ),
        1 => 
        array (
          'id' => 172607,
          'title' => '预警管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateWarningConfig',
            1 => 'UpdateWarningConfig',
            2 => 'ListWarningConfig',
            3 => 'DeleteWarningConfig',
          ),
        ),
        2 => 
        array (
          'id' => 172609,
          'title' => '技能组管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateSkillGroupConfig',
            1 => 'UpdateSkillGroupConfig',
            2 => 'GetSkillGroupConfig',
            3 => 'ListSkillGroupConfig',
            4 => 'DeleteSkillGroupConfig',
          ),
        ),
      ),
    ),
    7 => 
    array (
      'id' => 167616,
      'title' => '不推荐或白名单开放',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 172610,
          'title' => '实时质检',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'GetSyncResult',
            1 => 'SyncQualityCheck',
            2 => 'UpdateSyncQualityCheckData',
          ),
        ),
        1 => 
        array (
          'id' => 172629,
          'title' => '其他',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'DeleteSchemeTaskConfig',
          ),
        ),
      ),
    ),
    8 => 
    array (
      'id' => 172611,
      'title' => '新版本（V4）弃用',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 172612,
          'title' => '规则管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'DeleteRule',
            1 => 'GetRuleById',
            2 => 'GetRulesCountList',
            3 => 'UpdateRuleById',
            4 => 'UpdateRule',
            5 => 'UploadRule',
            6 => 'GetRuleDetail',
            7 => 'GetRule',
            8 => 'ListRules',
            9 => 'InvalidRule',
          ),
        ),
        1 => 
        array (
          'id' => 172613,
          'title' => '评分管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'UpdateSubScoreForApi',
            1 => 'UpdateScoreForApi',
            2 => 'InsertSubScoreForApi',
            3 => 'InsertScoreForApi',
            4 => 'GetScoreInfo',
            5 => 'DeleteSubScoreForApi',
            6 => 'DeleteScoreForApi',
          ),
        ),
        2 => 
        array (
          'id' => 172630,
          'title' => '其他',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'UploadDataSync',
          ),
        ),
      ),
    ),
    9 => 
    array (
      'id' => 188591,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateUser',
        1 => 'ListUsers',
        2 => 'UpdateUser',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'BusinessCategoryBasicInfo' => 
      array (
        'description' => '适用业务',
        'type' => 'object',
        'properties' => 
        array (
          'Bid' => 
          array (
            'title' => '业务ID',
            'description' => '业务ID',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'ServiceType' => 
          array (
            'title' => '服务类型(ServiceCategory)',
            'description' => '服务类型（ServiceCategory）。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'Name' => 
          array (
            'title' => '业务名称',
            'description' => '业务名称',
            'type' => 'string',
            'example' => '全部',
          ),
          'OriginalId' => 
          array (
            'title' => 'originalId',
            'description' => 'originalId',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
        ),
      ),
      'ConditionBasicInfo' => 
      array (
        'description' => '表达式',
        'type' => 'object',
        'properties' => 
        array (
          'Cid' => 
          array (
            'title' => '条件id，可能是db中的主键，也可能是转换成的a, b, c',
            'description' => '条件id，可能是db中的主键，也可能是转换成的a, b, c',
            'type' => 'string',
            'example' => 'a',
          ),
          'Id' => 
          array (
            'title' => '在db中的主键',
            'description' => '在db中的主键',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'Rid' => 
          array (
            'title' => '条件所属的规则id',
            'description' => '条件所属的规则id',
            'type' => 'string',
            'example' => '1',
          ),
          'Check_range' => 
          array (
            'title' => '检测范围',
            'description' => '检测范围',
            'type' => 'object',
            'properties' => 
            array (
              'RoleId' => 
              array (
                'title' => '对应 RoleType.id',
                'description' => '对应 RoleType.id',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Role' => 
              array (
                'title' => '对应 RoleType.type',
                'description' => '对应 RoleType.type',
                'type' => 'string',
                'example' => '客服',
              ),
              'Anchor' => 
              array (
                'title' => '前置后置条件',
                'description' => '前置后置条件',
                'type' => 'object',
                'properties' => 
                array (
                  'Cid' => 
                  array (
                    'title' => '条件ID',
                    'description' => '条件ID',
                    'type' => 'string',
                    'example' => 'a',
                  ),
                  'Location' => 
                  array (
                    'title' => '位置',
                    'description' => '位置',
                    'type' => 'string',
                    'example' => 'BEFORE',
                  ),
                  'Hit_time' => 
                  array (
                    'title' => '命中次数',
                    'description' => '命中次数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                ),
              ),
              'Range' => 
              array (
                'title' => '相对范围',
                'description' => '相对范围',
                'type' => 'object',
                'properties' => 
                array (
                  'From' => 
                  array (
                    'title' => '对话开始索引',
                    'description' => '对话开始索引',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'To' => 
                  array (
                    'title' => '对话结束索引',
                    'description' => '对话结束索引',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                ),
              ),
              'Absolute' => 
              array (
                'title' => 'false: 相对位置; 会结合anchor以及角色来决定句子位置',
                'description' => 'false: 相对位置; 会结合anchor以及角色来决定句子位置',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'AllSentencesSatisfy' => 
              array (
                'title' => 'true: 每句话都必须满足条件；',
                'description' => 'true: 每句话都必须满足条件；',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
          'Operators' => 
          array (
            'title' => '算子列表',
            'description' => '算子列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '算子',
              '$ref' => '#/components/schemas/OperatorBasicInfo',
            ),
          ),
          'Lambda' => 
          array (
            'title' => 'Lambda表达式：例如:a&&b',
            'description' => 'Lambda表达式：例如:a&&b',
            'type' => 'string',
            'example' => 'a',
          ),
          'Exclusion' => 
          array (
            'title' => '排除',
            'description' => '排除',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '0',
          ),
          'Name' => 
          array (
            'title' => '条件名',
            'description' => '条件名',
            'type' => 'string',
            'example' => 'xx',
          ),
          'UserGroup' => 
          array (
            'title' => '用户组',
            'description' => '用户组',
            'type' => 'string',
            'example' => 'xxxx',
          ),
        ),
      ),
      'GraphFlowNode' => 
      array (
        'description' => '流程节点',
        'type' => 'object',
        'properties' => 
        array (
          'Id' => 
          array (
            'title' => '节点id',
            'description' => '节点ID。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'Rid' => 
          array (
            'title' => '规则ID，当规则没有落库时 rid为空。当规则落库时 rid == id',
            'description' => '规则ID，当规则没有落库时rid为空。当规则落库时rid==ID',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'Name' => 
          array (
            'title' => '节点名字',
            'description' => '节点名字',
            'type' => 'string',
            'example' => '开始节点',
          ),
          'NodeType' => 
          array (
            'title' => '节点类型',
            'description' => '节点类型',
            'type' => 'string',
            'example' => 'startNode',
          ),
          'Index' => 
          array (
            'title' => 'index',
            'description' => '索引',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'Content' => 
          array (
            'title' => '前端展示使用',
            'description' => '前端展示使用',
            'type' => 'string',
            'example' => '{}',
          ),
          'Properties' => 
          array (
            'title' => '节点属性',
            'description' => '节点属性',
            'type' => 'object',
            'properties' => 
            array (
              'Type' => 
              array (
                'title' => '属性类型',
                'description' => '属性类型',
                'type' => 'string',
                'example' => 'xx',
              ),
              'Role' => 
              array (
                'title' => 'single类型时，角色',
                'description' => 'single类型时，角色',
                'type' => 'string',
                'example' => '客户',
              ),
              'SayType' => 
              array (
                'title' => 'single类型时，是否表达',
                'description' => 'single类型时，是否表达',
                'type' => 'string',
              ),
              'RuleScoreType' => 
              array (
                'title' => '是否计分',
                'description' => '是否计分',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'ScoreNum' => 
              array (
                'title' => '计分值',
                'description' => '计分值',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'ScoreType' => 
              array (
                'title' => '1加分 3减分 默认1',
                'description' => '1：加分；3：减分；默认1。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'ScoreRuleHitType' => 
              array (
                'title' => '0-命中节点时计分',
                'description' => '0：命中节点时计分',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'AutoReview' => 
              array (
                'title' => '1 "不自动审核"',
                'description' => '1：不自动审核',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'ScoreNumType' => 
              array (
                'title' => '0-触发规则后加减分;1-触发规则后一次性得分',
                'description' => '0：触发规则后加减分；1：触发规则后一次性得分。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Lambda' => 
              array (
                'title' => '普通算子逻辑',
                'description' => '普通算子逻辑',
                'type' => 'string',
                'example' => 'a',
              ),
              'CheckType' => 
              array (
                'title' => '质检维度',
                'description' => '质检维度',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Triggers' => 
              array (
                'title' => '关注的算子',
                'description' => '关注的算子',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '算子',
                  'type' => 'string',
                  'example' => 'a',
                ),
              ),
              'BranchJudge' => 
              array (
                'title' => '是否开启分支判断',
                'description' => '是否开启分支判断',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'CheckMoreSize' => 
              array (
                'title' => '最多检测N句',
                'description' => '最多检测N句',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
            ),
          ),
          'Conditions' => 
          array (
            'title' => '算子信息',
            'description' => '算子信息',
            'type' => 'array',
            'items' => 
            array (
              'description' => '算子',
              '$ref' => '#/components/schemas/ConditionBasicInfo',
            ),
          ),
          'NextNodes' => 
          array (
            'title' => '子节点',
            'description' => '子节点',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Index' => 
                array (
                  'title' => '流程分支优先级。越小优先级越高',
                  'description' => '流程分支优先级。越小优先级越高',
                  'type' => 'integer',
                  'format' => 'int32',
                  'example' => '1',
                ),
                'Name' => 
                array (
                  'title' => '条件分支名',
                  'description' => '条件分支名',
                  'type' => 'string',
                  'example' => 'a',
                ),
                'NextNodeId' => 
                array (
                  'title' => '后续节点ID',
                  'description' => '后续节点ID',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '31533',
                ),
                'Lambda' => 
                array (
                  'title' => '通往下一跳的Lambda表达式',
                  'description' => '通往下一跳的Lambda表达式',
                  'type' => 'string',
                  'example' => 'a',
                ),
                'CheckType' => 
                array (
                  'title' => '质检维度',
                  'description' => '质检维度',
                  'type' => 'integer',
                  'format' => 'int32',
                  'example' => '1',
                ),
                'Triggers' => 
                array (
                  'title' => '关注的算子',
                  'description' => '关注的算子',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '算子',
                    'type' => 'string',
                    'example' => 'a',
                  ),
                ),
              ),
            ),
          ),
          'UseConditions' => 
          array (
            'title' => '是否使用 算子匹配还是使用老板的匹配',
            'description' => '是否使用算子匹配还是使用老板的匹配。',
            'type' => 'boolean',
            'example' => 'true',
          ),
        ),
      ),
      'JudgeNodeMetaDesc' => 
      array (
        'description' => '随录参数配置',
        'type' => 'object',
        'properties' => 
        array (
          'Field' => 
          array (
            'title' => '系统字段',
            'description' => '系统字段',
            'type' => 'string',
            'example' => 'remark1',
          ),
          'FieldType' => 
          array (
            'title' => '字段数据来源类型：1：系统预定义字段 2：传参质检字段',
            'description' => '字段数据来源类型：1：系统预定义字段 2：传参质检字段',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'DataType' => 
          array (
            'title' => '数据类型',
            'description' => '数据类型',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'Symbol' => 
          array (
            'title' => '逻辑表达式',
            'description' => '逻辑表达式',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'Value' => 
          array (
            'title' => '预设值的值',
            'description' => '预设值的值',
            'type' => 'string',
            'example' => 'xxx',
          ),
          'ActualValue' => 
          array (
            'title' => '实际值',
            'description' => '实际值',
            'type' => 'string',
            'example' => 'xx',
          ),
        ),
      ),
      'NextNodeSituations' => 
      array (
        'description' => '返回结果',
        'type' => 'object',
        'properties' => 
        array (
          'ConditionGroup' => 
          array (
            'title' => '判断条件',
            'description' => '判断条件',
            'type' => 'array',
            'items' => 
            array (
              'description' => '条件',
              'type' => 'object',
              'properties' => 
              array (
                'Conditions' => 
                array (
                  'title' => '匹配条件集合',
                  'description' => '匹配条件集合',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '条件',
                    '$ref' => '#/components/schemas/JudgeNodeMetaDesc',
                  ),
                ),
                'Type' => 
                array (
                  'title' => '条件之间的匹配关系',
                  'description' => '条件之间的匹配关系',
                  'type' => 'string',
                  'example' => '1',
                ),
              ),
            ),
          ),
          'Type' => 
          array (
            'title' => '条件之间的匹配关系 目前都是or的关系',
            'description' => '条件之间的匹配关系：目前都是or的关系',
            'type' => 'string',
            'example' => '1',
          ),
        ),
      ),
      'OperatorBasicInfo' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'Oid' => 
          array (
            'title' => '可能是主键id，也可能是前端生成的id',
            'description' => '可能是主键ID，也可能是前端生成的ID。',
            'type' => 'string',
            'example' => 'a',
          ),
          'Id' => 
          array (
            'title' => '主键id',
            'description' => '主键ID。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'Type' => 
          array (
            'title' => '算子类别',
            'description' => '算子类别',
            'type' => 'string',
            'example' => 'HIT_ANY_KEYWORDS',
          ),
          'Param' => 
          array (
            'title' => '算子参数',
            'description' => '算子参数',
            'type' => 'object',
            'properties' => 
            array (
              'CustomerParam' => 
              array (
                'title' => '随录参数算子参数',
                'description' => '随录参数算子参数',
                '$ref' => '#/components/schemas/JudgeNodeMetaDesc',
              ),
              'Keywords' => 
              array (
                'title' => '关键词',
                'description' => '关键词',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '关键词',
                  'type' => 'string',
                  'example' => '你好',
                ),
              ),
              'Regex' => 
              array (
                'title' => '正则表达式',
                'description' => '正则表达式',
                'type' => 'string',
                'example' => '质疑.*',
              ),
              'NotRegex' => 
              array (
                'title' => '排除的正则表达式',
                'description' => '排除的正则表达式',
                'type' => 'string',
                'example' => '优秀.*',
              ),
              'Phrase' => 
              array (
                'title' => '语句',
                'description' => '语句',
                'type' => 'string',
                'example' => '你好，请问',
              ),
              'References' => 
              array (
                'title' => 'references引用',
                'description' => 'references引用',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'references引用',
                  'type' => 'string',
                  'example' => '你好.{0,10}',
                ),
              ),
              'Interval' => 
              array (
                'title' => 'interval代表区间范围开始',
                'description' => 'interval代表区间范围开始',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'IntervalEnd' => 
              array (
                'title' => 'intervalEnd 代表区间范围结束',
                'description' => '代表区间范围结束',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'Threshold' => 
              array (
                'title' => '阈值',
                'description' => '阈值',
                'type' => 'number',
                'format' => 'float',
                'example' => '90',
              ),
              'In_sentence' => 
              array (
                'title' => '生效句子， true单个句子，false多个句子',
                'description' => '生效句子，true单个句子，false多个句子',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Target' => 
              array (
                'title' => 'target',
                'description' => '目标句子是当前句子的前多少句，为0时间间隔等于本句的结束时间-本句的开始时间',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'From_end' => 
              array (
                'title' => 'from_end',
                'description' => '用于时间间隔算子，判断时间间隔，指定时间间隔的计算方式是否用本句的结束时间减目标句子的结束时间',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Different_role' => 
              array (
                'title' => 'different_role',
                'description' => '用以时间间隔算子，判断时间间隔，为true则目标句子如果与本句是同一个角色说的话就不参与计算',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Target_role' => 
              array (
                'title' => 'target_role',
                'description' => '用于判断重复算子，如果本句匹配上该正则表达式，那么匹配上的部份会在本句之前target_role指定的句子中查找',
                'type' => 'string',
                'example' => '客服',
              ),
              'RoleId' => 
              array (
                'title' => '算子中使用角色，目前用于上下文重复算子，与target_role一起使用。',
                'description' => '算子中使用角色，目前用于上下文重复算子，与Target_role一起使用。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Velocity' => 
              array (
                'title' => '速度',
                'description' => '用于语速判断算子。单位时间内的语速值，判断本句的语速是否超过指定值。时间单位取决于传入的start、end的时间单位',
                'type' => 'number',
                'format' => 'double',
                'example' => '111',
              ),
              'VelocityInMint' => 
              array (
                'title' => 'velocityInMint',
                'description' => '用于语速判断算子。每分钟的语速值，用以判断本句的语速是否超过指定值',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'KeywordExtension' => 
              array (
                'title' => '关键字扩展',
                'description' => '关键字扩展',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Synonyms' => 
              array (
                'title' => '同义词',
                'description' => '同义词',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'description' => '同义词',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '同义词',
                    'type' => 'string',
                    'example' => '售卖',
                  ),
                ),
              ),
              'Case_sensitive' => 
              array (
                'title' => '区分大小写',
                'description' => '区分大小写',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Near_dialogue' => 
              array (
                'title' => 'true表示取不同角色相邻的两句话，false表示取不同角色的第一句话比较响应时间（默认）',
                'description' => 'true表示取不同角色相邻的两句话，false表示取不同角色的第一句话比较响应时间（默认）',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'MinWordSize' => 
              array (
                'title' => '句子中最少字数，小于此字数的句子不检查',
                'description' => '句子中最少字数，小于此字数的句子不检查',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Hit_time' => 
              array (
                'title' => '上下文重复算子：重复几次',
                'description' => '上下文重复算子：重复几次',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'Excludes' => 
              array (
                'title' => '上下文重复算子：排除掉某些对话',
                'description' => '上下文重复算子：排除掉某些对话',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '上下文重复算子：排除掉某些对话',
                  'type' => 'string',
                  'example' => '负向',
                ),
              ),
              'From' => 
              array (
                'title' => '上下文重复算子：检测当前句的前from句是否有重复；0表示前面的所有句',
                'description' => '上下文重复算子：检测当前句的前from句是否有重复；0表示前面的所有句',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'CheckFirstSentence' => 
              array (
                'title' => '静音检测：要不要检测第一句话',
                'description' => '静音检测：要不要检测第一句话',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Average' => 
              array (
                'title' => '语速检测，是否计算整个对话平均语速，默认false',
                'description' => '语速检测，是否计算整个对话平均语速，默认false',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'BeginType' => 
              array (
                'title' => '时长算子，时长计算开始类型，录音开始，还是某句对话开始',
                'description' => '时长算子，时长计算开始类型，录音开始，还是某句对话开始',
                'type' => 'string',
                'example' => '1',
              ),
              'EndType' => 
              array (
                'title' => '时长算子，时长计算结束类型，录音结束，还是某句对话结束',
                'description' => '时长算子，时长计算结束类型，录音结束，还是某句对话结束',
                'type' => 'string',
                'example' => '2',
              ),
              'CompareOperator' => 
              array (
                'title' => '大于，还是小于，gt/lt',
                'description' => '大于，还是小于，gt/lt',
                'type' => 'string',
                'example' => 'gt',
              ),
              'Pkey' => 
              array (
                'title' => '涉外属性需要的变量',
                'description' => '涉外属性需要的变量',
                'type' => 'string',
                'example' => 'xx',
              ),
              'Poutput_type' => 
              array (
                'title' => 'poutput类型',
                'description' => 'poutput类型',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'SimilarlySentences' => 
              array (
                'title' => '相识问',
                'description' => '相识问',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '相识问',
                  'type' => 'string',
                  'example' => '我要购买',
                ),
              ),
              'LgfSentences' => 
              array (
                'title' => 'lgf句子',
                'description' => 'lgf句子',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'lgf句子',
                  'type' => 'string',
                  'example' => '你好{1}',
                ),
              ),
              'Score' => 
              array (
                'title' => '分数',
                'description' => '分数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '70',
              ),
              'ContextChatMatch' => 
              array (
                'title' => '是否单句话匹配；',
                'description' => '是否单句话匹配；',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'KeywordMatchSize' => 
              array (
                'title' => '匹配到的关键字数量',
                'description' => '匹配到的关键字数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'MaxEmotionChangeValue' => 
              array (
                'title' => '能量值变化，默认3, 1~9',
                'description' => '能量值变化，默认3，1~9',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'CheckType' => 
              array (
                'title' => '检测方式，1 相邻句能量波动 2 最大能量跨度 默认1',
                'description' => '检测方式：默认1
- 1：相邻句能量波动
- 2：最大能量跨度',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'KnowledgeTargetId' => 
              array (
                'title' => '知识类目或者知识Id',
                'description' => '知识类目或者知识ID。',
                'type' => 'string',
                'example' => '1',
              ),
              'CategoryPathCode' => 
              array (
                'title' => '知识类目路径',
                'description' => '知识类目路径',
                'type' => 'string',
                'example' => 'xx',
              ),
              'KnowledgeTargetType' => 
              array (
                'title' => '0-类目 1-知识',
                'description' => '0-类目，1-知识。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'KnowledgeTargetName' => 
              array (
                'title' => '知识类目名字或知识名字',
                'description' => '知识类目名字或知识名字',
                'type' => 'string',
                'example' => '订单',
              ),
              'QuestionThreshold' => 
              array (
                'title' => '问题命中阈值',
                'description' => '问题命中阈值',
                'type' => 'string',
                'example' => '90',
              ),
              'AnswerThreshold' => 
              array (
                'title' => '答案命中阈值',
                'description' => '答案命中阈值',
                'type' => 'string',
                'example' => '90',
              ),
              'KnowledgeSentenceNum' => 
              array (
                'title' => '命中问题后几句内检测答案',
                'description' => '命中问题后几句内检测答案',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'KnowledgeInfo' => 
              array (
                'title' => '知识信息',
                'description' => '知识信息',
                'type' => 'string',
                'example' => '下单',
              ),
              'BotId' => 
              array (
                'title' => '机器人id',
                'description' => '机器人ID。',
                'type' => 'string',
                'example' => 'chatbot-cn-xxx',
              ),
              'UseEasAlgorithm' => 
              array (
                'title' => '使用eas算法',
                'description' => '使用eas算法',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Pvalues' => 
              array (
                'title' => '模型检测类型',
                'description' => '模型检测类型',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                ),
              ),
              'Similarity_threshold' => 
              array (
                'title' => '相似度阈值',
                'description' => '相似度阈值',
                'type' => 'number',
                'format' => 'double',
                'example' => '90',
              ),
              'AntModelInfo' => 
              array (
                'title' => '蚂蚁模型信息',
                'description' => '蚂蚁模型信息',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'description' => '蚂蚁模型信息',
                  'type' => 'string',
                  'example' => 'xxx',
                ),
              ),
              'DelayTime' => 
              array (
                'title' => '抢话算子 延时时长',
                'description' => '抢话算子：延时时长',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
            ),
          ),
          'Name' => 
          array (
            'title' => '算子名',
            'description' => '算子名',
            'type' => 'string',
            'example' => 'a',
          ),
          'UserGroup' => 
          array (
            'title' => '用户组',
            'description' => '用户组',
            'type' => 'string',
            'example' => 'xxx',
          ),
          'QualityCheckType' => 
          array (
            'title' => '质检类型：0 离线质检，1 实时质检',
            'description' => '质检类型：
- 0：离线质检
- 1：实时质检',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '0',
          ),
        ),
      ),
      'RuleCountInfo' => 
      array (
        'description' => '规则详情',
        'type' => 'object',
        'properties' => 
        array (
          'Rid' => 
          array (
            'title' => '规则ID',
            'description' => '规则ID',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '123',
          ),
          'Name' => 
          array (
            'title' => '规则名称',
            'description' => '规则名称',
            'type' => 'string',
            'example' => '0801转封装测试',
          ),
          'Type' => 
          array (
            'title' => '规则类型',
            'description' => '规则类型',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'Status' => 
          array (
            'title' => '状态：待生效 / 生效中 / 已失效:  0 / 1 / 2',
            'description' => '状态：
- 待生效：0
- 生效中：1
- 已失效：2',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'CheckNumber' => 
          array (
            'title' => '检测会话数',
            'description' => '检测会话数',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'HitNumber' => 
          array (
            'title' => '命中会话量',
            'description' => '命中会话量',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'HitRate' => 
          array (
            'title' => '命中率',
            'description' => '命中率',
            'type' => 'number',
            'format' => 'float',
            'example' => '1',
          ),
          'ReviewAccuracyRate' => 
          array (
            'title' => '复核准确率',
            'description' => '复核准确率',
            'type' => 'number',
            'format' => 'float',
            'example' => '1',
          ),
          'ReviewRate' => 
          array (
            'title' => '复核率',
            'description' => '复核率',
            'type' => 'number',
            'format' => 'float',
            'example' => '1',
          ),
          'PreReviewNumber' => 
          array (
            'title' => '待复核数',
            'description' => '待复核数',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'ReviewNumber' => 
          array (
            'title' => '已复核数',
            'description' => '已复核数',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'UnReviewNumber' => 
          array (
            'title' => '未复核数量',
            'description' => '未复核数量',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'ProblemNumber' => 
          array (
            'title' => '发现问题数',
            'description' => '发现问题数',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'StartTime' => 
          array (
            'title' => '开始时间',
            'description' => '开始时间',
            'type' => 'string',
            'example' => '1662685868850',
          ),
          'EndTime' => 
          array (
            'title' => '结束时间',
            'description' => '结束时间',
            'type' => 'string',
            'example' => '1650092585176',
          ),
          'CreateTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间',
            'type' => 'string',
            'example' => '1615133575000',
          ),
          'CreateEmpid' => 
          array (
            'title' => '创建人工号',
            'description' => '创建人工号',
            'type' => 'string',
            'example' => '1',
          ),
          'CreateEmpName' => 
          array (
            'title' => '创建人姓名',
            'description' => '创建人姓名',
            'type' => 'string',
            'example' => '张三',
          ),
          'LastUpdateEmpid' => 
          array (
            'title' => '最后更新人工号',
            'description' => '最后更新人工号',
            'type' => 'string',
            'example' => '1',
          ),
          'LastUpdateEmpName' => 
          array (
            'title' => '最后更新人姓名',
            'description' => '最后更新人姓名',
            'type' => 'string',
            'example' => '张三',
          ),
          'LastUpdateTime' => 
          array (
            'title' => '最后更新时间',
            'description' => '最后更新时间',
            'type' => 'string',
            'example' => '1648200901000',
          ),
          'BusinessRange' => 
          array (
            'title' => '业务范围',
            'description' => '业务范围',
            'type' => 'array',
            'items' => 
            array (
              'description' => '业务范围',
              'type' => 'integer',
              'format' => 'int32',
              'example' => '1',
            ),
          ),
          'BusinessCategoryBasicInfoList' => 
          array (
            'title' => '业务类别基本信息列表',
            'description' => '业务类别基本信息列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '业务ID',
              '$ref' => '#/components/schemas/BusinessCategoryBasicInfo',
            ),
          ),
          'BusinessCategoryNameList' => 
          array (
            'title' => '业务类别名称列表',
            'description' => '业务类别名称列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '业务类别名称列表',
              'type' => 'string',
            ),
          ),
          'IsDelete' => 
          array (
            'title' => '是否删除',
            'description' => '是否删除',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'TypeName' => 
          array (
            'title' => '类型名称',
            'description' => '类型名称',
            'type' => 'string',
            'example' => '全部类别',
          ),
          'JobName' => 
          array (
            'title' => '定时任务名称',
            'description' => '定时任务名称',
            'type' => 'string',
            'example' => 'job-1-20221012-105943',
          ),
          'Comments' => 
          array (
            'title' => '评论',
            'description' => '评论',
            'type' => 'string',
            'example' => '测试',
          ),
          'RealViolationNumber' => 
          array (
            'title' => '复核后真实违规的数量',
            'description' => '复核后真实违规的数量',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'HitRealViolationRate' => 
          array (
            'title' => '命中违规率',
            'description' => '命中违规率',
            'type' => 'number',
            'format' => 'float',
            'example' => '1',
          ),
          'ReviewStatusName' => 
          array (
            'title' => '审核状态名字',
            'description' => '审核状态名字',
            'type' => 'string',
            'example' => '通过',
          ),
          'Deny' => 
          array (
            'title' => '1拒绝编辑规则，0/null可以编辑规则',
            'description' => '1拒绝编辑规则，0/null可以编辑规则',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'ScoreSubId' => 
          array (
            'title' => '小项id',
            'description' => '小项id',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'AutoReview' => 
          array (
            'title' => '审核选项 1 不自动审核 3 自动审核',
            'description' => '审核选项：
- 1：不自动审核
- 3：自动审核',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'RuleScoreType' => 
          array (
            'title' => '是否计分 1不计分 3计分',
            'description' => '是否计分：
- 1：不计分
- 3：计分',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'UserGroup' => 
          array (
            'title' => '用户组',
            'description' => '用户组',
            'type' => 'string',
            'example' => 'xxxx',
          ),
          'OperationMode' => 
          array (
            'title' => '操作模式',
            'description' => '操作模式',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'IsSelect' => 
          array (
            'title' => '是否选择',
            'description' => '是否选择',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'RuleType' => 
          array (
            'title' => '内置规则Or用户创建规则',
            'description' => '内置规则Or用户创建规则',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'Effective' => 
          array (
            'title' => '是否生效：0否，1是',
            'description' => '是否生效：0否，1是',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'FullCycle' => 
          array (
            'title' => '是否为全生命周期生效，0否，1是',
            'description' => '是否为全生命周期生效，0否，1是',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'EffectiveStartTime' => 
          array (
            'title' => '生效开始时间',
            'description' => '生效开始时间',
            'type' => 'string',
            'example' => '1662685868850',
          ),
          'EffectiveEndTime' => 
          array (
            'title' => '生效结束时间',
            'description' => '生效结束时间',
            'type' => 'string',
            'example' => '1662685868850',
          ),
          'QualityCheckType' => 
          array (
            'title' => '质检类型：0 离线质检，1 实时质检',
            'description' => '质检类型：
- 0：离线质检
- 1：实时质检',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'GraphFlow' => 
          array (
            'title' => '流程画布',
            'description' => '流程画布，格式为Json',
            'type' => 'any',
            'example' => '较复杂，忽略',
          ),
          'RuleScoreSingleType' => 
          array (
            'title' => '-- 8-未设置评分',
            'description' => '评分类型：8：未设置评分',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'TargetType' => 
          array (
            'title' => '规则种类：10-普通规则，11-流程规则',
            'description' => '规则种类：
- 10：普通规则
- 11：流程规则',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '10',
          ),
        ),
      ),
      'RuleInfo' => 
      array (
        'title' => '规则明细',
        'description' => '规则明细',
        'type' => 'object',
        'properties' => 
        array (
          'Status' => 
          array (
            'title' => '规则状态',
            'description' => '规则状态',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'IsDelete' => 
          array (
            'title' => '是否已删除',
            'description' => '是否已删除',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'StartTime' => 
          array (
            'title' => '开始时间',
            'description' => '开始时间',
            'type' => 'string',
            'example' => '1641277321000',
          ),
          'EndTime' => 
          array (
            'title' => '结束时间',
            'description' => '结束时间',
            'type' => 'string',
            'example' => '1641277321000',
          ),
          'BusinessCategoryNameList' => 
          array (
            'title' => '业务名称列表',
            'description' => '业务名称列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '所属业务分类列表',
              'type' => 'string',
              'example' => '全部',
            ),
          ),
          'Weight' => 
          array (
            'title' => '权重',
            'description' => '权重',
            'type' => 'string',
            'example' => '1',
          ),
          'IsOnline' => 
          array (
            'title' => '是否在线',
            'description' => '是否在线',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'CreateEmpid' => 
          array (
            'title' => '创建人工号',
            'description' => '创建人工号',
            'type' => 'string',
            'example' => '1',
          ),
          'CreateEmpName' => 
          array (
            'title' => '创建人姓名',
            'description' => '创建人姓名',
            'type' => 'string',
            'example' => '张三',
          ),
          'CreateTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间',
            'type' => 'string',
            'example' => '1641277321000',
          ),
          'LastUpdateTime' => 
          array (
            'title' => '最后更新时间',
            'description' => '最后更新时间',
            'type' => 'string',
            'example' => '1641277321000',
          ),
          'LastUpdateEmpid' => 
          array (
            'title' => '最后更新人工号',
            'description' => '最后更新人工号',
            'type' => 'string',
            'example' => '1',
          ),
          'LastUpdateEmpName' => 
          array (
            'title' => '最后更新人姓名',
            'description' => '最后更新人姓名',
            'type' => 'string',
            'example' => '张三',
          ),
          'Comments' => 
          array (
            'title' => '备注',
            'description' => '备注',
            'type' => 'string',
            'example' => '违规',
          ),
          'Deny' => 
          array (
            'title' => '1拒绝编辑规则，0/null可以编辑规则',
            'description' => '1拒绝编辑规则，0/null可以编辑规则',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'ScoreSubId' => 
          array (
            'title' => '小项id',
            'description' => '小项id',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'ScoreName' => 
          array (
            'title' => '评分大项名称',
            'description' => '评分大项名称',
            'type' => 'string',
            'example' => '违规',
          ),
          'ScoreSubName' => 
          array (
            'title' => '评分小项',
            'description' => '评分小项',
            'type' => 'string',
            'example' => '1',
          ),
          'ScoreNum' => 
          array (
            'title' => '分数num',
            'description' => '分数num',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'ScoreType' => 
          array (
            'title' => '加分或者减分',
            'description' => '加分或者减分',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'ScoreDeleted' => 
          array (
            'title' => '评分项是否删除，用于删除时显示置灰',
            'description' => '评分项是否删除，用于删除时显示置灰',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'OperationMode' => 
          array (
            'title' => '操作模式',
            'description' => '操作模式',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'Meet' => 
          array (
            'title' => '是否满足',
            'description' => '是否满足',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'Dialogues' => 
          array (
            'title' => '测试文案',
            'description' => '测试文案',
            'type' => 'array',
            'items' => 
            array (
              'description' => '测试对话内容',
              '$ref' => '#/components/schemas/RuleTestDialogue',
            ),
          ),
          'Effective' => 
          array (
            'title' => '是否生效：0否，1是',
            'description' => '是否生效：0否，1是',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'FullCycle' => 
          array (
            'title' => '是否为全生命周期生效，0否，1是',
            'description' => '是否为全生命周期生效，0否，1是',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'EffectiveStartTime' => 
          array (
            'title' => '生效开始时间',
            'description' => '生效开始时间',
            'type' => 'string',
            'example' => 'OperationMode',
          ),
          'EffectiveEndTime' => 
          array (
            'title' => '生效结束时间',
            'description' => '生效结束时间',
            'type' => 'string',
            'example' => 'OperationMode',
          ),
          'QualityCheckType' => 
          array (
            'title' => '质检类型：0 离线质检，1 实时质检 //4.0逻辑兼容使用',
            'description' => '质检类型：0 离线质检，1 实时质检 //4.0逻辑兼容使用',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'Level' => 
          array (
            'title' => '规则级别：0 重度违规 1 中度违规 2 轻度违规',
            'description' => '规则级别：0 重度违规 1 中度违规 2 轻度违规',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'GraphFlow' => 
          array (
            'title' => '图流程画布',
            'description' => '图流程画布',
            'type' => 'any',
            'example' => '{}',
          ),
          'TaskFlowType' => 
          array (
            'title' => '流程图类型-已废弃-默认-1',
            'description' => '流程图类型-已废弃-默认-1',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'CheckType' => 
          array (
            'title' => '0-服务规范性检测 1-服务态度检测 2-服务专业性检测 3-客户态度检测  4-服务流程正确性检测',
            'description' => '0-服务规范性检测 1-服务态度检测 2-服务专业性检测 3-客户态度检测  4-服务流程正确性检测',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '3',
          ),
          'SchemeCheckType' => 
          array (
            'title' => '质检维度对象',
            'description' => '质检维度对象',
            '$ref' => '#/components/schemas/SchemeCheckType',
          ),
          'TargetType' => 
          array (
            'title' => '规则类别：10：质检方案-通用规则；11：质检方案-流程规则 //4.0协议专用',
            'description' => '规则类别：10：质检方案-通用规则；11：质检方案-流程规则 //4.0协议专用',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '10',
          ),
          'ConfigType' => 
          array (
            'title' => '配置类型：1：简单条件配置，2：高级配置，默认1 //4.0协议专用',
            'description' => '配置类型：1：简单条件配置，2：高级配置，默认1 //4.0协议专用',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'ScoreNumType' => 
          array (
            'title' => '0-触发规则后加减分 1-触发规则后一次性得分 //4.0协议专用',
            'description' => '0-触发规则后加减分 1-触发规则后一次性得分 //4.0协议专用',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'ScoreRuleHitType' => 
          array (
            'title' => '0-命中节点时计分',
            'description' => '0-命中节点时计分',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '0',
          ),
          'SchemeId' => 
          array (
            'title' => '所属质检方案Id',
            'description' => '所属质检方案Id',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'SchemeRuleMappingId' => 
          array (
            'title' => '质检方案与规则映射ID',
            'description' => '质检方案与规则映射ID',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'SchemeName' => 
          array (
            'title' => '质检方案名称',
            'description' => '质检方案名称',
            'type' => 'string',
            'example' => '通用方案',
          ),
          'ModifyType' => 
          array (
            'title' => '在质检方案中是否已修改',
            'description' => '在质检方案中是否已修改',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'SortIndex' => 
          array (
            'title' => '质检维度内的排序',
            'description' => '质检维度内的排序',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'RuleType' => 
          array (
            'title' => '0：默认；1：用户创建 //4.0逻辑兼容使用',
            'description' => '0：默认；1：用户创建 //4.0逻辑兼容使用',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'Rid' => 
          array (
            'title' => '规则ID',
            'description' => '规则ID',
            'type' => 'string',
            'example' => '1',
          ),
          'Name' => 
          array (
            'title' => '规则名称',
            'description' => '规则名称',
            'type' => 'string',
            'example' => '开头语规则',
          ),
          'TaskFlowId' => 
          array (
            'title' => '流程画布ID',
            'description' => '流程画布ID',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '111111111',
          ),
          'Lambda' => 
          array (
            'title' => '形如a&&b的条件表达式',
            'description' => '形如a&&b的条件表达式',
            'type' => 'string',
            'example' => 'a&&b',
          ),
          'Triggers' => 
          array (
            'title' => '关注的条件列表',
            'description' => '关注的条件列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '算子列表',
              'type' => 'string',
              'example' => 'a',
            ),
          ),
          'ExternalProperty' => 
          array (
            'title' => '外部属性',
            'description' => '外部属性',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'Type' => 
          array (
            'title' => 'RuleCategory，2舆情监控，3业务类  //4.0 逻辑兼容使用',
            'description' => 'RuleCategory，2舆情监控，3业务类  //4.0 逻辑兼容使用',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '2',
          ),
          'RuleCategoryName' => 
          array (
            'title' => '规则类别名称',
            'description' => '规则类别名称',
            'type' => 'string',
            'example' => '正向规则',
          ),
          'AutoReview' => 
          array (
            'title' => '审核选项 1 不自动审核 3 自动审核 //4.0 协议兼容使用',
            'description' => '审核选项 1 不自动审核 3 自动审核 //4.0 协议兼容使用',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'RuleScoreType' => 
          array (
            'title' => '是否计分 1不计分 3计分 //4.0 协议兼容使用',
            'description' => '是否计分 1不计分 3计分 //4.0 协议兼容使用',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '3',
          ),
          'ScoreId' => 
          array (
            'title' => '评分大项ID',
            'description' => '评分大项ID',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
        ),
      ),
      'RuleTestDialogue' => 
      array (
        'description' => '规则测试对话',
        'type' => 'object',
        'properties' => 
        array (
          'Id' => 
          array (
            'title' => '对话ID',
            'description' => '对话ID',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'Content' => 
          array (
            'title' => '对话内容',
            'description' => '对话内容',
            'type' => 'array',
            'items' => 
            array (
              'description' => '对话',
              'type' => 'object',
              'properties' => 
              array (
                'HourMinSec' => 
                array (
                  'title' => '时分秒',
                  'description' => '时分秒',
                  'type' => 'string',
                  'example' => '00:00',
                ),
                'Role' => 
                array (
                  'title' => '角色',
                  'description' => '角色',
                  'type' => 'string',
                  'example' => '客户',
                ),
                'Identity' => 
                array (
                  'title' => '身份标识',
                  'description' => '身份标识',
                  'type' => 'string',
                  'example' => '客户',
                ),
                'EmotionValue' => 
                array (
                  'title' => '情绪能量值',
                  'description' => '情绪能量值',
                  'type' => 'integer',
                  'format' => 'int32',
                  'example' => '1',
                ),
                'SpeechRate' => 
                array (
                  'title' => '语速',
                  'description' => '语速',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '100',
                ),
                'Words' => 
                array (
                  'title' => '对话',
                  'description' => '对话',
                  'type' => 'string',
                  'example' => '方便',
                ),
                'End' => 
                array (
                  'title' => '结束时间inLong',
                  'description' => '结束时间inLong',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '1360',
                ),
                'SilenceDuration' => 
                array (
                  'title' => '静音时长',
                  'description' => '静音时长',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '100',
                ),
                'BeginTime' => 
                array (
                  'title' => '开始时间InLong',
                  'description' => '开始时间InLong',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '350',
                ),
                'Begin' => 
                array (
                  'title' => '开始时间InLong',
                  'description' => '开始时间InLong',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '360',
                ),
              ),
            ),
          ),
          'Name' => 
          array (
            'title' => '对话名称',
            'description' => '对话名称',
            'type' => 'string',
            'example' => 'xx',
          ),
          'UserGroup' => 
          array (
            'title' => '用户组',
            'description' => '用户组',
            'type' => 'string',
            'example' => 'xx',
          ),
        ),
      ),
      'RulesInfo' => 
      array (
        'description' => '规则集合信息',
        'type' => 'object',
        'properties' => 
        array (
          'Conditions' => 
          array (
            'title' => '规则条件信息，多个规则的条件都放在一个list中',
            'description' => '规则条件信息，多个规则的条件都放在一个list中',
            'type' => 'array',
            'items' => 
            array (
              'description' => '规则条件信息',
              '$ref' => '#/components/schemas/ConditionBasicInfo',
            ),
          ),
          'Rules' => 
          array (
            'title' => '规则基本信息，可能有多个规则',
            'description' => '规则基本信息，可能有多个规则',
            'type' => 'array',
            'items' => 
            array (
              'description' => '规则基本信息',
              '$ref' => '#/components/schemas/RuleInfo',
            ),
          ),
          'Dialogues' => 
          array (
            'title' => '测试文案',
            'description' => '测试文案',
            'type' => 'array',
            'items' => 
            array (
              'description' => '测试文案信息',
              '$ref' => '#/components/schemas/RuleTestDialogue',
            ),
          ),
          'Count' => 
          array (
            'title' => '总条数',
            'description' => '总条数',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '100',
          ),
          'PageSize' => 
          array (
            'title' => '页数',
            'description' => '页数',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '10',
          ),
          'PageNumber' => 
          array (
            'title' => '当前页',
            'description' => '当前页',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
        ),
      ),
      'SchemeCheckType' => 
      array (
        'description' => '方案维度',
        'type' => 'object',
        'properties' => 
        array (
          'CheckType' => 
          array (
            'title' => '检测项类型：默认如下',
            'description' => '质检维度ID',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'CheckName' => 
          array (
            'title' => '检测项名称',
            'description' => '检测项名称',
            'type' => 'string',
            'example' => '流程规则',
          ),
          'SourceScore' => 
          array (
            'title' => '原始得分',
            'description' => '原始得分',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'Score' => 
          array (
            'title' => '最终得分',
            'description' => '最终得分',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '50',
          ),
          'Enable' => 
          array (
            'title' => '是否启用',
            'description' => '是否启用',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'SchemeId' => 
          array (
            'title' => '质检方案ID',
            'description' => '质检方案ID',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'SchemeScoreInfoList' => 
          array (
            'title' => '检测项下评分项列表，见SchemeScoreInfo',
            'description' => '检测项下评分项列表，见SchemeScoreInfo',
            'type' => 'array',
            'items' => 
            array (
              'description' => '方案评分',
              'type' => 'object',
              'properties' => 
              array (
                'Rid' => 
                array (
                  'title' => '规则ID',
                  'description' => '规则ID',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '1',
                ),
                'Name' => 
                array (
                  'title' => '规则名称',
                  'description' => '规则名称',
                  'type' => 'string',
                  'example' => 'xx',
                ),
                'TaskFlowId' => 
                array (
                  'title' => '流程ID',
                  'description' => '流程ID',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '1',
                ),
                'TaskFlowName' => 
                array (
                  'title' => '流程名称',
                  'description' => '流程名称',
                  'type' => 'string',
                  'example' => 'xx',
                ),
                'ScoreType' => 
                array (
                  'title' => '1加分 3减分 默认1',
                  'description' => '1加分 3减分 默认1',
                  'type' => 'integer',
                  'format' => 'int32',
                  'example' => '1',
                ),
                'ScoreNumType' => 
                array (
                  'title' => '0-触发规则后加减分',
                  'description' => '0-触发规则后加减分',
                  'type' => 'integer',
                  'format' => 'int32',
                  'example' => '0',
                ),
                'ScoreNum' => 
                array (
                  'title' => '客服评分：默认0，[0, 100]',
                  'description' => '客服评分：默认0，[0, 100]',
                  'type' => 'integer',
                  'format' => 'int32',
                  'example' => '1',
                ),
                'ScoreRuleHitType' => 
                array (
                  'title' => '0-命中节点时计分',
                  'description' => '0-命中节点时计分',
                  'type' => 'integer',
                  'format' => 'int32',
                  'example' => '0',
                ),
              ),
            ),
          ),
          'TaskFlowScoreInfoList' => 
          array (
            'title' => '检测项下评分项列表，见TaskFlowScoreInfo',
            'description' => '检测项下评分项列表，见TaskFlowScoreInfo',
            'type' => 'array',
            'items' => 
            array (
              'description' => '流程评分',
              'type' => 'object',
              'properties' => 
              array (
                'TaskFlowId' => 
                array (
                  'title' => '流程ID',
                  'description' => '流程ID',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '1',
                ),
                'TaskFlowName' => 
                array (
                  'title' => '流程名称',
                  'description' => '流程名称',
                  'type' => 'string',
                  'example' => 'xx',
                ),
                'TaskFlowType' => 
                array (
                  'title' => '\'流程版本：0：树，1：图\'',
                  'description' => '\'流程版本：0：树，1：图\'',
                  'type' => 'integer',
                  'format' => 'int32',
                  'example' => '1',
                ),
                'SchemeScoreInfoList' => 
                array (
                  'title' => '评分项列表',
                  'description' => '评分项列表',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '方案评分',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Rid' => 
                      array (
                        'title' => '规则ID',
                        'description' => '规则ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1',
                      ),
                      'Name' => 
                      array (
                        'title' => '规则名称',
                        'description' => '规则名称',
                        'type' => 'string',
                        'example' => 'xx',
                      ),
                      'TaskFlowId' => 
                      array (
                        'title' => '流程ID',
                        'description' => '流程ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1',
                      ),
                      'TaskFlowName' => 
                      array (
                        'title' => '流程名称',
                        'description' => '流程名称',
                        'type' => 'string',
                        'example' => 'xx',
                      ),
                      'ScoreType' => 
                      array (
                        'title' => '1加分 3减分 默认1',
                        'description' => '1加分 3减分 默认1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'ScoreNumType' => 
                      array (
                        'title' => '0-触发规则后加减分',
                        'description' => '0-触发规则后加减分',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'ScoreNum' => 
                      array (
                        'title' => '客服评分：默认0，[0, 100]',
                        'description' => '客服评分：默认0，[0, 100]',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '11',
                      ),
                      'ScoreRuleHitType' => 
                      array (
                        'title' => '0-命中节点时计分',
                        'description' => '0-命中节点时计分',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'TaskGraphFlow' => 
      array (
        'description' => '流程',
        'type' => 'object',
        'properties' => 
        array (
          'Id' => 
          array (
            'title' => '流程画布id',
            'description' => '流程画布id',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'Rid' => 
          array (
            'title' => '规则ID',
            'description' => '规则ID',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'RuleName' => 
          array (
            'title' => '规则名称',
            'description' => '规则名称',
            'type' => 'string',
            'example' => '违规',
          ),
          'SkipWhenFirstSessionNodeMiss' => 
          array (
            'title' => '首个对话节点未命中则跳过',
            'description' => '首个对话节点未命中则跳过',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'FlowRuleScoreType' => 
          array (
            'title' => '流程计分逻辑设置',
            'description' => '流程计分逻辑设置',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'ShowProperties' => 
          array (
            'title' => '前端展示使用',
            'description' => '前端展示使用',
            'type' => 'string',
            'example' => '{}',
          ),
          'Nodes' => 
          array (
            'title' => '流程所有节点',
            'description' => '流程所有节点',
            'type' => 'array',
            'items' => 
            array (
              'description' => '节点信息。',
              '$ref' => '#/components/schemas/GraphFlowNode',
            ),
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'UploadAudioData' => 
    array (
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{“callList”:“xxxxx”}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id，用于区分多业务空间场景下选择指定业务空间，默认为默认业务空间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123456',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，200表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Data' => 
              array (
                'description' => '任务ID，在获取任务结果时使用。',
                'type' => 'string',
                'example' => '76DB5D8C-5BD9-42A7-B527-5AF3A5***',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，请求唯一标识。',
                'type' => 'string',
                'example' => '76DB5D8C-5BD9-42A7-B527-5AF3A5F8***',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": \\"76DB5D8C-5BD9-42A7-B527-5AF3A5***\\",\\n  \\"RequestId\\": \\"76DB5D8C-5BD9-42A7-B527-5AF3A5F8***\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '上传音频质检',
      'summary' => '上传离线语音质检数据（录音会话文件）：适用于热线坐席场景。场景1：天然集成阿里云呼叫中心（CCC），无需开发，可以一键开启推送通话数据到SCA；场景2：与自有呼叫中心系统对接，呼叫中心每产生一条录音，就将录音推送至SCA进行分析。',
      'description' => '### 流程说明
API调用上传音频质检=>录音文件转文本=>根据指定的分轨方式对文本进行角色分离（区分客服、客户）=>使用质检规则进行分析=>质检完成。

### 任务执行效率说明
任务执行的快慢，取决于录音文件转文本的快慢，理想情况下，一个长度为5分钟的录音文件，可以在2分钟内转写完成，但是遇到文件转写服务排队任务较多时，会有一个排队等待的时间，一般会在6小时内转写完成，一次性上传大规模数据（半小时内上传超过500小时时长的录音）的除外。转写完成后，质检分析的速度是毫秒级的。

###  录音文件URL要求
- 持单轨/双轨的wav格式、mp3格式的录音文件，文件大小需要控制在512M以下。
- URL必须是基于HTTP可访问的URL地址，不支持提交本地文件；录音文件访问权限需要为公开。
- URL中只能使用域名，不能使用IP地址，URL中不可包含空格，请尽量避免使用中文。
- 系统在录音转文本后，会将下载的录音文件删除，不会保存录音副本
- 若您的录音URL是存在访问有效期的，例如录音存储在阿里云OSS，通过OSS生成录音URL时指定了有效期，建议有效期至少为12小时，如果条件允许，最好设置为24小时。这样做是因为文件转写需要一定的时间，并且偶尔会产生排队等待，若排队时间较长，开始转写时才会下载录音，避免下载录音时录音URL已失效的情况发生。
- 质检分析完成后，在控制台复核文件时，播放录音使用的仍然是您提供的URL，所以需要保证URL长期可用，否则将无法播放录音。

### 角色分离说明
录音转文本后，系统会自动将文本分为两个对话角色，但是系统无法判断哪个角色是客服、哪个是客户。所以需要您来根据某些规则进行角色分离。角色分离的准确性非常重要，因为我们进行质检分析时所用的规则，很多时候都有检测角色的限制（即一个规则只检测客服或者客户），如果角色分离错误，那么将对质检结果的准确性产生极大影响。

录音文件通常分为单轨（单声道）和双轨（双声道/立体声）两种：
- 单轨录音：客服、客户两个人的声音存储在一个轨上，在录音文件转文本后，系统会通过内置算法区分为两个角色的对话，通过设置一组客服可能说的关键词列表，通过对转写文本从上到下逐句分析，当一句话命中某一个关键词时，则判定该句的角色为客服，则另一个角色就是客户，具体使用详见请求入参中的recognizeRoleDataSetId和serviceChannelKeywords。由于对话内容的不可控性（比如两个角色对话存在交叉，两个人同时讲话），所以单轨录音的角色分离无法保证100%准确，强烈建议在保存录音文件时保存为双轨录音。
- 双轨录音：客服、客户两个人的声音分别存储在两个轨上，即使双方的对话存在交叉，录音转文本仍可以准确的区分。通过请求参数中的serviceChannel、clientChannel来指定客服、客户即可。

### 获取质检分析结果
由于录音文件识别是非实时的，所以需要异步获取质检分析结果，有以下3种方式获取结果：

- 消息通知：详情请查看[消息队列](~~213237~~)，收到消息后再通过GetResult接口获取详细结果。（推荐）
- 回调：通过在请求参数中指定callbackUrl，在任务完成后由系统主动发起回调；接到回调后再通过GetResult接口获取详细结果。
- 轮询：接口会返回任务ID（taskId），可以用taskId轮询`getResult`接口异步获取结果，判断返回参数中的`status`是否完成，轮询间隔建议不要太短，正常情况下会在几分钟内分析完成，建议轮询间隔在30s以上。（不推荐）。',
      'requestParamsDescription' => '## 请求参数与JSON字符串信息

| 属性                   | 值类型  | 是否必须 | 描述                                                         |
| :--------------------- | :------ | :------- | :----------------------------------------------------------- |
| isSchemeData           | Integer | 否       | 是否将数据上传至新版智能对话分析，取值：0：否；1：是，默认值为0。 |
| callList               | List    | 是       | 语音文件集合，可以一次性上传多个录音文件，详见下方的**jsonStr.callList属性说明**。 |
| autoSplit              | Integer | 否       | 多数情况下适用于**单轨**录音，取值：0、1，是否自动分轨，1为自动分轨，0为不分轨；默认：1；若指定为1，则表示上传的音频为**单轨**；自动分轨会额外占用处理时间。**若录音为双轨录音，该参数必须传0。** |
| recognizeRoleDataSetId | Long    | 否       | 数据集ID，使用一个已存在的数据集，因为数据集在创建时会设置角色分离规则（可以查看新建数据集功能中的**话者角色配置**），此处指定数据集ID，则本次上传的文件会复用此数据集的角色分离规则。适用于**单轨**录音。 |
| serviceChannelKeywords | List    | 否       | 多数情况下适用于**单轨**录音，设置一组客服可能说的关键词列表（请确保选择那些区别性比较高的关键词），通过对转写文本从上到下逐句分析，当一句话命中某一个关键词时，则判定该句的角色为客服，则另一个角色就是客户。当recognizeRoleDataSetId和serviceChannelKeywords都存在时，recognizeRoleDataSetId优先级更高；若两者均未设置，则使用系统内置的分轨规则进行兜底。 |
| serviceChannel         | Integer | 否       | 适用于**双轨**录音，指定客服角色的轨道编号，取值：0、1，默认0，即第0轨为客服；通常音轨都是从0开始编号，2个轨就是0，1；具体0是客服还是客户，需要您自行确认。**若使用此参数，请务必传入autoSplit参数，值为0。**若单轨文件忽略此参数。 |
| clientChannel          | Integer | 否       | 适用于**双轨**录音，指定客户角色的轨道编号，取值：0、1，默认1，即第1轨为客户；通常音轨都是从0开始编号，2个轨就是0，1；具体0是客服还是客户，需要您自行确认。**若使用此参数，请务必传入autoSplit参数，值为0。**单轨文件忽略此参数。 |
| ruleIds                | List    | 否       | 规则ID列表，用于指定录音文件使用哪些规则进行质检分析，若不指定，则会过所有规则；注意：单个文件允许最大规则数为100，如果超过100，则会截取前100个规则。（只能使用离线质检规则，不可使用实时质检规则）**（新版不适用，仅旧版智能对话分析适用）** |
| ruleBusinessNames      | List    | 否       | 适用业务列表，系统会使用这些适用规则所关联的规则进行质检分析。与ruleIds不同，该参数适用于规则经常变化的场景：新建规则时，将规则与对应的适用业务关联即可，这样增加了新的规则，不需要修改请求参数，就可以使用新建的规则进行质检分析。**（新版不适用，仅旧版智能对话分析适用）** |
| sampleRate             | Integer | 否       | 录音文件的采样率，可选值：8（8000hz）；16（16000hz）；默认8。需要正确指定录音文件采样率，错误的采样率会导致转写结果错误，通常呼叫中心产生的录音采样率是8000hz。 |
| callbackUrl            | String  | 否       | 回调地址，不指定则不回调，请保证回调地址公网可访问，不支持ip；录音分析完成后会发起回调；详细说明请查看下方的**回调参数说明** |
| vocabId                | String  | 否       | 热词模型ID，不指定则不使用热词；ID值可以从控制台的"基础设置"->"热词"->"热词组ID"中查看。 |
| modelId                | String  | 否       | 语言模型ID，不指定则使用通用模型；ID值可以从控制台的"基础设置"->"语言模型"中查看。 |
| baseModelId            | String  | 否       | 基础模型ID，取值：mandarin（中文普通话8k，默认），mandarin16（中文普通话16k），cantonese（粤语，需要开通白名单）；默认：mandarin。 |

## jsonStr.callList属性说明：

| 属性                   | 值类型  | 是否必须 | 描述                                                         |
| :--------------------- | :------ | :------- | :----------------------------------------------------------- |
| voiceFileUrl           | String  | 是       | 录音文件，具体要求详见API说明中的**录音文件URL要求**         |
| fileName               | String  | 否       | 音频文件名称，如audio.wav；虽不是必填项，但为方便统计，请尽量提供此参数；若不提供，则会从voiceFileUrl中获取，比如`http://www.aliyun.com/audio.wav`，则文件名解析为：`audio.wav`。 |
| autoSplit              | Integer | 否       | 参见上层对象参数说明；如为空，会采用上层对象对应值。         |
| recognizeRoleDataSetId | Long    | 否       | 参见上层对象参数说明；如为空，会采用上层对象对应值。         |
| serviceChannel         | Integer | 否       | 参见上层对象参数说明；如为空，会采用上层对象对应值。         |
| clientChannel          | Integer | 是       | 参见上层对象参数说明；如为空，会采用上层对象对应值。         |
| sampleRate             | Integer | 否       | 参见上层对象参数说明；如为空，会采用上层对象对应值。         |
| callStartTime          | Long    | 否       | 录音发生的时间，格林威治时间1970年01月01日00时00分00秒到现在的毫秒数（即毫秒时间戳，例如：1584535485856），若不指定，则会取当前时间。 |
| vocabId                | String  | 否       | 参见上层对象参数说明；如为空，会采用上层对象对应值。         |
| customerServiceId      | Long    | 否       | 客服ID。可从控制台-基础设置-人员管理页面获取，正确填入客服ID，客服登录控制塔时可以查看与自己关联的录音文件。 |
| customerServiceName    | String  | 否       | 客服姓名。                                                   |
| skillGroupId           | Long    | 否       | 技能组ID。                                                   |
| skillGroupName         | String  | 否       | 技能组名称。                                                 |
| callType               | Integer | 否       | 呼叫类型，可取值：1：呼出；3：呼入。                         |
| callee                 | String  | 否       | 被叫号码，呼出时指的是客户号码，呼入时指的是客服号码。       |
| caller                 | String  | 否       | 主叫号码，呼出时指的是客服号码，呼入时指的是客户号码。       |
| callId                 | String  | 否       | 通话ID，可以是呼叫中心系统中的通话ID，或者其他可以标识通话的ID。 |
| business               | String  | 否       | 业务线名称，属于自定义数据，用于分类统计。                   |
| callUuid               | String  | 否       | 全局唯一标识，做幂等（排重）使用，若传入该字段，系统将查询最近两小时内上传的数据中是否存在相同的callUuid，若存在则本次上传请求将被拒绝。 |
| sessionGroupId         | String  | 否       | 会话组ID，通常把同一个客服和同一个客户的会话称之为一个会话组，当传入会话组ID后，可在会话组结果页查看会话组维度的质检结果。**（仅新版智能对话分析适用）** |
| customerId             | String  | 否       | 客户ID。**（仅新版智能对话分析适用）**                       |
| customerName           | String  | 否       | 客户姓名。**（仅新版智能对话分析适用）**                     |
| schemeTaskConfigId     | String  | 否       | 手动指定的质检任务ID（手动指定后则会使用指定的质检任务进行质检） 。**（仅新版智能对话分析适用）** |
| remark1                | String  | 否       | 自定义数据1，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark2                | String  | 否       | 自定义数据2，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark3                | String  | 否       | 自定义数据3，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark4                | String  | 否       | 自定义数据4，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark5                | Long    | 否       | 自定义数据5，可以存放与您业务相关的自定义字段，格式为有符号的long型。 |
| remark6                | String  | 否       | 自定义数据6，可以存放与您业务相关的自定义字段，最大长度为1024字符。 |
| remark7                | String  | 否       | 自定义数据7，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark8                | String  | 否       | 自定义数据8，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark9                | String  | 否       | 自定义数据9，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark10               | String  | 否       | 自定义数据10，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark11               | String  | 否       | 自定义数据11，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark12               | String  | 否       | 自定义数据12，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark13               | String  | 否       | 自定义数据13，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark14               | Long    | 否       | 自定义数据14，可以存放与您业务相关的自定义字段，格式为有符号的long型。 |
| remark15               | Long    | 否       | 自定义数据15，可以存放与您业务相关的自定义字段，格式为有符号的long型。 |
| remark16               | String  | 否       | 自定义数据16，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark17               | String  | 否       | 自定义数据17，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark18               | String  | 否       | 自定义数据18，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark19               | String  | 否       | 自定义数据19，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark20               | String  | 否       | 自定义数据20，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark21               | String  | 否       | 自定义数据21，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark22               | String  | 否       | 自定义数据22，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark23               | String  | 否       | 自定义数据23，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark24               | String  | 否       | 自定义数据24，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark25               | String  | 否       | 自定义数据25，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| jsonParamStr           | String  | 否       | 更多自定义字段，格式为JSON字符串，key为字段名称，value为字段内容，示例：{"客户等级"：3，"渠道"："官网"}。 |







## 回调参数说明
假设调用方传入的回调地址是：`http://aliyun.com/callback`，那么回调时的完整URL为`http://aliyun.com/callback?taskId=xxx&timestamp=xxx&aliUid=xxx&signature=xxx&event=xxx`，其中：

- taskId：为任务ID
- timestamp：为调用时的时间戳，单位：毫秒
- aliUid：为调用方阿里云主账号uid
- signature：为签名，调用方可用来判断请求是否来自阿里云；计算说明：将`taskId=xxx&timestamp=xxx&aliUid=xxx`进行md5+base64加密，注意顺序；调用方接到回调后，taskId和timestamp可以从回调URL中获取，aliUid即为阿里云主账号ID。通过计算来比对自己计算出的signature，与URL中的signature是否一致，详见下方Java代码示例。
- event：为事件名称，调用方可用来判断是什么事件触发的回调，取值为TaskComplete：任务完成时的回调；

```java
public static void signature() {
    long timestamp = System.currentTimeMillis();
    String taskId = "xxx";
    String aliUid = "xxx";
    // 将 taskId=xxx&timestamp=xxx&aliUid=xxx 进行md5 + base64加密，放在signature字段
    String signature;
    try {
        signature = URLEncoder.encode(md5Base64("taskId=" + taskId + "&timestamp=" + timestamp + "&aliUid=" + aliUid), "utf-8");
        System.out.println(signature);
    } catch (Exception e) {
        e.printStackTrace();
    }
}

public static String md5Base64(String str) throws NoSuchAlgorithmException {
    //string 编码必须为utf-8
    byte[] utfBytes = str.getBytes(StandardCharsets.UTF_8);
    MessageDigest mdTemp = MessageDigest.getInstance("MD5");
    mdTemp.update(utfBytes);
    byte[] md5Bytes = mdTemp.digest();
    return Base64.encodeBase64String(md5Bytes);
}
```

### 请求入参示例
```
{
    "autoSplit":1,
    "serviceChannelKeywords":[
        "留学",
        "客服老师"
    ],
    "ruleIds":[
        181**,
        155**
    ],
    "vocabId":"a7735a24c9ef4213b2fa41d****",
    "modelId":"9706**",
    "callList":[
        {
            "voiceFileUrl":"https://sca-ccc-test.oss-cn-beijing.aliyuncs.com/****.wav",
            "fileName":"abc.wav",
            "callStartTime":"1584535485856",
            "customerServiceId":"30",
            "customerServiceName":"Aagent",
            "skillGroupId":"34sd24",
            "skillGroupName":"售前技能组",
            "callType":1,
            "callee":188888****,
            "caller":"0102323***",
            "callId":23456457**,
            "business":"售前一组",
            "remark1":"38节大促"
        }
    ]
}
```',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UploadDataV4' => 
    array (
      'summary' => '上传离线文本质检数据（纯文本会话）：适用于在线坐席场景。
推荐使用UploadDataV4接口。
UploadDataV4与UploadData的差异：1、V4仅支持POST请求。2、V4支持更长的JsonStr。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'high',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'jsonStr是一个JSON字符串，里面是该接口所有的自定义参数，具体内容参见下方的jsonStr属性说明。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'xxx',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id，用于区分多业务空间场景下选择指定业务空间，默认为默认业务空间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123456',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，200表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Data' => 
              array (
                'description' => '该任务的taskId。',
                'type' => 'string',
                'example' => '6F5934C7-C223-4F0F-BBF3-5B3594***',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，请求唯一标识，可以用来定位追踪请求。',
                'type' => 'string',
                'example' => '6F5934C7-C223-4F0F-BBF3-5B3594***',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": \\"6F5934C7-C223-4F0F-BBF3-5B3594***\\",\\n  \\"RequestId\\": \\"6F5934C7-C223-4F0F-BBF3-5B3594***\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '上传文本质检V4',
      'description' => '调用UploadData.json上传文本质检数据，文本通常来源于在线客服、工单等，接口会返回taskId，您可以通过3种方式获取结果：
- 消息通知：详情请查看[消息队列](https://help.aliyun.com/document_detail/213237.html)，收到消息后再通过GetResult接口获取详细结果。（推荐）
- 回调：通过在请求参数中指定callbackUrl，在任务完成后由系统主动发起回调；接到回调后再通过GetResult接口获取详细结果。
- 轮询：通过此接口返回的任务ID轮询GetResult接口异步获取结果，判断返回中的status是否完成。（不推荐）。',
      'requestParamsDescription' => '## jsonStr属性说明：

| 属性         | 值类型  | 是否必须 | 说明                                                         |
| ------------ | ------- | -------- | ------------------------------------------------------------ |
| isSchemeData | Integer | 否       | 是否将数据上传至新版智能对话分析，取值：0（否）；1（是），默认值为0。 |
| tickets      | List    | 是       | 待检文本数据信息，每个元素是一个完整对话，详见下方**jsonStr.tickets属性说明。** |
| ruleIds      | List    | 否       | 规则ID列表，用于指定录音文件使用哪些规则进行质检分析，若不指定，则会过所有规则；注意：单个文件允许最大规则数为100，如果超过100，则会截取前100个规则。（只能使用离线质检规则，不可使用实时质检规则） **（新版不适用，仅旧版智能对话分析适用）** |
| business     | String  | 否       | 业务线名称，用于分类统计，此请求中的数据应该都属于一个业务线。 |
| callbackUrl  | String  | 否       | 回调地址，不指定则不回调，请保证回调地址与SCA应用的连通性，不支持IP；质检分析完成后会发起回调；详细说明请查看下方的**回调参数说明** |

## jsonStr.tickets属性说明：

| 属性                | 值类型  | 是否必须 | 说明                                                         |
| ------------------- | ------- | -------- | ------------------------------------------------------------ |
| dialogue            | List    | 是       | 待检文本对话，详见下方**dialogue属性说明。**                 |
| tid                 | String  | 否       | 本段对话ID，注意不要重复；若不提供，则会随机生成一个UUID。   |
| fileName            | String  | 否       | 文本名称。                                                   |
| customerServiceId   | Long    | 否       | 客服ID。可从控制台-基础设置-人员管理页面获取，正确填入客服ID，客服登录控制塔时可以查看与自己关联的文件。 |
| customerServiceName | String  | 否       | 客服姓名。                                                   |
| skillGroupId        | String  | 否       | 坐席所在技能组ID。                                           |
| skillGroupName      | String  | 否       | 坐席所在技能组名称。                                         |
| callType            | Integer | 否       | 呼叫类型，可选值：1（呼出）；3（呼入）。适用于您本地已经安装有录音转文本服务，直接将文本上传到SCA系统时的场景，来指定该通话的呼叫类型。 |
| sessionGroupId      | String  | 否       | 会话组ID，通常把同一个客服和同一个客户的会话称之为一个会话组，当传入会话组ID后，可在会话组结果页查看会话组维度的质检结果。**（仅新版智能对话分析适用）** |
| customerId          | String  | 否       | 客户ID。**（仅新版智能对话分析适用）**                       |
| customerName        | String  | 否       | 客户姓名。**（仅新版智能对话分析适用）**                     |
| schemeTaskConfigId  | String  | 否       | 手动指定的质检任务ID（手动指定后则会使用指定的质检任务进行质检） 。**（仅新版智能对话分析适用）** |
| remark1             | String  | 否       | 自定义数据1，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark2             | String  | 否       | 自定义数据2，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark3             | String  | 否       | 自定义数据3，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark4             | String  | 否       | 自定义数据4，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark5             | Long    | 否       | 自定义数据5，可以存放与您业务相关的自定义字段，格式为有符号的long型。 |
| remark6             | String  | 否       | 自定义数据6，可以存放与您业务相关的自定义字段，最大长度为1024字符。 |
| remark7             | String  | 否       | 自定义数据7，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark8             | String  | 否       | 自定义数据8，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark9             | String  | 否       | 自定义数据9，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark10            | String  | 否       | 自定义数据10，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark11            | String  | 否       | 自定义数据11，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark12            | String  | 否       | 自定义数据12，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark13            | String  | 否       | 自定义数据13，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark14            | Long    | 否       | 自定义数据14，可以存放与您业务相关的自定义字段，格式为有符号的long型。 |
| remark15            | Long    | 否       | 自定义数据15，可以存放与您业务相关的自定义字段，格式为有符号的long型。 |
| remark16            | String  | 否       | 自定义数据16，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark17            | String  | 否       | 自定义数据17，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark18            | String  | 否       | 自定义数据18，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark19            | String  | 否       | 自定义数据19，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark20            | String  | 否       | 自定义数据20，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark21            | String  | 否       | 自定义数据21，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark22            | String  | 否       | 自定义数据22，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark23            | String  | 否       | 自定义数据23，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark24            | String  | 否       | 自定义数据24，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark25            | String  | 否       | 自定义数据25，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| jsonParamStr        | String  | 否       | 更多自定义字段，格式为JSON字符串，key为字段名称，value为字段内容，示例：{"客户等级": 3,"渠道":"官网"}。 |

## dialogue属性说明：

| 属性                | 值类型  | 是否必须 | 说明                                                         |
| ------------------- | ------- | -------- | ------------------------------------------------------------ |
| role                | String  | 是       | 对话内容角色，取值：客服、客户。                             |
| customerServiceType | Integer | 否       | 区分角色是人工还是机器人，取值：0（人工），1（机器人），默认值：0。该字段作用：若为机器人，则在复核页面展示的头像为机器人头像。 |
| identity            | String  | 否       | 对话角色的具体身份标识。                                     |
| words               | String  | 是       | 这个角色说的一句话，仅支持UTF-8编码，若句子包含表情包，请查看下方**表情包显示说明** |
| type                | String  | 否       | 当前句子类型，取值：TEXT（文本）；AUDIO（语音）；IMAGE（图片），图片可在复核详情页显示，音频可在复核详情页中播放，默认为TEXT，当为AUDIO或IMAGE时，words字段中传入对应资源的URL地址即可。（**仅新版智能对话分析适用**） |
| begin               | Integer | 是       | 本句话的开始时间，是相对起始点的开始时间偏移，单位ms。       |
| end                 | Integer | 是       | 本句话的结束时间，是相对起始点的结束时间偏移，单位ms。       |
| beginTime           | Date    | 是       | 这句话的开始时间，示例值：2019-11-25 15:37:16。              |

## 表情包显示说明
在复核详情页查看对话详情时，仅支持通用Emoji表情包的展示，上传时，需将表情替换为UTF8字符集的字符，例如&#128512；笑脸表情对应的字符为`&#128512;`，以&#开头，分号结尾，相关文档说明：[Emoji字符对照表](https://www.runoob.com/charsets/ref-emoji.html)，[HTML页面展示字符说明](https://www.runoob.com/charsets/ref-html-symbols.html)

## 回调参数说明
假设调用方传入的回调地址是：`http://aliyun.com/callback`，那么回调时的完整URL为`http://aliyun.com/callback?taskId=xxx&timestamp=xxx&signature=xxx&event=xxx`，其中：

- taskId：为任务id
- timestamp：为调用时的时间戳，单位：毫秒
- aliUid：为调用方阿里云主账号uid
- signature：为签名，调用方可用来判断请求是否来自阿里云；计算说明：将`taskId=xxx&timestamp=xxx&aliUid=xxx`，进行md5+base64加密，注意顺序；调用方接到回调后，taskId和timestamp可以从回调URL中获取，aliUid即为阿里云主账号ID。通过计算来比对自己计算出的signature，与URL中的signature是否一致，详见下方Java代码示例。
- event：为事件名称，调用方可用来判断是什么事件触发的回调，取值为TaskComplete：任务完成时的回调；

```
public static void signature() {
    long timestamp = System.currentTimeMillis();
    String taskId = "xxxx";
    String aliUid = "xxxxx";
    // 将 taskId=xxx&timestamp=xxx&aliUid=xxx 进行md5 + base64加密，放在signature字段
    String signature;
    try {
        signature = URLEncoder.encode(md5Base64("taskId=" + taskId + "&timestamp=" + timestamp + "&aliUid=" + aliUid), "utf-8");
        System.out.println(signature);
    } catch (Exception e) {
        e.printStackTrace();
    }
}

public static String md5Base64(String str) throws NoSuchAlgorithmException {
    //string 编码必须为utf-8
    byte[] utfBytes = str.getBytes(StandardCharsets.UTF_8);
    MessageDigest mdTemp = MessageDigest.getInstance("MD5");
    mdTemp.update(utfBytes);
    byte[] md5Bytes = mdTemp.digest();
    return Base64.encodeBase64String(md5Bytes);
}
```',
    ),
    'UploadData' => 
    array (
      'summary' => '上传离线文本质检数据（纯文本会话）：适用于在线坐席场景。
推荐使用UploadDataV4接口。
UploadDataV4与UploadData的差异：1、V4仅支持POST请求。2、V4支持更长的JsonStr。',
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'jsonStr是一个JSON字符串，里面是该接口所有的自定义参数，具体内容参见下方的jsonStr属性说明。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'xxx',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id，用于区分多业务空间场景下选择指定业务空间，默认为默认业务空间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123456',
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
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Data' => 
              array (
                'description' => '该任务的taskId。',
                'type' => 'string',
                'example' => '6F5934C7-C223-4F0F-BBF3-5B3594***',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，请求唯一标识，可以用来定位追踪请求。',
                'type' => 'string',
                'example' => '6F5934C7-C223-4F0F-BBF3-5B3594****',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'Qualitycheck::2019-01-15::UploadDataV4',
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": \\"6F5934C7-C223-4F0F-BBF3-5B3594***\\",\\n  \\"RequestId\\": \\"6F5934C7-C223-4F0F-BBF3-5B3594****\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '上传文本质检',
      'description' => '调用UploadData.json上传文本质检数据，文本通常来源于在线客服、工单等，接口会返回taskId，您可以通过3种方式获取结果：
- 消息通知：详情请查看[消息队列](https://help.aliyun.com/document_detail/213237.html)，收到消息后再通过GetResult接口获取详细结果。（推荐）
- 回调：通过在请求参数中指定callbackUrl，在任务完成后由系统主动发起回调；接到回调后再通过GetResult接口获取详细结果。
- 轮询：通过此接口返回的任务ID轮询GetResult接口异步获取结果，判断返回中的status是否完成。（不推荐）。',
      'requestParamsDescription' => '## jsonStr属性说明：

| 属性         | 值类型  | 是否必须 | 说明                                                         |
| ------------ | ------- | -------- | ------------------------------------------------------------ |
| isSchemeData | Integer | 否       | 是否将数据上传至新版智能对话分析，取值：0（否）；1（是），默认值为0。 |
| tickets      | List    | 是       | 待检文本数据信息，每个元素是一个完整对话，详见下方**jsonStr.tickets属性说明。** |
| ruleIds      | List    | 否       | 规则ID列表，用于指定录音文件使用哪些规则进行质检分析，若不指定，则会过所有规则；注意：单个文件允许最大规则数为100，如果超过100，则会截取前100个规则。（只能使用离线质检规则，不可使用实时质检规则） **（新版不适用，仅旧版智能对话分析适用）** |
| business     | String  | 否       | 业务线名称，用于分类统计，此请求中的数据应该都属于一个业务线。 |
| callbackUrl  | String  | 否       | 回调地址，不指定则不回调，请保证回调地址与SCA应用的连通性，不支持IP；质检分析完成后会发起回调；详细说明请查看下方的**回调参数说明** |

## jsonStr.tickets属性说明：

| 属性                | 值类型  | 是否必须 | 说明                                                         |
| ------------------- | ------- | -------- | ------------------------------------------------------------ |
| dialogue            | List    | 是       | 待检文本对话，详见下方**dialogue属性说明。**                 |
| tid                 | String  | 否       | 本段对话ID，注意不要重复；若不提供，则会随机生成一个UUID。   |
| fileName            | String  | 否       | 文本名称。                                                   |
| customerServiceId   | Long    | 否       | 客服ID。可从控制台-基础设置-人员管理页面获取，正确填入客服ID，客服登录控制塔时可以查看与自己关联的文件。 |
| customerServiceName | String  | 否       | 客服姓名。                                                   |
| skillGroupId        | String  | 否       | 坐席所在技能组ID。                                           |
| skillGroupName      | String  | 否       | 坐席所在技能组名称。                                         |
| callType            | Integer | 否       | 呼叫类型，可选值：1（呼出）；3（呼入）。适用于您本地已经安装有录音转文本服务，直接将文本上传到SCA系统时的场景，来指定该通话的呼叫类型。 |
| sessionGroupId      | String  | 否       | 会话组ID，通常把同一个客服和同一个客户的会话称之为一个会话组，当传入会话组ID后，可在会话组结果页查看会话组维度的质检结果。**（仅新版智能对话分析适用）** |
| customerId          | String  | 否       | 客户ID。**（仅新版智能对话分析适用）**                       |
| customerName        | String  | 否       | 客户姓名。**（仅新版智能对话分析适用）**                     |
| schemeTaskConfigId  | String  | 否       | 手动指定的质检任务ID（手动指定后则会使用指定的质检任务进行质检） 。**（仅新版智能对话分析适用）** |
| remark1             | String  | 否       | 自定义数据1，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark2             | String  | 否       | 自定义数据2，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark3             | String  | 否       | 自定义数据3，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark4             | String  | 否       | 自定义数据4，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark5             | Long    | 否       | 自定义数据5，可以存放与您业务相关的自定义字段，格式为有符号的long型。 |
| remark6             | String  | 否       | 自定义数据6，可以存放与您业务相关的自定义字段，最大长度为1024字符。 |
| remark7             | String  | 否       | 自定义数据7，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark8             | String  | 否       | 自定义数据8，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark9             | String  | 否       | 自定义数据9，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark10            | String  | 否       | 自定义数据10，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark11            | String  | 否       | 自定义数据11，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark12            | String  | 否       | 自定义数据12，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark13            | String  | 否       | 自定义数据13，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark14            | Long    | 否       | 自定义数据14，可以存放与您业务相关的自定义字段，格式为有符号的long型。 |
| remark15            | Long    | 否       | 自定义数据15，可以存放与您业务相关的自定义字段，格式为有符号的long型。 |
| remark16            | String  | 否       | 自定义数据16，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark17            | String  | 否       | 自定义数据17，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark18            | String  | 否       | 自定义数据18，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark19            | String  | 否       | 自定义数据19，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark20            | String  | 否       | 自定义数据20，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark21            | String  | 否       | 自定义数据21，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark22            | String  | 否       | 自定义数据22，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark23            | String  | 否       | 自定义数据23，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark24            | String  | 否       | 自定义数据24，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark25            | String  | 否       | 自定义数据25，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| jsonParamStr        | String  | 否       | 更多自定义字段，格式为JSON字符串，key为字段名称，value为字段内容，示例：{"客户等级": 3,"渠道":"官网"}。 |

## dialogue属性说明：

| 属性                | 值类型  | 是否必须 | 说明                                                         |
| ------------------- | ------- | -------- | ------------------------------------------------------------ |
| role                | String  | 是       | 对话内容角色，取值：客服、客户。                             |
| customerServiceType | Integer | 否       | 区分角色是人工还是机器人，取值：0（人工），1（机器人），默认值：0。该字段作用：若为机器人，则在复核页面展示的头像为机器人头像。 |
| identity            | String  | 否       | 对话角色的具体身份标识。                                     |
| words               | String  | 是       | 这个角色说的一句话，仅支持UTF-8编码，若句子包含表情包，请查看下方**表情包显示说明** |
| type                | String  | 否       | 当前句子类型，取值：TEXT（文本）；AUDIO（语音）；IMAGE（图片），图片可在复核详情页显示，音频可在复核详情页中播放，默认为TEXT，当为AUDIO或IMAGE时，words字段中传入对应资源的URL地址即可。（**仅新版智能对话分析适用**） |
| begin               | Integer | 是       | 本句话的开始时间，是相对起始点的开始时间偏移，单位ms。       |
| end                 | Integer | 是       | 本句话的结束时间，是相对起始点的结束时间偏移，单位ms。       |
| beginTime           | Date    | 是       | 这句话的开始时间，示例值：2019-11-25 15:37:16。              |

## 表情包显示说明
在复核详情页查看对话详情时，仅支持通用Emoji表情包的展示，上传时，需将表情替换为UTF8字符集的字符，例如&#128512；笑脸表情对应的字符为`&#128512;`，以&#开头，分号结尾，相关文档说明：[Emoji字符对照表](https://www.runoob.com/charsets/ref-emoji.html)，[HTML页面展示字符说明](https://www.runoob.com/charsets/ref-html-symbols.html)

## 回调参数说明
假设调用方传入的回调地址是：`http://aliyun.com/callback`，那么回调时的完整URL为`http://aliyun.com/callback?taskId=xxx&timestamp=xxx&signature=xxx&event=xxx`，其中：

- taskId：为任务id
- timestamp：为调用时的时间戳，单位：毫秒
- aliUid：为调用方阿里云主账号uid
- signature：为签名，调用方可用来判断请求是否来自阿里云；计算说明：将`taskId=xxx&timestamp=xxx&aliUid=xxx`，进行md5+base64加密，注意顺序；调用方接到回调后，taskId和timestamp可以从回调URL中获取，aliUid即为阿里云主账号ID。通过计算来比对自己计算出的signature，与URL中的signature是否一致，详见下方Java代码示例。
- event：为事件名称，调用方可用来判断是什么事件触发的回调，取值为TaskComplete：任务完成时的回调；

```
public static void signature() {
    long timestamp = System.currentTimeMillis();
    String taskId = "xxxx";
    String aliUid = "xxxxx";
    // 将 taskId=xxx&timestamp=xxx&aliUid=xxx 进行md5 + base64加密，放在signature字段
    String signature;
    try {
        signature = URLEncoder.encode(md5Base64("taskId=" + taskId + "&timestamp=" + timestamp + "&aliUid=" + aliUid), "utf-8");
        System.out.println(signature);
    } catch (Exception e) {
        e.printStackTrace();
    }
}

public static String md5Base64(String str) throws NoSuchAlgorithmException {
    //string 编码必须为utf-8
    byte[] utfBytes = str.getBytes(StandardCharsets.UTF_8);
    MessageDigest mdTemp = MessageDigest.getInstance("MD5");
    mdTemp.update(utfBytes);
    byte[] md5Bytes = mdTemp.digest();
    return Base64.encodeBase64String(md5Bytes);
}
```',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateQualityCheckData' => 
    array (
      'summary' => '更新会话随录数据（三方业务字段），便于更多业务维度统计和查询。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"taskId":"xxx"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，200表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'xxx',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成立：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"xxx\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '更新随录数据',
      'requestParamsDescription' => '## jsonStr属性说明：
说明：指定会话数据的方式有两种，第一种是通过taskId+fileId的方式来精确到一条会话数据，第二种是通过callId查询可能会有多条，两种方式二选一即可。

| 属性 | 值类型 | 是否必须 | 说明 |
| :--- | :--- | :--- | :--- |
| taskId | String | 否 | 上传质检数据后返回的任务ID。|
| fileId | String | 否 | 文件ID，通过获取质检结果（GetResult）可以获取到，即返回结果中的recording.id。|
| callId | String | 否 | 通话ID，若该通话ID存在多通会话，则最多更新前100条。|
| isSchemeData | Integer | 否 | 指定数据所属版本，0：旧版智能对话分析，1：新版智能对话分析，默认为旧版。当taskId有值时，会根据taskId自动判断会话数据所属版本。|
| fileName | String | 否 | 音频文件名称|
| business | String | 否 | 业务线名称，属于自定义数据，用于分类统计。 |
| jsonParamStr | String | 否 | 更多自定义字段，格式为JSON字符串，key为字段名称，value为字段内容，示例：{"客户登记"：3，"渠道"："官网"}。 |
| remark1 | String | 否 | 自定义数据1，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark2 | String | 否 | 自定义数据2，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark3 | String | 否 | 自定义数据3，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark4 | String | 否 | 自定义数据4，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark5 | Long | 否 | 自定义数据5，可以存放与您业务相关的自定义字段，格式为有符号的long型。 |
| remark6 | String | 否 | 自定义数据6，可以存放与您业务相关的自定义字段，最大长度为1024字符。 |
| remark7 | String | 否 | 自定义数据7，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark8 | String | 否 | 自定义数据8，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark9 | String | 否 | 自定义数据9，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark10 | String | 否 | 自定义数据10，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark11 | String | 否 | 自定义数据11，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark12 | String | 否 | 自定义数据12，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark13 | String | 否 | 自定义数据13，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark14 | Long | 否 | 自定义数据14，可以存放与您业务相关的自定义字段，格式为有符号的long型。 |
| remark15 | Long | 否 | 自定义数据15，可以存放与您业务相关的自定义字段，格式为有符号的long型。 |
| remark16 | String | 否 | 自定义数据16，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark17 | String | 否 | 自定义数据17，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark18 | Long | 否 | 自定义数据18，可以存放与您业务相关的自定义字段，格式为有符号的long型。 |
| remark19 | String | 否 | 自定义数据19，可以存放与您业务相关的自定义字段，最大长度为1024字符。 |
| remark20 | String | 否 | 自定义数据20，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark21 | String | 否 | 自定义数据21，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark22 | String | 否 | 自定义数据22，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark23 | String | 否 | 自定义数据23，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark24 | String | 否 | 自定义数据24，可以存放与您业务相关的自定义字段，最大长度为64字符。 |
| remark25 | String | 否 | 自定义数据25，可以存放与您业务相关的自定义字段，最大长度为64字符。 |',
    ),
    'AddRuleV4' => 
    array (
      'summary' => '对应前端功能位置：质检规则配置-新建。专有云URL：ip:port/api/client/UpdateRuleById.json。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStrForRule',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'JsonStrForlRule具体参考文档《[`规则对象说明`](~~453053~~)》',
            'type' => 'string',
            'required' => true,
            'example' => '无',
          ),
        ),
        1 => 
        array (
          'name' => 'IsCopy',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否复制。为true是等效于复制规则。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'BaseResult',
            'description' => 'BaseResult',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '106C6CA0-282D-4AF7-85F0-D2D24***',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '响应信息',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Message' => 
                  array (
                    'description' => '出错时表示出错详情，当输出多条信息时使用。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '出错时表示出错详情，当输出多条信息时使用。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP请求返回的响应状态码，200表示请求成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '新建的规则ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '无',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"106C6CA0-282D-4AF7-85F0-D2D24***\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": {\\n    \\"Message\\": [\\n      \\"无\\"\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": 0\\n}","type":"json"}]',
      'title' => '新增规则（新版质检）',
    ),
    'UpdateRuleV4' => 
    array (
      'summary' => '对应前端功能位置：质检规则配置-更新。专有云URL：ip:port/api/client/UpdateRuleById.json。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RuleId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'JsonStrForRule',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'JsonStrForlRule具体参考文档《[`规则对象说明`](~~453053~~)》',
            'type' => 'string',
            'required' => true,
            'example' => '无',
          ),
        ),
        2 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'BaseResult',
            'description' => 'BaseResult。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '106C6CA0-282D-4AF7-85F0-D2D24***',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，200表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Message' => 
                  array (
                    'description' => '出错时表示出错详情，当输出多条信息时使用。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '出错时表示出错详情，当输出多条信息时使用。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP请求返回的响应状态码，200表示请求成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '更新规则Id。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"106C6CA0-282D-4AF7-85F0-D2D24***\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": {\\n    \\"Message\\": [\\n      \\"无\\"\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": 1\\n}","type":"json"}]',
      'title' => '更新规则（新版质检）',
    ),
    'ListRulesV4' => 
    array (
      'summary' => '对应前端功能位置：质检规则配置-列表。专有云URL：ip:port/api/rule/GetRulesCountList.json。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Rid',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '按规则ID搜索。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '895EAD5312634F5AA708E3B3FA79662E',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleIdOrRuleName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '按规则ID或者规则名称搜索。',
            'type' => 'string',
            'required' => false,
            'example' => 'xx',
          ),
        ),
        2 => 
        array (
          'name' => 'BusinessName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则所属业务名称。',
            'type' => 'string',
            'required' => false,
            'example' => '所有业务',
          ),
        ),
        3 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则所属的规则类型的type值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'TypeName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则所属的规则类型的名称。',
            'type' => 'string',
            'required' => false,
            'example' => '所有类型',
          ),
        ),
        5 => 
        array (
          'name' => 'BusinessRange',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '大的业务分类。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '无',
          ),
        ),
        6 => 
        array (
          'name' => 'CreateEmpid',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则创建者ID，同CreateUserId。二选一即可。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'CreateUserId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则创建者ID，同CreateEmpId。二选一即可。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'UpdateUserId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则更新者ID，同LastUpdateEmpId。二选一即可。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'LastUpdateEmpid',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则更新者ID，同UpdateUserId。二选一即可。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        10 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则状态。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        11 => 
        array (
          'name' => 'CategoryName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分类名称。',
            'type' => 'string',
            'required' => false,
            'example' => '分类名称A',
          ),
        ),
        12 => 
        array (
          'name' => 'SourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '来源类型',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        13 => 
        array (
          'name' => 'RuleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则类别',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        14 => 
        array (
          'name' => 'UpdateStartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '按照更新时间筛选（左区间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-11-29 16:11:09',
          ),
        ),
        15 => 
        array (
          'name' => 'UpdateEndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '按照更新时间筛选（右区间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-11-29 18:11:09',
          ),
        ),
        16 => 
        array (
          'name' => 'SchemeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '质检方案ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1000000090',
          ),
        ),
        17 => 
        array (
          'name' => 'RequireInfos',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '需要字段',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要字段',
              'type' => 'string',
              'required' => false,
              'example' => 'xx',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        18 => 
        array (
          'name' => 'RuleScoreSingleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '评分类型。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        19 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前页。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        20 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        21 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页显示条数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        22 => 
        array (
          'name' => 'CountTotal',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否统计总数',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        23 => 
        array (
          'name' => 'StartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '按照创建时间筛选（左区间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-11-29 18:11:09',
          ),
        ),
        24 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '按照创建时间筛选（右区间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-11-29 19:11:09',
          ),
        ),
        25 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'RulePageResult<RuleCountInfo>',
            'description' => 'RulePageResult<RuleCountInfo>',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '数据总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '219',
              ),
              'BusinessType' => 
              array (
                'description' => '业务类型，无实际意义，忽略。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '无',
              ),
              'Data' => 
              array (
                'description' => '返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '规则信息。',
                  '$ref' => '#/components/schemas/RuleCountInfo',
                ),
              ),
              'Count' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '219',
              ),
              'CurrentPage' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageSize' => 
              array (
                'description' => '每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '96138D8D-8D26-4E41-BFF4-77AED1088BBD',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：**true**表示成功；**false/null**表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'description' => '出错时表示出错详情，当输出多条信息时使用。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '出错时表示出错详情，当输出多条信息时使用。',
                  'type' => 'string',
                  'example' => '无',
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 219,\\n  \\"BusinessType\\": 0,\\n  \\"Data\\": [\\n    {\\n      \\"Rid\\": 0,\\n      \\"Name\\": \\"\\",\\n      \\"Type\\": 0,\\n      \\"Status\\": 0,\\n      \\"CheckNumber\\": 0,\\n      \\"HitNumber\\": 0,\\n      \\"HitRate\\": 0,\\n      \\"ReviewAccuracyRate\\": 0,\\n      \\"ReviewRate\\": 0,\\n      \\"PreReviewNumber\\": 0,\\n      \\"ReviewNumber\\": 0,\\n      \\"UnReviewNumber\\": 0,\\n      \\"ProblemNumber\\": 0,\\n      \\"StartTime\\": \\"\\",\\n      \\"EndTime\\": \\"\\",\\n      \\"CreateTime\\": \\"\\",\\n      \\"CreateEmpid\\": \\"\\",\\n      \\"CreateEmpName\\": \\"\\",\\n      \\"LastUpdateEmpid\\": \\"\\",\\n      \\"LastUpdateEmpName\\": \\"\\",\\n      \\"LastUpdateTime\\": \\"\\",\\n      \\"BusinessRange\\": [\\n        0\\n      ],\\n      \\"BusinessCategoryBasicInfoList\\": [\\n        {\\n          \\"Bid\\": 0,\\n          \\"ServiceType\\": 0,\\n          \\"Name\\": \\"\\",\\n          \\"OriginalId\\": 0\\n        }\\n      ],\\n      \\"BusinessCategoryNameList\\": [\\n        \\"\\"\\n      ],\\n      \\"IsDelete\\": 0,\\n      \\"TypeName\\": \\"\\",\\n      \\"JobName\\": \\"\\",\\n      \\"Comments\\": \\"\\",\\n      \\"RealViolationNumber\\": 0,\\n      \\"HitRealViolationRate\\": 0,\\n      \\"ReviewStatusName\\": \\"\\",\\n      \\"Deny\\": 0,\\n      \\"ScoreSubId\\": 0,\\n      \\"AutoReview\\": 0,\\n      \\"RuleScoreType\\": 0,\\n      \\"UserGroup\\": \\"\\",\\n      \\"OperationMode\\": 0,\\n      \\"IsSelect\\": true,\\n      \\"RuleType\\": 0,\\n      \\"Effective\\": 0,\\n      \\"FullCycle\\": 0,\\n      \\"EffectiveStartTime\\": \\"\\",\\n      \\"EffectiveEndTime\\": \\"\\",\\n      \\"QualityCheckType\\": 0,\\n      \\"GraphFlow\\": \\"\\",\\n      \\"RuleScoreSingleType\\": 0,\\n      \\"TargetType\\": 0\\n    }\\n  ],\\n  \\"Count\\": 219,\\n  \\"CurrentPage\\": 10,\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"RequestId\\": \\"96138D8D-8D26-4E41-BFF4-77AED1088BBD\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": [\\n    \\"无\\"\\n  ],\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '获取规则列表（新版质检）',
    ),
    'GetRuleV4' => 
    array (
      'summary' => '对应前端功能位置：质检规则配置-查询。专有云URL：ip:port/api/client/GetRuleById.json。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RuleId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '531',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PlainResult<RulesInfo>',
            'description' => 'PlainResult<RulesInfo>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '规则信息',
                'enumValueTitles' => 
                array (
                ),
                '$ref' => '#/components/schemas/RulesInfo',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '106C6CA0-282D-4AF7-85F0-D2D24***',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'description' => '出错时表示出错详情，当输出多条信息时使用。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '出错时表示出错详情，当输出多条信息时使用。',
                  'type' => 'string',
                  'example' => '无',
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP请求返回的响应状态码，200表示请求成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
            'enumValueTitles' => 
            array (
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Conditions\\": [\\n      {\\n        \\"Cid\\": \\"\\",\\n        \\"Id\\": 0,\\n        \\"Rid\\": \\"\\",\\n        \\"Check_range\\": {\\n          \\"RoleId\\": 0,\\n          \\"Role\\": \\"\\",\\n          \\"Anchor\\": {\\n            \\"Cid\\": \\"\\",\\n            \\"Location\\": \\"\\",\\n            \\"Hit_time\\": 0\\n          },\\n          \\"Range\\": {\\n            \\"From\\": 0,\\n            \\"To\\": 0\\n          },\\n          \\"Absolute\\": true,\\n          \\"AllSentencesSatisfy\\": true\\n        },\\n        \\"Operators\\": [\\n          {\\n            \\"Oid\\": \\"\\",\\n            \\"Id\\": 0,\\n            \\"Type\\": \\"\\",\\n            \\"Param\\": {\\n              \\"CustomerParam\\": {\\n                \\"Field\\": \\"\\",\\n                \\"FieldType\\": 0,\\n                \\"DataType\\": 0,\\n                \\"Symbol\\": 0,\\n                \\"Value\\": \\"\\",\\n                \\"ActualValue\\": \\"\\"\\n              },\\n              \\"Keywords\\": [\\n                \\"\\"\\n              ],\\n              \\"Regex\\": \\"\\",\\n              \\"NotRegex\\": \\"\\",\\n              \\"Phrase\\": \\"\\",\\n              \\"References\\": [\\n                \\"\\"\\n              ],\\n              \\"Interval\\": 0,\\n              \\"IntervalEnd\\": 0,\\n              \\"Threshold\\": 0,\\n              \\"In_sentence\\": true,\\n              \\"Target\\": 0,\\n              \\"From_end\\": true,\\n              \\"Different_role\\": true,\\n              \\"Target_role\\": \\"\\",\\n              \\"RoleId\\": 0,\\n              \\"Velocity\\": 0,\\n              \\"VelocityInMint\\": 0,\\n              \\"KeywordExtension\\": 0,\\n              \\"Synonyms\\": {\\n                \\"key\\": [\\n                  \\"\\"\\n                ]\\n              },\\n              \\"Case_sensitive\\": true,\\n              \\"Near_dialogue\\": true,\\n              \\"MinWordSize\\": 0,\\n              \\"Hit_time\\": 0,\\n              \\"Excludes\\": [\\n                \\"\\"\\n              ],\\n              \\"From\\": 0,\\n              \\"CheckFirstSentence\\": true,\\n              \\"Average\\": true,\\n              \\"BeginType\\": \\"\\",\\n              \\"EndType\\": \\"\\",\\n              \\"CompareOperator\\": \\"\\",\\n              \\"Pkey\\": \\"\\",\\n              \\"Poutput_type\\": 0,\\n              \\"SimilarlySentences\\": [\\n                \\"\\"\\n              ],\\n              \\"LgfSentences\\": [\\n                \\"\\"\\n              ],\\n              \\"Score\\": 0,\\n              \\"ContextChatMatch\\": true,\\n              \\"KeywordMatchSize\\": 0,\\n              \\"MaxEmotionChangeValue\\": 0,\\n              \\"CheckType\\": 0,\\n              \\"KnowledgeTargetId\\": \\"\\",\\n              \\"CategoryPathCode\\": \\"\\",\\n              \\"KnowledgeTargetType\\": 0,\\n              \\"KnowledgeTargetName\\": \\"\\",\\n              \\"QuestionThreshold\\": \\"\\",\\n              \\"AnswerThreshold\\": \\"\\",\\n              \\"KnowledgeSentenceNum\\": 0,\\n              \\"KnowledgeInfo\\": \\"\\",\\n              \\"BotId\\": \\"\\",\\n              \\"UseEasAlgorithm\\": true,\\n              \\"Pvalues\\": [\\n                \\"\\"\\n              ],\\n              \\"Similarity_threshold\\": 0,\\n              \\"AntModelInfo\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"DelayTime\\": 0\\n            },\\n            \\"Name\\": \\"\\",\\n            \\"UserGroup\\": \\"\\",\\n            \\"QualityCheckType\\": 0\\n          }\\n        ],\\n        \\"Lambda\\": \\"\\",\\n        \\"Exclusion\\": 0,\\n        \\"Name\\": \\"\\",\\n        \\"UserGroup\\": \\"\\"\\n      }\\n    ],\\n    \\"Rules\\": [\\n      {\\n        \\"Status\\": 0,\\n        \\"IsDelete\\": 0,\\n        \\"StartTime\\": \\"\\",\\n        \\"EndTime\\": \\"\\",\\n        \\"BusinessCategoryNameList\\": [\\n          \\"\\"\\n        ],\\n        \\"Weight\\": \\"\\",\\n        \\"IsOnline\\": 0,\\n        \\"CreateEmpid\\": \\"\\",\\n        \\"CreateEmpName\\": \\"\\",\\n        \\"CreateTime\\": \\"\\",\\n        \\"LastUpdateTime\\": \\"\\",\\n        \\"LastUpdateEmpid\\": \\"\\",\\n        \\"LastUpdateEmpName\\": \\"\\",\\n        \\"Comments\\": \\"\\",\\n        \\"Deny\\": 0,\\n        \\"ScoreSubId\\": 0,\\n        \\"ScoreName\\": \\"\\",\\n        \\"ScoreSubName\\": \\"\\",\\n        \\"ScoreNum\\": 0,\\n        \\"ScoreType\\": 0,\\n        \\"ScoreDeleted\\": true,\\n        \\"OperationMode\\": 0,\\n        \\"Meet\\": 0,\\n        \\"Dialogues\\": [\\n          {\\n            \\"Id\\": 0,\\n            \\"Content\\": [\\n              {\\n                \\"HourMinSec\\": \\"\\",\\n                \\"Role\\": \\"\\",\\n                \\"Identity\\": \\"\\",\\n                \\"EmotionValue\\": 0,\\n                \\"SpeechRate\\": 0,\\n                \\"Words\\": \\"\\",\\n                \\"End\\": 0,\\n                \\"SilenceDuration\\": 0,\\n                \\"BeginTime\\": 0,\\n                \\"Begin\\": 0\\n              }\\n            ],\\n            \\"Name\\": \\"\\",\\n            \\"UserGroup\\": \\"\\"\\n          }\\n        ],\\n        \\"Effective\\": 0,\\n        \\"FullCycle\\": 0,\\n        \\"EffectiveStartTime\\": \\"\\",\\n        \\"EffectiveEndTime\\": \\"\\",\\n        \\"QualityCheckType\\": 0,\\n        \\"Level\\": 0,\\n        \\"GraphFlow\\": \\"\\",\\n        \\"TaskFlowType\\": 0,\\n        \\"CheckType\\": 0,\\n        \\"SchemeCheckType\\": {\\n          \\"CheckType\\": 0,\\n          \\"CheckName\\": \\"\\",\\n          \\"SourceScore\\": 0,\\n          \\"Score\\": 0,\\n          \\"Enable\\": 0,\\n          \\"SchemeId\\": 0,\\n          \\"SchemeScoreInfoList\\": [\\n            {\\n              \\"Rid\\": 0,\\n              \\"Name\\": \\"\\",\\n              \\"TaskFlowId\\": 0,\\n              \\"TaskFlowName\\": \\"\\",\\n              \\"ScoreType\\": 0,\\n              \\"ScoreNumType\\": 0,\\n              \\"ScoreNum\\": 0,\\n              \\"ScoreRuleHitType\\": 0\\n            }\\n          ],\\n          \\"TaskFlowScoreInfoList\\": [\\n            {\\n              \\"TaskFlowId\\": 0,\\n              \\"TaskFlowName\\": \\"\\",\\n              \\"TaskFlowType\\": 0,\\n              \\"SchemeScoreInfoList\\": [\\n                {\\n                  \\"Rid\\": 0,\\n                  \\"Name\\": \\"\\",\\n                  \\"TaskFlowId\\": 0,\\n                  \\"TaskFlowName\\": \\"\\",\\n                  \\"ScoreType\\": 0,\\n                  \\"ScoreNumType\\": 0,\\n                  \\"ScoreNum\\": 0,\\n                  \\"ScoreRuleHitType\\": 0\\n                }\\n              ]\\n            }\\n          ]\\n        },\\n        \\"TargetType\\": 0,\\n        \\"ConfigType\\": 0,\\n        \\"ScoreNumType\\": 0,\\n        \\"ScoreRuleHitType\\": 0,\\n        \\"SchemeId\\": 0,\\n        \\"SchemeRuleMappingId\\": 0,\\n        \\"SchemeName\\": \\"\\",\\n        \\"ModifyType\\": 0,\\n        \\"SortIndex\\": 0,\\n        \\"RuleType\\": 0,\\n        \\"Rid\\": \\"\\",\\n        \\"Name\\": \\"\\",\\n        \\"TaskFlowId\\": 0,\\n        \\"Lambda\\": \\"\\",\\n        \\"Triggers\\": [\\n          \\"\\"\\n        ],\\n        \\"ExternalProperty\\": 0,\\n        \\"Type\\": 0,\\n        \\"RuleCategoryName\\": \\"\\",\\n        \\"AutoReview\\": 0,\\n        \\"RuleScoreType\\": 0,\\n        \\"ScoreId\\": 0\\n      }\\n    ],\\n    \\"Dialogues\\": [\\n      {\\n        \\"Id\\": 0,\\n        \\"Content\\": [\\n          {\\n            \\"HourMinSec\\": \\"\\",\\n            \\"Role\\": \\"\\",\\n            \\"Identity\\": \\"\\",\\n            \\"EmotionValue\\": 0,\\n            \\"SpeechRate\\": 0,\\n            \\"Words\\": \\"\\",\\n            \\"End\\": 0,\\n            \\"SilenceDuration\\": 0,\\n            \\"BeginTime\\": 0,\\n            \\"Begin\\": 0\\n          }\\n        ],\\n        \\"Name\\": \\"\\",\\n        \\"UserGroup\\": \\"\\"\\n      }\\n    ],\\n    \\"Count\\": 0,\\n    \\"PageSize\\": 0,\\n    \\"PageNumber\\": 0\\n  },\\n  \\"RequestId\\": \\"106C6CA0-282D-4AF7-85F0-D2D24***\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": [\\n    \\"无\\"\\n  ],\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '获取规则详情（新版质检）',
    ),
    'DeleteRuleV4' => 
    array (
      'summary' => '对应前端功能位置：质检规则配置-删除。专有云URL：ip:port/api/client/DeleteRule.json。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RuleId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'ForceDelete',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当规则有关联质检任务时，还是否删除。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'BaseResult',
            'description' => 'BaseResult',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F190ADE9-619A-447D-84E3-7E241A5C428E',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Message' => 
                  array (
                    'description' => '出错时表示出错详情，当输出多条信息时使用。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '出错时表示出错详情，当输出多条信息时使用。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F190ADE9-619A-447D-84E3-7E241A5C428E\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": {\\n    \\"Message\\": [\\n      \\"无\\"\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '删除规则（新版质检）',
    ),
    'TestRuleV4' => 
    array (
      'summary' => '对应前端功能位置：质检规则配置-测试。专有云URL：ip:port/api/client/TestRule.json。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsSchemeData',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否为新版质检，0：旧版质检；1：新版质检。默认为1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'TestJson',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '测试规则请求参数JSON，详情见请求参数补充说明。',
            'type' => 'string',
            'required' => true,
            'example' => '{"ruleList":[9771],"dialogues":[{"begin":0,"end":760,"hourMinSec":"00:00","role":"客户","identity":"客户","words":"123"},{"begin":21004,"end":21494,"hourMinSec":"00:21","role":"客服","identity":"客服","words":"123"}]}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PlainResult<OverviewResult>',
            'description' => 'PlainResult<OverviewResult>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '完整返回内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'HitRuleReviewInfoList' => 
                  array (
                    'description' => '命中检测项信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '命中检测项信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Rid' => 
                        array (
                          'description' => '检测项ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '451',
                        ),
                        'Lambda' => 
                        array (
                          'description' => 'Lambda表达式：例如：a&&b',
                          'type' => 'string',
                          'example' => 'a&&b',
                        ),
                        'ConditionHitInfoList' => 
                        array (
                          'description' => '命中的条件信息。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '命中的条件信息。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Cid' => 
                              array (
                                'description' => '条件ID。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '条件ID。',
                                  'type' => 'string',
                                  'example' => '1',
                                ),
                              ),
                              'Phrase' => 
                              array (
                                'description' => '当前命中检测项的句子详情。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Role' => 
                                  array (
                                    'description' => '本句的角色，取值：客服、客户。',
                                    'type' => 'string',
                                    'example' => '客服',
                                  ),
                                  'Identity' => 
                                  array (
                                    'description' => '角色标识，离线语音场景下角色只有客服/客户，离线文本质检场景下，显示的是上传数据时传入的identity。',
                                    'type' => 'string',
                                    'example' => '客服',
                                  ),
                                  'Words' => 
                                  array (
                                    'description' => '对话内容。',
                                    'type' => 'string',
                                    'example' => '你好，请问有什么可以帮您',
                                  ),
                                  'Begin' => 
                                  array (
                                    'description' => '这句话的开始时间相对对话整体开始时间的偏移量，毫秒级，例如录音总时长为2分10秒，客户的某一句话是在1分12秒时开始讲的，1分20秒时讲完，则begin的值为72000，end的值为80000。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '72000',
                                  ),
                                  'End' => 
                                  array (
                                    'description' => '这句话的开始时间相对对话整体开始时间的偏移量，毫秒级，例如录音总时长为2分10秒，客户的某一句话是在1分12秒时开始讲的，1分20秒时讲完，则begin的值为72000，end的值为80000。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '80000',
                                  ),
                                  'BeginTime' => 
                                  array (
                                    'description' => '这句话的开始时间，示例值：2019-11-25 15:37:16。',
                                    'type' => 'string',
                                    'example' => '2019-11-25 15:37:16',
                                  ),
                                  'HourMinSec' => 
                                  array (
                                    'description' => '这句话的时分秒格式的开始时间，格式：hh:mm:ss',
                                    'type' => 'string',
                                    'example' => '10:00:00',
                                  ),
                                  'EmotionValue' => 
                                  array (
                                    'description' => '情绪能量值，取值为音量分贝值/10。取值范围：[1，10]。值越高情绪越强烈。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '7',
                                  ),
                                  'EmotionFineGrainedValue' => 
                                  array (
                                    'description' => '内部使用，忽略。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '忽略',
                                  ),
                                  'SilenceDuration' => 
                                  array (
                                    'description' => '静音时长，单位毫秒',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '1000',
                                  ),
                                  'SpeechRate' => 
                                  array (
                                    'description' => '本句的平均语速，单位：字数/分钟。

',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '100',
                                  ),
                                  'ChannelId' => 
                                  array (
                                    'description' => '频道ID。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '0',
                                  ),
                                  'Pid' => 
                                  array (
                                    'description' => '当前句子在所有句子中的下标值，即当前句子是请求参数中dialogue数组中的第几个，从0开始。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '3',
                                  ),
                                  'RenterId' => 
                                  array (
                                    'description' => '内部用，忽略。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '无',
                                  ),
                                  'Uuid' => 
                                  array (
                                    'description' => '内部用，忽略。',
                                    'type' => 'string',
                                    'example' => '无',
                                  ),
                                  'HitStatus' => 
                                  array (
                                    'description' => '命中状态。取值：

- **0**：没有命中
- **1**：命中',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '1',
                                  ),
                                  'Sid' => 
                                  array (
                                    'description' => '内部用，忽略。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '无',
                                  ),
                                ),
                              ),
                              'KeyWords' => 
                              array (
                                'description' => '命中的关键信息，在复核页面上高亮展示的信息，例如关键词检查算子命中的关键词、客服模型检查算子命中的具体类别信息等。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '命中的关键信息，在复核页面上高亮展示的信息，例如关键词检查算子命中的关键词、客服模型检查算子命中的具体类别信息等。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'OperatorKey' => 
                                    array (
                                      'description' => '算子命中的关键信息。',
                                      'type' => 'string',
                                      'example' => '无',
                                    ),
                                    'Val' => 
                                    array (
                                      'description' => '算子命中的关键信息，详见下方返回参数说明中的**关键信息Val详解**。',
                                      'type' => 'string',
                                      'example' => '你好',
                                    ),
                                    'Pid' => 
                                    array (
                                      'description' => '当前句子在所有句子中的下标值，即当前句子是请求参数中dialogue数组中的第几个，从0开始。',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '13',
                                    ),
                                    'From' => 
                                    array (
                                      'description' => '需要高亮展示的关键字从第几个字符开始，取值范围从0开始，最大值为当句话字符总数减1。高亮的字包含from。

',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '1',
                                    ),
                                    'To' => 
                                    array (
                                      'description' => '需要高亮展示的关键字到第几个字符结束，最大值为当句话字符总数减1。高亮的字不包含to，例如一句话为“不可能给你退货的”，from=0，to=3，那么需要高亮的关键字就是“不可能”三个字。

',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '3',
                                    ),
                                    'Tid' => 
                                    array (
                                      'description' => '内部用，忽略。',
                                      'type' => 'string',
                                      'example' => '无',
                                    ),
                                    'Oid' => 
                                    array (
                                      'description' => '算子的ID',
                                      'type' => 'string',
                                      'example' => '123',
                                    ),
                                    'Uuid' => 
                                    array (
                                      'description' => '内部用，忽略。',
                                      'type' => 'string',
                                      'example' => '无',
                                    ),
                                    'SimilarPhrase' => 
                                    array (
                                      'description' => '相似句',
                                      'type' => 'string',
                                      'example' => '您好',
                                    ),
                                    'Cid' => 
                                    array (
                                      'description' => '条件id。',
                                      'type' => 'string',
                                      'example' => '4',
                                    ),
                                    'CustomizeCode' => 
                                    array (
                                      'description' => '内部字段，请忽略。',
                                      'type' => 'string',
                                      'example' => '无',
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'ConditionInfoList' => 
                        array (
                          'description' => '条件列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '条件信息',
                            '$ref' => '#/components/schemas/ConditionBasicInfo',
                          ),
                        ),
                        'BranchHitId' => 
                        array (
                          'description' => '命中分支ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'BranchInfoList' => 
                        array (
                          'description' => '分支信息列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '分支信息',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Index' => 
                              array (
                                'description' => '索引号',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                              ),
                              'Name' => 
                              array (
                                'description' => '节点名称',
                                'type' => 'string',
                                'example' => '节点A',
                              ),
                              'NextNodeId' => 
                              array (
                                'description' => '下一个流程节点ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                              ),
                              'Situation' => 
                              array (
                                'description' => '流程节点条件',
                                '$ref' => '#/components/schemas/NextNodeSituations',
                              ),
                              'Lambda' => 
                              array (
                                'description' => 'Lambda表达式',
                                'type' => 'string',
                                'example' => 'a&&b',
                              ),
                              'CheckType' => 
                              array (
                                'description' => '检测项类型',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                              ),
                              'Triggers' => 
                              array (
                                'description' => '触发ID列表',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '触发ID。',
                                  'type' => 'string',
                                  'example' => 'a',
                                ),
                              ),
                            ),
                          ),
                        ),
                        'RuleScoreType' => 
                        array (
                          'description' => '是否计分：1不计分；3计分。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'TaskFlowId' => 
                        array (
                          'description' => '流程ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'ScoreNumType' => 
                        array (
                          'description' => '计分类型，可能值：0（命中后加减分）；1（命中后一次性得分）',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Matched' => 
                        array (
                          'description' => '是否命中',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'NodeType' => 
                        array (
                          'description' => '节点类型。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'JudgeNodeName' => 
                        array (
                          'description' => '判断节点名称',
                          'type' => 'string',
                          'example' => '判断节点A',
                        ),
                        'RuleName' => 
                        array (
                          'description' => '规则名称。',
                          'type' => 'string',
                          'example' => '规则A',
                        ),
                      ),
                    ),
                  ),
                  'HitTaskFlowList' => 
                  array (
                    'description' => '命中高级流程节点列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '命中高级流程节点信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'GraphFlow' => 
                        array (
                          'description' => '图流程画布',
                          '$ref' => '#/components/schemas/TaskGraphFlow',
                        ),
                        'TaskFlowType' => 
                        array (
                          'description' => '流程图类型-已废弃-默认-1',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '无',
                        ),
                        'Rid' => 
                        array (
                          'description' => '规则ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                      ),
                    ),
                  ),
                  'UnhitRuleReviewInfoList' => 
                  array (
                    'description' => '未命中规则信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '未命中规则信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Rid' => 
                        array (
                          'description' => '命中的规则ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'ConditionInfoList' => 
                        array (
                          'description' => '条件列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '条件信息',
                            '$ref' => '#/components/schemas/ConditionBasicInfo',
                          ),
                        ),
                        'Matched' => 
                        array (
                          'description' => '是否命中',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'TaskFlowType' => 
                        array (
                          'description' => '流程图类型-已废弃-默认-1',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '忽略',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求Id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '96138D8D-XXXX-4E41-XXXX-77AED1088BBD',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '结果代码，200表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'description' => '结果代码，200表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '出错时表示出错详情，成功时为successful。',
                'description' => '出错时表示出错详情，成功时为successful。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'HTTP状态码。',
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"HitRuleReviewInfoList\\": [\\n      {\\n        \\"Rid\\": 451,\\n        \\"Lambda\\": \\"a&&b\\",\\n        \\"ConditionHitInfoList\\": [\\n          {\\n            \\"Cid\\": [\\n              \\"1\\"\\n            ],\\n            \\"Phrase\\": {\\n              \\"Role\\": \\"客服\\",\\n              \\"Identity\\": \\"客服\\",\\n              \\"Words\\": \\"你好，请问有什么可以帮您\\",\\n              \\"Begin\\": 72000,\\n              \\"End\\": 80000,\\n              \\"BeginTime\\": \\"2019-11-25 15:37:16\\",\\n              \\"HourMinSec\\": \\"10:00:00\\",\\n              \\"EmotionValue\\": 7,\\n              \\"EmotionFineGrainedValue\\": 0,\\n              \\"SilenceDuration\\": 1000,\\n              \\"SpeechRate\\": 100,\\n              \\"ChannelId\\": 0,\\n              \\"Pid\\": 3,\\n              \\"RenterId\\": 0,\\n              \\"Uuid\\": \\"无\\",\\n              \\"HitStatus\\": 1,\\n              \\"Sid\\": 0\\n            },\\n            \\"KeyWords\\": [\\n              {\\n                \\"OperatorKey\\": \\"无\\",\\n                \\"Val\\": \\"你好\\",\\n                \\"Pid\\": 13,\\n                \\"From\\": 1,\\n                \\"To\\": 3,\\n                \\"Tid\\": \\"无\\",\\n                \\"Oid\\": \\"123\\",\\n                \\"Uuid\\": \\"无\\",\\n                \\"SimilarPhrase\\": \\"您好\\",\\n                \\"Cid\\": \\"4\\",\\n                \\"CustomizeCode\\": \\"无\\"\\n              }\\n            ]\\n          }\\n        ],\\n        \\"ConditionInfoList\\": [\\n          {\\n            \\"Cid\\": \\"\\",\\n            \\"Id\\": 0,\\n            \\"Rid\\": \\"\\",\\n            \\"Check_range\\": {\\n              \\"RoleId\\": 0,\\n              \\"Role\\": \\"\\",\\n              \\"Anchor\\": {\\n                \\"Cid\\": \\"\\",\\n                \\"Location\\": \\"\\",\\n                \\"Hit_time\\": 0\\n              },\\n              \\"Range\\": {\\n                \\"From\\": 0,\\n                \\"To\\": 0\\n              },\\n              \\"Absolute\\": true,\\n              \\"AllSentencesSatisfy\\": true\\n            },\\n            \\"Operators\\": [\\n              {\\n                \\"Oid\\": \\"\\",\\n                \\"Id\\": 0,\\n                \\"Type\\": \\"\\",\\n                \\"Param\\": {\\n                  \\"CustomerParam\\": {\\n                    \\"Field\\": \\"\\",\\n                    \\"FieldType\\": 0,\\n                    \\"DataType\\": 0,\\n                    \\"Symbol\\": 0,\\n                    \\"Value\\": \\"\\",\\n                    \\"ActualValue\\": \\"\\"\\n                  },\\n                  \\"Keywords\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"Regex\\": \\"\\",\\n                  \\"NotRegex\\": \\"\\",\\n                  \\"Phrase\\": \\"\\",\\n                  \\"References\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"Interval\\": 0,\\n                  \\"IntervalEnd\\": 0,\\n                  \\"Threshold\\": 0,\\n                  \\"In_sentence\\": true,\\n                  \\"Target\\": 0,\\n                  \\"From_end\\": true,\\n                  \\"Different_role\\": true,\\n                  \\"Target_role\\": \\"\\",\\n                  \\"RoleId\\": 0,\\n                  \\"Velocity\\": 0,\\n                  \\"VelocityInMint\\": 0,\\n                  \\"KeywordExtension\\": 0,\\n                  \\"Synonyms\\": {\\n                    \\"key\\": [\\n                      \\"\\"\\n                    ]\\n                  },\\n                  \\"Case_sensitive\\": true,\\n                  \\"Near_dialogue\\": true,\\n                  \\"MinWordSize\\": 0,\\n                  \\"Hit_time\\": 0,\\n                  \\"Excludes\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"From\\": 0,\\n                  \\"CheckFirstSentence\\": true,\\n                  \\"Average\\": true,\\n                  \\"BeginType\\": \\"\\",\\n                  \\"EndType\\": \\"\\",\\n                  \\"CompareOperator\\": \\"\\",\\n                  \\"Pkey\\": \\"\\",\\n                  \\"Poutput_type\\": 0,\\n                  \\"SimilarlySentences\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"LgfSentences\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"Score\\": 0,\\n                  \\"ContextChatMatch\\": true,\\n                  \\"KeywordMatchSize\\": 0,\\n                  \\"MaxEmotionChangeValue\\": 0,\\n                  \\"CheckType\\": 0,\\n                  \\"KnowledgeTargetId\\": \\"\\",\\n                  \\"CategoryPathCode\\": \\"\\",\\n                  \\"KnowledgeTargetType\\": 0,\\n                  \\"KnowledgeTargetName\\": \\"\\",\\n                  \\"QuestionThreshold\\": \\"\\",\\n                  \\"AnswerThreshold\\": \\"\\",\\n                  \\"KnowledgeSentenceNum\\": 0,\\n                  \\"KnowledgeInfo\\": \\"\\",\\n                  \\"BotId\\": \\"\\",\\n                  \\"UseEasAlgorithm\\": true,\\n                  \\"Pvalues\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"Similarity_threshold\\": 0,\\n                  \\"AntModelInfo\\": {\\n                    \\"key\\": \\"\\"\\n                  },\\n                  \\"DelayTime\\": 0\\n                },\\n                \\"Name\\": \\"\\",\\n                \\"UserGroup\\": \\"\\",\\n                \\"QualityCheckType\\": 0\\n              }\\n            ],\\n            \\"Lambda\\": \\"\\",\\n            \\"Exclusion\\": 0,\\n            \\"Name\\": \\"\\",\\n            \\"UserGroup\\": \\"\\"\\n          }\\n        ],\\n        \\"BranchHitId\\": 1,\\n        \\"BranchInfoList\\": [\\n          {\\n            \\"Index\\": 1,\\n            \\"Name\\": \\"节点A\\",\\n            \\"NextNodeId\\": 2,\\n            \\"Situation\\": {\\n              \\"ConditionGroup\\": [\\n                {\\n                  \\"Conditions\\": [\\n                    {\\n                      \\"Field\\": \\"\\",\\n                      \\"FieldType\\": 0,\\n                      \\"DataType\\": 0,\\n                      \\"Symbol\\": 0,\\n                      \\"Value\\": \\"\\",\\n                      \\"ActualValue\\": \\"\\"\\n                    }\\n                  ],\\n                  \\"Type\\": \\"\\"\\n                }\\n              ],\\n              \\"Type\\": \\"\\"\\n            },\\n            \\"Lambda\\": \\"a&&b\\",\\n            \\"CheckType\\": 0,\\n            \\"Triggers\\": [\\n              \\"a\\"\\n            ]\\n          }\\n        ],\\n        \\"RuleScoreType\\": 1,\\n        \\"TaskFlowId\\": 1,\\n        \\"ScoreNumType\\": 1,\\n        \\"Matched\\": true,\\n        \\"NodeType\\": \\"0\\",\\n        \\"JudgeNodeName\\": \\"判断节点A\\",\\n        \\"RuleName\\": \\"规则A\\"\\n      }\\n    ],\\n    \\"HitTaskFlowList\\": [\\n      {\\n        \\"GraphFlow\\": {\\n          \\"Id\\": 0,\\n          \\"Rid\\": 0,\\n          \\"RuleName\\": \\"\\",\\n          \\"SkipWhenFirstSessionNodeMiss\\": true,\\n          \\"FlowRuleScoreType\\": 0,\\n          \\"ShowProperties\\": \\"\\",\\n          \\"Nodes\\": [\\n            {\\n              \\"Id\\": 0,\\n              \\"Rid\\": 0,\\n              \\"Name\\": \\"\\",\\n              \\"NodeType\\": \\"\\",\\n              \\"Index\\": 0,\\n              \\"Content\\": \\"\\",\\n              \\"Properties\\": {\\n                \\"Type\\": \\"\\",\\n                \\"Role\\": \\"\\",\\n                \\"SayType\\": \\"\\",\\n                \\"RuleScoreType\\": 0,\\n                \\"ScoreNum\\": 0,\\n                \\"ScoreType\\": 0,\\n                \\"ScoreRuleHitType\\": 0,\\n                \\"AutoReview\\": 0,\\n                \\"ScoreNumType\\": 0,\\n                \\"Lambda\\": \\"\\",\\n                \\"CheckType\\": 0,\\n                \\"Triggers\\": [\\n                  \\"\\"\\n                ],\\n                \\"BranchJudge\\": true,\\n                \\"CheckMoreSize\\": 0\\n              },\\n              \\"Conditions\\": [\\n                {\\n                  \\"Cid\\": \\"\\",\\n                  \\"Id\\": 0,\\n                  \\"Rid\\": \\"\\",\\n                  \\"Check_range\\": {\\n                    \\"RoleId\\": 0,\\n                    \\"Role\\": \\"\\",\\n                    \\"Anchor\\": {\\n                      \\"Cid\\": \\"\\",\\n                      \\"Location\\": \\"\\",\\n                      \\"Hit_time\\": 0\\n                    },\\n                    \\"Range\\": {\\n                      \\"From\\": 0,\\n                      \\"To\\": 0\\n                    },\\n                    \\"Absolute\\": true,\\n                    \\"AllSentencesSatisfy\\": true\\n                  },\\n                  \\"Operators\\": [\\n                    {\\n                      \\"Oid\\": \\"\\",\\n                      \\"Id\\": 0,\\n                      \\"Type\\": \\"\\",\\n                      \\"Param\\": {\\n                        \\"CustomerParam\\": {\\n                          \\"Field\\": \\"\\",\\n                          \\"FieldType\\": 0,\\n                          \\"DataType\\": 0,\\n                          \\"Symbol\\": 0,\\n                          \\"Value\\": \\"\\",\\n                          \\"ActualValue\\": \\"\\"\\n                        },\\n                        \\"Keywords\\": [\\n                          \\"\\"\\n                        ],\\n                        \\"Regex\\": \\"\\",\\n                        \\"NotRegex\\": \\"\\",\\n                        \\"Phrase\\": \\"\\",\\n                        \\"References\\": [\\n                          \\"\\"\\n                        ],\\n                        \\"Interval\\": 0,\\n                        \\"IntervalEnd\\": 0,\\n                        \\"Threshold\\": 0,\\n                        \\"In_sentence\\": true,\\n                        \\"Target\\": 0,\\n                        \\"From_end\\": true,\\n                        \\"Different_role\\": true,\\n                        \\"Target_role\\": \\"\\",\\n                        \\"RoleId\\": 0,\\n                        \\"Velocity\\": 0,\\n                        \\"VelocityInMint\\": 0,\\n                        \\"KeywordExtension\\": 0,\\n                        \\"Synonyms\\": {\\n                          \\"key\\": [\\n                            \\"\\"\\n                          ]\\n                        },\\n                        \\"Case_sensitive\\": true,\\n                        \\"Near_dialogue\\": true,\\n                        \\"MinWordSize\\": 0,\\n                        \\"Hit_time\\": 0,\\n                        \\"Excludes\\": [\\n                          \\"\\"\\n                        ],\\n                        \\"From\\": 0,\\n                        \\"CheckFirstSentence\\": true,\\n                        \\"Average\\": true,\\n                        \\"BeginType\\": \\"\\",\\n                        \\"EndType\\": \\"\\",\\n                        \\"CompareOperator\\": \\"\\",\\n                        \\"Pkey\\": \\"\\",\\n                        \\"Poutput_type\\": 0,\\n                        \\"SimilarlySentences\\": [\\n                          \\"\\"\\n                        ],\\n                        \\"LgfSentences\\": [\\n                          \\"\\"\\n                        ],\\n                        \\"Score\\": 0,\\n                        \\"ContextChatMatch\\": true,\\n                        \\"KeywordMatchSize\\": 0,\\n                        \\"MaxEmotionChangeValue\\": 0,\\n                        \\"CheckType\\": 0,\\n                        \\"KnowledgeTargetId\\": \\"\\",\\n                        \\"CategoryPathCode\\": \\"\\",\\n                        \\"KnowledgeTargetType\\": 0,\\n                        \\"KnowledgeTargetName\\": \\"\\",\\n                        \\"QuestionThreshold\\": \\"\\",\\n                        \\"AnswerThreshold\\": \\"\\",\\n                        \\"KnowledgeSentenceNum\\": 0,\\n                        \\"KnowledgeInfo\\": \\"\\",\\n                        \\"BotId\\": \\"\\",\\n                        \\"UseEasAlgorithm\\": true,\\n                        \\"Pvalues\\": [\\n                          \\"\\"\\n                        ],\\n                        \\"Similarity_threshold\\": 0,\\n                        \\"AntModelInfo\\": {\\n                          \\"key\\": \\"\\"\\n                        },\\n                        \\"DelayTime\\": 0\\n                      },\\n                      \\"Name\\": \\"\\",\\n                      \\"UserGroup\\": \\"\\",\\n                      \\"QualityCheckType\\": 0\\n                    }\\n                  ],\\n                  \\"Lambda\\": \\"\\",\\n                  \\"Exclusion\\": 0,\\n                  \\"Name\\": \\"\\",\\n                  \\"UserGroup\\": \\"\\"\\n                }\\n              ],\\n              \\"NextNodes\\": [\\n                {\\n                  \\"Index\\": 0,\\n                  \\"Name\\": \\"\\",\\n                  \\"NextNodeId\\": 0,\\n                  \\"Lambda\\": \\"\\",\\n                  \\"CheckType\\": 0,\\n                  \\"Triggers\\": [\\n                    \\"\\"\\n                  ]\\n                }\\n              ],\\n              \\"UseConditions\\": true\\n            }\\n          ]\\n        },\\n        \\"TaskFlowType\\": 0,\\n        \\"Rid\\": 1\\n      }\\n    ],\\n    \\"UnhitRuleReviewInfoList\\": [\\n      {\\n        \\"Rid\\": 2,\\n        \\"ConditionInfoList\\": [\\n          {\\n            \\"Cid\\": \\"\\",\\n            \\"Id\\": 0,\\n            \\"Rid\\": \\"\\",\\n            \\"Check_range\\": {\\n              \\"RoleId\\": 0,\\n              \\"Role\\": \\"\\",\\n              \\"Anchor\\": {\\n                \\"Cid\\": \\"\\",\\n                \\"Location\\": \\"\\",\\n                \\"Hit_time\\": 0\\n              },\\n              \\"Range\\": {\\n                \\"From\\": 0,\\n                \\"To\\": 0\\n              },\\n              \\"Absolute\\": true,\\n              \\"AllSentencesSatisfy\\": true\\n            },\\n            \\"Operators\\": [\\n              {\\n                \\"Oid\\": \\"\\",\\n                \\"Id\\": 0,\\n                \\"Type\\": \\"\\",\\n                \\"Param\\": {\\n                  \\"Keywords\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"Regex\\": \\"\\",\\n                  \\"NotRegex\\": \\"\\",\\n                  \\"Phrase\\": \\"\\",\\n                  \\"References\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"Interval\\": 0,\\n                  \\"IntervalEnd\\": 0,\\n                  \\"Threshold\\": 0,\\n                  \\"In_sentence\\": true,\\n                  \\"Target\\": 0,\\n                  \\"From_end\\": true,\\n                  \\"Different_role\\": true,\\n                  \\"Target_role\\": \\"\\",\\n                  \\"RoleId\\": 0,\\n                  \\"Velocity\\": 0,\\n                  \\"VelocityInMint\\": 0,\\n                  \\"KeywordExtension\\": 0,\\n                  \\"Synonyms\\": {\\n                    \\"key\\": [\\n                      \\"\\"\\n                    ]\\n                  },\\n                  \\"Case_sensitive\\": true,\\n                  \\"Near_dialogue\\": true,\\n                  \\"MinWordSize\\": 0,\\n                  \\"Hit_time\\": 0,\\n                  \\"Excludes\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"From\\": 0,\\n                  \\"CheckFirstSentence\\": true,\\n                  \\"Average\\": true,\\n                  \\"BeginType\\": \\"\\",\\n                  \\"EndType\\": \\"\\",\\n                  \\"CompareOperator\\": \\"\\",\\n                  \\"Pkey\\": \\"\\",\\n                  \\"Poutput_type\\": 0,\\n                  \\"SimilarlySentences\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"LgfSentences\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"Score\\": 0,\\n                  \\"ContextChatMatch\\": true,\\n                  \\"KeywordMatchSize\\": 0,\\n                  \\"MaxEmotionChangeValue\\": 0,\\n                  \\"CheckType\\": 0,\\n                  \\"KnowledgeTargetId\\": \\"\\",\\n                  \\"CategoryPathCode\\": \\"\\",\\n                  \\"KnowledgeTargetType\\": 0,\\n                  \\"KnowledgeTargetName\\": \\"\\",\\n                  \\"QuestionThreshold\\": \\"\\",\\n                  \\"AnswerThreshold\\": \\"\\",\\n                  \\"KnowledgeSentenceNum\\": 0,\\n                  \\"KnowledgeInfo\\": \\"\\",\\n                  \\"BotId\\": \\"\\",\\n                  \\"UseEasAlgorithm\\": true,\\n                  \\"Pvalues\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"Similarity_threshold\\": 0,\\n                  \\"AntModelInfo\\": {\\n                    \\"key\\": \\"\\"\\n                  },\\n                  \\"DelayTime\\": 0\\n                },\\n                \\"Name\\": \\"\\",\\n                \\"UserGroup\\": \\"\\",\\n                \\"QualityCheckType\\": 0\\n              }\\n            ],\\n            \\"Lambda\\": \\"\\",\\n            \\"Exclusion\\": 0,\\n            \\"Name\\": \\"\\",\\n            \\"UserGroup\\": \\"\\"\\n          }\\n        ],\\n        \\"Matched\\": true,\\n        \\"TaskFlowType\\": 0\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"96138D8D-XXXX-4E41-XXXX-77AED1088BBD\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '测试规则（新版质检）',
    ),
    'CreateQualityCheckScheme' => 
    array (
      'summary' => '对应前端功能位置：质检方案管理-新建质检任务。专有云URL：ip:port/api/qcs/CreateQualityCheckScheme.json。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'jsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入参JSON，具体参考请求参数补充说明。',
            'type' => 'string',
            'required' => true,
            'example' => '{"dataType":1,"name":"质检方案A","type":1}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'PlainResult<Long>',
            'description' => 'PlainResult<Long>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '新建的质检方案ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '12',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '76DB5D8C-5BD9-42A7-B527-5AF3A5F****',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，200表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**.',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Message' => 
                  array (
                    'description' => '消息的列表，忽略。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '消息，忽略。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": 12,\\n  \\"RequestId\\": \\"76DB5D8C-5BD9-42A7-B527-5AF3A5F****\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": {\\n    \\"Message\\": [\\n      \\"无\\"\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '新建质检方案',
      'requestParamsDescription' => '请求请参考文档《[`质检方案对象说明`](https://help.aliyun.com/document_detail/453310.html)》',
    ),
    'UpdateQualityCheckScheme' => 
    array (
      'summary' => '更新质检方案。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'jsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入参JSON，具体参考请求参数补充说明。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'BaseResult',
            'description' => 'BaseResult',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '96138D8D-8D26-4E41-BFF4-77AED1088BBD',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。

',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。

',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Message' => 
                  array (
                    'description' => '消息的列表，忽略。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '消息，忽略。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"96138D8D-8D26-4E41-BFF4-77AED1088BBD\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": {\\n    \\"Message\\": [\\n      \\"无\\"\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '更新质检方案',
      'requestParamsDescription' => '请求请参考文档《[`质检方案对象说明`](https://help.aliyun.com/document_detail/453310.html)》',
    ),
    'GetQualityCheckScheme' => 
    array (
      'summary' => '对应前端功能位置：质检方案管理-查询。专有云URL：ip:port/api/qcs/GetQualityCheckScheme.json。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'jsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入参JSON，具体参考请求参数补充说明。',
            'type' => 'string',
            'required' => false,
            'example' => '{"schemeId":"187","ruleRequireInfos":["BusinessNameInfo","RuleCategory"]}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => 'baseMeAgentId',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'PlainResult<QualityCheckScheme>',
            'description' => 'PlainResult<QualityCheckScheme>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => 'QualityCheckScheme
质检方案的Json，具体参考文档《[`质检任务对象说明`](~~453292~~)》',
                'type' => 'object',
                'properties' => 
                array (
                  'SchemeId' => 
                  array (
                    'title' => '质检方案id',
                    'description' => '质检方案ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '112**',
                  ),
                  'Name' => 
                  array (
                    'description' => '质检方案名称。',
                    'type' => 'string',
                    'example' => 'xxx',
                  ),
                  'Description' => 
                  array (
                    'description' => '描述信息。',
                    'type' => 'string',
                    'example' => '售前使用',
                  ),
                  'SchemeTemplateId' => 
                  array (
                    'description' => '质检方案模板ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'DataType' => 
                  array (
                    'description' => '质检方案的数据类型，可能值：0文本；1音频。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Type' => 
                  array (
                    'description' => '质检方案类型，可能值：0系统内置；1自定义创建。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'TemplateType' => 
                  array (
                    'description' => '质检方案模板的类型，可能值：1系统内置；2自定义创建。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Status' => 
                  array (
                    'description' => '状态：0：已删除，1：已发布，2：未发布，3：已更新未发布，默认2',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'RuleIds' => 
                  array (
                    'description' => '关联的规则ID列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '规则ID。',
                      'type' => 'string',
                      'example' => '1302493',
                    ),
                  ),
                  'RuleList' => 
                  array (
                    'description' => '规则列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '规则的JSON，具体参考文档《[`规则对象说明`](https://help.aliyun.com/document_detail/453053.html)》',
                      '$ref' => '#/components/schemas/RulesInfo',
                    ),
                  ),
                  'CreateUserName' => 
                  array (
                    'description' => '创建用户名',
                    'type' => 'string',
                    'example' => 'xxx',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '任务创建时间。',
                    'type' => 'string',
                    'example' => '1616113198000',
                  ),
                  'UpdateUserName' => 
                  array (
                    'description' => '上次更新用户名',
                    'type' => 'string',
                    'example' => 'xxx',
                  ),
                  'UpdateTime' => 
                  array (
                    'description' => '最后更新时间。',
                    'type' => 'string',
                    'example' => '1616113198000',
                  ),
                  'Version' => 
                  array (
                    'description' => '版本号。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1616113198000',
                  ),
                  'SchemeCheckTypeList' => 
                  array (
                    'description' => '质检维度列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '质检维度',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CheckType' => 
                        array (
                          'description' => '质检维度类型Id',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'CheckName' => 
                        array (
                          'description' => '质检维度名称。',
                          'type' => 'string',
                          'example' => '服务规范性检测',
                        ),
                        'SourceScore' => 
                        array (
                          'description' => '原始得分。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '10',
                        ),
                        'Score' => 
                        array (
                          'description' => '质检维度分数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '20',
                        ),
                        'Enable' => 
                        array (
                          'description' => '启用状态，可能值：0（禁用）；1（启用）。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'SchemeId' => 
                        array (
                          'description' => '质检方案ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '32',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '96138D8D-8D26-4E41-BFF4-77AED1088BBD',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，200表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'description' => '返回提示信息列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回提示信息',
                  'type' => 'string',
                  'example' => 'xxx',
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"SchemeId\\": 0,\\n    \\"Name\\": \\"xxx\\",\\n    \\"Description\\": \\"售前使用\\",\\n    \\"SchemeTemplateId\\": 1,\\n    \\"DataType\\": 1,\\n    \\"Type\\": 1,\\n    \\"TemplateType\\": 1,\\n    \\"Status\\": 1,\\n    \\"RuleIds\\": [\\n      \\"1302493\\"\\n    ],\\n    \\"RuleList\\": [\\n      {\\n        \\"Conditions\\": [\\n          {\\n            \\"Cid\\": \\"\\",\\n            \\"Id\\": 0,\\n            \\"Rid\\": \\"\\",\\n            \\"Check_range\\": {\\n              \\"RoleId\\": 0,\\n              \\"Role\\": \\"\\",\\n              \\"Anchor\\": {\\n                \\"Cid\\": \\"\\",\\n                \\"Location\\": \\"\\",\\n                \\"Hit_time\\": 0\\n              },\\n              \\"Range\\": {\\n                \\"From\\": 0,\\n                \\"To\\": 0\\n              },\\n              \\"Absolute\\": true,\\n              \\"AllSentencesSatisfy\\": true\\n            },\\n            \\"Operators\\": [\\n              {\\n                \\"Oid\\": \\"\\",\\n                \\"Id\\": 0,\\n                \\"Type\\": \\"\\",\\n                \\"Param\\": {\\n                  \\"CustomerParam\\": {\\n                    \\"Field\\": \\"\\",\\n                    \\"FieldType\\": 0,\\n                    \\"DataType\\": 0,\\n                    \\"Symbol\\": 0,\\n                    \\"Value\\": \\"\\",\\n                    \\"ActualValue\\": \\"\\"\\n                  },\\n                  \\"Keywords\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"Regex\\": \\"\\",\\n                  \\"NotRegex\\": \\"\\",\\n                  \\"Phrase\\": \\"\\",\\n                  \\"References\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"Interval\\": 0,\\n                  \\"IntervalEnd\\": 0,\\n                  \\"Threshold\\": 0,\\n                  \\"In_sentence\\": true,\\n                  \\"Target\\": 0,\\n                  \\"From_end\\": true,\\n                  \\"Different_role\\": true,\\n                  \\"Target_role\\": \\"\\",\\n                  \\"RoleId\\": 0,\\n                  \\"Velocity\\": 0,\\n                  \\"VelocityInMint\\": 0,\\n                  \\"KeywordExtension\\": 0,\\n                  \\"Synonyms\\": {\\n                    \\"key\\": [\\n                      \\"\\"\\n                    ]\\n                  },\\n                  \\"Case_sensitive\\": true,\\n                  \\"Near_dialogue\\": true,\\n                  \\"MinWordSize\\": 0,\\n                  \\"Hit_time\\": 0,\\n                  \\"Excludes\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"From\\": 0,\\n                  \\"CheckFirstSentence\\": true,\\n                  \\"Average\\": true,\\n                  \\"BeginType\\": \\"\\",\\n                  \\"EndType\\": \\"\\",\\n                  \\"CompareOperator\\": \\"\\",\\n                  \\"Pkey\\": \\"\\",\\n                  \\"Poutput_type\\": 0,\\n                  \\"SimilarlySentences\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"LgfSentences\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"Score\\": 0,\\n                  \\"ContextChatMatch\\": true,\\n                  \\"KeywordMatchSize\\": 0,\\n                  \\"MaxEmotionChangeValue\\": 0,\\n                  \\"CheckType\\": 0,\\n                  \\"KnowledgeTargetId\\": \\"\\",\\n                  \\"CategoryPathCode\\": \\"\\",\\n                  \\"KnowledgeTargetType\\": 0,\\n                  \\"KnowledgeTargetName\\": \\"\\",\\n                  \\"QuestionThreshold\\": \\"\\",\\n                  \\"AnswerThreshold\\": \\"\\",\\n                  \\"KnowledgeSentenceNum\\": 0,\\n                  \\"KnowledgeInfo\\": \\"\\",\\n                  \\"BotId\\": \\"\\",\\n                  \\"UseEasAlgorithm\\": true,\\n                  \\"Pvalues\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"Similarity_threshold\\": 0,\\n                  \\"AntModelInfo\\": {\\n                    \\"key\\": \\"\\"\\n                  },\\n                  \\"DelayTime\\": 0\\n                },\\n                \\"Name\\": \\"\\",\\n                \\"UserGroup\\": \\"\\",\\n                \\"QualityCheckType\\": 0\\n              }\\n            ],\\n            \\"Lambda\\": \\"\\",\\n            \\"Exclusion\\": 0,\\n            \\"Name\\": \\"\\",\\n            \\"UserGroup\\": \\"\\"\\n          }\\n        ],\\n        \\"Rules\\": [\\n          {\\n            \\"Status\\": 0,\\n            \\"IsDelete\\": 0,\\n            \\"StartTime\\": \\"\\",\\n            \\"EndTime\\": \\"\\",\\n            \\"BusinessCategoryNameList\\": [\\n              \\"\\"\\n            ],\\n            \\"Weight\\": \\"\\",\\n            \\"IsOnline\\": 0,\\n            \\"CreateEmpid\\": \\"\\",\\n            \\"CreateEmpName\\": \\"\\",\\n            \\"CreateTime\\": \\"\\",\\n            \\"LastUpdateTime\\": \\"\\",\\n            \\"LastUpdateEmpid\\": \\"\\",\\n            \\"LastUpdateEmpName\\": \\"\\",\\n            \\"Comments\\": \\"\\",\\n            \\"Deny\\": 0,\\n            \\"ScoreSubId\\": 0,\\n            \\"ScoreName\\": \\"\\",\\n            \\"ScoreSubName\\": \\"\\",\\n            \\"ScoreNum\\": 0,\\n            \\"ScoreType\\": 0,\\n            \\"ScoreDeleted\\": true,\\n            \\"OperationMode\\": 0,\\n            \\"Meet\\": 0,\\n            \\"Dialogues\\": [\\n              {\\n                \\"Id\\": 0,\\n                \\"Content\\": [\\n                  {\\n                    \\"HourMinSec\\": \\"\\",\\n                    \\"Role\\": \\"\\",\\n                    \\"Identity\\": \\"\\",\\n                    \\"EmotionValue\\": 0,\\n                    \\"SpeechRate\\": 0,\\n                    \\"Words\\": \\"\\",\\n                    \\"End\\": 0,\\n                    \\"SilenceDuration\\": 0,\\n                    \\"BeginTime\\": 0,\\n                    \\"Begin\\": 0\\n                  }\\n                ],\\n                \\"Name\\": \\"\\",\\n                \\"UserGroup\\": \\"\\"\\n              }\\n            ],\\n            \\"Effective\\": 0,\\n            \\"FullCycle\\": 0,\\n            \\"EffectiveStartTime\\": \\"\\",\\n            \\"EffectiveEndTime\\": \\"\\",\\n            \\"QualityCheckType\\": 0,\\n            \\"Level\\": 0,\\n            \\"GraphFlow\\": \\"\\",\\n            \\"TaskFlowType\\": 0,\\n            \\"CheckType\\": 0,\\n            \\"SchemeCheckType\\": {\\n              \\"CheckType\\": 0,\\n              \\"CheckName\\": \\"\\",\\n              \\"SourceScore\\": 0,\\n              \\"Score\\": 0,\\n              \\"Enable\\": 0,\\n              \\"SchemeId\\": 0,\\n              \\"SchemeScoreInfoList\\": [\\n                {\\n                  \\"Rid\\": 0,\\n                  \\"Name\\": \\"\\",\\n                  \\"TaskFlowId\\": 0,\\n                  \\"TaskFlowName\\": \\"\\",\\n                  \\"ScoreType\\": 0,\\n                  \\"ScoreNumType\\": 0,\\n                  \\"ScoreNum\\": 0,\\n                  \\"ScoreRuleHitType\\": 0\\n                }\\n              ],\\n              \\"TaskFlowScoreInfoList\\": [\\n                {\\n                  \\"TaskFlowId\\": 0,\\n                  \\"TaskFlowName\\": \\"\\",\\n                  \\"TaskFlowType\\": 0,\\n                  \\"SchemeScoreInfoList\\": [\\n                    {\\n                      \\"Rid\\": 0,\\n                      \\"Name\\": \\"\\",\\n                      \\"TaskFlowId\\": 0,\\n                      \\"TaskFlowName\\": \\"\\",\\n                      \\"ScoreType\\": 0,\\n                      \\"ScoreNumType\\": 0,\\n                      \\"ScoreNum\\": 0,\\n                      \\"ScoreRuleHitType\\": 0\\n                    }\\n                  ]\\n                }\\n              ]\\n            },\\n            \\"TargetType\\": 0,\\n            \\"ConfigType\\": 0,\\n            \\"ScoreNumType\\": 0,\\n            \\"ScoreRuleHitType\\": 0,\\n            \\"SchemeId\\": 0,\\n            \\"SchemeRuleMappingId\\": 0,\\n            \\"SchemeName\\": \\"\\",\\n            \\"ModifyType\\": 0,\\n            \\"SortIndex\\": 0,\\n            \\"RuleType\\": 0,\\n            \\"Rid\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"TaskFlowId\\": 0,\\n            \\"Lambda\\": \\"\\",\\n            \\"Triggers\\": [\\n              \\"\\"\\n            ],\\n            \\"ExternalProperty\\": 0,\\n            \\"Type\\": 0,\\n            \\"RuleCategoryName\\": \\"\\",\\n            \\"AutoReview\\": 0,\\n            \\"RuleScoreType\\": 0,\\n            \\"ScoreId\\": 0\\n          }\\n        ],\\n        \\"Dialogues\\": [\\n          {\\n            \\"Id\\": 0,\\n            \\"Content\\": [\\n              {\\n                \\"HourMinSec\\": \\"\\",\\n                \\"Role\\": \\"\\",\\n                \\"Identity\\": \\"\\",\\n                \\"EmotionValue\\": 0,\\n                \\"SpeechRate\\": 0,\\n                \\"Words\\": \\"\\",\\n                \\"End\\": 0,\\n                \\"SilenceDuration\\": 0,\\n                \\"BeginTime\\": 0,\\n                \\"Begin\\": 0\\n              }\\n            ],\\n            \\"Name\\": \\"\\",\\n            \\"UserGroup\\": \\"\\"\\n          }\\n        ],\\n        \\"Count\\": 0,\\n        \\"PageSize\\": 0,\\n        \\"PageNumber\\": 0\\n      }\\n    ],\\n    \\"CreateUserName\\": \\"xxx\\",\\n    \\"CreateTime\\": \\"1616113198000\\",\\n    \\"UpdateUserName\\": \\"xxx\\",\\n    \\"UpdateTime\\": \\"1616113198000\\",\\n    \\"Version\\": 1616113198000,\\n    \\"SchemeCheckTypeList\\": [\\n      {\\n        \\"CheckType\\": 0,\\n        \\"CheckName\\": \\"服务规范性检测\\",\\n        \\"SourceScore\\": 10,\\n        \\"Score\\": 20,\\n        \\"Enable\\": 1,\\n        \\"SchemeId\\": 32\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"96138D8D-8D26-4E41-BFF4-77AED1088BBD\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": [\\n    \\"xxx\\"\\n  ],\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '获取质检方案详情',
      'requestParamsDescription' => '| 属性 | 值类型 | 是否必须 | 描述 | 示例 |
| --- | --- | --- | --- | --- |
| schemeId | Long | 是 | 质检方案ID | 187 |
| ruleRequireInfos | List | 否 | 所需信息 | ["BusinessNameInfo","RuleCategory"] |
| ruleRequireInfos.item | String |  | 可选项：ConditionInfo（条件信息），OperatorInfo（算子信息）GraphFlowInfos（高级流程信息），GraphFlowInterruptRule（中断规则信息），BusinessNameInfo（业务类型信息），ScoreInfo（得分信息），RuleCategory（规则类型信息），SchemeNames（质检方案名） | |',
    ),
    'ListQualityCheckScheme' => 
    array (
      'summary' => '获取质检方案列表。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{
      "name": "质检方案A"
}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => 'baseMeAgentId',
            'type' => 'integer',
            'format' => 'int64',
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
            'description' => '返回数据',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '82C91484-B2D5-4D2A-A21F-A6D73F4***	',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：**true**表示成功；**false/null**表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ResultCountId' => 
              array (
                'description' => '内部字段，请忽略。',
                'type' => 'string',
                'example' => 'XXX',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页显示条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Count' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '22',
              ),
              'Data' => 
              array (
                'description' => '质检方案列表数据',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '质检方案详情',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SchemeId' => 
                    array (
                      'title' => '质检方案Id',
                      'description' => '质检方案ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '112**',
                    ),
                    'Name' => 
                    array (
                      'title' => '质检方案名称',
                      'description' => '质检方案名称',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Description' => 
                    array (
                      'title' => '描述',
                      'description' => '描述信息。',
                      'type' => 'string',
                      'example' => '售前使用',
                    ),
                    'DataType' => 
                    array (
                      'description' => '质检方案的数据类型，可能值：0文本；1音频。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Type' => 
                    array (
                      'description' => '质检方案类型，可能值：0系统内置；1自定义创建。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'TemplateType' => 
                    array (
                      'description' => '质检方案模板的类型，可能值：1系统内置；2自定义创建。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Status' => 
                    array (
                      'description' => '质检方案的状态，可能值：0已删除；1已发布；2未发布；3已更新未发布。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'CreateUserName' => 
                    array (
                      'title' => '创建人',
                      'description' => '创建者名字',
                      'type' => 'string',
                      'example' => '张三',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '2022-05-10T09:34Z',
                    ),
                    'UpdateUserName' => 
                    array (
                      'title' => '更新人',
                      'description' => '更新者名字',
                      'type' => 'string',
                      'example' => '李四',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '更新时间',
                      'type' => 'string',
                      'example' => '2022-05-10T10:34Z',
                    ),
                    'SchemeCheckTypeList' => 
                    array (
                      'description' => '质检维度列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '质检维度',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'CheckType' => 
                          array (
                            'description' => '质检维度type',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'Enable' => 
                          array (
                            'description' => '启用状态，可能值：0（禁用）；1（启用）。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'CheckName' => 
                          array (
                            'description' => '质检维度名称。',
                            'type' => 'string',
                            'example' => '服务规范性检测',
                          ),
                          'TargetType' => 
                          array (
                            'description' => '内置字段，请忽略。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '10',
                          ),
                          'Score' => 
                          array (
                            'description' => '质检维度分数。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '20',
                          ),
                        ),
                      ),
                    ),
                    'RuleList' => 
                    array (
                      'title' => '规则列表',
                      'description' => '检测项列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '命中规则信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Rules' => 
                          array (
                            'description' => '规则信息：这里只有一条，预留扩展',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '规则基本信息',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Rid' => 
                                array (
                                  'description' => '检测项ID',
                                  'type' => 'integer',
                                  'format' => 'int64',
                                  'example' => '12',
                                ),
                                'Name' => 
                                array (
                                  'description' => '检测项名称',
                                  'type' => 'string',
                                  'example' => '测试规则',
                                ),
                                'RuleScoreType' => 
                                array (
                                  'description' => '是否计分，可能值：1（不计分）；3（计分）',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '1',
                                ),
                                'ScoreNum' => 
                                array (
                                  'description' => '分数',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '2',
                                ),
                                'ScoreType' => 
                                array (
                                  'description' => '加减分，可能值：1（加分）；3（减分）',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '1',
                                ),
                                'CheckType' => 
                                array (
                                  'description' => '所属质检维度。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '1',
                                ),
                                'TargetType' => 
                                array (
                                  'description' => '检测项应用场景，可能值：10（普通检测项）；11（SOP流程检测项）',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '10',
                                ),
                                'ScoreNumType' => 
                                array (
                                  'description' => '计分类型，可能值：0（触发规则后加减分）；1（触发规则后一次性得分）',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '0',
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'Version' => 
                    array (
                      'title' => '质检方案版本',
                      'description' => '质检方案版本',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"82C91484-B2D5-4D2A-A21F-A6D73F4***\\\\t\\",\\n  \\"Success\\": true,\\n  \\"ResultCountId\\": \\"XXX\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"Count\\": 22,\\n  \\"Data\\": [\\n    {\\n      \\"SchemeId\\": 0,\\n      \\"Name\\": \\"test\\",\\n      \\"Description\\": \\"售前使用\\",\\n      \\"DataType\\": 1,\\n      \\"Type\\": 1,\\n      \\"TemplateType\\": 1,\\n      \\"Status\\": 1,\\n      \\"CreateUserName\\": \\"张三\\",\\n      \\"CreateTime\\": \\"2022-05-10T09:34Z\\",\\n      \\"UpdateUserName\\": \\"李四\\",\\n      \\"UpdateTime\\": \\"2022-05-10T10:34Z\\",\\n      \\"SchemeCheckTypeList\\": [\\n        {\\n          \\"CheckType\\": 1,\\n          \\"Enable\\": 1,\\n          \\"CheckName\\": \\"服务规范性检测\\",\\n          \\"TargetType\\": 10,\\n          \\"Score\\": 20\\n        }\\n      ],\\n      \\"RuleList\\": [\\n        {\\n          \\"Rules\\": [\\n            {\\n              \\"Rid\\": 12,\\n              \\"Name\\": \\"测试规则\\",\\n              \\"RuleScoreType\\": 1,\\n              \\"ScoreNum\\": 2,\\n              \\"ScoreType\\": 1,\\n              \\"CheckType\\": 1,\\n              \\"TargetType\\": 10,\\n              \\"ScoreNumType\\": 0\\n            }\\n          ]\\n        }\\n      ],\\n      \\"Version\\": 1\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListQualityCheckSchemeResponse>\\n    <RequestId>82C91484-B2D5-4D2A-A21F-A6D73F4***\\t</RequestId>\\n    <Success>true</Success>\\n    <ResultCountId>XXX</ResultCountId>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <Count>22</Count>\\n    <Data>\\n        <Name>test</Name>\\n        <Description>售前使用</Description>\\n        <DataType>1</DataType>\\n        <Type>1</Type>\\n        <TemplateType>1</TemplateType>\\n        <Status>1</Status>\\n        <CreateUserName>张三</CreateUserName>\\n        <CreateTime>2022-05-10T09:34Z</CreateTime>\\n        <UpdateUserName>李四</UpdateUserName>\\n        <UpdateTime>2022-05-10T10:34Z</UpdateTime>\\n        <SchemeCheckTypeList>\\n            <CheckType>1</CheckType>\\n            <Enable>1</Enable>\\n            <CheckName>服务规范性检测</CheckName>\\n            <TargetType>10</TargetType>\\n            <Score>20</Score>\\n        </SchemeCheckTypeList>\\n        <RuleList>\\n            <Rules>\\n                <Rid>12</Rid>\\n                <Name>测试规则</Name>\\n                <RuleScoreType>1</RuleScoreType>\\n                <ScoreNum>2</ScoreNum>\\n                <ScoreType>1</ScoreType>\\n                <CheckType>1</CheckType>\\n            </Rules>\\n        </RuleList>\\n    </Data>\\n</ListQualityCheckSchemeResponse>","errorExample":""}]',
      'title' => '获取质检方案列表',
      'requestParamsDescription' => '| 属性         | 值类型  | 是否必须 | 描述                                                         | 默认值                                 | 示例                                                         |
| ------------ | ------- | -------- | ------------------------------------------------------------ | -------------------------------------- | ------------------------------------------------------------ |
| schemeId     | Long    | 否       | 质检方案ID| | 123 |
| name         | String  | 否       | 质检方案名称| | 质检方案A|
| type         | Integer | 否       | 质检方案类型，可能值：0（系统内置）；1（用户自定义 ）        |                                        |                  1                                            |
| dataType     | Integer | 否       | 质检方案数据类型：0（文本），1（音频）                       |                                        |                  1                                            |
| status       | Integer | 否       | 状态，可能值：0（已删除），1（已发布），2（未发布），3（已更新未发布） |                                        |                 1                                             |
| requireInfos | List    | 否       | 控制质检方案字段可选择性返回，RuleDetailInfo：对应ruleList字段。CheckTypeListInfo：对应schemeCheckTypeList字段。 | ["CheckTypeListInfo","RuleDetailInfo"] | {"jsonStr": "{\\"pageNumber\\": 1, \\"pageSize\\": 1, \\"requireInfos\\": [\\"CheckTypeListInfo\\"]}"} |
| pageNumber   | Integer | 否       | 当前页数                                                     | 1                                      |1|
| pageSize     | Integer | 否       | 每页显示条数                                                 | 10                                     |10|',
    ),
    'DeleteQualityCheckScheme' => 
    array (
      'summary' => '对应前端功能位置：质检方案管理-任一数据右侧删除。专有云URL：ip:port/api/qcs/DeleteQualityCheckScheme.json。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'jsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入参JSON，具体参考请求参数补充说明。',
            'type' => 'string',
            'required' => false,
            'example' => '{"schemeId":191}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'BaseResult',
            'description' => 'BaseResult',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '106C6CA0-282D-4AF7-85F0-D2D24***',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。调用方可根据此字段来判断请求是否成功：**true**表示成功**false/null**表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，200表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。

',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Message' => 
                  array (
                    'description' => '消息的列表，忽略。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '消息，忽略。',
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"106C6CA0-282D-4AF7-85F0-D2D24***\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": {\\n    \\"Message\\": [\\n      \\"\\"\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '删除质检方案',
      'requestParamsDescription' => '### JsonStr说明
| 属性 | 值类型 | 是否必须 | 描述 |
| --- | --- | --- | --- |
| schemeId | Integer | 是 | 质检方案ID|',
    ),
    'UpdateRuleToScheme' => 
    array (
      'summary' => '对应前端功能位置：质检方案管理-新建质检任务或编辑-关联质检规则。专有云URL：ip:port/api/qcs/UpdateRuleToScheme.json。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'jsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入参JSON，具体参考请求参数补充说明。',
            'type' => 'string',
            'required' => false,
            'example' => '{"schemeId":"10","schemeRules":[{"ruleId":229,"checkType":0}]}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'PlainResult<Long>',
            'description' => 'PlainResult<Long>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '质检方案ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '30',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '9987D326-83D9-4A42-B9A5-0B27F9B40539',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。调用方可根据此字段来判断请求是否成功：**true**表示成功**false/null**表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。
',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Message' => 
                  array (
                    'description' => '消息的列表，忽略。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '消息，忽略。',
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": 30,\\n  \\"RequestId\\": \\"9987D326-83D9-4A42-B9A5-0B27F9B40539\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": {\\n    \\"Message\\": [\\n      \\"\\"\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '更新质检方案中的规则',
      'requestParamsDescription' => '### JsonStr说明
| 属性 | 值类型 | 是否必须 | 描述 |
| --- | --- | --- | --- |
| schemeId | String | 是 | 质检方案ID |
| schemeRules | Array<schemeRule> | schemeRules和ridDeleteSet至少传入一个 | 待绑定的规则列表 |
| schemeRule.ruleId | Integer | 是 | 规则ID |
| schemeRule.checkType | Integer | 是 | 质检维度ID |
| ridDeleteSet | Array<Integer> | schemeRules和ridDeleteSet至少传入一个 | 待解绑的规则ID |  

可以在质检方案中对规则进行绑定和解绑操作。
质检方案ID和质检维度ID可以通过接口获取质检方案（GetQualityCheckScheme）查询',
    ),
    'CreateCheckTypeToScheme' => 
    array (
      'summary' => '对应前端功能位置：质检方案管理-新增质检维度或编辑-新增质检维度。专有云URL：ip:port/api/qcs/CreateCheckTypeToScheme.json。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'jsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入参JSON，具体参考请求参数补充说明。',
            'type' => 'string',
            'required' => false,
            'example' => '{"schemeId":"187","checkName":"质检维度名","sourceScore":20}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'PlainResult<Long>',
            'description' => 'PlainResult<Long>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '质检维度ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '106C6CA0-282D-4AF7-85F0-D2D24F4CE647',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Message' => 
                  array (
                    'description' => '出错时表示出错详情，当输出多条信息时使用。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '出错时表示出错详情，当输出多条信息时使用。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": 5,\\n  \\"RequestId\\": \\"106C6CA0-282D-4AF7-85F0-D2D24F4CE647\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": {\\n    \\"Message\\": [\\n      \\"无\\"\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '新增质检维度',
      'requestParamsDescription' => '### JsonStr说明
| 属性 | 值类型 | 是否必须 | 描述 |
| --- | --- | --- | --- |
| schemeId | Inetger | 是 |质检方案ID |
| checkName | Inetger | 是 | 质检维度名称|
| sourceScore | Inetger | 是 | 质检分数 |',
    ),
    'UpdateCheckTypeToScheme' => 
    array (
      'summary' => '对应前端功能位置：质检方案管理-新建质检任务或编辑-质检维度名称旁编辑图标。专有云URL：ip:port/api/qcs/UpdateCheckTypeToScheme.json。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'jsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入参JSON，具体参考请求参数补充说明。',
            'type' => 'string',
            'required' => false,
            'example' => '{"schemeId":"187","checkName":"服务规范性检测2","sourceScore":20,"checkType":0}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => 'baseMeAgentId',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'PlainResult<Long>',
            'description' => 'PlainResult<Long>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回结果',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '4',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F190ADE9-619A-447D-84E3-7E241A5C428E',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。

',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Message' => 
                  array (
                    'description' => '消息的列表，忽略。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '消息，忽略。',
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": 4,\\n  \\"RequestId\\": \\"F190ADE9-619A-447D-84E3-7E241A5C428E\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": {\\n    \\"Message\\": [\\n      \\"\\"\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '更新质检维度',
      'requestParamsDescription' => '### JsonStr说明
| 属性 | 值类型 | 是否必须 | 描述 |
| --- | --- | --- | --- |
| schemeId | Inetger | 是 | 质检方案ID |
| checkName | String | 否 | 质检维度名 |
| sourceScore | Inetger | 否 | 质检分数 |
| enable | Inetger | 否 | 是否开启 |',
    ),
    'AddRuleCategory' => 
    array (
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
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一个JSON格式的字符串，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"typeName":"规则类型A"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => 'baseMeAgentId',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '响应信息',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D10B9203-1A6A-49DA-AE56-4D160DD37DBC',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Select' => 
                  array (
                    'description' => '是否选择新增的规则类型',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'Type' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"D10B9203-1A6A-49DA-AE56-4D160DD37DBC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Select\\": false,\\n    \\"Type\\": 0\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AddRuleCategoryResponse>\\r\\n    <Data>\\r\\n        <Select>false</Select>\\r\\n    </Data>\\r\\n    <Message>successful</Message>\\r\\n    <RequestId>D10B9203-1A6A-49DA-AE56-4D160DD37DBC</RequestId>\\r\\n    <Success>true</Success>\\r\\n    <Code>200</Code>\\r\\n</AddRuleCategoryResponse>","errorExample":""}]',
      'title' => '新增规则类型',
      'summary' => '新增规则类型。',
      'requestParamsDescription' => '**请求参数Json字符串信息**
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| typeName| String| 是      |规则类型名称 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => '### 调用示例
```
        AddRuleCategoryRequest addRuleCategoryRequest = new AddRuleCategoryRequest();
        addRuleCategoryRequest.setAcceptFormat(FormatType.JSON);
        Map<String, Object> map = Maps.newHashMap();
        map.put("typeName", "***");
        addRuleCategoryRequest.setJsonStr(JSON.toJSONString(map));
        AddRuleCategoryResponse response = client.getAcsResponse(addRuleCategoryRequest);
```',
    ),
    'GetRuleCategory' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传值为空字符串即可',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '""',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F190ADE9-619A-447D-84E3-7E241A5C428E',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'RuleCountInfo' => 
                  array (
                    'description' => '返回结果',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '规则类型type',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '22',
                        ),
                        'TypeName' => 
                        array (
                          'description' => '规则类型的名称',
                          'type' => 'string',
                          'example' => '客服组',
                        ),
                        'Select' => 
                        array (
                          'description' => '选择情况',
                          'type' => 'boolean',
                          'example' => 'false',
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
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"F190ADE9-619A-447D-84E3-7E241A5C428E\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"RuleCountInfo\\": [\\n      {\\n        \\"Type\\": 22,\\n        \\"TypeName\\": \\"客服组\\",\\n        \\"Select\\": false\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Message>successful</Message>\\n<RequestId>85CE3532-DC0D-4EE8-B4F1-563A377BAC51</RequestId>\\n<Data>\\n    <RuleCountInfo>\\n        <Type>1</Type>\\n        <TypeName>服务规范</TypeName>\\n        <Select>false</Select>\\n    </RuleCountInfo>\\n    <RuleCountInfo>\\n        <Type>29</Type>\\n        <TypeName>类型1</TypeName>\\n        <Select>false</Select>\\n    </RuleCountInfo>\\n    <RuleCountInfo>\\n        <Type>30</Type>\\n        <TypeName>类型2</TypeName>\\n        <Select>false</Select>\\n    </RuleCountInfo>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '获取规则类型列表',
      'summary' => '获取规则类型列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DelRuleCategory' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"type":"规则类型ID"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '响应信息',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'xxx',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回的结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Select' => 
                  array (
                    'description' => '是否选择新的规则类型',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"xxx\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Select\\": false\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DelRuleCategoryResponse>\\r\\n    <code>200</code>\\r\\n    <data>\\r\\n        <select>false</select>\\r\\n    </data>\\r\\n    <message>successful</message>\\r\\n    <requestId>xxx</requestId>\\r\\n    <success>true</success>\\r\\n</DelRuleCategoryResponse>","errorExample":""}]',
      'title' => '删除规则类型',
      'summary' => '删除规则类型。',
      'requestParamsDescription' => '**请求参数Json字符串信息**
|   属性  |   值类型   |  是否必须  |  说明  |
|:---------|:-------|:---------|:---------|
| type | Integer |    是      |  规则类型ID  |',
      'responseParamsDescription' => ' ',
      'extraInfo' => '###  调用示例
```
        DelRuleCategoryRequest delRuleCategoryRequest = new DelRuleCategoryRequest();
        delRuleCategoryRequest.setAcceptFormat(FormatType.JSON);
        Map<String, Object> map = Maps.newHashMap();
        map.put("type", 1);
        delRuleCategoryRequest.setJsonStr(JSON.toJSONString(map));
        DelRuleCategoryReqsponse response = client.getAcsResponse(delRuleCategoryRequest);
```',
    ),
    'AddBusinessCategory' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"name":"适用业务名称"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '响应码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '响应信息',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Data' => 
              array (
                'description' => '业务类型ID',
                'type' => 'string',
                'example' => '348193421',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '76DB5D8C-5BD9-42A7-B527-5AF3A5F83F12',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": \\"348193421\\",\\n  \\"RequestId\\": \\"76DB5D8C-5BD9-42A7-B527-5AF3A5F83F12\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AddBusinessCategoryResponse>\\r\\n    <code>200</code>\\r\\n    <data>348193421</data>\\r\\n    <message>successful</message>\\r\\n    <requestId>76DB5D8C-5BD9-42A7-B527-5AF3A5F83F12</requestId>\\r\\n    <success>true</success>\\r\\n</AddBusinessCategoryResponse>","errorExample":""}]',
      'title' => '新增业务类型',
      'summary' => '新增业务类型。',
      'requestParamsDescription' => '**请求参数Json字符串信息**
|  属性  |  值类型  |  是否必须  |   说明  |
|:---------|:-------|:---------|:---------|
| name | String |     是      |  适用业务名称  |
| serviceType | int |     否      |  大的业务分类  |
| originalId | int |     否      |  源业务类型ID  |',
      'responseParamsDescription' => ' ',
      'extraInfo' => '### 调用示例

```
AddBusinessCategoryRequest addBusinessCategoryRequest = new AddBusinessCategoryRequest();
addBusinessCategoryRequest.setAcceptFormat(FormatType.JSON);
Map<String, Object> callMap = Maps.newHashMap();
callMap.put("name","测试123");
addBusinessCategoryRequest.setJsonStr(JSON.toJSONString(callMap));
AddBusinessCategoryResponse response = client.getAcsResponse(addBusinessCategoryRequest);
```',
    ),
    'DeleteBusinessCategory' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"bid ":"适用业务ID"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因.',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**.',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Data' => 
              array (
                'description' => '返回的结果',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4987D326-83D9-4A42-B9A5-0B27F9B40539',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。

调用方可根据此字段来判断请求是否成功：

- **true**表示成功
- **false/null**表示失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"4987D326-83D9-4A42-B9A5-0B27F9B40539\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteBusinessCategoryResponse>\\r\\n    <code>200</code>\\r\\n    <message>successful</message>\\r\\n    <requestId>4987D326-83D9-4A42-B9A5-0B27F9B40539</requestId>\\r\\n    <success>true</success>\\r\\n</DeleteBusinessCategoryResponse>","errorExample":""}]',
      'title' => '删除适用业务',
      'summary' => '删除适用业务。',
      'requestParamsDescription' => '**请求参数Json字符串信息**
| 属性 | 值类型 |  是否必须  |  说明  |
|:---------|:-------|:---------|:---------|
|  bid | Integer |   是   |  适用业务ID  |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetBusinessCategoryList' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传值为空字符串即可',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '""',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123456',
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
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A186A419-FDBE-464C-AED4-7121CAC73BF1',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。调用方可根据此字段来判断请求是否成功：

- **true**表示成功
- **false/null**表示失败',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'BusinessCategoryBasicInfo' => 
                  array (
                    'description' => '适用业务',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'BusinessName' => 
                        array (
                          'description' => '业务名称',
                          'type' => 'string',
                          'example' => '所有业务',
                        ),
                        'ServiceType' => 
                        array (
                          'description' => '大的业务分类ID',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Bid' => 
                        array (
                          'description' => '业务ID',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"A186A419-FDBE-464C-AED4-7121CAC73BF1\\",\\n  \\"Success\\": false,\\n  \\"Data\\": {\\n    \\"BusinessCategoryBasicInfo\\": [\\n      {\\n        \\"BusinessName\\": \\"所有业务\\",\\n        \\"ServiceType\\": 0,\\n        \\"Bid\\": 0\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Message>successful</Message>\\n<RequestId>1850E47E-C331-435E-930E-356A684F1338</RequestId>\\n<Data>\\n    <BusinessCategoryBasicInfo>\\n        <BusinessName>业务1</BusinessName>\\n        <ServiceType>0</ServiceType>\\n        <Bid>805782250</Bid>\\n    </BusinessCategoryBasicInfo>\\n    <BusinessCategoryBasicInfo>\\n        <BusinessName>业务2</BusinessName>\\n        <ServiceType>0</ServiceType>\\n        <Bid>805788011</Bid>\\n    </BusinessCategoryBasicInfo>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '获取适用业务列表',
      'summary' => '获取适用业务列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateSchemeTaskConfig' => 
    array (
      'summary' => '对应前端功能位置：质检方案管理-新建质检任务。专有云URL：ip:port/api/task/CreateSchemeTaskConfig.json。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'jsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入参JSON，具体参考请求参数补充说明。',
            'type' => 'string',
            'required' => false,
            'example' => '{"manualReview":0,"name":"检测任务 2022-09-21 16:59:50","asrTaskPriority":2,"modeCustomizationId":"englishxxx","vocabId":"xxxx5b98d98f8405xxxxxe5dbb383ca1df","dataConfig":{"assignConfigs":[{"assignConfigContests":[{"name":"fileName","symbol":1,"value":["1"],"dataType":2}]}]},"schemeIdList":[187],"sourceDataType":1}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'PlainResult<Long>',
            'description' => 'PlainResult<Long>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '新增的质检任务ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '22',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3CEA0495-341B-4482-9AD9-8191EF4***	',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Message' => 
                  array (
                    'description' => '出错时表示出错详情，当输出多条信息时使用。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '出错时表示出错详情，当输出多条信息时使用。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": 22,\\n  \\"RequestId\\": \\"3CEA0495-341B-4482-9AD9-8191EF4***\\\\t\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": {\\n    \\"Message\\": [\\n      \\"无\\"\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '新建质检任务',
      'requestParamsDescription' => '请参考文档[`质检任务对象说明`](https://help.aliyun.com/document_detail/453292.html)',
    ),
    'UpdateSchemeTaskConfig' => 
    array (
      'summary' => '对应前端功能位置：任务管理-任一数据右侧编辑。专有云URL：ip:port/api/task/UpdateSchemeTaskConfig.json。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'jsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入参JSON，具体参考请求参数补充说明。',
            'type' => 'string',
            'required' => false,
            'example' => '{"schemeTaskConfigId":368,"status":1,"name":"检测任务 2022-09-21 16:59:50"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'BaseResult',
            'description' => 'BaseResult',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '106C6CA0-282D-4AF7-85F0-D2D24***',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Message' => 
                  array (
                    'description' => '消息的列表，忽略。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '消息，忽略。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"106C6CA0-282D-4AF7-85F0-D2D24***\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": {\\n    \\"Message\\": [\\n      \\"无\\"\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '更新质检任务',
      'description' => '更新质检任务信息',
      'requestParamsDescription' => '请求请参考文档[`质检任务对象说明`](https://help.aliyun.com/document_detail/453292.html)',
    ),
    'ListSchemeTaskConfig' => 
    array (
      'summary' => '对应前端功能位置：任务管理。专有云URL：ip:port/api/task/ListSchemeTaskInfo.json。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'jsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入参JSON，具体参考请求参数补充说明。',
            'type' => 'string',
            'required' => false,
            'example' => '{"pageNumber":1,"pageSize":10,"sourceDataType":"1"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => 'baseMeAgentId',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'ListResult<SchemeTaskConfig>',
            'description' => 'ListResult<SchemeTaskConfig>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Data' => 
                  array (
                    'description' => '完整返回内容。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'SchemeTaskConfig',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'description' => '质检任务ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123',
                        ),
                        'SchemeTaskConfigId' => 
                        array (
                          'description' => '质检任务ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123',
                        ),
                        'Name' => 
                        array (
                          'description' => '质检任务名称。',
                          'type' => 'string',
                          'example' => '检测任务A',
                        ),
                        'SourceDataType' => 
                        array (
                          'description' => '质检结果类型：
- 1：离线语音质检；
- 2：离线文本质检；
- 3：实时语音质检；
- 4：实时文本质检；
- 5：呼叫中心二次质检；
- 51：呼叫语音中心二次质检；
- 52：呼叫文本中心二次质检；
- 11：数据集语音；
- 12：数据集文本；',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'Status' => 
                        array (
                          'description' => '任务状态：0（禁用中）；1（启用中）',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'ManualReview' => 
                        array (
                          'description' => '人工复核',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'AssignType' => 
                        array (
                          'description' => '分配类型',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'DataConfig' => 
                        array (
                          'description' => '数据配置信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Index' => 
                            array (
                              'description' => '索引号',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'AssignConfigs' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'AssignConfig' => 
                                array (
                                  'description' => '随录数据筛选项',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '随录数据筛选项',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'AssignConfigContests' => 
                                      array (
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'AssignConfigContest' => 
                                          array (
                                            'description' => '随录参数匹配配置',
                                            'type' => 'array',
                                            'items' => 
                                            array (
                                              'description' => '随录参数匹配配置',
                                              'type' => 'object',
                                              'properties' => 
                                              array (
                                                'Name' => 
                                                array (
                                                  'description' => '检测项名称',
                                                  'type' => 'string',
                                                  'example' => 'callStartTime',
                                                ),
                                                'DataType' => 
                                                array (
                                                  'description' => 'value的类型
- 0：String
- 1：Number
- 2：List（在使用=的时候，都使用list类型来传递参数value）
- 3：Date
- 4：List_Json',
                                                  'type' => 'integer',
                                                  'format' => 'int32',
                                                  'example' => '3',
                                                ),
                                                'Symbol' => 
                                                array (
                                                  'description' => '运算符
- 1：==
- 2：>
- 3：<
- 4：区间
- 5：>=
- 6：<=
- 7：!=
- 8：null
- 9：not null
- 10：包含
- 11：不包含',
                                                  'type' => 'integer',
                                                  'format' => 'int32',
                                                  'example' => '4',
                                                ),
                                                'Value' => 
                                                array (
                                                  'description' => '随录数据匹配值。',
                                                  'type' => 'string',
                                                  'example' => '{\\"start\\":\\"2022-09-01 00:00:00\\",\\"end\\":\\"2022-09-30 00:00:00\\"}',
                                                ),
                                                'ListObject' => 
                                                array (
                                                  'type' => 'object',
                                                  'properties' => 
                                                  array (
                                                    'ListObject' => 
                                                    array (
                                                      'description' => '随录数据列表。',
                                                      'type' => 'array',
                                                      'items' => 
                                                      array (
                                                        'description' => '随录数据列表。',
                                                        'type' => 'any',
                                                        'example' => 'xx',
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
                                ),
                              ),
                            ),
                            'ResultParam' => 
                            array (
                              'description' => '二次质检用，筛选条件的JSON文本。具体参考获取任务结果GetResult接口的请求参数。',
                              'type' => 'string',
                              'example' => '{}',
                            ),
                            'DataSets' => 
                            array (
                              'description' => '数据集任务用，管理数据集。',
                              'type' => 'string',
                              'example' => '[]',
                            ),
                          ),
                        ),
                        'SchemeIdList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'SchemeIdList' => 
                            array (
                              'description' => '质检方案ID列表',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '质检方案ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '158',
                              ),
                            ),
                          ),
                        ),
                        'SchemeList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'SchemeList' => 
                            array (
                              'description' => '质检方案列表',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '质检方案',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'SchemeId' => 
                                  array (
                                    'title' => '质检方案id',
                                    'description' => '质检方案ID。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '158',
                                  ),
                                  'Name' => 
                                  array (
                                    'description' => '质检方案名称',
                                    'type' => 'string',
                                    'example' => '质检方案B',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'AsrTaskPriority' => 
                        array (
                          'description' => '任务优先级：
- 0（低）
- 1（中）
- 2（高）',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'ModeCustomizationId' => 
                        array (
                          'description' => '语言模型ID。',
                          'type' => 'string',
                          'example' => 'cdae396590b*****ec40f3476e274fc',
                        ),
                        'ModelName' => 
                        array (
                          'description' => '语言模型名称

',
                          'type' => 'string',
                          'example' => '语言模型A',
                        ),
                        'VocabId' => 
                        array (
                          'description' => '热词模型ID。',
                          'type' => 'string',
                          'example' => '9f90b3efa2****0a49acec226eafc17',
                        ),
                        'VocabName' => 
                        array (
                          'description' => '热词模型名称',
                          'type' => 'string',
                          'example' => '热词模型A',
                        ),
                        'UserGroup' => 
                        array (
                          'description' => '用户组ID。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'CreateUser' => 
                        array (
                          'description' => '创建用户ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '1650418039000',
                        ),
                        'UpdateTime' => 
                        array (
                          'description' => '更新时间

',
                          'type' => 'string',
                          'example' => '1650418039000',
                        ),
                        'UpdateUser' => 
                        array (
                          'description' => '更新用户ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'Type' => 
                        array (
                          'description' => '类型',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'NumberSum' => 
                        array (
                          'description' => '数据总量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1000',
                        ),
                        'NumberSuccess' => 
                        array (
                          'description' => '成功数据量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1000',
                        ),
                        'NumberFail' => 
                        array (
                          'description' => '失败数据量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'FinishRate' => 
                        array (
                          'description' => '任务完成率。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '100',
                        ),
                        'NumberExecuting' => 
                        array (
                          'description' => '执行中数据量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Count' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '22',
              ),
              'CurrentPage' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页显示条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'ResultCountId' => 
              array (
                'description' => '内部字段，请忽略。',
                'type' => 'string',
                'example' => '忽略',
              ),
              'LastDataId' => 
              array (
                'description' => '本条数据标志信息，当通过GetResult查询超过10000条以上的数据时，每次请求入参中需要携带上一次查询结果最后一条数据的lastDataId的值。',
                'type' => 'string',
                'example' => 'xxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4B0A8DCD-0DDF-5E80-8B9C-0A2F68B3403B',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Message' => 
                  array (
                    'description' => '消息的列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '消息',
                      'type' => 'string',
                      'example' => '无',
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码

',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Data\\": [\\n      {\\n        \\"Id\\": 123,\\n        \\"SchemeTaskConfigId\\": 123,\\n        \\"Name\\": \\"检测任务A\\",\\n        \\"SourceDataType\\": 2,\\n        \\"Status\\": 1,\\n        \\"ManualReview\\": 0,\\n        \\"AssignType\\": 0,\\n        \\"DataConfig\\": {\\n          \\"Index\\": 0,\\n          \\"AssignConfigs\\": {\\n            \\"AssignConfig\\": [\\n              {\\n                \\"AssignConfigContests\\": {\\n                  \\"AssignConfigContest\\": [\\n                    {\\n                      \\"Name\\": \\"callStartTime\\",\\n                      \\"DataType\\": 3,\\n                      \\"Symbol\\": 4,\\n                      \\"Value\\": \\"{\\\\\\\\\\\\\\"start\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"2022-09-01 00:00:00\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"end\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"2022-09-30 00:00:00\\\\\\\\\\\\\\"}\\",\\n                      \\"ListObject\\": {\\n                        \\"ListObject\\": [\\n                          \\"xx\\"\\n                        ]\\n                      }\\n                    }\\n                  ]\\n                }\\n              }\\n            ]\\n          },\\n          \\"ResultParam\\": \\"{}\\",\\n          \\"DataSets\\": \\"[]\\"\\n        },\\n        \\"SchemeIdList\\": {\\n          \\"SchemeIdList\\": [\\n            158\\n          ]\\n        },\\n        \\"SchemeList\\": {\\n          \\"SchemeList\\": [\\n            {\\n              \\"SchemeId\\": 158,\\n              \\"Name\\": \\"质检方案B\\"\\n            }\\n          ]\\n        },\\n        \\"AsrTaskPriority\\": 2,\\n        \\"ModeCustomizationId\\": \\"cdae396590b*****ec40f3476e274fc\\",\\n        \\"ModelName\\": \\"语言模型A\\",\\n        \\"VocabId\\": \\"9f90b3efa2****0a49acec226eafc17\\",\\n        \\"VocabName\\": \\"热词模型A\\",\\n        \\"UserGroup\\": \\"1\\",\\n        \\"CreateUser\\": 1,\\n        \\"CreateTime\\": \\"1650418039000\\",\\n        \\"UpdateTime\\": \\"1650418039000\\",\\n        \\"UpdateUser\\": 1,\\n        \\"Type\\": 0,\\n        \\"NumberSum\\": 1000,\\n        \\"NumberSuccess\\": 1000,\\n        \\"NumberFail\\": 0,\\n        \\"FinishRate\\": 100,\\n        \\"NumberExecuting\\": 0\\n      }\\n    ]\\n  },\\n  \\"Count\\": 22,\\n  \\"CurrentPage\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"ResultCountId\\": \\"忽略\\",\\n  \\"LastDataId\\": \\"xxx\\",\\n  \\"RequestId\\": \\"4B0A8DCD-0DDF-5E80-8B9C-0A2F68B3403B\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": {\\n    \\"Message\\": [\\n      \\"无\\"\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '批量获取质检任务',
      'requestParamsDescription' => '### JsonStr说明
| 属性 | 值类型 | 是否必须 | 描述 |
| --- | --- | --- | --- |
| pageNumber | Inetger | 否 | 当前页 |
| pageSize | Inetger | 否 | 每页大小 |
| sourceDataType | Inetger | 是 | 任务类型：1（离线语音）；2（离线文本）；3（实时语音）；4（实时文本）；51（离线语音二次质检）；52（离线文本二次质检）；53（实时语音二次质检）；54（实时文本二次质检） |',
    ),
    'SubmitQualityCheckTask' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '"{"jobName":"任务 2020-03-19 14:16:55","jobType":0,"jsonStr":{"dataSetIds":[123**],"modeCustomizationId":"046db35352904c5dbb0564****","ruleIds":[185**,185**],"vocabId":"0f0cd63546c747bcb306bb05***"}}"',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。
',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Data' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'F6C2B68F-2311-4495-82AC-DAE86C9****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '00A044A2-D59B-4104-96BA-84060AE8345F',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": \\"F6C2B68F-2311-4495-82AC-DAE86C9****\\",\\n  \\"RequestId\\": \\"00A044A2-D59B-4104-96BA-84060AE8345F\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<SubmitQualityCheckTaskResponse>\\n    <Message>successful</Message>\\n    <RequestId>00A044A2-D59B-4104-96BA-84060AE8345F</RequestId>\\n    <Data>F6C2B68F-2311-4495-82AC-DAE86C9931CA</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</SubmitQualityCheckTaskResponse>","errorExample":""}]',
      'title' => '新建数据集质检任务',
      'summary' => '新建数据集质检任务。',
      'requestParamsDescription' => '## 入参说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| jsonStr| String| 是      | 完整JSON字符串信息，具体内容参见以下详细信息。 |
| jobName| String| 否      | 任务名称。 |
| jobType| Integer| 否      | 任务类型：0：普通数据集任务，固定传0即可。 |
| scheduledFireTime| String| 否      | 定时任务执行时间，yyyy-MM-dd HH:mm:ss，不可早于当前时间；空表示立即执行。 |

### 请求参数JSON字符串信息
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| dataSetIds | List |  是     | 数据集ID集合。 |
| ruleIds | List |  是     | 规则ID集合。 |
| modeCustomizationId | String |  是     | 语言模型ID。 |
| vocabId | String | 否 | 热词模型ID。 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveConfigDataSet' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '"{"judgeType":1,"setId":851,"jsonStrForRule":{"conditions":[{"cid":"1","check_range":{},"lambda":"1","operators":[{"oid":1,"type":"HIT_ANY_KEYWORDS","param":{"keywords":["有什么可以帮您","客服中心"],"in_sentence":false}}]}],"rules":[{"externalProperty":0,"lambda":"1","rid":"1"}],"roleJudgeMethod":"keyword"},"channelType":1}"',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => 'baseMeAgentId',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F050E835-4E5B-4799-BAE3-D622DC529AB3',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"F050E835-4E5B-4799-BAE3-D622DC529AB3\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<SaveConfigDataSetResponse>\\n    <Message>successful</Message>\\n    <RequestId>F050E835-4E5B-4799-BAE3-D622DC529AB3</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</SaveConfigDataSetResponse>","errorExample":""}]',
      'title' => '保存数据集话者角色配置',
      'summary' => '来保存数据集话者角色配置。',
      'requestParamsDescription' => '### 请求参数JSON字符串信息
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| setId| Long | 是      | 数据集ID。 |
| channelType | Integer | 是  | 录音文件为单规还是双轨，可取值：1（单轨）；2（双轨）。 |
| jsonStrForRule | String | 否  | JSON格式规则，单轨需要，分轨时会根据此规则确定哪个轨道是"客服"，详见下方的 jsonStrForRule参数说明。 |
| channelId0 | Integer | 否  | 双轨需要，客服角色所在的音轨编号，取值0、1；比如客服在第0轨，则此值是0。 |
| channelId1 | Integer | 否  | 双轨需要，客户角色所在的音轨编号，取值0、1；比如客户在第1轨，则此值是1 。|

## jsonStrForRule参数说明
jsonStrForRule相当于是一个质检规则，该规则中只有一个关键字检查的条件，格式固定如下，只能修改keywords的值，也就是修改关键词。
```
{"conditions":[{"cid":"1","check_range":{},"lambda":"1","operators":[{"oid":1,"type":"HIT_ANY_KEYWORDS","param":{"keywords":["有什么可以帮您","客服中心"],"in_sentence":false}}]}],"rules":[{"externalProperty":0,"lambda":"1","rid":"1"}],"roleJudgeMethod":"keyword"}
```',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListDataSet' => 
    array (
      'summary' => '对应前端功能位置：数据集管理。专有云URL：ip:port/api/dataset/ListDataSet.json。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '入参json字符串',
            'description' => '入参JSON字符串',
            'type' => 'string',
            'required' => false,
            'example' => '{"pageNumber":1,"pageSize":10}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'PageResult<DataSet>',
            'description' => 'PageResult<DataSet>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Data' => 
                  array (
                    'description' => '数据集列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据集列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SetId' => 
                        array (
                          'description' => '数据集ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'SetName' => 
                        array (
                          'description' => '数据集名称。',
                          'type' => 'string',
                          'example' => '数据集A',
                        ),
                        'SetDomain' => 
                        array (
                          'description' => '数据集所在域名。内部用忽略。',
                          'type' => 'string',
                          'example' => '“”',
                        ),
                        'SetRoleArn' => 
                        array (
                          'description' => '数据集访问角色。内部用忽略。',
                          'type' => 'string',
                          'example' => '“”',
                        ),
                        'SetBucketName' => 
                        array (
                          'description' => '数据集OSSBcket名。内部用忽略。',
                          'type' => 'string',
                          'example' => '“”',
                        ),
                        'SetFolderName' => 
                        array (
                          'description' => '数据集文件目录名。内部用忽略。',
                          'type' => 'string',
                          'example' => '“”',
                        ),
                        'SetNumber' => 
                        array (
                          'description' => '数据集文件总数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'RoleConfigStatus' => 
                        array (
                          'description' => '角色配置状态。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'enumValueTitles' => 
                          array (
                            0 => '未配置',
                            1 => '已配置',
                            2 => '无需配置',
                          ),
                          'example' => '1',
                        ),
                        'ChannelId0' => 
                        array (
                          'description' => '双轨需要，客服角色所在的音轨编号，取值0，1；比如客服在第0轨，则此值是0',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'ChannelId1' => 
                        array (
                          'description' => '双轨需要，客户角色所在的音轨编号，取值0，1；比如客户在第1轨，则此值是1',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'RoleConfigTask' => 
                        array (
                          'description' => '角色配置任务',
                          'type' => 'string',
                          'example' => 'xx',
                        ),
                        'IsDelete' => 
                        array (
                          'description' => '是否删除：
- 0：未删除
- 1：已删除',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '2019-06-20T17:33Z',
                        ),
                        'UpdateTime' => 
                        array (
                          'description' => '最后更新时间。',
                          'type' => 'string',
                          'example' => '2022-05-10T10:34Z',
                        ),
                        'ChannelType' => 
                        array (
                          'description' => '音轨类型。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'SubDir' => 
                        array (
                          'description' => '数据集子目录',
                          'type' => 'string',
                          'example' => 'xx',
                        ),
                        'CreateType' => 
                        array (
                          'description' => '创建类型。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'enumValueTitles' => 
                          array (
                            0 => '通过用户OSS',
                            1 => '直接上传',
                          ),
                          'example' => '0',
                        ),
                        'UserGroup' => 
                        array (
                          'description' => '用户组ID。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'RoleConfigProp' => 
                        array (
                          'description' => '角色配置文件。',
                          'type' => 'string',
                          'example' => 'filesFromLocal/ef7ff45c147a4a5e882c925f9a75ac43',
                        ),
                        'AutoTranscoding' => 
                        array (
                          'description' => '自动转码',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'SetType' => 
                        array (
                          'description' => '数据集创建类型
- 0：预置
- 1：用户创建',
                          'type' => 'integer',
                          'format' => 'int32',
                          'enumValueTitles' => 
                          array (
                            0 => '预置',
                            1 => '用户创建',
                          ),
                          'example' => '1',
                        ),
                        'DataSetType' => 
                        array (
                          'description' => '数据集类型',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3',
                        ),
                        'SourceDataType' => 
                        array (
                          'description' => '质检结果类型
- 11：数据集语音
- 12：数据集文本',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '11',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Count' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '23',
              ),
              'CurrentPage' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageSize' => 
              array (
                'description' => '每页显示条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '96138D8D-8D26-4E41-BFF4-77AED1088BBD',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Message' => 
                  array (
                    'description' => '出错时表示出错详情，当输出多条信息时使用。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '出错时表示出错详情，当输出多条信息时使用。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码

',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Data\\": [\\n      {\\n        \\"SetId\\": 1,\\n        \\"SetName\\": \\"数据集A\\",\\n        \\"SetDomain\\": \\"“”\\",\\n        \\"SetRoleArn\\": \\"“”\\",\\n        \\"SetBucketName\\": \\"“”\\",\\n        \\"SetFolderName\\": \\"“”\\",\\n        \\"SetNumber\\": 1,\\n        \\"RoleConfigStatus\\": 1,\\n        \\"ChannelId0\\": 0,\\n        \\"ChannelId1\\": 1,\\n        \\"RoleConfigTask\\": \\"xx\\",\\n        \\"IsDelete\\": 0,\\n        \\"CreateTime\\": \\"2019-06-20T17:33Z\\",\\n        \\"UpdateTime\\": \\"2022-05-10T10:34Z\\",\\n        \\"ChannelType\\": 1,\\n        \\"SubDir\\": \\"xx\\",\\n        \\"CreateType\\": 0,\\n        \\"UserGroup\\": \\"1\\",\\n        \\"RoleConfigProp\\": \\"filesFromLocal/ef7ff45c147a4a5e882c925f9a75ac43\\",\\n        \\"AutoTranscoding\\": 1,\\n        \\"SetType\\": 1,\\n        \\"DataSetType\\": 3,\\n        \\"SourceDataType\\": 11\\n      }\\n    ]\\n  },\\n  \\"Count\\": 23,\\n  \\"CurrentPage\\": 10,\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"RequestId\\": \\"96138D8D-8D26-4E41-BFF4-77AED1088BBD\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": {\\n    \\"Message\\": [\\n      \\"无\\"\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '批量获取数据集',
    ),
    'DeleteDataSet' => 
    array (
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
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"setId":"234"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功。若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9987D326-83D9-4A42-B9A5-0B27F9B40539',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。调用方可根据此字段来判断请求是否成功：**true**表示成功**false/null**表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"9987D326-83D9-4A42-B9A5-0B27F9B40539\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteDataSetResponse>\\r\\n    <message>successful</message>\\r\\n    <requestId>76DB5D8C-5BD9-42A7-B527-5AF3A5F83F12</requestId>\\r\\n    <code>200</code>\\r\\n    <success>true</success>\\r\\n</DeleteDataSetResponse>","errorExample":""}]',
      'title' => '删除数据集',
      'summary' => '删除数据集。',
      'requestParamsDescription' => '**请求参数Json字符串信息**
| 属性|  值类型  |  是否必须   |   说明    |
|:---------|:-------|:---------|:---------|
|  setId | Long |  是  |   数据集ID。   |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetResult' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"pageNumber":1,"pageSize":10,"excludeFields":"hitResult.hits, recording.url","requiredFields":"agent,status,errorMessage,reviewStatus,reviewResult,score,taskId,reviewer,resolver,recording.name,recording.duration,hitResult,business","dataType":1,"sourceType":0,"startTime":"2020-06-25 00:00:00","endTime":"2020-07-01 23:59:59"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID，请求唯一标识。',
                'type' => 'string',
                'example' => '3CEA0495-341B-4482-9AD9-8191EF4***',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ResultCountId' => 
              array (
                'description' => '预留字段，暂时没有用途，请忽略。',
                'type' => 'string',
                'example' => 'XXX',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Count' => 
              array (
                'description' => '总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ResultInfo' => 
                  array (
                    'description' => '查询结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '任务当前状态；0：未完成；1：已完成；调用方可根据此字段判断任务是否完成；非0、1表示出错，错误详情可查看errorMessage字段。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'AssignmentTime' => 
                        array (
                          'description' => '分配时间（分配质检员的分配时间）。',
                          'type' => 'string',
                          'example' => '2021-03-02T14:37Z',
                        ),
                        'LastDataId' => 
                        array (
                          'description' => '本条数据标志信息，当通过GetResult查询超过10000条以上的数据时，每次请求入参中需要携带上一次查询结果最后一条数据的lastDataId的值。',
                          'type' => 'string',
                          'example' => '4498420@a_z@93EAADF1-01D3-44BD-8AC9-F57F447EFCE8_1614*****',
                        ),
                        'ErrorMessage' => 
                        array (
                          'description' => '当status是非0、1时表示错误详情。',
                          'type' => 'string',
                          'example' => 'xxx',
                        ),
                        'Reviewer' => 
                        array (
                          'description' => '分配的质检员。',
                          'type' => 'string',
                          'example' => 'xxx',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '任务创建时间。',
                          'type' => 'string',
                          'example' => '2019-07-24T19:31Z',
                        ),
                        'ReviewStatus' => 
                        array (
                          'description' => '复核状态；0：未复核；1：已复核。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'ReviewTimeLong' => 
                        array (
                          'description' => '最后一次复核提交的时间（时间戳格式）。',
                          'type' => 'string',
                          'example' => '1602743090',
                        ),
                        'TaskName' => 
                        array (
                          'description' => '任务名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'ReviewResult' => 
                        array (
                          'description' => '复核准确性，可能值：0（错误）；1（正确）；2（部分正确）；3（待复核）。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Score' => 
                        array (
                          'description' => '文件最终得分，满分100。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                        'CreateTimeLong' => 
                        array (
                          'description' => '任务创建时间（时间戳格式）。',
                          'type' => 'string',
                          'example' => '1602743090',
                        ),
                        'ReviewTime' => 
                        array (
                          'description' => '最后一次复核提交的时间。',
                          'type' => 'string',
                          'example' => '2019-07-24T19:31Z',
                        ),
                        'Comments' => 
                        array (
                          'description' => '复核意见。',
                          'type' => 'string',
                          'example' => 'xx',
                        ),
                        'TaskId' => 
                        array (
                          'description' => '任务ID。',
                          'type' => 'string',
                          'example' => 'A6BEC8D-9A5B-4BE5-8432-4F635E***',
                        ),
                        'ReviewType' => 
                        array (
                          'description' => '复核状态，可能值：1（自动复核）；2（人工复核）。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Resolver' => 
                        array (
                          'description' => '实际复核的质检员。',
                          'type' => 'string',
                          'example' => 'XXX',
                        ),
                        'AsrResult' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'AsrResult' => 
                            array (
                              'description' => '文件转写结果。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Words' => 
                                  array (
                                    'description' => '对话内容。',
                                    'type' => 'string',
                                    'example' => 'xx',
                                  ),
                                  'Begin' => 
                                  array (
                                    'description' => '本句相对于整个对话的开始时间，单位：毫秒。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '10000',
                                  ),
                                  'EmotionValue' => 
                                  array (
                                    'description' => '本句的情绪值，0-10，值最大情绪越高。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '1',
                                  ),
                                  'End' => 
                                  array (
                                    'description' => '本句相对于整个对话的结束时间，单位：毫秒。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '0',
                                  ),
                                  'SpeechRate' => 
                                  array (
                                    'description' => '本句语速，单位：字/分钟。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '50',
                                  ),
                                  'Role' => 
                                  array (
                                    'description' => '本句的角色，取值：客服、客户。',
                                    'type' => 'string',
                                    'example' => '客户',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'HitResult' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'HitResult' => 
                            array (
                              'description' => '规则命中结果。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Type' => 
                                  array (
                                    'description' => '命中规则分类。',
                                    'type' => 'string',
                                    'example' => '0417回归类型',
                                  ),
                                  'ReviewResult' => 
                                  array (
                                    'description' => '复核准确性；0：错误；1：正确。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '0',
                                  ),
                                  'Name' => 
                                  array (
                                    'description' => '命中的规则名称。',
                                    'type' => 'string',
                                    'example' => '20190417回归3',
                                  ),
                                  'Rid' => 
                                  array (
                                    'description' => '命中的规则ID。',
                                    'type' => 'string',
                                    'example' => '1276',
                                  ),
                                  'Hits' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Hit' => 
                                      array (
                                        'description' => '命中规则。',
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'type' => 'object',
                                          'properties' => 
                                          array (
                                            'KeyWords' => 
                                            array (
                                              'type' => 'object',
                                              'properties' => 
                                              array (
                                                'KeyWord' => 
                                                array (
                                                  'description' => '命中的关键字（针对关键字、正则类型的算子）。',
                                                  'type' => 'array',
                                                  'items' => 
                                                  array (
                                                    'type' => 'object',
                                                    'properties' => 
                                                    array (
                                                      'From' => 
                                                      array (
                                                        'description' => '关键字的起始位置。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '1',
                                                      ),
                                                      'To' => 
                                                      array (
                                                        'description' => '关键字的结束位置',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '2',
                                                      ),
                                                      'Val' => 
                                                      array (
                                                        'description' => '算子命中的关键信息，详见下方返回参数说明中的**关键信息Val详解**。',
                                                        'type' => 'string',
                                                        'example' => 'test',
                                                      ),
                                                      'Cid' => 
                                                      array (
                                                        'description' => '命中的条件ID。',
                                                        'type' => 'string',
                                                        'example' => 'xxxx',
                                                      ),
                                                    ),
                                                  ),
                                                ),
                                              ),
                                            ),
                                            'Cid' => 
                                            array (
                                              'type' => 'object',
                                              'properties' => 
                                              array (
                                                'Cid' => 
                                                array (
                                                  'description' => '命中的条件ID列表。',
                                                  'type' => 'array',
                                                  'items' => 
                                                  array (
                                                    'description' => '命中的条件ID。',
                                                    'type' => 'string',
                                                    'example' => 'xxxx',
                                                  ),
                                                ),
                                              ),
                                            ),
                                            'Phrase' => 
                                            array (
                                              'description' => '命中的句子信息。',
                                              'type' => 'object',
                                              'properties' => 
                                              array (
                                                'EmotionValue' => 
                                                array (
                                                  'description' => '本句的情绪值，0-10，值越大情绪越高。',
                                                  'type' => 'integer',
                                                  'format' => 'int32',
                                                  'example' => '0',
                                                ),
                                                'End' => 
                                                array (
                                                  'description' => '本句相对于整个对话的结束时间，单位：毫秒。',
                                                  'type' => 'integer',
                                                  'format' => 'int32',
                                                  'example' => '300',
                                                ),
                                                'Words' => 
                                                array (
                                                  'description' => '对话内容。',
                                                  'type' => 'string',
                                                  'example' => 'xxx',
                                                ),
                                                'Role' => 
                                                array (
                                                  'description' => '本句的角色，取值：客服、客户。',
                                                  'type' => 'string',
                                                  'example' => '客服',
                                                ),
                                                'Begin' => 
                                                array (
                                                  'description' => '本句相对于整个对话的开始时间，单位：毫秒。',
                                                  'type' => 'integer',
                                                  'format' => 'int64',
                                                  'example' => '300',
                                                ),
                                              ),
                                            ),
                                          ),
                                        ),
                                      ),
                                    ),
                                  ),
                                  'SchemeId' => 
                                  array (
                                    'description' => '质检方案ID。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '123xx',
                                  ),
                                  'SchemeVersion' => 
                                  array (
                                    'description' => '质检方案版本',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '11xx',
                                  ),
                                  'Conditions' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Conditions' => 
                                      array (
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'type' => 'object',
                                          'properties' => 
                                          array (
                                            'Cid' => 
                                            array (
                                              'title' => '条件id，可能是db中的主键，也可能是转换成的a, b, c',
                                              'description' => '条件id，可能是db中的主键，也可能是转换成的a, b, c',
                                              'type' => 'string',
                                            ),
                                            'Id' => 
                                            array (
                                              'title' => '在db中的主键',
                                              'description' => '在db中的主键',
                                              'type' => 'integer',
                                              'format' => 'int64',
                                            ),
                                            'Rid' => 
                                            array (
                                              'title' => '条件所属的规则id',
                                              'description' => '条件所属的规则id',
                                              'type' => 'string',
                                            ),
                                            'Check_range' => 
                                            array (
                                              'title' => '检测范围',
                                              'description' => '检测范围',
                                              'type' => 'object',
                                              'properties' => 
                                              array (
                                                'RoleId' => 
                                                array (
                                                  'title' => '对应 RoleType.id',
                                                  'description' => '对应 RoleType.id',
                                                  'type' => 'integer',
                                                  'format' => 'int32',
                                                ),
                                                'Role' => 
                                                array (
                                                  'title' => '对应 RoleType.type',
                                                  'description' => '对应 RoleType.type',
                                                  'type' => 'string',
                                                ),
                                                'Anchor' => 
                                                array (
                                                  'title' => '前置后置条件',
                                                  'description' => '前置后置条件',
                                                  'type' => 'object',
                                                  'properties' => 
                                                  array (
                                                    'Cid' => 
                                                    array (
                                                      'title' => '条件ID',
                                                      'description' => '条件ID',
                                                      'type' => 'string',
                                                    ),
                                                    'Location' => 
                                                    array (
                                                      'title' => '位置',
                                                      'description' => '位置',
                                                      'type' => 'string',
                                                    ),
                                                    'Hit_time' => 
                                                    array (
                                                      'title' => '命中次数',
                                                      'description' => '命中次数',
                                                      'type' => 'integer',
                                                      'format' => 'int32',
                                                    ),
                                                  ),
                                                ),
                                                'Range' => 
                                                array (
                                                  'title' => '相对范围',
                                                  'description' => '相对范围',
                                                  'type' => 'object',
                                                  'properties' => 
                                                  array (
                                                    'From' => 
                                                    array (
                                                      'title' => '对话开始索引',
                                                      'description' => '对话开始索引',
                                                      'type' => 'integer',
                                                      'format' => 'int32',
                                                    ),
                                                    'To' => 
                                                    array (
                                                      'title' => '对话结束索引',
                                                      'description' => '对话结束索引',
                                                      'type' => 'integer',
                                                      'format' => 'int32',
                                                    ),
                                                  ),
                                                ),
                                                'TimeRange' => 
                                                array (
                                                  'type' => 'object',
                                                  'properties' => 
                                                  array (
                                                    'From' => 
                                                    array (
                                                      'type' => 'integer',
                                                      'format' => 'int64',
                                                    ),
                                                    'To' => 
                                                    array (
                                                      'type' => 'integer',
                                                      'format' => 'int64',
                                                    ),
                                                  ),
                                                ),
                                                'Absolute' => 
                                                array (
                                                  'title' => 'false: 相对位置; 会结合anchor以及角色来决定句子位置',
                                                  'description' => 'false: 相对位置; 会结合anchor以及角色来决定句子位置',
                                                  'type' => 'boolean',
                                                ),
                                                'AllSentencesSatisfy' => 
                                                array (
                                                  'title' => 'true: 每句话都必须满足条件；',
                                                  'description' => 'true: 每句话都必须满足条件；',
                                                  'type' => 'boolean',
                                                ),
                                              ),
                                            ),
                                            'Operators' => 
                                            array (
                                              'type' => 'object',
                                              'properties' => 
                                              array (
                                                'Operator' => 
                                                array (
                                                  'title' => '算子列表',
                                                  'description' => '算子列表',
                                                  'type' => 'array',
                                                  'items' => 
                                                  array (
                                                    'type' => 'object',
                                                    'properties' => 
                                                    array (
                                                      'Oid' => 
                                                      array (
                                                        'title' => '可能是主键id，也可能是前端生成的id',
                                                        'description' => '可能是主键id，也可能是前端生成的id',
                                                        'type' => 'string',
                                                      ),
                                                      'Id' => 
                                                      array (
                                                        'title' => '主键id',
                                                        'description' => '主键id',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                      ),
                                                      'Type' => 
                                                      array (
                                                        'title' => '算子类别',
                                                        'description' => '算子类别',
                                                        'type' => 'string',
                                                      ),
                                                      'Param' => 
                                                      array (
                                                        'title' => '算子参数',
                                                        'description' => '算子参数',
                                                        'type' => 'object',
                                                        'properties' => 
                                                        array (
                                                          'Keywords' => 
                                                          array (
                                                            'type' => 'object',
                                                            'properties' => 
                                                            array (
                                                              'Keyword' => 
                                                              array (
                                                                'title' => '关键词',
                                                                'description' => '关键词',
                                                                'type' => 'array',
                                                                'items' => 
                                                                array (
                                                                  'type' => 'string',
                                                                ),
                                                              ),
                                                            ),
                                                          ),
                                                          'Regex' => 
                                                          array (
                                                            'title' => '正则表达式',
                                                            'description' => '正则表达式',
                                                            'type' => 'string',
                                                          ),
                                                          'NotRegex' => 
                                                          array (
                                                            'title' => '排除的正则表达式',
                                                            'description' => '排除的正则表达式',
                                                            'type' => 'string',
                                                          ),
                                                          'Phrase' => 
                                                          array (
                                                            'title' => '语句',
                                                            'description' => '语句',
                                                            'type' => 'string',
                                                          ),
                                                          'Interval' => 
                                                          array (
                                                            'title' => 'interval代表区间范围开始',
                                                            'description' => 'interval代表区间范围开始',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                          ),
                                                          'IntervalEnd' => 
                                                          array (
                                                            'title' => 'intervalEnd 代表区间范围结束',
                                                            'description' => 'intervalEnd 代表区间范围结束',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                          ),
                                                          'Threshold' => 
                                                          array (
                                                            'title' => '阈值',
                                                            'description' => '阈值',
                                                            'type' => 'number',
                                                            'format' => 'float',
                                                          ),
                                                          'In_sentence' => 
                                                          array (
                                                            'title' => '生效句子， true单个句子，false多个句子',
                                                            'description' => '生效句子， true单个句子，false多个句子',
                                                            'type' => 'boolean',
                                                          ),
                                                          'Target' => 
                                                          array (
                                                            'title' => 'target',
                                                            'description' => 'target',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                          ),
                                                          'From_end' => 
                                                          array (
                                                            'title' => 'from_end',
                                                            'description' => 'from_end',
                                                            'type' => 'boolean',
                                                          ),
                                                          'KeywordExtension' => 
                                                          array (
                                                            'title' => '关键字扩展',
                                                            'description' => '关键字扩展',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                          ),
                                                          'Case_sensitive' => 
                                                          array (
                                                            'title' => '区分大小写',
                                                            'description' => '区分大小写',
                                                            'type' => 'boolean',
                                                          ),
                                                          'Near_dialogue' => 
                                                          array (
                                                            'title' => 'true表示取不同角色相邻的两句话，false表示取不同角色的第一句话比较响应时间（默认）',
                                                            'description' => 'true表示取不同角色相邻的两句话，false表示取不同角色的第一句话比较响应时间（默认）',
                                                            'type' => 'boolean',
                                                          ),
                                                          'MinWordSize' => 
                                                          array (
                                                            'title' => '句子中最少字数，小于此字数的句子不检查',
                                                            'description' => '句子中最少字数，小于此字数的句子不检查',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                          ),
                                                          'Hit_time' => 
                                                          array (
                                                            'title' => '上下文重复算子：重复几次',
                                                            'description' => '上下文重复算子：重复几次',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                          ),
                                                          'Excludes' => 
                                                          array (
                                                            'type' => 'object',
                                                            'properties' => 
                                                            array (
                                                              'Exclude' => 
                                                              array (
                                                                'title' => '上下文重复算子：排除掉某些对话',
                                                                'description' => '上下文重复算子：排除掉某些对话',
                                                                'type' => 'array',
                                                                'items' => 
                                                                array (
                                                                  'type' => 'string',
                                                                ),
                                                              ),
                                                            ),
                                                          ),
                                                          'From' => 
                                                          array (
                                                            'title' => '上下文重复算子：检测当前句的前from句是否有重复；0表示前面的所有句',
                                                            'description' => '上下文重复算子：检测当前句的前from句是否有重复；0表示前面的所有句',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                          ),
                                                          'CheckFirstSentence' => 
                                                          array (
                                                            'title' => '静音检测：要不要检测第一句话',
                                                            'description' => '静音检测：要不要检测第一句话',
                                                            'type' => 'boolean',
                                                          ),
                                                          'Average' => 
                                                          array (
                                                            'title' => '语速检测，是否计算整个对话平均语速，默认false',
                                                            'description' => '语速检测，是否计算整个对话平均语速，默认false',
                                                            'type' => 'boolean',
                                                          ),
                                                          'BeginType' => 
                                                          array (
                                                            'title' => '时长算子，时长计算开始类型，录音开始，还是某句对话开始',
                                                            'description' => '时长算子，时长计算开始类型，录音开始，还是某句对话开始',
                                                            'type' => 'string',
                                                          ),
                                                          'EndType' => 
                                                          array (
                                                            'title' => '时长算子，时长计算结束类型，录音结束，还是某句对话结束',
                                                            'description' => '时长算子，时长计算结束类型，录音结束，还是某句对话结束',
                                                            'type' => 'string',
                                                          ),
                                                          'CompareOperator' => 
                                                          array (
                                                            'title' => '大于，还是小于，gt/lt',
                                                            'description' => '大于，还是小于，gt/lt',
                                                            'type' => 'string',
                                                          ),
                                                          'ContextChatMatch' => 
                                                          array (
                                                            'title' => '是否单句话匹配；',
                                                            'description' => '是否单句话匹配；',
                                                            'type' => 'boolean',
                                                          ),
                                                          'KeywordMatchSize' => 
                                                          array (
                                                            'title' => '匹配到的关键字数量',
                                                            'description' => '匹配到的关键字数量',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                          ),
                                                          'MaxEmotionChangeValue' => 
                                                          array (
                                                            'title' => '能量值变化，默认3, 1~9',
                                                            'description' => '能量值变化，默认3, 1~9',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                          ),
                                                          'CheckType' => 
                                                          array (
                                                            'title' => '检测方式，1 相邻句能量波动 2 最大能量跨度 默认1',
                                                            'description' => '检测方式：1（相邻句能量波动）、2（最大能量跨度），默认为1。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                          ),
                                                          'DelayTime' => 
                                                          array (
                                                            'title' => '抢话算子 延时时长',
                                                            'description' => '抢话算子，延时时长。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                          ),
                                                          'FlowNodePrerequisiteParam' => 
                                                          array (
                                                            'title' => '流程节点前置条件参数',
                                                            'description' => '流程节点前置条件参数',
                                                            'type' => 'object',
                                                            'properties' => 
                                                            array (
                                                              'NodeId' => 
                                                              array (
                                                                'title' => '节点id',
                                                                'description' => '节点id',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                              ),
                                                              'NodeName' => 
                                                              array (
                                                                'title' => '冗余的节点名称',
                                                                'description' => '冗余的节点名称',
                                                                'type' => 'string',
                                                              ),
                                                              'NodeMatchStatus' => 
                                                              array (
                                                                'title' => '节点匹配状态。',
                                                                'description' => '节点匹配状态。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                              ),
                                                            ),
                                                          ),
                                                          'IntentModelCheckParm' => 
                                                          array (
                                                            'title' => '意图模型检查参数',
                                                            'description' => '意图模型检查参数',
                                                            'type' => 'object',
                                                            'properties' => 
                                                            array (
                                                              'ModelScene' => 
                                                              array (
                                                                'title' => '模型应用的场景 AGENT:客户场景、CUSTOMER:客服场景 (CUSTOMER: 客户场景, AGENT: 坐席场景)',
                                                                'description' => '模型应用的场景：AGENT（客户场景）、CUSTOMER（客服场景 ）。',
                                                                'type' => 'string',
                                                              ),
                                                              'Intents' => 
                                                              array (
                                                                'type' => 'object',
                                                                'properties' => 
                                                                array (
                                                                  'Intent' => 
                                                                  array (
                                                                    'title' => '引用的意图模型',
                                                                    'description' => '引用的意图模型',
                                                                    'type' => 'array',
                                                                    'items' => 
                                                                    array (
                                                                      'type' => 'object',
                                                                      'properties' => 
                                                                      array (
                                                                        'Id' => 
                                                                        array (
                                                                          'title' => '意图模型ID',
                                                                          'description' => '意图模型ID',
                                                                          'type' => 'integer',
                                                                          'format' => 'int64',
                                                                        ),
                                                                        'Name' => 
                                                                        array (
                                                                          'title' => '意图模型名称',
                                                                          'description' => '意图模型名称',
                                                                          'type' => 'string',
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
                                                      'Name' => 
                                                      array (
                                                        'title' => '算子名',
                                                        'description' => '算子名',
                                                        'type' => 'string',
                                                      ),
                                                    ),
                                                  ),
                                                ),
                                              ),
                                            ),
                                            'Lambda' => 
                                            array (
                                              'title' => 'Lambda表达式：例如:a&&b',
                                              'description' => 'Lambda表达式，例如`a&&b`。',
                                              'type' => 'string',
                                            ),
                                            'Exclusion' => 
                                            array (
                                              'title' => '排除',
                                              'description' => '排除',
                                              'type' => 'integer',
                                              'format' => 'int32',
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
                        'HitScore' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'HitScore' => 
                            array (
                              'description' => '当前文件命中的评分项信息，包含命中规则所关联的评分项以及人工添加的评分项。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'ScoreName' => 
                                  array (
                                    'description' => '评分项的名称。',
                                    'type' => 'string',
                                    'example' => '投诉',
                                  ),
                                  'ScoreNumber' => 
                                  array (
                                    'description' => '评分项的分数，正数表示加分，负分表示减分。',
                                    'type' => 'string',
                                    'example' => '-20',
                                  ),
                                  'ScoreId' => 
                                  array (
                                    'description' => '评分项id。',
                                    'type' => 'string',
                                    'example' => '123456',
                                  ),
                                  'RuleId' => 
                                  array (
                                    'description' => '命中规则的规则id，若存在，则表示是规则关联的评分项；不存在则表示是人工添加的评分项。',
                                    'type' => 'string',
                                    'example' => '123',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'Recording' => 
                        array (
                          'description' => '录音文件信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Remark13' => 
                            array (
                              'description' => '自定义数据13。',
                              'type' => 'string',
                              'example' => 'XXX',
                            ),
                            'Callee' => 
                            array (
                              'description' => '被叫号码。',
                              'type' => 'string',
                              'example' => '1888888****',
                            ),
                            'DialogueSize' => 
                            array (
                              'description' => '对话轮数。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '32',
                            ),
                            'PrimaryId' => 
                            array (
                              'description' => '录音文件ID。',
                              'type' => 'string',
                              'example' => '3437500',
                            ),
                            'Remark12' => 
                            array (
                              'description' => '自定义数据12。',
                              'type' => 'string',
                              'example' => 'XXX',
                            ),
                            'Remark1' => 
                            array (
                              'description' => '自定义数据1',
                              'type' => 'string',
                              'example' => 'XXX',
                            ),
                            'Remark7' => 
                            array (
                              'description' => '自定义数据7。',
                              'type' => 'string',
                              'example' => 'XXX',
                            ),
                            'Remark8' => 
                            array (
                              'description' => '自定义数据8。',
                              'type' => 'string',
                              'example' => 'XXX',
                            ),
                            'Remark2' => 
                            array (
                              'description' => '自定义数据2',
                              'type' => 'string',
                              'example' => 'XXX',
                            ),
                            'CallId' => 
                            array (
                              'description' => '通话ID。',
                              'type' => 'string',
                              'example' => 'XXXX',
                            ),
                            'Remark9' => 
                            array (
                              'description' => '自定义数据9。',
                              'type' => 'string',
                              'example' => 'XXX',
                            ),
                            'Name' => 
                            array (
                              'description' => '录音文件名称。',
                              'type' => 'string',
                              'example' => '123456.mkv',
                            ),
                            'Remark6' => 
                            array (
                              'description' => '自定义数据6',
                              'type' => 'string',
                              'example' => 'XXX',
                            ),
                            'Remark10' => 
                            array (
                              'description' => '自定义数据10。',
                              'type' => 'string',
                              'example' => 'XXX',
                            ),
                            'Business' => 
                            array (
                              'description' => '业务线名称，用于分类统计',
                              'type' => 'string',
                              'example' => '客服业务线',
                            ),
                            'Remark3' => 
                            array (
                              'description' => '自定义数据3',
                              'type' => 'string',
                              'example' => 'XXX',
                            ),
                            'Url' => 
                            array (
                              'description' => '文件地址。',
                              'type' => 'string',
                              'example' => 'http://aliyun.com/audio.wav',
                            ),
                            'Remark11' => 
                            array (
                              'description' => '自定义数据11。',
                              'type' => 'string',
                              'example' => 'XXX',
                            ),
                            'Remark4' => 
                            array (
                              'description' => '自定义数据4',
                              'type' => 'string',
                              'example' => 'XXX',
                            ),
                            'CallType' => 
                            array (
                              'description' => '呼叫类型：1：呼出；3：呼入。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                            'Caller' => 
                            array (
                              'description' => '主叫号码。',
                              'type' => 'string',
                              'example' => '0108888****',
                            ),
                            'DataSetName' => 
                            array (
                              'description' => '文件所属数据集，当文件是数据集上传时有值。',
                              'type' => 'string',
                              'example' => 'XXXX',
                            ),
                            'Duration' => 
                            array (
                              'description' => '通话时长，单位：秒。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '60',
                            ),
                            'Remark5' => 
                            array (
                              'description' => '自定义数据5',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1232',
                            ),
                            'Id' => 
                            array (
                              'description' => '文件ID，即请求参数中的callId，若未指定则会随机生成一个。',
                              'type' => 'string',
                              'example' => 'XXXXX',
                            ),
                            'CallTime' => 
                            array (
                              'description' => '录音生成时间戳，精确到毫秒。',
                              'type' => 'string',
                              'example' => '1563967699000',
                            ),
                            'TaskConfigId' => 
                            array (
                              'type' => 'integer',
                              'format' => 'int64',
                            ),
                            'TaskConfigName' => 
                            array (
                              'type' => 'string',
                            ),
                          ),
                        ),
                        'Agent' => 
                        array (
                          'description' => '客服相关信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Name' => 
                            array (
                              'description' => '客服姓名。',
                              'type' => 'string',
                              'example' => '智能对话分析客服',
                            ),
                            'SkillGroup' => 
                            array (
                              'description' => '技能组名称。',
                              'type' => 'string',
                              'example' => '质检技能',
                            ),
                            'Id' => 
                            array (
                              'description' => '客服ID。',
                              'type' => 'string',
                              'example' => '28240****15643',
                            ),
                          ),
                        ),
                        'SchemeIdList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'SchemeIdList' => 
                            array (
                              'description' => '质检方案ID列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '质检方案ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '13xxx',
                              ),
                            ),
                          ),
                        ),
                        'SchemeNameList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'SchemeNameList' => 
                            array (
                              'description' => '质检方案名称列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '质检方案名称。',
                                'type' => 'string',
                                'example' => '售前通用方案',
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
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3CEA0495-341B-4482-9AD9-8191EF4***\\",\\n  \\"Success\\": true,\\n  \\"ResultCountId\\": \\"XXX\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"Count\\": 1,\\n  \\"Data\\": {\\n    \\"ResultInfo\\": [\\n      {\\n        \\"Status\\": 0,\\n        \\"AssignmentTime\\": \\"2021-03-02T14:37Z\\",\\n        \\"LastDataId\\": \\"4498420@a_z@93EAADF1-01D3-44BD-8AC9-F57F447EFCE8_1614*****\\",\\n        \\"ErrorMessage\\": \\"xxx\\",\\n        \\"Reviewer\\": \\"xxx\\",\\n        \\"CreateTime\\": \\"2019-07-24T19:31Z\\",\\n        \\"ReviewStatus\\": 1,\\n        \\"ReviewTimeLong\\": \\"1602743090\\",\\n        \\"TaskName\\": \\"test\\",\\n        \\"ReviewResult\\": 0,\\n        \\"Score\\": 100,\\n        \\"CreateTimeLong\\": \\"1602743090\\",\\n        \\"ReviewTime\\": \\"2019-07-24T19:31Z\\",\\n        \\"Comments\\": \\"xx\\",\\n        \\"TaskId\\": \\"A6BEC8D-9A5B-4BE5-8432-4F635E***\\",\\n        \\"ReviewType\\": 1,\\n        \\"Resolver\\": \\"XXX\\",\\n        \\"AsrResult\\": {\\n          \\"AsrResult\\": [\\n            {\\n              \\"Words\\": \\"xx\\",\\n              \\"Begin\\": 10000,\\n              \\"EmotionValue\\": 1,\\n              \\"End\\": 0,\\n              \\"SpeechRate\\": 50,\\n              \\"Role\\": \\"客户\\"\\n            }\\n          ]\\n        },\\n        \\"HitResult\\": {\\n          \\"HitResult\\": [\\n            {\\n              \\"Type\\": \\"0417回归类型\\",\\n              \\"ReviewResult\\": 0,\\n              \\"Name\\": \\"20190417回归3\\",\\n              \\"Rid\\": \\"1276\\",\\n              \\"Hits\\": {\\n                \\"Hit\\": [\\n                  {\\n                    \\"KeyWords\\": {\\n                      \\"KeyWord\\": [\\n                        {\\n                          \\"From\\": 1,\\n                          \\"To\\": 2,\\n                          \\"Val\\": \\"test\\",\\n                          \\"Cid\\": \\"xxxx\\"\\n                        }\\n                      ]\\n                    },\\n                    \\"Cid\\": {\\n                      \\"Cid\\": [\\n                        \\"xxxx\\"\\n                      ]\\n                    },\\n                    \\"Phrase\\": {\\n                      \\"EmotionValue\\": 0,\\n                      \\"End\\": 300,\\n                      \\"Words\\": \\"xxx\\",\\n                      \\"Role\\": \\"客服\\",\\n                      \\"Begin\\": 300\\n                    }\\n                  }\\n                ]\\n              },\\n              \\"SchemeId\\": 0,\\n              \\"SchemeVersion\\": 0,\\n              \\"Conditions\\": {\\n                \\"Conditions\\": [\\n                  {\\n                    \\"Cid\\": \\"\\",\\n                    \\"Id\\": 0,\\n                    \\"Rid\\": \\"\\",\\n                    \\"Check_range\\": {\\n                      \\"RoleId\\": 0,\\n                      \\"Role\\": \\"\\",\\n                      \\"Anchor\\": {\\n                        \\"Cid\\": \\"\\",\\n                        \\"Location\\": \\"\\",\\n                        \\"Hit_time\\": 0\\n                      },\\n                      \\"Range\\": {\\n                        \\"From\\": 0,\\n                        \\"To\\": 0\\n                      },\\n                      \\"TimeRange\\": {\\n                        \\"From\\": 0,\\n                        \\"To\\": 0\\n                      },\\n                      \\"Absolute\\": true,\\n                      \\"AllSentencesSatisfy\\": true\\n                    },\\n                    \\"Operators\\": {\\n                      \\"Operator\\": [\\n                        {\\n                          \\"Oid\\": \\"\\",\\n                          \\"Id\\": 0,\\n                          \\"Type\\": \\"\\",\\n                          \\"Param\\": {\\n                            \\"Keywords\\": {\\n                              \\"Keyword\\": [\\n                                \\"\\"\\n                              ]\\n                            },\\n                            \\"Regex\\": \\"\\",\\n                            \\"NotRegex\\": \\"\\",\\n                            \\"Phrase\\": \\"\\",\\n                            \\"Interval\\": 0,\\n                            \\"IntervalEnd\\": 0,\\n                            \\"Threshold\\": 0,\\n                            \\"In_sentence\\": true,\\n                            \\"Target\\": 0,\\n                            \\"From_end\\": true,\\n                            \\"KeywordExtension\\": 0,\\n                            \\"Case_sensitive\\": true,\\n                            \\"Near_dialogue\\": true,\\n                            \\"MinWordSize\\": 0,\\n                            \\"Hit_time\\": 0,\\n                            \\"Excludes\\": {\\n                              \\"Exclude\\": [\\n                                \\"\\"\\n                              ]\\n                            },\\n                            \\"From\\": 0,\\n                            \\"CheckFirstSentence\\": true,\\n                            \\"Average\\": true,\\n                            \\"BeginType\\": \\"\\",\\n                            \\"EndType\\": \\"\\",\\n                            \\"CompareOperator\\": \\"\\",\\n                            \\"ContextChatMatch\\": true,\\n                            \\"KeywordMatchSize\\": 0,\\n                            \\"MaxEmotionChangeValue\\": 0,\\n                            \\"CheckType\\": 0,\\n                            \\"DelayTime\\": 0,\\n                            \\"FlowNodePrerequisiteParam\\": {\\n                              \\"NodeId\\": 0,\\n                              \\"NodeName\\": \\"\\",\\n                              \\"NodeMatchStatus\\": 0\\n                            },\\n                            \\"IntentModelCheckParm\\": {\\n                              \\"ModelScene\\": \\"\\",\\n                              \\"Intents\\": {\\n                                \\"Intent\\": [\\n                                  {\\n                                    \\"Id\\": 0,\\n                                    \\"Name\\": \\"\\"\\n                                  }\\n                                ]\\n                              }\\n                            }\\n                          },\\n                          \\"Name\\": \\"\\"\\n                        }\\n                      ]\\n                    },\\n                    \\"Lambda\\": \\"\\",\\n                    \\"Exclusion\\": 0\\n                  }\\n                ]\\n              }\\n            }\\n          ]\\n        },\\n        \\"HitScore\\": {\\n          \\"HitScore\\": [\\n            {\\n              \\"ScoreName\\": \\"投诉\\",\\n              \\"ScoreNumber\\": \\"-20\\",\\n              \\"ScoreId\\": \\"123456\\",\\n              \\"RuleId\\": \\"123\\"\\n            }\\n          ]\\n        },\\n        \\"Recording\\": {\\n          \\"Remark13\\": \\"XXX\\",\\n          \\"Callee\\": \\"1888888****\\",\\n          \\"DialogueSize\\": 32,\\n          \\"PrimaryId\\": \\"3437500\\",\\n          \\"Remark12\\": \\"XXX\\",\\n          \\"Remark1\\": \\"XXX\\",\\n          \\"Remark7\\": \\"XXX\\",\\n          \\"Remark8\\": \\"XXX\\",\\n          \\"Remark2\\": \\"XXX\\",\\n          \\"CallId\\": \\"XXXX\\",\\n          \\"Remark9\\": \\"XXX\\",\\n          \\"Name\\": \\"123456.mkv\\",\\n          \\"Remark6\\": \\"XXX\\",\\n          \\"Remark10\\": \\"XXX\\",\\n          \\"Business\\": \\"客服业务线\\",\\n          \\"Remark3\\": \\"XXX\\",\\n          \\"Url\\": \\"http://aliyun.com/audio.wav\\",\\n          \\"Remark11\\": \\"XXX\\",\\n          \\"Remark4\\": \\"XXX\\",\\n          \\"CallType\\": 1,\\n          \\"Caller\\": \\"0108888****\\",\\n          \\"DataSetName\\": \\"XXXX\\",\\n          \\"Duration\\": 60,\\n          \\"Remark5\\": 1232,\\n          \\"Id\\": \\"XXXXX\\",\\n          \\"CallTime\\": \\"1563967699000\\",\\n          \\"TaskConfigId\\": 0,\\n          \\"TaskConfigName\\": \\"\\"\\n        },\\n        \\"Agent\\": {\\n          \\"Name\\": \\"智能对话分析客服\\",\\n          \\"SkillGroup\\": \\"质检技能\\",\\n          \\"Id\\": \\"28240****15643\\"\\n        },\\n        \\"SchemeIdList\\": {\\n          \\"SchemeIdList\\": [\\n            0\\n          ]\\n        },\\n        \\"SchemeNameList\\": {\\n          \\"SchemeNameList\\": [\\n            \\"售前通用方案\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetResultResponse>\\n    <code>200</code>\\n    <pageNumber>1</pageNumber>\\n    <data>\\n        <score>105</score>\\n        <agent>\\n            <skillGroup>Default</skillGroup>\\n            <name>张三</name>\\n            <id>88888888</id>\\n        </agent>\\n        <createTime>2019-11-22T16:46Z</createTime>\\n        <reviewResult>0</reviewResult>\\n        <recording>\\n            <callId>88888</callId>\\n            <duration>14</duration>\\n            <callee>1888888****</callee>\\n            <name>audio.wav</name>\\n            <id>5defd588-6162-449f-a24f-cea***</id>\\n            <primaryId>123</primaryId>\\n            <callTime>1574412217000</callTime>\\n            <callType>1</callType>\\n            <url>http://aliyun.com/audio.wav</url>\\n        </recording>\\n        <reviewStatus>0</reviewStatus>\\n        <hitResult>\\n            <name>20190417回归3</name>\\n            <rid>1277</rid>\\n        </hitResult>\\n        <taskId>EB414A60-815F-441A-B0A8-BD14****</taskId>\\n        <status>1</status>\\n    </data>\\n    <requestId>5AFBE205-A482-4EFE-9CE0-26A9542AE8F7</requestId>\\n    <success>true</success>\\n    <count>1</count>\\n    <pageSize>10</pageSize>\\n    <message>successful</message>\\n</GetResultResponse>","errorExample":""}]',
      'title' => '获取质检结果',
      'summary' => '查询质检结果：部分结果需要入参requiredFields明确指定方可返回。服务地址（Region）请选择为杭州（cn-hangzhou）。',
      'description' => '可以查询通过[UploadAudioData](https://help.aliyun.com/document_detail/139399.html)、[UploadData](https://help.aliyun.com/document_detail/111394.html)上传的数据，也可以查询数据集质检任务[SubmitQualityCheckTask](https://help.aliyun.com/document_detail/158890.html)的数据。可以根据任务ID（taskId）查询，也可以根据时间范围查询。
此接⼝返回结果中默认只返回部分参数，可通过请求参数中的requiredFields来⾃定义设置返回参数中需要返回哪些字段。',
      'requestParamsDescription' => '### 请求参数JSON字符串信息
| 属性 | 值类型 | 是否必须 | 说明 |
| --- | --- | --- | --- |
| isSchemeData | Integer | 否 | 是否将数据上传至新版智能对话分析，取值：0（否）；1（是），默认值为0。 |
| pageSize | Integer | 否 | 每页返回的数据数，要求大于0，小于100，默认10。 |
| pageNumber | Integer | 否 | 要求返回的第几页的数据，默认1。当查询超过10000条之后的数据时，不支持跳页查询，仅支持向下连续翻页，并且需要传入lastDataId参数。（例如：当前返回每页显示100条，当前为101页，那么后续查询只能查询102页，不可直接查询103页） |
| requiredFields | String | 否 | 返回结果需要包括哪些字段，多个字段用逗号分隔，请按需选择；可选字段：taskId（任务id），score（得分），status（状态），recording（文件信息），recording.dataSet（数据集名称），asrResult（转写结果），hitResult（质检结果），comments（复核意见），agent（坐席信息）等；默认值：score,status,taskId,hitResult。 |
| excludeFields | String | 否 | 返回结果中不需要包括哪些字段，通常是子字段，多个字段用逗号分隔；取值：hitResult.hits |
| taskId | String | 否 | 上传待检数据后回传的taskId。 |
| startTime | String | 否 | 按任务上传时间（API调用时间）区间查询，区间的开始时间，格式\'yyyy-MM-dd HH:mm:ss\'。 |
| endTime | String | 否 | 按任务上传时间（API调用时间）区间查询，区间的结束时间，格式\'yyyy-MM-dd HH:mm:ss\'。 |
| callStartTime | String | 否 | 按录音发生时间（上传数据时接口中指定的）区间查询，区间的开始时间，格式\'yyyy-MM-dd HH:mm:ss\'。 |
| callEndTime | String | 否 | 按录音发生时间（上传数据时接口中指定的）区间查询，区间的结束时间，格式\'yyyy-MM-dd HH:mm:ss\'。 |
| assignmentStartTime | String | 否 | 按分配时间（最后一次分配质检员的时间）区间查询，区间的开始时间，格式\'yyyy-MM-dd HH:mm:ss\'。 |
| assignmentEndTime | String | 否 | 按分配时间（最后一次分配质检员的时间）区间查询，区间的结束时间，格式\'yyyy-MM-dd HH:mm:ss\'。 |
| reviewStartTime | String | 否 | 按复核时间（最后一次复核保存的时间）区间查询，区间的开始时间，格式\'yyyy-MM-dd HH:mm:ss\'。 |
| reviewEndTime | String | 否 | 按复核时间（最后一次复核保存的时间）区间查询，区间的结束时间，格式\'yyyy-MM-dd HH:mm:ss\'。 |
| datasetId | Long | 否 | 数据集id，当sourceType=3时，可以指定文件来自哪个数据集。 |
| sourceType | Integer | 否 | 文件来源，0：呼叫中心（即API上传）；3：数据集。 |
| dataType | Integer | 否 | 文件类型，0：文本；1：音频。 |
| sourceDataType | Integer | 否 | 质检结果类型，1：离线语音质检；2：离线文本质检；3：实时语音质检；4：实时文本质检；5：呼叫中心二次质检；51：呼叫语音中心二次质检；52：呼叫文本中心二次质检；11：数据集语音；12：数据集文本。（**仅新版智能对话分析适用**）|
| customerName | String | 否 | 客户姓名。（**仅新版智能对话分析适用**）|
| customerId | String | 否 | 客户ID。（**仅新版智能对话分析适用**） |
| sessionGroupId | String | 否 | 会话组ID。（**仅新版智能对话分析适用**） |
| sessionGroupExists | Boolean | 否 | 是否属于会话组。（**仅新版智能对话分析适用**） |
| customerServiceName | String | 否 | 客服姓名，只返回该客服的结果。 |
| customerServiceId | String | 否 | 客服ID，只返回该客服的结果。 |
| skillGroupName | String | 否 | 技能组名称。 |
| caller | String | 否 | 主叫号码。 |
| callee | String | 否 | 被叫号码。 |
| callId | String | 否 | 通话ID。 |
| fileName | String | 否 | 文件完整名称，不支持模糊搜索。 |
| ruleIds | List | 否 | 命中的质检规则ID集合，返回命中了这些规则中任意一个或多个的结果。 |
| schemeIdList | List | 否 | 按任务所使用的质检方案ID搜索。（**仅新版智能对话分析适用**） |
| schemeTaskConfigId | Integer | 否 | 质检任务ID。（**仅新版智能对话分析适用**） |
| resolver | String | 否 | 复核员的账号ID，只返回该复核员复核的结果。 |
| reviewer | String | 否 | 分配的质检员的账号ID，只返回分配该质检员的结果。 |
| status | Integer | 否 | 执行状态，0：执行中；1：已完成；6：失败。 |
| hitStatus | Integer | 否 | 命中状态，0：无规则命中；1：有规则命中。 |
| reviewStatus | Integer | 否 | 复核状态，0：未复核；1：已复核；3：申诉中；4：申诉成功；5：申诉驳回。 |
| complainStatus | Integer | 否 | 申诉状态，0：未申诉；1：已申诉。 |
| scoreType | Integer | 否 | 与totalScore一起根据质检得分筛选，1：返回等于totalScore的记录；3：返回大于totalScore的记录；5：返回小于totalScore的记录。 |
| totalScore | Integer | 否 | 与scoreType一起根据质检得分筛选，分值。 |
| duration | Integer | 否 | 通话时长，单位：秒。需配合durationType、endDuration一起使用。 |
| durationType | Integer | 否 | 通话时长查询的范围类型，可选值：1（等于）、3（大于）、5（小于）、7（区间）。 |
| endDuration | Integer | 否 | 通话时长按区间范围查询时的结束值，此时使用duration来指定区间的开始值。 |
| dialogueSize | Integer | 否 | 对话轮数。需配合dialogueSizeType、endDialogueSize一起使用。 |
| dialogueSizeType | Integer | 否 | 对话轮数查询的范围类型，可选值：1（等于）、3（大于）、5（小于）、7（区间）。 |
| endDialogueSize | Integer | 否 | 对话轮数按区间范围查询时的结束值，此时使用 dialogueSize 来指定区间的开始值。 |
| lastDataId | String | 否 | 上次查询到的数据中最后一条数据的lastDataId的值，当通过GetResult查询超过10000条以上的数据时，每次请求入参中需要携带上一次查询结果中最后一条数据的lastDataId的值。 |
| fileId | String | 否 | 对应相应的电话或工单数据ID，返回结果中只包含该fileId的数据。 |
| sortField | String | 否 | 按指定参数进行排序，目前仅质检得分以及自定义数据1/2/3/4/5支持排序，所以可输入的值为：score/remark1/remark2/remark3/remark4/remark5。 |
| sortType | String | 否 | 排序规则，可输入值为：desc/asc,desc：降序，asc：升序。 |
| remark1 | String | 否 | 自定义数据1。 |
| remark2 | String | 否 | 自定义数据2。 |
| remark3 | String | 否 | 自定义数据3。 |
| remark4 | String | 否 | 自定义数据4。 |
| remark5 | Long | 否 | 自定义数据5，该字段支持精准查询，也支持按范围查询，需配合remark5Type和endRemark5一起使用。） |
| remark5Type | Integer | 否 | 自定义数据5按范围查询时的范围类型：3（大于）、5（小于）、7（区间），默认为等于（精确查询）。 |
| endRemark5 | Long | 否 | 自定义数据5按区间查询时的结束值，此时使用remark5来指定区间的开始值。 |
| remark6 | String | 否 | 自定义数据6。 |
| remark7 | String | 否 | 自定义数据7。 |
| remark8 | String | 否 | 自定义数据8。 |
| remark9 | String | 否 | 自定义数据9。 |
| remark10 | String | 否 | 自定义数据10。 |
| remark11 | String | 否 | 自定义数据11。 |
| remark12 | String | 否 | 自定义数据12。 |
| remark13 | Long | 否 | 自定义数据13，该字段支持精准查询，也支持按范围查询，需配合remark13Type和endRemark13一起使用。） |
| remark13Type | Integer | 否 | 自定义数据13按范围查询时的范围类型：3（大于）、5（小于）、7（区间），默认为等于（精确查询）。 |
| endRemark13 | Long | 否 | 自定义数据13按区间查询时的结束值，此时使用remark13来指定区间的开始值。 |
| remark14 | Long | 否 | 自定义数据14，该字段支持精准查询，也支持按范围查询，需配合remark14Type和endRemark14一起使用。） |
| remark14Type | Integer | 否 | 自定义数据14按范围查询时的范围类型：3（大于）、5（小于）、7（区间），默认为等于（精确查询）。 |
| endRemark14 | Long | 否 | 自定义数据14按区间查询时的结束值，此时使用remark14来指定区间的开始值。 |
| remark15 | String | 否 | 自定义数据15。 |
| remark16 | String | 否 | 自定义数据16。 |
| remark17 | String | 否 | 自定义数据17。 |
| remark18 | String | 否 | 自定义数据18。 |
| remark19 | String | 否 | 自定义数据19。 |
| remark20 | String | 否 | 自定义数据20。 |
| remark21 | String | 否 | 自定义数据21。 |
| remark22 | String | 否 | 自定义数据22。 |
| remark23 | String | 否 | 自定义数据23。 |
| remark24 | String | 否 | 自定义数据24。 |
| remark25 | String | 否 | 自定义数据25。 |
| remark1List~remark25List | List | 否 | 自定义数据1到25的批量查询，例如remark1List:[1,2,3]，会按自定义数据1等于1或者2或者3来搜索 |',
      'responseParamsDescription' => '## 关键信息Val详解

| 算子名称 | val值示例 | 说明 |
| --- | --- | --- |
| 文字检查-关键字检查 | 你好 | 当前句子中命中该算子的文本，即为复核页面查看命中位置时，句子中红色高亮的文本内容 |
| 文字检查-文本相似度检查 | 82 | 相似度值 |
| 文字检查-正则表达式检查 | 你好 | 当前句子中命中该算子的文本，即为复核页面查看命中位置时，句子中红色高亮的文本内容 |
| 文字检查-上下文重复检查 | 你好 | 当前句子中命中该算子的文本，即为复核页面查看命中位置时，句子中红色高亮的文本内容 |
| 语音检查-通话静音检查 | 3200 | 静音时长（毫秒） |
| 语音检查-语速检查 | 365 | 当前句子的语速值 |
| 语音检查-抢话检查 | 2：8 | 类型为"m:n"，m为抢话时长（秒），即客服与客户说话交叉时间；n为当前句子的字数 |
| 语音检查-角色判断 | 你好 | 当前句子中命中该算子的文本，即为复核页面查看命中位置时，句子中红色高亮的文本内容 |
| 语音检查-非正常挂机 | 3567 | 最后一句的话结束时间，到挂机时间的毫秒数 |
| 语音检查-录音时长检查 | 56088 | 录音时长的毫秒数 |
| 模型检查-情绪识别模型 | 辱骂 | 情绪的具体类型，例如辱骂、高危 |
| 模型检查-客服违规检测模型 | 讥讽 | 客服违规的具体类型，例如讥讽、反问、辱骂 |',
      'extraInfo' => ' ',
    ),
    'GetResultToReview' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"taskId":"任务ID",“ fileId”:"文件ID"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '82C91484-B2D5-4D2A-A21F-A6D73F4***',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：**true**表示成功；**false/null**表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '详细返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '任务当前状态；0：未完成；1：已完成；调用方可根据此字段判断任务是否完成；非0、1表示出错。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'AudioScheme' => 
                  array (
                    'description' => '音频URL的协议，可能值：http、https。',
                    'type' => 'string',
                    'example' => 'https',
                  ),
                  'AudioURL' => 
                  array (
                    'description' => '音频URL，不含http://、https://，与AudioSchedme组成完整的URL。',
                    'type' => 'string',
                    'example' => 'sca-ccc-test.oss-cn-beijing.aliyuncs.com/xxxxx',
                  ),
                  'TotalScore' => 
                  array (
                    'description' => '质检得分。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '99',
                  ),
                  'FileId' => 
                  array (
                    'description' => '文件ID。',
                    'type' => 'string',
                    'example' => 'e790e6c919d84b82b64ee*****',
                  ),
                  'FileMergeName' => 
                  array (
                    'description' => '文件名称。',
                    'type' => 'string',
                    'example' => 'xxx.wav',
                  ),
                  'Comments' => 
                  array (
                    'description' => '复核意见。',
                    'type' => 'string',
                    'example' => 'xxx',
                  ),
                  'Vid' => 
                  array (
                    'description' => '文件ID。',
                    'type' => 'string',
                    'example' => '6fa76916-3ce6-45d8-ac64-01b7f31***',
                  ),
                  'Dialogues' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Dialogue' => 
                      array (
                        'description' => '对话数据。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '对话数据。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Words' => 
                            array (
                              'description' => '对话内容',
                              'type' => 'string',
                              'example' => '你好有什么可以帮您',
                            ),
                            'Identity' => 
                            array (
                              'description' => '角色标识，离线语音场景下角色只有客服/客户，离线文本质检场景下，显示的是上传数据时传入的identity。',
                              'type' => 'string',
                              'example' => '客服',
                            ),
                            'Begin' => 
                            array (
                              'description' => '这句话的开始时间相对对话整体开始时间的偏移量，毫秒级，例如录音总时长为2分10秒，客户的谋一句话是在1分12秒时开始讲的，1分20秒时讲完，则begin的值为72000，end的值为80000。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '72000',
                            ),
                            'BeginTime' => 
                            array (
                              'description' => '这句话开始讲话时的绝对时间。',
                              'type' => 'string',
                              'example' => '2019-10-01 11:12:01',
                            ),
                            'EmotionValue' => 
                            array (
                              'description' => '情绪能量值，取值为音量分贝值/10。取值范围：[1,10]。值越高情绪越强烈。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '7',
                            ),
                            'End' => 
                            array (
                              'description' => '这句话的开始时间相对对话整体开始时间的偏移量，毫秒级，例如录音总时长为2分10秒，客户的谋一句话是在1分12秒时开始讲的，1分20秒时讲完，则begin的值为72000，end的值为80000。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '80000',
                            ),
                            'SpeechRate' => 
                            array (
                              'description' => '本句的平均语速，单位：字数/分钟。

',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '200',
                            ),
                            'Role' => 
                            array (
                              'description' => '该句话的角色，可能值：客服；客户。',
                              'type' => 'string',
                              'example' => '客服',
                            ),
                            'SilenceDuration' => 
                            array (
                              'description' => '相同角色的两个相邻句子之间的静音时长，单位为秒。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                            'HourMinSec' => 
                            array (
                              'description' => '这句话的时分秒格式的开始时间，格式：hh:mm:ss',
                              'type' => 'string',
                              'example' => '00:08',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'HandScoreInfoList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                    ),
                  ),
                  'HitRuleReviewInfoList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'HitRuleReviewInfo' => 
                      array (
                        'description' => '命中检测项信息。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '命中规则信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ScoreSubName' => 
                            array (
                              'description' => '历史遗留字段，请忽略。',
                              'type' => 'string',
                              'example' => 'xxx',
                            ),
                            'ScoreNum' => 
                            array (
                              'description' => '评分的分值。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '-10',
                            ),
                            'AutoReview' => 
                            array (
                              'description' => '是否自动审核，可能值：1：不自动审核，3：自动审核。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                            'ScoreSubId' => 
                            array (
                              'description' => '历史遗留字段，请忽略。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => 'xxx',
                            ),
                            'Complainable' => 
                            array (
                              'description' => '当前评分项坐席是否可以提交申诉（终审后不可再次申诉）。',
                              'type' => 'boolean',
                              'example' => 'true',
                            ),
                            'ScoreId' => 
                            array (
                              'description' => '历史遗留字段，请忽略。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => 'xxx',
                            ),
                            'RuleName' => 
                            array (
                              'description' => '检测项名称。',
                              'type' => 'string',
                              'example' => '你好',
                            ),
                            'Rid' => 
                            array (
                              'description' => '检测项ID',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '451',
                            ),
                            'ConditionHitInfoList' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'ConditionHitInfo' => 
                                array (
                                  'description' => '命中的条件信息。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'KeyWords' => 
                                      array (
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'KeyWord' => 
                                          array (
                                            'description' => '命中的关键信息，在复核页面上高亮展示的信息，例如关键词检查算子命中的关键词、客服模型检查算子命中的具体类别信息等。',
                                            'type' => 'array',
                                            'items' => 
                                            array (
                                              'type' => 'object',
                                              'properties' => 
                                              array (
                                                'From' => 
                                                array (
                                                  'description' => '需要高亮展示的关键字从第几个字符开始，取值范围从0开始，最大值为当句话字符总数减1。高亮的字包含from。

',
                                                  'type' => 'integer',
                                                  'format' => 'int32',
                                                  'example' => '1',
                                                ),
                                                'Val' => 
                                                array (
                                                  'description' => '算子命中的关键信息，详见下方返回参数说明中的**关键信息Val详解**。',
                                                  'type' => 'string',
                                                  'example' => '你好',
                                                ),
                                                'Pid' => 
                                                array (
                                                  'description' => '当前句子在所有句子中的下标值，即当前句子是请求参数中dialogue数组中的第几个，从0开始。',
                                                  'type' => 'integer',
                                                  'format' => 'int32',
                                                  'example' => '2',
                                                ),
                                                'Tid' => 
                                                array (
                                                  'description' => '语音ID。',
                                                  'type' => 'string',
                                                  'example' => '6fa76916-3ce6-45d8-ac64-01b7f31c7295',
                                                ),
                                                'Cid' => 
                                                array (
                                                  'description' => '条件ID。',
                                                  'type' => 'string',
                                                  'example' => '2000',
                                                ),
                                                'To' => 
                                                array (
                                                  'description' => '需要高亮展示的关键字到第几个字符结束，最大值为当句话字符总数减1。高亮的字不包含to，例如一句话为“不可能给你退货的”，from=0，to=3，那么需要高亮的关键字就是“不可能”三个字。

',
                                                  'type' => 'integer',
                                                  'format' => 'int32',
                                                  'example' => '3',
                                                ),
                                                'CustomizeCode' => 
                                                array (
                                                  'description' => '内部字段，请忽略。',
                                                  'type' => 'string',
                                                  'example' => 'xxx',
                                                ),
                                              ),
                                            ),
                                          ),
                                        ),
                                      ),
                                      'Cid' => 
                                      array (
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'Cid' => 
                                          array (
                                            'description' => '命中的条件ID列表。',
                                            'type' => 'array',
                                            'items' => 
                                            array (
                                              'description' => '条件ID。',
                                              'type' => 'string',
                                              'example' => '2000',
                                            ),
                                          ),
                                        ),
                                      ),
                                      'Phrase' => 
                                      array (
                                        'description' => '当前命中检测项的句子详情',
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'Words' => 
                                          array (
                                            'description' => '对话内容。',
                                            'type' => 'string',
                                            'example' => '你好，请问有什么可以帮您',
                                          ),
                                          'Begin' => 
                                          array (
                                            'description' => '这句话的开始时间相对对话整体开始时间的偏移量，毫秒级，例如录音总时长为2分10秒，客户的谋一句话是在1分12秒时开始讲的，1分20秒时讲完，则begin的值为72000，end的值为80000。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '72000',
                                          ),
                                          'Identity' => 
                                          array (
                                            'description' => '角色标识，离线语音场景下角色只有客服/客户，离线文本质检场景下，显示的是上传数据时传入的identity。',
                                            'type' => 'string',
                                            'example' => '客服',
                                          ),
                                          'Pid' => 
                                          array (
                                            'description' => '当前句子在所有句子中的下标值，即当前句子是请求参数中dialogue数组中的第几个，从0开始。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '3',
                                          ),
                                          'EmotionValue' => 
                                          array (
                                            'description' => '情绪能量值，取值为音量分贝值/10。取值范围：[1,10]。值越高情绪越强烈。

',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '7',
                                          ),
                                          'End' => 
                                          array (
                                            'description' => '这句话的开始时间相对对话整体开始时间的偏移量，毫秒级，例如录音总时长为2分10秒，客户的谋一句话是在1分12秒时开始讲的，1分20秒时讲完，则begin的值为72000，end的值为80000。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '80000',
                                          ),
                                          'Role' => 
                                          array (
                                            'description' => '本句的角色，取值：客服、客户。',
                                            'type' => 'string',
                                            'example' => '客服',
                                          ),
                                        ),
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                            'ComplainHistories' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'ComplainHistories' => 
                                array (
                                  'description' => '申诉历史信息。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Comments' => 
                                      array (
                                        'description' => '申诉理由/申诉处理理由。',
                                        'type' => 'string',
                                        'example' => '请听一下录音，重新判定。',
                                      ),
                                      'Operator' => 
                                      array (
                                        'description' => '申诉发起人/处理人的账号ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '123456',
                                      ),
                                      'OperationTime' => 
                                      array (
                                        'description' => '处理时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-16T11:13Z',
                                      ),
                                      'OperationType' => 
                                      array (
                                        'description' => '状态：3（申诉中）；4（申诉驳回）；5（申诉通过）。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '5',
                                      ),
                                      'OperatorName' => 
                                      array (
                                        'description' => '申诉发起人/处理人的用户名。',
                                        'type' => 'string',
                                        'example' => '张三',
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                            'ReviewInfo' => 
                            array (
                              'description' => '复核信息。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'ReviewResult' => 
                                array (
                                  'description' => '复核结果，0：错误；1：正确。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '1',
                                ),
                                'ReviewTime' => 
                                array (
                                  'description' => '复核时间，yyyy-mm-ddhh:mm:ss。',
                                  'type' => 'string',
                                  'example' => '2019-10-12 17:06:00',
                                ),
                                'HitId' => 
                                array (
                                  'description' => '命中ID。',
                                  'type' => 'string',
                                  'example' => '013c68142fec4f0899fa6ee0exxx',
                                ),
                                'Reviewer' => 
                                array (
                                  'description' => '复核员ID。',
                                  'type' => 'string',
                                  'example' => '123',
                                ),
                                'Rid' => 
                                array (
                                  'description' => '检测项ID。',
                                  'type' => 'integer',
                                  'format' => 'int64',
                                  'example' => '451',
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'ManualScoreInfoList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ManualScoreInfo' => 
                      array (
                        'description' => '人工添加的检测项。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ScoreSubName' => 
                            array (
                              'description' => '历史遗留字段，请忽略。

',
                              'type' => 'string',
                              'example' => '投诉',
                            ),
                            'Complainable' => 
                            array (
                              'description' => '当前评分项坐席是否可以提交申诉（终审后不可再次申诉）。',
                              'type' => 'boolean',
                              'example' => 'true',
                            ),
                            'ScoreNum' => 
                            array (
                              'description' => '分数',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '-10',
                            ),
                            'ScoreSubId' => 
                            array (
                              'description' => '历史遗留字段，请忽略。

',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => 'xxx',
                            ),
                            'ScoreId' => 
                            array (
                              'description' => '历史遗留字段，请忽略。

',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => 'xxx',
                            ),
                            'ComplainHistories' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'ComplainHistories' => 
                                array (
                                  'description' => '申诉历史信息。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Comments' => 
                                      array (
                                        'description' => '申诉理由/申诉处理理由。',
                                        'type' => 'string',
                                        'example' => '请听一下录音，重新判定。',
                                      ),
                                      'Operator' => 
                                      array (
                                        'description' => '申诉发起人/处理人的账号ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '123456',
                                      ),
                                      'OperationTime' => 
                                      array (
                                        'description' => '处理时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-16T11:13Z',
                                      ),
                                      'OperationType' => 
                                      array (
                                        'description' => '状态：3（申诉中）；4（申诉驳回）；5（申诉通过）。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '5',
                                      ),
                                      'OperatorName' => 
                                      array (
                                        'description' => '申诉发起人/处理人的用户名。',
                                        'type' => 'string',
                                        'example' => '张三',
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
                  'ReviewHistoryList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ReviewHistory' => 
                      array (
                        'description' => '复核历史。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Type' => 
                            array (
                              'description' => '复核类型，0：自动复核；1：手工复核。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                            'OperatorName' => 
                            array (
                              'description' => '复核员用户名。',
                              'type' => 'string',
                              'example' => '张三',
                            ),
                            'TimeStr' => 
                            array (
                              'description' => '复核时间，yyyy-mm-ddhh:mm:ss。',
                              'type' => 'string',
                              'example' => '2019-10-28 15:21:00',
                            ),
                            'Score' => 
                            array (
                              'description' => '复核后的得分。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '95',
                            ),
                            'ReviewResult' => 
                            array (
                              'description' => '复核结果，1：全部检测项都正确；0：有至少一个检测项错误。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                            'ComplainResult' => 
                            array (
                              'description' => '申诉处理结果，1：全部申诉都通过；0：至少有一个不通过。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                            'OldScore' => 
                            array (
                              'description' => '复核前的得分。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '90',
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
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"82C91484-B2D5-4D2A-A21F-A6D73F4***\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Status\\": 1,\\n    \\"AudioScheme\\": \\"https\\",\\n    \\"AudioURL\\": \\"sca-ccc-test.oss-cn-beijing.aliyuncs.com/xxxxx\\",\\n    \\"TotalScore\\": 99,\\n    \\"FileId\\": \\"e790e6c919d84b82b64ee*****\\",\\n    \\"FileMergeName\\": \\"xxx.wav\\",\\n    \\"Comments\\": \\"xxx\\",\\n    \\"Vid\\": \\"6fa76916-3ce6-45d8-ac64-01b7f31***\\",\\n    \\"Dialogues\\": {\\n      \\"Dialogue\\": [\\n        {\\n          \\"Words\\": \\"你好有什么可以帮您\\",\\n          \\"Identity\\": \\"客服\\",\\n          \\"Begin\\": 72000,\\n          \\"BeginTime\\": \\"2019-10-01 11:12:01\\",\\n          \\"EmotionValue\\": 7,\\n          \\"End\\": 80000,\\n          \\"SpeechRate\\": 200,\\n          \\"Role\\": \\"客服\\",\\n          \\"SilenceDuration\\": 1,\\n          \\"HourMinSec\\": \\"00:08\\"\\n        }\\n      ]\\n    },\\n    \\"HitRuleReviewInfoList\\": {\\n      \\"HitRuleReviewInfo\\": [\\n        {\\n          \\"ScoreSubName\\": \\"xxx\\",\\n          \\"ScoreNum\\": -10,\\n          \\"AutoReview\\": 1,\\n          \\"ScoreSubId\\": 0,\\n          \\"Complainable\\": true,\\n          \\"ScoreId\\": 0,\\n          \\"RuleName\\": \\"你好\\",\\n          \\"Rid\\": 451,\\n          \\"ConditionHitInfoList\\": {\\n            \\"ConditionHitInfo\\": [\\n              {\\n                \\"KeyWords\\": {\\n                  \\"KeyWord\\": [\\n                    {\\n                      \\"From\\": 1,\\n                      \\"Val\\": \\"你好\\",\\n                      \\"Pid\\": 2,\\n                      \\"Tid\\": \\"6fa76916-3ce6-45d8-ac64-01b7f31c7295\\",\\n                      \\"Cid\\": \\"2000\\",\\n                      \\"To\\": 3,\\n                      \\"CustomizeCode\\": \\"xxx\\"\\n                    }\\n                  ]\\n                },\\n                \\"Cid\\": {\\n                  \\"Cid\\": [\\n                    \\"2000\\"\\n                  ]\\n                },\\n                \\"Phrase\\": {\\n                  \\"Words\\": \\"你好，请问有什么可以帮您\\",\\n                  \\"Begin\\": 72000,\\n                  \\"Identity\\": \\"客服\\",\\n                  \\"Pid\\": 3,\\n                  \\"EmotionValue\\": 7,\\n                  \\"End\\": 80000,\\n                  \\"Role\\": \\"客服\\"\\n                }\\n              }\\n            ]\\n          },\\n          \\"ComplainHistories\\": {\\n            \\"ComplainHistories\\": [\\n              {\\n                \\"Comments\\": \\"请听一下录音，重新判定。\\",\\n                \\"Operator\\": 123456,\\n                \\"OperationTime\\": \\"2020-10-16T11:13Z\\",\\n                \\"OperationType\\": 5,\\n                \\"OperatorName\\": \\"张三\\"\\n              }\\n            ]\\n          },\\n          \\"ReviewInfo\\": {\\n            \\"ReviewResult\\": 1,\\n            \\"ReviewTime\\": \\"2019-10-12 17:06:00\\",\\n            \\"HitId\\": \\"013c68142fec4f0899fa6ee0exxx\\",\\n            \\"Reviewer\\": \\"123\\",\\n            \\"Rid\\": 451\\n          }\\n        }\\n      ]\\n    },\\n    \\"ManualScoreInfoList\\": {\\n      \\"ManualScoreInfo\\": [\\n        {\\n          \\"ScoreSubName\\": \\"投诉\\",\\n          \\"Complainable\\": true,\\n          \\"ScoreNum\\": -10,\\n          \\"ScoreSubId\\": 0,\\n          \\"ScoreId\\": 0,\\n          \\"ComplainHistories\\": {\\n            \\"ComplainHistories\\": [\\n              {\\n                \\"Comments\\": \\"请听一下录音，重新判定。\\",\\n                \\"Operator\\": 123456,\\n                \\"OperationTime\\": \\"2020-10-16T11:13Z\\",\\n                \\"OperationType\\": 5,\\n                \\"OperatorName\\": \\"张三\\"\\n              }\\n            ]\\n          }\\n        }\\n      ]\\n    },\\n    \\"ReviewHistoryList\\": {\\n      \\"ReviewHistory\\": [\\n        {\\n          \\"Type\\": 1,\\n          \\"OperatorName\\": \\"张三\\",\\n          \\"TimeStr\\": \\"2019-10-28 15:21:00\\",\\n          \\"Score\\": 95,\\n          \\"ReviewResult\\": 1,\\n          \\"ComplainResult\\": 1,\\n          \\"OldScore\\": 90\\n        }\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取质检结果详情用于复核',
      'summary' => '获取指定文件的质检结果详情数据，用于文件复核。详情数据包括：转写文本、录音地址、命中检测项信息，有了这些信息，就可以听录音、查看转写文本、查看检测项的命中位置，进行文件复核了。',
      'requestParamsDescription' => '## 入参GetResultToReviewRequest说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| taskId| String| 是      | 任务ID，上传待检数据后返回的任务ID |
| fileId| String| 是      | 文件ID，通过获取质检结果（GetResult）可以获取到，即返回结果中的recording.id。  |',
      'responseParamsDescription' => '## 关键信息Val详解

| 算子名称 | val值示例 | 说明 |
| --- | --- | --- |
| 文字检查-关键字检查 | 你好 | 当前句子中命中该算子的文本，即为复核页面查看命中位置时，句子中红色高亮的文本内容 |
| 文字检查-文本相似度检查 | 82 | 相似度值 |
| 文字检查-正则表达式检查 | 你好 | 当前句子中命中该算子的文本，即为复核页面查看命中位置时，句子中红色高亮的文本内容 |
| 文字检查-上下文重复检查 | 你好 | 当前句子中命中该算子的文本，即为复核页面查看命中位置时，句子中红色高亮的文本内容 |
| 语音检查-通话静音检查 | 3200 | 静音时长（毫秒） |
| 语音检查-语速检查 | 365 | 当前句子的语速值 |
| 语音检查-抢话检查 | 2：8 | 类型为"m:n"，m为抢话时长（秒），即客服与客户说话交叉时间；n为当前句子的字数 |
| 语音检查-角色判断 | 你好 | 当前句子中命中该算子的文本，即为复核页面查看命中位置时，句子中红色高亮的文本内容 |
| 语音检查-非正常挂机 | 3567 | 最后一句的话结束时间，到挂机时间的毫秒数 |
| 语音检查-录音时长检查 | 56088 | 录音时长的毫秒数 |
| 模型检查-情绪识别模型 | 辱骂 | 情绪的具体类型，例如辱骂、高危 |
| 模型检查-客服违规检测模型 | 讥讽 | 客服违规的具体类型，例如讥讽、反问、辱骂 |',
    ),
    'ListSessionGroup' => 
    array (
      'summary' => '对应前端功能位置：任务管理-查看结果-任务结果-（会话组结果）上方标签页。专有云URL：ip:port/api/session/group/ListSessionGroup.json。根据会话组ID字段将多通会话聚合，进行统一管理。需要传入sessionGroupId字段，详情参考UploadData和UploadAudioData接口说明。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'jsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '详细信息见请求参数补充说明。',
            'type' => 'string',
            'required' => false,
            'example' => '{"isSchemeData":1,"pageNumber":1,"pageSize":10,"callStartTime":"2022-09-17 00:00:00","callEndTime":"2022-09-23 23:59:59","schemeTaskConfigId":368}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'ListResult<SessionGroupSummary>',
            'description' => 'ListResult<SessionGroupSummary>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Data' => 
                  array (
                    'description' => '详细数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'SessionGroupSummary',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SessionGroupId' => 
                        array (
                          'description' => '会话组ID。',
                          'type' => 'string',
                          'example' => 'SessionGroupA',
                        ),
                        'SchemeTaskConfigId' => 
                        array (
                          'description' => '质检任务ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123',
                        ),
                        'SchemeTaskConfigName' => 
                        array (
                          'description' => '质检任务名称。',
                          'type' => 'string',
                          'example' => '质检任务A',
                        ),
                        'CustomerServiceIdList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'CustomerServiceIdList' => 
                            array (
                              'description' => '客户ID列表',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '客户ID。',
                                'type' => 'string',
                                'example' => '15',
                              ),
                            ),
                          ),
                        ),
                        'CustomerServiceNameList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'CustomerServiceNameList' => 
                            array (
                              'description' => '客户名称列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '客户名称。',
                                'type' => 'string',
                                'example' => '客服人员A',
                              ),
                            ),
                          ),
                        ),
                        'CustomerIdList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'CustomerIdList' => 
                            array (
                              'description' => '客服ID列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '客服ID。',
                                'type' => 'string',
                                'example' => '13',
                              ),
                            ),
                          ),
                        ),
                        'CustomerNameList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'CustomerNameList' => 
                            array (
                              'description' => '客户名称列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '客户名称。',
                                'type' => 'string',
                                'example' => '客户人员A',
                              ),
                            ),
                          ),
                        ),
                        'CallerList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'CallerList' => 
                            array (
                              'description' => '呼叫号码列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '呼叫号码。',
                                'type' => 'string',
                                'example' => '05712****989',
                              ),
                            ),
                          ),
                        ),
                        'SkillGroupNameList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'SkillGroupNameList' => 
                            array (
                              'description' => '技能组名称列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '技能组名称。',
                                'type' => 'string',
                                'example' => '技能组A',
                              ),
                            ),
                          ),
                        ),
                        'Score' => 
                        array (
                          'description' => '质检得分，满分100。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '100',
                        ),
                        'SessionCount' => 
                        array (
                          'description' => '会话数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'HitSessionCount' => 
                        array (
                          'description' => '复核筛选条件的会话数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'CallStartTime' => 
                        array (
                          'description' => '最早会话开始时间。',
                          'type' => 'string',
                          'example' => '2022-09-26 10:09:14',
                        ),
                        'ReviewStatus' => 
                        array (
                          'description' => '复核状态；可能值：0（未复核）；1（已复核）。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'AssignStatus' => 
                        array (
                          'description' => '分配状态；可能值：0（未分配）；1（已分配）。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'ReviewerList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ReviewerList' => 
                            array (
                              'description' => '复核员列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '复核员名称。',
                                'type' => 'string',
                                'example' => '复核人员A',
                              ),
                            ),
                          ),
                        ),
                        'SessionGroupReviewedOrComplained' => 
                        array (
                          'description' => '是否为复核或申诉状态。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'LastDataId' => 
                        array (
                          'description' => '本条数据标志信息，当通过GetResult查询超过10000条以上的数据时，每次请求入参中需要携带上一次查询结果最后一条数据的lastDataId的值。',
                          'type' => 'string',
                          'example' => '4498420@a_z@93EAADF1-01D3-44BD-8AC9-F57F447EFCE8_1614*****',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Count' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2228',
              ),
              'CurrentPage' => 
              array (
                'description' => '指定返回结果的当前页码。默认值为1。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页显示条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'ResultCountId' => 
              array (
                'description' => '预留字段，暂时没有用途，请忽略。',
                'type' => 'string',
                'example' => '忽略',
              ),
              'LastDataId' => 
              array (
                'description' => '本条数据标志信息，当通过GetResult查询超过10000条以上的数据时，每次请求入参中需要携带上一次查询结果最后一条数据的lastDataId的值。',
                'type' => 'string',
                'example' => 'xxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F190ADE9-619A-447D-84E3-7E241A5C428E',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，200表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。

',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Message' => 
                  array (
                    'description' => '出错时表示出错详情，当输出多条信息时使用。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '出错时表示出错详情，当输出多条信息时使用。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Data\\": [\\n      {\\n        \\"SessionGroupId\\": \\"SessionGroupA\\",\\n        \\"SchemeTaskConfigId\\": 123,\\n        \\"SchemeTaskConfigName\\": \\"质检任务A\\",\\n        \\"CustomerServiceIdList\\": {\\n          \\"CustomerServiceIdList\\": [\\n            \\"15\\"\\n          ]\\n        },\\n        \\"CustomerServiceNameList\\": {\\n          \\"CustomerServiceNameList\\": [\\n            \\"客服人员A\\"\\n          ]\\n        },\\n        \\"CustomerIdList\\": {\\n          \\"CustomerIdList\\": [\\n            \\"13\\"\\n          ]\\n        },\\n        \\"CustomerNameList\\": {\\n          \\"CustomerNameList\\": [\\n            \\"客户人员A\\"\\n          ]\\n        },\\n        \\"CallerList\\": {\\n          \\"CallerList\\": [\\n            \\"05712****989\\"\\n          ]\\n        },\\n        \\"SkillGroupNameList\\": {\\n          \\"SkillGroupNameList\\": [\\n            \\"技能组A\\"\\n          ]\\n        },\\n        \\"Score\\": 100,\\n        \\"SessionCount\\": 1,\\n        \\"HitSessionCount\\": 1,\\n        \\"CallStartTime\\": \\"2022-09-26 10:09:14\\",\\n        \\"ReviewStatus\\": 1,\\n        \\"AssignStatus\\": 1,\\n        \\"ReviewerList\\": {\\n          \\"ReviewerList\\": [\\n            \\"复核人员A\\"\\n          ]\\n        },\\n        \\"SessionGroupReviewedOrComplained\\": true,\\n        \\"LastDataId\\": \\"4498420@a_z@93EAADF1-01D3-44BD-8AC9-F57F447EFCE8_1614*****\\"\\n      }\\n    ]\\n  },\\n  \\"Count\\": 2228,\\n  \\"CurrentPage\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"ResultCountId\\": \\"忽略\\",\\n  \\"LastDataId\\": \\"xxx\\",\\n  \\"RequestId\\": \\"F190ADE9-619A-447D-84E3-7E241A5C428E\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": {\\n    \\"Message\\": [\\n      \\"无\\"\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '获取会话组列表',
      'requestParamsDescription' => '### JsonStr说明
| 属性 | 值类型 | 是否必须 | 描述 |
| --- | --- | --- | --- |
| pageNumber | Inetger | 否 | 当前页 |
| pageSize | Inetger | 否 | 每页大小 |
| callStartTime | String | 是 | 区间开始时间 |
| callEndTime | String | 是 | 区间结束时间 |
| schemeTaskConfigId | Long | 是 | 质检任务Id |',
    ),
    'AssignReviewerBySessionGroup' => 
    array (
      'summary' => '对应前端功能位置：质检方案管理-任务结果-会话组-批量分配。专有云URL：ip:port/api/job/AssignReviewerBySessionGroup.json。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'jsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '详细信息见请求参数补充说明。',
            'type' => 'string',
            'required' => false,
            'example' => '{"sessionGroupParam":{"isSchemeData":1,"callStartTime":"2022-09-17 00:00:00","callEndTime":"2022-09-23 23:59:59","schemeTaskConfigId":24},"assignments":[{"reviewer":63,"count":4}],"isSchemeData":1}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'BaseResult',
            'description' => 'BaseResult',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F190ADE9-619A-447D-84E3-7E241A5C428E',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。

',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，200表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。

',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Message' => 
                  array (
                    'description' => '出错时表示出错详情，当输出多条信息时使用。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '出错时表示出错详情，当输出多条信息时使用。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F190ADE9-619A-447D-84E3-7E241A5C428E\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": {\\n    \\"Message\\": [\\n      \\"无\\"\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '会话组分配',
      'requestParamsDescription' => '### JsonStr说明
| 属性 | 值类型 | 是否必须 | 描述 |
| --- | --- | --- | --- |
| sessionGroupParam | SessionGroupParam | 是 | 会话组检索参数，参考ListSessionGroup |
| assignments | List<Assignment>  | 是 | 分配参数 |
| - assignments.reviewer | Long  | 是 | 分配的质检员ID |  |
| - assignments.count | Integer  | 是 | 分配数量 |
| - assignments.percentage | Integer | 是 | 分配比例 |',
    ),
    'RevertAssignedSessionGroup' => 
    array (
      'summary' => '对应前端功能位置：质检方案管理-任务结果-会话组-批量回收。专有云URL：ip:port/api/job/RevertAssignedSessionGroup.json。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'jsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '详细信息见请求参数补充说明。',
            'type' => 'string',
            'required' => false,
            'example' => '{"isSchemeData":1,"forceRevertSessionGroup":true,"sessionGroupIdList":["1"]}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => 'baseMeAgentId',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'BaseResult',
            'description' => 'BaseResult',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '106C6CA0-282D-4AF7-85F0-D2D24F4CE647',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。

调用方可根据此字段来判断请求是否成功：

- **true**表示成功
- **false/null**表示失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。

',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Message' => 
                  array (
                    'description' => '出错时表示出错详情，当输出多条信息时使用。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '出错时表示出错详情，当输出多条信息时使用。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"106C6CA0-282D-4AF7-85F0-D2D24F4CE647\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": {\\n    \\"Message\\": [\\n      \\"无\\"\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '批量回收（会话组维度）',
      'requestParamsDescription' => '### JsonStr说明
| 属性 | 值类型 | 是否必须 | 描述 |
| --- | --- | --- | --- |
| isSchemeData |Integer | 是 | 固定为1 |
| searchParam  | Json |导出所有时用 | 参数同GetResult接口入参|
| -- taskIdList | List<String> | 导出选中时用 | 选中会话质检任务的taskId |
| -- fileIdList|  List<String> | 导出选中时用 | 选中会话质检任务的tId/vid/fileId，三者等效|',
    ),
    'AssignReviewer' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"assignmentList":[{"taskId":"1C21CF1E-2917-4236-A046-20E37B293B69","fileId":"7981b466fd6a4c70a7065da159739a5b"},{"taskId":"0111DDBC-5F10-47E0-B7D4-7175F47D626F","fileId":"1814eeae3cff41e989e31ab547f07561"}],"assignments":[{"reviewer":"255746168704895558"},{"reviewer":"268370362815185444"}]}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。
',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '82C91484-B2D5-4D2A-A21F-A6D73F4D55C6',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"82C91484-B2D5-4D2A-A21F-A6D73F4D55C6\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AssignReviewerResponse>\\n    <Code>200</Code>\\n    <RequestId>D1436A84-8A33-4416-ACC9-94D0247C6DA8</RequestId>\\n    <Success>true</Success>\\n    <Message>successful</Message>\\n</AssignReviewerResponse>","errorExample":""}]',
      'title' => '分配质检员',
      'summary' => '进行手动分配质检员。',
      'description' => '手动分配质检完成的文件给质检员处理，支持单个文件分配和批量分配：

单个文件分配：将某个文件分给指定质检员。

批量分配：将筛选出来的多个文件批量分配给某些质检员，可以指定每个质检员分配的文件个数，也可以指定多个质检员平均分配。',
      'requestParamsDescription' => '### jsonStr参数说明
| 属性 | 值类型 | 是否必须 | 说明 |
|:---------|:-------|:---------|:---------|
| assignmentList | List| 否      | 待分配的文件列表，按所选文件逐个分配，与searchParam不能同时为空；若同时提供，则取assignmentList，详见下方**请求参数assignmentList结构信息** |
| searchParam | Object | 否      | 筛选条件，与[GetResult](https://help.aliyun.com/document_detail/142334.html)的入参一致，用于筛选出一批文件进行批量分配 |
| assignments | List| 否  | 质检员信息，批量分配时用来指定质检员，详见下方**请求参数Assignments结构信息** |

#### 请求参数assignmentList结构信息
| 属性 | 值类型 | 是否必须 | 说明 |
|:---------|:-------|:---------|:---------|
| taskId | String | 是 | 文件的任务ID |
| fileId |  String | 是| 文件ID |
| reviewer |  String | 否 | 质检员ID，单个文件分配时使用 |

#### 请求参数Assignments结构信息
| 属性 | 值类型 | 是否必须 | 说明 |
|:---------|:-------|:---------|:---------|
| reviewer |  String | 是| 质检员ID |
| count |  String | 否 | 分配文件的数量，如果为空，则进行平均分配 |

### 入参示例
#### 1、多个文件平均分配给多个质检员：
```
{
        "assignmentList":[
            {
                "taskId":"1C21CF1E-2917-4236-A046-20E37B293B69",
                "fileId":"7981b466fd6a4c70a7065da159739a5b"
            },
            {
                "taskId":"0111DDBC-5F10-47E0-B7D4-7175F47D626F",
                "fileId":"1814eeae3cff41e989e31ab547f07561"
            }
        ],
        "assignments":[
            {
                "reviewer":"255746168704895558"
            },
            {
                "reviewer":"268370362815185444"
            }
        ]
}
```
#### 2、分配的文件个数：

多个文件分配给多个质检员，指定每个质检员分配的文件个数

```
{
        "assignmentList":[
            {
                "taskId":"C97132A8-F0C5-4FA3-83C3-8C145CECB8C1",
                "fileId":"fae2f045162d459daa35f8ec5570c68e"
            },
            {
                "taskId":"1C21CF1E-2917-4236-A046-20E37B293B69",
                "fileId":"7981b466fd6a4c70a7065da159739a5b"
            },
            {
                "taskId":"0111DDBC-5F10-47E0-B7D4-7175F47D626F",
                "fileId":"1814eeae3cff41e989e31ab547f07561"
            }
        ],
        "assignments":[
            {
                "reviewer":"255746168704895558",
                "count":1
            },
            {
                "reviewer":"268370362815185444",
                "count":2
            }
        ]
}
```
#### 3、通过筛选条件进行批量分配：
```
{
        "searchParam":{
            "dataType":1,
            "sourceType":0,
            "startTime":"2020-03-07 00:00:00",
            "endTime":"2020-03-13 23:59:59"
        },
        "assignments":[
            {
                "reviewer":"255746168704895558"
            },
            {
                "reviewer":"268370362815185444"
            }
        ]
}
```
#### 4、分配单个文件：
```
{
        "assignmentList":[
            {
                "taskId":"C97132A8-F0C5-4FA3-83C3-8C145CECB8C1",
                "fileId":"fae2f045162d459daa35f8ec5570c68e",
                "reviewer":"255746168704895558"
            }
        ]
}
```',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SubmitReviewInfo' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{
    "taskId": "任务ID",
    "vid": "文件ID"
}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，200表示成功。

> 若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Data' => 
              array (
                'description' => '保存成功时返回复核后的质检得分。',
                'type' => 'string',
                'example' => '95',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '9987D326-83D9-4A42-B9A5-0B27F9B40539',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。

调用方可根据此字段来判断请求是否成功：

- true表示成功
- false/null表示失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": \\"95\\",\\n  \\"RequestId\\": \\"9987D326-83D9-4A42-B9A5-0B27F9B40539\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<code>200</code>\\n<data>95</data>\\n<requestId>F61E91AB-FAFD-472A-A3E8-0F4B48030685</requestId>\\n<success>true</success>\\n<message>successful</message>","errorExample":""}]',
      'title' => '保存复核结果（仅支持旧版智能对话分析）',
      'summary' => '保存复核结果，仅支持旧版智能对话分析。',
      'description' => '对质检完成的文件进行人工复核，复核完成后调用此接口保存复核结果，即对系统判定为命中的规则，进行人工复核判定是确实命中了，还是误命中，可参考控制台页面中的文件复核功能，详见[文件复核](https://help.aliyun.com/document_detail/139653.html#h2-u6587u4EF6u590Du68385)。',
      'requestParamsDescription' => '**请求参数Json字符串信息**
| 属性| 值类型 | 是否必须 | 说明 
|:---------|:-------|:---------|:---------|
| taskId | String |    是     | 任务ID |
| vid | String |    是     | 文件ID：字符串，即GetResultToReview中的vid。 |
| comments | String |    否     | 复核意见 |
| handScoreIdList | List |    否     | 需要添加人工计分时子计分项ID，示例值：[1345，1422] |
| jsonReviewResult | String |    否     | 针对特定规则的复核结果，JSON字符串，结构如下。 |

**请求参数jsonReviewResult结构信息**
| 属性| 值类型 | 是否必须 | 说明 
|:---------|:-------|:---------|:---------|
| reviewInfoList | List |    是     | 复核结构信息 |
| complainInfoList | List |    否     | 处理申诉结构信息 |

**请求参数ReviewInfo结构信息**
| 属性| 值类型 | 是否必须 | 说明 
|:---------|:-------|:---------|:---------|
| rid | Long |    是     | 规则ID |
| hitId | String |    是     | 命中ID，GetResultToReview中查询 |
| reviewResult | Integer |    是     | 是否真正命中：0：否；1：是 |
| changed | Boolean |    否     | 这个规则本次操作是否有修改，默认：false |

**请求参数ComplainParam结构信息**
| 属性| 值类型 | 是否必须 | 说明 
|:---------|:-------|:---------|:---------|
| rid | Long |    否     | 规则ID：如果是针对人工计分项申诉，则不填 |
| scoreId | Long |    否     | 评分项ID：如果是针对规则关联的计分项申诉，则不填 |
| comments | String |    是     | 理由 |
| accept | Boolean |    否     | 是否接受申诉，true：是；false：否；默认：true |
| finalJudge | Boolean |    否     | 是否是终审，终审后不能再申诉；true：是；false：否；默认：否 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => '### 调用示例

```
public SubmitReviewInfoResponse submitReviewInfo(String taskId, String vid, String fileId, GetResultToReviewResponse.Data.HitRuleReviewInfo hitInfo) throws ClientException {
        SubmitReviewInfoRequest request = new SubmitReviewInfoRequest();
        request.setAcceptFormat(FormatType.JSON);
        Map<String, Object> submitReviewMap = Maps.newHashMap();
        submitReviewMap.put("taskId", taskId);
        submitReviewMap.put("comments","复核意见");
        submitReviewMap.put("fileId","1500");
        submitReviewMap.put("vid", vid);
        Map<String,Object> reviewInfoMap = Maps.newHashMap();
        reviewInfoMap.put("scoreId",-1);
        reviewInfoMap.put("hitId",hitInfo.getReviewInfo().getHitId());
        reviewInfoMap.put("rid",getReviewInfoRid());
        reviewInfoMap.put("reviewResult",1);
        List reviewInfoList = Lists.newArrayList();
        reviewInfoList.add(reviewInfoMap);
        Map<String,Object> jsonReviewResultMap = Maps.newHashMap();
        jsonReviewResultMap.put("reviewInfoList",reviewInfoList);
        submitReviewMap.put("jsonReviewResult",jsonReviewResultMap);
        request.setJsonStr(JSON.toJSONString(submitReviewMap));
        SubmitReviewInfoResponse response = client.getAcsResponse(request);
        System.out.println("step submitReviewInfo -  5" + JSON.toJSONString(response));
        return response;
    }
```',
    ),
    'BatchSubmitReviewInfo' => 
    array (
      'summary' => '对应前端功能位置：任务管理-任务结果-批量复核
对应私有云URL：ip:port/api/qcsBatchSubmitReviewInfo.json

对筛选范围内的所有数据进行批量复核操作。
注意！此操作涉及大量更新操作，可能生效有一定延迟。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'jsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入参JSON，具体参考请求参数补充说明。',
            'type' => 'string',
            'required' => false,
            'example' => '{"isSchemeData":1,"schemeTaskConfigId":334,"sourceDataType":2,"startTime":"2022-08-25 00:00:00","endTime":"2022-09-23 23:59:59","sessionList":[{"taskId":"20220831-F8D7F4DF-0A16-1A1C-BA63-28F203922692","fileId":"20220831-164343"},{"taskId":"20220831-F2A50A72-82C4-1E3F-A1FD-52A662283D25","fileId":"20220831-164343"}]}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'BaseResult',
            'description' => 'BaseResult',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F190ADE9-619A-447D-84E3-7E241A5C428E',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。
',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Message' => 
                  array (
                    'description' => '出错时表示出错详情，当输出多条信息时使用。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '出错时表示出错详情，当输出多条信息时使用。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。

',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F190ADE9-619A-447D-84E3-7E241A5C428E\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": {\\n    \\"Message\\": [\\n      \\"无\\"\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '批量复核',
      'requestParamsDescription' => '### JsonStr说明
导出全部是参数同GetResult接口。
<br/>导出所选时见下，
| 属性 | 值类型 | 是否必须 | 描述 |
| --- | --- | --- | --- |
| sessionList | List | 是 | 所选会话质检任务列表 |
|-- taskId | String | 是 | 所选会话质检任务的taskId。 |
|-- fileId | String | 是 |  所选会话质检任务的tid，vic，fileId。三者等效。 |',
    ),
    'SubmitComplaint' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"taskId":"ADCA1DE6-8117-472A-B3A1-352A248F90D0","fileId":"653e563d-774f-4f01-a809-cb8bb920c3e6","rid":1346,"comments":"请重新判定"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。
',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Data' => 
              array (
                'description' => '当前质检得分',
                'type' => 'string',
                'example' => '90',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '82C91484-B2D5-4D2A-A21F-A6D73F4D55C6',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": \\"90\\",\\n  \\"RequestId\\": \\"82C91484-B2D5-4D2A-A21F-A6D73F4D55C6\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Code>200</Code>\\n<Data>95</Data>\\n<RequestId>5CB46375-E2F8-4072-9E5F-1506EDC2D211</RequestId>\\n<Success>true</Success>\\n<Message>successful</Message>","errorExample":""}]',
      'title' => '提交申诉',
      'summary' => '来提交申诉。',
      'requestParamsDescription' => '### 请求参数JSON字符串信息
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| taskId| String| 是      | 任务ID |
| fileId| String| 是      | 文件ID：等价于数据上传接口中Tid或者CallId，如果不传，系统会自动生成一个，通过GetResult或者GetResultToReview接口获取  |
| reviewer| Long| 否      | 质检员uid：用来选择指定质检员进行处理 |
| rid| Long| 否      | 规则ID：如果是针对人工计分项申诉，则不填|
| scoreId| Long| 否      | 评分项ID：如果是针对命中规则申诉，则不填|
| comments| String| 是      | 申诉理由|
| withdraw| Boolean| 否      | 是否是撤回申诉；默认：否|',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'HandleComplaint' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"taskId":"任务ID"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功。若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Data' => 
              array (
                'description' => '返回结果',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '9987D326-83D9-4A42-B9A5-0B27F9B40539',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。调用方可根据此字段来判断请求是否成功：**true**表示成功**false/null**表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"9987D326-83D9-4A42-B9A5-0B27F9B40539\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<HandleComplaintResponse>\\r\\n    <message>successful</message>\\r\\n    <requestId>9987D326-83D9-4A42-B9A5-0B27F9B40539</requestId>\\r\\n    <code>200</code>\\r\\n    <success>true</success>\\r\\n</HandleComplaintResponse>","errorExample":""}]',
      'title' => '处理申诉',
      'summary' => '处理申诉。',
      'description' => '限制条件：质检员或者管理员。',
      'requestParamsDescription' => '**请求参数Json字符串信息**
| 属性|  值类型  |  是否必须   |   说明    |
|:---------|:-------|:---------|:---------|
|  taskId | String|  是  |   任务ID   |
|  fileId | String|  是  |   文件ID   |
|  rid | Long |  否  |   规则ID；如果是针对人工计分项申诉，则不填   |
|  scoreId | Long |  否  |   评分项ID；如果是针对规则关联的计分项申诉，则不填   |
|  comments | String|  是  |   理由   |
|  accept | Boolean |  否  |   是否接受申诉，true：是；false：否；默认：true   |
|  finalJudge | Boolean |  否   |   是否是终审，终审后不能再申诉；true：是；false：否；默认：否   |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RevertAssignedSession' => 
    array (
      'summary' => '对应前端功能位置：任务管理-任务结果-批量回收。专有云URL：ip:port/api/job/RevertAssignedSession.json。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'jsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入参JSON，具体参考请求参数补充说明。',
            'type' => 'string',
            'required' => false,
            'example' => '{"isSchemeData":1,"searchParam":{"schemeTaskConfigId":1,"sourceDataType":1,"startTime":"2022-09-20 00:00:00","endTime":"2022-09-26 23:59:59"}}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'BaseResult',
            'description' => 'BaseResult',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '82C91484-B2D5-4D2A-A21F-A6D73F4D55C6',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Message' => 
                  array (
                    'description' => '消息的列表，忽略。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '消息，忽略。',
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"82C91484-B2D5-4D2A-A21F-A6D73F4D55C6\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": {\\n    \\"Message\\": [\\n      \\"\\"\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '批量回收（单通会话维度）',
    ),
    'CreateAsrVocab' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"name":"热词名称"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Data' => 
              array (
                'description' => '热词ID',
                'type' => 'string',
                'example' => '71b1795ac8634bd8bdf4d3878480c7c2',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '96138D8D-8D26-4E41-BFF4-77AED1088BBD',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：**true**表示成功；**false/null**表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": \\"71b1795ac8634bd8bdf4d3878480c7c2\\",\\n  \\"RequestId\\": \\"96138D8D-8D26-4E41-BFF4-77AED1088BBD\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '新建热词组',
      'summary' => '将一组语音热词上传到服务端，并获取返回的热词ID。',
      'description' => '> 热词用于解决某个特定名词（如人名、地名、专有名词等）识别不准的问题。[了解更多](https://help.aliyun.com/document_detail/213249.html)。',
      'requestParamsDescription' => '**请求参数Json字符串信息**
| 属性|  值类型  |  是否必须   |   说明    |
|:---------|:-------|:---------|:---------|
|  name | String|  是  |   热词名称   |
|  words | List |  是  |   热词列表   |

**words说明**
| 属性|  值类型  |  是否必须   |   说明    |
|:---------|:-------|:---------|:---------|
|  word | String|  是  |   热词   |
|  weight | Integer |  否  |   权重，默认：2。取值范围为【-6，5】之间的整数，不能超出限制。大于0的权重用来增加该词语被识别的概率，小于0的权重用来减小该词语被识别的概率。权重-6表示尽量不要识别出这个词语；权重2是常用的值，如果效果不明显可以适当增加权重，但是当权重较大时可能会有一些负面效果，导致其他词语识别不准确   |',
      'responseParamsDescription' => ' ',
      'extraInfo' => '### 调用示例
```
public void testCreateAsrVocab() throws ClientException {
        CreateAsrVocabRequest request = new CreateAsrVocabRequest();
        Map<String, Object> param = new HashMap<>(2);
        List<Map<String, Object>> words = new ArrayList<>(2);
        Map<String, Object> w1 = new HashMap<>(2);
        w1.put("word", "萝卜");
        w1.put("weight", 2);
        words.add(w1);
        w1 = new HashMap<>(2);
        w1.put("word", "地瓜");
        w1.put("weight", 2);
        words.add(w1);
        param.put("words", words);
        param.put("name", "测试热词1");
        request.setJsonStr(JSON.toJSONString(param));
        CreateAsrVocabResponse response = client.getAcsResponse(request);
        Assert.assertEquals(true, response.getSuccess());
        vocabId = response.getData();
    }
```',
    ),
    'UpdateAsrVocab' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"vocabId":"指定热词Id"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功。若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Data' => 
              array (
                'description' => '热词ID，指定的**vocabId**',
                'type' => 'string',
                'example' => '71b1795ac8634bd8bdf4d3878480c7c2',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '9987D326-83D9-4A42-B9A5-0B27F9B40539',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。调用方可根据此字段来判断请求是否成功：**true**表示成功**false/null**表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": \\"71b1795ac8634bd8bdf4d3878480c7c2\\",\\n  \\"RequestId\\": \\"9987D326-83D9-4A42-B9A5-0B27F9B40539\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateAsrVocabResponse>\\r\\n    <code>200</code>\\r\\n    <data>71b1795ac8634bd8bdf4d3878480c7c2</data>\\r\\n    <message>successful</message>\\r\\n    <requestId>76DB5D8C-5BD9-42A7-B527-5AF3A5F83F12</requestId>\\r\\n    <success>true</success>\\r\\n</UpdateAsrVocabResponse>","errorExample":""}]',
      'title' => '更新热词组',
      'summary' => '更新热词词表。',
      'requestParamsDescription' => '**请求参数Json字符串信息**
| 属性|  值类型  |  是否必须   |   说明    |
|:---------|:-------|:---------|:---------|
|  vocabId | String|  是  |   指定热词组ID   |
|  words | List |  是  |   热词列表，详见下方说明   |
|  name | String |  否 |  热词组名称   |

**words说明**
| 属性|  值类型  |  是否必须   |   说明    |
|:---------|:-------|:---------|:---------|
|  word | String|  是  |   热词   |
|  weight | Integer |  否  |   权重，默认：2。取值范围为[-6, 5]之间的整数，不能超出限制。大于0的权重用来增加该词语被识别的概率，小于0的权重用来减小该词语被识别的概率。权重-6表示尽量不要识别出这个词语；权重2是常用的值，如果效果不明显可以适当增加权重，但是当权重较大时可能会有一些负面效果，导致其他词语识别不准确   |',
      'responseParamsDescription' => ' ',
      'extraInfo' => '### 调用示例
```
UpdateAsrVocabRequest UpdateAsrVocabRequest = new UpdateAsrVocabRequest();
UpdateAsrVocabRequest.setAcceptFormat(FormatType.JSON);
String dataJsonStr = "{\\n" +
"\\vocabId"\\":\\"yourVocabId\\","+
"\\"customWords\\":{" +
     "\\"新自定义2\\":2,"+
     "\\"新自定义1\\":1"+
"},"+
"\\"strenWords\\":["+
     "\\"新强化\\","+
     "\\"新加强\\""+
"],"+
"\\"weakWords\\":["+
     "\\"新弱化\\","+
     "\\"新减弱\\""+
"]"+
"}";
UpdateAsrVocabRequest.setJsonStr(dataJsonStr);
UpdateAsrVocabResponse response = client.getAcsResponse(UpdateAsrVocabRequest);
```',
    ),
    'GetAsrVocab' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => false,
            'example' => '{"vocabId":"指定热词Id"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'description' => '返回信息',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功。若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3CEA0495-341B-4482-9AD9-8191EF4***	',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。调用方可根据此字段来判断请求是否成功：

- **true**表示成功
- **false/null**表示失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Name' => 
                  array (
                    'description' => '热词组名称',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'Words' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Word' => 
                      array (
                        'description' => '热词表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '热词表',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Weight' => 
                            array (
                              'description' => '权重',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'Word' => 
                            array (
                              'description' => '热词',
                              'type' => 'string',
                              'example' => '你好',
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
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"3CEA0495-341B-4482-9AD9-8191EF4***\\\\t\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Name\\": \\"test\\",\\n    \\"Words\\": {\\n      \\"Word\\": [\\n        {\\n          \\"Weight\\": 0,\\n          \\"Word\\": \\"你好\\"\\n        }\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取指定热词组的详情信息',
      'summary' => '获取指定热词组的详情信息。',
    ),
    'ListAsrVocab' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"pageSize":1}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功。若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '66E1ACB8-17B2-4BE8-8581-954A8EE1324B',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。调用方可根据此字段来判断请求是否成功：**true**表示成功**false/null**表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AsrVocab' => 
                  array (
                    'description' => '热词列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VocabularyId' => 
                        array (
                          'description' => '热词组ID',
                          'type' => 'string',
                          'example' => 'a01daaaxxxxxxxxx',
                        ),
                        'UpdateTime' => 
                        array (
                          'description' => '更新时间',
                          'type' => 'string',
                          'example' => '2019-04-15T14:57Z',
                        ),
                        'Name' => 
                        array (
                          'description' => '热词组名称',
                          'type' => 'string',
                          'example' => '测试',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间',
                          'type' => 'string',
                          'example' => '2019-04-15T14:57Z',
                        ),
                        'Id' => 
                        array (
                          'description' => '热词组ID',
                          'type' => 'string',
                          'example' => '18',
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
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"66E1ACB8-17B2-4BE8-8581-954A8EE1324B\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"AsrVocab\\": [\\n      {\\n        \\"VocabularyId\\": \\"a01daaaxxxxxxxxx\\",\\n        \\"UpdateTime\\": \\"2019-04-15T14:57Z\\",\\n        \\"Name\\": \\"测试\\",\\n        \\"CreateTime\\": \\"2019-04-15T14:57Z\\",\\n        \\"Id\\": \\"18\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Data>\\n    <AsrVocab>\\n        <Name>测试</Name>\\n        <CreateTime>2019-07-09T15:31Z</CreateTime>\\n        <VocabularyId>7c22c5078169451c84ef8834c491a1c0</VocabularyId>\\n        <UpdateTime>2019-10-16T09:47Z</UpdateTime>\\n        <Id>18</Id>\\n    </AsrVocab>\\n</Data>\\n<Message>successful</Message>\\n<RequestId>8542C91F-E130-4FF0-A7C3-51B4FE5CDA27</RequestId>\\n<Success>true</Success>\\n<Code>200</Code>","errorExample":""}]',
      'title' => '获取热词组列表',
      'summary' => '获取热词组列表，不包括具体内容。',
      'requestParamsDescription' => '**请求参数Json字符串信息**
| 属性|  值类型  |  是否必须   |   说明    |
|:---------|:-------|:---------|:---------|
|  pageSize | Integer |  否  |   每页个数，默认：10   |
|  pageNumber | Integer|  否  |   当前第几页，从1开始，默认：1   |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteAsrVocab' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"vocabId":"指定热词Id"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => 'baseMeAgentId',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Data' => 
              array (
                'description' => '热词ID，指定的vocabId',
                'type' => 'string',
                'example' => '71b1795ac8634bd8bdf4d3878480c7c2',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4987D326-83D9-4A42-B9A5-0B27F9B40539',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。调用方可根据此字段来判断请求是否成功：

- **true**表示成功
- **false/null**表示失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": \\"71b1795ac8634bd8bdf4d3878480c7c2\\",\\n  \\"RequestId\\": \\"4987D326-83D9-4A42-B9A5-0B27F9B40539\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteAsrVocabResponse>\\r\\n    <code>200</code>\\r\\n    <data>71b1795ac8634bd8bdf4d3878480c7c2</data>\\r\\n    <message>successful</message>\\r\\n    <requestId>76DB5D8C-5BD9-42A7-B527-5AF3A5F83F12</requestId>\\r\\n    <success>true</success>\\r\\n</DeleteAsrVocabResponse>","errorExample":""}]',
      'title' => '删除热词组',
      'summary' => '删除热词组。',
      'requestParamsDescription' => '**请求参数Json字符串信息**
| 属性|  值类型  |  是否必须   |   说明    |
|:---------|:-------|:---------|:---------|
|  vocabId | String|  是  |   指定热词ID   |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetCustomizationConfigList' => 
    array (
      'summary' => '获取语言模型列表。',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入参jsonStr的值传空字符串即可。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '""',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。
',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '106C6CA0-282D-4AF7-85F0-D2D24F4CE647',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ModelCustomizationDataSetPo' => 
                  array (
                    'description' => '详细返回数据。
',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TaskType' => 
                        array (
                          'description' => '弃用字段，请忽略。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '2019-01-08',
                        ),
                        'ModelStatus' => 
                        array (
                          'description' => '模型状态，可能值：1训练中；5正常；3训练失败。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5',
                        ),
                        'ModelName' => 
                        array (
                          'description' => '模型名称。',
                          'type' => 'string',
                          'example' => '自定义模型',
                        ),
                        'ModelId' => 
                        array (
                          'description' => '弃用字段，请忽略。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'ModeCustomizationId' => 
                        array (
                          'description' => '语言模型ID。',
                          'type' => 'string',
                          'example' => 'cdae396590bb479a9ec40f3476e274fc',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"106C6CA0-282D-4AF7-85F0-D2D24F4CE647\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"ModelCustomizationDataSetPo\\": [\\n      {\\n        \\"TaskType\\": 1,\\n        \\"CreateTime\\": \\"2019-01-08\\",\\n        \\"ModelStatus\\": 5,\\n        \\"ModelName\\": \\"自定义模型\\",\\n        \\"ModelId\\": 1,\\n        \\"ModeCustomizationId\\": \\"cdae396590bb479a9ec40f3476e274fc\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetCustomizationConfigListResponse>\\n    <Message>successful</Message>\\n    <RequestId>8D1C1B0E-D53F-427D-AB37-FF9A135F0F49</RequestId>\\n    <Data>\\n        <ModelCustomizationDataSetPo>\\n            <ModelName>通用模型</ModelName>\\n            <TaskType>1</TaskType>\\n            <CreateTime>2019-01-08</CreateTime>\\n            <ModelStatus>5</ModelStatus>\\n            <ModeCustomizationId>cdae396590bb479a9ec40f3476e274fc</ModeCustomizationId>\\n            <ModelId>746</ModelId>\\n        </ModelCustomizationDataSetPo>\\n        <ModelCustomizationDataSetPo>\\n            <ModelName>aaa</ModelName>\\n            <TaskType>2</TaskType>\\n            <CreateTime>2020-02-18</CreateTime>\\n            <ModelStatus>5</ModelStatus>\\n            <ModeCustomizationId>0839ca64fbee401ca66c53b324c5907b</ModeCustomizationId>\\n            <ModelId>9556</ModelId>\\n        </ModelCustomizationDataSetPo>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</GetCustomizationConfigListResponse>","errorExample":""}]',
      'title' => '获取语言模型列表',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteCustomizationConfig' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"modelId":"2412"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功。若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Data' => 
              array (
                'description' => '模型ID。',
                'type' => 'string',
                'example' => '252',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9987D326-83D9-4A42-B9A5-0B27F9B40539',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。调用方可根据此字段来判断请求是否成功：**true**表示成功**false/null**表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": \\"252\\",\\n  \\"RequestId\\": \\"9987D326-83D9-4A42-B9A5-0B27F9B40539\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteCustomizationConfigResponse>\\r\\n    <code>200</code>\\r\\n    <data>252</data>\\r\\n    <message>successful</message>\\r\\n    <requestId>9987D326-83D9-4A42-B9A5-0B27F9B40539</requestId>\\r\\n    <success>true</success>\\r\\n</DeleteCustomizationConfigResponse>","errorExample":""}]',
      'title' => '删除语言模型',
      'summary' => '删除语言模型。',
      'requestParamsDescription' => '## 请求参数JSON字符串信息
| 属性|  值类型  |  是否必须   |   说明    |
|:---------|:-------|:---------|:---------|
|  modelId | Long |  是  |   模型ID。   |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SubmitPrecisionTask' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '"{"name":"test","dataSetId":1865}"',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。
',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Data' => 
              array (
                'description' => '新建成功的任务ID。',
                'type' => 'string',
                'example' => 'EA701F66-8CA2-4A79-8E3C-A6F2FA****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '106C6CA0-282D-4AF7-85F0-D2D24F4CE647',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": \\"EA701F66-8CA2-4A79-8E3C-A6F2FA****\\",\\n  \\"RequestId\\": \\"106C6CA0-282D-4AF7-85F0-D2D24F4CE647\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<SubmitPrecisionTaskResponse>\\n    <Message>successful</Message>\\n    <RequestId>77F24A2E-6CE6-4230-AD81-BC9E0F3A4B45</RequestId>\\n    <Data>76DC9DFA-E5CC-4E61-B77C-2742116***</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</SubmitPrecisionTaskResponse>","errorExample":""}]',
      'title' => '新建语音识别检测任务',
      'summary' => '新建语音识别检测任务。服务地址（Region）请选择为杭州（cn-hangzhou）。',
      'requestParamsDescription' => '## 请求参数JSON字符串信息
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| type | Integer | 否 | 任务类型，可选值：1准确率任务；2模型对比任务，默认1。 |
| name| String| 否      | 任务名称，新建准确率任务时必填。 |
| dataSetId | Long |  否     | 数据集ID，一个任务只允许选择一个数据集，新建准确率任务时必填。|
| precisionTaskId | String | 否 | 准确率任务的ID，新建模型对比任务时必填，即对哪个准确率任务发起模型对比任务。 |
| modelId | Long | 否 | 模型ID，新建模型对比任务时必填 |


### 新建准确率任务入参示例：
```
{
    "name":"test",
    "dataSetId":18**
}
```

### 新建模型对比任务入参示例：
```
{
    "modelId":97**,
    "type":2,
    "precisionTaskId":"593A04C0-E6E9-4CDC-8C99-B12*****",
    "dataSetId":1**
}
```',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetPrecisionTask' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '"{"taskId":"593A04C0-E6E9-4CDC-8C9****"}"',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。
',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '106C6CA0-282D-4AF7-85F0-D2D24F4CE647',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '任务详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '任务状态，可能值：0转写中；1转写完成。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'UpdateTime' => 
                  array (
                    'description' => '最后更新时间。',
                    'type' => 'string',
                    'example' => '2020-03-10 20:26:29',
                  ),
                  'IncorrectWords' => 
                  array (
                    'description' => '转写错误的字数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '23',
                  ),
                  'DataSetId' => 
                  array (
                    'description' => '如果是来自数据集，则表示数据集ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1212',
                  ),
                  'VerifiedCount' => 
                  array (
                    'description' => '已校验过的文件总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'Duration' => 
                  array (
                    'description' => '录音总时长。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3423',
                  ),
                  'DataSetName' => 
                  array (
                    'description' => '如果是来自数据集，则表示数据集名称。',
                    'type' => 'string',
                    'example' => '数据集名称',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '该任务下文件总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'Source' => 
                  array (
                    'description' => '文件来源，可能值：3数据集；0呼叫中心。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'Name' => 
                  array (
                    'description' => '任务名称。',
                    'type' => 'string',
                    'example' => '任务名称',
                  ),
                  'TaskId' => 
                  array (
                    'description' => '任务ID。',
                    'type' => 'string',
                    'example' => '7C1DEF5F-2C18-4D36-99C6-8C27*****',
                  ),
                  'Precisions' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Precision' => 
                      array (
                        'description' => '各个语言模型执行任务的列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Status' => 
                            array (
                              'description' => '任务状态，可能值：0转写中；1转写完成。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                            'ModelName' => 
                            array (
                              'description' => '模型名称。',
                              'type' => 'string',
                              'example' => '模型名称',
                            ),
                            'TaskId' => 
                            array (
                              'description' => '任务ID。',
                              'type' => 'string',
                              'example' => '593A04C0-E6E9-4CDC-8C99-B120C******',
                            ),
                            'Precision' => 
                            array (
                              'description' => '准确率，比如0.98。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '0.98',
                            ),
                            'ModelId' => 
                            array (
                              'description' => '模型id。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '2311',
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
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"106C6CA0-282D-4AF7-85F0-D2D24F4CE647\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Status\\": 1,\\n    \\"UpdateTime\\": \\"2020-03-10 20:26:29\\",\\n    \\"IncorrectWords\\": 23,\\n    \\"DataSetId\\": 1212,\\n    \\"VerifiedCount\\": 2,\\n    \\"Duration\\": 3423,\\n    \\"DataSetName\\": \\"数据集名称\\",\\n    \\"TotalCount\\": 3,\\n    \\"Source\\": 3,\\n    \\"Name\\": \\"任务名称\\",\\n    \\"TaskId\\": \\"7C1DEF5F-2C18-4D36-99C6-8C27*****\\",\\n    \\"Precisions\\": {\\n      \\"Precision\\": [\\n        {\\n          \\"Status\\": 1,\\n          \\"ModelName\\": \\"模型名称\\",\\n          \\"TaskId\\": \\"593A04C0-E6E9-4CDC-8C99-B120C******\\",\\n          \\"Precision\\": 0.98,\\n          \\"ModelId\\": 2311\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetPrecisionTaskResponse>\\n<Message>successful</Message>\\n<RequestId>AA84A5CC-8D21-4F11-BCE1-B91882673B15</RequestId>\\n<Data>\\n    <Status>1</Status>\\n    <IncorrectWords>4</IncorrectWords>\\n    <TotalCount>3</TotalCount>\\n    <TaskId>593A04C0-E6E9-4CDC-8C99-B120C***</TaskId>\\n    <VerifiedCount>3</VerifiedCount>\\n    <UpdateTime>2020-03-20T11:26Z</UpdateTime>\\n    <DataSetId>18**</DataSetId>\\n    <Duration>62830</Duration>\\n    <Precisions>\\n        <Precision>\\n            <Status>1</Status>\\n            <ModelName>测试01</ModelName>\\n            <TaskId>18EB5390-21C0-4EF9-B599-FB**</TaskId>\\n            <Precision>0.9708</Precision>\\n            <ModelId>9706</ModelId>\\n        </Precision>\\n        <Precision>\\n            <Status>1</Status>\\n            <ModelName>通用模型</ModelName>\\n            <TaskId>593A04C0-E6E9-4CDC-8C99-B***1FD</TaskId>\\n            <Precision>0.9708</Precision>\\n            <ModelId>746</ModelId>\\n        </Precision>\\n    </Precisions>\\n    <Source>3</Source>\\n    <DataSetName>语音识别检测四个</DataSetName>\\n    <Name>111</Name>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</GetPrecisionTaskResponse>","errorExample":""}]',
      'title' => '获取语音识别检测任务详情',
      'summary' => '获取语音识别检测任务详情。',
      'requestParamsDescription' => '## 入参说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| taskId| String| 是      | 任务ID。 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListPrecisionTask' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整**JSON字符串**信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '"{"pageSize":10,"pageNumber":1}"',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '106C6CA0-282D-4AF7-85F0-D2D24F4CE647',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。
',
                'type' => 'string',
                'example' => 'successful',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页显示条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Count' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '22',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'PrecisionTask' => 
                  array (
                    'description' => '任务列表数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '任务状态，可能值：0转写中；1转写完成。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'UpdateTime' => 
                        array (
                          'description' => '最后更新时间。',
                          'type' => 'string',
                          'example' => '2020-03-10 20:26:29',
                        ),
                        'IncorrectWords' => 
                        array (
                          'description' => '转写错误的字数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '32',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '任务创建时间。',
                          'type' => 'string',
                          'example' => '2020-03-10 20:26:29',
                        ),
                        'DataSetId' => 
                        array (
                          'description' => '如果是来自数据集，则表示数据集ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1212',
                        ),
                        'VerifiedCount' => 
                        array (
                          'description' => '已校验过的文件总数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3',
                        ),
                        'Source' => 
                        array (
                          'description' => '文件来源，可能值：3数据集；0呼叫中心。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3',
                        ),
                        'TotalCount' => 
                        array (
                          'description' => '该任务下文件总数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '21',
                        ),
                        'DataSetName' => 
                        array (
                          'description' => '如果是来自数据集，则表示数据集名称。',
                          'type' => 'string',
                          'example' => '数据集名称',
                        ),
                        'Duration' => 
                        array (
                          'description' => '录音总时长，单位：**秒**。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '331311',
                        ),
                        'Name' => 
                        array (
                          'description' => '任务名称。',
                          'type' => 'string',
                          'example' => '任务名称',
                        ),
                        'TaskId' => 
                        array (
                          'description' => '任务ID。',
                          'type' => 'string',
                          'example' => '7C1DEF5F-2C18-4D36-99C6-8C276F781796',
                        ),
                        'Precisions' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Precision' => 
                            array (
                              'description' => '各个语言模型执行任务的列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Status' => 
                                  array (
                                    'description' => '任务状态，可能值：0转写中；1转写完成。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '1',
                                  ),
                                  'CreateTime' => 
                                  array (
                                    'description' => '模型对比任务创建时间。',
                                    'type' => 'string',
                                    'example' => '2020-03-10 20:26:29',
                                  ),
                                  'ModelName' => 
                                  array (
                                    'description' => '模型名称。',
                                    'type' => 'string',
                                    'example' => '自定义模型',
                                  ),
                                  'TaskId' => 
                                  array (
                                    'description' => '任务ID。',
                                    'type' => 'string',
                                    'example' => '7C1DEF5F-2C18-4D36-99C6-8C276F781796',
                                  ),
                                  'ModelId' => 
                                  array (
                                    'description' => '模型ID。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '2321',
                                  ),
                                  'Precision' => 
                                  array (
                                    'description' => '准确率，比如0.98。',
                                    'type' => 'number',
                                    'format' => 'float',
                                    'example' => '0.98',
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
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"106C6CA0-282D-4AF7-85F0-D2D24F4CE647\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"Count\\": 22,\\n  \\"Data\\": {\\n    \\"PrecisionTask\\": [\\n      {\\n        \\"Status\\": 1,\\n        \\"UpdateTime\\": \\"2020-03-10 20:26:29\\",\\n        \\"IncorrectWords\\": 32,\\n        \\"CreateTime\\": \\"2020-03-10 20:26:29\\",\\n        \\"DataSetId\\": 1212,\\n        \\"VerifiedCount\\": 3,\\n        \\"Source\\": 3,\\n        \\"TotalCount\\": 21,\\n        \\"DataSetName\\": \\"数据集名称\\",\\n        \\"Duration\\": 331311,\\n        \\"Name\\": \\"任务名称\\",\\n        \\"TaskId\\": \\"7C1DEF5F-2C18-4D36-99C6-8C276F781796\\",\\n        \\"Precisions\\": {\\n          \\"Precision\\": [\\n            {\\n              \\"Status\\": 1,\\n              \\"CreateTime\\": \\"2020-03-10 20:26:29\\",\\n              \\"ModelName\\": \\"自定义模型\\",\\n              \\"TaskId\\": \\"7C1DEF5F-2C18-4D36-99C6-8C276F781796\\",\\n              \\"ModelId\\": 2321,\\n              \\"Precision\\": 0.98\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListPrecisionTaskResponse>\\n    <Message>successful</Message>\\n    <PageSize>2</PageSize>\\n    <RequestId>D8E5E4CC-76A6-468B-B1EB-C37812818E07</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Data>\\n        <PrecisionTask>\\n            <Status>1</Status>\\n            <IncorrectWords>3</IncorrectWords>\\n            <TaskId>7C1DEF5F-2C18-4D36-99C6-8C276F781796</TaskId>\\n            <CreateTime>2020-03-10T20:26Z</CreateTime>\\n            <VerifiedCount>1</VerifiedCount>\\n            <DataSetId>1852</DataSetId>\\n            <Duration>816666</Duration>\\n            <Precisions>\\n                <Precision>\\n                    <Status>1</Status>\\n                    <ModelName>通用模型</ModelName>\\n                    <TaskId>7C1DEF5F-2C18-4D36-99C6-8C276F781796</TaskId>\\n                    <Precision>0.75</Precision>\\n                    <CreateTime>2020-03-10 20:26:29</CreateTime>\\n                    <ModelId>746</ModelId>\\n                </Precision>\\n            </Precisions>\\n            <Source>3</Source>\\n            <DataSetName>0310</DataSetName>\\n            <Name>0310</Name>\\n            <TotalCount>17</TotalCount>\\n            <UpdateTime>2020-03-10T21:55Z</UpdateTime>\\n        </PrecisionTask>\\n        <PrecisionTask>\\n            <Status>1</Status>\\n            <IncorrectWords>0</IncorrectWords>\\n            <TaskId>EAB4EEFA-37DD-44DF-92AA-3689B7CBFCF6</TaskId>\\n            <CreateTime>2020-02-18T11:50Z</CreateTime>\\n            <VerifiedCount>0</VerifiedCount>\\n            <DataSetId>1809</DataSetId>\\n            <Duration>382806</Duration>\\n            <Precisions>\\n                <Precision>\\n                    <Status>1</Status>\\n                    <ModelName>通用模型</ModelName>\\n                    <TaskId>EAB4EEFA-37DD-44DF-92AA-3689B7CBFCF6</TaskId>\\n                    <CreateTime>2020-02-18 11:50:14</CreateTime>\\n                    <ModelId>746</ModelId>\\n                </Precision>\\n            </Precisions>\\n            <Source>3</Source>\\n            <DataSetName>0218</DataSetName>\\n            <Name>11</Name>\\n            <TotalCount>11</TotalCount>\\n            <UpdateTime>2020-02-18T11:50Z</UpdateTime>\\n        </PrecisionTask>\\n    </Data>\\n    <Count>29</Count>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListPrecisionTaskResponse>","errorExample":""}]',
      'title' => '获取语音识别检测任务列表',
      'summary' => '获取语音识别检测任务列表。服务地址（Region）请选择为杭州（cn-hangzhou）。',
      'requestParamsDescription' => '## 入参说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| pageSize| Integer| 否      | 每页条数，默认10。 |
| pageNumber| Integer| 否      | 当前页，默认1。 | ',
      'responseParamsDescription' => '## 返回参数说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| pageSize| Integer| 是      | 每页条数。 |
| pageNumber| Integer| 是      | 当前页。 |
| count| Integer| 是      | 总条数。|	
| data| List| 是      | 任务信息，详见下方 PrecisionTask字段说明。 |

### PrecisionTask字段说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| taskId | String | 是 | 任务ID。 |
| name| String| 是      | 任务名称。 |
| source| Integer| 是      | 文件来源，可能值：3数据集；0呼叫中心。 |
| type | Integer | 否 | 任务类型，可能值：1准确率任务；2模型对比任务；默认1。 |
| dataSetId | Long | 是 | 如果是来自数据集，则表示数据集ID。 |
| dataSetName | String | 是 | 如果是来自数据集，则表示数据集名称。 |
| duration| Long| 是      | 录音总时长。|
| precisions | List | 是 | 准确率列表，详见下方Precision字段说明。 |
| status | Integer | 是 | 任务状态，可能值：0转写中；1转写完成。|
| totalCount | Integer | 是   |  该任务下文件总数。 |
| verifiedCount | Integer | 是   |  已校验过的文件总数。 |
| incorrectWords | Integer | 是  | 转写错误的字数。 |
| updateTime | String | 是 | 最后更新时间。 |

### Precision字段说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| modelName| String| 是      | 模型名称。 |
| modelId | Long | 是 | 模型ID。 |
| precision| Float| 是      | 准确率，比如0.98。|
| status | Integer | 是 | 任务状态，可能值：0转写中；1转写完成。|
| taskId| String| 是      | 模型对比任务ID。 |
| createTime| String| 是      | 模型对比任务创建时间，yyyy-MM-dd HH:mm:ss。 |',
      'extraInfo' => ' ',
    ),
    'DeletePrecisionTask' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '"{"taskId": "7C1DEF5F-2C18-4D36-99C6*******"}"',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。
',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '106C6CA0-282D-4AF7-85F0-D2D24F4CE647',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"106C6CA0-282D-4AF7-85F0-D2D24F4CE647\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeletePrecisionTaskResponse>\\n    <Message>successful</Message>\\n    <RequestId>9A2467A2-8208-400B-A7B9-919495B5E0FE</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DeletePrecisionTaskResponse>","errorExample":""}]',
      'title' => '删除语音识别检测任务',
      'summary' => '删除语音识别检测任务。',
      'requestParamsDescription' => '## 入参说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| taskId| String| 是      | 待删除的任务ID。 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetNextResultToVerify' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '"{"pageNumber":1,"pageSize":1,"taskId":"593A04C0-E6E9-4CDC-8C9*****","original":1}"',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。
',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '106C6CA0-282D-4AF7-85F0-D2D24F4CE647',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '文件详情信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Index' => 
                  array (
                    'description' => '当前文件的索引，人工校验取下一条数据时传入此值；从1开始，即第一条的值为1。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'Status' => 
                  array (
                    'description' => '文件状态，可能值：0：未完成；1：未完成；2：已完成；3：已完成。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'AudioScheme' => 
                  array (
                    'description' => '音频URL的协议，可能值：http、https。',
                    'type' => 'string',
                    'example' => 'http',
                  ),
                  'AudioURL' => 
                  array (
                    'description' => '音频URL，不含http/https。',
                    'type' => 'string',
                    'example' => 'sca-bucket.oss-cn-hangzhou.aliyuncs.com/upload_1173636551461420/dateset_1584674455133_SzC/%E4%BA%BA%E5%B7%A5%E6%A0%A1%E9%AA%8C%E6%B5%8B%E8%AF%95-%E6%9F%A5%E5%8C%97%E4%BA%AC%E5%A4%A9%E6%B0%94.wav?Expires=1584847372&amp;OSSAccessKeyId=*****&amp;Signature=HccAKnLOJwoYvzE*********',
                  ),
                  'UpdateTime' => 
                  array (
                    'description' => '最后更新时间。',
                    'type' => 'string',
                    'example' => '2020-03-20T11:26Z',
                  ),
                  'IncorrectWords' => 
                  array (
                    'description' => '转写错误的字数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '23',
                  ),
                  'VerifiedCount' => 
                  array (
                    'description' => '已校验过的文件总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'Verified' => 
                  array (
                    'description' => '是否进行了人工校验，可能值：false：还未校验过；true：已经校验过。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'FileName' => 
                  array (
                    'description' => '文件名称。',
                    'type' => 'string',
                    'example' => 'xxx.wav',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '该任务下文件总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'Precision' => 
                  array (
                    'description' => '当前识别准确率。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0.97079998',
                  ),
                  'FileId' => 
                  array (
                    'description' => '文件ID。',
                    'type' => 'string',
                    'example' => 'e790e6c919d84b82b64ee*****',
                  ),
                  'Duration' => 
                  array (
                    'description' => '当前任务中文件总时长，单位：秒。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '23421',
                  ),
                  'Dialogues' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Dialogue' => 
                      array (
                        'description' => '对话数据，status=2/3时有值。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '对话数据。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Words' => 
                            array (
                              'description' => '这句话转写内容。',
                              'type' => 'string',
                              'example' => '你好有什么可以帮您',
                            ),
                            'Identity' => 
                            array (
                              'description' => '角色标识。',
                              'type' => 'string',
                              'example' => '某客服',
                            ),
                            'IncorrectWords' => 
                            array (
                              'description' => '这句话转写的错误字数，只有当这句话已经完成校验后才会返回。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '2',
                            ),
                            'BeginTime' => 
                            array (
                              'description' => '弃用字段，请忽略。',
                              'type' => 'string',
                              'example' => 'XXX',
                            ),
                            'SourceWords' => 
                            array (
                              'description' => '这句话正确内容，只有当这句话已经完成校验后才会返回。',
                              'type' => 'string',
                              'example' => '您好有什么可以帮您',
                            ),
                            'End' => 
                            array (
                              'description' => '这句话的结束时间相对对话整体开始时间的偏移量，毫秒级别。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '3422',
                            ),
                            'SpeechRate' => 
                            array (
                              'description' => '语速值，单位：字/分钟。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '332',
                            ),
                            'HourMinSec' => 
                            array (
                              'description' => '这句话的时分秒格式的开始时间，格式：HH:mm:ss。 ',
                              'type' => 'string',
                              'example' => '00:00:07',
                            ),
                            'SourceRole' => 
                            array (
                              'description' => '人工校验后正确的角色。',
                              'type' => 'string',
                              'example' => '客服',
                            ),
                            'Begin' => 
                            array (
                              'description' => '这句话的开始时间相对对话整体开始时间的偏移量，毫秒级别。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '980',
                            ),
                            'EmotionValue' => 
                            array (
                              'description' => '情绪能量值，取值范围：1-10，值越高情绪越强烈。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '6',
                            ),
                            'Role' => 
                            array (
                              'description' => '该句话的角色，可能值：客服、客户。',
                              'type' => 'string',
                              'example' => '客户',
                            ),
                            'SilenceDuration' => 
                            array (
                              'description' => '弃用字段，请忽略。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                            'Deltas' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Delta' => 
                                array (
                                  'description' => '人工校验后对话文字的错误之处。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '人工校验后对话文字的错误之处。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Type' => 
                                      array (
                                        'description' => '错误的不同类型，可能值：CHANGE：错误，INSERT：多字，DELETE：少字。',
                                        'type' => 'string',
                                        'example' => 'CHANGE',
                                      ),
                                      'Source' => 
                                      array (
                                        'description' => '人工校验后正确的对话内容。',
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'Position' => 
                                          array (
                                            'description' => '字所处的位置。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '5',
                                          ),
                                          'Line' => 
                                          array (
                                            'type' => 'object',
                                            'properties' => 
                                            array (
                                              'Line' => 
                                              array (
                                                'description' => '具体的字。',
                                                'type' => 'array',
                                                'items' => 
                                                array (
                                                  'description' => '具体的字。',
                                                  'type' => 'string',
                                                  'example' => '这里是阿里云',
                                                ),
                                              ),
                                            ),
                                          ),
                                        ),
                                      ),
                                      'Target' => 
                                      array (
                                        'description' => '原始转写对话内容。',
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'Position' => 
                                          array (
                                            'description' => '字所处的位置。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '5',
                                          ),
                                          'Line' => 
                                          array (
                                            'type' => 'object',
                                            'properties' => 
                                            array (
                                              'Line' => 
                                              array (
                                                'description' => '具体的字。',
                                                'type' => 'array',
                                                'items' => 
                                                array (
                                                  'description' => '具体的字。',
                                                  'type' => 'string',
                                                  'example' => '这里是服务台',
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
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"106C6CA0-282D-4AF7-85F0-D2D24F4CE647\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Index\\": 2,\\n    \\"Status\\": 3,\\n    \\"AudioScheme\\": \\"http\\",\\n    \\"AudioURL\\": \\"sca-bucket.oss-cn-hangzhou.aliyuncs.com/upload_1173636551461420/dateset_1584674455133_SzC/%E4%BA%BA%E5%B7%A5%E6%A0%A1%E9%AA%8C%E6%B5%8B%E8%AF%95-%E6%9F%A5%E5%8C%97%E4%BA%AC%E5%A4%A9%E6%B0%94.wav?Expires=1584847372&amp;OSSAccessKeyId=*****&amp;Signature=HccAKnLOJwoYvzE*********\\",\\n    \\"UpdateTime\\": \\"2020-03-20T11:26Z\\",\\n    \\"IncorrectWords\\": 23,\\n    \\"VerifiedCount\\": 2,\\n    \\"Verified\\": true,\\n    \\"FileName\\": \\"xxx.wav\\",\\n    \\"TotalCount\\": 3,\\n    \\"Precision\\": 0.97079998,\\n    \\"FileId\\": \\"e790e6c919d84b82b64ee*****\\",\\n    \\"Duration\\": 23421,\\n    \\"Dialogues\\": {\\n      \\"Dialogue\\": [\\n        {\\n          \\"Words\\": \\"你好有什么可以帮您\\",\\n          \\"Identity\\": \\"某客服\\",\\n          \\"IncorrectWords\\": 2,\\n          \\"BeginTime\\": \\"XXX\\",\\n          \\"SourceWords\\": \\"您好有什么可以帮您\\",\\n          \\"End\\": 3422,\\n          \\"SpeechRate\\": 332,\\n          \\"HourMinSec\\": \\"00:00:07\\",\\n          \\"SourceRole\\": \\"客服\\",\\n          \\"Begin\\": 980,\\n          \\"EmotionValue\\": 6,\\n          \\"Role\\": \\"客户\\",\\n          \\"SilenceDuration\\": 1,\\n          \\"Deltas\\": {\\n            \\"Delta\\": [\\n              {\\n                \\"Type\\": \\"CHANGE\\",\\n                \\"Source\\": {\\n                  \\"Position\\": 5,\\n                  \\"Line\\": {\\n                    \\"Line\\": [\\n                      \\"这里是阿里云\\"\\n                    ]\\n                  }\\n                },\\n                \\"Target\\": {\\n                  \\"Position\\": 5,\\n                  \\"Line\\": {\\n                    \\"Line\\": [\\n                      \\"这里是服务台\\"\\n                    ]\\n                  }\\n                }\\n              }\\n            ]\\n          }\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetNextResultToVerifyResponse>\\n    <Message>successful</Message>\\n    <RequestId>93F9E901-41C5-4563-95A4-4095A70FE4AB</RequestId>\\n    <Data>\\n        <Status>3</Status>\\n        <IncorrectWords>4</IncorrectWords>\\n        <Dialogues>\\n            <Dialogue>\\n                <HourMinSec>00:01</HourMinSec>\\n                <Role>客服</Role>\\n                <SourceRole>客服</SourceRole>\\n                <Deltas>\\n                    <Delta>\\n                        <Type>CHANGE</Type>\\n                        <Target>\\n                            <Line>\\n                                <Line>服务控制台</Line>\\n                            </Line>\\n                            <Position>5</Position>\\n                        </Target>\\n                        <Source>\\n                            <Line>\\n                                <Line>阿里云</Line>\\n                            </Line>\\n                            <Position>5</Position>\\n                        </Source>\\n                    </Delta>\\n                </Deltas>\\n                <IncorrectWords>3</IncorrectWords>\\n                <SourceWords>您好，这里是阿里云，您想查什么。</SourceWords>\\n                <Words>您好，这里是服务控制台，您想查什么。</Words>\\n                <Begin>1990</Begin>\\n                <End>6000</End>\\n                <Identity>某客服</Identity>\\n                <SpeechRate>224</SpeechRate>\\n                <EmotionValue>6</EmotionValue>\\n            </Dialogue>\\n            <Dialogue>\\n                <HourMinSec>00:07</HourMinSec>\\n                <Role>客户</Role>\\n                <SourceRole>客户</SourceRole>\\n                <Deltas>\\n                </Deltas>\\n                <IncorrectWords>0</IncorrectWords>\\n                <SourceWords>帮我查看北京明天的天气情况。</SourceWords>\\n                <Words>帮我查看北京明天的天气情况。</Words>\\n                <Begin>7050</Begin>\\n                <End>10910</End>\\n                <Identity>某客户</Identity>\\n                <SpeechRate>202</SpeechRate>\\n                <EmotionValue>5</EmotionValue>\\n            </Dialogue>\\n            <Dialogue>\\n                <HourMinSec>00:12</HourMinSec>\\n                <Role>客服</Role>\\n                <SourceRole>客服</SourceRole>\\n                <Deltas>\\n                </Deltas>\\n                <IncorrectWords>0</IncorrectWords>\\n                <SourceWords>北京明天天气晴朗，气温22到219度。</SourceWords>\\n                <Words>北京明天天气晴朗，气温22到219度。</Words>\\n                <Begin>12230</Begin>\\n                <End>16590</End>\\n                <Identity>某客服</Identity>\\n                <SpeechRate>233</SpeechRate>\\n                <EmotionValue>6</EmotionValue>\\n            </Dialogue>\\n            <Dialogue>\\n                <HourMinSec>00:17</HourMinSec>\\n                <Role>客户</Role>\\n                <SourceRole>客户</SourceRole>\\n                <Deltas>\\n                </Deltas>\\n                <IncorrectWords>0</IncorrectWords>\\n                <SourceWords>好的谢谢。</SourceWords>\\n                <Words>好的谢谢。</Words>\\n                <Begin>17710</Begin>\\n                <End>18800</End>\\n                <Identity>某客户</Identity>\\n                <SpeechRate>220</SpeechRate>\\n                <EmotionValue>5</EmotionValue>\\n            </Dialogue>\\n        </Dialogues>\\n        <FileName>人工校验测试-查北京天气.wav</FileName>\\n        <VerifiedCount>3</VerifiedCount>\\n        <AudioScheme>http</AudioScheme>\\n        <Index>2</Index>\\n        <Duration>62830</Duration>\\n        <TotalCount>3</TotalCount>\\n        <Verified>true</Verified>\\n        <Precision>0.97079998254776</Precision>\\n        <UpdateTime>2020-03-20T11:26Z</UpdateTime>\\n        <FileId>e790e6c919d84b82b64ee34768a***</FileId>\\n        <AudioURL>sca-bucket.oss-cn-hangzhou.aliyuncs.com/upload_1173636551461420/dateset_1584674455133_SzC/%E4%BA%BA%E5%B7%A5%E6%A0%A1%E9%AA%8C%E6%B5%8B%E8%AF%95-%E6%9F%A5%E5%8C%97%E4%BA%AC%E5%A4%A9%E6%B0%94.wav?Expires=1584847372&amp;OSSAccessKeyId=LTAI***UdO&amp;Signature=HccAKnLOJwoYvzE%2F3wlHyj%***</AudioURL>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</GetNextResultToVerifyResponse>","errorExample":""}]',
      'title' => '获取下一条文件详情用于人工校验',
      'summary' => '获取下一条文件详情用于人工校验。',
      'requestParamsDescription' => '### 请求参数JSON字符串信息
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| taskId| String| 是      | 准确率对比任务ID，即ListPrecisionTask接口返回值中的precisions.taskId。 |
| pageNumber| Integer| 否      | 当前页，会返回当前页的下一条数据；如果为空会返回该任务第一条未校验的数据；后面每次调用时从上一次GetNextResultToVerify的返回中取index值，比如传1，会返回第2条数据；传-1，会返回第1条数据。 |
| pageSize| Integer| 否      | 固定传1。 |
| original | Integer | 否 | 是否要返回原始（即正确）文本，可选值：0（否）；1（是），默认0。|
| fileName | String | 否 | 文件名称，如果不指定，则相当于点击"下一条"，若指定，则返回此文件的结果。 |',
      'responseParamsDescription' => '## 返回参数说明

| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| status | Integer | 是 | 文件状态，0、1表示未完成；2、3表示已完成。|
| audioURL | String | 否   |  音频URL，不含http/https。 |
| audioScheme | String | 否 | 音频URL的协议，可能值：http；https。|
| fileName | String | 否   |  文件名称。 |
| fileId | String | 是   |  文件ID。 |
| verified | Boolean | 是 | 是否进行了人工校验，可能值：false：还未校验过；true：已经校验过。|
| dialogues | List | 否   |  对话数据，status=2/3时有值，详见下方对话数据Dialogue描述。 |
| totalCount | Integer | 是   |  该任务下文件总数。 |
| verifiedCount | Integer | 是   |  已校验过的文件总数。 |
| incorrectWords | Integer | 是  | 转写错误的字数。 |
| precision | Float | 是      | 当前识别准确率。 |
| updateTime | String | 是 | 最后更新时间。 |
| duration | Integer | 是 | 当前任务中文件总时长，单位：秒。|
| index| Integer| 是      | 当前文件的索引，前端取下一条时传入此值；从1开始，即第一条的值为1。 |

### 对话数据Dialogue描述

| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| begin | Long | 是      |  这句话的开始时间相对对话整体开始时间的偏移量，毫秒级别。 |
| beginTime | Long | 是      | 这句话的开始时间。 |
| end | Long | 是      | 这句话的结束时间相对对话整体开始时间的偏移量，毫秒级别。 |
| hourMinSec | String | 是      | 这句话的时分秒格式的开始时间，格式：HH:mm:ss。 |
| role | String | 是      | 说话的角色。 |
| sourceRole | String | 否      | 正确的角色。 |
| identity | String | 是      | 角色标识。 |
| words | String | 是      | 这句话转写内容。 |
| sourceWords | String | 否      | 这句话正确内容，只有当这句话已经完成校验后才会返回。 |
| delta | List| 否      | 文字的错误之处，详见下方Delta属性说明。 |
| incorrectWords | Integer | 否      | 这句话转写的错误字数，只有当这句话已经完成校验后才会返回。 |

### Delta属性说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| source | Chunk | 是      | 人工校验后正确的对话内容。详见下方Chunk属性说明。 |
| target | Chunk | 是      | 转写对话内容，详见下方Chunk属性说明。 |
| type | String | 是      | 错误的不同类型，可能值：CHANGE：错误，INSERT：多字，DELETE：少字。 |

### Chunk属性说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| line | List| 是      | 具体的字。|
| position | Integer | 是      | 字所处的位置。 |',
      'extraInfo' => ' ',
    ),
    'VerifyFile' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '"{"taskId":"EA701F66-8CA2-4A79-8E3C-A6F2****","fileName":"人工校验测试-订购茶叶.wav"}"',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。
',
                'type' => 'string',
                'example' => 's',
              ),
              'Data' => 
              array (
                'description' => '当前识别准确率：已校验过的文件错误字数/已校验过的文件总字数。',
                'type' => 'number',
                'format' => 'float',
                'example' => '0.9485294',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '106C6CA0-282D-4AF7-85F0-D2D24F4CE647',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"s\\",\\n  \\"Data\\": 0.9485294,\\n  \\"RequestId\\": \\"106C6CA0-282D-4AF7-85F0-D2D24F4CE647\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<VerifyFileResponse>\\n    <Message>successful</Message>\\n    <RequestId>3FC826D9-2017-411B-A73F-BDF80F6651F7</RequestId>\\n    <Data>0.9485294222831726</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</VerifyFileResponse>","errorExample":""}]',
      'title' => '保存单个文件的校验结果',
      'summary' => '保存单个文件的校验结果。',
      'requestParamsDescription' => '## 请求参数
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| taskId| Integer| 是      | 任务ID。 |
| fileName| String| 是      | 文件名称。 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'VerifySentence' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '"{"taskId":"EA701F66-8CA2-4A79-8E3C-A6F2F****","fileName":"人工校验测试-订购茶叶.wav","dialogueId":1,"roleCorrect":false,"sourceRole":0,"textCorrect":false,"sourceText":"我要订购大量的信阳毛尖。","oldIncorrectWords":3,"targetText":"我要订购大大的南阳毛巾。","targetRole":1}"',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '106C6CA0-282D-4AF7-85F0-D2D24F4CE647',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'IncorrectWords' => 
              array (
                'description' => '本句错误字数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'TargetRole' => 
              array (
                'description' => '转写角色，可能值：0客服；1客户。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。
',
                'type' => 'string',
                'example' => 'successful',
              ),
              'SourceRole' => 
              array (
                'description' => '人工校验后的正确角色，可能值：0客服；1客户。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Delta' => 
                  array (
                    'description' => '若转写不正确，返回不同之处；否则为空。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '错误的不同类型，可能值：CHANGE错误，INSERT多字，DELETE少字。',
                          'type' => 'string',
                          'example' => 'CHANGE',
                        ),
                        'Source' => 
                        array (
                          'description' => ' 人工校验后正确的对话内容。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Position' => 
                            array (
                              'description' => ' 字所处的位置。 ',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                            'Line' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Line' => 
                                array (
                                  'description' => '具体的字。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => ' 具体的字。',
                                    'type' => 'string',
                                    'example' => '你',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'Target' => 
                        array (
                          'description' => '转写对话内容。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Position' => 
                            array (
                              'description' => ' 字所处的位置。 ',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                            'Line' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Line' => 
                                array (
                                  'description' => '具体的字。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '具体的字。',
                                    'type' => 'string',
                                    'example' => '您',
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
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"106C6CA0-282D-4AF7-85F0-D2D24F4CE647\\",\\n  \\"Success\\": true,\\n  \\"IncorrectWords\\": 2,\\n  \\"TargetRole\\": 1,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"SourceRole\\": 0,\\n  \\"Data\\": {\\n    \\"Delta\\": [\\n      {\\n        \\"Type\\": \\"CHANGE\\",\\n        \\"Source\\": {\\n          \\"Position\\": 1,\\n          \\"Line\\": {\\n            \\"Line\\": [\\n              \\"你\\"\\n            ]\\n          }\\n        },\\n        \\"Target\\": {\\n          \\"Position\\": 1,\\n          \\"Line\\": {\\n            \\"Line\\": [\\n              \\"您\\"\\n            ]\\n          }\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<VerifySentenceResponse>\\n    <SourceRole>0</SourceRole>\\n    <IncorrectWords>3</IncorrectWords>\\n    <Message>successful</Message>\\n    <RequestId>4AD45ADD-4F5E-4BBB-8051-AE8B31F397F9</RequestId>\\n    <TargetRole>1</TargetRole>\\n    <Data>\\n        <Delta>\\n            <Type>CHANGE</Type>\\n            <Target>\\n                <Line>\\n                    <Line>大的南</Line>\\n                </Line>\\n                <Position>5</Position>\\n            </Target>\\n            <Source>\\n                <Line>\\n                    <Line>量信</Line>\\n                </Line>\\n                <Position>5</Position>\\n            </Source>\\n        </Delta>\\n        <Delta>\\n            <Type>CHANGE</Type>\\n            <Target>\\n                <Line>\\n                    <Line>巾</Line>\\n                </Line>\\n                <Position>10</Position>\\n            </Target>\\n            <Source>\\n                <Line>\\n                    <Line>尖</Line>\\n                </Line>\\n                <Position>9</Position>\\n            </Source>\\n        </Delta>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</VerifySentenceResponse>","errorExample":""}]',
      'title' => '保存单个句子的校验结果',
      'summary' => '保存单个句子的校验结果。',
      'requestParamsDescription' => '### 请求参数JSON字符串信息
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| taskId| String| 是      | 任务ID。 |
| fileName| String| 是      | 文件名称。 |
| dialogueId | Integer| 是      | 句子ID，即句子在整个对话数组中的位置，从0开始。 |
| roleCorrect | Boolean | 是 | 角色判断是否正确，若为true，则只需要提供sourceRole；否则需要提供sourceRole、targetRole。 |
| sourceRole | Integer | 是 | 人工校验后的正确角色，可选值：0客服；1客户。 |
| targetRole | Integer | 否 | 转写角色，可选值：0客服；1客户。 |
| textCorrect | Boolean | 否 | 文本转写是否正确，默认false，若为true，则只需要提供sourceText；若为false，则需要提供sourceText、targetText。|
| sourceText| String| 是      | 人工校验后的正确对话。 |
| targetText | String | 是 | 转写出的对话。 |
| oldIncorrectWords | Integer | 否 | 之前的错误字数，默认0；第一次校验都是0，对于已经校验过的句子再次修改时要填写；在GetNextResultToVerify中会返回（incorrectWords），每句提交后也会返回incorrectWords。|',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateTaskAssignRule' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见下方详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"callType":"0","durationMin":1,"durationMax":300,"agents":[{"agentId":"202526561358712105","agentName":"agent"}],"rules":[{"rid":15659}],"reviewers":[{"reviewerId":"255746168704895558","reviewerName":"0917质检员"},{"reviewerId":"268370362815185444","reviewerName":"0710质检员"}],"skillGroups":[{"skillName":"客服组"}],"priority":5}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。
',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Data' => 
              array (
                'description' => '创建成功时返回的规则id。',
                'type' => 'string',
                'example' => '54',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '106C6CA0-282D-4AF7-85F0-D2D24F4CE647',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": \\"54\\",\\n  \\"RequestId\\": \\"106C6CA0-282D-4AF7-85F0-D2D24F4CE647\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateTaskAssignRuleResponse>\\n    <Message>successful</Message>\\n    <RequestId>A28F15BD-1842-4747-8866-86183201AA48</RequestId>\\n    <Data>37</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</CreateTaskAssignRuleResponse>","errorExample":""}]',
      'title' => '新建复核任务自动分配规则',
      'summary' => '新建复核任务自动分配规则。',
      'requestParamsDescription' => '## 入参说明

| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| agents    | List | 是   |   客服List，**详见下方Agent字段说明**。 |
| skillGroups    | List | 是   |  技能组List，**详见下方SkillGroup字段说明**。|
| durationMin    | Long | 否   |  时长范围左区间，单位：秒。 |
| durationMax    | Long | 否   |  时长范围右区间，单位：秒；0表示不限。|
| callType    | Byte | 否   |  呼叫类型，可取值：1呼出；3呼入；不限。|
| rules    | List | 否   |  命中哪些规则时分配，**详见下方Rule字段说明**。|
| reviewers    | List | 是   |  质检员，**详见下方Reviewer字段说明**。 |

### SkillGroup字段说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| skillName | String | 是 | 技能组名称。 |

### Rule字段说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| rid | String | 是 | 规则ID。 |

### Agent字段说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| agentId | Long | 是 |   客服ID。 |
| agentName | String | 是 |  客服名称。 |

### Reviewer字段说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| reviewerId | Long | 是 |  质检员的用户ID。 |
| reviewerName | String | 是 | 质检员名称。|',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateTaskAssignRule' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见下方详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"callType":"0","agents":[{"agentId":"202526561358712105","agentName":"agent"}],"reviewers":[{"reviewerId":"255746168704895558","reviewerName":"0917质检员"},{"reviewerId":"268370362815185444","reviewerName":"0710质检员"}],"durationMin":1,"durationMax":300,"rules":[{"rid":15659},{"rid":17075}],"skillGroups":[{"skillName":"客服组"}],"enabled":1,"ruleId":37,"updateType":0}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。
',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '106C6CA0-282D-4AF7-85F0-D2D24F4CE647',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"106C6CA0-282D-4AF7-85F0-D2D24F4CE647\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateTaskAssignRuleResponse>\\n    <Message>successful</Message>\\n    <RequestId>CB87B834-A048-43ED-8271-DDF85F6E9030</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</UpdateTaskAssignRuleResponse>\\n","errorExample":""}]',
      'title' => '更新复核任务自动分配规则',
      'summary' => '更新复核任务自动分配规则。',
      'requestParamsDescription' => '## 入参说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| ruleId| Long| 是      | 规则ID |
| agents    | List | 是   |   客服List，**详见下方Agent字段说明** 。|
| skillGroups    | List | 否 |  技能组List，**详见下方SkillGroup字段说明** 。|
| durationMin    | Long | 否   |  时长范围左区间，单位：秒。 |
| durationMax    | Long | 否   |  时长范围右区间，单位：秒；0表示不限。 |
| callType    | Byte | 否   |  呼叫类型：1：呼出；3：呼入；0：不限。|
| rules    | List | 否   |  命中哪些规则时分配，**详见下方Rule字段说明**。|
| reviewers    | List | 是   |  质检员，**详见下方Reviewer字段说明**。 |
| enabled     | Byte | 否   |启用状态，可取值：0禁用；1启用，在修改启用状态时，入参仅需ruleId、enabled和updateType即可。 |
| updateType    | Integer | 是   | 更新类别，1：修改启用状态；0：修改规则详细配置。 |

### SkillGroup字段说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| skillName | String | 是 | 技能组名称。 |

### Rule字段说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| rid | String | 是 | 规则ID。 |

### Agent字段说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| agentId | Long | 是 |   客服ID。 |
| agentName | String | 是 |  客服名称。|

### Reviewer字段说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| reviewerId | Long | 是 |  质检员的用户ID。 |
| reviewerName | String | 是 | 质检员名称。 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListTaskAssignRules' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见下方详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"pageNumber":1,"pageSize":10}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '106C6CA0-282D-4AF7-85F0-D2D24F4CE647',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Count' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '23',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TaskAssignRuleInfo' => 
                  array (
                    'description' => '详细返回数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UpdateTime' => 
                        array (
                          'description' => '最后更新时间。',
                          'type' => 'string',
                          'example' => '2019-07-12T14:47Z',
                        ),
                        'SkillGroupsStr' => 
                        array (
                          'description' => '弃用字段，请忽略。',
                          'type' => 'string',
                          'example' => 'XX',
                        ),
                        'CallTimeEnd' => 
                        array (
                          'description' => '通话时间结束值，单位：秒，例如上午十一点，则传入39600。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '39600',
                        ),
                        'DurationMax' => 
                        array (
                          'description' => '通话时长区间最大值（秒）。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '400',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '2019-07-12T14:47Z',
                        ),
                        'Priority' => 
                        array (
                          'description' => '弃用字段，请忽略。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'DurationMin' => 
                        array (
                          'description' => '通话时长区间最小值（秒）。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                        'AgentsStr' => 
                        array (
                          'description' => '弃用字段，请忽略。',
                          'type' => 'string',
                          'example' => 'XX',
                        ),
                        'RuleName' => 
                        array (
                          'description' => '规则名称。',
                          'type' => 'string',
                          'example' => '分配规则',
                        ),
                        'RuleId' => 
                        array (
                          'description' => '规则ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '23',
                        ),
                        'AssignmentType' => 
                        array (
                          'description' => '分配类型，可能值：0指定分配，1随机分配。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'CallType' => 
                        array (
                          'description' => '呼叫类型，可取值：1呼出；3呼入；0不限。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Enabled' => 
                        array (
                          'description' => '弃用字段，请忽略。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'CallTimeStart' => 
                        array (
                          'description' => '通话时间结束值，单位：秒，例如上午十一点，则传入39600。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '39600',
                        ),
                        'Agents' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Agent' => 
                            array (
                              'description' => '客服列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'AgentName' => 
                                  array (
                                    'description' => '客服名称。',
                                    'type' => 'string',
                                    'example' => 'agent',
                                  ),
                                  'AgentId' => 
                                  array (
                                    'description' => '客服的用户ID。',
                                    'type' => 'string',
                                    'example' => '202526561358712105',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'SkillGroups' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'SkillGroup' => 
                            array (
                              'description' => '技能组列表信息。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'SkillName' => 
                                  array (
                                    'description' => '技能组名称。',
                                    'type' => 'string',
                                    'example' => '客服组',
                                  ),
                                  'SkillId' => 
                                  array (
                                    'description' => '弃用字段，请忽略。',
                                    'type' => 'string',
                                    'example' => 'XXX',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'Reviewers' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Reviewer' => 
                            array (
                              'description' => '质检员信息。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'ReviewerId' => 
                                  array (
                                    'description' => '质检员的用户ID。',
                                    'type' => 'string',
                                    'example' => '2337235457340978',
                                  ),
                                  'ReviewerName' => 
                                  array (
                                    'description' => '质检员名称。',
                                    'type' => 'string',
                                    'example' => '客服审核1',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'Rules' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'RuleBasicInfo' => 
                            array (
                              'description' => '所选的质检规则列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Name' => 
                                  array (
                                    'description' => '质检规则名称。',
                                    'type' => 'string',
                                    'example' => '用户可能要投诉',
                                  ),
                                  'Rid' => 
                                  array (
                                    'description' => '质检规则ID。',
                                    'type' => 'string',
                                    'example' => '2312',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'SamplingMode' => 
                        array (
                          'description' => '随机分配参数。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'NumberOfDraws' => 
                            array (
                              'description' => '按客服维度指定客服时，每个客服抽检的文件条数。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '20',
                            ),
                            'AnyNumberOfDraws' => 
                            array (
                              'description' => '按时间维度模式下，抽取通话录音的时长，单位：分钟。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '60',
                            ),
                            'Limit' => 
                            array (
                              'description' => '抽检文件条数上限。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '30',
                            ),
                            'Proportion' => 
                            array (
                              'description' => '抽检比例，0.1代表10%。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '0.1',
                            ),
                            'Dimension' => 
                            array (
                              'description' => '抽样模式，可能值：0：按会话维度，1：按客服维度，2：按时间维度。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'Designated' => 
                            array (
                              'description' => '抽样模式为按客服维度时，是否指定客服。',
                              'type' => 'boolean',
                              'example' => 'true',
                            ),
                            'RandomInspectionNumber' => 
                            array (
                              'description' => '按客服维度不指定客服时，随机抽检客服的个数。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '5',
                            ),
                            'SamplingModeAgents' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'SamplingModeAgent' => 
                                array (
                                  'description' => '按客服维度指定客服时客服的列表。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'AgentName' => 
                                      array (
                                        'description' => '客服用户名。',
                                        'type' => 'string',
                                        'example' => 'zhangsan',
                                      ),
                                      'AgentId' => 
                                      array (
                                        'description' => '客服id。',
                                        'type' => 'string',
                                        'example' => '123',
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
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"106C6CA0-282D-4AF7-85F0-D2D24F4CE647\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"Count\\": 23,\\n  \\"Data\\": {\\n    \\"TaskAssignRuleInfo\\": [\\n      {\\n        \\"UpdateTime\\": \\"2019-07-12T14:47Z\\",\\n        \\"SkillGroupsStr\\": \\"XX\\",\\n        \\"CallTimeEnd\\": 39600,\\n        \\"DurationMax\\": 400,\\n        \\"CreateTime\\": \\"2019-07-12T14:47Z\\",\\n        \\"Priority\\": 1,\\n        \\"DurationMin\\": 100,\\n        \\"AgentsStr\\": \\"XX\\",\\n        \\"RuleName\\": \\"分配规则\\",\\n        \\"RuleId\\": 23,\\n        \\"AssignmentType\\": 0,\\n        \\"CallType\\": 1,\\n        \\"Enabled\\": 1,\\n        \\"CallTimeStart\\": 39600,\\n        \\"Agents\\": {\\n          \\"Agent\\": [\\n            {\\n              \\"AgentName\\": \\"agent\\",\\n              \\"AgentId\\": \\"202526561358712105\\"\\n            }\\n          ]\\n        },\\n        \\"SkillGroups\\": {\\n          \\"SkillGroup\\": [\\n            {\\n              \\"SkillName\\": \\"客服组\\",\\n              \\"SkillId\\": \\"XXX\\"\\n            }\\n          ]\\n        },\\n        \\"Reviewers\\": {\\n          \\"Reviewer\\": [\\n            {\\n              \\"ReviewerId\\": \\"2337235457340978\\",\\n              \\"ReviewerName\\": \\"客服审核1\\"\\n            }\\n          ]\\n        },\\n        \\"Rules\\": {\\n          \\"RuleBasicInfo\\": [\\n            {\\n              \\"Name\\": \\"用户可能要投诉\\",\\n              \\"Rid\\": \\"2312\\"\\n            }\\n          ]\\n        },\\n        \\"SamplingMode\\": {\\n          \\"NumberOfDraws\\": 20,\\n          \\"AnyNumberOfDraws\\": 60,\\n          \\"Limit\\": 30,\\n          \\"Proportion\\": 0.1,\\n          \\"Dimension\\": 0,\\n          \\"Designated\\": true,\\n          \\"RandomInspectionNumber\\": 5,\\n          \\"SamplingModeAgents\\": {\\n            \\"SamplingModeAgent\\": [\\n              {\\n                \\"AgentName\\": \\"zhangsan\\",\\n                \\"AgentId\\": \\"123\\"\\n              }\\n            ]\\n          }\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListTaskAssignRulesResponse>\\n    <Message>successful</Message>\\n    <PageSize>10</PageSize>\\n    <RequestId>22DD33F3-C215-4F0F-A38A-360FC8C6D53D</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Data>\\n        <TaskAssignRuleInfo>\\n            <DurationMin>0</DurationMin>\\n            <Priority>5</Priority>\\n            <RuleId>16</RuleId>\\n            <CreateTime>2019-07-12T14:47Z</CreateTime>\\n            <CallType>0</CallType>\\n            <UpdateTime>2020-01-09T16:26Z</UpdateTime>\\n            <Agents>\\n                <Agent>\\n                    <AgentId>202526561358712105</AgentId>\\n                    <AgentName>agent</AgentName>\\n                </Agent>\\n            </Agents>\\n            <Enabled>0</Enabled>\\n            <DurationMax>0</DurationMax>\\n            <Reviewers>\\n                <Reviewer>\\n                    <ReviewerId>268370362815185444</ReviewerId>\\n                    <ReviewerName>0710质检员</ReviewerName>\\n                </Reviewer>\\n            </Reviewers>\\n            <Rules>\\n                <RuleBasicInfo>\\n                    <Rid>12970</Rid>\\n                    <Name>看了</Name>\\n                </RuleBasicInfo>\\n            </Rules>\\n        </TaskAssignRuleInfo>\\n    </Data>\\n    <Count>19</Count>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListTaskAssignRulesResponse>","errorExample":""}]',
      'title' => '获取复核任务自动分配规则列表',
      'summary' => '获取复核任务自动分配规则列表。',
      'requestParamsDescription' => '## 入参说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| pageSize| Integer| 是      | 每页条数。 |
| pageNumber| Integer| 是      | 当前页。 |
| skillName| String| 否      | 技能组名称。 |
| agentName| String| 否      |客服名称。 |
| reviewerName| String| 否      |质检员名称。 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteTaskAssignRule' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见下方详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"ruleId": 24}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。
',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '106C6CA0-282D-4AF7-85F0-D2D24F4CE647',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"106C6CA0-282D-4AF7-85F0-D2D24F4CE647\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteTaskAssignRuleResponse>\\n    <Message>successful</Message>\\n    <RequestId>CB87B834-A048-43ED-8271-DDF85F6E9030</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DeleteTaskAssignRuleResponse>\\n","errorExample":""}]',
      'title' => '删除复核任务自动分配规则',
      'summary' => '删除复核任务自动分配规则。',
      'requestParamsDescription' => '## 入参说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| ruleId| Long| 是      | 待删除的复核任务自动分配规则ID。 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateWarningConfig' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"ridList":[15670],"configName":"投诉预警","channels":[{"type":1,"url":"https://xxx"}]}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。
',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Data' => 
              array (
                'description' => '本次创建成功的预警配置的ID。',
                'type' => 'string',
                'example' => '30',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '82C91484-B2D5-4D2A-A21F-A6D73F4D55C6',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功，false/null表示失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": \\"30\\",\\n  \\"RequestId\\": \\"82C91484-B2D5-4D2A-A21F-A6D73F4D55C6\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateWarningConfigResponse>\\n    <Message>successful</Message>\\n    <RequestId>0BB91762-5DDF-4D0B-876D-1D4F4C21AC28</RequestId>\\n    <Data>31</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</CreateWarningConfigResponse>\\n","errorExample":""}]',
      'title' => '新建预警配置',
      'summary' => '来新建预警配置。',
      'requestParamsDescription' => '## 入参说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| configName | String| 是      | 配置名称。 |
| channels    | Channel | 是   |  订阅方式List，**详见下方的Channel字段说明**。 |
| ridList    | List | 是   |  已选择的规则ridList。 |


### Channel字段说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| type | Byte | 是 | 订阅方式，可取值：0钉钉；1回调。|
| url | String | 是 | URL地址。|',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateWarningConfig' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见下方详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"ridList":[18130],"configName":"0310","channels":[{"type":1,"url":"https://sca.console.aliyun.com/#/warningConfig"}],"configId":29}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。
',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '106C6CA0-282D-4AF7-85F0-D2D24F4CE647',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"106C6CA0-282D-4AF7-85F0-D2D24F4CE647\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateWarningConfigResponse>\\n    <Message>successful</Message>\\n    <RequestId>106C6CA0-282D-4AF7-85F0-D2D24F4CE647</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</UpdateWarningConfigResponse>","errorExample":""}]',
      'title' => '更新预警配置',
      'summary' => '更新预警配置。',
      'requestParamsDescription' => '## 入参说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| configId| Long| 是      | 配置ID |
| configName | String| 否      | 配置名称 |
| status| Byte| 否     | 启用状态，0：未启用；1：启用 |
| channels    | List | 否   |  订阅推送配置，**详见下方Channel字段说明** |
| ridList    | List| 否   |  已选择的规则ID列表|


### Channel字段说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| type | Byte | 是 |  订阅推送类型，0：钉钉，1：回调  |
| url | String | 是 | URL地址 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListWarningConfig' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见下方详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"pageNumber":1,"pageSize":10}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。
',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '82C91484-B2D5-4D2A-A21F-A6D73F4D55C6',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'WarningConfigInfo' => 
                  array (
                    'description' => '详细返回数据。
',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '启用状态，可能值：0未启用；1启用。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'ConfigName' => 
                        array (
                          'description' => '预警配置名称。',
                          'type' => 'string',
                          'example' => '投诉预警',
                        ),
                        'UpdateTime' => 
                        array (
                          'description' => '最后更新时间。',
                          'type' => 'string',
                          'example' => '2019-10-29T17:24Z',
                        ),
                        'ConfigId' => 
                        array (
                          'description' => '预警配置ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '32',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '2019-10-29T15:30Z',
                        ),
                        'RuleList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'WarningRule' => 
                            array (
                              'description' => '预警配置所设置的规则列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '规则列表',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'RuleName' => 
                                  array (
                                    'description' => '规则名称。',
                                    'type' => 'string',
                                    'example' => '客户可能要投诉',
                                  ),
                                  'Rid' => 
                                  array (
                                    'description' => '规则ID。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '33452',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'Channels' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Channel' => 
                            array (
                              'description' => '订阅渠道。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '订阅渠道。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Type' => 
                                  array (
                                    'description' => '订阅推送类型，可取值：0（钉钉）；1（回调）。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '0',
                                  ),
                                  'Url' => 
                                  array (
                                    'description' => '推送地址URL。',
                                    'type' => 'string',
                                    'example' => 'oapi.dingtalk.com/robot/send?access_token=c55628f700eb9ad2a3ca',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'RidList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'RidList' => 
                            array (
                              'description' => '预警配置所设置的规则的ID集合。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '预警配置所设置的规则的ID集合。',
                                'type' => 'string',
                                'example' => '[5767,5647]',
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
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"82C91484-B2D5-4D2A-A21F-A6D73F4D55C6\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"WarningConfigInfo\\": [\\n      {\\n        \\"Status\\": 1,\\n        \\"ConfigName\\": \\"投诉预警\\",\\n        \\"UpdateTime\\": \\"2019-10-29T17:24Z\\",\\n        \\"ConfigId\\": 32,\\n        \\"CreateTime\\": \\"2019-10-29T15:30Z\\",\\n        \\"RuleList\\": {\\n          \\"WarningRule\\": [\\n            {\\n              \\"RuleName\\": \\"客户可能要投诉\\",\\n              \\"Rid\\": 33452\\n            }\\n          ]\\n        },\\n        \\"Channels\\": {\\n          \\"Channel\\": [\\n            {\\n              \\"Type\\": 0,\\n              \\"Url\\": \\"oapi.dingtalk.com/robot/send?access_token=c55628f700eb9ad2a3ca\\"\\n            }\\n          ]\\n        },\\n        \\"RidList\\": {\\n          \\"RidList\\": [\\n            \\"[5767,5647]\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListWarningConfigResponse>\\n    <Message>successful</Message>\\n    <RequestId>3137EFD8-7173-42E1-A85C-D4EC9EB98DF8</RequestId>\\n    <Data>\\n        <WarningConfigInfo>\\n            <Status>0</Status>\\n            <RuleList>\\n                <WarningRule>\\n                    <Rid>5818</Rid>\\n                    <RuleName>1111111</RuleName>\\n                </WarningRule>\\n                <WarningRule>\\n                    <Rid>5819</Rid>\\n                    <RuleName>4444444</RuleName>\\n                </WarningRule>\\n            </RuleList>\\n            <ConfigName>test01</ConfigName>\\n            <CreateTime>2019-10-29T15:30Z</CreateTime>\\n            <UpdateTime>2019-10-29T17:24Z</UpdateTime>\\n            <RidList>\\n                <RidList>5819</RidList>\\n                <RidList>5818</RidList>\\n            </RidList>\\n            <ConfigId>16</ConfigId>\\n            <Channels>\\n                <Channel>\\n                    <Type>0</Type>\\n                    <Url>oapi.dingtalk.com/robot/send?access_token=c55628f700eb9ad2a3cafbd90cdb91532fd2b6b0c796ab08b5c4dca795ee7b60</Url>\\n                </Channel>\\n            </Channels>\\n        </WarningConfigInfo>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListWarningConfigResponse>","errorExample":""}]',
      'title' => '获取预警配置列表',
      'summary' => '获取预警配置列表。',
      'requestParamsDescription' => '## 入参说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| pageSize| Integer| 是      | 每页条数。 |
| pageNumber| Integer| 是      | 当前页。 |
| configName| String| 否      | 配置名称。 |
| ruleName| String| 否      | 规则名称。 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteWarningConfig' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见下方详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"configId": "31"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。
',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '82C91484-B2D5-4D2A-A21F-A6D73F4D55C6',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"82C91484-B2D5-4D2A-A21F-A6D73F4D55C6\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteWarningConfigResponse>\\n    <Code>200</Code>\\n    <RequestId>D1436A84-8A33-4416-ACC9-94D0247C6DA8</RequestId>\\n    <Success>true</Success>\\n    <Message>successful</Message>\\n</DeleteWarningConfigResponse>","errorExample":""}]',
      'title' => '删除预警配置',
      'summary' => '删除预警配置。',
      'requestParamsDescription' => '## 入参说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| configId| Long| 是      | 待删除的预警配置ID |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateSkillGroupConfig' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一个JSON格式的字符串，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"skillGroupFrom":0,"qualityCheckType":0,"modelId":746,"name":"test","rid":"2493","vocabId":"267","skillGroupList":[{"skillGroupId":"0903","skillGroupName":"0903"}]}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，200表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Data' => 
              array (
                'description' => '新建成功的配置ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '223',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3CEA0495-341B-4482-9AD9-8191EF4***	',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": 223,\\n  \\"RequestId\\": \\"3CEA0495-341B-4482-9AD9-8191EF4***\\\\t\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>successful</Message>\\n<RequestId>0A2B7B10-0938-45C2-BAA4-***</RequestId>\\n<Data>553</Data>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '新建配置',
      'summary' => '新建配置。',
      'requestParamsDescription' => '**请求参数Json字符串信息**
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| skillGroupFrom| Integer| 是      |技能组来源，固定传入0 |
| qualityCheckType| Integer| 是      |质检类型， 固定传入0|
| modelId| Integer| 否      |语言模型ID |
| name| String| 是      |配置名称|
| rid| String| 是      |质检规则，多个规则用逗号隔开，-2表示所有规则 |
| vocabId| String| 否      |热词模型ID |
| skillGroupList| List| 是      |技能信息，详见下方的skillGroupList字段说明 |

**skillGroupList字段说明息**
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| skillGroupId| Integer| 是      |技能组来ID |
| skillGroupName| String| 是      |技能组名称|',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateSkillGroupConfig' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"skillGroupFrom":0,"name":"test","qualityCheckType":0,"rid":"2493,4098","vocabId":267,"skillGroupList":[{"skillGroupId":"090311","skillGroupName":"09031"}],"id":553}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，200表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。

',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。

',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '38E7E948-0876-4FEE-B0AA-6*****',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。

',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"38E7E948-0876-4FEE-B0AA-6*****\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>successful</Message>\\n<RequestId>38E7E948-0876-4FEE-B0AA-6DBAE9EB4***</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '更新配置',
      'summary' => '调用UpdateSkillGroupConfig更新配置。',
      'requestParamsDescription' => '## 请求参数JSON字符串信息
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| id| Integer| 是      |配置ID |
| status| Integer| 否      |启用状态，可选值：0（禁用）；1（启用） |
| skillGroupFrom| Integer| 是      |技能组来源，固定传入0 |
| qualityCheckType| Integer| 是      |质检类型， 固定传入0|
| modelId| Integer| 否      |语言模型ID |
| name| String| 是      |配置名称|
| rid| String| 是      |质检规则，多个规则用逗号隔开，-2表示所有规则 |
| vocabId| String| 否      |热词模型ID |
| skillGroupList| List| 是      |技能信息，详见下方的skillGroupList字段说明 |

## skillGroupList字段说明息
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| skillGroupId| Integer| 是      |技能组来ID |
| skillGroupName| String| 是      |技能组名称|',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetSkillGroupConfig' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"id":"配置ID"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功。

> 若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3CEA0495-341B-4482-9AD9-8191EF4***	',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。

调用方可根据此字段来判断请求是否成功：

- **true**表示成功
- **false/null**表示失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '技能组规则配置详情列表',
                'type' => 'object',
                'properties' => 
                array (
                  'Type' => 
                  array (
                    'description' => '配置类型，可能值：1（自定义新建配置）；0（系统内置配置）',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Status' => 
                  array (
                    'description' => '启用状态，可能值：0（未启用）；1（启用）',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'UpdateTime' => 
                  array (
                    'description' => '更新时间',
                    'type' => 'string',
                    'example' => '2020-12-01T19:28Z',
                  ),
                  'AllContentQualityCheck' => 
                  array (
                    'description' => '实时质检结束后是否进行全文质检。可能值：
- 1：进行全文质检
- 0：不进行全文质检',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '2020-12-01T15:12Z',
                  ),
                  'SkillGroupId' => 
                  array (
                    'description' => '技能组ID',
                    'type' => 'string',
                    'example' => '111',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '内部字段，请忽略。',
                    'type' => 'string',
                    'example' => 'xxx',
                  ),
                  'VocabId' => 
                  array (
                    'description' => '热词ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                  'SkillGroupFrom' => 
                  array (
                    'description' => '技能组来源，固定为0',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Rid' => 
                  array (
                    'description' => '质检规则ID。',
                    'type' => 'string',
                    'example' => '2332',
                  ),
                  'SkillGroupName' => 
                  array (
                    'description' => '技能组名称',
                    'type' => 'string',
                    'example' => 'xxx',
                  ),
                  'ModelName' => 
                  array (
                    'description' => '语言模型名称',
                    'type' => 'string',
                    'example' => 'xxx',
                  ),
                  'AllRids' => 
                  array (
                    'description' => '全文质检时的质检规则ID。',
                    'type' => 'string',
                    'example' => '223',
                  ),
                  'Name' => 
                  array (
                    'description' => '配置名称',
                    'type' => 'string',
                    'example' => 'xxx',
                  ),
                  'ModelId' => 
                  array (
                    'description' => '语言模型ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1321',
                  ),
                  'Id' => 
                  array (
                    'description' => '配置ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1212',
                  ),
                  'QualityCheckType' => 
                  array (
                    'description' => '质检类型，可能值：
- 0：离线质检
- 1：实时质检',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'VocabName' => 
                  array (
                    'description' => '热词名称',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'RuleList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RuleNameInfo' => 
                      array (
                        'description' => '规则列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'RuleName' => 
                            array (
                              'description' => '规则名称',
                              'type' => 'string',
                              'example' => 'test',
                            ),
                            'Rid' => 
                            array (
                              'description' => '规则ID。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '222',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'AllRuleList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RuleNameInfo' => 
                      array (
                        'description' => '全文质检使用的规则明细',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'RuleName' => 
                            array (
                              'description' => '规则名称。',
                              'type' => 'string',
                              'example' => 'test',
                            ),
                            'Rid' => 
                            array (
                              'description' => '规则ID。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '12',
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
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"3CEA0495-341B-4482-9AD9-8191EF4***\\\\t\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Type\\": 1,\\n    \\"Status\\": 0,\\n    \\"UpdateTime\\": \\"2020-12-01T19:28Z\\",\\n    \\"AllContentQualityCheck\\": 1,\\n    \\"CreateTime\\": \\"2020-12-01T15:12Z\\",\\n    \\"SkillGroupId\\": \\"111\\",\\n    \\"InstanceId\\": \\"xxx\\",\\n    \\"VocabId\\": 123,\\n    \\"SkillGroupFrom\\": 0,\\n    \\"Rid\\": \\"2332\\",\\n    \\"SkillGroupName\\": \\"xxx\\",\\n    \\"ModelName\\": \\"xxx\\",\\n    \\"AllRids\\": \\"223\\",\\n    \\"Name\\": \\"xxx\\",\\n    \\"ModelId\\": 1321,\\n    \\"Id\\": 1212,\\n    \\"QualityCheckType\\": 0,\\n    \\"VocabName\\": \\"test\\",\\n    \\"RuleList\\": {\\n      \\"RuleNameInfo\\": [\\n        {\\n          \\"RuleName\\": \\"test\\",\\n          \\"Rid\\": 222\\n        }\\n      ]\\n    },\\n    \\"AllRuleList\\": {\\n      \\"RuleNameInfo\\": [\\n        {\\n          \\"RuleName\\": \\"test\\",\\n          \\"Rid\\": 12\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>6FB2B950-FB76-4752-8E56-044A65***</RequestId>\\n<Message>successful</Message>\\n<Data>\\n    <Status>1</Status>\\n    <RuleList>\\n        <RuleNameInfo>\\n            <Rid>3316</Rid>\\n            <RuleName>围巾2</RuleName>\\n        </RuleNameInfo>\\n    </RuleList>\\n    <VocabId>0</VocabId>\\n    <QualityCheckType>0</QualityCheckType>\\n    <AllContentQualityCheck>0</AllContentQualityCheck>\\n    <CreateTime>2020-12-01T15:12Z</CreateTime>\\n    <SkillGroupId/>\\n    <Rid>3316</Rid>\\n    <Name>15个技能组测试</Name>\\n    <Type>1</Type>\\n    <SkillGroupName/>\\n    <UpdateTime>2020-12-01T19:28Z</UpdateTime>\\n    <Id>468</Id>\\n    <ModelId>746</ModelId>\\n    <SkillGroupFrom>0</SkillGroupFrom>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '根据ID获取技能组规则配置详情',
      'summary' => '根据ID获取指定的配置。',
      'requestParamsDescription' => '### 请求参数JSON字符串信息
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| id| Long| 是      |配置ID |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListSkillGroupConfig' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"pageNumber":1,"pageSize": 1}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，200表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。

',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。

',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3CEA0495-341B-4482-9AD9-8191EF4***	',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。

',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'SkillGroupConfig' => 
                  array (
                    'description' => '配置列表信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '配置类型，可能值：1（自定义新建配置）；0（系统内置配置）

',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Status' => 
                        array (
                          'description' => '启用状态，可能值：0（未启用）；1（启用）

',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'UpdateTime' => 
                        array (
                          'description' => '更新时间

',
                          'type' => 'string',
                          'example' => '2020-12-01T19:28Z	',
                        ),
                        'AllContentQualityCheck' => 
                        array (
                          'description' => '实时质检结束后是否进行全文质检。可能值：1（进行全文质检）；0（不进行全文质检）',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间',
                          'type' => 'string',
                          'example' => '2020-12-01T15:12Z',
                        ),
                        'SkillGroupId' => 
                        array (
                          'description' => '技能组ID

',
                          'type' => 'string',
                          'example' => '123',
                        ),
                        'ScreenSwitch' => 
                        array (
                          'description' => '是否启用随录数据匹配。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '内部字段，请忽略。',
                          'type' => 'string',
                          'example' => 'xxx',
                        ),
                        'VocabId' => 
                        array (
                          'description' => '热词模型ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '323',
                        ),
                        'SkillGroupFrom' => 
                        array (
                          'description' => '技能组来源，固定为0

',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Rid' => 
                        array (
                          'description' => '质检规则ID。',
                          'type' => 'string',
                          'example' => '2221',
                        ),
                        'SkillGroupName' => 
                        array (
                          'description' => '技能组名称

',
                          'type' => 'string',
                          'example' => 'xxx',
                        ),
                        'ModelName' => 
                        array (
                          'description' => '语言模型名称

',
                          'type' => 'string',
                          'example' => 'xxx',
                        ),
                        'AllRids' => 
                        array (
                          'description' => '全文质检时的质检规则id',
                          'type' => 'string',
                          'example' => '223',
                        ),
                        'Name' => 
                        array (
                          'description' => '配置名称。',
                          'type' => 'string',
                          'example' => 'xxx',
                        ),
                        'ModelId' => 
                        array (
                          'description' => '语言模型ID

',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '211',
                        ),
                        'Id' => 
                        array (
                          'description' => '配置ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '221',
                        ),
                        'QualityCheckType' => 
                        array (
                          'description' => '质检类型，可能值：0（离线质检）；1（实时质检）

',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'VocabName' => 
                        array (
                          'description' => '热词模型名称',
                          'type' => 'string',
                          'example' => 'xxx',
                        ),
                        'RuleList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'RuleNameInfo' => 
                            array (
                              'description' => '规则列表

',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'RuleName' => 
                                  array (
                                    'description' => '规则名称',
                                    'type' => 'string',
                                    'example' => 'x\'x\'x',
                                  ),
                                  'Rid' => 
                                  array (
                                    'description' => '规则ID',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '2221',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'AllRuleList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'RuleNameInfo' => 
                            array (
                              'description' => '全文质检使用的规则明细',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'RuleName' => 
                                  array (
                                    'description' => '规则名称',
                                    'type' => 'string',
                                    'example' => 'test',
                                  ),
                                  'Rid' => 
                                  array (
                                    'description' => '规则ID。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '221',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'SkillGroupScreens' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'SkillGroupScreen' => 
                            array (
                              'description' => '随录数据信息。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Value' => 
                                  array (
                                    'description' => '随录数据匹配值。',
                                    'type' => 'string',
                                    'example' => '张三',
                                  ),
                                  'DataType' => 
                                  array (
                                    'description' => 'value的类型，0：String；1：Number；2：List（在使用=的时候，都使用list类型来传递参数value）',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '0',
                                  ),
                                  'Symbol' => 
                                  array (
                                    'description' => '运算符
- 1：=
- 2：>
- 3：<',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '1',
                                  ),
                                  'Name' => 
                                  array (
                                    'description' => '随录数据字段名称，随录数据指的是在上传质检任务时，传入的参数，也就是质检结果列表页表格的表头内容。这里具体的值是英文，例如客服姓名=>customerName，更多可用字段对应的英文可参考对应上传质检数据接口文档中的请求入参。',
                                    'type' => 'string',
                                    'example' => 'customerName',
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
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"3CEA0495-341B-4482-9AD9-8191EF4***\\\\t\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"SkillGroupConfig\\": [\\n      {\\n        \\"Type\\": 1,\\n        \\"Status\\": 1,\\n        \\"UpdateTime\\": \\"2020-12-01T19:28Z\\\\t\\",\\n        \\"AllContentQualityCheck\\": 1,\\n        \\"CreateTime\\": \\"2020-12-01T15:12Z\\",\\n        \\"SkillGroupId\\": \\"123\\",\\n        \\"ScreenSwitch\\": true,\\n        \\"InstanceId\\": \\"xxx\\",\\n        \\"VocabId\\": 323,\\n        \\"SkillGroupFrom\\": 0,\\n        \\"Rid\\": \\"2221\\",\\n        \\"SkillGroupName\\": \\"xxx\\",\\n        \\"ModelName\\": \\"xxx\\",\\n        \\"AllRids\\": \\"223\\",\\n        \\"Name\\": \\"xxx\\",\\n        \\"ModelId\\": 211,\\n        \\"Id\\": 221,\\n        \\"QualityCheckType\\": 0,\\n        \\"VocabName\\": \\"xxx\\",\\n        \\"RuleList\\": {\\n          \\"RuleNameInfo\\": [\\n            {\\n              \\"RuleName\\": \\"x\'x\'x\\",\\n              \\"Rid\\": 2221\\n            }\\n          ]\\n        },\\n        \\"AllRuleList\\": {\\n          \\"RuleNameInfo\\": [\\n            {\\n              \\"RuleName\\": \\"test\\",\\n              \\"Rid\\": 221\\n            }\\n          ]\\n        },\\n        \\"SkillGroupScreens\\": {\\n          \\"SkillGroupScreen\\": [\\n            {\\n              \\"Value\\": \\"张三\\",\\n              \\"DataType\\": 0,\\n              \\"Symbol\\": 1,\\n              \\"Name\\": \\"customerName\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>302B38F2-FEA9-4EE2-BCBC-9C953***</RequestId>\\n<Message>successful</Message>\\n<Data>\\n    <SkillGroupConfig>\\n        <Status>1</Status>\\n        <RuleList>\\n            <RuleNameInfo>\\n                <Rid>3316</Rid>\\n                <RuleName>客服组</RuleName>\\n            </RuleNameInfo>\\n        </RuleList>\\n        <ModelName>通用模型</ModelName>\\n        <VocabId>0</VocabId>\\n        <QualityCheckType>0</QualityCheckType>\\n        <AllContentQualityCheck>0</AllContentQualityCheck>\\n        <CreateTime>2020-12-01T15:12Z</CreateTime>\\n        <SkillGroupId/>\\n        <Rid>3316</Rid>\\n        <Name>客服部</Name>\\n        <Type>1</Type>\\n        <SkillGroupName/>\\n        <UpdateTime>2020-12-01T19:28Z</UpdateTime>\\n        <Id>468</Id>\\n        <ModelId>746</ModelId>\\n        <SkillGroupFrom>0</SkillGroupFrom>\\n    </SkillGroupConfig>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '获取配置列表',
      'summary' => '调用ListSkillGroupConfig获取配置列表。',
      'requestParamsDescription' => '### 请求参数JSON字符串信息
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| pageNumber| Integer| 是      |要求返回的第几页的数据，默认1。 |
| pageSize| Integer| 是      |每页返回的数据数，要求大于0，小于100，默认10。 |
| name| String| 否      |按配置名称搜索 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteSkillGroupConfig' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"id":552}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，200表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。

',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。

',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3CEA0495-341B-4482-9AD9-8191EF4***	',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。

',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"3CEA0495-341B-4482-9AD9-8191EF4***\\\\t\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>successful</Message>\\n<RequestId>38E7E948-0876-4FEE-B0AA-6DBAE9EB***</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '删除配置',
      'summary' => '删除配置。',
      'requestParamsDescription' => '## 请求参数JSON字符串信息
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| id| Integer| 是      |配置ID |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetSyncResult' => 
    array (
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"pageNumber":1,"pageSize":10,"requiredFields":"asrResult,agent,status,errorMessage,reviewStatus,reviewResult,score,taskId,reviewer,resolver,recording.name,recording.duration,recording.url,hitResult,business","startTime":"2020-12-25 00:00:00","endTime":"2020-12-31 23:59:59"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '76DB5D8C-5BD9-42A7-B527-5AF3A5F****',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ResultCountId' => 
              array (
                'description' => '内部字段，请忽略。',
                'type' => 'string',
                'example' => 'xxx',
              ),
              'Code' => 
              array (
                'description' => '结果代码，200表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。',
                'type' => 'string',
                'example' => 'successful',
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
                'description' => '每页条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Count' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '查询结果。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '任务当前状态，可能值：0（未完成）；1（已完成），调用方可根据此字段判断任务是否完成；非0、1表示出错，错误详情可查看errorMessage字段。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'ErrorMessage' => 
                    array (
                      'description' => '当status是非0、1时表示错误详情。',
                      'type' => 'string',
                      'example' => 'xxxx',
                    ),
                    'Reviewer' => 
                    array (
                      'description' => '分配的质检员的用户名。',
                      'type' => 'string',
                      'example' => '张三',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '任务创建时间。

',
                      'type' => 'string',
                      'example' => '2019-07-24T19:31Z	',
                    ),
                    'ReviewStatus' => 
                    array (
                      'description' => '复核状态；可能值：0（未复核）；1（已复核）。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'TaskName' => 
                    array (
                      'description' => '内部字段，请忽略。',
                      'type' => 'string',
                      'example' => 'xxx',
                    ),
                    'Comments' => 
                    array (
                      'description' => '复核意见。',
                      'type' => 'string',
                      'example' => 'xxx',
                    ),
                    'ReviewResult' => 
                    array (
                      'description' => '复核准确性，可能值：0（错误）；1（正确）；2（部分正确）；3（待复核）。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'Score' => 
                    array (
                      'description' => '质检得分，满分100。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '100',
                    ),
                    'TaskId' => 
                    array (
                      'description' => '任务ID。',
                      'type' => 'string',
                      'example' => '20201231de3d34ec-40fa-4a55-8d27-76ea*****',
                    ),
                    'Resolver' => 
                    array (
                      'description' => '实际复核的质检员。

',
                      'type' => 'string',
                      'example' => '张三',
                    ),
                    'AsrResult' => 
                    array (
                      'description' => '转写结果（对话文本）',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '文件转写结果。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Words' => 
                          array (
                            'description' => '对话内容。',
                            'type' => 'string',
                            'example' => '您好，很高兴为您服务',
                          ),
                          'Begin' => 
                          array (
                            'description' => '本句话的开始时间，是相对起始点的开始时间偏移，单位ms。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '340',
                          ),
                          'EmotionValue' => 
                          array (
                            'description' => '情绪能量值1-10，值越高情绪越强烈。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '6',
                          ),
                          'End' => 
                          array (
                            'description' => '本句话的结束时间，是相对起始点的结束时间偏移，单位ms。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '3000',
                          ),
                          'SpeechRate' => 
                          array (
                            'description' => '本句平均语速，单位：字/分钟。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '221',
                          ),
                          'Role' => 
                          array (
                            'description' => '对话内容角色，可能值：客服、客户。',
                            'type' => 'string',
                            'example' => '客服',
                          ),
                          'SilenceDuration' => 
                          array (
                            'description' => '内部字段，请忽略。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '11',
                          ),
                        ),
                      ),
                    ),
                    'HitResult' => 
                    array (
                      'description' => '规则命中结果',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '规则命中结果',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Type' => 
                          array (
                            'description' => '命中规则所关联的规则类型。',
                            'type' => 'string',
                            'example' => '2',
                          ),
                          'ReviewResult' => 
                          array (
                            'description' => '复核准确性；可能值：0（错误）；1（正确）。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'Name' => 
                          array (
                            'description' => '命中的规则名称。',
                            'type' => 'string',
                            'example' => '测试规则',
                          ),
                          'Rid' => 
                          array (
                            'description' => '命中的规则ID。',
                            'type' => 'string',
                            'example' => '1211',
                          ),
                          'Hits' => 
                          array (
                            'description' => '具体命中位置信息，以句子维度，返回命中句子中具体命中了规则中哪个条件，是哪几个字命中的',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '规则命中结果',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'KeyWords' => 
                                array (
                                  'description' => '返回当前句中是哪几个字命中了规则，也就是需要高亮展示的关键字',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '命中的位置列表。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'From' => 
                                      array (
                                        'description' => '需要高亮展示的关键字从第几个字符开始，取值范围从0开始，最大值为当句话字符总数减1。高亮的字包含from。

',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                      ),
                                      'To' => 
                                      array (
                                        'description' => '需要高亮展示的关键字到第几个字符结束，最大值为当句话字符总数减1。高亮的字不包含to，例如一句话为“不可能给你退货的”，from=0，to=3，那么需要高亮的关键字就是“不可能”三个字。

',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '5',
                                      ),
                                      'Val' => 
                                      array (
                                        'description' => '具体的关键字内容。

',
                                        'type' => 'string',
                                        'example' => '投诉',
                                      ),
                                      'Cid' => 
                                      array (
                                        'description' => '命中的条件ID。',
                                        'type' => 'string',
                                        'example' => '66666',
                                      ),
                                    ),
                                  ),
                                ),
                                'Cid' => 
                                array (
                                  'description' => '命中的条件ID列表。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '命中的条件ID列表。',
                                    'type' => 'string',
                                    'example' => '["1","3"]',
                                  ),
                                ),
                                'Phrase' => 
                                array (
                                  'description' => '当前命中规则的句子详情',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'Words' => 
                                    array (
                                      'description' => '这个角色说的一句话。',
                                      'type' => 'string',
                                      'example' => '我要投诉',
                                    ),
                                    'Begin' => 
                                    array (
                                      'description' => '本句话的开始时间，是相对起始点的开始时间偏移，单位ms。',
                                      'type' => 'integer',
                                      'format' => 'int64',
                                      'example' => '440',
                                    ),
                                    'EmotionValue' => 
                                    array (
                                      'description' => '情绪能量值1-10，值越高情绪越强烈。',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '6',
                                    ),
                                    'End' => 
                                    array (
                                      'description' => '本句话的结束时间，是相对起始点的结束时间偏移，单位ms。',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '4000',
                                    ),
                                    'SpeechRate' => 
                                    array (
                                      'description' => '当句话的语速',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '234',
                                    ),
                                    'Role' => 
                                    array (
                                      'description' => '对话内容角色，可能值：客服、客户、系统。',
                                      'type' => 'string',
                                      'example' => '客服',
                                    ),
                                    'SilenceDuration' => 
                                    array (
                                      'description' => '内部字段，请忽略。',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '1',
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'Recording' => 
                    array (
                      'description' => '录音文件信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Callee' => 
                        array (
                          'description' => '被叫号码。',
                          'type' => 'string',
                          'example' => '1888888***',
                        ),
                        'Remark3' => 
                        array (
                          'description' => '自定义数据3。',
                          'type' => 'string',
                          'example' => 'xxx',
                        ),
                        'Business' => 
                        array (
                          'description' => '业务线名称。

',
                          'type' => 'string',
                          'example' => '客服部',
                        ),
                        'Url' => 
                        array (
                          'description' => '录音文件地址，用于录音播放。

',
                          'type' => 'string',
                          'example' => 'http://aliyun.com/xxx.wav	',
                        ),
                        'PrimaryId' => 
                        array (
                          'description' => '内部字段，请忽略',
                          'type' => 'string',
                          'example' => 'xxxx',
                        ),
                        'Remark1' => 
                        array (
                          'description' => '自定义数据1。',
                          'type' => 'string',
                          'example' => 'xxx',
                        ),
                        'Remark2' => 
                        array (
                          'description' => '自定义数据2。',
                          'type' => 'string',
                          'example' => 'xxx',
                        ),
                        'CallType' => 
                        array (
                          'description' => '呼叫类型： 
- 1：呼出
- 3：呼入',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Caller' => 
                        array (
                          'description' => '主叫号码',
                          'type' => 'string',
                          'example' => '0108888****	',
                        ),
                        'CallId' => 
                        array (
                          'description' => '通话ID。',
                          'type' => 'string',
                          'example' => 'xxx',
                        ),
                        'DataSetName' => 
                        array (
                          'description' => '内部字段，请忽略。',
                          'type' => 'string',
                          'example' => 'xxx',
                        ),
                        'Duration' => 
                        array (
                          'description' => '对话总字数

',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '232',
                        ),
                        'DurationAudio' => 
                        array (
                          'description' => '通话时长。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '120',
                        ),
                        'Name' => 
                        array (
                          'description' => '录音文件名称。

',
                          'type' => 'string',
                          'example' => '123123.wav',
                        ),
                        'Id' => 
                        array (
                          'description' => '文件ID，即请求参数中的callId，若未指定则会随机生成一个。

',
                          'type' => 'string',
                          'example' => 'xxxx',
                        ),
                        'CallTime' => 
                        array (
                          'description' => '录音生成时间戳，精确到毫秒。

',
                          'type' => 'string',
                          'example' => '1563967699000',
                        ),
                      ),
                    ),
                    'Agent' => 
                    array (
                      'description' => '客服信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'description' => '客服姓名',
                          'type' => 'string',
                          'example' => '李四',
                        ),
                        'SkillGroup' => 
                        array (
                          'description' => '技能组名称',
                          'type' => 'string',
                          'example' => '客服组',
                        ),
                        'Id' => 
                        array (
                          'description' => '客服ID。',
                          'type' => 'string',
                          'example' => '12221',
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
        'substitutions' => 
        array (
          0 => 'Qualitycheck::2019-01-15::GetResult',
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"76DB5D8C-5BD9-42A7-B527-5AF3A5F****\\",\\n  \\"Success\\": true,\\n  \\"ResultCountId\\": \\"xxx\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"Count\\": 1,\\n  \\"Data\\": [\\n    {\\n      \\"Status\\": 1,\\n      \\"ErrorMessage\\": \\"xxxx\\",\\n      \\"Reviewer\\": \\"张三\\",\\n      \\"CreateTime\\": \\"2019-07-24T19:31Z\\\\t\\",\\n      \\"ReviewStatus\\": 1,\\n      \\"TaskName\\": \\"xxx\\",\\n      \\"Comments\\": \\"xxx\\",\\n      \\"ReviewResult\\": 3,\\n      \\"Score\\": 100,\\n      \\"TaskId\\": \\"20201231de3d34ec-40fa-4a55-8d27-76ea*****\\",\\n      \\"Resolver\\": \\"张三\\",\\n      \\"AsrResult\\": [\\n        {\\n          \\"Words\\": \\"您好，很高兴为您服务\\",\\n          \\"Begin\\": 340,\\n          \\"EmotionValue\\": 6,\\n          \\"End\\": 3000,\\n          \\"SpeechRate\\": 221,\\n          \\"Role\\": \\"客服\\",\\n          \\"SilenceDuration\\": 11\\n        }\\n      ],\\n      \\"HitResult\\": [\\n        {\\n          \\"Type\\": \\"2\\",\\n          \\"ReviewResult\\": 1,\\n          \\"Name\\": \\"测试规则\\",\\n          \\"Rid\\": \\"1211\\",\\n          \\"Hits\\": [\\n            {\\n              \\"KeyWords\\": [\\n                {\\n                  \\"From\\": 2,\\n                  \\"To\\": 5,\\n                  \\"Val\\": \\"投诉\\",\\n                  \\"Cid\\": \\"66666\\"\\n                }\\n              ],\\n              \\"Cid\\": [\\n                \\"[\\\\\\"1\\\\\\",\\\\\\"3\\\\\\"]\\"\\n              ],\\n              \\"Phrase\\": {\\n                \\"Words\\": \\"我要投诉\\",\\n                \\"Begin\\": 440,\\n                \\"EmotionValue\\": 6,\\n                \\"End\\": 4000,\\n                \\"SpeechRate\\": 234,\\n                \\"Role\\": \\"客服\\",\\n                \\"SilenceDuration\\": 1\\n              }\\n            }\\n          ]\\n        }\\n      ],\\n      \\"Recording\\": {\\n        \\"Callee\\": \\"1888888***\\",\\n        \\"Remark3\\": \\"xxx\\",\\n        \\"Business\\": \\"客服部\\",\\n        \\"Url\\": \\"http://aliyun.com/xxx.wav\\\\t\\",\\n        \\"PrimaryId\\": \\"xxxx\\",\\n        \\"Remark1\\": \\"xxx\\",\\n        \\"Remark2\\": \\"xxx\\",\\n        \\"CallType\\": 1,\\n        \\"Caller\\": \\"0108888****\\\\t\\",\\n        \\"CallId\\": \\"xxx\\",\\n        \\"DataSetName\\": \\"xxx\\",\\n        \\"Duration\\": 232,\\n        \\"DurationAudio\\": 120,\\n        \\"Name\\": \\"123123.wav\\",\\n        \\"Id\\": \\"xxxx\\",\\n        \\"CallTime\\": \\"1563967699000\\"\\n      },\\n      \\"Agent\\": {\\n        \\"Name\\": \\"李四\\",\\n        \\"SkillGroup\\": \\"客服组\\",\\n        \\"Id\\": \\"12221\\"\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>0F103D9A-2473-4E9D-B951-4E***</RequestId>\\n<Message>successful</Message>\\n<PageSize>1</PageSize>\\n<PageNumber>1</PageNumber>\\n<Data>\\n    <Status>1</Status>\\n    <HitResult>\\n        <Type>服务规范</Type>\\n        <Hits>\\n            <Phrase>\\n                <Role>客服</Role>\\n                <Words>您好，孙老师之彩云彩云，很高兴为您服务。请问有什么可以帮您。</Words>\\n                <Begin>410</Begin>\\n                <End>3930</End>\\n                <EmotionValue>7</EmotionValue>\\n            </Phrase>\\n            <KeyWords>\\n                <Val>孙老师</Val>\\n                <From>3</From>\\n                <To>6</To>\\n                <Cid>11134</Cid>\\n            </KeyWords>\\n            <Cid>11134</Cid>\\n        </Hits>\\n        <Rid>2944</Rid>\\n        <Name>实时质检2</Name>\\n    </HitResult>\\n    <Agent>\\n        <SkillGroup>0819-1</SkillGroup>\\n        <Id>291504891705943763</Id>\\n        <Name>sca_agent</Name>\\n    </Agent>\\n    <Score>90</Score>\\n    <TaskId>20201126d2e5ed3b-18ec-4dc4-874****</TaskId>\\n    <ReviewStatus>0</ReviewStatus>\\n    <CreateTime>2020-11-26T21:56Z</CreateTime>\\n    <ReviewResult>3</ReviewResult>\\n    <Recording>\\n        <Callee>132434231</Callee>\\n        <CallId>54512313231</CallId>\\n        <CallType>1</CallType>\\n        <Duration>23</Duration>\\n        <Url>https://sca-bucket-inner.oss-cn-beijing.aliyuncs.com/aller/xxxx.wav</Url>\\n        <Name>20201126-aller-08.wav</Name>\\n        <Remark2>remark2-7</Remark2>\\n        <Caller>412341234</Caller>\\n        <Remark3>remark3-7</Remark3>\\n        <Remark1>remark1-7</Remark1>\\n        <Id>20201126-aller-08</Id>\\n        <CallTime>1606398968000</CallTime>\\n        <PrimaryId>20201126be772f4ec27945d9bb31d6f****</PrimaryId>\\n        <Business>aller测试业务7</Business>\\n    </Recording>\\n    <AsrResult>\\n        <Role>客服</Role>\\n        <Words>您好，孙老师之彩云彩云，很高兴为您服务。请问有什么可以帮您。</Words>\\n        <Begin>410</Begin>\\n        <End>3930</End>\\n        <SpeechRate>443</SpeechRate>\\n        <EmotionValue>7</EmotionValue>\\n    </AsrResult>\\n</Data>\\n<Count>1</Count>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '获取实时质检结果',
      'summary' => '获取热线实时质检结果。',
      'requestParamsDescription' => '**请求参数JSON字符串信息**
| 属性                | 值类型  | 是否必须 | 说明                                                         |
| :------------------ | :------ | :------- | :----------------------------------------------------------- |
| isSchemeData    | Integer | 否       | 是否查询新版智能对话分析中的数据，取值：0否；1是，默认值为0。   |
| taskId              | String  | 否       | 使用**上传质检数据后返回的任务ID**来查询，一般来说，要么根据taskId或者tid查询，要么根据时间范围进行查询，所以taskId、tid、startTime/endTime、二者必选其一。 |
| tid                 | String  | 否       | 对话唯一标识，比如一个录音的唯一标识，一般来说，要么根据tid查询，要么根据时间范围进行查询，所以taskId与tid与startTime/endTime三者必选其一 |
| startTime           | String  | 否       | 按任务上传时间（API调用时间）区间查询，区间的**开始时间**，格式\'yyyy-MM-dd HH:mm:ss\'。 |
| endTime             | String  | 否       | 按任务上传时间（API调用时间）区间查询，区间的**结束时间**，格式\'yyyy-MM-dd HH:mm:ss\'。 |
| pageSize            | Integer | 否       | 每页返回的数据数，要求大于0，小于100，默认10。               |
| pageNumber          | Integer | 否       | 要求返回的第几页的数据，默认1。  |
| countTotal          | Boolean | 否       | 是否返回分页数据中的总条数，默认true，数据量较大时，不返回总条数会提升接口返回结果的速度。 |
| requiredFields      | String  | 否       | 返回结果需要包括哪些字段，多个字段用逗号分隔，请按需选择；可选字段：taskId（任务ID），score（得分），status（状态），recording（文件信息），recording.dataSet（数据集名称），asrResult（转写结果），hitResult（质检结果），comments（复核意见），agent（坐席信息）；默认值：score,status,taskId,hitResult,reviewHistory |
| excludeFields       | String  | 否       | 返回结果中不需要包括哪些字段，通常是子字段,多个字段用逗号分隔，取值举例：hitResult.hits。 |
| ruleIds             | List    | 否       | 命中的规则ID列表，筛选出命中指定规则的数据。                 |
| customerServiceName | String  | 否       | 客服姓名。                                                   |
| customerServiceId   | String  | 否       | 客服ID。                                                     |
| caller              | String  | 否       | 主叫号码。                                                   |
| callee              | String  | 否       | 被叫号码。                                                   |
| callId              | String  | 否       | 通话ID。                                                     |
| skillGroupName      | String  | 否       | 技能组名称。                                                 |
| hitStatus           | Integer | 否       | 命中状态，取值：0（无规则命中）；1（有规则命中）。           |
| reviewStatus        | Integer | 否       | 复核状态，取值：0（未复核）；1（已复核）。                   |
| assignStatus        | Integer | 否       | 文件分配状态，0：未分配；1：已分配                           |
| scoreType           | Integer | 否       | 根据质检得分筛选时的筛选类型，**必须与totalScore一起使用，**取值：1（返回质检得分等于totalScore的数据）；2（返回质检得分小于totalScore的数据）；3（返回质检得分大于totalScore的数据）。 |
| reviewer            | Long    | 否       | 质检员id，只返回分配给该质检员的文件。                       |
| totalScore          | Integer | 否       | 质检得分分值，根据质检得分筛选，**必须与scoreType一起使用**。 |
| durationType        | Integer | 否       | 根据录音时长筛选时的筛选类型，**必须与duration一起使用，**取值：1（返回录音时长等于duration的数据）；2（返回录音时长小于duration的数据）；3（返回录音时长大于duration的数据）。 |
| duration            | Integer | 否       | 录音时长，根据录音时长筛选，**必须与durationType一起使用**，单位：秒。 |
| fileName            | String  | 否       | 文件名称，需要提供完整的文件名称，不支持模糊搜索。           |
| remark1             | String  | 否       | 自定义数据1，调用**SyncQualityCheck.json**接口上传质检数据时所提供。 |
| remark2             | String  | 否       | 自定义数据2，调用**SyncQualityCheck.json**接口上传质检数据时所提供。 |
| remark3             | String  | 否       | 自定义数据3，调用**SyncQualityCheck.json**接口上传质检数据时所提供。 |
| sortField           | String  | 否       | 按指定参数进行排序，目前仅质检得分和自定义数据1/2/3 支持排序，所以可输入的值为：score/remark1/remark2/remark3。 |
| sortType            | String  | 否       | 排序规则，取值：desc（降序）；asc（升序）。                  |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SyncQualityCheck' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"tid":"20200823-234234","dialogue":"{}"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果状态码，200表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一标识。',
                'type' => 'string',
                'example' => '66E1ACB8-17B2-4BE8-8581-954A8*****',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回结果，包含命中信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Score' => 
                  array (
                    'description' => '最终得分，满分100。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'TaskId' => 
                  array (
                    'description' => '任务ID。',
                    'type' => 'string',
                    'example' => '66E1ACB866E1ACB8',
                  ),
                  'Tid' => 
                  array (
                    'description' => '当前对话唯一标识。',
                    'type' => 'string',
                    'example' => '20200876-66E1ACB8',
                  ),
                  'BeginTime' => 
                  array (
                    'description' => '录音&对话发生的时间，格林威治时间1970年01月01日00时00分00秒到现在的毫秒数（即毫秒时间戳，例如：1584535485856）。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1584535485856',
                  ),
                  'Rules' => 
                  array (
                    'description' => '命中的规则列表，每一条为一个规则，只返回命中的规则信息和命中规则位置信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RuleName' => 
                        array (
                          'description' => '命中的规则的名称。',
                          'type' => 'string',
                          'example' => '禁用语',
                        ),
                        'Rid' => 
                        array (
                          'description' => '命中的规则ID。',
                          'type' => 'string',
                          'example' => '232232',
                        ),
                        'Hit' => 
                        array (
                          'description' => '命中的句子列表，针对此接口，如果命中，为一条数据。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'HitKeyWords' => 
                              array (
                                'description' => '条件命中的关键词。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'To' => 
                                    array (
                                      'description' => '关键字的结束位置。',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '4',
                                    ),
                                    'From' => 
                                    array (
                                      'description' => '关键字的起始位置。',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '1',
                                    ),
                                    'Val' => 
                                    array (
                                      'description' => '关键字。',
                                      'type' => 'string',
                                      'example' => '你好',
                                    ),
                                    'Cid' => 
                                    array (
                                      'description' => '规则的条件ID。',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '2312',
                                    ),
                                    'Pid' => 
                                    array (
                                      'description' => '命中句子在全部对话中的下标值。',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '4',
                                    ),
                                  ),
                                ),
                              ),
                              'Phrase' => 
                              array (
                                'description' => '条件命中的对话内容。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Words' => 
                                  array (
                                    'description' => '对话内容。',
                                    'type' => 'string',
                                    'example' => '你好请问有什么可以帮您的',
                                  ),
                                  'Identity' => 
                                  array (
                                    'description' => '废弃字段，请忽略。',
                                    'type' => 'string',
                                    'example' => 'xxx',
                                  ),
                                  'Begin' => 
                                  array (
                                    'description' => '本句相对于整个对话的开始时间，单位：毫秒。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '1230',
                                  ),
                                  'EmotionValue' => 
                                  array (
                                    'description' => '本句的情绪值，0-10，值越大情绪越高。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '6',
                                  ),
                                  'End' => 
                                  array (
                                    'description' => '本句相对于整个对话的结束时间，单位：毫秒。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '3440',
                                  ),
                                  'SpeechRate' => 
                                  array (
                                    'description' => '本句语速，单位：字/分钟。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '233',
                                  ),
                                  'Role' => 
                                  array (
                                    'description' => '本句的角色，取值：客服、客户。',
                                    'type' => 'string',
                                    'example' => '客服',
                                  ),
                                  'SilenceDuration' => 
                                  array (
                                    'description' => '废弃字段，请忽略。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '123',
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
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"66E1ACB8-17B2-4BE8-8581-954A8*****\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Score\\": 100,\\n    \\"TaskId\\": \\"66E1ACB866E1ACB8\\",\\n    \\"Tid\\": \\"20200876-66E1ACB8\\",\\n    \\"BeginTime\\": 1584535485856,\\n    \\"Rules\\": [\\n      {\\n        \\"RuleName\\": \\"禁用语\\",\\n        \\"Rid\\": \\"232232\\",\\n        \\"Hit\\": [\\n          {\\n            \\"HitKeyWords\\": [\\n              {\\n                \\"To\\": 4,\\n                \\"From\\": 1,\\n                \\"Val\\": \\"你好\\",\\n                \\"Cid\\": 2312,\\n                \\"Pid\\": 4\\n              }\\n            ],\\n            \\"Phrase\\": {\\n              \\"Words\\": \\"你好请问有什么可以帮您的\\",\\n              \\"Identity\\": \\"xxx\\",\\n              \\"Begin\\": 1230,\\n              \\"EmotionValue\\": 6,\\n              \\"End\\": 3440,\\n              \\"SpeechRate\\": 233,\\n              \\"Role\\": \\"客服\\",\\n              \\"SilenceDuration\\": 123\\n            }\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SyncQualityCheckResponse>\\n    <requestId>A0F9FF42-7905-4DC5-9B7E-00711C89AC90</requestId>\\n    <message>successful</message>\\n    <data>\\n        <taskId>20200706A0F9FF42-7905-4DC5-9B7E-00711C89AC90</taskId>\\n        <rules>\\n            <hit>\\n                <hitKeyWords>\\n                    <val>骚扰</val>\\n                    <pid>0</pid>\\n                    <from>11</from>\\n                    <to>13</to>\\n                    <cid>35630</cid>\\n                </hitKeyWords>\\n                <phrase>\\n                    <role>客户</role>\\n                    <words>嗯，你稍等一下。他总是骚扰我</words>\\n                    <begin>23910</begin>\\n                    <end>25780</end>\\n                    <identity>某客户</identity>\\n                    <emotionValue>6</emotionValue>\\n                </phrase>\\n            </hit>\\n            <rid>21552</rid>\\n        </rules>\\n        <tid>20200706-1</tid>\\n    </data>\\n    <code>200</code>\\n    <success>true</success>\\n</SyncQualityCheckResponse>\\n","errorExample":""}]',
      'title' => '进行实时质检',
      'summary' => '进行热线实时质检。',
      'description' => '热线实时质检是在通话过程中，实时的将对话语音转写为对话文本，把文本传入到智能对话分析系统中进行实时质检，从而实时监测可能出现的潜在问题或风险，您可以实时的将对话文本及质检结果展示在客服人员工作台中（第三方系统）。区别于离线质检（调用UploadAudioData进行的质检或数据集质检，详见开发指南），离线质检均是在通话结束并且录音文件生成后进行的质检分析。

**使用流程**

需自行实现通话过程中将语音流实时转写为文本，或直接使用阿里云-云呼叫中心，云呼叫中心与智能对话分析进行了深度集成，可在通话过程中直接进行实时质检，无需进行API对接。

若自行实现语音流转文本，在通话过程中，当一个角色说完一句话产生对话文本后，就需要调用该API：SyncQualityCheck进行实时质检，会同步返回该句话的质检结果。

上传数据时可以携带技能组信息，然后通过**呼叫中心质检-配置管理**功能来配置不同技能组的通话使用不同的质检规则。

通话结束后，您可以将录音文件存储在公网可访问的存储服务器中，调用录音信息维护API：UpdateSyncQualityCheckData，将录音名称、录音文件URL等信息提交到智能对话分析服务，这样质检员在复核时就可以播放录音了。

通话结束后在**呼叫中心质检-结果展示-实时质检结果**中看到质检的结果，您也可以调用实时质检结果查询API:GetSyncResult获取质检结果。通过**评分大盘-实时大盘**，可查看客服、技能组、评分项的数据图表。

**全文质检**

质检规则中有十几种算子，有些算子分析时需要对话上下文（客服与客户的多轮对话），但实时质检是在通话过程中的质检，通常只有一个角色说的一句话的文本，部分算子不适用于实时质检，所以质检规则分为实时质检规则和全文质检规则：

**实时质检规则**：进行实时质检时使用的规则，支持的算子类型有限，不支持指定算子的检测范围。

**全文质检规则**：进行离线质检时使用的规则，支持全量算子类型，支持自定义指定算子的检测范围。

进行了实时质检的通话，在通话结束后，此时已经有了完整的对话文本，此时可以对完整对话文本使用全文质检规则再次进行质检分析。如何启用实时质检后的全文质检功能？请查看呼叫中心质检-配置管理中关于全文质检的说明。',
      'requestParamsDescription' => '**jsonStr属性说明:**

| 属性 | 值类型 | 是否必须 | 说明 |
| :--- | :--- | :--- | :--- |
| isSchemeData    | Integer | 否       | 是否将数据上传至新版智能对话分析，取值：0（否）；1（是），默认值为0。   |
| uuid | String | 否 | 当前句子唯一标识，幂等用，重复请求会排重，排重有效期24小时 |
| tid | String | 是 | 当前对话唯一标识（务必确保唯一性），可以理解为自有业务系统中的通话ID，后台会根据此标识，合并为一个完整的对话，长度至少8位，并且前8位是通话的发生时间（年月日），例如录音发生时间是2020年7月5日，那么前缀即为20200705，建议在前缀后再拼接上自有业务系统中的通话ID，例如：20200705-234890134。前缀时间必须在API调用时间的前一个月、后一小时范围内。 |
| dialogue | Dialogue | 是 | 业务方的待检文本对话部分内容，一般是一句话，也可以是多句，具体内容参见下方的**jsonStr.dialogue属性说明。** |
| dialogueStatus | Integer | 否 | 会话开始结束标识，1：开始，2：对话中。 |
| beginTime | Long | 否 | 录音&对话的开始时间，格林威治时间1970年01月01日00时00分00秒到现在的毫秒数（即毫秒时间戳，例如：1584535485856），如果每次调用都传入，以第一次调用为准，若不指定，则会取当前时间。 |
| customerServiceId | Long | 否 | 客服ID。可从控制台-基础设置-人员管理页面获取，正确填入客服ID，客服登录控制台页面时可以查看与自己关联的录音文件。 |
| customerServiceName | String | 否 | 客服姓名。 |
| skillGroupId | Long | 否 | 技能组ID。 |
| skillGroupName | String | 否 | 技能组名称。 |
| callType | Integer | 否 | 呼叫类型，可取值：1（呼出）（默认）；3（呼入）；4（其他） |
| callee | String | 否 | 被叫号码，呼出时指的是客户号码，呼入时指的是客服号码。 |
| caller | String | 否 | 主叫号码，呼出时指的是客服号码，呼入时指的是客户号码。 |
| callId | String | 否 | 通话ID，可以是呼叫中心系统中的通话ID，或者其他可以标识通话的ID，存在转接时，坐席1~n，callid是相同的，tid不同。 |
| business | String | 否 | 业务线名称，属于自定义数据，用于分类统计。 |
| remark1 | String | 否 | 自定义数据1，可以存放与您业务相关的自定义字段，最大长度为32字符。 |
| remark2 | String | 否 | 自定义数据2，可以存放与您业务相关的自定义字段，最大长度为32字符。 |
| remark3 | String | 否 | 自定义数据3，可以存放与您业务相关的自定义字段，最大长度为32字符。 |


**jsonStr.dialogue 属性说明:**

| 属性 | 值类型 | 是否必须 | 说明 |
| :--- | :--- | :--- | :--- |
| role | String | 是 | 对话内容角色，取值：客服、客户、系统 |
| identity | String | 否 | 对话角色的具体身份标识，比如客服ID，客户ID等 |
| words | String | 是 | 这个角色说的一句话。仅支持UTF-8编码，例如Emoji表情并不是UTF-8编码，文本内容中请勿包含Emoji表情。 |
| begin | Integer | 是 | 相对起始点的开始时间偏移，单位ms |
| end | Integer | 是 | 相对起始点的结束时间偏移，单位ms |
| emotionValue | Integer | 否 | 情绪能量值1-10，值越高情绪越强烈 |
| speechRate | Integer | 否 | 本句的平均语速，单位为每分钟字数 |
| silenceDuration | Integer | 否 | 本句与上一句之间的静音时长，单位为秒 |',
      'responseParamsDescription' => '**对话上下文句子说明**：一些复杂场景下，某个角色的一句话无法分析出是否存在违规，往往还需要之前的一些句子做上下文信息来做质检分析。目前上下文句子数量最大值默认为30句。打个比方，比如一通通话，当前已经说到了第40句，在第40句上传后，我们会向前再取29句，加上当前最新的第40句，一共30句来做质检分析。所以极端情况下，某些句子会进行30次质检分析，我们在返回质检结果时，会自动去重，也就是一个句子若多次命中同一个规则中的同一个条件，则只有在第一次命中时会返回该句的命中结果。',
      'extraInfo' => ' ',
    ),
    'UpdateSyncQualityCheckData' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'jsonStr是一个JSON字符串，里面是该接口所有的自定义参数，具体内容参见下方的**jsonStr属性说明**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"tid":"xxx"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，200表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。

',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，请求唯一标识。',
                'type' => 'string',
                'example' => '76DB5D8C-5BD9-42A7-B527-5AF3A5F8***	',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。

',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '完整返回内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'TaskId' => 
                  array (
                    'description' => '任务ID。',
                    'type' => 'string',
                    'example' => '123123D8C-5BD9-42A7-B527-1235F8**',
                  ),
                  'Tid' => 
                  array (
                    'description' => '通话唯一标识。',
                    'type' => 'string',
                    'example' => '20210101-1212121***',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"76DB5D8C-5BD9-42A7-B527-5AF3A5F8***\\\\t\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"TaskId\\": \\"123123D8C-5BD9-42A7-B527-1235F8**\\",\\n    \\"Tid\\": \\"20210101-1212121***\\"\\n  }\\n}","type":"json"}]',
      'title' => '维护录音信息',
      'summary' => '来维护实时质检完成后的录音信息，用来复核时播放录音，并且维护录音信息后，任务状态将变为已完成。',
      'requestParamsDescription' => '**jsonStr属性说明:**
| 属性 | 值类型 | 是否必须 | 说明 |
| :--- | :--- | :--- | :--- |
| isSchemeData    | Integer | 否       | 实时质检数据是新版智能对话分析还是旧版智能对话分析，取值：0旧版；1新版，默认值为0。   |
| tid | String | 是 | 当前对话唯一标识，为对话唯一标识，后台会根据此标识，合并为一个完整的对话。 |
| voiceFileUrl | String | 是 | 录音文件地址，用于复核时录音回放，URL必须是基于HTTP可访问的URL地址，不支持提交本地文件；URL只能使用域名，不能使用IP地址，URL中不可包含空格，请尽量避免使用中文；录音文件访问权限需要为公开，并且保证长期有效，否则在查看文件详情/文件复核时无法播放录音。 |
| fileName | String | 是 | 录音文件名称。 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteSchemeTaskConfig' => 
    array (
      'summary' => '对应前端功能位置：暂无。专有云URL：ip:port/api/task/DeleteSchemeTaskConfig.json。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'jsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入参JSON，具体参考请求参数补充说明。',
            'type' => 'string',
            'required' => false,
            'example' => '{"schemeId":"329"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'BaseResult',
            'description' => 'BaseResult',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '82C91484-B2D5-4D2A-A21F-A6D73F4D55C6',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。
',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Message' => 
                  array (
                    'description' => '消息的列表，忽略。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '消息，忽略。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP请求返回的响应状态码，200表示请求成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"82C91484-B2D5-4D2A-A21F-A6D73F4D55C6\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": {\\n    \\"Message\\": [\\n      \\"无\\"\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '删除质检任务',
      'requestParamsDescription' => '### JsonStr说明
| 属性 | 值类型 | 是否必须 | 描述 |
| --- | --- | --- | --- |
| schemeId | Long | 是 | 质检方案ID |',
    ),
    'DeleteRule' => 
    array (
      'summary' => '对应前端功能位置：质检规则配置-删除。专有云URL：ip:port/api/client/DeleteRule.json。',
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RuleId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'ForceDelete',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当规则有关联质检任务时，还是否删除。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'IsSchemeData',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否为新版质检，0：旧版质检；1：新版直接。默认为1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'enumValueTitles' => 
            array (
              0 => '旧版质检',
              1 => '新版质检',
            ),
            'example' => '1',
            'default' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'BaseResult',
            'description' => 'BaseResult',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '106C6CA0-282D-4AF7-85F0-D2D24***',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：**true**表示成功；**false/null**表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。
',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Message' => 
                  array (
                    'description' => '出错时表示出错详情，当输出多条信息时使用。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'Qualitycheck::2019-01-15::DeleteRuleV4',
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"106C6CA0-282D-4AF7-85F0-D2D24***\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": {\\n    \\"Message\\": [\\n      \\"\\"\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '删除质检规则',
    ),
    'GetRuleById' => 
    array (
      'summary' => '对应前端功能位置：质检规则配置-编辑
对应私有云URL：ip:port/api/client/GetRuleById.json。',
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RuleId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '53',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'PlainResult<RulesInfo>',
            'description' => 'PlainResult<RulesInfo>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回结果，见返回参数补充说明。',
                'example' => '无',
                '$ref' => '#/components/schemas/RulesInfo',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3CEA0495-341B-4482-9AD9-8191EF4***	',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'description' => '出错时表示出错详情，当输出多条信息时使用。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '出错时表示出错详情，当输出多条信息时使用。',
                  'type' => 'string',
                  'example' => '无',
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'Http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'Qualitycheck::2019-01-15::GetRuleV4',
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Conditions\\": [\\n      {\\n        \\"Cid\\": \\"\\",\\n        \\"Id\\": 0,\\n        \\"Rid\\": \\"\\",\\n        \\"Check_range\\": {\\n          \\"RoleId\\": 0,\\n          \\"Role\\": \\"\\",\\n          \\"Anchor\\": {\\n            \\"Cid\\": \\"\\",\\n            \\"Location\\": \\"\\",\\n            \\"Hit_time\\": 0\\n          },\\n          \\"Range\\": {\\n            \\"From\\": 0,\\n            \\"To\\": 0\\n          },\\n          \\"Absolute\\": true,\\n          \\"AllSentencesSatisfy\\": true\\n        },\\n        \\"Operators\\": [\\n          {\\n            \\"Oid\\": \\"\\",\\n            \\"Id\\": 0,\\n            \\"Type\\": \\"\\",\\n            \\"Param\\": {\\n              \\"CustomerParam\\": {\\n                \\"Field\\": \\"\\",\\n                \\"FieldType\\": 0,\\n                \\"DataType\\": 0,\\n                \\"Symbol\\": 0,\\n                \\"Value\\": \\"\\",\\n                \\"ActualValue\\": \\"\\"\\n              },\\n              \\"Keywords\\": [\\n                \\"\\"\\n              ],\\n              \\"Regex\\": \\"\\",\\n              \\"NotRegex\\": \\"\\",\\n              \\"Phrase\\": \\"\\",\\n              \\"References\\": [\\n                \\"\\"\\n              ],\\n              \\"Interval\\": 0,\\n              \\"IntervalEnd\\": 0,\\n              \\"Threshold\\": 0,\\n              \\"In_sentence\\": true,\\n              \\"Target\\": 0,\\n              \\"From_end\\": true,\\n              \\"Different_role\\": true,\\n              \\"Target_role\\": \\"\\",\\n              \\"RoleId\\": 0,\\n              \\"Velocity\\": 0,\\n              \\"VelocityInMint\\": 0,\\n              \\"KeywordExtension\\": 0,\\n              \\"Synonyms\\": {\\n                \\"key\\": [\\n                  \\"\\"\\n                ]\\n              },\\n              \\"Case_sensitive\\": true,\\n              \\"Near_dialogue\\": true,\\n              \\"MinWordSize\\": 0,\\n              \\"Hit_time\\": 0,\\n              \\"Excludes\\": [\\n                \\"\\"\\n              ],\\n              \\"From\\": 0,\\n              \\"CheckFirstSentence\\": true,\\n              \\"Average\\": true,\\n              \\"BeginType\\": \\"\\",\\n              \\"EndType\\": \\"\\",\\n              \\"CompareOperator\\": \\"\\",\\n              \\"Pkey\\": \\"\\",\\n              \\"Poutput_type\\": 0,\\n              \\"SimilarlySentences\\": [\\n                \\"\\"\\n              ],\\n              \\"LgfSentences\\": [\\n                \\"\\"\\n              ],\\n              \\"Score\\": 0,\\n              \\"ContextChatMatch\\": true,\\n              \\"KeywordMatchSize\\": 0,\\n              \\"MaxEmotionChangeValue\\": 0,\\n              \\"CheckType\\": 0,\\n              \\"KnowledgeTargetId\\": \\"\\",\\n              \\"CategoryPathCode\\": \\"\\",\\n              \\"KnowledgeTargetType\\": 0,\\n              \\"KnowledgeTargetName\\": \\"\\",\\n              \\"QuestionThreshold\\": \\"\\",\\n              \\"AnswerThreshold\\": \\"\\",\\n              \\"KnowledgeSentenceNum\\": 0,\\n              \\"KnowledgeInfo\\": \\"\\",\\n              \\"BotId\\": \\"\\",\\n              \\"UseEasAlgorithm\\": true,\\n              \\"Pvalues\\": [\\n                \\"\\"\\n              ],\\n              \\"Similarity_threshold\\": 0,\\n              \\"AntModelInfo\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"DelayTime\\": 0\\n            },\\n            \\"Name\\": \\"\\",\\n            \\"UserGroup\\": \\"\\",\\n            \\"QualityCheckType\\": 0\\n          }\\n        ],\\n        \\"Lambda\\": \\"\\",\\n        \\"Exclusion\\": 0,\\n        \\"Name\\": \\"\\",\\n        \\"UserGroup\\": \\"\\"\\n      }\\n    ],\\n    \\"Rules\\": [\\n      {\\n        \\"Status\\": 0,\\n        \\"IsDelete\\": 0,\\n        \\"StartTime\\": \\"\\",\\n        \\"EndTime\\": \\"\\",\\n        \\"BusinessCategoryNameList\\": [\\n          \\"\\"\\n        ],\\n        \\"Weight\\": \\"\\",\\n        \\"IsOnline\\": 0,\\n        \\"CreateEmpid\\": \\"\\",\\n        \\"CreateEmpName\\": \\"\\",\\n        \\"CreateTime\\": \\"\\",\\n        \\"LastUpdateTime\\": \\"\\",\\n        \\"LastUpdateEmpid\\": \\"\\",\\n        \\"LastUpdateEmpName\\": \\"\\",\\n        \\"Comments\\": \\"\\",\\n        \\"Deny\\": 0,\\n        \\"ScoreSubId\\": 0,\\n        \\"ScoreName\\": \\"\\",\\n        \\"ScoreSubName\\": \\"\\",\\n        \\"ScoreNum\\": 0,\\n        \\"ScoreType\\": 0,\\n        \\"ScoreDeleted\\": true,\\n        \\"OperationMode\\": 0,\\n        \\"Meet\\": 0,\\n        \\"Dialogues\\": [\\n          {\\n            \\"Id\\": 0,\\n            \\"Content\\": [\\n              {\\n                \\"HourMinSec\\": \\"\\",\\n                \\"Role\\": \\"\\",\\n                \\"Identity\\": \\"\\",\\n                \\"EmotionValue\\": 0,\\n                \\"SpeechRate\\": 0,\\n                \\"Words\\": \\"\\",\\n                \\"End\\": 0,\\n                \\"SilenceDuration\\": 0,\\n                \\"BeginTime\\": 0,\\n                \\"Begin\\": 0\\n              }\\n            ],\\n            \\"Name\\": \\"\\",\\n            \\"UserGroup\\": \\"\\"\\n          }\\n        ],\\n        \\"Effective\\": 0,\\n        \\"FullCycle\\": 0,\\n        \\"EffectiveStartTime\\": \\"\\",\\n        \\"EffectiveEndTime\\": \\"\\",\\n        \\"QualityCheckType\\": 0,\\n        \\"Level\\": 0,\\n        \\"GraphFlow\\": \\"\\",\\n        \\"TaskFlowType\\": 0,\\n        \\"CheckType\\": 0,\\n        \\"SchemeCheckType\\": {\\n          \\"CheckType\\": 0,\\n          \\"CheckName\\": \\"\\",\\n          \\"SourceScore\\": 0,\\n          \\"Score\\": 0,\\n          \\"Enable\\": 0,\\n          \\"SchemeId\\": 0,\\n          \\"SchemeScoreInfoList\\": [\\n            {\\n              \\"Rid\\": 0,\\n              \\"Name\\": \\"\\",\\n              \\"TaskFlowId\\": 0,\\n              \\"TaskFlowName\\": \\"\\",\\n              \\"ScoreType\\": 0,\\n              \\"ScoreNumType\\": 0,\\n              \\"ScoreNum\\": 0,\\n              \\"ScoreRuleHitType\\": 0\\n            }\\n          ],\\n          \\"TaskFlowScoreInfoList\\": [\\n            {\\n              \\"TaskFlowId\\": 0,\\n              \\"TaskFlowName\\": \\"\\",\\n              \\"TaskFlowType\\": 0,\\n              \\"SchemeScoreInfoList\\": [\\n                {\\n                  \\"Rid\\": 0,\\n                  \\"Name\\": \\"\\",\\n                  \\"TaskFlowId\\": 0,\\n                  \\"TaskFlowName\\": \\"\\",\\n                  \\"ScoreType\\": 0,\\n                  \\"ScoreNumType\\": 0,\\n                  \\"ScoreNum\\": 0,\\n                  \\"ScoreRuleHitType\\": 0\\n                }\\n              ]\\n            }\\n          ]\\n        },\\n        \\"TargetType\\": 0,\\n        \\"ConfigType\\": 0,\\n        \\"ScoreNumType\\": 0,\\n        \\"ScoreRuleHitType\\": 0,\\n        \\"SchemeId\\": 0,\\n        \\"SchemeRuleMappingId\\": 0,\\n        \\"SchemeName\\": \\"\\",\\n        \\"ModifyType\\": 0,\\n        \\"SortIndex\\": 0,\\n        \\"RuleType\\": 0,\\n        \\"Rid\\": \\"\\",\\n        \\"Name\\": \\"\\",\\n        \\"TaskFlowId\\": 0,\\n        \\"Lambda\\": \\"\\",\\n        \\"Triggers\\": [\\n          \\"\\"\\n        ],\\n        \\"ExternalProperty\\": 0,\\n        \\"Type\\": 0,\\n        \\"RuleCategoryName\\": \\"\\",\\n        \\"AutoReview\\": 0,\\n        \\"RuleScoreType\\": 0,\\n        \\"ScoreId\\": 0\\n      }\\n    ],\\n    \\"Dialogues\\": [\\n      {\\n        \\"Id\\": 0,\\n        \\"Content\\": [\\n          {\\n            \\"HourMinSec\\": \\"\\",\\n            \\"Role\\": \\"\\",\\n            \\"Identity\\": \\"\\",\\n            \\"EmotionValue\\": 0,\\n            \\"SpeechRate\\": 0,\\n            \\"Words\\": \\"\\",\\n            \\"End\\": 0,\\n            \\"SilenceDuration\\": 0,\\n            \\"BeginTime\\": 0,\\n            \\"Begin\\": 0\\n          }\\n        ],\\n        \\"Name\\": \\"\\",\\n        \\"UserGroup\\": \\"\\"\\n      }\\n    ],\\n    \\"Count\\": 0,\\n    \\"PageSize\\": 0,\\n    \\"PageNumber\\": 0\\n  },\\n  \\"RequestId\\": \\"3CEA0495-341B-4482-9AD9-8191EF4***\\\\t\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": [\\n    \\"无\\"\\n  ],\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '根据ID获取规则详情',
      'responseParamsDescription' => 'Data对应规则的Json，具体参考文档《[`规则对象说明`](https://help.aliyun.com/document_detail/453053.html)》',
    ),
    'GetRulesCountList' => 
    array (
      'summary' => '对应前端功能位置：质检规则配置-列表。专有云URL：ip:port/api/rule/GetRulesCountList.json。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Rid',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '按规则ID搜索。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleIdOrRuleName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '按规则ID或者规则名称搜索',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        2 => 
        array (
          'name' => 'BusinessName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则所属业务名称',
            'type' => 'string',
            'required' => false,
            'example' => '电话业务',
          ),
        ),
        3 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则所属的规则类型的type值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'TypeName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则所属的规则类型的名称。',
            'type' => 'string',
            'required' => false,
            'example' => '全部类别',
          ),
        ),
        5 => 
        array (
          'name' => 'BusinessRange',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '大的业务分类',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'CreateEmpid',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则创建者ID，同CreateUserId。二选一即可。',
            'type' => 'string',
            'required' => false,
            'example' => '63',
          ),
        ),
        7 => 
        array (
          'name' => 'CreateUserId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则创建者ID，同CreateEmpid。二选一即可。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '63',
          ),
        ),
        8 => 
        array (
          'name' => 'UpdateUserId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则更新者ID，同LastUpdateEmpid。二选一即可。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '63',
          ),
        ),
        9 => 
        array (
          'name' => 'LastUpdateEmpid',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则更新者ID，同UpdateUserId。二选一即可。',
            'type' => 'string',
            'required' => false,
            'example' => '63',
          ),
        ),
        10 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则状态：',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'enumValueTitles' => 
            array (
              0 => '待生效',
              1 => '生效中',
              2 => '已失效',
              3 => '全部',
            ),
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'CategoryName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分类名称',
            'type' => 'string',
            'required' => false,
            'example' => '分类名称A',
          ),
        ),
        12 => 
        array (
          'name' => 'SourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '来源类型',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'enumValueTitles' => 
            array (
              0 => '默认',
              1 => 'ACC',
            ),
            'example' => '0',
          ),
        ),
        13 => 
        array (
          'name' => 'RuleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则类别',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'enumValueTitles' => 
            array (
              0 => '预置',
              1 => '自定义创建',
            ),
            'example' => '1',
          ),
        ),
        14 => 
        array (
          'name' => 'UpdateStartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '按照更新时间筛选（左区间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-10-07 00:00:00',
          ),
        ),
        15 => 
        array (
          'name' => 'UpdateEndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '按照更新时间筛选（右区间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-10-08 23:59:59',
          ),
        ),
        16 => 
        array (
          'name' => 'SchemeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '质检方案ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123',
          ),
        ),
        17 => 
        array (
          'name' => 'RequireInfos',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '需要字段',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要字段',
              'type' => 'string',
              'required' => false,
              'enumValueTitles' => 
              array (
                'ConditionInfo' => '条件信息',
                'ScoreInfo' => '得分信息：V3适用',
                'OperatorInfo' => '算子信息',
                'SchemeNames' => '是否包含引用的质检方案名',
                'TransUserName' => '是否将创建人更新人ID：转义为名称',
                'BusinessNameInfo' => '适用业务信息',
                'GraphFlowInfo' => '流程信息',
                'RuleCategory' => '种类信息',
              ),
              'example' => 'ConditionInfo',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        18 => 
        array (
          'name' => 'RuleScoreSingleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '评分类型。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'enumValueTitles' => 
            array (
              1 => '扣分项',
              2 => '加分项',
              4 => '一次性评分',
              8 => '未设置评分',
            ),
            'example' => '1',
          ),
        ),
        19 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则列表页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        20 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        21 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页条数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        22 => 
        array (
          'name' => 'CountTotal',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否统计总数',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        23 => 
        array (
          'name' => 'StartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '按照创建时间筛选（右区间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-10-07 00:00:00',
          ),
        ),
        24 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '按照创建时间筛选（左区间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-10-08 23:59:59',
          ),
        ),
        25 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'RulePageResult<RuleCountInfo>',
            'description' => 'RulePageResult<RuleCountInfo>',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '数据总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '7',
              ),
              'BusinessType' => 
              array (
                'description' => '业务类型，无实际意义，忽略。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '忽略',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Data' => 
                  array (
                    'description' => '返回结果',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回结果，参考补充说明。',
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
              'Count' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'CurrentPage' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '9987D326-83D9-4A42-B9A5-0B27F9B40539',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。

',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Message' => 
                  array (
                    'description' => '出错时表示出错详情，当输出多条信息时使用。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '出错时表示出错详情，当输出多条信息时使用。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 7,\\n  \\"BusinessType\\": 0,\\n  \\"Data\\": {\\n    \\"Data\\": [\\n      \\"\\"\\n    ]\\n  },\\n  \\"Count\\": 20,\\n  \\"CurrentPage\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"RequestId\\": \\"9987D326-83D9-4A42-B9A5-0B27F9B40539\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": {\\n    \\"Message\\": [\\n      \\"无\\"\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '批量获取质检规则列表',
    ),
    'UpdateRuleById' => 
    array (
      'summary' => '对应前端功能位置：质检规则配置-新建&更新。专有云URL：ip:port/api/client/UpdateRuleById.json。',
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RuleId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则ID。新增时不需要提供，修改时需要提供。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'JsonStrForRule',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'JsonStrForlRule具体参考文档《[`规则对象说明`](https://help.aliyun.com/document_detail/453053.html)》',
            'type' => 'string',
            'required' => true,
            'example' => '{}',
          ),
        ),
        2 => 
        array (
          'name' => 'ReturnRelatedSchemes',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '返回和该规则有关联的质检方案ID名称。',
            'type' => 'boolean',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'IsCopy',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否复制。为true是等效于复制规则。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'BaseResult',
            'description' => 'BaseResult',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '82C91484-B2D5-4D2A-A21F-A6D73F4D55C6',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功，false/null表示失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**.',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Messages' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Message' => 
                  array (
                    'description' => '出错时表示出错详情，当输出多条信息时使用。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '出错时表示出错详情，当输出多条信息时使用。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'Qualitycheck::2019-01-15::UpdateRuleV4',
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"82C91484-B2D5-4D2A-A21F-A6D73F4D55C6\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Messages\\": {\\n    \\"Message\\": [\\n      \\"无\\"\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '新建或更新质检规则',
    ),
    'UpdateRule' => 
    array (
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"conditions":"所有条件的配置信息"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Data' => 
              array (
                'description' => '返回结果',
                'type' => 'string',
                'example' => 'xxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4987D326-83D9-4A42-B9A5-0B27F9B40539',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。调用方可根据此字段来判断请求是否成功：

- **true**表示成功
- **false/null**表示失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'Qualitycheck::2019-01-15::UpdateRuleV4',
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": \\"xxx\\",\\n  \\"RequestId\\": \\"4987D326-83D9-4A42-B9A5-0B27F9B40539\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateRuleResponse>\\r\\n    <code>200</code>\\r\\n    <message>successful</message>\\r\\n    <requestId>4E1D0CCB-172D-409E-86F3-2188C634E4D8</requestId>\\r\\n    <success>true</success>\\r\\n    <data>xxx</data>\\r\\n</UpdateRuleResponse>","errorExample":""}]',
      'title' => '更新规则',
      'summary' => '更新规则信息。',
      'description' => '> 修改的内容是以创建的规则的信息为基础的，在其中修改相应的条件和算子。该接口执行时可以保证规则ID（rid）不变，但对应的条件ID和算子ID会变化。',
      'requestParamsDescription' => '**请求参数JSON字符串信息**
| 属性 |  值类型  |  是否必须   |   说明    |
|:---------|:-------|:---------|:---------|
|  conditions | `List<ConditionBasicInfo>`|  是  |   所有条件的配置信息   |
|  rules |`List<RuleInfo>` |  是  |   所有规则的配置信息   |

条件与规则详细配置信息请参考[新建规则](~~142307~~)',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UploadRule' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见下方详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{“conditions”:“xxxxx”,"rules":"xxxx"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4987D326-83D9-4A42-B9A5-0B27F9B40539',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。调用方可根据此字段来判断请求是否成功：

- **true**表示成功
- **false/null**表示失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'RidInfo' => 
                  array (
                    'description' => '规则ID。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '规则ID。',
                      'type' => 'string',
                      'example' => '318',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"4987D326-83D9-4A42-B9A5-0B27F9B40539\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"RidInfo\\": [\\n      \\"318\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UploadRuleResponse>\\r\\n    <code>200</code>\\r\\n    <data>318</data>\\r\\n    <message>successful</message>\\r\\n    <requestId>*****</requestId>\\r\\n    <success>true</success>\\r\\n</UploadRuleResponse>","errorExample":""}]',
      'title' => '创建规则',
      'summary' => '创建规则。一般用于客户需要自己提供规则编辑界面的场景。',
      'description' => '> 相关文档，请参见 [规则配置](https://help.aliyun.com/document_detail/213225.html)。',
      'requestParamsDescription' => '## 请求参数JSON字符串信息

| 属性       | 值类型 | 是否必选 | 描述                                                         |
| :--------- | :----- | :------- | :----------------------------------------------------------- |
| appKey     | String | 是       | 业务方或者业务场景的标记。                                   |
| conditions | List   | 是       | 所有条件的详细配置信息，具体内容参见下方的`条件的详细配置信息字段ConditionBasicInfo描述`。 |
| rules      | List   | 是       | 规则的配置信息，具体内容参见下方的`规则的配置信息字段RuleInfo描述`。 |

## 一、条件的详细配置信息字段ConditionBasicInfo说明

| 属性        | 值类型     | 是否必选 | 示例值                                                   | 描述                                                         |
| :---------- | :--------- | :------- | :------------------------------------------------------- | :----------------------------------------------------------- |
| cid         | String     | 是       | "1"                                                      | 条件的ID，必须数字字符（建议从1开始以正整数向上累加），此数字在规则上传后会被修改为系统自生成Id。 |
| check_range | CheckRange | 是       | 具体内容参见下方的`条件检查范围CheckRange描述`          | 条件的检查范围。                                             |
| operators   | List       | 是       | 具体内容参见下方的`条件所包含算子OperatorBasicInfo描述` | 条件包含的算子。                                             |
| lambda      | String     | 是       | 一个算子："1"，多个算子：`1&&2&&3`  | 条件中算子的逻辑关系，由算子ID（oid）与逻辑运算符（与、或、非）组成的表达式，示例值中的1、2、3均代表算子ID（oid），oid在`条件所包含算子OperatorBasicInfo描述`中有详细说明。 |

### 条件检查范围CheckRange描述：

| 属性   | 值类型 | 是否必选 | 示例值                                  | 描述                                                         |
| :----- | :----- | :------- | :-------------------------------------- | :----------------------------------------------------------- |
| role   | String | 否       | 客服                                    | 适用角色，条件的作用角色范围，可取值：“客服”；“客户”。不传表示所有角色。 |
| anchor | Anchor | 否       | 具体内容参见下方的`前置条件Anchor描述` | 前置条件详细信息。                                           |
| range  | String | 否       | {"from":1,"to":3}                    | 检测范围，具体使用说明请查看本文档特殊说明中的`检测范围range使用说明`。 |

### 前置条件Anchor描述：

| 属性     | 值类型  | 是否必选 | 示例值 | 描述                                                         |
| :------- | :------ | :------- | :----- | :----------------------------------------------------------- |
| cid      | String  | 是       | "3"    | 前置条件的条件id(cid)，用于确定anchor的条件。                |
| location | String  | 是       | AROUND | 用来指定前置条件命中时，当前条件检测前置条件命中句子的之前XX句、之后XX句、前后部分句子、当前句，取值：BEFORE（前置条件命中句子之前）、AROUND（前置条件命中位置前后）、AFTER（前置条件命中句子之后）、CURRENT（前置条件命中的当前句）。通过该字段限定一个范围，然后配合上面的range中的from、to来指定具体的句子。 |
| hit_time | Integer | 是       | 3      | 前置条件的命中次数，有以下三种情况：1、正整数1~N代表前置条件第一（N）次命中；2、0代表前置条件每次命中；3、-1代表前置条件任意一次命中。 |

### 条件所包含算子OperatorBasicInfo描述：

| 属性  | 值类型 | 是否必选 | 示例值                                                     | 描述                                                         |
| :---- | :----- | :------- | :--------------------------------------------------------- | :----------------------------------------------------------- |
| oid   | String | 是       | "1"                                                        | 算子的ID，必须数字字符（建议从1开始以正整数向上累加），此数字在规则上传后会被修改为系统自生成ID。 |
| name  | String | 是       | 我是算子名称                                               | 算子名称、描述。                                             |
| type  | String | 是       | INCLUDE_KEYWORDS                                           | 算子类型，具体内容参见下方的`算子类型以及算子具体内容Param描述`。 |
| param | Param  | 是       | 具体内容参见下方的`算子类型以及算子具体内容Param描述` | 算子表达式具体内容。                                         |

### 算子类型以及算子具体内容Param描述：

param中的属性较多，有一些是公用属性，有一些是特定算子类型专用的，所以我们按照算子类型维度，来逐一说明每个算子类型都可以使用哪些属性，并且提供配置示例供您参考，以下标题为算子名称（name）、算子类型（type），内容为该算子可用参数列表，以及使用示例：

### 1、关键词检查：
包含任意一个关键字（HIT_ANY_KEYWORDS）、包含全部关键字/包含任意N个关键字/全部不包含（INCLUDE_KEYWORDS）

| 属性             | 值类型  | 是否必选 | 示例值                   | 描述                                                         |
| :--------------- | :------ | :------- | :----------------------- | :----------------------------------------------------------- |
| keywords         | List    | 是       | ["你好","您好","上午好"] | 关键词列表                                                   |
| contextChatMatch | Boolean | 否       | false                    | 是否多句分析，用来指定分析方式，可选值：true（多句分析）；false（单句分析），默认false。详见下方的**分析方式详细说明** |
| keywordMatchSize | Integer | 否       | 3                        | 匹配关键字的数量，不同的检测类型与该参数取值的关系：包含任意一个关键字（取值为1）、包含全部关键字（取值为-1）、包含任意N个关键字（取值为大于等于1并且小于等于关键字的个数正整数）、全部不包含（取值为0）。默认值根据关键字检测类型（type值）的不同而不同：HIT_ANY_KEYWORDS（1）、INCLUDE_KEYWORDS（-1） |
| in_sentence      | Boolean | 否       | true                     | 匹配时是否限制在单句话中（单句话是指中间没有逗号、句号等，以逗号、句号等标号分开的算不同句子）；可取值：true（限定在一个句子中）；false（不限定）；默认false。若contextChatMatch为true，则该参数无效，因为分析方式为多句分析时，与单句话生效是冲突的。 |
| keywordExtension | Integer | 否       | 0                        | 是否开启同义词扩展，可取值：1（开启）；0（关闭）；默认：0。 |

**分析方式详细说明**
- 单句分析、多句分析针对的是当前条件所限定的句子。
- 限定句子：通过当前条件的适用角色、前置条件及检测范围所限定的1个或多个句子。
- 单句分析：对限定句子逐句进行分析，例如检测包含全部关键词，只有限定句子中的某一句包含了全部的关键词，才算命中。
- 多句分析：将限定句子合并为一个段落进行一次分析，例如检测包含全部关键词，只要合并后的段落中包含全部的关键词就算命中。

**请求示例：**
①单句分析、包含任意一个关键字
```
{
    "keywords":[
        "您好",
        "你好",
        "上午好"
    ],
    "contextChatMatch":false,
}
```
![](https://img.alicdn.com/tfs/TB1CJ3KI4D1gK0jSZFsXXbldVXa-921-287.png)

②多句分析、包含全部关键字
```
{
    "keywordMatchSize":-1,
    "keywords":[
        "您好",
        "你好",
        "上午好"
    ],
    "contextChatMatch":true
}
```
![](https://img.alicdn.com/tfs/TB1MnoOI7L0gK0jSZFxXXXWHVXa-924-285.png)

③单句分析、包含任意2个关键字、单句话内生效、开启同义词扩展
```
{
    "keywordMatchSize":2,
    "keywordExtension":1,
    "keywords":[
        "您好",
        "你好",
        "上午好"
    ],
    "in_sentence":true,
    "contextChatMatch":false
}
```
![](https://img.alicdn.com/tfs/TB106RaaP39YK4jSZPcXXXrUFXa-985-288.png)

④单句分析、全部不包含
```
{
    "keywordMatchSize":0,
    "keywords":[
        "您好",
        "你好",
        "上午好"
    ],
    "contextChatMatch":false
}
```
![](https://img.alicdn.com/tfs/TB16PAMI.T1gK0jSZFrXXcNCXXa-980-282.png)
### 2、正则表达式检查（REGULAR_EXPRESSION）

| 属性        | 值类型  | 是否必选 | 示例值             | 描述                                                         |
| :---------- | :------ | :------- | :----------------- | :----------------------------------------------------------- |
| regex       | String  | 是       | `请看下方代码示例` | 命中的正则表达式。                                           |
| notRegex    | String  | 否       | `请看下方代码示例` | 排除的正则表达式。                                           |
| in_sentence | Boolean | 否       | true               | 默认为false，匹配时是否限制在单句话中（单句话是指中间没有逗号、句号等，以逗号、句号等标号分开的算不同句子）；true：限定在一个句子中，false：不限定，默认：false。 |

```
{
    "regex":"请问.*(车牌号|发动机号|驾驶证号码)",
    "notRegex":"发一下|告诉我",
    "in_sentence":true
}
```
![](https://img.alicdn.com/tfs/TB1aOSeaggP7K4jSZFqXXamhVXa-1015-215.png)

### 3、文本相似度检查（SIMILAR_MATCH）

| 属性        | 值类型  | 是否必选 | 示例值             | 描述                                                         |
| :---------- | :------ | :------- | :----------------- | :----------------------------------------------------------- |
| similarlySentences       | List  | 是       | `请看下方代码示例` | 示例语句，最多可输入200句，每个示例语句最大长度为50字符。                                          |
| score    | Integer  | 否       | 80 | 相似度分值，默认为80。                                         |

```
{
    "score":80,
    "similarlySentences":[
        "我想投诉你们部门",
        "我要投诉你们",
        "我要举报你们部门",
        "我要打12315举报你们",
        "我要到工商管理部门投诉你们"
    ]
}
```
![](https://img.alicdn.com/tfs/TB1wuIYMoH1gK0jSZSyXXXtlpXa-1015-328.png)

###  4、上下文重复（ADVANCED_REPEAT_DETECT）

| 属性      | 值类型  | 是否必选 | 示例值                              | 描述                                                         |
| :-------- | :------ | :------- | :---------------------------------- | :----------------------------------------------------------- |
| from      | Integer | 否       | 3                                   | 表示重复的两句话间隔在几句以内时才算违规，默认：2，即从当前局往前数2句（包含）之内重复算违规。 |
| hit_time  | Integer | 否       | 2                                   | 表示第几次重复出现时才算违规，默认：1。                      |
| threshold | Integer | 否       | 5                                   | 最小字数，小于此值的句子不检查，默认：4。                   |
| excludes  | List    | 否       | ["好的我知道了"，"好的我知道了"] | 表示例外句子，即例外句子重复出现时不算违规，默认：空。       |

```
{
    "from":3,
    "hit_time":2,
    "threshold":5,
    "excludes":[
        "好的好的我知道了",
        "好的我知道了"
    ]
}
```
![](https://img.alicdn.com/tfs/TB1jaeteXT7gK0jSZFpXXaTkpXa-1015-254.jpg)

### 5、通话静音检查（INTERVAL_GREATER）

| 属性           | 值类型  | 是否必选 | 示例值 | 描述                                                         |
| :------------- | :------ | :------- | :----- | :----------------------------------------------------------- |
| interval       | Integer | 是       | 5000   | 静音时长（毫秒）。                                           |
| different_role | Boolean | 否       | false  | 是否区分角色，true：区分角色，false：不区分角色；为true则目标句子如果与本句是同一个角色说的话就不参与计算。 |
| target         | Integer | 否       | 1      | 目标句子是当前句子的前多少句，为0时间隔等于本句的结束时间-本句的开始时间。 |
| from_end       | Boolean | 否       | false  | 指定时间间隔的计算方式是否用本句的结束时间减目标句子的结束时间。 |

```
{
    "interval":5000,
    "different_role":false,
    "target":1,
    "from_end":false
}
```
![](https://img.alicdn.com/tfs/TB1aBFTeaL7gK0jSZFBXXXZZpXa-2036-262.jpg)

### 6、语速检查（SPEECH_SPEED_CHECK）

| 属性           | 值类型  | 是否必选 | 示例值 | 描述                                                     |
| :------------- | :------ | :------- | :----- | :------------------------------------------------------- |
| velocityInMint | Integer | 是       | 370    | 每分钟的语速值（字数），用以判断本句的语速是否超过指定值。 |
| minWordSize    | Integer | 否       | 4      | 表示当一句话少于多少字时不检测。                         |
| average        | Boolean | 否       | false  | true：检测整个对话的平均语速；false：检测单句话的语速。  |

```
{
    "velocityInMint":370,
    "average":false,
    "minWordSize":4
}
```
![](https://img.alicdn.com/tfs/TB1nelmeX67gK0jSZPfXXahhFXa-2030-312.jpg)

###  7、抢话检查（GRAB_WORDS）

| 属性      | 值类型  | 是否必选 | 示例值 | 描述                                                         |
| :-------- | :------ | :------- | :----- | :----------------------------------------------------------- |
| interval  | Integer | 是       | 5000   | 交叉时间，也就是抢话中客户说话的结束时间减去客服说话的开始时间（毫秒）。 |
| threshold | Integer | 否       | 4      | 表示当抢话句子的字数大于多少个字时才进行检测。               |
| delayTime | Integer | 否       | 1000      | 延时判定抢话情况，比如，设置为1000，则表示同时一方开始说话1000毫秒后，再出现对话重叠才算作抢话，单位：毫秒|

```
{
    "interval":3000,
    "threshold":4
}
```
![](https://img.alicdn.com/tfs/TB1K1F3eoY1gK0jSZFCXXcwqXXa-2030-312.jpg)

###  8、角色判断（ROLE_CHECK）
该算子较为特殊，需要涉及到check_range的改动，详见完整的条件配置示例：

| 属性        | 值类型 | 是否必选 | 示例值 | 描述                                       |
| :---------- | :----- | :------- | :----- | :----------------------------------------- |
| target_role | String | 是       | 客户   | 指定目标句子的角色，可选值为：客服、客户。 |

```
{
    "cid":"1",
    "lambda":"1",
    "check_range":{
        "absolute":true, // 固定值
        "alSentencesSatisfy":true, // 固定值
        "range":{ // 指定要检测的句子位置，from与to的值需要一致
            "from":2,
            "to":2
        }
    },
    "operators":[
        {
            "oid":1,
            "type":"ROLE_CHECK",
            "param":{
                "target_role":"客服"
            }
        }
    ]
}
```
![](https://img.alicdn.com/tfs/TB1w.00emf2gK0jSZFPXXXsopXa-2028-254.jpg)

###  9、非正常挂机（DURATION）
根据最后一句话的角色，以及最后一句话的结束时间到挂机的时间间隔来判断是否为非正常挂机，此时check_range.range中的from和to都需要指定为-1，来表示检测最后一句话，详见完整的条件配置示例：

| 属性            | 值类型  | 是否必选 | 示例值   | 描述                                               |
| :-------------- | :------ | :------- | :------- | :------------------------------------------------- |
| interval        | Integer | 是       | 5000     | 表示最后一句话结束时间到挂机时间的时长（毫秒）。  |
| compareOperator | String  | 否       | gt       | 指定interval比较方式，gt：大于，lt：小于，默认为gt。 |
| beginType       | String  | 是       | DIALOGUE | 固定传DIALOGUE。                                  |
| target_role     | String  | 否       | 客户     | 指定最后一句话的角色，如果为空则代表任意角色。     |

```
{
    "cid":"1",
    "lambda":"1",
    "check_range":{
        "range":{
            "from":-1, //固定为-1，表示检测最后一句话
            "to":-1， //固定为-1，表示检测最后一句话
        }
    },
    "operators":[
        {
            "oid":1,
            "type":"DURATION",
            "param":{
                "interval":3000,
                "beginType":"DIALOGUE",
                "target_role":"客户"
            }
        }
    ]
}
```
![](https://img.alicdn.com/tfs/TB1SJF6ehD1gK0jSZFyXXciOVXa-2036-272.jpg)

###  10、录音时长检查（DURATION）

| 属性            | 值类型  | 是否必选 | 示例值 | 描述                                                |
| :-------------- | :------ | :------- | :----- | :-------------------------------------------------- |
| interval        | Integer | 是       | 5000   | 指定录音时长（毫秒）。                              |
| compareOperator | String  | 否       | gt     | 指定interval比较方式，gt：大于，lt：小于，默认为gt。 |

```
{
    "interval":60000,
    "compareOperator":"lt"
}
```
![](https://img.alicdn.com/tfs/TB151l2ehz1gK0jSZSgXXavwpXa-2032-204.jpg)

###  11、能量检测（ASR_EMOTION）

| 属性                  | 值类型  | 是否必选 | 示例值 | 描述                                                         |
| :-------------------- | :------ | :------- | :----- | :----------------------------------------------------------- |
| maxEmotionChangeValue | Integer | 否       | 3      | 能量值，取值范围：1-10。 |
| checkType             | Integer | 否       | 3      | 检测方式，可选值：1（相邻句能量波动）；2（最大能量跨度）；3（能量范围检测），默认值：3。 |
| compareOperator       | String  | 否       | gt     | 大于还是小于，可选值：gt（大于）；lt（小于），默认值：gt。   |

![](https://img.alicdn.com/tfs/TB1r0ZYMbr1gK0jSZFDXXb9yVXa-1018-185.png)


###  12、通用检测模型（EMOTION_MODEL）

由系统内置的算法模型进行分析，目前可检测的类型有：辱骂检测模型、高危检测模型。

| 属性| 值类型  | 是否必选 | 示例值 | 描述  |
| :-------------------- | :------ | :------- | :----- | :--------------------- |
| pvalues | List | 否     | ["ruma01"]   | 检测的类型，可选值：ruma01（辱骂检测模型）；goawei01（高危检测模型），默认值为["ruma01"] |

![](https://img.alicdn.com/imgextra/i3/O1CN01nKIjwc1OvKWFqhZFt_!!6000000001767-2-tps-1014-191.png)

###  13、客户检测模型（CUSTOMER_CHECK_MODEL）

由系统内置的算法模型进行分析，目前可检测的类型有：扬言投诉客服、扬言找客服主管、质疑客服态度差、内部投诉检测、公共舆情检测。

| 属性                  | 值类型  | 是否必选 | 示例值 | 描述                                                         |
| :-------------------- | :------ | :------- | :----- | :----------------------------------------------------------- |
| pvalues | List | 否       | ["tousu01","zhaozhuguan01"]      | 检测的类型，可选值：tousu01（扬言投诉客服）；zhaozhuguan01（扬言找客服主管）；zhiyitaidu01（质疑客服态度差）；internal_complain01（内部投诉检测）；public_opinion（公共舆情检测），默认值为["tousu01"] |

![](https://img.alicdn.com/imgextra/i2/O1CN01XyWkZx1rexDMlwaqs_!!6000000005657-2-tps-1017-166.png)

### 14、客服检测模型（ABUSE_MODEL）

由系统内置的算法模型进行分析，无需配置param。

| 属性                  | 值类型  | 是否必选 | 示例值 | 描述                                                         |
| :-------------------- | :------ | :------- | :----- | :----------------------------------------------------------- |
| pvalues | List | 否       | ["jifeng01"]      | 检测的类型，可选值：讥讽客户检测（jifeng01），默认值为["jifeng01"] |

![](https://img.alicdn.com/imgextra/i2/O1CN01ci8lMd1eLdVRoCm0V_!!6000000003855-2-tps-1013-135.png)



## 二、规则的配置信息字段RuleInfo说明

| 属性          | 值类型  | 是否必选 | 示例值                                                       | 描述                                                         |
| :------------ | :------ | :------- | :----------------------------------------------------------- | :----------------------------------------------------------- |
| rid           | String  | 是       | 1                                                            | 规则的ID，必须数字字符，此数字在规则上传后会被修改为系统自生成ID。 |
| lambda        | String  | 是       | 一个条件：""，多个条件：`a&&b&&c`                            | 规则中条件的逻辑关系，由条件ID（cid）与逻辑运算符（与、或、非）组成的表达式，示例值中的a、b、c均代表算条件ID（cid）。 |
| business      | List    | 是       | 具体内容参见下方的`规则所属业务字段BusinessCategoryBasicInfo描述` | 规则的适用业务，可在新建规则页面获取，详见下图。若该属性为空，则设置为默认的“所有业务”。 |
| type          | Integer | 是       | 1                                                            | 规则的类型，可在新建规则页面获取，详见下图。                 |
| triggers      | List    | 是       | ["a","b","c"]                                                | 规则中需要返回内容的条件ID（cid）。设置规则ID的话，命中结果后将会返回规则所命中的具体内容。 |
| Name          | String  | 是       | "用户可能要投诉"                                             | 规则名称。                                                   |
| scoreSubId    | Integer | 否       | 3678                                                         | 规则绑定的评分项子项的id，如绑定评分项，则必须传入ruleScoreType。 |
| ruleScoreType | Integer | 否       | 3                                                            | 该规则所绑定的评分项是否进行计分（1：不计分，3：计分）。     |
| level | Integer | 否 | 2 | 重要程度，用于在复核页面对规则根据重要程度进行分类展示。取值：0（重度违规）；1（中度违规）；2（轻度违规），默认值：2 |
| fullCycle| Integer | 否| 1 | 设置规则的生效时间的类型，可选值：0（特定周期生效，特定的时间范围内生效），1（全周期生效，始终生效）  |
| effectiveStartTime| Date    | 否 | 2021-03-04 04:05:05  | 规则生效时间为特定周期生效时的生效开始时间。 |
| effectiveEndTime | Date    | 否 | 2021-03-06 04:05:05    | 规则生效时间为特定周期生效时的生效结束时间。 |

###  规则所属业务字段BusinessCategoryBasicInfo描述：

| 属性 | 值类型  | 是否必选 | 示例值    | 描述                            |
| :--- | :------ | :------- | :-------- | :------------------------------ |
| bid  | Integer | 是       | 267202890 | 适用业务BID，必须数字字符。 |


![](https://img.alicdn.com/imgextra/i4/O1CN01JAVwvr21FRYMRTLY4_!!6000000006955-2-tps-602-247.png)

## 检测范围range使用说明
检测范围是通过一个数字区间来筛选出当前条件生效的范围，具体说明如下：

### 一、无前置条件时
![](https://img.alicdn.com/tfs/TB1l.utJ1L2gK0jSZFmXXc7iXXa-1534-486.png)

1.{"from":1,"to":3}，代表所检测角色所说的前三句；
2.{"from":-1,"to":-3}，代表所检测角色所说的最后三句话；
3.{"from":3,"to":-3}，代表所检测角色所说的正数第三句到倒数第三句。

### 二、有前置条件时
存在前置条件时，系统会将所有句子，以前置条件命中句为分割点，切分为三个段落：前置条件命中句之前的所有句子、前置条件命中句之后的所有句子、前置条件命中句前后的部分句子，详见下图中所标示的三个段落。需要您先选择一个段落，然后再通过数字区间在该段落内来筛选具体的生效范围。

![](https://img.alicdn.com/tfs/TB1zZWuJ1L2gK0jSZFmXXc7iXXa-1462-544.png)

**前置条件命中位置之前（anchor.location的值为BEFORE）**

![](https://img.alicdn.com/tfs/TB1MO8fXZ4z2K4jSZKPXXXAYpXa-1486-636.png)

1.{"from":1,"to":3}，代表所检测角色在当前段落内所说的前三句（紧邻前置条件命中句的句子的是第一句）
2.{"from":-1,"to":-3}，代表所检测角色在当前段落内所说的最后三句（倒数第一句到倒数第三句）（距离前置条件命中句最远的是最后一句）
3.{"from":1,"to":-1}，代表所检测角色在前置条件命中句**之前**的所有句子；
4.{"from":0,"to":2}，代表前置条件命中句当句，到所检测角色所说的第二句之间的三句话（只有在当前条件与前置条件的适用角色一致时，才可以使用第0句来定位到前置条件命中句当句，若角色不同，则不允许使用）
5.以上仅为使用示例，并非只能使用以上四种情况，总体来说，正数代表当前段落正数第几句，负数代表当前段落倒数第几句。

**前置条件命中位置前后（anchor.location的值为AROUND）**

![](https://img.alicdn.com/tfs/TB1OIkUlsKfxu4jSZPfXXb3dXXa-1482-660.png)

1.{"from":0,"to":0}，仅代表前置条件命中句当句；
2.{"from":1,"to":3}，代表当前置条件命中时，在前置条件命中句“之后”的所检测角色所说的第1句到第3句；
3.{"from":-2,"to":-4}，代表当前置条件命中时，在前置条件命中句子“之前”的所检测角色所说话术的第2句到第4句；
4.{"from":-3,"to":3}，代表当前置条件命中时，在前置条件命中句子“之前”的所检测角色所说的第3句到“之后”的第3句；
5.以上仅为使用示例，并非只能使用以上四种情况，总体来说，正数代表前置条件命中句之后的句子，负数代表前置条件命中句之前的句子。

**前置条件命中位置之后（anchor.location的值为AFTER）**

![](https://img.alicdn.com/tfs/TB1S0eZJYj1gK0jSZFuXXcrHpXa-1490-648.png)

1.{"from":1,"to":3}，代表所检测角色在当前段落内所说的前三句（紧邻前置条件命中句的句子的是第一句）
2.{"from":-1,"to":-3}，代表所检测角色在当前段落内所说的最后三句（倒数第一句到倒数第三句）（距离前置条件命中句最远的是最后一句）
3.{"from":1,"to":-1}，代表所检测角色在前置条件命中句**之后**的所有句子；
4.{"from":0,"to":2}，代表前置条件命中句当句，到所检测角色所说的第二句之间的三句话（只有在当前条件与前置条件的适用角色一致时，才可以使用第0句来定位到前置条件命中句当句，若角色不同，则不允许使用）；
5.以上仅为使用示例，并非只能使用以上四种情况，总体来说，正数代表当前段落正数第几句，负数代表当前段落倒数第几句。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetRuleDetail' => 
    array (
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"ruleIds":"123"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'description' => '响应结果。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4987D326-83D9-4A42-B9A5-0B27F9B40539',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。调用方可根据此字段来判断请求是否成功：

- **true**表示成功
- **false/null**表示失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'PageSize' => 
                  array (
                    'description' => '每页条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'PageNumber' => 
                  array (
                    'description' => '当前页。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Count' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Conditions' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ConditionBasicInfo' => 
                      array (
                        'description' => '所有条件的配置信息 ',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '规则条件信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ConditionInfoCid' => 
                            array (
                              'description' => '条件的ID',
                              'type' => 'string',
                              'example' => '7',
                            ),
                            'OperLambda' => 
                            array (
                              'description' => '条件中算子的逻辑关系 ',
                              'type' => 'string',
                              'example' => '7',
                            ),
                            'Operators' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'OperatorBasicInfo' => 
                                array (
                                  'description' => '条件包含的算子',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '算子',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Type' => 
                                      array (
                                        'description' => '算子类型',
                                        'type' => 'string',
                                        'example' => 'REGULAR_EXPRESSION',
                                      ),
                                      'Oid' => 
                                      array (
                                        'description' => '算子的ID',
                                        'type' => 'string',
                                        'example' => '8',
                                      ),
                                      'OperName' => 
                                      array (
                                        'description' => '算子名称，描述。',
                                        'type' => 'string',
                                        'example' => 'operator demo',
                                      ),
                                      'Param' => 
                                      array (
                                        'description' => ' 算子表达式具体内容 ',
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'DifferentRole' => 
                                          array (
                                            'description' => ' 用以时间间隔算子，判断时间间隔，为true则目标句子如果与本句是同一个角色说的话就不参与计算。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                          ),
                                          'Regex' => 
                                          array (
                                            'description' => ' 用于正则算子，正则表达式。',
                                            'type' => 'string',
                                            'example' => '.*修改密码.*',
                                          ),
                                          'TargetRole' => 
                                          array (
                                            'description' => ' 用于判断重复算子，如果本句匹配上该正则表达式，那么匹配上的部份会在本句之前target_role指定的句子中查找。',
                                            'type' => 'string',
                                            'example' => '客户',
                                          ),
                                          'VelocityInMint' => 
                                          array (
                                            'description' => '语速检查算子中，每分钟的语速值（字数），用以判断本句的语速是否超过指定值。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '280',
                                          ),
                                          'Average' => 
                                          array (
                                            'description' => '语速检查模式，可能值：true：检测整个对话的平均语速；false：检测单句话的语速。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                          ),
                                          'KeywordExtension' => 
                                          array (
                                            'description' => '关键词检查算子中，是否开启同义词扩展。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                          ),
                                          'Score' => 
                                          array (
                                            'description' => '文本相似度算子的相似度值',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '80',
                                          ),
                                          'NotRegex' => 
                                          array (
                                            'description' => '正则表达式检查中，排除的正则表达式。',
                                            'type' => 'string',
                                            'example' => '发一下|告诉我',
                                          ),
                                          'CompareOperator' => 
                                          array (
                                            'description' => '大于还是小于，可能值：gt（大于）；lt（小于），默认值：gt。',
                                            'type' => 'string',
                                            'example' => 'gt',
                                          ),
                                          'DelayTime' => 
                                          array (
                                            'description' => '抢话检查算子中，延时判定抢话情况，比如，设置为1000，则表示同时一方开始说话1000毫秒后，再出现对话重叠才算作抢话，单位：毫秒',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1000',
                                          ),
                                          'KeywordMatchSize' => 
                                          array (
                                            'description' => '关键词检查算子中，匹配关键字的数量，不同的检测类型与该参数取值的关系：包含任意一个关键字（取值为1）、包含全部关键字（取值为-1）、包含任意N个关键字（取值为大于等于1并且小于等于关键字的个数正整数）、全部不包含（取值为0）。默认值根据关键字检测类型（type值）的不同而不同：HIT_ANY_KEYWORDS（1）、INCLUDE_KEYWORDS（-1）',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '3',
                                          ),
                                          'HitTime' => 
                                          array (
                                            'description' => '上下文重复算子中，表示第几次重复出现时才算违规，默认：1。
',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                          ),
                                          'BeginType' => 
                                          array (
                                            'description' => '非正常挂机算子中使用，固定传DIALOGUE。',
                                            'type' => 'string',
                                            'example' => 'DIALOGUE',
                                          ),
                                          'Target' => 
                                          array (
                                            'description' => '目标句子是当前句子的前多少句，为0时间间隔等于本句的结束时间-本句的开始时间。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                          ),
                                          'MaxEmotionChangeValue' => 
                                          array (
                                            'description' => '能量检测算子中的能量值，取值范围：1-10。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '8',
                                          ),
                                          'Threshold' => 
                                          array (
                                            'description' => '用于编辑距离和匹配予以算子，指定的阈值。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '4',
                                          ),
                                          'From' => 
                                          array (
                                            'description' => '上下文重复算子中，表示重复的两句话间隔在几句以内时才算违规，默认：2，即从当前局往前数2句（包含）之内重复算违规。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '3',
                                          ),
                                          'FromEnd' => 
                                          array (
                                            'description' => '用于时间间隔算子，判断时间间隔，指定时间间隔的计算方式是否用本句的结束时间减目标句子的结束时间。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                          ),
                                          'MinWordSize' => 
                                          array (
                                            'description' => '语速检查中，表示当一句话少于多少字时不检测。
',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '4',
                                          ),
                                          'InSentence' => 
                                          array (
                                            'description' => '用以判断是否是单句还是整句。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                          ),
                                          'Phrase' => 
                                          array (
                                            'description' => '用于最小编辑距离算子，参考句子。',
                                            'type' => 'string',
                                            'example' => 'xxx',
                                          ),
                                          'Similarity_threshold' => 
                                          array (
                                            'description' => '弃用字段，请忽略。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '90',
                                          ),
                                          'CheckType' => 
                                          array (
                                            'description' => '能量检测中的检测方式，可能值：1（相邻句能量波动）；2（最大能量跨度）；3（能量范围检测），默认值：3。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                          ),
                                          'Interval' => 
                                          array (
                                            'description' => '用于时间间隔算子，时间间隔。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '5000',
                                          ),
                                          'ContextChatMatch' => 
                                          array (
                                            'description' => '关键词检查算子中，是否多句分析，用来指定分析方式，可能值：true多句分析；false单句分析，默认false。详见下方的分析方式详细说明。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                          ),
                                          'Excludes' => 
                                          array (
                                            'type' => 'object',
                                            'properties' => 
                                            array (
                                              'Excludes' => 
                                              array (
                                                'description' => '上下文重复算子例外句子。',
                                                'type' => 'array',
                                                'items' => 
                                                array (
                                                  'description' => '上下文重复算子中，例外句子列表，即例外句子重复出现时不算违规，默认：空。',
                                                  'type' => 'string',
                                                  'example' => '[“好的”]',
                                                ),
                                              ),
                                            ),
                                          ),
                                          'AntModelInfo' => 
                                          array (
                                            'type' => 'object',
                                            'properties' => 
                                            array (
                                              'AntModelInfo' => 
                                              array (
                                                'description' => '弃用字段，请忽略。',
                                                'type' => 'array',
                                                'items' => 
                                                array (
                                                  'description' => '弃用字段，请忽略。',
                                                  'type' => 'string',
                                                  'example' => 'xx',
                                                ),
                                              ),
                                            ),
                                          ),
                                          'Pvalues' => 
                                          array (
                                            'type' => 'object',
                                            'properties' => 
                                            array (
                                              'Pvalues' => 
                                              array (
                                                'description' => '弃用字段，请忽略。',
                                                'type' => 'array',
                                                'items' => 
                                                array (
                                                  'description' => '弃用字段，请忽略。',
                                                  'type' => 'string',
                                                  'example' => 'xx',
                                                ),
                                              ),
                                            ),
                                          ),
                                          'References' => 
                                          array (
                                            'type' => 'object',
                                            'properties' => 
                                            array (
                                              'Reference' => 
                                              array (
                                                'description' => '用于相似度匹配',
                                                'type' => 'array',
                                                'items' => 
                                                array (
                                                  'description' => '用于相似度匹配，算子表达式具体内容。',
                                                  'type' => 'string',
                                                  'example' => '[“优惠力度特别大”,”特别的优惠”]',
                                                ),
                                              ),
                                            ),
                                          ),
                                          'SimilarlySentences' => 
                                          array (
                                            'type' => 'object',
                                            'properties' => 
                                            array (
                                              'SimilarlySentence' => 
                                              array (
                                                'description' => '文本相似度算子的示例语句集合',
                                                'type' => 'array',
                                                'items' => 
                                                array (
                                                  'description' => '文本相似度算子的示例语句集合',
                                                  'type' => 'string',
                                                  'example' => '[“优惠力度特别大”,”特别的优惠”]',
                                                ),
                                              ),
                                            ),
                                          ),
                                          'OperKeyWords' => 
                                          array (
                                            'type' => 'object',
                                            'properties' => 
                                            array (
                                              'OperKeyWord' => 
                                              array (
                                                'description' => '关键字列表',
                                                'type' => 'array',
                                                'items' => 
                                                array (
                                                  'description' => '关键字列表',
                                                  'type' => 'string',
                                                  'example' => '[“你好”,”您好”,”上午好”]',
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
                            'CheckRange' => 
                            array (
                              'description' => '条件的检查范围 ',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Absolute' => 
                                array (
                                  'description' => '是否独立',
                                  'type' => 'boolean',
                                  'example' => 'true',
                                ),
                                'Role' => 
                                array (
                                  'description' => '角色，条件的作用角色范围',
                                  'type' => 'string',
                                  'example' => '客服',
                                ),
                                'Anchor' => 
                                array (
                                  'description' => '条件的锚定关系',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'HitTime' => 
                                    array (
                                      'description' => '`1~N`代表条件第一（N）次命中，**-1**代表条件最后一次命中。',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '1',
                                    ),
                                    'Location' => 
                                    array (
                                      'description' => '- **CURRENT**：条件命中的当前句
- **BEFORE**：命中句子之前
- **AFTER**：命中句子之后 ',
                                      'type' => 'string',
                                      'example' => 'AFTER',
                                    ),
                                    'AnchorCid' => 
                                    array (
                                      'description' => '条件ID，用于确定anchor的条件 ',
                                      'type' => 'string',
                                      'example' => '7',
                                    ),
                                  ),
                                ),
                                'Range' => 
                                array (
                                  'description' => 'Role和Anchor共同决定的范围。`1~N`表示由anchor和role共同限定的第1（N）句，-1表示由anchor和role共同限定的最后一句。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'To' => 
                                    array (
                                      'description' => '`1~N`表示由anchor和role共同限定的第1（N）句，**-1**表示由anchor和role共同限定的最后一句。',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '10',
                                    ),
                                    'From' => 
                                    array (
                                      'description' => '`1~N`表示由anchor和role共同限定的第1（N）句，**-1**表示由anchor和role共同限定的最后一句。',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '1',
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
                  'Rules' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RuleBasicInfo' => 
                      array (
                        'description' => '所有规则的配置信息',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '规则列表。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'RuleLambda' => 
                            array (
                              'description' => '规则中条件的逻辑关系 ',
                              'type' => 'string',
                              'example' => '7&&!8',
                            ),
                            'Rid' => 
                            array (
                              'description' => '规则的ID',
                              'type' => 'string',
                              'example' => '4',
                            ),
                            'BusinessCategories' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'BusinessCategoryBasicInfo' => 
                                array (
                                  'description' => '规则所属业务',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '规则所属业务',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'BusinessName' => 
                                      array (
                                        'description' => '规则所属业务名称',
                                        'type' => 'string',
                                        'example' => '业务A',
                                      ),
                                      'ServiceType' => 
                                      array (
                                        'description' => '业务类型',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                      ),
                                      'Bid' => 
                                      array (
                                        'description' => '规则所属业务BID，必须数字字符 ',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '264971810',
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                            'Triggers' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Trigger' => 
                                array (
                                  'description' => '触发列表。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '规则中需要返回内容的条件ID。设置规则ID的话，命中结果后将会返回规则所命中的具体内容。',
                                    'type' => 'string',
                                    'example' => '["7","8"]',
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
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'Qualitycheck::2019-01-15::GetRuleV4',
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"4987D326-83D9-4A42-B9A5-0B27F9B40539\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageSize\\": 10,\\n    \\"PageNumber\\": 1,\\n    \\"Count\\": 10,\\n    \\"Conditions\\": {\\n      \\"ConditionBasicInfo\\": [\\n        {\\n          \\"ConditionInfoCid\\": \\"7\\",\\n          \\"OperLambda\\": \\"7\\",\\n          \\"Operators\\": {\\n            \\"OperatorBasicInfo\\": [\\n              {\\n                \\"Type\\": \\"REGULAR_EXPRESSION\\",\\n                \\"Oid\\": \\"8\\",\\n                \\"OperName\\": \\"operator demo\\",\\n                \\"Param\\": {\\n                  \\"DifferentRole\\": true,\\n                  \\"Regex\\": \\".*修改密码.*\\",\\n                  \\"TargetRole\\": \\"客户\\",\\n                  \\"VelocityInMint\\": 280,\\n                  \\"Average\\": true,\\n                  \\"KeywordExtension\\": true,\\n                  \\"Score\\": 80,\\n                  \\"NotRegex\\": \\"发一下|告诉我\\",\\n                  \\"CompareOperator\\": \\"gt\\",\\n                  \\"DelayTime\\": 1000,\\n                  \\"KeywordMatchSize\\": 3,\\n                  \\"HitTime\\": 1,\\n                  \\"BeginType\\": \\"DIALOGUE\\",\\n                  \\"Target\\": 1,\\n                  \\"MaxEmotionChangeValue\\": 8,\\n                  \\"Threshold\\": 4,\\n                  \\"From\\": 3,\\n                  \\"FromEnd\\": true,\\n                  \\"MinWordSize\\": 4,\\n                  \\"InSentence\\": true,\\n                  \\"Phrase\\": \\"xxx\\",\\n                  \\"Similarity_threshold\\": 90,\\n                  \\"CheckType\\": 1,\\n                  \\"Interval\\": 5000,\\n                  \\"ContextChatMatch\\": true,\\n                  \\"Excludes\\": {\\n                    \\"Excludes\\": [\\n                      \\"[“好的”]\\"\\n                    ]\\n                  },\\n                  \\"AntModelInfo\\": {\\n                    \\"AntModelInfo\\": [\\n                      \\"xx\\"\\n                    ]\\n                  },\\n                  \\"Pvalues\\": {\\n                    \\"Pvalues\\": [\\n                      \\"xx\\"\\n                    ]\\n                  },\\n                  \\"References\\": {\\n                    \\"Reference\\": [\\n                      \\"[“优惠力度特别大”,”特别的优惠”]\\"\\n                    ]\\n                  },\\n                  \\"SimilarlySentences\\": {\\n                    \\"SimilarlySentence\\": [\\n                      \\"[“优惠力度特别大”,”特别的优惠”]\\"\\n                    ]\\n                  },\\n                  \\"OperKeyWords\\": {\\n                    \\"OperKeyWord\\": [\\n                      \\"[“你好”,”您好”,”上午好”]\\"\\n                    ]\\n                  }\\n                }\\n              }\\n            ]\\n          },\\n          \\"CheckRange\\": {\\n            \\"Absolute\\": true,\\n            \\"Role\\": \\"客服\\",\\n            \\"Anchor\\": {\\n              \\"HitTime\\": 1,\\n              \\"Location\\": \\"AFTER\\",\\n              \\"AnchorCid\\": \\"7\\"\\n            },\\n            \\"Range\\": {\\n              \\"To\\": 10,\\n              \\"From\\": 1\\n            }\\n          }\\n        }\\n      ]\\n    },\\n    \\"Rules\\": {\\n      \\"RuleBasicInfo\\": [\\n        {\\n          \\"RuleLambda\\": \\"7&&!8\\",\\n          \\"Rid\\": \\"4\\",\\n          \\"BusinessCategories\\": {\\n            \\"BusinessCategoryBasicInfo\\": [\\n              {\\n                \\"BusinessName\\": \\"业务A\\",\\n                \\"ServiceType\\": 1,\\n                \\"Bid\\": 264971810\\n              }\\n            ]\\n          },\\n          \\"Triggers\\": {\\n            \\"Trigger\\": [\\n              \\"[\\\\\\"7\\\\\\",\\\\\\"8\\\\\\"]\\"\\n            ]\\n          }\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetRuleDetailResponse>\\r\\n    <code>200</code>\\r\\n    <data>\\r\\n        <conditions>\\r\\n            <checkRange>\\r\\n                <anchor/>\\r\\n                <range>\\r\\n                    <from>1</from>\\r\\n                    <to>-1</to>\\r\\n                </range>\\r\\n                <role>客服</role>\\r\\n            </checkRange>\\r\\n            <conditionInfoCid>7</conditionInfoCid>\\r\\n            <operLambda>7</operLambda>\\r\\n            <operators>\\r\\n                <oid>7</oid>\\r\\n                <operName>operator demo</operName>\\r\\n                <param>\\r\\n                    <inSentence>false</inSentence>\\r\\n                    <regex>.*告诉.*密码.*</regex>\\r\\n                </param>\\r\\n                <type>REGULAR_EXPRESSION</type>\\r\\n            </operators>\\r\\n        </conditions>\\r\\n        <conditions>\\r\\n            <checkRange>\\r\\n                <anchor>\\r\\n                    <anchorCid>7</anchorCid>\\r\\n                    <location>AFTER</location>\\r\\n                </anchor>\\r\\n                <range>\\r\\n                    <from>1</from>\\r\\n                    <to>-1</to>\\r\\n                </range>\\r\\n                <role>客服</role>\\r\\n            </checkRange>\\r\\n            <conditionInfoCid>8</conditionInfoCid>\\r\\n            <operLambda>8</operLambda>\\r\\n            <operators>\\r\\n                <oid>8</oid>\\r\\n                <operName>operator demo</operName>\\r\\n                <param>\\r\\n                    <inSentence>false</inSentence>\\r\\n                    <regex>.*修改密码.*</regex>\\r\\n                </param>\\r\\n                <type>REGULAR_EXPRESSION</type>\\r\\n            </operators>\\r\\n        </conditions>\\r\\n        <rules>\\r\\n            <rid>4</rid>\\r\\n            <ruleLambda>7 &amp;&amp; !8</ruleLambda>\\r\\n            <business>\\r\\n                <bid>264971810</bid>\\r\\n                <name>业务A</name>\\r\\n            </business>\\r\\n            <business>\\r\\n                <bid>386664996</bid>\\r\\n                <name>业务B</name>\\r\\n            </business>\\r\\n            <triggers>7</triggers>\\r\\n            <triggers>8</triggers>\\r\\n        </rules>\\r\\n    </data>\\r\\n    <message>successful</message>\\r\\n    <requestId>04CF046A-0F5E-442E-9D6C-1B4F1DCAC5C2</requestId>\\r\\n    <success>true</success>\\r\\n</GetRuleDetailResponse>","errorExample":""}]',
      'title' => '获取规则的明细信息',
      'summary' => '获取规则的明细信息。',
      'description' => '> 一般和[获取规则基本信息](~~142333~~)联合使用，先用**GetRule**获取规则ID，再以规则ID为参数获取规则详情。',
      'requestParamsDescription' => '**请求参数Json字符串信息**
| 属性|  值类型  |  是否必须   |   说明    |
|:---------|:-------|:---------|:---------|
|  ruleIds | `List<String>` |  否  |   规则标识ID，若指定此参数，则忽略其它参数   |
|  businessCategoryName | `List<String>` |  否  |   所属业务分类名称   |',
      'extraInfo' => ' ',
    ),
    'GetRule' => 
    array (
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"ruleIds":"123"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F190ADE9-619A-447D-84E3-7E241A5C428E',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：**true**表示成功；**false/null**表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Rules' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RuleInfo' => 
                      array (
                        'description' => '分析结果信息列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '规则列表。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Status' => 
                            array (
                              'description' => '状态，可能值：0：待生效，1：生效中，2：已失效。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                            'Type' => 
                            array (
                              'description' => '【已废弃】规则类型',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                            'ScoreSubId' => 
                            array (
                              'description' => '评分小项id。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '22',
                            ),
                            'IsOnline' => 
                            array (
                              'description' => '【已废弃】是否已经上线，0：未上线；1：已上线。目前值固定为1.',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                            'CreateTime' => 
                            array (
                              'description' => '创建时间',
                              'type' => 'string',
                              'example' => '2016-08-05 10:37:10',
                            ),
                            'CreateEmpid' => 
                            array (
                              'description' => '规则创建者ID',
                              'type' => 'string',
                              'example' => '123',
                            ),
                            'LastUpdateEmpid' => 
                            array (
                              'description' => '最近更新的用户ID',
                              'type' => 'string',
                              'example' => '123',
                            ),
                            'IsDelete' => 
                            array (
                              'description' => '是否删除，可能值：0：未删除，1：已删除。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'Rid' => 
                            array (
                              'description' => '规则ID',
                              'type' => 'string',
                              'example' => '4',
                            ),
                            'RuleScoreType' => 
                            array (
                              'description' => '是否计分，可能值：1：不计分，3：计分。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                            'EndTime' => 
                            array (
                              'description' => '到期时间',
                              'type' => 'string',
                              'example' => '2016-08-05 10:37:10',
                            ),
                            'Weight' => 
                            array (
                              'description' => '【已废弃】规则权重',
                              'type' => 'string',
                              'example' => '1',
                            ),
                            'StartTime' => 
                            array (
                              'description' => '开始时间',
                              'type' => 'string',
                              'example' => '2016-08-05 10:37:10',
                            ),
                            'RuleLambda' => 
                            array (
                              'description' => '【已废弃】规则条件间关系',
                              'type' => 'string',
                              'example' => 'a && b',
                            ),
                            'ScoreSubName' => 
                            array (
                              'description' => '评分子项名称，当`ruleScoreType=3`时存在。',
                              'type' => 'string',
                              'example' => '评分子项',
                            ),
                            'AutoReview' => 
                            array (
                              'description' => '审核选项，可能值：1：不自动审核，3：自动审核。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                            'Comments' => 
                            array (
                              'description' => '备注',
                              'type' => 'string',
                              'example' => '测试规则',
                            ),
                            'LastUpdateTime' => 
                            array (
                              'description' => '最近更新时间',
                              'type' => 'string',
                              'example' => '2019-10-28 14:23:28',
                            ),
                            'ScoreName' => 
                            array (
                              'description' => '评分大项名称，当`ruleScoreType=3`时存在。',
                              'type' => 'string',
                              'example' => '评分大项',
                            ),
                            'Name' => 
                            array (
                              'description' => '规则名称',
                              'type' => 'string',
                              'example' => 'demo',
                            ),
                            'ScoreId' => 
                            array (
                              'description' => '评分大项ID。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '123',
                            ),
                            'BusinessCategoryNameList' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'BusinessCategoryNameList' => 
                                array (
                                  'description' => '所属业务分类列表',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '所属业务分类列表',
                                    'type' => 'string',
                                    'example' => '["业务A","业务B"]',
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
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'Qualitycheck::2019-01-15::GetRuleV4',
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"F190ADE9-619A-447D-84E3-7E241A5C428E\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Rules\\": {\\n      \\"RuleInfo\\": [\\n        {\\n          \\"Status\\": 1,\\n          \\"Type\\": 1,\\n          \\"ScoreSubId\\": 22,\\n          \\"IsOnline\\": 1,\\n          \\"CreateTime\\": \\"2016-08-05 10:37:10\\",\\n          \\"CreateEmpid\\": \\"123\\",\\n          \\"LastUpdateEmpid\\": \\"123\\",\\n          \\"IsDelete\\": 0,\\n          \\"Rid\\": \\"4\\",\\n          \\"RuleScoreType\\": 1,\\n          \\"EndTime\\": \\"2016-08-05 10:37:10\\",\\n          \\"Weight\\": \\"1\\",\\n          \\"StartTime\\": \\"2016-08-05 10:37:10\\",\\n          \\"RuleLambda\\": \\"a && b\\",\\n          \\"ScoreSubName\\": \\"评分子项\\",\\n          \\"AutoReview\\": 1,\\n          \\"Comments\\": \\"测试规则\\",\\n          \\"LastUpdateTime\\": \\"2019-10-28 14:23:28\\",\\n          \\"ScoreName\\": \\"评分大项\\",\\n          \\"Name\\": \\"demo\\",\\n          \\"ScoreId\\": 123,\\n          \\"BusinessCategoryNameList\\": {\\n            \\"BusinessCategoryNameList\\": [\\n              \\"[\\\\\\"业务A\\\\\\",\\\\\\"业务B\\\\\\"]\\"\\n            ]\\n          }\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetRuleResponse>\\r\\n    <code>200</code>\\r\\n    <data>\\r\\n        <rules>\\r\\n            <createTime>2016-08-05 10:37:10</createTime>\\r\\n            <businessCategoryNameList>业务A</businessCategoryNameList>\\r\\n            <businessCategoryNameList>业务B</businessCategoryNameList>\\r\\n            <isDelete>0</isDelete>\\r\\n            <name>demo</name>\\r\\n            <rid>4</rid>\\r\\n            <status>1</status>\\r\\n            <autoReview>1</autoReview>\\r\\n            <ruleScoreType>1</ruleScoreType>\\r\\n            <scoreName>评分大项</scoreName>\\r\\n            <scoreSubName>评分子项</scoreSubName>\\r\\n        </rules>\\r\\n    </data>\\r\\n    <message>successful</message>\\r\\n    <requestId>F190ADE9-619A-447D-84E3-7E241A5C428E</requestId>\\r\\n    <success>true</success>\\r\\n</GetRuleResponse>","errorExample":""}]',
      'title' => '获取规则的基本信息',
      'summary' => '获取规则的基本信息。',
      'description' => '> 该接口返回的规则**id**和**name**等基本信息，可以和 [获取规则详情](~~142310~~) 配合使用。',
      'requestParamsDescription' => '**请求参数Json字符串信息**
| 属性|  值类型  |  是否必须   |   说明    |
|:---------|:-------|:---------|:---------|
|  ruleIds |  `List<String>` |  否  |   规则标识ID，多个ID以逗号分隔。   |
|  businessCategoryName | `List<String>` |  否  |   所属业务分类名称   |
|  status | Integer |  否  |   状态，可选值：0：待生效，1：生效中，2：已失效，3：全部。默认值为1。|',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListRules' => 
    array (
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一个JSON格式的字符串，完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"pageNumber":1,"pageSize":10}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '82C91484-B2D5-4D2A-A21F-A6D73F**	',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，200表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'PageNumber' => 
              array (
                'description' => '规则列表页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Count' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'Data' => 
              array (
                'description' => '规则列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '规则列表',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'description' => '规则所属的规则类型的type值。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'RuleType' => 
                    array (
                      'description' => '规则类别，可能值：
- 1：自定义创建的规则
- 0：系统预置规则',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '规则的创建时间。',
                      'type' => 'string',
                      'example' => '2020-04-20T20:10Z',
                    ),
                    'Comments' => 
                    array (
                      'description' => '规则的备注信息。',
                      'type' => 'string',
                      'example' => '检测是否出现了禁用语',
                    ),
                    'TypeName' => 
                    array (
                      'description' => '规则所属的规则类型的名称。',
                      'type' => 'string',
                      'example' => '服务规范',
                    ),
                    'Name' => 
                    array (
                      'description' => '规则名称。',
                      'type' => 'string',
                      'example' => '禁用语检测',
                    ),
                    'Rid' => 
                    array (
                      'description' => '规则ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1234567',
                    ),
                    'BusinessCategoryNameList' => 
                    array (
                      'description' => '规则所关联的适用业务名称。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '规则所关联的适用业务名称。',
                        'type' => 'string',
                        'example' => '["所有业务"]',
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
        'substitutions' => 
        array (
          0 => 'Qualitycheck::2019-01-15::ListRulesV4',
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"82C91484-B2D5-4D2A-A21F-A6D73F**\\\\t\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"Count\\": 20,\\n  \\"Data\\": [\\n    {\\n      \\"Type\\": 1,\\n      \\"RuleType\\": 1,\\n      \\"CreateTime\\": \\"2020-04-20T20:10Z\\",\\n      \\"Comments\\": \\"检测是否出现了禁用语\\",\\n      \\"TypeName\\": \\"服务规范\\",\\n      \\"Name\\": \\"禁用语检测\\",\\n      \\"Rid\\": 1234567,\\n      \\"BusinessCategoryNameList\\": [\\n        \\"[\\\\\\"所有业务\\\\\\"]\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListRulesResponse>\\n    <RequestId>51330D59-DF7B-4768-8123-E8C3****</RequestId>\\n    <Message>successful</Message>\\n    <PageSize>2</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <Data>\\n        <Type>1</Type>\\n        <TypeName>服务规范</TypeName>\\n        <Comments>23423</Comments>\\n        <CreateTime>2020-04-20T20:10Z</CreateTime>\\n        <RuleType>1</RuleType>\\n        <Rid>12345678</Rid>\\n        <OperationMode>1</OperationMode>\\n        <Name>禁用语检测</Name>\\n        <BusinessCategoryNameList>所有业务</BusinessCategoryNameList>\\n    </Data>\\n    <Data>\\n        <Type>1</Type>\\n        <TypeName>服务规范</TypeName>\\n        <Comments>111</Comments>\\n        <CreateTime>2020-04-20T10:38Z</CreateTime>\\n        <RuleType>1</RuleType>\\n        <Rid>12345679</Rid>\\n        <OperationMode>1</OperationMode>\\n        <Name>开头语不完整</Name>\\n        <BusinessCategoryNameList>所有业务</BusinessCategoryNameList>\\n    </Data>\\n    <Count>891</Count>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListRulesResponse>","errorExample":""}]',
      'title' => '获取规则列表',
      'summary' => '获取规则列表。',
      'requestParamsDescription' => '**请求参数Json字符串信息**
| 属性| 值类型|是否必须|示例值|说明|
|:---------|:-------|:---------|:---------|:---------|
| pageNumber| Integer| 是  |  1 | 当前页码，起始值：1。 |
| pageSize| Integer| 是  |  10  |分页查询时设置的每页行数。 |
| rid| Integer| 否  | 1234567  |规则ID。 |
| ruleName| String| 否  |  “禁用语检测”  |规则名称。 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'InvalidRule' => 
    array (
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"ruleIds":[3,4]}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功。若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Data' => 
              array (
                'description' => '是否删除成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '9987D326-83D9-4A42-B9A5-0B27F9B40539',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。调用方可根据此字段来判断请求是否成功：**true**表示成功**false/null**表示失败.',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'Qualitycheck::2019-01-15::DeleteRuleV4',
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"9987D326-83D9-4A42-B9A5-0B27F9B40539\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<InvalidRuleResponse>\\r\\n    <message>successful</message>\\r\\n    <requestId>9987D326-83D9-4A42-B9A5-0B27F9B40539</requestId>\\r\\n    <data>true</data>\\r\\n    <code>200</code>\\r\\n    <success>true</success>\\r\\n</InvalidRuleResponse>","errorExample":""}]',
      'title' => '删除规则',
      'summary' => '删除规则。',
      'requestParamsDescription' => '**请求参数Json字符串信息**
| 属性|  值类型  |  是否必须   |   说明    |
|:---------|:-------|:---------|:---------|
|  ruleIds | `List<String>` |  是  |   规则标识ID   |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateSubScoreForApi' => 
    array (
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"scoreId":5119,"scoreSubId":2342,"scoreSubName":"不耐心","scoreType":3,"scoreNum": 10}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '9987D326-83Q9-4A42-B9A5-0B27F9B40539',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：**true**表示成功；**false/null**表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"9987D326-83Q9-4A42-B9A5-0B27F9B40539\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateSubScoreForApiResponse>\\r\\n    <code>200</code>\\r\\n    <message>successful</message>\\r\\n    <requestId>9987D326-83Q9-4A42-B9A5-0B27F9B40539</requestId>\\r\\n    <success>true</success>\\r\\n</UpdateSubScoreForApiResponse>","errorExample":""}]',
      'title' => '编辑评分子项',
      'summary' => '编辑评分子项。',
      'requestParamsDescription' => '**请求参数JSON字符串信息**
| 属性|  值类型  |  是否必须   |   说明    |
|:---------|:-------|:---------|:---------|
|  scoreSubId | Long |  是  |   评分小项ID   |
|  scoreSubName | String|  是  |   评分小项名称   |
|  scoreNum | Integer |  是  |   分数   |
|  scoreType | Byte |  是  |   分值类型。1加分，3减分。   |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateScoreForApi' => 
    array (
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"scoreId":3311,” scoreName“:"测试"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '6987D326-83D9-4A42-B9A5-0B27F9B40539',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：**true**表示成功；**false/null**表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"6987D326-83D9-4A42-B9A5-0B27F9B40539\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateScoreForApiResponse>\\r\\n    <code>200</code>\\r\\n    <message>successful</message>\\r\\n    <requestId>6987D326-83D9-4A42-B9A5-0B27F9B40539</requestId>\\r\\n    <success>true</success>\\r\\n</UpdateScoreForApiResponse>","errorExample":""}]',
      'title' => '编辑评分大项',
      'summary' => '编辑评分大项。',
      'requestParamsDescription' => '**请求参数JSON字符串信息**
| 属性|  值类型  |  是否必须   |   说明    |
|:---------|:-------|:---------|:---------|
|  scoreId | Long |  是  |   评分ID   |
|  scoreName | String |  是  |   评分大项名称   |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'InsertSubScoreForApi' => 
    array (
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"scoreId":5119,"scoreSubName":"不耐心","scoreType":3,"scoreNum": 10}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D34079C5-AA2F-490E-ADD8-5BFF08AAE207',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：**true**表示成功；**false/null**表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '用户信息',
                'type' => 'object',
                'properties' => 
                array (
                  'ScoreSubId' => 
                  array (
                    'description' => '评分小项ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '5730',
                  ),
                  'ScoreSubName' => 
                  array (
                    'description' => '评分小项名称',
                    'type' => 'string',
                    'example' => '评分小项',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"D34079C5-AA2F-490E-ADD8-5BFF08AAE207\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"ScoreSubId\\": 5730,\\n    \\"ScoreSubName\\": \\"评分小项\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<InsertSubScoreForApiResponse>\\r\\n    <code>200</code>\\r\\n    <data>\\r\\n        <scoreSubId>5730</scoreSubId>\\r\\n        <scoreSubName>评分小项</scoreSubName>\\r\\n    </data>\\r\\n    <message>successful</message>\\r\\n    <requestId>D34079C5-AA2F-490E-ADD8-5BFF08AAE207</requestId>\\r\\n    <success>true</success>\\r\\n</InsertSubScoreForApiResponse>","errorExample":""}]',
      'title' => '创建评分小项',
      'summary' => '创建评分小项。',
      'requestParamsDescription' => '**请求参数JSON字符串信息**
| 属性|  值类型  |  是否必须   |   说明    |
|:---------|:-------|:---------|:---------|
|  scoreId | Long |  是  |   评分大项ID   |
|  scoreSubName | String|  是  |   评分小项名称   |
|  scoreNum | Integer |  是  |   分数   |
|  scoreType | Byte |  是  |   分值类型，1表示加分，3表示减分   |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'InsertScoreForApi' => 
    array (
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"scoreName":"评分大项名称"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '96138D8D-8D26-4E41-BFF4-77AED1088BBD',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：**true**表示成功；**false/null**表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '用户信息',
                'type' => 'object',
                'properties' => 
                array (
                  'ScoreId' => 
                  array (
                    'description' => '评分ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '5728',
                  ),
                  'ScoreName' => 
                  array (
                    'description' => '评分大项名称',
                    'type' => 'string',
                    'example' => '评分大项',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"96138D8D-8D26-4E41-BFF4-77AED1088BBD\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"ScoreId\\": 5728,\\n    \\"ScoreName\\": \\"评分大项\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<InsertScoreForApiResponse>\\r\\n    <code>200</code>\\r\\n    <data>\\r\\n        <scoreId>5728</scoreId>\\r\\n        <scoreName>评分大项</scoreName>\\r\\n    </data>\\r\\n    <message>successful</message>\\r\\n    <requestId>96138D8D-8D26-4E41-BFF4-77AED1088BBD</requestId>\\r\\n    <success>true</success>\\r\\n</InsertScoreForApiResponse>","errorExample":""}]',
      'title' => '创建评分大项',
      'summary' => '创建评分大项。',
      'requestParamsDescription' => '**请求参数JSON字符串信息**
| 属性|  值类型  |  是否必须   |   说明    |
|:---------|:-------|:---------|:---------|
|  scoreName | String|  是  |   评分大项名称   |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetScoreInfo' => 
    array (
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目前暂不支持分页查询，传值传空字符串即可。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '""',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。
',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '106C6CA0-282D-4AF7-85F0-D2D24***',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ScorePo' => 
                  array (
                    'description' => '详细返回数据。
',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ScoreId' => 
                        array (
                          'description' => '评分大项ID。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '34',
                        ),
                        'ScoreName' => 
                        array (
                          'description' => '评分大项名称。',
                          'type' => 'string',
                          'example' => '服务规范',
                        ),
                        'ScoreInfos' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ScoreParam' => 
                            array (
                              'description' => '评分小项信息。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'ScoreSubName' => 
                                  array (
                                    'description' => '评分小项名称。',
                                    'type' => 'string',
                                    'example' => '回复生硬',
                                  ),
                                  'ScoreNum' => 
                                  array (
                                    'description' => '分数值。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '32',
                                  ),
                                  'ScoreSubId' => 
                                  array (
                                    'description' => '评分小项ID。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '3422',
                                  ),
                                  'ScoreType' => 
                                  array (
                                    'description' => '分值类型，加分或减分，可能值：1加分；3减分。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '1',
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
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"106C6CA0-282D-4AF7-85F0-D2D24***\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"ScorePo\\": [\\n      {\\n        \\"ScoreId\\": 34,\\n        \\"ScoreName\\": \\"服务规范\\",\\n        \\"ScoreInfos\\": {\\n          \\"ScoreParam\\": [\\n            {\\n              \\"ScoreSubName\\": \\"回复生硬\\",\\n              \\"ScoreNum\\": 32,\\n              \\"ScoreSubId\\": 3422,\\n              \\"ScoreType\\": 1\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetScoreInfoResponse>\\n    <Message>successful</Message>\\n    <RequestId>EB01750D-AAEB-4152-8B52-54113F***</RequestId>\\n    <Data>\\n        <ScorePo>\\n            <ScoreInfos>\\n                <ScoreParam>\\n                    <ScoreSubName>确认不必要信息</ScoreSubName>\\n                    <ScoreSubId>1181</ScoreSubId>\\n                    <ScoreType>3</ScoreType>\\n                    <ScoreNum>5</ScoreNum>\\n                </ScoreParam>\\n            </ScoreInfos>\\n            <ScoreName>问题定位</ScoreName>\\n            <ScoreId>-1</ScoreId>\\n        </ScorePo>\\n        <ScorePo>\\n            <ScoreInfos>\\n                <ScoreParam>\\n                    <ScoreSubName>没理解客户问题</ScoreSubName>\\n                    <ScoreSubId>1183</ScoreSubId>\\n                    <ScoreType>3</ScoreType>\\n                    <ScoreNum>5</ScoreNum>\\n                </ScoreParam>\\n                <ScoreParam>\\n                    <ScoreSubName>处理出错导致客户不满意</ScoreSubName>\\n                    <ScoreSubId>1184</ScoreSubId>\\n                    <ScoreType>3</ScoreType>\\n                    <ScoreNum>5</ScoreNum>\\n                </ScoreParam>\\n                <ScoreParam>\\n                    <ScoreSubName>处理出错未纠正</ScoreSubName>\\n                    <ScoreSubId>1185</ScoreSubId>\\n                    <ScoreType>3</ScoreType>\\n                    <ScoreNum>5</ScoreNum>\\n                </ScoreParam>\\n                <ScoreParam>\\n                    <ScoreSubName>漏答引起客户不满</ScoreSubName>\\n                    <ScoreSubId>1186</ScoreSubId>\\n                    <ScoreType>3</ScoreType>\\n                    <ScoreNum>5</ScoreNum>\\n                </ScoreParam>\\n                <ScoreParam>\\n                    <ScoreSubName>提醒不到位</ScoreSubName>\\n                    <ScoreSubId>1187</ScoreSubId>\\n                    <ScoreType>3</ScoreType>\\n                    <ScoreNum>5</ScoreNum>\\n                </ScoreParam>\\n                <ScoreParam>\\n                    <ScoreSubName>未结合上下文</ScoreSubName>\\n                    <ScoreSubId>1188</ScoreSubId>\\n                    <ScoreType>3</ScoreType>\\n                    <ScoreNum>5</ScoreNum>\\n                </ScoreParam>\\n            </ScoreInfos>\\n            <ScoreName>问题解决</ScoreName>\\n            <ScoreId>-6</ScoreId>\\n        </ScorePo>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</GetScoreInfoResponse>","errorExample":""}]',
      'title' => '获取全部评分项信息',
      'summary' => '获取全部评分项信息。',
      'requestParamsDescription' => '
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteSubScoreForApi' => 
    array (
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"scoreSubId":"评分小项id"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '9987D326-83D9-4A42-B9A5-0B27F9B43539',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：**true**表示成功；**false/null**表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"9987D326-83D9-4A42-B9A5-0B27F9B43539\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteSubScoreForApiResponse>\\r\\n    <code>200</code>\\r\\n    <message>successful</message>\\r\\n    <requestId>9987D326-83D9-4A42-B9A5-0B27F9B43539</requestId>\\r\\n    <success>true</success>\\r\\n</DeleteSubScoreForApiResponse>","errorExample":""}]',
      'title' => '删除评分小项',
      'summary' => '删除评分小项。',
      'requestParamsDescription' => '**请求参数JSON字符串信息**
| 属性|  值类型  |  是否必须   |   说明    |
|:---------|:-------|:---------|:---------|
|  scoreSubId | Long |  是  |   评分小项ID   |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteScoreForApi' => 
    array (
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"scoreId":"评分ID"}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功。

> 若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '9987D326-83D9-4A42-B9A5-0B27F9B40539',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。

调用方可根据此字段来判断请求是否成功：

- **true**表示成功
- **false/null**表示失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"9987D326-83D9-4A42-B9A5-0B27F9B40539\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteScoreForApiResponse>\\r\\n    <code>200</code>\\r\\n    <message>successful</message>\\r\\n    <requestId>9987D326-83D9-4A42-B9A5-0B27F9B40539</requestId>\\r\\n    <success>true</success>\\r\\n</DeleteScoreForApiResponse>","errorExample":""}]',
      'title' => '删除评分大项',
      'summary' => '删除评分大项。',
      'requestParamsDescription' => '### 请求参数JSON字符串信息
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| scoreId | Long | 是      | 评分ID |',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 调用示例

```
        DeleteScoreForApiRequest deleteScoreInfoRequest = new DeleteScoreForApiRequest();
        deleteScoreInfoRequest.setAcceptFormat(FormatType.JSON);
        Map<String, Object> callMap = Maps.newHashMap();
        callMap.put("scoreId", scoreId);
        deleteScoreInfoRequest.setJsonStr(JSON.toJSONString(callMap));
        DeleteScoreForApiResponse response = client.getAcsResponse(deleteScoreInfoRequest);
```',
    ),
    'UploadDataSync' => 
    array (
      'summary' => '文本实时质检。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'jsonStr是一个JSON字符串，里面是该接口所有的自定义参数，具体内容参见下方的**jsonStr属性说明**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"tickets":xxx}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为**successful**。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4987D326-83D9-4A42-B9A5-0B27F9B***',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ResultInfo' => 
                  array (
                    'description' => '实时质检结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Score' => 
                        array (
                          'description' => '质检得分，默认为100分，会根据规则所关联的评分项进行加减分。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                        'Rules' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'RuleHitInfo' => 
                            array (
                              'description' => '命中详情。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '规则列表。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Tid' => 
                                  array (
                                    'description' => '文本ID，对应的是请求参数tickets中的tid。',
                                    'type' => 'string',
                                    'example' => '88888888',
                                  ),
                                  'Rid' => 
                                  array (
                                    'description' => '命中的规则ID。',
                                    'type' => 'string',
                                    'example' => '801',
                                  ),
                                  'Hit' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'ConditionHitInfo' => 
                                      array (
                                        'description' => '具体命中位置信息，以句子维度，返回命中句子中具体命中了什么规则中哪个条件，是哪几个字命中的。',
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'type' => 'object',
                                          'properties' => 
                                          array (
                                            'HitKeyWords' => 
                                            array (
                                              'type' => 'object',
                                              'properties' => 
                                              array (
                                                'HitKeyWord' => 
                                                array (
                                                  'description' => '返回当前句中是哪几个字命中了规则，也就是需要高亮展示的关键字。',
                                                  'type' => 'array',
                                                  'items' => 
                                                  array (
                                                    'description' => '条件命中的关键词。',
                                                    'type' => 'object',
                                                    'properties' => 
                                                    array (
                                                      'To' => 
                                                      array (
                                                        'description' => '需要高亮展示的关键字到第几个字符结束，最大值为当句话字符总数减1。高亮的字不包含to，例如一句话为“不可能给你退货的”，from=0，to=3，那么需要高亮的关键字就是“不可能”三个字。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '1',
                                                      ),
                                                      'From' => 
                                                      array (
                                                        'description' => '需要高亮展示的关键字从第几个字符开始，取值范围从0开始，最大值为当句话字符总数减1。高亮的字包含from。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '1',
                                                      ),
                                                      'Val' => 
                                                      array (
                                                        'description' => '具体的关键字内容。',
                                                        'type' => 'string',
                                                        'example' => '嗯',
                                                      ),
                                                      'Tid' => 
                                                      array (
                                                        'description' => '文本ID，对应的是请求参数tickets中的tid。',
                                                        'type' => 'string',
                                                        'example' => '1',
                                                      ),
                                                      'Pid' => 
                                                      array (
                                                        'description' => '当前句子在所有句子中的下标值，即当前句子是请求参数中dialogue数组中的第几个，从0开始。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '1',
                                                      ),
                                                    ),
                                                  ),
                                                ),
                                              ),
                                            ),
                                            'HitCids' => 
                                            array (
                                              'type' => 'object',
                                              'properties' => 
                                              array (
                                                'CidItem' => 
                                                array (
                                                  'description' => '当前句子命中的条件ID的列表。',
                                                  'type' => 'array',
                                                  'items' => 
                                                  array (
                                                    'description' => '当前句子命中的条件ID的列表。',
                                                    'type' => 'string',
                                                    'example' => '["3265"]',
                                                  ),
                                                ),
                                              ),
                                            ),
                                            'Phrase' => 
                                            array (
                                              'description' => '当前命中规则的句子详情。',
                                              'type' => 'object',
                                              'properties' => 
                                              array (
                                                'Words' => 
                                                array (
                                                  'description' => '这个角色说的一句话。',
                                                  'type' => 'string',
                                                  'example' => '你好',
                                                ),
                                                'Identity' => 
                                                array (
                                                  'description' => '对话角色的具体身份标识。',
                                                  'type' => 'string',
                                                  'example' => '1',
                                                ),
                                                'Begin' => 
                                                array (
                                                  'description' => '本句话的开始时间，是相对起始点的开始时间偏移，单位ms。',
                                                  'type' => 'integer',
                                                  'format' => 'int64',
                                                  'example' => '0',
                                                ),
                                                'BeginTime' => 
                                                array (
                                                  'description' => '这句话的开始时间，示例值：2019-11-25 15:37:16。',
                                                  'type' => 'string',
                                                  'example' => '1564574',
                                                ),
                                                'End' => 
                                                array (
                                                  'description' => '本句话的结束时间，是相对起始点的结束时间偏移，单位ms。',
                                                  'type' => 'integer',
                                                  'format' => 'int64',
                                                  'example' => '2090',
                                                ),
                                                'Role' => 
                                                array (
                                                  'description' => '对话内容角色，可能值：客服、客户、系统。',
                                                  'type' => 'string',
                                                  'example' => '客服',
                                                ),
                                              ),
                                            ),
                                          ),
                                        ),
                                      ),
                                    ),
                                  ),
                                  'ConditionInfo' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'ConditionBasicInfo' => 
                                      array (
                                        'description' => '废弃字段，请忽略。',
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'description' => '废弃字段，请忽略。',
                                          'type' => 'object',
                                          'properties' => 
                                          array (
                                            'ConditionInfoCid' => 
                                            array (
                                              'description' => '废弃字段，请忽略。',
                                              'type' => 'string',
                                              'example' => 'xxx',
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
                        'HandScoreIdList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'HandScoreIdList' => 
                            array (
                              'description' => '废弃字段，请忽略。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '废弃字段，请忽略。',
                                'type' => 'string',
                                'example' => '[]',
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
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"4987D326-83D9-4A42-B9A5-0B27F9B***\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"ResultInfo\\": [\\n      {\\n        \\"Score\\": 100,\\n        \\"Rules\\": {\\n          \\"RuleHitInfo\\": [\\n            {\\n              \\"Tid\\": \\"88888888\\",\\n              \\"Rid\\": \\"801\\",\\n              \\"Hit\\": {\\n                \\"ConditionHitInfo\\": [\\n                  {\\n                    \\"HitKeyWords\\": {\\n                      \\"HitKeyWord\\": [\\n                        {\\n                          \\"To\\": 1,\\n                          \\"From\\": 1,\\n                          \\"Val\\": \\"嗯\\",\\n                          \\"Tid\\": \\"1\\",\\n                          \\"Pid\\": 1\\n                        }\\n                      ]\\n                    },\\n                    \\"HitCids\\": {\\n                      \\"CidItem\\": [\\n                        \\"[\\\\\\"3265\\\\\\"]\\"\\n                      ]\\n                    },\\n                    \\"Phrase\\": {\\n                      \\"Words\\": \\"你好\\",\\n                      \\"Identity\\": \\"1\\",\\n                      \\"Begin\\": 0,\\n                      \\"BeginTime\\": \\"1564574\\",\\n                      \\"End\\": 2090,\\n                      \\"Role\\": \\"客服\\"\\n                    }\\n                  }\\n                ]\\n              },\\n              \\"ConditionInfo\\": {\\n                \\"ConditionBasicInfo\\": [\\n                  {\\n                    \\"ConditionInfoCid\\": \\"xxx\\"\\n                  }\\n                ]\\n              }\\n            }\\n          ]\\n        },\\n        \\"HandScoreIdList\\": {\\n          \\"HandScoreIdList\\": [\\n            \\"[]\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UploadDataSyncResponse>\\n    <Message>successful</Message>\\n    <RequestId>4EFC3224-4E25-4019-AD06-63AC0***</RequestId>\\n    <Data>\\n        <ResultInfo>\\n            <Rules>\\n                <RuleHitInfo>\\n                    <Hit>\\n                        <ConditionHitInfo>\\n                            <HitKeyWords>\\n                                <HitKeyWord>\\n                                    <Val>你好</Val>\\n                                    <Pid>1</Pid>\\n                                    <From>2</From>\\n                                    <To>4</To>\\n                                    <Tid>4ef4f8a9-4910-4d46-a348-eabfb***</Tid>\\n                                </HitKeyWord>\\n                            </HitKeyWords>\\n                            <HitCids>\\n                                <CidItem>24196</CidItem>\\n                            </HitCids>\\n                            <Phrase>\\n                                <Role>客服</Role>\\n                                <Words>哎，你好。</Words>\\n                                <Begin>3820</Begin>\\n                                <End>4830</End>\\n                                <Identity>某客服</Identity>\\n                            </Phrase>\\n                        </ConditionHitInfo>\\n                    </Hit>\\n                    <Rid>15589</Rid>\\n                </RuleHitInfo>\\n                <RuleHitInfo>\\n                    <Hit>\\n                        <ConditionHitInfo>\\n                            <HitKeyWords>\\n                                <HitKeyWord>\\n                                    <Val>帮您</Val>\\n                                    <Pid>2</Pid>\\n                                    <From>5</From>\\n                                    <To>7</To>\\n                                    <Tid>4ef4f8a9-4910-4d46-a348-eabfb8e***</Tid>\\n                                </HitKeyWord>\\n                            </HitKeyWords>\\n                            <HitCids>\\n                                <CidItem>28208</CidItem>\\n                            </HitCids>\\n                            <Phrase>\\n                                <Role>客服</Role>\\n                                <Words>有什么可以帮您。</Words>\\n                                <Begin>6770</Begin>\\n                                <End>8540</End>\\n                                <Identity>某客服</Identity>\\n                            </Phrase>\\n                        </ConditionHitInfo>\\n                    </Hit>\\n                    <Rid>18128</Rid>\\n                </RuleHitInfo>\\n            </Rules>\\n            <Tid>4ef4f8a9-4910-4d46-a348-eabfb8***</Tid>\\n        </ResultInfo>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</UploadDataSyncResponse>","errorExample":""}]',
      'title' => '文本实时质检',
      'description' => '将特定格式的待检文本数据推送到SCA，根据用户指定的规则对文本数据进行实时质检分析，并同步返回分析结果。相比于上传文本质检，上传文本质检通常是一个对话结束后，将完整的对话文本上传，而文本实时质检，可以在一个角色讲完一句话或多句话后，就推送到SCA进行分析，实时性更高。特殊说明：
- 如果推送的文本是一个角色的一句话，因为缺少对话上下文，规则中的部分算子会失效，例如上下文重复检查、抢话检查、通话静音检查等。
- 实时质检会同步返回分析结果，SCA不会保存调用记录，所以无法通过API查询质检结果。',
      'requestParamsDescription' => '## jsonStr属性说明：
| 属性 | 值类型 | 是否必须 | 说明 |
| :--- | :--- | :--- | :--- |
| tickets | List | 是 | 待检文本数据信息，一次调用可以上传多段文本数据，详见下方的**tickets属性说明**。 |
| commonRuleIds | List | 否 | 指定规则ID，若不指定，则使用所有规则进行分析，如果规则总数大于100，则最多使用规则列表前100条规则进行分析。强烈建议您指定质检规则，否则每次都使用大量规则进行分析，会增加接口返回的延时。（只能使用离线质检规则，不可使用实时质检规则） |

## tickets 属性说明：
| 属性 | 值类型 | 是否必须 | 说明 |
| :--- | :--- | :--- | :--- |
| tid | String | 是 | 本段文本的ID，可以使用对应的电话或工单数据ID，注意不要重复。 |
| dialogue | List | 是 | 本段文本对话的详细内容，详见下方的**dialogue属性说明**。 |

## dialogue 属性说明：
| 属性 | 值类型 | 是否必须 | 说明 |
| :--- | :--- | :--- | :--- |
| role | String | 是 | 对话内容角色，取值：客服、客户。 |
| identity | String | 否 | 对话角色的具体身份标识。 |
| words | String | 是 | 这个角色说的一句话。 |
| begin | Integer | 是 | 本句话的开始时间，是相对起始点的开始时间偏移，单位ms。 |
| end | Integer | 是 | 本句话的结束时间，是相对起始点的结束时间偏移，单位ms。 |
| beginTime | Date | 是 | 这句话的开始时间，示例值：2019-11-25 15:37:16。 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateUser' => 
    array (
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
      'deprecated' => true,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'JSON数组格式，可一次性添加多个用户，详见下方请求入参示例。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '[{"userName":"zhangsan","aliUid":"2498141917****","displayName":"张三","description":"","roleName":"QUALITY_INSPECTOR"}]',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，200表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。

',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '82C91484-B2D5-4D2A-A21F-A6D73F4***	',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。

',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"82C91484-B2D5-4D2A-A21F-A6D73F4***\\\\t\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateUserResponse>\\n    <Message>successful</Message>\\n    <RequestId>1AAF31DB-A600-4392-8938-CFA0BC****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</CreateUserResponse>","errorExample":""}]',
      'title' => '创建用户',
      'summary' => '添加用户。',
      'description' => '阿里云账号管理体系统一采用RAM（访问控制），在新建用户前，您需要先到[RAM](https://ram.console.aliyun.com)中新建用户，获取到新建用户的UID、用户名、显示名，然后再到智能对话分析中添加用户，也就是将RAM中的用户添加到智能对话分析，使之拥有智能对话分析服务的使用权限。',
      'requestParamsDescription' => '**请求参数JSON数组中每个元素均为json格式对象**
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| userName| String| 是      |用户名 |
| displayName| String| 是      |显示名 |
| aliUid| Integer| 是      |UID |
| roleName| String| 是      |角色名称，可选值：ADMIN管理员；QUALITY_INSPECTOR质检员；AGENT客服 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListUsers' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"pageNumber":1,"pageSize":10}',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '106C6CA0-282D-4AF7-85F0-D2D24F4CE647',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。
',
                'type' => 'string',
                'example' => 'successful',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页显示条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Count' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '12',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'User' => 
                  array (
                    'description' => '详细返回数据。
',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DisplayName' => 
                        array (
                          'description' => '显示名。',
                          'type' => 'string',
                          'example' => 'xxx',
                        ),
                        'UpdateTime' => 
                        array (
                          'description' => '最后更新时间。',
                          'type' => 'string',
                          'example' => '2020-03-11T16:54Z',
                        ),
                        'Description' => 
                        array (
                          'description' => '备注。',
                          'type' => 'string',
                          'example' => 'XXX',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '2020-03-11T16:54Z',
                        ),
                        'LoginUserType' => 
                        array (
                          'description' => '账号类型，可能值：1主账号；2子账号。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'AliUid' => 
                        array (
                          'description' => '用户ID。',
                          'type' => 'string',
                          'example' => '2951869706989****',
                        ),
                        'RoleName' => 
                        array (
                          'description' => '角色，可能值：ADMIN管理员；QUALITY_INSPECTOR质检员；AGENT客服。',
                          'type' => 'string',
                          'example' => 'AGENT',
                        ),
                        'UserName' => 
                        array (
                          'description' => '登录名。',
                          'type' => 'string',
                          'example' => 'xxx',
                        ),
                        'Id' => 
                        array (
                          'description' => '弃用字段，请忽略。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"106C6CA0-282D-4AF7-85F0-D2D24F4CE647\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"Count\\": 12,\\n  \\"Data\\": {\\n    \\"User\\": [\\n      {\\n        \\"DisplayName\\": \\"xxx\\",\\n        \\"UpdateTime\\": \\"2020-03-11T16:54Z\\",\\n        \\"Description\\": \\"XXX\\",\\n        \\"CreateTime\\": \\"2020-03-11T16:54Z\\",\\n        \\"LoginUserType\\": 2,\\n        \\"AliUid\\": \\"2951869706989****\\",\\n        \\"RoleName\\": \\"AGENT\\",\\n        \\"UserName\\": \\"xxx\\",\\n        \\"Id\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListUsersResponse>\\n    <Message>successful</Message>\\n    <PageSize>2</PageSize>\\n    <RequestId>7372059E-C5D1-442D-AFB4-86F0A4D751C2</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Data>\\n        <User>\\n            <RoleName>QUALITY_INSPECTOR</RoleName>\\n            <UserName>pursuing</UserName>\\n            <Description/>\\n            <CreateTime>2020-03-11T16:54Z</CreateTime>\\n            <DisplayName>pursuing</DisplayName>\\n            <UpdateTime>2020-03-11T16:54Z</UpdateTime>\\n            <Id>2777</Id>\\n            <LoginUserType>2</LoginUserType>\\n            <AliUid>2951869706989***</AliUid>\\n        </User>\\n        <User>\\n            <RoleName>QUALITY_INSPECTOR</RoleName>\\n            <UserName>0917reviewer</UserName>\\n            <Description/>\\n            <CreateTime>2020-01-08T21:22Z</CreateTime>\\n            <DisplayName>0917质检员</DisplayName>\\n            <UpdateTime>2020-01-08T21:22Z</UpdateTime>\\n            <Id>957</Id>\\n            <LoginUserType>2</LoginUserType>\\n            <AliUid>25574616870489****</AliUid>\\n        </User>\\n    </Data>\\n    <Count>7</Count>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListUsersResponse>","errorExample":""}]',
      'title' => '获取用户列表',
      'summary' => '获取用户列表。服务地址（Region）请选择为杭州（cn-hangzhou）。',
      'requestParamsDescription' => '## 入参说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| userName| String| 否     | 登录名。|
| displayName| String| 否     |显示名。|
| roleId| Integer| 否     | 角色ID。|
| pageSize| Long| 是      | 每页大小。 |
| pageNumber| String| 是      | 页数。 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateUser' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该接口可批量修改用户的角色，所以入参jsonStr的值是List类型，可参考示例值；完整JSON字符串具体内容参见以下详细信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '[{"aliUid":"2951869706989****","roleName":"ADMIN"},{"aliUid":"2557461687048****","roleName":"ADMIN"}]',
          ),
        ),
        1 => 
        array (
          'name' => 'BaseMeAgentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间Id',
            'description' => '业务空间Id',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '结果代码，**200**表示成功，若为别的值则表示失败，调用方可根据此字段判断失败原因。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '出错时表示出错详情，成功时为successful。
',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '106C6CA0-282D-4AF7-85F0-D2D24F4CE647',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，调用方可根据此字段来判断请求是否成功：true表示成功；false/null表示失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"106C6CA0-282D-4AF7-85F0-D2D24F4CE647\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateUserResponse>\\n    <Message>successful</Message>\\n    <RequestId>65CF64B5-4D9D-4D9E-A91D-3CA1C63FBF1E</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</UpdateUserResponse>","errorExample":""}]',
      'title' => '编辑用户',
      'summary' => '编辑用户，可以批量修改用户的角色。',
      'description' => '编辑用户时仅支持修改角色，不支持修改其他信息，原因是阿里云所有产品使用的都是统一的账号管理系统，智能对话分析只是来使用账号，如需修改账号信息，需要到[访问控制RAM](https://ram.console.aliyun.com/)进行修改。',
      'requestParamsDescription' => '## 入参说明
| 属性| 值类型|是否必须|说明|
|:---------|:-------|:---------|:---------|
| aliUid| Integer| 是      | 用户ID。 |
| roleName| String| 是      | 角色，可选值：ADMIN管理员；QUALITY_INSPECTOR质检员；AGENT客服。 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'qualitycheck.cn-hangzhou.aliyuncs.com',
    ),
  ),
);
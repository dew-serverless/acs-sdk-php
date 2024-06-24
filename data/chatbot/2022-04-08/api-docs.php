<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Chatbot',
    'version' => '2022-04-08',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 189601,
      'title' => '文档管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDoc',
        1 => 'DeleteDoc',
        2 => 'UpdateDoc',
        3 => 'RetryDoc',
        4 => 'SearchDoc',
        5 => 'DescribeDoc',
      ),
    ),
    1 => 
    array (
      'id' => 189608,
      'title' => '类目管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateCategory',
        1 => 'DeleteCategory',
        2 => 'UpdateCategory',
        3 => 'DescribeCategory',
        4 => 'ListCategory',
      ),
    ),
    2 => 
    array (
      'id' => 167775,
      'title' => '会话管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ApplyForStreamAccessToken',
        1 => 'Feedback',
        2 => 'Chat',
        3 => 'Associate',
        4 => 'BeginSession',
        5 => 'Nlu',
      ),
    ),
    3 => 
    array (
      'id' => 168180,
      'title' => '全局服务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetAsyncResult',
      ),
    ),
    4 => 
    array (
      'id' => 168037,
      'title' => '机器人管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 168069,
          'title' => '机器人管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateInstance',
            1 => 'DeleteInstance',
            2 => 'UpdateInstance',
            3 => 'LinkInstanceCategory',
            4 => 'DescribeInstance',
            5 => 'ListInstance',
          ),
        ),
        1 => 
        array (
          'id' => 168038,
          'title' => '机器人发布',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateInstancePublishTask',
            1 => 'CancelInstancePublishTask',
            2 => 'ContinueInstancePublishTask',
            3 => 'GetInstancePublishTaskState',
          ),
        ),
      ),
    ),
    5 => 
    array (
      'id' => 167654,
      'title' => 'FAQ管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 168042,
          'title' => 'FAQ答案',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateSolution',
            1 => 'DeleteSolution',
            2 => 'UpdateSolution',
            3 => 'ListSolution',
          ),
        ),
        1 => 
        array (
          'id' => 168043,
          'title' => 'FAQ关联问',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateConnQuestion',
            1 => 'DeleteConnQuestion',
            2 => 'UpdateConnQuestion',
            3 => 'ListConnQuestion',
          ),
        ),
        2 => 
        array (
          'id' => 168045,
          'title' => 'FAQ相似问',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateSimQuestion',
            1 => 'DeleteSimQuestion',
            2 => 'UpdateSimQuestion',
            3 => 'ListSimQuestion',
          ),
        ),
        3 => 
        array (
          'id' => 168046,
          'title' => 'FAQ',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateFaq',
            1 => 'DeleteFaq',
            2 => 'UpdateFaq',
            3 => 'DescribeFaq',
            4 => 'SearchFaq',
          ),
        ),
      ),
    ),
    6 => 
    array (
      'id' => 168050,
      'title' => '对话工厂',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 168103,
          'title' => '实体管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 
            array (
              'id' => 168104,
              'title' => '实体',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'CreateDSEntity',
                1 => 'DeleteDSEntity',
                2 => 'UpdateDSEntity',
                3 => 'DescribeDSEntity',
                4 => 'ListDSEntity',
              ),
            ),
            1 => 
            array (
              'id' => 168105,
              'title' => '实体成员',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'CreateDSEntityValue',
                1 => 'DeleteDSEntityValue',
                2 => 'UpdateDSEntityValue',
                3 => 'ListDSEntityValue',
              ),
            ),
          ),
        ),
        1 => 
        array (
          'id' => 168106,
          'title' => '意图管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 
            array (
              'id' => 168107,
              'title' => '意图',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'CreateIntent',
                1 => 'DeleteIntent',
                2 => 'UpdateIntent',
                3 => 'DescribeIntent',
                4 => 'ListIntent',
              ),
            ),
            1 => 
            array (
              'id' => 168108,
              'title' => '意图话术',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'CreateUserSay',
                1 => 'DeleteUserSay',
                2 => 'UpdateUserSay',
                3 => 'ListUserSay',
              ),
            ),
            2 => 
            array (
              'id' => 168109,
              'title' => '高级语义配置（LGF）',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'CreateLgf',
                1 => 'DeleteLgf',
                2 => 'UpdateLgf',
                3 => 'ListLgf',
              ),
            ),
          ),
        ),
      ),
    ),
    7 => 
    array (
      'id' => 168068,
      'title' => '视角管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreatePerspective',
        1 => 'DeletePerspective',
        2 => 'UpdatePerspective',
        3 => 'DescribePerspective',
        4 => 'QueryPerspectives',
      ),
    ),
    8 => 
    array (
      'id' => 168054,
      'title' => '发布管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreatePublishTask',
        1 => 'CancelPublishTask',
        2 => 'GetPublishTaskState',
      ),
    ),
    9 => 
    array (
      'id' => 168056,
      'title' => '业务空间',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetAgentInfo',
        1 => 'ListAgent',
      ),
    ),
    10 => 
    array (
      'id' => 169501,
      'title' => '渠道聊天窗',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GenerateUserAccessToken',
      ),
    ),
    11 => 
    array (
      'id' => 192374,
      'title' => '数据看板',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListTongyiChatHistorys',
        1 => 'GetBotSessionData',
      ),
    ),
    12 => 
    array (
      'id' => 187838,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'InitIMConnect',
        1 => 'ListSaasInfo',
        2 => 'ListSaasPermissionGroupInfos',
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
    'CreateDoc' => 
    array (
      'summary' => '文档新建',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'operationType' => 'none',
        'riskType' => 'high',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务空间key，不传时访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'CategoryId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文档类目ID',
            'description' => '文档类目ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '30000049006',
          ),
        ),
        2 => 
        array (
          'name' => 'Title',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文档标题',
            'description' => '文档标题',
            'type' => 'string',
            'required' => true,
            'example' => '测试标题',
            'maxLength' => 128,
            'minLength' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'Content',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文档内容',
            'description' => '文档内容，与Url二选一',
            'type' => 'string',
            'required' => false,
            'example' => '测试内容',
          ),
        ),
        4 => 
        array (
          'name' => 'Config',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文档解析/切分配置
配置项：切分器
KEY：Splitter
值选项：ParagraphSplitter-识别层级
值选项：TreeSplitter-规则层级

配置项：文档切块大小
KEY：ChunkSize
VALUE：默认500；范围[200,800]

配置项：规则层级
KEY：TreePatterns
VALUE：默认[]

配置项：文档标题来源
KEY：TitleSource
值选项：ocrTitle - OCR识别标题【默认】
值选项：docName - 文档名即标题',
            'description' => '文档解析/切分配置
配置项：切分器
KEY：Splitter
值选项：ParagraphSplitter-识别层级
值选项：TreeSplitter-规则层级

配置项：文档切块大小
KEY：ChunkSize
VALUE：默认500；范围[200,800]

配置项：规则层级
KEY：TreePatterns
VALUE：默认[]

配置项：文档标题来源
KEY：TitleSource
值选项：ocrTitle - OCR识别标题【默认】
值选项：docName - 文档名即标题',
            'type' => 'string',
            'required' => false,
            'example' => '{"Splitter":"treeSplitter","ChunkSize":500,"TreePatterns":["^# .*","^## .*","^### .*","^#### .*"],"TitleSource":""}',
          ),
        ),
        5 => 
        array (
          'name' => 'Meta',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文档随路数据',
            'description' => '文档随路数据',
            'type' => 'string',
            'required' => false,
            'example' => '{"code":"xxx"}',
          ),
        ),
        6 => 
        array (
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '生效开始时间',
            'description' => '生效开始时间UTC',
            'type' => 'string',
            'required' => false,
            'example' => '2022-05-25T16:28:36Z
',
          ),
        ),
        7 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '生效结束时间',
            'description' => '生效结束时间UTC',
            'type' => 'string',
            'required' => false,
            'example' => '2032-05-25T16:28:36Z
',
          ),
        ),
        8 => 
        array (
          'name' => 'Url',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '文档链接URL路径 ',
            'description' => '文档链接URL路径，与Content二选一，支持txt、pdf、markdown、doc、docx格式（单个文件：最多100页，txt小于200K，pdf小于100M，markdown小于200K，doc小于100M，docx小于100M）',
            'type' => 'string',
            'required' => false,
            'example' => 'https://example.com/example.pdf',
          ),
        ),
        9 => 
        array (
          'name' => 'TagIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '标签ID列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签ID',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '1201',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '07B270A4-61D8-57F6-A609-A3C216CFB872',
              ),
              'KnowledgeId' => 
              array (
                'description' => '知识ID
',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '30001905617',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '',
      'title' => '文档新建',
    ),
    'DeleteDoc' => 
    array (
      'summary' => '删除文档',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'KnowledgeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '知识ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '30001905617',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'DFB71B34-4188-4EA2-9988-EF3014E75910',
              ),
              'KnowledgeId' => 
              array (
                'description' => '知识ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '30002406051',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '',
      'title' => '删除文档',
    ),
    'UpdateDoc' => 
    array (
      'summary' => '更新文档',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'operationType' => 'none',
        'riskType' => 'high',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'KnowledgeId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文档ID',
            'description' => '文档ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '30001905617',
          ),
        ),
        2 => 
        array (
          'name' => 'CategoryId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文档类目ID',
            'description' => '文档类目ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '231001028593',
          ),
        ),
        3 => 
        array (
          'name' => 'DocName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文档名称',
            'description' => '文档名称',
            'type' => 'string',
            'required' => false,
            'example' => '文档问答模块功能说明文档',
            'maxLength' => 128,
            'minLength' => 1,
          ),
        ),
        4 => 
        array (
          'name' => 'Title',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文档标题',
            'description' => '文档标题',
            'type' => 'string',
            'required' => false,
            'example' => '文档问答功能说明',
            'maxLength' => 128,
            'minLength' => 1,
          ),
        ),
        5 => 
        array (
          'name' => 'Content',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文档内容',
            'description' => '文档内容',
            'type' => 'string',
            'required' => false,
            'example' => '文档内容',
            'maxLength' => 40000,
          ),
        ),
        6 => 
        array (
          'name' => 'Config',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文档解析/切分配置
配置项：切分器
KEY：Splitter
值选项：ParagraphSplitter-识别层级【默认】
值选项：TreeSplitter-规则层级

配置项：文档切块大小
KEY：ChunkSize
VALUE：默认500；范围[200,800]

配置项：规则层级
KEY：TreePatterns
VALUE：默认[]

配置项：文档标题来源
KEY：TitleSource
值选项：ocrTitle - OCR识别标题【默认】
值选项：docName - 文档名即标题',
            'description' => '文档解析/切分配置
配置项：切分器
KEY：Splitter
值选项：paragraphSplitter-识别层级【默认】
值选项：treeSplitter-规则层级

配置项：文档切块大小
KEY：ChunkSize
VALUE：默认500；范围[200,800]

配置项：规则层级
KEY：TreePatterns
VALUE：默认[]

配置项：文档标题来源
KEY：TitleSource
值选项：ocrTitle - OCR识别标题【默认】
值选项：docName - 文档名即标题',
            'type' => 'string',
            'required' => false,
            'example' => '{"Splitter":"treeSplitter","ChunkSize":500,"TreePatterns":["^# .*","^## .*","^### .*","^#### .*"],"TitleSource":""}',
          ),
        ),
        7 => 
        array (
          'name' => 'Meta',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文档随路数据',
            'description' => '文档随路数据',
            'type' => 'string',
            'required' => false,
            'example' => '{"code":"xxx"}',
            'maxLength' => 1000,
          ),
        ),
        8 => 
        array (
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始生效时间',
            'type' => 'string',
            'required' => false,
            'example' => '2022-05-25T16:28:36Z',
          ),
        ),
        9 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束生效时间',
            'type' => 'string',
            'required' => false,
            'example' => '2023-03-11T23:59:59Z',
          ),
        ),
        10 => 
        array (
          'name' => 'TagIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '标签ID列表，为空时解除绑定',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签ID',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '1201',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '0F9F136A-1BF6-5CC1-9D57-9717761F03B8',
              ),
              'KnowledgeId' => 
              array (
                'description' => '知识ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '30002406051',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '',
      'title' => '更新文档',
    ),
    'RetryDoc' => 
    array (
      'summary' => '文档重试',
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
        'operationType' => 'none',
        'riskType' => 'high',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务空间key，不传时访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'e2a20f74cd9042558002c0f7dc873739_p_outbound_public',
          ),
        ),
        1 => 
        array (
          'name' => 'KnowledgeId',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '知识ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '30001905617',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '6419BA93-D111-5225-8998-13E63E6D3940',
              ),
              'KnowledgeId' => 
              array (
                'description' => '知识ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '30001905617',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '',
      'title' => '文档重试',
    ),
    'SearchDoc' => 
    array (
      'summary' => '搜索文档',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关键字',
            'type' => 'string',
            'required' => false,
            'example' => '搜索关键字',
          ),
        ),
        2 => 
        array (
          'name' => 'CategoryIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '类目ID列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '类目ID',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '30000065594',
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'ProcessStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务状态
-1 排队中
0 成功
1 解析中
2 处理中
3 处理失败',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '编辑状态：
1   未发布
2   已发布
3   已更新未发布',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'SearchScope',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索范围 
1  搜索标题
2  搜索内容',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'CreateUserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建人名称',
            'type' => 'string',
            'required' => false,
            'example' => '张三',
          ),
        ),
        7 => 
        array (
          'name' => 'ModifyUserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改人名称',
            'type' => 'string',
            'required' => false,
            'example' => '李四',
          ),
        ),
        8 => 
        array (
          'name' => 'CreateTimeBegin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建开始时间',
            'type' => 'string',
            'required' => false,
            'example' => '2022-04-02T03:09:30Z',
          ),
        ),
        9 => 
        array (
          'name' => 'CreateTimeEnd',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建结束时间',
            'type' => 'string',
            'required' => false,
            'example' => '2022-05-02T03:09:30Z',
          ),
        ),
        10 => 
        array (
          'name' => 'ModifyTimeBegin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改开始时间',
            'type' => 'string',
            'required' => false,
            'example' => '2023-04-02T03:09:30Z',
          ),
        ),
        11 => 
        array (
          'name' => 'ModifyTimeEnd',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改结束时间',
            'type' => 'string',
            'required' => false,
            'example' => '2023-05-02T03:09:30Z',
          ),
        ),
        12 => 
        array (
          'name' => 'StartTimeBegin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生效开始时间',
            'type' => 'string',
            'required' => false,
            'example' => '2022-04-02T03:09:30Z',
          ),
        ),
        13 => 
        array (
          'name' => 'StartTimeEnd',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生效结束时间',
            'type' => 'string',
            'required' => false,
            'example' => '2022-04-03T03:09:30Z',
          ),
        ),
        14 => 
        array (
          'name' => 'EndTimeBegin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '失效开始时间',
            'type' => 'string',
            'required' => false,
            'example' => '2023-04-02T03:09:30Z',
          ),
        ),
        15 => 
        array (
          'name' => 'EndTimeEnd',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '失效结束时间',
            'type' => 'string',
            'required' => false,
            'example' => '2023-05-02T03:09:30Z',
          ),
        ),
        16 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分⻚-第⼏⻚',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        17 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        18 => 
        array (
          'name' => 'TagIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '标签ID列表',
            'description' => '标签ID列表，多个标签时，采用“并集”逻辑进行筛选',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签ID',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '1201',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'E3E5C779-A630-45AC-B0F2-A4506A4212F1',
              ),
              'PageNumber' => 
              array (
                'description' => '当前⻚码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '141',
              ),
              'DocHits' => 
              array (
                'description' => '文档列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'KnowledgeId' => 
                    array (
                      'description' => '知识ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '30002692007',
                    ),
                    'DocName' => 
                    array (
                      'description' => '文档名称',
                      'type' => 'string',
                      'example' => '文档名称',
                    ),
                    'BizCode' => 
                    array (
                      'description' => '业务代码',
                      'type' => 'string',
                      'example' => 'cn_dytns',
                    ),
                    'Meta' => 
                    array (
                      'description' => '文档随路数据',
                      'type' => 'string',
                      'example' => '{"code":"xxx"}',
                    ),
                    'Config' => 
                    array (
                      'description' => '文档解析/切分配置
配置项：切分器
KEY：Splitter
值选项：paragraphSplitter-识别层级【默认】
值选项：treeSplitter-规则层级

配置项：文档切块大小
KEY：ChunkSize
VALUE：默认500；范围[200,800]

配置项：规则层级
KEY：TreePatterns
VALUE：默认[]

配置项：文档标题来源
KEY：TitleSource
值选项：ocrTitle - OCR识别标题【默认】
值选项：docName - 文档名即标题',
                      'type' => 'string',
                      'example' => '{"Splitter":"treeSplitter","ChunkSize":500,"TreePatterns":["^# .*","^## .*","^### .*","^#### .*"],"TitleSource":"docName"}',
                    ),
                    'Url' => 
                    array (
                      'description' => '文档保存OSS地址',
                      'type' => 'string',
                      'example' => 'https://doc2bot-bucket-cloud.oss-cn-shanghai.aliyuncs.com/doc2bot/input/文档问答说明书_V1.pdf',
                    ),
                    'ModifyTime' => 
                    array (
                      'description' => '修改时间（UTC时间）',
                      'type' => 'string',
                      'example' => '2023-06-25T02:27:42Z',
                    ),
                    'ModifyUserName' => 
                    array (
                      'description' => '修改人名称',
                      'type' => 'string',
                      'example' => '李四',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间（UTC时间）',
                      'type' => 'string',
                      'example' => '2023-06-22T03:53:41Z',
                    ),
                    'CreateUserName' => 
                    array (
                      'description' => '创建人名称',
                      'type' => 'string',
                      'example' => '张三',
                    ),
                    'CreateUserId' => 
                    array (
                      'description' => '创建人ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '111111111',
                    ),
                    'ModifyUserId' => 
                    array (
                      'description' => '修改人ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '222222222',
                    ),
                    'CategoryId' => 
                    array (
                      'description' => '类目ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '30000135654',
                    ),
                    'ProcessStatus' => 
                    array (
                      'description' => '任务处理状态
-1 排队中
0 成功
1 解析中
2 处理中
3 处理失败',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'ProcessMessage' => 
                    array (
                      'description' => '任务处理信息',
                      'type' => 'string',
                      'example' => '任务处理成功',
                    ),
                    'ProcessCanRetry' => 
                    array (
                      'description' => '任务是否可重试
true：可重试
false：不可重试',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Status' => 
                    array (
                      'description' => '编辑状态： 1 未发布 2 已发布 3 已更新未发布',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'EffectStatus' => 
                    array (
                      'description' => '知识生效状态，根据StartDate，EndDate计算出来：20-生效中，21-已失效，22-待生效',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '20',
                    ),
                    'StartDate' => 
                    array (
                      'description' => '生效时间（UTC 时间）',
                      'type' => 'string',
                      'example' => '2023-02-28T11:40:18Z',
                    ),
                    'EndDate' => 
                    array (
                      'description' => '失效时间（UTC时间）',
                      'type' => 'string',
                      'example' => '2099-12-31T16:00:00Z',
                    ),
                    'DocTags' => 
                    array (
                      'description' => '标签详情列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签详情',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'TagId' => 
                          array (
                            'title' => '标签ID',
                            'description' => '标签ID',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1201',
                          ),
                          'TagName' => 
                          array (
                            'title' => '标签名称',
                            'description' => '标签名称',
                            'type' => 'string',
                            'example' => '小说',
                          ),
                          'GroupId' => 
                          array (
                            'title' => '标签组ID',
                            'description' => '标签组ID',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '3610',
                          ),
                          'GroupName' => 
                          array (
                            'title' => '标签组名称',
                            'description' => '标签组名称',
                            'type' => 'string',
                            'example' => '文章',
                          ),
                          'DefaultTag' => 
                          array (
                            'title' => '是否默认全部标签',
                            'description' => '是否默认全部标签',
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
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '',
      'title' => '搜索文档',
    ),
    'DescribeDoc' => 
    array (
      'summary' => '文档详情',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务空间key，不传时访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'KnowledgeId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '知识ID',
            'description' => '知识ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '30001979424',
          ),
        ),
        2 => 
        array (
          'name' => 'ShowDetail',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否展示文档段落详细信息
true：展示
false：忽略（默认）',
            'description' => '是否展示文档段落详细信息
true：展示
false：忽略（默认）',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '7F132693-212A-40A9-8A81-11E7694E478B',
              ),
              'KnowledgeId' => 
              array (
                'description' => '知识ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '30001979424',
              ),
              'DocName' => 
              array (
                'description' => '文档名称',
                'type' => 'string',
                'example' => '文档名称',
              ),
              'Title' => 
              array (
                'description' => '文档标题',
                'type' => 'string',
                'example' => '测试标题',
              ),
              'BizCode' => 
              array (
                'description' => '业务代码',
                'type' => 'string',
                'example' => 'bizcode123',
              ),
              'Meta' => 
              array (
                'description' => '文档随路数据',
                'type' => 'string',
                'example' => '{"code":"xxx"}',
              ),
              'Config' => 
              array (
                'description' => '文档解析/切分配置 配置项：切分器 KEY：Splitter 值选项：paragraphSplitter-识别层级【默认】 值选项：treeSplitter-规则层级

配置项：文档切块大小 KEY：ChunkSize VALUE：默认500；范围[200,800]

配置项：规则层级 KEY：TreePatterns VALUE：默认[]

配置项：文档标题来源 KEY：TitleSource 值选项：ocrTitle - OCR识别标题【默认】 值选项：docName - 文档名即标题',
                'type' => 'string',
                'example' => '{"Splitter":"treeSplitter","ChunkSize":500,"TreePatterns":["^# .*","^## .*","^### .*","^#### .*"],"TitleSource":"docName"}',
              ),
              'Url' => 
              array (
                'description' => '文档保存OSS地址',
                'type' => 'string',
                'example' => 'https://doc2bot-bucket-cloud.oss-cn-shanghai.aliyuncs.com/doc2bot/input/文档问答说明书_V1.pdf',
              ),
              'ModifyTime' => 
              array (
                'description' => '修改时间',
                'type' => 'string',
                'example' => '2020-11-25T08:56:55Z',
              ),
              'ModifyUserName' => 
              array (
                'description' => '修改人',
                'type' => 'string',
                'example' => '李四',
              ),
              'CreateTime' => 
              array (
                'description' => '创建时间',
                'type' => 'string',
                'example' => '2022-04-12T06:30:17Z',
              ),
              'CreateUserName' => 
              array (
                'description' => '创建人名称',
                'type' => 'string',
                'example' => '张三',
              ),
              'CreateUserId' => 
              array (
                'description' => '创建人ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1111111111',
              ),
              'ModifyUserId' => 
              array (
                'description' => '修改人ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2222222222',
              ),
              'CategoryId' => 
              array (
                'description' => '类目ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '30000049006',
              ),
              'ProcessStatus' => 
              array (
                'description' => '任务处理状态
-1 排队中
0 成功
1 解析中
2 处理中
3 处理失败',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ProcessMessage' => 
              array (
                'description' => '任务处理信息',
                'type' => 'string',
                'example' => '任务处理成功',
              ),
              'ProcessCanRetry' => 
              array (
                'description' => '任务是否可重试
true：可重试
false：不可重试',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Status' => 
              array (
                'description' => '编辑状态：
1   未发布
2   已发布
3   已更新未发布',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'EffectStatus' => 
              array (
                'description' => '生效状态
根据StartDate, EndDate计算出来
20  生效中
21  已失效
22  待生效',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'StartDate' => 
              array (
                'description' => '生效时间（UTC 时间）',
                'type' => 'string',
                'example' => '1979-12-31T16:00:00Z',
              ),
              'EndDate' => 
              array (
                'description' => '失效时间（UTC 时间）',
                'type' => 'string',
                'example' => '2023-04-27T06:08:54Z',
              ),
              'DocInfo' => 
              array (
                'description' => '文档详情',
                'type' => 'object',
                'properties' => 
                array (
                  'DocParas' => 
                  array (
                    'description' => '文档段落信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '段落对象',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ParaNo' => 
                        array (
                          'description' => '段落序号',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'ParaLevel' => 
                        array (
                          'description' => '段落层级',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'ParaType' => 
                        array (
                          'description' => '段落内容类型
text-文本
figure-图片
table-表格',
                          'type' => 'string',
                          'example' => 'text',
                        ),
                        'ParaText' => 
                        array (
                          'description' => '段落内容【纯文本/图片OCR内容/表格的Markdown表示】',
                          'type' => 'string',
                          'example' => '内容',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'DocTags' => 
              array (
                'description' => '标签详情列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签详情',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TagId' => 
                    array (
                      'title' => '标签ID',
                      'description' => '标签ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1201',
                    ),
                    'TagName' => 
                    array (
                      'title' => '标签名称',
                      'description' => '标签名称',
                      'type' => 'string',
                      'example' => '小说',
                    ),
                    'GroupId' => 
                    array (
                      'title' => '标签分组ID',
                      'description' => '标签分组ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '3610',
                    ),
                    'GroupName' => 
                    array (
                      'title' => '标签分组名称',
                      'description' => '标签分组名称',
                      'type' => 'string',
                      'example' => '文章',
                    ),
                    'DefaultTag' => 
                    array (
                      'title' => '是否默认为全部标签',
                      'description' => '是否默认为全部标签',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '',
      'title' => '文档详情',
    ),
    'CreateCategory' => 
    array (
      'summary' => '新建类目。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '类目名称',
            'description' => '类目名称',
            'type' => 'string',
            'required' => true,
            'example' => '测试1',
          ),
        ),
        1 => 
        array (
          'name' => 'BizCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '业务代码',
            'description' => '业务代码',
            'type' => 'string',
            'required' => false,
            'example' => 'bizcode123',
          ),
        ),
        2 => 
        array (
          'name' => 'KnowledgeType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '知识类型，FAQ类目：1，文档类目：3',
            'description' => '知识类型，FAQ类目：1，文档类目：3，默认1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'ParentCategoryId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '父类目ID，默认-1，对应根目录',
            'description' => '父类目ID，默认-1，对应根目录',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '-1',
          ),
        ),
        4 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'result',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A629A28F-F25E-5572-A679-FA46FB0151D6',
              ),
              'Category' => 
              array (
                'title' => '类目信息',
                'description' => '类目信息',
                'type' => 'object',
                'properties' => 
                array (
                  'CategoryId' => 
                  array (
                    'title' => '类目ID',
                    'description' => '类目ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '30000049006',
                  ),
                  'BizCode' => 
                  array (
                    'description' => '业务代码',
                    'type' => 'string',
                    'example' => 'bizcode123',
                  ),
                  'Name' => 
                  array (
                    'description' => '类目名称',
                    'type' => 'string',
                    'example' => '类目名称',
                  ),
                  'ParentCategoryId' => 
                  array (
                    'description' => '父类目ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '-1',
                  ),
                  'Status' => 
                  array (
                    'description' => '类目状态，-1：已删除未发布状态，0：正常',
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
      'responseDemo' => '',
      'title' => '类目-新建',
    ),
    'DeleteCategory' => 
    array (
      'summary' => '删除类目， 已发布的类目变成已删除未发布状态，未发布的类目则直接删除。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'CategoryId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '类目ID',
            'description' => '类目ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '30000049006',
          ),
        ),
        1 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'result',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4B3E0DE3-DC57-5BFE-88D4-ADD8ED024F55',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '类目-删除',
    ),
    'UpdateCategory' => 
    array (
      'summary' => '编辑类目。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'CategoryId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '类目ID',
            'description' => '类目ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '231001028593',
          ),
        ),
        1 => 
        array (
          'name' => 'BizCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '业务代码',
            'description' => '业务代码',
            'type' => 'string',
            'required' => false,
            'example' => 'bizcode123',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '类目名称',
            'description' => '类目名称',
            'type' => 'string',
            'required' => true,
            'example' => '类目名称',
          ),
        ),
        3 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'result',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F79E7305-5314-5069-A701-9591AD051902',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '类目-更新',
    ),
    'DescribeCategory' => 
    array (
      'summary' => '查看单个类目信息。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'CategoryId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '类目ID',
            'description' => '类目ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '30000049006',
          ),
        ),
        1 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'result',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '2B0304FD-3804-5C06-9A83-77F5523664AF',
              ),
              'Category' => 
              array (
                'title' => '类目信息',
                'description' => '类目信息',
                'type' => 'object',
                'properties' => 
                array (
                  'CategoryId' => 
                  array (
                    'title' => '类目ID',
                    'description' => '类目ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '30000049006',
                  ),
                  'Name' => 
                  array (
                    'description' => '类⽬名称',
                    'type' => 'string',
                    'example' => '类目名称',
                  ),
                  'ParentCategoryId' => 
                  array (
                    'description' => '⽗类⽬id，默认-1，对应根⽬录',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '-1',
                  ),
                  'Status' => 
                  array (
                    'description' => '类目状态 -1：已删除未发布状态，0：正常',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'BizCode' => 
                  array (
                    'description' => '业务代码',
                    'type' => 'string',
                    'example' => 'bizcode123',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '类目-详情',
    ),
    'ListCategory' => 
    array (
      'summary' => '获取类目列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'KnowledgeType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '知识类型,FAQ类目:1,文档类目:3',
            'description' => '知识类型,FAQ类目:1,文档类目:3，默认1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'ParentCategoryId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '父类目ID',
            'description' => '父类目ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '-1',
          ),
        ),
        2 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'Categories' => 
              array (
                'title' => 'list结果',
                'description' => '类目list结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '类目信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CategoryId' => 
                    array (
                      'title' => '类目ID',
                      'description' => '类目ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '231001028593',
                    ),
                    'BizCode' => 
                    array (
                      'description' => '业务代码',
                      'type' => 'string',
                      'example' => 'bizcode123',
                    ),
                    'Name' => 
                    array (
                      'description' => '类⽬名称',
                      'type' => 'string',
                      'example' => '类目名称',
                    ),
                    'ParentCategoryId' => 
                    array (
                      'description' => '⽗类⽬ID

',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '-1',
                    ),
                    'Status' => 
                    array (
                      'description' => '类目状态，-1：已删除未发布状态，0：正常',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '9C5F8186-2D22-433E-9545-606D344F30B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '获取类目列表',
    ),
    'ApplyForStreamAccessToken' => 
    array (
      'summary' => '获取流式调用的连接信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        1 => 
        array (
          'APP' => 
          array (
          ),
        ),
        2 => 
        array (
          'PrivateKey' => 
          array (
          ),
        ),
        3 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '736994BD-AA35-4742-88C9-E64BE4BAA14B',
              ),
              'AccessToken' => 
              array (
                'description' => '服务的请求Token。',
                'type' => 'string',
                'example' => '63ba97b4f18a4a04f715c81e8e643938',
              ),
              'ChannelId' => 
              array (
                'description' => '通道ID',
                'type' => 'string',
                'example' => 'cc9e88c0-4f41-4f1d-a1a9-91a72d2aa27d',
              ),
              'StreamSecret' => 
              array (
                'description' => '业务空间的密钥，流式请求加签使用',
                'type' => 'string',
                'example' => 'cc9e88c0-4f41-4f1d-a1a9-91a72d2aa27d',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '',
      'title' => '获取流式调用的连接信息',
    ),
    'Feedback' => 
    array (
      'summary' => '保存用户对于问答结果的评价。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'MessageId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '会话窗单次会话标识',
            'description' => '会话窗单次会话标识',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '5ca40988-4f99-47ad-ac96-9060d0f81db9',
          ),
        ),
        1 => 
        array (
          'name' => 'Feedback',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'good-点赞、bad-点踩',
            'description' => '点赞或点踩

枚举值：
good（点赞）
bad（点踩）',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
              'bad' => 'bad',
              'good' => 'good',
            ),
            'example' => 'good',
          ),
        ),
        2 => 
        array (
          'name' => 'SessionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '会话Session标识，标识：IM唯一标识会话',
            'description' => '会话Session标识，标识：IM唯一标识会话',
            'type' => 'string',
            'required' => false,
            'example' => '7c3cec23cc8940bc9db4a318c8f4f0aa',
          ),
        ),
        3 => 
        array (
          'name' => 'FeedbackContent',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '点赞、点踩的内容',
            'description' => '点赞、点踩的内容',
            'type' => 'string',
            'required' => false,
            'example' => '这个回答很棒',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人唯一标识',
            'type' => 'string',
            'required' => false,
            'example' => 'chatbot-cn-mp90s2lrk00050',
          ),
        ),
        5 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求Id',
                'type' => 'string',
                'example' => '4e5eea71-f326-450c-8849-49515473ef64',
              ),
              'Feedback' => 
              array (
                'title' => 'good-点赞、bad-点踩',
                'description' => '点赞或点踩

枚举值：
good（点赞）
bad（点踩）',
                'type' => 'string',
                'example' => 'good',
              ),
              'MessageId' => 
              array (
                'title' => '会话窗单次会话标识',
                'description' => '会话窗单次会话标识',
                'type' => 'string',
                'example' => '5ca40988-4f99-47ad-ac96-9060d0f81db9',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '问答点赞、点踩',
    ),
    'Chat' => 
    array (
      'summary' => '根据机器人唯一标识（机器人ID）与其进行会话，仅适用于智能对话机器人（旧版）。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人实例ID。登录云小蜜控制台，机器人详情->会话接口，查看机器人实例信息，可获得该实例ID。',
            'description' => '机器人唯一标识（机器人ID）。登录云小蜜控制台，机器人详情->会话接口，查看机器人实例信息，可获得该实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'chatbot-cn-mp90s2lrk00050',
          ),
        ),
        1 => 
        array (
          'name' => 'Utterance',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人访问者的输入',
            'description' => '机器人访问者的输入',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '今天天气怎么样？',
          ),
        ),
        2 => 
        array (
          'name' => 'SessionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '会话ID，用于标识一个访问者的会话和保持上下文信息。对于一个新的访问者，首次调用Chat接口时无需传递此字段，机器人会开启一个会话，并在Chat接口的响应中返回该会话的SessionId。对于该访问者的后续轮次的会话，调用Chat接口时传递当前会话的SessionId，机器人即可基于SessionId继续该轮次会话。长度限制是64个字符',
            'description' => '会话ID，用于标识一个访问者的会话和保持上下文信息。对于一个新的访问者，首次调用Chat接口时无需传递此字段，机器人会开启一个会话，并在Chat接口的响应中返回该会话的SessionId。对于该访问者的后续轮次的会话，调用Chat接口时传递当前会话的SessionId，机器人即可基于SessionId继续该轮次会话。长度限制是64个字符',
            'type' => 'string',
            'required' => false,
            'example' => '9c6ebdc6e66f46ecadab3434314f6959',
          ),
        ),
        3 => 
        array (
          'name' => 'KnowledgeId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '知识库中知识标题的ID。若指定此ID，那么机器人会直接返回指定知识标题的答案',
            'description' => '知识库中知识标题的ID。若指定此ID，那么机器人会直接返回指定知识标题的答案',
            'type' => 'string',
            'required' => false,
            'example' => '30002406051',
          ),
        ),
        4 => 
        array (
          'name' => 'SenderId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '访问者ID。用于识别当前会话中的用户',
            'description' => '访问者ID。用于识别当前会话中的用户',
            'type' => 'string',
            'required' => false,
            'example' => 'custumer_123456',
          ),
        ),
        5 => 
        array (
          'name' => 'SenderNick',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '当前会话中访问的昵称',
            'description' => '当前会话中访问的昵称',
            'type' => 'string',
            'required' => false,
            'example' => '用户123456',
          ),
        ),
        6 => 
        array (
          'name' => 'IntentName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '对话流中意图名称。 若指定此名称，机器人会直接进入此意图做问答',
            'description' => '对话流中意图名称。 若指定此名称，机器人会直接进入此意图做问答',
            'type' => 'string',
            'required' => false,
            'example' => '查天气意图',
          ),
        ),
        7 => 
        array (
          'name' => 'Perspective',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '视角编码，用于调用同一知识标题下不同视角的答案。如：Perspective=["FZJBY3raWr"]。使用SDK时以SDK中定义的参数为准',
            'description' => '视角编码数组，用于调用同一知识标题下不同视角的答案。如：Perspective=["FZJBY3raWr"]。使用SDK时以SDK中定义的参数为准',
            'type' => 'array',
            'items' => 
            array (
              'description' => '视角编码',
              'type' => 'string',
              'required' => false,
              'example' => 'FZJBY3raWr',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        8 => 
        array (
          'name' => 'VendorParam',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是一个JSON格式的用户自定义参数集，可以传入用户自定义的参数到各对话引擎',
            'type' => 'string',
            'required' => false,
            'example' => '{"phone":123456789}',
          ),
        ),
        9 => 
        array (
          'name' => 'SandBox',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '测试、正式环境标识，默认为正式环境。
- true：测试环境，仅限测试使用，生产使用有不稳定、QPS限制等风险。
- false：正式环境',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        10 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
              'QuerySegList' => 
              array (
                'title' => 'query的分词结果，可能为空',
                'description' => 'query的分词结果，可能为空',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '问题的分词数组，如
[
    "查",
    "天气"
 ]',
                  'type' => 'string',
                  'example' => '天气',
                ),
              ),
              'Messages' => 
              array (
                'title' => '消息的列表',
                'description' => '消息的列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '消息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Knowledge' => 
                    array (
                      'title' => '当AnswerType为Knowledge时，此字段包含机器人返回的Knowledge对象',
                      'description' => '当AnswerType为Knowledge时，此字段包含机器人返回的Knowledge对象',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'HitStatement' => 
                        array (
                          'title' => '命中语句',
                          'description' => '命中语句',
                          'type' => 'string',
                          'example' => '公积金',
                        ),
                        'Summary' => 
                        array (
                          'title' => '命中问题的简介',
                          'description' => '命中问题的简介',
                          'type' => 'string',
                          'example' => '公积金提取',
                        ),
                        'RelatedKnowledges' => 
                        array (
                          'title' => '关联知识列表',
                          'description' => '关联知识列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '关联知识',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'KnowledgeId' => 
                              array (
                                'title' => '知识关联知识的ID',
                                'description' => '知识关联知识的ID',
                                'type' => 'string',
                                'example' => '735899',
                              ),
                              'Title' => 
                              array (
                                'title' => '知识的关联知识的标题',
                                'description' => '知识的关联知识的标题',
                                'type' => 'string',
                                'example' => '公积金查询',
                              ),
                            ),
                          ),
                        ),
                        'Category' => 
                        array (
                          'title' => '知识类目',
                          'description' => '知识类目',
                          'type' => 'string',
                          'example' => '公积金',
                        ),
                        'Title' => 
                        array (
                          'title' => '命中问题的标题',
                          'description' => '命中问题的标题',
                          'type' => 'string',
                          'example' => '公积金提取',
                        ),
                        'Content' => 
                        array (
                          'title' => '命中问题的内容',
                          'description' => '命中问题的内容',
                          'type' => 'string',
                          'example' => '公积金提取，请在首页搜索公积金提取，提交办事的表单',
                        ),
                        'AnswerSource' => 
                        array (
                          'title' => '区分答案类型。
KnowledgeBase:知识库条；',
                          'description' => '区分答案类型。
KnowledgeBas：知识库；',
                          'type' => 'string',
                          'example' => 'KnowledgeBase',
                        ),
                        'Id' => 
                        array (
                          'title' => '命中问题在知识库中的ID',
                          'description' => '命中问题在知识库中的ID',
                          'type' => 'string',
                          'example' => '735898',
                        ),
                        'Score' => 
                        array (
                          'title' => '分数',
                          'description' => '分数',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '0.998',
                        ),
                        'ContentType' => 
                        array (
                          'title' => '纯文本/富文本答案的标示',
                          'description' => '纯文本或富文本答案的标识',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'PLAIN_TEXT' => '纯本文',
                            'RICH_TEXT' => '富文本',
                          ),
                          'example' => 'PLAIN_TEXT',
                          'enum' => 
                          array (
                            0 => 'PLAIN_TEXT：纯本文',
                            1 => 'RICH_TEXT: 富文本',
                            2 => 'CARD_TEMPLATE：卡片模版',
                          ),
                        ),
                      ),
                    ),
                    'Text' => 
                    array (
                      'title' => '当AnswerType为Text时，此字段包含机器人返回的Text对象',
                      'description' => '当AnswerType为Text时，此字段包含机器人返回的Text对象',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'HitStatement' => 
                        array (
                          'title' => '命中语句',
                          'description' => '命中语句',
                          'type' => 'string',
                          'example' => '查天气',
                        ),
                        'DialogName' => 
                        array (
                          'title' => '当AnswerSource为BotFramework时，此字段返回对话单元名称',
                          'description' => '当AnswerSource为BotFramework时，此字段返回对话单元名称',
                          'type' => 'string',
                          'example' => '示例_查天气',
                        ),
                        'ArticleTitle' => 
                        array (
                          'title' => '当AnswerSource为MACHINE_READ时，此字段返回命中文章标题',
                          'description' => '当AnswerSource为MACHINE_READ时，此字段返回命中文章标题',
                          'type' => 'string',
                          'example' => '备案十一',
                        ),
                        'AnswerSource' => 
                        array (
                          'title' => '区分答案类型',
                          'description' => '区分答案类型',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'TABLEQA' => '表格问答',
                            'COMMANDS' => '系统指令',
                            'SENSITIVE_WORD' => ' 全局敏感词',
                            'BotFramework' => '对话工厂',
                            'MACHINE_READ' => '机器阅读',
                            'ChitChat' => '闲聊',
                            'NO_ANSWER' => '无答案',
                          ),
                          'example' => 'BotFramework',
                          'enum' => 
                          array (
                            0 => 'ChitChat：闲聊',
                            1 => 'BotFramework：对话工厂',
                            2 => 'NO_ANSWER：无答案',
                            3 => 'MACHINE_READ：机器阅读',
                            4 => 'CardAnswer：卡片答案',
                            5 => 'SENSITIVE_WORD： 全局敏感词',
                            6 => 'COMMANDS：系统指令',
                            7 => 'TABLEQA：表格问答',
                          ),
                        ),
                        'Slots' => 
                        array (
                          'title' => '当AnswerSource为BotFramework时，此字段返回专有名词列表',
                          'description' => '当AnswerSource为BotFramework时，此字段返回专有名词列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '槽位信息',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '具体值',
                                'type' => 'string',
                                'example' => '北京',
                              ),
                              'Origin' => 
                              array (
                                'description' => '原始值',
                                'type' => 'string',
                                'example' => '北京',
                              ),
                              'Name' => 
                              array (
                                'description' => '名称',
                                'type' => 'string',
                                'example' => '查天气意图.city',
                              ),
                              'Hit' => 
                              array (
                                'description' => '是否命中',
                                'type' => 'boolean',
                                'example' => 'false',
                              ),
                            ),
                          ),
                        ),
                        'NodeName' => 
                        array (
                          'title' => '当AnswerSource为BotFramework时，此字段返回节点名称',
                          'description' => '当AnswerSource为BotFramework时，此字段返回节点名称',
                          'type' => 'string',
                          'example' => '示例_查天气.查天气填槽.__city',
                        ),
                        'IntentName' => 
                        array (
                          'title' => '当AnswerSource为BotFramework时，此字段返回意图名称',
                          'description' => '当AnswerSource为BotFramework时，此字段返回意图名称',
                          'type' => 'string',
                          'example' => '查天气意图',
                        ),
                        'MetaData' => 
                        array (
                          'description' => '元数据',
                          'type' => 'string',
                          'example' => '[[{\\"columnName\\":\\"姓名\\",\\"stringValue\\":\\"王珊珊\\"}]]',
                        ),
                        'ExternalFlags' => 
                        array (
                          'title' => '当AnswerSource为BotFramework时，此字段返回透传参数',
                          'description' => '当AnswerSource为BotFramework时，此字段返回透传参数',
                          'type' => 'object',
                        ),
                        'Ext' => 
                        array (
                          'title' => '此字段返回透传参数',
                          'description' => '此字段返回透传参数',
                          'type' => 'object',
                          'example' => '{
	"MATCHED_INTENT_SOURCE": "",
	"INTENT_ID": 724414,
	"IntentName": "查天气意图",
	"INTENT_DETAIL": "[我想|我要]查天气",
	"LGF_EXPRESSION": "[我想|我要]查天气",
	"IS_SESSION_FINISHED": false,
	"DsScore": 100.0,
	"DIALOG_ID": "299034",
	"FINISH_LABEL": false,
	"MODULE_START": false,
	"INTENT_NAME": "查天气意图",
	"INTENT_SOURCE": "Lgf",
	"DIALOG_NAME": "示例_查天气"
}',
                        ),
                        'UserDefinedChatTitle' => 
                        array (
                          'title' => '自定义闲聊主题title',
                          'description' => '自定义闲聊主题标题',
                          'type' => 'string',
                          'example' => '问候',
                        ),
                        'Content' => 
                        array (
                          'title' => '文本消息的内容',
                          'description' => '文本消息的内容',
                          'type' => 'string',
                          'example' => '请问您要查哪里的天气？',
                        ),
                        'NodeId' => 
                        array (
                          'title' => '当AnswerSource为BotFramework时，此字段返回节点Id',
                          'description' => '当AnswerSource为BotFramework时，此字段返回节点ID',
                          'type' => 'string',
                          'example' => '1410-c7a72a78.__city',
                        ),
                        'Score' => 
                        array (
                          'title' => '分数',
                          'description' => '分数',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '100.0',
                        ),
                        'ContentType' => 
                        array (
                          'title' => '纯文本/富文本答案的标示',
                          'description' => '纯文本或富文本答案的标识',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'PLAIN_TEXT' => '纯本文',
                            'RICH_TEXT' => '富文本',
                          ),
                          'example' => 'PLAIN_TEXT',
                          'enum' => 
                          array (
                            0 => 'PLAIN_TEXT：纯本文',
                            1 => 'RICH_TEXT: 富文本',
                            2 => 'CARD_TEMPLATE：卡片模版',
                          ),
                        ),
                        'Commands' => 
                        array (
                          'title' => '指令参数，如转人工指令的转人工技能组',
                          'description' => '指令参数，如转人工指令的转人工技能组',
                          'type' => 'object',
                          'example' => '{
	"sysToAgent": "{\\"skillGroup\\":\\"12\\"}"
}',
                        ),
                        'ResponseType' => 
                        array (
                          'title' => '当AnswerSource=BotFramework，ResponseType=SSML时，表示命中对话工厂交互式填槽；否则字段不存在',
                          'description' => '当AnswerSource为BotFramework，ResponseType为SSML时，表示命中对话工厂交互式填槽；否则字段不存在',
                          'type' => 'string',
                          'example' => 'SSML',
                        ),
                      ),
                    ),
                    'Recommends' => 
                    array (
                      'title' => '当AnswerType为Recommend时，此字段包含机器人返回的Recommend的列表',
                      'description' => '当AnswerType为Recommend时，此字段包含机器人返回的Recommend的列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'recommend对象',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'KnowledgeId' => 
                          array (
                            'title' => '澄清的知识id',
                            'description' => '澄清的知识ID',
                            'type' => 'string',
                            'example' => '4548',
                          ),
                          'Title' => 
                          array (
                            'title' => '澄清内容，可能是
图谱问答的实体、
知识问答的知识标题、
表格问答的列值',
                            'description' => '澄清内容，可能是
图谱问答的实体、
知识问答的知识标题、
表格问答的列值',
                            'type' => 'string',
                            'example' => '测试纯文本',
                          ),
                          'AnswerSource' => 
                          array (
                            'title' => '澄清来源的标识',
                            'description' => '澄清来源的标识',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'BotFramework' => '对话工厂',
                              'Knowledge' => 'FAQ',
                            ),
                            'example' => 'KNOWLEDGE',
                            'enum' => 
                            array (
                              0 => 'Knowledge：FAQ标题',
                              1 => 'BotFramework：对话工厂',
                            ),
                          ),
                          'Score' => 
                          array (
                            'title' => '推荐内容的分数，当AnswerSource为KNOWLEDGE时，此字段有值',
                            'description' => '推荐内容的分数，当AnswerSource为KNOWLEDGE时，此字段有值',
                            'type' => 'number',
                            'format' => 'double',
                            'example' => '0.46',
                          ),
                        ),
                      ),
                    ),
                    'AnswerType' => 
                    array (
                      'title' => '本条消息的类型',
                      'description' => '本条消息的类型',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Recommend' => '澄清或者反问',
                        'Text' => '文本',
                        'Knowledge' => '知识库知识直出',
                      ),
                      'example' => 'Text',
                      'enum' => 
                      array (
                        0 => 'Text：文本',
                        1 => 'Recommend：澄清或者反问',
                        2 => 'Knowledge：知识库知识直出',
                        3 => 'cardAnswer：卡片工坊的卡片答案',
                      ),
                    ),
                    'AnswerSource' => 
                    array (
                      'title' => '当AnswerType为Recommend时，此字段表示推荐的答案来源',
                      'description' => '当AnswerType为Recommend时，此字段表示推荐的答案来源',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        ' INTENT_FAQ_CLARIFY' => 'FAQ和对话工厂混合澄清',
                        'TABLEQA' => '表格问答',
                        'KNOWLEDGE' => 'FAQ',
                        'BotFramework' => '对话工厂',
                      ),
                      'example' => 'KNOWLEDGE',
                      'enum' => 
                      array (
                        0 => 'KNOWLEDGE：知识问答',
                        1 => 'INTENT_FAQ_CLARIFY：FAQ和对话工厂混合澄清',
                        2 => 'BotFramework：对话工厂澄清',
                        3 => 'TABLEQA：表格问答',
                      ),
                    ),
                    'VoiceTitle' => 
                    array (
                      'title' => '当AnswerType为Recommend时，并且问答的机器人为语音机器人，此字段表示列表型答案在语音场景渲染之后的答案内容',
                      'description' => '语音场景，澄清内容',
                      'type' => 'string',
                      'example' => '请问你说的是公积金查询，还是公积金提取',
                    ),
                    'Title' => 
                    array (
                      'title' => '当AnswerType为Recommend时，此字段表示推荐或者反问的标题话术',
                      'description' => '在线场景，反问标题',
                      'type' => 'string',
                      'example' => '请问您想咨询的是哪个投保年龄区间呢？',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A2315C4B-A872-5DEE-9DAD-D73B194A4AEC',
              ),
              'SessionId' => 
              array (
                'title' => '本次会话的ID',
                'description' => '本次会话的ID',
                'type' => 'string',
                'example' => 'a6f216a0685c4c8baa0e8beb6d5ec6db',
              ),
              'MessageId' => 
              array (
                'title' => '本条会话应答消息的ID',
                'description' => '本条会话应答消息的ID',
                'type' => 'string',
                'example' => 'A2315C4B-A872-5DEE-9DAD-D73B194A4AEC
',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '会话',
      'responseParamsDescription' => '#### Ext字段说明
**AnswerSource=BotFramework时：**

| 字段名 | 类型 | 描述 |
| --- | --- | --- |
| MATCHED\\_ENTRY_NAME | String | 命中的触发节点名称 |
| MATCHED\\_INTENT_SOURCE | String | 命中的触发节点意图来源 |
| INTENT_ID | Long | 命中的意图ID |
| IntentName | String | 与INTENT_NAME相同 |
| INTENT_DETAIL | String | 意图命中的方式细节，主要在INTENT_SOURCE=Similarity或者Lgf的时候有用，当为Similarity时，这个字段的值就是匹配的意图话术，当为Lgf时，这个字段的值就是匹配的Lgf语法 |
| IS\\_SESSION_FINISHED | Boolean | 会话是否完结标志 |
| DsScore | String | 命中对话流的分数 |
| DIALOG_ID | String | 对话流ID |
| FINISH_LABEL | Boolean | 回复节点是否被标记为完结节点，由业务定义，常用于业务统计 |
| MODULE_START | Boolean | 是否为对话流开启意图节点 |
| INTENT_NAME | String | 命中的意图名称 |
| INTENT_SOURCE | String | 意图识别命中的来源方法，包括：`Simialrity` - 相似度匹配方法，`Lgf` - LGF语法匹配方法，`Classify` - 有监督模型方法 |
| DIALOG_NAME | String | 对话流名称 |
| DS_REPORT | Map | 对话流变量配置中，勾选为“输出至报表”的变量key value数据 |
| TASK_ID | String | 异步服务返回的任务ID |

#### 响应报文：
##### FAQ问答-直出

```json
{
  "QuerySegList": [
    "测试",
    "富文",
    "本"
  ],
  "Messages": [
    {
      "Knowledge": {
        "Score": 100.0,
        "Category": "第一个类目",
        "ContentType": "RICH_TEXT",
        "AnswerSource": "KnowledgeBase",
        "Content": "<p>富文本答案啊</p>",
        "Summary": "富文本答案啊",
        "Title": "测试富文本",
        "Id": "4549"
      },
      "AnswerType": "Knowledge"
    }
  ],
  "RequestId": "1b8b19de-7e6d-4e45-b7f1-9daca21af8b0",
  "SessionId": "1234",
  "MessageId": "1b8b19de-7e6d-4e45-b7f1-9daca21af8b0"
}
```


##### FAQ问答-澄清

```json
{
  "QuerySegList": [
    "文本"
  ],
  "Messages": [
    {
      "AnswerSource": "KNOWLEDGE",
      "Recommends": [
        {
          "Score": 46.0,
          "Title": "测试纯文本",
          "KnowledgeId": "4548"
        }
      ],
      "AnswerType": "Recommend"
    }
  ],
  "RequestId": "5af5d5f9-76b1-45e9-8003-fcd07ab9a5e4",
  "SessionId": "1234",
  "MessageId": "5af5d5f9-76b1-45e9-8003-fcd07ab9a5e4"
}
```

##### 对话工厂直出

```json
{
  "QuerySegList": [
    "查",
    "天气"
  ],
  "Messages": [
    {
      "Text": {
        "Ext": {
          "MATCHED_ENTRY_NAME": "intentWithout_city",
          "MATCHED_INTENT_SOURCE": "",
          "INTENT_ID": 724414,
          "BOT_ANSWER_SOURCE": "Lgf",
          "IntentName": "查天气意图",
          "INTENT_DETAIL": "[我想|我要]查天气",
          "LGF_EXPRESSION": "[我想|我要]查天气",
          "IS_SESSION_FINISHED": false,
          "DsScore": 100.0,
          "DIALOG_ID": "299034",
          "FINISH_LABEL": false,
          "MODULE_START": false,
          "INTENT_NAME": "查天气意图",
          "INTENT_SOURCE": "Lgf",
          "DIALOG_NAME": "示例_查天气"
        },
        "ContentType": "PLAIN_TEXT",
        "NodeName": "示例_查天气.查天气填槽.__city",
        "AnswerSource": "BotFramework",
        "Slots": [
          {
            "Origin": "",
            "Hit": false,
            "Value": "",
            "Name": "查天气意图.city"
          }
        ],
        "Score": 100.0,
        "DialogName": "示例_查天气",
        "IntentName": "查天气意图",
        "Content": "请问您要查哪里的天气？",
        "NodeId": "1410-c7a72a78.__city",
        "ExternalFlags": {
          
        }
      },
      "AnswerType": "Text"
    }
  ],
  "RequestId": "dc6757ef-9d03-4255-92ec-d262752a88ed",
  "SessionId": "1234",
  "MessageId": "dc6757ef-9d03-4255-92ec-d262752a88ed"
}
```

##### 对话工厂澄清

```json
{
  "QuerySegList": [
    "公积金"
  ],
  "Messages": [
    {
      "VoiceTitle": "请问你说的是公积金查询，还是公积金提取",
      "AnswerSource": "BotFramework",
      "Recommends": [
        {
          "Score": 0.656,
          "AnswerSource": "BotFramework",
          "Title": "公积金查询",
          "KnowledgeId": "735899"
        },
        {
          "Score": 0.634,
          "AnswerSource": "BotFramework",
          "Title": "公积金提取",
          "KnowledgeId": "735900"
        }
      ],
      "AnswerType": "Recommend"
    }
  ],
  "RequestId": "ab6be8af-cee4-40c3-9919-2ac7461d7d98",
  "SessionId": "123",
  "MessageId": "ab6be8af-cee4-40c3-9919-2ac7461d7d98"
}
```

##### 意图、FAQ混合澄清

```json
{
  "QuerySegList": [
    "公积金"
  ],
  "Messages": [
    {
      "VoiceTitle": "请问你说的是公积金查询，还是住房公积金在个人所得税税前扣除的具体规定是什么？",
      "AnswerSource": "INTENT_FAQ_CLARIFY",
      "Recommends": [
        {
          "Score": 0.656,
          "AnswerSource": "BotFramework",
          "Title": "公积金查询",
          "KnowledgeId": "735899"
        },
        {
          "Score": 0.47410887479782104,
          "Category": "税务-12366&680条-税款计算-居民个人取得综合所得-个人所得税专项扣除",
          "AnswerSource": "KNOWLEDGE",
          "Title": "住房公积金在个人所得税税前扣除的具体规定是什么？",
          "KnowledgeId": "7049"
        }
      ],
      "AnswerType": "Recommend"
    }
  ],
  "RequestId": "08d6bb1c-5394-4836-8e4a-86c07e7729b1",
  "SessionId": "123",
  "MessageId": "08d6bb1c-5394-4836-8e4a-86c07e7729b1"
}
```

##### 闲聊

```json
{
  "QuerySegList": [
    "你好"
  ],
  "Messages": [
    {
      "Text": {
        "ContentType": "PLAIN_TEXT",
        "AnswerSource": "ChitChat",
        "HitStatement": "你好",
        "Content": "哔~哔~哔~，我来了"
      },
      "AnswerType": "Text"
    }
  ],
  "RequestId": "8f267d8c-c118-4d6a-9ba1-2a5bdc720fed",
  "SessionId": "1234",
  "MessageId": "8f267d8c-c118-4d6a-9ba1-2a5bdc720fed"
}
```

##### 全局敏感词

```json
{
  "QuerySegList": [
    "查",
    "天气"
  ],
  "Messages": [
    {
      "Text": {
        "ContentType": "PLAIN_TEXT",
        "AnswerSource": "SENSITIVE_WORD",
        "Content": "您说的这个问题我不能回答您，您可以尝试询问其他问题"
      },
      "AnswerType": "Text"
    }
  ],
  "RequestId": "961d4187-e2e7-4463-8063-a4c79c912227",
  "SessionId": "1234",
  "MessageId": "961d4187-e2e7-4463-8063-a4c79c912227"
}
```

##### 转人工

###### 全局转人工

```json
{
  "QuerySegList": [
    "人工"
  ],
  "Messages": [
    {
      "Text": {
        "ContentType": "PLAIN_TEXT",
        "AnswerSource": "COMMANDS",
        "Content": "正在为您转接人工客服",
        "Commands": {
          "sysToAgent": "{\\"skillGroup\\":\\"12\\"}"
        }
      },
      "Knowledge": {
        
      },
      "Type": "Text",
      "AnswerType": "Text"
    }
  ],
  "RequestId": "1ad8733a-7180-4e3b-a969-96f47d774256",
  "SessionId": "123",
  "MessageId": "fbbe0230-af14-4850-8f59-2ff60dfbf773"
}
```

###### 触发对话工厂意图转人工

```json
{
  "QuerySegList": [
    "转",
    "人工"
  ],
  "Messages": [
    {
      "Text": {
        "Ext": {
          "MATCHED_ENTRY_NAME": "转人工",
          "MATCHED_INTENT_SOURCE": "",
          "INTENT_ID": 8454,
          "BOT_ANSWER_SOURCE": "Similarity",
          "intentName": "转人工",
          "DsScore": 100.0,
          "INTENT_DETAIL": "转人工",
          "LGF_EXPRESSION": "转人工",
          "IS_SESSION_FINISHED": true,
          "dsScore": 100.0,
          "DIALOG_ID": "2529",
          "FINISH_LABEL": false,
          "IntentName": "转人工",
          "MODULE_START": true,
          "INTENT_NAME": "转人工",
          "INTENT_SOURCE": "Similarity",
          "DIALOG_NAME": "公积金转人工"
        },
        "ContentType": "PLAIN_TEXT",
        "NodeName": "公积金转人工.回复信息",
        "AnswerSource": "BotFramework",
        "Score": 100.0,
        "DialogName": "公积金转人工",
        "IntentName": "转人工",
        "Content": "这是转人工的回复",
        "Commands": {
          "sysToAgent": "{\\"skillGroup\\":\\"8\\",\\"ext\\":\\"123\\"}"
        },
        "NodeId": "i073y198",
        "ExternalFlags": {
          
        }
      },
      "Type": "Text",
      "AnswerType": "Text"
    }
  ],
  "RequestId": "1ad8733a-7180-4e3b-a969-96f47d774256",
  "SessionId": "123",
  "MessageId": "590f0434-030a-4de2-8212-bf1a96e0c687"
}
```

##### 无答案

```json
{
  "QuerySegList": [
    "公积金",
    "贷款"
  ],
  "Messages": [
    {
      "Text": {
        "ContentType": "PLAIN_TEXT",
        "AnswerSource": "NO_ANSWER",
        "Content": "我还没有学会这个问题，已经记录会尽快学习为您解答，请尝试询问我其他问题"
      },
      "AnswerType": "Text"
    }
  ],
  "RequestId": "1ad8733a-7180-4e3b-a969-96f47d774256",
  "SessionId": "1234",
  "MessageId": "1ad8733a-7180-4e3b-a969-96f47d774256"
}
```
 
##### 机器阅读  [非标，依赖开启文档问答能力]

```json
{
    "QuerySegList":[
        "项目",
        "备案"
    ],
    "Messages":[
        {
            "Type":"Text",
            "AnswerType": "Text",
            "Text":{
                "AnswerSource":"MACHINE_READ",
                "ArticleTitle":"备案十一",
                "Content":"四、申请接收:
申请方式:网上申请
联系电话:0571-87052724、87052837
办公地址:无
五、办理基本流程:
1、项目单位登录浙江政务服务网(http://www.zjzwfw.gov.cn)进行法人用户
注册。
2、项目单位使用法人用户账号登录浙江政务服务网投资项目在线审批监
管平台(http://tzxm.zjzwfw.gov.cn)(以下简称在线平台)。
3、项目单位选择在线平台“项目登记”中的“备案类登记”栏目,进入
备案系统。
4、填报项目备案信息
5、提交项目备案信息表,完成项目赋码
6、提交声明,完成项目备案
流程图:http://zjqlk.oss-cn-hangzhou.aliyuncs.com/c/5/53"
            }
        }
    ],
    "RequestId":"089abc58-e9ab-4aa8-86a8-70fc9d8cf0fb",
    "SessionId":"123",
    "MessageId":"089abc58-e9ab-4aa8-86a8-70fc9d8cf0fb"
}
``` 

##### 表格问答直出[非标，依赖开启Tableqa能力]
```json
{
  "QuerySegList": [
    "王珊珊",
    "的",
    "成绩"
  ],
  "Messages": [
    {
      "Text": {
        "ContentType": "PLAIN_TEXT",
        "AnswerSource": "TABLEQA",
        "Content": "姓名是王珊珊的成绩是不及格"
      },
      "AnswerType": "Text"
    }
  ],
  "RequestId": "c09d1913-dd8d-4a45-b8bd-e45e4fcf872b",
  "SessionId": "123",
  "MessageId": "c09d1913-dd8d-4a45-b8bd-e45e4fcf872b"
}
```

##### 表格问答反问[非标，依赖开启Tableqa能力]
```json
{
  "QuerySegList": [
    "收益率",
    "大于",
    "4",
    "的",
    "产品"
  ],
  "Messages": [
    {
      "AnswerSource": "TABLEQA",
      "Title": "请选择投资时间：",
      "Recommends": [
        {
          "Title": "1907"
        },
        {
          "Title": "31"
        },
        {
          "Title": "365"
        }
      ],
      "AnswerType": "Recommend"
    }
  ],
  "RequestId": "abef84e0-8d08-4d80-9dfb-2e958e0833ad",
  "SessionId": "1234",
  "MessageId": "abef84e0-8d08-4d80-9dfb-2e958e0833ad"
}
```',
      'extraInfo' => '## 常见问答错误

### 第三方服务错误
第三方服务错误是由于在FAQ或对话工厂中配置了第三方服务的接口，在问答命中配置的条件或话术时，会调用对应的第三方服务。如果该服务调用错误，则会提示“Third party interface error”，具体协议如下。

**响应参数说明**

| 字段名称  | 字段含义                                                         |
| --------- | ------------------------------------------------------------ |
| RequestId | 请求ID                                                       |
| HostId    | 云小蜜主机ID                                                 |
| Code      | 错误码，第三方服务错误的错误码为“Third party interface error” |
| Message   | 错误说明                                                     |


**响应参数示例**
```json
{
    "RequestId": "A805905D-B20C-57C9-8793-EAF98FBD8F84",
    "HostId": "chatbot.cn-shanghai.aliyuncs.com",
    "Code": "Third party interface error",
    "Message": "第三方接口错误. HTTP 请求出现 IOException 异常，可能由网络链接超时，服务端未响应或其他配置问题导致, Url 信息: https://example.com/order/create",
    "Recommend": "https://next.api.aliyun.com/troubleshoot?q=Third party interface error&product=Chatbot"
}
```',
    ),
    'Associate' => 
    array (
      'summary' => '根据用户query联想知识库中的FAQ。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人唯一标识',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'chatbot-cn-mp90s2lrk00050',
          ),
        ),
        1 => 
        array (
          'name' => 'Utterance',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户表述',
            'description' => '用户表述',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '公积金提取',
          ),
        ),
        2 => 
        array (
          'name' => 'Perspective',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '视角编码，用于调用同一知识标题下不同视角的答案。在拼装请求参数时，需要以Perspective={视角编码}的格式传递参数。如：&Perspective=["FZJBY3raWr"]。使用SDK时以SDK中定义的参数为准。目前仅支持一个视角答案的调用。       （公有云）',
            'description' => '视角编码，用于调用同一知识标题下不同视角的答案。在拼装请求参数时，需要以Perspective={视角编码}的格式传递参数。如：&Perspective=["FZJBY3raWr"]。使用SDK时以SDK中定义的参数为准。目前仅支持一个视角答案的调用',
            'type' => 'array',
            'items' => 
            array (
              'description' => '视角',
              'type' => 'string',
              'required' => false,
              'example' => 'FZJBY3raWr',
            ),
            'required' => false,
            'example' => '["qyzzVfyFfa"]',
          ),
        ),
        3 => 
        array (
          'name' => 'SessionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '会话ID，用于标识一个访问者的会话和保持上下文信息。对于一个新的访问者，首次调用Chat接口时无需传递此字段，机器人会开启一个会话，并在Chat接口的响应中返回该会话的SessionId。对于该访问者的后续轮次的会话，调用Chat接口时传递当前会话的SessionId，机器人即可基于SessionId继续该轮次会话。',
            'description' => '会话ID，用于标识一个访问者的会话和保持上下文信息。对于一个新的访问者，首次调用Chat接口时无需传递此字段，机器人会开启一个会话，并在Chat接口的响应中返回该会话的SessionId。对于该访问者的后续轮次的会话，调用Chat接口时传递当前会话的SessionId，机器人即可基于SessionId继续该轮次会话。',
            'type' => 'string',
            'required' => false,
            'example' => '7c3cec23cc8940bc9db4a318c8f4f0aa',
          ),
        ),
        4 => 
        array (
          'name' => 'RecommendNum',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '推荐问题数量，1-10，当出推荐的时候才生效，返回不大于RecommendN',
            'description' => '推荐问题数量，1-10，当出推荐的时候才生效，返回小于等于RecommendNum的推荐问题',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '8',
          ),
        ),
        5 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '5C20F0D4-9721-178A-8236-3BF990634962',
              ),
              'Associate' => 
              array (
                'title' => '联想的列表',
                'description' => '联想的列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '联想推荐的列表',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Meta' => 
                    array (
                      'title' => '附带信息',
                      'description' => '附带信息',
                      'type' => 'string',
                      'example' => '{}',
                    ),
                    'Title' => 
                    array (
                      'title' => '关联问题的标题',
                      'description' => '关联问题的标题',
                      'type' => 'string',
                      'example' => '公积金提取的政策',
                    ),
                  ),
                ),
              ),
              'SessionId' => 
              array (
                'title' => '本次会话的ID',
                'description' => '本次会话的ID',
                'type' => 'string',
                'example' => '1531ded6b3df4afca4be63943f708bb7',
              ),
              'MessageId' => 
              array (
                'title' => '本条会话应答消息的ID',
                'description' => '本条会话应答消息的ID',
                'type' => 'string',
                'example' => '5ADF0EBD-7C50-1922-A28B-43215B47CC1A',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '会话-联想API',
      'responseParamsDescription' => '### 示例

#### 响应报文
```json
{
    "MessageId":"1eb47d7a1706429081e90c83c62c2f00",
    "SessionId":"93f11165a2a24289a6f869760e8cb3f3",
     "Associate":[
         {
             "Meta":"{}",
             "Title": "专业及后勤类岗位职业发展方有哪些？"
         },
         {
             "Meta":"{}",
             "Title": "专业及后勤类岗位职业发展方有哪些？"
         }
      ]
}
```',
    ),
    'BeginSession' => 
    array (
      'summary' => '获取欢迎语接口。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人唯一标识',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'chatbot-cn-mp90s2lrk00050',
          ),
        ),
        1 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '149C7528-C104-1B50-A4F9-0C5907A8AD9D',
              ),
              'WelcomeMessage' => 
              array (
                'title' => '欢迎语',
                'description' => '欢迎语',
                'type' => 'string',
                'example' => '智能对话机器人为您服务，请问有什么可以帮您？',
              ),
              'SilenceReplyTimeout' => 
              array (
                'description' => '静默超时时间，单位：秒',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'Interruptible' => 
              array (
                'description' => '语音播报是否可打断',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'AsrMaxEndSilence' => 
              array (
                'description' => 'ASR尾点检测时间，单位：毫秒',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '700',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '获取欢迎语',
    ),
    'Nlu' => 
    array (
      'summary' => '针对用户query，返回机器人有关这个query的语言理解（nlu）结果。当前只支持对话工厂、中控的NLU信息透出，其他引擎后续按需支持。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人唯一标识',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'chatbot-cn-mp90s2lrk00050',
          ),
        ),
        1 => 
        array (
          'name' => 'Utterance',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户表述',
            'description' => '用户表述',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '北京的天气怎么样',
          ),
        ),
        2 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
              'Messages' => 
              array (
                'title' => '消息的列表',
                'description' => '消息的列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DialogHubNluInfo' => 
                    array (
                      'title' => '对话中控的nlu信息',
                      'description' => '对话中控的nlu信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'GlobalDictList' => 
                        array (
                          'title' => '全局名词列表',
                          'description' => '全局名词列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'StandardWord' => 
                              array (
                                'title' => '名词',
                                'description' => '名词',
                                'type' => 'string',
                                'example' => '天气',
                              ),
                              'Word' => 
                              array (
                                'title' => '同义词',
                                'description' => '同义词',
                                'type' => 'string',
                                'example' => '天气',
                              ),
                            ),
                          ),
                        ),
                        'GlobalSensitiveWordList' => 
                        array (
                          'title' => '全局敏感词列表',
                          'description' => '全局敏感词列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'StandardWord' => 
                              array (
                                'title' => '名词',
                                'description' => '名词',
                                'type' => 'string',
                                'example' => '天气',
                              ),
                              'Word' => 
                              array (
                                'title' => '同义词',
                                'description' => '同义词',
                                'type' => 'string',
                                'example' => '天气',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'DsNluInfo' => 
                    array (
                      'title' => '对话工厂的nlu信息',
                      'description' => '对话工厂的nlu信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EntityList' => 
                        array (
                          'title' => '实体列表',
                          'description' => '实体列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Name' => 
                              array (
                                'title' => '实体名称',
                                'description' => '实体名称',
                                'type' => 'string',
                                'example' => '@城市',
                              ),
                              'Origin' => 
                              array (
                                'title' => '实体原词（实体成员）',
                                'description' => '实体原词（实体成员）',
                                'type' => 'string',
                                'example' => '北京',
                              ),
                              'Type' => 
                              array (
                                'title' => '实体类型，当前只有text类型',
                                'description' => '实体类型，当前只有text类型',
                                'type' => 'string',
                                'example' => 'text',
                              ),
                              'Value' => 
                              array (
                                'title' => '实体同义词',
                                'description' => '实体同义词',
                                'type' => 'string',
                                'example' => '首都',
                              ),
                            ),
                          ),
                        ),
                        'IntentList' => 
                        array (
                          'title' => '意图列表',
                          'description' => '意图列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'IntentId' => 
                              array (
                                'title' => '意图id',
                                'description' => '意图ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '724387',
                              ),
                              'MatchDetail' => 
                              array (
                                'title' => '匹配详情（匹配过程）',
                                'description' => '匹配详情（匹配过程）',
                                'type' => 'string',
                                'example' => 'classifierType=Fewshot,from=Fewshot,content=[我要查北京的天气, 帮我查北京的天气, 北京天气怎么样, 北京今天下雨吗, 北京今天多少度]',
                              ),
                              'MatchType' => 
                              array (
                                'title' => '匹配类型，其枚举值含义如下：  Similarity：query与意图通过意图话术相似度匹配 Lgf：query与意图通过LGF匹配 Classify：query与意图通过模型训练匹配 FewShotLearning：query与意图通过系统内置fewshot模型匹配 BuildIn： query与系统内置意图匹配',
                                'description' => '匹配类型，其枚举值含义如下：  Similarity：query与意图通过意图话术相似度匹配 Lgf：query与意图通过LGF匹配 Classify：query与意图通过模型训练匹配 FewShotLearning：query与意图通过系统内置fewshot模型匹配 BuildIn： query与系统内置意图匹配',
                                'type' => 'string',
                                'example' => 'FewShotLearning',
                              ),
                              'Name' => 
                              array (
                                'title' => '意图名称',
                                'description' => '意图名称',
                                'type' => 'string',
                                'example' => '查天气意图',
                              ),
                              'Score' => 
                              array (
                                'title' => '分数',
                                'description' => '分数',
                                'type' => 'number',
                                'format' => 'double',
                                'example' => '0.995',
                              ),
                              'SlotList' => 
                              array (
                                'title' => '命中意图的槽位列表',
                                'description' => '命中意图的槽位列表',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'Name' => 
                                    array (
                                      'title' => '实体名称',
                                      'description' => '实体名称',
                                      'type' => 'string',
                                      'example' => '@城市',
                                    ),
                                    'Origin' => 
                                    array (
                                      'title' => '实体原词（实体成员）',
                                      'description' => '实体原词（实体成员）',
                                      'type' => 'string',
                                      'example' => '北京',
                                    ),
                                    'Type' => 
                                    array (
                                      'title' => '实体类型，当前只有text类型',
                                      'description' => '实体类型，当前只有text类型',
                                      'type' => 'string',
                                      'example' => 'text',
                                    ),
                                    'Value' => 
                                    array (
                                      'title' => '实体同义词',
                                      'description' => '实体同义词',
                                      'type' => 'string',
                                      'example' => '首都',
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
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A6357C1B-1D79-1382-B259-BD9E80751B42',
              ),
              'MessageId' => 
              array (
                'title' => '本条语言理解应答消息的ID',
                'description' => '本条语言理解应答消息的ID',
                'type' => 'string',
                'example' => '2828708A-2C7A-1BAE-B810-87DB9DA9C661',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '统一NLU接口',
      'responseParamsDescription' => '### 示例

#### 响应报文
```json
{
  "Messages": [
    {
      "DsNluInfo": {
        "EntityList": [
          {
            "Origin": "北京",
            "Name": "@城市",
            "Type": "text",
            "Value": "首都"
          }
        ],
        "IntentList": [
          {
            "Score": 0.995,
            "SlotList": [
              {
                "Origin": "北京",
                "Name": "@城市",
                "Type": "text",
                "Value": "首都"
              }
            ],
            "MatchType": "FewShotLearning",
            "MatchDetail": "classifierType=Fewshot,from=Fewshot,content=[我要查北京的天气, 帮我查北京的天气, 北京天气怎么样, 北京今天下雨吗, 北京今天多少度]",
            "Name": "查天气意图",
            "IntentId": 724387
          }
        ]
      },
      "DialogHubNluInfo": {
        "GlobalDictList": [
          {
            "StandardWord": "天气",
            "Word": "天气"
          }
        ],
        "GlobalSensitiveWordList": [
          {
            "StandardWord": "天气",
            "Word": "天气"
          }
        ]
      }
    }
  ],
  "RequestId": "5C20F0D4-9721-178A-8236-3BF990634962",
  "MessageId": "e7ac691f-b166-4561-bddf-9dd00c8bdce6"
}

```',
    ),
    'GetAsyncResult' => 
    array (
      'summary' => '获取异步服务执行结果，配合Chat接口使用。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '从Chat接口返回参数中获取TASK_ID',
            'description' => '异步服务的任务ID',
            'type' => 'string',
            'required' => true,
            'example' => '从Chat接口中获取TASK_ID',
          ),
        ),
        1 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '客户服务执行结果数据',
                'type' => 'string',
                'example' => '{"message":"执行完成"}',
              ),
              'Status' => 
              array (
                'description' => '执行状态：
|  字段值   | 含义  |
|----|----|
|  Success  | 任务执行成功  |
| Runninig  | 任务在执行中 |
| Fail  | 任务执行失败 |',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'F79E7305-5314-5069-A701-9591AD051902',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '获取异步函数执行结果',
      'description' => '获取异步服务执行结果',
    ),
    'CreateInstance' => 
    array (
      'summary' => '创建沙箱环境机器人。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人名称，不超过50字',
            'description' => '机器人名称，不超过50个字符',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '小蜜机器人',
          ),
        ),
        1 => 
        array (
          'name' => 'LanguageCode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人服务的语言，如zh-cn、en-us，参考 http://www.lingoes.net/zh/translator/langcode.htm   入参全小写，当前只支持 zh-cn、en-us',
            'description' => '机器人服务的语言，如zh-cn、en-us，默认值为业务空间的默认语言。可选值为业务空间支持的语言',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'zh-cn',
          ),
        ),
        2 => 
        array (
          'name' => 'Introduction',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人备注，不超过50字',
            'description' => '机器人备注，不超过50字',
            'type' => 'string',
            'required' => false,
            'example' => '用于手机app的小蜜机器人',
          ),
        ),
        3 => 
        array (
          'name' => 'RobotType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人类型',
            'description' => '机器人类型，默认为scenario_im',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'scenario_callout' => '外呼机器人',
              'scenario_im' => '在线文本机器人',
              'scenario_ivr' => '导航机器人',
            ),
            'example' => 'scenario_im',
          ),
        ),
        4 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F2E2C40D-AB09-45A1-B5C5-EB9F5C4E4E4A',
              ),
              'InstanceId' => 
              array (
                'title' => '机器人唯一标识',
                'description' => '机器人唯一标识',
                'type' => 'string',
                'example' => 'chatbot-cn-mp90s2lrk00050',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '机器人-创建',
    ),
    'DeleteInstance' => 
    array (
      'summary' => '删除沙箱和线上的机器人。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人唯一标识',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'chatbot-cn-mp90s2lrk00050',
          ),
        ),
        1 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求Id',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '5CBF0581-EAE7-1DC4-95C6-A089656A1E2D',
              ),
              'Status' => 
              array (
                'title' => '任务状态，可以在GetInstancePublishTaskState API 了解更多的状态',
                'description' => '任务状态，可以在GetInstancePublishTaskState API 了解更多的状态',
                'type' => 'string',
                'example' => 'FE_RUNNING',
              ),
              'Response' => 
              array (
                'title' => '任务id',
                'description' => '任务ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '8521',
              ),
              'BizTypeList' => 
              array (
                'title' => '业务类型列表',
                'description' => '业务类型列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '业务类型',
                  'type' => 'string',
                  'example' => 'robot',
                ),
              ),
              'CreateTime' => 
              array (
                'title' => '任务创建的 UTC 时间',
                'description' => '任务创建的 UTC 时间',
                'type' => 'string',
                'example' => '2021-09-11T09:26:14Z',
              ),
              'CreateUserId' => 
              array (
                'title' => '任务创建人Id',
                'description' => '任务创建人ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '9052',
              ),
              'Error' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => '检查待发布模块是否空闲发生错误，faq',
              ),
              'Id' => 
              array (
                'title' => '任务id',
                'description' => '任务ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '8521',
              ),
              'CreateUserName' => 
              array (
                'title' => '任务创建人',
                'description' => '任务创建人',
                'type' => 'string',
                'example' => 'xuqiang_test',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '机器人-删除',
    ),
    'UpdateInstance' => 
    array (
      'summary' => '更新机器人名称，描述。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人唯一标识',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'chatbot-cn-mp90s2lrk00050',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '要修改的机器人名称',
            'description' => '要修改的机器人名称，最多50个字符',
            'type' => 'string',
            'required' => false,
            'example' => '智能客服-小C',
          ),
        ),
        2 => 
        array (
          'name' => 'Introduction',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '要修改的机器人备注',
            'description' => '要修改的机器人备注',
            'type' => 'string',
            'required' => false,
            'example' => '用于C端问答的机器人',
          ),
        ),
        3 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'C45BFEE4-F657-1332-8B47-2C757B94C972',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '机器人-更新',
    ),
    'LinkInstanceCategory' => 
    array (
      'summary' => '机器人绑定知识类目。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人唯一标识',
            'description' => '机器人唯一标识',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'chatbot-cn-mp90s2lrk00050',
          ),
        ),
        1 => 
        array (
          'name' => 'CategoryIds',
          'in' => 'formData',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '知识类目Id',
            'description' => '绑定到机器人的FAQ类目ID数组',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '[\\"30000065789\\"]',
          ),
        ),
        2 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求Id',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D8C96601-E645-1BD7-99F3-04EADAB84E29',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '机器人-绑定类目',
    ),
    'DescribeInstance' => 
    array (
      'summary' => '查询机器人详情。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人唯一标识',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'chatbot-cn-mp90s2lrk00050',
          ),
        ),
        1 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求Id',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '907AA5F2-0521-49AB-80AB-1ADEFAB2B901',
              ),
              'InstanceId' => 
              array (
                'title' => '机器人唯一标识',
                'description' => '机器人唯一标识',
                'type' => 'string',
                'example' => 'chatbot-cn-mp90s2lrk00050',
              ),
              'Name' => 
              array (
                'title' => '机器人名称',
                'description' => '机器人名称',
                'type' => 'string',
                'example' => '智能客服-小C',
              ),
              'TimeZone' => 
              array (
                'title' => '机器人的时区，参考《公共-时区码》',
                'description' => '机器人的时区，参考《公共-时区码》',
                'type' => 'string',
                'example' => 'Asia/Chongqing',
              ),
              'Introduction' => 
              array (
                'title' => '机器人备注',
                'description' => '机器人备注',
                'type' => 'string',
                'example' => '用于C端问答的机器人',
              ),
              'LanguageCode' => 
              array (
                'title' => '机器人服务的语言，如zh-cn、en-us',
                'description' => '机器人服务的语言，如zh-cn、en-us',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'en-us' => '英文',
                  'zh-cn' => '中文',
                ),
                'example' => 'zh-cn',
              ),
              'RobotType' => 
              array (
                'title' => '机器人类型',
                'description' => '机器人类型',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'scenario_callout' => '外呼机器人',
                  'scenario_im' => '在线文本机器人',
                  'scenario_ivr' => '导航机器人',
                ),
                'example' => 'scenario_im',
              ),
              'Avatar' => 
              array (
                'title' => '机器人头像的URL',
                'description' => '机器人头像的URL',
                'type' => 'string',
                'example' => '/alimefe/meebot/robot/0.0.5/img/xxx-90-97.png',
              ),
              'EditStatus' => 
              array (
                'title' => '机器人状态： EDITING(编辑中)、 PUBLISHED(已发布)',
                'description' => '机器人状态',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'PUBLISHED' => '已发布',
                  'EDITING' => '编辑中',
                ),
                'example' => 'PUBLISHED',
              ),
              'CreateTime' => 
              array (
                'title' => '机器人创建的 UTC 时间',
                'description' => '机器人创建的 UTC 时间',
                'type' => 'string',
                'example' => '2021-08-12T16:00:01Z',
              ),
              'Categories' => 
              array (
                'title' => '类目列表',
                'description' => '类目列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CategoryId' => 
                    array (
                      'title' => '类目id',
                      'description' => '类目ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '30000066832',
                    ),
                    'Name' => 
                    array (
                      'title' => '类目名称',
                      'description' => '类目名称',
                      'type' => 'string',
                      'example' => '杭州市防疫政策',
                    ),
                    'ParentCategoryId' => 
                    array (
                      'title' => '父类目id，-1表示根目录',
                      'description' => '父类目ID，-1表示根目录',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '-1',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '获取机器人详情',
      'responseParamsDescription' => '### 示例
#### 响应报文：

```json
{
	"Name": "test1",
	"LanguageCode": "zh-cn",
  "RobotType":"scenario_im",
	"Introduction": "客户演示",
	"InstanceId": "chatbot-cn-mp90s2lrk00050",
	"CreateTime": "2018-09-11T09:26:14Z",
	"RequestId": "E7661C58-9CE7-4754-AB98-9BA40EAA7C27",
	"Avatar": "//gw.alicdn.com/tfs/TB1N5CwqTtYBeNjy1XdXXXXyVXa-90-97.png",
	"TimeZone": "Asia/Chongqing",
	"Categories": [
	  {
		"Name": "测试类目test11",
		"ParentCategoryId": -1,
		"CategoryId": 1000006427
	  }
	]
}
```',
    ),
    'ListInstance' => 
    array (
      'summary' => '查询机器人列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
            'title' => '分页-第几页，默认1',
            'description' => '分页-第几页，默认1',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => '分页-页面大小，默认10',
            'description' => '分页-页面大小，默认10',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'RobotType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '按机器人类型筛选',
            'description' => '按机器人类型筛选',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'scenario_callout' => '外呼机器人',
              'scenario_im' => '在线文本机器人',
              'scenario_ivr' => '导航机器人',
            ),
            'example' => 'scenario_im',
          ),
        ),
        3 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '按机器人名称模糊搜索',
            'description' => '按机器人名称模糊搜索',
            'type' => 'string',
            'required' => false,
            'example' => '售前客服',
          ),
        ),
        4 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
              'Instances' => 
              array (
                'title' => '机器人列表信息',
                'description' => '机器人列表信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '机器人信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'InstanceId' => 
                    array (
                      'title' => '机器人唯一标识',
                      'description' => '机器人唯一标识',
                      'type' => 'string',
                      'example' => 'chatbot-cn-mp90s2lrk00050',
                    ),
                    'Name' => 
                    array (
                      'title' => '机器人名称',
                      'description' => '机器人名称',
                      'type' => 'string',
                      'example' => '智能客服-小C',
                    ),
                    'Introduction' => 
                    array (
                      'title' => '机器人备注',
                      'description' => '机器人备注',
                      'type' => 'string',
                      'example' => '用于C端问答的机器人',
                    ),
                    'LanguageCode' => 
                    array (
                      'title' => '机器人服务的语言',
                      'description' => '机器人服务的语言，如 zh-cn、en-us，参考 http://www.lingoes.net/zh/translator/langcode.htm ',
                      'type' => 'string',
                      'example' => 'zh-cn',
                    ),
                    'RobotType' => 
                    array (
                      'title' => '机器人类型',
                      'description' => '机器人类型',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'scenario_callout' => '外呼机器人',
                        'scenario_im' => '在线文本机器人',
                        'scenario_ivr' => '导航机器人',
                      ),
                      'example' => 'scenario_im',
                    ),
                    'Avatar' => 
                    array (
                      'title' => '机器人头像的URL',
                      'description' => '机器人头像的URL',
                      'type' => 'string',
                      'example' => '/alimefe/meebot/robot/0.0.5/img/xxx-90-97.png',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '机器人创建的 UTC 时间',
                      'description' => '机器人创建的 UTC 时间',
                      'type' => 'string',
                      'example' => '2021-08-12T16:00:01Z',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'title' => '总条数',
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '23',
              ),
              'PageSize' => 
              array (
                'title' => '分页-页面大小',
                'description' => '分页-页面大小',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
              ),
              'PageNumber' => 
              array (
                'title' => '分页-第几页',
                'description' => '分页-第几页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'title' => '请求Id',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '92B81548-42B9-4B34-924B-4E778AEB412B',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '机器人-列表',
      'responseParamsDescription' => '### 示例
#### 响应报文：
```json
 {
  "PageNumber": 1,
  "TotalCount": 1,
  "PageSize": 10,
  "RequestId": "787B6D28-A81E-486F-BC8C-64ADED337B25",
  "Instances":[
      {
          "InstanceId":"chatbot-cn-xxxxx",
          "Avatar":"/alimefe/meebot/robot/0.0.5/img/xxx-90-97.png",
          "LanguageCode":"zh-cn",
          "RobotType":"scenario_im",
          "Name":"智能客服-小C",
          "Introduction":"用于C端问答的机器人",
          "CreateTime":"2021-08-12T16:00:01Z"
      }
    ]
}

```',
    ),
    'CreateInstancePublishTask' => 
    array (
      'summary' => '将沙箱机器人发布到线上。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人唯一标识',
            'description' => '机器人唯一标识',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'chatbot-cn-mp90s2lrk00050',
          ),
        ),
        1 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求Id',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '5CBF0581-EAE7-1DC4-95C6-A089656A1E2D',
              ),
              'Id' => 
              array (
                'title' => '任务Id',
                'description' => '任务ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '8522',
              ),
              'Response' => 
              array (
                'title' => '任务Id',
                'description' => '任务ID',
                'type' => 'string',
                'example' => '8522',
              ),
              'Status' => 
              array (
                'title' => '任务状态',
                'description' => '任务状态',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'FE_SUCCESS' => '发布成功',
                  'FE_ABORTED' => '发布取消',
                  'FE_WARNING' => '有警告，若需继续，请调用 ContinueInstancePublishTask 接口继续发布',
                  'FE_FAILED' => '发布失败',
                  'FE_RUNNING' => '正在发布中',
                ),
                'example' => 'FE_RUNNING',
                'enum' => 
                array (
                  0 => 'FE_RUNNING：正在发布中',
                  1 => 'FE_WARNING：有警告，若需继续，请调用 ContinueInstancePublishTask 接口继续发布',
                  2 => 'FE_SUCCESS：发布成功',
                  3 => 'FE_FAILED：发布失败',
                  4 => 'FE_ABORTED：发布取消',
                ),
              ),
              'BizTypeList' => 
              array (
                'title' => '业务类型列表',
                'description' => '业务类型列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '发布任务的业务类型',
                  'type' => 'string',
                  'example' => 'robot',
                ),
              ),
              'Error' => 
              array (
                'title' => 'job失败信息',
                'description' => 'job失败信息',
                'type' => 'string',
                'example' => '检查待发布模块是否空闲发生错误,faq',
              ),
              'CreateTime' => 
              array (
                'title' => '任务创建的 UTC 时间',
                'description' => '任务创建的 UTC 时间',
                'type' => 'string',
                'example' => '2022-04-12T06:30:17Z',
              ),
              'ModifyTime' => 
              array (
                'title' => '任务修改的 UTC 时间',
                'description' => '任务修改的 UTC 时间',
                'type' => 'string',
                'example' => '2022-04-12T06:30:33Z',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '创建机器人发布任务',
      'responseParamsDescription' => '
### 示例
#### 响应报文：

```json
{
    "ModifyTime": "2022-04-12T06:30:17Z",
    "BizTypeList": [
        "robot"
    ],
    "CreateTime": "2022-04-12T06:30:17Z",
    "RequestId": "edba56e5-aac2-49b4-a406-3e4d7e7952dd",
    "Response": "4930",
    "Id": 4930,
    "Status": "FE_RUNNING"
}

```',
    ),
    'CancelInstancePublishTask' => 
    array (
      'summary' => '在发布机器人的过程中，取消机器人发布任务。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人唯一标识',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'chatbot-cn-mp90s2lrk00050',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '任务ID',
            'description' => '任务ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => true,
            'example' => '8521',
          ),
        ),
        2 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求Id',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '5CBF0581-EAE7-1DC4-95C6-A089656A1E2D',
              ),
              'Id' => 
              array (
                'title' => '任务Id',
                'description' => '任务ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '8522',
              ),
              'Response' => 
              array (
                'title' => '任务Id',
                'description' => '任务ID',
                'type' => 'string',
                'example' => '8522',
              ),
              'Status' => 
              array (
                'title' => '任务状态',
                'description' => '任务状态',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'FE_SUCCESS' => '发布成功',
                  'FE_ABORTED' => '发布取消',
                  'FE_FAILED' => '发布失败',
                  'FE_RUNNING' => '正在发布中',
                ),
                'example' => 'FE_ABORTED',
                'enum' => 
                array (
                  0 => 'FE_RUNNING：正在发布中',
                  1 => 'FE_WARNING：有警告，若需继续，请调用 ContinueInstancePublishTask 接口继续发布',
                  2 => 'FE_SUCCESS：发布成功',
                  3 => 'FE_FAILED：发布失败',
                  4 => 'FE_ABORTED：发布取消',
                ),
              ),
              'BizTypeList' => 
              array (
                'title' => '业务类型列表',
                'description' => '业务类型列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '业务列表',
                  'type' => 'string',
                  'example' => 'robot',
                ),
              ),
              'Error' => 
              array (
                'title' => 'job失败信息',
                'description' => 'job失败信息',
                'type' => 'string',
                'example' => '检查待发布模块是否空闲发生错误，faq',
              ),
              'CreateTime' => 
              array (
                'title' => '任务创建的 UTC 时间',
                'description' => '任务创建的 UTC 时间',
                'type' => 'string',
                'example' => '2022-04-12T06:30:17Z',
              ),
              'ModifyTime' => 
              array (
                'title' => '任务修改的 UTC 时间',
                'description' => '任务修改的 UTC 时间',
                'type' => 'string',
                'example' => '2022-04-12T06:30:33Z',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '取消机器人发布',
      'responseParamsDescription' => '### 示例
#### 响应报文：

```json
{
    "ModifyTime": "2022-04-14T03:43:55Z",
    "BizTypeList": [
        "robot"
    ],
    "CreateTime": "2022-04-14T03:43:54Z",
    "RequestId": "c2f542c6-f0e3-464c-9aaf-ad6f6eab8140",
    "Response": "5088",
    "Warnings": {
        "category_bind_chitchat": [
            "以下类目没有发布到正式环境:第一个闲聊包"
        ]
    },
    "Id": 5088,
    "Status": "FE_ABORTED"
}

```',
    ),
    'ContinueInstancePublishTask' => 
    array (
      'summary' => '机器人发布告警时，忽略告警并继续发布。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人唯一标识',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'chatbot-cn-mp90s2lrk00050',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '任务ID',
            'description' => '任务ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => true,
            'example' => '8521',
          ),
        ),
        2 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求Id',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '5CBF0581-EAE7-1DC4-95C6-A089656A1E2D',
              ),
              'Id' => 
              array (
                'title' => '任务Id',
                'description' => '任务ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '8522',
              ),
              'Response' => 
              array (
                'title' => '任务Id',
                'description' => '任务ID',
                'type' => 'string',
                'example' => '8522',
              ),
              'Status' => 
              array (
                'title' => '任务状态',
                'description' => '任务状态',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'FE_SUCCESS' => '发布成功',
                  'FE_ABORTED' => '发布取消',
                  'FE_WARNING' => '发布警告',
                  'FE_FAILED' => '发布失败',
                  'FE_RUNNING' => '正在发布中',
                ),
                'example' => 'FE_RUNNING',
                'enum' => 
                array (
                  0 => 'FE_RUNNING：正在发布中',
                  1 => 'FE_WARNING：有警告，若需继续，请调用 ContinueInstancePublishTask 接口继续发布',
                  2 => 'FE_SUCCESS：发布成功',
                  3 => 'FE_FAILED：发布失败',
                  4 => 'FE_ABORTED：发布取消',
                ),
              ),
              'BizTypeList' => 
              array (
                'title' => '业务类型列表',
                'description' => '业务类型列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '业务类型',
                  'type' => 'string',
                  'example' => 'robot',
                ),
              ),
              'Error' => 
              array (
                'title' => 'job失败信息',
                'description' => 'job失败信息',
                'type' => 'string',
                'example' => '检查待发布模块是否空闲发生错误，faq',
              ),
              'CreateTime' => 
              array (
                'title' => '任务创建的 UTC 时间',
                'description' => '任务创建的 UTC 时间',
                'type' => 'string',
                'example' => '2022-04-12T06:30:17Z',
              ),
              'ModifyTime' => 
              array (
                'title' => '任务修改的 UTC 时间',
                'description' => '任务修改的 UTC 时间',
                'type' => 'string',
                'example' => '2022-04-12T06:30:33Z',
              ),
              'Warnings' => 
              array (
                'title' => '各子发布模块的警告信息，key是子发布模块，value是警告信息',
                'description' => '各子发布模块的警告信息，key是子发布模块，value是警告信息',
                'type' => 'object',
                'example' => '{
	"category_bind_faq": [
		"以下类目没有发布到正式环境: 项目交付信息汇总"
	]
}',
              ),
              'Errors' => 
              array (
                'title' => '各子发布模块的错误信息，key是子发布模块，value是错误信息',
                'description' => '各子发布模块的错误信息，key是子发布模块，value是错误信息',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '继续机器人发布',
      'responseParamsDescription' => '### Warnings&Errors 子发布模块枚举：
| key值 | 含义 |
| --- | --- |
| category_bind\\_chitchat | 闲聊绑定关系 |
| category_bind\\_faq | faq的绑定关系 |
| robot_ds | 对话工厂对话流 |
| ds_entity | 对话工厂实体 |
| ds_intent | 对话工厂意图 |

### 示例
#### 响应报文：
```json
{
    "ModifyTime": "2022-04-12T06:32:59Z",
    "BizTypeList": [
        "robot"
    ],
    "CreateTime": "2022-04-12T06:30:17Z",
    "RequestId": "1b6318c2-df76-4117-9c2c-02e22940ff24",
    "Response": "4930",
    "Warnings": {
        "category_bind_faq": [
            "以下类目没有发布到正式环境: 项目交付信息汇总"
        ]
    },
    "Id": 4930,
    "Status": "FE_RUNNING"
}
```',
    ),
    'GetInstancePublishTaskState' => 
    array (
      'summary' => '查询机器人发布进度。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人唯一标识',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'chatbot-cn-mp90s2lrk00050',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '任务ID',
            'description' => '任务ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => true,
            'example' => '8521',
          ),
        ),
        2 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求Id',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '5CBF0581-EAE7-1DC4-95C6-A089656A1E2D',
              ),
              'Id' => 
              array (
                'title' => '任务Id',
                'description' => '任务ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '8522',
              ),
              'Response' => 
              array (
                'title' => '任务Id',
                'description' => '任务ID',
                'type' => 'string',
                'example' => '8522',
              ),
              'Status' => 
              array (
                'title' => '任务状态',
                'description' => '任务状态',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'FE_SUCCESS' => '发布成功',
                  'FE_ABORTED' => '发布取消',
                  'FE_WARNING' => '有警告，若需继续，请调用 ContinueInstancePublishTask 接口继续发布',
                  'FE_FAILED' => '发布失败',
                  'FE_RUNNING' => '正在发布中',
                ),
                'example' => 'FE_RUNNING',
                'enum' => 
                array (
                  0 => 'FE_RUNNING：正在发布中',
                  1 => 'FE_WARNING：有警告，若需继续，请调用 ContinueInstancePublishTask 接口继续发布',
                  2 => 'FE_SUCCESS：发布成功',
                  3 => 'FE_FAILED：发布失败',
                  4 => 'FE_ABORTED：发布取消',
                ),
              ),
              'BizTypeList' => 
              array (
                'title' => '业务类型列表',
                'description' => '业务类型列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '发布任务的业务类型',
                  'type' => 'string',
                  'example' => 'robot',
                ),
              ),
              'Error' => 
              array (
                'title' => 'job失败信息',
                'description' => 'job失败信息',
                'type' => 'string',
                'example' => '检查待发布模块是否空闲发生错误，faq',
              ),
              'CreateTime' => 
              array (
                'title' => '任务创建的 UTC 时间',
                'description' => '任务创建的 UTC 时间',
                'type' => 'string',
                'example' => '2022-04-12T06:30:17Z',
              ),
              'ModifyTime' => 
              array (
                'title' => '任务修改的 UTC 时间',
                'description' => '任务修改的 UTC 时间',
                'type' => 'string',
                'example' => '2022-04-12T06:30:33Z',
              ),
              'Warnings' => 
              array (
                'title' => '各子发布模块的警告信息，key是子发布模块，value是警告信息',
                'description' => '各子发布模块的警告信息，key是子发布模块，value是警告信息',
                'type' => 'object',
                'example' => '{
    "category_bind_faq": [
        "以下类目没有发布到正式环境：项目交付类目"
    ]
}',
              ),
              'Errors' => 
              array (
                'title' => '各子发布模块的错误信息，key是子发布模块，value是错误信息',
                'description' => '各子发布模块的错误信息，key是子发布模块，value是错误信息',
                'type' => 'object',
                'example' => '{
    "robot_ds": [
        "{\\"dialogName\\":\\"TEST\\",\\"errorMessage\\":[\\"medusa@invocation.error.service.offline@请发布对话流所引用服务后重试！\\"],\\"needRefresh\\":false,\\"success\\":false}"
    ]
}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '查询机器人发布进度',
      'responseParamsDescription' => '
### Status字段枚举：
| 字段名 | 枚举值 | 含义 |
| --- | --- | --- |
| Status | FE_RUNNING | 正在发布中 |
| Status | FE_WARNING | 有警告，若需继续，请调用`ContinueInstancePublishTask`接口继续发布 |
| Status | FE_SUCCESS | 发布成功 |
| Status | FE_FAILED | 发布失败 |
| Status | FE_ABORTED | 发布取消 |

### Warnings&Errors 子发布模块枚举：
| key值 | 含义 |
| --- | --- |
| category\\_bind\\_chitchat | 闲聊绑定关系 |
| category\\_bind\\_faq | faq的绑定关系 |
| robot_ds | 对话工厂对话流 |
| ds_entity | 对话工厂实体 |
| ds_intent | 对话工厂意图 |

### 示例
#### 响应报文：

```json
{
    "ModifyTime": "2022-04-12T06:30:21Z",
    "BizTypeList": [
        "robot"
    ],
    "CreateTime": "2022-04-12T06:30:17Z",
    "RequestId": "cddf472f-6ce3-4eef-a969-1e8b16850cb4",
    "Response": "4930",
    "Warnings": {
        "category_bind_faq": [
            "以下类目没有发布到正式环境：项目交付类目"
        ]
    },
    "Id": 4930,
    "Status": "FE_WARNING"
}
```',
    ),
    'CreateSolution' => 
    array (
      'summary' => '创建知识答案。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'KnowledgeId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '知识ID',
            'description' => '知识ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '30001905617',
          ),
        ),
        1 => 
        array (
          'name' => 'Content',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '答案内容',
            'description' => '答案内容',
            'type' => 'string',
            'required' => true,
            'example' => '答案内容',
          ),
        ),
        2 => 
        array (
          'name' => 'ContentType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '答案类型',
            'description' => '答案类型：0-纯文本，1-富文本',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PerspectiveCodes',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '视角code列表',
            'description' => '视角code列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '视角code',
              'type' => 'string',
              'required' => false,
              'example' => 'm8qAIvUUAIf',
            ),
            'required' => true,
            'maxItems' => 10,
          ),
        ),
        4 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'title' => 'result',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F55D90C1-31BE-4B2A-AA3F-25EFC36F9419',
              ),
              'SolutionId' => 
              array (
                'title' => '答案ID',
                'description' => '答案ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100001089003',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '创建FAQ答案',
    ),
    'DeleteSolution' => 
    array (
      'summary' => '删除答案。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'SolutionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '答案ID',
            'description' => '答案ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '100001321580',
          ),
        ),
        1 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'title' => 'result',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID
',
                'type' => 'string',
                'example' => 'F79E7305-5314-5069-A701-9591AD051902',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '删除FAQ答案',
    ),
    'UpdateSolution' => 
    array (
      'summary' => '更新答案。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'SolutionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '答案ID',
            'description' => '答案ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '100001333260',
          ),
        ),
        1 => 
        array (
          'name' => 'Content',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '答案内容',
            'description' => '答案内容',
            'type' => 'string',
            'required' => true,
            'example' => '修改的答案内容',
          ),
        ),
        2 => 
        array (
          'name' => 'ContentType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '答案类型',
            'description' => '答案类型：0-纯文本，1-富文本',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PerspectiveCodes',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '视角code列表',
            'description' => '视角code列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '视角code',
              'type' => 'string',
              'required' => false,
              'example' => 'default',
            ),
            'required' => true,
            'maxItems' => 10,
          ),
        ),
        4 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'title' => 'result',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '8B8F098D-A338-54DD-B19C-24BBBCBD8498',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '更新FAQ答案',
    ),
    'ListSolution' => 
    array (
      'summary' => '查询知识的答案列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'KnowledgeId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '知识ID',
            'description' => '知识ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '30001905617',
          ),
        ),
        1 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'title' => 'result',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'Solutions' => 
              array (
                'title' => '答案列表',
                'description' => '答案列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '答案信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SolutionId' => 
                    array (
                      'title' => '答案ID',
                      'description' => '答案ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '496',
                    ),
                    'ModifyTime' => 
                    array (
                      'title' => '修改时间(UTC 时间)',
                      'description' => '修改时间（UTC 时间）',
                      'type' => 'string',
                      'example' => '2022-03-29T06:23:53Z',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间(UTC 时间)',
                      'description' => '创建时间（UTC 时间）',
                      'type' => 'string',
                      'example' => '2022-03-29T03:55:04Z',
                    ),
                    'Content' => 
                    array (
                      'title' => '答案内容',
                      'description' => '答案内容',
                      'type' => 'string',
                      'example' => '答案内容',
                    ),
                    'ContentType' => 
                    array (
                      'title' => '答案类型(0纯文本，1富文本）',
                      'description' => '答案类型：0-纯文本，1-富文本',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'PlainText' => 
                    array (
                      'title' => '答案纯文本内容',
                      'description' => '答案纯文本内容',
                      'type' => 'string',
                      'example' => '答案内容',
                    ),
                    'PerspectiveCodes' => 
                    array (
                      'title' => '视角code列表',
                      'description' => '视角code列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '视角code',
                        'type' => 'string',
                        'example' => 'm8qAIvUUAIf',
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '5B29DB5E-251D-5A73-84B5-A12DF795F231',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '获取FAQ答案列表',
    ),
    'CreateConnQuestion' => 
    array (
      'summary' => '为知识添加关联知识。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'ConnQuestionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '关联知识ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '30002654628',
          ),
        ),
        1 => 
        array (
          'name' => 'KnowledgeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '知识ID
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '30002174773',
          ),
        ),
        2 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'title' => 'result',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID
',
                'type' => 'string',
                'example' => 'C191B48B-9268-4FB1-A3C2-5143B4A91D0C',
              ),
              'OutlineId' => 
              array (
                'title' => '关联关系ID',
                'description' => '关联关系ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1000002123',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '创建关联问',
    ),
    'DeleteConnQuestion' => 
    array (
      'summary' => '删除知识的关联知识。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'OutlineId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '关联关系ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '877397683',
          ),
        ),
        1 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'title' => 'result',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'FC323352-3AD7-59A1-9088-A64470BAFC9D',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '删除FAQ关联问',
    ),
    'UpdateConnQuestion' => 
    array (
      'summary' => '更新关联关系。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'ConnQuestionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '关联知识ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '1000000295',
          ),
        ),
        1 => 
        array (
          'name' => 'OutlineId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '关联关系ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '877397683',
          ),
        ),
        2 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'title' => 'result',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '004EB5C0-9DEB-53BF-A57A-0407A6D6B3C9',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '更新FAQ关联问',
    ),
    'ListConnQuestion' => 
    array (
      'summary' => '查询知识的关联问题列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'KnowledgeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '知识ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '30001905617',
          ),
        ),
        1 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'title' => 'result',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '92B81548-42B9-4B34-924B-4E778AEB412B',
              ),
              'Outlines' => 
              array (
                'description' => '关联问题列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '关联问信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'OutlineId' => 
                    array (
                      'title' => '关联关系ID',
                      'description' => '关联关系ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '797',
                    ),
                    'ConnQuestionId' => 
                    array (
                      'title' => '关联知识ID',
                      'description' => '关联知识ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '30001979424',
                    ),
                    'Title' => 
                    array (
                      'title' => '关联知识题目',
                      'description' => '关联知识标题',
                      'type' => 'string',
                      'example' => '关联问',
                    ),
                    'ModifyTime' => 
                    array (
                      'title' => '修改时间(UTC 时间)',
                      'description' => '修改时间（UTC 时间）',
                      'type' => 'string',
                      'example' => '2022-05-26T10:18:15Z',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间(UTC 时间)',
                      'description' => '创建时间（UTC 时间）',
                      'type' => 'string',
                      'example' => '2022-02-25T02:47:18Z',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '获取关联问列表',
    ),
    'CreateSimQuestion' => 
    array (
      'summary' => '创建相似问题。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'KnowledgeId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '知识ID',
            'description' => '知识ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '30001905617',
          ),
        ),
        2 => 
        array (
          'name' => 'Title',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '相似问标题，字数上限-120',
            'description' => '相似问标题，字数上限：120字',
            'type' => 'string',
            'required' => true,
            'example' => '测试相似问标题',
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
            'title' => 'result',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'SimQuestionId' => 
              array (
                'title' => '相似问ID',
                'description' => '相似问ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1000002788',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '16AC1B3C-66E0-438B-BB7C-71B692407B67',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '创建相似问',
    ),
    'DeleteSimQuestion' => 
    array (
      'summary' => '删除相似问题。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'SimQuestionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '相似问ID',
            'description' => '相似问ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '1000002788',
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
            'title' => 'result',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '6419BA93-D111-5225-8998-13E63E6D3940',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '删除FAQ相似问',
    ),
    'UpdateSimQuestion' => 
    array (
      'summary' => '更新相似问题。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'Title',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '相似问标题，字数上限-120',
            'description' => '相似问标题，字数上限：120字',
            'type' => 'string',
            'required' => true,
            'example' => '测试相似问标题',
          ),
        ),
        2 => 
        array (
          'name' => 'SimQuestionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '相似问ID',
            'description' => '相似问ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '1000002788',
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
            'title' => 'result',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'DFB71B34-4188-4EA2-9988-EF3014E75910',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '更新FAQ相似问',
    ),
    'ListSimQuestion' => 
    array (
      'summary' => '查询知识的相似问题列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'KnowledgeId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '知识ID',
            'description' => '知识ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '30002299537',
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
            'title' => 'result',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '15CD94CC-CBEB-4189-806C-A132D1F45D51',
              ),
              'SimQuestions' => 
              array (
                'title' => '相似问列表',
                'description' => '相似问列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '相似问信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SimQuestionId' => 
                    array (
                      'title' => '相似问ID',
                      'description' => '相似问ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '30001979424',
                    ),
                    'ModifyTime' => 
                    array (
                      'title' => '修改时间(UTC 时间)',
                      'description' => '修改时间（UTC 时间）',
                      'type' => 'string',
                      'example' => '2022-05-13T03:49:28Z',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间(UTC 时间)',
                      'description' => '创建时间（UTC 时间）',
                      'type' => 'string',
                      'example' => '2022-05-30T02:08:33Z',
                    ),
                    'Title' => 
                    array (
                      'title' => '相似问标题',
                      'description' => '相似问标题',
                      'type' => 'string',
                      'example' => '相似问',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '获取FAQ相似问列表',
    ),
    'CreateFaq' => 
    array (
      'summary' => '创建一条知识。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'CategoryId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '知识的类目ID',
            'description' => '知识的类目ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '1000053274',
          ),
        ),
        2 => 
        array (
          'name' => 'Title',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '知识标题',
            'description' => '知识标题，字数上限：120字',
            'type' => 'string',
            'required' => true,
            'example' => '测试标题',
          ),
        ),
        3 => 
        array (
          'name' => 'StartDate',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '生效时间',
            'description' => '生效时间',
            'type' => 'string',
            'required' => false,
            'example' => '2022-05-25T16:28:36Z',
          ),
        ),
        4 => 
        array (
          'name' => 'EndDate',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '失效时间',
            'description' => '失效时间',
            'type' => 'string',
            'required' => false,
            'example' => '2030-12-31T16:00:00Z',
          ),
        ),
        5 => 
        array (
          'name' => 'SolutionContent',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '默认答案内容',
            'description' => '默认答案内容（如果兜底视角开启，则此项必填）',
            'type' => 'string',
            'required' => false,
            'example' => '测试答案',
          ),
        ),
        6 => 
        array (
          'name' => 'SolutionType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '默认答案类型',
            'description' => '默认答案类型：0-纯文本，1-富文本',
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
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'title' => 'result',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'KnowledgeId' => 
              array (
                'title' => '知识ID',
                'description' => '知识ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '30001979424',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '28805A7C-D695-548C-A31B-67E52C2C274F',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '创建FAQ',
    ),
    'DeleteFaq' => 
    array (
      'summary' => '删除一条知识。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'KnowledgeId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '知识ID，创建知识该值为空',
            'description' => '知识ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '30001905617',
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
            'title' => 'result',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F79E7305-5314-5069-A701-9591AD051902',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '删除FAQ',
    ),
    'UpdateFaq' => 
    array (
      'summary' => '编辑一条知识。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'KnowledgeId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '知识ID',
            'description' => '知识ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '30001905617',
          ),
        ),
        2 => 
        array (
          'name' => 'CategoryId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '知识的类目ID',
            'description' => '知识的类目ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '30000049006',
          ),
        ),
        3 => 
        array (
          'name' => 'Title',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '知识标题',
            'description' => '知识标题',
            'type' => 'string',
            'required' => true,
            'example' => '测试标题',
          ),
        ),
        4 => 
        array (
          'name' => 'StartDate',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '生效时间',
            'description' => '生效时间',
            'type' => 'string',
            'required' => false,
            'example' => '2022-05-27T05:18:20Z',
          ),
        ),
        5 => 
        array (
          'name' => 'EndDate',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '失效时间',
            'description' => '失效时间',
            'type' => 'string',
            'required' => false,
            'example' => '2030-12-31T16:00:00Z',
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
            'title' => 'result',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '736994BD-AA35-4742-88C9-E64BE4BAA14B',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '修改FAQ',
    ),
    'DescribeFaq' => 
    array (
      'summary' => '查询知识详情。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'KnowledgeId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '知识ID',
            'description' => '知识ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '-9223372036854775808',
            'exclusiveMinimum' => true,
            'example' => '30001979424',
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
            'title' => 'KnowledgeResponse',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'KnowledgeId' => 
              array (
                'title' => '知识ID',
                'description' => '知识ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '30001979424',
              ),
              'Title' => 
              array (
                'title' => '标题',
                'description' => '标题',
                'type' => 'string',
                'example' => '测试标题',
              ),
              'ModifyTime' => 
              array (
                'title' => '修改时间（UTC时间）',
                'description' => '修改时间（UTC 时间）',
                'type' => 'string',
                'example' => '2020-12-02T06:35:50Z',
              ),
              'ModifyUserName' => 
              array (
                'title' => '修改人',
                'description' => '修改人',
                'type' => 'string',
                'example' => 'test01',
              ),
              'CreateTime' => 
              array (
                'title' => '创建时间（UTC时间）',
                'description' => '创建时间（UTC 时间）',
                'type' => 'string',
                'example' => '2020-11-30T03:03:37Z',
              ),
              'CreateUserName' => 
              array (
                'title' => '创建人',
                'description' => '创建人',
                'type' => 'string',
                'example' => 'test01',
              ),
              'CategoryId' => 
              array (
                'title' => '类目ID',
                'description' => '类目ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '30000055617',
              ),
              'Status' => 
              array (
                'title' => '知识状态: -1-已删除未发布, 1-未发布, 2-已发布, 3-已更新未发布',
                'description' => '知识状态： -1-已删除未发布，1-未发布，2-已发布，3-已更新未发布',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'EffectStatus' => 
              array (
                'title' => '知识生效状态,根据StartDate, EndDate计算出来: 20-生效中, 21-已失效, 22-待生效',
                'description' => '知识生效状态，根据StartDate， EndDate计算出来：20-生效中，21-已失效，22-待生效',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'StartDate' => 
              array (
                'title' => '生效时间（UTC时间）',
                'description' => '生效时间（UTC 时间）',
                'type' => 'string',
                'example' => '2022-04-27T07:04:39Z',
              ),
              'EndDate' => 
              array (
                'title' => '失效时间（UTC时间）',
                'description' => '失效时间（UTC 时间）',
                'type' => 'string',
                'example' => '2023-04-27T06:08:54Z',
              ),
              'SimQuestions' => 
              array (
                'title' => '相似问列表',
                'description' => '相似问列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '相似问信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SimQuestionId' => 
                    array (
                      'title' => '相似问ID',
                      'description' => '相似问ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '10000000581',
                    ),
                    'ModifyTime' => 
                    array (
                      'title' => '修改时间(UTC 时间)',
                      'description' => '修改时间（UTC 时间）',
                      'type' => 'string',
                      'example' => '2022-05-29T03:55:07Z',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间(UTC 时间)',
                      'description' => '创建时间（UTC 时间）',
                      'type' => 'string',
                      'example' => '2022-05-26T10:24:00Z',
                    ),
                    'Title' => 
                    array (
                      'title' => '相似问标题',
                      'description' => '相似问标题',
                      'type' => 'string',
                      'example' => '测试相似问标题',
                    ),
                  ),
                ),
              ),
              'Solutions' => 
              array (
                'title' => '答案列表',
                'description' => '答案列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '答案信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SolutionId' => 
                    array (
                      'title' => '答案ID',
                      'description' => '答案ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '10000003071',
                    ),
                    'ModifyTime' => 
                    array (
                      'title' => '修改时间(UTC 时间)',
                      'description' => '修改时间（UTC 时间）',
                      'type' => 'string',
                      'example' => '2022-05-29T07:07:13Z',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间(UTC 时间)',
                      'description' => '创建时间（UTC 时间）',
                      'type' => 'string',
                      'example' => '2022-05-26T10:24:00Z',
                    ),
                    'Content' => 
                    array (
                      'title' => '答案内容',
                      'description' => '答案内容',
                      'type' => 'string',
                      'example' => '测试答案内容',
                    ),
                    'ContentType' => 
                    array (
                      'title' => '答案类型(0纯文本，1富文本）',
                      'description' => '答案类型：0-纯文本，1-富文本',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'PlainText' => 
                    array (
                      'title' => '答案纯文本内容',
                      'description' => '答案纯文本内容',
                      'type' => 'string',
                      'example' => '测试答案内容',
                    ),
                    'PerspectiveCodes' => 
                    array (
                      'title' => '视角code列表',
                      'description' => '视角code列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '视角code',
                        'type' => 'string',
                        'example' => 'default',
                      ),
                    ),
                  ),
                ),
              ),
              'Outlines' => 
              array (
                'title' => '关联问列表',
                'description' => '关联问列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '关联问信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'OutlineId' => 
                    array (
                      'title' => '关联关系ID',
                      'description' => '关联关系ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '797',
                    ),
                    'ConnQuestionId' => 
                    array (
                      'title' => '关联知识ID',
                      'description' => '关联知识ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1000098002',
                    ),
                    'Title' => 
                    array (
                      'title' => '关联知识标题',
                      'description' => '关联知识标题',
                      'type' => 'string',
                      'example' => '测试关联问标题',
                    ),
                    'ModifyTime' => 
                    array (
                      'title' => '修改时间(UTC 时间)',
                      'description' => '修改时间（UTC 时间）',
                      'type' => 'string',
                      'example' => '2022-05-26T18:12:02Z',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间(UTC 时间)',
                      'description' => '创建时间（UTC 时间）',
                      'type' => 'string',
                      'example' => '2022-05-26T10:24:00Z',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '8AD9FA10-7780-5E12-B701-13C928524F32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '获取FAQ详情',
    ),
    'SearchFaq' => 
    array (
      'summary' => '搜索知识。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'Keyword',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '关键字',
            'description' => '关键字',
            'type' => 'string',
            'required' => false,
            'example' => '搜索标题',
          ),
        ),
        2 => 
        array (
          'name' => 'CategoryIds',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '类目唯一标识',
            'description' => '类目唯一标识',
            'type' => 'array',
            'items' => 
            array (
              'description' => '类目ID',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '30000065594',
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '知识状态: -1-已删除未发布, 1-未发布, 2-已发布, 3-已更新未发布',
            'description' => '知识状态：-1-已删除未发布，1-未发布，2-已发布，3-已更新未发布',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'enumValueTitles' => 
            array (
              1 => '未发布',
              2 => '已发布',
              3 => '已更新未发布',
              -1 => '已删除未发布',
            ),
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'SearchScope',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '搜索范围： 1-搜索标题相似问, 2-搜索答案, 3-搜索全部',
            'description' => '搜索范围：1-搜索标题相似问，2-搜索答案，3-搜索全部',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'enumValueTitles' => 
            array (
              1 => '搜索标题和相似问',
              2 => '搜索答案',
              3 => '搜索全部',
            ),
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'CreateUserName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '创建人',
            'description' => '创建人',
            'type' => 'string',
            'required' => false,
            'example' => 'test01',
          ),
        ),
        6 => 
        array (
          'name' => 'ModifyUserName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '修改人',
            'description' => '修改人',
            'type' => 'string',
            'required' => false,
            'example' => 'test01',
          ),
        ),
        7 => 
        array (
          'name' => 'CreateTimeBegin',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '创建开始时间',
            'description' => '创建开始时间',
            'type' => 'string',
            'required' => false,
            'example' => '2022-04-02T03:09:30Z',
          ),
        ),
        8 => 
        array (
          'name' => 'CreateTimeEnd',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '创建结束时间',
            'description' => '创建结束时间',
            'type' => 'string',
            'required' => false,
            'example' => '2022-05-02T03:09:30Z',
          ),
        ),
        9 => 
        array (
          'name' => 'ModifyTimeBegin',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '修改开始时间',
            'description' => '修改开始时间',
            'type' => 'string',
            'required' => false,
            'example' => '2023-04-02T03:09:30Z',
          ),
        ),
        10 => 
        array (
          'name' => 'ModifyTimeEnd',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '修改结束时间',
            'description' => '修改结束时间',
            'type' => 'string',
            'required' => false,
            'example' => '2023-05-02T03:09:30Z',
          ),
        ),
        11 => 
        array (
          'name' => 'StartTimeBegin',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '生效开始时间',
            'description' => '生效开始时间',
            'type' => 'string',
            'required' => false,
            'example' => '2022-04-02T03:09:30Z',
          ),
        ),
        12 => 
        array (
          'name' => 'StartTimeEnd',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '生效结束时间',
            'description' => '生效结束时间',
            'type' => 'string',
            'required' => false,
            'example' => '2022-04-03T03:09:30Z',
          ),
        ),
        13 => 
        array (
          'name' => 'EndTimeBegin',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '失效开始时间',
            'description' => '失效开始时间',
            'type' => 'string',
            'required' => false,
            'example' => '2023-04-02T03:09:30Z',
          ),
        ),
        14 => 
        array (
          'name' => 'EndTimeEnd',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '失效结束时间',
            'description' => '失效结束时间',
            'type' => 'string',
            'required' => false,
            'example' => '2023-05-02T03:09:30Z',
          ),
        ),
        15 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '页码 默认1',
            'description' => '页码默认1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        16 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页数量，默认10，最大50',
            'description' => '每页数量，默认10，最大100',
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
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'title' => 'result',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'FaqHits' => 
              array (
                'description' => '知识搜索结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '知识信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'KnowledgeId' => 
                    array (
                      'title' => '知识ID',
                      'description' => '知识ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '30002145804',
                    ),
                    'ModifyTime' => 
                    array (
                      'title' => '修改时间（UTC时间）',
                      'description' => '修改时间（UTC 时间）',
                      'type' => 'string',
                      'example' => '2022-04-02T03:09:30Z',
                    ),
                    'ModifyUserName' => 
                    array (
                      'title' => '修改人',
                      'description' => '修改人',
                      'type' => 'string',
                      'example' => 'test01',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间（UTC时间）',
                      'description' => '创建时间（UTC 时间）',
                      'type' => 'string',
                      'example' => '2022-04-02T03:09:30Z',
                    ),
                    'CreateUserName' => 
                    array (
                      'title' => '创建人',
                      'description' => '创建人',
                      'type' => 'string',
                      'example' => 'test01',
                    ),
                    'CreateUserId' => 
                    array (
                      'title' => '创建人ID',
                      'description' => '创建人ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '18453',
                    ),
                    'ModifyUserId' => 
                    array (
                      'title' => '修改人ID',
                      'description' => '修改人ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '18453',
                    ),
                    'CategoryId' => 
                    array (
                      'title' => '类目ID',
                      'description' => '类目ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '30000055639',
                    ),
                    'Status' => 
                    array (
                      'title' => '知识状态: -1-已删除未发布, 1-未发布, 2-已发布, 3-已更新未发布',
                      'description' => '知识状态：-1-已删除未发布，1-未发布，2-已发布，3-已更新未发布',
                      'type' => 'integer',
                      'format' => 'int32',
                      'enumValueTitles' => 
                      array (
                        1 => '未发布',
                        2 => '已发布',
                        3 => '已更新未发布',
                        -1 => '已删除未发布',
                      ),
                      'example' => '3',
                    ),
                    'EffectStatus' => 
                    array (
                      'title' => '知识生效状态,根据StartDate, EndDate计算出来: 20-生效中, 21-已失效, 22-待生效',
                      'description' => '知识生效状态，根据StartDate，EndDate计算出来：20-生效中，21-已失效，22-待生效',
                      'type' => 'integer',
                      'format' => 'int32',
                      'enumValueTitles' => 
                      array (
                        20 => '生效中',
                        21 => '已失效',
                        22 => '待生效',
                      ),
                      'example' => '20',
                    ),
                    'Title' => 
                    array (
                      'title' => '标题',
                      'description' => '标题',
                      'type' => 'string',
                      'example' => '测试标题',
                    ),
                    'HitSimilarTitles' => 
                    array (
                      'title' => '命中的相似问',
                      'description' => '命中的相似问题列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '相似问题',
                        'type' => 'string',
                        'example' => '测试命中的标题',
                      ),
                    ),
                    'HitSolutions' => 
                    array (
                      'title' => '命中的答案',
                      'description' => '命中的答案列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '命中的答案',
                        'type' => 'string',
                        'example' => '测试命中的答案',
                      ),
                    ),
                  ),
                ),
              ),
              'PageNumber' => 
              array (
                'title' => '页码 默认1',
                'description' => '页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '每页数量，默认10，最大500',
                'description' => '每页数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'title' => '总条数',
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1075',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'E45491D5-7E0A-42C6-9B21-91D1066B1475',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => 'FAQ搜索',
    ),
    'CreateDSEntity' => 
    array (
      'summary' => '创建实体，特指实体的Meta信息，如：实体名称、实体类型。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人ID',
            'type' => 'string',
            'required' => true,
            'example' => ' chatbot-cn-yjzbyrEvqd',
          ),
        ),
        2 => 
        array (
          'name' => 'EntityName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实体名称，仅支持中文、大小写字母、数字、下划线',
            'description' => '实体名称，仅支持中文、大小写字母、数字、下划线',
            'type' => 'string',
            'required' => true,
            'example' => '实体名称',
          ),
        ),
        3 => 
        array (
          'name' => 'EntityType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实体类型：详见:,EntityTypeEnum[synonyms(同义词),regex(正则)]',
            'description' => '实体类型：[synonyms（同义词），regex（正则）]',
            'type' => 'string',
            'required' => false,
            'example' => 'synonyms',
            'default' => 'synonyms',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'BaseResponse<EntityIdResponse>',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'adfad2343f1f2r',
              ),
              'EntityId' => 
              array (
                'description' => '实体ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '23436345',
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
            'errorCode' => 'BusinessErrorEntity.OutRange',
            'errorMessage' => 'The business error Entity is out of range.',
          ),
          1 => 
          array (
            'errorCode' => 'BusinessErrorEntityName.OutRange',
            'errorMessage' => 'The business error EntityName is out of range.',
          ),
          2 => 
          array (
            'errorCode' => 'BusinessErrorEntityName.Repeat',
            'errorMessage' => 'BusinessErrorEntityName.Repeat	The business error EntityName is repeat.',
          ),
          3 => 
          array (
            'errorCode' => 'BusinessErrorEntityName.InvalidCharactor',
            'errorMessage' => 'The business error EntityName contains invalid charactor.',
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '实体-创建',
    ),
    'DeleteDSEntity' => 
    array (
      'summary' => '删除一个实体，会级联删除该实体下所有的实体成员及同义词、正则表达式。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人ID',
            'type' => 'string',
            'required' => true,
            'example' => ' chatbot-cn-yjzbyrEvqd',
          ),
        ),
        2 => 
        array (
          'name' => 'EntityId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实体ID',
            'description' => '实体ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '123',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'BaseResponse<EntityIdResponse>',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4dfghf56235asdf452',
              ),
              'EntityId' => 
              array (
                'description' => '实体ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '123',
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
            'errorCode' => 'BusinessErrorEntityId.NotExists',
            'errorMessage' => 'The business error EntityId is not exists.',
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '实体-删除',
    ),
    'UpdateDSEntity' => 
    array (
      'summary' => '实体meta信息修改，仅支持修改实体名称；实体类型不支持修改。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人ID',
            'type' => 'string',
            'required' => true,
            'example' => ' chatbot-cn-yjzbyrEvqd',
          ),
        ),
        2 => 
        array (
          'name' => 'EntityId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实体ID',
            'description' => '实体ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '123',
          ),
        ),
        3 => 
        array (
          'name' => 'EntityName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实体名称，仅支持中文、大小写字母、数字、下划线',
            'description' => '实体名称，仅支持中文、大小写字母、数字、下划线',
            'type' => 'string',
            'required' => true,
            'example' => '实体名称',
          ),
        ),
        4 => 
        array (
          'name' => 'EntityType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实体类型：详见:,EntityTypeEnum[synonyms(同义词),regex(正则)]',
            'description' => '实体类型：[synonyms（同义词），regex（正则）]',
            'type' => 'string',
            'required' => false,
            'example' => 'synonyms',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'BaseResponse<EntityIdResponse>',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'df23fgh4hyj67hn56',
              ),
              'EntityId' => 
              array (
                'description' => '实体ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '123',
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
            'errorCode' => 'BusinessErrorEntityId.NotExists',
            'errorMessage' => 'The business error EntityId is not exists.',
          ),
          1 => 
          array (
            'errorCode' => 'BusinessErrorEntityName.OutRange',
            'errorMessage' => 'The business error EntityName is out of range.',
          ),
          2 => 
          array (
            'errorCode' => 'BusinessErrorEntityName.Repeat',
            'errorMessage' => 'The business error EntityName is repeat.',
          ),
          3 => 
          array (
            'errorCode' => 'BusinessErrorEntityName.InvalidCharactor',
            'errorMessage' => 'The business error EntityName contains invalid charactor.',
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '实体-修改',
    ),
    'DescribeDSEntity' => 
    array (
      'summary' => '查询指定机器人下指定实体的meta信息，如：实体类型、实体名称、创建时间、修改时间等。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人ID',
            'type' => 'string',
            'required' => true,
            'example' => ' chatbot-cn-yjzbyrEvqd',
          ),
        ),
        2 => 
        array (
          'name' => 'EntityId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实体ID',
            'description' => '实体ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '123',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数说明',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'ad23234dsf234fga',
              ),
              'EntityId' => 
              array (
                'title' => '实体ID',
                'description' => '实体ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '123',
              ),
              'EntityName' => 
              array (
                'title' => '实体名称，仅支持中文、大小写字母、数字、下划线',
                'description' => '实体名称，仅支持中文、大小写字母、数字、下划线',
                'type' => 'string',
                'example' => '书类型',
              ),
              'SysEntityCode' => 
              array (
                'title' => '系统实体code，如@sys.date',
                'description' => '系统实体code，如sys.date；用户实体时为空',
                'type' => 'string',
                'example' => 'sys.date',
              ),
              'EntityType' => 
              array (
                'title' => '实体类型：详见:,EntityTypeEnum[synonyms(同义词),regex(正则)]',
                'description' => '实体类型：[synonyms（同义词），regex（正则）]',
                'type' => 'string',
                'example' => 'synonyms',
              ),
              'CreateTime' => 
              array (
                'description' => '创建时间（UTC时间）',
                'type' => 'string',
                'example' => '2021-08-12T16:00:01Z',
              ),
              'ModifyTime' => 
              array (
                'description' => '修改时间（UTC时间）',
                'type' => 'string',
                'example' => '2021-08-12T16:00:01Z',
              ),
              'CreateUserId' => 
              array (
                'description' => '创建者ID',
                'type' => 'string',
                'example' => '123231',
              ),
              'CreateUserName' => 
              array (
                'description' => '创建人名称',
                'type' => 'string',
                'example' => 'test',
              ),
              'ModifyUserId' => 
              array (
                'description' => '修改人唯一标识',
                'type' => 'string',
                'example' => '123231',
              ),
              'ModifyUserName' => 
              array (
                'description' => '修改人名称',
                'type' => 'string',
                'example' => 'test',
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
            'errorCode' => 'BusinessErrorEntityId.NotExists',
            'errorMessage' => 'The business error EntityId is not exists.',
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '实体-详情',
      'responseParamsDescription' => '如果是系统实体，SysEntityCode返回系统实体key，例如：@sys.date',
    ),
    'ListDSEntity' => 
    array (
      'summary' => '查询指定机器人下的实体列表数据，仅返回每个实体的meta信息，如：实体类型、实体名称、创建时间、修改时间等。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人ID',
            'type' => 'string',
            'required' => true,
            'example' => ' chatbot-cn-yjzbyrEvqd',
          ),
        ),
        2 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '筛选项，contains匹配，范围：实体名称（未来扩展：实体成员、同义词）',
            'description' => '筛选项，contains匹配，范围：实体名称（未来扩展：实体成员、同义词）',
            'type' => 'string',
            'required' => false,
            'example' => '实体',
          ),
        ),
        3 => 
        array (
          'name' => 'EntityType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '为空：全量自定义实体（默认）',
            'description' => '为空：全量自定义实体（默认）',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'regex' => 'regex',
              'system' => 'system',
              'synonyms' => 'synonyms',
            ),
            'example' => 'synonyms
regex
system',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页，默认1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页数量，默认10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '10',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息说明',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'ga4h345defgwet2sdf223',
              ),
              'TotalCount' => 
              array (
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '页面大小，默认10',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页，默认1',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Entities' => 
              array (
                'description' => '实体列表信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '实体列表信息说明',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'EntityId' => 
                    array (
                      'description' => '实体ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '234564567445',
                    ),
                    'EntityName' => 
                    array (
                      'description' => '实体名称',
                      'type' => 'string',
                      'example' => '书实体',
                    ),
                    'SysEntityCode' => 
                    array (
                      'title' => '系统实体code，如@sys.date',
                      'description' => '系统实体code，如sys.date；用户实体时为空',
                      'type' => 'string',
                      'example' => 'sys_date',
                    ),
                    'EntityType' => 
                    array (
                      'description' => '实体类型（synonyms | regex | system)',
                      'type' => 'string',
                      'example' => 'synonyms',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间（UTC时间）',
                      'type' => 'string',
                      'example' => '2021-08-12T16:00:01Z',
                    ),
                    'ModifyTime' => 
                    array (
                      'description' => '修改时间（UTC时间）',
                      'type' => 'string',
                      'example' => '2021-08-12T16:00:01Z',
                    ),
                    'CreateUserId' => 
                    array (
                      'description' => '创建人ID',
                      'type' => 'string',
                      'example' => '123231',
                    ),
                    'CreateUserName' => 
                    array (
                      'description' => '创建人名称',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'ModifyUserId' => 
                    array (
                      'description' => '修改人ID',
                      'type' => 'string',
                      'example' => '123231',
                    ),
                    'ModifyUserName' => 
                    array (
                      'description' => '修改人名称',
                      'type' => 'string',
                      'example' => 'test',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'Ds.IllegalAccess.BotIdNotExists',
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '实体-列表',
    ),
    'CreateDSEntityValue' => 
    array (
      'summary' => '为指定的某个实体，添加实体成员信息，包含：实体值、对应的同义词列表，同一实体内部的实体值、同义词唯一。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人ID',
            'type' => 'string',
            'required' => true,
            'example' => ' chatbot-cn-yjzbyrEvqd',
          ),
        ),
        2 => 
        array (
          'name' => 'EntityId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实体ID，修改实体成员时可为空',
            'description' => '实体ID，修改实体成员时可为空',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '12',
          ),
        ),
        3 => 
        array (
          'name' => 'Content',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实体值（或正则表达式）',
            'type' => 'string',
            'required' => true,
            'example' => '书类型',
          ),
        ),
        4 => 
        array (
          'name' => 'Synonyms',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '同义词列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '同义词值',
              'type' => 'string',
              'required' => false,
              'example' => '书本',
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
            'title' => 'BaseResponse<EntityValueIdResponse>',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'g763hg48j3f3',
              ),
              'EntityValueId' => 
              array (
                'description' => '实体成员ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2434543453',
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
            'errorCode' => 'BusinessErrorEntityId.NotExists',
            'errorMessage' => 'The business error EntityId is not exists.',
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '实体成员-创建',
    ),
    'DeleteDSEntityValue' => 
    array (
      'summary' => '删除某个实体的某个成员；若为标准实体，会同步删除其同义词（若有）。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人ID',
            'type' => 'string',
            'required' => true,
            'example' => ' chatbot-cn-yjzbyrEvqd',
          ),
        ),
        2 => 
        array (
          'name' => 'EntityId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实体ID',
            'description' => '实体ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '345346223452',
          ),
        ),
        3 => 
        array (
          'name' => 'EntityValueId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实体成员ID',
            'description' => '实体成员ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '3453453452',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息说明',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'dfdf2t3rfvb45y',
              ),
              'EntityValueId' => 
              array (
                'description' => '实体成员ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '3453453452',
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
            'errorCode' => 'BusinessErrorEntityId.NotExists',
            'errorMessage' => 'The business error EntityId is not exists.',
          ),
          1 => 
          array (
            'errorCode' => 'BusinessErrorEntityValueId.NotExists',
            'errorMessage' => 'The business error EntityValueId is not exists.',
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '实体-实体成员-删除',
    ),
    'UpdateDSEntityValue' => 
    array (
      'summary' => '修改某个实体的某个实体成员，有实体值&同义词、正则表达式两类数据修改。注意：往一个标准实体中添加正则表达式是不被允许的，反之亦然。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人ID',
            'type' => 'string',
            'required' => true,
            'example' => ' chatbot-cn-yjzbyrEvqd',
          ),
        ),
        2 => 
        array (
          'name' => 'EntityId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实体ID，修改实体成员时可为空',
            'description' => '实体ID，修改实体成员时可为空',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '223423423',
          ),
        ),
        3 => 
        array (
          'name' => 'EntityValueId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实体成员ID，创建实体成员时为空',
            'description' => '实体成员ID，创建实体成员时为空',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '2342377423',
          ),
        ),
        4 => 
        array (
          'name' => 'Content',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实体类型为synonyms时，表示实体归一化值；当实体类型为regex时，表示正则表达式文本',
            'description' => '实体类型为synonyms时，表示实体归一化值；当实体类型为regex时，表示正则表达式文本',
            'type' => 'string',
            'required' => true,
            'example' => '书本类型',
          ),
        ),
        5 => 
        array (
          'name' => 'Synonyms',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '实体同义词',
            'description' => '同义词列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实体同义词',
              'type' => 'string',
              'required' => false,
              'example' => '小说',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'BaseResponse<EntityValueIdResponse>',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'sDag3g43wesf2',
              ),
              'EntityValueId' => 
              array (
                'description' => '实体成员ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2342377423',
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
            'errorCode' => 'BusinessErrorEntityId.NotExists',
            'errorMessage' => 'The business error EntityId is not exists.',
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '实体成员-修改',
    ),
    'ListDSEntityValue' => 
    array (
      'summary' => '查询指定实体的实体成员列表及详情数据，同时支持关键词筛选（contains），筛选范围：实体值、同义词。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人ID',
            'type' => 'string',
            'required' => true,
            'example' => ' chatbot-cn-yjzbyrEvqd',
          ),
        ),
        2 => 
        array (
          'name' => 'EntityId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实体ID',
            'description' => '实体ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '123',
          ),
        ),
        3 => 
        array (
          'name' => 'EntityValueId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实体成员ID',
            'description' => '实体成员ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '234',
          ),
        ),
        4 => 
        array (
          'name' => 'Keyword',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实体成员名称搜索关键词',
            'description' => '实体成员名称搜索关键词',
            'type' => 'string',
            'required' => false,
            'example' => '书',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页码',
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页大小',
            'description' => '分页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '10',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回值信息',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => 'n3fg34gbfj8adf2gj923',
              ),
              'EntityValues' => 
              array (
                'description' => '实体列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '实体列表信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'EntityId' => 
                    array (
                      'description' => '实体ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '34313785463',
                    ),
                    'EntityValueId' => 
                    array (
                      'description' => '实体成员ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '3467858234534534532',
                    ),
                    'Content' => 
                    array (
                      'description' => '实体成员名称（实体值或正则表达式）',
                      'type' => 'string',
                      'example' => '书类型',
                    ),
                    'Synonyms' => 
                    array (
                      'description' => '同义词列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '同义词列表说明',
                        'type' => 'string',
                        'example' => '小说',
                      ),
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间(UTC时间）',
                      'type' => 'string',
                      'example' => '2021-08-12T16:00:01Z',
                    ),
                    'ModifyTime' => 
                    array (
                      'description' => '修改时间（UTC时间）',
                      'type' => 'string',
                      'example' => '2021-08-12T16:00:01Z',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页，默认1',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '页面大小，默认10',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
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
            'errorCode' => 'BusinessErrorEntityId.NotExists',
            'errorMessage' => 'The business error EntityId is not exists.',
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '实体成员-列表',
    ),
    'CreateIntent' => 
    array (
      'summary' => '新建意图，主要包含意图的meta信息，如：意图名称、意图别名、意图关联词槽信息；不包含意图话术、LGF。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人ID',
            'type' => 'string',
            'required' => true,
            'example' => ' chatbot-cn-yjzbyrEvqd',
          ),
        ),
        2 => 
        array (
          'name' => 'IntentDefinition',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '意图定义结构体',
            'description' => '意图定义结构体',
            'type' => 'object',
            'properties' => 
            array (
              'IntentName' => 
              array (
                'title' => '意图名称',
                'description' => '意图名称',
                'type' => 'string',
                'required' => true,
                'example' => '查天气意图',
              ),
              'AliasName' => 
              array (
                'title' => '意图别名',
                'description' => '意图别名',
                'type' => 'string',
                'required' => false,
                'example' => '查天气意图',
              ),
              'SlotInfos' => 
              array (
                'title' => '槽位信息',
                'description' => '槽位信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '滑槽信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SlotId' => 
                    array (
                      'description' => '滑槽ID',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'fg452dfg3df23',
                    ),
                    'Name' => 
                    array (
                      'title' => '槽位名',
                      'description' => '槽位名',
                      'type' => 'string',
                      'required' => true,
                      'example' => '天气',
                    ),
                    'Value' => 
                    array (
                      'title' => '关联的实体名',
                      'description' => '关联的实体名',
                      'type' => 'string',
                      'required' => true,
                      'example' => '天气',
                    ),
                    'Interactive' => 
                    array (
                      'title' => '是否交互式',
                      'description' => '是否交互式',
                      'type' => 'boolean',
                      'required' => false,
                      'example' => 'false',
                    ),
                    'Array' => 
                    array (
                      'title' => '是否数组',
                      'description' => '是否数组',
                      'type' => 'boolean',
                      'required' => false,
                      'example' => 'false',
                    ),
                    'Encrypt' => 
                    array (
                      'title' => '是否脱敏',
                      'description' => '是否脱敏',
                      'type' => 'boolean',
                      'required' => false,
                      'example' => 'false',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
            ),
            'required' => true,
            'docRequired' => true,
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
              'IntentId' => 
              array (
                'description' => '意图ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '43546474',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'df56gjh5et34g3g3',
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
            'errorCode' => 'BusinessErrorIntent.OutRange',
            'errorMessage' => 'The business error Intent is out of range.',
          ),
          1 => 
          array (
            'errorCode' => 'BusinessErrorIntentName.OutRange',
            'errorMessage' => 'The business error IntentName is out of range.',
          ),
          2 => 
          array (
            'errorCode' => 'BusinessErrorIntentName.Repeat',
            'errorMessage' => 'The business error IntentName is repeat.',
          ),
          3 => 
          array (
            'errorCode' => 'BusinessErrorIntentName.InvalidCharactor',
            'errorMessage' => 'The business error IntentName contains invalid charactor.',
          ),
          4 => 
          array (
            'errorCode' => 'BusinessErrorIntentEntity.NotExists',
            'errorMessage' => 'The business error IntentEntity is not exists.',
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '意图-创建',
    ),
    'DeleteIntent' => 
    array (
      'summary' => '删除一个意图，会级联删除该意图下所有的意图话术和高级语义配置（LGF）。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人ID',
            'type' => 'string',
            'required' => true,
            'example' => ' chatbot-cn-yjzbyrEvqd',
          ),
        ),
        2 => 
        array (
          'name' => 'IntentId',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '意图ID',
            'description' => '意图ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '12345',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息说明',
            'type' => 'object',
            'properties' => 
            array (
              'IntentId' => 
              array (
                'description' => '意图ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '12345',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3464dfg3qwr34tf34',
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
            'errorCode' => 'BusinessErrorIntentId.NotExists',
            'errorMessage' => 'The business error Intent is not exists.',
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '意图-删除',
    ),
    'UpdateIntent' => 
    array (
      'summary' => '修改意图，主要包含意图的meta信息，如：意图名称、意图别名、意图关联词槽信息；不包含意图话术、LGF。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人ID',
            'type' => 'string',
            'required' => true,
            'example' => ' chatbot-cn-yjzbyrEvqd',
          ),
        ),
        2 => 
        array (
          'name' => 'IntentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '意图ID',
            'description' => '意图ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '234234234534',
          ),
        ),
        3 => 
        array (
          'name' => 'IntentDefinition',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '意图定义结构体',
            'description' => '意图定义结构体',
            'type' => 'object',
            'properties' => 
            array (
              'IntentName' => 
              array (
                'title' => '意图名称',
                'description' => '意图名称',
                'type' => 'string',
                'required' => true,
                'example' => '查天气意图',
              ),
              'AliasName' => 
              array (
                'title' => '意图别名',
                'description' => '意图别名',
                'type' => 'string',
                'required' => false,
                'example' => '查天气意图',
              ),
              'SlotInfos' => 
              array (
                'title' => '槽位信息',
                'description' => '槽位信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '槽位信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SlotId' => 
                    array (
                      'description' => '槽位ID',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'dgadf23dfg2f',
                    ),
                    'Name' => 
                    array (
                      'title' => '槽位名',
                      'description' => '槽位名',
                      'type' => 'string',
                      'required' => true,
                      'example' => '天气',
                    ),
                    'Value' => 
                    array (
                      'title' => '关联的实体名',
                      'description' => '关联的实体名',
                      'type' => 'string',
                      'required' => true,
                      'example' => '天气',
                    ),
                    'Interactive' => 
                    array (
                      'title' => '是否交互式',
                      'description' => '是否交互式',
                      'type' => 'boolean',
                      'required' => false,
                      'example' => 'false',
                    ),
                    'Array' => 
                    array (
                      'title' => '是否数组',
                      'description' => '是否数组',
                      'type' => 'boolean',
                      'required' => false,
                      'example' => 'false',
                    ),
                    'Encrypt' => 
                    array (
                      'title' => '是否脱敏',
                      'description' => '是否脱敏',
                      'type' => 'boolean',
                      'required' => false,
                      'example' => 'false',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
            ),
            'required' => true,
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息说明',
            'type' => 'object',
            'properties' => 
            array (
              'IntentId' => 
              array (
                'description' => '意图ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '234234234534',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'dfaf23dfas234234234534',
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
            'errorCode' => 'BusinessErrorIntentId.NotExists',
            'errorMessage' => 'The business error Intent is not exists.',
          ),
          1 => 
          array (
            'errorCode' => 'BusinessErrorIntent.OutRange',
            'errorMessage' => 'The business error Intent is out of range.',
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '意图-修改',
    ),
    'DescribeIntent' => 
    array (
      'summary' => '返回指定意图的 meta 信息，如：意图类型、意图名称、创建时间、修改时间等。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人ID',
            'type' => 'string',
            'required' => true,
            'example' => ' chatbot-cn-yjzbyrEvqd',
          ),
        ),
        2 => 
        array (
          'name' => 'IntentId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '意图ID',
            'description' => '意图ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '123',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'BaseResponse<DsPaasIntentDTO>',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => 'a22afaf2adfasf2gr345fga45ada',
              ),
              'IntentId' => 
              array (
                'description' => '意图ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '84243341',
              ),
              'IntentName' => 
              array (
                'description' => '意图名称',
                'type' => 'string',
                'example' => '查天气意图',
              ),
              'AliasName' => 
              array (
                'description' => '意图别名',
                'type' => 'string',
                'example' => '查天气意图',
              ),
              'SlotInfos' => 
              array (
                'description' => '意图关联的槽位信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '意图关联的槽位信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SlotId' => 
                    array (
                      'description' => '槽位唯一标识',
                      'type' => 'string',
                      'example' => 'aa4d2a343a3ad4afad',
                    ),
                    'Name' => 
                    array (
                      'description' => '槽位名称',
                      'type' => 'string',
                      'example' => '天气',
                    ),
                    'Value' => 
                    array (
                      'description' => '槽位划词结果',
                      'type' => 'string',
                      'example' => '天气',
                    ),
                    'Interactive' => 
                    array (
                      'description' => '是否交互式填槽，默认为false',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'Array' => 
                    array (
                      'description' => '是否数组',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'Encrypt' => 
                    array (
                      'description' => '是否敏感',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                  ),
                ),
              ),
              'CreateTime' => 
              array (
                'description' => '创建时间（UTC时间）',
                'type' => 'string',
                'example' => '2021-08-12T16:00:01Z',
              ),
              'ModifyTime' => 
              array (
                'description' => '修改时间（UTC时间）',
                'type' => 'string',
                'example' => '2021-08-12T16:00:01Z',
              ),
              'CreateUserId' => 
              array (
                'description' => '创建人唯一标识',
                'type' => 'string',
                'example' => '123231',
              ),
              'CreateUserName' => 
              array (
                'description' => '创建人名称',
                'type' => 'string',
                'example' => 'test',
              ),
              'ModifyUserId' => 
              array (
                'description' => '修改人唯一标识',
                'type' => 'string',
                'example' => '123231',
              ),
              'ModifyUserName' => 
              array (
                'description' => '修改人名称',
                'type' => 'string',
                'example' => 'test',
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
            'errorCode' => 'BusinessErrorIntentId.NotExists',
            'errorMessage' => 'The business error IntentId is not exists.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '',
      'title' => '意图-详情',
    ),
    'ListIntent' => 
    array (
      'summary' => '查询指定机器人下的意图列表数据，仅返回每个意图的 meta 信息，如：意图类型、意图名称、创建时间、修改时间等。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人ID',
            'type' => 'string',
            'required' => true,
            'example' => ' chatbot-cn-yjzbyrEvqd',
          ),
        ),
        2 => 
        array (
          'name' => 'IntentName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '意图名称',
            'description' => '意图名称',
            'type' => 'string',
            'required' => false,
            'example' => '查天气',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页，默认1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '999999',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页面大小，默认10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'BaseResponse<DsIntentPageData>',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '23dsfa34r2s2s2sd12',
              ),
              'TotalCount' => 
              array (
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页，默认1',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '页面大小，默认10',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Intents' => 
              array (
                'description' => '意图列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '意图列表说明',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'IntentId' => 
                    array (
                      'description' => '意图ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '234234234234',
                    ),
                    'IntentName' => 
                    array (
                      'description' => '意图名称',
                      'type' => 'string',
                      'example' => '查天气意图',
                    ),
                    'AliasName' => 
                    array (
                      'description' => '意图别名',
                      'type' => 'string',
                      'example' => '查天气意图',
                    ),
                    'SlotInfos' => 
                    array (
                      'description' => '意图关联的槽位信息',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '意图关联的槽位信息说明',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'SlotId' => 
                          array (
                            'title' => '槽位ID',
                            'description' => '槽位ID',
                            'type' => 'string',
                            'example' => '12134223',
                          ),
                          'Name' => 
                          array (
                            'title' => '槽位名',
                            'description' => '槽位名',
                            'type' => 'string',
                            'example' => '天气',
                          ),
                          'Value' => 
                          array (
                            'title' => '槽位值（实体名）',
                            'description' => '槽位值（实体名）',
                            'type' => 'string',
                            'example' => '天气',
                          ),
                          'Interactive' => 
                          array (
                            'title' => '是否交互式收集',
                            'description' => '是否交互式收集',
                            'type' => 'boolean',
                            'example' => 'false',
                          ),
                          'Array' => 
                          array (
                            'title' => '是否数组',
                            'description' => '是否数组',
                            'type' => 'boolean',
                            'example' => 'false',
                          ),
                          'Encrypt' => 
                          array (
                            'title' => '是否敏感',
                            'description' => '是否敏感',
                            'type' => 'boolean',
                            'example' => 'false',
                          ),
                        ),
                      ),
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间（UTC时间）',
                      'type' => 'string',
                      'example' => '2021-08-12T16:00:01Z',
                    ),
                    'ModifyTime' => 
                    array (
                      'description' => '修改时间（UTC时间）',
                      'type' => 'string',
                      'example' => '2021-08-12T16:00:01Z',
                    ),
                    'CreateUserId' => 
                    array (
                      'description' => '创建人唯一标识',
                      'type' => 'string',
                      'example' => '123231',
                    ),
                    'CreateUserName' => 
                    array (
                      'description' => '创建人名称',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'ModifyUserId' => 
                    array (
                      'description' => '修改人唯一标识',
                      'type' => 'string',
                      'example' => '123231',
                    ),
                    'ModifyUserName' => 
                    array (
                      'description' => '修改人名称',
                      'type' => 'string',
                      'example' => 'test',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter InstanceId is not valid!',
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '',
      'title' => '意图-列表',
    ),
    'CreateUserSay' => 
    array (
      'summary' => '为指定意图添加话术信息。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人ID',
            'type' => 'string',
            'required' => true,
            'example' => ' chatbot-cn-yjzbyrEvqd',
          ),
        ),
        2 => 
        array (
          'name' => 'UserSayDefinition',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户话术定义信息',
            'type' => 'object',
            'properties' => 
            array (
              'IntentId' => 
              array (
                'title' => '意图ID',
                'description' => '意图ID',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '123232',
              ),
              'Content' => 
              array (
                'title' => '用户话术',
                'description' => '用户话术',
                'type' => 'string',
                'required' => true,
                'example' => '请问明天北京的天气',
              ),
              'SlotInfos' => 
              array (
                'title' => '划槽信息',
                'description' => '划槽信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '滑槽信息说明',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SlotId' => 
                    array (
                      'title' => '划槽ID',
                      'description' => '划槽ID',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'fb34adf2fv43f2',
                    ),
                    'StartIndex' => 
                    array (
                      'title' => '槽位在意图话术中的起始下标',
                      'description' => '槽位在意图话术中的起始下标',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '4',
                    ),
                    'EndIndex' => 
                    array (
                      'title' => '槽位在意图话术中的结束下标（不含）',
                      'description' => '槽位在意图话术中的结束下标（不含）',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '6',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
                'maxItems' => 10,
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
            'description' => '返回信息说明',
            'type' => 'object',
            'properties' => 
            array (
              'UserSayId' => 
              array (
                'description' => '意图-话术唯一ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '46456176856',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '8g4n8bnd236fg79',
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
            'errorCode' => 'BusinessErrorIntentId.NotExists',
            'errorMessage' => 'The business error Intent is not exists.',
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '意图-话术创建',
    ),
    'DeleteUserSay' => 
    array (
      'summary' => '修改意图话术信息。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '机器人ID',
            'type' => 'string',
            'required' => true,
            'example' => '343df2sdf23',
          ),
        ),
        2 => 
        array (
          'name' => 'IntentId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '意图ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '5564564546',
          ),
        ),
        3 => 
        array (
          'name' => 'UserSayId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '话术ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '4562121234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息说明',
            'type' => 'object',
            'properties' => 
            array (
              'UserSayId' => 
              array (
                'description' => '话术ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '4562121234',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'dfgdg324gf34t34g34g3',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '意图-话术-删除',
    ),
    'UpdateUserSay' => 
    array (
      'summary' => '修改意图话术信息。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人ID',
            'type' => 'string',
            'required' => true,
            'example' => ' chatbot-cn-yjzbyrEvqd',
          ),
        ),
        2 => 
        array (
          'name' => 'UserSayId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户话术ID',
            'description' => '用户话术ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '34512323',
          ),
        ),
        3 => 
        array (
          'name' => 'UserSayDefinition',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户话术定义信息',
            'type' => 'object',
            'properties' => 
            array (
              'IntentId' => 
              array (
                'title' => '意图ID',
                'description' => '意图ID',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'maximum' => '9223372036854775807',
                'exclusiveMaximum' => true,
                'minimum' => '0',
                'exclusiveMinimum' => true,
                'example' => '123',
              ),
              'Content' => 
              array (
                'title' => '用户话术',
                'description' => '用户话术',
                'type' => 'string',
                'required' => true,
                'example' => '做核酸了吗您',
              ),
              'SlotInfos' => 
              array (
                'title' => '划槽信息',
                'description' => '划槽信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '滑槽信息说明',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SlotId' => 
                    array (
                      'title' => '划槽ID',
                      'description' => '划槽ID',
                      'type' => 'string',
                      'required' => false,
                      'example' => '346ffg3q23dv',
                    ),
                    'StartIndex' => 
                    array (
                      'title' => '槽位在意图话术中的起始下标',
                      'description' => '槽位在意图话术中的起始下标',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '1',
                    ),
                    'EndIndex' => 
                    array (
                      'title' => '槽位在意图话术中的结束下标（不含）',
                      'description' => '槽位在意图话术中的结束下标（不含）',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '3',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
                'maxItems' => 10,
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
            'description' => '返回信息说明',
            'type' => 'object',
            'properties' => 
            array (
              'UserSayId' => 
              array (
                'description' => '话术ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '34512323',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '2356fg3wf34634vdt23wef2',
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
            'errorCode' => 'BusinessErrorIntentId.NotExists',
            'errorMessage' => 'The business error Intent is not exists.',
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '意图-话术-修改',
    ),
    'ListUserSay' => 
    array (
      'summary' => '查询指定意图的话术内容及关联槽位信息，支持关键话术筛选（contains）。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人ID',
            'type' => 'string',
            'required' => true,
            'example' => ' chatbot-cn-yjzbyrEvqd',
          ),
        ),
        2 => 
        array (
          'name' => 'IntentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '意图ID',
            'description' => '意图ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '232',
          ),
        ),
        3 => 
        array (
          'name' => 'Content',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '筛选用户话术',
            'description' => '筛选用户话术',
            'type' => 'string',
            'required' => false,
            'example' => '您做核酸了嘛',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页，默认1',
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
            'description' => '页面大小，默认10，最大值1000',
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
            'title' => 'BaseResponse<DsUserSayPageData>',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'fs1fg4512v43572v23',
              ),
              'UserSays' => 
              array (
                'description' => '话术列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '话术列表说明',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'IntentId' => 
                    array (
                      'description' => '意图ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '235564564',
                    ),
                    'UserSayId' => 
                    array (
                      'description' => '话术ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '3453452138',
                    ),
                    'Content' => 
                    array (
                      'description' => '话术内容',
                      'type' => 'string',
                      'example' => '您做核酸了嘛',
                    ),
                    'SlotInfos' => 
                    array (
                      'description' => '关联槽位信息',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '关联槽位信息说明',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'SlotId' => 
                          array (
                            'title' => '意图槽位ID',
                            'description' => '意图槽位ID',
                            'type' => 'string',
                            'example' => '3456sdfg3tu',
                          ),
                          'StartIndex' => 
                          array (
                            'title' => '槽位在意图话术中的下标',
                            'description' => '槽位在意图话术中的下标',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '2',
                          ),
                          'EndIndex' => 
                          array (
                            'title' => '槽位在意图话术中的下标',
                            'description' => '槽位在意图话术中的下标（不含）',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '4',
                          ),
                        ),
                      ),
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间（UTC时间）',
                      'type' => 'string',
                      'example' => '2021-08-12T16:00:01Z',
                    ),
                    'ModifyTime' => 
                    array (
                      'description' => '修改时间（UTC时间）',
                      'type' => 'string',
                      'example' => '2021-08-12T16:00:01Z',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页，默认1',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '页面大小，默认10',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '意图-话术-列表',
    ),
    'CreateLgf' => 
    array (
      'summary' => '为指定意图创建高级语义配置（LGF）。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人ID',
            'type' => 'string',
            'required' => true,
            'example' => ' chatbot-cn-yjzbyrEvqd',
          ),
        ),
        2 => 
        array (
          'name' => 'LgfDefinition',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'LGF定义信息',
            'type' => 'object',
            'properties' => 
            array (
              'IntentId' => 
              array (
                'title' => '意图ID',
                'description' => '意图ID',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '4675678567',
              ),
              'RuleText' => 
              array (
                'title' => 'LGF配置',
                'description' => 'LGF配置',
                'type' => 'string',
                'required' => true,
                'example' => '.{0,10}北京天气',
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
            'description' => '返回信息说明',
            'type' => 'object',
            'properties' => 
            array (
              'LgfId' => 
              array (
                'description' => 'LGF ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '123453433453',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'af5fg3sdf457j5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '意图-LGF-创建',
    ),
    'DeleteLgf' => 
    array (
      'summary' => '删除指定高级语义配置。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人ID',
            'type' => 'string',
            'required' => true,
            'example' => ' chatbot-cn-yjzbyrEvqd',
          ),
        ),
        2 => 
        array (
          'name' => 'IntentId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '意图ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '23242342',
          ),
        ),
        3 => 
        array (
          'name' => 'LgfId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'lgf Id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '2342424',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息说明',
            'type' => 'object',
            'properties' => 
            array (
              'LgfId' => 
              array (
                'description' => 'LGF ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2342424',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'dgw2342424qw42',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '意图-LGF-删除',
    ),
    'UpdateLgf' => 
    array (
      'summary' => '为指定意图创建高级语义配置（LGF）。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人ID',
            'type' => 'string',
            'required' => true,
            'example' => ' chatbot-cn-yjzbyrEvqd',
          ),
        ),
        2 => 
        array (
          'name' => 'LgfId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'LGF ID',
            'description' => 'LGF ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '12121',
          ),
        ),
        3 => 
        array (
          'name' => 'LgfDefinition',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'LGF 信息',
            'type' => 'object',
            'properties' => 
            array (
              'IntentId' => 
              array (
                'title' => '意图ID',
                'description' => '意图ID',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'maximum' => '9223372036854775807',
                'exclusiveMaximum' => true,
                'minimum' => '0',
                'exclusiveMinimum' => true,
                'example' => '23234523522',
              ),
              'RuleText' => 
              array (
                'title' => 'LGF配置',
                'description' => 'LGF配置',
                'type' => 'string',
                'required' => true,
                'example' => '.{0,10}[天气]',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息说明',
            'type' => 'object',
            'properties' => 
            array (
              'LgfId' => 
              array (
                'description' => 'LGF唯一标识',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2342556223532',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '289dfa131adf23wqe2r',
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
            'errorCode' => 'BusinessErrorIntentId.NotExists',
            'errorMessage' => 'The business error IntentId is not exists.',
          ),
          1 => 
          array (
            'errorCode' => '400	BusinessErrorIntentLgfId.NotExists',
            'errorMessage' => 'The business error IntentLgfId is not exists.',
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => 'LGF-修改',
    ),
    'ListLgf' => 
    array (
      'summary' => '查询指定意图的高级语义配置（LGF）。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机器人ID',
            'description' => '机器人ID',
            'type' => 'string',
            'required' => true,
            'example' => ' chatbot-cn-yjzbyrEvqd',
          ),
        ),
        2 => 
        array (
          'name' => 'IntentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '意图ID',
            'description' => '意图ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9223372036854775807',
            'exclusiveMaximum' => true,
            'minimum' => '0',
            'exclusiveMinimum' => true,
            'example' => '123',
          ),
        ),
        3 => 
        array (
          'name' => 'LgfText',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '筛选语义配置内容',
            'description' => '筛选语义配置内容',
            'type' => 'string',
            'required' => false,
            'example' => '.{0,5}北京天气',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页，默认1',
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
            'description' => '页面大小，默认10',
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
            'title' => 'BaseResponse<DsLgfPageData>',
            'description' => '返回值',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '34fg57h2gh5783',
              ),
              'Lgfs' => 
              array (
                'description' => 'LGF列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'LGF列表说明',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'IntentId' => 
                    array (
                      'title' => '意图ID',
                      'description' => '意图ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '256756734345',
                    ),
                    'LgfId' => 
                    array (
                      'title' => 'LGF ID',
                      'description' => 'LGF ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123',
                    ),
                    'RuleText' => 
                    array (
                      'title' => 'LGF规则',
                      'description' => 'LGF规则',
                      'type' => 'string',
                      'example' => '.{0,5}北京天气',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间',
                      'description' => '创建时间(UTC时间）',
                      'type' => 'string',
                      'example' => '2021-08-12T16:00:01Z',
                    ),
                    'ModifyTime' => 
                    array (
                      'title' => '修改时间',
                      'description' => '修改时间（UTC时间）',
                      'type' => 'string',
                      'example' => '2021-08-12T16:00:01Z',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页，默认1',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '页面大小，默认10',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '意图-LGF-列表',
    ),
    'CreatePerspective' => 
    array (
      'summary' => '创建视角。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '视角名称，长度不超过50字',
            'description' => '视角名称，长度不超过50字',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '移动端视角',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '视角描述',
            'description' => '视角描述',
            'type' => 'string',
            'required' => false,
            'example' => '用于购物APP的移动端视角',
          ),
        ),
        2 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
                'title' => '请求Id',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F285D735-D580-18A8-B97F-B2E72B00F101',
              ),
              'PerspectiveId' => 
              array (
                'title' => '视角主键（code_id）',
                'description' => '视角ID',
                'type' => 'string',
                'example' => '3001',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '视角-创建',
    ),
    'DeletePerspective' => 
    array (
      'summary' => '删除视角。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PerspectiveId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '视角主键（code_id）',
            'description' => '视角ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '3001',
          ),
        ),
        1 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
                'title' => '请求Id',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'FC384CE1-8D42-1900-84E1-F33F990F2B5E',
              ),
              'Result' => 
              array (
                'title' => '删除视角的结果',
                'description' => '删除视角的结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '视角-删除',
    ),
    'UpdatePerspective' => 
    array (
      'summary' => '更新视角名称和描述。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PerspectiveId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '视角主键（code_id）',
            'description' => '视角ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '3001',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '视角名称',
            'description' => '视角名称，长度不超过50字',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '客户端视角',
          ),
        ),
        2 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
                'title' => '请求Id',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'FC384CE1-8D42-1900-84E1-F33F990F2B5E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '视角-更新',
    ),
    'DescribePerspective' => 
    array (
      'summary' => '查询视角详情。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PerspectiveId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '视角Id',
            'description' => '视角ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '3001',
          ),
        ),
        1 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
                'title' => '请求Id',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F285D735-D580-18A8-B97F-B2E72B00F101',
              ),
              'Status' => 
              array (
                'title' => '数据状态：3：选中；1：未选中',
                'description' => '数据状态：3：启用；1：未启用',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PerspectiveCode' => 
              array (
                'title' => '视角编码（用于问答api）',
                'description' => '视角编码（用于问答API）',
                'type' => 'string',
                'example' => 'FZJBY3raWr',
              ),
              'ModifyTime' => 
              array (
                'title' => '修改时间 UTC时间',
                'description' => '修改时间 UTC时间',
                'type' => 'string',
                'example' => '2021-07-26T07:05:37Z',
              ),
              'SelfDefine' => 
              array (
                'title' => '是否自定义',
                'description' => '是否自定义',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'CreateTime' => 
              array (
                'title' => '创建时间 UTC时间',
                'description' => '创建时间 UTC时间',
                'type' => 'string',
                'example' => '2021-07-27T07:05:37Z',
              ),
              'PerspectiveId' => 
              array (
                'title' => '视角主键（code_id）',
                'description' => '视角ID',
                'type' => 'string',
                'example' => '3001',
              ),
              'Name' => 
              array (
                'title' => '视角名称',
                'description' => '视角名称',
                'type' => 'string',
                'example' => '移动端视角',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '视角-详情',
    ),
    'QueryPerspectives' => 
    array (
      'summary' => '查询视角列表。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
                'title' => '请求Id',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F285D735-D580-18A8-B97F-B2E72B00F101',
              ),
              'Perspectives' => 
              array (
                'title' => '视角列表',
                'description' => '视角列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'title' => '数据状态：3：选中；1：未选中',
                      'description' => '数据状态：3：启用；1：未启用',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间 UTC时间',
                      'description' => '创建时间 UTC时间',
                      'type' => 'string',
                      'example' => '2022-04-12T06:30:17Z',
                    ),
                    'PerspectiveId' => 
                    array (
                      'title' => '视角主键（code_id）',
                      'description' => '视角ID',
                      'type' => 'string',
                      'example' => '3001',
                    ),
                    'SelfDefine' => 
                    array (
                      'title' => '是否自定义',
                      'description' => '是否自定义',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Name' => 
                    array (
                      'title' => '视角名称',
                      'description' => '视角名称',
                      'type' => 'string',
                      'example' => '移动端视角',
                    ),
                    'PerspectiveCode' => 
                    array (
                      'title' => '视角编码（用于问答api）',
                      'description' => '视角编码（用于问答API）',
                      'type' => 'string',
                      'example' => 'FZJBY3raWr',
                    ),
                    'ModifyTime' => 
                    array (
                      'title' => '修改时间 UTC时间',
                      'description' => '修改时间 UTC时间',
                      'type' => 'string',
                      'example' => '2022-04-29T03:38:54Z',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '视角-列表',
    ),
    'CreatePublishTask' => 
    array (
      'summary' => '创建发布中心的发布任务。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'BizType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '发布任务的业务类型，若发布机器人请使用 CreateInstancePublishTask API',
            'description' => '发布单元类型，机器人发布请使用 CreateInstancePublishTask API',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
              'chitchat' => '闲聊库',
              'service_center' => '全局服务',
              'faq' => '高频问答/FAQ知识库',
              'dict' => '全局名词[仅旧版]',
              'sensitive' => '全局敏感词',
              'command' => '全局指令',
              'mrc' => '文档库',
            ),
            'example' => 'faq',
            'enum' => 
            array (
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'DataIdList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '业务类型附加信息，当前仅支持BizType为faq的传参，此字段指定faq类目Id列表，表示只发布指定类目下面的faq知识',
            'description' => '附加发布信息，当前支持：如果BizType是faq，此字段填写类目ID，表示只发布这些类目下面的知识',
            'type' => 'array',
            'items' => 
            array (
              'title' => '具体附加发布信息，如faq类目信息
',
              'description' => 'FAQ类目ID',
              'type' => 'string',
              'required' => false,
              'example' => '8521',
            ),
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => '["8521"]',
          ),
        ),
        2 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key，若不指定则请求默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求Id',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '5CBF0581-EAE7-1DC4-95C6-A089656A1E2D',
              ),
              'Id' => 
              array (
                'title' => '发布任务Id',
                'description' => '发布任务ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '8522',
              ),
              'Response' => 
              array (
                'title' => '发布任务Id，冗余字段，建议使用Id字段获取发布任务Id',
                'description' => '发布任务ID，冗余字段，建议使用发布任务ID',
                'type' => 'string',
                'example' => '8522',
              ),
              'Status' => 
              array (
                'title' => '任务状态（ FE_RUNNING：正在发布中 FE_SUCCESS：发布成功 FE_FAILED：发布失败 FE_ABORTED：发布取消）',
                'description' => '任务状态
枚举值：

FE_RUNNING：正在发布中
FE_SUCCESS：发布成功
FE_FAILED：发布失败
FE_ABORTED：发布取消',
                'type' => 'string',
                'example' => 'FE_RUNNING',
                'enum' => 
                array (
                  0 => 'FE_RUNNING：正在发布中',
                  1 => 'FE_SUCCESS：发布成功',
                  2 => 'FE_FAILED：发布失败',
                  3 => 'FE_ABORTED：发布取消',
                ),
              ),
              'BizTypeList' => 
              array (
                'title' => '业务类型列表',
                'description' => '业务类型列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '业务类型',
                  'type' => 'string',
                  'example' => 'faq',
                ),
              ),
              'Error' => 
              array (
                'title' => '发布任务失败信息',
                'description' => '任务失败信息',
                'type' => 'string',
                'example' => '检查待发布模块是否空闲发生错误，faq',
              ),
              'CreateTime' => 
              array (
                'title' => '任务创建的 UTC 时间',
                'description' => '任务创建的 UTC 时间',
                'type' => 'string',
                'example' => '2022-04-12T06:30:17Z',
              ),
              'ModifyTime' => 
              array (
                'title' => '任务修改的 UTC 时间',
                'description' => '任务修改的 UTC 时间',
                'type' => 'string',
                'example' => '2022-04-12T06:30:33Z',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '创建发布任务',
    ),
    'CancelPublishTask' => 
    array (
      'summary' => '取消正在发布中的任务。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '发布任务Id',
            'description' => '发布任务ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => true,
            'example' => '8521',
          ),
        ),
        1 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求Id',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '5CBF0581-EAE7-1DC4-95C6-A089656A1E2D',
              ),
              'Id' => 
              array (
                'title' => '发布任务Id',
                'description' => '发布任务ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '8522',
              ),
              'Response' => 
              array (
                'title' => '发布任务Id，冗余字段，建议使用Id字段获取发布任务Id',
                'description' => '发布任务ID，冗余字段，建议使用发布任务ID',
                'type' => 'string',
                'example' => '8522',
              ),
              'Status' => 
              array (
                'title' => '任务状态（ FE_RUNNING：正在发布中 FE_SUCCESS：发布成功 FE_FAILED：发布失败 FE_ABORTED：发布取消）',
                'description' => '任务状态
枚举值：

FE_RUNNING：正在发布中
FE_SUCCESS：发布成功
FE_FAILED：发布失败
FE_ABORTED：发布取消',
                'type' => 'string',
                'example' => 'FE_ABORTED',
                'enum' => 
                array (
                  0 => 'FE_RUNNING：正在发布中',
                  1 => 'FE_SUCCESS：发布成功',
                  2 => 'FE_FAILED：发布失败',
                  3 => 'FE_ABORTED：发布取消',
                ),
              ),
              'BizTypeList' => 
              array (
                'title' => '业务类型列表',
                'description' => '业务类型列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '业务类型',
                  'type' => 'string',
                  'example' => 'faq',
                ),
              ),
              'Error' => 
              array (
                'title' => '发布任务失败信息',
                'description' => '任务失败信息',
                'type' => 'string',
                'example' => '检查待发布模块是否空闲发生错误，faq',
              ),
              'CreateTime' => 
              array (
                'title' => '任务创建的 UTC 时间',
                'description' => '任务创建的 UTC 时间',
                'type' => 'string',
                'example' => '2022-04-12T06:30:17Z',
              ),
              'ModifyTime' => 
              array (
                'title' => '任务修改的 UTC 时间',
                'description' => '任务修改的 UTC 时间',
                'type' => 'string',
                'example' => '2022-04-12T06:30:33Z',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '取消发布任务',
    ),
    'GetPublishTaskState' => 
    array (
      'summary' => '查询发布进度。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '发布任务Id',
            'description' => '发布任务ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => true,
            'example' => '8521',
          ),
        ),
        1 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
                'title' => '请求Id',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '5CBF0581-EAE7-1DC4-95C6-A089656A1E2D',
              ),
              'Id' => 
              array (
                'title' => '发布任务Id',
                'description' => '发布任务ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '8522',
              ),
              'Response' => 
              array (
                'title' => '发布任务Id，冗余字段，建议使用Id字段获取发布任务Id',
                'description' => '发布任务ID，冗余字段，建议使用发布任务ID',
                'type' => 'string',
                'example' => '8522',
              ),
              'Status' => 
              array (
                'title' => '任务状态（ FE_RUNNING：正在发布中 FE_SUCCESS：发布成功 FE_FAILED：发布失败 FE_ABORTED：发布取消）',
                'description' => '任务状态
枚举值：
- FE_RUNNING：正在发布中
- FE_SUCCESS：发布成功
- FE_FAILED：发布失败
- FE_ABORTED：发布取消',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                ),
                'example' => 'FE_RUNNING',
                'enum' => 
                array (
                  0 => 'FE_RUNNING：正在发布中',
                  1 => 'FE_SUCCESS：发布成功',
                  2 => 'FE_FAILED：发布失败',
                  3 => 'FE_ABORTED：发布取消',
                ),
              ),
              'BizTypeList' => 
              array (
                'title' => '业务类型列表',
                'description' => '业务类型列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '发布任务的业务类型',
                  'type' => 'string',
                  'example' => 'faq',
                ),
              ),
              'Error' => 
              array (
                'title' => '发布任务失败信息',
                'description' => '任务失败信息',
                'type' => 'string',
                'example' => '检查待发布模块是否空闲发生错误，faq',
              ),
              'CreateTime' => 
              array (
                'title' => '任务创建的 UTC 时间',
                'description' => '任务创建的 UTC 时间',
                'type' => 'string',
                'example' => '2022-04-12T06:30:17Z',
              ),
              'ModifyTime' => 
              array (
                'title' => '任务修改的 UTC 时间',
                'description' => '任务修改的 UTC 时间',
                'type' => 'string',
                'example' => '2022-04-12T06:30:33Z',
              ),
              'Errors' => 
              array (
                'title' => '各子发布模块的错误信息，key是子发布模块，value是错误信息',
                'description' => '各子发布模块的错误信息，key是子发布模块，value是错误信息',
                'type' => 'object',
                'example' => '{
    "faq": [
        "答案资源未发布, 资源类型: 全局服务 名称: 动态答案服务"
    ]
}',
              ),
              'Warnings' => 
              array (
                'title' => '各子发布模块的警告信息，key是子发布模块，value是警告信息',
                'description' => '各子发布模块的警告信息，key是子发布模块，value是警告信息',
                'type' => 'object',
                'example' => '{
    "faq": [
        "答案资源未发布, 类型: service 名称: null、答案资源未发布, 类型: service 名称: null"
    ]
}
',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '查询发布进度',
    ),
    'GetAgentInfo' => 
    array (
      'summary' => '获取业务空间ID。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'beebot_bot_public_cn-ca36x8v3n1x',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'FC384CE1-8D42-1900-84E1-F33F990F2B5E',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'Parameter.Invalid',
              ),
              'Data' => 
              array (
                'description' => '业务空间数据',
                'type' => 'object',
                'properties' => 
                array (
                  'AgentName' => 
                  array (
                    'description' => '业务空间名称',
                    'type' => 'string',
                    'example' => '业务空间_881',
                  ),
                  'AgentKey' => 
                  array (
                    'description' => '业务空间签名，用于PAAS接口指定业务空间时使用',
                    'type' => 'string',
                    'example' => '4e7400028e6f4a7393ed3acf6a7b8927_p_beebot_public',
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
      'responseDemo' => '',
      'title' => '根据实例ID获取业务空间信息',
    ),
    'ListAgent' => 
    array (
      'summary' => '获取当前阿里云账号的业务空间列表。',
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
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前⻚码，默认值是1',
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
            'description' => '返回结果中每页显示的记录数量。最大取值100，默认值是10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'AgentName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务空间名称，按照名称检索',
            'type' => 'string',
            'required' => false,
            'example' => '业务空间_001',
          ),
        ),
        3 => 
        array (
          'name' => 'GoodsCodes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商品code，可按照商品code进行过滤，查询实例信息',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'G_cloudBeeBot_public' => 'G_cloudBeeBot_public',
            ),
            'example' => 'G_cloudBeeBot_public',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'F55D90C1-31BE-4B2A-AA3F-25EFC36F9419',
              ),
              'PageNumber' => 
              array (
                'description' => '当前⻚，默认1',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '返回结果中每页显示的记录数量。最大取值100，默认值是10。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '6',
              ),
              'Data' => 
              array (
                'description' => '业务空间列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '业务空间数据',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AgentId' => 
                    array (
                      'description' => '业务空间ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '881',
                    ),
                    'AgentKey' => 
                    array (
                      'description' => '业务空间签名，用于PAAS接口指定业务空间时使用',
                      'type' => 'string',
                      'example' => '4e7400028e6f4a7393ed3acf6a7b8927_p_beebot_public',
                    ),
                    'AgentName' => 
                    array (
                      'description' => '业务空间名称',
                      'type' => 'string',
                      'example' => '业务空间_881',
                    ),
                    'InstanceInfos' => 
                    array (
                      'description' => '商品实例信息',
                      'type' => 'object',
                      'enumValueTitles' => 
                      array (
                        'G_cloudBeeBot_public' => 'G_cloudBeeBot_public',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '获取业务空间列表',
      'responseParamsDescription' => 'InstanceInfos示例。
"InstanceInfos": {
        "GoodsCode": {
          "InstanceId": "xxxxxx"
        }
      }
//GoodsCode参考枚举值',
    ),
    'GenerateUserAccessToken' => 
    array (
      'summary' => '用于聊天窗用户免登时，获取Token。通过Token可将用户的企业身份带入机器人。同时支持访客名片的自定义信息的带入。',
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
          'name' => 'Nick',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '用户昵称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '张三',
          ),
        ),
        1 => 
        array (
          'name' => 'ForeignId',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '用户在企业内部的用户id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '8882022040000000171',
          ),
        ),
        2 => 
        array (
          'name' => 'Telephone',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '用户手机号码',
            'type' => 'string',
            'required' => false,
            'example' => '1381111****',
          ),
        ),
        3 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '用户邮箱',
            'type' => 'string',
            'required' => false,
            'example' => 'a***bcx@gmail.com',
          ),
        ),
        4 => 
        array (
          'name' => 'ExtraInfo',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '用户需要带入到机器人的额外参数。使用JSON String格式。如果要使用访客名片，请按照以下格式带入：{
    "customerNameCard": [
        {
            "key": "姓名",
            "value": "张三"
        },
        {
            "key": "等级",
            "value": "v2"
        },
        {
            "key": "联系方式",
            "value": "123"
        }
    ]
}

> **访客名片信息会展示在人工工作台上**
',
            'type' => 'string',
            'required' => false,
            'example' => '{
    "xx": 123,
    "yy": 22332,
    "customerNameCard": [
        {
            "key": "姓名",
            "value": "张三"
        },
        {
            "key": "等级",
            "value": "v2"
        },
        {
            "key": "联系方式",
            "value": "123"
        }
    ]
}',
          ),
        ),
        5 => 
        array (
          'name' => 'ExpireTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Token有效时间，单位秒。最大不得超过3600s',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '3600',
            'minimum' => '0',
            'example' => '1000',
          ),
        ),
        6 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'E6988CE6-41CF-1103-9BEC-2B20D26C0B51',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '返回编码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '异常信息',
                'type' => 'string',
                'example' => 'Parameter.Invalid',
              ),
              'Data' => 
              array (
                'description' => 'Token值',
                'type' => 'string',
                'example' => 'DDEXEDAFWAGASDFWAEFFAWEFAWFWEAFWAFWAEF',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
      'title' => '获取用户登录Token',
    ),
    'ListTongyiChatHistorys' => 
    array (
      'summary' => '调用ListTongyiChatHistorys接口获取会话历史明细。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间,时间格式为yyyy-MM-dd HH:mm:ss,⽐如 2024-04-01 00:00:00',
            'type' => 'string',
            'required' => true,
            'example' => '2024-04-01 00:00:00',
          ),
        ),
        1 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间,时间格式为yyyy-MM-dd HH:mm:ss,⽐如 2024-04-01 08:00:00',
            'type' => 'string',
            'required' => true,
            'example' => '2024-04-01 08:00:00',
          ),
        ),
        2 => 
        array (
          'name' => 'RobotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '机器⼈实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'chatbot-cn-7QuUfaqMQe',
          ),
        ),
        3 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据条数,默认30条,最大值为500',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '500',
            'minimum' => '0',
            'example' => '30',
            'default' => '30',
          ),
        ),
        4 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务空间key，不传时访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => 'D0DDFC4C-D66D-4787-9AE4-4D757481EDEE',
              ),
              'CostTime' => 
              array (
                'description' => '请求消耗时间',
                'type' => 'string',
                'example' => '116',
              ),
              'Datas' => 
              array (
                'description' => '数据详情',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据详情',
                  'type' => 'object',
                  'example' => '参考ChatHistoryDTO',
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
      'responseDemo' => '',
      'title' => '会话历史明细',
      'responseParamsDescription' => '**ChatHistoryDTO**
| 字段名  |类型    | 描述 |
| ------------- |------------   | ----- |
| QueryTime | String  | 提问时间 |
| Question | String  | 提问内容 |
| Answer | String  | 答案内容|
| AnswerSource | String  | 答案类型 |
| SessionId | String  | SessionId |
| ChatId | String  | ChatId |
| FeedbackType | String  | 用户反馈|
| FeedbackLabels | String  | 反馈详情 |
| FeedbackUserInfo | String  | 用户反馈说明 |',
    ),
    'GetBotSessionData' => 
    array (
      'summary' => '查询机器⼈问答概览指标',
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
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，时间格式为yyyyMMdd，⽐如20240505',
            'type' => 'string',
            'required' => true,
            'example' => '20240505',
          ),
        ),
        1 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，时间格式为yyyyMMdd，⽐如20240605',
            'type' => 'string',
            'required' => true,
            'example' => '20240605',
          ),
        ),
        2 => 
        array (
          'name' => 'RobotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '机器⼈实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'chatbot-cn-7QuUfaqMQe',
          ),
        ),
        3 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'description' => '业务空间key，不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
              'CostTime' => 
              array (
                'description' => 'API调用耗时，单位毫秒ms。',
                'type' => 'string',
                'example' => '116',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '15CD94CC-CBEB-4189-806C-A132D1F45D51',
              ),
              'Datas' => 
              array (
                'description' => '数据详情',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据详情',
                  'type' => 'object',
                  'example' => '参考JSON示例',
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
      'responseDemo' => '',
      'title' => '机器人接待概况',
      'description' => '仅支持查询T-1（不含当天）的数据',
      'responseParamsDescription' => '**Datas**
| 字段名   | 类型  | 描述  |
| ------------- |------------   | ----- |
| SidCnt   | int      | 接待⼈次 |
| ChatCnt   | int      |   对话请求量 |
| AvgChatCnt | int   |   平均对话轮次  |
|    SolutionSidCnt     |  int       | 解决接待量   |
|     NoSolutionRate     |   double     |   未解决率   |
|NoAnswerRate| double |⽆答案率|
|FeedbackChatCnt |int |点评量 |
| FeedbackGoodChatCnt | int |点赞量  |
|FeedbackBadChatCnt  | int | 点踩量 |

> Datas数组元素中的各个字段是以String类型返回的，如需转换为数字类型请按需解析',
    ),
    'InitIMConnect' => 
    array (
      'summary' => '通过渠道后台配置生成的from值，自定义初始化im连接信息，初始化时支持传递用户鉴权token。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'From',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'B端渠道配置中生成的From值',
            'type' => 'string',
            'required' => true,
            'example' => '8XNBzDucJv',
          ),
        ),
        1 => 
        array (
          'name' => 'UserAccessToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '通过GenerateUserAccessToken接口获取的用户token数据，不填时默认访客接入；',
            'type' => 'string',
            'required' => false,
            'example' => 'QUM4SndaY3VPMjhkQldDZUNOR0ZaTmZ5R3NBY0FKWHJ4OGc4dERZbEJzcjNIKzFiS1RyTjhXRUpBYmVpQlpsakprNDRFVkdxcy9HWVk2RXZvalU3bHhxRkJlc1NBUXZwdHFKOTE2UTNwamQ4b1U4N3dEbmhyRjc4R2hOQStvMnMrYkV2dlVpSHNvWC96SEVNZWRqMjBuMXdjNklpamJzaDNWYllnUldDZGhJPQ==',
          ),
        ),
        2 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'E6988CE6-41CF-1103-9BEC-2B20D26C0B52',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '返回编码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '异常信息',
                'type' => 'string',
                'example' => 'Parameter.Invalid',
              ),
              'Data' => 
              array (
                'description' => 'im连接信息',
                'type' => 'string',
                'example' => '{     "imDomain": "im.alimebot.com",     "appKey": "WDg2VfNv",     "token": "QUM4SndaY3VPMjhkQldDZUNOR0ZaTmZ5R3NBY0FKWHJ4OGc4dERZbEJzcjNIKzFiS1RyTjhXRUpBYmVpQlpsakprNDRFVkdxcy9HWVk2RXZvalU3bHhxRkJlc1NBUXZwdHFKOTE2UTNwamQ4b1U4N3dEbmhyRjc4R2hOQStvMnMrYkV2dlVpSHNvWC96SEVNZWRqMjBuMXdjNklpamJzaDNWYllnUldDZGhJPQ=="   }',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '',
      'title' => '初始化im连接',
      'responseParamsDescription' => 'imDomain: im连接域名，
appKey:  im认证key，
token: im连接token。',
    ),
    'ListSaasInfo' => 
    array (
      'summary' => '获取SaaS被集成信息列表。',
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
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务空间key，不传时访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'SaasName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务方用户名',
            'type' => 'string',
            'required' => true,
            'example' => 'userTest',
          ),
        ),
        2 => 
        array (
          'name' => 'SaasGroupCodes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户所拥有的saas权限组code，多个用英文逗号分隔',
            'type' => 'string',
            'required' => false,
            'example' => 'DS,FAQ',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'A629A28F-F25E-5572-A679-FA46FB0151D6',
              ),
              'Data' => 
              array (
                'description' => 'SaaS被集成列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'SaaS被集成信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => 'SaaS原子化页面唯一标识，可用来关联和查询原子页面的相关信息',
                      'type' => 'string',
                      'example' => 'GLOBAL_SERVICE',
                    ),
                    'Name' => 
                    array (
                      'description' => '原子页面的中文名称',
                      'type' => 'string',
                      'example' => '全局服务',
                    ),
                    'Url' => 
                    array (
                      'description' => '原子页面的链接地址',
                      'type' => 'string',
                      'example' => 'https://alime.console.aliyun.com/?productCode=p_beebot_public&switchAgent=1204001&saasCode=Robot&saasToken=06614fdb-c72f-436e-8003-dfe8a2854a15&saasName=123#/robot',
                    ),
                    'EnName' => 
                    array (
                      'description' => '原子页面的英文名称',
                      'type' => 'string',
                      'example' => 'GLOBAL SERVICE',
                    ),
                    'ServiceUrl' => 
                    array (
                      'description' => 'iframe嵌套SaaS页面链接',
                      'type' => 'string',
                      'example' => 'https://pre-alime4service.console.aliyun.com/?productCode=p_beebot_public&switchAgent=1204001&saasCode=Robot&saasToken=06614fdb-c72f-436e-8003-dfe8a2854a15&saasName=123#/robot',
                    ),
                  ),
                ),
              ),
              'SaasToken' => 
              array (
                'description' => '云小蜜颁发的SaaS被集成Token',
                'type' => 'string',
                'example' => '06614fdb-c72f-436e-8003-dfe8a2854a15',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '',
      'title' => '获取SaaS被集成信息列表',
    ),
    'ListSaasPermissionGroupInfos' => 
    array (
      'summary' => '获取权限被集成信息列表，可通过该列表返回的权限组，给用户授权。',
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
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务空间key，不传时访问默认业务空间，key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => true,
            'example' => 'ac627989eb4f8a98ed05fd098bbae5_p_beebot_public',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '8AD9FA10-7780-5E12-B701-13C928524F32',
              ),
              'Data' => 
              array (
                'description' => 'SaaS各集成页面权限列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'SaaS各集成页面权限',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SaasCode' => 
                    array (
                      'description' => 'SaaS原子化页面唯一标识',
                      'type' => 'string',
                      'example' => 'FAQ',
                    ),
                    'Name' => 
                    array (
                      'description' => '原子页面的中文名称',
                      'type' => 'string',
                      'example' => '发布中心',
                    ),
                    'EnName' => 
                    array (
                      'description' => '原子页面的英文名称',
                      'type' => 'string',
                      'example' => 'Release Center',
                    ),
                    'PgInfos' => 
                    array (
                      'description' => 'SaaS权限组列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'SaaS权限组信息',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'PgCode' => 
                          array (
                            'description' => 'SaaS权限组Code',
                            'type' => 'string',
                            'example' => 'FAQ',
                          ),
                          'PgName' => 
                          array (
                            'description' => 'SaaS权限组中文名',
                            'type' => 'string',
                            'example' => 'FAQ管理',
                          ),
                          'PgEnName' => 
                          array (
                            'description' => 'SaaS权限组英文名',
                            'type' => 'string',
                            'example' => 'FAQ',
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
      'responseDemo' => '',
      'title' => '获取权限被集成信息列表',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'chatbot.cn-shanghai.aliyuncs.com',
    ),
  ),
);
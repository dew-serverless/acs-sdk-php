<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'PaiPlugin',
    'version' => '2022-01-12',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 157210,
      'title' => '基本信息',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetUser',
        1 => 'GetMessageConfig',
      ),
    ),
    1 => 
    array (
      'id' => 157213,
      'title' => '短信签名',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateSignature',
        1 => 'DeleteSignature',
        2 => 'ListSignatures',
        3 => 'GetSignature',
      ),
    ),
    2 => 
    array (
      'id' => 157218,
      'title' => '短信模板',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateTemplate',
        1 => 'DeleteTemplate',
        2 => 'ListTemplates',
        3 => 'GetTemplate',
      ),
    ),
    3 => 
    array (
      'id' => 157223,
      'title' => '发送短信',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SendMessage',
        1 => 'ListMessages',
        2 => 'ListMessageMetrics',
      ),
    ),
    4 => 
    array (
      'id' => 157227,
      'title' => '短信回执',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SmsReport',
        1 => 'SmsUp',
        2 => 'UpdateReportUrl',
        3 => 'UpdateUploadUrl',
      ),
    ),
    5 => 
    array (
      'id' => 167354,
      'title' => '运营活动',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateCampaign',
        1 => 'DeleteCampaign',
        2 => 'ListCampaigns',
        3 => 'GetCampaign',
        4 => 'UpdateCampaign',
      ),
    ),
    6 => 
    array (
      'id' => 167360,
      'title' => '算法任务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListAlgorithms',
        1 => 'GetAlgorithm',
        2 => 'CreateTrainingJob',
        3 => 'DeleteTrainingJob',
        4 => 'ListTrainingJobs',
        5 => 'GetTrainingJob',
        6 => 'CreateInferenceJob',
        7 => 'DeleteInferenceJob',
        8 => 'ListInferenceJobs',
        9 => 'GetInferenceJob',
      ),
    ),
    7 => 
    array (
      'id' => 167371,
      'title' => '人群管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateGroup',
        1 => 'DeleteGroup',
        2 => 'ListGroups',
        3 => 'GetGroup',
      ),
    ),
    8 => 
    array (
      'id' => 167376,
      'title' => '发送计划',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateSchedule',
        1 => 'DeleteSchedule',
        2 => 'ListSchedules',
        3 => 'GetSchedule',
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
    'GetUser' => 
    array (
      'summary' => '获取用户产品状态等基本信息。',
      'path' => '/api/v2/users',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '128719',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '成功获取账号状态。',
            'description' => '成功获取基本信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'AccountStatus' => 
                  array (
                    'title' => '账号状态。
- 0 : 正常使用。
- 1 : 因欠费等原因暂时停用。
- 2 : 已释放产品。',
                    'description' => '账号状态。
- 0 : 正常使用。
- 1 : 因欠费等原因暂时停用。
- 2 : 已释放产品。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"AccountStatus\\": 0\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '获取基本信息',
    ),
    'GetMessageConfig' => 
    array (
      'summary' => '获取用户短信配置，如回执接口，上行短信接口等。',
      'path' => '/api/v2/users/messageConfig',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '129012',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '成功获取短信配置。',
            'description' => '成功获取短信配置。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'SmsReportUrl' => 
                  array (
                    'title' => '短信发送状态回执接收服务地址。',
                    'description' => '短信发送状态回执接收服务地址。',
                    'type' => 'string',
                    'example' => 'http://example.com',
                  ),
                  'SmsUpUrl' => 
                  array (
                    'title' => '上行短信消息接收服务地址。',
                    'description' => '上行短信消息接收服务地址。',
                    'type' => 'string',
                    'example' => 'http://example.com',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"SmsReportUrl\\": \\"http://example.com\\",\\n    \\"SmsUpUrl\\": \\"http://example.com\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '获取短信配置',
    ),
    'CreateSignature' => 
    array (
      'summary' => '发起注册签名请求，可通过控制台或GetSignature查看签名审核状态。',
      'path' => '/api/v2/signatures',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '123190',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求参数的主体信息。',
            'description' => '请求参数的主体信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Description' => 
              array (
                'title' => '申请说明。',
                'description' => '申请说明。',
                'type' => 'string',
                'required' => false,
                'example' => '申请说明',
              ),
              'Name' => 
              array (
                'title' => '签名名称。',
                'description' => '签名名称。',
                'type' => 'string',
                'required' => true,
                'example' => '用户增长',
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
            'title' => '成功发起注册签名请求，可通过控制台或GetSignature获取审核状态。',
            'description' => '成功发起注册签名请求，可通过控制台或GetSignature获取审核状态。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'CreatedTime' => 
                  array (
                    'title' => '创建时间 (UTC+8)。',
                    'description' => '创建时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                  'Id' => 
                  array (
                    'title' => '签名ID。',
                    'description' => '签名ID。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'Name' => 
                  array (
                    'title' => '签名名称。',
                    'description' => '签名名称。',
                    'type' => 'string',
                    'example' => '用户增长',
                  ),
                  'Status' => 
                  array (
                    'title' => '签名审核状态。
- 0：审核中。
- 1：审核通过。
- 2：审核不通过。',
                    'description' => '签名审核状态。
- 0：审核中。
- 1：审核通过。
- 2：审核不通过。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'UpdatedTime' => 
                  array (
                    'title' => '更新时间 (UTC+8)。',
                    'description' => '更新时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败,原因见errmsg',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"用户增长\\",\\n    \\"Status\\": 0,\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"0\\"\\n}","type":"json"}]',
      'title' => '注册签名',
    ),
    'DeleteSignature' => 
    array (
      'summary' => '删除签名。',
      'path' => '/api/v2/signatures/{Id}',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '123196',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '签名ID，可通过ListSignatures查询账号下的签名列表，获取签名ID。',
            'description' => '签名ID，可通过ListSignatures查询账号下的签名列表，获取签名ID。',
            'type' => 'string',
            'required' => true,
            'example' => '996e466b-6808-49c7-998c-47b57bb85dd4',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '成功删除签名。',
            'description' => '成功删除签名。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败,原因见errmsg',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"OK\\",\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '删除签名',
    ),
    'ListSignatures' => 
    array (
      'summary' => '获取签名注册记录列表。',
      'path' => '/api/v2/signatures',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '123212',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
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
            'title' => '签名名称过滤。',
            'description' => '签名名称过滤。',
            'type' => 'string',
            'required' => false,
            'example' => '用户增长',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页数，从1开始，默认为1。',
            'description' => '分页数，从1开始，默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页大小，默认为10。',
            'description' => '分页大小，默认为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '签名审核状态过滤。
- 0：审核中。
- 1：审核通过。
- 2：审核不通过。',
            'description' => '签名审核状态过滤。
- 0：审核中。
- 1：审核通过。
- 2：审核不通过。',
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
            'title' => '成功获取签名列表。',
            'description' => '成功获取签名列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNumber' => 
                  array (
                    'title' => '分页数，从1开始，默认为1。',
                    'description' => '分页数，从1开始，默认为1。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                    'default' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '分页大小，默认为10。',
                    'description' => '分页大小，默认为10。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                    'default' => '10',
                  ),
                  'Signatures' => 
                  array (
                    'title' => '分页返回的签名列表。',
                    'description' => '分页返回的签名列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CreatedTime' => 
                        array (
                          'title' => '创建时间 (UTC+8)。',
                          'description' => '创建时间 (UTC+8)。',
                          'type' => 'string',
                          'example' => '2020-01-01 12:00:00',
                        ),
                        'Id' => 
                        array (
                          'title' => '签名Id。',
                          'description' => '签名ID。',
                          'type' => 'string',
                          'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                        ),
                        'Name' => 
                        array (
                          'title' => '签名名称。',
                          'description' => '签名名称。',
                          'type' => 'string',
                          'example' => '用户增长',
                        ),
                        'Status' => 
                        array (
                          'title' => '签名审核状态。
- 0：审核中。
- 1：审核通过。
- 2：审核不通过。',
                          'description' => '签名审核状态。
- 0：审核中。
- 1：审核通过。
- 2：审核不通过。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'UpdatedTime' => 
                        array (
                          'title' => '更新时间 (UTC+8)。',
                          'description' => '更新时间 (UTC+8)。',
                          'type' => 'string',
                          'example' => '2020-01-01 12:00:00',
                        ),
                      ),
                    ),
                  ),
                  'TotalCount' => 
                  array (
                    'title' => '账号下全部签名注册记录数量。',
                    'description' => '账号下全部签名注册记录数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败,原因见errmsg',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Signatures\\": [\\n      {\\n        \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n        \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"Name\\": \\"用户增长\\",\\n        \\"Status\\": 0,\\n        \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\"\\n      }\\n    ],\\n    \\"TotalCount\\": 10\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '获取签名列表',
    ),
    'GetSignature' => 
    array (
      'summary' => '获取签名的详细信息。',
      'path' => '/api/v2/signatures/{Id}',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '123202',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '签名Id，可通过ListSignatures查询账号下的签名列表，获取签名Id。',
            'description' => '签名Id，可通过ListSignatures查询账号下的签名列表，获取签名Id。',
            'type' => 'string',
            'required' => false,
            'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '成功获取签名详情。',
            'description' => '成功获取签名详情。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'CreatedTime' => 
                  array (
                    'title' => '创建时间 (UTC+8)。',
                    'description' => '创建时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                  'Description' => 
                  array (
                    'title' => '申请说明。',
                    'description' => '申请说明。',
                    'type' => 'string',
                    'example' => '申请说明',
                  ),
                  'Id' => 
                  array (
                    'title' => '签名Id。',
                    'description' => '签名Id。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'Name' => 
                  array (
                    'title' => '签名名称。',
                    'description' => '签名名称。',
                    'type' => 'string',
                    'example' => '用户增长',
                  ),
                  'Reason' => 
                  array (
                    'title' => '审核建议。',
                    'description' => '审核建议。',
                    'type' => 'string',
                    'example' => '同意',
                  ),
                  'Status' => 
                  array (
                    'title' => '签名审核状态。
- 0：审核中。
- 1：审核通过。
- 2：审核不通过。',
                    'description' => '签名审核状态。
- 0：审核中。
- 1：审核通过。
- 2：审核不通过。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'UpdatedTime' => 
                  array (
                    'title' => '更新时间 (UTC+8)。',
                    'description' => '更新时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败,原因见errmsg',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"Description\\": \\"申请说明\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"用户增长\\",\\n    \\"Reason\\": \\"同意\\",\\n    \\"Status\\": 0,\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '获取签名详情',
    ),
    'CreateTemplate' => 
    array (
      'summary' => '调用CreateTemplate来创建模板。',
      'path' => '/api/v2/templates',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '123191',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求参数的主体信息。',
            'description' => '请求参数的主体信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Content' => 
              array (
                'title' => '模板内容，请注意控制总字数在70个字以内，超出部分按长短信收费，按67个字为单位记一条短信，营销短信必须在结尾添加“回T退订”。',
                'description' => '模板内容，请注意控制总字数在70个字以内，超出部分按长短信收费，按67个字为单位记一条短信，必须在结尾添加”回T退订“。',
                'type' => 'string',
                'required' => false,
                'example' => '模板内容',
              ),
              'Description' => 
              array (
                'title' => '申请说明。',
                'description' => '申请说明。',
                'type' => 'string',
                'required' => false,
                'example' => '申请说明',
              ),
              'Name' => 
              array (
                'title' => '模板名称。',
                'description' => '模板名称。',
                'type' => 'string',
                'required' => false,
                'example' => '模板召回-20220101',
              ),
              'Signature' => 
              array (
                'title' => '签名名称，同时只能指定签名名称或签名ID其中之一。',
                'description' => '签名名称。',
                'type' => 'string',
                'required' => false,
                'example' => 'PAI',
              ),
              'SignatureId' => 
              array (
                'title' => '签名ID，可通过ListSignatures获取审核状态为已通过的签名列表，获取签名ID。',
                'description' => '签名ID，可通过ListSignatures获取审核状态为已通过的签名列表，获取签名ID。',
                'type' => 'string',
                'required' => false,
                'example' => '5480e3e7-f578-42d2-8ce8-217dec75f2e6',
              ),
              'Type' => 
              array (
                'title' => '模板类型。
- 0 : 验证码。
- 1 : 短信通知。
- 2 : 推广短信。',
                'description' => '模板类型。
- 0：验证码。
- 1：短信通知。
- 2：推广短信。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '2',
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
            'title' => '成功发起注册模板请求，可通过控制台或GetTemplate获取审核状态。',
            'description' => '成功发起注册模板请求，可通过控制台或GetTemplate获取审核状态。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Content' => 
                  array (
                    'title' => '模板内容。',
                    'description' => '模板内容。',
                    'type' => 'string',
                    'example' => '模板内容',
                  ),
                  'CreatedTime' => 
                  array (
                    'title' => '创建时间 (UTC+8)。',
                    'description' => '创建时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                  'Description' => 
                  array (
                    'title' => '申请说明。',
                    'description' => '申请说明。',
                    'type' => 'string',
                    'example' => '申请说明',
                  ),
                  'Id' => 
                  array (
                    'title' => '模板ID。',
                    'description' => '模板ID。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'Name' => 
                  array (
                    'title' => '模板名称。',
                    'description' => '模板名称。',
                    'type' => 'string',
                    'example' => '模板召回-20220101',
                  ),
                  'Reason' => 
                  array (
                    'title' => '审核意见。',
                    'description' => '审核意见。',
                    'type' => 'string',
                    'example' => '同意',
                  ),
                  'Signature' => 
                  array (
                    'title' => '签名。',
                    'description' => '签名。',
                    'type' => 'string',
                    'example' => 'PAI通知',
                  ),
                  'SignatureId' => 
                  array (
                    'title' => '签名ID。',
                    'description' => '签名ID。',
                    'type' => 'string',
                    'example' => '5480e3e7-f578-42d2-8ce8-217dec75f2e6',
                  ),
                  'Status' => 
                  array (
                    'title' => '审核状态。
- 0 : 审核中。
- 1 : 审核通过。
- 2 : 审核不通过。',
                    'description' => '审核状态。
- 0 : 审核中。
- 1 : 审核通过。
- 2 : 审核不通过。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'TemplateCode' => 
                  array (
                    'title' => '模板Code。',
                    'description' => '模板Code。',
                    'type' => 'string',
                    'example' => 'SMS_123456',
                  ),
                  'Type' => 
                  array (
                    'title' => '模板类型。
- 0 : 验证码。
- 1 : 短信通知。
- 2 : 推广短信。',
                    'description' => '模板类型。
- 0：验证码。
- 1：短信通知。
- 2：推广短信。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'UpdatedTime' => 
                  array (
                    'title' => '更新时间 (UTC+8)。',
                    'description' => '更新时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败,原因见errmsg',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Content\\": \\"模板内容\\",\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"Description\\": \\"申请说明\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"模板召回-20220101\\",\\n    \\"Reason\\": \\"同意\\",\\n    \\"Signature\\": \\"PAI通知\\",\\n    \\"SignatureId\\": \\"5480e3e7-f578-42d2-8ce8-217dec75f2e6\\",\\n    \\"Status\\": 0,\\n    \\"TemplateCode\\": \\"SMS_123456\\",\\n    \\"Type\\": 1,\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '注册模板',
    ),
    'DeleteTemplate' => 
    array (
      'summary' => '删除短信模板。',
      'path' => '/api/v2/templates/{Id}',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '123197',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '模板Id，可通过ListTemplates查询账号下的模板列表，获取模板Id。',
            'description' => '模板ID，可通过ListTemplates查询账号下的模板列表，获取模板ID。',
            'type' => 'string',
            'required' => false,
            'example' => '0bddaf8f-5628-427a-8652-5e24f6b4c35d',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '成功删除模板。',
            'description' => '成功删除模板。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败,原因见errmsg',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"OK\\",\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '删除模板',
    ),
    'ListTemplates' => 
    array (
      'summary' => '获取模板注册记录列表。',
      'path' => '/api/v2/templates',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '123213',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Content',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模板内容过滤。',
            'description' => '模板内容过滤。',
            'type' => 'string',
            'required' => false,
            'example' => '七夕',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模板名称过滤。',
            'description' => '模板名称过滤。',
            'type' => 'string',
            'required' => false,
            'example' => '召回',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页数，从1开始，默认为1。',
            'description' => '分页数，从1开始，默认为1。',
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
            'title' => '分页大小，默认为10。',
            'description' => '分页大小，默认为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '审核状态过滤。
- 0 : 审核中。
- 1 : 审核通过。
- 2 : 审核不通过。',
            'description' => '审核状态过滤。
- 0 : 审核中。
- 1 : 审核通过。
- 2 : 审核不通过。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模板类型过滤。
- 0 : 验证码。
- 1 : 短信通知。
- 2 : 推广短信。',
            'description' => '模板类型过滤。
- 0 : 验证码。
- 1 : 短信通知。
- 2 : 推广短信。',
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
            'title' => '成功获取模板列表。',
            'description' => '成功获取模板列表，可通过控制台或GetTemplate获取审核状态。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNumber' => 
                  array (
                    'title' => '分页数，从1开始，默认为1。',
                    'description' => '分页数，从1开始，默认为1。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                    'default' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '分页大小，默认为10。',
                    'description' => '分页大小，默认为10。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                    'default' => '10',
                  ),
                  'Templates' => 
                  array (
                    'title' => '分页返回的模板列表。',
                    'description' => '分页返回的模板列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Content' => 
                        array (
                          'title' => '模板内容。',
                          'description' => '模板内容。',
                          'type' => 'string',
                          'example' => '模板内容',
                        ),
                        'CreatedTime' => 
                        array (
                          'title' => '创建时间 (UTC+8)。',
                          'description' => '创建时间 (UTC+8)。',
                          'type' => 'string',
                          'example' => '2020-01-01 12:00:00',
                        ),
                        'Description' => 
                        array (
                          'title' => '申请说明。',
                          'description' => '申请说明。',
                          'type' => 'string',
                          'example' => '申请说明',
                        ),
                        'Id' => 
                        array (
                          'title' => '模板Id。',
                          'description' => '模板ID。',
                          'type' => 'string',
                          'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                        ),
                        'Name' => 
                        array (
                          'title' => '签名名称。',
                          'description' => '模板名称。',
                          'type' => 'string',
                          'example' => '模板召回-20220101',
                        ),
                        'Reason' => 
                        array (
                          'title' => '审核意见。',
                          'description' => '审核意见。',
                          'type' => 'string',
                          'example' => '同意',
                        ),
                        'SignatureId' => 
                        array (
                          'title' => '签名Id。',
                          'description' => '签名ID。',
                          'type' => 'string',
                          'example' => '5480e3e7-f578-42d2-8ce8-217dec75f2e6',
                        ),
                        'Status' => 
                        array (
                          'title' => '审核状态。
- 0 : 审核中。
- 1 : 审核通过。
- 2 : 审核不通过。',
                          'description' => '审核状态。
- 0 : 审核中。
- 1 : 审核通过。
- 2 : 审核不通过。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'TemplateCode' => 
                        array (
                          'title' => '模板Code。',
                          'description' => '模板Code。',
                          'type' => 'string',
                          'example' => 'SMS_123456',
                        ),
                        'Type' => 
                        array (
                          'title' => '模板类型。
- 0 : 验证码。
- 1 : 短信通知。
- 2 : 推广短信。',
                          'description' => '模板类型。
- 0：验证码。
- 1：短信通知。
- 2：推广短信。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'UpdatedTime' => 
                        array (
                          'title' => '更新时间 (UTC+8)。',
                          'description' => '更新时间 (UTC+8)。',
                          'type' => 'string',
                          'example' => '2020-01-01 12:00:00',
                        ),
                      ),
                    ),
                  ),
                  'TotalCount' => 
                  array (
                    'title' => '全部模板注册记录数量。',
                    'description' => '全部模板注册记录数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败,原因见errmsg',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Templates\\": [\\n      {\\n        \\"Content\\": \\"模板内容\\",\\n        \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n        \\"Description\\": \\"申请说明\\",\\n        \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"Name\\": \\"模板召回-20220101\\",\\n        \\"Reason\\": \\"同意\\",\\n        \\"SignatureId\\": \\"5480e3e7-f578-42d2-8ce8-217dec75f2e6\\",\\n        \\"Status\\": 0,\\n        \\"TemplateCode\\": \\"SMS_123456\\",\\n        \\"Type\\": 1,\\n        \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\"\\n      }\\n    ],\\n    \\"TotalCount\\": 10\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '获取模板列表',
    ),
    'GetTemplate' => 
    array (
      'summary' => '获取模板详细内容。',
      'path' => '/api/v2/templates/{Id}',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '123203',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '模板Id，可通过ListTemplates查询账号下的模板列表，获取模板Id。',
            'description' => '模板ID，可通过ListTemplates查询账号下的模板列表，获取模板ID。',
            'type' => 'string',
            'required' => false,
            'example' => '0bddaf8f-5628-427a-8652-5e24f6b4c35d',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '成功获取模板详情。',
            'description' => '成功获取模板详情。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Content' => 
                  array (
                    'title' => '模板内容。',
                    'description' => '模板内容。',
                    'type' => 'string',
                    'example' => '心仪的TA刚刚给你留言了',
                  ),
                  'CreatedTime' => 
                  array (
                    'title' => '创建时间 (UTC+8)。',
                    'description' => '创建时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                  'Description' => 
                  array (
                    'title' => '申请说明。',
                    'description' => '申请说明。',
                    'type' => 'string',
                    'example' => '申请说明',
                  ),
                  'Id' => 
                  array (
                    'title' => '模板Id。',
                    'description' => '模板ID。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'Name' => 
                  array (
                    'title' => '签名名称。',
                    'description' => '模板名称。',
                    'type' => 'string',
                    'example' => '模板召回-20220101',
                  ),
                  'Reason' => 
                  array (
                    'title' => '审核意见。',
                    'description' => '审核意见。',
                    'type' => 'string',
                    'example' => '同意',
                  ),
                  'SignatureId' => 
                  array (
                    'title' => '签名Id。',
                    'description' => '签名ID。',
                    'type' => 'string',
                    'example' => '5480e3e7-f578-42d2-8ce8-217dec75f2e6',
                  ),
                  'Status' => 
                  array (
                    'title' => '审核状态。
- 0 : 审核中。
- 1 : 审核通过。
- 2 : 审核不通过。',
                    'description' => '审核状态。
- 0 : 审核中。
- 1 : 审核通过。
- 2 : 审核不通过。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'TemplateCode' => 
                  array (
                    'title' => '模板Code。',
                    'description' => '模板Code。',
                    'type' => 'string',
                    'example' => 'SMS_123456',
                  ),
                  'Type' => 
                  array (
                    'title' => '模板类型。
- 0 : 验证码。
- 1 : 短信通知。
- 2 : 推广短信。',
                    'description' => '模板类型。
- 0：验证码。
- 1：短信通知。
- 2：推广短信。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'UpdatedTime' => 
                  array (
                    'title' => '更新时间 (UTC+8)。',
                    'description' => '更新时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败,原因见errmsg',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Content\\": \\"心仪的TA刚刚给你留言了\\",\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"Description\\": \\"申请说明\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"模板召回-20220101\\",\\n    \\"Reason\\": \\"同意\\",\\n    \\"SignatureId\\": \\"5480e3e7-f578-42d2-8ce8-217dec75f2e6\\",\\n    \\"Status\\": 0,\\n    \\"TemplateCode\\": \\"SMS_123456\\",\\n    \\"Type\\": 1,\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '获取模板详情',
    ),
    'SendMessage' => 
    array (
      'summary' => '发送短信，使用前须注册签名和模板。',
      'path' => '/api/v2/messages',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '123215',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求参数的主体信息。',
            'description' => '请求参数的主体信息。',
            'type' => 'object',
            'properties' => 
            array (
              'GroupId' => 
              array (
                'title' => '人群Id，用于关联人群。',
                'description' => '人群ID，用于关联人群。',
                'type' => 'string',
                'required' => false,
                'example' => '10ed87f5-3ca8-4a43-9d83-b30519be7241',
              ),
              'OutIds' => 
              array (
                'title' => '外部拓展字段，示例：["1234567890"]。',
                'description' => '外部拓展字段，示例：["1234567890"]。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                  'required' => false,
                  'example' => '1234567890',
                ),
                'required' => false,
              ),
              'PhoneNumbers' => 
              array (
                'title' => '手机号，每个手机号对应一个模板变量、上行拓展码和外部拓展字段，个数最大为1000，示例：["1234567890"]。',
                'description' => '手机号，每个手机号对应一个模板变量、上行拓展码和外部拓展字段，号码个数最大为1000，示例：["1234567890"]。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                  'required' => false,
                  'example' => '1234567890',
                ),
                'required' => false,
              ),
              'ScheduleId' => 
              array (
                'title' => '触达计划Id，用于关联触达计划。',
                'description' => '发送计划ID，用于关联发送计划。',
                'type' => 'string',
                'required' => false,
                'example' => '08d19262-bd76-48fd-80e8-6a225ac388c1',
              ),
              'SignName' => 
              array (
                'title' => '签名名称。',
                'description' => '签名名称。',
                'type' => 'string',
                'required' => false,
                'example' => 'PAI通知',
              ),
              'SignatureId' => 
              array (
                'title' => '签名Id，同时只能指定签名名称或签名Id其中之一。',
                'description' => '签名ID，同时只能指定签名名称或签名ID其中之一。',
                'type' => 'string',
                'required' => false,
                'example' => '5480e3e7-f578-42d2-8ce8-217dec75f2e6',
              ),
              'SmsUpExtendCodes' => 
              array (
                'title' => '短信上行拓展码，示例：["1234567890"]。',
                'description' => '短信上行拓展码，示例：["1234567890"]。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                  'required' => false,
                  'example' => '1234567890',
                ),
                'required' => false,
              ),
              'TemplateCode' => 
              array (
                'title' => '模板Code。',
                'description' => '模板Code。',
                'type' => 'string',
                'required' => false,
                'example' => 'SMS_123456',
              ),
              'TemplateId' => 
              array (
                'title' => '模板Id，同时只能指定模板Code或模板Id其中之一。',
                'description' => '模板ID，同时只能指定模板Code或模板ID其中之一。',
                'type' => 'string',
                'required' => false,
                'example' => 'b1fe24e2-6a1b-42c6-901e-bfb2e898b5f3',
              ),
              'TemplateParams' => 
              array (
                'title' => '短信模板变量对应的实际值，JSON格式。支持传入多个参数，示例：[{"name":"张三","number":"15038****76"}]。',
                'description' => '短信模板变量对应的实际值，JSON格式。支持传入多个参数，示例：[{"name":"张三","number":"15038****76"}]。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                  'required' => false,
                  'example' => '{"name":"张三","number":"15038****76"}',
                ),
                'required' => false,
              ),
              'PaymentType' => 
              array (
                'description' => '计费类型（为空时默认后付费）。

- PayAsYouGo：后付费
- Subscription：预付费',
                'type' => 'string',
                'required' => false,
                'example' => 'PayAsYouGo',
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
            'title' => '成功发送短信。',
            'description' => '成功发送短信。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Messages' => 
                  array (
                    'title' => '短信结果列表，列表中手机号的顺序与输入请求手机号顺序一一对应。',
                    'description' => '短信结果列表，列表中手机号的顺序与输入请求手机号顺序一一对应。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'title' => '短信Id，可使用ListMessages查询短信状态。',
                          'description' => '短信ID，可使用ListMessages查询短信状态。',
                          'type' => 'string',
                          'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                        ),
                        'PhoneNumber' => 
                        array (
                          'title' => '手机号码。',
                          'description' => '手机号码。',
                          'type' => 'string',
                          'example' => '1234567890',
                        ),
                      ),
                    ),
                  ),
                  'RequestId' => 
                  array (
                    'title' => '短信批处理Id，可使用ListMessages查询短信状态。',
                    'description' => '短信批处理ID，可使用ListMessages查询短信状态。',
                    'type' => 'string',
                    'example' => '62a72a20-8a9b-4060-a510-0c30a9340cba',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Messages\\": [\\n      {\\n        \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"PhoneNumber\\": \\"1234567890\\"\\n      }\\n    ],\\n    \\"RequestId\\": \\"62a72a20-8a9b-4060-a510-0c30a9340cba\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '发送短信',
    ),
    'ListMessages' => 
    array (
      'summary' => '按指定过滤条件获取指定日期的短信发送状态。',
      'path' => '/api/v2/messages',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '123210',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Datetime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '发送日期，格式为20220101。',
            'description' => '发送日期，格式为yyyymmdd。',
            'type' => 'string',
            'required' => true,
            'example' => '20220101',
          ),
        ),
        1 => 
        array (
          'name' => 'ErrorCode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '短信错误码过滤。',
            'description' => '短信错误码过滤。',
            'type' => 'string',
            'required' => false,
            'example' => 'DELIVERED',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '关联人群Id过滤。',
            'description' => '关联人群ID过滤。',
            'type' => 'string',
            'required' => false,
            'example' => '10ed87f5-3ca8-4a43-9d83-b30519be7241',
          ),
        ),
        3 => 
        array (
          'name' => 'MessageId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '短信Id过滤，短信Id为SendMessage成功返回的Id。',
            'description' => '短信ID过滤，短信ID为SendMessage成功返回的ID。',
            'type' => 'string',
            'required' => false,
            'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页数，从1开始，默认为1。',
            'description' => '分页数，从1开始，默认为1。',
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
            'title' => '分页大小，默认为10。',
            'description' => '分页大小，默认为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'PhoneNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '手机号码过滤。',
            'description' => '手机号码。',
            'type' => 'string',
            'required' => false,
            'example' => '1234567890',
          ),
        ),
        7 => 
        array (
          'name' => 'RequestId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '短信批处理Id过滤，短信批处理Id为SendMessage成功返回的RequestId。',
            'description' => '短信批处理ID过滤，短信批处理ID为SendMessage成功返回的RequestId。',
            'type' => 'string',
            'required' => false,
            'example' => '62a72a20-8a9b-4060-a510-0c30a9340cba',
          ),
        ),
        8 => 
        array (
          'name' => 'ScheduleId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '关联触达计划Id过滤。',
            'description' => '关联发送计划ID。',
            'type' => 'string',
            'required' => false,
            'example' => '08d19262-bd76-48fd-80e8-6a225ac388c1',
          ),
        ),
        9 => 
        array (
          'name' => 'Signature',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '签名名称过滤。',
            'description' => '签名名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'PAI通知',
          ),
        ),
        10 => 
        array (
          'name' => 'SignatureId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '签名Id过滤，同时只能指定签名名称或签名Id其中之一。',
            'description' => '签名ID，同时只能指定签名名称或签名ID其中之一。',
            'type' => 'string',
            'required' => false,
            'example' => '5480e3e7-f578-42d2-8ce8-217dec75f2e6',
          ),
        ),
        11 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '短信发送状态过滤。
- 0 : 发送中。
- 1 : 发送成功。
- 2 : 发送失败。',
            'description' => '短信发送状态。
- 0 : 发送中。
- 1 : 发送成功。
- 2 : 发送失败。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        12 => 
        array (
          'name' => 'TemplateCode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模板号过滤。',
            'description' => '模板号。',
            'type' => 'string',
            'required' => false,
            'example' => 'SMS_123456',
          ),
        ),
        13 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模板Id过滤，同时只能指定模板Code或模板Id其中之一。',
            'description' => '模板ID，同时只能指定模板Code或模板ID其中之一。',
            'type' => 'string',
            'required' => false,
            'example' => 'b1fe24e2-6a1b-42c6-901e-bfb2e898b5f3',
          ),
        ),
        14 => 
        array (
          'name' => 'TemplateType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模板类型过滤。
- 0 : 验证码。
- 1 : 短信通知。
- 2 : 推广短信。',
            'description' => '模板类型过滤。
- 0 : 验证码。
- 1 : 短信通知。
- 2 : 推广短信。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '成功获取短信发送详情列表。',
            'description' => '成功。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Messages' => 
                  array (
                    'title' => '短信列表。',
                    'description' => '短信列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ErrorCode' => 
                        array (
                          'title' => '短信错误码。',
                          'description' => '短信错误码。',
                          'type' => 'string',
                          'example' => 'DELIVERED',
                        ),
                        'GroupId' => 
                        array (
                          'title' => '关联人群Id，未关联则为空。',
                          'description' => '关联人群ID。',
                          'type' => 'string',
                          'example' => '51d20163-1b10-4af2-8a23-58ad52201f2f',
                        ),
                        'Id' => 
                        array (
                          'title' => '短信序列号。',
                          'description' => '短信序列号。',
                          'type' => 'string',
                          'example' => '92d05e19-751b-4346-a7c5-8808bb49b8a2',
                        ),
                        'OutId' => 
                        array (
                          'title' => '外部拓展字段。',
                          'description' => '外部拓展字段。',
                          'type' => 'string',
                          'example' => '1234567890',
                        ),
                        'PhoneNumber' => 
                        array (
                          'title' => '手机号码。',
                          'description' => '手机号码。',
                          'type' => 'string',
                          'example' => '1234567890',
                        ),
                        'ScheduleId' => 
                        array (
                          'title' => '关联触达计划Id，未关联则为空。',
                          'description' => '关联发送计划ID。',
                          'type' => 'string',
                          'example' => '0604d49d-fd23-4515-bb26-9b537cbf1f6d',
                        ),
                        'Signature' => 
                        array (
                          'title' => '签名名称。',
                          'description' => '签名名称。',
                          'type' => 'string',
                          'example' => 'PAI通知',
                        ),
                        'Status' => 
                        array (
                          'title' => '短信发送状态。
- 0 : 发送中。
- 1 : 发送成功。
- 2 : 发送失败。',
                          'description' => '短信发送状态。
- 0 : 发送中。
- 1 : 发送成功。
- 2 : 发送失败。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'TemplateCode' => 
                        array (
                          'title' => '模板号。',
                          'description' => '模板号。',
                          'type' => 'string',
                          'example' => 'SMS_123456',
                        ),
                        'TemplateParams' => 
                        array (
                          'title' => '模板参数。',
                          'description' => '模板参数。',
                          'type' => 'string',
                          'example' => '{}',
                        ),
                        'TemplateType' => 
                        array (
                          'title' => '模板类型。
- 0 : 验证码。
- 1 : 短信通知。
- 2 : 推广短信。',
                          'description' => '模板类型。
- 0 : 验证码。
- 1 : 短信通知。
- 2 : 推广短信。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                      ),
                    ),
                  ),
                  'PageNumber' => 
                  array (
                    'title' => '分页数，从1开始，默认为1。',
                    'description' => '分页数，从1开始，默认为1。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                    'default' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '分页大小，默认为10。',
                    'description' => '分页大小，默认为10。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                    'default' => '10',
                  ),
                  'TotalCount' => 
                  array (
                    'title' => '短信数量。',
                    'description' => '短信数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败,原因见errmsg',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Messages\\": [\\n      {\\n        \\"ErrorCode\\": \\"DELIVERED\\",\\n        \\"GroupId\\": \\"51d20163-1b10-4af2-8a23-58ad52201f2f\\",\\n        \\"Id\\": \\"92d05e19-751b-4346-a7c5-8808bb49b8a2\\",\\n        \\"OutId\\": \\"1234567890\\",\\n        \\"PhoneNumber\\": \\"1234567890\\",\\n        \\"ScheduleId\\": \\"0604d49d-fd23-4515-bb26-9b537cbf1f6d\\",\\n        \\"Signature\\": \\"PAI通知\\",\\n        \\"Status\\": 0,\\n        \\"TemplateCode\\": \\"SMS_123456\\",\\n        \\"TemplateParams\\": \\"{}\\",\\n        \\"TemplateType\\": 2\\n      }\\n    ],\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 10\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '获取短信列表',
    ),
    'ListMessageMetrics' => 
    array (
      'summary' => '获取短信发送统计数据，可按指定条件获取分类别详细数据。',
      'path' => '/api/v2/messages/metrics',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '123209',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '结束日期，格式20220102。',
            'description' => '结束日期，格式20220102。',
            'type' => 'string',
            'required' => true,
            'example' => '20210321',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '关联人群Id。',
            'description' => '关联人群ID。',
            'type' => 'string',
            'required' => false,
            'example' => '10ed87f5-3ca8-4a43-9d83-b30519be7241',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页数，从1开始，默认为1。',
            'description' => '分页数，从1开始，默认为1。',
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
            'title' => '分页大小，默认为10。',
            'description' => '分页大小，默认为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'ScheduleId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '关联触达计划Id。',
            'description' => '关联触达计划ID。',
            'type' => 'string',
            'required' => false,
            'example' => '08d19262-bd76-48fd-80e8-6a225ac388c1',
          ),
        ),
        5 => 
        array (
          'name' => 'Signature',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '签名名称。',
            'description' => '签名名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'PAI通知',
          ),
        ),
        6 => 
        array (
          'name' => 'SignatureId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '签名Id，同时只能指定签名名称或签名Id其中之一。',
            'description' => '签名ID，同时只能指定签名名称或签名ID其中之一。',
            'type' => 'string',
            'required' => false,
            'example' => 'b1fe24e2-6a1b-42c6-901e-bfb2e898b5f3',
          ),
        ),
        7 => 
        array (
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始日期，格式20220102。',
            'description' => '开始日期，格式20220102。',
            'type' => 'string',
            'required' => true,
            'example' => '20210321',
          ),
        ),
        8 => 
        array (
          'name' => 'TemplateCode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模板号。',
            'description' => '模板号。',
            'type' => 'string',
            'required' => false,
            'example' => 'SMS_123456',
          ),
        ),
        9 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模板Id，同时只能指定模板Code或模板Id其中之一。',
            'description' => '模板ID，同时只能指定模板Code或模板ID其中之一。',
            'type' => 'string',
            'required' => false,
            'example' => '5480e3e7-f578-42d2-8ce8-217dec75f2e6',
          ),
        ),
        10 => 
        array (
          'name' => 'TemplateType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模板类型。
- 0 : 验证码。
- 1 : 短信通知。
- 2 : 推广短信。',
            'description' => '模板类型。
- 0 : 验证码。
- 1 : 短信通知。
- 2 : 推广短信。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '成功获取短信发送统计列表。',
            'description' => '成功获取短信发送统计列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Metrics' => 
                  array (
                    'title' => '分页返回的统计数据条目列表。',
                    'description' => '分页返回的统计数据条目列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Date' => 
                        array (
                          'title' => '发送日期。',
                          'description' => '发送日期。',
                          'type' => 'string',
                          'example' => '20210321',
                        ),
                        'Fail' => 
                        array (
                          'title' => '发送失败。',
                          'description' => '发送失败。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Pending' => 
                        array (
                          'title' => '发送中。',
                          'description' => '发送中。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Rate' => 
                        array (
                          'title' => '发送成功率。',
                          'description' => '发送成功率。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.8',
                        ),
                        'Success' => 
                        array (
                          'title' => '发送成功。',
                          'description' => '发送成功。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Total' => 
                        array (
                          'title' => '总计短信数量。',
                          'description' => '总计短信数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                      ),
                    ),
                  ),
                  'PageNumber' => 
                  array (
                    'title' => '分页数，从1开始，默认为1。',
                    'description' => '分页数，从1开始，默认为1。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                    'default' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '分页大小，默认为10。',
                    'description' => '分页大小，默认为10。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                    'default' => '10',
                  ),
                  'TotalCount' => 
                  array (
                    'title' => '总统计数据条目数量。',
                    'description' => '总统计数据条目数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Metrics\\": [\\n      {\\n        \\"Date\\": \\"20210321\\",\\n        \\"Fail\\": 0,\\n        \\"Pending\\": 0,\\n        \\"Rate\\": 0.8,\\n        \\"Success\\": 0,\\n        \\"Total\\": 0\\n      }\\n    ],\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 0\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '获取短信发送统计',
      'description' => '获取 [开始日期, 结束日期] 闭区间内的数据，返回数据按日期升序排列，发送统计为空的日期不返回。

发送数据在48小时内会随实际短信发送状态不断更新，最终数据以48小时后数据为准。',
    ),
    'SmsReport' => 
    array (
      'summary' => '短信发送状态报告接口定义。',
      'description' => '您可以指定HTTP URL来接收由短信服务推送的短信发送状态报告，然后SmsReport使用HTTP服务接收消息传递报告。
您可以使用UpdateReportUrl更新您的接收服务URL。',
      'path' => '/api/v2/recall/report',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'title' => '请求参数的主体信息。',
            'description' => '请求参数的主体信息。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'biz_id' => 
                array (
                  'title' => '发送回执ID，即发送流水号。',
                  'description' => '发送回执ID，即发送流水号。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '12345',
                ),
                'err_code' => 
                array (
                  'title' => '状态报告编码。',
                  'description' => '状态报告编码。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'DELIVERED',
                ),
                'err_msg' => 
                array (
                  'title' => '状态报告说明。',
                  'description' => '状态报告说明。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '用户接收成功',
                ),
                'message_id' => 
                array (
                  'title' => '短信Id。调用发送接口SendMessage发送短信时，返回值中的Id字段。可使用短信Id在接口ListMessages查询具体的发送状态。',
                  'description' => '短信ID。调用发送接口SendMessage发送短信时，返回值中的ID字段。可使用短信ID在接口ListMessages查询具体的发送状态。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '123',
                ),
                'out_id' => 
                array (
                  'title' => '外部拓展字段。',
                  'description' => '外部拓展字段。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '123',
                ),
                'phone_number' => 
                array (
                  'title' => '手机号码。',
                  'description' => '手机号码。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1390000****',
                ),
                'report_time' => 
                array (
                  'title' => '状态报告时间。',
                  'description' => '状态报告时间。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '2017-09-01 00:00:00',
                ),
                'request_id' => 
                array (
                  'title' => '短信批处理Id。调用发送接口SendMessage发送短信时，返回值中的RequestId字段。可使用短信批处理Id在接口ListMessages查询具体的发送状态。',
                  'description' => '短信批处理ID。调用发送接口SendMessage发送短信时，返回值中的RequestId字段。可使用短信批处理ID在接口ListMessages查询具体的发送状态。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '62a72a20-8a9b-4060-a510-0c30a9340cba',
                ),
                'send_time' => 
                array (
                  'title' => '发送时间。',
                  'description' => '发送时间。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '2017-09-01 00:00:00',
                ),
                'sign_name' => 
                array (
                  'title' => '签名。',
                  'description' => '签名。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '签名',
                ),
                'sms_size' => 
                array (
                  'title' => '短信长度。短信长度不超过70个字，按照一条短信计费；超过70个字，即为长短信，按照67字/条拆分成多条计费。',
                  'description' => '短信长度。短信长度不超过70个字，按照一条短信计费；超过70个字，即为长短信，按照67字/条拆分成多条计费。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1',
                ),
                'success' => 
                array (
                  'title' => '是否接收成功。
- true : 接收成功。
- false : 接收失败。',
                  'description' => '是否接收成功。
- true : 接收成功。
- false : 接收失败。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'template_code' => 
                array (
                  'title' => '模板号。',
                  'description' => '模板号。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'SMS_123456',
                ),
              ),
              'required' => false,
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
            'title' => '成功获取短信回执。',
            'description' => '成功获取短信回执。',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'title' => '应答编码。',
                'description' => '应答编码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'msg' => 
              array (
                'title' => '描述信息。',
                'description' => '描述信息。',
                'type' => 'string',
                'example' => '接受成功',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见msg。',
            'description' => '失败，原因见msg。',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'title' => '应答编码。',
                'description' => '应答编码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'msg' => 
              array (
                'title' => '描述信息。',
                'description' => '描述信息。',
                'type' => 'string',
                'example' => '接受成功',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"code\\": 0,\\n  \\"msg\\": \\"接受成功\\"\\n}","type":"json"}]',
      'title' => '回执接口定义',
      'extraInfo' => '第一次推送失败后，间隔1分钟、5分钟、10分钟、30分钟、60分钟、60分钟、60分钟、60分钟、60分钟后会进行重推，直至推送成功为止。如果推送10次后仍失败，不再重试。',
    ),
    'SmsUp' => 
    array (
      'summary' => '上行短信消息接口定义。',
      'description' => '您可以通过HTTP批量推送方式拉取上行短信消息（SmsUp）。
您可以通过UpdateUploadUrl更新您的上行短信消息接收地址。',
      'path' => '/api/v2/recall/up',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'title' => '请求参数的主体信息。',
            'description' => '请求参数的主体信息。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'content' => 
                array (
                  'title' => '发送内容。',
                  'description' => '发送内容。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '内容',
                ),
                'dest_code' => 
                array (
                  'title' => '上行短信扩展号码，系统后台自动生成，不支持自定义传入。',
                  'description' => '上行短信扩展号码，系统后台自动生成，不支持自定义传入。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1234',
                ),
                'phone_number' => 
                array (
                  'title' => '手机号码。',
                  'description' => '手机号码。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1390000****',
                ),
                'send_time' => 
                array (
                  'title' => '发送时间。',
                  'description' => '发送时间。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '2017-09-01 00:00:00',
                ),
                'sequence_id' => 
                array (
                  'title' => '序列号。',
                  'description' => '序列号。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1234567890',
                ),
                'sign_name' => 
                array (
                  'title' => '签名信息。',
                  'description' => '签名信息。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '签名',
                ),
              ),
              'required' => false,
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
            'title' => '成功获取短信上行信息。',
            'description' => '成功获取短信上行信息。',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'title' => '应答编码。',
                'description' => '应答编码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'msg' => 
              array (
                'title' => '描述信息。',
                'description' => '描述信息。',
                'type' => 'string',
                'example' => '接受成功',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见msg。',
            'description' => '失败，原因见msg。',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'title' => '应答编码。',
                'description' => '应答编码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'msg' => 
              array (
                'title' => '描述信息。',
                'description' => '描述信息。',
                'type' => 'string',
                'example' => '接受成功',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"code\\": 0,\\n  \\"msg\\": \\"接受成功\\"\\n}","type":"json"}]',
      'title' => '上行接口定义',
      'extraInfo' => '第一次推送失败后，间隔1分钟、5分钟、10分钟、30分钟、60分钟、60分钟、60分钟、60分钟、60分钟后会进行重推，直至推送成功为止。如果推送10次后仍失败，不再重试。',
    ),
    'UpdateReportUrl' => 
    array (
      'summary' => '更新短信发送状态回执接收服务地址。',
      'path' => '/api/v2/users/reportUrl',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '128725',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求参数的主体信息。',
            'description' => '请求参数的主体信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Url' => 
              array (
                'title' => '可公开访问的地址。',
                'description' => '可公开访问的地址。',
                'type' => 'string',
                'required' => false,
                'example' => 'http://example.com',
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
            'title' => '成功更新回执Url。',
            'description' => '成功更新回执Url。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"OK\\",\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '更新回执地址',
      'description' => '更新成功一分钟后生效。',
    ),
    'UpdateUploadUrl' => 
    array (
      'summary' => '更新上行信息接收服务地址。',
      'path' => '/api/v2/users/uploadUrl',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '128726',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求参数的主体信息。',
            'description' => '请求参数的主体信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Url' => 
              array (
                'title' => '可公开访问的地址。',
                'description' => '可公开访问的地址。',
                'type' => 'string',
                'required' => false,
                'example' => 'http://example.com',
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
            'title' => '成功更新上行Url。',
            'description' => '成功更新上行Url。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"OK\\",\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '更新上行地址',
      'description' => '更新成功一分钟后生效。',
    ),
    'CreateCampaign' => 
    array (
      'summary' => '创建运营活动。',
      'path' => '/api/v2/campaigns',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '131222',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求参数的主体信息。',
            'description' => '请求参数的主体信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Name' => 
              array (
                'title' => '运营活动名称。',
                'description' => '运营活动名称。',
                'type' => 'string',
                'required' => false,
                'example' => 'VIP客户',
              ),
              'Remark' => 
              array (
                'title' => '备注。',
                'description' => '备注。',
                'type' => 'string',
                'required' => false,
                'example' => '双十一活动',
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
            'title' => '成功创建运营活动。',
            'description' => '成功创建运营活动。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'CreatedTime' => 
                  array (
                    'title' => '创建时间 (UTC+8)。',
                    'description' => '创建时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                  'Id' => 
                  array (
                    'title' => '运营活动Id。',
                    'description' => '运营活动ID。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'Name' => 
                  array (
                    'title' => '运营活动名称。',
                    'description' => '运营活动名称。',
                    'type' => 'string',
                    'example' => 'VIP客户',
                  ),
                  'Remark' => 
                  array (
                    'title' => '备注。',
                    'description' => '备注。',
                    'type' => 'string',
                    'example' => '双十一活动',
                  ),
                  'UpdatedTime' => 
                  array (
                    'title' => '更新时间 (UTC+8)。',
                    'description' => '更新时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"VIP客户\\",\\n    \\"Remark\\": \\"双十一活动\\",\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '创建运营活动',
    ),
    'DeleteCampaign' => 
    array (
      'summary' => '删除运营活动。',
      'path' => '/api/v2/campaigns/{Id}',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '131223',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'path',
            'description' => '运营活动ID，可通过ListCampaigns获取运营活动列表获取相应ID。',
            'type' => 'string',
            'required' => false,
            'example' => '0bddaf8f-5628-427a-8652-5e24f6b4c35d',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '成功删除运营活动。',
            'description' => '成功删除运营活动。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"OK\\",\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '删除运营活动',
    ),
    'ListCampaigns' => 
    array (
      'summary' => '获取运营活动列表。',
      'path' => '/api/v2/campaigns',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '131225',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
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
            'title' => '运营活动名称过滤。',
            'description' => '运营活动名称过滤。',
            'type' => 'string',
            'required' => false,
            'example' => 'VIP客户',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页数，从1开始，默认为1。',
            'description' => '分页数，从1开始，默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页大小，默认为10。',
            'description' => '分页大小，默认为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '运营活动备注过滤。',
            'description' => '运营活动备注过滤。',
            'type' => 'string',
            'required' => false,
            'example' => '充值大于一万',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '成功获取运营活动列表。',
            'description' => '成功获取运营活动列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Campaigns' => 
                  array (
                    'title' => '运营活动列表。',
                    'description' => '运营活动列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CreatedTime' => 
                        array (
                          'title' => '创建时间 (UTC+8)。',
                          'description' => '创建时间 (UTC+8)。',
                          'type' => 'string',
                          'example' => '2020-01-01 12:00:00',
                        ),
                        'Id' => 
                        array (
                          'title' => '运营活动Id。',
                          'description' => '运营活动ID。',
                          'type' => 'string',
                          'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                        ),
                        'Name' => 
                        array (
                          'title' => '运营活动名称。',
                          'description' => '运营活动名称。',
                          'type' => 'string',
                          'example' => 'VIP客户',
                        ),
                        'Remark' => 
                        array (
                          'title' => '备注。',
                          'description' => '备注。',
                          'type' => 'string',
                          'example' => '双十一活动',
                        ),
                        'UpdatedTime' => 
                        array (
                          'title' => '更新时间 (UTC+8)。',
                          'description' => '更新时间 (UTC+8)。',
                          'type' => 'string',
                          'example' => '2020-01-01 12:00:00',
                        ),
                      ),
                    ),
                  ),
                  'PageNumber' => 
                  array (
                    'title' => '分页数，从1开始，默认为1。',
                    'description' => '分页数，从1开始，默认为1。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                    'default' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '分页大小，默认为10。',
                    'description' => '分页大小，默认为10。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                    'default' => '10',
                  ),
                  'TotalCount' => 
                  array (
                    'title' => '总运营活动数量。',
                    'description' => '总运营活动数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Campaigns\\": [\\n      {\\n        \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n        \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"Name\\": \\"VIP客户\\",\\n        \\"Remark\\": \\"双十一活动\\",\\n        \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\"\\n      }\\n    ],\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 10\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '获取运营活动列表',
    ),
    'GetCampaign' => 
    array (
      'summary' => '获取运营活动详细内容。',
      'path' => '/api/v2/campaigns/{Id}',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '131224',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '运营活动Id，可通过ListCampaigns查询账号下的运营活动列表，获取运营活动Id。',
            'description' => '运营活动ID，可通过ListCampaigns查询账号下的运营活动列表，获取运营活动ID。',
            'type' => 'string',
            'required' => false,
            'example' => '0bddaf8f-5628-427a-8652-5e24f6b4c35d',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '成功获取运营活动详情。',
            'description' => '成功获取运营活动详情。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'CreatedTime' => 
                  array (
                    'title' => '创建时间 (UTC+8)。',
                    'description' => '创建时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                  'Id' => 
                  array (
                    'title' => '运营活动Id。',
                    'description' => '运营活动ID。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'Name' => 
                  array (
                    'title' => '运营活动名称。',
                    'description' => '运营活动名称。',
                    'type' => 'string',
                    'example' => 'VIP客户',
                  ),
                  'Remark' => 
                  array (
                    'title' => '备注。',
                    'description' => '备注。',
                    'type' => 'string',
                    'example' => '双十一活动',
                  ),
                  'UpdatedTime' => 
                  array (
                    'title' => '更新时间 (UTC+8)。',
                    'description' => '更新时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"VIP客户\\",\\n    \\"Remark\\": \\"双十一活动\\",\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '获取运营活动详情',
    ),
    'UpdateCampaign' => 
    array (
      'summary' => '更新运营活动名称和备注。',
      'path' => '/api/v2/campaigns/{Id}',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '131226',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '运营活动Id，可通过ListCampaigns查询账号下的运营活动列表，获取运营活动Id。',
            'description' => '运营活动ID，可通过ListCampaigns查询账号下的运营活动列表，获取运营活动ID。',
            'type' => 'string',
            'required' => false,
            'example' => '996e466b-6808-49c7-998c-47b57bb85dd4',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求参数的主体信息。',
            'description' => '请求参数的主体信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Name' => 
              array (
                'title' => '运营活动名称。',
                'description' => '运营活动名称。',
                'type' => 'string',
                'required' => false,
                'example' => 'VIP客户',
              ),
              'Remark' => 
              array (
                'title' => '备注。',
                'description' => '备注。',
                'type' => 'string',
                'required' => false,
                'example' => '双十一活动',
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
            'title' => '成功更新运营活动。',
            'description' => '成功更新运营活动。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'CreatedTime' => 
                  array (
                    'title' => '创建时间 (UTC+8)。',
                    'description' => '创建时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                  'Id' => 
                  array (
                    'title' => '运营活动Id。',
                    'description' => '运营活动ID。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'Name' => 
                  array (
                    'title' => '运营活动名称。',
                    'description' => '运营活动名称。',
                    'type' => 'string',
                    'example' => 'VIP客户',
                  ),
                  'Remark' => 
                  array (
                    'title' => '备注。',
                    'description' => '备注。',
                    'type' => 'string',
                    'example' => '双十一活动',
                  ),
                  'UpdatedTime' => 
                  array (
                    'title' => '更新时间 (UTC+8)。',
                    'description' => '更新时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"VIP客户\\",\\n    \\"Remark\\": \\"双十一活动\\",\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '更新运营活动',
    ),
    'ListAlgorithms' => 
    array (
      'summary' => '获取当前可用算法列表。',
      'path' => '/api/v2/algorithms',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '129064',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '算法Id过滤。',
            'description' => '算法ID过滤。',
            'type' => 'string',
            'required' => false,
            'example' => 'sms_recall',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '算法名称过滤。',
            'description' => '算法名称过滤。',
            'type' => 'string',
            'required' => false,
            'example' => '短信召回',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页数，从1开始，默认为1。',
            'description' => '分页数，从1开始，默认为1。',
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
            'title' => '分页大小，默认为10。',
            'description' => '分页大小，默认为10。',
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
            'title' => '成功获取算法列表。',
            'description' => '成功获取算法列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Algorithms' => 
                  array (
                    'title' => '算法列表。',
                    'description' => '算法列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'title' => '算法Id。',
                          'description' => '算法ID。',
                          'type' => 'string',
                          'example' => 'sms_recall',
                        ),
                        'Name' => 
                        array (
                          'title' => '算法名称。',
                          'description' => '算法名称。',
                          'type' => 'string',
                          'example' => '短信召回',
                        ),
                      ),
                    ),
                  ),
                  'PageNumber' => 
                  array (
                    'title' => '分页数，从1开始，默认为1。',
                    'description' => '分页数，从1开始，默认为1。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                    'default' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '分页大小，默认为10。',
                    'description' => '分页大小，默认为10。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                    'default' => '10',
                  ),
                  'TotalCount' => 
                  array (
                    'title' => '总算法数量。',
                    'description' => '总算法数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Algorithms\\": [\\n      {\\n        \\"Id\\": \\"sms_recall\\",\\n        \\"Name\\": \\"短信召回\\"\\n      }\\n    ],\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 10\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '获取算法列表',
    ),
    'GetAlgorithm' => 
    array (
      'summary' => '获取算法详细参数信息。',
      'path' => '/api/v2/algorithms/{Id}',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '129059',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '模板Id，可通过ListAlgorithms查询当前可用算法，使用获取的算法Id。',
            'description' => '算法ID，可通过ListAlgorithms查询当前可用算法，使用获取的算法ID。',
            'type' => 'string',
            'required' => false,
            'example' => '0bddaf8f-5628-427a-8652-5e24f6b4c35d',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '成功获取算法详情。',
            'description' => '成功获取算法详情。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Description' => 
                  array (
                    'title' => '算法说明。',
                    'description' => '算法说明。',
                    'type' => 'string',
                    'example' => '算法说明',
                  ),
                  'Id' => 
                  array (
                    'title' => '算法Id。',
                    'description' => '算法ID。',
                    'type' => 'string',
                    'example' => 'sms_recall',
                  ),
                  'InferUserConfigMap' => 
                  array (
                    'title' => '预测所需参数名与对应的参数说明。',
                    'description' => '预测所需参数名与对应的参数说明。',
                    'type' => 'string',
                    'example' => '{}',
                  ),
                  'Name' => 
                  array (
                    'title' => '算法名称。',
                    'description' => '算法名称。',
                    'type' => 'string',
                    'example' => '短信召回',
                  ),
                  'TrainUserConfigMap' => 
                  array (
                    'title' => '训练所需参数名与对应的参数说明。',
                    'description' => '训练所需参数名与对应的参数说明。',
                    'type' => 'string',
                    'example' => '{}',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Description\\": \\"算法说明\\",\\n    \\"Id\\": \\"sms_recall\\",\\n    \\"InferUserConfigMap\\": \\"{}\\",\\n    \\"Name\\": \\"短信召回\\",\\n    \\"TrainUserConfigMap\\": \\"{}\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '获取算法详情',
    ),
    'CreateTrainingJob' => 
    array (
      'summary' => '创建训练任务。',
      'path' => '/api/v2/training/jobs',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '129054',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求参数的主体信息。',
            'description' => '请求参数的主体信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Algorithm' => 
              array (
                'title' => '关联算法ID。',
                'description' => '关联算法ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'user_recall',
              ),
              'CampaignId' => 
              array (
                'title' => '关联运营活动ID。',
                'description' => '关联运营活动ID。',
                'type' => 'string',
                'required' => false,
                'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
              ),
              'DataPath' => 
              array (
                'title' => '训练数据路径，指定路径前需确保已在控制台完成一键授权。',
                'description' => '训练数据路径。',
                'type' => 'string',
                'required' => false,
                'example' => 'https://bucket.region.aliyuncs.com/folder/',
              ),
              'Name' => 
              array (
                'title' => '训练任务名称。',
                'description' => '训练任务名称。',
                'type' => 'string',
                'required' => false,
                'example' => 'VIP客户',
              ),
              'Remark' => 
              array (
                'title' => '备注。',
                'description' => '备注。',
                'type' => 'string',
                'required' => false,
                'example' => '充值大于一万',
              ),
              'UserConfig' => 
              array (
                'title' => '用户配置。',
                'description' => '用户配置，用于设置start\\_date、end\\_date等参数，划定建模数据的时间范围。',
                'type' => 'string',
                'required' => false,
                'example' => '{
      "start_date": "20210101",
      "end_date": "20210131"
}',
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
            'title' => '成功注册训练任务，可通过控制台或GetTrainingJob获取任务执行状态。',
            'description' => '成功注册训练任务，可通过控制台或GetTrainingJob获取任务执行状态。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Algorithm' => 
                  array (
                    'title' => '关联算法ID。',
                    'description' => '关联算法ID。',
                    'type' => 'string',
                    'example' => 'user_recall',
                  ),
                  'CampaignId' => 
                  array (
                    'title' => '关联运营活动ID。',
                    'description' => '关联运营活动ID。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'CreatedTime' => 
                  array (
                    'title' => '创建时间 (UTC+8)。',
                    'description' => '创建时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                  'DataPath' => 
                  array (
                    'title' => '训练数据路径，指定路径前需确保已在控制台完成一键授权。',
                    'description' => '训练数据路径。',
                    'type' => 'string',
                    'example' => 'https://bucket.region.aliyuncs.com/folder/',
                  ),
                  'History' => 
                  array (
                    'title' => '训练任务日志。',
                    'description' => '训练任务日志。',
                    'type' => 'string',
                    'example' => 'Error: Parameter are not found.',
                  ),
                  'Id' => 
                  array (
                    'title' => '训练任务ID。',
                    'description' => '训练任务ID。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'Name' => 
                  array (
                    'title' => '训练任务名称。',
                    'description' => '训练任务名称。',
                    'type' => 'string',
                    'example' => 'VIP客户',
                  ),
                  'Remark' => 
                  array (
                    'title' => '备注。',
                    'description' => '备注。',
                    'type' => 'string',
                    'example' => '充值大于一万',
                  ),
                  'Status' => 
                  array (
                    'title' => '训练任务状态。
- 0: 队列中。
- 1: 已提交。
- 2: 运行中。
- 3: 成功。
- 4: 失败。',
                    'description' => '训练任务状态。
- 0: 队列中。
- 1: 已提交。
- 2: 运行中。
- 3: 成功。
- 4: 失败。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'TrainingScheduleId' => 
                  array (
                    'title' => '关联训练计划ID。',
                    'description' => '关联训练计划ID。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'UpdatedTime' => 
                  array (
                    'title' => '更新时间 (UTC+8)。',
                    'description' => '更新时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                  'UserConfig' => 
                  array (
                    'title' => '用户配置。',
                    'description' => '用户配置。',
                    'type' => 'string',
                    'example' => '{
      "start_date": "20210101",
      "end_date": "20210131"
}',
                  ),
                  'HasModelInfo' => 
                  array (
                    'description' => '是否存有特征重要性、模式、决策树等特征信息。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Algorithm\\": \\"user_recall\\",\\n    \\"CampaignId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"DataPath\\": \\"https://bucket.region.aliyuncs.com/folder/\\",\\n    \\"History\\": \\"Error: Parameter are not found.\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"VIP客户\\",\\n    \\"Remark\\": \\"充值大于一万\\",\\n    \\"Status\\": 3,\\n    \\"TrainingScheduleId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"UserConfig\\": \\"{\\\\n      \\\\\\"start_date\\\\\\": \\\\\\"20210101\\\\\\",\\\\n      \\\\\\"end_date\\\\\\": \\\\\\"20210131\\\\\\"\\\\n}\\",\\n    \\"HasModelInfo\\": false\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '创建训练任务',
      'description' => '在使用前需要在网页端一键授权OSS访问权限，并将需要访问的OSS Bucket添加pai=plugin的标签，请参考[OSS添加标签](https://help.aliyun.com/document_detail/133826.html)。',
    ),
    'DeleteTrainingJob' => 
    array (
      'summary' => '删除训练任务。',
      'path' => '/api/v2/training/jobs/{Id}',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '129058',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '训练任务Id，可通过ListTrainingJobs查询账号下的训练任务列表，获取训练任务Id。',
            'description' => '训练任务ID，可通过ListTrainingJobs查询账号下的训练任务列表，获取训练任务ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'b8e300a1-ff80-4ae4-bdc5-0c33dbcd76db',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '成功删除训练任务。',
            'description' => '成功删除训练任务。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"OK\\",\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '删除训练任务',
    ),
    'ListTrainingJobs' => 
    array (
      'summary' => '获取训练任务列表。',
      'path' => '/api/v2/training/jobs',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '129068',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CampaignId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '归属运营活动过滤。',
            'description' => '归属运营活动过滤。',
            'type' => 'string',
            'required' => false,
            'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '训练任务名称过滤。',
            'description' => '训练任务名称过滤。',
            'type' => 'string',
            'required' => false,
            'example' => 'VIP客户',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页数，从1开始，默认为1。',
            'description' => '训练任务列表的页码。起始值为1，默认为1。',
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
            'title' => '分页大小，默认为10。',
            'description' => '分页查询时设置的每页显示的训练任务数量，默认为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '训练任务备注过滤。',
            'description' => '训练任务备注过滤。',
            'type' => 'string',
            'required' => false,
            'example' => '充值大于一万',
          ),
        ),
        5 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '训练任务状态过滤。
- 0: 队列中。
- 1: 已提交。
- 2: 运行中。
- 3: 成功。
- 4: 失败。',
            'description' => '训练任务状态过滤，取值如下：
- 0: 队列中。
- 1: 已提交。
- 2: 运行中。
- 3: 成功。
- 4: 失败。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        6 => 
        array (
          'name' => 'TrainingScheduleId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '归属训练计划过滤。',
            'description' => '归属训练计划过滤。',
            'type' => 'string',
            'required' => false,
            'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
          ),
        ),
        7 => 
        array (
          'name' => 'CampaignName',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '关联运营活动名称',
            'description' => '关联运营活动名称',
            'type' => 'string',
            'required' => false,
            'example' => '双11活动',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '成功获取训练任务列表。',
            'description' => '成功获取训练任务列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNumber' => 
                  array (
                    'title' => '分页数，从1开始，默认为1。',
                    'description' => '返回查询的训练任务列表的页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                    'default' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '分页大小，默认为10。',
                    'description' => '返回每页显示的训练任务数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                    'default' => '10',
                  ),
                  'TotalCount' => 
                  array (
                    'title' => '总训练任务数量。',
                    'description' => '总训练任务数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'TrainingJobs' => 
                  array (
                    'title' => '训练任务列表。',
                    'description' => '训练任务列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Algorithm' => 
                        array (
                          'title' => '关联算法ID。',
                          'description' => '关联算法ID。',
                          'type' => 'string',
                          'example' => 'user_recall',
                        ),
                        'CampaignId' => 
                        array (
                          'title' => '关联运营活动ID。',
                          'description' => '关联运营活动ID。',
                          'type' => 'string',
                          'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                        ),
                        'CreatedTime' => 
                        array (
                          'title' => '创建时间 (UTC+8)。',
                          'description' => '创建时间 (UTC+8)。',
                          'type' => 'string',
                          'example' => '2020-01-01 12:00:00',
                        ),
                        'DataPath' => 
                        array (
                          'title' => '训练数据路径，指定路径前需确保已在控制台完成一键授权。',
                          'description' => '训练数据路径。',
                          'type' => 'string',
                          'example' => 'https://bucket.region.aliyuncs.com/folder/',
                        ),
                        'History' => 
                        array (
                          'title' => '训练任务日志。',
                          'description' => '训练任务日志。',
                          'type' => 'string',
                          'example' => 'Error: Unknown parameter.',
                        ),
                        'Id' => 
                        array (
                          'title' => '训练任务ID。',
                          'description' => '训练任务Id。',
                          'type' => 'string',
                          'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                        ),
                        'Name' => 
                        array (
                          'title' => '训练任务名称。',
                          'description' => '训练任务名称。',
                          'type' => 'string',
                          'example' => 'VIP客户',
                        ),
                        'Remark' => 
                        array (
                          'title' => '备注。',
                          'description' => '备注。',
                          'type' => 'string',
                          'example' => '充值大于一万',
                        ),
                        'Status' => 
                        array (
                          'title' => '训练任务状态。
- 0: 队列中。
- 1: 已提交。
- 2: 运行中。
- 3: 成功。
- 4: 失败。',
                          'description' => '训练任务状态，可能值：
- 0: 队列中。
- 1: 已提交。
- 2: 运行中。
- 3: 成功。
- 4: 失败。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3',
                        ),
                        'TrainingScheduleId' => 
                        array (
                          'title' => '关联训练计划ID。',
                          'description' => '关联训练计划ID。',
                          'type' => 'string',
                          'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                        ),
                        'UpdatedTime' => 
                        array (
                          'title' => '更新时间 (UTC+8)。',
                          'description' => '更新时间 (UTC+8)。',
                          'type' => 'string',
                          'example' => '2020-01-01 12:00:00',
                        ),
                        'UserConfig' => 
                        array (
                          'title' => '用户配置。',
                          'description' => '用户配置。',
                          'type' => 'string',
                          'example' => '{\\"end_date\\":\\"20220408\\",\\"op_target\\":\\"sms\\",\\"start_date\\":\\"20220101\\"}',
                        ),
                        'HasModelInfo' => 
                        array (
                          'description' => '是否存有特征重要性、模式、决策树等特征信息。',
                          'type' => 'boolean',
                          'example' => 'true',
                          'default' => 'true',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => '""',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 10,\\n    \\"TrainingJobs\\": [\\n      {\\n        \\"Algorithm\\": \\"user_recall\\",\\n        \\"CampaignId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n        \\"DataPath\\": \\"https://bucket.region.aliyuncs.com/folder/\\",\\n        \\"History\\": \\"Error: Unknown parameter.\\",\\n        \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"Name\\": \\"VIP客户\\",\\n        \\"Remark\\": \\"充值大于一万\\",\\n        \\"Status\\": 3,\\n        \\"TrainingScheduleId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\",\\n        \\"UserConfig\\": \\"{\\\\\\\\\\\\\\"end_date\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"20220408\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"op_target\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"sms\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"start_date\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"20220101\\\\\\\\\\\\\\"}\\",\\n        \\"HasModelInfo\\": true\\n      }\\n    ]\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '获取训练任务列表',
    ),
    'GetTrainingJob' => 
    array (
      'summary' => '获取训练任务详情。',
      'path' => '/api/v2/training/jobs/{Id}',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '129063',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '训练任务ID，可通过ListTrainingJobs查询账号下的训练任务列表，获取训练任务ID。',
            'description' => '训练任务ID。如何获取训练任务ID，请参见[ListTrainingJobs](~~429059~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '0bddaf8f-5628-427a-8652-5e24f6b4c35d',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '成功获取训练任务详情。',
            'description' => '成功获取训练任务详情。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Algorithm' => 
                  array (
                    'title' => '关联算法ID。',
                    'description' => '关联算法ID。',
                    'type' => 'string',
                    'example' => 'user_recall',
                  ),
                  'CampaignId' => 
                  array (
                    'title' => '关联运营活动ID。',
                    'description' => '关联运营活动ID。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'CreatedTime' => 
                  array (
                    'title' => '创建时间 (UTC+8)。',
                    'description' => '创建时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                  'DataPath' => 
                  array (
                    'title' => '训练数据路径，指定路径前需确保已在控制台完成一键授权。',
                    'description' => '训练数据路径。',
                    'type' => 'string',
                    'example' => 'https://bucket.region.aliyuncs.com/folder/',
                  ),
                  'History' => 
                  array (
                    'title' => '训练任务日志。',
                    'description' => '训练任务日志。',
                    'type' => 'string',
                    'example' => 'Error: Missing column.',
                  ),
                  'Id' => 
                  array (
                    'title' => '训练任务ID。',
                    'description' => '训练任务ID。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'Name' => 
                  array (
                    'title' => '训练任务名称。',
                    'description' => '训练任务名称。',
                    'type' => 'string',
                    'example' => 'VIP客户',
                  ),
                  'Remark' => 
                  array (
                    'title' => '备注。',
                    'description' => '备注。',
                    'type' => 'string',
                    'example' => '充值大于一万',
                  ),
                  'Status' => 
                  array (
                    'title' => '训练任务状态。
- 0: 队列中。
- 1: 已提交。
- 2: 运行中。
- 3: 成功。
- 4: 失败。',
                    'description' => '训练任务状态，可能值：
- 0: 队列中。
- 1: 已提交。
- 2: 运行中。
- 3: 成功。
- 4: 失败。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'TrainingScheduleId' => 
                  array (
                    'title' => '关联训练计划ID。',
                    'description' => '关联训练计划ID。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'UpdatedTime' => 
                  array (
                    'title' => '更新时间 (UTC+8)。',
                    'description' => '更新时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                  'UserConfig' => 
                  array (
                    'title' => '用户配置。',
                    'description' => '用户配置。',
                    'type' => 'string',
                    'example' => '{}',
                  ),
                  'HasModelInfo' => 
                  array (
                    'description' => '是否存有特征重要性、模式、决策树等特征信息。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Algorithm\\": \\"user_recall\\",\\n    \\"CampaignId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"DataPath\\": \\"https://bucket.region.aliyuncs.com/folder/\\",\\n    \\"History\\": \\"Error: Missing column.\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"VIP客户\\",\\n    \\"Remark\\": \\"充值大于一万\\",\\n    \\"Status\\": 3,\\n    \\"TrainingScheduleId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"UserConfig\\": \\"{}\\",\\n    \\"HasModelInfo\\": false\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '获取训练任务详情',
    ),
    'CreateInferenceJob' => 
    array (
      'summary' => '创建预测任务。',
      'path' => '/api/v2/inference/jobs',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '129052',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求参数的主体信息。',
            'description' => '请求参数的主体信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Algorithm' => 
              array (
                'title' => '关联算法。',
                'description' => '关联算法ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'user_recall',
              ),
              'CampaignId' => 
              array (
                'title' => '关联运营活动Id。',
                'description' => '关联运营活动ID。',
                'type' => 'string',
                'required' => false,
                'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
              ),
              'DataPath' => 
              array (
                'title' => '预测数据路径。',
                'description' => '预测数据路径。',
                'type' => 'string',
                'required' => false,
                'example' => 'https://bucket.region.aliyuncs.com/folder/',
              ),
              'Name' => 
              array (
                'title' => '预测任务名称。',
                'description' => '预测任务名称。',
                'type' => 'string',
                'required' => false,
                'example' => 'VIP客户',
              ),
              'Remark' => 
              array (
                'title' => '备注。',
                'description' => '备注。',
                'type' => 'string',
                'required' => false,
                'example' => '充值大于一万',
              ),
              'TargetPath' => 
              array (
                'title' => '输出数据路径，需要为空目录。',
                'description' => '输出数据路径，需要为空目录。',
                'type' => 'string',
                'required' => false,
                'example' => 'https://bucket.region.aliyuncs.com/folder/',
              ),
              'TrainingJobId' => 
              array (
                'title' => '关联训练任务。',
                'description' => '关联训练任务。',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
              'UserConfig' => 
              array (
                'title' => '用户配置。',
                'description' => '用户配置。',
                'type' => 'string',
                'required' => false,
                'example' => '{}',
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
            'title' => '成功发起注册预测任务请求，可通过控制台或GetInferenceJob获取任务执行状态。',
            'description' => '成功发起注册预测任务请求，可通过控制台或GetInferenceJob获取任务执行状态。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Algorithm' => 
                  array (
                    'title' => '关联算法。',
                    'description' => '关联算法ID。',
                    'type' => 'string',
                    'example' => 'user_recall',
                  ),
                  'CampaignId' => 
                  array (
                    'title' => '关联运营活动Id。',
                    'description' => '关联运营活动ID。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'CreatedTime' => 
                  array (
                    'title' => '创建时间 (UTC+8)。',
                    'description' => '创建时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                  'DataPath' => 
                  array (
                    'title' => '预测数据路径。',
                    'description' => '预测数据路径。',
                    'type' => 'string',
                    'example' => 'https://bucket.region.aliyuncs.com/folder/',
                  ),
                  'GroupId' => 
                  array (
                    'title' => '关联人群Id，如果任务失败则人群无效。',
                    'description' => '关联人群ID，如果任务失败则人群无效。',
                    'type' => 'string',
                    'example' => 'bdb0b117-3354-4ceb-ba75-e022dd9370d8',
                  ),
                  'History' => 
                  array (
                    'title' => '预测任务日志。',
                    'description' => '预测任务日志。',
                    'type' => 'string',
                    'example' => 'Error: Missing Column.',
                  ),
                  'Id' => 
                  array (
                    'title' => '预测任务Id。',
                    'description' => '预测任务ID。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'Name' => 
                  array (
                    'title' => '预测任务名称。',
                    'description' => '预测任务名称。',
                    'type' => 'string',
                    'example' => 'VIP客户',
                  ),
                  'Remark' => 
                  array (
                    'title' => '备注。',
                    'description' => '备注。',
                    'type' => 'string',
                    'example' => '充值大于一万',
                  ),
                  'Status' => 
                  array (
                    'title' => '预测任务状态。',
                    'description' => '预测任务状态。
- 0: 队列中。
- 1: 已提交。
- 2: 运行中。
- 3: 成功。
- 4: 失败。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'TargetPath' => 
                  array (
                    'title' => '输出数据路径，需要为空目录。',
                    'description' => '输出数据路径，需要为空目录。',
                    'type' => 'string',
                    'example' => 'https://bucket.region.aliyuncs.com/folder/',
                  ),
                  'TrainingJobId' => 
                  array (
                    'title' => '关联训练任务。',
                    'description' => '关联训练任务。',
                    'type' => 'string',
                    'example' => '123',
                  ),
                  'UpdatedTime' => 
                  array (
                    'title' => '更新时间 (UTC+8)。',
                    'description' => '更新时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                  'UserConfig' => 
                  array (
                    'title' => '用户配置。',
                    'description' => '用户配置。',
                    'type' => 'string',
                    'example' => '{}',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Algorithm\\": \\"user_recall\\",\\n    \\"CampaignId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"DataPath\\": \\"https://bucket.region.aliyuncs.com/folder/\\",\\n    \\"GroupId\\": \\"bdb0b117-3354-4ceb-ba75-e022dd9370d8\\",\\n    \\"History\\": \\"Error: Missing Column.\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"VIP客户\\",\\n    \\"Remark\\": \\"充值大于一万\\",\\n    \\"Status\\": 3,\\n    \\"TargetPath\\": \\"https://bucket.region.aliyuncs.com/folder/\\",\\n    \\"TrainingJobId\\": \\"123\\",\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"UserConfig\\": \\"{}\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '创建预测任务',
      'description' => '在使用前需要在网页端一键授权OSS访问权限，并将需要访问的OSS Bucket添加pai=plugin的标签，请参考[OSS添加标签](https://help.aliyun.com/document_detail/133826.html)。  
预测任务输出的csv文件不包含header，每列分别表示：user\\_id，item\\_id，phone，score。',
    ),
    'DeleteInferenceJob' => 
    array (
      'summary' => '删除预测任务。',
      'path' => '/api/v2/inference/jobs/{Id}',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '129056',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '预测任务Id，可通过ListInferenceJobs查询账号下的预测任务列表，获取预测任务Id。',
            'description' => '预测任务ID，可通过ListInferenceJobs查询账号下的预测任务列表，获取预测任务ID。',
            'type' => 'string',
            'required' => false,
            'example' => '0bddaf8f-5628-427a-8652-5e24f6b4c35d',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '成功删除预测任务Id。',
            'description' => '成功删除预测任务。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"OK\\",\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '删除预测任务',
    ),
    'ListInferenceJobs' => 
    array (
      'summary' => '获取预测任务列表。',
      'path' => '/api/v2/inference/jobs',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '129066',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CampaignId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '归属运营活动过滤。',
            'description' => '归属运营活动过滤。',
            'type' => 'string',
            'required' => false,
            'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '预测任务名称过滤。',
            'description' => '预测任务名称过滤。',
            'type' => 'string',
            'required' => false,
            'example' => 'VIP客户',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页数，从1开始，默认为1。',
            'description' => '分页数，从1开始，默认为1。',
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
            'title' => '分页大小，默认为10。',
            'description' => '分页大小，默认为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '预测任务备注过滤。',
            'description' => '预测任务备注过滤。',
            'type' => 'string',
            'required' => false,
            'example' => '充值大于一万',
          ),
        ),
        5 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '预测任务状态过滤。
- 0: 队列中。
- 1: 已提交。
- 2: 运行中。
- 3: 成功。
- 4: 失败。',
            'description' => '预测任务状态过滤。
- 0: 队列中。
- 1: 已提交。
- 2: 运行中。
- 3: 成功。
- 4: 失败。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        6 => 
        array (
          'name' => 'CampaignName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'example' => '双11活动',
          ),
        ),
        7 => 
        array (
          'name' => 'TrainingJobName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'example' => 'test_job',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '成功获取预测任务列表。',
            'description' => '成功获取预测任务列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'InferenceJobs' => 
                  array (
                    'title' => '预测任务列表。',
                    'description' => '预测任务列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Algorithm' => 
                        array (
                          'title' => '关联算法。',
                          'description' => '关联算法。',
                          'type' => 'string',
                          'example' => 'user_recall',
                        ),
                        'CampaignId' => 
                        array (
                          'title' => '关联运营活动ID。',
                          'description' => '关联运营活动ID。',
                          'type' => 'string',
                          'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                        ),
                        'CreatedTime' => 
                        array (
                          'title' => '创建时间 (UTC+8)。',
                          'description' => '创建时间 (UTC+8)。',
                          'type' => 'string',
                          'example' => '2020-01-01 12:00:00',
                        ),
                        'DataPath' => 
                        array (
                          'title' => '预测数据路径，当预测人群数据分布在多个csv文件时可指定目录，指定路径前需确保已在控制台完成一键授权。',
                          'description' => '预测数据路径。',
                          'type' => 'string',
                          'example' => 'https://bucket.region.aliyuncs.com/folder/',
                        ),
                        'GroupId' => 
                        array (
                          'title' => '预测人群，人群来源必须为多列csv，当同时指定DataPath与GroupId时，以GroupId为准。',
                          'description' => '关联人群ID，如果任务失败则人群无效。',
                          'type' => 'string',
                          'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                        ),
                        'History' => 
                        array (
                          'title' => '预测任务日志。',
                          'description' => '预测任务日志。',
                          'type' => 'string',
                          'example' => 'Error: Missing Column.',
                        ),
                        'Id' => 
                        array (
                          'title' => '预测任务ID。',
                          'description' => '预测任务ID。',
                          'type' => 'string',
                          'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                        ),
                        'Name' => 
                        array (
                          'title' => '预测任务名称。',
                          'description' => '预测任务名称。',
                          'type' => 'string',
                          'example' => 'VIP客户',
                        ),
                        'Remark' => 
                        array (
                          'title' => '备注。',
                          'description' => '备注。',
                          'type' => 'string',
                          'example' => '充值大于一万',
                        ),
                        'Status' => 
                        array (
                          'title' => '预测任务状态。
- 0: 队列中。
- 1: 已提交。
- 2: 运行中。
- 3: 成功。
- 4: 失败。',
                          'description' => '预测任务状态。
- 0: 队列中。
- 1: 已提交。
- 2: 运行中。
- 3: 成功。
- 4: 失败。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3',
                        ),
                        'TargetGroupId' => 
                        array (
                          'title' => '关联目标人群ID，如果任务失败则人群无效。',
                          'description' => '关联目标人群ID，如果任务失败则人群无效。',
                          'type' => 'string',
                          'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                        ),
                        'TargetPath' => 
                        array (
                          'title' => '输出数据路径，需要为空目录，指定路径前需确保已在控制台完成一键授权。',
                          'description' => '输出数据路径，需要为空目录。',
                          'type' => 'string',
                          'example' => 'https://bucket.region.aliyuncs.com/folder/',
                        ),
                        'TrainingJobId' => 
                        array (
                          'title' => '关联训练任务。',
                          'description' => '关联训练任务。',
                          'type' => 'string',
                          'example' => '123',
                        ),
                        'UpdatedTime' => 
                        array (
                          'title' => '更新时间 (UTC+8)。',
                          'description' => '更新时间 (UTC+8)。',
                          'type' => 'string',
                          'example' => '2020-01-01 12:00:00',
                        ),
                        'UserConfig' => 
                        array (
                          'title' => '用户配置。',
                          'description' => '用户配置。',
                          'type' => 'string',
                          'example' => '{}',
                        ),
                      ),
                    ),
                  ),
                  'PageNumber' => 
                  array (
                    'title' => '分页数，从1开始，默认为1。',
                    'description' => '分页数，从1开始，默认为1。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                    'default' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '分页大小，默认为10。',
                    'description' => '分页大小，默认为10。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                    'default' => '10',
                  ),
                  'TotalCount' => 
                  array (
                    'title' => '总预测任务数量。',
                    'description' => '总预测任务数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"InferenceJobs\\": [\\n      {\\n        \\"Algorithm\\": \\"user_recall\\",\\n        \\"CampaignId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n        \\"DataPath\\": \\"https://bucket.region.aliyuncs.com/folder/\\",\\n        \\"GroupId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"History\\": \\"Error: Missing Column.\\",\\n        \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"Name\\": \\"VIP客户\\",\\n        \\"Remark\\": \\"充值大于一万\\",\\n        \\"Status\\": 3,\\n        \\"TargetGroupId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"TargetPath\\": \\"https://bucket.region.aliyuncs.com/folder/\\",\\n        \\"TrainingJobId\\": \\"123\\",\\n        \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\",\\n        \\"UserConfig\\": \\"{}\\"\\n      }\\n    ],\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 10\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '获取预测任务列表',
    ),
    'GetInferenceJob' => 
    array (
      'summary' => '获取预测任务详情。',
      'path' => '/api/v2/inference/jobs/{Id}',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '129061',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '预测任务Id，可通过ListInferenceJobs查询账号下的预测任务列表，获取预测任务Id。',
            'description' => '预测任务Id，可通过ListInferenceJobs查询账号下的预测任务列表，获取预测任务Id。',
            'type' => 'string',
            'required' => false,
            'example' => '0bddaf8f-5628-427a-8652-5e24f6b4c35d',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '成功获取预测任务详情。',
            'description' => '成功获取预测任务详情。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Algorithm' => 
                  array (
                    'title' => '关联算法。',
                    'description' => '关联算法。',
                    'type' => 'string',
                    'example' => 'user_recall',
                  ),
                  'CampaignId' => 
                  array (
                    'title' => '关联运营活动Id。',
                    'description' => '关联运营活动Id。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'CreatedTime' => 
                  array (
                    'title' => '创建时间 (UTC+8)。',
                    'description' => '创建时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                  'DataPath' => 
                  array (
                    'title' => '预测数据路径。',
                    'description' => '预测数据路径。',
                    'type' => 'string',
                    'example' => 'https://bucket.region.aliyuncs.com/folder/',
                  ),
                  'GroupId' => 
                  array (
                    'title' => '关联人群Id，如果任务失败则人群无效。',
                    'description' => '关联人群Id，如果任务失败则人群无效。',
                    'type' => 'string',
                    'example' => '0197261b-30e6-467b-83d6-7f72af868b03',
                  ),
                  'History' => 
                  array (
                    'title' => '预测任务日志。',
                    'description' => '预测任务日志。',
                    'type' => 'string',
                    'example' => 'Error: Missing Column.',
                  ),
                  'Id' => 
                  array (
                    'title' => '预测任务Id。',
                    'description' => '预测任务Id。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'Name' => 
                  array (
                    'title' => '预测任务名称。',
                    'description' => '预测任务名称。',
                    'type' => 'string',
                    'example' => 'VIP客户',
                  ),
                  'Remark' => 
                  array (
                    'title' => '备注。',
                    'description' => '备注。',
                    'type' => 'string',
                    'example' => '充值大于一万',
                  ),
                  'Status' => 
                  array (
                    'title' => '预测任务状态。',
                    'description' => '预测任务状态。
- 0: 队列中。
- 1: 已提交。
- 2: 运行中。
- 3: 成功。
- 4: 失败。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'TargetPath' => 
                  array (
                    'title' => '输出数据路径，需要为空目录。',
                    'description' => '输出数据路径，需要为空目录。',
                    'type' => 'string',
                    'example' => 'https://bucket.region.aliyuncs.com/folder/',
                  ),
                  'TrainingJobId' => 
                  array (
                    'title' => '关联训练任务。',
                    'description' => '关联训练任务。',
                    'type' => 'string',
                    'example' => '123',
                  ),
                  'UpdatedTime' => 
                  array (
                    'title' => '更新时间 (UTC+8)。',
                    'description' => '更新时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                  'UserConfig' => 
                  array (
                    'title' => '用户配置。',
                    'description' => '用户配置。',
                    'type' => 'string',
                    'example' => '{}',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Algorithm\\": \\"user_recall\\",\\n    \\"CampaignId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"DataPath\\": \\"https://bucket.region.aliyuncs.com/folder/\\",\\n    \\"GroupId\\": \\"0197261b-30e6-467b-83d6-7f72af868b03\\",\\n    \\"History\\": \\"Error: Missing Column.\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"VIP客户\\",\\n    \\"Remark\\": \\"充值大于一万\\",\\n    \\"Status\\": 3,\\n    \\"TargetPath\\": \\"https://bucket.region.aliyuncs.com/folder/\\",\\n    \\"TrainingJobId\\": \\"123\\",\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"UserConfig\\": \\"{}\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '获取预测任务详情',
    ),
    'CreateGroup' => 
    array (
      'summary' => '创建人群。',
      'path' => '/api/v2/groups',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '129051',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求参数的主体信息。',
            'description' => '请求参数的主体信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Algorithm' => 
              array (
                'title' => '关联算法，人群来源为算法。',
                'description' => '关联算法，人群来源为算法时需指定。',
                'type' => 'string',
                'required' => false,
                'example' => 'user_recall',
              ),
              'Column' => 
              array (
                'title' => '手机号列名，人群来源为CSV文件，MaxCompute，并且包含手机号时需指定。',
                'description' => '手机号列名，人群来源为CSV文件，MaxCompute，并且包含手机号时需指定。',
                'type' => 'string',
                'required' => false,
                'example' => 'phone',
              ),
              'Filter' => 
              array (
                'title' => '过滤条件，人群来源为MaxCompute时可指定。',
                'description' => '过滤条件，人群来源为MaxCompute时可指定。',
                'type' => 'string',
                'required' => false,
                'example' => 'ds=20220101',
              ),
              'InferenceJobId' => 
              array (
                'title' => '预测任务Id，人群来源为算法。',
                'description' => '预测任务ID，人群来源为算法。',
                'type' => 'string',
                'required' => false,
                'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
              ),
              'Name' => 
              array (
                'title' => '人群名称。',
                'description' => '人群名称。',
                'type' => 'string',
                'required' => false,
                'example' => 'VIP客户',
              ),
              'PhoneNumber' => 
              array (
                'title' => '是否包含手机号，包含手机号的人群可用于触达计划。',
                'description' => '是否包含手机号，包含手机号的人群可用于触达计划。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'Project' => 
              array (
                'title' => 'MaxCompute(ODPS)项目名，人群来源为MaxCompute时需指定。',
                'description' => 'MaxCompute(ODPS)项目名，人群来源为MaxCompute时需指定。',
                'type' => 'string',
                'required' => false,
                'example' => 'project',
              ),
              'Remark' => 
              array (
                'title' => '人群备注。',
                'description' => '人群备注。',
                'type' => 'string',
                'required' => false,
                'example' => '充值大于10万',
              ),
              'Source' => 
              array (
                'title' => '人群来源。
- 0: 文本，每行一个手机号，最多100个。
- 1: 文本文件，每行一个手机号，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。
- 2: CSV文件，需指定手机号列名，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。
- 3: MaxCompute(ODPS)表，需指定手机号列名。
- 4: 算法。',
                'description' => '人群来源。
- 0: 文本，每行一个手机号，最多100个。
- 1: 文本文件，每行一个手机号，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。
- 2: CSV文件，需指定手机号列名，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。
- 3: MaxCompute(ODPS)表，需指定手机号列名。
- 4: 算法。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '0',
              ),
              'Table' => 
              array (
                'title' => 'MaxCompute(ODPS)表名，人群来源为MaxCompute时需指定。',
                'description' => 'MaxCompute(ODPS)表名，人群来源为MaxCompute时需指定。',
                'type' => 'string',
                'required' => false,
                'example' => 'vip_recall',
              ),
              'Text' => 
              array (
                'title' => '文本，人群来源为文本时需指定。',
                'description' => '文本，人群来源为文本时需指定。',
                'type' => 'string',
                'required' => false,
                'example' => '1390000****',
              ),
              'Uri' => 
              array (
                'title' => '文件地址，人群来源为文本文件，CSV文件，MaxCompute时需指定。',
                'description' => '文件地址，人群来源为文本文件，CSV文件时需指定。',
                'type' => 'string',
                'required' => false,
                'example' => 'https://bucket.region.aliyuncs.com/folder/file',
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
            'title' => '成功发起注册人群请求，可通过控制台或GetGroup获取人群检查状态。',
            'description' => '成功发起注册人群请求，可通过控制台或GetGroup获取人群检查状态。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Algorithm' => 
                  array (
                    'title' => '关联算法，人群来源为算法。',
                    'description' => '关联算法，人群来源为算法。',
                    'type' => 'string',
                    'example' => 'user_recall',
                  ),
                  'Amount' => 
                  array (
                    'title' => '人群数量。',
                    'description' => '人群数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Column' => 
                  array (
                    'title' => '手机号列名，人群来源为CSV文件，MaxCompute，并且包含手机号时需指定。',
                    'description' => '手机号列名，人群来源为CSV文件，MaxCompute，并且包含手机号时需指定。',
                    'type' => 'string',
                    'example' => 'phone',
                  ),
                  'CreatedTime' => 
                  array (
                    'title' => '创建时间 (UTC+8)。',
                    'description' => '创建时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                  'Filter' => 
                  array (
                    'title' => '过滤条件，人群来源为MaxCompute时可指定。',
                    'description' => '过滤条件，人群来源为MaxCompute时可指定。',
                    'type' => 'string',
                    'example' => 'ds=20220101',
                  ),
                  'Id' => 
                  array (
                    'title' => '人群Id。',
                    'description' => '人群Id。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'InferenceJobId' => 
                  array (
                    'title' => '预测任务Id，人群来源为算法。',
                    'description' => '预测任务Id，人群来源为算法。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'Name' => 
                  array (
                    'title' => '人群名称。',
                    'description' => '人群名称。',
                    'type' => 'string',
                    'example' => 'VIP客户',
                  ),
                  'PhoneNumber' => 
                  array (
                    'title' => '是否包含手机号，包含手机号的人群可用于触达计划。',
                    'description' => '是否包含手机号，包含手机号的人群可用于触达计划。',
                    'type' => 'boolean',
                    'example' => '1390000****',
                  ),
                  'Project' => 
                  array (
                    'title' => 'MaxCompute(ODPS)项目名，人群来源为MaxCompute时需指定。',
                    'description' => 'MaxCompute(ODPS)项目名，人群来源为MaxCompute时需指定。',
                    'type' => 'string',
                    'example' => 'project',
                  ),
                  'Remark' => 
                  array (
                    'title' => '人群备注。',
                    'description' => '人群备注。',
                    'type' => 'string',
                    'example' => '充值大于10万',
                  ),
                  'Source' => 
                  array (
                    'title' => '人群来源。
- 0: 文本，每行一个手机号，最多100个。
- 1: 文本文件，每行一个手机号，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。
- 2: CSV文件，需指定手机号列名，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。
- 3: MaxCompute(ODPS)表，需指定手机号列名。
- 4: 算法。',
                    'description' => '人群来源。
- 0: 文本，每行一个手机号，最多100个。
- 1: 文本文件，每行一个手机号，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。
- 2: CSV文件，需指定手机号列名，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。
- 3: MaxCompute(ODPS)表，需指定手机号列名。
- 4: 算法。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Status' => 
                  array (
                    'title' => '人群状态。
- 0: 检查中。
- 1: 已通过。
- 2: 未通过。',
                    'description' => '人群状态。
- 0: 检查中。
- 1: 已通过。
- 2: 未通过。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Table' => 
                  array (
                    'title' => 'MaxCompute(ODPS)表名，人群来源为MaxCompute时需指定。',
                    'description' => 'MaxCompute(ODPS)表名，人群来源为MaxCompute时需指定。',
                    'type' => 'string',
                    'example' => 'recall',
                  ),
                  'Text' => 
                  array (
                    'title' => '文本，人群来源为文本时需指定。',
                    'description' => '文本，人群来源为文本时需指定。',
                    'type' => 'string',
                    'example' => '1390000****',
                  ),
                  'UpdatedTime' => 
                  array (
                    'title' => '更新时间 (UTC+8)。',
                    'description' => '更新时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                  'Uri' => 
                  array (
                    'title' => '文件地址，人群来源为文本文件，CSV文件，MaxCompute时需指定。',
                    'description' => '文件地址，人群来源为文本文件，CSV文件时需指定。',
                    'type' => 'string',
                    'example' => 'https://bucket.region.aliyuncs.com/folder/file',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Algorithm\\": \\"user_recall\\",\\n    \\"Amount\\": 0,\\n    \\"Column\\": \\"phone\\",\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"Filter\\": \\"ds=20220101\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"InferenceJobId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"VIP客户\\",\\n    \\"PhoneNumber\\": true,\\n    \\"Project\\": \\"project\\",\\n    \\"Remark\\": \\"充值大于10万\\",\\n    \\"Source\\": 0,\\n    \\"Status\\": 0,\\n    \\"Table\\": \\"recall\\",\\n    \\"Text\\": \\"1390000****\\",\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"Uri\\": \\"https://bucket.region.aliyuncs.com/folder/file\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '创建人群',
      'description' => '在使用前需要在网页端一键授权OSS访问权限，并将需要访问的OSS Bucket添加pai=plugin的标签，请参考[OSS添加标签](https://help.aliyun.com/document_detail/133826.html)。',
    ),
    'DeleteGroup' => 
    array (
      'summary' => '删除人群。',
      'path' => '/api/v2/groups/{Id}',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '129055',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'path',
            'description' => '人群ID，可通过ListGroups获取人群列表，获取相应ID。',
            'type' => 'string',
            'required' => false,
            'example' => '0bddaf8f-5628-427a-8652-5e24f6b4c35d',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '成功。',
            'description' => '成功。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"OK\\",\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '删除人群',
    ),
    'ListGroups' => 
    array (
      'summary' => '获取人群列表。',
      'path' => '/api/v2/groups',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '129065',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
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
            'title' => '人群名称过滤。',
            'description' => '人群名称过滤。',
            'type' => 'string',
            'required' => false,
            'example' => 'VIP客户',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页数，从1开始，默认为1。',
            'description' => '分页数，从1开始，默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页大小，默认为10。',
            'description' => '分页大小，默认为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'PhoneNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否包含手机号过滤。',
            'description' => '是否包含手机号过滤。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '人群备注过滤。',
            'description' => '人群备注过滤。',
            'type' => 'string',
            'required' => false,
            'example' => '充值大于一万',
          ),
        ),
        5 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '来源过滤。',
            'description' => '来源过滤。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        6 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '审核状态过滤。',
            'description' => '审核状态过滤。',
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
            'title' => '成功获取人群列表。',
            'description' => '成功获取人群列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Groups' => 
                  array (
                    'title' => '人群列表。',
                    'description' => '人群列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Algorithm' => 
                        array (
                          'title' => '关联算法，人群来源为算法。',
                          'description' => '关联算法，人群来源为算法。',
                          'type' => 'string',
                          'example' => 'user_recall',
                        ),
                        'Amount' => 
                        array (
                          'title' => '人群数量。',
                          'description' => '人群数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Column' => 
                        array (
                          'title' => '手机号列名，人群来源为CSV文件，MaxCompute，并且包含手机号时需指定。',
                          'description' => '手机号列名，人群来源为CSV文件，MaxCompute，并且包含手机号时需指定。',
                          'type' => 'string',
                          'example' => 'phone',
                        ),
                        'CreatedTime' => 
                        array (
                          'title' => '创建时间 (UTC+8)。',
                          'description' => '创建时间 (UTC+8)。',
                          'type' => 'string',
                          'example' => '2020-01-01 12:00:00',
                        ),
                        'Filter' => 
                        array (
                          'title' => '过滤条件，人群来源为MaxCompute时可指定。',
                          'description' => '过滤条件，人群来源为MaxCompute时可指定。',
                          'type' => 'string',
                          'example' => 'ds=2022',
                        ),
                        'Id' => 
                        array (
                          'title' => '人群Id。',
                          'description' => '人群ID。',
                          'type' => 'string',
                          'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                        ),
                        'InferenceJobId' => 
                        array (
                          'title' => '预测任务Id，人群来源为算法。',
                          'description' => '预测任务ID，人群来源为算法。',
                          'type' => 'string',
                          'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                        ),
                        'Name' => 
                        array (
                          'title' => '人群名称。',
                          'description' => '人群名称。',
                          'type' => 'string',
                          'example' => 'VIP客户',
                        ),
                        'PhoneNumber' => 
                        array (
                          'title' => '是否包含手机号，包含手机号的人群可用于触达计划。',
                          'description' => '是否包含手机号，包含手机号的人群可用于触达计划。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'Project' => 
                        array (
                          'title' => 'MaxCompute(ODPS)项目名，人群来源为MaxCompute时需指定。',
                          'description' => 'MaxCompute(ODPS)项目名，人群来源为MaxCompute时需指定。',
                          'type' => 'string',
                          'example' => 'project',
                        ),
                        'Remark' => 
                        array (
                          'title' => '人群备注。',
                          'description' => '人群备注。',
                          'type' => 'string',
                          'example' => '充值大于10万',
                        ),
                        'Source' => 
                        array (
                          'title' => '人群来源。
- 0: 文本，每行一个手机号，最多100个。
- 1: 文本文件，每行一个手机号，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。
- 2: CSV文件，需指定手机号列名，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。
- 3: MaxCompute(ODPS)表，需指定手机号列名。
- 4: 算法。',
                          'description' => '人群来源。
- 0: 文本，每行一个手机号，最多100个。
- 1: 文本文件，每行一个手机号，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。
- 2: CSV文件，需指定手机号列名，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。
- 3: MaxCompute(ODPS)表，需指定手机号列名。
- 4: 算法。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Status' => 
                        array (
                          'title' => '人群状态。
- 0: 检查中。
- 1: 已通过。
- 2: 未通过。',
                          'description' => '人群状态。
- 0: 检查中。
- 1: 已通过。
- 2: 未通过。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Table' => 
                        array (
                          'title' => 'MaxCompute(ODPS)表名，人群来源为MaxCompute时需指定。',
                          'description' => 'MaxCompute(ODPS)表名，人群来源为MaxCompute时需指定。',
                          'type' => 'string',
                          'example' => 'recall',
                        ),
                        'Text' => 
                        array (
                          'title' => '文本，人群来源为文本时需指定。',
                          'description' => '文本，人群来源为文本时需指定。',
                          'type' => 'string',
                          'example' => '1390000****',
                        ),
                        'UpdatedTime' => 
                        array (
                          'title' => '更新时间 (UTC+8)。',
                          'description' => '更新时间 (UTC+8)。',
                          'type' => 'string',
                          'example' => '2020-01-01 12:00:00',
                        ),
                        'Uri' => 
                        array (
                          'title' => '文件地址，人群来源为文本文件，CSV文件，MaxCompute时需指定。',
                          'description' => '文件地址，人群来源为文本文件，CSV文件，MaxCompute时需指定。',
                          'type' => 'string',
                          'example' => 'https://bucket.region.aliyuncs.com/folder/file',
                        ),
                      ),
                    ),
                  ),
                  'PageNumber' => 
                  array (
                    'title' => '分页数，从1开始，默认为1。',
                    'description' => '分页数，从1开始，默认为1。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                    'default' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '分页大小，默认为10。',
                    'description' => '分页大小，默认为10。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                    'default' => '10',
                  ),
                  'TotalCount' => 
                  array (
                    'title' => '总人群数量。',
                    'description' => '总人群数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Groups\\": [\\n      {\\n        \\"Algorithm\\": \\"user_recall\\",\\n        \\"Amount\\": 0,\\n        \\"Column\\": \\"phone\\",\\n        \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n        \\"Filter\\": \\"ds=2022\\",\\n        \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"InferenceJobId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"Name\\": \\"VIP客户\\",\\n        \\"PhoneNumber\\": true,\\n        \\"Project\\": \\"project\\",\\n        \\"Remark\\": \\"充值大于10万\\",\\n        \\"Source\\": 0,\\n        \\"Status\\": 0,\\n        \\"Table\\": \\"recall\\",\\n        \\"Text\\": \\"1390000****\\",\\n        \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\",\\n        \\"Uri\\": \\"https://bucket.region.aliyuncs.com/folder/file\\"\\n      }\\n    ],\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 10\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '获取人群列表',
    ),
    'GetGroup' => 
    array (
      'summary' => '获取人群详情。',
      'path' => '/api/v2/groups/{Id}',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '129060',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '人群Id，可通过ListGroups查询账号下的人群列表，获取人群Id。',
            'description' => '人群ID，可通过ListGroups查询账号下的人群列表，获取人群ID。',
            'type' => 'string',
            'required' => false,
            'example' => '0bddaf8f-5628-427a-8652-5e24f6b4c35d',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '成功获取人群详情。',
            'description' => '成功获取人群详情。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Algorithm' => 
                  array (
                    'title' => '关联算法，人群来源为算法。',
                    'description' => '关联算法，人群来源为算法。',
                    'type' => 'string',
                    'example' => 'user_recall',
                  ),
                  'Amount' => 
                  array (
                    'title' => '人群数量。',
                    'description' => '人群数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'CampaignId' => 
                  array (
                    'title' => '关联运营活动Id。',
                    'description' => '关联运营活动ID。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'Column' => 
                  array (
                    'title' => '手机号列名，人群来源为CSV文件，MaxCompute，并且包含手机号时需指定。',
                    'description' => '手机号列名，人群来源为CSV文件，MaxCompute，并且包含手机号时需指定。',
                    'type' => 'string',
                    'example' => 'education',
                  ),
                  'CreatedTime' => 
                  array (
                    'title' => '创建时间 (UTC+8)。',
                    'description' => '创建时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                  'Filter' => 
                  array (
                    'title' => '过滤条件，人群来源为MaxCompute时可指定。',
                    'description' => '过滤条件，人群来源为MaxCompute时可指定。',
                    'type' => 'string',
                    'example' => 'ds=2022',
                  ),
                  'History' => 
                  array (
                    'title' => '历史记录。',
                    'description' => '历史记录。',
                    'type' => 'string',
                    'example' => 'Project not found - \'sms_test\'',
                  ),
                  'Id' => 
                  array (
                    'title' => '人群Id。',
                    'description' => '人群ID。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'InferenceJobId' => 
                  array (
                    'title' => '预测任务Id，人群来源为算法。',
                    'description' => '预测任务ID，人群来源为算法。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'Name' => 
                  array (
                    'title' => '人群名称。',
                    'description' => '人群名称。',
                    'type' => 'string',
                    'example' => 'VIP客户',
                  ),
                  'PhoneNumber' => 
                  array (
                    'title' => '是否包含手机号，包含手机号的人群可用于触达计划。',
                    'description' => '是否包含手机号，包含手机号的人群可用于触达计划。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'Project' => 
                  array (
                    'title' => 'MaxCompute(ODPS)项目名，人群来源为MaxCompute时需指定。',
                    'description' => 'MaxCompute(ODPS)项目名，人群来源为MaxCompute时需指定。',
                    'type' => 'string',
                    'example' => 'project',
                  ),
                  'Remark' => 
                  array (
                    'title' => '人群备注。',
                    'description' => '人群备注。',
                    'type' => 'string',
                    'example' => '充值大于10万',
                  ),
                  'Source' => 
                  array (
                    'title' => '人群来源。
- 0: 文本，每行一个手机号，最多100个。
- 1: 文本文件，每行一个手机号，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。
- 2: 多列CSV文件，需指定手机号列名，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。
- 3: MaxCompute表，需指定手机号列名。
- 4: 算法。',
                    'description' => '人群来源。
- 0: 文本，每行一个手机号，最多100个。
- 1: 文本文件，每行一个手机号，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。
- 2: CSV文件，需指定手机号列名，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。
- 3: MaxCompute(ODPS)表，需指定手机号列名。
- 4: 算法。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Status' => 
                  array (
                    'title' => '人群状态。
- 0: 检查中。
- 1: 已通过。
- 2: 未通过。',
                    'description' => '人群状态。
- 0: 检查中。
- 1: 已通过。
- 2: 未通过。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Table' => 
                  array (
                    'title' => 'MaxCompute(ODPS)表名，人群来源为MaxCompute时需指定。',
                    'description' => 'MaxCompute(ODPS)表名，人群来源为MaxCompute时需指定。',
                    'type' => 'string',
                    'example' => 'recall',
                  ),
                  'Text' => 
                  array (
                    'title' => '文本，人群来源为文本时需指定。',
                    'description' => '文本，人群来源为文本时需指定。',
                    'type' => 'string',
                    'example' => '1390000****',
                  ),
                  'UpdatedTime' => 
                  array (
                    'title' => '更新时间 (UTC+8)。',
                    'description' => '更新时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                  'Uri' => 
                  array (
                    'title' => '文件地址，人群来源为文本文件，CSV文件时需指定。',
                    'description' => '文件地址，人群来源为文本文件，CSV文件，MaxCompute时需指定。',
                    'type' => 'string',
                    'example' => 'https://bucket.region.aliyuncs.com/folder/file',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Algorithm\\": \\"user_recall\\",\\n    \\"Amount\\": 0,\\n    \\"CampaignId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Column\\": \\"education\\",\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"Filter\\": \\"ds=2022\\",\\n    \\"History\\": \\"Project not found - \'sms_test\'\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"InferenceJobId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"VIP客户\\",\\n    \\"PhoneNumber\\": true,\\n    \\"Project\\": \\"project\\",\\n    \\"Remark\\": \\"充值大于10万\\",\\n    \\"Source\\": 0,\\n    \\"Status\\": 0,\\n    \\"Table\\": \\"recall\\",\\n    \\"Text\\": \\"1390000****\\",\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"Uri\\": \\"https://bucket.region.aliyuncs.com/folder/file\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '获取人群详情',
    ),
    'CreateSchedule' => 
    array (
      'summary' => '创建触达计划。',
      'path' => '/api/v2/schedules',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '129053',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '请求参数的主体信息。',
            'description' => '请求参数的主体信息。',
            'type' => 'object',
            'properties' => 
            array (
              'EndTime' => 
              array (
                'title' => '终止时间（UTC+8）。',
                'description' => '终止时间（UTC+8）。',
                'type' => 'string',
                'format' => 'int32',
                'required' => false,
                'example' => '2020-01-01',
              ),
              'ExecuteTime' => 
              array (
                'title' => '执行时间 (UTC+8)，为空立即执行。',
                'description' => '执行时间 (UTC+8)，为空立即执行。',
                'type' => 'string',
                'required' => false,
                'example' => '2020-01-01 12:00:00',
              ),
              'GroupId' => 
              array (
                'title' => '人群ID。',
                'description' => '人群ID。',
                'type' => 'string',
                'required' => true,
                'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
              ),
              'Name' => 
              array (
                'title' => '触达计划名称。',
                'description' => '触达计划名称。',
                'type' => 'string',
                'required' => true,
                'example' => '增长-2021-0101',
              ),
              'RepeatCycle' => 
              array (
                'title' => '重复周期，按重复周期与重复周期单位执行。',
                'description' => '重复周期，按重复周期与重复周期单位执行。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '0',
              ),
              'RepeatCycleUnit' => 
              array (
                'title' => '重复周期单位，若指定执行时间，则重复周期生效。
- 0: 从不（默认）。
- 1: 小时。
- 2: 天。
- 3: 周。
- 4: 月。',
                'description' => '重复周期单位，若指定执行时间，则重复周期生效。
- 0: 从不（默认）。
- 1: 小时。
- 2: 天。
- 3: 周。
- 4: 月。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '0',
              ),
              'RepeatTimes' => 
              array (
                'title' => '重复次数。
- 0: 不设终止时间（默认）。
- N: 重复N次后终止。',
                'description' => '重复次数。
- -1: 不设终止时间（默认）。
- 0: 不重复。
- N: 重复N次后终止。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1',
              ),
              'SignName' => 
              array (
                'title' => '签名。',
                'description' => '签名。',
                'type' => 'string',
                'required' => false,
                'example' => 'PAI',
              ),
              'SignatureId' => 
              array (
                'title' => '签名ID，或指定签名。',
                'description' => '签名Id，或指定签名。',
                'type' => 'string',
                'required' => false,
                'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
              ),
              'TemplateCode' => 
              array (
                'title' => '模板Code。',
                'description' => '模板Code。',
                'type' => 'string',
                'required' => false,
                'example' => 'SMS_123456',
              ),
              'TemplateId' => 
              array (
                'title' => '模板ID，或指定模板Code。',
                'description' => '模板Id，或指定模板Code。',
                'type' => 'string',
                'required' => false,
                'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
              ),
              'AISendStartDate' => 
              array (
                'description' => '智能发送开始时间。',
                'type' => 'string',
                'required' => false,
                'example' => '2020-01-01 12:00:00
',
              ),
              'AISendEndDate' => 
              array (
                'description' => '智能发送结束时间。',
                'type' => 'string',
                'required' => false,
                'example' => '2020-01-01 12:00:00
',
              ),
              'PaymentType' => 
              array (
                'description' => '计费类型（为空时默认后付费）。

- PayAsYouGo：后付费
- Subscription：预付费',
                'type' => 'string',
                'required' => false,
                'example' => 'PayAsYouGo',
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
            'title' => '成功注册短信触达计划，可通过控制台或GetSchedule获取短信触达计划检查与触达情况。',
            'description' => '成功注册触达计划，可通过控制台或GetSchedule获取触达计划检查与触达情况。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'CreatedTime' => 
                  array (
                    'title' => '创建时间 (UTC+8)。',
                    'description' => '创建时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                  'EndTime' => 
                  array (
                    'title' => '终止时间（UTC+8）。',
                    'description' => '终止时间（UTC+8）。',
                    'type' => 'string',
                    'format' => 'int32',
                    'example' => '2020-01-01',
                  ),
                  'ExecuteTime' => 
                  array (
                    'title' => '执行时间 (UTC+8)，为空立即执行。',
                    'description' => '执行时间 (UTC+8)，为空立即执行。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                  'GroupId' => 
                  array (
                    'title' => '人群ID。',
                    'description' => '人群ID。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'Id' => 
                  array (
                    'title' => '触达计划ID。',
                    'description' => '触达计划ID。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'Name' => 
                  array (
                    'title' => '触达计划名称。',
                    'description' => '触达计划名称。',
                    'type' => 'string',
                    'example' => '增长-2021-0101',
                  ),
                  'RepeatCycle' => 
                  array (
                    'title' => '重复周期，按重复周期与重复周期单位执行。',
                    'description' => '重复周期，按重复周期与重复周期单位执行。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'RepeatCycleUnit' => 
                  array (
                    'title' => '重复周期单位，若指定执行时间，则重复周期生效。
- 0: 从不（默认）。
- 1: 小时。
- 2: 天。
- 3: 周。
- 4: 月。',
                    'description' => '重复周期单位，若指定执行时间，则重复周期生效。
- 0: 从不（默认）。
- 1: 小时。
- 2: 天。
- 3: 周。
- 4: 月。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'RepeatTimes' => 
                  array (
                    'title' => '重复次数。
- 0: 不设终止时间（默认）。
- N: 重复N次后终止。',
                    'description' => '重复次数。
- -1: 不设终止时间（默认）。
- 0: 不重复。
- N: 重复N次后终止。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'SignName' => 
                  array (
                    'title' => '签名。',
                    'description' => '签名。',
                    'type' => 'string',
                    'example' => 'PAI',
                  ),
                  'SignatureId' => 
                  array (
                    'title' => '签名ID，或指定签名。',
                    'description' => '签名ID，或指定签名。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'Status' => 
                  array (
                    'title' => '状态。
- 0: 检查中。
- 1: 检查成功。
- 2: 检查失败。
- 3: 发送中。
- 4: 发送成功。
- 5: 发送失败。',
                    'description' => '状态。
- 0: 检查中。
- 1: 检查成功。
- 2: 检查失败。
- 3: 发送中。
- 4: 发送成功。
- 5: 发送失败。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'TemplateCode' => 
                  array (
                    'title' => '模板Code。',
                    'description' => '模板Code。',
                    'type' => 'string',
                    'example' => 'SMS_123456',
                  ),
                  'TemplateId' => 
                  array (
                    'title' => '模板ID，或指定模板Code。',
                    'description' => '模板ID，或指定模板Code。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'UpdatedTime' => 
                  array (
                    'title' => '更新时间 (UTC+8)。',
                    'description' => '更新时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"EndTime\\": \\"2020-01-01\\",\\n    \\"ExecuteTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"GroupId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"增长-2021-0101\\",\\n    \\"RepeatCycle\\": 0,\\n    \\"RepeatCycleUnit\\": 0,\\n    \\"RepeatTimes\\": 1,\\n    \\"SignName\\": \\"PAI\\",\\n    \\"SignatureId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Status\\": 0,\\n    \\"TemplateCode\\": \\"SMS_123456\\",\\n    \\"TemplateId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '创建触达计划',
    ),
    'DeleteSchedule' => 
    array (
      'summary' => '删除发送计划。',
      'path' => '/api/v2/schedules/{Id}',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '129057',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '触达计划Id，可通过ListSchedules查询账号下的触达计划列表，获取触达计划Id。',
            'description' => '触达计划ID，可通过ListSchedules查询账号下的触达计划列表，获取触达计划ID。',
            'type' => 'string',
            'required' => false,
            'example' => '0bddaf8f-5628-427a-8652-5e24f6b4c35d',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '成功删除触达计划。',
            'description' => '成功删除触达计划。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"OK\\",\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '删除发送计划',
    ),
    'ListSchedules' => 
    array (
      'summary' => '获取发送计划列表。',
      'path' => '/api/v2/schedules',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '129067',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
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
            'title' => '触达计划名称过滤。',
            'description' => '触达计划名称过滤。',
            'type' => 'string',
            'required' => false,
            'example' => '用户增长',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页数，从1开始，默认为1。',
            'description' => '分页数，从1开始，默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页大小，默认为10。',
            'description' => '分页大小，默认为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '发送状态过滤。
- 0：检查中。
- 1：检查成功。
- 2：检查失败。
- 3：发送中。
- 4：发送成功。
- 5：发送失败。',
            'description' => '发送状态过滤。
- 0: 检查中。
- 1: 检查成功。
- 2: 检查失败。
- 3: 发送中。
- 4: 发送成功。
- 5: 发送失败。',
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
            'title' => '成功获取短信触达计划列表。',
            'description' => '成功获取触达计划列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNumber' => 
                  array (
                    'title' => '分页数，从1开始，默认为1。',
                    'description' => '分页数，从1开始，默认为1。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                    'default' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '分页大小，默认为10。',
                    'description' => '分页大小，默认为10。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                    'default' => '10',
                  ),
                  'Schedules' => 
                  array (
                    'title' => '触达计划列表。',
                    'description' => '触达计划列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CreatedTime' => 
                        array (
                          'title' => '创建时间 (UTC+8)。',
                          'description' => '创建时间 (UTC+8)。',
                          'type' => 'string',
                          'example' => '2020-01-01 12:00:00',
                        ),
                        'EndTime' => 
                        array (
                          'title' => '终止时间（UTC+8）。',
                          'description' => '终止时间（UTC+8）。',
                          'type' => 'string',
                          'format' => 'int32',
                          'example' => '2020-01-01',
                        ),
                        'ExecuteTime' => 
                        array (
                          'title' => '执行时间 (UTC+8)，为空立即执行。',
                          'description' => '执行时间 (UTC+8)，为空立即执行。',
                          'type' => 'string',
                          'example' => '2020-01-01 12:00:00',
                        ),
                        'GroupId' => 
                        array (
                          'title' => '人群ID。',
                          'description' => '人群ID。',
                          'type' => 'string',
                          'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                        ),
                        'Id' => 
                        array (
                          'title' => '触达计划ID。',
                          'description' => '触达计划ID。',
                          'type' => 'string',
                          'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                        ),
                        'Name' => 
                        array (
                          'title' => '触达计划名称。',
                          'description' => '触达计划名称。',
                          'type' => 'string',
                          'example' => '增长-2021-0101',
                        ),
                        'RepeatCycle' => 
                        array (
                          'title' => '重复周期，按重复周期与重复周期单位执行。',
                          'description' => '重复周期，按重复周期与重复周期单位执行。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'RepeatCycleUnit' => 
                        array (
                          'title' => '重复周期单位，若指定执行时间，则重复周期生效。
- 0: 从不（默认）。
- 1: 小时。
- 2: 天。
- 3: 周。
- 4: 月。',
                          'description' => '重复周期单位，若指定执行时间，则重复周期生效。
- 0: 从不（默认）。
- 1: 小时。
- 2: 天。
- 3: 周。
- 4: 月。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'RepeatTimes' => 
                        array (
                          'title' => '重复次数。
- 0: 不设终止时间（默认）。
- N: 重复N次后终止。',
                          'description' => '重复次数。
- -1: 不设终止时间（默认）。
- 0: 不重复。
- N: 重复N次后终止。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'SignName' => 
                        array (
                          'title' => '签名。',
                          'description' => '签名。',
                          'type' => 'string',
                          'example' => 'PAI',
                        ),
                        'SignatureId' => 
                        array (
                          'title' => '签名ID，或指定签名。',
                          'description' => '签名ID。',
                          'type' => 'string',
                          'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                        ),
                        'Status' => 
                        array (
                          'title' => '状态。
- 0: 检查中。
- 1: 检查成功。
- 2: 检查失败。
- 3: 发送中。
- 4: 发送成功。
- 5: 发送失败。',
                          'description' => '状态。
- 0: 检查中。
- 1: 检查成功。
- 2: 检查失败。
- 3: 发送中。
- 4: 发送成功。
- 5: 发送失败。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'TemplateCode' => 
                        array (
                          'title' => '模板Code。',
                          'description' => '模板Code。',
                          'type' => 'string',
                          'example' => 'SMS_123456',
                        ),
                        'TemplateId' => 
                        array (
                          'title' => '模板ID，或指定模板Code。',
                          'description' => '模板ID。',
                          'type' => 'string',
                          'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                        ),
                        'UpdatedTime' => 
                        array (
                          'title' => '更新时间 (UTC+8)。',
                          'description' => '更新时间 (UTC+8)。',
                          'type' => 'string',
                          'example' => '2020-01-01 12:00:00',
                        ),
                      ),
                    ),
                  ),
                  'TotalCount' => 
                  array (
                    'title' => '触达计划数量。',
                    'description' => '触达计划数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Schedules\\": [\\n      {\\n        \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n        \\"EndTime\\": \\"2020-01-01\\",\\n        \\"ExecuteTime\\": \\"2020-01-01 12:00:00\\",\\n        \\"GroupId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"Name\\": \\"增长-2021-0101\\",\\n        \\"RepeatCycle\\": 0,\\n        \\"RepeatCycleUnit\\": 0,\\n        \\"RepeatTimes\\": 1,\\n        \\"SignName\\": \\"PAI\\",\\n        \\"SignatureId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"Status\\": 0,\\n        \\"TemplateCode\\": \\"SMS_123456\\",\\n        \\"TemplateId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\"\\n      }\\n    ],\\n    \\"TotalCount\\": 0\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '获取发送计划列表',
    ),
    'GetSchedule' => 
    array (
      'summary' => '获取发送计划详情。',
      'path' => '/api/v2/schedules/{Id}',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '129062',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearn5SOS0Q',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '短信触达计划ID，可通过ListSchedules查询账号下的短信触达计划列表，获取短信触达计划ID。',
            'description' => '触达计划ID，可通过ListSchedules查询账号下的触达计划列表，获取触达计划ID。',
            'type' => 'string',
            'required' => false,
            'example' => '0bddaf8f-5628-427a-8652-5e24f6b4c35d',
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
            'title' => '成功获取短信触达计划详情。',
            'description' => '成功获取触达计划详情。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'CreatedTime' => 
                  array (
                    'title' => '创建时间 (UTC+8)。',
                    'description' => '创建时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                  'EndTime' => 
                  array (
                    'title' => '终止时间（UTC+8）。',
                    'description' => '终止时间（UTC+8）。',
                    'type' => 'string',
                    'format' => 'int32',
                    'example' => '2020-01-01',
                  ),
                  'ExecuteTime' => 
                  array (
                    'title' => '执行时间 (UTC+8)，为空立即执行。',
                    'description' => '执行时间 (UTC+8)，为空立即执行。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                  'GroupId' => 
                  array (
                    'title' => '人群ID。',
                    'description' => '人群ID。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'History' => 
                  array (
                    'title' => '历史记录。',
                    'description' => '历史记录。',
                    'type' => 'string',
                    'example' => 'string',
                  ),
                  'Id' => 
                  array (
                    'title' => '触达计划ID。',
                    'description' => '触达计划ID。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'Name' => 
                  array (
                    'title' => '触达计划名称。',
                    'description' => '触达计划名称。',
                    'type' => 'string',
                    'example' => '增长-2021-0101',
                  ),
                  'RepeatCycle' => 
                  array (
                    'title' => '重复周期，按重复周期与重复周期单位执行。',
                    'description' => '重复周期，按重复周期与重复周期单位执行。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'RepeatCycleUnit' => 
                  array (
                    'title' => '重复周期单位，若指定执行时间，则重复周期生效。
- 0: 从不（默认）。
- 1: 小时。
- 2: 天。
- 3: 周。
- 4: 月。',
                    'description' => '重复周期单位，若指定执行时间，则重复周期生效。
- 0: 从不（默认）。
- 1: 小时。
- 2: 天。
- 3: 周。
- 4: 月。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'RepeatTimes' => 
                  array (
                    'title' => '重复次数。
- 0: 不设终止时间（默认）。
- N: 重复N次后终止。',
                    'description' => '重复次数。
- -1: 不设终止时间（默认）。
- 0: 不重复。
- N: 重复N次后终止。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'SignName' => 
                  array (
                    'title' => '签名。',
                    'description' => '签名。',
                    'type' => 'string',
                    'example' => 'PAI',
                  ),
                  'SignatureId' => 
                  array (
                    'title' => '签名ID，或指定签名。',
                    'description' => '签名ID。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'Status' => 
                  array (
                    'title' => '状态。
- 0: 检查中。
- 1: 检查成功。
- 2: 检查失败。
- 3: 发送中。
- 4: 发送成功。
- 5: 发送失败。',
                    'description' => '状态。
- 0: 检查中。
- 1: 检查成功。
- 2: 检查失败。
- 3: 发送中。
- 4: 发送成功。
- 5: 发送失败。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'TemplateCode' => 
                  array (
                    'title' => '模板Code。',
                    'description' => '模板Code。',
                    'type' => 'string',
                    'example' => 'SMS_123456',
                  ),
                  'TemplateId' => 
                  array (
                    'title' => '模板ID，或指定模板Code。',
                    'description' => '模板ID。',
                    'type' => 'string',
                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                  ),
                  'UpdatedTime' => 
                  array (
                    'title' => '更新时间 (UTC+8)。',
                    'description' => '更新时间 (UTC+8)。',
                    'type' => 'string',
                    'example' => '2020-01-01 12:00:00',
                  ),
                  'PaymentType' => 
                  array (
                    'type' => 'string',
                    'example' => 'Subscription',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
        400 => 
        array (
          'schema' => 
          array (
            'title' => '失败，原因见ErrorMessage，错误码见Data。',
            'description' => '失败，原因见ErrorMessage，错误码见Data。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '返回数据。',
                'description' => '返回数据。',
                'type' => 'string',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码。',
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ErrorMessage' => 
              array (
                'title' => '错误信息。',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"EndTime\\": \\"2020-01-01\\",\\n    \\"ExecuteTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"GroupId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"History\\": \\"string\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"增长-2021-0101\\",\\n    \\"RepeatCycle\\": 0,\\n    \\"RepeatCycleUnit\\": 0,\\n    \\"RepeatTimes\\": 1,\\n    \\"SignName\\": \\"PAI\\",\\n    \\"SignatureId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Status\\": 0,\\n    \\"TemplateCode\\": \\"SMS_123456\\",\\n    \\"TemplateId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"PaymentType\\": \\"Subscription\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
      'title' => '获取发送计划详情',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'paiplugin.cn-hangzhou.aliyuncs.com',
    ),
  ),
);
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Workorder',
    'version' => '2021-06-10',
  ),
  'directories' => 
  array (
    0 => 'GetTicket',
    1 => 'CreateTicket',
    2 => 'ReplyTicket',
    3 => 'CloseTicket',
    4 => 'EvaluateTicket',
    5 => 'ListTickets',
    6 => 'ListTicketNotes',
    7 => 'ListProducts',
    8 => 'ListCategories',
    9 => 'GetMqConsumerTag',
    10 => 'ReopenTicket',
    11 => 'GetAttachmentUploadUrl',
  ),
  'components' => 
  array (
    'schemas' => 
    array (
    ),
  ),
  'apis' => 
  array (
    'GetTicket' => 
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
        1 => 
        array (
          'APP' => 
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
          'name' => 'TicketId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工单编号',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '001571BTXC',
          ),
        ),
        1 => 
        array (
          'name' => 'Uid',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'UID',
            'type' => 'string',
            'required' => false,
            'example' => '1604499804113750',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'C499BB0F-630D-5BE6-B3EA-5FCD95B85503',
              ),
              'Success' => 
              array (
                'description' => '调用接口返回是否成功,true代表调用正常',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Code' => 
              array (
                'description' => '接口请求结果返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息, 当success=false的时候, 可以取到message
',
                'type' => 'string',
                'example' => 'success',
              ),
              'PageNumber' => 
              array (
                'description' => '分页查询参数的页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询参数的每页条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '查询结果总数, 即我的工单记录总条数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '108',
              ),
              'Data' => 
              array (
                'description' => '接口调用成功后，返回的业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'TicketId' => 
                  array (
                    'description' => '工单编号',
                    'type' => 'string',
                    'example' => '0005PYGCW',
                  ),
                  'Title' => 
                  array (
                    'description' => '工单标题',
                    'type' => 'string',
                    'example' => 'ecs续费失败啥原因',
                  ),
                  'Description' => 
                  array (
                    'description' => '工单问题描述, 目前只支持纯文本格式',
                    'type' => 'string',
                    'example' => 'ecs无法启动',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '工单创建时间的时间戳',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1623396736000',
                  ),
                  'CreatorId' => 
                  array (
                    'description' => '工单创建人uid',
                    'type' => 'string',
                    'example' => '1168025',
                  ),
                  'CategoryId' => 
                  array (
                    'description' => '工单问题分类ID',
                    'type' => 'string',
                    'example' => '7161',
                  ),
                  'Status' => 
                  array (
                    'description' => '工单状态, 参考值如下
1, "assigned", "待响应", 
2, "dealing", "处理中",
3, "wait_feedback", "待反馈",
4, "feedback", "已反馈",
5, "wait_confirm", "待确认",
6, "confirmed", "已完成"',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Label' => 
                      array (
                        'description' => '状态枚举文本',
                        'type' => 'string',
                        'example' => '已完成',
                      ),
                      'Value' => 
                      array (
                        'description' => '状态枚举值',
                        'type' => 'string',
                        'example' => '6',
                      ),
                    ),
                  ),
                  'Severity' => 
                  array (
                    'description' => '紧急度枚举值, 1 代表一般问题, 2 代表紧急问题',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Label' => 
                      array (
                        'description' => '枚举文本',
                        'type' => 'string',
                        'example' => '一般问题',
                      ),
                      'Value' => 
                      array (
                        'description' => '枚举值',
                        'type' => 'string',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'illegal.param',
            'errorMessage' => 'Illegal param.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'illegal.auth',
            'errorMessage' => 'You are not authorized to perform the operation.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.error',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C499BB0F-630D-5BE6-B3EA-5FCD95B85503\\",\\n  \\"Success\\": true,\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 108,\\n  \\"Data\\": {\\n    \\"TicketId\\": \\"0005PYGCW\\",\\n    \\"Title\\": \\"ecs续费失败啥原因\\",\\n    \\"Description\\": \\"ecs无法启动\\",\\n    \\"CreateTime\\": 1623396736000,\\n    \\"CreatorId\\": \\"1168025\\",\\n    \\"CategoryId\\": \\"7161\\",\\n    \\"Status\\": {\\n      \\"Label\\": \\"已完成\\",\\n      \\"Value\\": \\"6\\"\\n    },\\n    \\"Severity\\": {\\n      \\"Label\\": \\"一般问题\\",\\n      \\"Value\\": \\"1\\"\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '查询工单',
      'summary' => '查询工单。',
    ),
    'CreateTicket' => 
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
        1 => 
        array (
          'APP' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工单问题描述, 目前只支持纯文本格式',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ecs备份失败',
          ),
        ),
        1 => 
        array (
          'name' => 'Severity',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '枚举值, 1 代表一般问题, 2 代表紧急问题',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '1000',
            'minimum' => '0',
            'enumValueTitles' => 
            array (
              1 => '普通',
              2 => '紧急',
            ),
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'CategoryId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '问题分类ID, 从ListCategories接口中获取返回值CategoryId',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '53812',
          ),
        ),
        3 => 
        array (
          'name' => 'Title',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工单标题',
            'type' => 'string',
            'required' => false,
            'example' => 'ecs备份失败',
          ),
        ),
        4 => 
        array (
          'name' => 'CreatorId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '提交账号的阿里云uid，MPK虚商场景需要',
            'type' => 'string',
            'required' => false,
            'example' => '1289427240739141',
          ),
        ),
        5 => 
        array (
          'name' => 'Email',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'sdahkjdshga@qq.com',
            'type' => 'string',
            'required' => false,
            'example' => '163@163.com',
          ),
        ),
        6 => 
        array (
          'name' => 'FileNameList',
          'in' => 'formData',
          'style' => 'simple',
          'schema' => 
          array (
            'description' => '附件名称列表，GetAttachmentUploadUrl接口返回的ObjectKey字段',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'GetAttachmentUploadUrl接口返回的ObjectKey字段',
              'type' => 'string',
              'required' => false,
              'example' => 'cabb80c3-430b-4079-a9f2-d2a0d1c2a587.png',
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'SecretInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '敏感信息',
            'type' => 'object',
            'properties' => 
            array (
              'Content' => 
              array (
                'description' => '敏感信息—文本内容',
                'type' => 'string',
                'required' => false,
                'example' => '身份证：3310xxxx',
              ),
              'FileNameList' => 
              array (
                'description' => '敏感信息—附件名称列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'GetAttachmentUploadUrl接口返回的ObjectKey字段',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cabb80c3-430b-4079-a9f2-d2a0d1c2a587.png',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '接口请求结果返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息, 当success=false的时候, 可以取到message',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'description' => '返回值, 即工单号',
                'type' => 'string',
                'example' => '0005PYGCW',
              ),
              'RequestId' => 
              array (
                'description' => '接口请求的唯一ID, 每次调用requestID唯一',
                'type' => 'string',
                'example' => '0254B7DE-7365-57B4-8E38-14FE927E3FEB',
              ),
              'Success' => 
              array (
                'description' => '调用接口返回是否成功, true代表调用正常',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.error',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": \\"0005PYGCW\\",\\n  \\"RequestId\\": \\"0254B7DE-7365-57B4-8E38-14FE927E3FEB\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '新建工单',
      'summary' => '创建工单。',
    ),
    'ReplyTicket' => 
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
        1 => 
        array (
          'APP' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TicketId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工单号',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0005PYGCW',
          ),
        ),
        1 => 
        array (
          'name' => 'Content',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工单回复的内容',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '好的, 我这边已经续费成功',
          ),
        ),
        2 => 
        array (
          'name' => 'FileNameList',
          'in' => 'query',
          'style' => 'simple',
          'schema' => 
          array (
            'description' => '附件名称列表，GetAttachmentUploadUrl接口返回的ObjectKey字段',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'GetAttachmentUploadUrl接口返回的ObjectKey字段',
              'type' => 'string',
              'required' => false,
              'example' => '6bc06f96-f8c1-4c00-9e30-368444fbd025.jpg,',
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'Encrypt',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否加密',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'Uid',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '阿里云UID',
            'type' => 'string',
            'required' => false,
            'example' => '1289427240739141',
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
                'description' => '状态码
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息, 当success=false的时候, 可以取到message
',
                'type' => 'string',
                'example' => '非法的入参',
              ),
              'Data' => 
              array (
                'description' => '返回值, 即工单回复内容的dialogID
',
                'type' => 'string',
                'example' => '46434030',
              ),
              'RequestId' => 
              array (
                'description' => '接口请求的唯一id,每次调用requestid唯一',
                'type' => 'string',
                'example' => 'C1DA4C6F-963E-5741-AB57-67A554D102FD',
              ),
              'Success' => 
              array (
                'description' => '调用接口返回是否成功,true代表调用正常',
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
            'errorCode' => 'param.illegal',
            'errorMessage' => 'Params illegal.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'illegal.auth',
            'errorMessage' => 'You are not authorized to perform the operation.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.error',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"非法的入参\\",\\n  \\"Data\\": \\"46434030\\",\\n  \\"RequestId\\": \\"C1DA4C6F-963E-5741-AB57-67A554D102FD\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '回复工单',
      'summary' => '工单回复, 回复的内容可以通过ListTicketNotes接口获取。',
    ),
    'CloseTicket' => 
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
        1 => 
        array (
          'APP' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TicketId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工单编号',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'G2BKRWG',
          ),
        ),
        1 => 
        array (
          'name' => 'Uid',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户UID。您可以通过DMS控制台右上角头像处查看您的UID。',
            'type' => 'string',
            'required' => false,
            'example' => '1139477549527134',
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
                'description' => '接口请求结果返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息, 当success=false的时候, 可以取到message',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一识别码。',
                'type' => 'string',
                'example' => 'CA6204AC-6AA9-4CFA-9310-7DFD20C19EBC',
              ),
              'Success' => 
              array (
                'description' => '调用接口返回是否成功,true代表调用正常',
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
            'errorCode' => 'param.illegal',
            'errorMessage' => 'Params illegal.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'illegal.auth',
            'errorMessage' => 'You are not authorized to perform the operation.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.error',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"CA6204AC-6AA9-4CFA-9310-7DFD20C19EBC\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '关闭工单',
      'summary' => '关闭工单。',
    ),
    'EvaluateTicket' => 
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
        1 => 
        array (
          'APP' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TicketId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工单号',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '001ET1BU1P',
          ),
        ),
        1 => 
        array (
          'name' => 'Solved',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否解决',
            'type' => 'boolean',
            'required' => true,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'Score',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '评价星级1-5星',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'Content',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '评价内容',
            'type' => 'string',
            'required' => false,
            'example' => '很满意的一次工单服务',
          ),
        ),
        4 => 
        array (
          'name' => 'Uid',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'UID',
            'type' => 'string',
            'required' => false,
            'example' => '1902070573958003',
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
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息, 当success=false的时候, 可以取到message
',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C1DA4C6F-963E-5741-AB57-67A554D102FD',
              ),
              'Success' => 
              array (
                'description' => '调用是否成功。true：表示成功；false：表示失败。',
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
            'errorCode' => 'param.illegal',
            'errorMessage' => 'Params illegal.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'illegal.auth',
            'errorMessage' => 'You are not authorized to perform the operation.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.error',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"C1DA4C6F-963E-5741-AB57-67A554D102FD\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>successful</Message>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '评价工单',
      'summary' => '评价工单。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListTickets' => 
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
        1 => 
        array (
          'APP' => 
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
          'name' => 'StartDate',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工单创建时间, 配合EndDate使用, 用于查询在指定的开始和结束时间范围内创建的工单',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => true,
            'example' => '1623396736000',
          ),
        ),
        1 => 
        array (
          'name' => 'EndDate',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工单创建截止时间, 配合StartDate使用, 用于查询在指定的开始和结束时间范围内提交的工单',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => true,
            'example' => '1623396736000',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询页码参数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9999999',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询条数参数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '100',
            'minimum' => '10',
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'TicketId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工单编号',
            'type' => 'string',
            'required' => false,
            'example' => '0005PYGCW',
          ),
        ),
        5 => 
        array (
          'name' => 'Keyword',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工单关键词, 用于模糊搜索匹配工单创建时的Description字段的内容',
            'type' => 'string',
            'required' => false,
            'example' => 'ecs',
          ),
        ),
        6 => 
        array (
          'name' => 'StatusList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '多个工单状态',
            'type' => 'array',
            'items' => 
            array (
              'description' => '工单状态,参考值如下1,"assigned","待响应",2,"dealing","处理中",3,"wait-feedback","待反馈",4,"feedback","已反馈",5,"wait_confirm","待确认",6,"confirmed","已完成"',
              'type' => 'string',
              'required' => false,
              'example' => 'confirmed',
            ),
            'required' => false,
            'example' => '6',
            'maxItems' => 11,
          ),
        ),
        7 => 
        array (
          'name' => 'TicketIdList',
          'in' => 'formData',
          'style' => 'simple',
          'schema' => 
          array (
            'description' => '多个工单编号',
            'type' => 'array',
            'items' => 
            array (
              'description' => '工单号',
              'type' => 'string',
              'required' => false,
              'example' => '0006S6ZL6E',
            ),
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'Uid',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'UID',
            'type' => 'string',
            'required' => false,
            'example' => '1902070573958003',
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
                'description' => '接口请求的唯一ID, 每次调用requestID唯一
',
                'type' => 'string',
                'example' => 'AC0AB2EC-AFBC-44BA-AE77-132A5A1EC0AD',
              ),
              'Success' => 
              array (
                'description' => '调用接口返回是否成功, true代表调用正常
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '接口请求结果返回码
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息, 当success=false的时候, 可以取到message
',
                'type' => 'string',
                'example' => '入参解析失败',
              ),
              'PageNumber' => 
              array (
                'description' => '分页查询参数的页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询参数的每页条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '查询结果总数, 即我的工单记录总条数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '99',
              ),
              'Data' => 
              array (
                'description' => '返回值为我的工单列表数据
',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TicketId' => 
                    array (
                      'description' => '工单编号',
                      'type' => 'string',
                      'example' => '0005PYGCW',
                    ),
                    'Title' => 
                    array (
                      'description' => '工单标题',
                      'type' => 'string',
                      'example' => 'ecs续费失败啥原因',
                    ),
                    'Status' => 
                    array (
                      'description' => '工单状态, 参考值如下
1, "assigned", "待响应", 
2, "dealing", "处理中",
3, "wait_feedback", "待反馈",
4, "feedback", "已反馈",
5, "wait_confirm", "待确认",
6, "confirmed", "已完成"',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Label' => 
                        array (
                          'description' => '状态描述, 如已完成',
                          'type' => 'string',
                          'example' => '已完成',
                        ),
                        'Value' => 
                        array (
                          'description' => '状态值, 如6, 代表已完成',
                          'type' => 'string',
                          'example' => '6',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'illegal.param',
            'errorMessage' => 'Params illegal',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'illegal.auth',
            'errorMessage' => 'You are not authorized to perform the operation.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.error',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AC0AB2EC-AFBC-44BA-AE77-132A5A1EC0AD\\",\\n  \\"Success\\": true,\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"入参解析失败\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 99,\\n  \\"Data\\": [\\n    {\\n      \\"TicketId\\": \\"0005PYGCW\\",\\n      \\"Title\\": \\"ecs续费失败啥原因\\",\\n      \\"Status\\": {\\n        \\"Label\\": \\"已完成\\",\\n        \\"Value\\": \\"6\\"\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<TotalCount>99</TotalCount>\\n<PageSize>10</PageSize>\\n<Message>入参解析失败</Message>\\n<RequestId>AC0AB2EC-AFBC-44BA-AE77-132A5A1EC0AD</RequestId>\\n<PageNumber>1</PageNumber>\\n<Data>\\n    <TicketId>0005PYGCW</TicketId>\\n    <Title>ecs续费失败啥原因</Title>\\n    <Status>\\n        <Value>6</Value>\\n        <Label>已完成</Label>\\n    </Status>\\n</Data>\\n<Code>0</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '获取我的工单列表',
      'summary' => '获取我的工单列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListTicketNotes' => 
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
        1 => 
        array (
          'APP' => 
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
          'name' => 'TicketId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工单编号',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0005PYGCW',
          ),
        ),
        1 => 
        array (
          'name' => 'Uid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'UID',
            'type' => 'string',
            'required' => false,
            'example' => '1936753548534516',
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
                'description' => '接口请求结果返回码
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息, 当success=false的时候, 可以取到message
',
                'type' => 'string',
                'example' => '入参非法',
              ),
              'RequestId' => 
              array (
                'description' => '接口请求的唯一ID, 每次调用requestID唯一
',
                'type' => 'string',
                'example' => 'AC0AB2EC-AFBC-44BA-AE77-132A5A1EC0AD',
              ),
              'Success' => 
              array (
                'description' => '调用接口返回是否成功, true代表调用正常
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回值, 即指定工单的对话记录列表数据',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'description' => '对话类型
1 卡片, 即schema
2  文本, 即content',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Status' => 
                    array (
                      'description' => '沟通消息状态字段, 参考值
未读=1、已读=2',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '6',
                    ),
                    'Tip' => 
                    array (
                      'description' => '暂不使用的字段',
                      'type' => 'string',
                      'example' => 'null',
                    ),
                    'DialogId' => 
                    array (
                      'description' => '对话记录唯一ID标识',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '9999',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '沟通消息创建时间的时间戳',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1623396736000',
                    ),
                    'Dialog' => 
                    array (
                      'description' => '工单沟通记录对象',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Schema' => 
                        array (
                          'description' => '工单沟通记录系统卡片, 将来开放系统卡片对接能力时使用, 目前阶段用content取纯文本内容即可',
                          'type' => 'string',
                          'example' => 'null',
                        ),
                        'Content' => 
                        array (
                          'description' => '工单沟通内容',
                          'type' => 'string',
                          'example' => '你好, 我的ECS续费失败, 请问是什么原因',
                        ),
                      ),
                    ),
                    'User' => 
                    array (
                      'description' => '对话的用户',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Role' => 
                        array (
                          'description' => '对话用户角色, 区分小二和用户使用
2, 客服
3, 用户',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3',
                        ),
                        'Name' => 
                        array (
                          'description' => '对话用户名称',
                          'type' => 'string',
                          'example' => '工单小二',
                        ),
                      ),
                    ),
                    'Attachments' => 
                    array (
                      'description' => '附件列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Name' => 
                          array (
                            'description' => '附件名称',
                            'type' => 'string',
                            'example' => '003.jpg',
                          ),
                          'Url' => 
                          array (
                            'description' => '临时可访问的附件地址',
                            'type' => 'string',
                            'example' => 'https://gts-workorder.oss-cn-beijing.aliyuncs.com/20221003/cbc00fb0-b612-4d89-a75b-8d535f750f9f/image.png',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'param.illegal',
            'errorMessage' => 'Params illegal.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'illegal.auth',
            'errorMessage' => 'You are not authorized to perform the operation.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.error',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"入参非法\\",\\n  \\"RequestId\\": \\"AC0AB2EC-AFBC-44BA-AE77-132A5A1EC0AD\\",\\n  \\"Success\\": true,\\n  \\"Data\\": [\\n    {\\n      \\"Type\\": 1,\\n      \\"Status\\": 6,\\n      \\"Tip\\": \\"null\\",\\n      \\"DialogId\\": 9999,\\n      \\"CreateTime\\": 1623396736000,\\n      \\"Dialog\\": {\\n        \\"Schema\\": \\"null\\",\\n        \\"Content\\": \\"你好, 我的ECS续费失败, 请问是什么原因\\"\\n      },\\n      \\"User\\": {\\n        \\"Role\\": 3,\\n        \\"Name\\": \\"工单小二\\"\\n      },\\n      \\"Attachments\\": [\\n        {\\n          \\"Name\\": \\"003.jpg\\",\\n          \\"Url\\": \\"https://gts-workorder.oss-cn-beijing.aliyuncs.com/20221003/cbc00fb0-b612-4d89-a75b-8d535f750f9f/image.png\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<Message>入参非法</Message>\\n<RequestId>AC0AB2EC-AFBC-44BA-AE77-132A5A1EC0AD</RequestId>\\n<Data>\\n    <Status>6</Status>\\n    <Type>1</Type>\\n    <CreateTime>1623396736000</CreateTime>\\n    <DialogId>9999</DialogId>\\n    <Tip>null</Tip>\\n    <Dialog>\\n        <Content>你好, 我的ECS续费失败, 请问是什么原因</Content>\\n        <Schema>null</Schema>\\n    </Dialog>\\n    <User>\\n        <Role>3</Role>\\n        <Name>工单小二</Name>\\n    </User>\\n</Data>\\n<Code>0</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '获取工单沟通记录',
      'summary' => '获取工单沟通记录。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListProducts' => 
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
        1 => 
        array (
          'APP' => 
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
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品名称, 支持模糊搜索, 非必填',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'ecs',
          ),
        ),
        1 => 
        array (
          'name' => 'Language',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您使用的语言，支持，中文，英文，日文。值定义：zh：中文，en：英文，jp：日文。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn',
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
                'description' => '接口请求结果返回码
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息, 当success=false的时候, 可以取到message
',
                'type' => 'string',
                'example' => '入参非法',
              ),
              'RequestId' => 
              array (
                'description' => '接口请求的唯一ID, 每次调用requestID唯一
',
                'type' => 'string',
                'example' => 'AC0AB2EC-AFBC-44BA-AE77-132A5A1EC0AD',
              ),
              'Success' => 
              array (
                'description' => '调用接口返回是否成功, true代表调用正常
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回值, 即产品列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DirectoryId' => 
                    array (
                      'description' => '产品目录ID, 代表产品大类, 如弹性计算',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'DirectoryName' => 
                    array (
                      'description' => '产品目录名称, 代表产品大类, 如弹性计算',
                      'type' => 'string',
                      'example' => '云服务器',
                    ),
                    'ProductList' => 
                    array (
                      'description' => '阿里云产品列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ProductId' => 
                          array (
                            'description' => '阿里云产品ID',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '7160',
                          ),
                          'ProductName' => 
                          array (
                            'description' => '阿里云产品名称',
                            'type' => 'string',
                            'example' => 'ECS',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.error',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"入参非法\\",\\n  \\"RequestId\\": \\"AC0AB2EC-AFBC-44BA-AE77-132A5A1EC0AD\\",\\n  \\"Success\\": true,\\n  \\"Data\\": [\\n    {\\n      \\"DirectoryId\\": 1,\\n      \\"DirectoryName\\": \\"云服务器\\",\\n      \\"ProductList\\": [\\n        {\\n          \\"ProductId\\": 7160,\\n          \\"ProductName\\": \\"ECS\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<Message>入参非法</Message>\\n<RequestId>AC0AB2EC-AFBC-44BA-AE77-132A5A1EC0AD</RequestId>\\n<Data>\\n    <DirectoryId>1</DirectoryId>\\n    <DirectoryName>云服务器</DirectoryName>\\n    <ProductList>\\n        <ProductName>ECS</ProductName>\\n        <ProductId>7160</ProductId>\\n    </ProductList>\\n</Data>\\n<Code>0</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '获取阿里云产品列表数据',
      'summary' => '获取阿里云产品列表数据。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListCategories' => 
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
        1 => 
        array (
          'APP' => 
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
          'name' => 'ProductId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '产品ID, 通过ListProducts接口获取. ProductId为阿里云产品ID, 一个产品下会挂多个Category(工单问题分类)',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '99999999999',
            'minimum' => '0',
            'example' => '18550',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分类问题名称, 支持模糊搜索',
            'type' => 'string',
            'required' => false,
            'example' => 'ecs',
          ),
        ),
        2 => 
        array (
          'name' => 'Language',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多语言，支持，中文，英文。 值定义：zh：中文，en：英文。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息, 当success=false的时候, 可以取到message
',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一识别码',
                'type' => 'string',
                'example' => 'CA6204AC-6AA9-4CFA-9310-7DFD20C19EBC',
              ),
              'Success' => 
              array (
                'description' => '调用是否成功。true：表示成功；false：表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回值,即问题分类列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回值,即问题分类列表',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CategoryName' => 
                    array (
                      'description' => '工单问题分类名称',
                      'type' => 'string',
                      'example' => 'ECS',
                    ),
                    'CategoryId' => 
                    array (
                      'description' => '工单问题分类ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '7161',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.error',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"CA6204AC-6AA9-4CFA-9310-7DFD20C19EBC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": [\\n    {\\n      \\"CategoryName\\": \\"ECS\\",\\n      \\"CategoryId\\": 7161\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取指定产品下的类别',
      'summary' => '获取工单问题分类列表数据。',
    ),
    'GetMqConsumerTag' => 
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
        1 => 
        array (
          'APP' => 
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
                'description' => '接口请求结果返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息, 当success=false的时候, 可以取到message
',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'description' => '返回值,即你的唯一的mq消费的tag',
                'type' => 'string',
                'example' => '46434030',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一识别码',
                'type' => 'string',
                'example' => 'CA6204AC-6AA9-4CFA-9310-7DFD20C19EBC',
              ),
              'Success' => 
              array (
                'description' => '调用是否成功。true：表示成功；false：表示失败。
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'param.illegal',
            'errorMessage' => 'Params illegal.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'illegal.auth',
            'errorMessage' => 'You are not authorized to perform the operation.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.error',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": \\"46434030\\",\\n  \\"RequestId\\": \\"CA6204AC-6AA9-4CFA-9310-7DFD20C19EBC\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '获取工单RocketMQ消息监听的TAG',
      'summary' => '获取工单RocketMQ消息监听的TAG。',
    ),
    'ReopenTicket' => 
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
        1 => 
        array (
          'APP' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TicketId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工单编号',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0005PYGCW',
          ),
        ),
        1 => 
        array (
          'name' => 'Content',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '重开工单回复内容',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '还没有解决问题',
          ),
        ),
        2 => 
        array (
          'name' => 'Uid',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'UID',
            'type' => 'string',
            'required' => false,
            'example' => '1013872004421947',
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
                'description' => '接口请求结果返回码
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息, 当success=false的时候, 可以取到message
',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'description' => '调用成功后返回的业务数据。',
                'type' => 'string',
                'example' => '0005PYGCW',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'C1DA4C6F-963E-5741-AB57-67A554D102FD',
              ),
              'Success' => 
              array (
                'description' => '调用接口返回是否成功, true代表调用正常
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'param.illegal',
            'errorMessage' => 'Params illegal.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'illegal.auth',
            'errorMessage' => 'You are not authorized to perform the operation.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.error',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": \\"0005PYGCW\\",\\n  \\"RequestId\\": \\"C1DA4C6F-963E-5741-AB57-67A554D102FD\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '重开工单',
      'summary' => '重开工单。',
    ),
    'GetAttachmentUploadUrl' => 
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
        1 => 
        array (
          'APP' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '上传文件的名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '81A0D93D-54D7-4529-ABFA-633ED63223BA.jpg',
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
                'description' => '状态码
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息, 当success=false的时候, 可以取到message
',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'ED195C2C-787F-511C-8204-714456781861',
              ),
              'Success' => 
              array (
                'description' => '调用接口返回是否成功, true代表调用正常
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '调用成功后返回的业务数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'ObjectKey' => 
                  array (
                    'description' => '已上传的文件标识符',
                    'type' => 'string',
                    'example' => 'cdb5d174-c282-4b2d-9048-e74ea2223127.jpg',
                  ),
                  'PutSignedUrl' => 
                  array (
                    'description' => '上传OSS文件的签名URL',
                    'type' => 'string',
                    'example' => 'https://workorder.oss-cn-beijing.aliyuncs.com
/20220314/cabb80c3-430b-4079-a9f2-d2a0d1c2a587.png?Expires=1647328689&OSSAccessKeyId=LTAI4FrZPa9N1nG****&Signature=AbSEh26G3oYrJ8ivr4B0xzF89zk%3D',
                  ),
                  'GetSignedUrl' => 
                  array (
                    'description' => '查询OSS文件的签名URL',
                    'type' => 'string',
                    'example' => 'https://workorder.oss-cn-beijing.aliyuncs.com
/20220314/cabb80c3-430b-4079-a9f2-d2a0d1c2a587.png?Expires=1647328689&OSSAccessKeyId=LTAI4FrZPa9N1nGW****&Signature=AbSEh26G3oYrJ8ivr4B0xzF89zk%3D',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.error',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"ED195C2C-787F-511C-8204-714456781861\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"ObjectKey\\": \\"cdb5d174-c282-4b2d-9048-e74ea2223127.jpg\\",\\n    \\"PutSignedUrl\\": \\"https://workorder.oss-cn-beijing.aliyuncs.com\\\\n/20220314/cabb80c3-430b-4079-a9f2-d2a0d1c2a587.png?Expires=1647328689&OSSAccessKeyId=LTAI4FrZPa9N1nG****&Signature=AbSEh26G3oYrJ8ivr4B0xzF89zk%3D\\",\\n    \\"GetSignedUrl\\": \\"https://workorder.oss-cn-beijing.aliyuncs.com\\\\n/20220314/cabb80c3-430b-4079-a9f2-d2a0d1c2a587.png?Expires=1647328689&OSSAccessKeyId=LTAI4FrZPa9N1nGW****&Signature=AbSEh26G3oYrJ8ivr4B0xzF89zk%3D\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询附件上传OSS地址',
      'summary' => '查询附件上传OSS地址。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'workorder.ap-northeast-1.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'workorder.ap-southeast-1.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'ap-northeast-2-pop',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-beijing-finance-pop',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-beijing-gov-1',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-beijing-nu16-b01',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-edge-1',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-fujian',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-haidian-cm12-c01',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-hangzhou-bj-b01',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'cn-hangzhou-internal-prod-1',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-1',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-2',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-3',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-hangzhou-test-306',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-hongkong-finance-pop',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-qingdao-nebula',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'cn-shanghai-et15-b01',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-shanghai-et2-b01',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    33 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    34 => 
    array (
      'regionId' => 'cn-shanghai-inner',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    35 => 
    array (
      'regionId' => 'cn-shanghai-internal-test-1',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    36 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    37 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    38 => 
    array (
      'regionId' => 'cn-shenzhen-inner',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    39 => 
    array (
      'regionId' => 'cn-shenzhen-st4-d01',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    40 => 
    array (
      'regionId' => 'cn-shenzhen-su18-b01',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    41 => 
    array (
      'regionId' => 'cn-wuhan',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    42 => 
    array (
      'regionId' => 'cn-yushanfang',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    43 => 
    array (
      'regionId' => 'cn-zhangbei-na61-b01',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    44 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    45 => 
    array (
      'regionId' => 'cn-zhangjiakou-na62-a01',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    46 => 
    array (
      'regionId' => 'cn-zhengzhou-nebula-1',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    47 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    48 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    49 => 
    array (
      'regionId' => 'eu-west-1-oxs',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    50 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    51 => 
    array (
      'regionId' => 'rus-west-1-pop',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    52 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
    53 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'workorder.aliyuncs.com',
    ),
  ),
);
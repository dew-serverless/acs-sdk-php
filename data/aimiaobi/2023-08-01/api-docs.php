<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'AiMiaoBi',
    'version' => '2023-08-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 188859,
      'title' => '通用接口',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 188959,
          'title' => '文件上传下载',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'GenerateUploadConfig',
            1 => 'GenerateFileUrlByKey',
          ),
        ),
        1 => 
        array (
          'id' => 188899,
          'title' => '异步任务管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'SubmitAsyncTask',
            1 => 'CancelAsyncTask',
            2 => 'QueryAsyncTask',
            3 => 'ListAsyncTasks',
          ),
        ),
        2 => 'CreateToken',
        3 => 'ListDialogues',
        4 => 'ListVersions',
        5 => 'GetProperties',
      ),
    ),
    1 => 
    array (
      'id' => 188905,
      'title' => '创作文章',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SearchNews',
        1 => 'ListBuildConfigs',
        2 => 'GenerateImageTask',
        3 => 'FetchImageTask',
        4 => 'FeedbackDialogue',
      ),
    ),
    2 => 
    array (
      'id' => 188909,
      'title' => '选题热点',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListHotNewsWithType',
        1 => 'GenerateViewPoint',
      ),
    ),
    3 => 
    array (
      'id' => 188911,
      'title' => '素材库',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SaveMaterialDocument',
        1 => 'DeleteMaterialById',
        2 => 'UpdateMaterialDocument',
        3 => 'GetMaterialById',
        4 => 'ListMaterialDocuments',
      ),
    ),
    4 => 
    array (
      'id' => 192334,
      'title' => '自定义文本',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetCustomText',
        1 => 'UpdateCustomText',
        2 => 'ListCustomText',
        3 => 'SaveCustomText',
        4 => 'DeleteCustomText',
      ),
    ),
    5 => 
    array (
      'id' => 188860,
      'title' => '文档管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateGeneratedContent',
        1 => 'DeleteGeneratedContent',
        2 => 'UpdateGeneratedContent',
        3 => 'GetGeneratedContent',
        4 => 'ListGeneratedContents',
        5 => 'ExportGeneratedContent',
      ),
    ),
    6 => 
    array (
      'id' => 188922,
      'title' => '系统配置',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 190430,
          'title' => '干预配置',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListInterveneCnt',
            1 => 'ListIntervenes',
            2 => 'ImportInterveneFile',
            3 => 'InsertInterveneGlobalReply',
            4 => 'ImportInterveneFileAsync',
            5 => 'GetInterveneTemplateFileUrl',
            6 => 'ClearIntervenes',
            7 => 'GetInterveneGlobalReply',
            8 => 'ListInterveneRules',
            9 => 'ListInterveneImportTasks',
            10 => 'InsertInterveneRule',
            11 => 'GetInterveneRuleDetail',
            12 => 'DeleteInterveneRule',
            13 => 'ExportIntervenes',
            14 => 'GetInterveneImportTaskInfo',
          ),
        ),
        1 => 'SaveDataSourceOrderConfig',
        2 => 'GetDataSourceOrderConfig',
      ),
    ),
    7 => 
    array (
      'id' => 193347,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DocumentExtraction',
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
    'GenerateUploadConfig' => 
    array (
      'summary' => '生成上传配置。',
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
        'operationType' => 'create',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxxx_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'FileName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '文件名称',
            'description' => '文件名称',
            'type' => 'string',
            'required' => false,
            'example' => 'test.docx',
          ),
        ),
        2 => 
        array (
          'name' => 'ParentDir',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '父目录 (materialDocument: 素材库, intervenes: 干预上传, temp: 临时上传目录, imageGenerate: 图像生成, datasetUpload: 数据集上传)',
            'description' => '父目录 (materialDocument: 素材库, intervenes: 干预上传, temp: 临时上传目录, imageGenerate: 图像生成, datasetUpload: 数据集上传)',
            'type' => 'string',
            'required' => true,
            'example' => 'datasetUpload',
            'enum' => 
            array (
              0 => 'materialDocument',
              1 => 'intervenes',
              2 => 'temp',
              3 => 'imageGenerate',
              4 => 'datasetUpload',
            ),
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<UploadConfig>',
            'description' => 'PlainResult<UploadConfig>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '1813ceee-7fe5-41b4-87e5-982a4d18cca5',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'NoData',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'PostUrl' => 
                  array (
                    'title' => '如果这个为空则 postUrl 为上传服务的上传地址',
                    'description' => '如果这个为空则 postUrl 为上传服务的上传地址',
                    'type' => 'string',
                    'example' => 'https://bucket-name.oss-cn-hangzhou.aliyuncs.com',
                  ),
                  'FileKey' => 
                  array (
                    'title' => '系统内唯一标识',
                    'description' => '系统内唯一标识',
                    'type' => 'string',
                    'example' => 'oss://default/oss-bucket-name/aimiaobi/2021/07/01/1625126400000/1.docx',
                  ),
                  'FormDatas' => 
                  array (
                    'title' => '表单提交数据',
                    'description' => '表单提交数据',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'any',
                      'example' => '{}',
                      'description' => '表单提交的Item',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1813ceee-7fe5-41b4-87e5-982a4d18cca5\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"NoData\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"PostUrl\\": \\"https://bucket-name.oss-cn-hangzhou.aliyuncs.com\\",\\n    \\"FileKey\\": \\"oss://default/oss-bucket-name/aimiaobi/2021/07/01/1625126400000/1.docx\\",\\n    \\"FormDatas\\": {\\n      \\"key\\": \\"{}\\"\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '生成上传配置',
    ),
    'GenerateFileUrlByKey' => 
    array (
      'summary' => '生成临时可访问的公开url。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxxx_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'FileKey',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '文件key。格式为：protocol://serverInstance/bucketPath/fileKey',
            'description' => '文件key。格式为：protocol://serverInstance/bucketPath/fileKey',
            'type' => 'string',
            'required' => false,
            'example' => 'oss://default/oss-bucket-name/aimiaobi/2021/07/01/1625126400000/1.docx',
          ),
        ),
        2 => 
        array (
          'name' => 'FileName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件名称',
            'type' => 'string',
            'required' => false,
            'example' => 'test.docx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<URL>',
            'description' => 'PlainResult<URL>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '1813ceee-7fe5-41b4-87e5-982a4d18cca5',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'NoData',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'string',
                'example' => 'https://www.example.com/a.txt',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1813ceee-7fe5-41b4-87e5-982a4d18cca5\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"NoData\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": \\"https://www.example.com/a.txt\\"\\n}","type":"json"}]',
      'title' => '生成文件URL',
    ),
    'SubmitAsyncTask' => 
    array (
      'summary' => '执行系统预定义的异步任务。',
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
        'operationType' => 'create',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => '2daaa2e0c209xb26acb97009ea77bd4b_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '任务名称',
            'description' => '任务名称定义',
            'type' => 'string',
            'required' => false,
            'example' => '任务名称',
          ),
        ),
        2 => 
        array (
          'name' => 'TaskCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '任务定义，可选值:MaterialDocumentUpload:素材上传',
            'description' => '任务定义：详见任务定义表',
            'type' => 'string',
            'required' => true,
            'example' => 'MaterialDocumentUpload',
          ),
        ),
        3 => 
        array (
          'name' => 'TaskParam',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '任务提交参数',
            'description' => '任务提交参数',
            'type' => 'string',
            'required' => false,
            'example' => '{"fileUrl":"https://www.example.com/aaa.doc","fileName":"文件名称","shareAttr":1}',
          ),
        ),
        4 => 
        array (
          'name' => 'TaskExecuteTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '任务执行时间，默认立即执行。格式：YYYY-MM-DD HH:mm:ss',
            'description' => '任务执行时间，默认立即执行。格式：YYYY-MM-DD HH:mm:ss',
            'type' => 'string',
            'required' => false,
            'example' => '2023-10-14 14:30:00',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<SubmitTaskResult>',
            'description' => 'PlainResult<SubmitTaskResult>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'DataNotExists',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => '数据不存在',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'TaskId' => 
                  array (
                    'title' => '任务唯一ID',
                    'description' => '任务唯一ID',
                    'type' => 'string',
                    'example' => '3f7045e099474ba28ceca1b4eb6d6e21
',
                  ),
                  'TaskName' => 
                  array (
                    'title' => '任务名称',
                    'description' => '任务名称',
                    'type' => 'string',
                    'example' => '任务名称',
                  ),
                  'TaskIntermediateResult' => 
                  array (
                    'title' => '中间结果',
                    'description' => '中间结果',
                    'type' => 'any',
                    'example' => '{}',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"DataNotExists\\",\\n  \\"Message\\": \\"数据不存在\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"TaskId\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\\\n\\",\\n    \\"TaskName\\": \\"任务名称\\",\\n    \\"TaskIntermediateResult\\": \\"{}\\"\\n  }\\n}","type":"json"}]',
      'title' => '提交异步任务',
    ),
    'CancelAsyncTask' => 
    array (
      'summary' => '取消异步任务。',
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
        'operationType' => 'update',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'c160c841c8e54295bf2f441432785944_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '任务唯一ID',
            'description' => '任务唯一ID',
            'type' => 'string',
            'required' => false,
            'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => '返回任务是否取消成功',
            'description' => '返回任务是否取消成功',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => 'FB698445-61DA-5361-BF73-1C5F1157E888',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'Success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FB698445-61DA-5361-BF73-1C5F1157E888\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": true\\n}","type":"json"}]',
      'title' => '取消异步任务',
    ),
    'QueryAsyncTask' => 
    array (
      'summary' => '查询异步任务明细。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => '33a2658aaabf4c24b45d50e575125311_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '任务唯一ID',
            'description' => '任务唯一ID',
            'type' => 'string',
            'required' => false,
            'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<AsyncTaskDO>',
            'description' => 'PlainResult<AsyncTaskDO>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '867C4ABE-4381-5BC2-9810-5A5F334F71CF',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'TaskId' => 
                  array (
                    'title' => '唯一任务ID',
                    'description' => '唯一任务ID',
                    'type' => 'string',
                    'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
                  ),
                  'TaskName' => 
                  array (
                    'title' => '任务名',
                    'description' => '任务名',
                    'type' => 'string',
                    'example' => '任务名称',
                  ),
                  'TaskCode' => 
                  array (
                    'title' => '任务标识，标识为哪一个任务',
                    'description' => '任务标识，标识为哪一个任务',
                    'type' => 'string',
                    'example' => 'MaterialDocumentUpload',
                  ),
                  'TaskParam' => 
                  array (
                    'title' => '任务执行输入参数，JSON格式',
                    'description' => '任务执行输入参数，JSON格式',
                    'type' => 'string',
                    'example' => '{"fileKey":"oss://default/xxxx/xxxx/xxx","fileName":"xxxxx.doc"}',
                  ),
                  'TaskIntermediateResult' => 
                  array (
                    'title' => '任务中间执行结果，当一个任务可分成多步骤时，每个步骤的输出，可保存在这里。后续从暂停中恢复可以读取中间结果，从中间结果继续',
                    'description' => '任务中间执行结果，当一个任务可分成多步骤时，每个步骤的输出，可保存在这里。后续从暂停中恢复可以读取中间结果，从中间结果继续',
                    'type' => 'string',
                    'example' => '{}',
                  ),
                  'TaskStatus' => 
                  array (
                    'title' => '任务执行状态，0-待执行、1-执行中、2-执行成功、3-暂停、4-执行失败-可重试、5-执行失败-不可重试,6-任务取消',
                    'description' => '任务执行状态，0-待执行、1-执行中、2-执行成功、3-暂停、4-执行失败-可重试、5-执行失败-不可重试,6-任务取消',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'TaskErrorMessage' => 
                  array (
                    'title' => '任务执行错误消息',
                    'description' => '任务执行错误消息',
                    'type' => 'string',
                    'example' => 'error',
                  ),
                  'TaskProgressMessage' => 
                  array (
                    'title' => '任务执行进度信息',
                    'description' => '任务执行进度信息',
                    'type' => 'string',
                    'example' => '{}',
                  ),
                  'TaskResult' => 
                  array (
                    'title' => '任务执行结果信息',
                    'description' => '任务执行结果信息',
                    'type' => 'string',
                    'example' => '{}',
                  ),
                  'TaskRetryCount' => 
                  array (
                    'title' => '任务已经重试的次数',
                    'description' => '任务已经重试的次数',
                    'type' => 'string',
                    'example' => '3',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '创建日期',
                    'description' => '创建日期',
                    'type' => 'string',
                    'example' => '2021-07-25 14:34:33',
                  ),
                  'CreateUser' => 
                  array (
                    'title' => '创建者',
                    'description' => '创建者',
                    'type' => 'string',
                    'example' => '12121
',
                  ),
                  'UpdateTime' => 
                  array (
                    'title' => '更新日期',
                    'description' => '更新日期',
                    'type' => 'string',
                    'example' => '2023-04-27 18:07:43',
                  ),
                  'UpdateUser' => 
                  array (
                    'title' => '更新者',
                    'description' => '更新者',
                    'type' => 'string',
                    'example' => '12121',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"867C4ABE-4381-5BC2-9810-5A5F334F71CF\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"TaskId\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\",\\n    \\"TaskName\\": \\"任务名称\\",\\n    \\"TaskCode\\": \\"MaterialDocumentUpload\\",\\n    \\"TaskParam\\": \\"{\\\\\\"fileKey\\\\\\":\\\\\\"oss://default/xxxx/xxxx/xxx\\\\\\",\\\\\\"fileName\\\\\\":\\\\\\"xxxxx.doc\\\\\\"}\\",\\n    \\"TaskIntermediateResult\\": \\"{}\\",\\n    \\"TaskStatus\\": 1,\\n    \\"TaskErrorMessage\\": \\"error\\",\\n    \\"TaskProgressMessage\\": \\"{}\\",\\n    \\"TaskResult\\": \\"{}\\",\\n    \\"TaskRetryCount\\": \\"3\\",\\n    \\"CreateTime\\": \\"2021-07-25 14:34:33\\",\\n    \\"CreateUser\\": \\"12121\\\\n\\",\\n    \\"UpdateTime\\": \\"2023-04-27 18:07:43\\",\\n    \\"UpdateUser\\": \\"12121\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询异步任务明细',
    ),
    'ListAsyncTasks' => 
    array (
      'summary' => '获取异步任务列表。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'cd327c3d5d5e44159cc716e23bfa530e_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '任务名称精确查询',
            'description' => '任务名称精确查询',
            'type' => 'string',
            'required' => false,
            'example' => '任务名称',
          ),
        ),
        2 => 
        array (
          'name' => 'TaskCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '任务Code精确查询',
            'description' => '任务Code精确查询',
            'type' => 'string',
            'required' => false,
            'example' => 'MaterialDocumentUpload',
          ),
        ),
        3 => 
        array (
          'name' => 'TaskType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '任务类型精确查询',
            'description' => '任务类型精确查询',
            'type' => 'string',
            'required' => false,
            'example' => '暂无',
          ),
        ),
        4 => 
        array (
          'name' => 'TaskStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '任务状态精确查询 (0: 待执行, 1: 执行中, 2: 成功, 3: 暂停, 4: 失败可重试, 5: 失败不可重试, 6: 取消)',
            'description' => '任务状态精确查询 (0: 待执行, 1: 执行中, 2: 成功, 3: 暂停, 4: 失败可重试, 5: 失败不可重试, 6: 取消)',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
              2 => '2',
              3 => '3',
              4 => '4',
              5 => '5',
              6 => '6',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'TaskStatusList',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '任务状态列表精确查询 (0: 待执行, 1: 执行中, 2: 成功, 3: 暂停, 4: 失败可重试, 5: 失败不可重试, 6: 取消)',
            'description' => '任务状态列表精确查询 (0: 待执行, 1: 执行中, 2: 成功, 3: 暂停, 4: 失败可重试, 5: 失败不可重试, 6: 取消)',
            'type' => 'array',
            'items' => 
            array (
              'title' => '任务状态',
              'description' => '任务状态',
              'type' => 'integer',
              'format' => 'int32',
              'required' => false,
              'example' => '1',
              'enum' => 
              array (
                0 => '0',
                1 => '1',
                2 => '2',
                3 => '3',
                4 => '4',
                5 => '5',
                6 => '6',
              ),
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'TaskTypeList',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '任务类型列表精确查询',
            'description' => '任务类型列表精确查询',
            'type' => 'array',
            'items' => 
            array (
              'title' => '任务分类',
              'description' => '任务分类',
              'type' => 'string',
              'required' => false,
              'example' => 'test',
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'CreateTimeStart',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '任务创建时间 开始查询,格式为：YYYY-MM-DD HH:mm:ss',
            'description' => '任务创建时间 开始查询,格式为：YYYY-MM-DD HH:mm:ss',
            'type' => 'string',
            'required' => false,
            'example' => '2023-02-19 07:28:11',
          ),
        ),
        8 => 
        array (
          'name' => 'CreateTimeEnd',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '任务创建时间 结束查询,格式为：YYYY-MM-DD HH:mm:ss',
            'description' => '任务创建时间 结束查询,格式为：YYYY-MM-DD HH:mm:ss',
            'type' => 'string',
            'required' => false,
            'example' => '2023-03-18 02:00:00',
          ),
        ),
        9 => 
        array (
          'name' => 'Current',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '当前页码',
            'description' => '当前页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        10 => 
        array (
          'name' => 'Size',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页条数：默认10',
            'description' => '每页条数：默认10',
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
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PageResult<AsyncTask>',
            'description' => 'PageResult<AsyncTask>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回的数据内容。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '任务列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'description' => '任务主键ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'TaskId' => 
                    array (
                      'title' => '唯一任务ID，作用等价于id',
                      'description' => '唯一任务ID，作用等价于id',
                      'type' => 'string',
                      'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
                    ),
                    'TaskName' => 
                    array (
                      'title' => '任务名',
                      'description' => '任务名',
                      'type' => 'string',
                      'example' => '任务名',
                    ),
                    'TaskCode' => 
                    array (
                      'title' => '任务标识，标识为哪一个任务',
                      'description' => '任务标识，标识为哪一个任务',
                      'type' => 'string',
                      'example' => 'MaterialDocumentUpload',
                    ),
                    'TaskType' => 
                    array (
                      'title' => '任务分类,多个任务分类一逗号分隔',
                      'description' => '任务分类,多个任务分类一逗号分隔',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'TaskDefinition' => 
                    array (
                      'title' => '可选的任务定义配置，JSON格式,这里的参数会覆盖系统配置的定义 详见：com.alibaba.tongyi.enterprise.aimiaobi.asynctask.entities.AsyncTaskDefinition',
                      'description' => '可选的任务定义配置，JSON格式,这里的参数会覆盖系统配置的定义',
                      'type' => 'string',
                      'example' => '{}',
                    ),
                    'TaskParam' => 
                    array (
                      'title' => '任务执行输入参数，JSON格式',
                      'description' => '任务执行输入参数，JSON格式',
                      'type' => 'string',
                      'example' => '{}',
                    ),
                    'TaskExecuteTime' => 
                    array (
                      'title' => '任务执行时间，只会轮询任务到期可执行的任务、为空表示立即执行',
                      'description' => '任务执行时间，只会轮询任务到期可执行的任务、为空表示立即执行',
                      'type' => 'string',
                      'example' => '2023-10-14 14:30:00',
                    ),
                    'TaskStartTime' => 
                    array (
                      'title' => '任务实际开始时间',
                      'description' => '任务实际开始时间',
                      'type' => 'string',
                      'example' => '2023-03-20 10:53:00',
                    ),
                    'TaskEndTime' => 
                    array (
                      'title' => '任务实际结束时间',
                      'description' => '任务实际结束时间',
                      'type' => 'string',
                      'example' => '2023-03-09 00:00:00',
                    ),
                    'TaskIntermediateResult' => 
                    array (
                      'title' => '任务中间执行结果，当一个任务可分成多步骤时，每个步骤的输出，可保存在这里。后续从暂停中恢复可以读取中间结果，从中间结果继续',
                      'description' => '任务中间执行结果，当一个任务可分成多步骤时，每个步骤的输出，可保存在这里。后续从暂停中恢复可以读取中间结果，从中间结果继续',
                      'type' => 'string',
                      'example' => '{}',
                    ),
                    'TaskStatus' => 
                    array (
                      'title' => '任务执行状态，0-待执行、1-执行中、2-执行成功、3-暂停、4-执行失败-可重试、5-执行失败-不可重试,6-任务取消',
                      'description' => '任务执行状态，0-待执行、1-执行中、2-执行成功、3-暂停、4-执行失败-可重试、5-执行失败-不可重试,6-任务取消',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'TaskErrorMessage' => 
                    array (
                      'title' => '任务执行错误消息-供客户端查看',
                      'description' => '任务执行错误消息-供客户端查看',
                      'type' => 'string',
                      'example' => '系统内部错误',
                    ),
                    'TaskInnerErrorMessage' => 
                    array (
                      'title' => '任务内部的执行错误消息,一些异常栈、内部线程栈等敏感信息打印在这里',
                      'description' => '任务内部的执行错误消息,一些异常栈、内部线程栈等敏感信息打印在这里',
                      'type' => 'string',
                      'example' => '系统错误',
                    ),
                    'TaskProgressMessage' => 
                    array (
                      'title' => '任务执行进度信息',
                      'description' => '任务执行进度信息',
                      'type' => 'string',
                      'example' => '{}',
                    ),
                    'TaskResult' => 
                    array (
                      'title' => '任务执行结果信息',
                      'description' => '任务执行结果信息',
                      'type' => 'string',
                      'example' => '{}',
                    ),
                    'TaskRetryCount' => 
                    array (
                      'title' => '任务已经重试的次数',
                      'description' => '任务已经重试的次数',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建日期',
                      'description' => '创建日期',
                      'type' => 'string',
                      'example' => '2020-12-23 15:41:58',
                    ),
                    'CreateUser' => 
                    array (
                      'title' => '创建者',
                      'description' => '创建者',
                      'type' => 'string',
                      'example' => '1111',
                    ),
                    'UpdateTime' => 
                    array (
                      'title' => '更新日期',
                      'description' => '更新日期',
                      'type' => 'string',
                      'example' => '2023-02-16 10:29:16',
                    ),
                    'UpdateUser' => 
                    array (
                      'title' => '更新者',
                      'description' => '更新者',
                      'type' => 'string',
                      'example' => '111',
                    ),
                  ),
                ),
              ),
              'Current' => 
              array (
                'description' => '当前页。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Size' => 
              array (
                'description' => '每页记录数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Total' => 
              array (
                'description' => '总记录数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '428DCC0D-3C63-5306-BD1B-124396AB97BE',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => '错误',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
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
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"Id\\": 1,\\n      \\"TaskId\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\",\\n      \\"TaskName\\": \\"任务名\\",\\n      \\"TaskCode\\": \\"MaterialDocumentUpload\\",\\n      \\"TaskType\\": \\"test\\",\\n      \\"TaskDefinition\\": \\"{}\\",\\n      \\"TaskParam\\": \\"{}\\",\\n      \\"TaskExecuteTime\\": \\"2023-10-14 14:30:00\\",\\n      \\"TaskStartTime\\": \\"2023-03-20 10:53:00\\",\\n      \\"TaskEndTime\\": \\"2023-03-09 00:00:00\\",\\n      \\"TaskIntermediateResult\\": \\"{}\\",\\n      \\"TaskStatus\\": 1,\\n      \\"TaskErrorMessage\\": \\"系统内部错误\\",\\n      \\"TaskInnerErrorMessage\\": \\"系统错误\\",\\n      \\"TaskProgressMessage\\": \\"{}\\",\\n      \\"TaskResult\\": \\"{}\\",\\n      \\"TaskRetryCount\\": \\"1\\",\\n      \\"CreateTime\\": \\"2020-12-23 15:41:58\\",\\n      \\"CreateUser\\": \\"1111\\",\\n      \\"UpdateTime\\": \\"2023-02-16 10:29:16\\",\\n      \\"UpdateUser\\": \\"111\\"\\n    }\\n  ],\\n  \\"Current\\": 1,\\n  \\"Size\\": 10,\\n  \\"Total\\": 20,\\n  \\"RequestId\\": \\"428DCC0D-3C63-5306-BD1B-124396AB97BE\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"错误\\",\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '获取异步任务列表',
    ),
    'CreateToken' => 
    array (
      'summary' => '获取授权token。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => '2daaa2e0c209xb26acb97009ea77bd4b_p_efm',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<AccessTokenInfo>',
            'description' => 'PlainResult<AccessTokenInfo>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '1813ceee-7fe5-41b4-87e5-982a4d18cca5',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'NoData',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'Token' => 
                  array (
                    'title' => '访问授权码',
                    'description' => '访问授权码',
                    'type' => 'string',
                    'example' => '1813ceee-7fe5-41b4-87e5-982a4d18cca5',
                  ),
                  'ExpiredTime' => 
                  array (
                    'title' => '有效期',
                    'description' => '有效期',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1705388704855',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1813ceee-7fe5-41b4-87e5-982a4d18cca5\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"NoData\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"Token\\": \\"1813ceee-7fe5-41b4-87e5-982a4d18cca5\\",\\n    \\"ExpiredTime\\": 1705388704855\\n  }\\n}","type":"json"}]',
      'title' => '获取授权token',
    ),
    'ListDialogues' => 
    array (
      'summary' => '生成历史列表。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxxx_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '任务唯一标识',
            'description' => '任务唯一标识',
            'type' => 'string',
            'required' => false,
            'example' => 'xxx',
            'maxLength' => 64,
            'minLength' => 6,
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '开始时间',
            'description' => '开始时间',
            'type' => 'string',
            'required' => false,
            'example' => '2024-01-04 11:46:07',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '结束时间',
            'description' => '结束时间',
            'type' => 'string',
            'required' => false,
            'example' => '2024-01-04 11:46:07',
          ),
        ),
        4 => 
        array (
          'name' => 'DialogueType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '生成类型：1：创作；2：智搜（默认）',
            'description' => '生成类型：1：创作；2：智搜（默认）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
            'default' => '2',
            'enum' => 
            array (
              0 => '1',
              1 => '2',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'Current',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '当前页码',
            'description' => '当前页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'Size',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页条数：默认10',
            'description' => '每页条数：默认10',
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
          'description' => '成功',
          'schema' => 
          array (
            'title' => '响应结果',
            'description' => '响应结果',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '生成历史列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '生成历史',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'User' => 
                    array (
                      'title' => '用户输入',
                      'description' => '用户输入',
                      'type' => 'string',
                      'example' => 'x',
                    ),
                    'Bot' => 
                    array (
                      'title' => '模型生成',
                      'description' => '模型生成',
                      'type' => 'string',
                      'example' => 'xx',
                    ),
                    'TaskId' => 
                    array (
                      'title' => '任务ID',
                      'description' => '任务ID',
                      'type' => 'string',
                      'example' => 'xx',
                    ),
                    'DialogueType' => 
                    array (
                      'title' => '生成类型：1：创作；2：智搜（默认）',
                      'description' => '生成类型：1：创作；2：智搜（默认）',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建日期',
                      'description' => '创建日期',
                      'type' => 'string',
                      'example' => '2024-01-04 11:46:07',
                    ),
                    'CreateUser' => 
                    array (
                      'title' => '创建者',
                      'description' => '创建者',
                      'type' => 'string',
                      'example' => 'xx',
                    ),
                  ),
                ),
              ),
              'Current' => 
              array (
                'description' => '当前页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Size' => 
              array (
                'description' => '每页记录数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Total' => 
              array (
                'description' => '总记录数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '1813ceee-7fe5-41b4-87e5-982a4d18cca5',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'NoData',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
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
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"User\\": \\"x\\",\\n      \\"Bot\\": \\"xx\\",\\n      \\"TaskId\\": \\"xx\\",\\n      \\"DialogueType\\": 2,\\n      \\"CreateTime\\": \\"2024-01-04 11:46:07\\",\\n      \\"CreateUser\\": \\"xx\\"\\n    }\\n  ],\\n  \\"Current\\": 1,\\n  \\"Size\\": 10,\\n  \\"Total\\": 100,\\n  \\"RequestId\\": \\"1813ceee-7fe5-41b4-87e5-982a4d18cca5\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"NoData\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '生成历史列表',
    ),
    'ListVersions' => 
    array (
      'summary' => '获取版本信息。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => '33a2658aaabf4c24b45d50e575125311_p_beebot_public',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult',
            'description' => 'PlainResult',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'DataNotExists',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => '数据不存在',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '列表对象',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'InstanceId' => 
                    array (
                      'title' => '实例ID',
                      'description' => '实例ID',
                      'type' => 'string',
                      'example' => 'ga-bp12pismsw4v3tzhf62p1',
                    ),
                    'OrderId' => 
                    array (
                      'title' => '订单ID',
                      'description' => '订单ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '7',
                    ),
                    'VersionName' => 
                    array (
                      'title' => '版本',
                      'description' => '版本',
                      'type' => 'string',
                      'example' => '试用版',
                      'enum' => 
                      array (
                        0 => '试用版',
                        1 => '专业版',
                        2 => '定制版',
                      ),
                    ),
                    'VersionDetail' => 
                    array (
                      'title' => '版本明细',
                      'description' => '版本明细',
                      'type' => 'string',
                      'example' => '标准版-公共并发：1并发',
                    ),
                    'ProductType' => 
                    array (
                      'title' => '版本类型 (TRIAL: 试用版, STANDARD: 专业版, CUSTOMIZE: 定制版)',
                      'description' => '版本类型 (TRIAL: 试用版, STANDARD: 专业版, CUSTOMIZE: 定制版)',
                      'type' => 'string',
                      'example' => 'CUSTOMIZE',
                      'enum' => 
                      array (
                        0 => 'TRIAL',
                        1 => 'STANDARD',
                        2 => 'CUSTOMIZE',
                      ),
                    ),
                    'ConcurrentCount' => 
                    array (
                      'title' => '并发数',
                      'description' => '并发数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '43',
                    ),
                    'InstanceCount' => 
                    array (
                      'title' => '实例数',
                      'description' => '实例数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '55',
                    ),
                    'StartTime' => 
                    array (
                      'title' => '服务开始时间',
                      'description' => '服务开始时间',
                      'type' => 'string',
                      'example' => '2023-05-27 04:11:00',
                    ),
                    'EndTime' => 
                    array (
                      'title' => '服务到期时间',
                      'description' => '服务到期时间',
                      'type' => 'string',
                      'example' => '2023-04-23 02:00:34',
                    ),
                    'VersionStatus' => 
                    array (
                      'title' => '有效状态：0-表示有效、1-版本过期-续费页、2-版本不可用-购买页',
                      'description' => '有效状态：0-表示有效、1-版本过期-续费页、2-版本不可用-购买页',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '87',
                    ),
                    'Quota' => 
                    array (
                      'title' => '试用版限额次数',
                      'description' => '试用版限额次数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '13',
                    ),
                    'UseQuota' => 
                    array (
                      'title' => '试用版已使用次数',
                      'description' => '试用版已使用次数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '65',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"DataNotExists\\",\\n  \\"Message\\": \\"数据不存在\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": [\\n    {\\n      \\"InstanceId\\": \\"ga-bp12pismsw4v3tzhf62p1\\",\\n      \\"OrderId\\": 7,\\n      \\"VersionName\\": \\"试用版\\",\\n      \\"VersionDetail\\": \\"标准版-公共并发：1并发\\",\\n      \\"ProductType\\": \\"CUSTOMIZE\\",\\n      \\"ConcurrentCount\\": 43,\\n      \\"InstanceCount\\": 55,\\n      \\"StartTime\\": \\"2023-05-27 04:11:00\\",\\n      \\"EndTime\\": \\"2023-04-23 02:00:34\\",\\n      \\"VersionStatus\\": 87,\\n      \\"Quota\\": 13,\\n      \\"UseQuota\\": 65\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取版本信息',
    ),
    'GetProperties' => 
    array (
      'summary' => '获取配置信息。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'xxx_efm',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<TongYiLlmPropertiesDO>',
            'description' => 'PlainResult<TongYiLlmPropertiesDO>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'DataNotExists',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => '数据不存在',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'SearchSources' => 
                  array (
                    'title' => '搜索源',
                    'description' => '搜索源下拉列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '搜索源',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Value' => 
                        array (
                          'title' => '下拉列表的传递值',
                          'description' => '搜索源code',
                          'type' => 'string',
                          'example' => 'SystemSearch',
                        ),
                        'Label' => 
                        array (
                          'title' => '下拉列表的展示值',
                          'description' => '搜索源名称',
                          'type' => 'string',
                          'example' => '夸克通用搜索',
                        ),
                      ),
                    ),
                  ),
                  'GeneralConfigMap' => 
                  array (
                    'title' => '通用配置表',
                    'description' => '通用配置表',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'any',
                      'example' => 'tongyi.xxx',
                      'description' => '配置key',
                    ),
                  ),
                  'UserInfo' => 
                  array (
                    'title' => '用户配置',
                    'description' => '用户配置',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'UserId' => 
                      array (
                        'title' => '用户id',
                        'description' => '用户id',
                        'type' => 'string',
                        'example' => '1',
                      ),
                      'Username' => 
                      array (
                        'title' => '用户名称',
                        'description' => '用户名称',
                        'type' => 'string',
                        'example' => 'admin',
                      ),
                      'TenantId' => 
                      array (
                        'title' => '租户唯一标识',
                        'description' => '租户唯一标识',
                        'type' => 'string',
                        'example' => '1',
                      ),
                      'AgentId' => 
                      array (
                        'title' => '业务空间唯一标识',
                        'description' => '业务空间唯一标识',
                        'type' => 'string',
                        'example' => '1',
                      ),
                    ),
                  ),
                  'ConsoleConfig' => 
                  array (
                    'title' => '控制台配置',
                    'description' => '控制台配置',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Title' => 
                      array (
                        'title' => '标题',
                        'description' => '标题',
                        'type' => 'string',
                        'example' => 'AI妙笔',
                      ),
                      'TipContent' => 
                      array (
                        'title' => '提示内容',
                        'description' => '提示内容',
                        'type' => 'string',
                        'example' => 'xx',
                      ),
                    ),
                  ),
                  'WanxiangImageStyleConfig' => 
                  array (
                    'title' => '万相图片风格配置',
                    'description' => '万相图片风格配置',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'title' => '风格名称',
                          'description' => '风格名称',
                          'type' => 'string',
                          'example' => '默认',
                        ),
                        'Value' => 
                        array (
                          'title' => '风格code',
                          'description' => '风格code',
                          'type' => 'string',
                          'example' => '<auto>',
                        ),
                        'Pic' => 
                        array (
                          'title' => '风格图片地址',
                          'description' => '风格图片地址',
                          'type' => 'string',
                          'example' => 'https://img.alicdn.com/imgextra/i4/O1CN01RzKicz1W0YWzYkWcK_!!6000000002726-2-tps-132-104.png',
                        ),
                      ),
                    ),
                  ),
                  'WanxiangImageSizeConfig' => 
                  array (
                    'title' => '万相图片尺寸',
                    'description' => '万相图片',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '万相图片尺寸',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'title' => '图片尺寸比例',
                          'description' => '图片尺寸比例',
                          'type' => 'string',
                          'example' => '1:1',
                        ),
                        'Value' => 
                        array (
                          'title' => '图片尺寸像素',
                          'description' => '图片尺寸像素',
                          'type' => 'string',
                          'example' => '1024*1024',
                        ),
                      ),
                    ),
                  ),
                  'SlrAuthorized' => 
                  array (
                    'title' => 'SLR 是否已经授权',
                    'description' => 'SLR 是否已经授权',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'ChatConfig' => 
                  array (
                    'title' => '通话配置',
                    'description' => '通话配置',
                    'type' => 'object',
                  ),
                  'IntelligentSearchConfig' => 
                  array (
                    'title' => '智搜配置',
                    'description' => '智搜配置',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ProductDescription' => 
                      array (
                        'title' => '首页产品描述',
                        'description' => '首页产品描述',
                        'type' => 'string',
                        'example' => 'xxx',
                      ),
                      'SearchSources' => 
                      array (
                        'title' => '搜索源列表',
                        'description' => '搜索源列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '搜索源',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Code' => 
                            array (
                              'title' => '数据集唯一标识: code+datasetName',
                              'description' => '数据集唯一标识: code+datasetName',
                              'type' => 'string',
                              'example' => 'xx',
                            ),
                            'Name' => 
                            array (
                              'title' => '搜索源名称：中文',
                              'description' => '搜索源名称：中文',
                              'type' => 'string',
                              'example' => 'xx',
                            ),
                            'DatasetName' => 
                            array (
                              'title' => '数据集唯一标识: code+datasetName',
                              'description' => '数据集唯一标识: code+datasetName',
                              'type' => 'string',
                              'example' => 'xx',
                            ),
                          ),
                        ),
                      ),
                      'SearchSamples' => 
                      array (
                        'title' => '智搜推荐',
                        'description' => '智搜推荐',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => 'sample',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Prompt' => 
                            array (
                              'title' => '提示词',
                              'description' => '提示词',
                              'type' => 'string',
                              'example' => 'xx',
                            ),
                            'Text' => 
                            array (
                              'title' => '生成内容',
                              'description' => '生成内容',
                              'type' => 'string',
                              'example' => 'xxx',
                            ),
                            'Articles' => 
                            array (
                              'title' => '文章列表',
                              'description' => '文章列表',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '文章',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Title' => 
                                  array (
                                    'title' => '标题',
                                    'description' => '标题',
                                    'type' => 'string',
                                    'example' => 'xx',
                                  ),
                                  'Url' => 
                                  array (
                                    'title' => '文章URL',
                                    'description' => '文章URL',
                                    'type' => 'string',
                                    'example' => 'http://xxx.com',
                                  ),
                                  'Select' => 
                                  array (
                                    'title' => '前端传递时是否手动选择',
                                    'description' => '前端传递时是否手动选择',
                                    'type' => 'boolean',
                                    'example' => 'true',
                                  ),
                                  'Stared' => 
                                  array (
                                    'title' => '是否为星标文章',
                                    'description' => '是否为星标文章',
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
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"DataNotExists\\",\\n  \\"Message\\": \\"数据不存在\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"SearchSources\\": [\\n      {\\n        \\"Value\\": \\"SystemSearch\\",\\n        \\"Label\\": \\"夸克通用搜索\\"\\n      }\\n    ],\\n    \\"GeneralConfigMap\\": {\\n      \\"key\\": \\"tongyi.xxx\\"\\n    },\\n    \\"UserInfo\\": {\\n      \\"UserId\\": \\"1\\",\\n      \\"Username\\": \\"admin\\",\\n      \\"TenantId\\": \\"1\\",\\n      \\"AgentId\\": \\"1\\"\\n    },\\n    \\"ConsoleConfig\\": {\\n      \\"Title\\": \\"AI妙笔\\",\\n      \\"TipContent\\": \\"xx\\"\\n    },\\n    \\"WanxiangImageStyleConfig\\": [\\n      {\\n        \\"Name\\": \\"默认\\",\\n        \\"Value\\": \\"<auto>\\",\\n        \\"Pic\\": \\"https://img.alicdn.com/imgextra/i4/O1CN01RzKicz1W0YWzYkWcK_!!6000000002726-2-tps-132-104.png\\"\\n      }\\n    ],\\n    \\"WanxiangImageSizeConfig\\": [\\n      {\\n        \\"Name\\": \\"1:1\\",\\n        \\"Value\\": \\"1024*1024\\"\\n      }\\n    ],\\n    \\"SlrAuthorized\\": true,\\n    \\"ChatConfig\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"IntelligentSearchConfig\\": {\\n      \\"ProductDescription\\": \\"xxx\\",\\n      \\"SearchSources\\": [\\n        {\\n          \\"Code\\": \\"xx\\",\\n          \\"Name\\": \\"xx\\",\\n          \\"DatasetName\\": \\"xx\\"\\n        }\\n      ],\\n      \\"SearchSamples\\": [\\n        {\\n          \\"Prompt\\": \\"xx\\",\\n          \\"Text\\": \\"xxx\\",\\n          \\"Articles\\": [\\n            {\\n              \\"Title\\": \\"xx\\",\\n              \\"Url\\": \\"http://xxx.com\\",\\n              \\"Select\\": true,\\n              \\"Stared\\": false\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取配置信息',
    ),
    'SearchNews' => 
    array (
      'summary' => '信息检索',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxxx_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'SearchSources',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '检索源列表',
            'description' => '检索源列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '搜索源code',
              'type' => 'string',
              'required' => false,
              'example' => 'QuarkCommonNews',
              'enum' => 
              array (
              ),
            ),
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'default' => 'QuarkCommonNews',
            'enum' => 
            array (
              0 => 'QuarkCommonNews',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'Query',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '检索Query',
            'description' => '检索Query',
            'type' => 'string',
            'required' => false,
            'example' => '检索Query',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页记录数',
            'description' => '每页记录数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '35',
          ),
        ),
        4 => 
        array (
          'name' => 'Page',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '页码',
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '81',
          ),
        ),
        5 => 
        array (
          'name' => 'IncludeContent',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否包含正文',
            'description' => '是否包含正文',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'FilterNotNull',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否过滤空内容',
            'description' => '是否过滤空内容',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PageResult',
            'description' => 'PageResult',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '业务数据',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SearchSource' => 
                    array (
                      'title' => '搜索源',
                      'description' => '搜索源',
                      'type' => 'string',
                      'example' => 'QuarkCommonNews',
                    ),
                    'SearchSourceName' => 
                    array (
                      'title' => '搜索源名称',
                      'description' => '搜索源名称',
                      'type' => 'string',
                      'example' => '夸克检索',
                    ),
                    'PubTime' => 
                    array (
                      'title' => '发布时间',
                      'description' => '发布时间',
                      'type' => 'string',
                      'example' => '2024-01-18 06:46:22',
                    ),
                    'Source' => 
                    array (
                      'title' => '来源',
                      'description' => '来源',
                      'type' => 'string',
                      'example' => '央视网',
                    ),
                    'Tag' => 
                    array (
                      'title' => '标签',
                      'description' => '标签',
                      'type' => 'string',
                      'example' => '文章标签',
                    ),
                    'Title' => 
                    array (
                      'title' => '标题',
                      'description' => '标题',
                      'type' => 'string',
                      'example' => '文章标题',
                    ),
                    'Content' => 
                    array (
                      'title' => '内容',
                      'description' => '内容',
                      'type' => 'string',
                      'example' => '文章内容',
                    ),
                    'Author' => 
                    array (
                      'title' => '作者',
                      'description' => '作者',
                      'type' => 'string',
                      'example' => '作者',
                    ),
                    'Url' => 
                    array (
                      'title' => '文章URL',
                      'description' => '文章URL',
                      'type' => 'string',
                      'example' => '文章URL',
                    ),
                    'Summary' => 
                    array (
                      'title' => '文章摘要',
                      'description' => '文章摘要',
                      'type' => 'string',
                      'example' => '文章摘要',
                    ),
                    'DocUuid' => 
                    array (
                      'title' => '内部文档唯一标识',
                      'description' => '内部文档唯一标识',
                      'type' => 'string',
                      'example' => '9a598b44c6444da5907b8ea68a5f82c4',
                    ),
                    'UpdateTime' => 
                    array (
                      'title' => '系统更新时间',
                      'description' => '系统更新时间',
                      'type' => 'string',
                      'example' => '2024-01-18 06:46:22',
                    ),
                    'ImageUrls' => 
                    array (
                      'title' => '图片地址',
                      'description' => '图片地址',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '新闻图像的URL。',
                        'type' => 'string',
                        'example' => 'https://www.example.com/aaaa.jpg',
                      ),
                    ),
                  ),
                ),
              ),
              'Current' => 
              array (
                'description' => '当前页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Size' => 
              array (
                'description' => '每页记录数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Total' => 
              array (
                'description' => '总记录数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '1813ceee-7fe5-41b4-87e5-982a4d18cca5',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'NoData',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
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
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"SearchSource\\": \\"QuarkCommonNews\\",\\n      \\"SearchSourceName\\": \\"夸克检索\\",\\n      \\"PubTime\\": \\"2024-01-18 06:46:22\\",\\n      \\"Source\\": \\"央视网\\",\\n      \\"Tag\\": \\"文章标签\\",\\n      \\"Title\\": \\"文章标题\\",\\n      \\"Content\\": \\"文章内容\\",\\n      \\"Author\\": \\"作者\\",\\n      \\"Url\\": \\"文章URL\\",\\n      \\"Summary\\": \\"文章摘要\\",\\n      \\"DocUuid\\": \\"9a598b44c6444da5907b8ea68a5f82c4\\",\\n      \\"UpdateTime\\": \\"2024-01-18 06:46:22\\",\\n      \\"ImageUrls\\": [\\n        \\"https://www.example.com/aaaa.jpg\\"\\n      ]\\n    }\\n  ],\\n  \\"Current\\": 1,\\n  \\"Size\\": 10,\\n  \\"Total\\": 100,\\n  \\"RequestId\\": \\"1813ceee-7fe5-41b4-87e5-982a4d18cca5\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"NoData\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '信息检索',
    ),
    'ListBuildConfigs' => 
    array (
      'summary' => '获取系统自定义预设。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'cd327c3d5d5e44159cc716e23bfa530e_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '政务和传媒类别,media:传媒,government:政务',
            'description' => '政务和传媒类别,media:传媒,government:政务',
            'type' => 'string',
            'required' => false,
            'example' => 'media',
            'default' => 'media',
            'enum' => 
            array (
              0 => 'media',
              1 => 'government',
            ),
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<List<PromptBuildConfigQueryDO>>',
            'description' => 'PlainResult<List<PromptBuildConfigQueryDO>>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => 'DA021073-17CE-5CCF-9FEB-93226C766887',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'Success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '业务对象',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'title' => '主键ID',
                      'description' => '主键ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '主键ID，内置配置无该字段',
                    ),
                    'Type' => 
                    array (
                      'title' => '区分政务和传媒,media:传媒,government:政务',
                      'description' => '区分政务和传媒,media:传媒,government:政务',
                      'type' => 'string',
                      'example' => 'media',
                    ),
                    'Tag' => 
                    array (
                      'title' => '标签key值',
                      'description' => '标签key值',
                      'type' => 'string',
                      'example' => 'writingStyle',
                    ),
                    'TagDescription' => 
                    array (
                      'title' => '标签描述',
                      'description' => '标签描述',
                      'type' => 'string',
                      'example' => '文体',
                    ),
                    'Keywords' => 
                    array (
                      'title' => '标签可选的值列表',
                      'description' => '标签可选的值列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'title' => '标签可选的值定义',
                        'description' => '标签可选的值定义',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'title' => '预设标签的KEY',
                            'description' => '预设标签的KEY',
                            'type' => 'string',
                            'example' => '新闻评论',
                          ),
                          'Description' => 
                          array (
                            'title' => '预设标签的描述',
                            'description' => '预设标签的描述',
                            'type' => 'string',
                            'example' => '新闻评论',
                          ),
                        ),
                      ),
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间',
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '2023-04-11 06:14:07',
                    ),
                    'CreateUser' => 
                    array (
                      'title' => '创建用户',
                      'description' => '创建用户',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'UpdateTime' => 
                    array (
                      'title' => '更新时间',
                      'description' => '更新时间',
                      'type' => 'string',
                      'example' => '2023-04-11 06:14:07
',
                    ),
                    'UpdateUser' => 
                    array (
                      'title' => '更新用户',
                      'description' => '更新用户',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'BuildIn' => 
                    array (
                      'title' => '是否为内置',
                      'description' => '是否为内置',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DA021073-17CE-5CCF-9FEB-93226C766887\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": [\\n    {\\n      \\"Id\\": 0,\\n      \\"Type\\": \\"media\\",\\n      \\"Tag\\": \\"writingStyle\\",\\n      \\"TagDescription\\": \\"文体\\",\\n      \\"Keywords\\": [\\n        {\\n          \\"Key\\": \\"新闻评论\\",\\n          \\"Description\\": \\"新闻评论\\"\\n        }\\n      ],\\n      \\"CreateTime\\": \\"2023-04-11 06:14:07\\",\\n      \\"CreateUser\\": \\"1\\",\\n      \\"UpdateTime\\": \\"2023-04-11 06:14:07\\\\n\\",\\n      \\"UpdateUser\\": \\"1\\",\\n      \\"BuildIn\\": true\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取系统自定义预设',
    ),
    'GenerateImageTask' => 
    array (
      'summary' => '智能配图，图片生成任务。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'e1be065b-adc3-435e-bd01-1c18c5ed75d3
',
          ),
        ),
        1 => 
        array (
          'name' => 'ParagraphList',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '段落内容',
            'description' => '段落内容',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Id' => 
                array (
                  'title' => '段落ID',
                  'description' => '段落ID',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => true,
                  'example' => '1',
                ),
                'Content' => 
                array (
                  'title' => '段落内容',
                  'description' => '段落内容',
                  'type' => 'string',
                  'required' => true,
                  'example' => '一直忧伤的猫',
                ),
                'TaskId' => 
                array (
                  'title' => '任务ID 任务唯一标识',
                  'description' => '任务ID 任务唯一标识',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'e1be065b-adc3-435e-bd01-1c18c5ed75d3',
                ),
                'TaskStatus' => 
                array (
                  'title' => '当前任务状态 SUCCESSED=任务执行成功 ，FAILED=任务执行失败 ，CANCELED=任务被取消 ，PENDIN=任务排队中 ，SUSPENDE=任务挂起 RUNNIN=任务处理中',
                  'description' => '当前任务状态 SUCCESSED=任务执行成功 ，FAILED=任务执行失败 ，CANCELED=任务被取消 ，PENDIN=任务排队中 ，SUSPENDE=任务挂起 RUNNIN=任务处理中',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'SUCCESSED',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'Style',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '风格   "<photography>"=摄影, "<portrait>"=人像写真, "<3d cartoon>"=3D卡通, "<anime>"=动画, "<oil painting>"=油画, "<watercolor>"=水彩, "<sketch>"=素描, "<chinese painting>"=中国画, "<flat illustration>"=扁平插画, "<auto>"=默认',
            'description' => '风格   "<photography>"=摄影, "<portrait>"=人像写真, "<3d cartoon>"=3D卡通, "<anime>"=动画, "<oil painting>"=油画, "<watercolor>"=水彩, "<sketch>"=素描, "<chinese painting>"=中国画, "<flat illustration>"=扁平插画, "<auto>"=默认',
            'type' => 'string',
            'required' => true,
            'example' => '<auto>',
          ),
        ),
        3 => 
        array (
          'name' => 'Size',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '大小 1024*1024\', \'720*1280\', \'1280*720\'',
            'description' => '大小 1024*1024\', \'720*1280\', \'1280*720\'',
            'type' => 'string',
            'required' => true,
            'example' => '1024*1024',
          ),
        ),
        4 => 
        array (
          'name' => 'ArticleTaskId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '文章taskId',
            'description' => '文章taskId',
            'type' => 'string',
            'required' => true,
            'example' => 'e1be065b-adc3-435e-bd01-1c18c5ed75d3',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<GenerateImageTaskResponse>',
            'description' => 'PlainResult<GenerateImageTaskResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => 'F2F366D6-E9FE-1006-BB70-2C650896AAB5',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'successful',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'TaskList' => 
                  array (
                    'title' => '段落任务信息，根据输入的段落ID进行关联',
                    'description' => '段落任务信息，根据输入的段落ID进行关联',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'title' => '段落ID',
                          'description' => '段落ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'Content' => 
                        array (
                          'title' => '段落内容',
                          'description' => '段落内容',
                          'type' => 'string',
                          'example' => '一直忧伤的猫',
                        ),
                        'TaskId' => 
                        array (
                          'title' => '任务ID 任务唯一标识',
                          'description' => '任务ID 任务唯一标识',
                          'type' => 'string',
                          'example' => 'e1be065b-adc3-435e-bd01-1c18c5ed75d3',
                        ),
                        'TaskStatus' => 
                        array (
                          'title' => '当前任务状态 SUCCESSED=任务执行成功 ，FAILED=任务执行失败 ，CANCELED=任务被取消 ，PENDIN=任务排队中 ，SUSPENDE=任务挂起 RUNNIN=任务处理中',
                          'description' => '当前任务状态 SUCCESSED=任务执行成功 ，FAILED=任务执行失败 ，CANCELED=任务被取消 ，PENDIN=任务排队中 ，SUSPENDE=任务挂起 RUNNIN=任务处理中',
                          'type' => 'string',
                          'example' => 'SUCCESSED',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F2F366D6-E9FE-1006-BB70-2C650896AAB5\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"successful\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"TaskList\\": [\\n      {\\n        \\"Id\\": 1,\\n        \\"Content\\": \\"一直忧伤的猫\\",\\n        \\"TaskId\\": \\"e1be065b-adc3-435e-bd01-1c18c5ed75d3\\",\\n        \\"TaskStatus\\": \\"SUCCESSED\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '生成智能配图任务',
    ),
    'FetchImageTask' => 
    array (
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'cd327c3d5d5e44159cc716e23bfa530e_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskIdList',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '任务ID列表',
            'description' => '任务ID列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'TaskId',
              'type' => 'string',
              'required' => false,
              'example' => '9c5ac65f-fcac-416c-81d0-4ab81e1373fd',
            ),
            'required' => true,
            'example' => '["9d8c9185-3f75-4a20-aca1-c5bb53dd97b3"]',
          ),
        ),
        2 => 
        array (
          'name' => 'ArticleTaskId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '文章taskId',
            'description' => '文章taskId',
            'type' => 'string',
            'required' => true,
            'example' => 'e1be065b-adc3-435e-bd01-1c18c5ed75d3',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<FetchTaskResponse>',
            'description' => 'PlainResult<FetchTaskResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => 'DD656AF9-0839-521A-A3D2-F320009F9C87',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'TaskInfoList' => 
                  array (
                    'title' => '智能配图生成的图片信息',
                    'description' => '智能配图生成的图片信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'title' => '段落ID',
                          'description' => '段落ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'TaskId' => 
                        array (
                          'title' => '任务ID 任务唯一标识',
                          'description' => '任务ID 任务唯一标识',
                          'type' => 'string',
                          'example' => 'net-7eb32699000d4193a3c59fc64ae1e55f',
                        ),
                        'TaskStatus' => 
                        array (
                          'title' => '当前任务状态 SUCCESSED=任务执行成功 ，FAILED=任务执行失败 ，CANCELED=任务被取消 ，PENDIN=任务排队中 ，SUSPENDE=任务挂起 RUNNIN=任务处理中',
                          'description' => '当前任务状态 SUCCESSED=任务执行成功 ，FAILED=任务执行失败 ，CANCELED=任务被取消 ，PENDIN=任务排队中 ，SUSPENDE=任务挂起 RUNNIN=任务处理中',
                          'type' => 'string',
                          'example' => 'SUCCESSED',
                        ),
                        'ImageList' => 
                        array (
                          'title' => '图片信息',
                          'description' => '图片信息',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Url' => 
                              array (
                                'title' => '图片地址',
                                'description' => '图片地址',
                                'type' => 'string',
                                'example' => 'https://a-hbr-temp-cn-hangzhou.oss-cn-hangzhou.aliyuncs.com/r-000aham3nsx9gc7a8r5l.csv?Expires=167826013',
                              ),
                              'Code' => 
                              array (
                                'title' => '如果图片没有生成返回的异常code标识',
                                'description' => '如果图片没有生成返回的异常code标识',
                                'type' => 'string',
                                'example' => 'NoData',
                              ),
                              'Message' => 
                              array (
                                'title' => '如果图片没有生成返回的异常信息描述',
                                'description' => '如果图片没有生成返回的异常信息描述',
                                'type' => 'string',
                                'example' => '错误',
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
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DD656AF9-0839-521A-A3D2-F320009F9C87\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"TaskInfoList\\": [\\n      {\\n        \\"Id\\": 1,\\n        \\"TaskId\\": \\"net-7eb32699000d4193a3c59fc64ae1e55f\\",\\n        \\"TaskStatus\\": \\"SUCCESSED\\",\\n        \\"ImageList\\": [\\n          {\\n            \\"Url\\": \\"https://a-hbr-temp-cn-hangzhou.oss-cn-hangzhou.aliyuncs.com/r-000aham3nsx9gc7a8r5l.csv?Expires=167826013\\",\\n            \\"Code\\": \\"NoData\\",\\n            \\"Message\\": \\"错误\\"\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取图片任务执行结果',
    ),
    'FeedbackDialogue' => 
    array (
      'summary' => '反馈生成的对话。',
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
        'operationType' => 'create',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'fcb14f25c9ee41ccad33a049de8f941b_p_outbound_public',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '整个页面的ID',
            'description' => '整个页面的ID',
            'type' => 'string',
            'required' => false,
            'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
          ),
        ),
        2 => 
        array (
          'name' => 'SessionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '单轮对话的ID',
            'description' => '单轮对话的ID',
            'type' => 'string',
            'required' => true,
            'example' => '75bf82fa-b71b-45d7-ae40-0b00e496cd9e',
          ),
        ),
        3 => 
        array (
          'name' => 'Rating',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'thumbsDown:点踩、thumbsUp:点赞',
            'description' => 'thumbsDown:点踩、thumbsUp:点赞',
            'type' => 'string',
            'required' => false,
            'example' => 'thumbsDown',
          ),
        ),
        4 => 
        array (
          'name' => 'RatingTags',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '标签',
            'description' => '标签',
            'type' => 'array',
            'items' => 
            array (
              'description' => '反馈标签',
              'type' => 'string',
              'required' => false,
              'example' => '01',
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'ModifiedResponse',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '客户修改后的生成结果',
            'description' => '客户修改后的生成结果',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        6 => 
        array (
          'name' => 'CustomerResponse',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '客户反馈信息',
            'description' => '客户反馈信息',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        7 => 
        array (
          'name' => 'GoodText',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '客户认为好的生成内容',
            'description' => '客户认为好的生成内容',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'BaseResult',
            'description' => 'BaseResult',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'DataNotExists',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => '数据不存在',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
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
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\",\\n  \\"Success\\": false,\\n  \\"Code\\": \\"DataNotExists\\",\\n  \\"Message\\": \\"数据不存在\\",\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '反馈对话',
    ),
    'ListHotNewsWithType' => 
    array (
      'summary' => '获取选题热点列表。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'c160c841c8e54295bf2f441432785944_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'NewsType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '新闻类别。society: 社会时事，person: 人物新闻，government: 党政时事',
            'description' => '新闻类别。society: 社会时事，person: 人物新闻，government: 党政时事',
            'type' => 'string',
            'required' => false,
            'example' => 'society',
            'enum' => 
            array (
              0 => 'society',
              1 => 'person',
              2 => 'government',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'NewsTypes',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '新闻类别列表多选。society: 社会时事，person: 人物新闻，government: 党政时事',
            'description' => '新闻类别列表多选。society: 社会时事，person: 人物新闻，government: 党政时事',
            'type' => 'array',
            'items' => 
            array (
              'description' => '新闻类别',
              'type' => 'string',
              'required' => false,
              'example' => 'society',
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'Size',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页记录数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'Current',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前页码',
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
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<List<HotNewsWithType>>',
            'description' => 'PlainResult<List<HotNewsWithType>>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'DataNotExists',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => '数据不存在',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'NewsType' => 
                    array (
                      'title' => '新闻类别。society: 社会时事，person: 人物新闻，government: 党政时事',
                      'description' => '新闻类别。society: 社会时事，person: 人物新闻，government: 党政时事',
                      'type' => 'string',
                      'example' => 'society',
                    ),
                    'NewsTypeName' => 
                    array (
                      'title' => '新闻类别名称',
                      'description' => '新闻类别名称',
                      'type' => 'string',
                      'example' => '社会时事',
                    ),
                    'News' => 
                    array (
                      'title' => '新闻列表',
                      'description' => '新闻列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'SearchSource' => 
                          array (
                            'title' => '搜索源',
                            'description' => '搜索源',
                            'type' => 'string',
                            'example' => '新浪热榜',
                          ),
                          'SearchSourceName' => 
                          array (
                            'title' => '搜索源名称',
                            'description' => '搜索源名称',
                            'type' => 'string',
                            'example' => '新浪热榜',
                          ),
                          'PubTime' => 
                          array (
                            'title' => '发布时间',
                            'description' => '发布时间',
                            'type' => 'string',
                            'example' => '2023-04-11 06:14:07',
                          ),
                          'Source' => 
                          array (
                            'title' => '来源',
                            'description' => '来源',
                            'type' => 'string',
                            'example' => '新浪新闻综合',
                          ),
                          'Tag' => 
                          array (
                            'title' => '标签',
                            'description' => '标签',
                            'type' => 'string',
                            'example' => '社会',
                          ),
                          'Title' => 
                          array (
                            'title' => '标题',
                            'description' => '标题',
                            'type' => 'string',
                            'example' => '新闻标题',
                          ),
                          'Content' => 
                          array (
                            'title' => '内容',
                            'description' => '内容',
                            'type' => 'string',
                            'example' => '新闻内容',
                          ),
                          'Author' => 
                          array (
                            'title' => '作者',
                            'description' => '作者',
                            'type' => 'string',
                            'example' => '作者名称',
                          ),
                          'Url' => 
                          array (
                            'title' => '文章URL',
                            'description' => '文章URL',
                            'type' => 'string',
                            'example' => 'http://xxxxx/xxx',
                          ),
                          'Summary' => 
                          array (
                            'title' => '文章摘要',
                            'description' => '文章摘要',
                            'type' => 'string',
                            'example' => '摘要',
                          ),
                          'DocUuid' => 
                          array (
                            'title' => '内部文档唯一标识',
                            'description' => '内部文档唯一标识',
                            'type' => 'string',
                            'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
                          ),
                          'UpdateTime' => 
                          array (
                            'title' => '系统更新时间',
                            'description' => '系统更新时间',
                            'type' => 'string',
                            'example' => '2023-10-14 14:30:00',
                          ),
                          'ImageUrls' => 
                          array (
                            'title' => '图片地址',
                            'description' => '图片地址',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '新闻图像的URL。',
                              'type' => 'string',
                              'example' => 'http://xxxx.png',
                            ),
                          ),
                        ),
                      ),
                    ),
                    'TotalPages' => 
                    array (
                      'title' => '总页数',
                      'description' => '总页数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '77',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"DataNotExists\\",\\n  \\"Message\\": \\"数据不存在\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": [\\n    {\\n      \\"NewsType\\": \\"society\\",\\n      \\"NewsTypeName\\": \\"社会时事\\",\\n      \\"News\\": [\\n        {\\n          \\"SearchSource\\": \\"新浪热榜\\",\\n          \\"SearchSourceName\\": \\"新浪热榜\\",\\n          \\"PubTime\\": \\"2023-04-11 06:14:07\\",\\n          \\"Source\\": \\"新浪新闻综合\\",\\n          \\"Tag\\": \\"社会\\",\\n          \\"Title\\": \\"新闻标题\\",\\n          \\"Content\\": \\"新闻内容\\",\\n          \\"Author\\": \\"作者名称\\",\\n          \\"Url\\": \\"http://xxxxx/xxx\\",\\n          \\"Summary\\": \\"摘要\\",\\n          \\"DocUuid\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\",\\n          \\"UpdateTime\\": \\"2023-10-14 14:30:00\\",\\n          \\"ImageUrls\\": [\\n            \\"http://xxxx.png\\"\\n          ]\\n        }\\n      ],\\n      \\"TotalPages\\": 77\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取选题热点列表',
    ),
    'GenerateViewPoint' => 
    array (
      'summary' => '生成选题视角。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'c160c841c8e54295bf2f441432785944_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'ReferenceData',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '引用的上下文数据',
            'description' => '引用的上下文数据',
            'type' => 'object',
            'properties' => 
            array (
              'MiniDoc' => 
              array (
                'title' => '传入的文章片段。',
                'description' => '传入的文章片段。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '文章片段',
                  'type' => 'string',
                  'required' => false,
                  'example' => '文章片段',
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
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult',
            'description' => 'PlainResult',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '94512A33-8EC1-5452-A793-5C91F18ED2F0',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => '错误',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '生成的视角',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Point' => 
                    array (
                      'title' => '生成的视角',
                      'description' => '生成的视角',
                      'type' => 'string',
                      'example' => '视角',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"94512A33-8EC1-5452-A793-5C91F18ED2F0\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"错误\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": [\\n    {\\n      \\"Point\\": \\"视角\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '生成选题视角',
    ),
    'SaveMaterialDocument' => 
    array (
      'summary' => '保存素材。',
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
        'operationType' => 'create',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'c160c841c8e54295bf2f441432785944_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'DocType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '文档类型 (html: 网页, plainText: 纯文本, image: 图片, pdf: pdf, word: word, excel: excel, csv: csv, jsonLine: jsonLine)',
            'description' => '文档类型 (html: 网页, plainText: 纯文本, image: 图片, pdf: pdf, word: word, excel: excel, csv: csv, jsonLine: jsonLine)',
            'type' => 'string',
            'required' => true,
            'example' => 'excel',
            'enum' => 
            array (
              0 => 'html',
              1 => 'plainText',
              2 => 'image',
              3 => 'pdf',
              4 => 'word',
              5 => 'excel',
              6 => 'csv',
              7 => 'jsonLine',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'Title',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '文档标题',
            'description' => '文档标题',
            'type' => 'string',
            'required' => false,
            'example' => '新闻标题',
          ),
        ),
        3 => 
        array (
          'name' => 'Author',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '作者',
            'description' => '作者',
            'type' => 'string',
            'required' => false,
            'example' => '作者名称',
          ),
        ),
        4 => 
        array (
          'name' => 'PubTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '发布时间,格式：yyyy-MM-dd HH:mm:ss',
            'description' => '发布时间,格式：yyyy-MM-dd HH:mm:ss',
            'type' => 'string',
            'required' => false,
            'example' => '2023-04-11 06:14:07',
          ),
        ),
        5 => 
        array (
          'name' => 'DocKeywords',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '文档标签用于分类等',
            'description' => '文档标签用于分类等',
            'type' => 'array',
            'items' => 
            array (
              'description' => '关键词',
              'type' => 'string',
              'required' => false,
              'example' => '关键词',
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'Url',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '素材的URL',
            'description' => '素材的URL',
            'type' => 'string',
            'required' => false,
            'example' => 'http://xxxxx/xxx',
          ),
        ),
        7 => 
        array (
          'name' => 'ExternalUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '外部客户上传的URL，仅用作记录保存',
            'description' => '外部客户上传的URL，仅用作记录保存',
            'type' => 'string',
            'required' => false,
            'example' => 'http://xxxxx/xxx
',
          ),
        ),
        8 => 
        array (
          'name' => 'SrcFrom',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '文档来源 (UserUpload: 用户上传, IntellijSearch: 智搜, HotViewPoint: 热点视角)',
            'description' => '文档来源 (UserUpload: 用户上传, IntellijSearch: 智搜, HotViewPoint: 热点视角)',
            'type' => 'string',
            'required' => false,
            'example' => 'IntellijSearch',
            'enum' => 
            array (
              0 => 'UserUpload',
              1 => 'IntellijSearch',
              2 => 'HotViewPoint',
            ),
          ),
        ),
        9 => 
        array (
          'name' => 'TextContent',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '解析后的文本内容，对于图片来说为空',
            'description' => '解析后的文本内容，对于图片来说为空',
            'type' => 'string',
            'required' => false,
            'example' => '文本内容',
          ),
        ),
        10 => 
        array (
          'name' => 'HtmlContent',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '带格式的内容',
            'description' => '带格式的内容',
            'type' => 'string',
            'required' => false,
            'example' => '网页内容',
          ),
        ),
        11 => 
        array (
          'name' => 'ShareAttr',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '共享属性：0：个人私有，1：业务空间范围内共享',
            'description' => '共享属性：0：个人私有，1：业务空间范围内共享',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
            ),
          ),
        ),
        12 => 
        array (
          'name' => 'BothSavePrivateAndShare',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否同时将素材保存为私有库与共享库',
            'description' => '是否同时将素材保存为私有库与共享库',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        13 => 
        array (
          'name' => 'Summary',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '摘要',
            'description' => '摘要',
            'type' => 'string',
            'required' => false,
            'example' => '摘要',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<Long>',
            'description' => 'PlainResult<Long>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'DataNotExists',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => '数据不存在',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '12',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\",\\n  \\"Success\\": false,\\n  \\"Code\\": \\"DataNotExists\\",\\n  \\"Message\\": \\"数据不存在\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": 12\\n}","type":"json"}]',
      'title' => '保存素材',
    ),
    'DeleteMaterialById' => 
    array (
      'summary' => '删除素材。',
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
        'operationType' => 'delete',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'cd327c3d5d5e44159cc716e23bfa530e_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '主键ID',
            'description' => '主键ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '10',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => '返回是否删除成功',
            'description' => '返回是否删除成功',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'DataNotExists',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => '数据不存在',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'boolean',
                'example' => 'false',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\",\\n  \\"Success\\": false,\\n  \\"Code\\": \\"DataNotExists\\",\\n  \\"Message\\": \\"数据不存在\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": false\\n}","type":"json"}]',
      'title' => '删除素材',
    ),
    'UpdateMaterialDocument' => 
    array (
      'summary' => '编辑素材。',
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
        'operationType' => 'update',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => '67c520d1fa43455ea44fb69fa402d54d_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '主键',
            'description' => '主键',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '44',
          ),
        ),
        2 => 
        array (
          'name' => 'DocType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '文档类型 (html: 网页, plainText: 纯文本, image: 图片, pdf: pdf, word: word, excel: excel, csv: csv, jsonLine: jsonLine)',
            'description' => '文档类型 (html: 网页, plainText: 纯文本, image: 图片, pdf: pdf, word: word, excel: excel, csv: csv, jsonLine: jsonLine)',
            'type' => 'string',
            'required' => true,
            'example' => 'image',
            'enum' => 
            array (
              0 => 'html',
              1 => 'plainText',
              2 => 'image',
              3 => 'pdf',
              4 => 'word',
              5 => 'excel',
              6 => 'csv',
              7 => 'jsonLine',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'Title',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '文档标题',
            'description' => '文档标题',
            'type' => 'string',
            'required' => false,
            'example' => '标题',
          ),
        ),
        4 => 
        array (
          'name' => 'Author',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '作者',
            'description' => '作者',
            'type' => 'string',
            'required' => false,
            'example' => '作者名称',
          ),
        ),
        5 => 
        array (
          'name' => 'PubTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '发布时间,格式：yyyy-MM-dd HH:mm:ss',
            'description' => '发布时间,格式：yyyy-MM-dd HH:mm:ss',
            'type' => 'string',
            'required' => false,
            'example' => '2023-04-11 06:14:07',
          ),
        ),
        6 => 
        array (
          'name' => 'DocKeywords',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '文档标签用于分类等',
            'description' => '文档标签用于分类等',
            'type' => 'array',
            'items' => 
            array (
              'description' => '关键词',
              'type' => 'string',
              'required' => false,
              'example' => '关键词',
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'Url',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '素材的URL',
            'description' => '素材的URL',
            'type' => 'string',
            'required' => false,
            'example' => 'http://xxxxx/xxx',
          ),
        ),
        8 => 
        array (
          'name' => 'ExternalUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '外部客户上传的URL，仅用作记录保存',
            'description' => '外部客户上传的URL，仅用作记录保存',
            'type' => 'string',
            'required' => false,
            'example' => 'http://xxxxx/xxx',
          ),
        ),
        9 => 
        array (
          'name' => 'SrcFrom',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '文档来源 (UserUpload: 用户上传, IntellijSearch: 智搜, HotViewPoint: 热点视角)',
            'description' => '文档来源 (UserUpload: 用户上传, IntellijSearch: 智搜, HotViewPoint: 热点视角)',
            'type' => 'string',
            'required' => false,
            'example' => 'UserUpload',
            'enum' => 
            array (
              0 => 'UserUpload',
              1 => 'IntellijSearch',
              2 => 'HotViewPoint',
            ),
          ),
        ),
        10 => 
        array (
          'name' => 'TextContent',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '解析后的文本内容，对于图片来说为空',
            'description' => '解析后的文本内容，对于图片来说为空',
            'type' => 'string',
            'required' => false,
            'example' => '文本内容',
          ),
        ),
        11 => 
        array (
          'name' => 'HtmlContent',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '带格式的内容',
            'description' => '带格式的内容',
            'type' => 'string',
            'required' => false,
            'example' => '网页内容',
          ),
        ),
        12 => 
        array (
          'name' => 'ShareAttr',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '共享属性：0：个人私有，1：业务空间范围内共享',
            'description' => '共享属性：0：个人私有，1：业务空间范围内共享',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
            ),
          ),
        ),
        13 => 
        array (
          'name' => 'Summary',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '摘要',
            'description' => '摘要',
            'type' => 'string',
            'required' => false,
            'example' => '摘要',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<Long>',
            'description' => 'PlainResult<Long>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'DataNotExists',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => '数据不存在',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '82',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\",\\n  \\"Success\\": false,\\n  \\"Code\\": \\"DataNotExists\\",\\n  \\"Message\\": \\"数据不存在\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": 82\\n}","type":"json"}]',
      'title' => '编辑素材',
    ),
    'GetMaterialById' => 
    array (
      'summary' => '获取素材明细。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => '67c520d1fa43455ea44fb69fa402d54d_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '任务主键ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '60',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<MaterialDocumentDO>',
            'description' => 'PlainResult<MaterialDocumentDO>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'DataNotExists',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => '数据不存在',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'Id' => 
                  array (
                    'title' => '主键',
                    'description' => '主键',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '32',
                  ),
                  'DocType' => 
                  array (
                    'title' => '文档类型，pdf、word、url、image',
                    'description' => '文档类型，pdf、word、url、image',
                    'type' => 'string',
                    'example' => 'pdf',
                  ),
                  'Title' => 
                  array (
                    'title' => '文档标题',
                    'description' => '文档标题',
                    'type' => 'string',
                    'example' => '文档标题',
                  ),
                  'Summary' => 
                  array (
                    'title' => '文档摘要',
                    'description' => '文档摘要',
                    'type' => 'string',
                    'example' => '文档摘要',
                  ),
                  'Author' => 
                  array (
                    'title' => '作者',
                    'description' => '作者',
                    'type' => 'string',
                    'example' => '文档作者',
                  ),
                  'PubTime' => 
                  array (
                    'title' => '发布时间',
                    'description' => '发布时间',
                    'type' => 'string',
                    'example' => '2023-04-11 06:14:07
',
                  ),
                  'DocKeywords' => 
                  array (
                    'title' => '文档标签用于分类等、不同keyword之间逗号分割',
                    'description' => '文档标签用于分类等、不同keyword之间逗号分割',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '关键词',
                      'type' => 'string',
                      'example' => '关键词',
                    ),
                  ),
                  'Url' => 
                  array (
                    'title' => '内部文档保存的URL，支持多协议，http://,file://,ftp://:客户上传时保存到内部存储的URL、长期保存、到期删除',
                    'description' => '内部文档保存的URL',
                    'type' => 'string',
                    'example' => 'https://www.example.com',
                  ),
                  'PublicUrl' => 
                  array (
                    'title' => '临时的对外公开的URL',
                    'description' => '临时的对外公开的URL',
                    'type' => 'string',
                    'example' => 'https://www.example.com
',
                  ),
                  'ExternalUrl' => 
                  array (
                    'title' => '外部客户上传的URL，仅用作记录保存',
                    'description' => '外部客户上传的URL，仅用作记录保存',
                    'type' => 'string',
                    'example' => 'https://www.example.com
',
                  ),
                  'SrcFrom' => 
                  array (
                    'title' => '文档来源，user_upload、search、viewpoint',
                    'description' => '文档来源，user_upload、search、viewpoint',
                    'type' => 'string',
                    'example' => 'user_upload',
                  ),
                  'TextContent' => 
                  array (
                    'title' => '解析后的文本内容，对于图片来说为空',
                    'description' => '解析后的文本内容，对于图片来说为空',
                    'type' => 'string',
                    'example' => '文本内容',
                  ),
                  'HtmlContent' => 
                  array (
                    'description' => '网页内容',
                    'type' => 'string',
                    'example' => '网页内容',
                  ),
                  'ShareAttr' => 
                  array (
                    'title' => '公开属性，按位存储，第一位表示是否在业务空间内共享、第二位表示是否在租户内共享，第三位表示在系统范围内共享',
                    'description' => '公开属性，按位存储，第一位表示是否在业务空间内共享、第二位表示是否在租户内共享，第三位表示在系统范围内共享',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                    'enum' => 
                    array (
                      0 => '0',
                      1 => '1',
                    ),
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '创建时间',
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '2023-03-21 11:34:19',
                  ),
                  'UpdateTime' => 
                  array (
                    'title' => '修改时间',
                    'description' => '修改时间',
                    'type' => 'string',
                    'example' => '2022-04-08 19:33:01',
                  ),
                  'CreateUser' => 
                  array (
                    'title' => '创建用户ID',
                    'description' => '创建用户ID',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'UpdateUser' => 
                  array (
                    'title' => '修改用户ID',
                    'description' => '修改用户ID',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'ThumbnailInBase64' => 
                  array (
                    'title' => '图片文档类型的Base64缩略图',
                    'description' => '图片文档类型的Base64缩略图',
                    'type' => 'string',
                    'example' => 'Base64编码的缩略图',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\",\\n  \\"Success\\": false,\\n  \\"Code\\": \\"DataNotExists\\",\\n  \\"Message\\": \\"数据不存在\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"Id\\": 32,\\n    \\"DocType\\": \\"pdf\\",\\n    \\"Title\\": \\"文档标题\\",\\n    \\"Summary\\": \\"文档摘要\\",\\n    \\"Author\\": \\"文档作者\\",\\n    \\"PubTime\\": \\"2023-04-11 06:14:07\\\\n\\",\\n    \\"DocKeywords\\": [\\n      \\"关键词\\"\\n    ],\\n    \\"Url\\": \\"https://www.example.com\\",\\n    \\"PublicUrl\\": \\"https://www.example.com\\\\n\\",\\n    \\"ExternalUrl\\": \\"https://www.example.com\\\\n\\",\\n    \\"SrcFrom\\": \\"user_upload\\",\\n    \\"TextContent\\": \\"文本内容\\",\\n    \\"HtmlContent\\": \\"网页内容\\",\\n    \\"ShareAttr\\": 1,\\n    \\"CreateTime\\": \\"2023-03-21 11:34:19\\",\\n    \\"UpdateTime\\": \\"2022-04-08 19:33:01\\",\\n    \\"CreateUser\\": \\"1\\",\\n    \\"UpdateUser\\": \\"1\\",\\n    \\"ThumbnailInBase64\\": \\"Base64编码的缩略图\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取素材明细',
    ),
    'ListMaterialDocuments' => 
    array (
      'summary' => '获取素材列表。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => '33a2658aaabf4c24b45d50e575125311_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'Query',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '支持对 title、content、content的综合查询',
            'description' => '支持对 title、content、content的综合查询',
            'type' => 'string',
            'required' => false,
            'example' => '小猫',
          ),
        ),
        2 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '素材主键ID',
            'description' => '素材主键ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '69',
          ),
        ),
        3 => 
        array (
          'name' => 'Title',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '根据素材标题全文检索',
            'description' => '根据素材标题全文检索',
            'type' => 'string',
            'required' => false,
            'example' => '新闻标题',
          ),
        ),
        4 => 
        array (
          'name' => 'DocType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '文档类型 (html: 网页, plainText: 纯文本, image: 图片, pdf: pdf, word: word, excel: excel, csv: csv, jsonLine: jsonLine)',
            'description' => '文档类型 (html: 网页, plainText: 纯文本, image: 图片, pdf: pdf, word: word, excel: excel, csv: csv, jsonLine: jsonLine)',
            'type' => 'string',
            'required' => false,
            'example' => 'jsonLine',
            'enum' => 
            array (
              0 => 'html',
              1 => 'plainText',
              2 => 'image',
              3 => 'pdf',
              4 => 'word',
              5 => 'excel',
              6 => 'csv',
              7 => 'jsonLine',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'DocTypeList',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '文档类型列表 (html: 网页, plainText: 纯文本, image: 图片, pdf: pdf, word: word, excel: excel, csv: csv, jsonLine: jsonLine)',
            'description' => '文档类型列表 (html: 网页, plainText: 纯文本, image: 图片, pdf: pdf, word: word, excel: excel, csv: csv, jsonLine: jsonLine)',
            'type' => 'array',
            'items' => 
            array (
              'description' => '文件类型对象。',
              'type' => 'string',
              'required' => false,
              'example' => 'html',
              'enum' => 
              array (
                0 => 'html',
                1 => 'plainText',
                2 => 'image',
                3 => 'pdf',
                4 => 'word',
                5 => 'excel',
                6 => 'csv',
                7 => 'jsonLine',
              ),
            ),
            'required' => false,
            'example' => 'excel',
          ),
        ),
        6 => 
        array (
          'name' => 'Content',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '文档内容全文检索',
            'description' => '文档内容全文检索',
            'type' => 'string',
            'required' => false,
            'example' => '新闻内容',
          ),
        ),
        7 => 
        array (
          'name' => 'ShareAttr',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '共享属性：0：个人私有，1：业务空间范围内共享',
            'description' => '共享属性：0：个人私有，1：业务空间范围内共享',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
            ),
          ),
        ),
        8 => 
        array (
          'name' => 'Keywords',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '文档关键词',
            'description' => '文档关键词',
            'type' => 'array',
            'items' => 
            array (
              'description' => '关键词',
              'type' => 'string',
              'required' => false,
              'example' => '关键词',
            ),
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'CreateTimeStart',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '创建时间-开始范围，格式：yyyy-MM-dd HH:mm:ss',
            'description' => '创建时间-开始范围，格式：yyyy-MM-dd HH:mm:ss',
            'type' => 'string',
            'required' => false,
            'example' => '2023-02-19 07:28:11',
          ),
        ),
        10 => 
        array (
          'name' => 'CreateTimeEnd',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '创建时间-结束范围，格式：yyyy-MM-dd HH:mm:ss',
            'description' => '创建时间-结束范围，格式：yyyy-MM-dd HH:mm:ss',
            'type' => 'string',
            'required' => false,
            'example' => '2023-03-18 02:00:00',
          ),
        ),
        11 => 
        array (
          'name' => 'UpdateTimeStart',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '更新时间-开始范围，格式：yyyy-MM-dd HH:mm:ss',
            'description' => '更新时间-开始范围，格式：yyyy-MM-dd HH:mm:ss',
            'type' => 'string',
            'required' => false,
            'example' => '2023-03-18 02:00:00
',
          ),
        ),
        12 => 
        array (
          'name' => 'UpdateTimeEnd',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '更新时间-结束范围，格式：yyyy-MM-dd HH:mm:ss',
            'description' => '更新时间-结束范围，格式：yyyy-MM-dd HH:mm:ss',
            'type' => 'string',
            'required' => false,
            'example' => '2023-03-18 03:00:00
',
          ),
        ),
        13 => 
        array (
          'name' => 'GeneratePublicUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否生成文件公共URL',
            'description' => '是否生成文件公共URL',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        14 => 
        array (
          'name' => 'Current',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '当前页码',
            'description' => '当前页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        15 => 
        array (
          'name' => 'Size',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页条数：默认10',
            'description' => '每页条数：默认10',
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
          'description' => '成功',
          'schema' => 
          array (
            'title' => '返回分页后的素材列表',
            'description' => '返回分页后的素材列表',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '列表对象',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '素材对象',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'title' => '主键',
                      'description' => '主键',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '35',
                    ),
                    'DocType' => 
                    array (
                      'title' => '文档类型，pdf、word、url、image',
                      'description' => '文档类型，pdf、word、url、image',
                      'type' => 'string',
                      'example' => 'pdf',
                    ),
                    'Title' => 
                    array (
                      'title' => '文档标题',
                      'description' => '文档标题',
                      'type' => 'string',
                      'example' => '文档标题

',
                    ),
                    'Summary' => 
                    array (
                      'title' => '文档摘要',
                      'description' => '文档摘要',
                      'type' => 'string',
                      'example' => '摘要',
                    ),
                    'Author' => 
                    array (
                      'title' => '作者',
                      'description' => '作者',
                      'type' => 'string',
                      'example' => '作者

',
                    ),
                    'PubTime' => 
                    array (
                      'title' => '发布时间',
                      'description' => '发布时间，格式：yyyy-MM-dd HH:mm:ss',
                      'type' => 'string',
                      'example' => '2023-03-18 02:00:00
',
                    ),
                    'DocKeywords' => 
                    array (
                      'title' => '文档标签用于分类等、不同keyword之间逗号分割',
                      'description' => '文档标签用于分类等、不同keyword之间逗号分割',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '关键词',
                        'type' => 'string',
                        'example' => '关键词',
                      ),
                    ),
                    'Url' => 
                    array (
                      'title' => '内部文档保存的URL，支持多协议，http://,file://,ftp://:客户上传时保存到内部存储的URL、长期保存、到期删除',
                      'description' => '内部文档保存的URL，支持多协议，http://,file://,ftp://:客户上传时保存到内部存储的URL、长期保存、到期删除',
                      'type' => 'string',
                      'example' => 'https://www.example.com',
                    ),
                    'PublicUrl' => 
                    array (
                      'title' => '临时的对外公开的URL',
                      'description' => '临时的对外公开的URL',
                      'type' => 'string',
                      'example' => 'https://www.example.com
',
                    ),
                    'ExternalUrl' => 
                    array (
                      'title' => '外部客户上传的URL，仅用作记录保存',
                      'description' => '外部客户上传的URL，仅用作记录保存',
                      'type' => 'string',
                      'example' => 'https://www.example.com
',
                    ),
                    'SrcFrom' => 
                    array (
                      'title' => '文档来源，user_upload、search、viewpoint',
                      'description' => '文档来源，user_upload、search、viewpoint',
                      'type' => 'string',
                      'example' => 'user_upload',
                    ),
                    'TextContent' => 
                    array (
                      'title' => '解析后的文本内容，对于图片来说为空',
                      'description' => '解析后的文本内容，对于图片来说为空',
                      'type' => 'string',
                      'example' => '文档内容',
                    ),
                    'HtmlContent' => 
                    array (
                      'description' => '网页内容',
                      'type' => 'string',
                      'example' => '网页内容',
                    ),
                    'ShareAttr' => 
                    array (
                      'title' => '公开属性，按位存储，第一位表示是否在业务空间内共享、第二位表示是否在租户内共享，第三位表示在系统范围内共享',
                      'description' => '公开属性，按位存储，第一位表示是否在业务空间内共享、第二位表示是否在租户内共享，第三位表示在系统范围内共享',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                      'enum' => 
                      array (
                        0 => '0',
                        1 => '1',
                      ),
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间',
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '2023-03-18 02:00:00
',
                    ),
                    'UpdateTime' => 
                    array (
                      'title' => '修改时间',
                      'description' => '修改时间',
                      'type' => 'string',
                      'example' => '2023-03-18 02:00:00
',
                    ),
                    'CreateUser' => 
                    array (
                      'title' => '创建用户ID',
                      'description' => '创建用户ID',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'CreateUserName' => 
                    array (
                      'title' => '创建用户姓名',
                      'description' => '创建用户姓名',
                      'type' => 'string',
                      'example' => '创建用户名',
                    ),
                    'UpdateUser' => 
                    array (
                      'title' => '修改用户ID',
                      'description' => '修改用户ID',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'UpdateUserName' => 
                    array (
                      'title' => '修改用户姓名',
                      'description' => '修改用户姓名',
                      'type' => 'string',
                      'example' => '更新用户名',
                    ),
                    'ThumbnailInBase64' => 
                    array (
                      'title' => '图片文档类型的Base64缩略图',
                      'description' => '图片文档类型的Base64缩略图',
                      'type' => 'string',
                      'example' => 'base64编码的图像二进制数据',
                    ),
                  ),
                ),
              ),
              'Current' => 
              array (
                'description' => '当前页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Size' => 
              array (
                'description' => '每页记录数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Total' => 
              array (
                'description' => '总记录数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'DataNotExists',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => '数据不存在',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
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
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"Id\\": 35,\\n      \\"DocType\\": \\"pdf\\",\\n      \\"Title\\": \\"文档标题\\\\n\\\\n\\",\\n      \\"Summary\\": \\"摘要\\",\\n      \\"Author\\": \\"作者\\\\n\\\\n\\",\\n      \\"PubTime\\": \\"2023-03-18 02:00:00\\\\n\\",\\n      \\"DocKeywords\\": [\\n        \\"关键词\\"\\n      ],\\n      \\"Url\\": \\"https://www.example.com\\",\\n      \\"PublicUrl\\": \\"https://www.example.com\\\\n\\",\\n      \\"ExternalUrl\\": \\"https://www.example.com\\\\n\\",\\n      \\"SrcFrom\\": \\"user_upload\\",\\n      \\"TextContent\\": \\"文档内容\\",\\n      \\"HtmlContent\\": \\"网页内容\\",\\n      \\"ShareAttr\\": 1,\\n      \\"CreateTime\\": \\"2023-03-18 02:00:00\\\\n\\",\\n      \\"UpdateTime\\": \\"2023-03-18 02:00:00\\\\n\\",\\n      \\"CreateUser\\": \\"1\\",\\n      \\"CreateUserName\\": \\"创建用户名\\",\\n      \\"UpdateUser\\": \\"1\\",\\n      \\"UpdateUserName\\": \\"更新用户名\\",\\n      \\"ThumbnailInBase64\\": \\"base64编码的图像二进制数据\\"\\n    }\\n  ],\\n  \\"Current\\": 1,\\n  \\"Size\\": 10,\\n  \\"Total\\": 100,\\n  \\"RequestId\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\",\\n  \\"Success\\": false,\\n  \\"Code\\": \\"DataNotExists\\",\\n  \\"Message\\": \\"数据不存在\\",\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '获取素材列表',
    ),
    'GetCustomText' => 
    array (
      'summary' => '获取自定义文本',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxxx_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '主键ID',
            'description' => '主键ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '63',
          ),
        ),
        2 => 
        array (
          'name' => 'CommodityCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '商品code',
            'description' => '商品code',
            'type' => 'string',
            'required' => false,
            'example' => '商品code',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult',
            'description' => 'PlainResult',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '1813ceee-7fe5-41b4-87e5-982a4d18cca5',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'NoData',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'Id' => 
                  array (
                    'title' => '主键ID',
                    'description' => '主键ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '34',
                  ),
                  'Title' => 
                  array (
                    'title' => '标题',
                    'description' => '标题',
                    'type' => 'string',
                    'example' => '标题',
                  ),
                  'Content' => 
                  array (
                    'title' => '内容',
                    'description' => '内容',
                    'type' => 'string',
                    'example' => '内容',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '创建时间',
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '创建时间',
                  ),
                  'UpdateTime' => 
                  array (
                    'title' => '修改时间',
                    'description' => '修改时间',
                    'type' => 'string',
                    'example' => '修改时间',
                  ),
                  'CreateUser' => 
                  array (
                    'title' => '创建用户',
                    'description' => '创建用户',
                    'type' => 'string',
                    'example' => '创建用户',
                  ),
                  'UpdateUser' => 
                  array (
                    'title' => '修改用户',
                    'description' => '修改用户',
                    'type' => 'string',
                    'example' => '修改用户',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1813ceee-7fe5-41b4-87e5-982a4d18cca5\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"NoData\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"Id\\": 34,\\n    \\"Title\\": \\"标题\\",\\n    \\"Content\\": \\"内容\\",\\n    \\"CreateTime\\": \\"创建时间\\",\\n    \\"UpdateTime\\": \\"修改时间\\",\\n    \\"CreateUser\\": \\"创建用户\\",\\n    \\"UpdateUser\\": \\"修改用户\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取自定义文本',
    ),
    'UpdateCustomText' => 
    array (
      'summary' => '更新自定义文本',
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
        'operationType' => 'update',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxxx_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '主键ID',
            'description' => '主键ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '96',
          ),
        ),
        2 => 
        array (
          'name' => 'Title',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '标题',
            'description' => '标题',
            'type' => 'string',
            'required' => false,
            'example' => '标题',
          ),
        ),
        3 => 
        array (
          'name' => 'Content',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '内容',
            'description' => '内容',
            'type' => 'string',
            'required' => false,
            'example' => '内容',
          ),
        ),
        4 => 
        array (
          'name' => 'CommodityCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '商品code',
            'description' => '商品code',
            'type' => 'string',
            'required' => false,
            'example' => '商品code',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult',
            'description' => 'PlainResult',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '1813ceee-7fe5-41b4-87e5-982a4d18cca5',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'NoData',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '48',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1813ceee-7fe5-41b4-87e5-982a4d18cca5\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"NoData\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": 48\\n}","type":"json"}]',
      'title' => '更新自定义文本',
    ),
    'ListCustomText' => 
    array (
      'summary' => '获取自定义文本列表',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxxx_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'CommodityCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '商品code',
            'description' => '商品code',
            'type' => 'string',
            'required' => false,
            'example' => '商品code',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult',
            'description' => 'PlainResult',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '1813ceee-7fe5-41b4-87e5-982a4d18cca5',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'NoData',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'title' => '主键ID',
                      'description' => '主键ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '40',
                    ),
                    'Title' => 
                    array (
                      'title' => '标题',
                      'description' => '标题',
                      'type' => 'string',
                      'example' => '标题',
                    ),
                    'Content' => 
                    array (
                      'title' => '内容',
                      'description' => '内容',
                      'type' => 'string',
                      'example' => '内容',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间',
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '创建时间',
                    ),
                    'UpdateTime' => 
                    array (
                      'title' => '修改时间',
                      'description' => '修改时间',
                      'type' => 'string',
                      'example' => '修改时间',
                    ),
                    'CreateUser' => 
                    array (
                      'title' => '创建用户',
                      'description' => '创建用户',
                      'type' => 'string',
                      'example' => '创建用户',
                    ),
                    'UpdateUser' => 
                    array (
                      'title' => '修改用户',
                      'description' => '修改用户',
                      'type' => 'string',
                      'example' => '修改用户',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1813ceee-7fe5-41b4-87e5-982a4d18cca5\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"NoData\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": [\\n    {\\n      \\"Id\\": 40,\\n      \\"Title\\": \\"标题\\",\\n      \\"Content\\": \\"内容\\",\\n      \\"CreateTime\\": \\"创建时间\\",\\n      \\"UpdateTime\\": \\"修改时间\\",\\n      \\"CreateUser\\": \\"创建用户\\",\\n      \\"UpdateUser\\": \\"修改用户\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取自定义文本列表',
    ),
    'SaveCustomText' => 
    array (
      'summary' => '保存自定义文本',
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
        'operationType' => 'create',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxxx_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'Title',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '标题',
            'description' => '标题',
            'type' => 'string',
            'required' => false,
            'example' => '标题',
          ),
        ),
        2 => 
        array (
          'name' => 'Content',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '内容',
            'description' => '内容',
            'type' => 'string',
            'required' => false,
            'example' => '内容',
          ),
        ),
        3 => 
        array (
          'name' => 'CommodityCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '商品code',
            'description' => '商品code',
            'type' => 'string',
            'required' => false,
            'example' => '商品code',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult',
            'description' => 'PlainResult',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '1813ceee-7fe5-41b4-87e5-982a4d18cca5',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'NoData',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1813ceee-7fe5-41b4-87e5-982a4d18cca5\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"NoData\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": 5\\n}","type":"json"}]',
      'title' => '保存自定义文本',
    ),
    'DeleteCustomText' => 
    array (
      'summary' => '删除自定义文本',
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
        'operationType' => 'delete',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxxx_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '主键ID',
            'description' => '主键ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '85',
          ),
        ),
        2 => 
        array (
          'name' => 'CommodityCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '商品code',
            'description' => '商品code',
            'type' => 'string',
            'required' => false,
            'example' => '商品code',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult',
            'description' => 'PlainResult',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '1813ceee-7fe5-41b4-87e5-982a4d18cca5',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'NoData',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'boolean',
                'example' => 'false',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1813ceee-7fe5-41b4-87e5-982a4d18cca5\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"NoData\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": false\\n}","type":"json"}]',
      'title' => '删除自定义文本',
    ),
    'CreateGeneratedContent' => 
    array (
      'summary' => '文档管理-创作。',
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
        'operationType' => 'create',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'xxx_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'Prompt',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '最后一次生成的提示词',
            'description' => '最后一次生成的提示词',
            'type' => 'string',
            'required' => false,
            'example' => '创作xxx文章',
          ),
        ),
        2 => 
        array (
          'name' => 'TaskId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '会话任务唯一标识',
            'description' => '会话任务唯一标识',
            'type' => 'string',
            'required' => true,
            'example' => 'xxx',
            'maxLength' => 64,
            'minLength' => 6,
          ),
        ),
        3 => 
        array (
          'name' => 'Title',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '标题',
            'description' => '标题',
            'type' => 'string',
            'required' => true,
            'example' => '杭州亚运会',
            'maxLength' => 200,
            'minLength' => 2,
          ),
        ),
        4 => 
        array (
          'name' => 'Content',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '正文：富文本',
            'description' => '正文：富文本',
            'type' => 'string',
            'required' => true,
            'example' => '杭州亚运会',
          ),
        ),
        5 => 
        array (
          'name' => 'ContentDomain',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '内容生成的领域',
            'description' => '内容生成的领域',
            'type' => 'string',
            'required' => false,
            'example' => 'government',
            'default' => 'media',
            'enum' => 
            array (
              0 => 'media',
              1 => 'government',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'ContentText',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '正文：纯文本',
            'description' => '正文：纯文本',
            'type' => 'string',
            'required' => false,
            'example' => '杭州亚运会',
          ),
        ),
        7 => 
        array (
          'name' => 'Uuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '溯源UUID',
            'description' => '溯源UUID',
            'type' => 'string',
            'required' => false,
            'example' => 'xxxx',
          ),
        ),
        8 => 
        array (
          'name' => 'Keywords',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '关键词',
            'description' => '关键词',
            'type' => 'array',
            'items' => 
            array (
              'description' => '关键字',
              'type' => 'string',
              'required' => false,
              'example' => '评论',
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => '响应结果',
            'description' => '响应结果',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'DataNotExists',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => '数据不存在',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '42',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\",\\n  \\"Success\\": false,\\n  \\"Code\\": \\"DataNotExists\\",\\n  \\"Message\\": \\"数据不存在\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": 42\\n}","type":"json"}]',
      'title' => '文档管理-创作',
    ),
    'DeleteGeneratedContent' => 
    array (
      'summary' => '文档管理-删除。',
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
        'operationType' => 'delete',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxxx_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '文档唯一标识',
            'description' => '文档唯一标识',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '99',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => '响应结果',
            'description' => '响应结果',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'DataNotExists',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => '数据不存在',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"DataNotExists\\",\\n  \\"Message\\": \\"数据不存在\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": true\\n}","type":"json"}]',
      'title' => '文档管理-删除',
    ),
    'UpdateGeneratedContent' => 
    array (
      'summary' => '文档管理-更新。',
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
        'operationType' => 'update',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxxx_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '文档唯一标识',
            'description' => '文档唯一标识',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '36',
            'minLength' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'Prompt',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '最后一次生成的提示词',
            'description' => '最后一次生成的提示词',
            'type' => 'string',
            'required' => false,
            'example' => '创作xx文章',
          ),
        ),
        3 => 
        array (
          'name' => 'Title',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '标题',
            'description' => '标题',
            'type' => 'string',
            'required' => false,
            'example' => '评论类文章',
            'maxLength' => 200,
            'minLength' => 2,
          ),
        ),
        4 => 
        array (
          'name' => 'Content',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '正文：富文本',
            'description' => '正文：富文本',
            'type' => 'string',
            'required' => false,
            'example' => '正文',
          ),
        ),
        5 => 
        array (
          'name' => 'ContentText',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '正文：纯文本',
            'description' => '正文：纯文本',
            'type' => 'string',
            'required' => false,
            'example' => '正文',
          ),
        ),
        6 => 
        array (
          'name' => 'Keywords',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '关键词',
            'description' => '关键词',
            'type' => 'array',
            'items' => 
            array (
              'description' => '关键字',
              'type' => 'string',
              'required' => false,
              'example' => '登机',
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => '响应结果',
            'description' => '响应结果',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '1813ceee-7fe5-41b4-87e5-982a4d18cca5',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'NoData',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'boolean',
                'example' => 'false',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1813ceee-7fe5-41b4-87e5-982a4d18cca5\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"NoData\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": false\\n}","type":"json"}]',
      'title' => '文档管理-更新',
    ),
    'GetGeneratedContent' => 
    array (
      'summary' => '文档管理-查询。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxxx_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '文档唯一标识',
            'description' => '文档唯一标识',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => '响应结果',
            'description' => '响应结果',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '1813ceee-7fe5-41b4-87e5-982a4d18cca5',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'NoData',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'Id' => 
                  array (
                    'title' => '文档唯一标识',
                    'description' => '文档唯一标识',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '86',
                  ),
                  'TaskId' => 
                  array (
                    'title' => '会话任务唯一标识',
                    'description' => '会话任务唯一标识',
                    'type' => 'string',
                    'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
                  ),
                  'Prompt' => 
                  array (
                    'title' => '最后一次生成的提示词',
                    'description' => '最后一次生成的提示词',
                    'type' => 'string',
                    'example' => '创作xxx文章',
                  ),
                  'Title' => 
                  array (
                    'title' => '标题',
                    'description' => '标题',
                    'type' => 'string',
                    'example' => '杭州亚运会',
                  ),
                  'Content' => 
                  array (
                    'title' => '正文：富文本',
                    'description' => '正文：富文本',
                    'type' => 'string',
                    'example' => '杭州亚运会',
                  ),
                  'ContentText' => 
                  array (
                    'title' => '正文：纯文本',
                    'description' => '正文：纯文本',
                    'type' => 'string',
                    'example' => '杭州亚运会',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '创建日期',
                    'description' => '创建日期',
                    'type' => 'string',
                    'example' => '2024-01-04 11:46:07',
                  ),
                  'CreateUser' => 
                  array (
                    'title' => '创建者',
                    'description' => '创建者',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'UpdateTime' => 
                  array (
                    'title' => '更新日期',
                    'description' => '更新日期',
                    'type' => 'string',
                    'example' => '2024-01-04 11:46:07',
                  ),
                  'UpdateUser' => 
                  array (
                    'title' => '更新者',
                    'description' => '更新者',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'ContentDomain' => 
                  array (
                    'title' => '内容生成的领域-media:新闻、government:政务',
                    'description' => '内容生成的领域-media:新闻、government:政务',
                    'type' => 'string',
                    'example' => 'media',
                  ),
                  'Uuid' => 
                  array (
                    'title' => 'UUID  溯源唯一标识',
                    'description' => 'UUID  溯源唯一标识',
                    'type' => 'string',
                    'example' => '0961a514-2e26-4aa6-b22b-f592d145fe47',
                  ),
                  'DeviceId' => 
                  array (
                    'title' => '设备ID',
                    'description' => '设备ID',
                    'type' => 'string',
                    'example' => 'xxx',
                  ),
                  'Keywords' => 
                  array (
                    'title' => '关键词（string）',
                    'description' => '关键词（string）',
                    'type' => 'string',
                    'example' => '评论',
                  ),
                  'KeywordList' => 
                  array (
                    'title' => '关键词',
                    'description' => '关键词',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '关键词',
                      'type' => 'string',
                      'example' => '评论',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1813ceee-7fe5-41b4-87e5-982a4d18cca5\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"NoData\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"Id\\": 86,\\n    \\"TaskId\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\",\\n    \\"Prompt\\": \\"创作xxx文章\\",\\n    \\"Title\\": \\"杭州亚运会\\",\\n    \\"Content\\": \\"杭州亚运会\\",\\n    \\"ContentText\\": \\"杭州亚运会\\",\\n    \\"CreateTime\\": \\"2024-01-04 11:46:07\\",\\n    \\"CreateUser\\": \\"1\\",\\n    \\"UpdateTime\\": \\"2024-01-04 11:46:07\\",\\n    \\"UpdateUser\\": \\"1\\",\\n    \\"ContentDomain\\": \\"media\\",\\n    \\"Uuid\\": \\"0961a514-2e26-4aa6-b22b-f592d145fe47\\",\\n    \\"DeviceId\\": \\"xxx\\",\\n    \\"Keywords\\": \\"评论\\",\\n    \\"KeywordList\\": [\\n      \\"评论\\"\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '文档管理-查询',
    ),
    'ListGeneratedContents' => 
    array (
      'summary' => '文档管理-列表。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxxx_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '开始时间',
            'type' => 'string',
            'required' => false,
            'example' => '2024-01-04 11:46:07',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '结束时间',
            'type' => 'string',
            'required' => false,
            'example' => '2024-01-04 11:46:07',
          ),
        ),
        3 => 
        array (
          'name' => 'Title',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '标题内容',
            'type' => 'string',
            'required' => false,
            'example' => '杭州亚运会',
          ),
        ),
        4 => 
        array (
          'name' => 'ContentDomain',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '正文富文本',
            'type' => 'string',
            'required' => false,
            'example' => 'media',
            'default' => 'media',
            'enum' => 
            array (
              0 => 'media',
              1 => 'government',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'Current',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '当前页码',
            'description' => '当前页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'Size',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页条数：默认10',
            'description' => '每页条数：默认10',
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
          'description' => '成功',
          'schema' => 
          array (
            'title' => '响应结果',
            'description' => '响应结果',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '文档列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '文档',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'title' => '文档唯一标识',
                      'description' => '文档唯一标识',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '10',
                    ),
                    'TaskId' => 
                    array (
                      'title' => '会话任务唯一标识',
                      'description' => '会话任务唯一标识',
                      'type' => 'string',
                      'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
                    ),
                    'Prompt' => 
                    array (
                      'title' => '最后一次生成的提示词',
                      'description' => '最后一次生成的提示词',
                      'type' => 'string',
                      'example' => '创作xxx文章',
                    ),
                    'Title' => 
                    array (
                      'title' => '标题',
                      'description' => '标题',
                      'type' => 'string',
                      'example' => '杭州亚运会',
                    ),
                    'Content' => 
                    array (
                      'title' => '正文：富文本',
                      'description' => '正文：富文本',
                      'type' => 'string',
                      'example' => '杭州亚运会',
                    ),
                    'ContentText' => 
                    array (
                      'title' => '正文：纯文本',
                      'description' => '正文：纯文本',
                      'type' => 'string',
                      'example' => '杭州亚运会',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建日期',
                      'description' => '创建日期',
                      'type' => 'string',
                      'example' => '2024-01-04 11:46:07',
                    ),
                    'CreateUser' => 
                    array (
                      'title' => '创建者',
                      'description' => '创建者',
                      'type' => 'string',
                      'example' => '123',
                    ),
                    'UpdateTime' => 
                    array (
                      'title' => '更新日期',
                      'description' => '更新日期',
                      'type' => 'string',
                      'example' => '2024-01-04 11:46:07',
                    ),
                    'UpdateUser' => 
                    array (
                      'title' => '更新者',
                      'description' => '更新者',
                      'type' => 'string',
                      'example' => '1111',
                    ),
                    'ContentDomain' => 
                    array (
                      'title' => '内容生成的领域-media:新闻、government:政务',
                      'description' => '内容生成的领域-media:新闻、government:政务',
                      'type' => 'string',
                      'example' => 'media',
                    ),
                    'Uuid' => 
                    array (
                      'title' => 'UUID  溯源唯一标识',
                      'description' => 'UUID  溯源唯一标识',
                      'type' => 'string',
                      'example' => 'xxx',
                    ),
                    'DeviceId' => 
                    array (
                      'title' => '设备ID',
                      'description' => '设备ID',
                      'type' => 'string',
                      'example' => 'xxx',
                    ),
                    'Keywords' => 
                    array (
                      'title' => '关键词（string）',
                      'description' => '关键词（string）',
                      'type' => 'string',
                      'example' => '评论',
                    ),
                    'KeywordList' => 
                    array (
                      'title' => '关键词',
                      'description' => '关键词',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '关键词',
                        'type' => 'string',
                        'example' => '评论',
                      ),
                    ),
                  ),
                ),
              ),
              'Current' => 
              array (
                'description' => '当前页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Size' => 
              array (
                'description' => '每页记录数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Total' => 
              array (
                'description' => '总记录数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '1813ceee-7fe5-41b4-87e5-982a4d18cca5',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'NoData',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
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
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"Id\\": 10,\\n      \\"TaskId\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\",\\n      \\"Prompt\\": \\"创作xxx文章\\",\\n      \\"Title\\": \\"杭州亚运会\\",\\n      \\"Content\\": \\"杭州亚运会\\",\\n      \\"ContentText\\": \\"杭州亚运会\\",\\n      \\"CreateTime\\": \\"2024-01-04 11:46:07\\",\\n      \\"CreateUser\\": \\"123\\",\\n      \\"UpdateTime\\": \\"2024-01-04 11:46:07\\",\\n      \\"UpdateUser\\": \\"1111\\",\\n      \\"ContentDomain\\": \\"media\\",\\n      \\"Uuid\\": \\"xxx\\",\\n      \\"DeviceId\\": \\"xxx\\",\\n      \\"Keywords\\": \\"评论\\",\\n      \\"KeywordList\\": [\\n        \\"评论\\"\\n      ]\\n    }\\n  ],\\n  \\"Current\\": 1,\\n  \\"Size\\": 10,\\n  \\"Total\\": 100,\\n  \\"RequestId\\": \\"1813ceee-7fe5-41b4-87e5-982a4d18cca5\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"NoData\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => '文档管理-列表',
    ),
    'ExportGeneratedContent' => 
    array (
      'summary' => '文档管理-导出。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxxx_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '文档唯一标识',
            'description' => '文档唯一标识',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => '响应结果',
            'description' => '响应结果',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '1813ceee-7fe5-41b4-87e5-982a4d18cca5',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'NoData',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'string',
                'example' => 'xxx',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1813ceee-7fe5-41b4-87e5-982a4d18cca5\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"NoData\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": \\"xxx\\"\\n}","type":"json"}]',
      'title' => '文档管理-导出',
    ),
    'ListInterveneCnt' => 
    array (
      'summary' => '获得干预项目数量列表',
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
      'deprecated' => false,
      'systemTags' => 
      array (
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'fcb14f25c9ee41ccad33a049de8f941b_p_outbound_public',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '页面尺寸',
            'description' => '页面尺寸',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'PageIndex',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '页号',
            'description' => '页号',
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
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<GetIntervenesCntListResult>',
            'description' => 'PlainResult<GetIntervenesCntListResult>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'PageCnt' => 
                  array (
                    'title' => '总页数',
                    'description' => '总页数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'CntList' => 
                  array (
                    'title' => '数量信息列表',
                    'description' => '数量信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '分类数量信息',
                      'type' => 'any',
                      'example' => '{
"namespace":"namespace_qa_query", 
"interfereType":0,
"cnt": 10
}',
                    ),
                  ),
                  'PageIndex' => 
                  array (
                    'title' => '页号',
                    'description' => '页号',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '页尺寸',
                    'description' => '页尺寸',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"PageCnt\\": 10,\\n    \\"CntList\\": [\\n      \\"{\\\\n\\\\\\"namespace\\\\\\":\\\\\\"namespace_qa_query\\\\\\", \\\\n\\\\\\"interfereType\\\\\\":0,\\\\n\\\\\\"cnt\\\\\\": 10\\\\n}\\"\\n    ],\\n    \\"PageIndex\\": 1,\\n    \\"PageSize\\": 10\\n  }\\n}","type":"json"}]',
      'title' => '获得所有干预项的数量',
    ),
    'ListIntervenes' => 
    array (
      'summary' => '获得干预项列表',
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
      'deprecated' => false,
      'systemTags' => 
      array (
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => '33a2658aaabf4c24b45d50e575125311_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则id',
            'description' => '规则id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => 'mqtt_outRule_1679019634514',
          ),
        ),
        2 => 
        array (
          'name' => 'Query',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '问题',
            'description' => '问题',
            'type' => 'string',
            'required' => false,
            'example' => '小猫',
          ),
        ),
        3 => 
        array (
          'name' => 'InterveneType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '干预类型',
            'description' => '干预类型',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'enumValueTitles' => 
            array (
              '0-相似问干预项目' => '0-相似问干预项目',
              '2-正则表达式干预项 ' => '2-正则表达式干预项 ',
              ' 1-关键词表达式干预项 ' => ' 1-关键词表达式干预项 ',
              '3-关键词库干预项' => '3-关键词库干预项',
              ' 4-URL干预' => ' 4-URL干预',
            ),
            'example' => '干预类型',
          ),
        ),
        4 => 
        array (
          'name' => 'PageIndex',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '页号',
            'description' => '页号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '页面尺寸',
            'description' => '页面尺寸',
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
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<GetInterveneListResult>',
            'description' => 'PlainResult<GetInterveneListResult>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '428DCC0D-3C63-5306-BD1B-124396AB97BE',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'InterveneList' => 
                  array (
                    'title' => '干预项列表',
                    'description' => '干预项列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'title' => 'id',
                          'description' => 'id',
                          'type' => 'string',
                          'example' => '36559',
                        ),
                        'Query' => 
                        array (
                          'title' => '干预query',
                          'description' => '干预query',
                          'type' => 'string',
                          'example' => '伊家楼',
                        ),
                      ),
                    ),
                  ),
                  'TotalSize' => 
                  array (
                    'title' => '总页书',
                    'description' => '总页书',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '页尺寸',
                    'description' => '页尺寸',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'PageIndex' => 
                  array (
                    'title' => '页号',
                    'description' => '页号',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"428DCC0D-3C63-5306-BD1B-124396AB97BE\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"InterveneList\\": [\\n      {\\n        \\"Id\\": \\"36559\\",\\n        \\"Query\\": \\"伊家楼\\"\\n      }\\n    ],\\n    \\"TotalSize\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"PageIndex\\": 1\\n  }\\n}","type":"json"}]',
      'title' => '列出干预项',
    ),
    'ImportInterveneFile' => 
    array (
      'summary' => '导入干预文件',
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
      'deprecated' => false,
      'systemTags' => 
      array (
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxxx_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'DocName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '上传文件名字',
            'description' => '上传文件名字',
            'type' => 'string',
            'required' => false,
            'example' => 'import.xls',
          ),
        ),
        2 => 
        array (
          'name' => 'FileUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '文件地址',
            'description' => '文件地址',
            'type' => 'string',
            'required' => false,
            'example' => 'http://xxx/xxx.xls',
          ),
        ),
        3 => 
        array (
          'name' => 'FileKey',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '文件osskey',
            'description' => '文件osskey',
            'type' => 'string',
            'required' => false,
            'example' => 'import.xsl',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<OperationResult>',
            'description' => 'PlainResult<OperationResult>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'FailIdList' => 
                  array (
                    'title' => '失败的索引id列表',
                    'description' => '失败的索引id列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '失败干预项Id',
                      'type' => 'string',
                      'example' => '123456',
                    ),
                  ),
                  'TaskId' => 
                  array (
                    'title' => '任务id',
                    'description' => '任务id',
                    'type' => 'string',
                    'example' => '3f7045e099474ba28ceca1b4eb6d6e21
',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"FailIdList\\": [\\n      \\"123456\\"\\n    ],\\n    \\"TaskId\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\\\n\\"\\n  }\\n}","type":"json"}]',
      'title' => '同步导入干预项文件',
    ),
    'InsertInterveneGlobalReply' => 
    array (
      'summary' => '设置干预全局回复',
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
      'deprecated' => false,
      'systemTags' => 
      array (
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'xxx_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'ReplyMessagList',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '回复内容列表',
            'description' => '回复内容列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ReplyType' => 
                array (
                  'title' => '回复类型',
                  'description' => '回复类型',
                  'type' => 'string',
                  'required' => false,
                  'enumValueTitles' => 
                  array (
                    'namespace_qa_query （问答输入干预）' => 'namespace_qa_query （问答输入干预）',
                    'namespace_qa_result （问答结果干预）' => 'namespace_qa_result （问答结果干预）',
                    'namespace_writing_result （写作结果干预）' => 'namespace_writing_result （写作结果干预）',
                    'namespace_writing_query （写作输入干预）' => 'namespace_writing_query （写作输入干预）',
                  ),
                  'example' => '全局回复的类型',
                ),
                'Message' => 
                array (
                  'title' => '回复内容',
                  'description' => '回复内容',
                  'type' => 'string',
                  'required' => false,
                  'example' => '抱歉，问题我无法回答',
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
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<OperationResult>',
            'description' => 'PlainResult<OperationResult>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'successful',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'FailIdList' => 
                  array (
                    'title' => '失败的索引id列表',
                    'description' => '失败的索引id列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '错误Id',
                      'type' => 'string',
                      'example' => '1234',
                    ),
                  ),
                  'TaskId' => 
                  array (
                    'title' => '任务id',
                    'description' => '任务id',
                    'type' => 'string',
                    'example' => '4829',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"FailIdList\\": [\\n      \\"1234\\"\\n    ],\\n    \\"TaskId\\": \\"4829\\"\\n  }\\n}","type":"json"}]',
      'title' => '插入干预全局回复项',
    ),
    'ImportInterveneFileAsync' => 
    array (
      'summary' => '异步导入干预文件',
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
      'deprecated' => false,
      'systemTags' => 
      array (
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'c160c841c8e54295bf2f441432785944_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'DocName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '上传文件名字',
            'description' => '上传文件名字',
            'type' => 'string',
            'required' => false,
            'example' => 'import.xls',
          ),
        ),
        2 => 
        array (
          'name' => 'FileUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '文件地址',
            'description' => '文件地址',
            'type' => 'string',
            'required' => false,
            'example' => 'https://xxx/import.xls',
          ),
        ),
        3 => 
        array (
          'name' => 'FileKey',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '文件osskey',
            'description' => '文件osskey',
            'type' => 'string',
            'required' => false,
            'example' => 'import.xls',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<OperationResult>',
            'description' => 'PlainResult<OperationResult>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '94512A33-8EC1-5452-A793-5C91F18ED2F0',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'successful',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'FailIdList' => 
                  array (
                    'title' => '失败的索引id列表',
                    'description' => '失败的索引id列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '失败的干预项id',
                      'type' => 'string',
                      'example' => '123',
                    ),
                  ),
                  'TaskId' => 
                  array (
                    'title' => '任务id',
                    'description' => '任务id',
                    'type' => 'string',
                    'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"94512A33-8EC1-5452-A793-5C91F18ED2F0\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"FailIdList\\": [\\n      \\"123\\"\\n    ],\\n    \\"TaskId\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\"\\n  }\\n}","type":"json"}]',
      'title' => '异步导入干预项文件',
    ),
    'GetInterveneTemplateFileUrl' => 
    array (
      'summary' => '获得干预导入模版文件下载地址',
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
      'deprecated' => false,
      'systemTags' => 
      array (
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'c160c841c8e54295bf2f441432785944_p_efm',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<GetTemplateFileUrlResult>',
            'description' => 'PlainResult<GetTemplateFileUrlResult>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => 'DA021073-17CE-5CCF-9FEB-93226C766887',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'successful',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'FileUrl' => 
                  array (
                    'title' => '模版文件地址',
                    'description' => '模版文件地址',
                    'type' => 'string',
                    'example' => 'http://xxx/xxx.xls',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DA021073-17CE-5CCF-9FEB-93226C766887\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"FileUrl\\": \\"http://xxx/xxx.xls\\"\\n  }\\n}","type":"json"}]',
      'title' => '获得干预导入模版文件地址',
    ),
    'ClearIntervenes' => 
    array (
      'summary' => '清除所有干预内容',
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
      'deprecated' => false,
      'systemTags' => 
      array (
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxxx_p_efm',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<OperationResult>',
            'description' => 'PlainResult<OperationResult>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '1813ceee-7fe5-41b4-87e5-982a4d18cca5',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'FailIdList' => 
                  array (
                    'title' => '失败的索引id列表',
                    'description' => '失败的索引id列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '失败的干预项Id',
                      'type' => 'string',
                      'example' => '1234',
                    ),
                  ),
                  'TaskId' => 
                  array (
                    'title' => '任务id',
                    'description' => '任务id',
                    'type' => 'string',
                    'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1813ceee-7fe5-41b4-87e5-982a4d18cca5\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"FailIdList\\": [\\n      \\"1234\\"\\n    ],\\n    \\"TaskId\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\"\\n  }\\n}","type":"json"}]',
      'title' => '清除所有干预项',
    ),
    'GetInterveneGlobalReply' => 
    array (
      'summary' => '获得干预全局回复',
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
      'deprecated' => false,
      'systemTags' => 
      array (
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'fcb14f25c9ee41ccad33a049de8f941b_p_outbound_public',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<GetGlobalReplyResult>',
            'description' => 'PlainResult<GetGlobalReplyResult>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'ReplyMessagList' => 
                  array (
                    'title' => '回复信息列表',
                    'description' => '回复信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ReplyType' => 
                        array (
                          'title' => '回复类型',
                          'description' => '回复类型',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'namespace_qa_query （问答输入干预）' => 'namespace_qa_query （问答输入干预）',
                            'namespace_qa_result （问答结果干预）' => 'namespace_qa_result （问答结果干预）',
                            'namespace_writing_result （写作结果干预）' => 'namespace_writing_result （写作结果干预）',
                            'namespace_writing_query （写作输入干预）' => 'namespace_writing_query （写作输入干预）',
                          ),
                          'example' => 'namespace_qa_query',
                        ),
                        'Message' => 
                        array (
                          'title' => '回复内容',
                          'description' => '回复内容',
                          'type' => 'string',
                          'example' => 'success',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"ReplyMessagList\\": [\\n      {\\n        \\"ReplyType\\": \\"namespace_qa_query\\",\\n        \\"Message\\": \\"success\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获得干预全局回复内容',
    ),
    'ListInterveneRules' => 
    array (
      'summary' => '获得干预规则列表',
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
      'deprecated' => false,
      'systemTags' => 
      array (
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'c160c841c8e54295bf2f441432785944_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'PageIndex',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '页号',
            'description' => '页号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '页面尺寸',
            'description' => '页面尺寸',
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
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<GetInterveneRuleListResult>',
            'description' => 'PlainResult<GetInterveneRuleListResult>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => 'DA021073-17CE-5CCF-9FEB-93226C766887',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'Count' => 
                  array (
                    'title' => '数量',
                    'description' => '数量',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'PageIndex' => 
                  array (
                    'title' => '页号',
                    'description' => '页号',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '页尺寸',
                    'description' => '页尺寸',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'InterveneRuleList' => 
                  array (
                    'title' => '规则列表',
                    'description' => '规则列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '规则描述',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RuleId' => 
                        array (
                          'title' => '规则id',
                          'description' => '规则id',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => 'mr-iuo9pi9w555phfbb',
                        ),
                        'RuleName' => 
                        array (
                          'title' => '规则名字',
                          'description' => '规则名字',
                          'type' => 'string',
                          'example' => 'ruletest',
                        ),
                        'InterveneType' => 
                        array (
                          'title' => '干预类型',
                          'description' => '干预类型',
                          'type' => 'integer',
                          'format' => 'int32',
                          'enumValueTitles' => 
                          array (
                            '0-永久生效' => '0-永久生效',
                            '1-按时间生效' => '1-按时间生效',
                          ),
                          'example' => '0',
                        ),
                        'NamespaceList' => 
                        array (
                          'title' => '命名空间列表',
                          'description' => '命名空间列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '干预范围',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'namespace_qa_query （问答输入干预）' => 'namespace_qa_query （问答输入干预）',
                              'namespace_qa_result （问答结果干预）' => 'namespace_qa_result （问答结果干预）',
                              'namespace_writing_result （写作结果干预）' => 'namespace_writing_result （写作结果干预）',
                              'namespace_writing_query （写作输入干预）' => 'namespace_writing_query （写作输入干预）',
                            ),
                            'example' => 'namespace_qa_query',
                          ),
                        ),
                        'AnswerConfig' => 
                        array (
                          'title' => '答案配置',
                          'description' => '答案配置',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '答案配置项',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'AnswerType' => 
                              array (
                                'title' => '答案类型',
                                'description' => '答案类型',
                                'type' => 'integer',
                                'format' => 'int32',
                                'enumValueTitles' => 
                                array (
                                  '0-统一回复' => '0-统一回复',
                                  '1-定向回复 ' => '1-定向回复 ',
                                ),
                                'example' => '0',
                              ),
                              'Namespace' => 
                              array (
                                'title' => '命名空间',
                                'description' => '命名空间',
                                'type' => 'string',
                                'example' => 'namespace_qa_query',
                              ),
                              'Message' => 
                              array (
                                'title' => '答案内容',
                                'description' => '答案内容',
                                'type' => 'string',
                                'example' => '抱歉我无法回答',
                              ),
                            ),
                          ),
                        ),
                        'CreateTime' => 
                        array (
                          'title' => '创建时间',
                          'description' => '创建时间',
                          'type' => 'string',
                          'example' => '2023-06-05 15:17:01',
                        ),
                        'EffectTime' => 
                        array (
                          'title' => '生效时间',
                          'description' => '生效时间',
                          'type' => 'string',
                          'example' => '2023-04-03 02:42:01',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DA021073-17CE-5CCF-9FEB-93226C766887\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"Count\\": 1,\\n    \\"PageIndex\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"InterveneRuleList\\": [\\n      {\\n        \\"RuleId\\": 0,\\n        \\"RuleName\\": \\"ruletest\\",\\n        \\"InterveneType\\": 0,\\n        \\"NamespaceList\\": [\\n          \\"namespace_qa_query\\"\\n        ],\\n        \\"AnswerConfig\\": [\\n          {\\n            \\"AnswerType\\": 0,\\n            \\"Namespace\\": \\"namespace_qa_query\\",\\n            \\"Message\\": \\"抱歉我无法回答\\"\\n          }\\n        ],\\n        \\"CreateTime\\": \\"2023-06-05 15:17:01\\",\\n        \\"EffectTime\\": \\"2023-04-03 02:42:01\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '列出干预规则',
    ),
    'ListInterveneImportTasks' => 
    array (
      'summary' => '获得导入任务列表',
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
      'deprecated' => false,
      'systemTags' => 
      array (
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxxx_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'PageIndex',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '页号',
            'description' => '页号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页尺寸',
            'description' => '每页尺寸',
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
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<OperationStatusListResult>',
            'description' => 'PlainResult<OperationStatusListResult>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '3f7045e099474ba28ceca1b4eb6d6e21',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalSize' => 
                  array (
                    'title' => '总页数',
                    'description' => '总页数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'PageIndex' => 
                  array (
                    'title' => '页号',
                    'description' => '页号',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '页尺寸',
                    'description' => '页尺寸',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'StatusList' => 
                  array (
                    'title' => '任务状态信息',
                    'description' => '任务状态信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TaskId' => 
                        array (
                          'title' => '任务Id',
                          'description' => '任务Id',
                          'type' => 'string',
                          'example' => '4854',
                        ),
                        'TaskName' => 
                        array (
                          'title' => '任务名字',
                          'description' => '任务名字',
                          'type' => 'string',
                          'example' => '12344454',
                        ),
                        'Msg' => 
                        array (
                          'title' => '任务信息',
                          'description' => '任务信息',
                          'type' => 'string',
                          'example' => 'Success',
                        ),
                        'Status' => 
                        array (
                          'title' => '任务状态',
                          'description' => '任务状态',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => 'Success',
                        ),
                        'Percentage' => 
                        array (
                          'title' => '完成百分比',
                          'description' => '完成百分比',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3f7045e099474ba28ceca1b4eb6d6e21\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"TotalSize\\": 0,\\n    \\"PageIndex\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"StatusList\\": [\\n      {\\n        \\"TaskId\\": \\"4854\\",\\n        \\"TaskName\\": \\"12344454\\",\\n        \\"Msg\\": \\"Success\\",\\n        \\"Status\\": 0,\\n        \\"Percentage\\": 5\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '列出干预项导入任务',
    ),
    'InsertInterveneRule' => 
    array (
      'summary' => '插入干预规则',
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
      'deprecated' => false,
      'systemTags' => 
      array (
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxxx_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'InterveneRuleConfig',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '干预规则配置',
            'description' => '干预规则配置',
            'type' => 'object',
            'properties' => 
            array (
              'RuleId' => 
              array (
                'title' => '规则Id',
                'description' => '规则Id',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '2',
              ),
              'RuleName' => 
              array (
                'title' => '规则名字',
                'description' => '规则名字',
                'type' => 'string',
                'required' => false,
                'example' => 'tf-test-rule',
              ),
              'InterveneType' => 
              array (
                'title' => '干预类型',
                'description' => '干预类型',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'enumValueTitles' => 
                array (
                  '0-相似问干预项目' => '0-相似问干预项目',
                  ' 2-正则表达式干预项 ' => ' 2-正则表达式干预项 ',
                  '3-关键词库干预项' => '3-关键词库干预项',
                  ' 4-URL干预' => ' 4-URL干预',
                  '1-关键词表达式干预项' => '1-关键词表达式干预项',
                ),
                'example' => '0',
              ),
              'NamespaceList' => 
              array (
                'title' => '命名空间列表',
                'description' => '命名空间列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '干预维度',
                  'type' => 'string',
                  'required' => false,
                  'enumValueTitles' => 
                  array (
                    'namespace_writing_image （智能配图）' => 'namespace_writing_image （智能配图）',
                    'namespace_qa_query （问答输入干预）' => 'namespace_qa_query （问答输入干预）',
                    'namespace_qa_article （问答参考）' => 'namespace_qa_article （问答参考）',
                    'namespace_writing_article （写作参考）' => 'namespace_writing_article （写作参考）',
                    'namespace_qa_result （问答结果干预）' => 'namespace_qa_result （问答结果干预）',
                    'namespace_writing_result （写作结果干预）' => 'namespace_writing_result （写作结果干预）',
                    'namespace_writing_query （写作输入干预）' => 'namespace_writing_query （写作输入干预）',
                  ),
                  'example' => 'namespace_qa_query
（问答输入干预）',
                ),
                'required' => false,
              ),
              'AnswerConfig' => 
              array (
                'title' => '答案配置',
                'description' => '答案配置',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '答案配置项',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AnswerType' => 
                    array (
                      'title' => '答案类型',
                      'description' => '答案类型',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'enumValueTitles' => 
                      array (
                        '1-定向回复' => '1-定向回复',
                        ' 0-统一回复' => ' 0-统一回复',
                      ),
                      'example' => '0',
                    ),
                    'Namespace' => 
                    array (
                      'title' => '命名空间',
                      'description' => '命名空间',
                      'type' => 'string',
                      'required' => false,
                      'enumValueTitles' => 
                      array (
                        ' namespace_writing_query （写作输入干预）' => ' namespace_writing_query （写作输入干预）',
                        ' namespace_qa_result （问答结果干预）' => ' namespace_qa_result （问答结果干预）',
                        'namespace_qa_query （问答输入干预）' => 'namespace_qa_query （问答输入干预）',
                        ' namespace_writing_result （写作结果干预）' => ' namespace_writing_result （写作结果干预）',
                      ),
                      'example' => 'namespace_qa_query',
                    ),
                    'Message' => 
                    array (
                      'title' => '答案内容',
                      'description' => '答案内容',
                      'type' => 'string',
                      'required' => false,
                      'example' => '抱歉我无法回答',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
              'EffectConfig' => 
              array (
                'title' => '生效配置',
                'description' => '生效配置',
                'type' => 'object',
                'properties' => 
                array (
                  'EffectType' => 
                  array (
                    'title' => '生效类型',
                    'description' => '生效类型',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'enumValueTitles' => 
                    array (
                      '0-永久生效 ' => '0-永久生效 ',
                      '1-按时间生效' => '1-按时间生效',
                    ),
                    'example' => '0',
                  ),
                  'StartTime' => 
                  array (
                    'title' => '开始时间',
                    'description' => '开始时间',
                    'type' => 'string',
                    'required' => false,
                    'example' => '2023-03-28 06:04:29',
                  ),
                  'EndTime' => 
                  array (
                    'title' => '结束时间',
                    'description' => '结束时间',
                    'type' => 'string',
                    'required' => false,
                    'example' => '2023-03-28 06:04:29',
                  ),
                ),
                'required' => false,
              ),
              'InterveneConfigList' => 
              array (
                'title' => '干预配置列表',
                'description' => '干预配置列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'title' => 'id',
                      'description' => 'id',
                      'type' => 'string',
                      'required' => false,
                      'example' => '37249',
                    ),
                    'Query' => 
                    array (
                      'title' => '干预query配置',
                      'description' => '干预query配置',
                      'type' => 'string',
                      'required' => false,
                      'example' => '早上好',
                    ),
                    'OperationType' => 
                    array (
                      'title' => '操作类型',
                      'description' => '操作类型',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'enumValueTitles' => 
                      array (
                        '0-新建' => '0-新建',
                        ' 1-更新 ' => ' 1-更新 ',
                        '2-删除' => '2-删除',
                      ),
                      'example' => '0',
                    ),
                  ),
                  'required' => false,
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
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<InsertInterveneRuleResult>',
            'description' => 'PlainResult<InsertInterveneRuleResult>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => 'DD656AF9-0839-521A-A3D2-F320009F9C87',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'successful',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'RuleId' => 
                  array (
                    'title' => '规则id',
                    'description' => '规则id',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '12345',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DD656AF9-0839-521A-A3D2-F320009F9C87\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"RuleId\\": 12345\\n  }\\n}","type":"json"}]',
      'title' => '插入干预规则',
    ),
    'GetInterveneRuleDetail' => 
    array (
      'summary' => '获得干预项规则详情',
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
      'deprecated' => false,
      'systemTags' => 
      array (
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => '2daaa2e0c209xb26acb97009ea77bd4b_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则id',
            'description' => '规则id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '12345',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<GetInterveneRuleDetailResult>',
            'description' => 'PlainResult<GetInterveneRuleDetailResult>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '428DCC0D-3C63-5306-BD1B-124396AB97BE',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'InterveneRuleDetail' => 
                  array (
                    'title' => '规则详情结构',
                    'description' => '规则详情结构',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RuleId' => 
                      array (
                        'title' => '规则id',
                        'description' => '规则id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '100418',
                      ),
                      'RuleName' => 
                      array (
                        'title' => '规则名字',
                        'description' => '规则名字',
                        'type' => 'string',
                        'example' => '规则001',
                      ),
                      'InterveneType' => 
                      array (
                        'title' => '干预类型',
                        'description' => '干预类型',
                        'type' => 'integer',
                        'format' => 'int32',
                        'enumValueTitles' => 
                        array (
                          '3-关键词库干预项 ' => '3-关键词库干预项 ',
                          '0-相似问干预项目 ' => '0-相似问干预项目 ',
                          ' 2-正则表达式干预项 ' => ' 2-正则表达式干预项 ',
                          '4-URL干预' => '4-URL干预',
                          '1-关键词表达式干预项' => '1-关键词表达式干预项',
                        ),
                        'example' => '0',
                      ),
                      'NamespaceList' => 
                      array (
                        'title' => '命名空间列表',
                        'description' => '命名空间列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '干预维度',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'namespace_writing_image （智能配图）' => 'namespace_writing_image （智能配图）',
                            'namespace_qa_query （问答输入干预）' => 'namespace_qa_query （问答输入干预）',
                            'namespace_qa_article （问答参考）' => 'namespace_qa_article （问答参考）',
                            'namespace_writing_article （写作参考）' => 'namespace_writing_article （写作参考）',
                            'namespace_qa_result （问答结果干预）' => 'namespace_qa_result （问答结果干预）',
                            'namespace_writing_result （写作结果干预）' => 'namespace_writing_result （写作结果干预）',
                            'namespace_writing_query （写作输入干预）' => 'namespace_writing_query （写作输入干预）',
                          ),
                          'example' => 'namespace_qa_query',
                        ),
                      ),
                      'AnswerConfig' => 
                      array (
                        'title' => '答案信息配置',
                        'description' => '答案信息配置',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'AnswerType' => 
                            array (
                              'title' => '答案类型',
                              'description' => '答案类型',
                              'type' => 'integer',
                              'format' => 'int32',
                              'enumValueTitles' => 
                              array (
                                '0-统一回复' => '0-统一回复',
                                '1-定向回复 ' => '1-定向回复 ',
                              ),
                              'example' => '0',
                            ),
                            'Namespace' => 
                            array (
                              'title' => '命名空间',
                              'description' => '命名空间',
                              'type' => 'string',
                              'enumValueTitles' => 
                              array (
                                ' namespace_writing_query （写作输入干预）' => ' namespace_writing_query （写作输入干预）',
                                ' namespace_qa_result （问答结果干预）' => ' namespace_qa_result （问答结果干预）',
                                'namespace_qa_query （问答输入干预）' => 'namespace_qa_query （问答输入干预）',
                                ' namespace_writing_result （写作结果干预）' => ' namespace_writing_result （写作结果干预）',
                              ),
                              'example' => 'namespace_qa_query',
                            ),
                            'Message' => 
                            array (
                              'title' => '答案内容',
                              'description' => '答案内容',
                              'type' => 'string',
                              'example' => '早上好',
                            ),
                          ),
                        ),
                      ),
                      'EffectConfig' => 
                      array (
                        'title' => '生效配置',
                        'description' => '生效配置',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'EffectType' => 
                          array (
                            'title' => '生效类型',
                            'description' => '生效类型',
                            'type' => 'integer',
                            'format' => 'int32',
                            'enumValueTitles' => 
                            array (
                              '0-永久生效 ' => '0-永久生效 ',
                              '1-按时间生效' => '1-按时间生效',
                            ),
                            'example' => '0',
                          ),
                          'StartTime' => 
                          array (
                            'title' => '开始时间',
                            'description' => '开始时间',
                            'type' => 'string',
                            'example' => '2023-11-25 14:21:15',
                          ),
                          'EndTime' => 
                          array (
                            'title' => '结束时间',
                            'description' => '结束时间',
                            'type' => 'string',
                            'example' => '2023-11-25 14:21:15',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"428DCC0D-3C63-5306-BD1B-124396AB97BE\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"InterveneRuleDetail\\": {\\n      \\"RuleId\\": 100418,\\n      \\"RuleName\\": \\"规则001\\",\\n      \\"InterveneType\\": 0,\\n      \\"NamespaceList\\": [\\n        \\"namespace_qa_query\\"\\n      ],\\n      \\"AnswerConfig\\": [\\n        {\\n          \\"AnswerType\\": 0,\\n          \\"Namespace\\": \\"namespace_qa_query\\",\\n          \\"Message\\": \\"早上好\\"\\n        }\\n      ],\\n      \\"EffectConfig\\": {\\n        \\"EffectType\\": 0,\\n        \\"StartTime\\": \\"2023-11-25 14:21:15\\",\\n        \\"EndTime\\": \\"2023-11-25 14:21:15\\"\\n      }\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获得干预规则的详情',
    ),
    'DeleteInterveneRule' => 
    array (
      'summary' => '删除干预规则',
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
      'deprecated' => false,
      'systemTags' => 
      array (
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxxx_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则id',
            'description' => '规则id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '12345',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<OperationResult>',
            'description' => 'PlainResult<OperationResult>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '94512A33-8EC1-5452-A793-5C91F18ED2F0',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'FailIdList' => 
                  array (
                    'title' => '失败的索引id列表',
                    'description' => '失败的索引id列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '失败的id列表',
                      'type' => 'string',
                      'example' => '12345',
                    ),
                  ),
                  'TaskId' => 
                  array (
                    'title' => '任务id',
                    'description' => '任务id',
                    'type' => 'string',
                    'example' => 'dt-s50ntwtywb4y',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"94512A33-8EC1-5452-A793-5C91F18ED2F0\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"FailIdList\\": [\\n      \\"12345\\"\\n    ],\\n    \\"TaskId\\": \\"dt-s50ntwtywb4y\\"\\n  }\\n}","type":"json"}]',
      'title' => '删除干预规则',
    ),
    'ExportIntervenes' => 
    array (
      'summary' => '导出所有干预内容',
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
      'deprecated' => false,
      'systemTags' => 
      array (
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'fed6555ec9e24b92aeecc34be484b887_p_efm',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<UrlResult>',
            'description' => 'PlainResult<UrlResult>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '1813ceee-7fe5-41b4-87e5-982a4d18cca5',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'FileUrl' => 
                  array (
                    'title' => '文件url',
                    'description' => '文件url',
                    'type' => 'string',
                    'example' => 'http://xxx/xxx.xls',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1813ceee-7fe5-41b4-87e5-982a4d18cca5\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"FileUrl\\": \\"http://xxx/xxx.xls\\"\\n  }\\n}","type":"json"}]',
      'title' => '导出干预项内容',
    ),
    'GetInterveneImportTaskInfo' => 
    array (
      'summary' => '获得导入任务信息',
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
      'deprecated' => false,
      'systemTags' => 
      array (
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => '67c520d1fa43455ea44fb69fa402d54d_p_beebot_public',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '任务id',
            'description' => '任务id',
            'type' => 'string',
            'required' => false,
            'example' => '19162157',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<GetImportTaskInfoResult>',
            'description' => 'PlainResult<GetImportTaskInfoResult>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '1813ceee-7fe5-41b4-87e5-982a4d18cca5',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => '0',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'Success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'title' => '任务状态信息',
                    'description' => '任务状态信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'TaskId' => 
                      array (
                        'title' => '任务Id',
                        'description' => '任务Id',
                        'type' => 'string',
                        'example' => '41405255',
                      ),
                      'TaskName' => 
                      array (
                        'title' => '任务名字',
                        'description' => '任务名字',
                        'type' => 'string',
                        'example' => 'ft-task-20190101m8rnK',
                      ),
                      'Msg' => 
                      array (
                        'title' => '任务信息',
                        'description' => '任务信息',
                        'type' => 'string',
                        'example' => 'success',
                      ),
                      'Status' => 
                      array (
                        'title' => '任务状态',
                        'description' => '任务状态',
                        'type' => 'integer',
                        'format' => 'int32',
                        'enumValueTitles' => 
                        array (
                          '3-超时' => '3-超时',
                          '2-错误' => '2-错误',
                          ' 1-进行中 ' => ' 1-进行中 ',
                          '0-结束' => '0-结束',
                        ),
                        'example' => '0',
                      ),
                      'Percentage' => 
                      array (
                        'title' => '完成百分比',
                        'description' => '完成百分比',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '80',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1813ceee-7fe5-41b4-87e5-982a4d18cca5\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"Status\\": {\\n      \\"TaskId\\": \\"41405255\\",\\n      \\"TaskName\\": \\"ft-task-20190101m8rnK\\",\\n      \\"Msg\\": \\"success\\",\\n      \\"Status\\": 0,\\n      \\"Percentage\\": 80\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获得干预项目导入任务信息',
    ),
    'SaveDataSourceOrderConfig' => 
    array (
      'summary' => '保存用户的信源配置。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'c160c841c8e54295bf2f441432785944_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品类型 可选值 miaobi, miaosou',
            'description' => '产品类型 可选值 miaobi, miaosou',
            'type' => 'string',
            'required' => true,
            'example' => 'miaobi',
            'enum' => 
            array (
              0 => 'miaobi',
              1 => 'miaosou',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'UserConfigDataSourceList',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户数据源配置',
            'description' => '用户数据源配置',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Number' => 
                array (
                  'title' => '数量',
                  'description' => '数量',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'example' => '20',
                ),
                'Code' => 
                array (
                  'title' => 'code描述',
                  'description' => 'code描述',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'QuarkCommonNews',
                ),
                'Name' => 
                array (
                  'title' => '显示名称',
                  'description' => '显示名称',
                  'type' => 'string',
                  'required' => false,
                  'example' => '夸克通用搜索',
                ),
                'Type' => 
                array (
                  'title' => 'type类型',
                  'description' => 'type类型',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'SystemSearch',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<Boolean>',
            'description' => 'PlainResult<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '1813ceee-7fe5-41b4-87e5-982a4d18cca5',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'successful',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1813ceee-7fe5-41b4-87e5-982a4d18cca5\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": true\\n}","type":"json"}]',
      'title' => '保存信源权重配置',
    ),
    'GetDataSourceOrderConfig' => 
    array (
      'summary' => '获取系统数据源配置和个人配置。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'd9a1f6146a37446495d9985c2e7b267e_p_outbound_public',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '配置类型 可选值 miaobi、miaosou',
            'description' => '配置类型 可选值 miaobi、miaosou',
            'type' => 'string',
            'required' => true,
            'example' => 'miaobi',
            'enum' => 
            array (
              0 => 'miaobi',
              1 => 'miaosou',
            ),
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult<GetDataSourceOrderConfigResponse>',
            'description' => 'PlainResult<GetDataSourceOrderConfigResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '428DCC0D-3C63-5306-BD1B-124396AB97BE',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'successful',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'UserConfigDataSourceList' => 
                  array (
                    'title' => '用户配置数据源权重列表',
                    'description' => '用户配置数据源权重列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Number' => 
                        array (
                          'title' => '数量',
                          'description' => '数量',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '20',
                        ),
                        'Code' => 
                        array (
                          'title' => 'code描述',
                          'description' => 'code描述',
                          'type' => 'string',
                          'example' => 'QuarkCommonNews',
                        ),
                        'Name' => 
                        array (
                          'title' => '显示名称',
                          'description' => '显示名称',
                          'type' => 'string',
                          'example' => '夸克通用搜索',
                        ),
                        'Type' => 
                        array (
                          'title' => 'type类型',
                          'description' => 'type类型',
                          'type' => 'string',
                          'example' => 'SystemSearch',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"428DCC0D-3C63-5306-BD1B-124396AB97BE\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"UserConfigDataSourceList\\": [\\n      {\\n        \\"Number\\": 20,\\n        \\"Code\\": \\"QuarkCommonNews\\",\\n        \\"Name\\": \\"夸克通用搜索\\",\\n        \\"Type\\": \\"SystemSearch\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取信源配置权重数据',
    ),
    'DocumentExtraction' => 
    array (
      'summary' => '从链接中提取文档内容',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
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
            'title' => '业务空间唯一标识：AgentKey',
            'description' => '业务空间唯一标识：AgentKey',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxxx_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'Urls',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '待提取的链接列表',
            'description' => '待提取的链接列表',
            'type' => 'array',
            'items' => 
            array (
              'title' => 'URL链接',
              'description' => 'URL链接',
              'type' => 'string',
              'required' => false,
              'example' => 'http://www.example.com/',
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'description' => '成功',
          'schema' => 
          array (
            'title' => 'PlainResult',
            'description' => 'PlainResult',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一标识',
                'description' => '请求唯一标识',
                'type' => 'string',
                'example' => '1813ceee-7fe5-41b4-87e5-982a4d18cca5',
              ),
              'Success' => 
              array (
                'title' => '是否成功：true 成功，false 失败',
                'description' => '是否成功：true 成功，false 失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'NoData',
              ),
              'Message' => 
              array (
                'title' => '错误说明',
                'description' => '错误说明',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态码',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '业务数据',
                'description' => '业务数据',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '文档对象',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PubTime' => 
                    array (
                      'title' => '发布时间',
                      'description' => '发布时间',
                      'type' => 'string',
                      'example' => '2024-05-14 08:54:33',
                    ),
                    'Source' => 
                    array (
                      'title' => '来源',
                      'description' => '来源',
                      'type' => 'string',
                      'example' => '央视网',
                    ),
                    'Tag' => 
                    array (
                      'title' => '标签',
                      'description' => '标签',
                      'type' => 'string',
                      'example' => '文章标签',
                    ),
                    'Title' => 
                    array (
                      'title' => '标题',
                      'description' => '标题',
                      'type' => 'string',
                      'example' => '文章标题',
                    ),
                    'Content' => 
                    array (
                      'title' => '内容',
                      'description' => '内容',
                      'type' => 'string',
                      'example' => '文章内容',
                    ),
                    'Author' => 
                    array (
                      'title' => '作者',
                      'description' => '作者',
                      'type' => 'string',
                      'example' => '作者',
                    ),
                    'Url' => 
                    array (
                      'title' => '文章URL',
                      'description' => '文章URL',
                      'type' => 'string',
                      'example' => 'https://www.example.com/aaa.docx',
                    ),
                    'Summary' => 
                    array (
                      'title' => '文章摘要',
                      'description' => '文章摘要',
                      'type' => 'string',
                      'example' => '文章摘要',
                    ),
                    'DocUuid' => 
                    array (
                      'title' => '内部文档唯一标识',
                      'description' => '内部文档唯一标识',
                      'type' => 'string',
                      'example' => '8df2d69d63a247b6b52ff455b2d426b6',
                    ),
                    'DocId' => 
                    array (
                      'title' => '文档-自定义的唯一ID',
                      'description' => '文档-自定义的唯一ID',
                      'type' => 'string',
                      'example' => '文档-自定义的唯一ID',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1813ceee-7fe5-41b4-87e5-982a4d18cca5\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"NoData\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": [\\n    {\\n      \\"PubTime\\": \\"2024-05-14 08:54:33\\",\\n      \\"Source\\": \\"央视网\\",\\n      \\"Tag\\": \\"文章标签\\",\\n      \\"Title\\": \\"文章标题\\",\\n      \\"Content\\": \\"文章内容\\",\\n      \\"Author\\": \\"作者\\",\\n      \\"Url\\": \\"https://www.example.com/aaa.docx\\",\\n      \\"Summary\\": \\"文章摘要\\",\\n      \\"DocUuid\\": \\"8df2d69d63a247b6b52ff455b2d426b6\\",\\n      \\"DocId\\": \\"文档-自定义的唯一ID\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '文档提取',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'aimiaobi.cn-beijing.aliyuncs.com',
    ),
  ),
);
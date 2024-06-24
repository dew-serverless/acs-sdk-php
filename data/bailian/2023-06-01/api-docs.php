<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'bailian',
    'version' => '2023-06-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 189572,
      'title' => '企业知识库-V1',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SubmitDocumentImportJob',
        1 => 'DescribeDocumentImportJob',
        2 => 'ListDocs',
        3 => 'DescribeDoc',
        4 => 'DeleteDoc',
        5 => 'UpdateDocAttribute',
        6 => 'DeleteDocumentTag',
        7 => 'UpdateDocumentTag',
        8 => 'CreateDocumentTag',
        9 => 'ListDocumentTags',
      ),
    ),
    1 => 
    array (
      'id' => 187898,
      'title' => 'Prompt工程',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetPrompt',
      ),
    ),
    2 => 'CreateToken',
  ),
  'components' => 
  array (
    'schemas' => 
    array (
    ),
  ),
  'apis' => 
  array (
    'SubmitDocumentImportJob' => 
    array (
      'summary' => '提交文档批量上传任务。',
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
            'description' => '业务空间key，具体查看[地址](https://help.aliyun.com/document_detail/2587494.html?spm=a2c4g.2587492.0.0.60114f89AiFkvz#b521682076emk)',
            'type' => 'string',
            'required' => true,
            'example' => '2818xxxx_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'Docs',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '文档列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '文档',
              'type' => 'object',
              'properties' => 
              array (
                'Name' => 
                array (
                  'description' => '文档名称',
                  'type' => 'string',
                  'required' => true,
                  'example' => '文档1.pdf',
                ),
                'URL' => 
                array (
                  'description' => '文档下载地址',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'http://xxxx.com',
                ),
                'Type' => 
                array (
                  'description' => '文档类型

- RAW：对应doc/docx/pdf的文档

- FAQ：对应xlsx/xls的excel问答表格',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'RAW',
                ),
                'StoreId' => 
                array (
                  'description' => '向量数据库ID

- 取值来源：应用中心下的企业知识库-配置企业知识库-知识库ID',
                  'type' => 'string',
                  'required' => true,
                  'example' => '661dxxxx904f',
                ),
                'TagIds' => 
                array (
                  'description' => '标签ID列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '标签ID',
                    'type' => 'string',
                    'required' => false,
                    'example' => '471dxxxx3427',
                  ),
                  'required' => false,
                ),
                'OwnerId' => 
                array (
                  'type' => 'string',
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
                'example' => '778C0B3B-xxxx-5FC1-A947-36EDD13606AB',
              ),
              'JobId' => 
              array (
                'description' => '任务ID',
                'type' => 'string',
                'example' => '20230718xxxx-146c93bf',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"778C0B3B-xxxx-5FC1-A947-36EDD13606AB\\",\\n  \\"JobId\\": \\"20230718xxxx-146c93bf\\"\\n}","type":"json"}]',
      'title' => '提交文档上传任务',
    ),
    'DescribeDocumentImportJob' => 
    array (
      'summary' => '查询文档上传结果。',
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
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID',
            'type' => 'string',
            'required' => true,
            'example' => '20230718xxxx-146c93bf',
          ),
        ),
        1 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务空间key，具体查看[地址](https://help.aliyun.com/document_detail/2587494.html?spm=a2c4g.2587492.0.0.60114f89AiFkvz#b521682076emk)',
            'type' => 'string',
            'required' => true,
            'example' => '2818xxxx_p_efm',
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
                'example' => '35A267BF-xxxx-54DB-8394-AA3B0742D833',
              ),
              'JobId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '20230718xxxx-146c93bf',
              ),
              'Status' => 
              array (
                'title' => 'Id of the request',
                'description' => '任务状态',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  '部分成功' => '部分成功',
                  '成功' => '成功',
                  '处理失败' => '处理失败',
                  '处理中' => '处理中',
                ),
                'example' => '成功',
              ),
              'Docs' => 
              array (
                'description' => '文档列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '文档',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'description' => '文档名称',
                      'type' => 'string',
                      'example' => '文档1',
                    ),
                    'Status' => 
                    array (
                      'description' => '文档状态',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        '导入失败' => '导入失败',
                        '导入完成' => '导入完成',
                        '导入中' => '导入中',
                        '数据不合规' => '数据不合规',
                        '删除中' => '删除中',
                      ),
                      'example' => '导入完成',
                    ),
                    'DocId' => 
                    array (
                      'description' => '文档ID',
                      'type' => 'string',
                      'example' => '8C8FxxxxC3EE',
                    ),
                    'FailReason' => 
                    array (
                      'description' => '导入失败的原因',
                      'type' => 'string',
                      'example' => '导入索引失败',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"35A267BF-xxxx-54DB-8394-AA3B0742D833\\",\\n  \\"JobId\\": \\"20230718xxxx-146c93bf\\",\\n  \\"Status\\": \\"成功\\",\\n  \\"Docs\\": [\\n    {\\n      \\"Name\\": \\"文档1\\",\\n      \\"Status\\": \\"导入完成\\",\\n      \\"DocId\\": \\"8C8FxxxxC3EE\\",\\n      \\"FailReason\\": \\"导入索引失败\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询文档上传任务结果',
    ),
    'ListDocs' => 
    array (
      'summary' => '分页查询文档List。',
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
            'description' => '业务空间key，具体查看[地址](https://help.aliyun.com/document_detail/2587494.html?spm=a2c4g.2587492.0.0.60114f89AiFkvz#b521682076emk)',
            'type' => 'string',
            'required' => true,
            'example' => '2818xxxx_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '20',
            'minimum' => '1',
            'example' => '20',
            'default' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文档名称',
            'type' => 'string',
            'required' => false,
            'example' => '文档1',
          ),
        ),
        4 => 
        array (
          'name' => 'StoreId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '向量数据库ID',
            'type' => 'string',
            'required' => false,
            'example' => '661dxxxx904f',
          ),
        ),
        5 => 
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
              'type' => 'string',
              'required' => false,
              'example' => '471dxxxx3427',
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
                'example' => '17204B98-xxxx-4F9A-8464-2446A84821CA',
              ),
              'PageNo' => 
              array (
                'description' => '页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'Total' => 
              array (
                'description' => '总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'Docs' => 
              array (
                'description' => '文件列表查询结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '文档',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DocId' => 
                    array (
                      'description' => '文档ID',
                      'type' => 'string',
                      'example' => '8C8FxxxxC3EE',
                    ),
                    'Name' => 
                    array (
                      'description' => '文档名称',
                      'type' => 'string',
                      'example' => '文档1',
                    ),
                    'Size' => 
                    array (
                      'description' => '文档大小',
                      'type' => 'string',
                      'example' => '1.08MB',
                    ),
                    'Status' => 
                    array (
                      'description' => '文档状态',
                      'type' => 'string',
                      'example' => '导入完成',
                    ),
                    'Type' => 
                    array (
                      'description' => '文档类型
RAW
FAQ',
                      'type' => 'string',
                      'example' => 'RAW',
                    ),
                    'OwnerId' => 
                    array (
                      'description' => '文档归属用户ID',
                      'type' => 'string',
                      'example' => '22968',
                    ),
                    'FailReason' => 
                    array (
                      'description' => '导入失败的原因',
                      'type' => 'string',
                      'example' => '导入索引失败',
                    ),
                    'Tags' => 
                    array (
                      'description' => '标签ID列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'TagId' => 
                          array (
                            'description' => '标签ID',
                            'type' => 'string',
                            'example' => '471dxxxx3427',
                          ),
                          'TagName' => 
                          array (
                            'description' => '标签名称。',
                            'type' => 'string',
                            'example' => '标签1',
                          ),
                        ),
                      ),
                    ),
                    'UploadTime' => 
                    array (
                      'description' => '上传时间',
                      'type' => 'string',
                      'example' => '2024-01-12 10:43:02',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"17204B98-xxxx-4F9A-8464-2446A84821CA\\",\\n  \\"PageNo\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"Total\\": 30,\\n  \\"Docs\\": [\\n    {\\n      \\"DocId\\": \\"8C8FxxxxC3EE\\",\\n      \\"Name\\": \\"文档1\\",\\n      \\"Size\\": \\"1.08MB\\",\\n      \\"Status\\": \\"导入完成\\",\\n      \\"Type\\": \\"RAW\\",\\n      \\"OwnerId\\": \\"22968\\",\\n      \\"FailReason\\": \\"导入索引失败\\",\\n      \\"Tags\\": [\\n        {\\n          \\"TagId\\": \\"471dxxxx3427\\",\\n          \\"TagName\\": \\"标签1\\"\\n        }\\n      ],\\n      \\"UploadTime\\": \\"2024-01-12 10:43:02\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '分页查询文档List',
    ),
    'DescribeDoc' => 
    array (
      'summary' => '根据文档ID获得单个文档信息。',
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
          'name' => 'DocId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文档ID',
            'type' => 'string',
            'required' => true,
            'example' => '8C8FxxxxC3EE',
          ),
        ),
        1 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务空间key，具体查看[地址](https://help.aliyun.com/document_detail/2587494.html?spm=a2c4g.2587492.0.0.60114f89AiFkvz#b521682076emk)',
            'type' => 'string',
            'required' => true,
            'example' => '2818xxxx_p_efm',
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
                'example' => '778C0B3B-xxxx-5FC1-A947-36EDD13606AB',
              ),
              'DocId' => 
              array (
                'description' => '文档ID',
                'type' => 'string',
                'example' => '8C8FxxxxC3EE',
              ),
              'Name' => 
              array (
                'description' => '文档名称',
                'type' => 'string',
                'example' => '文档1',
              ),
              'Size' => 
              array (
                'description' => '文档名称',
                'type' => 'string',
                'example' => '1.12MB',
              ),
              'Status' => 
              array (
                'description' => '文档状态',
                'type' => 'string',
                'example' => '导入完成',
              ),
              'Type' => 
              array (
                'description' => '文档类型
RAW
FAQ',
                'type' => 'string',
                'example' => 'RAW',
              ),
              'OwnerId' => 
              array (
                'description' => '文档归属用户ID',
                'type' => 'string',
                'example' => '19539',
              ),
              'FailReason' => 
              array (
                'description' => '导入失败的原因',
                'type' => 'string',
                'example' => '导入索引失败',
              ),
              'UploadTime' => 
              array (
                'description' => '上传时间。',
                'type' => 'string',
                'example' => '2024-01-12 10:43:02',
              ),
              'Tags' => 
              array (
                'description' => '标签ID列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TagId' => 
                    array (
                      'description' => '标签ID',
                      'type' => 'string',
                      'example' => '471dxxxx3427',
                    ),
                    'TagName' => 
                    array (
                      'description' => '标签名称。',
                      'type' => 'string',
                      'example' => '标签1',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"778C0B3B-xxxx-5FC1-A947-36EDD13606AB\\",\\n  \\"DocId\\": \\"8C8FxxxxC3EE\\",\\n  \\"Name\\": \\"文档1\\",\\n  \\"Size\\": \\"1.12MB\\",\\n  \\"Status\\": \\"导入完成\\",\\n  \\"Type\\": \\"RAW\\",\\n  \\"OwnerId\\": \\"19539\\",\\n  \\"FailReason\\": \\"导入索引失败\\",\\n  \\"UploadTime\\": \\"2024-01-12 10:43:02\\",\\n  \\"Tags\\": [\\n    {\\n      \\"TagId\\": \\"471dxxxx3427\\",\\n      \\"TagName\\": \\"标签1\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '根据文档ID获取单个文档信息',
    ),
    'DeleteDoc' => 
    array (
      'summary' => '删除文档。',
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
        'operationType' => 'delete',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DocId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文档ID',
            'type' => 'string',
            'required' => true,
            'example' => '8C8FxxxxC3EE',
          ),
        ),
        1 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务空间key，具体查看[地址](https://help.aliyun.com/document_detail/2587494.html?spm=a2c4g.2587492.0.0.60114f89AiFkvz#b521682076emk)',
            'type' => 'string',
            'required' => true,
            'example' => '2818xxxx_p_efm',
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
                'example' => '17204B98-xxxx-4F9A-8464-2446A84821CA',
              ),
              'DocId' => 
              array (
                'description' => '文档ID',
                'type' => 'string',
                'example' => '8C8FxxxxC3EE',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"17204B98-xxxx-4F9A-8464-2446A84821CA\\",\\n  \\"DocId\\": \\"8C8FxxxxC3EE\\"\\n}","type":"json"}]',
      'title' => '删除文档',
    ),
    'UpdateDocAttribute' => 
    array (
      'summary' => '根据文档ID更新文档信息。',
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
            'description' => '业务空间key，具体查看[地址](https://help.aliyun.com/document_detail/2587494.html?spm=a2c4g.2587492.0.0.60114f89AiFkvz#b521682076emk)',
            'type' => 'string',
            'required' => true,
            'example' => '2818xxxx_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'DocId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文档ID',
            'type' => 'string',
            'required' => true,
            'example' => '8C8FxxxxC3EE',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文档名称',
            'type' => 'string',
            'required' => false,
            'example' => '文档新名称',
          ),
        ),
        3 => 
        array (
          'name' => 'DelAllTags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否全部删除标签',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'TagIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '标签ID，列表存放',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签ID',
              'type' => 'string',
              'required' => false,
              'example' => '471dxxxx3427',
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
                'example' => '17204B98-xxxx-4F9A-8464-2446A84821CA',
              ),
              'DocId' => 
              array (
                'description' => '文档ID',
                'type' => 'string',
                'example' => '8C8FxxxxC3EE',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"17204B98-xxxx-4F9A-8464-2446A84821CA\\",\\n  \\"DocId\\": \\"8C8FxxxxC3EE\\"\\n}","type":"json"}]',
      'title' => '根据文档ID更新文档信息',
    ),
    'DeleteDocumentTag' => 
    array (
      'summary' => '删除文档标签。',
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
        'operationType' => 'delete',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TagId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签ID',
            'type' => 'string',
            'required' => true,
            'example' => '471dxxxx3427',
          ),
        ),
        1 => 
        array (
          'name' => 'AgentKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务空间key，具体查看[地址](https://help.aliyun.com/document_detail/2587494.html?spm=a2c4g.2587492.0.0.60114f89AiFkvz#b521682076emk)',
            'type' => 'string',
            'required' => true,
            'example' => '2818xxxx_p_efm',
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
                'example' => '17204B98-xxxx-4F9A-8464-2446A84821CA',
              ),
              'TagId' => 
              array (
                'description' => '标签ID',
                'type' => 'string',
                'example' => '471dxxxx3427',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"17204B98-xxxx-4F9A-8464-2446A84821CA\\",\\n  \\"TagId\\": \\"471dxxxx3427\\"\\n}","type":"json"}]',
      'title' => '删除文档标签',
    ),
    'UpdateDocumentTag' => 
    array (
      'summary' => '修改文档标签。',
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
            'description' => '业务空间key，具体查看[地址](https://help.aliyun.com/document_detail/2587494.html?spm=a2c4g.2587492.0.0.60114f89AiFkvz#b521682076emk)',
            'type' => 'string',
            'required' => true,
            'example' => '2818xxxx_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'TagId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签ID',
            'type' => 'string',
            'required' => true,
            'example' => '471dxxxx3427',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签名称',
            'type' => 'string',
            'required' => true,
            'example' => '标签1',
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
                'example' => '1C139002-xxxx-584C-A755-4B8B9FA080BE',
              ),
              'TagId' => 
              array (
                'description' => '标签ID',
                'type' => 'string',
                'example' => '471dxxxx3427',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1C139002-xxxx-584C-A755-4B8B9FA080BE\\",\\n  \\"TagId\\": \\"471dxxxx3427\\"\\n}","type":"json"}]',
      'title' => '修改文档标签',
    ),
    'CreateDocumentTag' => 
    array (
      'summary' => '创建文档标签。',
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
            'description' => '业务空间key，具体查看[地址](https://help.aliyun.com/document_detail/2587494.html?spm=a2c4g.2587492.0.0.60114f89AiFkvz#b521682076emk)',
            'type' => 'string',
            'required' => true,
            'example' => '2818xxxx_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签名称',
            'type' => 'string',
            'required' => true,
            'example' => '标签1',
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
                'example' => '35A267BF-xxxx-54DB-8394-AA3B0742D833',
              ),
              'TagId' => 
              array (
                'description' => '标签ID',
                'type' => 'string',
                'example' => '471dxxxx3427',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"35A267BF-xxxx-54DB-8394-AA3B0742D833\\",\\n  \\"TagId\\": \\"471dxxxx3427\\"\\n}","type":"json"}]',
      'title' => '创建文档标签',
    ),
    'ListDocumentTags' => 
    array (
      'summary' => '分页查询企业管理标签。',
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
            'description' => '业务空间key，具体查看[地址](https://help.aliyun.com/document_detail/2587494.html?spm=a2c4g.2587492.0.0.60114f89AiFkvz#b521682076emk)',
            'type' => 'string',
            'required' => true,
            'example' => '2818xxxx_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'TagId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签ID',
            'type' => 'string',
            'required' => false,
            'example' => '471dxxxx3427',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签名称',
            'type' => 'string',
            'required' => false,
            'example' => '标签1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '20',
            'default' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
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
                'example' => '778C0B3B-xxxx-5FC1-A947-36EDD13606AB',
              ),
              'PageNo' => 
              array (
                'description' => '页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'Total' => 
              array (
                'description' => '总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'TagList' => 
              array (
                'description' => '标签列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'description' => '标签名称',
                      'type' => 'string',
                      'example' => '标签1',
                    ),
                    'TagId' => 
                    array (
                      'description' => '标签ID',
                      'type' => 'string',
                      'example' => '471dxxxx3427',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"778C0B3B-xxxx-5FC1-A947-36EDD13606AB\\",\\n  \\"PageNo\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"Total\\": 30,\\n  \\"TagList\\": [\\n    {\\n      \\"Name\\": \\"标签1\\",\\n      \\"TagId\\": \\"471dxxxx3427\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '分页查询企业管理标签',
    ),
    'GetPrompt' => 
    array (
      'summary' => '通过PromptId和变量信息获取prompt模板。',
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
            'description' => '业务空间key。',
            'type' => 'string',
            'required' => true,
            'example' => 'c160c841c8e54295bf2f441432785944_p_efm',
          ),
        ),
        1 => 
        array (
          'name' => 'PromptId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Prompt的唯一标识。',
            'type' => 'string',
            'required' => true,
            'example' => 'cfec40c311f14f3e976403059d8f0116',
          ),
        ),
        2 => 
        array (
          'name' => 'Vars',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'prompt 变量信息。',
            'type' => 'string',
            'required' => false,
            'example' => '{"platform":"小红书","topic":"蓝牙智能耳机","num1":"5个","num2":"5个"}',
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
            'description' => 'Schema of Response.',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request.',
                'type' => 'string',
                'example' => '1C139002-0EC5-584C-A755-4B8B9FA080BE',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。

- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '错误状态码。',
                'type' => 'string',
                'example' => '100004',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => '参数缺失',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'http 状态码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'PromptId' => 
                  array (
                    'description' => 'Prompt的唯一标识。',
                    'type' => 'string',
                    'example' => 'cfec40c311f14f3e976403059d8f0116',
                  ),
                  'PromptContent' => 
                  array (
                    'description' => '模板内容。',
                    'type' => 'string',
                    'example' => '你是一名在小红书平台具有丰富经验的专业爆款营销文案策划人，现在请以“蓝牙智能耳机”为核心主题，撰写一段极具吸引力的小红书营销内容。要求内容包括：一个引人入胜且符合SEO优化原则的标题，以及一段详细且富有情感煽动力的正文。在正文中，请至少插入5个不同的emoji表情，以增加内容的互动性和视觉吸引力。此外，请根据该主题，设计并提供最多5个热门推荐标签，这些标签需具有高度概括主题和吸引目标用户群的特点。',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1C139002-0EC5-584C-A755-4B8B9FA080BE\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"100004\\",\\n  \\"Message\\": \\"参数缺失\\",\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"Data\\": {\\n    \\"PromptId\\": \\"cfec40c311f14f3e976403059d8f0116\\",\\n    \\"PromptContent\\": \\"你是一名在小红书平台具有丰富经验的专业爆款营销文案策划人，现在请以“蓝牙智能耳机”为核心主题，撰写一段极具吸引力的小红书营销内容。要求内容包括：一个引人入胜且符合SEO优化原则的标题，以及一段详细且富有情感煽动力的正文。在正文中，请至少插入5个不同的emoji表情，以增加内容的互动性和视觉吸引力。此外，请根据该主题，设计并提供最多5个热门推荐标签，这些标签需具有高度概括主题和吸引目标用户群的特点。\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取prompt模板',
    ),
    'CreateToken' => 
    array (
      'summary' => '创建在线推理API的临时Token。',
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
            'description' => '业务空间key,key值在主账号业务管理页面获取',
            'type' => 'string',
            'required' => false,
            'example' => 'ac627989eb4f8a98ed05fd098beee5_p_efm',
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
                'example' => '778C0B3B-03C1-5FC1-A947-36EDD13606AB',
              ),
              'Success' => 
              array (
                'description' => '调用是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Code' => 
              array (
                'description' => '错误状态码',
                'type' => 'string',
                'example' => 'Forbidden',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => '错误信息',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'http 状态码',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '返回内容',
                'type' => 'object',
                'properties' => 
                array (
                  'Token' => 
                  array (
                    'description' => 'Token信息。',
                    'type' => 'string',
                    'example' => '89158587dfb7d85a335f98de4966d840',
                  ),
                  'ExpiredTime' => 
                  array (
                    'description' => '过期时间的时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1664177985651',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"778C0B3B-03C1-5FC1-A947-36EDD13606AB\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"Forbidden\\",\\n  \\"Message\\": \\"错误信息\\",\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"Data\\": {\\n    \\"Token\\": \\"89158587dfb7d85a335f98de4966d840\\",\\n    \\"ExpiredTime\\": 1664177985651\\n  }\\n}","type":"json"}]',
      'title' => '创建Token',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'bailian.cn-beijing.aliyuncs.com',
    ),
  ),
);
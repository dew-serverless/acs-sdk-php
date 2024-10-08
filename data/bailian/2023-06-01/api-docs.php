<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'bailian',
        'version' => '2023-06-01',
    ],
    'directories' => [
        [
            'id' => 189572,
            'title' => '企业知识库-V1',
            'type' => 'directory',
            'children' => [
                'SubmitDocumentImportJob',
                'DescribeDocumentImportJob',
                'ListDocs',
                'DescribeDoc',
                'DeleteDoc',
                'UpdateDocAttribute',
                'DeleteDocumentTag',
                'UpdateDocumentTag',
                'CreateDocumentTag',
                'ListDocumentTags',
            ],
        ],
        [
            'id' => 187898,
            'title' => 'Prompt工程',
            'type' => 'directory',
            'children' => [
                'GetPrompt',
            ],
        ],
        'CreateToken',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'SubmitDocumentImportJob' => [
            'summary' => '提交文档批量上传任务。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务空间key，具体查看[地址](https://help.aliyun.com/document_detail/2587494.html?spm=a2c4g.2587492.0.0.60114f89AiFkvz#b521682076emk)',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2818xxxx_p_efm',
                    ],
                ],
                [
                    'name' => 'Docs',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '文档列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '文档',
                            'type' => 'object',
                            'properties' => [
                                'Name' => [
                                    'description' => '文档名称',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => '文档1.pdf',
                                ],
                                'URL' => [
                                    'description' => '文档下载地址',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'http://xxxx.com',
                                ],
                                'Type' => [
                                    'description' => '文档类型'."\n"
                                        ."\n"
                                        .'- RAW：对应doc/docx/pdf的文档'."\n"
                                        ."\n"
                                        .'- FAQ：对应xlsx/xls的excel问答表格',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'RAW',
                                ],
                                'StoreId' => [
                                    'description' => '向量数据库ID'."\n"
                                        ."\n"
                                        .'- 取值来源：应用中心下的企业知识库-配置企业知识库-知识库ID',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => '661dxxxx904f',
                                ],
                                'TagIds' => [
                                    'description' => '标签ID列表。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '标签ID',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '471dxxxx3427',
                                    ],
                                    'required' => false,
                                ],
                                'OwnerId' => [
                                    'type' => 'string',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '778C0B3B-xxxx-5FC1-A947-36EDD13606AB',
                            ],
                            'JobId' => [
                                'description' => '任务ID',
                                'type' => 'string',
                                'example' => '20230718xxxx-146c93bf',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"778C0B3B-xxxx-5FC1-A947-36EDD13606AB\\",\\n  \\"JobId\\": \\"20230718xxxx-146c93bf\\"\\n}","type":"json"}]',
            'title' => '提交文档上传任务',
        ],
        'DescribeDocumentImportJob' => [
            'summary' => '查询文档上传结果。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '20230718xxxx-146c93bf',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务空间key，具体查看[地址](https://help.aliyun.com/document_detail/2587494.html?spm=a2c4g.2587492.0.0.60114f89AiFkvz#b521682076emk)',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2818xxxx_p_efm',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '35A267BF-xxxx-54DB-8394-AA3B0742D833',
                            ],
                            'JobId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '20230718xxxx-146c93bf',
                            ],
                            'Status' => [
                                'title' => 'Id of the request',
                                'description' => '任务状态',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    '部分成功' => '部分成功',
                                    '成功' => '成功',
                                    '处理失败' => '处理失败',
                                    '处理中' => '处理中',
                                ],
                                'example' => '成功',
                            ],
                            'Docs' => [
                                'description' => '文档列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '文档',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => '文档名称',
                                            'type' => 'string',
                                            'example' => '文档1',
                                        ],
                                        'Status' => [
                                            'description' => '文档状态',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                '导入失败' => '导入失败',
                                                '导入完成' => '导入完成',
                                                '导入中' => '导入中',
                                                '数据不合规' => '数据不合规',
                                                '删除中' => '删除中',
                                            ],
                                            'example' => '导入完成',
                                        ],
                                        'DocId' => [
                                            'description' => '文档ID',
                                            'type' => 'string',
                                            'example' => '8C8FxxxxC3EE',
                                        ],
                                        'FailReason' => [
                                            'description' => '导入失败的原因',
                                            'type' => 'string',
                                            'example' => '导入索引失败',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"35A267BF-xxxx-54DB-8394-AA3B0742D833\\",\\n  \\"JobId\\": \\"20230718xxxx-146c93bf\\",\\n  \\"Status\\": \\"成功\\",\\n  \\"Docs\\": [\\n    {\\n      \\"Name\\": \\"文档1\\",\\n      \\"Status\\": \\"导入完成\\",\\n      \\"DocId\\": \\"8C8FxxxxC3EE\\",\\n      \\"FailReason\\": \\"导入索引失败\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询文档上传任务结果',
        ],
        'ListDocs' => [
            'summary' => '分页查询文档List。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务空间key，具体查看[地址](https://help.aliyun.com/document_detail/2587494.html?spm=a2c4g.2587492.0.0.60114f89AiFkvz#b521682076emk)',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2818xxxx_p_efm',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '20',
                        'minimum' => '1',
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文档名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '文档1',
                    ],
                ],
                [
                    'name' => 'StoreId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '向量数据库ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '661dxxxx904f',
                    ],
                ],
                [
                    'name' => 'TagIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签ID列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签ID',
                            'type' => 'string',
                            'required' => false,
                            'example' => '471dxxxx3427',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '17204B98-xxxx-4F9A-8464-2446A84821CA',
                            ],
                            'PageNo' => [
                                'description' => '页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'Total' => [
                                'description' => '总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'Docs' => [
                                'description' => '文件列表查询结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '文档',
                                    'type' => 'object',
                                    'properties' => [
                                        'DocId' => [
                                            'description' => '文档ID',
                                            'type' => 'string',
                                            'example' => '8C8FxxxxC3EE',
                                        ],
                                        'Name' => [
                                            'description' => '文档名称',
                                            'type' => 'string',
                                            'example' => '文档1',
                                        ],
                                        'Size' => [
                                            'description' => '文档大小',
                                            'type' => 'string',
                                            'example' => '1.08MB',
                                        ],
                                        'Status' => [
                                            'description' => '文档状态',
                                            'type' => 'string',
                                            'example' => '导入完成',
                                        ],
                                        'Type' => [
                                            'description' => '文档类型'."\n"
                                                .'RAW'."\n"
                                                .'FAQ',
                                            'type' => 'string',
                                            'example' => 'RAW',
                                        ],
                                        'OwnerId' => [
                                            'description' => '文档归属用户ID',
                                            'type' => 'string',
                                            'example' => '22968',
                                        ],
                                        'FailReason' => [
                                            'description' => '导入失败的原因',
                                            'type' => 'string',
                                            'example' => '导入索引失败',
                                        ],
                                        'Tags' => [
                                            'description' => '标签ID列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '标签',
                                                'type' => 'object',
                                                'properties' => [
                                                    'TagId' => [
                                                        'description' => '标签ID',
                                                        'type' => 'string',
                                                        'example' => '471dxxxx3427',
                                                    ],
                                                    'TagName' => [
                                                        'description' => '标签名称。',
                                                        'type' => 'string',
                                                        'example' => '标签1',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'UploadTime' => [
                                            'description' => '上传时间',
                                            'type' => 'string',
                                            'example' => '2024-01-12 10:43:02',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"17204B98-xxxx-4F9A-8464-2446A84821CA\\",\\n  \\"PageNo\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"Total\\": 30,\\n  \\"Docs\\": [\\n    {\\n      \\"DocId\\": \\"8C8FxxxxC3EE\\",\\n      \\"Name\\": \\"文档1\\",\\n      \\"Size\\": \\"1.08MB\\",\\n      \\"Status\\": \\"导入完成\\",\\n      \\"Type\\": \\"RAW\\",\\n      \\"OwnerId\\": \\"22968\\",\\n      \\"FailReason\\": \\"导入索引失败\\",\\n      \\"Tags\\": [\\n        {\\n          \\"TagId\\": \\"471dxxxx3427\\",\\n          \\"TagName\\": \\"标签1\\"\\n        }\\n      ],\\n      \\"UploadTime\\": \\"2024-01-12 10:43:02\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '分页查询文档List',
        ],
        'DescribeDoc' => [
            'summary' => '根据文档ID获得单个文档信息。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'DocId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文档ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '8C8FxxxxC3EE',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务空间key，具体查看[地址](https://help.aliyun.com/document_detail/2587494.html?spm=a2c4g.2587492.0.0.60114f89AiFkvz#b521682076emk)',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2818xxxx_p_efm',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '778C0B3B-xxxx-5FC1-A947-36EDD13606AB',
                            ],
                            'DocId' => [
                                'description' => '文档ID',
                                'type' => 'string',
                                'example' => '8C8FxxxxC3EE',
                            ],
                            'Name' => [
                                'description' => '文档名称',
                                'type' => 'string',
                                'example' => '文档1',
                            ],
                            'Size' => [
                                'description' => '文档名称',
                                'type' => 'string',
                                'example' => '1.12MB',
                            ],
                            'Status' => [
                                'description' => '文档状态',
                                'type' => 'string',
                                'example' => '导入完成',
                            ],
                            'Type' => [
                                'description' => '文档类型'."\n"
                                    .'RAW'."\n"
                                    .'FAQ',
                                'type' => 'string',
                                'example' => 'RAW',
                            ],
                            'OwnerId' => [
                                'description' => '文档归属用户ID',
                                'type' => 'string',
                                'example' => '19539',
                            ],
                            'FailReason' => [
                                'description' => '导入失败的原因',
                                'type' => 'string',
                                'example' => '导入索引失败',
                            ],
                            'UploadTime' => [
                                'description' => '上传时间。',
                                'type' => 'string',
                                'example' => '2024-01-12 10:43:02',
                            ],
                            'Tags' => [
                                'description' => '标签ID列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签',
                                    'type' => 'object',
                                    'properties' => [
                                        'TagId' => [
                                            'description' => '标签ID',
                                            'type' => 'string',
                                            'example' => '471dxxxx3427',
                                        ],
                                        'TagName' => [
                                            'description' => '标签名称。',
                                            'type' => 'string',
                                            'example' => '标签1',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"778C0B3B-xxxx-5FC1-A947-36EDD13606AB\\",\\n  \\"DocId\\": \\"8C8FxxxxC3EE\\",\\n  \\"Name\\": \\"文档1\\",\\n  \\"Size\\": \\"1.12MB\\",\\n  \\"Status\\": \\"导入完成\\",\\n  \\"Type\\": \\"RAW\\",\\n  \\"OwnerId\\": \\"19539\\",\\n  \\"FailReason\\": \\"导入索引失败\\",\\n  \\"UploadTime\\": \\"2024-01-12 10:43:02\\",\\n  \\"Tags\\": [\\n    {\\n      \\"TagId\\": \\"471dxxxx3427\\",\\n      \\"TagName\\": \\"标签1\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '根据文档ID获取单个文档信息',
        ],
        'DeleteDoc' => [
            'summary' => '删除文档。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'DocId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文档ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '8C8FxxxxC3EE',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务空间key，具体查看[地址](https://help.aliyun.com/document_detail/2587494.html?spm=a2c4g.2587492.0.0.60114f89AiFkvz#b521682076emk)',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2818xxxx_p_efm',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '17204B98-xxxx-4F9A-8464-2446A84821CA',
                            ],
                            'DocId' => [
                                'description' => '文档ID',
                                'type' => 'string',
                                'example' => '8C8FxxxxC3EE',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"17204B98-xxxx-4F9A-8464-2446A84821CA\\",\\n  \\"DocId\\": \\"8C8FxxxxC3EE\\"\\n}","type":"json"}]',
            'title' => '删除文档',
        ],
        'UpdateDocAttribute' => [
            'summary' => '根据文档ID更新文档信息。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务空间key，具体查看[地址](https://help.aliyun.com/document_detail/2587494.html?spm=a2c4g.2587492.0.0.60114f89AiFkvz#b521682076emk)',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2818xxxx_p_efm',
                    ],
                ],
                [
                    'name' => 'DocId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文档ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '8C8FxxxxC3EE',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文档名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '文档新名称',
                    ],
                ],
                [
                    'name' => 'DelAllTags',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否全部删除标签',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'TagIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签ID，列表存放',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签ID',
                            'type' => 'string',
                            'required' => false,
                            'example' => '471dxxxx3427',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '17204B98-xxxx-4F9A-8464-2446A84821CA',
                            ],
                            'DocId' => [
                                'description' => '文档ID',
                                'type' => 'string',
                                'example' => '8C8FxxxxC3EE',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"17204B98-xxxx-4F9A-8464-2446A84821CA\\",\\n  \\"DocId\\": \\"8C8FxxxxC3EE\\"\\n}","type":"json"}]',
            'title' => '根据文档ID更新文档信息',
        ],
        'DeleteDocumentTag' => [
            'summary' => '删除文档标签。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'TagId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '471dxxxx3427',
                    ],
                ],
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务空间key，具体查看[地址](https://help.aliyun.com/document_detail/2587494.html?spm=a2c4g.2587492.0.0.60114f89AiFkvz#b521682076emk)',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2818xxxx_p_efm',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '17204B98-xxxx-4F9A-8464-2446A84821CA',
                            ],
                            'TagId' => [
                                'description' => '标签ID',
                                'type' => 'string',
                                'example' => '471dxxxx3427',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"17204B98-xxxx-4F9A-8464-2446A84821CA\\",\\n  \\"TagId\\": \\"471dxxxx3427\\"\\n}","type":"json"}]',
            'title' => '删除文档标签',
        ],
        'UpdateDocumentTag' => [
            'summary' => '修改文档标签。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务空间key，具体查看[地址](https://help.aliyun.com/document_detail/2587494.html?spm=a2c4g.2587492.0.0.60114f89AiFkvz#b521682076emk)',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2818xxxx_p_efm',
                    ],
                ],
                [
                    'name' => 'TagId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '471dxxxx3427',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => '标签1',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '1C139002-xxxx-584C-A755-4B8B9FA080BE',
                            ],
                            'TagId' => [
                                'description' => '标签ID',
                                'type' => 'string',
                                'example' => '471dxxxx3427',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1C139002-xxxx-584C-A755-4B8B9FA080BE\\",\\n  \\"TagId\\": \\"471dxxxx3427\\"\\n}","type":"json"}]',
            'title' => '修改文档标签',
        ],
        'CreateDocumentTag' => [
            'summary' => '创建文档标签。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务空间key，具体查看[地址](https://help.aliyun.com/document_detail/2587494.html?spm=a2c4g.2587492.0.0.60114f89AiFkvz#b521682076emk)',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2818xxxx_p_efm',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => '标签1',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '35A267BF-xxxx-54DB-8394-AA3B0742D833',
                            ],
                            'TagId' => [
                                'description' => '标签ID',
                                'type' => 'string',
                                'example' => '471dxxxx3427',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"35A267BF-xxxx-54DB-8394-AA3B0742D833\\",\\n  \\"TagId\\": \\"471dxxxx3427\\"\\n}","type":"json"}]',
            'title' => '创建文档标签',
        ],
        'ListDocumentTags' => [
            'summary' => '分页查询企业管理标签。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务空间key，具体查看[地址](https://help.aliyun.com/document_detail/2587494.html?spm=a2c4g.2587492.0.0.60114f89AiFkvz#b521682076emk)',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2818xxxx_p_efm',
                    ],
                ],
                [
                    'name' => 'TagId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '471dxxxx3427',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '标签1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '778C0B3B-xxxx-5FC1-A947-36EDD13606AB',
                            ],
                            'PageNo' => [
                                'description' => '页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'Total' => [
                                'description' => '总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'TagList' => [
                                'description' => '标签列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => '标签名称',
                                            'type' => 'string',
                                            'example' => '标签1',
                                        ],
                                        'TagId' => [
                                            'description' => '标签ID',
                                            'type' => 'string',
                                            'example' => '471dxxxx3427',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"778C0B3B-xxxx-5FC1-A947-36EDD13606AB\\",\\n  \\"PageNo\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"Total\\": 30,\\n  \\"TagList\\": [\\n    {\\n      \\"Name\\": \\"标签1\\",\\n      \\"TagId\\": \\"471dxxxx3427\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '分页查询企业管理标签',
        ],
        'GetPrompt' => [
            'summary' => '通过PromptId和变量信息获取prompt模板。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务空间key。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c160c841c8e54295bf2f441432785944_p_efm',
                    ],
                ],
                [
                    'name' => 'PromptId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Prompt的唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cfec40c311f14f3e976403059d8f0116',
                    ],
                ],
                [
                    'name' => 'Vars',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'prompt 变量信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"platform":"小红书","topic":"蓝牙智能耳机","num1":"5个","num2":"5个"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response.',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request.',
                                'type' => 'string',
                                'example' => '1C139002-0EC5-584C-A755-4B8B9FA080BE',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '错误状态码。',
                                'type' => 'string',
                                'example' => '100004',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => '参数缺失',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'http 状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'PromptId' => [
                                        'description' => 'Prompt的唯一标识。',
                                        'type' => 'string',
                                        'example' => 'cfec40c311f14f3e976403059d8f0116',
                                    ],
                                    'PromptContent' => [
                                        'description' => '模板内容。',
                                        'type' => 'string',
                                        'example' => '你是一名在小红书平台具有丰富经验的专业爆款营销文案策划人，现在请以“蓝牙智能耳机”为核心主题，撰写一段极具吸引力的小红书营销内容。要求内容包括：一个引人入胜且符合SEO优化原则的标题，以及一段详细且富有情感煽动力的正文。在正文中，请至少插入5个不同的emoji表情，以增加内容的互动性和视觉吸引力。此外，请根据该主题，设计并提供最多5个热门推荐标签，这些标签需具有高度概括主题和吸引目标用户群的特点。',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1C139002-0EC5-584C-A755-4B8B9FA080BE\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"100004\\",\\n  \\"Message\\": \\"参数缺失\\",\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"Data\\": {\\n    \\"PromptId\\": \\"cfec40c311f14f3e976403059d8f0116\\",\\n    \\"PromptContent\\": \\"你是一名在小红书平台具有丰富经验的专业爆款营销文案策划人，现在请以“蓝牙智能耳机”为核心主题，撰写一段极具吸引力的小红书营销内容。要求内容包括：一个引人入胜且符合SEO优化原则的标题，以及一段详细且富有情感煽动力的正文。在正文中，请至少插入5个不同的emoji表情，以增加内容的互动性和视觉吸引力。此外，请根据该主题，设计并提供最多5个热门推荐标签，这些标签需具有高度概括主题和吸引目标用户群的特点。\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取prompt模板',
        ],
        'CreateToken' => [
            'summary' => '创建在线推理API的临时Token。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AgentKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务空间key,key值在主账号业务管理页面获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac627989eb4f8a98ed05fd098beee5_p_efm',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '778C0B3B-03C1-5FC1-A947-36EDD13606AB',
                            ],
                            'Success' => [
                                'description' => '调用是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '错误状态码',
                                'type' => 'string',
                                'example' => 'Forbidden',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '错误信息',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'http 状态码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Data' => [
                                'description' => '返回内容',
                                'type' => 'object',
                                'properties' => [
                                    'Token' => [
                                        'description' => 'Token信息。',
                                        'type' => 'string',
                                        'example' => '89158587dfb7d85a335f98de4966d840',
                                    ],
                                    'ExpiredTime' => [
                                        'description' => '过期时间的时间戳。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1664177985651',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"778C0B3B-03C1-5FC1-A947-36EDD13606AB\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"Forbidden\\",\\n  \\"Message\\": \\"错误信息\\",\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"Data\\": {\\n    \\"Token\\": \\"89158587dfb7d85a335f98de4966d840\\",\\n    \\"ExpiredTime\\": 1664177985651\\n  }\\n}","type":"json"}]',
            'title' => '创建Token',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'bailian.cn-beijing.aliyuncs.com',
        ],
    ],
];
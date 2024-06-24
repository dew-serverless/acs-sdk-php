<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'nlp-automl',
    'version' => '2019-07-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddMTInterveneWord',
        1 => 'GetPredictDoc',
        2 => 'PredictMTModelByDoc',
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
    'AddMTInterveneWord' => 
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
        2 => 
        array (
          'PrivateKey' => 
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
          'name' => 'SourceText',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '原文',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hello',
          ),
        ),
        1 => 
        array (
          'name' => 'TargetText',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '译文',
            'type' => 'string',
            'required' => false,
            'example' => '你好',
          ),
        ),
        2 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PackageId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '词包id',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '1',
            'default' => 'mt_automl',
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
                'description' => '接口返回码：200：表示成功。
其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。错误码对应的错误信息。',
                'type' => 'string',
                'example' => 'parameterError',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '46E6B40D-2B6C-571B-AC41-86207DE288A5',
              ),
              'WordId' => 
              array (
                'description' => '新增成功的词id',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"parameterError\\",\\n  \\"RequestId\\": \\"46E6B40D-2B6C-571B-AC41-86207DE288A5\\",\\n  \\"WordId\\": 1\\n}","type":"json"}]',
      'title' => '增加干预数据',
      'summary' => '把待干预的原文和译文添加到ProjectId和PackageId对应的dataSet上。',
      'description' => '请确保在使用该接口前，已充分了解NLP自学习平台产品的收费方式和[价格](https://common-buy.aliyun.com/?commodityCode=nlp_bag#/buy)',
    ),
    'GetPredictDoc' => 
    array (
      'methods' => 
      array (
        0 => 'head',
        1 => 'post',
        2 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DocId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文档id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1000',
          ),
        ),
        1 => 
        array (
          'name' => 'Product',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品code',
            'type' => 'string',
            'required' => false,
            'example' => '空',
            'default' => 'mt_automl',
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
              'Status' => 
              array (
                'description' => '0:初始化 1:处理中 2:处理成功 3:处理失败',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '86D18195-D89C-4C8C-9DC4-5FCE789CE6D5',
              ),
              'ResultContent' => 
              array (
                'description' => '预测结果，文件流形式',
                'type' => 'string',
                'example' => 'xxx',
              ),
              'XLIFFInfo' => 
              array (
                'description' => 'xliff信息，文件流形式',
                'type' => 'string',
                'example' => 'xxx',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": 2,\\n  \\"RequestId\\": \\"86D18195-D89C-4C8C-9DC4-5FCE789CE6D5\\",\\n  \\"ResultContent\\": \\"xxx\\",\\n  \\"XLIFFInfo\\": \\"xxx\\"\\n}","type":"json"}]',
      'title' => '获取文档预测结果',
      'summary' => '根据调用PredictMTModelByDoc返回的docId，调用该接口，返回预测后的结果。',
      'description' => '请确保在使用该接口前，已充分了解NLP自学习平台产品的收费方式和[价格](https://common-buy.aliyun.com/?commodityCode=nlp_bag#/buy)',
    ),
    'PredictMTModelByDoc' => 
    array (
      'methods' => 
      array (
        0 => 'head',
        1 => 'post',
        2 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileContent',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件数据内容，文件内容需进过base64编码',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '[base64 encode content]',
          ),
        ),
        1 => 
        array (
          'name' => 'FileType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件类型',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'docx',
          ),
        ),
        2 => 
        array (
          'name' => 'ModelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模型id',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'NeedXLIFF',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否需要xliff信息',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'ModelVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模型版本',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'v1',
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
              'DocId' => 
              array (
                'description' => '文档id',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '86D18195-D89C-4C8C-9DC4-5FCE789CE6D5',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"DocId\\": \\"1\\",\\n  \\"RequestId\\": \\"86D18195-D89C-4C8C-9DC4-5FCE789CE6D5\\"\\n}","type":"json"}]',
      'title' => '提交文档预测任务',
      'summary' => '上传文档内容，指定模型进行预测。',
      'description' => '请确保在使用该接口前，已充分了解NLP自学习平台产品的收费方式和[价格](https://common-buy.aliyun.com/?commodityCode=nlp_bag#/buy)',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'nlp-automl.cn-hangzhou.aliyuncs.com',
    ),
  ),
);
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'nlp-automl',
    'version' => '2019-11-11',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 66230,
      'title' => '预测',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateAsyncPredict',
        1 => 'GetAsyncPredict',
      ),
    ),
    1 => 
    array (
      'id' => 66233,
      'title' => '模型',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetPredictResult',
        1 => 'RunPreTrainService',
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
    'CreateAsyncPredict' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ModelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '根据服务名称和服务版本创建异步预测的时候，此参数不必传；否则必传；',
            'description' => '模型ID。根据服务名称和服务版本创建异步预测的时候，此参数不必传；否则必传。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'Content',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '预测内容，最大长度：1024字节。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '全国土地利用总体规划',
          ),
        ),
        2 => 
        array (
          'name' => 'ModelVersion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '要获取的物模型版本号。不传入此参数，则返回已发布的最新版本。根据模型ID调用异步预测接口的时候传此参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'V1',
          ),
        ),
        3 => 
        array (
          'name' => 'DetailTag',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文本实体抽取类型模型，是否返回详细抽取结果。可选值：true/false。',
            'type' => 'string',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'TopK',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设置返回top结果数量。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0,3',
          ),
        ),
        5 => 
        array (
          'name' => 'FileType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件类型',
            'type' => 'string',
            'required' => false,
            'example' => 'text,html,pdf,docx,doc',
          ),
        ),
        6 => 
        array (
          'name' => 'FileUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件HTTP保存地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://127.0.0.1/example.docx',
          ),
        ),
        7 => 
        array (
          'name' => 'FileContent',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件内容Base64编码。',
            'type' => 'string',
            'required' => false,
            'example' => '[base64 encode content]',
          ),
        ),
        8 => 
        array (
          'name' => 'FetchContent',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '返回预测文本',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        9 => 
        array (
          'name' => 'ServiceName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '服务名称',
            'description' => '服务名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'ContractNERPretrain',
          ),
        ),
        10 => 
        array (
          'name' => 'ServiceVersion',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '服务版本',
            'description' => '服务版本。',
            'type' => 'string',
            'required' => false,
            'example' => 'V1',
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
              'AsyncPredictId' => 
              array (
                'description' => '异步预测唯一ID，用于查询异步预测结果。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'E5C4531B-8331-5CD5-BEB3-2F8B58A4D680',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => '40002',
            'errorMessage' => 'The specified interface is throttled.',
          ),
          1 => 
          array (
            'errorCode' => '40013',
            'errorMessage' => 'An error occurred while authenticating the model.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidAccountStatus.ServiceUnavailable',
            'errorMessage' => 'The NLP Auto Machine Learning service has not been activated.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccountStatus.ServiceLimit',
            'errorMessage' => 'The maximum number of free API daily visits is exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.ModelId',
            'errorMessage' => 'The specified modelId is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.ModelVersion',
            'errorMessage' => 'The specified modelVersion is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidContentLength',
            'errorMessage' => 'The length of content exceeds the limit.',
          ),
          5 => 
          array (
            'errorCode' => 'parameterError',
            'errorMessage' => 'The parameter is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'predictLimit',
            'errorMessage' => 'The maximum number of submitted tasks is exceeded.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbbiden',
            'errorMessage' => 'You are not authorized to operate on the specified resource.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound',
            'errorMessage' => 'The specified Model does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AsyncPredictId\\": 1,\\n  \\"RequestId\\": \\"E5C4531B-8331-5CD5-BEB3-2F8B58A4D680\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateAsyncPredictResponse>\\r\\n      <requestId>A357B459-3EA6-4F68-B285-FFDDF4E4662D</requestId>\\r\\n      <asyncPredictId>1634</asyncPredictId>\\r\\n</CreateAsyncPredictResponse>","errorExample":""}]',
      'title' => '创建一个异步预测',
      'summary' => '调用CreateAsyncPredict创建一个异步预测。',
    ),
    'GetAsyncPredict' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AsyncPredictId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步预测ID，通过调用CreateAsyncPredict接口获取。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1629',
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
              'AsyncPredictId' => 
              array (
                'description' => '异步预测ID，通过调用CreateAsyncPredict接口获取。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1629',
              ),
              'Status' => 
              array (
                'description' => '异步预测状态，状态类型说明：

- 1：处理中。
- 2：处理完成。
- 3：处理失败。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EBF1AAD7-A3FB-4A78-B5E9-8356324B12B2',
              ),
              'Content' => 
              array (
                'description' => '异步预测结果，JSON字符串格式文本。',
                'type' => 'string',
                'example' => 'json string',
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
            'errorCode' => 'InvalidAccountStatus.ServiceUnavailable',
            'errorMessage' => 'The NLP Auto Machine Learning service has not been activated.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccountStatus.ServiceLimit',
            'errorMessage' => 'The maximum number of free API daily visits is exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.ModelId',
            'errorMessage' => 'The specified modelId is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.ModelVersion',
            'errorMessage' => 'The specified modelVersion is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidContentLength',
            'errorMessage' => 'The length of content exceeds the limit.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbbiden',
            'errorMessage' => 'You are not authorized to operate on the specified resource.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound',
            'errorMessage' => 'The specified Model does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AsyncPredictId\\": 1629,\\n  \\"Status\\": 2,\\n  \\"RequestId\\": \\"EBF1AAD7-A3FB-4A78-B5E9-8356324B12B2\\",\\n  \\"Content\\": \\"json string\\"\\n}","errorExample":""},{"type":"xml","example":"<GetAsyncPredictResponse>\\n    <requestId>EBF1AAD7-A3FB-4A78-B5E9-8356324B12B2</requestId>\\n    <asyncPredictId>1629</asyncPredictId>\\n    <status>2</status>\\n    <content></content>\\n</GetAsyncPredictResponse>","errorExample":""}]',
      'title' => '获取异步预测结果',
      'summary' => '调用GetAsyncPredict获取异步预测结果。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetPredictResult' => 
    array (
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
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ModelId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模型id。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1818',
          ),
        ),
        1 => 
        array (
          'name' => 'Content',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '预测文本。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '中华人民共和国人民解放军',
          ),
        ),
        2 => 
        array (
          'name' => 'ModelVersion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模型版本。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'V1',
          ),
        ),
        3 => 
        array (
          'name' => 'DetailTag',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '**文本实体抽取**模型预测是否返回详细结果，取值true或者false。',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'TopK',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '**关键短语抽取**模型，设置返回top结果数量。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3',
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
              'Content' => 
              array (
                'description' => '预测结果，格式为JSON字符串。',
                'type' => 'string',
                'example' => '["人民解放军","中华人民共和国"]',
              ),
              'RequestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '32CE4E89-218B-4DAE-A103-E6BFA66EE63B',
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
            'errorCode' => 'InvalidAccountStatus.ServiceUnavailable',
            'errorMessage' => 'The NLP Auto Machine Learning service has not been activated.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccountStatus.ServiceLimit',
            'errorMessage' => 'The maximum number of free API daily visits is exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.ModelId',
            'errorMessage' => 'The specified modelId is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.ModelVersion',
            'errorMessage' => 'The specified modelVersion is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidContentLength',
            'errorMessage' => 'The length of content exceeds the limit.',
          ),
          5 => 
          array (
            'errorCode' => 'parameterError',
            'errorMessage' => 'The parameter is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => '40003',
            'errorMessage' => 'An error occurred while authenticating the model.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbbiden',
            'errorMessage' => 'You are not authorized to operate on the specified resource.',
          ),
          2 => 
          array (
            'errorCode' => '40002',
            'errorMessage' => 'The specified interface is throttled.',
          ),
          3 => 
          array (
            'errorCode' => '40013',
            'errorMessage' => 'An error occurred while authenticating the model.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound',
            'errorMessage' => 'The specified Model does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
          1 => 
          array (
            'errorCode' => 'ModelInferenceFailed',
            'errorMessage' => 'The model inference result is null.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Content\\": \\"[\\\\\\"人民解放军\\\\\\",\\\\\\"中华人民共和国\\\\\\"]\\",\\n  \\"RequestId\\": \\"32CE4E89-218B-4DAE-A103-E6BFA66EE63B\\"\\n}","errorExample":""},{"type":"xml","example":"<GetPredictResultResponse> \\n  <requestId>32CE4E89-218B-4DAE-A103-E6BFA66EE63B</requestId>  \\n  <content>[\\"人民解放军\\",\\"中华人民共和国\\"]</content> \\n</GetPredictResultResponse>","errorExample":""}]',
      'title' => '获取模型预测结果',
      'summary' => '调用GetPredictResult获取模型预测结果。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RunPreTrainService' => 
    array (
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServiceName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ReviewAnalysis',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceVersion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务版本。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'V1',
          ),
        ),
        2 => 
        array (
          'name' => 'PredictContent',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '预测输入。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"input":{"content": "这件衣服真好看", "domain": "clothing"}}',
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
              'PredictResult' => 
              array (
                'description' => '模型预测结果。',
                'type' => 'string',
                'example' => '{"cost":"21.812ms","imprs":[{"aspect":"款式","clause":"这件衣服真好看","neg_prob":0.0,"pos_prob":0.566100001335144,"position":"0,7","sentiment":"正"}]},"message":"SUCCESS","tracerId":"7973b50e31dcbea8323460e0134d3226"}',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7310FFCF-9FE8-4257-AE38-0E1AD828C2CC',
              ),
              'BillingCount' => 
              array (
                'description' => '计费次数，对应抵扣资源包数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
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
            'errorCode' => 'InvalidAccountStatus.ServiceUnavailable',
            'errorMessage' => 'The NLP Auto Machine Learning service has not been activated.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccountStatus.ServiceLimit',
            'errorMessage' => 'The maximum number of free API daily visits is exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'parameterError',
            'errorMessage' => 'The parameter is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'predictContentLength',
            'errorMessage' => 'The length of content exceeds the limit.',
          ),
          4 => 
          array (
            'errorCode' => 'postPaidArrearage',
            'errorMessage' => 'The service is not opened or the account is overdue.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound',
            'errorMessage' => 'The specified Model does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ModelInferenceError',
            'errorMessage' => 'Failed to obtain the model prediction result.',
          ),
          1 => 
          array (
            'errorCode' => 'UnknownError',
            'errorMessage' => 'A server error occurred while processing your request. Please try again later or contact customer support.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
          3 => 
          array (
            'errorCode' => 'predictTimeout',
            'errorMessage' => 'model predict cost greater than 9000ms.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PredictResult\\": \\"{\\\\\\"cost\\\\\\":\\\\\\"21.812ms\\\\\\",\\\\\\"imprs\\\\\\":[{\\\\\\"aspect\\\\\\":\\\\\\"款式\\\\\\",\\\\\\"clause\\\\\\":\\\\\\"这件衣服真好看\\\\\\",\\\\\\"neg_prob\\\\\\":0.0,\\\\\\"pos_prob\\\\\\":0.566100001335144,\\\\\\"position\\\\\\":\\\\\\"0,7\\\\\\",\\\\\\"sentiment\\\\\\":\\\\\\"正\\\\\\"}]},\\\\\\"message\\\\\\":\\\\\\"SUCCESS\\\\\\",\\\\\\"tracerId\\\\\\":\\\\\\"7973b50e31dcbea8323460e0134d3226\\\\\\"}\\",\\n  \\"RequestId\\": \\"7310FFCF-9FE8-4257-AE38-0E1AD828C2CC\\",\\n  \\"BillingCount\\": 1\\n}","errorExample":""},{"type":"xml","example":"<RunPreTrainServiceResponse>\\n    <PredictResult>{\\"cost\\":\\"21.812ms\\",\\"imprs\\":[{\\"aspect\\":\\"款式\\",\\"clause\\":\\"这件衣服真好看\\",\\"neg_prob\\":0.0,\\"pos_prob\\":0.566100001335144,\\"position\\":\\"0,7\\",\\"sentiment\\":\\"正\\"}]},\\"message\\":\\"SUCCESS\\",\\"tracerId\\":\\"7973b50e31dcbea8323460e0134d3226\\"}</PredictResult>\\n    <RequestId>7310FFCF-9FE8-4257-AE38-0E1AD828C2CC</RequestId>\\n    <BillingCount>1</BillingCount>\\n</RunPreTrainServiceResponse>","errorExample":""}]',
      'title' => '调用预训练模型服务',
      'summary' => '调用预训练模型服务。',
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
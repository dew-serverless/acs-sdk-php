<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'nlp-automl',
        'version' => '2019-11-11',
    ],
    'directories' => [
        [
            'id' => 66230,
            'title' => '预测',
            'type' => 'directory',
            'children' => [
                'CreateAsyncPredict',
                'GetAsyncPredict',
            ],
        ],
        [
            'id' => 66233,
            'title' => '模型',
            'type' => 'directory',
            'children' => [
                'GetPredictResult',
                'RunPreTrainService',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateAsyncPredict' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ModelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '根据服务名称和服务版本创建异步预测的时候，此参数不必传；否则必传；',
                        'description' => '模型ID。根据服务名称和服务版本创建异步预测的时候，此参数不必传；否则必传。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '预测内容，最大长度：1024字节。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '全国土地利用总体规划',
                    ],
                ],
                [
                    'name' => 'ModelVersion',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '要获取的物模型版本号。不传入此参数，则返回已发布的最新版本。根据模型ID调用异步预测接口的时候传此参数。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'V1',
                    ],
                ],
                [
                    'name' => 'DetailTag',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文本实体抽取类型模型，是否返回详细抽取结果。可选值：true/false。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'TopK',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设置返回top结果数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0,3',
                    ],
                ],
                [
                    'name' => 'FileType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文件类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'text,html,pdf,docx,doc',
                    ],
                ],
                [
                    'name' => 'FileUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文件HTTP保存地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://127.0.0.1/example.docx',
                    ],
                ],
                [
                    'name' => 'FileContent',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文件内容Base64编码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[base64 encode content]',
                    ],
                ],
                [
                    'name' => 'FetchContent',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '返回预测文本',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ServiceName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '服务名称',
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ContractNERPretrain',
                    ],
                ],
                [
                    'name' => 'ServiceVersion',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '服务版本',
                        'description' => '服务版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'V1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AsyncPredictId' => [
                                'description' => '异步预测唯一ID，用于查询异步预测结果。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'E5C4531B-8331-5CD5-BEB3-2F8B58A4D680',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => '40002',
                        'errorMessage' => 'The specified interface is throttled.',
                    ],
                    [
                        'errorCode' => '40013',
                        'errorMessage' => 'An error occurred while authenticating the model.',
                    ],
                ],
                400 => [
                    [
                        'errorCode' => 'InvalidAccountStatus.ServiceUnavailable',
                        'errorMessage' => 'The NLP Auto Machine Learning service has not been activated.',
                    ],
                    [
                        'errorCode' => 'InvalidAccountStatus.ServiceLimit',
                        'errorMessage' => 'The maximum number of free API daily visits is exceeded.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ModelId',
                        'errorMessage' => 'The specified modelId is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ModelVersion',
                        'errorMessage' => 'The specified modelVersion is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidContentLength',
                        'errorMessage' => 'The length of content exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'parameterError',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'predictLimit',
                        'errorMessage' => 'The maximum number of submitted tasks is exceeded.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbbiden',
                        'errorMessage' => 'You are not authorized to operate on the specified resource.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified Model does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'An error occurred while processing your request.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"AsyncPredictId\\": 1,\\n  \\"RequestId\\": \\"E5C4531B-8331-5CD5-BEB3-2F8B58A4D680\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateAsyncPredictResponse>\\r\\n      <requestId>A357B459-3EA6-4F68-B285-FFDDF4E4662D</requestId>\\r\\n      <asyncPredictId>1634</asyncPredictId>\\r\\n</CreateAsyncPredictResponse>","errorExample":""}]',
            'title' => '创建一个异步预测',
            'summary' => '调用CreateAsyncPredict创建一个异步预测。',
        ],
        'GetAsyncPredict' => [
            'methods' => [
                'get',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'AsyncPredictId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异步预测ID，通过调用CreateAsyncPredict接口获取。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1629',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AsyncPredictId' => [
                                'description' => '异步预测ID，通过调用CreateAsyncPredict接口获取。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1629',
                            ],
                            'Status' => [
                                'description' => '异步预测状态，状态类型说明：'."\n"
                                    ."\n"
                                    .'- 1：处理中。'."\n"
                                    .'- 2：处理完成。'."\n"
                                    .'- 3：处理失败。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'EBF1AAD7-A3FB-4A78-B5E9-8356324B12B2',
                            ],
                            'Content' => [
                                'description' => '异步预测结果，JSON字符串格式文本。',
                                'type' => 'string',
                                'example' => 'json string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidAccountStatus.ServiceUnavailable',
                        'errorMessage' => 'The NLP Auto Machine Learning service has not been activated.',
                    ],
                    [
                        'errorCode' => 'InvalidAccountStatus.ServiceLimit',
                        'errorMessage' => 'The maximum number of free API daily visits is exceeded.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ModelId',
                        'errorMessage' => 'The specified modelId is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ModelVersion',
                        'errorMessage' => 'The specified modelVersion is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidContentLength',
                        'errorMessage' => 'The length of content exceeds the limit.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbbiden',
                        'errorMessage' => 'You are not authorized to operate on the specified resource.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified Model does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'An error occurred while processing your request.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"AsyncPredictId\\": 1629,\\n  \\"Status\\": 2,\\n  \\"RequestId\\": \\"EBF1AAD7-A3FB-4A78-B5E9-8356324B12B2\\",\\n  \\"Content\\": \\"json string\\"\\n}","errorExample":""},{"type":"xml","example":"<GetAsyncPredictResponse>\\n    <requestId>EBF1AAD7-A3FB-4A78-B5E9-8356324B12B2</requestId>\\n    <asyncPredictId>1629</asyncPredictId>\\n    <status>2</status>\\n    <content></content>\\n</GetAsyncPredictResponse>","errorExample":""}]',
            'title' => '获取异步预测结果',
            'summary' => '调用GetAsyncPredict获取异步预测结果。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetPredictResult' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ModelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '模型id。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1818',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '预测文本。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '中华人民共和国人民解放军',
                    ],
                ],
                [
                    'name' => 'ModelVersion',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '模型版本。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'V1',
                    ],
                ],
                [
                    'name' => 'DetailTag',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '**文本实体抽取**模型预测是否返回详细结果，取值true或者false。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'TopK',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '**关键短语抽取**模型，设置返回top结果数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Content' => [
                                'description' => '预测结果，格式为JSON字符串。',
                                'type' => 'string',
                                'example' => '["人民解放军","中华人民共和国"]',
                            ],
                            'RequestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '32CE4E89-218B-4DAE-A103-E6BFA66EE63B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidAccountStatus.ServiceUnavailable',
                        'errorMessage' => 'The NLP Auto Machine Learning service has not been activated.',
                    ],
                    [
                        'errorCode' => 'InvalidAccountStatus.ServiceLimit',
                        'errorMessage' => 'The maximum number of free API daily visits is exceeded.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ModelId',
                        'errorMessage' => 'The specified modelId is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ModelVersion',
                        'errorMessage' => 'The specified modelVersion is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidContentLength',
                        'errorMessage' => 'The length of content exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'parameterError',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => '40003',
                        'errorMessage' => 'An error occurred while authenticating the model.',
                    ],
                    [
                        'errorCode' => 'Forbbiden',
                        'errorMessage' => 'You are not authorized to operate on the specified resource.',
                    ],
                    [
                        'errorCode' => '40002',
                        'errorMessage' => 'The specified interface is throttled.',
                    ],
                    [
                        'errorCode' => '40013',
                        'errorMessage' => 'An error occurred while authenticating the model.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified Model does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request.',
                    ],
                    [
                        'errorCode' => 'ModelInferenceFailed',
                        'errorMessage' => 'The model inference result is null.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'An error occurred while processing your request.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Content\\": \\"[\\\\\\"人民解放军\\\\\\",\\\\\\"中华人民共和国\\\\\\"]\\",\\n  \\"RequestId\\": \\"32CE4E89-218B-4DAE-A103-E6BFA66EE63B\\"\\n}","errorExample":""},{"type":"xml","example":"<GetPredictResultResponse> \\n  <requestId>32CE4E89-218B-4DAE-A103-E6BFA66EE63B</requestId>  \\n  <content>[\\"人民解放军\\",\\"中华人民共和国\\"]</content> \\n</GetPredictResultResponse>","errorExample":""}]',
            'title' => '获取模型预测结果',
            'summary' => '调用GetPredictResult获取模型预测结果。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RunPreTrainService' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ServiceName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ReviewAnalysis',
                    ],
                ],
                [
                    'name' => 'ServiceVersion',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务版本。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'V1',
                    ],
                ],
                [
                    'name' => 'PredictContent',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '预测输入。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{"input":{"content": "这件衣服真好看", "domain": "clothing"}}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PredictResult' => [
                                'description' => '模型预测结果。',
                                'type' => 'string',
                                'example' => '{"cost":"21.812ms","imprs":[{"aspect":"款式","clause":"这件衣服真好看","neg_prob":0.0,"pos_prob":0.566100001335144,"position":"0,7","sentiment":"正"}]},"message":"SUCCESS","tracerId":"7973b50e31dcbea8323460e0134d3226"}',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7310FFCF-9FE8-4257-AE38-0E1AD828C2CC',
                            ],
                            'BillingCount' => [
                                'description' => '计费次数，对应抵扣资源包数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidAccountStatus.ServiceUnavailable',
                        'errorMessage' => 'The NLP Auto Machine Learning service has not been activated.',
                    ],
                    [
                        'errorCode' => 'InvalidAccountStatus.ServiceLimit',
                        'errorMessage' => 'The maximum number of free API daily visits is exceeded.',
                    ],
                    [
                        'errorCode' => 'parameterError',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'predictContentLength',
                        'errorMessage' => 'The length of content exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'postPaidArrearage',
                        'errorMessage' => 'The service is not opened or the account is overdue.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified Model does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ModelInferenceError',
                        'errorMessage' => 'Failed to obtain the model prediction result.',
                    ],
                    [
                        'errorCode' => 'UnknownError',
                        'errorMessage' => 'A server error occurred while processing your request. Please try again later or contact customer support.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request.',
                    ],
                    [
                        'errorCode' => 'predictTimeout',
                        'errorMessage' => 'model predict cost greater than 9000ms.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'An error occurred while processing your request.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PredictResult\\": \\"{\\\\\\"cost\\\\\\":\\\\\\"21.812ms\\\\\\",\\\\\\"imprs\\\\\\":[{\\\\\\"aspect\\\\\\":\\\\\\"款式\\\\\\",\\\\\\"clause\\\\\\":\\\\\\"这件衣服真好看\\\\\\",\\\\\\"neg_prob\\\\\\":0.0,\\\\\\"pos_prob\\\\\\":0.566100001335144,\\\\\\"position\\\\\\":\\\\\\"0,7\\\\\\",\\\\\\"sentiment\\\\\\":\\\\\\"正\\\\\\"}]},\\\\\\"message\\\\\\":\\\\\\"SUCCESS\\\\\\",\\\\\\"tracerId\\\\\\":\\\\\\"7973b50e31dcbea8323460e0134d3226\\\\\\"}\\",\\n  \\"RequestId\\": \\"7310FFCF-9FE8-4257-AE38-0E1AD828C2CC\\",\\n  \\"BillingCount\\": 1\\n}","errorExample":""},{"type":"xml","example":"<RunPreTrainServiceResponse>\\n    <PredictResult>{\\"cost\\":\\"21.812ms\\",\\"imprs\\":[{\\"aspect\\":\\"款式\\",\\"clause\\":\\"这件衣服真好看\\",\\"neg_prob\\":0.0,\\"pos_prob\\":0.566100001335144,\\"position\\":\\"0,7\\",\\"sentiment\\":\\"正\\"}]},\\"message\\":\\"SUCCESS\\",\\"tracerId\\":\\"7973b50e31dcbea8323460e0134d3226\\"}</PredictResult>\\n    <RequestId>7310FFCF-9FE8-4257-AE38-0E1AD828C2CC</RequestId>\\n    <BillingCount>1</BillingCount>\\n</RunPreTrainServiceResponse>","errorExample":""}]',
            'title' => '调用预训练模型服务',
            'summary' => '调用预训练模型服务。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'nlp-automl.cn-hangzhou.aliyuncs.com',
        ],
    ],
];
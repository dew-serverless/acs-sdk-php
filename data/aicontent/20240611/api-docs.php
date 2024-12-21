<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'AiContent',
        'version' => '20240611',
    ],
    'components' => [
        'schemas' => [
            'OpenApiMultiResponse' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'errCode' => [
                        'type' => 'string',
                    ],
                    'errMessage' => [
                        'type' => 'string',
                    ],
                    'httpStatusCode' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'data' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'id' => [
                                    'type' => 'string',
                                ],
                                'modelId' => [
                                    'type' => 'string',
                                ],
                                'name' => [
                                    'type' => 'string',
                                ],
                                'objectType' => [
                                    'type' => 'string',
                                ],
                                'imageUrl' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'string',
                                    ],
                                ],
                                'jobStatus' => [
                                    'type' => 'string',
                                    'enum' => [
                                        'FINISHED',
                                        'TRAINING',
                                        'TRAINING_TERMINATED',
                                        'WRONG_IMAGE_URL',
                                        'OOM',
                                        'FINISHED',
                                        'SUBMITTED',
                                        'WAIT_SCHEDULE',
                                        'TOO_MANY_INFERENCE_REQUESTS',
                                    ],
                                ],
                                'jobTrainProgress' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                ],
                                'inferenceJobList' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'id' => [
                                                'type' => 'string',
                                            ],
                                            'promptId' => [
                                                'type' => 'string',
                                            ],
                                            'modelId' => [
                                                'type' => 'string',
                                            ],
                                            'jobStatus' => [
                                                'type' => 'string',
                                                'enum' => [
                                                    'FINISHED',
                                                    'INFERRING',
                                                    'INFERRING_TERMINATED',
                                                    'OOM',
                                                    'FINISHED',
                                                    'SUBMITTED',
                                                    'WAIT_SCHEDULE',
                                                    'TOO_MANY_INFERENCE_REQUESTS',
                                                ],
                                            ],
                                            'jobTrainProgress' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                            ],
                                            'resultImageUrl' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                            'createTime' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                                'inferenceImageCount' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'createTime' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'OpenApiSingleResponse' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'errCode' => [
                        'type' => 'string',
                    ],
                    'errMessage' => [
                        'type' => 'string',
                    ],
                    'httpStatusCode' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'data' => [
                        'type' => 'object',
                        'properties' => [
                            'modelTrainStatus' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'Personalizedtxt2imgAddInferenceJobCmd' => [
                'type' => 'object',
                'properties' => [
                    'modelId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'prompt' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'imageNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'seed' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'Personalizedtxt2imgAddModelTrainJobCmd' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'objectType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'imageUrl' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'Personalizedtxt2imgInferenceJobInfoDTO' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                    ],
                    'modelId' => [
                        'type' => 'string',
                    ],
                    'jobStatus' => [
                        'type' => 'string',
                    ],
                    'resultImageUrl' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'createUserId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Personalizedtxt2imgModelTrainJobInfoDTO' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'ObjectType' => [
                        'type' => 'string',
                    ],
                    'ImageUrl' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'JobStatus' => [
                        'type' => 'string',
                    ],
                    'InferenceJobList' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Personalizedtxt2imgInferenceJobInfoDTO',
                        ],
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'CreateUserId' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'AITeacherExpansionPracticeTaskGenerate' => [
            'path' => '/api/v1/aiteacher/expansionPractice/generateTask',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'userId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'grade' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'textbook' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'topic' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'learningObject' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'textContent' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'keySentences' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'keyWords' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'AliyunConsoleOpenApiQueryAliyunConsoleServcieList' => [
            'path' => '/api/v1/aliyunconsole/queryAliyunConsoleServcieList',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [],
        ],
        'PersonalizedTextToImageQueryPreModelInferenceJobInfo' => [
            'path' => '/api/v1/personalizedtxt2img/queryPreModelInferenceJobInfo',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'inferenceJobId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'PersonalizedTextToImageAddInferenceJob' => [
            'path' => '/api/v1/personalizedtxt2img/addPreModelInferenceJob',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'imageUrl' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'trainSteps' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'prompt' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'imageNumber' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'seed' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'strength' => [
                                'type' => 'number',
                                'format' => 'double',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PersonalizedTextToImageQueryImageAsset' => [
            'path' => '/api/v1/personalizedtxt2img/queryImageAssetFromImageId',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'imageId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'encodeFormat',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'base64',
                        ],
                    ],
                ],
            ],
        ],
        'Personalizedtxt2imgQueryInferenceJobInfo' => [
            'path' => '/api/v1/personalizedtxt2img/queryInferenceJobInfo',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'inferenceJobId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'Personalizedtxt2imgAddInferenceJob' => [
            'path' => '/api/v1/personalizedtxt2img/addInferenceJob',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'modelId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'prompt' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'imageNumber' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'seed' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'Personalizedtxt2imgAddModelTrainJob' => [
            'path' => '/api/v1/personalizedtxt2img/addModelTrainJob',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'objectType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'imageUrl' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'trainSteps' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'Personalizedtxt2imgQueryImageAsset' => [
            'path' => '/api/v1/personalizedtxt2img/queryImageAsset',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'modelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'promptId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'imageId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'encodeFormat',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'base64',
                        ],
                    ],
                ],
            ],
        ],
        'Personalizedtxt2imgQueryModelTrainJobList' => [
            'path' => '/api/v1/personalizedtxt2img/queryModelTrainJobList',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [],
        ],
        'Personalizedtxt2imgQueryModelTrainStatus' => [
            'path' => '/api/v1/personalizedtxt2img/queryModelTrainStatus',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'modelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'AliyunConsoleOpenApiQueryAliyunConsoleServiceList' => [
            'path' => '/api/v1/aliyunconsole/queryAliyunConsoleServiceList',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'public',
            'endpoint' => 'aicontent.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'aicontent.aliyuncs.com',
        ],
    ],
];
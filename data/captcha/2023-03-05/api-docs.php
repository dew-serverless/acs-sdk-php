<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'captcha',
        'version' => '2023-03-05',
    ],
    'directories' => [
        'VerifyCaptcha',
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'VerifyIntelligentCaptcha',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'VerifyCaptcha' => [
            'summary' => '验证码验证接口。',
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'CaptchaVerifyParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '由端上传入的验证参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dsjidsjidsjkds*djsjdiskds',
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
                                'example' => '95784F***D39FDC5',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '响应码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '响应消息，若成功请求为success',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'VerifyResult' => [
                                        'description' => '验证结果。'."\n"
                                            ."\n"
                                            .'- true：验证通过。'."\n"
                                            ."\n"
                                            .'- false：验证不通过。',
                                        'type' => 'boolean',
                                        'example' => 'true',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"95784F***D39FDC5\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"VerifyResult\\": true\\n  }\\n}","type":"json"}]',
            'title' => '验证码验证',
        ],
        'VerifyIntelligentCaptcha' => [
            'summary' => '验证码智能验证接口',
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '194420',
                'abilityTreeNodes' => [
                    'FEATUREwafACFB6T',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'CaptchaVerifyParam',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '由端上传入的验证参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dsjidsjidsjkds*djsjdiskds'."\n",
                    ],
                ],
                [
                    'name' => 'SceneId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
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
                                'example' => '95784F***D39FDC5'."\n",
                            ],
                            'Success' => [
                                'description' => '请求是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '响应码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '响应消息，若成功请求为success',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'VerifyResult' => [
                                        'description' => '验证结果'."\n"
                                            ."\n"
                                            .'-  true：验证通过'."\n"
                                            ."\n"
                                            .'- false：验证不通过',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'VerifyCode' => [
                                        'type' => 'string',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"95784F***D39FDC5\\\\n\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"VerifyResult\\": true,\\n    \\"VerifyCode\\": \\"\\"\\n  }\\n}","type":"json"}]',
            'title' => '验证码智能验证',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'captcha.cn-shanghai.aliyuncs.com',
        ],
    ],
];
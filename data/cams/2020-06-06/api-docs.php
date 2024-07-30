<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'cams',
        'version' => '2020-06-06',
    ],
    'directories' => [
        [
            'id' => 187695,
            'title' => 'Flow',
            'type' => 'directory',
            'children' => [
                'PublishFlow',
                'UpdateFlowJSONAsset',
                'ModifyFlow',
                'ListFlow',
                'GetFlowPreviewUrl',
                'GetFlowJSONAssest',
                'GetFlow',
                'DeprecateFlow',
                'DeleteFlow',
                'CreateFlow',
            ],
        ],
        [
            'id' => 178505,
            'title' => '嵌入式相关',
            'type' => 'directory',
            'children' => [
                'IsvGetAppId',
                'GetPreValidatePhoneId',
                'ChatappBindWaba',
                'GetPermissionByCode',
                'ChatappSyncPhoneNumber',
                'AddChatappPhoneNumber',
                'GetPhoneNumberVerificationStatus',
                'GetChatappVerifyCode',
                'ChatappVerifyAndRegister',
                'ChatappPhoneNumberRegister',
                'ChatappPhoneNumberDeregister',
                'QueryWabaBusinessInfo',
                'UpdatePhoneWebhook',
                'UpdateAccountWebhook',
                'QueryPhoneBusinessProfile',
                'ModifyPhoneBusinessProfile',
                'CreateChatappMigrationInitiate',
                'GetMigrationVerifyCode',
                'ChatappMigrationVerified',
                'ChatappMigrationRegister',
                'GetChatappUploadAuthorization',
                'SubmitIsvCustomerTerms',
                'GetCommerceSetting',
                'UpdateCommerceSetting',
                'ChatappEmbedSignUp',
            ],
        ],
        [
            'id' => 175141,
            'title' => '号码管理',
            'type' => 'directory',
            'children' => [
                'GetPhoneEncryptionPublicKey',
                'UpdatePhoneEncryptionPublicKey',
                'UpdatePhoneMessageQrdl',
                'ListPhoneMessageQrdl',
                'DeletePhoneMessageQrdl',
                'CreatePhoneMessageQrdl',
                'QueryChatappPhoneNumbers',
                'QueryChatappBindWaba',
            ],
        ],
        [
            'id' => 167595,
            'title' => '消息发送',
            'type' => 'directory',
            'children' => [
                'SendChatappMassMessage',
                'SendChatappMessage',
            ],
        ],
        [
            'id' => 167597,
            'title' => '模板管理',
            'type' => 'directory',
            'children' => [
                'CreateChatappTemplate',
                'ModifyChatappTemplate',
                'ListChatappTemplate',
                'GetChatappTemplateDetail',
                'DeleteChatappTemplate',
            ],
        ],
        [
            'id' => 172217,
            'title' => '智能对话机器人',
            'type' => 'directory',
            'children' => [
                'BeeBotChat',
                'BeeBotAssociate',
            ],
        ],
        [
            'id' => 185619,
            'title' => '商品目录',
            'type' => 'directory',
            'children' => [
                'ListProductCatalog',
                'GetWhatsappConnectionCatalog',
                'ListProduct',
            ],
        ],
        [
            'id' => 186059,
            'title' => '统计指标',
            'type' => 'directory',
            'children' => [
                'GetChatappPhoneNumberMetric',
                'EnableWhatsappROIMetric',
                'GetChatappTemplateMetric',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'PublishFlow' => [
            'summary' => '发布Flow。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'FlowId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'Flow编码',
                        'description' => 'Flow ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'flow_001',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId/实例ID',
                        'description' => 'ISV子客户的SpaceId/实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '28251486512358****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A9486641****',
                            ],
                            'Code' => [
                                'title' => '结果返回OK为正常',
                                'description' => '结果返回OK为正常。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '错误描述信息',
                                'description' => '错误描述信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A9486641****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '发布Flow',
            'description' => '本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'UpdateFlowJSONAsset' => [
            'summary' => '使用JSON更新Flow内容。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'FlowId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'Flow编码',
                        'description' => 'Flow ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'flow_001',
                    ],
                ],
                [
                    'name' => 'FilePath',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '按照facebook flow规则生成的json文件',
                        'description' => '按照facebook flow规则生成的JSON文件。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://aliyun/json.json',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId/实例ID',
                        'description' => 'ISV子客户的SpaceId/实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '9399393',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request。',
                                'type' => 'string',
                                'example' => '	'."\n"
                                    .'90E63D28-E31D-1EB2-8939-A9486641****'."\n",
                            ],
                            'Code' => [
                                'title' => '结果返回OK为正常',
                                'description' => '结果返回OK为正常。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '错误描述信息',
                                'description' => '错误描述信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'description' => '返回数据。'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'FlowId' => [
                                        'description' => 'Flow ID。',
                                        'type' => 'string',
                                        'example' => '84848847****',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"\\\\t\\\\n90E63D28-E31D-1EB2-8939-A9486641****\\\\n\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": {\\n    \\"FlowId\\": \\"84848847****\\"\\n  }\\n}","type":"json"}]',
            'title' => '使用JSON更新Flow内容',
            'description' => '本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'ModifyFlow' => [
            'summary' => '修改Flow基础信息。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'FlowName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'Flow名称',
                        'description' => 'Flow名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'flow_001',
                    ],
                ],
                [
                    'name' => 'Categories',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'flow的目录信息',
                        'description' => 'flow的目录信息。',
                        'type' => 'array',
                        'items' => [
                            'title' => 'flow目录',
                            'description' => 'flow目录。',
                            'type' => 'string',
                            'required' => false,
                            'enumValueTitles' => [
                                'CUSTOMER_SUPPORT' => 'CUSTOMER_SUPPORT',
                                'OTHER' => 'OTHER',
                                'SIGN_IN' => 'SIGN_IN',
                                'SIGN_UP' => 'SIGN_UP',
                                'APPOINTMENT_BOOKING' => 'APPOINTMENT_BOOKING',
                                'LEAD_GENERATION' => 'LEAD_GENERATION',
                                'SURVEY' => 'SURVEY',
                                'CONTACT_US' => 'CONTACT_US',
                            ],
                            'example' => 'SIGN_UP',
                        ],
                        'required' => true,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'FlowId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'flow编码',
                        'description' => 'flow编码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2938838',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId/实例ID',
                        'description' => 'ISV子客户的SpaceId/实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '9493884',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request。',
                                'type' => 'string',
                                'example' => '1612C226-E271-4CFE-9F18-4066D******',
                            ],
                            'Code' => [
                                'title' => '结果返回OK为正常',
                                'description' => '结果返回OK为正常。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '错误描述信息',
                                'description' => '错误描述信息。',
                                'type' => 'string',
                                'example' => 'None',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'FlowId' => [
                                        'title' => 'flow编码',
                                        'description' => 'flow ID。',
                                        'type' => 'string',
                                        'example' => '3939399****',
                                    ],
                                    'FlowName' => [
                                        'title' => 'Flow名称',
                                        'description' => 'Flow名称。',
                                        'type' => 'string',
                                        'example' => 'flow-00203',
                                    ],
                                    'Categories' => [
                                        'title' => 'Flow目录',
                                        'description' => 'Flow目录。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'Flow目录。',
                                            'type' => 'string',
                                            'example' => 'SIGN_UP',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1612C226-E271-4CFE-9F18-4066D******\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"None\\",\\n  \\"Data\\": {\\n    \\"FlowId\\": \\"3939399****\\",\\n    \\"FlowName\\": \\"flow-00203\\",\\n    \\"Categories\\": [\\n      \\"SIGN_UP\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '修改Flow基础信息',
            'description' => '本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'ListFlow' => [
            'summary' => '查询Flow列表。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'FlowName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'Flow名称',
                        'description' => 'Flow名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'flow_001',
                    ],
                ],
                [
                    'name' => 'Page',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '分页对象',
                        'description' => '分页对象。',
                        'type' => 'object',
                        'properties' => [
                            'Size' => [
                                'title' => '数量',
                                'description' => '数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '20',
                            ],
                            'Index' => [
                                'title' => '页数',
                                'description' => '页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId/实例ID',
                        'description' => 'ISV子客户的SpaceId/实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '99948484',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request。',
                                'type' => 'string',
                                'example' => '1612C226-E271-4CFE-9F18-4066D550F91B',
                            ],
                            'Code' => [
                                'title' => '结果返回OK为正常',
                                'description' => '结果返回OK为正常。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '错误描述信息',
                                'description' => '错误描述信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'description' => '返回数据对像。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回数据。'."\n",
                                    'type' => 'object',
                                    'properties' => [
                                        'FlowId' => [
                                            'title' => 'flow编码',
                                            'description' => 'flow ID。',
                                            'type' => 'string',
                                            'example' => '3939393***',
                                        ],
                                        'FlowName' => [
                                            'title' => 'flow名称',
                                            'description' => 'flow名称。',
                                            'type' => 'string',
                                            'example' => 'flow-02020',
                                        ],
                                        'Categories' => [
                                            'title' => '目录',
                                            'description' => '目录。',
                                            'type' => 'array',
                                            'items' => [
                                                'title' => '目录',
                                                'description' => '目录。',
                                                'type' => 'string',
                                                'example' => 'SIGN_UP',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1612C226-E271-4CFE-9F18-4066D550F91B\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": [\\n    {\\n      \\"FlowId\\": \\"3939393***\\",\\n      \\"FlowName\\": \\"flow-02020\\",\\n      \\"Categories\\": [\\n        \\"SIGN_UP\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询Flow列表',
            'description' => '本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'GetFlowPreviewUrl' => [
            'summary' => '获取Flow预览URL。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'FlowId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'Flow编码',
                        'description' => 'Flow ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'flow_001',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId/实例ID',
                        'description' => 'ISV子客户的SpaceId/实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '939399383',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A94866411B2O',
                            ],
                            'Code' => [
                                'title' => '结果返回OK为正常',
                                'description' => '结果返回OK为正常。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '错误描述信息',
                                'description' => '错误描述信息。',
                                'type' => 'string',
                                'example' => 'None',
                            ],
                            'Data' => [
                                'description' => '返回数据对象。',
                                'type' => 'object',
                                'properties' => [
                                    'FlowId' => [
                                        'description' => 'flow ID。',
                                        'type' => 'string',
                                        'example' => '6dd31e1b7cc940fc99e293d9952b5b79',
                                    ],
                                    'PreviewUrl' => [
                                        'description' => '临时预览链接。',
                                        'type' => 'string',
                                        'example' => 'https://url',
                                    ],
                                    'PreviewUrlExpires' => [
                                        'description' => '预览URL的过期时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1700617436633',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A94866411B2O\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"None\\",\\n  \\"Data\\": {\\n    \\"FlowId\\": \\"6dd31e1b7cc940fc99e293d9952b5b79\\",\\n    \\"PreviewUrl\\": \\"https://url\\",\\n    \\"PreviewUrlExpires\\": 1700617436633\\n  }\\n}","type":"json"}]',
            'title' => '获取Flow预览URL',
            'description' => '本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'GetFlowJSONAssest' => [
            'summary' => '获取Flow的JSON格式的内容。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'FlowId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'Flow编码',
                        'description' => 'Flow ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'flow_001',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId/实例ID',
                        'description' => 'ISV子客户的SpaceId/实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '83883873',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A9486641****',
                            ],
                            'Code' => [
                                'title' => '结果返回OK为正常',
                                'description' => '结果返回OK为正常。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '错误描述信息',
                                'description' => '错误描述信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'description' => '返回数据。'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'FlowId' => [
                                        'description' => 'flow ID。',
                                        'type' => 'string',
                                        'example' => 'flow_id_arms',
                                    ],
                                    'FilePath' => [
                                        'description' => '文件路径。',
                                        'type' => 'string',
                                        'example' => 'https://url.com/json.json',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A9486641****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": {\\n    \\"FlowId\\": \\"flow_id_arms\\",\\n    \\"FilePath\\": \\"https://url.com/json.json\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取Flow的JSON内容',
            'description' => '本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'GetFlow' => [
            'summary' => '获取Flow详细信息。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'FlowId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'Flow编码',
                        'description' => 'Flow ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'flow_001',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId/实例ID',
                        'description' => 'ISV子客户的SpaceId/实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '99384883',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A9486641****',
                            ],
                            'Code' => [
                                'title' => '结果返回OK为正常',
                                'description' => '结果返回OK为正常。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '错误描述信息',
                                'description' => '错误描述信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => 'Flow的状态。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'PUBLISHED' => 'PUBLISHED',
                                            'DRAFT' => 'DRAFT',
                                            'DEPRECATED' => 'DEPRECATED',
                                        ],
                                        'example' => 'DRAFT',
                                    ],
                                    'FlowId' => [
                                        'description' => 'flow ID。',
                                        'type' => 'string',
                                        'example' => 'flow_id_arms',
                                    ],
                                    'FlowName' => [
                                        'description' => 'flow名称。',
                                        'type' => 'string',
                                        'example' => 'dnjn',
                                    ],
                                    'Categories' => [
                                        'description' => '目录。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '目录。',
                                            'type' => 'string',
                                            'example' => 'SIGN_UP',
                                        ],
                                    ],
                                    'JSONVersion' => [
                                        'description' => 'JSON版本信息。',
                                        'type' => 'string',
                                        'example' => '2.1',
                                    ],
                                    'DataApiVersion' => [
                                        'description' => 'Api版本信息。',
                                        'type' => 'string',
                                        'example' => '3.0',
                                    ],
                                    'PreviewUrl' => [
                                        'description' => '临时预览链接。',
                                        'type' => 'string',
                                        'example' => 'https://pre-url',
                                    ],
                                    'PreviewUrlExpires' => [
                                        'description' => '预览URL的过期时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1700617436633'."\n",
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A9486641****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"DRAFT\\",\\n    \\"FlowId\\": \\"flow_id_arms\\",\\n    \\"FlowName\\": \\"dnjn\\",\\n    \\"Categories\\": [\\n      \\"SIGN_UP\\"\\n    ],\\n    \\"JSONVersion\\": \\"2.1\\",\\n    \\"DataApiVersion\\": \\"3.0\\",\\n    \\"PreviewUrl\\": \\"https://pre-url\\",\\n    \\"PreviewUrlExpires\\": 1700617436633\\n  }\\n}","type":"json"}]',
            'title' => '获取Flow详细信息',
            'description' => '本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'DeprecateFlow' => [
            'summary' => '弃用Flow。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'FlowId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'Flow编码',
                        'description' => 'Flow ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'flow_001',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId/实例ID',
                        'description' => 'ISV子客户的SpaceId/实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '38877483',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A94866411B2O',
                            ],
                            'Code' => [
                                'title' => '结果返回OK为正常',
                                'description' => '结果返回OK为正常。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '错误描述信息',
                                'description' => '错误描述信息。',
                                'type' => 'string',
                                'example' => 'None',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A94866411B2O\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"None\\"\\n}","type":"json"}]',
            'title' => '弃用Flow',
            'description' => '本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'DeleteFlow' => [
            'summary' => '删除Flow（只有在DRAFT状态的Flow才允许删除）。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '201009',
                'abilityTreeNodes' => [
                    'FEATUREcamsDJ746K',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'FlowId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'Flow编码',
                        'description' => 'Flow ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'flow_001',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId/实例ID',
                        'description' => 'ISV子客户的SpaceId/实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '393983883',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A9486641****',
                            ],
                            'Code' => [
                                'title' => '结果返回OK为正常',
                                'description' => '结果返回OK为正常。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '错误描述信息',
                                'description' => '错误描述信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A9486641****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '删除Flow',
            'description' => '本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'CreateFlow' => [
            'summary' => '创建Flow。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'FlowName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'Flow名称',
                        'description' => 'Flow名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'flow_001',
                    ],
                ],
                [
                    'name' => 'Categories',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'flow的目录信息',
                        'description' => 'flow的目录信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => '目录。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'SIGN_UP',
                        ],
                        'required' => true,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId/实例ID',
                        'description' => 'ISV子客户的SpaceId/实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '93994848',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A9486641****',
                            ],
                            'Code' => [
                                'title' => '结果返回OK为正常',
                                'description' => '结果返回OK为正常。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '错误描述信息',
                                'description' => '错误描述信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'description' => '返回数据。'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'FlowId' => [
                                        'title' => 'flow编码',
                                        'description' => 'flow ID。',
                                        'type' => 'string',
                                        'example' => '333993838***',
                                    ],
                                    'FlowName' => [
                                        'title' => 'Flow名称',
                                        'description' => 'Flow名称。',
                                        'type' => 'string',
                                        'example' => 'test1',
                                    ],
                                    'Categories' => [
                                        'title' => 'Flow目录',
                                        'description' => 'Flow目录。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '目录。',
                                            'type' => 'string',
                                            'example' => 'SIGN_UP',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A9486641****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": {\\n    \\"FlowId\\": \\"333993838***\\",\\n    \\"FlowName\\": \\"test1\\",\\n    \\"Categories\\": [\\n      \\"SIGN_UP\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '创建Flow',
            'description' => '本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'IsvGetAppId' => [
            'summary' => 'ISV获取App ID。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Type',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'app类型，取值：WHATSAPP',
                        'description' => 'App类型，取值：WHATSAPP',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'WHATSAPP',
                    ],
                ],
                [
                    'name' => 'Permissions',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '权限',
                        'description' => '权限',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'whatsapp_business_messaging' => 'whatsapp消息发送',
                            'ads_management' => '广告管理权限',
                            'catalog_management' => '目录管理权限',
                        ],
                        'example' => 'catalog_management',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '744c4b5c79c9432497a075bdfca3***',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'AppId' => [
                                'title' => '消息ID',
                                'description' => '消息ID。',
                                'type' => 'string',
                                'example' => '23hr3v',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'ConfigId' => [
                                'description' => '配置项ID',
                                'type' => 'string',
                                'example' => '289729518176256',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"744c4b5c79c9432497a075bdfca3***\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"null\\",\\n  \\"AppId\\": \\"23hr3v\\",\\n  \\"AccessDeniedDetail\\": \\"无\\",\\n  \\"ConfigId\\": \\"289729518176256\\"\\n}","type":"json"}]',
            'title' => '获取App ID',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'GetPreValidatePhoneId' => [
            'summary' => '预注册号码获取ID，用来在嵌入式中选择，不用重新获取验证码。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PhoneNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '号码',
                        'description' => '号码',
                        'type' => 'string',
                        'required' => true,
                        'example' => '861380000',
                    ],
                ],
                [
                    'name' => 'VerifyCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '预校验号码购买时提供的验证码',
                        'description' => '预校验号码购买时提供的验证码',
                        'type' => 'string',
                        'required' => true,
                        'example' => '208393',
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
                                'example' => '90E63D28-E31D-1EB2-8939-A9486641****',
                            ],
                            'Code' => [
                                'title' => '结果返回OK为正常',
                                'description' => '结果返回OK为正常',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '错误描述信息',
                                'description' => '错误描述信息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'description' => '返回数据。'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'PhoneNumberId' => [
                                        'title' => '号码ID',
                                        'description' => '号码ID',
                                        'type' => 'string',
                                        'example' => '8613800000000',
                                    ],
                                    'PhoneNumber' => [
                                        'title' => '号码',
                                        'description' => '号码',
                                        'type' => 'string',
                                        'example' => '929833',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A9486641****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": {\\n    \\"PhoneNumberId\\": \\"8613800000000\\",\\n    \\"PhoneNumber\\": \\"929833\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取预校验号码的ID',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'ChatappBindWaba' => [
            'summary' => '北向接口绑定Waba。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'WabaId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'WabaId',
                        'description' => 'Waba Id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2293938222343****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A94866411B2O',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'description' => '返回数据。'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'CustSpaceId' => [
                                        'title' => '客户SpaceID',
                                        'description' => '客户SpaceID。',
                                        'type' => 'string',
                                        'example' => 'C02029392939939',
                                    ],
                                    'WabaId' => [
                                        'title' => 'wabaId',
                                        'description' => 'waba Id。',
                                        'type' => 'string',
                                        'example' => '2939828282',
                                    ],
                                ],
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A94866411B2O\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": {\\n    \\"CustSpaceId\\": \\"C02029392939939\\",\\n    \\"WabaId\\": \\"2939828282\\"\\n  },\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '绑定waba',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'GetPermissionByCode' => [
            'summary' => '根据嵌入式得到的Code获取授权权限。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Code',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '授权Code信息',
                        'description' => '授权Code信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'flow_001',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '393847477',
                    ],
                ],
                [
                    'name' => 'Permissions',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '权限列表',
                        'description' => '权限列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '权限',
                            'type' => 'string',
                            'required' => false,
                            'enumValueTitles' => [
                                'ads_management' => 'ads_management',
                                'catalog_management' => 'catalog_management',
                            ],
                            'example' => 'catalog_management',
                        ],
                        'required' => false,
                        'minItems' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A9486641****',
                            ],
                            'Code' => [
                                'title' => '结果返回OK为正常',
                                'description' => '结果返回OK为正常。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '错误描述信息',
                                'description' => '错误描述信息。',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A9486641****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"SUCCESS\\"\\n}","type":"json"}]',
            'title' => '根据嵌入式得到的Code获取授权权限',
            'description' => '本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'ChatappSyncPhoneNumber' => [
            'summary' => '同步号码信息。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'CustSpaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '293483938849493****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A94866411B2O',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'PhoneNumbers' => [
                                'title' => '模板列表',
                                'description' => '号码列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'UpQueue' => [
                                            'title' => '模板名称',
                                            'description' => '上行消息队列。',
                                            'type' => 'string',
                                            'example' => 'alicom-09399200-queue',
                                        ],
                                        'PhoneNumber' => [
                                            'title' => '模板编码',
                                            'description' => '手机号码。',
                                            'type' => 'string',
                                            'example' => '8613800001234',
                                        ],
                                        'StatusQueue' => [
                                            'title' => '审核状态',
                                            'description' => '状态报告队列。',
                                            'type' => 'string',
                                            'example' => 'alicom-09399200-queue',
                                        ],
                                        'VerifiedName' => [
                                            'title' => '语言',
                                            'description' => '号码名称。',
                                            'type' => 'string',
                                            'example' => 'Alibaba',
                                        ],
                                        'StatusCallbackUrl' => [
                                            'title' => '模板分类',
                                            'description' => '状态报告通知URL。',
                                            'type' => 'string',
                                            'example' => 'https://www.alibaba.com/status',
                                        ],
                                        'UpCallbackUrl' => [
                                            'title' => '模板分类',
                                            'description' => '上行消息通知URL',
                                            'type' => 'string',
                                            'example' => 'https://www.alibaba.com/inbound'."\n",
                                        ],
                                        'QualityRating' => [
                                            'title' => '号码质量',
                                            'description' => '号码质量。'."\n"
                                                .'枚举值：GREEN/YELLOW/RED',
                                            'type' => 'string',
                                            'example' => 'GREEN',
                                        ],
                                        'Status' => [
                                            'title' => '号码状态',
                                            'description' => '号码状态。'."\n"
                                                .'枚举值：PENDING/DELETED/MIGRATED/BANNED/RESTRICTED/RATE_LIMITED/FLAGGED/CONNECTED/DISCONNECTED/UNKNOWN/UNVERIFIED',
                                            'type' => 'string',
                                            'example' => 'PENDING',
                                        ],
                                        'CodeVerificationStatus' => [
                                            'title' => '校验状态',
                                            'description' => '校验状态。'."\n"
                                                .' VERIFIED：校验通过；REJECTED：校验被拒绝；MORE_INFORMATION_REQUESTED：需要提供更多信息；REVOKED：撤销审核申请。',
                                            'type' => 'string',
                                            'example' => 'VERIFIED',
                                        ],
                                        'NameStatus' => [
                                            'title' => '名称审核状态',
                                            'description' => '名称审核状态。',
                                            'type' => 'string',
                                            'example' => 'Approval',
                                        ],
                                        'MessagingLimitTier' => [
                                            'title' => '号码发送量',
                                            'description' => '号码发送量。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'TIER_100K' => '100000',
                                                'TIER_UNLIMITED' => 'unlimited',
                                                'TIER_250' => '250',
                                                'TIER_1K' => '1000',
                                                'TIER_50' => '50',
                                                'TIER_10K' => '10000',
                                            ],
                                            'example' => 'TIER_10K',
                                        ],
                                        'NewNameStatus' => [
                                            'title' => '新名称审核状态',
                                            'description' => '新名称审核状态。',
                                            'type' => 'string',
                                            'example' => 'Approval',
                                        ],
                                    ],
                                ],
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A94866411B2O\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\",\\n  \\"PhoneNumbers\\": [\\n    {\\n      \\"UpQueue\\": \\"alicom-09399200-queue\\",\\n      \\"PhoneNumber\\": \\"8613800001234\\",\\n      \\"StatusQueue\\": \\"alicom-09399200-queue\\",\\n      \\"VerifiedName\\": \\"Alibaba\\",\\n      \\"StatusCallbackUrl\\": \\"https://www.alibaba.com/status\\",\\n      \\"UpCallbackUrl\\": \\"https://www.alibaba.com/inbound\\\\n\\",\\n      \\"QualityRating\\": \\"GREEN\\",\\n      \\"Status\\": \\"PENDING\\",\\n      \\"CodeVerificationStatus\\": \\"VERIFIED\\",\\n      \\"NameStatus\\": \\"Approval\\",\\n      \\"MessagingLimitTier\\": \\"TIER_10K\\",\\n      \\"NewNameStatus\\": \\"Approval\\"\\n    }\\n  ],\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '同步号码信息',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'AddChatappPhoneNumber' => [
            'summary' => '增加号码到Waba中。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'PhoneNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '号码（不带国家码）',
                        'description' => '号码（不带国家码）',
                        'type' => 'string',
                        'required' => true,
                        'example' => '13800000000',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId',
                        'type' => 'string',
                        'required' => true,
                        'example' => '939283893939',
                    ],
                ],
                [
                    'name' => 'Cc',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '号码国家编码',
                        'description' => '号码国家编码',
                        'type' => 'string',
                        'required' => true,
                        'example' => '86',
                    ],
                ],
                [
                    'name' => 'PreValidateId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '预注册号码ID',
                        'description' => '预注册号码ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10202020',
                    ],
                ],
                [
                    'name' => 'VerifiedName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '号码显示名称',
                        'description' => '号码显示名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Alibaba',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A9486641****',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => 'None',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A9486641****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"None\\",\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '增加Whatsapp号码',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'GetPhoneNumberVerificationStatus' => [
            'summary' => '获取号码验证状态。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PhoneNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '号码',
                        'description' => '手机号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '8613900001234',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '229393838****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A94866411B2D',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'PhoneNumber' => [
                                        'title' => '号码',
                                        'description' => '手机号码。',
                                        'type' => 'string',
                                        'example' => '8613900001234',
                                    ],
                                    'Id' => [
                                        'title' => '号码ID',
                                        'description' => '号码ID。',
                                        'type' => 'string',
                                        'example' => '2224342624',
                                    ],
                                    'CodeVerificationStatus' => [
                                        'title' => '验证状态',
                                        'description' => '验证状态。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'REVOKED' => '撤销审核申请',
                                            'MORE_INFORMATION_REQUESTED' => '需要提供更多信息',
                                            'VERIFIED' => '校验通过',
                                            'REJECTED' => '校验被拒绝',
                                        ],
                                        'example' => 'VERIFIED',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A94866411B2D\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": {\\n    \\"PhoneNumber\\": \\"8613900001234\\",\\n    \\"Id\\": \\"2224342624\\",\\n    \\"CodeVerificationStatus\\": \\"VERIFIED\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询号码验证状态',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'GetChatappVerifyCode' => [
            'summary' => '北向接口获取验证码。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PhoneNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '号码',
                        'description' => '手机号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '8613800001234',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '229393838*****',
                    ],
                ],
                [
                    'name' => 'Method',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '验证码类型，取值SMS/VOICE',
                        'description' => '验证码类型，取值SMS或VOICE。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'SMS',
                    ],
                ],
                [
                    'name' => 'Locale',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '语言',
                        'description' => '语言。枚举值：zh_CN/en_US',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'zh_CN',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1612C226-E271-4CFE-9F18-4066D550F91B',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1612C226-E271-4CFE-9F18-4066D550F91B\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\",\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '获取号码验证码',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'ChatappVerifyAndRegister' => [
            'summary' => '北向接口校验验证码并注册。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '29389299388383',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '号码',
                        'description' => '手机号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '8613800001234',
                    ],
                ],
                [
                    'name' => 'VerifyCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '验证码',
                        'description' => '验证码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '223222',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A9486641****',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => 'None',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A9486641****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"None\\",\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '号码校验并注册',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'ChatappPhoneNumberRegister' => [
            'summary' => '北向接口注册号码。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'PhoneNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '号码',
                        'description' => '手机号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '8613800001234',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '939283893939***',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '返回对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A9486641****',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A9486641****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\",\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '号码注册',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'ChatappPhoneNumberDeregister' => [
            'summary' => '从Waba中取消注册号码。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'PhoneNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '号码',
                        'description' => '待取消注册的号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '8613800000000',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '939283893939',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A94866411B2O',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A94866411B2O\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\",\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '取消注册Whatsapp号码',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'QueryWabaBusinessInfo' => [
            'summary' => '获取Waba账号Business平台信息。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CustSpaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '293483938849493****',
                    ],
                ],
                [
                    'name' => 'WabaId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'wabaId',
                        'description' => 'waba Id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '293848822333',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A94866411B2O',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '提示信息，当返回异常时有值。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'description' => 'Waba商业信息。',
                                'type' => 'object',
                                'properties' => [
                                    'BusinessId' => [
                                        'title' => 'business平台Id',
                                        'description' => 'Business平台Id。',
                                        'type' => 'string',
                                        'example' => '192882828733',
                                    ],
                                    'BusinessName' => [
                                        'title' => 'business 平台名称',
                                        'description' => 'Business平台名称。',
                                        'type' => 'string',
                                        'example' => 'Alibaba',
                                    ],
                                    'VerificationStatus' => [
                                        'title' => '校验状态',
                                        'description' => '校验状态。',
                                        'type' => 'string',
                                        'example' => 'verified',
                                    ],
                                    'Vertical' => [
                                        'title' => '行业',
                                        'description' => '行业。',
                                        'type' => 'string',
                                        'example' => '零售',
                                    ],
                                ],
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A94866411B2O\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": {\\n    \\"BusinessId\\": \\"192882828733\\",\\n    \\"BusinessName\\": \\"Alibaba\\",\\n    \\"VerificationStatus\\": \\"verified\\",\\n    \\"Vertical\\": \\"零售\\"\\n  },\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '查询waba商业信息',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'UpdatePhoneWebhook' => [
            'summary' => '修改号码回调地址信息。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'CustSpaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '293483938849493****',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '号码',
                        'description' => '手机号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '8613800001234',
                    ],
                ],
                [
                    'name' => 'StatusCallbackUrl',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'http方式状态报告接口回调地址',
                        'description' => 'HTTP方式状态报告接口回调地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'UpCallbackUrl',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'http方式上行消息接口回调地址',
                        'description' => 'HTTP方式上行消息接口回调地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://aliyun.com',
                    ],
                ],
                [
                    'name' => 'HttpFlag',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否使用Http方式接收回执（Y: 是， N: 否）',
                        'description' => '是否使用HTTP方式接收回执。取值：'."\n"
                            ."\n"
                            .'- Y：是'."\n"
                            ."\n"
                            .'- N：否',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Y',
                    ],
                ],
                [
                    'name' => 'QueueFlag',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否使用队列方式接收回执（Y: 是， N: 否）',
                        'description' => '是否使用队列方式接收回执。取值：'."\n"
                            ."\n"
                            .'- Y：是'."\n"
                            ."\n"
                            .'- N：否',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'N',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A9486641****',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '提示信息，当返回异常时有值。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A9486641****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"null\\",\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '修改号码回调地址信息',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'UpdateAccountWebhook' => [
            'summary' => '修改账号回调地址信息。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'CustSpaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '293483938849493**',
                    ],
                ],
                [
                    'name' => 'StatusCallbackUrl',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'http方式通知回调地址',
                        'description' => 'HTTP方式通知回调地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'HttpFlag',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否使用Http方式接收回执（Y: 是， N: 否）',
                        'description' => '是否使用HTTP方式接收回执。取值：'."\n"
                            .'- Y：是'."\n"
                            .'- N：否',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Y',
                    ],
                ],
                [
                    'name' => 'QueueFlag',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否使用队列方式接收回执（Y: 是， N: 否）',
                        'description' => '是否使用队列方式接收回执。取值：'."\n"
                            .'- Y：是'."\n"
                            .'- N：否',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'N',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '返回对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '744c4b5c79c9432497a075bdfca3****',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '提示信息，当返回异常时有值。',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"744c4b5c79c9432497a075bdfca3****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '修改账号回调地址信息',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'QueryPhoneBusinessProfile' => [
            'summary' => '查询号码商业信息。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '162621',
                'abilityTreeNodes' => [
                    'FEATUREcamsDJ746K',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'CustSpaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2934839388494***',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '手机号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '8613800001234',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A94866411B2O',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => 'None',
                            ],
                            'Data' => [
                                'description' => '返回数据。'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'Address' => [
                                        'title' => '地址',
                                        'description' => '地址。',
                                        'type' => 'string',
                                        'example' => '长沙',
                                    ],
                                    'Description' => [
                                        'title' => '描述',
                                        'description' => '描述。',
                                        'type' => 'string',
                                        'example' => '描述',
                                    ],
                                    'Vertical' => [
                                        'title' => '行业',
                                        'description' => '行业。',
                                        'type' => 'string',
                                        'example' => '零售',
                                    ],
                                    'Email' => [
                                        'title' => '邮箱',
                                        'description' => '邮箱。',
                                        'type' => 'string',
                                        'example' => 'aa@aliyun.com',
                                    ],
                                    'ProfilePictureUrl' => [
                                        'title' => '头像',
                                        'description' => '头像。',
                                        'type' => 'string',
                                        'example' => 'https://....img',
                                    ],
                                    'Websites' => [
                                        'title' => '网站',
                                        'description' => '网站。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '网站地址。',
                                            'type' => 'string',
                                            'example' => 'https://alibaba.com',
                                        ],
                                    ],
                                    'About' => [
                                        'title' => '关于',
                                        'description' => '关于',
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A94866411B2O\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"None\\",\\n  \\"Data\\": {\\n    \\"Address\\": \\"长沙\\",\\n    \\"Description\\": \\"描述\\",\\n    \\"Vertical\\": \\"零售\\",\\n    \\"Email\\": \\"aa@aliyun.com\\",\\n    \\"ProfilePictureUrl\\": \\"https://....img\\",\\n    \\"Websites\\": [\\n      \\"https://alibaba.com\\"\\n    ],\\n    \\"About\\": \\"\\"\\n  },\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '查询号码商业信息',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'ModifyPhoneBusinessProfile' => [
            'summary' => '修改号码商业信息。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '162622',
                'abilityTreeNodes' => [
                    'FEATUREcamsDJ746K',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'CustSpaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '293483938849****',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '号码',
                        'description' => '手机号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '8613800001234',
                    ],
                ],
                [
                    'name' => 'Address',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地址',
                        'description' => '地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '四川',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'title' => '描述 ',
                        'description' => '描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Vertical',
                    'in' => 'query',
                    'schema' => [
                        'title' => '行业',
                        'description' => '行业。'."\n"
                            ."\n"
                            .'> 枚举值：OTHER: 其他；AUTO: 汽车；BEAUTY: 美容；APPAREL: 服装；EDU: 教育；ENTERTAIN: 娱乐；EVENT_PLAN: 活动策划；FINANCE: 金融；GROCERY: 杂货；GOVT: 政府；HOTEL: 酒店；HEALTH: 健康；NONPROFIT: 非营利组织；PROF_SERVICES: 专业服务；RETAIL: 零售；TRAVEL: 旅游；RESTAURANT: 餐厅。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'OTHER',
                    ],
                ],
                [
                    'name' => 'Email',
                    'in' => 'query',
                    'schema' => [
                        'title' => '邮箱',
                        'description' => '邮箱。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'aa@aliyun.com',
                    ],
                ],
                [
                    'name' => 'ProfilePictureUrl',
                    'in' => 'query',
                    'schema' => [
                        'title' => '头像url',
                        'description' => '头像URL。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://a.img',
                    ],
                ],
                [
                    'name' => 'Websites',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '网站',
                        'description' => '网站。',
                        'type' => 'array',
                        'items' => [
                            'description' => '网站地址。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'https://alibaba.com',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'About',
                    'in' => 'query',
                    'schema' => [
                        'title' => '关于',
                        'description' => '关于',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'business profile',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A94866411B2O',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '提示信息，当返回异常时有值。',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A94866411B2O\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '修改号码商业信息',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'CreateChatappMigrationInitiate' => [
            'summary' => '新增迁移号码。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'CustSpaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '293483938849493****',
                    ],
                ],
                [
                    'name' => 'MobileNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '号码信息，不要带国家编码',
                        'description' => '手机号码，不需要带国家编码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '13900001234',
                    ],
                ],
                [
                    'name' => 'CountryCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '号码国家编码',
                        'description' => '国家编码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '86',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A9486641****',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](https://www.alibabacloud.com/help/zh/cams/latest/api-error-codes)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Data' => [
                                'description' => '返回数据。'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'PhoneNumber' => [
                                        'title' => '号码',
                                        'description' => '手机号码。',
                                        'type' => 'string',
                                        'example' => '8613900001234',
                                    ],
                                    'Id' => [
                                        'title' => '号码ID',
                                        'description' => '号码ID。',
                                        'type' => 'string',
                                        'example' => '82828893332',
                                    ],
                                    'Status' => [
                                        'title' => '号码状态',
                                        'description' => '号码状态。枚举值：MIGRATING：迁移中',
                                        'type' => 'string',
                                        'example' => 'MIGRATING',
                                    ],
                                ],
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A9486641****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Data\\": {\\n    \\"PhoneNumber\\": \\"8613900001234\\",\\n    \\"Id\\": \\"82828893332\\",\\n    \\"Status\\": \\"MIGRATING\\"\\n  },\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '创建需要迁移号码',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'GetMigrationVerifyCode' => [
            'summary' => '获取迁移号码的验证码。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CustSpaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '293483938849493',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '号码',
                        'description' => '手机号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '8613800001234',
                    ],
                ],
                [
                    'name' => 'Locale',
                    'in' => 'query',
                    'schema' => [
                        'title' => '语言',
                        'description' => '语言',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'zh_CN',
                    ],
                ],
                [
                    'name' => 'Method',
                    'in' => 'query',
                    'schema' => [
                        'title' => '验证码方式（sms/voice)',
                        'description' => '验证码方式。枚举值：sms：通过短信接收，voice：通过电话接收。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sms',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A94866411B2O',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => 'None',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'PhoneNumber' => [
                                        'title' => '号码',
                                        'description' => '手机号码。',
                                        'type' => 'string',
                                        'example' => '8613800001234',
                                    ],
                                    'Id' => [
                                        'title' => '号码ID',
                                        'description' => '号码ID。',
                                        'type' => 'string',
                                        'example' => '82828893332',
                                    ],
                                ],
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A94866411B2O\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"None\\",\\n  \\"Data\\": {\\n    \\"PhoneNumber\\": \\"8613800001234\\",\\n    \\"Id\\": \\"82828893332\\"\\n  },\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '获取迁移号码的验证码',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'ChatappMigrationVerified' => [
            'summary' => '迁移号码校验。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'CustSpaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '293483938849493',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '号码',
                        'description' => '手机号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '861380001234',
                    ],
                ],
                [
                    'name' => 'VerifyCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '验证码',
                        'description' => '验证码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '828798',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A9486641****',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Data' => [
                                'description' => '返回数据。'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'PhoneNumber' => [
                                        'title' => '号码',
                                        'description' => '手机号码。',
                                        'type' => 'string',
                                        'example' => '8613800001234',
                                    ],
                                    'Id' => [
                                        'title' => '号码ID',
                                        'description' => '号码ID。',
                                        'type' => 'string',
                                        'example' => '82828893332',
                                    ],
                                ],
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A9486641****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Data\\": {\\n    \\"PhoneNumber\\": \\"8613800001234\\",\\n    \\"Id\\": \\"82828893332\\"\\n  },\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '迁移号码校验',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'ChatappMigrationRegister' => [
            'summary' => '迁移号码注册。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'CustSpaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '293483938849493',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '号码',
                        'description' => '手机号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '86138001234',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A9486641****',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A9486641****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '迁移号码注册',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'GetChatappUploadAuthorization' => [
            'summary' => '获取上传文件的鉴权信息。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CustSpaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '293483938849493',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A94866411B2O',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'AccessKeyId' => [
                                        'title' => 'oss 授权上传文件的accessKeyId',
                                        'description' => 'Oss授权上传文件的AccessKeyId。',
                                        'type' => 'string',
                                        'example' => '2skeuurfj****',
                                    ],
                                    'AccessKeySecret' => [
                                        'title' => 'Oss授权上传文件的secret',
                                        'description' => 'Oss授权上传文件的Secret。',
                                        'type' => 'string',
                                        'example' => 'skdkdukeuuuu****',
                                    ],
                                    'BucketName' => [
                                        'title' => 'Oss上传的bucket名称',
                                        'description' => 'Oss上传的Bucket名称。',
                                        'type' => 'string',
                                        'example' => 'oss',
                                    ],
                                    'Dir' => [
                                        'title' => 'Oss授权上传的目录',
                                        'description' => 'Oss授权上传的目录。',
                                        'type' => 'string',
                                        'example' => '1000102939',
                                    ],
                                    'EndPoint' => [
                                        'title' => 'Oss授权上传的服务器地址',
                                        'description' => 'Oss授权上传的服务器地址。',
                                        'type' => 'string',
                                        'example' => 'https://oss.com',
                                    ],
                                    'SecurityToken' => [
                                        'title' => '授权密钥',
                                        'description' => '授权密钥。',
                                        'type' => 'string',
                                        'example' => 'dkdieiii**',
                                    ],
                                    'Expire' => [
                                        'title' => '超时时间',
                                        'description' => '超时时间。单位为秒。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3600',
                                    ],
                                ],
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A94866411B2O\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": {\\n    \\"AccessKeyId\\": \\"2skeuurfj****\\",\\n    \\"AccessKeySecret\\": \\"skdkdukeuuuu****\\",\\n    \\"BucketName\\": \\"oss\\",\\n    \\"Dir\\": \\"1000102939\\",\\n    \\"EndPoint\\": \\"https://oss.com\\",\\n    \\"SecurityToken\\": \\"dkdieiii**\\",\\n    \\"Expire\\": 3600\\n  },\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '获取上传文件的鉴权信息',
            'description' => '本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'SubmitIsvCustomerTerms' => [
            'summary' => '提交Isv客户的协议信息。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'CustSpaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '293483938849493',
                    ],
                ],
                [
                    'name' => 'CustName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '企业名称',
                        'description' => '企业名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Aliyun',
                    ],
                ],
                [
                    'name' => 'OfficeAddress',
                    'in' => 'query',
                    'schema' => [
                        'title' => '企业地址',
                        'description' => '企业地址。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '杭州',
                    ],
                ],
                [
                    'name' => 'ContactMail',
                    'in' => 'query',
                    'schema' => [
                        'title' => '企业邮箱',
                        'description' => '企业邮箱。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'partner@aliyun.com',
                    ],
                ],
                [
                    'name' => 'CountryId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '国家编码ID',
                        'description' => '国家编码ID。'."\n"
                            ."\n"
                            .'> 详细国家编码，请参见[国家编码](~~608210~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'CN',
                    ],
                ],
                [
                    'name' => 'BusinessDesc',
                    'in' => 'query',
                    'schema' => [
                        'title' => '企业使用场景',
                        'description' => '企业使用场景。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '营销商品',
                    ],
                ],
                [
                    'name' => 'IsvTerms',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Isv/Client协议',
                        'description' => 'Isv/Client协议文件名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'isvTerms.pdf',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A94866411B2O',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '/',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A94866411B2O\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"AccessDeniedDetail\\": \\"/\\"\\n}","type":"json"}]',
            'title' => '提交Isv客户的协议信息',
            'description' => '- 本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。'."\n"
                ."\n"
                .'- 使用[GetChatappUploadAuthorization](~~GetChatappUploadAuthorization~~)接口获取到上传文件到OSS的鉴权信息后，需要使用将鉴权信息将文件上传到OSS服务器中，可以使用OSS提供的SDK上传。上传时key取值为`Dir+'."\n"
                .' "/" + 文件名`（例如：C200293990209/isvTerms.pdf）。'."\n"
                .'其中，Dir通过调用[GetChatappUploadAuthorization](~~GetChatappUploadAuthorization~~)获取，文件名是调用该接口获取到的IsvTerms参数值。',
        ],
        'GetCommerceSetting' => [
            'summary' => '获取号码商业设置状态。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'CustSpaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '293483938849493',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '号码',
                        'description' => '手机号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1380000****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A9486641****',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'description' => '返回数据对象。',
                                'type' => 'object',
                                'properties' => [
                                    'CartEnable' => [
                                        'title' => '是否启用购物车',
                                        'description' => '是否启用购物车。'."\n"
                                            ."\n"
                                            .'- true：启用'."\n"
                                            ."\n"
                                            .'- false：不启用',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'CatalogVisible' => [
                                        'title' => '是否显示目录',
                                        'description' => '是否显示目录。'."\n"
                                            .'- true：显示'."\n"
                                            .'- false：不显示',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A9486641****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": {\\n    \\"CartEnable\\": false,\\n    \\"CatalogVisible\\": false\\n  }\\n}","type":"json"}]',
            'title' => '获取号码商业设置状态',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'UpdateCommerceSetting' => [
            'summary' => '修改号码商业设置状态。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'CustSpaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '293483938849493',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '号码',
                        'description' => '手机号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1380000****',
                    ],
                ],
                [
                    'name' => 'CartEnable',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '是否启用购物车',
                        'description' => '是否启用购物车。取值：'."\n"
                            ."\n"
                            .'- true：启用'."\n"
                            ."\n"
                            .'- false：不启用',
                        'type' => 'boolean',
                        'required' => true,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'CatalogVisible',
                    'in' => 'query',
                    'schema' => [
                        'title' => '目录是否显示',
                        'description' => '是否显示目录。'."\n"
                            .'- true：显示'."\n"
                            .'- false：不显示',
                        'type' => 'boolean',
                        'required' => true,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A94866411B2O',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '提示信息，当返回异常时有值。',
                                'type' => 'string',
                                'example' => 'None',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A94866411B2O\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"None\\"\\n}","type":"json"}]',
            'title' => '修改号码商业设置状态',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'ChatappEmbedSignUp' => [
            'summary' => '北向接口嵌入式。'."\n"
                .'请在调用嵌入式SDK时使用v2版本，此接口即可忽略。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InputToken',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '嵌入式返回的inputToken',
                        'description' => '嵌入式返回的inputToken。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'wlelkelwidilwloe-ewlwols0lwsllsld',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A9486641****',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Wabas' => [
                                'description' => 'Waba列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '对象',
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'title' => 'WabaId',
                                            'description' => 'Waba Id。',
                                            'type' => 'string',
                                            'example' => '2939933992*****',
                                        ],
                                        'Name' => [
                                            'title' => 'Waba Name',
                                            'description' => 'Waba名称。',
                                            'type' => 'string',
                                            'example' => 'Alibaba',
                                        ],
                                        'Currency' => [
                                            'title' => '币种',
                                            'description' => '币种。',
                                            'type' => 'string',
                                            'example' => 'USD',
                                        ],
                                        'AccountReviewStatus' => [
                                            'title' => 'Waba审核状态',
                                            'description' => 'Waba审核状态。',
                                            'type' => 'string',
                                            'example' => 'VERIFIED',
                                        ],
                                        'MessageTemplateNamespace' => [
                                            'title' => '消息模板命名空间',
                                            'description' => '消息模板命名空间。',
                                            'type' => 'string',
                                            'example' => 'alals-lsslls-slslsos-slsl',
                                        ],
                                    ],
                                ],
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A9486641****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Wabas\\": [\\n    {\\n      \\"Id\\": \\"2939933992*****\\",\\n      \\"Name\\": \\"Alibaba\\",\\n      \\"Currency\\": \\"USD\\",\\n      \\"AccountReviewStatus\\": \\"VERIFIED\\",\\n      \\"MessageTemplateNamespace\\": \\"alals-lsslls-slslsos-slsl\\"\\n    }\\n  ],\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '嵌入式入口',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'GetPhoneEncryptionPublicKey' => [
            'summary' => '获取号码的加密公钥。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PhoneNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '号码',
                        'description' => '号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'flow_001',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '393838848',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A9486641****',
                            ],
                            'Code' => [
                                'title' => '结果返回OK为正常',
                                'description' => '结果返回OK为正常。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '错误描述信息',
                                'description' => '错误描述信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'PhoneNumber' => [
                                        'description' => '号码。',
                                        'type' => 'string',
                                        'example' => '86138000**',
                                    ],
                                    'EncryptionPublicKey' => [
                                        'description' => '公钥。',
                                        'type' => 'string',
                                        'example' => '-----BEGIN PUBLIC KEY-----'."\n"
                                            .'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvodI436hl3DZC2TOnYwt'."\n"
                                            .'Pz1+5cWovp6CqlnMavX7HZ2KkQCHp9GHAAhB9ra5GaQPRQqNuvYoqhqT0OSLjUhx'."\n"
                                            .'ybCD2Y67oltEvC9g1qOXf0q1Q4m+19anEXRIymahRhgEfsANp8Jfyu9mXqYsRIL1'."\n"
                                            .'kiuQJbGKd8rBsXYEDCkU/HkYLnBtasset/CxwIHHE3IkQDaHDG2Mpm6Z2sbypxIg'."\n"
                                            .'R9Ihw6TaL1nYxmrW5sUY9bzXG4Y1iL6ywC1lxYToYO+vKUTGjz6dO/kKp4yAUkcx'."\n"
                                            .'jvnrn2D2mzbIUyzRZftWp6jNSNNZFEuJe9jazLxyD4IAgwv6sC7L7+13tKC9OW7i'."\n"
                                            .'3wIDAQAB'."\n"
                                            .'-----END PUBLIC KEY-----',
                                    ],
                                    'EncryptionPublicKeyStatus' => [
                                        'description' => '公钥有效状态。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'MISMATCH' => 'MISMATCH',
                                            'VALID' => 'VALID',
                                        ],
                                        'example' => 'VALID',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A9486641****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": {\\n    \\"PhoneNumber\\": \\"86138000**\\",\\n    \\"EncryptionPublicKey\\": \\"-----BEGIN PUBLIC KEY-----\\\\nMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvodI436hl3DZC2TOnYwt\\\\nPz1+5cWovp6CqlnMavX7HZ2KkQCHp9GHAAhB9ra5GaQPRQqNuvYoqhqT0OSLjUhx\\\\nybCD2Y67oltEvC9g1qOXf0q1Q4m+19anEXRIymahRhgEfsANp8Jfyu9mXqYsRIL1\\\\nkiuQJbGKd8rBsXYEDCkU/HkYLnBtasset/CxwIHHE3IkQDaHDG2Mpm6Z2sbypxIg\\\\nR9Ihw6TaL1nYxmrW5sUY9bzXG4Y1iL6ywC1lxYToYO+vKUTGjz6dO/kKp4yAUkcx\\\\njvnrn2D2mzbIUyzRZftWp6jNSNNZFEuJe9jazLxyD4IAgwv6sC7L7+13tKC9OW7i\\\\n3wIDAQAB\\\\n-----END PUBLIC KEY-----\\",\\n    \\"EncryptionPublicKeyStatus\\": \\"VALID\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取号码的加密公钥',
            'description' => '本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'UpdatePhoneEncryptionPublicKey' => [
            'summary' => '更新号码的加密公钥。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PhoneNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '号码',
                        'description' => '号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '86138000',
                    ],
                ],
                [
                    'name' => 'EncryptionPublicKey',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '加密公钥',
                        'description' => '加密公钥。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '-----BEGIN PUBLIC KEY-----'."\n"
                            .'AAA'."\n"
                            .'BBB'."\n"
                            .'CCC'."\n"
                            .'DDD'."\n"
                            .'EEE'."\n"
                            .'FFF'."\n"
                            .'GGG'."\n"
                            .'-----END PUBLIC KEY-----',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId/instanceId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '399382882',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A94866411B2O'."\n",
                            ],
                            'Code' => [
                                'title' => '结果返回OK为正常',
                                'description' => '结果返回OK为正常。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '错误描述信息',
                                'description' => '错误描述信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A94866411B2O\\\\n\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '更新号码的加密公钥',
            'description' => '本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'UpdatePhoneMessageQrdl' => [
            'summary' => '修改消息二维码。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PhoneNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '号码',
                        'description' => '号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '628111908****',
                    ],
                ],
                [
                    'name' => 'GenerateQrImage',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '生产二维码图片格式',
                        'description' => '生产二维码图片格式。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'SVG' => 'SVG',
                            'PNG' => 'PNG',
                        ],
                        'example' => 'PNG',
                    ],
                ],
                [
                    'name' => 'PrefilledMessage',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '消息内容',
                        'description' => '消息内容。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Hello',
                    ],
                ],
                [
                    'name' => 'QrdlCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '二维码编码',
                        'description' => '二维码编码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '29338838',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId/实例ID',
                        'description' => 'ISV子客户的SpaceId/实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '9383884',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request。',
                                'type' => 'string',
                                'example' => '1612C226-E271-4CFE-9F18-4066D******',
                            ],
                            'Code' => [
                                'title' => '结果返回OK为正常',
                                'description' => '结果返回OK为正常。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '错误描述信息',
                                'description' => '错误描述信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'description' => '返回数据。'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'PhoneNumber' => [
                                        'title' => '号码',
                                        'description' => '号码。',
                                        'type' => 'string',
                                        'example' => '628111908****',
                                    ],
                                    'QrdlCode' => [
                                        'title' => '二维码编码',
                                        'description' => '二维码编码。',
                                        'type' => 'string',
                                        'example' => 'DEDEE998',
                                    ],
                                    'GenerateQrImage' => [
                                        'title' => '生成图片类型',
                                        'description' => '生成图片类型。',
                                        'type' => 'string',
                                        'example' => 'PNG',
                                    ],
                                    'PrefilledMessage' => [
                                        'title' => '消息内容',
                                        'description' => '消息内容。',
                                        'type' => 'string',
                                        'example' => 'Hello',
                                    ],
                                    'DeepLinkUrl' => [
                                        'title' => '深度链接地址',
                                        'description' => '深度链接地址。',
                                        'type' => 'string',
                                        'example' => 'https://wa.msg/',
                                    ],
                                    'QrImageUrl' => [
                                        'title' => '二维码地址',
                                        'description' => '二维码地址。',
                                        'type' => 'string',
                                        'example' => 'https://img.png',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1612C226-E271-4CFE-9F18-4066D******\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": {\\n    \\"PhoneNumber\\": \\"628111908****\\",\\n    \\"QrdlCode\\": \\"DEDEE998\\",\\n    \\"GenerateQrImage\\": \\"PNG\\",\\n    \\"PrefilledMessage\\": \\"Hello\\",\\n    \\"DeepLinkUrl\\": \\"https://wa.msg/\\",\\n    \\"QrImageUrl\\": \\"https://img.png\\"\\n  }\\n}","type":"json"}]',
            'title' => '修改消息二维码',
            'description' => '本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'ListPhoneMessageQrdl' => [
            'summary' => '查询消息二维码列表数据。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PhoneNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '号码',
                        'description' => '号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '861380000',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId/实例ID',
                        'description' => 'ISV子客户的SpaceId/实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '9383883',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A94866411B2O',
                            ],
                            'Code' => [
                                'title' => '结果返回OK为正常',
                                'description' => '结果返回OK为正常。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '错误描述信息',
                                'description' => '错误描述信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'description' => '返回数据对像。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回数据对像。',
                                    'type' => 'object',
                                    'properties' => [
                                        'PhoneNumber' => [
                                            'description' => '号码。',
                                            'type' => 'string',
                                            'example' => '8613800',
                                        ],
                                        'QrdlCode' => [
                                            'description' => '二维码编码。',
                                            'type' => 'string',
                                            'example' => 'IUIED999',
                                        ],
                                        'GenerateQrImage' => [
                                            'description' => '生成图片类型。',
                                            'type' => 'string',
                                            'example' => 'PNG',
                                        ],
                                        'PrefilledMessage' => [
                                            'description' => '消息内容。',
                                            'type' => 'string',
                                            'example' => 'Hello',
                                        ],
                                        'DeepLinkUrl' => [
                                            'description' => '深度链接地址。',
                                            'type' => 'string',
                                            'example' => 'https://wa.msg/',
                                        ],
                                        'QrImageUrl' => [
                                            'description' => '二维码地址。',
                                            'type' => 'string',
                                            'example' => 'https://img.png',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A94866411B2O\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": [\\n    {\\n      \\"PhoneNumber\\": \\"8613800\\",\\n      \\"QrdlCode\\": \\"IUIED999\\",\\n      \\"GenerateQrImage\\": \\"PNG\\",\\n      \\"PrefilledMessage\\": \\"Hello\\",\\n      \\"DeepLinkUrl\\": \\"https://wa.msg/\\",\\n      \\"QrImageUrl\\": \\"https://img.png\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询消息二维码列表',
            'description' => '本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'DeletePhoneMessageQrdl' => [
            'summary' => '删除消息二维码。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PhoneNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '号码',
                        'description' => '号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '861380000',
                    ],
                ],
                [
                    'name' => 'QrdlCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '二维码编码',
                        'description' => '二维码编码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '29338838',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId/实例ID',
                        'description' => 'ISV子客户的SpaceId/实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '883873773',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A94866411B2O'."\n",
                            ],
                            'Code' => [
                                'title' => '结果返回OK为正常',
                                'description' => '结果返回OK为正常。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '错误描述信息',
                                'description' => '错误描述信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A94866411B2O\\\\n\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '删除消息二维码',
            'description' => '本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'CreatePhoneMessageQrdl' => [
            'summary' => '创建消息二维码。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PhoneNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '号码',
                        'description' => '号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '861380000',
                    ],
                ],
                [
                    'name' => 'GenerateQrImage',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '生产二维码图片格式',
                        'description' => '生产二维码图片格式。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'SVG' => 'SVG',
                            'PNG' => 'PNG',
                        ],
                        'example' => 'PNG',
                    ],
                ],
                [
                    'name' => 'PrefilledMessage',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '消息内容',
                        'description' => '消息内容。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Hello',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId/实例ID',
                        'description' => 'ISV子客户的SpaceId/实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '838833',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A94866411B2O'."\n",
                            ],
                            'Code' => [
                                'title' => '结果返回OK为正常',
                                'description' => '结果返回OK为正常。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '错误描述信息',
                                'description' => '错误描述信息。',
                                'type' => 'string',
                                'example' => 'none',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'PhoneNumber' => [
                                        'title' => '号码',
                                        'description' => '号码。',
                                        'type' => 'string',
                                        'example' => '8613800',
                                    ],
                                    'QrdlCode' => [
                                        'title' => '二维码编码',
                                        'description' => '二维码编码。',
                                        'type' => 'string',
                                        'example' => 'D9II3***',
                                    ],
                                    'GenerateQrImage' => [
                                        'title' => '生成图片类型',
                                        'description' => '生成图片类型。',
                                        'type' => 'string',
                                        'example' => 'PNG',
                                    ],
                                    'PrefilledMessage' => [
                                        'title' => '消息内容',
                                        'description' => '消息内容。',
                                        'type' => 'string',
                                        'example' => 'Hello',
                                    ],
                                    'DeepLinkUrl' => [
                                        'title' => '深度链接地址',
                                        'description' => '深度链接地址。',
                                        'type' => 'string',
                                        'example' => 'https://wa.qrdl/',
                                    ],
                                    'QrImageUrl' => [
                                        'title' => '二维码地址',
                                        'description' => '二维码地址。',
                                        'type' => 'string',
                                        'example' => 'http://img.png',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A94866411B2O\\\\n\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"none\\",\\n  \\"Data\\": {\\n    \\"PhoneNumber\\": \\"8613800\\",\\n    \\"QrdlCode\\": \\"D9II3***\\",\\n    \\"GenerateQrImage\\": \\"PNG\\",\\n    \\"PrefilledMessage\\": \\"Hello\\",\\n    \\"DeepLinkUrl\\": \\"https://wa.qrdl/\\",\\n    \\"QrImageUrl\\": \\"http://img.png\\"\\n  }\\n}","type":"json"}]',
            'title' => '创建消息二维码',
            'description' => '本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'QueryChatappPhoneNumbers' => [
            'summary' => '查询客户下的所有发送号码及号码状态。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '159850',
                'abilityTreeNodes' => [
                    'FEATUREcamsDJ746K',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'IsvCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Isv校验码，用于校验子帐号是否由ISV授权',
                        'description' => 'Isv校验码，用于校验子账号是否由ISV授权。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'aksik93kdkkxmwol93939',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '293483938849493',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '号码状态',
                        'description' => '号码状态',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'VERIFIED',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A94866411B2O',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '信息。',
                                'type' => 'string',
                                'enumValueTitles' => [],
                                'example' => 'SUCCESS',
                            ],
                            'PhoneNumbers' => [
                                'title' => '模板列表',
                                'description' => '号码列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '结构体',
                                    'type' => 'object',
                                    'properties' => [
                                        'UpQueue' => [
                                            'title' => '模板名称',
                                            'description' => '上行消息通知Queue。',
                                            'type' => 'string',
                                            'example' => 'Alicom-Queue-****-ChatAppInbound',
                                        ],
                                        'PhoneNumber' => [
                                            'title' => '模板编码',
                                            'description' => '号码',
                                            'type' => 'string',
                                            'example' => '8613800000',
                                        ],
                                        'StatusQueue' => [
                                            'title' => '审核状态',
                                            'description' => '状态报告通知Queue',
                                            'type' => 'string',
                                            'example' => 'Alicom-Queue-****-ChatAppStatus',
                                        ],
                                        'VerifiedName' => [
                                            'title' => '语言',
                                            'description' => '申请名称。',
                                            'type' => 'string',
                                            'example' => 'Alibaba',
                                        ],
                                        'StatusCallbackUrl' => [
                                            'title' => '模板分类',
                                            'description' => '状态报告通知URL。',
                                            'type' => 'string',
                                            'example' => 'https://ali.com/status',
                                        ],
                                        'UpCallbackUrl' => [
                                            'title' => '模板分类',
                                            'description' => '上行消息通知URL。',
                                            'type' => 'string',
                                            'example' => 'https://ali.com/inbound',
                                        ],
                                        'QualityRating' => [
                                            'title' => '号码质量',
                                            'description' => '号码质量。取值：'."\n"
                                                ."\n"
                                                .'- **GREEN**'."\n"
                                                ."\n"
                                                .'- **YELLOW**'."\n"
                                                ."\n"
                                                .'- **RED**'."\n"
                                                ."\n"
                                                .'- **UNKNOWN**',
                                            'type' => 'string',
                                            'example' => 'GREEN',
                                        ],
                                        'Status' => [
                                            'title' => '号码状态',
                                            'description' => '号码状态。'."\n"
                                                ."\n"
                                                .'- PENDING'."\n"
                                                ."\n"
                                                .' - DELETED'."\n"
                                                ."\n"
                                                .' - MIGRATED'."\n"
                                                ."\n"
                                                .' - BANNED'."\n"
                                                ."\n"
                                                .' - RESTRICTED'."\n"
                                                ."\n"
                                                .' - RATE_LIMITED'."\n"
                                                ."\n"
                                                .' - FLAGGED'."\n"
                                                ."\n"
                                                .' - CONNECTED'."\n"
                                                ."\n"
                                                .' - DISCONNECTED'."\n"
                                                ."\n"
                                                .' - UNKNOWN'."\n"
                                                ."\n"
                                                .' - UNVERIFIED',
                                            'type' => 'string',
                                            'example' => 'CONNECTED',
                                        ],
                                        'CodeVerificationStatus' => [
                                            'title' => '号码校验状态',
                                            'description' => '号码校验状态。',
                                            'type' => 'string',
                                            'example' => 'VERIFIED',
                                        ],
                                        'NameStatus' => [
                                            'title' => '名称状态',
                                            'description' => '名称状态。',
                                            'type' => 'string',
                                            'example' => 'Approval',
                                        ],
                                        'MessagingLimitTier' => [
                                            'title' => '号码发送量',
                                            'description' => '号码发送量。',
                                            'type' => 'string',
                                            'example' => 'TIER_10',
                                        ],
                                        'NewNameStatus' => [
                                            'title' => '新名称审核状态',
                                            'description' => '新名称审核状态。',
                                            'type' => 'string',
                                            'example' => 'Approval',
                                        ],
                                    ],
                                ],
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A94866411B2O\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"PhoneNumbers\\": [\\n    {\\n      \\"UpQueue\\": \\"Alicom-Queue-****-ChatAppInbound\\",\\n      \\"PhoneNumber\\": \\"8613800000\\",\\n      \\"StatusQueue\\": \\"Alicom-Queue-****-ChatAppStatus\\",\\n      \\"VerifiedName\\": \\"Alibaba\\",\\n      \\"StatusCallbackUrl\\": \\"https://ali.com/status\\",\\n      \\"UpCallbackUrl\\": \\"https://ali.com/inbound\\",\\n      \\"QualityRating\\": \\"GREEN\\",\\n      \\"Status\\": \\"CONNECTED\\",\\n      \\"CodeVerificationStatus\\": \\"VERIFIED\\",\\n      \\"NameStatus\\": \\"Approval\\",\\n      \\"MessagingLimitTier\\": \\"TIER_10\\",\\n      \\"NewNameStatus\\": \\"Approval\\"\\n    }\\n  ],\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '查询客户下的所有发送号码及号码状态',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'QueryChatappBindWaba' => [
            'summary' => '查询客户绑定的Waba。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CustSpaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '293483938849493',
                    ],
                ],
                [
                    'name' => 'IsvCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Isv校验码，用于校验子账号是否由ISV授权。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'aksik93kdkkxmwol93939',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回对象',
                        'type' => 'object',
                        'properties' => [
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A9486641****',
                            ],
                            'Data' => [
                                'description' => '返回数据。'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'AuthInternationalRateEligibility' => [
                                        'type' => 'object',
                                        'example' => '',
                                    ],
                                    'Currency' => [
                                        'description' => '币种。',
                                        'type' => 'string',
                                        'example' => 'USD',
                                    ],
                                    'Id' => [
                                        'description' => 'WabaID。',
                                        'type' => 'string',
                                        'example' => '20393988393993***',
                                    ],
                                    'AccountReviewStatus' => [
                                        'description' => 'Waba审核状态。'."\n"
                                            ."\n"
                                            .'> 枚举值'."\n"
                                            .'> - PENDING  待审核'."\n"
                                            .'> - APPROVED  审核通过'."\n"
                                            .'> - REJECTED   审核不通过'."\n"
                                            .'> - DISABLED    禁用',
                                        'type' => 'string',
                                        'example' => 'APPROVED',
                                    ],
                                    'MessageTemplateNamespace' => [
                                        'description' => '模板命名空间。',
                                        'type' => 'string',
                                        'example' => '93e6b26e_8a67_4163_a093_ebfe645a66b0',
                                    ],
                                    'Name' => [
                                        'description' => 'Waba名称。',
                                        'type' => 'string',
                                        'example' => 'Alibaba',
                                    ],
                                    'PrimaryBusinessLocation' => [
                                        'type' => 'string',
                                        'example' => '示例值示例值',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorMessage' => 'You have not subscribed to the specified product.',
                        'errorCode' => 'Product.Unsubscript',
                    ],
                    [
                        'errorMessage' => 'You are not authorized to perform the operation.',
                        'errorCode' => 'Ram.PermissionDeny',
                    ],
                    [
                        'errorMessage' => 'The system is under flow control.',
                        'errorCode' => 'System.LimitControl',
                    ],
                    [
                        'errorMessage' => 'The resource does not belong to the current user.',
                        'errorCode' => 'Unknown.ResourceOwnerId',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"无\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A9486641****\\",\\n  \\"Data\\": {\\n    \\"AuthInternationalRateEligibility\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"Currency\\": \\"USD\\",\\n    \\"Id\\": \\"20393988393993***\\",\\n    \\"AccountReviewStatus\\": \\"APPROVED\\",\\n    \\"MessageTemplateNamespace\\": \\"93e6b26e_8a67_4163_a093_ebfe645a66b0\\",\\n    \\"Name\\": \\"Alibaba\\",\\n    \\"PrimaryBusinessLocation\\": \\"示例值示例值\\"\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '查询客户绑定的Waba',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'SendChatappMassMessage' => [
            'summary' => '批量发送ChatApp消息。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '149595',
                'abilityTreeNodes' => [
                    'FEATUREcamsU2M7I2',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ChannelType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '通道类型 whatsapp/viber/line',
                        'description' => '通道类型 whatsapp/viber/line',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'whatsapp',
                    ],
                ],
                [
                    'name' => 'TemplateCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '模板编码',
                        'description' => '模板编码',
                        'type' => 'string',
                        'required' => false,
                        'example' => '744c4b5c79c9432497a075bdfca36bf5',
                    ],
                ],
                [
                    'name' => 'Language',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '语言',
                        'description' => '语言。详细语言代码列表，请参见[语言代码](~~463420~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'en',
                    ],
                ],
                [
                    'name' => 'From',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '发送方',
                        'description' => '发送方',
                        'type' => 'string',
                        'required' => true,
                        'example' => '861387777****',
                    ],
                ],
                [
                    'name' => 'CustWabaId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV客户wabaId',
                        'description' => 'ISV客户wabaId'."\n"
                            ."\n"
                            .'> 过时的参数，请使用CustSpaceId',
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                        'example' => '65921621816****',
                    ],
                ],
                [
                    'name' => 'FallBackId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '回落策略ID',
                        'description' => '回落策略ID'."\n"
                            ."\n"
                            .'<props="china">'."\n"
                            ."\n"
                            .'> 中国站此字段无效'."\n"
                            .'</props>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'S00001',
                    ],
                ],
                [
                    'name' => 'FallBackContent',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '回落内容',
                        'description' => '回落内容'."\n"
                            ."\n"
                            .'<props="china">'."\n"
                            ."\n"
                            .'> 中国站此字段无效'."\n"
                            .'</props>',
                        'type' => 'string',
                        'required' => false,
                        'example' => '回落短信',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '任务ID',
                        'description' => '任务ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '100000001',
                    ],
                ],
                [
                    'name' => 'SenderList',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '发送号码列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '发送号码列表',
                            'type' => 'object',
                            'properties' => [
                                'To' => [
                                    'title' => '号码',
                                    'description' => '发送号码',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => '861388988****',
                                ],
                                'TemplateParams' => [
                                    'title' => '变量参数',
                                    'description' => '模板参数',
                                    'type' => 'object',
                                    'required' => false,
                                    'additionalProperties' => [
                                        'type' => 'string',
                                        'example' => '{"param1":"value1","param2":"value2"}',
                                        'description' => '模板参数',
                                    ],
                                ],
                                'Payload' => [
                                    'title' => 'payload',
                                    'description' => '按钮的触发消息标识。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '按钮的触发消息。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '["payloadtext1","payloadtext2","payloadtext3"]',
                                    ],
                                    'required' => false,
                                    'maxItems' => 3,
                                    'minItems' => 0,
                                ],
                                'ProductAction' => [
                                    'title' => 'Whatsapp CATALOG/MPM消息的商品信息',
                                    'description' => '商品信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'ThumbnailProductRetailerId' => [
                                            'title' => '商品RetailerId',
                                            'description' => '商品RetailerId',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'skkks999393',
                                            'default' => 'siiek3993',
                                        ],
                                        'Sections' => [
                                            'title' => '商品列表（最多可以有10个分类，30个商品）',
                                            'description' => '商品列表（最多可以有10个分类，30个商品）',
                                            'type' => 'array',
                                            'items' => [
                                                'title' => '商品分类',
                                                'description' => '商品分类',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Title' => [
                                                        'title' => '分类名称',
                                                        'description' => '分类名称',
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => 'abcd',
                                                    ],
                                                    'ProductItems' => [
                                                        'title' => '商品列表',
                                                        'description' => '商品列表',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'title' => '商品信息',
                                                            'description' => '商品信息',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'ProductRetailerId' => [
                                                                    'title' => '商品RetailerId',
                                                                    'description' => '商品RetailerId',
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                    'example' => 'ksi399d8',
                                                                ],
                                                            ],
                                                            'required' => false,
                                                        ],
                                                        'required' => false,
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                            'required' => false,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'FlowAction' => [
                                    'title' => 'flow节点数据',
                                    'description' => 'Flow消息对象',
                                    'type' => 'object',
                                    'properties' => [
                                        'FlowToken' => [
                                            'title' => 'flow token信息',
                                            'description' => 'flow token信息',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'kde99d8',
                                        ],
                                        'FlowActionData' => [
                                            'title' => 'flow默认参数',
                                            'description' => 'flow默认参数',
                                            'type' => 'object',
                                            'required' => false,
                                            'additionalProperties' => [
                                                'type' => 'string',
                                                'example' => '{"name":"name"}',
                                                'description' => 'flow默认参数',
                                            ],
                                        ],
                                    ],
                                    'required' => false,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'IsvCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'Isv校验码，用于校验子帐号是否由ISV授权',
                        'description' => 'ISV校验码，用于校验子账号是否由ISV授权。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'skdi3kksloslikdkkdk',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => '子账户空间ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '28251486512358****',
                    ],
                ],
                [
                    'name' => 'Ttl',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'viber消息发送超时时间',
                        'description' => 'Viber消息发送超时时间，单位：秒，取值范围 30~1209600。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'Label',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'viber发送类型，取值promotion/transaction',
                        'description' => 'Viber消息类型，取值：pormotion或transaction。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'promotion',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'viber类型消息tag信息',
                        'description' => 'Viber消息发送时tag信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tag',
                    ],
                ],
                [
                    'name' => 'FallBackDuration',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '消息在指定时间范围内未收到回执时回落',
                        'description' => '消息在指定时间内没有返回已到达回执时回落, 不填代表不根据此时间判断回落，只有发送失败和有失败的状态报告时才会回落。时间单位为秒 最小值为60，最大值43200'."\n"
                            ."\n"
                            .'<props="china">'."\n"
                            ."\n"
                            .'> 中国站此字段无效'."\n"
                            .'</props>',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '43200',
                        'minimum' => '10',
                        'example' => '120',
                    ],
                ],
                [
                    'name' => 'FallBackRule',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '回落规则',
                        'description' => '回落规则。'."\n"
                            ."\n"
                            .'> 取值范围'."\n"
                            .'> - undelivered  消息不能发送到端时回落（在发送状态时模板、参数需要校验通过，模板被封、号码被封等不做校验）。参数值为空时默认使用此规则'."\n"
                            .'> - sentFailed  消息在校验模板、模板变量等参数时，校验不通过也会回落。只会强校验channelType, type, messageType, to, from(是否存在) 几个参数。'."\n"
                            ."\n"
                            .'<props="china">'."\n"
                            ."\n"
                            .'> 中国站此字段无效'."\n"
                            .'</props>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'undelivered',
                        'default' => 'undelivered',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '模板名称',
                        'description' => '模板名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A9486641****',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => 'User not authorized to operate on the specified resource.',
                            ],
                            'GroupMessageId' => [
                                'title' => '消息ID',
                                'description' => '批量消息ID',
                                'type' => 'string',
                                'example' => '890000010002****',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A9486641****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"User not authorized to operate on the specified resource.\\",\\n  \\"GroupMessageId\\": \\"890000010002****\\",\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '批量发送ChatApp消息',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。'."\n"
                ."\n"
                .'单次请求支持最多1,000个号码。',
        ],
        'SendChatappMessage' => [
            'summary' => '发送ChatApp消息。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '130289',
                'abilityTreeNodes' => [
                    'FEATUREcamsU2M7I2',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ChannelType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '通道类型 whatsapp/viber/line',
                        'description' => '类型。'."\n"
                            ."\n"
                            .'- **whatsapp**'."\n"
                            ."\n"
                            .'- **viber**'."\n"
                            ."\n"
                            .'- line（开发中）',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'whatsapp',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '消息大类'."\n"
                            .'template--模板'."\n"
                            .'message--非模板',
                        'description' => '消息类型。取值：'."\n"
                            ."\n"
                            .'- **template**：在控制台已被审核通过的消息模板，可以在任意时间发送。'."\n"
                            ."\n"
                            .'- **message**：任意格式的消息，Whatsapp类型消息时，时间限制为在收到用户最后一条消息后的24小时内可发送此类消息。Viber消息无此限制',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'template',
                    ],
                ],
                [
                    'name' => 'MessageType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '消息类型',
                        'description' => '当Type为**message**时，指定消息的详细类型。'."\n"
                            ."\n"
                            .'**Whatsapp消息类型：**'."\n"
                            .'- **text**，纯文本消息。'."\n"
                            ."\n"
                            .'- **image**，图片消息。'."\n"
                            ."\n"
                            .'- **video**，视频消息。'."\n"
                            ."\n"
                            .'- **audio**，音频消息。'."\n"
                            ."\n"
                            .'- **document**，文档消息。'."\n"
                            ."\n"
                            .'- **interactive** ，交互消息。'."\n"
                            ."\n"
                            .'- **contacts**，联系人消息。'."\n"
                            ."\n"
                            .'- **location**，位置消息。'."\n"
                            ."\n"
                            .'- **sticker**，贴纸消息。'."\n"
                            ."\n"
                            .'- **reaction**，心情消息。'."\n"
                            ."\n"
                            .'**Viber消息类型：**'."\n"
                            ."\n"
                            .'- **text**，文本消息。'."\n"
                            ."\n"
                            .'- **image**，图片消息。'."\n"
                            ."\n"
                            .'- **video**， 视频消息。'."\n"
                            ."\n"
                            .'- **document**， 文件消息。'."\n"
                            ."\n"
                            .'- **text_button**， 文本+按钮消息。'."\n"
                            ."\n"
                            .'- **text\\_image_button**， 文本+图片+按钮消息。'."\n"
                            ."\n"
                            .'- **text_video**， 文本+视频消息。'."\n"
                            ."\n"
                            .'- **text\\_video_button**， 文本+视频+按钮消息。'."\n"
                            ."\n"
                            .'- **text_image**， 文本+图片消息。'."\n"
                            ."\n\n"
                            .'> 详细字段说明，请参见[字段说明](~~454530~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'text ',
                    ],
                ],
                [
                    'name' => 'TemplateCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '模板编码',
                        'description' => '模板Code。Type为**template**时此字段必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '744c4b5c79c9432497a075bdfca3****',
                    ],
                ],
                [
                    'name' => 'Language',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '语言',
                        'description' => '模板语言。Type为**template**时此字段必填，详细语言代码列表，请参见[语言代码](~~463420~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'en',
                    ],
                ],
                [
                    'name' => 'From',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '发送方',
                        'description' => '消息发送方号码。'."\n"
                            ."\n"
                            .'> 当前支持WhatsApp账号且在控制台审核通过的号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1360000****',
                    ],
                ],
                [
                    'name' => 'To',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '接收号码',
                        'description' => '消息接收方号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1390000****',
                    ],
                ],
                [
                    'name' => 'TemplateParams',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '消息模板变量。',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                            'description' => '消息模板变量对应的实际值，参数格式为JSON格式。如果模板中存在变量，该参数为必填项。',
                            'example' => '{"param1":"value1","param2":"value2"}',
                        ],
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'schema' => [
                        'title' => '消息内容',
                        'description' => '消息内容。'."\n"
                            ."\n"
                            .'**Whatsapp消息备注：**'."\n"
                            .'-  当**messageType**为**text**时，**text**字段为必填，**Caption**禁止填写。'."\n"
                            .'- 当**messageType**为**image**时，**Link**必填。'."\n"
                            .'- 当**messageType**为**video**时，**Link**必填。'."\n"
                            .'- 当**messageType**为**audio**时，**Link**必填，**Caption**字段无效。'."\n"
                            .'- 当**messageType**为**document**时，**Link**和**FileName**字段必填，**Caption**字段无效。'."\n"
                            .'- 当**messageType**为**interactive**时，**type**和**action**字段必填。'."\n"
                            .'- 当**messageType**为**contacts**时，**name**字段必填。'."\n"
                            .'- 当**messageType**为**location**时，**longitude**和**latitude**字段必填。'."\n"
                            .'- 当**messageType**为**sticker**时，**Link**字段必填，**Caption**和**FileName**字段无效。'."\n"
                            .'- 当**messageType**为**reaction**时，**messageId**和**emoji**字段必填。'."\n"
                            ."\n"
                            .'**Viber消息备注：**'."\n"
                            .'- 当**messageType**为**text**时，**text**字段必填'."\n"
                            .'- 当**messageType**为**image**时，**link**字段必填'."\n"
                            .'- 当**messageType**为**video**时，**link**, **thumbnail**, **fileSize**, **duration**字段必填'."\n"
                            .'- 当**messageType**为**document**时，**link**, **fileName**, **fileType**字段为必填'."\n"
                            .'- 当**messageType**为**text_button**时，**text**, **caption**, **action**字段为必填'."\n"
                            .'- 当**messageType**为**text_image_button**时，**text**, **link**, **caption**, **action**字段为必填'."\n"
                            .'- 当**messageType**为**text_video**时，**text**, **link**, **thumbnail**, **fileSize**, **duration**字段为必填'."\n"
                            .'- 当**messageType**为**text_video_button**时，**text**, **link**, **thumbnail**, **fileSize**, **duration**, **caption**字段为必填，**action**字段不能为值',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"text": "hello whatsapp", "link": "", "caption": "", "fileName": "" }',
                    ],
                ],
                [
                    'name' => 'Payload',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '按钮的触发消息。',
                        'type' => 'array',
                        'items' => [
                            'description' => '模板中按钮的触发消息。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'payloadtext1,payloadtext2,payloadtext3',
                        ],
                        'required' => false,
                        'example' => 'payloadtext1,payloadtext2,payloadtext3',
                    ],
                ],
                [
                    'name' => 'CustWabaId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV客户wabaId',
                        'description' => 'ISV客户wabaId'."\n"
                            ."\n"
                            .'> 过时的参数，请使用CustSpaceId',
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                        'example' => '65921621816****',
                    ],
                ],
                [
                    'name' => 'FallBackId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '回落策略ID',
                        'description' => '失败回落策略ID。可以在控制台创建相关策略并查看。'."\n"
                            ."\n"
                            .'<props="china">'."\n"
                            ."\n"
                            .'> 中国站此字段无效'."\n"
                            .'</props>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'S_000001',
                    ],
                ],
                [
                    'name' => 'FallBackContent',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '回落内容',
                        'description' => '失败回落消息内容。'."\n"
                            ."\n"
                            .'<props="china">'."\n"
                            ."\n"
                            .'> 中国站此字段无效'."\n"
                            .'</props>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is a fallback message.',
                    ],
                ],
                [
                    'name' => 'IsvCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'Isv校验码，用于校验子帐号是否由ISV授权',
                        'description' => 'ISV校验码，用于校验子账号是否由ISV授权。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'skdi3kksloslikdkkdk',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => '子账户空间ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '28251486512358****',
                    ],
                ],
                [
                    'name' => 'ContextMessageId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '回复的消息ID',
                        'description' => '回复的消息ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '61851ccb2f1365b16aee****',
                    ],
                ],
                [
                    'name' => 'TrackingData',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'viber消息跟踪数据值',
                        'description' => 'Viber消息跟踪数据值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tracking_id:123456',
                    ],
                ],
                [
                    'name' => 'Label',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'Viber消息类型，取值 pormotion/transation',
                        'description' => 'Viber消息类型，当ChannelType=viber时为必填，取值：pormotion或transaction。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'promotion',
                    ],
                ],
                [
                    'name' => 'Ttl',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'Viber消息发送超时时间，单位为秒，取值范围 30 - 1209600',
                        'description' => 'Viber消息发送超时时间，单位：秒，取值范围 30~1209600。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                        'default' => '120',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'viber消息发送时tag信息',
                        'description' => 'Viber消息发送时tag信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tag',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '任务ID，由客户传入，在状态报告时会返回',
                        'description' => '任务ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '100000001',
                    ],
                ],
                [
                    'name' => 'FallBackDuration',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '消息在指定时间内未返回回执回落',
                        'description' => '消息在指定时间内没有返回已到达回执时回落, 不填代表不根据此时间判断回落，仅**发送失败**和**有失败的状态报告**时才会回落。时间单位为秒，最小值为60，最大值43200。'."\n"
                            ."\n"
                            .'<props="china">'."\n"
                            ."\n"
                            .'> 中国站此字段无效'."\n"
                            .'</props>',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '43200',
                        'minimum' => '10',
                        'example' => '120',
                    ],
                ],
                [
                    'name' => 'ProductAction',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'Whatsapp CATALOG/MPM 消息发送是商品信息',
                        'description' => 'Whatsapp CATALOG/MPM 消息发送是商品信息',
                        'type' => 'object',
                        'properties' => [
                            'ThumbnailProductRetailerId' => [
                                'title' => '商品RetailerId',
                                'description' => '商品RetailerId',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'S238SK',
                            ],
                            'Sections' => [
                                'title' => '商品列表（最多可以有10个分类，30个商品）',
                                'description' => '商品列表（最多可以有10个分类，30个商品）',
                                'type' => 'array',
                                'items' => [
                                    'title' => '商品分类',
                                    'description' => '商品分类',
                                    'type' => 'object',
                                    'properties' => [
                                        'Title' => [
                                            'title' => '分类名称',
                                            'description' => '分类名称',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '测试',
                                        ],
                                        'ProductItems' => [
                                            'title' => '商品列表',
                                            'description' => '商品列表',
                                            'type' => 'array',
                                            'items' => [
                                                'title' => '商品信息',
                                                'description' => '商品信息',
                                                'type' => 'object',
                                                'properties' => [
                                                    'ProductRetailerId' => [
                                                        'title' => '商品RetailerId',
                                                        'description' => '商品RetailerId',
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => '9I39E9E',
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                            'required' => false,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FallBackRule',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '回落规则',
                        'description' => '回落规则。'."\n"
                            ."\n"
                            .'> 取值范围'."\n"
                            .'> - undelivered  消息不能发送到端时回落（在发送状态时模板、参数需要校验通过，模板被封、号码被封等不做校验）。参数值为空时默认使用此规则'."\n"
                            .'> - sentFailed  消息在校验模板、模板变量等参数时，校验不通过也会回落。只会强校验channelType, type, messageType, to, from(是否存在) 几个参数。'."\n"
                            ."\n"
                            .'<props="china">'."\n"
                            ."\n"
                            .'> 中国站此字段无效'."\n"
                            .'</props>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'undelivered',
                        'default' => 'undelivered',
                    ],
                ],
                [
                    'name' => 'FlowAction',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'Flow发送数据',
                        'description' => 'Flow发送数据',
                        'type' => 'object',
                        'properties' => [
                            'FlowToken' => [
                                'title' => 'flow token信息',
                                'description' => 'flow token信息',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1122***',
                            ],
                            'FlowActionData' => [
                                'title' => 'flow默认参数',
                                'description' => 'flow默认参数',
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'example' => '{"name":"test"}',
                                    'description' => 'flow默认参数',
                                ],
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '模板名称',
                        'description' => '模板名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A94866411B2O',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => 'User not authorized to operate on the specified resource.',
                            ],
                            'MessageId' => [
                                'title' => '消息ID',
                                'description' => '消息ID。',
                                'type' => 'string',
                                'example' => '61851ccb2f1365b16aee****',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A94866411B2O\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"User not authorized to operate on the specified resource.\\",\\n  \\"MessageId\\": \\"61851ccb2f1365b16aee****\\"\\n}","type":"json"}]',
            'title' => '发送ChatApp消息',
            'description' => '本接口的单用户QPS限制为250次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'CreateChatappTemplate' => [
            'summary' => '创建消息模板，模板审核通过后可以发送消息。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '129141',
                'abilityTreeNodes' => [
                    'FEATUREcamsDKDS4Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Category',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '模板分类',
                        'description' => 'Whatsapp模板分类。取值：'."\n"
                            ."\n"
                            .'- **UTILITY**：交易相关。'."\n"
                            ."\n"
                            .'- **MARKETING**：营销性模板。'."\n"
                            ."\n"
                            .'- **AUTHENTICATION**：身份验证。'."\n"
                            ."\n"
                            .'Viber模板分类'."\n"
                            .'- **text**：纯文本'."\n"
                            ."\n"
                            .'- **image**：纯图片'."\n"
                            ."\n"
                            .'- **text_image_button**：文本 + 图片 + 按钮'."\n"
                            ."\n"
                            .'- **text_button**：文本 + 按钮'."\n"
                            ."\n"
                            .'- **document**：文件'."\n"
                            ."\n"
                            .'- **video**：视频'."\n"
                            ."\n"
                            .'- **text_video**：文本 + 视频'."\n"
                            ."\n"
                            .'- **text_video_button**：文本 + 视频 + 按钮'."\n"
                            ."\n"
                            .'- **text_image**：文本 + 图片',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'UTILITY',
                    ],
                ],
                [
                    'name' => 'Components',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '消息模板组件列表。'."\n"
                            ."\n"
                            .'> 在Category=AUTHENTICATION时，Components不允许出现Type=HEADER的节点，并且Type=BODY/FOOTER时，Text内容应该为空。',
                        'type' => 'array',
                        'items' => [
                            'description' => '组件列表。',
                            'type' => 'object',
                            'properties' => [
                                'Type' => [
                                    'title' => '组件类型'."\n"
                                        .'值：BODY、HEADER、FOOTER 和 BUTTONS',
                                    'description' => '组件类型。'."\n"
                                        ."\n"
                                        .'- **BODY**'."\n"
                                        ."\n"
                                        .'- **HEADER**'."\n"
                                        ."\n"
                                        .'- **FOOTER**'."\n"
                                        ."\n"
                                        .' - **BUTTONS**'."\n"
                                        ."\n"
                                        .'- **CAROUSEL**'."\n"
                                        ."\n"
                                        .'- **LIMITED_TIME_OFFER**'."\n"
                                        ."\n"
                                        .'> - Whatsapp类型模板时，**BODY**组件的字符长度不超度是1024个字符。**HEADER**和**FOOTER**组件的字符长度不超过60个字符。'."\n"
                                        .'> - Viber类型模板时，**FOOTER**，**CAROUSEL**，**LIMITED_TIME_OFFER** 类型无效。'."\n"
                                        .'> - Viber类型模板中，图片、视频、文件都是放在**HEADER**中（终端将图片显示在文本之下）。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'BODY',
                                ],
                                'Text' => [
                                    'title' => '所发送消息的文本',
                                    'description' => '发送消息的文本。'."\n"
                                        ."\n"
                                        .'> 在Category=AUTHENTICATION中，此属性值为空。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'hello whatsapp',
                                ],
                                'Format' => [
                                    'title' => '格式'."\n"
                                        .'TEXT-文本 IMGAGE-图片 DOCUMENT-文档 VIDEO-视频',
                                    'description' => '媒体资源类型。'."\n"
                                        ."\n"
                                        .'- **TEXT**：文本'."\n"
                                        .' '."\n"
                                        .'- **IMAGE**：图片'."\n"
                                        ."\n"
                                        .'- **DOCUMENT**：文档'."\n"
                                        ."\n"
                                        .'- **VIDEO**：视频',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TEXT',
                                ],
                                'Url' => [
                                    'title' => '素材路径',
                                    'description' => '素材路径。'."\n"
                                        ."\n"
                                        .'> Viber类型时图片建议大小：800px * 800px。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'https://image.developer.aliyundoc.com',
                                ],
                                'Caption' => [
                                    'title' => '描述，当Type为Header，且Format为IMGAGE/DOCUMENT/VIDEO 可以增加描述',
                                    'description' => '文件的描述。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '这是一个视频',
                                ],
                                'FileName' => [
                                    'title' => '文件名称，当Type为Header，且Format为DOCUMENT时可以给文件指定名称',
                                    'description' => '文件的名称。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '快递视频',
                                ],
                                'Buttons' => [
                                    'title' => '按钮',
                                    'description' => '按钮列表，仅适用于**BUTTONS**组件。'."\n"
                                        ."\n"
                                        .'> Whatsapp按钮数量说明'."\n"
                                        .'> - Whatsapp在类型为MARKETING/UTILITY时，最多允许10个按钮'."\n"
                                        .'> - PHONE_NUMBER类型的按钮只允许存在1个'."\n"
                                        .'> - URL类型的按钮最多允许存在2个'."\n"
                                        .'> - QUICK_REPLY按钮不允许和PHONE_NUMBER/URL按钮乱序出现',
                                    'type' => 'array',
                                    'items' => [
                                        'title' => '素材路径',
                                        'description' => '按钮定义',
                                        'type' => 'object',
                                        'properties' => [
                                            'Type' => [
                                                'title' => '按钮类型'."\n"
                                                    .'PHONE_NUMBER（电话）,URL（网页按钮）和QUICK_REPLY（快速回复）',
                                                'description' => '按钮类型。'."\n"
                                                    ."\n"
                                                    .'- **PHONE_NUMBER**：拨打电话按钮'."\n"
                                                    ."\n"
                                                    .'- **URL**：网页按钮'."\n"
                                                    ."\n"
                                                    .'- **QUICK_REPLY**：快速回复按钮'."\n"
                                                    ."\n"
                                                    .'- **COPY_CODE**：复制验证码、优惠码'."\n"
                                                    ."\n"
                                                    .'- **ONE_TAP**：AUTHENTICATION模板时回填按钮'."\n"
                                                    ."\n"
                                                    .'> - Whatsapp类型模板且Category为AUTHENTICATION时，按钮只允许存在一个，并且类型只能是COPY_CODE/ONE_TAP, 当类型选择COPY_CODE时，Text为必填。当类型选择ONE_TAP时，Text（在终端没有装目标应用时显示，表示采用复制验证码按钮的名称）必填，SignatureHash, PackageName, AutofillText属性必填。'."\n"
                                                    .'> - Viber类型的模板只允许一个Button且只能是URL类型。',
                                                'type' => 'string',
                                                'required' => true,
                                                'example' => 'PHONE_NUMBER',
                                            ],
                                            'Text' => [
                                                'title' => '所发送消息的文本',
                                                'description' => '按钮显示的名称。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'Call Me',
                                            ],
                                            'PhoneNumber' => [
                                                'title' => '号码',
                                                'description' => '电话号码，仅按钮类型为**PHONE_NUMBER**时有效。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '+861368897****',
                                            ],
                                            'Url' => [
                                                'title' => '点击按钮后将访问的网址',
                                                'description' => '点击链接按钮将访问的网址。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'https://example.com',
                                            ],
                                            'UrlType' => [
                                                'title' => '网址类型 static-静态dynamic-动态',
                                                'description' => '网址类型。'."\n"
                                                    ."\n"
                                                    .'- **static**：静态'."\n"
                                                    ."\n"
                                                    .'- **dynamic**：动态',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'static',
                                            ],
                                            'SignatureHash' => [
                                                'title' => 'Whatsapp模板，Category为Authentication，并且Button Type为ONE_TAP时必填，表示Whatsapp调起应用的签名Hash值',
                                                'description' => '请使用SupportedApps'."\n"
                                                    ."\n"
                                                    .'Whatsapp模板，Category为AUTHENTICATION且Button Type为ONE_TAP时必填，表示Whatsapp调起应用的签名Hash值。',
                                                'type' => 'string',
                                                'deprecated' => true,
                                                'required' => false,
                                                'example' => 'wi299382',
                                            ],
                                            'PackageName' => [
                                                'title' => 'Whatsapp模板，Category为Authentication，并且Button Type为ONE_TAP时必填，表示Whatsapp调起应用的包名',
                                                'description' => '请使用SupportedApps'."\n"
                                                    ."\n"
                                                    .'Whatsapp模板，Category为AUTHENTICATION且Button Type为ONE_TAP/ZERO_TAP时必填，表示Whatsapp调起应用的包名。',
                                                'type' => 'string',
                                                'deprecated' => true,
                                                'required' => false,
                                                'example' => 'com.demo',
                                            ],
                                            'AutofillText' => [
                                                'title' => 'Whatsapp模板，Category为Authentication，并且Button Type为ONE_TAP时必填，Whatsap Autofill操作的按钮文本',
                                                'description' => 'Whatsapp模板，Category为AUTHENTICATION且Button Type为ONE_TAP/ZERO_TAP时必填，Whatsap Autofill操作的按钮文本。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'Autofill',
                                            ],
                                            'IsOptOut' => [
                                                'title' => 'Whatsapp模板，在Category为Marketing,并且Button type为QUICK_REPLY时有效，表示按钮为营销退订按钮，客户如果点击了此按钮，并且在chatapp平台上配置了发送控制操作，则后续Marketing消息则不会发送到客户',
                                                'description' => 'Whatsapp模板，在Category为Marketing,并且Button type为QUICK_REPLY时有效，表示按钮为营销退订按钮，客户如果点击了此按钮，且在ChatApp已配置了发送控制操作，则后续Marketing消息则不会发送到客户。',
                                                'type' => 'boolean',
                                                'required' => false,
                                                'example' => 'false',
                                            ],
                                            'CouponCode' => [
                                                'title' => '优惠券码',
                                                'description' => '优惠码值，只支持字母+数字，可以传入变量如$(couponCode)，在发送时再传入优惠码',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '120293',
                                            ],
                                            'FlowId' => [
                                                'title' => 'Flow id',
                                                'description' => 'Flow ID。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '479884093605183',
                                            ],
                                            'FlowAction' => [
                                                'title' => 'flow 数据事件类型'."\n"
                                                    .'取值范围：NAVIGATE/DATA_EXCHANGE',
                                                'description' => 'flow 数据事件类型',
                                                'type' => 'string',
                                                'required' => false,
                                                'enumValueTitles' => [
                                                    'DATA_EXCHANGE' => 'DATA_EXCHANGE',
                                                    'NAVIGATE' => 'NAVIGATE',
                                                ],
                                                'example' => 'NAVIGATE',
                                            ],
                                            'NavigateScreen' => [
                                                'title' => '跳转屏 '."\n"
                                                    .'在FlowAction=NAVIGATE时必填',
                                                'description' => '跳转屏 '."\n"
                                                    .'在FlowAction=NAVIGATE时必填',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'DETAILS',
                                            ],
                                            'SupportedApps' => [
                                                'title' => '验证码ONE_TAP/ZERO_TAP支持的应用',
                                                'description' => '支持的app列表',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'SignatureHash' => [
                                                            'title' => '包签名hash',
                                                            'description' => 'Whatsapp模板，Category为AUTHENTICATION且Button Type为ONE_TAP/ZERO_TAP时必填，表示Whatsapp调起应用的签名Hash值。',
                                                            'type' => 'string',
                                                            'required' => false,
                                                            'example' => 'ieid83kdiek',
                                                        ],
                                                        'PackageName' => [
                                                            'title' => '包名',
                                                            'description' => 'Whatsapp模板，Category为AUTHENTICATION且Button Type为ONE_TAP/ZERO_TAP时必填，表示Whatsapp调起应用的包名。',
                                                            'type' => 'string',
                                                            'required' => false,
                                                            'example' => 'com.kuaidian.waimaistaff',
                                                        ],
                                                    ],
                                                    'required' => false,
                                                ],
                                                'required' => false,
                                                'maxItems' => 5,
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'required' => false,
                                ],
                                'ThumbUrl' => [
                                    'title' => 'Viber带视频消息的缩略图',
                                    'description' => 'Viber带视频消息的缩略图。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'https://cdn.multiplymall.mobiapp.cloud/yunmall/B-LM-LMALL202207130001/20220730/d712a057-a6af-4513-bbe6-7ee57ea60983.png?x-oss-process=image/resize,w_100',
                                ],
                                'Duration' => [
                                    'title' => 'Viber视频消息的视频时长，取值范围 0 - 600',
                                    'description' => 'Viber视频消息的视频时长(秒)，取值范围为0~600。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '120',
                                ],
                                'FileType' => [
                                    'title' => 'Viber文件消息的文件类型',
                                    'description' => 'Viber文件消息的文件类型。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'docx',
                                ],
                                'CodeExpirationMinutes' => [
                                    'title' => 'Whatsapp Authentication模板验证码有效期（分钟），只在Whatsapp类型消息，Category为Authentication并且Component Type为Footer时有效（此信息显示在Footer位置）',
                                    'description' => 'Whatsapp AUTHENTICATION模板验证码有效期（分钟），只在Whatsapp类型消息，Category为AUTHENTICATION并且Component Type为Footer时有效（此信息显示在Footer位置）。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'maximum' => '90',
                                    'minimum' => '1',
                                    'example' => '5',
                                ],
                                'AddSecretRecommendation' => [
                                    'title' => 'Whatsapp类型模板，Category为Authentication，并且Component Type为Body时有效，表示在Body上面显示不要将验证码信息提供给其它人的提示信息',
                                    'description' => 'Whatsapp类型模板，Category为AUTHENTICATION且Component Type为Body时有效，表示在Body上面显示不要将验证码信息提供给其它人的提示信息。',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'true',
                                ],
                                'HasExpiration' => [
                                    'title' => 'LTO模板中，是否有过期时间',
                                    'description' => '优惠码是否存在过期时间，在type = LIMITED_TIME_OFFER时使用。',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'true',
                                ],
                                'Cards' => [
                                    'description' => 'Carousel模板卡片列表。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => 'Carousel模板卡片对象。',
                                        'type' => 'object',
                                        'properties' => [
                                            'CardComponents' => [
                                                'title' => 'Carousel模板卡片列表',
                                                'description' => 'Carousel卡片中控件列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => 'Carousel模板中卡片对象。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Type' => [
                                                            'title' => '组件类型'."\n"
                                                                .'值：BODY、HEADER 和 BUTTONS',
                                                            'description' => '组件类型。取值：'."\n"
                                                                ."\n"
                                                                .'- **BODY**'."\n"
                                                                ."\n"
                                                                .'- **HEADER**'."\n"
                                                                ."\n"
                                                                .'- **BUTTONS**',
                                                            'type' => 'string',
                                                            'required' => true,
                                                            'example' => 'BODY',
                                                        ],
                                                        'Format' => [
                                                            'title' => 'Carousel模板中Header的类型，只支持IMAGE/VIDEO，所有卡片的Header必须一致'."\n"
                                                                .'格式'."\n"
                                                                .' IMGAGE-图片 VIDEO-视频',
                                                            'description' => '媒体资源类型，在Type = HEADER时有效'."\n"
                                                                ."\n"
                                                                .'- **IMAGE**: 图片 '."\n"
                                                                ."\n"
                                                                .'- **VIDEO**: 视频',
                                                            'type' => 'string',
                                                            'required' => false,
                                                            'example' => 'IMAGE',
                                                        ],
                                                        'Text' => [
                                                            'title' => 'Carousel轮播卡片中Body的内容',
                                                            'description' => 'Carousel 卡片中BODY的内容',
                                                            'type' => 'string',
                                                            'required' => false,
                                                            'example' => 'Who is the very powerful team',
                                                        ],
                                                        'Url' => [
                                                            'title' => 'Header，图片或视频的路径',
                                                            'description' => '素材路径。',
                                                            'type' => 'string',
                                                            'required' => false,
                                                            'example' => 'https://alibaba.com/img.png',
                                                        ],
                                                        'Buttons' => [
                                                            'title' => 'Carousel卡片中的按钮，所有卡片中的按钮类型、名称、顺序必须一致,每个卡片最多有2个按钮',
                                                            'description' => '按钮列表，仅适用于BUTTONS组件。Carousel每个卡片最多只能有两个按钮。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '按钮对象。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Text' => [
                                                                        'title' => '按钮内容',
                                                                        'description' => '按钮文本。',
                                                                        'type' => 'string',
                                                                        'required' => false,
                                                                        'example' => 'Call me',
                                                                    ],
                                                                    'Type' => [
                                                                        'title' => 'Carousel模板的按钮类型'."\n"
                                                                            .'取值：URL/PHONE_NUMBER/QUICK_REQLY',
                                                                        'description' => '按钮类型。'."\n"
                                                                            ."\n"
                                                                            .'- **PHONE_NUMBER**：拨打电话按钮'."\n"
                                                                            ."\n"
                                                                            .'- **URL**：网页按钮'."\n"
                                                                            ."\n"
                                                                            .'- **QUICK_REPLY**：快速回复按钮',
                                                                        'type' => 'string',
                                                                        'required' => true,
                                                                        'example' => 'PHONE_NUMBER',
                                                                    ],
                                                                    'Url' => [
                                                                        'title' => '点击按钮后将访问的网址',
                                                                        'description' => '点击按钮后将访问的网址。',
                                                                        'type' => 'string',
                                                                        'required' => false,
                                                                        'example' => 'https://alibaba.com/xx',
                                                                    ],
                                                                    'UrlType' => [
                                                                        'title' => '网址类型 static-静态dynamic-动态',
                                                                        'description' => '网址类型 '."\n"
                                                                            ."\n"
                                                                            .'- **static**: 静态'."\n"
                                                                            ."\n"
                                                                            .'- **dynamic**: 动态',
                                                                        'type' => 'string',
                                                                        'required' => false,
                                                                        'example' => 'static',
                                                                    ],
                                                                    'PhoneNumber' => [
                                                                        'title' => '号码',
                                                                        'description' => '电话号码。',
                                                                        'type' => 'string',
                                                                        'required' => false,
                                                                        'example' => '+8613800',
                                                                    ],
                                                                ],
                                                                'required' => false,
                                                            ],
                                                            'required' => false,
                                                        ],
                                                    ],
                                                    'required' => false,
                                                ],
                                                'required' => true,
                                                'maxItems' => 10,
                                                'minItems' => 1,
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'required' => false,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '模板名称',
                        'description' => '模板名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'hello_whatsapp',
                    ],
                ],
                [
                    'name' => 'Language',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '语言',
                        'description' => '模板语言。 详细语言代码，请参见[语言代码](~~463420~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'en',
                    ],
                ],
                [
                    'name' => 'Example',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '变量，KEY-VALUE结构',
                        'description' => '创建模板的示例。',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                            'example' => '{"textVariable":"text"}',
                            'description' => '变量例子。通过把JSON结构转成String的方式传入。',
                        ],
                        'enumValueTitles' => [],
                    ],
                ],
                [
                    'name' => 'TemplateType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '模板类型',
                        'description' => '模板类型。'."\n"
                            ."\n"
                            .'- **WHATSAPP**'."\n"
                            ."\n"
                            .'- **VIBER**'."\n"
                            ."\n"
                            .'- LINE（开发中）',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'WHATSAPP',
                    ],
                ],
                [
                    'name' => 'CustWabaId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV客户WabaId, 后续会被弃用，请使用CustSpaceId',
                        'description' => 'ISV客户WabaId。'."\n"
                            ."\n"
                            .'> 过时的参数，请使用CustSpaceId',
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                        'example' => '65921621816****',
                    ],
                ],
                [
                    'name' => 'IsvCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'Isv校验码，用于校验子帐号是否由ISV授权',
                        'description' => 'ISV校验码，用于校验子账号是否由ISV授权。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'skdi3kksloslikdkkdk',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '293483938849493',
                    ],
                ],
                [
                    'name' => 'AllowCategoryChange',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '是否允许facebook自动变更模板的目录（这样能提高模板的审核通过率）此属性只对TemplateType=WHATSAPP有效',
                        'description' => '是否允许facebook自动变更模板的目录（这样能提高模板的审核通过率）此属性只对TemplateType=WHATSAPP有效。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'MessageSendTtlSeconds',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'Whatsapp中Authentication模板消息发送时的有效期',
                        'description' => 'Whatsapp中Authentication模板消息发送时的有效期'."\n"
                            ."\n"
                            .'> 此属性需要提前提供waba给阿里运营人员开白名单，不然会导致模板送审失败',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '600',
                        'minimum' => '60',
                        'example' => '120',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A94866411B2D',
                            ],
                            'Code' => [
                                'title' => '返回结果 OK 为正常',
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](https://www.alibabacloud.com/help/zh/cams/latest/api-error-codes)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '提示信息，当返回异常时有值',
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => 'User not authorized to operate on the specified resource.',
                            ],
                            'Data' => [
                                'description' => '返回数据。'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'TemplateCode' => [
                                        'title' => '模板Code',
                                        'description' => '模板Code。',
                                        'type' => 'string',
                                        'example' => 'SMS_232907****',
                                    ],
                                    'TemplateName' => [
                                        'title' => '模板名称',
                                        'description' => '模板名称。',
                                        'type' => 'string',
                                        'example' => 'hello_whatsapp',
                                    ],
                                ],
                                'example' => '{"templateCode": "****4b5c79c9432497a075bdfca36bf5"，"templateName": "hello_whatsapp"}',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A94866411B2D\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"User not authorized to operate on the specified resource.\\",\\n  \\"Data\\": {\\n    \\"TemplateCode\\": \\"SMS_232907****\\",\\n    \\"TemplateName\\": \\"hello_whatsapp\\"\\n  },\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateChatappTemplateResponse>\\n    <RequestId>90E63D28-E31D-1EB2-8939-A9486641****</RequestId>\\n    <Code>OK</Code>\\n    <Message>无</Message>\\n    <Data>{\\"templateCode\\": \\"****4b5c79c9432497a075bdfca36bf5\\"，\\"templateName\\": \\"hello_whatsapp\\"}</Data>\\n</CreateChatappTemplateResponse>","errorExample":""}]',
            'title' => '创建ChatApp模板',
            'description' => '### QPS限制'."\n"
                .'本接口的单用户QPS限制为50次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'ModifyChatappTemplate' => [
            'summary' => '修改消息模板。只能修改未审核以及审核不通过的模板。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '155029',
                'abilityTreeNodes' => [
                    'FEATUREcamsDKDS4Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Components',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '消息模板组件列表。'."\n"
                            ."\n"
                            .'> 在Category为AUTHENTICATION时，Components不允许出现Type为HEADER的节点，并且Type为BODY/FOOTER时，Text内容为空，会自动生成内容。',
                        'type' => 'array',
                        'items' => [
                            'description' => '消息模板组件。',
                            'type' => 'object',
                            'properties' => [
                                'Type' => [
                                    'title' => '组件类型'."\n"
                                        .'值：BODY、HEADER、FOOTER 和 BUTTONS',
                                    'description' => '组件类型。'."\n"
                                        ."\n"
                                        .'- **BODY**'."\n"
                                        ."\n"
                                        .'- **HEADER**'."\n"
                                        ."\n"
                                        .'- **FOOTER**'."\n"
                                        ."\n"
                                        .' - **BUTTONS**'."\n"
                                        ."\n"
                                        .'- **CAROUSEL**'."\n"
                                        ."\n"
                                        .'- **LIMITED_TIME_OFFER**'."\n"
                                        ."\n"
                                        .'> - Whatsapp类型模板时，**BODY**组件的字符长度不超度是1024个字符。**HEADER**和**FOOTER**组件的字符长度不超过60个字符。'."\n"
                                        .'> - Viber类型模板时，**FOOTER**，**CAROUSEL**，**LIMITED_TIME_OFFER** 类型无效。'."\n"
                                        .'> - Viber类型模板中，图片、视频、文件都是放在**HEADER**中（终端将图片显示在文本之下）。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'BODY',
                                ],
                                'Text' => [
                                    'title' => '所发送消息的文本',
                                    'description' => '所发送消息的文本。'."\n"
                                        ."\n"
                                        .'> 在Category=AUTHENTICATION中，此属性值为空。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'hello chatapp',
                                ],
                                'Format' => [
                                    'title' => '格式'."\n"
                                        .'TEXT-文本 IMGAGE-图片 DOCUMENT-文档 VIDEO-视频',
                                    'description' => '媒体资源类型。'."\n"
                                        ."\n"
                                        .'- **TEXT**: 文本 '."\n"
                                        ."\n"
                                        .'- **IMAGE**: 图片 '."\n"
                                        ."\n"
                                        .'- **DOCUMENT**: 文档 '."\n"
                                        ."\n"
                                        .'- **VIDEO**: 视频',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TEXT',
                                ],
                                'Url' => [
                                    'title' => '素材路径',
                                    'description' => '素材路径。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'https://img.tukuppt.com/png_preview/00/10/24/1GygxVK3F4.jpg',
                                ],
                                'Caption' => [
                                    'title' => '描述，当Type为Header，且Format为IMGAGE/DOCUMENT/VIDEO 可以增加描述',
                                    'description' => '描述。'."\n"
                                        .'> 当Type为**HEADER**，且Format为**IMAGE/DOCUMENT/VIDEO**时可以增加描述。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '这是一个视频',
                                ],
                                'FileName' => [
                                    'title' => '文件名称，当Type为Header，且Format为DOCUMENT时可以给文件指定名称',
                                    'description' => '文件名称。'."\n"
                                        .'> 当Type为**HEADER**，且Format为**DOCUMENT**时为文件指定文件名称。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '视频',
                                ],
                                'Buttons' => [
                                    'title' => '按钮',
                                    'description' => '按钮列表，仅适用于**BUTTONS**组件。'."\n"
                                        ."\n"
                                        .'> Whatsapp按钮数量说明'."\n"
                                        .'> - Whatsapp在类型为MARKETING/UTILITY时，最多允许10个按钮'."\n"
                                        .'> - PHONE_NUMBER类型的按钮只允许存在1个'."\n"
                                        .'> - URL类型的按钮最多允许存在2个'."\n"
                                        .'> - QUICK_REPLY按钮不允许和PHONE_NUMBER/URL按钮乱序出现',
                                    'type' => 'array',
                                    'items' => [
                                        'title' => '素材路径',
                                        'description' => '按钮定义。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Type' => [
                                                'title' => '按钮类型'."\n"
                                                    .'PHONE_NUMBER（电话）,URL（网页按钮）和QUICK_REPLY（快速回复）',
                                                'description' => '按钮类型。'."\n"
                                                    ."\n"
                                                    .'- **PHONE_NUMBER**：拨打电话按钮'."\n"
                                                    ."\n"
                                                    .'- **URL**：网页按钮'."\n"
                                                    ."\n"
                                                    .'- **QUICK_REPLY**：快速回复按钮'."\n"
                                                    ."\n"
                                                    .'- **COPY_CODE**：复制验证码、优惠码'."\n"
                                                    ."\n"
                                                    .'- **ONE_TAP**：AUTHENTICATION模板时回填按钮'."\n"
                                                    ."\n"
                                                    .'> - Whatsapp类型模板且Category为AUTHENTICATION时，按钮只允许存在一个，并且类型只能是COPY_CODE/ONE_TAP, 当类型选择COPY_CODE时，Text为必填。当类型选择ONE_TAP时，Text（在终端没有装目标应用时显示，表示采用复制验证码按钮的名称）必填，SignatureHash, PackageName, AutofillText属性必填。'."\n"
                                                    .'> - Viber类型的模板只允许一个Button且只能是URL类型。',
                                                'type' => 'string',
                                                'required' => true,
                                                'example' => 'PHONE_NUMBER',
                                            ],
                                            'Text' => [
                                                'title' => '所发送消息的文本',
                                                'description' => '按钮文本。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'phone-button-text',
                                            ],
                                            'PhoneNumber' => [
                                                'title' => '号码',
                                                'description' => '号码。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '+8613888887889',
                                            ],
                                            'Url' => [
                                                'title' => '点击按钮后将访问的网址',
                                                'description' => '点击按钮后将访问的网址。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'https://www.website.com/',
                                            ],
                                            'UrlType' => [
                                                'title' => '网址类型 static-静态dynamic-动态',
                                                'description' => '网址类型。'."\n"
                                                    ."\n"
                                                    .'- **static**：静态'."\n"
                                                    ."\n"
                                                    .'- **dynamic**：动态',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'dynamic',
                                            ],
                                            'SignatureHash' => [
                                                'title' => 'Whatsapp模板，Category为Authentication，并且Button Type为ONE_TAP时必填，表示Whatsapp调起应用的签名Hash值',
                                                'description' => '请使用SupportedApps'."\n"
                                                    ."\n"
                                                    .'Whatsapp模板，Category为AUTHENTICATION且Button Type为ONE_TAP/ZERO_TAP时必填，表示Whatsapp调起应用的签名Hash值。',
                                                'type' => 'string',
                                                'deprecated' => true,
                                                'required' => false,
                                                'example' => '29dkeke',
                                            ],
                                            'PackageName' => [
                                                'title' => 'Whatsapp模板，Category为Authentication，并且Button Type为ONE_TAP时必填，表示Whatsapp调起应用的包名',
                                                'description' => '请使用SupportedApps'."\n"
                                                    ."\n"
                                                    .'Whatsapp模板，Category为AUTHENTICATION且Button Type为ONE_TAP/ZERO_TAP时必填，表示Whatsapp调起应用的包名。',
                                                'type' => 'string',
                                                'deprecated' => true,
                                                'required' => false,
                                                'example' => 'com.demo',
                                            ],
                                            'AutofillText' => [
                                                'title' => 'Whatsapp模板，Category为Authentication，并且Button Type为ONE_TAP时必填，Whatsap Autofill操作的按钮文本',
                                                'description' => 'Whatsapp模板，Category为AUTHENTICATION且Button Type为ONE_TAP/ZERO_TAP时必填，Whatsap Autofill操作的按钮文本。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'Autofill',
                                            ],
                                            'IsOptOut' => [
                                                'title' => 'Whatsapp模板，在Category为Marketing,并且Button type为QUICK_REPLY时有效，表示按钮为营销退订按钮，客户如果点击了此按钮，并且在chatapp平台上配置了发送控制操作，则后续Marketing消息则不会发送到客户',
                                                'description' => 'Whatsapp模板，在Category为Marketing且Button type为QUICK_REPLY时有效，表示按钮为营销退订按钮，客户如果点击了此按钮，并且在ChatApp已配置发送控制操作，则后续Marketing消息则不会发送到客户。',
                                                'type' => 'boolean',
                                                'required' => false,
                                                'example' => 'false',
                                            ],
                                            'CouponCode' => [
                                                'title' => '优惠券码',
                                                'description' => '优惠码值，只支持字母+数字，可以传入变量如$(couponCode)，在发送时再传入优惠码',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '120293',
                                            ],
                                            'FlowId' => [
                                                'title' => 'Flow id',
                                                'description' => 'Flow ID。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '664597077870605',
                                            ],
                                            'FlowAction' => [
                                                'title' => 'flow 数据事件类型'."\n"
                                                    .'取值范围：NAVIGATE/DATA_EXCHANGE',
                                                'description' => 'flow 数据事件类型',
                                                'type' => 'string',
                                                'required' => false,
                                                'enumValueTitles' => [
                                                    'DATA_EXCHANGE' => 'DATA_EXCHANGE',
                                                    'NAVIGATE' => 'NAVIGATE',
                                                ],
                                                'example' => 'NAVIGATE',
                                            ],
                                            'NavigateScreen' => [
                                                'title' => '跳转屏 '."\n"
                                                    .'在FlowAction=NAVIGATE时必填',
                                                'description' => '跳转屏 '."\n"
                                                    .'在FlowAction=NAVIGATE时必填',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'DETAILS',
                                            ],
                                            'SupportedApps' => [
                                                'title' => '验证码ONE_TAP/ZERO_TAP支持的应用',
                                                'description' => '支持的app列表',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '支持的app列表',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'SignatureHash' => [
                                                            'title' => '包签名hash',
                                                            'description' => 'Whatsapp模板，Category为AUTHENTICATION且Button Type为ONE_TAP/ZERO_TAP时必填，表示Whatsapp调起应用的签名Hash值。',
                                                            'type' => 'string',
                                                            'required' => false,
                                                            'example' => 'fk39kd93ks9',
                                                        ],
                                                        'PackageName' => [
                                                            'title' => '包名',
                                                            'description' => 'Whatsapp模板，Category为AUTHENTICATION且Button Type为ONE_TAP/ZERO_TAP时必填，表示Whatsapp调起应用的包名。',
                                                            'type' => 'string',
                                                            'required' => false,
                                                            'example' => 'com.example.myapplication',
                                                        ],
                                                    ],
                                                    'required' => false,
                                                ],
                                                'required' => false,
                                                'maxItems' => 5,
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'required' => false,
                                ],
                                'ThumbUrl' => [
                                    'title' => 'Viber带视频消息的缩略图',
                                    'description' => 'Viber带视频消息的缩略图。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'https://cdn.multiplymall.mobiapp.cloud/cloudcode/yc-165407506207478-165511576113195/20220905/ec5b9737-1507-4208-bb27-8da3958da961.jpg?x-oss-process=image/resize,w_100',
                                ],
                                'Duration' => [
                                    'title' => 'Viber视频消息的视频时长，取值范围 0 - 600',
                                    'description' => 'Viber视频消息的视频时长，取值范围：0~600。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '120',
                                ],
                                'FileType' => [
                                    'title' => 'Viber文件消息的文件类型',
                                    'description' => 'Viber文件消息的文件类型。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'docx',
                                ],
                                'CodeExpirationMinutes' => [
                                    'title' => 'Whatsapp Authentication模板验证码有效期（分钟），只在Whatsapp类型消息，Category为Authentication并且Component Type为Footer时有效（此信息显示在Footer位置）',
                                    'description' => 'Whatsapp AUTHENTICATION模板验证码有效期（分钟），只在Whatsapp类型消息，Category为AUTHENTICATION并且Component Type为Footer时有效（此信息显示在Footer位置）。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'maximum' => '90',
                                    'minimum' => '1',
                                    'example' => '5',
                                ],
                                'AddSecretRecommendation' => [
                                    'title' => 'Whatsapp类型模板，Category为Authentication，并且Component Type为Body时有效，表示在Body上面显示不要将验证码信息提供给其它人的提示信息',
                                    'description' => 'Whatsapp类型模板，Category为AUTHENTICATION且Component Type为Body时有效，表示在Body上面显示不要将验证码信息提供给其它人的提示信息。',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'false',
                                ],
                                'HasExpiration' => [
                                    'title' => 'LTO模板中，是否有过期时间',
                                    'description' => '优惠码是否存在过期时间，在type = LIMITED_TIME_OFFER时使用。',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'true',
                                ],
                                'Cards' => [
                                    'description' => 'Carousel模板卡片列表',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => 'Carousel模板卡片列表。',
                                        'type' => 'object',
                                        'properties' => [
                                            'CardComponents' => [
                                                'title' => 'Carousel卡片中的控件列表',
                                                'description' => 'Carousel卡片中控件列表',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => 'Carousel卡片中控件列表。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Type' => [
                                                            'title' => '组件类型'."\n"
                                                                .'值：BODY、HEADER 和 BUTTONS',
                                                            'description' => '组件类型。取值：'."\n"
                                                                ."\n"
                                                                .'- **BODY**'."\n"
                                                                ."\n"
                                                                .'- **HEADER**'."\n"
                                                                ."\n"
                                                                .'- **BUTTONS**',
                                                            'type' => 'string',
                                                            'required' => true,
                                                            'example' => 'BODY',
                                                        ],
                                                        'Format' => [
                                                            'title' => 'Carousel模板中Header的类型，只支持IMAGE/VIDEO，所有卡片的Header必须一致'."\n"
                                                                .'格式'."\n"
                                                                .' IMGAGE-图片 VIDEO-视频',
                                                            'description' => '媒体资源类型，在Type = HEADER时有效'."\n"
                                                                ."\n"
                                                                .'- **IMAGE**: 图片 '."\n"
                                                                ."\n"
                                                                .'- **VIDEO**: 视频',
                                                            'type' => 'string',
                                                            'required' => false,
                                                            'example' => 'IMAGE',
                                                        ],
                                                        'Text' => [
                                                            'title' => 'Carousel轮播卡片中Body的内容',
                                                            'description' => 'Carousel 卡片中BODY的内容',
                                                            'type' => 'string',
                                                            'required' => false,
                                                            'example' => 'Who is the very powerful team',
                                                        ],
                                                        'Url' => [
                                                            'title' => 'Header，图片或视频的路径',
                                                            'description' => '素材路径。',
                                                            'type' => 'string',
                                                            'required' => false,
                                                            'example' => 'https://alibaba.com/img.png'."\n",
                                                        ],
                                                        'Buttons' => [
                                                            'title' => 'Carousel卡片中的按钮，所有卡片中的按钮类型、名称、顺序必须一致,每个卡片最多有2个按钮',
                                                            'description' => '按钮列表，仅适用于BUTTONS组件。Carousel每个卡片最多只能有两个按钮。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '按钮对象。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Text' => [
                                                                        'title' => '按钮内容',
                                                                        'description' => '按钮文本。',
                                                                        'type' => 'string',
                                                                        'required' => false,
                                                                        'example' => 'Call me',
                                                                    ],
                                                                    'Type' => [
                                                                        'title' => 'Carousel模板的按钮类型'."\n"
                                                                            .'取值：URL/PHONE_NUMBER/QUICK_REQLY',
                                                                        'description' => '按钮类型。'."\n"
                                                                            ."\n"
                                                                            .'- **PHONE_NUMBER**：拨打电话按钮'."\n"
                                                                            ."\n"
                                                                            .'- **URL**：网页按钮'."\n"
                                                                            ."\n"
                                                                            .'- **QUICK_REPLY**：快速回复按钮',
                                                                        'type' => 'string',
                                                                        'required' => true,
                                                                        'example' => 'PHONE_NUMBER',
                                                                    ],
                                                                    'Url' => [
                                                                        'title' => '点击按钮后将访问的网址',
                                                                        'description' => '点击按钮后将访问的网址。',
                                                                        'type' => 'string',
                                                                        'required' => false,
                                                                        'example' => 'https://alibaba.com/xx'."\n",
                                                                    ],
                                                                    'UrlType' => [
                                                                        'title' => '网址类型 static-静态dynamic-动态',
                                                                        'description' => '网址类型。'."\n"
                                                                            ."\n"
                                                                            .'- **static**：静态'."\n"
                                                                            ."\n"
                                                                            .'- **dynamic**：动态',
                                                                        'type' => 'string',
                                                                        'required' => false,
                                                                        'example' => 'static',
                                                                    ],
                                                                    'PhoneNumber' => [
                                                                        'title' => '号码',
                                                                        'description' => '电话号码。',
                                                                        'type' => 'string',
                                                                        'required' => false,
                                                                        'example' => '+8613800'."\n",
                                                                    ],
                                                                ],
                                                                'required' => false,
                                                            ],
                                                            'required' => false,
                                                        ],
                                                    ],
                                                    'required' => false,
                                                ],
                                                'required' => true,
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'required' => false,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Language',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '语言',
                        'description' => '模板语言。 详细语言代码，请参见[语言代码](~~463420~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'en',
                    ],
                ],
                [
                    'name' => 'Example',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '变量，KEY-VALUE结构',
                        'description' => '创建模板的示例。',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                            'example' => '{"textVariable":"text"}'."\n",
                            'description' => '变量例子。通过把JSON结构转成String的方式传入。',
                        ],
                    ],
                ],
                [
                    'name' => 'CustWabaId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV客户WabaId, 后续会被弃用，请使用CustSpaceId',
                        'description' => 'ISV客户WabaId。'."\n"
                            ."\n"
                            .'> 过时的参数，请使用CustSpaceId。',
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                        'example' => '659216218162179',
                    ],
                ],
                [
                    'name' => 'IsvCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'Isv校验码，用于校验子帐号是否由ISV授权',
                        'description' => 'Isv校验码，用于校验子账号是否由ISV授权。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ksiekdki39ksks93939',
                    ],
                ],
                [
                    'name' => 'TemplateCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '消息模板编码',
                        'description' => '消息模板编码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '8472929283883',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '28251486512358****',
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'Viber修改模板时，可以修改模板Category(Whatsapp修改时此参数无效）',
                        'description' => 'Viber模板分类'."\n"
                            .'- **text**：纯文本'."\n"
                            ."\n"
                            .'- **image**：纯图片'."\n"
                            ."\n"
                            .'- **text\\_image_button**：文本 + 图片 + 按钮'."\n"
                            ."\n"
                            .'- **text_button**：文本 + 按钮'."\n"
                            ."\n"
                            .'- **document**： 文件'."\n"
                            ."\n"
                            .'- **video**：视频'."\n"
                            ."\n"
                            .'- **text_video**：文本 + 视频'."\n"
                            ."\n"
                            .'- **text\\_video_button**：文本 + 视频 + 按钮'."\n"
                            ."\n"
                            .'- **text_image**：文本 + 图片'."\n"
                            ."\n"
                            .'> 此属性只对Viber类型模板有效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'text',
                    ],
                ],
                [
                    'name' => 'TemplateType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '修改模板的模板类型，取值为WHATSAPP/VIBER， 当未传递此值时，默认值为WHATSAPP',
                        'description' => '模板类型。'."\n"
                            ."\n"
                            .'- **WHATSAPP**'."\n"
                            ."\n"
                            .'- **VIBER**'."\n"
                            ."\n"
                            .'- LINE（开发中）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'WHATSAPP',
                    ],
                ],
                [
                    'name' => 'MessageSendTtlSeconds',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'Whatsapp中Authentication模板消息发送有效期',
                        'description' => 'Whatsapp中Authentication模板消息发送有效期'."\n"
                            ."\n"
                            .'> 此属性需要提前提供waba给阿里运营人员开白名单，不然会导致模板送审失败',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '600',
                        'minimum' => '60',
                        'example' => '120',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '模板名称',
                        'description' => '模板名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A9486641****',
                            ],
                            'Code' => [
                                'title' => '返回结果 OK 为正常',
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '提示信息，当返回异常时有值',
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'description' => '返回数据。'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'TemplateCode' => [
                                        'title' => '模板Code',
                                        'description' => '模板Code。',
                                        'type' => 'string',
                                        'example' => '8472929283883',
                                    ],
                                    'TemplateName' => [
                                        'title' => '模板名称',
                                        'description' => '模板名称。',
                                        'type' => 'string',
                                        'example' => 'hello_whatsapp',
                                    ],
                                ],
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A9486641****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": {\\n    \\"TemplateCode\\": \\"8472929283883\\",\\n    \\"TemplateName\\": \\"hello_whatsapp\\"\\n  },\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '修改ChatApp模板',
            'description' => '### QPS限制'."\n"
                .'本接口的单用户QPS限制为50次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'ListChatappTemplate' => [
            'summary' => '获取消息模板列表。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '129139',
                'abilityTreeNodes' => [
                    'FEATUREcamsDKDS4Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模板名称',
                        'description' => '模板名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'hello_whatsapp',
                    ],
                ],
                [
                    'name' => 'Language',
                    'in' => 'query',
                    'schema' => [
                        'title' => '语言',
                        'description' => '模板语言。 详细语言代码，请参见[语言代码](~~463420~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'en',
                    ],
                ],
                [
                    'name' => 'AuditStatus',
                    'in' => 'query',
                    'schema' => [
                        'title' => '审核状态',
                        'description' => '审核状态。取值：'."\n"
                            ."\n"
                            .'- **pass**：通过审核。'."\n"
                            ."\n"
                            .'- **fail**：拒绝审核。'."\n"
                            ."\n"
                            .'- **auditing**：审核中。'."\n"
                            ."\n"
                            .'- **unaudit**：审核暂停处理。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pass',
                    ],
                ],
                [
                    'name' => 'Page',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '分页字段。',
                        'type' => 'object',
                        'properties' => [
                            'Index' => [
                                'title' => '查询开始数',
                                'description' => '页码，默认为1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '1',
                                'default' => '1',
                            ],
                            'Size' => [
                                'title' => '每次查询返回的条数',
                                'description' => '每次查询模板数量，默认为10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '10',
                                'default' => '10',
                            ],
                        ],
                        'required' => false,
                        'example' => '"page": "{\\"index\\": 1,\\"size\\": 20}',
                    ],
                ],
                [
                    'name' => 'CustWabaId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ISV客户WabaId, 后续会被弃用，请使用CustSpaceId',
                        'description' => 'ISV客户WabaId'."\n"
                            ."\n"
                            .'> 过时的参数，请使用CustSpaceId',
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                        'example' => '65921621816****'."\n",
                    ],
                ],
                [
                    'name' => 'IsvCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Isv校验码，用于校验子帐号是否由ISV授权',
                        'description' => 'ISV校验码，用于校验子账号是否由ISV授权。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'skdi3kksloslikdkkdk',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '28251486512358****',
                    ],
                ],
                [
                    'name' => 'TemplateType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模板的模板类型，取值为WHATSAPP/VIBER， 当未传递此值时，默认值为WHATSAPP',
                        'description' => '模板类型。'."\n"
                            ."\n"
                            .'- **WHATSAPP**'."\n"
                            ."\n"
                            .'- **VIBER**'."\n"
                            ."\n"
                            .'- LINE（开发中）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'WHATSAPP',
                    ],
                ],
                [
                    'name' => 'Code',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模板编码',
                        'description' => '模板编码',
                        'type' => 'string',
                        'required' => false,
                        'example' => '838888822*****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A9486641****',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => 'User not authorized to operate on the specified resource.',
                            ],
                            'ListTemplate' => [
                                'title' => '模板列表',
                                'description' => '列表数据。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '模板列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'TemplateName' => [
                                            'title' => '模板名称',
                                            'description' => '模板名称。',
                                            'type' => 'string',
                                            'example' => 'hello_whatsapp',
                                        ],
                                        'TemplateCode' => [
                                            'title' => '模板编码',
                                            'description' => '模板编码。',
                                            'type' => 'string',
                                            'example' => '744c4b5c79c9432497a075bdfca3****',
                                        ],
                                        'AuditStatus' => [
                                            'title' => '审核状态',
                                            'description' => '审核状态。取值：'."\n"
                                                ."\n"
                                                .'- **pass**：通过审核。'."\n"
                                                ."\n"
                                                .'- **fail**：拒绝审核。'."\n"
                                                ."\n"
                                                .'- **auditing**：审核中。'."\n"
                                                ."\n"
                                                .'- **unaudit**：审核暂停处理。',
                                            'type' => 'string',
                                            'example' => 'pass',
                                        ],
                                        'Language' => [
                                            'title' => '语言',
                                            'description' => '模板语言。 详细语言代码，请参见[语言代码](~~463420~~)。',
                                            'type' => 'string',
                                            'example' => 'en',
                                        ],
                                        'Category' => [
                                            'title' => '模板分类',
                                            'description' => 'Whatsapp模板分类。取值：'."\n"
                                                ."\n"
                                                .'- **UTILITY**：交易相关。'."\n"
                                                ."\n"
                                                .'- **MARKETING**：营销性模板。'."\n"
                                                ."\n"
                                                .'- **AUTHENTICATION**：身份验证。'."\n"
                                                ."\n"
                                                .'Viber模板分类'."\n"
                                                .'- **text**：纯文本'."\n"
                                                ."\n"
                                                .'- **image**：纯图片'."\n"
                                                ."\n"
                                                .'- **text_image_button**：文本 + 图片 + 按钮'."\n"
                                                ."\n"
                                                .'- **text_button**：文本 + 按钮'."\n"
                                                ."\n"
                                                .'- **document**： 文件'."\n"
                                                ."\n"
                                                .'- **video**：视频'."\n"
                                                ."\n"
                                                .'- **text_video**：文本 + 视频'."\n"
                                                ."\n"
                                                .'- **text_video_button**：文本 + 视频 + 按钮'."\n"
                                                ."\n"
                                                .'- **text_image**：文本 + 图片',
                                            'type' => 'string',
                                            'example' => 'UTILITY',
                                        ],
                                        'TemplateType' => [
                                            'title' => '模板类型，取值为WHATSAPP/VIBER',
                                            'description' => '模板类型，取值为WHATSAPP/VIBER',
                                            'type' => 'string',
                                            'example' => 'WHATSAPP',
                                        ],
                                        'Reason' => [
                                            'title' => '模板审核被拒的原因',
                                            'description' => '模板审核被拒的原因',
                                            'type' => 'string',
                                            'example' => 'None',
                                        ],
                                    ],
                                ],
                            ],
                            'Total' => [
                                'description' => '总记录条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A9486641****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"User not authorized to operate on the specified resource.\\",\\n  \\"ListTemplate\\": [\\n    {\\n      \\"TemplateName\\": \\"hello_whatsapp\\",\\n      \\"TemplateCode\\": \\"744c4b5c79c9432497a075bdfca3****\\",\\n      \\"AuditStatus\\": \\"pass\\",\\n      \\"Language\\": \\"en\\",\\n      \\"Category\\": \\"UTILITY\\",\\n      \\"TemplateType\\": \\"WHATSAPP\\",\\n      \\"Reason\\": \\"None\\"\\n    }\\n  ],\\n  \\"Total\\": 1,\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","errorExample":""},{"type":"xml","example":"<ListChatappTemplateResponse>\\n    <RequestId>90E63D28-E31D-1EB2-8939-A9486641****</RequestId>\\n    <Code>OK</Code>\\n    <Message>无</Message>\\n    <ListTemplate>\\n        <TemplateName>hello_whatsapp</TemplateName>\\n        <TemplateCode>744c4b5c79c9432497a075bdfca3****</TemplateCode>\\n        <AuditStatus>APPROVED</AuditStatus>\\n        <Language>en</Language>\\n        <Category>ACCOUNT_UPDATE</Category>\\n    </ListTemplate>\\n</ListChatappTemplateResponse>","errorExample":""}]',
            'title' => '查询ChatApp模板列表',
            'description' => '### QPS限制'."\n"
                .'本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'GetChatappTemplateDetail' => [
            'summary' => '获取消息模板的详细信息。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '129127',
                'abilityTreeNodes' => [
                    'FEATUREcamsDKDS4Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'TemplateCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模板分类',
                        'description' => '模板Code。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '****4b5c79c9432497a075bdfca36bf5',
                    ],
                ],
                [
                    'name' => 'Language',
                    'in' => 'query',
                    'schema' => [
                        'title' => '语言',
                        'description' => '模板语言。 详细语言代码，请参见[语言代码](~~463420~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'en_US',
                    ],
                ],
                [
                    'name' => 'CustWabaId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ISV客户WabaId, 后续会被弃用，请使用CustSpaceId',
                        'description' => 'ISV客户WabaId。'."\n"
                            ."\n"
                            .'> 过时的参数，请使用CustSpaceId',
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                        'example' => '65921621816****'."\n",
                    ],
                ],
                [
                    'name' => 'IsvCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Isv校验码，用于校验子帐号是否由ISV授权',
                        'description' => 'ISV校验码，用于校验子账号是否由ISV授权。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'skdi3kksloslikdkkdk',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '28251486512358****',
                    ],
                ],
                [
                    'name' => 'TemplateType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模板的模板类型，取值为WHATSAPP/VIBER， 当未传递此值时，默认值为WHATSAPP',
                        'description' => '模板类型。'."\n"
                            ."\n"
                            .'- **WHATSAPP**'."\n"
                            ."\n"
                            .'- **VIBER**'."\n"
                            ."\n"
                            .'- LINE（开发中）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'WHATSAPP',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模板名称',
                        'description' => '模板名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '744c4b5c79c9432497a075bdfca3****',
                            ],
                            'Code' => [
                                'title' => '返回结果 OK 为正常',
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => 'User not authorized to operate on the specified resource.',
                            ],
                            'Data' => [
                                'title' => 'TemplateDetail',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Category' => [
                                        'title' => '模板分类',
                                        'description' => 'Whatsapp模板分类。取值：'."\n"
                                            ."\n"
                                            .'- **UTILITY**：交易相关。'."\n"
                                            ."\n"
                                            .'- **MARKETING**：营销性模板。'."\n"
                                            ."\n"
                                            .'- **AUTHENTICATION**：身份验证。'."\n"
                                            ."\n"
                                            .'Viber模板分类'."\n"
                                            .'- **text**：纯文本'."\n"
                                            ."\n"
                                            .'- **image**：纯图片'."\n"
                                            ."\n"
                                            .'- **text\\_image_button**：文本 + 图片 + 按钮'."\n"
                                            ."\n"
                                            .'- **text_button**：文本 + 按钮'."\n"
                                            ."\n"
                                            .'- **document**： 文件'."\n"
                                            ."\n"
                                            .'- **video**：视频'."\n"
                                            ."\n"
                                            .'- **text_video**：文本 + 视频'."\n"
                                            ."\n"
                                            .'- **text\\_video_button**：文本 + 视频 + 按钮'."\n"
                                            ."\n"
                                            .'- **text_image**：文本 + 图片'."\n"
                                            ."\n"
                                            .'> 当Viber模板取值为text_video_button时，按钮并不能打开网页，只是在网页中打开当前消息的视频，所以按钮的URL中不需要填写任何地址信息',
                                        'type' => 'string',
                                        'example' => 'UTILITY',
                                    ],
                                    'TemplateCode' => [
                                        'title' => '模板编码',
                                        'description' => '模板Code。',
                                        'type' => 'string',
                                        'example' => '744c4b5c79c9432497a075bdfca3****',
                                    ],
                                    'Name' => [
                                        'title' => '模板名称',
                                        'description' => '模板名称。',
                                        'type' => 'string',
                                        'example' => 'hello_whatsapp',
                                    ],
                                    'Language' => [
                                        'title' => '语言',
                                        'description' => '模板语言。 详细语言代码，请参见[语言代码](~~463420~~)。',
                                        'type' => 'string',
                                        'example' => 'en_US',
                                    ],
                                    'Example' => [
                                        'title' => '变量例子',
                                        'description' => '变量举例。',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                            'description' => '模板变量对应的实际值，参数格式为JSON格式。',
                                            'example' => '{\\"textVariable\\":\\"text\\",\\"linkVariable\\":\\"https://image.developer.aliy\\"}',
                                        ],
                                    ],
                                    'AuditStatus' => [
                                        'title' => '审核状态',
                                        'description' => '审核状态。取值：'."\n"
                                            ."\n"
                                            .'- **pass**：通过审核。'."\n"
                                            ."\n"
                                            .'- **fail**：拒绝审核。'."\n"
                                            ."\n"
                                            .'- **auditing**：审核中。'."\n"
                                            ."\n"
                                            .'- **unaudit**：审核暂停处理。',
                                        'type' => 'string',
                                        'example' => 'pass',
                                    ],
                                    'Components' => [
                                        'title' => '消息模板组件',
                                        'description' => '消息模板组件列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '消息模板组件。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Type' => [
                                                    'title' => '组件类型',
                                                    'description' => '组件类型。'."\n"
                                                        ."\n"
                                                        .'- **BODY**'."\n"
                                                        ."\n"
                                                        .'- **HEADER**'."\n"
                                                        ."\n"
                                                        .'- **FOOTER**'."\n"
                                                        ."\n"
                                                        .' - **BUTTONS**'."\n"
                                                        ."\n"
                                                        .'- **CAROUSEL**'."\n"
                                                        ."\n"
                                                        .'- **LIMITED_TIME_OFFER**'."\n"
                                                        ."\n"
                                                        .'> - Whatsapp类型模板时，**BODY**组件的字符长度不超度是1024个字符。**HEADER**和**FOOTER**组件的字符长度不超过60个字符。'."\n"
                                                        .'> - Viber类型模板时，**FOOTER**，**CAROUSEL**，**LIMITED_TIME_OFFER** 类型无效。'."\n"
                                                        .'> - Viber类型模板中，图片、视频、文件都是放在**HEADER**中（终端将图片显示在文本之下）。',
                                                    'type' => 'string',
                                                    'example' => 'BODY',
                                                ],
                                                'Url' => [
                                                    'title' => '素材路径',
                                                    'description' => '素材路径。',
                                                    'type' => 'string',
                                                    'example' => 'https://image.developer.aliyundoc.com',
                                                ],
                                                'Text' => [
                                                    'title' => '所发送消息的文本',
                                                    'description' => '发送消息的文本。',
                                                    'type' => 'string',
                                                    'example' => '你好',
                                                ],
                                                'Caption' => [
                                                    'title' => '描述，当Type为Header，且Format为IMGAGE/DOCUMENT/VIDEO 可以增加描述',
                                                    'description' => '文件的描述。',
                                                    'type' => 'string',
                                                    'example' => '新文件已上传',
                                                ],
                                                'FileName' => [
                                                    'title' => '文件名称，当Type为Header，且Format为DOCUMENT时可以给文件指定名称',
                                                    'description' => '文件的名称。',
                                                    'type' => 'string',
                                                    'example' => '快递文件',
                                                ],
                                                'Format' => [
                                                    'title' => '格式',
                                                    'description' => '格式。',
                                                    'type' => 'string',
                                                    'example' => 'TEXT',
                                                ],
                                                'Buttons' => [
                                                    'title' => '仅适用于 BUTTONS 类型。'."\n"
                                                        .'与按钮相关的参数。',
                                                    'description' => '按钮列表，仅适用于**BUTTONS**组件。'."\n"
                                                        ."\n"
                                                        .'> Whatsapp按钮数量说明'."\n"
                                                        .'> - Whatsapp在类型为MARKETING/UTILITY时，最多允许10个按钮'."\n"
                                                        .'> - PHONE_NUMBER类型的按钮只允许存在1个'."\n"
                                                        .'> - URL类型的按钮最多允许存在2个'."\n"
                                                        .'> - QUICK_REPLY按钮不允许和PHONE_NUMBER/URL按钮乱序出现',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '组件列表。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Type' => [
                                                                'title' => '按钮类型',
                                                                'description' => '按钮类型。'."\n"
                                                                    ."\n"
                                                                    .'- **PHONE_NUMBER**：拨打电话按钮'."\n"
                                                                    ."\n"
                                                                    .'- **URL**：网页按钮'."\n"
                                                                    ."\n"
                                                                    .'- **QUICK_REPLY**：快速回复按钮'."\n"
                                                                    ."\n"
                                                                    .'- **COPY_CODE**：复制验证码、优惠码'."\n"
                                                                    ."\n"
                                                                    .'- **ONE_TAP**：AUTHENTICATION模板时回填按钮'."\n"
                                                                    ."\n"
                                                                    .'> - Whatsapp类型模板且Category为AUTHENTICATION时，按钮只允许存在一个，并且类型只能是COPY_CODE/ONE_TAP, 当类型选择COPY_CODE时，Text为必填。当类型选择ONE_TAP时，Text（在终端没有装目标应用时显示，表示采用复制验证码按钮的名称）必填，SignatureHash, PackageName, AutofillText属性必填。'."\n"
                                                                    .'> - Viber类型的模板只允许一个Button且只能是URL类型。',
                                                                'type' => 'string',
                                                                'example' => 'PHONE_NUMBER',
                                                            ],
                                                            'Text' => [
                                                                'title' => '所发送消息的文本',
                                                                'description' => '按钮显示的名称。',
                                                                'type' => 'string',
                                                                'example' => '打电话',
                                                            ],
                                                            'PhoneNumber' => [
                                                                'title' => '电话号码',
                                                                'description' => '电话号码，仅按钮类型为**PHONE_NUMBER**时有效。',
                                                                'type' => 'string',
                                                                'example' => '861398745****',
                                                            ],
                                                            'Url' => [
                                                                'title' => '当按钮类型是'."\n"
                                                                    .'URL 时有效',
                                                                'description' => '点击链接按钮将访问的网址。',
                                                                'type' => 'string',
                                                                'example' => 'https://example.com'."\n",
                                                            ],
                                                            'UrlType' => [
                                                                'title' => 'WEB地址类型'."\n"
                                                                    .'static-静态'."\n"
                                                                    .'dynamic-动态',
                                                                'description' => '网址类型。'."\n"
                                                                    ."\n"
                                                                    .'- **static**：静态'."\n"
                                                                    ."\n"
                                                                    .'- **dynamic**：动态',
                                                                'type' => 'string',
                                                                'example' => 'static',
                                                            ],
                                                            'SignatureHash' => [
                                                                'title' => 'Whatsapp模板，Category为Authentication，并且Button Type为ONE_TAP时必填，表示Whatsapp调起应用的签名Hash值',
                                                                'description' => 'Whatsapp模板，Category为Authentication，并且Button Type为ONE_TAP时必填，表示Whatsapp调起应用的签名Hash值。',
                                                                'type' => 'string',
                                                                'example' => '2993839',
                                                            ],
                                                            'PackageName' => [
                                                                'title' => 'Whatsapp模板，Category为Authentication，并且Button Type为ONE_TAP时必填，表示Whatsapp调起应用的包名',
                                                                'description' => 'Whatsapp模板，Category为Authentication，并且Button Type为ONE_TAP时必填，表示Whatsapp调起应用的包名。',
                                                                'type' => 'string',
                                                                'example' => 'com.aliyun',
                                                            ],
                                                            'AutofillText' => [
                                                                'title' => 'Whatsapp模板，Category为Authentication，并且Button Type为ONE_TAP时必填，Whatsap Autofill操作的按钮文本',
                                                                'description' => 'Whatsapp模板，Category为Authentication，并且Button Type为ONE_TAP时必填，Whatsap Autofill操作的按钮文本。',
                                                                'type' => 'string',
                                                                'example' => 'Autofill',
                                                            ],
                                                            'IsOptOut' => [
                                                                'title' => 'Whatsapp模板，在Category为Marketing,并且Button type为QUICK_REPLY时有效，表示按钮为营销退订按钮，客户如果点击了此按钮，并且在chatapp平台上配置了发送控制操作，则后续Marketing消息则不会发送到客户',
                                                                'description' => 'Whatsapp模板，在Category为Marketing,并且Button type为QUICK_REPLY时有效，表示按钮为营销退订按钮，客户如果点击了此按钮，并且在chatapp平台上配置了发送控制操作，则后续Marketing消息则不会发送到客户。',
                                                                'type' => 'boolean',
                                                                'example' => 'false',
                                                            ],
                                                            'ExtendAttrs' => [
                                                                'title' => '扩展字段',
                                                                'description' => '扩展字段。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'NextTemplateCode' => [
                                                                        'title' => '下一个模板编码',
                                                                        'description' => '下一个模板编码。',
                                                                        'type' => 'string',
                                                                        'example' => '20939920093993',
                                                                    ],
                                                                    'NextTemplateName' => [
                                                                        'title' => '下一个模板名称',
                                                                        'description' => '下一个模板名称。',
                                                                        'type' => 'string',
                                                                        'example' => 'abc',
                                                                    ],
                                                                    'NextLanguageCode' => [
                                                                        'title' => '下一个模板语言',
                                                                        'description' => '下一个模板语言。',
                                                                        'type' => 'string',
                                                                        'example' => 'en',
                                                                    ],
                                                                    'Action' => [
                                                                        'title' => '事件类型',
                                                                        'description' => '事件类型。',
                                                                        'type' => 'string',
                                                                        'example' => 'nextCard',
                                                                    ],
                                                                    'IntentCode' => [
                                                                        'title' => '意图编码',
                                                                        'description' => '意图编码。',
                                                                        'type' => 'string',
                                                                        'example' => 'test',
                                                                    ],
                                                                ],
                                                            ],
                                                            'CouponCode' => [
                                                                'title' => '优惠券码',
                                                                'description' => '优惠券码',
                                                                'type' => 'string',
                                                                'example' => '202039ksjs',
                                                            ],
                                                            'FlowId' => [
                                                                'title' => 'Flow ID',
                                                                'description' => 'Flow ID',
                                                                'type' => 'string',
                                                                'example' => '3838292983',
                                                            ],
                                                            'FlowAction' => [
                                                                'title' => 'flow 数据事件类型'."\n"
                                                                    .'取值范围：NAVIGATE/DATA_EXCHANGE',
                                                                'description' => 'flow 数据事件类型'."\n"
                                                                    .'取值范围：NAVIGATE/DATA_EXCHANGE',
                                                                'type' => 'string',
                                                                'example' => 'NAVIGATE',
                                                            ],
                                                            'NavigateScreen' => [
                                                                'title' => '跳转屏 '."\n"
                                                                    .'在FlowAction=NAVIGATE时必填',
                                                                'description' => '跳转屏 '."\n"
                                                                    .'在FlowAction=NAVIGATE时必填',
                                                                'type' => 'string',
                                                                'example' => 'DETAILS',
                                                            ],
                                                            'SupportedApps' => [
                                                                'title' => '验证码ONE_TAP/ZERO_TAP支持的应用',
                                                                'description' => '验证码ONE_TAP/ZERO_TAP支持的应用',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'title' => '验证码ONE_TAP/ZERO_TAP支持的应用',
                                                                    'description' => '验证码ONE_TAP/ZERO_TAP支持的应用',
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'SignatureHash' => [
                                                                            'title' => '包签名hash',
                                                                            'description' => '包签名hash',
                                                                            'type' => 'string',
                                                                            'example' => '29kdkeik939',
                                                                        ],
                                                                        'PackageName' => [
                                                                            'title' => '包名',
                                                                            'description' => '包名',
                                                                            'type' => 'string',
                                                                            'example' => 'com.test',
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'ThumbUrl' => [
                                                    'title' => 'Viber带视频消息的缩略图',
                                                    'description' => 'Viber带视频消息的缩略图。',
                                                    'type' => 'string',
                                                    'example' => 'https://img.png',
                                                ],
                                                'Duration' => [
                                                    'title' => 'Viber视频消息的视频时长，取值范围 0 - 600',
                                                    'description' => 'Viber视频消息的视频时长，取值范围：0~600',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '50',
                                                ],
                                                'FileType' => [
                                                    'title' => 'Viber文件消息的文件类型',
                                                    'description' => 'Viber文件消息的文件类型。',
                                                    'type' => 'string',
                                                    'example' => 'docx',
                                                ],
                                                'Latitude' => [
                                                    'title' => '位置纬度属性',
                                                    'description' => '位置纬度属性。',
                                                    'type' => 'string',
                                                    'example' => '28.001',
                                                ],
                                                'Longitude' => [
                                                    'title' => '位置经度属性',
                                                    'description' => '位置经度属性。',
                                                    'type' => 'string',
                                                    'example' => '120.002',
                                                ],
                                                'LocationName' => [
                                                    'title' => '位置名称',
                                                    'description' => '位置名称。',
                                                    'type' => 'string',
                                                    'example' => '杭州',
                                                ],
                                                'LocationAddress' => [
                                                    'title' => '位置地址',
                                                    'description' => '位置地址。',
                                                    'type' => 'string',
                                                    'example' => '杭州',
                                                ],
                                                'AddSecretRecommendation' => [
                                                    'title' => 'Whatsapp类型模板，Category为Authentication，并且Component Type为Body时有效，表示在Body上面显示不要将验证码信息提供给其它人的提示信息',
                                                    'description' => 'Whatsapp类型模板，Category为Authentication，并且Component Type为Body时有效，表示在Body上面显示不要将验证码信息提供给其它人的提示信息。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'CodeExpirationMinutes' => [
                                                    'title' => 'Whatsapp Authentication模板验证码有效期（分钟），只在Whatsapp类型消息，Category为Authentication并且Component Type为Footer时有效（此信息显示在Footer位置）',
                                                    'description' => 'Whatsapp Authentication模板验证码有效期（分钟），只在Whatsapp类型消息，Category为Authentication并且Component Type为Footer时有效（此信息显示在Footer位置）。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'maximum' => '90',
                                                    'minimum' => '1',
                                                    'example' => '5',
                                                ],
                                                'hasExpiration' => [
                                                    'title' => 'LTO模板中，优惠码是否有过期时间',
                                                    'description' => 'LTO模板中，优惠码是否有过期时间',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'OfferExpirationTimeMs' => [
                                                    'title' => 'LTO模板时，优惠码过期变量',
                                                    'description' => 'LTO模板时，优惠码过期变量',
                                                    'type' => 'string',
                                                    'example' => '$(offerExpirationTimeMs)',
                                                ],
                                                'Cards' => [
                                                    'title' => '轮播卡片列表',
                                                    'description' => '轮播卡片列表',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => 'Carousel模板卡片列表。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'CardComponents' => [
                                                                'title' => '卡片控件列表',
                                                                'description' => '卡片控件列表',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'description' => 'Carousel卡片中控件列表',
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'Type' => [
                                                                            'title' => '组件类型',
                                                                            'description' => '组件类型',
                                                                            'type' => 'string',
                                                                            'example' => 'HEADER',
                                                                        ],
                                                                        'Text' => [
                                                                            'title' => '卡片文本内容',
                                                                            'description' => '卡片文本内容',
                                                                            'type' => 'string',
                                                                            'example' => 'Body',
                                                                        ],
                                                                        'Url' => [
                                                                            'title' => '网页地址',
                                                                            'description' => '网页地址',
                                                                            'type' => 'string',
                                                                            'example' => 'https://aliyun.com',
                                                                        ],
                                                                        'Format' => [
                                                                            'title' => 'Carousel模板中Header的类型，只支持IMAGE/VIDEO，所有卡片的Header必须一致'."\n"
                                                                                .'格式'."\n"
                                                                                .' IMGAGE-图片 VIDEO-视频',
                                                                            'description' => 'Carousel模板中Header的类型，只支持IMAGE/VIDEO，所有卡片的Header必须一致'."\n"
                                                                                .'格式'."\n"
                                                                                .' IMGAGE-图片 VIDEO-视频',
                                                                            'type' => 'string',
                                                                            'example' => 'HEADER',
                                                                        ],
                                                                        'Buttons' => [
                                                                            'title' => '卡片按钮列表',
                                                                            'description' => '卡片按钮列表',
                                                                            'type' => 'array',
                                                                            'items' => [
                                                                                'description' => '按钮对象。',
                                                                                'type' => 'object',
                                                                                'properties' => [
                                                                                    'Type' => [
                                                                                        'title' => 'Carousel模板的按钮类型'."\n"
                                                                                            .'取值：URL/PHONE_NUMBER/QUICK_REQLY',
                                                                                        'description' => 'Carousel模板的按钮类型'."\n"
                                                                                            .'取值：URL/PHONE_NUMBER/QUICK_REQLY',
                                                                                        'type' => 'string',
                                                                                        'example' => 'URL',
                                                                                    ],
                                                                                    'Text' => [
                                                                                        'title' => '按钮内容',
                                                                                        'description' => '按钮内容',
                                                                                        'type' => 'string',
                                                                                        'example' => '按钮文本',
                                                                                    ],
                                                                                    'Url' => [
                                                                                        'title' => '点击按钮后将访问的网址',
                                                                                        'description' => '点击按钮后将访问的网址',
                                                                                        'type' => 'string',
                                                                                        'example' => 'https://aliyun.com',
                                                                                    ],
                                                                                    'UrlType' => [
                                                                                        'title' => '网址类型 static-静态dynamic-动态',
                                                                                        'description' => '网址类型 static-静态dynamic-动态',
                                                                                        'type' => 'string',
                                                                                        'example' => 'static',
                                                                                    ],
                                                                                    'PhoneNumber' => [
                                                                                        'title' => '号码',
                                                                                        'description' => '号码',
                                                                                        'type' => 'string',
                                                                                        'example' => '+86138000',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    'maxItems' => 10,
                                                    'minItems' => 0,
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TemplateType' => [
                                        'title' => '模板类型，取值为WHATSAPP/VIBER',
                                        'description' => '模板类型。'."\n"
                                            ."\n"
                                            .'- **WHATSAPP**'."\n"
                                            ."\n"
                                            .'- **VIBER**'."\n"
                                            ."\n"
                                            .'- LINE（开发中）',
                                        'type' => 'string',
                                        'example' => 'WHATSAPP',
                                    ],
                                    'QualityScore' => [
                                        'title' => '模板质量',
                                        'description' => '模板质量。',
                                        'type' => 'string',
                                        'example' => 'GREEN',
                                    ],
                                    'MessageSendTtlSeconds' => [
                                        'title' => 'Whatsapp中Authentication类型模板发送消息时的消息有效期',
                                        'description' => 'Whatsapp中Authentication类型模板发送消息时的消息有效期。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'maximum' => '600',
                                        'minimum' => '60',
                                        'example' => '120',
                                    ],
                                    'Reason' => [
                                        'title' => '模板审核审核被拒的原因',
                                        'description' => '模板审核被拒的原因。',
                                        'type' => 'string',
                                        'example' => 'None',
                                    ],
                                ],
                                'example' => '{ 		"category": "ACCOUNT_UPDATE", 		"name": "account_notice", 		"language": "en_US", 		"templateCode": "744c4b5c79c9432497a075bdfca3****", 		"auditStatus": "APPROVED", 		"components": "[{\\"type\\":\\"BODY\\",\\"text\\":\\"body_text$(textVariable)\\"},{\\"type\\":\\"HEADER\\",\\"formate\\":\\"IMAGE\\",\\"url\\":\\"$(linkVariable)\\"},{\\"type\\":\\"FOOTER\\",\\"text\\":\\"footer-text\\"},{\\"type\\":\\"BUTTONS\\",\\"buttons\\":[{\\"type\\":\\"PHONE_NUMBER\\",\\"text\\":\\"phone-button-text\\",\\"phone_number\\":\\"+861388888****\\"},{\\"type\\":\\"URL\\",\\"text\\":\\"url-button-text\\",\\"url\\":\\"https://www.website.com/\\"}]}]", 		"example": "{\\"textVariable\\": \\"text\\", \\"linkVariable\\": \\"link\\"}" 	}',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"744c4b5c79c9432497a075bdfca3****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"User not authorized to operate on the specified resource.\\",\\n  \\"Data\\": {\\n    \\"Category\\": \\"UTILITY\\",\\n    \\"TemplateCode\\": \\"744c4b5c79c9432497a075bdfca3****\\",\\n    \\"Name\\": \\"hello_whatsapp\\",\\n    \\"Language\\": \\"en_US\\",\\n    \\"Example\\": {\\n      \\"key\\": \\"{\\\\\\\\\\\\\\"textVariable\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"text\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"linkVariable\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"https://image.developer.aliy\\\\\\\\\\\\\\"}\\"\\n    },\\n    \\"AuditStatus\\": \\"pass\\",\\n    \\"Components\\": [\\n      {\\n        \\"Type\\": \\"BODY\\",\\n        \\"Url\\": \\"https://image.developer.aliyundoc.com\\",\\n        \\"Text\\": \\"你好\\",\\n        \\"Caption\\": \\"新文件已上传\\",\\n        \\"FileName\\": \\"快递文件\\",\\n        \\"Format\\": \\"TEXT\\",\\n        \\"Buttons\\": [\\n          {\\n            \\"Type\\": \\"PHONE_NUMBER\\",\\n            \\"Text\\": \\"打电话\\",\\n            \\"PhoneNumber\\": \\"861398745****\\",\\n            \\"Url\\": \\"https://example.com\\\\n\\",\\n            \\"UrlType\\": \\"static\\",\\n            \\"SignatureHash\\": \\"2993839\\",\\n            \\"PackageName\\": \\"com.aliyun\\",\\n            \\"AutofillText\\": \\"Autofill\\",\\n            \\"IsOptOut\\": false,\\n            \\"ExtendAttrs\\": {\\n              \\"NextTemplateCode\\": \\"20939920093993\\",\\n              \\"NextTemplateName\\": \\"abc\\",\\n              \\"NextLanguageCode\\": \\"en\\",\\n              \\"Action\\": \\"nextCard\\",\\n              \\"IntentCode\\": \\"test\\"\\n            },\\n            \\"CouponCode\\": \\"202039ksjs\\",\\n            \\"FlowId\\": \\"3838292983\\",\\n            \\"FlowAction\\": \\"NAVIGATE\\",\\n            \\"NavigateScreen\\": \\"DETAILS\\",\\n            \\"SupportedApps\\": [\\n              {\\n                \\"SignatureHash\\": \\"29kdkeik939\\",\\n                \\"PackageName\\": \\"com.test\\"\\n              }\\n            ]\\n          }\\n        ],\\n        \\"ThumbUrl\\": \\"https://img.png\\",\\n        \\"Duration\\": 50,\\n        \\"FileType\\": \\"docx\\",\\n        \\"Latitude\\": \\"28.001\\",\\n        \\"Longitude\\": \\"120.002\\",\\n        \\"LocationName\\": \\"杭州\\",\\n        \\"LocationAddress\\": \\"杭州\\",\\n        \\"AddSecretRecommendation\\": false,\\n        \\"CodeExpirationMinutes\\": 5,\\n        \\"hasExpiration\\": true,\\n        \\"OfferExpirationTimeMs\\": \\"$(offerExpirationTimeMs)\\",\\n        \\"Cards\\": [\\n          {\\n            \\"CardComponents\\": [\\n              {\\n                \\"Type\\": \\"HEADER\\",\\n                \\"Text\\": \\"Body\\",\\n                \\"Url\\": \\"https://aliyun.com\\",\\n                \\"Format\\": \\"HEADER\\",\\n                \\"Buttons\\": [\\n                  {\\n                    \\"Type\\": \\"URL\\",\\n                    \\"Text\\": \\"按钮文本\\",\\n                    \\"Url\\": \\"https://aliyun.com\\",\\n                    \\"UrlType\\": \\"static\\",\\n                    \\"PhoneNumber\\": \\"+86138000\\"\\n                  }\\n                ]\\n              }\\n            ]\\n          }\\n        ]\\n      }\\n    ],\\n    \\"TemplateType\\": \\"WHATSAPP\\",\\n    \\"QualityScore\\": \\"GREEN\\",\\n    \\"MessageSendTtlSeconds\\": 120,\\n    \\"Reason\\": \\"None\\"\\n  },\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","errorExample":""},{"type":"xml","example":"<GetChatappTemplateDetailResponse>\\n    <RequestId>744c4b5c79c9432497a075bdfca3****</RequestId>\\n    <Code>OK</Code>\\n    <Message>无</Message>\\n    <Data>{ \\t\\t\\"category\\": \\"ACCOUNT_UPDATE\\", \\t\\t\\"name\\": \\"account_notice\\", \\t\\t\\"language\\": \\"en_US\\", \\t\\t\\"templateCode\\": \\"744c4b5c79c9432497a075bdfca3****\\", \\t\\t\\"auditStatus\\": \\"APPROVED\\", \\t\\t\\"components\\": \\"[{\\\\\\"type\\\\\\":\\\\\\"BODY\\\\\\",\\\\\\"text\\\\\\":\\\\\\"body_text$(textVariable)\\\\\\"},{\\\\\\"type\\\\\\":\\\\\\"HEADER\\\\\\",\\\\\\"formate\\\\\\":\\\\\\"IMAGE\\\\\\",\\\\\\"url\\\\\\":\\\\\\"$(linkVariable)\\\\\\"},{\\\\\\"type\\\\\\":\\\\\\"FOOTER\\\\\\",\\\\\\"text\\\\\\":\\\\\\"footer-text\\\\\\"},{\\\\\\"type\\\\\\":\\\\\\"BUTTONS\\\\\\",\\\\\\"buttons\\\\\\":[{\\\\\\"type\\\\\\":\\\\\\"PHONE_NUMBER\\\\\\",\\\\\\"text\\\\\\":\\\\\\"phone-button-text\\\\\\",\\\\\\"phone_number\\\\\\":\\\\\\"+861388888****\\\\\\"},{\\\\\\"type\\\\\\":\\\\\\"URL\\\\\\",\\\\\\"text\\\\\\":\\\\\\"url-button-text\\\\\\",\\\\\\"url\\\\\\":\\\\\\"https://www.website.com/\\\\\\"}]}]\\", \\t\\t\\"example\\": \\"{\\\\\\"textVariable\\\\\\": \\\\\\"text\\\\\\", \\\\\\"linkVariable\\\\\\": \\\\\\"link\\\\\\"}\\" \\t}</Data>\\n</GetChatappTemplateDetailResponse>","errorExample":""}]',
            'title' => '查询ChatApp模板详情',
            'description' => '### QPS限制'."\n"
                .'本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'DeleteChatappTemplate' => [
            'summary' => '删除消息模板。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'abilityTreeCode' => '129140',
                'abilityTreeNodes' => [
                    'FEATUREcamsDKDS4Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'TemplateCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模板编码',
                        'description' => '模板编码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '744c4b5c79c9432497a075bdfca3****',
                    ],
                ],
                [
                    'name' => 'CustWabaId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ISV客户WabaId, 后续会被弃用，请使用CustSpaceId',
                        'description' => 'ISV客户WabaId'."\n"
                            ."\n"
                            .'> 过时的参数，请使用CustSpaceId',
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                        'example' => '65921621816****',
                    ],
                ],
                [
                    'name' => 'IsvCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Isv校验码，用于校验子帐号是否由ISV授权',
                        'description' => 'ISV校验码，用于校验子账号是否由ISV授权。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'skdi3kksloslikdkkdk',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '28251486512358****',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模板名称',
                        'description' => '模板名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_name',
                    ],
                ],
                [
                    'name' => 'Language',
                    'in' => 'query',
                    'schema' => [
                        'title' => '语言',
                        'description' => '语言',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_CN',
                    ],
                ],
                [
                    'name' => 'TemplateType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模板类型，当带语言删除时templateType为必填',
                        'description' => '模板类型，当带语言删除时templateType为必填',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'WHATSAPP',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A9486641****',
                            ],
                            'Code' => [
                                'title' => '返回结果 OK 为正常',
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '提示信息，当返回异常时有值',
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => 'User not authorized to operate on the specified resource.',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A9486641****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"User not authorized to operate on the specified resource.\\",\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteChatappTemplateResponse>\\n    <RequestId>90E63D28-E31D-1EB2-8939-A9486641****</RequestId>\\n    <Code>OK</Code>\\n    <Message>无</Message>\\n</DeleteChatappTemplateResponse>","errorExample":""}]',
            'title' => '删除ChatApp模板',
            'description' => '### QPS限制'."\n"
                .'本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'BeeBotChat' => [
            'summary' => '根据机器人唯一标识（机器人Id）与其进行会话。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'SessionId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '会话ID, 用于标识一个访问者的会话和上下文信息',
                        'description' => '会话ID, 用于标识一个访问者的会话和上下文信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'en',
                    ],
                ],
                [
                    'name' => 'Utterance',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '机器人访问者输入',
                        'description' => '机器人访问者输入。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '659216218162179',
                    ],
                ],
                [
                    'name' => 'IsvCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'Isv校验码，用于校验子帐号是否由ISV授权',
                        'description' => 'Isv校验码，用于校验子账号是否由ISV授权。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ksiekdki39ksks93939',
                    ],
                ],
                [
                    'name' => 'ChatBotInstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '发送号码',
                        'description' => '机器人实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'KnowledgeId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '知识库中知识标题ID',
                        'description' => '知识库中知识标题ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'IntentName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '对话流中意图名称，若指定此名称，机器人会直接进入此意图做问答',
                        'description' => '对话流中意图名称，若指定此名称，机器人会直接进入此意图做问答。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'intent',
                    ],
                ],
                [
                    'name' => 'SenderId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '访问者ID。用于识别当前会话中的用户',
                        'description' => '访问者ID。用于识别当前会话中的用户。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '861500000000',
                    ],
                ],
                [
                    'name' => 'SenderNick',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '当前会话中访问的昵称',
                        'description' => '当前会话中访问的昵称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'nick',
                    ],
                ],
                [
                    'name' => 'Perspective',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '视觉编码，用于调用同一知识标题下不同视角的答案',
                        'description' => '视角编码列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '视角编码，用于调用同一知识标题下不同视角的答案。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'u6Yvizzjba',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'VendorParam',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户自定义参数集，可以传入用户自定义参数到圣诞工厂',
                        'description' => '用户自定义参数集，一个JSON格式的用户自定义参数集，可以传入用户自定义的参数到各对话引擎。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{\\"skills\\":\\"chat_search\\",\\"accessToken\\":\\"73f4d5c8e8c334d9b538890bca68ac9a\\",\\"senderStaffId\\":\\"1697204021326\\",\\"senderCorpId\\":\\"dingee291fb2828058b9\\"}',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '293483938849493',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A94866411B2O',
                            ],
                            'Code' => [
                                'title' => '返回结果 OK 为正常',
                                'description' => '返回结果，OK 为正常。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '提示信息，当返回异常时有值',
                                'description' => '提示信息，当返回异常时有值。',
                                'type' => 'string',
                                'example' => 'none',
                            ],
                            'Data' => [
                                'description' => '返回数据。'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'MessageId' => [
                                        'title' => '本条会话应答消息的ID',
                                        'description' => '本条会话应答消息的ID。',
                                        'type' => 'string',
                                        'example' => 'ab6be8af-cee4-40c3-9919-2ac7461d7d98',
                                    ],
                                    'SessionId' => [
                                        'title' => '本次会话的ID',
                                        'description' => '本次会话的ID。',
                                        'type' => 'string',
                                        'example' => '1234',
                                    ],
                                    'Messages' => [
                                        'title' => '消息的列表',
                                        'description' => '消息的列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '消息体。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Knowledge' => [
                                                    'title' => '当AnswerType为Knowledge时，此字段包含机器人返回的Knowledge对象',
                                                    'description' => '当AnswerType为Knowledge时，此字段包含机器人返回的Knowledge对象。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'HitStatement' => [
                                                            'title' => '命中语句',
                                                            'description' => '命中语句。',
                                                            'type' => 'string',
                                                            'example' => '公积金',
                                                        ],
                                                        'Summary' => [
                                                            'title' => '命中问题的简介',
                                                            'description' => '命中问题的简介。',
                                                            'type' => 'string',
                                                            'example' => '公积金提取',
                                                        ],
                                                        'RelatedKnowledges' => [
                                                            'title' => '关联知识列表',
                                                            'description' => '关联知识列表。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '关联知识对象。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'KnowledgeId' => [
                                                                        'title' => '知识关联知识的ID',
                                                                        'description' => '知识关联知识的ID。',
                                                                        'type' => 'string',
                                                                        'example' => '735899',
                                                                    ],
                                                                    'Title' => [
                                                                        'title' => '知识的关联知识的标题',
                                                                        'description' => '知识的关联知识的标题。',
                                                                        'type' => 'string',
                                                                        'example' => '公积金提取',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                        'Category' => [
                                                            'title' => '知识类目',
                                                            'description' => '知识类目。',
                                                            'type' => 'string',
                                                            'example' => '公积金',
                                                        ],
                                                        'Title' => [
                                                            'title' => '命中问题的标题',
                                                            'description' => '命中问题的标题。',
                                                            'type' => 'string',
                                                            'example' => '公积金提取',
                                                        ],
                                                        'Content' => [
                                                            'title' => '命中问题的内容',
                                                            'description' => '命中问题的内容。',
                                                            'type' => 'string',
                                                            'example' => '公积金提取，请在首页搜索公积金提取，提交办事的表单',
                                                        ],
                                                        'AnswerSource' => [
                                                            'title' => '区分答案类型。'."\n"
                                                                .'KnowledgeBase:知识库条；',
                                                            'description' => '区分答案类型。'."\n",
                                                            'type' => 'string',
                                                            'example' => 'KnowledgeBase',
                                                        ],
                                                        'Id' => [
                                                            'title' => '命中问题在知识库中的ID',
                                                            'description' => '命中问题在知识库中的ID。',
                                                            'type' => 'string',
                                                            'example' => '735898',
                                                        ],
                                                        'ContentType' => [
                                                            'title' => '纯文本/富文本答案的标示',
                                                            'description' => '纯文本/富文本答案的标示。',
                                                            'type' => 'string',
                                                            'example' => 'PLAIN_TEXT',
                                                            'enum' => [
                                                                'PLAIN_TEXT：纯本文',
                                                                'RICH_TEXT: 富文本',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'Text' => [
                                                    'title' => '当AnswerType为Text时，此字段包含机器人返回的Text对象',
                                                    'description' => '当AnswerType为Text时，此字段包含机器人返回的Text对象。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'HitStatement' => [
                                                            'title' => '命中语句',
                                                            'description' => '命中语句。',
                                                            'type' => 'string',
                                                            'example' => '查天气',
                                                        ],
                                                        'DialogName' => [
                                                            'title' => '当AnswerSource为BotFramework时，此字段返回对话单元名称',
                                                            'description' => '当AnswerSource为BotFramework时，此字段返回对话单元名称。',
                                                            'type' => 'string',
                                                            'example' => '示例_查天气',
                                                        ],
                                                        'AnswerSource' => [
                                                            'title' => '区分答案类型',
                                                            'description' => '区分答案类型。',
                                                            'type' => 'string',
                                                            'example' => 'BotFramework',
                                                            'enum' => [
                                                                'ChitChat：闲聊',
                                                                'BotFramework：对话工厂',
                                                                'NO_ANSWER：无答案',
                                                                'MACHINE_READ：机器阅读',
                                                                'CardAnswer：卡片答案',
                                                                'SENSITIVE_WORD： 全局敏感词',
                                                                'COMMANDS：系统指令',
                                                                'TABLEQA：表格问答',
                                                            ],
                                                        ],
                                                        'Slots' => [
                                                            'title' => '当AnswerSource为BotFramework时，此字段返回专有名词列表',
                                                            'description' => '槽位信息列表。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '槽位信息。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Value' => [
                                                                        'description' => '具体值。',
                                                                        'type' => 'string',
                                                                        'example' => '北京',
                                                                    ],
                                                                    'Origin' => [
                                                                        'description' => '原始值。',
                                                                        'type' => 'string',
                                                                        'example' => '北京',
                                                                    ],
                                                                    'Name' => [
                                                                        'description' => '名称。',
                                                                        'type' => 'string',
                                                                        'example' => '查天气意图.city',
                                                                    ],
                                                                    'Hit' => [
                                                                        'description' => '是否命中。',
                                                                        'type' => 'boolean',
                                                                        'example' => 'false',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                        'NodeName' => [
                                                            'title' => '当AnswerSource为BotFramework时，此字段返回节点名称',
                                                            'description' => '当AnswerSource为BotFramework时，此字段返回节点名称。',
                                                            'type' => 'string',
                                                            'example' => '示例_查天气.查天气填槽.__city',
                                                        ],
                                                        'IntentName' => [
                                                            'title' => '当AnswerSource为BotFramework时，此字段返回意图名称',
                                                            'description' => '当AnswerSource为BotFramework时，此字段返回意图名称。',
                                                            'type' => 'string',
                                                            'example' => '查天气意图',
                                                        ],
                                                        'MetaData' => [
                                                            'description' => '元数据。',
                                                            'type' => 'string',
                                                            'example' => '[[{\\"columnName\\":\\"姓名\\",\\"stringValue\\":\\"王珊珊\\"}]]',
                                                        ],
                                                        'ExternalFlags' => [
                                                            'title' => '当AnswerSource为BotFramework时，此字段返回透传参数',
                                                            'description' => '当AnswerSource为BotFramework时，此字段返回透传参数。',
                                                            'type' => 'object',
                                                        ],
                                                        'Ext' => [
                                                            'title' => '此字段返回透传参数',
                                                            'description' => '此字段返回透传参数。',
                                                            'type' => 'object',
                                                        ],
                                                        'UserDefinedChatTitle' => [
                                                            'title' => '自定义闲聊主题title',
                                                            'description' => '自定义闲聊主题title',
                                                            'type' => 'string',
                                                            'example' => '问候',
                                                        ],
                                                        'Content' => [
                                                            'title' => '文本消息的内容',
                                                            'description' => '文本消息的内容。',
                                                            'type' => 'string',
                                                            'example' => '请问您要查哪里的天气？',
                                                        ],
                                                        'NodeId' => [
                                                            'title' => '当AnswerSource为BotFramework时，此字段返回节点Id',
                                                            'description' => '当AnswerSource为BotFramework时，此字段返回节点Id。',
                                                            'type' => 'string',
                                                            'example' => '1410-c7a72a78.__city',
                                                        ],
                                                        'ContentType' => [
                                                            'title' => '纯文本/富文本答案的标示',
                                                            'description' => '纯文本/富文本答案的标示。',
                                                            'type' => 'string',
                                                            'example' => 'PLAIN_TEXT',
                                                            'enum' => [
                                                                'PLAIN_TEXT：纯本文',
                                                                'RICH_TEXT: 富文本',
                                                                'CARD_TEMPLATE：卡片模版',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'Recommends' => [
                                                    'title' => '当AnswerType为Recommend时，此字段包含机器人返回的Recommend的列表',
                                                    'description' => '当AnswerType为Recommend时，此字段包含机器人返回的Recommend的列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => 'Recommend对象。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'KnowledgeId' => [
                                                                'title' => '澄清的知识id',
                                                                'description' => '澄清的知识id。',
                                                                'type' => 'string',
                                                                'example' => '4548',
                                                            ],
                                                            'Title' => [
                                                                'title' => '澄清内容，可能是'."\n"
                                                                    .'图谱问答的实体、'."\n"
                                                                    .'知识问答的知识标题、'."\n"
                                                                    .'表格问答的列值',
                                                                'description' => '澄清内容，可能是图谱问答的实体、知识问答的知识标题、'."\n"
                                                                    .'表格问答的列值。',
                                                                'type' => 'string',
                                                                'example' => '测试纯文本',
                                                            ],
                                                            'AnswerSource' => [
                                                                'title' => '澄清来源的标识',
                                                                'description' => '澄清来源的标识。',
                                                                'type' => 'string',
                                                                'example' => 'KNOWLEDGE',
                                                                'enum' => [
                                                                    'Knowledge：FAQ标题',
                                                                    'BotFramework：对话工厂',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'AnswerType' => [
                                                    'title' => '本条消息的类型',
                                                    'description' => '本条消息的类型。',
                                                    'type' => 'string',
                                                    'example' => 'Text',
                                                    'enum' => [
                                                        'Text：文本',
                                                        'Recommend：澄清或者反问',
                                                        'Knowledge：知识库知识直出',
                                                        'cardAnswer：卡片工坊的卡片答案',
                                                    ],
                                                ],
                                                'AnswerSource' => [
                                                    'title' => '当AnswerType为Recommend时，此字段表示推荐的答案来源',
                                                    'description' => '当AnswerType为Recommend时，此字段表示推荐的答案来源。',
                                                    'type' => 'string',
                                                    'example' => 'KNOWLEDGE',
                                                    'enum' => [
                                                        'KNOWLEDGE：知识问答',
                                                        'INTENT_FAQ_CLARIFY：FAQ和对话工厂混合澄清',
                                                        'BotFramework：对话工厂澄清',
                                                        'TABLEQA：表格问答',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A94866411B2O\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"none\\",\\n  \\"Data\\": {\\n    \\"MessageId\\": \\"ab6be8af-cee4-40c3-9919-2ac7461d7d98\\",\\n    \\"SessionId\\": \\"1234\\",\\n    \\"Messages\\": [\\n      {\\n        \\"Knowledge\\": {\\n          \\"HitStatement\\": \\"公积金\\",\\n          \\"Summary\\": \\"公积金提取\\",\\n          \\"RelatedKnowledges\\": [\\n            {\\n              \\"KnowledgeId\\": \\"735899\\",\\n              \\"Title\\": \\"公积金提取\\"\\n            }\\n          ],\\n          \\"Category\\": \\"公积金\\",\\n          \\"Title\\": \\"公积金提取\\",\\n          \\"Content\\": \\"公积金提取，请在首页搜索公积金提取，提交办事的表单\\",\\n          \\"AnswerSource\\": \\"KnowledgeBase\\",\\n          \\"Id\\": \\"735898\\",\\n          \\"ContentType\\": \\"PLAIN_TEXT\\"\\n        },\\n        \\"Text\\": {\\n          \\"HitStatement\\": \\"查天气\\",\\n          \\"DialogName\\": \\"示例_查天气\\",\\n          \\"AnswerSource\\": \\"BotFramework\\",\\n          \\"Slots\\": [\\n            {\\n              \\"Value\\": \\"北京\\",\\n              \\"Origin\\": \\"北京\\",\\n              \\"Name\\": \\"查天气意图.city\\",\\n              \\"Hit\\": false\\n            }\\n          ],\\n          \\"NodeName\\": \\"示例_查天气.查天气填槽.__city\\",\\n          \\"IntentName\\": \\"查天气意图\\",\\n          \\"MetaData\\": \\"[[{\\\\\\\\\\\\\\"columnName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"姓名\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"stringValue\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"王珊珊\\\\\\\\\\\\\\"}]]\\",\\n          \\"ExternalFlags\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"Ext\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"UserDefinedChatTitle\\": \\"问候\\",\\n          \\"Content\\": \\"请问您要查哪里的天气？\\",\\n          \\"NodeId\\": \\"1410-c7a72a78.__city\\",\\n          \\"ContentType\\": \\"PLAIN_TEXT\\"\\n        },\\n        \\"Recommends\\": [\\n          {\\n            \\"KnowledgeId\\": \\"4548\\",\\n            \\"Title\\": \\"测试纯文本\\",\\n            \\"AnswerSource\\": \\"KNOWLEDGE\\"\\n          }\\n        ],\\n        \\"AnswerType\\": \\"Text\\",\\n        \\"AnswerSource\\": \\"KNOWLEDGE\\"\\n      }\\n    ]\\n  },\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '机器人会话',
            'description' => '本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'BeeBotAssociate' => [
            'summary' => '根据用户请求，联想知识库中的FAQ。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ChatBotInstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '发送号码',
                        'description' => '机器人实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'IsvCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'Isv校验码，用于校验子帐号是否由ISV授权',
                        'description' => 'Isv校验码，用于校验子账号是否由ISV授权',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ksiekdki39ksks93939',
                    ],
                ],
                [
                    'name' => 'SessionId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '会话ID,用于标识一个访问者的会话和保持上下文信息',
                        'description' => '会话ID,用于标识一个访问者的会话和保持上下文信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2334324234',
                    ],
                ],
                [
                    'name' => 'Perspective',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '视角编码，用于调用同一知识库下不同视角的各自答案',
                        'description' => '视角编码列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '视角编码，用于调用同一知识标题下不同视角的答案。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'vEJnjV37Ae',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RecommendNum',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '推荐问题数量，1 - 10',
                        'description' => '推荐问题数量，1 - 10',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '10',
                        'minimum' => '1',
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'Utterance',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '机器人访问者输入',
                        'description' => '机器人访问者输入',
                        'type' => 'string',
                        'required' => false,
                        'example' => '你好',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '293483938849493',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A9486641****',
                            ],
                            'Code' => [
                                'title' => '返回结果 OK 为正常',
                                'description' => '返回结果 OK 为正常。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '提示信息，当返回异常时有值',
                                'description' => '提示信息，当返回异常时有值。',
                                'type' => 'string',
                                'example' => 'None',
                            ],
                            'Data' => [
                                'description' => '返回数据。'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'MessageId' => [
                                        'title' => '本条会话应答消息ID',
                                        'description' => '本条会话应答消息ID。',
                                        'type' => 'string',
                                        'example' => '1eb47d7a1706429081e90c83c62c2f00',
                                    ],
                                    'SessionId' => [
                                        'title' => '会话ID',
                                        'description' => '会话ID。',
                                        'type' => 'string',
                                        'example' => '93f11165a2a24289a6f869760e8cb3f3',
                                    ],
                                    'Associate' => [
                                        'description' => '联想推荐的列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '数据对象。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Meta' => [
                                                    'title' => '附带信息',
                                                    'description' => '附带信息。',
                                                    'type' => 'string',
                                                    'example' => '{}',
                                                ],
                                                'Title' => [
                                                    'title' => '关联问题的标题',
                                                    'description' => '关联问题的标题。',
                                                    'type' => 'string',
                                                    'example' => '公积金提取的政策',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A9486641****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"None\\",\\n  \\"Data\\": {\\n    \\"MessageId\\": \\"1eb47d7a1706429081e90c83c62c2f00\\",\\n    \\"SessionId\\": \\"93f11165a2a24289a6f869760e8cb3f3\\",\\n    \\"Associate\\": [\\n      {\\n        \\"Meta\\": \\"{}\\",\\n        \\"Title\\": \\"公积金提取的政策\\"\\n      }\\n    ]\\n  },\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '机器人联想',
            'description' => '本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'ListProductCatalog' => [
            'summary' => '查询Meta Business平台的目录列表。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'BusinessId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Business平台Id。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '28',
                    ],
                ],
                [
                    'name' => 'Before',
                    'in' => 'query',
                    'schema' => [
                        'description' => '翻页的前一页结束位置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'wiidkd939kek93',
                    ],
                ],
                [
                    'name' => 'After',
                    'in' => 'query',
                    'schema' => [
                        'description' => '翻页时下一页开始位置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'kdkii48jfjjei3',
                    ],
                ],
                [
                    'name' => 'Fields',
                    'in' => 'query',
                    'schema' => [
                        'description' => '字段列表，多个字段用半角逗号（,）隔开。'."\n"
                            .'具体字段请参考 [目录字段](~~2579419~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'id,name',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询数量。取值范围[1,1000]。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '73',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'C29398882929',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => 'None',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '	'."\n"
                                    .'90E63D28-E31D-1EB2-8939-A9486641****'."\n",
                            ],
                            'Model' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'Paging' => [
                                        'description' => '分页详情。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Cursors' => [
                                                'description' => '翻页位置。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Before' => [
                                                        'description' => '前一条记录位置。',
                                                        'type' => 'string',
                                                        'example' => 'sjjsjdjjdjd83883',
                                                    ],
                                                    'After' => [
                                                        'description' => '后一条记录位置。',
                                                        'type' => 'string',
                                                        'example' => 'sjsuueu83838',
                                                    ],
                                                ],
                                                'example' => '',
                                            ],
                                        ],
                                        'example' => '',
                                    ],
                                    'Data' => [
                                        'description' => '返回数据对像。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '返回对象。',
                                            'type' => 'object',
                                            'example' => '{"id":"2999293993", "name":"catalog_name"}',
                                        ],
                                        'example' => '',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"无\\",\\n  \\"Message\\": \\"None\\",\\n  \\"RequestId\\": \\"\\\\t\\\\n90E63D28-E31D-1EB2-8939-A9486641****\\\\n\\",\\n  \\"Model\\": {\\n    \\"Paging\\": {\\n      \\"Cursors\\": {\\n        \\"Before\\": \\"sjjsjdjjdjd83883\\",\\n        \\"After\\": \\"sjsuueu83838\\"\\n      }\\n    },\\n    \\"Data\\": [\\n      {\\n        \\"id\\": \\"2999293993\\",\\n        \\"name\\": \\"catalog_name\\"\\n      }\\n    ]\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '商品目录列表',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'GetWhatsappConnectionCatalog' => [
            'summary' => '获取Waba关联的目录。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'WabaId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Waba Id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '292939399393',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'C2020939922929292',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A94866411B2O'."\n",
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Model' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'example' => '{"id":"200292992"}',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'description' => '是否调用成功：'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。'."\n",
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"无\\",\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A94866411B2O\\\\n\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Model\\": {\\n    \\"id\\": \\"200292992\\"\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": false\\n}","type":"json"}]',
            'title' => '获取Waba绑定的目录',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'ListProduct' => [
            'summary' => '查询目录下的商品列表。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'CatalogId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '29398389292',
                    ],
                ],
                [
                    'name' => 'Fields',
                    'in' => 'query',
                    'schema' => [
                        'description' => '字段列表，多个字段用半角逗号（,）隔开。'."\n"
                            .'具体字段请参考 [商品字段](~~2579419~~)',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'id,name',
                    ],
                ],
                [
                    'name' => 'Before',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询前一页消息的结束位置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'wiidkd939kek93',
                    ],
                ],
                [
                    'name' => 'After',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询下一页消息的起始位置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'kdkii48jfjjei3',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询数量。取值范围[1,1000]。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '73',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'C29398388383',
                    ],
                ],
                [
                    'name' => 'WabaId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Waba Id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '38487474747',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Message' => [
                                'description' => '提示信息，当返回异常时有值。',
                                'type' => 'string',
                                'example' => 'None',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A94866411B2O'."\n",
                            ],
                            'Model' => [
                                'description' => '请求结果数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Paging' => [
                                        'description' => '分页详情。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Cursors' => [
                                                'description' => '分页位置。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Before' => [
                                                        'description' => '前一条记录位置。',
                                                        'type' => 'string',
                                                        'example' => 'sjjsjdjjdjd83883',
                                                    ],
                                                    'After' => [
                                                        'description' => '后一条记录位置。',
                                                        'type' => 'string',
                                                        'example' => 'sjsuueu83838',
                                                    ],
                                                ],
                                                'example' => '',
                                            ],
                                        ],
                                        'example' => '',
                                    ],
                                    'Data' => [
                                        'description' => '返回数据对像。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '商品数据。',
                                            'type' => 'object',
                                            'example' => '{"id":"293983883", "name":"product1"}',
                                        ],
                                        'example' => '',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~196974~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'description' => '是否调用成功：'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。'."\n",
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"无\\",\\n  \\"Message\\": \\"None\\",\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A94866411B2O\\\\n\\",\\n  \\"Model\\": {\\n    \\"Paging\\": {\\n      \\"Cursors\\": {\\n        \\"Before\\": \\"sjjsjdjjdjd83883\\",\\n        \\"After\\": \\"sjsuueu83838\\"\\n      }\\n    },\\n    \\"Data\\": [\\n      {\\n        \\"id\\": \\"293983883\\",\\n        \\"name\\": \\"product1\\"\\n      }\\n    ]\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '商品列表',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'GetChatappPhoneNumberMetric' => [
            'summary' => '查询号码的发送量指标。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'IsvCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Isv校验码，用于校验子帐号是否由ISV授权',
                        'description' => 'ISV校验码，用于校验子账号是否由ISV授权。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'skdi3kksloslikdkkdk',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '293483938849493',
                    ],
                ],
                [
                    'name' => 'Granularity',
                    'in' => 'query',
                    'schema' => [
                        'title' => '指标粒度',
                        'description' => '指标粒度。'."\n"
                            ."\n"
                            .'> 取值：'."\n"
                            .'> - DAILY'."\n"
                            .'> - HALF_HOUR',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DAILY',
                        'default' => 'DAILY',
                    ],
                ],
                [
                    'name' => 'Start',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询开始时间',
                        'description' => '查询开始时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1693107714687',
                    ],
                ],
                [
                    'name' => 'End',
                    'in' => 'query',
                    'schema' => [
                        'title' => '结束时间',
                        'description' => '查询结束时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1693407714687',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '商业号码',
                        'description' => '商业号码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '861380000****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1612C226-E271-4CFE-9F18-4066D******',
                            ],
                            'Code' => [
                                'title' => '返回结果 OK 为正常',
                                'description' => '返回结果**OK**为正常。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => 'None',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回数据对像。',
                                    'type' => 'object',
                                    'properties' => [
                                        'SentCount' => [
                                            'description' => '发送量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '10',
                                        ],
                                        'DeliveredCount' => [
                                            'description' => '到达量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '5',
                                        ],
                                        'Start' => [
                                            'description' => '指标统计开始时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1669619491000',
                                        ],
                                        'End' => [
                                            'description' => '指标统计结束时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1667196043904',
                                        ],
                                        'PhoneNumber' => [
                                            'description' => '商业号码。',
                                            'type' => 'string',
                                            'example' => '861380000',
                                        ],
                                        'Granularity' => [
                                            'description' => '指标粒度。'."\n"
                                                ."\n"
                                                .'> 取值：'."\n"
                                                .'> - DAILY'."\n"
                                                .'> - HALF_HOUR',
                                            'type' => 'string',
                                            'example' => 'DAILY',
                                        ],
                                    ],
                                ],
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1612C226-E271-4CFE-9F18-4066D******\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"None\\",\\n  \\"Data\\": [\\n    {\\n      \\"SentCount\\": 10,\\n      \\"DeliveredCount\\": 5,\\n      \\"Start\\": 1669619491000,\\n      \\"End\\": 1667196043904,\\n      \\"PhoneNumber\\": \\"861380000\\",\\n      \\"Granularity\\": \\"DAILY\\"\\n    }\\n  ],\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '查询号码的发送量指标',
            'description' => '本接口的单用户QPS限制为50次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'EnableWhatsappROIMetric' => [
            'summary' => '开启Whatsapp相关指标统计。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'IsvCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Isv校验码，用于校验子帐号是否由ISV授权',
                        'description' => 'ISV校验码，用于校验子账号是否由ISV授权。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'skdi3kksloslikdkkdk',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '293483938849493',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A9486641****',
                            ],
                            'Code' => [
                                'title' => '返回结果 OK 为正常',
                                'description' => '返回结果**OK**为正常。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => 'None',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A9486641****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"None\\",\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '开启Whatsapp ROI指标统计',
            'description' => '本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'GetChatappTemplateMetric' => [
            'summary' => '获取Marketing类型模板的相关指标。',
            'methods' => [
                'get',
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'TemplateCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模板分类',
                        'description' => '模板Code。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '744c4b5c79c9432497a075bdfca36bf5',
                    ],
                ],
                [
                    'name' => 'Language',
                    'in' => 'query',
                    'schema' => [
                        'title' => '语言',
                        'description' => '模板语言。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'en',
                    ],
                ],
                [
                    'name' => 'IsvCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Isv校验码，用于校验子帐号是否由ISV授权',
                        'description' => 'ISV校验码，用于校验子账号是否由ISV授权。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'skdi3kksloslikdkkdk',
                    ],
                ],
                [
                    'name' => 'CustSpaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ISV子客户的SpaceId',
                        'description' => 'ISV子客户的SpaceId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '293483938849493',
                    ],
                ],
                [
                    'name' => 'TemplateType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模板的模板类型，取值为WHATSAPP/VIBER， 当未传递此值时，默认值为WHATSAPP',
                        'description' => '模板的模板类型。取值：'."\n"
                            ."\n"
                            .'- WHATSAPP'."\n"
                            .'- VIBER'."\n"
                            .'> 当未传递此值时，默认值为WHATSAPP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'WHATSAPP',
                    ],
                ],
                [
                    'name' => 'Granularity',
                    'in' => 'query',
                    'schema' => [
                        'title' => '指标粒度',
                        'description' => '指标粒度。取值：'."\n"
                            .'- DAILY'."\n"
                            .'- HALF_HOUR',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DAILY',
                        'default' => 'DAILY',
                    ],
                ],
                [
                    'name' => 'Start',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询开始时间',
                        'description' => '查询开始时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1693107714687',
                    ],
                ],
                [
                    'name' => 'End',
                    'in' => 'query',
                    'schema' => [
                        'title' => '结束时间',
                        'description' => '查询结束时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1693407714687',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '90E63D28-E31D-1EB2-8939-A9486641****',
                            ],
                            'Code' => [
                                'title' => '返回结果 OK 为正常',
                                'description' => '返回结果**OK**为正常。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误提示信息。',
                                'type' => 'string',
                                'example' => 'None',
                            ],
                            'Data' => [
                                'description' => '返回数据。'."\n",
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回数据。'."\n",
                                    'type' => 'object',
                                    'properties' => [
                                        'TemplateCode' => [
                                            'title' => '模板编码',
                                            'description' => '模板编码。',
                                            'type' => 'string',
                                            'example' => '83837774838*****',
                                        ],
                                        'Language' => [
                                            'title' => '模板语言',
                                            'description' => '模板语言。',
                                            'type' => 'string',
                                            'example' => 'en',
                                        ],
                                        'SentCount' => [
                                            'description' => '发送量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '10',
                                        ],
                                        'ReadCount' => [
                                            'description' => '阅读量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '3',
                                        ],
                                        'DeliveredCount' => [
                                            'description' => '到达量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '6',
                                        ],
                                        'Cliented' => [
                                            'description' => '按钮点击统计。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '按钮点击统计。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Type' => [
                                                        'description' => '按钮类型。取值：'."\n"
                                                            .'- url_button'."\n"
                                                            .'- quick_relpy_button'."\n"
                                                            .'- phone_number_button',
                                                        'type' => 'string',
                                                        'example' => 'quick_reply_button',
                                                    ],
                                                    'ButtonContent' => [
                                                        'description' => '按钮文本。',
                                                        'type' => 'string',
                                                        'example' => '回复',
                                                    ],
                                                    'Count' => [
                                                        'description' => '点击次数。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '20',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Start' => [
                                            'description' => '指标统计开始时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1673919240001',
                                        ],
                                        'End' => [
                                            'description' => '指标统计结束时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1668138331485',
                                        ],
                                    ],
                                ],
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90E63D28-E31D-1EB2-8939-A9486641****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"None\\",\\n  \\"Data\\": [\\n    {\\n      \\"TemplateCode\\": \\"83837774838*****\\",\\n      \\"Language\\": \\"en\\",\\n      \\"SentCount\\": 10,\\n      \\"ReadCount\\": 3,\\n      \\"DeliveredCount\\": 6,\\n      \\"Cliented\\": [\\n        {\\n          \\"Type\\": \\"quick_reply_button\\",\\n          \\"ButtonContent\\": \\"回复\\",\\n          \\"Count\\": 20\\n        }\\n      ],\\n      \\"Start\\": 1673919240001,\\n      \\"End\\": 1668138331485\\n    }\\n  ],\\n  \\"AccessDeniedDetail\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '获取Marketing类型模板的相关指标',
            'description' => '本接口的单用户QPS限制为50次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'cams.ap-southeast-1.aliyuncs.com',
        ],
    ],
];
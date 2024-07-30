<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Dysmsapi',
        'version' => '2017-05-25',
    ],
    'directories' => [
        [
            'id' => 131420,
            'title' => '签名管理',
            'type' => 'directory',
            'children' => [
                'AddSmsSign',
                'DeleteSmsSign',
                'ModifySmsSign',
                'QuerySmsSignList',
                'QuerySmsSign',
                'CreateSmsSign',
                'UpdateSmsSign',
                'GetSmsSign',
            ],
        ],
        [
            'id' => 131426,
            'title' => '模板管理',
            'type' => 'directory',
            'children' => [
                'AddSmsTemplate',
                'QuerySmsTemplate',
                'QuerySmsTemplateList',
                'ModifySmsTemplate',
                'DeleteSmsTemplate',
                'CreateSmsTemplate',
                'UpdateSmsTemplate',
                'GetSmsTemplate',
            ],
        ],
        [
            'id' => 131414,
            'title' => '短信发送',
            'type' => 'directory',
            'children' => [
                'SendSms',
                'SendBatchSms',
            ],
        ],
        [
            'id' => 131417,
            'title' => '发送查询',
            'type' => 'directory',
            'children' => [
                'QuerySendDetails',
                'QuerySendStatistics',
            ],
        ],
        [
            'id' => 168664,
            'title' => '卡片短信',
            'type' => 'directory',
            'children' => [
                'GetOSSInfoForCardTemplate',
                'GetMediaResourceId',
                'CreateCardSmsTemplate',
                'QueryCardSmsTemplate',
                'CheckMobilesCardSupport',
                'QueryMobilesCardSupport',
                'GetCardSmsLink',
                'QueryCardSmsTemplateReport',
                'SendCardSms',
                'SendBatchCardSms',
            ],
        ],
        [
            'id' => 182535,
            'title' => '国内发国际短信转化率',
            'type' => 'directory',
            'children' => [
                'SmsConversionIntl',
                'ConversionDataIntl',
            ],
        ],
        [
            'id' => 131432,
            'title' => '短链管理',
            'type' => 'directory',
            'children' => [
                'AddShortUrl',
                'DeleteShortUrl',
                'QueryShortUrl',
            ],
        ],
        [
            'id' => 131436,
            'title' => '标签管理',
            'type' => 'directory',
            'children' => [
                'ListTagResources',
                'TagResources',
                'UntagResources',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'AddSmsSign' => [
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
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'SignName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名名称，签名名称请遵守[签名规范](https://help.aliyun.com/zh/sms/user-guide/signature-specifications-1?spm=a2c4g.11186623.0.0.4f9710fder2gR7#section-0p8-qn8-mmy)。'."\n"
                            ."\n"
                            .'> - 签名名称不区分大小写字母，如【Aliyun通信】和【aliyun通信】视为名称相同。'."\n"
                            .'> - 当您的验证码签名和通用签名名称相同时，系统默认使用通用签名发送短信。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '阿里云',
                    ],
                ],
                [
                    'name' => 'SignSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名来源。取值：'."\n"
                            ."\n"
                            .'-  **0**：企事业单位的全称或简称。'."\n"
                            .'-  **1**：工信部备案网站的全称或简称。'."\n"
                            .'-  **2**：App应用的全称或简称。'."\n"
                            .'-  **3**：公众号或小程序的全称或简称。'."\n"
                            .'-  **4**：电商平台店铺名的全称或简称。'."\n"
                            .'-  **5**：商标名的全称或简称。'."\n"
                            ."\n"
                            .'签名来源的详细说明请参见[签名来源](https://help.aliyun.com/zh/sms/user-guide/signature-specifications-1?spm=a2c4g.11186623.0.0.4f9710fder2gR7#section-xup-k46-yi4)。'."\n"
                            ."\n"
                            .'>此接口不支持申请签名来源是**测试或学习**和**线上试用**的签名，如果您需要申请这两种签名来源的签名，请前往[短信服务控制台](https://dysms.console.aliyun.com/domestic/text/sign/add/qualification)申请。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信签名场景说明，长度不超过200个字符。'."\n"
                            ."\n"
                            .'> 场景说明是签名审核的参考信息之一。请详细描述已上线业务的使用场景，并提供可以验证这些业务的网站链接、已备案域名地址、应用市场下载链接、公众号或小程序全称等信息。对于登录场景，还需提供测试账号密码。信息完善的申请说明会提高签名、模板的审核效率。短信场景填写可参考[签名来源](https://help.aliyun.com/zh/sms/user-guide/signature-specifications-1?spm=a2c4g.11186623.0.i2#section-xup-k46-yi4)表格中**应用场景**的填写。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '当前的短信签名应用于双11大促推广营销',
                    ],
                ],
                [
                    'name' => 'SignFileList',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '签名文件列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '签名数据。',
                            'type' => 'object',
                            'properties' => [
                                'FileContents' => [
                                    'description' => '签名的资质证明文件经base64编码后的字符串。图片不超过2 MB。个别场景下，申请签名需要上传证明文件。'."\n"
                                        ."\n"
                                        .'详细规范，请参见[上传文件规范](https://help.aliyun.com/zh/sms/user-guide/authorization-letter-and-material-speicfications/?spm=a2c4g.11186623.0.0.55a14070tXmBuJ)。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'R0lGODlhHAAmAKIHAKqqqsvLy0hISObm5vf394uL****',
                                ],
                                'FileSuffix' => [
                                    'description' => '签名的证明文件格式，支持上传多张图片。当前支持JPG、PNG、GIF或JPEG格式的图片。个别场景下，申请签名需要上传证明文件。'."\n"
                                        ."\n"
                                        .'> 如果签名用途为他用或个人认证用户的自用签名来源为企事业单位名时，还需上传证明文件和委托授权书，详情请参见[证明文件](~~108076~~)和[授权委托书](~~56741~~)。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'jpg',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'SignType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名类型。'."\n"
                            ."\n"
                            .'- **0**：验证码'."\n"
                            .'- **1**：通用',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[API错误码](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F655A8D5-B967-440B-8683-DAD6FF8DE990',
                            ],
                            'SignName' => [
                                'description' => '签名名称。',
                                'type' => 'string',
                                'example' => '阿里云',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"F655A8D5-B967-440B-8683-DAD6FF8DE990\\",\\n  \\"SignName\\": \\"阿里云\\"\\n}","type":"json"}]',
            'title' => '申请短信签名',
            'summary' => '短信签名作为短信发送方的一种标识，发送短信前，您需要先申请签名和模板，系统会将已审核通过的短信签名添加到短信内容的开头，并与短信内容一起发送给接收方。',
            'description' => '- 您可以通过AddSmsSign接口或[短信服务控制台](https://dysms.console.aliyun.com/domestic/text/sign/add/qualification)申请短信签名，签名需要符合[短信签名规范](https://help.aliyun.com/zh/sms/user-guide/signature-specifications-1?spm=a2c4g.11186623.0.0.4f9710fder2gR7)。'."\n"
                .'- 您可以通过QuerySmsSign接口或控制台查询签名审核状态。'."\n"
                ."\n"
                .'- 个人用户和企业用户的签名权益区别、签名审核流程，请参见[使用须知](~~55324~~)。'."\n"
                ."\n"
                .'> - 审核中的短信签名不支持撤回。'."\n"
                .'> - 短信签名和短信模板均需审核通过后方可使用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteSmsSign' => [
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
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'SignName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信签名。'."\n"
                            ."\n"
                            .'> 必须是本账号已申请的短信签名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '阿里云',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[错误码列表](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F655A8D5-B967-440B-8683-DAD6FF8D****',
                            ],
                            'SignName' => [
                                'description' => '签名名称。',
                                'type' => 'string',
                                'example' => '阿里云',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"F655A8D5-B967-440B-8683-DAD6FF8D****\\",\\n  \\"SignName\\": \\"阿里云\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\r\\n<DeleteSmsSignResponse>\\r\\n    <Message>OK</Message>\\r\\n    <RequestId>F655A8D5-B967-440B-8683-DAD6FF8D****</RequestId>\\r\\n    <SignName>阿里云</SignName>\\r\\n    <Code>OK</Code>\\r\\n</DeleteSmsSignResponse>","errorExample":""}]',
            'title' => '删除短信签名',
            'summary' => '删除签名后您将不能使用此签名继续发送短信。',
            'description' => '- 不支持删除正在审核中的签名。'."\n"
                .'- 短信签名删除后不可恢复，请谨慎操作。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifySmsSign' => [
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
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'SignName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名名称。'."\n"
                            ."\n"
                            .'> 审核通过的签名支持修改，但不支持修改签名名称，修改后的签名需要重新通过审核后才能使用。签名审核未完成前，原签名也不能正常使用。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '阿里云',
                    ],
                ],
                [
                    'name' => 'SignSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名来源。取值：'."\n"
                            ."\n"
                            .'- **0**：企事业单位的全称或简称。'."\n"
                            .'- **1**：工信部备案网站的全称或简称。'."\n"
                            .'- **2**：App应用的全称或简称。'."\n"
                            .'- **3**：公众号或小程序的全称或简称。'."\n"
                            .'- **4**：电商平台店铺名的全称或简称。'."\n"
                            .'- **5**：商标名的全称或简称。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信签名申请说明。场景说明是签名审核的参考信息之一，请详细描述已上线业务的使用场景，并提供可以验证这些业务的网站链接、已备案域名地址、应用市场下载链接、公众号或小程序全称等信息。对于登录场景，还需提供测试账号密码。信息完善的申请说明会提高签名、模板的审核效率。'."\n"
                            ."\n"
                            .'> 长度不超过200个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '当前的短信签名应用于双11大促推广营销',
                    ],
                ],
                [
                    'name' => 'SignFileList',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '签名文件列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '签名文件列表。',
                            'type' => 'object',
                            'properties' => [
                                'FileContents' => [
                                    'description' => '签名的纸质证明文件经base64编码后的字符串。图片不超过2 MB。'."\n"
                                        ."\n"
                                        .'个别场景下，申请签名需要上传证明文件。详细说明，请参见[短信签名规范](~~108076~~)。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'R0lGODlhHAAmAKIHAKqqqsvLy0hISObm5vf394uLiwAA',
                                ],
                                'FileSuffix' => [
                                    'description' => '签名的证明文件格式，支持上传多张图片。当前支持JPG、PNG、GIF或JPEG格式的图片。'."\n"
                                        ."\n"
                                        .'个别场景下，申请签名需要上传证明文件。详细说明，请参见[短信签名规范](~~108076~~)。'."\n"
                                        .'> 如果签名用途为他用或个人认证用户的自用签名来源为企事业单位名时，还需上传证明文件和委托授权书，详情请参见[证明文件](~~108076~~)和[授权委托书](~~56741~~)。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'jpg',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'SignType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名类型。取值：'."\n"
                            ."\n"
                            .'- **0**：验证码'."\n"
                            ."\n"
                            .'- **1**：通用',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[API错误码](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F655A8D5-B967-440B-8683-DAD6FF8DE990',
                            ],
                            'SignName' => [
                                'description' => '签名名称。',
                                'type' => 'string',
                                'example' => '阿里云',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"F655A8D5-B967-440B-8683-DAD6FF8DE990\\",\\n  \\"SignName\\": \\"阿里云\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\r\\n<ModifySmsSignResponse>\\r\\n    <Message>OK</Message>\\r\\n    <RequestId>44DF7A95-603F-4651-9298-BE1850BEB53F</RequestId>\\r\\n    <Code>OK</Code>\\r\\n    <SignName>阿里云</SignName>\\r\\n</ModifySmsSignResponse>","errorExample":""}]',
            'title' => '修改短信签名',
            'summary' => '修改短信签名后需要重新提交审核，审核中的签名不支持修改。',
            'description' => '- 审核通过的签名支持修改，但不支持修改签名名称，修改后的签名需要重新通过审核后才能使用。签名审核未完成前，原签名也不能正常使用。'."\n"
                ."\n"
                .'- 申请短信签名后，您可以通过本接口或[短信服务控制台](https://dysms.console.aliyun.com/dysms.htm#/overview)申请修改，并重新提交审核。签名需要符合[短信签名规范](~~108076~~)。'."\n"
                ."\n"
                .'- 更多短信签名审核信息，请参见[使用须知](~~55324~~)。'."\n"
                ."\n\n"
                .'> - 审核中的短信签名不支持修改。'."\n"
                .'> - 短信签名如果审核通过，则不允许修改，只能删除。'."\n"
                .'> - 对于个人用户，如果当天提交申请的签名审核未通过，删除该签名当天也无法提交申请新签名，需等次日。建议根据失败原因修改后重新提交。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QuerySmsSignList' => [
            'summary' => '查询短信签名列表详情，分页获取短信签名列表。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '展示第几页的签名信息。默认取值为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'minLength' => 1,
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页展示的签名条数。取值范围：**1~50**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '50',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
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
                                'example' => '819BE656-D2E0-4858-8B21-B2E47708****',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .' '."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'SmsSignList' => [
                                'description' => '结果列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '结果列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'SignName' => [
                                            'description' => '签名名称。',
                                            'type' => 'string',
                                            'example' => '阿里云',
                                        ],
                                        'AuditStatus' => [
                                            'description' => '签名审批状态。取值：'."\n"
                                                ."\n"
                                                .'- **AUDIT_STATE_INIT**：审核中。'."\n"
                                                ."\n"
                                                .'- **AUDIT_STATE_PASS**：审核通过。'."\n"
                                                ."\n"
                                                .'- **AUDIT_STATE_NOT_PASS**：审核未通过，请在返回参数Reason中查看审核未通过原因。'."\n"
                                                ."\n"
                                                .'- **AUDIT_STATE_CANCEL**：取消审核。',
                                            'type' => 'string',
                                            'example' => 'AUDIT_STATE_NOT_PASS',
                                        ],
                                        'CreateDate' => [
                                            'description' => '短信签名的创建日期和时间，格式为yyyy-MM-dd HH:mm:ss。',
                                            'type' => 'string',
                                            'example' => '2020-01-08 16:44:13',
                                        ],
                                        'Reason' => [
                                            'description' => '审核备注。'."\n"
                                                ."\n"
                                                .'- 如果审核状态为**审核通过**或**审核中**，参数Reason显示为“无审核备注”。'."\n"
                                                ."\n"
                                                .'- 如果审核状态为**审核未通过**，参数Reason显示审核的具体原因。',
                                            'type' => 'object',
                                            'properties' => [
                                                'RejectSubInfo' => [
                                                    'description' => '审批未通过的备注信息。',
                                                    'type' => 'string',
                                                    'example' => '文件不能证明信息真实性，请重新上传。',
                                                ],
                                                'RejectDate' => [
                                                    'description' => '审批未通过的时间，格式为yyyy-MM-dd HH:mm:ss。',
                                                    'type' => 'string',
                                                    'example' => '2020-01-08 19:02:13',
                                                ],
                                                'RejectInfo' => [
                                                    'description' => '审批未通过的原因。',
                                                    'type' => 'string',
                                                    'example' => '文件不能证明信息真实性，请重新上传。',
                                                ],
                                            ],
                                        ],
                                        'BusinessType' => [
                                            'description' => '签名场景类型。返回值以”类型“结尾。取值：'."\n"
                                                ."\n"
                                                .'- 验证码类型。'."\n"
                                                ."\n"
                                                .'- 通用类型。',
                                            'type' => 'string',
                                            'example' => '验证码类型',
                                        ],
                                        'OrderId' => [
                                            'description' => '工单ID。',
                                            'type' => 'string',
                                            'example' => '236****5',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '签名总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'CurrentPage' => [
                                'description' => '页码。默认取值为**1**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页展示的签名条数。取值范围：**1~50**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"819BE656-D2E0-4858-8B21-B2E47708****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"SmsSignList\\": [\\n    {\\n      \\"SignName\\": \\"阿里云\\",\\n      \\"AuditStatus\\": \\"AUDIT_STATE_NOT_PASS\\",\\n      \\"CreateDate\\": \\"2020-01-08 16:44:13\\",\\n      \\"Reason\\": {\\n        \\"RejectSubInfo\\": \\"文件不能证明信息真实性，请重新上传。\\",\\n        \\"RejectDate\\": \\"2020-01-08 19:02:13\\",\\n        \\"RejectInfo\\": \\"文件不能证明信息真实性，请重新上传。\\"\\n      },\\n      \\"BusinessType\\": \\"验证码类型\\",\\n      \\"OrderId\\": \\"236****5\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 100,\\n  \\"CurrentPage\\": 1,\\n  \\"PageSize\\": 10\\n}","errorExample":""},{"type":"xml","example":"<QuerySmsSignListResponse>\\n    <RequestId>819BE656-D2E0-4858-8B21-B2E47708****</RequestId>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <SmsSignList>\\n        <SignName>阿里云</SignName>\\n        <AuditStatus>AUDIT_STATE_NOT_PASS</AuditStatus>\\n        <CreateDate>2020-01-08 16:44:13</CreateDate>\\n        <Reason>\\n            <RejectSubInfo>文件不能证明信息真实性，请重新上传。</RejectSubInfo>\\n            <RejectDate>2020-01-08 19:02:13</RejectDate>\\n            <RejectInfo>文件不能证明信息真实性，请重新上传。</RejectInfo>\\n        </Reason>\\n        <BusinessType>验证码类型</BusinessType>\\n        <OrderId>236****5</OrderId>\\n    </SmsSignList>\\n</QuerySmsSignListResponse>","errorExample":""}]',
            'title' => '查询短信签名列表',
            'description' => '可以通过本接口查询短信签名列表详情，包括签名名称、创建时间、签名审核状态等。如果审核未通过，会返回审核失败的原因，请针对具体原因重新修改短信签名。',
        ],
        'QuerySmsSign' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'SignName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名名称。必须是本账号已申请的短信签名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '阿里云',
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
                                'example' => 'CC89A90C-978F-46AC-B80D-54738371E7CA',
                            ],
                            'SignStatus' => [
                                'description' => '签名审核状态。取值：'."\n"
                                    ."\n"
                                    .'- **0**：审核中。'."\n"
                                    .'- **1**：审核通过。'."\n"
                                    .'- **2**：审核失败，请在返回参数Reason中查看审核失败原因。'."\n"
                                    .'- **10**：取消审核。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[错误码列表](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'CreateDate' => [
                                'description' => '短信签名的创建日期和时间。',
                                'type' => 'string',
                                'example' => ' 2019-01-08 16:44:13',
                            ],
                            'Reason' => [
                                'description' => '审核备注。'."\n"
                                    ."\n"
                                    .'- 如果审核状态为**审核通过**或**审核中**，参数Reason显示为“无审核备注”。'."\n"
                                    .'- 如果审核状态为**审核未通过**，参数Reason显示审核的具体原因。',
                                'type' => 'string',
                                'example' => '文件不能证明信息真实性，请重新上传',
                            ],
                            'SignName' => [
                                'description' => '短信签名。',
                                'type' => 'string',
                                'example' => '阿里云',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CC89A90C-978F-46AC-B80D-54738371E7CA\\",\\n  \\"SignStatus\\": 1,\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"CreateDate\\": \\" 2019-01-08 16:44:13\\",\\n  \\"Reason\\": \\"文件不能证明信息真实性，请重新上传\\",\\n  \\"SignName\\": \\"阿里云\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\r\\n<QuerySmsSignResponse>\\r\\n\\t<Message>OK</Message>\\r\\n\\t<RequestId>CC89A90C-978F-46AC-B80D-54738371E7CA</RequestId>\\r\\n\\t<SignStatus>1</SignStatus>\\r\\n\\t<CreateDate>2019-01-08 16:44:13</CreateDate>\\r\\n\\t<Code>OK</Code>\\r\\n\\t<SignName>阿里云</SignName>\\r\\n\\t<Reason>文件不能证明信息真实性，请重新上传</Reason>\\r\\n</QuerySmsSignResponse>","errorExample":""}]',
            'title' => '查询签名审核状态',
            'summary' => '查询短信签名审核进度。一般情况下，签名提交后，阿里云预计在2个小时内审核完成（审核工作时间：周一至周日9:00~21:00，法定节假日顺延），建议您尽量在18:00前提交申请。',
            'description' => '申请短信签名后，您可以在[短信服务控制台](https://dysms.console.aliyun.com/dysms.htm)或通过本接口查看短信签名的申请状态。如果未通过审核，接口会返回未通过审核的原因，请针对具体原因修改签名并重新提交审核。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateSmsSign' => [
            'summary' => '短信签名作为短信发送方的一种标识，发送短信前，您需要先申请签名和模板，系统会将已审核通过的短信签名添加到短信内容的开头，并与短信内容一起发送给接收方。',
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
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '218492',
                'abilityTreeNodes' => [
                    'FEATUREdysmsJ2BZAJ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'SignName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名名称，签名名称请遵守[签名规范](https://help.aliyun.com/zh/sms/user-guide/signature-specifications-1?spm=a2c4g.11186623.0.0.4f9710fder2gR7#section-0p8-qn8-mmy)。'."\n"
                            ."\n"
                            .'> - 签名名称不区分大小写字母，如【Aliyun通信】和【aliyun通信】视为名称相同。'."\n"
                            .'> - 当您的验证码签名和通用签名名称相同时，系统默认使用通用签名发送短信。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '阿里云验证码',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信签名场景说明，长度不超过200个字符。'."\n"
                            ."\n"
                            .'> 场景说明是签名审核的参考信息之一。请详细描述已上线业务的使用场景，并提供可以验证这些业务的网站链接、已备案域名地址、应用市场下载链接、公众号或小程序全称等信息。对于登录场景，还需提供测试账号密码。信息完善的申请说明会提高签名、模板的审核效率。短信场景填写可参考[签名来源](https://help.aliyun.com/zh/sms/user-guide/signature-specifications-1?spm=a2c4g.11186623.0.i2#section-xup-k46-yi4)表格中**应用场景**的填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '登录场景使用验证码',
                        'maxLength' => 500,
                    ],
                ],
                [
                    'name' => 'SignType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名类型。取值：'."\n"
                            ."\n"
                            .'- **0**：验证码'."\n"
                            ."\n"
                            .'- **1**：通用（默认值）'."\n"
                            ."\n"
                            .'>建议使用默认值：**通用**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'MoreData',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '更多资料，补充上传业务证明文件或业务截图，有助于审核人员了解您的业务详情。'."\n"
                            ."\n"
                            .'此参数非必填，请您根据实际需要填写。',
                        'type' => 'array',
                        'items' => [
                            'description' => '上传到OSS上的文件信息。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '10098689758*****/1234qwe.png',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'QualificationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资质ID。'."\n"
                            ."\n"
                            .'请在[资质管理](https://dysms.console.aliyun.com/domestic/text/qualification)页面查看资质ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '2004393*****',
                    ],
                ],
                [
                    'name' => 'ApplySceneContent',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用场景，填写说明如下：'."\n"
                            .'- 已备案网站，请填写带有HTTP或HTTPS的工信部备案的网站域名。'."\n"
                            ."\n"
                            .'- 已上线APP，请填写带有HTTP或HTTPS的应用商店的展示链接，并确保App已经上线。'."\n"
                            ."\n"
                            .'- 公众号或小程序，请填写公众号或小程序全称，并确保公众号或小程序已上线。'."\n"
                            ."\n"
                            .'- 电商平台店铺名，仅适用于企业用户，请填写带有HTTP或HTTPS的电商铺的展示链接。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://www.aliyun.com/',
                    ],
                ],
                [
                    'name' => 'SignSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名来源。取值：'."\n"
                            ."\n"
                            .'-  **0**：企事业单位的全称或简称。'."\n"
                            .'-  **1**：工信部备案网站的全称或简称。'."\n"
                            .'-  **2**：App应用的全称或简称。'."\n"
                            .'-  **3**：公众号或小程序的全称或简称。'."\n"
                            .'-  **4**：电商平台店铺名的全称或简称。'."\n"
                            .'-  **5**：商标名的全称或简称。'."\n"
                            ."\n"
                            .'签名来源的详细说明请参见[签名来源](https://help.aliyun.com/zh/sms/user-guide/signature-specifications-1?spm=a2c4g.11186623.0.0.4f9710fder2gR7#section-xup-k46-yi4)。'."\n"
                            ."\n"
                            .'>此接口不支持申请签名来源是**测试或学习**和**线上试用**的签名，如果您需要申请这两种签名来源的签名，请前往[短信服务控制台](https://dysms.console.aliyun.com/domestic/text/sign/add/qualification)申请。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                        'enum' => [
                            '0',
                            '1',
                            '2',
                            '3',
                            '4',
                            '5',
                        ],
                    ],
                ],
                [
                    'name' => 'ThirdParty',
                    'in' => 'query',
                    'schema' => [
                        'description' => '选择申请的签名为自用或他用。'."\n"
                            ."\n"
                            .'- false：自用（默认值）'."\n"
                            ."\n"
                            .'- true：他用'."\n"
                            .'><notice>签名为自用时，请选择自用资质ID；签名为他用时，请选择他用资质ID。></notice>',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'CCA2BCFF-2BA7-427C-90EE-AC6994748607',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'SignName' => [
                                'description' => '签名名称。',
                                'type' => 'string',
                                'example' => '阿里云验证码',
                            ],
                            'OrderId' => [
                                'description' => '工单号。'."\n"
                                    ."\n"
                                    .'审核人员查询审核时会用到此参数。您需要审核加急时需要提供此工单号。',
                                'type' => 'string',
                                'example' => '2004415****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenAction',
                        'errorMessage' => 'Access to the account is denied. Please contact the administrator.',
                    ],
                    [
                        'errorCode' => 'ParameterMismatch.ThirdParty',
                        'errorMessage' => 'The type of signature, whether for personal use or for a third party, should be consistent with the qualifications.',
                    ],
                    [
                        'errorCode' => 'SignName.Exists',
                        'errorMessage' => 'Sorry, this signature already exists and cannot be applied for again.',
                    ],
                    [
                        'errorCode' => 'InvalidQualification',
                        'errorMessage' => 'The qualification should be approved.',
                    ],
                    [
                        'errorCode' => 'InvalidSignName',
                        'errorMessage' => 'The signature cannot contain spaces, special '."\n"
                            .'symbols, or all numbers.',
                    ],
                    [
                        'errorCode' => 'InvalidApplySceneContent',
                        'errorMessage' => 'For certain signature sources, the '."\n"
                            .'applySceneContent should be an HTTP or HTTPS link.',
                    ],
                    [
                        'errorCode' => 'MissApplySceneContent',
                        'errorMessage' => 'In some signature sources, the applySceneContent is required.',
                    ],
                    [
                        'errorCode' => 'MissingSignName',
                        'errorMessage' => 'The signature name cannot be empty.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'QualificationNotFound',
                        'errorMessage' => 'Qualification does not exist.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CCA2BCFF-2BA7-427C-90EE-AC6994748607\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"SignName\\": \\"阿里云验证码\\",\\n  \\"OrderId\\": \\"2004415****\\"\\n}","type":"json"}]',
            'title' => '申请短信签名（新接口）',
            'description' => '- 新接口和原接口变更的公告详情请参见[关于短信服务更新签名&模板接口的公告](https://help.aliyun.com/zh/sms/product-overview/announcement-on-sms-service-update-signature-template-interface )。'."\n"
                ."\n"
                .'- 个人认证用户，同一个阿里云账号一个自然日支持申请一个正式签名，企业认证用户，目前无限制。个人用户与企业用户权益区别详情请参见[使用须知](https://help.aliyun.com/zh/sms/user-guide/usage-notes?spm)。'."\n"
                ."\n"
                .'- 通过接口申请的签名信息会同步在短信服务控制台，在控制台对签名的相关操作，请参见[短信签名](https://help.aliyun.com/zh/sms/user-guide/create-signatures?spm)。'."\n"
                ."\n"
                .'- 提交签名申请后，您可以通过[GetSmsSign](https://help.aliyun.com/zh/sms/developer-reference/api-dysmsapi-2017-05-25-getsmssign?spm)接口查询签名审核状态和详情。也可以[配置回执消息](https://help.aliyun.com/zh/sms/developer-reference/configure-delivery-receipts-1?spm)，通过SignSmsReport获取签名的审核状态消息。',
        ],
        'UpdateSmsSign' => [
            'summary' => '修改未通过审核的签名，修改后请重新提交审核。',
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
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '219280',
                'abilityTreeNodes' => [
                    'FEATUREdysmsJ2BZAJ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'SignName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '未审核通的签名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '阿里云验证码',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信签名场景说明，长度不超过200个字符。'."\n"
                            ."\n"
                            .'> 场景说明是签名审核的参考信息之一。请详细描述已上线业务的使用场景，并提供可以验证这些业务的网站链接、已备案域名地址、应用市场下载链接、公众号或小程序全称等信息。对于登录场景，还需提供测试账号密码。信息完善的申请说明会提高签名、模板的审核效率。短信场景填写可参考[签名来源](https://help.aliyun.com/zh/sms/user-guide/signature-specifications-1?spm=a2c4g.11186623.0.i2#section-xup-k46-yi4)表格中**应用场景**的填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '登录场景申请验证码',
                        'maxLength' => 500,
                    ],
                ],
                [
                    'name' => 'SignType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名类型。建议使用默认值。'."\n"
                            ."\n"
                            .'- **0**：验证码'."\n"
                            .'- **1**：通用（默认值）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'MoreData',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '更多资料，补充上传业务证明文件或业务截图，有助于审核人员了解您的业务详情。',
                        'type' => 'array',
                        'items' => [
                            'description' => '上传到OSS上的文件信息。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '10098689758*****/1234qwe.png'."\n",
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'QualificationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资质ID。可在[资质管理](https://dysms.console.aliyun.com/domestic/text/qualification)页查看资质ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '8563**',
                    ],
                ],
                [
                    'name' => 'ApplySceneContent',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用场景，填写说明如下：'."\n"
                            .'- 已备案网站，请填写带有HTTP或HTTPS的工信部备案的网站域名。'."\n"
                            ."\n"
                            .'- 已上线APP，请填写带有HTTP或HTTPS的应用商店的展示链接，并确保App已经上线。'."\n"
                            ."\n"
                            .'- 公众号或小程序，请填写公众号或小程序全称，并确保公众号或小程序已上线。'."\n"
                            ."\n"
                            .'- 电商平台店铺名，仅适用于企业用户，请填写带有HTTP或HTTPS的电商铺的展示链接。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://www.aliyun.com/'."\n",
                    ],
                ],
                [
                    'name' => 'SignSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名来源。取值：'."\n"
                            ."\n"
                            .'-  **0**：企事业单位的全称或简称。'."\n"
                            .'-  **1**：工信部备案网站的全称或简称。'."\n"
                            .'-  **2**：App应用的全称或简称。'."\n"
                            .'-  **3**：公众号或小程序的全称或简称。'."\n"
                            .'-  **4**：电商平台店铺名的全称或简称。'."\n"
                            .'-  **5**：商标名的全称或简称。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                        'enum' => [
                            '0',
                            '1',
                            '2',
                            '3',
                            '4',
                            '5',
                        ],
                    ],
                ],
                [
                    'name' => 'ThirdParty',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名为自或他用。'."\n"
                            ."\n"
                            .'- false：自用'."\n"
                            ."\n"
                            .'- true：他用'."\n"
                            .'><notice>签名为自用时，请选择自用资质ID；签名为他用时，请选择他用资质ID。></notice>',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'A90E4451-FED7-49D2-87C8-00700A8C4D0D',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[错误码列表](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'SignName' => [
                                'description' => '已修改的签名名称。',
                                'type' => 'string',
                                'example' => '登录验证',
                            ],
                            'OrderId' => [
                                'description' => '工单号。'."\n"
                                    ."\n"
                                    .'审核人员查询审核时会用到此参数。您需要审核加急时需要提供此工单号。',
                                'type' => 'string',
                                'example' => '2004417****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenAction',
                        'errorMessage' => 'Access to the account is denied. Please contact the administrator.',
                    ],
                    [
                        'errorCode' => 'ParameterMismatch.ThirdParty',
                        'errorMessage' => 'The type of signature, whether for personal use or for a third party, should be consistent with the qualifications.',
                    ],
                    [
                        'errorCode' => 'SignName.Exists',
                        'errorMessage' => 'Sorry, this signature already exists and cannot be applied for again.',
                    ],
                    [
                        'errorCode' => 'InvalidQualification',
                        'errorMessage' => 'The qualification should be approved.',
                    ],
                    [
                        'errorCode' => 'InvalidApplySceneContent',
                        'errorMessage' => 'For certain signature sources, the '."\n"
                            .'applySceneContent should be an HTTP or HTTPS link.',
                    ],
                    [
                        'errorCode' => 'InvalidSignName',
                        'errorMessage' => 'The signature cannot contain spaces, special '."\n"
                            .'symbols, or all numbers.',
                    ],
                    [
                        'errorCode' => 'MissApplySceneContent',
                        'errorMessage' => 'In some signature sources, the applySceneContent is required.',
                    ],
                    [
                        'errorCode' => 'MissingSignName',
                        'errorMessage' => 'The signature name cannot be empty.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'QualificationNotFound',
                        'errorMessage' => 'Qualification does not exist.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A90E4451-FED7-49D2-87C8-00700A8C4D0D\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"SignName\\": \\"登录验证\\",\\n  \\"OrderId\\": \\"2004417****\\"\\n}","type":"json"}]',
            'title' => '修改短信签名（新接口）',
            'description' => '- 新接口和原接口变更的公告详情请参见[关于短信服务更新签名&模板接口的公告](https://help.aliyun.com/zh/sms/product-overview/announcement-on-sms-service-update-signature-template-interface )。'."\n"
                .'- 仅支持修改未通过审核的模板，请参考[短信审核失败的处理建议](https://help.aliyun.com/zh/sms/user-guide/causes-of-application-failures-and-suggestions?spm)，调用此接口修改后重新提交审核。'."\n"
                .'- 通过接口申请的签名信息会同步在短信服务控制台，在控制台对签名的相关操作，请参见[短信签名](https://help.aliyun.com/zh/sms/user-guide/create-signatures?spm)。',
        ],
        'GetSmsSign' => [
            'summary' => '申请签名后，通过此接口查询签名审核详情。',
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
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '218493',
                'abilityTreeNodes' => [
                    'FEATUREdysmsJ2BZAJ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'SignName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名名称。必须是本账号已申请的短信签名。'."\n"
                            ."\n"
                            .'- 调用[CreateSmsSign](https://help.aliyun.com/zh/sms/developer-reference/api-dysmsapi-2017-05-25-createsmssign?spm)接口后在返回参数中获取。'."\n"
                            .'- 在[签名管理](https://dysms.console.aliyun.com/domestic/text/sign)页面查看签名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '登录验证',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'F655A8D5-B967-440B-8683-DAD6FF8DE990',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[API错误码](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'SignName' => [
                                'description' => '短信签名名称。',
                                'type' => 'string',
                                'example' => '登录验证',
                            ],
                            'SignStatus' => [
                                'description' => '签名审核状态。取值：'."\n"
                                    ."\n"
                                    .'- **0**：审核中。'."\n"
                                    .'- **1**：审核通过。'."\n"
                                    .'- **2**：审核失败，请在返回参数Reason中查看审核失败原因。'."\n"
                                    .'- **10**：取消审核。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                            ],
                            'CreateDate' => [
                                'description' => '短信签名的创建日期和时间。',
                                'type' => 'string',
                                'example' => '2024-06-03 10:02:34',
                            ],
                            'OrderId' => [
                                'description' => '工单号。'."\n"
                                    ."\n"
                                    .'审核人员查询审核时会用到此参数。您需要审核加急时需要提供此工单号。',
                                'type' => 'string',
                                'example' => '20044156924',
                            ],
                            'QualificationId' => [
                                'description' => '资质ID，申请签名时关联的资质ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2004393****',
                            ],
                            'Remark' => [
                                'description' => '短信签名场景说明，长度不超过200个字符。',
                                'type' => 'string',
                                'example' => '登录场景验证码',
                            ],
                            'AuditInfo' => [
                                'description' => '审核信息。',
                                'type' => 'object',
                                'properties' => [
                                    'RejectInfo' => [
                                        'description' => '审批未通过的原因。',
                                        'type' => 'string',
                                        'example' => '通过资质信息，不能判断是否可以申请此签名。',
                                    ],
                                    'AuditDate' => [
                                        'description' => '审核时间。',
                                        'type' => 'string',
                                        'example' => '2024-06-03 12:02:34'."\n",
                                    ],
                                ],
                            ],
                            'FileUrlList' => [
                                'description' => '更多资料信息，补充上传业务证明文件或业务截图文件列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '上传到OSS上的文件信息。',
                                    'type' => 'string',
                                    'example' => '10098689758*****/1234qwe.png'."\n",
                                ],
                            ],
                            'SignCode' => [
                                'description' => '短信签名Code。',
                                'type' => 'string',
                                'example' => 'SIGN_100000077042023_17174665*****_ZM2kG',
                            ],
                            'SignTag' => [
                                'description' => '签名标识，标识签名是用户自定义创建、系统赠送或测试签名等。取值：'."\n"
                                    ."\n"
                                    .'- 2：用户自定义创建签名'."\n"
                                    .'- 3：系统赠送签名'."\n"
                                    .'- 4：测试签名'."\n"
                                    .'- 5：试用签名',
                                'type' => 'string',
                                'example' => '2',
                            ],
                            'ApplyScene' => [
                                'description' => '应用场景内容。',
                                'type' => 'string',
                                'example' => 'http://www.aliyun.com/'."\n",
                            ],
                            'ThirdParty' => [
                                'description' => '签名为自用或他用。'."\n"
                                    ."\n"
                                    .'- false：自用（默认值）'."\n"
                                    ."\n"
                                    .'- true：他用',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'SignUsage' => [
                                'description' => '签名使用场景。',
                                'type' => 'string',
                                'example' => '电商平台店铺名。',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenAction',
                        'errorMessage' => 'Access to the account is denied. Please contact the administrator.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'SignatureNotFound',
                        'errorMessage' => 'The signature does not exist.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F655A8D5-B967-440B-8683-DAD6FF8DE990\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"SignName\\": \\"登录验证\\",\\n  \\"SignStatus\\": 2,\\n  \\"CreateDate\\": \\"2024-06-03 10:02:34\\",\\n  \\"OrderId\\": \\"20044156924\\",\\n  \\"QualificationId\\": 0,\\n  \\"Remark\\": \\"登录场景验证码\\",\\n  \\"AuditInfo\\": {\\n    \\"RejectInfo\\": \\"通过资质信息，不能判断是否可以申请此签名。\\",\\n    \\"AuditDate\\": \\"2024-06-03 12:02:34\\\\n\\"\\n  },\\n  \\"FileUrlList\\": [\\n    \\"10098689758*****/1234qwe.png\\\\n\\"\\n  ],\\n  \\"SignCode\\": \\"SIGN_100000077042023_17174665*****_ZM2kG\\",\\n  \\"SignTag\\": \\"2\\",\\n  \\"ApplyScene\\": \\"http://www.aliyun.com/\\\\n\\",\\n  \\"ThirdParty\\": false,\\n  \\"SignUsage\\": \\"电商平台店铺名。\\"\\n}","type":"json"}]',
            'title' => '查询签名详情（新接口）',
            'description' => '- 新接口和原接口变更的公告详情请参见[关于短信服务更新签名&模板接口的公告](https://help.aliyun.com/zh/sms/product-overview/announcement-on-sms-service-update-signature-template-interface )。'."\n"
                ."\n"
                .'- 审核时间：一般情况下，签名提交后，阿里云预计在 2 个小时内审核完成（审核工作时间：周一至周日 9:00~21:00，法定节假日顺延），建议您尽量在 18:00前提交申请。'."\n"
                ."\n"
                .'- 如果签名未通过审核，会返回审核失败的原因，请参考[短信审核失败的处理建议](https://help.aliyun.com/zh/sms/user-guide/causes-of-application-failures-and-suggestions?spm)，调用[UpdateSmsSign](https://help.aliyun.com/zh/sms/developer-reference/api-dysmsapi-2017-05-25-updatesmssign?spm)接口或在[签名管理](https://dysms.console.aliyun.com/domestic/text/sign)页面修改未审核通过的短信签名。',
        ],
        'AddSmsTemplate' => [
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
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'TemplateType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信类型。取值：'."\n"
                            ."\n"
                            .'- **0**：验证码。'."\n"
                            .'- **1**：短信通知。'."\n"
                            .'- **2**：推广短信。'."\n"
                            .'- **3**：国际/港澳台消息。'."\n"
                            ."\n"
                            .'> 仅支持企业认证用户申请推广短信和国际/港澳台消息。个人用户与企业用户权益区别详情请参见[使用须知](https://help.aliyun.com/zh/sms/user-guide/usage-notes?spm=a2c4g.11186623.0.0.67447f576NJnE8)。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板名称，长度不超过30个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '验证码',
                    ],
                ],
                [
                    'name' => 'TemplateContent',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板内容，长度不超过500个字符。'."\n"
                            ."\n"
                            .'模板内容和变量内容必须符合[短信规范](https://help.aliyun.com/zh/sms/user-guide/message-template-specifications/?spm=a2c4g.11186623.0.0.2fa35bceYWIYYG)，否则模板会审核失败。您也可以在[申请模板](https://dysms.console.aliyun.com/domestic/text/template/add)页面，查看常用模板示例。使用示例模板可提高审核效率和成功率。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '您正在申请手机注册，验证码为：${code}，5分钟内有效！',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信模板申请说明，长度不超过100个字符。'."\n"
                            ."\n"
                            .'模板审核的参考信息，完善申请说明有助于审核人员理解您的业务场景，提高审核效率。填写指导：'."\n"
                            ."\n"
                            .'- 您可以提供已上线业务的使用场景。'."\n"
                            .'- 您可以提供真实场景的短信示例，体现您的业务场景。'."\n"
                            .'- 您可以提供变量的传参内容，详细描述业务使用场景和选择这个变量属性的原因。'."\n"
                            .'- 您可以提供实际业务的网站链接、已备案的域名地址、应用市场下载链接等。'."\n"
                            .'- 登录场景，您可以提供测试账号和密码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '申请验证码短信',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[API错误码](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F655A8D5-B967-440B-8683-DAD6FF8DE990',
                            ],
                            'TemplateCode' => [
                                'description' => '短信模板Code。'."\n"
                                    ."\n"
                                    .'提交模板申请后，您可以使用短信模板Code，通过[QuerySmsTemplate](~~419289~~)接口查询模板审核详情。也可以[配置回执消息](https://help.aliyun.com/zh/sms/developer-reference/configure-delivery-receipts-1?spm=a2c4g.11186623.0.0.4c5a2b2a3ThSM8)，通过TemplateSmsReport获取模板的审核状态消息。',
                                'type' => 'string',
                                'example' => 'SMS_46817****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'TemplateParameterCountIllegal',
                        'errorMessage' => 'The verification code template only supports 1 verification code as a variable',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"F655A8D5-B967-440B-8683-DAD6FF8DE990\\",\\n  \\"TemplateCode\\": \\"SMS_46817****\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\r\\n<AddSmsTemplateResponse>\\r\\n    <TemplateCode>SMS_1525****</TemplateCode>\\r\\n    <Message>OK</Message>\\r\\n    <RequestId>F655A8D5-B967-440B-8683-DAD6FF8DE990</RequestId>\\r\\n    <Code>OK</Code>\\r\\n</AddSmsTemplateResponse>","errorExample":""}]',
            'title' => '申请短信模板',
            'summary' => '短信模板即接收方收到短信的详细内容，包括变量和模板内容。您可以根据业务需要，申请验证码、通知短信或推广短信，模板审核通过后才可以发送短信。',
            'description' => '- 通过接口申请短信模板，一个自然日最多可以提交100次短信模板申请。建议每次申请至少间隔30秒。通过[控制台](https://dysms.console.aliyun.com/domestic/text/template)申请短信模板，提交次数无限制。'."\n"
                ."\n"
                .'- 通过接口申请的模板信息会同步在短信服务控制台，在控制台对模板的相关操作，请参见[短信模板](https://help.aliyun.com/zh/sms/user-guide/message-templates/?spm=a2c4g.11186623.0.0.2d01339fHJkuEP)。'."\n"
                ."\n"
                .'- 提交模板申请后，您可以通过[QuerySmsTemplate](~~419289~~)接口查询模板审核状态和详情。也可以[配置回执消息](https://help.aliyun.com/zh/sms/developer-reference/configure-delivery-receipts-1?spm=a2c4g.11186623.0.0.4c5a2b2a3ThSM8)，通过TemplateSmsReport获取模板的审核状态消息。'."\n"
                ."\n"
                .'- 国内短信模板与国际/港澳台短信模板不通用（不能混用），请根据业务使用场景申请模板。'."\n"
                ."\n"
                .'- 仅支持企业认证用户申请推广短信和国际/港澳台消息，个人用户与企业用户权益区别详情请参见[使用须知](https://help.aliyun.com/zh/sms/user-guide/usage-notes?spm=a2c4g.11186623.0.0.67447f576NJnE8)。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QuerySmsTemplate' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'TemplateCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信模板CODE。'."\n"
                            .'- 在[AddSmsTemplate](~~121208~~)接口的返回参数中获取短信模板Code。'."\n"
                            .'- 在[模板管理](https://dysms.console.aliyun.com/domestic/text/template)页面查看短信模板Code。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'SMS_1525****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TemplateContent' => [
                                'description' => '短信模板内容。',
                                'type' => 'string',
                                'example' => '亲爱的会员！阿里云短信服务祝您新年快乐！',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0A974B78-02BF-4C79-ADF3-90CFBA1B55B1',
                            ],
                            'TemplateCode' => [
                                'description' => '短信模板Code。',
                                'type' => 'string',
                                'example' => 'SMS_1525****',
                            ],
                            'TemplateStatus' => [
                                'description' => '模板审核状态。返回值：'."\n"
                                    ."\n"
                                    .'- **0**：审核中。'."\n"
                                    .'- **1**：通过审核。'."\n"
                                    .'- **2**：未通过审核，会返回审核失败的原因，请参考[短信审核失败的处理建议](https://help.aliyun.com/zh/sms/user-guide/causes-of-application-failures-and-suggestions?spm=a2c4g.11186623.0.0.41fd339f3bPSCQ)，调用[ModifySmsTemplate](https://help.aliyun.com/zh/sms/developer-reference/api-dysmsapi-2017-05-25-modifysmstemplate?spm=a2c4g.11186623.0.0.5b1f6e8bQloFit)接口或在[模板管理](https://dysms.console.aliyun.com/domestic/text/template)页面修改短信模板。'."\n"
                                    .'- **10**：取消审核。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'TemplateType' => [
                                'description' => '短信类型。返回值：'."\n"
                                    ."\n"
                                    .'- **0**：验证码。'."\n"
                                    .'- **1**：短信通知。'."\n"
                                    .'- **2**：推广短信。'."\n"
                                    .'- **3**：国际/港澳台消息。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'TemplateName' => [
                                'description' => '短信模板名称。',
                                'type' => 'string',
                                'example' => '通知短信',
                            ],
                            'CreateDate' => [
                                'description' => '创建短信模板的时间。',
                                'type' => 'string',
                                'example' => '2024-06-03 10:02:34',
                            ],
                            'Reason' => [
                                'description' => '模板审核备注。'."\n"
                                    ."\n"
                                    .'- 如果审核状态为**通过审核**或**审核中**，Reason返回“无审批备注”。'."\n"
                                    .'- 如果审核状态为**未通过审核**，Reason返回未审核通过的具体原因。',
                                'type' => 'string',
                                'example' => '无审批备注',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TemplateContent\\": \\"亲爱的会员！阿里云短信服务祝您新年快乐！\\",\\n  \\"RequestId\\": \\"0A974B78-02BF-4C79-ADF3-90CFBA1B55B1\\",\\n  \\"TemplateCode\\": \\"SMS_1525****\\",\\n  \\"TemplateStatus\\": 0,\\n  \\"Code\\": \\"OK\\",\\n  \\"TemplateType\\": 1,\\n  \\"Message\\": \\"OK\\",\\n  \\"TemplateName\\": \\"通知短信\\",\\n  \\"CreateDate\\": \\"2024-06-03 10:02:34\\",\\n  \\"Reason\\": \\"无审批备注\\"\\n}","errorExample":""},{"type":"xml","example":"<QuerySmsTemplateResponse>\\n<TemplateCode>SMS_16703****</TemplateCode>\\n<Message>OK</Message>\\n<RequestId>0A974B78-02BF-4C79-ADF3-90CFBA1B55B1</RequestId>\\n<TemplateContent>亲爱的会员！阿里云短信服务祝您新年快乐！</TemplateContent>\\n<TemplateName>阿里云短信测试模板</TemplateName>\\n<TemplateType>1</TemplateType>\\n<CreateDate>2019-06-04 11:42:17</CreateDate>\\n<Code>OK</Code>\\n<Reason>无审批备注</Reason>\\n<TemplateStatus>1</TemplateStatus>\\n</QuerySmsTemplateResponse>","errorExample":""}]',
            'title' => '查询模板审核状态',
            'summary' => '申请模板后，通过此接口查询模板审核详情。',
            'description' => '- 审核时间：一般情况下，模板提交后，阿里云预计在2个小时内审核完成（审核工作时间：周一至周日9:00~21:00，法定节假日顺延），建议您尽量在18:00前提交申请。'."\n"
                ."\n"
                .'- 如果模板未通过审核，会返回审核失败的原因，请参考[短信审核失败的处理建议](https://help.aliyun.com/zh/sms/user-guide/causes-of-application-failures-and-suggestions?spm=a2c4g.11186623.0.0.41fd339f3bPSCQ)，调用[ModifySmsTemplate](https://help.aliyun.com/zh/sms/developer-reference/api-dysmsapi-2017-05-25-modifysmstemplate?spm=a2c4g.11186623.0.0.5b1f6e8bQloFit)接口或在[模板管理](https://dysms.console.aliyun.com/domestic/text/template)页面修改短信模板。'."\n"
                ."\n"
                .'- QuerySmsTemplate当前接口是通过模板Code查询单个模板的审核详情。[QuerySmsTemplateList](https://help.aliyun.com/zh/sms/developer-reference/api-dysmsapi-2017-05-25-querysmstemplatelist?spm=a2c4g.11186623.0.0.24086e8bO8cFn4)接口可以查询您当前账号下所有模板的模板详情。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QuerySmsTemplateList' => [
            'summary' => '可以通过此接口可以查询您账号下的所有模板，方便您查看模板详情，包括模板审核状态、模板类型、模板内容等。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页码。默认取值为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页显示的模板个数。取值范围：**1~50**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '50',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
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
                                'example' => '819BE656-D2E0-4858-8B21-B2E47708****',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'SmsTemplateList' => [
                                'description' => '结果列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '结果列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'TemplateCode' => [
                                            'description' => '短信模板Code。',
                                            'type' => 'string',
                                            'example' => 'SMS_1525***',
                                        ],
                                        'TemplateName' => [
                                            'description' => '短信模板名称。',
                                            'type' => 'string',
                                            'example' => '验证码模板',
                                        ],
                                        'OuterTemplateType' => [
                                            'description' => '模板类型（对外使用）。返回值：'."\n"
                                                ."\n"
                                                .'- **0**：验证码短信。'."\n"
                                                .'- **1**：通知短信。'."\n"
                                                .'- **2**：推广短信。'."\n"
                                                .'- **3**：国际/港澳台短信。'."\n"
                                                .'- **7**：数字短信。'."\n"
                                                ."\n"
                                                .'> 此处的模板类型必须与AddSmsTemplate、ModifySmsTemplate接口中填写的模板类型参数值保持一致。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'AuditStatus' => [
                                            'description' => '模板审核状态。返回值：'."\n"
                                                ."\n"
                                                .'- **AUDIT_STATE_INIT**：审核中。'."\n"
                                                .'- **AUDIT_STATE_PASS**：通过审核。'."\n"
                                                .'- **AUDIT_STATE_NOT_PASS**：未通过审核，请在返回参数Reason中查看审核未通过原因。'."\n"
                                                .'- **AUDIT_STATE_CANCEL**：取消审核。'."\n"
                                                ."\n"
                                                .'- **AUDIT_SATE_CANCEL**：取消审核。',
                                            'type' => 'string',
                                            'example' => 'AUDIT_STATE_PASS',
                                        ],
                                        'TemplateContent' => [
                                            'description' => '模板内容。',
                                            'type' => 'string',
                                            'example' => '验证码为：${code}，您正在注册成为平台会员，感谢您的支持！',
                                        ],
                                        'CreateDate' => [
                                            'description' => '创建模板的时间，格式为yyyy-MM-dd HH:mm:ss。',
                                            'type' => 'string',
                                            'example' => '2020-06-04 11:42:17',
                                        ],
                                        'Reason' => [
                                            'description' => '审核返回值。',
                                            'type' => 'object',
                                            'properties' => [
                                                'RejectDate' => [
                                                    'description' => '审核未通过的时间，格式为yyyy-MM-dd HH:mm:ss。',
                                                    'type' => 'string',
                                                    'example' => '2020-06-04 16:01:17',
                                                ],
                                                'RejectInfo' => [
                                                    'description' => '审核未通过的原因。',
                                                    'type' => 'string',
                                                    'example' => '变量不符合规范',
                                                ],
                                                'RejectSubInfo' => [
                                                    'description' => '审核未通过的详细说明。',
                                                    'type' => 'string',
                                                    'example' => '变量属性选择错误。'."\n"
                                                        .'请根据业务使用场景选择合适的变量属性。',
                                                ],
                                            ],
                                        ],
                                        'OrderId' => [
                                            'description' => '工单号。'."\n"
                                                ."\n"
                                                .'审核人员查询审核时会用到此参数。您需要审核加急时需要提供此工单号。',
                                            'type' => 'string',
                                            'example' => '2004983****',
                                        ],
                                        'TemplateType' => [
                                            'description' => '模板类型。返回值：'."\n"
                                                ."\n"
                                                .'- **0**：短信通知。'."\n"
                                                .'- **1**：推广短信。'."\n"
                                                .'- **2**：验证码短信。'."\n"
                                                .'- **6**：国际/港澳台短信。'."\n"
                                                .'- **7**：数字短信。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '本次查询到的模板总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'CurrentPage' => [
                                'description' => '当前页码。默认取值为**1**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页显示的模板个数。取值范围：**1~50**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"819BE656-D2E0-4858-8B21-B2E47708****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"SmsTemplateList\\": [\\n    {\\n      \\"TemplateCode\\": \\"SMS_1525***\\",\\n      \\"TemplateName\\": \\"验证码模板\\",\\n      \\"OuterTemplateType\\": 0,\\n      \\"AuditStatus\\": \\"AUDIT_STATE_PASS\\",\\n      \\"TemplateContent\\": \\"验证码为：${code}，您正在注册成为平台会员，感谢您的支持！\\",\\n      \\"CreateDate\\": \\"2020-06-04 11:42:17\\",\\n      \\"Reason\\": {\\n        \\"RejectDate\\": \\"2020-06-04 16:01:17\\",\\n        \\"RejectInfo\\": \\"变量不符合规范\\",\\n        \\"RejectSubInfo\\": \\"变量属性选择错误。\\\\n请根据业务使用场景选择合适的变量属性。\\"\\n      },\\n      \\"OrderId\\": \\"2004983****\\",\\n      \\"TemplateType\\": 2\\n    }\\n  ],\\n  \\"TotalCount\\": 100,\\n  \\"CurrentPage\\": 1,\\n  \\"PageSize\\": 10\\n}","errorExample":""},{"type":"xml","example":"<QuerySmsTemplateListResponse>\\n    <RequestId>819BE656-D2E0-4858-8B21-B2E47708****</RequestId>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <SmsTemplateList>\\n        <TemplateCode>SMS_1525***</TemplateCode>\\n        <TemplateName>阿里云短信测试模板</TemplateName>\\n        <TemplateType>7</TemplateType>\\n        <AuditStatus>AUDIT_STATE_PASS</AuditStatus>\\n        <TemplateContent>123456789</TemplateContent>\\n        <CreateDate>2020-06-04 11:42:17</CreateDate>\\n        <Reason>\\n            <RejectDate>2020-06-04 16:01:17</RejectDate>\\n            <RejectInfo>无审批备注</RejectInfo>\\n            <RejectSubInfo>无审批备注</RejectSubInfo>\\n        </Reason>\\n        <OrderId>2361****</OrderId>\\n    </SmsTemplateList>\\n</QuerySmsTemplateListResponse>","errorExample":""}]',
            'title' => '查询模板列表详情',
            'description' => 'QuerySmsTemplateList本接口可以查询您当前账号下所有模板的模板详情。[QuerySmsTemplate](https://help.aliyun.com/zh/sms/developer-reference/api-dysmsapi-2017-05-25-querysmstemplate?spm=a2c4g.11186623.0.0.1d4c5111sXFt9h)接口是通过模板Code查询单个模板审核详情。',
        ],
        'ModifySmsTemplate' => [
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
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'TemplateType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信类型。取值：'."\n"
                            ."\n"
                            .'- **0**：验证码。'."\n"
                            .'- **1**：短信通知。'."\n"
                            .'- **2**：推广短信。'."\n"
                            .'- **3**：国际/港澳台消息。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板名称，长度限制为1~30个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '验证码模板',
                    ],
                ],
                [
                    'name' => 'TemplateCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '未通过审核的短信模板Code。'."\n"
                            ."\n"
                            .'- 通过[QuerySmsTemplateList](https://help.aliyun.com/zh/sms/developer-reference/api-dysmsapi-2017-05-25-querysmstemplatelist?spm=a2c4g.11186623.0.0.92976e8bjA4ySH)接口获取未通过审核的短信模板Code。'."\n"
                            .'- 在[模板管理](https://dysms.console.aliyun.com/domestic/text/template)页面查看未通过审核的短信模板Code。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'SMS_15255****',
                    ],
                ],
                [
                    'name' => 'TemplateContent',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板内容，长度不超过500个字符。'."\n"
                            ."\n"
                            .'模板内容和变量内容必须符合[短信规范](https://help.aliyun.com/zh/sms/user-guide/message-template-specifications/?spm=a2c4g.11186623.0.0.2fa35bceYWIYYG)，否则模板会审核失败。您也可以在[申请模板](https://dysms.console.aliyun.com/domestic/text/template/add)页面，查看常用模板示例。使用示例模板可提高审核效率和成功率。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '您正在申请手机注册，验证码为：${code}，5分钟内有效！',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信模板申请说明，长度不超过100个字符。'."\n"
                            ."\n"
                            .'模板审核的参考信息，完善申请说明有助于审核人员理解您的业务场景，提高审核效率。填写指导：'."\n"
                            ."\n"
                            .'- 您可以提供已上线业务的使用场景。'."\n"
                            .'- 您可以提供真实场景的短信示例，体现您的业务场景。'."\n"
                            .'- 您可以提供变量的传参内容，详细描述业务使用场景和选择这个变量属性的原因。'."\n"
                            .'- 您可以提供实际业务的网站链接、已备案的域名地址、应用市场下载链接等。'."\n"
                            .'- 登录场景，您可以提供测试账号和密码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '手机注册登录',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F655A8D5-B967-440B-8683-DAD6FF8DE990',
                            ],
                            'TemplateCode' => [
                                'description' => '已修改的模板Code。',
                                'type' => 'string',
                                'example' => 'SMS_15255****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'TemplateParameterCountIllegal',
                        'errorMessage' => 'The verification code template only supports 1 verification code as a variable',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"F655A8D5-B967-440B-8683-DAD6FF8DE990\\",\\n  \\"TemplateCode\\": \\"SMS_15255****\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\r\\n<ModifySmsTemplateResponse>\\r\\n    <TemplateCode>SMS_15255****</TemplateCode>\\r\\n    <Message>OK</Message>\\r\\n    <RequestId>F655A8D5-B967-440B-8683-DAD6FF8DE990</RequestId>\\r\\n    <Code>OK</Code>\\r\\n</ModifySmsTemplateResponse>","errorExample":""}]',
            'title' => '修改短信模板',
            'summary' => '修改未通过审核的模板，修改后请重新提交审核。',
            'description' => '- 仅支持修改未通过审核的模板，请参考[短信审核失败的处理建议](https://help.aliyun.com/zh/sms/user-guide/causes-of-application-failures-and-suggestions?spm=a2c4g.11186623.0.0.4bf5561ajcFtMQ)，调用此接口修改后重新提交审核。'."\n"
                ."\n"
                .'- 通过接口修改模板的操作会在短信服务控制台同步，在控制台对模板的相关操作，请参见[短信模板](https://help.aliyun.com/zh/sms/user-guide/message-templates/?spm=a2c4g.11186623.0.0.35a947464Itaxp)。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteSmsTemplate' => [
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
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'TemplateCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信模板Code。'."\n"
                            ."\n"
                            .'- 通过[QuerySmsTemplateList](https://help.aliyun.com/zh/sms/developer-reference/api-dysmsapi-2017-05-25-querysmstemplatelist?spm=a2c4g.11186623.0.0.92976e8bjA4ySH)接口获取短信模板Code。'."\n"
                            ."\n"
                            .'- 在[模板管理](https://dysms.console.aliyun.com/domestic/text/template)页面获取短信模板Code。'."\n"
                            .'><notice>删除短信模板后不可恢复，请谨慎操作。></notice>',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'SMS_152550****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[API错误码](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CCA2BCFF-2BA7-427C-90EE-AC6994748607',
                            ],
                            'TemplateCode' => [
                                'description' => '已删除的模板Code。',
                                'type' => 'string',
                                'example' => 'SMS_152550****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"CCA2BCFF-2BA7-427C-90EE-AC6994748607\\",\\n  \\"TemplateCode\\": \\"SMS_152550****\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\r\\n<DeleteSmsTemplateResponse>\\r\\n\\t<TemplateCode>SMS_20375****</TemplateCode>\\r\\n\\t<Message>OK</Message>\\r\\n\\t<RequestId>CCA2BCFF-2BA7-427C-90EE-AC6994748607</RequestId>\\r\\n\\t<Code>OK</Code>\\r\\n</DeleteSmsTemplateResponse>","errorExample":""}]',
            'title' => '删除短信模板',
            'summary' => '如果您不再使用某个短信模板，需要删除模板时，调用此接口或在短信服务控制台删除短信模板。',
            'description' => '- 审核中的短信模板不支持删除。'."\n"
                .'- 支持删除已撤回、审核失败或审核通过的模板。'."\n"
                .'- 删除短信模板后不可恢复，请谨慎操作。'."\n"
                .'- 通过接口删除模板的操作会在短信服务控制台同步，在控制台对模板的相关操作，请参见[短信模板](https://help.aliyun.com/zh/sms/user-guide/message-templates/?spm=a2c4g.11186623.0.0.653b5111hW3QUi)。'."\n"
                ."\n\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateSmsTemplate' => [
            'summary' => '短信模板即接收方收到短信的详细内容，包括变量和模板内容。您可以根据业务需要，申请验证码、通知短信或推广短信，模板审核通过后才可以发送短信。',
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
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '218485',
                'abilityTreeNodes' => [
                    'FEATUREdysms2H0K7P',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板名称，长度不超过30个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '验证码',
                        'maxLength' => 30,
                    ],
                ],
                [
                    'name' => 'TemplateContent',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板内容，长度不超过500个字符。'."\n"
                            ."\n"
                            .'模板内容和变量内容必须符合短信规范，否则模板会审核失败。您也可以在申请模板页面，查看常用模板示例。使用示例模板可提高审核效率和成功率。变量规范请参见[TemplateContent参数变量规范](https://help.aliyun.com/zh/sms/templaterule-template-variable-parameter-filling-example)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '您正在申请手机注册，验证码为：${code}，5分钟内有效！'."\n",
                        'maxLength' => 500,
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板审核的参考信息，完善申请说明有助于审核人员理解您的业务场景，提高审核效率。填写指导：'."\n"
                            ."\n"
                            .'- 您可以提供已上线业务的使用场景。'."\n"
                            .'- 您可以提供真实场景的短信示例，体现您的业务场景。'."\n"
                            .'- 您可以提供变量的传参内容，详细描述业务使用场景和选择这个变量属性的原因。'."\n"
                            .'- 您可以提供实际业务的网站链接、已备案的域名地址、应用市场下载链接等。'."\n"
                            ."\n"
                            .'- 登录场景，您可以提供测试账号和密码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '申请验证码短信',
                        'maxLength' => 500,
                    ],
                ],
                [
                    'name' => 'TemplateType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信类型。取值：'."\n"
                            ."\n"
                            .'- **0**：验证码。'."\n"
                            .'- **1**：短信通知。'."\n"
                            .'- **2**：推广短信。'."\n"
                            .'- **3**：国际/港澳台消息。'."\n"
                            ."\n"
                            .'> 仅支持企业认证用户申请推广短信和国际/港澳台消息。个人用户与企业用户权益区别详情请参见[使用须知](https://help.aliyun.com/zh/sms/user-guide/usage-notes?spm=a2c4g.11186623.0.0.67447f576NJnE8)。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0',
                        'enum' => [
                            '0',
                            '1',
                            '2',
                            '3',
                        ],
                    ],
                ],
                [
                    'name' => 'RelatedSignName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板需要关联的签名名称。关联的短信签名必须为审核通过的签名。'."\n"
                            ."\n"
                            .'当TemplateType参数为**0**、**1**、**2**时，此参数必填。'."\n"
                            ."\n"
                            .'<notice>关联签名可以提升审核效率，此处关联的签名和短信发送时选择的签名无关。</notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => '验证码签名',
                    ],
                ],
                [
                    'name' => 'TemplateRule',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板变量规则。'."\n"
                            ."\n"
                            .'变量规则的填写，请参见[示例文档](https://help.aliyun.com/zh/sms/templaterule-template-variable-parameter-filling-example)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"code":"characterWithNumber"}'."\n",
                    ],
                ],
                [
                    'name' => 'MoreData',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '更多资料，您可以补充上传业务证明文件或业务截图，有助于审核人员了解您的业务详情。'."\n"
                            ."\n"
                            .'此参数非必填，请根据实际需要填写。',
                        'type' => 'array',
                        'items' => [
                            'description' => '您上传到OSS上的文件信息。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '10098689758*****/1234qwe.png',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ApplySceneContent',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板应用场景，填写说明如下：'."\n"
                            .'- 已备案网站，请填写带有HTTP或HTTPS的工信部备案的网站域名。'."\n"
                            ."\n"
                            .'- 已上线APP，请填写带有HTTP或HTTPS的应用商店的展示链接，并确保App已经上线。'."\n"
                            ."\n"
                            .'- 公众号或小程序，请填写公众号或小程序全称，并确保公众号或小程序已上线。'."\n"
                            ."\n"
                            .'- 电商平台店铺名，仅适用于企业用户，请填写带有HTTP或HTTPS的电商铺的展示链接。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://www.aliyun.com/'."\n",
                    ],
                ],
                [
                    'name' => 'IntlType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '国际/港澳台模板类型。当**TemplateType**参数为**3**时，国际/港澳台模板需要设置此参数，取值：'."\n"
                            .'- **0**：验证码。'."\n"
                            .'- **1**：短信通知。'."\n"
                            .'- **2**：推广短信。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'F655A8D5-B967-440B-8683-DAD6FF8DE990',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见本章节的**错误码**列表或产品[API错误码](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'TemplateName' => [
                                'description' => '短信模板名称。',
                                'type' => 'string',
                                'example' => '验证码',
                            ],
                            'TemplateCode' => [
                                'description' => '短信模板Code。'."\n"
                                    ."\n"
                                    .'提交模板申请后，您可以使用短信模板Code，通过[GetSmsTemplate](https://help.aliyun.com/zh/sms/developer-reference/api-dysmsapi-2017-05-25-getsmstemplate?)接口查询模板审核详情。也可以[配置回执消息](https://help.aliyun.com/zh/sms/developer-reference/configure-delivery-receipts-1?spm)，通过TemplateSmsReport获取模板的审核状态消息。',
                                'type' => 'string',
                                'example' => 'SMS_10000****',
                            ],
                            'OrderId' => [
                                'description' => '工单ID。'."\n"
                                    ."\n"
                                    .'审核人员查询审核时会用到此参数。您需要审核加急时需要提供此工单号。',
                                'type' => 'string',
                                'example' => '2005020****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenAction',
                        'errorMessage' => 'Access to the account is denied. Please contact the administrator.',
                    ],
                    [
                        'errorCode' => 'AssocSignUnapproved',
                        'errorMessage' => 'Associated signature must be approved.',
                    ],
                    [
                        'errorCode' => 'InvalidTemplateRule.Format',
                        'errorMessage' => 'The parameter TemplateRule format must be JSON.',
                    ],
                    [
                        'errorCode' => 'InvalidMoreData',
                        'errorMessage' => 'Specified parameter MoreData is not valid.',
                    ],
                    [
                        'errorCode' => 'TemplateVarLimitExceeded',
                        'errorMessage' => 'The verification code template only supports one variable.',
                    ],
                    [
                        'errorCode' => 'InvalidTemplateContent.Format',
                        'errorMessage' => 'Invalid template content format.',
                    ],
                    [
                        'errorCode' => 'InvalidTemplateRule',
                        'errorMessage' => 'The template variable format is non-standard. Please refer to the variable format specifications in the help documentation.',
                    ],
                    [
                        'errorCode' => 'ServiceNotOpened',
                        'errorMessage' => 'This product service is not opened.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'MissingTemplateName',
                        'errorMessage' => 'The template  name cannot be empty.',
                    ],
                    [
                        'errorCode' => 'SmsSignatureNotFound',
                        'errorMessage' => 'The associated SMS signature does not exist.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F655A8D5-B967-440B-8683-DAD6FF8DE990\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"TemplateName\\": \\"验证码\\",\\n  \\"TemplateCode\\": \\"SMS_10000****\\",\\n  \\"OrderId\\": \\"2005020****\\"\\n}","type":"json"}]',
            'title' => '申请短信模板（新接口）',
            'description' => '- 新接口和原接口变更的公告详情请参见[关于短信服务更新签名&模板接口的公告](https://help.aliyun.com/zh/sms/product-overview/announcement-on-sms-service-update-signature-template-interface )。'."\n"
                ."\n"
                .'- 通过接口申请短信模板，建议每次申请至少间隔30秒。'."\n"
                ."\n"
                .'- 通过接口申请的模板信息会同步在短信服务控制台，在控制台对模板的相关操作，请参见短信模板。'."\n"
                ."\n"
                .'- 提交模板申请后，您可以通过GetSmsTemplate接口查询模板审核状态和详情。也可以配置回执消息，通过TemplateSmsReport获取模板的审核状态消息。'."\n"
                ."\n"
                .'- 国内短信模板与国际/港澳台短信模板不通用（不能混用），请根据业务使用场景申请模板。'."\n"
                ."\n"
                .'- 仅支持企业认证用户申请推广短信和国际/港澳台消息，个人用户与企业用户权益区别详情请参见使用须知。',
        ],
        'UpdateSmsTemplate' => [
            'summary' => '修改未通过审核的模板，修改后请重新提交审核。',
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
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '219284',
                'abilityTreeNodes' => [
                    'FEATUREdysms2H0K7P',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板名称，长度不超过30个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '验证码',
                        'maxLength' => 30,
                    ],
                ],
                [
                    'name' => 'TemplateCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '未通过审核的模板Code。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'SMS_152550****',
                    ],
                ],
                [
                    'name' => 'TemplateContent',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板内容，长度不超过500个字符。'."\n"
                            ."\n"
                            .'模板内容和变量内容必须符合短信规范，否则模板会审核失败。您也可以在申请模板页面，查看常用模板示例。使用示例模板可提高审核效率和成功率。变量规范请参见[TemplateContent参数变量规范](https://help.aliyun.com/zh/sms/templaterule-template-variable-parameter-filling-example?spm)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '您正在申请手机注册，验证码为：${code}，5分钟内有效！',
                        'maxLength' => 500,
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信模板申请说明，是模板审核的参考信息之一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '登录场景使用验证码',
                        'maxLength' => 500,
                    ],
                ],
                [
                    'name' => 'TemplateType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信类型。取值：'."\n"
                            ."\n"
                            .'- **0**：验证码。'."\n"
                            .'- **1**：短信通知。'."\n"
                            .'- **2**：推广短信。'."\n"
                            .'- **3**：国际/港澳台消息。'."\n"
                            ."\n"
                            .'> 仅支持企业认证用户申请推广短信和国际/港澳台消息。个人用户与企业用户权益区别详情请参见[使用须知](https://help.aliyun.com/zh/sms/user-guide/usage-notes?spm=a2c4g.11186623.0.0.67447f576NJnE8)。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0',
                        'enum' => [
                            '0',
                            '1',
                            '2',
                            '3',
                        ],
                    ],
                ],
                [
                    'name' => 'RelatedSignName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板申请时关联的短信签名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '阿里云',
                    ],
                ],
                [
                    'name' => 'TemplateRule',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板变量规则。'."\n"
                            ."\n"
                            .'变量规则填写请参见[示例文档](https://help.aliyun.com/zh/sms/templaterule-template-variable-parameter-filling-example?spm)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"code":"characterWithNumber"}',
                    ],
                ],
                [
                    'name' => 'MoreData',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '更多资料，补充上传业务证明文件或业务截图，有助于审核人员了解您的业务详情。非必填，可不设置。',
                        'type' => 'array',
                        'items' => [
                            'description' => '上传到OSS上的文件信息。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '10098689758****/1234qwe.png',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ApplySceneContent',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用场景，填写说明如下：'."\n"
                            .'- 已备案网站，请填写带有HTTP或HTTPS的工信部备案的网站域名。'."\n"
                            ."\n"
                            .'- 已上线APP，请填写带有HTTP或HTTPS的应用商店的展示链接，并确保App已经上线。'."\n"
                            ."\n"
                            .'- 公众号或小程序，请填写公众号或小程序全称，并确保公众号或小程序已上线。'."\n"
                            ."\n"
                            .'- 电商平台店铺名，仅适用于企业用户，请填写带有HTTP或HTTPS的电商铺的展示链接。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://www.aliyun.com/'."\n",
                    ],
                ],
                [
                    'name' => 'IntlType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '国际/港澳台模板类型。当**TemplateType**参数为**3**时，国际/港澳台模板需要设置此参数，取值：'."\n"
                            .'- **0**：验证码。'."\n"
                            .'- **1**：短信通知。'."\n"
                            .'- **2**：推广短信。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '819BE656-D2E0-4858-8B21-B2E477085AAF',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见本章节的**错误码**列表或产品[API错误码](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'TemplateName' => [
                                'description' => '短信模板名称。',
                                'type' => 'string',
                                'example' => '验证码',
                            ],
                            'TemplateCode' => [
                                'description' => '短信模板Code。',
                                'type' => 'string',
                                'example' => 'SMS_152550****',
                            ],
                            'OrderId' => [
                                'description' => '工单号。'."\n"
                                    ."\n"
                                    .'审核人员查询审核时会用到此参数。您需要审核加急时需要提供此工单号。',
                                'type' => 'string',
                                'example' => '20041271****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenAction',
                        'errorMessage' => 'Access to the account is denied. Please contact the administrator.',
                    ],
                    [
                        'errorCode' => 'AssocSignUnapproved',
                        'errorMessage' => 'Associated signature must be approved.',
                    ],
                    [
                        'errorCode' => 'InvalidTemplateRule',
                        'errorMessage' => 'The template variable format is non-standard. Please refer to the variable format specifications in the help documentation.',
                    ],
                    [
                        'errorCode' => 'InvalidTemplateRule.Format',
                        'errorMessage' => 'The parameter TemplateRule format must be JSON.',
                    ],
                    [
                        'errorCode' => 'InvalidMoreData',
                        'errorMessage' => 'Specified parameter MoreData is not valid.',
                    ],
                    [
                        'errorCode' => 'TemplateVarLimitExceeded',
                        'errorMessage' => 'The verification code template only supports one variable.',
                    ],
                    [
                        'errorCode' => 'InvalidTemplateContent.Format',
                        'errorMessage' => 'Invalid template content format.',
                    ],
                    [
                        'errorCode' => 'ServiceNotOpened',
                        'errorMessage' => 'This product service is not opened.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'MissingTemplateName',
                        'errorMessage' => 'The template  name cannot be empty.',
                    ],
                    [
                        'errorCode' => 'SmsSignatureNotFound',
                        'errorMessage' => 'The associated SMS signature does not exist.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"819BE656-D2E0-4858-8B21-B2E477085AAF\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"TemplateName\\": \\"验证码\\",\\n  \\"TemplateCode\\": \\"SMS_152550****\\",\\n  \\"OrderId\\": \\"20041271****\\"\\n}","type":"json"}]',
            'title' => '修改短信模板（新接口）',
            'description' => '- 新接口和原接口变更的公告详情请参见[关于短信服务更新签名&模板接口的公告](https://help.aliyun.com/zh/sms/product-overview/announcement-on-sms-service-update-signature-template-interface )。'."\n"
                .'- 仅支持修改未通过审核的模板，请参考[短信审核失败的处理建议](https://help.aliyun.com/zh/sms/user-guide/causes-of-application-failures-and-suggestions?spm=a2c4g.11186623.0.0.4bf5561ajcFtMQ)，调用此接口修改后重新提交审核。'."\n"
                ."\n"
                .'- 通过接口修改模板的操作会在短信服务控制台同步，在控制台对模板的相关操作，请参见[短信模板](https://help.aliyun.com/zh/sms/user-guide/message-templates/?spm=a2c4g.11186623.0.0.35a947464Itaxp)。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'GetSmsTemplate' => [
            'summary' => '申请模板后，通过此接口查询模板审核详情，可查看模板审核状态。',
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
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '217890',
                'abilityTreeNodes' => [
                    'FEATUREdysms2H0K7P',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'TemplateCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信模板Code。'."\n"
                            ."\n"
                            .'- 在[CreateSmsTemplate](https://help.aliyun.com/zh/sms/developer-reference/api-dysmsapi-2017-05-25-createsmstemplate?spm)接口的返回参数中获取短信模板Code。'."\n"
                            .'- 在[模板管理](https://dysms.console.aliyun.com/domestic/text/template)页面查看短信模板Code。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'SMS_20375****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '819BE656-D2E0-4858-8B21-B2E47708****',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[API错误码](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'TemplateName' => [
                                'description' => '短信模板名称。',
                                'type' => 'string',
                                'example' => '验证码',
                            ],
                            'TemplateCode' => [
                                'description' => '短信模板Code。',
                                'type' => 'string',
                                'example' => 'SMS_20375****',
                            ],
                            'TemplateContent' => [
                                'description' => '短信模板内容。',
                                'type' => 'string',
                                'example' => '您正在申请手机注册，验证码为：${code}，5分钟内有效！',
                            ],
                            'TemplateType' => [
                                'description' => '短信类型。取值：'."\n"
                                    ."\n"
                                    .'- **0**：验证码。'."\n"
                                    .'- **1**：短信通知。'."\n"
                                    .'- **2**：推广短信。'."\n"
                                    .'- **3**：国际/港澳台消息。'."\n"
                                    ."\n"
                                    .'> 仅支持企业认证用户申请推广短信和国际/港澳台消息。个人用户与企业用户权益区别详情请参见[使用须知](https://help.aliyun.com/zh/sms/user-guide/usage-notes?spm=a2c4g.11186623.0.0.67447f576NJnE8)。',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'TemplateStatus' => [
                                'description' => '模板审核状态。返回值：'."\n"
                                    ."\n"
                                    .'- **0**：审核中。'."\n"
                                    .'- **1**：通过审核。'."\n"
                                    .'- **2**：未通过审核，会返回审核失败的原因，请参考[短信审核失败的处理建议](https://help.aliyun.com/zh/sms/user-guide/causes-of-application-failures-and-suggestions?spm=a2c4g.11186623.0.0.41fd339f3bPSCQ)，调用[UpdateSmsTemplate](https://help.aliyun.com/zh/sms/developer-reference/api-dysmsapi-2017-05-25-updatesmstemplate?spm)接口或在[模板管理](https://dysms.console.aliyun.com/domestic/text/template)页面修改短信模板。'."\n"
                                    .'- **10**：取消审核。',
                                'type' => 'string',
                                'example' => '2',
                            ],
                            'RelatedSignName' => [
                                'description' => '申请模板时，关联的短信签名。',
                                'type' => 'string',
                                'example' => '阿里云',
                            ],
                            'TemplateTag' => [
                                'description' => '模板标识，标识模板是用户自定义、系统赠送等。取值：'."\n"
                                    ."\n"
                                    .'- 2：用户自定义创建模板。'."\n"
                                    ."\n"
                                    .'- 3：系统赠送模板。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'OrderId' => [
                                'description' => '工单号。'."\n"
                                    ."\n"
                                    .'审核人员查询审核时会用到此参数。您需要审核加急时需要提供此工单号。',
                                'type' => 'string',
                                'example' => '2003019****',
                            ],
                            'VariableAttribute' => [
                                'description' => '模板变量规则。'."\n"
                                    ."\n"
                                    .'模板变量规则详情，请参见[示例文档](https://help.aliyun.com/zh/sms/templaterule-template-variable-parameter-filling-example)。',
                                'type' => 'string',
                                'example' => '{"code":"characterWithNumber"}'."\n",
                            ],
                            'Remark' => [
                                'description' => '短信模板申请说明，是模板审核的参考信息之一。',
                                'type' => 'string',
                                'example' => '申请验证码模板',
                            ],
                            'CreateDate' => [
                                'description' => '创建短信模板的时间。',
                                'type' => 'string',
                                'example' => '2024-06-03 10:02:34',
                            ],
                            'AuditInfo' => [
                                'description' => '审核信息。',
                                'type' => 'object',
                                'properties' => [
                                    'RejectInfo' => [
                                        'description' => '审核未通过的原因。',
                                        'type' => 'string',
                                        'example' => '模板内容中包含错别字。',
                                    ],
                                    'AuditDate' => [
                                        'description' => '审核时间。',
                                        'type' => 'string',
                                        'example' => '2024-06-03 11:20:34'."\n",
                                    ],
                                ],
                            ],
                            'FileUrlList' => [
                                'type' => 'object',
                                'properties' => [
                                    'FileUrl' => [
                                        'description' => '文件资料信息，兼容[AddSmsSign](https://help.aliyun.com/zh/sms/developer-reference/api-dysmsapi-2017-05-25-addsmstemplate?spm)接口创建的签名。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '文件信息。',
                                            'type' => 'string',
                                            'example' => '//alicom-fc-media.cn-hangzhou.oss.aliyun-inc.com/1800975045205261/data.jpg?Expires=1718202335&OSSAccessKeyId=bypFNb*****73PsLI&Signature=3dBy9k%2B0%2B8DnCsvzsHi68GHzRg0%3D',
                                        ],
                                    ],
                                ],
                            ],
                            'MoreDataFileUrlList' => [
                                'type' => 'object',
                                'properties' => [
                                    'MoreDataFileUrl' => [
                                        'description' => '更多资料信息，补充上传业务证明文件或业务截图文件列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'OSS上的文件信息。',
                                            'type' => 'string',
                                            'example' => '//alicom-fc-media.cn-hangzhou.oss.aliyun-inc.com/1800975045205261/test.jpg?Expires=1718202335&OSSAccessKeyId=bypFNb*****73PsLI&Signature=3dBy9k%2B0%2B8DnCsvzsHi68GHzRg0%3D',
                                        ],
                                    ],
                                ],
                            ],
                            'IntlType' => [
                                'description' => '国际/港澳台模板类型。当**TemplateType**参数为**3**时，国际/港澳台模板需要设置此参数，取值：'."\n"
                                    .'- **0**：验证码。'."\n"
                                    .'- **1**：短信通知。'."\n"
                                    .'- **2**：推广短信。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ApplyScene' => [
                                'description' => '应用场景内容。',
                                'type' => 'string',
                                'example' => 'http://www.aliyun.com/'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenAction',
                        'errorMessage' => 'Access to the account is denied. Please contact the administrator.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'TemplateNotFound',
                        'errorMessage' => 'The template does not exist.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"819BE656-D2E0-4858-8B21-B2E47708****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"TemplateName\\": \\"验证码\\",\\n  \\"TemplateCode\\": \\"SMS_20375****\\",\\n  \\"TemplateContent\\": \\"您正在申请手机注册，验证码为：${code}，5分钟内有效！\\",\\n  \\"TemplateType\\": \\"0\\",\\n  \\"TemplateStatus\\": \\"2\\",\\n  \\"RelatedSignName\\": \\"阿里云\\",\\n  \\"TemplateTag\\": 2,\\n  \\"OrderId\\": \\"2003019****\\",\\n  \\"VariableAttribute\\": \\"{\\\\\\"code\\\\\\":\\\\\\"characterWithNumber\\\\\\"}\\\\n\\",\\n  \\"Remark\\": \\"申请验证码模板\\",\\n  \\"CreateDate\\": \\"2024-06-03 10:02:34\\",\\n  \\"AuditInfo\\": {\\n    \\"RejectInfo\\": \\"模板内容中包含错别字。\\",\\n    \\"AuditDate\\": \\"2024-06-03 11:20:34\\\\n\\"\\n  },\\n  \\"FileUrlList\\": {\\n    \\"FileUrl\\": [\\n      \\"//alicom-fc-media.cn-hangzhou.oss.aliyun-inc.com/1800975045205261/data.jpg?Expires=1718202335&OSSAccessKeyId=bypFNb*****73PsLI&Signature=3dBy9k%2B0%2B8DnCsvzsHi68GHzRg0%3D\\"\\n    ]\\n  },\\n  \\"MoreDataFileUrlList\\": {\\n    \\"MoreDataFileUrl\\": [\\n      \\"//alicom-fc-media.cn-hangzhou.oss.aliyun-inc.com/1800975045205261/test.jpg?Expires=1718202335&OSSAccessKeyId=bypFNb*****73PsLI&Signature=3dBy9k%2B0%2B8DnCsvzsHi68GHzRg0%3D\\"\\n    ]\\n  },\\n  \\"IntlType\\": 0,\\n  \\"ApplyScene\\": \\"http://www.aliyun.com/\\\\n\\"\\n}","type":"json"}]',
            'title' => '查询模板审核详情（新接口）',
            'description' => '- 新接口和原接口变更的公告详情请参见[关于短信服务更新签名&模板接口的公告](https://help.aliyun.com/zh/sms/product-overview/announcement-on-sms-service-update-signature-template-interface )。'."\n"
                .'- 审核时间：一般情况下，模板提交后，阿里云预计在2个小时内审核完成（审核工作时间：周一至周日9:00~21:00，法定节假日顺延），建议您尽量在18:00前提交申请。'."\n"
                ."\n"
                .'- 如果模板未通过审核，会返回审核失败的原因，请参考[短信审核失败的处理建议](https://help.aliyun.com/zh/sms/user-guide/causes-of-application-failures-and-suggestions?spm=a2c4g.11186623.0.0.41fd339f3bPSCQ)，调用[ModifySmsTemplate](https://help.aliyun.com/zh/sms/developer-reference/api-dysmsapi-2017-05-25-modifysmstemplate?spm=a2c4g.11186623.0.0.5b1f6e8bQloFit)接口或在[模板管理](https://dysms.console.aliyun.com/domestic/text/template)页面修改短信模板。'."\n"
                ."\n"
                .'- QuerySmsTemplate当前接口是通过模板Code查询单个模板的审核详情。[QuerySmsTemplateList](https://help.aliyun.com/zh/sms/developer-reference/api-dysmsapi-2017-05-25-querysmstemplatelist?spm=a2c4g.11186623.0.0.24086e8bO8cFn4)接口可以查询您当前账号下所有模板的模板详情。',
        ],
        'SendSms' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PhoneNumbers',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接收短信的手机号码。手机号码格式：'."\n"
                            ."\n"
                            .'* 国内短信：+/+86/0086/86或无任何前缀的11位手机号码，例如1390000\\*\\*\\*\\*。'."\n"
                            .'* 国际/港澳台消息：国际区号+号码，例如852000012\\*\\*\\*\\*。'."\n"
                            .'* 发送测试短信的手机号，需要先在[控制台](https://dysms.console.aliyun.com/quickstart)绑定测试手机号后才可使用。'."\n"
                            ."\n"
                            .'>支持对多个手机号码发送短信，手机号码之间以半角逗号（,）分隔。上限为1000个手机号码。批量调用相对于单条调用及时性稍有延迟。验证码类型短信，建议使用单独发送的方式。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1390000****',
                    ],
                ],
                [
                    'name' => 'SignName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信签名名称。'."\n"
                            ."\n"
                            .'您可以通过[AddSmsSign](https://help.aliyun.com/zh/sms/developer-reference/api-dysmsapi-2017-05-25-addsmssign?spm=a2c4g.11186623.0.0.4b1334e5uB0hxV)接口添加签名或在[短信服务控制台](https://dysms.console.aliyun.com/dysms.htm?spm=5176.12818093.categories-n-products.ddysms.3b2816d0xml2NA#/overview)添加签名，签名通过审核后，才可使用签名名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '阿里云',
                    ],
                ],
                [
                    'name' => 'TemplateCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信模板Code。'."\n"
                            ."\n"
                            .'您可以通过[AddSmsTemplate](https://help.aliyun.com/zh/sms/developer-reference/api-dysmsapi-2017-05-25-addsmstemplate?spm=a2c4g.11186623.0.0.4b864201n9RljR)接口添加模板或在[短信服务控制台](https://dysms.console.aliyun.com/dysms.htm?spm=5176.12818093.categories-n-products.ddysms.3b2816d0xml2NA#/overview)添加模板，模板通过审核后，才可使用模板Code。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'SMS_15305****',
                    ],
                ],
                [
                    'name' => 'TemplateParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信模板变量对应的实际值。支持传入多个参数。'."\n"
                            ."\n"
                            .'> - 如果JSON中需要带换行符，请参照标准的JSON协议处理。'."\n"
                            .'> - 模板变量规范，请参见[短信模板规范](~~108253~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"name":"张三","number":"1390000****"}',
                    ],
                ],
                [
                    'name' => 'SmsUpExtendCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '上行短信扩展码。上行短信指发送给通信服务提供商的短信，用于定制某种服务、完成查询，或是办理某种业务等，需要收费，按运营商普通短信资费进行扣费。'."\n"
                            .'> 扩展码是生成签名时系统自动默认生成的，不支持自行传入。无特殊需要可忽略此字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '90999',
                    ],
                ],
                [
                    'name' => 'OutId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '外部流水扩展字段。'."\n"
                            ."\n"
                            .'> 无特殊需要可忽略此字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abcdefgh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[API错误码](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'BizId' => [
                                'description' => '发送回执ID。'."\n"
                                    ."\n"
                                    .'可根据发送回执ID在接口[QuerySendDetails](~~QuerySendDetails~~)中查询具体的发送状态。',
                                'type' => 'string',
                                'example' => '9006197469364984****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F655A8D5-B967-440B-8683-DAD6FF8DE990',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"BizId\\": \\"9006197469364984****\\",\\n  \\"RequestId\\": \\"F655A8D5-B967-440B-8683-DAD6FF8DE990\\"\\n}","errorExample":""},{"type":"xml","example":"<SendSmsResponse>\\n      <Message>OK</Message>\\n      <RequestId>44DF7A95-603F-4651-9298-BE1850BEB53F</RequestId>\\n      <BizId>336006646937050335^0</BizId>\\n      <Code>OK</Code>\\n</SendSmsResponse>","errorExample":""}]',
            'title' => '发送短信',
            'summary' => '发送前请申请短信签名和短信模板，并确保签名和模板已审核通过。',
            'description' => '- 针对国内短信服务超时的时间建议设置≥1S。'."\n"
                .'- SDK重试默认是开启的，建议关闭不要打开重试；发生超时失败的情况，建议等待回执状态再决定是否重试；'."\n"
                .'- 国内短信、国际短信和多媒体消息，均不支持幂等的能力，请您自行做好幂等控制。'."\n"
                .'- 本接口主要适用于短信单发场景，特殊场景下可支持群发（最多可向1000个手机号码发送同样内容的短信），但群发会有一定延迟。'."\n"
                .'- 如果您需要在一次请求中分别向多个不同的手机号码发送不同签名和模板内容的短信，请使用[SendBatchSms](https://help.aliyun.com/zh/sms/developer-reference/api-dysmsapi-2017-05-25-sendbatchsms?spm)接口。'."\n"
                .'- 发送短信会根据发送量计费，价格请参见[计费说明](https://help.aliyun.com/zh/sms/product-overview/billing-overview?spm)。'."\n"
                .'- 当您的验证码签名和通用签名，名称相同时系统默认使用通用签名发送短信。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '> 当前页面为新版API接口，我们强烈推荐您使用新版API接口和[SDK](~~212725~~)。旧版SDK和API已不再维护。如您仍需访问和使用旧版SDK和API，可参见[短信发送API（SendSms）---Java](~~55284~~)。',
        ],
        'SendBatchSms' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PhoneNumberJson',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '接收短信的手机号码。手机号码格式：'."\n"
                            ."\n"
                            .'* 国内短信：+/+86/0086/86或无任何前缀的11位手机号码，例如1590000\\*\\*\\*\\*。'."\n"
                            .'* 国际/港澳台消息：国际区号+号码，例如852000012\\*\\*\\*\\*。'."\n"
                            ."\n"
                            .'> 验证码类型短信，建议使用接口SendSms单独发送。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '["1590000****","1350000****"]',
                    ],
                ],
                [
                    'name' => 'SignNameJson',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '短信签名名称。'."\n"
                            ."\n"
                            .'添加签名并审核通过后，才可使用签名名称。'."\n"
                            .'您可以通过[AddSmsSign](https://help.aliyun.com/zh/sms/developer-reference/api-dysmsapi-2017-05-25-addsmssign?spm=a2c4g.11186623.0.0.4b1334e5uB0hxV)接口添加签名或在[短信服务控制台](https://dysms.console.aliyun.com/dysms.htm?spm=5176.12818093.categories-n-products.ddysms.3b2816d0xml2NA#/overview)添加签名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '["阿里云","阿里巴巴"]',
                    ],
                ],
                [
                    'name' => 'TemplateCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信模板Code。国内短信模板和国际短信模板不可以混用。'."\n"
                            ."\n"
                            .'添加模板并审核通过后，才可使用模板Code。'."\n"
                            .'您可以通过[AddSmsTemplate](https://help.aliyun.com/zh/sms/developer-reference/api-dysmsapi-2017-05-25-addsmstemplate?spm=a2c4g.11186623.0.0.4b864201n9RljR)接口添加签名或在[短信服务控制台](https://dysms.console.aliyun.com/dysms.htm?spm=5176.12818093.categories-n-products.ddysms.3b2816d0xml2NA#/overview)添加模板。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'SMS_15255****',
                    ],
                ],
                [
                    'name' => 'TemplateParamJson',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '短信模板变量对应的实际值。'."\n"
                            ."\n"
                            .'>如果JSON中需要带换行符，请参照标准的JSON协议处理；且模板变量值的个数必须与手机号码、签名的个数相同、内容一一对应，表示向指定手机号码中发对应签名的短信，且短信模板中的变量参数替换为对应的值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{"name":"TemplateParamJson"},{"name":"TemplateParamJson"}]',
                    ],
                ],
                [
                    'name' => 'SmsUpExtendCodeJson',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '上行短信扩展码，JSON数组格式。'."\n"
                            ."\n"
                            .'> 无特殊需要可忽略此字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["90999","90998"]',
                    ],
                ],
                [
                    'name' => 'OutId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '外部流水扩展字段，长度小于256的字符串。'."\n"
                            ."\n"
                            .'> 无特殊需要可忽略此字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abcdefg',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '是否调用接口成功的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'BizId' => [
                                'description' => '发送回执ID。'."\n"
                                    ."\n"
                                    .'- 根据该ID在接口[QuerySendDetails](~~102352~~)中查询具体的发送状态。'."\n"
                                    .'- 登录[短信服务控制台](https://dysms.console.aliyun.com/dysms.htm#/overview)，在**业务统计**-**发送记录查询**页面查看发送详情。',
                                'type' => 'string',
                                'example' => '9006197469364984400',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F655A8D5-B967-440B-8683-DAD6FF8D230E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"BizId\\": \\"9006197469364984400\\",\\n  \\"RequestId\\": \\"F655A8D5-B967-440B-8683-DAD6FF8D230E\\"\\n}","type":"json"}]',
            'title' => '批量发送短信',
            'summary' => '批量发送短信，支持多个号码，多个签名，模板只能用一个。',
            'description' => '- 针对国内短信服务超时的时间建议设置≥1S。'."\n"
                .'- SDK重试默认是开启的，建议关闭不要打开重试；发生超时失败的情况，建议等待回执状态再决定是否重试；'."\n"
                .'- 国内短信、国际短信和多媒体消息，均不支持幂等的能力，请您自行做好幂等控制。'."\n"
                .'- 该接口单次最多支持100个号码。',
            'extraInfo' => '>当前页面为新版API接口，我们强烈推荐您使用新版API接口和[SDK](~~212725~~)。旧版SDK和API已不再维护。如您仍需访问和使用旧版SDK和API，可参见[短信批量发送API（SendBatchSms）---Java](~~66041~~)。',
        ],
        'QuerySendDetails' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接收短信的手机号码。格式：'."\n"
                            ."\n"
                            .'* 国内短信：11位手机号码，例如1390000\\*\\*\\*\\*。'."\n"
                            .'* 国际/港澳台消息：国际区号+号码，例如8520000\\*\\*\\*\\*。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1390000****',
                    ],
                ],
                [
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发送回执ID，即发送流水号。调用[SendSms](https://help.aliyun.com/zh/sms/developer-reference/api-dysmsapi-2017-05-25-sendsms?spm=a2c4g.11186623.0.0.517969c3U8B7GF)或[SendBatchSms](https://help.aliyun.com/zh/sms/developer-reference/api-dysmsapi-2017-05-25-sendbatchsms?spm=a2c4g.11186623.0.0.93f969c3uSRK6z)发送短信时，返回值中的BizId字段。'."\n"
                            ."\n"
                            .'> 只能传入一个Bizid的值，无法传入多个Bizid。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '134523^435****',
                    ],
                ],
                [
                    'name' => 'SendDate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信发送日期，支持查询最近30天的记录。'."\n"
                            ."\n"
                            .'格式为yyyyMMdd，例如20181225。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '20181228',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查看发送记录，指定每页显示的短信记录数量。'."\n"
                            ."\n"
                            .'取值范围为1~50。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查看发送记录，指定发送记录的当前页码。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '819BE656-D2E0-4858-8B21-B2E477085AAF',
                            ],
                            'TotalCount' => [
                                'description' => '短信发送总条数。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'SmsSendDetailDTOs' => [
                                'type' => 'object',
                                'properties' => [
                                    'SmsSendDetailDTO' => [
                                        'description' => '短信发送明细。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ErrCode' => [
                                                    'description' => '运营商短信状态码。'."\n"
                                                        ."\n"
                                                        .'-  短信发送成功：DELIVERED。'."\n"
                                                        .'-  短信发送失败：失败错误码请参见[错误码](~~101347~~)。',
                                                    'type' => 'string',
                                                    'example' => 'DELIVERED',
                                                ],
                                                'TemplateCode' => [
                                                    'description' => '短信模板Code。'."\n"
                                                        ."\n"
                                                        .'> 如果您选择[测试专用]阿里云通信和[测试专用]阿里云通信测试模板发送的测试短信，此接口不返回TemplateCode等字段信息。',
                                                    'type' => 'string',
                                                    'example' => 'SMS_12231****',
                                                ],
                                                'OutId' => [
                                                    'description' => '外部流水扩展字段。',
                                                    'type' => 'string',
                                                    'example' => '123',
                                                ],
                                                'ReceiveDate' => [
                                                    'description' => '短信接收日期和时间。',
                                                    'type' => 'string',
                                                    'example' => '2019-01-08 16:44:13',
                                                ],
                                                'SendDate' => [
                                                    'description' => '短信发送日期和时间。',
                                                    'type' => 'string',
                                                    'example' => '2019-01-08 16:44:10',
                                                ],
                                                'PhoneNum' => [
                                                    'description' => '接收短信的手机号码。',
                                                    'type' => 'string',
                                                    'example' => '1390000****',
                                                ],
                                                'Content' => [
                                                    'description' => '短信内容。',
                                                    'type' => 'string',
                                                    'example' => '【阿里云】验证码为：123，您正在登录，若非本人操作，请勿泄露',
                                                ],
                                                'SendStatus' => [
                                                    'description' => '短信发送状态，包括：'."\n"
                                                        ."\n"
                                                        .'- **1**：等待回执。'."\n"
                                                        .'- **2**：发送失败。'."\n"
                                                        .'- **3**：发送成功。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '3',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"819BE656-D2E0-4858-8B21-B2E477085AAF\\",\\n  \\"TotalCount\\": \\"1\\",\\n  \\"SmsSendDetailDTOs\\": {\\n    \\"SmsSendDetailDTO\\": [\\n      {\\n        \\"ErrCode\\": \\"DELIVERED\\",\\n        \\"TemplateCode\\": \\"SMS_12231****\\",\\n        \\"OutId\\": \\"123\\",\\n        \\"ReceiveDate\\": \\"2019-01-08 16:44:13\\",\\n        \\"SendDate\\": \\"2019-01-08 16:44:10\\",\\n        \\"PhoneNum\\": \\"1390000****\\",\\n        \\"Content\\": \\"【阿里云】验证码为：123，您正在登录，若非本人操作，请勿泄露\\",\\n        \\"SendStatus\\": 3\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询短信发送详情',
            'summary' => '查询单个号码的短信发送记录和发送状态等信息。',
            'description' => '如果需要批量查看短信发送详情，您可以登录[短信服务控制台](https://dysms.console.aliyun.com/record)，在**业务统计**-**发送记录查询**页面查看发送详情。',
            'extraInfo' => '>当前页面为新版API接口，我们强烈推荐您使用新版API接口和[SDK](~~212725~~)。旧版SDK和API已不再维护。如您仍需访问和使用旧版SDK和API，可参见[短信查询API（QuerySendDetails）---Java](~~55289~~)。',
        ],
        'QuerySendStatistics' => [
            'summary' => '查询短信发送统计详情，包括短信发送时间、短信发送成功条数、接收回执条数等。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'IsGlobe',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信发送范围。取值：'."\n"
                            ."\n"
                            .'- **1**：国内短信发送记录。'."\n"
                            ."\n"
                            .'- **2**：国际/港澳台短信发送记录。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '2',
                        'minimum' => '1',
                        'example' => '1',
                        'maxLength' => 2,
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始日期，格式为yyyyMMdd，例如20181225。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '20201002',
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束日期，格式为yyyyMMdd，例如20181225。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '20201003',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页码。默认取值为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'minimum' => '1',
                        'example' => '1',
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页显示的条数。取值范围：**1~50**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '50',
                        'minimum' => '1',
                        'example' => '10',
                        'maxLength' => 50,
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'TemplateType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板类型。取值：'."\n"
                            ."\n"
                            .'- **0**：验证码。'."\n"
                            ."\n"
                            .'- **1**：通知短信。'."\n"
                            ."\n"
                            .'- **2**：推广短信。（仅支持企业客户）'."\n"
                            ."\n"
                            .'- **3**：国际/港澳台消息。（仅支持企业客户）'."\n"
                            ."\n"
                            .'- **7**：数字短信。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'SignName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '阿里云平台',
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
                                'example' => '819BE656-D2E0-4858-8B21-B2E47708****',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~101346~~)。'."\n",
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalSize' => [
                                        'description' => '返回数据的总条数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '20',
                                    ],
                                    'TargetList' => [
                                        'description' => '返回数据列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TotalCount' => [
                                                    'description' => '发送成功的短信条数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '20',
                                                ],
                                                'RespondedSuccessCount' => [
                                                    'description' => '接收到回执成功的短信条数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '17',
                                                ],
                                                'RespondedFailCount' => [
                                                    'description' => '接收到回执失败的短信条数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2',
                                                ],
                                                'NoRespondedCount' => [
                                                    'description' => '未收到回执的短信条数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'SendDate' => [
                                                    'description' => '短信发送日期，格式为yyyyMMdd，例如20181225。',
                                                    'type' => 'string',
                                                    'example' => '20201010',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"819BE656-D2E0-4858-8B21-B2E47708****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"TotalSize\\": 20,\\n    \\"TargetList\\": [\\n      {\\n        \\"TotalCount\\": 20,\\n        \\"RespondedSuccessCount\\": 17,\\n        \\"RespondedFailCount\\": 2,\\n        \\"NoRespondedCount\\": 1,\\n        \\"SendDate\\": \\"20201010\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QuerySendStatisticsResponse>\\n    <RequestId>819BE656-D2E0-4858-8B21-B2E47708****</RequestId>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <Data>\\n        <TotalSize>20</TotalSize>\\n        <TargetList>\\n            <TotalCount>20</TotalCount>\\n            <RespondedSuccessCount>17</RespondedSuccessCount>\\n            <RespondedFailCount>2</RespondedFailCount>\\n            <NoRespondedCount>1</NoRespondedCount>\\n            <SendDate>20201010</SendDate>\\n        </TargetList>\\n    </Data>\\n</QuerySendStatisticsResponse>","errorExample":""}]',
            'title' => '查询短信发送量统计',
            'description' => '- 如果指定日期短信发送量较大，可以分页查看。指定每页显示的短信详情数量和查看的页数，即可分页查看发送记录。'."\n"
                ."\n"
                .'- 您可以登录[短信服务控制台](https://dysms.console.aliyun.com/dysms.htm#/overview)，在**业务统计**-**发送记录查询**页面查看发送详情。',
        ],
        'GetOSSInfoForCardTemplate' => [
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
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[API错误码](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A90E4451-FED7-49D2-87C8-00700A8C4D0D',
                            ],
                            'Success' => [
                                'description' => '调用接口是否成功。取值：'."\n"
                                    ."\n"
                                    .'- **true**'."\n"
                                    ."\n"
                                    .'- **false**',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Signature' => [
                                        'description' => '短信签名。',
                                        'type' => 'string',
                                        'example' => '阿里云',
                                    ],
                                    'Host' => [
                                        'description' => '访问地址。',
                                        'type' => 'string',
                                        'example' => ' https://alicom-cardsms-resources.oss-cn-zhangjiakou.aliyuncs.com',
                                    ],
                                    'Policy' => [
                                        'description' => '签名策略。',
                                        'type' => 'string',
                                        'example' => 'eyJxxx0=',
                                    ],
                                    'ExpireTime' => [
                                        'description' => '超时时间。',
                                        'type' => 'string',
                                        'example' => '1634209418',
                                    ],
                                    'AliUid' => [
                                        'description' => '阿里云账号ID。',
                                        'type' => 'string',
                                        'example' => '599333677478****',
                                    ],
                                    'AccessKeyId' => [
                                        'description' => '签名使用的AccessKey ID。',
                                        'type' => 'string',
                                        'example' => 'LTAIxetqt1Dg****',
                                    ],
                                    'StartPath' => [
                                        'description' => '策略路径。',
                                        'type' => 'string',
                                        'example' => '1631792777',
                                    ],
                                    'Bucket' => [
                                        'description' => 'OSS文件保存桶名称。',
                                        'type' => 'string',
                                        'example' => 'alicom-cardsms-resources',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => 'ForbiddenAction',
                        'errorMessage' => 'Access to the account is denied. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"RequestId\\": \\"A90E4451-FED7-49D2-87C8-00700A8C4D0D\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Signature\\": \\"阿里云\\",\\n    \\"Host\\": \\" https://alicom-cardsms-resources.oss-cn-zhangjiakou.aliyuncs.com\\",\\n    \\"Policy\\": \\"eyJxxx0=\\",\\n    \\"ExpireTime\\": \\"1634209418\\",\\n    \\"AliUid\\": \\"599333677478****\\",\\n    \\"AccessKeyId\\": \\"LTAIxetqt1Dg****\\",\\n    \\"StartPath\\": \\"1631792777\\",\\n    \\"Bucket\\": \\"alicom-cardsms-resources\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取OSS上传信息',
            'summary' => '获取卡片短信所属OSS资源配置信息，此配置信息将用于后续OSS文件上传操作。',
            'description' => '卡片短信模板中使用的图片、视频等素材资源可上传到OSS文件系统保存。文件上传操作，请参见[OSS文件上传](~~437303~~)。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为300次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
            'requestParamsDescription' => '### 请求参数说明'."\n"
                .'GetOSSInfoForCardTemplate接口没有入参，直接调用接口即可获取OSS上传信息。',
        ],
        'GetMediaResourceId' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型。'."\n"
                            ."\n"
                            .'- **1**：文本'."\n"
                            .'- **2**：图片。小图片限制在100 KB以内，大图片限制在2 MB以内，图片要求清晰；图片格式支持JPG、JPEG、PNG。'."\n"
                            .'- **3**：音频'."\n"
                            .'- **4**：视频。视频格式支持MP4。'."\n"
                            .'> '."\n"
                            .'> - 资源类型为图片时**img_rate**必填。'."\n"
                            .'> - 1:1比例：oneToOne'."\n"
                            .'> - 16:9比例：sixteenToNine'."\n"
                            .'> - 3:1比例：threeToOne'."\n"
                            .'> - 48:65比例：fortyEightToSixtyFiv',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '10000',
                        'minimum' => '0',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'OssKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取的资源地址。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'oss://alicom-fc-media/1947741454322274/alicom-fc-media/pic/202205191526575398603697152.png',
                    ],
                ],
                [
                    'name' => 'FileSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件大小，单位：Byte。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '12',
                    ],
                ],
                [
                    'name' => 'ExtendInfo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '扩展字段。'."\n"
                            ."\n"
                            .'> 资源类型为**图片**时必填。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '{\\"img_rate\\":\\"oneToOne\\"}',
                    ],
                ],
                [
                    'name' => 'Memo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '上传资源的描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '图片信息',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F07CF237-F6E3-5F77-B91B-F9B7C5DE84AB',
                            ],
                            'Success' => [
                                'description' => '调用接口是否成功。取值：'."\n"
                                    ."\n"
                                    .'- **true**'."\n"
                                    ."\n"
                                    .'- **false**',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'ResourceId' => [
                                        'description' => '资源ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'ResUrlDownload' => [
                                        'description' => '资源下载地址。',
                                        'type' => 'string',
                                        'example' => 'http://test-example.com/download.jpg',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => 'ForbiddenAction',
                        'errorMessage' => 'Access to the account is denied. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"RequestId\\": \\"F07CF237-F6E3-5F77-B91B-F9B7C5DE84AB\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"ResourceId\\": 0,\\n    \\"ResUrlDownload\\": \\"http://test-example.com/download.jpg\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取媒体资源ID',
            'summary' => '将用户上传到卡片短信OSS存储的图片、视频转换成（生成）资源数据统一管理，并返回资源ID，用户可以对返回的资源ID自行管理。',
            'description' => '### QPS限制'."\n"
                .'本接口的单用户QPS限制为300次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'CreateCardSmsTemplate' => [
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '卡片短信模板名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '阿里云图文类模板',
                    ],
                ],
                [
                    'name' => 'Template',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '卡片短信的模板内容。'."\n"
                            ."\n"
                            .'> - Template、ExtendInfo、TemplateContent、TmpCard、Action等字段说明，请参见[卡片短信模板参数字段说明](~~434929~~)。'."\n"
                            .'> - 不同类型的卡片短信模板的内容结构不同，详情请参见[卡片短信模板示例](~~435361~~)。',
                        'type' => 'object',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{'."\n"
                            .'       "extendInfo":{'."\n"
                            .'              "scene":"HMOVM图文",'."\n"
                            .'              "purpose":"2",'."\n"
                            .'              "userExt":{'."\n"
                            .'                     "outId":"1234554321"'."\n"
                            .'              }'."\n"
                            .'       },'."\n"
                            .'       "templateContent":{'."\n"
                            .'              "pages":['."\n"
                            .'                     {'."\n"
                            .'"tmpCards":['."\n"
                            .'                                   {'."\n"
                            .'                                          "type":"IMAGE",'."\n"
                            .'                                          "srcType":1,'."\n"
                            .'                                          "src":"28755",'."\n"
                            .'                                          "actionType":"OPEN_APP",'."\n"
                            .'                                          "action":{'."\n"
                            .'                                                 "target":"https://s.tb.cn/c.KxzZ",'."\n"
                            .'                                                 "merchantName":"测试-图文模板",'."\n"
                            .'                                                 "packageName":['."\n"
                            .'                                                        "com.taobao.taobao"],'."\n"
                            .'                                                 "floorUrl":"https://s.tb.cn/c.KxzZ"'."\n"
                            .'                                          },'."\n"
                            .'                                          "positionNumber":1'."\n"
                            .'                                   },'."\n"
                            .'                                   {'."\n"
                            .'                                          "type":"TEXT",'."\n"
                            .'                                          "content":"测试- BENZ AMG 2020 试驾邀请",'."\n"
                            .'                                          "isTextTitle":true,'."\n"
                            .'                                          "positionNumber":2'."\n"
                            .'                                   },'."\n"
                            .'                                   {'."\n"
                            .'                                          "type":"TEXT",'."\n"
                            .'                                          "content":"测试-梅赛德斯-奔驰，创新激情永不灭。作为汽车 XXXX",'."\n"
                            .'                                          "isTextTitle":false,'."\n"
                            .'                                          "positionNumber":3'."\n"
                            .'                                   },'."\n"
                            .'                                   {'."\n"
                            .'                                          "type":"BUTTON",'."\n"
                            .'                                          "content":"预约试驾",'."\n"
                            .'                                          "actionType":"OPEN_BROWSER",'."\n"
                            .'                                          "action":{'."\n"
                            .'                                                 "target":"https://www.mercedes-benz.com.cn",'."\n"
                            .'                                                 "merchantName":"测试-正在跳转梅赛德斯-奔驰"'."\n"
                            .'},'."\n"
                            .'                                          "positionNumber":4'."\n"
                            .'                                   }]'."\n"
                            .'                     }]'."\n"
                            .'       },'."\n"
                            .'       "cardSignName":"阿里云",'."\n"
                            .'       "cardType":5'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'Memo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '对上传模板的描述。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '图文类模板',
                    ],
                ],
                [
                    'name' => 'Factorys',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板提交的厂商。厂商类型取值：'."\n"
                            ."\n"
                            .'- **HuaWei**：表示华为厂商。'."\n"
                            .'- **XiaoMi**：表示小米厂商。'."\n"
                            .'- **OPPO**：表示OPPO厂商。'."\n"
                            .'- **VIVO**：表示VIVO厂商。'."\n"
                            .'- **MEIZU**：表示魅族厂商。'."\n"
                            ."\n"
                            .'> 该参数不填时，系统自动匹配模板支持的手机厂商。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["HuaWei","XiaoMi"] ',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '数据对象。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F655A8D5-B967-440B-8683-DAD6FF8DE990',
                            ],
                            'Success' => [
                                'description' => '调用接口是否成功。取值：'."\n"
                                    ."\n"
                                    .'- **true**'."\n"
                                    .'- **false**',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回对象。',
                                'type' => 'object',
                                'properties' => [
                                    'TemplateCode' => [
                                        'description' => '卡片短信模板CODE。'."\n"
                                            ."\n"
                                            .'您可以登录[短信服务控制台](https://dysms.console.aliyun.com/dysms.htm?spm=5176.12818093.categories-n-products.ddysms.3b2816d0xml2NA#/overview)，选择**国内卡片消息**，在**模板管理**页面查看**模板CODE**，如：CARD_SMS_2****。'."\n"
                                            ."\n"
                                            .'>必须是已添加、并通过审核的卡片短信模板。',
                                        'type' => 'string',
                                        'example' => 'CARD_SMS_2****',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => 'ForbiddenAction',
                        'errorMessage' => 'Access to the account is denied. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"RequestId\\": \\"F655A8D5-B967-440B-8683-DAD6FF8DE990\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"TemplateCode\\": \\"CARD_SMS_2****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateCardSmsTemplateResponse>\\n    <Code>ok</Code>\\n    <RequestId>F655A8D5-B967-440B-8683-DAD6FF8DE990</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <TemplateCode>CARD_SMS_600000001</TemplateCode>\\n    </Data>\\n</CreateCardSmsTemplateResponse>","errorExample":""}]',
            'title' => '创建卡片短信模板',
            'summary' => '创建卡片短信模板。',
            'description' => '- 保存卡片短信模板信息，提交手机厂商审核，并返回模板Code。'."\n"
                .'- 使用CreateCardSmsTemplate创建卡片短信模板，若模板中包含厂商不支持的模板类型或事件时，将不向对应厂商提交审核。更多信息，请参见[厂商支持的模板说明](~~434611~~)。'."\n"
                .'- 更多卡片短信模板的示例，请参见[卡片短信模板示例](~~435361~~)。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为300次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryCardSmsTemplate' => [
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
                        'description' => '卡片短信模板Code。'."\n"
                            ."\n"
                            .'请在控制台**国内卡片消息**的**模板管理**页面查看模板Code。'."\n"
                            ."\n"
                            .'>必须是已添加、并通过审核的卡片短信模板Code。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'CARD_SMS_2****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[API错误码](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求的唯一标识。',
                                'type' => 'string',
                                'example' => 'F655A8D5-B967-440B-8683-DAD6FF8DE990',
                            ],
                            'Success' => [
                                'description' => '是否成功。取值：'."\n"
                                    ."\n"
                                    .'- **true**'."\n"
                                    ."\n"
                                    .'- **false**',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Templates' => [
                                        'description' => '返回模板列表。'."\n",
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '返回的模板信息，具体信息以实际返回值为准。'."\n"
                                                .'- tmpName：模板名称。'."\n"
                                                .'- tmpCode：模板Code。'."\n"
                                                .'- state：模板审核状态。0：审核中，1：审核通过。2：审核未通过'."\n"
                                                .'- tmpOps：手机厂商审核列表。（state：手机厂商审核状态。vendorCode：手机厂商信息。remark：手机厂商审核意见。）',
                                            'type' => 'object',
                                            'example' => ' [{'."\n"
                                                .'"tmpName": "测试",'."\n"
                                                .'"tmpCode": "CARD_SMS_****",'."\n"
                                                .'"state": 1,'."\n"
                                                .'"tmpOps": ['."\n"
                                                .'          {'."\n"
                                                .'            "tmpOpId": "536363",'."\n"
                                                .'            "vendorTmpId": "600302896",'."\n"
                                                .'            "remark": "自动审核通过",'."\n"
                                                .'            "supplierCode": "MW",'."\n"
                                                .'            "state": 1,'."\n"
                                                .'            "vendorName": "华为",'."\n"
                                                .'            "vendorCode": "HUAWEI"'."\n"
                                                .'          }]'."\n"
                                                .'}]',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => 'ForbiddenAction',
                        'errorMessage' => 'Access to the account is denied. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"RequestId\\": \\"F655A8D5-B967-440B-8683-DAD6FF8DE990\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Templates\\": [\\n      [\\n        {\\n          \\"tmpName\\": \\"测试\\",\\n          \\"tmpCode\\": \\"CARD_SMS_****\\",\\n          \\"state\\": 1,\\n          \\"tmpOps\\": [\\n            {\\n              \\"tmpOpId\\": \\"536363\\",\\n              \\"vendorTmpId\\": \\"600302896\\",\\n              \\"remark\\": \\"自动审核通过\\",\\n              \\"supplierCode\\": \\"MW\\",\\n              \\"state\\": 1,\\n              \\"vendorName\\": \\"华为\\",\\n              \\"vendorCode\\": \\"HUAWEI\\"\\n            }\\n          ]\\n        }\\n      ]\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询卡片短信模板状态',
            'summary' => '查询模板审核状态。',
            'description' => '### QPS限制'."\n"
                .'本接口的单用户QPS限制为300次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'CheckMobilesCardSupport' => [
            'summary' => '检查手机号码是否支持卡片短信。',
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
                        'description' => '卡片短信模板Code。'."\n"
                            .'请在控制台选择**国内卡片消息**，在**模板管理**页面查看。'."\n"
                            ."\n"
                            .'>必须是已添加、并通过审核的卡片短信模板。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'CARD_SMS_****',
                    ],
                ],
                [
                    'name' => 'Mobiles',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '手机号列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '待查询的手机号，且该参数的填写格式必须为[{"#6#mobile":"1380000****"}]，否则会报手机号格式错误。一次请求最多支持查询10000个号码。',
                            'type' => 'object',
                            'required' => false,
                            'example' => '[{"#6#mobile":"1322587****"},{"#6#mobile":"1867845****"}]',
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '819BE656-D2E0-4858-8B21-B2E477085AAF',
                            ],
                            'Success' => [
                                'description' => '是否成功。取值：'."\n"
                                    ."\n"
                                    .'- **true**'."\n"
                                    .'- **false**',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回数据。'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'queryResult' => [
                                        'description' => '查询结果列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '查询数据。',
                                            'type' => 'object',
                                            'properties' => [
                                                'mobile' => [
                                                    'description' => '手机号码。',
                                                    'type' => 'string',
                                                    'example' => '1390000****',
                                                ],
                                                'support' => [
                                                    'description' => '是否支持卡片短信能力。'."\n"
                                                        ."\n"
                                                        .'- **true**：支持卡片短信'."\n"
                                                        ."\n"
                                                        .'- **false**：不支持卡片短信',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
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
                200 => [
                    [
                        'errorCode' => 'ForbiddenAction',
                        'errorMessage' => 'Access to the account is denied. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"RequestId\\": \\"819BE656-D2E0-4858-8B21-B2E477085AAF\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"queryResult\\": [\\n      {\\n        \\"mobile\\": \\"1390000****\\",\\n        \\"support\\": true\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '检查手机号是否支持卡片短信（旧接口）',
            'description' => '### QPS限制'."\n"
                .'本接口的单用户QPS限制为2000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'QueryMobilesCardSupport' => [
            'summary' => '查询手机号是否支持卡片短信。',
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
                        'description' => '卡片短信模板Code。请在控制台选择**国内消息**，在**模板管理**页面**查看。'."\n"
                            ."\n"
                            .'>必须是已添加、并通过审核的卡片短信模板。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'CARD_SMS_2****',
                    ],
                ],
                [
                    'name' => 'Mobiles',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '手机号列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '待查询的手机号。一次请求最多支持查询10000个号码。',
                            'type' => 'object',
                            'required' => false,
                            'example' => '{'."\n"
                                .'  "mobile": "138****0000"'."\n"
                                .'}',
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回值根对象。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '08C17DFE-2E10-54F4-BAFB-7180039CC217',
                            ],
                            'Success' => [
                                'description' => '调用接口是否成功。取值：'."\n"
                                    ."\n"
                                    .'- **true**：调用成功。'."\n"
                                    ."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'QueryResult' => [
                                        'description' => '查询值。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '查询值。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Mobile' => [
                                                    'description' => '查询的手机号码。',
                                                    'type' => 'string',
                                                    'example' => '1380000****',
                                                ],
                                                'Support' => [
                                                    'description' => '是否支持卡片短信。取值：'."\n"
                                                        ."\n"
                                                        .'- **true**：支持。'."\n"
                                                        .'- **false**：不支持。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
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
                200 => [
                    [
                        'errorCode' => 'ForbiddenAction',
                        'errorMessage' => 'Access to the account is denied. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"RequestId\\": \\"08C17DFE-2E10-54F4-BAFB-7180039CC217\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"QueryResult\\": [\\n      {\\n        \\"Mobile\\": \\"1380000****\\",\\n        \\"Support\\": true\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询手机号是否支持卡片短信（新接口）',
        ],
        'GetCardSmsLink' => [
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
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CardTemplateCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '卡片短信模板Code。请在控制台**国内消息**页面中的**模板管理**页签下**模板CODE**一列查看。'."\n"
                            ."\n"
                            .'>必须是已添加、并通过审核的短信模板。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'CARD_SMS_****',
                    ],
                ],
                [
                    'name' => 'OutId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '外部流水扩展字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BC20220608102511660860762****',
                    ],
                ],
                [
                    'name' => 'PhoneNumberJson',
                    'in' => 'query',
                    'schema' => [
                        'description' => '手机号码、用户ID或系统内部标识。'."\n"
                            ."\n"
                            .'> - 最多支持1万个手机号码。'."\n"
                            .'> - 用户也可自定义标识，长度不超过60个字符。'."\n"
                            .'> - OPPO厂商的模板一次最多申请10个。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[\\"1390000****'."\n"
                            .'\\",\\"1370000****'."\n"
                            .'\\"]',
                    ],
                ],
                [
                    'name' => 'SignNameJson',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信签名名称。'."\n"
                            .'请在控制台**国内消息**页面中的**签名管理**页签下**签名名称**一列查看。'."\n"
                            ."\n"
                            .'>必须是已添加、并通过审核的短信签名；且短信签名的个数必须与手机号码的个数相同、内容一一对应。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[\\"阿里云\\", \\"阿里云2\\"]',
                    ],
                ],
                [
                    'name' => 'CardTemplateParamJson',
                    'in' => 'query',
                    'schema' => [
                        'description' => '卡片短信动参。',
                        'type' => 'string',
                        'required' => false,
                        'example' => ' [{\\"customUrl\\":\\"https://alibaba.com\\",\\"dyncParams\\": \\"{\\\\\\"动参key\\\\\\":\\\\\\"动参value\\\\\\"}\\"},{\\"customUrl\\":\\"https://alibaba.com\\",\\"dyncParams\\": \\"{\\\\\\"动参key\\\\\\":\\\\\\"动参value\\\\\\"}\\"}]',
                    ],
                ],
                [
                    'name' => 'CardCodeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '卡片短信短链编码类型。'."\n"
                            .'- **1**：群发'."\n"
                            .'- **2**：个性化',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'CardLinkType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '卡片短信短链类型。'."\n"
                            .'- 1：标准生成短码。'."\n"
                            .'- 2：自定义生成短码。'."\n"
                            ."\n"
                            .'> **CardLinkType**不填时，默认为标准生成短码。如需生成自定义短码，请联系阿里运营人员进行报备。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发送账号分配的短链域名，需要提前报备。'."\n"
                            ."\n"
                            .'> - 当**CardLinkType**为**2**时，**Domain**参数必填。'."\n"
                            .'> - 当**Domain**参数不填时，则使用系统默认域名。长度不超过100个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'xxx.com',
                    ],
                ],
                [
                    'name' => 'CustomShortCodeJson',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户自定义短码。长度为4~8位的数字或字母。'."\n"
                            ."\n"
                            .'> 当生成类型为自定义生成短码时必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abCde',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。'."\n",
                                'type' => 'string',
                                'example' => 'CC89A90C-978F-46AC-B80D-54738371E7CA',
                            ],
                            'Success' => [
                                'description' => '是否成功。取值：'."\n"
                                    ."\n"
                                    .'- **true**'."\n"
                                    .'- **false**',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'CardTmpState' => [
                                        'description' => '卡片短信模板审核状态。'."\n"
                                            .'- **0**：审核中'."\n"
                                            .'- **1**：审核通过'."\n"
                                            .'- **2**：审核不通过'."\n"
                                            ."\n"
                                            .'> 未审核通过的短信走回落流程。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'NotMediaMobiles' => [
                                        'description' => '不支持卡片短信的手机号。',
                                        'type' => 'string',
                                        'example' => '1390000****',
                                    ],
                                    'CardPhoneNumbers' => [
                                        'description' => '支持卡片短信的手机号码。',
                                        'type' => 'string',
                                        'example' => '[\\"1390000****\\",\\"1370000****\\"]',
                                    ],
                                    'CardSmsLinks' => [
                                        'description' => '卡片短信短链。',
                                        'type' => 'string',
                                        'example' => '[\\"mw2m.cn/LAaGGa\\",\\"mw2m.cn/LAAaes\\"]',
                                    ],
                                    'CardSignNames' => [
                                        'description' => '用于申请卡片短信短链的短信签名，在发送时签名、接收号码、卡片短信短链要一一对应。',
                                        'type' => 'string',
                                        'example' => '["阿里云","阿里云2"]',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => 'ForbiddenAction',
                        'errorMessage' => 'Access to the account is denied. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"RequestId\\": \\"CC89A90C-978F-46AC-B80D-54738371E7CA\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"CardTmpState\\": 0,\\n    \\"NotMediaMobiles\\": \\"1390000****\\",\\n    \\"CardPhoneNumbers\\": \\"[\\\\\\\\\\\\\\"1390000****\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"1370000****\\\\\\\\\\\\\\"]\\",\\n    \\"CardSmsLinks\\": \\"[\\\\\\\\\\\\\\"mw2m.cn/LAaGGa\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"mw2m.cn/LAAaes\\\\\\\\\\\\\\"]\\",\\n    \\"CardSignNames\\": \\"[\\\\\\"阿里云\\\\\\",\\\\\\"阿里云2\\\\\\"]\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取卡片短信短链',
            'summary' => '获取卡片短信短链。',
            'description' => '### QPS限制'."\n"
                .'本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'QueryCardSmsTemplateReport' => [
            'summary' => '查询卡片短信发送详情。',
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
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'TemplateCodes',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '卡片短信对象。',
                        'type' => 'array',
                        'items' => [
                            'description' => '卡片短信模板Code。请在控制台**国内消息**页面中的**模板管理**页签下**模板CODE**一列查看。'."\n"
                                ."\n"
                                .'>必须是已添加、并通过审核的卡片短信模板。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'CARD_SMS_391',
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间，格式为yyyy-MM-dd HH:mm:ss',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2020-10-10 00:00:01',
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间，格式为yyyy-MM-dd HH:mm:ss',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2020-10-11 00:00:01',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '数据对象。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码请参见[错误码列表](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CC89A90C-978F-46AC-B80D-54738371E7CA',
                            ],
                            'Success' => [
                                'description' => '调用接口是否成功。取值：'."\n"
                                    ."\n"
                                    .'- **true**'."\n"
                                    ."\n"
                                    .'- **false**',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'model' => [
                                        'description' => '返回数据列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '返回数据明细。'."\n"
                                                .'- tmpCode：模板Code。'."\n"
                                                .'- date：数据日期。格式为yyyy-MM-dd HH:mm:ss'."\n"
                                                .'- rptSuccessCount：短信解析回执成功数。'."\n"
                                                .'- exposeUv：消息曝光数。'."\n"
                                                .'- exposePv：消息曝光次数。'."\n"
                                                .'- clickUv：消息点击数。'."\n"
                                                .'- clickPv：消息点击次数。',
                                            'type' => 'object',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => 'ForbiddenAction',
                        'errorMessage' => 'Access to the account is denied. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"RequestId\\": \\"CC89A90C-978F-46AC-B80D-54738371E7CA\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"model\\": [\\n      {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryCardSmsTemplateReportResponse>\\n    <Code>ok</Code>\\n    <RequestId>12343</RequestId>\\n    <Success>true</Success>\\n    <Data/>\\n</QueryCardSmsTemplateReportResponse>","errorExample":""}]',
            'title' => '查询卡片短信发送详情',
            'description' => '### QPS限制'."\n"
                .'本接口的单用户QPS限制为300次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'SendCardSms' => [
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
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CardObjects',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '卡片短信对象。',
                        'type' => 'array',
                        'items' => [
                            'description' => '卡片短信对象。',
                            'type' => 'object',
                            'properties' => [
                                'customUrl' => [
                                    'description' => '渲染失败后跳转链接。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'https://alibaba.com',
                                ],
                                'dyncParams' => [
                                    'description' => '动态参数。动参变量不需要${}',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '{\\"param3\\":\\"李四3\\",\\"param1\\":\\"李四\\",\\"param2\\":\\"李四2\\"}',
                                ],
                                'mobile' => [
                                    'description' => '手机号码。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '1390000****',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'SignName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信签名名称。请在控制台**国内消息**页面中的**签名管理**页签下**签名名称**一列查看。'."\n"
                            .'>必须是通过审核的短信签名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '阿里云',
                    ],
                ],
                [
                    'name' => 'CardTemplateCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '卡片短信模板Code。请在控制台**国内消息**页面中的**模板管理**页签下**模板CODE**一列查看。'."\n"
                            ."\n"
                            .'>必须是已添加、并通过审核的卡片短信模板。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'CARD_SMS_70',
                    ],
                ],
                [
                    'name' => 'SmsTemplateCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '回落文本短信的模板Code。请在控制台**国内消息**页面中的**模板管理**页签下**模板CODE**一列查看。'."\n"
                            ."\n"
                            .'>必须是已添加、并通过审核的短信模板。**FallbackType**为**SMS**时为必填。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'SIER_TEST_01',
                    ],
                ],
                [
                    'name' => 'SmsUpExtendCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '上行短信扩展码。上行短信，指发送给通信服务提供商的短信，用于定制某种服务、完成查询，或是办理某种业务等，需要收费的，按运营商普通短信资费进行扣费。'."\n"
                            .'>无上述需求的用户请忽略此字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'FallbackType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '回落类型。取值：'."\n"
                            .'- **SMS**：不支持卡片短信的号码，回落文本短信。'."\n"
                            .'- **DIGITALSMS**：不支持卡片短信的号码，回落数字短信。'."\n"
                            .'- **NONE**：不需要回落。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'SMS',
                    ],
                ],
                [
                    'name' => 'DigitalTemplateCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '回落数字短信的模板Code。请在控制台**国内消息**页面中的**模板管理**页签下**模板CODE**一列查看。'."\n"
                            ."\n"
                            .'>必须是已添加、并通过审核的短信模板。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SMS_003',
                    ],
                ],
                [
                    'name' => 'OutId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留给调用方使用的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '38d76c9b-4a9a-4c89-afae-61fd8e0e****',
                    ],
                ],
                [
                    'name' => 'SmsTemplateParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '回落文本短信的模板变量对应的实际值。'."\n"
                            ."\n"
                            .'>如果JSON中需要带换行符，请参照标准的JSON协议处理。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"jifen\\":\\"回落参数\\"}',
                    ],
                ],
                [
                    'name' => 'DigitalTemplateParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '回落数字短信的模板变量对应的实际值。'."\n"
                            ."\n"
                            .'>如果JSON中需要带换行符，请参照标准的JSON协议处理。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"msg\\",\\"xxxd\\"}',
                    ],
                ],
                [
                    'name' => 'TemplateCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文本短信模板CODE。'."\n"
                            ."\n"
                            .'请在控制台**国内消息**或**国际/港澳台消息**页面中的**模板管理**页签下**模板CODE**一列查看。'."\n"
                            ."\n"
                            .'>必须是已添加、并通过审核的模板CODE；且发送国际/港澳台消息时，请使用国际/港澳台短信模版。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SMS_2322****',
                    ],
                ],
                [
                    'name' => 'TemplateParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信模板变量对应的实际值，JSON格式。'."\n"
                            ."\n"
                            .'>如果JSON中需要带换行符，请参照标准的JSON协议处理。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'      \\"code\\": \\"1111\\"'."\n"
                            .'}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[错误码列表](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F655A8D5-B967-440B-8683-DAD6FF8D28D0',
                            ],
                            'Success' => [
                                'description' => '调用接口是否成功。取值：'."\n"
                                    ."\n"
                                    .'- **true**：调用成功。'."\n"
                                    ."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回数据。'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'MediaMobiles' => [
                                        'description' => '发送卡片短信的手机号。',
                                        'type' => 'string',
                                        'example' => '1390000****',
                                    ],
                                    'BizCardId' => [
                                        'description' => '卡片短信发送ID。',
                                        'type' => 'string',
                                        'example' => '123',
                                    ],
                                    'BizDigitalId' => [
                                        'description' => '数字短信发送ID。',
                                        'type' => 'string',
                                        'example' => '232',
                                    ],
                                    'CardTmpState' => [
                                        'description' => '卡片短信模板审核状态。'."\n"
                                            .'- **0**：审核中'."\n"
                                            .'- **1**：审核通过'."\n"
                                            .'- **2**：审核不通过'."\n"
                                            .'> 未审核通用的短信走回落流程。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'NotMediaMobiles' => [
                                        'description' => '回落的手机号。',
                                        'type' => 'string',
                                        'example' => '1390000****',
                                    ],
                                    'BizSmsId' => [
                                        'description' => '文本短信发送ID。',
                                        'type' => 'string',
                                        'example' => '524',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => 'ForbiddenAction',
                        'errorMessage' => 'Access to the account is denied. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"RequestId\\": \\"F655A8D5-B967-440B-8683-DAD6FF8D28D0\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"MediaMobiles\\": \\"1390000****\\",\\n    \\"BizCardId\\": \\"123\\",\\n    \\"BizDigitalId\\": \\"232\\",\\n    \\"CardTmpState\\": 0,\\n    \\"NotMediaMobiles\\": \\"1390000****\\",\\n    \\"BizSmsId\\": \\"524\\"\\n  }\\n}","type":"json"}]',
            'title' => '发送卡片短信',
            'summary' => '发送卡片短信。',
            'description' => '- 针对卡片短信超时的时间建议设置为≥3S。'."\n"
                .'- SDK重试默认是开启的，建议关闭不要打开重试；发生超时失败的情况，建议等待回执状态再决定是否重试。'."\n"
                .'- 国内短信、国际短信和多媒体消息，均不支持幂等的能力，请您自行做好幂等控制。'."\n"
                .'- 您在调用此接口时，不要开启SDK重试逻辑，否则可能会造成多次发送的情况。'."\n"
                .'- 发送卡片短信前已添加卡片短信模板且模板审核通过，如果该手机号不支持发送卡片短信，SendCardSms接口支持数字短信和文本短信的回落，提升发送的触发率。'."\n"
                .'- SendCardSms接口在发送短信时，会校验号码是否支持卡片短信。如果不支持可在接口中设置是否接受回落，如果不接受回落就直接返回失败。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'SendBatchCardSms' => [
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
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CardTemplateCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '卡片短信模板Code。请在控制台**国内消息**页面中的**模板管理**页签下**模板CODE**一列查看。'."\n"
                            .'>必须是已添加、并通过审核的卡片短信模板。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'CARD_SMS_3245',
                    ],
                ],
                [
                    'name' => 'SmsTemplateCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '回落文本短信的模板Code。请在控制台**国内消息**页面中的**模板管理**页签下**模板CODE**一列查看。'."\n"
                            .'>必须是已添加、并通过审核的短信模板。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'SMS_234251075',
                    ],
                ],
                [
                    'name' => 'FallbackType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '回落类型。取值：'."\n"
                            .'- **SMS**：不支持卡片短信的号码，回落文本短信。'."\n"
                            .'- **DIGITALSMS**：不支持卡片短信的号码，回落数字短信。'."\n"
                            .'- **NONE**：不需要回落。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'SMS',
                    ],
                ],
                [
                    'name' => 'DigitalTemplateCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '回落数字短信的模板Code。请在控制台**国内消息**页面中的**模板管理**页签下**模板CODE**一列查看。'."\n"
                            .'>必须是已添加、并通过审核的短信模板。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DIGITAL_SMS_234080176',
                    ],
                ],
                [
                    'name' => 'OutId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留给调用方使用的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '16545681783595370',
                    ],
                ],
                [
                    'name' => 'PhoneNumberJson',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接收短信的手机号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[\\"1390000****\\",\\"1370000****\\"]"',
                    ],
                ],
                [
                    'name' => 'SignNameJson',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信签名名称。'."\n"
                            .'请在控制台**国内消息**页面中的**签名管理**页签下**签名名称**一列查看。'."\n"
                            .'>必须是已添加、并通过审核的短信签名；且短信签名的个数必须与手机号码的个数相同、内容一一对应。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[\\"阿里云\\",\\"阿里巴巴\\"]',
                    ],
                ],
                [
                    'name' => 'CardTemplateParamJson',
                    'in' => 'query',
                    'schema' => [
                        'description' => '卡片短信模板参数对应的实际值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{\\"customurl\\":\\"http://www.alibaba.com\\",\\"dyncParams\\":\\"{\\\\\\"a\\\\\\":\\\\\\"hello\\\\\\",\\\\\\"b\\\\\\":\\\\\\"world\\\\\\"}\\"}]',
                    ],
                ],
                [
                    'name' => 'SmsTemplateParamJson',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文本短信模板参数对应的实际值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{"a":1,"b":2},{"a":9,"b":8}]',
                    ],
                ],
                [
                    'name' => 'DigitalTemplateParamJson',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数字短信模板参数对应的实际值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{"a":1,"b":2},{"a":9,"b":8}]',
                    ],
                ],
                [
                    'name' => 'SmsUpExtendCodeJson',
                    'in' => 'query',
                    'schema' => [
                        'description' => '上行短信扩展码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[\\"6\\",\\"6\\"]',
                    ],
                ],
                [
                    'name' => 'TemplateCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信模板CODE。'."\n"
                            ."\n"
                            .'您可以登录[短信服务控制台](https://dysms.console.aliyun.com/dysms.htm?spm=5176.12818093.categories-n-products.ddysms.3b2816d0xml2NA#/overview)，选择**国内消息**或**国际/港澳台消息**，在**模板管理**页面查看**模板CODE**。'."\n"
                            ."\n"
                            .'>必须是已添加、并通过审核的短信模板；且发送国际/港澳台消息时，请使用国际/港澳台短信模板。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SMS_20375****',
                    ],
                ],
                [
                    'name' => 'TemplateParamJson',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信模板变量对应的实际值。'."\n"
                            ."\n"
                            .'>如果JSON中需要带换行符，请参照标准的JSON协议处理；且模板变量值的个数必须与手机号码、签名的个数相同、内容一一对应，表示向指定手机号码中发对应签名的短信，且短信模板中的变量参数替换为对应的值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{"name":"TemplateParamJson"},{"name":"TemplateParamJson"}]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    .'* 返回OK代表请求成功。'."\n"
                                    .'* 其他错误码，请参见[API错误码](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A90E4451-FED7-49D2-87C8-00700A8C4D0D',
                            ],
                            'Success' => [
                                'description' => '调用接口是否成功。取值：'."\n"
                                    ."\n"
                                    .'- **true**'."\n"
                                    ."\n"
                                    .'- **false**',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回数据。'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'MediaMobiles' => [
                                        'description' => '发送卡片短信的手机号。',
                                        'type' => 'string',
                                        'example' => '1390000****',
                                    ],
                                    'BizCardId' => [
                                        'description' => '卡片短信发送ID。',
                                        'type' => 'string',
                                        'example' => '123',
                                    ],
                                    'BizDigitalId' => [
                                        'description' => '数字短信发送ID。',
                                        'type' => 'string',
                                        'example' => '3214',
                                    ],
                                    'CardTmpState' => [
                                        'description' => '卡片短信模板审核状态。'."\n"
                                            .'- **0**：审核中'."\n"
                                            .'- **1**：审核通过'."\n"
                                            .'- **2**：审核不通过'."\n"
                                            .'> 审核不通过的短信走回落流程。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'NotMediaMobiles' => [
                                        'description' => '回落的手机号。',
                                        'type' => 'string',
                                        'example' => '1390000****',
                                    ],
                                    'BizSmsId' => [
                                        'description' => '文本短信发送ID。',
                                        'type' => 'string',
                                        'example' => '3256',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => 'ForbiddenAction',
                        'errorMessage' => 'Access to the account is denied. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"RequestId\\": \\"A90E4451-FED7-49D2-87C8-00700A8C4D0D\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"MediaMobiles\\": \\"1390000****\\",\\n    \\"BizCardId\\": \\"123\\",\\n    \\"BizDigitalId\\": \\"3214\\",\\n    \\"CardTmpState\\": 0,\\n    \\"NotMediaMobiles\\": \\"1390000****\\",\\n    \\"BizSmsId\\": \\"3256\\"\\n  }\\n}","type":"json"}]',
            'title' => '批量发送卡片短信',
            'summary' => '批量发送卡片短信。',
            'description' => '- 针对卡片短信超时的时间建议设置为≥3S。'."\n"
                .'- SDK重试默认是开启的，建议关闭不要打开重试；发生超时失败的情况，建议等待回执状态再决定是否重试。'."\n"
                .'- 国内短信、国际短信和多媒体消息，均不支持幂等的能力，请您自行做好幂等控制。'."\n"
                .'- 您在调用此接口时，不要开启SDK重试逻辑，否则可能会造成多次发送的情况。'."\n"
                .'- 批量发送卡片短信，每个号码可以使用不同的签名，不同的回落。在一次请求中，最多可以向100个手机号码分别发送卡片短信。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'SmsConversionIntl' => [
            'summary' => '将每一条消息ID(MessageId) 对应短信的接收情况反馈给阿里云国际短信平台。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'MessageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1008030300****'."\n",
                    ],
                ],
                [
                    'name' => 'Delivered',
                    'in' => 'query',
                    'schema' => [
                        'description' => '如果您的用户回复了您发送的消息，则设置为 true。否则，设置为 false。',
                        'type' => 'boolean',
                        'required' => true,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ConversionTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '触达发送目标的时间戳。必须是Unix时间戳，毫秒级别长整型。'."\n"
                            ."\n"
                            .'- 如果不指定该字段：默认当前的时间戳。'."\n"
                            ."\n"
                            .'- 如果指定该字段：该时间戳必须大于发送时间并且小于当前时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1349055900000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '接口返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F655A8D5-B967-440B-8683-DAD6FF8D****'."\n",
                            ],
                            'Code' => [
                                'description' => '状态码。返回OK代表请求成功，其他错误码，请参见[错误码列表](https://help.aliyun.com/document_detail/101346.html?spm=a2c4g.101345.0.0.74326ff2J5EZyt)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"F655A8D5-B967-440B-8683-DAD6FF8D****\\\\n\\",\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
            'title' => '国内发国际短信转化反馈',
            'description' => '指标说明：'."\n"
                ."\n"
                .'- OTP发送量：验证码发送量。'."\n"
                ."\n"
                .'- OTP转化量：验证码转换量。（用户成功获取验证码，并进行回传）'."\n"
                ."\n"
                .'转化率=OTP转化量/OTP发送量。'."\n"
                ."\n"
                .'> 转化率反馈功能会对业务系统有一定的侵入性，为了防止调用转化率API的抖动影响业务逻辑，请考虑：  - 使用异步模式（例如：队列或事件驱动）调用API。  - 添加可降级的方案保护业务逻辑（例如：手动降级开工或者使用断路器自动降级）。',
        ],
        'ConversionDataIntl' => [
            'summary' => '将短信转化率统计数据反馈给阿里云短信平台。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ReportTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '转化率观测的时间点。必须是Unix时间戳，毫秒级别长整型。'."\n"
                            ."\n"
                            .'>如果不指定该字段：默认当前的时间戳。'."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1349055900000',
                    ],
                ],
                [
                    'name' => 'ConversionRate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '转化率监控回报值。'."\n"
                            .'>该参数取值为double类型 ，区间是\\[0,1]。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '0.53',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F655A8D5-B967-440B-8683-DAD6FF8D****'."\n",
                            ],
                            'Code' => [
                                'description' => '状态码。返回OK代表请求成功，其他错误码，请参见[错误码列表](https://help.aliyun.com/document_detail/101346.html?spm=a2c4g.101345.0.0.74326ff2J5EZyt)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"F655A8D5-B967-440B-8683-DAD6FF8D****\\\\n\\",\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
            'title' => '国内发国际转化率数据接入API',
        ],
        'AddShortUrl' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'SourceUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '原始链接地址。不超过1000个字符。'."\n"
                            .'><notice>短信服务暂时不支持使用此接口。></notice>',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'https://www.****.com/product/sms',
                    ],
                ],
                [
                    'name' => 'ShortUrlName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '短链服务名称。不超过13个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '阿里短链测试',
                    ],
                ],
                [
                    'name' => 'EffectiveDays',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '短链服务使用有效期。单位为天，有效期最长为90天。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '7',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '819BE656-D2E0-4858-8B21-B2E477085AAF',
                            ],
                            'Data' => [
                                'description' => '短链详情。',
                                'type' => 'object',
                                'properties' => [
                                    'SourceUrl' => [
                                        'description' => '原始链接地址。',
                                        'type' => 'string',
                                        'example' => 'https://www.****.com/product/sms',
                                    ],
                                    'ExpireDate' => [
                                        'description' => '短链服务使用失效时间。'."\n"
                                            ."\n"
                                            .'> **ExpireDate**值为整点时间。',
                                        'type' => 'string',
                                        'example' => '2021-09-19 00:00:00',
                                    ],
                                    'ShortUrl' => [
                                        'description' => '生成的短链服务地址。',
                                        'type' => 'string',
                                        'example' => 'http://****.cn/6y8uy7',
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
                        'errorCode' => 'ForbiddenAction',
                        'errorMessage' => 'Access to the account is denied. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"819BE656-D2E0-4858-8B21-B2E477085AAF\\",\\n  \\"Data\\": {\\n    \\"SourceUrl\\": \\"https://www.****.com/product/sms\\",\\n    \\"ExpireDate\\": \\"2021-09-19 00:00:00\\",\\n    \\"ShortUrl\\": \\"http://****.cn/6y8uy7\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AddShortUrlResponse>\\n<Message>OK</Message>\\n<RequestId>819BE656-D2E0-4858-8B21-B2E477085AAF</RequestId>\\n<Data>\\n    <SourceUrl>https://www.****.com/product/sms</SourceUrl>\\n    <ShortUrl>http://****.cn/6y8uy7</ShortUrl>\\n    <ExpireDate>2022-09-19 11:21:11</ExpireDate>\\n</Data>\\n<Code>OK</Code>\\n</AddShortUrlResponse>","errorExample":""}]',
            'title' => '创建短链',
            'summary' => '创建短链。',
            'description' => '><notice>短信服务暂时不支持使用此接口。></notice>'."\n"
                .'- 在使用此接口之前，您需要在短信服务控制台将原始链接的主域名进行域名报备。域名报备成功后，可通过此接口创建短链接。具体操作，请参见[域名报备](~~302325~~#title-mau-zdh-hd0)。'."\n"
                .'- 一个自然日最多可以创建3000个短链。'."\n"
                .'- 短链接生成后，需要进行安全审核，审核时长一般为10分钟~2小时，安全审核通过之前，短链接无法直接访问。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteShortUrl' => [
            'methods' => [
                'post',
                'get',
                'delete',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'SourceUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '原始链接地址。不超过1000个字符。'."\n"
                            .'><notice>短信服务暂时不支持使用此接口。></notice>',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'https://www.****.com/product/sms',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '819BE656-D2E0-4858-8B21-B2E477085AAF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenAction',
                        'errorMessage' => 'Access to the account is denied. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"819BE656-D2E0-4858-8B21-B2E477085AAF\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteShortUrlResponse>\\n    <Message>OK</Message>\\n    <RequestId>819BE656-D2E0-4858-8B21-B2E477085AAF</RequestId>\\n    <Code>OK</Code>\\n</DeleteShortUrlResponse>\\n","errorExample":""}]',
            'title' => '删除短链',
            'summary' => '删除短链，删除后短链将无法使用，无法还原为原链。',
            'description' => '><notice>短信服务暂时不支持使用此接口。></notice>'."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryShortUrl' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ShortUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '生成的短链服务地址。可通过[AddShortUrl](~~186774~~)接口获取。'."\n"
                            .'><notice>短信服务暂时不支持使用此接口。></notice>',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'http://****.cn/6y8uy7',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '819BE656-D2E0-4858-8B21-B2E477085AAF',
                            ],
                            'Data' => [
                                'description' => '短链详情。',
                                'type' => 'object',
                                'properties' => [
                                    'UniqueVisitorCount' => [
                                        'description' => '短链使用的UV数据。',
                                        'type' => 'string',
                                        'example' => '23',
                                    ],
                                    'SourceUrl' => [
                                        'description' => '原始链接地址。',
                                        'type' => 'string',
                                        'example' => 'https://www.****.com/product/sms',
                                    ],
                                    'ShortUrlStatus' => [
                                        'description' => '短链状态。取值：'."\n"
                                            ."\n"
                                            .'- **expired**：失效。'."\n"
                                            .'- **effective**：有效。'."\n"
                                            .'- **audit**：审核中。'."\n"
                                            .'- **reject**：审核拒绝。',
                                        'type' => 'string',
                                        'example' => 'expired',
                                    ],
                                    'PageViewCount' => [
                                        'description' => '短链使用的PV数据。',
                                        'type' => 'string',
                                        'example' => '300',
                                    ],
                                    'ExpireDate' => [
                                        'description' => '短链失效时间。',
                                        'type' => 'string',
                                        'example' => '2019-01-22 11:21:11',
                                    ],
                                    'ShortUrlName' => [
                                        'description' => '短链服务名称。',
                                        'type' => 'string',
                                        'example' => '阿里短链测试',
                                    ],
                                    'CreateDate' => [
                                        'description' => '短链创建时间。',
                                        'type' => 'string',
                                        'example' => '2019-01-08 16:44:13',
                                    ],
                                    'ShortUrl' => [
                                        'description' => '生成的短链服务地址。',
                                        'type' => 'string',
                                        'example' => 'http://****.cn/6y8uy7',
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
                        'errorCode' => 'ForbiddenAction',
                        'errorMessage' => 'Access to the account is denied. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"819BE656-D2E0-4858-8B21-B2E477085AAF\\",\\n  \\"Data\\": {\\n    \\"UniqueVisitorCount\\": \\"23\\",\\n    \\"SourceUrl\\": \\"https://www.****.com/product/sms\\",\\n    \\"ShortUrlStatus\\": \\"expired\\",\\n    \\"PageViewCount\\": \\"300\\",\\n    \\"ExpireDate\\": \\"2019-01-22 11:21:11\\",\\n    \\"ShortUrlName\\": \\"阿里短链测试\\",\\n    \\"CreateDate\\": \\"2019-01-08 16:44:13\\",\\n    \\"ShortUrl\\": \\"http://****.cn/6y8uy7\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryShortUrlResponse>\\n<Message>OK</Message>\\n<RequestId>819BE656-D2E0-4858-8B21-B2E477085AAF</RequestId>\\n<Data>\\n    <ShortUrlName>阿里短链测试</ShortUrlName>\\n    <SourceUrl>https://www.****.com/product/sms</SourceUrl>\\n    <ShortUrl>http://****.cn/6y8uy7</ShortUrl>\\n    <ExpireDate>2022-09-19 11:21:11</ExpireDate>\\n    <PageViewCount>300</PageViewCount>\\n    <CreateDate>2019-01-08 16:44:13</CreateDate>\\n    <ShortUrlStatus>expired</ShortUrlStatus>\\n    <UniqueVisitorCount>23</UniqueVisitorCount>\\n</Data>\\n<Code>OK</Code>\\n</QueryShortUrlResponse>\\n","errorExample":""}]',
            'title' => '短链状态查询',
            'summary' => '查询短链状态，可判断短链是否可用。',
            'description' => '><notice>短信服务暂时不支持使用此接口。></notice>'."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为20次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListTagResources' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型，默认填写TEMPLATE。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'TEMPLATE',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。默认取值：**cn-hangzhou**。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询下一页标签的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '23432453245',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页显示条数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'ProdCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品名。默认取值：**dysms**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dysms',
                        'default' => 'dysms',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签列表。标签列表和短信模板Code不能同时为空。最多可输入20个标签。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestKey',
                                ],
                                'Value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestValue',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '短信模板Code。短信模板Code和标签不能同时为空。',
                        'type' => 'array',
                        'items' => [
                            'description' => '短信模板Code。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'SMS_2342****',
                        ],
                        'required' => false,
                        'example' => 'SMS_23423423',
                        'maxItems' => 51,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'NextToken' => [
                                'description' => '查询下一页标签的Token。',
                                'type' => 'string',
                                'example' => '"23432453245"',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A90E4451-FED7-49D2-87C8-00700A8C4D0D',
                            ],
                            'TagResources' => [
                                'type' => 'object',
                                'properties' => [
                                    'TagResource' => [
                                        'description' => '标签资源。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '标签资源。',
                                            'type' => 'object',
                                            'properties' => [
                                                'ResourceType' => [
                                                    'description' => '资源类型。',
                                                    'type' => 'string',
                                                    'example' => 'ALIYUN::DYSMS::TEMPLATE',
                                                ],
                                                'TagValue' => [
                                                    'description' => '标签值。',
                                                    'type' => 'string',
                                                    'example' => 'TestValue',
                                                ],
                                                'ResourceId' => [
                                                    'description' => '短信模板Code。',
                                                    'type' => 'string',
                                                    'example' => 'SMS_23423****',
                                                ],
                                                'TagKey' => [
                                                    'description' => '标签键。',
                                                    'type' => 'string',
                                                    'example' => 'TestKey',
                                                ],
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
                200 => [
                    [
                        'errorCode' => 'ForbiddenAction',
                        'errorMessage' => 'Access to the account is denied. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"NextToken\\": \\"\\\\\\"23432453245\\\\\\"\\",\\n  \\"RequestId\\": \\"A90E4451-FED7-49D2-87C8-00700A8C4D0D\\",\\n  \\"TagResources\\": {\\n    \\"TagResource\\": [\\n      {\\n        \\"ResourceType\\": \\"ALIYUN::DYSMS::TEMPLATE\\",\\n        \\"TagValue\\": \\"TestValue\\",\\n        \\"ResourceId\\": \\"SMS_23423****\\",\\n        \\"TagKey\\": \\"TestKey\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n    <Code>OK</Code>\\n    <NextToken>\\"23432453245\\"</NextToken>\\n    <RequestId>A90E4451-FED7-49D2-87C8-00700A8C4D0D</RequestId>\\n    <TagResources>\\n        <ResourceType>ALIYUN::DYSMS::TEMPLATE</ResourceType>\\n        <TagValue>TestValue</TagValue>\\n        <ResourceId>SMS_23423****</ResourceId>\\n        <TagKey>TestKey</TagKey>\\n    </TagResources>\\n</ListTagResourcesResponse>","errorExample":""}]',
            'title' => '查询模板标签',
            'summary' => '查询模板标签。',
            'description' => '### QPS限制'."\n"
                .'本接口的单用户QPS限制为50次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'TagResources' => [
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型，默认取值：**TEMPLATE**。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'TEMPLATE',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID，默认取值：**cn-hangzhou**。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ProdCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品名。默认取值：**dysms**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dysms',
                        'default' => 'dysms',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。N的取值范围为\\[1, 20]。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestKey',
                                ],
                                'Value' => [
                                    'description' => '标签值。N的取值范围为\\[1, 20]。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestValue',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 21,
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '短信模板Code。',
                        'type' => 'array',
                        'items' => [
                            'description' => '短信模板Code。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'SMS_2342****',
                        ],
                        'required' => false,
                        'example' => 'SMS_23423423',
                        'maxItems' => 51,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '添加标签的执行结果。取值：'."\n"
                                    ."\n"
                                    .'- **true**：成功。'."\n"
                                    .'- **false**：失败。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A90E4451-FED7-49D2-87C8-00700A8C****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => 'ForbiddenAction',
                        'errorMessage' => 'Access to the account is denied. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Data\\": \\"true\\",\\n  \\"RequestId\\": \\"A90E4451-FED7-49D2-87C8-00700A8C****\\"\\n}","type":"json"}]',
            'title' => '添加模板标签',
            'summary' => '给模板添加标签。',
            'description' => '### QPS限制'."\n"
                .'本接口的单用户QPS限制为50次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UntagResources' => [
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
            'systemTags' => [
                'operationType' => 'delete',
                'abilityTreeCode' => '102473',
                'abilityTreeNodes' => [
                    'FEATUREdysmsGD2ZLS',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型，默认填写TEMPLATE。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'TEMPLATE',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域，默认填写cn-hangzhou。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'All',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否删除该模板下的所有标签。取值：'."\n"
                            ."\n"
                            .'- **true**：是。'."\n"
                            .'- **false**：否。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'ProdCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品名。默认取值：**dysms**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dysms',
                        'default' => 'dysms',
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签键。标签键的数量范围为[1, 20]。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签键。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'sampleTagKey',
                        ],
                        'required' => false,
                        'example' => 'TestKey',
                        'maxItems' => 21,
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '短信模板Code。模板Code的数量范围为[1,20]。',
                        'type' => 'array',
                        'items' => [
                            'description' => '短信模板Code。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'SMS_2342****',
                        ],
                        'required' => false,
                        'example' => 'SMS_23423423',
                        'maxItems' => 51,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~101346~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '删除标签的执行结果。取值：'."\n"
                                    ."\n"
                                    .'- **true**：成功。'."\n"
                                    ."\n"
                                    .'- **false**：失败。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A90E4451-FED7-49D2-87C8-00700A8C****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => 'ForbiddenAction',
                        'errorMessage' => 'Access to the account is denied. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Data\\": \\"true\\",\\n  \\"RequestId\\": \\"A90E4451-FED7-49D2-87C8-00700A8C****\\"\\n}","errorExample":""},{"type":"xml","example":"<UntagResourcesResponse>\\n<RequestId>A90E4451-FED7-49D2-87C8-00700A8C****</RequestId>\\n<Data>true</Data>\\n<Code>OK</Code>\\n</UntagResourcesResponse>","errorExample":""}]',
            'title' => '删除模板标签',
            'summary' => '删除模板标签。',
            'description' => '### QPS限制'."\n"
                .'本接口的单用户QPS限制为50次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'dysmsapi.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'dysmsapi.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'dysmsapi.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'dysmsapi.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'dysmsapi.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote-nebula-1',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'dysmsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'dysmsapi.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'dysmsapi.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'dysmsapi.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'dysmsapi.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'dysmsapi.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'dysmsapi.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'dysmsapi.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'dysmsapi.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'dysmsapi.ap-southeast-1.aliyuncs.com',
        ],
    ],
];
<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Dyvmsapi-intl',
        'version' => '2021-10-15',
    ],
    'directories' => [
        [
            'id' => 186730,
            'title' => '语音单呼',
            'type' => 'directory',
            'children' => [
                'SignalCall',
                'BackendCallSignal',
            ],
        ],
        [
            'id' => 166271,
            'title' => '语音群呼',
            'type' => 'directory',
            'children' => [
                'GroupCall',
                'BackendCallGroup',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'SignalCall' => [
            'summary' => '向指定号码发送语音验证码和带参数变量的语音通知，支持语音文件模板或文本转语音模板。',
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
            'parameters' => [
                [
                    'name' => 'Signature',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证签名。自动补全，无需写入。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '9****************D',
                    ],
                ],
                [
                    'name' => 'Timestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '写入记录的时间。自动补全，无需写入。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '20**-**-**T**%3A25%3A10Z',
                    ],
                ],
                [
                    'name' => 'SignatureNonce',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名唯一的随机数。自动补全，无需写入。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'l*********y',
                    ],
                ],
                [
                    'name' => 'CallerIdNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '主叫号码。  若您不填该参数，系统将会使用当地随机号码作为外显号码。 若您专属号码外呼，则必须传入已购买的号码，仅支持一个号码。您可以登录国际语音服务控制台，选择"号码管理"查看已购买的号码。',
                        'description' => '主叫号码。  若您不填该参数，系统将会使用当地随机号码作为外显号码。 若您专属号码外呼，则必须传入已购买的号码，仅支持一个号码。您可以登录国际语音服务控制台，选择"号码管理"查看已购买的号码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '852****0001',
                    ],
                ],
                [
                    'name' => 'CalledNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '接收语音通知的手机号码。  号码格式：国际码+号码： 示例：85200****00。',
                        'description' => '接收语音通知的手机号码。  号码格式：国际码+号码： 示例：85200****00。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '852****0000',
                    ],
                ],
                [
                    'name' => 'TtsCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '文本转语音模板的语音ID。  您可以登录国际语音服务控制台，选择"语音模板管理"-"文本转语音模板"，查看模板ID。  此参数与VoiceCode二选一必填。分别代表使用语音文件作为呼叫内容呼叫或者使用固定模板文字作为呼叫内容。',
                        'description' => '文本转语音模板的语音ID。  您可以登录国际语音服务控制台，选择"语音模板管理"-"文本转语音模板"，查看模板ID。  此参数与VoiceCode二选一必填。分别代表使用语音文件作为呼叫内容呼叫或者使用固定模板文字作为呼叫内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1001',
                    ],
                ],
                [
                    'name' => 'TtsParam',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模板中的变量参数，JSON格式。',
                        'description' => '模板中的变量参数，JSON格式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"code":"1234"}',
                    ],
                ],
                [
                    'name' => 'VoiceCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '语音文件的模板ID。  您可以登录国际语音服务控制台，选择"语音模板管理"-"语音文件"，查看模板ID。  此参数与TtsCode二选一必填。分别代表使用语音文件作为呼叫内容呼叫或者使用固定模板文字作为呼叫内容。',
                        'description' => '语音文件的模板ID。  您可以登录国际语音服务控制台，选择"语音模板管理"-"语音文件"，查看模板ID。  此参数与TtsCode二选一必填。分别代表使用语音文件作为呼叫内容呼叫或者使用固定模板文字作为呼叫内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1002',
                    ],
                ],
                [
                    'name' => 'PlayTimes',
                    'in' => 'query',
                    'schema' => [
                        'title' => '一通电话内语音通知内容的播放次数。取值范围：1~3，默认取值3。',
                        'description' => '一通电话内语音通知内容的播放次数。取值范围：1~3，默认取值3。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'Volume',
                    'in' => 'query',
                    'schema' => [
                        'title' => '语音通知的播放音量。取值范围：0~100，默认取值100。',
                        'description' => '语音通知的播放音量。取值范围：0~100，默认取值100。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'Speed',
                    'in' => 'query',
                    'schema' => [
                        'title' => '语速控制。取值范围为：-500~500。',
                        'description' => '语速控制。取值范围为：-500~500。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'CountryId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '国家/地区二字码，ISO2。',
                        'description' => '国家/地区二字码，ISO2。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HK',
                    ],
                ],
                [
                    'name' => 'TaskName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务名称。',
                        'description' => '任务名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '单呼任务名',
                    ],
                ],
                [
                    'name' => 'SendType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '发送类型：取值[1,2]。  1： 立即开始发送任务，不等待。  2： 定时开始发送任务。如果传该类型，TimingStart为必选字段。',
                        'description' => '发送类型：取值[1,2]。  1： 立即开始发送任务，不等待。  2： 定时开始发送任务。如果传该类型，TimingStart为必选字段。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'TimingStart',
                    'in' => 'query',
                    'schema' => [
                        'title' => '定时发送的时间。',
                        'description' => '定时发送的时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-05-01T08:00:00+08:00',
                    ],
                ],
                [
                    'name' => 'OutId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '预留给调用方使用的ID，最终会通过在回执消息中将此ID带回给调用方。  字符串类型，长度为1~15个字节。',
                        'description' => '预留给调用方使用的ID，最终会通过在回执消息中将此ID带回给调用方。  字符串类型，长度为1~15个字节。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '22522****',
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
                                'example' => '""',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D9CB****-****-****-****-********9D23'."\n",
                            ],
                            'Message' => [
                                'title' => '返回信息描述。',
                                'description' => '返回信息描述。',
                                'type' => 'string',
                                'example' => 'OK'."\n",
                            ],
                            'Model' => [
                                'description' => '请求结果数据',
                                'type' => 'object',
                                'properties' => [
                                    'CallId' => [
                                        'title' => '任务ID，可以通过此ID查询任务的详情。',
                                        'description' => '任务ID，可以通过此ID查询任务的详情。',
                                        'type' => 'string',
                                        'example' => '550E****-****-****-****-********0CA0'."\n",
                                    ],
                                ],
                                'example' => '',
                            ],
                            'Code' => [
                                'title' => '请求状态码。  返回OK代表请求成功。 其他错误码，请参见API错误码。',
                                'description' => '请求状态码。  返回OK代表请求成功。 其他错误码，请参见API错误码。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'title' => '请求是否成功，成功：true，失败：false。',
                                'description' => '请求是否成功，成功：true，失败：false。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"RequestId\\": \\"D9CB****-****-****-****-********9D23\\\\n\\",\\n  \\"Message\\": \\"OK\\\\n\\",\\n  \\"Model\\": {\\n    \\"CallId\\": \\"550E****-****-****-****-********0CA0\\\\n\\"\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '向指定号码发起语音呼叫',
        ],
        'BackendCallSignal' => [
            'summary' => '向指定号码发送语音验证码和带参数变量的语音通知。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '107320',
                'abilityTreeNodes' => [
                    'FEATUREdyvms5W940Z',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'CalledNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接收语音通知的手机号码。'."\n"
                            ."\n"
                            .'号码格式：国际码+号码：'."\n"
                            .'示例：85200****00。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '852****0000',
                    ],
                ],
                [
                    'name' => 'CallerIdNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主叫号码。'."\n"
                            ."\n"
                            .'若您不填该参数，系统将会使用当地随机号码作为外显号码。'."\n"
                            .'若您专属号码外呼，则必须传入已购买的号码，仅支持一个号码。您可以登录国际语音服务控制台，选择"号码管理"查看已购买的号码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '852****0000',
                    ],
                ],
                [
                    'name' => 'CountryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '国家二字码，ISO2',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HK',
                    ],
                ],
                [
                    'name' => 'PlayTimes',
                    'in' => 'query',
                    'schema' => [
                        'description' => '一通电话内语音通知内容的播放次数。取值范围：1~3，默认取值3。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'Speed',
                    'in' => 'query',
                    'schema' => [
                        'description' => '语速控制。取值范围为：-500~500。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'TtsCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '已通过审核的语音验证码模板ID。'."\n"
                            ."\n"
                            .'您可以登录国际语音服务控制台，选择"国际语音-语音模板管理-文本转语音模板"查看模板ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1001',
                    ],
                ],
                [
                    'name' => 'TtsParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板中的变量参数，JSON格式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"code":"1234"}',
                    ],
                ],
                [
                    'name' => 'Volume',
                    'in' => 'query',
                    'schema' => [
                        'description' => '语音通知的播放音量。取值范围：0~100，默认取值100。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'OutId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '预留给调用方使用的ID，最终会通过在回执消息中将此ID带回给调用方。'."\n"
                            ."\n"
                            .'字符串类型，长度为1~15个字节。',
                        'description' => '预留给调用方使用的ID，最终会通过在回执消息中将此ID带回给调用方。'."\n"
                            ."\n"
                            .'字符串类型，长度为1~15个字节。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '22522****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D9CB****-****-****-****-********9D23',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'返回OK代表请求成功。'."\n"
                                    .'其他错误码，请参见API错误码。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'CallId' => [
                                'description' => '此次通话的唯一回执ID。可以通过此ID查询单个通话的详情。',
                                'type' => 'string',
                                'example' => '550E****-****-****-****-********0CA0',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D9CB****-****-****-****-********9D23\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"CallId\\": \\"550E****-****-****-****-********0CA0\\"\\n}","type":"json"}]',
            'title' => '向指定号码发起语音验证码',
        ],
        'GroupCall' => [
            'summary' => '向指定号码发送多次语音呼叫，支持语音文件模板或文本转语音模板进行呼叫。',
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
            'parameters' => [
                [
                    'name' => 'Signature',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证签名。自动补全，无需写入',
                        'type' => 'string',
                        'required' => false,
                        'example' => 's****************D'."\n",
                    ],
                ],
                [
                    'name' => 'Timestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '写入记录的时间。自动补全，无需写入',
                        'type' => 'string',
                        'required' => false,
                        'example' => '20**-**-******10Z'."\n",
                    ],
                ],
                [
                    'name' => 'SignatureNonce',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名唯一的随机数。自动补全，无需写入。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'l*********y'."\n",
                    ],
                ],
                [
                    'name' => 'CalledNumber',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '被叫号码。上限为5万个。',
                        'description' => '被叫号码。上限为5万个。',
                        'type' => 'array',
                        'items' => [
                            'title' => '号码格式：国际码+号码。 例如： 852****0000',
                            'description' => '号码格式：国际码+号码。 例如： 852****0000',
                            'type' => 'string',
                            'required' => false,
                            'example' => '852****0000',
                        ],
                        'required' => false,
                        'example' => '',
                    ],
                ],
                [
                    'name' => 'CallerIdNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '主叫号码。  若您不填该参数，系统将会使用当地随机号码作为外显号码。 若您专属号码外呼，则必须传入已购买的号码，仅支持一个号码。您可以登录国际语音服务控制台，选择"号码管理"查看已购买的号码。',
                        'description' => '主叫号码。  若您不填该参数，系统将会使用当地随机号码作为外显号码。 若您专属号码外呼，则必须传入已购买的号码，仅支持一个号码。您可以登录国际语音服务控制台，选择"号码管理"查看已购买的号码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '852****1111',
                    ],
                ],
                [
                    'name' => 'CountryId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '国家/地区二字码，ISO2。',
                        'description' => '国家/地区二字码，ISO2。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HK',
                    ],
                ],
                [
                    'name' => 'PlayTimes',
                    'in' => 'query',
                    'schema' => [
                        'title' => '语音文件的播放次数。取值范围：1~3。',
                        'description' => '语音文件的播放次数。取值范围：1~3。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'SendType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '发送类型：取值[1,2]。  1： 立即开始发送任务，不等待。  2： 定时开始发送任务。如果传该类型，TimingStart为必选字段。',
                        'description' => '发送类型：取值[1,2]。  1： 立即开始发送任务，不等待。  2： 定时开始发送任务。如果传该类型，TimingStart为必选字段。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'Speed',
                    'in' => 'query',
                    'schema' => [
                        'title' => '语速控制，取值范围：-500~500。  音频类型为TTS时必传。录音文件可不传。',
                        'description' => '语速控制，取值范围：-500~500。  音频类型为TTS时必传。录音文件可不传。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '94',
                    ],
                ],
                [
                    'name' => 'TaskName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务名称。',
                        'description' => '任务名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '群呼任务',
                    ],
                ],
                [
                    'name' => 'TimingStart',
                    'in' => 'query',
                    'schema' => [
                        'title' => '2022-05-01T08:00:00+08:00',
                        'description' => '2022-05-01T08:00:00+08:00',
                        'type' => 'string',
                        'required' => false,
                        'example' => '定时发送的时间。',
                    ],
                ],
                [
                    'name' => 'TtsCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '文本转语音的模板ID。  您可以登录国际语音服务控制台，选择"语音模板管理"-"文本转语音模板"，查看模板ID。  此参数与VoiceCode二选一必填。分别代表使用语音文件作为呼叫内容呼叫或者使用固定模板文字作为呼叫内容。',
                        'description' => '文本转语音的模板ID。  您可以登录国际语音服务控制台，选择"语音模板管理"-"文本转语音模板"，查看模板ID。  此参数与VoiceCode二选一必填。分别代表使用语音文件作为呼叫内容呼叫或者使用固定模板文字作为呼叫内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1****01',
                    ],
                ],
                [
                    'name' => 'VoiceCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '语音文件的模板ID。  您可以登录国际语音服务控制台，选择"语音模板管理"-"语音文件"，查看模板ID。  此参数与TtsCode二选一必填。分别代表使用语音文件作为呼叫内容呼叫或者使用固定模板文字作为呼叫内容。',
                        'description' => '语音文件的模板ID。  您可以登录国际语音服务控制台，选择"语音模板管理"-"语音文件"，查看模板ID。  此参数与TtsCode二选一必填。分别代表使用语音文件作为呼叫内容呼叫或者使用固定模板文字作为呼叫内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2*****01',
                    ],
                ],
                [
                    'name' => 'Volume',
                    'in' => 'query',
                    'schema' => [
                        'title' => '语音文件播放的音量。取值范围：0~100，默认取值100。',
                        'description' => '语音文件播放的音量。取值范围：0~100，默认取值100。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '11',
                    ],
                ],
                [
                    'name' => 'OutId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '预留给调用方使用的ID，最终会通过在回执消息中将此ID带回给调用方。  字符串类型，长度为1~15个字节。',
                        'description' => '预留给调用方使用的ID，最终会通过在回执消息中将此ID带回给调用方。  字符串类型，长度为1~15个字节。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '22596****'."\n",
                    ],
                ],
                [
                    'name' => 'TtsParam',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模板中的变量参数，JSON格式。',
                        'description' => '模板中的变量参数，JSON格式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"code":"1234"}',
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
                                'example' => '""',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'E50F****-****-****-****-********966F',
                            ],
                            'Message' => [
                                'title' => '返回信息描述',
                                'description' => '返回信息描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Model' => [
                                'description' => '请求结果数据。',
                                'type' => 'object',
                                'properties' => [
                                    'TaskId' => [
                                        'title' => '任务ID，可以通过此ID查询任务的详情。',
                                        'description' => '任务ID，可以通过此ID查询任务的详情。',
                                        'type' => 'string',
                                        'example' => '550E****-****-****-****-********00A0',
                                    ],
                                ],
                                'example' => '',
                            ],
                            'Code' => [
                                'title' => '请求状态码。  返回OK代表请求成功。 其他错误码，请参见API错误码。',
                                'description' => '请求状态码。  返回OK代表请求成功。 其他错误码，请参见API错误码。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"RequestId\\": \\"E50F****-****-****-****-********966F\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Model\\": {\\n    \\"TaskId\\": \\"550E****-****-****-****-********00A0\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
            'title' => '向指定的一批号码发起语音群呼',
        ],
        'BackendCallGroup' => [
            'summary' => '向指定的一批号码发起语音群呼。群呼内容为已经通过审核的模板。可以通过登录国际语音控制台，进入“模板管理”查看模板ID。此功能会将号码送入发送队列进行排队。实际呼出时间不确定。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '107319',
                'abilityTreeNodes' => [
                    'FEATUREdyvms5W940Z',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'CalledNumber',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '被叫号码。上限为5万个。',
                        'type' => 'array',
                        'items' => [
                            'description' => '号码格式：国际码+号码。'."\n"
                                .'例如： 852****0000',
                            'type' => 'string',
                            'required' => false,
                            'example' => '852****0000',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CallerIdNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主叫号码。'."\n"
                            ."\n"
                            .'若您不填该参数，系统将会使用当地随机号码作为外显号码。'."\n"
                            .'若您专属号码外呼，则必须传入已购买的号码，仅支持一个号码。您可以登录国际语音服务控制台，选择"号码管理"查看已购买的号码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '852****1111',
                    ],
                ],
                [
                    'name' => 'CountryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '国家码。ISO2。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HK',
                    ],
                ],
                [
                    'name' => 'PlayTimes',
                    'in' => 'query',
                    'schema' => [
                        'description' => '语音文件的播放次数。取值范围：1~3。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'SendType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发送类型：取值[1,2]。'."\n"
                            ."\n"
                            .'1： 立即开始发送任务，不等待。'."\n"
                            ."\n"
                            .'2： 定时开始发送任务。如果传该类型，TimingStart为必选字段。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'Speed',
                    'in' => 'query',
                    'schema' => [
                        'description' => '语速控制，取值范围：-500~500。'."\n"
                            ."\n"
                            .'音频类型为TTS时必传。录音文件可不传。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'TaskName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试群呼',
                    ],
                ],
                [
                    'name' => 'TimingStart',
                    'in' => 'query',
                    'schema' => [
                        'description' => '定时发送的时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-05-01T08:00:00+08:00',
                    ],
                ],
                [
                    'name' => 'TtsCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '语音文件的语音ID。'."\n"
                            ."\n"
                            .'您可以登录国际语音服务控制台，选择"语音模板管理"-"文本转语音模板"，查看模板ID。'."\n"
                            ."\n"
                            .'此参数与VoiceCode二选一必填。分别代表使用语音文件作为呼叫内容呼叫或者使用固定模板文字作为呼叫内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '100001',
                    ],
                ],
                [
                    'name' => 'VoiceCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文本转语音的模板ID。'."\n"
                            ."\n"
                            .'您可以登录国际语音服务控制台，选择"语音模板管理"-"语音文件"，查看模板ID。'."\n"
                            ."\n"
                            .'此参数与TtsCode二选一必填。分别代表使用语音文件作为呼叫内容呼叫或者使用固定模板文字作为呼叫内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '200001',
                    ],
                ],
                [
                    'name' => 'Volume',
                    'in' => 'query',
                    'schema' => [
                        'description' => '语音文件播放的音量。取值范围：0~100，默认取值100。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'OutId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '预留给调用方使用的ID，最终会通过在回执消息中将此ID带回给调用方。'."\n"
                            ."\n"
                            .'字符串类型，长度为1~15个字节。',
                        'description' => '预留给调用方使用的ID，最终会通过在回执消息中将此ID带回给调用方。'."\n"
                            ."\n"
                            .'字符串类型，长度为1~15个字节。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '22596****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'E50F****-****-****-****-********966F',
                            ],
                            'Code' => [
                                'description' => '	'."\n"
                                    .'请求状态码。'."\n"
                                    ."\n"
                                    .'返回OK代表请求成功。'."\n"
                                    .'其他错误码，请参见API错误码。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '返回信息描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'TaskId' => [
                                'description' => '任务ID，可以通过此ID查询任务的详情。',
                                'type' => 'string',
                                'example' => '550E****-****-****-****-********00A0',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E50F****-****-****-****-********966F\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"TaskId\\": \\"550E****-****-****-****-********00A0\\"\\n}","errorExample":""},{"type":"xml","example":"<BackendCallGroupResponse>\\n    <RequestId>E50FFA85-0B79-4421-A7BD-00B0A271966F</RequestId>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <TaskId>550e8400-e29b-41d4-a716-446655440000</TaskId>\\n</BackendCallGroupResponse>","errorExample":""}]',
            'title' => '向指定的一批号码发起语音群呼',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'dyvmsapi-intl.ap-southeast-1.aliyuncs.com',
        ],
    ],
];
<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'rtc',
        'version' => '2018-01-11',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'ModifyApp' => [
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
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeApps' => [
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
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'AppVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            '2.0',
                            '3.0',
                        ],
                    ],
                ],
            ],
        ],
        'DescribeAppKey' => [
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
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeAppLayouts' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Condition',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'LayoutId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeSystemLayoutList' => [
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
            'parameters' => [
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
            ],
        ],
        'DescribeAppCallStatus' => [
            'methods' => [
                'get',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ModifyAppCallbackStatus' => [
            'methods' => [
                'post',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeAllCallback' => [
            'methods' => [
                'get',
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
            'parameters' => [],
        ],
        'DescribeCallbacks' => [
            'methods' => [
                'get',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeAppCallbackSecretKey' => [
            'methods' => [
                'get',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ModifyCallbackMeta' => [
            'methods' => [
                'post',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Callback',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Category' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Conf' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'SubEvent' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'maxItems' => 20,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'StartCategoryCallback' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Callback',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Category' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'StopCategoryCallback' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Callback',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Category' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeChannels' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 8,
                        'maxLength' => 11,
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'maximum' => '100',
                    ],
                ],
            ],
        ],
        'StopChannel' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeChannelAllUsers' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeChannelUser' => [
            'methods' => [
                'get',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeChannel' => [
            'methods' => [
                'get',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RemoveUsers' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Users',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'UserId' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                        'maxItems' => 30,
                    ],
                ],
            ],
        ],
        'CreateAppRecordTemplate' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RecordTemplate',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'FilePrefix' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'FileSplitInterval' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'minimum' => '1800',
                                'maximum' => '20000',
                            ],
                            'DelayStopTime' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '180',
                                'maximum' => '300',
                            ],
                            'MediaEncode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'enum' => [
                                    '1',
                                    '54',
                                    '53',
                                    '52',
                                    '10',
                                    '20',
                                    '22',
                                    '23',
                                    '30',
                                    '31',
                                    '24',
                                    '25',
                                    '26',
                                    '27',
                                    '28',
                                    '32',
                                    '33',
                                    '34',
                                    '35',
                                    '36',
                                    '37',
                                    '38',
                                    '39',
                                    '40',
                                    '41',
                                    '42',
                                    '43',
                                    '0',
                                ],
                            ],
                            'Formats' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                                'maxItems' => 1,
                            ],
                            'LayoutIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                                'maxItems' => 16,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteAppRecordTemplate' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Template',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'TemplateId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ModifyAppRecordTemplate' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RecordTemplate',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'FilePrefix' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'FileSplitInterval' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'minimum' => '1800',
                                'maximum' => '20000',
                            ],
                            'DelayStopTime' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '180',
                                'maximum' => '300',
                            ],
                            'MediaEncode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'enum' => [
                                    '1',
                                    '54',
                                    '53',
                                    '52',
                                    '10',
                                    '20',
                                    '22',
                                    '23',
                                    '30',
                                    '31',
                                    '24',
                                    '25',
                                    '26',
                                    '27',
                                    '28',
                                    '32',
                                    '33',
                                    '34',
                                    '35',
                                    '36',
                                    '37',
                                    '38',
                                    '39',
                                    '40',
                                    '41',
                                    '42',
                                    '43',
                                    '0',
                                ],
                            ],
                            'Formats' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                                'maxItems' => 1,
                            ],
                            'LayoutIds' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                                'maxItems' => 16,
                            ],
                            'TemplateId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeAppRecordTemplates' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Condition',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'TemplateId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeAppRecordStatus' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ModifyAppRecordStatus' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeAppRecordingFiles' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                    ],
                ],
                [
                    'name' => 'StartTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TaskIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'minItems' => 1,
                    ],
                ],
            ],
        ],
        'UpdateCloudRecord' => [
            'methods' => [
                'post',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 128,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 55,
                        'pattern' => '^[0-9a-zA-Z_-]+$',
                    ],
                ],
                [
                    'name' => 'Panes',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'SourceType' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [
                                        'video',
                                        'camera',
                                        'screen',
                                    ],
                                ],
                                'PaneId' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '15',
                                ],
                                'Source' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'PaneCropMode' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                    ],
                                ],
                                'Images' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Url' => [
                                                'type' => 'string',
                                                'required' => true,
                                                'minLength' => 1,
                                                'maxLength' => 1024,
                                            ],
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'PaneImageCropMode' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'enum' => [
                                                    '1',
                                                    '2',
                                                    '3',
                                                ],
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Width' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Height' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Layer' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '100',
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 3,
                                ],
                                'Texts' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Texture' => [
                                                'type' => 'string',
                                                'required' => true,
                                                'minLength' => 1,
                                                'maxLength' => 128,
                                            ],
                                            'FontSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '72',
                                            ],
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'FontColor' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'R' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                    'G' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                    'B' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                ],
                                            ],
                                            'Font' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '9',
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'Layer' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '100',
                                            ],
                                            'HasBox' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'BoxColor' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'R' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                    'G' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                    'B' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                ],
                                            ],
                                            'BoxAlpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'BoxBorderw' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '1',
                                                'maximum' => '10',
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 3,
                                ],
                            ],
                        ],
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'Images',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Url' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'minLength' => 1,
                                    'maxLength' => 1024,
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'ImageCropMode' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                    ],
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '100',
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'Texts',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Texture' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'minLength' => 1,
                                    'maxLength' => 128,
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '72',
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'FontColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                    ],
                                ],
                                'Font' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '9',
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '100',
                                ],
                                'HasBox' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'BoxColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                    ],
                                ],
                                'BoxAlpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'BoxBorderw' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '1',
                                    'maximum' => '10',
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'ClockWidgets',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Zone' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '-12',
                                    'maximum' => '12',
                                    'exclusiveMaximum' => true,
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '72',
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'FontColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                    ],
                                ],
                                'Font' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '9',
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '100',
                                ],
                                'HasBox' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'BoxColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                    ],
                                ],
                                'BoxAlpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'BoxBorderw' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '1',
                                    'maximum' => '10',
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
            ],
        ],
        'StartCloudRecord' => [
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
                    'name' => 'Panes',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'SourceType' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [
                                        'video',
                                        'camera',
                                        'screen',
                                    ],
                                ],
                                'PaneId' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '15',
                                ],
                                'Source' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'PaneCropMode' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                    ],
                                ],
                                'Images' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Url' => [
                                                'type' => 'string',
                                                'required' => true,
                                                'minLength' => 1,
                                                'maxLength' => 1024,
                                            ],
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'PaneImageCropMode' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'enum' => [
                                                    '1',
                                                    '2',
                                                    '3',
                                                ],
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Width' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Height' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Layer' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '100',
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 3,
                                ],
                                'Texts' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Texture' => [
                                                'type' => 'string',
                                                'required' => true,
                                                'minLength' => 1,
                                                'maxLength' => 128,
                                            ],
                                            'FontSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '72',
                                            ],
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'FontColor' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'R' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                    'G' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                    'B' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                ],
                                            ],
                                            'Font' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '9',
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'Layer' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '100',
                                            ],
                                            'HasBox' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'BoxColor' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'R' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                    'G' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                    'B' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                ],
                                            ],
                                            'BoxAlpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'BoxBorderw' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '1',
                                                'maximum' => '10',
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 3,
                                ],
                            ],
                        ],
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'StorageConfig',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Vendor' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'minimum' => '1',
                            ],
                            'Region' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'Bucket' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                            ],
                            'AccessKey' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                            ],
                            'SecretKey' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 128,
                        'pattern' => '^[\\w.-]+$',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 1,
                        'maxLength' => 55,
                        'pattern' => '^[0-9a-zA-Z_-]+$',
                    ],
                ],
                [
                    'name' => 'CropMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enum' => [
                            '1',
                            '2',
                            '3',
                        ],
                    ],
                ],
                [
                    'name' => 'Images',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Url' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'minLength' => 1,
                                    'maxLength' => 1024,
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'ImageCropMode' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                    ],
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '100',
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'Texts',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Texture' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'minLength' => 1,
                                    'maxLength' => 128,
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '72',
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'FontColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                    ],
                                ],
                                'Font' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '9',
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '100',
                                ],
                                'HasBox' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'BoxColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                    ],
                                ],
                                'BoxAlpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'BoxBorderw' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '1',
                                    'maximum' => '10',
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'ClockWidgets',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Zone' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '-12',
                                    'maximum' => '12',
                                    'exclusiveMaximum' => true,
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '72',
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'FontColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                    ],
                                ],
                                'Font' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '9',
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '100',
                                ],
                                'HasBox' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'BoxColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                    ],
                                ],
                                'BoxAlpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'BoxBorderw' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '1',
                                    'maximum' => '10',
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
            ],
        ],
        'StopCloudRecord' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 55,
                        'pattern' => '^[0-9a-zA-Z_-]+$',
                    ],
                ],
            ],
        ],
        'ModifyAppStreamingOutTemplate' => [
            'methods' => [
                'post',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StreamingOutTemplate',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'LayoutIds' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'pattern' => '^\\d+$',
                                ],
                                'minItems' => 1,
                                'maxItems' => 16,
                            ],
                            'MediaEncode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'enum' => [
                                    '1',
                                    '54',
                                    '53',
                                    '52',
                                    '10',
                                    '20',
                                    '22',
                                    '23',
                                    '30',
                                    '31',
                                    '24',
                                    '25',
                                    '26',
                                    '27',
                                    '28',
                                    '32',
                                    '33',
                                    '34',
                                    '35',
                                    '36',
                                    '37',
                                    '38',
                                    '39',
                                    '40',
                                    '41',
                                    '42',
                                    '43',
                                    '0',
                                ],
                            ],
                            'TemplateId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteAppStreamingOutTemplate' => [
            'methods' => [
                'post',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StreamingOutTemplate',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'TemplateId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateAppStreamingOutTemplate' => [
            'methods' => [
                'post',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StreamingOutTemplate',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'LayoutIds' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'pattern' => '^\\d+$',
                                ],
                                'minItems' => 1,
                                'maxItems' => 16,
                            ],
                            'MediaEncode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'enum' => [
                                    '1',
                                    '54',
                                    '53',
                                    '52',
                                    '10',
                                    '20',
                                    '22',
                                    '23',
                                    '30',
                                    '31',
                                    '24',
                                    '25',
                                    '26',
                                    '27',
                                    '28',
                                    '32',
                                    '33',
                                    '34',
                                    '35',
                                    '36',
                                    '37',
                                    '38',
                                    '39',
                                    '40',
                                    '41',
                                    '42',
                                    '43',
                                    '0',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeAppStreamingOutTemplates' => [
            'methods' => [
                'get',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Condition',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'TemplateId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeAppLiveStreamStatus' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ModifyAppLiveStreamStatus' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeStreamingOutStatus' => [
            'methods' => [
                'get',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StartStreamingOut' => [
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
                    'name' => 'Panes',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'SourceType' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [],
                                ],
                                'PaneId' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'enum' => [],
                                    'pattern' => '^\\d+$',
                                ],
                                'Source' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'PaneCropMode' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                    ],
                                ],
                                'Images' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Url' => [
                                                'type' => 'string',
                                                'required' => true,
                                                'minLength' => 1,
                                                'maxLength' => 1024,
                                            ],
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => false,
                                                'maximum' => '1',
                                            ],
                                            'PaneImageCropMode' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'enum' => [
                                                    '1',
                                                    '2',
                                                    '3',
                                                ],
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Width' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Height' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Layer' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '100',
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 3,
                                ],
                                'Texts' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Texture' => [
                                                'type' => 'string',
                                                'required' => true,
                                                'minLength' => 1,
                                                'maxLength' => 128,
                                            ],
                                            'FontSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '72',
                                            ],
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'FontColor' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'R' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                    'G' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                    'B' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                ],
                                            ],
                                            'Font' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '9',
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'Layer' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '100',
                                            ],
                                            'HasBox' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'BoxColor' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'R' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                    'G' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                    'B' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                ],
                                            ],
                                            'BoxAlpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'BoxBorderw' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '1',
                                                'maximum' => '10',
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 3,
                                ],
                            ],
                        ],
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 128,
                        'pattern' => '^[\\w.-]+$',
                    ],
                ],
                [
                    'name' => 'Url',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 1024,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 1,
                        'maxLength' => 55,
                        'pattern' => '^[0-9a-zA-Z_-]+$',
                    ],
                ],
                [
                    'name' => 'CropMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enum' => [
                            '1',
                            '2',
                            '3',
                        ],
                    ],
                ],
                [
                    'name' => 'Images',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Url' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'minLength' => 1,
                                    'maxLength' => 1024,
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'ImageCropMode' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                    ],
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '100',
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'Texts',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Texture' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'minLength' => 1,
                                    'maxLength' => 128,
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '72',
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'FontColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                    ],
                                ],
                                'Font' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '9',
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '100',
                                ],
                                'HasBox' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'BoxColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                    ],
                                ],
                                'BoxAlpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'BoxBorderw' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '1',
                                    'maximum' => '10',
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'ClockWidgets',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Zone' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '-12',
                                    'maximum' => '12',
                                    'exclusiveMaximum' => true,
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '72',
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'FontColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                    ],
                                ],
                                'Font' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '9',
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '100',
                                ],
                                'HasBox' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'BoxColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                    ],
                                ],
                                'BoxAlpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'BoxBorderw' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '1',
                                    'maximum' => '10',
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
            ],
        ],
        'UpdateStreamingOut' => [
            'methods' => [
                'post',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 128,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 55,
                        'pattern' => '^[0-9a-zA-Z_-]+$',
                    ],
                ],
                [
                    'name' => 'Panes',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'SourceType' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [
                                        'video',
                                        'camera',
                                        'screen',
                                    ],
                                ],
                                'PaneId' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '15',
                                ],
                                'Source' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'PaneCropMode' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                    ],
                                ],
                                'Images' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Url' => [
                                                'type' => 'string',
                                                'required' => true,
                                                'minLength' => 1,
                                                'maxLength' => 1024,
                                            ],
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'PaneImageCropMode' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'enum' => [
                                                    '1',
                                                    '2',
                                                    '3',
                                                ],
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Width' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Height' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Layer' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '100',
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 3,
                                ],
                                'Texts' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Texture' => [
                                                'type' => 'string',
                                                'required' => true,
                                                'minLength' => 1,
                                                'maxLength' => 128,
                                            ],
                                            'FontSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '72',
                                            ],
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'FontColor' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'R' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                    'G' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                    'B' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                ],
                                            ],
                                            'Font' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '9',
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'Layer' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '100',
                                            ],
                                            'HasBox' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'BoxColor' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'R' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                    'G' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                    'B' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                ],
                                            ],
                                            'BoxAlpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'BoxBorderw' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '1',
                                                'maximum' => '10',
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 3,
                                ],
                            ],
                        ],
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'Images',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Url' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'minLength' => 1,
                                    'maxLength' => 1024,
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'ImageCropMode' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                    ],
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '100',
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'Texts',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Texture' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'minLength' => 1,
                                    'maxLength' => 128,
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '72',
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'FontColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                    ],
                                ],
                                'Font' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '9',
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '100',
                                ],
                                'HasBox' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'BoxColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                    ],
                                ],
                                'BoxAlpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'BoxBorderw' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '1',
                                    'maximum' => '10',
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'ClockWidgets',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Zone' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '-12',
                                    'maximum' => '12',
                                    'exclusiveMaximum' => true,
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '72',
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'FontColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                    ],
                                ],
                                'Font' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '9',
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '100',
                                ],
                                'HasBox' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'BoxColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                    ],
                                ],
                                'BoxAlpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'BoxBorderw' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '1',
                                    'maximum' => '10',
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
            ],
        ],
        'StopStreamingOut' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 55,
                        'pattern' => '^[0-9a-zA-Z_-]+$',
                    ],
                ],
            ],
        ],
        'DescribeCallList' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StartTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CallStatus',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'QueryMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeCall' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreatedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DestroyedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExtDataType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'QueryExpInfo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribePubUserListBySubUser' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreatedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DestroyedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SubUserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeEndPointEventList' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreatedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DestroyedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserIdList',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeEndPointMetricData' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreatedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DestroyedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SubUserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PubUserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PubCallIdList',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Metrics',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeQoeMetricData' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreatedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DestroyedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeChannelOverallData' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreatedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DestroyedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeChannelDistributionStatData' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreatedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DestroyedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StatDim',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeChannelAreaDistributionStatData' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreatedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DestroyedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ParentArea',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeChannelTopPubUserList' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreatedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DestroyedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeChannelUserMetrics' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreatedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DestroyedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeUsageOverallData' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Types',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeUsageDistributionStatData' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StatDim',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeUsageAreaDistributionStatData' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ParentArea',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeUsageOsSdkVersionDistributionStatData' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeQualityOverallData' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Types',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeQualityDistributionStatData' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StatDim',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeQualityAreaDistributionStatData' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ParentArea',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeQualityOsSdkVersionDistributionStatData' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeFaultDiagnosisOverallData' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StartTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StatDim',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeFaultDiagnosisFactorDistributionStat' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StartTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeFaultDiagnosisUserList' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StartTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FaultTypes',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeFaultDiagnosisUserDetail' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreatedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'FaultType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'QueryCallUserInfo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateEventSubscribe' => [
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
            'parameters' => [
                [
                    'name' => 'Users',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'Events',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CallbackUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NeedCallbackAuth',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Role',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteEventSubscribe' => [
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
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SubscribeId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateAutoLiveStreamRule' => [
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
            'parameters' => [
                [
                    'name' => 'ChannelIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'ChannelIdPrefixes',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PlayDomain',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RuleName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CallBack',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MediaEncode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteAutoLiveStreamRule' => [
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
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DisableAutoLiveStreamRule' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'EnableAutoLiveStreamRule' => [
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
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateAutoLiveStreamRule' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ChannelIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'ChannelIdPrefixes',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PlayDomain',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RuleName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CallBack',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MediaEncode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeAutoLiveStreamRule' => [
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
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteChannel' => [
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
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeChannelParticipants' => [
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
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
            ],
        ],
        'DescribeUserInfoInChannel' => [
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
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeChannelUsers' => [
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
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RemoveTerminals' => [
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
            'parameters' => [
                [
                    'name' => 'TerminalIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 30,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'AddRecordTemplate' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'LayoutIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'Formats',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'Backgrounds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Url' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Display' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'Watermarks',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Url' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Display' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'ClockWidgets',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'FontType' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'FontColor' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskProfile',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MediaEncode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'BackgroundColor',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OssBucket',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'OssFilePrefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'FileSplitInterval',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DelayStopTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '5',
                        'maximum' => '86400',
                    ],
                ],
                [
                    'name' => 'MnsQueue',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HttpCallbackUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableM3u8DateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OssEndpoint',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteRecordTemplate' => [
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
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateRecordTemplate' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'LayoutIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'Formats',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'Backgrounds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Url' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Display' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'Watermarks',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Url' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Display' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'ClockWidgets',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'FontType' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'FontColor' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskProfile',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MediaEncode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'BackgroundColor',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OssBucket',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'OssFilePrefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MnsQueue',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HttpCallbackUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FileSplitInterval',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DelayStopTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '5',
                        'maximum' => '86400',
                    ],
                ],
                [
                    'name' => 'EnableM3u8DateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OssEndpoint',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StartRecordTask' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'SubSpecUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecAudioUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecShareScreenUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecCameraUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UnsubSpecAudioUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UnsubSpecShareScreenUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UnsubSpecCameraUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UserPanes',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Images' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Width' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Height' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Url' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Display' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'ZOrder' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 1,
                                ],
                                'UserId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Texts' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'FontType' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'FontColor' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Text' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'ZOrder' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'FontSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 16,
                                ],
                                'SourceType' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'PaneId' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'LayoutIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskProfile',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MediaEncode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StreamType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MixMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CropMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StopRecordTask' => [
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
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateRecordTask' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'SubSpecUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecAudioUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecShareScreenUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecCameraUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UnsubSpecAudioUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UnsubSpecShareScreenUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UnsubSpecCameraUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UserPanes',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Images' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Width' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Height' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Url' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Display' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'ZOrder' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 16,
                                ],
                                'UserId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Texts' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'FontType' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'FontColor' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Text' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'ZOrder' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'FontSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 16,
                                ],
                                'SourceType' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'PaneId' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'LayoutIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskProfile',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CropMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MediaEncode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeRecordTemplates' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'TemplateIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeRecordFiles' => [
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
            'parameters' => [
                [
                    'name' => 'TaskIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'maximum' => '100',
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StartMPUTask' => [
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
            'parameters' => [
                [
                    'name' => 'SubSpecUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecAudioUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecShareScreenUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecCameraUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UnsubSpecAudioUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UnsubSpecShareScreenUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UnsubSpecCameraUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'LayoutIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UserPanes',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Images' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Width' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Height' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Url' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Display' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'ZOrder' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 10,
                                ],
                                'SegmentType' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'UserId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Texts' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'FontType' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'FontColor' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Text' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'ZOrder' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'FontSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'BorderWidth' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                            ],
                                            'BorderColor' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                                'minimum' => '0',
                                            ],
                                            'Box' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'BoxColor' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                                'minimum' => '0',
                                            ],
                                            'BoxBorderWidth' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                            ],
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                                'minimum' => '0',
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 16,
                                ],
                                'SourceType' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'PaneId' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'Backgrounds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Url' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Display' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'Watermarks',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Url' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Display' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'ClockWidgets',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'FontType' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'FontColor' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'BorderWidth' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                ],
                                'BorderColor' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                    'minimum' => '0',
                                ],
                                'Box' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'BoxColor' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                    'minimum' => '0',
                                ],
                                'BoxBorderWidth' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                    'minimum' => '0',
                                ],
                            ],
                        ],
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MixMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CropMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MediaEncode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StreamType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BackgroundColor',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StreamURL',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PayloadType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ReportVad',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RtpExtInfo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TimeStampRef',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'VadInterval',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TaskType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                        'maximum' => '1',
                        'enum' => [
                            '0',
                            '1',
                        ],
                    ],
                ],
                [
                    'name' => 'EnhancedParam',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'EnablePortraitSegmentation' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'StopMPUTask' => [
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
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateMPUTask' => [
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
            'parameters' => [
                [
                    'name' => 'LayoutIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecAudioUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecShareScreenUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecCameraUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UnsubSpecAudioUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UnsubSpecShareScreenUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UnsubSpecCameraUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UserPanes',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Images' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Width' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Height' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Url' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Display' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'ZOrder' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 10,
                                ],
                                'SegmentType' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'UserId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Texts' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'FontType' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'FontColor' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Text' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'ZOrder' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'FontSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'BorderWidth' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                            ],
                                            'BorderColor' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                                'minimum' => '0',
                                            ],
                                            'Box' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'BoxColor' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                                'minimum' => '0',
                                            ],
                                            'BoxBorderWidth' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                            ],
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                                'minimum' => '0',
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 16,
                                ],
                                'SourceType' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'PaneId' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'Backgrounds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Url' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Display' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'Watermarks',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Url' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Display' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'ClockWidgets',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'FontType' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'FontColor' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'BorderWidth' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                ],
                                'BorderColor' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                                'Box' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'BoxColor' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                    'minimum' => '0',
                                ],
                                'BoxBorderWidth' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                    'minimum' => '0',
                                ],
                            ],
                        ],
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CropMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MediaEncode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MixMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StreamType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BackgroundColor',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetMPUTaskStatus' => [
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
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateMPULayout' => [
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
            'parameters' => [
                [
                    'name' => 'Panes',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'MajorPane' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'PaneId' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AudioMixCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteMPULayout' => [
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
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'LayoutId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ModifyMPULayout' => [
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
            'parameters' => [
                [
                    'name' => 'Panes',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'MajorPane' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'PaneId' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LayoutId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AudioMixCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeMPULayoutInfoList' => [
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
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'LayoutId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '0',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
            ],
        ],
        'DescribeRtcDurationData' => [
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
            'parameters' => [
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServiceArea',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            '86400',
                            '3600',
                        ],
                    ],
                ],
            ],
        ],
        'DescribeRtcUserCntData' => [
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
            'parameters' => [
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServiceArea',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            '86400',
                            '3600',
                        ],
                    ],
                ],
            ],
        ],
        'DescribeRtcPeakChannelCntData' => [
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
            'parameters' => [
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServiceArea',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            '86400',
                            '3600',
                        ],
                    ],
                ],
            ],
        ],
        'DescribeRtcChannelList' => [
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
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TimePoint',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SortType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'sortByStartTime',
                            'sortByStartTimeDesc',
                            'sortByEndTime',
                            'sortByEndTimeDesc',
                        ],
                    ],
                ],
                [
                    'name' => 'ServiceArea',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeRtcChannelMetric' => [
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
            'parameters' => [
                [
                    'name' => 'TimePoint',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
    ],
];
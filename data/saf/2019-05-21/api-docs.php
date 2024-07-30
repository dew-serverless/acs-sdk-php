<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'saf',
        'version' => '2019-05-21',
    ],
    'directories' => [
        [
            'id' => 181717,
            'title' => '国内公共服务调用',
            'type' => 'directory',
            'children' => [
                'ExecuteRequest',
            ],
        ],
        [
            'id' => 181718,
            'title' => '海外公共服务调用',
            'type' => 'directory',
            'children' => [
                'ExecuteRequestML',
                'ExecuteRequestSG',
            ],
        ],
        [
            'id' => 181726,
            'title' => '自定义事件服务调用',
            'type' => 'directory',
            'children' => [
                'RequestDecision',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'ExecuteRequest' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '48720',
                'abilityTreeNodes' => [
                    'FEATUREsaf7L0MVB',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ServiceParameters',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'Service',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'object',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'ExecuteRequestML' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '48721',
                'abilityTreeNodes' => [
                    'FEATUREsaf6MRPQF',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ServiceParameters',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'Service',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'default' => 'en-us',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'object',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'ExecuteRequestSG' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '48722',
                'abilityTreeNodes' => [
                    'FEATUREsaf6MRPQF',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ServiceParameters',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'Service',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'default' => 'en-us',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'object',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'RequestDecision' => [
            'summary' => '调用决策引擎接口',
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
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '114081',
                'abilityTreeNodes' => [
                    'FEATUREsaf6MRPQF',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ServiceParameters',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'EventCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                            'Code' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'object',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'saf.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'saf.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'saf.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'saf.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'saf.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'saf.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'saf.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'saf.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'saf.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'saf.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'saf.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'saf.ap-south-1.aliyuncs.com',
        ],
    ],
];
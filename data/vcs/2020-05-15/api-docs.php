<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Vcs',
        'version' => '2020-05-15',
    ],
    'directories' => [
        [
            'id' => 128854,
            'title' => '设备管理',
            'type' => 'directory',
            'children' => [
                'ListAlgorithmNamesByDeviceIds',
            ],
        ],
        [
            'id' => 128893,
            'title' => '人员档案',
            'type' => 'directory',
            'children' => [
                'DeleteProfileCatalog',
            ],
        ],
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'AddAiotPersonTableItem',
            ],
        ],
    ],
    'components' => [
        'schemas' => [
            'AiotDevice' => [
                'title' => 'AiotDeviceStruct',
                'description' => 'Aiot设备',
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'title' => '名称',
                        'type' => 'string',
                    ],
                    'IPAddr' => [
                        'title' => 'ip地址',
                        'type' => 'string',
                    ],
                    'Port' => [
                        'title' => '端口',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Longitude' => [
                        'title' => '经度',
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'Latitude' => [
                        'title' => '纬度',
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'Place' => [
                        'title' => '安装位置',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'ListAlgorithmNamesByDeviceIds' => [
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
            'parameters' => [
                [
                    'name' => 'GbIds',
                    'in' => 'query',
                    'schema' => [
                        'title' => '设备ID集合，多个的话以逗号分隔，最大支持200个',
                        'description' => '设备国标编码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1101050001132700****,1101050001132701****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '返回结果编码  200：获取成功  Failed：获取失败  Retry：按需拉流模式，正在建立取流连接，请稍后重试',
                                'description' => '返回编码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'title' => '返回结果消息',
                                'description' => '返回消息。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                            'Success' => [
                                'description' => '请求是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '设备国标编码与对应算法名称对象',
                                    'type' => 'object',
                                    'properties' => [
                                        'GbId' => [
                                            'title' => '设备ID',
                                            'description' => '设备国标编码。',
                                            'type' => 'string',
                                            'example' => '1101050001132700****',
                                        ],
                                        'AlgorithmNames' => [
                                            'title' => '设备ID对应呗计算的算法名称集合',
                                            'description' => '算法名称集合',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '算法名称',
                                                'type' => 'string',
                                                'example' => '安全帽算法',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\",\\n  \\"Success\\": true,\\n  \\"Data\\": [\\n    {\\n      \\"GbId\\": \\"1101050001132700****\\",\\n      \\"AlgorithmNames\\": [\\n        \\"安全帽算法\\"\\n      ]\\n    }\\n  ],\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"Success\\"\\n}","errorExample":""},{"type":"xml","example":"<ListAlgorithmNamesByDeviceIdsResponse>\\n    <RequestId>46329898-489C-4E63-9BA1-C1DA5C5D0986</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <GbId>1101050001132700****</GbId>\\n        <AlgorithmNames>安全帽算法</AlgorithmNames>\\n    </Data>\\n    <Code>200</Code>\\n    <Message>Success</Message>\\n</ListAlgorithmNamesByDeviceIdsResponse>","errorExample":""}]',
            'title' => '按设备ID获取算法名称列表',
            'summary' => '查询设备被哪些算法计算，可支持单个设备或者批量设备。',
        ],
        'DeleteProfileCatalog' => [
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
            'operationType' => 'readAndWrite',
            'parameters' => [
                [
                    'name' => 'CorpId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '区域id',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '区域id',
                    ],
                ],
                [
                    'name' => 'IsvSubId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '区域中对人员数据隔离',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '区域中对人员数据隔离',
                    ],
                ],
                [
                    'name' => 'CatalogId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '人员分组id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
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
                                'description' => '响应code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'Data' => [
                                'description' => '响应数据',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '本次请求流水号，用于链路追踪',
                                'type' => 'string',
                                'example' => 'XXXX-22222',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                401 => [
                    [
                        'errorCode' => 'InvalidCorpId',
                        'errorMessage' => 'The specified CorpId is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"XXXX-22222\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>XXXX-22222</RequestId>\\n<Message>SUCCESS</Message>\\n<Data>true</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => '删除人员分组',
            'summary' => '创建一个删除人员分组实例。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AddAiotPersonTableItem' => [
            'summary' => 'AddAiotPersonTableItem',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PersonTableId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PersonTableItem',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PersonTableId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'PersonId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'LastChange' => [
                                'type' => 'string',
                            ],
                            'PersonCode' => [
                                'type' => 'string',
                            ],
                            'PersonName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Remarks' => [
                                'type' => 'string',
                            ],
                            'TimeTemplateNum' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'IdentificationNum' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'IdentificationList' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'Number' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'ImageNum' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'ImageList' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ImageId' => [
                                            'type' => 'string',
                                        ],
                                        'EventSort' => [
                                            'type' => 'string',
                                        ],
                                        'DeviceId' => [
                                            'type' => 'string',
                                        ],
                                        'StoragePath' => [
                                            'type' => 'string',
                                        ],
                                        'Size' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'Type' => [
                                            'type' => 'string',
                                        ],
                                        'FileFormat' => [
                                            'type' => 'string',
                                        ],
                                        'ShotTime' => [
                                            'type' => 'string',
                                        ],
                                        'Width' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'Height' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'Data' => [
                                            'type' => 'string',
                                        ],
                                        'FeatureInfo' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Vendor' => [
                                                    'type' => 'string',
                                                ],
                                                'AlgorithmVersion' => [
                                                    'type' => 'string',
                                                ],
                                                'AlgorithmType' => [
                                                    'type' => 'string',
                                                ],
                                                'TabId' => [
                                                    'type' => 'string',
                                                ],
                                                'OjectId' => [
                                                    'type' => 'string',
                                                ],
                                                'ImageId' => [
                                                    'type' => 'string',
                                                ],
                                                'FeatureData' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'required' => true,
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
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'PersonTableItemId' => [
                                'type' => 'string',
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
            'endpoint' => 'vcs.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'vcs.cn-shanghai.aliyuncs.com',
        ],
    ],
];
<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'address-purification',
        'version' => '2019-11-18',
    ],
    'directories' => [
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'CorrectAddress',
                'ExtractAddress',
                'ExtractName',
                'ExtractPhone',
                'GetAddressDivisionCode',
                'GetAddressSimilarity',
                'GetZipcode',
                'StructureAddress',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CorrectAddress' => [
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
                    'name' => 'ServiceCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '固定值:addrp',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'addrp',
                    ],
                ],
                [
                    'name' => 'Text',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文本内容',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '文一西路969号',
                    ],
                ],
                [
                    'name' => 'DefaultProvince',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '默认省份',
                        'type' => 'string',
                        'required' => false,
                        'example' => '浙江省',
                    ],
                ],
                [
                    'name' => 'DefaultCity',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '默认城市',
                        'type' => 'string',
                        'required' => false,
                        'example' => '杭州市',
                    ],
                ],
                [
                    'name' => 'DefaultDistrict',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '默认行政区',
                        'type' => 'string',
                        'required' => false,
                        'example' => '余杭区',
                    ],
                ],
                [
                    'name' => 'AppKey',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '项目AppKey',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Axqwerasdf1a',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => '226BD68D-6208-4140-A6EC-2F2BF434B601',
                            ],
                            'Data' => [
                                'description' => 'json格式数据',
                                'type' => 'string',
                                'example' => '{"address_correct":["文一西路=road 969号=roadno"]}',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'UserStatusInvalid',
                        'errorMessage' => 'The user status is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoAuth',
                        'errorMessage' => 'Failed to perform user authentication.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceDoesNotExist',
                        'errorMessage' => 'The resource does not exist.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'Throttling.User',
                        'errorMessage' => 'Flow control has been triggered.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A service error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"{\\\\\\"address_correct\\\\\\":[\\\\\\"文一西路=road 969号=roadno\\\\\\"]}\\",\\n  \\"RequestId\\": \\"226BD68D-6208-4140-A6EC-2F2BF434B601\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>226BD68D-6208-4140-A6EC-2F2BF434B601</RequestId>\\n<Data>\\n    <address_correct>文一西路=road 969号=roadno</address_correct>\\n    <time_used>\\n        <rt>\\n            <segment>0.0053822994232177734</segment>\\n            <address_correct>0.0002961158752441406</address_correct>\\n        </rt>\\n        <start>1589799494.0997586</start>\\n    </time_used>\\n    <status>OK</status>\\n</Data>","errorExample":""}]',
            'title' => '地址纠错',
            'summary' => '对用户输入错误文本地址进行纠错。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ExtractAddress' => [
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
                    'name' => 'ServiceCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '固定值:addrp',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'addrp',
                    ],
                ],
                [
                    'name' => 'Text',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文本内容',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '文一西路969号',
                    ],
                ],
                [
                    'name' => 'DefaultProvince',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '默认省份',
                        'type' => 'string',
                        'required' => false,
                        'example' => '浙江省',
                    ],
                ],
                [
                    'name' => 'DefaultCity',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '默认城市',
                        'type' => 'string',
                        'required' => false,
                        'example' => '杭州市',
                    ],
                ],
                [
                    'name' => 'DefaultDistrict',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '默认行政区',
                        'type' => 'string',
                        'required' => false,
                        'example' => '余杭区',
                    ],
                ],
                [
                    'name' => 'AppKey',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '项目AppKey',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Axqwerasdf1a',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => 'E0627DDE-28D7-4C00-A611-E047DF81AF05',
                            ],
                            'Data' => [
                                'description' => 'start:原文中字段起始位置'."\n"
                                    .'end:原文中字段结束位置'."\n"
                                    .'type:字段类型，LOC是指location，地址；PER是指person，人名；TEL是指telephone，电话号码。'."\n"
                                    .'word：识别出的实体字段',
                                'type' => 'string',
                                'example' => '{"location_extract":[{"start":0,"end":8,"type":"LOC","word":"文一西路969号"}],"time_used":{"rt":{"location_extract":"0.008937358856201172"},"start":"1589799727.438162"},"status":"OK"}',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'UserStatusInvalid',
                        'errorMessage' => 'The user status is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoAuth',
                        'errorMessage' => 'Failed to perform user authentication.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceDoesNotExist',
                        'errorMessage' => 'The resource does not exist.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'Throttling.User',
                        'errorMessage' => 'Flow control has been triggered.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A service error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"{\\\\\\"location_extract\\\\\\":[{\\\\\\"start\\\\\\":0,\\\\\\"end\\\\\\":8,\\\\\\"type\\\\\\":\\\\\\"LOC\\\\\\",\\\\\\"word\\\\\\":\\\\\\"文一西路969号\\\\\\"}],\\\\\\"time_used\\\\\\":{\\\\\\"rt\\\\\\":{\\\\\\"location_extract\\\\\\":\\\\\\"0.008937358856201172\\\\\\"},\\\\\\"start\\\\\\":\\\\\\"1589799727.438162\\\\\\"},\\\\\\"status\\\\\\":\\\\\\"OK\\\\\\"}\\",\\n  \\"RequestId\\": \\"E0627DDE-28D7-4C00-A611-E047DF81AF05\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>E0627DDE-28D7-4C00-A611-E047DF81AF05</RequestId>\\n<Data>\\n    <location_extract>\\n        <start>0</start>\\n        <end>8</end>\\n        <type>LOC</type>\\n        <word>文一西路969号</word>\\n    </location_extract>\\n    <time_used>\\n        <rt>\\n            <location_extract>0.008937358856201172</location_extract>\\n        </rt>\\n        <start>1589799727.438162</start>\\n    </time_used>\\n    <status>OK</status>\\n</Data>","errorExample":""}]',
            'title' => '地址抽取',
            'summary' => '从非结构化文本中抽取地址片段。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ExtractName' => [
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
                    'name' => 'ServiceCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '固定值:addrp',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'addrp',
                    ],
                ],
                [
                    'name' => 'Text',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文本内容',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '文一西路969号张小明',
                    ],
                ],
                [
                    'name' => 'DefaultProvince',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '默认省份',
                        'type' => 'string',
                        'required' => false,
                        'example' => '浙江省',
                    ],
                ],
                [
                    'name' => 'DefaultCity',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '默认城市',
                        'type' => 'string',
                        'required' => false,
                        'example' => '杭州市',
                    ],
                ],
                [
                    'name' => 'DefaultDistrict',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '默认行政区',
                        'type' => 'string',
                        'required' => false,
                        'example' => '余杭区',
                    ],
                ],
                [
                    'name' => 'AppKey',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '项目AppKey',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Axqwerasdf1a',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => '3A9AB010-AC38-4E53-9D25-6B97238C2897',
                            ],
                            'Data' => [
                                'description' => 'json格式数据',
                                'type' => 'string',
                                'example' => '{"person_extract":[{"start":8,"end":11,"type":"PER","word":"张小明"}],"time_used":{"rt":{"person_extract":"0.013421058654785156"},"start":"1589799959.7144244"},"status":"OK"}',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'UserStatusInvalid',
                        'errorMessage' => 'The user status is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoAuth',
                        'errorMessage' => 'Failed to perform user authentication.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceDoesNotExist',
                        'errorMessage' => 'The resource does not exist.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'Throttling.User',
                        'errorMessage' => 'Flow control has been triggered.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A service error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"{\\\\\\"person_extract\\\\\\":[{\\\\\\"start\\\\\\":8,\\\\\\"end\\\\\\":11,\\\\\\"type\\\\\\":\\\\\\"PER\\\\\\",\\\\\\"word\\\\\\":\\\\\\"张小明\\\\\\"}],\\\\\\"time_used\\\\\\":{\\\\\\"rt\\\\\\":{\\\\\\"person_extract\\\\\\":\\\\\\"0.013421058654785156\\\\\\"},\\\\\\"start\\\\\\":\\\\\\"1589799959.7144244\\\\\\"},\\\\\\"status\\\\\\":\\\\\\"OK\\\\\\"}\\",\\n  \\"RequestId\\": \\"3A9AB010-AC38-4E53-9D25-6B97238C2897\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>3A9AB010-AC38-4E53-9D25-6B97238C2897</RequestId>\\n<Data>\\n    <person_extract>\\n        <start>8</start>\\n        <end>11</end>\\n        <type>PER</type>\\n        <word>张小明</word>\\n    </person_extract>\\n    <time_used>\\n        <rt>\\n            <person_extract>0.013421058654785156</person_extract>\\n        </rt>\\n        <start>1589799959.7144244</start>\\n    </time_used>\\n    <status>OK</status>\\n</Data>","errorExample":""}]',
            'title' => '姓名抽取',
            'summary' => '从自然文本中抽取姓名片段。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ExtractPhone' => [
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
                    'name' => 'ServiceCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '固定值:addrp',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'addrp',
                    ],
                ],
                [
                    'name' => 'Text',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文本内容',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '文一西路969号1333333****',
                    ],
                ],
                [
                    'name' => 'DefaultProvince',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '默认省份',
                        'type' => 'string',
                        'required' => false,
                        'example' => '浙江省',
                    ],
                ],
                [
                    'name' => 'DefaultCity',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '默认城市',
                        'type' => 'string',
                        'required' => false,
                        'example' => '杭州市',
                    ],
                ],
                [
                    'name' => 'DefaultDistrict',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '默认行政区',
                        'type' => 'string',
                        'required' => false,
                        'example' => '余杭区',
                    ],
                ],
                [
                    'name' => 'AppKey',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '项目AppKey',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Axqwerasdf1a',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => 'A602539D-A298-4643-A268-94F0B893C12F',
                            ],
                            'Data' => [
                                'description' => 'json格式数据',
                                'type' => 'string',
                                'example' => '{"phone_extract":[{"start":8,"end":19,"type":"TEL","word":"1333333****"}],"time_used":{"rt":{"phone_extract":"0.014524221420288086"},"start":"1589800189.9369104"},"status":"OK"}',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'UserStatusInvalid',
                        'errorMessage' => 'The user status is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoAuth',
                        'errorMessage' => 'Failed to perform user authentication.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceDoesNotExist',
                        'errorMessage' => 'The resource does not exist.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'Throttling.User',
                        'errorMessage' => 'Flow control has been triggered.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A service error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"{\\\\\\"phone_extract\\\\\\":[{\\\\\\"start\\\\\\":8,\\\\\\"end\\\\\\":19,\\\\\\"type\\\\\\":\\\\\\"TEL\\\\\\",\\\\\\"word\\\\\\":\\\\\\"1333333****\\\\\\"}],\\\\\\"time_used\\\\\\":{\\\\\\"rt\\\\\\":{\\\\\\"phone_extract\\\\\\":\\\\\\"0.014524221420288086\\\\\\"},\\\\\\"start\\\\\\":\\\\\\"1589800189.9369104\\\\\\"},\\\\\\"status\\\\\\":\\\\\\"OK\\\\\\"}\\",\\n  \\"RequestId\\": \\"A602539D-A298-4643-A268-94F0B893C12F\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>A602539D-A298-4643-A268-94F0B893C12F</RequestId>\\n<Data>\\n    <phone_extract>\\n        <start>8</start>\\n        <end>19</end>\\n        <type>TEL</type>\\n        <word>1333333****</word>\\n    </phone_extract>\\n    <time_used>\\n        <rt>\\n            <phone_extract>0.014524221420288086</phone_extract>\\n        </rt>\\n        <start>1589800189.9369104</start>\\n    </time_used>\\n    <status>OK</status>\\n</Data>","errorExample":""}]',
            'title' => '电话号码抽取',
            'summary' => '从自然文本中抽取电话号码片段。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetAddressDivisionCode' => [
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
                    'name' => 'ServiceCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '固定值:addrp',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'addrp',
                    ],
                ],
                [
                    'name' => 'Text',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文本内容',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '杭州市文一西路969号',
                    ],
                ],
                [
                    'name' => 'DefaultProvince',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '默认省份',
                        'type' => 'string',
                        'required' => false,
                        'example' => '浙江省',
                    ],
                ],
                [
                    'name' => 'DefaultCity',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '默认城市',
                        'type' => 'string',
                        'required' => false,
                        'example' => '杭州市',
                    ],
                ],
                [
                    'name' => 'DefaultDistrict',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '默认行政区',
                        'type' => 'string',
                        'required' => false,
                        'example' => '余杭区',
                    ],
                ],
                [
                    'name' => 'AppKey',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '项目AppKey',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Axqwerasdf1a',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => 'F726DC5F-67A1-4FBF-B216-758D1A681B8A',
                            ],
                            'Data' => [
                                'description' => 'json格式数据',
                                'type' => 'string',
                                'example' => '{"division_info":{"divcode":"330100000000","division_name":"浙江省 杭州市"},"time_used":{"rt":{"division_info":"0.005276203155517578","complete":"0.022394180297851562","structure":"0.006552696228027344"},"start":"1589800407.0037742"},"status":"OK"}',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'UserStatusInvalid',
                        'errorMessage' => 'The user status is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoAuth',
                        'errorMessage' => 'Failed to perform user authentication.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceDoesNotExist',
                        'errorMessage' => 'The resource does not exist.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'Throttling.User',
                        'errorMessage' => 'Flow control has been triggered.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A service error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"{\\\\\\"division_info\\\\\\":{\\\\\\"divcode\\\\\\":\\\\\\"330100000000\\\\\\",\\\\\\"division_name\\\\\\":\\\\\\"浙江省 杭州市\\\\\\"},\\\\\\"time_used\\\\\\":{\\\\\\"rt\\\\\\":{\\\\\\"division_info\\\\\\":\\\\\\"0.005276203155517578\\\\\\",\\\\\\"complete\\\\\\":\\\\\\"0.022394180297851562\\\\\\",\\\\\\"structure\\\\\\":\\\\\\"0.006552696228027344\\\\\\"},\\\\\\"start\\\\\\":\\\\\\"1589800407.0037742\\\\\\"},\\\\\\"status\\\\\\":\\\\\\"OK\\\\\\"}\\",\\n  \\"RequestId\\": \\"F726DC5F-67A1-4FBF-B216-758D1A681B8A\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>F726DC5F-67A1-4FBF-B216-758D1A681B8A</RequestId>\\n<Data>\\n    <division_info>\\n        <divcode>330100000000</divcode>\\n        <division_name>浙江省 杭州市</division_name>\\n    </division_info>\\n    <time_used>\\n        <rt>\\n            <division_info>0.005276203155517578</division_info>\\n            <complete>0.022394180297851562</complete>\\n            <structure>0.006552696228027344</structure>\\n        </rt>\\n        <start>1589800407.0037742</start>\\n    </time_used>\\n    <status>OK</status>\\n</Data>","errorExample":""}]',
            'title' => '行政区划识别',
            'summary' => '识别输入地址文本中的省、市、区(县)、街道(镇)四级区划。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetAddressSimilarity' => [
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
                    'name' => 'ServiceCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '固定值:addrp',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'addrp',
                    ],
                ],
                [
                    'name' => 'Text',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文本内容',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '文一西路969号;余杭区阿里巴巴',
                    ],
                ],
                [
                    'name' => 'DefaultProvince',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '默认省份',
                        'type' => 'string',
                        'required' => false,
                        'example' => '浙江省',
                    ],
                ],
                [
                    'name' => 'DefaultCity',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '默认城市',
                        'type' => 'string',
                        'required' => false,
                        'example' => '杭州市',
                    ],
                ],
                [
                    'name' => 'DefaultDistrict',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '默认行政区',
                        'type' => 'string',
                        'required' => false,
                        'example' => '余杭区',
                    ],
                ],
                [
                    'name' => 'AppKey',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '项目AppKey',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Axqwerasdf1a',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => 'F1BD3BD6-3510-4144-996A-B7FCA70A5F81',
                            ],
                            'Data' => [
                                'description' => 'json格式数据',
                                'type' => 'string',
                                'example' => '{"sim_level":{"level":"none","address_a":"文一西路969号","address_b":"余杭区阿里巴巴","is_same":false},"time_used":{"rt":{"sim_level":"0.0400395393371582"},"start":"1589800627.3379788"},"status":"OK"}',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'UserStatusInvalid',
                        'errorMessage' => 'The user status is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoAuth',
                        'errorMessage' => 'Failed to perform user authentication.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceDoesNotExist',
                        'errorMessage' => 'The resource does not exist.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'Throttling.User',
                        'errorMessage' => 'Flow control has been triggered.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A service error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"{\\\\\\"sim_level\\\\\\":{\\\\\\"level\\\\\\":\\\\\\"none\\\\\\",\\\\\\"address_a\\\\\\":\\\\\\"文一西路969号\\\\\\",\\\\\\"address_b\\\\\\":\\\\\\"余杭区阿里巴巴\\\\\\",\\\\\\"is_same\\\\\\":false},\\\\\\"time_used\\\\\\":{\\\\\\"rt\\\\\\":{\\\\\\"sim_level\\\\\\":\\\\\\"0.0400395393371582\\\\\\"},\\\\\\"start\\\\\\":\\\\\\"1589800627.3379788\\\\\\"},\\\\\\"status\\\\\\":\\\\\\"OK\\\\\\"}\\",\\n  \\"RequestId\\": \\"F1BD3BD6-3510-4144-996A-B7FCA70A5F81\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>F1BD3BD6-3510-4144-996A-B7FCA70A5F81</RequestId>\\n<Data>\\n    <sim_level>\\n        <level>none</level>\\n        <address_a>文一西路969号</address_a>\\n        <address_b>余杭区阿里阿巴巴</address_b>\\n        <is_same>false</is_same>\\n    </sim_level>\\n    <time_used>\\n        <rt>\\n            <sim_level>0.0400395393371582</sim_level>\\n        </rt>\\n        <start>1589800627.3379788</start>\\n    </time_used>\\n    <status>OK</status>\\n</Data>","errorExample":""}]',
            'title' => '地址相似层级判定',
            'summary' => '判定两个地址是否为同一地址，并给出最细粒度的相同地址级别。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetZipcode' => [
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
                    'name' => 'ServiceCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '固定值:addrp',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'addrp',
                    ],
                ],
                [
                    'name' => 'Text',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文本内容',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '浙江省杭州市文一西路969号',
                    ],
                ],
                [
                    'name' => 'DefaultProvince',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '默认省份',
                        'type' => 'string',
                        'required' => false,
                        'example' => '浙江省',
                    ],
                ],
                [
                    'name' => 'DefaultCity',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '默认城市',
                        'type' => 'string',
                        'required' => false,
                        'example' => '杭州市',
                    ],
                ],
                [
                    'name' => 'DefaultDistrict',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '默认行政区',
                        'type' => 'string',
                        'required' => false,
                        'example' => '余杭区',
                    ],
                ],
                [
                    'name' => 'AppKey',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '项目AppKey',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Axqwerasdf1a',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => 'D0078DC6-8A1F-41A0-9A5F-A6B6443E9A65',
                            ],
                            'Data' => [
                                'description' => 'json格式数据',
                                'type' => 'string',
                                'example' => '{"zipcode":"311500","time_used":{"rt":{"zipcode":"0.004756927490234375","complete":"0.020321130752563477","structure":"0.007731199264526367"},"start":"1589800854.316437"},"status":"OK"}',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'UserStatusInvalid',
                        'errorMessage' => 'The user status is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoAuth',
                        'errorMessage' => 'Failed to perform user authentication.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceDoesNotExist',
                        'errorMessage' => 'The resource does not exist.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'Throttling.User',
                        'errorMessage' => 'Flow control has been triggered.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A service error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"{\\\\\\"zipcode\\\\\\":\\\\\\"311500\\\\\\",\\\\\\"time_used\\\\\\":{\\\\\\"rt\\\\\\":{\\\\\\"zipcode\\\\\\":\\\\\\"0.004756927490234375\\\\\\",\\\\\\"complete\\\\\\":\\\\\\"0.020321130752563477\\\\\\",\\\\\\"structure\\\\\\":\\\\\\"0.007731199264526367\\\\\\"},\\\\\\"start\\\\\\":\\\\\\"1589800854.316437\\\\\\"},\\\\\\"status\\\\\\":\\\\\\"OK\\\\\\"}\\",\\n  \\"RequestId\\": \\"D0078DC6-8A1F-41A0-9A5F-A6B6443E9A65\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>D0078DC6-8A1F-41A0-9A5F-A6B6443E9A65</RequestId>\\n<Data>\\n    <zipcode>311500</zipcode>\\n    <time_used>\\n        <rt>\\n            <zipcode>0.004756927490234375</zipcode>\\n            <complete>0.020321130752563477</complete>\\n            <structure>0.007731199264526367</structure>\\n        </rt>\\n        <start>1589800854.316437</start>\\n    </time_used>\\n    <status>OK</status>\\n</Data>","errorExample":""}]',
            'title' => '邮政编码查询',
            'summary' => '输入地址，输出地址所对应的邮政编码。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'StructureAddress' => [
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
                    'name' => 'ServiceCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '固定值:addrp',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'addrp',
                    ],
                ],
                [
                    'name' => 'Text',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文本内容',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '杭州市文一西路969号',
                    ],
                ],
                [
                    'name' => 'DefaultProvince',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '默认省份',
                        'type' => 'string',
                        'required' => false,
                        'example' => '浙江省',
                    ],
                ],
                [
                    'name' => 'DefaultCity',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '默认城市',
                        'type' => 'string',
                        'required' => false,
                        'example' => '杭州市',
                    ],
                ],
                [
                    'name' => 'DefaultDistrict',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '默认行政区',
                        'type' => 'string',
                        'required' => false,
                        'example' => '余杭区',
                    ],
                ],
                [
                    'name' => 'AppKey',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '项目AppKey',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Axqwerasdf1a',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => '3542CCCD-A58D-4D46-9772-CC214D2D1E32',
                            ],
                            'Data' => [
                                'description' => 'json格式数据',
                                'type' => 'string',
                                'example' => '{"structure":"prov=浙江省\\tcity=杭州市\\troad=文一西路\\troadNo=969号","time_used":{"rt":{"structure":"0.006234884262084961"},"start":"1589801057.2344782"},"status":"OK"}',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'UserStatusInvalid',
                        'errorMessage' => 'The user status is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoAuth',
                        'errorMessage' => 'Failed to perform user authentication.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceDoesNotExist',
                        'errorMessage' => 'The resource does not exist.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'Throttling.User',
                        'errorMessage' => 'Flow control has been triggered.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A service error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"{\\\\\\"structure\\\\\\":\\\\\\"prov=浙江省\\\\\\\\tcity=杭州市\\\\\\\\troad=文一西路\\\\\\\\troadNo=969号\\\\\\",\\\\\\"time_used\\\\\\":{\\\\\\"rt\\\\\\":{\\\\\\"structure\\\\\\":\\\\\\"0.006234884262084961\\\\\\"},\\\\\\"start\\\\\\":\\\\\\"1589801057.2344782\\\\\\"},\\\\\\"status\\\\\\":\\\\\\"OK\\\\\\"}\\",\\n  \\"RequestId\\": \\"3542CCCD-A58D-4D46-9772-CC214D2D1E32\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>3542CCCD-A58D-4D46-9772-CC214D2D1E32</RequestId>\\n<Data>\\n    <structure>prov=浙江省\\tcity=杭州市\\troad=文一西路\\troadNo=969号</structure>\\n    <time_used>\\n        <rt>\\n            <structure>0.006234884262084961</structure>\\n        </rt>\\n        <start>1589801057.2344782</start>\\n    </time_used>\\n    <status>OK</status>\\n</Data>","errorExample":""}]',
            'title' => '地址结构化',
            'summary' => '针对原始地址进行分级，同时支持省、市、区、街道补全。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'address-purification.cn-hangzhou.aliyuncs.com',
        ],
    ],
];
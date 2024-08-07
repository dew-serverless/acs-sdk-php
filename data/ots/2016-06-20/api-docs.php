<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Ots',
        'version' => '2016-06-20',
    ],
    'directories' => [],
    'components' => [
        'schema' => [],
    ],
    'apis' => [
        'BindInstance2Vpc' => [
            'deprecated' => false,
            'methods' => [
                'post',
            ],
            'operationType' => 'readAndWrite',
            'parameters' => [
                [
                    'in' => 'query',
                    'name' => 'VpcId',
                    'schema' => [
                        'required' => true,
                        'type' => 'string',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'VirtualSwitchId',
                    'schema' => [
                        'required' => true,
                        'type' => 'string',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'InstanceName',
                    'schema' => [
                        'required' => true,
                        'type' => 'string',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'InstanceVpcName',
                    'schema' => [
                        'required' => true,
                        'type' => 'string',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'RegionNo',
                    'schema' => [
                        'required' => false,
                        'type' => 'string',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'Network',
                    'schema' => [
                        'required' => false,
                        'type' => 'string',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'Domain' => [
                                'type' => 'string',
                            ],
                            'Endpoint' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                        'type' => 'object',
                    ],
                ],
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
        ],
        'DeleteInstance' => [
            'deprecated' => false,
            'methods' => [
                'post',
            ],
            'operationType' => 'readAndWrite',
            'parameters' => [
                [
                    'in' => 'query',
                    'name' => 'InstanceName',
                    'schema' => [
                        'required' => true,
                        'type' => 'string',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                        'type' => 'object',
                    ],
                ],
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
        ],
        'DeleteTags' => [
            'deprecated' => false,
            'methods' => [
                'post',
            ],
            'operationType' => 'readAndWrite',
            'parameters' => [
                [
                    'in' => 'query',
                    'name' => 'InstanceName',
                    'schema' => [
                        'required' => true,
                        'type' => 'string',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'TagInfo',
                    'schema' => [
                        'items' => [
                            'properties' => [
                                'TagKey' => [
                                    'type' => 'string',
                                ],
                                'TagValue' => [
                                    'type' => 'string',
                                ],
                            ],
                            'type' => 'object',
                        ],
                        'maxItems' => 5,
                        'required' => false,
                        'type' => 'array',
                    ],
                    'style' => 'repeatList',
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                        'type' => 'object',
                    ],
                ],
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
        ],
        'GetInstance' => [
            'deprecated' => false,
            'methods' => [
                'get',
            ],
            'operationType' => 'read',
            'parameters' => [
                [
                    'in' => 'query',
                    'name' => 'InstanceName',
                    'schema' => [
                        'required' => true,
                        'type' => 'string',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'InstanceInfo' => [
                                'properties' => [
                                    'ClusterType' => [
                                        'type' => 'string',
                                    ],
                                    'CreateTime' => [
                                        'type' => 'string',
                                    ],
                                    'Description' => [
                                        'type' => 'string',
                                    ],
                                    'InstanceName' => [
                                        'type' => 'string',
                                    ],
                                    'Network' => [
                                        'type' => 'string',
                                    ],
                                    'Quota' => [
                                        'properties' => [
                                            'EntityQuota' => [
                                                'format' => 'int32',
                                                'type' => 'integer',
                                            ],
                                        ],
                                        'type' => 'object',
                                    ],
                                    'ReadCapacity' => [
                                        'format' => 'int32',
                                        'type' => 'integer',
                                    ],
                                    'Status' => [
                                        'format' => 'int32',
                                        'type' => 'integer',
                                    ],
                                    'TagInfos' => [
                                        'items' => [
                                            'properties' => [
                                                'TagKey' => [
                                                    'type' => 'string',
                                                ],
                                                'TagValue' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                            'type' => 'object',
                                        ],
                                        'type' => 'array',
                                    ],
                                    'UserId' => [
                                        'type' => 'string',
                                    ],
                                    'WriteCapacity' => [
                                        'format' => 'int32',
                                        'type' => 'integer',
                                    ],
                                ],
                                'type' => 'object',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                        'type' => 'object',
                    ],
                ],
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
        ],
        'GetOtsServiceStatus' => [
            'deprecated' => false,
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IdempotentParameterMismatch',
                        'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
                    ],
                ],
            ],
            'methods' => [
                'get',
            ],
            'operationType' => 'read',
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'Data' => [
                                'title' => 'data',
                                'type' => 'boolean',
                            ],
                            'DynamicCode' => [
                                'title' => 'dynamicCode',
                                'type' => 'string',
                            ],
                            'DynamicMessage' => [
                                'title' => 'dynamicMessage',
                                'type' => 'string',
                            ],
                            'ErrCode' => [
                                'title' => 'errCode',
                                'type' => 'string',
                            ],
                            'HttpStatusCode' => [
                                'format' => 'int32',
                                'title' => 'httpStatusCode',
                                'type' => 'integer',
                            ],
                            'Message' => [
                                'title' => 'message',
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'title' => 'requestId',
                                'type' => 'string',
                            ],
                            'Success' => [
                                'title' => 'success',
                                'type' => 'boolean',
                            ],
                        ],
                        'title' => 'result',
                        'type' => 'object',
                    ],
                ],
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
                    'BearerToken' => [],
                ],
            ],
            'summary' => '获取表格存储开服状态',
        ],
        'InsertInstance' => [
            'deprecated' => false,
            'methods' => [
                'post',
            ],
            'operationType' => 'write',
            'parameters' => [
                [
                    'in' => 'query',
                    'name' => 'InstanceName',
                    'schema' => [
                        'required' => true,
                        'type' => 'string',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'ClusterType',
                    'schema' => [
                        'required' => false,
                        'type' => 'string',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'Network',
                    'schema' => [
                        'required' => false,
                        'type' => 'string',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'Description',
                    'schema' => [
                        'required' => false,
                        'type' => 'string',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'TagInfo',
                    'schema' => [
                        'items' => [
                            'properties' => [
                                'TagKey' => [
                                    'type' => 'string',
                                ],
                                'TagValue' => [
                                    'type' => 'string',
                                ],
                            ],
                            'type' => 'object',
                        ],
                        'maxItems' => 5,
                        'required' => false,
                        'type' => 'array',
                    ],
                    'style' => 'repeatList',
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                        'type' => 'object',
                    ],
                ],
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
        ],
        'InsertTags' => [
            'deprecated' => false,
            'methods' => [
                'post',
            ],
            'operationType' => 'readAndWrite',
            'parameters' => [
                [
                    'in' => 'query',
                    'name' => 'InstanceName',
                    'schema' => [
                        'required' => true,
                        'type' => 'string',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'TagInfo',
                    'schema' => [
                        'items' => [
                            'properties' => [
                                'TagKey' => [
                                    'type' => 'string',
                                ],
                                'TagValue' => [
                                    'type' => 'string',
                                ],
                            ],
                            'type' => 'object',
                        ],
                        'maxItems' => 5,
                        'required' => false,
                        'type' => 'array',
                    ],
                    'style' => 'repeatList',
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                        'type' => 'object',
                    ],
                ],
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
        ],
        'ListClusterType' => [
            'deprecated' => false,
            'methods' => [
                'get',
            ],
            'operationType' => 'readAndWrite',
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'ClusterTypeDetailList' => [
                                'items' => [
                                    'properties' => [
                                        'ClusterType' => [
                                            'type' => 'string',
                                        ],
                                        'IsMultiAZ' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                    'type' => 'object',
                                ],
                                'type' => 'array',
                            ],
                            'ClusterTypeInfos' => [
                                'items' => [
                                    'type' => 'string',
                                ],
                                'type' => 'array',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                        'type' => 'object',
                    ],
                ],
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
        ],
        'ListInstance' => [
            'deprecated' => false,
            'methods' => [
                'get',
            ],
            'operationType' => 'read',
            'parameters' => [
                [
                    'in' => 'query',
                    'name' => 'PageNum',
                    'schema' => [
                        'format' => 'int64',
                        'required' => false,
                        'type' => 'integer',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'PageSize',
                    'schema' => [
                        'format' => 'int64',
                        'required' => false,
                        'type' => 'integer',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'TagInfo',
                    'schema' => [
                        'items' => [
                            'properties' => [
                                'TagKey' => [
                                    'type' => 'string',
                                ],
                                'TagValue' => [
                                    'type' => 'string',
                                ],
                            ],
                            'type' => 'object',
                        ],
                        'maxItems' => 5,
                        'required' => false,
                        'type' => 'array',
                    ],
                    'style' => 'repeatList',
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'InstanceInfos' => [
                                'items' => [
                                    'properties' => [
                                        'InstanceName' => [
                                            'type' => 'string',
                                        ],
                                        'Timestamp' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'type' => 'object',
                                ],
                                'type' => 'array',
                            ],
                            'PageNum' => [
                                'format' => 'int64',
                                'type' => 'integer',
                            ],
                            'PageSize' => [
                                'format' => 'int64',
                                'type' => 'integer',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'TotalCount' => [
                                'format' => 'int64',
                                'type' => 'integer',
                            ],
                        ],
                        'type' => 'object',
                    ],
                ],
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
        ],
        'ListTags' => [
            'deprecated' => false,
            'methods' => [
                'post',
            ],
            'operationType' => 'read',
            'parameters' => [
                [
                    'in' => 'query',
                    'name' => 'InstanceName',
                    'schema' => [
                        'required' => false,
                        'type' => 'string',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'PageNum',
                    'schema' => [
                        'format' => 'int64',
                        'required' => false,
                        'type' => 'integer',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'PageSize',
                    'schema' => [
                        'format' => 'int64',
                        'required' => false,
                        'type' => 'integer',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'TagInfo',
                    'schema' => [
                        'items' => [
                            'properties' => [
                                'TagKey' => [
                                    'type' => 'string',
                                ],
                                'TagValue' => [
                                    'type' => 'string',
                                ],
                            ],
                            'type' => 'object',
                        ],
                        'maxItems' => 5,
                        'required' => false,
                        'type' => 'array',
                    ],
                    'style' => 'repeatList',
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'PageNum' => [
                                'format' => 'int64',
                                'type' => 'integer',
                            ],
                            'PageSize' => [
                                'format' => 'int64',
                                'type' => 'integer',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'TagInfos' => [
                                'items' => [
                                    'properties' => [
                                        'TagKey' => [
                                            'type' => 'string',
                                        ],
                                        'TagValue' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'type' => 'object',
                                ],
                                'type' => 'array',
                            ],
                            'TotalCount' => [
                                'format' => 'int64',
                                'type' => 'integer',
                            ],
                        ],
                        'type' => 'object',
                    ],
                ],
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
        ],
        'ListVpcInfoByInstance' => [
            'deprecated' => false,
            'methods' => [
                'get',
            ],
            'operationType' => 'read',
            'parameters' => [
                [
                    'in' => 'query',
                    'name' => 'InstanceName',
                    'schema' => [
                        'required' => true,
                        'type' => 'string',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'PageNum',
                    'schema' => [
                        'format' => 'int64',
                        'required' => false,
                        'type' => 'integer',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'PageSize',
                    'schema' => [
                        'format' => 'int64',
                        'required' => false,
                        'type' => 'integer',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'InstanceName' => [
                                'type' => 'string',
                            ],
                            'PageNum' => [
                                'format' => 'int64',
                                'type' => 'integer',
                            ],
                            'PageSize' => [
                                'format' => 'int64',
                                'type' => 'integer',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'TotalCount' => [
                                'format' => 'int64',
                                'type' => 'integer',
                            ],
                            'VpcInfos' => [
                                'items' => [
                                    'properties' => [
                                        'Domain' => [
                                            'type' => 'string',
                                        ],
                                        'Endpoint' => [
                                            'type' => 'string',
                                        ],
                                        'InstanceVpcName' => [
                                            'type' => 'string',
                                        ],
                                        'RegionNo' => [
                                            'type' => 'string',
                                        ],
                                        'VpcId' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'type' => 'object',
                                ],
                                'type' => 'array',
                            ],
                        ],
                        'type' => 'object',
                    ],
                ],
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
        ],
        'ListVpcInfoByVpc' => [
            'deprecated' => false,
            'methods' => [
                'get',
            ],
            'operationType' => 'readAndWrite',
            'parameters' => [
                [
                    'in' => 'query',
                    'name' => 'VpcId',
                    'schema' => [
                        'required' => true,
                        'type' => 'string',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'PageNum',
                    'schema' => [
                        'format' => 'int64',
                        'required' => false,
                        'type' => 'integer',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'PageSize',
                    'schema' => [
                        'format' => 'int64',
                        'required' => false,
                        'type' => 'integer',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'TagInfo',
                    'schema' => [
                        'items' => [
                            'properties' => [
                                'TagKey' => [
                                    'type' => 'string',
                                ],
                                'TagValue' => [
                                    'type' => 'string',
                                ],
                            ],
                            'type' => 'object',
                        ],
                        'maxItems' => 5,
                        'required' => false,
                        'type' => 'array',
                    ],
                    'style' => 'repeatList',
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'PageNum' => [
                                'format' => 'int64',
                                'type' => 'integer',
                            ],
                            'PageSize' => [
                                'format' => 'int64',
                                'type' => 'integer',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'TotalCount' => [
                                'format' => 'int64',
                                'type' => 'integer',
                            ],
                            'VpcId' => [
                                'type' => 'string',
                            ],
                            'VpcInfos' => [
                                'items' => [
                                    'properties' => [
                                        'Domain' => [
                                            'type' => 'string',
                                        ],
                                        'Endpoint' => [
                                            'type' => 'string',
                                        ],
                                        'InstanceName' => [
                                            'type' => 'string',
                                        ],
                                        'InstanceVpcName' => [
                                            'type' => 'string',
                                        ],
                                        'RegionNo' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'type' => 'object',
                                ],
                                'type' => 'array',
                            ],
                        ],
                        'type' => 'object',
                    ],
                ],
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
        ],
        'OpenOtsService' => [
            'deprecated' => false,
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'BASIC_INFO_UNCOMPLETED',
                        'errorMessage' => '基本信息待完善，完善基本信息后才能进行该操作。',
                    ],
                    [
                        'errorCode' => 'SALE_VALIDATE_NO_SPECIFIC_CODE_FAILED',
                        'errorMessage' => '您有欠费账单，不符合购买条件。请先充值结清账单后再购买。',
                    ],
                    [
                        'errorCode' => 'ORDER.OPEND',
                        'errorMessage' => '已开通',
                    ],
                ],
            ],
            'methods' => [
                'post',
                'get',
            ],
            'operationType' => 'readAndWrite',
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'OrderId' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                        'type' => 'object',
                    ],
                ],
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
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
        ],
        'UnbindInstance2Vpc' => [
            'deprecated' => false,
            'methods' => [
                'post',
            ],
            'operationType' => 'readAndWrite',
            'parameters' => [
                [
                    'in' => 'query',
                    'name' => 'InstanceName',
                    'schema' => [
                        'required' => true,
                        'type' => 'string',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'InstanceVpcName',
                    'schema' => [
                        'required' => true,
                        'type' => 'string',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'RegionNo',
                    'schema' => [
                        'required' => false,
                        'type' => 'string',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                        'type' => 'object',
                    ],
                ],
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
        ],
        'UpdateInstance' => [
            'deprecated' => false,
            'methods' => [
                'post',
            ],
            'operationType' => 'readAndWrite',
            'parameters' => [
                [
                    'in' => 'query',
                    'name' => 'InstanceName',
                    'schema' => [
                        'required' => true,
                        'type' => 'string',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'Network',
                    'schema' => [
                        'required' => false,
                        'type' => 'string',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                        'type' => 'object',
                    ],
                ],
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
        ],
    ],
    'endpoints' => [],
];
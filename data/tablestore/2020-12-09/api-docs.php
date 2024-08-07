<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'Tablestore',
        'version' => '2020-12-09',
    ],
    'directories' => [],
    'components' => [
        'schema' => [],
    ],
    'apis' => [
        'ChangeResourceGroup' => [
            'consumes' => [
                'application/json',
            ],
            'deprecated' => false,
            'methods' => [
                'post',
            ],
            'parameters' => [
                [
                    'in' => 'body',
                    'name' => 'body',
                    'schema' => [
                        'properties' => [
                            'NewResourceGroupId' => [
                                'required' => true,
                                'title' => 'new resource group id',
                                'type' => 'string',
                            ],
                            'ResourceId' => [
                                'required' => true,
                                'title' => 'resource id, aka ots instance name',
                                'type' => 'string',
                            ],
                        ],
                        'title' => 'A short description of struct',
                        'type' => 'object',
                    ],
                    'style' => 'json',
                ],
            ],
            'path' => '/v2/openapi/changeresourcegroup',
            'produces' => [
                'application/json',
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                        ],
                        'title' => 'Schema of Response',
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
            'summary' => '变更资源组',
        ],
        'CreateInstance' => [
            'consumes' => [
                'application/json',
            ],
            'deprecated' => false,
            'methods' => [
                'post',
            ],
            'operationType' => 'write',
            'parameters' => [
                [
                    'in' => 'body',
                    'name' => 'body',
                    'schema' => [
                        'properties' => [
                            'ClusterType' => [
                                'example' => 'SSD vs HYBRID',
                                'required' => true,
                                'title' => 'cluster type',
                                'type' => 'string',
                            ],
                            'DisableReplication' => [
                                'title' => '是否开启实例的容灾状态',
                                'type' => 'boolean',
                            ],
                            'InstanceDescription' => [
                                'example' => '实例描述',
                                'title' => 'instance description',
                                'type' => 'string',
                            ],
                            'InstanceName' => [
                                'example' => 'first-ins',
                                'required' => true,
                                'title' => 'instance name',
                                'type' => 'string',
                            ],
                            'Network' => [
                                'required' => false,
                                'title' => '（已弃用）实例网络类型。NORMAL, VPC_CONSOLE。默认为NORMAL。',
                                'type' => 'string',
                            ],
                            'NetworkSourceACL' => [
                                'items' => [
                                    'type' => 'string',
                                ],
                                'required' => false,
                                'title' => '实例允许的网络来源列表。默认都允许。TRUST_PROXY: 控制台。',
                                'type' => 'array',
                            ],
                            'NetworkTypeACL' => [
                                'items' => [
                                    'type' => 'string',
                                ],
                                'required' => false,
                                'title' => '实例允许的网络类型列表。默认都允许。CLASSIC: 经典网；INTERNET: 公网；VPC：VPC网络。',
                                'type' => 'array',
                            ],
                            'Policy' => [
                                'maxLength' => 4000,
                                'title' => '实例访问控制策略，JSON格式。配置语法见：https://help.aliyun.com/zh/ram/user-guide/policy-structure-and-syntax',
                                'type' => 'string',
                            ],
                            'ResourceGroupId' => [
                                'example' => 'rg-acfmxh4em5jnbcd',
                                'title' => 'resource group id',
                                'type' => 'string',
                            ],
                            'Tags' => [
                                'items' => [
                                    'properties' => [
                                        'Key' => [
                                            'required' => true,
                                            'type' => 'string',
                                        ],
                                        'Value' => [
                                            'required' => true,
                                            'type' => 'string',
                                        ],
                                    ],
                                    'type' => 'object',
                                ],
                                'title' => 'tag',
                                'type' => 'array',
                            ],
                        ],
                        'required' => false,
                        'title' => 'request body',
                        'type' => 'object',
                    ],
                    'style' => 'json',
                ],
            ],
            'path' => '/v2/openapi/createinstance',
            'produces' => [
                'application/json',
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'Code' => [
                                'title' => '响应状态码',
                                'type' => 'string',
                            ],
                            'Message' => [
                                'title' => '响应消息描述',
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'title' => 'request id',
                                'type' => 'string',
                            ],
                        ],
                        'title' => 'Schema of Response',
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
            'summary' => '创建实例',
        ],
        'DeleteInstance' => [
            'consumes' => [
                'application/json',
            ],
            'deprecated' => false,
            'methods' => [
                'post',
            ],
            'operationType' => 'write',
            'parameters' => [
                [
                    'in' => 'body',
                    'name' => 'body',
                    'schema' => [
                        'properties' => [
                            'InstanceName' => [
                                'required' => true,
                                'title' => 'instance name',
                                'type' => 'string',
                            ],
                        ],
                        'required' => false,
                        'title' => 'request body',
                        'type' => 'object',
                    ],
                    'style' => 'json',
                ],
            ],
            'path' => '/v2/openapi/deleteinstance',
            'produces' => [
                'application/json',
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                        ],
                        'title' => 'Schema of Response',
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
            'summary' => '删除实例',
        ],
        'DescribeRegions' => [
            'deprecated' => false,
            'methods' => [
                'get',
            ],
            'parameters' => [],
            'path' => '/region/DescribeRegions',
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'Regions' => [
                                'items' => [
                                    'properties' => [
                                        'I18nKey' => [
                                            'title' => 'region key',
                                            'type' => 'string',
                                        ],
                                        'RegionId' => [
                                            'title' => 'region id',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'type' => 'object',
                                ],
                                'title' => 'region list',
                                'type' => 'array',
                            ],
                            'requestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                        ],
                        'title' => 'Schema of Response',
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
            'summary' => '获取用户可见region列表',
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
            'path' => '/v2/openapi/getinstance',
            'produces' => [
                'application/json',
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'AliasName' => [
                                'type' => 'string',
                            ],
                            'CreateTime' => [
                                'type' => 'string',
                            ],
                            'InstanceDescription' => [
                                'type' => 'string',
                            ],
                            'InstanceName' => [
                                'type' => 'string',
                            ],
                            'InstanceSpecification' => [
                                'type' => 'string',
                            ],
                            'InstanceStatus' => [
                                'type' => 'string',
                            ],
                            'Network' => [
                                'type' => 'string',
                            ],
                            'NetworkSourceACL' => [
                                'items' => [
                                    'type' => 'string',
                                ],
                                'title' => '实例允许的网络来源列表。TRUST_PROXY: 控制台；',
                                'type' => 'array',
                            ],
                            'NetworkTypeACL' => [
                                'items' => [
                                    'type' => 'string',
                                ],
                                'title' => '实例允许的网络类型列表。CLASSIC: 经典网；INTERNET: 公网；VPC：VPC网络。',
                                'type' => 'array',
                            ],
                            'PaymentType' => [
                                'type' => 'string',
                            ],
                            'Policy' => [
                                'title' => 'Instance policy 访问控制策略',
                                'type' => 'string',
                            ],
                            'PolicyVersion' => [
                                'format' => 'int64',
                                'title' => 'Instance policy的版本',
                                'type' => 'integer',
                            ],
                            'RegionId' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                            'ResourceGroupId' => [
                                'example' => 'rg-acfmxh4em5jncda',
                                'title' => '资源组id',
                                'type' => 'string',
                            ],
                            'SPInstanceId' => [
                                'type' => 'string',
                            ],
                            'StorageType' => [
                                'type' => 'string',
                            ],
                            'TableQuota' => [
                                'format' => 'int32',
                                'type' => 'integer',
                            ],
                            'Tags' => [
                                'items' => [
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                        ],
                                        'TagKey' => [
                                            'type' => 'string',
                                        ],
                                        'TagValue' => [
                                            'type' => 'string',
                                        ],
                                        'Value' => [
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
                            'VCUQuota' => [
                                'format' => 'int32',
                                'type' => 'integer',
                            ],
                        ],
                        'title' => 'Schema of Response',
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
            'summary' => '获取实例',
        ],
        'ListInstances' => [
            'deprecated' => false,
            'methods' => [
                'get',
            ],
            'operationType' => 'read',
            'parameters' => [
                [
                    'in' => 'query',
                    'name' => 'Status',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'MaxResults',
                    'schema' => [
                        'format' => 'int32',
                        'type' => 'integer',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'NextToken',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'InstanceName',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'ResourceGroupId',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'InstanceNameList',
                    'schema' => [
                        'items' => [
                            'type' => 'string',
                        ],
                        'type' => 'array',
                    ],
                    'style' => 'simple',
                ],
            ],
            'path' => '/v2/openapi/listinstances',
            'produces' => [
                'application/json',
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'Instances' => [
                                'items' => [
                                    'properties' => [
                                        'AliasName' => [
                                            'type' => 'string',
                                        ],
                                        'CreateTime' => [
                                            'type' => 'string',
                                        ],
                                        'InstanceDescription' => [
                                            'type' => 'string',
                                        ],
                                        'InstanceName' => [
                                            'title' => '实例名称，唯一键',
                                            'type' => 'string',
                                        ],
                                        'InstanceSpecification' => [
                                            'type' => 'string',
                                        ],
                                        'InstanceStatus' => [
                                            'type' => 'string',
                                        ],
                                        'PaymentType' => [
                                            'type' => 'string',
                                        ],
                                        'RegionId' => [
                                            'type' => 'string',
                                        ],
                                        'ResourceGroupId' => [
                                            'example' => 'rg-acfmxh4em5jnbcd',
                                            'title' => '资源组id',
                                            'type' => 'string',
                                        ],
                                        'SPInstanceId' => [
                                            'type' => 'string',
                                        ],
                                        'StorageType' => [
                                            'type' => 'string',
                                        ],
                                        'UserId' => [
                                            'type' => 'string',
                                        ],
                                        'VCUQuota' => [
                                            'format' => 'int32',
                                            'type' => 'integer',
                                        ],
                                    ],
                                    'type' => 'object',
                                ],
                                'type' => 'array',
                            ],
                            'NextToken' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                            'TotalCount' => [
                                'format' => 'int64',
                                'type' => 'integer',
                            ],
                        ],
                        'title' => 'Schema of Response',
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
            'summary' => '列取实例',
        ],
        'ListTagResources' => [
            'deprecated' => false,
            'methods' => [
                'get',
            ],
            'parameters' => [
                [
                    'in' => 'query',
                    'name' => 'MaxResults',
                    'schema' => [
                        'format' => 'int32',
                        'type' => 'integer',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'ResourceType',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'in' => 'query',
                    'name' => 'ResourceIds',
                    'schema' => [
                        'items' => [
                            'type' => 'string',
                        ],
                        'type' => 'array',
                    ],
                    'style' => 'simple',
                ],
                [
                    'in' => 'query',
                    'name' => 'Tags',
                    'schema' => [
                        'items' => [
                            'properties' => [
                                'Key' => [
                                    'type' => 'string',
                                ],
                                'Value' => [
                                    'type' => 'string',
                                ],
                            ],
                            'type' => 'object',
                        ],
                        'type' => 'array',
                    ],
                    'style' => 'json',
                ],
                [
                    'in' => 'query',
                    'name' => 'NextToken',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'path' => '/v2/openapi/listtagresources',
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'MaxResults' => [
                                'format' => 'int32',
                                'type' => 'integer',
                            ],
                            'NextToken' => [
                                'type' => 'string',
                            ],
                            'TagResources' => [
                                'items' => [
                                    'properties' => [
                                        'ResourceId' => [
                                            'title' => '资源ID（名称）。',
                                            'type' => 'string',
                                        ],
                                        'ResourceType' => [
                                            'title' => '资源类型。如ALIYUN::OTS::INSTANCE, ALIYUN::VPC::VPC。',
                                            'type' => 'string',
                                        ],
                                        'TagKey' => [
                                            'title' => '标签键。',
                                            'type' => 'string',
                                        ],
                                        'TagValue' => [
                                            'title' => '标签值。',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'title' => '标签对象。',
                                    'type' => 'object',
                                ],
                                'title' => '标签列表。',
                                'type' => 'array',
                            ],
                            'requestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                        ],
                        'title' => 'Schema of Response',
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
            'summary' => '获取标签资源列表',
        ],
        'TagResources' => [
            'consumes' => [
                'application/json',
            ],
            'deprecated' => false,
            'methods' => [
                'post',
            ],
            'operationType' => 'write',
            'parameters' => [
                [
                    'in' => 'body',
                    'name' => 'body',
                    'schema' => [
                        'properties' => [
                            'ResourceIds' => [
                                'items' => [
                                    'required' => true,
                                    'type' => 'string',
                                ],
                                'required' => true,
                                'title' => 'resource ids',
                                'type' => 'array',
                            ],
                            'ResourceType' => [
                                'required' => true,
                                'title' => 'resource type',
                                'type' => 'string',
                            ],
                            'Tags' => [
                                'items' => [
                                    'properties' => [
                                        'Key' => [
                                            'required' => true,
                                            'title' => 'tag key',
                                            'type' => 'string',
                                        ],
                                        'Value' => [
                                            'required' => true,
                                            'title' => 'tag value',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'required' => true,
                                    'type' => 'object',
                                ],
                                'required' => true,
                                'title' => 'tags',
                                'type' => 'array',
                            ],
                        ],
                        'title' => 'A short description of struct',
                        'type' => 'object',
                    ],
                    'style' => 'json',
                ],
            ],
            'path' => '/v2/openapi/tagresources',
            'produces' => [
                'application/json',
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                        ],
                        'title' => 'Schema of Response',
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
            'summary' => '打资源标签',
        ],
        'UntagResources' => [
            'deprecated' => false,
            'methods' => [
                'post',
            ],
            'parameters' => [
                [
                    'in' => 'body',
                    'name' => 'body',
                    'schema' => [
                        'properties' => [
                            'All' => [
                                'type' => 'boolean',
                            ],
                            'ResourceIds' => [
                                'items' => [
                                    'type' => 'string',
                                ],
                                'type' => 'array',
                            ],
                            'ResourceType' => [
                                'type' => 'string',
                            ],
                            'TagKeys' => [
                                'items' => [
                                    'type' => 'string',
                                ],
                                'type' => 'array',
                            ],
                        ],
                        'type' => 'object',
                    ],
                    'style' => 'json',
                ],
            ],
            'path' => '/v2/openapi/untagresources',
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'requestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                        ],
                        'title' => 'Schema of Response',
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
            'summary' => '删除资源标签',
        ],
        'UpdateInstance' => [
            'consumes' => [
                'application/json',
            ],
            'deprecated' => false,
            'methods' => [
                'post',
            ],
            'operationType' => 'write',
            'parameters' => [
                [
                    'in' => 'body',
                    'name' => 'body',
                    'schema' => [
                        'properties' => [
                            'AliasName' => [
                                'type' => 'string',
                            ],
                            'InstanceDescription' => [
                                'type' => 'string',
                            ],
                            'InstanceName' => [
                                'required' => true,
                                'type' => 'string',
                            ],
                            'Network' => [
                                'title' => '（已弃用）实例网络类型。NORMAL, VPC_CONSOLE。默认为NORMAL。',
                                'type' => 'string',
                            ],
                            'NetworkSourceACL' => [
                                'items' => [
                                    'type' => 'string',
                                ],
                                'title' => '更新实例允许的网络来源列表，默认都允许。必须与TRUST_PROXY: 控制台；',
                                'type' => 'array',
                            ],
                            'NetworkTypeACL' => [
                                'items' => [
                                    'title' => '',
                                    'type' => 'string',
                                ],
                                'required' => false,
                                'title' => '更新实例允许的网络类型列表。默认都允许。CLASSIC: 经典网；INTERNET: 公网；VPC：VPC网络。',
                                'type' => 'array',
                            ],
                        ],
                        'type' => 'object',
                    ],
                    'style' => 'json',
                ],
            ],
            'path' => '/v2/openapi/updateinstance',
            'produces' => [
                'application/json',
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
            'summary' => '更新实例',
        ],
    ],
    'endpoints' => [],
];
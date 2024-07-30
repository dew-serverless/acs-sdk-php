<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'ResourceCenter',
        'version' => '2022-12-01',
    ],
    'directories' => [
        [
            'id' => 180850,
            'title' => '管理资源中心',
            'type' => 'directory',
            'children' => [
                'EnableResourceCenter',
                'GetResourceCenterServiceStatus',
                'DisableResourceCenter',
            ],
        ],
        [
            'id' => 180848,
            'title' => '资源搜索',
            'type' => 'directory',
            'children' => [
                'SearchResources',
                'GetResourceConfiguration',
                'ListTagValues',
                'ListTagKeys',
                'ListResourceTypes',
                'GetResourceCounts',
            ],
        ],
        [
            'id' => 180846,
            'title' => '跨账号资源搜索',
            'type' => 'directory',
            'children' => [
                'EnableMultiAccountResourceCenter',
                'DisableMultiAccountResourceCenter',
                'GetMultiAccountResourceCenterServiceStatus',
                'SearchMultiAccountResources',
                'GetMultiAccountResourceConfiguration',
                'ListMultiAccountResourceGroups',
                'ListMultiAccountTagKeys',
                'ListMultiAccountTagValues',
            ],
        ],
        [
            'id' => 186960,
            'title' => '高级搜索',
            'type' => 'directory',
            'children' => [
                'ListExampleQueries',
                'GetExampleQuery',
                'CreateSavedQuery',
                'GetSavedQuery',
                'ListSavedQueries',
                'UpdateSavedQuery',
                'DeleteSavedQuery',
                'ExecuteSQLQuery',
                'ExecuteMultiAccountSQLQuery',
            ],
        ],
        [
            'id' => 188209,
            'title' => '筛选条件',
            'type' => 'directory',
            'children' => [
                'CreateFilter',
                'UpdateFilter',
                'ListFilters',
                'DeleteFilter',
                'AssociateDefaultFilter',
                'DisassociateDefaultFilter',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'EnableResourceCenter' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '服务开通状态。取值：'."\n"
                                    ."\n"
                                    .'- Pending：开启中。'."\n"
                                    .'- Enabled：已开启。',
                                'type' => 'string',
                                'example' => 'Pending',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '45357BEF-AB50-5E4D-B05D-5A882A4BE924',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NoPermission.ServiceLinkedRole',
                        'errorMessage' => 'The current user does not have permission to create servicelinkedrole. Please contact the Alibaba Cloud account or administrator to authorize custom policy: Service Name: rmc.resourcemanager.aliyuncs.com, Action: ram:CreateServiceLinkedRole.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'NotSupport.Account.Site',
                        'errorMessage' => 'The caller is not a current site account, which is not supported.',
                    ],
                    [
                        'errorCode' => 'Conflict.ServiceStatus',
                        'errorMessage' => 'The service status conflict occurred due to frequent service enabled and disabled.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"Pending\\",\\n  \\"RequestId\\": \\"45357BEF-AB50-5E4D-B05D-5A882A4BE924\\"\\n}","type":"json"}]',
            'title' => '开通资源中心',
            'summary' => '开通资源中心。',
        ],
        'GetResourceCenterServiceStatus' => [
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
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'AD5F848D-CCDC-5464-93E1-4BA50A4826DD',
                            ],
                            'ServiceStatus' => [
                                'description' => '服务状态。取值：'."\n"
                                    ."\n"
                                    .'- Enabled：已开通。'."\n"
                                    ."\n"
                                    .'- Disabled：已关闭。',
                                'type' => 'string',
                                'example' => 'Enabled',
                            ],
                            'InitialStatus' => [
                                'description' => '初始化状态。取值：'."\n"
                                    ."\n"
                                    .'- Pending：准备中。'."\n"
                                    ."\n"
                                    .'- Finished：就绪。',
                                'type' => 'string',
                                'example' => 'Pending',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AD5F848D-CCDC-5464-93E1-4BA50A4826DD\\",\\n  \\"ServiceStatus\\": \\"Enabled\\",\\n  \\"InitialStatus\\": \\"Pending\\"\\n}","type":"json"}]',
            'title' => '查询资源中心服务状态',
            'summary' => '查询资源中心服务状态。',
        ],
        'DisableResourceCenter' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D170D58E-6256-5344-8F5E-922EC9ECB7EA',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                    [
                        'errorCode' => 'ServiceNotEnabled',
                        'errorMessage' => 'ResourceCenter Service is not enabled.',
                    ],
                    [
                        'errorCode' => 'DiscoveryInProgress',
                        'errorMessage' => 'A discovery task is in progress. Please wait for a while and check the result again.',
                    ],
                    [
                        'errorCode' => 'DependencyViolation.ResourceGroup',
                        'errorMessage' => 'Unable to disable resource center while associate transfer is enabled.',
                    ],
                    [
                        'errorCode' => 'DependencyViolation.Config',
                        'errorMessage' => 'ResourceCenter cannot be disabled, because the Config has been enabled.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'NotExists.Account',
                        'errorMessage' => 'The specified account does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'DisableConflict.MultiAccount',
                        'errorMessage' => 'ResourceDirectory management account or delegated administrator account has enabled multi account ResourceCenter, you cannot disable ResourceCenter.',
                    ],
                    [
                        'errorCode' => 'DisableConflict.DeliveryChannel',
                        'errorMessage' => 'ResourceCenter cannot be disabled because there are active delivery channels.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D170D58E-6256-5344-8F5E-922EC9ECB7EA\\"\\n}","type":"json"}]',
            'title' => '关闭资源中心',
            'summary' => '关闭资源中心。',
        ],
        'SearchResources' => [
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询返回结果下一页的令牌。'."\n"
                            ."\n"
                            .'当返回结果数据总条数超过`MaxResults`限制，则数据会被截断，您可以使用`NextToken`查询下一页数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的最大数据条数。'."\n"
                            ."\n"
                            .'取值范围：1~100。'."\n"
                            ."\n"
                            .'默认值：20。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '500',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'Filter',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '过滤条件。',
                        'type' => 'array',
                        'items' => [
                            'description' => '过滤条件。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '过滤条件键。取值见下方`支持的过滤参数`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'RegionId',
                                ],
                                'Value' => [
                                    'description' => '过滤条件值。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '过滤条件值。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '过滤条件值。',
                                    ],
                                    'required' => false,
                                    'maxItems' => 200,
                                ],
                                'MatchType' => [
                                    'description' => '匹配方式。'."\n"
                                        ."\n"
                                        .'取值：Equals，表示相等匹配。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Equals',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmzawhxxc****',
                    ],
                ],
                [
                    'name' => 'SortCriterion',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '排序参数。',
                        'type' => 'object',
                        'properties' => [
                            'Key' => [
                                'description' => '排序条件。'."\n"
                                    ."\n"
                                    .'取值：CreateTime，表示按资源创建时间排序。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'CreateTime',
                            ],
                            'Order' => [
                                'description' => '排序顺序。取值：'."\n"
                                    ."\n"
                                    .'- ASC（默认值）：升序。'."\n"
                                    .'- DESC：降序。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ASC',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '查询返回结果下一页的令牌。',
                                'type' => 'string',
                                'example' => 'eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****	'."\n",
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D696E6EF-3A6D-5770-801E-4982081FE4D0',
                            ],
                            'MaxResults' => [
                                'description' => '每页的最大数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'Filters' => [
                                'description' => '过滤条件。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '过滤条件。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'description' => '过滤条件键。',
                                            'type' => 'string',
                                            'example' => 'RegionId',
                                        ],
                                        'MatchType' => [
                                            'description' => '匹配方式。',
                                            'type' => 'string',
                                            'example' => 'Equals',
                                        ],
                                        'Values' => [
                                            'description' => '过滤条件值。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '过滤条件值。',
                                                'type' => 'string',
                                                'example' => 'cn-hangzhou',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Resources' => [
                                'description' => '资源信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '资源信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ResourceType' => [
                                            'description' => '资源类型。',
                                            'type' => 'string',
                                            'example' => 'ACS::VPC::RouteTable',
                                        ],
                                        'CreateTime' => [
                                            'description' => '资源的创建时间。'."\n"
                                                ."\n"
                                                .'> 资源是否返回该参数，由所属的云服务决定。',
                                            'type' => 'string',
                                            'example' => '2021-06-30T09:20:08Z',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组ID。',
                                            'type' => 'string',
                                            'example' => 'rg-acfmzawhxxc****',
                                        ],
                                        'ZoneId' => [
                                            'description' => '可用区ID。'."\n"
                                                ."\n"
                                                .'> 资源是否返回该参数，由所属的云服务决定。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou-k',
                                        ],
                                        'AccountId' => [
                                            'description' => '阿里云账号ID。',
                                            'type' => 'string',
                                            'example' => '151266687691****',
                                        ],
                                        'ResourceId' => [
                                            'description' => '资源ID。',
                                            'type' => 'string',
                                            'example' => 'vtb-bp11lbh452fr8940s****',
                                        ],
                                        'ResourceName' => [
                                            'description' => '资源名称。',
                                            'type' => 'string',
                                            'example' => 'group1',
                                        ],
                                        'RegionId' => [
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'Tags' => [
                                            'description' => '标签。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '标签。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'description' => '标签键。',
                                                        'type' => 'string',
                                                        'example' => 'test_key',
                                                    ],
                                                    'Value' => [
                                                        'description' => '标签值。',
                                                        'type' => 'string',
                                                        'example' => 'test_value',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'IpAddresses' => [
                                            'description' => 'IP地址。'."\n"
                                                ."\n"
                                                .'> 资源是否返回该参数，由所属的云服务决定。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => 'IP地址。'."\n"
                                                    ."\n"
                                                    .'> 资源是否返回该参数，由所属的云服务决定。',
                                                'type' => 'string',
                                                'example' => '192.168.1.2',
                                            ],
                                        ],
                                        'IpAddressAttributes' => [
                                            'description' => 'IP地址属性。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => 'IP地址属性。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'IpAddress' => [
                                                        'description' => 'IP地址。',
                                                        'type' => 'string',
                                                        'example' => '192.168.1.2',
                                                    ],
                                                    'NetworkType' => [
                                                        'description' => '网络类型，取值：'."\n"
                                                            .'- **Public**：公网。'."\n"
                                                            .'- **Private**：私网。',
                                                        'type' => 'string',
                                                        'example' => 'Public',
                                                    ],
                                                    'Version' => [
                                                        'description' => 'IP地址的版本。',
                                                        'type' => 'string',
                                                        'example' => 'Ipv4',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'ExpireTime' => [
                                            'description' => '资源过期时间。',
                                            'type' => 'string',
                                            'example' => '2021-07-30T09:20:08Z',
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
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.MaxResults',
                        'errorMessage' => 'The specified parameter MaxResults is not valid.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'InvalidParameter.SortCriterion.Key',
                        'errorMessage' => 'The specified parameter SortCriterion.Key is not valid.',
                    ],
                    [
                        'errorCode' => 'ExceedLimit.Filter',
                        'errorMessage' => 'The maximum length of Filters is exceeded.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****\\\\t\\\\n\\",\\n  \\"RequestId\\": \\"D696E6EF-3A6D-5770-801E-4982081FE4D0\\",\\n  \\"MaxResults\\": 10,\\n  \\"Filters\\": [\\n    {\\n      \\"Key\\": \\"RegionId\\",\\n      \\"MatchType\\": \\"Equals\\",\\n      \\"Values\\": [\\n        \\"cn-hangzhou\\"\\n      ]\\n    }\\n  ],\\n  \\"Resources\\": [\\n    {\\n      \\"ResourceType\\": \\"ACS::VPC::RouteTable\\",\\n      \\"CreateTime\\": \\"2021-06-30T09:20:08Z\\",\\n      \\"ResourceGroupId\\": \\"rg-acfmzawhxxc****\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-k\\",\\n      \\"AccountId\\": \\"151266687691****\\",\\n      \\"ResourceId\\": \\"vtb-bp11lbh452fr8940s****\\",\\n      \\"ResourceName\\": \\"group1\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"test_key\\",\\n          \\"Value\\": \\"test_value\\"\\n        }\\n      ],\\n      \\"IpAddresses\\": [\\n        \\"192.168.1.2\\"\\n      ],\\n      \\"IpAddressAttributes\\": [\\n        {\\n          \\"IpAddress\\": \\"192.168.1.2\\",\\n          \\"NetworkType\\": \\"Public\\",\\n          \\"Version\\": \\"Ipv4\\"\\n        }\\n      ],\\n      \\"ExpireTime\\": \\"2021-07-30T09:20:08Z\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '搜索当前账号的资源',
            'summary' => '搜索当前账号下有权限访问的资源。',
            'description' => '- 仅能搜索当前账号下有权限访问的资源。'."\n"
                .'- 仅能搜索[支持资源中心的云服务及资源类型](~~477798~~)。'."\n"
                .'- SearchResources接口默认最多返回20条数据，您可以通过指定`MaxResults`参数调整最大返回条目数。'."\n"
                .'- 如果返回结果中不存在`NextToken`，则表示没有更多数据。否则，则表示还有更多数据。如果想要查询后续页，需要将SearchResources接口的`NextToken`参数设置为上一次返回结果中获取到的`NextToken` 。如果未输入`NextToken`参数，查询时默认返回第一页的数据。'."\n"
                .'- 通过设置一个或多个过滤条件，可以精确资源的搜索范围。支持的过滤参数以及匹配方式见下文。多个过滤条件之间是逻辑与`AND`的关系，只有同时满足所有过滤条件的资源才会被返回。每个过滤条件内部是逻辑或`OR`的关系，只要满足任意一个过滤条件值的资源都会被返回。'."\n"
                .'- 您可以在[示例中心](https://api.aliyun.com/api-tools/demo/ResourceCenter)获取更多查询示例。',
            'requestParamsDescription' => '### 支持的过滤参数'."\n"
                .'|参数 |描述|支持的匹配类型|'."\n"
                .'| --- | ------ |------|'."\n"
                .'|ResourceType |资源类型。 |Equals|'."\n"
                .'|RegionId|地域ID。|Equals|'."\n"
                .'|ResourceId|资源ID。|Equals、Prefix|'."\n"
                .'|ResourceGroupId|资源组ID。|Equals、Exists、NotExists|'."\n"
                .'|ResourceName|资源名称。|Equals、Contains|'."\n"
                .'|Tag|标签键值对。 JSON格式为 `{ "key": $key, "value": $value }` ，key与value至少出现一个。例如：查询标签键`foo`和标签值`bar`，则传递`{ "key": "foo", "value": "bar" }` ；查询标签键`foo`，则传递`{ "key": "foo" }`。 |Contains、NotContains、NotExists|'."\n"
                .'|VpcId|VPC ID。|Equals|'."\n"
                .'|VSwitchId|交换机ID。|Equals|',
        ],
        'GetResourceConfiguration' => [
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
                    'name' => 'ResourceRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型。'."\n"
                            ."\n"
                            .'支持资源中心的资源类型，请参见[支持资源中心的云服务及资源类型](~~477798~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ACS::VPC::RouteTable',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'eip-bp1kyg72m****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F1CE0D52-32DA-531A-87A4-B9A5B68D5D8E',
                            ],
                            'ResourceType' => [
                                'description' => '资源类型。',
                                'type' => 'string',
                                'example' => 'ACS::VPC::VSwitch',
                            ],
                            'CreateTime' => [
                                'description' => '资源创建时间。',
                                'type' => 'string',
                                'example' => '2021-06-30T09:20:08Z',
                            ],
                            'ExpireTime' => [
                                'description' => '资源过期时间。',
                                'type' => 'string',
                                'example' => '2021-07-30T09:20:08Z',
                            ],
                            'ResourceGroupId' => [
                                'description' => '资源组ID。',
                                'type' => 'string',
                                'example' => 'rg-acfmv4k****',
                            ],
                            'ZoneId' => [
                                'description' => '可用区ID。',
                                'type' => 'string',
                                'example' => 'cn-hangzhou-k',
                            ],
                            'AccountId' => [
                                'description' => '阿里云账号ID。',
                                'type' => 'string',
                                'example' => '151266687691****',
                            ],
                            'ResourceId' => [
                                'description' => '资源ID。',
                                'type' => 'string',
                                'example' => 'vtb-uf6978gdqbi****',
                            ],
                            'ResourceName' => [
                                'description' => '资源名称。',
                                'type' => 'string',
                                'example' => 'group1',
                            ],
                            'RegionId' => [
                                'description' => '资源地域ID。',
                                'type' => 'string',
                                'example' => 'cn-hangzhou',
                            ],
                            'Tags' => [
                                'description' => '标签。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'description' => '标签键。',
                                            'type' => 'string',
                                            'example' => 'test-key',
                                        ],
                                        'Value' => [
                                            'description' => '标签值。',
                                            'type' => 'string',
                                            'example' => 'test-value',
                                        ],
                                    ],
                                ],
                            ],
                            'IpAddresses' => [
                                'description' => 'IP地址。'."\n"
                                    ."\n"
                                    .'> 资源是否返回该参数，由所属的云服务决定。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'IP地址。',
                                    'type' => 'string',
                                    'example' => '192.168.1.2',
                                ],
                            ],
                            'IpAddressAttributes' => [
                                'description' => 'IP地址属性。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'IP地址属性。',
                                    'type' => 'object',
                                    'properties' => [
                                        'IpAddress' => [
                                            'description' => 'IP地址。',
                                            'type' => 'string',
                                            'example' => '192.168.1.2',
                                        ],
                                        'NetworkType' => [
                                            'description' => '网络类型，取值：'."\n"
                                                .'- **Public**：公网。'."\n"
                                                .'- **Private**：私网。',
                                            'type' => 'string',
                                            'example' => 'Public',
                                        ],
                                        'Version' => [
                                            'description' => 'IP地址的版本。',
                                            'type' => 'string',
                                            'example' => 'Ipv4',
                                        ],
                                    ],
                                ],
                            ],
                            'Configuration' => [
                                'description' => '资源配置详情。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'any',
                                    'description' => '资源配置详情。',
                                    'example' => '{\\"uid\\":\\"191432722631****\\",\\"groupId\\":\\"MtxXXli4FfphQJyH9R3p00****\\"}',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'NoPermission.Resource',
                        'errorMessage' => 'The operator is not permitted for this resource.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'NotExists.Resource',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'InvalidParameter.ResourceType',
                        'errorMessage' => 'The specified parameter ResourceType is not valid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F1CE0D52-32DA-531A-87A4-B9A5B68D5D8E\\",\\n  \\"ResourceType\\": \\"ACS::VPC::VSwitch\\",\\n  \\"CreateTime\\": \\"2021-06-30T09:20:08Z\\",\\n  \\"ExpireTime\\": \\"2021-07-30T09:20:08Z\\",\\n  \\"ResourceGroupId\\": \\"rg-acfmv4k****\\",\\n  \\"ZoneId\\": \\"cn-hangzhou-k\\",\\n  \\"AccountId\\": \\"151266687691****\\",\\n  \\"ResourceId\\": \\"vtb-uf6978gdqbi****\\",\\n  \\"ResourceName\\": \\"group1\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"Tags\\": [\\n    {\\n      \\"Key\\": \\"test-key\\",\\n      \\"Value\\": \\"test-value\\"\\n    }\\n  ],\\n  \\"IpAddresses\\": [\\n    \\"192.168.1.2\\"\\n  ],\\n  \\"IpAddressAttributes\\": [\\n    {\\n      \\"IpAddress\\": \\"192.168.1.2\\",\\n      \\"NetworkType\\": \\"Public\\",\\n      \\"Version\\": \\"Ipv4\\"\\n    }\\n  ],\\n  \\"Configuration\\": {\\n    \\"key\\": \\"{\\\\\\\\\\\\\\"uid\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"191432722631****\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"groupId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"MtxXXli4FfphQJyH9R3p00****\\\\\\\\\\\\\\"}\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询资源配置',
            'summary' => '查询当前账号的资源配置。',
        ],
        'ListTagValues' => [
            'summary' => '查询当前账号下的标签值。',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的最大数据条数。'."\n"
                            ."\n"
                            .'取值范围：1~100。'."\n"
                            ."\n"
                            .'默认值：20。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询返回结果下一页的令牌。'."\n"
                            ."\n"
                            .'当返回结果数据总条数超过`MaxResults`限制，则数据会被截断，您可以使用`NextToken`查询下一页数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****',
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签键。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_key',
                    ],
                ],
                [
                    'name' => 'TagValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_value',
                    ],
                ],
                [
                    'name' => 'MatchType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '',
                        'description' => '匹配方式。取值：'."\n"
                            ."\n"
                            .'- Equals：相等匹配。'."\n"
                            .'- Prefix：前缀匹配。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Equals',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ListTagValuesResponseDTO',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '下一个查询开始的Token。',
                                'type' => 'string',
                                'example' => 'eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****',
                            ],
                            'TagValues' => [
                                'description' => '标签值列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'example' => 'test_value',
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C1840B83-1193-5E83-AFA6-4B8D303E29F5',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.MaxResults',
                        'errorMessage' => 'The specified parameter MaxResults is not valid.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'InvalidParameter.MatchType',
                        'errorMessage' => 'The specified parameter MatchType is not valid.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****\\",\\n  \\"TagValues\\": [\\n    \\"test_value\\"\\n  ],\\n  \\"RequestId\\": \\"C1840B83-1193-5E83-AFA6-4B8D303E29F5\\"\\n}","type":"json"}]',
            'title' => '查询标签值',
        ],
        'ListTagKeys' => [
            'summary' => '查询当前账号下的标签键。',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的最大数据条数。'."\n"
                            ."\n"
                            .'取值范围：1~100。'."\n"
                            ."\n"
                            .'默认值：20。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询返回结果下一页的令牌。'."\n"
                            ."\n"
                            .'当返回结果数据总条数超过`MaxResults`限制，则数据会被截断，您可以使用`NextToken`查询下一页数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AAAAAUYb00R0gHZBE8FVDeoh2ME93VeeEPUHs****',
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签键。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_key',
                    ],
                ],
                [
                    'name' => 'MatchType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '',
                        'description' => '匹配方式。取值：'."\n"
                            ."\n"
                            .'- Equals：相等匹配。'."\n"
                            .'- Prefix：前缀匹配。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Equals',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ListTagKeysResponseDTO',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '下一个查询开始Token。',
                                'type' => 'string',
                                'example' => 'AAAAAUDnubHKJbVTCdlIGYUPtsu3EoN3bfdgjDA****',
                            ],
                            'TagKeys' => [
                                'description' => '标签键列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'example' => 'test_key',
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '44C8A952-D6B0-5BC8-82D5-93BA02E26F2E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.MaxResults',
                        'errorMessage' => 'The specified parameter MaxResults is not valid.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'InvalidParameter.MatchType',
                        'errorMessage' => 'The specified parameter MatchType is not valid.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"AAAAAUDnubHKJbVTCdlIGYUPtsu3EoN3bfdgjDA****\\",\\n  \\"TagKeys\\": [\\n    \\"test_key\\"\\n  ],\\n  \\"RequestId\\": \\"44C8A952-D6B0-5BC8-82D5-93BA02E26F2E\\"\\n}","type":"json"}]',
            'title' => '查询标签键',
        ],
        'ListResourceTypes' => [
            'summary' => '查询资源中心支持的资源类型。',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'AcceptLanguage',
                    'in' => 'query',
                    'schema' => [
                        'title' => '',
                        'description' => '返回信息的语言类型：'."\n"
                            ."\n"
                            .'- zh-CN：中文'."\n"
                            .'- en-US：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh-CN',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '',
                        'description' => '资源类型。'."\n"
                            ."\n"
                            .'支持资源中心的资源类型，请参见[支持资源中心的云服务及资源类型](~~477798~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ACS::ACK::Cluster',
                    ],
                ],
                [
                    'name' => 'Query',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '',
                        'description' => '查询条件。',
                        'type' => 'array',
                        'items' => [
                            'description' => '查询字段。取值：'."\n"
                                ."\n"
                                .'- ResourceType：资源类型。'."\n"
                                .'- ProductName：云服务名称。'."\n"
                                .'- ResourceTypeName：资源类型名称。'."\n"
                                .'- FilterKeys：过滤条件。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ResourceType',
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ListResourceTypesOpenResponseDTO',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'ResourceTypes' => [
                                'description' => '资源类型列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '资源类型列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ResourceType' => [
                                            'title' => '资源类型fullCode ACS::ECS::Instance',
                                            'description' => '资源类型。',
                                            'type' => 'string',
                                            'example' => 'ACS::ACK::Cluster',
                                        ],
                                        'ProductName' => [
                                            'title' => '产品名称 (国际化)',
                                            'description' => '云服务名称。',
                                            'type' => 'string',
                                            'example' => '容器服务Kubernetes版',
                                        ],
                                        'ResourceTypeName' => [
                                            'title' => '资源类型名称',
                                            'description' => '资源类型名称。',
                                            'type' => 'string',
                                            'example' => '集群',
                                        ],
                                        'FilterKeys' => [
                                            'title' => '支持的过滤条件',
                                            'description' => '支持的过滤条件。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '支持的过滤条件。',
                                                'type' => 'string',
                                                'example' => 'ResourceName',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E5556E4C-479A-5BBB-B325-F07563E7E917',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                409 => [
                    [
                        'errorCode' => 'InvalidParameter.Query',
                        'errorMessage' => 'The specified parameter Query is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ResourceType',
                        'errorMessage' => 'The specified parameter ResourceType is not valid.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ResourceTypes\\": [\\n    {\\n      \\"ResourceType\\": \\"ACS::ACK::Cluster\\",\\n      \\"ProductName\\": \\"容器服务Kubernetes版\\",\\n      \\"ResourceTypeName\\": \\"集群\\",\\n      \\"FilterKeys\\": [\\n        \\"ResourceName\\"\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"E5556E4C-479A-5BBB-B325-F07563E7E917\\"\\n}","type":"json"}]',
            'title' => '查询资源中心支持的资源类型',
        ],
        'GetResourceCounts' => [
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
                    'name' => 'GroupByKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源数量统计的分组维度。取值：'."\n"
                            .'- ResourceType：资源类型。'."\n"
                            .'- RegionId：地域。'."\n"
                            .'- ResourceGroupId：资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ResourceType',
                    ],
                ],
                [
                    'name' => 'Filter',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '过滤条件。',
                        'type' => 'array',
                        'items' => [
                            'description' => '过滤条件。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '过滤条件键。取值见下方`支持的过滤参数`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'RegionId',
                                ],
                                'Value' => [
                                    'description' => '过滤条件值。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '过滤条件值。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'cn-shanghai',
                                    ],
                                    'required' => false,
                                    'maxItems' => 200,
                                ],
                                'MatchType' => [
                                    'description' => '匹配方式。'."\n"
                                        ."\n"
                                        .'取值为Equals，表示相等匹配。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Equals',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'GroupByKey' => [
                                'description' => '资源统计的分组维度。',
                                'type' => 'string',
                                'example' => 'ResourceType',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6D98D9B0-318D-56A4-910C-93B5F945AF2B',
                            ],
                            'Filters' => [
                                'description' => '过滤条件。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '过滤条件。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'description' => '过滤条件键。',
                                            'type' => 'string',
                                            'example' => 'RegionId',
                                        ],
                                        'Values' => [
                                            'description' => '过滤条件值。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '过滤条件值。',
                                                'type' => 'string',
                                                'example' => 'cn-shanghai',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'ResourceCounts' => [
                                'description' => '资源数量列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '资源数量。',
                                    'type' => 'object',
                                    'properties' => [
                                        'GroupName' => [
                                            'description' => '分组名称。',
                                            'type' => 'string',
                                            'example' => 'ACS::ECS::NetworkInterface',
                                        ],
                                        'Count' => [
                                            'description' => '资源数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2',
                                        ],
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"GroupByKey\\": \\"ResourceType\\",\\n  \\"RequestId\\": \\"6D98D9B0-318D-56A4-910C-93B5F945AF2B\\",\\n  \\"Filters\\": [\\n    {\\n      \\"Key\\": \\"RegionId\\",\\n      \\"Values\\": [\\n        \\"cn-shanghai\\"\\n      ]\\n    }\\n  ],\\n  \\"ResourceCounts\\": [\\n    {\\n      \\"GroupName\\": \\"ACS::ECS::NetworkInterface\\",\\n      \\"Count\\": 2\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询当前账号下的资源数量',
            'summary' => '查询当前账号下有权限访问的资源数量。',
            'description' => '- 仅能搜索当前账号下有权限访问的资源数量。'."\n"
                .'- 仅能搜索[支持资源中心的云服务及资源类型](~~477798~~)。',
            'requestParamsDescription' => '### 支持的过滤参数'."\n"
                .'|参数 |描述|支持的匹配类型|'."\n"
                .'| --- | ------ |------|'."\n"
                .'|ResourceType |资源类型。 |Equals|'."\n"
                .'|RegionId|地域ID。|Equals|'."\n"
                .'|ResourceId|资源ID。|Equals、Prefix|'."\n"
                .'|ResourceGroupId|资源组ID。|Equals、Exists、NotExists|'."\n"
                .'|ResourceName|资源名称。|Equals、Contains|'."\n"
                .'|Tag|标签键值对。 JSON格式为 `{ "key": $key, "value": $value }` ，key与value至少出现一个。例如：查询标签键`foo`和标签值`bar`，则传递`{ "key": "foo", "value": "bar" }` ；查询标签键`foo`，则传递`{ "key": "foo" }`。 |Contains、NotContains、NotExists|'."\n"
                .'|VpcId|VPC ID。|Equals|'."\n"
                .'|VSwitchId|交换机ID。|Equals|',
        ],
        'EnableMultiAccountResourceCenter' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '开通状态。取值：'."\n"
                                    ."\n"
                                    .'- Pending：开通中。'."\n"
                                    .'- Enabled：已开通。',
                                'type' => 'string',
                                'example' => 'Pending',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '767038B7-2027-5508-858B-E213232D57D5',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'NotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'NoPermission.ResourceDirectory.MemberAccount',
                        'errorMessage' => 'ResourceDirectory Member Account is not authorized to perform this operation.',
                    ],
                    [
                        'errorCode' => 'NotSupport.Account.Site',
                        'errorMessage' => 'The caller is not a current site account, which is not supported.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"Pending\\",\\n  \\"RequestId\\": \\"767038B7-2027-5508-858B-E213232D57D5\\"\\n}","type":"json"}]',
            'title' => '开通跨账号资源搜索',
            'summary' => '开通跨账号资源搜索。',
            'description' => '如果您已经通过资源目录搭建了企业的多账号体系结构，您可以使用资源目录的管理账号或委派管理员账号开通跨账号资源搜索，查看多个成员中的资源。关于资源目录的更多信息，请参见[资源目录概述](~~200506~~)。',
        ],
        'DisableMultiAccountResourceCenter' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4951F920-48DB-5731-96AA-3A7C8AE617D9',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'NotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'NoPermission.ResourceDirectory.MemberAccount',
                        'errorMessage' => 'ResourceDirectory Member Account is not authorized to perform this operation.',
                    ],
                    [
                        'errorCode' => 'DisableConflict.DeliveryChannel',
                        'errorMessage' => 'ResourceCenter cannot be disabled because there are active delivery channels.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4951F920-48DB-5731-96AA-3A7C8AE617D9\\"\\n}","type":"json"}]',
            'title' => '关闭跨账号资源搜索',
            'summary' => '关闭跨账号资源搜索。',
        ],
        'GetMultiAccountResourceCenterServiceStatus' => [
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
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '81671397-1425-51F1-A144-4799E01BEBFF',
                            ],
                            'ServiceStatus' => [
                                'description' => '服务状态。取值：'."\n"
                                    ."\n"
                                    .'- Enabled：已开通。'."\n"
                                    ."\n"
                                    .'- Disabled：已关闭。',
                                'type' => 'string',
                                'example' => 'Enabled',
                            ],
                            'InitialStatus' => [
                                'description' => '初始化状态。取值：'."\n"
                                    ."\n"
                                    .'- Pending：准备中。'."\n"
                                    ."\n"
                                    .'- Finished：就绪。',
                                'type' => 'string',
                                'example' => 'Pending',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                    [
                        'errorCode' => 'MultiAccountServiceNotEnabled',
                        'errorMessage' => 'Mulit account ResourceCenter service is not enabled.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'NotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'InvalidParameter.Scope',
                        'errorMessage' => 'The Scope is invalid.',
                    ],
                    [
                        'errorCode' => 'NoPermission.ResourceDirectory.MemberAccount',
                        'errorMessage' => 'ResourceDirectory Member Account is not authorized to perform this operation.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"81671397-1425-51F1-A144-4799E01BEBFF\\",\\n  \\"ServiceStatus\\": \\"Enabled\\",\\n  \\"InitialStatus\\": \\"Pending\\"\\n}","type":"json"}]',
            'title' => '查询跨账号资源搜索开通状态',
            'summary' => '查询跨账号资源搜索开通状态。',
        ],
        'SearchMultiAccountResources' => [
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'Scope',
                    'in' => 'query',
                    'schema' => [
                        'description' => '搜索的账号范围。取值： '."\n"
                            .'- 资源目录ID，表示搜索管理账号和所有成员中的资源。更多信息，请参见[GetResourceDirectory](~~159995~~)。'."\n"
                            .'- Root资源夹ID，表示搜索Root资源夹及子资源夹下的所有成员中的资源。更多信息，请参见[ListFoldersForParent](~~159997~~)。'."\n"
                            .'- 资源夹ID，表示搜索指定资源夹下所有成员中的资源。更多信息，请参见[ListFoldersForParent](~~159997~~)。'."\n"
                            .'- 成员ID，表示搜索指定成员中的资源。更多信息，请参见[ListAccounts](~~160016~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rd-r4****',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询返回结果下一页的令牌。'."\n"
                            ."\n"
                            .'当返回结果数据总条数超过`MaxResults`限制，则数据会被截断，您可以使用`NextToken`查询下一页数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的最大数据条数。'."\n"
                            ."\n"
                            .'取值范围：1~100。'."\n"
                            ."\n"
                            .'默认值：20。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'Filter',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '过滤条件。',
                        'type' => 'array',
                        'items' => [
                            'description' => '过滤条件。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '过滤条件键。取值见下方`支持的过滤参数`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ResourceGroupId',
                                ],
                                'Value' => [
                                    'description' => '过滤条件值。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '过滤条件值。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'rg-aekzmrjn4ns****',
                                    ],
                                    'required' => false,
                                    'maxItems' => 200,
                                ],
                                'MatchType' => [
                                    'description' => '匹配方式。'."\n"
                                        ."\n"
                                        .'取值为Equals，表示相等匹配。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Equals',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'SortCriterion',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '排序参数。',
                        'type' => 'object',
                        'properties' => [
                            'Key' => [
                                'description' => '排序条件。'."\n"
                                    ."\n"
                                    .'取值为CreateTime，表示按资源创建时间排序。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'CreateTime',
                            ],
                            'Order' => [
                                'description' => '排序顺序。取值：'."\n"
                                    ."\n"
                                    .'- ASC（默认值）：升序。'."\n"
                                    .'- DESC：降序。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ASC',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'EFA806B9-7F36-55AB-8B7A-D680C2C5EE57',
                            ],
                            'NextToken' => [
                                'description' => '查询返回结果下一页的令牌。',
                                'type' => 'string',
                                'example' => '查询返回结果下一页的令牌。',
                            ],
                            'Scope' => [
                                'description' => '搜索的账号范围。取值： '."\n"
                                    .'- 资源目录ID，表示搜索管理账号和所有成员中的资源。'."\n"
                                    .'- Root资源夹ID，表示搜索Root资源夹及子资源夹下的所有成员中的资源。'."\n"
                                    .'- 资源夹ID，表示搜索指定资源夹下所有成员中的资源。'."\n"
                                    .'- 成员ID，表示搜索指定成员中的资源。',
                                'type' => 'string',
                                'example' => 'rd-r4****'."\n",
                            ],
                            'MaxResults' => [
                                'description' => '每页的最大数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'Filters' => [
                                'description' => '过滤条件。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '过滤条件。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'description' => '过滤条件键。',
                                            'type' => 'string',
                                            'example' => 'RegionId',
                                        ],
                                        'MatchType' => [
                                            'description' => '匹配方式。',
                                            'type' => 'string',
                                            'example' => 'Equals',
                                        ],
                                        'Values' => [
                                            'description' => '过滤条件值。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '过滤条件值。',
                                                'type' => 'string',
                                                'example' => 'cn-hangzhou',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Resources' => [
                                'description' => '资源信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '资源信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ResourceType' => [
                                            'description' => '资源类型。',
                                            'type' => 'string',
                                            'example' => 'ACS::VPC::RouteTable',
                                        ],
                                        'CreateTime' => [
                                            'description' => '资源的创建时间。'."\n"
                                                ."\n"
                                                .'> 资源是否返回该参数，由所属的云服务决定。',
                                            'type' => 'string',
                                            'example' => '2021-06-30T09:20:08Z',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组ID。',
                                            'type' => 'string',
                                            'example' => 'rg-acfmzawhxxc****	'."\n",
                                        ],
                                        'ZoneId' => [
                                            'description' => '可用区ID。'."\n"
                                                ."\n"
                                                .'> 资源是否返回该参数，由所属的云服务决定。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou-k',
                                        ],
                                        'AccountId' => [
                                            'description' => '资源目录管理账号ID或成员账号ID。',
                                            'type' => 'string',
                                            'example' => '151266687691****',
                                        ],
                                        'ResourceId' => [
                                            'description' => '资源ID。',
                                            'type' => 'string',
                                            'example' => 'vtb-bp11lbh452fr8940s****',
                                        ],
                                        'ResourceName' => [
                                            'description' => '资源名称。',
                                            'type' => 'string',
                                            'example' => 'group1',
                                        ],
                                        'RegionId' => [
                                            'description' => '资源地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'Tags' => [
                                            'description' => '标签。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '标签。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'description' => '标签键。',
                                                        'type' => 'string',
                                                        'example' => 'test_key',
                                                    ],
                                                    'Value' => [
                                                        'description' => '标签值。',
                                                        'type' => 'string',
                                                        'example' => 'test_value',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'IpAddresses' => [
                                            'description' => 'IP地址。'."\n"
                                                ."\n"
                                                .'> 资源是否返回该参数，由所属的云服务决定。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => 'IP地址。'."\n"
                                                    ."\n"
                                                    .'> 资源是否返回该参数，由所属的云服务决定。',
                                                'type' => 'string',
                                                'example' => '192.168.1.2',
                                            ],
                                        ],
                                        'IpAddressAttributes' => [
                                            'description' => 'IP地址属性。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => 'IP地址属性。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'IpAddress' => [
                                                        'description' => 'IP地址。',
                                                        'type' => 'string',
                                                        'example' => '192.168.1.2',
                                                    ],
                                                    'NetworkType' => [
                                                        'description' => '网络类型，取值：'."\n"
                                                            .'- **Public**：公网。'."\n"
                                                            .'- **Private**：私网。',
                                                        'type' => 'string',
                                                        'example' => 'Public',
                                                    ],
                                                    'Version' => [
                                                        'description' => 'IP地址的版本。',
                                                        'type' => 'string',
                                                        'example' => 'Ipv4',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'ExpireTime' => [
                                            'description' => '资源过期时间。',
                                            'type' => 'string',
                                            'example' => '2023-06-14T14:35:45Z',
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
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.MaxResults',
                        'errorMessage' => 'The specified parameter MaxResults is not valid.',
                    ],
                    [
                        'errorCode' => 'MultiAccountServiceNotEnabled',
                        'errorMessage' => 'Multi account ResourceCenter service is not enabled.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'NotExists.Resource',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'NotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled.',
                    ],
                    [
                        'errorCode' => 'NotExists.ResourceDirectory.FolderId',
                        'errorMessage' => 'The specified folder does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'InvalidParameter.Scope',
                        'errorMessage' => 'The Scope is invalid.',
                    ],
                    [
                        'errorCode' => 'NoPermission.ResourceDirectory.MemberAccount',
                        'errorMessage' => 'ResourceDirectory Member Account is not authorized to perform this operation.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.SortCriterion.Key',
                        'errorMessage' => 'The specified parameter SortCriterion.Key is not valid.',
                    ],
                    [
                        'errorCode' => 'ExceedLimit.Filter',
                        'errorMessage' => 'The maximum length of Filters is exceeded.',
                    ],
                    [
                        'errorCode' => 'ServiceNotEnabled.SpecifiedAccount',
                        'errorMessage' => 'ResourceCenter service of the specified account is not enabled.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EFA806B9-7F36-55AB-8B7A-D680C2C5EE57\\",\\n  \\"NextToken\\": \\"查询返回结果下一页的令牌。\\",\\n  \\"Scope\\": \\"rd-r4****\\\\n\\",\\n  \\"MaxResults\\": 10,\\n  \\"Filters\\": [\\n    {\\n      \\"Key\\": \\"RegionId\\",\\n      \\"MatchType\\": \\"Equals\\",\\n      \\"Values\\": [\\n        \\"cn-hangzhou\\"\\n      ]\\n    }\\n  ],\\n  \\"Resources\\": [\\n    {\\n      \\"ResourceType\\": \\"ACS::VPC::RouteTable\\",\\n      \\"CreateTime\\": \\"2021-06-30T09:20:08Z\\",\\n      \\"ResourceGroupId\\": \\"rg-acfmzawhxxc****\\\\t\\\\n\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-k\\",\\n      \\"AccountId\\": \\"151266687691****\\",\\n      \\"ResourceId\\": \\"vtb-bp11lbh452fr8940s****\\",\\n      \\"ResourceName\\": \\"group1\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"test_key\\",\\n          \\"Value\\": \\"test_value\\"\\n        }\\n      ],\\n      \\"IpAddresses\\": [\\n        \\"192.168.1.2\\"\\n      ],\\n      \\"IpAddressAttributes\\": [\\n        {\\n          \\"IpAddress\\": \\"192.168.1.2\\",\\n          \\"NetworkType\\": \\"Public\\",\\n          \\"Version\\": \\"Ipv4\\"\\n        }\\n      ],\\n      \\"ExpireTime\\": \\"2023-06-14T14:35:45Z\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '搜索多账号的资源',
            'summary' => '搜索资源目录管理账号和多个成员中的资源。',
            'description' => '- 仅能搜索[支持资源中心的云服务及资源类型](~~477798~~)。'."\n"
                .'- 如果您使用的是RAM用户账号或者RAM角色，需要被授予SearchMultiAccountResources接口的权限才能执行跨账号资源搜索操作。更多信息，请参见[RAM用户使用资源中心](~~600556~~)。'."\n"
                .'- SearchMultiAccountResources接口默认最多返回20条数据，您可以通过指定`MaxResults`参数调整最大返回条目数。'."\n"
                .'- 如果返回结果中不存在`NextToken`，则表示没有更多数据。否则，则表示还有更多数据。如果想要查询后续页，需要将 SearchMultiAccountResources 接口的`NextToken`参数设置为上一次返回结果中获取到的`NextToken` 。如果未输入`NextToken`参数，查询时默认返回第一页的数据。'."\n"
                .'- 通过设置一个或多个过滤条件，可以精确资源的搜索范围。支持的过滤参数以及匹配方式见下文。多个过滤条件之间是逻辑与`AND`的关系，只有同时满足所有过滤条件的资源才会被返回。每个过滤条件内部是逻辑或`OR`的关系，只要满足任意一个过滤条件值的资源都会被返回。'."\n"
                .'- 您可以在<props="china">[示例中心](https://api.aliyun.com/api-tools/demo/ResourceCenter)</props>'."\n"
                .'<props="intl">[示例中心](https://api.alibabacloud.com/api-tools/demo/ResourceCenter)</props>获取更多查询示例。',
            'requestParamsDescription' => '### 支持的过滤参数'."\n"
                .'|参数 |描述|支持的匹配类型|'."\n"
                .'| --- | ------ |------|'."\n"
                .'|ResourceType |资源类型。 |Equals|'."\n"
                .'|RegionId|地域ID。|Equals|'."\n"
                .'|ResourceId|资源ID。|Equals、Prefix|'."\n"
                .'|ResourceGroupId|资源组ID。|Equals、Exists、NotExists|'."\n"
                .'|ResourceName|资源名称。|Equals、Contains|'."\n"
                .'|Tag|标签键值对。 JSON格式为 `{ "key": $key, "value": $value }` ，key与value至少出现一个。例如：查询标签键`foo`和标签值`bar`，则传递: `{ "key": "foo", "value": "bar" }` ；查询标签键`foo`，则传递: `{ "key": "foo" }`。 |Contains、NotContains、NotExists|'."\n"
                .'|VpcId|VPC ID。|Equals|'."\n"
                .'|VSwitchId|交换机ID。|Equals|',
        ],
        'GetMultiAccountResourceConfiguration' => [
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
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源目录管理账号ID或成员ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1619302****',
                    ],
                ],
                [
                    'name' => 'ResourceRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ACS::VPC::RouteTable',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'm-eb3hji****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B2DCC08B-C12A-5705-879C-5A1450016156',
                            ],
                            'ResourceType' => [
                                'description' => '资源类型。',
                                'type' => 'string',
                                'example' => 'ACS::VPC::RouteTable',
                            ],
                            'CreateTime' => [
                                'description' => '资源创建时间。',
                                'type' => 'string',
                                'example' => '2023-02-14T03:12:11Z',
                            ],
                            'ResourceGroupId' => [
                                'description' => '资源组ID。'."\n",
                                'type' => 'string',
                                'example' => 'rg-acfmzy6d****',
                            ],
                            'ZoneId' => [
                                'description' => '可用区ID。',
                                'type' => 'string',
                                'example' => 'cn-shanghai-a',
                            ],
                            'AccountId' => [
                                'description' => '资源目录管理账号ID或成员ID。',
                                'type' => 'string',
                                'example' => '1619302****',
                            ],
                            'ResourceId' => [
                                'description' => '资源ID。',
                                'type' => 'string',
                                'example' => 'm-eb3hji****',
                            ],
                            'ResourceName' => [
                                'description' => '资源名称。',
                                'type' => 'string',
                                'example' => 'test_resource',
                            ],
                            'RegionId' => [
                                'description' => '资源地域ID。',
                                'type' => 'string',
                                'example' => 'cn-shanghai',
                            ],
                            'Tags' => [
                                'description' => '资源标签。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '资源标签。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'description' => '标签键。',
                                            'type' => 'string',
                                            'example' => 'tag-key',
                                        ],
                                        'Value' => [
                                            'description' => '标签值。',
                                            'type' => 'string',
                                            'example' => 'tag-value',
                                        ],
                                    ],
                                ],
                            ],
                            'IpAddresses' => [
                                'description' => 'IP地址。'."\n"
                                    ."\n"
                                    .'> 资源是否返回该参数，由所属的云服务决定。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'IP地址。'."\n"
                                        ."\n"
                                        .'> 资源是否返回该参数，由所属的云服务决定。',
                                    'type' => 'string',
                                    'example' => '[\'192.168.1.2\']',
                                ],
                            ],
                            'Configuration' => [
                                'description' => '资源配置详情。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'any',
                                    'description' => '资源配置详情。',
                                    'example' => '{\\"uid\\":\\"140874204639****\\",\\"groupId\\":\\"3zLxraq7qE9dRakjoQYI00****\\"}',
                                ],
                            ],
                            'IpAddressAttributes' => [
                                'description' => 'IP地址属性。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'IP地址属性。',
                                    'type' => 'object',
                                    'properties' => [
                                        'IpAddress' => [
                                            'description' => 'IP地址。',
                                            'type' => 'string',
                                            'example' => '172.27.199.42',
                                        ],
                                        'NetworkType' => [
                                            'description' => '网络类型，取值：'."\n"
                                                .'- **Public**：公网。'."\n"
                                                .'- **Private**：私网。',
                                            'type' => 'string',
                                            'example' => 'Public',
                                        ],
                                        'Version' => [
                                            'description' => 'IP地址的版本。',
                                            'type' => 'string',
                                            'example' => 'Ipv4',
                                        ],
                                    ],
                                ],
                            ],
                            'ExpireTime' => [
                                'description' => '资源过期时间。',
                                'type' => 'string',
                                'example' => '2023-09-18T07:04:21Z',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                    [
                        'errorCode' => 'MultiAccountServiceNotEnabled',
                        'errorMessage' => 'Multi account ResourceCenter service is not enabled.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'NotExists.Resource',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'NotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'InvalidParameter.AccountId',
                        'errorMessage' => 'The specified parameter AccountId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ResourceType',
                        'errorMessage' => 'The specified parameter ResourceType is not valid.',
                    ],
                    [
                        'errorCode' => 'NoPermission.ResourceDirectory.MemberAccount',
                        'errorMessage' => 'ResourceDirectory Member Account is not authorized to perform this operation.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B2DCC08B-C12A-5705-879C-5A1450016156\\",\\n  \\"ResourceType\\": \\"ACS::VPC::RouteTable\\",\\n  \\"CreateTime\\": \\"2023-02-14T03:12:11Z\\",\\n  \\"ResourceGroupId\\": \\"rg-acfmzy6d****\\",\\n  \\"ZoneId\\": \\"cn-shanghai-a\\",\\n  \\"AccountId\\": \\"1619302****\\",\\n  \\"ResourceId\\": \\"m-eb3hji****\\",\\n  \\"ResourceName\\": \\"test_resource\\",\\n  \\"RegionId\\": \\"cn-shanghai\\",\\n  \\"Tags\\": [\\n    {\\n      \\"Key\\": \\"tag-key\\",\\n      \\"Value\\": \\"tag-value\\"\\n    }\\n  ],\\n  \\"IpAddresses\\": [\\n    \\"[\'192.168.1.2\']\\"\\n  ],\\n  \\"Configuration\\": {\\n    \\"key\\": \\"{\\\\\\\\\\\\\\"uid\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"140874204639****\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"groupId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"3zLxraq7qE9dRakjoQYI00****\\\\\\\\\\\\\\"}\\"\\n  },\\n  \\"IpAddressAttributes\\": [\\n    {\\n      \\"IpAddress\\": \\"172.27.199.42\\",\\n      \\"NetworkType\\": \\"Public\\",\\n      \\"Version\\": \\"Ipv4\\"\\n    }\\n  ],\\n  \\"ExpireTime\\": \\"2023-09-18T07:04:21Z\\"\\n}","type":"json"}]',
            'title' => '查询多账号资源配置',
            'summary' => '查询资源目录管理账号或成员的资源配置。',
        ],
        'ListMultiAccountResourceGroups' => [
            'summary' => '查询资源目录管理账号或成员的资源组。',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页行数。'."\n"
                            ."\n"
                            .'每页最大行数：100。默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AAAAAS2Nboi3t4xGrdlG5/Ks/Q1xPG9jzviYEuZydevXIkgF',
                    ],
                ],
                [
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源目录管理账号ID或成员ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1394339739****',
                    ],
                ],
                [
                    'name' => 'ResourceGroupIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '资源组ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源组ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'rg-acfmzawhxxc****',
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ListMultiAccountResourceGroupsResponseDTO',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '下一个查询开始的Token。',
                                'type' => 'string',
                                'example' => 'AAAAAU5VsT9R1adMTuz9GzginZ3Y+7Y/5JATS+6q5GK9kT75',
                            ],
                            'ResourceGroups' => [
                                'description' => '资源组列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '资源组。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DisplayName' => [
                                            'description' => '资源组显示名称。',
                                            'type' => 'string',
                                            'example' => 'group1',
                                        ],
                                        'Status' => [
                                            'description' => '资源组状态。'."\n"
                                                ."\n"
                                                .'- Creating：创建中。'."\n"
                                                .'- OK：创建成功。'."\n"
                                                .'- PendingDelete：等待删除。',
                                            'type' => 'string',
                                            'example' => 'OK',
                                        ],
                                        'AccountId' => [
                                            'description' => '资源目录管理账号ID或成员ID。',
                                            'type' => 'string',
                                            'example' => '1394339739****',
                                        ],
                                        'Name' => [
                                            'description' => '资源组唯一标识。',
                                            'type' => 'string',
                                            'example' => 'my-project',
                                        ],
                                        'CreateDate' => [
                                            'description' => '资源组的创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-06-30T09:20:08Z',
                                        ],
                                        'Id' => [
                                            'description' => '资源组ID。',
                                            'type' => 'string',
                                            'example' => 'rg-acfmzawhxxc****',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FF0A66E-781F-51EE-9531-928F197558F2',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.MaxResults',
                        'errorMessage' => 'The specified parameter MaxResults is not valid.',
                    ],
                    [
                        'errorCode' => 'MultiAccountServiceNotEnabled',
                        'errorMessage' => 'Multi account ResourceCenter service is not enabled.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'NotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled.',
                    ],
                    [
                        'errorCode' => 'NotExists.ResourceGroup',
                        'errorMessage' => 'The specified ResourceGroup does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'NoPermission.ResourceDirectory.MemberAccount',
                        'errorMessage' => 'ResourceDirectory Member Account is not authorized to perform this operation.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.AccountId',
                        'errorMessage' => 'The specified parameter AccountId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ResourceGroupId',
                        'errorMessage' => 'The specified parameter ResourceGroupId is not valid.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"AAAAAU5VsT9R1adMTuz9GzginZ3Y+7Y/5JATS+6q5GK9kT75\\",\\n  \\"ResourceGroups\\": [\\n    {\\n      \\"DisplayName\\": \\"group1\\",\\n      \\"Status\\": \\"OK\\",\\n      \\"AccountId\\": \\"1394339739****\\",\\n      \\"Name\\": \\"my-project\\",\\n      \\"CreateDate\\": \\"2021-06-30T09:20:08Z\\",\\n      \\"Id\\": \\"rg-acfmzawhxxc****\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"0FF0A66E-781F-51EE-9531-928F197558F2\\"\\n}","type":"json"}]',
            'title' => '查询多账号资源组',
        ],
        'ListMultiAccountTagKeys' => [
            'summary' => '查询资源目录管理账号或成员中的标签键。',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'Scope',
                    'in' => 'query',
                    'schema' => [
                        'description' => '搜索的账号范围。取值： '."\n"
                            .'- 资源目录ID，表示搜索管理账号和所有成员中的资源。更多信息，请参见[GetResourceDirectory](~~159995~~)。'."\n"
                            .'- Root资源夹ID，表示搜索Root资源夹及子资源夹下的所有成员中的资源。更多信息，请参见[ListFoldersForParent](~~159997~~)。'."\n"
                            .'- 资源夹ID，表示搜索指定资源夹下所有成员中的资源。更多信息，请参见[ListFoldersForParent](~~159997~~)。'."\n"
                            .'- 成员ID，表示搜索指定成员中的资源。更多信息，请参见[ListAccounts](~~160016~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rd-r4****'."\n",
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的最大数据条数。'."\n"
                            ."\n"
                            .'取值范围：1~100。'."\n"
                            ."\n"
                            .'默认值：20。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询返回结果下一页的令牌。'."\n"
                            ."\n"
                            .'当返回结果数据总条数超过`MaxResults`限制，则数据会被截断，您可以使用`NextToken`查询下一页数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****',
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签键。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_key',
                    ],
                ],
                [
                    'name' => 'MatchType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '',
                        'description' => '匹配方式。取值：'."\n"
                            ."\n"
                            .'- Equals：相等匹配。'."\n"
                            .'- Prefix：前缀匹配。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Equals',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ListMultiAccountTagKeysResponseDTO',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '下一个查询开始的Token。',
                                'type' => 'string',
                                'example' => 'AAAAARfZmVDe9NvRXloR5+8CK9nNJufMdRA7W1miLC1P****',
                            ],
                            'TagKeys' => [
                                'description' => '标签列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'example' => 'test_key',
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'FA6086F9-6363-51A5-A507-88E3201EBCCB',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.MaxResults',
                        'errorMessage' => 'The specified parameter MaxResults is not valid.',
                    ],
                    [
                        'errorCode' => 'MultiAccountServiceNotEnabled',
                        'errorMessage' => 'Multi account ResourceCenter service is not enabled.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'NotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled.',
                    ],
                    [
                        'errorCode' => 'NotExists.ResourceDirectory.FolderId',
                        'errorMessage' => 'The specified folder does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'NoPermission.ResourceDirectory.MemberAccount',
                        'errorMessage' => 'ResourceDirectory Member Account is not authorized to perform this operation.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Scope',
                        'errorMessage' => 'The Scope is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.MatchType',
                        'errorMessage' => 'The specified parameter MatchType is not valid.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"AAAAARfZmVDe9NvRXloR5+8CK9nNJufMdRA7W1miLC1P****\\",\\n  \\"TagKeys\\": [\\n    \\"test_key\\"\\n  ],\\n  \\"RequestId\\": \\"FA6086F9-6363-51A5-A507-88E3201EBCCB\\"\\n}","type":"json"}]',
            'title' => '查询多账号标签键',
        ],
        'ListMultiAccountTagValues' => [
            'summary' => '查询资源目录管理账号或成员中的标签值。',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'Scope',
                    'in' => 'query',
                    'schema' => [
                        'description' => '搜索的账号范围。取值： '."\n"
                            .'- 资源目录ID，表示搜索管理账号和所有成员中的资源。更多信息，请参见[GetResourceDirectory](~~159995~~)。'."\n"
                            .'- Root资源夹ID，表示搜索Root资源夹及子资源夹下的所有成员中的资源。更多信息，请参见[ListFoldersForParent](~~159997~~)。'."\n"
                            .'- 资源夹ID，表示搜索指定资源夹下所有成员中的资源。更多信息，请参见[ListFoldersForParent](~~159997~~)。'."\n"
                            .'- 成员ID，表示搜索指定成员中的资源。更多信息，请参见[ListAccounts](~~160016~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rd-r4****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的最大数据条数。'."\n"
                            ."\n"
                            .'取值范围：1~100。'."\n"
                            ."\n"
                            .'默认值：20。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询返回结果下一页的令牌。'."\n"
                            ."\n"
                            .'当返回结果数据总条数超过`MaxResults`限制，则数据会被截断，您可以使用`NextToken`查询下一页数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****',
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签键。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_key',
                    ],
                ],
                [
                    'name' => 'TagValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_value',
                    ],
                ],
                [
                    'name' => 'MatchType',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'EQUALS: 匹配 (match), TERMS: 术语匹配 (term/terms), PREFIX: 前缀匹配, NOT_EQUALS: 不等于, CONTAINS: 包含, RANGE: 范围匹配, GREATER_THAN: 大于, GREATER_THAN_OR_EQUAL_TO: 大于等于, LESS_THAN: 小于, LESS_THAN_OR_EQUAL_TO: 小于等于, EXISTS: 存在, NOT_EXISTS: 不存在, INVALID: 无效类型, NOT_CONTAINS: 不包含',
                        'description' => '匹配方式。取值：'."\n"
                            ."\n"
                            .'- Equals：相等匹配。'."\n"
                            .'- Prefix：前缀匹配。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Equals',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ListMultiAccountTagValuesResponseDTO',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '下一页查询开始的Token。',
                                'type' => 'string',
                                'example' => 'eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****',
                            ],
                            'TagValues' => [
                                'description' => '标签值列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'example' => 'test_value',
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '36A3D9BE-B607-5993-B546-7E19EF65DC00',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.MaxResults',
                        'errorMessage' => 'The specified parameter MaxResults is not valid.',
                    ],
                    [
                        'errorCode' => 'MultiAccountServiceNotEnabled',
                        'errorMessage' => 'Multi account ResourceCenter service is not enabled.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'NotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled.',
                    ],
                    [
                        'errorCode' => 'NotExists.ResourceDirectory.FolderId',
                        'errorMessage' => 'The specified folder does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'NoPermission.ResourceDirectory.MemberAccount',
                        'errorMessage' => 'ResourceDirectory Member Account is not authorized to perform this operation.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Scope',
                        'errorMessage' => 'The Scope is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.MatchType',
                        'errorMessage' => 'The specified parameter MatchType is not valid.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****\\",\\n  \\"TagValues\\": [\\n    \\"test_value\\"\\n  ],\\n  \\"RequestId\\": \\"36A3D9BE-B607-5993-B546-7E19EF65DC00\\"\\n}","type":"json"}]',
            'title' => '查询多账号标签值',
        ],
        'ListExampleQueries' => [
            'summary' => '列出所有的系统查询模板。',
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
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的最大数据条数。'."\n"
                            ."\n"
                            .'取值范围：1~50。'."\n"
                            ."\n"
                            .'默认值：50。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一页查询开始的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****	'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D696E6EF-3A6D-5770-801E-4982081FE4D0',
                            ],
                            'MaxResults' => [
                                'description' => '每页的最大数据条数。',
                                'type' => 'string',
                                'example' => '10',
                            ],
                            'NextToken' => [
                                'description' => '下一页查询开始的Token。',
                                'type' => 'string',
                                'example' => 'eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****',
                            ],
                            'ExampleQueries' => [
                                'description' => '系统模板信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '系统模板信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'QueryId' => [
                                            'description' => '模板ID。',
                                            'type' => 'string',
                                            'example' => 'sq-0PfKy****',
                                        ],
                                        'Name' => [
                                            'description' => '模板名称。',
                                            'type' => 'string',
                                            'example' => '列出所有阿里云资源',
                                        ],
                                        'Description' => [
                                            'description' => '模板描述。',
                                            'type' => 'string',
                                            'example' => '返回所有有权限的资源，并按照资源类型和资源ID排列。',
                                        ],
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D696E6EF-3A6D-5770-801E-4982081FE4D0\\",\\n  \\"MaxResults\\": \\"10\\",\\n  \\"NextToken\\": \\"eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****\\",\\n  \\"ExampleQueries\\": [\\n    {\\n      \\"QueryId\\": \\"sq-0PfKy****\\",\\n      \\"Name\\": \\"列出所有阿里云资源\\",\\n      \\"Description\\": \\"返回所有有权限的资源，并按照资源类型和资源ID排列。\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列出所有的系统查询模板',
        ],
        'GetExampleQuery' => [
            'summary' => '获取系统查询模板。',
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
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'QueryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板ID。'."\n"
                            .'> 您可以调用[ListExampleQueries](~~ListExampleQueries~~)获取模板ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sq-0PfKy****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '36A3D9BE-B607-5993-B546-7E19EF65DC00',
                            ],
                            'ExampleQuery' => [
                                'description' => '系统模板信息。',
                                'type' => 'object',
                                'properties' => [
                                    'QueryId' => [
                                        'description' => '模板ID。',
                                        'type' => 'string',
                                        'example' => 'sq-0PfKy****',
                                    ],
                                    'Expression' => [
                                        'description' => '模板表达式。',
                                        'type' => 'string',
                                        'example' => 'SELECT'."\n"
                                            .'  resource_id,'."\n"
                                            .'  resource_name,'."\n"
                                            .'  region_id,'."\n"
                                            .'  zone_id,'."\n"
                                            .'  resource_type,'."\n"
                                            .'  account_id,'."\n"
                                            .'  create_time,'."\n"
                                            .'  resource_group_id,'."\n"
                                            .'  tags,'."\n"
                                            .'  ip_addresses,'."\n"
                                            .'  vpc_id,'."\n"
                                            .'  v_switch_id'."\n"
                                            .'FROM'."\n"
                                            .'  resources'."\n"
                                            .'ORDER BY'."\n"
                                            .'  resource_type,'."\n"
                                            .'  resource_id'."\n"
                                            .'LIMIT'."\n"
                                            .'  1000 OFFSET 0;',
                                    ],
                                    'Name' => [
                                        'description' => '模板名称。',
                                        'type' => 'string',
                                        'example' => '列出所有阿里云资源',
                                    ],
                                    'Description' => [
                                        'description' => '模板描述。',
                                        'type' => 'string',
                                        'example' => '返回所有有权限的资源，并按照资源类型和资源ID排列。',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                409 => [
                    [
                        'errorCode' => 'NotExists.QueryId',
                        'errorMessage' => 'The QueryId does not exist.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"36A3D9BE-B607-5993-B546-7E19EF65DC00\\",\\n  \\"ExampleQuery\\": {\\n    \\"QueryId\\": \\"sq-0PfKy****\\",\\n    \\"Expression\\": \\"SELECT\\\\n  resource_id,\\\\n  resource_name,\\\\n  region_id,\\\\n  zone_id,\\\\n  resource_type,\\\\n  account_id,\\\\n  create_time,\\\\n  resource_group_id,\\\\n  tags,\\\\n  ip_addresses,\\\\n  vpc_id,\\\\n  v_switch_id\\\\nFROM\\\\n  resources\\\\nORDER BY\\\\n  resource_type,\\\\n  resource_id\\\\nLIMIT\\\\n  1000 OFFSET 0;\\",\\n    \\"Name\\": \\"列出所有阿里云资源\\",\\n    \\"Description\\": \\"返回所有有权限的资源，并按照资源类型和资源ID排列。\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取系统查询模板',
        ],
        'CreateSavedQuery' => [
            'summary' => '创建自定义查询模板。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板名称。'."\n"
                            ."\n"
                            .'- 长度范围：1~64个字符或汉字。'."\n"
                            .'- 格式：允许输入汉字、英文字母、数字、下划线（_）和短划线（-）。'."\n"
                            .'- 模板名称必须唯一。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '查询我的所有资源。',
                    ],
                ],
                [
                    'name' => 'Expression',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板表达式。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'SELECT * FROM resources;',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板描述。'."\n"
                            ."\n"
                            .'长度范围：1~256个字符或汉字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '查询所有资源。',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'EFA806B9-7F36-55AB-8B7A-D680C2C5EE57',
                            ],
                            'QueryId' => [
                                'description' => '模板ID。',
                                'type' => 'string',
                                'example' => 'cq-GeAck****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'LengthExceedLimit.Description',
                        'errorMessage' => 'The length of parameter Description exceed limit.',
                    ],
                    [
                        'errorCode' => 'LengthExceedLimit.Expression',
                        'errorMessage' => 'The length of parameter Expression exceed limit.',
                    ],
                    [
                        'errorCode' => 'LengthExceedLimit.Name',
                        'errorMessage' => 'The length of parameter Name exceed limit.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Name',
                        'errorMessage' => 'The specified parameter Name is not valid.',
                    ],
                    [
                        'errorCode' => 'AlreadyExists.Name',
                        'errorMessage' => 'The Query Template Name already exists.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EFA806B9-7F36-55AB-8B7A-D680C2C5EE57\\",\\n  \\"QueryId\\": \\"cq-GeAck****\\"\\n}","type":"json"}]',
            'title' => '创建自定义查询模板',
        ],
        'GetSavedQuery' => [
            'summary' => '获取自定义查询模板。',
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
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'QueryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板ID。'."\n"
                            .'> 您可以调用[ListSavedQueries](~~ListSavedQueries~~)获取查询模板ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cq-GeAck****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6D98D9B0-318D-56A4-910C-93B5F945AF2B',
                            ],
                            'SavedQuery' => [
                                'description' => '模板信息。',
                                'type' => 'object',
                                'properties' => [
                                    'QueryId' => [
                                        'description' => '模板ID。',
                                        'type' => 'string',
                                        'example' => 'cq-GeAck****',
                                    ],
                                    'Expression' => [
                                        'description' => '模板表达式。',
                                        'type' => 'string',
                                        'example' => 'SELECT * FROM resources;',
                                    ],
                                    'Name' => [
                                        'description' => '模板名称。',
                                        'type' => 'string',
                                        'example' => '查询我的所有资源。',
                                    ],
                                    'Description' => [
                                        'description' => '模板描述。',
                                        'type' => 'string',
                                        'example' => '查询我的所有资源，返回所有的列。',
                                    ],
                                    'CreateTime' => [
                                        'description' => '创建时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2023-10-30T01:43:16Z',
                                    ],
                                    'UpdateTime' => [
                                        'description' => '更新时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2023-10-30T01:43:16Z',
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
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'NotExists.QueryId',
                        'errorMessage' => 'The QueryId does not exist.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6D98D9B0-318D-56A4-910C-93B5F945AF2B\\",\\n  \\"SavedQuery\\": {\\n    \\"QueryId\\": \\"cq-GeAck****\\",\\n    \\"Expression\\": \\"SELECT * FROM resources;\\",\\n    \\"Name\\": \\"查询我的所有资源。\\",\\n    \\"Description\\": \\"查询我的所有资源，返回所有的列。\\",\\n    \\"CreateTime\\": \\"2023-10-30T01:43:16Z\\",\\n    \\"UpdateTime\\": \\"2023-10-30T01:43:16Z\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取自定义查询模板',
        ],
        'ListSavedQueries' => [
            'summary' => '列出所有的自定义查询模板。',
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
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的最大数据条数。'."\n"
                            ."\n"
                            .'取值范围：1~50。'."\n"
                            ."\n"
                            .'默认值：50。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一个查询开始的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D696E6EF-3A6D-5770-801E-4982081FE4D0',
                            ],
                            'MaxResults' => [
                                'description' => '每页的最大数据条数。',
                                'type' => 'string',
                                'example' => '10',
                            ],
                            'NextToken' => [
                                'description' => '下一个查询开始的Token。',
                                'type' => 'string',
                                'example' => 'AAAAARfZmVDe9NvRXloR5+8CK9nNJufMdRA7W1miLC1P****',
                            ],
                            'SavedQueries' => [
                                'description' => '自定义查询模板信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '自定义查询模板信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'QueryId' => [
                                            'description' => '模板ID。',
                                            'type' => 'string',
                                            'example' => 'cq-GeAck****',
                                        ],
                                        'Name' => [
                                            'description' => '模板名称。',
                                            'type' => 'string',
                                            'example' => '查询我的所有资源。',
                                        ],
                                        'Description' => [
                                            'description' => '模板描述。',
                                            'type' => 'string',
                                            'example' => '查询我的所有资源，返回所有的列。',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间（UTC时间）。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '2022-01-13T05:50:35Z',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '更新时间（UTC时间）。',
                                            'type' => 'string',
                                            'example' => '2023-03-14 10:27:07',
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
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D696E6EF-3A6D-5770-801E-4982081FE4D0\\",\\n  \\"MaxResults\\": \\"10\\",\\n  \\"NextToken\\": \\"AAAAARfZmVDe9NvRXloR5+8CK9nNJufMdRA7W1miLC1P****\\",\\n  \\"SavedQueries\\": [\\n    {\\n      \\"QueryId\\": \\"cq-GeAck****\\",\\n      \\"Name\\": \\"查询我的所有资源。\\",\\n      \\"Description\\": \\"查询我的所有资源，返回所有的列。\\",\\n      \\"CreateTime\\": \\"2022-01-13T05:50:35Z\\",\\n      \\"UpdateTime\\": \\"2023-03-14 10:27:07\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列出所有的自定义查询模板',
        ],
        'UpdateSavedQuery' => [
            'summary' => '更新自定义查询模板。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板描述。'."\n"
                            ."\n"
                            .'长度范围：1~256个字符或汉字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '查询我的所有资源，返回所有的列。',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板名称。'."\n"
                            ."\n"
                            .'- 长度范围：1~64个字符或汉字。'."\n"
                            .'- 格式：允许输入汉字、英文字母、数字、下划线（_）和短划线（-）。'."\n"
                            .'- 模板名称必须唯一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '查询我的所有资源。',
                    ],
                ],
                [
                    'name' => 'Expression',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板表达式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SELECT * FROM resources;',
                    ],
                ],
                [
                    'name' => 'QueryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cq-GeAck****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D696E6EF-3A6D-5770-801E-4982081FE4D0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'NotExists.QueryId',
                        'errorMessage' => 'The QueryId does not exist.',
                    ],
                    [
                        'errorCode' => 'LengthExceedLimit.Description',
                        'errorMessage' => 'The length of parameter Description exceed limit.',
                    ],
                    [
                        'errorCode' => 'LengthExceedLimit.Expression',
                        'errorMessage' => 'The length of parameter Expression exceed limit.',
                    ],
                    [
                        'errorCode' => 'LengthExceedLimit.Name',
                        'errorMessage' => 'The length of parameter Name exceed limit.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Name',
                        'errorMessage' => 'The specified parameter Name is not valid.',
                    ],
                    [
                        'errorCode' => 'AlreadyExists.Name',
                        'errorMessage' => 'The Query Template Name already exists.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D696E6EF-3A6D-5770-801E-4982081FE4D0\\"\\n}","type":"json"}]',
            'title' => '更新自定义查询模板',
        ],
        'DeleteSavedQuery' => [
            'summary' => '删除自定义查询模板。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'QueryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板ID。'."\n"
                            ."\n"
                            .'您可以调用[ListSavedQueries](~~ListSavedQueries~~)获取模板ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sq-GeAck****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D170D58E-6256-5344-8F5E-922EC9ECB7EA',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'NotExists.QueryId',
                        'errorMessage' => 'The QueryId does not exist.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D170D58E-6256-5344-8F5E-922EC9ECB7EA\\"\\n}","type":"json"}]',
            'title' => '删除自定义查询模板',
        ],
        'ExecuteSQLQuery' => [
            'summary' => '使用SQL查询当前账号下有权限访问的资源。',
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
            ],
            'parameters' => [
                [
                    'name' => 'Expression',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待执行SQL语句。'."\n"
                            ."\n"
                            .'待执行SQL语句长度小于2000个字符。'."\n"
                            ."\n"
                            .'关于SQL语法的更多信息，请参见[SQL基本语法](~~2539395~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'SELECT * FROM resources LIMIT 100;',
                    ],
                ],
                [
                    'name' => 'Scope',
                    'in' => 'query',
                    'schema' => [
                        'description' => '搜索的范围。'."\n"
                            ."\n"
                            .'取值为资源组ID，表示搜索资源组中的资源。'."\n"
                            ."\n"
                            .'关于如何获取资源组ID，请参见[ListResourceGroups](~~158855~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmzawhxxc****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D696E6EF-3A6D-5770-801E-4982081FE4D0',
                            ],
                            'Columns' => [
                                'description' => '列信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '列信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => '列名。',
                                            'type' => 'string',
                                            'example' => 'resource_id',
                                        ],
                                        'Type' => [
                                            'description' => '列类型。',
                                            'type' => 'string',
                                            'example' => 'varchar',
                                        ],
                                    ],
                                ],
                            ],
                            'Rows' => [
                                'description' => '搜索结果数组。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '结果行信息。',
                                    'type' => 'any',
                                    'example' => '['."\n"
                                        .'      "vsw-xxx"  '."\n"
                                        .']',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                409 => [
                    [
                        'errorCode' => 'ExceedLimit.ExecuteTime',
                        'errorMessage' => 'The execution time has exceeded the limit. Please check for complex queries or large data volume, and optimize accordingly.',
                    ],
                    [
                        'errorCode' => 'SQLExecuteError',
                        'errorMessage' => 'Failed to execute the SQL statement.',
                    ],
                    [
                        'errorCode' => 'InvalidSearch.SQL',
                        'errorMessage' => 'Error: %s',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Scope',
                        'errorMessage' => 'The Scope is invalid.',
                    ],
                    [
                        'errorCode' => 'LengthExceedLimit.Expression',
                        'errorMessage' => 'The length of parameter Expression exceed limit.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D696E6EF-3A6D-5770-801E-4982081FE4D0\\",\\n  \\"Columns\\": [\\n    {\\n      \\"Name\\": \\"resource_id\\",\\n      \\"Type\\": \\"varchar\\"\\n    }\\n  ],\\n  \\"Rows\\": [\\n    \\"[\\\\n      \\\\\\"vsw-xxx\\\\\\"  \\\\n]\\"\\n  ]\\n}","type":"json"}]',
            'title' => '使用SQL查询当前账号的资源',
        ],
        'ExecuteMultiAccountSQLQuery' => [
            'summary' => '使用SQL查询跨账号的资源。',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'Expression',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待执行SQL语句。'."\n"
                            ."\n"
                            .'待执行SQL语句长度小于2000个字符。'."\n"
                            ."\n"
                            .'关于SQL语法的更多信息，请参见[SQL基本语法](~~2539395~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'SELECT * FROM resources LIMIT 100;',
                    ],
                ],
                [
                    'name' => 'Scope',
                    'in' => 'query',
                    'schema' => [
                        'description' => '搜索的账号范围。取值： '."\n"
                            .'- 资源目录ID，表示搜索管理账号和所有成员中的资源。'."\n"
                            .'- Root资源夹ID，表示搜索Root资源夹及子资源夹下的所有成员中的资源。'."\n"
                            .'- 资源夹ID，表示搜索指定资源夹下所有成员中的资源。'."\n"
                            .'- 成员ID，表示搜索指定成员中的资源。'."\n"
                            .'- 成员ID/资源组ID，表示搜索指定成员的资源组中的资源。'."\n"
                            ."\n"
                            .'关于如何获取资源目录ID、Root资源夹ID、资源夹ID、成员ID和资源组ID，请分别参见[GetResourceDirectory](~~159995~~)、[ListFoldersForParent](~~159997~~)、[ListFoldersForParent](~~159997~~)、[ListAccounts](~~160016~~)和[ListResourceGroups](~~158855~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rd-r4****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '44C8A952-D6B0-5BC8-82D5-93BA02E26F2E',
                            ],
                            'Columns' => [
                                'description' => '列信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '列信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => '列名。',
                                            'type' => 'string',
                                            'example' => 'resource_id',
                                        ],
                                        'Type' => [
                                            'description' => '列类型。',
                                            'type' => 'string',
                                            'example' => 'varchar',
                                        ],
                                    ],
                                ],
                            ],
                            'Rows' => [
                                'description' => '搜索结果数组。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '结果行信息。',
                                    'type' => 'any',
                                    'example' => '['."\n"
                                        .'      "vsw-xxx“'."\n"
                                        .']',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'NotExists.ResourceDirectory',
                        'errorMessage' => 'The resource directory for the account is not enabled.',
                    ],
                    [
                        'errorCode' => 'NotExists.ResourceDirectory.FolderId',
                        'errorMessage' => 'The specified folder does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'ExceedLimit.ExecuteTime',
                        'errorMessage' => 'The execution time has exceeded the limit. Please check for complex queries or large data volume, and optimize accordingly.',
                    ],
                    [
                        'errorCode' => 'SQLExecuteError',
                        'errorMessage' => 'Failed to execute the SQL statement.',
                    ],
                    [
                        'errorCode' => 'InvalidSearch.SQL',
                        'errorMessage' => 'Error: %s',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Scope',
                        'errorMessage' => 'The Scope is invalid.',
                    ],
                    [
                        'errorCode' => 'ServiceNotEnabled.SpecifiedAccount',
                        'errorMessage' => 'ResourceCenter service of the specified account is not enabled.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"44C8A952-D6B0-5BC8-82D5-93BA02E26F2E\\",\\n  \\"Columns\\": [\\n    {\\n      \\"Name\\": \\"resource_id\\",\\n      \\"Type\\": \\"varchar\\"\\n    }\\n  ],\\n  \\"Rows\\": [\\n    \\"[\\\\n      \\\\\\"vsw-xxx“\\\\n]\\"\\n  ]\\n}","type":"json"}]',
            'title' => '使用SQL查询跨账号的资源',
        ],
        'CreateFilter' => [
            'summary' => '创建筛选条件。',
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
                    'name' => 'FilterName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '筛选条件名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '我的筛选条件。',
                    ],
                ],
                [
                    'name' => 'FilterConfiguration',
                    'in' => 'query',
                    'schema' => [
                        'description' => '筛选条件。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{'."\n"
                            .'  "regions": [],'."\n"
                            .'  "tagFilters": ['."\n"
                            .'    [{ "type": "notContainTagKey", "tagKey": "xxx", "tagValue": "" }],'."\n"
                            .'    [{ "tagKey": "xxx", "tagValue": "xxx" }]'."\n"
                            .'  ],'."\n"
                            .'  "resourceTypes": ['."\n"
                            .'    "ACS::ECS::AutoSnapshotPolicy"'."\n"
                            .'  ]'."\n"
                            .'}'."\n",
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
                                'example' => 'EEF1EE1F-50F6-5494-B3DA-8F597DEB31BF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                409 => [
                    [
                        'errorCode' => 'InvalidParameter.FilterConfiguration',
                        'errorMessage' => 'The specified parameter FilterConfiguration is not valid.',
                    ],
                    [
                        'errorCode' => 'AlreadyExists.FilterName',
                        'errorMessage' => 'The filter name of current user already exists.',
                    ],
                    [
                        'errorCode' => 'LengthExceedLimit.FilterConfiguration',
                        'errorMessage' => 'The length of parameter FilterConfiguration exceed limit.',
                    ],
                    [
                        'errorCode' => 'LengthExceedLimit.FilterName',
                        'errorMessage' => 'The length of parameter FilterName exceed limit.',
                    ],
                    [
                        'errorCode' => 'ExceedLimit.User.Filter',
                        'errorMessage' => 'The maximum number of Filters is exceeded.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.FilterName',
                        'errorMessage' => 'The specified parameter FilterName is not valid.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EEF1EE1F-50F6-5494-B3DA-8F597DEB31BF\\"\\n}","type":"json"}]',
            'title' => '创建筛选条件',
        ],
        'UpdateFilter' => [
            'summary' => '更新筛选条件。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'FilterName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '筛选条件名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '我的筛选条件。',
                    ],
                ],
                [
                    'name' => 'FilterConfiguration',
                    'in' => 'query',
                    'schema' => [
                        'description' => '筛选条件配置。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{'."\n"
                            .'  "regions": [],'."\n"
                            .'  "tagFilters": ['."\n"
                            .'    [{ "type": "notContainTagKey", "tagKey": "xxx", "tagValue": "" }],'."\n"
                            .'    [{ "tagKey": "xxx", "tagValue": "xxx" }]'."\n"
                            .'  ],'."\n"
                            .'  "resourceTypes": ['."\n"
                            .'    "ACS::ECS::AutoSnapshotPolicy"'."\n"
                            .'  ]'."\n"
                            .'}',
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
                                'example' => '3C5CDBF6-4DB7-53E9-ADDC-5919E3FACF6F',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                409 => [
                    [
                        'errorCode' => 'InvalidParameter.FilterConfiguration',
                        'errorMessage' => 'The specified parameter FilterConfiguration is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.FilterName',
                        'errorMessage' => 'The specified parameter FilterName is not valid.',
                    ],
                    [
                        'errorCode' => 'LengthExceedLimit.FilterConfiguration',
                        'errorMessage' => 'The length of parameter FilterConfiguration exceed limit.',
                    ],
                    [
                        'errorCode' => 'LengthExceedLimit.FilterName',
                        'errorMessage' => 'The length of parameter FilterName exceed limit.',
                    ],
                    [
                        'errorCode' => 'NotExists.FilterName',
                        'errorMessage' => 'The filter name of current user not exists.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3C5CDBF6-4DB7-53E9-ADDC-5919E3FACF6F\\"\\n}","type":"json"}]',
            'title' => '更新筛选条件',
        ],
        'ListFilters' => [
            'summary' => '获取筛选条件列表。',
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
                'operationType' => 'list',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'AA39FB9C-CB74-5E73-8DFE-3A2B096F0759',
                            ],
                            'Filters' => [
                                'description' => '筛选条件。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '筛选条件。',
                                    'type' => 'object',
                                    'properties' => [
                                        'FilterName' => [
                                            'description' => '筛选条件名称。',
                                            'type' => 'string',
                                            'example' => '我管理的设备',
                                        ],
                                        'FilterConfiguration' => [
                                            'description' => '筛选条件。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => '{'."\n"
                                                .'  "regions": [],'."\n"
                                                .'  "tagFilters": ['."\n"
                                                .'    [{ "type": "notContainTagKey", "tagKey": "xxx", "tagValue": "" }],'."\n"
                                                .'    [{ "tagKey": "xxx", "tagValue": "xxx" }]'."\n"
                                                .'  ],'."\n"
                                                .'  "resourceTypes": ['."\n"
                                                .'    "ACS::ECS::AutoSnapshotPolicy"'."\n"
                                                .'  ]'."\n"
                                                .'}',
                                        ],
                                    ],
                                ],
                            ],
                            'DefaultFilterName' => [
                                'description' => '默认筛选条件名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '我的筛选条件',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AA39FB9C-CB74-5E73-8DFE-3A2B096F0759\\",\\n  \\"Filters\\": [\\n    {\\n      \\"FilterName\\": \\"我管理的设备\\",\\n      \\"FilterConfiguration\\": \\"{\\\\n  \\\\\\"regions\\\\\\": [],\\\\n  \\\\\\"tagFilters\\\\\\": [\\\\n    [{ \\\\\\"type\\\\\\": \\\\\\"notContainTagKey\\\\\\", \\\\\\"tagKey\\\\\\": \\\\\\"xxx\\\\\\", \\\\\\"tagValue\\\\\\": \\\\\\"\\\\\\" }],\\\\n    [{ \\\\\\"tagKey\\\\\\": \\\\\\"xxx\\\\\\", \\\\\\"tagValue\\\\\\": \\\\\\"xxx\\\\\\" }]\\\\n  ],\\\\n  \\\\\\"resourceTypes\\\\\\": [\\\\n    \\\\\\"ACS::ECS::AutoSnapshotPolicy\\\\\\"\\\\n  ]\\\\n}\\"\\n    }\\n  ],\\n  \\"DefaultFilterName\\": \\"我的筛选条件\\"\\n}","type":"json"}]',
            'title' => '获取筛选条件列表',
        ],
        'DeleteFilter' => [
            'summary' => '删除筛选条件。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'FilterName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '筛选条件名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '我的筛选条件',
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
                                'example' => 'A4A63E3C-89EC-51F9-9934-C9AF1BCBAAA5',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                409 => [
                    [
                        'errorCode' => 'NotExists.FilterName',
                        'errorMessage' => 'The filter name of current user not exists.',
                    ],
                    [
                        'errorCode' => 'LengthExceedLimit.FilterName',
                        'errorMessage' => 'The length of parameter FilterName exceed limit.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A4A63E3C-89EC-51F9-9934-C9AF1BCBAAA5\\"\\n}","type":"json"}]',
            'title' => '删除筛选条件',
        ],
        'AssociateDefaultFilter' => [
            'summary' => '设置默认筛选条件。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'FilterName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '筛选条件名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '所有ECS实例资源',
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
                                'example' => '54673B22-2001-556A-B394-B8697AA9670B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                409 => [
                    [
                        'errorCode' => 'NotExists.FilterName',
                        'errorMessage' => 'The filter name of current user not exists.',
                    ],
                    [
                        'errorCode' => 'LengthExceedLimit.FilterName',
                        'errorMessage' => 'The length of parameter FilterName exceed limit.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"54673B22-2001-556A-B394-B8697AA9670B\\"\\n}","type":"json"}]',
            'title' => '设置默认筛选条件',
        ],
        'DisassociateDefaultFilter' => [
            'summary' => '取消默认筛选条件。',
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
                'operationType' => 'update',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BCAB07BA-82FA-5DC0-9322-FB7ED726481D',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'NotExists.DefaultFilter',
                        'errorMessage' => 'The default filter of current user not exists.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BCAB07BA-82FA-5DC0-9322-FB7ED726481D\\"\\n}","type":"json"}]',
            'title' => '取消默认筛选条件',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'resourcecenter.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'resourcecenter-intl.aliyuncs.com',
        ],
    ],
];
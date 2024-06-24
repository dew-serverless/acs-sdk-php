<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'ResourceCenter',
    'version' => '2022-12-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 180850,
      'title' => '管理资源中心',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'EnableResourceCenter',
        1 => 'GetResourceCenterServiceStatus',
        2 => 'DisableResourceCenter',
      ),
    ),
    1 => 
    array (
      'id' => 180848,
      'title' => '资源搜索',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SearchResources',
        1 => 'GetResourceConfiguration',
        2 => 'ListTagValues',
        3 => 'ListTagKeys',
        4 => 'ListResourceTypes',
        5 => 'GetResourceCounts',
      ),
    ),
    2 => 
    array (
      'id' => 180846,
      'title' => '跨账号资源搜索',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'EnableMultiAccountResourceCenter',
        1 => 'DisableMultiAccountResourceCenter',
        2 => 'GetMultiAccountResourceCenterServiceStatus',
        3 => 'SearchMultiAccountResources',
        4 => 'GetMultiAccountResourceConfiguration',
        5 => 'ListMultiAccountResourceGroups',
        6 => 'ListMultiAccountTagKeys',
        7 => 'ListMultiAccountTagValues',
      ),
    ),
    3 => 
    array (
      'id' => 186960,
      'title' => '高级搜索',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListExampleQueries',
        1 => 'GetExampleQuery',
        2 => 'CreateSavedQuery',
        3 => 'GetSavedQuery',
        4 => 'ListSavedQueries',
        5 => 'UpdateSavedQuery',
        6 => 'DeleteSavedQuery',
        7 => 'ExecuteSQLQuery',
        8 => 'ExecuteMultiAccountSQLQuery',
      ),
    ),
    4 => 
    array (
      'id' => 188209,
      'title' => '筛选条件',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateFilter',
        1 => 'UpdateFilter',
        2 => 'ListFilters',
        3 => 'DeleteFilter',
        4 => 'AssociateDefaultFilter',
        5 => 'DisassociateDefaultFilter',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
    ),
  ),
  'apis' => 
  array (
    'EnableResourceCenter' => 
    array (
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '服务开通状态。取值：

- Pending：开启中。
- Enabled：已开启。',
                'type' => 'string',
                'example' => 'Pending',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '45357BEF-AB50-5E4D-B05D-5A882A4BE924',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission.ServiceLinkedRole',
            'errorMessage' => 'The current user does not have permission to create servicelinkedrole. Please contact the Alibaba Cloud account or administrator to authorize custom policy: Service Name: rmc.resourcemanager.aliyuncs.com, Action: ram:CreateServiceLinkedRole.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotSupport.Account.Site',
            'errorMessage' => 'The caller is not a current site account, which is not supported.',
          ),
          1 => 
          array (
            'errorCode' => 'Conflict.ServiceStatus',
            'errorMessage' => 'The service status conflict occurred due to frequent service enabled and disabled.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"Pending\\",\\n  \\"RequestId\\": \\"45357BEF-AB50-5E4D-B05D-5A882A4BE924\\"\\n}","type":"json"}]',
      'title' => '开通资源中心',
      'summary' => '开通资源中心。',
    ),
    'GetResourceCenterServiceStatus' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'AD5F848D-CCDC-5464-93E1-4BA50A4826DD',
              ),
              'ServiceStatus' => 
              array (
                'description' => '服务状态。取值：

- Enabled：已开通。

- Disabled：已关闭。',
                'type' => 'string',
                'example' => 'Enabled',
              ),
              'InitialStatus' => 
              array (
                'description' => '初始化状态。取值：

- Pending：准备中。

- Finished：就绪。',
                'type' => 'string',
                'example' => 'Pending',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AD5F848D-CCDC-5464-93E1-4BA50A4826DD\\",\\n  \\"ServiceStatus\\": \\"Enabled\\",\\n  \\"InitialStatus\\": \\"Pending\\"\\n}","type":"json"}]',
      'title' => '查询资源中心服务状态',
      'summary' => '查询资源中心服务状态。',
    ),
    'DisableResourceCenter' => 
    array (
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D170D58E-6256-5344-8F5E-922EC9ECB7EA',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'ServiceNotEnabled',
            'errorMessage' => 'ResourceCenter Service is not enabled.',
          ),
          2 => 
          array (
            'errorCode' => 'DiscoveryInProgress',
            'errorMessage' => 'A discovery task is in progress. Please wait for a while and check the result again.',
          ),
          3 => 
          array (
            'errorCode' => 'DependencyViolation.ResourceGroup',
            'errorMessage' => 'Unable to disable resource center while associate transfer is enabled.',
          ),
          4 => 
          array (
            'errorCode' => 'DependencyViolation.Config',
            'errorMessage' => 'ResourceCenter cannot be disabled, because the Config has been enabled.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotExists.Account',
            'errorMessage' => 'The specified account does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'DisableConflict.MultiAccount',
            'errorMessage' => 'ResourceDirectory management account or delegated administrator account has enabled multi account ResourceCenter, you cannot disable ResourceCenter.',
          ),
          1 => 
          array (
            'errorCode' => 'DisableConflict.DeliveryChannel',
            'errorMessage' => 'ResourceCenter cannot be disabled because there are active delivery channels.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D170D58E-6256-5344-8F5E-922EC9ECB7EA\\"\\n}","type":"json"}]',
      'title' => '关闭资源中心',
      'summary' => '关闭资源中心。',
    ),
    'SearchResources' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询返回结果下一页的令牌。

当返回结果数据总条数超过`MaxResults`限制，则数据会被截断，您可以使用`NextToken`查询下一页数据。',
            'type' => 'string',
            'required' => false,
            'example' => 'eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的最大数据条数。

取值范围：1~100。

默认值：20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '500',
            'minimum' => '1',
            'example' => '10',
            'default' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '过滤条件。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '过滤条件。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '过滤条件键。取值见下方`支持的过滤参数`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'RegionId',
                ),
                'Value' => 
                array (
                  'description' => '过滤条件值。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '过滤条件值。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '过滤条件值。',
                  ),
                  'required' => false,
                  'maxItems' => 200,
                ),
                'MatchType' => 
                array (
                  'description' => '匹配方式。

取值：Equals，表示相等匹配。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Equals',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmzawhxxc****',
          ),
        ),
        4 => 
        array (
          'name' => 'SortCriterion',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '排序参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Key' => 
              array (
                'description' => '排序条件。

取值：CreateTime，表示按资源创建时间排序。',
                'type' => 'string',
                'required' => false,
                'example' => 'CreateTime',
              ),
              'Order' => 
              array (
                'description' => '排序顺序。取值：

- ASC（默认值）：升序。
- DESC：降序。',
                'type' => 'string',
                'required' => false,
                'example' => 'ASC',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '查询返回结果下一页的令牌。',
                'type' => 'string',
                'example' => 'eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****	
',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D696E6EF-3A6D-5770-801E-4982081FE4D0',
              ),
              'MaxResults' => 
              array (
                'description' => '每页的最大数据条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Filters' => 
              array (
                'description' => '过滤条件。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '过滤条件。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '过滤条件键。',
                      'type' => 'string',
                      'example' => 'RegionId',
                    ),
                    'MatchType' => 
                    array (
                      'description' => '匹配方式。',
                      'type' => 'string',
                      'example' => 'Equals',
                    ),
                    'Values' => 
                    array (
                      'description' => '过滤条件值。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '过滤条件值。',
                        'type' => 'string',
                        'example' => 'cn-hangzhou',
                      ),
                    ),
                  ),
                ),
              ),
              'Resources' => 
              array (
                'description' => '资源信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ResourceType' => 
                    array (
                      'description' => '资源类型。',
                      'type' => 'string',
                      'example' => 'ACS::VPC::RouteTable',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '资源的创建时间。

> 资源是否返回该参数，由所属的云服务决定。',
                      'type' => 'string',
                      'example' => '2021-06-30T09:20:08Z',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-acfmzawhxxc****',
                    ),
                    'ZoneId' => 
                    array (
                      'description' => '可用区ID。

> 资源是否返回该参数，由所属的云服务决定。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-k',
                    ),
                    'AccountId' => 
                    array (
                      'description' => '阿里云账号ID。',
                      'type' => 'string',
                      'example' => '151266687691****',
                    ),
                    'ResourceId' => 
                    array (
                      'description' => '资源ID。',
                      'type' => 'string',
                      'example' => 'vtb-bp11lbh452fr8940s****',
                    ),
                    'ResourceName' => 
                    array (
                      'description' => '资源名称。',
                      'type' => 'string',
                      'example' => 'group1',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'Tags' => 
                    array (
                      'description' => '标签。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '标签键。',
                            'type' => 'string',
                            'example' => 'test_key',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签值。',
                            'type' => 'string',
                            'example' => 'test_value',
                          ),
                        ),
                      ),
                    ),
                    'IpAddresses' => 
                    array (
                      'description' => 'IP地址。

> 资源是否返回该参数，由所属的云服务决定。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'IP地址。

> 资源是否返回该参数，由所属的云服务决定。',
                        'type' => 'string',
                        'example' => '192.168.1.2',
                      ),
                    ),
                    'IpAddressAttributes' => 
                    array (
                      'description' => 'IP地址属性。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'IP地址属性。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'IpAddress' => 
                          array (
                            'description' => 'IP地址。',
                            'type' => 'string',
                            'example' => '192.168.1.2',
                          ),
                          'NetworkType' => 
                          array (
                            'description' => '网络类型，取值：
- **Public**：公网。
- **Private**：私网。',
                            'type' => 'string',
                            'example' => 'Public',
                          ),
                          'Version' => 
                          array (
                            'description' => 'IP地址的版本。',
                            'type' => 'string',
                            'example' => 'Ipv4',
                          ),
                        ),
                      ),
                    ),
                    'ExpireTime' => 
                    array (
                      'description' => '资源过期时间。',
                      'type' => 'string',
                      'example' => '2021-07-30T09:20:08Z',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.MaxResults',
            'errorMessage' => 'The specified parameter MaxResults is not valid.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.SortCriterion.Key',
            'errorMessage' => 'The specified parameter SortCriterion.Key is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'ExceedLimit.Filter',
            'errorMessage' => 'The maximum length of Filters is exceeded.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****\\\\t\\\\n\\",\\n  \\"RequestId\\": \\"D696E6EF-3A6D-5770-801E-4982081FE4D0\\",\\n  \\"MaxResults\\": 10,\\n  \\"Filters\\": [\\n    {\\n      \\"Key\\": \\"RegionId\\",\\n      \\"MatchType\\": \\"Equals\\",\\n      \\"Values\\": [\\n        \\"cn-hangzhou\\"\\n      ]\\n    }\\n  ],\\n  \\"Resources\\": [\\n    {\\n      \\"ResourceType\\": \\"ACS::VPC::RouteTable\\",\\n      \\"CreateTime\\": \\"2021-06-30T09:20:08Z\\",\\n      \\"ResourceGroupId\\": \\"rg-acfmzawhxxc****\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-k\\",\\n      \\"AccountId\\": \\"151266687691****\\",\\n      \\"ResourceId\\": \\"vtb-bp11lbh452fr8940s****\\",\\n      \\"ResourceName\\": \\"group1\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"test_key\\",\\n          \\"Value\\": \\"test_value\\"\\n        }\\n      ],\\n      \\"IpAddresses\\": [\\n        \\"192.168.1.2\\"\\n      ],\\n      \\"IpAddressAttributes\\": [\\n        {\\n          \\"IpAddress\\": \\"192.168.1.2\\",\\n          \\"NetworkType\\": \\"Public\\",\\n          \\"Version\\": \\"Ipv4\\"\\n        }\\n      ],\\n      \\"ExpireTime\\": \\"2021-07-30T09:20:08Z\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '搜索当前账号的资源',
      'summary' => '搜索当前账号下有权限访问的资源。',
      'description' => '- 仅能搜索当前账号下有权限访问的资源。
- 仅能搜索[支持资源中心的云服务及资源类型](~~477798~~)。
- SearchResources接口默认最多返回20条数据，您可以通过指定`MaxResults`参数调整最大返回条目数。
- 如果返回结果中不存在`NextToken`，则表示没有更多数据。否则，则表示还有更多数据。如果想要查询后续页，需要将SearchResources接口的`NextToken`参数设置为上一次返回结果中获取到的`NextToken` 。如果未输入`NextToken`参数，查询时默认返回第一页的数据。
- 通过设置一个或多个过滤条件，可以精确资源的搜索范围。支持的过滤参数以及匹配方式见下文。多个过滤条件之间是逻辑与`AND`的关系，只有同时满足所有过滤条件的资源才会被返回。每个过滤条件内部是逻辑或`OR`的关系，只要满足任意一个过滤条件值的资源都会被返回。
- 您可以在[示例中心](https://api.aliyun.com/api-tools/demo/ResourceCenter)获取更多查询示例。',
      'requestParamsDescription' => '### 支持的过滤参数
|参数 |描述|支持的匹配类型|
| --- | ------ |------|
|ResourceType |资源类型。 |Equals|
|RegionId|地域ID。|Equals|
|ResourceId|资源ID。|Equals、Prefix|
|ResourceGroupId|资源组ID。|Equals、Exists、NotExists|
|ResourceName|资源名称。|Equals、Contains|
|Tag|标签键值对。 JSON格式为 `{ "key": $key, "value": $value }` ，key与value至少出现一个。例如：查询标签键`foo`和标签值`bar`，则传递`{ "key": "foo", "value": "bar" }` ；查询标签键`foo`，则传递`{ "key": "foo" }`。 |Contains、NotContains、NotExists|
|VpcId|VPC ID。|Equals|
|VSwitchId|交换机ID。|Equals|',
    ),
    'GetResourceConfiguration' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。

支持资源中心的资源类型，请参见[支持资源中心的云服务及资源类型](~~477798~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'ACS::VPC::RouteTable',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eip-bp1kyg72m****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F1CE0D52-32DA-531A-87A4-B9A5B68D5D8E',
              ),
              'ResourceType' => 
              array (
                'description' => '资源类型。',
                'type' => 'string',
                'example' => 'ACS::VPC::VSwitch',
              ),
              'CreateTime' => 
              array (
                'description' => '资源创建时间。',
                'type' => 'string',
                'example' => '2021-06-30T09:20:08Z',
              ),
              'ExpireTime' => 
              array (
                'description' => '资源过期时间。',
                'type' => 'string',
                'example' => '2021-07-30T09:20:08Z',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源组ID。',
                'type' => 'string',
                'example' => 'rg-acfmv4k****',
              ),
              'ZoneId' => 
              array (
                'description' => '可用区ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou-k',
              ),
              'AccountId' => 
              array (
                'description' => '阿里云账号ID。',
                'type' => 'string',
                'example' => '151266687691****',
              ),
              'ResourceId' => 
              array (
                'description' => '资源ID。',
                'type' => 'string',
                'example' => 'vtb-uf6978gdqbi****',
              ),
              'ResourceName' => 
              array (
                'description' => '资源名称。',
                'type' => 'string',
                'example' => 'group1',
              ),
              'RegionId' => 
              array (
                'description' => '资源地域ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'Tags' => 
              array (
                'description' => '标签。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '标签键。',
                      'type' => 'string',
                      'example' => 'test-key',
                    ),
                    'Value' => 
                    array (
                      'description' => '标签值。',
                      'type' => 'string',
                      'example' => 'test-value',
                    ),
                  ),
                ),
              ),
              'IpAddresses' => 
              array (
                'description' => 'IP地址。

> 资源是否返回该参数，由所属的云服务决定。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'IP地址。',
                  'type' => 'string',
                  'example' => '192.168.1.2',
                ),
              ),
              'IpAddressAttributes' => 
              array (
                'description' => 'IP地址属性。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'IP地址属性。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'IpAddress' => 
                    array (
                      'description' => 'IP地址。',
                      'type' => 'string',
                      'example' => '192.168.1.2',
                    ),
                    'NetworkType' => 
                    array (
                      'description' => '网络类型，取值：
- **Public**：公网。
- **Private**：私网。',
                      'type' => 'string',
                      'example' => 'Public',
                    ),
                    'Version' => 
                    array (
                      'description' => 'IP地址的版本。',
                      'type' => 'string',
                      'example' => 'Ipv4',
                    ),
                  ),
                ),
              ),
              'Configuration' => 
              array (
                'description' => '资源配置详情。',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'any',
                  'description' => '资源配置详情。',
                  'example' => '{\\"uid\\":\\"191432722631****\\",\\"groupId\\":\\"MtxXXli4FfphQJyH9R3p00****\\"}',
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission.Resource',
            'errorMessage' => 'The operator is not permitted for this resource.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotExists.Resource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceType',
            'errorMessage' => 'The specified parameter ResourceType is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F1CE0D52-32DA-531A-87A4-B9A5B68D5D8E\\",\\n  \\"ResourceType\\": \\"ACS::VPC::VSwitch\\",\\n  \\"CreateTime\\": \\"2021-06-30T09:20:08Z\\",\\n  \\"ExpireTime\\": \\"2021-07-30T09:20:08Z\\",\\n  \\"ResourceGroupId\\": \\"rg-acfmv4k****\\",\\n  \\"ZoneId\\": \\"cn-hangzhou-k\\",\\n  \\"AccountId\\": \\"151266687691****\\",\\n  \\"ResourceId\\": \\"vtb-uf6978gdqbi****\\",\\n  \\"ResourceName\\": \\"group1\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"Tags\\": [\\n    {\\n      \\"Key\\": \\"test-key\\",\\n      \\"Value\\": \\"test-value\\"\\n    }\\n  ],\\n  \\"IpAddresses\\": [\\n    \\"192.168.1.2\\"\\n  ],\\n  \\"IpAddressAttributes\\": [\\n    {\\n      \\"IpAddress\\": \\"192.168.1.2\\",\\n      \\"NetworkType\\": \\"Public\\",\\n      \\"Version\\": \\"Ipv4\\"\\n    }\\n  ],\\n  \\"Configuration\\": {\\n    \\"key\\": \\"{\\\\\\\\\\\\\\"uid\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"191432722631****\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"groupId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"MtxXXli4FfphQJyH9R3p00****\\\\\\\\\\\\\\"}\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询资源配置',
      'summary' => '查询当前账号的资源配置。',
    ),
    'ListTagValues' => 
    array (
      'summary' => '查询当前账号下的标签值。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的最大数据条数。

取值范围：1~100。

默认值：20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询返回结果下一页的令牌。

当返回结果数据总条数超过`MaxResults`限制，则数据会被截断，您可以使用`NextToken`查询下一页数据。',
            'type' => 'string',
            'required' => false,
            'example' => 'eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****',
          ),
        ),
        2 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签键。',
            'type' => 'string',
            'required' => true,
            'example' => 'test_key',
          ),
        ),
        3 => 
        array (
          'name' => 'TagValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签值。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_value',
          ),
        ),
        4 => 
        array (
          'name' => 'MatchType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '',
            'description' => '匹配方式。取值：

- Equals：相等匹配。
- Prefix：前缀匹配。',
            'type' => 'string',
            'required' => false,
            'example' => 'Equals',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'ListTagValuesResponseDTO',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '下一个查询开始的Token。',
                'type' => 'string',
                'example' => 'eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****',
              ),
              'TagValues' => 
              array (
                'description' => '标签值列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'example' => 'test_value',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C1840B83-1193-5E83-AFA6-4B8D303E29F5',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.MaxResults',
            'errorMessage' => 'The specified parameter MaxResults is not valid.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.MatchType',
            'errorMessage' => 'The specified parameter MatchType is not valid.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****\\",\\n  \\"TagValues\\": [\\n    \\"test_value\\"\\n  ],\\n  \\"RequestId\\": \\"C1840B83-1193-5E83-AFA6-4B8D303E29F5\\"\\n}","type":"json"}]',
      'title' => '查询标签值',
    ),
    'ListTagKeys' => 
    array (
      'summary' => '查询当前账号下的标签键。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的最大数据条数。

取值范围：1~100。

默认值：20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询返回结果下一页的令牌。

当返回结果数据总条数超过`MaxResults`限制，则数据会被截断，您可以使用`NextToken`查询下一页数据。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAUYb00R0gHZBE8FVDeoh2ME93VeeEPUHs****',
          ),
        ),
        2 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签键。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_key',
          ),
        ),
        3 => 
        array (
          'name' => 'MatchType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '',
            'description' => '匹配方式。取值：

- Equals：相等匹配。
- Prefix：前缀匹配。',
            'type' => 'string',
            'required' => false,
            'example' => 'Equals',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'ListTagKeysResponseDTO',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '下一个查询开始Token。',
                'type' => 'string',
                'example' => 'AAAAAUDnubHKJbVTCdlIGYUPtsu3EoN3bfdgjDA****',
              ),
              'TagKeys' => 
              array (
                'description' => '标签键列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'example' => 'test_key',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '44C8A952-D6B0-5BC8-82D5-93BA02E26F2E',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.MaxResults',
            'errorMessage' => 'The specified parameter MaxResults is not valid.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.MatchType',
            'errorMessage' => 'The specified parameter MatchType is not valid.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"AAAAAUDnubHKJbVTCdlIGYUPtsu3EoN3bfdgjDA****\\",\\n  \\"TagKeys\\": [\\n    \\"test_key\\"\\n  ],\\n  \\"RequestId\\": \\"44C8A952-D6B0-5BC8-82D5-93BA02E26F2E\\"\\n}","type":"json"}]',
      'title' => '查询标签键',
    ),
    'ListResourceTypes' => 
    array (
      'summary' => '查询资源中心支持的资源类型。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '',
            'description' => '返回信息的语言类型：

- zh-CN：中文
- en-US：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh-CN',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '',
            'description' => '资源类型。

支持资源中心的资源类型，请参见[支持资源中心的云服务及资源类型](~~477798~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'ACS::ACK::Cluster',
          ),
        ),
        2 => 
        array (
          'name' => 'Query',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '',
            'description' => '查询条件。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '查询字段。取值：

- ResourceType：资源类型。
- ProductName：云服务名称。
- ResourceTypeName：资源类型名称。
- FilterKeys：过滤条件。',
              'type' => 'string',
              'required' => false,
              'example' => 'ResourceType',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'ListResourceTypesOpenResponseDTO',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'ResourceTypes' => 
              array (
                'description' => '资源类型列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源类型列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ResourceType' => 
                    array (
                      'title' => '资源类型fullCode ACS::ECS::Instance',
                      'description' => '资源类型。',
                      'type' => 'string',
                      'example' => 'ACS::ACK::Cluster',
                    ),
                    'ProductName' => 
                    array (
                      'title' => '产品名称 (国际化)',
                      'description' => '云服务名称。',
                      'type' => 'string',
                      'example' => '容器服务Kubernetes版',
                    ),
                    'ResourceTypeName' => 
                    array (
                      'title' => '资源类型名称',
                      'description' => '资源类型名称。',
                      'type' => 'string',
                      'example' => '集群',
                    ),
                    'FilterKeys' => 
                    array (
                      'title' => '支持的过滤条件',
                      'description' => '支持的过滤条件。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '支持的过滤条件。',
                        'type' => 'string',
                        'example' => 'ResourceName',
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E5556E4C-479A-5BBB-B325-F07563E7E917',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.Query',
            'errorMessage' => 'The specified parameter Query is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceType',
            'errorMessage' => 'The specified parameter ResourceType is not valid.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ResourceTypes\\": [\\n    {\\n      \\"ResourceType\\": \\"ACS::ACK::Cluster\\",\\n      \\"ProductName\\": \\"容器服务Kubernetes版\\",\\n      \\"ResourceTypeName\\": \\"集群\\",\\n      \\"FilterKeys\\": [\\n        \\"ResourceName\\"\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"E5556E4C-479A-5BBB-B325-F07563E7E917\\"\\n}","type":"json"}]',
      'title' => '查询资源中心支持的资源类型',
    ),
    'GetResourceCounts' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'GroupByKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源数量统计的分组维度。取值：
- ResourceType：资源类型。
- RegionId：地域。
- ResourceGroupId：资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ResourceType',
          ),
        ),
        1 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '过滤条件。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '过滤条件。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '过滤条件键。取值见下方`支持的过滤参数`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'RegionId',
                ),
                'Value' => 
                array (
                  'description' => '过滤条件值。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '过滤条件值。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'cn-shanghai',
                  ),
                  'required' => false,
                  'maxItems' => 200,
                ),
                'MatchType' => 
                array (
                  'description' => '匹配方式。

取值为Equals，表示相等匹配。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Equals',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'GroupByKey' => 
              array (
                'description' => '资源统计的分组维度。',
                'type' => 'string',
                'example' => 'ResourceType',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6D98D9B0-318D-56A4-910C-93B5F945AF2B',
              ),
              'Filters' => 
              array (
                'description' => '过滤条件。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '过滤条件。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '过滤条件键。',
                      'type' => 'string',
                      'example' => 'RegionId',
                    ),
                    'Values' => 
                    array (
                      'description' => '过滤条件值。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '过滤条件值。',
                        'type' => 'string',
                        'example' => 'cn-shanghai',
                      ),
                    ),
                  ),
                ),
              ),
              'ResourceCounts' => 
              array (
                'description' => '资源数量列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源数量。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'GroupName' => 
                    array (
                      'description' => '分组名称。',
                      'type' => 'string',
                      'example' => 'ACS::ECS::NetworkInterface',
                    ),
                    'Count' => 
                    array (
                      'description' => '资源数量。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"GroupByKey\\": \\"ResourceType\\",\\n  \\"RequestId\\": \\"6D98D9B0-318D-56A4-910C-93B5F945AF2B\\",\\n  \\"Filters\\": [\\n    {\\n      \\"Key\\": \\"RegionId\\",\\n      \\"Values\\": [\\n        \\"cn-shanghai\\"\\n      ]\\n    }\\n  ],\\n  \\"ResourceCounts\\": [\\n    {\\n      \\"GroupName\\": \\"ACS::ECS::NetworkInterface\\",\\n      \\"Count\\": 2\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询当前账号下的资源数量',
      'summary' => '查询当前账号下有权限访问的资源数量。',
      'description' => '- 仅能搜索当前账号下有权限访问的资源数量。
- 仅能搜索[支持资源中心的云服务及资源类型](~~477798~~)。',
      'requestParamsDescription' => '### 支持的过滤参数
|参数 |描述|支持的匹配类型|
| --- | ------ |------|
|ResourceType |资源类型。 |Equals|
|RegionId|地域ID。|Equals|
|ResourceId|资源ID。|Equals、Prefix|
|ResourceGroupId|资源组ID。|Equals、Exists、NotExists|
|ResourceName|资源名称。|Equals、Contains|
|Tag|标签键值对。 JSON格式为 `{ "key": $key, "value": $value }` ，key与value至少出现一个。例如：查询标签键`foo`和标签值`bar`，则传递`{ "key": "foo", "value": "bar" }` ；查询标签键`foo`，则传递`{ "key": "foo" }`。 |Contains、NotContains、NotExists|
|VpcId|VPC ID。|Equals|
|VSwitchId|交换机ID。|Equals|',
    ),
    'EnableMultiAccountResourceCenter' => 
    array (
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '开通状态。取值：

- Pending：开通中。
- Enabled：已开通。',
                'type' => 'string',
                'example' => 'Pending',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '767038B7-2027-5508-858B-E213232D57D5',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission.ResourceDirectory.MemberAccount',
            'errorMessage' => 'ResourceDirectory Member Account is not authorized to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'NotSupport.Account.Site',
            'errorMessage' => 'The caller is not a current site account, which is not supported.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"Pending\\",\\n  \\"RequestId\\": \\"767038B7-2027-5508-858B-E213232D57D5\\"\\n}","type":"json"}]',
      'title' => '开通跨账号资源搜索',
      'summary' => '开通跨账号资源搜索。',
      'description' => '如果您已经通过资源目录搭建了企业的多账号体系结构，您可以使用资源目录的管理账号或委派管理员账号开通跨账号资源搜索，查看多个成员中的资源。关于资源目录的更多信息，请参见[资源目录概述](~~200506~~)。',
    ),
    'DisableMultiAccountResourceCenter' => 
    array (
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4951F920-48DB-5731-96AA-3A7C8AE617D9',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission.ResourceDirectory.MemberAccount',
            'errorMessage' => 'ResourceDirectory Member Account is not authorized to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'DisableConflict.DeliveryChannel',
            'errorMessage' => 'ResourceCenter cannot be disabled because there are active delivery channels.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4951F920-48DB-5731-96AA-3A7C8AE617D9\\"\\n}","type":"json"}]',
      'title' => '关闭跨账号资源搜索',
      'summary' => '关闭跨账号资源搜索。',
    ),
    'GetMultiAccountResourceCenterServiceStatus' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '81671397-1425-51F1-A144-4799E01BEBFF',
              ),
              'ServiceStatus' => 
              array (
                'description' => '服务状态。取值：

- Enabled：已开通。

- Disabled：已关闭。',
                'type' => 'string',
                'example' => 'Enabled',
              ),
              'InitialStatus' => 
              array (
                'description' => '初始化状态。取值：

- Pending：准备中。

- Finished：就绪。',
                'type' => 'string',
                'example' => 'Pending',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'MultiAccountServiceNotEnabled',
            'errorMessage' => 'Mulit account ResourceCenter service is not enabled.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.Scope',
            'errorMessage' => 'The Scope is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'NoPermission.ResourceDirectory.MemberAccount',
            'errorMessage' => 'ResourceDirectory Member Account is not authorized to perform this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"81671397-1425-51F1-A144-4799E01BEBFF\\",\\n  \\"ServiceStatus\\": \\"Enabled\\",\\n  \\"InitialStatus\\": \\"Pending\\"\\n}","type":"json"}]',
      'title' => '查询跨账号资源搜索开通状态',
      'summary' => '查询跨账号资源搜索开通状态。',
    ),
    'SearchMultiAccountResources' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Scope',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索的账号范围。取值： 
- 资源目录ID，表示搜索管理账号和所有成员中的资源。更多信息，请参见[GetResourceDirectory](~~159995~~)。
- Root资源夹ID，表示搜索Root资源夹及子资源夹下的所有成员中的资源。更多信息，请参见[ListFoldersForParent](~~159997~~)。
- 资源夹ID，表示搜索指定资源夹下所有成员中的资源。更多信息，请参见[ListFoldersForParent](~~159997~~)。
- 成员ID，表示搜索指定成员中的资源。更多信息，请参见[ListAccounts](~~160016~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'rd-r4****',
          ),
        ),
        1 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询返回结果下一页的令牌。

当返回结果数据总条数超过`MaxResults`限制，则数据会被截断，您可以使用`NextToken`查询下一页数据。',
            'type' => 'string',
            'required' => false,
            'example' => 'eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****',
          ),
        ),
        2 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的最大数据条数。

取值范围：1~100。

默认值：20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '过滤条件。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '过滤条件。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '过滤条件键。取值见下方`支持的过滤参数`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ResourceGroupId',
                ),
                'Value' => 
                array (
                  'description' => '过滤条件值。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '过滤条件值。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'rg-aekzmrjn4ns****',
                  ),
                  'required' => false,
                  'maxItems' => 200,
                ),
                'MatchType' => 
                array (
                  'description' => '匹配方式。

取值为Equals，表示相等匹配。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Equals',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        4 => 
        array (
          'name' => 'SortCriterion',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '排序参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Key' => 
              array (
                'description' => '排序条件。

取值为CreateTime，表示按资源创建时间排序。',
                'type' => 'string',
                'required' => false,
                'example' => 'CreateTime',
              ),
              'Order' => 
              array (
                'description' => '排序顺序。取值：

- ASC（默认值）：升序。
- DESC：降序。',
                'type' => 'string',
                'required' => false,
                'example' => 'ASC',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EFA806B9-7F36-55AB-8B7A-D680C2C5EE57',
              ),
              'NextToken' => 
              array (
                'description' => '查询返回结果下一页的令牌。',
                'type' => 'string',
                'example' => '查询返回结果下一页的令牌。',
              ),
              'Scope' => 
              array (
                'description' => '搜索的账号范围。取值： 
- 资源目录ID，表示搜索管理账号和所有成员中的资源。
- Root资源夹ID，表示搜索Root资源夹及子资源夹下的所有成员中的资源。
- 资源夹ID，表示搜索指定资源夹下所有成员中的资源。
- 成员ID，表示搜索指定成员中的资源。',
                'type' => 'string',
                'example' => 'rd-r4****
',
              ),
              'MaxResults' => 
              array (
                'description' => '每页的最大数据条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Filters' => 
              array (
                'description' => '过滤条件。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '过滤条件。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '过滤条件键。',
                      'type' => 'string',
                      'example' => 'RegionId',
                    ),
                    'MatchType' => 
                    array (
                      'description' => '匹配方式。',
                      'type' => 'string',
                      'example' => 'Equals',
                    ),
                    'Values' => 
                    array (
                      'description' => '过滤条件值。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '过滤条件值。',
                        'type' => 'string',
                        'example' => 'cn-hangzhou',
                      ),
                    ),
                  ),
                ),
              ),
              'Resources' => 
              array (
                'description' => '资源信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ResourceType' => 
                    array (
                      'description' => '资源类型。',
                      'type' => 'string',
                      'example' => 'ACS::VPC::RouteTable',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '资源的创建时间。

> 资源是否返回该参数，由所属的云服务决定。',
                      'type' => 'string',
                      'example' => '2021-06-30T09:20:08Z',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-acfmzawhxxc****	
',
                    ),
                    'ZoneId' => 
                    array (
                      'description' => '可用区ID。

> 资源是否返回该参数，由所属的云服务决定。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-k',
                    ),
                    'AccountId' => 
                    array (
                      'description' => '资源目录管理账号ID或成员账号ID。',
                      'type' => 'string',
                      'example' => '151266687691****',
                    ),
                    'ResourceId' => 
                    array (
                      'description' => '资源ID。',
                      'type' => 'string',
                      'example' => 'vtb-bp11lbh452fr8940s****',
                    ),
                    'ResourceName' => 
                    array (
                      'description' => '资源名称。',
                      'type' => 'string',
                      'example' => 'group1',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '资源地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'Tags' => 
                    array (
                      'description' => '标签。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '标签键。',
                            'type' => 'string',
                            'example' => 'test_key',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签值。',
                            'type' => 'string',
                            'example' => 'test_value',
                          ),
                        ),
                      ),
                    ),
                    'IpAddresses' => 
                    array (
                      'description' => 'IP地址。

> 资源是否返回该参数，由所属的云服务决定。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'IP地址。

> 资源是否返回该参数，由所属的云服务决定。',
                        'type' => 'string',
                        'example' => '192.168.1.2',
                      ),
                    ),
                    'IpAddressAttributes' => 
                    array (
                      'description' => 'IP地址属性。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'IP地址属性。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'IpAddress' => 
                          array (
                            'description' => 'IP地址。',
                            'type' => 'string',
                            'example' => '192.168.1.2',
                          ),
                          'NetworkType' => 
                          array (
                            'description' => '网络类型，取值：
- **Public**：公网。
- **Private**：私网。',
                            'type' => 'string',
                            'example' => 'Public',
                          ),
                          'Version' => 
                          array (
                            'description' => 'IP地址的版本。',
                            'type' => 'string',
                            'example' => 'Ipv4',
                          ),
                        ),
                      ),
                    ),
                    'ExpireTime' => 
                    array (
                      'description' => '资源过期时间。',
                      'type' => 'string',
                      'example' => '2023-06-14T14:35:45Z',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.MaxResults',
            'errorMessage' => 'The specified parameter MaxResults is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'MultiAccountServiceNotEnabled',
            'errorMessage' => 'Multi account ResourceCenter service is not enabled.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotExists.Resource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'NotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled.',
          ),
          2 => 
          array (
            'errorCode' => 'NotExists.ResourceDirectory.FolderId',
            'errorMessage' => 'The specified folder does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.Scope',
            'errorMessage' => 'The Scope is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'NoPermission.ResourceDirectory.MemberAccount',
            'errorMessage' => 'ResourceDirectory Member Account is not authorized to perform this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.SortCriterion.Key',
            'errorMessage' => 'The specified parameter SortCriterion.Key is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'ExceedLimit.Filter',
            'errorMessage' => 'The maximum length of Filters is exceeded.',
          ),
          4 => 
          array (
            'errorCode' => 'ServiceNotEnabled.SpecifiedAccount',
            'errorMessage' => 'ResourceCenter service of the specified account is not enabled.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EFA806B9-7F36-55AB-8B7A-D680C2C5EE57\\",\\n  \\"NextToken\\": \\"查询返回结果下一页的令牌。\\",\\n  \\"Scope\\": \\"rd-r4****\\\\n\\",\\n  \\"MaxResults\\": 10,\\n  \\"Filters\\": [\\n    {\\n      \\"Key\\": \\"RegionId\\",\\n      \\"MatchType\\": \\"Equals\\",\\n      \\"Values\\": [\\n        \\"cn-hangzhou\\"\\n      ]\\n    }\\n  ],\\n  \\"Resources\\": [\\n    {\\n      \\"ResourceType\\": \\"ACS::VPC::RouteTable\\",\\n      \\"CreateTime\\": \\"2021-06-30T09:20:08Z\\",\\n      \\"ResourceGroupId\\": \\"rg-acfmzawhxxc****\\\\t\\\\n\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-k\\",\\n      \\"AccountId\\": \\"151266687691****\\",\\n      \\"ResourceId\\": \\"vtb-bp11lbh452fr8940s****\\",\\n      \\"ResourceName\\": \\"group1\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"test_key\\",\\n          \\"Value\\": \\"test_value\\"\\n        }\\n      ],\\n      \\"IpAddresses\\": [\\n        \\"192.168.1.2\\"\\n      ],\\n      \\"IpAddressAttributes\\": [\\n        {\\n          \\"IpAddress\\": \\"192.168.1.2\\",\\n          \\"NetworkType\\": \\"Public\\",\\n          \\"Version\\": \\"Ipv4\\"\\n        }\\n      ],\\n      \\"ExpireTime\\": \\"2023-06-14T14:35:45Z\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '搜索多账号的资源',
      'summary' => '搜索资源目录管理账号和多个成员中的资源。',
      'description' => '- 仅能搜索[支持资源中心的云服务及资源类型](~~477798~~)。
- 如果您使用的是RAM用户账号或者RAM角色，需要被授予SearchMultiAccountResources接口的权限才能执行跨账号资源搜索操作。更多信息，请参见[RAM用户使用资源中心](~~600556~~)。
- SearchMultiAccountResources接口默认最多返回20条数据，您可以通过指定`MaxResults`参数调整最大返回条目数。
- 如果返回结果中不存在`NextToken`，则表示没有更多数据。否则，则表示还有更多数据。如果想要查询后续页，需要将 SearchMultiAccountResources 接口的`NextToken`参数设置为上一次返回结果中获取到的`NextToken` 。如果未输入`NextToken`参数，查询时默认返回第一页的数据。
- 通过设置一个或多个过滤条件，可以精确资源的搜索范围。支持的过滤参数以及匹配方式见下文。多个过滤条件之间是逻辑与`AND`的关系，只有同时满足所有过滤条件的资源才会被返回。每个过滤条件内部是逻辑或`OR`的关系，只要满足任意一个过滤条件值的资源都会被返回。
- 您可以在<props="china">[示例中心](https://api.aliyun.com/api-tools/demo/ResourceCenter)</props>
<props="intl">[示例中心](https://api.alibabacloud.com/api-tools/demo/ResourceCenter)</props>获取更多查询示例。',
      'requestParamsDescription' => '### 支持的过滤参数
|参数 |描述|支持的匹配类型|
| --- | ------ |------|
|ResourceType |资源类型。 |Equals|
|RegionId|地域ID。|Equals|
|ResourceId|资源ID。|Equals、Prefix|
|ResourceGroupId|资源组ID。|Equals、Exists、NotExists|
|ResourceName|资源名称。|Equals、Contains|
|Tag|标签键值对。 JSON格式为 `{ "key": $key, "value": $value }` ，key与value至少出现一个。例如：查询标签键`foo`和标签值`bar`，则传递: `{ "key": "foo", "value": "bar" }` ；查询标签键`foo`，则传递: `{ "key": "foo" }`。 |Contains、NotContains、NotExists|
|VpcId|VPC ID。|Equals|
|VSwitchId|交换机ID。|Equals|',
    ),
    'GetMultiAccountResourceConfiguration' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源目录管理账号ID或成员ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1619302****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。',
            'type' => 'string',
            'required' => true,
            'example' => 'ACS::VPC::RouteTable',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'm-eb3hji****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B2DCC08B-C12A-5705-879C-5A1450016156',
              ),
              'ResourceType' => 
              array (
                'description' => '资源类型。',
                'type' => 'string',
                'example' => 'ACS::VPC::RouteTable',
              ),
              'CreateTime' => 
              array (
                'description' => '资源创建时间。',
                'type' => 'string',
                'example' => '2023-02-14T03:12:11Z',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源组ID。
',
                'type' => 'string',
                'example' => 'rg-acfmzy6d****',
              ),
              'ZoneId' => 
              array (
                'description' => '可用区ID。',
                'type' => 'string',
                'example' => 'cn-shanghai-a',
              ),
              'AccountId' => 
              array (
                'description' => '资源目录管理账号ID或成员ID。',
                'type' => 'string',
                'example' => '1619302****',
              ),
              'ResourceId' => 
              array (
                'description' => '资源ID。',
                'type' => 'string',
                'example' => 'm-eb3hji****',
              ),
              'ResourceName' => 
              array (
                'description' => '资源名称。',
                'type' => 'string',
                'example' => 'test_resource',
              ),
              'RegionId' => 
              array (
                'description' => '资源地域ID。',
                'type' => 'string',
                'example' => 'cn-shanghai',
              ),
              'Tags' => 
              array (
                'description' => '资源标签。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源标签。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '标签键。',
                      'type' => 'string',
                      'example' => 'tag-key',
                    ),
                    'Value' => 
                    array (
                      'description' => '标签值。',
                      'type' => 'string',
                      'example' => 'tag-value',
                    ),
                  ),
                ),
              ),
              'IpAddresses' => 
              array (
                'description' => 'IP地址。

> 资源是否返回该参数，由所属的云服务决定。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'IP地址。

> 资源是否返回该参数，由所属的云服务决定。',
                  'type' => 'string',
                  'example' => '[\'192.168.1.2\']',
                ),
              ),
              'Configuration' => 
              array (
                'description' => '资源配置详情。',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'any',
                  'description' => '资源配置详情。',
                  'example' => '{\\"uid\\":\\"140874204639****\\",\\"groupId\\":\\"3zLxraq7qE9dRakjoQYI00****\\"}',
                ),
              ),
              'IpAddressAttributes' => 
              array (
                'description' => 'IP地址属性。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'IP地址属性。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'IpAddress' => 
                    array (
                      'description' => 'IP地址。',
                      'type' => 'string',
                      'example' => '172.27.199.42',
                    ),
                    'NetworkType' => 
                    array (
                      'description' => '网络类型，取值：
- **Public**：公网。
- **Private**：私网。',
                      'type' => 'string',
                      'example' => 'Public',
                    ),
                    'Version' => 
                    array (
                      'description' => 'IP地址的版本。',
                      'type' => 'string',
                      'example' => 'Ipv4',
                    ),
                  ),
                ),
              ),
              'ExpireTime' => 
              array (
                'description' => '资源过期时间。',
                'type' => 'string',
                'example' => '2023-09-18T07:04:21Z',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'MultiAccountServiceNotEnabled',
            'errorMessage' => 'Multi account ResourceCenter service is not enabled.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotExists.Resource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'NotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.AccountId',
            'errorMessage' => 'The specified parameter AccountId is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceType',
            'errorMessage' => 'The specified parameter ResourceType is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'NoPermission.ResourceDirectory.MemberAccount',
            'errorMessage' => 'ResourceDirectory Member Account is not authorized to perform this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B2DCC08B-C12A-5705-879C-5A1450016156\\",\\n  \\"ResourceType\\": \\"ACS::VPC::RouteTable\\",\\n  \\"CreateTime\\": \\"2023-02-14T03:12:11Z\\",\\n  \\"ResourceGroupId\\": \\"rg-acfmzy6d****\\",\\n  \\"ZoneId\\": \\"cn-shanghai-a\\",\\n  \\"AccountId\\": \\"1619302****\\",\\n  \\"ResourceId\\": \\"m-eb3hji****\\",\\n  \\"ResourceName\\": \\"test_resource\\",\\n  \\"RegionId\\": \\"cn-shanghai\\",\\n  \\"Tags\\": [\\n    {\\n      \\"Key\\": \\"tag-key\\",\\n      \\"Value\\": \\"tag-value\\"\\n    }\\n  ],\\n  \\"IpAddresses\\": [\\n    \\"[\'192.168.1.2\']\\"\\n  ],\\n  \\"Configuration\\": {\\n    \\"key\\": \\"{\\\\\\\\\\\\\\"uid\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"140874204639****\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"groupId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"3zLxraq7qE9dRakjoQYI00****\\\\\\\\\\\\\\"}\\"\\n  },\\n  \\"IpAddressAttributes\\": [\\n    {\\n      \\"IpAddress\\": \\"172.27.199.42\\",\\n      \\"NetworkType\\": \\"Public\\",\\n      \\"Version\\": \\"Ipv4\\"\\n    }\\n  ],\\n  \\"ExpireTime\\": \\"2023-09-18T07:04:21Z\\"\\n}","type":"json"}]',
      'title' => '查询多账号资源配置',
      'summary' => '查询资源目录管理账号或成员的资源配置。',
    ),
    'ListMultiAccountResourceGroups' => 
    array (
      'summary' => '查询资源目录管理账号或成员的资源组。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页行数。

每页最大行数：100。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        1 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始的Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAS2Nboi3t4xGrdlG5/Ks/Q1xPG9jzviYEuZydevXIkgF',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源目录管理账号ID或成员ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1394339739****',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源组ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源组ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'rg-acfmzawhxxc****',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'ListMultiAccountResourceGroupsResponseDTO',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '下一个查询开始的Token。',
                'type' => 'string',
                'example' => 'AAAAAU5VsT9R1adMTuz9GzginZ3Y+7Y/5JATS+6q5GK9kT75',
              ),
              'ResourceGroups' => 
              array (
                'description' => '资源组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源组。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DisplayName' => 
                    array (
                      'description' => '资源组显示名称。',
                      'type' => 'string',
                      'example' => 'group1',
                    ),
                    'Status' => 
                    array (
                      'description' => '资源组状态。

- Creating：创建中。
- OK：创建成功。
- PendingDelete：等待删除。',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'AccountId' => 
                    array (
                      'description' => '资源目录管理账号ID或成员ID。',
                      'type' => 'string',
                      'example' => '1394339739****',
                    ),
                    'Name' => 
                    array (
                      'description' => '资源组唯一标识。',
                      'type' => 'string',
                      'example' => 'my-project',
                    ),
                    'CreateDate' => 
                    array (
                      'description' => '资源组的创建时间。',
                      'type' => 'string',
                      'example' => '2021-06-30T09:20:08Z',
                    ),
                    'Id' => 
                    array (
                      'description' => '资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-acfmzawhxxc****',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FF0A66E-781F-51EE-9531-928F197558F2',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.MaxResults',
            'errorMessage' => 'The specified parameter MaxResults is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'MultiAccountServiceNotEnabled',
            'errorMessage' => 'Multi account ResourceCenter service is not enabled.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled.',
          ),
          1 => 
          array (
            'errorCode' => 'NotExists.ResourceGroup',
            'errorMessage' => 'The specified ResourceGroup does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission.ResourceDirectory.MemberAccount',
            'errorMessage' => 'ResourceDirectory Member Account is not authorized to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.AccountId',
            'errorMessage' => 'The specified parameter AccountId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceGroupId',
            'errorMessage' => 'The specified parameter ResourceGroupId is not valid.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"AAAAAU5VsT9R1adMTuz9GzginZ3Y+7Y/5JATS+6q5GK9kT75\\",\\n  \\"ResourceGroups\\": [\\n    {\\n      \\"DisplayName\\": \\"group1\\",\\n      \\"Status\\": \\"OK\\",\\n      \\"AccountId\\": \\"1394339739****\\",\\n      \\"Name\\": \\"my-project\\",\\n      \\"CreateDate\\": \\"2021-06-30T09:20:08Z\\",\\n      \\"Id\\": \\"rg-acfmzawhxxc****\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"0FF0A66E-781F-51EE-9531-928F197558F2\\"\\n}","type":"json"}]',
      'title' => '查询多账号资源组',
    ),
    'ListMultiAccountTagKeys' => 
    array (
      'summary' => '查询资源目录管理账号或成员中的标签键。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Scope',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索的账号范围。取值： 
- 资源目录ID，表示搜索管理账号和所有成员中的资源。更多信息，请参见[GetResourceDirectory](~~159995~~)。
- Root资源夹ID，表示搜索Root资源夹及子资源夹下的所有成员中的资源。更多信息，请参见[ListFoldersForParent](~~159997~~)。
- 资源夹ID，表示搜索指定资源夹下所有成员中的资源。更多信息，请参见[ListFoldersForParent](~~159997~~)。
- 成员ID，表示搜索指定成员中的资源。更多信息，请参见[ListAccounts](~~160016~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'rd-r4****
',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的最大数据条数。

取值范围：1~100。

默认值：20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询返回结果下一页的令牌。

当返回结果数据总条数超过`MaxResults`限制，则数据会被截断，您可以使用`NextToken`查询下一页数据。',
            'type' => 'string',
            'required' => false,
            'example' => 'eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****',
          ),
        ),
        3 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签键。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_key',
          ),
        ),
        4 => 
        array (
          'name' => 'MatchType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '',
            'description' => '匹配方式。取值：

- Equals：相等匹配。
- Prefix：前缀匹配。',
            'type' => 'string',
            'required' => false,
            'example' => 'Equals',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'ListMultiAccountTagKeysResponseDTO',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '下一个查询开始的Token。',
                'type' => 'string',
                'example' => 'AAAAARfZmVDe9NvRXloR5+8CK9nNJufMdRA7W1miLC1P****',
              ),
              'TagKeys' => 
              array (
                'description' => '标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'example' => 'test_key',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'FA6086F9-6363-51A5-A507-88E3201EBCCB',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.MaxResults',
            'errorMessage' => 'The specified parameter MaxResults is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'MultiAccountServiceNotEnabled',
            'errorMessage' => 'Multi account ResourceCenter service is not enabled.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled.',
          ),
          1 => 
          array (
            'errorCode' => 'NotExists.ResourceDirectory.FolderId',
            'errorMessage' => 'The specified folder does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission.ResourceDirectory.MemberAccount',
            'errorMessage' => 'ResourceDirectory Member Account is not authorized to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Scope',
            'errorMessage' => 'The Scope is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.MatchType',
            'errorMessage' => 'The specified parameter MatchType is not valid.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"AAAAARfZmVDe9NvRXloR5+8CK9nNJufMdRA7W1miLC1P****\\",\\n  \\"TagKeys\\": [\\n    \\"test_key\\"\\n  ],\\n  \\"RequestId\\": \\"FA6086F9-6363-51A5-A507-88E3201EBCCB\\"\\n}","type":"json"}]',
      'title' => '查询多账号标签键',
    ),
    'ListMultiAccountTagValues' => 
    array (
      'summary' => '查询资源目录管理账号或成员中的标签值。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Scope',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索的账号范围。取值： 
- 资源目录ID，表示搜索管理账号和所有成员中的资源。更多信息，请参见[GetResourceDirectory](~~159995~~)。
- Root资源夹ID，表示搜索Root资源夹及子资源夹下的所有成员中的资源。更多信息，请参见[ListFoldersForParent](~~159997~~)。
- 资源夹ID，表示搜索指定资源夹下所有成员中的资源。更多信息，请参见[ListFoldersForParent](~~159997~~)。
- 成员ID，表示搜索指定成员中的资源。更多信息，请参见[ListAccounts](~~160016~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rd-r4****',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的最大数据条数。

取值范围：1~100。

默认值：20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询返回结果下一页的令牌。

当返回结果数据总条数超过`MaxResults`限制，则数据会被截断，您可以使用`NextToken`查询下一页数据。',
            'type' => 'string',
            'required' => false,
            'example' => 'eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****',
          ),
        ),
        3 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签键。',
            'type' => 'string',
            'required' => true,
            'example' => 'test_key',
          ),
        ),
        4 => 
        array (
          'name' => 'TagValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签值。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_value',
          ),
        ),
        5 => 
        array (
          'name' => 'MatchType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'EQUALS: 匹配 (match), TERMS: 术语匹配 (term/terms), PREFIX: 前缀匹配, NOT_EQUALS: 不等于, CONTAINS: 包含, RANGE: 范围匹配, GREATER_THAN: 大于, GREATER_THAN_OR_EQUAL_TO: 大于等于, LESS_THAN: 小于, LESS_THAN_OR_EQUAL_TO: 小于等于, EXISTS: 存在, NOT_EXISTS: 不存在, INVALID: 无效类型, NOT_CONTAINS: 不包含',
            'description' => '匹配方式。取值：

- Equals：相等匹配。
- Prefix：前缀匹配。',
            'type' => 'string',
            'required' => false,
            'example' => 'Equals',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'ListMultiAccountTagValuesResponseDTO',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '下一页查询开始的Token。',
                'type' => 'string',
                'example' => 'eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****',
              ),
              'TagValues' => 
              array (
                'description' => '标签值列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'example' => 'test_value',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '36A3D9BE-B607-5993-B546-7E19EF65DC00',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.MaxResults',
            'errorMessage' => 'The specified parameter MaxResults is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'MultiAccountServiceNotEnabled',
            'errorMessage' => 'Multi account ResourceCenter service is not enabled.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled.',
          ),
          1 => 
          array (
            'errorCode' => 'NotExists.ResourceDirectory.FolderId',
            'errorMessage' => 'The specified folder does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission.ResourceDirectory.MemberAccount',
            'errorMessage' => 'ResourceDirectory Member Account is not authorized to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Scope',
            'errorMessage' => 'The Scope is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.MatchType',
            'errorMessage' => 'The specified parameter MatchType is not valid.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****\\",\\n  \\"TagValues\\": [\\n    \\"test_value\\"\\n  ],\\n  \\"RequestId\\": \\"36A3D9BE-B607-5993-B546-7E19EF65DC00\\"\\n}","type":"json"}]',
      'title' => '查询多账号标签值',
    ),
    'ListExampleQueries' => 
    array (
      'summary' => '列出所有的系统查询模板。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的最大数据条数。

取值范围：1~50。

默认值：50。',
            'type' => 'string',
            'required' => false,
            'example' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一页查询开始的Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****	
',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D696E6EF-3A6D-5770-801E-4982081FE4D0',
              ),
              'MaxResults' => 
              array (
                'description' => '每页的最大数据条数。',
                'type' => 'string',
                'example' => '10',
              ),
              'NextToken' => 
              array (
                'description' => '下一页查询开始的Token。',
                'type' => 'string',
                'example' => 'eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****',
              ),
              'ExampleQueries' => 
              array (
                'description' => '系统模板信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '系统模板信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'QueryId' => 
                    array (
                      'description' => '模板ID。',
                      'type' => 'string',
                      'example' => 'sq-0PfKy****',
                    ),
                    'Name' => 
                    array (
                      'description' => '模板名称。',
                      'type' => 'string',
                      'example' => '列出所有阿里云资源',
                    ),
                    'Description' => 
                    array (
                      'description' => '模板描述。',
                      'type' => 'string',
                      'example' => '返回所有有权限的资源，并按照资源类型和资源ID排列。',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D696E6EF-3A6D-5770-801E-4982081FE4D0\\",\\n  \\"MaxResults\\": \\"10\\",\\n  \\"NextToken\\": \\"eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****\\",\\n  \\"ExampleQueries\\": [\\n    {\\n      \\"QueryId\\": \\"sq-0PfKy****\\",\\n      \\"Name\\": \\"列出所有阿里云资源\\",\\n      \\"Description\\": \\"返回所有有权限的资源，并按照资源类型和资源ID排列。\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '列出所有的系统查询模板',
    ),
    'GetExampleQuery' => 
    array (
      'summary' => '获取系统查询模板。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'QueryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。
> 您可以调用[ListExampleQueries](~~ListExampleQueries~~)获取模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sq-0PfKy****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '36A3D9BE-B607-5993-B546-7E19EF65DC00',
              ),
              'ExampleQuery' => 
              array (
                'description' => '系统模板信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'QueryId' => 
                  array (
                    'description' => '模板ID。',
                    'type' => 'string',
                    'example' => 'sq-0PfKy****',
                  ),
                  'Expression' => 
                  array (
                    'description' => '模板表达式。',
                    'type' => 'string',
                    'example' => 'SELECT
  resource_id,
  resource_name,
  region_id,
  zone_id,
  resource_type,
  account_id,
  create_time,
  resource_group_id,
  tags,
  ip_addresses,
  vpc_id,
  v_switch_id
FROM
  resources
ORDER BY
  resource_type,
  resource_id
LIMIT
  1000 OFFSET 0;',
                  ),
                  'Name' => 
                  array (
                    'description' => '模板名称。',
                    'type' => 'string',
                    'example' => '列出所有阿里云资源',
                  ),
                  'Description' => 
                  array (
                    'description' => '模板描述。',
                    'type' => 'string',
                    'example' => '返回所有有权限的资源，并按照资源类型和资源ID排列。',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotExists.QueryId',
            'errorMessage' => 'The QueryId does not exist.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"36A3D9BE-B607-5993-B546-7E19EF65DC00\\",\\n  \\"ExampleQuery\\": {\\n    \\"QueryId\\": \\"sq-0PfKy****\\",\\n    \\"Expression\\": \\"SELECT\\\\n  resource_id,\\\\n  resource_name,\\\\n  region_id,\\\\n  zone_id,\\\\n  resource_type,\\\\n  account_id,\\\\n  create_time,\\\\n  resource_group_id,\\\\n  tags,\\\\n  ip_addresses,\\\\n  vpc_id,\\\\n  v_switch_id\\\\nFROM\\\\n  resources\\\\nORDER BY\\\\n  resource_type,\\\\n  resource_id\\\\nLIMIT\\\\n  1000 OFFSET 0;\\",\\n    \\"Name\\": \\"列出所有阿里云资源\\",\\n    \\"Description\\": \\"返回所有有权限的资源，并按照资源类型和资源ID排列。\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取系统查询模板',
    ),
    'CreateSavedQuery' => 
    array (
      'summary' => '创建自定义查询模板。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板名称。

- 长度范围：1~64个字符或汉字。
- 格式：允许输入汉字、英文字母、数字、下划线（_）和短划线（-）。
- 模板名称必须唯一。',
            'type' => 'string',
            'required' => true,
            'example' => '查询我的所有资源。',
          ),
        ),
        1 => 
        array (
          'name' => 'Expression',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板表达式。',
            'type' => 'string',
            'required' => true,
            'example' => 'SELECT * FROM resources;',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板描述。

长度范围：1~256个字符或汉字。',
            'type' => 'string',
            'required' => false,
            'example' => '查询所有资源。',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EFA806B9-7F36-55AB-8B7A-D680C2C5EE57',
              ),
              'QueryId' => 
              array (
                'description' => '模板ID。',
                'type' => 'string',
                'example' => 'cq-GeAck****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'LengthExceedLimit.Description',
            'errorMessage' => 'The length of parameter Description exceed limit.',
          ),
          1 => 
          array (
            'errorCode' => 'LengthExceedLimit.Expression',
            'errorMessage' => 'The length of parameter Expression exceed limit.',
          ),
          2 => 
          array (
            'errorCode' => 'LengthExceedLimit.Name',
            'errorMessage' => 'The length of parameter Name exceed limit.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.Name',
            'errorMessage' => 'The specified parameter Name is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'AlreadyExists.Name',
            'errorMessage' => 'The Query Template Name already exists.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EFA806B9-7F36-55AB-8B7A-D680C2C5EE57\\",\\n  \\"QueryId\\": \\"cq-GeAck****\\"\\n}","type":"json"}]',
      'title' => '创建自定义查询模板',
    ),
    'GetSavedQuery' => 
    array (
      'summary' => '获取自定义查询模板。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'QueryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。
> 您可以调用[ListSavedQueries](~~ListSavedQueries~~)获取查询模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cq-GeAck****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6D98D9B0-318D-56A4-910C-93B5F945AF2B',
              ),
              'SavedQuery' => 
              array (
                'description' => '模板信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'QueryId' => 
                  array (
                    'description' => '模板ID。',
                    'type' => 'string',
                    'example' => 'cq-GeAck****',
                  ),
                  'Expression' => 
                  array (
                    'description' => '模板表达式。',
                    'type' => 'string',
                    'example' => 'SELECT * FROM resources;',
                  ),
                  'Name' => 
                  array (
                    'description' => '模板名称。',
                    'type' => 'string',
                    'example' => '查询我的所有资源。',
                  ),
                  'Description' => 
                  array (
                    'description' => '模板描述。',
                    'type' => 'string',
                    'example' => '查询我的所有资源，返回所有的列。',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2023-10-30T01:43:16Z',
                  ),
                  'UpdateTime' => 
                  array (
                    'description' => '更新时间（UTC时间）。',
                    'type' => 'string',
                    'example' => '2023-10-30T01:43:16Z',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotExists.QueryId',
            'errorMessage' => 'The QueryId does not exist.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6D98D9B0-318D-56A4-910C-93B5F945AF2B\\",\\n  \\"SavedQuery\\": {\\n    \\"QueryId\\": \\"cq-GeAck****\\",\\n    \\"Expression\\": \\"SELECT * FROM resources;\\",\\n    \\"Name\\": \\"查询我的所有资源。\\",\\n    \\"Description\\": \\"查询我的所有资源，返回所有的列。\\",\\n    \\"CreateTime\\": \\"2023-10-30T01:43:16Z\\",\\n    \\"UpdateTime\\": \\"2023-10-30T01:43:16Z\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取自定义查询模板',
    ),
    'ListSavedQueries' => 
    array (
      'summary' => '列出所有的自定义查询模板。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的最大数据条数。

取值范围：1~50。

默认值：50。',
            'type' => 'string',
            'required' => false,
            'example' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D696E6EF-3A6D-5770-801E-4982081FE4D0',
              ),
              'MaxResults' => 
              array (
                'description' => '每页的最大数据条数。',
                'type' => 'string',
                'example' => '10',
              ),
              'NextToken' => 
              array (
                'description' => '下一个查询开始的Token。',
                'type' => 'string',
                'example' => 'AAAAARfZmVDe9NvRXloR5+8CK9nNJufMdRA7W1miLC1P****',
              ),
              'SavedQueries' => 
              array (
                'description' => '自定义查询模板信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '自定义查询模板信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'QueryId' => 
                    array (
                      'description' => '模板ID。',
                      'type' => 'string',
                      'example' => 'cq-GeAck****',
                    ),
                    'Name' => 
                    array (
                      'description' => '模板名称。',
                      'type' => 'string',
                      'example' => '查询我的所有资源。',
                    ),
                    'Description' => 
                    array (
                      'description' => '模板描述。',
                      'type' => 'string',
                      'example' => '查询我的所有资源，返回所有的列。',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间（UTC时间）。',
                      'type' => 'string',
                      'required' => false,
                      'example' => '2022-01-13T05:50:35Z',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '更新时间（UTC时间）。',
                      'type' => 'string',
                      'example' => '2023-03-14 10:27:07',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D696E6EF-3A6D-5770-801E-4982081FE4D0\\",\\n  \\"MaxResults\\": \\"10\\",\\n  \\"NextToken\\": \\"AAAAARfZmVDe9NvRXloR5+8CK9nNJufMdRA7W1miLC1P****\\",\\n  \\"SavedQueries\\": [\\n    {\\n      \\"QueryId\\": \\"cq-GeAck****\\",\\n      \\"Name\\": \\"查询我的所有资源。\\",\\n      \\"Description\\": \\"查询我的所有资源，返回所有的列。\\",\\n      \\"CreateTime\\": \\"2022-01-13T05:50:35Z\\",\\n      \\"UpdateTime\\": \\"2023-03-14 10:27:07\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '列出所有的自定义查询模板',
    ),
    'UpdateSavedQuery' => 
    array (
      'summary' => '更新自定义查询模板。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板描述。

长度范围：1~256个字符或汉字。',
            'type' => 'string',
            'required' => false,
            'example' => '查询我的所有资源，返回所有的列。',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板名称。

- 长度范围：1~64个字符或汉字。
- 格式：允许输入汉字、英文字母、数字、下划线（_）和短划线（-）。
- 模板名称必须唯一。',
            'type' => 'string',
            'required' => false,
            'example' => '查询我的所有资源。',
          ),
        ),
        2 => 
        array (
          'name' => 'Expression',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板表达式。',
            'type' => 'string',
            'required' => false,
            'example' => 'SELECT * FROM resources;',
          ),
        ),
        3 => 
        array (
          'name' => 'QueryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cq-GeAck****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D696E6EF-3A6D-5770-801E-4982081FE4D0',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotExists.QueryId',
            'errorMessage' => 'The QueryId does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'LengthExceedLimit.Description',
            'errorMessage' => 'The length of parameter Description exceed limit.',
          ),
          2 => 
          array (
            'errorCode' => 'LengthExceedLimit.Expression',
            'errorMessage' => 'The length of parameter Expression exceed limit.',
          ),
          3 => 
          array (
            'errorCode' => 'LengthExceedLimit.Name',
            'errorMessage' => 'The length of parameter Name exceed limit.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.Name',
            'errorMessage' => 'The specified parameter Name is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'AlreadyExists.Name',
            'errorMessage' => 'The Query Template Name already exists.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D696E6EF-3A6D-5770-801E-4982081FE4D0\\"\\n}","type":"json"}]',
      'title' => '更新自定义查询模板',
    ),
    'DeleteSavedQuery' => 
    array (
      'summary' => '删除自定义查询模板。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'QueryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。

您可以调用[ListSavedQueries](~~ListSavedQueries~~)获取模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sq-GeAck****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D170D58E-6256-5344-8F5E-922EC9ECB7EA',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotExists.QueryId',
            'errorMessage' => 'The QueryId does not exist.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D170D58E-6256-5344-8F5E-922EC9ECB7EA\\"\\n}","type":"json"}]',
      'title' => '删除自定义查询模板',
    ),
    'ExecuteSQLQuery' => 
    array (
      'summary' => '使用SQL查询当前账号下有权限访问的资源。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Expression',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待执行SQL语句。

待执行SQL语句长度小于2000个字符。

关于SQL语法的更多信息，请参见[SQL基本语法](~~2539395~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'SELECT * FROM resources LIMIT 100;',
          ),
        ),
        1 => 
        array (
          'name' => 'Scope',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索的范围。

取值为资源组ID，表示搜索资源组中的资源。

关于如何获取资源组ID，请参见[ListResourceGroups](~~158855~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmzawhxxc****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D696E6EF-3A6D-5770-801E-4982081FE4D0',
              ),
              'Columns' => 
              array (
                'description' => '列信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '列信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'description' => '列名。',
                      'type' => 'string',
                      'example' => 'resource_id',
                    ),
                    'Type' => 
                    array (
                      'description' => '列类型。',
                      'type' => 'string',
                      'example' => 'varchar',
                    ),
                  ),
                ),
              ),
              'Rows' => 
              array (
                'description' => '搜索结果数组。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '结果行信息。',
                  'type' => 'any',
                  'example' => '[
      "vsw-xxx"  
]',
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'ExceedLimit.ExecuteTime',
            'errorMessage' => 'The execution time has exceeded the limit. Please check for complex queries or large data volume, and optimize accordingly.',
          ),
          1 => 
          array (
            'errorCode' => 'SQLExecuteError',
            'errorMessage' => 'Failed to execute the SQL statement.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidSearch.SQL',
            'errorMessage' => 'Error: %s',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.Scope',
            'errorMessage' => 'The Scope is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'LengthExceedLimit.Expression',
            'errorMessage' => 'The length of parameter Expression exceed limit.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D696E6EF-3A6D-5770-801E-4982081FE4D0\\",\\n  \\"Columns\\": [\\n    {\\n      \\"Name\\": \\"resource_id\\",\\n      \\"Type\\": \\"varchar\\"\\n    }\\n  ],\\n  \\"Rows\\": [\\n    \\"[\\\\n      \\\\\\"vsw-xxx\\\\\\"  \\\\n]\\"\\n  ]\\n}","type":"json"}]',
      'title' => '使用SQL查询当前账号的资源',
    ),
    'ExecuteMultiAccountSQLQuery' => 
    array (
      'summary' => '使用SQL查询跨账号的资源。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Expression',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待执行SQL语句。

待执行SQL语句长度小于2000个字符。

关于SQL语法的更多信息，请参见[SQL基本语法](~~2539395~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'SELECT * FROM resources LIMIT 100;',
          ),
        ),
        1 => 
        array (
          'name' => 'Scope',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索的账号范围。取值： 
- 资源目录ID，表示搜索管理账号和所有成员中的资源。
- Root资源夹ID，表示搜索Root资源夹及子资源夹下的所有成员中的资源。
- 资源夹ID，表示搜索指定资源夹下所有成员中的资源。
- 成员ID，表示搜索指定成员中的资源。
- 成员ID/资源组ID，表示搜索指定成员的资源组中的资源。

关于如何获取资源目录ID、Root资源夹ID、资源夹ID、成员ID和资源组ID，请分别参见[GetResourceDirectory](~~159995~~)、[ListFoldersForParent](~~159997~~)、[ListFoldersForParent](~~159997~~)、[ListAccounts](~~160016~~)和[ListResourceGroups](~~158855~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'rd-r4****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '44C8A952-D6B0-5BC8-82D5-93BA02E26F2E',
              ),
              'Columns' => 
              array (
                'description' => '列信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '列信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'description' => '列名。',
                      'type' => 'string',
                      'example' => 'resource_id',
                    ),
                    'Type' => 
                    array (
                      'description' => '列类型。',
                      'type' => 'string',
                      'example' => 'varchar',
                    ),
                  ),
                ),
              ),
              'Rows' => 
              array (
                'description' => '搜索结果数组。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '结果行信息。',
                  'type' => 'any',
                  'example' => '[
      "vsw-xxx“
]',
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotExists.ResourceDirectory',
            'errorMessage' => 'The resource directory for the account is not enabled.',
          ),
          1 => 
          array (
            'errorCode' => 'NotExists.ResourceDirectory.FolderId',
            'errorMessage' => 'The specified folder does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'ExceedLimit.ExecuteTime',
            'errorMessage' => 'The execution time has exceeded the limit. Please check for complex queries or large data volume, and optimize accordingly.',
          ),
          1 => 
          array (
            'errorCode' => 'SQLExecuteError',
            'errorMessage' => 'Failed to execute the SQL statement.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidSearch.SQL',
            'errorMessage' => 'Error: %s',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.Scope',
            'errorMessage' => 'The Scope is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'ServiceNotEnabled.SpecifiedAccount',
            'errorMessage' => 'ResourceCenter service of the specified account is not enabled.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"44C8A952-D6B0-5BC8-82D5-93BA02E26F2E\\",\\n  \\"Columns\\": [\\n    {\\n      \\"Name\\": \\"resource_id\\",\\n      \\"Type\\": \\"varchar\\"\\n    }\\n  ],\\n  \\"Rows\\": [\\n    \\"[\\\\n      \\\\\\"vsw-xxx“\\\\n]\\"\\n  ]\\n}","type":"json"}]',
      'title' => '使用SQL查询跨账号的资源',
    ),
    'CreateFilter' => 
    array (
      'summary' => '创建筛选条件。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FilterName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '筛选条件名称。',
            'type' => 'string',
            'required' => true,
            'example' => '我的筛选条件。',
          ),
        ),
        1 => 
        array (
          'name' => 'FilterConfiguration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '筛选条件。',
            'type' => 'string',
            'required' => true,
            'example' => '{
  "regions": [],
  "tagFilters": [
    [{ "type": "notContainTagKey", "tagKey": "xxx", "tagValue": "" }],
    [{ "tagKey": "xxx", "tagValue": "xxx" }]
  ],
  "resourceTypes": [
    "ACS::ECS::AutoSnapshotPolicy"
  ]
}
',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EEF1EE1F-50F6-5494-B3DA-8F597DEB31BF',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.FilterConfiguration',
            'errorMessage' => 'The specified parameter FilterConfiguration is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'AlreadyExists.FilterName',
            'errorMessage' => 'The filter name of current user already exists.',
          ),
          2 => 
          array (
            'errorCode' => 'LengthExceedLimit.FilterConfiguration',
            'errorMessage' => 'The length of parameter FilterConfiguration exceed limit.',
          ),
          3 => 
          array (
            'errorCode' => 'LengthExceedLimit.FilterName',
            'errorMessage' => 'The length of parameter FilterName exceed limit.',
          ),
          4 => 
          array (
            'errorCode' => 'ExceedLimit.User.Filter',
            'errorMessage' => 'The maximum number of Filters is exceeded.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.FilterName',
            'errorMessage' => 'The specified parameter FilterName is not valid.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EEF1EE1F-50F6-5494-B3DA-8F597DEB31BF\\"\\n}","type":"json"}]',
      'title' => '创建筛选条件',
    ),
    'UpdateFilter' => 
    array (
      'summary' => '更新筛选条件。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FilterName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '筛选条件名称。',
            'type' => 'string',
            'required' => true,
            'example' => '我的筛选条件。',
          ),
        ),
        1 => 
        array (
          'name' => 'FilterConfiguration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '筛选条件配置。',
            'type' => 'string',
            'required' => true,
            'example' => '{
  "regions": [],
  "tagFilters": [
    [{ "type": "notContainTagKey", "tagKey": "xxx", "tagValue": "" }],
    [{ "tagKey": "xxx", "tagValue": "xxx" }]
  ],
  "resourceTypes": [
    "ACS::ECS::AutoSnapshotPolicy"
  ]
}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3C5CDBF6-4DB7-53E9-ADDC-5919E3FACF6F',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.FilterConfiguration',
            'errorMessage' => 'The specified parameter FilterConfiguration is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.FilterName',
            'errorMessage' => 'The specified parameter FilterName is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'LengthExceedLimit.FilterConfiguration',
            'errorMessage' => 'The length of parameter FilterConfiguration exceed limit.',
          ),
          3 => 
          array (
            'errorCode' => 'LengthExceedLimit.FilterName',
            'errorMessage' => 'The length of parameter FilterName exceed limit.',
          ),
          4 => 
          array (
            'errorCode' => 'NotExists.FilterName',
            'errorMessage' => 'The filter name of current user not exists.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3C5CDBF6-4DB7-53E9-ADDC-5919E3FACF6F\\"\\n}","type":"json"}]',
      'title' => '更新筛选条件',
    ),
    'ListFilters' => 
    array (
      'summary' => '获取筛选条件列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'AA39FB9C-CB74-5E73-8DFE-3A2B096F0759',
              ),
              'Filters' => 
              array (
                'description' => '筛选条件。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '筛选条件。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FilterName' => 
                    array (
                      'description' => '筛选条件名称。',
                      'type' => 'string',
                      'example' => '我管理的设备',
                    ),
                    'FilterConfiguration' => 
                    array (
                      'description' => '筛选条件。',
                      'type' => 'string',
                      'required' => true,
                      'example' => '{
  "regions": [],
  "tagFilters": [
    [{ "type": "notContainTagKey", "tagKey": "xxx", "tagValue": "" }],
    [{ "tagKey": "xxx", "tagValue": "xxx" }]
  ],
  "resourceTypes": [
    "ACS::ECS::AutoSnapshotPolicy"
  ]
}',
                    ),
                  ),
                ),
              ),
              'DefaultFilterName' => 
              array (
                'description' => '默认筛选条件名称。',
                'type' => 'string',
                'required' => false,
                'example' => '我的筛选条件',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AA39FB9C-CB74-5E73-8DFE-3A2B096F0759\\",\\n  \\"Filters\\": [\\n    {\\n      \\"FilterName\\": \\"我管理的设备\\",\\n      \\"FilterConfiguration\\": \\"{\\\\n  \\\\\\"regions\\\\\\": [],\\\\n  \\\\\\"tagFilters\\\\\\": [\\\\n    [{ \\\\\\"type\\\\\\": \\\\\\"notContainTagKey\\\\\\", \\\\\\"tagKey\\\\\\": \\\\\\"xxx\\\\\\", \\\\\\"tagValue\\\\\\": \\\\\\"\\\\\\" }],\\\\n    [{ \\\\\\"tagKey\\\\\\": \\\\\\"xxx\\\\\\", \\\\\\"tagValue\\\\\\": \\\\\\"xxx\\\\\\" }]\\\\n  ],\\\\n  \\\\\\"resourceTypes\\\\\\": [\\\\n    \\\\\\"ACS::ECS::AutoSnapshotPolicy\\\\\\"\\\\n  ]\\\\n}\\"\\n    }\\n  ],\\n  \\"DefaultFilterName\\": \\"我的筛选条件\\"\\n}","type":"json"}]',
      'title' => '获取筛选条件列表',
    ),
    'DeleteFilter' => 
    array (
      'summary' => '删除筛选条件。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FilterName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '筛选条件名称。',
            'type' => 'string',
            'required' => true,
            'example' => '我的筛选条件',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A4A63E3C-89EC-51F9-9934-C9AF1BCBAAA5',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotExists.FilterName',
            'errorMessage' => 'The filter name of current user not exists.',
          ),
          1 => 
          array (
            'errorCode' => 'LengthExceedLimit.FilterName',
            'errorMessage' => 'The length of parameter FilterName exceed limit.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A4A63E3C-89EC-51F9-9934-C9AF1BCBAAA5\\"\\n}","type":"json"}]',
      'title' => '删除筛选条件',
    ),
    'AssociateDefaultFilter' => 
    array (
      'summary' => '设置默认筛选条件。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FilterName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '筛选条件名称。',
            'type' => 'string',
            'required' => true,
            'example' => '所有ECS实例资源',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54673B22-2001-556A-B394-B8697AA9670B',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotExists.FilterName',
            'errorMessage' => 'The filter name of current user not exists.',
          ),
          1 => 
          array (
            'errorCode' => 'LengthExceedLimit.FilterName',
            'errorMessage' => 'The length of parameter FilterName exceed limit.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"54673B22-2001-556A-B394-B8697AA9670B\\"\\n}","type":"json"}]',
      'title' => '设置默认筛选条件',
    ),
    'DisassociateDefaultFilter' => 
    array (
      'summary' => '取消默认筛选条件。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BCAB07BA-82FA-5DC0-9322-FB7ED726481D',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotExists.DefaultFilter',
            'errorMessage' => 'The default filter of current user not exists.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BCAB07BA-82FA-5DC0-9322-FB7ED726481D\\"\\n}","type":"json"}]',
      'title' => '取消默认筛选条件',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'resourcecenter.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'resourcecenter-intl.aliyuncs.com',
    ),
  ),
);
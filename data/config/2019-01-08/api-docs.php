<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Config',
    'version' => '2019-01-08',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 59560,
      'title' => '资源',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetDiscoveredResourceCounts',
        1 => 'ListDiscoveredResources',
        2 => 'DescribeDiscoveredResource',
        3 => 'GetResourceComplianceTimeline',
        4 => 'GetResourceConfigurationTimeline',
        5 => 'GetDiscoveredResourceSummary',
        6 => 'GetSupportedResourceTypes',
      ),
    ),
    1 => 
    array (
      'id' => 59568,
      'title' => '规则',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeleteConfigRules',
        1 => 'StartConfigRuleEvaluation',
        2 => 'StopConfigRules',
        3 => 'ListConfigRules',
        4 => 'DescribeEvaluationResults',
        5 => 'DescribeCompliance',
        6 => 'DescribeComplianceSummary',
        7 => 'DescribeConfigRule',
        8 => 'PutConfigRule',
        9 => 'PutEvaluations',
        10 => 'ActiveConfigRules',
      ),
    ),
    2 => 
    array (
      'id' => 59580,
      'title' => '资源监控范围',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'StartConfigurationRecorder',
        1 => 'DescribeConfigurationRecorder',
        2 => 'PutConfigurationRecorder',
      ),
    ),
    3 => 
    array (
      'id' => 59584,
      'title' => '投递渠道',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDeliveryChannels',
        1 => 'PutDeliveryChannel',
      ),
    ),
    4 => 
    array (
      'id' => 180882,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetAggregateDiscoveredResource',
        1 => 'ListAggregateDiscoveredResources',
        2 => 'ListRemediationTemplates',
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
    'GetDiscoveredResourceCounts' => 
    array (
      'summary' => '查询当前账号的资源数量。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
- Region：地域。',
            'type' => 'string',
            'required' => false,
            'example' => 'ResourceType',
          ),
        ),
        1 => 
        array (
          'name' => 'MultiAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数计划于2021年06月30日00时00分00秒前下线，其替代功能账号组的API将于2021年05月30日00时00分00秒前上线。如果您正在使用该参数，建议您在2021年05月30日00时00分00秒之后切换为账号组的API。关于账号组，请参见[账号组](~~211534~~)。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'MemberId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数计划于2021年06月30日00时00分00秒前下线，其替代功能账号组的API将于2021年05月30日00时00分00秒前上线。如果您正在使用该参数，建议您在2021年05月30日00时00分00秒之后切换为账号组的API。关于账号组，请参见[账号组](~~211534~~)。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '120886317861****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '无。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54BFA4FB-6E08-4D58-9E83-1A8A3EC80247',
              ),
              'GroupedResourceCounts' => 
              array (
                'description' => '资源数量查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'GroupedResourceCountList' => 
                  array (
                    'description' => '资源数量列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '无。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ResourceCount' => 
                        array (
                          'description' => '分组下统计的资源数量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '10',
                        ),
                        'GroupName' => 
                        array (
                          'description' => '资源统计的分组名称。',
                          'type' => 'string',
                          'example' => 'ACS::ECS::SecurityGroup',
                        ),
                      ),
                    ),
                  ),
                  'GroupByKey' => 
                  array (
                    'description' => '资源统计的分组维度。',
                    'type' => 'string',
                    'example' => 'ResourceType',
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
            'errorCode' => 'MemberNotBelongToMaster',
            'errorMessage' => 'The specified member does not belong to your organization.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountNotExisted',
            'errorMessage' => 'Your account does not exist.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54BFA4FB-6E08-4D58-9E83-1A8A3EC80247\\",\\n  \\"GroupedResourceCounts\\": {\\n    \\"GroupedResourceCountList\\": [\\n      {\\n        \\"ResourceCount\\": 10,\\n        \\"GroupName\\": \\"ACS::ECS::SecurityGroup\\"\\n      }\\n    ],\\n    \\"GroupByKey\\": \\"ResourceType\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetDiscoveredResourceCountsResponse>\\n\\t<RequestId>54BFA4FB-6E08-4D58-9E83-1A8A3EC80247</RequestId>\\n\\t<GroupedResourceCounts>\\n\\t\\t<GroupedResourceCountList>\\n\\t\\t\\t<GroupName>ACS::ECS::NetworkInterface</GroupName>\\n\\t\\t\\t<ResourceCount>13</ResourceCount>\\n\\t\\t</GroupedResourceCountList>\\n\\t\\t<GroupedResourceCountList>\\n\\t\\t\\t<GroupName>ACS::ECS::SecurityGroup</GroupName>\\n\\t\\t\\t<ResourceCount>10</ResourceCount>\\n\\t\\t</GroupedResourceCountList>\\n\\t\\t<GroupByKey>ResourceType</GroupByKey>\\n\\t</GroupedResourceCounts>\\n</GetDiscoveredResourceCountsResponse>","errorExample":""}]',
      'title' => '查询资源数量',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListDiscoveredResources' => 
    array (
      'summary' => '查询当前账号资源列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'eni-hp31cqoba96jagtz****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceDeleted',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源状态。取值：

- 0：已删除。
- 1（默认值）：保有中。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。取值范围：1~100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源列表的页码。起始值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceTypes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。多个资源类型用半角逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'ACS::ECS::NetworkInterface',
          ),
        ),
        5 => 
        array (
          'name' => 'Regions',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域。多个地域用半角逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-huhehaote',
          ),
        ),
        6 => 
        array (
          'name' => 'MultiAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数计划于2021年06月30日00时00分00秒前下线，其替代功能账号组的API将于2021年05月30日00时00分00秒前上线。如果您正在使用该参数，建议您在2021年05月30日00时00分00秒之后切换为账号组的API。关于账号组，请参见[账号组](~~211534~~)。 ',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'MemberId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数计划于2021年06月30日00时00分00秒前下线，其替代功能账号组的API将于2021年05月30日00时00分00秒前上线。如果您正在使用该参数，建议您在2021年05月30日00时00分00秒之后切换为账号组的API。关于账号组，请参见[账号组](~~211534~~)。 ',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '120886341261****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '无。',
            'type' => 'object',
            'properties' => 
            array (
              'DiscoveredResourceProfiles' => 
              array (
                'description' => '资源列表结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'DiscoveredResourceProfileList' => 
                  array (
                    'description' => '资源列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '无。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ResourceType' => 
                        array (
                          'description' => '资源类型。',
                          'type' => 'string',
                          'example' => 'ACS::ECS::NetworkInterface',
                        ),
                        'Region' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-huhehaote',
                        ),
                        'ResourceCreationTime' => 
                        array (
                          'description' => '资源创建时间戳。
',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1618675206000',
                        ),
                        'Tags' => 
                        array (
                          'description' => '资源标签。
',
                          'type' => 'string',
                          'example' => '{\\"key1\\":[\\"value2\\"]}',
                        ),
                        'AccountId' => 
                        array (
                          'description' => '阿里云账号ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '120886317861****',
                        ),
                        'ResourceId' => 
                        array (
                          'description' => '资源ID。',
                          'type' => 'string',
                          'example' => 'eni-hp31cqoba96jagtz****',
                        ),
                        'ResourceName' => 
                        array (
                          'description' => '资源名称。',
                          'type' => 'string',
                          'example' => 'Cloud Firewall',
                        ),
                        'ResourceDeleted' => 
                        array (
                          'description' => '资源删除状态。取值：
- 1：未删除。
- 0：已删除。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'ResourceStatus' => 
                        array (
                          'description' => '资源状态。资源的状态取决于各云服务对其的定义，该参数可能为空。
例如：

- 当资源类型为ACS::ECS::Instance时，由于ECS实例有状态，因此该参数为Running或Stopped。

- 当资源类型为ACS::OSS::Bucket时，由于OSS Bucket无状态，因此该参数为空。',
                          'type' => 'string',
                          'example' => 'InUse',
                        ),
                      ),
                    ),
                  ),
                  'PageNumber' => 
                  array (
                    'description' => '资源列表的页码。起始值：1。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '分页查询时设置的每页行数。取值范围：1~100。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '资源总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '129',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C7817373-78CB-4F9A-8AFA-E7A88E9D64A2',
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
            'errorCode' => 'MemberNotBelongToMaster',
            'errorMessage' => 'The specified member does not belong to your organization.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountNotExisted',
            'errorMessage' => 'Your account does not exist.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DiscoveredResourceProfiles\\": {\\n    \\"DiscoveredResourceProfileList\\": [\\n      {\\n        \\"ResourceType\\": \\"ACS::ECS::NetworkInterface\\",\\n        \\"Region\\": \\"cn-huhehaote\\",\\n        \\"ResourceCreationTime\\": 1618675206000,\\n        \\"Tags\\": \\"{\\\\\\\\\\\\\\"key1\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"value2\\\\\\\\\\\\\\"]}\\",\\n        \\"AccountId\\": 0,\\n        \\"ResourceId\\": \\"eni-hp31cqoba96jagtz****\\",\\n        \\"ResourceName\\": \\"Cloud Firewall\\",\\n        \\"ResourceDeleted\\": 1,\\n        \\"ResourceStatus\\": \\"InUse\\"\\n      }\\n    ],\\n    \\"PageNumber\\": 10,\\n    \\"PageSize\\": 1,\\n    \\"TotalCount\\": 129\\n  },\\n  \\"RequestId\\": \\"C7817373-78CB-4F9A-8AFA-E7A88E9D64A2\\"\\n}","errorExample":""},{"type":"xml","example":"<ListDiscoveredResourcesResponse>\\r\\n\\t<DiscoveredResourceProfiles>\\r\\n\\t\\t<TotalCount>129</TotalCount>\\r\\n\\t\\t<PageSize>1</PageSize>\\r\\n\\t\\t<PageNumber>10</PageNumber>\\r\\n\\t\\t<DiscoveredResourceProfileList>\\r\\n\\t\\t\\t<AccountId>120886317861****</AccountId>\\r\\n\\t\\t\\t<ResourceCreationTime>1618675206000</ResourceCreationTime>\\r\\n\\t\\t\\t<ResourceId>eni-hp31cqoba96jagtz****</ResourceId>\\r\\n\\t\\t\\t<ResourceName>Cloud Firewall</ResourceName>\\r\\n\\t\\t\\t<Region>cn-huhehaote</Region>\\r\\n\\t\\t\\t<ResourceStatus>InUse</ResourceStatus>\\r\\n\\t\\t\\t<ResourceType>ACS::ECS::NetworkInterface</ResourceType>\\r\\n\\t\\t\\t<ResourceDeleted>1</ResourceDeleted>\\r\\n\\t\\t\\t<Tags>{\\\\\\"key1\\\\\\":[\\\\\\"value2\\\\\\"]}</Tags>\\r\\n\\t\\t</DiscoveredResourceProfileList>\\r\\n\\t</DiscoveredResourceProfiles>\\r\\n\\t<RequestId>C7817373-78CB-4F9A-8AFA-E7A88E9D64A2</RequestId>\\r\\n</ListDiscoveredResourcesResponse>\\t","errorExample":""}]',
      'title' => '查询资源列表',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDiscoveredResource' => 
    array (
      'summary' => '查询指定资源的配置详情。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'adaf.zhilon****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。

> 您可以通过GetSupportedResourceTypes接口获取配置审计支持的资源类型列表。更多信息，请参见[GetSupportedResourceTypes](~~169618~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ACS::CDN::Domain',
          ),
        ),
        2 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'MultiAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数计划于2021年06月30日00时00分00秒前下线，其替代功能账号组的API将于2021年05月30日00时00分00秒前上线。如果您正在使用该参数，建议您在2021年05月30日00时00分00秒之后切换为账号组的API。关于账号组，请参见[账号组](~~211534~~)。 ',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'MemberId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数计划于2021年06月30日00时00分00秒前下线，其替代功能账号组的API将于2021年05月30日00时00分00秒前上线。如果您正在使用该参数，建议您在2021年05月30日00时00分00秒之后切换为账号组的API。关于账号组，请参见[账号组](~~211534~~)。 ',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123456789',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '无。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E4D71ACE-6B0A-46E0-8352-56952378CC7F',
              ),
              'DiscoveredResourceDetail' => 
              array (
                'description' => '资源详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'AvailabilityZone' => 
                  array (
                    'description' => '资源可用区。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou-h',
                  ),
                  'ResourceType' => 
                  array (
                    'description' => '资源类型。',
                    'type' => 'string',
                    'example' => 'ACS::CDN::Domain',
                  ),
                  'Configuration' => 
                  array (
                    'description' => '资源的完整配置信息。',
                    'type' => 'string',
                    'example' => '{\\"Description\\":\\"\\",\\"SslProtocol\\":\\"off\\",\\"DomainName\\":\\"adaf.zhilong****\\",\\"GmtModified\\":\\"2019-04-10T03:11Z\\",\\"CdnType\\":\\"web\\",\\"GmtCreated\\":\\"2016-03-03T01:31:35Z\\",\\"Cname\\":\\"adaf.zhilong.me.w.kun****.com\\",\\"Sources\\":{\\"Source\\":[{\\"Type\\":\\"oss\\",\\"Content\\":\\"test2-mh.oss-cn-hangzhou.aliyuncs.com\\",\\"Priority\\":\\"20\\",\\"Port\\":80,\\"Weight\\":\\"10\\"}]},\\"DomainStatus\\":\\"offline\\",\\"Sandbox\\":\\"\\"}',
                  ),
                  'Region' => 
                  array (
                    'description' => '地域ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'ResourceCreationTime' => 
                  array (
                    'description' => '资源创建时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1456968695000',
                  ),
                  'Tags' => 
                  array (
                    'description' => '资源标签。',
                    'type' => 'string',
                    'example' => '{\\"\\"hc\\"\\":[\\"\\"value2\\"\\"]}',
                  ),
                  'AccountId' => 
                  array (
                    'description' => '阿里云账号ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '987654321',
                  ),
                  'ResourceId' => 
                  array (
                    'description' => '资源ID。',
                    'type' => 'string',
                    'example' => 'adaf.zhilon****',
                  ),
                  'ResourceDeleted' => 
                  array (
                    'description' => '资源删除状态。取值：
- 1：未删除。
- 0：已删除。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'ResourceName' => 
                  array (
                    'description' => '资源名称。',
                    'type' => 'string',
                    'example' => 'test-resource-name',
                  ),
                  'ResourceStatus' => 
                  array (
                    'description' => '资源状态。资源的状态取决于各云服务对其的定义，该参数可能为空。例如：

- 当资源类型为ACS::ECS::Instance时，由于ECS实例有状态，因此该参数为Running或Stopped。

- 当资源类型为ACS::OSS::Bucket时，由于OSS Bucket无状态，因此该参数为空。

- 当资源类型为ACS::CDN::Domain时，该参数取值为online、offline等。',
                    'type' => 'string',
                    'example' => 'offline',
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
            'errorCode' => 'MemberNotBelongToMaster',
            'errorMessage' => 'The specified member does not belong to your organization.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountNotExisted',
            'errorMessage' => 'Your account does not exist.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4D71ACE-6B0A-46E0-8352-56952378CC7F\\",\\n  \\"DiscoveredResourceDetail\\": {\\n    \\"AvailabilityZone\\": \\"cn-hangzhou-h\\",\\n    \\"ResourceType\\": \\"ACS::CDN::Domain\\",\\n    \\"Configuration\\": \\"{\\\\\\\\\\\\\\"Description\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"SslProtocol\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"off\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"DomainName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"adaf.zhilong****\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"GmtModified\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"2019-04-10T03:11Z\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"CdnType\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"web\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"GmtCreated\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"2016-03-03T01:31:35Z\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Cname\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"adaf.zhilong.me.w.kun****.com\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Sources\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"Source\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"Type\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"oss\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Content\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"test2-mh.oss-cn-hangzhou.aliyuncs.com\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Priority\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"20\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Port\\\\\\\\\\\\\\":80,\\\\\\\\\\\\\\"Weight\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"10\\\\\\\\\\\\\\"}]},\\\\\\\\\\\\\\"DomainStatus\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"offline\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Sandbox\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"\\\\\\\\\\\\\\"}\\",\\n    \\"Region\\": \\"cn-hangzhou\\",\\n    \\"ResourceCreationTime\\": 1456968695000,\\n    \\"Tags\\": \\"{\\\\\\\\\\\\\\"\\\\\\\\\\\\\\"hc\\\\\\\\\\\\\\"\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"\\\\\\\\\\\\\\"value2\\\\\\\\\\\\\\"\\\\\\\\\\\\\\"]}\\",\\n    \\"AccountId\\": 987654321,\\n    \\"ResourceId\\": \\"adaf.zhilon****\\",\\n    \\"ResourceDeleted\\": 1,\\n    \\"ResourceName\\": \\"test-resource-name\\",\\n    \\"ResourceStatus\\": \\"offline\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDiscoveredResourceResponse>\\r\\n\\t<RequestId>E4D71ACE-6B0A-46E0-8352-56952378CC7F</RequestId>\\r\\n\\t<DiscoveredResourceDetail>\\r\\n\\t\\t<accountId>987654321</accountId>\\r\\n\\t\\t<resourceId>adaf.zhilon****</resourceId>\\r\\n\\t\\t<resourceStatus>offline</resourceStatus>\\r\\n\\t\\t<configuration>{\\\\\\"Description\\\\\\":\\\\\\"\\\\\\",\\\\\\"SslProtocol\\\\\\":\\\\\\"off\\\\\\",\\\\\\"DomainName\\\\\\":\\\\\\"adaf.zhilong****\\\\\\",\\\\\\"GmtModified\\\\\\":\\\\\\"2019-04-10T03:11Z\\\\\\",\\\\\\"CdnType\\\\\\":\\\\\\"web\\\\\\",\\\\\\"GmtCreated\\\\\\":\\\\\\"2016-03-03T01:31:35Z\\\\\\",\\\\\\"Cname\\\\\\":\\\\\\"adaf.zhilong.me.w.kun****.com\\\\\\",\\\\\\"Sources\\\\\\":{\\\\\\"Source\\\\\\":[{\\\\\\"Type\\\\\\":\\\\\\"oss\\\\\\",\\\\\\"Content\\\\\\":\\\\\\"test2-mh.oss-cn-hangzhou.aliyuncs.com\\\\\\",\\\\\\"Priority\\\\\\":\\\\\\"20\\\\\\",\\\\\\"Port\\\\\\":80,\\\\\\"Weight\\\\\\":\\\\\\"10\\\\\\"}]},\\\\\\"DomainStatus\\\\\\":\\\\\\"offline\\\\\\",\\\\\\"Sandbox\\\\\\":\\\\\\"\\\\\\"}</configuration>\\r\\n\\t\\t<resourceDeleted>1</resourceDeleted>\\r\\n\\t\\t<resourceName>test-resource-name</resourceName>\\r\\n\\t\\t<region>cn-hangzhou</region>\\r\\n\\t\\t<availabilityZone>cn-hangzhou-h</availabilityZone>\\r\\n\\t\\t<resourceCreationTime>1456968695000</resourceCreationTime>\\r\\n\\t\\t<tags>{\\\\\\"\\\\\\"hc\\\\\\"\\\\\\":[\\\\\\"\\\\\\"value2\\\\\\"\\\\\\"]}</tags>\\r\\n\\t\\t<resourceType>ACS::CDN::Domain</resourceType>\\r\\n\\t</DiscoveredResourceDetail>\\r\\n</DescribeDiscoveredResourceResponse>\\t","errorExample":""}]',
      'title' => '查询资源配置详情',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetResourceComplianceTimeline' => 
    array (
      'summary' => '查询指定资源的合规时间线。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ACS::ECS::Instance',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'i-uf6072y75i2cevjq****',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间戳。默认为发起调用前的30天。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1593599340010',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间戳。默认为发起调用时的时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1593599342230',
          ),
        ),
        4 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。取值范围：1~100。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'MultiAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数计划于2021年06月30日00时00分00秒前下线，其替代功能账号组的API将于2021年05月30日00时00分00秒前上线。如果您正在使用该参数，建议您在2021年05月30日00时00分00秒之后切换为账号组的API。关于账号组，请参见[账号组](~~211534~~)。 ',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'MemberId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数计划于2021年06月30日00时00分00秒前下线，其替代功能账号组的API将于2021年05月30日00时00分00秒前上线。如果您正在使用该参数，建议您在2021年05月30日00时00分00秒之后切换为账号组的API。关于账号组，请参见[账号组](~~211534~~)。 ',
            'type' => 'string',
            'required' => false,
            'example' => '123456789',
          ),
        ),
        7 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        8 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '无。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DE9FFFE5-FCAD-4B24-9546-BF49273C562B',
              ),
              'ResourceComplianceTimeline' => 
              array (
                'description' => '资源合规时间线。',
                'type' => 'object',
                'properties' => 
                array (
                  'NextToken' => 
                  array (
                    'description' => '下一个查询开始的Token。',
                    'type' => 'string',
                    'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                  ),
                  'Limit' => 
                  array (
                    'description' => '分页查询时设置的每页行数。取值范围：1~100。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'ComplianceList' => 
                  array (
                    'description' => '资源合规时间线列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '无。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Tags' => 
                        array (
                          'description' => '资源标签。',
                          'type' => 'string',
                          'example' => '{\\"project\\":[\\"efg\\"]}',
                        ),
                        'AccountId' => 
                        array (
                          'description' => '阿里云账号ID。',
                          'type' => 'string',
                          'example' => '120390217529****',
                        ),
                        'AvailabilityZone' => 
                        array (
                          'description' => '资源可用区。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-f',
                        ),
                        'ResourceType' => 
                        array (
                          'description' => '资源类型。',
                          'type' => 'string',
                          'example' => 'ACS::ECS::Instance',
                        ),
                        'ResourceCreateTime' => 
                        array (
                          'description' => '资源创建时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1203902175293610',
                        ),
                        'Region' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'Configuration' => 
                        array (
                          'description' => '资源关联的规则列表和规则合规详情。',
                          'type' => 'string',
                          'example' => '{\\"managetest-required-tags\\":[{},{\\"configRuleId\\":\\"cr-656d5180a8d1009c****\\",\\"configRuleArn\\":\\"acs:config::120390217529****:config-rule/cr-656d5180a8d1009c****\\",\\"configRuleName\\":\\"managetest-required-tags\\",\\"complianceType\\":\\"NON_COMPLIANT\\",\\"riskLevel\\":1,\\"annotation\\":\\"{\\\\\\"desiredValue\\\\\\":\\\\\\"key1\\\\\\",\\\\\\"reason\\\\\\":\\\\\\"No tag with name key1\\\\\\"}\\",\\"invokingEventMessageType\\":\\"ConfigurationItemChangeNotification\\"}]}',
                        ),
                        'CaptureTime' => 
                        array (
                          'description' => '合规评估时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1203902175292305',
                        ),
                        'ConfigurationDiff' => 
                        array (
                          'description' => '合规状态发生变化的规则详情。',
                          'type' => 'string',
                          'example' => '{\\"Compliance\\":{\\"complianceType\\":\\"NON_COMPLIANT\\",\\"count\\":2},\\"ConfigRuleList\\":[{\\"configRuleId\\":\\"cr-7b6e5180a8d100cc****\\",\\"configRuleArn\\":\\"acs:config::120390217529****:config-rule/cr-7b6e5180a8d100cc****\\",\\"configRuleName\\":\\"required-tags\\",\\"complianceType\\":\\"COMPLIANT\\",\\"riskLevel\\":1,\\"invokingEventMessageType\\":\\"ConfigurationItemChangeNotification\\"}]}',
                        ),
                        'ResourceId' => 
                        array (
                          'description' => '资源ID。',
                          'type' => 'string',
                          'example' => 'i-uf6072y75i2cevjq****',
                        ),
                        'ResourceName' => 
                        array (
                          'description' => '资源名称。',
                          'type' => 'string',
                          'example' => 'test-resource',
                        ),
                        'ResourceStatus' => 
                        array (
                          'description' => '资源状态。资源状态取决于各云服务对其的定义，该参数可能为空。例如：

- 当资源类型为ACS::ECS::Instance时，由于ECS实例有状态，因此该参数为Running或Stopped。

- 当资源类型为ACS::OSS::Bucket时，由于OSS Bucket无状态，因此该参数为空。',
                          'type' => 'string',
                          'example' => 'Running',
                        ),
                      ),
                    ),
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '历史合规结果总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountNotExisted',
            'errorMessage' => 'Your account does not exist.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DE9FFFE5-FCAD-4B24-9546-BF49273C562B\\",\\n  \\"ResourceComplianceTimeline\\": {\\n    \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n    \\"Limit\\": 10,\\n    \\"ComplianceList\\": [\\n      {\\n        \\"Tags\\": \\"{\\\\\\\\\\\\\\"project\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"efg\\\\\\\\\\\\\\"]}\\",\\n        \\"AccountId\\": \\"120390217529****\\",\\n        \\"AvailabilityZone\\": \\"cn-hangzhou-f\\",\\n        \\"ResourceType\\": \\"ACS::ECS::Instance\\",\\n        \\"ResourceCreateTime\\": 1203902175293610,\\n        \\"Region\\": \\"cn-hangzhou\\",\\n        \\"Configuration\\": \\"{\\\\\\\\\\\\\\"managetest-required-tags\\\\\\\\\\\\\\":[{},{\\\\\\\\\\\\\\"configRuleId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"cr-656d5180a8d1009c****\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"configRuleArn\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"acs:config::120390217529****:config-rule/cr-656d5180a8d1009c****\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"configRuleName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"managetest-required-tags\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"complianceType\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"NON_COMPLIANT\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"riskLevel\\\\\\\\\\\\\\":1,\\\\\\\\\\\\\\"annotation\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"{\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"desiredValue\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"key1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\",\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"reason\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"No tag with name key1\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"}\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"invokingEventMessageType\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"ConfigurationItemChangeNotification\\\\\\\\\\\\\\"}]}\\",\\n        \\"CaptureTime\\": 1203902175292305,\\n        \\"ConfigurationDiff\\": \\"{\\\\\\\\\\\\\\"Compliance\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"complianceType\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"NON_COMPLIANT\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"count\\\\\\\\\\\\\\":2},\\\\\\\\\\\\\\"ConfigRuleList\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"configRuleId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"cr-7b6e5180a8d100cc****\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"configRuleArn\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"acs:config::120390217529****:config-rule/cr-7b6e5180a8d100cc****\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"configRuleName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"required-tags\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"complianceType\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"COMPLIANT\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"riskLevel\\\\\\\\\\\\\\":1,\\\\\\\\\\\\\\"invokingEventMessageType\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"ConfigurationItemChangeNotification\\\\\\\\\\\\\\"}]}\\",\\n        \\"ResourceId\\": \\"i-uf6072y75i2cevjq****\\",\\n        \\"ResourceName\\": \\"test-resource\\",\\n        \\"ResourceStatus\\": \\"Running\\"\\n      }\\n    ],\\n    \\"TotalCount\\": 100\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ResourceComplianceTimelineResponse>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0a****</NextToken>\\n    <ComplianceList>\\n        <AccountId>120390217529****</AccountId>\\n        <CaptureTime>1203902175292305</CaptureTime>\\n        <ConfigurationDiff>{\\\\\\"Compliance\\\\\\":{\\\\\\"complianceType\\\\\\":\\\\\\"NON_COMPLIANT\\\\\\",\\\\\\"count\\\\\\":2},\\\\\\"ConfigRuleList\\\\\\":[{\\\\\\"configRuleId\\\\\\":\\\\\\"cr-7b6e5180a8d100cc****\\\\\\",\\\\\\"configRuleArn\\\\\\":\\\\\\"acs:config::120390217529****:config-rule/cr-7b6e5180a8d100cc****\\\\\\",\\\\\\"configRuleName\\\\\\":\\\\\\"required-tags\\\\\\",\\\\\\"complianceType\\\\\\":\\\\\\"COMPLIANT\\\\\\",\\\\\\"riskLevel\\\\\\":1,\\\\\\"invokingEventMessageType\\\\\\":\\\\\\"ConfigurationItemChangeNotification\\\\\\"}]}</ConfigurationDiff>\\n        <Configuration>{\\\\\\"managetest-required-tags\\\\\\":[{},{\\\\\\"configRuleId\\\\\\":\\\\\\"cr-656d5180a8d1009c****\\\\\\",\\\\\\"configRuleArn\\\\\\":\\\\\\"acs:config::120390217529****:config-rule/cr-656d5180a8d1009c****\\\\\\",\\\\\\"configRuleName\\\\\\":\\\\\\"managetest-required-tags\\\\\\",\\\\\\"complianceType\\\\\\":\\\\\\"NON_COMPLIANT\\\\\\",\\\\\\"riskLevel\\\\\\":1,\\\\\\"annotation\\\\\\":\\\\\\"{\\\\\\\\\\\\\\"desiredValue\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"key1\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"reason\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"No tag with name key1\\\\\\\\\\\\\\"}\\\\\\",\\\\\\"invokingEventMessageType\\\\\\":\\\\\\"ConfigurationItemChangeNotification\\\\\\"}]}</Configuration>\\n        <ResourceId>i-uf6072y75i2cevjq****</ResourceId>\\n        <ResourceName>test-resource</ResourceName>\\n        <AvailabilityZone>cn-hangzhou-f</AvailabilityZone>\\n        <Region>cn-hangzhou</Region>\\n        <ResourceStatus>Running</ResourceStatus>\\n        <ResourceType>ACS::ECS::Instance</ResourceType>\\n        <ResourceCreateTime>1203902175293610</ResourceCreateTime>\\n        <Tags>{\\\\\\"project\\\\\\":[\\\\\\"efg\\\\\\"]}</Tags>\\n    </ComplianceList>\\n    <Limit>10</Limit>\\n    <RequestId>DE9FFFE5-FCAD-4B24-9546-BF49273C562B</RequestId>\\n</ResourceComplianceTimelineResponse>","errorExample":""}]',
      'title' => '查询资源合规时间线',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetResourceConfigurationTimeline' => 
    array (
      'summary' => '查询指定资源的配置时间线。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'i-bp19xem7lt97h973****',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间戳。默认为发起调用前的30天。



',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1605489195000',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间戳。默认为发起调用时的时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1605489235000',
          ),
        ),
        3 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。取值范围：1~100。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ACS::ECS::Instance',
          ),
        ),
        5 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        6 => 
        array (
          'name' => 'MultiAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数计划于2021年06月30日00时00分00秒前下线，其替代功能账号组的API将于2021年05月30日00时00分00秒前上线。如果您正在使用该参数，建议您在2021年05月30日00时00分00秒之后切换为账号组的API。关于账号组，请参见[账号组](~~211534~~)。 ',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'MemberId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数计划于2021年06月30日00时00分00秒前下线，其替代功能账号组的API将于2021年05月30日00时00分00秒前上线。如果您正在使用该参数，建议您在2021年05月30日00时00分00秒之后切换为账号组的API。关于账号组，请参见[账号组](~~211534~~)。 ',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123456789',
          ),
        ),
        8 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '无。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ED9CD1B3-286C-4E05-A765-5E1E0B9BC2AB',
              ),
              'ResourceConfigurationTimeline' => 
              array (
                'description' => '资源配置时间线。',
                'type' => 'object',
                'properties' => 
                array (
                  'NextToken' => 
                  array (
                    'description' => '下一个查询开始的Token。',
                    'type' => 'string',
                    'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                  ),
                  'Limit' => 
                  array (
                    'description' => '分页查询时设置的每页行数。取值范围：1~100。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'ConfigurationList' => 
                  array (
                    'description' => '资源配置时间线列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '无。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Tags' => 
                        array (
                          'description' => '资源标签。',
                          'type' => 'string',
                          'example' => '"{\\"\\"hc\\"\\":[\\"\\"value2\\"\\"]}"',
                        ),
                        'AccountId' => 
                        array (
                          'description' => '阿里云账号ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '987654321',
                        ),
                        'ResourceEventType' => 
                        array (
                          'description' => '资源变更事件的类型。取值：

- DISCOVERED：新增资源事件。

- MODIFY：修改资源事件。

- REMOVE：删除资源事件。',
                          'type' => 'string',
                          'example' => 'DISCOVERED',
                        ),
                        'AvailabilityZone' => 
                        array (
                          'description' => '可用区。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-h',
                        ),
                        'ResourceType' => 
                        array (
                          'description' => '资源类型。',
                          'type' => 'string',
                          'example' => 'ACS::ECS::Instance',
                        ),
                        'ResourceCreateTime' => 
                        array (
                          'description' => '资源创建时间。',
                          'type' => 'string',
                          'example' => '1605237751000',
                        ),
                        'Region' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'CaptureTime' => 
                        array (
                          'description' => '配置变更时间戳。',
                          'type' => 'string',
                          'example' => '1605316711000',
                        ),
                        'ConfigurationDiff' => 
                        array (
                          'description' => '配置资源关系变更信息。',
                          'type' => 'string',
                          'example' => '{\\"ExpiredTime\\":[\\"2020-10-26T16:00Z\\",\\"2020-11-26T16:00Z\\"]}',
                        ),
                        'ResourceId' => 
                        array (
                          'description' => '资源ID。',
                          'type' => 'string',
                          'example' => 'i-bp19xem7lt97h973****',
                        ),
                        'ResourceName' => 
                        array (
                          'description' => '资源名称。',
                          'type' => 'string',
                          'example' => 'ECS-test',
                        ),
                      ),
                    ),
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '资源配置时间线总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
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
            'errorCode' => 'MemberNotBelongToMaster',
            'errorMessage' => 'The specified member does not belong to your organization.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountNotExisted',
            'errorMessage' => 'Your account does not exist.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ED9CD1B3-286C-4E05-A765-5E1E0B9BC2AB\\",\\n  \\"ResourceConfigurationTimeline\\": {\\n    \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n    \\"Limit\\": 10,\\n    \\"ConfigurationList\\": [\\n      {\\n        \\"Tags\\": \\"\\\\\\"{\\\\\\\\\\\\\\"\\\\\\\\\\\\\\"hc\\\\\\\\\\\\\\"\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"\\\\\\\\\\\\\\"value2\\\\\\\\\\\\\\"\\\\\\\\\\\\\\"]}\\\\\\"\\",\\n        \\"AccountId\\": 987654321,\\n        \\"ResourceEventType\\": \\"DISCOVERED\\",\\n        \\"AvailabilityZone\\": \\"cn-hangzhou-h\\",\\n        \\"ResourceType\\": \\"ACS::ECS::Instance\\",\\n        \\"ResourceCreateTime\\": \\"1605237751000\\",\\n        \\"Region\\": \\"cn-hangzhou\\",\\n        \\"CaptureTime\\": \\"1605316711000\\",\\n        \\"ConfigurationDiff\\": \\"{\\\\\\\\\\\\\\"ExpiredTime\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"2020-10-26T16:00Z\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"2020-11-26T16:00Z\\\\\\\\\\\\\\"]}\\",\\n        \\"ResourceId\\": \\"i-bp19xem7lt97h973****\\",\\n        \\"ResourceName\\": \\"ECS-test\\"\\n      }\\n    ],\\n    \\"TotalCount\\": 100\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetResourceConfigurationTimelineResponse>\\r\\n\\t\\t<RequestId>ED9CD1B3-286C-4E05-A765-5E1E0B9BC2AB</RequestId>\\r\\n\\t\\t<ResourceConfigurationTimeline>\\r\\n\\t\\t\\t<ConfigurationList>\\r\\n\\t\\t\\t\\t<AccountId>987654321</AccountId>\\r\\n\\t\\t\\t\\t<ResourceCreateTime>1605237751000</ResourceCreateTime>\\r\\n\\t\\t\\t\\t<resourceEventType>DISCOVERED</resourceEventType>\\r\\n                <CaptureTime>1605316711000</CaptureTime>\\r\\n\\t\\t\\t\\t<ConfigurationDiff>{\\\\\\"ExpiredTime\\\\\\":[\\\\\\"2020-10-26T16:00Z\\\\\\",\\\\\\"2020-11-26T16:00Z\\\\\\"]}</ConfigurationDiff>\\r\\n\\t\\t\\t\\t<ResourceId>i-bp19xem7lt97h973****</ResourceId>\\r\\n\\t\\t\\t\\t<ResourceName>ECS-test</ResourceName>\\r\\n\\t\\t\\t\\t<Region>cn-hangzhou</Region>\\r\\n\\t\\t\\t\\t<AvailabilityZone>cn-hangzhou-h</AvailabilityZone>\\r\\n\\t\\t\\t\\t<ResourceType>ACS::ECS::Instance</ResourceType>\\r\\n\\t\\t\\t\\t<Tags>{\\\\\\"\\\\\\"hc\\\\\\"\\\\\\":[\\\\\\"\\\\\\"value2\\\\\\"\\\\\\"]}</Tags>\\r\\n\\t\\t\\t</ConfigurationList>\\r\\n\\t\\t\\t<Limit>10</Limit>\\r\\n\\t\\t\\t<NextToken>caeba0bbb2be03f84eb48b699f0a****</NextToken>\\r\\n\\t\\t</ResourceConfigurationTimeline>\\r\\n</GetResourceConfigurationTimelineResponse>","errorExample":""}]',
      'title' => '查询资源配置时间线',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetDiscoveredResourceSummary' => 
    array (
      'summary' => '查询监控中的资源概览。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'MultiAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数计划于2021年06月30日00时00分00秒前下线，其替代功能账号组的API将于2021年05月30日00时00分00秒前上线。如果您正在使用该参数，建议您在2021年05月30日00时00分00秒之后切换为账号组的API。关于账号组，请参见[账号组](~~211534~~)。 ',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        1 => 
        array (
          'name' => 'MemberId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数计划于2021年06月30日00时00分00秒前下线，其替代功能账号组的API将于2021年05月30日00时00分00秒前上线。如果您正在使用该参数，建议您在2021年05月30日00时00分00秒之后切换为账号组的API。关于账号组，请参见[账号组](~~211534~~)。 ',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123456789',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '无。',
            'type' => 'object',
            'properties' => 
            array (
              'DiscoveredResourceSummary' => 
              array (
                'description' => '资源概览。',
                'type' => 'object',
                'properties' => 
                array (
                  'RegionCount' => 
                  array (
                    'description' => '覆盖地域数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '6',
                  ),
                  'ResourceCount' => 
                  array (
                    'description' => '监控中的资源数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '7',
                  ),
                  'ResourceTypeCount' => 
                  array (
                    'description' => '监控中的资源类型数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '45',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2A8FA4FB-2E08-4D28-8F83-1A8A3EC80B1C',
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
            'errorCode' => 'MemberNotBelongToMaster',
            'errorMessage' => 'The specified member does not belong to your organization.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountNotExisted',
            'errorMessage' => 'Your account does not exist.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DiscoveredResourceSummary\\": {\\n    \\"RegionCount\\": 6,\\n    \\"ResourceCount\\": 7,\\n    \\"ResourceTypeCount\\": 45\\n  },\\n  \\"RequestId\\": \\"2A8FA4FB-2E08-4D28-8F83-1A8A3EC80B1C\\"\\n}","errorExample":""},{"type":"xml","example":"<GetDiscoveredResourceSummaryResponse>\\n    <DiscoveredResourceSummary>\\n        <ResourceTypeCount>45</ResourceTypeCount>\\n        <ResourceCount>7</ResourceCount>\\n        <RegionCount>6</RegionCount>\\n    </DiscoveredResourceSummary>\\n    <RequestId>2A8FA4FB-2E08-4D28-8F83-1A8A3EC80B1C</RequestId>\\n</GetDiscoveredResourceSummaryResponse>","errorExample":""}]',
      'title' => '查询资源概览',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetSupportedResourceTypes' => 
    array (
      'summary' => '查询配置审计支持的所有资源类型列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
            'description' => '无。',
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
                  'type' => 'string',
                  'example' => '["ACS::ECS::Instance","ACS::ECS::NetworkInterface"]',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6CE4ABA1-9A57-41A9-8EA9-E8B17D4671CD',
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
            'errorCode' => 'AccountNotExisted',
            'errorMessage' => 'Your account does not exist.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResourceTypes\\": [\\n    \\"[\\\\\\"ACS::ECS::Instance\\\\\\",\\\\\\"ACS::ECS::NetworkInterface\\\\\\"]\\"\\n  ],\\n  \\"RequestId\\": \\"6CE4ABA1-9A57-41A9-8EA9-E8B17D4671CD\\"\\n}","errorExample":""},{"type":"xml","example":"<GetSupportedResourceTypesResponse>\\r\\n\\t\\t<ResourceTypes>ACS::ECS::Instance</ResourceTypes>\\r\\n\\t\\t<ResourceTypes>ACS::ECS::NetworkInterface</ResourceTypes>\\r\\n\\t\\t<RequestId>3A0D65E8-D5C0-4664-B257-950F7A5E33C3</RequestId>\\r\\n</GetSupportedResourceTypesResponse>","errorExample":""}]',
      'title' => '查询配置审计支持的资源类型列表',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteConfigRules' => 
    array (
      'summary' => '批量删除指定规则。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConfigRuleIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则ID。多个规则ID之间以英文逗号（,）分隔，且不能超过20个。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cr-2da35180a8d1008e****,cr-2da35180a8d1008e****',
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
                'example' => '49C1A88F-D163-46DF-84A6-F300229F37AE',
              ),
              'OperateRuleResult' => 
              array (
                'description' => '批量删除规则结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'OperateRuleItemList' => 
                  array (
                    'description' => '批量删除规则结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ErrorCode' => 
                        array (
                          'description' => '错误码。

- 当您删除规则成功时，该参数为空。

- <props="china">当您删除规则失败时，该参数显示错误码。错误码详情，请参见[错误中心](https://error-center.aliyun.com/status/product/Config)。</props>

- <props="intl">当您删除规则失败时，该参数显示错误码。错误码详情，请参见[错误中心](https://error-center.alibabacloud.com/status/product/Config)。</props>',
                          'type' => 'string',
                          'example' => 'ConfigRuleCanNotDelete',
                        ),
                        'Success' => 
                        array (
                          'description' => '删除规则是否成功。取值：
- true：成功
- false： 失败',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'ConfigRuleId' => 
                        array (
                          'description' => '规则ID。',
                          'type' => 'string',
                          'example' => 'cr-2da35180a8d1008e****',
                        ),
                      ),
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
            'errorCode' => 'ConfigRuleCanNotDelete',
            'errorMessage' => 'The config rule cannot be deleted.',
          ),
          2 => 
          array (
            'errorCode' => 'Invalid.ConfigRuleIds.SizeExceed',
            'errorMessage' => 'The maximum number of ConfigRuleIds cannot exceed 20.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountNotExisted',
            'errorMessage' => 'Your account does not exist.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"49C1A88F-D163-46DF-84A6-F300229F37AE\\",\\n  \\"OperateRuleResult\\": {\\n    \\"OperateRuleItemList\\": [\\n      {\\n        \\"ConfigRuleId\\": \\"cr-2da35180a8d1008e****\\",\\n        \\"ErrorCode\\": \\"ConfigRuleCanNotDelete\\",\\n        \\"Success\\": false\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DeleteConfigRulesResponse>\\n    <OperateRuleResult>\\n        <OperateRuleItemList>\\n            <ConfigRuleId>cr-2da35180a8d1008e****</ConfigRuleId>\\n            <ErrorCode>ConfigRuleCanNotDelete</ErrorCode>\\n            <Success>false</Success>\\n        </OperateRuleItemList>\\n        <OperateRuleItemList>\\n            <ConfigRuleId>cr-2da351800131233a****</ConfigRuleId>\\n            <ErrorCode/>\\n            <Success>true</Success>\\n        </OperateRuleItemList>\\n        <RequestId>49C1A88F-D163-46DF-84A6-F300229F37AE</RequestId>\\n    </OperateRuleResult>\\n</DeleteConfigRulesResponse>","errorExample":""}]',
      'title' => '批量删除规则',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StartConfigRuleEvaluation' => 
    array (
      'summary' => '使该规则执行一次评估。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConfigRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则ID。

关于如何获取规则ID，请参见[ListConfigRules](~~169607~~)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cr-bdb6626622af0012****',
          ),
        ),
        1 => 
        array (
          'name' => 'RevertEvaluation',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否恢复已忽略的评估结果。取值：

- true：恢复已忽略的评估结果。

- false：不恢复已忽略的评估结果。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'CompliancePackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '合规包ID。

关于如何获取合规包ID，请参见[ListCompliancePacks](~~263332~~)。

> 参数`CompliancePackId`和`ConfigRuleId`必须二选一。',
            'type' => 'string',
            'required' => false,
            'example' => 'cp-ac16626622af0053****',
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
                'example' => 'C32EEAD7-BF64-5927-977A-AFF9342B7275',
              ),
              'Result' => 
              array (
                'description' => '规则执行结果。取值：

- true：成功。

- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'ConfigRuleNotExists',
            'errorMessage' => 'The ConfigRule does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountNotExisted',
            'errorMessage' => 'Your account does not exist.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C32EEAD7-BF64-5927-977A-AFF9342B7275\\",\\n  \\"Result\\": true\\n}","errorExample":""},{"type":"xml","example":"<StartConfigRuleEvaluationResponse>\\n    <RequestId>C32EEAD7-BF64-5927-977A-AFF9342B7275</RequestId>\\n    <Result>true</Result>\\n</StartConfigRuleEvaluationResponse>","errorExample":""}]',
      'title' => '启用指定规则',
      'description' => '> 本接口仅用于触发规则执行一次评估。如果您需要查看规则的本次评估结果，请调用ListConfigRuleEvaluationResults接口。更多信息，请参见[ListConfigRuleEvaluationResults](~~267503~~)。

本文将提供一个示例，使规则`cr-bdb6626622af0012****`执行一次评估。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~169575~~)。',
    ),
    'StopConfigRules' => 
    array (
      'summary' => '批量停用指定规则，使规则处于“已停用”状态。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConfigRuleIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则ID。多个规则ID之间以英文逗号（,）分隔，且不能超过20个。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cr-2da35180a8d1008e****,cr-2da35180a8d1008e****',
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
                'example' => '49C1A88F-D163-46DF-84A6-F300229F37AE',
              ),
              'OperateRuleResult' => 
              array (
                'description' => '批量停用规则结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'OperateRuleItemList' => 
                  array (
                    'description' => '批量停用规则结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ErrorCode' => 
                        array (
                          'description' => '错误码。

- 当您停用规则成功时，该参数为空。

- <props="china">当您停用规则失败时，该参数显示错误码。错误码详情，请参见[错误中心](https://error-center.aliyun.com/status/product/Config)。</props>

- <props="intl">当您停用规则失败时，该参数显示错误码。错误码详情，请参见[错误中心](https://error-center.alibabacloud.com/status/product/Config)。</props>',
                          'type' => 'string',
                          'example' => 'ConfigRuleStatusNotActive',
                        ),
                        'Success' => 
                        array (
                          'description' => '停用规则是否成功。取值：

- true：成功

- false： 失败',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'ConfigRuleId' => 
                        array (
                          'description' => '规则ID。',
                          'type' => 'string',
                          'example' => 'cr-2da35180a8d1008e****',
                        ),
                      ),
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
            'errorCode' => 'Invalid.ConfigRuleIds.SizeExceed',
            'errorMessage' => 'The maximum number of ConfigRuleIds cannot exceed 20.',
          ),
          2 => 
          array (
            'errorCode' => 'ConfigRuleStatusNotActive',
            'errorMessage' => 'The status of the config rule is not active.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountNotExisted',
            'errorMessage' => 'Your account does not exist.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"49C1A88F-D163-46DF-84A6-F300229F37AE\\",\\n  \\"OperateRuleResult\\": {\\n    \\"OperateRuleItemList\\": [\\n      {\\n        \\"ConfigRuleId\\": \\"cr-2da35180a8d1008e****\\",\\n        \\"ErrorCode\\": \\"ConfigRuleStatusNotActive\\",\\n        \\"Success\\": false\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<StopConfigRulesResponse>\\r\\n\\t\\t<OperateRuleResult>\\r\\n\\t\\t\\t<OperateRuleItemList>\\r\\n\\t\\t\\t\\t<ConfigRuleId>cr-2da35180a8d1008e****</ConfigRuleId>\\r\\n\\t\\t\\t\\t<ErrorCode>ConfigRuleStatusNotActive</ErrorCode>\\r\\n\\t\\t\\t\\t<Success>false</Success>\\r\\n\\t\\t\\t</OperateRuleItemList>\\r\\n\\t\\t\\t<OperateRuleItemList>\\r\\n\\t\\t\\t\\t<ConfigRuleId>cr-2da351800131233a****</ConfigRuleId>\\r\\n\\t\\t\\t\\t<ErrorCode></ErrorCode>\\r\\n\\t\\t\\t\\t<Success>true</Success>\\r\\n\\t\\t\\t</OperateRuleItemList>\\r\\n\\t\\t\\t<RequestId>49C1A88F-D163-46DF-84A6-F300229F37AE</RequestId>\\r\\n\\t\\t</OperateRuleResult>\\r\\n</StopConfigRulesResponse>","errorExample":""}]',
      'title' => '批量停用指定规则',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListConfigRules' => 
    array (
      'summary' => '查询当前账号规则列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'ConfigRuleState',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则的状态。取值：
- ACTIVE：应用中。
- EVALUATING：评估中。
- INACTIVE：已停用。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'ACTIVE',
            'enum' => 
            array (
              0 => 'ACTIVE',
              1 => 'DELETING',
              2 => 'EVALUATING',
              3 => 'INACTIVE',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'ComplianceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则的合规类型。取值：
- COMPLIANT：合规。
- NON_COMPLIANT：不合规。
- NOT_APPLICABLE：不适用。
- INSUFFICIENT_DATA：数据不充分。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'COMPLIANT',
            'enum' => 
            array (
              0 => 'COMPLIANT',
              1 => 'NON_COMPLIANT',
              2 => 'NOT_APPLICABLE',
              3 => 'INSUFFICIENT_DATA',
              4 => 'IGNORED',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'RiskLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则的风险等级。取值：
- 1：高风险。
- 2：中风险。
- 3：低风险。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则列表的页码。起始值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。取值范围：1~100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '20',
            'default' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'MultiAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数计划于2021年06月30日00时00分00秒前下线，其替代功能账号组的API将于2021年05月30日00时00分00秒前上线。如果您正在使用该参数，建议您在2021年05月30日00时00分00秒之后切换为账号组的API。关于账号组，请参见[账号组](~~211534~~)。 ',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'MemberId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数计划于2021年06月30日00时00分00秒前下线，其替代功能账号组的API将于2021年05月30日00时00分00秒前上线。如果您正在使用该参数，建议您在2021年05月30日00时00分00秒之后切换为账号组的API。关于账号组，请参见[账号组](~~211534~~)。 ',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123456789',
          ),
        ),
        7 => 
        array (
          'name' => 'ConfigRuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'OSS合规管理最佳实践-OSS存储空间ACL禁止公共读访问',
          ),
        ),
        8 => 
        array (
          'name' => 'CompliancePackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则所属的合规包ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cp-8d5c6457e0d9002a****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '无。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8195B664-9565-4685-89AC-8B5F04B44B92',
              ),
              'ConfigRules' => 
              array (
                'description' => '规则列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'ConfigRuleList' => 
                  array (
                    'description' => '规则列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '无。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CompliancePackId' => 
                        array (
                          'description' => '规则所属的合规包ID。',
                          'type' => 'string',
                          'example' => 'cp-8d5c6457e0d9002a****',
                        ),
                        'RiskLevel' => 
                        array (
                          'description' => '规则的风险等级。取值：

- 1：高风险。

- 2：中风险。

- 3：低风险。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'SourceOwner' => 
                        array (
                          'description' => '规则来源的归属。取值：

- CUSTOM_FC：用户自定义函数。

- ALIYUN：托管规则。',
                          'type' => 'string',
                          'example' => 'ALIYUN',
                        ),
                        'AccountId' => 
                        array (
                          'description' => '该规则归属的阿里云账号ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '987654321',
                        ),
                        'ConfigRuleState' => 
                        array (
                          'description' => '当前规则运行状态。取值：

- ACTIVE：应用中。

- EVALUATING：评估中。

- INACTIVE：已停用。',
                          'type' => 'string',
                          'example' => 'ACTIVE',
                        ),
                        'Compliance' => 
                        array (
                          'description' => '规则合规情况统计。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ComplianceType' => 
                            array (
                              'description' => '规则合规类型。取值：

- COMPLIANT：合规。

- NON_COMPLIANT：不合规。

- NOT_APPLICABLE：不适用。

- INSUFFICIENT_DATA：数据不充分。',
                              'type' => 'string',
                              'example' => 'COMPLIANT',
                            ),
                            'Count' => 
                            array (
                              'description' => '该规则符合指定合规类型的资源数统计。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '161',
                            ),
                          ),
                        ),
                        'SourceIdentifier' => 
                        array (
                          'description' => '规则标识。

- 如果规则使用了托管规则，则该参数为托管规则名称。

- 如果规则使用了自定义函数，则该参数为函数ARN。',
                          'type' => 'string',
                          'example' => 'oss-bucket-public-read-prohibited',
                        ),
                        'ConfigRuleArn' => 
                        array (
                          'description' => '规则ARN。',
                          'type' => 'string',
                          'example' => 'acs:config::120886317861****:rule/cr-8d5c6457e0d9002a****',
                        ),
                        'Description' => 
                        array (
                          'description' => '规则的描述信息。',
                          'type' => 'string',
                          'example' => 'OSS存储空间的ACL策略禁止公共读访问，视为“合规”。',
                        ),
                        'CreateBy' => 
                        array (
                          'description' => '规则的创建信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'CompliancePackId' => 
                            array (
                              'description' => '合规包ID。',
                              'type' => 'string',
                              'example' => 'cp-8d5c6457e0d9002a****',
                            ),
                            'CompliancePackName' => 
                            array (
                              'description' => '合规包名称。',
                              'type' => 'string',
                              'example' => 'OSS合规管理最佳实践',
                            ),
                          ),
                        ),
                        'AutomationType' => 
                        array (
                          'description' => '修正模板类型。取值：LC。

> LC：逻辑编排（Logic Composer）。',
                          'type' => 'string',
                          'example' => 'LC',
                        ),
                        'ConfigRuleName' => 
                        array (
                          'description' => '规则名称。',
                          'type' => 'string',
                          'example' => 'OSS合规管理最佳实践-OSS存储空间ACL禁止公共读访问',
                        ),
                        'ConfigRuleId' => 
                        array (
                          'description' => '规则ID。',
                          'type' => 'string',
                          'example' => 'cr-8d5c6457e0d9002a****',
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
                                'example' => 'Key1',
                              ),
                              'Value' => 
                              array (
                                'description' => '标签值。',
                                'type' => 'string',
                                'example' => 'Value1',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'PageNumber' => 
                  array (
                    'description' => '规则列表的页码。起始值：1。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '分页查询时设置的每页行数。取值范围：1~100。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '规则总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountNotExisted',
            'errorMessage' => 'Your account does not exist.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8195B664-9565-4685-89AC-8B5F04B44B92\\",\\n  \\"ConfigRules\\": {\\n    \\"ConfigRuleList\\": [\\n      {\\n        \\"CompliancePackId\\": \\"cp-8d5c6457e0d9002a****\\",\\n        \\"RiskLevel\\": 1,\\n        \\"SourceOwner\\": \\"ALIYUN\\",\\n        \\"AccountId\\": 987654321,\\n        \\"ConfigRuleState\\": \\"ACTIVE\\",\\n        \\"Compliance\\": {\\n          \\"ComplianceType\\": \\"COMPLIANT\\",\\n          \\"Count\\": 161\\n        },\\n        \\"SourceIdentifier\\": \\"oss-bucket-public-read-prohibited\\",\\n        \\"ConfigRuleArn\\": \\"acs:config::120886317861****:rule/cr-8d5c6457e0d9002a****\\",\\n        \\"Description\\": \\"OSS存储空间的ACL策略禁止公共读访问，视为“合规”。\\",\\n        \\"CreateBy\\": {\\n          \\"CompliancePackId\\": \\"cp-8d5c6457e0d9002a****\\",\\n          \\"CompliancePackName\\": \\"OSS合规管理最佳实践\\"\\n        },\\n        \\"AutomationType\\": \\"LC\\",\\n        \\"ConfigRuleName\\": \\"OSS合规管理最佳实践-OSS存储空间ACL禁止公共读访问\\",\\n        \\"ConfigRuleId\\": \\"cr-8d5c6457e0d9002a****\\",\\n        \\"Tags\\": [\\n          {\\n            \\"Key\\": \\"Key1\\",\\n            \\"Value\\": \\"Value1\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 20,\\n    \\"TotalCount\\": 1\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListConfigRulesResponse>\\r\\n\\t<RequestId>8195B664-9565-4685-89AC-8B5F04B44B92</RequestId>\\r\\n\\t<ConfigRules>\\r\\n\\t\\t<TotalCount>1</TotalCount>\\r\\n\\t\\t<PageSize>20</PageSize>\\r\\n\\t\\t<PageNumber>1</PageNumber>\\r\\n\\t\\t<ConfigRuleList>\\r\\n\\t\\t\\t<CompliancePackId>cp-8d5c6457e0d9002a****</CompliancePackId>\\r\\n\\t\\t\\t<ConfigRuleId>cr-8d5c6457e0d9002a****</ConfigRuleId>\\r\\n\\t\\t\\t<AccountId>987654321</AccountId>\\r\\n\\t\\t\\t<Description>OSS存储空间的ACL策略禁止公共读访问，视为“合规”。</Description>\\r\\n\\t\\t\\t<Compliance>\\r\\n\\t\\t\\t\\t<ComplianceType>COMPLIANT</ComplianceType>\\r\\n\\t\\t\\t\\t<Count>161</Count>\\r\\n\\t\\t\\t</Compliance>\\r\\n\\t\\t\\t<ConfigRuleArn>acs:config::120886317861****:rule/cr-8d5c6457e0d9002a****</ConfigRuleArn>\\r\\n\\t\\t\\t<SourceOwner>ALIYUN</SourceOwner>\\r\\n\\t\\t\\t<SourceIdentifier>oss-bucket-public-read-prohibited</SourceIdentifier>\\r\\n\\t\\t\\t<CreateBy>\\r\\n\\t\\t\\t\\t<CompliancePackId>cp-8d5c6457e0d9002a628b</CompliancePackId>\\r\\n\\t\\t\\t\\t<CompliancePackName>OSS合规管理最佳实践</CompliancePackName>\\r\\n\\t\\t\\t\\t<CreatorId>1208863178612953</CreatorId>\\r\\n\\t\\t\\t</CreateBy>\\r\\n\\t\\t\\t<ConfigRuleName>OSS合规管理最佳实践-OSS存储空间ACL禁止公共读访问</ConfigRuleName>\\r\\n\\t\\t\\t<RiskLevel>1</RiskLevel>\\r\\n\\t\\t\\t<ConfigRuleState>ACTIVE</ConfigRuleState>\\r\\n\\t\\t</ConfigRuleList>\\r\\n\\t</ConfigRules>\\r\\n</ListConfigRulesResponse>\\t","errorExample":""}]',
      'title' => '查询规则列表',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeEvaluationResults' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。当您按资源类型查询资源评估结果时，必须配置该参数。

您可以通过GetSupportedResourceTypes接口获取配置审计支持的资源类型列表。更多信息，请参见[GetSupportedResourceTypes](~~169618~~)。

> 资源类型（ResourceType）和规则ID（ConfigRuleId）二选一。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'ACS::ECS::Instance',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源ID。当您按资源类型查询资源评估结果时，必须配置该参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'i-bp151g9tpto890zr****',
          ),
        ),
        2 => 
        array (
          'name' => 'ComplianceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '合规类型。取值：
- COMPLIANT：合规。
- NON_COMPLIANT：不合规。
- NOT_APPLICABLE：不适用。
- INSUFFICIENT_DATA：数据不充分。',
            'type' => 'string',
            'required' => false,
            'example' => 'COMPLIANT',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源评估结果列表的页码。起始值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。取值范围：1~100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'ConfigRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则ID。当您按规则查询资源评估结果时，必须配置该参数。

> 资源类型（ResourceType）和规则ID（ConfigRuleId）二选一。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cr-2da35180a8d1008e****',
          ),
        ),
        6 => 
        array (
          'name' => 'MultiAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数计划于2021年06月30日00时00分00秒前下线，其替代功能账号组的API将于2021年05月30日00时00分00秒前上线。如果您正在使用该参数，建议您在2021年05月30日00时00分00秒之后切换为账号组的API。关于账号组，请参见[账号组](~~211534~~)。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'MemberId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数计划于2021年06月30日00时00分00秒前下线，其替代功能账号组的API将于2021年05月30日00时00分00秒前上线。如果您正在使用该参数，建议您在2021年05月30日00时00分00秒之后切换为账号组的API。关于账号组，请参见[账号组](~~211534~~)。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123456789',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '无。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D296EE41-1143-4B13-83BB-909008100130',
              ),
              'EvaluationResults' => 
              array (
                'description' => '资源评估结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'EvaluationResultList' => 
                  array (
                    'description' => '资源评估结果列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '无。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RiskLevel' => 
                        array (
                          'description' => '风险等级。取值：
- 1：高风险。
- 2：中风险。
- 3：低风险。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'ComplianceType' => 
                        array (
                          'description' => '合规类型。取值：
- COMPLIANT：合规。
- NON_COMPLIANT：不合规。
- NOT_APPLICABLE：不适用。
- INSUFFICIENT_DATA：数据不充分。

',
                          'type' => 'string',
                          'example' => 'COMPLIANT',
                        ),
                        'ResultRecordedTimestamp' => 
                        array (
                          'description' => '资源评估结果的时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1589941923432',
                        ),
                        'Annotation' => 
                        array (
                          'description' => '不合规资源的补充信息。',
                          'type' => 'string',
                          'example' => '{"operator": "StringEquals", "property": "$.SslProtocol", "desiredValue": "on", "configuration": "[\'off\']"}',
                        ),
                        'ConfigRuleInvokedTimestamp' => 
                        array (
                          'description' => '调用规则评估资源时的时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1589941923258',
                        ),
                        'InvokingEventMessageType' => 
                        array (
                          'description' => '规则的触发机制。取值：
- ConfigurationItemChangeNotification：配置变更。
- ScheduledNotification：周期执行。',
                          'type' => 'string',
                          'example' => 'ConfigurationItemChangeNotification',
                        ),
                        'EvaluationResultIdentifier' => 
                        array (
                          'description' => '资源评估结果标识符。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'OrderingTimestamp' => 
                            array (
                              'description' => '时间轴展示的时间戳。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1589941923117',
                            ),
                            'EvaluationResultQualifier' => 
                            array (
                              'description' => '规则评估的资源范围。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'ConfigRuleArn' => 
                                array (
                                  'description' => '规则ARN。',
                                  'type' => 'string',
                                  'example' => 'acs:config::120390217529****:config-rule/cr-2da35180a8d1008e****',
                                ),
                                'ResourceType' => 
                                array (
                                  'description' => '规则评估的资源类型。',
                                  'type' => 'string',
                                  'example' => 'ACS::ECS::Instance',
                                ),
                                'ConfigRuleName' => 
                                array (
                                  'description' => '规则名称。',
                                  'type' => 'string',
                                  'example' => 'ECS实例开启释放保护',
                                ),
                                'ResourceId' => 
                                array (
                                  'description' => '规则评估的资源ID。',
                                  'type' => 'string',
                                  'example' => 'i-bp151g9tpto890zr****',
                                ),
                                'ConfigRuleId' => 
                                array (
                                  'description' => '规则ID。',
                                  'type' => 'string',
                                  'example' => 'cr-2da35180a8d1008e****',
                                ),
                                'ResourceName' => 
                                array (
                                  'description' => '规则评估的资源名称。',
                                  'type' => 'string',
                                  'example' => 'launch-advisor-20200330',
                                ),
                                'RegionId' => 
                                array (
                                  'description' => '地域ID。',
                                  'type' => 'string',
                                  'example' => 'cn-hangzhou',
                                ),
                              ),
                            ),
                          ),
                        ),
                        'RemediationEnabled' => 
                        array (
                          'description' => '修正设置是否启用。取值：

- true

- false',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                      ),
                    ),
                  ),
                  'PageNumber' => 
                  array (
                    'description' => '资源评估结果列表的页码。起始值：1。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '分页查询时设置的每页行数。取值范围：1~100。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '资源评估结果的总记录数。
',
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
            'errorCode' => 'CloudConfigServiceRoleNotExisted',
            'errorMessage' => 'The CloudConfigServiceRole does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'AccountNotExisted',
            'errorMessage' => 'Your account does not exist.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D296EE41-1143-4B13-83BB-909008100130\\",\\n  \\"EvaluationResults\\": {\\n    \\"EvaluationResultList\\": [\\n      {\\n        \\"RiskLevel\\": 1,\\n        \\"ComplianceType\\": \\"COMPLIANT\\",\\n        \\"ResultRecordedTimestamp\\": 1589941923432,\\n        \\"Annotation\\": \\"{\\\\\\"operator\\\\\\": \\\\\\"StringEquals\\\\\\", \\\\\\"property\\\\\\": \\\\\\"$.SslProtocol\\\\\\", \\\\\\"desiredValue\\\\\\": \\\\\\"on\\\\\\", \\\\\\"configuration\\\\\\": \\\\\\"[\'off\']\\\\\\"}\\",\\n        \\"ConfigRuleInvokedTimestamp\\": 1589941923258,\\n        \\"InvokingEventMessageType\\": \\"ConfigurationItemChangeNotification\\",\\n        \\"EvaluationResultIdentifier\\": {\\n          \\"OrderingTimestamp\\": 1589941923117,\\n          \\"EvaluationResultQualifier\\": {\\n            \\"ConfigRuleArn\\": \\"acs:config::120390217529****:config-rule/cr-2da35180a8d1008e****\\",\\n            \\"ResourceType\\": \\"ACS::ECS::Instance\\",\\n            \\"ConfigRuleName\\": \\"ECS实例开启释放保护\\",\\n            \\"ResourceId\\": \\"i-bp151g9tpto890zr****\\",\\n            \\"ConfigRuleId\\": \\"cr-2da35180a8d1008e****\\",\\n            \\"ResourceName\\": \\"launch-advisor-20200330\\",\\n            \\"RegionId\\": \\"cn-hangzhou\\"\\n          }\\n        },\\n        \\"RemediationEnabled\\": false\\n      }\\n    ],\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 2\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeEvaluationResultsResponse>\\r\\n\\t<RequestId>D296EE41-1143-4B13-83BB-909008100130</RequestId>\\r\\n\\t<EvaluationResults>\\r\\n\\t\\t<EvaluationResultList>\\r\\n\\t\\t\\t<ConfigRuleInvokedTimestamp>1608262263084</ConfigRuleInvokedTimestamp>\\r\\n\\t\\t\\t<ComplianceType>COMPLIANT</ComplianceType>\\r\\n\\t\\t\\t<ResultRecordedTimestamp>1608262263321</ResultRecordedTimestamp>\\r\\n\\t\\t\\t<InvokingEventMessageType>ConfigurationItemChangeNotification</InvokingEventMessageType>\\r\\n\\t\\t\\t<EvaluationResultIdentifier>\\r\\n\\t\\t\\t\\t<EvaluationResultQualifier>\\r\\n\\t\\t\\t\\t\\t<ConfigRuleId>cr-22726457e0d90078****</ConfigRuleId>\\r\\n\\t\\t\\t\\t\\t<ConfigRuleArn>acs:config::120886317861****:config-rule/cr-22726457e0d90078****</ConfigRuleArn>\\r\\n\\t\\t\\t\\t\\t<ResourceId>i-t4n0piq1mkfo1d27****</ResourceId>\\r\\n\\t\\t\\t\\t\\t<ConfigRuleName>ECS实例开启释放保护</ConfigRuleName>\\r\\n\\t\\t\\t\\t\\t<ResourceType>ACS::ECS::Instance</ResourceType>\\r\\n\\t\\t\\t\\t\\t<RegionId>cn-hangzhou</RegionId>\\r\\n\\t\\t\\t\\t</EvaluationResultQualifier>\\r\\n\\t\\t\\t\\t<OrderingTimestamp>1608262263084</OrderingTimestamp>\\r\\n\\t\\t\\t</EvaluationResultIdentifier>\\r\\n\\t\\t\\t<RiskLevel>3</RiskLevel>\\r\\n\\t\\t\\t<RemediationEnabled>true</RemediationEnabled>\\r\\n\\t\\t\\t<Annotation></Annotation>\\r\\n\\t\\t</EvaluationResultList>\\r\\n\\t\\t<EvaluationResultList>\\r\\n\\t\\t\\t<ConfigRuleInvokedTimestamp>1608262263084</ConfigRuleInvokedTimestamp>\\r\\n\\t\\t\\t<ComplianceType>COMPLIANT</ComplianceType>\\r\\n\\t\\t\\t<ResultRecordedTimestamp>1608262263326</ResultRecordedTimestamp>\\r\\n\\t\\t\\t<InvokingEventMessageType>ConfigurationItemChangeNotification</InvokingEventMessageType>\\r\\n\\t\\t\\t<EvaluationResultIdentifier>\\r\\n\\t\\t\\t\\t<EvaluationResultQualifier>\\r\\n\\t\\t\\t\\t\\t<ConfigRuleId>cr-22726457e0d90078****</ConfigRuleId>\\r\\n\\t\\t\\t\\t\\t<ConfigRuleArn>acs:config::120886317861****:config-rule/cr-22726457e0d90078****</ConfigRuleArn>\\r\\n\\t\\t\\t\\t\\t<ResourceId>i-2ze5o2beycwbvqnx****</ResourceId>\\r\\n\\t\\t\\t\\t\\t<ConfigRuleName>ECS实例开启释放保护</ConfigRuleName>\\r\\n\\t\\t\\t\\t\\t<ResourceType>ACS::ECS::Instance</ResourceType>\\r\\n\\t\\t\\t\\t\\t<RegionId>cn-hangzhou</RegionId>\\r\\n\\t\\t\\t\\t</EvaluationResultQualifier>\\r\\n\\t\\t\\t\\t<OrderingTimestamp>1608262263084</OrderingTimestamp>\\r\\n\\t\\t\\t</EvaluationResultIdentifier>\\r\\n\\t\\t\\t<RiskLevel>3</RiskLevel>\\r\\n\\t\\t\\t<RemediationEnabled>false</RemediationEnabled>\\r\\n\\t\\t\\t<Annotation></Annotation>\\r\\n\\t\\t</EvaluationResultList>\\r\\n\\t\\t<TotalCount>52</TotalCount>\\r\\n\\t\\t<PageSize>10</PageSize>\\r\\n\\t\\t<PageNumber>1</PageNumber>\\r\\n\\t</EvaluationResults>\\r\\n</DescribeEvaluationResultsResponse>\\t","errorExample":""}]',
      'title' => '查询规则评估结果',
      'summary' => '查询规则的评估结果列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeCompliance' => 
    array (
      'summary' => '查询资源的合规结果统计。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。

当您按资源维度查询资源评估结果时，必须配置参数ResourceType和ResourceId。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'ACS::ECS::Instance',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源ID。

当您按资源维度查询资源评估结果时，必须配置参数ResourceType和ResourceId。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'i-bp151g9tpto890zr****',
          ),
        ),
        2 => 
        array (
          'name' => 'ComplianceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '合规类型。取值：
- COMPLIANT：合规。
- NON_COMPLIANT：不合规。
- NOT_APPLICABLE：不适用。
- INSUFFICIENT_DATA：数据不充分。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'COMPLIANT',
            'enum' => 
            array (
              0 => 'COMPLIANT',
              1 => 'NON_COMPLIANT',
              2 => 'NOT_APPLICABLE',
              3 => 'INSUFFICIENT_DATA',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'ConfigRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则ID。

当您按规则维度查询资源评估结果时，必须同时配置参数ConfigRuleId、ResourceType和ResourceId，否则ConfigRuleId无效。',
            'type' => 'string',
            'required' => false,
            'example' => 'cr-12b398b633820012****',
          ),
        ),
        4 => 
        array (
          'name' => 'MultiAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数计划于2021年06月30日00时00分00秒前下线，其替代功能账号组的API将于2021年05月30日00时00分00秒前上线。如果您正在使用该参数，建议您在2021年05月30日00时00分00秒之后切换为账号组的API。关于账号组，请参见[账号组](~~211534~~)。 ',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'MemberId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数计划于2021年06月30日00时00分00秒前下线，其替代功能账号组的API将于2021年05月30日00时00分00秒前上线。如果您正在使用该参数，建议您在2021年05月30日00时00分00秒之后切换为账号组的API。关于账号组，请参见[账号组](~~211534~~)。 ',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100931896542****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '合规统计结果。',
            'type' => 'object',
            'properties' => 
            array (
              'ComplianceResult' => 
              array (
                'description' => '合规结果统计。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'description' => '所有合规类型的数量统计。

- 当入参指定ResourceId时，该参数为资源数量统计值。

- 当入参指定ConfigRuleId时，该参数为规则数量统计值。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '12',
                  ),
                  'Compliances' => 
                  array (
                    'description' => '资源合规结果统计。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '无。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ComplianceType' => 
                        array (
                          'description' => '合规类型。取值：

- COMPLIANT：合规。

- NON_COMPLIANT：不合规。

- NOT_APPLICABLE：不适用。

- INSUFFICIENT_DATA：无数据。',
                          'type' => 'string',
                          'example' => 'COMPLIANT',
                        ),
                        'Count' => 
                        array (
                          'description' => '指定合规类型的数量统计。

- 当入参指定ResourceId时，该参数为资源数统计值。

- 当入参指定ConfigRuleId时，该参数为规则数统计值。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '12',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '17306AB1-34E0-468F-BD7B-68D8AEAB754F',
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
            'errorCode' => 'AccountNotExisted',
            'errorMessage' => 'Your account does not exist.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ComplianceResult\\": {\\n    \\"TotalCount\\": 12,\\n    \\"Compliances\\": [\\n      {\\n        \\"ComplianceType\\": \\"COMPLIANT\\",\\n        \\"Count\\": 12\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"17306AB1-34E0-468F-BD7B-68D8AEAB754F\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeComplianceResponse>\\n    <RequestId>17306AB1-34E0-468F-BD7B-68D8AEAB754F</RequestId>\\n    <Compliances>\\n        <Compliances>\\n            <ComplianceType>NOT_APPLICABLE</ComplianceType>\\n            <Count>0</Count>\\n        </Compliances>\\n        <Compliances>\\n            <ComplianceType>NON_COMPLIANT</ComplianceType>\\n            <Count>5</Count>\\n        </Compliances>\\n        <Compliances>\\n            <ComplianceType>INSUFFICIENT_DATA</ComplianceType>\\n            <Count>0</Count>\\n        </Compliances>\\n        <Compliances>\\n            <ComplianceType>COMPLIANT</ComplianceType>\\n            <Count>13</Count>\\n        </Compliances>\\n    </CompliancesResponse>\\n</DescribeCompliance>","errorExample":""}]',
      'title' => '查询合规结果统计',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeComplianceSummary' => 
    array (
      'summary' => '查询当前账号的合规结果统计概要。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'MultiAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数计划于2021年06月30日00时00分00秒前下线，其替代功能账号组的API将于2021年05月30日00时00分00秒前上线。如果您正在使用该参数，建议您在2021年05月30日00时00分00秒之后切换为账号组的API。关于账号组，请参见[账号组](~~211534~~)。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        1 => 
        array (
          'name' => 'MemberId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数计划于2021年06月30日00时00分00秒前下线，其替代功能账号组的API将于2021年05月30日00时00分00秒前上线。如果您正在使用该参数，建议您在2021年05月30日00时00分00秒之后切换为账号组的API。关于账号组，请参见[账号组](~~211534~~)。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100931896542****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '合规统计结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CAEE6F34-DEDC-4AAA-AA8C-946D5D008735',
              ),
              'ComplianceSummary' => 
              array (
                'description' => '合规结果统计概要。',
                'type' => 'object',
                'properties' => 
                array (
                  'ComplianceSummaryByResource' => 
                  array (
                    'description' => '资源维度的合规结果统计概要。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CompliantCount' => 
                      array (
                        'description' => '合规的资源数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'NonCompliantCount' => 
                      array (
                        'description' => '不合规的资源数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '12',
                      ),
                      'ComplianceSummaryTimestamp' => 
                      array (
                        'description' => '合规结果统计的时间戳。单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1589853712165',
                      ),
                      'TotalCount' => 
                      array (
                        'description' => '资源总数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '13',
                      ),
                    ),
                  ),
                  'ComplianceSummaryByConfigRule' => 
                  array (
                    'description' => '规则维度的合规结果统计概要。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CompliantCount' => 
                      array (
                        'description' => '合规的规则数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '101',
                      ),
                      'NonCompliantCount' => 
                      array (
                        'description' => '不合规的规则数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '12',
                      ),
                      'ComplianceSummaryTimestamp' => 
                      array (
                        'description' => '合规结果统计的时间戳。单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1589853712165',
                      ),
                      'TotalCount' => 
                      array (
                        'description' => '规则总数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '113',
                      ),
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountNotExisted',
            'errorMessage' => 'Your account does not exist.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CAEE6F34-DEDC-4AAA-AA8C-946D5D008735\\",\\n  \\"ComplianceSummary\\": {\\n    \\"ComplianceSummaryByResource\\": {\\n      \\"CompliantCount\\": 1,\\n      \\"NonCompliantCount\\": 12,\\n      \\"ComplianceSummaryTimestamp\\": 1589853712165,\\n      \\"TotalCount\\": 13\\n    },\\n    \\"ComplianceSummaryByConfigRule\\": {\\n      \\"CompliantCount\\": 101,\\n      \\"NonCompliantCount\\": 12,\\n      \\"ComplianceSummaryTimestamp\\": 1589853712165,\\n      \\"TotalCount\\": 113\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeComplianceSummaryResponse>\\n    <RequestId>CAEE6F34-DEDC-4AAA-AA8C-946D5D008735</RequestId>\\n    <ComplianceSummary>\\n        <ComplianceSummaryByResource>\\n            <CompliantCount>29</CompliantCount>\\n            <NonCompliantCount>581</NonCompliantCount>\\n            <ComplianceSummaryTimestamp>1589853712165</ComplianceSummaryTimestamp>\\n        </ComplianceSummaryByResource>\\n        <ComplianceSummaryByConfigRule>\\n            <TotalCount>79</TotalCount>\\n            <CompliantCount>1</CompliantCount>\\n            <NonCompliantCount>34</NonCompliantCount>\\n            <ComplianceSummaryTimestamp>1589853712128</ComplianceSummaryTimestamp>\\n        </ComplianceSummaryByConfigRule>\\n    </ComplianceSummary>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Success>true</Success>\\n</DescribeComplianceSummaryResponse>","errorExample":""}]',
      'title' => '查询合规结果统计概要',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeConfigRule' => 
    array (
      'summary' => '查询指定的规则详情。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'ConfigRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则ID。关于如何查询规则ID，请参见[ListConfigRules](~~169607~~)。   ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cr-7bc06457e0d90041****',
          ),
        ),
        1 => 
        array (
          'name' => 'MultiAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数计划于2021年06月30日00时00分00秒前下线，其替代功能账号组的API将于2021年05月30日00时00分00秒前上线。如果您正在使用该参数，建议您在2021年05月30日00时00分00秒之后切换为账号组的API。关于账号组，请参见[账号组](~~211534~~)。 ',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'MemberId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数计划于2021年06月30日00时00分00秒前下线，其替代功能账号组的API将于2021年05月30日00时00分00秒前上线。如果您正在使用该参数，建议您在2021年05月30日00时00分00秒之后切换为账号组的API。关于账号组，请参见[账号组](~~211534~~)。 ',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123456789',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '无。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A68DD98C-DE65-46AC-B2D2-04A4A9AB5B99',
              ),
              'ConfigRule' => 
              array (
                'description' => '规则详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'RiskLevel' => 
                  array (
                    'description' => '规则的风险等级。取值：
- 1：高风险。
- 2：中风险。
- 3：低风险。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'InputParameters' => 
                  array (
                    'description' => '规则入参。',
                    'type' => 'object',
                    'example' => '{"cpuCount": "2" }',
                  ),
                  'Source' => 
                  array (
                    'description' => '规则执行逻辑的来源信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'SourceDetails' => 
                      array (
                        'description' => '规则来源详情。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '无。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'MessageType' => 
                            array (
                              'description' => '规则的触发机制。取值：
- ConfigurationItemChangeNotification：配置变更。
- ScheduledNotification：周期执行。',
                              'type' => 'string',
                              'example' => 'ConfigurationItemChangeNotification',
                            ),
                            'EventSource' => 
                            array (
                              'description' => '事件来源。

> 目前仅支持配置审计事件：aliyun.config。',
                              'type' => 'string',
                              'example' => 'aliyun.config',
                            ),
                            'MaximumExecutionFrequency' => 
                            array (
                              'description' => '规则的执行周期。取值：

- One_Hour：1小时。

- Three_Hours：3小时。

- Six_Hours：6小时。

- Twelve_Hours：12小时。

- TwentyFour_Hours：24小时。',
                              'type' => 'string',
                              'example' => 'Six_Hours',
                            ),
                          ),
                        ),
                      ),
                      'Owner' => 
                      array (
                        'description' => '规则来源的归属。取值：

- CUSTOM_FC：用户自定义函数。

- ALIYUN：托管规则。',
                        'type' => 'string',
                        'example' => 'ALIYUN',
                      ),
                      'SourceConditions' => 
                      array (
                        'description' => '规则的配置条件。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '无。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'DesiredValue' => 
                            array (
                              'description' => '规则入参的期望值。',
                              'type' => 'string',
                              'example' => '2',
                            ),
                            'Tips' => 
                            array (
                              'description' => '参数的提示信息。',
                              'type' => 'string',
                              'example' => '实例的状态',
                            ),
                            'Operator' => 
                            array (
                              'description' => '规则入参的操作符。通过SelectPath获取到的不同数据类型，对应不同的操作符。  

- 当数据类型为String时，取值：
  - StringEquals：等于。
  - NotStringEquals：不等于。
  - StringIn：存在。
  - NotStringIn：不存在。
  - StringContains：包含。
  - NotStringContains：不包含。

- 当数据类型为Number时，取值：
  - Equals：等于。
  - NotEquals：不等于。
  - Less：小于。
  - LessOrEquals：小于等于。
  - Greater：大于。
  - GreaterOrEquals：大于等于。

- 当数据类型为基于Base64进制编码的Base64 String时，取值：
  - Base64Contains：包含。
  - NotBase64Contains：不包含。
  - Base64ContainsAll：包含全部。
  - Base64ExcludeAll：排除全部。  

- 当数据类型为Array时，取值：
  - Contains：包含。
  - NotContains：不包含。
  - In：存在。
  - NotIn：不存在。
  - ContainsAll：包含全部。
  - ExcludeAll：排除全部。  
  - IsEmpty：为空。  ',
                              'type' => 'string',
                              'example' => 'GreaterOrEquals',
                            ),
                            'Name' => 
                            array (
                              'description' => '规则入参的名称。',
                              'type' => 'string',
                              'example' => 'cpuCount',
                            ),
                          ),
                        ),
                      ),
                      'Identifier' => 
                      array (
                        'description' => '规则标识。

- 如果规则使用了托管规则，则该参数为托管规则名称。

- 如果规则使用了自定义函数，则该参数为函数ARN。


',
                        'type' => 'string',
                        'example' => 'rds-cpu-min-count-limit',
                      ),
                    ),
                  ),
                  'ConfigRuleState' => 
                  array (
                    'description' => '当前规则的运行状态。取值：
- ACTIVE：应用中。
- EVALUATING：评估中。
- INACTIVE：已停用。',
                    'type' => 'string',
                    'example' => 'ACTIVE',
                  ),
                  'MaximumExecutionFrequency' => 
                  array (
                    'description' => '规则的执行周期。取值：

- One_Hour：1小时。

- Three_Hours：3小时。

- Six_Hours：6小时。

- Twelve_Hours：12小时。

- TwentyFour_Hours：24小时。',
                    'type' => 'string',
                    'example' => 'Six_Hours',
                  ),
                  'ManagedRule' => 
                  array (
                    'description' => '托管规则详情。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'SourceDetails' => 
                      array (
                        'description' => '托管规则详情。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '无。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'MessageType' => 
                            array (
                              'description' => '规则的触发机制。取值：
- ConfigurationItemChangeNotification：配置变更。
- ScheduledNotification：周期执行。',
                              'type' => 'string',
                              'example' => 'ConfigurationItemChangeNotification',
                            ),
                            'EventSource' => 
                            array (
                              'description' => '规则的事件来源。

> 目前仅支持配置审计事件：aliyun.config。',
                              'type' => 'string',
                              'example' => 'aliyun.config',
                            ),
                            'MaximumExecutionFrequency' => 
                            array (
                              'description' => '规则的执行周期。取值：

- One_Hour：1小时。

- Three_Hours：3小时。

- Six_Hours：6小时。

- Twelve_Hours：12小时。

- TwentyFour_Hours：24小时。',
                              'type' => 'string',
                              'example' => 'Six_Hours',
                            ),
                          ),
                        ),
                      ),
                      'Description' => 
                      array (
                        'description' => '托管规则的描述信息。',
                        'type' => 'string',
                        'example' => 'RDS实例的CPU核数大于等于设置的阈值，视为“合规”。',
                      ),
                      'Labels' => 
                      array (
                        'description' => '无。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '托管规则的标签列表。',
                          'type' => 'string',
                          'example' => '["RDS","CPU"]',
                        ),
                      ),
                      'Identifier' => 
                      array (
                        'description' => '托管规则的标识符。',
                        'type' => 'string',
                        'example' => 'rds-cpu-min-count-limit',
                      ),
                      'OptionalInputParameterDetails' => 
                      array (
                        'description' => '托管规则可选参数的描述信息。',
                        'type' => 'object',
                        'example' => '{"tag1Value":{"type":"string","defaultValue":""},"tag2Key":{"type":"string","defaultValue":""}}',
                      ),
                      'ManagedRuleName' => 
                      array (
                        'description' => '托管规则的名称。',
                        'type' => 'string',
                        'example' => 'rds-cpu-min-count-limit',
                      ),
                      'CompulsoryInputParameterDetails' => 
                      array (
                        'description' => '托管规则必填参数的信息。',
                        'type' => 'object',
                        'example' => '{"cpuCount": {"defaultValue": "2","type": "integer"}',
                      ),
                    ),
                  ),
                  'ConfigRuleArn' => 
                  array (
                    'description' => '规则ARN。',
                    'type' => 'string',
                    'example' => 'acs:config::120886317861****:rule/cr-7bc06457e0d90041****',
                  ),
                  'Description' => 
                  array (
                    'description' => '规则的描述信息。',
                    'type' => 'string',
                    'example' => 'RDS实例的CPU核数大于等于设置的阈值，视为“合规”。',
                  ),
                  'ConfigRuleName' => 
                  array (
                    'description' => '规则名称。',
                    'type' => 'string',
                    'example' => 'RDS实例CPU核数满足最低要求',
                  ),
                  'Scope' => 
                  array (
                    'description' => '规则的监控范围。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ComplianceResourceTypes' => 
                      array (
                        'description' => '无。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '待评估资源类型列表。
',
                          'type' => 'string',
                          'example' => '["ACS::RDS::DBInstance"]',
                        ),
                      ),
                      'ComplianceResourceId' => 
                      array (
                        'description' => '待评估资源ID。',
                        'type' => 'string',
                        'example' => 'vpc-6weoy5flv41pj4wvr****',
                      ),
                    ),
                  ),
                  'ConfigRuleEvaluationStatus' => 
                  array (
                    'description' => '资源评估状态。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'LastErrorCode' => 
                      array (
                        'description' => '规则最近一次执行的错误码。',
                        'type' => 'string',
                        'example' => 'FunctionNotFound',
                      ),
                      'LastSuccessfulEvaluationTimestamp' => 
                      array (
                        'description' => '规则最近一次调用成功的结束时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1618901957876',
                      ),
                      'FirstActivatedTimestamp' => 
                      array (
                        'description' => '首次激活时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1618901952341',
                      ),
                      'FirstEvaluationStarted' => 
                      array (
                        'description' => '规则是否已执行过评估。取值：
- true（默认值）
- false  ',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'LastSuccessfulInvocationTimestamp' => 
                      array (
                        'description' => '规则最近一次调用成功的开始时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1618901957395',
                      ),
                      'LastErrorMessage' => 
                      array (
                        'description' => '规则最近一次执行的错误信息。',
                        'type' => 'string',
                        'example' => 'function \'funtionName\' does not exist in service \'serviceName\'',
                      ),
                      'LastFailedEvaluationTimestamp' => 
                      array (
                        'description' => '规则最近一次调用失败的结束时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1602819143913',
                      ),
                      'LastFailedInvocationTimestamp' => 
                      array (
                        'description' => '规则最近一次调用失败的开始时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1602819143910',
                      ),
                    ),
                  ),
                  'ConfigRuleId' => 
                  array (
                    'description' => '规则ID。',
                    'type' => 'string',
                    'example' => 'cr-7bc06457e0d90041****',
                  ),
                  'ModifiedTimestamp' => 
                  array (
                    'description' => '规则最近一次修改的时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1602992721000',
                  ),
                  'CreateTimestamp' => 
                  array (
                    'description' => '创建规则时的时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1602818964884',
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
            'errorCode' => 'ConfigRuleNotExists',
            'errorMessage' => 'The ConfigRule does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountNotExisted',
            'errorMessage' => 'Your account does not exist.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A68DD98C-DE65-46AC-B2D2-04A4A9AB5B99\\",\\n  \\"ConfigRule\\": {\\n    \\"RiskLevel\\": 3,\\n    \\"InputParameters\\": {\\n      \\"cpuCount\\": \\"2\\"\\n    },\\n    \\"Source\\": {\\n      \\"SourceDetails\\": [\\n        {\\n          \\"MessageType\\": \\"ConfigurationItemChangeNotification\\",\\n          \\"EventSource\\": \\"aliyun.config\\",\\n          \\"MaximumExecutionFrequency\\": \\"Six_Hours\\"\\n        }\\n      ],\\n      \\"Owner\\": \\"ALIYUN\\",\\n      \\"SourceConditions\\": [\\n        {\\n          \\"DesiredValue\\": \\"2\\",\\n          \\"Tips\\": \\"实例的状态\\",\\n          \\"Operator\\": \\"GreaterOrEquals\\",\\n          \\"Name\\": \\"cpuCount\\"\\n        }\\n      ],\\n      \\"Identifier\\": \\"rds-cpu-min-count-limit\\"\\n    },\\n    \\"ConfigRuleState\\": \\"ACTIVE\\",\\n    \\"MaximumExecutionFrequency\\": \\"Six_Hours\\",\\n    \\"ManagedRule\\": {\\n      \\"SourceDetails\\": [\\n        {\\n          \\"MessageType\\": \\"ConfigurationItemChangeNotification\\",\\n          \\"EventSource\\": \\"aliyun.config\\",\\n          \\"MaximumExecutionFrequency\\": \\"Six_Hours\\"\\n        }\\n      ],\\n      \\"Description\\": \\"RDS实例的CPU核数大于等于设置的阈值，视为“合规”。\\",\\n      \\"Labels\\": [\\n        \\"[\\\\\\"RDS\\\\\\",\\\\\\"CPU\\\\\\"]\\"\\n      ],\\n      \\"Identifier\\": \\"rds-cpu-min-count-limit\\",\\n      \\"OptionalInputParameterDetails\\": {\\n        \\"tag1Value\\": {\\n          \\"type\\": \\"string\\",\\n          \\"defaultValue\\": \\"\\"\\n        },\\n        \\"tag2Key\\": {\\n          \\"type\\": \\"string\\",\\n          \\"defaultValue\\": \\"\\"\\n        }\\n      },\\n      \\"ManagedRuleName\\": \\"rds-cpu-min-count-limit\\",\\n      \\"CompulsoryInputParameterDetails\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    },\\n    \\"ConfigRuleArn\\": \\"acs:config::120886317861****:rule/cr-7bc06457e0d90041****\\",\\n    \\"Description\\": \\"RDS实例的CPU核数大于等于设置的阈值，视为“合规”。\\",\\n    \\"ConfigRuleName\\": \\"RDS实例CPU核数满足最低要求\\",\\n    \\"Scope\\": {\\n      \\"ComplianceResourceTypes\\": [\\n        \\"[\\\\\\"ACS::RDS::DBInstance\\\\\\"]\\"\\n      ],\\n      \\"ComplianceResourceId\\": \\"vpc-6weoy5flv41pj4wvr****\\"\\n    },\\n    \\"ConfigRuleEvaluationStatus\\": {\\n      \\"LastErrorCode\\": \\"FunctionNotFound\\",\\n      \\"LastSuccessfulEvaluationTimestamp\\": 1618901957876,\\n      \\"FirstActivatedTimestamp\\": 1618901952341,\\n      \\"FirstEvaluationStarted\\": true,\\n      \\"LastSuccessfulInvocationTimestamp\\": 1618901957395,\\n      \\"LastErrorMessage\\": \\"function \'funtionName\' does not exist in service \'serviceName\'\\",\\n      \\"LastFailedEvaluationTimestamp\\": 1602819143913,\\n      \\"LastFailedInvocationTimestamp\\": 1602819143910\\n    },\\n    \\"ConfigRuleId\\": \\"cr-7bc06457e0d90041****\\",\\n    \\"ModifiedTimestamp\\": 1602992721000,\\n    \\"CreateTimestamp\\": 1602818964884\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeConfigRuleResponse>\\r\\n\\t<RequestId>A68DD98C-DE65-46AC-B2D2-04A4A9AB5B99</RequestId>\\r\\n\\t<ConfigRule>\\r\\n\\t\\t<ManagedRule>\\r\\n\\t\\t\\t<ManagedRuleName>rds-cpu-min-count-limit</ManagedRuleName>\\r\\n\\t\\t\\t<OptionalInputParameterDetails />\\r\\n\\t\\t\\t<Description>RDS实例的CPU核数大于等于设置的阈值，视为“合规”。</Description>\\r\\n\\t\\t\\t<Identifier>rds-cpu-min-count-limit</Identifier>\\r\\n\\t\\t\\t<CompulsoryInputParameterDetails>\\r\\n\\t\\t\\t\\t<cpuCount>\\r\\n\\t\\t\\t\\t\\t<defaultValue>2</defaultValue>\\r\\n\\t\\t\\t\\t\\t<type>integer</type>\\r\\n\\t\\t\\t\\t</cpuCount>\\r\\n\\t\\t\\t</CompulsoryInputParameterDetails>\\r\\n\\t\\t\\t<Labels>RDS</Labels>\\r\\n\\t\\t\\t<Labels>CPU</Labels>\\r\\n\\t\\t\\t<SourceDetails>\\r\\n\\t\\t\\t\\t<EventSource>aliyun.config</EventSource>\\r\\n\\t\\t\\t\\t<MessageType>ConfigurationItemChangeNotification</MessageType>\\r\\n\\t\\t\\t</SourceDetails>\\r\\n\\t\\t</ManagedRule>\\r\\n\\t\\t<ConfigRuleEvaluationStatus>\\r\\n\\t\\t\\t<FirstActivatedTimestamp>1618901952341</FirstActivatedTimestamp>\\r\\n\\t\\t\\t<LastSuccessfulEvaluationTimestamp>1618901957876</LastSuccessfulEvaluationTimestamp>\\r\\n\\t\\t\\t<FirstEvaluationStarted>true</FirstEvaluationStarted>\\r\\n\\t\\t\\t<LastSuccessfulInvocationTimestamp>1618901957395</LastSuccessfulInvocationTimestamp>\\r\\n\\t\\t</ConfigRuleEvaluationStatus>\\r\\n\\t\\t<ConfigRuleState>ACTIVE</ConfigRuleState>\\r\\n\\t\\t<Source>\\r\\n\\t\\t\\t<Owner>ALIYUN</Owner>\\r\\n\\t\\t\\t<Identifier>rds-cpu-min-count-limit</Identifier>\\r\\n\\t\\t\\t<SourceConditions>\\r\\n\\t\\t\\t\\t<Operator>GreaterOrEquals</Operator>\\r\\n\\t\\t\\t\\t<DesiredValue>2</DesiredValue>\\r\\n\\t\\t\\t\\t<Required>true</Required>\\r\\n\\t\\t\\t\\t<SelectPath>$.DBInstanceCPU</SelectPath>\\r\\n\\t\\t\\t</SourceConditions>\\r\\n\\t\\t\\t<SourceDetails>\\r\\n\\t\\t\\t\\t<EventSource>aliyun.config</EventSource>\\r\\n\\t\\t\\t\\t<MessageType>ConfigurationItemChangeNotification</MessageType>\\r\\n\\t\\t\\t</SourceDetails>\\r\\n\\t\\t</Source>\\r\\n\\t\\t<OrganizationRule>false</OrganizationRule>\\r\\n\\t\\t<ConfigRuleId>cr-7bc06457e0d90041****</ConfigRuleId>\\r\\n\\t\\t<Scope>\\r\\n\\t\\t\\t<ComplianceResourceTypes>ACS::RDS::DBInstance</ComplianceResourceTypes>\\r\\n\\t\\t</Scope>\\r\\n\\t\\t<ConfigRuleArn>acs:config::120886317861****:rule/cr-7bc06457e0d90041****</ConfigRuleArn>\\r\\n\\t\\t<ConfigRuleName>RDS实例CPU核数满足最低要求</ConfigRuleName>\\r\\n\\t\\t<RiskLevel>3</RiskLevel>\\r\\n\\t\\t<InputParameters>\\r\\n\\t\\t\\t<cpuCount>2</cpuCount>\\r\\n\\t\\t</InputParameters>\\r\\n\\t</ConfigRule>\\r\\n</DescribeConfigRuleResponse>\\t","errorExample":""}]',
      'title' => '查询规则详情',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PutConfigRule' => 
    array (
      'summary' => '为当前账号新建或修改规则。',
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
      'operationType' => 'write',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConfigRuleId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cr-2a914fcf617e00c9****',
          ),
        ),
        1 => 
        array (
          'name' => 'ConfigRuleName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'RDS实例CPU核数满足最低要求',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则的描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'RDS实例的CPU核数大于等于设置的阈值，视为“合规”。',
          ),
        ),
        3 => 
        array (
          'name' => 'InputParameters',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则入参。',
            'type' => 'string',
            'required' => false,
            'example' => '{"cpuCount": "2"}',
          ),
        ),
        4 => 
        array (
          'name' => 'SourceOwner',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则来源的归属。取值：
- CUSTOM_FC：用户自定义函数。
- ALIYUN：托管规则。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ALIYUN',
            'enum' => 
            array (
              0 => 'ALIYUN',
              1 => 'CUSTOM_FC',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'SourceIdentifier',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则标识。

- 如果规则使用了托管规则，则该参数为规则标识。

- 如果规则使用了自定义函数，则该参数为函数ARN。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rds-cpu-min-count-limit',
          ),
        ),
        6 => 
        array (
          'name' => 'SourceDetailMessageType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则的触发机制。取值：
- ConfigurationItemChangeNotification：配置变更。
- ScheduledNotification：周期执行。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ConfigurationItemChangeNotification',
          ),
        ),
        7 => 
        array (
          'name' => 'SourceMaximumExecutionFrequency',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则执行周期。取值：
- One_Hour：1小时。
- Three_Hours：3小时。
- Six_Hours：6小时。
- Twelve_Hours：12小时。
- TwentyFour_Hours：24小时。',
            'type' => 'string',
            'required' => false,
            'example' => 'Twelve_Hours',
            'enum' => 
            array (
              0 => 'One_Hour',
              1 => 'Three_Hours',
              2 => 'Six_Hours',
              3 => 'Twelve_Hours',
              4 => 'TwentyFour_Hours',
            ),
          ),
        ),
        8 => 
        array (
          'name' => 'ScopeComplianceResourceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待评估资源ID。

- 如果为空，则该规则评估ScopeComplianceResourceTypes指定的所有资源类型。

- 如果不为空，则该规则评估指定的资源。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-6weoy5flv41pj4wvr****',
          ),
        ),
        9 => 
        array (
          'name' => 'ScopeComplianceResourceTypes',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待评估的资源类型列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '["ACS::RDS::DBInstance"]',
          ),
        ),
        10 => 
        array (
          'name' => 'RiskLevel',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '风险等级。取值：
- 1：高风险。
- 2：中风险。
- 3：低风险。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
            'enum' => 
            array (
              0 => '1',
              1 => '2',
              2 => '3',
            ),
          ),
        ),
        11 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '1594295238-f9361358-5843-4294-8d30-b5183fac****',
          ),
        ),
        12 => 
        array (
          'name' => 'MultiAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数计划于2021年06月30日00时00分00秒前下线，其替代功能账号组的API将于2021年05月30日00时00分00秒前上线。如果您正在使用该参数，建议您在2021年05月30日00时00分00秒之后切换为账号组的API。关于账号组，请参见[账号组](~~211534~~)。 ',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        13 => 
        array (
          'name' => 'MemberId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数计划于2021年06月30日00时00分00秒前下线，其替代功能账号组的API将于2021年05月30日00时00分00秒前上线。如果您正在使用该参数，建议您在2021年05月30日00时00分00秒之后切换为账号组的API。关于账号组，请参见[账号组](~~211534~~)。 ',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123456789',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '无。',
            'type' => 'object',
            'properties' => 
            array (
              'ConfigRuleId' => 
              array (
                'description' => '规则ID。',
                'type' => 'string',
                'example' => 'cr-76ac4fcfb57e00c9****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A7A0FFF8-0B44-40C6-8BBF-3A185EFDF3F7',
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
            'errorCode' => 'ExceedMaxRuleCount',
            'errorMessage' => 'The maximum number of rules is exceeded.',
          ),
          1 => 
          array (
            'errorCode' => 'ConfigRuleNotExists',
            'errorMessage' => 'The ConfigRule does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'ConfigRuleExists',
            'errorMessage' => 'The ConfigRule already exists.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountNotExisted',
            'errorMessage' => 'Your account does not exist.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'Config::2020-09-07::CreateConfigRule',
          1 => 'Config::2020-09-07::CreateAggregateConfigRule',
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ConfigRuleId\\": \\"cr-76ac4fcfb57e00c9****\\",\\n  \\"RequestId\\": \\"A7A0FFF8-0B44-40C6-8BBF-3A185EFDF3F7\\"\\n}","errorExample":""},{"type":"xml","example":"<PutConfigRuleResponse>\\n\\t<ConfigRuleId>cr-76ac4fcfb57e00c9****</ConfigRuleId>\\n\\t<RequestId>A7A0FFF8-0B44-40C6-8BBF-3A185EFDF3F7</RequestId>\\n</PutConfigRuleResponse>","errorExample":""}]',
      'title' => '新建或修改规则',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PutEvaluations' => 
    array (
      'summary' => '提交规则评估结果。',
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
      'operationType' => 'write',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResultToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '回调令牌。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '=lAUbfkWp7GL9AFoQEIStinqBMc4FC8sHvip/1F1npkWUDNS2GEm6xwL6Zl/fSr0bbkWY+aiCLjTJxnp4H/yp/8p/Q8VCAtqG5uhRii4sfnYRnTPnE****',
          ),
        ),
        1 => 
        array (
          'name' => 'Evaluations',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '评估结果。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"annotation":"Resource type is ACS::CEN::Flowlog, not in ACS::ECS::Instance,ACS::ECS::NetworkInterface.","complianceResourceId":"flowlog-o6wdfo1yvgo4i8****","complianceResourceType":"ACS::CEN::Flowlog","complianceType":"NOT_APPLICABLE","orderingTimestamp":1588907220408}]',
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
                'example' => 'A7A0FFF8-0B44-40C6-8BBF-3A185EFDF3F7',
              ),
              'Result' => 
              array (
                'description' => '执行状态。取值：

- true：成功

- false：失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'AccountNotExisted',
            'errorMessage' => 'Your account does not exist.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'Config::2020-09-07::PutEvaluations',
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Result\\": true,\\n  \\"RequestId\\": \\"A7A0FFF8-0B44-40C6-8BBF-3A185EFDF3F7\\"\\n}","errorExample":""},{"type":"xml","example":"<PutEvaluationsResponse>\\n    <RequestId>A7A0FFF8-0B44-40C6-8BBF-3A185EFDF3F7</RequestId>\\n    <Result>true</Result>\\n</PutEvaluationsResponse>","errorExample":""}]',
      'title' => '提交评估结果',
      'description' => '****',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ActiveConfigRules' => 
    array (
      'summary' => '批量启用指定规则，使规则状态处于“应用中”。',
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
      'operationType' => 'write',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConfigRuleIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则ID。多个规则ID之间以英文逗号（,）分隔，且不能超过20个。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cr-2da35180a8d1008e****,cr-2da35180a8d1008e****',
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
                'example' => '49C1A88F-D163-46DF-84A6-F300229F37AE',
              ),
              'OperateRuleResult' => 
              array (
                'description' => '批量启用规则结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'OperateRuleItemList' => 
                  array (
                    'description' => '批量启用规则结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ErrorCode' => 
                        array (
                          'description' => '错误码。

- 当您启用规则成功时，该参数为空。

- <props="china">当您启用规则失败时，该参数显示错误码。错误码详情，请参见[错误中心](https://error-center.aliyun.com/status/product/Config)。</props>

- <props="intl">当您启用规则失败时，该参数显示错误码。错误码详情，请参见[错误中心](https://error-center.alibabacloud.com/status/product/Config)。</props>











',
                          'type' => 'string',
                          'example' => 'ConfigRuleStatusNotInActive',
                        ),
                        'Success' => 
                        array (
                          'description' => '启用规则是否成功。取值：
- true：成功
- false： 失败',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'ConfigRuleId' => 
                        array (
                          'description' => '规则ID。',
                          'type' => 'string',
                          'example' => 'cr-2da35180a8d1008e****',
                        ),
                      ),
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
            'errorCode' => 'Invalid.ConfigRuleIds.SizeExceed',
            'errorMessage' => 'The maximum number of ConfigRuleIds cannot exceed 20.',
          ),
          2 => 
          array (
            'errorCode' => 'ConfigRuleStatusNotInActive',
            'errorMessage' => 'The status of the config rule is not inactive.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountNotExisted',
            'errorMessage' => 'Your account does not exist.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'Config::2020-09-07::ActiveConfigRules',
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"49C1A88F-D163-46DF-84A6-F300229F37AE\\",\\n  \\"OperateRuleResult\\": {\\n    \\"OperateRuleItemList\\": [\\n      {\\n        \\"ConfigRuleId\\": \\"cr-2da35180a8d1008e****\\",\\n        \\"ErrorCode\\": \\"ConfigRuleStatusNotInActive\\",\\n        \\"Success\\": false\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ActiveConfigRulesResponse>\\n    <OperateRuleResult>\\n        <OperateRuleItemList>\\n            <ConfigRuleId>cr-2da35180a8d1008e****</ConfigRuleId>\\n            <ErrorCode>ConfigRuleStatusNotInActive</ErrorCode>\\n            <Success>false</Success>\\n        </OperateRuleItemList>\\n        <OperateRuleItemList>\\n            <ConfigRuleId>cr-2da351800131233a****</ConfigRuleId>\\n            <ErrorCode/>\\n            <Success>true</Success>\\n        </OperateRuleItemList>\\n        <RequestId>49C1A88F-D163-46DF-84A6-F300229F37AE</RequestId>\\n    </OperateRuleResult>\\n</ActiveConfigRulesResponse>","errorExample":""}]',
      'title' => '批量启用指定规则',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StartConfigurationRecorder' => 
    array (
      'summary' => '设置当前账号的资源监控范围。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EnterpriseEdition',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否升级企业版配置审计。取值：
- true
- false（默认值）

> 企业版配置审计升级为账号组。更多信息，请参见[公告：企业版配置审计升级为账号组](~~213433~~)。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '无。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A3601178-A6A2-4636-BE56-1116F73C0B0C',
              ),
              'ConfigurationRecorder' => 
              array (
                'description' => '资源监控信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'OrganizationEnableStatus' => 
                  array (
                    'description' => '企业版配置审计升级状态。取值：
- REGISTRABLE：未升级。
- BUILDING：升级中。
- REGISTERED：已升级。
',
                    'type' => 'string',
                    'example' => 'REGISTRABLE',
                  ),
                  'ConfigurationRecorderStatus' => 
                  array (
                    'description' => '资源监控状态。取值：
- REGISTRABLE：未注册。
- BUILDING：构建中。
- REGISTERED：已注册。
- REBUILDING：重新构建中。',
                    'type' => 'string',
                    'example' => 'REGISTRABLE',
                  ),
                  'OrganizationMasterId' => 
                  array (
                    'description' => '企业管理账号ID。

> 仅当企业管理账号调用该接口时，返回该参数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100931896542****',
                  ),
                  'AccountId' => 
                  array (
                    'description' => '阿里云账号ID。

> 仅当普通账号调用该接口时，返回该参数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '120886317861****',
                  ),
                  'ResourceTypes' => 
                  array (
                    'description' => '资源类型列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '资源类型列表。

> 配置审计默认返回全部资源类型，返回示例仅以资源类型`ACS::ECS::Instance`和`ACS::ECS::NetworkInterface`为例进行展示。



',
                      'type' => 'string',
                      'example' => '["ACS::ECS::Instance","ACS::ECS::NetworkInterface"]',
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
            'errorCode' => 'ProcessIsRunning',
            'errorMessage' => 'The process is running.',
          ),
          2 => 
          array (
            'errorCode' => 'RDMemberNoPermission',
            'errorMessage' => 'You are not authorized to perform the operation. The reasons include: 1. You have not enabled the resource directory service. 2. You are not using the administrator account of resource directory.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountNotExisted',
            'errorMessage' => 'Your account does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'CreateSLRFail',
            'errorMessage' => 'Failed to create SLR.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A3601178-A6A2-4636-BE56-1116F73C0B0C\\",\\n  \\"ConfigurationRecorder\\": {\\n    \\"OrganizationEnableStatus\\": \\"REGISTRABLE\\",\\n    \\"ConfigurationRecorderStatus\\": \\"REGISTRABLE\\",\\n    \\"OrganizationMasterId\\": 0,\\n    \\"AccountId\\": 0,\\n    \\"ResourceTypes\\": [\\n      \\"[\\\\\\"ACS::ECS::Instance\\\\\\",\\\\\\"ACS::ECS::NetworkInterface\\\\\\"]\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<StartConfigurationRecorderResponse>\\n    <RequestId>A3601178-A6A2-4636-BE56-1116F73C0B0C</RequestId>\\n    <ConfigurationRecorder>\\n        <ResourceTypes>ACS::ECS::Instance</ResourceTypes>\\n        <ResourceTypes>ACS::ECS::NetworkInterface</ResourceTypes>\\n        <AccountId>120886317861****</AccountId>\\n        <ConfigurationRecorderStatus>REGISTRABLE</ConfigurationRecorderStatus>\\n    </ConfigurationRecorder>\\n</StartConfigurationRecorderResponse>","errorExample":""}]',
      'title' => '设置资源监控范围',
      'description' => '使用普通账号或企业管理账号调用该接口的差异如下：
- 如果您是普通账号，可以调用该接口为当前账号开启配置审计服务。您可以查看当前账号的资源，并管理当前账号的合规规则。
- 如果您是资源目录的企业管理账号，在调用该接口时将参数`EnterpriseEdition`设置为`true`，可以为所有成员账号开启配置审计服务，且默认创建一个包含所有成员账号的全局账号组。您可以在账号组中查看所有成员账号的资源，并管理所有成员账号的合规规则。

本文将提供一个示例，使用普通账号开启配置审计服务并监控当前账号的资源。







',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~169575~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeConfigurationRecorder' => 
    array (
      'summary' => '查询设置的资源监控范围。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
            'description' => '无。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A3601178-A6A2-4636-BE56-1116F73C0B0C',
              ),
              'ConfigurationRecorder' => 
              array (
                'description' => '资源监控信息。
',
                'type' => 'object',
                'properties' => 
                array (
                  'OrganizationEnableStatus' => 
                  array (
                    'description' => '企业版配置审计升级状态。取值：

- REGISTRABLE：未升级。
- BUILDING：升级中。
- REGISTERED：已升级。',
                    'type' => 'string',
                    'example' => 'REGISTRABLE',
                  ),
                  'ConfigurationRecorderStatus' => 
                  array (
                    'description' => '资源监控状态。取值：
- REGISTRABLE：未注册。
- BUILDING：构建中。
- REGISTERED：已注册。
- REBUILDING：重新构建中。',
                    'type' => 'string',
                    'example' => 'REGISTERED',
                  ),
                  'OrganizationMasterId' => 
                  array (
                    'description' => '企业管理账号ID。

> 仅当企业管理账号调用该接口时，返回该参数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '120886317861****',
                  ),
                  'AccountId' => 
                  array (
                    'description' => '当前阿里云账号ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100931896542****',
                  ),
                  'ResourceTypes' => 
                  array (
                    'description' => '资源类型列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '资源类型列表。',
                      'type' => 'string',
                      'example' => '["ACS::ECS::Instance","ACS::ECS::NetworkInterface"]',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountNotExisted',
            'errorMessage' => 'Your account does not exist.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A3601178-A6A2-4636-BE56-1116F73C0B0C\\",\\n  \\"ConfigurationRecorder\\": {\\n    \\"OrganizationEnableStatus\\": \\"REGISTRABLE\\",\\n    \\"ConfigurationRecorderStatus\\": \\"REGISTERED\\",\\n    \\"OrganizationMasterId\\": 0,\\n    \\"AccountId\\": 0,\\n    \\"ResourceTypes\\": [\\n      \\"[\\\\\\"ACS::ECS::Instance\\\\\\",\\\\\\"ACS::ECS::NetworkInterface\\\\\\"]\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeConfigurationRecorderResponse>\\n\\t\\t<RequestId>A3601178-A6A2-4636-BE56-1116F73C0B0C</RequestId>\\n\\t\\t<ConfigurationRecorder>\\n\\t\\t\\t<ResourceTypes>ACS::ECS::Instance</ResourceTypes>\\n\\t\\t\\t<ResourceTypes>ACS::ECS::NetworkInterface</ResourceTypes>\\n\\t\\t\\t<AccountId>100931896542****</AccountId>\\n\\t\\t\\t<ConfigurationRecorderStatus>REGISTERED</ConfigurationRecorderStatus>\\n\\t\\t</ConfigurationRecorder>\\n</DescribeConfigurationRecorderResponse>","errorExample":""}]',
      'title' => '查询资源监控范围',
      'description' => '本文将提供一个示例，查询当前阿里云账号`100931896542****`中资源的监控范围。返回结果显示，资源监控类型为`ACS::ECS::Instance`和`ACS::ECS::NetworkInterface`，资源监控状态为`REGISTERED`（已注册）。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~169575~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PutConfigurationRecorder' => 
    array (
      'summary' => '新增或修改监控中的资源类型。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceTypes',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源类型。多个资源类型之间用半角逗号（,）分隔。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ACS::ECS::Instance,ACS::ECS::Disk',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '无。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7C189ED2-30C1-492E-82B6-0D828B556ED9',
              ),
              'ConfigurationRecorder' => 
              array (
                'description' => '资源监控信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'ConfigurationRecorderStatus' => 
                  array (
                    'description' => '资源监控状态。取值：
- REGISTRABLE：未注册。
- BUILDING：构建中。
- REGISTERED：已注册。
- REBUILDING：重新构建中。',
                    'type' => 'string',
                    'example' => 'REGISTERED',
                  ),
                  'AccountId' => 
                  array (
                    'description' => '当前阿里云账号ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123456789',
                  ),
                  'ResourceTypes' => 
                  array (
                    'description' => '资源类型列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '资源类型列表。',
                      'type' => 'string',
                      'example' => '["ACS::ECS::Instance","ACS::ECS::NetworkInterface"]',
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
            'errorCode' => 'Invalid.ResourceTypes.Value',
            'errorMessage' => 'The specified resourceTypes is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'ProcessIsRunning',
            'errorMessage' => 'The process is running.',
          ),
          3 => 
          array (
            'errorCode' => 'RDMemberNoPermission',
            'errorMessage' => 'You are not authorized to perform the operation. The reasons include: 1. You have not enabled the resource directory service. 2. You are not using the administrator account of resource directory.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountNotExisted',
            'errorMessage' => 'Your account does not exist.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'Config::2020-09-07::UpdateConfigurationRecorder',
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7C189ED2-30C1-492E-82B6-0D828B556ED9\\",\\n  \\"ConfigurationRecorder\\": {\\n    \\"ConfigurationRecorderStatus\\": \\"REGISTERED\\",\\n    \\"AccountId\\": 123456789,\\n    \\"ResourceTypes\\": [\\n      \\"[\\\\\\"ACS::ECS::Instance\\\\\\",\\\\\\"ACS::ECS::NetworkInterface\\\\\\"]\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<PutConfigurationRecorderResponse>\\r\\n\\t\\t<RequestId>7C189ED2-30C1-492E-82B6-0D828B556ED9</RequestId>\\r\\n\\t\\t<ConfigurationRecorder>\\r\\n\\t\\t\\t<ConfigurationRecorderStatus>REBUILDING</ConfigurationRecorderStatus>\\r\\n\\t\\t\\t<ResourceTypes>ACS::ECS::Instance</ResourceTypes>\\r\\n\\t\\t\\t<ResourceTypes>ACS::ECS::Disk</ResourceTypes>\\r\\n\\t\\t\\t<AccountId>123456789</AccountId>\\r\\n\\t\\t</ConfigurationRecorder>\\r\\n</PutConfigurationRecorderResponse>","errorExample":""}]',
      'title' => '修改监控中的资源类型',
      'description' => '该接口仅对当前请求的阿里云账号有效。关于配置审计支持的资源类型，请参见[支持配置审计的云服务](~~127411~~)。



',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDeliveryChannels' => 
    array (
      'summary' => '查询设置的投递渠道信息。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DeliveryChannelIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '投递渠道ID。多个投递渠道ID之间用半角逗号（,）分隔。

关于如何获取投递渠道ID，请参见[PutDeliveryChannel](~~174253~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cdc-d9106457e0d900b1****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'description' => '投递渠道信息。',
            'type' => 'object',
            'properties' => 
            array (
              'DeliveryChannels' => 
              array (
                'description' => '投递渠道信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '投递渠道信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '投递设置状态。取值：
- 0：关闭。
- 1：开启。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'DeliveryChannelName' => 
                    array (
                      'description' => '投递渠道名称。',
                      'type' => 'string',
                      'example' => 'myDeliveryChannel',
                    ),
                    'DeliveryChannelId' => 
                    array (
                      'description' => '投递渠道ID。',
                      'type' => 'string',
                      'example' => 'cdc-d9106457e0d900b1****',
                    ),
                    'DeliveryChannelType' => 
                    array (
                      'description' => '投递渠道类型。取值：
- OSS：对象存储。 
- MNS：消息服务。
- SLS：日志服务。',
                      'type' => 'string',
                      'example' => 'OSS',
                    ),
                    'DeliveryChannelAssumeRoleArn' => 
                    array (
                      'description' => '投递渠道扮演角色ARN。',
                      'type' => 'string',
                      'example' => 'acs:ram::120886317861****:role/aliyunserviceroleforconfig',
                    ),
                    'Description' => 
                    array (
                      'description' => '投递渠道描述。',
                      'type' => 'string',
                      'example' => 'My OSS delivery.',
                    ),
                    'DeliveryChannelCondition' => 
                    array (
                      'description' => '投递渠道附加规则。当前仅MNS类型的投递渠道支持该参数。

您可以指定MNS订阅事件的最低风险等级和资源类型，具体如下：

- 订阅事件的最低风险等级为：`{"filterType":"RuleRiskLevel","value":"1","multiple":false}`。

   value表示您需要过滤的风险等级。取值：1表示高风险，2表示中风险，3表示低风险。

- 订阅事件的资源类型为：`{"filterType":"ResourceType","values":["ACS::ACK::Cluster","ACS::ActionTrail::Trail","ACS::CBWP::CommonBandwidthPackage"],"multiple":true}`。
  
  values表示您需要订阅事件的资源类型，是一个资源类型的JSON数组。

  例如：`[{"filterType":"ResourceType","values":["ACS::ActionTrail::Trail","ACS::CBWP::CommonBandwidthPackage","ACS::CDN::Domain","ACS::CEN::CenBandwidthPackage","ACS::CEN::CenInstance","ACS::CEN::Flowlog","ACS::DdosCoo::Instance"],"multiple":true}]`
',
                      'type' => 'string',
                      'example' => '[{"filterType":"ResourceType","values":["ACS::ActionTrail::Trail","ACS::CBWP::CommonBandwidthPackage","ACS::CDN::Domain","ACS::CEN::CenBandwidthPackage","ACS::CEN::CenInstance","ACS::CEN::Flowlog","ACS::DdosCoo::Instance"],"multiple":true}]',
                    ),
                    'DeliveryChannelTargetArn' => 
                    array (
                      'description' => '投递渠道目标地址的ARN。

- 当DeliveryChannelType为OSS时，该参数为Bucket的ARN。

- 当DeliveryChannelType为MNS时，该参数为Topic的ARN。

- 当DeliveryChannelType为SLS时，该参数为Logstore的ARN。',
                      'type' => 'string',
                      'example' => 'acs:oss:cn-shanghai:120886317861****:new-bucket',
                    ),
                    'ConfigurationSnapshot' => 
                    array (
                      'description' => '是否接收资源定时快照。每天00:00:00和12:00:00，配置审计定时向对象存储OSS投递资源定时快照。取值：
- true：接收资源定时快照。
- false：不接收资源定时快照。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'ConfigurationItemChangeNotification' => 
                    array (
                      'description' => '是否接收资源配置变更历史。当资源配置变更时，配置审计向对象存储OSS、日志服务SLS或消息服务MNS投递资源配置变更历史。取值：
- true：接收资源配置变更历史。
- false：不接收资源配置变更历史。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'NonCompliantNotification' => 
                    array (
                      'description' => '是否接收资源不合规事件。当资源不合规时，配置审计向日志服务SLS或消息服务MNS投递资源不合规事件。取值： 
- true：接收资源不合规事件。
- false：不接收资源不合规事件。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'OversizedDataOSSTargetArn' => 
                    array (
                      'description' => '当投递数据超过投递渠道限制时，投递数据转存到对象存储OSS的目标存储空间。
',
                      'type' => 'string',
                      'example' => 'acs:oss:cn-shanghai:100931896542****:new-bucket',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DC300244-FCE3-5061-8214-C27ECB668487',
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
            'errorCode' => 'DeliveryChannelNotExists',
            'errorMessage' => 'The delivery channel does not exist.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountNotExisted',
            'errorMessage' => 'Your account does not exist.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'Config::2020-09-07::ListConfigDeliveryChannels',
          1 => 'Config::2020-09-07::ListAggregateConfigDeliveryChannels',
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DeliveryChannels\\": [\\n    {\\n      \\"Status\\": 1,\\n      \\"DeliveryChannelName\\": \\"myDeliveryChannel\\",\\n      \\"DeliveryChannelId\\": \\"cdc-d9106457e0d900b1****\\",\\n      \\"DeliveryChannelType\\": \\"OSS\\",\\n      \\"DeliveryChannelAssumeRoleArn\\": \\"acs:ram::120886317861****:role/aliyunserviceroleforconfig\\",\\n      \\"Description\\": \\"My OSS delivery.\\",\\n      \\"DeliveryChannelCondition\\": \\"[{\\\\\\"filterType\\\\\\":\\\\\\"ResourceType\\\\\\",\\\\\\"values\\\\\\":[\\\\\\"ACS::ActionTrail::Trail\\\\\\",\\\\\\"ACS::CBWP::CommonBandwidthPackage\\\\\\",\\\\\\"ACS::CDN::Domain\\\\\\",\\\\\\"ACS::CEN::CenBandwidthPackage\\\\\\",\\\\\\"ACS::CEN::CenInstance\\\\\\",\\\\\\"ACS::CEN::Flowlog\\\\\\",\\\\\\"ACS::DdosCoo::Instance\\\\\\"],\\\\\\"multiple\\\\\\":true}]\\",\\n      \\"DeliveryChannelTargetArn\\": \\"acs:oss:cn-shanghai:120886317861****:new-bucket\\",\\n      \\"ConfigurationSnapshot\\": false,\\n      \\"ConfigurationItemChangeNotification\\": true,\\n      \\"NonCompliantNotification\\": false,\\n      \\"OversizedDataOSSTargetArn\\": \\"acs:oss:cn-shanghai:100931896542****:new-bucket\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"DC300244-FCE3-5061-8214-C27ECB668487\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDeliveryChannelsResponse>\\n\\t<DeliveryChannels>\\n\\t\\t<Status>1</Status>\\n\\t\\t<ConfigurationSnapshot>false</ConfigurationSnapshot>\\n\\t\\t<OversizedDataOSSTargetArn></OversizedDataOSSTargetArn>\\n\\t\\t<Description>My OSS delivery.</Description>\\n\\t\\t<DeliveryChannelName>myDeliveryChannel</DeliveryChannelName>\\n\\t\\t<DeliveryChannelId>cdc-d9106457e0d900b1****</DeliveryChannelId>\\n\\t\\t<DeliveryChannelTargetArn>acs:oss:cn-shanghai:120886317861****:new-bucket</DeliveryChannelTargetArn>\\n\\t\\t<DeliveryChannelAssumeRoleArn>acs:ram::120886317861****:role/aliyunserviceroleforconfig</DeliveryChannelAssumeRoleArn>\\n\\t\\t<ConfigurationItemChangeNotification>true</ConfigurationItemChangeNotification>\\n\\t\\t<DeliveryChannelType>OSS</DeliveryChannelType>\\n\\t\\t<DeliveryChannelCondition></DeliveryChannelCondition>\\n\\t\\t<NonCompliantNotification>false</NonCompliantNotification>\\n\\t</DeliveryChannels>\\n\\t<RequestId>DC300244-FCE3-5061-8214-C27ECB668487</RequestId>\\n</DescribeDeliveryChannelsResponse>\\t","errorExample":""}]',
      'title' => '查询投递渠道信息',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PutDeliveryChannel' => 
    array (
      'summary' => '为当前账号创建或更新投递渠道。',
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
      'operationType' => 'write',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '1594295238-f9361358-5843-4294-8d30-b5183fac****',
          ),
        ),
        1 => 
        array (
          'name' => 'DeliveryChannelId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '投递渠道ID。当您更新指定投递渠道时，必须填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'cdc-193f6457e0d90080****',
          ),
        ),
        2 => 
        array (
          'name' => 'DeliveryChannelName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '投递渠道名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'testoss',
          ),
        ),
        3 => 
        array (
          'name' => 'DeliveryChannelType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '投递渠道类型。当您创建投递渠道时，必须填写。取值：

- OSS：对象存储

- MNS：消息服务

- SLS：日志服务
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'OSS',
            'enum' => 
            array (
              0 => 'OSS',
              1 => 'MNS',
              2 => 'SLS',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'DeliveryChannelTargetArn',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '投递渠道目标地址的ARN。当您创建投递渠道时，必须填写。取值：

- 当投递渠道为OSS时，格式为：`acs:oss:{RegionId}:{Aliuid}:{bucketName}`。

- 当投递渠道为MNS时，格式为：`acs:mns:{RegionId}:{Aliuid}:/topics/{topicName}`。

- 当投递渠道为SLS时，格式为：`acs:log:{RegionId}:{Aliuid}:project/{projectName}/logstore/{logstoreName}`
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'acs:oss:cn-hangzhou:100931896542****:20171130--1',
          ),
        ),
        5 => 
        array (
          'name' => 'DeliveryChannelAssumeRoleArn',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '投递角色ARN。当您创建投递渠道时，必须填写。

> 如果您使用配置审计服务角色，则可按照示例值填写，将其中的账号ID替换为您的真实账号ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'acs:ram::100931896542****:role/aliyunserviceroleforconfig',
          ),
        ),
        6 => 
        array (
          'name' => 'DeliveryChannelCondition',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '投递渠道附加规则。当前仅支持MNS类型的投递渠道。

您可以指定MNS订阅事件的最低风险等级和资源类型，具体如下：

- 订阅事件的最低风险等级为：`{"filterType":"RuleRiskLevel","value":"1","multiple":false}`。

    value表示您需要过滤的风险等级。取值：1表示高风险，2表示中风险，3表示低风险。

- 订阅事件的资源类型为：`{"filterType":"ResourceType","values":["ACS::ACK::Cluster","ACS::ActionTrail::Trail","ACS::CBWP::CommonBandwidthPackage"],"multiple":true}`。
    
    values表示您需要订阅事件的资源类型，是一个资源类型的JSON数组。
    例如：
`[{"filterType":"ResourceType","values":["ACS::ActionTrail::Trail","ACS::CBWP::CommonBandwidthPackage","ACS::CDN::Domain","ACS::CEN::CenBandwidthPackage","ACS::CEN::CenInstance","ACS::CEN::Flowlog","ACS::DdosCoo::Instance"],"multiple":true}]`

',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '[{"filterType":"ResourceType","values":["ACS::ActionTrail::Trail","ACS::CBWP::CommonBandwidthPackage","ACS::CDN::Domain","ACS::CEN::CenBandwidthPackage","ACS::CEN::CenInstance","ACS::CEN::Flowlog","ACS::DdosCoo::Instance"],"multiple":true}]',
          ),
        ),
        7 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '投递渠道描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'My OSS delivery.',
          ),
        ),
        8 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '投递渠道状态。取值：

- 0：停用

- 1（默认值）：启用',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
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
                'example' => '0D6B9E0A-AD53-4732-922B-0F584ECA5FAB',
              ),
              'DeliveryChannelId' => 
              array (
                'description' => '创建或更新投递渠道成功后，返回的投递渠道ID。',
                'type' => 'string',
                'example' => 'cdc-ee0f626622af0069****',
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
            'errorCode' => 'DeliveryChannelNotExists',
            'errorMessage' => 'The delivery channel does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'Invalid.DeliveryChannelName.Empty',
            'errorMessage' => 'You must specify DeliveryChannelName.',
          ),
          2 => 
          array (
            'errorCode' => 'Invalid.DeliveryChannelType.Empty',
            'errorMessage' => 'You must specify DeliveryChannelType.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.DeliveryChannelAssumeRoleArn.Empty',
            'errorMessage' => 'You must specify DeliveryChannelAssumeRoleArn.',
          ),
          4 => 
          array (
            'errorCode' => 'Invalid.DeliveryChannelAssumeRoleArn.Format',
            'errorMessage' => 'The specified format of DeliveryChannelAssumeRoleArn is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.DeliveryChannelTargetArn.Empty',
            'errorMessage' => 'You must specify DeliveryChannelTargetArn.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.DeliveryChannelTargetArn.Format',
            'errorMessage' => 'The specified format of DeliveryChannelTargetArn is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.DeliveryChannelCondition.Format',
            'errorMessage' => 'The specified format of DeliveryChannelCondition is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'MemberNotBelongToMaster',
            'errorMessage' => 'The specified member does not belong to your organization.',
          ),
          9 => 
          array (
            'errorCode' => 'DeliveryChannelAccountNotSupport',
            'errorMessage' => 'Cross-account delivery that is not in the RD is not supported.',
          ),
          10 => 
          array (
            'errorCode' => 'DeliveryChannelMnsUnreachable',
            'errorMessage' => 'The MNS topic is unreachable.',
          ),
          11 => 
          array (
            'errorCode' => 'DeliveryChannelOssUnreachable',
            'errorMessage' => 'The OSS bucket is unreachable.',
          ),
          12 => 
          array (
            'errorCode' => 'DeliveryChannelSlsUnreachable',
            'errorMessage' => 'SLS logstore is unreachable.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountNotExisted',
            'errorMessage' => 'Your account does not exist.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'Config::2020-09-07::CreateConfigDeliveryChannel',
          1 => 'Config::2020-09-07::CreateAggregateConfigDeliveryChannel',
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DeliveryChannelId\\": \\"cdc-ee0f626622af0069****\\",\\n  \\"RequestId\\": \\"0D6B9E0A-AD53-4732-922B-0F584ECA5FAB\\"\\n}","errorExample":""},{"type":"xml","example":"<PutDeliveryChannelResponse>\\n    <RequestId>0D6B9E0A-AD53-4732-922B-0F584ECA5FAB</RequestId>\\n    <DeliveryChannelId>cdc-ee0f626622af0069****</DeliveryChannelId>\\n</PutDeliveryChannelResponse>","errorExample":""}]',
      'title' => '创建或更新投递渠道',
      'description' => '****',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetAggregateDiscoveredResource' => 
    array (
      'summary' => '查询指定账号组内指定资源详情。',
      'methods' => 
      array (
        0 => 'get',
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源ID。

关于如何获取资源ID，请参见[ListAggregateDiscoveredResources](~~265983~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'new-bucket',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。

关于如何获取资源类型，请参见[ListAggregateDiscoveredResources](~~265983~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ACS::OSS::Bucket',
          ),
        ),
        2 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源所在地域ID。

关于如何获取资源所在地域ID，请参见[ListAggregateDiscoveredResources](~~265983~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'AggregatorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号组ID。

关于如何获取账号组ID，请参见[ListAggregators](~~255797~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ca-5885626622af0008****',
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
                'example' => 'E4D71ACE-6B0A-46E0-8352-56952378CC7F',
              ),
              'DiscoveredResourceDetail' => 
              array (
                'description' => '资源详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'AvailabilityZone' => 
                  array (
                    'description' => '资源可用区。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou-h',
                  ),
                  'ResourceType' => 
                  array (
                    'description' => '资源类型。',
                    'type' => 'string',
                    'example' => 'ACS::OSS::BucketACS::CDN::Domain',
                  ),
                  'Configuration' => 
                  array (
                    'description' => '资源的完整配置信息。',
                    'type' => 'string',
                    'example' => '{\\"AccessControlList\\":{\\"Grant\\":\\"private\\"},\\"ServerSideEncryptionRule\\":{\\"SSEAlgorithm\\":\\"None\\"},\\"Comment\\":\\"\\",\\"CreationDate\\":\\"2021-06-29T10:05:12.000Z\\",\\"Owner\\":{\\"DisplayName\\":\\"100931896542****\\",\\"ID\\":\\"100931896542****\\"},\\"StorageClass\\":\\"Standard\\",\\"DataRedundancyType\\":\\"LRS\\",\\"AllowEmptyReferer\\":\\"true\\",\\"Name\\":\\"new-bucket\\",\\"BucketPolicy\\":{\\"LogPrefix\\":\\"\\",\\"LogBucket\\":\\"\\"},\\"ExtranetEndpoint\\":\\"oss-cn-hangzhou.aliyuncs.com\\",\\"IntranetEndpoint\\":\\"oss-cn-hangzhou-internal.aliyuncs.com\\",\\"Location\\":\\"oss-cn-hangzhou\\"}',
                  ),
                  'Region' => 
                  array (
                    'description' => '地域ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'ResourceCreationTime' => 
                  array (
                    'description' => '资源创建时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1624961112000',
                  ),
                  'Tags' => 
                  array (
                    'description' => '资源标签。',
                    'type' => 'string',
                    'example' => '{\\"\\"hc\\"\\":[\\"\\"value2\\"\\"]}',
                  ),
                  'AccountId' => 
                  array (
                    'description' => '资源拥有者的阿里云账号ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100931896542****',
                  ),
                  'ResourceId' => 
                  array (
                    'description' => '资源ID。',
                    'type' => 'string',
                    'example' => 'new-bucket',
                  ),
                  'ResourceDeleted' => 
                  array (
                    'description' => '资源删除状态。取值：
- 1：未删除。
- 0：已删除。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'ResourceName' => 
                  array (
                    'description' => '资源名称。',
                    'type' => 'string',
                    'example' => 'new-bucket',
                  ),
                  'ResourceStatus' => 
                  array (
                    'description' => '资源状态。资源的状态取决于各云服务对其的定义，该参数可能为空。例如：

- 当资源类型为ACS::ECS::Instance时，由于ECS实例有状态，因此该参数为Running或Stopped。

- 当资源类型为ACS::OSS::Bucket时，由于OSS Bucket无状态，因此该参数为空。',
                    'type' => 'string',
                    'example' => 'offline',
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
            'errorCode' => 'MemberNotBelongToMaster',
            'errorMessage' => 'The specified member does not belong to your organization.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountNotExisted',
            'errorMessage' => 'Your account does not exist.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'Config::2020-09-07::GetAggregateDiscoveredResource',
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4D71ACE-6B0A-46E0-8352-56952378CC7F\\",\\n  \\"DiscoveredResourceDetail\\": {\\n    \\"AvailabilityZone\\": \\"cn-hangzhou-h\\",\\n    \\"ResourceType\\": \\"ACS::OSS::BucketACS::CDN::Domain\\",\\n    \\"Configuration\\": \\"{\\\\\\\\\\\\\\"AccessControlList\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"Grant\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"private\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"ServerSideEncryptionRule\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"SSEAlgorithm\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"None\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"Comment\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"CreationDate\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"2021-06-29T10:05:12.000Z\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Owner\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"DisplayName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"100931896542****\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"ID\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"100931896542****\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"StorageClass\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"Standard\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"DataRedundancyType\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"LRS\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"AllowEmptyReferer\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"true\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"new-bucket\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"BucketPolicy\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"LogPrefix\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"LogBucket\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"ExtranetEndpoint\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"oss-cn-hangzhou.aliyuncs.com\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"IntranetEndpoint\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"oss-cn-hangzhou-internal.aliyuncs.com\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Location\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"oss-cn-hangzhou\\\\\\\\\\\\\\"}\\",\\n    \\"Region\\": \\"cn-hangzhou\\",\\n    \\"ResourceCreationTime\\": 1624961112000,\\n    \\"Tags\\": \\"{\\\\\\\\\\\\\\"\\\\\\\\\\\\\\"hc\\\\\\\\\\\\\\"\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"\\\\\\\\\\\\\\"value2\\\\\\\\\\\\\\"\\\\\\\\\\\\\\"]}\\",\\n    \\"AccountId\\": 0,\\n    \\"ResourceId\\": \\"new-bucket\\",\\n    \\"ResourceDeleted\\": 1,\\n    \\"ResourceName\\": \\"new-bucket\\",\\n    \\"ResourceStatus\\": \\"offline\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAggregateDiscoveredResourceResponse>\\n\\t<RequestId>E4D71ACE-6B0A-46E0-8352-56952378CC7F</RequestId>\\n\\t<DiscoveredResourceDetail>\\n\\t\\t<AccountId>100931896542****</AccountId>\\n\\t\\t<ResourceCreationTime>1624961112000</ResourceCreationTime>\\n\\t\\t<Configuration>{\\\\\\"AccessControlList\\\\\\":{\\\\\\"Grant\\\\\\":\\\\\\"private\\\\\\"},\\\\\\"ServerSideEncryptionRule\\\\\\":{\\\\\\"SSEAlgorithm\\\\\\":\\\\\\"None\\\\\\"},\\\\\\"Comment\\\\\\":\\\\\\"\\\\\\",\\\\\\"CreationDate\\\\\\":\\\\\\"2021-06-29T10:05:12.000Z\\\\\\",\\\\\\"Owner\\\\\\":{\\\\\\"DisplayName\\\\\\":\\\\\\"100931896542****\\\\\\",\\\\\\"ID\\\\\\":\\\\\\"100931896542****\\\\\\"},\\\\\\"StorageClass\\\\\\":\\\\\\"Standard\\\\\\",\\\\\\"DataRedundancyType\\\\\\":\\\\\\"LRS\\\\\\",\\\\\\"AllowEmptyReferer\\\\\\":\\\\\\"true\\\\\\",\\\\\\"Name\\\\\\":\\\\\\"new-bucket\\\\\\",\\\\\\"BucketPolicy\\\\\\":{\\\\\\"LogPrefix\\\\\\":\\\\\\"\\\\\\",\\\\\\"LogBucket\\\\\\":\\\\\\"\\\\\\"},\\\\\\"ExtranetEndpoint\\\\\\":\\\\\\"oss-cn-hangzhou.aliyuncs.com\\\\\\",\\\\\\"IntranetEndpoint\\\\\\":\\\\\\"oss-cn-hangzhou-internal.aliyuncs.com\\\\\\",\\\\\\"Location\\\\\\":\\\\\\"oss-cn-hangzhou\\\\\\"}</Configuration>\\n\\t\\t<ResourceId>new-bucket</ResourceId>\\n\\t\\t<ResourceName>new-bucket</ResourceName>\\n\\t\\t<Region>cn-hangzhou</Region>\\n\\t\\t<AvailabilityZone>cn-hangzhou-h</AvailabilityZone>\\n\\t\\t<ResourceStatus></ResourceStatus>\\n\\t\\t<ResourceType>ACS::OSS::Bucket</ResourceType>\\n\\t\\t<ResourceDeleted>1</ResourceDeleted>\\n\\t\\t<Tags>{\\\\\\"\\\\\\"hc\\\\\\"\\\\\\":[\\\\\\"\\\\\\"value2\\\\\\"\\\\\\"]}</Tags>\\n\\t</DiscoveredResourceDetail>\\n</GetAggregateDiscoveredResourceResponse>\\t","errorExample":""}]',
      'title' => '查询资源详情',
      'description' => '本文将提供一个示例，查询账号组`ca-5885626622af0008****`内资源`new-bucket`的详情。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~169575~~)。',
    ),
    'ListAggregateDiscoveredResources' => 
    array (
      'summary' => '查询指定账号组内的资源列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'eni-hp31cqoba96jagtz****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceDeleted',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源状态。取值：

- 0：已删除。
- 1（默认值）：保有中。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页时每页显示的数据行数。

取值范围：1~100。起始值：1。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。

起始值：1。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '100000',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceTypes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。多个资源类型之间用半角逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'ACS::ECS::NetworkInterface',
          ),
        ),
        5 => 
        array (
          'name' => 'Regions',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源归属的地域ID。多个地域ID之间用半角逗号（,）分隔。

关于如何获取资源所在地域ID，请参见[ListAggregateDiscoveredResources](~~265983~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-huhehaote',
          ),
        ),
        6 => 
        array (
          'name' => 'AggregatorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号组ID。

关于如何获取账号组ID，请参见[ListAggregators](~~255797~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ca-c560626622af0005****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '无。',
            'type' => 'object',
            'properties' => 
            array (
              'DiscoveredResourceProfiles' => 
              array (
                'description' => '资源列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'DiscoveredResourceProfileList' => 
                  array (
                    'description' => '资源列表详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '无。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ResourceType' => 
                        array (
                          'description' => '资源类型。',
                          'type' => 'string',
                          'example' => 'ACS::ECS::NetworkInterface',
                        ),
                        'Region' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-huhehaote',
                        ),
                        'ResourceCreationTime' => 
                        array (
                          'description' => '资源创建时间戳。单位：毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1618675206000',
                        ),
                        'Tags' => 
                        array (
                          'description' => '资源标签。',
                          'type' => 'string',
                          'example' => '{\\"key1\\":[\\"value2\\"]}',
                        ),
                        'AccountId' => 
                        array (
                          'description' => '资源拥有者的阿里云账号ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '161259599160****',
                        ),
                        'ResourceId' => 
                        array (
                          'description' => '资源ID。',
                          'type' => 'string',
                          'example' => 'eni-hp31cqoba96jagtz****',
                        ),
                        'ResourceName' => 
                        array (
                          'description' => '资源名称。',
                          'type' => 'string',
                          'example' => 'Cloud Firewall',
                        ),
                        'ResourceDeleted' => 
                        array (
                          'description' => '资源状态。取值：
- 0：已删除。
- 1：保有中。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'ResourceStatus' => 
                        array (
                          'description' => '资源状态。资源的状态取决于各云服务对其的定义，该参数可能为空。例如：
- 当资源类型为ACS::ECS::Instance时，由于ECS实例有状态，因此该参数为Running或Stopped。
- 当资源类型为ACS::OSS::Bucket时，由于OSS Bucket无状态，因此该参数为空。',
                          'type' => 'string',
                          'example' => 'InUse',
                        ),
                        'ResourceOwnerId' => 
                        array (
                          'description' => '资源拥有者的阿里云账号ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '161259599160****',
                        ),
                      ),
                    ),
                  ),
                  'PageNumber' => 
                  array (
                    'description' => '资源列表的页码。起始值：1。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '分页查询时设置的每页行数。取值范围：1~100。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '资源总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '8',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C7817373-78CB-4F9A-8AFA-E7A88E9D64A2',
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
            'errorCode' => 'MemberNotBelongToMaster',
            'errorMessage' => 'The specified member does not belong to your organization.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountNotExisted',
            'errorMessage' => 'Your account does not exist.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'Config::2020-09-07::ListAggregateDiscoveredResources',
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DiscoveredResourceProfiles\\": {\\n    \\"DiscoveredResourceProfileList\\": [\\n      {\\n        \\"ResourceType\\": \\"ACS::ECS::NetworkInterface\\",\\n        \\"Region\\": \\"cn-huhehaote\\",\\n        \\"ResourceCreationTime\\": 1618675206000,\\n        \\"Tags\\": \\"{\\\\\\\\\\\\\\"key1\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"value2\\\\\\\\\\\\\\"]}\\",\\n        \\"AccountId\\": 0,\\n        \\"ResourceId\\": \\"eni-hp31cqoba96jagtz****\\",\\n        \\"ResourceName\\": \\"Cloud Firewall\\",\\n        \\"ResourceDeleted\\": 1,\\n        \\"ResourceStatus\\": \\"InUse\\",\\n        \\"ResourceOwnerId\\": 0\\n      }\\n    ],\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 8\\n  },\\n  \\"RequestId\\": \\"C7817373-78CB-4F9A-8AFA-E7A88E9D64A2\\"\\n}","errorExample":""},{"type":"xml","example":"<ListAggregateDiscoveredResourcesResponse>\\n\\t<DiscoveredResourceProfiles>\\n\\t\\t<DiscoveredResourceProfileList>\\n\\t\\t\\t<ResourceType>ACS::ECS::NetworkInterface</ResourceType>\\n\\t\\t\\t<Region>cn-huhehaote</Region>\\n\\t\\t\\t<ResourceCreationTime>1618675206000</ResourceCreationTime>\\n\\t\\t\\t<Tags>{\\\\\\"key1\\\\\\":[\\\\\\"value2\\\\\\"]}</Tags>\\n\\t\\t\\t<ResourceId>eni-hp31cqoba96jagtz****</ResourceId>\\n\\t\\t\\t<ResourceName>Cloud Firewall</ResourceName>\\n\\t\\t\\t<ResourceDeleted>1</ResourceDeleted>\\n\\t\\t\\t<ResourceStatus>InUse</ResourceStatus>\\n\\t\\t</DiscoveredResourceProfileList>\\n\\t\\t<PageNumber>1</PageNumber>\\n\\t\\t<PageSize>10</PageSize>\\n\\t\\t<TotalCount>8</TotalCount>\\n\\t</DiscoveredResourceProfiles>\\n\\t<RequestId>C7817373-78CB-4F9A-8AFA-E7A88E9D64A2</RequestId>\\n</ListAggregateDiscoveredResourcesResponse>\\t","errorExample":""}]',
      'title' => '查询账号组资源列表',
      'description' => '本文将提供一个示例，查询账号组`ca-c560626622af0005****`内的资源列表。返回结果显示资源列表中的所有资源，共8个。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~169575~~)。',
    ),
    'ListRemediationTemplates' => 
    array (
      'summary' => '查询指定托管规则的修正模板详情。',
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RemediationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修正类型。仅支持OOS（运维编排）。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'OOS',
          ),
        ),
        1 => 
        array (
          'name' => 'ManagedRuleIdentifier',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '托管规则标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'oss-bucket-public-write-prohibited',
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
                'example' => 'FC2C4750-7024-499C-A69F-763543D1CBE3',
              ),
              'RemediationTemplates' => 
              array (
                'description' => '修正模板列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RemediationType' => 
                    array (
                      'description' => '修正类型。仅支持OOS（运维编排）。',
                      'type' => 'string',
                      'example' => 'OOS',
                    ),
                    'TemplateIdentifier' => 
                    array (
                      'description' => '修正模板ID。',
                      'type' => 'string',
                      'example' => 'ACS-OSS-PutBucketAcl',
                    ),
                    'TemplateName' => 
                    array (
                      'description' => '修正模板名称。',
                      'type' => 'string',
                      'example' => 'Set the ACL of an OSS bucket to private.',
                    ),
                    'TemplateDefinition' => 
                    array (
                      'description' => '修正模板定义。',
                      'type' => 'string',
                      'example' => '{\\n  \\"Parameters\\": {\\n    \\"regionId\\": {\\n      \\"Type\\": \\"String\\",\\n      \\"Description\\": \\"The id of target region.\\",\\n      \\"AssociationProperty\\": \\"RegionId\\",\\n      \\"Default\\": \\"{regionId}\\"\\n    },\\n    \\"bucketName\\": {\\n      \\"Description\\": {\\n        \\"en\\": \\"The OSS bucket name.\\",\\n        \\"zh-cn\\": \\"OSS Bucket名称。\\"\\n      },\\n      \\"Type\\": \\"String\\",\\n      \\"Default\\": \\"{resourceId}\\"\\n    },\\n    \\"permissionName\\": {\\n      \\"Description\\": {\\n        \\"en\\": \\"The acl permission name.\\",\\n        \\"zh-cn\\": \\"ACL权限名称。\\"\\n      },\\n      \\"Type\\": \\"String\\",\\n      \\"Default\\": \\"private\\",\\n      \\"AllowedValues\\": [\\n        \\"public-read-write\\",\\n        \\"public-read\\",\\n        \\"private\\"\\n      ]\\n    }\\n  }\\n}',
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
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'Config::2020-09-07::ListRemediationTemplates',
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FC2C4750-7024-499C-A69F-763543D1CBE3\\",\\n  \\"RemediationTemplates\\": [\\n    {\\n      \\"RemediationType\\": \\"OOS\\",\\n      \\"TemplateIdentifier\\": \\"ACS-OSS-PutBucketAcl\\",\\n      \\"TemplateName\\": \\"Set the ACL of an OSS bucket to private.\\",\\n      \\"TemplateDefinition\\": \\"{\\\\\\\\n  \\\\\\\\\\\\\\"Parameters\\\\\\\\\\\\\\": {\\\\\\\\n    \\\\\\\\\\\\\\"regionId\\\\\\\\\\\\\\": {\\\\\\\\n      \\\\\\\\\\\\\\"Type\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"String\\\\\\\\\\\\\\",\\\\\\\\n      \\\\\\\\\\\\\\"Description\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"The id of target region.\\\\\\\\\\\\\\",\\\\\\\\n      \\\\\\\\\\\\\\"AssociationProperty\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"RegionId\\\\\\\\\\\\\\",\\\\\\\\n      \\\\\\\\\\\\\\"Default\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"{regionId}\\\\\\\\\\\\\\"\\\\\\\\n    },\\\\\\\\n    \\\\\\\\\\\\\\"bucketName\\\\\\\\\\\\\\": {\\\\\\\\n      \\\\\\\\\\\\\\"Description\\\\\\\\\\\\\\": {\\\\\\\\n        \\\\\\\\\\\\\\"en\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"The OSS bucket name.\\\\\\\\\\\\\\",\\\\\\\\n        \\\\\\\\\\\\\\"zh-cn\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"OSS Bucket名称。\\\\\\\\\\\\\\"\\\\\\\\n      },\\\\\\\\n      \\\\\\\\\\\\\\"Type\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"String\\\\\\\\\\\\\\",\\\\\\\\n      \\\\\\\\\\\\\\"Default\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"{resourceId}\\\\\\\\\\\\\\"\\\\\\\\n    },\\\\\\\\n    \\\\\\\\\\\\\\"permissionName\\\\\\\\\\\\\\": {\\\\\\\\n      \\\\\\\\\\\\\\"Description\\\\\\\\\\\\\\": {\\\\\\\\n        \\\\\\\\\\\\\\"en\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"The acl permission name.\\\\\\\\\\\\\\",\\\\\\\\n        \\\\\\\\\\\\\\"zh-cn\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"ACL权限名称。\\\\\\\\\\\\\\"\\\\\\\\n      },\\\\\\\\n      \\\\\\\\\\\\\\"Type\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"String\\\\\\\\\\\\\\",\\\\\\\\n      \\\\\\\\\\\\\\"Default\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"private\\\\\\\\\\\\\\",\\\\\\\\n      \\\\\\\\\\\\\\"AllowedValues\\\\\\\\\\\\\\": [\\\\\\\\n        \\\\\\\\\\\\\\"public-read-write\\\\\\\\\\\\\\",\\\\\\\\n        \\\\\\\\\\\\\\"public-read\\\\\\\\\\\\\\",\\\\\\\\n        \\\\\\\\\\\\\\"private\\\\\\\\\\\\\\"\\\\\\\\n      ]\\\\\\\\n    }\\\\\\\\n  }\\\\\\\\n}\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListRemediationTemplatesResponse>\\n\\t<RequestId>B62CE8A9-8FED-432A-B51E-EADBD1450B5C</RequestId>\\n\\t<RemediationTemplates>\\n\\t\\t<TemplateIdentifier>ACS-OSS-PutBucketAcl</TemplateIdentifier>\\n\\t\\t<TemplateName>Set the ACL of an OSS bucket to private.</TemplateName>\\n\\t\\t<TemplateDefinition>\\n\\t\\t\\t{\\\\n  \\\\\\"Parameters\\\\\\": {\\\\n    \\\\\\"regionId\\\\\\": {\\\\n      \\\\\\"Type\\\\\\": \\\\\\"String\\\\\\",\\\\n      \\\\\\"Description\\\\\\": \\\\\\"The id of target region.\\\\\\",\\\\n      \\\\\\"AssociationProperty\\\\\\": \\\\\\"RegionId\\\\\\",\\\\n      \\\\\\"Default\\\\\\": \\\\\\"{regionId}\\\\\\"\\\\n    },\\\\n    \\\\\\"bucketName\\\\\\": {\\\\n      \\\\\\"Description\\\\\\": {\\\\n        \\\\\\"en\\\\\\": \\\\\\"The OSS bucket name.\\\\\\",\\\\n        \\\\\\"zh-cn\\\\\\": \\\\\\"OSS Bucket名称。\\\\\\"\\\\n      },\\\\n      \\\\\\"Type\\\\\\": \\\\\\"String\\\\\\",\\\\n      \\\\\\"Default\\\\\\": \\\\\\"{resourceId}\\\\\\"\\\\n    },\\\\n    \\\\\\"permissionName\\\\\\": {\\\\n      \\\\\\"Description\\\\\\": {\\\\n        \\\\\\"en\\\\\\": \\\\\\"The acl permission name.\\\\\\",\\\\n        \\\\\\"zh-cn\\\\\\": \\\\\\"ACL权限名称。\\\\\\"\\\\n      },\\\\n      \\\\\\"Type\\\\\\": \\\\\\"String\\\\\\",\\\\n      \\\\\\"Default\\\\\\": \\\\\\"private\\\\\\",\\\\n      \\\\\\"AllowedValues\\\\\\": [\\\\n        \\\\\\"public-read-write\\\\\\",\\\\n        \\\\\\"public-read\\\\\\",\\\\n        \\\\\\"private\\\\\\"\\\\n      ]\\\\n    }\\\\n  }\\\\n}</TemplateDefinition>\\n\\t\\t<RemediationType>OOS</RemediationType>\\n\\t</RemediationTemplates>\\n</ListRemediationTemplatesResponse>\\t","errorExample":""}]',
      'title' => '查询修正模板详情',
      'description' => '本文将提供一个示例，查询托管规则`oss-bucket-public-write-prohibited`的修正模板详情。返回结果显示修正类型`OOS`（运维编排）的模板详情。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~251751~~)。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'config.cn-shanghai.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'config.ap-southeast-1.aliyuncs.com',
    ),
  ),
);
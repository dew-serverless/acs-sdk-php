<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'pvtz',
    'version' => '2018-01-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 66956,
      'title' => '公共',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SetProxyPattern',
        1 => 'DescribeChangeLogs',
        2 => 'DescribeRegions',
        3 => 'MoveResourceGroup',
      ),
    ),
    1 => 
    array (
      'id' => 66961,
      'title' => 'Zone',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddZone',
        1 => 'DeleteZone',
        2 => 'UpdateZoneRemark',
        3 => 'DescribeZoneInfo',
        4 => 'DescribeZones',
        5 => 'DescribeZoneVpcTree',
        6 => 'BindZoneVpc',
        7 => 'CheckZoneName',
      ),
    ),
    2 => 
    array (
      'id' => 66970,
      'title' => '标签',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeTags',
        1 => 'ListTagResources',
        2 => 'TagResources',
        3 => 'UntagResources',
      ),
    ),
    3 => 
    array (
      'id' => 66975,
      'title' => '数据',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRequestGraph',
        1 => 'DescribeStatisticSummary',
      ),
    ),
    4 => 
    array (
      'id' => 66978,
      'title' => '解析记录',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddZoneRecord',
        1 => 'DeleteZoneRecord',
        2 => 'SetZoneRecordStatus',
        3 => 'UpdateRecordRemark',
        4 => 'UpdateZoneRecord',
        5 => 'DescribeZoneRecords',
      ),
    ),
    5 => 
    array (
      'id' => 193262,
      'title' => '转发管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddResolverEndpoint',
        1 => 'AddResolverRule',
        2 => 'BindResolverRuleVpc',
        3 => 'DeleteResolverEndpoint',
        4 => 'DeleteResolverRule',
        5 => 'DescribeResolverEndpoint',
        6 => 'DescribeResolverEndpoints',
        7 => 'DescribeResolverRule',
        8 => 'DescribeResolverRules',
        9 => 'UpdateResolverEndpoint',
        10 => 'UpdateResolverRule',
        11 => 'DescribeResolverAvailableZones',
      ),
    ),
    6 => 
    array (
      'id' => 187728,
      'title' => '跨账号授权',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddUserVpcAuthorization',
        1 => 'DescribeUserVpcAuthorizations',
        2 => 'DeleteUserVpcAuthorization',
      ),
    ),
    7 => 
    array (
      'id' => 193263,
      'title' => '主机名同步',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UpdateSyncEcsHostTask',
        1 => 'DescribeSyncEcsHostTask',
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
    'SetProxyPattern' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Zone的全局ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'AgIDE0OQ_149',
          ),
        ),
        2 => 
        array (
          'name' => 'ProxyPattern',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '取值：
- **ZONE**: 当前Zone不进行递归解析
- **RECORD**: 开启递归解析代理',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ZONE',
          ),
        ),
        3 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '1.1.1.1',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '21079fa016944979537637959d09bc',
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
              'ZoneId' => 
              array (
                'description' => 'Zone的全局ID。',
                'type' => 'string',
                'example' => 'AgIDE0OQ_149',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C6F1D541-E7A6-447A-A2B5-9F7A20B2A8FB',
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
            'errorCode' => 'Zone.Remark',
            'errorMessage' => '50  characters long.  It can only contain numbers,Chinese,English and  special characters: _ - , . ，。',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ZoneId\\": \\"AgIDE0OQ_149\\",\\n  \\"RequestId\\": \\"C6F1D541-E7A6-447A-A2B5-9F7A20B2A8FB\\"\\n}","errorExample":""},{"type":"xml","example":"<SetProxyPatternResponse>\\r\\n  <RequestId>D1324D48-1E23-4AEF-9EDE-466120561C6F</RequestId>\\r\\n  <ZoneId>AgIDE0OQ_149</ZoneId>\\r\\n</SetProxyPatternResponse>","errorExample":""}]',
      'title' => '设置递归解析代理',
      'summary' => '设置递归解析代理。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeChangeLogs' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关键字，按照“%KeyWord%”模式搜索，不区分大小写。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Zone ID。<br>
若ZondId非空，则获取当前Zone的解析记录变更日志。<br>
若ZoneId为空，则获取当前账户下所有Zone操作及Zone解析变更日志。
',
            'type' => 'string',
            'required' => false,
            'example' => '6726',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页数，起始值为**1**，默认为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
            'description' => '分页查询时设置的每页行数，最大值**100**，默认为**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '100',
            'default' => '20',
          ),
        ),
        5 => 
        array (
          'name' => 'StartTimestamp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间（时间戳）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1516779348000',
          ),
        ),
        6 => 
        array (
          'name' => 'EndTimestamp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间（时间戳）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1516779348000',
          ),
        ),
        7 => 
        array (
          'name' => 'EntityType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取的日志类型。

- **PV_ZONE**为zone的操作日志。
- **PV_RECORD**为解析记录的操作日志。

其它值则忽略，获取所有日志。',
            'type' => 'string',
            'required' => false,
            'example' => 'PV_ZONE',
          ),
        ),
        8 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户Ip。',
            'type' => 'string',
            'required' => false,
            'example' => '1.1.1.1',
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
              'PageSize' => 
              array (
                'description' => '当前页面大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F0FCB52A-D512-41A0-8595-40234EDCFD8B',
              ),
              'ChangeLogs' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ChangeLog' => 
                  array (
                    'description' => '变更日志。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'OperTimestamp' => 
                        array (
                          'description' => '操作时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1516779348000',
                        ),
                        'EntityId' => 
                        array (
                          'description' => '操作对象ID。',
                          'type' => 'string',
                          'example' => 'CAgICA1OA_58',
                        ),
                        'OperObject' => 
                        array (
                          'description' => '操作对象类型。',
                          'type' => 'string',
                          'example' => 'PV_ZONE',
                        ),
                        'OperTime' => 
                        array (
                          'description' => '操作时间。',
                          'type' => 'string',
                          'example' => '2018-01-24T07:35Z',
                        ),
                        'OperIp' => 
                        array (
                          'description' => '操作Ip。',
                          'type' => 'string',
                          'example' => '1.1.XX.XX',
                        ),
                        'OperAction' => 
                        array (
                          'description' => '操作动作。',
                          'type' => 'string',
                          'example' => 'add',
                        ),
                        'Content' => 
                        array (
                          'description' => '操作详情。',
                          'type' => 'string',
                          'example' => 'add test-api.com',
                        ),
                        'EntityName' => 
                        array (
                          'description' => '操作对象名称。',
                          'type' => 'string',
                          'example' => 'test-api.com',
                        ),
                        'Id' => 
                        array (
                          'description' => '记录ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '6726',
                        ),
                        'CreatorId' => 
                        array (
                          'description' => '操作者ID。',
                          'type' => 'string',
                          'example' => '13270376',
                        ),
                        'CreatorType' => 
                        array (
                          'description' => '操作者类型。取值为空或**USER**',
                          'type' => 'string',
                          'example' => 'USER',
                        ),
                        'CreatorSubType' => 
                        array (
                          'description' => '操作者子类型。

- CUSTOMER：主账号
- SUB：子账号
- STS：角色扮演
- OTHER：其他',
                          'type' => 'string',
                          'example' => 'SUB',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'TotalPages' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'TotalItems' => 
              array (
                'description' => '日志列表总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 1,\\n  \\"RequestId\\": \\"F0FCB52A-D512-41A0-8595-40234EDCFD8B\\",\\n  \\"ChangeLogs\\": {\\n    \\"ChangeLog\\": [\\n      {\\n        \\"OperTimestamp\\": 1516779348000,\\n        \\"EntityId\\": \\"CAgICA1OA_58\\",\\n        \\"OperObject\\": \\"PV_ZONE\\",\\n        \\"OperTime\\": \\"2018-01-24T07:35Z\\",\\n        \\"OperIp\\": \\"1.1.XX.XX\\",\\n        \\"OperAction\\": \\"add\\",\\n        \\"Content\\": \\"add test-api.com\\",\\n        \\"EntityName\\": \\"test-api.com\\",\\n        \\"Id\\": 6726,\\n        \\"CreatorId\\": \\"13270376\\",\\n        \\"CreatorType\\": \\"USER\\",\\n        \\"CreatorSubType\\": \\"SUB\\"\\n      }\\n    ]\\n  },\\n  \\"PageNumber\\": 2,\\n  \\"TotalPages\\": 100,\\n  \\"TotalItems\\": 100\\n}","errorExample":"{\\n    \\"Message\\": \\"The request processing has failed due to some unknown error, exception or failure\\", \\n    \\"RequestId\\": \\"E246E023-F2EB-4034-83F7-B13FCF31459C\\", \\n    \\"Code\\": \\"InternalError\\"\\n}"},{"type":"xml","example":"<DescribeChangeLogsResponse>\\n  <PageNumber>1</PageNumber>\\n  <ChangeLogs>\\n    <ChangeLog>\\n      <OperTimestamp>1516779348000</OperTimestamp>\\n      <OperAction>add</OperAction>\\n      <OperObject>PV_ZONE</OperObject>\\n      <OperIp>106.11.34.7</OperIp>\\n      <Id>6726</Id>\\n      <EntityName>test-api.com</EntityName>\\n      <OperTime>2018-01-24T07:35Z</OperTime>\\n      <Content>add test-api.com</Content>\\n      <EntityId>CAgICA1OA_58</EntityId>\\n    </ChangeLog>\\n  </ChangeLogs>\\n  <PageSize>1</PageSize>\\n  <RequestId>F0FCB52A-D512-41A0-8595-40234EDCFD8B</RequestId>\\n  <TotalItems>224</TotalItems>\\n  <TotalPages>224</TotalPages>\\n</DescribeChangeLogsResponse>","errorExample":"<Error>\\n  <RequestId>F0B47FE6-C774-4833-9028-B073588A8FAA</RequestId>\\n  <Code>InternalError</Code>\\n  <Message>The request processing has failed due to some unknown error, exception or failure</Message>\\n</Error>"}]',
      'title' => '获取操作日志',
      'summary' => '获取操作日志。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRegions' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户Ip。',
            'type' => 'string',
            'required' => false,
            'example' => '192.0.2.0',
          ),
        ),
        2 => 
        array (
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '支持的语言。包括以下取值：

- 中文：zh-CN
- 英文：en-US
- 日文：ja',
            'type' => 'string',
            'required' => false,
            'example' => 'zh-CN',
          ),
        ),
        3 => 
        array (
          'name' => 'AuthorizedUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权资源的所属用户主账号ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '111222333',
          ),
        ),
        4 => 
        array (
          'name' => 'VpcType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC类型：

- STANDARD：标准VPC。

- EDS：无影工作区VPC。',
            'type' => 'string',
            'required' => false,
            'example' => 'STANDARD',
          ),
        ),
        5 => 
        array (
          'name' => 'Scene',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '场景信息。

- AUTH：内置权威
- FWD：转发管理
- RA：流量分析',
            'type' => 'string',
            'required' => false,
            'example' => 'AUTH',
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
                'example' => 'AF7D4DCE-0776-47F2-A9B2-6FB85A87AA60',
              ),
              'Regions' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Region' => 
                  array (
                    'description' => '地域列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'LocalName' => 
                        array (
                          'description' => '地域的展示名，根据当前语言环境转换。',
                          'type' => 'string',
                          'example' => '华北2（北京）',
                        ),
                        'RegionName' => 
                        array (
                          'description' => '地域的名称。',
                          'type' => 'string',
                          'example' => '华北2（北京）',
                        ),
                        'RegionEndpoint' => 
                        array (
                          'description' => 'Region服务的Endpoint地址。',
                          'type' => 'string',
                          'example' => 'pvtz.aliyuncs.com',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '	
地域ID。',
                          'type' => 'string',
                          'example' => 'cn-beijing',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AF7D4DCE-0776-47F2-A9B2-6FB85A87AA60\\",\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"LocalName\\": \\"华北2（北京）\\",\\n        \\"RegionName\\": \\"华北2（北京）\\",\\n        \\"RegionEndpoint\\": \\"pvtz.aliyuncs.com\\",\\n        \\"RegionId\\": \\"cn-beijing\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n    \\"Message\\": \\"The request processing has failed due to some unknown error, exception or failure\\", \\n    \\"RequestId\\": \\"E246E023-F2EB-4034-83F7-B13FCF31459C\\", \\n    \\"Code\\": \\"InternalError\\"\\n}"},{"type":"xml","example":"<DescribeRegionsResponse>\\n  <RequestId>AF7D4DCE-0776-47F2-A9B2-6FB85A87AA60</RequestId>\\n  <Regions>\\n    <Region>\\n      <RegionName>China North 2</RegionName>\\n      <RegionId>cn-beijing</RegionId>\\n    </Region>\\n    <Region>\\n      <RegionName>China South 1</RegionName>\\n      <RegionId>cn-shenzhen</RegionId>\\n    </Region>\\n  </Regions>\\n</DescribeRegionsResponse>","errorExample":"<Error>\\n  <RequestId>F0B47FE6-C774-4833-9028-B073588A8FAA</RequestId>\\n  <Code>InternalError</Code>\\n  <Message>The request processing has failed due to some unknown error, exception or failure</Message>\\n</Error>"}]',
      'title' => '获取Region列表',
      'summary' => '获取可用地域列表供用户选择。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'MoveResourceGroup' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部分返回参数语言。默认值：en。取值范围：en、zh、ja。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Zone Id。

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'AgIDE1MA_149',
          ),
        ),
        2 => 
        array (
          'name' => 'NewResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rg-aekzzk7hx3glaoq',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '21079fa016944979537637959d09bc',
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
                'description' => '唯一请求识别码。

',
                'type' => 'string',
                'example' => 'D1324D48-1E23-4AEF-9EDE-466120561C6F',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D1324D48-1E23-4AEF-9EDE-466120561C6F\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>D1324D48-1E23-4AEF-9EDE-466120561C6F</RequestId>","errorExample":""}]',
      'title' => '更换资源组',
      'summary' => '更换资源组。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddZone' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'zone名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'example.com',
          ),
        ),
        2 => 
        array (
          'name' => 'ProxyPattern',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '- **ZONE**：当前Zone不进行递归解析
- **RECORD**：不完全劫持，进行递归解析代理',
            'type' => 'string',
            'required' => false,
            'example' => 'ZONE',
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
            'example' => ' rg-resourcegroupid1',
          ),
        ),
        4 => 
        array (
          'name' => 'ZoneType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '暂不对用户开放，无需传值。',
            'type' => 'string',
            'required' => false,
            'example' => 'CLOUD_PRODUCT_ZONE',
          ),
        ),
        5 => 
        array (
          'name' => 'ZoneTag',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '暂不对用户开放，无需传值。',
            'type' => 'string',
            'required' => false,
            'example' => 'BLINK',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '21079fa016944979537637959d09bc',
          ),
        ),
        7 => 
        array (
          'name' => 'DnsGroup',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '内置权威位置区

- 普通区：NORMAL_ZONE
- 快速区：FAST_ZONE',
            'type' => 'string',
            'required' => false,
            'example' => 'FAST_ZONE',
            'enum' => 
            array (
              0 => 'NORMAL_ZONE',
              1 => 'FAST_ZONE',
            ),
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
              'ZoneName' => 
              array (
                'description' => 'zone名称。',
                'type' => 'string',
                'example' => 'example.com',
              ),
              'ZoneId' => 
              array (
                'description' => 'zone ID。',
                'type' => 'string',
                'example' => 'AgIDE1MQ_151',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '46973D4C-E3E4-4ABA-9190-9A9DE406C7E',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ZoneName\\": \\"example.com\\",\\n  \\"ZoneId\\": \\"AgIDE1MQ_151\\",\\n  \\"RequestId\\": \\"46973D4C-E3E4-4ABA-9190-9A9DE406C7E\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AddZoneResponse>\\n    <ZoneName>example.com</ZoneName>\\n    <ZoneId>AgIDE1MQ_151</ZoneId>\\n    <RequestId>46973D4C-E3E4-4ABA-9190-9A9DE406C7E</RequestId>\\n    <Success>true</Success>\\n</AddZoneResponse>","errorExample":""}]',
      'title' => '添加zone',
      'summary' => '创建private zone。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteZone' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'zone ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'AgIDE1MA_150',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户Ip。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '21079fa016944979537637959d09bc',
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
              'ZoneId' => 
              array (
                'description' => 'zone ID。',
                'type' => 'string',
                'example' => 'AgIDE1MA_150',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'E246E023-F2EB-4034-83F7-B13FCF31459C',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ZoneId\\": \\"AgIDE1MA_150\\",\\n  \\"RequestId\\": \\"E246E023-F2EB-4034-83F7-B13FCF31459C\\"\\n}","errorExample":"{\\n    \\"Message\\": \\"The request processing has failed due to some unknown error, exception or failure\\", \\n    \\"RequestId\\": \\"E246E023-F2EB-4034-83F7-B13FCF31459C\\", \\n    \\"Code\\": \\"InternalError\\"\\n}"},{"type":"xml","example":"<DeleteZoneResponse>\\n  <RequestId>B5174E6E-0AA6-4524-BCE4-603DED055319</RequestId>\\n  <ZoneId>AgIDE1MA_151</ZoneId>\\n</DeleteZoneResponse>","errorExample":"<Error>\\n  <RequestId>F0B47FE6-C774-4833-9028-B073588A8FAA</RequestId>\\n  <Code>InternalError</Code>\\n  <Message>The request processing has failed due to some unknown error, exception or failure</Message>\\n</Error>"}]',
      'title' => '删除zone',
      'summary' => '删除private zone。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateZoneRemark' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Zone ID，Zone的唯一识别码。',
            'type' => 'string',
            'required' => true,
            'example' => 'AgIDE1MA_1**',
          ),
        ),
        2 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改之后的目标备注内容。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户客户端IP。',
            'type' => 'string',
            'required' => false,
            'example' => '1.1.XX.XX',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '21079fa016944979537637959d09bc',
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
              'ZoneId' => 
              array (
                'description' => 'Zone ID。',
                'type' => 'string',
                'example' => 'AgIDE1MA_1**',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'C6F1D541-E7A6-447A-A2B5-9F7A20B2A8FB',
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
            'errorCode' => 'Zone.Remark',
            'errorMessage' => '50  characters long.  It can only contain numbers,Chinese,English and  special characters: _ - , . ，。',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ZoneId\\": \\"AgIDE1MA_1**\\",\\n  \\"RequestId\\": \\"C6F1D541-E7A6-447A-A2B5-9F7A20B2A8FB\\"\\n}","errorExample":"{\\n    \\"Message\\": \\"The request processing has failed due to some unknown error, exception or failure\\", \\n    \\"RequestId\\": \\"E246E023-F2EB-4034-83F7-B13FCF31459C\\", \\n    \\"Code\\": \\"InternalError\\"\\n}"},{"type":"xml","example":"<UpdateZoneRemarkResponse>\\n  <RequestId>D1324D48-1E23-4AEF-9EDE-466120561C6F</RequestId>\\n  <ZoneId>AgIDE0OQ_149</ZoneId>\\n</UpdateZoneRemarkResponse>","errorExample":"<Error>\\n  <RequestId>F0B47FE6-C774-4833-9028-B073588A8FAA</RequestId>\\n  <Code>InternalError</Code>\\n  <Message>The request processing has failed due to some unknown error, exception or failure</Message>\\n</Error>"}]',
      'title' => '修改zone的备注信息',
      'summary' => '修改zone的备注信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeZoneInfo' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Zone ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'AgIDE1MA_149',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'F73F41A3-B6DD-42CA-A793-FFF93277835D',
              ),
              'SlaveDns' => 
              array (
                'description' => '是否开启辅助DNS。取值：

- **true**：已开启
- **false**：未开启',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源组ID。',
                'type' => 'string',
                'example' => 'rg-xxxxxxxx',
              ),
              'ZoneId' => 
              array (
                'description' => 'Zone ID。',
                'type' => 'string',
                'example' => 'AgIDE0OQ_149<',
              ),
              'ProxyPattern' => 
              array (
                'description' => '- **ZONE**：当前Zone不进行递归解析；
- **RECORD**：递归解析代理。',
                'type' => 'string',
                'example' => 'ZONE',
              ),
              'CreateTime' => 
              array (
                'description' => '创建时间。',
                'type' => 'string',
                'example' => '2018-01-23T03:15Z',
              ),
              'ZoneType' => 
              array (
                'description' => 'zone类型：
- AUTH_ZONE：权威Zone；
- CLOUD_PRODUCT_ZONE：云产品权威Zone。',
                'type' => 'string',
                'example' => 'CLOUD_PRODUCT_ZONE',
              ),
              'Remark' => 
              array (
                'description' => '备注。',
                'type' => 'string',
                'example' => 'specialZone',
              ),
              'ZoneName' => 
              array (
                'description' => 'Zone名称。',
                'type' => 'string',
                'example' => 'test.com',
              ),
              'ZoneTag' => 
              array (
                'description' => '- 若查权威Zone列表，则忽略此参数；
- 若查使用或者管理的云产品PrivateZone，则查询对应的云产品类型Zone列表。',
                'type' => 'string',
                'example' => 'pvtz',
              ),
              'UpdateTime' => 
              array (
                'description' => '更新时间。',
                'type' => 'string',
                'example' => '2018-01-24T06:35Z',
              ),
              'UpdateTimestamp' => 
              array (
                'description' => '更新时间（时间戳）。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1516775741000',
              ),
              'RecordCount' => 
              array (
                'description' => '含有的解析记录总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'CreateTimestamp' => 
              array (
                'description' => '	
创建时间（时间戳）。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1516775741000',
              ),
              'BindVpcs' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Vpc' => 
                  array (
                    'description' => '绑定的Vpc列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '绑定的Vpc列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VpcName' => 
                        array (
                          'description' => 'Vpc名称。',
                          'type' => 'string',
                          'example' => 'daily-vpc-name',
                        ),
                        'VpcId' => 
                        array (
                          'description' => 'Vpc ID。',
                          'type' => 'string',
                          'example' => 'daily-vpc-id',
                        ),
                        'VpcType' => 
                        array (
                          'description' => 'vpc类型：

- STANDARD：标准VPC。

- EDS：无影工作区VPC。',
                          'type' => 'string',
                          'example' => 'STANDARD',
                        ),
                        'RegionName' => 
                        array (
                          'description' => '地域名称。',
                          'type' => 'string',
                          'example' => '1304',
                        ),
                        'VpcUserId' => 
                        array (
                          'description' => 'vpc归属的用户Id；若为null则归属当前用户。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => 'vpc-bp1aevy8sofi8mh1q****',
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
              ),
              'IsPtr' => 
              array (
                'description' => '- true，是反解zone
- false，非反解zone',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'DnsGroup' => 
              array (
                'description' => '内置权威位置区

- 普通区：NORMAL_ZONE
- 快速区：FAST_ZONE',
                'type' => 'string',
                'example' => 'FAST_ZONE',
              ),
              'Creator' => 
              array (
                'description' => 'Zone创建者',
                'type' => 'string',
                'example' => '2312234523451342',
              ),
              'CreatorType' => 
              array (
                'description' => '操作者类型。',
                'type' => 'string',
                'example' => 'USER',
              ),
              'DnsGroupChanging' => 
              array (
                'description' => 'Zone切换位置区状态

- 切换中：true
- 未切换：false',
                'type' => 'boolean',
                'example' => 'false',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified value parameter is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalUser',
            'errorMessage' => 'The user is illegal.',
          ),
          2 => 
          array (
            'errorCode' => 'Zone.Invalid.Name',
            'errorMessage' => 'Zone name is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'Zone.Invalid.Id',
            'errorMessage' => 'Zone id is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'Zone.Invalid.UserId',
            'errorMessage' => 'Zone userid is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'Zone.NotExists',
            'errorMessage' => 'Zone is not exists',
          ),
          6 => 
          array (
            'errorCode' => 'Zone.VpcExists',
            'errorMessage' => 'Zone have vpc bound.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F73F41A3-B6DD-42CA-A793-FFF93277835D\\",\\n  \\"SlaveDns\\": true,\\n  \\"ResourceGroupId\\": \\"rg-xxxxxxxx\\",\\n  \\"ZoneId\\": \\"AgIDE0OQ_149<\\",\\n  \\"ProxyPattern\\": \\"ZONE\\",\\n  \\"CreateTime\\": \\"2018-01-23T03:15Z\\",\\n  \\"ZoneType\\": \\"CLOUD_PRODUCT_ZONE\\",\\n  \\"Remark\\": \\"specialZone\\",\\n  \\"ZoneName\\": \\"test.com\\",\\n  \\"ZoneTag\\": \\"pvtz\\",\\n  \\"UpdateTime\\": \\"2018-01-24T06:35Z\\",\\n  \\"UpdateTimestamp\\": 1516775741000,\\n  \\"RecordCount\\": 2,\\n  \\"CreateTimestamp\\": 1516775741000,\\n  \\"BindVpcs\\": {\\n    \\"Vpc\\": [\\n      {\\n        \\"VpcName\\": \\"daily-vpc-name\\",\\n        \\"VpcId\\": \\"daily-vpc-id\\",\\n        \\"VpcType\\": \\"STANDARD\\",\\n        \\"RegionName\\": \\"1304\\",\\n        \\"VpcUserId\\": 0,\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  },\\n  \\"IsPtr\\": false,\\n  \\"DnsGroup\\": \\"FAST_ZONE\\",\\n  \\"Creator\\": \\"2312234523451342\\",\\n  \\"CreatorType\\": \\"USER\\",\\n  \\"DnsGroupChanging\\": false\\n}","errorExample":""},{"type":"xml","example":"<DescribeZoneInfoResponse>\\n    <RequestId>F73F41A3-B6DD-42CA-A793-FFF93277835D</RequestId>\\n    <SlaveDns>true</SlaveDns>\\n    <ResourceGroupId>rg-xxxxxxxx</ResourceGroupId>\\n    <ZoneId>AgIDE0OQ_149&lt;</ZoneId>\\n    <ProxyPattern>ZONE</ProxyPattern>\\n    <CreateTime>2018-01-23T03:15Z</CreateTime>\\n    <ZoneType>CLOUD_PRODUCT_ZONE</ZoneType>\\n    <Remark>specialZone</Remark>\\n    <ZoneName>test.com</ZoneName>\\n    <ZoneTag>pvtz</ZoneTag>\\n    <UpdateTime>2018-01-24T06:35Z</UpdateTime>\\n    <UpdateTimestamp>1516775741000</UpdateTimestamp>\\n    <RecordCount>2</RecordCount>\\n    <CreateTimestamp>1516775741000</CreateTimestamp>\\n    <BindVpcs>\\n        <VpcName>daily-vpc-name</VpcName>\\n        <VpcId>daily-vpc-id</VpcId>\\n        <RegionName>1304</RegionName>\\n        <RegionId>cn-hangzhou</RegionId>\\n    </BindVpcs>\\n    <IsPtr>false</IsPtr>\\n</DescribeZoneInfoResponse>","errorExample":""}]',
      'title' => '获取zone详细信息',
      'summary' => '获取指定zone的详细信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeZones' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页数，起始值为1，默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数，最大值100，默认为20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '20',
            'default' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'zone名称关键字，按照“%KeyWord%”模式搜索，不区分大小写。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        4 => 
        array (
          'name' => 'SearchMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索模式。取值：

- **LIKE**：模糊搜索（默认）
- **EXACT**：精确搜索',
            'type' => 'string',
            'required' => false,
            'example' => 'EXACT',
          ),
        ),
        5 => 
        array (
          'name' => 'QueryRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所属地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        6 => 
        array (
          'name' => 'QueryVpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-xxxxx',
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-xxxxx',
          ),
        ),
        8 => 
        array (
          'name' => 'ZoneType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Zone查询类型；默认取值AUTH_ZONE，查权威Zone列表。

取值范围：

- **AUTH_ZONE**: 查权威Zone列表。
- **CLOUD_PRODUCT_ZONE**:使用的云产品Zone列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'AUTH_ZONE',
          ),
        ),
        9 => 
        array (
          'name' => 'ZoneTag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '云产品类型。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '- 若查权威Zone列表，则忽略此参数；
- 若查使用或者管理的云产品PrivateZone，则查询对应的云产品类型Zone列表。',
              'type' => 'string',
              'required' => false,
              'example' => 'BLINK',
            ),
            'required' => false,
            'maxItems' => 10000,
          ),
        ),
        10 => 
        array (
          'name' => 'ResourceTag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源标签。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'env',
                ),
                'Value' => 
                array (
                  'description' => '资源标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'daily',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
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
              'PageSize' => 
              array (
                'description' => '页面大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6856BCF6-11D6-4D7E-AC53-FD579933522B',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalPages' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'TotalItems' => 
              array (
                'description' => '总个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '27',
              ),
              'Zones' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Zone' => 
                  array (
                    'description' => 'zone列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UpdateTime' => 
                        array (
                          'description' => '更新时间。',
                          'type' => 'string',
                          'example' => '2018-01-03T08:57Z',
                        ),
                        'ResourceTags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ResourceTag' => 
                            array (
                              'description' => '资源标签列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Key' => 
                                  array (
                                    'description' => '资源标签键。',
                                    'type' => 'string',
                                    'example' => 'env',
                                  ),
                                  'Value' => 
                                  array (
                                    'description' => '资源标签值。',
                                    'type' => 'string',
                                    'example' => 'daily',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'ZoneType' => 
                        array (
                          'description' => 'Zone类型。

- **AUTH_ZONE**: 权威Zone。
- **CLOUD_PRODUCT_ZONE**: 云产品PrivateZone。',
                          'type' => 'string',
                          'example' => 'AUTH_ZONE',
                        ),
                        'Remark' => 
                        array (
                          'description' => 'zone备注信息。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '2017-12-28T13:08Z',
                        ),
                        'RecordCount' => 
                        array (
                          'description' => '解析记录数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'ZoneName' => 
                        array (
                          'description' => 'zone名称。',
                          'type' => 'string',
                          'example' => 'test.com',
                        ),
                        'ProxyPattern' => 
                        array (
                          'description' => '递归解析代理模式。
- **ZONE**: 全部劫持
- **RECORD**：开启递归解析代理',
                          'type' => 'string',
                          'example' => 'ZONE',
                        ),
                        'UpdateTimestamp' => 
                        array (
                          'description' => '更新时间（时间戳）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1514969843000',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '资源组ID。',
                          'type' => 'string',
                          'example' => 'rg-xxxxx',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => 'zone ID。',
                          'type' => 'string',
                          'example' => '6d83e3b31aa60ca4aaa7161f1b6baa95',
                        ),
                        'ZoneTag' => 
                        array (
                          'description' => '云产品类型。

- 若ZoneType为权威zone，则此为空；
- 若ZoneType为云产品zone，则此为云产品类型。',
                          'type' => 'string',
                          'example' => 'BLINK',
                        ),
                        'IsPtr' => 
                        array (
                          'description' => '是否是反解zone。

- **true**：是反解zone
- **false**：非反解zone',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'CreateTimestamp' => 
                        array (
                          'description' => '创建时间（时间戳）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1514466483000',
                        ),
                        'DnsGroup' => 
                        array (
                          'description' => '内置权威位置区。

- **NORMAL_ZONE**：普通区
- **FAST_ZONE**：快速区',
                          'type' => 'string',
                          'example' => 'NORMAL_ZONE',
                        ),
                        'Creator' => 
                        array (
                          'description' => 'zone创建者',
                          'type' => 'string',
                          'example' => '5463564356',
                        ),
                        'CreatorSubType' => 
                        array (
                          'description' => '账号类型。
- **CUSTOMER**：主账号
- **SUB**：子账号
- **STS**：角色扮演
- **OTHER**：其他',
                          'type' => 'string',
                          'example' => 'SUB',
                        ),
                        'DnsGroupChanging' => 
                        array (
                          'description' => 'Zone切换位置区状态。

- **true**：切换中
- **false**：未切换',
                          'type' => 'boolean',
                          'example' => 'false',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"6856BCF6-11D6-4D7E-AC53-FD579933522B\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalPages\\": 3,\\n  \\"TotalItems\\": 27,\\n  \\"Zones\\": {\\n    \\"Zone\\": [\\n      {\\n        \\"UpdateTime\\": \\"2018-01-03T08:57Z\\",\\n        \\"ResourceTags\\": {\\n          \\"ResourceTag\\": [\\n            {\\n              \\"Key\\": \\"env\\",\\n              \\"Value\\": \\"daily\\"\\n            }\\n          ]\\n        },\\n        \\"ZoneType\\": \\"AUTH_ZONE\\",\\n        \\"Remark\\": \\"test\\",\\n        \\"CreateTime\\": \\"2017-12-28T13:08Z\\",\\n        \\"RecordCount\\": 2,\\n        \\"ZoneName\\": \\"test.com\\",\\n        \\"ProxyPattern\\": \\"ZONE\\",\\n        \\"UpdateTimestamp\\": 1514969843000,\\n        \\"ResourceGroupId\\": \\"rg-xxxxx\\",\\n        \\"ZoneId\\": \\"6d83e3b31aa60ca4aaa7161f1b6baa95\\",\\n        \\"ZoneTag\\": \\"BLINK\\",\\n        \\"IsPtr\\": false,\\n        \\"CreateTimestamp\\": 1514466483000,\\n        \\"DnsGroup\\": \\"NORMAL_ZONE\\",\\n        \\"Creator\\": \\"5463564356\\",\\n        \\"CreatorSubType\\": \\"SUB\\",\\n        \\"DnsGroupChanging\\": false\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取 zone 列表',
      'summary' => '查询用户的Zone列表。',
    ),
    'DescribeZoneVpcTree' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户 ip。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '7B07FBC3-3A53-4939-A3C6-2BDFE407BAB2',
              ),
              'Zones' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Zone' => 
                  array (
                    'description' => 'Zone 列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'Zone 列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UpdateTime' => 
                        array (
                          'description' => '更新时间。',
                          'type' => 'string',
                          'example' => '2019-09-18T08:20Z',
                        ),
                        'ZoneType' => 
                        array (
                          'description' => 'Zone类型。

- AUTH_ZONE：权威Zone。
- CLOUD_PRODUCT_ZONE：云产品权威Zone。',
                          'type' => 'string',
                          'example' => 'AUTH_ZONE',
                        ),
                        'Remark' => 
                        array (
                          'description' => '备注。',
                          'type' => 'string',
                          'example' => 'demo',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '2019-09-18T08:20Z',
                        ),
                        'Vpcs' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Vpc' => 
                            array (
                              'description' => '绑定的 vpc 列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '绑定的 vpc 列表。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'VpcName' => 
                                  array (
                                    'description' => 'vpc 名称。',
                                    'type' => 'string',
                                    'example' => 'demo-vpc',
                                  ),
                                  'VpcId' => 
                                  array (
                                    'description' => 'vpc id。',
                                    'type' => 'string',
                                    'example' => 'vpc-2z21341ssdadsfzyd49ra',
                                  ),
                                  'VpcType' => 
                                  array (
                                    'description' => 'vpc类型。

- STANDARD：标准VPC。

- EDS：无影工作区VPC。',
                                    'type' => 'string',
                                    'example' => 'STANDARD',
                                  ),
                                  'RegionName' => 
                                  array (
                                    'description' => 'region 名称。',
                                    'type' => 'string',
                                    'example' => 'China North 2',
                                  ),
                                  'RegionId' => 
                                  array (
                                    'description' => 'region Id。',
                                    'type' => 'string',
                                    'example' => 'cn-beijing',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'RecordCount' => 
                        array (
                          'description' => '解析记录条数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'ZoneName' => 
                        array (
                          'description' => 'Zone 名称。',
                          'type' => 'string',
                          'example' => 'localzone.demo',
                        ),
                        'UpdateTimestamp' => 
                        array (
                          'description' => '更新时间（时间戳）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1568794834000',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => 'Zone id。',
                          'type' => 'string',
                          'example' => '6d83e3b31aa60ca4aaa7161f1b6baa95',
                        ),
                        'ZoneTag' => 
                        array (
                          'description' => '云产品类型。

- 若ZoneType为权威zone，则此为空。
- 若ZoneType为云产品zone，则此为云产品类型。',
                          'type' => 'string',
                          'example' => 'BLINK',
                        ),
                        'IsPtr' => 
                        array (
                          'description' => '是否是反解zone。

- true：是反解zone
- false：非反解zone',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'CreateTimestamp' => 
                        array (
                          'description' => '创建时间（时间戳）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1568794812000',
                        ),
                        'DnsGroup' => 
                        array (
                          'description' => '内置权威位置区。

- NORMAL_ZONE：普通区
- FAST_ZONE：快速区',
                          'type' => 'string',
                          'example' => 'NORMAL_ZONE',
                        ),
                        'Creator' => 
                        array (
                          'description' => 'Zone创建者。',
                          'type' => 'string',
                          'example' => '5463564356',
                        ),
                        'CreatorType' => 
                        array (
                          'description' => '操作者类型。',
                          'type' => 'string',
                          'example' => 'USER',
                        ),
                        'DnsGroupChanging' => 
                        array (
                          'description' => 'Zone切换位置区状态。

- true：切换中
- false：未切换',
                          'type' => 'boolean',
                          'example' => 'true',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7B07FBC3-3A53-4939-A3C6-2BDFE407BAB2\\",\\n  \\"Zones\\": {\\n    \\"Zone\\": [\\n      {\\n        \\"UpdateTime\\": \\"2019-09-18T08:20Z\\",\\n        \\"ZoneType\\": \\"AUTH_ZONE\\",\\n        \\"Remark\\": \\"demo\\",\\n        \\"CreateTime\\": \\"2019-09-18T08:20Z\\",\\n        \\"Vpcs\\": {\\n          \\"Vpc\\": [\\n            {\\n              \\"VpcName\\": \\"demo-vpc\\",\\n              \\"VpcId\\": \\"vpc-2z21341ssdadsfzyd49ra\\",\\n              \\"VpcType\\": \\"STANDARD\\",\\n              \\"RegionName\\": \\"China North 2\\",\\n              \\"RegionId\\": \\"cn-beijing\\"\\n            }\\n          ]\\n        },\\n        \\"RecordCount\\": 1,\\n        \\"ZoneName\\": \\"localzone.demo\\",\\n        \\"UpdateTimestamp\\": 1568794834000,\\n        \\"ZoneId\\": \\"6d83e3b31aa60ca4aaa7161f1b6baa95\\",\\n        \\"ZoneTag\\": \\"BLINK\\",\\n        \\"IsPtr\\": false,\\n        \\"CreateTimestamp\\": 1568794812000,\\n        \\"DnsGroup\\": \\"NORMAL_ZONE\\",\\n        \\"Creator\\": \\"5463564356\\",\\n        \\"CreatorType\\": \\"USER\\",\\n        \\"DnsGroupChanging\\": true\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeZoneVpcTreeResponse>\\n    <RequestId>A105C920-585C-49F2-B41C-98F147CDD945</RequestId>\\n    <Zones>\\n        <Zone>\\n            <ZoneId>6d83e3b31aa60ca4aaa7161f1b6baa95</ZoneId>\\n            <ZoneName>localzone.demo</ZoneName>\\n            <CreateTime>2019-09-18T08:20Z</CreateTime>\\n            <CreateTimestamp>1568794812000</CreateTimestamp>\\n            <UpdateTimestamp>1568794834000</UpdateTimestamp>\\n            <UpdateTime>2019-09-18T08:20Z</UpdateTime>\\n            <IsPtr>false</IsPtr>\\n            <RecordCount>1</RecordCount>\\n            <Vpcs>\\n                <Vpc>\\n                    <VpcName>demo-vpc</VpcName>\\n                    <RegionName>China North 2</RegionName>\\n                    <RegionId>cn-beijing</RegionId>\\n                    <VpcId>vpc-2z21341ssdadsfzyd49ra</VpcId>\\n                </Vpc>\\n                <Vpc>\\n                    <VpcName>测试</VpcName>\\n                    <RegionName>China North 2</RegionName>\\n                    <RegionId>cn-beijing</RegionId>\\n                    <VpcId>vpc-2ze21safadf23zyyg</VpcId>\\n                </Vpc>\\n            </Vpcs>\\n        </Zone>\\n        <Zone>\\n            <ZoneId>fc1fc1dfbb6a7dc85dc8caa869ccee7a</ZoneId>\\n            <ZoneName>0.168.192.in-addr.arpa</ZoneName>\\n            <CreateTime>2019-10-15T03:47Z</CreateTime>\\n            <CreateTimestamp>1571111261000</CreateTimestamp>\\n            <UpdateTime>2019-10-15T03:47Z</UpdateTime>\\n            <UpdateTimestamp>1571111261000</UpdateTimestamp>\\n            <IsPtr>true</IsPtr>\\n            <RecordCount>0</RecordCount>\\n            <Vpcs>\\n            </Vpcs>\\n        </Zone>\\n    </Zones>\\n</DescribeZoneVpcTreeResponse>","errorExample":""}]',
      'title' => '获取 Zone 列表和绑定的 VPC',
      'summary' => '获取 Zone 列表及其绑定的 VPC 列表。',
      'description' => '注：此接口性能不高，不建议使用。请使用 DescribeZones 获取 zone 列表。如果获取绑定的 vpc 详情，则根据 zoneId 来调用接口 DescribeZoneInfo 来获取。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BindZoneVpc' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'zone ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '34d4031b63c527358b710a61346a1df5',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户Ip。',
            'type' => 'string',
            'required' => false,
            'example' => '1.1.1.1',
          ),
        ),
        3 => 
        array (
          'name' => 'Vpcs',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'vpc列表信息。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'VpcId' => 
                array (
                  'description' => 'VPC ID。当Zone已经绑定VPC，此时不传入此参数，表示将Zone和VPC解绑。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vpc-xxxxxxxxx',
                ),
                'RegionId' => 
                array (
                  'description' => '地域ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cn-beijing',
                ),
                'VpcType' => 
                array (
                  'description' => 'VPC类型。

- **STANDARD**：标准VPC。

- **EDS**：无影工作区VPC。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'STANDARD',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 150,
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '6447728c8578e66aacf062d2df4446dc',
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
                'example' => '46973D4C-E3E4-4ABA-9190-9A9DE406C7E',
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
            'errorCode' => 'ZoneVpc.Zone.Repeated',
            'errorMessage' => 'Vpc is bind to same zone name.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"46973D4C-E3E4-4ABA-9190-9A9DE406C7E\\"\\n}","type":"json"}]',
      'title' => 'zone关联VPC',
      'summary' => '绑定或者解绑zone与VPC列表两者之间的关系。',
    ),
    'CheckZoneName' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'zone的名称。此参数为必传参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'example.com',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户Ip。',
            'type' => 'string',
            'required' => false,
            'example' => '192.0.2.0',
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
                'example' => 'CA29B88F-A571-4123-80D5-768AC2F7F806',
              ),
              'Check' => 
              array (
                'description' => '取值：

- **true**：可添加
- **false**：不可添加',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CA29B88F-A571-4123-80D5-768AC2F7F806\\",\\n  \\"Check\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CheckZoneNameResponse>\\n    <RequestId>CA29B88F-A571-4123-80D5-768AC2F7F806</RequestId>\\n    <Check>true</Check>\\n    <Success>true</Success>\\n</CheckZoneNameResponse>","errorExample":""}]',
      'title' => '根据规则校验zone是否可添加',
      'summary' => '调用CheckZoneName根据规则校验zone是否可添加。',
    ),
    'DescribeTags' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型：ZONE',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ZONE',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页面大小。默认值为20，最大值为200。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
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
              'TotalCount' => 
              array (
                'description' => '返回数据总量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'PageSize' => 
              array (
                'description' => '页面大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9EA7F720-B7C0-45C1-9CF4-B6A5A1179B68',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Tags' => 
              array (
                'description' => '资源标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '资源标签键。',
                      'type' => 'string',
                      'example' => 'env',
                    ),
                    'Values' => 
                    array (
                      'description' => '标签值列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签值。',
                        'type' => 'string',
                        'example' => 'daily',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 200,\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"9EA7F720-B7C0-45C1-9CF4-B6A5A1179B68\\",\\n  \\"PageNumber\\": 1,\\n  \\"Tags\\": [\\n    {\\n      \\"Key\\": \\"env\\",\\n      \\"Values\\": [\\n        \\"daily\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询已有的标签列表',
      'summary' => '调用DescribeTags查询已有的标签列表。',
    ),
    'ListTagResources' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部分返回参数语言。取值范围：en、zh、ja',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型：ZONE',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ZONE',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始Token
',
            'type' => 'string',
            'required' => false,
            'example' => '234235354',
          ),
        ),
        3 => 
        array (
          'name' => 'Size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '相当于PageSize，查询展示数量。默认为20，取值范围`[1,200]`',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID列表，即ZoneId列表。传入内容数量最大值为50',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID，即ZoneId。',
              'type' => 'string',
              'required' => false,
              'example' => '97fe9321a476d0861f624d3f738dcc38',
            ),
            'required' => false,
            'example' => '97fe9321a476d0861f624d3f738dcc38',
            'maxItems' => 51,
          ),
        ),
        5 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源标签键

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'env',
                ),
                'Value' => 
                array (
                  'description' => '资源标签值',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'daily',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
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
              'NextToken' => 
              array (
                'description' => '下一个查询开始Token，NextToken为空说明没有下一个
',
                'type' => 'string',
                'example' => '234235354',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码',
                'type' => 'string',
                'example' => '75446CC1-FC9A-4595-8D96-089D73D7A63D',
              ),
              'TagResources' => 
              array (
                'description' => '标签资源列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ResourceType' => 
                    array (
                      'description' => '资源类型',
                      'type' => 'string',
                      'example' => 'ZONE',
                    ),
                    'TagValue' => 
                    array (
                      'description' => '标签值',
                      'type' => 'string',
                      'example' => 'daily',
                    ),
                    'ResourceId' => 
                    array (
                      'description' => '资源ID，即ZoneId。',
                      'type' => 'string',
                      'example' => '97fe9321a476d0861f624d3f738dcc38',
                    ),
                    'TagKey' => 
                    array (
                      'description' => '标签键',
                      'type' => 'string',
                      'example' => 'env',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"234235354\\",\\n  \\"RequestId\\": \\"75446CC1-FC9A-4595-8D96-089D73D7A63D\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"ResourceType\\": \\"ZONE\\",\\n      \\"TagValue\\": \\"daily\\",\\n      \\"ResourceId\\": \\"97fe9321a476d0861f624d3f738dcc38\\",\\n      \\"TagKey\\": \\"env\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<NextToken>234235354</NextToken>\\n<RequestId>75446CC1-FC9A-4595-8D96-089D73D7A63D</RequestId>\\n<TagResources>\\n    <ResourceId>75446CC1-FC9A-4595-8D96-089D73D7A63D</ResourceId>\\n    <TagKey>env</TagKey>\\n    <ResourceType>ZONE</ResourceType>\\n    <TagValue>daily</TagValue>\\n</TagResources>","errorExample":""}]',
      'title' => '查询资源标签关系列表',
      'summary' => '调用ListTagResources查询资源标签关系列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'TagResources' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ZONE',
          ),
        ),
        2 => 
        array (
          'name' => 'OverWrite',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改Tag列表。

- True：全量覆盖原有Tag列表。
- False|Null：在原有的Tag列表追加Tag，若Key相同Value不同，则覆盖Value。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID列表，即ZoneID列表。可传入内容数量的取值范围为 **[1, 50]**',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID，即zoneID。',
              'type' => 'string',
              'required' => false,
              'example' => '97fe9321a476d0861f624d3f738dcc38',
            ),
            'required' => true,
            'example' => '97fe9321a476d0861f624d3f738dcc38',
            'maxItems' => 51,
          ),
        ),
        4 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'env',
                ),
                'Value' => 
                array (
                  'description' => '资源标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'daily',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 21,
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
                'description' => '唯一请求识别码。

',
                'type' => 'string',
                'example' => '75446CC1-FC9A-4595-8D96-089D73D7A63D',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"75446CC1-FC9A-4595-8D96-089D73D7A63D\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>75446CC1-FC9A-4595-8D96-089D73D7A63D</RequestId>","errorExample":""}]',
      'title' => '标记资源',
      'summary' => '调用TagResources标记资源。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UntagResources' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型：ZONE',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ZONE',
          ),
        ),
        2 => 
        array (
          'name' => 'All',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否全部删除，只针对TagKey.N为空时有效。默认是 false，取值范围：

- true 
- false 

    ',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID列表，即ZoneId列表。传入内容数量最大值为50。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID，即ZoneId。',
              'type' => 'string',
              'required' => false,
              'example' => '97fe9321a476d0861f624d3f738dcc38',
            ),
            'required' => true,
            'maxItems' => 51,
          ),
        ),
        4 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源标签键列表。传入内容数量最大值为20。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源标签键。',
              'type' => 'string',
              'required' => false,
              'example' => 'env',
            ),
            'required' => false,
            'maxItems' => 21,
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
                'example' => '75446CC1-FC9A-4595-8D96-089D73D7A63D',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"75446CC1-FC9A-4595-8D96-089D73D7A63D\\"\\n}","type":"json"}]',
      'title' => '取消标记资源',
      'summary' => '调用UntagResources取消标记资源。',
    ),
    'DescribeRequestGraph' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.1.1',
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Zone ID。当查询zone请求量数据时，可以传ZoneId或传BizType+BizId，两种方式取其中一种即可。',
            'type' => 'string',
            'required' => false,
            'example' => '29c752a01cd281a20ddcfaecef',
          ),
        ),
        3 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-1111',
          ),
        ),
        4 => 
        array (
          'name' => 'StartTimestamp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间戳，以毫秒计。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1571587200000',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTimestamp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间戳，以毫秒计。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1682438400000',
          ),
        ),
        6 => 
        array (
          'name' => 'BizType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务类型。取值：

- AUTH_ZONE：权威zone。
- RESOLVER_RULE：转发规则。',
            'type' => 'string',
            'required' => false,
            'example' => 'AUTH_ZONE',
          ),
        ),
        7 => 
        array (
          'name' => 'BizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据ID。配合BizType使用：

- BizType为AUTH_ZONE时传ZoneID。
- BizType为RESOLVERRULE时传转发规则ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'b9c93a8954c4098731e863c04302f45a',
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
                'example' => 'EB71815-A421-4E51-8E8D-667F44ABE633',
              ),
              'RequestDetails' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ZoneRequestTop' => 
                  array (
                    'description' => '详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Time' => 
                        array (
                          'description' => '统计时间（字符串）。',
                          'type' => 'string',
                          'example' => '2019-10-21T10:00Z',
                        ),
                        'RequestCount' => 
                        array (
                          'description' => '请求量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '103',
                        ),
                        'Timestamp' => 
                        array (
                          'description' => '统计时间戳（以毫秒计）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1571652000000',
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
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EB71815-A421-4E51-8E8D-667F44ABE633\\",\\n  \\"RequestDetails\\": {\\n    \\"ZoneRequestTop\\": [\\n      {\\n        \\"Time\\": \\"2019-10-21T10:00Z\\",\\n        \\"RequestCount\\": 103,\\n        \\"Timestamp\\": 1571652000000\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取请求量详情',
      'summary' => '调用DescribeRequestGraph获取请求量详情。',
    ),
    'DescribeStatisticSummary' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户Ip。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
              'TotalCount' => 
              array (
                'description' => '昨日请求总量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2254',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A73F3BD0-B1A8-42A9-A9B6-689BBABC4891',
              ),
              'ZoneRequestTops' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ZoneRequestTop' => 
                  array (
                    'description' => 'Zone请求量Top3。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RequestCount' => 
                        array (
                          'description' => '请求量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2251',
                        ),
                        'ZoneName' => 
                        array (
                          'description' => 'Zone名称。',
                          'type' => 'string',
                          'example' => 'host.local',
                        ),
                        'BizType' => 
                        array (
                          'description' => '业务类型。取值：

- AUTH_ZONE：权威zone。
- RESOLVER_RULE：转发规则。',
                          'type' => 'string',
                          'example' => 'AUTH_ZONE',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'VpcRequestTops' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'VpcRequestTop' => 
                  array (
                    'description' => 'VPC请求量Top3。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VpcId' => 
                        array (
                          'description' => 'VPC ID。',
                          'type' => 'string',
                          'example' => 'vpc-xxxxxxxxxx',
                        ),
                        'VpcType' => 
                        array (
                          'description' => 'vpc类型。

- STANDARD：标准VPC。

- EDS：无影工作区VPC。',
                          'type' => 'string',
                          'example' => 'STANDARD',
                        ),
                        'RegionName' => 
                        array (
                          'description' => '地域名称。',
                          'type' => 'string',
                          'example' => '华北 2',
                        ),
                        'TunnelId' => 
                        array (
                          'description' => '隧道ID。',
                          'type' => 'string',
                          'example' => '46574',
                        ),
                        'RequestCount' => 
                        array (
                          'description' => '请求量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2254',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '	
地域ID。',
                          'type' => 'string',
                          'example' => 'cn-beijing',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 2254,\\n  \\"RequestId\\": \\"A73F3BD0-B1A8-42A9-A9B6-689BBABC4891\\",\\n  \\"ZoneRequestTops\\": {\\n    \\"ZoneRequestTop\\": [\\n      {\\n        \\"RequestCount\\": 2251,\\n        \\"ZoneName\\": \\"host.local\\",\\n        \\"BizType\\": \\"AUTH_ZONE\\"\\n      }\\n    ]\\n  },\\n  \\"VpcRequestTops\\": {\\n    \\"VpcRequestTop\\": [\\n      {\\n        \\"VpcId\\": \\"vpc-xxxxxxxxxx\\",\\n        \\"VpcType\\": \\"STANDARD\\",\\n        \\"RegionName\\": \\"华北 2\\",\\n        \\"TunnelId\\": \\"46574\\",\\n        \\"RequestCount\\": 2254,\\n        \\"RegionId\\": \\"cn-beijing\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取昨日请求量概要',
      'summary' => '获取昨日请求量概要。',
    ),
    'AddZoneRecord' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Zone ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'CAgICA1OA_58',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'Rr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主机记录。

如果要解析@.exmaple.com，主机记录要填写"@”，而不是空。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'www',
          ),
        ),
        3 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '解析记录类型，目前仅支持**A**, **AAAA**,**CNAME**, **TXT**, **MX**, **PTR**, **SRV**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'A',
          ),
        ),
        4 => 
        array (
          'name' => 'Line',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '解析线路，默认为**default**。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'default',
          ),
        ),
        5 => 
        array (
          'name' => 'Weight',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权重。取值范围：**[0,100]**，默认值1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'Ttl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生存时间，默认值为**60**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '86400',
            'minimum' => '5',
            'example' => '60',
            'default' => '60',
          ),
        ),
        7 => 
        array (
          'name' => 'Priority',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'MX记录的优先级，取值范围：**\\[1,99\\]**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '99',
            'minimum' => '1',
            'example' => '5',
          ),
        ),
        8 => 
        array (
          'name' => 'Value',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '记录值。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.1.1.1',
          ),
        ),
        9 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户Ip。',
            'type' => 'string',
            'required' => false,
            'example' => '2.2.2.2',
          ),
        ),
        10 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        11 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '6447728c8578e66aacf062d2df4446dc',
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
                'example' => '0B7AD377-7E86-44A8-B9A8-53E8666E72FE',
              ),
              'RecordId' => 
              array (
                'description' => '解析记录ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5808',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0B7AD377-7E86-44A8-B9A8-53E8666E72FE\\",\\n  \\"RecordId\\": 5808,\\n  \\"Success\\": true\\n}","errorExample":"{\\n    \\"Message\\": \\"The request processing has failed due to some unknown error, exception or failure\\", \\n    \\"RequestId\\": \\"E246E023-F2EB-4034-83F7-B13FCF31459C\\", \\n    \\"Code\\": \\"InternalError\\"\\n}"},{"type":"xml","example":"<AddZoneRecordResponse>\\n  <RecordId>5809</RecordId>\\n  <RequestId>D4AD014E-46F6-4311-815B-AAB3ACE06F9C</RequestId>\\n</AddZoneRecordResponse>","errorExample":"<Error>\\n  <RequestId>F0B47FE6-C774-4833-9028-B073588A8FAA</RequestId>\\n  <Code>InternalError</Code>\\n  <Message>The request processing has failed due to some unknown error, exception or failure</Message>\\n</Error>"}]',
      'title' => '添加解析记录',
      'summary' => '添加prviate zone的解析记录。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteZoneRecord' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'RecordId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '解析记录ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '3062799768',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户Ip。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，最大不超过64个ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '6447728c8578e66aacf062d2df4446dc',
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
                'example' => '0B7AD377-7E86-44A8-B9A8-53E8666E72FE',
              ),
              'RecordId' => 
              array (
                'description' => '解析记录ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '3062799768',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0B7AD377-7E86-44A8-B9A8-53E8666E72FE\\",\\n  \\"RecordId\\": 3062799768\\n}","type":"json"}]',
      'title' => '删除解析记录',
      'summary' => '删除prviate zone的解析记录。',
    ),
    'SetZoneRecordStatus' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'RecordId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '解析记录ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '2075410525',
          ),
        ),
        2 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '解析记录状态。取值：

- ENABLE: 启用解析
- DISABLE: 暂停解析',
            'type' => 'string',
            'required' => true,
            'example' => 'ENABLE',
            'enum' => 
            array (
              0 => 'ENABLE',
              1 => 'DISABLE',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户Ip。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '6447728c8578e66aacf062d2df4446dc',
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
              'Status' => 
              array (
                'description' => '当前解析记录状态。',
                'type' => 'string',
                'example' => 'ENABLE',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '39CB16E5-4180-49F2-A060-23C0ECEB80D9',
              ),
              'RecordId' => 
              array (
                'description' => '解析记录ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2075410525',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"ENABLE\\",\\n  \\"RequestId\\": \\"39CB16E5-4180-49F2-A060-23C0ECEB80D9\\",\\n  \\"RecordId\\": 2075410525\\n}","type":"json"}]',
      'title' => '设置解析记录状态',
      'summary' => '设置prviate zone的解析记录状态。',
    ),
    'UpdateRecordRemark' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'RecordId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '解析记录ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '2029911639',
          ),
        ),
        2 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备注。',
            'type' => 'string',
            'required' => false,
            'example' => 'test record',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，最大不超过64个ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '6447728c8578e66aacf062d2df4446dc',
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
                'example' => '0B7AD377-7E86-44A8-B9A8-53E8666E72FE',
              ),
              'RecordId' => 
              array (
                'description' => '解析记录ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2029911639',
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
            'errorCode' => 'Zone.Remark',
            'errorMessage' => '50  characters long.  It can only contain numbers,Chinese,English and  special characters: _ - , . ，。',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0B7AD377-7E86-44A8-B9A8-53E8666E72FE\\",\\n  \\"RecordId\\": 2029911639\\n}","type":"json"}]',
      'title' => '更新解析记录备注',
      'summary' => '对于已添加的 private zone 的解析记录，修改其备注信息。',
    ),
    'UpdateZoneRecord' => 
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
          'name' => 'Rr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主机记录。

如果要解析@.exmaple.com，主机记录要填写"@”，而不是空。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'www',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'RecordId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '解析记录ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1722230869',
          ),
        ),
        3 => 
        array (
          'name' => 'Line',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '解析线路。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'default',
          ),
        ),
        4 => 
        array (
          'name' => 'Weight',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权重。取值范围：**[0,100]**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '解析记录类型，目前仅支持**A**, **AAAA**,**CNAME**, **TXT**, **MX**, **PTR**, **SRV**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'A',
          ),
        ),
        6 => 
        array (
          'name' => 'Ttl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生存时间。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '86400',
            'minimum' => '5',
            'example' => '60',
            'default' => '60',
          ),
        ),
        7 => 
        array (
          'name' => 'Priority',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'MX记录的优先级，取值范围：**\\[1,99\\]**。

记录类型为MX记录时，此参数必选。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '99',
            'minimum' => '1',
            'example' => '1',
            'default' => '',
          ),
        ),
        8 => 
        array (
          'name' => 'Value',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '记录值。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '192.168.0.48',
          ),
        ),
        9 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户Ip。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        10 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，最大不超过64个ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '6447728c8578e66aacf062d2df4446dc',
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
                'example' => '250E2C38-D0AD-4518-851D-1C1055805F82',
              ),
              'RecordId' => 
              array (
                'description' => '解析记录ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1722230869',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"250E2C38-D0AD-4518-851D-1C1055805F82\\",\\n  \\"RecordId\\": 1722230869\\n}","type":"json"}]',
      'title' => '修改解析记录',
      'summary' => '修改prviate zone的解析记录。',
    ),
    'DescribeZoneRecords' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主机记录的关键字。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Zone ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'a96d70eb4ab8ef01503dc548691423cb',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页数，起始值为**1**，默认为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
            'description' => '分页查询时设置的每页行数，最大值100，默认为20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '20',
            'default' => '20',
          ),
        ),
        5 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户Ip。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        6 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签。

- 默认不填写，查询当前Zone的解析记录。
- 填写“ecs”，查询当前Zone同步的ECS主机名记录。',
            'type' => 'string',
            'required' => false,
            'example' => 'ecs',
          ),
        ),
        7 => 
        array (
          'name' => 'SearchMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索模式。取值：

- **LIKE**：模糊搜索
- **EXACT**：精确搜索（默认）',
            'type' => 'string',
            'required' => false,
            'example' => 'EXACT',
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
              'PageSize' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7B07FBC3-3A53-4939-A3C6-2BDFE407BAB2',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalPages' => 
              array (
                'description' => '解析记录总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalItems' => 
              array (
                'description' => '解析记录总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'Records' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Record' => 
                  array (
                    'description' => '解析记录列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '解析记录状态。

- ENABLE：启用

- DISABLE：暂停',
                          'type' => 'string',
                          'example' => 'ENABLE',
                        ),
                        'Type' => 
                        array (
                          'description' => '解析记录类型。',
                          'type' => 'string',
                          'example' => 'A',
                        ),
                        'Value' => 
                        array (
                          'description' => '记录值。',
                          'type' => 'string',
                          'example' => '127.0.0.1',
                        ),
                        'Ttl' => 
                        array (
                          'description' => '生存时间。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '60',
                        ),
                        'Remark' => 
                        array (
                          'description' => '备注。',
                          'type' => 'string',
                          'example' => 'xxx',
                        ),
                        'RecordId' => 
                        array (
                          'description' => '解析记录ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2469595025',
                        ),
                        'Rr' => 
                        array (
                          'description' => '主机记录。',
                          'type' => 'string',
                          'example' => 'www',
                        ),
                        'Priority' => 
                        array (
                          'description' => 'MX记录的优先级。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '10',
                        ),
                        'Line' => 
                        array (
                          'description' => '解析线路。',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'Weight' => 
                        array (
                          'description' => '权重。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '2019-03-14T03:47Z',
                        ),
                        'UpdateTime' => 
                        array (
                          'description' => '更新时间。',
                          'type' => 'string',
                          'example' => '2023-05-08T02:31Z',
                        ),
                        'CreateTimestamp' => 
                        array (
                          'description' => '创建时间（时间戳）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1672740294000',
                        ),
                        'UpdateTimestamp' => 
                        array (
                          'description' => '更新时间（时间戳）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1654777678000',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => 'Zone ID。',
                          'type' => 'string',
                          'example' => 'a49f55537f3b0b1e6e43add0bf5f0033',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PageSize\\": 100,\\n  \\"RequestId\\": \\"7B07FBC3-3A53-4939-A3C6-2BDFE407BAB2\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalPages\\": 1,\\n  \\"TotalItems\\": 100,\\n  \\"Records\\": {\\n    \\"Record\\": [\\n      {\\n        \\"Status\\": \\"ENABLE\\",\\n        \\"Type\\": \\"A\\",\\n        \\"Value\\": \\"127.0.0.1\\",\\n        \\"Ttl\\": 60,\\n        \\"Remark\\": \\"xxx\\",\\n        \\"RecordId\\": 2469595025,\\n        \\"Rr\\": \\"www\\",\\n        \\"Priority\\": 10,\\n        \\"Line\\": \\"default\\",\\n        \\"Weight\\": 1,\\n        \\"CreateTime\\": \\"2019-03-14T03:47Z\\",\\n        \\"UpdateTime\\": \\"2023-05-08T02:31Z\\",\\n        \\"CreateTimestamp\\": 1672740294000,\\n        \\"UpdateTimestamp\\": 1654777678000,\\n        \\"ZoneId\\": \\"a49f55537f3b0b1e6e43add0bf5f0033\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询解析记录列表',
      'summary' => '查询prviate zone的解析记录列表。',
    ),
    'AddResolverEndpoint' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点名称，最长20个字符，超过限制会报错。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'endpoint-test-name',
          ),
        ),
        1 => 
        array (
          'name' => 'VpcRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '出站VPC所在regionID

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '出站VPC ID

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vpc-129343jslslsks',
          ),
        ),
        3 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全组ID

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'kqlqlqjqqkq',
          ),
        ),
        4 => 
        array (
          'name' => 'IpConfig',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '出站流量源IP地址（为了保证高可用，至少添加2个，最多可添加6个）',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'VSwitchId' => 
                array (
                  'description' => '交换机ID

',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'sjqkql',
                ),
                'CidrBlock' => 
                array (
                  'description' => '子网掩码；交换机的IPv4网段

',
                  'type' => 'string',
                  'required' => true,
                  'example' => '172.16.0.0/24',
                ),
                'AzId' => 
                array (
                  'description' => '可用区ID

',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'cn-hangzhou-a',
                ),
                'Ip' => 
                array (
                  'description' => '子网掩码参数范围内的IP地址。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => '172.16.xx.xx',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 10,
          ),
        ),
        5 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
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
                'description' => '唯一请求识别码

',
                'type' => 'string',
                'example' => '32436208-E1AF-4DAB-B3B8-24F5F25B0950',
              ),
              'EndpointId' => 
              array (
                'description' => '出站终端节点ID
',
                'type' => 'string',
                'example' => 'hra0**',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"32436208-E1AF-4DAB-B3B8-24F5F25B0950\\",\\n  \\"EndpointId\\": \\"hra0**\\"\\n}","errorExample":""},{"type":"xml","example":"<AddResolverEndpointResponse>\\n    <RequestId>32436208-E1AF-4DAB-B3B8-24F5F25B0950</RequestId>\\n    <EndpointId>hra0**</EndpointId>\\n</AddResolverEndpointResponse>","errorExample":""}]',
      'title' => '新增终端节点',
      'summary' => '调用AddResolverEndpoint新增终端节点。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddResolverRule' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转发规则名称

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '测试',
          ),
        ),
        1 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转发规则类型：

- OUTBOUND: 转发至外部IP',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'OUTBOUND',
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转发zone名称

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'example.com',
          ),
        ),
        3 => 
        array (
          'name' => 'EndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点ID

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hra0**',
          ),
        ),
        4 => 
        array (
          'name' => 'ForwardIp',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '转发目标IP地址和端口号',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Ip' => 
                array (
                  'description' => '转发目标IP地址

',
                  'type' => 'string',
                  'required' => true,
                  'example' => '172.16.xx.xx',
                ),
                'Port' => 
                array (
                  'description' => '转发目标IP地址端口号
',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'example' => '8080',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 10,
          ),
        ),
        5 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
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
                'description' => '唯一请求识别码

',
                'type' => 'string',
                'example' => '725B8BED-901F-480C-BBAC-FA59A18580C1',
              ),
              'RuleId' => 
              array (
                'description' => '转发规则ID

',
                'type' => 'string',
                'example' => 'hra0**',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"725B8BED-901F-480C-BBAC-FA59A18580C1\\",\\n  \\"RuleId\\": \\"hra0**\\"\\n}","errorExample":""},{"type":"xml","example":"<AddResolverRuleResponse>\\n    <RequestId>725B8BED-901F-480C-BBAC-FA59A18580C1</RequestId>\\n    <RuleId>hra0**</RuleId>\\n</AddResolverRuleResponse>","errorExample":""}]',
      'title' => '新增转发规则',
      'summary' => '调用AddResolverRule新增转发规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BindResolverRuleVpc' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转发规则ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hra0**',
          ),
        ),
        2 => 
        array (
          'name' => 'Vpc',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'VPC列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'VpcId' => 
                array (
                  'description' => 'VPC ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vpc-kqk1i2o2ajsksl-vpc-test',
                ),
                'RegionId' => 
                array (
                  'description' => '地域ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cn-hangzhou',
                ),
                'VpcType' => 
                array (
                  'description' => 'VPC类型。

- STANDARD：标准VPC。

- EDS：无影工作区VPC。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'STANDARD',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 64,
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
                'example' => '12FE6E98-3885-423E-B18B-88CC17052A31',
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
            'errorCode' => 'ZoneVpc.Zone.Repeated',
            'errorMessage' => 'Vpc is bind to same zone name.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"12FE6E98-3885-423E-B18B-88CC17052A31\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>12FE6E98-3885-423E-B18B-88CC17052A31</RequestId>","errorExample":""}]',
      'title' => '转发规则关联VPC',
      'summary' => '进行转发规则关联VPC。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteResolverEndpoint' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点ID

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hra0**',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
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
                'description' => '唯一请求识别码

',
                'type' => 'string',
                'example' => '35134B4A-CEC0-43C8-AAD4-BA54AE3268B5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"35134B4A-CEC0-43C8-AAD4-BA54AE3268B5\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>35134B4A-CEC0-43C8-AAD4-BA54AE3268B5</RequestId>","errorExample":""}]',
      'title' => '删除终端节点',
      'summary' => '调用DeleteResolverEndpoint删除终端节点。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteResolverRule' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转发规则ID

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hra0**',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
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
                'description' => '唯一请求识别码

',
                'type' => 'string',
                'example' => '0C9959BE-3A6A-4803-8DCE-973B42ACD599',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0C9959BE-3A6A-4803-8DCE-973B42ACD599\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>0C9959BE-3A6A-4803-8DCE-973B42ACD599</RequestId>","errorExample":""}]',
      'title' => '删除转发规则',
      'summary' => '调用DeleteResolverRule删除转发规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeResolverEndpoint' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'EndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点ID

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hra0**',
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
              'Status' => 
              array (
                'description' => '终端节点状态：

- SUCCESS: 工作正常
- INIT：创建中
- FAILED：创建失败
- CHANGE_INIT: 修改中
- CHANGE_FAILED: 修改失败
- EXCEPTION: 工作异常',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码

',
                'type' => 'string',
                'example' => '45020ED9-6319-4CA7-9475-6E8D6446E84F',
              ),
              'SecurityGroupId' => 
              array (
                'description' => '安全组ID

',
                'type' => 'string',
                'example' => 'sg-8vb3sigz86xc-group-test',
              ),
              'CreateTime' => 
              array (
                'description' => '创建时间',
                'type' => 'string',
                'example' => '2020-07-13 10:45:56',
              ),
              'Name' => 
              array (
                'description' => '终端节点名称

',
                'type' => 'string',
                'example' => '终端节点-test',
              ),
              'VpcRegionName' => 
              array (
                'description' => '出站VPC所在地域名称

',
                'type' => 'string',
                'example' => '华北',
              ),
              'VpcId' => 
              array (
                'description' => '出站VPC ID

',
                'type' => 'string',
                'example' => 'vpc-8vbl8mpum-vpc-id',
              ),
              'UpdateTime' => 
              array (
                'description' => '更新时间',
                'type' => 'string',
                'example' => '2020-07-13 10:48:39',
              ),
              'VpcRegionId' => 
              array (
                'description' => '出站VPC所在地域ID

',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'VpcName' => 
              array (
                'description' => '出站VPC名称

',
                'type' => 'string',
                'example' => 'vpc-name-test',
              ),
              'IpConfigs' => 
              array (
                'description' => '出站流量源IP配置列表

',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'VSwitchId' => 
                    array (
                      'description' => '交换机的ID

',
                      'type' => 'string',
                      'example' => 'vsw-8vbmks7hzrmk-vswitch-id',
                    ),
                    'CidrBlock' => 
                    array (
                      'description' => '交换机的IPv4网段。

',
                      'type' => 'string',
                      'example' => '172.16.0.0/24',
                    ),
                    'Ip' => 
                    array (
                      'description' => 'IPv4地址

',
                      'type' => 'string',
                      'example' => '172.16.xx.xx',
                    ),
                    'AzId' => 
                    array (
                      'description' => '交换机所属的可用区ID

',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-a',
                    ),
                  ),
                ),
              ),
              'UpdateTimestamp' => 
              array (
                'description' => '更新时间戳',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1594608519000',
              ),
              'Id' => 
              array (
                'description' => '终端节点ID

',
                'type' => 'string',
                'example' => 'hra0**',
              ),
              'CreateTimestamp' => 
              array (
                'description' => '创建时间戳',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1594608356000',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"SUCCESS\\",\\n  \\"RequestId\\": \\"45020ED9-6319-4CA7-9475-6E8D6446E84F\\",\\n  \\"SecurityGroupId\\": \\"sg-8vb3sigz86xc-group-test\\",\\n  \\"CreateTime\\": \\"2020-07-13 10:45:56\\",\\n  \\"Name\\": \\"终端节点-test\\",\\n  \\"VpcRegionName\\": \\"华北\\",\\n  \\"VpcId\\": \\"vpc-8vbl8mpum-vpc-id\\",\\n  \\"UpdateTime\\": \\"2020-07-13 10:48:39\\",\\n  \\"VpcRegionId\\": \\"cn-hangzhou\\",\\n  \\"VpcName\\": \\"vpc-name-test\\",\\n  \\"IpConfigs\\": [\\n    {\\n      \\"VSwitchId\\": \\"vsw-8vbmks7hzrmk-vswitch-id\\",\\n      \\"CidrBlock\\": \\"172.16.0.0/24\\",\\n      \\"Ip\\": \\"172.16.xx.xx\\",\\n      \\"AzId\\": \\"cn-hangzhou-a\\"\\n    }\\n  ],\\n  \\"UpdateTimestamp\\": 1594608519000,\\n  \\"Id\\": \\"hra0**\\",\\n  \\"CreateTimestamp\\": 1594608356000\\n}","errorExample":""},{"type":"xml","example":"<DescribeResolverEndpointResponse>\\n    <Status>SUCCESS</Status>\\n    <RequestId>45020ED9-6319-4CA7-9475-6E8D6446E84F</RequestId>\\n    <SecurityGroupId>sg-8vb3sigz86xc-group-test</SecurityGroupId>\\n    <CreateTime>2020-07-13 10:45:56</CreateTime>\\n    <Name>终端节点-test</Name>\\n    <VpcRegionName>华北</VpcRegionName>\\n    <VpcId>vpc-8vbl8mpum-vpc-id</VpcId>\\n    <UpdateTime>2020-07-13 10:48:39</UpdateTime>\\n    <VpcRegionId>cn-hangzhou</VpcRegionId>\\n    <VpcName>vpc-name-test</VpcName>\\n    <IpConfigs>\\n        <VSwitchId>vsw-8vbmks7hzrmk-vswitch-id</VSwitchId>\\n        <CidrBlock>172.16.0.0/24</CidrBlock>\\n        <Ip>172.16.xx.xx</Ip>\\n        <AzId>cn-hangzhou-a</AzId>\\n    </IpConfigs>\\n    <UpdateTimestamp>1594608519000</UpdateTimestamp>\\n    <Id>hra0**</Id>\\n    <CreateTimestamp>1594608356000</CreateTimestamp>\\n</DescribeResolverEndpointResponse>","errorExample":""}]',
      'title' => '获取终端节点详情',
      'summary' => '调用DescribeResolverEndpoint获取终端节点详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeResolverEndpoints' => 
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
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关键字，照”%Keyword%”模式搜索终端节点名称',
            'type' => 'string',
            'required' => false,
            'example' => '终端节点-test',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码，默认是1

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9999999',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页面大小，默认是20；最大支持100

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '20',
            'default' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点状态，不传获取全部，传入则获取指定状态：

- SUCCESS: 工作正常
- INIT：创建中
- FAILED：创建失败
- CHANGE_INIT: 修改中
- CHANGE_FAILED: 修改失败
- EXCEPTION: 工作异常',
            'type' => 'string',
            'required' => false,
            'example' => 'SUCCESS',
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
              'Endpoints' => 
              array (
                'description' => '终端节点列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '终端节点状态：

- SUCCESS: 工作正常
- INIT：创建中
- FAILED：创建失败
- CHANGE_INIT: 修改中
- CHANGE_FAILED: 修改失败
- EXCEPTION: 工作异常',
                      'type' => 'string',
                      'example' => 'SUCCESS',
                    ),
                    'VpcId' => 
                    array (
                      'description' => '出站VPC ID

',
                      'type' => 'string',
                      'example' => 'vpc-8vbl8mpum-test-vpc-id',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '更新时间

',
                      'type' => 'string',
                      'example' => '2020-07-13 10:38:24',
                    ),
                    'SecurityGroupId' => 
                    array (
                      'description' => '安全组Id

',
                      'type' => 'string',
                      'example' => 'sg-8vb3sigz86xc-test-group',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '2020-07-13 10:36:26',
                    ),
                    'VpcRegionId' => 
                    array (
                      'description' => '出站VPC所在地域ID

',
                      'type' => 'string',
                      'example' => 'cn-zhangjiakou',
                    ),
                    'IpConfigs' => 
                    array (
                      'description' => '出站流量源IP列表

',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'VSwitchId' => 
                          array (
                            'description' => '交换机的ID

',
                            'type' => 'string',
                            'example' => 'vsw-8vbmks7h-test-vswitchId',
                          ),
                          'CidrBlock' => 
                          array (
                            'description' => '交换机的IPv4网段。

',
                            'type' => 'string',
                            'example' => '172.16.0.0/24',
                          ),
                          'Ip' => 
                          array (
                            'description' => 'IPv4地址

',
                            'type' => 'string',
                            'example' => '172.16.xx.xx',
                          ),
                          'AzId' => 
                          array (
                            'description' => '交换机所属的可用区ID

',
                            'type' => 'string',
                            'example' => 'cn-zhangjiakou-a',
                          ),
                        ),
                      ),
                    ),
                    'VpcName' => 
                    array (
                      'description' => '出站VPC名称

',
                      'type' => 'string',
                      'example' => 'vpc-test-name',
                    ),
                    'UpdateTimestamp' => 
                    array (
                      'description' => '更新时间戳',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1594607904000',
                    ),
                    'VpcRegionName' => 
                    array (
                      'description' => '出站VPC所在地域名称

',
                      'type' => 'string',
                      'example' => '杭州VPC测试',
                    ),
                    'Name' => 
                    array (
                      'description' => '终端节点名称

',
                      'type' => 'string',
                      'example' => '终端节点-test',
                    ),
                    'Id' => 
                    array (
                      'description' => '终端节点ID',
                      'type' => 'string',
                      'example' => 'hra0**',
                    ),
                    'CreateTimestamp' => 
                    array (
                      'description' => '创建时间戳',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1594607786000',
                    ),
                  ),
                ),
              ),
              'PageSize' => 
              array (
                'description' => '页面大小',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码',
                'type' => 'string',
                'example' => '83D1682B-B69A-4060-9FA8-2907C2A35600',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalPages' => 
              array (
                'description' => '总页数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalItems' => 
              array (
                'description' => '总个数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Endpoints\\": [\\n    {\\n      \\"Status\\": \\"SUCCESS\\",\\n      \\"VpcId\\": \\"vpc-8vbl8mpum-test-vpc-id\\",\\n      \\"UpdateTime\\": \\"2020-07-13 10:38:24\\",\\n      \\"SecurityGroupId\\": \\"sg-8vb3sigz86xc-test-group\\",\\n      \\"CreateTime\\": \\"2020-07-13 10:36:26\\",\\n      \\"VpcRegionId\\": \\"cn-zhangjiakou\\",\\n      \\"IpConfigs\\": [\\n        {\\n          \\"VSwitchId\\": \\"vsw-8vbmks7h-test-vswitchId\\",\\n          \\"CidrBlock\\": \\"172.16.0.0/24\\",\\n          \\"Ip\\": \\"172.16.xx.xx\\",\\n          \\"AzId\\": \\"cn-zhangjiakou-a\\"\\n        }\\n      ],\\n      \\"VpcName\\": \\"vpc-test-name\\",\\n      \\"UpdateTimestamp\\": 1594607904000,\\n      \\"VpcRegionName\\": \\"杭州VPC测试\\",\\n      \\"Name\\": \\"终端节点-test\\",\\n      \\"Id\\": \\"hra0**\\",\\n      \\"CreateTimestamp\\": 1594607786000\\n    }\\n  ],\\n  \\"PageSize\\": 2,\\n  \\"RequestId\\": \\"83D1682B-B69A-4060-9FA8-2907C2A35600\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalPages\\": 1,\\n  \\"TotalItems\\": 1\\n}","errorExample":""},{"type":"xml","example":"<DescribeResolverEndpointsResponse>\\n    <Endpoints>\\n        <Status>SUCCESS</Status>\\n        <VpcId>vpc-8vbl8mpum-test-vpc-id</VpcId>\\n        <UpdateTime>2020-07-13 10:38:24</UpdateTime>\\n        <SecurityGroupId>sg-8vb3sigz86xc-test-group</SecurityGroupId>\\n        <CreateTime>2020-07-13 10:36:26</CreateTime>\\n        <VpcRegionId>cn-zhangjiakou</VpcRegionId>\\n        <IpConfigs>\\n            <VSwitchId>vsw-8vbmks7h-test-vswitchId</VSwitchId>\\n            <CidrBlock>172.16.0.0/24</CidrBlock>\\n            <Ip>172.16.xx.xx</Ip>\\n            <AzId>cn-zhangjiakou-a</AzId>\\n        </IpConfigs>\\n        <VpcName>vpc-test-name</VpcName>\\n        <UpdateTimestamp>1594607904000</UpdateTimestamp>\\n        <VpcRegionName>杭州VPC测试</VpcRegionName>\\n        <Name>终端节点-test</Name>\\n        <Id>hra0**</Id>\\n        <CreateTimestamp>1594607786000</CreateTimestamp>\\n    </Endpoints>\\n    <PageSize>2</PageSize>\\n    <RequestId>83D1682B-B69A-4060-9FA8-2907C2A35600</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <TotalPages>1</TotalPages>\\n    <TotalItems>1</TotalItems>\\n</DescribeResolverEndpointsResponse>","errorExample":""}]',
      'title' => '获取终端节点列表',
      'summary' => '调用DescribeResolverEndpoints获取终端节点列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeResolverRule' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转发规则ID

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hra1**',
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
              'ForwardIps' => 
              array (
                'description' => '转发目标IP地址列表

',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Ip' => 
                    array (
                      'description' => 'IP地址

',
                      'type' => 'string',
                      'example' => '172.16.xx.xx',
                    ),
                    'Port' => 
                    array (
                      'description' => '端口号

',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '8080',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码

',
                'type' => 'string',
                'example' => '13D5113B-7E34-407F-A9C1-D96CD2B04277',
              ),
              'CreateTime' => 
              array (
                'description' => '创建时间

',
                'type' => 'string',
                'example' => '2020-07-13 10:51:44',
              ),
              'Name' => 
              array (
                'description' => '转发规则名称


',
                'type' => 'string',
                'example' => '转发规则-test',
              ),
              'ZoneName' => 
              array (
                'description' => '转发zone名称

',
                'type' => 'string',
                'example' => 'example.com',
              ),
              'Type' => 
              array (
                'description' => '转发规则类型：

- OUTBOUND：转发至外部IP',
                'type' => 'string',
                'example' => 'OUTBOUND',
              ),
              'EndpointName' => 
              array (
                'description' => '终端节点名称

',
                'type' => 'string',
                'example' => '终端节点-test',
              ),
              'EndpointId' => 
              array (
                'description' => '终端节点ID

',
                'type' => 'string',
                'example' => 'hra0**',
              ),
              'UpdateTime' => 
              array (
                'description' => '更新时间

',
                'type' => 'string',
                'example' => '2020-07-13 10:51:44',
              ),
              'UpdateTimestamp' => 
              array (
                'description' => '更新时间戳

',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1594608704000',
              ),
              'Id' => 
              array (
                'description' => '转发规则ID

',
                'type' => 'string',
                'example' => 'hra1**',
              ),
              'CreateTimestamp' => 
              array (
                'description' => '创建时间戳

',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1594608704000',
              ),
              'BindVpcs' => 
              array (
                'description' => '转发规则关联的VPC列表

',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'VpcId' => 
                    array (
                      'description' => 'Vpc ID

',
                      'type' => 'string',
                      'example' => 'vpc-8vbl8m-vpc-id',
                    ),
                    'VpcName' => 
                    array (
                      'description' => 'Vpc名称

',
                      'type' => 'string',
                      'example' => 'vpc-name-test',
                    ),
                    'VpcType' => 
                    array (
                      'description' => 'Vpc类型',
                      'type' => 'string',
                      'example' => 'STANDARD' . "\0" . '（标准vpc）
EDS(无影工作区Vpc)',
                    ),
                    'RegionName' => 
                    array (
                      'description' => '地域名称

',
                      'type' => 'string',
                      'example' => '杭州测试',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID

',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'VpcUserId' => 
                    array (
                      'description' => 'VPC归属用户ID',
                      'type' => 'string',
                      'example' => '324542413',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ForwardIps\\": [\\n    {\\n      \\"Ip\\": \\"172.16.xx.xx\\",\\n      \\"Port\\": 8080\\n    }\\n  ],\\n  \\"RequestId\\": \\"13D5113B-7E34-407F-A9C1-D96CD2B04277\\",\\n  \\"CreateTime\\": \\"2020-07-13 10:51:44\\",\\n  \\"Name\\": \\"转发规则-test\\",\\n  \\"ZoneName\\": \\"example.com\\",\\n  \\"Type\\": \\"OUTBOUND\\",\\n  \\"EndpointName\\": \\"终端节点-test\\",\\n  \\"EndpointId\\": \\"hra0**\\",\\n  \\"UpdateTime\\": \\"2020-07-13 10:51:44\\",\\n  \\"UpdateTimestamp\\": 1594608704000,\\n  \\"Id\\": \\"hra1**\\",\\n  \\"CreateTimestamp\\": 1594608704000,\\n  \\"BindVpcs\\": [\\n    {\\n      \\"VpcId\\": \\"vpc-8vbl8m-vpc-id\\",\\n      \\"VpcName\\": \\"vpc-name-test\\",\\n      \\"VpcType\\": \\"STANDARD\\\\u0000（标准vpc）\\\\nEDS(无影工作区Vpc)\\",\\n      \\"RegionName\\": \\"杭州测试\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"VpcUserId\\": \\"324542413\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeResolverRuleResponse>\\n    <ForwardIps>\\n        <Ip>172.16.xx.xx</Ip>\\n        <Port>8080</Port>\\n    </ForwardIps>\\n    <RequestId>13D5113B-7E34-407F-A9C1-D96CD2B04277</RequestId>\\n    <CreateTime>2020-07-13 10:51:44</CreateTime>\\n    <Name>转发规则-test</Name>\\n    <ZoneName>example.com</ZoneName>\\n    <Type>OUTBOUND</Type>\\n    <EndpointName>终端节点-test</EndpointName>\\n    <EndpointId>hra0**</EndpointId>\\n    <UpdateTime>2020-07-13 10:51:44</UpdateTime>\\n    <UpdateTimestamp>1594608704000</UpdateTimestamp>\\n    <Id>hra1**</Id>\\n    <CreateTimestamp>1594608704000</CreateTimestamp>\\n    <BindVpcs>\\n        <VpcId>vpc-8vbl8m-vpc-id</VpcId>\\n        <VpcName>vpc-name-test</VpcName>\\n        <RegionName>杭州测试</RegionName>\\n        <RegionId>cn-hangzhou</RegionId>\\n    </BindVpcs>\\n</DescribeResolverRuleResponse>","errorExample":""}]',
      'title' => '获取转发规则详情',
      'summary' => '获取转发规则详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeResolverRules' => 
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
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关键字，照”%Keyword%”模式搜索规则名称

',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码, 默认值1

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9999999',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页面大小，默认值20；最大支持100

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '20',
            'default' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'NeedDetailAttributes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '	
是否需要额外信息，默认为false；

- true-需要额外信息，含转发规则关联的VPC列表等
- false-不需要额外信息',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'EndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '出站终端节点ID',
            'type' => 'string',
            'required' => false,
            'example' => 'hra2**',
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
              'PageSize' => 
              array (
                'description' => '页面大小

',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码

',
                'type' => 'string',
                'example' => 'A10E03D7-808C-422D-9144-F8586C2E2297',
              ),
              'PageNumber' => 
              array (
                'description' => '页码

',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalPages' => 
              array (
                'description' => '总页数

',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalItems' => 
              array (
                'description' => '总个数

',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Rules' => 
              array (
                'description' => '转发规则列表

',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'description' => '转发类型。

- OUTBOUD：转发至外部IP',
                      'type' => 'string',
                      'example' => 'OUTBOUND',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '更新时间

',
                      'type' => 'string',
                      'example' => '2020-07-13 10:51:44',
                    ),
                    'ForwardIps' => 
                    array (
                      'description' => '转发目标IP地址列表

',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Ip' => 
                          array (
                            'description' => 'IP地址

',
                            'type' => 'string',
                            'example' => '172.16.xx.xx',
                          ),
                          'Port' => 
                          array (
                            'description' => '端口号

',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '8080',
                          ),
                        ),
                      ),
                    ),
                    'EndpointName' => 
                    array (
                      'description' => '终端节点名称

',
                      'type' => 'string',
                      'example' => '终端节点-test',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间

',
                      'type' => 'string',
                      'example' => '2020-07-13 10:51:44',
                    ),
                    'ZoneName' => 
                    array (
                      'description' => '转发zone名称

',
                      'type' => 'string',
                      'example' => 'example.com',
                    ),
                    'UpdateTimestamp' => 
                    array (
                      'description' => '更新时间戳

',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1594608704000',
                    ),
                    'BindVpcs' => 
                    array (
                      'description' => '关联的VPC列表

',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'VpcName' => 
                          array (
                            'description' => 'VPC 名称

',
                            'type' => 'string',
                            'example' => 'vpc-name-test',
                          ),
                          'VpcId' => 
                          array (
                            'description' => 'VPC ID

',
                            'type' => 'string',
                            'example' => 'vpc-8vbl8mpum-vpc-id',
                          ),
                          'VpcType' => 
                          array (
                            'description' => 'VPC类型',
                            'type' => 'string',
                            'example' => '● STANDARD（标准VPC）
● EDS(无影工作区VPC)',
                          ),
                          'RegionName' => 
                          array (
                            'description' => '地域名称

',
                            'type' => 'string',
                            'example' => '杭州测试',
                          ),
                          'RegionId' => 
                          array (
                            'description' => '地域ID

',
                            'type' => 'string',
                            'example' => 'cn-hangzhou',
                          ),
                          'VpcUserId' => 
                          array (
                            'description' => 'VPC实际归属账号UID，',
                            'type' => 'string',
                            'example' => '121098702443**',
                          ),
                        ),
                      ),
                    ),
                    'EndpointId' => 
                    array (
                      'description' => '终端节点ID

',
                      'type' => 'string',
                      'example' => 'hra0**',
                    ),
                    'Name' => 
                    array (
                      'description' => '转发规则名称

',
                      'type' => 'string',
                      'example' => '转发规则-test',
                    ),
                    'Id' => 
                    array (
                      'description' => '转发规则Id

',
                      'type' => 'string',
                      'example' => 'hra1**',
                    ),
                    'CreateTimestamp' => 
                    array (
                      'description' => '创建时间戳',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1594608704000',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"A10E03D7-808C-422D-9144-F8586C2E2297\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalPages\\": 1,\\n  \\"TotalItems\\": 1,\\n  \\"Rules\\": [\\n    {\\n      \\"Type\\": \\"OUTBOUND\\",\\n      \\"UpdateTime\\": \\"2020-07-13 10:51:44\\",\\n      \\"ForwardIps\\": [\\n        {\\n          \\"Ip\\": \\"172.16.xx.xx\\",\\n          \\"Port\\": 8080\\n        }\\n      ],\\n      \\"EndpointName\\": \\"终端节点-test\\",\\n      \\"CreateTime\\": \\"2020-07-13 10:51:44\\",\\n      \\"ZoneName\\": \\"example.com\\",\\n      \\"UpdateTimestamp\\": 1594608704000,\\n      \\"BindVpcs\\": [\\n        {\\n          \\"VpcName\\": \\"vpc-name-test\\",\\n          \\"VpcId\\": \\"vpc-8vbl8mpum-vpc-id\\",\\n          \\"VpcType\\": \\"● STANDARD（标准VPC）\\\\n● EDS(无影工作区VPC)\\",\\n          \\"RegionName\\": \\"杭州测试\\",\\n          \\"RegionId\\": \\"cn-hangzhou\\",\\n          \\"VpcUserId\\": \\"121098702443**\\"\\n        }\\n      ],\\n      \\"EndpointId\\": \\"hra0**\\",\\n      \\"Name\\": \\"转发规则-test\\",\\n      \\"Id\\": \\"hra1**\\",\\n      \\"CreateTimestamp\\": 1594608704000\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeResolverRulesResponse>\\n    <PageSize>10</PageSize>\\n    <RequestId>A10E03D7-808C-422D-9144-F8586C2E2297</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <TotalPages>1</TotalPages>\\n    <TotalItems>1</TotalItems>\\n    <Rules>\\n        <Type>OUTBOUND</Type>\\n        <UpdateTime>2020-07-13 10:51:44</UpdateTime>\\n        <ForwardIps>\\n            <Ip>172.16.xx.xx</Ip>\\n            <Port>8080</Port>\\n        </ForwardIps>\\n        <EndpointName>终端节点-test</EndpointName>\\n        <CreateTime>2020-07-13 10:51:44</CreateTime>\\n        <ZoneName>example.com</ZoneName>\\n        <UpdateTimestamp>1594608704000</UpdateTimestamp>\\n        <BindVpcs>\\n            <VpcName>vpc-name-test</VpcName>\\n            <VpcId>vpc-8vbl8mpum-vpc-id</VpcId>\\n            <RegionName>杭州测试</RegionName>\\n            <RegionId>cn-hangzhou</RegionId>\\n        </BindVpcs>\\n        <EndpointId>hra0**</EndpointId>\\n        <Name>转发规则-test</Name>\\n        <Id>hra1**</Id>\\n        <CreateTimestamp>1594608704000</CreateTimestamp>\\n    </Rules>\\n</DescribeResolverRulesResponse>","errorExample":""}]',
      'title' => '获取转发规则列表',
      'summary' => '获取转发规则列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateResolverEndpoint' => 
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
          'name' => 'EndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点ID

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hra0**',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点名称

',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'endpoint-test-name',
          ),
        ),
        2 => 
        array (
          'name' => 'IpConfig',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '出站流量源IP地址（为了保证高可用，至少添加2个，最多可添加6个）
',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'VSwitchId' => 
                array (
                  'description' => '交换机ID

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'sjqkql',
                ),
                'CidrBlock' => 
                array (
                  'description' => '子网掩码；交换机的IPv4网段

',
                  'type' => 'string',
                  'required' => false,
                  'example' => '172.16.0.0/24',
                ),
                'AzId' => 
                array (
                  'description' => '可用区ID

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cn-hangzhou-a',
                ),
                'Ip' => 
                array (
                  'description' => '指定IP地址

',
                  'type' => 'string',
                  'required' => false,
                  'example' => '172.16.xx.xx',
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
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
                'description' => '唯一请求识别码

',
                'type' => 'string',
                'example' => 'EC0BDA3A-A92A-4AC8-B351-322A9C79D5C5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC0BDA3A-A92A-4AC8-B351-322A9C79D5C5\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>EC0BDA3A-A92A-4AC8-B351-322A9C79D5C5</RequestId>","errorExample":""}]',
      'title' => '修改终端节点',
      'summary' => '调用UpdateResolverEndpoint修改终端节点。',
    ),
    'UpdateResolverRule' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转发规则ID

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hra0**',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转发规则名称

',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '转发规则-test',
          ),
        ),
        2 => 
        array (
          'name' => 'ForwardIp',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '转发目标IP地址和端口号',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Ip' => 
                array (
                  'description' => '	
转发目标IP地址',
                  'type' => 'string',
                  'required' => false,
                  'example' => '172.16.xx.xx',
                ),
                'Port' => 
                array (
                  'description' => '	
转发目标IP地址端口号',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '8080',
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
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
                'description' => '唯一请求识别码

',
                'type' => 'string',
                'example' => '0C9959BE-3A6A-4803-8DCE-973B42ACD599',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0C9959BE-3A6A-4803-8DCE-973B42ACD599\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>0C9959BE-3A6A-4803-8DCE-973B42ACD599</RequestId>","errorExample":""}]',
      'title' => '修改转发规则',
      'summary' => '调用UpdateResolverRule修改转发规则。',
    ),
    'DescribeResolverAvailableZones' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'ResolverRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-zhangjiakou',
          ),
        ),
        2 => 
        array (
          'name' => 'AzId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-zhangjiakou-a',
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
                'description' => '唯一请求识别码

',
                'type' => 'string',
                'example' => '23268E49-0C3E-4A2C-AB70-B4C7D092470B',
              ),
              'AvailableZones' => 
              array (
                'description' => '可用区资源状况列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '可用区内资源状态：

- NORMAL: 正常
- SOLD_OUT: 已售罄',
                      'type' => 'string',
                      'example' => 'NORMAL',
                    ),
                    'AzId' => 
                    array (
                      'description' => '可用区ID',
                      'type' => 'string',
                      'example' => 'cn-zhangjiakou-a',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"23268E49-0C3E-4A2C-AB70-B4C7D092470B\\",\\n  \\"AvailableZones\\": [\\n    {\\n      \\"Status\\": \\"NORMAL\\",\\n      \\"AzId\\": \\"cn-zhangjiakou-a\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>23268E49-0C3E-4A2C-AB70-B4C7D092470B</RequestId>\\n<AvailableZones>\\n    <Status>NORMAL</Status>\\n    <AzId>cn-zhangjiakou-a</AzId>\\n</AvailableZones>","errorExample":""}]',
      'title' => '获取可用区域列表',
      'summary' => '调用DescribeResolverAvailableZones获取可用区域列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddUserVpcAuthorization' => 
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
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AuthorizedUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权资源的所属用户主账号ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '111222333',
          ),
        ),
        1 => 
        array (
          'name' => 'AuthCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '验证码。

AuthType取NORMAL或传空时且AuthChannel取”AUTH_CODE“或传空时为必传。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '123456',
          ),
        ),
        2 => 
        array (
          'name' => 'AuthType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权类型。

- NORMAL：普通授权。
- CLOUD_PRODUCT：云产品授权。',
            'type' => 'string',
            'required' => false,
            'example' => 'NORMAL',
          ),
        ),
        3 => 
        array (
          'name' => 'AuthChannel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权渠道，取值范围：

- AUTH_CODE：验证码授权，验证AuthCode传入的验证码是否正确。
- RESOURCE_DIRECTORY: 资源目录授权，验证AuthorizedUserId与当前账户是否存在资源目录授信。
- 传空时，同AUTH_CODE，即验证码授权。',
            'type' => 'string',
            'required' => false,
            'example' => 'AUTH_CODE',
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
                'example' => '46973D4C-E3E4-4ABA-9190-9A9DE406C7E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"46973D4C-E3E4-4ABA-9190-9A9DE406C7E\\"\\n}","type":"json"}]',
      'title' => '新增跨账号VPC授权',
      'summary' => '添加跨账号VPC授权。',
    ),
    'DescribeUserVpcAuthorizations' => 
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
          'name' => 'AuthType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权类型。

- NORMAL：普通授权。
- CLOUD_PRODUCT：云产品授权。',
            'type' => 'string',
            'required' => false,
            'example' => 'NORMAL',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码，默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9999999',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页面大小。默认值为20，最大值为100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'example' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'AuthorizedUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权资源的所属用户主账号ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '111222333',
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
              'PageSize' => 
              array (
                'description' => '页面大小。默认值为20，最大值为100。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '46973D4C-E3E4-4ABA-9190-9A9DE406C7E',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码，默认为1。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalPages' => 
              array (
                'description' => '授权页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'Users' => 
              array (
                'description' => '授权资源的所属用户主账号信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AuthType' => 
                    array (
                      'description' => '授权类型：

- NORMAL：普通授权',
                      'type' => 'string',
                      'example' => 'NORMAL',
                    ),
                    'AuthorizedUserId' => 
                    array (
                      'description' => '授权资源的所属用户主账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '111222333',
                    ),
                    'AuthorizedAliyunId' => 
                    array (
                      'description' => '授权资源的所属用户主账号名称。',
                      'type' => 'string',
                      'example' => 'alidns***@test.com',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2023-05-08T02:31Z
',
                    ),
                    'CreateTimestamp' => 
                    array (
                      'description' => '创建时间（时间戳）。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1672740294000',
                    ),
                  ),
                ),
              ),
              'TotalItems' => 
              array (
                'description' => '授权总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"46973D4C-E3E4-4ABA-9190-9A9DE406C7E\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalPages\\": 5,\\n  \\"Users\\": [\\n    {\\n      \\"AuthType\\": \\"NORMAL\\",\\n      \\"AuthorizedUserId\\": 111222333,\\n      \\"AuthorizedAliyunId\\": \\"alidns***@test.com\\",\\n      \\"CreateTime\\": \\"2023-05-08T02:31Z\\\\n\\",\\n      \\"CreateTimestamp\\": 1672740294000\\n    }\\n  ],\\n  \\"TotalItems\\": 100\\n}","errorExample":""},{"type":"xml","example":"<DescribeUserVpcAuthorizationsResponse>\\n    <PageSize>20</PageSize>\\n    <RequestId>46973D4C-E3E4-4ABA-9190-9A9DE406C7E</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <TotalPages>5</TotalPages>\\n    <Users>\\n        <AuthType>NORMAL</AuthType>\\n        <AuthorizedUserId>111222333</AuthorizedUserId>\\n        <AuthorizedAliyunId>alidns***@test.com</AuthorizedAliyunId>\\n    </Users>\\n    <TotalItems>100</TotalItems>\\n</DescribeUserVpcAuthorizationsResponse>","errorExample":""}]',
      'title' => '获取跨账号授权列表',
      'summary' => '调用DescribeUserVpcAuthorizations获取跨账号授权列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteUserVpcAuthorization' => 
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AuthorizedUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权资源的所属用户主账号ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '22354325',
          ),
        ),
        1 => 
        array (
          'name' => 'AuthType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权类型。

- NORMAL：普通授权。
- CLOUD_PRODUCT：云产品授权。',
            'type' => 'string',
            'required' => false,
            'example' => 'NORMAL',
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
                'example' => '46973D4C-E3E4-4ABA-9190-9A9DE406C7E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"46973D4C-E3E4-4ABA-9190-9A9DE406C7E\\"\\n}","type":"json"}]',
      'title' => '删除跨账号授权',
      'summary' => '删除跨账号授权。',
    ),
    'UpdateSyncEcsHostTask' => 
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Zone的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test79afafec***********1d28f7889c',
          ),
        ),
        2 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '状态。

- ON：开启
- OFF：关闭',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ON',
            'enum' => 
            array (
              0 => 'OFF',
              1 => 'ON',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待同步的地域信息列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'UserId' => 
                array (
                  'description' => '地域归属的用户ID，用于跨账号同步场景。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '1234567890',
                ),
                'RegionId' => 
                array (
                  'description' => '地域ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cn-beijing',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 500,
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'test-FC9A-4595-8D96-089D73D7A63D',
              ),
              'Success' => 
              array (
                'description' => '新增和更新主机名同步任务是否成功。

- True：成功
- False：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"test-FC9A-4595-8D96-089D73D7A63D\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateSyncEcsHostTaskResponse>\\n    <RequestId>test-FC9A-4595-8D96-089D73D7A63D</RequestId>\\n    <Success>true</Success>\\n</UpdateSyncEcsHostTaskResponse>","errorExample":""}]',
      'title' => '更新主机名同步任务',
      'summary' => '通过进行新增和更新主机名同步任务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeSyncEcsHostTask' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Zone的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pvtz-test-id-2989149d628c56f00e',
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
              'Status' => 
              array (
                'description' => '状态。

- ON：开启
- OFF：关闭',
                'type' => 'string',
                'example' => 'ON',
              ),
              'ZoneId' => 
              array (
                'description' => 'Zone的ID。',
                'type' => 'string',
                'example' => 'pvtz-test-id-2989149d628c56f00e',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '75446CC1-FC9A-4595-8D96-089D73D7A63D',
              ),
              'EcsRegions' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'EcsRegion' => 
                  array (
                    'description' => '同步的地域信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UserId' => 
                        array (
                          'description' => '地域归属的用户ID，用于跨账号同步场景。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1234567890',
                        ),
                        'RegionIds' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'RegionId' => 
                            array (
                              'description' => '地域ID。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '地域ID。',
                                'type' => 'string',
                                'example' => 'cn-beijing',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Regions' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'RegionId' => 
                  array (
                    'description' => '当前账号同步的地域信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hongkong',
                    ),
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '获取主机名同步任务详情是否成功。

- True
- False',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"ON\\",\\n  \\"ZoneId\\": \\"pvtz-test-id-2989149d628c56f00e\\",\\n  \\"RequestId\\": \\"75446CC1-FC9A-4595-8D96-089D73D7A63D\\",\\n  \\"EcsRegions\\": {\\n    \\"EcsRegion\\": [\\n      {\\n        \\"UserId\\": 1234567890,\\n        \\"RegionIds\\": {\\n          \\"RegionId\\": [\\n            \\"cn-beijing\\"\\n          ]\\n        }\\n      }\\n    ]\\n  },\\n  \\"Regions\\": {\\n    \\"RegionId\\": [\\n      \\"cn-hongkong\\"\\n    ]\\n  },\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DescribeSyncEcsHostTaskResponse>\\n    <Status>ON</Status>\\n    <ZoneId>pvtz-test-id-2989149d628c56f00e</ZoneId>\\n    <RequestId>75446CC1-FC9A-4595-8D96-089D73D7A63D</RequestId>\\n    <EcsRegions>\\n        <UserId>1234567890</UserId>\\n        <RegionIds>cn-beijing</RegionIds>\\n    </EcsRegions>\\n    <Success>true</Success>\\n</DescribeSyncEcsHostTaskResponse>","errorExample":""}]',
      'title' => '获取主机名同步任务详情',
      'summary' => '通过获取主机名同步任务详情。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'ap-northeast-2-pop',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-beijing-finance-pop',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-beijing-gov-1',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-beijing-nu16-b01',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-edge-1',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-fujian',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-haidian-cm12-c01',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-hangzhou-bj-b01',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-hangzhou-internal-prod-1',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-1',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-2',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-3',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'cn-hangzhou-test-306',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'cn-hongkong-finance-pop',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-qingdao-nebula',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-shanghai-et15-b01',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-shanghai-et2-b01',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-shanghai-inner',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-shanghai-internal-test-1',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-shenzhen-inner',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-shenzhen-st4-d01',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'cn-shenzhen-su18-b01',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-wuhan',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    33 => 
    array (
      'regionId' => 'cn-yushanfang',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    34 => 
    array (
      'regionId' => 'cn-zhangbei-na61-b01',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    35 => 
    array (
      'regionId' => 'cn-zhangjiakou-na62-a01',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    36 => 
    array (
      'regionId' => 'cn-zhengzhou-nebula-1',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    37 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    38 => 
    array (
      'regionId' => 'eu-west-1-oxs',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    39 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    40 => 
    array (
      'regionId' => 'rus-west-1-pop',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    41 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
    42 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'pvtz.aliyuncs.com',
    ),
  ),
);
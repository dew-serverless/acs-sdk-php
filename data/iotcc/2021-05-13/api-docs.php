<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'IoTCC',
    'version' => '2021-05-13',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 171122,
      'title' => '服务开通',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'OpenIoTCloudConnectorService',
      ),
    ),
    1 => 
    array (
      'id' => 181681,
      'title' => '地域',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListRegions',
      ),
    ),
    2 => 
    array (
      'id' => 171128,
      'title' => 'APN',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListAPNs',
      ),
    ),
    3 => 
    array (
      'id' => 172548,
      'title' => '云连接器',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateIoTCloudConnector',
        1 => 'UpdateIoTCloudConnectorAttribute',
        2 => 'ListIoTCloudConnectors',
        3 => 'ListIoTCloudConnectorAvailableZones',
        4 => 'AssociateVSwitchWithIoTCloudConnector',
        5 => 'DissociateVSwitchFromIoTCloudConnector',
        6 => 'ListIoTCloudConnectorEIPs',
        7 => 'DeleteIoTCloudConnector',
      ),
    ),
    4 => 
    array (
      'id' => 171130,
      'title' => '连接池',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateConnectionPool',
        1 => 'AddCidrToConnectionPool',
        2 => 'UpdateConnectionPoolAttribute',
        3 => 'ListConnectionPools',
        4 => 'ListConnectionPoolIps',
        5 => 'GetStsInfoAndOssPath',
        6 => 'AssociateIpWithConnectionPool',
        7 => 'DissociateIpFromConnectionPool',
        8 => 'GetConnectionPoolIpOperationResult',
        9 => 'ListConnectionPoolAllIps',
        10 => 'DeleteConnectionPool',
      ),
    ),
    5 => 
    array (
      'id' => 171124,
      'title' => '授权规则',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateAuthorizationRule',
        1 => 'CreateAuthorizationRules',
        2 => 'UpdateAuthorizationRuleAttribute',
        3 => 'ListAuthorizationRules',
        4 => 'DeleteAuthorizationRule',
      ),
    ),
    6 => 
    array (
      'id' => 172549,
      'title' => '实例组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateIoTCloudConnectorGroup',
        1 => 'AddIoTCloudConnectorToGroup',
        2 => 'UpdateIoTCloudConnectorGroupAttribute',
        3 => 'ListIoTCloudConnectorGroups',
        4 => 'RemoveIoTCloudConnectorFromGroup',
        5 => 'DeleteIoTCloudConnectorGroup',
      ),
    ),
    7 => 
    array (
      'id' => 181641,
      'title' => '实例组授权规则',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateGroupAuthorizationRule',
        1 => 'UpdateGroupAuthorizationRuleAttribute',
        2 => 'ListGroupAuthorizationRules',
        3 => 'DeleteGroupAuthorizationRule',
      ),
    ),
    8 => 
    array (
      'id' => 181682,
      'title' => '授权VBR',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GrantVirtualBorderRouter',
      ),
    ),
    9 => 
    array (
      'id' => 181683,
      'title' => 'DNS授权规则',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDNSServiceRule',
        1 => 'UpdateDNSServiceRuleAttribute',
        2 => 'ListDNSServiceRules',
        3 => 'DeleteDNSServiceRule',
        4 => 'MoveAuthorizationRuleToDNSService',
      ),
    ),
    10 => 
    array (
      'id' => 181684,
      'title' => '实例组DNS授权规则',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateGroupDNSServiceRule',
        1 => 'UpdateGroupDNSServiceRuleAttribute',
        2 => 'ListGroupDNSServiceRules',
        3 => 'MoveGroupAuthorizationRuleToDNSService',
        4 => 'DeleteGroupDNSServiceRule',
      ),
    ),
    11 => 
    array (
      'id' => 181685,
      'title' => '访问日志',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'EnableIoTCloudConnectorAccessLog',
        1 => 'DisableIoTCloudConnectorAccessLog',
        2 => 'GetIoTCloudConnectorAccessLog',
      ),
    ),
    12 => 
    array (
      'id' => 171117,
      'title' => '分应用统计服务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateService',
        1 => 'UpdateServiceAttribute',
        2 => 'ListService',
        3 => 'DeleteService',
      ),
    ),
    13 => 
    array (
      'id' => 181686,
      'title' => '应用条目',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateServiceEntry',
        1 => 'UpdateServiceEntryAttribute',
        2 => 'ListServiceEntries',
        3 => 'DeleteServiceEntry',
      ),
    ),
    14 => 
    array (
      'id' => 181642,
      'title' => '网络诊断',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SubmitDiagnoseTaskForSingleCard',
        1 => 'GetDiagnoseResultForSingleCard',
        2 => 'ListDiagnoseInfoForSingleCard',
      ),
    ),
    15 => 
    array (
      'id' => 181687,
      'title' => '回程路由',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateIoTCloudConnectorBackhaulRoute',
        1 => 'ListIoTCoudConnectorBackhaulRoute',
        2 => 'DeleteIoTCloudConnetorBackhaulRoute',
      ),
    ),
    16 => 
    array (
      'id' => 181688,
      'title' => '授权规则IP重定向',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateIpMappingRule',
        1 => 'UpdateIpMappingRule',
        2 => 'ListIpMappingRules',
        3 => 'DeleteIpMappingRule',
      ),
    ),
    17 => 
    array (
      'id' => 181689,
      'title' => '实例组授权规则IP重定向',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateGroupIpMappingRule',
        1 => 'UpdateGroupIpMappingRule',
        2 => 'ListGroupIpMappingRules',
        3 => 'DeleteGroupIpMappingRule',
      ),
    ),
    18 => 
    array (
      'id' => 181690,
      'title' => '实例过户',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ConfirmIoTCloudConnector',
        1 => 'RevertIoTCloudConnector',
      ),
    ),
    19 => 
    array (
      'id' => 171254,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeleteAuthorizationRules',
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
    'OpenIoTCloudConnectorService' => 
    array (
      'summary' => '开通云连接器服务。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.IoTCloudConnectorServiceOpened',
            'errorMessage' => 'The operation is not allowed because of iotcc service have opened.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\"\\n}","errorExample":""},{"type":"xml","example":"<OpenIoTCloudConnectorServiceResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n</OpenIoTCloudConnectorServiceResponse>","errorExample":""}]',
      'title' => '开通云连接器服务',
    ),
    'ListRegions' => 
    array (
      'summary' => '查询云连接器支持的地域列表。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '支持的语言。取值：
- **zh-CN**：中文。
- **en-US**：英文。
- **ja**：日文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh-CN',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'Regions' => 
              array (
                'description' => '地域列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '地域列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'LocalName' => 
                    array (
                      'description' => '地域名称。',
                      'type' => 'string',
                      'example' => '华东1（杭州）',
                    ),
                    'RegionEndpoint' => 
                    array (
                      'description' => '地域服务的终端节点地址。',
                      'type' => 'string',
                      'example' => 'cciot.cn-hangzhou.aliyuncs.com',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"Regions\\": [\\n    {\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"LocalName\\": \\"华东1（杭州）\\",\\n      \\"RegionEndpoint\\": \\"cciot.cn-hangzhou.aliyuncs.com\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListRegionsResponse>\\n    <RequestId>79FAFC4C-6251-5C2D-818A-FD26FFFF10A5</RequestId>\\n    <Regions>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <RegionEndpoint>cciot.cn-hangzhou.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华东1（杭州）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-shanghai</RegionId>\\n        <RegionEndpoint>cciot.cn-shanghai.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华东2（上海）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-qingdao</RegionId>\\n        <RegionEndpoint>cciot.cn-qingdao.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北1（青岛）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-beijing</RegionId>\\n        <RegionEndpoint>cciot.cn-beijing.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北2（北京）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-huhehaote</RegionId>\\n        <RegionEndpoint>cciot.cn-huhehaote.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北5（呼和浩特）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-wulanchabu</RegionId>\\n        <RegionEndpoint>cciot.cn-wulanchabu.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北6（乌兰察布）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-shenzhen</RegionId>\\n        <RegionEndpoint>cciot.cn-shenzhen.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华南1（深圳）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-guangzhou</RegionId>\\n        <RegionEndpoint>cciot.cn-guangzhou.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华南3（广州）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-chengdu</RegionId>\\n        <RegionEndpoint>cciot.cn-chengdu.aliyuncs.com</RegionEndpoint>\\n        <LocalName>西南1（成都）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>eu-central-1</RegionId>\\n        <RegionEndpoint>cciot.eu-central-1.aliyuncs.com</RegionEndpoint>\\n        <LocalName>德国（法兰克福）</LocalName>\\n    </Regions>\\n</ListRegionsResponse>","errorExample":""}]',
      'title' => '查询云连接器支持的地域列表',
    ),
    'ListAPNs' => 
    array (
      'summary' => '查询云连接器实例支持的APN列表。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否拥有下一次查询的令牌（Token）。取值：

- 第一次查询和没有下一次查询时，均无需填写。

- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。',
            'type' => 'string',
            'required' => false,
            'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值：**1**~**50**。默认值：**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'APN',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运营商APN ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'CMWAP',
          ),
        ),
        4 => 
        array (
          'name' => 'ISP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'APN对应的运营商。取值：

- **telecom**：中国电信。

- **mobile**：中国移动。

- **unicom**：中国联通。',
            'type' => 'string',
            'required' => false,
            'example' => 'mobile',
          ),
        ),
        5 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例的版本，不同版本有不同功能限制和计费策略。取值：

- **Basic**：基础版。

- **Standard**：标准版。

<props="china">云连接器实例默认创建标准版，如果需要创建基础版实例，请[提交工单](https://selfservice.console.aliyun.com/ticket/category/ga/today)申请。</props>

<props="intl">云连接器实例默认创建标准版，如果需要创建基础版实例，请[提交工单](https://workorder-intl.console.aliyun.com/?spm=5176.11182188.console-base-top.dworkorder.18ae4882n3v6ZW#/ticket/createIndex)申请</props>
',
            'type' => 'string',
            'required' => false,
            'example' => 'Standard',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'TotalCount' => 
              array (
                'description' => '总列表条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'MaxResults' => 
              array (
                'description' => '分批次查询时每次显示的条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'APNs' => 
              array (
                'description' => 'APN列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'APN列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ISP' => 
                    array (
                      'description' => 'APN对应的运营商。取值：
- **telecom**：中国电信。
- **mobile**：中国移动。
- **unicom**：中国联通。',
                      'type' => 'string',
                      'example' => 'mobile',
                    ),
                    'APN' => 
                    array (
                      'description' => '运营商APN ID。',
                      'type' => 'string',
                      'example' => 'CMWAP',
                    ),
                    'Name' => 
                    array (
                      'description' => 'APN名称。
',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Description' => 
                    array (
                      'description' => 'APN的描述信息。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'ZoneList' => 
                    array (
                      'description' => 'APN所属可用区列表。
根据可用区列表，可以过滤出可使用的交换机列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'APN所属可用区列表。
根据可用区列表，可以过滤出可使用的交换机列表。',
                        'type' => 'string',
                        'example' => '["eu-central-1a", "eu-central-1b"]',
                      ),
                    ),
                    'FeatureList' => 
                    array (
                      'description' => '当前APN属性，取值：
- **trafficMirror**：流量镜像。
- **wildcardDomain**：泛域名。
',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '当前APN属性，取值：
- **trafficMirror**：流量镜像。
- **wildcardDomain**：泛域名。
',
                        'type' => 'string',
                        'example' => 'trafficMirror',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"TotalCount\\": 1,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 10,\\n  \\"APNs\\": [\\n    {\\n      \\"ISP\\": \\"mobile\\",\\n      \\"APN\\": \\"CMWAP\\",\\n      \\"Name\\": \\"test\\",\\n      \\"Description\\": \\"test\\",\\n      \\"ZoneList\\": [\\n        \\"[\\\\\\"eu-central-1a\\\\\\", \\\\\\"eu-central-1b\\\\\\"]\\"\\n      ],\\n      \\"FeatureList\\": [\\n        \\"trafficMirror\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListAPNsResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <TotalCount>1</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>10</MaxResults>\\n    <APNs>\\n        <ISP>mobile</ISP>\\n        <APN>CMWAP</APN>\\n        <Name>test</Name>\\n        <Description>test</Description>\\n        <ZoneList>[\\"eu-central-1a\\", \\"eu-central-1b\\"]</ZoneList>\\n        <FeatureList>trafficMirror</FeatureList>\\n    </APNs>\\n</ListAPNsResponse>","errorExample":""}]',
      'title' => '查询APN',
    ),
    'CreateIoTCloudConnector' => 
    array (
      'summary' => '创建云连接器实例。',
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
          'name' => 'ISP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定云连接器实例的运营商。取值：
- **telecom**：中国电信。
- **mobile**：中国移动。
- **unicom**：中国联通。',
            'type' => 'string',
            'required' => true,
            'example' => 'mobile',
          ),
        ),
        1 => 
        array (
          'name' => 'APN',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运营商APN ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'CMWAP',
          ),
        ),
        2 => 
        array (
          'name' => 'IoTCloudConnectorName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例的名称。

名称长度为2~128个字符，以大小写字母或中文开头，可包含数字、下划线（_）或短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'IoTCloudConnectorDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例描述信息。

长度为2~256个字符，必须以字母或中文开头，但开头不能为`http://` 或`https://`。
',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        4 => 
        array (
          'name' => 'WildcardDomainEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启泛域名功能。
- **true**（默认值）：开启。
- **false**：关闭。

> 泛域名默认开启，本字段传值无效。',
            'type' => 'boolean',
            'deprecated' => true,
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        6 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会创建实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后直接创建实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        8 => 
        array (
          'name' => 'ResourceUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例使用者ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '132193271328****',
          ),
        ),
        9 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例的版本，不同版本有不同功能限制和计费策略。取值：

- **Basic**：基础版。

- **Standard**：标准版。

<props="china">云连接器实例默认创建标准版，如果需要创建基础版实例，请[提交工单](https://selfservice.console.aliyun.com/ticket/category/ga/today)申请。</props>

<props="intl">云连接器实例默认创建标准版，如果需要创建基础版实例，请[提交工单](https://workorder-intl.console.aliyun.com/?spm=5176.11182188.console-base-top.dworkorder.18ae4882n3v6ZW#/ticket/createIndex)申请</props>
',
            'type' => 'string',
            'required' => false,
            'example' => 'Standard',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'IoTCloudConnectorId' => 
              array (
                'description' => '云连接器实例ID。',
                'type' => 'string',
                'example' => 'iotcc-bp1odcab8tmno0hdq****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.ApnDisabledWildcardDomain',
            'errorMessage' => 'The operation is not allowed because of apn disabled wildcardDomain.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.NotOpenIoTCloudConnectorService',
            'errorMessage' => 'The operation is not allowed because of not open iotcc service.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalParamFormat',
            'errorMessage' => 'The param is illegal.',
          ),
          4 => 
          array (
            'errorCode' => 'QuotaExceeded.iotccInstanceLimit',
            'errorMessage' => 'The quota of IoTCCPerUser is exceeded',
          ),
          5 => 
          array (
            'errorCode' => 'ResourceNotEnough.APN',
            'errorMessage' => 'The specified resource of APN is not enough.',
          ),
          6 => 
          array (
            'errorCode' => 'IncorrectStatus.APNNotReady',
            'errorMessage' => 'The status of APN is incorrect.',
          ),
          7 => 
          array (
            'errorCode' => 'OperationDenied.ApnNotSupportBasicType',
            'errorMessage' => 'The operation is not allowed because of apn do not support basic type cciot instance.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"IoTCloudConnectorId\\": \\"iotcc-bp1odcab8tmno0hdq****\\",\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateIoTCloudConnectorResponse>\\n    <IoTCloudConnectorId>iotcc-bp1odcab8tmno0hdq****</IoTCloudConnectorId>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</CreateIoTCloudConnectorResponse>","errorExample":""}]',
      'title' => '创建云连接器实例',
    ),
    'UpdateIoTCloudConnectorAttribute' => 
    array (
      'summary' => '更新云连接器实例信息。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'IoTCloudConnectorName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例的名称。

名称长度为2~128个字符，以大小写字母或中文开头，可包含数字、半角句号（.）、下划线（_）或短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'IoTCloudConnectorDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例描述信息。

长度为2~256个字符，必须以字母或中文开头，但不能以`http://` 或`https://`开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'WildcardDomainEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启泛域名功能。取值：
- **true**（默认值）：开启。
- **false**：关闭。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        5 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会更新实例信息。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后直接更新实例信息。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。  ',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        7 => 
        array (
          'name' => 'Mode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例模式。取值：

- **PassThrough**：直通模式。
- **VpcNat**：私网NAT模式。',
            'type' => 'string',
            'required' => false,
            'example' => 'PassThrough',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'ResourceId' => 
              array (
                'description' => '云连接器实例ID。',
                'type' => 'string',
                'example' => 'iotcc-bp1odcab8tmno0hdq****',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParamFormat',
            'errorMessage' => 'The param is illegal.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceInConfiguring.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCloudConnector is configuring, please try again later.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.NotAssociateVpc',
            'errorMessage' => 'The operation is not allowed because of not associate vpc.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.BasicInstanceNotSupportPassThrough',
            'errorMessage' => 'The operation is not allowed because of basic instance not support.',
          ),
          7 => 
          array (
            'errorCode' => 'IllegalParam.Mode',
            'errorMessage' => 'The param of Mode is illegal.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"ResourceId\\": \\"iotcc-bp1odcab8tmno0hdq****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateIoTCloudConnectorAttributeResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <ResourceId>iotcc-bp1odcab8tmno0hdq****</ResourceId>\\n</UpdateIoTCloudConnectorAttributeResponse>","errorExample":""}]',
      'title' => '更新云连接器实例信息',
    ),
    'ListIoTCloudConnectors' => 
    array (
      'summary' => '查询云连接器实例信息。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IoTCloudConnectorStatus',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '云连接器实例的状态。最多支持输入20个实例状态。取值：
- **Creating**：创建中。
- **Created**：创建完成。
- **Deleting**：删除中。
- **Updating**：修改中。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '云连接器实例的状态。最多支持输入20个实例状态。取值：
- **Creating**：创建中。
- **Created**：创建完成。
- **Deleting**：删除中。
- **Updating**：修改中。',
              'type' => 'string',
              'required' => false,
              'example' => 'Created',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'IoTCloudConnectorIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '云连接器实例ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '云连接器实例ID列表。最多支持输入20个实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'iotcc-bp1odcab8tmno0hdq****',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'IoTCloudConnectorName',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '云连接器实例的名称。最多支持输入20个实例名称。

名称长度为2~128个字符，以大小写字母或中文开头，可包含数字、下划线（_）或短划线（-）。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '云连接器实例的名称。最多支持输入20个实例名称。

名称长度为2~128个字符，以大小写字母或中文开头，可包含数字、下划线（_）或短划线（-）。',
              'type' => 'string',
              'required' => false,
              'example' => 'test',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'ISP',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '云连接器实例的运营商。最多支持输入20个实例的运营商。取值：
- **telecom**：中国电信。
- **mobile**：中国移动。
- **unicom**：中国联通。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '云连接器实例的运营商。最多支持输入20个实例的运营商。取值：
- **telecom**：中国电信。
- **mobile**：中国移动。
- **unicom**：中国联通。',
              'type' => 'string',
              'required' => false,
              'example' => 'mobile',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        4 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '云连接器实例连接的VPC的ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '云连接器实例连接的VPC的ID。最多支持输入20个VPC的ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'vpc-bp1aevy8sofi8mh1q****',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        5 => 
        array (
          'name' => 'APN',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '运营商APN的ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '运营商APN的ID。最多支持输入20个APN的ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'CMWAP',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        6 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
        7 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**50**，默认值：**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        8 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        9 => 
        array (
          'name' => 'IsInGroup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否查询实例组中的实例。取值：

- **true**：查询实例组中的实例。

- **false**（默认值）：不查询实例组中的实例。

- **null**：全量查询实例，不区分实例是否在实例组中。
',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        10 => 
        array (
          'name' => 'IoTCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'iotccg-g00epppbi9di9y****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '总列表条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'MaxResults' => 
              array (
                'description' => '分批次查询时每次显示的条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
              ),
              'IoTCloudConnectors' => 
              array (
                'description' => '云连接器实例列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '云连接器实例列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'IoTCloudConnectorId' => 
                    array (
                      'description' => '云连接器实例ID。',
                      'type' => 'string',
                      'example' => 'iotcc-bp1odcab8tmno0hdq****',
                    ),
                    'IoTCloudConnectorStatus' => 
                    array (
                      'description' => '云连接器实例的状态。取值：
- **Creating**：创建中。
- **Created**：创建完成。
- **Deleting**：删除中。
- **Updating**：修改中。',
                      'type' => 'string',
                      'example' => 'Created',
                    ),
                    'ISP' => 
                    array (
                      'description' => '云连接器实例的运营商。取值：
- **telecom**：中国电信。
- **mobile**：中国移动。
- **unicom**：中国联通。',
                      'type' => 'string',
                      'example' => 'mobile',
                    ),
                    'IoTCloudConnectorBusinessStatus' => 
                    array (
                      'description' => '云连接器实例的运行状态。取值：
- **Normal**：正常。
- **Abnormal**：不正常。
',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'APN' => 
                    array (
                      'description' => '运营商APN的ID。',
                      'type' => 'string',
                      'example' => 'CMWAP',
                    ),
                    'RateLimit' => 
                    array (
                      'description' => '云连接器实例的带宽峰值。单位：**Gbps**，取值范围：**1**~**10**。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'VpcId' => 
                    array (
                      'description' => '云连接器实例连接的VPC的ID。',
                      'type' => 'string',
                      'example' => 'vpc-bp1aevy8sofi8mh1q****',
                    ),
                    'VSwitchList' => 
                    array (
                      'description' => '交换机ID。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '交换机ID。',
                        'type' => 'string',
                        'example' => 'vsw-m5e3r57pxkgijcdvfcdvf****',
                      ),
                    ),
                    'IoTCloudConnectorName' => 
                    array (
                      'description' => '云连接器实例的名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'IoTCloudConnectorDescription' => 
                    array (
                      'description' => '云连接器实例描述信息。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'WildcardDomainEnabled' => 
                    array (
                      'description' => '是否开启泛域名功能。取值：
- **true**：开启。
- **false**：关闭。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '云连接器实例创建时间。

按照ISO8601标准表示，并需要使用UTC时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2021-10-01T00:00:00Z',
                    ),
                    'ModifyTime' => 
                    array (
                      'description' => '云连接器实例信息修改时间。

按照ISO8601标准表示，并需要使用UTC时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2021-10-01T10:00:00Z',
                    ),
                    'IoTCloudConnectorGroupId' => 
                    array (
                      'description' => '云连接器实例组ID。',
                      'type' => 'string',
                      'example' => 'iotccg-g00epppbi9di9y****',
                    ),
                    'Mode' => 
                    array (
                      'description' => '云连接器的属性值。表示当前属于**passTrough**模式时显示回程路由。',
                      'type' => 'string',
                      'example' => 'PassThrough',
                    ),
                    'IpFeature' => 
                    array (
                      'description' => '动态或静态IP。',
                      'type' => 'string',
                      'example' => '192.168.0.1',
                    ),
                    'Type' => 
                    array (
                      'description' => '云连接器实例的版本，不同版本有不同功能限制和计费策略。取值：

- **Basic**：基础版。

- **Standard**：标准版。

<props="china">云连接器实例默认创建标准版，如果需要创建基础版实例，请[提交工单](https://selfservice.console.aliyun.com/ticket/category/ga/today)申请。</props>

<props="intl">云连接器实例默认创建标准版，如果需要创建基础版实例，请[提交工单](https://workorder-intl.console.aliyun.com/?spm=5176.11182188.console-base-top.dworkorder.18ae4882n3v6ZW#/ticket/createIndex)申请</props>
',
                      'type' => 'string',
                      'example' => 'Standard',
                    ),
                    'ServiceType' => 
                    array (
                      'description' => '服务类型。取值：

- **Normal**：普通型。
- **CC5G**：云连接器5G实例托管类型。
- **CC5GCCIoT**：云连接器5G过户类型。',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'GrantAliUid' => 
                    array (
                      'description' => '阿里云授权者UID。',
                      'type' => 'string',
                      'example' => '253460731706911258',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'System is busy, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 20,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 10,\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n  \\"IoTCloudConnectors\\": [\\n    {\\n      \\"IoTCloudConnectorId\\": \\"iotcc-bp1odcab8tmno0hdq****\\",\\n      \\"IoTCloudConnectorStatus\\": \\"Created\\",\\n      \\"ISP\\": \\"mobile\\",\\n      \\"IoTCloudConnectorBusinessStatus\\": \\"Normal\\",\\n      \\"APN\\": \\"CMWAP\\",\\n      \\"RateLimit\\": 2,\\n      \\"VpcId\\": \\"vpc-bp1aevy8sofi8mh1q****\\",\\n      \\"VSwitchList\\": [\\n        \\"vsw-m5e3r57pxkgijcdvfcdvf****\\"\\n      ],\\n      \\"IoTCloudConnectorName\\": \\"test\\",\\n      \\"IoTCloudConnectorDescription\\": \\"test\\",\\n      \\"WildcardDomainEnabled\\": false,\\n      \\"CreateTime\\": 0,\\n      \\"ModifyTime\\": 0,\\n      \\"IoTCloudConnectorGroupId\\": \\"iotccg-g00epppbi9di9y****\\",\\n      \\"Mode\\": \\"PassThrough\\",\\n      \\"IpFeature\\": \\"192.168.0.1\\",\\n      \\"Type\\": \\"Standard\\",\\n      \\"ServiceType\\": \\"Normal\\",\\n      \\"GrantAliUid\\": \\"253460731706911258\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListIoTCloudConnectorsResponse>\\n    <TotalCount>20</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>10</MaxResults>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n    <IoTCloudConnectors>\\n        <IoTCloudConnectorId>iotcc-bp1odcab8tmno0hdq****</IoTCloudConnectorId>\\n        <IoTCloudConnectorStatus>Created</IoTCloudConnectorStatus>\\n        <ISP>mobile</ISP>\\n        <IoTCloudConnectorBusinessStatus>Normal</IoTCloudConnectorBusinessStatus>\\n        <APN>CMWAP</APN>\\n        <RateLimit>2</RateLimit>\\n        <VpcId>vpc-bp1aevy8sofi8mh1q****</VpcId>\\n        <VSwitchList>vsw-m5e3r57pxkgijcdvfcdvf****</VSwitchList>\\n        <IoTCloudConnectorName>test</IoTCloudConnectorName>\\n        <IoTCloudConnectorDescription>test</IoTCloudConnectorDescription>\\n        <WildcardDomainEnabled>false</WildcardDomainEnabled>\\n        <IoTCloudConnectorGroupId>iotccg-g00epppbi9di9y****</IoTCloudConnectorGroupId>\\n        <Mode>PassThrough</Mode>\\n        <IpFeature>192.168.0.1</IpFeature>\\n        <Type>Standard</Type>\\n        <ServiceType>Normal</ServiceType>\\n        <GrantAliUid>253460731706911258</GrantAliUid>\\n    </IoTCloudConnectors>\\n</ListIoTCloudConnectorsResponse>","errorExample":""}]',
      'title' => '查询云连接器实例信息',
    ),
    'ListIoTCloudConnectorAvailableZones' => 
    array (
      'summary' => '查询支持云连接器实例绑定交换机的可用区。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID，仅取值：**cn-hangzhou**。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
              ),
              'IoTCloudConnectorId' => 
              array (
                'description' => '云连接器实例ID。',
                'type' => 'string',
                'example' => 'iotcc-bp1odcab8tmno0hdq****',
              ),
              'AvailableZoneList' => 
              array (
                'description' => '支持的可用区列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '支持的可用区列表。',
                  'type' => 'string',
                  'example' => 'cn-hangzhou-h',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n  \\"IoTCloudConnectorId\\": \\"iotcc-bp1odcab8tmno0hdq****\\",\\n  \\"AvailableZoneList\\": [\\n    \\"cn-hangzhou-h\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListIoTCloudConnectorAvailableZonesResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n    <IoTCloudConnectorId>iotcc-bp1odcab8tmno0hdq****</IoTCloudConnectorId>\\n    <AvailableZoneList>cn-hangzhou-h</AvailableZoneList>\\n</ListIoTCloudConnectorAvailableZonesResponse>","errorExample":""}]',
      'title' => 'IoTCC实例绑定交换机可用区',
    ),
    'AssociateVSwitchWithIoTCloudConnector' => 
    array (
      'summary' => '将交换机与云连接器实例进行关联。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例需关联的VPC的ID。

如果填写此参数则必须填**VSwitchList**；如果不填，则**VSwitchList**也不填。',
            'type' => 'string',
            'required' => true,
            'example' => 'vpc-bp1aevy8sofi8mh1q****',
          ),
        ),
        2 => 
        array (
          'name' => 'VSwitchList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '客户端VPC下的交换机列表，并且交换机的可用区必须和云连接器实例的可用区一致。

**N**取值为**2**，表示必须为2个交换机。
',
            'type' => 'array',
            'items' => 
            array (
              'description' => '客户端VPC下的交换机列表，并且交换机的可用区必须和云连接器实例的可用区一致。
**N**取值为**2**，表示必须为2个交换机。',
              'type' => 'string',
              'required' => false,
              'example' => 'vsw-m5e3r57pxkgijcdvfcdvf****',
            ),
            'required' => true,
            'maxItems' => 20,
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        4 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会将交换机与云连接器实例进行关联。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后直接将交换机与云连接器实例进行关联。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。  ',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
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
            'errorCode' => 'ResourceNotEnough.CIDRNotHaveEnoughIp',
            'errorMessage' => 'The specified resource of IP in CIDR is not enough.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalParam.VSwitchZone',
            'errorMessage' => 'The param of VSwitch zone is illegal.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalParamSize.VSwitchList',
            'errorMessage' => 'The param size of VSwitch is illegal',
          ),
          4 => 
          array (
            'errorCode' => 'ResourceInConfiguring.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCloudConnector is configuring, please try again later.',
          ),
          5 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
          6 => 
          array (
            'errorCode' => 'ResourceAlreadyAssociated.VpcId',
            'errorMessage' => 'The specified resource of VpcId already associated',
          ),
          7 => 
          array (
            'errorCode' => 'IllegalParam.VSwitch',
            'errorMessage' => 'The param of VSwitch is illegal.',
          ),
          8 => 
          array (
            'errorCode' => 'IllegalParam.VpcId',
            'errorMessage' => 'The param of Vpc is illegal.',
          ),
          9 => 
          array (
            'errorCode' => 'OperationDenied.VpcStatusNotSupport',
            'errorMessage' => 'The operation is not allowed because of vpc status not support.',
          ),
          10 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
          11 => 
          array (
            'errorCode' => 'IllegalParam.VSwitchSize',
            'errorMessage' => 'The param of VSwitch size is illegal.',
          ),
          12 => 
          array (
            'errorCode' => 'OperationDenied.OneVpcOnlySupportOneSpecIoTCC',
            'errorMessage' => 'The operation is not allowed because of one vpc create different spec IoTCC not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<AssociateVSwitchWithIoTCloudConnectorResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</AssociateVSwitchWithIoTCloudConnectorResponse>","errorExample":""}]',
      'title' => '交换机与云连接器实例进行关联',
    ),
    'DissociateVSwitchFromIoTCloudConnector' => 
    array (
      'summary' => '将交换机与云连接器实例解关联。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会将交换机与云连接器实例解关联。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后直接将交换机与云连接器实例解关联。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。
',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotAssociated.VpcId',
            'errorMessage' => 'The specified resource of VpcId  is not associated.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceInConfiguring.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCloudConnector is configuring, please try again later.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<DissociateVSwitchFromIoTCloudConnectorResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</DissociateVSwitchFromIoTCloudConnectorResponse>","errorExample":""}]',
      'title' => '解绑vsw/vpc',
    ),
    'ListIoTCloudConnectorEIPs' => 
    array (
      'summary' => '调用ListIoTCloudConnectorEIPs接口查询云连接器实例关联的弹性公网IP列表。',
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
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。',
            'type' => 'string',
            'required' => false,
            'example' => 'NextToken',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '20',
            'default' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'TotalCount' => 
              array (
                'description' => '列表条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'MaxResults' => 
              array (
                'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'EIPs' => 
              array (
                'description' => '关联的弹性公网IP。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '关联的弹性公网IP列表。

取值可以由多个IP组成一个JSON数组，IP之间用半角逗号（,）隔开。

> 只有基础版的云连接器实例支持返回关联的弹性公网IP列表。',
                  'type' => 'string',
                  'example' => '["42.1.XX.XX", "42.2.XX.XX", … "42.3.XX.XX"]',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"TotalCount\\": 10,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 20,\\n  \\"EIPs\\": [\\n    \\"[\\\\\\"42.1.XX.XX\\\\\\", \\\\\\"42.2.XX.XX\\\\\\", … \\\\\\"42.3.XX.XX\\\\\\"]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListIoTCloudConnectorEIPsResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <TotalCount>10</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>20</MaxResults>\\n    <EIPs>[\\"42.1.XX.XX\\", \\"42.2.XX.XX\\", … \\"42.3.XX.XX\\"]</EIPs>\\n</ListIoTCloudConnectorEIPsResponse>","errorExample":""}]',
      'title' => '查询云连接器实例关联的弹性公网IP列表',
    ),
    'DeleteIoTCloudConnector' => 
    array (
      'summary' => '删除云连接器实例。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会删除实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后直接删除实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID，仅取值：**cn-hangzhou**。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
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
            'errorCode' => 'OperationDenied.IotCloudConnectorInGroup',
            'errorMessage' => 'The operation is not allowed because of IotCloudConnector In Group.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceInUse.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCC is in use.',
          ),
          3 => 
          array (
            'errorCode' => 'IncorrectStatus.CloudConnector',
            'errorMessage' => 'The status of CloudConnector is incorrect.',
          ),
          4 => 
          array (
            'errorCode' => 'ResourceInCreating.IoTCloudConnector',
            'errorMessage' => 'ResourceInCreating.IoTCloudConnector',
          ),
          5 => 
          array (
            'errorCode' => 'ResourceInConfiguring.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCloudConnector is configuring, please try again later.',
          ),
          6 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
          7 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteIoTCloudConnectorResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</DeleteIoTCloudConnectorResponse>","errorExample":""}]',
      'title' => '删除云连接器实例',
    ),
    'CreateConnectionPool' => 
    array (
      'summary' => '创建连接地址池。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'Count',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接地址池的IP数量。取值范围：**1**~**500**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
          ),
        ),
        2 => 
        array (
          'name' => 'ConnectionPoolName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接地址池的名称。

长度为2~128个字符，必须以字母或中文开头，可包含数字、下划线（_）和短划线（-）。但不能以`http:// `或`https://`开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'pool01',
          ),
        ),
        3 => 
        array (
          'name' => 'ConnectionPoolDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接地址池的描述信息。

长度为2~256个字符，必须以字母或中文开头，但不能以`http:// `或`https://`开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'pool01',
          ),
        ),
        4 => 
        array (
          'name' => 'Cidrs',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '连接地址池所属的CIDR地址块。**N**的取值范围：**1**~**20**。

多个CIDR地址块使用and（&）分隔，格式为`Cidrs.1=CIDR地址块1&Cidrs.2=CIDR地址块2`。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '连接地址池所属的CIDR地址块。**N**的取值范围：**1**~**20**。

多个CIDR地址块使用and（&）分隔，格式为`Cidrs.1=CIDR地址块1&Cidrs.2=CIDR地址块2`。',
              'type' => 'string',
              'required' => false,
              'example' => 'Cidrs.1=192.168.XX.XX/24&amp;Cidrs.2=10.0.XX.XX/24',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        6 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会创建连接地址池。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后直接创建连接地址池。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。  ',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'ConnectionPoolId' => 
              array (
                'description' => '连接地址池的ID。',
                'type' => 'string',
                'example' => 'cp-bp11234abctmno0hdq****',
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
            'errorCode' => 'QuotaExceeded.CIDRLimit',
            'errorMessage' => 'The quota of cidr_limit is exceeded.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.IPUsedInCIDR',
            'errorMessage' => 'IP has been used in CIDR.',
          ),
          2 => 
          array (
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceInUse.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCC is in use.',
          ),
          4 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
          5 => 
          array (
            'errorCode' => 'ResourceInCreating.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCloudConnector is creating, please try again later.',
          ),
          6 => 
          array (
            'errorCode' => 'ResourceInConfiguring.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCloudConnector is configuring, please try again later.',
          ),
          7 => 
          array (
            'errorCode' => 'QuotaExceeded.ConnectionPoolPerIoTCC',
            'errorMessage' => 'The quota of ConnectionPoolPerIoTCC is exceeded',
          ),
          8 => 
          array (
            'errorCode' => 'IllegalParamFormat',
            'errorMessage' => 'The param is illegal.',
          ),
          9 => 
          array (
            'errorCode' => 'IllegalParam.Cidrs',
            'errorMessage' => 'The param of Cidrs is illegal.',
          ),
          10 => 
          array (
            'errorCode' => 'IllegalParamSize.Cidr',
            'errorMessage' => 'The param size of Cidr is illegal, only support one.',
          ),
          11 => 
          array (
            'errorCode' => 'OperationDenied.GrantedInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of granted instance not support.',
          ),
          12 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"ConnectionPoolId\\": \\"cp-bp11234abctmno0hdq****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateConnectionPoolResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <ConnectionPoolId>cp-bp11234abctmno0hdq****</ConnectionPoolId>\\n</CreateConnectionPoolResponse>","errorExample":""}]',
      'title' => '创建连接地址池',
    ),
    'AddCidrToConnectionPool' => 
    array (
      'summary' => '连接池增加连接IP段，主要用于动态IP增加IP方式，区别于单个卡IP添加方式。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'ConnectionPoolId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接地址池的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cp-bp11234abctmno0hdq****',
          ),
        ),
        2 => 
        array (
          'name' => 'Cidrs',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '连接地址池所属的CIDR地址块。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要添加到连接地址池所属的CIDR地址块。最多支持20个CIDR地址块。

多个CIDR地址块使用and（&）分隔，格式为`Cidrs.1=CIDR地址块1&Cidrs.2=CIDR地址块2`。',
              'type' => 'string',
              'required' => false,
              'example' => 'Cidrs.1=192.168.1.32/24&amp;Cidrs.2=10.0.10.3/24',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        4 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会添加CIDR地址块。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后直接添加CIDR地址块。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。 

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
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
            'errorCode' => 'IllegalParam.Cidrs',
            'errorMessage' => 'The param of Cidrs is too many, only most 2 can be supported at a time.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.ConnectionPool',
            'errorMessage' => 'The param of ConnectionPoolId is illegal.',
          ),
          4 => 
          array (
            'errorCode' => 'ResourceInConfiguring.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCloudConnector is configuring, please try again later.',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalParamFormat',
            'errorMessage' => 'The param is illegal.',
          ),
          6 => 
          array (
            'errorCode' => 'IllegalParam.ConnectionPoolId',
            'errorMessage' => 'The param of ConnectionPoolId is illegal.',
          ),
          7 => 
          array (
            'errorCode' => 'IllegalParamSize.Cidr',
            'errorMessage' => 'The param size of Cidr is illegal, only support one.',
          ),
          8 => 
          array (
            'errorCode' => 'IncorrectStatus.IP',
            'errorMessage' => 'The status of IP is incorrect.',
          ),
          9 => 
          array (
            'errorCode' => 'OperationDenied.GrantedInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of granted instance not support.',
          ),
          10 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<AddCidrToConnectionPoolResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</AddCidrToConnectionPoolResponse>","errorExample":""}]',
      'title' => '连接池增加连接IP段',
    ),
    'UpdateConnectionPoolAttribute' => 
    array (
      'summary' => '更新连接地址池。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'ConnectionPoolId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接地址池的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cp-bp11234abctmno0hdq****',
          ),
        ),
        2 => 
        array (
          'name' => 'Count',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的数量。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'ConnectionPoolName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接地址池的名称。

长度为2~128个字符，必须以字母或中文开头，可包含数字、下划线（_）和短划线（-）。但不能以`http:// `或`https://`开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'pool01',
          ),
        ),
        4 => 
        array (
          'name' => 'ConnectionPoolDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接地址池的描述信息。

长度为2~256个字符，必须以字母或中文开头，但不能以`http:// `或`https://`开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'pool01',
          ),
        ),
        5 => 
        array (
          'name' => 'Cidrs',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '连接地址池所属的CIDR地址块。**N**的取值范围：**1**~**20**。

多个CIDR地址块使用and（&）分隔，格式为`Cidrs.1=CIDR地址块1&Cidrs.2=CIDR地址块2`。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '连接地址池所属的CIDR地址块。**N**的取值范围：**1**~**20**。

多个CIDR地址块使用and（&）分隔，格式为`Cidrs.1=CIDR地址块1&Cidrs.2=CIDR地址块2`。',
              'type' => 'string',
              'required' => false,
              'example' => 'Cidrs.1=192.168.XX.XX/24&amp;Cidrs.2=10.0.XX.XX/24',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        7 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会更新连接地址池。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后直接更新连接地址池。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。  ',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotFound.ConnectionPool',
            'errorMessage' => 'The param of ConnectionPoolId is illegal.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceInConfiguring.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCloudConnector is configuring, please try again later.',
          ),
          4 => 
          array (
            'errorCode' => 'IllegalParamFormat',
            'errorMessage' => 'The param is illegal.',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalParam.Cidrs',
            'errorMessage' => 'The param of Cidrs is illegal.',
          ),
          6 => 
          array (
            'errorCode' => 'IllegalParam.ConnectionPoolId',
            'errorMessage' => 'The param of ConnectionPoolId is illegal.',
          ),
          7 => 
          array (
            'errorCode' => 'OperationDenied.GrantedInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of granted instance not support.',
          ),
          8 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateConnectionPoolAttributeResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</UpdateConnectionPoolAttributeResponse>","errorExample":""}]',
      'title' => '更新连接地址池',
    ),
    'ListConnectionPools' => 
    array (
      'summary' => '查询云连接地址池。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'ConnectionPoolIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '连接地址池的ID列表。最多支持传入20个连接地址池ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '连接地址池的ID列表。最多支持传入20个连接地址池ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'cp-bp11234abctmno0hdq****',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'ConnectionPoolName',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '连接地址池的名称。最多支持传入20个连接地址池名称。

名称长度为2~128个字符，以大小写字母或中文开头，可包含数字、下划线（_）或短划线（-）。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '连接地址池的名称。最多支持传入20个连接地址池名称。

名称长度为2~128个字符，以大小写字母或中文开头，可包含数字、下划线（_）或短划线（-）。',
              'type' => 'string',
              'required' => false,
              'example' => 'pool01',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'ConnectionPoolStatus',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '连接地址池的状态。最多支持传入20个连接地址池状态。
- **Creating**：创建中。
- **Running**：运行中。
- **Deleting**：删除中。
- **Deleted**：已删除。
- **Associating**：IP绑定中。
- **Dissociating**：IP解绑中。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '连接地址池的状态。最多支持传入20个连接地址池状态。取值：
- **Creating**：创建中。
- **Running**：运行中。
- **Deleting**：删除中。
- **Deleted**：已删除。
- **Associating**：IP绑定中。
- **Dissociating**：IP解绑中。',
              'type' => 'string',
              'required' => false,
              'example' => 'Running',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用来标记当前开始读取的位置，置空表示从头开始。

> 第一次调用不用填写，会在返回结果中包含第二次调用时用的NextToken，之后每次调用返回结果中都有下一次调用时的NextToken。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
        5 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本次读取的最大数据记录数量，取值：**1**~**50**。传入为空时，默认值为**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID，仅取值：**cn-hangzhou**。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'TotalCount' => 
              array (
                'description' => '连接地址池总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'NextToken' => 
              array (
                'description' => '下一个查询开始的Token，为空表示没有下一个。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
              ),
              'MaxResults' => 
              array (
                'description' => '本次请求所返回的最大记录条数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'ConnectionPools' => 
              array (
                'description' => '连接地址池信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '连接地址池信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ConnectionPoolId' => 
                    array (
                      'description' => '连接地址池ID。',
                      'type' => 'string',
                      'example' => 'cp-bp11234abctmno0hdq****',
                    ),
                    'ConnectionPoolStatus' => 
                    array (
                      'description' => '连接地址池的状态。取值：
- **Creating**：创建中。
- **Running**：运行中。
- **Deleting**：删除中。
- **Deleted**：已删除。
- **Associating**：IP绑定中。
- **Dissociating**：IP解绑中。',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'ConnectionPoolName' => 
                    array (
                      'description' => '连接地址池的名称。',
                      'type' => 'string',
                      'example' => 'pool01',
                    ),
                    'ConnectionPoolDescription' => 
                    array (
                      'description' => '连接地址池的描述信息。',
                      'type' => 'string',
                      'example' => 'pool01',
                    ),
                    'Cidrs' => 
                    array (
                      'description' => '连接地址池所属的CIDR地址块。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '连接地址池所属的CIDR地址块。',
                        'type' => 'string',
                        'example' => '192.168.XX.XX/32',
                      ),
                    ),
                    'OperateResultRequestID' => 
                    array (
                      'description' => '上一次绑定解绑调用返回的**RequestId**。可以根据此ID调用**GetConnectionPoolIpOperationResult**返回绑定解绑的失败原因。',
                      'type' => 'string',
                      'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA651',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"TotalCount\\": 2,\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"MaxResults\\": 10,\\n  \\"ConnectionPools\\": [\\n    {\\n      \\"ConnectionPoolId\\": \\"cp-bp11234abctmno0hdq****\\",\\n      \\"ConnectionPoolStatus\\": \\"Running\\",\\n      \\"ConnectionPoolName\\": \\"pool01\\",\\n      \\"ConnectionPoolDescription\\": \\"pool01\\",\\n      \\"Cidrs\\": [\\n        \\"192.168.XX.XX/32\\"\\n      ],\\n      \\"OperateResultRequestID\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA651\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListConnectionPoolsResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <TotalCount>2</TotalCount>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0a****</NextToken>\\n    <MaxResults>50</MaxResults>\\n    <ConnectionPools>\\n        <ConnectionPoolId>cp-bp11234abctmno0hdq****</ConnectionPoolId>\\n        <ConnectionPoolStatus>Running</ConnectionPoolStatus>\\n        <ConnectionPoolName>pool01</ConnectionPoolName>\\n        <ConnectionPoolDescription>pool01</ConnectionPoolDescription>\\n        <Cidrs>192.168.XX.XX/32</Cidrs>\\n        <OperateResultRequestID>CEF72CEB-54B6-4AE8-B225-F876FF7BA651</OperateResultRequestID>\\n    </ConnectionPools>\\n</ListConnectionPoolsResponse>","errorExample":""}]',
      'title' => '查询云连接地址池',
    ),
    'ListConnectionPoolIps' => 
    array (
      'summary' => '查询连接地址池中的IP地址状态信息。',
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
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用来标记当前开始读取的位置，置空表示从头开始。

> 第一次调用不用填写，会在返回结果中包含第二次调用时用的NextToken，之后每次调用返回结果中都有下一次调用时的NextToken。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小，取值：**1**~**2000**。传入为空时，默认值为**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2000',
            'minimum' => '1',
            'example' => '10',
            'default' => '50',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID，仅取值：**cn-hangzhou**。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        4 => 
        array (
          'name' => 'ConnectionPoolId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接地址池的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cp-bp11234abctmno0hdq****',
          ),
        ),
        5 => 
        array (
          'name' => 'Ip',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接地址池中的IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.XX.XX',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回请求列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'TotalCount' => 
              array (
                'description' => '连接地址池IP总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'NextToken' => 
              array (
                'description' => '下一个查询开始的Token，为空表示没有下一个。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
              ),
              'MaxResults' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'ConnectionPoolIps' => 
              array (
                'description' => '连接地址池IP列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '连接地址池IP列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ConnectionPoolId' => 
                    array (
                      'description' => '连接地址池ID。',
                      'type' => 'string',
                      'example' => 'cp-bp11234abctmno0hdq****',
                    ),
                    'Ip' => 
                    array (
                      'description' => '连接地址池中的IP地址。',
                      'type' => 'string',
                      'example' => '192.168.XX.XX',
                    ),
                    'Status' => 
                    array (
                      'description' => 'IP地址状态，仅取值**activated**，表示已激活，IP地址和云连接器绑定完成。',
                      'type' => 'string',
                      'example' => 'activated',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"TotalCount\\": 2,\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"MaxResults\\": 10,\\n  \\"ConnectionPoolIps\\": [\\n    {\\n      \\"ConnectionPoolId\\": \\"cp-bp11234abctmno0hdq****\\",\\n      \\"Ip\\": \\"192.168.XX.XX\\",\\n      \\"Status\\": \\"activated\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListConnectionPoolIpsResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <TotalCount>2</TotalCount>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0a****</NextToken>\\n    <MaxResults>10</MaxResults>\\n    <ConnectionPoolIps>\\n        <ConnectionPoolId>cp-bp11234abctmno0hdq****</ConnectionPoolId>\\n        <Ip>192.168.XX.XX</Ip>\\n        <Status>activated</Status>\\n    </ConnectionPoolIps>\\n</ListConnectionPoolIpsResponse>","errorExample":""}]',
      'title' => '查询连接地址池中的IP地址状态',
    ),
    'GetStsInfoAndOssPath' => 
    array (
      'summary' => '获取服务账号STS信息和模板文件临时提交地址。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会获取信息。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后直接获取信息。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID，仅取值：**cn-hangzhou**。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        4 => 
        array (
          'name' => 'ConnectionPoolId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接地址池的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cp-bp11234abctmno0hdq****',
          ),
        ),
        5 => 
        array (
          'name' => 'FileName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板文件名称。

模板文件仅支持CSV格式。',
            'type' => 'string',
            'required' => false,
            'example' => 'test.csv',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回列表信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'Expiration' => 
              array (
                'title' => 'Sts info expiration time',
                'description' => 'STS超期时间的时间戳。',
                'type' => 'string',
                'example' => '1633060876',
              ),
              'AccessKeyId' => 
              array (
                'title' => 'Sts info of accessKeyId',
                'description' => 'STS临时AccessKey ID。',
                'type' => 'string',
                'example' => '<yourAccessKeyId>',
              ),
              'AccessKeySecret' => 
              array (
                'title' => 'Sts info of accessKeySecret',
                'description' => 'STS临时AccessKey Secret。',
                'type' => 'string',
                'example' => '<yourAccessKeySecret>',
              ),
              'SecurityToken' => 
              array (
                'title' => 'Sts info of securityToken',
                'description' => 'STS安全令牌。',
                'type' => 'string',
                'example' => '<yourSecurityToken>',
              ),
              'OssPath' => 
              array (
                'title' => 'OssPath',
                'description' => '模板文件提交临时地址。

格式为`<BucketName>/<uid>/<FileName>`。

根据上传的文件名及用户信息，系统会返回临时STS信息和IP绑定关系CSV文件提交地址，该地址需要调用[PutObject](~~31978~~)接口上传文件。',
                'type' => 'string',
                'example' => 'cciot-cn-hangzhou/127859184306****/test.csv',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParamFormat',
            'errorMessage' => 'The param is illegal.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"Expiration\\": \\"1633060876\\",\\n  \\"AccessKeyId\\": \\"<yourAccessKeyId>\\",\\n  \\"AccessKeySecret\\": \\"<yourAccessKeySecret>\\",\\n  \\"SecurityToken\\": \\"<yourSecurityToken>\\",\\n  \\"OssPath\\": \\"cciot-cn-hangzhou/127859184306****/test.csv\\"\\n}","errorExample":""},{"type":"xml","example":"<GetStsInfoAndOssPathResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <Expiration>1633060876</Expiration>\\n    <AccessKeyId>&lt;yourAccessKeyId&gt;</AccessKeyId>\\n    <AccessKeySecret>&lt;yourAccessKeySecret&gt;</AccessKeySecret>\\n    <SecurityToken>&lt;yourSecurityToken&gt;</SecurityToken>\\n    <OssPath>cciot-cn-hangzhou/127859184306****/test.csv</OssPath>\\n</GetStsInfoAndOssPathResponse>","errorExample":""}]',
      'title' => '获取服务账号信息和提交地址',
    ),
    'AssociateIpWithConnectionPool' => 
    array (
      'summary' => '绑定某个已存在的IP访问控制。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。
从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会将IP地址与云连接器关联的连接地址池绑定。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后直接将IP地址与云连接器关联的连接地址池绑定。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。




',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        4 => 
        array (
          'name' => 'ConnectionPoolId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接地址池ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cp-bp11234abctmno0hdq****',
          ),
        ),
        5 => 
        array (
          'name' => 'Ips',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '要绑定的IP地址列表。
最多支持传入500个IP地址。多个IP地址使用半角逗号（,）分隔。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '要绑定的IP地址列表。
最多支持传入500个IP地址。多个IP地址使用半角逗号（,）分隔。

**Ips**和**IpsFilePath**不能同时填写，如果IP数量较少，可直接选择**Ips**方式，如果IP数量较多，建议选择**IpsFilePath**方式，将需要绑定的IP地址记录在模板文件中，整体绑定。',
              'type' => 'string',
              'required' => false,
              'example' => '192.168.1.10,10.0.10.0,172.16.8.190',
            ),
            'required' => false,
            'maxItems' => 1000,
          ),
        ),
        6 => 
        array (
          'name' => 'IpsFilePath',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板文件OSS地址，即[GetStsInfoAndOssPath](~~313331~~)接口的返回参数**OssPath**。

格式为`<BucketName>/<uid>/<FileName>`。

**Ips**和**IpsFilePath**不能同时填写，如果IP数量较少，可直接选择**Ips**方式，如果IP数量较多，建议选择**IpsFilePath**方式，将需要绑定的IP地址记录在模板文件中，整体绑定。',
            'type' => 'string',
            'required' => false,
            'example' => 'cciot-cn-hangzhou/127859184306****/test.csv',
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
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.UploadFile',
            'errorMessage' => 'The specified resource of uploaded ip file is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingParam.IpParam',
            'errorMessage' => 'The param of ip or ip path is missing.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalParamFormat',
            'errorMessage' => 'The param is illegal.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.GrantedInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of granted instance not support.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
          6 => 
          array (
            'errorCode' => 'ResourceInConfiguring.APN',
            'errorMessage' => 'The specified resource of apn is being configured, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<AssociateIpWithConnectionPoolResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</AssociateIpWithConnectionPoolResponse>","errorExample":""}]',
      'title' => '绑定IP地址与云连接器关联的连接地址池',
    ),
    'DissociateIpFromConnectionPool' => 
    array (
      'summary' => '解除IP地址与云连接器关联的连接地址池的绑定关系。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。
从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会解除IP地址与云连接器关联的连接地址池的绑定关系。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后直接解除IP地址与云连接器关联的连接地址池的绑定关系。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID，仅取值：**cn-hangzhou**。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        4 => 
        array (
          'name' => 'ConnectionPoolId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接地址池ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cp-bp11234abctmno0hdq****',
          ),
        ),
        5 => 
        array (
          'name' => 'Ips',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '要解除绑定的IP地址列表。
最多支持传入500个IP地址。多个IP地址使用半角逗号（,）分隔。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '要解除绑定的IP地址列表。
最多支持传入500个IP地址。多个IP地址使用半角逗号（,）分隔。

**Ips**和**IpsFilePath**不能同时填写，如果IP数量较少，可直接选择**Ips**方式，如果IP数量较多，建议选择**IpsFilePath**方式，将需要解绑的IP地址记录在模板文件中，整体解绑。',
              'type' => 'string',
              'required' => false,
              'example' => '192.168.XX.XX,10.0.XX.XX,172.16.XX.XX',
            ),
            'required' => false,
            'maxItems' => 1000,
          ),
        ),
        6 => 
        array (
          'name' => 'IpsFilePath',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板文件OSS地址，即[GetStsInfoAndOssPath](~~313331~~)接口的返回参数**OssPath**。

格式为`<BucketName>/<uid>/<FileName>`。

**Ips**和**IpsFilePath**不能同时填写，如果IP数量较少，可直接选择**Ips**方式，如果IP数量较多，建议选择**IpsFilePath**方式，将需要解绑的IP地址记录在模板文件中，整体解绑。',
            'type' => 'string',
            'required' => false,
            'example' => 'cciot-cn-hangzhou/127859184306****/test.csv',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
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
            'errorCode' => 'ResourceInConfiguring.ConnectionPool',
            'errorMessage' => 'The specified resource of ConnectionPool is being configured, please try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingParam.IpParam',
            'errorMessage' => 'The param of ip or ip path is missing.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalParamFormat',
            'errorMessage' => 'The param is illegal.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.GrantedInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of granted instance not support.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<DissociateIpFromConnectionPoolResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</DissociateIpFromConnectionPoolResponse>","errorExample":""}]',
      'title' => '解绑卡IP',
    ),
    'GetConnectionPoolIpOperationResult' => 
    array (
      'summary' => '获取IP地址与连接地址池绑定与解绑的操作结果。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。  ',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        2 => 
        array (
          'name' => 'ConnectionPoolId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接地址池ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cp-0gd9qnmv8431rh****',
          ),
        ),
        3 => 
        array (
          'name' => 'QueryRequestId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询请求ID，即调用[AssociateIpWithConnectionPool](~~313334~~)或[DissociateIpFromConnectionPool](~~313335~~)接口，操作成功后返回的**RequestId**。',
            'type' => 'string',
            'required' => true,
            'example' => 'CFA63CEB-15B6-4AE8-B203-F855FF7BA962',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回请求列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA651',
              ),
              'ResultFilePaths' => 
              array (
                'title' => 'OssPath',
                'description' => '绑定与解绑的执行结果文件地址，即调用[AssociateIpWithConnectionPool](~~313334~~)或[DissociateIpFromConnectionPool](~~313335~~)接口执行结果文件下载地址。格式为`https://<BucketName.oss域名>/ipma/<执行结果文件>?<超期信息>&<临时AK/SK信息>&<签名信息>`。

文件内容为绑定和解绑的错误IP地址或错误原因列表，如果该字段为空，代表没有失败记录。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '绑定与解绑的执行结果文件地址，即调用[AssociateIpWithConnectionPool](~~313334~~)或[DissociateIpFromConnectionPool](~~313335~~)接口执行结果文件下载地址。格式为`https://<BucketName.oss域名>/ipma/<执行结果文件>?<超期信息>&<临时AK/SK信息>&<签名信息>`。

文件内容为绑定和解绑的错误IP地址或错误原因列表，如果该字段为空，代表没有失败记录。',
                  'type' => 'string',
                  'example' => 'https://examplebucket.oss-eu-central-1.aliyuncs.com/ipma/cp-0gd9qnmv8431rh****-IOTCCGW67cbd****-error.xlsx?Expires=163239****&OSSAccessKeyId=TMP.3Kiw6QS****&Signature=isbvgluXxHv****&versionId=CAEQOhiBgMC****&response-content-type=application%2Foctet-stream',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParamFormat',
            'errorMessage' => 'The param is illegal.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA651\\",\\n  \\"ResultFilePaths\\": [\\n    \\"https://examplebucket.oss-eu-central-1.aliyuncs.com/ipma/cp-0gd9qnmv8431rh****-IOTCCGW67cbd****-error.xlsx?Expires=163239****&OSSAccessKeyId=TMP.3Kiw6QS****&Signature=isbvgluXxHv****&versionId=CAEQOhiBgMC****&response-content-type=application%2Foctet-stream\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetConnectionPoolIpOperationResultResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA651</RequestId>\\n    <ResultFilePaths>https://examplebucket.oss-eu-central-1.aliyuncs.com/ipma/cp-0gd9qnmv8431rh****-IOTCCGW67cbd****-error.xlsx?Expires=163239****&amp;OSSAccessKeyId=TMP.3Kiw6QS****&amp;Signature=isbvgluXxHv****&amp;versionId=CAEQOhiBgMC****&amp;response-content-type=application%2Foctet-stream</ResultFilePaths>\\n</GetConnectionPoolIpOperationResultResponse>","errorExample":""}]',
      'title' => '获取IP地址绑定与解绑结果',
    ),
    'ListConnectionPoolAllIps' => 
    array (
      'summary' => '查询连接地址池所有IP地址信息。',
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
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
            'type' => 'string',
            'required' => false,
            'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值：**1**~**50**。默认值：**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2000',
            'minimum' => '1',
            'example' => '10',
            'default' => '50',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        4 => 
        array (
          'name' => 'ConnectionPoolId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的连接地址池ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cp-bp11234abctmno0hdq****',
          ),
        ),
        5 => 
        array (
          'name' => 'Ip',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接地址池中的IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.0.1',
          ),
        ),
        6 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接地址池中IP地址类型。取值：

- **Cidr**：连接地址池所属的CIDR地址块。

- **Host**：物联网卡的IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'Cidr',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'TotalIpsCount' => 
              array (
                'description' => '总列表条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'MaxResults' => 
              array (
                'description' => '分批次查询时每次显示的条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'ConnectionPoolIps' => 
              array (
                'description' => '连接地址池IP列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '连接地址池IP列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ConnectionPoolId' => 
                    array (
                      'description' => '连接地址池ID。',
                      'type' => 'string',
                      'example' => 'cp-bp11234abctmno0hdq****',
                    ),
                    'Ip' => 
                    array (
                      'description' => '连接地址池中的IP地址。',
                      'type' => 'string',
                      'example' => '192.168.0.1',
                    ),
                    'Status' => 
                    array (
                      'description' => 'IP地址状态，仅返回**activated**，表示已激活，IP地址和云连接器绑定完成。',
                      'type' => 'string',
                      'example' => 'activated',
                    ),
                    'Type' => 
                    array (
                      'description' => '连接地址池中IP地址类型。取值：

- **Cidr**：连接地址池所属的CIDR地址块。

- **Host**：物联网卡的IP地址。',
                      'type' => 'string',
                      'example' => 'Cidr',
                    ),
                    'IpNum' => 
                    array (
                      'description' => '可用IP数量。
- **Type**取值为**Host**时，可用IP数量为**1**。

- **Type**取值为**Cidr**时，可用IP数量为CIDR地址块的IP总数。
',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '254',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.ConnectionPool',
            'errorMessage' => 'The specified resource of connection pool is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"TotalIpsCount\\": 1,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 10,\\n  \\"ConnectionPoolIps\\": [\\n    {\\n      \\"ConnectionPoolId\\": \\"cp-bp11234abctmno0hdq****\\",\\n      \\"Ip\\": \\"192.168.0.1\\",\\n      \\"Status\\": \\"activated\\",\\n      \\"Type\\": \\"Cidr\\",\\n      \\"IpNum\\": 254\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListConnectionPoolAllIpsResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <TotalIpsCount>1</TotalIpsCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>10</MaxResults>\\n    <ConnectionPoolIps>\\n        <ConnectionPoolId>cp-bp11234abctmno0hdq****</ConnectionPoolId>\\n        <Ip>192.168.0.1</Ip>\\n        <Status>activated</Status>\\n        <Type>Cidr</Type>\\n        <IpNum>254</IpNum>\\n    </ConnectionPoolIps>\\n</ListConnectionPoolAllIpsResponse>","errorExample":""}]',
      'title' => '查询连接地址池所有IP地址',
    ),
    'DeleteConnectionPool' => 
    array (
      'summary' => '删除连接地址池。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'ConnectionPoolId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接地址池的ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1234abc',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会删除连接地址池。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后直接删除连接地址池。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID，仅取值：**cn-hangzhou**。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceExist.AuthorizationRule',
            'errorMessage' => 'The specified resource of AuthorizationRule exists.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotFound.ConnectionPool',
            'errorMessage' => 'The param of ConnectionPoolId is illegal.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceInConfiguring.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCloudConnector is configuring, please try again later.',
          ),
          4 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalParam.ConnectionPoolId',
            'errorMessage' => 'The param of ConnectionPoolId is illegal.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.GrantedInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of granted instance not support.',
          ),
          7 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteConnectionPoolResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</DeleteConnectionPoolResponse>","errorExample":""}]',
      'title' => '删除连接地址池',
    ),
    'CreateAuthorizationRule' => 
    array (
      'summary' => '创建授权规则。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'DestinationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问目标类型。取值：
- **Cidr**：CIDR地址块。
- **Domain**：域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'Cidr',
          ),
        ),
        2 => 
        array (
          'name' => 'DestinationPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标端口范围。取值范围：

- TCP、UDP协议：1~65535。使用正斜线（/）隔开起始端口和终止端口。例如：1/200。

- ICMP协议：-1/-1。

- ALL：-1/-1。',
            'type' => 'string',
            'required' => false,
            'example' => '80/80',
          ),
        ),
        3 => 
        array (
          'name' => 'Protocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议类型。取值：

- **tcp**。
- **udp**。
- **icmp**。
- **all**：支持所有协议。',
            'type' => 'string',
            'required' => false,
            'example' => 'tcp',
          ),
        ),
        4 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问目标。',
            'type' => 'string',
            'required' => true,
            'example' => '47.0.XX.XX',
          ),
        ),
        5 => 
        array (
          'name' => 'Policy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问策略。取值：
- **Permit**：允许。
- **Deny**：拒绝。',
            'type' => 'string',
            'required' => true,
            'example' => 'Permit',
          ),
        ),
        6 => 
        array (
          'name' => 'SourceCidrs',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '源CIDR地址块。最多支持20个源CIDR地址块。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '源CIDR地址块。最多支持20个源CIDR地址块。',
              'type' => 'string',
              'required' => false,
              'example' => '192.168.XX.XX',
            ),
            'required' => true,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        7 => 
        array (
          'name' => 'AuthorizationRuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则名称。

名称长度为2~128个字符，以大小写字母或中文开头，可包含数字、半角句号（.）、下划线（_）或短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'rule01',
          ),
        ),
        8 => 
        array (
          'name' => 'AuthorizationRuleDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则描述。

长度为2~256个字符，开头必须为大小写英文字母或中文，但不能为`http://`或`https://`。',
            'type' => 'string',
            'required' => false,
            'example' => 'rule01',
          ),
        ),
        9 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        10 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会创建授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后直接创建授权规则。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        11 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。  ',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'AuthorizationRuleId' => 
              array (
                'description' => '授权规则ID。',
                'type' => 'string',
                'example' => 'ar-1234abcb8tmno0hdq****',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.DomainFeatureDisabled',
            'errorMessage' => 'The operation is not allowed because of domain feature disabled.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalParam.Destination',
            'errorMessage' => 'The param of Destination is illegal.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceAlreadyExist.AuthorizationRule',
            'errorMessage' => 'The specified resource of AuthorizationRule already exists.',
          ),
          4 => 
          array (
            'errorCode' => 'Conflict.Param',
            'errorMessage' => 'The param is conflict.',
          ),
          5 => 
          array (
            'errorCode' => 'Conflict.Cidr',
            'errorMessage' => 'The cidr is conflict.',
          ),
          6 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
          7 => 
          array (
            'errorCode' => 'QuotaExceeded.sourceCidrLimit',
            'errorMessage' => 'The quota of SourceCidrsPerAuthorizationRule is exceeded',
          ),
          8 => 
          array (
            'errorCode' => 'IllegalParam',
            'errorMessage' => 'The param is illegal.',
          ),
          9 => 
          array (
            'errorCode' => 'QuotaExceeded.authorizationRuleInstanceLimit',
            'errorMessage' => 'The quota of AuthorizationRulePerIotCC is exceeded.',
          ),
          10 => 
          array (
            'errorCode' => 'IllegalParamFormat',
            'errorMessage' => 'The param is illegal.',
          ),
          11 => 
          array (
            'errorCode' => 'ResourceInConfiguring.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCloudConnector is configuring, please try again later.',
          ),
          12 => 
          array (
            'errorCode' => 'OperationDenied.DomainInHumanNetwork',
            'errorMessage' => 'The operation is not allowed because of domain or CIDR in human network.',
          ),
          13 => 
          array (
            'errorCode' => 'OperationDenied.CIDRMaskTooLarge',
            'errorMessage' => 'The operation is not allowed because of CIDR too large.',
          ),
          14 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
          15 => 
          array (
            'errorCode' => 'IllegalParam.AuthorizationRule.DestinationType',
            'errorMessage' => 'The param of DestinationType is illegal.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"AuthorizationRuleId\\": \\"ar-1234abcb8tmno0hdq****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateAuthorizationRuleResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <AuthorizationRuleId>ar-1234abcb8tmno0hdq****</AuthorizationRuleId>\\n</CreateAuthorizationRuleResponse>","errorExample":""}]',
      'title' => '创建授权规则',
    ),
    'CreateAuthorizationRules' => 
    array (
      'summary' => '调用CreateAuthorizationRules接口创建多条授权规则。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotccg-g00epppbi9di9y****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会创建多条授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'AuthorizationRules',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '授权规则列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '授权规则列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Name' => 
                array (
                  'description' => '授权规则名称。最多支持20个授权规则名称。

名称长度为2~128个字符，以大小写字母或中文开头，可包含数字、半角句号（.）、下划线（_）或短划线（-）。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'rule01',
                ),
                'Description' => 
                array (
                  'description' => '授权规则描述。最多支持20个授权规则描述。

长度为2~256个字符，开头必须为大小写英文字母或中文，但不能为`http://`或`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'rule01',
                ),
                'SourceCidr' => 
                array (
                  'description' => '源CIDR地址块。最多支持20个CIDR地址块。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '192.168.0.1/24',
                ),
                'DestinationType' => 
                array (
                  'description' => '访问目标类型。最多支持20个访问目标类型。取值：

- **Cidr**：CIDR地址块。
- **Domain**：域名。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'Cidr',
                ),
                'DestinationPort' => 
                array (
                  'description' => '目标端口范围。最多支持20个访问目标端口。取值范围：

- TCP、UDP协议：**1~65535**。使用正斜线（/）隔开起始端口和终止端口。例如：1/200。

- ICMP协议：-1/-1。

- ALL：-1/-1。
',
                  'type' => 'string',
                  'required' => false,
                  'example' => '80/80',
                ),
                'Protocol' => 
                array (
                  'description' => '协议类型。最多支持20个协议类型。取值：

- **TCP**。

- **UDP**。

- **ICMP**。

- **ALL**：支持所有协议。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TCP',
                ),
                'Destination' => 
                array (
                  'description' => '访问目标地址。最多支持20个访问目标地址。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '47.0.XX.XX',
                ),
                'Policy' => 
                array (
                  'description' => '访问策略。最多支持20个访问策略。取值：

- **Permit**：允许。
- **Deny**：拒绝。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'Permit',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 100,
            'minItems' => 1,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'AuthorizationRuleIds' => 
              array (
                'description' => '授权规则ID。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '授权规则ID。',
                  'type' => 'string',
                  'example' => 'ar-1234abcb8tmno0hdq****',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.DomainFeatureDisabled',
            'errorMessage' => 'The operation is not allowed because of domain feature disabled.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalParam.Destination',
            'errorMessage' => 'The param of Destination is illegal.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceAlreadyExist.AuthorizationRule',
            'errorMessage' => 'The specified resource of AuthorizationRule already exists.',
          ),
          4 => 
          array (
            'errorCode' => 'Conflict.Param',
            'errorMessage' => 'The param is conflict.',
          ),
          5 => 
          array (
            'errorCode' => 'Conflict.Cidr',
            'errorMessage' => 'The cidr is conflict.',
          ),
          6 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
          7 => 
          array (
            'errorCode' => 'QuotaExceeded.sourceCidrLimit',
            'errorMessage' => 'The quota of SourceCidrsPerAuthorizationRule is exceeded',
          ),
          8 => 
          array (
            'errorCode' => 'IllegalParam',
            'errorMessage' => 'The param is illegal.',
          ),
          9 => 
          array (
            'errorCode' => 'QuotaExceeded.authorizationRuleInstanceLimit',
            'errorMessage' => 'The quota of AuthorizationRulePerIotCC is exceeded',
          ),
          10 => 
          array (
            'errorCode' => 'IllegalParamFormat',
            'errorMessage' => 'The param is illegal.',
          ),
          11 => 
          array (
            'errorCode' => 'ResourceInConfiguring.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCloudConnector is configuring, please try again later.',
          ),
          12 => 
          array (
            'errorCode' => 'OperationDenied.DomainInHumanNetwork',
            'errorMessage' => 'The operation is not allowed because of domain or CIDR in human network.',
          ),
          13 => 
          array (
            'errorCode' => 'OperationDenied.CIDRMaskTooLarge',
            'errorMessage' => 'The operation is not allowed because of CIDR too large.',
          ),
          14 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
          15 => 
          array (
            'errorCode' => 'IllegalParam.AuthorizationRule.DestinationType',
            'errorMessage' => 'The param of DestinationType is illegal.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"AuthorizationRuleIds\\": [\\n    \\"ar-1234abcb8tmno0hdq****\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<CreateAuthorizationRulesResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <AuthorizationRuleIds>ar-1234abcb8tmno0hdq****</AuthorizationRuleIds>\\n</CreateAuthorizationRulesResponse>","errorExample":""}]',
      'title' => '创建多条授权规则',
    ),
    'UpdateAuthorizationRuleAttribute' => 
    array (
      'summary' => '更新授权规则信息。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'AuthorizationRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ar-1234abcb8tmno0hdq****',
          ),
        ),
        2 => 
        array (
          'name' => 'DestinationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问目标类型。
- **Cidr**：CIDR地址块。
- **Domain**：域名。',
            'type' => 'string',
            'required' => false,
            'example' => 'Cidr',
          ),
        ),
        3 => 
        array (
          'name' => 'DestinationPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标端口范围。取值范围：

- TCP、UDP协议：1~65535。使用正斜线（/）隔开起始端口和终止端口。例如：1/200。
- ICMP协议：-1/-1。
- ALL：-1/-1。',
            'type' => 'string',
            'required' => false,
            'example' => '80/80',
          ),
        ),
        4 => 
        array (
          'name' => 'Protocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议类型。取值：

- **tcp**。
- **udp**。
- **icmp**。
- **all**：支持所有协议。',
            'type' => 'string',
            'required' => false,
            'example' => 'tcp',
          ),
        ),
        5 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问目标。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.XX.XX',
          ),
        ),
        6 => 
        array (
          'name' => 'Policy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问策略。
- **Permit**：允许。
- **Deny**：拒绝。',
            'type' => 'string',
            'required' => false,
            'example' => 'Permit',
          ),
        ),
        7 => 
        array (
          'name' => 'SourceCidrs',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '源CIDR地址块。最多支持传入20个源CIDR地址块。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '源CIDR地址块。最多支持传入20个源CIDR地址块。',
              'type' => 'string',
              'required' => false,
              'example' => '192.168.XX.XX',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        8 => 
        array (
          'name' => 'AuthorizationRuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则名称。

名称长度为2~128个字符，以大小写字母或中文开头，可包含数字、下划线（_）或短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'rule01',
          ),
        ),
        9 => 
        array (
          'name' => 'AuthorizationRuleDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则描述。

长度为2~256个字符，开头必须为大小写英文字母或中文，但不能为`http://`或`https://`。',
            'type' => 'string',
            'required' => false,
            'example' => 'rule01',
          ),
        ),
        10 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        11 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会更新授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后直接更新授权规则。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        12 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.NoParamModify',
            'errorMessage' => 'The operation is not allowed because of no param modified.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
          3 => 
          array (
            'errorCode' => 'QuotaExceeded.sourceCidrLimit',
            'errorMessage' => 'The quota of SourceCidrsPerAuthorizationRule is exceeded',
          ),
          4 => 
          array (
            'errorCode' => 'QuotaExceeded.authorizationRuleInstanceLimit',
            'errorMessage' => 'The quota of AuthorizationRulePerIotCC is exceeded',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalParamFormat',
            'errorMessage' => 'The param is illegal.',
          ),
          6 => 
          array (
            'errorCode' => 'IllegalParam',
            'errorMessage' => 'The param is illegal.',
          ),
          7 => 
          array (
            'errorCode' => 'ResourceInConfiguring.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCloudConnector is configuring, please try again later.',
          ),
          8 => 
          array (
            'errorCode' => 'ResourceNotFound.AuthorizationRule',
            'errorMessage' => 'The param of AuthorizationRuleId is illegal.',
          ),
          9 => 
          array (
            'errorCode' => 'IllegalParam.Destination',
            'errorMessage' => 'The param of Destination is illegal.',
          ),
          10 => 
          array (
            'errorCode' => 'OperationDenied.NotSupportModify',
            'errorMessage' => 'The operation is not allowed because of this type not support modify.',
          ),
          11 => 
          array (
            'errorCode' => 'OperationDenied.CIDRMaskTooLarge',
            'errorMessage' => 'The operation is not allowed because of CIDR too large.',
          ),
          12 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateAuthorizationRuleAttributeResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</UpdateAuthorizationRuleAttributeResponse>","errorExample":""}]',
      'title' => '更新授权规则信息',
    ),
    'ListAuthorizationRules' => 
    array (
      'summary' => '查询授权规则信息。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'AuthorizationRuleIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '授权规则ID列表。最多支持传入20个授权规则ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '授权规则ID列表。最多支持传入20个授权规则ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'ar-1234abcb8tmno0hdq****',
            ),
            'required' => false,
            'maxItems' => 100,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'DestinationType',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '访问目标类型。最多支持传入20个访问目标类型。取值：
- **Cidr**：CIDR地址块。
- **Domain**：域名。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '访问目标类型。最多支持传入20个访问目标类型。取值：
- **Cidr**：CIDR地址块。
- **Domain**：域名。',
              'type' => 'string',
              'required' => false,
              'example' => 'Cidr',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'Protocol',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '协议类型。最多支持输入20个协议类型。取值：

- **tcp**。
- **udp**。
- **icmp**。
- **all**：支持所有协议。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '协议类型。最多支持输入20个协议类型。取值：

- **tcp**。
- **udp**。
- **icmp**。
- **all**：支持所有协议。',
              'type' => 'string',
              'required' => false,
              'example' => 'tcp',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        4 => 
        array (
          'name' => 'DestinationPort',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '目标端口范围。最多支持20个端口取值范围。取值范围：

- TCP、UDP协议：1~65535。使用正斜线（/）隔开起始端口和终止端口。例如：1/200。
- ICMP协议：-1/-1。
- ALL：-1/-1。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '目标端口范围。最多支持20个端口取值范围。取值范围：

- TCP、UDP协议：1~65535。使用正斜线（/）隔开起始端口和终止端口。例如：1/200。
- ICMP协议：-1/-1。
- ALL：-1/-1。',
              'type' => 'string',
              'required' => false,
              'example' => '80/80',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        5 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '访问目标。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '访问目标。最多支持20个访问目标。',
              'type' => 'string',
              'required' => false,
              'example' => '192.168.XX.XX',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        6 => 
        array (
          'name' => 'AuthorizationRuleStatus',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '授权规则状态。最多支持传入20个授权规则状态。取值：
- **Creating**：创建中。
- **Created**：创建完成。
- **Deleting**：删除中。
- **Updating**：更新中。
',
            'type' => 'array',
            'items' => 
            array (
              'description' => '授权规则状态。最多支持传入20个授权规则状态。取值：
- **Creating**：创建中。
- **Created**：创建完成。
- **Deleting**：删除中。
- **Updating**：更新中。',
              'type' => 'string',
              'required' => false,
              'example' => 'Created',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        7 => 
        array (
          'name' => 'AuthorizationRuleName',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '授权规则名称。最多支持传入20个授权规则名称。

名称长度为2~128个字符，以大小写字母或中文开头，可包含数字、下划线（_）或短划线（-）。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '授权规则名称。最多支持传入20个授权规则名称。

名称长度为2~128个字符，以大小写字母或中文开头，可包含数字、下划线（_）或短划线（-）。',
              'type' => 'string',
              'required' => false,
              'example' => 'rule01',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        8 => 
        array (
          'name' => 'Policy',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '访问策略。最多支持传入20个访问策略。
- **Permit**：允许。
- **Deny**：拒绝。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '访问策略。最多支持传入20个访问策略。取值：
- **Permit**：允许。
- **Deny**：拒绝。',
              'type' => 'string',
              'required' => false,
              'example' => 'Permit',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        9 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
        10 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小，取值：**1**~**50**。传入为空时，默认值：**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        11 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        12 => 
        array (
          'name' => 'AuthorizationRuleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则的类型。取值：

-  **System**，表示授权规则的类型为系统类型。

- **Customer**：表示授权规则的类型为自定义类型。

- **Default**：表示授权规则的类型为默认类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'System',
          ),
        ),
        13 => 
        array (
          'name' => 'FuzzyDestination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊的访问目标',
            'type' => 'string',
            'required' => false,
            'example' => 'aliyuncs',
          ),
        ),
        14 => 
        array (
          'name' => 'FuzzyAuthorizationRuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊的授权规则名称',
            'type' => 'string',
            'required' => false,
            'example' => '测试',
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
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'TotalCount' => 
              array (
                'description' => '授权规则总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
              ),
              'MaxResults' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'AuthorizationRules' => 
              array (
                'description' => '授权规则列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '授权规则列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'IoTCloudConnectorId' => 
                    array (
                      'description' => '云连接器实例ID。',
                      'type' => 'string',
                      'example' => 'iotcc-bp1odcab8tmno0hdq****',
                    ),
                    'Policy' => 
                    array (
                      'description' => '访问策略。取值：
- **Permit**：允许。
- **Deny**：拒绝。',
                      'type' => 'string',
                      'example' => 'Permit',
                    ),
                    'AuthorizationRuleStatus' => 
                    array (
                      'description' => '授权规则状态。取值：
- **Creating**：创建中。
- **Created**：创建完成。
- **Deleting**：删除中。
- **Updating**：更新中。',
                      'type' => 'string',
                      'example' => 'Created',
                    ),
                    'SourceCidrs' => 
                    array (
                      'description' => '源CIDR地址块。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '源CIDR地址块。',
                        'type' => 'string',
                        'example' => '192.168.XX.XX',
                      ),
                    ),
                    'DestinationType' => 
                    array (
                      'description' => '访问目标类型。取值：
- **Cidr**：CIDR地址块。
- **Domain**：域名。',
                      'type' => 'string',
                      'example' => 'Cidr',
                    ),
                    'Protocol' => 
                    array (
                      'description' => '协议类型。取值：

- **tcp**。
- **udp**。
- **icmp**。
- **all**：支持所有协议。',
                      'type' => 'string',
                      'example' => 'tcp',
                    ),
                    'DestinationPort' => 
                    array (
                      'description' => '目标端口范围。取值范围：

- TCP、UDP协议：1~65535。使用正斜线（/）隔开起始端口和终止端口。例如：1/200。
- ICMP协议：-1/-1。
- ALL：-1/-1。',
                      'type' => 'string',
                      'example' => '80/80',
                    ),
                    'Destination' => 
                    array (
                      'description' => '访问目标。',
                      'type' => 'string',
                      'example' => '192.168.XX.XX',
                    ),
                    'AuthorizationRuleName' => 
                    array (
                      'description' => '授权规则名称。

名称长度为2~128个字符，以大小写字母或中文开头，可包含数字、下划线（_）或短划线（-）。',
                      'type' => 'string',
                      'example' => 'rule01',
                    ),
                    'AuthorizationRuleDescription' => 
                    array (
                      'description' => '授权规则描述。',
                      'type' => 'string',
                      'example' => 'rule01',
                    ),
                    'AuthorizationRuleId' => 
                    array (
                      'description' => '授权规则ID。',
                      'type' => 'string',
                      'example' => 'ar-1234abcb8tmno0hdq****',
                    ),
                    'AuthorizationRuleType' => 
                    array (
                      'description' => '授权规则的类型。取值：

-  **System**，表示授权规则的类型为系统类型。

- **Customer**：表示授权规则的类型为自定义类型。

- **Default**：表示授权规则的类型为默认类型。',
                      'type' => 'string',
                      'example' => 'System',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"TotalCount\\": 10,\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"MaxResults\\": 10,\\n  \\"AuthorizationRules\\": [\\n    {\\n      \\"IoTCloudConnectorId\\": \\"iotcc-bp1odcab8tmno0hdq****\\",\\n      \\"Policy\\": \\"Permit\\",\\n      \\"AuthorizationRuleStatus\\": \\"Created\\",\\n      \\"SourceCidrs\\": [\\n        \\"192.168.XX.XX\\"\\n      ],\\n      \\"DestinationType\\": \\"Cidr\\",\\n      \\"Protocol\\": \\"tcp\\",\\n      \\"DestinationPort\\": \\"80/80\\",\\n      \\"Destination\\": \\"192.168.XX.XX\\",\\n      \\"AuthorizationRuleName\\": \\"rule01\\",\\n      \\"AuthorizationRuleDescription\\": \\"rule01\\",\\n      \\"AuthorizationRuleId\\": \\"ar-1234abcb8tmno0hdq****\\",\\n      \\"AuthorizationRuleType\\": \\"System\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListAuthorizationRulesResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <TotalCount>10</TotalCount>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0a****</NextToken>\\n    <MaxResults>10</MaxResults>\\n    <AuthorizationRules>\\n        <IoTCloudConnectorId>iotcc-bp1odcab8tmno0hdq****</IoTCloudConnectorId>\\n        <Policy>Permit</Policy>\\n        <AuthorizationRuleStatus>Created</AuthorizationRuleStatus>\\n        <SourceCidrs>192.168.XX.XX</SourceCidrs>\\n        <DestinationType>Cidr</DestinationType>\\n        <Protocol>tcp</Protocol>\\n        <DestinationPort>80/80</DestinationPort>\\n        <Destination>192.168.XX.XX</Destination>\\n        <AuthorizationRuleName>rule01</AuthorizationRuleName>\\n        <AuthorizationRuleDescription>rule01</AuthorizationRuleDescription>\\n        <AuthorizationRuleId>ar-1234abcb8tmno0hdq****</AuthorizationRuleId>\\n        <AuthorizationRuleType>System</AuthorizationRuleType>\\n    </AuthorizationRules>\\n</ListAuthorizationRulesResponse>","errorExample":""}]',
      'title' => '查询授权规则',
    ),
    'DeleteAuthorizationRule' => 
    array (
      'summary' => '删除授权规则。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'AuthorizationRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ar-1234abcb8tmno0hdq****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会删除授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后直接删除授权规则。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
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
            'errorCode' => 'OperationDenied.IotCloudConnectorInGroup',
            'errorMessage' => 'The operation is not allowed because of IotCloudConnector In Group.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceInConfiguring.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCloudConnector is configuring, please try again later.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.AuthorizationRule',
            'errorMessage' => 'The param of AuthorizationRuleId is illegal.',
          ),
          4 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalParam.AuthoriztionRuleId',
            'errorMessage' => 'The param of AuthoriztionRuleId is illegal.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteAuthorizationRuleResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</DeleteAuthorizationRuleResponse>","errorExample":""}]',
      'title' => '删除授权规则',
    ),
    'CreateIoTCloudConnectorGroup' => 
    array (
      'summary' => '创建实例组。',
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
            'description' => '实例组的名称。

名称长度为2~128个字符，以大小写字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'cctest',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组的描述信息。
长度为2~256个字符，必须以字母或中文开头，但不能以`http://` 或`https://`开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会创建实例组。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组所在的地域ID。 

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。  ',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        5 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例的版本，不同版本有不同功能限制和计费策略。取值：

- **Basic**：基础版。

- **Standard**：标准版。

<props="china">云连接器实例默认创建标准版，如果需要创建基础版实例，请[提交工单](https://selfservice.console.aliyun.com/ticket/category/ga/today)申请。</props>

<props="intl">云连接器实例默认创建标准版，如果需要创建基础版实例，请[提交工单](https://workorder-intl.console.aliyun.com/?spm=5176.11182188.console-base-top.dworkorder.18ae4882n3v6ZW#/ticket/createIndex)申请</props>
',
            'type' => 'string',
            'required' => false,
            'example' => 'Standard',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'IoTCloudConnectorGroupId' => 
              array (
                'description' => '实例组ID。',
                'type' => 'string',
                'example' => 'iotccg-g00epppbi9di9y****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParamFormat',
            'errorMessage' => 'The param is illegal.',
          ),
          2 => 
          array (
            'errorCode' => 'QuotaExceeded.IoTCCGroupInstanceLimit',
            'errorMessage' => 'The quota of IoTCCGroupPerUser is exceeded',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"IoTCloudConnectorGroupId\\": \\"iotccg-g00epppbi9di9y****\\",\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateIoTCloudConnectorGroupResponse>\\n    <IoTCloudConnectorGroupId>iotccg-g00epppbi9di9y****</IoTCloudConnectorGroupId>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n</CreateIoTCloudConnectorGroupResponse>","errorExample":""}]',
      'title' => '创建实例组',
    ),
    'AddIoTCloudConnectorToGroup' => 
    array (
      'summary' => '为实例组添加云连接器实例。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '云连接器实例ID。**N**的取值范围：**1**~**20**。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '云连接器实例ID。**N**的取值范围：**1**~**20**。',
              'type' => 'string',
              'required' => true,
              'example' => 'iotcc-bp1odcab8tmno0hdq****',
            ),
            'required' => true,
            'maxItems' => 20,
          ),
        ),
        1 => 
        array (
          'name' => 'IoTCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotccg-g00epppbi9di9y****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会为实例组添加云连接器实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组所在的地域ID。 

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。  ',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
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
            'errorCode' => 'ResourceAlreadyAssociated.CloudConnector',
            'errorMessage' => 'The specified resource of CloudConnector is already associated.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'QuotaExceeded.IoTCCGroupInstanceLimit',
            'errorMessage' => 'The quota of IoTCCGroupPerUser is exceeded',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"cn-hangzhou\\"\\n}","errorExample":""},{"type":"xml","example":"<AddIoTCloudConnectorToGroupResponse>\\n    <RequestId>cn-hangzhou</RequestId>\\n</AddIoTCloudConnectorToGroupResponse>","errorExample":""}]',
      'title' => '添加云连接器到分组中',
    ),
    'UpdateIoTCloudConnectorGroupAttribute' => 
    array (
      'summary' => '修改云连接器分组属性。',
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
          'name' => 'IoTCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotccg-g00epppbi9di9y****',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改的实例组的实例名称。

长度为2-128个英文或中文字符，必须以大小字母或中文开头，可包含数字，半角句号（.），下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改的实例组的描述信息。

长度为2~256个字符，开头必须为大小写英文字母或中文，但不能为`http://`或`https://`。',
            'type' => 'string',
            'required' => false,
            'example' => 'description',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        4 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会修改实例组的属性。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行修改。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParamFormat',
            'errorMessage' => 'The param is illegal.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceInConfiguring.IoTCloudConnectorGroup',
            'errorMessage' => 'The specified resource of IoTCloudConnectorGroup is configuring, please try again later.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnectorGroup',
            'errorMessage' => 'The param of IoTCloudConnectorGroupId is illegal.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateIoTCloudConnectorGroupAttributeResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n</UpdateIoTCloudConnectorGroupAttributeResponse>","errorExample":""}]',
      'title' => '修改云连接器分组属性',
    ),
    'ListIoTCloudConnectorGroups' => 
    array (
      'summary' => '查询实例组列表信息。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IoTCloudConnectorGroupStatus',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例组的状态。最多支持20个实例组的状态。取值：
- **Creating**：创建中。

- **Created**：创建完成。

- **Deleting**：删除中。

- **Updating**：更新中。
',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例组的状态。最多支持20个实例组的状态。取值：
- **Creating**：创建中。

- **Created**：创建完成。

- **Deleting**：删除中。

- **Updating**：更新中。
',
              'type' => 'string',
              'required' => false,
              'example' => 'Created',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'IoTCloudConnectorGroupIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例组的ID列表。最多支持20个实例组的ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例组的ID列表。最多支持20个实例组的ID列表。',
              'type' => 'string',
              'required' => false,
              'example' => 'iotccg-g00epppbi9di9y****',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'IoTCloudConnectorGroupName',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例组的名称。最多支持20个实例组的名称。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例组的名称。最多支持20个实例组的名称。

名称长度为2~128个英文或中文字符，以大小写字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
              'type' => 'string',
              'required' => false,
              'example' => 'cctest',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。',
            'type' => 'string',
            'required' => false,
            'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
          ),
        ),
        4 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值：**1**~**50**。默认值：**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组所在的地域ID。 

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。  ',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        6 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例的版本，不同版本有不同功能限制和计费策略。取值：

- **Basic**：基础版。

- **Standard**：标准版。

<props="china">云连接器实例默认创建标准版，如果需要创建基础版实例，请[提交工单](https://selfservice.console.aliyun.com/ticket/category/ga/today)申请。</props>

<props="intl">云连接器实例默认创建标准版，如果需要创建基础版实例，请[提交工单](https://workorder-intl.console.aliyun.com/?spm=5176.11182188.console-base-top.dworkorder.18ae4882n3v6ZW#/ticket/createIndex)申请</props>
',
            'type' => 'string',
            'required' => false,
            'example' => 'Standard',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '列表条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'MaxResults' => 
              array (
                'description' => '分批次查询时每次显示的条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'IoTCloudConnectorGroups' => 
              array (
                'description' => '实例组列表信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '实例组列表信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'IoTCloudConnectorGroupId' => 
                    array (
                      'description' => '实例组ID。',
                      'type' => 'string',
                      'example' => 'iotccg-g00epppbi9di9y****',
                    ),
                    'IoTCloudConnectorGroupStatus' => 
                    array (
                      'description' => '实例组的状态。取值：
- **Creating**：创建中。

- **Created**：创建完成。

- **Deleting**：删除中。

- **Updating**：更新中。
',
                      'type' => 'string',
                      'example' => 'Created',
                    ),
                    'IoTCloudConnectors' => 
                    array (
                      'description' => '云连接器实例列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '云连接器实例列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'IoTCloudConnectorId' => 
                          array (
                            'description' => '云连接器实例ID。',
                            'type' => 'string',
                            'example' => 'iotcc-bp1odcab8tmno0hdq****',
                          ),
                          'IoTCloudConnectorStatus' => 
                          array (
                            'description' => '云连接器实例的状态。取值：

- **Creating**：创建中。

- **Created**：创建完成。

- **Deleting**：删除中。

- **Updating**：修改中。',
                            'type' => 'string',
                            'example' => 'Created',
                          ),
                          'IoTCloudConnectorName' => 
                          array (
                            'description' => '云连接器实例的名称。',
                            'type' => 'string',
                            'example' => 'cc01',
                          ),
                          'IoTCloudConnectorDescription' => 
                          array (
                            'description' => '云连接器实例描述信息。',
                            'type' => 'string',
                            'example' => 'cc01',
                          ),
                          'CreateTime' => 
                          array (
                            'description' => '云连接器实例创建时间。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '2021-10-01 00:00:00',
                          ),
                          'ISP' => 
                          array (
                            'description' => '云连接器实例的运营商。取值：

- **telecom**：中国电信。

- **mobile**：中国移动。

- **unicom**：中国联通。',
                            'type' => 'string',
                            'example' => 'mobile',
                          ),
                          'APN' => 
                          array (
                            'description' => '运营商APN ID。',
                            'type' => 'string',
                            'example' => 'CMWAP',
                          ),
                          'ServiceType' => 
                          array (
                            'description' => '服务类型。取值：

- **Normal**：普通型。
- **CC5G**：云连接器5G实例托管类型。
- **CC5GCCIoT**：云连接器5G过户类型。',
                            'type' => 'string',
                            'example' => 'Normal',
                          ),
                        ),
                      ),
                    ),
                    'Name' => 
                    array (
                      'description' => '实例组的名称。',
                      'type' => 'string',
                      'example' => 'cctest',
                    ),
                    'Description' => 
                    array (
                      'description' => '实例组的描述信息。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '实例组的创建时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2021-10-01 00:00:00',
                    ),
                    'Type' => 
                    array (
                      'description' => '云连接器实例的版本，不同版本有不同功能限制和计费策略。取值：

- **Basic**：基础版。

- **Standard**：标准版。

<props="china">云连接器实例默认创建标准版，如果需要创建基础版实例，请[提交工单](https://selfservice.console.aliyun.com/ticket/category/ga/today)申请。</props>

<props="intl">云连接器实例默认创建标准版，如果需要创建基础版实例，请[提交工单](https://workorder-intl.console.aliyun.com/?spm=5176.11182188.console-base-top.dworkorder.18ae4882n3v6ZW#/ticket/createIndex)申请</props>
',
                      'type' => 'string',
                      'example' => 'Standard',
                    ),
                    'ServiceType' => 
                    array (
                      'description' => '服务类型。取值：

- **Normal**：普通型。
- **CC5G**：云连接器5G实例托管类型。
- **CC5GCCIoT**：云连接器5G过户类型。',
                      'type' => 'string',
                      'example' => 'Normal',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 10,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 10,\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"IoTCloudConnectorGroups\\": [\\n    {\\n      \\"IoTCloudConnectorGroupId\\": \\"iotccg-g00epppbi9di9y****\\",\\n      \\"IoTCloudConnectorGroupStatus\\": \\"Created\\",\\n      \\"IoTCloudConnectors\\": [\\n        {\\n          \\"IoTCloudConnectorId\\": \\"iotcc-bp1odcab8tmno0hdq****\\",\\n          \\"IoTCloudConnectorStatus\\": \\"Created\\",\\n          \\"IoTCloudConnectorName\\": \\"cc01\\",\\n          \\"IoTCloudConnectorDescription\\": \\"cc01\\",\\n          \\"CreateTime\\": 0,\\n          \\"ISP\\": \\"mobile\\",\\n          \\"APN\\": \\"CMWAP\\",\\n          \\"ServiceType\\": \\"Normal\\"\\n        }\\n      ],\\n      \\"Name\\": \\"cctest\\",\\n      \\"Description\\": \\"test\\",\\n      \\"CreateTime\\": 0,\\n      \\"Type\\": \\"Standard\\",\\n      \\"ServiceType\\": \\"Normal\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListIoTCloudConnectorGroupsResponse>\\n    <TotalCount>10</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>10</MaxResults>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <IoTCloudConnectorGroups>\\n        <IoTCloudConnectorGroupId>iotccg-g00epppbi9di9y****</IoTCloudConnectorGroupId>\\n        <IoTCloudConnectorGroupStatus>Created</IoTCloudConnectorGroupStatus>\\n        <IoTCloudConnectors>\\n            <IoTCloudConnectorId>iotcc-bp1odcab8tmno0hdq****</IoTCloudConnectorId>\\n            <IoTCloudConnectorStatus>Created</IoTCloudConnectorStatus>\\n            <IoTCloudConnectorName>cc01</IoTCloudConnectorName>\\n            <IoTCloudConnectorDescription>cc01</IoTCloudConnectorDescription>\\n            <ISP>mobile</ISP>\\n            <APN>CMWAP</APN>\\n            <ServiceType>Normal</ServiceType>\\n        </IoTCloudConnectors>\\n        <Name>cctest</Name>\\n        <Description>test</Description>\\n        <Type>Standard</Type>\\n        <ServiceType>Normal</ServiceType>\\n    </IoTCloudConnectorGroups>\\n</ListIoTCloudConnectorGroupsResponse>","errorExample":""}]',
      'title' => '查询实例组列表信息',
    ),
    'RemoveIoTCloudConnectorFromGroup' => 
    array (
      'summary' => '将云连接器实例从实例组中移除。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '云连接器实例ID。**N**的取值范围：**1**~**20**。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '云连接器实例ID。**N**的取值范围：**1**~**20**。',
              'type' => 'string',
              'required' => true,
              'example' => 'iotcc-bp1odcab8tmno0hdq****',
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'IoTCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotccg-g00epppbi9di9y****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会将云连接器实例从实例组中移除。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组所在的地域ID。 

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。  ',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'QuotaExceeded.IoTCCGroupInstanceLimit',
            'errorMessage' => 'The quota of IoTCCGroupPerUser is exceeded',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveIoTCloudConnectorFromGroupResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n</RemoveIoTCloudConnectorFromGroupResponse>","errorExample":""}]',
      'title' => '将云连接器实例从实例组中移除',
    ),
    'DeleteIoTCloudConnectorGroup' => 
    array (
      'summary' => '删除实例组。',
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
          'name' => 'IoTCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的实例组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotccg-g00epppbi9di9y****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会删除实例组。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组所在的地域ID。 

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。  ',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceInCreating.IoTCloudConnectorGroup',
            'errorMessage' => 'ResourceInCreating.IoTCloudConnectorGroup',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceInConfiguring.IoTCloudConnectorGroup',
            'errorMessage' => 'The specified resource of IoTCloudConnector Group is configuring, please try again later.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnectorGroup',
            'errorMessage' => 'The param of IoTCloudConnectorId Group is illegal.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteIoTCloudConnectorGroupResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n</DeleteIoTCloudConnectorGroupResponse>","errorExample":""}]',
      'title' => '删除实例组',
    ),
    'CreateGroupAuthorizationRule' => 
    array (
      'summary' => '实例组创建授权规则。',
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
          'name' => 'IoTCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotccg-g00epppbi9di9y****',
          ),
        ),
        1 => 
        array (
          'name' => 'AuthorizationRuleDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则的描述信息。

长度为2~256个字符，必须以字母或中文开头，但不能以`http://` 或`https://`开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'rule',
          ),
        ),
        2 => 
        array (
          'name' => 'AuthorizationRuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则的名称。

名称长度为2~128个字符，以大小写字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'ruletest',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceCidrs',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '源CIDR地址块。最多支持20个CIDR地址块。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '源CIDR地址块。最多支持20个CIDR地址块。',
              'type' => 'string',
              'required' => false,
              'example' => '192.168.0.1/24',
            ),
            'required' => true,
            'maxItems' => 200,
          ),
        ),
        4 => 
        array (
          'name' => 'DestinationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问目标类型。取值：
- **Cidr**：CIDR地址块。
- **Domain**：域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'Cidr',
          ),
        ),
        5 => 
        array (
          'name' => 'DestinationPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标端口范围。取值范围：

- TCP、UDP协议：1~65535。使用正斜线（/）隔开起始端口和终止端口。例如：1/200。
- ICMP协议：-1/-1。
- ALL：-1/-1。',
            'type' => 'string',
            'required' => false,
            'example' => '80/80',
          ),
        ),
        6 => 
        array (
          'name' => 'Protocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议类型。取值：

- **tcp**。
- **udp**。
- **icmp**。
- **all**：支持所有协议。',
            'type' => 'string',
            'required' => false,
            'example' => 'tcp',
          ),
        ),
        7 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问目标地址。',
            'type' => 'string',
            'required' => true,
            'example' => '47.0.XX.XX',
          ),
        ),
        8 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        9 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会为实例组创建授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        10 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组所在的地域ID。

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        11 => 
        array (
          'name' => 'Policy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问策略。取值：

- **Permit**：允许。

- **Deny**：拒绝。',
            'type' => 'string',
            'required' => true,
            'example' => 'Permit',
          ),
        ),
        12 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则的类型。取值：

- **System**，表示授权规则的类型为系统类型。

- **Customer**：表示授权规则的类型为自定义类型。

- **Default**：表示授权规则的类型为默认类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'System',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'IoTCloudConnectorGroupId' => 
              array (
                'description' => '实例组ID。',
                'type' => 'string',
                'example' => 'iotccg-g00epppbi9di9y****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'AuthorizationRuleId' => 
              array (
                'description' => '授权规则ID。',
                'type' => 'string',
                'example' => 'gar-ez91t41jvi6tr8****',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'QuotaExceeded.IoTCCGroupInstanceLimit',
            'errorMessage' => 'The quota of IoTCCGroupPerUser is exceeded',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceAlreadyExist.AuthorizationRule',
            'errorMessage' => 'The specified resource of AuthorizationRule already exists.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.DomainInHumanNetwork',
            'errorMessage' => 'The operation is not allowed because of domain or CIDR in human network.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.CIDRMaskTooLarge',
            'errorMessage' => 'The operation is not allowed because of CIDR too large.',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalParam.Destination',
            'errorMessage' => 'The param of Destination is illegal.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"IoTCloudConnectorGroupId\\": \\"iotccg-g00epppbi9di9y****\\",\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"AuthorizationRuleId\\": \\"gar-ez91t41jvi6tr8****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateGroupAuthorizationRuleResponse>\\n    <IoTCloudConnectorGroupId>iotccg-g00epppbi9di9y****</IoTCloudConnectorGroupId>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <AuthorizationRuleId>gar-ez91t41jvi6tr8****</AuthorizationRuleId>\\n</CreateGroupAuthorizationRuleResponse>","errorExample":""}]',
      'title' => '实例组创建授权规则',
    ),
    'UpdateGroupAuthorizationRuleAttribute' => 
    array (
      'summary' => '修改实例组的授权规则。',
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
          'name' => 'IoTCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotccg-g00epppbi9di9y****',
          ),
        ),
        1 => 
        array (
          'name' => 'AuthorizationRuleDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则的描述信息。

长度为2~256个字符，必须以字母或中文开头，但不能以`http://` 或`https://`开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'rule',
          ),
        ),
        2 => 
        array (
          'name' => 'AuthorizationRuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则的名称。

名称长度为2~128个字符，以大小写字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'ruletest',
          ),
        ),
        3 => 
        array (
          'name' => 'AuthorizationRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改的授权规则ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gar-ez91t41jvi6tr8****',
          ),
        ),
        4 => 
        array (
          'name' => 'SourceCidrs',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '源CIDR地址块。N的取值范围：**1**~**20**。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '源CIDR地址块。N的取值范围：**1**~**20**。',
              'type' => 'string',
              'required' => false,
              'example' => '192.168.0.1',
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        5 => 
        array (
          'name' => 'DestinationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问目标类型。取值：
- **Cidr**：CIDR地址块。
- **Domain**：域名。',
            'type' => 'string',
            'required' => false,
            'example' => 'Cidr',
          ),
        ),
        6 => 
        array (
          'name' => 'DestinationPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标端口范围。取值范围：

- TCP、UDP协议：1~65535。使用正斜线（/）隔开起始端口和终止端口。例如：1/200。
- ICMP协议：-1/-1。
- ALL：-1/-1。',
            'type' => 'string',
            'required' => false,
            'example' => '80/80',
          ),
        ),
        7 => 
        array (
          'name' => 'Protocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议类型。取值：

- **tcp**。
- **udp**。
- **icmp**。
- **all**：支持所有协议。',
            'type' => 'string',
            'required' => false,
            'example' => 'tcp',
          ),
        ),
        8 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问目标。',
            'type' => 'string',
            'required' => false,
            'example' => '47.0.XX.XX',
          ),
        ),
        9 => 
        array (
          'name' => 'Policy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问策略。取值：

- **Permit**：允许。

- **Deny**：拒绝。',
            'type' => 'string',
            'required' => false,
            'example' => 'Permit',
          ),
        ),
        10 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        11 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会修改实例组的授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        12 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组所在的地域ID。

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'IoTCloudConnectorGroupId' => 
              array (
                'description' => '实例组ID。',
                'type' => 'string',
                'example' => 'iotccg-g00epppbi9di9y****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'AuthorizationRuleId' => 
              array (
                'description' => '授权规则ID。',
                'type' => 'string',
                'example' => 'gar-ez91t41jvi6tr8****',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'QuotaExceeded.IoTCCGroupInstanceLimit',
            'errorMessage' => 'The quota of IoTCCGroupPerUser is exceeded',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.NoFieldModify',
            'errorMessage' => 'The operation is not allowed because of no field modify.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.CIDRMaskTooLarge',
            'errorMessage' => 'The operation is not allowed because of CIDR too large.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalParam.Destination',
            'errorMessage' => 'The param of Destination is illegal.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"IoTCloudConnectorGroupId\\": \\"iotccg-g00epppbi9di9y****\\",\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"AuthorizationRuleId\\": \\"gar-ez91t41jvi6tr8****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateGroupAuthorizationRuleAttributeResponse>\\n    <IoTCloudConnectorGroupId>iotccg-g00epppbi9di9y****</IoTCloudConnectorGroupId>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <AuthorizationRuleId>gar-ez91t41jvi6tr8****</AuthorizationRuleId>\\n</UpdateGroupAuthorizationRuleAttributeResponse>","errorExample":""}]',
      'title' => '修改实例组的授权规则',
    ),
    'ListGroupAuthorizationRules' => 
    array (
      'summary' => '查询实例组的授权规则信息。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IoTCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotccg-g00epppbi9di9y****',
          ),
        ),
        1 => 
        array (
          'name' => 'AuthorizationRuleIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '授权规则ID。最多支持20个授权规则ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '授权规则ID。最多支持20个授权规则ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'gar-ez91t41jvi6tr8****',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'DestinationType',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '访问目标类型。最多支持20个目标类型。取值：
- **Cidr**：CIDR地址块。
- **Domain**：域名。

',
            'type' => 'array',
            'items' => 
            array (
              'description' => '访问目标类型。最多支持20个目标类型。取值：
- **Cidr**：CIDR地址块。
- **Domain**：域名。',
              'type' => 'string',
              'required' => false,
              'example' => 'Cidr',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '访问目标地址。最多支持20个目标地址。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '访问目标地址。最多支持20个目标地址。',
              'type' => 'string',
              'required' => false,
              'example' => '47.0.XX.XX',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        4 => 
        array (
          'name' => 'Protocol',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '协议类型。取值：

- **tcp**。
- **udp**。
- **icmp**。
- **all**：支持所有协议。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '协议类型。最多支持20个协议类型。取值：

- **tcp**。
- **udp**。
- **icmp**。
- **all**：支持所有协议。',
              'type' => 'string',
              'required' => false,
              'example' => 'tcp',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        5 => 
        array (
          'name' => 'DestinationPort',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '目标端口范围。最多支持20个访问目标端口。取值范围：

- TCP、UDP协议：1~65535。使用正斜线（/）隔开起始端口和终止端口。例如：1/200。
- ICMP协议：-1/-1。
- ALL：-1/-1。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '目标端口范围。最多支持20个访问目标端口。取值范围：

- TCP、UDP协议：1~65535。使用正斜线（/）隔开起始端口和终止端口。例如：1/200。
- ICMP协议：-1/-1。
- ALL：-1/-1。',
              'type' => 'string',
              'required' => false,
              'example' => '80/80',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        6 => 
        array (
          'name' => 'AuthorizationRuleStatus',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '授权规则状态。最多支持20个授权规则状态。取值：

- **Creating**：创建中。

- **Created**：创建完成。

- **Deleting**：删除中。

- **Updating**：更新中。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '授权规则状态。最多支持20个授权规则状态。取值：

- **Creating**：创建中。

- **Created**：创建完成。

- **Deleting**：删除中。

- **Updating**：更新中。',
              'type' => 'string',
              'required' => false,
              'example' => 'Created',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        7 => 
        array (
          'name' => 'AuthorizationRuleName',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '授权规则的名称。最多支持20个授权规则名称。

名称长度为2~128个字符，以大小写字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '授权规则的名称。最多支持20个授权规则名称。

名称长度为2~128个字符，以大小写字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
              'type' => 'string',
              'required' => false,
              'example' => 'ruletest',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        8 => 
        array (
          'name' => 'Policy',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '访问策略。最多支持20个访问策略。取值：

- **Permit**：允许。

- **Deny**：拒绝。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '访问策略。最多支持20个访问策略。取值：

- **Permit**：允许。

- **Deny**：拒绝。',
              'type' => 'string',
              'required' => false,
              'example' => 'Permit',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        9 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。',
            'type' => 'string',
            'required' => false,
            'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
          ),
        ),
        10 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值：**1**~**50**。默认值：**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        11 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组所在的地域ID。

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        12 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则的类型。取值：

- **System**，表示授权规则的类型为系统类型。
- **Customer**：表示授权规则的类型为自定义类型。
- **Default**：表示授权规则的类型为默认类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'System',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'TotalCount' => 
              array (
                'description' => '总列表条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'MaxResults' => 
              array (
                'description' => '分批次查询时每次显示的条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'GroupAuthorizationRules' => 
              array (
                'description' => '授权规则列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '授权规则列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'IoTCloudConnectorGroupId' => 
                    array (
                      'description' => '实例组ID。',
                      'type' => 'string',
                      'example' => 'iotccg-g00epppbi9di9y****',
                    ),
                    'Policy' => 
                    array (
                      'description' => '访问策略。取值：

- **Permit**：允许。

- **Deny**：拒绝。',
                      'type' => 'string',
                      'example' => 'Permit',
                    ),
                    'AuthorizationRuleStatus' => 
                    array (
                      'description' => '授权规则状态。取值：

- **Creating**：创建中。

- **Created**：创建完成。

- **Deleting**：删除中。

- **Updating**：更新中。',
                      'type' => 'string',
                      'example' => 'Created',
                    ),
                    'SourceCidrs' => 
                    array (
                      'description' => '源CIDR地址块。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '源CIDR地址块。',
                        'type' => 'string',
                        'example' => '192.168.0.0/32',
                      ),
                    ),
                    'DestinationType' => 
                    array (
                      'description' => '访问目标类型。取值：
- **Cidr**：CIDR地址块。
- **Domain**：域名。',
                      'type' => 'string',
                      'example' => 'Cidr',
                    ),
                    'DestinationPort' => 
                    array (
                      'description' => '目标端口范围。取值范围：

- TCP、UDP协议：1~65535。使用正斜线（/）隔开起始端口和终止端口。例如：1/200。
- ICMP协议：-1/-1。
- ALL：-1/-1。',
                      'type' => 'string',
                      'example' => '80/80',
                    ),
                    'Protocol' => 
                    array (
                      'description' => '协议类型。取值：

- **tcp**。
- **udp**。
- **icmp**。
- **all**：支持所有协议。',
                      'type' => 'string',
                      'example' => 'tcp',
                    ),
                    'Destination' => 
                    array (
                      'description' => '访问目标地址。',
                      'type' => 'string',
                      'example' => '47.0.XX.XX',
                    ),
                    'AuthorizationRuleName' => 
                    array (
                      'description' => '授权规则的名称。',
                      'type' => 'string',
                      'example' => 'ruletest',
                    ),
                    'AuthorizationRuleDescription' => 
                    array (
                      'description' => '授权规则的描述信息。',
                      'type' => 'string',
                      'example' => 'rule',
                    ),
                    'AuthorizationRuleId' => 
                    array (
                      'description' => '授权规则ID。',
                      'type' => 'string',
                      'example' => 'gar-ez91t41jvi6tr8****',
                    ),
                    'Type' => 
                    array (
                      'description' => '授权规则的类型。取值：

- **System**，表示授权规则的类型为系统类型。
- **Customer**：表示授权规则的类型为自定义类型。
- **Default**：表示授权规则的类型为默认类型。',
                      'type' => 'string',
                      'example' => 'System',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnectorGroup',
            'errorMessage' => 'The param of IoTCloudConnectorGroupId is illegal.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"TotalCount\\": 10,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 10,\\n  \\"GroupAuthorizationRules\\": [\\n    {\\n      \\"IoTCloudConnectorGroupId\\": \\"iotccg-g00epppbi9di9y****\\",\\n      \\"Policy\\": \\"Permit\\",\\n      \\"AuthorizationRuleStatus\\": \\"Created\\",\\n      \\"SourceCidrs\\": [\\n        \\"192.168.0.0/32\\"\\n      ],\\n      \\"DestinationType\\": \\"Cidr\\",\\n      \\"DestinationPort\\": \\"80/80\\",\\n      \\"Protocol\\": \\"tcp\\",\\n      \\"Destination\\": \\"47.0.XX.XX\\",\\n      \\"AuthorizationRuleName\\": \\"ruletest\\",\\n      \\"AuthorizationRuleDescription\\": \\"rule\\",\\n      \\"AuthorizationRuleId\\": \\"gar-ez91t41jvi6tr8****\\",\\n      \\"Type\\": \\"System\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListGroupAuthorizationRulesResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <TotalCount>10</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>10</MaxResults>\\n    <GroupAuthorizationRules>\\n        <IoTCloudConnectorGroupId>iotccg-g00epppbi9di9y****</IoTCloudConnectorGroupId>\\n        <Policy>Permit</Policy>\\n        <AuthorizationRuleStatus>Created</AuthorizationRuleStatus>\\n        <SourceCidrs>192.168.0.0/32</SourceCidrs>\\n        <DestinationType>Cidr</DestinationType>\\n        <DestinationPort>80/80</DestinationPort>\\n        <Protocol>tcp</Protocol>\\n        <Destination>47.0.XX.XX</Destination>\\n        <AuthorizationRuleName>ruletest</AuthorizationRuleName>\\n        <AuthorizationRuleDescription>rule</AuthorizationRuleDescription>\\n        <AuthorizationRuleId>gar-ez91t41jvi6tr8****</AuthorizationRuleId>\\n        <Type>System</Type>\\n    </GroupAuthorizationRules>\\n</ListGroupAuthorizationRulesResponse>","errorExample":""}]',
      'title' => '查询实例组的授权规则',
    ),
    'DeleteGroupAuthorizationRule' => 
    array (
      'summary' => '删除实例组的授权规则。',
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
          'name' => 'IoTCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotccg-g00epppbi9di9y****',
          ),
        ),
        1 => 
        array (
          'name' => 'AuthorizationRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gar-ez91t41jvi6tr8****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会删除实例组的授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组所在的地域ID。

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'QuotaExceeded.IoTCCGroupInstanceLimit',
            'errorMessage' => 'The quota of IoTCCGroupPerUser is exceeded',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteGroupAuthorizationRuleResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n</DeleteGroupAuthorizationRuleResponse>","errorExample":""}]',
      'title' => '删除实例组的授权规则',
    ),
    'GrantVirtualBorderRouter' => 
    array (
      'summary' => '获取边界路由器VBR的服务关联角色SLR权限。',
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
          'name' => 'VirtualBorderRouterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '边界路由器VBR实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vbr-bp1svadp4lq38janc****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '边界路由器VBR实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。  ',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
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
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\"\\n}","errorExample":""},{"type":"xml","example":"<GrantVirtualBorderRouterResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n</GrantVirtualBorderRouterResponse>","errorExample":""}]',
      'title' => '授权绑定VBR',
    ),
    'CreateDNSServiceRule' => 
    array (
      'summary' => '创建DNS授权规则。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-1y6h8z7imd2yu4****',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS授权规则的目标类型。取值：

- **Normal**：普通类型。

- **DNSRedirect**：重定向类型，重定向类型指将当前DNS服务地址重定向至另一个地址。',
            'type' => 'string',
            'required' => true,
            'example' => 'Normal',
          ),
        ),
        2 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '重定向后的DNS服务地址。

> 当**ServiceType**参数取值为**DNSRedirect**时，该参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.0.2',
          ),
        ),
        3 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源DNS IP地址。取值：

**100.100.2.136**，**100.100.2.137**，**100.100.2.138**，**114.114.114.114**，**8.8.8.8**，**8.8.4.4**，**223.5.5.5**，**223.6.6.6**，**221.5.88.88**，**116.116.116.116**，**221.228.15.26**，**61.139.2.69**，**218.6.200.139**，**119.29.29.29**，**218.2.2.2**，**208.67.220.220**，**208.67.222.222**，**218.4.4.4**。

<props="china">除以上默认的DNS授权规则的IP，如有其他DNS授权规则的IP诉求，请[提交工单](https://selfservice.console.aliyun.com/ticket/category/ga/today)，并在工单中附上需要申请的DNS授权规则的IP。
</props>

<props="intl">除以上默认的DNS授权规则的IP，如有其他DNS授权规则的IP诉求，请[提交工单](https://workorder-intl.console.aliyun.com/?spm=5176.11182188.console-base-top.dworkorder.18ae4882n3v6ZW#/ticket/createIndex)，并在工单中附上需要申请的DNS授权规则的IP。</props>',
            'type' => 'string',
            'required' => true,
            'example' => '100.100.2.138',
          ),
        ),
        4 => 
        array (
          'name' => 'DNSServiceRuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS授权规则名称。

长度为2~128个英文或中文字符，开头必须为大小写英文字母或中文，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        5 => 
        array (
          'name' => 'DNSServiceRuleDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS授权规则描述。

长度为2~256个字符，开头必须为大小写英文字母或中文，但不能为`http://`或`https://`。',
            'type' => 'string',
            'required' => false,
            'example' => 'description',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        7 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会创建DNS授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行创建。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS授权规则所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
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
                'example' => 'BC6D1C1D-6DBD-568C-B867-BC9CA699ED01',
              ),
              'DNSServiceRuleId' => 
              array (
                'description' => 'DNS授权规则ID。',
                'type' => 'string',
                'example' => 'ar-r56ijpurlu50gi****',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.DomainFeatureDisabled',
            'errorMessage' => 'The operation is not allowed because of domain feature disabled.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalParam.Destination',
            'errorMessage' => 'The param of Destination is illegal.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceAlreadyExist.AuthorizationRule',
            'errorMessage' => 'The specified resource of AuthorizationRule already exists.',
          ),
          4 => 
          array (
            'errorCode' => 'Conflict.Param',
            'errorMessage' => 'The param is conflict.',
          ),
          5 => 
          array (
            'errorCode' => 'Conflict.Cidr',
            'errorMessage' => 'The cidr is conflict.',
          ),
          6 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
          7 => 
          array (
            'errorCode' => 'QuotaExceeded.sourceCidrLimit',
            'errorMessage' => 'The quota of SourceCidrsPerAuthorizationRule is exceeded',
          ),
          8 => 
          array (
            'errorCode' => 'IllegalParam',
            'errorMessage' => 'The param is illegal.',
          ),
          9 => 
          array (
            'errorCode' => 'QuotaExceeded.authorizationRuleInstanceLimit',
            'errorMessage' => 'The quota of AuthorizationRulePerIotCC is exceeded',
          ),
          10 => 
          array (
            'errorCode' => 'IllegalParamFormat',
            'errorMessage' => 'The param is illegal.',
          ),
          11 => 
          array (
            'errorCode' => 'ResourceInConfiguring.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCloudConnector is configuring, please try again later.',
          ),
          12 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BC6D1C1D-6DBD-568C-B867-BC9CA699ED01\\",\\n  \\"DNSServiceRuleId\\": \\"ar-r56ijpurlu50gi****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDNSServiceRuleResponse>\\n    <RequestId>BC6D1C1D-6DBD-568C-B867-BC9CA699ED01</RequestId>\\n    <DNSServiceRuleId>ar-r56ijpurlu50gi****</DNSServiceRuleId>\\n</CreateDNSServiceRuleResponse>","errorExample":""}]',
      'title' => '创建DNS授权规则',
    ),
    'UpdateDNSServiceRuleAttribute' => 
    array (
      'summary' => '修改DNS授权规则。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-1y6h8z7imd2yu4****',
          ),
        ),
        1 => 
        array (
          'name' => 'DNSServiceRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS授权规则ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ar-r56ijpurlu50gi****',
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS授权规则的目标类型。取值：

- **Normal**：普通类型。

- **DNSRedirect**：重定向类型，重定向类型指将当前DNS服务地址重定向至另一个地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'Normal',
          ),
        ),
        3 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '重定向后的DNS服务地址。

>  当**ServiceType**参数取值为**DNSRedirect**时，该参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.0.2',
          ),
        ),
        4 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源DNS IP地址。包括但不限于以下取值：

**100.100.2.136**，**100.100.2.137**，**100.100.2.138**，**114.114.114.114**，**8.8.8.8**，**8.8.4.4**，**223.5.5.5**，**223.6.6.6**，**221.5.88.88**，**116.116.116.116**，**221.228.15.26**，**61.139.2.69**，**218.6.200.139**，**119.29.29.29**，**218.2.2.2**，**208.67.220.220**，**208.67.222.222**，**218.4.4.4**。

<props="china">除以上默认的DNS授权规则的IP，如有其他DNS授权规则的IP诉求，请[提交工单](https://selfservice.console.aliyun.com/ticket/category/ga/today)，并在工单中附上需要申请的DNS授权规则的IP。
</props>

<props="intl">除以上默认的DNS授权规则的IP，如有其他DNS授权规则的IP诉求，请[提交工单](https://workorder-intl.console.aliyun.com/?spm=5176.11182188.console-base-top.dworkorder.18ae4882n3v6ZW#/ticket/createIndex)，并在工单中附上需要申请的DNS授权规则的IP。</props>',
            'type' => 'string',
            'required' => false,
            'example' => '100.100.2.138',
          ),
        ),
        5 => 
        array (
          'name' => 'DNSServiceRuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS授权规则名称。

长度为2~128个英文或中文字符，开头必须为大小写英文字母或中文，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        6 => 
        array (
          'name' => 'DNSServiceRuleDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS授权规则描述。

长度为2~256个字符，开头必须为大小写英文字母或中文，但不能为`http://`或`https://`。',
            'type' => 'string',
            'required' => false,
            'example' => 'description',
          ),
        ),
        7 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        8 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会修改DNS授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行修改。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        9 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS授权规则所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
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
                'example' => 'BC6D1C1D-6DBD-568C-B867-BC9CA699ED01',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.NoParamModify',
            'errorMessage' => 'The operation is not allowed because of no param modified.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
          3 => 
          array (
            'errorCode' => 'QuotaExceeded.sourceCidrLimit',
            'errorMessage' => 'The quota of SourceCidrsPerAuthorizationRule is exceeded',
          ),
          4 => 
          array (
            'errorCode' => 'QuotaExceeded.authorizationRuleInstanceLimit',
            'errorMessage' => 'The quota of AuthorizationRulePerIotCC is exceeded',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalParamFormat',
            'errorMessage' => 'The param is illegal.',
          ),
          6 => 
          array (
            'errorCode' => 'IllegalParam',
            'errorMessage' => 'The param is illegal.',
          ),
          7 => 
          array (
            'errorCode' => 'ResourceInConfiguring.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCloudConnector is configuring, please try again later.',
          ),
          8 => 
          array (
            'errorCode' => 'ResourceNotFound.AuthorizationRule',
            'errorMessage' => 'The param of AuthorizationRuleId is illegal.',
          ),
          9 => 
          array (
            'errorCode' => 'IllegalParam.Destination',
            'errorMessage' => 'The param of Destination is illegal.',
          ),
          10 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BC6D1C1D-6DBD-568C-B867-BC9CA699ED01\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateDNSServiceRuleAttributeResponse>\\n    <RequestId>BC6D1C1D-6DBD-568C-B867-BC9CA699ED01</RequestId>\\n</UpdateDNSServiceRuleAttributeResponse>","errorExample":""}]',
      'title' => '修改DNS授权规则',
    ),
    'ListDNSServiceRules' => 
    array (
      'summary' => '查询DNS授权规则。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-1y6h8z7imd2yu4****',
          ),
        ),
        1 => 
        array (
          'name' => 'DNSServiceRuleIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'DNS授权规则ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'DNS授权规则ID。最多支持输入20个规则ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'ar-c1dk4jb73j5791****',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS授权规则的目标类型。取值：

- **Normal**：普通类型。

- **DNSRedirect**：重定向类型，重定向类型指将当前DNS服务地址重定向至另一个地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'Normal',
          ),
        ),
        3 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '目标DNS授权规则IP地址。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '重定向后的DNS服务地址。最多支持输入20个目标IP地址。

> 当**ServiceType**参数取值为**DNSRedirect**时，该参数必选。',
              'type' => 'string',
              'required' => false,
              'example' => '192.168.0.2',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        4 => 
        array (
          'name' => 'DNSServiceRuleStatus',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'DNS授权规则的状态。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'DNS授权规则的状态。最多支持输入20个DNS授权规则状态。取值：

- **Creating**：创建中。

- **Created**：创建完成。

- **Deleting**：删除中。

- **Updating**：更新中。',
              'type' => 'string',
              'required' => false,
              'example' => 'Created',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        5 => 
        array (
          'name' => 'DNSServiceRuleName',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'DNS授权规则名称。最多支持输入20个规则名称。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'DNS授权规则名称。最多支持输入20个规则名称。

长度为2~128个英文或中文字符，开头必须为大小写英文字母或中文，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
              'type' => 'string',
              'required' => false,
              'example' => 'test',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        6 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '源DNS授权规则IP地址。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '源DNS IP地址。最多支持输入20个源IP地址。包括但不限于以下取值：

**100.100.2.136**，**100.100.2.137**，**100.100.2.138**，**114.114.114.114**，**8.8.8.8**，**8.8.4.4**，**223.5.5.5**，**223.6.6.6**，**221.5.88.88**，**116.116.116.116**，**221.228.15.26**，**61.139.2.69**，**218.6.200.139**，**119.29.29.29**，**218.2.2.2**，**208.67.220.220**，**208.67.222.222**，**218.4.4.4**。


<props="china">除以上默认的DNS授权规则的IP，如有其他DNS授权规则的IP诉求，请[提交工单](https://selfservice.console.aliyun.com/ticket/category/ga/today)，并在工单中附上需要申请的DNS授权规则的IP。
</props>

<props="intl">除以上默认的DNS授权规则的IP，如有其他DNS授权规则的IP诉求，请[提交工单](https://workorder-intl.console.aliyun.com/?spm=5176.11182188.console-base-top.dworkorder.18ae4882n3v6ZW#/ticket/createIndex)，并在工单中附上需要申请的DNS授权规则的IP。</props>
',
              'type' => 'string',
              'required' => false,
              'example' => '100.100.2.138',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        7 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
            'type' => 'string',
            'required' => false,
            'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
          ),
        ),
        8 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值：**1~50**。默认值：**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        9 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。

您可以通过调用[DescribeRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4A63118E-B375-5718-8F03-30F6804E1DCD',
              ),
              'TotalCount' => 
              array (
                'description' => '总列表条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'MaxResults' => 
              array (
                'description' => '分批次查询时每次显示的条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'DNSServiceRules' => 
              array (
                'description' => 'DNS授权规则列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'DNS授权规则列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'IoTCloudConnectorId' => 
                    array (
                      'description' => '云连接器实例ID。',
                      'type' => 'string',
                      'example' => 'iotcc-1y6h8z7imd2yu4****',
                    ),
                    'ServiceType' => 
                    array (
                      'description' => 'DNS授权规则的目标类型。取值：

- **Normal**：普通类型。

- **DNSRedirect**：重定向类型，重定向类型指将当前DNS服务地址重定向至另一个地址。',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'Source' => 
                    array (
                      'description' => '源DNS IP地址。包括但不限于以下取值：

**100.100.2.136**，**100.100.2.137**，**100.100.2.138**，**114.114.114.114**，**8.8.8.8**，**8.8.4.4**，**223.5.5.5**，**223.6.6.6**，**221.5.88.88**，**116.116.116.116**，**221.228.15.26**，**61.139.2.69**，**218.6.200.139**，**119.29.29.29**，**218.2.2.2**，**208.67.220.220**，**208.67.222.222**，**218.4.4.4**。


<props="china">除以上默认的DNS授权规则的IP，如有其他DNS授权规则的IP诉求，请[提交工单](https://selfservice.console.aliyun.com/ticket/category/ga/today)，并在工单中附上需要申请的DNS授权规则的IP。
</props>

<props="intl">除以上默认的DNS授权规则的IP，如有其他DNS授权规则的IP诉求，请[提交工单](https://workorder-intl.console.aliyun.com/?spm=5176.11182188.console-base-top.dworkorder.18ae4882n3v6ZW#/ticket/createIndex)，并在工单中附上需要申请的DNS授权规则的IP。</props>
',
                      'type' => 'string',
                      'example' => '100.100.2.138',
                    ),
                    'Destination' => 
                    array (
                      'description' => '重定向后的DNS服务地址。

> 当**ServiceType**参数取值为**DNSRedirect**时，该参数必选。',
                      'type' => 'string',
                      'example' => '192.168.0.2',
                    ),
                    'DNSServiceRuleStatus' => 
                    array (
                      'description' => 'DNS授权规则的状态。取值：

- **Creating**：创建中。

- **Created**：创建完成。

- **Deleting**：删除中。

- **Updating**：更新中。
',
                      'type' => 'string',
                      'example' => 'Created',
                    ),
                    'DNSServiceRuleName' => 
                    array (
                      'description' => 'DNS授权规则名称。

长度为2~128个英文或中文字符，开头必须为大小写英文字母或中文，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'DNSServiceRuleDescription' => 
                    array (
                      'description' => 'DNS授权规则描述。

长度为2~256个字符，开头必须为大小写英文字母或中文，但不能为`http://`或`https://`。',
                      'type' => 'string',
                      'example' => 'description',
                    ),
                    'DNSServiceRuleId' => 
                    array (
                      'description' => 'DNS授权规则ID。',
                      'type' => 'string',
                      'example' => 'ar-c1dk4jb73j5791****',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4A63118E-B375-5718-8F03-30F6804E1DCD\\",\\n  \\"TotalCount\\": 10,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 10,\\n  \\"DNSServiceRules\\": [\\n    {\\n      \\"IoTCloudConnectorId\\": \\"iotcc-1y6h8z7imd2yu4****\\",\\n      \\"ServiceType\\": \\"Normal\\",\\n      \\"Source\\": \\"100.100.2.138\\",\\n      \\"Destination\\": \\"192.168.0.2\\",\\n      \\"DNSServiceRuleStatus\\": \\"Created\\",\\n      \\"DNSServiceRuleName\\": \\"test\\",\\n      \\"DNSServiceRuleDescription\\": \\"description\\",\\n      \\"DNSServiceRuleId\\": \\"ar-c1dk4jb73j5791****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListDNSServiceRulesResponse>\\n    <RequestId>4A63118E-B375-5718-8F03-30F6804E1DCD</RequestId>\\n    <TotalCount>10</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>10</MaxResults>\\n    <DNSServiceRules>\\n        <IoTCloudConnectorId>iotcc-1y6h8z7imd2yu4****</IoTCloudConnectorId>\\n        <ServiceType>Normal</ServiceType>\\n        <Source>100.100.2.138</Source>\\n        <Destination>192.168.0.2</Destination>\\n        <DNSServiceRuleStatus>Created</DNSServiceRuleStatus>\\n        <DNSServiceRuleName>test</DNSServiceRuleName>\\n        <DNSServiceRuleDescription>description</DNSServiceRuleDescription>\\n        <DNSServiceRuleId>ar-c1dk4jb73j5791****</DNSServiceRuleId>\\n    </DNSServiceRules>\\n</ListDNSServiceRulesResponse>","errorExample":""}]',
      'title' => '查询DNS授权规则',
    ),
    'DeleteDNSServiceRule' => 
    array (
      'summary' => '删除DNS授权规则。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-1y6h8z7imd2yu4****',
          ),
        ),
        1 => 
        array (
          'name' => 'DNSServiceRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS授权规则ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ar-r56ijpurlu50gi****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会删除DNS授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接删除DNS授权规则。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS授权规则所在的地域ID。

> 目前，支持开通云连接器的地域：华东1（杭州）、华东2（上海）、华北1（青岛）、华北2（北京）、华北5（呼和浩特）、华北6（乌兰察布）、华南1（深圳）、华南3（广州）、西南1（成都）、德国（法兰克福）。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
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
                'example' => 'BC6D1C1D-6DBD-568C-B867-BC9CA699ED01',
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
            'errorCode' => 'OperationDenied.IotCloudConnectorInGroup',
            'errorMessage' => 'The operation is not allowed because of IotCloudConnector In Group.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceInConfiguring.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCloudConnector is configuring, please try again later.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.AuthorizationRule',
            'errorMessage' => 'The param of AuthorizationRuleId is illegal.',
          ),
          4 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalParam.AuthoriztionRuleId',
            'errorMessage' => 'The param of AuthoriztionRuleId is illegal.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BC6D1C1D-6DBD-568C-B867-BC9CA699ED01\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDNSServiceRuleResponse>\\n    <RequestId>BC6D1C1D-6DBD-568C-B867-BC9CA699ED01</RequestId>\\n</DeleteDNSServiceRuleResponse>","errorExample":""}]',
      'title' => '删除DNS授权规则',
    ),
    'MoveAuthorizationRuleToDNSService' => 
    array (
      'summary' => '将授权规则转移到DNS授权规则中。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-1y6h8z7imd2yu4****',
          ),
        ),
        1 => 
        array (
          'name' => 'AuthorizationRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ar-la6sn6gng90e1x****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会转移授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行转移。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。

>  目前，支持开通云连接器的地域：华东1（杭州）、华东2（上海）、华北1（青岛）、华北2（北京）、华北5（呼和浩特）、华北6（乌兰察布）、华南1（深圳）、华南3（广州）、西南1（成都）、德国（法兰克福）。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '862D2D7E-E6A9-5645-9CA0-64B520256A7B',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'QuotaExceeded.IoTCCGroupInstanceLimit',
            'errorMessage' => 'The quota of IoTCCGroupPerUser is exceeded',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"862D2D7E-E6A9-5645-9CA0-64B520256A7B\\"\\n}","errorExample":""},{"type":"xml","example":"<MoveAuthorizationRuleToDNSServiceResponse>\\n    <RequestId>862D2D7E-E6A9-5645-9CA0-64B520256A7B</RequestId>\\n</MoveAuthorizationRuleToDNSServiceResponse>","errorExample":""}]',
      'title' => '授权规则转移到DNS授权规则',
      'description' => '> 只允许将授权规则中访问目标类型为**Cidr**且目的地址为DNS IP的规则转移到DNS授权规则中，您可以通过调用[ListAuthorizationRules](~~298298~~)接口查看实例组授权规则的访问目标类型和目的地址。',
    ),
    'CreateGroupDNSServiceRule' => 
    array (
      'summary' => '实例组创建DNS授权规则。',
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
          'name' => 'IoTCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotccg-g00epppbi9di9y****',
          ),
        ),
        1 => 
        array (
          'name' => 'DNSServiceRuleDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS授权规则描述。

长度为2~256个字符，开头必须为大小写英文字母或中文，但不能为`http://`或`https://`。',
            'type' => 'string',
            'required' => false,
            'example' => 'description',
          ),
        ),
        2 => 
        array (
          'name' => 'DNSServiceRuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS授权规则名称。

长度为2~128个英文或中文字符，开头必须为大小写英文字母或中文，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源DNS授权规则IP地址。包括但不限于以下取值：

**100.100.2.136**，**100.100.2.137**，**100.100.2.138**，**114.114.114.114**，**8.8.8.8**，**8.8.4.4**，**223.5.5.5**，**223.6.6.6**，**221.5.88.88**，**116.116.116.116**，**221.228.15.26**，**61.139.2.69**，**218.6.200.139**，**119.29.29.29**，**218.2.2.2**，**208.67.220.220**，**208.67.222.222**，**218.4.4.4**。

<props="china">除以上默认的DNS授权规则的IP，如有其他DNS授权规则的IP诉求，请[提交工单](https://selfservice.console.aliyun.com/ticket/category/ga/today)，并在工单中附上需要申请的DNS授权规则的IP。
</props>

<props="intl">除以上默认的DNS授权规则的IP，如有其他DNS授权规则的IP诉求，请[提交工单](https://workorder-intl.console.aliyun.com/?spm=5176.11182188.console-base-top.dworkorder.18ae4882n3v6ZW#/ticket/createIndex)，并在工单中附上需要申请的DNS授权规则的IP。</props>
',
            'type' => 'string',
            'required' => true,
            'example' => '100.100.2.136',
          ),
        ),
        4 => 
        array (
          'name' => 'ServiceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS授权规则的目标类型。取值：

- **Normal**：表示目标类型为DNS普通类型。

- **DNSRedirect**：表示目标类型为DNS重定向类型。',
            'type' => 'string',
            'required' => true,
            'example' => 'Normal',
          ),
        ),
        5 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标DNS授权规则IP地址。

> 当**ServiceType**参数取值为**DNSRedirect**时，该参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.0.2',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。


> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        7 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会创建DNS授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行创建。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例组所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
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
              'IoTCloudConnectorGroupId' => 
              array (
                'description' => '云连接器实例组ID。',
                'type' => 'string',
                'example' => 'iotccg-g00epppbi9di9y****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '77111A6A-56BA-59B2-8CAA-7CBF21648FB8',
              ),
              'DNSServiceRuleId' => 
              array (
                'description' => 'DNS授权规则ID。',
                'type' => 'string',
                'example' => 'gar-ffnn1ewe2nmf3y****',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'QuotaExceeded.IoTCCGroupInstanceLimit',
            'errorMessage' => 'The quota of IoTCCGroupPerUser is exceeded',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceAlreadyExist.AuthorizationRule',
            'errorMessage' => 'The specified resource of AuthorizationRule already exists.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"IoTCloudConnectorGroupId\\": \\"iotccg-g00epppbi9di9y****\\",\\n  \\"RequestId\\": \\"77111A6A-56BA-59B2-8CAA-7CBF21648FB8\\",\\n  \\"DNSServiceRuleId\\": \\"gar-ffnn1ewe2nmf3y****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateGroupDNSServiceRuleResponse>\\n    <IoTCloudConnectorGroupId>iotccg-g00epppbi9di9y****</IoTCloudConnectorGroupId>\\n    <RequestId>77111A6A-56BA-59B2-8CAA-7CBF21648FB8</RequestId>\\n    <DNSServiceRuleId>gar-ffnn1ewe2nmf3y****</DNSServiceRuleId>\\n</CreateGroupDNSServiceRuleResponse>","errorExample":""}]',
      'title' => '实例组创建DNS授权规则',
    ),
    'UpdateGroupDNSServiceRuleAttribute' => 
    array (
      'summary' => '修改实例组的DNS授权规则。',
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
          'name' => 'IoTCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotccg-g00epppbi9di9y****',
          ),
        ),
        1 => 
        array (
          'name' => 'DNSServiceRuleDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS授权规则描述。

长度为2~256个字符，开头必须为大小写英文字母或中文，但不能为`http://`或`https://`。',
            'type' => 'string',
            'required' => false,
            'example' => 'description',
          ),
        ),
        2 => 
        array (
          'name' => 'DNSServiceRuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS授权规则名称。

长度为2~128个英文或中文字符，开头必须为大小写英文字母或中文，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'DNSServiceRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS授权规则ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gar-ffnn1ewe2nmf3y****',
          ),
        ),
        4 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源DNS授权规则IP地址。包括但不限于以下取值：

**100.100.2.136**，**100.100.2.137**，**100.100.2.138**，**114.114.114.114**，**8.8.8.8**，**8.8.4.4**，**223.5.5.5**，**223.6.6.6**，**221.5.88.88**，**116.116.116.116**，**221.228.15.26**，**61.139.2.69**，**218.6.200.139**，**119.29.29.29**，**218.2.2.2**，**208.67.220.220**，**208.67.222.222**，**218.4.4.4**。

<props="china">除以上默认的DNS授权规则的IP，如有其他DNS授权规则的IP诉求，请[提交工单](https://selfservice.console.aliyun.com/ticket/category/ga/today)，并在工单中附上需要申请的DNS授权规则的IP。
</props>

<props="intl">除以上默认的DNS授权规则的IP，如有其他DNS授权规则的IP诉求，请[提交工单](https://workorder-intl.console.aliyun.com/?spm=5176.11182188.console-base-top.dworkorder.18ae4882n3v6ZW#/ticket/createIndex)，并在工单中附上需要申请的DNS授权规则的IP。</props>
',
            'type' => 'string',
            'required' => false,
            'example' => '100.100.2.136',
          ),
        ),
        5 => 
        array (
          'name' => 'ServiceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS授权规则的目标类型。取值：

- **Normal**：表示目标类型为DNS普通类型。

- **DNSRedirect**：表示目标类型为DNS重定向类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'Normal',
          ),
        ),
        6 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标DNS授权规则IP地址。

> 当**ServiceType**参数取值为**DNSRedirect**时，该参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.0.2',
          ),
        ),
        7 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。


> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        8 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会修改DNS授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行修改。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        9 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例组所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
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
                'example' => '77111A6A-56BA-59B2-8CAA-7CBF21648FB8',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'QuotaExceeded.IoTCCGroupInstanceLimit',
            'errorMessage' => 'The quota of IoTCCGroupPerUser is exceeded',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"77111A6A-56BA-59B2-8CAA-7CBF21648FB8\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateGroupDNSServiceRuleAttributeResponse>\\n    <RequestId>77111A6A-56BA-59B2-8CAA-7CBF21648FB8</RequestId>\\n</UpdateGroupDNSServiceRuleAttributeResponse>","errorExample":""}]',
      'title' => '改实例组的DNS授权规则',
    ),
    'ListGroupDNSServiceRules' => 
    array (
      'summary' => '查询实例组的DNS授权规则。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IoTCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotccg-g00epppbi9di9y****',
          ),
        ),
        1 => 
        array (
          'name' => 'DNSServiceRuleIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'DNS授权规则ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'DNS授权规则ID。最多支持输入20个规则ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'gar-ffnn1ewe2nmf3y****',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS授权规则的目标类型。取值：

- **Normal**：表示目标类型为DNS普通类型。

- **DNSRedirect**：表示目标类型为DNS重定向类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'Normal',
          ),
        ),
        3 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '目标DNS授权规则IP地址。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '目标DNS授权规则IP地址。最多支持输入20个目标IP地址。

> 当**ServiceType**参数取值为**DNSRedirect**时，该参数必选。',
              'type' => 'string',
              'required' => false,
              'example' => '192.168.0.2',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        4 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '源DNS授权规则IP地址。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '源DNS授权规则IP地址。最多支持输入20个源IP地址。包括但不限于以下取值：

**100.100.2.136**，**100.100.2.137**，**100.100.2.138**，**114.114.114.114**，**8.8.8.8**，**8.8.4.4**，**223.5.5.5**，**223.6.6.6**，**221.5.88.88**，**116.116.116.116**，**221.228.15.26**，**61.139.2.69**，**218.6.200.139**，**119.29.29.29**，**218.2.2.2**，**208.67.220.220**，**208.67.222.222**，**218.4.4.4**。

<props="china">除以上默认的DNS授权规则的IP，如有其他DNS授权规则的IP诉求，请[提交工单](https://selfservice.console.aliyun.com/ticket/category/ga/today)，并在工单中附上需要申请的DNS授权规则的IP。</props>

<props="intl">除以上默认的DNS授权规则的IP，如有其他DNS授权规则的IP诉求，请[提交工单](https://workorder-intl.console.aliyun.com/?spm=5176.11182188.console-base-top.dworkorder.18ae4882n3v6ZW#/ticket/createIndex)，并在工单中附上需要申请的DNS授权规则的IP。</props>
',
              'type' => 'string',
              'required' => false,
              'example' => '100.100.2.136',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        5 => 
        array (
          'name' => 'DNSServiceRuleStatus',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'DNS授权规则的状态。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'DNS授权规则的状态。最多支持输入20个DNS授权规则状态。取值：

- **Creating**：创建中。

- **Created**：创建完成。

- **Deleting**：删除中。

- **Updating**：更新中。',
              'type' => 'string',
              'required' => false,
              'example' => 'Created',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        6 => 
        array (
          'name' => 'DNSServiceRuleName',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'DNS授权规则名称。最多支持输入20个规则名称。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'DNS授权规则名称。最多支持输入20个规则名称。

长度为2~128个英文或中文字符，开头必须为大小写英文字母或中文，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
              'type' => 'string',
              'required' => false,
              'example' => 'test',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        7 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
            'type' => 'string',
            'required' => false,
            'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
          ),
        ),
        8 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值：**1~50**。默认值：**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        9 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例组所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '77111A6A-56BA-59B2-8CAA-7CBF21648FB8',
              ),
              'TotalCount' => 
              array (
                'description' => '总列表条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'MaxResults' => 
              array (
                'description' => '分批次查询时每次显示的条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'DNSServiceRules' => 
              array (
                'description' => 'DNS授权规则列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'DNS授权规则列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'IoTCloudConnectorGroupId' => 
                    array (
                      'description' => '云连接器实例组ID。',
                      'type' => 'string',
                      'example' => 'iotccg-g00epppbi9di9y****',
                    ),
                    'DNSServiceRuleStatus' => 
                    array (
                      'description' => 'DNS授权规则的状态。取值：

- **Creating**：创建中。

- **Created**：创建完成。

- **Deleting**：删除中。

- **Updating**：更新中。',
                      'type' => 'string',
                      'example' => 'Created',
                    ),
                    'Source' => 
                    array (
                      'description' => '源DNS授权规则IP地址。包括但不限于以下取值：

**100.100.2.136**，**100.100.2.137**，**100.100.2.138**，**114.114.114.114**，**8.8.8.8**，**8.8.4.4**，**223.5.5.5**，**223.6.6.6**，**221.5.88.88**，**116.116.116.116**，**221.228.15.26**，**61.139.2.69**，**218.6.200.139**，**119.29.29.29**，**218.2.2.2**，**208.67.220.220**，**208.67.222.222**，**218.4.4.4**。

<props="china">除以上默认的DNS授权规则的IP，如有其他DNS授权规则的IP诉求，请[提交工单](https://selfservice.console.aliyun.com/ticket/category/ga/today)，并在工单中附上需要申请的DNS授权规则的IP。
</props>

<props="intl">除以上默认的DNS授权规则的IP，如有其他DNS授权规则的IP诉求，请[提交工单](https://workorder-intl.console.aliyun.com/?spm=5176.11182188.console-base-top.dworkorder.18ae4882n3v6ZW#/ticket/createIndex)，并在工单中附上需要申请的DNS授权规则的IP。</props>
',
                      'type' => 'string',
                      'example' => '100.100.2.136',
                    ),
                    'ServiceType' => 
                    array (
                      'description' => 'DNS授权规则的目标类型。取值：

- **Normal**：表示目标类型为DNS普通类型。

- **DNSRedirect**：表示目标类型为DNS重定向类型。',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'Destination' => 
                    array (
                      'description' => '目标DNS授权规则IP地址。

> 当**ServiceType**参数取值为**DNSRedirect**时，该参数必选。',
                      'type' => 'string',
                      'example' => '192.168.0.2',
                    ),
                    'DNSServiceRuleName' => 
                    array (
                      'description' => 'DNS授权规则名称。

长度为2~128个英文或中文字符，开头必须为大小写英文字母或中文，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'DNSServiceRuleDescription' => 
                    array (
                      'description' => 'DNS授权规则描述。

长度为2~256个字符，开头必须为大小写英文字母或中文，但不能为`http://`或`https://`。',
                      'type' => 'string',
                      'example' => 'description',
                    ),
                    'DNSServiceRuleId' => 
                    array (
                      'description' => 'DNS授权规则ID。',
                      'type' => 'string',
                      'example' => 'gar-ffnn1ewe2nmf3y****',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnectorGroup',
            'errorMessage' => 'The param of IoTCloudConnectorGroupId is illegal.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"77111A6A-56BA-59B2-8CAA-7CBF21648FB8\\",\\n  \\"TotalCount\\": 10,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 10,\\n  \\"DNSServiceRules\\": [\\n    {\\n      \\"IoTCloudConnectorGroupId\\": \\"iotccg-g00epppbi9di9y****\\",\\n      \\"DNSServiceRuleStatus\\": \\"Created\\",\\n      \\"Source\\": \\"100.100.2.136\\",\\n      \\"ServiceType\\": \\"Normal\\",\\n      \\"Destination\\": \\"192.168.0.2\\",\\n      \\"DNSServiceRuleName\\": \\"test\\",\\n      \\"DNSServiceRuleDescription\\": \\"description\\",\\n      \\"DNSServiceRuleId\\": \\"gar-ffnn1ewe2nmf3y****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListGroupDNSServiceRulesResponse>\\n    <RequestId>77111A6A-56BA-59B2-8CAA-7CBF21648FB8</RequestId>\\n    <TotalCount>10</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>10</MaxResults>\\n    <DNSServiceRules>\\n        <IoTCloudConnectorGroupId>iotccg-g00epppbi9di9y****</IoTCloudConnectorGroupId>\\n        <DNSServiceRuleStatus>Created</DNSServiceRuleStatus>\\n        <Source>100.100.2.136</Source>\\n        <ServiceType>Normal</ServiceType>\\n        <Destination>192.168.0.2</Destination>\\n        <DNSServiceRuleName>test</DNSServiceRuleName>\\n        <DNSServiceRuleDescription>description</DNSServiceRuleDescription>\\n        <DNSServiceRuleId>gar-ffnn1ewe2nmf3y****</DNSServiceRuleId>\\n    </DNSServiceRules>\\n</ListGroupDNSServiceRulesResponse>","errorExample":""}]',
      'title' => '查询实例组的DNS授权规则',
    ),
    'MoveGroupAuthorizationRuleToDNSService' => 
    array (
      'summary' => '将实例组的授权规则转移到DNS授权规则中。',
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
          'name' => 'IoTCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotccg-g00epppbi9di9y****',
          ),
        ),
        1 => 
        array (
          'name' => 'AuthorizationRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gar-ez91t41jvi6tr8****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会转移授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行转移。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例组所在的地域ID。

> 目前，支持开通云连接器的地域：华东1（杭州）、华东2（上海）、华北1（青岛）、华北2（北京）、华北5（呼和浩特）、华北6（乌兰察布）、华南1（深圳）、华南3（广州）、西南1（成都）、德国（法兰克福）。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'QuotaExceeded.IoTCCGroupInstanceLimit',
            'errorMessage' => 'The quota of IoTCCGroupPerUser is exceeded',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\"\\n}","errorExample":""},{"type":"xml","example":"<MoveGroupAuthorizationRuleToDNSServiceResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n</MoveGroupAuthorizationRuleToDNSServiceResponse>","errorExample":""}]',
      'title' => '实例组规则转移到DNS授权规则',
      'description' => '> 只允许将授权规则中访问目标类型为**Cidr**且目的地址为DNS IP的规则转移到DNS授权规则中，您可以通过调用[ListGroupAuthorizationRules](~~402441~~)接口查看实例组授权规则的访问目标类型和目的地址。',
    ),
    'DeleteGroupDNSServiceRule' => 
    array (
      'summary' => '删除实例组的DNS授权规则。',
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
          'name' => 'IoTCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotccg-g00epppbi9di9y****',
          ),
        ),
        1 => 
        array (
          'name' => 'DNSServiceRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS授权规则ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gar-ffnn1ewe2nmf3y****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会删除DNS授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行删除。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例组所在的地域ID。

>  目前，支持开通云连接器的地域：华东1（杭州）、华东2（上海）、华北1（青岛）、华北2（北京）、华北5（呼和浩特）、华北6（乌兰察布）、华南1（深圳）、华南3（广州）、西南1（成都）、德国（法兰克福）。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
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
                'example' => '77111A6A-56BA-59B2-8CAA-7CBF21648FB8',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'QuotaExceeded.IoTCCGroupInstanceLimit',
            'errorMessage' => 'The quota of IoTCCGroupPerUser is exceeded',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"77111A6A-56BA-59B2-8CAA-7CBF21648FB8\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteGroupDNSServiceRuleResponse>\\n    <RequestId>77111A6A-56BA-59B2-8CAA-7CBF21648FB8</RequestId>\\n</DeleteGroupDNSServiceRuleResponse>","errorExample":""}]',
      'title' => '删除实例组的DNS授权规则',
    ),
    'EnableIoTCloudConnectorAccessLog' => 
    array (
      'summary' => '指定云连接器开启访问日志功能。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccessLogSlsProject',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问日志投递的日志项目。',
            'type' => 'string',
            'required' => true,
            'example' => 'sls-setter',
          ),
        ),
        2 => 
        array (
          'name' => 'AccessLogSlsLogStore',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问日志投递的日志库。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        4 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会开启访问日志的功能。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接开启访问日志的功能。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<EnableIoTCloudConnectorAccessLogResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</EnableIoTCloudConnectorAccessLogResponse>","errorExample":""}]',
      'title' => '开启访问日志功能',
    ),
    'DisableIoTCloudConnectorAccessLog' => 
    array (
      'summary' => '关闭访问日志功能。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会关闭访问日志功能。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接关闭访问日志功能。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<DisableIoTCloudConnectorAccessLogResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</DisableIoTCloudConnectorAccessLogResponse>","errorExample":""}]',
      'title' => '关闭访问日志功能',
    ),
    'GetIoTCloudConnectorAccessLog' => 
    array (
      'summary' => '获取指定云连接器访问日志状态信息。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会获取访问日志状态信息。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接获取访问日志状态信息。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。
',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'AccessLogSlsProject' => 
              array (
                'description' => '访问日志投递的日志项目。',
                'type' => 'string',
                'example' => 'sls-setter',
              ),
              'AccessLogSlsLogStore' => 
              array (
                'description' => '访问日志投递的日志库。',
                'type' => 'string',
                'example' => 'test',
              ),
              'AccessLogStatus' => 
              array (
                'description' => '访问日志的状态，取值：
- **Opening**：开启中。
- **Opened**：已开启。
- **Closed**：已关闭。
- **Closing**：关闭中。',
                'type' => 'string',
                'example' => 'Opened',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"AccessLogSlsProject\\": \\"sls-setter\\",\\n  \\"AccessLogSlsLogStore\\": \\"test\\",\\n  \\"AccessLogStatus\\": \\"Opened\\"\\n}","errorExample":""},{"type":"xml","example":"<GetIoTCloudConnectorAccessLogResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <AccessLogSlsProject>sls-setter</AccessLogSlsProject>\\n    <AccessLogSlsLogStore>test</AccessLogSlsLogStore>\\n    <AccessLogStatus>Opened</AccessLogStatus>\\n</GetIoTCloudConnectorAccessLogResponse>","errorExample":""}]',
      'title' => '获取指定云连接器访问日志',
    ),
    'CreateService' => 
    array (
      'summary' => '创建分应用统计服务。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分应用统计服务的名称。

长度为2~128个英文或中文字符，开头必须为大小写英文字母或中文，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'service_name',
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分应用统计服务的描述。

长度为2~256个字符，开头必须为大小写英文字母或中文，但不能为`http://`或`https://`。',
            'type' => 'string',
            'required' => false,
            'example' => 'service_description',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        4 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会创建服务。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接创建服务。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分应用统计服务所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
              ),
              'ServiceId' => 
              array (
                'description' => '系统为分应用统计服务生成的ID，全网唯一。',
                'type' => 'string',
                'example' => 'c910061f-****-44e6-b659-***c',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n  \\"ServiceId\\": \\"c910061f-****-44e6-b659-***c\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateServiceResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n    <ServiceId>c910061f-****-44e6-b659-***c</ServiceId>\\n</CreateServiceResponse>","errorExample":""}]',
      'title' => '创建分应用统计服务',
    ),
    'UpdateServiceAttribute' => 
    array (
      'summary' => '修改分应用统计服务。',
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
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统为分应用统计服务生成的ID，全网唯一。',
            'type' => 'string',
            'required' => true,
            'example' => 'c910061f-****-44e6-b659-***c',
          ),
        ),
        1 => 
        array (
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分应用统计服务的名称。

长度为2~128个英文或中文字符，开头必须为大小写英文字母或中文，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'service_name',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分应用统计服务的描述。

长度为2~256个字符，开头必须为大小写英文字母或中文，但不能为`http://`或`https://`。',
            'type' => 'string',
            'required' => false,
            'example' => 'service_description',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        5 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会修改服务。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接修改服务。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分应用统计服务所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateServiceAttributeResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n</UpdateServiceAttributeResponse>","errorExample":""}]',
      'title' => '修改分应用统计服务',
    ),
    'ListService' => 
    array (
      'summary' => '查询分应用统计服务。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '分应用统计服务ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '系统为分应用统计服务生成的ID，全网唯一。最多支持输入20个服务ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'c910061f-****-44e6-b659-***c',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceNames',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '分应用统计服务名称列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '分应用统计服务名称，最多支持输入20个服务名称。

长度为2~128个英文或中文字符，开头必须为大小写英文字母或中文，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
              'type' => 'string',
              'required' => false,
              'example' => 'service_name',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceStatuses',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '分应用统计服务资源状态列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '服务资源的状态，最多支持输入20个服务资源。取值：
- **Creating**：创建中。
- **Created**：已创建。
- **Deleting**：删除中。
- **Updating**：更新中。',
              'type' => 'string',
              'required' => false,
              'example' => 'Created',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。',
            'type' => 'string',
            'required' => false,
            'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
          ),
        ),
        5 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**。默认值：**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '20',
            'default' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分应用统计服务所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
              ),
              'TotalCount' => 
              array (
                'description' => '总列表条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'NextToken	FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'MaxResults' => 
              array (
                'description' => '分批次查询时每次显示的条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'Services' => 
              array (
                'description' => '服务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '服务列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'IoTCloudConnectorId' => 
                    array (
                      'description' => '云连接器实例ID。',
                      'type' => 'string',
                      'example' => 'iotcc-bp1odcab8tmno0hdq****',
                    ),
                    'ServiceId' => 
                    array (
                      'description' => '系统为分应用统计服务生成的ID，全网唯一。',
                      'type' => 'string',
                      'example' => 'c910061f-****-44e6-b659-***c',
                    ),
                    'ServiceStatus' => 
                    array (
                      'description' => '服务资源的状态。取值：
- **Creating**：创建中。
- **Created**：已创建。
- **Deleting**：删除中。
- **Updating**：更新中。',
                      'type' => 'string',
                      'example' => 'Created',
                    ),
                    'ServiceName' => 
                    array (
                      'description' => '分应用统计服务的名称。

长度为2~128个英文或中文字符，开头必须为大小写英文字母或中文，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                      'type' => 'string',
                      'example' => 'service_name',
                    ),
                    'ServiceDescription' => 
                    array (
                      'description' => '分应用统计服务的描述。

长度为2~256个字符，开头必须为大小写英文字母或中文，但不能为`http://`或`https://`。',
                      'type' => 'string',
                      'example' => 'service_description',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n  \\"TotalCount\\": 10,\\n  \\"NextToken\\": \\"NextToken\\\\tFFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 20,\\n  \\"Services\\": [\\n    {\\n      \\"IoTCloudConnectorId\\": \\"iotcc-bp1odcab8tmno0hdq****\\",\\n      \\"ServiceId\\": \\"c910061f-****-44e6-b659-***c\\",\\n      \\"ServiceStatus\\": \\"Created\\",\\n      \\"ServiceName\\": \\"service_name\\",\\n      \\"ServiceDescription\\": \\"service_description\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListServiceResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n    <TotalCount>10</TotalCount>\\n    <NextToken>NextToken\\tFFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>20</MaxResults>\\n    <Services>\\n        <IoTCloudConnectorId>iotcc-bp1odcab8tmno0hdq****</IoTCloudConnectorId>\\n        <ServiceId>c910061f-****-44e6-b659-***c</ServiceId>\\n        <ServiceStatus>Created</ServiceStatus>\\n        <ServiceName>service_name</ServiceName>\\n        <ServiceDescription>service_description</ServiceDescription>\\n    </Services>\\n</ListServiceResponse>","errorExample":""}]',
      'title' => '查询分应用统计服务',
    ),
    'DeleteService' => 
    array (
      'summary' => '删除分应用统计服务。',
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
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统为分应用统计服务生成的ID，全网唯一。',
            'type' => 'string',
            'required' => true,
            'example' => 'c910061f-****-44e6-b659-***c',
          ),
        ),
        1 => 
        array (
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会删除服务。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接删除服务。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分应用统计服务所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteServiceResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n</DeleteServiceResponse>","errorExample":""}]',
      'title' => '删除分应用统计服务',
    ),
    'CreateServiceEntry' => 
    array (
      'summary' => '分应用统计服务列表中添加应用条目。',
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
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统为分应用统计服务生成的ID，全网唯一。',
            'type' => 'string',
            'required' => true,
            'example' => 'c910061f-****-44e6-b659-***c',
          ),
        ),
        1 => 
        array (
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        2 => 
        array (
          'name' => 'Target',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用条目的目的地址。',
            'type' => 'string',
            'required' => true,
            'example' => '192.168.1.32/27',
          ),
        ),
        3 => 
        array (
          'name' => 'TargetType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用条目的目的地址类型。取值：

- **Cidr**：CIDR地址块。

- **Domain**：域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'Cidr',
          ),
        ),
        4 => 
        array (
          'name' => 'ServiceEntryName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用条目的名称。

长度为2~128个英文或中文字符，开头必须为大小写英文字母或中文，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'entry_name',
          ),
        ),
        5 => 
        array (
          'name' => 'ServiceEntryDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用条目的描述。

长度为2~256个字符，开头必须为大小写英文字母或中文，但不能为`http://`或`https://`。',
            'type' => 'string',
            'required' => false,
            'example' => 'entry_description',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        7 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会添加应用条目。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接添加应用条目。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用条目所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'ServiceEntryId' => 
              array (
                'description' => '应用条目的ID。',
                'type' => 'string',
                'example' => 'fwd-119smw5tkasdf****',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"ServiceEntryId\\": \\"fwd-119smw5tkasdf****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateServiceEntryResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <ServiceEntryId>fwd-119smw5tkasdf****</ServiceEntryId>\\n</CreateServiceEntryResponse>","errorExample":""}]',
      'title' => '分应用功能列表中添加应用条目',
    ),
    'UpdateServiceEntryAttribute' => 
    array (
      'summary' => '修改分应用统计服务列表中的应用条目。',
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
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统为分应用统计服务生成的ID，全网唯一。',
            'type' => 'string',
            'required' => true,
            'example' => 'c910061f-****-44e6-b659-***c',
          ),
        ),
        1 => 
        array (
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceEntryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用条目的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'fwd-119smw5tkasdf****',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceEntryName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用条目的名称。

长度为2~128个英文或中文字符，开头必须为大小写英文字母或中文，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'entry_name',
          ),
        ),
        4 => 
        array (
          'name' => 'ServiceEntryDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用条目的描述。

长度为2~256个字符，开头必须为大小写英文字母或中文，但不能为`http://`或`https://`。',
            'type' => 'string',
            'required' => false,
            'example' => 'entry_description',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        6 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会修改应用条目。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接修改应用条目。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用条目所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateServiceEntryAttributeResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n</UpdateServiceEntryAttributeResponse>","errorExample":""}]',
      'title' => '修改分应用统计列表的应用条目',
    ),
    'ListServiceEntries' => 
    array (
      'summary' => '查询分应用统计条目。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统为分应用统计服务生成的ID，全网唯一。',
            'type' => 'string',
            'required' => true,
            'example' => 'c910061f-****-44e6-b659-***c',
          ),
        ),
        1 => 
        array (
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        2 => 
        array (
          'name' => 'Target',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '应用条目的目的地址。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '应用条目的目的地址。最多支持输入20个目的地址。',
              'type' => 'string',
              'required' => false,
              'example' => '192.168.1.32/27',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'TargetType',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '应用条目的目的地址类型。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '应用条目的目的地址类型，最多支持输入20个目的地址类型。取值：

- **Cidr**：CIDR地址块。

- **Domain**：域名。',
              'type' => 'string',
              'required' => false,
              'example' => 'Cidr',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        4 => 
        array (
          'name' => 'ServiceEntryStatus',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '应用条目的状态。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '应用条目的状态。最多支持输入20个应用条目状态。取值：

- **Creating**：创建中。

- **Created**：已创建。

- **Deleting**：删除中。

- **Updating**：更新中。',
              'type' => 'string',
              'required' => false,
              'example' => 'Created',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        5 => 
        array (
          'name' => 'ServiceEntryName',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '应用条目的名称。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '应用条目的名称。最多支持输入20个应用条目名称。

长度为2~128个英文或中文字符，开头必须为大小写英文字母或中文，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
              'type' => 'string',
              'required' => false,
              'example' => 'entry_name',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        6 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。',
            'type' => 'string',
            'required' => false,
            'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
          ),
        ),
        7 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值范围：**1~100**。默认值：**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '20',
            'default' => '10',
          ),
        ),
        8 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用条目所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        9 => 
        array (
          'name' => 'ServiceEntryIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '应用条目的ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '应用条目的ID。最多支持输入20个应用条目ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'fwd-119smw5tkasdf****',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'TotalCount' => 
              array (
                'description' => '总列表条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'MaxResults' => 
              array (
                'description' => '分批次查询时每次显示的条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'ServiceEntries' => 
              array (
                'description' => '应用条目列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '应用条目列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ServiceId' => 
                    array (
                      'description' => '系统为分应用统计服务生成的ID，全网唯一。',
                      'type' => 'string',
                      'example' => 'c910061f-****-44e6-b659-***c',
                    ),
                    'ServiceEntryStatus' => 
                    array (
                      'description' => '应用条目的状态。取值：

- **Creating**：创建中。

- **Created**：已创建。

- **Deleting**：删除中。

- **Updating**：更新中。',
                      'type' => 'string',
                      'example' => 'Created',
                    ),
                    'Target' => 
                    array (
                      'description' => '应用条目的目的地址。',
                      'type' => 'string',
                      'example' => '192.168.1.32/27',
                    ),
                    'TargetType' => 
                    array (
                      'description' => '应用条目的目的地址类型。取值：

- **Cidr**：CIDR地址块。

- **Domain**：域名。',
                      'type' => 'string',
                      'example' => 'Cidr',
                    ),
                    'ServiceEntryName' => 
                    array (
                      'description' => '应用条目的名称。

长度为2~128个英文或中文字符，开头必须为大小写英文字母或中文，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                      'type' => 'string',
                      'example' => 'entry_name',
                    ),
                    'ServiceEntryDescription' => 
                    array (
                      'description' => '应用条目的描述。

长度为2~256个字符，开头必须为大小写英文字母或中文，但不能为`http://`或`https://`。',
                      'type' => 'string',
                      'example' => 'entry_description',
                    ),
                    'ServiceEntryId' => 
                    array (
                      'description' => '应用条目的ID。',
                      'type' => 'string',
                      'example' => 'fwd-119smw5tkasdf****',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"TotalCount\\": 10,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 20,\\n  \\"ServiceEntries\\": [\\n    {\\n      \\"ServiceId\\": \\"c910061f-****-44e6-b659-***c\\",\\n      \\"ServiceEntryStatus\\": \\"Created\\",\\n      \\"Target\\": \\"192.168.1.32/27\\",\\n      \\"TargetType\\": \\"Cidr\\",\\n      \\"ServiceEntryName\\": \\"entry_name\\",\\n      \\"ServiceEntryDescription\\": \\"entry_description\\",\\n      \\"ServiceEntryId\\": \\"fwd-119smw5tkasdf****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListServiceEntriesResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <TotalCount>10</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>20</MaxResults>\\n    <ServiceEntries>\\n        <ServiceId>c910061f-****-44e6-b659-***c</ServiceId>\\n        <ServiceEntryStatus>Created</ServiceEntryStatus>\\n        <Target>192.168.1.32/27</Target>\\n        <TargetType>Cidr</TargetType>\\n        <ServiceEntryName>entry_name</ServiceEntryName>\\n        <ServiceEntryDescription>entry_description</ServiceEntryDescription>\\n        <ServiceEntryId>fwd-119smw5tkasdf****</ServiceEntryId>\\n    </ServiceEntries>\\n</ListServiceEntriesResponse>","errorExample":""}]',
      'title' => '查询分应用统计条目',
    ),
    'DeleteServiceEntry' => 
    array (
      'summary' => '删除分应用统计条目。',
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
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统为分应用统计服务生成的ID，全网唯一。',
            'type' => 'string',
            'required' => true,
            'example' => 'c910061f-****-44e6-b659-***c',
          ),
        ),
        1 => 
        array (
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceEntryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用条目的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'fwd-119smw5tkasdf****',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        4 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会删除应用条目。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接删除应用条目。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用条目所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteServiceEntryResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n</DeleteServiceEntryResponse>","errorExample":""}]',
      'title' => '删除分应用统计条目',
    ),
    'SubmitDiagnoseTaskForSingleCard' => 
    array (
      'summary' => '提交单卡诊断任务。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发起单张物联网卡网络诊断的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-smy9a5ockzp08n****',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络诊断的源类型。取值：

- **卡IP**：表示通过物联网卡的卡IP进行网络诊断。

- **卡ID**：表示通过物联网卡的卡ID进行网络诊断。',
            'type' => 'string',
            'required' => true,
            'example' => '卡IP',
          ),
        ),
        2 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络诊断的源端卡IP或者卡ID。',
            'type' => 'string',
            'required' => true,
            'example' => '169.254.XX.XX',
          ),
        ),
        3 => 
        array (
          'name' => 'DestinationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网路诊断的目的类型。取值：

- **IP**：表示诊断的目的类型是IP类型。

- **域名**：表示诊断的目的类型是域名类型。
',
            'type' => 'string',
            'required' => false,
            'example' => 'IP',
          ),
        ),
        4 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络诊断的目的IP或者域名。',
            'type' => 'string',
            'required' => false,
            'example' => '114.114.XX.XX',
          ),
        ),
        5 => 
        array (
          'name' => 'BeginTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络诊断的开始时间戳。单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1643077466',
          ),
        ),
        6 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络诊断的结束时间戳。单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1643077666',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络诊断所在的地域ID。


您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        8 => 
        array (
          'name' => 'ResourceUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例使用者的阿里云账号ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '253460731706911258',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'DiagnoseTaskId' => 
              array (
                'description' => '网络诊断任务ID。',
                'type' => 'string',
                'example' => 'diagnoseTask-bp2qhwdp2n9x6zkvq****',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'cardIdNotExist',
            'errorMessage' => 'diagnose task iccid not exist',
          ),
          2 => 
          array (
            'errorCode' => 'CardIPNotBind',
            'errorMessage' => 'card ip not bind',
          ),
          3 => 
          array (
            'errorCode' => 'CardIPAndIccIdNotMatch',
            'errorMessage' => 'card ip and iccid not match',
          ),
          4 => 
          array (
            'errorCode' => 'CardIPNotExist',
            'errorMessage' => 'card ip not exist',
          ),
          5 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"DiagnoseTaskId\\": \\"diagnoseTask-bp2qhwdp2n9x6zkvq****\\"\\n}","errorExample":""},{"type":"xml","example":"<SubmitDiagnoseTaskForSingleCardResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <DiagnoseTaskId>diagnoseTask-bp2qhwdp2n9x6zkvq****</DiagnoseTaskId>\\n</SubmitDiagnoseTaskForSingleCardResponse>","errorExample":""}]',
      'title' => '提交单卡诊断任务',
    ),
    'GetDiagnoseResultForSingleCard' => 
    array (
      'summary' => '获取单卡诊断结果。',
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
          'name' => 'DiagnoseTaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络诊断任务ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'diagnoseTask-bp2qhwdp2n9x6zkvq****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络诊断的云连接器实例所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'IoTCloudConnectorId' => 
              array (
                'description' => '网络诊断的云连接器实例ID。',
                'type' => 'string',
                'example' => 'iotcc-smy9a5ockzp08n****',
              ),
              'CardIp' => 
              array (
                'description' => '网络诊断的源端卡的IP地址。',
                'type' => 'string',
                'example' => '169.254.XX.XX',
              ),
              'IccId' => 
              array (
                'description' => '网络诊断的源端卡的ID。',
                'type' => 'string',
                'example' => '89860477*******27546',
              ),
              'Destination' => 
              array (
                'description' => '网络诊断的目的IP或者域名。',
                'type' => 'string',
                'example' => '114.114.XX.XX',
              ),
              'BeginTime' => 
              array (
                'description' => '网络诊断的开始时间戳。单位：秒。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1643077466',
              ),
              'EndTime' => 
              array (
                'description' => '网络诊断的结束时间戳。单位：秒。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1643077666',
              ),
              'Status' => 
              array (
                'description' => '网络诊断任务的状态。取值：

- **success**：表示诊断成功。

- **failed**：表示诊断失败。

- **diagnosing**：表示诊断中。',
                'type' => 'string',
                'example' => 'failed',
              ),
              'ErrorResult' => 
              array (
                'description' => '诊断结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '诊断结果列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ErrorLevel' => 
                    array (
                      'description' => '诊断问题的级别。取值：

- **Error**：表示错误。

- **Warning**：表示警告。',
                      'type' => 'string',
                      'example' => 'Warning',
                    ),
                    'ErrorPart' => 
                    array (
                      'description' => '诊断问题的组件。取值：

- **CCIOT**：表示诊断的问题为云连接器的问题。

- **Card**：表示诊断的问题为物联网卡的问题。

- **Terminal**：表示诊断的问题为终端的问题。

- **Server**：表示诊断的问题为服务器的问题。

- **Apn**：表示诊断的问题为APN的问题。',
                      'type' => 'string',
                      'example' => 'Terminal',
                    ),
                    'ErrorDesc' => 
                    array (
                      'description' => '诊断问题的原因。',
                      'type' => 'string',
                      'example' => 'Terminal abnormal',
                    ),
                    'ErrorSuggestion' => 
                    array (
                      'description' => '诊断问题的解决建议。',
                      'type' => 'string',
                      'example' => 'Please check whether the terminal and card are compatible or whether the terminal can send messages',
                    ),
                  ),
                ),
              ),
              'DiagnoseItem' => 
              array (
                'description' => '诊断项信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '诊断项信息列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Part' => 
                    array (
                      'description' => '诊断的部件名称。取值：
- **CCIOT**：云连接器。

- **Card**：物联网卡。

- **Terminal**：终端。

- **Server**：服务器。

- **Apn**：APN。',
                      'type' => 'string',
                      'example' => 'Terminal',
                    ),
                    'Status' => 
                    array (
                      'description' => '诊断部件的状态。取值：

- **Normal**：表示诊断状态正常。

- **Wrong**：表示诊断状态错误。

- **Unknown**：表示诊断状态未知。',
                      'type' => 'string',
                      'example' => 'Normal',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"IoTCloudConnectorId\\": \\"iotcc-smy9a5ockzp08n****\\",\\n  \\"CardIp\\": \\"169.254.XX.XX\\",\\n  \\"IccId\\": \\"89860477*******27546\\",\\n  \\"Destination\\": \\"114.114.XX.XX\\",\\n  \\"BeginTime\\": 1643077466,\\n  \\"EndTime\\": 1643077666,\\n  \\"Status\\": \\"failed\\",\\n  \\"ErrorResult\\": [\\n    {\\n      \\"ErrorLevel\\": \\"Warning\\",\\n      \\"ErrorPart\\": \\"Terminal\\",\\n      \\"ErrorDesc\\": \\"Terminal abnormal\\",\\n      \\"ErrorSuggestion\\": \\"Please check whether the terminal and card are compatible or whether the terminal can send messages\\"\\n    }\\n  ],\\n  \\"DiagnoseItem\\": [\\n    {\\n      \\"Part\\": \\"Terminal\\",\\n      \\"Status\\": \\"Normal\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetDiagnoseResultForSingleCardResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <IoTCloudConnectorId>iotcc-smy9a5ockzp08n****</IoTCloudConnectorId>\\n    <CardIp>169.254.XX.XX</CardIp>\\n    <IccId>89860477*******27546</IccId>\\n    <Destination>114.114.XX.XX</Destination>\\n    <BeginTime>1643077466</BeginTime>\\n    <EndTime>1643077666</EndTime>\\n    <Status>failed</Status>\\n    <ErrorResult>\\n        <ErrorLevel>Warning</ErrorLevel>\\n        <ErrorPart>Terminal</ErrorPart>\\n        <ErrorDesc>Terminal abnormal</ErrorDesc>\\n        <ErrorSuggestion>Please check whether the terminal and card are compatible or whether the terminal can send messages</ErrorSuggestion>\\n    </ErrorResult>\\n    <DiagnoseItem>\\n        <Part>Terminal</Part>\\n        <Status>Normal</Status>\\n    </DiagnoseItem>\\n</GetDiagnoseResultForSingleCardResponse>","errorExample":""}]',
      'title' => '获取单卡诊断结果',
    ),
    'ListDiagnoseInfoForSingleCard' => 
    array (
      'summary' => '查询单卡诊断的诊断结果信息。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络诊断的云连接器实例所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络诊断的云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-smy9a5ockzp08n****',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络诊断的源类型。取值：

- **卡IP**：表示通过物联网卡的卡IP进行网络诊断。

- **卡ID**：表示通过物联网卡的卡ID进行网络诊断。',
            'type' => 'string',
            'required' => false,
            'example' => '卡IP',
          ),
        ),
        3 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络诊断的源端卡IP或者卡ID。
',
            'type' => 'string',
            'required' => false,
            'example' => '169.254.XX.XX',
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。',
            'type' => 'string',
            'required' => false,
            'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
          ),
        ),
        5 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值范围：**1~100**。默认值：**20**。',
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
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'MaxResults' => 
              array (
                'description' => '分批次查询时每次显示的条目数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'DiagnoseInfo' => 
              array (
                'description' => '诊断结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '诊断结果列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'IoTCloudConnectorId' => 
                    array (
                      'description' => '网络诊断的云连接器实例ID。',
                      'type' => 'string',
                      'example' => 'iotcc-smy9a5ockzp08n****',
                    ),
                    'CardIp' => 
                    array (
                      'description' => '网络诊断的源端卡的IP地址。',
                      'type' => 'string',
                      'example' => '169.254.XX.XX',
                    ),
                    'IccId' => 
                    array (
                      'description' => '网络诊断的源端卡的ID。',
                      'type' => 'string',
                      'example' => '89860477*******27546',
                    ),
                    'SourceType' => 
                    array (
                      'description' => '网络诊断的源类型。取值：

- **卡IP**：表示通过物联网卡的卡IP进行网络诊断。

- **卡ID**：表示通过物联网卡的卡ID进行网络诊断。',
                      'type' => 'string',
                      'example' => '卡IP',
                    ),
                    'Source' => 
                    array (
                      'description' => '网络诊断的源端卡IP或者卡ID。',
                      'type' => 'string',
                      'example' => '169.254.XX.XX',
                    ),
                    'DestinationType' => 
                    array (
                      'description' => '网路诊断的目的类型。取值：

- **IP**：表示诊断的目的类型是IP类型。

- **域名**：表示诊断的目的类型是域名类型。',
                      'type' => 'string',
                      'example' => 'IP',
                    ),
                    'Destination' => 
                    array (
                      'description' => '网络诊断的目的IP或者域名。',
                      'type' => 'string',
                      'example' => '114.114.XX.XX',
                    ),
                    'BeginTime' => 
                    array (
                      'description' => '网络诊断的开始时间戳。单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1643077466',
                    ),
                    'EndTime' => 
                    array (
                      'description' => '网络诊断的结束时间戳。单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1643077666',
                    ),
                    'Status' => 
                    array (
                      'description' => '诊断任务的状态。取值：

- **completed**：已完成。

- **diagnosing**：诊断中。',
                      'type' => 'string',
                      'example' => 'completed',
                    ),
                    'DiagnoseTime' => 
                    array (
                      'description' => '诊断任务入库的时间戳。单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1649669904',
                    ),
                    'TaskId' => 
                    array (
                      'description' => '网络诊断任务ID。',
                      'type' => 'string',
                      'example' => 'diagnoseTask-bp2qhwdp2n9x6zkvq****',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '总列表条目数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 20,\\n  \\"DiagnoseInfo\\": [\\n    {\\n      \\"IoTCloudConnectorId\\": \\"iotcc-smy9a5ockzp08n****\\",\\n      \\"CardIp\\": \\"169.254.XX.XX\\",\\n      \\"IccId\\": \\"89860477*******27546\\",\\n      \\"SourceType\\": \\"卡IP\\",\\n      \\"Source\\": \\"169.254.XX.XX\\",\\n      \\"DestinationType\\": \\"IP\\",\\n      \\"Destination\\": \\"114.114.XX.XX\\",\\n      \\"BeginTime\\": 1643077466,\\n      \\"EndTime\\": 1643077666,\\n      \\"Status\\": \\"completed\\",\\n      \\"DiagnoseTime\\": 1649669904,\\n      \\"TaskId\\": \\"diagnoseTask-bp2qhwdp2n9x6zkvq****\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 10\\n}","errorExample":""},{"type":"xml","example":"<ListDiagnoseInfoForSingleCardResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>20</MaxResults>\\n    <DiagnoseInfo>\\n        <IoTCloudConnectorId>iotcc-smy9a5ockzp08n****</IoTCloudConnectorId>\\n        <CardIp>169.254.XX.XX</CardIp>\\n        <IccId>89860477*******27546</IccId>\\n        <SourceType>卡IP</SourceType>\\n        <Source>169.254.XX.XX</Source>\\n        <DestinationType>IP</DestinationType>\\n        <Destination>114.114.XX.XX</Destination>\\n        <BeginTime>1643077466</BeginTime>\\n        <EndTime>1643077666</EndTime>\\n        <Status>completed</Status>\\n        <DiagnoseTime>1649669904</DiagnoseTime>\\n        <TaskId>diagnoseTask-bp2qhwdp2n9x6zkvq****</TaskId>\\n    </DiagnoseInfo>\\n    <TotalCount>10</TotalCount>\\n</ListDiagnoseInfoForSingleCardResponse>","errorExample":""}]',
      'title' => '查询单卡诊断的诊断结果信息',
    ),
    'CreateIoTCloudConnectorBackhaulRoute' => 
    array (
      'summary' => '调用CreateIoTCloudConnectorBackhaulRoute接口创建当前云连接器实例绑定VPC后的回程路由。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会创建当前云连接器实例绑定VPC后的回程路由。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并创建云连接器实例绑定VPC后的回程路由。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'object',
            'properties' => 
            array (
              'IoTCloudConnectorId' => 
              array (
                'description' => '云连接器实例ID。',
                'type' => 'string',
                'example' => 'iotcc-bp1odcab8tmno0hdq****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParamFormat',
            'errorMessage' => 'The param is illegal.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.UserVpcRouteAlreadyPublished',
            'errorMessage' => 'The operation is not allowed because of user vpc route already published.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"IoTCloudConnectorId\\": \\"iotcc-bp1odcab8tmno0hdq****\\",\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateIoTCloudConnectorBackhaulRouteResponse>\\n    <IoTCloudConnectorId>iotcc-bp1odcab8tmno0hdq****</IoTCloudConnectorId>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n</CreateIoTCloudConnectorBackhaulRouteResponse>","errorExample":""}]',
      'title' => '创建当前云连接器实例绑定VPC后的回程路由',
    ),
    'ListIoTCoudConnectorBackhaulRoute' => 
    array (
      'summary' => '调用ListIoTCoudConnectorBackhaulRoute接口查询当前云连接器实例绑定VPC后的回程路由。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。',
            'type' => 'string',
            'required' => false,
            'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
          ),
        ),
        2 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值：**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '20',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '列表条目数。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '列表条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'MaxResults' => 
              array (
                'description' => '分批次查询时每次显示的条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
              ),
              'Routes' => 
              array (
                'description' => '路由列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '路由列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DestinationCidrBlock' => 
                    array (
                      'description' => '路由条目的目标网段。',
                      'type' => 'string',
                      'example' => '192.168.2.0/24',
                    ),
                    'NextHopId' => 
                    array (
                      'description' => '下一跳的实例ID。',
                      'type' => 'string',
                      'example' => 'eni-bp1d66qjxb3qoin3****',
                    ),
                    'NextHopType' => 
                    array (
                      'description' => '下一跳类型。取值： **NetworkInterface**，表示下一跳类型为弹性网卡。



',
                      'type' => 'string',
                      'example' => 'NetworkInterface',
                    ),
                    'Status' => 
                    array (
                      'description' => '路由条目在云连接器中的发布状态。取值：

- **Published**：已发布。

- **Publishing**：发布中。

- **Unpublished**：已解除发布。

- **Unpublishing**：解除发布中。

- **Init**：未发布。

- **Deleting**：删除中。',
                      'type' => 'string',
                      'example' => 'Published',
                    ),
                    'Description' => 
                    array (
                      'description' => '路由条目的描述信息。',
                      'type' => 'string',
                      'example' => 'test',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 10,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 20,\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n  \\"Routes\\": [\\n    {\\n      \\"DestinationCidrBlock\\": \\"192.168.2.0/24\\",\\n      \\"NextHopId\\": \\"eni-bp1d66qjxb3qoin3****\\",\\n      \\"NextHopType\\": \\"NetworkInterface\\",\\n      \\"Status\\": \\"Published\\",\\n      \\"Description\\": \\"test\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListIoTCoudConnectorBackhaulRouteResponse>\\n    <TotalCount>10</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>20</MaxResults>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n    <Routes>\\n        <DestinationCidrBlock>192.168.2.0/24</DestinationCidrBlock>\\n        <NextHopId>eni-bp1d66qjxb3qoin3****</NextHopId>\\n        <NextHopType>NetworkInterface</NextHopType>\\n        <Status>Published</Status>\\n        <Description>test</Description>\\n    </Routes>\\n</ListIoTCoudConnectorBackhaulRouteResponse>","errorExample":""}]',
      'title' => '查询当前云连接器实例绑定VPC后的回程路由',
    ),
    'DeleteIoTCloudConnetorBackhaulRoute' => 
    array (
      'summary' => '调用DeleteIoTCloudConnetorBackhaulRoute接口删除当前云连接器实例绑定VPC后的回程路由。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会删除当前云连接器实例绑定VPC后的回程路由。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接删除云连接器实例绑定VPC后的回程路由。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。
',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
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
            'errorCode' => 'OperationDenied.IotCloudConnectorInGroup',
            'errorMessage' => 'The operation is not allowed because of IotCloudConnector In Group.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceInUse.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCC is in use.',
          ),
          3 => 
          array (
            'errorCode' => 'IncorrectStatus.CloudConnector',
            'errorMessage' => 'The status of CloudConnector is incorrect.',
          ),
          4 => 
          array (
            'errorCode' => 'ResourceInCreating.IoTCloudConnector',
            'errorMessage' => 'ResourceInCreating.IoTCloudConnector',
          ),
          5 => 
          array (
            'errorCode' => 'ResourceInConfiguring.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCloudConnector is configuring, please try again later.',
          ),
          6 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
          7 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteIoTCloudConnetorBackhaulRouteResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n</DeleteIoTCloudConnetorBackhaulRouteResponse>","errorExample":""}]',
      'title' => '删除当前云连接器实例绑定VPC后的回程路由',
    ),
    'CreateIpMappingRule' => 
    array (
      'summary' => '调用CreateIpMappingRule接口创建授权规则IP的重定向功能。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'DestinationIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '重定向的目标IP地址。',
            'type' => 'string',
            'required' => true,
            'example' => '192.168.10.8',
          ),
        ),
        2 => 
        array (
          'name' => 'MappingIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要进行重定向的IP地址。',
            'type' => 'string',
            'required' => true,
            'example' => '47.0.XX.XX',
          ),
        ),
        3 => 
        array (
          'name' => 'IpMappingRuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要进行IP重定向的授权规则名称。

名称长度为2~128个字符，以大小写字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'name',
          ),
        ),
        4 => 
        array (
          'name' => 'IpMappingRuleDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要进行IP重定向的授权规则描述。

长度为2~256个字符，必须以字母或中文开头，但不能以`http:// `或`https://`开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'description',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        6 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会创建授权规则IP重定向功能。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'IpMappingRuleId' => 
              array (
                'description' => '需要进行IP重定向的授权规则的ID。',
                'type' => 'string',
                'example' => 'im-irrp3bzuu5nrbx****',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.DomainFeatureDisabled',
            'errorMessage' => 'The operation is not allowed because of domain feature disabled.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalParam.Destination',
            'errorMessage' => 'The param of Destination is illegal.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceAlreadyExist.AuthorizationRule',
            'errorMessage' => 'The specified resource of AuthorizationRule already exists.',
          ),
          4 => 
          array (
            'errorCode' => 'Conflict.Param',
            'errorMessage' => 'The param is conflict.',
          ),
          5 => 
          array (
            'errorCode' => 'Conflict.Cidr',
            'errorMessage' => 'The cidr is conflict.',
          ),
          6 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
          7 => 
          array (
            'errorCode' => 'QuotaExceeded.sourceCidrLimit',
            'errorMessage' => 'The quota of SourceCidrsPerAuthorizationRule is exceeded',
          ),
          8 => 
          array (
            'errorCode' => 'IllegalParam',
            'errorMessage' => 'The param is illegal.',
          ),
          9 => 
          array (
            'errorCode' => 'QuotaExceeded.authorizationRuleInstanceLimit',
            'errorMessage' => 'The quota of AuthorizationRulePerIotCC is exceeded',
          ),
          10 => 
          array (
            'errorCode' => 'IllegalParamFormat',
            'errorMessage' => 'The param is illegal.',
          ),
          11 => 
          array (
            'errorCode' => 'ResourceInConfiguring.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCloudConnector is configuring, please try again later.',
          ),
          12 => 
          array (
            'errorCode' => 'OperationDenied.DomainInHumanNetwork',
            'errorMessage' => 'The operation is not allowed because of domain or CIDR in human network.',
          ),
          13 => 
          array (
            'errorCode' => 'OperationDenied.CIDRMaskTooLarge',
            'errorMessage' => 'The operation is not allowed because of CIDR too large.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"IpMappingRuleId\\": \\"im-irrp3bzuu5nrbx****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateIpMappingRuleResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <IpMappingRuleId>im-irrp3bzuu5nrbx****</IpMappingRuleId>\\n</CreateIpMappingRuleResponse>","errorExample":""}]',
      'title' => '创建授权规则IP的重定向功能',
    ),
    'UpdateIpMappingRule' => 
    array (
      'summary' => '调用UpdateIpMappingRule接口修改授权规则IP重定向的相关信息。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'IpMappingRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要进行重定向的授权规则的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'im-irrp3bzuu5nrbx****',
          ),
        ),
        2 => 
        array (
          'name' => 'DestinationIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '重定向的目标IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.10.8',
          ),
        ),
        3 => 
        array (
          'name' => 'MappingIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要进行重定向的IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '47.0.XX.XX',
          ),
        ),
        4 => 
        array (
          'name' => 'IpMappingRuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要进行IP重定向的授权规则名称。

长度为2~128个英文或中文字符，开头必须为大小写英文字母或中文，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'name',
          ),
        ),
        5 => 
        array (
          'name' => 'IpMappingRuleDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要进行IP重定向的授权规则描述。

长度为2~256个字符，必须以字母或中文开头，但不能以`http://` 或`https://`开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'description',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        7 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会修改授权规则IP重定向的相关信息。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。
',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.NoParamModify',
            'errorMessage' => 'The operation is not allowed because of no param modified.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
          3 => 
          array (
            'errorCode' => 'QuotaExceeded.sourceCidrLimit',
            'errorMessage' => 'The quota of SourceCidrsPerAuthorizationRule is exceeded',
          ),
          4 => 
          array (
            'errorCode' => 'QuotaExceeded.authorizationRuleInstanceLimit',
            'errorMessage' => 'The quota of AuthorizationRulePerIotCC is exceeded',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalParamFormat',
            'errorMessage' => 'The param is illegal.',
          ),
          6 => 
          array (
            'errorCode' => 'IllegalParam',
            'errorMessage' => 'The param is illegal.',
          ),
          7 => 
          array (
            'errorCode' => 'ResourceInConfiguring.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCloudConnector is configuring, please try again later.',
          ),
          8 => 
          array (
            'errorCode' => 'ResourceNotFound.IpMapping',
            'errorMessage' => 'The param of IpMapping is illegal.',
          ),
          9 => 
          array (
            'errorCode' => 'IllegalParam.Destination',
            'errorMessage' => 'The param of Destination is illegal.',
          ),
          10 => 
          array (
            'errorCode' => 'OperationDenied.NotSupportModify',
            'errorMessage' => 'The operation is not allowed because of this type not support modify.',
          ),
          11 => 
          array (
            'errorCode' => 'OperationDenied.CIDRMaskTooLarge',
            'errorMessage' => 'The operation is not allowed because of CIDR too large.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateIpMappingRuleResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</UpdateIpMappingRuleResponse>","errorExample":""}]',
      'title' => '修改授权规则IP重定向的相关信息',
    ),
    'ListIpMappingRules' => 
    array (
      'summary' => '调用ListIpMappingRules接口查询授权规则IP重定向信息。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'IpMappingRuleIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '需要进行IP重定向的授权规则的ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要进行IP重定向的授权规则的ID。最多支持20个授权规则ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'im-irrp3bzuu5nrbx****',
            ),
            'required' => false,
            'maxItems' => 100,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'MappingIps',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '需要进行重定向的IP地址。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要进行重定向的IP地址。最多支持20个重定向的IP地址。',
              'type' => 'string',
              'required' => false,
              'example' => '47.0.XX.XX',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'IpMappingRuleStatuses',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '授权规则IP重定向的状态。最多支持20个授权规则IP重定向的状态。取值：

- **Creating**：创建中。

- **Created**：创建完成。

- **Updating**：更新中。

- **Associating**：IP绑定中。

- **Dissociating**：IP解绑中。

- **Deleting**：删除中。

- **Deleted**：已删除。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '授权规则IP重定向的状态。最多支持20个授权规则IP重定向的状态。取值：

- **Creating**：创建中。

- **Created**：创建完成。

- **Updating**：更新中。

- **Associating**：IP绑定中。

- **Dissociating**：IP解绑中。

- **Deleting**：删除中。

- **Deleted**：已删除。',
              'type' => 'string',
              'required' => false,
              'example' => 'Created',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        4 => 
        array (
          'name' => 'IpMappingRuleNames',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '需要进行IP重定向的授权规则名称。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要进行IP重定向的授权规则名称。最多支持20个授权规则名称。

长度为2~128个英文或中文字符，开头必须为大小写英文字母或中文，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
              'type' => 'string',
              'required' => false,
              'example' => 'name',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        5 => 
        array (
          'name' => 'DestinationIps',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '重定向的目标IP地址。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '重定向的目标IP地址。最多支持20个目标IP地址。',
              'type' => 'string',
              'required' => false,
              'example' => '192.168.10.8',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        6 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。',
            'type' => 'string',
            'required' => false,
            'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
          ),
        ),
        7 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '20',
            'default' => '10',
          ),
        ),
        8 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'TotalCount' => 
              array (
                'description' => '列表条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'MaxResults' => 
              array (
                'description' => '分批次查询时每次显示的条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'IpMappingRules' => 
              array (
                'description' => '授权规则IP重定向列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '授权规则IP重定向列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'IoTCloudConnectorId' => 
                    array (
                      'description' => '云连接器实例ID。',
                      'type' => 'string',
                      'example' => 'iotcc-bp1odcab8tmno0hdq****',
                    ),
                    'IpMappingRuleId' => 
                    array (
                      'description' => '需要进行IP重定向的授权规则的ID。',
                      'type' => 'string',
                      'example' => 'im-irrp3bzuu5nrbx****',
                    ),
                    'IpMappingRuleStatus' => 
                    array (
                      'description' => '授权规则IP重定向的状态。取值：

- **Creating**：创建中。

- **Created**：创建完成。

- **Updating**：更新中。

- **Associating**：IP绑定中。

- **Dissociating**：IP解绑中。

- **Deleting**：删除中。

- **Deleted**：已删除。',
                      'type' => 'string',
                      'example' => 'Created',
                    ),
                    'MappingIp' => 
                    array (
                      'description' => '需要进行重定向的IP地址。',
                      'type' => 'string',
                      'example' => '47.0.XX.XX',
                    ),
                    'DestinationIp' => 
                    array (
                      'description' => '重定向的目标IP地址。',
                      'type' => 'string',
                      'example' => '192.168.10.8',
                    ),
                    'IpMappingRuleName' => 
                    array (
                      'description' => '需要进行IP重定向的授权规则名称。',
                      'type' => 'string',
                      'example' => 'name',
                    ),
                    'IpMappingRuleDescription' => 
                    array (
                      'description' => '需要进行IP重定向的授权规则描述。',
                      'type' => 'string',
                      'example' => 'description',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"TotalCount\\": 10,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 20,\\n  \\"IpMappingRules\\": [\\n    {\\n      \\"IoTCloudConnectorId\\": \\"iotcc-bp1odcab8tmno0hdq****\\",\\n      \\"IpMappingRuleId\\": \\"im-irrp3bzuu5nrbx****\\",\\n      \\"IpMappingRuleStatus\\": \\"Created\\",\\n      \\"MappingIp\\": \\"47.0.XX.XX\\",\\n      \\"DestinationIp\\": \\"192.168.10.8\\",\\n      \\"IpMappingRuleName\\": \\"name\\",\\n      \\"IpMappingRuleDescription\\": \\"description\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListIpMappingRulesResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <TotalCount>10</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>20</MaxResults>\\n    <IpMappingRules>\\n        <IoTCloudConnectorId>iotcc-bp1odcab8tmno0hdq****</IoTCloudConnectorId>\\n        <IpMappingRuleId>im-irrp3bzuu5nrbx****</IpMappingRuleId>\\n        <IpMappingRuleStatus>Created</IpMappingRuleStatus>\\n        <MappingIp>47.0.XX.XX</MappingIp>\\n        <DestinationIp>192.168.10.8</DestinationIp>\\n        <IpMappingRuleName>name</IpMappingRuleName>\\n        <IpMappingRuleDescription>description</IpMappingRuleDescription>\\n    </IpMappingRules>\\n</ListIpMappingRulesResponse>","errorExample":""}]',
      'title' => '查询授权规则IP重定向信息',
    ),
    'DeleteIpMappingRule' => 
    array (
      'summary' => '调用DeleteIpMappingRule接口删除授权规则IP重定向信息。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'IpMappingRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除的IP重定向的授权规则的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'im-irrp3bzuu5nrbx****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会删除授权规则IP重定向信息。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
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
            'errorCode' => 'OperationDenied.IotCloudConnectorInGroup',
            'errorMessage' => 'The operation is not allowed because of IotCloudConnector In Group.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceInConfiguring.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCloudConnector is configuring, please try again later.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.AuthorizationRule',
            'errorMessage' => 'The param of AuthorizationRuleId is illegal.',
          ),
          4 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalParam.AuthoriztionRuleId',
            'errorMessage' => 'The param of AuthoriztionRuleId is illegal.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteIpMappingRuleResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</DeleteIpMappingRuleResponse>","errorExample":""}]',
      'title' => '删除授权规则IP重定向信息',
    ),
    'CreateGroupIpMappingRule' => 
    array (
      'summary' => '调用CreateGroupIpMappingRule接口创建实例组授权规则IP的重定向规则。',
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
          'name' => 'IoTCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotccg-g00epppbi9di9y****',
          ),
        ),
        1 => 
        array (
          'name' => 'IpMappingRuleDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要进行实例组IP重定向的授权规则描述。

长度为2~256个字符，必须以字母或中文开头，但不能以`http:// `或`https://`开头。
',
            'type' => 'string',
            'required' => false,
            'example' => 'description',
          ),
        ),
        2 => 
        array (
          'name' => 'IpMappingRuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要进行实例组IP重定向的授权规则名称。

名称长度为2~128个字符，以大小写字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'name',
          ),
        ),
        3 => 
        array (
          'name' => 'DestinationIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '重定向的目标IP地址。',
            'type' => 'string',
            'required' => true,
            'example' => '192.168.10.8',
          ),
        ),
        4 => 
        array (
          'name' => 'MappingIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要进行重定向的IP地址。',
            'type' => 'string',
            'required' => true,
            'example' => '47.0.XX.XX',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        6 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会创建实例组授权规则IP的重定向功能。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。
',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'GroupIpMappingRuleId' => 
              array (
                'description' => '需要进行IP重定向的授权规则的ID。',
                'type' => 'string',
                'example' => 'im-irrp3bzuu5nrbx****',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'QuotaExceeded.IoTCCGroupInstanceLimit',
            'errorMessage' => 'The quota of IoTCCGroupPerUser is exceeded',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceAlreadyExist.AuthorizationRule',
            'errorMessage' => 'The specified resource of AuthorizationRule already exists.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.DomainInHumanNetwork',
            'errorMessage' => 'The operation is not allowed because of domain or CIDR in human network.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.CIDRMaskTooLarge',
            'errorMessage' => 'The operation is not allowed because of CIDR too large.',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalParam.Destination',
            'errorMessage' => 'The param of Destination is illegal.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"GroupIpMappingRuleId\\": \\"im-irrp3bzuu5nrbx****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateGroupIpMappingRuleResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <GroupIpMappingRuleId>im-irrp3bzuu5nrbx****</GroupIpMappingRuleId>\\n</CreateGroupIpMappingRuleResponse>","errorExample":""}]',
      'title' => '创建实例组授权规则IP的重定向规则',
    ),
    'UpdateGroupIpMappingRule' => 
    array (
      'summary' => '调用UpdateGroupIpMappingRule接口修改实例组授权规则IP重定向的相关信息。',
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
          'name' => 'IoTCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotccg-g00epppbi9di9y****',
          ),
        ),
        1 => 
        array (
          'name' => 'IpMappingRuleDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要进行实例组IP重定向的授权规则描述。

长度为2~256个字符，必须以字母或中文开头，但不能以`http:// `或`https://`开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'description',
          ),
        ),
        2 => 
        array (
          'name' => 'IpMappingRuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要进行实例组IP重定向的授权规则名称。

名称长度为2~128个字符，以大小写字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'name',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupIpMappingRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要进行重定向的授权规则的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'im-irrp3bzuu5nrbx****',
          ),
        ),
        4 => 
        array (
          'name' => 'MappingIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要进行重定向的IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '47.0.XX.XX',
          ),
        ),
        5 => 
        array (
          'name' => 'DestinationIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问目标IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.10.8',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        7 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会修改实例组授权规则IP重定向的相关信息。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。
',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '云连接器实例组ID。',
            'type' => 'object',
            'properties' => 
            array (
              'IoTCloudConnectorGroupId' => 
              array (
                'description' => '云连接器实例组ID。',
                'type' => 'string',
                'example' => 'iotccg-g00epppbi9di9y****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'AuthorizationRuleId' => 
              array (
                'description' => '授权规则ID。',
                'type' => 'string',
                'example' => 'ar-1234abcb8tmno0hdq****',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.NoFieldModify',
            'errorMessage' => 'The operation is not allowed because of no field modify.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.CIDRMaskTooLarge',
            'errorMessage' => 'The operation is not allowed because of CIDR too large.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"IoTCloudConnectorGroupId\\": \\"iotccg-g00epppbi9di9y****\\",\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"AuthorizationRuleId\\": \\"ar-1234abcb8tmno0hdq****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateGroupIpMappingRuleResponse>\\n    <IoTCloudConnectorGroupId>iotccg-g00epppbi9di9y****</IoTCloudConnectorGroupId>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <AuthorizationRuleId>ar-1234abcb8tmno0hdq****</AuthorizationRuleId>\\n</UpdateGroupIpMappingRuleResponse>","errorExample":""}]',
      'title' => '修改实例组授权规则IP重定向的相关信',
    ),
    'ListGroupIpMappingRules' => 
    array (
      'summary' => '调用ListGroupIpMappingRules接口查询实例组授权规则IP重定向信息。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IoTCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotccg-g00epppbi9di9y****',
          ),
        ),
        1 => 
        array (
          'name' => 'IpMappingRuleIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '需要进行IP重定向的授权规则的ID。最多支持20个授权规则ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要进行IP重定向的授权规则的ID。最多支持20个授权规则ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'im-irrp3bzuu5nrbx****',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'DestinationIps',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '重定向的目标IP地址。最多支持20个目标IP地址。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '重定向的目标IP地址。最多支持20个目标IP地址。',
              'type' => 'string',
              'required' => false,
              'example' => '192.168.10.8',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'IpMappingRuleStatuses',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '授权规则IP重定向的状态。最多支持20个授权规则IP重定向的状态。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '授权规则IP重定向的状态。最多支持20个授权规则IP重定向的状态。取值：

- **Creating**：创建中。
- **Created**：创建完成。
- **Updating**：更新中。
- **Associating**：IP绑定中。
- **Dissociating**：IP解绑中。
- **Deleting**：删除中。
- **Deleted**：已删除。',
              'type' => 'string',
              'required' => false,
              'example' => 'Created',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        4 => 
        array (
          'name' => 'IpMappingRuleNames',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '需要进行IP重定向的授权规则名称。最多支持20个授权规则名称。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要进行IP重定向的授权规则名称。最多支持20个授权规则名称。

长度为2~128个英文或中文字符，开头必须为大小写英文字母或中文，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
              'type' => 'string',
              'required' => false,
              'example' => 'Name',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        5 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
            'type' => 'string',
            'required' => false,
            'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
          ),
        ),
        6 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '20',
            'default' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。
',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        8 => 
        array (
          'name' => 'MappingIps',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '需要进行重定向的IP地址。最多支持20个重定向的IP地址。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要进行重定向的IP地址。最多支持20个重定向的IP地址。',
              'type' => 'string',
              'required' => false,
              'example' => '47.0.XX.XX',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 0,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'TotalCount' => 
              array (
                'description' => '列表条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'MaxResults' => 
              array (
                'description' => '分批次查询时每次显示的条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'IpMappingRules' => 
              array (
                'description' => '需要进行重定向的IP地址列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '需要进行重定向的IP地址列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'IoTCloudConnectorGroupId' => 
                    array (
                      'description' => '云连接器实例组ID。',
                      'type' => 'string',
                      'example' => 'iotccg-g00epppbi9di9y****',
                    ),
                    'IpMappingRuleStatus' => 
                    array (
                      'description' => '授权规则IP重定向的状态。取值：

- **Creating**：创建中。
- **Created**：创建完成。
- **Updating**：更新中。
- **Associating**：IP绑定中。
- **Dissociating**：IP解绑中。
- **Deleting**：删除中。
- **Deleted**：已删除。',
                      'type' => 'string',
                      'example' => 'Created',
                    ),
                    'MappingIp' => 
                    array (
                      'description' => '需要进行重定向的IP地址。',
                      'type' => 'string',
                      'example' => '47.0.XX.XX',
                    ),
                    'DestinationIp' => 
                    array (
                      'description' => '重定向的目标IP地址。',
                      'type' => 'string',
                      'example' => '192.168.10.8',
                    ),
                    'IpMappingRuleName' => 
                    array (
                      'description' => '需要进行IP重定向的授权规则名称。',
                      'type' => 'string',
                      'example' => 'name',
                    ),
                    'IpMappingRuleDescription' => 
                    array (
                      'description' => '需要进行IP重定向的授权规则描述。',
                      'type' => 'string',
                      'example' => 'description',
                    ),
                    'IpMappingRuleId' => 
                    array (
                      'description' => '需要进行IP重定向的授权规则的ID。',
                      'type' => 'string',
                      'example' => 'im-irrp3bzuu5nrbx****',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnectorGroup',
            'errorMessage' => 'The param of IoTCloudConnectorGroupId is illegal.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"TotalCount\\": 10,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 20,\\n  \\"IpMappingRules\\": [\\n    {\\n      \\"IoTCloudConnectorGroupId\\": \\"iotccg-g00epppbi9di9y****\\",\\n      \\"IpMappingRuleStatus\\": \\"Created\\",\\n      \\"MappingIp\\": \\"47.0.XX.XX\\",\\n      \\"DestinationIp\\": \\"192.168.10.8\\",\\n      \\"IpMappingRuleName\\": \\"name\\",\\n      \\"IpMappingRuleDescription\\": \\"description\\",\\n      \\"IpMappingRuleId\\": \\"im-irrp3bzuu5nrbx****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListGroupIpMappingRulesResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <TotalCount>10</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>20</MaxResults>\\n    <IpMappingRules>\\n        <IoTCloudConnectorGroupId>iotccg-g00epppbi9di9y****</IoTCloudConnectorGroupId>\\n        <IpMappingRuleStatus>Created</IpMappingRuleStatus>\\n        <MappingIp>47.0.XX.XX</MappingIp>\\n        <DestinationIp>192.168.10.8</DestinationIp>\\n        <IpMappingRuleName>name</IpMappingRuleName>\\n        <IpMappingRuleDescription>description</IpMappingRuleDescription>\\n        <IpMappingRuleId>im-irrp3bzuu5nrbx****</IpMappingRuleId>\\n    </IpMappingRules>\\n</ListGroupIpMappingRulesResponse>","errorExample":""}]',
      'title' => '查询实例组授权规则IP重定向信息',
    ),
    'DeleteGroupIpMappingRule' => 
    array (
      'summary' => '调用DeleteGroupIpMappingRule接口删除实例组授权规则IP重定向信息。',
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
          'name' => 'IoTCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotccg-g00epppbi9di9y****',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupIpMappingRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除的实例组IP重定向的授权规则的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'im-irrp3bzuu5nrbx****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会删除实例组授权规则IP重定向信息。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。
',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'QuotaExceeded.IoTCCGroupInstanceLimit',
            'errorMessage' => 'The quota of IoTCCGroupPerUser is exceeded',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteGroupIpMappingRuleResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n</DeleteGroupIpMappingRuleResponse>","errorExample":""}]',
      'title' => '删除实例组授权规则IP重定向信息',
    ),
    'ConfirmIoTCloudConnector' => 
    array (
      'summary' => '调用ConfirmIoTCloudConnector接口确认或拒绝云连接器实例过户。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会确认或拒绝云连接器实例过户。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'ConfirmStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '确认状态。取值：

- **Confirm**：确认。
- **Refuse**：拒绝。',
            'type' => 'string',
            'required' => true,
            'example' => 'Confirm',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'ResourceId' => 
              array (
                'description' => '云连接器实例ID。',
                'type' => 'string',
                'example' => 'iotcc-bp1odcab8tmno0hdq****',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParamFormat',
            'errorMessage' => 'The param is illegal.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceInConfiguring.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCloudConnector is configuring, please try again later.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"ResourceId\\": \\"iotcc-bp1odcab8tmno0hdq****\\"\\n}","errorExample":""},{"type":"xml","example":"<ConfirmIoTCloudConnectorResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <ResourceId>iotcc-bp1odcab8tmno0hdq****</ResourceId>\\n</ConfirmIoTCloudConnectorResponse>","errorExample":""}]',
      'title' => '确认或拒绝云连接器实例过户',
    ),
    'RevertIoTCloudConnector' => 
    array (
      'summary' => '调用RevertIoTCloudConnector接口归还已拒绝过户的云连接器实例。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会归还已拒绝过户的云连接器实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID。

您可以通过调用[ListRegions](~~313836~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'ResourceId' => 
              array (
                'description' => '云连接器实例ID。',
                'type' => 'string',
                'example' => 'iotcc-bp1odcab8tmno0hdq****',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParamFormat',
            'errorMessage' => 'The param is illegal.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceInConfiguring.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCloudConnector is configuring, please try again later.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"ResourceId\\": \\"iotcc-bp1odcab8tmno0hdq****\\"\\n}","errorExample":""},{"type":"xml","example":"<RevertIoTCloudConnectorResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <ResourceId>iotcc-bp1odcab8tmno0hdq****</ResourceId>\\n</RevertIoTCloudConnectorResponse>","errorExample":""}]',
      'title' => '归还已拒绝过户的云连接器实例',
    ),
    'DeleteAuthorizationRules' => 
    array (
      'summary' => '批量删除授权规则。',
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
          'name' => 'IoTCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-bp1odcab8tmno0hdq****',
          ),
        ),
        1 => 
        array (
          'name' => 'AuthorizationRuleIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '授权规则ID列表。最多支持传入200个授权规则ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '授权规则ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'ar-1234abcb8tmno0hdq****',
            ),
            'required' => true,
            'maxItems' => 200,
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。
从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会更新授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后直接更新授权规则。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。默认为cn-hangzhou。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
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
            'errorCode' => 'OperationDenied.IotCloudConnectorInGroup',
            'errorMessage' => 'The operation is not allowed because of IotCloudConnector In Group.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'Ram user does not have permission to perform this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceInConfiguring.IoTCloudConnector',
            'errorMessage' => 'The specified resource of IoTCloudConnector is configuring, please try again later.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.AuthorizationRule',
            'errorMessage' => 'The param of AuthorizationRuleId is illegal.',
          ),
          4 => 
          array (
            'errorCode' => 'ResourceNotFound.IoTCloudConnector',
            'errorMessage' => 'The param of IoTCloudConnectorId is illegal.',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalParam.AuthoriztionRuleId',
            'errorMessage' => 'The param of AuthoriztionRuleId is illegal.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.CC5GInstanceNotSupport',
            'errorMessage' => 'The operation is not allowed because of CC5G instance not support.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","type":"json"}]',
      'title' => '批量删除授权规则',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'iotcc.cn-chengdu.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'iotcc.cn-qingdao.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'iotcc.cn-beijing.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'iotcc.cn-huhehaote.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'iotcc.cn-wulanchabu.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'iotcc.cn-hangzhou.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'iotcc.cn-shanghai.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'iotcc.cn-shenzhen.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'iotcc.cn-guangzhou.aliyuncs.com',
    ),
  ),
);
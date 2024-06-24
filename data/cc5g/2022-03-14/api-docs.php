<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'CC5G',
    'version' => '2022-03-14',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 169074,
      'title' => '地域信息',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListRegions',
        1 => 'ListZones',
      ),
    ),
    1 => 
    array (
      'id' => 169077,
      'title' => '权限管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'OpenCc5gService',
        1 => 'GetCreateCustomerInformation',
      ),
    ),
    2 => 
    array (
      'id' => 169080,
      'title' => '5G上云实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListAPNs',
        1 => 'CreateWirelessCloudConnector',
        2 => 'DeleteWirelessCloudConnector',
        3 => 'UpdateWirelessCloudConnector',
        4 => 'ListWirelessCloudConnectors',
        5 => 'AttachVpcToNetLink',
        6 => 'DetachVpcFromNetLink',
        7 => 'GetWirelessCloudConnector',
        8 => 'ListDataPackages',
        9 => 'CreateIoTCloudConnectorBackhaulRoute',
        10 => 'DeleteIoTCloudConnectorBackhaulRoute',
        11 => 'ModifyWirelessCloudConnectorFeature',
        12 => 'ListIoTCloudConnectorBackhaulRoute',
        13 => 'SwitchWirelessCloudConnectorToBusiness',
      ),
    ),
    3 => 
    array (
      'id' => 169089,
      'title' => '订单管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListOrders',
      ),
    ),
    4 => 
    array (
      'id' => 169091,
      'title' => '卡管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'LockCards',
        1 => 'UnlockCards',
        2 => 'StopCards',
        3 => 'ResumeCards',
        4 => 'UpdateCard',
        5 => 'ListCards',
        6 => 'ListCardUsages',
        7 => 'GetCard',
        8 => 'GetCardLockReason',
        9 => 'FailCards',
        10 => 'RebindCards',
        11 => 'ListCardDayUsages',
        12 => 'ResetAreaLimitCards',
        13 => 'ListCardAreaLimitSupportArea',
      ),
    ),
    5 => 
    array (
      'id' => 169100,
      'title' => '授权规则',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateAuthorizationRule',
        1 => 'DeleteAuthorizationRule',
        2 => 'UpdateAuthorizationRule',
        3 => 'AddDNSAuthorizationRule',
        4 => 'UpdateDNSAuthorizationRule',
        5 => 'ListAuthorizationRules',
      ),
    ),
    6 => 
    array (
      'id' => 169103,
      'title' => '卡批量操作',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateBatchOperateCardsTask',
        1 => 'DeleteBatchOperateCardsTask',
        2 => 'UpdateBatchOperateCardsTask',
        3 => 'ListBatchOperateCardsTasks',
      ),
    ),
    7 => 
    array (
      'id' => 172117,
      'title' => '网络诊断',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SubmitDiagnoseTaskForSingleCard',
        1 => 'GetDiagnoseResultForSingleCard',
        2 => 'ListDiagnoseInfoForSingleCard',
      ),
    ),
    8 => 
    array (
      'id' => 172116,
      'title' => '授权分享',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GrantNetLink',
        1 => 'RevokeNetLink',
      ),
    ),
    9 => 
    array (
      'id' => 172767,
      'title' => '实例组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateWirelessCloudConnectorGroup',
        1 => 'UpdateWirelessCloudConnectorGroup',
        2 => 'ListWirelessCloudConnectorGroups',
        3 => 'DeleteWirelessCloudConnectorGroup',
        4 => 'AddWirelessCloudConnectorToGroup',
        5 => 'RemoveWirelessCloudConnectorFromGroup',
        6 => 'CreateGroupAuthorizationRule',
        7 => 'UpdateGroupAuthorizationRule',
        8 => 'ListGroupAuthorizationRules',
        9 => 'DeleteGroupAuthorizationRule',
        10 => 'AddGroupDnsAuthorizationRule',
        11 => 'UpdateGroupDnsAuthorizationRule',
      ),
    ),
    10 => 
    array (
      'id' => 183463,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetCreateCustomerInfomation',
        1 => 'InnerLimitRateCards',
        2 => 'InnerStopCards',
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
    'ListRegions' => 
    array (
      'summary' => '查询5G高速上云服务支持的地域列表。',
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
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '支持的语言。取值：

zh-CN：中文。
en-US：英文。
ja：日文。',
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
            'description' => '地域ID',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '2DCFA69E-A161-512D-99A7-108022580719',
              ),
              'Regions' => 
              array (
                'title' => '数组，返回示例目录。',
                'description' => '地域信息。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => 'RegionItemType',
                  'description' => '地域信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RegionId' => 
                    array (
                      'title' => '资源一级ID',
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'LocalName' => 
                    array (
                      'title' => '资源名称',
                      'description' => '地域名称。',
                      'type' => 'string',
                      'example' => '华东1（杭州）',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2DCFA69E-A161-512D-99A7-108022580719\\",\\n  \\"Regions\\": [\\n    {\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"LocalName\\": \\"华东1（杭州）\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListRegionsResponse>\\n    <RequestId>2DCFA69E-A161-512D-99A7-108022580719</RequestId>\\n    <Regions>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <LocalName>华东1（杭州）</LocalName>\\n        <RegionEndpoint>cc5g.cn-hangzhou.aliyuncs.com</RegionEndpoint>\\n    </Regions>\\n</ListRegionsResponse>","errorExample":""}]',
      'title' => '查询可用地域列表',
    ),
    'ListZones' => 
    array (
      'summary' => '查询5G高速上云服务支持的可用区列表。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID',
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
            'title' => 'Schema of Response',
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C2C1DE7C-E14C-53DE-920D-D63ACD7421A4',
              ),
              'Zones' => 
              array (
                'title' => '数组，返回示例目录。',
                'description' => '当前地域支持的可用区列表',
                'type' => 'array',
                'items' => 
                array (
                  'title' => 'RegionItemType',
                  'description' => '可用区信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ZoneId' => 
                    array (
                      'title' => '资源名称',
                      'description' => '可用区ID',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-h',
                    ),
                    'LocalName' => 
                    array (
                      'title' => '创建时间',
                      'description' => '可用区名称。',
                      'type' => 'string',
                      'example' => '杭州可用区h',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C2C1DE7C-E14C-53DE-920D-D63ACD7421A4\\",\\n  \\"Zones\\": [\\n    {\\n      \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n      \\"LocalName\\": \\"杭州可用区h\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询可用区的列表',
      'description' => '此接口属于运维类接口，主要用于网络规划和特殊控制，暂时只开放了北京、杭州、上海，深圳，如果有特殊region需求，请联系客服。',
    ),
    'OpenCc5gService' => 
    array (
      'summary' => '开通5G高速上云服务。',
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
            'description' => '区域ID',
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
            'title' => 'Schema of Response',
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求iD',
                'type' => 'string',
                'example' => '2DCFA69E-A161-512D-99A7-108022580719',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2DCFA69E-A161-512D-99A7-108022580719\\"\\n}","type":"json"}]',
      'title' => '开通服务',
    ),
    'GetCreateCustomerInformation' => 
    array (
      'summary' => '获取客户资料录入地址和录入状态。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cc5g-xxx',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求iD',
                'type' => 'string',
                'example' => 'AE0BA8E5-1E0C-5171-852F-826301C76BBE',
              ),
              'URL' => 
              array (
                'description' => '物联网卡客户资料登记URL地址。',
                'type' => 'string',
                'example' => 'https://*******',
              ),
              'CanBuyCard' => 
              array (
                'description' => '是否已经登记过标记，未登记资料，此字段无返回',
                'type' => 'string',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AE0BA8E5-1E0C-5171-852F-826301C76BBE\\",\\n  \\"URL\\": \\"https://*******\\",\\n  \\"CanBuyCard\\": \\"True\\"\\n}","type":"json"}]',
      'title' => '获取客户资料录入地址和录入状态',
    ),
    'ListAPNs' => 
    array (
      'summary' => '查询5G高速上云服务支持的APN列表。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云连接器实例所在的地域ID，仅取值：cn-hangzhou。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'APN',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运营商接入点APN ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'CMWAP',
          ),
        ),
        2 => 
        array (
          'name' => 'ISP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运营商ID',
            'type' => 'string',
            'required' => false,
            'example' => 'unicom',
          ),
        ),
        3 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用来标记当前开始读取的位置，置空表示从头开始。

> 第一次调用不用填写，会在返回结果中包含第二次调用时用的NextToken，之后每次调用返回结果中都有下一次调用时的NextToken。',
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
            'description' => '分页大小，取值范围：1~50，默认为10。',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'Schema of Response',
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A175C091-3910-51AF-8D84-D5717B9B8D38',
              ),
              'APNs' => 
              array (
                'title' => '数组，返回示例目录。',
                'description' => '运营商APN列表。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => 'RegionItemType',
                  'description' => '运营商APN列表项',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ISP' => 
                    array (
                      'title' => '资源一级ID',
                      'description' => '5G高速上云实例的运营商。取值：
- **telecom**：中国电信。
- **mobile**：中国移动。
- **unicom**：中国联通。',
                      'type' => 'string',
                      'example' => 'unicom',
                    ),
                    'APN' => 
                    array (
                      'title' => '资源名称',
                      'description' => '运营商接入点APN ID。',
                      'type' => 'string',
                      'example' => 'zjhzaliyun01s.5gjs.njiot',
                    ),
                    'Name' => 
                    array (
                      'title' => '创建时间',
                      'description' => '名称。

当前现实APN支持网断。',
                      'type' => 'string',
                      'example' => '10.0.0.0/13',
                    ),
                    'Description' => 
                    array (
                      'description' => '描述。

当前线上APN描述暂未使用此字段，此APN描述信息为空。',
                      'type' => 'string',
                      'example' => '空',
                    ),
                    'Zones' => 
                    array (
                      'description' => '可用区列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '可用区ID。',
                        'type' => 'string',
                        'example' => 'cn-hangzhou-i',
                      ),
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'description' => '分页token，从返回结果中获取。',
                'type' => 'string',
                'example' => 'vhNxI+jwQfkLCUChCQ+iOoiRkyUbtAilGSvWuwktFBxF+bar2HpV0efI6n1+GkMv',
              ),
              'MaxResults' => 
              array (
                'description' => '分页大小，范围1-100。',
                'type' => 'string',
                'example' => '20',
              ),
              'TotalCount' => 
              array (
                'description' => '总条目数。',
                'type' => 'string',
                'example' => '2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A175C091-3910-51AF-8D84-D5717B9B8D38\\",\\n  \\"APNs\\": [\\n    {\\n      \\"ISP\\": \\"unicom\\",\\n      \\"APN\\": \\"zjhzaliyun01s.5gjs.njiot\\",\\n      \\"Name\\": \\"10.0.0.0/13\\",\\n      \\"Description\\": \\"空\\",\\n      \\"Zones\\": [\\n        \\"cn-hangzhou-i\\"\\n      ]\\n    }\\n  ],\\n  \\"NextToken\\": \\"vhNxI+jwQfkLCUChCQ+iOoiRkyUbtAilGSvWuwktFBxF+bar2HpV0efI6n1+GkMv\\",\\n  \\"MaxResults\\": \\"20\\",\\n  \\"TotalCount\\": \\"2\\"\\n}","errorExample":""},{"type":"xml","example":"<ListAPNsResponse>\\n    <APNs>\\n    </APNs>\\n</ListAPNsResponse>","errorExample":""}]',
      'title' => '查询APN列表',
    ),
    'CreateWirelessCloudConnector' => 
    array (
      'summary' => '创建5G高速上云服务实例。',
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
            'description' => '5G高速上云实例的运营商。取值：
- **telecom**：中国电信。
- **mobile**：中国移动。
- **unicom**：中国联通。',
            'type' => 'string',
            'required' => true,
            'example' => 'unicom',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '名称',
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
            'description' => '高速上云服务的描述信息',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'UseCase',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '使用场景',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        5 => 
        array (
          'name' => 'NetLinks',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '已经建立的云连接器列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '已经建立的云连接器列表。',
              'type' => 'object',
              'properties' => 
              array (
                'RegionId' => 
                array (
                  'description' => '地域ID。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'cn-hangzhou',
                ),
                'VpcId' => 
                array (
                  'description' => '专有网络VPC ID。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'vpc-xxx',
                ),
                'VSwitchs' => 
                array (
                  'description' => '虚拟交换机id。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => 'vSwitch ID。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'vsw-xxxx',
                  ),
                  'required' => true,
                  'maxItems' => 2,
                  'minItems' => 2,
                ),
                'APN' => 
                array (
                  'description' => '运营商APN ID。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'zjalyjs01s.5gjs.njiot',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多详情，请参阅如何保证幂等性。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        7 => 
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
            'example' => 'true',
          ),
        ),
        8 => 
        array (
          'name' => 'BusinessType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务类型',
            'type' => 'string',
            'required' => false,
            'example' => 'Business',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求iD',
                'type' => 'string',
                'example' => 'E1E237B1-EED7-55D5-AE5F-671E642DB3B5',
              ),
              'WirelessCloudConnectorId' => 
              array (
                'description' => '5G高速上云实例id。',
                'type' => 'string',
                'example' => 'cc5g-xxxx',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E1E237B1-EED7-55D5-AE5F-671E642DB3B5\\",\\n  \\"WirelessCloudConnectorId\\": \\"cc5g-xxxx\\"\\n}","type":"json"}]',
      'title' => '创建5G高速上云服务实例',
    ),
    'DeleteWirelessCloudConnector' => 
    array (
      'summary' => '删除5G高速上云实例。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5g-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
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
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并删除实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
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
            'errorCode' => 'OperationDenied.ExistCards',
            'errorMessage' => 'The operation is not allowed because of exist cards.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.AttachedVpc',
            'errorMessage' => 'The operation is not allowed because of exist vpc.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.ExistCustomerAuthorizationRules',
            'errorMessage' => 'The operation is not allowed because of exist customer authorizationRule.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\"\\n}","type":"json"}]',
      'title' => '删除5G高速上云实例',
    ),
    'UpdateWirelessCloudConnector' => 
    array (
      'summary' => '更新5G高速上云实例信息。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5g-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '名称。',
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
            'description' => '描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'cc5g-test',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        4 => 
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
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\"\\n}","type":"json"}]',
      'title' => '更新5G高速上云实例',
    ),
    'ListWirelessCloudConnectors' => 
    array (
      'summary' => '查询5G高速上云实例列表。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Statuses',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '实例状态列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例状态，取值：

- **Creating**: 创建中
- **Available**: 有效的稳定状态
- **Pending**: 配置中
- **Deleting**: 删除中',
              'type' => 'string',
              'required' => false,
              'example' => 'Available',
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'WirelessCloudConnectorIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '实例的id列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例的id列表。',
              'type' => 'string',
              'required' => false,
              'example' => 'cc5g-xxxx',
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'Names',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '实例的名称列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '名称列表。',
              'type' => 'string',
              'required' => false,
              'example' => '智慧工厂',
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上一页的查询返回的值，首页查询不传值。',
            'type' => 'string',
            'required' => false,
            'example' => 'iou001238joojjaere',
          ),
        ),
        5 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'BusinessType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务类型',
            'type' => 'string',
            'required' => false,
            'example' => 'Business',
          ),
        ),
        7 => 
        array (
          'name' => 'IsInGroup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否查询实例组中的实例。取值：

- **true**：查询实例组中的实例。

- **false**：不查询实例组中的实例。

- **null**：全量查询实例，不区分实例是否在实例组中。
',
            'type' => 'string',
            'required' => false,
            'example' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'WirelessCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组实例id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cc5gg-****',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
              ),
              'WirelessCloudConnectors' => 
              array (
                'title' => '数组，返回示例目录。',
                'description' => '5G高速上云实例列表。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => 'RegionItemType',
                  'description' => 'RegionItemType',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'WirelessCloudConnectorId' => 
                    array (
                      'title' => '资源一级ID',
                      'description' => '5G高速上云实例id。',
                      'type' => 'string',
                      'example' => 'cc5g-xxxx',
                    ),
                    'Status' => 
                    array (
                      'title' => '资源名称',
                      'description' => '实例状态，取值：

- **Creating**: 创建中
- **Available**: 有效的稳定状态
- **Pending**: 配置中
- **Deleting**: 删除中',
                      'type' => 'string',
                      'example' => 'Available',
                    ),
                    'Name' => 
                    array (
                      'title' => '创建时间',
                      'description' => '名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Description' => 
                    array (
                      'description' => '描述。',
                      'type' => 'string',
                      'example' => 'cc5g-test',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域id。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'UseCase' => 
                    array (
                      'description' => '实例使用场景。',
                      'type' => 'string',
                      'example' => '智慧工厂',
                    ),
                    'DataPackageId' => 
                    array (
                      'description' => '流量包id。',
                      'type' => 'string',
                      'example' => 'dp-xxxx',
                    ),
                    'DataPackageType' => 
                    array (
                      'description' => '流量包档位，取值：

- **200**: 200M/卡/月
- **1000**: 1G/卡/月
- **3000**: 3G/卡/月
- **30000**: 30G/卡/月',
                      'type' => 'string',
                      'example' => '200',
                    ),
                    'CardCount' => 
                    array (
                      'description' => '卡数量。',
                      'type' => 'string',
                      'example' => '20000',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '实例创建时间。',
                      'type' => 'string',
                      'example' => '2022-3-15 22:20:00',
                    ),
                    'BusinessType' => 
                    array (
                      'description' => '业务类型',
                      'type' => 'string',
                      'example' => 'Business',
                    ),
                    'ServiceType' => 
                    array (
                      'description' => '服务类型，返回：

- **CC5G**：普通实例。
- **CC5GCCIoT**：过户实例。',
                      'type' => 'string',
                      'example' => 'CC5G',
                    ),
                    'WirelessCloudConnectorGroupId' => 
                    array (
                      'description' => '关联的实例组id',
                      'type' => 'string',
                      'example' => 'cc5gg-****',
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'description' => '下一页查询所需值。',
                'type' => 'string',
                'example' => 'iou001238joojjaere',
              ),
              'MaxResults' => 
              array (
                'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
                'type' => 'string',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '列表的条目数。',
                'type' => 'string',
                'example' => '2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\",\\n  \\"WirelessCloudConnectors\\": [\\n    {\\n      \\"WirelessCloudConnectorId\\": \\"cc5g-xxxx\\",\\n      \\"Status\\": \\"Available\\",\\n      \\"Name\\": \\"test\\",\\n      \\"Description\\": \\"cc5g-test\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"UseCase\\": \\"智慧工厂\\",\\n      \\"DataPackageId\\": \\"dp-xxxx\\",\\n      \\"DataPackageType\\": \\"200\\",\\n      \\"CardCount\\": \\"20000\\",\\n      \\"CreateTime\\": \\"2022-3-15 22:20:00\\",\\n      \\"BusinessType\\": \\"Business\\",\\n      \\"ServiceType\\": \\"CC5G\\",\\n      \\"WirelessCloudConnectorGroupId\\": \\"cc5gg-****\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"iou001238joojjaere\\",\\n  \\"MaxResults\\": \\"10\\",\\n  \\"TotalCount\\": \\"2\\"\\n}","type":"json"}]',
      'title' => '查询5G高速上云实例列表',
    ),
    'AttachVpcToNetLink' => 
    array (
      'summary' => '关联用户Vpc和Vswitch到5G高速上云实例。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5g-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'NetLinkId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络连接id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cciot-xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络id。',
            'type' => 'string',
            'required' => true,
            'example' => 'vpc-bp1etmgc4vooo5ahbkzou',
          ),
        ),
        3 => 
        array (
          'name' => 'VSwitches',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '客户的专有网络下的交换机，必须是2个进行主备，且交换机的可用区和和网络连接的可用区保持一致。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '交换机id。',
              'type' => 'string',
              'required' => true,
              'example' => 'vsw-xxxx',
            ),
            'required' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        6 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会关联用户Vpc和Vswitch。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后关联用户Vpc和Vswitch到5G高速上云实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\"\\n}","type":"json"}]',
      'title' => '关联用户Vpc和Vswitch',
    ),
    'DetachVpcFromNetLink' => 
    array (
      'summary' => '取消用户Vpc和Vswitch的关联。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5g-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'NetLinkId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络连接id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cciot-xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会取消关联。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后直接取消用户Vpc和Vswitch的关联。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\"\\n}","type":"json"}]',
      'title' => '取消关联Vpc和Vswitch',
    ),
    'GetWirelessCloudConnector' => 
    array (
      'summary' => '查询5G高速上云实例详细信息。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例id。
',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5g-xxxx',
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
            'description' => ' ',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
              ),
              'NetLinks' => 
              array (
                'title' => '数组，返回示例目录。',
                'description' => '到用户VPC的连接列表。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => 'RegionItemType',
                  'description' => ' ',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'NetLinkId' => 
                    array (
                      'title' => '资源名称',
                      'description' => '网络连接id。',
                      'type' => 'string',
                      'example' => 'cciot-xxxx',
                    ),
                    'Name' => 
                    array (
                      'title' => '创建时间',
                      'description' => '名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Description' => 
                    array (
                      'description' => '描述。',
                      'type' => 'string',
                      'example' => '连接test',
                    ),
                    'Status' => 
                    array (
                      'description' => '状态，取值：

- **Pending**: 配置中  
- **Attached**: 已绑定
- **Detached**: 已解绑',
                      'type' => 'string',
                      'example' => 'Attached',
                    ),
                    'Type' => 
                    array (
                      'description' => '类型，取值：

- **Standard**: 标准版  
- **Basic**: 基础版',
                      'type' => 'string',
                      'example' => 'Standard',
                    ),
                    'APN' => 
                    array (
                      'description' => '运营商APN的id。',
                      'type' => 'string',
                      'example' => 'bjaliyun01s.5gbj.bjiot',
                    ),
                    'ISP' => 
                    array (
                      'description' => '卡所属运营商: 
- **Telecom**: 电信
- **Mobile**: 移动
- **Unicom**: 联通',
                      'type' => 'string',
                      'example' => 'Telecom',
                    ),
                    'VpcId' => 
                    array (
                      'description' => '专有网络VPC ID。',
                      'type' => 'string',
                      'example' => 'vpc-xxxx',
                    ),
                    'VSwitchs' => 
                    array (
                      'description' => '绑定的交换机列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '交换机id。',
                        'type' => 'string',
                        'example' => 'vsw-xxxx',
                      ),
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '连接创建时间。',
                      'type' => 'string',
                      'example' => '2022-03-15 22:20:00',
                    ),
                    'GrantAliUid' => 
                    array (
                      'description' => '阿里云授权者UID。',
                      'type' => 'string',
                      'example' => '11111111111',
                    ),
                  ),
                ),
              ),
              'WirelessCloudConnectorId' => 
              array (
                'description' => '5G高速上云实例id。',
                'type' => 'string',
                'example' => 'cc5g-xxxx',
              ),
              'Status' => 
              array (
                'description' => '实例状态，取值：

- **Creating**: 创建中
- **Available**: 有效的稳定状态
- **Pending**: 配置中
- **Deleting**: 删除中',
                'type' => 'string',
                'example' => 'Available',
              ),
              'Name' => 
              array (
                'description' => '名称。',
                'type' => 'string',
                'example' => 'test',
              ),
              'Description' => 
              array (
                'description' => '描述。',
                'type' => 'string',
                'example' => 'cc5g-test',
              ),
              'RegionId' => 
              array (
                'description' => '地域id。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'UseCase' => 
              array (
                'description' => '实例使用场景。',
                'type' => 'string',
                'example' => '智慧工厂',
              ),
              'DataPackageId' => 
              array (
                'description' => '流量包id。',
                'type' => 'string',
                'example' => 'dp-xxxx',
              ),
              'DataPackageType' => 
              array (
                'description' => '流量包档位，取值：

- **200**: 200M/卡/月
- **1000**: 1G/卡/月
- **3000**: 3G/卡/月
- **30000**: 30G/卡/月',
                'type' => 'string',
                'example' => '200',
              ),
              'CardCount' => 
              array (
                'description' => '卡数量。',
                'type' => 'string',
                'example' => '20000',
              ),
              'CreateTime' => 
              array (
                'description' => '实例创建时间。',
                'type' => 'string',
                'example' => '2022-3-15 22:20:00',
              ),
              'BusinessType' => 
              array (
                'description' => '业务类型',
                'type' => 'string',
                'example' => 'Business',
              ),
              'WirelessCloudConnectorGroupId' => 
              array (
                'description' => '分组ID',
                'type' => 'string',
                'example' => 'cc5gg-****',
              ),
              'Features' => 
              array (
                'description' => '支持的功能特性列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '支持的功能特性列表。',
                  'type' => 'string',
                  'example' => '[\'DirectMode\']',
                ),
              ),
              'ServiceType' => 
              array (
                'description' => '服务类型，返回：

- **CC5G**：普通实例。
- **CC5GCCIoT**：过户实例。',
                'type' => 'string',
                'example' => 'CC5GCCIoT',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\",\\n  \\"NetLinks\\": [\\n    {\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"NetLinkId\\": \\"cciot-xxxx\\",\\n      \\"Name\\": \\"test\\",\\n      \\"Description\\": \\"连接test\\",\\n      \\"Status\\": \\"Attached\\",\\n      \\"Type\\": \\"Standard\\",\\n      \\"APN\\": \\"bjaliyun01s.5gbj.bjiot\\",\\n      \\"ISP\\": \\"Telecom\\",\\n      \\"VpcId\\": \\"vpc-xxxx\\",\\n      \\"VSwitchs\\": [\\n        \\"vsw-xxxx\\"\\n      ],\\n      \\"CreateTime\\": \\"2022-03-15 22:20:00\\",\\n      \\"GrantAliUid\\": \\"11111111111\\"\\n    }\\n  ],\\n  \\"WirelessCloudConnectorId\\": \\"cc5g-xxxx\\",\\n  \\"Status\\": \\"Available\\",\\n  \\"Name\\": \\"test\\",\\n  \\"Description\\": \\"cc5g-test\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"UseCase\\": \\"智慧工厂\\",\\n  \\"DataPackageId\\": \\"dp-xxxx\\",\\n  \\"DataPackageType\\": \\"200\\",\\n  \\"CardCount\\": \\"20000\\",\\n  \\"CreateTime\\": \\"2022-3-15 22:20:00\\",\\n  \\"BusinessType\\": \\"Business\\",\\n  \\"WirelessCloudConnectorGroupId\\": \\"cc5gg-****\\",\\n  \\"Features\\": [\\n    \\"[\'DirectMode\']\\"\\n  ],\\n  \\"ServiceType\\": \\"CC5GCCIoT\\"\\n}","type":"json"}]',
      'title' => '查询5G高速上云实例详情',
    ),
    'ListDataPackages' => 
    array (
      'summary' => '查询流量包信息列表。',
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
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5g-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Statuses',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '流量包状态列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '流量包状态，取值：

- **Creating**: 创建中
- **Available**: 已生效
- **Expired**: 已过期',
              'type' => 'string',
              'required' => false,
              'example' => 'Available',
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'DataPackageIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '流量包id，最多20个。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
              'example' => 'dp-xxxx',
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'Names',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '流量包名称，最多20个',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
              'example' => 'cciot-123',
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上一页的查询返回的值，首页查询不传值。',
            'type' => 'string',
            'required' => false,
            'example' => 'iou001238joojjaere',
          ),
        ),
        5 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '8734B5B2-FC84-54C4-8038-D40228CF01FE',
              ),
              'DataPackages' => 
              array (
                'title' => '数组，返回示例目录。',
                'description' => '流量包列表。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => 'RegionItemType',
                  'description' => 'RegionItemType',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DataPackageId' => 
                    array (
                      'description' => '流量包id。',
                      'type' => 'string',
                      'example' => 'dp-xxxx',
                    ),
                    'Status' => 
                    array (
                      'title' => '资源名称',
                      'description' => '流量包状态，取值：

- **Creating**: 创建中
- **Available**: 已生效
- **Expired**: 已过期',
                      'type' => 'string',
                      'example' => 'Available',
                    ),
                    'Name' => 
                    array (
                      'title' => '创建时间',
                      'description' => '流量包名称',
                      'type' => 'string',
                      'example' => '测试流量包',
                    ),
                    'ISP' => 
                    array (
                      'description' => '卡所属运营商：

- **Telecom**: 电信
- **Mobile**: 移动
- **Unicom**: 联通',
                      'type' => 'string',
                      'example' => 'Telecom',
                    ),
                    'Size' => 
                    array (
                      'description' => '流量包档位，取值：

- **200**: 200M/卡/月
- **1000**: 1G/卡/月
- **3000**: 3G/卡/月
- **30000**: 30G/卡/月',
                      'type' => 'string',
                      'example' => '200',
                    ),
                    'CardCount' => 
                    array (
                      'description' => '卡数量。',
                      'type' => 'string',
                      'example' => '20000',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '开通时间。',
                      'type' => 'string',
                      'example' => '2022-3-15 22:20:00',
                    ),
                    'ExpiredTime' => 
                    array (
                      'description' => '失效时间。',
                      'type' => 'string',
                      'example' => '2099-3-15 22:20:00',
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'description' => '下一页查询所需值。',
                'type' => 'string',
                'example' => 'iou001238joojjaere',
              ),
              'MaxResults' => 
              array (
                'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
                'type' => 'string',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '列表的条目数。',
                'type' => 'string',
                'example' => '2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8734B5B2-FC84-54C4-8038-D40228CF01FE\\",\\n  \\"DataPackages\\": [\\n    {\\n      \\"DataPackageId\\": \\"dp-xxxx\\",\\n      \\"Status\\": \\"Available\\",\\n      \\"Name\\": \\"测试流量包\\",\\n      \\"ISP\\": \\"Telecom\\",\\n      \\"Size\\": \\"200\\",\\n      \\"CardCount\\": \\"20000\\",\\n      \\"CreateTime\\": \\"2022-3-15 22:20:00\\",\\n      \\"ExpiredTime\\": \\"2099-3-15 22:20:00\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"iou001238joojjaere\\",\\n  \\"MaxResults\\": \\"10\\",\\n  \\"TotalCount\\": \\"2\\"\\n}","type":"json"}]',
      'title' => '查询流量包信息',
    ),
    'CreateIoTCloudConnectorBackhaulRoute' => 
    array (
      'summary' => '开启了反向访问高级特性场景下，针对连接实例下发反向访问路由。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5g-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'NetLinkId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络连接id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cciot-xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
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
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\"\\n}","type":"json"}]',
      'title' => '创建5G高速上云实例反向访问路由',
    ),
    'DeleteIoTCloudConnectorBackhaulRoute' => 
    array (
      'summary' => '开启了反向访问高级特性场景下，针对连接实例删除反向访问路由
。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5g-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'NetLinkId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络连接id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cciot-xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会创建授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后直接创建授权规则。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'AA93A076-3D94-51AB-AC70-4C94AF003B03',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AA93A076-3D94-51AB-AC70-4C94AF003B03\\"\\n}","type":"json"}]',
      'title' => '删除5G高速上云实例反向访问路由',
    ),
    'ModifyWirelessCloudConnectorFeature' => 
    array (
      'summary' => '修改5G高速上云实例高级属性，例如开启反向访问功能。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5g-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'FeatureName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '功能特征名称。
- **DirectMode**：直通',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'DirectMode' => 'DirectMode',
            ),
            'example' => 'DirectMode',
          ),
        ),
        2 => 
        array (
          'name' => 'FeatureValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '功能特征值。',
            'type' => 'string',
            'required' => false,
            'example' => 'On',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        4 => 
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
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '999E0F64-9A10-567B-BB84-B7C46023BA3B',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"999E0F64-9A10-567B-BB84-B7C46023BA3B\\"\\n}","type":"json"}]',
      'title' => '修改5G高速上云实例高级属性',
    ),
    'ListIoTCloudConnectorBackhaulRoute' => 
    array (
      'summary' => '开启了反向访问高级特性场景下，查询特定连接实例的反向访问路由列表。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5g-xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'NetLinkId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络连接id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cciot-xxxx',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '94032572-8758-575E-B306-86F59D1B826E',
              ),
              'NetLinkId' => 
              array (
                'title' => 'Id of the request',
                'description' => '网络连接id。',
                'type' => 'string',
                'example' => 'cciot-xxxx',
              ),
              'Routes' => 
              array (
                'title' => '数组，返回示例目录。',
                'description' => '数组，返回示例目录。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => 'RegionItemType',
                  'description' => 'RegionItemType',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DestinationCidrBlock' => 
                    array (
                      'title' => '资源名称',
                      'description' => '路由条目的目标网段。',
                      'type' => 'string',
                      'example' => '10.33.190.0/24',
                    ),
                    'NextHopId' => 
                    array (
                      'title' => '创建时间',
                      'description' => '下一跳实例ID。',
                      'type' => 'string',
                      'example' => 'eni-uf677iw3xihqxiz2ssir',
                    ),
                    'NextHopType' => 
                    array (
                      'title' => '创建时间',
                      'description' => '自定义路由条目的下一跳的类型，取值： 

- **Instance**（默认值）：ECS实例。

- **HaVip**：高可用虚拟IP。  

- **RouterInterface**：路由器接口。

- **NetworkInterface**：弹性网卡。

- **VpnGateway**：VPN网关。

- **IPv6Gateway**：IPv6网关。

- **NatGateway**：NAT网关。

- **Attachment**：转发路由器。

- **VpcPeer**：VPC对等连接。',
                      'type' => 'string',
                      'example' => 'NetworkInterface',
                    ),
                    'Description' => 
                    array (
                      'title' => '创建时间',
                      'description' => '描述信息。',
                      'type' => 'string',
                      'example' => 'full cidr block route',
                    ),
                    'Status' => 
                    array (
                      'title' => '创建时间',
                      'description' => '路由状态，取值：

- **init**: 初始态
- **published**: 已下发',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                      ),
                      'example' => 'published',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"94032572-8758-575E-B306-86F59D1B826E\\",\\n  \\"NetLinkId\\": \\"cciot-xxxx\\",\\n  \\"Routes\\": [\\n    {\\n      \\"DestinationCidrBlock\\": \\"10.33.190.0/24\\",\\n      \\"NextHopId\\": \\"eni-uf677iw3xihqxiz2ssir\\",\\n      \\"NextHopType\\": \\"NetworkInterface\\",\\n      \\"Description\\": \\"full cidr block route\\",\\n      \\"Status\\": \\"published\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询5G高速上云实例反向访问路由',
    ),
    'SwitchWirelessCloudConnectorToBusiness' => 
    array (
      'summary' => '用于把5G上云服务测试实例切换到商业实例。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5g-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
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
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并删除实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '74ADDCF3-E3FE-5200-9290-1320125D71DC',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"74ADDCF3-E3FE-5200-9290-1320125D71DC\\"\\n}","type":"json"}]',
      'title' => '切换5G上云服务实例到商业模式',
    ),
    'ListOrders' => 
    array (
      'summary' => '查询订单列表。',
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
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5g-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Statuses',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '订单状态列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '订单状态，取值：

- **Pending**: 待发货
- **Posting**: 已发货
- **Finished**: 已完成',
              'type' => 'string',
              'required' => false,
              'example' => 'Pending',
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'OrderIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '订单id列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '订单id。',
              'type' => 'string',
              'required' => false,
              'example' => '890******',
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'OrderAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订单类型，取值：
- **NewBuy**: 新购
- **ScaleOut**: 扩容
- **ScaleIn**: 缩容
- **BuyCard**: 购卡
- **Renewal**: 续期',
            'type' => 'string',
            'required' => false,
            'example' => 'NewBuy',
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上一页的查询返回的值，首页查询不传值。',
            'type' => 'string',
            'required' => false,
            'example' => 'iou001238joojjaere',
          ),
        ),
        5 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '88C2F32F-B641-5980-B7A5-6907050ABCD1
',
              ),
              'Orders' => 
              array (
                'title' => '数组，返回示例目录。',
                'description' => '订单列表。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => 'RegionItemType',
                  'description' => 'RegionItemType',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'OrderId' => 
                    array (
                      'description' => '订单id。',
                      'type' => 'string',
                      'example' => '89************',
                    ),
                    'Status' => 
                    array (
                      'title' => '资源名称',
                      'description' => '订单状态，取值：

- **Pending**: 待发货
- **Posting**: 已发货
- **Finished**: 已完成',
                      'type' => 'string',
                      'example' => 'Pending',
                    ),
                    'Action' => 
                    array (
                      'title' => '创建时间',
                      'description' => '订单类型，取值：
- **NewBuy**: 新购
- **ScaleOut**: 扩容
- **ScaleIn**: 缩容
- **BuyCard**: 购卡
- **Renewal**: 续期',
                      'type' => 'string',
                      'example' => 'NewBuy',
                    ),
                    'Description' => 
                    array (
                      'description' => '订单描述。',
                      'type' => 'string',
                      'example' => 'order-test',
                    ),
                    'LogisticsId' => 
                    array (
                      'description' => '物流单号。',
                      'type' => 'string',
                      'example' => 'SF14*********',
                    ),
                    'LogisticsStatus' => 
                    array (
                      'description' => '物流状态，取值：
- **Transporting**: 运送中
- **Delivering**: 派件中
- **Delivered**: 已送达
- **Signed**: 已签收',
                      'type' => 'string',
                      'example' => 'Signed',
                    ),
                    'LogisticsType' => 
                    array (
                      'description' => '物流公司，取值：
- **SF**: 顺丰
- **ZTO**: 中通
',
                      'type' => 'string',
                      'example' => 'SF',
                    ),
                    'LogisticsUpdateTime' => 
                    array (
                      'description' => '物流最新更新时间。',
                      'type' => 'string',
                      'example' => '2022-3-15 22:20:00',
                    ),
                    'CardCount' => 
                    array (
                      'description' => '卡数量。',
                      'type' => 'string',
                      'example' => '20000',
                    ),
                    'ContactName' => 
                    array (
                      'description' => '邮寄联系人。',
                      'type' => 'string',
                      'example' => '张三',
                    ),
                    'ContactPhone' => 
                    array (
                      'description' => '邮寄联系电话。',
                      'type' => 'string',
                      'example' => '139000*******',
                    ),
                    'PostAddress' => 
                    array (
                      'description' => '邮寄地址。',
                      'type' => 'string',
                      'example' => '某公司',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '订单创建时间。',
                      'type' => 'string',
                      'example' => '2022-3-15 21:20:00',
                    ),
                    'PayTime' => 
                    array (
                      'description' => '订单支付时间。',
                      'type' => 'string',
                      'example' => '2022-3-15 21:30:00',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域id。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'CardType' => 
                    array (
                      'description' => '卡的规格，取值：

- **CONSUMER\\_THREE\\_IN\\_ONE:** 消费电子级物联网卡\\_三合一
- **INDUSTRY\\_PATCH**
: 工业级物联网贴片卡
- **CONSUMER\\_PATCH**
:消费电子级物联网贴片卡
- **INDUSTRY\\_GENERAL**
:工业级物联网卡\\_普通
- **INDUSTRY\\_MICRO**
:工业级物联网卡\\_Micro
- **CONSUMER\\_GENERAL**
:消费电子级物联网卡_普通
- **CONSUMER\\_TWO\\_IN\\_ONE**
：消费电子级物联网卡\\_二合一
- **INDUSTRY\\_NANO**
：工业级物联网卡\\_Nano
- **CAR\\_PATCH**
:车规级物联网贴片卡',
                      'type' => 'string',
                      'example' => 'CONSUMER_THREE_IN_ONE',
                    ),
                    'CardNetType' => 
                    array (
                      'description' => '卡的网络类型，取值：

- **4G**
- **5G**',
                      'type' => 'string',
                      'example' => '5G',
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'description' => '下一页查询所需值。',
                'type' => 'string',
                'example' => 'iou001238joojjaere',
              ),
              'MaxResults' => 
              array (
                'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
                'type' => 'string',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '列表的条目数。',
                'type' => 'string',
                'example' => '2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"88C2F32F-B641-5980-B7A5-6907050ABCD1\\\\n\\",\\n  \\"Orders\\": [\\n    {\\n      \\"OrderId\\": \\"89************\\",\\n      \\"Status\\": \\"Pending\\",\\n      \\"Action\\": \\"NewBuy\\",\\n      \\"Description\\": \\"order-test\\",\\n      \\"LogisticsId\\": \\"SF14*********\\",\\n      \\"LogisticsStatus\\": \\"Signed\\",\\n      \\"LogisticsType\\": \\"SF\\",\\n      \\"LogisticsUpdateTime\\": \\"2022-3-15 22:20:00\\",\\n      \\"CardCount\\": \\"20000\\",\\n      \\"ContactName\\": \\"张三\\",\\n      \\"ContactPhone\\": \\"139000*******\\",\\n      \\"PostAddress\\": \\"某公司\\",\\n      \\"CreateTime\\": \\"2022-3-15 21:20:00\\",\\n      \\"PayTime\\": \\"2022-3-15 21:30:00\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"CardType\\": \\"CONSUMER_THREE_IN_ONE\\",\\n      \\"CardNetType\\": \\"5G\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"iou001238joojjaere\\",\\n  \\"MaxResults\\": \\"10\\",\\n  \\"TotalCount\\": \\"2\\"\\n}","type":"json"}]',
      'title' => '查询订单列表',
    ),
    'LockCards' => 
    array (
      'summary' => '批量锁定卡。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Iccids',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '物联网SIM卡卡号，每次最大500条',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
              'example' => '890912389123',
            ),
            'required' => true,
            'maxItems' => 1000,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会批量锁定。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后批量锁定卡。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '8734B5B2-FC84-54C4-8038-D40228CF01FE',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8734B5B2-FC84-54C4-8038-D40228CF01FE\\"\\n}","type":"json"}]',
      'title' => '批量锁定卡',
    ),
    'UnlockCards' => 
    array (
      'summary' => '批量解锁卡。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Iccids',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '物联网SIM卡卡号，每次最大500条',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
              'example' => '890912389123',
            ),
            'required' => true,
            'maxItems' => 1000,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会批量解锁。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后进行批量解锁操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '81CB64DF-E328-50A3-B386-03CAD604C114',
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
            'errorCode' => 'OperationDenied.CardsSimStatusNotUnlock',
            'errorMessage' => 'The operation is not allowed because of card status not support to unlock.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"81CB64DF-E328-50A3-B386-03CAD604C114\\"\\n}","type":"json"}]',
      'title' => '批量解锁卡',
    ),
    'StopCards' => 
    array (
      'summary' => '单卡停机，支持批量操作。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Iccids',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '物联网SIM卡卡号，每次最大500条',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
              'example' => '890912389123',
            ),
            'required' => true,
            'maxItems' => 1000,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会进行停机操作。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后直接进行卡停机操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '8734B5B2-FC84-54C4-8038-D40228CF01FE',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8734B5B2-FC84-54C4-8038-D40228CF01FE\\"\\n}","type":"json"}]',
      'title' => '卡停机操作',
      'description' => '如单卡被劫持或者其他原因做主动运维，可在此实现运营商侧卡停机。',
    ),
    'ResumeCards' => 
    array (
      'summary' => '激活单卡，或恢复运营商侧卡状态，支持批量操作。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Iccids',
          'in' => 'query',
          'allowEmptyValue' => false,
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '物联网SIM卡卡号，每次最大500条',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
              'example' => '890912389123',
            ),
            'required' => true,
            'maxItems' => 1000,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会激活/恢复卡状态。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后激活/恢复卡状态。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
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
            'errorCode' => 'OperationDenied.CardsSimStatusNotResume',
            'errorMessage' => 'The operation is not allowed because of card status not support to resume.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\"\\n}","type":"json"}]',
      'title' => '激活/恢复卡状态',
      'description' => '运营商卡切换终端或者因为频繁拨号等原因导致锁卡可在此恢复。',
    ),
    'UpdateCard' => 
    array (
      'summary' => '更新卡实例的名称和描述。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5g-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Iccid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的iccid。',
            'type' => 'string',
            'required' => false,
            'example' => '890912389123',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'card-test',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        5 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会更新卡信息。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后更新卡信息。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '8734B5B2-FC84-54C4-8038-D40228CF01FE',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8734B5B2-FC84-54C4-8038-D40228CF01FE\\"\\n}","type":"json"}]',
      'title' => '更新卡信息',
    ),
    'ListCards' => 
    array (
      'summary' => '查询5G高速上云实例下的卡信息列表。',
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
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5g-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Statuses',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '卡的状态列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '卡的状态，取值：

- **Testable**: 可测试
- **Activatable**: 可激活
- **Activated**: 已激活
- **Deactivated**: 已停用
- **Failed**: 已失效
- **Cleared**: 已清除
- **Replaced**: 已更换
- **Resuming**: 恢复中
- **ShutDown**: 已停机',
              'type' => 'string',
              'required' => false,
              'example' => 'Activated',
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'Iccids',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '物联网卡的iccid列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '物联网卡的iccid。',
              'type' => 'string',
              'required' => false,
              'example' => '89091231231219123',
            ),
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'IpAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的固定IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '10.0.0.1',
          ),
        ),
        4 => 
        array (
          'name' => 'Lock',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '卡是否锁定。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'Online',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '卡是否在线。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'NetLinkId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络连接id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cciot-xxxx',
          ),
        ),
        7 => 
        array (
          'name' => 'Apn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运营商APN的id。',
            'type' => 'string',
            'required' => false,
            'example' => 'bjaliyun01s.5gbj.bjiot',
          ),
        ),
        8 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上一页的查询返回的值，首页查询不传值。',
            'type' => 'string',
            'required' => false,
            'example' => 'iou001238joojjaere',
          ),
        ),
        9 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        10 => 
        array (
          'name' => 'Iccid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '卡的iccid的前缀，如果后缀包含字符会去除字符。',
            'type' => 'string',
            'required' => false,
            'example' => '8909123123121912',
          ),
        ),
        11 => 
        array (
          'name' => 'Msisdn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的MSISDN。',
            'type' => 'string',
            'required' => false,
            'example' => '1441204374591',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '88C2F32F-B641-5980-B7A5-6907050ABCD1',
              ),
              'Cards' => 
              array (
                'title' => '数组，返回示例目录。',
                'description' => '卡列表。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => 'RegionItemType',
                  'description' => 'RegionItemType',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Iccid' => 
                    array (
                      'title' => '资源一级ID',
                      'description' => '物联网卡的iccid。',
                      'type' => 'string',
                      'example' => '89091231231219123',
                    ),
                    'NetType' => 
                    array (
                      'title' => '资源名称',
                      'description' => '网络类型，取值：

- **4G**
- **5G**',
                      'type' => 'string',
                      'example' => '5G',
                    ),
                    'APN' => 
                    array (
                      'title' => '创建时间',
                      'description' => '运营商APN的id。',
                      'type' => 'string',
                      'example' => 'bjaliyun01s.5gbj.bjiot',
                    ),
                    'ISP' => 
                    array (
                      'description' => '5G高速上云实例的运营商。取值：
- **Telecom**：中国电信
- **Mobile**：中国移动
- **Unicom**：中国联通',
                      'type' => 'string',
                      'example' => 'Telecom',
                    ),
                    'IpAddress' => 
                    array (
                      'description' => '卡的静态IP地址。',
                      'type' => 'string',
                      'example' => '10.0.0.118',
                    ),
                    'Imsi' => 
                    array (
                      'description' => '物联网卡的IMSI。',
                      'type' => 'string',
                      'example' => '8912039123',
                    ),
                    'Imei' => 
                    array (
                      'description' => '物联网卡的IMEI。',
                      'type' => 'string',
                      'example' => '7896129300',
                    ),
                    'Lock' => 
                    array (
                      'description' => '卡是否锁定。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'Spec' => 
                    array (
                      'description' => '卡的规格，取值：

- **CONSUMER\\_THREE\\_IN\\_ONE:** 消费电子级物联网卡\\_三合一
- **INDUSTRY\\_PATCH:** 工业级物联网贴片卡
- **CONSUMER\\_PATCH:** 消费电子级物联网贴片卡
- **INDUSTRY\\_GENERAL:** 工业级物联网卡\\_普通
- **INDUSTRY\\_MICRO:** 工业级物联网卡\\_Micro
- **CONSUMER\\_GENERAL:** 消费电子级物联网卡_普通
- **CONSUMER\\_TWO\\_IN\\_ONE:** 消费电子级物联网卡\\_二合一
- **INDUSTRY\\_NANO:** 工业级物联网卡\\_Nano
- **CAR\\_PATCH:** 车规级物联网贴片卡',
                      'type' => 'string',
                      'example' => 'CONSUMER_THREE_IN_ONE',
                    ),
                    'Status' => 
                    array (
                      'description' => '卡的状态，取值：

- **Testable**: 可测试
- **Activatable**: 可激活
- **Activated**: 已激活
- **Deactivated**: 已停用
- **Failed**: 已失效
- **Cleared**: 已清除
- **Replaced**: 已更换
- **Resuming**: 恢复中
- **ShutDown**: 已停机',
                      'type' => 'string',
                      'example' => 'Activated',
                    ),
                    'Description' => 
                    array (
                      'description' => '描述。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Name' => 
                    array (
                      'description' => '名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'UsageDataMonth' => 
                    array (
                      'description' => '本月已用流量，单位MB。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '20',
                    ),
                    'OrderId' => 
                    array (
                      'description' => '订单号。',
                      'type' => 'string',
                      'example' => '89099123012',
                    ),
                    'ActivatedTime' => 
                    array (
                      'description' => '激活时间。',
                      'type' => 'string',
                      'example' => '2022-3-15 22:20:00',
                    ),
                    'BusinessStatus' => 
                    array (
                      'description' => '业务状态，取值：

- **Creating**: 创建中
- **Available**: 稳定状态，有效
- **Configuring**: 配置中
- **Deleting**: 删除中',
                      'type' => 'string',
                      'example' => 'Available',
                    ),
                    'Msisdn' => 
                    array (
                      'description' => '物联网卡的MSISDN。',
                      'type' => 'string',
                      'example' => '1441204374591',
                    ),
                    'UsageDataTotal' => 
                    array (
                      'description' => '单卡总使用量',
                      'type' => 'string',
                      'example' => '50',
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'description' => '下一页查询所需值。',
                'type' => 'string',
                'example' => 'iou001238joojjaere',
              ),
              'MaxResults' => 
              array (
                'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
                'type' => 'string',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '列表的条目数。',
                'type' => 'string',
                'example' => '2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"88C2F32F-B641-5980-B7A5-6907050ABCD1\\",\\n  \\"Cards\\": [\\n    {\\n      \\"Iccid\\": \\"89091231231219123\\",\\n      \\"NetType\\": \\"5G\\",\\n      \\"APN\\": \\"bjaliyun01s.5gbj.bjiot\\",\\n      \\"ISP\\": \\"Telecom\\",\\n      \\"IpAddress\\": \\"10.0.0.118\\",\\n      \\"Imsi\\": \\"8912039123\\",\\n      \\"Imei\\": \\"7896129300\\",\\n      \\"Lock\\": false,\\n      \\"Spec\\": \\"CONSUMER_THREE_IN_ONE\\",\\n      \\"Status\\": \\"Activated\\",\\n      \\"Description\\": \\"test\\",\\n      \\"Name\\": \\"test\\",\\n      \\"UsageDataMonth\\": 20,\\n      \\"OrderId\\": \\"89099123012\\",\\n      \\"ActivatedTime\\": \\"2022-3-15 22:20:00\\",\\n      \\"BusinessStatus\\": \\"Available\\",\\n      \\"Msisdn\\": \\"1441204374591\\",\\n      \\"UsageDataTotal\\": \\"50\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"iou001238joojjaere\\",\\n  \\"MaxResults\\": \\"10\\",\\n  \\"TotalCount\\": \\"2\\"\\n}","type":"json"}]',
      'title' => '查询5G高速上云实例下的卡信息',
    ),
    'ListCardUsages' => 
    array (
      'summary' => '查询物联网卡流量使用信息。',
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
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例ID 。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5g-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Iccids',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '物联网SIM卡卡号，每次最大50条',
            'type' => 'array',
            'items' => 
            array (
              'description' => '物联网卡的iccid。',
              'type' => 'string',
              'required' => false,
              'example' => '890912389123',
            ),
            'required' => false,
            'maxItems' => 50,
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
            'title' => 'Schema of Response',
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '186B6E37-D9D1-5E64-ACDE-E89F7E68A37B',
              ),
              'Cards' => 
              array (
                'title' => '数组，返回示例目录。',
                'description' => '卡信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => 'RegionItemType',
                  'description' => '卡信息项',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Iccid' => 
                    array (
                      'title' => '资源一级ID',
                      'description' => '物联网卡的iccid。',
                      'type' => 'string',
                      'example' => '89091231231219123',
                    ),
                    'UsageDataMonth' => 
                    array (
                      'description' => '本月已用流量，单位MB。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '20',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '返回总量',
                'type' => 'string',
                'example' => '2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"186B6E37-D9D1-5E64-ACDE-E89F7E68A37B\\",\\n  \\"Cards\\": [\\n    {\\n      \\"Iccid\\": \\"89091231231219123\\",\\n      \\"UsageDataMonth\\": 20\\n    }\\n  ],\\n  \\"TotalCount\\": \\"2\\"\\n}","type":"json"}]',
      'title' => '查询卡流量使用信息',
      'description' => '当月流量信息是本月1号0点开始到月底结束。',
    ),
    'GetCard' => 
    array (
      'summary' => '获取单卡信息。',
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
          'name' => 'Iccid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的iccid。',
            'type' => 'string',
            'required' => true,
            'example' => '11111111111',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求iD',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                ),
                'example' => '0B28B72A-BD16-51F7-AAEE-55247FE02729',
              ),
              'Iccid' => 
              array (
                'description' => '物联网卡的iccid。',
                'type' => 'string',
                'example' => '111111111',
              ),
              'NetType' => 
              array (
                'description' => '网络类型，取值：

- **4G**
- **5G**',
                'type' => 'string',
                'example' => '5G',
              ),
              'APN' => 
              array (
                'description' => '运营商APN的id。',
                'type' => 'string',
                'example' => 'zjalyjs01s.5gjs.njiot',
              ),
              'ISP' => 
              array (
                'description' => '5G高速上云实例的运营商。取值：
- **telecom**：中国电信。
- **mobile**：中国移动。
- **unicom**：中国联通。',
                'type' => 'string',
                'example' => 'Unicom',
              ),
              'IpAddress' => 
              array (
                'description' => '物联网卡的固定IP地址。',
                'type' => 'string',
                'example' => '172.24.2.121',
              ),
              'Imsi' => 
              array (
                'description' => '物联网卡的IMSI。',
                'type' => 'string',
                'example' => '12123123',
              ),
              'Imei' => 
              array (
                'description' => '设备IMEI。',
                'type' => 'string',
                'example' => '23412313513512',
              ),
              'Lock' => 
              array (
                'description' => '卡是否锁定。',
                'type' => 'string',
                'example' => 'true',
              ),
              'Spec' => 
              array (
                'description' => '规格',
                'type' => 'string',
                'example' => 'CONSUMER_THREE_IN_ONE',
              ),
              'SimStatus' => 
              array (
                'description' => '卡的状态，取值：

- **Testable**: 可测试
- **Activatable**: 可激活
- **Activated**: 已激活
- **Deactivated**: 已停用
- **Failed**: 已失效
- **Cleared**: 已清除
- **Replaced**: 已更换
- **Resuming**: 恢复中
- **ShutDown**: 已停机',
                'type' => 'string',
                'example' => 'Deactivated',
              ),
              'Status' => 
              array (
                'description' => '实例状态，取值：

- **Creating**: 创建中
- **Available**: 有效的稳定状态
- **UnAvailable**: 无效状态
- **Pending**: 配置中
- **Deleting**: 删除中',
                'type' => 'string',
                'example' => 'Available',
              ),
              'Description' => 
              array (
                'description' => '描述。',
                'type' => 'string',
                'example' => 'task-test',
              ),
              'Name' => 
              array (
                'description' => '名称。',
                'type' => 'string',
                'example' => 'test',
              ),
              'WirelessCloudConnectorId' => 
              array (
                'description' => '5G高速上云实例id。',
                'type' => 'string',
                'example' => 'cc5g-xxxxxxx',
              ),
              'CloudConnectorId' => 
              array (
                'description' => '云连接id。',
                'type' => 'string',
                'example' => 'iotcc-xxxxxxxx',
              ),
              'UsageDataMonth' => 
              array (
                'description' => '本月已用流量，单位MB。
本字段信息存在一些外部条件等影响，会出现信息同步滞后，建议使用[ListCardUsages](https://help.aliyun.com/document_detail/472077.html?spm=a2c4g.438976.0.0.8bbc1711r5XXDT)查询单卡流量信息。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'OrderId' => 
              array (
                'description' => '订单id。',
                'type' => 'string',
                'example' => '12312341234124',
              ),
              'ActivatedTime' => 
              array (
                'description' => '激活时间。',
                'type' => 'string',
                'example' => '2022-08-25 17:34:57',
              ),
              'Msisdn' => 
              array (
                'description' => '物联网卡的MSISDN。',
                'type' => 'string',
                'example' => '2312341231235',
              ),
              'UsageDataTotal' => 
              array (
                'description' => '单卡总使用量，单位MB。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1000',
              ),
              'LimitThreshold' => 
              array (
                'description' => '达量限速阈值，单位MB。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '50',
              ),
              'StopThreshold' => 
              array (
                'description' => '达量停机阈值，单位MB。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '4096',
              ),
              'AlarmThreshold' => 
              array (
                'description' => '告警阈值，单位MB。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1000',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0B28B72A-BD16-51F7-AAEE-55247FE02729\\",\\n  \\"Iccid\\": \\"111111111\\",\\n  \\"NetType\\": \\"5G\\",\\n  \\"APN\\": \\"zjalyjs01s.5gjs.njiot\\",\\n  \\"ISP\\": \\"Unicom\\",\\n  \\"IpAddress\\": \\"172.24.2.121\\",\\n  \\"Imsi\\": \\"12123123\\",\\n  \\"Imei\\": \\"23412313513512\\",\\n  \\"Lock\\": \\"true\\",\\n  \\"Spec\\": \\"CONSUMER_THREE_IN_ONE\\",\\n  \\"SimStatus\\": \\"Deactivated\\",\\n  \\"Status\\": \\"Available\\",\\n  \\"Description\\": \\"task-test\\",\\n  \\"Name\\": \\"test\\",\\n  \\"WirelessCloudConnectorId\\": \\"cc5g-xxxxxxx\\",\\n  \\"CloudConnectorId\\": \\"iotcc-xxxxxxxx\\",\\n  \\"UsageDataMonth\\": 50,\\n  \\"OrderId\\": \\"12312341234124\\",\\n  \\"ActivatedTime\\": \\"2022-08-25 17:34:57\\",\\n  \\"Msisdn\\": \\"2312341231235\\",\\n  \\"UsageDataTotal\\": 1000,\\n  \\"LimitThreshold\\": 50,\\n  \\"StopThreshold\\": 4096,\\n  \\"AlarmThreshold\\": 1000\\n}","type":"json"}]',
      'title' => '获取单卡信息',
    ),
    'GetCardLockReason' => 
    array (
      'summary' => '获取锁卡原因。',
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
          'name' => 'Iccid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网卡的iccid。',
            'type' => 'string',
            'required' => true,
            'example' => '*********11111',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => 'F32C0BBE-5025-5561-8976-7BD096BA21FB',
              ),
              'LockReason' => 
              array (
                'description' => '锁定原因。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'CreditTwoWayStop' => 'CreditTwoWayStop',
                  'ExpireStop' => 'ExpireStop',
                  'ActiveTwoWayStop' => 'ActiveTwoWayStop',
                  'LocationStop' => 'LocationStop',
                  'NoReasonStop' => 'NoReasonStop',
                  'SeparationStop' => 'SeparationStop',
                  'M2MStop' => 'M2MStop',
                  'ForceTwoWayStop' => 'ForceTwoWayStop',
                ),
                'example' => 'ForceTwoWayStop',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F32C0BBE-5025-5561-8976-7BD096BA21FB\\",\\n  \\"LockReason\\": \\"ForceTwoWayStop\\"\\n}","type":"json"}]',
      'title' => '获取锁卡原因',
    ),
    'FailCards' => 
    array (
      'summary' => '销卡。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Iccids',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '卡的iccid列表，最多200条。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '物联网卡的iccid。',
              'type' => 'string',
              'required' => false,
              'enumValueTitles' => 
              array (
              ),
              'example' => '8986*******',
            ),
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'FailCards',
            'maxItems' => 50,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'cn-hangzhou',
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
            'enumValueTitles' => 
            array (
            ),
            'example' => 'TF-CreateServerlessDBInstance-1639649079-51d933f6-0251-4057-9276',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会激活/恢复卡状态。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后激活/恢复卡状态。',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'false',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '186B6E37-D9D1-5E64-ACDE-E89F7E68A37B',
              ),
            ),
            'enumValueTitles' => 
            array (
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"186B6E37-D9D1-5E64-ACDE-E89F7E68A37B\\"\\n}","type":"json"}]',
      'title' => '销卡',
      'description' => '**销卡操作需谨慎，对卡进行销卡行为不可逆。**。',
    ),
    'RebindCards' => 
    array (
      'summary' => '换绑解锁单卡。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Iccids',
          'in' => 'query',
          'allowEmptyValue' => false,
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '物联网SIM卡卡号，每次最大500条',
            'type' => 'array',
            'items' => 
            array (
              'description' => '物联网卡的iccid。',
              'type' => 'string',
              'required' => false,
              'example' => '123456789',
            ),
            'required' => true,
            'maxItems' => 1000,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '区域ID',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会删除批量操作卡任务。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后删除批量操作卡任务。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D2A9864E-BB8D-5A5C-90FC-E2FBD5D0BF9B',
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
            'errorCode' => 'OperationDenied.CardsSimStatusNotReBind',
            'errorMessage' => 'The operation is not allowed because of card status not support to rebind.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.TestCardFlowExceedQuota',
            'errorMessage' => 'The operation is not allowed because of test card flow exceed quota.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotFound.IccID',
            'errorMessage' => 'The specified resource of iccid is not found.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.SingCardOneMonthRebindExceeded',
            'errorMessage' => 'The operation is not allowed because of the number of times per card per month exceed quota.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D2A9864E-BB8D-5A5C-90FC-E2FBD5D0BF9B\\"\\n}","type":"json"}]',
      'title' => '换绑解锁单卡',
      'description' => '物联网卡在换绑设备时，运营商会锁定此卡，为了能够正常使用，一般需要对此卡进行换绑解锁，注意：单卡单月换绑解锁部分运营商只能支持2次。',
    ),
    'ListCardDayUsages' => 
    array (
      'summary' => '查询单卡单日流量。',
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
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5g-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Iccids',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '物联网SIM卡卡号，每次最大50条',
            'type' => 'array',
            'items' => 
            array (
              'description' => '物联网卡的iccid。',
              'type' => 'string',
              'required' => false,
              'example' => '890912389123',
            ),
            'required' => true,
            'maxItems' => 50,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'LatestMonthNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询最近几个月卡流量数据，默认两个月，包含当月。参数范围[1,6]',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '6',
            'minimum' => '1',
            'enumValueTitles' => 
            array (
            ),
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
            'title' => 'Schema of Response',
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'AA93A076-3D94-51AB-AC70-4C94AF003B03',
              ),
              'Cards' => 
              array (
                'title' => '数组，返回示例目录。',
                'description' => '卡流量信息',
                'type' => 'array',
                'items' => 
                array (
                  'title' => 'RegionItemType',
                  'description' => '卡流量信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Iccid' => 
                    array (
                      'title' => '资源一级ID',
                      'description' => '物联网卡的iccid。',
                      'type' => 'string',
                      'example' => '89091231231219123',
                    ),
                    'UsageDataMonths' => 
                    array (
                      'description' => '卡单月流量信息',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '卡单月流量信息',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'UsageDataMonth' => 
                          array (
                            'description' => '月已用流量，单位MB。',
                            'type' => 'string',
                            'example' => '1030',
                          ),
                          'Month' => 
                          array (
                            'description' => '月份',
                            'type' => 'string',
                            'example' => '202207',
                          ),
                          'CardDayUsages' => 
                          array (
                            'description' => '卡天级别流量信息',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '卡天级别流量信息',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Day' => 
                                array (
                                  'description' => '日',
                                  'type' => 'string',
                                  'example' => '20220701',
                                ),
                                'UsageData' => 
                                array (
                                  'description' => '日已用流量，单位MB。',
                                  'type' => 'string',
                                  'example' => '40',
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
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AA93A076-3D94-51AB-AC70-4C94AF003B03\\",\\n  \\"Cards\\": [\\n    {\\n      \\"Iccid\\": \\"89091231231219123\\",\\n      \\"UsageDataMonths\\": [\\n        {\\n          \\"UsageDataMonth\\": \\"1030\\",\\n          \\"Month\\": \\"202207\\",\\n          \\"CardDayUsages\\": [\\n            {\\n              \\"Day\\": \\"20220701\\",\\n              \\"UsageData\\": \\"40\\"\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询单卡单日流量',
      'description' => '返回参数如果没有此卡或者有此卡但是某些天没有，说明这些未返回的天此卡没有使用流量。',
    ),
    'ResetAreaLimitCards' => 
    array (
      'summary' => '物联网卡区域限制解锁',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Iccids',
          'in' => 'query',
          'allowEmptyValue' => false,
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '物联网SIM卡卡号，每次最大50条',
            'type' => 'array',
            'items' => 
            array (
              'description' => '物联网SIM卡卡号，每次最大50条',
              'type' => 'string',
              'required' => false,
              'example' => '898606*******',
            ),
            'required' => true,
            'maxItems' => 1000,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
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
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会创建批量操作卡任务。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查直接创建批量操作卡任务。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'Province',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '省份。',
            'type' => 'string',
            'required' => true,
            'example' => '湖南省',
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
            'description' => '响应返回体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
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
            'errorCode' => 'OperationDenied.CardsSimStatusNotResume',
            'errorMessage' => 'The operation is not allowed because of card status not support to resume.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\"\\n}","type":"json"}]',
      'title' => '区域限制解锁',
    ),
    'ListCardAreaLimitSupportArea' => 
    array (
      'summary' => '查询卡区域解锁支持的省份。',
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
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回信息的语言类型：

- zh：中文
- en：英文

默认不填中文',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '区域ID',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ProvinceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '省份名称（非必填）。',
            'type' => 'string',
            'required' => false,
            'example' => '浙江省',
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
            'description' => '返回结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求iD',
                'type' => 'string',
                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
              ),
              'Provinces' => 
              array (
                'title' => '数组，返回示例目录。',
                'description' => '数组，返回示例目录。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '支持的中国省份。',
                  'type' => 'string',
                  'example' => '江苏省',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\",\\n  \\"Provinces\\": [\\n    \\"江苏省\\"\\n  ]\\n}","type":"json"}]',
      'title' => '查询卡区域解锁支持的省份',
    ),
    'CreateAuthorizationRule' => 
    array (
      'summary' => '创建授权规则。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5g-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则名称，长度不超过128字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'Test',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则描述，长度不超过256字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ar5g-test',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceCidr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源CIDR地址块。',
            'type' => 'string',
            'required' => false,
            'example' => '0.0.0.0/0',
          ),
        ),
        4 => 
        array (
          'name' => 'DestinationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标类型，取值：
- **Cidr**: 网段
- **Domain**: 域名或泛域名',
            'type' => 'string',
            'required' => true,
            'example' => 'Cidr',
          ),
        ),
        5 => 
        array (
          'name' => 'Protocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议类型。取值：

- **icmp**：网络控制报文协议。
- **tcp**：传输控制协议。
- **udp**：用户数据报协议。
- **all**：支持所有协议。',
            'type' => 'string',
            'required' => false,
            'example' => 'all',
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
            'example' => '-1/-1',
          ),
        ),
        7 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标地址或域名。',
            'type' => 'string',
            'required' => true,
            'example' => '10.0.0.1',
          ),
        ),
        8 => 
        array (
          'name' => 'Policy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则策略，取值：
- **Permit**：允许
- **Deny**：拒绝',
            'type' => 'string',
            'required' => true,
            'example' => 'Permit',
          ),
        ),
        9 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        10 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会创建授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后直接创建授权规则。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '61202DF5-668B-5EDA-8177-F2D71F4737C1',
              ),
              'AuthorizationRuleId' => 
              array (
                'description' => '授权规则id。',
                'type' => 'string',
                'example' => 'ar5g-12fnojjtkkre28t08j',
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
            'errorCode' => 'OperationDenied.CIDRMaskTooLarge',
            'errorMessage' => 'The operation is not allowed because of CIDR too large.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"61202DF5-668B-5EDA-8177-F2D71F4737C1\\",\\n  \\"AuthorizationRuleId\\": \\"ar5g-12fnojjtkkre28t08j\\"\\n}","type":"json"}]',
      'title' => '创建授权规则',
    ),
    'DeleteAuthorizationRule' => 
    array (
      'summary' => '删除授权规则。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5g-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'AuthorizationRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则id。',
            'type' => 'string',
            'required' => true,
            'example' => 'ar5g-xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。
',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会删除授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后直接删除授权规则。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\"\\n}","type":"json"}]',
      'title' => '删除授权规则',
    ),
    'UpdateAuthorizationRule' => 
    array (
      'summary' => '更新授权规则。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5g-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'AuthorizationRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则id。',
            'type' => 'string',
            'required' => true,
            'example' => 'ar5g-xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '名称，长度不超过128字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'Test',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '描述，长度不超过256字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ar5g-test',
          ),
        ),
        4 => 
        array (
          'name' => 'SourceCidr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源CIDR地址块。',
            'type' => 'string',
            'required' => false,
            'example' => '0.0.0.0/0',
          ),
        ),
        5 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标地址或域名。',
            'type' => 'string',
            'required' => false,
            'example' => '10.0.0.1',
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
            'example' => 'all',
          ),
        ),
        7 => 
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
            'example' => '-1/-1',
          ),
        ),
        8 => 
        array (
          'name' => 'Policy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则策略，取值：
- **Permit**：允许
- **Deny**：拒绝',
            'type' => 'string',
            'required' => false,
            'example' => 'Permit',
          ),
        ),
        9 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        10 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会更新授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后更新授权规则。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => 'D3BAFE75-C670-52DB-9739-03133E5FC914',
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
            'errorCode' => 'OperationDenied.CIDRMaskTooLarge',
            'errorMessage' => 'The operation is not allowed because of CIDR too large.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D3BAFE75-C670-52DB-9739-03133E5FC914\\"\\n}","type":"json"}]',
      'title' => '更新授权规则',
    ),
    'AddDNSAuthorizationRule' => 
    array (
      'summary' => '创建DNS授权规则。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5g-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '名称，长度不超过128字符。',
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
            'description' => '描述，长度不超过256字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ar5g-test',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceDNSIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS服务器地址。',
            'type' => 'string',
            'required' => true,
            'example' => '0.0.0.0',
          ),
        ),
        4 => 
        array (
          'name' => 'DestinationIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要重定向的DNS服务器地址。',
            'type' => 'string',
            'required' => false,
            'example' => '1.1.1.1',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        6 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会创建DNS授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后创建DNS授权规则。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
              ),
              'AuthorizationRuleId' => 
              array (
                'description' => '生成的DNS授权规则id。',
                'type' => 'string',
                'example' => 'ar5g-xxxx',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\",\\n  \\"AuthorizationRuleId\\": \\"ar5g-xxxx\\"\\n}","type":"json"}]',
      'title' => '创建DNS授权规则',
    ),
    'UpdateDNSAuthorizationRule' => 
    array (
      'summary' => '更新DNS授权规则。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5g-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'AuthorizationRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS授权规则ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ar5g-xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '名称，长度不超过128字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '描述，长度不超过256字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ar5g-test',
          ),
        ),
        4 => 
        array (
          'name' => 'SourceDNSIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS服务器地址。',
            'type' => 'string',
            'required' => false,
            'example' => '0.0.0.0',
          ),
        ),
        5 => 
        array (
          'name' => 'DestinationIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要重定向的DNS服务器地址。',
            'type' => 'string',
            'required' => false,
            'example' => '10.0.0.1',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        7 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会更新DNS授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后更新DNS授权规则。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\"\\n}","type":"json"}]',
      'title' => '更新DNS授权规则',
    ),
    'ListAuthorizationRules' => 
    array (
      'summary' => '查询授权规则列表。',
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
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5g-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Statuses',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '授权规则状态列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => ' 授权规则状态，取值：
- **Creating**:创建中
- **Pending**:配置中
- **Available**:有效的稳定状态
- **Invalid**: 无效
- **Deleting**:删除中',
              'type' => 'string',
              'required' => false,
              'example' => 'Creating',
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'AuthorizationRuleIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '授权规则id列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '授权规则id',
              'type' => 'string',
              'required' => false,
              'example' => 'ar5g-xxxx',
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'Names',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '授权规则名称列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '名称，长度不超过128字符。',
              'type' => 'string',
              'required' => false,
              'example' => 'Test',
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'DestinationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标类型，取值：
- **Cidr**: 网段
- **Domain**: 域名或泛域名
- **IpPort**: IP重定向',
            'type' => 'string',
            'required' => false,
            'example' => 'Cidr',
          ),
        ),
        5 => 
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
            'example' => 'all',
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
            'example' => '-1/-1',
          ),
        ),
        7 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标地址、域名或泛域名，前缀匹配。',
            'type' => 'string',
            'required' => false,
            'example' => '10.0.0.1',
          ),
        ),
        8 => 
        array (
          'name' => 'Policy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则策略，取值：
- **Permit**：允许
- **Deny**：拒绝
- **Mapping**：重定向',
            'type' => 'string',
            'required' => false,
            'example' => 'Permit',
          ),
        ),
        9 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '类型，取值：
- **System**: 系统
- **Default**: 默认
- **Customer**: 自定义',
            'type' => 'string',
            'required' => false,
            'example' => 'System',
          ),
        ),
        10 => 
        array (
          'name' => 'Dns',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否为DNS。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        11 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上一页的查询返回的值，首页查询不传值。',
            'type' => 'string',
            'required' => false,
            'example' => 'iou001238joojjaere',
          ),
        ),
        12 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '207F9929-806E-5622-8E4F-8484F7000C22',
              ),
              'AuthorizationRules' => 
              array (
                'title' => '数组，返回示例目录。',
                'description' => '授权规则列表。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => 'RegionItemType',
                  'description' => 'RegionItemType',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AuthorizationRuleId' => 
                    array (
                      'title' => '资源一级ID',
                      'description' => '授权规则id。',
                      'type' => 'string',
                      'example' => 'ar5g-xxxx',
                    ),
                    'Status' => 
                    array (
                      'title' => '资源名称',
                      'description' => '授权规则状态，取值：
-  **Creating**: 创建中 
-  **Pending**: 配置中
-  **Available**: 有效的稳定状态
-  **Invalid**: 无效
-  **Deleting**: 删除中',
                      'type' => 'string',
                      'example' => 'Pending',
                    ),
                    'Name' => 
                    array (
                      'title' => '创建时间',
                      'description' => '授权规则名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Description' => 
                    array (
                      'description' => '授权规则描述。',
                      'type' => 'string',
                      'example' => 'ar5g-test',
                    ),
                    'Type' => 
                    array (
                      'description' => '类型，取值：
- **System**: 系统
- **Default**: 默认
- **Customer**: 自定义',
                      'type' => 'string',
                      'example' => 'Default',
                    ),
                    'SourceCidr' => 
                    array (
                      'description' => '源CIDR地址块。',
                      'type' => 'string',
                      'example' => '0.0.0.0/0',
                    ),
                    'DestinationType' => 
                    array (
                      'description' => '目标类型，取值：
- **Cidr**: 网段
- **Domain**: 域名或泛域名
- **IpPort**: IP重定向',
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
                      'example' => 'all',
                    ),
                    'DestinationPort' => 
                    array (
                      'description' => '目标端口范围。取值范围：

- TCP、UDP协议：1~65535。使用正斜线（/）隔开起始端口和终止端口。例如：1/200。
- ICMP协议：-1/-1。
- ALL：-1/-1。',
                      'type' => 'string',
                      'example' => '0-65535',
                    ),
                    'Destination' => 
                    array (
                      'description' => '目标地址、域名或泛域名，前缀匹配。',
                      'type' => 'string',
                      'example' => '10.0.0.0/24',
                    ),
                    'Policy' => 
                    array (
                      'description' => '授权规则策略，取值：
- **Permit**：允许
- **Deny**：拒绝
- **Mapping**：重定向',
                      'type' => 'string',
                      'example' => 'Permit',
                    ),
                    'Dns' => 
                    array (
                      'description' => '是否为DNS。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2022-3-15 22:20:00',
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'description' => '下一次查询的起始token。',
                'type' => 'string',
                'example' => 'iou001238joojjaere',
              ),
              'MaxResults' => 
              array (
                'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
                'type' => 'string',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '列表的条目数。',
                'type' => 'string',
                'example' => '2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"207F9929-806E-5622-8E4F-8484F7000C22\\",\\n  \\"AuthorizationRules\\": [\\n    {\\n      \\"AuthorizationRuleId\\": \\"ar5g-xxxx\\",\\n      \\"Status\\": \\"Pending\\",\\n      \\"Name\\": \\"test\\",\\n      \\"Description\\": \\"ar5g-test\\",\\n      \\"Type\\": \\"Default\\",\\n      \\"SourceCidr\\": \\"0.0.0.0/0\\",\\n      \\"DestinationType\\": \\"Cidr\\",\\n      \\"Protocol\\": \\"all\\",\\n      \\"DestinationPort\\": \\"0-65535\\",\\n      \\"Destination\\": \\"10.0.0.0/24\\",\\n      \\"Policy\\": \\"Permit\\",\\n      \\"Dns\\": true,\\n      \\"CreateTime\\": \\"2022-3-15 22:20:00\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"iou001238joojjaere\\",\\n  \\"MaxResults\\": \\"10\\",\\n  \\"TotalCount\\": \\"2\\"\\n}","type":"json"}]',
      'title' => '查询授权规则',
    ),
    'CreateBatchOperateCardsTask' => 
    array (
      'summary' => '创建批量操作卡任务。',
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
            'description' => '批量操作任务名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '批量操作任务描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'task- test',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        4 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会创建批量操作卡任务。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查直接创建批量操作卡任务。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'WirelessCloudConnectorIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '5G上云实例的id列表，最多10个。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
              'example' => 'cc5g-xxxx',
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'Iccids',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '卡的iccid列表，最多200条。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '卡的iccid。',
              'type' => 'string',
              'required' => false,
              'example' => '890912389123',
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'IccidsOssFilePath',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'iccid文件存放路径。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://examplebucket.oss-eu-central-1.aliyuncs.com/***',
          ),
        ),
        8 => 
        array (
          'name' => 'OperateType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '限制类型，取值：

- **BreakNetwork**: 达量断网
- **LimitRate**: 达量限速
- **Alarm**: 达量告警',
            'type' => 'string',
            'required' => true,
            'example' => 'BreakNetwork',
          ),
        ),
        9 => 
        array (
          'name' => 'Threshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '达量阈值，单位MB。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '100',
          ),
        ),
        10 => 
        array (
          'name' => 'EffectType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生效类型，取值：

- **CurrentMonth**：当月生效
- **ContinualMonth**：连续生效',
            'type' => 'string',
            'required' => true,
            'example' => 'CurrentMonth',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
              ),
              'BatchOperateCardsTaskId' => 
              array (
                'description' => '批量操作任务id。',
                'type' => 'string',
                'example' => 'boct-xxxx',
              ),
              'OperateResultOssFilePath' => 
              array (
                'description' => '批量操作结果的文件路径。',
                'type' => 'string',
                'example' => 'https://examplebucket.oss-eu-central-1.aliyuncs.com/***',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\",\\n  \\"BatchOperateCardsTaskId\\": \\"boct-xxxx\\",\\n  \\"OperateResultOssFilePath\\": \\"https://examplebucket.oss-eu-central-1.aliyuncs.com/***\\"\\n}","type":"json"}]',
      'title' => '创建批量操作卡任务',
    ),
    'DeleteBatchOperateCardsTask' => 
    array (
      'summary' => '删除批量操作卡任务。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'BatchOperateCardsTaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建批量操作任务生成的id。',
            'type' => 'string',
            'required' => true,
            'example' => 'boct-xxx',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会删除批量操作卡任务。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后删除批量操作卡任务。',
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
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shenzhen',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\"\\n}","type":"json"}]',
      'title' => '删除批量操作卡任务',
    ),
    'UpdateBatchOperateCardsTask' => 
    array (
      'summary' => '更新批量操作卡任务。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'task-test',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        4 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会更新批量操作卡任务。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后更新批量操作卡任务。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'WirelessCloudConnectorIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '5G高速上云实例的id列表，最多10个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '5G高速上云实例id。',
              'type' => 'string',
              'required' => false,
              'example' => 'cc5g-xxxx',
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'Iccids',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '卡的iccid列表，最多200条。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '卡的iccid。',
              'type' => 'string',
              'required' => false,
              'example' => '890912389123',
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'IccidsOssFilePath',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'iccid文件存放路径。',
            'type' => 'string',
            'required' => false,
            'example' => 'cciot-cn-hangzhou/127859184306****/***.csv',
          ),
        ),
        8 => 
        array (
          'name' => 'OperateType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '限制类型，取值: 

- **BreakNetwork**: 达量断网
- **LimitRate**: 达量限速
- **Alarm**: 达量告警',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'BreakNetwork',
          ),
        ),
        9 => 
        array (
          'name' => 'Threshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '达量阈值，单位MB。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
        ),
        10 => 
        array (
          'name' => 'EffectType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生效类型，取值：

- **CurrentMonth**
- **ContinualMonth**',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'CurrentMonth',
          ),
        ),
        11 => 
        array (
          'name' => 'BatchOperateCardsTaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '批量操作任务id。',
            'type' => 'string',
            'required' => true,
            'example' => 'boct-xxxx',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\"\\n}","type":"json"}]',
      'title' => '更新批量操作卡任务',
    ),
    'ListBatchOperateCardsTasks' => 
    array (
      'summary' => '列出批量操作卡任务。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Statuses',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '批量操作任务的状态。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '任务状态，取值：
-  **Creating**: 创建中 
-  **Pending**: 待生效
-  **Available**: 全部成功
-  **PartialAvailable**: 部分成功
-  **UnAvailable**: 已失效
-  **Fail**: 全部失败',
              'type' => 'string',
              'required' => false,
              'example' => 'Creating',
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'BatchOperateCardsTaskIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '批量操作任务的id列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '批量操作任务id。',
              'type' => 'string',
              'required' => false,
              'example' => 'boct-xxxx',
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上一页的查询返回的值，首页查询不传值。',
            'type' => 'string',
            'required' => false,
            'example' => 'iou001238joojjaere',
          ),
        ),
        4 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'Names',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '批量操作的名称。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
              'example' => 'xxxx工厂实例批量限速',
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
            'title' => 'Schema of Response',
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
              ),
              'BatchOperateCardsTasks' => 
              array (
                'title' => '数组，返回示例目录。',
                'description' => '卡批量操作任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => 'RegionItemType',
                  'description' => '任务项',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'BatchOperateCardsTaskId' => 
                    array (
                      'title' => '资源一级ID',
                      'description' => '批量操作任务ID。',
                      'type' => 'string',
                      'example' => 'boct-xxxx',
                    ),
                    'Status' => 
                    array (
                      'description' => '任务状态，取值：
-  **Creating**: 创建中 
-  **Pending**: 待生效
-  **Available**: 全部成功
-  **PartialAvailable**: 部分成功
-  **UnAvailable**: 已失效
-  **Fail**: 全部失败',
                      'type' => 'string',
                      'example' => 'Available',
                    ),
                    'OperateType' => 
                    array (
                      'title' => '创建时间',
                      'description' => '限制类型，枚举值：

- **BreakNetwork**: 达量断网
- **LimitRate**: 达量限速
- **Alarm**: 达量告警',
                      'type' => 'string',
                      'example' => 'BreakNetwork',
                    ),
                    'Threshold' => 
                    array (
                      'description' => '达量阈值，单位MB。',
                      'type' => 'string',
                      'example' => '100',
                    ),
                    'EffectType' => 
                    array (
                      'description' => '生效类型，枚举值：

- **CurrentMonth**
- **ContinualMonth**',
                      'type' => 'string',
                      'example' => 'CurrentMonth',
                    ),
                    'IccidsOssFilePath' => 
                    array (
                      'description' => 'iccid文件存放路径。',
                      'type' => 'string',
                      'example' => 'https://examplebucket.oss-eu-central-1.aliyuncs.com/***',
                    ),
                    'WirelessCloudConnectors' => 
                    array (
                      'description' => '5G高速上云的实例ID和状态列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'WirelessCloudConnectorId' => 
                          array (
                            'description' => '5G高速上云实例id。',
                            'type' => 'string',
                            'example' => 'cc5g-xxxx',
                          ),
                          'Status' => 
                          array (
                            'description' => '状态，枚举值：

- **Creating**: 创建中
- **Available**: 有效的稳定状态
- **Pending**: 配置中
- **Deleting**: 删除中
- **Deleted**: 已删除',
                            'type' => 'string',
                            'example' => 'Deleted',
                          ),
                        ),
                      ),
                    ),
                    'OperateResultOssFilePath' => 
                    array (
                      'description' => '批量操作结果的文件路径。',
                      'type' => 'string',
                      'example' => 'https://examplebucket.oss-eu-central-1.aliyuncs.com/***',
                    ),
                    'Description' => 
                    array (
                      'description' => '批量操作描述。',
                      'type' => 'string',
                      'example' => 'task-test',
                    ),
                    'Name' => 
                    array (
                      'description' => '批量操作名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2022-3-15 22:20:00',
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'description' => '下一次查询的起始token。',
                'type' => 'string',
                'example' => 'iou001238joojjaere',
              ),
              'MaxResults' => 
              array (
                'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
                'type' => 'string',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '列表的条目数。',
                'type' => 'string',
                'example' => '2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\",\\n  \\"BatchOperateCardsTasks\\": [\\n    {\\n      \\"BatchOperateCardsTaskId\\": \\"boct-xxxx\\",\\n      \\"Status\\": \\"Available\\",\\n      \\"OperateType\\": \\"BreakNetwork\\",\\n      \\"Threshold\\": \\"100\\",\\n      \\"EffectType\\": \\"CurrentMonth\\",\\n      \\"IccidsOssFilePath\\": \\"https://examplebucket.oss-eu-central-1.aliyuncs.com/***\\",\\n      \\"WirelessCloudConnectors\\": [\\n        {\\n          \\"WirelessCloudConnectorId\\": \\"cc5g-xxxx\\",\\n          \\"Status\\": \\"Deleted\\"\\n        }\\n      ],\\n      \\"OperateResultOssFilePath\\": \\"https://examplebucket.oss-eu-central-1.aliyuncs.com/***\\",\\n      \\"Description\\": \\"task-test\\",\\n      \\"Name\\": \\"test\\",\\n      \\"CreateTime\\": \\"2022-3-15 22:20:00\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"iou001238joojjaere\\",\\n  \\"MaxResults\\": \\"10\\",\\n  \\"TotalCount\\": \\"2\\"\\n}","type":"json"}]',
      'title' => '列出批量操作卡任务',
    ),
    'SubmitDiagnoseTaskForSingleCard' => 
    array (
      'summary' => '发起单张物联网卡的网络诊断。',
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
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5g-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络诊断的源物联网卡ID。',
            'type' => 'string',
            'required' => true,
            'example' => '89860477102170127555',
          ),
        ),
        2 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络诊断的目的IP或者域名。',
            'type' => 'string',
            'required' => false,
            'example' => '106.14.175.4',
          ),
        ),
        3 => 
        array (
          'name' => 'BeginTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络诊断的开始时间戳。单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1662307201200',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络诊断的结束时间戳。单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1662307201200',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例所在的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        6 => 
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
              ),
              'DiagnoseTaskId' => 
              array (
                'description' => '网络诊断任务ID。',
                'type' => 'string',
                'example' => 'diagnoseTask-bp2n6rgaj49qcs34jyzo8',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\",\\n  \\"DiagnoseTaskId\\": \\"diagnoseTask-bp2n6rgaj49qcs34jyzo8\\"\\n}","type":"json"}]',
      'title' => '发起单卡网络诊断',
    ),
    'GetDiagnoseResultForSingleCard' => 
    array (
      'summary' => '查询单张物联网卡的网络诊断结果。',
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
          'name' => 'RegionNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '94032572-8758-575E-B306-86F59D1B826E',
              ),
              'WirelessCloudConnectorId' => 
              array (
                'description' => '5G高速上云实例ID。',
                'type' => 'string',
                'example' => 'cc5g-xxxx',
              ),
              'CardIp' => 
              array (
                'description' => '网络诊断的源端卡的IP地址。',
                'type' => 'string',
                'example' => '10.176.78.61',
              ),
              'IccId' => 
              array (
                'description' => '网络诊断的源端卡的ID。',
                'type' => 'string',
                'example' => '89860477102170127555',
              ),
              'Destination' => 
              array (
                'description' => '网络诊断目的地址或域名。',
                'type' => 'string',
                'example' => '106.14.175.4',
              ),
              'DestinationType' => 
              array (
                'description' => '网路诊断的目的类型。取值：

- **IP**：表示诊断的目的类型是IP类型。

- **Domain**：表示诊断的目的类型是域名类型。
',
                'type' => 'string',
                'example' => 'Domain',
              ),
              'BeginTime' => 
              array (
                'description' => '网络诊断的开始时间戳。单位：秒。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1646100223024',
              ),
              'EndTime' => 
              array (
                'description' => '网络诊断的结束时间戳。单位：秒。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1646100223264',
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
                  'description' => '诊断结果。',
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
                    'ErrorItem' => 
                    array (
                      'description' => '诊断部件对应的诊断指标项，详见 **返回参数补充说明**。',
                      'type' => 'string',
                      'example' => 'CardStatus',
                    ),
                    'ErrorDesc' => 
                    array (
                      'description' => '诊断问题的描述。',
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
                  'description' => '诊断项信息。',
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
                      'example' => 'Wrong',
                    ),
                    'SubItems' => 
                    array (
                      'description' => '诊断部件的诊断指标列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '诊断部件的诊断指标。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'SubItem' => 
                          array (
                            'description' => '诊断部件对应的诊断指标项，详见 **返回参数补充说明**。',
                            'type' => 'string',
                            'example' => 'CardStatus',
                          ),
                          'SubItemStatus' => 
                          array (
                            'description' => '诊断指标的状态。取值：

- **Normal**：表示诊断状态正常。
- **Warnning**：表示诊断状态为提示级别错误。
- **Minor**: 表示诊断状态为一般级别错误。
- **Major**: 表示诊断状态为严重级别错误。
- **Unknown**：表示诊断状态未知。',
                            'type' => 'string',
                            'example' => 'Normal',
                          ),
                          'SubItemInfo' => 
                          array (
                            'description' => '诊断指标的附加信息。',
                            'type' => 'string',
                            'example' => 'Card status is real-time',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
                'enumValueTitles' => 
                array (
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"94032572-8758-575E-B306-86F59D1B826E\\",\\n  \\"WirelessCloudConnectorId\\": \\"cc5g-xxxx\\",\\n  \\"CardIp\\": \\"10.176.78.61\\",\\n  \\"IccId\\": \\"89860477102170127555\\",\\n  \\"Destination\\": \\"106.14.175.4\\",\\n  \\"DestinationType\\": \\"Domain\\",\\n  \\"BeginTime\\": 1646100223024,\\n  \\"EndTime\\": 1646100223264,\\n  \\"Status\\": \\"failed\\",\\n  \\"ErrorResult\\": [\\n    {\\n      \\"ErrorLevel\\": \\"Warning\\",\\n      \\"ErrorPart\\": \\"Terminal\\",\\n      \\"ErrorItem\\": \\"CardStatus\\",\\n      \\"ErrorDesc\\": \\"Terminal abnormal\\",\\n      \\"ErrorSuggestion\\": \\"Please check whether the terminal and card are compatible or whether the terminal can send messages\\"\\n    }\\n  ],\\n  \\"DiagnoseItem\\": [\\n    {\\n      \\"Part\\": \\"Terminal\\",\\n      \\"Status\\": \\"Wrong\\",\\n      \\"SubItems\\": [\\n        {\\n          \\"SubItem\\": \\"CardStatus\\",\\n          \\"SubItemStatus\\": \\"Normal\\",\\n          \\"SubItemInfo\\": \\"Card status is real-time\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询单卡诊断结果',
      'responseParamsDescription' => '诊断部件的诊断指标项。取值: 

**Part**: Card
- **CardStatus**: 卡状态
- **CardOnlineStatus**: 卡会话状态

**Part**: Apn
- **GreTunnelStatus**: 运营商隧道状态

**Part**: CCIOT
- **CciotInstanceStatus**: 云连接器实例状态
- **CciotConnectionPoolConfiged**: 云连接器连接池配置状态
- **CciotAuthorizationRulesConfiged**: 云连接器授权规则配置状态
- **CardInCciotConnectionPool**: 卡在云连接器实例连接池中
- **DestinationInCciotAuthorizationRules**: 目的地址在云连接器实例授权规则中
- **DefaultDnsInCciotDnsServiceRules**: 默认的DNS服务地址在授权规则中
- **DestinationConflictWithIpMapping**: 目的地址与IP映射冲突
- **CciotAssociateWithVswitch**: 云连接器实例关联VPC
- **BackhaulRoutePublishedInVpc**: 云连接器实例回程路由发布状态
- **BackhaulRouteExsited**: 云连接器实例回程路由存在状态
- **DnsParseStatus**: 云连接器实例DNS解析状态
- **AccessLogFromCardToDestination**: 卡到目的地址的访问记录
- **AccessLogFromDestinationToCard**: 目的地址到卡的访问记录
- **AccessLogOfCard**: 卡的访问记录
- **AccessLogOfDesination**: 目的地址到访问记录
- **DropLogOfCard**: 卡的丢包记录
- **DropLogOfDestination**: 目的地址的丢包记录
- **CciotCardOnlineStatus**: 卡在线状态',
    ),
    'ListDiagnoseInfoForSingleCard' => 
    array (
      'summary' => '查询5G上云实例的历史诊断信息（不包含诊断结果）。',
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
          'name' => 'RegionNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例所在的地域ID。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例ID 。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5g-xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络诊断的源类型。取值：

- **Ip**：表示通过物联网卡的卡IP进行网络诊断。

- **Iccid**：表示通过物联网卡的卡ID进行网络诊断。',
            'type' => 'string',
            'required' => false,
            'example' => 'Iccid',
          ),
        ),
        3 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络诊断的源端卡的ID',
            'type' => 'string',
            'required' => false,
            'example' => '89860477102170127555',
          ),
        ),
        4 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络诊断任务的状态。取值：
- **success**：表示诊断成功。
- **failed**：表示诊断失败。
- **diagnosing**：表示诊断中。',
            'type' => 'string',
            'required' => false,
            'example' => 'success',
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
            'description' => '分批次查询时每次显示的条目数。取值范围：1~100。默认值：20。',
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
              'RequestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => 'E1E237B1-EED7-55D5-AE5F-671E642DB3B5',
              ),
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：

- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****
',
              ),
              'MaxResults' => 
              array (
                'description' => '分批次查询时每次显示的条目数。取值范围：1~100。默认值：20。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'DiagnoseInfo' => 
              array (
                'description' => '诊断任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'WirelessCloudConnectorId' => 
                    array (
                      'description' => '5G高速上云实例id。',
                      'type' => 'string',
                      'example' => 'cc5g-xxxx',
                    ),
                    'CardIp' => 
                    array (
                      'description' => '网络诊断的源端卡的IP地址。',
                      'type' => 'string',
                      'example' => '10.176.78.61',
                    ),
                    'IccId' => 
                    array (
                      'description' => '网络诊断的源端卡的ID。',
                      'type' => 'string',
                      'example' => '89860477102170127555',
                    ),
                    'SourceType' => 
                    array (
                      'description' => '网络诊断的源类型。',
                      'type' => 'string',
                      'example' => 'Iccid',
                    ),
                    'Source' => 
                    array (
                      'description' => '网络诊断的源端卡IP或者卡ID。',
                      'type' => 'string',
                      'example' => '89860477102170127555',
                    ),
                    'DestinationType' => 
                    array (
                      'description' => '网路诊断的目的类型。取值：

- **IP**：表示诊断的目的类型是IP类型。

- **Domain**：表示诊断的目的类型是域名类型。',
                      'type' => 'string',
                      'example' => 'Domain',
                    ),
                    'Destination' => 
                    array (
                      'description' => '网络诊断的目的IP或者域名。',
                      'type' => 'string',
                      'example' => 'www.xxx.com',
                    ),
                    'BeginTime' => 
                    array (
                      'description' => '网络诊断的开始时间戳。单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1662307200000',
                    ),
                    'EndTime' => 
                    array (
                      'description' => '网络诊断的结束时间戳。单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1662307201200',
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
                    'DiagnoseTime' => 
                    array (
                      'description' => '诊断任务入库的时间戳。单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1662307202400',
                    ),
                    'DiagnoseTaskId' => 
                    array (
                      'description' => '网络诊断任务ID。',
                      'type' => 'string',
                      'example' => 'diagnoseTask-bp2x7tzkdl655liw3mhbg',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '总列表条目数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '50',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E1E237B1-EED7-55D5-AE5F-671E642DB3B5\\",\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\\\n\\",\\n  \\"MaxResults\\": 20,\\n  \\"DiagnoseInfo\\": [\\n    {\\n      \\"WirelessCloudConnectorId\\": \\"cc5g-xxxx\\",\\n      \\"CardIp\\": \\"10.176.78.61\\",\\n      \\"IccId\\": \\"89860477102170127555\\",\\n      \\"SourceType\\": \\"Iccid\\",\\n      \\"Source\\": \\"89860477102170127555\\",\\n      \\"DestinationType\\": \\"Domain\\",\\n      \\"Destination\\": \\"www.xxx.com\\",\\n      \\"BeginTime\\": 1662307200000,\\n      \\"EndTime\\": 1662307201200,\\n      \\"Status\\": \\"failed\\",\\n      \\"DiagnoseTime\\": 1662307202400,\\n      \\"DiagnoseTaskId\\": \\"diagnoseTask-bp2x7tzkdl655liw3mhbg\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 50\\n}","type":"json"}]',
      'title' => '查询历史诊断记录',
    ),
    'GrantNetLink' => 
    array (
      'summary' => '授权云连接器给第三方客户。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例id。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'cc5g-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'NetLinkId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络连接id。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'cciot-xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'f0ba469f-de7f-4dde-8390-0966a1a0ef9a',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会删除授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后直接删除授权规则。',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'False',
          ),
        ),
        4 => 
        array (
          'name' => 'GrantAliUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阿里云授权者UID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => '11111111111',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求iD',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                ),
                'example' => 'E6B58AF9-F1BF-5894-B898-6CE2108463C5',
              ),
            ),
            'enumValueTitles' => 
            array (
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
            'errorCode' => 'OperationDenied.GrantUidNotHaveCcIotSlr',
            'errorMessage' => 'The operation is not allowed because of GrantUid not have AliyunServiceRoleForCCIoT.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.NotSupportGrantToSelf',
            'errorMessage' => 'The operation is not allowed because of not support grant self.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.ExistCustomerAuthorizationRules',
            'errorMessage' => 'The operation is not allowed because of exist customer authorization rules.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E6B58AF9-F1BF-5894-B898-6CE2108463C5\\"\\n}","type":"json"}]',
      'title' => '授权云连接器',
    ),
    'RevokeNetLink' => 
    array (
      'summary' => '主动撤销之前授权动作。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WirelessCloudConnectorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '5G高速上云实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5g-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'NetLinkId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络连接id。',
            'type' => 'string',
            'required' => true,
            'example' => 'iotcc-ua6xy4vpmi24y114ws',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。
',
            'type' => 'string',
            'required' => false,
            'example' => '8278082c-0b8c-412c-b0ad-876a3cf0d0f8',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会取消关联。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后直接取消用户Vpc和Vswitch的关联。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求iD',
                'type' => 'string',
                'example' => '1E781588-69D4-56C3-93BA-DEFECF2596B8',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1E781588-69D4-56C3-93BA-DEFECF2596B8\\"\\n}","type":"json"}]',
      'title' => '撤销授权',
      'description' => '被授权客户如果已经接受授权，此时不能被撤销，只能在未接受之前撤销',
    ),
    'CreateWirelessCloudConnectorGroup' => 
    array (
      'summary' => '创建cc5g实例分组。',
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
            'description' => '实例组名称，长度不超过128字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'test1',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '高速上云服务分组的描述信息。

',
            'type' => 'string',
            'required' => false,
            'example' => 'cc5gg-test',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        4 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会删除实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并删除实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '88C2F32F-B641-5980-B7A5-6907050ABCD1
',
              ),
              'WirelessCloudConnectorGroupId' => 
              array (
                'description' => '实例组实例id。',
                'type' => 'string',
                'example' => 'cc5gg-****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"88C2F32F-B641-5980-B7A5-6907050ABCD1\\\\n\\",\\n  \\"WirelessCloudConnectorGroupId\\": \\"cc5gg-****\\"\\n}","type":"json"}]',
      'title' => '创建分组',
    ),
    'UpdateWirelessCloudConnectorGroup' => 
    array (
      'summary' => '修改cc5g实例分组信息。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WirelessCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组ID。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'cc5gg-****',
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
            'enumValueTitles' => 
            array (
            ),
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

长度为2~256个字符，开头必须为大小写英文字母或中文，但不能为http://或https://。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'description',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        4 => 
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
            'enumValueTitles' => 
            array (
            ),
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                ),
                'example' => '8734B5B2-FC84-54C4-8038-D40228CF01FE',
              ),
            ),
            'enumValueTitles' => 
            array (
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8734B5B2-FC84-54C4-8038-D40228CF01FE\\"\\n}","type":"json"}]',
      'title' => '更新分组信息',
    ),
    'ListWirelessCloudConnectorGroups' => 
    array (
      'summary' => '查询cc5g实例分组。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'WirelessCloudConnectorGroupStatus',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '实例组的状态列表。最多支持10个实例组的状态。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例组的状态。取值：

1. Creating: 创建中 
2. Available: 有效的稳定状态
3. Pending: 配置中 
4. Deleting: 删除中',
              'type' => 'string',
              'required' => false,
              'example' => 'Creating',
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'WirelessCloudConnectorGroupIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '实例组的ID列表。最多支持10个实例组的ID列表。

',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例组的ID。

',
              'type' => 'string',
              'required' => false,
              'example' => 'cc5gg-xxxx',
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'WirelessCloudConnectorGroupNames',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '实例组的名称列表。最多支持10个实例组的名称。

',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例组的名称。
名称长度为2~128个英文或中文字符，以大小写字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
              'type' => 'string',
              'required' => false,
              'example' => 'test',
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上一页的查询返回的值，首页查询不传值。',
            'type' => 'string',
            'required' => false,
            'example' => 'iou001238joojjaere
',
          ),
        ),
        5 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => 'D3BAFE75-C670-52DB-9739-03133E5FC914',
              ),
              'WirelessCloudConnectorGroups' => 
              array (
                'title' => '数组，返回示例目录。',
                'description' => '实例组列表信息。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => 'RegionItemType',
                  'description' => '实例组列表项信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'WirelessCloudConnectorGroupId' => 
                    array (
                      'title' => '资源一级ID',
                      'description' => '实例组ID。

',
                      'type' => 'string',
                      'example' => 'cc5gg-xxxx',
                    ),
                    'Status' => 
                    array (
                      'title' => '资源名称',
                      'description' => '实例组的状态。取值：

1. Creating: 创建中 
2. Available: 有效的稳定状态
3. Pending: 配置中 
4. Deleting: 删除中

',
                      'type' => 'string',
                      'example' => 'Creating',
                    ),
                    'Name' => 
                    array (
                      'title' => '创建时间',
                      'description' => '名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Description' => 
                    array (
                      'description' => '描述。',
                      'type' => 'string',
                      'example' => 'cc5gg-test
',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域id。',
                      'type' => 'string',
                      'example' => 'cn-shenzhen',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '实例创建时间。',
                      'type' => 'string',
                      'example' => '2022-07-04 19:19:14',
                    ),
                    'WirelessCloudConnectors' => 
                    array (
                      'description' => '5G高速上云实例列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'RegionItemType',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'WirelessCloudConnectorId' => 
                          array (
                            'description' => '5G高速上云实例id。',
                            'type' => 'string',
                            'example' => 'cc5g-62eb02o7lz1w5aurl3',
                          ),
                          'Status' => 
                          array (
                            'description' => '实例状态，取值：

Creating: 创建中
Available: 有效的稳定状态
Pending: 配置中
Deleting: 删除中',
                            'type' => 'string',
                            'example' => 'Available',
                          ),
                          'Name' => 
                          array (
                            'description' => '名称。',
                            'type' => 'string',
                            'example' => 'test',
                          ),
                          'Description' => 
                          array (
                            'description' => '描述。',
                            'type' => 'string',
                            'example' => 'cc5g-test',
                          ),
                          'RegionId' => 
                          array (
                            'description' => '地域id。',
                            'type' => 'string',
                            'example' => 'cn-shenzhen',
                          ),
                          'UseCase' => 
                          array (
                            'description' => '实例使用场景。',
                            'type' => 'string',
                            'example' => '智慧工厂
',
                          ),
                          'DataPackageId' => 
                          array (
                            'description' => '流量包id。',
                            'type' => 'string',
                            'example' => 'dp-xxxx
',
                          ),
                          'DataPackageType' => 
                          array (
                            'description' => '流量包档位，取值：

- **200**: 200M/卡/月
- **1000**: 1G/卡/月
- **3000**: 3G/卡/月
- **30000**: 30G/卡/月',
                            'type' => 'string',
                            'example' => '200',
                          ),
                          'CardCount' => 
                          array (
                            'description' => '卡数量。',
                            'type' => 'string',
                            'example' => '115',
                          ),
                          'CreateTime' => 
                          array (
                            'description' => '实例创建时间。',
                            'type' => 'string',
                            'example' => '2022-04-28 17:40:53',
                          ),
                          'BusinessType' => 
                          array (
                            'description' => '业务类型',
                            'type' => 'string',
                            'example' => 'Business',
                          ),
                          'ServiceType' => 
                          array (
                            'description' => '服务类型，返回：

- **CC5G**：普通实例。
- **CC5GCCIoT**：过户实例。',
                            'type' => 'string',
                            'example' => 'CC5G',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'description' => '上一页的查询返回的值，首页查询不传值。',
                'type' => 'string',
                'example' => 'iou001238joojjaere',
              ),
              'MaxResults' => 
              array (
                'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
                'type' => 'string',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '列表的条目数。',
                'type' => 'string',
                'example' => '2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D3BAFE75-C670-52DB-9739-03133E5FC914\\",\\n  \\"WirelessCloudConnectorGroups\\": [\\n    {\\n      \\"WirelessCloudConnectorGroupId\\": \\"cc5gg-xxxx\\",\\n      \\"Status\\": \\"Creating\\",\\n      \\"Name\\": \\"test\\",\\n      \\"Description\\": \\"cc5gg-test\\\\n\\",\\n      \\"RegionId\\": \\"cn-shenzhen\\",\\n      \\"CreateTime\\": \\"2022-07-04 19:19:14\\",\\n      \\"WirelessCloudConnectors\\": [\\n        {\\n          \\"WirelessCloudConnectorId\\": \\"cc5g-62eb02o7lz1w5aurl3\\",\\n          \\"Status\\": \\"Available\\",\\n          \\"Name\\": \\"test\\",\\n          \\"Description\\": \\"cc5g-test\\",\\n          \\"RegionId\\": \\"cn-shenzhen\\",\\n          \\"UseCase\\": \\"智慧工厂\\\\n\\",\\n          \\"DataPackageId\\": \\"dp-xxxx\\\\n\\",\\n          \\"DataPackageType\\": \\"200\\",\\n          \\"CardCount\\": \\"115\\",\\n          \\"CreateTime\\": \\"2022-04-28 17:40:53\\",\\n          \\"BusinessType\\": \\"Business\\",\\n          \\"ServiceType\\": \\"CC5G\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"NextToken\\": \\"iou001238joojjaere\\",\\n  \\"MaxResults\\": \\"10\\",\\n  \\"TotalCount\\": \\"2\\"\\n}","type":"json"}]',
      'title' => '查询分组信息',
    ),
    'DeleteWirelessCloudConnectorGroup' => 
    array (
      'summary' => '删除cc5g实例分组。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WirelessCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的实例组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5gg-****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
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
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并删除实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '2E759287-F208-589B-82D8-6D7A30F417E3',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2E759287-F208-589B-82D8-6D7A30F417E3\\"\\n}","type":"json"}]',
      'title' => '删除分组',
    ),
    'AddWirelessCloudConnectorToGroup' => 
    array (
      'summary' => '给cc5g实例分组增加cc5g实例。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WirelessCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5gg-****',
          ),
        ),
        1 => 
        array (
          'name' => 'WirelessCloudConnectorIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '5G上云实例的id列表，最多20个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '5g上云实例id。',
              'type' => 'string',
              'required' => false,
              'example' => 'cc5g-xxxx',
            ),
            'required' => true,
            'maxItems' => 20,
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        4 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会删除实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并删除实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\"\\n}","type":"json"}]',
      'title' => '给分组增加cc5g实例',
    ),
    'RemoveWirelessCloudConnectorFromGroup' => 
    array (
      'summary' => '从cc5g实例分组移除cc5g实例。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WirelessCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5gg-****',
          ),
        ),
        1 => 
        array (
          'name' => 'WirelessCloudConnectorIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '5G上云实例的id列表，最多20个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '5G上云实例id。',
              'type' => 'string',
              'required' => false,
              'example' => 'cc5g-xxxx',
            ),
            'required' => true,
            'maxItems' => 20,
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        4 => 
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
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '2DCFA69E-A161-512D-99A7-108022580719',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2DCFA69E-A161-512D-99A7-108022580719\\"\\n}","type":"json"}]',
      'title' => '从分组中移除cc5g实例',
    ),
    'CreateGroupAuthorizationRule' => 
    array (
      'summary' => '创建cc5g分组的授权规则。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WirelessCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5gg-****',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '名称，长度不超过128字符。',
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
            'description' => '授权规则描述，长度不超过256字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ar5gg-test',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceCidr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源CIDR地址块。',
            'type' => 'string',
            'required' => false,
            'example' => '0.0.0.0/0',
          ),
        ),
        4 => 
        array (
          'name' => 'DestinationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标类型，取值：
- **Cidr**: 网段
- **Domain**: 域名或泛域名
- **IpPort**: IP重定向',
            'type' => 'string',
            'required' => true,
            'example' => 'Cidr',
          ),
        ),
        5 => 
        array (
          'name' => 'Protocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议类型。取值：

- **icmp**：网络控制报文协议。
- **tcp**：传输控制协议。
- **udp**：用户数据报协议。
- **all**：支持所有协议。',
            'type' => 'string',
            'required' => false,
            'example' => 'all',
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
            'example' => '-1/-1',
          ),
        ),
        7 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标地址或域名。',
            'type' => 'string',
            'required' => true,
            'example' => '106.14.175.4',
          ),
        ),
        8 => 
        array (
          'name' => 'Policy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则策略，取值：
- **Permit**：允许
- **Deny**：拒绝',
            'type' => 'string',
            'required' => true,
            'example' => 'Permit',
          ),
        ),
        9 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        10 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会删除实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并删除实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => 'AA93A076-3D94-51AB-AC70-4C94AF003B03',
              ),
              'AuthorizationRuleId' => 
              array (
                'description' => '授权规则id。',
                'type' => 'string',
                'example' => 'ar5gg-xxxx',
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
            'errorCode' => 'OperationDenied.CIDRMaskTooLarge',
            'errorMessage' => 'The operation is not allowed because of CIDR too large.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AA93A076-3D94-51AB-AC70-4C94AF003B03\\",\\n  \\"AuthorizationRuleId\\": \\"ar5gg-xxxx\\"\\n}","type":"json"}]',
      'title' => '创建分组授权规则',
    ),
    'UpdateGroupAuthorizationRule' => 
    array (
      'summary' => '修改cc5g实例组的授权规则。',
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
          'name' => 'WirelessCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5gg-****',
          ),
        ),
        1 => 
        array (
          'name' => 'AuthorizationRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则id。',
            'type' => 'string',
            'required' => true,
            'example' => 'ar5gg-xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则描述，长度不超过256字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        4 => 
        array (
          'name' => 'SourceCidr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源CIDR地址块。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.0.1',
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
            'example' => 'all',
          ),
        ),
        7 => 
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
            'example' => '80/80
',
          ),
        ),
        8 => 
        array (
          'name' => 'Policy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则策略，取值：
- **Permit**：允许
- **Deny**：拒绝',
            'type' => 'string',
            'required' => false,
            'example' => 'Permit',
          ),
        ),
        9 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        10 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会删除实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并删除实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '79B01B1A-7089-552F-9798-DEDFFBAAED5F',
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
            'errorCode' => 'OperationDenied.CIDRMaskTooLarge',
            'errorMessage' => 'The operation is not allowed because of CIDR too large.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"79B01B1A-7089-552F-9798-DEDFFBAAED5F\\"\\n}","type":"json"}]',
      'title' => '更新分组授权规则',
    ),
    'ListGroupAuthorizationRules' => 
    array (
      'summary' => '查询分组的授权规则列表。',
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
          'name' => 'WirelessCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5gg-****',
          ),
        ),
        1 => 
        array (
          'name' => 'Statuses',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '授权规则状态列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '授权规则状态，取值：

- **Creating**：创建中
- **Available**：有效的稳定状态
- **Pending**：配置中 
- **Deleting**：删除中
- **UnAvailable**：无效，此规则暂时不生效',
              'type' => 'string',
              'required' => false,
              'example' => 'Creating',
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'AuthorizationRuleIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '授权规则id列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '授权规则id

',
              'type' => 'string',
              'required' => false,
              'example' => 'ar5gg-xxxx',
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'Names',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '授权规则名称列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '名称，长度不超过128字符。

',
              'type' => 'string',
              'required' => false,
              'example' => 'Test',
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'DestinationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标类型，取值：
1. Cidr
2. Domain
3. IpPort',
            'type' => 'string',
            'required' => false,
            'example' => 'Cidr',
          ),
        ),
        5 => 
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
            'example' => 'all',
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
            'example' => '-1/-1',
          ),
        ),
        7 => 
        array (
          'name' => 'Destination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标地址、域名或泛域名，前缀匹配。',
            'type' => 'string',
            'required' => false,
            'example' => '10.0.0.1',
          ),
        ),
        8 => 
        array (
          'name' => 'Policy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则策略，取值：
- **Permit**：允许
- **Deny**：拒绝',
            'type' => 'string',
            'required' => false,
            'example' => 'Permit',
          ),
        ),
        9 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '类型，取值：
- **System**: 系统
- **Default**: 默认
- **Customer**: 自定义',
            'type' => 'string',
            'required' => false,
            'example' => 'System',
          ),
        ),
        10 => 
        array (
          'name' => 'Dns',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否为DNS。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        11 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上一页的查询返回的值，首页查询不传值。',
            'type' => 'string',
            'required' => false,
            'example' => 'iou001238joojjaere',
          ),
        ),
        12 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
              ),
              'GroupAuthorizationRules' => 
              array (
                'title' => '数组，返回示例目录。',
                'description' => '授权规则列表。

',
                'type' => 'array',
                'items' => 
                array (
                  'title' => 'RegionItemType',
                  'description' => '授权规则列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AuthorizationRuleId' => 
                    array (
                      'title' => '资源一级ID',
                      'description' => '授权规则id。',
                      'type' => 'string',
                      'example' => 'ar5gg-y5g4rp2w1tl1w7zg59',
                    ),
                    'Status' => 
                    array (
                      'title' => '资源名称',
                      'description' => '授权规则状态，取值：
- **Creating**: 创建中
- **Available**: 有效的稳定状态
- **Pending**: 配置中
- **Deleting**: 删除中
- **UnAvailable**: 无效',
                      'type' => 'string',
                      'example' => 'Creating',
                    ),
                    'Name' => 
                    array (
                      'title' => '创建时间',
                      'description' => '授权规则名称',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Description' => 
                    array (
                      'description' => '授权规则描述，长度不超过256字符。',
                      'type' => 'string',
                      'example' => 'ar5gg-test
',
                    ),
                    'Type' => 
                    array (
                      'description' => '类型，取值：
- **System**: 系统
- **Default**: 默认
- **Customer**: 自定义',
                      'type' => 'string',
                      'example' => 'Default',
                    ),
                    'SourceCidr' => 
                    array (
                      'description' => '源CIDR地址块。',
                      'type' => 'string',
                      'example' => '0.0.0.0/0',
                    ),
                    'DestinationType' => 
                    array (
                      'description' => '目标类型，取值：
1. Cidr
2. Domain
3. IpPort',
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
                      'example' => 'all',
                    ),
                    'DestinationPort' => 
                    array (
                      'description' => '目标端口范围。取值范围：

- TCP、UDP协议：1~65535。使用正斜线（/）隔开起始端口和终止端口。例如：1/200。

- ICMP协议：-1/-1。

- ALL：-1/-1。',
                      'type' => 'string',
                      'example' => '0-65535',
                    ),
                    'Destination' => 
                    array (
                      'description' => '目标地址、域名或泛域名，前缀匹配。',
                      'type' => 'string',
                      'example' => '47.103.184.100/32',
                    ),
                    'Policy' => 
                    array (
                      'description' => '授权规则策略，取值：
- **Permit**：允许
- **Deny**：拒绝',
                      'type' => 'string',
                      'example' => 'Permit',
                    ),
                    'Dns' => 
                    array (
                      'description' => '是否为DNS。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2022-06-21 15:27:24',
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'description' => '下一次查询的起始token。

',
                'type' => 'string',
                'example' => 'iou001238joojjaere
',
              ),
              'MaxResults' => 
              array (
                'description' => '分页查询时每页的行数，最大值为**50**，默认值为**10**。',
                'type' => 'string',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '列表的条目数。',
                'type' => 'string',
                'example' => '2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\",\\n  \\"GroupAuthorizationRules\\": [\\n    {\\n      \\"AuthorizationRuleId\\": \\"ar5gg-y5g4rp2w1tl1w7zg59\\",\\n      \\"Status\\": \\"Creating\\",\\n      \\"Name\\": \\"test\\",\\n      \\"Description\\": \\"ar5gg-test\\\\n\\",\\n      \\"Type\\": \\"Default\\",\\n      \\"SourceCidr\\": \\"0.0.0.0/0\\",\\n      \\"DestinationType\\": \\"Cidr\\",\\n      \\"Protocol\\": \\"all\\",\\n      \\"DestinationPort\\": \\"0-65535\\",\\n      \\"Destination\\": \\"47.103.184.100/32\\",\\n      \\"Policy\\": \\"Permit\\",\\n      \\"Dns\\": true,\\n      \\"CreateTime\\": \\"2022-06-21 15:27:24\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"iou001238joojjaere\\\\n\\",\\n  \\"MaxResults\\": \\"10\\",\\n  \\"TotalCount\\": \\"2\\"\\n}","type":"json"}]',
      'title' => '查询分组授权规则列表',
    ),
    'DeleteGroupAuthorizationRule' => 
    array (
      'summary' => '删除cc5g分组授权规则。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WirelessCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5gg-****',
          ),
        ),
        1 => 
        array (
          'name' => 'AuthorizationRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权规则id。',
            'type' => 'string',
            'required' => true,
            'example' => 'ar5gg-12fnojjtkkre28t08j',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会创建授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后直接创建授权规则。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => 'A175C091-3910-51AF-8D84-D5717B9B8D38',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A175C091-3910-51AF-8D84-D5717B9B8D38\\"\\n}","type":"json"}]',
      'title' => '删除分组授权规则',
    ),
    'AddGroupDnsAuthorizationRule' => 
    array (
      'summary' => '实例组创建DNS授权规则。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WirelessCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc5gg-****',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '名称，长度不超过128字符。',
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
            'description' => '授权规则描述，长度不超过256字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ar5gg-test
',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceDNSIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS服务器地址。',
            'type' => 'string',
            'required' => true,
            'example' => '114.114.114.114',
          ),
        ),
        4 => 
        array (
          'name' => 'DestinationIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要重定向的DNS服务器地址。',
            'type' => 'string',
            'required' => false,
            'example' => '1.1.1.1',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        6 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会删除实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并删除实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => 'D3BAFE75-C670-52DB-9739-03133E5FC914',
              ),
              'AuthorizationRuleId' => 
              array (
                'description' => '生成的DNS授权规则id。',
                'type' => 'string',
                'example' => 'ar5gg-12fnojjtkkre28t08j',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D3BAFE75-C670-52DB-9739-03133E5FC914\\",\\n  \\"AuthorizationRuleId\\": \\"ar5gg-12fnojjtkkre28t08j\\"\\n}","type":"json"}]',
      'title' => '创建分组DNS授权规则',
    ),
    'UpdateGroupDnsAuthorizationRule' => 
    array (
      'summary' => '修改实例组的DNS授权规则。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WirelessCloudConnectorGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组id。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'cc5gg-****',
          ),
        ),
        1 => 
        array (
          'name' => 'AuthorizationRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS授权规则id。

',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'ar5gg-xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
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
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS授权规则描述。

长度为2~256个字符，开头必须为大小写英文字母或中文，但不能为http://或https://。',
            'type' => 'string',
            'required' => false,
            'example' => 'description',
          ),
        ),
        4 => 
        array (
          'name' => 'SourceDNSIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源DNS授权规则IP地址。包括但不限于以下取值：

100.100.2.136，100.100.2.137，100.100.2.138，114.114.114.114，8.8.8.8，8.8.4.4，223.5.5.5，223.6.6.6，221.5.88.88，116.116.116.116，221.228.15.26，61.139.2.69，218.6.200.139，119.29.29.29，218.2.2.2，208.67.220.220，208.67.222.222，218.4.4.4。


',
            'type' => 'string',
            'required' => false,
            'example' => '100.100.2.136
',
          ),
        ),
        5 => 
        array (
          'name' => 'DestinationIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标DNS授权规则IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.0.2
',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'TF-******-1633255280-43c94bf7-2dd3-4c14-8',
          ),
        ),
        7 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会创建授权规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后直接创建授权规则。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '207F9929-806E-5622-8E4F-8484F7000C22',
              ),
            ),
            'enumValueTitles' => 
            array (
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"207F9929-806E-5622-8E4F-8484F7000C22\\"\\n}","type":"json"}]',
      'title' => '更新分组DNS授权规则',
    ),
    'GetCreateCustomerInfomation' => 
    array (
      'summary' => '获取运营商物联网卡客户资料录入页面地址以及是否已经录入完成信息。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID',
            'example' => 'cn-hangzhou',
            'required' => false,
            'type' => 'string',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'Schema of Response',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求iD',
                'example' => '2E759287-F208-589B-82D8-6D7A30F417E3',
                'title' => 'Id of the request',
                'type' => 'string',
              ),
              'URL' => 
              array (
                'description' => '物联网卡客户资料登记URL地址。',
                'example' => 'https://*******',
                'type' => 'string',
              ),
              'CanBuyCard' => 
              array (
                'description' => '是否已经登记过标记',
                'example' => 'True',
                'type' => 'string',
              ),
            ),
            'title' => 'Schema of Response',
            'type' => 'object',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2E759287-F208-589B-82D8-6D7A30F417E3\\",\\n  \\"URL\\": \\"https://*******\\",\\n  \\"CanBuyCard\\": \\"True\\"\\n}","type":"json"}]',
      'title' => '获取资料登记链接等信息',
    ),
    'InnerLimitRateCards' => 
    array (
      'summary' => '内部卡限速接口',
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
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Iccids',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => true,
            'maxItems' => 1000,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        3 => 
        array (
          'name' => 'InnerApi',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
          ),
        ),
        4 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
          ),
        ),
        5 => 
        array (
          'name' => 'Task',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'InnerStopCards' => 
    array (
      'summary' => '内部接口运营商侧卡停机',
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
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Iccids',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => true,
            'maxItems' => 1000,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
          ),
        ),
        4 => 
        array (
          'name' => 'InnerApi',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
          ),
        ),
        5 => 
        array (
          'name' => 'Task',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'cc5g.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'cc5g.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'cc5g.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'cc5g.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'cc5g.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'cc5g.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'cc5g.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'cc5g.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'cc5g.aliyuncs.com',
    ),
  ),
);
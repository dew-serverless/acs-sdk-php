<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Slb',
    'version' => '2014-05-15',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 68272,
      'title' => '资源',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeAvailableResource',
      ),
    ),
    1 => 
    array (
      'id' => 68274,
      'title' => '地域与可用区',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRegions',
        1 => 'DescribeZones',
      ),
    ),
    2 => 
    array (
      'id' => 68277,
      'title' => '实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateLoadBalancer',
        1 => 'DeleteLoadBalancer',
        2 => 'ModifyLoadBalancerInstanceSpec',
        3 => 'ModifyLoadBalancerInternetSpec',
        4 => 'ModifyLoadBalancerPayType',
        5 => 'SetLoadBalancerDeleteProtection',
        6 => 'SetLoadBalancerModificationProtection',
        7 => 'SetLoadBalancerName',
        8 => 'SetLoadBalancerStatus',
        9 => 'ModifyLoadBalancerInstanceChargeType',
        10 => 'DescribeLoadBalancerAttribute',
        11 => 'DescribeLoadBalancers',
      ),
    ),
    3 => 
    array (
      'id' => 68332,
      'title' => '监听',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeleteLoadBalancerListener',
        1 => 'StartLoadBalancerListener',
        2 => 'StopLoadBalancerListener',
        3 => 'DescribeLoadBalancerListeners',
      ),
    ),
    4 => 
    array (
      'id' => 183721,
      'title' => 'TCP监听',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateLoadBalancerTCPListener',
        1 => 'SetLoadBalancerTCPListenerAttribute',
        2 => 'DescribeLoadBalancerTCPListenerAttribute',
      ),
    ),
    5 => 
    array (
      'id' => 183722,
      'title' => 'UDP监听',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateLoadBalancerUDPListener',
        1 => 'SetLoadBalancerUDPListenerAttribute',
        2 => 'DescribeLoadBalancerUDPListenerAttribute',
      ),
    ),
    6 => 
    array (
      'id' => 183723,
      'title' => 'HTTP监听',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateLoadBalancerHTTPListener',
        1 => 'SetLoadBalancerHTTPListenerAttribute',
        2 => 'DescribeLoadBalancerHTTPListenerAttribute',
      ),
    ),
    7 => 
    array (
      'id' => 183724,
      'title' => 'HTTPS监听',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateLoadBalancerHTTPSListener',
        1 => 'SetLoadBalancerHTTPSListenerAttribute',
        2 => 'DescribeLoadBalancerHTTPSListenerAttribute',
      ),
    ),
    8 => 
    array (
      'id' => 68289,
      'title' => '转发规则',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateRules',
        1 => 'SetRule',
        2 => 'DeleteRules',
        3 => 'DescribeRuleAttribute',
        4 => 'DescribeRules',
      ),
    ),
    9 => 
    array (
      'id' => 183725,
      'title' => '默认服务器组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddBackendServers',
        1 => 'DescribeHealthStatus',
        2 => 'RemoveBackendServers',
        3 => 'SetBackendServers',
      ),
    ),
    10 => 
    array (
      'id' => 68320,
      'title' => '虚拟服务器组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateVServerGroup',
        1 => 'DeleteVServerGroup',
        2 => 'SetVServerGroupAttribute',
        3 => 'DescribeVServerGroups',
        4 => 'DescribeVServerGroupAttribute',
        5 => 'AddVServerGroupBackendServers',
        6 => 'ModifyVServerGroupBackendServers',
        7 => 'RemoveVServerGroupBackendServers',
      ),
    ),
    11 => 
    array (
      'id' => 68310,
      'title' => '主备服务器组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateMasterSlaveServerGroup',
        1 => 'DeleteMasterSlaveServerGroup',
        2 => 'DescribeMasterSlaveServerGroupAttribute',
        3 => 'DescribeMasterSlaveServerGroups',
      ),
    ),
    12 => 
    array (
      'id' => 68359,
      'title' => '证书',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeleteCACertificate',
        1 => 'DeleteServerCertificate',
        2 => 'SetCACertificateName',
        3 => 'SetServerCertificateName',
        4 => 'DescribeCACertificates',
        5 => 'DescribeServerCertificates',
        6 => 'UploadCACertificate',
        7 => 'UploadServerCertificate',
      ),
    ),
    13 => 
    array (
      'id' => 68293,
      'title' => '扩展域名',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDomainExtension',
        1 => 'SetDomainExtensionAttribute',
        2 => 'DeleteDomainExtension',
        3 => 'DescribeDomainExtensionAttribute',
        4 => 'DescribeDomainExtensions',
      ),
    ),
    14 => 
    array (
      'id' => 183697,
      'title' => '安全策略',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateTLSCipherPolicy',
        1 => 'DeleteTLSCipherPolicy',
        2 => 'SetTLSCipherPolicyAttribute',
        3 => 'ListTLSCipherPolicies',
      ),
    ),
    15 => 
    array (
      'id' => 68298,
      'title' => '访问控制',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateAccessControlList',
        1 => 'AddAccessControlListEntry',
        2 => 'DeleteAccessControlList',
        3 => 'SetAccessControlListAttribute',
        4 => 'DescribeAccessControlListAttribute',
        5 => 'DescribeAccessControlLists',
        6 => 'RemoveAccessControlListEntry',
      ),
    ),
    16 => 
    array (
      'id' => 68329,
      'title' => '访问控制（旧版）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SetListenerAccessControlStatus',
        1 => 'RemoveListenerWhiteListItem',
        2 => 'AddListenerWhiteListItem',
        3 => 'DescribeListenerAccessControlAttribute',
      ),
    ),
    17 => 
    array (
      'id' => 68352,
      'title' => '标签',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddTags',
        1 => 'DescribeTags',
        2 => 'ListTagResources',
        3 => 'TagResources',
        4 => 'UntagResources',
        5 => 'RemoveTags',
      ),
    ),
    18 => 
    array (
      'id' => 177279,
      'title' => '访问日志',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeleteAccessLogsDownloadAttribute',
        1 => 'SetAccessLogsDownloadAttribute',
        2 => 'DescribeAccessLogsDownloadAttribute',
      ),
    ),
    19 => 
    array (
      'id' => 179251,
      'title' => '秒级监控',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'EnableHighDefinationMonitor',
        1 => 'ModifyHighDefinationMonitor',
        2 => 'DescribeHighDefinationMonitor',
      ),
    ),
    20 => 
    array (
      'id' => 183120,
      'title' => '资源组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'MoveResourceGroup',
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
    'DescribeAvailableResource' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'AddressType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络类型。

取值：

- **vpc**：专有网络的私网负载均衡实例。
- **classic_internet**：公网负载均衡实例。
- **classic_intranet**：经典网络的私网负载均衡实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc',
          ),
        ),
        2 => 
        array (
          'name' => 'AddressIPVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP地址类型。

取值：

- **ipv4**
- **ipv6**',
            'type' => 'string',
            'required' => false,
            'example' => 'ipv4',
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
                'example' => '173B0EEA-22ED-4EE2-91F9-3A1CDDFFBBBA',
              ),
              'AvailableResources' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AvailableResource' => 
                  array (
                    'description' => '可用区及支持的资源列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SlaveZoneId' => 
                        array (
                          'description' => '备可用区。',
                          'type' => 'string',
                          'example' => 'cn-shanghai-b',
                        ),
                        'MasterZoneId' => 
                        array (
                          'description' => '主可用区。',
                          'type' => 'string',
                          'example' => 'cn-shanghai-a',
                        ),
                        'SupportResources' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'SupportResource' => 
                            array (
                              'description' => '支持的资源。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'AddressType' => 
                                  array (
                                    'description' => '网络类型。

取值：

- **vpc**：专有网络的私网负载均衡实例。
- **classic_internet**：公网负载均衡实例。
- **classic_intranet**：经典网络的私网负载均衡实例。',
                                    'type' => 'string',
                                    'example' => 'vpc',
                                  ),
                                  'AddressIPVersion' => 
                                  array (
                                    'description' => 'IP地址类型。

取值：

- **ipv4**
- **ipv6**',
                                    'type' => 'string',
                                    'example' => 'ipv4',
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
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"173B0EEA-22ED-4EE2-91F9-3A1CDDFFBBBA\\",\\n  \\"AvailableResources\\": {\\n    \\"AvailableResource\\": [\\n      {\\n        \\"SlaveZoneId\\": \\"cn-shanghai-b\\",\\n        \\"MasterZoneId\\": \\"cn-shanghai-a\\",\\n        \\"SupportResources\\": {\\n          \\"SupportResource\\": [\\n            {\\n              \\"AddressType\\": \\"vpc\\",\\n              \\"AddressIPVersion\\": \\"ipv4\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询资源售卖情况',
      'summary' => '查询某个Region的可用区支持的资源售卖情况，可用的资源。',
      'description' => '> 只返回支持售卖的可用区及资源类型。',
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
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '支持的语言。取值：

- **zh-CN**：中文
- **en-US**：英文
- **ja**：日文',
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
                'example' => '1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6',
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
                        'RegionEndpoint' => 
                        array (
                          'description' => '地域服务的终端节点地址。',
                          'type' => 'string',
                          'example' => 'slb.aliyuncs.com',
                        ),
                        'LocalName' => 
                        array (
                          'description' => '地域名称。',
                          'type' => 'string',
                          'example' => '华北2（北京）',
                        ),
                        'RegionId' => 
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
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'InvalidParameter',
          ),
          1 => 
          array (
            'errorCode' => 'LocationServiceTimeout',
            'errorMessage' => 'Location service connection timeout. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6\\",\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"RegionEndpoint\\": \\"slb.aliyuncs.com\\",\\n        \\"LocalName\\": \\"华北2（北京）\\",\\n        \\"RegionId\\": \\"cn-beijing\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <RequestId>1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6</RequestId>\\n    <Regions>\\n        <RegionEndpoint>slb.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北2（北京）</LocalName>\\n        <RegionId>cn-beijing</RegionId>\\n    </Regions>\\n</DescribeRegionsResponse>","errorExample":""}]',
      'title' => '查询可用地域',
      'summary' => '查询可用地域。',
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
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
                'example' => 'A48D35FF-440A-4BC0-A4A2-A9BF69B7E43A',
              ),
              'Zones' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Zone' => 
                  array (
                    'description' => '可用区列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ZoneId' => 
                        array (
                          'description' => '可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-b',
                        ),
                        'LocalName' => 
                        array (
                          'description' => '可用区名称。',
                          'type' => 'string',
                          'example' => '杭州 可用区B',
                        ),
                        'SlaveZones' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'SlaveZone' => 
                            array (
                              'description' => '主可用区对应的备可用区列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'ZoneId' => 
                                  array (
                                    'description' => '备可用区ID。',
                                    'type' => 'string',
                                    'example' => 'cn-hangzhou-g',
                                  ),
                                  'LocalName' => 
                                  array (
                                    'description' => '备可用区名称。',
                                    'type' => 'string',
                                    'example' => '杭州 可用区G',
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
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'InvalidParameter',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A48D35FF-440A-4BC0-A4A2-A9BF69B7E43A\\",\\n  \\"Zones\\": {\\n    \\"Zone\\": [\\n      {\\n        \\"ZoneId\\": \\"cn-hangzhou-b\\",\\n        \\"LocalName\\": \\"杭州 可用区B\\",\\n        \\"SlaveZones\\": {\\n          \\"SlaveZone\\": [\\n            {\\n              \\"ZoneId\\": \\"cn-hangzhou-g\\",\\n              \\"LocalName\\": \\"杭州 可用区G\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeZonesResponse>\\n    <RequestId>A48D35FF-440A-4BC0-A4A2-A9BF69B7E43A</RequestId>\\n    <Zones>\\n        <ZoneId>cn-hangzhou-b</ZoneId>\\n        <LocalName>华东 1 可用区 B</LocalName>\\n        <SlaveZones>\\n            <ZoneId>cn-hangzhou-g</ZoneId>\\n            <LocalName>华东 1 可用区 G</LocalName>\\n        </SlaveZones>\\n    </Zones>\\n</DescribeZonesResponse>","errorExample":""}]',
      'title' => '查询指定地域的可用区信息',
      'summary' => '查询指定地域的可用区信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateLoadBalancer' => 
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
            'description' => '传统型负载均衡实例的地域ID。

您可以通过调用[DescribeRegions](~~2401682~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'AddressType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的网络类型。取值：

- **internet**：创建公网负载均衡实例后，系统会分配一个公网IP地址，可以转发公网请求。
- **intranet**：创建专有网络类型的负载均衡实例后，系统会分配一个内网IP地址，仅可转发内网请求。',
            'type' => 'string',
            'required' => false,
            'example' => 'internet',
            'default' => 'internet',
          ),
        ),
        2 => 
        array (
          'name' => 'InternetChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '公网类型实例的付费方式。取值：
- **paybytraffic**（默认值）：按使用流量计费。
    > 如果选择了**paybytraffic**，无需设置**Bandwidth**的值；如您设置了**Bandwidth**值，该值也不会生效。

- **paybybandwidth**：按固定带宽计费。

>当**PayType**取值**PayOnDemand**且**InstanceChargeType**取值**PayByCLCU**时，该参数仅支持取值**paybytraffic**。
',
            'type' => 'string',
            'required' => false,
            'example' => 'paybytraffic',
            'default' => 'paybytraffic',
          ),
        ),
        3 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监听的带宽峰值，单位：Mbps。
    
取值范围：**1**～**5120**。对于按带宽计费的公网负载均衡实例，可以设置每个监听的带宽峰值，但所有监听的带宽峰值之和不能超过实例的带宽峰值。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '5000',
            'minimum' => '1',
            'example' => '10',
            'default' => '-1',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3',
          ),
        ),
        5 => 
        array (
          'name' => 'LoadBalancerName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的名称。

长度为1～80个英文或中文字符，必须以大小写字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。

不指定该参数时，默认由系统分配一个实例名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'lb-bp1o94dp5i6ea****',
          ),
        ),
        6 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的所属的VPC ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-bp1aevy8sofi8mh1****',
          ),
        ),
        7 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络实例的所属的交换机ID。

创建专有网络类型的负载均衡实例，必须指定该参数。如果指定了该参数，**AddessType**参数的值会默认被设置为**intranet**。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp12mw1f8k3jgy****',
          ),
        ),
        8 => 
        array (
          'name' => 'MasterZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的主可用区ID。

您可以通过调用[DescribeZone](~~27585~~)接口可查到相应地域下的主备可用区信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-b',
          ),
        ),
        9 => 
        array (
          'name' => 'SlaveZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的备可用区ID。

您可以通过调用[DescribeZone](~~27585~~)接口查询相应地域下的主备可用区信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-d',
          ),
        ),
        10 => 
        array (
          'name' => 'LoadBalancerSpec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的规格。取值：

- **slb.s1.small**
- **slb.s2.small**
- **slb.s2.medium**
- **slb.s3.small**
- **slb.s3.medium**
- **slb.s3.large**
>若不指定规格，则创建性能共享型实例。目前，共享型实例已停止售卖，请指定实例规格。

当**InstanceChargeType**取值为**PayByCLCU**，该参数不生效，您无需配置该参数。


',
            'type' => 'string',
            'required' => false,
            'example' => 'slb.s1.small',
          ),
        ),
        11 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '企业资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtopt****',
          ),
        ),
        12 => 
        array (
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的计费类型，取值：
<props="china">

- **PayOnDemand**：按量付费。
- **PrePay**：包年包月。</props>
> 如果该参数设置为**PrePay**，即表示创建包年包月实例，则**Duration**参数必选。

</props>

<props="intl">**PayOnDemand**：按量付费。</props>
',
            'type' => 'string',
            'required' => false,
            'example' => 'PayOnDemand',
            'default' => 'PayOnDemand',
          ),
        ),
        13 => 
        array (
          'name' => 'PricingCycle',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预付费公网实例的计费周期，取值：
- **month**：月。
- **year**：年。

>该参数仅适用于中国站且仅对包年包月实例有效。',
            'type' => 'string',
            'required' => false,
            'example' => 'month',
          ),
        ),
        14 => 
        array (
          'name' => 'Duration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预付费公网实例的购买时长，取值：
  
* 如果**PricingCycle**为**month**，取值为**1～9**。
* 如果**PricingCycle**为**year**，取值为**1～5**。

> 该参数仅适用于中国站且仅对包年包月实例有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        15 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否是自动支付预付费公网实例的账单。取值：

- **true**：自动支付。调用API后，立即生成SLB实例。
- **false**（默认值）：调用API后SLB的订单创建成功，但是未支付。您可以在控制台看到未支付订单。由于订单未支付，SLB实例不会被创建出来。

> 该参数仅适用于中国站且仅对包年包月实例有效。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        16 => 
        array (
          'name' => 'AddressIPVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的IP版本，取值：**ipv4**或**ipv6**。
',
            'type' => 'string',
            'required' => false,
            'example' => 'ipv4',
            'default' => 'ipv4',
          ),
        ),
        17 => 
        array (
          'name' => 'Address',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定实例的私网IP地址，该地址必须包含在交换机的目标网段下。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.XX.XX',
          ),
        ),
        18 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'allowEmptyValue' => true,
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '实例的标签键。N的取值范围：**1~20**。一旦输入该值，则不允许为空字符串。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
                'Value' => 
                array (
                  'description' => '实例的标签值。N的取值范围：**1~20**。一旦输入该值，可以为空字符串。
最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'value',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        19 => 
        array (
          'name' => 'DeleteProtection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启实例删除保护。取值：
- **on**：是。
- **off**：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
            'default' => 'off',
          ),
        ),
        20 => 
        array (
          'name' => 'ModificationProtectionStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡修改保护状态：

- **NonProtection**：不限制修改保护，设置后会清空之前设置的**ModificationProtectionReason**。
- **ConsoleProtection**：实例控制台修改保护状态。

> 当取值为**ConsoleProtection**，即开启修改保护后，用户不能通过负载均衡控制台修改实例配置，但可以通过调用API修改实例配置。',
            'type' => 'string',
            'required' => false,
            'example' => 'ConsoleProtection',
          ),
        ),
        21 => 
        array (
          'name' => 'ModificationProtectionReason',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置修改保护状态的原因，长度为1～80个字符，必须以字母或中文开头，支持数字、半角句号（.）、下划线（_）和短划线（-）。

> 仅在**ModificationProtectionStatus**为**ConsoleProtection**时有效。',
            'type' => 'string',
            'required' => false,
            'example' => 'Managed instance',
          ),
        ),
        22 => 
        array (
          'name' => 'InstanceChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例计费方式。取值：
- **PayBySpec**（默认值）：按规格计费。
- **PayByCLCU**：按使用量计费。

>该参数仅适用于中国站且仅当**PayType**（实例付费模式）取值为**PayOnDemand**（按量付费）时，该参数生效。
',
            'type' => 'string',
            'required' => false,
            'example' => 'PayBySpec',
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
              'VpcId' => 
              array (
                'description' => '传统型负载均衡实例的所属专有网络的ID。',
                'type' => 'string',
                'example' => 'vpc-25dvzy9****',
              ),
              'AddressIPVersion' => 
              array (
                'description' => '传统型负载均衡实例的IP地址类型。',
                'type' => 'string',
                'example' => 'ipv4',
              ),
              'VSwitchId' => 
              array (
                'description' => '传统型负载均衡实例的所属交换机的ID。',
                'type' => 'string',
                'example' => 'vsw-255ecr****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF34B540710',
              ),
              'LoadBalancerName' => 
              array (
                'description' => '传统型负载均衡实例的名称。',
                'type' => 'string',
                'example' => 'lb-bp1o94dp5i6ea****',
              ),
              'LoadBalancerId' => 
              array (
                'description' => '传统型负载均衡实例的ID。',
                'type' => 'string',
                'example' => 'lb-hddhfjg****',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源组ID。',
                'type' => 'string',
                'example' => 'rg-atstuj3rto****',
              ),
              'Address' => 
              array (
                'description' => '分配的负载均衡实例的IP地址。',
                'type' => 'string',
                'example' => '42.XX.XX.6',
              ),
              'NetworkType' => 
              array (
                'description' => '传统型负载均衡实例的网络类型，取值：

* **vpc**：专有网络实例。
* **classic**：经典网络实例。',
                'type' => 'string',
                'example' => 'classic',
              ),
              'OrderId' => 
              array (
                'description' => '预付费实例的订单ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20212961978****',
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
            'errorCode' => 'OperationFailed.ZoneResourceLimit',
            'errorMessage' => 'The operation failed because of resource limit of the specified zone.',
          ),
          1 => 
          array (
            'errorCode' => 'CloudBoxNotSupportIpv6',
            'errorMessage' => 'The cloudBox instance does not support ipv6.',
          ),
          2 => 
          array (
            'errorCode' => 'CloudBoxNotSupportInternet',
            'errorMessage' => 'The cloudBox instance does not support internet.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationFailed.RegionResourceLimit',
            'errorMessage' => 'The operation failed because of resource limit of the specified region.',
          ),
          4 => 
          array (
            'errorCode' => 'Operation.NotAllowed',
            'errorMessage' => 'Operation Denied. The charge type of internet prepay instance can only be paybybandwidth.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationFailed.UnpaidBillsExist',
            'errorMessage' => 'The account has unpaid bills. Please pay your overdue bill first.',
          ),
          6 => 
          array (
            'errorCode' => 'RegionOrZonesNotSupportIpv6',
            'errorMessage' => 'The specified region or master/slave zones does not support ipv6.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidParameter.Mismatch',
            'errorMessage' => 'AddressType and IpVersion is conflict, IPv6 does not support intranet instance.',
          ),
          8 => 
          array (
            'errorCode' => 'PAYFOR.CREDIT_PAY_INSUFFICIENT_BALANCE',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          9 => 
          array (
            'errorCode' => 'HighRiskOperationDenied',
            'errorMessage' => 'The operation is denied because of high risk.',
          ),
          10 => 
          array (
            'errorCode' => 'VSwitchAvailableIpNotExist',
            'errorMessage' => 'The specified VSwitch has no availabe ip.',
          ),
          11 => 
          array (
            'errorCode' => 'VSwitchNotExist',
            'errorMessage' => 'The specified VSwitch does not exist.',
          ),
          12 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'Illegal parameter. The IP address is not in subnet.',
          ),
          13 => 
          array (
            'errorCode' => 'Instance.ShareSlbNotSupportPay95',
            'errorMessage' => 'Illegal parameter. The share instance not support PayBy95 or PayByOld95.',
          ),
          14 => 
          array (
            'errorCode' => 'Instance.Pay95RateInvalid',
            'errorMessage' => 'Illegal parameter. The rate is illegal.',
          ),
          15 => 
          array (
            'errorCode' => 'Instance.Pay95BandwidthIllegal',
            'errorMessage' => 'Illegal parameter. The bandwidth is illegal.',
          ),
          16 => 
          array (
            'errorCode' => 'Instance.InternetChargeTypeNotAllowed',
            'errorMessage' => 'Illegal parameter. The specified InternetChargeType not allowed.',
          ),
          17 => 
          array (
            'errorCode' => 'OperationFailed.TokenIsProcessing',
            'errorMessage' => 'The operation is failed, because the Client Token is processing.',
          ),
          18 => 
          array (
            'errorCode' => 'InsufficientBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          19 => 
          array (
            'errorCode' => 'MissingParam.VSwitchId',
            'errorMessage' => 'The parameter VSwitchId is required.',
          ),
          20 => 
          array (
            'errorCode' => 'InvalidVpcId.NotExist',
            'errorMessage' => 'The specified VPC not exist.',
          ),
          21 => 
          array (
            'errorCode' => 'PAY.MAYI_WITHHOLDING_AGREEMENT_ILLEGAL',
            'errorMessage' => 'Your account did not sign a withholding agreement or no coupons in Alipay.',
          ),
          22 => 
          array (
            'errorCode' => 'InvalidParameter.CloudType',
            'errorMessage' => 'The specified CloudType is invalid.',
          ),
          23 => 
          array (
            'errorCode' => 'OperationFailed.InvalidAccount',
            'errorMessage' => 'The account information is incomplete.',
          ),
          24 => 
          array (
            'errorCode' => 'RegionOrZonesNotSupportCEN',
            'errorMessage' => 'The specified region or master/slave zones does not support cloudType of hybrid_cen.',
          ),
          25 => 
          array (
            'errorCode' => 'MissingParam.LoadBalancerSpec',
            'errorMessage' => 'The param LoadBalancerSpec is required.',
          ),
          26 => 
          array (
            'errorCode' => 'InvalidParameter.Bandwidth',
            'errorMessage' => 'The param Bandwidth is invalid.',
          ),
          27 => 
          array (
            'errorCode' => 'OperationForbidden.AccountRiskReject',
            'errorMessage' => 'The operation failed because of account risk reject.',
          ),
          28 => 
          array (
            'errorCode' => 'OperationForbidden.QuotaLimit',
            'errorMessage' => 'The operation failed because of quota limit of shared loadbalancers.',
          ),
          29 => 
          array (
            'errorCode' => 'InvalidParam.ModificationProtectionStatus',
            'errorMessage' => 'The param ModificationProtectionStatus is invalid.',
          ),
          30 => 
          array (
            'errorCode' => 'InvalidParam.ModificationProtectionReason',
            'errorMessage' => 'The param ModificationProtectionReason is invalid.',
          ),
          31 => 
          array (
            'errorCode' => 'ShareSlbHaltSales',
            'errorMessage' => 'The share instance has been discontinued.',
          ),
          32 => 
          array (
            'errorCode' => 'OperationFailed.CashBookInsufficient',
            'errorMessage' => 'No payment method is specified for your account, We recommend that you add a payment method or maintain a prepayment balance.',
          ),
          33 => 
          array (
            'errorCode' => 'OperationFailed.OnlyInnerCommoditySupportToPurchase',
            'errorMessage' => 'AliCroup2Cloud user only can buy inner commodity.',
          ),
          34 => 
          array (
            'errorCode' => 'OperationFailed.InvokeLingXiaoFailed',
            'errorMessage' => 'Failed to invoke lingxiao service.',
          ),
          35 => 
          array (
            'errorCode' => 'AllocateVpcInstanceFailed',
            'errorMessage' => 'Failed to allocate vpc instance.',
          ),
          36 => 
          array (
            'errorCode' => 'QueryCreditCtrlInfoFailed',
            'errorMessage' => 'Failed to query credit ctrl info.',
          ),
          37 => 
          array (
            'errorCode' => 'QueryCommodityCenterFailed',
            'errorMessage' => 'Failed to query commodity center.',
          ),
          38 => 
          array (
            'errorCode' => 'RegionNotSupportParameter',
            'errorMessage' => 'Current region does not support the param of %s.',
          ),
          39 => 
          array (
            'errorCode' => 'QueryAccountBookInfoFailed',
            'errorMessage' => 'Failed to invoke account book info.',
          ),
          40 => 
          array (
            'errorCode' => 'RateAccountFailed',
            'errorMessage' => 'Failed to rate account for pricing.',
          ),
          41 => 
          array (
            'errorCode' => 'TradeWaitDistributorAudit',
            'errorMessage' => 'The trade needs distributor to audit.',
          ),
          42 => 
          array (
            'errorCode' => 'OperationFailed.InvokeProxyFailed',
            'errorMessage' => 'Failed to invoke proxy.',
          ),
          43 => 
          array (
            'errorCode' => 'QueryAccountCompleteProgressFailed',
            'errorMessage' => 'Failed to query account progress.',
          ),
          44 => 
          array (
            'errorCode' => 'QueryVoucherInfoFailed',
            'errorMessage' => 'Failed to query voucher info.',
          ),
          45 => 
          array (
            'errorCode' => 'InvalidVSwitchId.NotFound',
            'errorMessage' => 'The specified vSwitch instance is invalid.',
          ),
          46 => 
          array (
            'errorCode' => 'IllegalParam.SpecType',
            'errorMessage' => 'The param of SpecType is illegal.',
          ),
          47 => 
          array (
            'errorCode' => 'MissingParam.SpecType',
            'errorMessage' => 'The param of SpecType is missing.',
          ),
          48 => 
          array (
            'errorCode' => 'UnsupportedRegion',
            'errorMessage' => 'The feature is not supported in current region.',
          ),
          49 => 
          array (
            'errorCode' => 'PayInsufficientBalance',
            'errorMessage' => 'Your account balance is insufficient.',
          ),
          50 => 
          array (
            'errorCode' => 'IllegalParam.InstanceChargeType',
            'errorMessage' => 'The parameter InstanceChargeType is illegal.',
          ),
          51 => 
          array (
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'The system is busy.',
          ),
          52 => 
          array (
            'errorCode' => 'PRODUCT.NOT_AVAILABLE_IZ',
            'errorMessage' => 'The Instance zone id doesn t support',
          ),
          53 => 
          array (
            'errorCode' => 'PRICE.INQUIRY_FAILED',
            'errorMessage' => 'The instance pricing inquiry is failed.',
          ),
          54 => 
          array (
            'errorCode' => 'AssociateIpFail',
            'errorMessage' => 'The instance associating ip is failed.',
          ),
          55 => 
          array (
            'errorCode' => 'SDK.ServerUnreachable',
            'errorMessage' => 'Service is unreachable.',
          ),
          56 => 
          array (
            'errorCode' => 'OverQuota',
            'errorMessage' => 'The Total is over the quota',
          ),
          57 => 
          array (
            'errorCode' => 'InvalidParam.TagValue	',
            'errorMessage' => '%s.',
          ),
          58 => 
          array (
            'errorCode' => 'InvalidParam.TagKey',
            'errorMessage' => '%s.',
          ),
          59 => 
          array (
            'errorCode' => 'SizeLimitExceeded.Tag',
            'errorMessage' => '%s.',
          ),
          60 => 
          array (
            'errorCode' => 'MissingParam.TagKey',
            'errorMessage' => 'The param MissingParam.TagKey is missing.',
          ),
          61 => 
          array (
            'errorCode' => 'SubnetIpExhaust',
            'errorMessage' => 'No subnet IP addresses are available.',
          ),
          62 => 
          array (
            'errorCode' => 'BeforePayRuleBatchValidateError',
            'errorMessage' => 'The pre-payment rule center instance rule validation failed. Please check if the instance limit has been reached.',
          ),
          63 => 
          array (
            'errorCode' => 'TradeSyncCreateSubError',
            'errorMessage' => 'Subscription transfer failed.',
          ),
          64 => 
          array (
            'errorCode' => 'QueryOrderError',
            'errorMessage' => 'Failed to query the order. Please try again later.',
          ),
          65 => 
          array (
            'errorCode' => 'CreateOrderTimeout',
            'errorMessage' => 'Order creation timed out. Please try again later.',
          ),
          66 => 
          array (
            'errorCode' => 'MultiGrayKeyResourceInconsist',
            'errorMessage' => 'The identifier for the gray resource is set incorrectly.',
          ),
          67 => 
          array (
            'errorCode' => 'InsufficientAvailableQuota',
            'errorMessage' => 'Your account available balance is less than 0. Please recharge before attempting to make a purchase.',
          ),
          68 => 
          array (
            'errorCode' => 'Forbidden.AliGroupForbiddenRegion',
            'errorMessage' => 'Thre region is forbidden for aligroup user.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"VpcId\\": \\"vpc-25dvzy9****\\",\\n  \\"AddressIPVersion\\": \\"ipv4\\",\\n  \\"VSwitchId\\": \\"vsw-255ecr****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\",\\n  \\"LoadBalancerName\\": \\"lb-bp1o94dp5i6ea****\\",\\n  \\"LoadBalancerId\\": \\"lb-hddhfjg****\\",\\n  \\"ResourceGroupId\\": \\"rg-atstuj3rto****\\",\\n  \\"Address\\": \\"42.XX.XX.6\\",\\n  \\"NetworkType\\": \\"classic\\",\\n  \\"OrderId\\": 0\\n}","errorExample":""},{"type":"xml","example":"<CreateLoadBalancerResponse>\\n    <VpcId>vpc-25dvzy9****</VpcId>\\n    <AddressIPVersion>ipv4</AddressIPVersion>\\n    <VSwitchId>vsw-255ecr****</VSwitchId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <LoadBalancerName>lb-bp1o94dp5i6ea****</LoadBalancerName>\\n    <LoadBalancerId>lb-hddhfjg****</LoadBalancerId>\\n    <ResourceGroupId>rg-atstuj3rto****</ResourceGroupId>\\n    <Address>42.XX.XX.6</Address>\\n    <NetworkType>classic</NetworkType>\\n</CreateLoadBalancerResponse>","errorExample":""}]',
      'title' => '创建传统型负载均衡实例',
      'summary' => '创建负载均衡实例。',
      'description' => '### 注意事项

- 实例创建前，请调用[DescribeAvailableResource](~~117645~~)查询可用区支持的资源售卖情况。
- 实例创建后，会产生费用。
- 按量付费模式支持创建按规格计费实例和按使用量计费实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteLoadBalancer' => 
    array (
      'summary' => '删除后付费的负载均衡实例。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域ID。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。
',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1h66tp5uat8********',
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
            'errorCode' => 'InvalidChargeType',
            'errorMessage' => 'The prepay loadBalancer does not support this action.',
          ),
          1 => 
          array (
            'errorCode' => 'Operation.NotAllowed',
            'errorMessage' => 'Operation Denied. Unfinished order exists.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.DeleteProtectionIsOn',
            'errorMessage' => 'The loadbalancer can not be deleted due to DeleteProtection is enabled.',
          ),
          3 => 
          array (
            'errorCode' => 'NoPermission.AliyunServiceRoleForSlbEipAccess',
            'errorMessage' => 'You are not authorized to create the service linked role. Role Name: AliyunServiceRoleForSlbEipAccess. Service Name: eipaccess.slb.aliyuncs.com. Please ensure the user has been granted the ram:CreateServiceLinkedRole permission	',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","type":"json"}]',
      'title' => '删除后付费的负载均衡实例',
      'description' => '> 如果负载均衡实例上还有监听或者绑定了相应的标签，也会一并被删除。',
      'requestParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyLoadBalancerInstanceSpec' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域ID。

您可以从[地域和可用区](~~40654~~)列表或通过调用[DescribeRegions](~~27584~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1b6c719df*********',
          ),
        ),
        2 => 
        array (
          'name' => 'LoadBalancerSpec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的规格。取值：

 - **slb.s1.small**
 - **slb.s2.small**
 - **slb.s2.medium**
 -  **slb.s3.small**
 - **slb.s3.medium**
 - **slb.s3.large**

每个地域支持的规格不同。关于每种规格的说明，参见[性能保障型实例](~~85931~~)。	  

> 将共享型实例变更为保障型实例，SLB将有小概率可能性出现短暂的业务中断（10~30秒），建议您在业务低谷期进行变配，或者通过DNS实现实例间的负载均衡后，再进行变配操作。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'slb.s2.small',
          ),
        ),
        3 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动付费。取值：

- **true**：自动支付订单。
- **false**（默认值）：在订单中心中进行支付。

> 该参数仅对预付费实例有效。',
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
            'type' => 'object',
            'properties' => 
            array (
              'OrderId' => 
              array (
                'description' => '预付费实例的订单ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '201429619788910',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF34B540710',
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
            'errorCode' => 'ModifySpecNotAllowed',
            'errorMessage' => 'LoadBalancerSpec not allowed for this instance',
          ),
          1 => 
          array (
            'errorCode' => 'Operation.NotAllowed',
            'errorMessage' => 'Operation Denied, Your account does not have enough balance.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Bandwidth',
            'errorMessage' => 'The param Bandwidth is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'ChangeLbSpecNotAllowed',
            'errorMessage' => 'You cannot change the specification for the specified load balancer.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.PayByCLCU',
            'errorMessage' => 'The operation is not allowed because the instanceChargeType of loadbalancer is PayByCLCU.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": 201429619788910,\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyLoadBalancerInstanceSpecResponse>\\n    <OrderId>201429619788910</OrderId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n</ModifyLoadBalancerInstanceSpecResponse>","errorExample":""}]',
      'title' => '修改负载均衡的实例规格',
      'summary' => '修改负载均衡的实例规格。',
      'description' => '<props="china">仅按规格计费实例支持调用ModifyLoadBalancerInstanceSpec接口，按使用量计费实例不支持调用该接口。</props>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyLoadBalancerInternetSpec' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的地域ID。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1b6c719dfa08ex******',
          ),
        ),
        2 => 
        array (
          'name' => 'InternetChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '公网类型实例的付费方式。取值：

- **paybybandwidth**：按带宽计费。

- **paybytraffic**：按流量计费 。
',
            'type' => 'string',
            'required' => false,
            'example' => 'paybytraffic',
          ),
        ),
        3 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按固定带宽计费方式的公网类型实例的带宽峰值。单位：Mbps。

取值范围：**1**~**5000**（各地域的带宽峰值会有不同）。

>按流量计费（即**InternetChargeType**取值为**paybytraffic**）的实例不需要指定该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '5000',
            'minimum' => '1',
            'example' => '10',
            'default' => '-1',
          ),
        ),
        4 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否是自动支付预付费公网实例的账单。取值：

- **true**（默认值）：自动支付订单。
- **false**：在订单中心进行支付。',
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
            'description' => '修改公网负载均衡实例的计费方式。',
            'type' => 'object',
            'properties' => 
            array (
              'OrderId' => 
              array (
                'description' => '预付费实例的订单ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20142961978****',
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
            'errorCode' => 'OperationFailed.UnpaidBillsExist',
            'errorMessage' => 'The account has unpaid bills. Please pay your overdue bill first.',
          ),
          1 => 
          array (
            'errorCode' => 'Operation.NotAllowed',
            'errorMessage' => 'Operation Denied. Unfinished order exists.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.ShareSlbNotSupportPay95',
            'errorMessage' => 'Illegal parameter. The share instance not support PayBy95 or PayByOld95.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.Pay95RateInvalid',
            'errorMessage' => 'Illegal parameter. The rate is illegal.',
          ),
          4 => 
          array (
            'errorCode' => 'Instance.Pay95BandwidthIllegal',
            'errorMessage' => 'Illegal parameter. The bandwidth is illegal.',
          ),
          5 => 
          array (
            'errorCode' => 'Instance.InternetChargeTypeNotAllowed',
            'errorMessage' => 'Illegal parameter. The specified InternetChargeType not allowed.',
          ),
          6 => 
          array (
            'errorCode' => 'PAYFOR.ACCOUNT_MONEY_VALIDATE_ERROR',
            'errorMessage' => 'Your channel partner account does not have sufficient funds, please contact your channel partner to recharge the account.',
          ),
          7 => 
          array (
            'errorCode' => 'OperationDenied.PayByCLCU',
            'errorMessage' => 'The operation is not allowed because the instanceChargeType of loadbalancer is PayByCLCU.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"OrderId\\": 0,\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","type":"json"}]',
      'title' => '修改公网负载均衡实例的计费方式',
      'summary' => '修改公网负载均衡实例的计费方式。',
      'description' => '<props="china">- 仅按规格计费实例支持调用ModifyLoadBalancerInternetSpec接口，按使用量计费实例不支持调用该接口。</props>

- 如果只调整按带宽计费实例的带宽峰值，修改完成后，立即生效。

- 如果涉及公网计费方式的变更（例如公网计费方式从按固定带宽变更为按流量），则所有变配会在次日00:00:00生效。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyLoadBalancerPayType' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域ID。

您可以从[地域和可用区](~~40654~~)列表或通过调用[DescribeRegions](~~25609~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1b6c719dfa08ex*****',
          ),
        ),
        2 => 
        array (
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例付费模式，取值：

<props="china">- **PrePay**：包年包月。</props>

- **PayOnDemand**（默认值）：按量付费。

按量计费转为包年包月计费，该参数取值只能为**PrePay**，且该实例之前的计费模式必须为**PayOnDemand**。',
            'type' => 'string',
            'required' => false,
            'example' => 'PrePay',
            'default' => 'PrePay',
          ),
        ),
        3 => 
        array (
          'name' => 'PricingCycle',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计费周期。

取值：**year**或**month** 。

>只有当**PayType**的参数取值为**PrePay**时有效，即仅对按量计费实例有效。',
            'type' => 'string',
            'required' => false,
            'example' => 'month',
          ),
        ),
        4 => 
        array (
          'name' => 'Duration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计费时长。

* 如果**PricingCycle**为**month**，取值**1**~**9**。

* 如果**PricingCycle**为**year**，取值**1**~**5**。

>只有当**PayType**的参数取值为**PrePay**时有效，即仅对按量计费实例有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动付费。取值：

- **true**：自动付费。

- **false（默认值）**：不自动付费。

>只有当**PayType**的参数取值为**PrePay**时有效，即仅对按量计费实例有效。',
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
            'type' => 'object',
            'properties' => 
            array (
              'OrderId' => 
              array (
                'description' => '预付费实例的订单ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20212961978891',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF34B540710',
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
            'errorCode' => 'Operation.NotAllowed',
            'errorMessage' => 'Cannot change internet payByTraffic loadBalancer from PayOnDemand to PrePay.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.PayByCLCU',
            'errorMessage' => 'The operation is not allowed because the instanceChargeType of loadbalancer is PayByCLCU.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"OrderId\\": 20212961978891,\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\"\\n}","type":"json"}]',
      'title' => '将按量计费实例转换为包年包月实例',
      'summary' => '将按量计费实例转换为包年包月实例。',
      'description' => '<props="china">仅按规格计费（公网为按固定带宽计费）的实例支持调用ModifyLoadBalancerPayType接口，按使用量计费实例不支持调用该接口。</props>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetLoadBalancerDeleteProtection' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的地域。

您可以通过调用[DescribeRegions](~~2401682~~)  接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1b6c719dfa08e*****',
          ),
        ),
        2 => 
        array (
          'name' => 'DeleteProtection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡删除保护状态。取值：

- **on**：开启删除保护。
- **off**：关闭删除保护。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'off',
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
                'example' => '791D8B68-AE0F-4174-AF54-088C8B3C5D54',
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
            'errorCode' => 'OperationUnsupported.DeleteProtectionForPrePayInstance',
            'errorMessage' => 'The operation failed because prepay instance does not support delete protection.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"791D8B68-AE0F-4174-AF54-088C8B3C5D54\\"\\n}","type":"json"}]',
      'title' => '设置实例删除保护状态',
      'summary' => '设置实例删除保护状态。',
    ),
    'SetLoadBalancerModificationProtection' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的地域ID。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1b6c719dfa08e*****',
          ),
        ),
        2 => 
        array (
          'name' => 'ModificationProtectionStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡修改保护状态：

- **NonProtection**：不限制修改保护，设置后会清空之前设置的**ModificationProtectionReason**。

- **ConsoleProtection**：实例控制台修改保护状态。

> 当取值为**ConsoleProtection**，即开启修改保护后，用户不能通过负载均衡控制台修改实例配置，但可以通过调用API修改实例配置。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ConsoleProtection',
          ),
        ),
        3 => 
        array (
          'name' => 'ModificationProtectionReason',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置修改保护状态的原因，长度为1~80个字符，必须以字母或中文开头，支持数字、半角句号（.）、下划线（_）和短划线（-）。

> 仅在**ModificationProtectionStatus**为**ConsoleProtection**时有效。',
            'type' => 'string',
            'required' => false,
            'example' => '配置变更',
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
                'example' => '791D8B68-AE0F-4174-AF54-088C8B3C5D54',
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
            'errorCode' => 'OperationUnsupported.SetLoadBalancerStatus',
            'errorMessage' => 'The zone of the loadBalancer does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParam.ModificationProtectionStatus',
            'errorMessage' => 'The param ModificationProtectionStatus is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParam.ModificationProtectionReason',
            'errorMessage' => 'The param ModificationProtectionReason is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"791D8B68-AE0F-4174-AF54-088C8B3C5D54\\"\\n}","errorExample":""},{"type":"xml","example":"<SetLoadBalancerModificationProtectionResponse>\\n    <RequestId>791D8B68-AE0F-4174-AF54-088C8B3C5D54</RequestId>\\n</SetLoadBalancerModificationProtectionResponse>","errorExample":""}]',
      'title' => '设置实例修改保护状态',
      'summary' => '设置负载均衡实例修改保护状态。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetLoadBalancerName' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的地域ID。

您可以调用[DescribeRegions](~~25609~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1b6c719dfa08e******',
          ),
        ),
        2 => 
        array (
          'name' => 'LoadBalancerName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的新名称。

长度为1～80个英文、数字或中文字符，可包含半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test1',
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
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<SetLoadBalancerNameResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</SetLoadBalancerNameResponse>","errorExample":""}]',
      'title' => '修改负载均衡实例的名称',
      'summary' => '修改负载均衡实例的名称。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetLoadBalancerStatus' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域ID。

您可以从[地域和可用区](~~40654~~)列表或通过调用[DescribeRegions](~~25609~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1b6c719dfa08e******',
          ),
        ),
        2 => 
        array (
          'name' => 'LoadBalancerStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例状态。取值：**active**或**inactive**。

- **active**（默认值）

	
 当负载均衡实例的状态为**active**时，实例中的监听可以根据规则转发接收的流量。

 传统型实例创建后的状态默认为**active**。
 
- **inactive**

 当负载均衡实例的状态为**inactive**时，实例中的监听不会再转发接收的流量。


> 当一个实例下的所有监听都被删除后，实例状态会自动变更为**inactive**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'active',
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
            'errorCode' => 'OperationUnsupported.SetLoadBalancerStatus',
            'errorMessage' => 'The zone of the loadBalancer does not support this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","type":"json"}]',
      'title' => '设置负载均衡实例的状态',
      'summary' => '设置负载均衡实例的状态。',
    ),
    'ModifyLoadBalancerInstanceChargeType' => 
    array (
      'summary' => '变更按量付费CLB实例的实例计费方式。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的地域ID。

您可以通过调用[DescribeRegions](~~25609~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1b3jus5hpenznuu****',
          ),
        ),
        2 => 
        array (
          'name' => 'InternetChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更后的公网计费方式。
仅取值**paybytraffic**：按使用流量计费。

> - 当**InstanceChargeType**参数的值为**PayByCLCU**时，只支持按使用流量计费。
> - 如果公网计费方式从按固定带宽变更为按使用流量，则所有变配会在次日00:00:00生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'paybytraffic',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更后的实例计费方式。
仅取值**PayByCLCU**：按使用量计费。
',
            'type' => 'string',
            'required' => true,
            'example' => 'PayByCLCU',
          ),
        ),
        4 => 
        array (
          'name' => 'LoadBalancerSpec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的规格。

您无需设置该参数。目前仅支持按规格计费转按使用量计费，不支持按使用量计费转按规格计费。
',
            'type' => 'string',
            'required' => false,
            'example' => 'slb.s1.small',
          ),
        ),
        5 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按带宽计费的公网型实例的带宽峰值。

您无需设置该参数，按使用量计费实例的公网计费方式仅支持按使用流量计费。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '5000',
            'minimum' => '1',
            'example' => '5',
            'default' => '-1',
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
                'example' => '365F4154-92F6-4AE4-92F8-7FF34B540710',
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
            'errorCode' => 'OperationFailed.UnpaidBillsExist',
            'errorMessage' => 'The account has unpaid bills. Please pay your overdue bill first.',
          ),
          1 => 
          array (
            'errorCode' => 'Operation.NotAllowed',
            'errorMessage' => 'Operation Denied. Unfinished order exists.',
          ),
          2 => 
          array (
            'errorCode' => 'PAYFOR.ACCOUNT_MONEY_VALIDATE_ERROR',
            'errorMessage' => 'Your channel partner account does not have sufficient funds, please contact your channel partner to recharge the account.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.PayByCLCU',
            'errorMessage' => 'The operation is not allowed because the instanceChargeType of loadbalancer is PayByCLCU.',
          ),
          4 => 
          array (
            'errorCode' => 'IllegalParam.InstanceChargeType',
            'errorMessage' => 'The parameter InstanceChargeType is illegal.',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalParam.InternetChargeType',
            'errorMessage' => 'The parameter InternetChargeType is illegal.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidAction.RegionNotSupport',
            'errorMessage' => 'The region does not support this action.',
          ),
          7 => 
          array (
            'errorCode' => 'MissingParam.LoadBalancerSpec',
            'errorMessage' => 'The param LoadBalancerSpec is required.',
          ),
          8 => 
          array (
            'errorCode' => 'OperationDenied.PayBySpec',
            'errorMessage' => 'The operation is not allowed because the instanceChargeType of loadbalancer is PayBySpec.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidParameterBandwidth',
            'errorMessage' => 'The specified Bandwidth is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified LoadBalancerSpec is invalid.',
          ),
          11 => 
          array (
            'errorCode' => 'Forbidden.LcuToSpec',
            'errorMessage' => 'User does not have permission modify InstanceChargeType to spec.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyLoadBalancerInstanceChargeTypeResponse>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n</ModifyLoadBalancerInstanceChargeTypeResponse>","errorExample":""}]',
      'title' => '变更按量付费CLB实例的实例计费方式',
      'description' => '> - 按量付费实例中，仅支持按规格计费转按使用量计费，不支持按使用量计费转按规格计费。
> - 目前，该接口不支持批量变更实例计费方式。',
    ),
    'DescribeLoadBalancerAttribute' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的地域ID。

您可以通过调用[DescribeRegions](~~25609~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1b6c719dfa08ex****',
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
              'VpcId' => 
              array (
                'description' => '传统型负载均衡私网实例的专有网络ID。',
                'type' => 'string',
                'example' => 'vpc-25dvzy9f8****',
              ),
              'Tags' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Tag' => 
                  array (
                    'description' => '标签列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '标签列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TagKey' => 
                        array (
                          'description' => '实例的标签键。N的取值范围：**1**~**20**。一旦输入该值，则不允许为空字符串。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'TagValue' => 
                        array (
                          'description' => '实例的标签值。N的取值范围：**1**~**20**。一旦输入该值，可以为空字符串。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                          'type' => 'string',
                          'example' => 'value',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'CreateTimeStamp' => 
              array (
                'description' => '传统型负载均衡实例创建时间戳。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1504147745000',
              ),
              'CreateTime' => 
              array (
                'description' => '传统型负载均衡实例的创建时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。',
                'type' => 'string',
                'example' => '2017-08-31T02:49:05Z',
              ),
              'LoadBalancerId' => 
              array (
                'description' => '传统型负载均衡实例的ID。',
                'type' => 'string',
                'example' => 'lb-bp1b6c719dfa08ex****',
              ),
              'PayType' => 
              array (
                'description' => '传统型负载均衡实例付费类型。取值：

<props="china">- **PrePay**：包年包月。</props>

<props="china">- **PayOnDemand**（默认值）：按量付费。</props>

<props="intl">- **PayOnDemand**（默认值）：按量付费。</props>

',
                'type' => 'string',
                'example' => 'PayOnDemand',
              ),
              'AddressType' => 
              array (
                'description' => '传统型负载均衡实例的地址类型。',
                'type' => 'string',
                'example' => 'internet',
              ),
              'NetworkType' => 
              array (
                'description' => '传统型负载均衡实例的网络类型。',
                'type' => 'string',
                'example' => 'vpc',
              ),
              'AddressIPVersion' => 
              array (
                'description' => 'IP版本。取值：**ipv4**或**ipv6**。',
                'type' => 'string',
                'example' => 'ipv4',
              ),
              'RenewalCycUnit' => 
              array (
                'description' => '自动续费周期，取值：**Year**或**Month**（默认值）。

>该参数仅适用于中国站包年包月实例，即**PayType**的参数值为**PrePay**且**RenewalStatus**为**AutoRenewal**时有效。
',
                'type' => 'string',
                'example' => 'Month',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF34B540710',
              ),
              'Bandwidth' => 
              array (
                'description' => '按带宽计费的公网型实例的带宽峰值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'LoadBalancerName' => 
              array (
                'description' => '传统型负载均衡实例的名称。',
                'type' => 'string',
                'example' => 'lb-instance-test',
              ),
              'Address' => 
              array (
                'description' => '传统型负载均衡实例的服务地址。 ',
                'type' => 'string',
                'example' => '42.XX.XX.6',
              ),
              'SlaveZoneId' => 
              array (
                'description' => '传统型负载均衡实例的备可用区ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou-d',
              ),
              'EndTimeStamp' => 
              array (
                'description' => '传统型负载均衡实例结束时间戳。 ',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '3249380160000',
              ),
              'MasterZoneId' => 
              array (
                'description' => '传统型负载均衡实例的主可用区ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou-b',
              ),
              'LoadBalancerSpec' => 
              array (
                'description' => '传统型负载均衡实例的性能规格。',
                'type' => 'string',
                'example' => 'slb.s1.small',
              ),
              'AutoReleaseTime' => 
              array (
                'description' => '释放时间的时间戳。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1513947075000',
              ),
              'ModificationProtectionReason' => 
              array (
                'description' => '设置修改保护状态的原因，长度为1~80个字符，必须以字母或中文开头，支持数字、半角句号（.）、下划线（_）和短划线（-）。

> 仅在**ModificationProtectionStatus**为**ConsoleProtection**时有效。',
                'type' => 'string',
                'example' => '实例业务保障期',
              ),
              'RegionId' => 
              array (
                'description' => '传统型负载均衡实例所在地域ID。 ',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'ModificationProtectionStatus' => 
              array (
                'description' => '传统型负载均衡修改保护状态：

- **NonProtection**：不限制修改保护，设置后会清空之前设置的**ModificationProtectionReason**。
- **ConsoleProtection**：实例控制台修改保护状态。

> 当取值为**ConsoleProtection**，即开启修改保护后，用户不能通过负载均衡控制台修改实例配置，但可以通过调用API修改实例配置。',
                'type' => 'string',
                'example' => 'ConsoleProtection',
              ),
              'EndTime' => 
              array (
                'description' => '传统型负载均衡实例结束时间。 ',
                'type' => 'string',
                'example' => '2022-09-08T16:00:00Z',
              ),
              'VSwitchId' => 
              array (
                'description' => '私网实例的交换机ID。',
                'type' => 'string',
                'example' => 'vsw-255ecrwq5****',
              ),
              'LoadBalancerStatus' => 
              array (
                'description' => '传统型负载均衡实例状态：

- **inactive**：实例已停止，此状态的实例监听不会再转发流量。

- **active**：实例运行中，实例创建后，默认状态为**active**。

- **locked**：实例已锁定，实例已经欠费或被阿里云锁定。
		',
                'type' => 'string',
                'example' => 'active',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '企业资源组ID。',
                'type' => 'string',
                'example' => 'rg-atstuj3rtop****',
              ),
              'InternetChargeType' => 
              array (
                'description' => '公网类型实例付费方式。取值：

- **paybytraffic**：按使用流量计费。
- **paybybandwidth**：按固定带宽计费。',
                'type' => 'string',
                'example' => 'paybytraffic',
              ),
              'DeleteProtection' => 
              array (
                'description' => '是否开启实例删除保护。

取值：**on**或**off**。',
                'type' => 'string',
                'example' => 'off',
              ),
              'RegionIdAlias' => 
              array (
                'description' => '传统型负载均衡实例所属的地域别名。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'RenewalStatus' => 
              array (
                'description' => '续费状态，取值：

- **AutoRenewal**：自动续费。
- **Normal**：非自动续费，您需要自行续费负载均衡实例。
- **NotRenewal**：不再续费。返回该值后，系统不再发送到期提醒，只在到期前第三天发送不续费提醒。

> 该参数仅适用于中国站包年包月实例，即**PayType**的参数值为**PrePay**时有效。',
                'type' => 'string',
                'example' => 'AutoRenewal',
              ),
              'RenewalDuration' => 
              array (
                'description' => '自动续费时长，仅在**RenewalStatus**为**AutoRenewal**时有效。

- **RenewalCycUnit**为**Year**时，取值：**1~5**。
- **RenewalCycUnit**为**Month**时，取值：**1~9**。

> 该参数仅适用于中国站包年包月实例，即**PayType**的参数值为**PrePay**时有效。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Labels' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                ),
              ),
              'ListenerPorts' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ListenerPort' => 
                  array (
                    'description' => '传统型负载均衡实例前端使用的端口。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '传统型负载均衡实例前端使用的端口。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '80',
                    ),
                  ),
                ),
              ),
              'ListenerPortsAndProtocal' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ListenerPortAndProtocal' => 
                  array (
                    'description' => '监听端口或协议。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '传统型负载均衡实例前端使用的协议。 ',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ListenerProtocal' => 
                        array (
                          'description' => '传统型负载均衡实例前端使用的协议。 ',
                          'type' => 'string',
                          'example' => 'http',
                        ),
                        'ListenerPort' => 
                        array (
                          'description' => '实例前端使用的端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '443',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'ListenerPortsAndProtocol' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ListenerPortAndProtocol' => 
                  array (
                    'description' => '实例前端使用的端口和协议。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例前端使用的端口和协议。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ListenerPort' => 
                        array (
                          'description' => '实例前端使用的端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '80',
                        ),
                        'ListenerProtocol' => 
                        array (
                          'description' => '实例前端使用的协议。 ',
                          'type' => 'string',
                          'example' => 'https',
                        ),
                        'ListenerForward' => 
                        array (
                          'description' => '是否启用监听转发。',
                          'type' => 'string',
                          'example' => 'on',
                        ),
                        'Description' => 
                        array (
                          'description' => '监听端口和协议描述。',
                          'type' => 'string',
                          'example' => '监听描述',
                        ),
                        'ForwardPort' => 
                        array (
                          'description' => '转发到的目的监听端口，必须是已经存在的HTTPS监听端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '443',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'BackendServers' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'BackendServer' => 
                  array (
                    'description' => '实例的后端服务器列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例的后端服务器列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '后端服务器类型。
ecs：ECS实例（默认）。
eni：弹性网卡实例。
eci：弹性容器实例。',
                          'type' => 'string',
                          'example' => 'ecs',
                        ),
                        'Weight' => 
                        array (
                          'description' => '后端服务器的权重。 ',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '90',
                        ),
                        'Description' => 
                        array (
                          'description' => '后端服务器描述。

> 若用户未设置**Description**，则该参数不返回。',
                          'type' => 'string',
                          'example' => '用来接收转发请求的后端服务器',
                        ),
                        'ServerIp' => 
                        array (
                          'description' => 'ENI或ECI的实例ID。',
                          'type' => 'string',
                          'example' => '192.XX.XX.11',
                        ),
                        'ServerId' => 
                        array (
                          'description' => '后端服务器实例ID。',
                          'type' => 'string',
                          'example' => 'i-2zej4lxhjoq1icu*****',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'InstanceChargeType' => 
              array (
                'description' => '实例计费方式。取值：

- **PayBySpec**：按规格计费。
- **PayByCLCU**：按使用量计费。',
                'type' => 'string',
                'example' => 'PayBySpec',
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
            'errorCode' => 'LocationServiceTimeout',
            'errorMessage' => 'Location service connection timeout. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"VpcId\\": \\"vpc-25dvzy9f8****\\",\\n  \\"Tags\\": {\\n    \\"Tag\\": [\\n      {\\n        \\"TagKey\\": \\"test\\",\\n        \\"TagValue\\": \\"value\\"\\n      }\\n    ]\\n  },\\n  \\"CreateTimeStamp\\": 1504147745000,\\n  \\"CreateTime\\": \\"2017-08-31T02:49:05Z\\",\\n  \\"LoadBalancerId\\": \\"lb-bp1b6c719dfa08ex****\\",\\n  \\"PayType\\": \\"PayOnDemand\\",\\n  \\"AddressType\\": \\"internet\\",\\n  \\"NetworkType\\": \\"vpc\\",\\n  \\"AddressIPVersion\\": \\"ipv4\\",\\n  \\"RenewalCycUnit\\": \\"Month\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\",\\n  \\"Bandwidth\\": 5,\\n  \\"LoadBalancerName\\": \\"lb-instance-test\\",\\n  \\"Address\\": \\"42.XX.XX.6\\",\\n  \\"SlaveZoneId\\": \\"cn-hangzhou-d\\",\\n  \\"EndTimeStamp\\": 3249380160000,\\n  \\"MasterZoneId\\": \\"cn-hangzhou-b\\",\\n  \\"LoadBalancerSpec\\": \\"slb.s1.small\\",\\n  \\"AutoReleaseTime\\": 1513947075000,\\n  \\"ModificationProtectionReason\\": \\"实例业务保障期\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"ModificationProtectionStatus\\": \\"ConsoleProtection\\",\\n  \\"EndTime\\": \\"2022-09-08T16:00:00Z\\",\\n  \\"VSwitchId\\": \\"vsw-255ecrwq5****\\",\\n  \\"LoadBalancerStatus\\": \\"active\\",\\n  \\"ResourceGroupId\\": \\"rg-atstuj3rtop****\\",\\n  \\"InternetChargeType\\": \\"paybytraffic\\",\\n  \\"DeleteProtection\\": \\"off\\",\\n  \\"RegionIdAlias\\": \\"cn-hangzhou\\",\\n  \\"RenewalStatus\\": \\"AutoRenewal\\",\\n  \\"RenewalDuration\\": 1,\\n  \\"ListenerPorts\\": {\\n    \\"ListenerPort\\": [\\n      80\\n    ]\\n  },\\n  \\"ListenerPortsAndProtocal\\": {\\n    \\"ListenerPortAndProtocal\\": [\\n      {\\n        \\"ListenerProtocal\\": \\"http\\",\\n        \\"ListenerPort\\": 443\\n      }\\n    ]\\n  },\\n  \\"ListenerPortsAndProtocol\\": {\\n    \\"ListenerPortAndProtocol\\": [\\n      {\\n        \\"ListenerPort\\": 80,\\n        \\"ListenerProtocol\\": \\"https\\",\\n        \\"ListenerForward\\": \\"on\\",\\n        \\"Description\\": \\"监听描述\\",\\n        \\"ForwardPort\\": 443\\n      }\\n    ]\\n  },\\n  \\"BackendServers\\": {\\n    \\"BackendServer\\": [\\n      {\\n        \\"Type\\": \\"ecs\\",\\n        \\"Weight\\": 90,\\n        \\"Description\\": \\"用来接收转发请求的后端服务器\\",\\n        \\"ServerIp\\": \\"192.XX.XX.11\\",\\n        \\"ServerId\\": \\"i-2zej4lxhjoq1icu*****\\"\\n      }\\n    ]\\n  },\\n  \\"InstanceChargeType\\": \\"PayBySpec\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeLoadBalancerAttributeResponse>\\n    <VpcId>vpc-25dvzy9f8****</VpcId>\\n    <Tags>\\n        <TagKey>test</TagKey>\\n        <TagValue>value</TagValue>\\n    </Tags>\\n    <CreateTimeStamp>1504147745000</CreateTimeStamp>\\n    <CreateTime>2017-08-31T02:49:05Z</CreateTime>\\n    <LoadBalancerId>lb-bp1b6c719dfa08ex****</LoadBalancerId>\\n    <PayType>PayOnDemand</PayType>\\n    <AddressType>internet</AddressType>\\n    <NetworkType>vpc</NetworkType>\\n    <AddressIPVersion>ipv4</AddressIPVersion>\\n    <RenewalCycUnit>Month</RenewalCycUnit>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <Bandwidth>5</Bandwidth>\\n    <LoadBalancerName>lb-instance-test</LoadBalancerName>\\n    <Address>42.XX.XX.6</Address>\\n    <SlaveZoneId>cn-hangzhou-d</SlaveZoneId>\\n    <EndTimeStamp>32493801600000</EndTimeStamp>\\n    <MasterZoneId>cn-hangzhou-b</MasterZoneId>\\n    <LoadBalancerSpec>slb.s1.small</LoadBalancerSpec>\\n    <AutoReleaseTime>1513947075000</AutoReleaseTime>\\n    <ModificationProtectionReason>实例业务保障期</ModificationProtectionReason>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <ModificationProtectionStatus>ConsoleProtection</ModificationProtectionStatus>\\n    <EndTime>2022-09-08T16:00:00Z</EndTime>\\n    <VSwitchId>vsw-255ecrwq5****</VSwitchId>\\n    <LoadBalancerStatus>active</LoadBalancerStatus>\\n    <ResourceGroupId>rg-atstuj3rtop****</ResourceGroupId>\\n    <InternetChargeType>paybytraffic</InternetChargeType>\\n    <DeleteProtection>off</DeleteProtection>\\n    <RegionIdAlias>hangzhou</RegionIdAlias>\\n    <RenewalStatus>AutoRenewal</RenewalStatus>\\n    <RenewalDuration>1</RenewalDuration>\\n    <ListenerPorts>80</ListenerPorts>\\n    <ListenerPortsAndProtocal>\\n        <ListenerProtocal>http</ListenerProtocal>\\n        <ListenerPort>443</ListenerPort>\\n    </ListenerPortsAndProtocal>\\n    <ListenerPortsAndProtocol>\\n        <ListenerPort>80</ListenerPort>\\n        <ListenerProtocol>https</ListenerProtocol>\\n        <ListenerForward>on</ListenerForward>\\n        <Description>监听描述</Description>\\n        <ForwardPort>443</ForwardPort>\\n    </ListenerPortsAndProtocol>\\n    <BackendServers>\\n        <Type>ecs</Type>\\n        <Weight>90</Weight>\\n        <Description>用来接收转发请求的后端服务器</Description>\\n        <ServerIp>192.XX.XX.11</ServerIp>\\n        <ServerId>i-2zej4lxhjoq1icu*****</ServerId>\\n    </BackendServers>\\n    <InstanceChargeType>PayBySpec</InstanceChargeType>\\n</DescribeLoadBalancerAttributeResponse>","errorExample":""}]',
      'title' => '查询指定负载均衡实例的详细信息',
      'summary' => '查询指定负载均衡实例的详细信息。',
      'description' => '> 如果后端服务器设置在虚拟服务器组下面，请调用[DescribeVServerGroupAttribute](~~35224~~)查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeLoadBalancers' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的地域ID。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ServerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '添加的后端服务器ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'i-2zebcbq******',
          ),
        ),
        2 => 
        array (
          'name' => 'AddressIPVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP版本，可以设置为**ipv4**或者**ipv6**。',
            'type' => 'string',
            'required' => false,
            'example' => 'ipv4',
          ),
        ),
        3 => 
        array (
          'name' => 'LoadBalancerStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例状态。取值：

- **inactive**: 实例已停止，此状态的实例监听不会再转发流量。

- **active**: 实例运行中，实例创建后，默认状态为**active**。

- **locked**: 实例已锁定。当负载均衡实例到期后，但到期时间未超过7天时，负载均衡实例进入锁定状态。此种状态下，您不能对负载均衡实例进行任何操作，并且实例不再会进行流量转发，但会保留实例的IP和其它配置。',
            'type' => 'string',
            'required' => false,
            'example' => 'active',
          ),
        ),
        4 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例ID。

支持多值查询，最多可输入10个ID，以半角逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'lb-bp1b6c719dfa****',
          ),
        ),
        5 => 
        array (
          'name' => 'LoadBalancerName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例名称。

长度为1~80个英文或中文字符，必须以大小字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。

支持多值查询，最多可输入10个名称，以半角逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        6 => 
        array (
          'name' => 'ServerIntranetAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '添加的后端服务器的内网地址。

支持多值查询，以半角逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => '10.XX.XX.102',
          ),
        ),
        7 => 
        array (
          'name' => 'AddressType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的网络类型。取值：

* **internet**：创建公网负载均衡实例后，系统会分配一个公网IP地址，可以转发公网请求。

* **intranet**：创建内网负载均衡实例后，系统会分配一个内网IP地址，仅可转发内网请求。',
            'type' => 'string',
            'required' => false,
            'example' => 'intranet',
          ),
        ),
        8 => 
        array (
          'name' => 'InternetChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '公网计费方式。取值：
- **paybybandwidth**：按带宽计费。

- **paybytraffic**：按流量计费。

<props="china">当**PayType**参数的值为**PrePay**时，只支持按带宽计费。当**InstanceChargeType**参数的值为**PayByCLCU**时，只支持按流量计费。</props>

',
            'type' => 'string',
            'required' => false,
            'example' => 'paybytraffic',
          ),
        ),
        9 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例所属的VPC ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-bp1aevy8sof****',
          ),
        ),
        10 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例所属的交换机ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp12mw1f8k3****',
          ),
        ),
        11 => 
        array (
          'name' => 'NetworkType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '私网实例的网络类型。取值：

- **vpc**：专有网络实例。 

- **classic**：经典网络实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc',
          ),
        ),
        12 => 
        array (
          'name' => 'Address',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的服务地址。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.XX.XX',
          ),
        ),
        13 => 
        array (
          'name' => 'MasterZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的主可用区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-b',
          ),
        ),
        14 => 
        array (
          'name' => 'SlaveZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的备可用区ID。

目前对金融云用户暂时不支持多可用区功能。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-d',
          ),
        ),
        15 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例绑定的标签列表，其结构是一个JSON dictionary，包含标签键和标签值。

一次请求中，绑定的标签列表中最多支持10个标签。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"tagKey":"Key1","tagValue":"Value1"}]',
          ),
        ),
        16 => 
        array (
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例付费模式。取值：

* **PayOnDemand**：按量付费。

<props="china">- **PrePay**：包年包月。</props>',
            'type' => 'string',
            'required' => false,
            'example' => 'PayOnDemand',
          ),
        ),
        17 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '企业资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmxazb4p****',
          ),
        ),
        18 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时的页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '1',
            'default' => '0',
          ),
        ),
        19 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。

取值范围：**1**~**100**。

> 如果设置了**PageSize**，则需要同时设置**PageNumber**。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '50',
            'default' => '10',
          ),
        ),
        20 => 
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
              'description' => '标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源的标签键。N的取值范围：**1~20**。一旦输入该值，则不允许为空字符串。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceDept',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。N的取值范围：**1~20**。一旦输入该值，可以为空字符串。
最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceJoshua',
                ),
              ),
              'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8B9DB03B-ED39-5DB8-9C9F-1ED5F548D61E',
              ),
              'PageNumber' => 
              array (
                'description' => '实例列表页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '当前分页的行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'TotalCount' => 
              array (
                'description' => '根据过滤条件得到的实例总个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'LoadBalancers' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'LoadBalancer' => 
                  array (
                    'description' => '数组格式，返回负载均衡实例列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VpcId' => 
                        array (
                          'description' => '私网负载均衡实例的专有网络ID。',
                          'type' => 'string',
                          'example' => 'vpc-25dvzy9f8****',
                        ),
                        'CreateTimeStamp' => 
                        array (
                          'description' => '实例创建时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1504147745000',
                        ),
                        'LoadBalancerId' => 
                        array (
                          'description' => '负载均衡实例ID。',
                          'type' => 'string',
                          'example' => 'lb-bp1b6c719dfa****',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '实例创建时间，格式为：`YYYY-MM-DDThh:mm:ssZ`。',
                          'type' => 'string',
                          'example' => '2021-12-02T02:49:05Z',
                        ),
                        'PayType' => 
                        array (
                          'description' => '负载均衡实例付费模式，取值：

* **PayOnDemand**：按量付费。

<props="china">- **PrePay**：包年包月。</props>',
                          'type' => 'string',
                          'example' => 'PayOnDemand',
                        ),
                        'AddressType' => 
                        array (
                          'description' => '实例的网络类型。取值：

* **internet**：创建公网负载均衡实例后，系统会分配一个公网IP地址，可以转发公网请求。

* **intranet**：创建内网负载均衡实例后，系统会分配一个内网IP地址，仅可转发内网请求。',
                          'type' => 'string',
                          'example' => 'intranet',
                        ),
                        'NetworkType' => 
                        array (
                          'description' => '私网负载均衡实例的网络类型，取值：

* **vpc**：专有网络实例。

* **classic**：经典网络实例。',
                          'type' => 'string',
                          'example' => 'vpc',
                        ),
                        'AddressIPVersion' => 
                        array (
                          'description' => 'IP版本，可以设置为**ipv4**或者**ipv6**。',
                          'type' => 'string',
                          'example' => 'ipv4',
                        ),
                        'LoadBalancerName' => 
                        array (
                          'description' => '负载均衡实例的名称。',
                          'type' => 'string',
                          'example' => 'lb-bp1o94dp5i6ea****',
                        ),
                        'Bandwidth' => 
                        array (
                          'description' => '监听的带宽峰值，单位：Mbps。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '-1',
                        ),
                        'Address' => 
                        array (
                          'description' => '负载均衡实例服务地址。 ',
                          'type' => 'string',
                          'example' => '100.XX.XX.28',
                        ),
                        'SlaveZoneId' => 
                        array (
                          'description' => '实例的备可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-d',
                        ),
                        'MasterZoneId' => 
                        array (
                          'description' => '实例的主可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-b',
                        ),
                        'InternetChargeTypeAlias' => 
                        array (
                          'description' => '公网计费方式。取值：

- **paybybandwidth**：按带宽计费。

- **paybytraffic**：按流量计费

<props="china">当**PayType**参数的值为**PrePay**时，只支持按带宽计费。当**InstanceChargeType**参数的值为**PayByCLCU**时，只支持按流量计费。</props>',
                          'type' => 'string',
                          'example' => 'paybybandwidth',
                        ),
                        'LoadBalancerSpec' => 
                        array (
                          'description' => '负载均衡实例的性能规格。',
                          'type' => 'string',
                          'example' => 'slb.s1.small',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '负载均衡实例的地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'ModificationProtectionReason' => 
                        array (
                          'description' => '设置修改保护状态的原因，长度为1~80个字符，必须以字母或中文开头，支持数字、半角句号（.）、下划线（_）和短划线（-）。

> 仅在`ModificationProtectionStatus`为**ConsoleProtection**时有效。',
                          'type' => 'string',
                          'example' => '托管实例',
                        ),
                        'ModificationProtectionStatus' => 
                        array (
                          'description' => '负载均衡修改保护状态：

- **NonProtection**：不限制修改保护，设置后会清空之前设置的`ModificationProtectionReason`。

- **ConsoleProtection**：实例控制台修改保护状态。

> 当取值为**ConsoleProtection**，即开启修改保护后，用户不能通过负载均衡控制台修改实例配置，但可以通过调用API修改实例配置。
',
                          'type' => 'string',
                          'example' => 'ConsoleProtection',
                        ),
                        'VSwitchId' => 
                        array (
                          'description' => '私网负载均衡实例的交换机ID。',
                          'type' => 'string',
                          'example' => 'vsw-255ecr****',
                        ),
                        'LoadBalancerStatus' => 
                        array (
                          'description' => '负载均衡实例状态。取值：

* **inactive**：实例已停止，此状态的实例监听不会再转发流量。

* **active**：实例运行中，实例创建后，默认状态为**active**。

* **locked**：实例已锁定，实例已经被锁定。',
                          'type' => 'string',
                          'example' => 'active',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '企业资源组ID。',
                          'type' => 'string',
                          'example' => 'rg-atstuj3r****',
                        ),
                        'InternetChargeType' => 
                        array (
                          'description' => '公网类型实例付费方式。取值：
- **3**：按带宽计费（**paybybandwidth**）。

- **4**：按流量计费（**paybytraffic**）。

<props="china">当**PayType**参数的值为**PrePay**时，只支持按带宽计费。当**InstanceChargeType**参数的值为**PayByCLCU**时，只支持按流量计费。</props>
',
                          'type' => 'string',
                          'example' => '3',
                        ),
                        'DeleteProtection' => 
                        array (
                          'description' => '负载均衡删除保护状态。取值：

- **on**：开启。
- **off**：关闭。',
                          'type' => 'string',
                          'example' => 'off',
                        ),
                        'RegionIdAlias' => 
                        array (
                          'description' => '传统型负载均衡实例的地域名称。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '标签列表',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'TagValue' => 
                                  array (
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'example' => 'testvalue',
                                  ),
                                  'TagKey' => 
                                  array (
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'example' => 'testkey',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'InstanceChargeType' => 
                        array (
                          'description' => '实例计费方式，取值：
- **PayBySpec**：按规格计费。
- **PayByCLCU**：按使用量计费。

>该参数仅适用于中国站且当**PayType**（实例付费模式）取值为**PayOnDemand**（按量付费）时，该参数生效。',
                          'type' => 'string',
                          'example' => 'PayBySpec',
                        ),
                        'IneffectiveOrderList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidTag',
            'errorMessage' => 'The specified tags is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'TooManyResult',
            'errorMessage' => 'fuzzy query retrieve too many instances.',
          ),
          2 => 
          array (
            'errorCode' => 'LocationServiceTimeout',
            'errorMessage' => 'Location service connection timeout. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8B9DB03B-ED39-5DB8-9C9F-1ED5F548D61E\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 50,\\n  \\"TotalCount\\": 1,\\n  \\"LoadBalancers\\": {\\n    \\"LoadBalancer\\": [\\n      {\\n        \\"VpcId\\": \\"vpc-25dvzy9f8****\\",\\n        \\"CreateTimeStamp\\": 1504147745000,\\n        \\"LoadBalancerId\\": \\"lb-bp1b6c719dfa****\\",\\n        \\"CreateTime\\": \\"2021-12-02T02:49:05Z\\",\\n        \\"PayType\\": \\"PayOnDemand\\",\\n        \\"AddressType\\": \\"intranet\\",\\n        \\"NetworkType\\": \\"vpc\\",\\n        \\"AddressIPVersion\\": \\"ipv4\\",\\n        \\"LoadBalancerName\\": \\"lb-bp1o94dp5i6ea****\\",\\n        \\"Bandwidth\\": -1,\\n        \\"Address\\": \\"100.XX.XX.28\\",\\n        \\"SlaveZoneId\\": \\"cn-hangzhou-d\\",\\n        \\"MasterZoneId\\": \\"cn-hangzhou-b\\",\\n        \\"InternetChargeTypeAlias\\": \\"paybybandwidth\\",\\n        \\"LoadBalancerSpec\\": \\"slb.s1.small\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"ModificationProtectionReason\\": \\"托管实例\\",\\n        \\"ModificationProtectionStatus\\": \\"ConsoleProtection\\",\\n        \\"VSwitchId\\": \\"vsw-255ecr****\\",\\n        \\"LoadBalancerStatus\\": \\"active\\",\\n        \\"ResourceGroupId\\": \\"rg-atstuj3r****\\",\\n        \\"InternetChargeType\\": \\"3\\",\\n        \\"DeleteProtection\\": \\"off\\",\\n        \\"RegionIdAlias\\": \\"cn-hangzhou\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"TagValue\\": \\"testvalue\\",\\n              \\"TagKey\\": \\"testkey\\"\\n            }\\n          ]\\n        },\\n        \\"InstanceChargeType\\": \\"PayBySpec\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeLoadBalancersResponse>\\n    <RequestId>8B9DB03B-ED39-5DB8-9C9F-1ED5F548D61E</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>50</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <LoadBalancers>\\n        <VpcId>vpc-25dvzy9f8****</VpcId>\\n        <CreateTimeStamp>1504147745000</CreateTimeStamp>\\n        <LoadBalancerId>lb-bp1b6c719dfa****</LoadBalancerId>\\n        <CreateTime>2021-12-02T02:49:05Z</CreateTime>\\n        <PayType>PayOnDemand</PayType>\\n        <AddressType>intranet</AddressType>\\n        <NetworkType>vpc</NetworkType>\\n        <AddressIPVersion>ipv4</AddressIPVersion>\\n        <LoadBalancerName>lb-bp1o94dp5i6ea****</LoadBalancerName>\\n        <Bandwidth>-1</Bandwidth>\\n        <Address>100.XX.XX.28</Address>\\n        <SlaveZoneId>cn-hangzhou-d</SlaveZoneId>\\n        <MasterZoneId>cn-hangzhou-b</MasterZoneId>\\n        <InternetChargeTypeAlias>paybybandwidth</InternetChargeTypeAlias>\\n        <LoadBalancerSpec>slb.s1.small</LoadBalancerSpec>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <ModificationProtectionReason>托管实例</ModificationProtectionReason>\\n        <ModificationProtectionStatus>ConsoleProtection</ModificationProtectionStatus>\\n        <VSwitchId>vsw-255ecr****</VSwitchId>\\n        <LoadBalancerStatus>active</LoadBalancerStatus>\\n        <ResourceGroupId>rg-atstuj3r****</ResourceGroupId>\\n        <InternetChargeType>3</InternetChargeType>\\n        <DeleteProtection>off</DeleteProtection>\\n        <RegionIdAlias>hangzhou</RegionIdAlias>\\n        <Tags>\\n            <TagValue>FinanceJoshua</TagValue>\\n            <TagKey>FinanceDept</TagKey>\\n        </Tags>\\n        <InstanceChargeType>PayBySpec</InstanceChargeType>\\n    </LoadBalancers>\\n</DescribeLoadBalancersResponse>","errorExample":""}]',
      'title' => '查询已创建的负载均衡实例',
      'summary' => '查询已创建的负载均衡实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteLoadBalancerListener' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的地域ID。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。


> 当您所选地域的Endpoint（服务地址）为slb.aliyuncs.com时，**RegionId**必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp13jaf5qli5xmgl1miup',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例前端使用的端口。

取值：**1~65535**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '65535',
            'minimum' => '0',
            'example' => '80',
          ),
        ),
        3 => 
        array (
          'name' => 'ListenerProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例前端使用的协议。

> 相同端口存在不同协议监听时，此字段必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'https',
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
            'errorCode' => 'ListenerForwardExist',
            'errorMessage' => 'The specified listener is forwarded by the other listener, the ListenerForward relationship should be deleted firstly.',
          ),
          1 => 
          array (
            'errorCode' => 'TooManyListeners',
            'errorMessage' => 'More than 1 listener is found, please be more specified.',
          ),
          2 => 
          array (
            'errorCode' => 'Operation.NotAllowed',
            'errorMessage' => 'The specified listener is not allowed to operate.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Listener',
            'errorMessage' => 'The specified listener is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteLoadBalancerListenerResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</DeleteLoadBalancerListenerResponse>","errorExample":""}]',
      'title' => '删除监听',
      'summary' => '删除监听。',
      'description' => '> 只有当监听的状态为**stopped**或者**running**时，才可以删除。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StartLoadBalancerListener' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp13jaf5qli5*********',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例前端使用的端口。

取值：**1-65535**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '65535',
            'minimum' => '0',
            'example' => '80',
          ),
        ),
        3 => 
        array (
          'name' => 'ListenerProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例前端使用的协议。

> 相同端口存在不同协议监听时，此字段必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'https',
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
            'errorCode' => 'Operation.Deny',
            'errorMessage' => 'The specified listener is configuring, please try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'TooManyListeners',
            'errorMessage' => 'More than 1 listener is found, please be more specified.',
          ),
          2 => 
          array (
            'errorCode' => 'Operation.NotAllowed',
            'errorMessage' => 'The specified listener is not allowed to operate.',
          ),
          3 => 
          array (
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'The system is busy.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","type":"json"}]',
      'title' => '启动监听',
      'summary' => '启动监听。',
      'description' => '在调用该接口时，注意：

* 监听状态必须为stopped时，才可以调用该接口。

* 接口调用成功后，监听进入starting状态。

* 当监听所属负载均衡实例的状态为locked时，调用此接口会失败。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StopLoadBalancerListener' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域。

您可以从[地域和可用区](~~40654~~)列表或通过调用[DescribeRegions](~~25609~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp13jaf5qli5xmgl1miup',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例前端使用的端口。

取值：**1-65535**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '65535',
            'minimum' => '0',
            'example' => '80',
          ),
        ),
        3 => 
        array (
          'name' => 'ListenerProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例前端使用的协议。

> 相同端口存在不同协议监听时，此字段必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'https',
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
            'errorCode' => 'TooManyListeners',
            'errorMessage' => 'More than 1 listener is found, please be more specified.',
          ),
          1 => 
          array (
            'errorCode' => 'Operation.NotAllowed',
            'errorMessage' => 'The specified listener is not allowed to operate.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","type":"json"}]',
      'title' => '停止监听',
      'summary' => '停止监听。',
      'description' => '在调用该接口时，注意：

- 接口调用成功后，监听进入stopped状态。

- 当监听所属负载均衡实例的状态为locked时，调用此接口会失败。

> 停止监听会使访问中断，请谨慎操作。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeLoadBalancerListeners' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例所在的地域ID。

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。

> 当您所选地域的Endpoint（服务地址）为slb.aliyuncs.com时，`RegionId`必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
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
- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
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
            'description' => '分批次查询时每次显示的条目数。

取值范围：**1**~**100**，入参为空时，默认值：**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '101',
            'minimum' => '0',
            'example' => '50',
            'default' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'ListenerProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡监听协议。取值：
- **tcp**
- **udp**
- **http**
- **https**
',
            'type' => 'string',
            'required' => false,
            'example' => 'http',
          ),
        ),
        4 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的ID列表，最多支持10个实例ID。

',
            'type' => 'array',
            'items' => 
            array (
              'description' => '传统型负载均衡实例的ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'lb-uf6so8u4g35prnvsw****',
            ),
            'required' => false,
            'example' => 'lb-123wrwer',
            'maxItems' => 11,
          ),
        ),
        5 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'allowEmptyValue' => true,
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源的标签键。N的取值范围：**1~20**。一旦输入该值，则不允许为空字符串。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。N的取值范围：**1~20**。一旦输入该值，可以为空字符串。
最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        6 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => 'CLB实例使用的监听端口。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '65535',
            'minimum' => '0',
            'example' => '443',
          ),
        ),
        7 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '自定义监听名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'HTTPS_443',
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
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF34B540710',
              ),
              'TotalCount' => 
              array (
                'description' => '本次请求条件下的数据总量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'MaxResults' => 
              array (
                'description' => '分批次查询时每次显示的条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'Listeners' => 
              array (
                'description' => '返回传统型负载均衡的监听列表。

> 实例未配置监听时，不会返回该参数。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回传统型负载均衡的监听列表。

> 实例未配置监听时，不会返回该参数。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AclType' => 
                    array (
                      'description' => '访问控制类型。取值：

- **white**：仅转发来自所选访问控制策略组中设置的IP地址或地址段的请求，白名单适用于只允许特定IP访问的场景。设置白名单存在一定业务风险。一旦设置白名单，就只有白名单中的IP可以访问负载均衡监听。

 如果开启了白名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。

- **black**：来自所选访问控制策略组中设置的IP地址或地址段的所有请求都不会转发，黑名单适用于只限制某些特定IP访问的场景。

 如果开启了黑名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。',
                      'type' => 'string',
                      'example' => 'white',
                    ),
                    'Status' => 
                    array (
                      'description' => '监听的状态。取值：

- **running**：表示监听正常运行。

- **stopped**：表示监听运行停止。',
                      'type' => 'string',
                      'example' => 'running',
                    ),
                    'VServerGroupId' => 
                    array (
                      'description' => '监听绑定的虚拟服务器组ID。',
                      'type' => 'string',
                      'example' => 'rsp-cige6j****',
                    ),
                    'ListenerProtocol' => 
                    array (
                      'description' => '传统型负载均衡监听协议。',
                      'type' => 'string',
                      'example' => 'http',
                    ),
                    'LoadBalancerId' => 
                    array (
                      'description' => '传统型负载均衡实例的ID。',
                      'type' => 'string',
                      'example' => 'lb-bp1b6c719dfa****',
                    ),
                    'ListenerPort' => 
                    array (
                      'description' => '监听端口。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '80',
                    ),
                    'AclId' => 
                    array (
                      'description' => '访问控制策略组ID。',
                      'type' => 'string',
                      'example' => 'acl-a2do9e413e0spzasx****',
                    ),
                    'Scheduler' => 
                    array (
                      'description' => '调度算法。取值：

- **wrr**：权重值越高的后端服务器，被轮询到的次数（概率）也越高。

- **rr**：按照访问顺序依次将外部请求依序分发到后端服务器。

- **sch**：基于源 IP 地址的一致性 hash，相同的源地址会调度到相同的后端服务器。
- **tch**：基于四元组的一致性 hash（源 IP+目的 IP+源端口+目的端口），相同的流会调度到相同的后端服务器。
- **qch**：基于 QUIC Connection ID 一致性 hash，相同的 QUIC Connection ID 会调度到相同的后端服务器。

> 仅性能保障型实例支持 **sch**、**tch** 和 **qch** 一致性 hash 算法。',
                      'type' => 'string',
                      'example' => 'wrr',
                    ),
                    'Bandwidth' => 
                    array (
                      'description' => '监听的带宽峰值。单位：Mbps。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '-1',
                    ),
                    'Description' => 
                    array (
                      'description' => '监听描述。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'AclStatus' => 
                    array (
                      'description' => '是否开启访问控制功能。取值：
- **on**：是
- **off**：否',
                      'type' => 'string',
                      'example' => 'off',
                    ),
                    'BackendServerPort' => 
                    array (
                      'description' => '后端服务器的端口。

> `VServerGroupId`和`MasterSlaveServerGroupId`均为空时，此参数有效。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '80',
                    ),
                    'AclIds' => 
                    array (
                      'description' => '访问控制策略组ID列表。',
                      'type' => 'array',
                    ),
                    'HTTPListenerConfig' => 
                    array (
                      'description' => 'HTTP监听配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'HealthCheckHttpVersion' => 
                        array (
                          'description' => '健康检查HTTP协议版本。',
                          'type' => 'string',
                          'example' => 'HTTP 1.0',
                        ),
                        'XForwardedFor_ClientSrcPort' => 
                        array (
                          'description' => '是否通过`XForwardedFor_ClientSrcPort`头字段获取访问负载均衡实例客户端的端口。取值：

- **on**：是
- **off**：否',
                          'type' => 'string',
                          'example' => 'on',
                        ),
                        'Cookie' => 
                        array (
                          'description' => '服务器上配置的Cookie。',
                          'type' => 'string',
                          'example' => 'B490B5EBF6F3CD402E515D22BCDA****',
                        ),
                        'Gzip' => 
                        array (
                          'description' => '是否开启Gzip压缩。取值：
- **on**：是
- **off**：否',
                          'type' => 'string',
                          'example' => 'on',
                        ),
                        'HealthCheckConnectPort' => 
                        array (
                          'description' => '健康检查的端口。

> 当**HealthCheck**值为**on**时该参数有效。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '8080',
                        ),
                        'HealthCheckTimeout' => 
                        array (
                          'description' => '每次健康检查响应的最大超时间，单位：秒。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3',
                        ),
                        'HealthCheckType' => 
                        array (
                          'description' => '健康检查协议。',
                          'type' => 'string',
                          'example' => 'tcp',
                        ),
                        'CookieTimeout' => 
                        array (
                          'description' => 'Cookie超时时间。单位：秒。

取值：**1**~**86400**。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '500',
                        ),
                        'HealthCheckDomain' => 
                        array (
                          'description' => '健康检查的域名。',
                          'type' => 'string',
                          'example' => 'www.example.com',
                        ),
                        'UnhealthyThreshold' => 
                        array (
                          'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**成功**判定为**失败**。

取值范围：**2**~**10**。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '4',
                        ),
                        'XForwardedFor_SLBID' => 
                        array (
                          'description' => '是否通过`SLB-ID`头字段获取负载均衡实例ID。取值：
- **on**：是
- **off**：否',
                          'type' => 'string',
                          'example' => 'on',
                        ),
                        'ForwardPort' => 
                        array (
                          'description' => 'HTTP转发至HTTPS的监听端口。

> 如果**ListenerForward**的值为**off**，该参数不显示。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '80',
                        ),
                        'HealthCheckHttpCode' => 
                        array (
                          'description' => '健康检查正常的HTTP状态码。',
                          'type' => 'string',
                          'example' => 'http_2xx,http_3xx',
                        ),
                        'ListenerForward' => 
                        array (
                          'description' => '是否开启HTTP至HTTPS监听转发。取值：
- **on**：是
- **off**：否',
                          'type' => 'string',
                          'example' => 'on',
                        ),
                        'XForwardedFor' => 
                        array (
                          'description' => '是否通过`XForwardedFor`的方式获取来访者真实IP。取值：
- **on**：是。
- **off**：否。',
                          'type' => 'string',
                          'example' => 'on',
                        ),
                        'IdleTimeout' => 
                        array (
                          'description' => '指定连接空闲超时时间。单位：秒。取值范围：**1**~**60**。

在超时时间内一直没有访问请求，负载均衡会暂时中断当前连接，直到一下次请求来临时重新建立连接。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '15',
                        ),
                        'RequestTimeout' => 
                        array (
                          'description' => '指定请求超时时间。单位：秒。取值范围：**1**~**180**。

在超时时间内后端服务器一直没有响应，负载均衡将放弃等待，给客户端返回`HTTP 504`错误码。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '60',
                        ),
                        'HealthCheckInterval' => 
                        array (
                          'description' => '健康检查的时间间隔，单位：秒。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5',
                        ),
                        'XForwardedFor_SLBPORT' => 
                        array (
                          'description' => '是否通过`XForwardedFor_SLBPORT`头字段获取负载均衡实例的监听端口。取值：
- **on**：是
- **off**：否',
                          'type' => 'string',
                          'example' => 'on',
                        ),
                        'HealthCheckURI' => 
                        array (
                          'description' => '健康检查的URI。',
                          'type' => 'string',
                          'example' => '/test/index.html',
                        ),
                        'StickySessionType' => 
                        array (
                          'description' => 'Cookie的处理方式。取值：

- **insert**：植入Cookie。客户端第一次访问时，负载均衡会在返回请求中植入Cookie（即在HTTP和HTTPS响应报文中插入SERVERID），下次客户端携带此Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器上。

- **server**：重写Cookie。负载均衡发现用户自定义了Cookie，将会对原来的Cookie进行重写，下次客户端携带新的Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器。
',
                          'type' => 'string',
                          'example' => 'insert',
                        ),
                        'HealthyThreshold' => 
                        array (
                          'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**失败**判定为**成功**。

取值范围：**2**~**10**。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '4',
                        ),
                        'XForwardedFor_proto' => 
                        array (
                          'description' => '是否通过`X-Forwarded-Proto`头字段获取负载均衡实例的监听协议。取值：
- **on**：是
- **off**：否',
                          'type' => 'string',
                          'example' => 'on',
                        ),
                        'XForwardedFor_SLBIP' => 
                        array (
                          'description' => '是否通过`SLB-IP`头字段获取客户端请求的VIP（Virtual IP address）。取值：
- **on**：是
- **off**：否',
                          'type' => 'string',
                          'example' => 'on',
                        ),
                        'StickySession' => 
                        array (
                          'description' => '是否开启会话保持。取值：
- **on**：是
- **off**：否',
                          'type' => 'string',
                          'example' => 'on',
                        ),
                        'HealthCheckMethod' => 
                        array (
                          'description' => '健康检查方式。取值：**head**或**get**。',
                          'type' => 'string',
                          'example' => 'get',
                        ),
                        'HealthCheck' => 
                        array (
                          'description' => '是否开启健康检查。取值：
- **on**：是
- **off**：否',
                          'type' => 'string',
                          'example' => 'on',
                        ),
                      ),
                    ),
                    'HTTPSListenerConfig' => 
                    array (
                      'description' => 'HTTPS监听配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'XForwardedFor_ClientCertClientVerify' => 
                        array (
                          'description' => '是否通过`XForwardedFor_ClientCertClientVerify`头字段获取对访问负载均衡实例客户端证书的校验结果。取值：
- **on**：是
- **off**：否',
                          'type' => 'string',
                          'example' => 'off',
                        ),
                        'HealthCheckHttpVersion' => 
                        array (
                          'description' => '健康检查HTTP协议版本。',
                          'type' => 'string',
                          'example' => 'HTTP 1.0',
                        ),
                        'XForwardedFor_ClientSrcPort' => 
                        array (
                          'description' => '是否通过`XForwardedFor_ClientSrcPort`头字段获取访问负载均衡实例客户端的端口。取值：
- **on**：是
- **off**：否',
                          'type' => 'string',
                          'example' => 'off',
                        ),
                        'Cookie' => 
                        array (
                          'description' => '服务器上配置的Cookie。',
                          'type' => 'string',
                          'example' => 'B490B5EBF6F3CD402E515D22BCDA****',
                        ),
                        'Gzip' => 
                        array (
                          'description' => '是否开启Gzip压缩。取值：
- **on**：是
- **off**：否',
                          'type' => 'string',
                          'example' => 'on',
                        ),
                        'EnableHttp2' => 
                        array (
                          'description' => '是否开启`HTTP 2.0`特性。取值：
- **on**：是
- **off**：否',
                          'type' => 'string',
                          'example' => 'off',
                        ),
                        'CACertificateId' => 
                        array (
                          'description' => 'CA证书ID。',
                          'type' => 'string',
                          'example' => 'idkp-234-cn-test-0****',
                        ),
                        'HealthCheckConnectPort' => 
                        array (
                          'description' => '健康检查的端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '8080',
                        ),
                        'HealthCheckTimeout' => 
                        array (
                          'description' => '每次健康检查响应的最大超时间。单位：秒。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3',
                        ),
                        'HealthCheckType' => 
                        array (
                          'description' => '健康检查协议。',
                          'type' => 'string',
                          'example' => 'tcp',
                        ),
                        'CookieTimeout' => 
                        array (
                          'description' => 'Cookie超时时间。单位：秒。

取值：**1**~**86400**。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '500',
                        ),
                        'HealthCheckDomain' => 
                        array (
                          'description' => '健康检查的域名。',
                          'type' => 'string',
                          'example' => 'www.example.com',
                        ),
                        'UnhealthyThreshold' => 
                        array (
                          'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**成功**判定为**失败**。

取值范围：**2**~**10**。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '4',
                        ),
                        'XForwardedFor_SLBID' => 
                        array (
                          'description' => '是否通过`SLB-ID`头字段获取负载均衡实例ID。取值：
- **on**：是
- **off**：否',
                          'type' => 'string',
                          'example' => 'on',
                        ),
                        'XForwardedFor_ClientCertSubjectDN' => 
                        array (
                          'description' => '是否通过`XForwardedFor_ClientCertSubjectDN`头字段获取访问负载均衡实例客户端证书的所有者信息。取值：
- **on**：是。
- **off**：否。',
                          'type' => 'string',
                          'example' => 'off',
                        ),
                        'HealthCheckHttpCode' => 
                        array (
                          'description' => '健康检查正常的HTTP状态码。',
                          'type' => 'string',
                          'example' => 'http_2xx,http_3xx',
                        ),
                        'XForwardedFor_ClientCertFingerprint' => 
                        array (
                          'description' => '是否通过`XForwardedFor_ClientCertFingerprint`头字段获取访问负载均衡实例客户端证书的指纹。取值：
- **on**：是
- **off**：否',
                          'type' => 'string',
                          'example' => 'off',
                        ),
                        'XForwardedFor' => 
                        array (
                          'description' => '是否开启通过`XForwardedFor`的方式获取来访者真实IP。取值：
- **on**：是
- **off**：否',
                          'type' => 'string',
                          'example' => 'on',
                        ),
                        'RequestTimeout' => 
                        array (
                          'description' => '指定请求超时时间，单位：秒。取值范围：**1**~**180**。

在超时时间内后端服务器一直没有响应，负载均衡将放弃等待，给客户端返回`HTTP 504`错误码。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '60',
                        ),
                        'IdleTimeout' => 
                        array (
                          'description' => '指定连接空闲超时时间。单位：秒。取值范围：**1**~**60**。

在超时时间内一直没有访问请求，负载均衡会暂时中断当前连接，直到一下次请求来临时重新建立连接。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '15',
                        ),
                        'ServerCertificateId' => 
                        array (
                          'description' => '服务器证书的ID。',
                          'type' => 'string',
                          'example' => 'idkp-123-cn-test-0****',
                        ),
                        'HealthCheckInterval' => 
                        array (
                          'description' => '健康检查的时间间隔。单位：秒。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5',
                        ),
                        'XForwardedFor_SLBPORT' => 
                        array (
                          'description' => '是否通过`XForwardedFor_SLBPORT`头字段获取负载均衡实例的监听端口。取值：
- **on**：是
- **off**：否',
                          'type' => 'string',
                          'example' => 'off',
                        ),
                        'HealthCheckURI' => 
                        array (
                          'description' => '健康检查的URI。',
                          'type' => 'string',
                          'example' => '/test/index.html',
                        ),
                        'StickySessionType' => 
                        array (
                          'description' => 'Cookie的处理方式。

- **insert**：植入Cookie。客户端第一次访问时，负载均衡会在返回请求中植入Cookie（即在HTTP和HTTPS响应报文中插入SERVERID），下次客户端携带此Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器上。

- **server**：重写Cookie。负载均衡发现用户自定义了Cookie，将会对原来的Cookie进行重写，下次客户端携带新的Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器。',
                          'type' => 'string',
                          'example' => 'insert',
                        ),
                        'XForwardedFor_ClientCertIssuerDN' => 
                        array (
                          'description' => '是否通过`XForwardedFor_ClientCertIssuerDN`头字段获取访问负载均衡实例客户端证书的发行者信息。取值：
- **on**：是
- **off**：否',
                          'type' => 'string',
                          'example' => 'off',
                        ),
                        'HealthyThreshold' => 
                        array (
                          'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**失败**判定为**成功**。

取值范围：**2**~**10**。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '4',
                        ),
                        'XForwardedFor_proto' => 
                        array (
                          'description' => '是否通过`X-Forwarded-Proto`头字段获取负载均衡实例的监听协议。取值：
- **on**：是
- **off**：否',
                          'type' => 'string',
                          'example' => 'on',
                        ),
                        'XForwardedFor_SLBIP' => 
                        array (
                          'description' => '是否通过`SLB-IP`头字段获取客户端请求的VIP（Virtual IP address）。取值：
- **on**：是
- **off**：否',
                          'type' => 'string',
                          'example' => 'on',
                        ),
                        'StickySession' => 
                        array (
                          'description' => '是否开启会话保持。取值：
- **on**：是
- **off**：否',
                          'type' => 'string',
                          'example' => 'on',
                        ),
                        'HealthCheckMethod' => 
                        array (
                          'description' => '健康检查方式。',
                          'type' => 'string',
                          'example' => 'get',
                        ),
                        'TLSCipherPolicy' => 
                        array (
                          'description' => '安全策略包含HTTPS可选的TLS协议版本和配套的加密算法套件。

- **tls\\_cipher\\_policy\\_1\\_0**：

  支持TLS版本： TLSv1.0、TLSv1.1和TLSv1.2。

  支持加密算法套件：ECDHE-RSA-AES128-GCM-SHA256、ECDHE-RSA-AES256-GCM-SHA384、ECDHE-RSA-AES128-SHA256、ECDHE-RSA-AES256-SHA384、AES128-GCM-SHA256、AES256-GCM-SHA384、AES128-SHA256、AES256-SHA256、ECDHE-RSA-AES128-SHA、ECDHE-RSA-AES256-SHA、AES128-SHA、AES256-SHA和DES-CBC3-SHA。

- **tls\\_cipher\\_policy\\_1\\_1**：

  支持TLS版本： TLSv1.1和TLSv1.2。

  支持加密算法套件：ECDHE-RSA-AES128-GCM-SHA256、ECDHE-RSA-AES256-GCM-SHA384、ECDHE-RSA-AES128-SHA256、ECDHE-RSA-AES256-SHA384、AES128-GCM-SHA256、AES256-GCM-SHA384、AES128-SHA256、AES256-SHA256、ECDHE-RSA-AES128-SHA、ECDHE-RSA-AES256-SHA、AES128-SHA、AES256-SHA和DES-CBC3-SHA。

- **tls\\_cipher\\_policy\\_1\\_2**

  支持TLS版本：TLSv1.2。

  支持加密算法套件：ECDHE-RSA-AES128-GCM-SHA256、ECDHE-RSA-AES256-GCM-SHA384、ECDHE-RSA-AES128-SHA256、ECDHE-RSA-AES256-SHA384、AES128-GCM-SHA256、AES256-GCM-SHA384、AES128-SHA256、AES256-SHA256、ECDHE-RSA-AES128-SHA、ECDHE-RSA-AES256-SHA、AES128-SHA、AES256-SHA和DES-CBC3-SHA。

- **tls\\_cipher\\_policy\\_1\\_2\\_strict**

  支持TLS版本：TLSv1.2。

  支持加密算法套件：ECDHE-RSA-AES128-GCM-SHA256、ECDHE-RSA-AES256-GCM-SHA384、ECDHE-RSA-AES128-SHA256、ECDHE-RSA-AES256-SHA384、ECDHE-RSA-AES128-SHA和ECDHE-RSA-AES256-SHA。

- **tls\\_cipher\\_policy\\_1\\_2\\_strict\\_with\\_1\\_3**
 
   支持TLS版本：TLSv1.2及TLSv1.3。
 
   支持的加密算法套件：TLS_AES_128_GCM_SHA256、TLS_AES_256_GCM_SHA384、TLS_CHACHA20_POLY1305_SHA256、TLS_AES_128_CCM_SHA256、TLS_AES_128_CCM_8_SHA256、ECDHE-ECDSA-AES128-GCM-SHA256、ECDHE-ECDSA-AES256-GCM-SHA384、ECDHE-ECDSA-AES128-SHA256、ECDHE-ECDSA-AES256-SHA384、ECDHE-RSA-AES128-GCM-SHA256、ECDHE-RSA-AES256-GCM-SHA384、ECDHE-RSA-AES128-SHA256、ECDHE-RSA-AES256-SHA384、ECDHE-ECDSA-AES128-SHA、ECDHE-ECDSA-AES256-SHA、ECDHE-RSA-AES128-SHA、ECDHE-RSA-AES256-SHA。 ',
                          'type' => 'string',
                          'example' => 'tls_cipher_policy_1_0',
                        ),
                        'HealthCheck' => 
                        array (
                          'description' => '是否开启健康检查。取值：
- **on**：是。
- **off**：否。',
                          'type' => 'string',
                          'example' => 'on',
                        ),
                      ),
                    ),
                    'TCPListenerConfig' => 
                    array (
                      'description' => 'TCP监听配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'HealthCheckHttpCode' => 
                        array (
                          'description' => '健康检查正常的HTTP状态码。',
                          'type' => 'string',
                          'example' => 'http_2xx,http_3xx',
                        ),
                        'ConnectionDrainTimeout' => 
                        array (
                          'description' => '设置连接优雅中断超时时间。单位：秒。

取值范围：**10~900**。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '300',
                        ),
                        'PersistenceTimeout' => 
                        array (
                          'description' => '是否开启了会话保持。单位：秒。

取值范围：**0**~**3600**。

取值为**0**时，表示未开启。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'HealthCheckInterval' => 
                        array (
                          'description' => '健康检查的时间间隔，单位为秒。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5',
                        ),
                        'HealthCheckURI' => 
                        array (
                          'description' => '健康检查的URI。',
                          'type' => 'string',
                          'example' => '/test/index.html',
                        ),
                        'HealthCheckConnectPort' => 
                        array (
                          'description' => '健康检查使用的端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '8080',
                        ),
                        'EstablishedTimeout' => 
                        array (
                          'description' => '连接超时时间。单位：秒。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '500',
                        ),
                        'HealthCheckType' => 
                        array (
                          'description' => '健康检查协议。',
                          'type' => 'string',
                          'example' => 'tcp',
                        ),
                        'HealthCheckConnectTimeout' => 
                        array (
                          'description' => '健康检查超时时间。单位：秒。

取值范围：**1**~**300**。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                        'MasterSlaveServerGroupId' => 
                        array (
                          'description' => '监听绑定的主备服务器组ID。',
                          'type' => 'string',
                          'example' => 'rsp-0bfucw*****',
                        ),
                        'HealthyThreshold' => 
                        array (
                          'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**失败**判定为**成功**。

取值范围：**2**~**10**。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '4',
                        ),
                        'HealthCheckDomain' => 
                        array (
                          'description' => '健康检查的域名。',
                          'type' => 'string',
                          'example' => 'www.example.com',
                        ),
                        'UnhealthyThreshold' => 
                        array (
                          'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**成功**判定为**失败**。

取值范围：**2**~**10**。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '4',
                        ),
                        'ConnectionDrain' => 
                        array (
                          'description' => '是否开启连接优雅中断。取值：
- **on**：是
- **off**：否',
                          'type' => 'string',
                          'example' => 'off',
                        ),
                        'HealthCheckMethod' => 
                        array (
                          'description' => '健康检查方式。',
                          'type' => 'string',
                          'example' => 'get',
                        ),
                        'HealthCheck' => 
                        array (
                          'description' => '是否开启健康检查。取值：
- **on**：是
- **off**：否',
                          'type' => 'string',
                          'example' => 'on',
                        ),
                        'ProxyProtocolV2Enabled' => 
                        array (
                          'description' => '是否支持通过Proxy Protocol协议携带客户端源地址到后端服务器。取值：

- **true**：是。
- **false**：否。',
                          'type' => 'string',
                          'example' => 'false',
                        ),
                      ),
                    ),
                    'UDPListenerConfig' => 
                    array (
                      'description' => 'UDP监听配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ConnectionDrainTimeout' => 
                        array (
                          'description' => '设置连接优雅中断超时时间。单位：秒。

取值范围：**10~900**。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '300',
                        ),
                        'HealthCheckInterval' => 
                        array (
                          'description' => '健康检查的时间间隔，单位为秒。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5',
                        ),
                        'HealthCheckExp' => 
                        array (
                          'description' => 'UDP监听健康检查的响应串。',
                          'type' => 'string',
                          'example' => 'ok',
                        ),
                        'HealthCheckConnectPort' => 
                        array (
                          'description' => '健康检查的端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '8080',
                        ),
                        'HealthCheckConnectTimeout' => 
                        array (
                          'description' => '健康检查响应超时时间。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                        'MasterSlaveServerGroupId' => 
                        array (
                          'description' => '绑定的主备服务器组ID。',
                          'type' => 'string',
                          'example' => 'rsp-0bfucw****',
                        ),
                        'HealthyThreshold' => 
                        array (
                          'description' => '健康检查阈值。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '4',
                        ),
                        'UnhealthyThreshold' => 
                        array (
                          'description' => '不健康检查阈值。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '4',
                        ),
                        'ConnectionDrain' => 
                        array (
                          'description' => '是否开启连接优雅中断。取值：
- **on**：是
- **off**：否',
                          'type' => 'string',
                          'example' => 'off',
                        ),
                        'HealthCheckReq' => 
                        array (
                          'description' => 'UDP监听健康检查的请求串。',
                          'type' => 'string',
                          'example' => 'hello',
                        ),
                        'HealthCheck' => 
                        array (
                          'description' => '是否开启健康检查。取值：
- **on**：是
- **off**：否',
                          'type' => 'string',
                          'example' => 'on',
                        ),
                        'ProxyProtocolV2Enabled' => 
                        array (
                          'description' => '是否支持通过Proxy Protocol协议携带客户端源地址到后端服务器。取值：

- **true**：是。
- **false**：否。',
                          'type' => 'string',
                          'example' => 'false',
                        ),
                      ),
                    ),
                    'Tags' => 
                    array (
                      'description' => '标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'TagValue' => 
                          array (
                            'description' => '资源的标签值。',
                            'type' => 'string',
                            'example' => 'TestValue',
                          ),
                          'TagKey' => 
                          array (
                            'description' => '资源的标签键。',
                            'type' => 'string',
                            'example' => 'TestKey',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'IllegalParam.ListenerProtocol',
            'errorMessage' => 'The param of ListenerProtocol is illegal.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParam.MaxResults',
            'errorMessage' => 'The param of MaxResults is illegal.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalParam.NextToken',
            'errorMessage' => 'The param of NextToken is illegal.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalParamSize.LoadBalancerId',
            'errorMessage' => 'The param size of LoadBalancerId is illegal.',
          ),
          4 => 
          array (
            'errorCode' => 'MissingParam.TagKey',
            'errorMessage' => 'The param of TagKey is missing.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\",\\n  \\"TotalCount\\": 10,\\n  \\"MaxResults\\": 50,\\n  \\"Listeners\\": [\\n    {\\n      \\"AclType\\": \\"white\\",\\n      \\"Status\\": \\"running\\",\\n      \\"VServerGroupId\\": \\"rsp-cige6j****\\",\\n      \\"ListenerProtocol\\": \\"http\\",\\n      \\"LoadBalancerId\\": \\"lb-bp1b6c719dfa****\\",\\n      \\"ListenerPort\\": 80,\\n      \\"AclId\\": \\"acl-a2do9e413e0spzasx****\\",\\n      \\"Scheduler\\": \\"wrr\\",\\n      \\"Bandwidth\\": -1,\\n      \\"Description\\": \\"test\\",\\n      \\"AclStatus\\": \\"off\\",\\n      \\"BackendServerPort\\": 80,\\n      \\"AclIds\\": [\\n        \\"\\"\\n      ],\\n      \\"HTTPListenerConfig\\": {\\n        \\"HealthCheckHttpVersion\\": \\"HTTP 1.0\\",\\n        \\"XForwardedFor_ClientSrcPort\\": \\"on\\",\\n        \\"Cookie\\": \\"B490B5EBF6F3CD402E515D22BCDA****\\",\\n        \\"Gzip\\": \\"on\\",\\n        \\"HealthCheckConnectPort\\": 8080,\\n        \\"HealthCheckTimeout\\": 3,\\n        \\"HealthCheckType\\": \\"tcp\\",\\n        \\"CookieTimeout\\": 500,\\n        \\"HealthCheckDomain\\": \\"www.example.com\\",\\n        \\"UnhealthyThreshold\\": 4,\\n        \\"XForwardedFor_SLBID\\": \\"on\\",\\n        \\"ForwardPort\\": 80,\\n        \\"HealthCheckHttpCode\\": \\"http_2xx,http_3xx\\",\\n        \\"ListenerForward\\": \\"on\\",\\n        \\"XForwardedFor\\": \\"on\\",\\n        \\"IdleTimeout\\": 15,\\n        \\"RequestTimeout\\": 60,\\n        \\"HealthCheckInterval\\": 5,\\n        \\"XForwardedFor_SLBPORT\\": \\"on\\",\\n        \\"HealthCheckURI\\": \\"/test/index.html\\",\\n        \\"StickySessionType\\": \\"insert\\",\\n        \\"HealthyThreshold\\": 4,\\n        \\"XForwardedFor_proto\\": \\"on\\",\\n        \\"XForwardedFor_SLBIP\\": \\"on\\",\\n        \\"StickySession\\": \\"on\\",\\n        \\"HealthCheckMethod\\": \\"get\\",\\n        \\"HealthCheck\\": \\"on\\"\\n      },\\n      \\"HTTPSListenerConfig\\": {\\n        \\"XForwardedFor_ClientCertClientVerify\\": \\"off\\",\\n        \\"HealthCheckHttpVersion\\": \\"HTTP 1.0\\",\\n        \\"XForwardedFor_ClientSrcPort\\": \\"off\\",\\n        \\"Cookie\\": \\"B490B5EBF6F3CD402E515D22BCDA****\\",\\n        \\"Gzip\\": \\"on\\",\\n        \\"EnableHttp2\\": \\"off\\",\\n        \\"CACertificateId\\": \\"idkp-234-cn-test-0****\\",\\n        \\"HealthCheckConnectPort\\": 8080,\\n        \\"HealthCheckTimeout\\": 3,\\n        \\"HealthCheckType\\": \\"tcp\\",\\n        \\"CookieTimeout\\": 500,\\n        \\"HealthCheckDomain\\": \\"www.example.com\\",\\n        \\"UnhealthyThreshold\\": 4,\\n        \\"XForwardedFor_SLBID\\": \\"on\\",\\n        \\"XForwardedFor_ClientCertSubjectDN\\": \\"off\\",\\n        \\"HealthCheckHttpCode\\": \\"http_2xx,http_3xx\\",\\n        \\"XForwardedFor_ClientCertFingerprint\\": \\"off\\",\\n        \\"XForwardedFor\\": \\"on\\",\\n        \\"RequestTimeout\\": 60,\\n        \\"IdleTimeout\\": 15,\\n        \\"ServerCertificateId\\": \\"idkp-123-cn-test-0****\\",\\n        \\"HealthCheckInterval\\": 5,\\n        \\"XForwardedFor_SLBPORT\\": \\"off\\",\\n        \\"HealthCheckURI\\": \\"/test/index.html\\",\\n        \\"StickySessionType\\": \\"insert\\",\\n        \\"XForwardedFor_ClientCertIssuerDN\\": \\"off\\",\\n        \\"HealthyThreshold\\": 4,\\n        \\"XForwardedFor_proto\\": \\"on\\",\\n        \\"XForwardedFor_SLBIP\\": \\"on\\",\\n        \\"StickySession\\": \\"on\\",\\n        \\"HealthCheckMethod\\": \\"get\\",\\n        \\"TLSCipherPolicy\\": \\"tls_cipher_policy_1_0\\",\\n        \\"HealthCheck\\": \\"on\\"\\n      },\\n      \\"TCPListenerConfig\\": {\\n        \\"HealthCheckHttpCode\\": \\"http_2xx,http_3xx\\",\\n        \\"ConnectionDrainTimeout\\": 300,\\n        \\"PersistenceTimeout\\": 0,\\n        \\"HealthCheckInterval\\": 5,\\n        \\"HealthCheckURI\\": \\"/test/index.html\\",\\n        \\"HealthCheckConnectPort\\": 8080,\\n        \\"EstablishedTimeout\\": 500,\\n        \\"HealthCheckType\\": \\"tcp\\",\\n        \\"HealthCheckConnectTimeout\\": 100,\\n        \\"MasterSlaveServerGroupId\\": \\"rsp-0bfucw*****\\",\\n        \\"HealthyThreshold\\": 4,\\n        \\"HealthCheckDomain\\": \\"www.example.com\\",\\n        \\"UnhealthyThreshold\\": 4,\\n        \\"ConnectionDrain\\": \\"off\\",\\n        \\"HealthCheckMethod\\": \\"get\\",\\n        \\"HealthCheck\\": \\"on\\",\\n        \\"ProxyProtocolV2Enabled\\": \\"false\\"\\n      },\\n      \\"UDPListenerConfig\\": {\\n        \\"ConnectionDrainTimeout\\": 300,\\n        \\"HealthCheckInterval\\": 5,\\n        \\"HealthCheckExp\\": \\"ok\\",\\n        \\"HealthCheckConnectPort\\": 8080,\\n        \\"HealthCheckConnectTimeout\\": 100,\\n        \\"MasterSlaveServerGroupId\\": \\"rsp-0bfucw****\\",\\n        \\"HealthyThreshold\\": 4,\\n        \\"UnhealthyThreshold\\": 4,\\n        \\"ConnectionDrain\\": \\"off\\",\\n        \\"HealthCheckReq\\": \\"hello\\",\\n        \\"HealthCheck\\": \\"on\\",\\n        \\"ProxyProtocolV2Enabled\\": \\"false\\"\\n      },\\n      \\"Tags\\": [\\n        {\\n          \\"TagValue\\": \\"TestValue\\",\\n          \\"TagKey\\": \\"TestKey\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeLoadBalancerListenersResponse>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <TotalCount>10</TotalCount>\\n    <MaxResults>50</MaxResults>\\n    <Listeners>\\n        <AclType>white</AclType>\\n        <Status>running</Status>\\n        <VServerGroupId>rsp-cige6j****</VServerGroupId>\\n        <ListenerProtocol>http</ListenerProtocol>\\n        <LoadBalancerId>lb-bp1b6c719dfa****</LoadBalancerId>\\n        <ListenerPort>80</ListenerPort>\\n        <AclId>nacl-a2do9e413e0spzasx****</AclId>\\n        <Scheduler>wrr</Scheduler>\\n        <Bandwidth>-1</Bandwidth>\\n        <Description>test</Description>\\n        <AclStatus>off</AclStatus>\\n        <BackendServerPort>80</BackendServerPort>\\n        <HTTPListenerConfig>\\n            <HealthCheckHttpVersion>HTTP 1.0</HealthCheckHttpVersion>\\n            <XForwardedFor_ClientSrcPort>on</XForwardedFor_ClientSrcPort>\\n            <Cookie>B490B5EBF6F3CD402E515D22BCDA****</Cookie>\\n            <Gzip>on</Gzip>\\n            <HealthCheckConnectPort>8080</HealthCheckConnectPort>\\n            <HealthCheckTimeout>3</HealthCheckTimeout>\\n            <HealthCheckType>tcp</HealthCheckType>\\n            <CookieTimeout>500</CookieTimeout>\\n            <HealthCheckDomain>www.example.com</HealthCheckDomain>\\n            <UnhealthyThreshold>4</UnhealthyThreshold>\\n            <XForwardedFor_SLBID>on</XForwardedFor_SLBID>\\n            <ForwardPort>80</ForwardPort>\\n            <HealthCheckHttpCode>http_2xx,http_3xx</HealthCheckHttpCode>\\n            <ListenerForward>on</ListenerForward>\\n            <XForwardedFor>on</XForwardedFor>\\n            <IdleTimeout>15</IdleTimeout>\\n            <RequestTimeout>60</RequestTimeout>\\n            <HealthCheckInterval>5</HealthCheckInterval>\\n            <XForwardedFor_SLBPORT>on</XForwardedFor_SLBPORT>\\n            <HealthCheckURI>/test/index.html</HealthCheckURI>\\n            <StickySessionType>insert</StickySessionType>\\n            <HealthyThreshold>4</HealthyThreshold>\\n            <XForwardedFor_proto>on</XForwardedFor_proto>\\n            <XForwardedFor_SLBIP>on</XForwardedFor_SLBIP>\\n            <StickySession>on</StickySession>\\n            <HealthCheckMethod>get</HealthCheckMethod>\\n            <HealthCheck>on</HealthCheck>\\n        </HTTPListenerConfig>\\n        <HTTPSListenerConfig>\\n            <XForwardedFor_ClientCertClientVerify>off</XForwardedFor_ClientCertClientVerify>\\n            <HealthCheckHttpVersion>HTTP 1.0</HealthCheckHttpVersion>\\n            <XForwardedFor_ClientSrcPort>off</XForwardedFor_ClientSrcPort>\\n            <Cookie>B490B5EBF6F3CD402E515D22BCDA****</Cookie>\\n            <Gzip>on</Gzip>\\n            <EnableHttp2>off</EnableHttp2>\\n            <CACertificateId>idkp-234-cn-test-0****</CACertificateId>\\n            <HealthCheckConnectPort>8080</HealthCheckConnectPort>\\n            <HealthCheckTimeout>3</HealthCheckTimeout>\\n            <HealthCheckType>tcp</HealthCheckType>\\n            <CookieTimeout>500</CookieTimeout>\\n            <HealthCheckDomain>www.example.com</HealthCheckDomain>\\n            <UnhealthyThreshold>4</UnhealthyThreshold>\\n            <XForwardedFor_SLBID>on</XForwardedFor_SLBID>\\n            <XForwardedFor_ClientCertSubjectDN>off</XForwardedFor_ClientCertSubjectDN>\\n            <HealthCheckHttpCode>http_2xx,http_3xx</HealthCheckHttpCode>\\n            <XForwardedFor_ClientCertFingerprint>off</XForwardedFor_ClientCertFingerprint>\\n            <XForwardedFor>on</XForwardedFor>\\n            <RequestTimeout>60</RequestTimeout>\\n            <IdleTimeout>15</IdleTimeout>\\n            <ServerCertificateId>idkp-123-cn-test-0****</ServerCertificateId>\\n            <HealthCheckInterval>5</HealthCheckInterval>\\n            <XForwardedFor_SLBPORT>off</XForwardedFor_SLBPORT>\\n            <HealthCheckURI>/test/index.html</HealthCheckURI>\\n            <StickySessionType>insert</StickySessionType>\\n            <XForwardedFor_ClientCertIssuerDN>off</XForwardedFor_ClientCertIssuerDN>\\n            <HealthyThreshold>4</HealthyThreshold>\\n            <XForwardedFor_proto>on</XForwardedFor_proto>\\n            <XForwardedFor_SLBIP>on</XForwardedFor_SLBIP>\\n            <StickySession>on</StickySession>\\n            <HealthCheckMethod>get</HealthCheckMethod>\\n            <TLSCipherPolicy>tls_cipher_policy_1_0</TLSCipherPolicy>\\n            <HealthCheck>on</HealthCheck>\\n        </HTTPSListenerConfig>\\n        <TCPListenerConfig>\\n            <HealthCheckHttpCode>http_2xx,http_3xx</HealthCheckHttpCode>\\n            <ConnectionDrainTimeout>300</ConnectionDrainTimeout>\\n            <PersistenceTimeout>0</PersistenceTimeout>\\n            <HealthCheckInterval>5</HealthCheckInterval>\\n            <HealthCheckURI>/test/index.html</HealthCheckURI>\\n            <HealthCheckConnectPort>8080</HealthCheckConnectPort>\\n            <EstablishedTimeout>500</EstablishedTimeout>\\n            <HealthCheckType>tcp</HealthCheckType>\\n            <HealthCheckConnectTimeout>100</HealthCheckConnectTimeout>\\n            <MasterSlaveServerGroupId>rsp-0bfucw*****</MasterSlaveServerGroupId>\\n            <HealthyThreshold>4</HealthyThreshold>\\n            <HealthCheckDomain>www.example.com</HealthCheckDomain>\\n            <UnhealthyThreshold>4</UnhealthyThreshold>\\n            <ConnectionDrain>off</ConnectionDrain>\\n            <HealthCheckMethod>get</HealthCheckMethod>\\n            <HealthCheck>on</HealthCheck>\\n            <ProxyProtocolV2Enabled>false</ProxyProtocolV2Enabled>\\n        </TCPListenerConfig>\\n        <UDPListenerConfig>\\n            <ConnectionDrainTimeout>300</ConnectionDrainTimeout>\\n            <HealthCheckInterval>5</HealthCheckInterval>\\n            <HealthCheckExp>ok</HealthCheckExp>\\n            <HealthCheckConnectPort>8080</HealthCheckConnectPort>\\n            <HealthCheckConnectTimeout>100</HealthCheckConnectTimeout>\\n            <MasterSlaveServerGroupId>rsp-0bfucw****</MasterSlaveServerGroupId>\\n            <HealthyThreshold>4</HealthyThreshold>\\n            <UnhealthyThreshold>4</UnhealthyThreshold>\\n            <ConnectionDrain>off</ConnectionDrain>\\n            <HealthCheckReq>hello</HealthCheckReq>\\n            <HealthCheck>on</HealthCheck>\\n            <ProxyProtocolV2Enabled>false</ProxyProtocolV2Enabled>\\n        </UDPListenerConfig>\\n        <Tags>\\n            <TagValue>TestValue</TagValue>\\n            <TagKey>TestKey</TagKey>\\n        </Tags>\\n    </Listeners>\\n</DescribeLoadBalancerListenersResponse>","errorExample":""}]',
      'title' => '查询负载均衡监听列表',
      'summary' => '查询负载均衡监听列表详情。',
      'description' => '- 您已经创建了传统型负载均衡实例。具体操作，请参见[CreateLoadBalancer](~~27577~~)。
- 您已经为创建的传统型负载均衡实例配置了监听。具体操作，请参见：

    - [CreateLoadBalancerUDPListener](~~27595~~)
    - [CreateLoadBalancerTCPListener](~~27594~~)
    - [CreateLoadBalancerHTTPListener](~~27592~~)  
    - [CreateLoadBalancerHTTPSListener](~~27593~~)',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateLoadBalancerTCPListener' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的地域ID。

您可以从[地域和可用区](~~40654~~)列表或通过调用[DescribeRegions](~~25609~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1b6c719dfa08ex****',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例前端使用的端口。

取值范围：**1**~**65535**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '65535',
            'minimum' => '0',
            'example' => '80',
          ),
        ),
        3 => 
        array (
          'name' => 'BackendServerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例后端使用的端口。

取值范围：**1**~**65535**。

如果不使用服务器组（不指定**vServerGroupId**），则该参数必选。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '65535',
            'minimum' => '1',
            'example' => '80',
          ),
        ),
        4 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'allowEmptyValue' => true,
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '监听的标签键。N的取值范围：**1**~**20**。一旦传入该值，则不允许为空字符串。最多支持64个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '监听的标签值。N的取值范围：**1**~**20**。一旦传入该值，可以为空字符串。最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        5 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监听的带宽峰值，单位：Mbps。取值：

- **-1**：对于按流量计费的公网负载均衡实例，可以将带宽峰值设置为-1，即不限制带宽峰值。

- **1**~**5120**： 对于按带宽计费的公网负载均衡实例，可以设置每个监听的带宽峰值，但所有监听的带宽峰值之和不能超过实例的带宽峰值。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '5120',
            'minimum' => '-1',
            'example' => '-1',
          ),
        ),
        6 => 
        array (
          'name' => 'Scheduler',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调度算法。取值：

- **wrr**（默认值）：权重值越高的后端服务器，被轮询到的次数（概率）也越高。

- **rr**：按照访问顺序依次将外部请求依序分发到后端服务器。

- **sch**：基于源IP地址的一致性hash，相同的源地址会调度到相同的后端服务器。

- **tch**：基于四元组的一致性hash（源IP+目的IP+源端口+目的端口），相同的流会调度到相同的后端服务器。

> 仅性能保障型实例支持**sch**和**tch**一致性hash算法。',
            'type' => 'string',
            'required' => false,
            'example' => 'wrr',
            'default' => 'wrr',
          ),
        ),
        7 => 
        array (
          'name' => 'PersistenceTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话保持的超时时间。单位：秒。

取值范围：**0~3600**。

默认值：**0**，表示关闭会话保持。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '3600',
            'minimum' => '0',
            'example' => '0',
            'default' => '0',
          ),
        ),
        8 => 
        array (
          'name' => 'EstablishedTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接超时时间。单位：秒。

取值范围：**10**~**900**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '900',
            'minimum' => '10',
            'example' => '500',
            'default' => '900',
          ),
        ),
        9 => 
        array (
          'name' => 'HealthyThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**fail**判定为**success**。

取值范围： **2**~**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '1',
            'example' => '4',
            'default' => '3',
          ),
        ),
        10 => 
        array (
          'name' => 'UnhealthyThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**success**判定为**fail**。

取值范围：**2**~**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '1',
            'example' => '4',
            'default' => '3',
          ),
        ),
        11 => 
        array (
          'name' => 'HealthCheckConnectTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每次健康检查响应的最大超时时间。单位：秒。

取值范围：**1**~**300**。

默认值：**5**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '300',
            'minimum' => '1',
            'example' => '100',
            'default' => '5',
          ),
        ),
        12 => 
        array (
          'name' => 'HealthCheckConnectPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查使用的端口。

取值范围：**1**~**65535**。

不设置此参数时，表示使用后端服务端口（**BackendServerPort**）。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '65535',
            'minimum' => '1',
            'example' => '80',
          ),
        ),
        13 => 
        array (
          'name' => 'healthCheckInterval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查的时间间隔。单位：秒。

取值范围：**1**~**50**。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '3',
          ),
        ),
        14 => 
        array (
          'name' => 'HealthCheckDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于健康检查的域名。取值：

* **$_ip**： 后端服务器的私网IP。当指定了IP或该参数未指定时，负载均衡会使用各后端服务器的私网IP当做健康检查使用的域名。

* **domain**：域名长度为1~80，只能包含字母、数字、半角句号（.）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => '172.XX.XX.6',
          ),
        ),
        15 => 
        array (
          'name' => 'HealthCheckURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于健康检查的URI。长度限制为1~80，只能使用字母、数字、短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、井号（#）和and（&）这些字符。 URI不能只为正斜线（/），但必须以正斜线（/）开头。

当TCP监听需要使用HTTP健康检查时可配置此参数，如不配置则按TCP健康检查。',
            'type' => 'string',
            'required' => false,
            'example' => '/test/index.html',
          ),
        ),
        16 => 
        array (
          'name' => 'HealthCheckHttpCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查正常的HTTP状态码，多个状态码用半角逗号（,）分割。取值：

- **http_2xx**（默认值）
- **http_3xx**
- **http_4xx**
- **http_5xx**',
            'type' => 'string',
            'required' => false,
            'example' => 'http_2xx,http_3xx',
          ),
        ),
        17 => 
        array (
          'name' => 'HealthCheckType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查类型。取值：

- **tcp**（默认值）
- **http**',
            'type' => 'string',
            'required' => false,
            'example' => 'tcp',
          ),
        ),
        18 => 
        array (
          'name' => 'VServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟服务器组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rsp-cige6j****',
          ),
        ),
        19 => 
        array (
          'name' => 'MasterSlaveServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主备服务器组ID。

> 虚拟服务器组ID和主备服务器组ID只能选择一个。',
            'type' => 'string',
            'required' => false,
            'example' => 'rsp-0bfucw****',
          ),
        ),
        20 => 
        array (
          'name' => 'AclId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监听绑定的访问策略组ID。

> 当**AclStatus**参数的值为**on**时，该参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'acl-uf60jwfiv6******',
          ),
        ),
        21 => 
        array (
          'name' => 'AclType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制类型：

* **white**： 仅转发来自所选访问控制策略组中设置的IP地址或地址段的请求，白名单适用于只允许特定IP访问的场景。
设置白名单存在一定业务风险。
 
 一旦设置白名单，就只有白名单中的IP可以访问负载均衡监听。如果开启了白名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。

* **black**： 来自所选访问控制策略组中设置的IP地址或地址段的所有请求都不会转发，黑名单适用于只限制某些特定IP访问的场景。

 如果开启了黑名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。

> 当**AclStatus**参数的值为**on**时，该参数有效。',
            'type' => 'string',
            'required' => false,
            'example' => 'black',
          ),
        ),
        22 => 
        array (
          'name' => 'AclStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启访问控制功能。取值：

- **on**：开启。
- **off**（默认值）：不开启。',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
          ),
        ),
        23 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义监听名称。

长度限制为1~256个字符，支持中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）。',
            'type' => 'string',
            'required' => false,
            'example' => 'tcp_80',
          ),
        ),
        24 => 
        array (
          'name' => 'ConnectionDrain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启连接优雅中断。取值：

- **on**：开启。

- **off**：不开启。',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
          ),
        ),
        25 => 
        array (
          'name' => 'ConnectionDrainTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置连接优雅中断超时时间。单位：秒。

取值范围：**10**~**900**。

> 当**ConnectionDrain**取值为**on**时，该选项必选。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '300',
          ),
        ),
        26 => 
        array (
          'name' => 'ProxyProtocolV2Enabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否支持通过Proxy Protocol协议携带客户端源地址到后端服务器。取值：

- **true**：是。
- **false**（默认值）：否。
',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        27 => 
        array (
          'name' => 'HealthCheckSwitch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启健康检查。取值：

- **on**（默认值）：开启。
- **off**：不开启。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
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
            'errorCode' => 'InvalidParameterValue.SpecNotSupport',
            'errorMessage' => 'The loadBalancer of shared spec does not support the parameter value, %s.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationNotSupport.Acl',
            'errorMessage' => 'The cloud box instance does not support acl.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameterValue.RegionNotSupport',
            'errorMessage' => 'The region does not support the parameter value, %s.',
          ),
          3 => 
          array (
            'errorCode' => 'Abs.VServerGroupIdAndMasterSlaveServerGroupId.MissMatch',
            'errorMessage' => 'The parameters VServerGroupId or MasterSlaveServerGroupId miss match.',
          ),
          4 => 
          array (
            'errorCode' => 'IpVersionConflict',
            'errorMessage' => 'The ip version of this LoadBalancer and the Acl is conflict.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameterValue.ZoneNotSupport',
            'errorMessage' => 'The zone does not support the parameter value, %s.',
          ),
          6 => 
          array (
            'errorCode' => 'ListenerProcessing',
            'errorMessage' => 'A previous configuration of the listener is pending, please try again later.',
          ),
          7 => 
          array (
            'errorCode' => 'AclNotExist',
            'errorMessage' => 'Acl does not exist.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidParameter.ListenerPortConflict',
            'errorMessage' => 'There is conflict listener port exists.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidParameter.ZoneNotSupport',
            'errorMessage' => 'The zone does not support the parameter %s.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidParam.VServerGroupId',
            'errorMessage' => 'The specified VServerGroupId is invalid.',
          ),
          11 => 
          array (
            'errorCode' => 'MissingParam.HealthCheckConnectPort',
            'errorMessage' => 'The parameter HealthCheckConnectPort is required.',
          ),
          12 => 
          array (
            'errorCode' => 'InvalidParam.ListenerPort',
            'errorMessage' => 'The specified ListenerPort is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'InvalidParam.StartPort',
            'errorMessage' => 'The specified StartPort is invalid.',
          ),
          14 => 
          array (
            'errorCode' => 'InvalidParamSize.PortRange',
            'errorMessage' => 'The size of param PortRange is invalid.',
          ),
          15 => 
          array (
            'errorCode' => 'InvalidParam.EndPort',
            'errorMessage' => 'The specified EndPort is invalid.',
          ),
          16 => 
          array (
            'errorCode' => 'QuotaLimitExceeds.AclAttachedToListener',
            'errorMessage' => '%s.',
          ),
          17 => 
          array (
            'errorCode' => 'QuotaLimitExceeds.TotalAclEntry',
            'errorMessage' => '%s.',
          ),
          18 => 
          array (
            'errorCode' => 'AclListenerOverLimit',
            'errorMessage' => '%s.',
          ),
          19 => 
          array (
            'errorCode' => 'Duplicated.AclEntry',
            'errorMessage' => '%s.',
          ),
          20 => 
          array (
            'errorCode' => 'OperationUnsupported.SetAccessControl',
            'errorMessage' => 'The singleTunnel/anyTunnel loadbalancer does not support config AccessControlList.',
          ),
          21 => 
          array (
            'errorCode' => 'InvalidParam.PortRange',
            'errorMessage' => 'The specified PortRange is invalid.',
          ),
          22 => 
          array (
            'errorCode' => 'InvalidParameter.RegionNotSupport',
            'errorMessage' => 'The region does not support the parameter: %s.',
          ),
          23 => 
          array (
            'errorCode' => 'LbNotSupportTcpssl',
            'errorMessage' => 'You cannot create a TCP SSL type listener for the specified load balancer.',
          ),
          24 => 
          array (
            'errorCode' => 'LbSupportTcpsslOnly',
            'errorMessage' => 'The specified load balancer supports TCP SSL type listener only.',
          ),
          25 => 
          array (
            'errorCode' => 'ListenerNotSupportRule',
            'errorMessage' => 'You cannot create a rule for the specified listener.',
          ),
          26 => 
          array (
            'errorCode' => 'ListenerPortConflict',
            'errorMessage' => 'The specified ListenerPort is conflict with other listener.',
          ),
          27 => 
          array (
            'errorCode' => 'ResourceNotFound.VServerGroup',
            'errorMessage' => '%s.',
          ),
          28 => 
          array (
            'errorCode' => 'IllegalParam.FailoverThreshold',
            'errorMessage' => 'The parameter FailoverThreshold is illegal.',
          ),
          29 => 
          array (
            'errorCode' => 'IllegalParam.FailoverStrategy',
            'errorMessage' => 'The parameter FailoverStrategy is illegal.',
          ),
          30 => 
          array (
            'errorCode' => 'MasterSlaveServerConflict',
            'errorMessage' => 'The servers are conflict for MasterSlaveGroup.',
          ),
          31 => 
          array (
            'errorCode' => 'OperationDenied.HealthCheckClosedForMasterSlaveMode',
            'errorMessage' => 'The operation is denied because of HealthCheckClosedForMasterSlaveMode.',
          ),
          32 => 
          array (
            'errorCode' => 'IllegalParam.HealthCheck',
            'errorMessage' => 'The param of HelathCheck is illegal.',
          ),
          33 => 
          array (
            'errorCode' => 'Mismatch.SlbSpecTypeAndListenerProtocol',
            'errorMessage' => 'The SlbSpecType and ListenerProtocol are mismatched.',
          ),
          34 => 
          array (
            'errorCode' => 'OperationDenied.FullNatModeNotAllowed',
            'errorMessage' => 'The operation is not allowed because of FullNatModeNotAllowed.',
          ),
          35 => 
          array (
            'errorCode' => 'OperationDenied.OnlyIpv4SlbSupport',
            'errorMessage' => 'The operation is not allowed because of OnlyIpv4SlbSupport.',
          ),
          36 => 
          array (
            'errorCode' => 'SpecNotSupportParameter',
            'errorMessage' => 'The instance with share spec does not support FullNatEnabled parameter.',
          ),
          37 => 
          array (
            'errorCode' => 'InvalidParam.TagValue	',
            'errorMessage' => '%s.',
          ),
          38 => 
          array (
            'errorCode' => 'InvalidParam.TagKey',
            'errorMessage' => '%s.',
          ),
          39 => 
          array (
            'errorCode' => 'SizeLimitExceeded.Tag',
            'errorMessage' => '%s.',
          ),
          40 => 
          array (
            'errorCode' => 'MissingParam.TagKey',
            'errorMessage' => 'The param MissingParam.TagKey is missing.',
          ),
          41 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The BackendServerPort or VServerGroupId is required at lease one.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","type":"json"}]',
      'title' => '创建TCP监听',
      'summary' => '创建TCP监听。',
      'description' => '> 新建的监听的状态为**stopped**。创建完成后，调用[StartLoadBalancerListener](~~27597~~)接口启动监听来转发流量。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetLoadBalancerTCPListenerAttribute' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的地域ID。

您可以从[地域和可用区](~~40654~~)列表或通过调用[DescribeRegions](~~25609~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1ygod3yctvg1y****',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例前端使用的端口。

取值范围：**1**~**65535**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '65535',
            'minimum' => '0',
            'example' => '80',
          ),
        ),
        3 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监听的带宽峰值。单位：Mbps。取值：**-1**或**1**~**5120**。

- **-1**：对于按流量计费的公网负载均衡实例，可以将带宽峰值设置为**-1**，即不限制带宽峰值。
- **1**~**5120**：对于按带宽计费的公网负载均衡实例，可以设置每个监听的带宽峰值，但所有监听的带宽峰值之和不能超过实例的带宽峰值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '5120',
            'minimum' => '-1',
            'example' => '43',
          ),
        ),
        4 => 
        array (
          'name' => 'Scheduler',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调度算法。取值：

- **wrr**：权重值越高的后端服务器，被轮询到的概率也越高。
- **rr**：按照访问顺序依次将外部请求依序分发到后端服务器。
- **sch**：基于源IP地址的一致性哈希，相同的源地址会调度到相同的后端服务器。
- **tch**：基于四元组的一致性哈希（源IP、目的IP、源端口和目的端口），相同的流会调度到相同的后端服务器。

> - 仅性能保障型实例支持**sch**和**tch**一致性哈希算法。
> - CLB不支持**wrr**和**rr**算法变更为一致性哈希算法，也不支持一致性哈希算法互转。',
            'type' => 'string',
            'required' => false,
            'example' => 'wrr',
          ),
        ),
        5 => 
        array (
          'name' => 'PersistenceTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会话保持的超时时间。单位：秒，取值范围：**0**~**3600**。

默认值：**0**，表示关闭会话保持。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '3600',
            'minimum' => '0',
            'example' => '0',
          ),
        ),
        6 => 
        array (
          'name' => 'EstablishedTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接超时时间。单位：秒。取值范围：**10**~**900**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '900',
            'minimum' => '10',
            'example' => '500',
          ),
        ),
        7 => 
        array (
          'name' => 'HealthyThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**失败**判定为**成功**。

取值范围：**2**~**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '1',
            'example' => '4',
          ),
        ),
        8 => 
        array (
          'name' => 'UnhealthyThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**成功**判定为**失败**。

取值范围：**2**~**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '1',
            'example' => '4',
          ),
        ),
        9 => 
        array (
          'name' => 'HealthCheckConnectTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收来自运行状况检查的响应需要等待的时间。单位：秒，取值范围：**1**~**300**。

如果后端ECS在指定的时间内没有正确响应，则判定为健康检查失败。

> 如果该值小于**HealthCheckInterval**的值，则该值无效，超时时间为**HealthCheckInterval**的值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '300',
            'minimum' => '1',
            'example' => '100',
          ),
        ),
        10 => 
        array (
          'name' => 'HealthCheckConnectPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查使用的端口。取值范围：**1**~**65535**。

不设置此参数时，表示使用**BackendServerPort**（后端服务端口）。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '65535',
            'minimum' => '1',
            'example' => '8080',
          ),
        ),
        11 => 
        array (
          'name' => 'HealthCheckInterval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查的时间间隔。单位：秒。

取值范围：**1**~**50**。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '5',
          ),
        ),
        12 => 
        array (
          'name' => 'HealthCheckDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于健康检查的域名。当TCP监听需要使用HTTP健康检查时可配置此参数，如不配置则按TCP健康检查。

* **$_ip**：后端服务器的私网IP。当指定了IP或该参数未指定时，负载均衡会使用后端服务器的私网IP当做健康检查使用的域名。
* **domain**：域名，长度为1~80个字符，支持字母、数字、半角句号（.）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.XX.XX',
          ),
        ),
        13 => 
        array (
          'name' => 'HealthCheckURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于健康检查的URI。长度为1~80个字符，支持字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）这些字符。URI不能只为正斜线（/），但必须以正斜线（/）开头。

当TCP监听需要使用HTTP健康检查时，可配置此参数。

如不配置，则使用TCP健康检查。',
            'type' => 'string',
            'required' => false,
            'example' => '/test/index.html',
          ),
        ),
        14 => 
        array (
          'name' => 'HealthCheckHttpCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查正常的HTTP状态码，多个状态码用半角逗号（,）分割。

取值：**http_2xx**、**http_3xx**、**http_4xx**或**http_5xx**。',
            'type' => 'string',
            'required' => false,
            'example' => 'http_2xx',
          ),
        ),
        15 => 
        array (
          'name' => 'HealthCheckType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查类型。取值：**tcp**或**http**。
',
            'type' => 'string',
            'required' => false,
            'example' => 'tcp',
          ),
        ),
        16 => 
        array (
          'name' => 'SynProxy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启负载均衡的攻击防护功能SynProxy。取值：

- **enable**：开启。
- **disable**：不开启。

建议一般情况下不要调整这个参数，由负载均衡控制。',
            'type' => 'string',
            'required' => false,
            'example' => 'enable',
          ),
        ),
        17 => 
        array (
          'name' => 'VServerGroup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用虚拟服务器组。取值：

- **on**：使用。
- **off**：不使用。

> **VserverGroup**和**MasterSlaveServerGroup**只允许一个值为**on**。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
          ),
        ),
        18 => 
        array (
          'name' => 'VServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟服务器组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rsp-cige6j5****',
          ),
        ),
        19 => 
        array (
          'name' => 'MasterSlaveServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主备服务器组ID。

>虚拟服务器组ID和主备服务器组ID只能选择一个。',
            'type' => 'string',
            'required' => false,
            'example' => 'rsp-cige****',
          ),
        ),
        20 => 
        array (
          'name' => 'MasterSlaveServerGroup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用主备服务器组。取值：

- **on**：使用。
- **off**：不使用。

**VserverGroup**和**MasterSlaveServerGroup**只允许一个值为**on**。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
          ),
        ),
        21 => 
        array (
          'name' => 'AclId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监听绑定的访问策略组ID。

当**AclStatus**参数值为**on**时，该参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => '12333',
          ),
        ),
        22 => 
        array (
          'name' => 'AclType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制类型。取值：

- **white**：仅转发来自所选访问控制策略组中设置的IP地址或地址段的请求，白名单适用于只允许特定IP访问的场景。设置白名单存在一定业务风险。一旦设置白名单，就只有白名单中的IP可以访问负载均衡监听。
    
   如果开启了白名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。

- **black**：不会转发来自所选访问控制策略组中设置的IP地址或地址段，黑名单适用于只限制某些特定IP访问的场景。 

  如果开启了黑名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。

> 当**AclStatus**参数的值为**on**时，该参数有效。',
            'type' => 'string',
            'required' => false,
            'example' => 'white',
          ),
        ),
        23 => 
        array (
          'name' => 'AclStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启访问控制功能。取值：

- **on**：开启访问控制。
- **off**：关闭访问控制。',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
          ),
        ),
        24 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义监听名称。

长度限制为1~256个字符，支持中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）。',
            'type' => 'string',
            'required' => false,
            'example' => 'tcp_80',
          ),
        ),
        25 => 
        array (
          'name' => 'ConnectionDrain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启连接优雅中断。取值：

- **on**：开启。
- **off**：不开启。',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
          ),
        ),
        26 => 
        array (
          'name' => 'ConnectionDrainTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置连接优雅中断超时时间。当**ConnectionDrain**取值为**on**时，该选项必选。单位：秒。

取值范围：**10**~**900**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '300',
          ),
        ),
        27 => 
        array (
          'name' => 'ProxyProtocolV2Enabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否支持通过Proxy Protocol协议携带客户端源地址到后端服务器。取值：

- **true**：是。
- **false**：否。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        28 => 
        array (
          'name' => 'HealthCheckSwitch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启健康检查。取值：

- **on**：开启。
- **off**：不开启。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
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
            'errorCode' => 'InvalidParameterValue.SpecNotSupport',
            'errorMessage' => 'The loadBalancer of shared spec does not support the parameter value, %s.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationNotSupport.Acl',
            'errorMessage' => 'The cloud box instance does not support acl.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameterValue.RegionNotSupport',
            'errorMessage' => 'The region does not support the parameter value, %s.',
          ),
          3 => 
          array (
            'errorCode' => 'IpVersionConflict',
            'errorMessage' => 'The ip version of this LoadBalancer and the Acl is conflict.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameterValue.ZoneNotSupport',
            'errorMessage' => 'The zone does not support the parameter value, %s.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.ZoneNotSupport',
            'errorMessage' => 'The zone does not support the parameter %s.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationFailed.ServerGroupInUse',
            'errorMessage' => 'The VServerGroup or MasterSlaveServerGroup can not be close for this listener.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidParam.VServerGroupId',
            'errorMessage' => 'The specified VServerGroupId is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'MissingParam.HealthCheckConnectPort',
            'errorMessage' => 'The parameter HealthCheckConnectPort is required.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidParam.ListenerPort',
            'errorMessage' => 'The specified ListenerPort is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidParam.StartPort',
            'errorMessage' => 'The specified StartPort is invalid.',
          ),
          11 => 
          array (
            'errorCode' => 'InvalidParamSize.PortRange',
            'errorMessage' => 'The size of param PortRange is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'InvalidParam.EndPort',
            'errorMessage' => 'The specified EndPort is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'InvalidParam.PortRange',
            'errorMessage' => 'The specified PortRange is invalid.',
          ),
          14 => 
          array (
            'errorCode' => 'QuotaLimitExceeds.AclAttachedToListener',
            'errorMessage' => '%s.',
          ),
          15 => 
          array (
            'errorCode' => 'QuotaLimitExceeds.TotalAclEntry',
            'errorMessage' => '%s.',
          ),
          16 => 
          array (
            'errorCode' => 'AclListenerOverLimit',
            'errorMessage' => '%s.',
          ),
          17 => 
          array (
            'errorCode' => 'Duplicated.AclEntry',
            'errorMessage' => '%s.',
          ),
          18 => 
          array (
            'errorCode' => 'ResourceNotFound.VServerGroup',
            'errorMessage' => '%s.',
          ),
          19 => 
          array (
            'errorCode' => 'IllegalParam.FailoverStrategy',
            'errorMessage' => 'The parameter FailoverStrategy is illegal.',
          ),
          20 => 
          array (
            'errorCode' => 'IllegalParam.FailoverThreshold',
            'errorMessage' => 'The parameter FailoverThreshold is illegal.',
          ),
          21 => 
          array (
            'errorCode' => 'MasterSlaveServerConflict',
            'errorMessage' => 'The servers are conflict for MasterSlaveGroup.',
          ),
          22 => 
          array (
            'errorCode' => 'MissingParam.VServerGroupId',
            'errorMessage' => 'The parameter VServerGroupId is missing.',
          ),
          23 => 
          array (
            'errorCode' => 'OperationDenied.HealthCheckClosedForMasterSlaveMode',
            'errorMessage' => 'The operation is denied because of HealthCheckClosedForMasterSlaveMode.',
          ),
          24 => 
          array (
            'errorCode' => 'InvalidParam.HealthCheck',
            'errorMessage' => 'The param of HealthCheck is illegal.',
          ),
          25 => 
          array (
            'errorCode' => 'OperationDenied.MasterSlaveGroupLogEnabled',
            'errorMessage' => 'The operation is denied because of MasterSlaveGroupLogEnabled.',
          ),
          26 => 
          array (
            'errorCode' => 'OperationDenied.NotSupportAcl',
            'errorMessage' => 'The operation is denied because The single Tunnel or any Tunnel loadbalancer does not support config AccessControlList.',
          ),
          27 => 
          array (
            'errorCode' => 'OperationDenied.FullNatModeNotAllowed',
            'errorMessage' => 'The operation is not allowed because of FullNatModeNotAllowed.',
          ),
          28 => 
          array (
            'errorCode' => 'OperationDenied.OnlyIpv4SlbSupport',
            'errorMessage' => 'The operation is not allowed because of OnlyIpv4SlbSupport.',
          ),
          29 => 
          array (
            'errorCode' => 'SpecNotSupportParameter',
            'errorMessage' => 'The instance with share spec does not support FullNatEnabled parameter.',
          ),
          30 => 
          array (
            'errorCode' => 'Abs.VServerGroupIdAndMasterSlaveServerGroupId.MissMatch',
            'errorMessage' => 'Virtual service group ID or master slave server group ID is missing. Please check the input parameters.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<SetLoadBalancerTCPListenerAttributeResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</SetLoadBalancerTCPListenerAttributeResponse>","errorExample":""}]',
      'title' => '修改TCP监听的配置',
      'summary' => '修改TCP监听的配置。',
      'description' => '- 您已经创建传统型负载均衡。具体操作，请参见[CreateLoadBalancer](~~27577~~)。

- 您已经创建TCP监听。具体操作，请参见[CreateLoadBalancerTCPListener](~~27594~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeLoadBalancerTCPListenerAttribute' => 
    array (
      'summary' => '查询TCP监听配置。',
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
        'abilityTreeCode' => '88587',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslb23BWZ4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的地域ID。

您可以从[地域和可用区](~~40654~~)列表或通过调用[DescribeRegions](~~25609~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1ygod3yctvg1y****',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例前端使用的端口。

取值：**1**~**65535**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '65535',
            'minimum' => '0',
            'example' => '80',
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
              'VServerGroupId' => 
              array (
                'description' => '绑定的服务器组ID。',
                'type' => 'string',
                'example' => 'rsp-cige6******8',
              ),
              'Status' => 
              array (
                'description' => '当前监听的状态。取值：

* **running**：监听正常运行中。

* **stopped**：监听停止。',
                'type' => 'string',
                'example' => 'stopped',
              ),
              'AclType' => 
              array (
                'description' => '访问控制类型：

* **white**： 仅转发来自所选访问控制策略组中设置的IP地址或地址段的请求，白名单适用于应用只允许特定IP访问的场景。
设置白名单存在一定业务风险。一旦设置白名单，就只有白名单中的IP可以访问负载均衡监听。

 如果开启了白名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。

* **black**： 来自所选访问控制策略组中设置的IP地址或地址段的所有请求都不会转发，黑名单适用于应用只限制某些特定IP访问的场景。

 如果开启了黑名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。

> 当**AclStatus**参数的值为**on**时，该参数必选。',
                'type' => 'string',
                'example' => 'white',
              ),
              'ConnectionDrainTimeout' => 
              array (
                'description' => '设置连接优雅中断超时时间。当**ConnectionDrain**取值为**on**时，返回该值。

取值范围：10~900秒。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '300',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF34B540710',
              ),
              'HealthCheckConnectPort' => 
              array (
                'description' => '健康检查使用的端口。取值：**1**~**65535**。不设置此参数时，表示使用后端服务端口（BackendServerPort）。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '8080',
              ),
              'Description' => 
              array (
                'description' => '自定义监听名称。',
                'type' => 'string',
                'example' => 'TCP_80',
              ),
              'Bandwidth' => 
              array (
                'description' => '监听的带宽峰值，单位Mbps。取值：

- **-1**：对于按流量计费的公网负载均衡实例，可以将带宽峰值设置为-1，即不限制带宽峰值。

- **1**~**5120**：对于按带宽计费的公网负载均衡实例，可以设置每个监听的带宽峰值，但所有监听的带宽峰值之和不能超过实例的带宽峰值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '-1',
              ),
              'HealthCheckType' => 
              array (
                'description' => 'TCP协议监听的健康检查方式。

取值：**tcp**或**http**。',
                'type' => 'string',
                'example' => 'tcp',
              ),
              'MasterSlaveServerGroupId' => 
              array (
                'description' => '绑定的主备服务器组ID。
	 ',
                'type' => 'string',
                'example' => 'rsp-0bfucw****',
              ),
              'BackendServerPort' => 
              array (
                'description' => '传统型负载均衡实例后端使用的端口。

> 当后端服务器组为虚拟服务器组时，该参数不显示。
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '443',
              ),
              'AclStatus' => 
              array (
                'description' => '是否开启访问控制功能。取值：

- **on**：开启。
- **off**：不开启。',
                'type' => 'string',
                'example' => 'off',
              ),
              'HealthCheckDomain' => 
              array (
                'description' => '用于健康检查的域名。取值：

- **$_ip**：后端服务器的私网IP。当指定了IP或该参数未指定时，负载均衡会使用各后端服务器的私网IP当做健康检查使用的域名。

- **domain**：域名长度为1~80个字符，只能包含字母、数字、半角句号（.）和短划线（-）。',
                'type' => 'string',
                'example' => 'www.domain.com',
              ),
              'UnhealthyThreshold' => 
              array (
                'description' => '不健康检查阈值。健康检查连续失败多少次后，将后端服务器的健康检查状态由**成功**判定为**失败**。取值：**2**~**10**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
              ),
              'HealthCheckHttpCode' => 
              array (
                'description' => '健康检查正常的HTTP状态码。',
                'type' => 'string',
                'example' => 'http_2xx',
              ),
              'ProxyProtocolV2Enabled' => 
              array (
                'description' => '是否支持通过Proxy Protocol协议携带客户端源地址到后端服务器。取值：

- **true**：是。
- **false**：否。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'PersistenceTimeout' => 
              array (
                'description' => '会话保持的超时时间。

取值：**0**~**3600**秒。默认值：**0**，表示关闭会话保持。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ListenerPort' => 
              array (
                'description' => '传统型负载均衡实例前端使用的端口。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '110',
              ),
              'HealthCheckInterval' => 
              array (
                'description' => '健康检查的时间间隔，取值：**1**~**50**秒。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'HealthCheckURI' => 
              array (
                'description' => '用于健康检查的URL。长度限制为1~80个字符，只能使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&amp;）这些字符。 URL不能只为正斜线（/），但必须以正斜线（/）开头。',
                'type' => 'string',
                'example' => '/test/index.html',
              ),
              'AclId' => 
              array (
                'description' => '监听绑定的访问策略组ID。

当**AclStatus**参数的值为**on**时，该参数必选。',
                'type' => 'string',
                'example' => 'acl-uf60jwfi******',
              ),
              'SynProxy' => 
              array (
                'description' => '是否开启负载均衡的攻击防护功能SynProxy。

建议用户一般情况下不要调整这个参数，由负载均衡控制。

* **enable**：开启。

* **disable**：关闭。',
                'type' => 'string',
                'example' => 'disable',
              ),
              'Scheduler' => 
              array (
                'description' => '调度算法。取值：

- **wrr**（默认值）：权重值越高的后端服务器，被轮询到的次数（概率）也越高。

-  **rr**：按照访问顺序依次将外部请求依序分发到后端服务器。


- **sch**：基于源IP地址的一致性hash，相同的源地址会调度到相同的后端服务器。

- **tch**：基于四元组的一致性hash（源IP+目的IP+源端口+目的端口），相同的流会调度到相同的后端服务器。

> 仅性能保障型实例支持**sch**和**tch**一致性hash算法。',
                'type' => 'string',
                'example' => 'wrr',
              ),
              'EstablishedTimeout' => 
              array (
                'description' => '连接超时时间。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '500',
              ),
              'HealthCheckConnectTimeout' => 
              array (
                'description' => '超时时间。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'HealthyThreshold' => 
              array (
                'description' => '健康检查阈值。健康检查连续成功多少次后，将后端服务器的健康检查状态由**失败**判定为**成功**。取值：**2**~**10**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
              ),
              'ConnectionDrain' => 
              array (
                'description' => '是否开启连接优雅中断。当**ConnectionDrain**取值为**on**时，返回该值。取值：

- **on**：开启。

- **off**：未开启。',
                'type' => 'string',
                'example' => 'off',
              ),
              'HealthCheckMethod' => 
              array (
                'description' => '健康检查方式。',
                'type' => 'string',
                'example' => 'tcp',
              ),
              'HealthCheck' => 
              array (
                'description' => '是否开启健康检查。取值：

- **on**：开启。
- **off**：关闭。',
                'type' => 'string',
                'example' => 'on',
              ),
              'AclIds' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AclId' => 
                  array (
                    'description' => '访问控制策略组ID列表。',
                    'type' => 'array',
                  ),
                ),
              ),
              'PortRanges' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                ),
              ),
              'LoadBalancerId' => 
              array (
                'description' => '传统型负载均衡实例ID。',
                'type' => 'string',
                'example' => 'lb-bp1ygod3yctvg1y****',
              ),
              'Tags' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Tag' => 
                  array (
                    'description' => '标签列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '标签列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TagKey' => 
                        array (
                          'description' => '监听的标签键。N的取值范围：**1**~**20**。一旦传入该值，则不允许为空字符串。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                          'type' => 'string',
                          'example' => 'TestKey',
                        ),
                        'TagValue' => 
                        array (
                          'description' => '监听的标签值。N的取值范围：**1**~**20**。一旦传入该值，可以为空字符串。最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                          'type' => 'string',
                          'example' => 'TestValue',
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
            'errorCode' => 'LocationServiceTimeout',
            'errorMessage' => 'Location service connection timeout. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"VServerGroupId\\": \\"rsp-cige6******8\\",\\n  \\"Status\\": \\"stopped\\",\\n  \\"AclType\\": \\"white\\",\\n  \\"ConnectionDrainTimeout\\": 300,\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\",\\n  \\"HealthCheckConnectPort\\": 8080,\\n  \\"Description\\": \\"TCP_80\\",\\n  \\"Bandwidth\\": -1,\\n  \\"HealthCheckType\\": \\"tcp\\",\\n  \\"MasterSlaveServerGroupId\\": \\"rsp-0bfucw****\\",\\n  \\"BackendServerPort\\": 443,\\n  \\"AclStatus\\": \\"off\\",\\n  \\"HealthCheckDomain\\": \\"www.domain.com\\",\\n  \\"UnhealthyThreshold\\": 4,\\n  \\"HealthCheckHttpCode\\": \\"http_2xx\\",\\n  \\"ProxyProtocolV2Enabled\\": false,\\n  \\"PersistenceTimeout\\": 0,\\n  \\"ListenerPort\\": 110,\\n  \\"HealthCheckInterval\\": 5,\\n  \\"HealthCheckURI\\": \\"/test/index.html\\",\\n  \\"AclId\\": \\"acl-uf60jwfi******\\",\\n  \\"SynProxy\\": \\"disable\\",\\n  \\"Scheduler\\": \\"wrr\\",\\n  \\"EstablishedTimeout\\": 500,\\n  \\"HealthCheckConnectTimeout\\": 100,\\n  \\"HealthyThreshold\\": 4,\\n  \\"ConnectionDrain\\": \\"off\\",\\n  \\"HealthCheckMethod\\": \\"tcp\\",\\n  \\"HealthCheck\\": \\"on\\",\\n  \\"AclIds\\": {\\n    \\"AclId\\": [\\n      \\"\\"\\n    ]\\n  },\\n  \\"LoadBalancerId\\": \\"lb-bp1ygod3yctvg1y****\\",\\n  \\"Tags\\": {\\n    \\"Tag\\": [\\n      {\\n        \\"TagKey\\": \\"TestKey\\",\\n        \\"TagValue\\": \\"TestValue\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeLoadBalancerTCPListenerAttributeResponse>\\n    <VServerGroupId>rsp-cige6******8</VServerGroupId>\\n    <Status>stopped</Status>\\n    <AclType>white</AclType>\\n    <ConnectionDrainTimeout>300</ConnectionDrainTimeout>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <HealthCheckConnectPort>8080</HealthCheckConnectPort>\\n    <Description>TCP_80</Description>\\n    <Bandwidth>-1</Bandwidth>\\n    <HealthCheckType>tcp</HealthCheckType>\\n    <MasterSlaveServerGroupId>rsp-0bfucw****</MasterSlaveServerGroupId>\\n    <BackendServerPort>443</BackendServerPort>\\n    <AclStatus>off</AclStatus>\\n    <HealthCheckDomain>www.domain.com</HealthCheckDomain>\\n    <UnhealthyThreshold>4</UnhealthyThreshold>\\n    <HealthCheckHttpCode>http_2xx</HealthCheckHttpCode>\\n    <ProxyProtocolV2Enabled>false</ProxyProtocolV2Enabled>\\n    <PersistenceTimeout>0</PersistenceTimeout>\\n    <ListenerPort>110</ListenerPort>\\n    <HealthCheckInterval>5</HealthCheckInterval>\\n    <HealthCheckURI>/test/index.html</HealthCheckURI>\\n    <AclId>12</AclId>\\n    <SynProxy>enable</SynProxy>\\n    <Scheduler>wrr</Scheduler>\\n    <EstablishedTimeout>500</EstablishedTimeout>\\n    <HealthCheckConnectTimeout>100</HealthCheckConnectTimeout>\\n    <HealthyThreshold>4</HealthyThreshold>\\n    <ConnectionDrain>off</ConnectionDrain>\\n    <HealthCheckMethod>tcp</HealthCheckMethod>\\n    <HealthCheck>on</HealthCheck>\\n    <LoadBalancerId>lb-bp1ygod3yctvg1y****</LoadBalancerId>\\n    <Tags>\\n        <TagKey>TestKey</TagKey>\\n        <TagValue>TestValue</TagValue>\\n    </Tags>\\n</DescribeLoadBalancerTCPListenerAttributeResponse>","errorExample":""}]',
      'title' => '查询TCP监听配置',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateLoadBalancerUDPListener' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'allowEmptyValue' => true,
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '监听的标签集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '监听的标签集合。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '监听的标签键。N的取值范围：**1**~**20**。一旦传入该值，则不允许为空字符串。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '监听的标签值。N的取值范围：**1**~**20**。一旦传入该值，可以为空字符串。最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        2 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1ygod3yctvg1y7****',
          ),
        ),
        3 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例前端使用的端口。

取值范围：**1**~**65535**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '65535',
            'minimum' => '0',
            'example' => '80',
          ),
        ),
        4 => 
        array (
          'name' => 'BackendServerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例后端使用的端口。

取值范围：**1**~**65535**。

如果不使用虚拟服务器组（不指定**VServerGroupId**），则该参数必选。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '65535',
            'minimum' => '1',
            'example' => '80',
          ),
        ),
        5 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监听的带宽峰值。单位：Mbps。取值：


<props="china">- **-1**：对于按流量计费的公网负载均衡实例，可以将带宽峰值设置为**-1**，即不限制带宽峰值。</props>
<props="china">- **1**~**5120**：对于按带宽计费的公网负载均衡实例，可以设置每个监听的带宽峰值，但所有监听的带宽峰值之和不能超过实例的带宽峰值。</props>

<props="intl">**-1**：对于按流量计费的公网负载均衡实例，可以将带宽峰值设置为**-1**，即不限制带宽峰值。</props>
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '5120',
            'minimum' => '-1',
            'example' => '-1',
          ),
        ),
        6 => 
        array (
          'name' => 'Scheduler',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调度算法。取值：

* **wrr**（默认值）：权重值越高的后端服务器，被轮询到的次数（概率）也越高。

* **rr**：按照访问顺序依次将外部请求依序分发到后端服务器。

* **sch**：基于源IP地址的一致性hash，相同的源地址会调度到相同的后端服务器。

* **tch**：基于四元组的一致性hash（源IP+目的IP+源端口+目的端口），相同的流会调度到相同的后端服务器。

* **qch**：基于QUIC Connection ID一致性hash，相同的QUIC Connection ID会调度到相同的后端服务器。


仅性能保障型实例支持sch、 tch和qch一致性hash算法。
',
            'type' => 'string',
            'required' => false,
            'example' => 'wrr',
            'default' => 'wrr',
          ),
        ),
        7 => 
        array (
          'name' => 'HealthyThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**fail**判定为**success**。

取值范围：**2**~**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '1',
            'example' => '4',
            'default' => '3',
          ),
        ),
        8 => 
        array (
          'name' => 'UnhealthyThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**success**判定为**fail**。

取值范围：**2**~**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '1',
            'example' => '4',
            'default' => '3',
          ),
        ),
        9 => 
        array (
          'name' => 'HealthCheckConnectTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收来自运行状况检查的响应需要等待的时间。

如果后端ECS在指定的时间内没有正确响应，则判定为健康检查失败。单位：秒。

取值范围：**1**~**300**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '300',
            'minimum' => '1',
            'example' => '100',
            'default' => '5',
          ),
        ),
        10 => 
        array (
          'name' => 'HealthCheckConnectPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查使用的端口。

取值范围：**1**~**65535**。

不设置此参数时，表示使用后端服务端口（**BackendServerPort**）。

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '65535',
            'minimum' => '1',
            'example' => '80',
          ),
        ),
        11 => 
        array (
          'name' => 'healthCheckInterval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查的时间间隔。单位：秒。

取值范围：**1**~**50**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '3',
          ),
        ),
        12 => 
        array (
          'name' => 'healthCheckReq',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'UDP监听健康检查的请求字符串，只允许包含字母、数字，最大长度限制为64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'hello',
          ),
        ),
        13 => 
        array (
          'name' => 'healthCheckExp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'UDP监听健康检查的响应字符串，只允许包含字母、数字，最大长度限制为64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ok',
          ),
        ),
        14 => 
        array (
          'name' => 'VServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟服务器组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rsp-cige6j8****',
          ),
        ),
        15 => 
        array (
          'name' => 'MasterSlaveServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主备服务器组ID。

> 虚拟服务器组ID和主备服务器组ID只能选择一个。',
            'type' => 'string',
            'required' => false,
            'example' => 'rsp-0bfucwu****',
          ),
        ),
        16 => 
        array (
          'name' => 'AclId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监听绑定的访问策略组ID。

当**AclStatus**参数的值为**on**时，该参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'acl-uf60jw***',
          ),
        ),
        17 => 
        array (
          'name' => 'AclType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制类型，取值：

* **white**：仅转发来自所选访问控制策略组中设置的IP地址或地址段的请求，白名单适用于应用只允许特定IP访问的场景。设置白名单存在一定业务风险，一旦设置白名单，就只有白名单中的IP可以访问负载均衡监听。
 
   如果开启了白名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。

* **black**：来自所选访问控制策略组中设置的IP地址或地址段的所有请求都不会转发，黑名单适用于应用只限制某些特定IP访问的场景。

  如果开启了黑名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。

当**AclStatus**参数的值为**on**时，该参数有效。',
            'type' => 'string',
            'required' => false,
            'example' => 'white',
          ),
        ),
        18 => 
        array (
          'name' => 'AclStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启访问控制功能。取值：

- **on**：开启。
- **off**（默认值）：关闭。',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
          ),
        ),
        19 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义监听名称。

长度限制为1~256个字符，支持中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）。',
            'type' => 'string',
            'required' => false,
            'example' => 'udp_80',
          ),
        ),
        20 => 
        array (
          'name' => 'ProxyProtocolV2Enabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否支持通过Proxy Protocol协议携带客户端源地址到后端服务器。取值：

- **true**：是。
- **false**（默认值）：否。
',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        21 => 
        array (
          'name' => 'HealthCheckSwitch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启健康检查。取值：

- **on**（默认值）：开启。
- **off**：关闭。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
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
                'example' => '06F00FBB-3D9E-4CCE-9D43-1A6946A75556',
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
            'errorCode' => 'InvalidParameterValue.SpecNotSupport',
            'errorMessage' => 'The loadBalancer of shared spec does not support the parameter value, %s.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationNotSupport.Acl',
            'errorMessage' => 'The cloud box instance does not support acl.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameterValue.RegionNotSupport',
            'errorMessage' => 'The region does not support the parameter value, %s.',
          ),
          3 => 
          array (
            'errorCode' => 'Abs.VServerGroupIdAndMasterSlaveServerGroupId.MissMatch',
            'errorMessage' => 'The parameters VServerGroupId or MasterSlaveServerGroupId miss match.',
          ),
          4 => 
          array (
            'errorCode' => 'IpVersionConflict',
            'errorMessage' => 'The ip version of this LoadBalancer and the Acl is conflict.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameterValue.ZoneNotSupport',
            'errorMessage' => 'The zone does not support the parameter value, %s.',
          ),
          6 => 
          array (
            'errorCode' => 'ListenerProcessing',
            'errorMessage' => 'A previous configuration of the listener is pending,please try again later.',
          ),
          7 => 
          array (
            'errorCode' => 'AclNotExist',
            'errorMessage' => 'Acl does not exist.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidParameter.ListenerPortConflict',
            'errorMessage' => 'There is conflict listener port exists.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidParam.VServerGroupId',
            'errorMessage' => 'The specified VServerGroupId is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'MissingParam.HealthCheckConnectPort',
            'errorMessage' => 'The parameter HealthCheckConnectPort is required.',
          ),
          11 => 
          array (
            'errorCode' => 'InvalidParam.ListenerPort',
            'errorMessage' => 'The specified ListenerPort is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'InvalidParam.StartPort',
            'errorMessage' => 'The specified StartPort is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'InvalidParamSize.PortRange',
            'errorMessage' => 'The size of param PortRange is invalid.',
          ),
          14 => 
          array (
            'errorCode' => 'InvalidParam.EndPort',
            'errorMessage' => 'The specified EndPort is invalid.',
          ),
          15 => 
          array (
            'errorCode' => 'QuotaLimitExceeds.AclAttachedToListener',
            'errorMessage' => '%s.',
          ),
          16 => 
          array (
            'errorCode' => 'QuotaLimitExceeds.TotalAclEntry',
            'errorMessage' => '%s.',
          ),
          17 => 
          array (
            'errorCode' => 'AclListenerOverLimit',
            'errorMessage' => '%s.',
          ),
          18 => 
          array (
            'errorCode' => 'Duplicated.AclEntry',
            'errorMessage' => '%s.',
          ),
          19 => 
          array (
            'errorCode' => 'InvalidParameter.RegionNotSupport',
            'errorMessage' => 'The region does not support the parameter: %s.',
          ),
          20 => 
          array (
            'errorCode' => 'LbNotSupportTcpssl',
            'errorMessage' => 'You cannot create a TCP SSL type listener for the specified load balancer.',
          ),
          21 => 
          array (
            'errorCode' => 'LbSupportTcpsslOnly',
            'errorMessage' => 'The specified load balancer supports TCP SSL type listener only.',
          ),
          22 => 
          array (
            'errorCode' => 'ListenerNotSupportRule',
            'errorMessage' => 'You cannot create a rule for the specified listener.',
          ),
          23 => 
          array (
            'errorCode' => 'InvalidParamLength.HealthCheckExp',
            'errorMessage' => 'The length of the parameter HealthCheckReq is invalid.',
          ),
          24 => 
          array (
            'errorCode' => 'InvalidParamLength.HealthCheckReq',
            'errorMessage' => 'The length of the parameter HealthCheckReq is invalid.',
          ),
          25 => 
          array (
            'errorCode' => 'InvalidParam.HealthCheckReq',
            'errorMessage' => 'The param HealthCheckReq is invalid.',
          ),
          26 => 
          array (
            'errorCode' => 'InvalidParam.HealthCheckExp',
            'errorMessage' => 'The param HealthCheckExp is invalid.',
          ),
          27 => 
          array (
            'errorCode' => 'ResourceNotFound.VServerGroup',
            'errorMessage' => '%s.',
          ),
          28 => 
          array (
            'errorCode' => 'IllegalParam.FailoverThreshold',
            'errorMessage' => 'The parameter FailoverThreshold is illegal.',
          ),
          29 => 
          array (
            'errorCode' => 'IllegalParam.FailoverStrategy',
            'errorMessage' => 'The parameter FailoverStrategy is illegal.',
          ),
          30 => 
          array (
            'errorCode' => 'InvalidParameter.ZoneNotSupport',
            'errorMessage' => 'The zone does not support the parameter %s.',
          ),
          31 => 
          array (
            'errorCode' => 'MasterSlaveServerConflict',
            'errorMessage' => 'The servers are conflict for MasterSlaveGroup.',
          ),
          32 => 
          array (
            'errorCode' => 'VipNotSupportQuicVersion',
            'errorMessage' => 'The listener does not support the parameter of QuicVersion.',
          ),
          33 => 
          array (
            'errorCode' => 'IllegalParam.HealthCheckType',
            'errorMessage' => 'The param of HealthCheckType is illegal.',
          ),
          34 => 
          array (
            'errorCode' => 'MissingParam.HealthCheckMethod',
            'errorMessage' => 'The param of HealthCheckMethod is missing.',
          ),
          35 => 
          array (
            'errorCode' => 'IllegalParam.HealthCheckMethod',
            'errorMessage' => 'The param of HealthCheckMethod is illegal.',
          ),
          36 => 
          array (
            'errorCode' => 'IllegalParam.HealthCheck',
            'errorMessage' => 'The param of HealthCheck is illegal.',
          ),
          37 => 
          array (
            'errorCode' => 'OperationDenied.SpecialListenerPortNotAllowed',
            'errorMessage' => 'The operation is not allowed because port 4789 is reserved by the system.',
          ),
          38 => 
          array (
            'errorCode' => 'Mismatch.SlbSpecTypeAndListenerProtocol',
            'errorMessage' => 'The SlbSpecType and ListenerProtocol are mismatched.',
          ),
          39 => 
          array (
            'errorCode' => 'OperationDenied.OnlyIpv4SlbSupport',
            'errorMessage' => 'The operation is not allowed because of OnlyIpv4SlbSupport.',
          ),
          40 => 
          array (
            'errorCode' => 'OperationDenied.FullNatModeNotAllowed',
            'errorMessage' => 'The operation is not allowed because of FullNatModeNotAllowed.',
          ),
          41 => 
          array (
            'errorCode' => 'SpecNotSupportParameter',
            'errorMessage' => 'The instance with share spec does not support FullNatEnabled parameter.',
          ),
          42 => 
          array (
            'errorCode' => 'InvalidParam.TagValue	',
            'errorMessage' => '%s.',
          ),
          43 => 
          array (
            'errorCode' => 'InvalidParam.TagKey',
            'errorMessage' => '%s.',
          ),
          44 => 
          array (
            'errorCode' => 'SizeLimitExceeded.Tag',
            'errorMessage' => '%s.',
          ),
          45 => 
          array (
            'errorCode' => 'MissingParam.TagKey',
            'errorMessage' => 'The param MissingParam.TagKey is missing.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"06F00FBB-3D9E-4CCE-9D43-1A6946A75556\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateLoadBalancerUDPListenerResponse>\\n    <RequestId>06F00FBB-3D9E-4CCE-9D43-1A6946A75556</RequestId>\\n</CreateLoadBalancerUDPListenerResponse>","errorExample":""}]',
      'title' => '创建UDP监听',
      'summary' => '创建UDP监听。',
      'description' => '> 新建的监听的状态为**stopped**。创建完成后，调用[StartLoadBalancerListener](~~27597~~)接口启动监听来转发流量。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetLoadBalancerUDPListenerAttribute' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的地域ID。

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1rtfnodmywb43ecu4sf-c****',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例前端使用的端口。

取值范围：**1**~**65535**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '65535',
            'minimum' => '0',
            'example' => '80',
          ),
        ),
        3 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监听的带宽峰值，单位：Mbps。取值：

- **-1**：对于按流量计费的公网负载均衡实例，可以将带宽峰值设置为**-1**，即不限制带宽峰值。
	  
- **1**~**5120**： 对于按带宽计费的公网负载均衡实例，可以设置每个监听的带宽峰值，但所有监听的带宽峰值之和不能超过实例的带宽峰值。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '5120',
            'minimum' => '-1',
            'example' => '-1',
          ),
        ),
        4 => 
        array (
          'name' => 'Scheduler',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调度算法。取值：

- **wrr**：权重值越高的后端服务器，被轮询到的次数（概率）也越高。当权重值相同时，当前连接数越小的后端服务器被轮询到的次数（概率）也越高。

- **rr**：按照访问顺序依次将外部请求依序分发到后端服务器。

- **sch**：基于源IP地址的一致性哈希算法，相同的源地址会调度到相同的后端服务器。

- **tch**：基于四元组的一致性哈希算法（源IP、目的IP、源端口和目的端口），相同的流会调度到相同的后端服务器。

- **qch**：基于QUIC Connection ID一致性哈希算法，相同的QUIC Connection ID会调度到相同的后端服务器。

> - 仅有性能保障型实例支持**sch**、**tch**和**qch**的调度算法。
> - CLB不支持**wrr**和**rr**算法变更为一致性哈希算法，也不支持一致性哈希算法互转。',
            'type' => 'string',
            'required' => false,
            'example' => 'wrr',
          ),
        ),
        5 => 
        array (
          'name' => 'HealthyThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**fail**判定为**success**。

取值范围：**1**~**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '1',
            'example' => '4',
          ),
        ),
        6 => 
        array (
          'name' => 'UnhealthyThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**success**判定为**fail**。

取值范围：**1**~**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '1',
            'example' => '4',
          ),
        ),
        7 => 
        array (
          'name' => 'HealthCheckConnectTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收来自运行状况检查的响应需要等待的时间。如果后端ECS在指定的时间内没有正确响应，则判定为健康检查失败。单位：秒。

取值范围：**1**~**300**。

> 如果**HealthCheckConnectTimeout**的值小于**HealthCheckInterval**的值，则**HealthCheckConnectTimeout**无效，超时时间为**HealthCheckInterval**的值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '300',
            'minimum' => '1',
            'example' => '100',
          ),
        ),
        8 => 
        array (
          'name' => 'HealthCheckConnectPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查使用的端口。

取值范围：**1**~**65535**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '65535',
            'minimum' => '1',
            'example' => '80',
          ),
        ),
        9 => 
        array (
          'name' => 'HealthCheckInterval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查的时间间隔，单位：秒。

取值范围：**1**~**50**。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '5',
          ),
        ),
        10 => 
        array (
          'name' => 'healthCheckReq',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'UDP监听健康检查的请求串，只允许包含字母、数字，最大长度限制为64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'hello',
          ),
        ),
        11 => 
        array (
          'name' => 'healthCheckExp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'UDP监听健康检查的响应串，只允许包含字母、数字，最大长度限制为64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ok',
          ),
        ),
        12 => 
        array (
          'name' => 'VServerGroup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用虚拟服务器组。取值：
- **on**：是。
- **off**：否。

> **VserverGroup**和**MasterSlaveServerGroup**只允许一个值为**on**。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
          ),
        ),
        13 => 
        array (
          'name' => 'VServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟服务器组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rsp-cige6****',
          ),
        ),
        14 => 
        array (
          'name' => 'MasterSlaveServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主备服务器组ID。

> 虚拟服务器组ID和主备服务器组ID只能选择一个。',
            'type' => 'string',
            'required' => false,
            'example' => 'rsp-0bfuc****',
          ),
        ),
        15 => 
        array (
          'name' => 'MasterSlaveServerGroup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用主备服务器组。取值：
- **on**：是。
- **off**：否。

> **VserverGroup**和**MasterSlaveServerGroup**只允许取值为**on**。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
          ),
        ),
        16 => 
        array (
          'name' => 'AclId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监听绑定的访问策略组ID。

> 当**AclStatus**参数的值为**on**时，该参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
          ),
        ),
        17 => 
        array (
          'name' => 'AclType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制类型。取值：

- **white**： 仅转发来自所选访问控制策略组中设置的IP地址或地址段的请求，白名单适用于只允许特定IP访问的场景。设置白名单存在一定业务风险。一旦设置白名单，就只有白名单中的IP可以访问负载均衡监听。 

    如果开启了白名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。

- **black**： 不会转发来自所选访问控制策略组中设置的IP地址或地址段，黑名单适用于只限制某些特定IP访问的场景。 
  
    如果开启了黑名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。

>当**AclStatus**参数的值为**on**时，该参数有效。',
            'type' => 'string',
            'required' => false,
            'example' => 'white',
          ),
        ),
        18 => 
        array (
          'name' => 'AclStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启访问控制功能。取值：
- **on**：是。
- **off**：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
          ),
        ),
        19 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义监听名称。

长度限制为1~256个字符，支持中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）。',
            'type' => 'string',
            'required' => false,
            'example' => 'udp_80',
          ),
        ),
        20 => 
        array (
          'name' => 'ProxyProtocolV2Enabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否支持通过Proxy Protocol协议携带客户端源地址到后端服务器。取值：

- **true**：是。
- **false**（默认值）：否。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        21 => 
        array (
          'name' => 'HealthCheckSwitch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启健康检查。取值：

- **on**（默认值）：开启。

- **off**：不开启。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
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
            'errorCode' => 'InvalidParameterValue.SpecNotSupport',
            'errorMessage' => 'The loadBalancer of shared spec does not support the parameter value, %s.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationNotSupport.Acl',
            'errorMessage' => 'The cloud box instance does not support acl.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameterValue.RegionNotSupport',
            'errorMessage' => 'The region does not support the parameter value, %s.',
          ),
          3 => 
          array (
            'errorCode' => 'IpVersionConflict',
            'errorMessage' => 'The ip version of this LoadBalancer and the Acl is conflict.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameterValue.ZoneNotSupport',
            'errorMessage' => 'The zone does not support the parameter value, %s.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationFailed.ServerGroupInUse',
            'errorMessage' => 'The VServerGroup or MasterSlaveServerGroup can not be close for this listener.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParam.VServerGroupId',
            'errorMessage' => 'The specified VServerGroupId is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'MissingParam.HealthCheckConnectPort',
            'errorMessage' => 'The parameter HealthCheckConnectPort is required.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidParam.ListenerPort',
            'errorMessage' => 'The specified ListenerPort is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidParam.StartPort',
            'errorMessage' => 'The specified StartPort is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidParamSize.PortRange',
            'errorMessage' => 'The size of param PortRange is invalid.',
          ),
          11 => 
          array (
            'errorCode' => 'InvalidParam.EndPort',
            'errorMessage' => 'The specified EndPort is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'InvalidParam.PortRange',
            'errorMessage' => 'The specified PortRange is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'QuotaLimitExceeds.AclAttachedToListener',
            'errorMessage' => '%s.',
          ),
          14 => 
          array (
            'errorCode' => 'QuotaLimitExceeds.TotalAclEntry',
            'errorMessage' => '%s.',
          ),
          15 => 
          array (
            'errorCode' => 'AclListenerOverLimit',
            'errorMessage' => '%s.',
          ),
          16 => 
          array (
            'errorCode' => 'Duplicated.AclEntry',
            'errorMessage' => '%s.',
          ),
          17 => 
          array (
            'errorCode' => 'InvalidParamLength.HealthCheckReq',
            'errorMessage' => 'The length of the parameter HealthCheckReq is invalid.',
          ),
          18 => 
          array (
            'errorCode' => 'InvalidParamLength.HealthCheckExp',
            'errorMessage' => 'The length of the parameter HealthCheckExp is invalid.',
          ),
          19 => 
          array (
            'errorCode' => 'InvalidParam.HealthCheckReq',
            'errorMessage' => 'The param HealthCheckReq is invalid.',
          ),
          20 => 
          array (
            'errorCode' => 'InvalidParam.HealthCheckExp',
            'errorMessage' => 'The param HealthCheckExp is invalid.',
          ),
          21 => 
          array (
            'errorCode' => 'ResourceNotFound.VServerGroup',
            'errorMessage' => '%s.',
          ),
          22 => 
          array (
            'errorCode' => 'IllegalParam.FailoverThreshold',
            'errorMessage' => 'The parameter FailoverThreshold is illegal.',
          ),
          23 => 
          array (
            'errorCode' => 'IllegalParam.FailoverStrategy',
            'errorMessage' => 'The parameter FailoverStrategy is illegal.',
          ),
          24 => 
          array (
            'errorCode' => 'InvalidParameter.ZoneNotSupport',
            'errorMessage' => 'The zone does not support the parameter %s.',
          ),
          25 => 
          array (
            'errorCode' => 'MasterSlaveServerConflict',
            'errorMessage' => 'The servers are conflict for MasterSlaveGroup.',
          ),
          26 => 
          array (
            'errorCode' => 'MissingParam.VServerGroupId',
            'errorMessage' => 'The parameter VServerGroupId is missing.',
          ),
          27 => 
          array (
            'errorCode' => 'VipNotSupportQuicVersion',
            'errorMessage' => 'The listener does not support the parameter of QuicVersion.',
          ),
          28 => 
          array (
            'errorCode' => 'IllegalParam.HealthCheckType',
            'errorMessage' => 'The param of HealthCheckType is illegal.',
          ),
          29 => 
          array (
            'errorCode' => 'IllegalParam.HealthCheckMethod',
            'errorMessage' => 'The param of HealthCheckMethod is illegal.',
          ),
          30 => 
          array (
            'errorCode' => 'IllegalParam.HealthCheck',
            'errorMessage' => 'The param of HealthCheck is illegal.',
          ),
          31 => 
          array (
            'errorCode' => 'OperationDenied.MasterSlaveGroupLogEnabled',
            'errorMessage' => 'The operation is denied because of MasterSlaveGroupLogEnabled.',
          ),
          32 => 
          array (
            'errorCode' => 'OperationDenied.OnlyIpv4SlbSupport',
            'errorMessage' => 'The operation is not allowed because of OnlyIpv4SlbSupport.',
          ),
          33 => 
          array (
            'errorCode' => 'OperationDenied.FullNatModeNotAllowed',
            'errorMessage' => 'The operation is not allowed because of FullNatModeNotAllowed.',
          ),
          34 => 
          array (
            'errorCode' => 'SpecNotSupportParameter',
            'errorMessage' => 'The instance with share spec does not support FullNatEnabled parameter.',
          ),
          35 => 
          array (
            'errorCode' => 'Abs.VServerGroupIdAndMasterSlaveServerGroupId.MissMatch',
            'errorMessage' => 'Virtual service group ID or master slave server group ID is missing. Please check the input parameters.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<SetLoadBalancerUDPListenerAttributeResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</SetLoadBalancerUDPListenerAttributeResponse>","errorExample":""}]',
      'title' => '修改UDP协议监听的配置',
      'summary' => '修改UDP协议监听的配置。',
      'description' => '- 您已经创建传统型负载均衡，具体操作，请参见[CreateLoadBalancer](~~27577~~)。
- 您已经创建UDP监听，具体操作，请参见[CreateLoadBalancerUDPListener](~~27595~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeLoadBalancerUDPListenerAttribute' => 
    array (
      'summary' => '查询UDP监听的配置。',
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
        'abilityTreeCode' => '88590',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslbYU0ILA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1rtfnodmywb43e*****',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例前端使用的端口。

取值：**1**~**65535**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '65535',
            'minimum' => '0',
            'example' => '80',
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
              'VServerGroupId' => 
              array (
                'description' => '绑定的虚拟服务器组ID。',
                'type' => 'string',
                'example' => 'rsp-cige6j****',
              ),
              'Status' => 
              array (
                'description' => '当前监听的状态。取值：

* **running**：监听正常运行。

* **stopped**：监听停止运行。',
                'type' => 'string',
                'example' => 'stopped',
              ),
              'AclType' => 
              array (
                'description' => '访问控制类型：

- **white**：仅转发来自所选访问控制策略组中设置的IP地址或地址段的请求，白名单适用于应用只允许特定IP访问的场景。

 设置白名单存在一定业务风险。一旦设置白名单，就只有白名单中的IP可以访问负载均衡监听。如果开启了白名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。

- **black**：来自所选访问控制策略组中设置的IP地址或地址段的所有请求都不会转发，黑名单适用于应用只限制某些特定IP访问的场景。
 
 如果开启了黑名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。',
                'type' => 'string',
                'example' => 'white',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF34B540710',
              ),
              'HealthCheckConnectPort' => 
              array (
                'description' => '健康检查的端口。取值：**1**~**65535**。不设置此参数时，表示使用后端服务端口（BackendServerPort）。

> 在**HealthCheck**值为**on**时才会有效。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '8080',
              ),
              'Description' => 
              array (
                'description' => '自定义监听名称。',
                'type' => 'string',
                'example' => 'UDP_80',
              ),
              'Bandwidth' => 
              array (
                'description' => '监听的带宽峰值，单位Mbps。取值：

- **-1**：对于按流量计费的公网负载均衡实例，可以将带宽峰值设置为-1，即不限制带宽峰值。

- **1**~**5120**：对于按带宽计费的公网负载均衡实例，可以设置每个监听的带宽峰值，但所有监听的带宽峰值之和不能超过实例的带宽峰值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '-1',
              ),
              'MasterSlaveServerGroupId' => 
              array (
                'description' => '绑定的主备服务器组ID。',
                'type' => 'string',
                'example' => 'rsp-0bfucw****',
              ),
              'BackendServerPort' => 
              array (
                'description' => '传统型负载均衡实例后端使用的端口。

> 如果后端服务器组为虚拟服务器组，则不返回该参数。
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '90',
              ),
              'AclStatus' => 
              array (
                'description' => '是否开启访问控制功能。取值：**on**或**off**（默认值）。',
                'type' => 'string',
                'example' => 'off',
              ),
              'UnhealthyThreshold' => 
              array (
                'description' => '不健康检查阈值。健康检查连续失败多少次后，将后端服务器的健康检查状态由**成功**判定为**失败**。取值：**2**~**10**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
              ),
              'ProxyProtocolV2Enabled' => 
              array (
                'description' => '是否支持通过Proxy Protocol协议携带客户端源地址到后端服务器。取值：

- **true**：是。
- **false**：否。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'ListenerPort' => 
              array (
                'description' => '传统型负载均衡实例前端使用的端口。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '53',
              ),
              'HealthCheckInterval' => 
              array (
                'description' => '健康检查的时间间隔，取值：**1**~**50**秒。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'HealthCheckExp' => 
              array (
                'description' => 'UDP监听健康检查的响应串。只允许包含字母、数字，最大长度限制为64个字符。',
                'type' => 'string',
                'example' => 'ok',
              ),
              'AclId' => 
              array (
                'description' => '访问控制策略组ID。',
                'type' => 'string',
                'example' => 'acl-uf60jwfiv6******',
              ),
              'Scheduler' => 
              array (
                'description' => '调度算法，取值：
* **wrr**（默认值）：权重值越高的后端服务器，被轮询到的次数（概率）也越高。

* **rr**：按照访问顺序依次将外部请求依序分发到后端服务器。',
                'type' => 'string',
                'example' => 'wrr',
              ),
              'HealthCheckConnectTimeout' => 
              array (
                'description' => '接收来自运行状况检查的响应需要等待的时间。如果后端ECS在指定的时间内没有正确响应，则判定为健康检查失败。取值：**1**~**300**秒。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'HealthyThreshold' => 
              array (
                'description' => '健康检查阈值。健康检查连续成功多少次后，将后端服务器的健康检查状态由**失败**判定为**成功**。取值：**2**~**10**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
              ),
              'HealthCheckReq' => 
              array (
                'description' => 'UDP监听健康检查的请求串。只允许包含字母、数字，最大长度限制为64个字符。',
                'type' => 'string',
                'example' => 'hello',
              ),
              'HealthCheck' => 
              array (
                'description' => '是否开启健康检查。取值：

- **on**：开启。
- **off**：关闭。',
                'type' => 'string',
                'example' => 'on',
              ),
              'AclIds' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AclId' => 
                  array (
                    'description' => '访问控制策略组ID。',
                    'type' => 'array',
                  ),
                ),
              ),
              'PortRanges' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                ),
              ),
              'LoadBalancerId' => 
              array (
                'description' => '传统型负载均衡实例ID。',
                'type' => 'string',
                'example' => 'lb-bp1rtfnodmywb43e*****',
              ),
              'Tags' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Tag' => 
                  array (
                    'description' => '标签列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '标签列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TagKey' => 
                        array (
                          'description' => '监听的标签键。N的取值范围：**1**~**20**。一旦传入该值，则不允许为空字符串。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                          'type' => 'string',
                          'example' => 'TestKey',
                        ),
                        'TagValue' => 
                        array (
                          'description' => '监听的标签值。N的取值范围：**1**~**20**。一旦传入该值，可以为空字符串。最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                          'type' => 'string',
                          'example' => 'TestValue',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"VServerGroupId\\": \\"rsp-cige6j****\\",\\n  \\"Status\\": \\"stopped\\",\\n  \\"AclType\\": \\"white\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\",\\n  \\"HealthCheckConnectPort\\": 8080,\\n  \\"Description\\": \\"UDP_80\\",\\n  \\"Bandwidth\\": -1,\\n  \\"MasterSlaveServerGroupId\\": \\"rsp-0bfucw****\\",\\n  \\"BackendServerPort\\": 90,\\n  \\"AclStatus\\": \\"off\\",\\n  \\"UnhealthyThreshold\\": 4,\\n  \\"ProxyProtocolV2Enabled\\": false,\\n  \\"ListenerPort\\": 53,\\n  \\"HealthCheckInterval\\": 5,\\n  \\"HealthCheckExp\\": \\"ok\\",\\n  \\"AclId\\": \\"acl-uf60jwfiv6******\\",\\n  \\"Scheduler\\": \\"wrr\\",\\n  \\"HealthCheckConnectTimeout\\": 100,\\n  \\"HealthyThreshold\\": 4,\\n  \\"HealthCheckReq\\": \\"hello\\",\\n  \\"HealthCheck\\": \\"on\\",\\n  \\"AclIds\\": {\\n    \\"AclId\\": [\\n      \\"\\"\\n    ]\\n  },\\n  \\"LoadBalancerId\\": \\"lb-bp1rtfnodmywb43e*****\\",\\n  \\"Tags\\": {\\n    \\"Tag\\": [\\n      {\\n        \\"TagKey\\": \\"TestKey\\",\\n        \\"TagValue\\": \\"TestValue\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeLoadBalancerUDPListenerAttributeResponse>\\n    <VServerGroupId>rsp-cige6j****</VServerGroupId>\\n    <Status>stopped</Status>\\n    <AclType>white</AclType>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <HealthCheckConnectPort>8080</HealthCheckConnectPort>\\n    <Description>UDP_80</Description>\\n    <Bandwidth>-1</Bandwidth>\\n    <MasterSlaveServerGroupId>rsp-0bfucw****</MasterSlaveServerGroupId>\\n    <BackendServerPort>90</BackendServerPort>\\n    <AclStatus>off</AclStatus>\\n    <UnhealthyThreshold>4</UnhealthyThreshold>\\n    <ProxyProtocolV2Enabled>false</ProxyProtocolV2Enabled>\\n    <ListenerPort>53</ListenerPort>\\n    <HealthCheckInterval>5</HealthCheckInterval>\\n    <HealthCheckExp>ok</HealthCheckExp>\\n    <AclId>123943****</AclId>\\n    <Scheduler>wrr</Scheduler>\\n    <HealthCheckConnectTimeout>100</HealthCheckConnectTimeout>\\n    <HealthyThreshold>4</HealthyThreshold>\\n    <HealthCheckReq>hello</HealthCheckReq>\\n    <HealthCheck>on</HealthCheck>\\n    <LoadBalancerId>lb-bp1rtfnodmywb43e*****</LoadBalancerId>\\n    <Tags>\\n        <TagKey>TestKey</TagKey>\\n        <TagValue>TestValue</TagValue>\\n    </Tags>\\n</DescribeLoadBalancerUDPListenerAttributeResponse>","errorExample":""}]',
      'title' => '查询UDP监听的配置',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateLoadBalancerHTTPListener' => 
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
            'description' => '传统型负载均衡实例的地域ID。

您可以从[地域和可用区](~~40654~~)列表或通过调用[DescribeRegions](~~27584~~)接口获取地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1c9vixxjh92q83tw*****',
          ),
        ),
        2 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监听的带宽峰值，单位：Mbps。取值：

<props="intl">**-1**：不限制带宽峰值。</props>

<props="china">

- **-1**：不限制带宽峰值。

- **1**~**5120**：监听的带宽峰值，所有监听的带宽峰值之和不能超过实例的带宽峰值。

</props>',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '5120',
            'minimum' => '-1',
            'example' => '-1',
            'default' => '-1',
          ),
        ),
        3 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例前端使用的端口。

取值：**1**~**65535**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '65535',
            'minimum' => '1',
            'example' => '80',
          ),
        ),
        4 => 
        array (
          'name' => 'BackendServerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例后端使用的端口。

取值：**1**~**65535**。

> 如果不使用虚拟服务器组（不指定VServerGroupId参数），则该参数必选。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '65535',
            'minimum' => '1',
            'example' => '80',
          ),
        ),
        5 => 
        array (
          'name' => 'XForwardedFor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启通过`X-Forwarded-For`头字段获取来访客户端IP。取值：
- **on**（默认值）：是。
- **off**：否。

',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
            'default' => 'on',
          ),
        ),
        6 => 
        array (
          'name' => 'Scheduler',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调度算法。取值：

- **wrr**（默认值）：权重值越高的后端服务器，被轮询到的概率也越高。

- **rr**：按照访问顺序依次将外部请求依序分发到后端服务器。',
            'type' => 'string',
            'required' => false,
            'example' => 'wrr',
            'default' => 'wrr',
          ),
        ),
        7 => 
        array (
          'name' => 'StickySession',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启会话保持。取值：

- **on**：是。

- **off**（默认值）：否。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'off',
          ),
        ),
        8 => 
        array (
          'name' => 'StickySessionType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Cookie处理方式。取值：

- **insert**：植入Cookie。

    客户端第一次访问时，负载均衡会在返回请求中植入Cookie，下次客户端携带此Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器上。

- **server**：重写Cookie。

  负载均衡发现用户自定义了Cookie，将会对原来的Cookie进行重写，下次客户端携带新的Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器。

> 当**StickySession**值为**on**时，必须指定该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'insert',
          ),
        ),
        9 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'allowEmptyValue' => true,
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '监听的标签键。N的取值范围：**1**~**20**。一旦传入该值，则不允许为空字符串。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '监听的标签值。N的取值范围：**1**~**20**。一旦传入该值，可以为空字符串。最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        10 => 
        array (
          'name' => 'CookieTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Cookie超时时间。单位：秒。

取值：**1**~**86400**。

> 当**StickySession**为**on**且**StickySessionType**为**insert**时，该参数必选。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '86400',
            'minimum' => '1',
            'example' => '500',
          ),
        ),
        11 => 
        array (
          'name' => 'Cookie',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器上配置的Cookie。

长度为1~200个字符，只能包含ASCII英文字母和数字字符，不能包含半角逗号（,）、半角分号（;）或空格，也不能以美元符号（$）开头。

>当**StickySession**为**on**且**StickySessionType**为**server**时，该参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'testCookie',
          ),
        ),
        12 => 
        array (
          'name' => 'HealthCheck',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启健康检查。取值：

- **on**：开启健康检查。

- **off**：不开启健康检查。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'on',
          ),
        ),
        13 => 
        array (
          'name' => 'HealthCheckMethod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监听HTTP类型健康检查的健康检查方法。取值：**head**或**get**。

> **HealthCheck**值为**on**时才会有效。',
            'type' => 'string',
            'required' => false,
            'example' => 'get',
          ),
        ),
        14 => 
        array (
          'name' => 'HealthCheckDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于健康检查的域名，取值：

- **$_ip**： 后端服务器的私网IP。当指定了IP或该参数未指定时，负载均衡会使用各后端服务器的私网IP当做健康检查使用的域名。

- **domain**：域名长度为1~80字符，只能包含字母、数字、半角句号（.）和短划线（-）。

>在**HealthCheck**值为**on**时才会有效。',
            'type' => 'string',
            'required' => false,
            'example' => '172.16.*.*/12',
          ),
        ),
        15 => 
        array (
          'name' => 'HealthCheckURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于健康检查的URI。

长度限制为1~80个字符，只能使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）这些字符。URI不能只为正斜线（/），但必须以正斜线（/）开头。

>在**HealthCheck**值为**on**时才会有效。',
            'type' => 'string',
            'required' => false,
            'example' => '/test/index.html',
          ),
        ),
        16 => 
        array (
          'name' => 'HealthyThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**失败**判定为**成功**。

取值：**2**~**10**。

>在**HealthCheck**值为**on**时才会有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '1',
            'example' => '4',
          ),
        ),
        17 => 
        array (
          'name' => 'UnhealthyThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**成功**判定为**失败**。

取值：**2**~**10**。

>在**HealthCheck**值为**on**时才会有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '1',
            'example' => '4',
          ),
        ),
        18 => 
        array (
          'name' => 'HealthCheckTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收来自运行状况检查的响应需要等待的时间。如果后端ECS在指定的时间内没有正确响应，则判定为健康检查失败。单位：秒。

取值：**1**~**300**。

> - 如果**HealthCheckTimeout**的值大于**HealthCheckInterval**的值，则**HealthCheckTimeout**无效，超时时间为**HealthCheckInterval**的值。
> - 在**HealthCheck**值为**on**时才会有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '300',
            'minimum' => '1',
            'example' => '3',
          ),
        ),
        19 => 
        array (
          'name' => 'HealthCheckConnectPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查的后端服务器的端口。

取值： **1**~**65535**。

> 在**HealthCheck**值为**on**时才会有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '65535',
            'minimum' => '-520',
            'example' => '80',
          ),
        ),
        20 => 
        array (
          'name' => 'HealthCheckInterval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查的时间间隔。单位：秒。

取值： **1**~**50**。

>在**HealthCheck**值为**on**时才会有效。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '5',
          ),
        ),
        21 => 
        array (
          'name' => 'HealthCheckHttpCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查正常的HTTP状态码，多个状态码用逗号分隔。

取值：**http\\_2xx**（默认值）、**http\\_3xx**、**http\\_4xx**或**http\\_5xx**。

>在**HealthCheck**值为**on**时才会有效。',
            'type' => 'string',
            'required' => false,
            'example' => 'http_2xx',
          ),
        ),
        22 => 
        array (
          'name' => 'VServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟服务器组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rsp-cige6j*****',
          ),
        ),
        23 => 
        array (
          'name' => 'XForwardedFor_SLBIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否通过`SLB-IP`头字段获取客户端请求的VIP（Virtual IP address）。取值：
- **on**：是。
- **off**（默认值）：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
            'default' => 'off',
          ),
        ),
        24 => 
        array (
          'name' => 'XForwardedFor_SLBID',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否通过`SLB-ID`头字段获取负载均衡实例ID。取值：
- **on**：是。
- **off**（默认值）：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
            'default' => 'off',
          ),
        ),
        25 => 
        array (
          'name' => 'XForwardedFor_proto',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否通过`X-Forwarded-Proto`头字段获取负载均衡实例的监听协议。取值：
- **on**：是。
- **off**（默认值）：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
            'default' => 'off',
          ),
        ),
        26 => 
        array (
          'name' => 'Gzip',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启`Gzip`压缩，对特定文件类型进行压缩。取值：
- **on**（默认值）：是。
- **off**：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
            'default' => 'on',
          ),
        ),
        27 => 
        array (
          'name' => 'AclId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监听绑定的访问策略组ID。

> 当**AclStatus**参数的值为**on**时，该参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'acl-uf60jw******',
          ),
        ),
        28 => 
        array (
          'name' => 'AclType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制类型。取值：

- **white**： 仅转发来自所选访问控制策略组中设置的IP地址或地址段的请求，白名单适用于只允许特定IP访问的场景。设置白名单存在一定业务风险。一旦设置白名单，就只有白名单中的IP可以访问负载均衡监听。
 
  如果开启了白名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。

- **black**： 来自所选访问控制策略组中设置的IP地址或地址段的所有请求都不会转发，黑名单适用于只限制某些特定IP访问的场景。

  如果开启了黑名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。

>当**AclStatus**参数的值为**on**时，该参数有效。',
            'type' => 'string',
            'required' => false,
            'example' => 'white',
          ),
        ),
        29 => 
        array (
          'name' => 'AclStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启访问控制功能。取值：
- **on**：是。
- **off**（默认值）：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
          ),
        ),
        30 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义监听名称。

长度限制为1~256个字符，支持中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）。',
            'type' => 'string',
            'required' => false,
            'example' => 'HTTP_443',
          ),
        ),
        31 => 
        array (
          'name' => 'ListenerForward',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启HTTP至HTTPS的转发。取值：
- **on**：是。
- **off**（默认值）：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
          ),
        ),
        32 => 
        array (
          'name' => 'ForwardPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'HTTP至HTTPS的监听转发端口。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '65535',
            'minimum' => '1',
            'example' => '443',
          ),
        ),
        33 => 
        array (
          'name' => 'IdleTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定连接空闲超时时间。单位：秒。

默认值为**15**，取值范围：**1**~**60**。

在超时时间内一直没有访问请求，负载均衡会暂时中断当前连接，直到一下次请求来临时重新建立新的连接。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9999',
            'minimum' => '1',
            'example' => '3',
          ),
        ),
        34 => 
        array (
          'name' => 'RequestTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定请求超时时间。单位：秒。

默认值为**60**，取值范围为**1**~**180**。

在超时时间内后端服务器一直没有响应，负载均衡将放弃等待，给客户端返回` HTTP 504 `错误码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9999',
            'minimum' => '1',
            'example' => '6',
          ),
        ),
        35 => 
        array (
          'name' => 'XForwardedFor_SLBPORT',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否通过`XForwardedFor_SLBPORT`头字段获取负载均衡实例的监听端口。取值：
- **on**：是。
- **off**：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
          ),
        ),
        36 => 
        array (
          'name' => 'XForwardedFor_ClientSrcPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否通过`XForwardedFor_ClientSrcPort`头字段获取访问负载均衡实例客户端的端口。取值：
- **on**：是。
- **off**：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
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
            'errorCode' => 'InvalidParameter.RegionNotSupport',
            'errorMessage' => 'The region does not support the parameter: %s.',
          ),
          1 => 
          array (
            'errorCode' => 'IpVersionConflict',
            'errorMessage' => 'The ip version of this LoadBalancer and the Acl is conflict.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified ListenerPort or ForwardPort is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'ListenerForwardNotSupport',
            'errorMessage' => 'X-Forward-For is not supported to a ipv6 instance.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.IdleTimeout',
            'errorMessage' => 'The specified IdleTimeout exceeds the limit.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.RequestTimeout',
            'errorMessage' => 'The specified RequestTimeout exceeds the limit.',
          ),
          6 => 
          array (
            'errorCode' => 'ListenerProcessing',
            'errorMessage' => 'A previous configuration of the listener is pending,please try again later.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidParameter.ListenerPortConflict',
            'errorMessage' => 'There is conflict listener port exists.',
          ),
          8 => 
          array (
            'errorCode' => 'ResourceNotAvailible.HttpListener',
            'errorMessage' => 'The specified Zone did not have enough resource.',
          ),
          9 => 
          array (
            'errorCode' => 'AclNotExist',
            'errorMessage' => 'Acl does not exist.',
          ),
          10 => 
          array (
            'errorCode' => 'OperationUnsupported.CreateLoadBalancerLayer7Listener',
            'errorMessage' => 'The slb instance does not support create HTTP or HTTPS listener.',
          ),
          11 => 
          array (
            'errorCode' => 'InvalidParameter.VServerGroupId',
            'errorMessage' => 'The MasterSlaveServerGroup can not be attached to HTTP or HTTPS listener.',
          ),
          12 => 
          array (
            'errorCode' => 'MissingParam.HealthCheckDomain',
            'errorMessage' => 'The HealthCheckDomain is required when HealthCheckHttpVersion is http1.1.',
          ),
          13 => 
          array (
            'errorCode' => 'InvalidParameter.HealthCheckHttpVersion',
            'errorMessage' => 'The param HealthCheckHttpVersion is invalid.',
          ),
          14 => 
          array (
            'errorCode' => 'QuotaLimitExceeds.AclAttachedToListener',
            'errorMessage' => '%s.',
          ),
          15 => 
          array (
            'errorCode' => 'QuotaLimitExceeds.TotalAclEntry',
            'errorMessage' => '%s.',
          ),
          16 => 
          array (
            'errorCode' => 'AclListenerOverLimit',
            'errorMessage' => '%s.',
          ),
          17 => 
          array (
            'errorCode' => 'Duplicated.AclEntry',
            'errorMessage' => '%s.',
          ),
          18 => 
          array (
            'errorCode' => 'OperationFailed.InsufficientResources',
            'errorMessage' => 'The loadbalancer does not support this operation because of insufficient resources.',
          ),
          19 => 
          array (
            'errorCode' => 'InvalidParameter.ForwardCode',
            'errorMessage' => 'The specified ForwardCode is invalid.',
          ),
          20 => 
          array (
            'errorCode' => 'LbNotSupportTcpssl',
            'errorMessage' => 'You cannot create a TCP SSL type listener for the specified load balancer.',
          ),
          21 => 
          array (
            'errorCode' => 'LbSupportTcpsslOnly',
            'errorMessage' => 'The specified load balancer supports TCP SSL type listener only.',
          ),
          22 => 
          array (
            'errorCode' => 'ListenerNotSupportRule',
            'errorMessage' => 'You cannot create a rule for the specified listener.',
          ),
          23 => 
          array (
            'errorCode' => 'Mismatch.SlbSpecTypeAndListenerProtocol',
            'errorMessage' => 'The SlbSpecType and ListenerProtocol are mismatched.',
          ),
          24 => 
          array (
            'errorCode' => 'InvalidParam.TagValue	',
            'errorMessage' => '%s.',
          ),
          25 => 
          array (
            'errorCode' => 'InvalidParam.TagKey',
            'errorMessage' => '%s.',
          ),
          26 => 
          array (
            'errorCode' => 'SizeLimitExceeded.Tag',
            'errorMessage' => '%s.',
          ),
          27 => 
          array (
            'errorCode' => 'MissingParam.TagKey',
            'errorMessage' => 'The param MissingParam.TagKey is missing.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateLoadBalancerHTTPListenerResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</CreateLoadBalancerHTTPListenerResponse>","errorExample":""}]',
      'title' => '创建HTTP监听',
      'summary' => '创建HTTP监听。',
      'description' => '### 注意事项

 新建的监听的状态为**stopped**。创建完成后，调用[StartLoadBalancerListener](~~27597~~)接口启动监听来转发流量。

### 前提条件

您已经创建传统型负载均衡，具体操作，请参见[CreateLoadBalancer](~~27577~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetLoadBalancerHTTPListenerAttribute' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域ID。

您可以从[地域和可用区](~~27585~~)列表或通过调用[DescribeRegions](~~27584~~)接口获取地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1qjwo61pqz3ah*****',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例前端使用的端口。

取值：**1**~**65535**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '65535',
            'minimum' => '1',
            'example' => '80',
          ),
        ),
        3 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监听的带宽峰值。单位：Mbps。取值：

- **-1**：对于按流量计费的公网负载均衡实例，可以将带宽峰值设置为**-1**，即不限制带宽峰值。

<props="china">- **1**~**5120**（Mbps）：对于按带宽计费的公网负载均衡实例，可以为每个监听设置带宽峰值，但所有监听的带宽峰值之和不能超过实例的带宽峰值。详情参见[共享实例带宽](~~85930~~)。</props>',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '5120',
            'minimum' => '-1',
            'example' => '-1',
          ),
        ),
        4 => 
        array (
          'name' => 'XForwardedFor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否通过`X-Forwarded-For`头字段获取客户端请求的真实IP。取值：
- **on**（默认值）：是。
- **off**：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
          ),
        ),
        5 => 
        array (
          'name' => 'Scheduler',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调度算法。取值：

- **wrr**：权重值越高的后端服务器，被轮询到的概率也越高。

- **rr**：按照访问顺序依次将外部请求依序分发到后端服务器。',
            'type' => 'string',
            'required' => false,
            'example' => 'wrr',
          ),
        ),
        6 => 
        array (
          'name' => 'StickySession',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启会话保持。取值：
- **on**：是。
- **off**：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
          ),
        ),
        7 => 
        array (
          'name' => 'StickySessionType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Cookie的处理方式。取值：

- **insert**：植入Cookie。

 客户端第一次访问时，负载均衡会在返回请求中植入Cookie（即在HTTP/HTTPS响应报文中插入SERVERID），下次客户端携带此Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器上。

- **server**：重写Cookie。
 
 负载均衡发现用户自定义了Cookie，将会对原来的Cookie进行重写，下次客户端携带新的Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器。
 
> 当**StickySession**的值为**on**时，必须指定该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'insert',
          ),
        ),
        8 => 
        array (
          'name' => 'CookieTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Cookie超时时间。

取值：**1**~**86400**秒。

>当**StickySession**为**on**且**StickySessionType**为**insert**时，该参数必选。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '86400',
            'minimum' => '1',
            'example' => '500',
          ),
        ),
        9 => 
        array (
          'name' => 'Cookie',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器上配置的Cookie。

长度为1~200字符，只能包含ASCII英文字母和数字字符，不能包含半角逗号（,）、半角分号（;）或空格，也不能以美元符号（$）开头。
	  

>当**StickySession**为**on**且**StickySessionType**为**server**时，该参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'testCookie',
          ),
        ),
        10 => 
        array (
          'name' => 'HealthCheck',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启健康检查。取值：
- **on**：是。
- **off**：否。
',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
          ),
        ),
        11 => 
        array (
          'name' => 'HealthCheckMethod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监听HTTP类型健康检查的健康检查方法。取值：**head**或**get**。

> **HealthCheck**值为**on**时才会有效。',
            'type' => 'string',
            'required' => false,
            'example' => 'get',
          ),
        ),
        12 => 
        array (
          'name' => 'HealthCheckDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于健康检查的域名，取值：
    
* **$_ip**： 后端服务器的私网IP。当指定了**$_ip**或**HealthCheckDomain**未指定时，负载均衡会使用各后端服务器的私网IP当做健康检查使用的域名。

* **domain**：域名长度为1~80字符，只能包含字母、数字、半角句号（.）和短划线（-）。

>在**HealthCheck**值为**on**时才会有效。',
            'type' => 'string',
            'required' => false,
            'example' => '172.XX.XX.16',
          ),
        ),
        13 => 
        array (
          'name' => 'HealthCheckURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于健康检查的URI。

长度限制为1~80字符，只能使用字母、数字、短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）字符。URI不能只为正斜线（/），但必须以正斜线（/）开头。

>在**HealthCheck**值为**on**时才会有效。',
            'type' => 'string',
            'required' => false,
            'example' => '/test/index.html',
          ),
        ),
        14 => 
        array (
          'name' => 'HealthyThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**fail**判定为**success**。

取值：**2**~**10**。

>在**HealthCheck**值为**on**时才会有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '1',
            'example' => '4',
          ),
        ),
        15 => 
        array (
          'name' => 'UnhealthyThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**success**判定为**fail**。

取值：**2**~**10**。

>在**HealthCheck**值为**on**时才会有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '1',
            'example' => '4',
          ),
        ),
        16 => 
        array (
          'name' => 'HealthCheckTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收来自运行状况检查的响应需要等待的时间。如果后端ECS在指定的时间内没有正确响应，则判定为健康检查失败。在**HealthCheck**值为**on**时才会有效。

取值：**1**~**300**秒。

> 如果**HealthCheckTimeout**的值小于**HealthCheckInterval**的值，则**HealthCheckTimeout**无效，超时时间为**HealthCheckInterval**的值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '300',
            'minimum' => '1',
            'example' => '3',
          ),
        ),
        17 => 
        array (
          'name' => 'HealthCheckInterval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查的时间间隔。

取值：**1**~**50**秒。

>在**HealthCheck**值为**on**时才会有效。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '5',
          ),
        ),
        18 => 
        array (
          'name' => 'HealthCheckConnectPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查使用的端口。

取值：**1**~**65535**。

> 当**HealthCheck**值为**on**时才会有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '65535',
            'minimum' => '-520',
            'example' => '8080',
          ),
        ),
        19 => 
        array (
          'name' => 'HealthCheckHttpCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查正常的HTTP状态码，多个状态码用半角逗号（,）分割。

取值：**http_2xx**、**http_3xx**、**http_4xx**或**http_5xx**。

>在**HealthCheck**值为**on**时才会有效。
',
            'type' => 'string',
            'required' => false,
            'example' => 'http_2xx,http_3xx',
          ),
        ),
        20 => 
        array (
          'name' => 'VServerGroup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用虚拟服务器组。取值：
- **on**：是。
- **off**：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
          ),
        ),
        21 => 
        array (
          'name' => 'VServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟服务器组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rsp-cige6j*****',
          ),
        ),
        22 => 
        array (
          'name' => 'XForwardedFor_SLBIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否通过`SLB-IP`头字段获取客户端请求的VIP（Virtual IP address）。取值：
- **on**：是。
- **off**：否。
',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
          ),
        ),
        23 => 
        array (
          'name' => 'XForwardedFor_SLBID',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否通过`SLB-ID`头字段获取负载均衡实例ID。取值：
- **on**：是。
- **off**：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
          ),
        ),
        24 => 
        array (
          'name' => 'XForwardedFor_proto',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否通过`X-Forwarded-Proto`头字段获取负载均衡实例的监听协议。取值：
- **on**：是。
- **off**：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
          ),
        ),
        25 => 
        array (
          'name' => 'Gzip',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启`Gzip`压缩，对特定文件类型进行压缩。取值：
- **on**：是。
- **off**：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
          ),
        ),
        26 => 
        array (
          'name' => 'AclId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监听绑定的访问策略组ID。

> 当**AclStatus**参数的值为**on**时，该参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'acl-uf60jw******',
          ),
        ),
        27 => 
        array (
          'name' => 'AclType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制类型：

- **white**： 仅转发来自所选访问控制策略组中设置的IP地址或地址段的请求，白名单适用于只允许特定IP访问的场景。设置白名单存在一定业务风险。一旦设置白名单，就只有白名单中的IP可以访问负载均衡监听。
 
 如果开启了白名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。

- **black**： 来自所选访问控制策略组中设置的IP地址或地址段的所有请求都不会转发，黑名单适用于只限制某些特定IP访问的场景。

 如果开启了黑名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。

>当**AclStatus**参数的值为**on**时，该参数有效。',
            'type' => 'string',
            'required' => false,
            'example' => 'white',
          ),
        ),
        28 => 
        array (
          'name' => 'AclStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启访问控制功能。取值：
- **on**：是。
- **off**：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
          ),
        ),
        29 => 
        array (
          'name' => 'IdleTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定连接空闲超时时间，取值范围为**1~60**秒，默认值为**15**秒。

在超时时间内一直没有访问请求，负载均衡会暂时中断当前连接，直到一下次请求来临时重新建立新的连接。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9999',
            'minimum' => '1',
            'example' => '12',
          ),
        ),
        30 => 
        array (
          'name' => 'RequestTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定请求超时时间，取值范围为**1~180**秒，默认值为**60**秒。

在超时时间内后端服务器一直没有响应，负载均衡将放弃等待，给客户端返回HTTP 504错误码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9999',
            'minimum' => '1',
            'example' => '3',
          ),
        ),
        31 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置监听的描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        32 => 
        array (
          'name' => 'XForwardedFor_SLBPORT',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否通过`XForwardedFor_SLBPORT`头字段获取负载均衡实例的监听端口。取值：
- **on**：是。
- **off**：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
          ),
        ),
        33 => 
        array (
          'name' => 'XForwardedFor_ClientSrcPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否通过`XForwardedFor_ClientSrcPort`头字段获取访问负载均衡实例客户端的端口。取值：
- **on**：是。
- **off**：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
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
            'errorCode' => 'IpVersionConflict',
            'errorMessage' => 'The ip version of this LoadBalancer and the Acl is conflict.',
          ),
          1 => 
          array (
            'errorCode' => 'Operation.NotAllowed',
            'errorMessage' => 'Operation Denied. The HTTP listener does not support this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.IdleTimeout',
            'errorMessage' => 'The specified IdleTimeout exceeds the limit.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.RequestTimeout',
            'errorMessage' => 'The specified RequestTimeout exceeds the limit.',
          ),
          4 => 
          array (
            'errorCode' => 'ListenerForwardNotSupport',
            'errorMessage' => 'X-Forward-For is not supported to a ipv6 instance.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.RegionNotSupport',
            'errorMessage' => 'The region does not support the parameter: %s.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationFailed.ServerGroupInUse',
            'errorMessage' => 'The VServerGroup or MasterSlaveServerGroup can not be close for this listener.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidParameter.VServerGroupId',
            'errorMessage' => 'The MasterSlaveServerGroup can not be attached to HTTP or HTTPS listener.',
          ),
          8 => 
          array (
            'errorCode' => 'MissingParam.HealthCheckDomain',
            'errorMessage' => 'The HealthCheckDomain is required when HealthCheckHttpVersion is http1.1.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidParameter.HealthCheckHttpVersion',
            'errorMessage' => 'The param HealthCheckHttpVersion is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'QuotaLimitExceeds.AclAttachedToListener',
            'errorMessage' => '%s.',
          ),
          11 => 
          array (
            'errorCode' => 'QuotaLimitExceeds.TotalAclEntry',
            'errorMessage' => '%s.',
          ),
          12 => 
          array (
            'errorCode' => 'AclListenerOverLimit',
            'errorMessage' => '%s.',
          ),
          13 => 
          array (
            'errorCode' => 'Duplicated.AclEntry',
            'errorMessage' => '%s.',
          ),
          14 => 
          array (
            'errorCode' => 'InvalidParameter.ForwardCode',
            'errorMessage' => 'The specified ForwardCode is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":"{\\"Code\\":\\"InvalidParameter\\",\\"Message\\":\\"The specified parameter is not valid.\\",\\"HostId\\":\\"slb-pop.aliyuncs.com\\",\\"RequestId\\":\\"0669D684-69D8-408E-A4FA-B9011E0F4E66\\"}"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n<SetLoadBalancerHTTPListenerAttributeResponse>\\n\\t<RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</SetLoadBalancerHTTPListenerAttributeResponse>","errorExample":""}]',
      'title' => '修改HTTP监听的配置',
      'summary' => '修改HTTP监听的配置。',
      'description' => '### 前提条件

- 您已经创建传统型负载均衡，具体操作，请参见[CreateLoadBalancer](~~27577~~)。
- 您已经创建HTTP监听，具体操作，请参见[CreateLoadBalancerHTTPListener](~~27592~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeLoadBalancerHTTPListenerAttribute' => 
    array (
      'summary' => '查询HTTP监听配置。',
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
        'abilityTreeCode' => '88577',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslbOMAMKB',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的地域ID。

您可以调用[DescribeRegions](~~25609~~)接口获取地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1uaunez0uho0zf0****',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例前端使用的端口。

取值：**1**~**65535**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '65535',
            'minimum' => '1',
            'example' => '80',
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
              'AclType' => 
              array (
                'description' => '访问控制类型：

- **white**： 仅转发来自所选访问控制策略组中设置的IP地址或地址段的请求，白名单适用于只允许特定IP访问的场景。设置白名单存在一定业务风险。一旦设置白名单，就只有白名单中的IP可以访问负载均衡监听。

 如果开启了白名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。

- **black**： 来自所选访问控制策略组中设置的IP地址或地址段的所有请求都不会转发，黑名单适用于只限制某些特定IP访问的场景。

 如果开启了黑名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。

> 当**AclStatus**参数的值为**on**时，该参数必选。',
                'type' => 'string',
                'example' => 'white',
              ),
              'VServerGroupId' => 
              array (
                'description' => '绑定的服务器组ID。',
                'type' => 'string',
                'example' => 'rsp-cige6j****',
              ),
              'Status' => 
              array (
                'description' => '当前监听的状态。取值：

- **running**：表示监听正常运行。

- **stopped**：表示监听停止。',
                'type' => 'string',
                'example' => 'stopped',
              ),
              'XForwardedFor_ClientSrcPort' => 
              array (
                'description' => '是否通过`XForwardedFor_ClientSrcPort`头字段获取访问负载均衡实例客户端的端口。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'off',
              ),
              'Cookie' => 
              array (
                'description' => '服务器上配置的Cookie。',
                'type' => 'string',
                'example' => 'testCookie',
              ),
              'Gzip' => 
              array (
                'description' => '是否开启`Gzip`压缩，对特定文件类型进行压缩。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'on',
              ),
              'HealthCheckConnectPort' => 
              array (
                'description' => '健康检查的端口。

 > 当**HealthCheck**值为**on**时才会有效。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '8080',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF34B540710',
              ),
              'Description' => 
              array (
                'description' => '自定义监听名称。',
                'type' => 'string',
                'example' => 'HTTP_80',
              ),
              'Bandwidth' => 
              array (
                'description' => '监听的带宽峰值。单位：Mbps。

- **-1**：不限制带宽峰值。

- **1~5120**：监听的带宽峰值，所有监听的带宽峰值之和不能超过实例的带宽峰值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '-1',
              ),
              'HealthCheckTimeout' => 
              array (
                'description' => '每次健康检查响应的超时时间，单位：秒。
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'AclStatus' => 
              array (
                'description' => '是否开启访问控制功能。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'off',
              ),
              'BackendServerPort' => 
              array (
                'description' => '实例后端使用的端口。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '80',
              ),
              'CookieTimeout' => 
              array (
                'description' => 'Cookie超时时间。单位：秒。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '500',
              ),
              'HealthCheckDomain' => 
              array (
                'description' => '用于健康检查的域名。',
                'type' => 'string',
                'example' => 'www.domain.com',
              ),
              'UnhealthyThreshold' => 
              array (
                'description' => '不健康检查阈值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
              ),
              'ForwardPort' => 
              array (
                'description' => 'HTTP至HTTPS的监听转发端口。

> 如果**ListenerForward**的值为**off**，该参数不显示。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '80',
              ),
              'XForwardedFor_SLBID' => 
              array (
                'description' => '是否通过`SLB-ID`头字段获取负载均衡实例ID。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'on',
              ),
              'SecurityStatus' => 
              array (
                'description' => '是否开启安全状态。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'on',
              ),
              'HealthCheckHttpCode' => 
              array (
                'description' => '健康检查正常的HTTP状态码。',
                'type' => 'string',
                'example' => 'http_2xx,http_3xx',
              ),
              'ListenerForward' => 
              array (
                'description' => '是否开启HTTP至HTTPS的监听转发。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'on',
              ),
              'XForwardedFor' => 
              array (
                'description' => '是否开启通过`X-Forwarded-For`头字段的方式获取来访者真实IP。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'on',
              ),
              'IdleTimeout' => 
              array (
                'description' => '指定连接空闲超时时间，单位：秒。

默认值为**15**，取值范围为**1~60**。

在超时时间内一直没有访问请求，负载均衡会暂时中断当前连接，直到下一次请求来临时重新建立新的连接。
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'RequestTimeout' => 
              array (
                'description' => '指定请求超时时间。单位：秒。

默认值为**60**，取值范围为**1~180**。

在超时时间内后端服务器一直没有响应，负载均衡将放弃等待，给客户端返回HTTP 504错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '34',
              ),
              'ListenerPort' => 
              array (
                'description' => '实例前端使用的端口。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '80',
              ),
              'HealthCheckInterval' => 
              array (
                'description' => '健康检查的时间间隔，单位：秒。
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'XForwardedFor_SLBPORT' => 
              array (
                'description' => '是否通过`XForwardedFor_SLBPORT`头字段获取负载均衡实例的监听端口。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'off',
              ),
              'HealthCheckURI' => 
              array (
                'description' => '用于健康检查的URI。

长度限制为1~80，只能使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%），半角问号（?）、井号（#）和and（&）这些字符。URI不能只为正斜线（/），但必须以正斜线（/）开头。',
                'type' => 'string',
                'example' => '/test/index.html',
              ),
              'StickySessionType' => 
              array (
                'description' => 'Cookie的处理方式。

取值：**insert**或**server**。

- **insert**：植入Cookie。

  客户端第一次访问时，负载均衡会在返回请求中植入Cookie（即在HTTP或HTTPS响应报文中插入SERVERID），下次客户端携带此Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器上。

- **server**：重写Cookie。

  负载均衡发现用户自定义了Cookie，将会对原来的Cookie进行重写，下次客户端携带新的Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器。

>当**StickySession**的值为**on**时，必须指定该参数。',
                'type' => 'string',
                'example' => 'insert ',
              ),
              'AclId' => 
              array (
                'description' => '监听绑定的访问策略组ID。

> 当**AclStatus**参数的值为**on**时，返回该参数。',
                'type' => 'string',
                'example' => 'acl-uf60jw******',
              ),
              'Scheduler' => 
              array (
                'description' => '调度算法。取值：

- **wrr**：权重值越高的后端服务器，被轮询到的概率也越高。

- **rr**：按照访问顺序依次将外部请求依序分发到后端服务器。',
                'type' => 'string',
                'example' => 'wrr',
              ),
              'HealthyThreshold' => 
              array (
                'description' => '健康检查阈值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
              ),
              'XForwardedFor_proto' => 
              array (
                'description' => '是否通过`X-Forwarded-Proto`头字段获取负载均衡实例的监听协议。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'on',
              ),
              'XForwardedFor_SLBIP' => 
              array (
                'description' => '是否通过`SLB-IP`头字段获取客户端请求的VIP（Virtual IP address）。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'on',
              ),
              'StickySession' => 
              array (
                'description' => '是否开启会话保持。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'on',
              ),
              'HealthCheckMethod' => 
              array (
                'description' => '监听HTTP类型健康检查的健康检查方法。取值：**head**或**get**。

> **HealthCheck**值为**on**时，返回该参数。',
                'type' => 'string',
                'example' => 'get',
              ),
              'HealthCheck' => 
              array (
                'description' => '是否开启健康检查。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'on',
              ),
              'AclIds' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AclId' => 
                  array (
                    'description' => '访问控制策略组ID。',
                    'type' => 'array',
                  ),
                ),
              ),
              'Rules' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Rule' => 
                  array (
                    'description' => '转发规则描述。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VServerGroupId' => 
                        array (
                          'description' => '转发规则的目标服务器组ID。',
                          'type' => 'string',
                          'example' => 'rsp-uf6w******',
                        ),
                        'Url' => 
                        array (
                          'description' => '访问路径。',
                          'type' => 'string',
                          'example' => '/example',
                        ),
                        'Domain' => 
                        array (
                          'description' => '域名。',
                          'type' => 'string',
                          'example' => 'www.example.com',
                        ),
                        'RuleName' => 
                        array (
                          'description' => '转发规则名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'RuleId' => 
                        array (
                          'description' => '转发规则ID。',
                          'type' => 'string',
                          'example' => '1234',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'LoadBalancerId' => 
              array (
                'description' => '传统型负载均衡实例ID。',
                'type' => 'string',
                'example' => 'lb-bp1uaunez0uho0zf0****',
              ),
              'Tags' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Tag' => 
                  array (
                    'description' => '标签列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '标签列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TagKey' => 
                        array (
                          'description' => '监听的标签键。N的取值范围：**1**~**20**。一旦传入该值，则不允许为空字符串。最多支持64个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                          'type' => 'string',
                          'example' => 'TestKey',
                        ),
                        'TagValue' => 
                        array (
                          'description' => '监听的标签值。N的取值范围：**1**~**20**。一旦传入该值，可以为空字符串。最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                          'type' => 'string',
                          'example' => 'TestValue',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AclType\\": \\"white\\",\\n  \\"VServerGroupId\\": \\"rsp-cige6j****\\",\\n  \\"Status\\": \\"stopped\\",\\n  \\"XForwardedFor_ClientSrcPort\\": \\"off\\",\\n  \\"Cookie\\": \\"testCookie\\",\\n  \\"Gzip\\": \\"on\\",\\n  \\"HealthCheckConnectPort\\": 8080,\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\",\\n  \\"Description\\": \\"HTTP_80\\",\\n  \\"Bandwidth\\": -1,\\n  \\"HealthCheckTimeout\\": 3,\\n  \\"AclStatus\\": \\"off\\",\\n  \\"BackendServerPort\\": 80,\\n  \\"CookieTimeout\\": 500,\\n  \\"HealthCheckDomain\\": \\"www.domain.com\\",\\n  \\"UnhealthyThreshold\\": 4,\\n  \\"ForwardPort\\": 80,\\n  \\"XForwardedFor_SLBID\\": \\"on\\",\\n  \\"SecurityStatus\\": \\"on\\",\\n  \\"HealthCheckHttpCode\\": \\"http_2xx,http_3xx\\",\\n  \\"ListenerForward\\": \\"on\\",\\n  \\"XForwardedFor\\": \\"on\\",\\n  \\"IdleTimeout\\": 2,\\n  \\"RequestTimeout\\": 34,\\n  \\"ListenerPort\\": 80,\\n  \\"HealthCheckInterval\\": 5,\\n  \\"XForwardedFor_SLBPORT\\": \\"off\\",\\n  \\"HealthCheckURI\\": \\"/test/index.html\\",\\n  \\"StickySessionType\\": \\"insert \\",\\n  \\"AclId\\": \\"acl-uf60jw******\\",\\n  \\"Scheduler\\": \\"wrr\\",\\n  \\"HealthyThreshold\\": 4,\\n  \\"XForwardedFor_proto\\": \\"on\\",\\n  \\"XForwardedFor_SLBIP\\": \\"on\\",\\n  \\"StickySession\\": \\"on\\",\\n  \\"HealthCheckMethod\\": \\"get\\",\\n  \\"HealthCheck\\": \\"on\\",\\n  \\"AclIds\\": {\\n    \\"AclId\\": [\\n      \\"\\"\\n    ]\\n  },\\n  \\"Rules\\": {\\n    \\"Rule\\": [\\n      {\\n        \\"VServerGroupId\\": \\"rsp-uf6w******\\",\\n        \\"Url\\": \\"/example\\",\\n        \\"Domain\\": \\"www.example.com\\",\\n        \\"RuleName\\": \\"test\\",\\n        \\"RuleId\\": \\"1234\\"\\n      }\\n    ]\\n  },\\n  \\"LoadBalancerId\\": \\"lb-bp1uaunez0uho0zf0****\\",\\n  \\"Tags\\": {\\n    \\"Tag\\": [\\n      {\\n        \\"TagKey\\": \\"TestKey\\",\\n        \\"TagValue\\": \\"TestValue\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeLoadBalancerHTTPListenerAttributeResponse>\\n    <AclType>white</AclType>\\n    <VServerGroupId>rsp-cige6j****</VServerGroupId>\\n    <Status>stopped</Status>\\n    <Cookie>B490B5EBF6F3CD402E515D22BCDA1598</Cookie>\\n    <Gzip>on</Gzip>\\n    <HealthCheckConnectPort>8080</HealthCheckConnectPort>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <Description>HTTP_80</Description>\\n    <Bandwidth>-1</Bandwidth>\\n    <HealthCheckTimeout>3</HealthCheckTimeout>\\n    <AclStatus>off</AclStatus>\\n    <BackendServerPort>80</BackendServerPort>\\n    <CookieTimeout>500</CookieTimeout>\\n    <HealthCheckDomain>www.domain.com</HealthCheckDomain>\\n    <UnhealthyThreshold>4</UnhealthyThreshold>\\n    <ForwardPort>80</ForwardPort>\\n    <XForwardedFor_SLBID>on</XForwardedFor_SLBID>\\n    <SecurityStatus>on</SecurityStatus>\\n    <HealthCheckHttpCode>http_2xx,http_3xx</HealthCheckHttpCode>\\n    <ListenerForward>on</ListenerForward>\\n    <XForwardedFor>on</XForwardedFor>\\n    <IdleTimeout>2</IdleTimeout>\\n    <RequestTimeout>34</RequestTimeout>\\n    <ListenerPort>80</ListenerPort>\\n    <HealthCheckInterval>5</HealthCheckInterval>\\n    <HealthCheckURI>/test/index.html</HealthCheckURI>\\n    <StickySessionType>insert </StickySessionType>\\n    <AclId>on</AclId>\\n    <Scheduler>wrr</Scheduler>\\n    <HealthyThreshold>4</HealthyThreshold>\\n    <XForwardedFor_proto>on</XForwardedFor_proto>\\n    <XForwardedFor_SLBIP>on</XForwardedFor_SLBIP>\\n    <StickySession>on</StickySession>\\n    <HealthCheckMethod>get</HealthCheckMethod>\\n    <HealthCheck>on</HealthCheck>\\n    <Rules>\\n        <VServerGroupId>123</VServerGroupId>\\n        <Url>/example</Url>\\n        <Domain>www.example.com</Domain>\\n        <RuleName>test</RuleName>\\n        <RuleId>1234</RuleId>\\n    </Rules>\\n    <LoadBalancerId>lb-bp1uaunez0uho0zf0****</LoadBalancerId>\\n    <Tags>\\n        <TagKey>TestKey</TagKey>\\n        <TagValue>TestValue</TagValue>\\n    </Tags>\\n</DescribeLoadBalancerHTTPListenerAttributeResponse>","errorExample":""}]',
      'title' => '查询HTTP监听配置',
      'description' => '## 前提条件

- 您已经创建传统型负载均衡，具体操作，请参见[CreateLoadBalancer](~~27577~~)。
- 您已经创建HTTP监听，具体操作，请参见[CreateLoadBalancerHTTPListener](~~27592~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateLoadBalancerHTTPSListener' => 
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
            'description' => '传统型负载均衡实例的地域ID。

您可以从[地域和可用区](~~40654~~)列表或通过调用[DescribeRegions](~~25609~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1o94dp5i6earr****',
          ),
        ),
        2 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监听的带宽峰值。单位：Mbps。

取值范围：

- **-1**：对于按流量计费的公网负载均衡实例，可以将带宽峰值设置为**-1**，即不限制带宽峰值。

<props="china">

- **1**~**5120**： 对于按带宽计费的公网负载均衡实例，可以设置每个监听的带宽峰值，但所有监听的带宽峰值之和不能超过实例的带宽峰值。
</props>',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '5120',
            'minimum' => '-1',
            'example' => '-1',
          ),
        ),
        3 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例前端使用的端口。

取值范围：**1**~**65535**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '65535',
            'minimum' => '1',
            'example' => '80',
          ),
        ),
        4 => 
        array (
          'name' => 'BackendServerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例后端使用的端口，取值范围：**1**~**65535**。

如果不使用服务器组（不指定VServerGroupId），则该参数必选。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '65535',
            'minimum' => '1',
            'example' => '80',
          ),
        ),
        5 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'allowEmptyValue' => true,
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '监听的标签键。N的取值范围：**1**~**20**。一旦传入该值，则不允许为空字符串。最多支持64个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '监听的标签值。N的取值范围：**1**~**20**。一旦传入该值，可以为空字符串。最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        6 => 
        array (
          'name' => 'XForwardedFor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否通过`X-Forwarded-For`获取来访者客户端IP。取值：
- **on**：是。
- **off**：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
            'default' => 'on',
          ),
        ),
        7 => 
        array (
          'name' => 'Scheduler',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调度算法。取值：

- **wrr**：权重值越高的后端服务器，被轮询到的次数（概率）也越高。

- **rr**：按照访问顺序依次将外部请求依序分发到后端服务器。',
            'type' => 'string',
            'required' => false,
            'example' => 'wrr',
            'default' => 'wrr',
          ),
        ),
        8 => 
        array (
          'name' => 'StickySession',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启会话保持。取值：
- **on**：是。
- **off**：否。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'on',
          ),
        ),
        9 => 
        array (
          'name' => 'StickySessionType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Cookie的处理方式。取值：**insert**或**server**。

- **insert**：植入Cookie。

 客户端第一次访问时，负载均衡会在返回请求中植入Cookie（即在HTTP/HTTPS响应报文中插入SERVERID），下次客户端携带此Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器上。 

- **server**：重写Cookie。

 负载均衡发现用户自定义了Cookie，将会对原来的Cookie进行重写，下次客户端携带新的Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器。

> 当**StickySession**的值为**on**时，必须指定该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'insert ',
          ),
        ),
        10 => 
        array (
          'name' => 'CookieTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Cookie超时时间。单位：秒。

取值：**1**~**86400**。

>当**StickySession**为**on**且**StickySessionType**为**insert**时，该参数必选。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '86400',
            'minimum' => '1',
            'example' => '500',
          ),
        ),
        11 => 
        array (
          'name' => 'Cookie',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器上配置的Cookie。

长度为1~200个字符，只能包含ASCII英文字母和数字字符，不能包含半角逗号（,）、半角分号（;）或空格，也不能以美元符号（$）开头。

>当**StickySession**为**on**且**StickySessionType**为**server**时，该参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'testCookie',
          ),
        ),
        12 => 
        array (
          'name' => 'HealthCheck',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启健康检查。取值：
- **on**：是。
- **off** ：否。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'on',
          ),
        ),
        13 => 
        array (
          'name' => 'HealthCheckMethod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监听HTTP类型健康检查的健康检查方法。取值：**head**或**get**。

> **HealthCheck**值为**on**时才会有效。',
            'type' => 'string',
            'required' => false,
            'example' => 'get',
          ),
        ),
        14 => 
        array (
          'name' => 'HealthCheckDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于健康检查的域名。取值：

* **$_ip**： 后端服务器的私网IP。当指定了IP或该参数未指定时，负载均衡会使用各后端服务器的私网IP当做健康检查使用的域名。
	
    
* **domain**：域名长度为1~80个字符，只能包含英文字母、数字、半角句号（.）和短划线（-）。

> 在**HealthCheck**值为**on**时才会有效。
',
            'type' => 'string',
            'required' => false,
            'example' => '172.XX.XX.16',
          ),
        ),
        15 => 
        array (
          'name' => 'HealthCheckURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于健康检查的URI。

URI长度为1~80个字符，可包含英文字母、数字和`-/.%?#&`这些特殊字符。URI不能只为`/`，但必须以`/`开头。

> 在**HealthCheck**值为**on**时才会有效。
',
            'type' => 'string',
            'required' => false,
            'example' => '/test/index.html',
          ),
        ),
        16 => 
        array (
          'name' => 'HealthyThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**fail**判定为**success**。

取值：**2**~**10**。

> 在**HealthCheck**值为**on**时才会有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '1',
            'example' => '4',
          ),
        ),
        17 => 
        array (
          'name' => 'UnhealthyThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**success**判定为**fail**。

取值：**2**~**10**。

> 在**HealthCheck**值为**on**时才会有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '1',
            'example' => '4',
          ),
        ),
        18 => 
        array (
          'name' => 'HealthCheckTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收来自运行状况检查的响应需要等待的时间。如果后端ECS在指定的时间内没有正确响应，则判定为健康检查失败。单位：秒。取值：**1**~**300**。

- 如果**HealthCheckTimeout**的值小于**HealthCheckInterval**的值，则**HealthCheckTimeout**无效，超时时间为**HealthCheckInterval**的值。
- 在**HealthCheck**值为**on**时才会有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '300',
            'minimum' => '1',
            'example' => '3',
          ),
        ),
        19 => 
        array (
          'name' => 'HealthCheckConnectPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查使用的端口。

取值：**1**~**65535**。

> 当**HealthCheck**值为**on**时才会有效。

	',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '65535',
            'minimum' => '-520',
            'example' => '8080',
          ),
        ),
        20 => 
        array (
          'name' => 'HealthCheckInterval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查的时间间隔。单位：秒。

取值：**1**~**50**。

> 在**HealthCheck**值为**on**时才会有效。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '5',
          ),
        ),
        21 => 
        array (
          'name' => 'HealthCheckHttpCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查正常的HTTP状态码，多个状态码用半角逗号（,）分割。

取值：**http\\_2xx**、**http\\_3xx**、**http\\_4xx**或**http\\_5xx**。

> 在**HealthCheck**值为**on**时才会有效。
',
            'type' => 'string',
            'required' => false,
            'example' => 'http_2xx,http_3xx',
          ),
        ),
        22 => 
        array (
          'name' => 'ServerCertificateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器证书的ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'idkp-123-cn-test-****',
          ),
        ),
        23 => 
        array (
          'name' => 'VServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rsp-cige6j5e7p****',
          ),
        ),
        24 => 
        array (
          'name' => 'CACertificateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'CA证书ID。

若既上传CA证书又上传服务器证书，即采用双向认证。

若用户只上传服务器证书，即为单向认证。',
            'type' => 'string',
            'required' => false,
            'example' => '139a00604ad-cn-east-hangzh****',
          ),
        ),
        25 => 
        array (
          'name' => 'XForwardedFor_SLBIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否通过`SLB-IP`头字段获取来访者的VIP（Virtual IP address）。取值：
- **on**：是。
- **off** ：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
            'default' => 'off',
          ),
        ),
        26 => 
        array (
          'name' => 'XForwardedFor_SLBID',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否通过`SLB-ID`头字段获取SLB实例ID。取值：
- **on**：是。
- **off** ：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
            'default' => 'off',
          ),
        ),
        27 => 
        array (
          'name' => 'XForwardedFor_proto',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否通过`X-Forwarded-Proto`头字段获取SLB的监听协议。取值：
- **on**：是。
- **off** ：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
            'default' => 'off',
          ),
        ),
        28 => 
        array (
          'name' => 'Gzip',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启`Gzip`压缩，对特定文件类型进行压缩。取值：
- **on**：是。
- **off** ：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
            'default' => 'on',
          ),
        ),
        29 => 
        array (
          'name' => 'AclId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监听绑定的访问策略组ID。

>当**AclStatus**参数的值为**on**时，该参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'acl-a2do9e413e0spzasx****',
          ),
        ),
        30 => 
        array (
          'name' => 'AclType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制类型。取值：

- **white**：仅转发来自所选访问控制策略组中设置的IP地址或地址段的请求，白名单适用于只允许特定IP访问的场景。设置白名单存在一定业务风险。一旦设置白名单，就只有白名单中的IP可以访问负载均衡监听。
 
 如果开启了白名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。

- **black**：来自所选访问控制策略组中设置的IP地址或地址段的所有请求都不会转发，黑名单适用于只限制某些特定IP访问的场景。

 如果开启了黑名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。

>当**AclStatus**参数的值为**on**时，该参数有效。',
            'type' => 'string',
            'required' => false,
            'example' => 'white',
          ),
        ),
        31 => 
        array (
          'name' => 'AclStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启访问控制功能。取值：
- **on**：是。
- **off** ：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
          ),
        ),
        32 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义监听名称。

长度限制为1~256个字符，支持中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）。',
            'type' => 'string',
            'required' => false,
            'example' => 'HTTPS_443',
          ),
        ),
        33 => 
        array (
          'name' => 'IdleTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定连接空闲超时时间，取值范围为**1~60**，默认值为**15**。单位：秒。

在超时时间内一直没有访问请求，负载均衡会暂时中断当前连接，直到一下次请求来临时重新建立新的连接。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9999',
            'minimum' => '1',
            'example' => '12',
          ),
        ),
        34 => 
        array (
          'name' => 'RequestTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定请求超时时间，取值范围为**1~180**，默认值为**60**。单位：秒。

在超时时间内后端服务器一直没有响应，负载均衡将放弃等待，给客户端返回HTTP 504错误码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9999',
            'minimum' => '1',
            'example' => '23',
          ),
        ),
        35 => 
        array (
          'name' => 'EnableHttp2',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启HTTP2特性。取值：
- **on**：是。
- **off** ：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
          ),
        ),
        36 => 
        array (
          'name' => 'TLSCipherPolicy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全策略包含HTTPS可选的TLS协议版本和配套的加密算法套件。

- **tls\\_cipher\\_policy\\_1_0**：

  支持TLS版本： TLSv1.0、TLSv1.1和TLSv1.2。

  支持加密算法套件：ECDHE-RSA-AES128-GCM-SHA256、ECDHE-RSA-AES256-GCM-SHA384、ECDHE-RSA-AES128-SHA256、ECDHE-RSA-AES256-SHA384、AES128-GCM-SHA256、AES256-GCM-SHA384、AES128-SHA256、AES256-SHA256、ECDHE-RSA-AES128-SHA、ECDHE-RSA-AES256-SHA、AES128-SHA、AES256-SHA和DES-CBC3-SHA。

- **tls\\_cipher\\_policy\\_1\\_1**：

  支持TLS版本： TLSv1.1和TLSv1.2。

  支持加密算法套件：ECDHE-RSA-AES128-GCM-SHA256、ECDHE-RSA-AES256-GCM-SHA384、ECDHE-RSA-AES128-SHA256、ECDHE-RSA-AES256-SHA384、AES128-GCM-SHA256、AES256-GCM-SHA384、AES128-SHA256、AES256-SHA256、ECDHE-RSA-AES128-SHA、ECDHE-RSA-AES256-SHA、AES128-SHA、AES256-SHA和DES-CBC3-SHA。

- **tls\\_cipher\\_policy\\_1_2**

  支持TLS版本：TLSv1.2。

  支持加密算法套件：ECDHE-RSA-AES128-GCM-SHA256、ECDHE-RSA-AES256-GCM-SHA384、ECDHE-RSA-AES128-SHA256、ECDHE-RSA-AES256-SHA384、AES128-GCM-SHA256、AES256-GCM-SHA384、AES128-SHA256、AES256-SHA256、ECDHE-RSA-AES128-SHA、ECDHE-RSA-AES256-SHA、AES128-SHA、AES256-SHA和DES-CBC3-SHA。

- **tls\\_cipher\\_policy\\_1\\_2_strict**

  支持TLS版本：TLSv1.2。

  支持加密算法套件：ECDHE-RSA-AES128-GCM-SHA256、ECDHE-RSA-AES256-GCM-SHA384、ECDHE-RSA-AES128-SHA256、ECDHE-RSA-AES256-SHA384、ECDHE-RSA-AES128-SHA和ECDHE-RSA-AES256-SHA。

- **tls\\_cipher\\_policy\\_1\\_2\\_strict_with_1_3**
 
   支持TLS版本：TLSv1.2及TLSv1.3。
 
   支持的加密算法套件：TLS_AES_128_GCM_SHA256、TLS_AES_256_GCM_SHA384、TLS_CHACHA20_POLY1305_SHA256、TLS_AES_128_CCM_SHA256、TLS_AES_128_CCM_8_SHA256、ECDHE-ECDSA-AES128-GCM-SHA256、ECDHE-ECDSA-AES256-GCM-SHA384、ECDHE-ECDSA-AES128-SHA256、ECDHE-ECDSA-AES256-SHA384、ECDHE-RSA-AES128-GCM-SHA256、ECDHE-RSA-AES256-GCM-SHA384、ECDHE-RSA-AES128-SHA256、ECDHE-RSA-AES256-SHA384、ECDHE-ECDSA-AES128-SHA、ECDHE-ECDSA-AES256-SHA、ECDHE-RSA-AES128-SHA、ECDHE-RSA-AES256-SHA。 ',
            'type' => 'string',
            'required' => false,
            'example' => 'tls_cipher_policy_1_1',
          ),
        ),
        37 => 
        array (
          'name' => 'XForwardedFor_SLBPORT',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否通过`XForwardedFor_SLBPORT`头字段获取负载均衡实例的监听端口。取值：
- **on**：是。
- **off**：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
          ),
        ),
        38 => 
        array (
          'name' => 'XForwardedFor_ClientSrcPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否通过`XForwardedFor_ClientSrcPort`头字段获取访问负载均衡实例客户端的端口。取值：
- **on**：是。
- **off**：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
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
            'errorCode' => 'ParamDuplicateError',
            'errorMessage' => 'The specified parameter value of XForwardedFor_ClientCertSubjectDNAlias is duplicate. Please change to a different one.',
          ),
          1 => 
          array (
            'errorCode' => 'IpVersionConflict',
            'errorMessage' => 'The ip version of this LoadBalancer and the Acl is conflict.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.IdleTimeout',
            'errorMessage' => 'The specified IdleTimeout exceeds the limit.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.RequestTimeout',
            'errorMessage' => 'The specified RequestTimeout exceeds the limit.',
          ),
          4 => 
          array (
            'errorCode' => 'ListenerForwardNotSupport',
            'errorMessage' => 'X-Forward-For is not supported to a ipv6 instance.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.RegionNotSupport',
            'errorMessage' => 'The region does not support the parameter: %s.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParameter.SpecNotSupport',
            'errorMessage' => 'The loadBalancer of shared spec does not support the parameter: %s.',
          ),
          7 => 
          array (
            'errorCode' => 'ListenerProcessing',
            'errorMessage' => 'A previous configuration of the listener is pending,please try again later.',
          ),
          8 => 
          array (
            'errorCode' => 'Certkey.Forbidden',
            'errorMessage' => 'The specified certkey is not owned by the current user.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidParameter.ListenerPortConflict',
            'errorMessage' => 'There is conflict listener port exists.',
          ),
          10 => 
          array (
            'errorCode' => 'ResourceNotAvailible.HttpsListener',
            'errorMessage' => 'The specified Zone did not have enough resource.',
          ),
          11 => 
          array (
            'errorCode' => 'AclNotExist',
            'errorMessage' => 'Acl does not exist.',
          ),
          12 => 
          array (
            'errorCode' => 'OperationUnsupported.CreateLoadBalancerLayer7Listener',
            'errorMessage' => 'The slb instance does not support create HTTP or HTTPS listener.',
          ),
          13 => 
          array (
            'errorCode' => 'InvalidParameter.VServerGroupId',
            'errorMessage' => 'The MasterSlaveServerGroup can not be attached to HTTP or HTTPS listener.',
          ),
          14 => 
          array (
            'errorCode' => 'MissingParam.HealthCheckDomain',
            'errorMessage' => 'The HealthCheckDomain is required when HealthCheckHttpVersion is http1.1.',
          ),
          15 => 
          array (
            'errorCode' => 'InvalidParameter.HealthCheckHttpVersion',
            'errorMessage' => 'The param HealthCheckHttpVersion is invalid.',
          ),
          16 => 
          array (
            'errorCode' => 'QuotaLimitExceeds.AclAttachedToListener',
            'errorMessage' => '%s.',
          ),
          17 => 
          array (
            'errorCode' => 'QuotaLimitExceeds.TotalAclEntry',
            'errorMessage' => '%s.',
          ),
          18 => 
          array (
            'errorCode' => 'AclListenerOverLimit',
            'errorMessage' => '%s.',
          ),
          19 => 
          array (
            'errorCode' => 'Duplicated.AclEntry',
            'errorMessage' => '%s.',
          ),
          20 => 
          array (
            'errorCode' => 'CertificateNotExist',
            'errorMessage' => 'The specified CertificateId does not exist.',
          ),
          21 => 
          array (
            'errorCode' => 'OperationFailed.InsufficientResources',
            'errorMessage' => 'The loadbalancer does not support this operation because of insufficient resources.',
          ),
          22 => 
          array (
            'errorCode' => 'InvalidTLSPolicyId.NotExist',
            'errorMessage' => 'The specified TLS cipher policy does not exist.',
          ),
          23 => 
          array (
            'errorCode' => 'TLSPolicyConfiguring',
            'errorMessage' => 'The specified TLS cipher policy is configuring.',
          ),
          24 => 
          array (
            'errorCode' => 'TLSCipherPolicyVipRelationOverLimit',
            'errorMessage' => 'The number of listeners associated with a policy has exceeded.',
          ),
          25 => 
          array (
            'errorCode' => 'CertificateTypeMismatched',
            'errorMessage' => 'The certificate type does not match.',
          ),
          26 => 
          array (
            'errorCode' => 'MissingParam.ServerCertificates',
            'errorMessage' => 'Server certificates are required.',
          ),
          27 => 
          array (
            'errorCode' => 'TooManyCertificates',
            'errorMessage' => 'The number of certificates must not be greater than one.',
          ),
          28 => 
          array (
            'errorCode' => 'CnCertificateNotSupport',
            'errorMessage' => 'The cn certificate is not support.',
          ),
          29 => 
          array (
            'errorCode' => 'InvalidParam.CertificateBindingType',
            'errorMessage' => 'The param CertificateBindingType is invalid.',
          ),
          30 => 
          array (
            'errorCode' => 'InvalidParamSize.ServerCertificates',
            'errorMessage' => 'The size of param ServerCertificates is invalid.',
          ),
          31 => 
          array (
            'errorCode' => 'TooManyCertificates.ServerCertificates',
            'errorMessage' => 'The number of certificates must not be greater than one.',
          ),
          32 => 
          array (
            'errorCode' => 'SPEC_NOT_SUPPORT_PARAMETER',
            'errorMessage' => 'Share spec does not support the feature.',
          ),
          33 => 
          array (
            'errorCode' => 'LbNotSupportTcpssl',
            'errorMessage' => 'You cannot create a TCP SSL type listener for the specified load balancer.',
          ),
          34 => 
          array (
            'errorCode' => 'LbSupportTcpsslOnly',
            'errorMessage' => 'The specified load balancer supports TCP SSL type listener only.',
          ),
          35 => 
          array (
            'errorCode' => 'ListenerNotSupportRule',
            'errorMessage' => 'You cannot create a rule for the specified listener.',
          ),
          36 => 
          array (
            'errorCode' => 'Mismatch.SlbSpecTypeAndListenerProtocol',
            'errorMessage' => 'The SlbSpecType and ListenerProtocol are mismatched.',
          ),
          37 => 
          array (
            'errorCode' => 'InvalidParam.TagValue	',
            'errorMessage' => '%s.',
          ),
          38 => 
          array (
            'errorCode' => 'InvalidParam.TagKey',
            'errorMessage' => '%s.',
          ),
          39 => 
          array (
            'errorCode' => 'SizeLimitExceeded.Tag',
            'errorMessage' => '%s.',
          ),
          40 => 
          array (
            'errorCode' => 'MissingParam.TagKey',
            'errorMessage' => 'The param MissingParam.TagKey is missing.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Certificate',
            'errorMessage' => 'The specified resource is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateLoadBalancerHTTPSListenerResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</CreateLoadBalancerHTTPSListenerResponse>","errorExample":""}]',
      'title' => '创建HTTPS监听',
      'summary' => '创建HTTPS监听。',
      'description' => '### 注意事项

新建的监听的状态为**stopped**。创建完成后，调用[StartLoadBalancerListener](~~27597~~)接口启动监听来转发流量。

### 前提条件

您已经创建传统型负载均衡，具体操作，请参见[CreateLoadBalancer](~~27577~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetLoadBalancerHTTPSListenerAttribute' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的地域ID。

您可以调用[DescribeRegions](~~25609~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-sjhfdji****',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例前端使用的端口。

取值：**1**~**65535**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '65535',
            'minimum' => '1',
            'example' => '80',
          ),
        ),
        3 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监听的带宽峰值。单位：Mbps。

取值：

- **-1**：不限制带宽峰值。

<props="china"> 

- **1**~**5120**：监听的带宽峰值，所有监听的带宽峰值之和不能超过实例的带宽峰值。
</props>',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '5120',
            'minimum' => '-1',
            'example' => '-1',
          ),
        ),
        4 => 
        array (
          'name' => 'XForwardedFor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启通过`X-Forwarded-For`头字段获取来访者真实IP。取值：
- **on**：是。
- **off**：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
          ),
        ),
        5 => 
        array (
          'name' => 'Scheduler',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调度算法。取值：

- **wrr**：权重值越高的后端服务器，被轮询到的-概率也越高。

- **rr**：按照访问顺序依次将外部请求依序分发到后端服务器。',
            'type' => 'string',
            'required' => false,
            'example' => 'wrr',
          ),
        ),
        6 => 
        array (
          'name' => 'StickySession',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启会话保持。取值：
- **on**：是。
- **off**：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
          ),
        ),
        7 => 
        array (
          'name' => 'StickySessionType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'cookie的处理方式。取值：

* **insert**：植入Cookie。

 客户端第一次访问时，负载均衡会在返回请求中植入Cookie（即在HTTP/HTTPS响应报文中插入SERVERID），下次客户端携带此Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器上。

* **server**：重写Cookie。

 负载均衡发现用户自定义了Cookie，将会对原来的Cookie进行重写，下次客户端携带新的Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器。

> 当**StickySession**的值为**on**时，必须指定该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'insert',
          ),
        ),
        8 => 
        array (
          'name' => 'CookieTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Cookie超时时间。

取值：**1**~**86400**（秒）。

> 当**StickySession**为**on**且**StickySessionType**为**insert**时，该参数必选。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '86400',
            'minimum' => '1',
            'example' => '500',
          ),
        ),
        9 => 
        array (
          'name' => 'Cookie',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器上配置的Cookie。

长度为1~200个字符，只能包含ASCII英文字母和数字字符，不能包含半角逗号（,）、半角分号（;）或空格，不能以$开头。

>当**StickySession**为**on**且**StickySessionType**为**server**时，该参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'testCookie',
          ),
        ),
        10 => 
        array (
          'name' => 'HealthCheck',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启健康检查。取值：
- **on**：是。
- **off**：否。
',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
          ),
        ),
        11 => 
        array (
          'name' => 'HealthCheckMethod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监听HTTP类型健康检查的健康检查方法。取值：**head**或**get**。

> **HealthCheck**值为**on**时才会有效。',
            'type' => 'string',
            'required' => false,
            'example' => 'get',
          ),
        ),
        12 => 
        array (
          'name' => 'HealthCheckDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于健康检查的域名，取值：

* **$_ip**： 后端服务器的私网IP。当指定了IP或该参数未指定时，负载均衡会使用各后端服务器的私网IP当做健康检查使用的域名。

* **domain**：域名长度为1~80字符，只能包含字母、数字、半角句号（.）和短划线（-）。

> 在**HealthCheck**值为**on**时才会有效。',
            'type' => 'string',
            'required' => false,
            'example' => '172.XX.XX.16',
          ),
        ),
        13 => 
        array (
          'name' => 'HealthCheckURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于健康检查的URI。

长度限制为1~80字符，支持英文字母、数字、短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）字符。URI不能只包含正斜线（/），但必须以正斜线（/）开头。

> 在**HealthCheck**值为**on**时才会有效。',
            'type' => 'string',
            'required' => false,
            'example' => '/test/index.html',
          ),
        ),
        14 => 
        array (
          'name' => 'HealthyThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**fail**判定为**success**。

取值：**2**~**10**。

>在**HealthCheck**值为**on**时才会有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '1',
            'example' => '4',
          ),
        ),
        15 => 
        array (
          'name' => 'UnhealthyThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**success**判定为**fail**。

取值：**2**~**10**。

>在**HealthCheck**值为**on**时才会有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '1',
            'example' => '4',
          ),
        ),
        16 => 
        array (
          'name' => 'HealthCheckTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收来自运行状况检查的响应需要等待的时间。如果后端ECS在指定的时间内没有正确响应，则判定为健康检查失败。单位：秒。取值：**1**~**300**。



- 如果**HealthCheckTimeout**的值小于**HealthCheckInterval**的值，则**HealthCheckTimeout**无效，超时时间为**HealthCheckInterval**的值。
- 在**HealthCheck**值为**on**时才会有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '300',
            'minimum' => '1',
            'example' => '3',
          ),
        ),
        17 => 
        array (
          'name' => 'HealthCheckInterval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查的时间间隔。单位：秒。

取值：**1**~**50**。

> 在**HealthCheck**值为**on**时才会有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '5',
          ),
        ),
        18 => 
        array (
          'name' => 'HealthCheckConnectPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查使用的端口。

取值：**1**~**65535**。

> 当**HealthCheck**值为**on**时才会有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '65535',
            'minimum' => '-520',
            'example' => '8080',
          ),
        ),
        19 => 
        array (
          'name' => 'HealthCheckHttpCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查正常的HTTP状态码，多个状态码用半角逗号（,）分割。

取值：**http_2xx**或**http_3xx**或**http_4xx**或**http_5xx**。

> 在**HealthCheck**值为**on**时才会有效。',
            'type' => 'string',
            'required' => false,
            'example' => 'http_2xx,http_3xx',
          ),
        ),
        20 => 
        array (
          'name' => 'ServerCertificateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器证书的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'idkp-123-cn-te****',
          ),
        ),
        21 => 
        array (
          'name' => 'CACertificateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'CA证书ID。

- 若既上传CA证书又上传服务器证书，即采用双向认证。

- 若用户只上传服务器证书，即为单向认证。',
            'type' => 'string',
            'required' => false,
            'example' => '139a00604ad-cn-east-****',
          ),
        ),
        22 => 
        array (
          'name' => 'VServerGroup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用服务器组。取值：
- **on**：是。
- **off**：否。
',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
          ),
        ),
        23 => 
        array (
          'name' => 'VServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟服务器组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rsp-cige6j****',
          ),
        ),
        24 => 
        array (
          'name' => 'XForwardedFor_SLBIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否通过`SLB-IP`头字段获取客户端请求的VIP（Virtual IP address）。取值：
- **on**：是。
- **off**：否。
',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
          ),
        ),
        25 => 
        array (
          'name' => 'XForwardedFor_SLBID',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否通过`SLB-ID`头字段获取负载均衡实例ID。取值：
- **on**：是。
- **off**：否。
',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
          ),
        ),
        26 => 
        array (
          'name' => 'XForwardedFor_proto',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否通过`X-Forwarded-Proto`头字段获取负载均衡实例的监听协议。取值：
- **on**：是。
- **off**：否。
',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
          ),
        ),
        27 => 
        array (
          'name' => 'Gzip',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启`Gzip`压缩，对特定文件类型进行压缩。取值：
- **on**：是。
- **off**：否。
',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
          ),
        ),
        28 => 
        array (
          'name' => 'AclId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监听绑定的访问策略组ID。

当**AclStatus**参数的值为**on**时，该参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'acl-a2do9e413e0spzasx****',
          ),
        ),
        29 => 
        array (
          'name' => 'AclType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制类型：

- **white**： 仅转发来自所选访问控制策略组中设置的IP地址或地址段的请求，白名单适用于只允许特定IP访问的场景。设置白名单存在一定业务风险。一旦设置白名单，就只有白名单中的IP可以访问负载均衡监听。
 
 如果开启了白名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。

- **black**： 来自所选访问控制策略组中设置的IP地址或地址段的所有请求都不会转发，黑名单适用于只限制某些特定IP访问的场景。

 如果开启了黑名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。

>当**AclStatus**参数的值为**on**时，该参数有效。',
            'type' => 'string',
            'required' => false,
            'example' => 'white',
          ),
        ),
        30 => 
        array (
          'name' => 'AclStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启访问控制功能。取值：
- **on**：是。
- **off**：否。
',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
          ),
        ),
        31 => 
        array (
          'name' => 'IdleTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定连接空闲超时时间，取值范围为**1~60**秒，默认值为**15**秒。

在超时时间内一直没有访问请求，负载均衡会暂时中断当前连接，直到一下次请求来临时重新建立新的连接。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9999',
            'minimum' => '1',
            'example' => '23',
          ),
        ),
        32 => 
        array (
          'name' => 'RequestTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定请求超时时间，取值范围为**1~180**秒，默认值为**60**秒。

在超时时间内后端服务器一直没有响应，负载均衡将放弃等待，给客户端返回HTTP 504错误码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9999',
            'minimum' => '1',
            'example' => '223',
          ),
        ),
        33 => 
        array (
          'name' => 'EnableHttp2',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启`HTTP 2.0`特性。取值：
- **on**：是。
- **off**：否。
',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
          ),
        ),
        34 => 
        array (
          'name' => 'TLSCipherPolicy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全策略包含HTTPS可选的TLS协议版本和配套的加密算法套件。

- **tls_cipher_policy_1_0**：

  支持TLS版本： TLSv1.0、TLSv1.1和TLSv1.2。

  支持加密算法套件：ECDHE-RSA-AES128-GCM-SHA256、ECDHE-RSA-AES256-GCM-SHA384、ECDHE-RSA-AES128-SHA256、ECDHE-RSA-AES256-SHA384、AES128-GCM-SHA256、AES256-GCM-SHA384、AES128-SHA256、AES256-SHA256、ECDHE-RSA-AES128-SHA、ECDHE-RSA-AES256-SHA、AES128-SHA、AES256-SHA和DES-CBC3-SHA。

- **tls_cipher_policy_1_1**：

  支持TLS版本： TLSv1.1和TLSv1.2。

  支持加密算法套件：ECDHE-RSA-AES128-GCM-SHA256、ECDHE-RSA-AES256-GCM-SHA384、ECDHE-RSA-AES128-SHA256、ECDHE-RSA-AES256-SHA384、AES128-GCM-SHA256、AES256-GCM-SHA384、AES128-SHA256、AES256-SHA256、ECDHE-RSA-AES128-SHA、ECDHE-RSA-AES256-SHA、AES128-SHA、AES256-SHA和DES-CBC3-SHA。

- **tls_cipher_policy_1_2**

  支持TLS版本：TLSv1.2。

  支持加密算法套件：ECDHE-RSA-AES128-GCM-SHA256、ECDHE-RSA-AES256-GCM-SHA384、ECDHE-RSA-AES128-SHA256、ECDHE-RSA-AES256-SHA384、AES128-GCM-SHA256、AES256-GCM-SHA384、AES128-SHA256、AES256-SHA256、ECDHE-RSA-AES128-SHA、ECDHE-RSA-AES256-SHA、AES128-SHA、AES256-SHA和DES-CBC3-SHA。

- **tls_cipher_policy_1_2_strict**

  支持TLS版本：TLSv1.2。

  支持加密算法套件：ECDHE-RSA-AES128-GCM-SHA256、ECDHE-RSA-AES256-GCM-SHA384、ECDHE-RSA-AES128-SHA256、ECDHE-RSA-AES256-SHA384、ECDHE-RSA-AES128-SHA和ECDHE-RSA-AES256-SHA。

- **tls_cipher_policy_1_2_strict_with_1_3**
 
   支持TLS版本：TLSv1.2及TLSv1.3。
 
   支持的加密算法套件：TLS_AES_128_GCM_SHA256、TLS_AES_256_GCM_SHA384、TLS_CHACHA20_POLY1305_SHA256、TLS_AES_128_CCM_SHA256、TLS_AES_128_CCM_8_SHA256、ECDHE-ECDSA-AES128-GCM-SHA256、ECDHE-ECDSA-AES256-GCM-SHA384、ECDHE-ECDSA-AES128-SHA256、ECDHE-ECDSA-AES256-SHA384、ECDHE-RSA-AES128-GCM-SHA256、ECDHE-RSA-AES256-GCM-SHA384、ECDHE-RSA-AES128-SHA256、ECDHE-RSA-AES256-SHA384、ECDHE-ECDSA-AES128-SHA、ECDHE-ECDSA-AES256-SHA、ECDHE-RSA-AES128-SHA、ECDHE-RSA-AES256-SHA。 ',
            'type' => 'string',
            'required' => false,
            'example' => 'tls_cipher_policy_1_2',
          ),
        ),
        35 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义监听名称。

长度限制为1~256个字符，支持中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）。',
            'type' => 'string',
            'required' => false,
            'example' => 'https_80',
          ),
        ),
        36 => 
        array (
          'name' => 'XForwardedFor_SLBPORT',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否通过`XForwardedFor_SLBPORT`头字段获取负载均衡实例的监听端口。取值：
- **on**：是。
- **off**：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
          ),
        ),
        37 => 
        array (
          'name' => 'XForwardedFor_ClientSrcPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否通过`XForwardedFor_ClientSrcPort`头字段获取访问负载均衡实例客户端的端口。取值：
- **on**：是。
- **off**：否。',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
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
            'errorCode' => 'ParamDuplicateError',
            'errorMessage' => 'The specified parameter value of XForwardedFor_ClientCertSubjectDNAlias is duplicate. Please change to a different one.',
          ),
          1 => 
          array (
            'errorCode' => 'IpVersionConflict',
            'errorMessage' => 'The ip version of this LoadBalancer and the Acl is conflict.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.IdleTimeout',
            'errorMessage' => 'The specified IdleTimeout exceeds the limit.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.RequestTimeout',
            'errorMessage' => 'The specified RequestTimeout exceeds the limit.',
          ),
          4 => 
          array (
            'errorCode' => 'ListenerForwardNotSupport',
            'errorMessage' => 'X-Forward-For is not supported to a ipv6 instance.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.RegionNotSupport',
            'errorMessage' => 'The region does not support the parameter: %s.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParameter.SpecNotSupport',
            'errorMessage' => 'The loadBalancer of shared spec does not support the parameter: %s.',
          ),
          7 => 
          array (
            'errorCode' => 'OperationFailed.ServerGroupInUse',
            'errorMessage' => 'The VServerGroup or MasterSlaveServerGroup can not be close for this listener.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidParameter.VServerGroupId',
            'errorMessage' => 'The MasterSlaveServerGroup can not be attached to HTTP or HTTPS listener.',
          ),
          9 => 
          array (
            'errorCode' => 'MissingParam.HealthCheckDomain',
            'errorMessage' => 'The HealthCheckDomain is required when HealthCheckHttpVersion is http1.1.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidParameter.HealthCheckHttpVersion',
            'errorMessage' => 'The param HealthCheckHttpVersion is invalid.',
          ),
          11 => 
          array (
            'errorCode' => 'QuotaLimitExceeds.AclAttachedToListener',
            'errorMessage' => '%s.',
          ),
          12 => 
          array (
            'errorCode' => 'QuotaLimitExceeds.TotalAclEntry',
            'errorMessage' => '%s.',
          ),
          13 => 
          array (
            'errorCode' => 'AclListenerOverLimit',
            'errorMessage' => '%s.',
          ),
          14 => 
          array (
            'errorCode' => 'Duplicated.AclEntry',
            'errorMessage' => '%s.',
          ),
          15 => 
          array (
            'errorCode' => 'CertificateNotExist',
            'errorMessage' => 'The specified CertificateId does not exist.',
          ),
          16 => 
          array (
            'errorCode' => 'InvalidTLSPolicyId.NotExist',
            'errorMessage' => 'The specified TLS cipher policy does not exist.',
          ),
          17 => 
          array (
            'errorCode' => 'TLSPolicyConfiguring',
            'errorMessage' => 'The specified TLS cipher policy is configuring.',
          ),
          18 => 
          array (
            'errorCode' => 'TLSCipherPolicyVipRelationOverLimit',
            'errorMessage' => 'The number of listeners associated with a policy has exceeded.',
          ),
          19 => 
          array (
            'errorCode' => 'TooManyCertificates',
            'errorMessage' => 'The number of certificates must not be greater than one.',
          ),
          20 => 
          array (
            'errorCode' => 'CertificateTypeMismatched',
            'errorMessage' => 'The certificate type does not match.',
          ),
          21 => 
          array (
            'errorCode' => 'MissingParam.ServerCertificates',
            'errorMessage' => 'Server certificates are required.',
          ),
          22 => 
          array (
            'errorCode' => 'CnCertificateNotSupport',
            'errorMessage' => 'The cn certificate is not support.',
          ),
          23 => 
          array (
            'errorCode' => 'InvalidParam.CertificateBindingType',
            'errorMessage' => 'The param CertificateBindingType is invalid.',
          ),
          24 => 
          array (
            'errorCode' => 'InvalidParamSize.ServerCertificates',
            'errorMessage' => 'The size of param ServerCertificates is invalid.',
          ),
          25 => 
          array (
            'errorCode' => 'TooManyCertificates.ServerCertificates',
            'errorMessage' => 'The number of certificates must not be greater than one.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Certificate',
            'errorMessage' => 'The specified resource is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<SetLoadBalancerHTTPSListenerAttributeResponse>\\r\\n<RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\r\\n</SetLoadBalancerHTTPSListenerAttributeResponse>","errorExample":""}]',
      'title' => '修改HTTPS监听的配置',
      'summary' => '修改HTTPS监听的配置。',
      'description' => '- 您已经创建传统型负载均衡，具体操作，请参见[CreateLoadBalancer](~~27577~~)。
- 您已经创建HTTPS监听，具体操作，请参见[CreateLoadBalancerHTTPSListener](~~27593~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeLoadBalancerHTTPSListenerAttribute' => 
    array (
      'summary' => '查询HTTPS监听配置。',
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
        'abilityTreeCode' => '88578',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslb91TBWT',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1mxu5r8lau****',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例前端使用的端口。

取值：**1**~**65535**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '65535',
            'minimum' => '1',
            'example' => '80',
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
              'AclType' => 
              array (
                'description' => '访问控制类型：

* **white**： 仅转发来自所选访问控制策略组中设置的IP地址或地址段的请求，白名单适用于只允许特定IP访问的场景。设置白名单存在一定业务风险。一旦设置白名单，就只有白名单中的IP可以访问负载均衡监听。

 如果开启了白名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。

* **black**： 来自所选访问控制策略组中设置的IP地址或地址段的所有请求都不会转发，黑名单适用于只限制某些特定IP访问的场景。

 如果开启了黑名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。

> 当**AclStatus**参数的值为**on**时，该参数必选。',
                'type' => 'string',
                'example' => 'white',
              ),
              'XForwardedFor_ClientCertClientVerify' => 
              array (
                'description' => '是否通过`XForwardedFor_ClientCertClientVerify`头字段获取对访问负载均衡实例客户端证书的校验结果。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'off',
              ),
              'CACertificateId' => 
              array (
                'description' => 'CA证书ID。',
                'type' => 'string',
                'example' => 'idkp-234-cn-test-0**',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF3********',
              ),
              'HealthCheckConnectPort' => 
              array (
                'description' => '健康检查的端口。

> 当**HealthCheck**值为**on**时才会有效。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '8080',
              ),
              'BackendServerPort' => 
              array (
                'description' => '实例后端使用的端口。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '8080',
              ),
              'CookieTimeout' => 
              array (
                'description' => 'Cookie超时时间。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '500',
              ),
              'HealthCheckDomain' => 
              array (
                'description' => '用于健康检查的域名。',
                'type' => 'string',
                'example' => 'www.test.com',
              ),
              'XForwardedFor' => 
              array (
                'description' => '是否通过`X-Forwarded-For`的方式获取来访者真实IP。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'on',
              ),
              'XForwardedFor_ClientCertFingerprint' => 
              array (
                'description' => '是否通过`XForwardedFor_ClientCertFingerprint`头字段获取访问负载均衡实例客户端证书的指纹。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'off',
              ),
              'IdleTimeout' => 
              array (
                'description' => '指定连接空闲超时时间，取值范围为**1**~**60**，默认值为**15**。单位：秒。

在超时时间内一直没有访问请求，负载均衡会暂时中断当前连接，直到一下次请求来临时重新建立新的连接。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '23',
              ),
              'ListenerPort' => 
              array (
                'description' => '实例前端使用的端口。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '80',
              ),
              'HealthCheckURI' => 
              array (
                'description' => '用于健康检查的URI。',
                'type' => 'string',
                'example' => '/test/index.html',
              ),
              'XForwardedFor_SLBPORT' => 
              array (
                'description' => '是否通过`XForwardedFor_SLBPORT`头字段获取负载均衡实例的监听端口。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'off',
              ),
              'StickySessionType' => 
              array (
                'description' => 'Cookie的处理方式。

取值：**insert**或**server**。

* **insert**：植入Cookie。
  
  
  客户端第一次访问时，负载均衡会在返回请求中植入Cookie，下次客户端携带此Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器上。

* **server**：重写Cookie。
   
 
  负载均衡发现用户自定义了Cookie，将会对原来的Cookie进行重写，下次客户端携带新的Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器。',
                'type' => 'string',
                'example' => 'insert',
              ),
              'Scheduler' => 
              array (
                'description' => '调度算法。取值：**wrr**或**rr**。

* **wrr**：权重值越高的后端服务器，被轮询到的概率也越高。

* **rr**：按照访问顺序依次将外部请求依序分发到后端服务器。',
                'type' => 'string',
                'example' => 'wrr',
              ),
              'XForwardedFor_proto' => 
              array (
                'description' => '是否通过`X-Forwarded-Proto`头字段获取负载均衡实例的监听协议。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'on',
              ),
              'HealthCheckMethod' => 
              array (
                'description' => '监听HTTP类型健康检查的健康检查方法。取值：**head**或**get**。

> **HealthCheck**值为**on**时，该参数才会显示。',
                'type' => 'string',
                'example' => 'get',
              ),
              'TLSCipherPolicy' => 
              array (
                'description' => '只有性能保障型实例才可以指定TLSCipherPolicy参数，每种policy定义了一种安全策略。

安全策略包含HTTPS可选的TLS协议版本和配套的加密算法套件。

- **tls_cipher_policy_1_0**：

  支持TLS版本： TLSv1.0、TLSv1.1和TLSv1.2。

  支持加密算法套件：ECDHE-RSA-AES128-GCM-SHA256、ECDHE-RSA-AES256-GCM-SHA384、ECDHE-RSA-AES128-SHA256、ECDHE-RSA-AES256-SHA384、AES128-GCM-SHA256、AES256-GCM-SHA384、AES128-SHA256、AES256-SHA256、ECDHE-RSA-AES128-SHA、ECDHE-RSA-AES256-SHA、AES128-SHA、AES256-SHA和DES-CBC3-SHA。

- **tls_cipher_policy_1_1**：

  支持TLS版本： TLSv1.1和TLSv1.2。

  支持加密算法套件：ECDHE-RSA-AES128-GCM-SHA256、ECDHE-RSA-AES256-GCM-SHA384、ECDHE-RSA-AES128-SHA256、ECDHE-RSA-AES256-SHA384、AES128-GCM-SHA256、AES256-GCM-SHA384、AES128-SHA256、AES256-SHA256、ECDHE-RSA-AES128-SHA、ECDHE-RSA-AES256-SHA、AES128-SHA、AES256-SHA和DES-CBC3-SHA。

- **tls_cipher_policy_1_2**

  支持TLS版本：TLSv1.2。

  支持加密算法套件：ECDHE-RSA-AES128-GCM-SHA256、ECDHE-RSA-AES256-GCM-SHA384、ECDHE-RSA-AES128-SHA256、ECDHE-RSA-AES256-SHA384、AES128-GCM-SHA256、AES256-GCM-SHA384、AES128-SHA256、AES256-SHA256、ECDHE-RSA-AES128-SHA、ECDHE-RSA-AES256-SHA、AES128-SHA、AES256-SHA和DES-CBC3-SHA。

- **tls_cipher_policy_1_2_strict**

  支持TLS版本：TLSv1.2。

  支持加密算法套件：ECDHE-RSA-AES128-GCM-SHA256、ECDHE-RSA-AES256-GCM-SHA384、ECDHE-RSA-AES128-SHA256、ECDHE-RSA-AES256-SHA384、ECDHE-RSA-AES128-SHA和ECDHE-RSA-AES256-SHA。

- **tls_cipher_policy_1_2_strict_with_1_3**
 
   支持TLS版本：TLSv1.2及TLSv1.3。
 
   支持的加密算法套件：TLS_AES_128_GCM_SHA256、TLS_AES_256_GCM_SHA384、TLS_CHACHA20_POLY1305_SHA256、TLS_AES_128_CCM_SHA256、TLS_AES_128_CCM_8_SHA256、ECDHE-ECDSA-AES128-GCM-SHA256、ECDHE-ECDSA-AES256-GCM-SHA384、ECDHE-ECDSA-AES128-SHA256、ECDHE-ECDSA-AES256-SHA384、ECDHE-RSA-AES128-GCM-SHA256、ECDHE-RSA-AES256-GCM-SHA384、ECDHE-RSA-AES128-SHA256、ECDHE-RSA-AES256-SHA384、ECDHE-ECDSA-AES128-SHA、ECDHE-ECDSA-AES256-SHA、ECDHE-RSA-AES128-SHA、ECDHE-RSA-AES256-SHA。 ',
                'type' => 'string',
                'example' => 'tls_cipher_policy_1_0',
              ),
              'Status' => 
              array (
                'description' => '当前监听的状态。取值：
- **running**：运行中。
- **stopped**：已停止。',
                'type' => 'string',
                'example' => 'stopped',
              ),
              'VServerGroupId' => 
              array (
                'description' => '绑定的服务器组ID。',
                'type' => 'string',
                'example' => 'rsp-cige6j5e********',
              ),
              'XForwardedFor_ClientSrcPort' => 
              array (
                'description' => '是否通过`XForwardedFor_ClientSrcPort`头字段获取访问负载均衡实例客户端的端口。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'off',
              ),
              'Cookie' => 
              array (
                'description' => '服务器上配置的Cookie。',
                'type' => 'string',
                'example' => 'testCookie',
              ),
              'Gzip' => 
              array (
                'description' => '是否开启`Gzip`压缩。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'on',
              ),
              'EnableHttp2' => 
              array (
                'description' => '是否开启`HTTP2`特性。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'off',
              ),
              'Bandwidth' => 
              array (
                'description' => '监听的带宽峰值。单位：Mbps。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Description' => 
              array (
                'description' => '自定义监听名称。',
                'type' => 'string',
                'example' => 'HTTPS_443',
              ),
              'HealthCheckTimeout' => 
              array (
                'description' => '每次健康检查响应的最大超时间。单位：秒。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'AclStatus' => 
              array (
                'description' => '是否开启访问控制功能。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'off',
              ),
              'UnhealthyThreshold' => 
              array (
                'description' => '不健康检查阈值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
              ),
              'XForwardedFor_SLBID' => 
              array (
                'description' => '是否通过`SLB-ID`头字段获取负载均衡实例ID。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'on',
              ),
              'XForwardedFor_ClientCertSubjectDN' => 
              array (
                'description' => '是否通过`XForwardedFor_ClientCertSubjectDN`头字段获取访问负载均衡实例客户端证书的所有者信息。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'off',
              ),
              'SecurityStatus' => 
              array (
                'description' => '是否处于安全状态。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'on',
              ),
              'HealthCheckHttpCode' => 
              array (
                'description' => '健康检查正常的HTTP状态码。',
                'type' => 'string',
                'example' => 'http_2xx,http_3xx',
              ),
              'RequestTimeout' => 
              array (
                'description' => '指定请求超时时间，取值范围为**1**~**180**，默认值为**60**。单位：秒。

在超时时间内后端服务器一直没有响应，负载均衡将放弃等待，给客户端返回HTTP 504错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '43',
              ),
              'HealthCheckInterval' => 
              array (
                'description' => '健康检查的时间间隔。单位：秒。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'ServerCertificateId' => 
              array (
                'description' => '服务器证书的ID。',
                'type' => 'string',
                'example' => 'idkp-123-cn-test-0**',
              ),
              'AclId' => 
              array (
                'description' => '监听绑定的访问策略组ID。

> 当**AclStatus**参数的值为**on**时，该参数必选。',
                'type' => 'string',
                'example' => 'acl-a2do9e413e0spzasx****',
              ),
              'XForwardedFor_ClientCertIssuerDN' => 
              array (
                'description' => '是否通过`XForwardedFor_ClientCertIssuerDN`头字段获取访问负载均衡实例客户端证书的发行者信息。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'off',
              ),
              'HealthyThreshold' => 
              array (
                'description' => '健康检查阈值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
              ),
              'XForwardedFor_SLBIP' => 
              array (
                'description' => '是否通过`SLB-IP`头字段获取客户端请求的VIP（Virtual IP address）。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'on',
              ),
              'StickySession' => 
              array (
                'description' => '是否开启会话保持。取值：

- **on**：开启。
- **off**：未开启。',
                'type' => 'string',
                'example' => 'on',
              ),
              'HealthCheck' => 
              array (
                'description' => '是否开启健康检查。取值：
- **on**：是。
- **off**：否。',
                'type' => 'string',
                'example' => 'on',
              ),
              'AclIds' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AclId' => 
                  array (
                    'description' => '监听绑定的访问策略组ID。',
                    'type' => 'array',
                  ),
                ),
              ),
              'Rules' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Rule' => 
                  array (
                    'description' => '监听下的转发规则列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '监听下的转发规则列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VServerGroupId' => 
                        array (
                          'description' => '转发规则的目标服务器组ID。',
                          'type' => 'string',
                          'example' => 'rsp-cige6j5e********',
                        ),
                        'Url' => 
                        array (
                          'description' => '访问路径。',
                          'type' => 'string',
                          'example' => '/example',
                        ),
                        'Domain' => 
                        array (
                          'description' => '域名。',
                          'type' => 'string',
                          'example' => 'www.example.com',
                        ),
                        'RuleName' => 
                        array (
                          'description' => '转发规则名称。',
                          'type' => 'string',
                          'example' => 'example',
                        ),
                        'RuleId' => 
                        array (
                          'description' => '转发规则ID。',
                          'type' => 'string',
                          'example' => '23',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'DomainExtensions' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DomainExtension' => 
                  array (
                    'description' => '域名扩展列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '域名扩展列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ServerCertificateId' => 
                        array (
                          'description' => '与域名对应的证书ID。',
                          'type' => 'string',
                          'example' => '13344444****',
                        ),
                        'Domain' => 
                        array (
                          'description' => '域名。',
                          'type' => 'string',
                          'example' => 'www.example.com',
                        ),
                        'DomainExtensionId' => 
                        array (
                          'description' => '域名扩展ID。',
                          'type' => 'string',
                          'example' => '12',
                        ),
                        'Certificates' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                          ),
                        ),
                        'ServerCertificates' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'ServerCertificates' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                ),
              ),
              'LoadBalancerId' => 
              array (
                'description' => '传统型负载均衡实例ID。',
                'type' => 'string',
                'example' => 'lb-bp1mxu5r8lau****',
              ),
              'Tags' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Tag' => 
                  array (
                    'description' => '标签列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '标签列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TagKey' => 
                        array (
                          'description' => '监听的标签键。N的取值范围：**1**~**20**。一旦传入该值，则不允许为空字符串。最多支持64个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                          'type' => 'string',
                          'example' => 'TestKey',
                        ),
                        'TagValue' => 
                        array (
                          'description' => '监听的标签值。N的取值范围：**1**~**20**。一旦传入该值，可以为空字符串。最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                          'type' => 'string',
                          'example' => 'TestValue',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AclType\\": \\"white\\",\\n  \\"XForwardedFor_ClientCertClientVerify\\": \\"off\\",\\n  \\"CACertificateId\\": \\"idkp-234-cn-test-0**\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF3********\\",\\n  \\"HealthCheckConnectPort\\": 8080,\\n  \\"BackendServerPort\\": 8080,\\n  \\"CookieTimeout\\": 500,\\n  \\"HealthCheckDomain\\": \\"www.test.com\\",\\n  \\"XForwardedFor\\": \\"on\\",\\n  \\"XForwardedFor_ClientCertFingerprint\\": \\"off\\",\\n  \\"IdleTimeout\\": 23,\\n  \\"ListenerPort\\": 80,\\n  \\"HealthCheckURI\\": \\"/test/index.html\\",\\n  \\"XForwardedFor_SLBPORT\\": \\"off\\",\\n  \\"StickySessionType\\": \\"insert\\",\\n  \\"Scheduler\\": \\"wrr\\",\\n  \\"XForwardedFor_proto\\": \\"on\\",\\n  \\"HealthCheckMethod\\": \\"get\\",\\n  \\"TLSCipherPolicy\\": \\"tls_cipher_policy_1_0\\",\\n  \\"Status\\": \\"stopped\\",\\n  \\"VServerGroupId\\": \\"rsp-cige6j5e********\\",\\n  \\"XForwardedFor_ClientSrcPort\\": \\"off\\",\\n  \\"Cookie\\": \\"testCookie\\",\\n  \\"Gzip\\": \\"on\\",\\n  \\"EnableHttp2\\": \\"off\\",\\n  \\"Bandwidth\\": 10,\\n  \\"Description\\": \\"HTTPS_443\\",\\n  \\"HealthCheckTimeout\\": 3,\\n  \\"AclStatus\\": \\"off\\",\\n  \\"UnhealthyThreshold\\": 4,\\n  \\"XForwardedFor_SLBID\\": \\"on\\",\\n  \\"XForwardedFor_ClientCertSubjectDN\\": \\"off\\",\\n  \\"SecurityStatus\\": \\"on\\",\\n  \\"HealthCheckHttpCode\\": \\"http_2xx,http_3xx\\",\\n  \\"RequestTimeout\\": 43,\\n  \\"HealthCheckInterval\\": 5,\\n  \\"ServerCertificateId\\": \\"idkp-123-cn-test-0**\\",\\n  \\"AclId\\": \\"acl-a2do9e413e0spzasx****\\",\\n  \\"XForwardedFor_ClientCertIssuerDN\\": \\"off\\",\\n  \\"HealthyThreshold\\": 4,\\n  \\"XForwardedFor_SLBIP\\": \\"on\\",\\n  \\"StickySession\\": \\"on\\",\\n  \\"HealthCheck\\": \\"on\\",\\n  \\"AclIds\\": {\\n    \\"AclId\\": [\\n      \\"\\"\\n    ]\\n  },\\n  \\"Rules\\": {\\n    \\"Rule\\": [\\n      {\\n        \\"VServerGroupId\\": \\"rsp-cige6j5e********\\",\\n        \\"Url\\": \\"/example\\",\\n        \\"Domain\\": \\"www.example.com\\",\\n        \\"RuleName\\": \\"example\\",\\n        \\"RuleId\\": \\"23\\"\\n      }\\n    ]\\n  },\\n  \\"DomainExtensions\\": {\\n    \\"DomainExtension\\": [\\n      {\\n        \\"ServerCertificateId\\": \\"13344444****\\",\\n        \\"Domain\\": \\"www.example.com\\",\\n        \\"DomainExtensionId\\": \\"12\\"\\n      }\\n    ]\\n  },\\n  \\"LoadBalancerId\\": \\"lb-bp1mxu5r8lau****\\",\\n  \\"Tags\\": {\\n    \\"Tag\\": [\\n      {\\n        \\"TagKey\\": \\"TestKey\\",\\n        \\"TagValue\\": \\"TestValue\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeLoadBalancerHTTPSListenerAttributeResponse>\\n    <AclType>white</AclType>\\n    <XForwardedFor_ClientCertClientVerify>off</XForwardedFor_ClientCertClientVerify>\\n    <CACertificateId>idkp-234-cn-test-0**</CACertificateId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF3********</RequestId>\\n    <HealthCheckConnectPort>8080</HealthCheckConnectPort>\\n    <BackendServerPort>8080</BackendServerPort>\\n    <CookieTimeout>500</CookieTimeout>\\n    <HealthCheckDomain>www.test.com</HealthCheckDomain>\\n    <XForwardedFor>on</XForwardedFor>\\n    <XForwardedFor_ClientCertFingerprint>off</XForwardedFor_ClientCertFingerprint>\\n    <IdleTimeout>23</IdleTimeout>\\n    <ListenerPort>80</ListenerPort>\\n    <HealthCheckURI>/test/index.html</HealthCheckURI>\\n    <XForwardedFor_SLBPORT>off</XForwardedFor_SLBPORT>\\n    <StickySessionType>insert</StickySessionType>\\n    <Scheduler>wrr</Scheduler>\\n    <XForwardedFor_proto>on</XForwardedFor_proto>\\n    <HealthCheckMethod>get</HealthCheckMethod>\\n    <TLSCipherPolicy>tls_cipher_policy_1_0</TLSCipherPolicy>\\n    <Status>stopped</Status>\\n    <VServerGroupId>rsp-cige6j5e********</VServerGroupId>\\n    <XForwardedFor_ClientSrcPort>off</XForwardedFor_ClientSrcPort>\\n    <Cookie>B490B5EBF6F3CD402E515D22BCDA1598</Cookie>\\n    <Gzip>on</Gzip>\\n    <EnableHttp2>off</EnableHttp2>\\n    <Bandwidth>-1</Bandwidth>\\n    <Description>HTTPS_443</Description>\\n    <HealthCheckTimeout>3</HealthCheckTimeout>\\n    <AclStatus>off</AclStatus>\\n    <UnhealthyThreshold>4</UnhealthyThreshold>\\n    <XForwardedFor_SLBID>on</XForwardedFor_SLBID>\\n    <XForwardedFor_ClientCertSubjectDN>off</XForwardedFor_ClientCertSubjectDN>\\n    <SecurityStatus>on</SecurityStatus>\\n    <HealthCheckHttpCode>http_2xx,http_3xx</HealthCheckHttpCode>\\n    <RequestTimeout>43</RequestTimeout>\\n    <HealthCheckInterval>5</HealthCheckInterval>\\n    <ServerCertificateId>idkp-123-cn-test-0**</ServerCertificateId>\\n    <AclId>nacl-a2do9e413e0spzasx****</AclId>\\n    <XForwardedFor_ClientCertIssuerDN>off</XForwardedFor_ClientCertIssuerDN>\\n    <HealthyThreshold>4</HealthyThreshold>\\n    <XForwardedFor_SLBIP>on</XForwardedFor_SLBIP>\\n    <StickySession>on</StickySession>\\n    <HealthCheck>on</HealthCheck>\\n    <Rules>\\n        <VServerGroupId>12</VServerGroupId>\\n        <Url>/example</Url>\\n        <Domain>www.example.com</Domain>\\n        <RuleName>example</RuleName>\\n        <RuleId>23</RuleId>\\n    </Rules>\\n    <DomainExtensions>\\n        <ServerCertificateId>13344444****</ServerCertificateId>\\n        <Domain>www.example.com</Domain>\\n        <DomainExtensionId>12</DomainExtensionId>\\n    </DomainExtensions>\\n    <LoadBalancerId>lb-bp1mxu5r8lau****</LoadBalancerId>\\n    <Tags>\\n        <TagKey>TestKey</TagKey>\\n        <TagValue>TestValue</TagValue>\\n    </Tags>\\n</DescribeLoadBalancerHTTPSListenerAttributeResponse>","errorExample":""}]',
      'title' => '查询HTTPS监听配置',
      'description' => '- 您已经创建传统型负载均衡，具体操作，请参见[CreateLoadBalancer](~~27577~~)。
- 您已经创建HTTPS监听，具体操作，请参见[CreateLoadBalancerHTTPSListener](~~27593~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateRules' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域ID。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1ca0zt07t934w******',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例前端使用的监听端口。

取值范围：**1~65535**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '443',
          ),
        ),
        3 => 
        array (
          'name' => 'ListenerProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例前端使用的协议。

> 相同端口存在不同协议监听时，此字段必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'https',
          ),
        ),
        4 => 
        array (
          'name' => 'RuleList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要添加的转发规则。一次请求中，最多可添加10条转发规则。每条转发规则包含以下参数：

- **RuleName**（必选）：String类型。转发规则名称，长度为1~40个字符，支持字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）这些字符。同一个监听内不同规则的名称必须唯一。

- **Domain**（可选）： String类型。转发规则关联的请求域名，与**Url**参数至少选择一个。

- **Url**（可选）：String类型，可选，访问路径，长度限制为1~80个字符，只能使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、问号（?）、井号（#）和and（&amp;）这些字符。 URL不能只为正斜线（/），但必须以正斜线（/）开头，与**Domain**参数至少选择一个。

- **VServerGroupId**（必选）：String类型。该转发规则的目标虚拟服务器组ID。

> `Domain`和`Url`两者必须指定一个，也可以同时指定。`Domain`和`Url`的组合在同一个监听内必须唯一。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '[{"RuleName":"Rule2","Domain":"test.com","VServerGroupId":"rsp-bp114ni******"}]',
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
                'example' => '9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C',
              ),
              'Rules' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Rule' => 
                  array (
                    'description' => '转发规则列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '转发规则列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RuleName' => 
                        array (
                          'description' => '转发规则名称。',
                          'type' => 'string',
                          'example' => 'Rule2',
                        ),
                        'RuleId' => 
                        array (
                          'description' => '转发规则ID。',
                          'type' => 'string',
                          'example' => 'rule-bp12jzy0*****',
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
            'errorMessage' => 'The specified VServerGroupId does not belong to the LoadBalancerId of the rule.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameterValue.RegionNotSupport',
            'errorMessage' => 'The region does not support the parameter value, %s.',
          ),
          2 => 
          array (
            'errorCode' => 'TooManyListeners',
            'errorMessage' => 'More than 1 listener is found, please be more specified.',
          ),
          3 => 
          array (
            'errorCode' => 'DomainExist',
            'errorMessage' => 'rule with same domain and url already exists in specified vip',
          ),
          4 => 
          array (
            'errorCode' => 'OperationFailed.ListenerStatusNotSupport',
            'errorMessage' => 'The status of the listener does not support this operation. Please try again later.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationFailed.ActionNotSupport',
            'errorMessage' => 'The loadbalancer does not support such action.',
          ),
          6 => 
          array (
            'errorCode' => 'MissingParameter.RuleName',
            'errorMessage' => 'The parameter RuleName is required.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C\\",\\n  \\"Rules\\": {\\n    \\"Rule\\": [\\n      {\\n        \\"RuleName\\": \\"Rule2\\",\\n        \\"RuleId\\": \\"rule-bp12jzy0*****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\"Code\\":\\"InvalidParameter\\",\\"Message\\":\\"The specified parameter is not valid.\\",\\"HostId\\":\\"slb-pop.aliyuncs.com\\",\\"RequestId\\":\\"0669D684-69D8-408E-A4FA-B9011E0F4E66\\"}"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<CreateRulesResponse>\\n\\t<RequestId>D63E42FB-F963-4EE5-9B32-05602BF351F3</RequestId>\\n\\t<Rules>\\n\\t\\t<Rule>\\n\\t\\t\\t<RuleId>rule-bp12jzy******</RuleId>\\n\\t\\t\\t<RuleName>Rule3</RuleName>\\n\\t\\t</Rule>\\n\\t</Rules>\\n</CreateRulesResponse>","errorExample":""}]',
      'title' => '为HTTP或HTTPS监听添加转发规则',
      'summary' => '为指定的HTTP或HTTPS监听添加转发规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetRule' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域ID。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
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
            'example' => 'rule-3ejhkt****',
          ),
        ),
        2 => 
        array (
          'name' => 'VServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转发规则的目标服务器组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rsp-cige6****',
          ),
        ),
        3 => 
        array (
          'name' => 'RuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转发规则名称，长度限制为1~40个字符，支持字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）这些字符。

> 同一个监听内不同规则的名称必须唯一。',
            'type' => 'string',
            'required' => false,
            'example' => 'doctest',
          ),
        ),
        4 => 
        array (
          'name' => 'ListenerSync',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否继承监听的健康检查、会话保持和调度算法配置。取值：

- **on**：继承监听配置。

- **off**：不继承监听配置。转发规则自定义健康检查及会话保持配置。',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
          ),
        ),
        5 => 
        array (
          'name' => 'Scheduler',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调度算法。取值：

* **wrr**：权重值越高的后端服务器，被轮询到的次数（概率）也越高。

* **rr**：按照访问顺序依次将外部请求依序分发到后端服务器。

>在**ListenerSync**为**off**时必选且有效。',
            'type' => 'string',
            'required' => false,
            'example' => 'wrr',
          ),
        ),
        6 => 
        array (
          'name' => 'StickySession',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启会话保持，取值：

- **on**：开启。

- **off**：不开启。

在**ListenerSync**为**off**时必选且有效。',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
          ),
        ),
        7 => 
        array (
          'name' => 'StickySessionType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Cookie的处理方式。取值：

- **insert**：植入Cookie。
 客户端第一次访问时，负载均衡会在返回请求中植入Cookie（即在HTTP或HTTPS响应报文中插入后端服务器ID），客户端下次携带此Cookie访问时，负载均衡服务会将请求定向转发给第一次访问时记录到的后端服务器上。

- **server**：重写Cookie。
 负载均衡发现用户自定义Cookie，将会对原来的Cookie进行重写，下次客户端携带新的Cookie访问时，负载均衡服务会将请求定向转发给之前记录到的后端服务器。

>**StickySession**为**on**时必选且有效。',
            'type' => 'string',
            'required' => false,
            'example' => 'insert',
          ),
        ),
        8 => 
        array (
          'name' => 'CookieTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Cookie超时时间。单位：秒。取值范围：**1**~**86400**。

> 当**StickySession**为**on**且**StickySessionType**为**insert**时必选且有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '86400',
            'minimum' => '1',
            'example' => '123',
          ),
        ),
        9 => 
        array (
          'name' => 'Cookie',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器上配置的Cookie。

长度为1~200个字符，只能包含ASCII英文字母和数字字符，不能包含半角逗号（,）、半角分号（;）或空格，也不能以美元（$）开头。

> 当**StickySession**为**on**且**StickySessionType**为**server**时必选且有效。',
            'type' => 'string',
            'required' => false,
            'example' => '23ffsa',
          ),
        ),
        10 => 
        array (
          'name' => 'HealthCheck',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启健康检查。取值：

- **on**：开启。
- **off**：不开启。

> **ListenerSync**为**off**时必选且有效，其他情况会忽略此参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'off',
          ),
        ),
        11 => 
        array (
          'name' => 'HealthCheckDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于健康检查的域名，取值：

* **$_ip**： 后端服务器的私网IP。当指定了$_ip或HealthCheckDomain未指定时，负载均衡会使用各后端服务器的私网IP当做健康检查使用的域名。

* **domain**：域名长度为1~80字符，只能包含字母、数字、半角句号（.）和短划线（-）。

>** HealthCheck**为**on**时有效。',
            'type' => 'string',
            'required' => false,
            'example' => '$_ip',
          ),
        ),
        12 => 
        array (
          'name' => 'HealthCheckURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于健康检查的URI。

>**HealthCheck**为**on**时必选且有效。',
            'type' => 'string',
            'required' => false,
            'example' => '/example',
          ),
        ),
        13 => 
        array (
          'name' => 'HealthyThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**失败**判定为**成功**。

取值范围：**2**~**10**。

> **HealthCheck**为**on**时必选且有效。

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '1',
            'example' => '4',
          ),
        ),
        14 => 
        array (
          'name' => 'UnhealthyThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**成功**判定为**失败**。

取值范围：**2**~**10**。

> **HealthCheck**为**on**时必选且有效。

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '1',
            'example' => '4',
          ),
        ),
        15 => 
        array (
          'name' => 'HealthCheckTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收来自运行状况检查的响应需要等待的时间。如果后端ECS在指定的时间内没有正确响应，则判定为健康检查失败。单位：秒。取值范围：**1**~**300**。

> **HealthCheck**为**on**时必选且有效。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '300',
            'minimum' => '1',
            'example' => '20',
          ),
        ),
        16 => 
        array (
          'name' => 'HealthCheckInterval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查的时间间隔。单位：秒。取值范围：**1**~**50**。

> **HealthCheck**为**on**时必选且有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '20',
          ),
        ),
        17 => 
        array (
          'name' => 'HealthCheckConnectPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查使用的端口。取值范围：**1**~**65535**。

> **HealthCheck**为**on**时有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '65535',
            'minimum' => '1',
            'example' => '80',
          ),
        ),
        18 => 
        array (
          'name' => 'HealthCheckHttpCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '健康检查正常的HTTP状态码，多个状态码用半角逗号（,）分割。

取值：**http_2xx**或**http_3x**x或**http_4xx**或**http_5xx**。

> **HealthCheck**为**on**时必选且有效。',
            'type' => 'string',
            'required' => false,
            'example' => 'http_2xx',
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
                'example' => '9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C',
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
            'errorMessage' => 'The specified VServerGroupId does not belong to the LoadBalancerId of the rule.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.RegionNotSupport',
            'errorMessage' => 'The region does not support the parameter: %s.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C\\"\\n}","errorExample":""},{"type":"xml","example":"<SetRuleResponse>\\n    <RequestId>9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C</RequestId>\\n</SetRuleResponse>","errorExample":""}]',
      'title' => '修改目标虚拟服务器组的转发规则',
      'summary' => '修改目标虚拟服务器组的转发规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteRules' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域ID。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的转发规则列表。

> 要删除的转发规则列表不能为空，并且可删除的转发规则条目数不能超过10条。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '["rule-bp1z9ce******","rule-bp1tuc******4"]',
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
                'example' => '9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C',
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
            'errorCode' => 'Operation.NotAllowed',
            'errorMessage' => 'The specified rules must be in the same listener.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationFailed.ListenerStatusNotSupport',
            'errorMessage' => 'The status of the listener does not support this operation. Please try again later.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationFailed.ListenerConflict',
            'errorMessage' => 'The rule does not support this operation because of same port listener.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C\\"\\n}","errorExample":"{\\"Code\\":\\"InvalidParameter\\",\\"Message\\":\\"The specified parameter is not valid.\\",\\"HostId\\":\\"slb-pop.aliyuncs.com\\",\\"RequestId\\":\\"0669D684-69D8-408E-A4FA-B9011E0F4E66\\"}"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"utf-8\\"?>\\n<DeleteRulesResponse>\\n    <RequestId>9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C</RequestId>\\n</DeleteRulesResponse>","errorExample":""}]',
      'title' => '删除转发规则',
      'summary' => '删除转发规则。',
      'description' => '要删除的转发规则列表不能为空，并且可删除的转发规则条目数不能超过10条。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRuleAttribute' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域ID。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
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
            'example' => 'rule-bp1efemp9****',
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
              'VServerGroupId' => 
              array (
                'description' => '转发规则关联的服务器组ID。',
                'type' => 'string',
                'example' => 'rsp-cige6j****',
              ),
              'Cookie' => 
              array (
                'description' => '服务器上配置的Cookie。

长度为1~200个字符，只能包含ASCII英文字母和数字字符，不能包含半角逗号（,）、半角分号（;）或空格，也不能以美元符号（$）开头。

当**StickySession**为**on**且**StickySessionType**为**server**时，该参数必选且有效。',
                'type' => 'string',
                'example' => 'wwe',
              ),
              'LoadBalancerId' => 
              array (
                'description' => '负载均衡实例ID。',
                'type' => 'string',
                'example' => 'lb-bp1ca0zt07t934wxe****',
              ),
              'RuleId' => 
              array (
                'description' => '转发规则ID。',
                'type' => 'string',
                'example' => 'rule-hfgnd*****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C',
              ),
              'HealthCheckConnectPort' => 
              array (
                'description' => '健康检查的后端服务器的端口。

取值：**1**~**65535**。

> **HealthCheck**为**on**时该参数有效，若为空且**HealthCheck**为**on**，表明默认使用监听后端端口配置。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '23',
              ),
              'HealthCheckTimeout' => 
              array (
                'description' => '接收来自运行状况检查的响应需要等待的时间。如果后端ECS在指定的时间内没有正确响应，则判定为健康检查失败。

取值：**1**~**300**秒。

> 如果**HealthCHeckTimeout**的值小于**HealthCheckInterval**的值，则**HealthCHeckTimeout**无效，超时时间为**HealthCheckInterval**的值。**HealthCheck**为**on**时，该参数有效。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '34',
              ),
              'CookieTimeout' => 
              array (
                'description' => 'Cookie超时时间。

取值：**1~86400**秒。

> 当**StickySession**为**on**且**StickySessionType**为**insert**时，该参数必选且有效。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '12',
              ),
              'HealthCheckDomain' => 
              array (
                'description' => '用于健康检查的域名，取值：

* **$_ip**： 后端服务器的私网IP。当指定了IP或该参数未指定时，负载均衡会使用各后端服务器的私网IP当做健康检查使用的域名。

* **domain**：域名长度为1~80字符，只能包含字母、数字、半角句号（.）和短划线（-）。

> **HealthCheck**为**on**时，该参数有效。',
                'type' => 'string',
                'example' => 'www.example.com',
              ),
              'UnhealthyThreshold' => 
              array (
                'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**success**判定为**fail**。

取值：**2**~**10**。

> **HealthCheck**为**on**时，该参数有效。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'HealthCheckHttpCode' => 
              array (
                'description' => '健康检查正常的HTTP状态码，多个状态码用逗号分隔。默认值为**http_2xx**。

取值：**http_2xx**或**http_3xx**或**http_4xx**或**http_5xx**。

> **HealthCheck**为**on**时，该参数有效。',
                'type' => 'string',
                'example' => 'http_3xx ',
              ),
              'Domain' => 
              array (
                'description' => '转发规则域名。',
                'type' => 'string',
                'example' => 'www.example.com',
              ),
              'ListenerPort' => 
              array (
                'description' => '负载均衡实例前端使用的监听端口。',
                'type' => 'string',
                'example' => '90',
              ),
              'Url' => 
              array (
                'description' => '转发规则路径。',
                'type' => 'string',
                'example' => '/cache',
              ),
              'HealthCheckInterval' => 
              array (
                'description' => '健康检查的时间间隔。

取值：**1**~**50**秒。

> **HealthCheck**为**on**时，该参数有效。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '34',
              ),
              'HealthCheckURI' => 
              array (
                'description' => '用于健康检查的URI。

> **HealthCheck**为**on**时，该参数有效。',
                'type' => 'string',
                'example' => '/rest',
              ),
              'RuleName' => 
              array (
                'description' => '转发规则名称。',
                'type' => 'string',
                'example' => 'Rule1',
              ),
              'StickySessionType' => 
              array (
                'description' => 'Cookie的处理方式。取值：

* **insert**：植入Cookie。客户端第一次访问时，负载均衡会在返回请求中植入Cookie（即在HTTP/HTTPS响应报文中插入SERVERID），下次客户端携带此Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器上。

* **server**：重写Cookie。负载均衡发现用户自定义了Cookie，将会对原来的Cookie进行重写，下次客户端携带新的Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器。

> 当**StickySession**的值为**on**时，该参数有效。',
                'type' => 'string',
                'example' => 'insert',
              ),
              'Scheduler' => 
              array (
                'description' => '调度算法。取值：

* **wrr**（默认值）：权重值越高的后端服务器，被轮询到的次数（概率）也越高。

* **rr**：按照访问顺序依次将外部请求依序分发到后端服务器。

> **ListenerSync**为**off**时有效，为**on**时表明与监听配置一致。',
                'type' => 'string',
                'example' => 'wrr',
              ),
              'ListenerSync' => 
              array (
                'description' => '转发规则是否从监听上继承健康检查、会话保持和调度算法配置。

取值：**on**或**off**。

* **off**：不继承监听配置，转发规则自定义健康检查及会话保持配置。
* **on**：继承监听配置。',
                'type' => 'string',
                'example' => 'off',
              ),
              'HealthyThreshold' => 
              array (
                'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**fail**判定为**success**。

取值：**1**~**10**。

> **HealthCheck**为**on**时，该参数有效。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'StickySession' => 
              array (
                'description' => '是否开启会话保持。取值：

- **on**：开启
- **off**：不开启

> 在**ListenerSync**为**off**时必选且有效，为**on**时表明与监听配置一致。
',
                'type' => 'string',
                'example' => 'off',
              ),
              'HealthCheck' => 
              array (
                'description' => '是否开启健康检查。取值：

- **on**：开启
- **off**：不开启

> **ListenerSync**为**off**时有效，为**on**时表明与监听配置一致。',
                'type' => 'string',
                'example' => 'off',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"VServerGroupId\\": \\"rsp-cige6j****\\",\\n  \\"Cookie\\": \\"wwe\\",\\n  \\"LoadBalancerId\\": \\"lb-bp1ca0zt07t934wxe****\\",\\n  \\"RuleId\\": \\"rule-hfgnd*****\\",\\n  \\"RequestId\\": \\"9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C\\",\\n  \\"HealthCheckConnectPort\\": 23,\\n  \\"HealthCheckTimeout\\": 34,\\n  \\"CookieTimeout\\": 12,\\n  \\"HealthCheckDomain\\": \\"www.example.com\\",\\n  \\"UnhealthyThreshold\\": 3,\\n  \\"HealthCheckHttpCode\\": \\"http_3xx \\",\\n  \\"Domain\\": \\"www.example.com\\",\\n  \\"ListenerPort\\": \\"90\\",\\n  \\"Url\\": \\"/cache\\",\\n  \\"HealthCheckInterval\\": 34,\\n  \\"HealthCheckURI\\": \\"/rest\\",\\n  \\"RuleName\\": \\"Rule1\\",\\n  \\"StickySessionType\\": \\"insert\\",\\n  \\"Scheduler\\": \\"wrr\\",\\n  \\"ListenerSync\\": \\"off\\",\\n  \\"HealthyThreshold\\": 2,\\n  \\"StickySession\\": \\"off\\",\\n  \\"HealthCheck\\": \\"off\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeRuleAttributeResponse>\\n    <VServerGroupId>rsp-cige6j****</VServerGroupId>\\n    <Cookie>wwe</Cookie>\\n    <LoadBalancerId>lb-bp1ca0zt07t934wxe****</LoadBalancerId>\\n    <RuleId>rule-hfgnd*****</RuleId>\\n    <RequestId>9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C</RequestId>\\n    <HealthCheckConnectPort>23</HealthCheckConnectPort>\\n    <HealthCheckTimeout>34</HealthCheckTimeout>\\n    <CookieTimeout>12</CookieTimeout>\\n    <HealthCheckDomain>www.example.com</HealthCheckDomain>\\n    <UnhealthyThreshold>3</UnhealthyThreshold>\\n    <HealthCheckHttpCode>http_3xx </HealthCheckHttpCode>\\n    <Domain>www.example.com</Domain>\\n    <ListenerPort>90</ListenerPort>\\n    <Url>/cache</Url>\\n    <HealthCheckInterval>34</HealthCheckInterval>\\n    <HealthCheckURI>10.21.22.1</HealthCheckURI>\\n    <RuleName>Rule1</RuleName>\\n    <StickySessionType>insert</StickySessionType>\\n    <Scheduler>wrr</Scheduler>\\n    <ListenerSync>off</ListenerSync>\\n    <HealthyThreshold>2</HealthyThreshold>\\n    <StickySession>off</StickySession>\\n    <HealthCheck>off</HealthCheck>\\n</DescribeRuleAttributeResponse>","errorExample":""}]',
      'title' => '查询指定转发规则的配置详情',
      'summary' => '查询指定转发规则的配置详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRules' => 
    array (
      'summary' => '查询指定监听已配置的转发规则。',
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
            'description' => '负载均衡实例的地域ID。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1ca0zt07t934****',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例前端使用的协议。取值：

**TCP**：协议类型为TCP。

**UDP**：协议类型为UDP。

**HTTP**：协议类型为HTTP。

**HTTPS**：协议类型为HTTPS。

>相同端口存在不同协议监听时，此字段必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'http',
          ),
        ),
        3 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例前端使用的监听端口。

取值范围：**1~65535**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '90',
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
                'example' => '9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C',
              ),
              'Rules' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Rule' => 
                  array (
                    'description' => '转发规则列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'HealthCheckHttpCode' => 
                        array (
                          'description' => '健康检查正常的HTTP状态码，多个状态码用半角逗号（,）分隔。默认值为**http_2xx**。

取值：**http_2xx**、**http_3xx**、**http_4xx**或**http_5xx**。

> **HealthCheck**为**on**时，该参数有效。',
                          'type' => 'string',
                          'example' => 'http_3xx',
                        ),
                        'VServerGroupId' => 
                        array (
                          'description' => '转发规则绑定的目标虚拟服务器组ID。',
                          'type' => 'string',
                          'example' => 'rsp-6cejjzl****',
                        ),
                        'Domain' => 
                        array (
                          'description' => '转发规则绑定的请求域名。',
                          'type' => 'string',
                          'example' => 'www.example.com',
                        ),
                        'Cookie' => 
                        array (
                          'description' => '服务器上配置的Cookie。

长度为1~200个字符，只能包含ASCII英文字母和数字字符，不能包含逗号（,）、半角分号（;）或空格，也不能以美元符号（$）开头。

> 当**StickySession**为**on**且**StickySessionType**为**server**时，该参数必选且有效。',
                          'type' => 'string',
                          'example' => '23',
                        ),
                        'HealthCheckInterval' => 
                        array (
                          'description' => '健康检查的时间间隔。单位：秒。

取值范围：**1~50**。

> **HealthCheck**为**on**时，该参数有效。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5',
                        ),
                        'Url' => 
                        array (
                          'description' => '转发规则绑定的请求路径。',
                          'type' => 'string',
                          'example' => '/cache',
                        ),
                        'HealthCheckURI' => 
                        array (
                          'description' => '用于健康检查的URI。

> **HealthCheck**为**on**时，该参数有效。',
                          'type' => 'string',
                          'example' => '/example',
                        ),
                        'StickySessionType' => 
                        array (
                          'description' => 'Cookie的处理方式。取值：

* **insert**：植入Cookie。客户端第一次访问时，负载均衡会在返回请求中植入Cookie（即在HTTP或HTTPS响应报文中插入SERVERID），下次客户端携带此Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器上。

* **server**：重写Cookie。 负载均衡发现用户自定义了Cookie，将会对原来的Cookie进行重写，下次客户端携带新的Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器。

> 当**StickySession**的值为**on**时，该参数有效。',
                          'type' => 'string',
                          'example' => 'insert',
                        ),
                        'RuleName' => 
                        array (
                          'description' => '转发规则名称，长度为1~80个字符，只能使用字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）这些字符。

> 同一个监听内不同规则的名称必须唯一。',
                          'type' => 'string',
                          'example' => 'Rule2',
                        ),
                        'RuleId' => 
                        array (
                          'description' => '转发规则ID。',
                          'type' => 'string',
                          'example' => 'rule-tybqi6****',
                        ),
                        'HealthCheckConnectPort' => 
                        array (
                          'description' => '健康检查的后端服务器的端口。

取值范围：**1~65535**。

> **HealthCheck**为**on**时该参数有效，若为空且**HealthCheck**为**on**表明默认使用监听后端端口配置。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '45',
                        ),
                        'Scheduler' => 
                        array (
                          'description' => '调度算法。取值：

* **wrr**（默认值）：权重值越高的后端服务器，被轮询到的次数（概率）也越高。

* **rr**：按照访问顺序依次将外部请求依序分发到后端服务器。

> **ListenerSync**为**off**时有效，为**on**时表明与监听配置一致。',
                          'type' => 'string',
                          'example' => 'wrr',
                        ),
                        'HealthCheckTimeout' => 
                        array (
                          'description' => '接收来自运行状况检查的响应需要等待的时间。如果后端ECS在指定的时间内没有正确响应，则判定为健康检查失败。单位：秒。

取值范围：**1~300**。

> 如果**HealthCHeckTimeout**的值小于**HealthCheckInterval**的值，则**HealthCHeckTimeout**无效，超时时间为**HealthCheckInterval**的值。**HealthCheck**为**on**时，该参数有效。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '34',
                        ),
                        'ListenerSync' => 
                        array (
                          'description' => '转发规则是否从监听上继承健康检查、会话保持和调度算法配置。取值：


* **off**：不继承监听配置，转发规则自定义健康检查及会话保持配置。

* **on**：继承监听配置。',
                          'type' => 'string',
                          'example' => 'off',
                        ),
                        'HealthyThreshold' => 
                        array (
                          'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**失败**判定为**成功**。

取值范围：**2~10**。

> **HealthCheck**为**on**时，该参数有效。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5',
                        ),
                        'CookieTimeout' => 
                        array (
                          'description' => 'Cookie超时时间。单位：秒。取值范围：**1~86400**。

> 当**StickySession**为**on**且**StickySessionType**为**insert**时，该参数有效。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '56',
                        ),
                        'HealthCheckDomain' => 
                        array (
                          'description' => '用于健康检查的域名，取值：

* **$_ip**： 后端服务器的私网IP。

 当指定了IP或该参数未指定时，负载均衡会使用各后端服务器的私网IP当做健康检查使用的域名。

* **domain**：域名长度为1~80字符，只能包含字母、数字、半角句号（.）和短划线（-）。

> **HealthCheck**为**on**时，该参数有效。',
                          'type' => 'string',
                          'example' => 'www.example.com',
                        ),
                        'UnhealthyThreshold' => 
                        array (
                          'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**success**判定为**fail**。

取值范围：**2~10**。

> **HealthCheck**为**on**时，该参数有效。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'StickySession' => 
                        array (
                          'description' => '是否开启会话保持。取值：

* **on**：开启。

* **off**：不开启。

> 在**ListenerSync**为**off**时有效，为**on**时表明与监听配置一致。',
                          'type' => 'string',
                          'example' => 'off',
                        ),
                        'HealthCheck' => 
                        array (
                          'description' => '是否开启健康检查。取值：

* **on**：开启。

* **off**：不开启。

> **ListenerSync**为**off**时有效，为**on**时表明与监听配置一致。',
                          'type' => 'string',
                          'example' => 'off',
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
            'errorCode' => 'TooManyListeners',
            'errorMessage' => 'More than 1 listener is found, please be more specified.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C\\",\\n  \\"Rules\\": {\\n    \\"Rule\\": [\\n      {\\n        \\"HealthCheckHttpCode\\": \\"http_3xx\\",\\n        \\"VServerGroupId\\": \\"rsp-6cejjzl****\\",\\n        \\"Domain\\": \\"www.example.com\\",\\n        \\"Cookie\\": \\"23\\",\\n        \\"HealthCheckInterval\\": 5,\\n        \\"Url\\": \\"/cache\\",\\n        \\"HealthCheckURI\\": \\"/example\\",\\n        \\"StickySessionType\\": \\"insert\\",\\n        \\"RuleName\\": \\"Rule2\\",\\n        \\"RuleId\\": \\"rule-tybqi6****\\",\\n        \\"HealthCheckConnectPort\\": 45,\\n        \\"Scheduler\\": \\"wrr\\",\\n        \\"HealthCheckTimeout\\": 34,\\n        \\"ListenerSync\\": \\"off\\",\\n        \\"HealthyThreshold\\": 5,\\n        \\"CookieTimeout\\": 56,\\n        \\"HealthCheckDomain\\": \\"www.example.com\\",\\n        \\"UnhealthyThreshold\\": 2,\\n        \\"StickySession\\": \\"off\\",\\n        \\"HealthCheck\\": \\"off\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRulesResponse>\\n    <RequestId>9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C</RequestId>\\n    <Rules>\\n        <HealthCheckHttpCode>http_3xx</HealthCheckHttpCode>\\n        <VServerGroupId>rsp-6cejjzl****</VServerGroupId>\\n        <Domain>www.example.com</Domain>\\n        <Cookie>23</Cookie>\\n        <HealthCheckInterval>5</HealthCheckInterval>\\n        <Url>/cache</Url>\\n        <HealthCheckURI>/example</HealthCheckURI>\\n        <StickySessionType>insert</StickySessionType>\\n        <RuleName>Rule2</RuleName>\\n        <RuleId>rule-tybqi6****</RuleId>\\n        <HealthCheckConnectPort>45</HealthCheckConnectPort>\\n        <Scheduler>wrr</Scheduler>\\n        <HealthCheckTimeout>34</HealthCheckTimeout>\\n        <ListenerSync>off</ListenerSync>\\n        <HealthyThreshold>5</HealthyThreshold>\\n        <CookieTimeout>56</CookieTimeout>\\n        <HealthCheckDomain>www.example.com</HealthCheckDomain>\\n        <UnhealthyThreshold>2</UnhealthyThreshold>\\n        <StickySession>off</StickySession>\\n        <HealthCheck>off</HealthCheck>\\n    </Rules>\\n</DescribeRulesResponse>","errorExample":""}]',
      'title' => '查询指定监听已配置的转发规则',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddBackendServers' => 
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例所属地域的ID。

您可以通过调用[DescribeRegions](~~27584~~)获取地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-2ze7o5h52g02kkzz******',
          ),
        ),
        2 => 
        array (
          'name' => 'BackendServers',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要添加的后端服务器列表，包含以下参数：

- **ServerId**：String类型，必选，后端服务器的实例ID，分为ECS实例ID、ENI实例ID和ECI实例ID，当**ServerId**参数值为ENI实例ID或ECI实例ID时，**Type**参数值必选。

- **Weight**：后端服务器的权重，取值：**0**~**100**。默认值：**100**。
    
 如果值为0，则不会将请求转发给该后端服务器。

- **Description**：String类型，非必选，后端服务器描述，长度为1~80个字符，支持中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）。

- **Type**：后端服务器类型，取值：

    - **ecs**：ECS实例（默认）。
    
    - **eni**：弹性网卡实例。

    - **eci**：弹性容器实例。

> 只有性能保障型实例支持添加eni和eci类型的后端服务器。

*  **ServerIp**：ECS、ENI或者ECI的实例IP。

*  **Port**：用来接收请求的后端端口。

示例说明如下：

* 挂载ECS示例：
 
 `[{ "ServerId": "i-xxxxxxxxx", "Weight": "100", "Type": "ecs",  "Port":"80","Description":"test-112" }]`

* 挂载ENI：

  `[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-112" }]`

*  挂载ENI多IP：

  `[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-113" },{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "172.166.**.**", "Port":"80","Description":"test-113" }]`

* 挂载ECI：

  `[{ "ServerId": "eci-xxxxxxxxx", "Weight": "100", "Type": "eci", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-114" }]`

> 必须是状态为运行中的后端服务器才可以加入负载均衡实例，每次调用最多可添加20个后端服务器。





',
            'type' => 'string',
            'required' => false,
            'example' => '[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-112" },{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "172.166.**.**", "Port":"80","Description":"test-113" }]',
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
              'LoadBalancerId' => 
              array (
                'description' => '负载均衡实例ID。',
                'type' => 'string',
                'example' => 'lb-2ze7o5h52g02kkzz****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '34B82C81-F13B-4EEB-99F6-A048C67CC830',
              ),
              'BackendServers' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'BackendServer' => 
                  array (
                    'description' => '后端服务器列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '后端服务器类型。取值：

- **ecs**：ECS实例（默认）。
- **eni**：弹性网卡实例。
- **eci**：弹性容器实例。',
                          'type' => 'string',
                          'example' => 'ecs',
                        ),
                        'Weight' => 
                        array (
                          'description' => '后端服务器的权重。

取值：**0~100**。默认值：**100**。

如果值为**0**，则不会将请求转发给该后端服务器。',
                          'type' => 'string',
                          'example' => '100',
                        ),
                        'Description' => 
                        array (
                          'description' => '后端服务器描述。',
                          'type' => 'string',
                          'example' => '后端服务器',
                        ),
                        'ServerId' => 
                        array (
                          'description' => 'ECS、ENI、或者ECI实例ID。',
                          'type' => 'string',
                          'example' => 'i-2zej4lxhjoq1icu*****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified load balancer does not support the network type of the ECS instance.',
          ),
          1 => 
          array (
            'errorCode' => 'Mismatched.ZoneId',
            'errorMessage' => 'The zone of the server is not matched with the cloud box loadbalancer.',
          ),
          2 => 
          array (
            'errorCode' => 'BackendServerProcessing',
            'errorMessage' => 'Backend Server is adding, please try again later.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidBackendServers.ServerIpConflict',
            'errorMessage' => '%s.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationUnsupported.AddBackendServers',
            'errorMessage' => 'This type of backend server is not allowed to attached to singleTunnel or anyTunnel lb.',
          ),
          5 => 
          array (
            'errorCode' => 'IncorrectStatus.RSByPassToas',
            'errorMessage' => '%s.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationFailed.ActionNotSupport',
            'errorMessage' => 'The loadbalancer does not support such action.',
          ),
          7 => 
          array (
            'errorCode' => 'NetworkConflict',
            'errorMessage' => '%s.',
          ),
          8 => 
          array (
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'The system is busy.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"LoadBalancerId\\": \\"lb-2ze7o5h52g02kkzz****\\",\\n  \\"RequestId\\": \\"34B82C81-F13B-4EEB-99F6-A048C67CC830\\",\\n  \\"BackendServers\\": {\\n    \\"BackendServer\\": [\\n      {\\n        \\"Type\\": \\"ecs\\",\\n        \\"Weight\\": \\"100\\",\\n        \\"Description\\": \\"后端服务器\\",\\n        \\"ServerId\\": \\"i-2zej4lxhjoq1icu*****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AddBackendServersResponse>\\n    <LoadBalancerId>lb-2ze7o5h52g02kkzz****</LoadBalancerId>\\n    <RequestId>34B82C81-F13B-4EEB-99F6-A048C67CC830</RequestId>\\n    <BackendServers>\\n        <Type>ecs</Type>\\n        <Weight>100</Weight>\\n        <Description>后端服务器</Description>\\n        <ServerId>i-2zej4lxhjoq1icu*****</ServerId>\\n    </BackendServers>\\n</AddBackendServersResponse>","errorExample":""}]',
      'title' => '添加后端服务器',
      'summary' => '添加后端服务器。',
      'description' => '> 如果一次请求中添加多个相同的ECS实例，只会取第一个，其他相同实例会被忽略。新增后端服务器不能与同监听下已有服务器重复，否则会报错。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeHealthStatus' => 
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
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例 ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1qjwo61pqz3ah****',
          ),
        ),
        1 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例前端使用的端口。
取值：**1~65535**

> 不设置该参数表示获取所有端口的健康检查状态。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '65535',
            'minimum' => '0',
            'example' => '80',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例前端使用的协议。',
            'type' => 'string',
            'required' => false,
            'example' => 'http',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域 ID。',
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
                'example' => '365F4154-92F6-4AE4-92F8-7FF******',
              ),
              'BackendServers' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'BackendServer' => 
                  array (
                    'description' => '后端服务器列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '后端服务器列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Protocol' => 
                        array (
                          'description' => '负载均衡实例前端使用的协议。',
                          'type' => 'string',
                          'example' => 'http',
                        ),
                        'ServerHealthStatus' => 
                        array (
                          'description' => '后端服务器的健康状况。

- normal：后端服务器健康。
- abnormal：后端服务器不健康。
- unavailable：未完成健康检查。',
                          'type' => 'string',
                          'example' => 'abnormal',
                        ),
                        'ListenerPort' => 
                        array (
                          'description' => '负载均衡实例前端使用的端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '80',
                        ),
                        'ServerIp' => 
                        array (
                          'description' => '后端服务器IP地址。',
                          'type' => 'string',
                          'example' => '192.XX.XX.11',
                        ),
                        'Port' => 
                        array (
                          'description' => '负载均衡实例后端使用的端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '80',
                        ),
                        'ServerId' => 
                        array (
                          'description' => '后端服务器实例ID。',
                          'type' => 'string',
                          'example' => 'i-bp1h5u3fv54ytf***',
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
            'errorCode' => 'TooManyListeners',
            'errorMessage' => 'More than 1 listener is found, please be more specified.',
          ),
          1 => 
          array (
            'errorCode' => 'LocationServiceTimeout',
            'errorMessage' => 'Location service connection timeout. Please try again later.',
          ),
          2 => 
          array (
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'The system is busy.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF******\\",\\n  \\"BackendServers\\": {\\n    \\"BackendServer\\": [\\n      {\\n        \\"Protocol\\": \\"http\\",\\n        \\"ServerHealthStatus\\": \\"abnormal\\",\\n        \\"ListenerPort\\": 80,\\n        \\"ServerIp\\": \\"192.XX.XX.11\\",\\n        \\"Port\\": 80,\\n        \\"ServerId\\": \\"i-bp1h5u3fv54ytf***\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询后端服务器的健康状态',
      'summary' => '查询后端服务器的健康状态。',
    ),
    'RemoveBackendServers' => 
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp15lbk8uja8rvm4a****',
          ),
        ),
        2 => 
        array (
          'name' => 'BackendServers',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要移除的后端服务器。

- **ServerId**：后端服务器ID，必填，String类型。

- **Type**：后端服务器类型，取值：
     - **ecs**（默认值）: 云服务器ECS实例。

    - **eni**：弹性网卡ENI实例。
    - **eci**：弹性容器实例。

- **Weight**：后端服务器的权重，取值范围：**0**~**100**，Integer类型。

一次调用最多可以移除20个后端服务器。示例说明如下：

- 移除ECS：

 `[{"ServerId":"i-bp1fq61enf4loa5i****", "Type": "ecs","Weight":"100"}]`

- 移除ENI：
 
 `[{"ServerId":"eni-2ze1sdp5****","Type": "eni","Weight":"100"}]`

- 移除ECI：
 
 `[{"ServerId":"eci-2ze1sdp5****","Type": "eci","Weight":"100"}]`',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '[{"ServerId":"i-bp1fq61enf4loa5i****", "Type": "ecs","Weight":"100"}]',
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
              'LoadBalancerId' => 
              array (
                'description' => '负载均衡实例ID。',
                'type' => 'string',
                'example' => 'lb-bp15lbk8uja8rvm4a****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF34******',
              ),
              'BackendServers' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'BackendServer' => 
                  array (
                    'description' => '后端服务器列表。 ',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '后端服务器列表。 ',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '后端服务器类型，取值：

* **ecs**：ECS实例。

* **eni**：弹性网卡实例。

* **eci**：弹性容器实例。',
                          'type' => 'string',
                          'example' => 'ecs',
                        ),
                        'Weight' => 
                        array (
                          'description' => '后端服务器的权重，范围为**0~100**。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                        'Description' => 
                        array (
                          'description' => '后端服务器组描述。',
                          'type' => 'string',
                          'example' => 'BackendServer1',
                        ),
                        'ServerId' => 
                        array (
                          'description' => '后端服务器的实例ID。',
                          'type' => 'string',
                          'example' => 'i-bp1fq61enf4loa5i****',
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
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'The system is busy.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LoadBalancerId\\": \\"lb-bp15lbk8uja8rvm4a****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34******\\",\\n  \\"BackendServers\\": {\\n    \\"BackendServer\\": [\\n      {\\n        \\"Type\\": \\"ecs\\",\\n        \\"Weight\\": 100,\\n        \\"Description\\": \\"BackendServer1\\",\\n        \\"ServerId\\": \\"i-bp1fq61enf4loa5i****\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '移除后端服务器',
      'summary' => '移除后端服务器。',
      'description' => '> 如果要移除的后端服务器不在指定的负载均衡实例的服务器列表中，调用时会直接忽略，不会报错。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetBackendServers' => 
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1qjwo61pqz3a******',
          ),
        ),
        2 => 
        array (
          'name' => 'BackendServers',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要添加的后端服务器列表，包含以下参数：

- **ServerId**：String类型，必选，后端服务器的实例ID，分为ECS实例ID、ENI实例ID和ECI实例ID，当**ServerId**参数值为ENI实例ID或ECI实例ID时，**Type**参数值必选。

- **Weight**：后端服务器的权重，取值：**0**~**100**。默认值：**100**。
如果值为0，则不会将请求转发给该后端服务器。

- **Description**：String类型，非必选，后端服务器描述，长度为1~80个字符，支持中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）。

- **Type**：后端服务器类型，取值：

    - **ecs**：ECS实例（默认）。
    
    - **eni**：弹性网卡实例。

    - **eci**：弹性容器实例。

> 只有性能保障型实例支持添加eni和eci类型的后端服务器。

*  **ServerIp**：ENI或ECI的实例IP。

*  **Port**：用来接收请求的后端端口。

示例说明如下：

* 挂载ECS示例：
 
  `[{ "ServerId": "i-xxxxxxxxx", "Weight": "100", "Type": "ecs",  "Port":"80","Description":"test-112" }]`

* 挂载ENI：

  `[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-112" }]`

*  挂载ENI多IP：

   `[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-113" },{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "172.166.**.**", "Port":"80","Description":"test-113" }]`

* 挂载ECI：

  `[{ "ServerId": "eci-xxxxxxxxx", "Weight": "100", "Type": "eci", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-114" }]`

> 必须是状态为运行中的后端服务器才可以加入负载均衡实例，每次调用最多可添加20个后端服务器。',
            'type' => 'string',
            'required' => false,
            'example' => '[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-112" },{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "172.166.**.**", "Port":"80","Description":"test-113" }]',
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
              'LoadBalancerId' => 
              array (
                'description' => '传统型负载均衡实例ID。',
                'type' => 'string',
                'example' => 'lb-bp1qjwo61pqz3a******',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7F******',
              ),
              'BackendServers' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'BackendServer' => 
                  array (
                    'description' => ' 后端服务器列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '后端服务器列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '后端服务器类型，取值：

* **ecs**（默认）：ECS实例。

* **eni**：弹性网卡实例。

* **eci**：弹性容器实例。',
                          'type' => 'string',
                          'example' => 'eni',
                        ),
                        'Weight' => 
                        array (
                          'description' => '后端服务器的权重。',
                          'type' => 'string',
                          'example' => '100',
                        ),
                        'Description' => 
                        array (
                          'description' => '后端服务器描述。',
                          'type' => 'string',
                          'example' => '后端服务器',
                        ),
                        'ServerId' => 
                        array (
                          'description' => '后端服务器ID。',
                          'type' => 'string',
                          'example' => 'eni-hhshhs****',
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
            'errorCode' => 'Mismatched.ZoneId',
            'errorMessage' => 'The zone of the server is not matched with the cloud box loadbalancer.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"LoadBalancerId\\": \\"lb-bp1qjwo61pqz3a******\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7F******\\",\\n  \\"BackendServers\\": {\\n    \\"BackendServer\\": [\\n      {\\n        \\"Type\\": \\"eni\\",\\n        \\"Weight\\": \\"100\\",\\n        \\"Description\\": \\"后端服务器\\",\\n        \\"ServerId\\": \\"eni-hhshhs****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SetBackendServersResponse>\\n    <LoadBalancerId>lb-bp1qjwo61pqz3a******</LoadBalancerId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <BackendServers>\\n        <Type>eni</Type>\\n        <Weight>100</Weight>\\n        <Description>后端服务器</Description>\\n        <ServerId>eni-hhshhs****</ServerId>\\n    </BackendServers>\\n</SetBackendServersResponse>","errorExample":""}]',
      'title' => '设置后端服务器权重',
      'summary' => '设置后端服务器权重。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateVServerGroup' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'allowEmptyValue' => true,
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源的标签键。N的取值范围：**1~20**。一旦输入该值，则不允许为空字符串。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。N的取值范围：**1~20**。一旦输入该值，可以为空字符串。
最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1qjwo61pqz3ahl******',
          ),
        ),
        3 => 
        array (
          'name' => 'VServerGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟服务器组名称。

长度限制为1~80个字符，支持中文、字母、数字、短划线（-）、正斜线（/）、英文句点（.）和下划线（_）。',
            'type' => 'string',
            'required' => false,
            'example' => 'Group1',
          ),
        ),
        4 => 
        array (
          'name' => 'BackendServers',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要添加的后端服务器列表，包含以下参数：

- **ServerId**：String类型，必选，后端服务器的实例ID，分为ECS实例ID、ENI实例ID和ECI实例ID，当**ServerId**参数值为ENI实例ID或ECI实例ID时，**Type**参数值必选。

- **Weight**：后端服务器的权重，取值：**0**~**100**。默认值：**100**。
如果值为0，则不会将请求转发给该后端服务器。

- **Description**：String类型，非必选，后端服务器描述，长度为1~80个字符，支持中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）。

- **Type**：后端服务器类型，取值：

    - **ecs**：ECS实例（默认）。
    
    - **eni**：弹性网卡实例。

    - **eci**：弹性容器实例。

> 只有性能保障型实例支持添加eni和eci类型的后端服务器。

*  **ServerIp**：ENI或ECI的实例IP。

*  **Port**：用来接收请求的后端端口。

示例说明如下：

* 挂载ECS示例：
 
  `[{ "ServerId": "i-xxxxxxxxx", "Weight": "100", "Type": "ecs",  "Port":"80","Description":"test-112" }]`

* 挂载ENI：

  `[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-112" }]`

*  挂载ENI多IP：

   `[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-113" },{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "172.166.**.**", "Port":"80","Description":"test-113" }]`

* 挂载ECI：

  `[{ "ServerId": "eci-xxxxxxxxx", "Weight": "100", "Type": "eci", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-114" }]`

> 必须是状态为运行中的后端服务器才可以加入负载均衡实例，每次调用最多可添加20个后端服务器。',
            'type' => 'string',
            'required' => false,
            'example' => '[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-112" },{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "172.166.**.**", "Port":"80","Description":"test-113" }]',
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
              'VServerGroupId' => 
              array (
                'description' => '后端服务器组ID。',
                'type' => 'string',
                'example' => 'rsp-cige6******',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C',
              ),
              'BackendServers' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'BackendServer' => 
                  array (
                    'description' => ' 后端服务器列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '后端服务器列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '后端服务器类型，取值：

* **ecs**（默认）：ECS实例。

* **eni**：弹性网卡实例。

* **eci**：弹性容器实例。',
                          'type' => 'string',
                          'example' => 'eni',
                        ),
                        'Weight' => 
                        array (
                          'description' => '后端服务器的权重。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                        'Description' => 
                        array (
                          'description' => '后端服务器组描述。',
                          'type' => 'string',
                          'example' => '后端服务器组',
                        ),
                        'Port' => 
                        array (
                          'description' => '后端服务器使用的端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '70',
                        ),
                        'ServerId' => 
                        array (
                          'description' => 'ECS实例ID或ENI实例ID。',
                          'type' => 'string',
                          'example' => 'eni-hhshhs****',
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
            'errorCode' => 'LBNotSupportIpv6Backend',
            'errorMessage' => 'The specified loadbalancer does not support ipv6 backend.',
          ),
          1 => 
          array (
            'errorCode' => 'Mismatched.ZoneId',
            'errorMessage' => 'The zone of the server is not matched with the cloud box loadbalancer.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidBackendServers.ServerIpConflict',
            'errorMessage' => '%s.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationUnsupported.CreateVServerGroup',
            'errorMessage' => 'This type of backend server is not allowed to attached to singleTunnel or anyTunnel lb.',
          ),
          4 => 
          array (
            'errorCode' => 'IncorrectStatus.RSByPassToas',
            'errorMessage' => '%s.',
          ),
          5 => 
          array (
            'errorCode' => 'BackendServer.InvalidType',
            'errorMessage' => 'The specified Type is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'BackendServer.ServerRegionIdNotEqual',
            'errorMessage' => 'The specified ServerRegionId must be equal.',
          ),
          7 => 
          array (
            'errorCode' => 'OperationFailed.InvalidCen',
            'errorMessage' => 'The cen related with this loadbalancer is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'IncorrectStatus.CenNotAssociated',
            'errorMessage' => 'The action is invalid because the loadbalancer is not associated with cen.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidBackendServers.MissingCenBandWidth',
            'errorMessage' => 'The bandwidth is missing between loadbalancer and backendServers in cen.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidBackendServers.VpcNotInCen',
            'errorMessage' => 'The BackendServers is not in the cen associated with the loadbalancer.',
          ),
          11 => 
          array (
            'errorCode' => 'InvalidServerId.NotExist',
            'errorMessage' => 'The specified ServerId is not exist.',
          ),
          12 => 
          array (
            'errorCode' => 'MissingParameter.ServerRegionId',
            'errorMessage' => 'The parameter ServerRegionId is required.',
          ),
          13 => 
          array (
            'errorCode' => 'MissingParameter.VbrId',
            'errorMessage' => 'The parameter VbrId is required.',
          ),
          14 => 
          array (
            'errorCode' => 'InvalidParameter.ServerRegionId',
            'errorMessage' => 'The parameter ServerRegionId is invalid for crossborder.',
          ),
          15 => 
          array (
            'errorCode' => 'InvalidVbrId.NotInCen',
            'errorMessage' => 'The VbrId is not in the cen associated with the loadbalancer.',
          ),
          16 => 
          array (
            'errorCode' => 'InvalidParameter.ZoneNotSupport',
            'errorMessage' => 'The zone does not support the parameter %s.',
          ),
          17 => 
          array (
            'errorCode' => 'NetworkConflict',
            'errorMessage' => '%s.',
          ),
          18 => 
          array (
            'errorCode' => 'InvalidParam.TagValue	',
            'errorMessage' => '%s.',
          ),
          19 => 
          array (
            'errorCode' => 'InvalidParam.TagKey',
            'errorMessage' => '%s.',
          ),
          20 => 
          array (
            'errorCode' => 'SizeLimitExceeded.Tag',
            'errorMessage' => '%s.',
          ),
          21 => 
          array (
            'errorCode' => 'MissingParam.TagKey',
            'errorMessage' => 'The param MissingParam.TagKey is missing.',
          ),
          22 => 
          array (
            'errorCode' => 'VpcSystemBusy',
            'errorMessage' => 'Invoke vpc system busy, please retry later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"VServerGroupId\\": \\"rsp-cige6******\\",\\n  \\"RequestId\\": \\"9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C\\",\\n  \\"BackendServers\\": {\\n    \\"BackendServer\\": [\\n      {\\n        \\"Type\\": \\"eni\\",\\n        \\"Weight\\": 100,\\n        \\"Description\\": \\"后端服务器组\\",\\n        \\"Port\\": 70,\\n        \\"ServerId\\": \\"eni-hhshhs****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateVServerGroupResponse>\\n    <VServerGroupId>rsp-cige6******</VServerGroupId>\\n    <RequestId>9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C</RequestId>\\n    <BackendServers>\\n        <Type>Type</Type>\\n        <Weight>100</Weight>\\n        <Description>后端服务器组</Description>\\n        <Port>70</Port>\\n        <ServerId>vm-2****</ServerId>\\n    </BackendServers>\\n</CreateVServerGroupResponse>","errorExample":""}]',
      'title' => '创建虚拟服务器组并添加后端服务器',
      'summary' => '创建虚拟服务器组并向指定的服务器组中添加后端服务器。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteVServerGroup' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'VServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟服务器组ID。

> 如果已有监听绑定了该虚拟服务器组，将无法删除。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rsp-cige6j*****',
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
                'example' => '9DEC9C28-AB05-4DDF-9A78-6B******',
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
            'errorCode' => 'RspoolVipExist',
            'errorMessage' => 'there are vips associating with this vServer group.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9DEC9C28-AB05-4DDF-9A78-6B******\\"\\n}","errorExample":"{\\"Code\\":\\"InvalidParameter\\",\\"Message\\":\\"The specified parameter is not valid.\\",\\"HostId\\":\\"slb-pop.aliyuncs.com\\",\\"RequestId\\":\\"0669D684-69D8-408E-A4FA-B9011E0F4E66\\"}"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"utf-8\\"?>\\n<DeleteVServerGroupResponse>\\n\\t<RequestId>9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C</RequestId>\\n</DeleteVServerGroupResponse>","errorExample":""}]',
      'title' => '删除虚拟服务器组',
      'summary' => '删除虚拟服务器组。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetVServerGroupAttribute' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡地域ID，不可更改。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'VServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟服务器组ID，不可更改。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rsp-cige6****',
          ),
        ),
        2 => 
        array (
          'name' => 'VServerGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟服务器组名称，可自定义更改。',
            'type' => 'string',
            'required' => false,
            'example' => 'Group1',
          ),
        ),
        3 => 
        array (
          'name' => 'BackendServers',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '后端服务器列表，该接口只能用于修改后端服务器的权重和虚拟服务器组名称。
包含以下参数：

- **ServerId**：String类型，必选，后端服务器的实例ID，分为ECS实例ID、ENI实例ID和ECI实例ID，当**ServerId**参数值为ENI实例ID或ECI实例ID时，**Type**参数值必选。

- **Weight**：后端服务器的权重，取值：**0**~**100**。默认值：**100**。
如果值为0，则不会将请求转发给该后端服务器。

- **Description**：String类型，非必选，后端服务器描述，长度为1~80个字符，支持中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）。

- **Type**：后端服务器类型，取值：

    - **ecs**：ECS实例（默认）。
    
    - **eni**：弹性网卡实例。

    - **eci**：弹性容器实例。

> 只有性能保障型实例支持添加eni和eci类型的后端服务器。

*  **ServerIp**：ENI或ECI的实例IP。

*  **Port**：用来接收请求的后端端口。

示例说明如下：

* 挂载ECS示例：
 
  `[{ "ServerId": "i-xxxxxxxxx", "Weight": "100", "Type": "ecs",  "Port":"80","Description":"test-112" }]`

* 挂载ENI：

  `[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-112" }]`

*  挂载ENI多IP：

   `[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-113" },{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "172.166.**.**", "Port":"80","Description":"test-113" }]`

* 挂载ECI：

  `[{ "ServerId": "eci-xxxxxxxxx", "Weight": "100", "Type": "eci", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-114" }]`

> 必须是状态为运行中的后端服务器才可以加入负载均衡实例，每次调用最多可添加20个后端服务器。',
            'type' => 'string',
            'required' => false,
            'example' => '[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.XX.XX.6", "Port":"80","Description":"test-112" },{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "172.XX.XX.6", "Port":"80","Description":"test-113" }]',
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
              'VServerGroupId' => 
              array (
                'description' => '服务器组ID。',
                'type' => 'string',
                'example' => 'rsp-cige6****',
              ),
              'VServerGroupName' => 
              array (
                'description' => ' 虚拟服务器组名称。',
                'type' => 'string',
                'example' => 'Group1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C',
              ),
              'BackendServers' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'BackendServer' => 
                  array (
                    'description' => ' 后端服务器列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '后端服务器列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '后端服务器类型，取值：

* **ecs**（默认）：ECS实例。

* **eni**：弹性网卡实例。

* **eci**：弹性容器实例。',
                          'type' => 'string',
                          'example' => 'ecs',
                        ),
                        'Weight' => 
                        array (
                          'description' => '后端服务器的权重。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                        'Description' => 
                        array (
                          'description' => '后端服务器组描述。',
                          'type' => 'string',
                          'example' => '后端服务器组描述。',
                        ),
                        'Port' => 
                        array (
                          'description' => '后端服务器使用的端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '70',
                        ),
                        'ServerId' => 
                        array (
                          'description' => '后端服务器实例ID。',
                          'type' => 'string',
                          'example' => 'i-bp1ek6yd7jvkx****',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The VServerGroupName or BackendServers is required at lease one.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.ZoneNotSupport',
            'errorMessage' => 'The zone does not support the parameter %s.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"VServerGroupId\\": \\"rsp-cige6****\\",\\n  \\"VServerGroupName\\": \\"Group1\\",\\n  \\"RequestId\\": \\"9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C\\",\\n  \\"BackendServers\\": {\\n    \\"BackendServer\\": [\\n      {\\n        \\"Type\\": \\"ecs\\",\\n        \\"Weight\\": 100,\\n        \\"Description\\": \\"后端服务器组描述。\\",\\n        \\"Port\\": 70,\\n        \\"ServerId\\": \\"i-bp1ek6yd7jvkx****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateLoadBalancerTCPListener>\\n<VServerGroupId>rsp-cige6****</VServerGroupId>\\n<RequestId>9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C</RequestId>\\n<VServerGroupName>Group1</VServerGroupName>\\n<BackendServers>\\n    <BackendServer>\\n        <Type>ecs</Type>\\n        <Description>后端服务器组描述。</Description>\\n        <ServerId>i-bp1ek6yd7jvkx****</ServerId>\\n        <Port>70</Port>\\n        <Weight>100</Weight>\\n    </BackendServer>\\n</BackendServers>\\n</CreateLoadBalancerTCPListener>","errorExample":""}]',
      'title' => '修改虚拟服务器组的配置',
      'summary' => '修改虚拟服务器组的配置。',
      'description' => '该接口只能用于修改后端服务器的权重和虚拟服务器组名称：

- 如果您需要修改后端服务器，请参见接口[ModifyVServerGroupBackendServers](~~35220~~)。

- 如果您需要添加后端服务器，请参见接口[AddVServerGroupBackendServers](~~35218~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeVServerGroups' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的地域ID。

您可以通过调用[DescribeRegions](~~27584~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1o94dp5i6ea*******',
          ),
        ),
        2 => 
        array (
          'name' => 'IncludeRule',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回关联的转发规则信息。取值：

- **true**：是。
- **false**（默认值）：否。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'IncludeListener',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回关联的监听信息。取值：

- **true**：是。
- **false**（默认值）：否。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'allowEmptyValue' => true,
          'style' => 'repeatList',
          'schema' => 
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
                  'description' => '资源的标签键。N的取值范围：**1~20**。一旦输入该值，则不允许为空字符串。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。N的取值范围：**1~20**。一旦输入该值，可以为空字符串。
最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        5 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '虚拟服务器组名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'Group3',
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
                'example' => '9DEC9C28-AB05-4DDF-9A78-6B08******',
              ),
              'VServerGroups' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'VServerGroup' => 
                  array (
                    'description' => '后端服务器列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '后端服务器列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VServerGroupId' => 
                        array (
                          'description' => '服务器组ID。',
                          'type' => 'string',
                          'example' => 'rsp-0bf******',
                        ),
                        'VServerGroupName' => 
                        array (
                          'description' => '服务器组名称。',
                          'type' => 'string',
                          'example' => 'Group3',
                        ),
                        'AssociatedObjects' => 
                        array (
                          'description' => '关联信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Listeners' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Listener' => 
                                array (
                                  'description' => '监听列表。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '监听列表。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Port' => 
                                      array (
                                        'description' => '监听端口。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '80',
                                      ),
                                      'Protocol' => 
                                      array (
                                        'description' => '监听协议。取值：**tcp**、**udp**、**http**或**https**。',
                                        'type' => 'string',
                                        'example' => 'tcp',
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                            'Rules' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Rule' => 
                                array (
                                  'description' => '转发规则列表。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '转发规则列表。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Url' => 
                                      array (
                                        'description' => '访问路径。',
                                        'type' => 'string',
                                        'example' => '/example',
                                      ),
                                      'Domain' => 
                                      array (
                                        'description' => '请求域名。',
                                        'type' => 'string',
                                        'example' => 'www.example.com',
                                      ),
                                      'RuleName' => 
                                      array (
                                        'description' => '转发规则名称。',
                                        'type' => 'string',
                                        'example' => 'test',
                                      ),
                                      'RuleId' => 
                                      array (
                                        'description' => '转发规则ID。',
                                        'type' => 'string',
                                        'example' => 'rule-a3x3pg1******',
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'ServerCount' => 
                        array (
                          'description' => '服务器个数。

该参数对应的功能默认不开放，如需使用请联系销售或提交工单。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '传统型负载均衡实例的创建时间，格式：`YYYY-MM-DDThh:mm:ssZ`。',
                          'type' => 'string',
                          'example' => '2022-08-31T02:49:05Z',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '标签列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '标签列表。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'TagKey' => 
                                  array (
                                    'description' => '资源的标签键。',
                                    'type' => 'string',
                                    'example' => 'TestKey',
                                  ),
                                  'TagValue' => 
                                  array (
                                    'description' => '资源的标签值。',
                                    'type' => 'string',
                                    'example' => 'TestValue',
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
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParam.TagKey',
            'errorMessage' => 'The param of TagKey is missing.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9DEC9C28-AB05-4DDF-9A78-6B08******\\",\\n  \\"VServerGroups\\": {\\n    \\"VServerGroup\\": [\\n      {\\n        \\"VServerGroupId\\": \\"rsp-0bf******\\",\\n        \\"VServerGroupName\\": \\"Group3\\",\\n        \\"AssociatedObjects\\": {\\n          \\"Listeners\\": {\\n            \\"Listener\\": [\\n              {\\n                \\"Port\\": 80,\\n                \\"Protocol\\": \\"tcp\\"\\n              }\\n            ]\\n          },\\n          \\"Rules\\": {\\n            \\"Rule\\": [\\n              {\\n                \\"Url\\": \\"/example\\",\\n                \\"Domain\\": \\"www.example.com\\",\\n                \\"RuleName\\": \\"test\\",\\n                \\"RuleId\\": \\"rule-a3x3pg1******\\"\\n              }\\n            ]\\n          }\\n        },\\n        \\"ServerCount\\": 1,\\n        \\"CreateTime\\": \\"2022-08-31T02:49:05Z\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"TagKey\\": \\"TestKey\\",\\n              \\"TagValue\\": \\"TestValue\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeVServerGroupsResponse>\\n    <RequestId>9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C</RequestId>\\n    <VServerGroups>\\n        <VServerGroupId>rsp-0bfucwuotx</VServerGroupId>\\n        <VServerGroupName>Group3</VServerGroupName>\\n        <AssociatedObjects>\\n            <Listeners>\\n                <Port>80</Port>\\n                <Protocol>tcp</Protocol>\\n            </Listeners>\\n            <Rules>\\n                <Url>/example</Url>\\n                <Domain>www.example.com</Domain>\\n                <RuleName>test</RuleName>\\n                <RuleId>rule-a3x3pg1yohq3lq****</RuleId>\\n            </Rules>\\n        </AssociatedObjects>\\n        <ServerCount>1</ServerCount>\\n        <CreateTime>2022-08-31T02:49:05Z</CreateTime>\\n        <Tags>\\n            <TagKey>TestKey</TagKey>\\n            <TagValue>TestValue</TagValue>\\n        </Tags>\\n    </VServerGroups>\\n</DescribeVServerGroupsResponse>","errorExample":""}]',
      'title' => '查询虚拟服务器组列表',
      'summary' => '查询虚拟服务器组列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeVServerGroupAttribute' => 
    array (
      'summary' => '查询虚拟服务器组的详细信息。',
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
            'description' => '传统型负载均衡实例的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'VServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟服务器组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rsp-cige6****',
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
              'VServerGroupId' => 
              array (
                'description' => '虚拟服务器组ID。',
                'type' => 'string',
                'example' => 'rsp-cige6****',
              ),
              'VServerGroupName' => 
              array (
                'description' => '虚拟服务器组的名称。',
                'type' => 'string',
                'example' => 'Group1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9DEC9C28-AB05-4DDF-9A78-6B******',
              ),
              'LoadBalancerId' => 
              array (
                'description' => '传统型负载均衡实例ID。',
                'type' => 'string',
                'example' => 'lb-jfakd****',
              ),
              'BackendServers' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'BackendServer' => 
                  array (
                    'description' => '后端服务器列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '后端服务器列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '后端服务器类型，取值：

- **ecs**：ECS实例（默认）。
- **eni**：弹性网卡实例。
- **eci**：弹性容器实例。',
                          'type' => 'string',
                          'example' => 'ecs',
                        ),
                        'Weight' => 
                        array (
                          'description' => '后端服务器的权重。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                        'Description' => 
                        array (
                          'description' => '服务器组描述。

> 若用户未设置Description，则该参数不返回。',
                          'type' => 'string',
                          'example' => '服务器组描述。',
                        ),
                        'ServerIp' => 
                        array (
                          'description' => '后端服务器实例IP。',
                          'type' => 'string',
                          'example' => '192.XX.XX.11',
                        ),
                        'Port' => 
                        array (
                          'description' => '后端服务器使用的端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '90',
                        ),
                        'ServerId' => 
                        array (
                          'description' => '后端服务器实例ID。',
                          'type' => 'string',
                          'example' => 'vm-233',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'CreateTime' => 
              array (
                'description' => '传统型负载均衡实例的创建时间，格式：`YYYY-MM-DDThh:mm:ssZ`。',
                'type' => 'string',
                'example' => '2022-08-31T02:49:05Z',
              ),
              'Tags' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Tag' => 
                  array (
                    'description' => '服务器上配置的标签。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '服务器上配置的标签。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TagKey' => 
                        array (
                          'description' => '实例的标签键。N的取值范围：**1**~**20**。一旦输入该值，则不允许为空字符串。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                          'type' => 'string',
                          'example' => 'TestKey',
                        ),
                        'TagValue' => 
                        array (
                          'description' => '实例的标签值。N的取值范围：**1**~**20**。一旦输入该值，可以为空字符串。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                          'type' => 'string',
                          'example' => 'TestValue',
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
            'errorCode' => 'LocationServiceTimeout',
            'errorMessage' => 'Location service connection timeout. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"VServerGroupId\\": \\"rsp-cige6****\\",\\n  \\"VServerGroupName\\": \\"Group1\\",\\n  \\"RequestId\\": \\"9DEC9C28-AB05-4DDF-9A78-6B******\\",\\n  \\"LoadBalancerId\\": \\"lb-jfakd****\\",\\n  \\"BackendServers\\": {\\n    \\"BackendServer\\": [\\n      {\\n        \\"Type\\": \\"ecs\\",\\n        \\"Weight\\": 100,\\n        \\"Description\\": \\"服务器组描述。\\",\\n        \\"ServerIp\\": \\"192.XX.XX.11\\",\\n        \\"Port\\": 90,\\n        \\"ServerId\\": \\"vm-233\\"\\n      }\\n    ]\\n  },\\n  \\"CreateTime\\": \\"2022-08-31T02:49:05Z\\",\\n  \\"Tags\\": {\\n    \\"Tag\\": [\\n      {\\n        \\"TagKey\\": \\"TestKey\\",\\n        \\"TagValue\\": \\"TestValue\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeVServerGroupAttributeResponse>\\n    <VServerGroupId>rsp-cige6****</VServerGroupId>\\n    <VServerGroupName>Group1</VServerGroupName>\\n    <RequestId>9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C</RequestId>\\n    <LoadBalancerId>lb-jfakd****</LoadBalancerId>\\n    <BackendServers>\\n        <Type>ecs</Type>\\n        <Weight>100</Weight>\\n        <Description>服务器组描述。</Description>\\n        <ServerIp>192.XX.XX.11</ServerIp>\\n        <Port>90</Port>\\n        <ServerId>vm-233</ServerId>\\n    </BackendServers>\\n    <CreateTime>2022-08-31T02:49:05Z</CreateTime>\\n</DescribeVServerGroupAttributeResponse>","errorExample":""}]',
      'title' => '查询虚拟服务器组的详细信息',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddVServerGroupBackendServers' => 
    array (
      'summary' => '向指定的虚拟服务器组中添加后端服务器。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'VServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟服务器组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rsp-cige6******',
          ),
        ),
        2 => 
        array (
          'name' => 'BackendServers',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要添加的后端服务器列表，包含以下参数：

- **ServerId**：String类型，必选，后端服务器的实例ID，分为ECS实例ID、ENI实例ID和ECI实例ID，当**ServerId**参数值为ENI实例ID或ECI实例ID时，**Type**参数值必选。

- **Weight**：后端服务器的权重，取值：**0**~**100**。默认值：**100**。
如果值为0，则不会将请求转发给该后端服务器。

- **Description**：String类型，非必选，后端服务器描述，长度为1~80个字符，支持中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）。

- **Type**：后端服务器类型，取值：

    - **ecs**：ECS实例（默认）。
    
    - **eni**：弹性网卡实例。

    - **eci**：弹性容器实例。

> 只有性能保障型实例支持添加eni和eci类型的后端服务器。

*  **ServerIp**：ENI或ECI的实例IP。

*  **Port**：用来接收请求的后端端口。

示例说明如下：

* 挂载ECS示例：
 
  `[{ "ServerId": "i-xxxxxxxxx", "Weight": "100", "Type": "ecs",  "Port":"80","Description":"test-112" }]`

* 挂载ENI：

  `[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-112" }]`

*  挂载ENI多IP：

   `[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-113" },{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "172.166.**.**", "Port":"80","Description":"test-113" }]`

* 挂载ECI：

  `[{ "ServerId": "eci-xxxxxxxxx", "Weight": "100", "Type": "eci", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-114" }]`

> 必须是状态为运行中的后端服务器才可以加入负载均衡实例，每次调用最多可添加20个后端服务器。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-112" },{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "172.166.**.**", "Port":"80","Description":"test-113" }]',
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
              'VServerGroupId' => 
              array (
                'description' => '虚拟服务器组ID。',
                'type' => 'string',
                'example' => 'rsp-cige6j******',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9DEC9C28-AB05-4DDF-9A78-6B******',
              ),
              'BackendServers' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'BackendServer' => 
                  array (
                    'description' => '后端服务器列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '后端服务器列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '后端服务器类型，取值：

* **ecs**（默认）：ECS实例。

* **eni**：弹性网卡实例。

* **eci**：弹性容器实例。',
                          'type' => 'string',
                          'example' => 'eni',
                        ),
                        'Weight' => 
                        array (
                          'description' => '后端服务器的权重。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                        'Description' => 
                        array (
                          'description' => '后端服务器组描述。',
                          'type' => 'string',
                          'example' => '后端服务器组',
                        ),
                        'Port' => 
                        array (
                          'description' => '后端服务器使用的端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '70',
                        ),
                        'ServerId' => 
                        array (
                          'description' => 'ECS实例ID或者ENI的实例ID。',
                          'type' => 'string',
                          'example' => 'eni-hhshhs****',
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
            'errorCode' => 'InvalidBackendServers.ServerIpConflict',
            'errorMessage' => '%s.',
          ),
          1 => 
          array (
            'errorCode' => 'Mismatched.ZoneId',
            'errorMessage' => 'The zone of the server is not matched with the cloud box loadbalancer.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationUnsupported.AddVServerGroupBackendServers',
            'errorMessage' => 'This type of backend server is not allowed to attached to singleTunnel or anyTunnel lb.',
          ),
          3 => 
          array (
            'errorCode' => 'IncorrectStatus.RSByPassToas',
            'errorMessage' => '%s.',
          ),
          4 => 
          array (
            'errorCode' => 'BackendServer.InvalidType',
            'errorMessage' => 'The specified Type is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'BackendServer.ServerRegionIdNotEqual',
            'errorMessage' => 'The specified ServerRegionId must be equal.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationFailed.InvalidCen',
            'errorMessage' => 'The cen related with this loadbalancer is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'IncorrectStatus.CenNotAssociated',
            'errorMessage' => 'The action is invalid because the loadbalancer is not associated with cen.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidBackendServers.MissingCenBandWidth',
            'errorMessage' => 'The bandwidth is missing between loadbalancer and backendServers in cen.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidBackendServers.VpcNotInCen',
            'errorMessage' => 'The BackendServers is not in the cen associated with the loadbalancer.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidServerId.NotExist',
            'errorMessage' => 'The specified ServerId is not exist.',
          ),
          11 => 
          array (
            'errorCode' => 'MissingParameter.ServerRegionId',
            'errorMessage' => 'The parameter ServerRegionId is required.',
          ),
          12 => 
          array (
            'errorCode' => 'MissingParameter.VbrId',
            'errorMessage' => 'The parameter VbrId is required.',
          ),
          13 => 
          array (
            'errorCode' => 'InvalidParameter.ServerRegionId',
            'errorMessage' => 'The parameter ServerRegionId is invalid for crossborder.',
          ),
          14 => 
          array (
            'errorCode' => 'InvalidVbrId.NotInCen',
            'errorMessage' => 'The VbrId is not in the cen associated with the loadbalancer.',
          ),
          15 => 
          array (
            'errorCode' => 'InvalidParameter.ZoneNotSupport',
            'errorMessage' => 'The zone does not support the parameter %s.',
          ),
          16 => 
          array (
            'errorCode' => 'MasterSlaveServerConflict',
            'errorMessage' => 'The servers are conflict for MasterSlaveGroup.',
          ),
          17 => 
          array (
            'errorCode' => 'OperationFailed.ServiceGroupProcessing',
            'errorMessage' => 'The specified service group is processing.',
          ),
          18 => 
          array (
            'errorCode' => 'NetworkConflict',
            'errorMessage' => '%s.',
          ),
          19 => 
          array (
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'The system is busy.',
          ),
          20 => 
          array (
            'errorCode' => 'SignatureNonceUsed',
            'errorMessage' => 'Specified signature nonce was used already.',
          ),
          21 => 
          array (
            'errorCode' => 'VpcSystemBusy',
            'errorMessage' => 'Invoke vpc system busy, please retry later.',
          ),
          22 => 
          array (
            'errorCode' => 'OperationDeny.LbNotSupportIPv6Server',
            'errorMessage' => 'The specified loadbalancer does not support ipv6 server.',
          ),
          23 => 
          array (
            'errorCode' => 'OperationBusy',
            'errorMessage' => 'The operation is busy.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.vServers',
            'errorMessage' => 'The specified enis %s does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.Cen',
            'errorMessage' => 'The specified resource Cen %s not Exists.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"VServerGroupId\\": \\"rsp-cige6j******\\",\\n  \\"RequestId\\": \\"9DEC9C28-AB05-4DDF-9A78-6B******\\",\\n  \\"BackendServers\\": {\\n    \\"BackendServer\\": [\\n      {\\n        \\"Type\\": \\"eni\\",\\n        \\"Weight\\": 100,\\n        \\"Description\\": \\"后端服务器组\\",\\n        \\"Port\\": 70,\\n        \\"ServerId\\": \\"eni-hhshhs****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\"Code\\":\\"InvalidParameter\\",\\"Message\\":\\"The specified parameter is not valid.\\",\\"HostId\\":\\"slb-pop.aliyuncs.com\\",\\"RequestId\\":\\"0669D684-69D8-408E-A4FA-B9011E0F4E66\\"}"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"utf-8\\"?>\\n<AddVServerGroupBackendServersResponse>\\n    <RequestId>9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C</RequestId>\\n    <VServerGroupId>rsp-cige6*****</VServerGroupId>\\n    <BackendServers>\\n        <BackendServer>\\n            <ServerId>vm-233</ServerId>\\n            <Port>80</Port>\\n            <Weight>100</Weight>\\n        </BackendServer>\\n        <BackendServer>\\n            <ServerId>vm-232</ServerId>\\n            <Port>90</Port>\\n            <Weight>100</Weight>\\n        </BackendServer>\\n        <BackendServer>\\n            <ServerId>vm-231</ServerId>\\n            <Port>70</Port>\\n            <Weight>100</Weight>\\n        </BackendServer>\\n    </BackendServers>\\n</AddVServerGroupBackendServersResponse>","errorExample":""}]',
      'title' => '向指定的虚拟服务器组中添加后端服务器',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyVServerGroupBackendServers' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'VServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rsp-cige6j****',
          ),
        ),
        2 => 
        array (
          'name' => 'OldBackendServers',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要被替换的后端服务器列表，包含以下参数：

- **ServerId**：String类型，必选，后端服务器的实例ID，分为ECS实例ID、ENI实例ID和ECI实例ID，当**ServerId**参数值为ENI实例ID或ECI实例ID时，**Type**参数值必选。

- **Weight**：后端服务器的权重，取值：**0**~**100**。默认值：**100**。
如果值为0，则不会将请求转发给该后端服务器。

- **Description**：String类型，非必选，后端服务器描述，长度为1~80个字符，支持中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）。

- **Type**：后端服务器类型，取值：

    - **ecs**：ECS实例（默认）。
    
    - **eni**：弹性网卡实例。

    - **eci**：弹性容器实例。

> 只有性能保障型实例支持添加eni和eci类型的后端服务器。

*  **ServerIp**：ENI或ECI的实例IP。

*  **Port**：用来接收请求的后端端口。

示例说明如下：

* 挂载ECS示例：
 
  `[{ "ServerId": "i-xxxxxxxxx", "Weight": "100", "Type": "ecs",  "Port":"80","Description":"test-112" }]`

* 挂载ENI：

  `[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-112" }]`

*  挂载ENI多IP：

   `[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-113" },{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "172.166.**.**", "Port":"80","Description":"test-113" }]`

* 挂载ECI：

  `[{ "ServerId": "eci-xxxxxxxxx", "Weight": "100", "Type": "eci", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-114" }]`

> 必须是状态为运行中的后端服务器才可以加入负载均衡实例，每次调用最多可添加20个后端服务器。',
            'type' => 'string',
            'required' => false,
            'example' => '[{ "ServerId": "i-xxxxxxxxx", "Weight": "100", "Type": "ecs",  "Port":"80","Description":"test-112" }]',
          ),
        ),
        3 => 
        array (
          'name' => 'NewBackendServers',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新的后端服务器列表，包含以下参数：

- **ServerId**：String类型，必选，后端服务器的实例ID，分为ECS实例ID、ENI实例ID和ECI实例ID，当**ServerId**参数值为ENI实例ID或ECI实例ID时，**Type**参数值必选。

- **Weight**：后端服务器的权重，取值：**0**~**100**。默认值：**100**。
如果值为0，则不会将请求转发给该后端服务器。

- **Description**：String类型，非必选，后端服务器描述，长度为1~80个字符，支持中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）。

- **Type**：后端服务器类型，取值：

    - **ecs**：ECS实例（默认）。
    
    - **eni**：弹性网卡实例。

    - **eci**：弹性容器实例。

> 只有性能保障型实例支持添加eni和eci类型的后端服务器。

*  **ServerIp**：ENI或ECI的实例IP。

*  **Port**：用来接收请求的后端端口。

示例说明如下：

* 挂载ECS示例：
 
  `[{ "ServerId": "i-xxxxxxxxx", "Weight": "100", "Type": "ecs",  "Port":"80","Description":"test-112" }]`

* 挂载ENI：

  `[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-112" }]`

*  挂载ENI多IP：

   `[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-113" },{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "172.166.**.**", "Port":"80","Description":"test-113" }]`

* 挂载ECI：

  `[{ "ServerId": "eci-xxxxxxxxx", "Weight": "100", "Type": "eci", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-114" }]`

> 必须是状态为运行中的后端服务器才可以加入负载均衡实例，每次调用最多可添加20个后端服务器。',
            'type' => 'string',
            'required' => false,
            'example' => '[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-112" },{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "172.166.**.**", "Port":"80","Description":"test-113" }]',
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
              'VServerGroupId' => 
              array (
                'description' => '服务器组ID。',
                'type' => 'string',
                'example' => 'rsp-cige6j****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9DEC9C28-AB05-4DDF-9A78-6B08******',
              ),
              'BackendServers' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'BackendServer' => 
                  array (
                    'description' => '后端服务器列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '后端服务器列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '后端服务器类型，取值：

* **ecs**（默认）：ECS实例。

* **eni**：弹性网卡实例。

* **eci**：弹性容器实例。',
                          'type' => 'string',
                          'example' => 'ecs',
                        ),
                        'Weight' => 
                        array (
                          'description' => '后端服务器的权重。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                        'Description' => 
                        array (
                          'description' => '后端服务器描述。',
                          'type' => 'string',
                          'example' => '后端服务器描述。',
                        ),
                        'Port' => 
                        array (
                          'description' => '后端服务器使用的端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '70',
                        ),
                        'ServerId' => 
                        array (
                          'description' => 'ECS实例ID或ENI的实例ID。',
                          'type' => 'string',
                          'example' => 'i-bp1ge5hrp****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified BackendServers contain duplicated value of ServerID and Port.',
          ),
          1 => 
          array (
            'errorCode' => 'Mismatched.ZoneId',
            'errorMessage' => 'The zone of the server is not matched with the cloud box loadbalancer.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidBackendServers.ServerIpConflict',
            'errorMessage' => '%s.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationUnsupported.ModifyVServerGroupBackendServers',
            'errorMessage' => 'This type of backend server is not allowed to attached to singleTunnel or anyTunnel lb.',
          ),
          4 => 
          array (
            'errorCode' => 'IncorrectStatus.RSByPassToas',
            'errorMessage' => '%s.',
          ),
          5 => 
          array (
            'errorCode' => 'BackendServer.InvalidType',
            'errorMessage' => 'The specified Type is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'BackendServer.ServerRegionIdNotEqual',
            'errorMessage' => 'The specified ServerRegionId must be equal.',
          ),
          7 => 
          array (
            'errorCode' => 'OperationFailed.InvalidCen',
            'errorMessage' => 'The cen related with this loadbalancer is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'IncorrectStatus.CenNotAssociated',
            'errorMessage' => 'The action is invalid because the loadbalancer is not associated with cen.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidBackendServers.MissingCenBandWidth',
            'errorMessage' => 'The bandwidth is missing between loadbalancer and backendServers in cen.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidBackendServers.VpcNotInCen',
            'errorMessage' => 'The BackendServers is not in the cen associated with the loadbalancer.',
          ),
          11 => 
          array (
            'errorCode' => 'InvalidServerId.NotExist',
            'errorMessage' => 'The specified ServerId is not exist.',
          ),
          12 => 
          array (
            'errorCode' => 'MissingParameter.ServerRegionId',
            'errorMessage' => 'The parameter ServerRegionId is required.',
          ),
          13 => 
          array (
            'errorCode' => 'MissingParameter.VbrId',
            'errorMessage' => 'The parameter VbrId is required.',
          ),
          14 => 
          array (
            'errorCode' => 'InvalidParameter.ServerRegionId',
            'errorMessage' => 'The parameter ServerRegionId is invalid for crossborder.',
          ),
          15 => 
          array (
            'errorCode' => 'InvalidVbrId.NotInCen',
            'errorMessage' => 'The VbrId is not in the cen associated with the loadbalancer.',
          ),
          16 => 
          array (
            'errorCode' => 'InvalidParameter.ZoneNotSupport',
            'errorMessage' => 'The zone does not support the parameter %s.',
          ),
          17 => 
          array (
            'errorCode' => 'MasterSlaveServerConflict',
            'errorMessage' => 'The servers are conflict for MasterSlaveGroup.',
          ),
          18 => 
          array (
            'errorCode' => 'NetworkConflict',
            'errorMessage' => '%s.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"VServerGroupId\\": \\"rsp-cige6j****\\",\\n  \\"RequestId\\": \\"9DEC9C28-AB05-4DDF-9A78-6B08******\\",\\n  \\"BackendServers\\": {\\n    \\"BackendServer\\": [\\n      {\\n        \\"Type\\": \\"ecs\\",\\n        \\"Weight\\": 100,\\n        \\"Description\\": \\"后端服务器描述。\\",\\n        \\"Port\\": 70,\\n        \\"ServerId\\": \\"i-bp1ge5hrp****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ModifyVServerGroupBackendServersResponse>\\n<VServerGroupId>rsp-cige6j****</VServerGroupId>\\n<RequestId>9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C</RequestId>\\n<BackendServers>\\n    <BackendServer>\\n        <Type>ecs</Type>\\n        <Description>后端服务器描述。</Description>\\n        <ServerId>i-bp1ge5hrp****</ServerId>\\n        <Port>70</Port>\\n        <Weight>100</Weight>\\n    </BackendServer>\\n</BackendServers>\\n</ModifyVServerGroupBackendServersResponse>","errorExample":""}]',
      'title' => '替换虚拟服务器组中的后端服务器',
      'summary' => '替换虚拟服务器组中的后端服务器。',
      'description' => '该接口只用于替换虚拟服务器组中的后端服务器，如果您需要修改后端服务器的权重等配置，请参见[SetVServerGroupAttribute](~~35217~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveVServerGroupBackendServers' => 
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'VServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟服务器组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rsp-cige6****',
          ),
        ),
        2 => 
        array (
          'name' => 'BackendServers',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '后端服务器列表，包含以下参数：

- **ServerId**：String类型，必选，后端服务器的实例ID，分为ECS实例ID、ENI实例ID和ECI实例ID，当**ServerId**参数值为ENI实例ID或ECI实例ID时，**Type**参数值必选。

- **Weight**：后端服务器的权重，取值：**0**~**100**。默认值：**100**。
如果值为0，则不会将请求转发给该后端服务器。

- **Description**：String类型，非必选，后端服务器描述，长度为1~80个字符，支持中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）。

- **Type**：后端服务器类型，取值：

    - **ecs**：ECS实例（默认）。
    
    - **eni**：弹性网卡实例。

    - **eci**：弹性容器实例。

> 只有性能保障型实例支持添加eni和eci类型的后端服务器。

*  **ServerIp**：ENI或ECI的实例IP。

*  **Port**：用来接收请求的后端端口。

示例说明如下：

* 挂载ECS示例：
 
  `[{ "ServerId": "i-xxxxxxxxx", "Weight": "100", "Type": "ecs",  "Port":"80","Description":"test-112" }]`

* 挂载ENI：

  `[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-112" }]`

*  挂载ENI多IP：

   `[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-113" },{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "172.166.**.**", "Port":"80","Description":"test-113" }]`

* 挂载ECI：

  `[{ "ServerId": "eci-xxxxxxxxx", "Weight": "100", "Type": "eci", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-114" }]`

> 必须是状态为运行中的后端服务器才可以加入负载均衡实例，每次调用最多可添加20个后端服务器。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '[{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "192.168.**.**", "Port":"80","Description":"test-112" },{ "ServerId": "eni-xxxxxxxxx", "Weight": "100", "Type": "eni", "ServerIp": "172.166.**.**", "Port":"80","Description":"test-113" }]',
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
              'VServerGroupId' => 
              array (
                'description' => '虚拟服务器组ID。',
                'type' => 'string',
                'example' => 'rsp-cige6j****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9DEC9C28-AB05-4DDF-9A78-6B0******',
              ),
              'BackendServers' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'BackendServer' => 
                  array (
                    'description' => '后端服务器列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '后端服务器列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '后端服务器类型，取值：

* **ecs**（默认）：ECS实例。

* **eni**：弹性网卡实例。

* **eci**：弹性容器实例。',
                          'type' => 'string',
                          'example' => 'eni',
                        ),
                        'Weight' => 
                        array (
                          'description' => '后端服务器的权重。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                        'Port' => 
                        array (
                          'description' => '后端服务器使用的端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '80',
                        ),
                        'ServerId' => 
                        array (
                          'description' => '后端服务器实例ID。',
                          'type' => 'string',
                          'example' => 'eni-hhshhs****',
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
            'errorCode' => 'LbStatusNotSupport',
            'errorMessage' => 'The status of specified loadbalancer does not support..',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"VServerGroupId\\": \\"rsp-cige6j****\\",\\n  \\"RequestId\\": \\"9DEC9C28-AB05-4DDF-9A78-6B0******\\",\\n  \\"BackendServers\\": {\\n    \\"BackendServer\\": [\\n      {\\n        \\"Type\\": \\"eni\\",\\n        \\"Weight\\": 100,\\n        \\"Port\\": 80,\\n        \\"ServerId\\": \\"eni-hhshhs****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RemoveVServerGroupBackendServersResponse>\\n<VServerGroupId>rsp-cige6j****</VServerGroupId>\\n<RequestId>9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C</RequestId>\\n<BackendServers>\\n    <BackendServer>\\n        <Type>ecs</Type>\\n        <ServerId>vm-230</ServerId>\\n        <Port>80</Port>\\n        <Weight>100</Weight>\\n    </BackendServer>\\n</BackendServers>\\n</RemoveVServerGroupBackendServersResponse>","errorExample":""}]',
      'title' => '从指定的虚拟服务器组中移除后端服务器',
      'summary' => '从指定的虚拟服务器组中移除后端服务器。',
      'description' => '> 如果**BackendServers**中参数的某些后端服务器不存在于这个虚拟服务器组中，会直接忽略，不会报错。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateMasterSlaveServerGroup' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1hv944r69al4j******',
          ),
        ),
        2 => 
        array (
          'name' => 'MasterSlaveServerGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主备服务器组名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'Group1',
          ),
        ),
        3 => 
        array (
          'name' => 'MasterSlaveBackendServers',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主备服务器组列表。一个主备服务器组只能包含2个后端服务器。

包含以下参数：

- **ServerId**：String类型，必选，后端服务器的实例ID，分为ECS实例ID、ENI实例ID和ECI实例ID，当**ServerId**参数值为ENI实例ID或ECI实例ID时，**Type**参数值必选。

- **Weight**：后端服务器的权重，取值：**0**~**100**。默认值：**100**。
如果值为0，则不会将请求转发给该后端服务器。

- **Description**：String类型，非必选，后端服务器描述，长度为1~80个字符，支持中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）。

- **Type**：后端服务器类型，取值：

    - **ecs**：ECS实例（默认）。
    
    - **eni**：弹性网卡实例。

    - **eci**：弹性容器实例。

> 只有性能保障型实例支持添加eni和eci类型的后端服务器。

*  **ServerIp**：ENI或ECI的实例IP。

*  **Port**：用来接收请求的后端端口。

* **ServerType**：String类型，表示后端服务器的主备类型，取值：
  * **Master**：主服务器。
  * **Slave**：备服务器。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '[{ "ServerId": "i-xxxxxxxxx", "Weight": "100", "Type": "ecs",  "Port":"82","ServerType":"Master","Description":"test-112" },  { "ServerId": "i-xxxxxxxxx", "Weight": "100", "Type": "ecs",  "Port":"84","ServerType":"Slave","Description":"test-112" }]',
          ),
        ),
        4 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'allowEmptyValue' => true,
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源标签键。N的取值范围：**1**~**20**。一旦输入该值，则不允许为空字符串。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。N的取值范围：**1~20**。一旦输入该值，可以为空字符串。
最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1',
                ),
              ),
              'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'MasterSlaveServerGroupId' => 
              array (
                'description' => '主备服务器组ID。',
                'type' => 'string',
                'example' => 'rsp-bp19au4******',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7CA4DB76-4D32-523B-822E-5C9******',
              ),
              'MasterSlaveBackendServers' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'MasterSlaveBackendServer' => 
                  array (
                    'description' => '主备服务器组列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '主备服务器组列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '后端服务器类型，取值：

* **ecs**：ECS实例。

* **eni**：弹性网卡实例。
* **eci**：弹性容器实例。',
                          'type' => 'string',
                          'example' => 'ecs',
                        ),
                        'Weight' => 
                        array (
                          'description' => '后端服务器的权重。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                        'Description' => 
                        array (
                          'description' => '主备服务器组描述。',
                          'type' => 'string',
                          'example' => 'test-112',
                        ),
                        'Port' => 
                        array (
                          'description' => '后端服务器使用的端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '82',
                        ),
                        'ServerId' => 
                        array (
                          'description' => '要添加的后端服务器实例ID。',
                          'type' => 'string',
                          'example' => 'i-bp1fq61enf4loa5i****',
                        ),
                        'ServerType' => 
                        array (
                          'description' => '服务器类型。

取值：**Master**或**Slave**。',
                          'type' => 'string',
                          'example' => 'Master',
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
            'errorCode' => 'BACKEND_SERVERS_NUM_MUST_BE_TWO',
            'errorMessage' => 'Backend servers num must be 2.',
          ),
          1 => 
          array (
            'errorCode' => 'Mismatched.ZoneId',
            'errorMessage' => 'The zone of the server is not matched with the cloud box loadbalancer.',
          ),
          2 => 
          array (
            'errorCode' => 'BACKEND_SERVERS_HAVE_SAME_PORT_AND_SERVERID',
            'errorMessage' => 'Backend servers have same port and serverId.',
          ),
          3 => 
          array (
            'errorCode' => 'BACKEND_SERVERS_CAN_ONLY_CONTAIN_ONE_MASTER_AND_ONE_SLAVE',
            'errorMessage' => 'Backend servers can only contain one master and one slave.',
          ),
          4 => 
          array (
            'errorCode' => 'BACKEND_SERVER_ID_CAN_NOT_EMPTY',
            'errorMessage' => 'Backend server id can not empty.',
          ),
          5 => 
          array (
            'errorCode' => 'INVALID_SERVER_TYPE',
            'errorMessage' => 'Invalid server type.',
          ),
          6 => 
          array (
            'errorCode' => 'BACKEND_SERVER_PORT_CAN_NOT_EMPTY',
            'errorMessage' => 'Backend server port can not empty.',
          ),
          7 => 
          array (
            'errorCode' => 'RealServerPortNotSupport',
            'errorMessage' => 'Real server port not support.',
          ),
          8 => 
          array (
            'errorCode' => 'OperationUnsupported.CreateMasterSlaveServerGroup',
            'errorMessage' => 'This type of backend server is not allowed to attached to singleTunnel or anyTunnel lb.',
          ),
          9 => 
          array (
            'errorCode' => 'IncorrectStatus.RSByPassToas',
            'errorMessage' => '%s.',
          ),
          10 => 
          array (
            'errorCode' => 'OperationFailed.ActionNotSupport',
            'errorMessage' => 'The loadbalancer does not support such action.',
          ),
          11 => 
          array (
            'errorCode' => 'RsTunnelIp2VmNameConflict',
            'errorMessage' => '%s.',
          ),
          12 => 
          array (
            'errorCode' => 'NetworkConflict',
            'errorMessage' => '%s.',
          ),
          13 => 
          array (
            'errorCode' => 'InvalidParam.TagValue	',
            'errorMessage' => '%s.',
          ),
          14 => 
          array (
            'errorCode' => 'InvalidParam.TagKey',
            'errorMessage' => '%s.',
          ),
          15 => 
          array (
            'errorCode' => 'SizeLimitExceeded.Tag',
            'errorMessage' => '%s.',
          ),
          16 => 
          array (
            'errorCode' => 'MissingParam.TagKey',
            'errorMessage' => 'The param MissingParam.TagKey is missing.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"MasterSlaveServerGroupId\\": \\"rsp-bp19au4******\\",\\n  \\"RequestId\\": \\"7CA4DB76-4D32-523B-822E-5C9******\\",\\n  \\"MasterSlaveBackendServers\\": {\\n    \\"MasterSlaveBackendServer\\": [\\n      {\\n        \\"Type\\": \\"ecs\\",\\n        \\"Weight\\": 100,\\n        \\"Description\\": \\"test-112\\",\\n        \\"Port\\": 82,\\n        \\"ServerId\\": \\"i-bp1fq61enf4loa5i****\\",\\n        \\"ServerType\\": \\"Master\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateMasterSlaveServerGroupResponse>\\n    <MasterSlaveServerGroupId>rsp-bp19au4******</MasterSlaveServerGroupId>\\n    <RequestId>7CA4DB76-4D32-523B-822E-5C9494613D46</RequestId>\\n    <MasterSlaveBackendServers>\\n        <Type>ecs</Type>\\n        <Weight>100</Weight>\\n        <Description>test-112</Description>\\n        <Port>82</Port>\\n        <ServerId>i-bp1fq61enf4loa5i****</ServerId>\\n        <ServerType>Master</ServerType>\\n    </MasterSlaveBackendServers>\\n</CreateMasterSlaveServerGroupResponse>","errorExample":""}]',
      'title' => '创建主备服务器组',
      'summary' => '创建主备服务器组。一个主备服务器组只能包含两个后端服务器，一个为主服务器，另一个为备服务器。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteMasterSlaveServerGroup' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'MasterSlaveServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主备服务器组ID。

> 如果主备服务器组正在使用中，无法删除。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rsp-cige6******',
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
                'example' => '9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C',
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
            'errorCode' => 'RspoolVipExist',
            'errorMessage' => 'there are vips associating with this vServer group.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C\\"\\n}","errorExample":"{\\"Code\\":\\"InvalidParameter\\",\\"Message\\":\\"The specified parameter is not valid.\\",\\"HostId\\":\\"slb-pop.aliyuncs.com\\",\\"RequestId\\":\\"0669D684-69D8-408E-A4FA-B9011E0F4E66\\"}"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"utf-8\\"?>\\n<DeleteMasterSlaveServerGroupResponse>\\n\\t<RequestId>9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C</RequestId>\\n</DeleteMasterSlaveServerGroupResponse>","errorExample":""}]',
      'title' => '删除指定的主备服务器组',
      'summary' => '删除指定的主备服务器组。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeMasterSlaveServerGroupAttribute' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'MasterSlaveServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主备服务器组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rsp-cige6j******',
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
                'example' => '9DEC9C28-AB05-4DDF-9A78-6B0******',
              ),
              'Tags' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Tag' => 
                  array (
                    'description' => '关联的标签类型。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '关联的标签类型。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TagKey' => 
                        array (
                          'description' => '实例的标签键。N的取值范围：**1**~**20**。一旦输入该值，则不允许为空字符串。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                          'type' => 'string',
                          'example' => 'TestKey',
                        ),
                        'TagValue' => 
                        array (
                          'description' => '实例的标签值。N的取值范围：**1**~**20**。一旦输入该值，可以为空字符串。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                          'type' => 'string',
                          'example' => 'TestValue',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'LoadBalancerId' => 
              array (
                'description' => '关联的传统型负载均衡实例ID。',
                'type' => 'string',
                'example' => 'lb-14fadafw4343a******',
              ),
              'MasterSlaveServerGroupName' => 
              array (
                'description' => '主备服务器组的名称。',
                'type' => 'string',
                'example' => 'Group1',
              ),
              'MasterSlaveServerGroupId' => 
              array (
                'description' => '主备服务器组ID。',
                'type' => 'string',
                'example' => 'rsp-cige6******',
              ),
              'MasterSlaveBackendServers' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'MasterSlaveBackendServer' => 
                  array (
                    'description' => '主备服务器组列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '主备服务器组列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '后端服务器类型，取值：

* **ecs**（默认）：ECS实例。

* **eni**：弹性网卡实例。

* **eci**：弹性容器实例。',
                          'type' => 'string',
                          'example' => 'eni',
                        ),
                        'Weight' => 
                        array (
                          'description' => '后端服务器的权重。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                        'Description' => 
                        array (
                          'description' => '主备服务器组描述。',
                          'type' => 'string',
                          'example' => '主备服务器组描述。',
                        ),
                        'Port' => 
                        array (
                          'description' => '后端服务器使用的端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '90',
                        ),
                        'ServerId' => 
                        array (
                          'description' => '后端服务器实例ID。',
                          'type' => 'string',
                          'example' => 'eni-hhshhs****',
                        ),
                        'ServerType' => 
                        array (
                          'description' => '服务器类型，取值：**Master**或**Slave**。',
                          'type' => 'string',
                          'example' => 'Slave',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'CreateTime' => 
              array (
                'description' => '传统型负载均衡实例创建时间，格式为：`YYYY-MM-DDThh:mm:ssZ`。',
                'type' => 'string',
                'example' => '2022-12-02T02:49:05Z',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9DEC9C28-AB05-4DDF-9A78-6B0******\\",\\n  \\"Tags\\": {\\n    \\"Tag\\": [\\n      {\\n        \\"TagKey\\": \\"TestKey\\",\\n        \\"TagValue\\": \\"TestValue\\"\\n      }\\n    ]\\n  },\\n  \\"LoadBalancerId\\": \\"lb-14fadafw4343a******\\",\\n  \\"MasterSlaveServerGroupName\\": \\"Group1\\",\\n  \\"MasterSlaveServerGroupId\\": \\"rsp-cige6******\\",\\n  \\"MasterSlaveBackendServers\\": {\\n    \\"MasterSlaveBackendServer\\": [\\n      {\\n        \\"Type\\": \\"eni\\",\\n        \\"Weight\\": 100,\\n        \\"Description\\": \\"主备服务器组描述。\\",\\n        \\"Port\\": 90,\\n        \\"ServerId\\": \\"eni-hhshhs****\\",\\n        \\"ServerType\\": \\"Slave\\"\\n      }\\n    ]\\n  },\\n  \\"CreateTime\\": \\"2022-12-02T02:49:05Z\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeMasterSlaveServerGroupAttributeResponse>\\n    <RequestId>9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C</RequestId>\\n    <LoadBalancerId>lb-14fadafw4343a******</LoadBalancerId>\\n    <MasterSlaveServerGroupName>Group1</MasterSlaveServerGroupName>\\n    <MasterSlaveServerGroupId>rsp-cige6******</MasterSlaveServerGroupId>\\n    <MasterSlaveBackendServers>\\n        <Type>ecs</Type>\\n        <Weight>100</Weight>\\n        <Description>主备服务器组描述。</Description>\\n        <Port>90</Port>\\n        <ServerId>vm-hrf******</ServerId>\\n        <ServerType>Slave</ServerType>\\n    </MasterSlaveBackendServers>\\n    <CreateTime>2022-12-02T02:49:05Z</CreateTime>\\n</DescribeMasterSlaveServerGroupAttributeResponse>","errorExample":""}]',
      'title' => '查询指定主备服务器组的详细信息',
      'summary' => '查询指定主备服务器组的详细信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeMasterSlaveServerGroups' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp14zi0n66zpg6o******',
          ),
        ),
        2 => 
        array (
          'name' => 'IncludeListener',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回关联的监听信息，取值：

- **true**：返回。
- **false**：不返回。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'allowEmptyValue' => true,
          'style' => 'repeatList',
          'schema' => 
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
                  'description' => '资源的标签键。N的取值范围：**1~20**。一旦输入该值，则不允许为空字符串。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。N的取值范围：**1~20**。一旦输入该值，可以为空字符串。
最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
              'example' => '[{"Key":"TestKey","Value":"TestValue"}]',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        4 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '主备服务器组名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'Group3',
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
                'example' => '9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C',
              ),
              'MasterSlaveServerGroups' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'MasterSlaveServerGroup' => 
                  array (
                    'description' => '主备服务器组列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '主备服务器组列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'MasterSlaveServerGroupId' => 
                        array (
                          'description' => '主备服务器组ID。',
                          'type' => 'string',
                          'example' => 'rsp-0bfuc******',
                        ),
                        'MasterSlaveServerGroupName' => 
                        array (
                          'description' => '主备服务器组的名称。',
                          'type' => 'string',
                          'example' => 'Group3',
                        ),
                        'AssociatedObjects' => 
                        array (
                          'description' => '关联信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Listeners' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Listener' => 
                                array (
                                  'description' => '监听列表。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '监听列表。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Port' => 
                                      array (
                                        'description' => '监听端口。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '80',
                                      ),
                                      'Protocol' => 
                                      array (
                                        'description' => '监听协议。',
                                        'type' => 'string',
                                        'example' => 'tcp',
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '传统型负载均衡实例创建时间，格式为：`YYYY-MM-DDThh:mm:ssZ`。',
                          'type' => 'string',
                          'example' => '2022-12-02T02:49:05Z',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '标签列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '标签列表。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'TagKey' => 
                                  array (
                                    'description' => '资源的标签键。',
                                    'type' => 'string',
                                    'example' => 'TestKey',
                                  ),
                                  'TagValue' => 
                                  array (
                                    'description' => '资源的标签值。',
                                    'type' => 'string',
                                    'example' => 'TestValue',
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
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParam.TagKey',
            'errorMessage' => 'The param of TagKey is missing.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C\\",\\n  \\"MasterSlaveServerGroups\\": {\\n    \\"MasterSlaveServerGroup\\": [\\n      {\\n        \\"MasterSlaveServerGroupId\\": \\"rsp-0bfuc******\\",\\n        \\"MasterSlaveServerGroupName\\": \\"Group3\\",\\n        \\"AssociatedObjects\\": {\\n          \\"Listeners\\": {\\n            \\"Listener\\": [\\n              {\\n                \\"Port\\": 80,\\n                \\"Protocol\\": \\"tcp\\"\\n              }\\n            ]\\n          }\\n        },\\n        \\"CreateTime\\": \\"2022-12-02T02:49:05Z\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"TagKey\\": \\"TestKey\\",\\n              \\"TagValue\\": \\"TestValue\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeMasterSlaveServerGroupsResponse>\\n    <RequestId>9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C</RequestId>\\n    <MasterSlaveServerGroups>\\n        <MasterSlaveServerGroupId>rsp-0bfuc******</MasterSlaveServerGroupId>\\n        <MasterSlaveServerGroupName>Group3</MasterSlaveServerGroupName>\\n        <AssociatedObjects>\\n            <Listeners>\\n                <Port>80</Port>\\n                <Protocol>tcp</Protocol>\\n            </Listeners>\\n        </AssociatedObjects>\\n        <CreateTime>2022-12-02T02:49:05Z</CreateTime>\\n        <Tags>\\n            <TagKey>TestKey</TagKey>\\n            <TagValue>TestValue</TagValue>\\n        </Tags>\\n    </MasterSlaveServerGroups>\\n</DescribeMasterSlaveServerGroupsResponse>","errorExample":""}]',
      'title' => '查询主备服务器组列表',
      'summary' => '查询主备服务器组列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteCACertificate' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'CA证书的地域。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'CACertificateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'CA证书ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123157908xxxxxxx_15c73d77203_-986300114_-2110544xxx',
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
            'errorCode' => 'CertificateAndPrivateKeyIsRefered',
            'errorMessage' => 'The specified certificate is bound to listeners. You cannot delete it.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","type":"json"}]',
      'title' => '删除CA证书',
      'summary' => '删除CA证书。',
      'description' => '<note>无法删除正在使用的CA证书。</note>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteServerCertificate' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域。 

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ServerCertificateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器证书ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123157xxxxxxx_166f8204689_1714763408_7099*******',
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
            'errorCode' => 'CertificateRelatedDomainExtensionExist',
            'errorMessage' => 'The domainExtension related with this ServerCertificate exists.',
          ),
          1 => 
          array (
            'errorCode' => 'CertificateAndPrivateKeyIsRefered',
            'errorMessage' => 'The specified certificate is bound to listeners. You cannot delete it.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":"{\\"Code\\":\\"InvalidParameter\\",\\"Message\\":\\"The specified parameter is not valid.\\",\\"HostId\\":\\"slb-pop.aliyuncs.com\\",\\"RequestId\\":\\"0669D684-69D8-408E-A4FA-B9011E0F4E66\\"}"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n<DeleteServerCertificateResponse>\\n\\t\\t<RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId></DeleteServerCertificateResponse>","errorExample":""}]',
      'title' => '删除服务器证书',
      'summary' => '删除服务器证书。',
      'description' => '> 如果指定删除的证书被引用，无法删除。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetCACertificateName' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'CA证书的地域。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-east-hangzhou-01',
          ),
        ),
        1 => 
        array (
          'name' => 'CACertificateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'CA证书ID。',
            'type' => 'string',
            'required' => true,
            'example' => '139a00604ad-cn-east-hangzhou-01',
          ),
        ),
        2 => 
        array (
          'name' => 'CACertificateName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'CA证书名称。

名称长度为1~80个英文或中文字符，必须以大小字母或中文开头，可包含数字，英文句号（.），下划线（_）和短横线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'mycacert02',
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
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FE7BA984',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FE7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n<SetCACertificateNameResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FE7BA984</RequestId>\\n</SetCACertificateNameResponse>"}]',
      'title' => '设置CA证书名称',
      'summary' => '设置CA证书名称。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetServerCertificateName' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的地域。您可以通过调用[DescribeRegions](~~2401682~~) 接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ServerCertificateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器证书ID。',
            'type' => 'string',
            'required' => true,
            'example' => '	123157xxxxxxx_166f8204689_1714763408_7099*******',
          ),
        ),
        2 => 
        array (
          'name' => 'ServerCertificateName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要上传的非阿里云签发的服务器证书的名称。长度限制为1~80个字符，允许包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）、下划线（_）和星号（*）。',
            'type' => 'string',
            'required' => true,
            'example' => 'mycert01',
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
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FE7BA984',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FE7BA984\\"\\n}","type":"json"}]',
      'title' => '设置服务器证书名称',
      'summary' => '设置服务器证书名称。',
    ),
    'DescribeCACertificates' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'CA证书的地域。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'CACertificateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'CA证书ID。',
            'type' => 'string',
            'required' => false,
            'example' => '139a00604bd-cn-east-hangzho****',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        3 => 
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
              'description' => '标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源的标签键。N的取值范围：**1~20**。一旦输入该值，则不允许为空字符串。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。N的取值范围：**1~20**。一旦输入该值，可以为空字符串。
最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1',
                ),
              ),
              'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF******',
              ),
              'CACertificates' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'CACertificate' => 
                  array (
                    'description' => 'CA证书信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CreateTimeStamp' => 
                        array (
                          'description' => 'CA证书创建的时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1504147745000',
                        ),
                        'ExpireTime' => 
                        array (
                          'description' => 'CA证书的过期时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。',
                          'type' => 'string',
                          'example' => '2024-11-21T06:04:25Z',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => 'CA证书的创建时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。',
                          'type' => 'string',
                          'example' => '2021-08-31T02:49:05Z',
                        ),
                        'ExpireTimeStamp' => 
                        array (
                          'description' => 'CA证书过期的时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1732169065000',
                        ),
                        'CACertificateId' => 
                        array (
                          'description' => 'CA证书ID。',
                          'type' => 'string',
                          'example' => '139a00604bd-cn-east-hangzho****',
                        ),
                        'RegionId' => 
                        array (
                          'description' => 'CA证书所属地域。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'Fingerprint' => 
                        array (
                          'description' => ' CA证书的指纹。 ',
                          'type' => 'string',
                          'example' => '79:43:fb:7d:a4:7f:44:32:61:16:57:17:e3:e8:b7:36:03:57:f6:89',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '资源组ID。',
                          'type' => 'string',
                          'example' => 'rg-atstuj3rtop****',
                        ),
                        'CommonName' => 
                        array (
                          'description' => 'CA证书的域名。',
                          'type' => 'string',
                          'example' => 'www.example.com',
                        ),
                        'CACertificateName' => 
                        array (
                          'description' => ' CA证书名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '标签。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '标签。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'TagValue' => 
                                  array (
                                    'description' => '资源的标签值。',
                                    'type' => 'string',
                                    'example' => '1',
                                  ),
                                  'TagKey' => 
                                  array (
                                    'description' => '资源的标签键。',
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
            'errorCode' => 'Abs.CACertificateIdAndResourceGroupId.MissMatch',
            'errorMessage' => 'CACertificateId or ResourceGroupId miss match.',
          ),
          1 => 
          array (
            'errorCode' => 'LocationServiceTimeout',
            'errorMessage' => 'Location service connection timeout. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF******\\",\\n  \\"CACertificates\\": {\\n    \\"CACertificate\\": [\\n      {\\n        \\"CreateTimeStamp\\": 1504147745000,\\n        \\"ExpireTime\\": \\"2024-11-21T06:04:25Z\\",\\n        \\"CreateTime\\": \\"2021-08-31T02:49:05Z\\",\\n        \\"ExpireTimeStamp\\": 1732169065000,\\n        \\"CACertificateId\\": \\"139a00604bd-cn-east-hangzho****\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"Fingerprint\\": \\"79:43:fb:7d:a4:7f:44:32:61:16:57:17:e3:e8:b7:36:03:57:f6:89\\",\\n        \\"ResourceGroupId\\": \\"rg-atstuj3rtop****\\",\\n        \\"CommonName\\": \\"www.example.com\\",\\n        \\"CACertificateName\\": \\"test\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"TagValue\\": \\"1\\",\\n              \\"TagKey\\": \\"test\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeCACertificatesResponse>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <CACertificates>\\n        <CreateTimeStamp>1504147745000</CreateTimeStamp>\\n        <ExpireTime>2024-11-21T06:04:25Z</ExpireTime>\\n        <CreateTime>2021-08-31T02:49:05Z</CreateTime>\\n        <ExpireTimeStamp>1732169065000</ExpireTimeStamp>\\n        <CACertificateId>139a00604bd-cn-east-hangzho****</CACertificateId>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <Fingerprint>79:43:fb:7d:a4:7f:44:32:61:16:57:17:e3:e8:b7:36:03:57:f6:89</Fingerprint>\\n        <ResourceGroupId>rg-atstuj3rtop****</ResourceGroupId>\\n        <CommonName>www.example.com</CommonName>\\n        <CACertificateName>test</CACertificateName>\\n        <Tags>\\n            <TagValue>1</TagValue>\\n            <TagKey>test</TagKey>\\n        </Tags>\\n    </CACertificates>\\n</DescribeCACertificatesResponse>","errorExample":""}]',
      'title' => '查询CA证书列表',
      'summary' => '查询CA证书列表。',
      'description' => '> 为了保证安全性，只返回证书的指纹和名称，不返回证书的内容。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeServerCertificates' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的地域。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。

> 当您所选地域的Enpoint（服务地址）为slb.aliyuncs.com时，`RegionId`必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ServerCertificateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器证书ID。',
            'type' => 'string',
            'required' => false,
            'example' => '12315790*******_166f8204689_1714763408_709981430',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        3 => 
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
              'description' => '标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源的标签键。N的取值范围：**1~20**。一旦输入该值，则不允许为空字符串。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。N的取值范围：**1~20**。一旦输入该值，可以为空字符串。
最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1',
                ),
              ),
              'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF34B540710',
              ),
              'ServerCertificates' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ServerCertificate' => 
                  array (
                    'description' => '服务器证书列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CreateTimeStamp' => 
                        array (
                          'description' => '服务器证书上传的时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1504147745000',
                        ),
                        'AliCloudCertificateName' => 
                        array (
                          'description' => '阿里云证书服务的服务器证书名称。',
                          'type' => 'string',
                          'example' => 'testcertkey',
                        ),
                        'ExpireTime' => 
                        array (
                          'description' => '过期时间。',
                          'type' => 'string',
                          'example' => '2023-01-26T23:59:59Z',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '服务器证书上传的时间。',
                          'type' => 'string',
                          'example' => '2021-08-31T02:49:05Z',
                        ),
                        'ServerCertificateId' => 
                        array (
                          'description' => '服务器证书ID。',
                          'type' => 'string',
                          'example' => '123157********_166f8204689_1714763408_709981430-cn-east-hangzhou-02',
                        ),
                        'ExpireTimeStamp' => 
                        array (
                          'description' => '过期时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '15041477450',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '服务器证书的地域。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'ServerCertificateName' => 
                        array (
                          'description' => '服务器证书名称。',
                          'type' => 'string',
                          'example' => 'slb',
                        ),
                        'Fingerprint' => 
                        array (
                          'description' => '服务器证书的指纹。',
                          'type' => 'string',
                          'example' => '68:08:1a:f8:2c:97:69:a3:a1:e6:16:41:4b:ca:4f:5d:ee:a5:ef:0d',
                        ),
                        'CommonName' => 
                        array (
                          'description' => '域名，对应证书的`CommonName`字段。',
                          'type' => 'string',
                          'example' => 'www.example.com',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '企业资源组ID。',
                          'type' => 'string',
                          'example' => 'rg-atstuj3rtop****',
                        ),
                        'IsAliCloudCertificate' => 
                        array (
                          'description' => '是否是阿里云证书服务中的证书：

- **1**：是。
- **0**：不是。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'AliCloudCertificateId' => 
                        array (
                          'description' => '阿里云证书服务的服务器证书ID。',
                          'type' => 'string',
                          'example' => '7309********_15d97e7709a_71445759hr_789289731',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '资源标签。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '资源标签。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'TagValue' => 
                                  array (
                                    'description' => '资源的标签值。',
                                    'type' => 'string',
                                    'example' => '1',
                                  ),
                                  'TagKey' => 
                                  array (
                                    'description' => '资源的标签键。',
                                    'type' => 'string',
                                    'example' => 'test',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'SubjectAlternativeNames' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'SubjectAlternativeName' => 
                            array (
                              'description' => '数组格式，返回证书的备用域名列表，对应证书的`Subject Alternative Name`字段。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '数组格式，返回证书的备用域名列表，对应证书的`Subject Alternative Name`字段。',
                                'type' => 'string',
                                'example' => '["demo.aliyundoc.com","example.aliyundoc.com"]',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Abs.ServerCertificateIdAndResourceGroupId.MissMatch',
            'errorMessage' => 'ServerCertificateId or ResourceGroupId miss match.',
          ),
          1 => 
          array (
            'errorCode' => 'LocationServiceTimeout',
            'errorMessage' => 'Location service connection timeout. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\",\\n  \\"ServerCertificates\\": {\\n    \\"ServerCertificate\\": [\\n      {\\n        \\"CreateTimeStamp\\": 1504147745000,\\n        \\"AliCloudCertificateName\\": \\"testcertkey\\",\\n        \\"ExpireTime\\": \\"2023-01-26T23:59:59Z\\",\\n        \\"CreateTime\\": \\"2021-08-31T02:49:05Z\\",\\n        \\"ServerCertificateId\\": \\"123157********_166f8204689_1714763408_709981430-cn-east-hangzhou-02\\",\\n        \\"ExpireTimeStamp\\": 15041477450,\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"ServerCertificateName\\": \\"slb\\",\\n        \\"Fingerprint\\": \\"68:08:1a:f8:2c:97:69:a3:a1:e6:16:41:4b:ca:4f:5d:ee:a5:ef:0d\\",\\n        \\"CommonName\\": \\"www.example.com\\",\\n        \\"ResourceGroupId\\": \\"rg-atstuj3rtop****\\",\\n        \\"IsAliCloudCertificate\\": 0,\\n        \\"AliCloudCertificateId\\": \\"7309********_15d97e7709a_71445759hr_789289731\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"TagValue\\": \\"1\\",\\n              \\"TagKey\\": \\"test\\"\\n            }\\n          ]\\n        },\\n        \\"SubjectAlternativeNames\\": {\\n          \\"SubjectAlternativeName\\": [\\n            \\"[\\\\\\"demo.aliyundoc.com\\\\\\",\\\\\\"example.aliyundoc.com\\\\\\"]\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeServerCertificatesResponse>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <ServerCertificates>\\n        <CreateTimeStamp>1504147745000</CreateTimeStamp>\\n        <AliCloudCertificateName>testcertkey</AliCloudCertificateName>\\n        <ExpireTime>2023-01-26T23:59:59Z</ExpireTime>\\n        <CreateTime>2021-08-31T02:49:05Z</CreateTime>\\n        <ServerCertificateId>123157********_166f8204689_1714763408_709981430-cn-east-hangzhou-02</ServerCertificateId>\\n        <ExpireTimeStamp>15041477450</ExpireTimeStamp>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <ServerCertificateName>slb</ServerCertificateName>\\n        <Fingerprint>68:08:1a:f8:2c:97:69:a3:a1:e6:16:41:4b:ca:4f:5d:ee:a5:ef:0d</Fingerprint>\\n        <CommonName>www.example.com</CommonName>\\n        <ResourceGroupId>rg-atstuj3rtop****</ResourceGroupId>\\n        <IsAliCloudCertificate>0</IsAliCloudCertificate>\\n        <AliCloudCertificateId>7309********_15d97e7709a_71445759hr_789289731</AliCloudCertificateId>\\n        <Tags>\\n            <TagValue>1</TagValue>\\n            <TagKey>test</TagKey>\\n        </Tags>\\n        <SubjectAlternativeNames>[\\"demo.aliyundoc.com\\",\\"example.aliyundoc.com\\"]</SubjectAlternativeNames>\\n    </ServerCertificates>\\n</DescribeServerCertificatesResponse>","errorExample":""}]',
      'title' => '查询指定地域的服务器证书列表',
      'summary' => '查询指定地域的服务器证书列表。',
      'description' => '> 为了保证安全性，只返回证书的指纹和名称，不返回证书和私钥的内容。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UploadCACertificate' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'allowEmptyValue' => true,
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '监听的标签键。N的取值范围：**1**~**20**。一旦传入该值，则不允许为空字符串。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '实例的标签值。N的取值范围：**1~20**。一旦输入该值，可以为空字符串。
最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceJoshua',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'example' => 'UploadCACertificate',
            'maxItems' => 20,
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'CA证书的地域。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'CACertificate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要上传CA证书的内容。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'CACertificateName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'CA证书名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'mycacert01',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '企业资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atst******',
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
              'CreateTimeStamp' => 
              array (
                'description' => 'CA证书上传的时间戳。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1504147745000',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF******',
              ),
              'ExpireTime' => 
              array (
                'description' => 'CA证书的过期时间。',
                'type' => 'string',
                'example' => '2024-11-21T06:04:25Z',
              ),
              'Fingerprint' => 
              array (
                'description' => 'CA证书的指纹。',
                'type' => 'string',
                'example' => '02:DF:AB:ED',
              ),
              'CreateTime' => 
              array (
                'description' => 'CA证书上传的时间。',
                'type' => 'string',
                'example' => '2017-08-31T02:49:05Z',
              ),
              'CommonName' => 
              array (
                'description' => 'CA证书的域名。',
                'type' => 'string',
                'example' => 'example.com',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '企业资源组ID。',
                'type' => 'string',
                'example' => 'rg-atstuj3******',
              ),
              'CACertificateName' => 
              array (
                'description' => 'CA证书的名称。',
                'type' => 'string',
                'example' => 'mycacert01',
              ),
              'ExpireTimeStamp' => 
              array (
                'description' => 'CA证书的过期时间戳。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1732169065000',
              ),
              'CACertificateId' => 
              array (
                'description' => 'CA证书ID。',
                'type' => 'string',
                'example' => '139a0******',
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
            'errorCode' => 'InvalidParam.TagValue	',
            'errorMessage' => '%s.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParam.TagKey',
            'errorMessage' => '%s.',
          ),
          2 => 
          array (
            'errorCode' => 'SizeLimitExceeded.Tag',
            'errorMessage' => '%s.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParam.TagKey',
            'errorMessage' => 'The param MissingParam.TagKey is missing.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CreateTimeStamp\\": 1504147745000,\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF******\\",\\n  \\"ExpireTime\\": \\"2024-11-21T06:04:25Z\\",\\n  \\"Fingerprint\\": \\"02:DF:AB:ED\\",\\n  \\"CreateTime\\": \\"2017-08-31T02:49:05Z\\",\\n  \\"CommonName\\": \\"example.com\\",\\n  \\"ResourceGroupId\\": \\"rg-atstuj3******\\",\\n  \\"CACertificateName\\": \\"mycacert01\\",\\n  \\"ExpireTimeStamp\\": 1732169065000,\\n  \\"CACertificateId\\": \\"139a0******\\"\\n}","type":"json"}]',
      'title' => '上传CA证书',
      'summary' => '上传CA证书。',
      'description' => '一次只能上传一份CA证书内容。添加成功后，返回该用户的该证书的ID、名称和指纹。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UploadServerCertificate' => 
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
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'allowEmptyValue' => true,
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源的标签键。N的取值范围：**1~20**。一旦输入该值，则不允许为空字符串。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。N的取值范围：**1~20**。一旦输入该值，可以为空字符串。
最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器证书部署的地域ID。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'AliCloudCertificateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阿里云签发证书ID。

>如果使用阿里云签发证书，该参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => '775****',
          ),
        ),
        3 => 
        array (
          'name' => 'AliCloudCertificateName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阿里云签发证书名称。

您可以通过调用[GetUserCertificateDetail - 获取证书详情](~~465112~~)接口查询证书名称。

>如果使用阿里云签发证书，该参数必选。
',
            'type' => 'string',
            'required' => false,
            'example' => 'cloudcertificate',
          ),
        ),
        4 => 
        array (
          'name' => 'AliCloudCertificateRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阿里云签发证书所属的地域ID。
>如果使用阿里云签发证书，该参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        5 => 
        array (
          'name' => 'ServerCertificate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要上传的公钥证书。

>如果上传非阿里云签发证书，该参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => '-----BEGIN CERTIFICATE----- MIIGDTCC****** -----END CERTIFICATE-----',
          ),
        ),
        6 => 
        array (
          'name' => 'PrivateKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要上传的私钥。  

>如果上传非阿里云签发证书，该参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => '-----BEGIN RSA PRIVATE KEY----- MIIEogIB****** -----END RSA PRIVATE KEY-----',
          ),
        ),
        7 => 
        array (
          'name' => 'ServerCertificateName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要上传的非阿里云签发的服务器证书的名称。长度限制为1~80个字符，允许包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）、下划线（_）和星号（*）。

>如果上传非阿里云签发证书，该参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'mycert01',
          ),
        ),
        8 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。  ',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rto****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'AliCloudCertificateName' => 
              array (
                'description' => '阿里云签发证书名称。
',
                'type' => 'string',
                'example' => 'cloudcertificate****',
              ),
              'CreateTimeStamp' => 
              array (
                'description' => '证书创建的时间戳。 ',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1504147745000',
              ),
              'ExpireTime' => 
              array (
                'description' => '证书过期时间。',
                'type' => 'string',
                'example' => '2022-10-18T23:59:59Z',
              ),
              'CreateTime' => 
              array (
                'description' => '证书创建时间。 ',
                'type' => 'string',
                'example' => '2022-02-21T02:49:05Z',
              ),
              'ServerCertificateId' => 
              array (
                'description' => '服务器证书ID。',
                'type' => 'string',
                'example' => '1321932713******_17f1b4b696b_1114720822_-1671******',
              ),
              'ExpireTimeStamp' => 
              array (
                'description' => '证书过期的时间戳。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1504147745000',
              ),
              'RegionId' => 
              array (
                'description' => '服务器证书部署的地域ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF34B540710',
              ),
              'Fingerprint' => 
              array (
                'description' => '服务器证书的指纹。',
                'type' => 'string',
                'example' => '8f:7d:cb:e5:f8:c8:33:9c:17:65:c1:92:30:9e:45:55:9c:3a:85:60',
              ),
              'ServerCertificateName' => 
              array (
                'description' => '非阿里云签发的服务器证书的名称。',
                'type' => 'string',
                'example' => 'mycert01',
              ),
              'CommonName' => 
              array (
                'description' => '域名，对应证书的`Common Name`字段。',
                'type' => 'string',
                'example' => 'example.com',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源组ID。',
                'type' => 'string',
                'example' => 'rg-atstuj3rt****',
              ),
              'AliCloudCertificateId' => 
              array (
                'description' => '阿里云签发证书ID。',
                'type' => 'string',
                'example' => '775****',
              ),
              'IsAliCloudCertificate' => 
              array (
                'description' => '是否为阿里云证书服务中的证书。

- **0**：不是阿里云证书。
- **1**：是阿里云证书。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'SubjectAlternativeNames' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'SubjectAlternativeName' => 
                  array (
                    'description' => '返回证书的备用域名列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数组格式，返回证书的备用域名列表，对应证书的`Subject Alternative Name`字段。',
                      'type' => 'string',
                      'example' => '["example.com","www.example.com"]',
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
            'errorCode' => 'IllegalParam.ServerCertificate',
            'errorMessage' => 'The specified server certificate is illegal.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified ServerCertificate and PrivateKey fail to validate.',
          ),
          2 => 
          array (
            'errorCode' => 'ServerCertificate.NotSupport',
            'errorMessage' => 'The specified Region Not support ServerCertificate.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.AliCloudCertificateId',
            'errorMessage' => 'The specified AliCloudCertificateId is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.IllegalKeyLength',
            'errorMessage' => 'The operation is not allowed because the key length of certificate is illegal.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParam.TagValue	',
            'errorMessage' => '%s.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParam.TagKey',
            'errorMessage' => '%s.',
          ),
          7 => 
          array (
            'errorCode' => 'SizeLimitExceeded.Tag',
            'errorMessage' => '%s.',
          ),
          8 => 
          array (
            'errorCode' => 'MissingParam.TagKey',
            'errorMessage' => 'The param MissingParam.TagKey is missing.',
          ),
          9 => 
          array (
            'errorCode' => 'EccCertificateNotSupport',
            'errorMessage' => 'The ECC certificate is not support.',
          ),
          10 => 
          array (
            'errorCode' => 'CertificateFormatInvalid',
            'errorMessage' => 'The certificate format is invalid.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AliCloudCertificateName\\": \\"cloudcertificate****\\",\\n  \\"CreateTimeStamp\\": 1504147745000,\\n  \\"ExpireTime\\": \\"2022-10-18T23:59:59Z\\",\\n  \\"CreateTime\\": \\"2022-02-21T02:49:05Z\\",\\n  \\"ServerCertificateId\\": \\"1321932713******_17f1b4b696b_1114720822_-1671******\\",\\n  \\"ExpireTimeStamp\\": 1504147745000,\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\",\\n  \\"Fingerprint\\": \\"8f:7d:cb:e5:f8:c8:33:9c:17:65:c1:92:30:9e:45:55:9c:3a:85:60\\",\\n  \\"ServerCertificateName\\": \\"mycert01\\",\\n  \\"CommonName\\": \\"example.com\\",\\n  \\"ResourceGroupId\\": \\"rg-atstuj3rt****\\",\\n  \\"AliCloudCertificateId\\": \\"775****\\",\\n  \\"IsAliCloudCertificate\\": 0,\\n  \\"SubjectAlternativeNames\\": {\\n    \\"SubjectAlternativeName\\": [\\n      \\"[\\\\\\"example.com\\\\\\",\\\\\\"www.example.com\\\\\\"]\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UploadServerCertificateResponse>\\n    <AliCloudCertificateName>cloudcertificate****</AliCloudCertificateName>\\n    <CreateTimeStamp>1504147745000</CreateTimeStamp>\\n    <ExpireTime>2022-10-18T23:59:59Z</ExpireTime>\\n    <CreateTime>2022-02-21T02:49:05Z</CreateTime>\\n    <ServerCertificateId>1321932713******_17f1b4b696b_1114720822_-1671******</ServerCertificateId>\\n    <ExpireTimeStamp>1504147745000</ExpireTimeStamp>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <Fingerprint>8f:7d:cb:e5:f8:c8:33:9c:17:65:c1:92:30:9e:45:55:9c:3a:85:60</Fingerprint>\\n    <ServerCertificateName>mycert01</ServerCertificateName>\\n    <CommonName>example.com</CommonName>\\n    <ResourceGroupId>rg-atstuj3rt****</ResourceGroupId>\\n    <AliCloudCertificateId>775****</AliCloudCertificateId>\\n    <IsAliCloudCertificate>0</IsAliCloudCertificate>\\n    <SubjectAlternativeNames>[\\"example.com\\",\\"www.example.com\\"]</SubjectAlternativeNames>\\n</UploadServerCertificateResponse>","errorExample":""}]',
      'title' => '上传服务器证书',
      'summary' => '上传服务器证书。',
      'description' => '- 一次只能上传一份服务器证书和对应的私钥。

- 上传成功后，返回该用户的所有服务器证书列表的指纹信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 相关文档
- [UploadCACertificate](~~34935~~)：上传CA证书。
- [证书要求](~~85968~~)
- [上传证书失败FAQ](~~372506~~)',
    ),
    'CreateDomainExtension' => 
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
            'description' => '负载均衡实例的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1o94dp5i6earrxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例HTTPS监听的前端端口。

取值：**1-65535**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '443',
          ),
        ),
        3 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '*.example1.com',
          ),
        ),
        4 => 
        array (
          'name' => 'ServerCertificateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '与域名对应的证书ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '123157xxxxxxx_166f820xxxxxx_1714763408_709981xxxx',
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
              'ListenerPort' => 
              array (
                'description' => '负载均衡实例前端使用的端口。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '80',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A6E7EFC9-0938-40CA-877D-9BE******',
              ),
              'DomainExtensionId' => 
              array (
                'description' => '创建的扩展域名ID。',
                'type' => 'string',
                'example' => 'de-bp1rp7ta19******',
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
            'errorCode' => 'InvalidAction.RegionNotSupport',
            'errorMessage' => 'The region does not support this action.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.ServerCertificateId',
            'errorMessage' => 'The specified ServerCertificateId does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Domain',
            'errorMessage' => 'The specified Domain exists.',
          ),
          3 => 
          array (
            'errorCode' => 'DomainExtensionProcessing',
            'errorMessage' => 'A previous configuration of the DomainExtension is pending, please try again later.',
          ),
          4 => 
          array (
            'errorCode' => 'DomainExtensionNumberOverLimit',
            'errorMessage' => 'The number of domainExtension has reached to the quota limit of this listener.',
          ),
          5 => 
          array (
            'errorCode' => 'DomainExtensionNotSupport',
            'errorMessage' => 'The instance with shared loadBalancerSpec does not support domainExtension.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParameter.CertificateId',
            'errorMessage' => 'The specified CertificateId contains duplicate certificate EncryptionAlgorithm.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidParamSize.CertificateId',
            'errorMessage' => 'The size of parameter CertificateId is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'MissingParameter.CertificateId',
            'errorMessage' => 'The parameter CertificateId is required.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidParameter.RegionNotSupport',
            'errorMessage' => 'The region does not support the parameter: %s.',
          ),
          10 => 
          array (
            'errorCode' => 'CertificateTypeMismatched',
            'errorMessage' => 'The certificate type does not match.',
          ),
          11 => 
          array (
            'errorCode' => 'SPEC_NOT_SUPPORT_PARAMETER',
            'errorMessage' => 'The loadbalancer with share spec does not support the parameter.',
          ),
          12 => 
          array (
            'errorCode' => 'CnCertificateNotSupport',
            'errorMessage' => 'The cn certificate is not support.',
          ),
          13 => 
          array (
            'errorCode' => 'InvalidParam.CertificateBindingType',
            'errorMessage' => 'The param  is invalid.',
          ),
          14 => 
          array (
            'errorCode' => 'MissingParam.ServerCertificates',
            'errorMessage' => 'The param ServerCertificates is missing.',
          ),
          15 => 
          array (
            'errorCode' => 'InvalidParamSize.ServerCertificates',
            'errorMessage' => 'The size of param ServerCertificates is invalid.',
          ),
          16 => 
          array (
            'errorCode' => 'TooManyListeners',
            'errorMessage' => 'More than 1 listener is found, please be more specified.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ListenerPort\\": 80,\\n  \\"RequestId\\": \\"A6E7EFC9-0938-40CA-877D-9BE******\\",\\n  \\"DomainExtensionId\\": \\"de-bp1rp7ta19******\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<CreateDomainExtensionResponse>\\n\\t<RequestId>A6E7EFC9-0938-40CA-877D-9BEDBD21D357</RequestId>\\n\\t<DomainExtensionId>de-bp1rp7t******</DomainExtensionId>\\n\\t<ListenerPort>443</ListenerPort>\\n</CreateDomainExtensionResponse>\\n\\t","errorExample":""}]',
      'title' => '创建扩展域名',
      'summary' => '创建扩展域名。',
      'description' => '>性能共享型实例的监听不支持扩展域名。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetDomainExtensionAttribute' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DomainExtensionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要修改的扩展域名ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'de-bp1rp7ta*****',
          ),
        ),
        2 => 
        array (
          'name' => 'ServerCertificateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新的证书ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '1231579xxxxxxxx_166f8204689_1714763408_709981xxx',
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
                'example' => '149A2470-F010-4437-BF68-343******',
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
            'errorCode' => 'InvalidParameter.DomainExtensionId',
            'errorMessage' => 'The specified DomainExtensionId does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.ServerCertificateId',
            'errorMessage' => 'The specified ServerCertificateId does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'DomainExtensionProcessing',
            'errorMessage' => 'A previous configuration of the DomainExtension is pending, please try again later.',
          ),
          3 => 
          array (
            'errorCode' => 'IncorrectStatus.DomainExtension',
            'errorMessage' => 'The listener to which the domain extension belongs is being configured, please try again later.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.CertificateId',
            'errorMessage' => 'The specified CertificateId contains duplicate certificate EncryptionAlgorithm.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParamSize.CertificateId',
            'errorMessage' => 'The size of parameter CertificateId is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'MissingParameter.CertificateId',
            'errorMessage' => 'The parameter CertificateId is required.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidParameter.RegionNotSupport',
            'errorMessage' => 'The region does not support the parameter: %s.',
          ),
          8 => 
          array (
            'errorCode' => 'CertificateTypeMismatched',
            'errorMessage' => 'The certificate type does not match.',
          ),
          9 => 
          array (
            'errorCode' => 'SPEC_NOT_SUPPORT_PARAMETER',
            'errorMessage' => 'The loadbalancer with share spec does not support the parameter.',
          ),
          10 => 
          array (
            'errorCode' => 'CnCertificateNotSupport',
            'errorMessage' => 'The cn certificate is not support.',
          ),
          11 => 
          array (
            'errorCode' => 'InvalidParam.CertificateBindingType',
            'errorMessage' => 'The param  is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'MissingParam.ServerCertificates',
            'errorMessage' => 'The param ServerCertificates is missing.',
          ),
          13 => 
          array (
            'errorCode' => 'InvalidParamSize.ServerCertificates',
            'errorMessage' => 'The size of param ServerCertificates is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"149A2470-F010-4437-BF68-343******\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<SetDomainExtensionAttributeResponse>\\n  <RequestId>149A2470-F010-4437-BF68-xxxxx</RequestId>\\n</SetDomainExtensionAttributeResponse>\\n","errorExample":""}]',
      'title' => '修改扩展域名的证书',
      'summary' => '修改扩展域名的证书。',
      'description' => '>性能共享型实例的监听不支持扩展域名。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteDomainExtension' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的所属地域。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DomainExtensionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的扩展域名ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'de-bp1rp7ta1****',
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
                'example' => '149A2470-F010-4437-BF68-343******',
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
            'errorCode' => 'InvalidParameter.DomainExtensionId',
            'errorMessage' => 'The specified DomainExtensionId does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'DomainExtensionProcessing',
            'errorMessage' => 'A previous configuration of the DomainExtension is pending, please try again later.',
          ),
          2 => 
          array (
            'errorCode' => 'DomainExtensionRelatedRuleExist',
            'errorMessage' => 'The DomainExtension is related with rules.',
          ),
          3 => 
          array (
            'errorCode' => 'TooManyListeners',
            'errorMessage' => 'More than 1 listener is found, please be more specified',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"149A2470-F010-4437-BF68-343******\\"\\n}","type":"json"}]',
      'title' => '删除扩展域名',
      'summary' => '删除扩展域名。',
    ),
    'DescribeDomainExtensionAttribute' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DomainExtensionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '扩展域名ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'de-bp1r******',
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
              'Domain' => 
              array (
                'description' => '域名。',
                'type' => 'string',
                'example' => 'www.example.com',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '48C1B671-C6DB-4DDE-9B30-1055******',
              ),
              'LoadBalancerId' => 
              array (
                'description' => '负载均衡实例ID。',
                'type' => 'string',
                'example' => 'lb-bp1o95i6*****',
              ),
              'ListenerPort' => 
              array (
                'description' => '负载均衡实例HTTPS监听的前端端口，取值：**1**~**65535**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '443',
              ),
              'ServerCertificateId' => 
              array (
                'description' => '域名使用的服务器证书ID。',
                'type' => 'string',
                'example' => '231579085529123_166f82******_1714763408_709981430',
              ),
              'DomainExtensionId' => 
              array (
                'description' => '扩展域名ID。',
                'type' => 'string',
                'example' => 'de-bp1rp******',
              ),
              'Certificates' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                ),
              ),
              'ServerCertificates' => 
              array (
                'type' => 'object',
                'properties' => 
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
            'errorCode' => 'InvalidParameter.DomainExtensionId',
            'errorMessage' => '%s.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter.DomainExtensionId',
            'errorMessage' => 'The param DomainExtensionId is missing',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Domain\\": \\"www.example.com\\",\\n  \\"RequestId\\": \\"48C1B671-C6DB-4DDE-9B30-1055******\\",\\n  \\"LoadBalancerId\\": \\"lb-bp1o95i6*****\\",\\n  \\"ListenerPort\\": 443,\\n  \\"ServerCertificateId\\": \\"231579085529123_166f82******_1714763408_709981430\\",\\n  \\"DomainExtensionId\\": \\"de-bp1rp******\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDomainExtensionAttributeResponse>\\n<ListenerPort>443</ListenerPort>\\n<DomainExtensionId>de-bp1rp7ta191dv</DomainExtensionId>\\n<RequestId>48C1B671-C6DB-4DDE-9B30-10557E36CDE0</RequestId>\\n<ServerCertificateId>231579085529123_166f82******_1714763408_709981430</ServerCertificateId>\\n<LoadBalancerId>lb-bp1o94dp5i6*****earr9g6d1l</LoadBalancerId>\\n<Domain>www.example.com</Domain>\\n</DescribeDomainExtensionAttributeResponse>","errorExample":""}]',
      'title' => '查询已添加的扩展域名属性',
      'summary' => '查询已添加的扩展域名属性。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDomainExtensions' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1b6c08ex****',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例HTTPS监听的前端端口，取值：**1-65535**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '443',
          ),
        ),
        3 => 
        array (
          'name' => 'DomainExtensionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '扩展域名ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'de-bp1rp7ta1****',
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
                'example' => '48C1B671-C6DB-4DDE-9B30-1055*****',
              ),
              'DomainExtensions' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DomainExtension' => 
                  array (
                    'description' => '扩展域名列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '扩展域名列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ServerCertificateId' => 
                        array (
                          'description' => '域名使用的证书ID。',
                          'type' => 'string',
                          'example' => '12315790****3_166f8****9_1714****08_70998****',
                        ),
                        'Domain' => 
                        array (
                          'description' => '域名。',
                          'type' => 'string',
                          'example' => 'www.example.com',
                        ),
                        'DomainExtensionId' => 
                        array (
                          'description' => '扩展域名ID。',
                          'type' => 'string',
                          'example' => 'de-bp1rp7ta1****',
                        ),
                        'Certificates' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                          ),
                        ),
                        'ServerCertificates' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
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
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"48C1B671-C6DB-4DDE-9B30-1055*****\\",\\n  \\"DomainExtensions\\": {\\n    \\"DomainExtension\\": [\\n      {\\n        \\"ServerCertificateId\\": \\"12315790****3_166f8****9_1714****08_70998****\\",\\n        \\"Domain\\": \\"www.example.com\\",\\n        \\"DomainExtensionId\\": \\"de-bp1rp7ta1****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>48C1B671-C6DB-4DDE-9B30-10557E36CDE0</RequestId>\\n<DomainExtensions>\\n    <DomainExtension>\\n        <DomainExtensionId>de-bp1rp7ta1****</DomainExtensionId>\\n        <ServerCertificateId>1231579085529123_166f8204689_1714763408_70998****</ServerCertificateId>\\n        <Domain>www.example.com</Domain>\\n    </DomainExtension>\\n</DomainExtensions>","errorExample":""}]',
      'title' => '查询已添加的扩展域名',
      'summary' => '查询已添加的扩展域名。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateTLSCipherPolicy' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'TLS策略名称。长度为2~200个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'TLSPolicy-test',
          ),
        ),
        2 => 
        array (
          'name' => 'Ciphers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '支持的加密套件列表，具体依赖TLSVersion值。最多支持添加32个加密套件。

TLSv1.0和TLSv1.1 支持：
- **ECDHE-ECDSA-AES128-SHA**
- **ECDHE-ECDSA-AES256-SHA**
- **ECDHE-RSA-AES128-SHA**
- **ECDHE-RSA-AES256-SHA**
- **AES128-SHA**
- **AES256-SHA**
- **DES-CBC3-SHA**

TLSv1.2支持：
-   **ECDHE-ECDSA-AES128-SHA**
-   **ECDHE-ECDSA-AES256-SHA**
-   **ECDHE-RSA-AES128-SHA**
-   **ECDHE-RSA-AES256-SHA**
-   **AES128-SHA**
-   **AES256-SHA**
-   **DES-CBC3-SHA**
-   **ECDHE-ECDSA-AES128-GCM-SHA256**
-   **ECDHE-ECDSA-AES256-GCM-SHA384**
-   **ECDHE-ECDSA-AES128-SHA256**
-   **ECDHE-ECDSA-AES256-SHA384**
-   **ECDHE-RSA-AES128-GCM-SHA256**
-   **ECDHE-RSA-AES256-GCM-SHA384**
-   **ECDHE-RSA-AES128-SHA256**
-   **ECDHE-RSA-AES256-SHA384**
-   **AES128-GCM-SHA256**
-   **AES256-GCM-SHA384**
-   **AES128-SHA256**
-   **AES256-SHA256**

TLSv1.3支持：
- **TLS_AES_128_GCM_SHA256**
- **TLS_AES_256_GCM_SHA384**
- **TLS_CHACHA20_POLY1305_SHA256**
- **TLS_AES_128_CCM_SHA256**
- **TLS_AES_128_CCM_8_SHA256**
',
            'type' => 'array',
            'items' => 
            array (
              'description' => '支持的加密套件列表，具体依赖TLSVersion值。最多支持添加32个加密套件。

TLSv1.0和TLSv1.1 支持：
- **ECDHE-ECDSA-AES128-SHA**
- **ECDHE-ECDSA-AES256-SHA**
- **ECDHE-RSA-AES128-SHA**
- **ECDHE-RSA-AES256-SHA**
- **AES128-SHA**
- **AES256-SHA**
- **DES-CBC3-SHA**

TLSv1.2支持：
-   **ECDHE-ECDSA-AES128-SHA**
-   **ECDHE-ECDSA-AES256-SHA**
-   **ECDHE-RSA-AES128-SHA**
-   **ECDHE-RSA-AES256-SHA**
-   **AES128-SHA**
-   **AES256-SHA**
-   **DES-CBC3-SHA**
-   **ECDHE-ECDSA-AES128-GCM-SHA256**
-   **ECDHE-ECDSA-AES256-GCM-SHA384**
-   **ECDHE-ECDSA-AES128-SHA256**
-   **ECDHE-ECDSA-AES256-SHA384**
-   **ECDHE-RSA-AES128-GCM-SHA256**
-   **ECDHE-RSA-AES256-GCM-SHA384**
-   **ECDHE-RSA-AES128-SHA256**
-   **ECDHE-RSA-AES256-SHA384**
-   **AES128-GCM-SHA256**
-   **AES256-GCM-SHA384**
-   **AES128-SHA256**
-   **AES256-SHA256**

TLSv1.3支持：
- **TLS_AES_128_GCM_SHA256**
- **TLS_AES_256_GCM_SHA384**
- **TLS_CHACHA20_POLY1305_SHA256**
- **TLS_AES_128_CCM_SHA256**
- **TLS_AES_128_CCM_8_SHA256**
',
              'type' => 'string',
              'required' => false,
              'example' => 'ECDHE-ECDSA-AES128-SHA',
            ),
            'required' => true,
            'example' => 'AES256-SHA256',
            'maxItems' => 30,
          ),
        ),
        3 => 
        array (
          'name' => 'TLSVersions',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '支持的TLS协议版本。取值：**TLSv1.0**、**TLSv1.1**、**TLSv1.2**和**TLSv1.3**。最多支持添加4个TLS协议版本。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '支持的TLS协议版本。取值：**TLSv1.0**、**TLSv1.1**、**TLSv1.2**和**TLSv1.3**。最多支持添加4个TLS协议版本。',
              'type' => 'string',
              'required' => false,
              'example' => 'TLSv1.0',
            ),
            'required' => true,
            'example' => 'TLSv1.0',
            'maxItems' => 5,
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
              'TLSCipherPolicyId' => 
              array (
                'description' => '策略ID。',
                'type' => 'string',
                'example' => 'tls-bp14bb1e7dll4f****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D7A8875F-373A-5F48-8484-25B07A61F2AF',
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
            'errorCode' => 'MissingParam.Name',
            'errorMessage' => 'The param Name is missing.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParam.TlsVersions',
            'errorMessage' => 'The param TlsVersions is missing.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingParam.Ciphers',
            'errorMessage' => 'The param Ciphers is missing.',
          ),
          3 => 
          array (
            'errorCode' => 'ParamDuplicateError.TlsVersions',
            'errorMessage' => 'The param TlsVersions is duplicate in request.',
          ),
          4 => 
          array (
            'errorCode' => 'ParamDuplicateError.Ciphers',
            'errorMessage' => 'The param Ciphers is duplicate in request.',
          ),
          5 => 
          array (
            'errorCode' => 'TLSPolicyNoSupportVersion',
            'errorMessage' => 'The specified TLS version is not supported.',
          ),
          6 => 
          array (
            'errorCode' => 'TLSPolicyNoSupportCipher',
            'errorMessage' => 'The specified TLS cipher is not supported.',
          ),
          7 => 
          array (
            'errorCode' => 'TLSCipherPolicyOverLimit',
            'errorMessage' => 'The TLSCipherPolicy is over the limit.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TLSCipherPolicyId\\": \\"tls-bp14bb1e7dll4f****\\",\\n  \\"RequestId\\": \\"D7A8875F-373A-5F48-8484-25B07A61F2AF\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateTLSCipherPolicyResponse>\\n    <TLSCipherPolicyId>tls-bp14bb1e7dll4f****</TLSCipherPolicyId>\\n    <RequestId>D7A8875F-373A-5F48-8484-25B07A61F2AF</RequestId>\\n</CreateTLSCipherPolicyResponse>","errorExample":""}]',
      'title' => '创建TLS策略',
      'summary' => '创建TLS策略。',
      'description' => '该功能默认不开放，建议您使用ALB或NLB。特殊情况请联系销售或提交工单。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteTLSCipherPolicy' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例所在的地域ID。
您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'TLSCipherPolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'TLS策略实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'tls-bp1lp2076qx4ebridp******',
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
            'errorCode' => 'MissingParam.TLSCipherPolicyId',
            'errorMessage' => 'The param TLSCipherPolicyId is missing.',
          ),
          1 => 
          array (
            'errorCode' => 'TLSPolicyConfiguring',
            'errorMessage' => 'The specified TLS cipher policy is configuring.',
          ),
          2 => 
          array (
            'errorCode' => 'TLSPolicyBeingUsed',
            'errorMessage' => 'The specified TLS cipher policy is being used.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidTLSPolicyId.NotExist',
            'errorMessage' => 'The specified TLS cipher policy does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'TLSPolicyRelated',
            'errorMessage' => 'The specified TLS cipher policy is related with listeners.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteTLSCipherPolicyResponse>\\r\\n<RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\r\\n</DeleteTLSCipherPolicyResponse>","errorExample":""}]',
      'title' => '删除TLS策略',
      'summary' => '删除TLS策略。',
      'description' => '该功能默认不开放，建议您使用ALB或NLB。特殊情况请联系销售或提交工单。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetTLSCipherPolicyAttribute' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例地域ID。

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'TLSCipherPolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'TLS策略ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'tls-bp1lp2076qx4e******bridp',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'TLS策略名称。长度为2~200个英文或中文字符，必须以大小字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'tls-policy*****-test',
          ),
        ),
        3 => 
        array (
          'name' => 'TLSVersions',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '支持的TLS协议版本。取值：**TLSv1.0**、**TLSv1.1**、**TLSv1.2**和**TLSv1.3**。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '支持的TLS协议版本。取值：**TLSv1.0**、**TLSv1.1**、**TLSv1.2**和**TLSv1.3**。',
              'type' => 'string',
              'required' => false,
              'example' => 'TLSv1.0',
            ),
            'required' => true,
            'example' => 'TLSv1.0',
            'maxItems' => 5,
          ),
        ),
        4 => 
        array (
          'name' => 'Ciphers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '支持的加密套件，具体依赖TLSVersions的取值。

Cipher只要被任何一个传入的TLSVersions支持即可，例如选择了TLSv1.3，那么Cipher列表必须包含TLSv1.3支持的Cipher。

TLSv1.0和TLSv1.1 支持：

- ECDHE-ECDSA-AES128-SHA
- ECDHE-ECDSA-AES256-SHA
- ECDHE-RSA-AES128-SHA
- ECDHE-RSA-AES256-SHA
- AES128-SHA AES256-SHA
- DES-CBC3-SHA

TLSv1.2支持：

- ECDHE-ECDSA-AES128-SHA
- ECDHE-ECDSA-AES256-SHA
- ECDHE-RSA-AES128-SHA
- ECDHE-RSA-AES256-SHA
- AES128-SHA AES256-SHA
- DES-CBC3-SHA
- ECDHE-ECDSA-AES128-GCM-SHA256
- ECDHE-ECDSA-AES256-GCM-SHA384
- ECDHE-ECDSA-AES128-SHA256
- ECDHE-ECDSA-AES256-SHA384
- ECDHE-RSA-AES128-GCM-SHA256
- ECDHE-RSA-AES256-GCM-SHA384
- ECDHE-RSA-AES128-SHA256
- ECDHE-RSA-AES256-SHA384
- AES128-GCM-SHA256
- AES256-GCM-SHA384
- AES128-SHA256 AES256-SHA256

TLSv1.3支持：

- TLS_AES_128_GCM_SHA256
- TLS_AES_256_GCM_SHA384
- TLS_CHACHA20_POLY1305_SHA256
- TLS_AES_128_CCM_SHA256
- TLS_AES_128_CCM_8_SHA256',
            'type' => 'array',
            'items' => 
            array (
              'description' => '支持的加密套件，具体依赖TLSVersions的取值。

Cipher只要被任何一个传入的TLSVersions支持即可，例如选择了TLSv1.3，那么Cipher列表必须包含TLSv1.3支持的Cipher。

TLSv1.0和TLSv1.1 支持：

- ECDHE-ECDSA-AES128-SHA
- ECDHE-ECDSA-AES256-SHA
- ECDHE-RSA-AES128-SHA
- ECDHE-RSA-AES256-SHA
- AES128-SHA AES256-SHA
- DES-CBC3-SHA

TLSv1.2支持：

- ECDHE-ECDSA-AES128-SHA
- ECDHE-ECDSA-AES256-SHA
- ECDHE-RSA-AES128-SHA
- ECDHE-RSA-AES256-SHA
- AES128-SHA AES256-SHA
- DES-CBC3-SHA
- ECDHE-ECDSA-AES128-GCM-SHA256
- ECDHE-ECDSA-AES256-GCM-SHA384
- ECDHE-ECDSA-AES128-SHA256
- ECDHE-ECDSA-AES256-SHA384
- ECDHE-RSA-AES128-GCM-SHA256
- ECDHE-RSA-AES256-GCM-SHA384
- ECDHE-RSA-AES128-SHA256
- ECDHE-RSA-AES256-SHA384
- AES128-GCM-SHA256
- AES256-GCM-SHA384
- AES128-SHA256 AES256-SHA256

TLSv1.3支持：

- TLS_AES_128_GCM_SHA256
- TLS_AES_256_GCM_SHA384
- TLS_CHACHA20_POLY1305_SHA256
- TLS_AES_128_CCM_SHA256
- TLS_AES_128_CCM_8_SHA256',
              'type' => 'string',
              'required' => false,
              'example' => 'ECDHE-ECDSA-AES128-SHA',
            ),
            'required' => true,
            'example' => 'DES-CBC3-SHA',
            'maxItems' => 30,
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
              'TaskId' => 
              array (
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af****-18f6aed5',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876*******',
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
            'errorCode' => 'MissingParam.Name',
            'errorMessage' => 'The param Name is missing.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParam.TlsVersions',
            'errorMessage' => 'The param TlsVersions is missing.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingParam.Ciphers',
            'errorMessage' => 'The param Ciphers is missing.',
          ),
          3 => 
          array (
            'errorCode' => 'ParamDuplicateError.TlsVersions',
            'errorMessage' => 'The param TlsVersions is duplicate in request.',
          ),
          4 => 
          array (
            'errorCode' => 'ParamDuplicateError.Ciphers',
            'errorMessage' => 'The param Ciphers is duplicate in request.',
          ),
          5 => 
          array (
            'errorCode' => 'TLSPolicyNoSupportVersion',
            'errorMessage' => 'The specified TLS version is not supported.',
          ),
          6 => 
          array (
            'errorCode' => 'TLSPolicyNoSupportCipher',
            'errorMessage' => 'The specified TLS cipher is not supported.',
          ),
          7 => 
          array (
            'errorCode' => 'MissingParam.TLSCipherPolicyId',
            'errorMessage' => 'The param TLSCipherPolicyId is missing.',
          ),
          8 => 
          array (
            'errorCode' => 'TLSPolicyConfiguring',
            'errorMessage' => 'The specified TLS cipher policy is configuring.',
          ),
          9 => 
          array (
            'errorCode' => 'TLSPolicyBeingUsed',
            'errorMessage' => 'The specified TLS cipher policy is being used.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidTLSPolicyId.NotExist',
            'errorMessage' => 'The specified TLS cipher policy does not exist.',
          ),
          11 => 
          array (
            'errorCode' => 'TLSPolicyUnchanged',
            'errorMessage' => 'The specified TLS cipher policy is unchanged.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskId\\": \\"72dcd26b-f12d-4c27-b3af****-18f6aed5\\",\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876*******\\"\\n}","errorExample":""},{"type":"xml","example":"<SetTLSCipherPolicyAttributeReaponse>\\n<TaskId>72dcd26b-f12d-4c27-b3af****-18f6aed5</TaskId>\\n<RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</SetTLSCipherPolicyAttributeReaponse>","errorExample":""}]',
      'title' => '设置TLS策略',
      'summary' => '设置TLS策略。',
      'description' => '该功能默认不开放，建议您使用ALB或NLB。特殊情况请联系销售或提交工单。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListTLSCipherPolicies' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例地域ID。

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。  ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'TLSCipherPolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'TLS策略ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'tls-bp17elso1h323r****',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'TLS策略名称。长度为2~200个英文或中文字符，必须以大小写字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'TLSPolicy-test****',
          ),
        ),
        3 => 
        array (
          'name' => 'IncludeListener',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回关联的监听信息。取值：

- **true**：返回。
- **false**（默认）：不返回。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
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
- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
            'type' => 'string',
            'required' => false,
            'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
          ),
        ),
        5 => 
        array (
          'name' => 'MaxItems',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本次读取的最大TLS策略数，取值：**1**~**100**。设置为空时，默认值为**20**。',
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
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'TotalCount' => 
              array (
                'description' => '本次请求条件下的TLS策略总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1000',
              ),
              'IsTruncated' => 
              array (
                'description' => '是否结束。取值：

- **true**：表示当前页是最后一页。

- **false**：表示还有下一页。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'TLSCipherPolicies' => 
              array (
                'description' => 'TLS策略列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => 'TLS策略实例状态。取值：

- **configuring**：配置中。

- **normal**： 正常。',
                      'type' => 'string',
                      'example' => 'normal',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => 'TLS策略实例ID。',
                      'type' => 'string',
                      'example' => 'tls-bp17elso1h323r****',
                    ),
                    'Name' => 
                    array (
                      'description' => 'TLS策略名称。',
                      'type' => 'string',
                      'example' => 'TLSPolicy-test****',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间的时间戳。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1608273800000',
                    ),
                    'RelateListeners' => 
                    array (
                      'description' => '关联的监听。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Port' => 
                          array (
                            'description' => '监听端口。取值：**1**~**65535**。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '80',
                          ),
                          'Protocol' => 
                          array (
                            'description' => '监听协议。取值：
- **TCP** 
- **UDP**
- **HTTP**
- **HTTPS**',
                            'type' => 'string',
                            'example' => 'HTTPS',
                          ),
                          'LoadBalancerId' => 
                          array (
                            'description' => '负载均衡实例ID。',
                            'type' => 'string',
                            'example' => 'lb-bp1b6c719dfa08ex****',
                          ),
                        ),
                      ),
                    ),
                    'TLSVersions' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '支持的TLS协议版本。',
                        'type' => 'string',
                        'example' => 'TLSv1.0',
                      ),
                    ),
                    'Ciphers' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '支持的加密套件，具体依赖TLSVersions的取值。

TLSv1.0和TLSv1.1 支持： 

- ECDHE-ECDSA-AES128-SHA 
- ECDHE-ECDSA-AES256-SHA
- ECDHE-RSA-AES128-SHA 
- ECDHE-RSA-AES256-SHA 
- AES128-SHA AES256-SHA 
- DES-CBC3-SHA

TLSv1.2支持：

- ECDHE-ECDSA-AES128-SHA 
- ECDHE-ECDSA-AES256-SHA 
- ECDHE-RSA-AES128-SHA 
- ECDHE-RSA-AES256-SHA 
- AES128-SHA AES256-SHA 
- DES-CBC3-SHA 
- ECDHE-ECDSA-AES128-GCM-SHA256 
- ECDHE-ECDSA-AES256-GCM-SHA384 
- ECDHE-ECDSA-AES128-SHA256 
- ECDHE-ECDSA-AES256-SHA384 
- ECDHE-RSA-AES128-GCM-SHA256 
- ECDHE-RSA-AES256-GCM-SHA384 
- ECDHE-RSA-AES128-SHA256 
- ECDHE-RSA-AES256-SHA384  
- AES128-GCM-SHA256 
- AES256-GCM-SHA384 
- AES128-SHA256 AES256-SHA256

TLSv1.3支持： 

- TLS_AES_128_GCM_SHA256
- TLS_AES_256_GCM_SHA384
- TLS_CHACHA20_POLY1305_SHA256
- TLS_AES_128_CCM_SHA256
- TLS_AES_128_CCM_8_SHA256',
                        'type' => 'string',
                        'example' => 'ECDHE-ECDSA-AES128-SHA',
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
            'errorCode' => 'QueryTokenInvalid',
            'errorMessage' => 'The specified token is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'QueryTokenNotExist',
            'errorMessage' => 'The specified token is not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"TotalCount\\": 1000,\\n  \\"IsTruncated\\": false,\\n  \\"TLSCipherPolicies\\": [\\n    {\\n      \\"Status\\": \\"normal\\",\\n      \\"InstanceId\\": \\"tls-bp17elso1h323r****\\",\\n      \\"Name\\": \\"TLSPolicy-test****\\",\\n      \\"CreateTime\\": 1608273800000,\\n      \\"RelateListeners\\": [\\n        {\\n          \\"Port\\": 80,\\n          \\"Protocol\\": \\"HTTPS\\",\\n          \\"LoadBalancerId\\": \\"lb-bp1b6c719dfa08ex****\\"\\n        }\\n      ],\\n      \\"TLSVersions\\": [\\n        \\"TLSv1.0\\"\\n      ],\\n      \\"Ciphers\\": [\\n        \\"ECDHE-ECDSA-AES128-SHA\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTLSCipherPoliciesResponse>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <TotalCount>1000</TotalCount>\\n    <IsTruncated>false</IsTruncated>\\n    <TLSCipherPolicies>\\n        <Status>normal</Status>\\n        <InstanceId>tls-bp17elso1h323r****</InstanceId>\\n        <Name>TLSPolicy-test****</Name>\\n        <CreateTime>1608273800000</CreateTime>\\n        <RelateListeners>\\n            <Port>80</Port>\\n            <Protocol>HTTPS</Protocol>\\n            <LoadBalancerId>lb-bp1b6c719dfa08ex****</LoadBalancerId>\\n        </RelateListeners>\\n        <TLSVersions>TLSv1.0</TLSVersions>\\n        <Ciphers>ECDHE-ECDSA-AES128-SHA</Ciphers>\\n    </TLSCipherPolicies>\\n</ListTLSCipherPoliciesResponse>","errorExample":""}]',
      'title' => '查询TLS策略',
      'summary' => '查询TLS策略。',
      'description' => '该功能默认不开放，建议您使用ALB或NLB。特殊情况请联系销售或提交工单。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateAccessControlList' => 
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
            'description' => '访问控制策略组的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'AclName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略组名称，长度限制为1~80个字符，只支持中文、字母、数字和半角句号（.）、短划线（-）、正斜线（/）和下划线（_）。访问控制策略组名称必须为地域内唯一。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rule1',
          ),
        ),
        2 => 
        array (
          'name' => 'AddressIPVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP版本，可以设置为**ipv4**或者**ipv6**。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'ipv4',
            'default' => 'ipv4',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略组所在的资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rt******',
          ),
        ),
        4 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'allowEmptyValue' => true,
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '监听的标签键。N的取值范围：**1**~**20**。一旦传入该值，则不允许为空字符串。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '监听的标签值。N的取值范围：**1**~**20**。一旦传入该值，可以为空字符串。最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'AclId' => 
              array (
                'description' => '访问控制策略组ID。',
                'type' => 'string',
                'example' => 'acl-rj9xpxzcwxrukois****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '988CB45E-1643-48C0-87B4-928DDF77EA49',
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
            'errorCode' => 'InvalidAction.RegionNotSupport',
            'errorMessage' => 'The region does not support this action.',
          ),
          1 => 
          array (
            'errorCode' => 'AclNumberOverLimit',
            'errorMessage' => 'The Acl number has reached to the max quota limit.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidResourceGroupId.NotFound',
            'errorMessage' => 'The specified ResourceGroupId is not found.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceInConfiguring.Acl',
            'errorMessage' => 'The specified resource is configuring, please try again later.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParam.TagValue	',
            'errorMessage' => '%s.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParam.TagKey',
            'errorMessage' => '%s.',
          ),
          6 => 
          array (
            'errorCode' => 'SizeLimitExceeded.Tag',
            'errorMessage' => '%s.',
          ),
          7 => 
          array (
            'errorCode' => 'MissingParam.TagKey',
            'errorMessage' => 'The param MissingParam.TagKey is missing.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AclId\\": \\"acl-rj9xpxzcwxrukois****\\",\\n  \\"RequestId\\": \\"988CB45E-1643-48C0-87B4-928DDF77EA49\\"\\n}","type":"json"}]',
      'title' => '创建访问控制策略组',
      'summary' => '创建访问控制策略组。',
      'description' => '您可以创建多个访问控制策略组，每个策略组可包含多个IP地址条目或IP地址段条目。访问控制策略组的限制如下：

- 每个地域单账号最多可创建50个访问控制策略组。

- 单账号每次最多可添加50个IP地址或IP地址段条目。

- 每个访问控制策略组最多可添加300个IP地址或IP地址段条目。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddAccessControlListEntry' => 
    array (
      'summary' => '在访问控制策略组中添加IP条目。',
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
            'description' => '访问控制策略组的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'AclId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略组ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'acl-bp1l0kk4gxce43kze*****',
          ),
        ),
        2 => 
        array (
          'name' => 'AclEntrys',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置访问控制策略组。取值：

* **entry**：访问控制策略组中要添加的IP条目，可以指定IP地址段（CIDR block），多个IP地址段之间用半角逗号（,）隔开。

* **comment**：访问控制策略组备注说明。

>每次最多可添加50个条目，如果添加的IP条目重复，则只会添加一条，其余重复条目会被忽略。IP条目必须是IP地址段。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"entry":"10.0.**.**/24","comment":"privaterule1"},{"entry":"192.168.**.**/16","comment":"privaterule2"}]',
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
                'example' => '988CB45E-1643-48C0-87B4-928DDF77EA4',
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
            'errorCode' => 'InvalidParam.AclEntryExists',
            'errorMessage' => 'The specified aclEntry already exists in the acl.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalEntry',
            'errorMessage' => 'Entry version is conflict to the acl version.',
          ),
          2 => 
          array (
            'errorCode' => 'AclEntryIllegal',
            'errorMessage' => '%s.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidEntry',
            'errorMessage' => '%s.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParam.Comment',
            'errorMessage' => 'The specified comment is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'AclEntryExceedLimit',
            'errorMessage' => 'The maximum number of ACL entries is exceeded.',
          ),
          6 => 
          array (
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'The system is busy.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'Service is unavailable now.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"988CB45E-1643-48C0-87B4-928DDF77EA4\\"\\n}","errorExample":""},{"type":"xml","example":"<AddAccessControlListEntryResponse>\\n    <RequestId>988CB45E-1643-48C0-87B4-928DDF77EA4</RequestId>\\n</AddAccessControlListEntryResponse>","errorExample":""}]',
      'title' => '在访问控制策略组中添加IP条目',
      'description' => '每个策略组可包含多个IP地址条目或IP地址段条目，访问控制策略组的条目限制如下：

-  单账号每次可添加的IP地址条目个数：50

-  每个访问控制策略组可包含的条目个数：300',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteAccessControlList' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略组的地域ID。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'AclId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'acl-bp1l0kk4gxce43kz******',
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
                'example' => '988CB45E-1643-48C0-87B4-928DDF77EA49',
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
            'errorCode' => 'OperationFailed.AclBindedWithVip',
            'errorMessage' => 'The ACL has binded with vip.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"988CB45E-1643-48C0-87B4-928DDF77EA49\\"\\n}","type":"json"}]',
      'title' => '删除访问控制策略组',
      'summary' => '删除访问控制策略组。',
      'description' => '<note>只有当要删除的访问控制策略组没有绑定任何监听时，才可以删除。</note>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetAccessControlListAttribute' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略组的地域ID。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'AclId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'acl-bp1l0kk4gxce43kzet04s',
          ),
        ),
        2 => 
        array (
          'name' => 'AclName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略组名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test1',
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
                'example' => '988CB45E-1643-48C0-87B4-928DDF77EA49',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"988CB45E-1643-48C0-87B4-928DDF77EA49\\"\\n}","errorExample":""},{"type":"xml","example":"<SetAccessControlListAttributeResponse>\\n    <RequestId>988CB45E-1643-48C0-87B4-928DDF77EA49</RequestId>\\n</SetAccessControlListAttributeResponse>","errorExample":""}]',
      'title' => '修改访问控制策略组的名称',
      'summary' => '修改访问控制策略组的名称。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAccessControlListAttribute' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略组的地域ID。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'AclId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的访问控制策略组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'acl-bp1ut10zzvh1y8dfs****',
          ),
        ),
        2 => 
        array (
          'name' => 'AclEntryComment',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略组的条目的备注信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'Page',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页的行数。最大值：**50**。默认值：**10**。',
            'type' => 'integer',
            'format' => 'int32',
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
            'type' => 'object',
            'properties' => 
            array (
              'AclId' => 
              array (
                'description' => '访问控制策略组ID。',
                'type' => 'string',
                'example' => 'acl-bp1ut10zzvh1y8dfs****',
              ),
              'Tags' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Tag' => 
                  array (
                    'description' => 'ACL的标签集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'ACL的标签集合。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TagKey' => 
                        array (
                          'description' => 'ACL的标签键。',
                          'type' => 'string',
                          'example' => 'TestKey',
                        ),
                        'TagValue' => 
                        array (
                          'description' => 'ACL的标签值。',
                          'type' => 'string',
                          'example' => 'TestValue',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'AddressIPVersion' => 
              array (
                'description' => '关联的实例的IP类型。',
                'type' => 'string',
                'example' => 'ipv4',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C9906A1D-86F7-4C9C-A369-54DA42EF206A',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '企业资源组ID。',
                'type' => 'string',
                'example' => 'rg-acfmz3jksig****',
              ),
              'AclName' => 
              array (
                'description' => '访问控制策略组名称。',
                'type' => 'string',
                'example' => 'doctest',
              ),
              'AclEntrys' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AclEntry' => 
                  array (
                    'description' => '访问控制策略组的信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AclEntryComment' => 
                        array (
                          'description' => '访问控制条目备注。',
                          'type' => 'string',
                          'example' => '访问控制条目。',
                        ),
                        'AclEntryIP' => 
                        array (
                          'description' => '访问控制条目IP。',
                          'type' => 'string',
                          'example' => '192.168.0.1',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RelatedListeners' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'RelatedListener' => 
                  array (
                    'description' => '该访问控制策略组已绑定的监听列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '该访问控制策略组已绑定的监听列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ListenerPort' => 
                        array (
                          'description' => '绑定的监听的前端端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '443',
                        ),
                        'AclType' => 
                        array (
                          'description' => '访问控制的类型：

- **black**：黑名单

- **white**：白名单',
                          'type' => 'string',
                          'example' => 'white',
                        ),
                        'Protocol' => 
                        array (
                          'description' => '绑定的监听的协议类型。',
                          'type' => 'string',
                          'example' => 'https',
                        ),
                        'LoadBalancerId' => 
                        array (
                          'description' => '传统型负载均衡实例的ID。',
                          'type' => 'string',
                          'example' => 'lb-bp1qpzldlm38bnexl****',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'CreateTime' => 
              array (
                'description' => '访问控制策略的创建时间，格式为：`YYYY-MM-DDThh:mm:ssZ`。',
                'type' => 'string',
                'example' => '2022-08-31T02:49:05Z',
              ),
              'TotalAclEntry' => 
              array (
                'description' => '访问控制条目总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AclId\\": \\"acl-bp1ut10zzvh1y8dfs****\\",\\n  \\"Tags\\": {\\n    \\"Tag\\": [\\n      {\\n        \\"TagKey\\": \\"TestKey\\",\\n        \\"TagValue\\": \\"TestValue\\"\\n      }\\n    ]\\n  },\\n  \\"AddressIPVersion\\": \\"ipv4\\",\\n  \\"RequestId\\": \\"C9906A1D-86F7-4C9C-A369-54DA42EF206A\\",\\n  \\"ResourceGroupId\\": \\"rg-acfmz3jksig****\\",\\n  \\"AclName\\": \\"doctest\\",\\n  \\"AclEntrys\\": {\\n    \\"AclEntry\\": [\\n      {\\n        \\"AclEntryComment\\": \\"访问控制条目。\\",\\n        \\"AclEntryIP\\": \\"192.168.0.1\\"\\n      }\\n    ]\\n  },\\n  \\"RelatedListeners\\": {\\n    \\"RelatedListener\\": [\\n      {\\n        \\"ListenerPort\\": 443,\\n        \\"AclType\\": \\"white\\",\\n        \\"Protocol\\": \\"https\\",\\n        \\"LoadBalancerId\\": \\"lb-bp1qpzldlm38bnexl****\\"\\n      }\\n    ]\\n  },\\n  \\"CreateTime\\": \\"2022-08-31T02:49:05Z\\",\\n  \\"TotalAclEntry\\": 200\\n}","errorExample":""},{"type":"xml","example":"<DescribeAccessControlListAttributeResponse>\\n    <AclId>acl-bp1ut10zzvh1y8dfs****</AclId>\\n    <Tags>\\n        <TagKey>TestKey</TagKey>\\n        <TagValue>TestValue</TagValue>\\n    </Tags>\\n    <AddressIPVersion>ipv4</AddressIPVersion>\\n    <RequestId>C9906A1D-86F7-4C9C-A369-54DA42EF206A</RequestId>\\n    <ResourceGroupId>rg-acfmz3jksig****</ResourceGroupId>\\n    <AclName>doctest</AclName>\\n    <AclEntrys>\\n        <AclEntryComment>访问控制条目。</AclEntryComment>\\n        <AclEntryIP>192.168.0.1</AclEntryIP>\\n    </AclEntrys>\\n    <RelatedListeners>\\n        <ListenerPort>443</ListenerPort>\\n        <AclType>white</AclType>\\n        <Protocol>https</Protocol>\\n        <LoadBalancerId>lb-bp1qpzldlm38bnexl****</LoadBalancerId>\\n    </RelatedListeners>\\n    <CreateTime>2022-08-31T02:49:05Z</CreateTime>\\n    <TotalAclEntry>200</TotalAclEntry>\\n</DescribeAccessControlListAttributeResponse>","errorExample":""}]',
      'title' => '查询访问控制策略组的配置',
      'summary' => '查询访问控制策略组的配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAccessControlLists' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略组的地域ID。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'AclName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略组名称。访问控制策略组名称。长度限制为1~80个字符，只支持中文、字母、数字和半角句号（.）、短划线（-）、正斜线（/）和下划线（_）。访问控制策略组名称必须为地域内唯一。访问控制策略组名称支持模糊查询。

',
            'type' => 'string',
            'required' => false,
            'example' => 'rule1',
          ),
        ),
        2 => 
        array (
          'name' => 'AddressIPVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略组绑定的实例的IP类型。取值：

- **ipv4**：负载均衡实例的IP地址是IPv4类型。

- **ipv6**：负载均衡实例的IP地址是IPv6类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'ipv4',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页的行数，最大值：**50**，默认值：**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列表的页码，默认值：**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '企业资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop4****',
          ),
        ),
        6 => 
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
              'description' => '标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源的标签键。N的取值范围：**1~20**。一旦输入该值，则不允许为空字符串。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。N的取值范围：**1~20**。一旦输入该值，可以为空字符串。
最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1',
                ),
              ),
              'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'PageNumber' => 
              array (
                'description' => '列表的页码，起始值**1**，默认值：**1**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时每页的行数，最大值：**50**，默认值：**10**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3CB646EF-6147-4566-A9D9-CE8FBE86F971',
              ),
              'TotalCount' => 
              array (
                'description' => '已创建的访问控制组策略组个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Count' => 
              array (
                'description' => '当前页展示的访问控制策略组个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Acls' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Acl' => 
                  array (
                    'description' => '查询到的访问控制策略组列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '查询到的访问控制策略组列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AclId' => 
                        array (
                          'description' => '访问控制策略组ID。',
                          'type' => 'string',
                          'example' => 'acl-bp1l0kk4gxce43k*****',
                        ),
                        'AddressIPVersion' => 
                        array (
                          'description' => '关联的负载均衡实例的IP地址类型。',
                          'type' => 'string',
                          'example' => 'ipv4',
                        ),
                        'AclName' => 
                        array (
                          'description' => '访问控制策略组名称。',
                          'type' => 'string',
                          'example' => 'rule1',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '资源组ID。',
                          'type' => 'string',
                          'example' => 'rg-jfenfbp1lhl0****',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '访问控制策略组标签列表。取值：是一个Json string，其结构是一个JsonList。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '访问控制策略组标签列表。取值：是一个Json string，其结构是一个JsonList。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'TagValue' => 
                                  array (
                                    'description' => '资源的标签值。',
                                    'type' => 'string',
                                    'example' => '1',
                                  ),
                                  'TagKey' => 
                                  array (
                                    'description' => '资源的标签键。',
                                    'type' => 'string',
                                    'example' => 'test',
                                  ),
                                ),
                                'example' => '{"Key":"test","Value":"value"}',
                              ),
                            ),
                          ),
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '传统型负载均衡实例的创建时间，格式为：`YYYY-MM-DDThh:mm:ssZ`。',
                          'type' => 'string',
                          'example' => '2022-08-31T02:49:05Z',
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
            'errorCode' => 'InvalidResourceGroupId.NotFound',
            'errorMessage' => 'The specified ResourceGroupId is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'LocationServiceTimeout',
            'errorMessage' => 'Location service connection timeout. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"3CB646EF-6147-4566-A9D9-CE8FBE86F971\\",\\n  \\"TotalCount\\": 1,\\n  \\"Count\\": 1,\\n  \\"Acls\\": {\\n    \\"Acl\\": [\\n      {\\n        \\"AclId\\": \\"acl-bp1l0kk4gxce43k*****\\",\\n        \\"AddressIPVersion\\": \\"ipv4\\",\\n        \\"AclName\\": \\"rule1\\",\\n        \\"ResourceGroupId\\": \\"rg-jfenfbp1lhl0****\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"TagValue\\": \\"1\\",\\n              \\"TagKey\\": \\"test\\"\\n            }\\n          ]\\n        },\\n        \\"CreateTime\\": \\"2022-08-31T02:49:05Z\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAccessControlListsResponse>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <RequestId>3CB646EF-6147-4566-A9D9-CE8FBE86F971</RequestId>\\n    <TotalCount>1</TotalCount>\\n    <Count>1</Count>\\n    <Acls>\\n        <AclId>acl-bp1l0kk4gxce43k*****</AclId>\\n        <AddressIPVersion>ipv4</AddressIPVersion>\\n        <AclName>rule1</AclName>\\n        <ResourceGroupId>rg-jfenfbp1lhl0****</ResourceGroupId>\\n        <Tags>\\n            <TagValue>1</TagValue>\\n            <TagKey>test</TagKey>\\n        </Tags>\\n        <CreateTime>2022-08-31T02:49:05Z</CreateTime>\\n    </Acls>\\n</DescribeAccessControlListsResponse>","errorExample":""}]',
      'title' => '查询已创建的访问控制策略组',
      'summary' => '查询已创建的访问控制策略组。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveAccessControlListEntry' => 
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略组的地域ID。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'AclId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制策略组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'acl-bp1l0kk4gxce43k******',
          ),
        ),
        2 => 
        array (
          'name' => 'AclEntrys',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置访问控制策略组。取值：

* **entry**：访问控制策略组中的IP条目，可以指定IP地址或IP地址段（CIDR block），多个IP地址或地址段之间用半角逗号（,）隔开。

* **comment**：访问控制策略组备注说明。
',
            'type' => 'string',
            'required' => false,
            'example' => '[{"entry":"10.0.10.0/24","comment":"privaterule1"}]',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '988CB45E-1643-48C0-87B4-928DDF77EA49',
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
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'The system is busy.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"988CB45E-1643-48C0-87B4-928DDF77EA49\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveAccessControlListEntryResponse>\\n    <RequestId>988CB45E-1643-48C0-87B4-928DDF77EA49</RequestId>\\n</RemoveAccessControlListEntryResponse>","errorExample":""}]',
      'title' => '删除访问控制策略组中的IP条目',
      'summary' => '删除访问控制策略组中的IP条目。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetListenerAccessControlStatus' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-8vb86hxixo8lvsja8****',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例前端使用的端口。

取值：**1-65535**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '65535',
            'minimum' => '1',
            'example' => '80',
          ),
        ),
        3 => 
        array (
          'name' => 'AccessControlStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启访问控制。取值：

- **open_white_list**：开启白名单访问控制。

- **close**：关闭白名单访问控制。

> 如果开启访问控制后，没有设置白名单则无法访问负载均衡服务。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'open_white_list',
          ),
        ),
        4 => 
        array (
          'name' => 'ListenerProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例前端使用的协议。
> 相同端口存在不同协议监听时，此字段必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'https',
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
            'errorCode' => 'TooManyListeners',
            'errorMessage' => 'More than 1 listener is found, please be more specified',
          ),
          1 => 
          array (
            'errorCode' => 'OperationFailed.ActionNotSupport',
            'errorMessage' => 'The loadbalancer of ipv6 does not support such action.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationUnsupported.SetAccessControl',
            'errorMessage' => 'The singleTunnel/anyTunnel loadbalancer does not support config AccessControlList.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<SetListenerAccessControlStatusResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</SetListenerAccessControlStatusResponse>","errorExample":""}]',
      'title' => '是否开启指定监听的白名单访问控制',
      'summary' => '是否开启指定监听的白名单访问控制。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveListenerWhiteListItem' => 
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lb-8vb86hxixo8lvsja8****',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监听端口。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '65535',
            'minimum' => '1',
            'example' => '80',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceItems',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制列表。支持输入IP地址或IP地址段（CIDR block形式），多个IP地址或地址段用逗号（,）分隔。

> 如果所有IP都被删除，则无法访问该监听。',
            'type' => 'string',
            'required' => true,
            'example' => '192.168.XX.XX',
          ),
        ),
        4 => 
        array (
          'name' => 'ListenerProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例前端使用的协议。

>相同端口存在不同协议监听时，此字段必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'https',
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
            'errorCode' => 'TooManyListeners',
            'errorMessage' => 'More than 1 listener is found, please be more specified',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":"{\\"Code\\":\\"InvalidParameter\\",\\"Message\\":\\"The specified parameter is not valid.\\",\\"HostId\\":\\"slb-pop.aliyuncs.com\\",\\"RequestId\\":\\"0669D684-69D8-408E-A4FA-B9011E0F4E66\\"}"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n<RemoveListenerWhiteListItemResponse>\\n\\t\\t<RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</RemoveListenerWhiteListItemResponse>","errorExample":""}]',
      'title' => '删除监听白名单中的IP',
      'summary' => '删除监听白名单中的IP。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddListenerWhiteListItem' => 
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
            'description' => '负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1o94dp5i6ea*******',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例前端使用的端口。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '65535',
            'minimum' => '1',
            'example' => '80',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceItems',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问控制列表。

监听的**AccessControlStatus**为**open_white_list**时有效。

支持输入IP地址或IP地址段（CIDR block形式），多个IP地址或地址段用半角逗号（,）分割。

不允许输入**0.0.0.0**或**0.0.0.0/0**。您可以通过调用[SetListenerAccessControlStatus](~~27599~~)接口将**AccessControlStatus**的值设置为**close**来关闭访问控制。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '192.168.XX.XX',
          ),
        ),
        4 => 
        array (
          'name' => 'ListenerProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例前端使用的协议。

>相同端口存在不同协议监听时，此字段必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'https',
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
            'errorCode' => 'TooManyListeners',
            'errorMessage' => 'More than 1 listener is found, please be more specified',
          ),
          1 => 
          array (
            'errorCode' => 'Operation.NotAllowed',
            'errorMessage' => 'WhiteList is Disabled while Acl is Enabled',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAddress',
            'errorMessage' => '%s,%s',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.SourceItems',
            'errorMessage' => '%s.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<AddListenerWhiteListItemResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</AddListenerWhiteListItemResponse>","errorExample":""}]',
      'title' => '添加监听访问控制白名单',
      'summary' => '添加监听访问控制白名单。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeListenerAccessControlAttribute' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域。

您可以从[地域和可用区](~~40654~~)列表或通过调用[DescribeRegions](~~25609~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lb-8vb86hxixo8lvsja8****',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例前端使用的端口。

取值：**1~65535**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '80',
          ),
        ),
        3 => 
        array (
          'name' => 'ListenerProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例前端使用的协议。

> 相同端口存在不同协议监听时，此字段必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'https',
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
              'SourceItems' => 
              array (
                'description' => '访问控制列表。',
                'type' => 'string',
                'example' => '192.168.XX.XX',
              ),
              'AccessControlStatus' => 
              array (
                'description' => '是否开启访问控制。取值：

- **open_white_list**：开启白名单访问控制功能。

- **close**：关闭访问控制功能。',
                'type' => 'string',
                'example' => 'open_white_list',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF34B540710',
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
            'errorCode' => 'TooManyListeners',
            'errorMessage' => 'More than 1 listener is found, please be more specified',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"SourceItems\\": \\"192.168.XX.XX\\",\\n  \\"AccessControlStatus\\": \\"open_white_list\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeListenerAccessControlAttributeResponse>\\n    <SourceItems>192.168.XX.XX</SourceItems>\\n    <AccessControlStatus>open_white_list</AccessControlStatus>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n</DescribeListenerAccessControlAttributeResponse>","errorExample":""}]',
      'title' => '查询监听的白名单配置',
      'summary' => '查询监听的白名单配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddTags' => 
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
            'description' => '负载均衡实例的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1kuzyb******',
          ),
        ),
        2 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要添加的Tag列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '[{"TagKey":"Key1","TagValue":"Value1"},{"TagKey":"Key2","TagValue":"Value2"}]',
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
                'example' => '365F4154-92F6-4AE4-92F8-7FF34******',
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
            'errorCode' => 'InvalidParameter.TagValue',
            'errorMessage' => 'The specified tag value is illegal.',
          ),
          1 => 
          array (
            'errorCode' => 'QuotaExceeded.Tag',
            'errorMessage' => 'The number of Tag exceeds the limit.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.TagKey',
            'errorMessage' => 'The specified tag key is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter.Tags',
            'errorMessage' => 'The parameter Tags should not be null.',
          ),
          4 => 
          array (
            'errorCode' => 'Duplicate.TagKey',
            'errorMessage' => 'The Tag.N.Key contain duplicate key.',
          ),
          5 => 
          array (
            'errorCode' => 'NoPermission.Operator',
            'errorMessage' => 'The operator is not permission for this operate.',
          ),
          6 => 
          array (
            'errorCode' => 'QuotaExceed.TagsPerResource',
            'errorMessage' => 'The maximum number of tags for each resource is exceeded.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidOperation.ConcurrentModification',
            'errorMessage' => 'The resource %s is modified concurrently.',
          ),
          8 => 
          array (
            'errorCode' => 'InnerRateLimiting',
            'errorMessage' => 'Internal service rate limiting, please try again later.',
          ),
          9 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'The request processing has failed due to unknow error, exception or failure.',
          ),
          10 => 
          array (
            'errorCode' => 'InternalInvokeError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34******\\"\\n}","type":"json"}]',
      'title' => '为指定的负载均衡实例添加标签',
      'summary' => '为指定的负载均衡实例添加标签。',
      'description' => '为指定的负载均衡实例添加标签。

调用该接口时，请注意：

* 每个负载均衡实例最多可绑定10个Tag。

* 单次绑定的标签数最多为5对。

* 一个负载均衡实例下的所有Tag和Key不能重复。

* 当添加的标签与原有标签Key相同，但Value不同时，则覆盖原有的标签。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
            'description' => '负载均衡实例的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例ID。 ',
            'type' => 'string',
            'required' => false,
            'example' => 'lb-bp1kuzybm******',
          ),
        ),
        2 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的标签列表。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"TagKey":"Key1","TagValue":"Value1"},{"TagKey":"Key2","TagValue":"Value2"}]',
          ),
        ),
        3 => 
        array (
          'name' => 'DistinctKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否为DistinctKey。 

取值：true或false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单页结果数量，接口默认50，最大100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
            'default' => '50',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例列表页码，起始值1，默认值1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
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
                'example' => '365F4154-92F6-4AE4-92F8-7FF3******',
              ),
              'PageSize' => 
              array (
                'description' => '默认50，最大100。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'PageNumber' => 
              array (
                'description' => '实例列表页码，起始值1，默认值1。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'description' => '根据过滤条件得到的实例总个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TagSets' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TagSet' => 
                  array (
                    'description' => 'Tag列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TagValue' => 
                        array (
                          'description' => '标签Value。',
                          'type' => 'string',
                          'example' => 'api',
                        ),
                        'InstanceCount' => 
                        array (
                          'description' => '该标签绑定的实例总数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '10',
                        ),
                        'TagKey' => 
                        array (
                          'description' => '标签Key。',
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
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission.Operator',
            'errorMessage' => 'The operator is not permission for this operate.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF3******\\",\\n  \\"PageSize\\": 50,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"TagSets\\": {\\n    \\"TagSet\\": [\\n      {\\n        \\"TagValue\\": \\"api\\",\\n        \\"InstanceCount\\": 10,\\n        \\"TagKey\\": \\"test\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询已有标签列表',
      'summary' => '查询标签列表。',
      'description' => '调用该接口时，请注意：

* 允许根据实例ID、Tagkey、Tagvalue等条件查询所有符合条件的Tags。

* 指定的条件为and关系，只有满足所有指定条件的TagSet才会被返回。

* 如果指定了Tagkey而没有指定Tagvalue，就查询所有该Tagkey关联的Tag。

* 不允许用户只指定Tagvalue而不指定Tagkey。

* 若指定了Tagkey/Tagvalue对，则精确匹配该Tag。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例所在的地域ID。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型定义，取值：

- **instance**：负载均衡实例。

- **certificate**：证书。

- **acl**：访问控制。

- **listener**：监听。

- **vservergroup**：虚拟服务器组。

- **masterslaveservergroup**：主备服务器组。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'instance',
          ),
        ),
        2 => 
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
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID。最多支持添加20个资源。

> **listener**的**ResourceId**取值为**LoadBalancerId\\_监听协议\\_Port**，其中LoadBalancerId为实例ID，port为监听端口。示例：lb\\-bp1qnnvj18yy6h****\\_http\\_80。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。最多支持添加20个资源。

> **listener**的**ResourceId**取值为**LoadBalancerId\\_监听协议\\_Port**，其中LoadBalancerId为实例ID，port为监听端口。示例：lb\\-bp1qnnvj18yy6h****\\_http\\_80。',
              'type' => 'string',
              'required' => false,
              'example' => 'lb-bp1qnnvj18yy6h****',
            ),
            'required' => false,
            'example' => 'lb-bp1qnnvj18yy6h******',
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
              'description' => '标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源的标签键。最多支持添加20个标签键。

一旦传入该值，则不允许为空字符串。最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceDept',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。最多支持添加20个标签值。一旦传入该值，不可以为空字符串。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceJoshua',
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
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DE65F6B7-7566-4802-9007-96F2494AC512',
              ),
              'TagResources' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TagResource' => 
                  array (
                    'description' => '绑定标签的资源信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '绑定标签的资源信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TagValue' => 
                        array (
                          'description' => '标签值。',
                          'type' => 'string',
                          'example' => 'FinanceJoshua',
                        ),
                        'ResourceType' => 
                        array (
                          'description' => '资源类型。',
                          'type' => 'string',
                          'example' => 'instance',
                        ),
                        'ResourceId' => 
                        array (
                          'description' => '资源ID。',
                          'type' => 'string',
                          'example' => 'lb-bp16qjewdsunr4****',
                        ),
                        'TagKey' => 
                        array (
                          'description' => '标签键。',
                          'type' => 'string',
                          'example' => 'FinanceDept',
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
            'errorCode' => 'TagTypeNotSame',
            'errorMessage' => 'The category of tags in the same request must be the same.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotExist',
            'errorMessage' => '%s.',
          ),
          2 => 
          array (
            'errorCode' => 'QueryTokenNotExist',
            'errorMessage' => 'The specified NextToken does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParam.NextToken',
            'errorMessage' => 'The specified NextToken is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParam.Scope',
            'errorMessage' => 'The specified Scope is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParam.ResourceType',
            'errorMessage' => 'The specified ResourceType is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParam.TagKey',
            'errorMessage' => 'The specified TagKey is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidParam.TagValue',
            'errorMessage' => 'The specified TagValue is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidParam.TagKeyOrValue',
            'errorMessage' => 'The specified TagKey or TagValue is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidParam.TagOwnerUid',
            'errorMessage' => 'The specified TagOwnerUid is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidParam.TagOwnerBid',
            'errorMessage' => 'The specified TagOwnerBid is invalid.',
          ),
          11 => 
          array (
            'errorCode' => 'MissingParam.Scope',
            'errorMessage' => 'The parameter Scope is required.',
          ),
          12 => 
          array (
            'errorCode' => 'MissingParam.TagOwnerUid',
            'errorMessage' => 'The parameter TagOwnerUid is required.',
          ),
          13 => 
          array (
            'errorCode' => 'MissingParam.TagOwnerBid',
            'errorMessage' => 'The parameter TagOwnerBid is required.',
          ),
          14 => 
          array (
            'errorCode' => 'InvalidParameter.RegionId',
            'errorMessage' => 'The specified RegionId does not exist.',
          ),
          15 => 
          array (
            'errorCode' => 'MissingParam.TagOrResourceId',
            'errorMessage' => 'The parameter Tag or ResourceId is required at least one.',
          ),
          16 => 
          array (
            'errorCode' => 'SizeLimitExceeded.ResourceId',
            'errorMessage' => 'The maximum size of ResourceId is exceeded.',
          ),
          17 => 
          array (
            'errorCode' => 'SizeLimitExceeded.Tag',
            'errorMessage' => 'The maximum size of Tag is exceeded.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"RequestId\\": \\"DE65F6B7-7566-4802-9007-96F2494AC512\\",\\n  \\"TagResources\\": {\\n    \\"TagResource\\": [\\n      {\\n        \\"TagValue\\": \\"FinanceJoshua\\",\\n        \\"ResourceType\\": \\"instance\\",\\n        \\"ResourceId\\": \\"lb-bp16qjewdsunr4****\\",\\n        \\"TagKey\\": \\"FinanceDept\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0a****</NextToken>\\n    <RequestId>DE65F6B7-7566-4802-9007-96F2494AC512</RequestId>\\n    <TagResources>\\n        <TagValue>FinanceJoshua</TagValue>\\n        <ResourceType>instance</ResourceType>\\n        <ResourceId>lb-bp16qjewdsunr4****</ResourceId>\\n        <TagKey>FinanceDept</TagKey>\\n    </TagResources>\\n</ListTagResourcesResponse>","errorExample":""}]',
      'title' => '查询实例已绑定的标签列表',
      'summary' => '查询实例已经绑定的标签列表。',
      'description' => '- 请求中至少指定参数**ResourceId.N**或**Tag.N**（**Tag.N.Key**与**Tag.N.Value**），以确定检索对象。

- **Tag.N**是资源的标签，由一个键值对组成。仅指定**Tag.N.Key**时，则返回该标签键关联的所有标签值。仅指定**Tag.N.Value**会报错。

- 如果您同时指定**Tag.N**和**ResourceId.N**筛选标签，则**ResourceId.N**必须满足所有输入的标签键值对。

- 如果您同时指定多个标签键值对，返回结果为同时包含被指定的多个键值对的资源。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例所在的地域ID。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型定义，取值：

- **instance**：负载均衡实例。

- **certificate**：证书。

- **acl**：访问控制。

- **listener**：监听。

- **vservergroup**：虚拟服务器组。

- **masterslaveservergroup**：主备服务器组。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'instance',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID，最多支持20个资源ID。
> **listener**的**ResourceId**取值为**LoadBalancerId\\_监听协议\\_Port**，其中LoadBalancerId为实例ID，port为监听端口。示例：lb\\-bp1snb10sbml4mqty\\_http\\_80。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID，最多支持20个资源ID。
> **listener**的**ResourceId**取值为**LoadBalancerId\\_监听协议\\_Port**，其中LoadBalancerId为实例ID，port为监听端口。示例：lb\\-bp1snb10sbml4****\\_http\\_80。',
              'type' => 'string',
              'required' => false,
              'example' => 'lb-bp16qjewdsunr41m1****',
            ),
            'required' => true,
            'example' => 'lb-bp16qjewdsunr41m1****',
            'maxItems' => 51,
          ),
        ),
        3 => 
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
              'description' => '标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源的标签键。最多支持20个标签键。一旦传入该值，则不允许为空字符串。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceDept',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。最多支持20个标签值。一旦传入该值，可以为空字符串。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceJoshua',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C46FF5A8-C5F0-4024-8262-B16B639225A0',
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
            'errorCode' => 'TagTypeNotSame',
            'errorMessage' => 'The category of tags in the same request must be the same.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotExist',
            'errorMessage' => '%s.',
          ),
          2 => 
          array (
            'errorCode' => 'DeniedForNoneTagCreator',
            'errorMessage' => '%s.',
          ),
          3 => 
          array (
            'errorCode' => 'DeniedForScopeNotEqual',
            'errorMessage' => '%s.',
          ),
          4 => 
          array (
            'errorCode' => 'QuotaLimitExceeds',
            'errorMessage' => '%s.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParam.Scope',
            'errorMessage' => 'The specified Scope is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParam.ResourceType',
            'errorMessage' => 'The specified ResourceType is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidParam.TagKey',
            'errorMessage' => 'The specified TagKey is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidParam.TagValue',
            'errorMessage' => 'The specified TagValue is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidParam.TagKeyOrValue',
            'errorMessage' => 'The specified TagKey or TagValue is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidParam.TagOwnerUid',
            'errorMessage' => 'The specified TagOwnerUid is invalid.',
          ),
          11 => 
          array (
            'errorCode' => 'InvalidParam.TagOwnerBid',
            'errorMessage' => 'The specified TagOwnerBid is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'MissingParam.TagKey',
            'errorMessage' => 'The parameter TagKey is required.',
          ),
          13 => 
          array (
            'errorCode' => 'MissingParam.Scope',
            'errorMessage' => 'The parameter Scope is required.',
          ),
          14 => 
          array (
            'errorCode' => 'MissingParam.TagOwnerUid',
            'errorMessage' => 'The parameter TagOwnerUid is required.',
          ),
          15 => 
          array (
            'errorCode' => 'MissingParam.TagOwnerBid',
            'errorMessage' => 'The parameter TagOwnerBid is required.',
          ),
          16 => 
          array (
            'errorCode' => 'InvalidParameter.RegionId',
            'errorMessage' => 'The specified RegionId does not exist.',
          ),
          17 => 
          array (
            'errorCode' => 'DeniedForOperateCustomTag',
            'errorMessage' => '%s.',
          ),
          18 => 
          array (
            'errorCode' => 'MissingParam.ResourceId',
            'errorMessage' => 'The parameter ResourceId is required.',
          ),
          19 => 
          array (
            'errorCode' => 'Duplicate.TagKey',
            'errorMessage' => 'The param TagKey has duplicate value.',
          ),
          20 => 
          array (
            'errorCode' => 'SizeLimitExceeded.ResourceId',
            'errorMessage' => 'The maximum size of ResourceId is exceeded.',
          ),
          21 => 
          array (
            'errorCode' => 'SizeLimitExceeded.Tag',
            'errorMessage' => 'The maximum size of Tag is exceeded.',
          ),
          22 => 
          array (
            'errorCode' => 'MissingParam.RegionId',
            'errorMessage' => 'The parameter RegionId is required.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C46FF5A8-C5F0-4024-8262-B16B639225A0\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\n    <RequestId>C46FF5A8-C5F0-4024-8262-B16B639225A0</RequestId>\\n</TagResourcesResponse>","errorExample":""}]',
      'title' => '给资源添加标签',
      'summary' => '为指定的资源列表统一创建并绑定标签。',
      'description' => '> 单个实例最多可绑定20条标签。绑定标签前，阿里云会校验资源已有标签数量，超过限制值会返回报错信息。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例所在的地域ID。

您可以通过调用[DescribeRegions](~~27584~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型定义，取值：

- **instance**：负载均衡实例。

- **certificate**：证书。

- **acl**：访问控制。

- **listener**：监听。

- **vservergroup**：虚拟服务器组。

- **masterslaveservergroup**：主备服务器组。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'instance',
          ),
        ),
        2 => 
        array (
          'name' => 'All',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否全部删除，只针对**TagKey.N**为空时有效。

取值：**true**或**false**。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID，最多支持20个资源ID。
> **listener**的**ResourceId**取值为**LoadBalancerId\\_监听协议\\_Port**，其中LoadBalancerId为实例ID，port为监听端口。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID，最多支持20个资源ID。
> **listener**的**ResourceId**取值为**LoadBalancerId\\_监听协议\\_Port**，其中LoadBalancerId为实例ID，port为监听端口。示例：lb\\-bp1snb10sbml4****\\_http\\_80。',
              'type' => 'string',
              'required' => false,
              'example' => 'lb-bp16qjewdsunr41m1****',
            ),
            'required' => true,
            'example' => 'lb-bp16qjewdsunr41m1****',
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
            'description' => '资源的标签键。最多支持20个标签键。一旦传入该值，则不允许为空字符串。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。
> 如果不指定**TagKey**，这个实例的所有标签将被删除。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源的标签键。最多支持20个标签键。一旦传入该值，则不允许为空字符串。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。
> 如果不指定**TagKey**，这个实例的所有标签将被删除。',
              'type' => 'string',
              'required' => false,
              'example' => 'FinanceDept',
            ),
            'required' => false,
            'example' => 'FinanceDept',
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
                'example' => 'C46FF5A8-C5F0-4024-8262-B16B******',
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
            'errorCode' => 'TagTypeNotSame',
            'errorMessage' => 'The category of tags in the same request must be the same.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotExist',
            'errorMessage' => '%s.',
          ),
          2 => 
          array (
            'errorCode' => 'DeniedForNoneTagCreator',
            'errorMessage' => '%s.',
          ),
          3 => 
          array (
            'errorCode' => 'DeniedForScopeNotEqual',
            'errorMessage' => '%s.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParam.ResourceType',
            'errorMessage' => 'The specified ResourceType is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParam.TagKey',
            'errorMessage' => 'The specified TagKey is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParam.TagValue',
            'errorMessage' => 'The specified TagValue is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidParam.TagKeyOrValue',
            'errorMessage' => 'The specified TagKey or TagValue is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidParam.TagOwnerUid',
            'errorMessage' => 'The specified TagOwnerUid is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidParam.TagOwnerBid',
            'errorMessage' => 'The specified TagOwnerBid is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'MissingParam.TagOwnerUid',
            'errorMessage' => 'The parameter TagOwnerUid is required.',
          ),
          11 => 
          array (
            'errorCode' => 'MissingParam.TagOwnerBid',
            'errorMessage' => 'The parameter TagOwnerBid is required.',
          ),
          12 => 
          array (
            'errorCode' => 'InvalidParameter.RegionId',
            'errorMessage' => 'The specified RegionId does not exist.',
          ),
          13 => 
          array (
            'errorCode' => 'MissingParam.ResourceId',
            'errorMessage' => 'The parameter ResourceId is required.',
          ),
          14 => 
          array (
            'errorCode' => 'DeniedForOperateCustomTag',
            'errorMessage' => '%s.',
          ),
          15 => 
          array (
            'errorCode' => 'Duplicate.TagKey',
            'errorMessage' => 'The param TagKey has duplicate value.',
          ),
          16 => 
          array (
            'errorCode' => 'SizeLimitExceeded.ResourceId',
            'errorMessage' => 'The maximum size of ResourceId is exceeded.',
          ),
          17 => 
          array (
            'errorCode' => 'SizeLimitExceeded.TagKey',
            'errorMessage' => 'The maximum size of TagKey is exceeded.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C46FF5A8-C5F0-4024-8262-B16B******\\"\\n}","errorExample":""},{"type":"xml","example":"<UntagResourcesResponse>\\n    <RequestId>C46FF5A8-C5F0-4024-8262-B16B639225A0</RequestId>\\n</UntagResourcesResponse>","errorExample":""}]',
      'title' => '为指定的资源列表统一解绑标签',
      'summary' => '为指定的资源列表统一解绑标签。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveTags' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例所属地域的ID。

您可以通过调用[DescribeRegions](~~27584~~)获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-bp1l5j******',
          ),
        ),
        2 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要解绑的Tag列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '[{"TagKey":"Key1","TagValue":"Value1"},{"TagKey":"Key2","TagValue":"Value2"}]',
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
                'example' => '365F4154-92F6-4AE4-92F8-7FF3******',
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
            'errorCode' => 'InvalidParameter.TagKey',
            'errorMessage' => 'The specified tag key is invalid.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF3******\\"\\n}","type":"json"}]',
      'title' => '解绑指定负载均衡实例下的标签',
      'summary' => '解绑指定负载均衡实例下的标签。',
    ),
    'DeleteAccessLogsDownloadAttribute' => 
    array (
      'summary' => '删除指定传统型负载均衡实例的访问日志。',
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
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例所在的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例绑定的标签列表，其结构是一个JSON dictionary，包含标签键和标签值。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"tagKey":"Key1","tagValue":"Value1"}]',
          ),
        ),
        2 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'lb-uf68ps3rekbljmdb0****',
          ),
        ),
        3 => 
        array (
          'name' => 'LogsDownloadAttributes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问日志转发规则。组成参数：

- **LogProject**：日志服务LogProject的名称。
- **LogStore**：日志服务LogStore的名称。
- **LoadBalancerId**：传统型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '[{"logProject":"my-project", "LogStore":"my-log-store", "LoadBalancerId":"lb-uf68ps3rekbljmdb0****"}]',
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
                'example' => '9DEC9C28-AB05-4DDF-9A78-6B08EC9C****',
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
            'errorCode' => 'Operation.NotAllowed',
            'errorMessage' => 'The AccessLogDownloadAttribute not exists.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9DEC9C28-AB05-4DDF-9A78-6B08EC9C****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteAccessLogsDownloadAttributeResponse>\\n    <RequestId>9DEC9C28-AB05-4DDF-9A78-6B08EC9C****</RequestId>\\n</DeleteAccessLogsDownloadAttributeResponse>","errorExample":""}]',
      'title' => '删除访问日志下载任务',
    ),
    'SetAccessLogsDownloadAttribute' => 
    array (
      'summary' => '为传统型负载均衡实例添加访问日志转发规则。',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~27584~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例绑定的标签列表，其结构是一个JSON dictionary，包含标签键和标签值。

一次请求中，绑定的标签列表中最多支持10个标签。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"tagKey":"Key1","tagValue":"Value1"}]',
          ),
        ),
        2 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'lb-bp1b6c719dfa08ex*****',
          ),
        ),
        3 => 
        array (
          'name' => 'LogsDownloadAttributes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问日志转发规则。组成参数：

- **LogProject**：日志服务LogProject的名称。
- **LogStore**：日志服务LogStore的名称。
- **LoadBalancerId**：传统型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '[{"logProject":"my-project", "LogStore":"my-log-store", "LoadBalancerId":"lb-uf68ps3rekbljmdb0****"}]',
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
                'example' => '9DEC9C28-AB05-4DDF-9A78-6B08EC9C****',
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
            'errorCode' => 'Operation.NotAllowed',
            'errorMessage' => 'The AccessLogDownloadAttribute already exists.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidProject.NotExist',
            'errorMessage' => 'The specified project does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'NoPermission.AliyunServiceRoleForSlbLogDelivery',
            'errorMessage' => 'You are not authorized to create the service linked role. Role Name: AliyunServiceRoleForSlbLogDelivery. Service Name: logdelivery.slb.aliyuncs.com. Please ensure the user has been granted the ram:CreateServiceLinkedRole permission',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9DEC9C28-AB05-4DDF-9A78-6B08EC9C****\\"\\n}","errorExample":""},{"type":"xml","example":"<SetAccessLogsDownloadAttributeResponse>\\n    <RequestId>9DEC9C28-AB05-4DDF-9A78-6B08EC9C****</RequestId>\\n</SetAccessLogsDownloadAttributeResponse>","errorExample":""}]',
      'title' => '修改访问日志的下载配置',
    ),
    'DescribeAccessLogsDownloadAttribute' => 
    array (
      'summary' => '查询指定传统型负载均衡实例的访问日志。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~27584~~)接口获取地域ID。  ',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例绑定的标签列表，其结构是一个JSON dictionary，包含标签键和标签值。

一次请求中，绑定的标签列表中最多支持10个标签。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"tagKey":"Key1","tagValue":"Value1"}]',
          ),
        ),
        2 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'lb-bp1b6c719dfa08ex*****',
          ),
        ),
        3 => 
        array (
          'name' => 'LogType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问日志类型。仅取值**layer7**，表示七层访问日志。',
            'type' => 'string',
            'required' => false,
            'example' => 'layer7',
            'default' => 'layer7',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列表的页码。默认值：**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页的行数。最大值：**50**。默认值：**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '10',
            'default' => '20',
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
                'description' => '分页查询时每页的行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '列表的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8B9DB03B-ED39-5DB8-9C9F-1ED5F548D61E',
              ),
              'TotalCount' => 
              array (
                'description' => '列表条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'LogsDownloadAttributes' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'LogsDownloadAttribute' => 
                  array (
                    'description' => '访问日志配置信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '访问日志配置信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'LogProject' => 
                        array (
                          'description' => '日志服务LogProject的名称。',
                          'type' => 'string',
                          'example' => 'test-log-project',
                        ),
                        'LogStore' => 
                        array (
                          'description' => '日志服务LogStore的名称。',
                          'type' => 'string',
                          'example' => 'test-log-store',
                        ),
                        'LoadBalancerId' => 
                        array (
                          'description' => '传统型负载均衡实例的ID。',
                          'type' => 'string',
                          'example' => 'lb-bp1b6c719dfa08ex*****',
                        ),
                        'Region' => 
                        array (
                          'description' => '传统型负载均衡实例所在的地域ID。 ',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'LogType' => 
                        array (
                          'description' => '访问日志类型。仅取值**layer7**，表示七层访问日志。
',
                          'type' => 'string',
                          'example' => 'layer7',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"RequestId\\": \\"8B9DB03B-ED39-5DB8-9C9F-1ED5F548D61E\\",\\n  \\"TotalCount\\": 10,\\n  \\"LogsDownloadAttributes\\": {\\n    \\"LogsDownloadAttribute\\": [\\n      {\\n        \\"LogProject\\": \\"test-log-project\\",\\n        \\"LogStore\\": \\"test-log-store\\",\\n        \\"LoadBalancerId\\": \\"lb-bp1b6c719dfa08ex*****\\",\\n        \\"Region\\": \\"cn-hangzhou\\",\\n        \\"LogType\\": \\"layer7\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAccessLogsDownloadAttributeResponse>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <RequestId>8B9DB03B-ED39-5DB8-9C9F-1ED5F548D61E</RequestId>\\n    <TotalCount>10</TotalCount>\\n    <LogsDownloadAttributes>\\n        <LogProject>test-log-project</LogProject>\\n        <LogStore>test-log-store</LogStore>\\n        <LoadBalancerId>lb-bp1b6c719dfa08ex*****</LoadBalancerId>\\n        <Region>cn-hangzhou</Region>\\n        <LogType>layer7</LogType>\\n    </LogsDownloadAttributes>\\n</DescribeAccessLogsDownloadAttributeResponse>","errorExample":""}]',
      'title' => '查询指定实例的访问日志',
    ),
    'EnableHighDefinationMonitor' => 
    array (
      'summary' => '启用当前地域的秒级监控功能。',
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
          'name' => 'Tags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日志标签。其结构是一个JSON dictionary，包含标签键和标签值。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"tagKey":"Key1","tagValue":"Value1"}]',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡的地域ID。 

您可以通过调用[DescribeRegions](~~27584~~)接口获取地域ID。  ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'LogProject',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日志服务LogProject的名称。长度为4~63个字符，支持数字、小写字母，可包含短划线（-），开头和结尾必须为数字或字母。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my-project',
          ),
        ),
        3 => 
        array (
          'name' => 'LogStore',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日志服务LogStore的名称。长度为2~64个字符，支持数字、小写字母，可包含短划线（-）和下划线（_），开头和结尾必须为数字或字母。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my-log-store',
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
              'Success' => 
              array (
                'description' => '本次调用是否成功。取值：

- **true**：成功。
- **false**：失败。',
                'type' => 'string',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2F398FF5-B349-5C01-8638-8E9A0BF1DBE6',
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
            'errorCode' => 'OperationNotAllowed.HighDefinitionMonitorEnabled',
            'errorMessage' => 'The operation is not allowed because HighDefinitionMonitor is already enabled in this region.',
          ),
          1 => 
          array (
            'errorCode' => 'UnsupportedFeature.User',
            'errorMessage' => 'The feature of HighDefinationMonitor is not supported.',
          ),
          2 => 
          array (
            'errorCode' => 'NoPermission.AliyunServiceRoleForSlbLogDelivery',
            'errorMessage' => 'You are not authorized to create the service linked role. Role Name: AliyunServiceRoleForSlbLogDelivery. Service Name: logdelivery.slb.aliyuncs.com. Please ensure the user has been granted the ram:CreateServiceLinkedRole permission',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": \\"true\\",\\n  \\"RequestId\\": \\"2F398FF5-B349-5C01-8638-8E9A0BF1DBE6\\"\\n}","errorExample":""},{"type":"xml","example":"<EnableHighDefinationMonitorResponse>\\n    <Success>true</Success>\\n    <RequestId>2F398FF5-B349-5C01-8638-8E9A0BF1DBE6</RequestId>\\n</EnableHighDefinationMonitorResponse>","errorExample":""}]',
      'title' => '开启实例的秒级监控',
    ),
    'ModifyHighDefinationMonitor' => 
    array (
      'summary' => '修改高精度秒级监控的配置信息。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~27584~~)接口获取地域ID。  ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LogProject',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改后的日志服务LogProject的名称。日志服务LogProject的名称。长度为4~63个字符，支持数字、小写字母，可包含短划线（-），开头和结尾必须为数字或字母。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my-project',
          ),
        ),
        2 => 
        array (
          'name' => 'LogStore',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改后的日志服务LogStore的名称。长度为2~64个字符，支持数字、小写字母，可包含短划线（-）和下划线（_），开头和结尾必须为数字或字母。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my-log-store',
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
              'Success' => 
              array (
                'description' => '本次调用是否成功。取值：

- **true**：成功。
- **false**：失败。',
                'type' => 'string',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8B9DB03B-ED39-5DB8-9C9F-1ED5F548D61E',
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
            'errorCode' => 'OperationNotAllowed.HighDefinitionMonitorEnabled',
            'errorMessage' => 'The operation is not allowed because HighDefinitionMonitor is already enabled in this region.',
          ),
          1 => 
          array (
            'errorCode' => 'UnsupportedFeature.User',
            'errorMessage' => 'The feature of HighDefinationMonitor is not supported.',
          ),
          2 => 
          array (
            'errorCode' => 'NoPermission.AliyunServiceRoleForSlbLogDelivery',
            'errorMessage' => 'You are not authorized to create the service linked role. Role Name: AliyunServiceRoleForSlbLogDelivery. Service Name: logdelivery.slb.aliyuncs.com. Please ensure the user has been granted the ram:CreateServiceLinkedRole permission',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.HdMonitorListenerExist',
            'errorMessage' => 'The operation is denied because there are still listeners enabling HighDefinitionMnitor.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationNotAllowed.HighDefinitionMonitorNotEnabled',
            'errorMessage' => 'The operation is not allowed because HighDefinitionMonitor is not enabled in this region.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": \\"true\\",\\n  \\"RequestId\\": \\"8B9DB03B-ED39-5DB8-9C9F-1ED5F548D61E\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyHighDefinationMonitorResponse>\\n    <Success>true</Success>\\n    <RequestId>8B9DB03B-ED39-5DB8-9C9F-1ED5F548D61E</RequestId>\\n</ModifyHighDefinationMonitorResponse>","errorExample":""}]',
      'title' => '修改秒级监控配置信息',
    ),
    'DescribeHighDefinationMonitor' => 
    array (
      'summary' => '查询指定地域的秒级监控配置信息。',
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
          'name' => 'Tags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日志标签。其结构是一个JSON dictionary，包含标签键和标签值。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"tagKey":"Key1","tagValue":"Value1"}]',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要查询秒级监控信息的地域ID。

您可以通过调用[DescribeRegions](~~27584~~)接口获取地域ID。  ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
              'LogProject' => 
              array (
                'description' => '日志服务LogProject的名称。',
                'type' => 'string',
                'example' => 'my-project',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2F398FF5-B349-5C01-8638-8E9A0BF1DBE6',
              ),
              'LogStore' => 
              array (
                'description' => '日志服务LogStore的名称。',
                'type' => 'string',
                'example' => 'my-log-store',
              ),
              'Success' => 
              array (
                'description' => '本次调用是否成功。取值：

- **true**：成功。
- **false**：失败。',
                'type' => 'string',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"LogProject\\": \\"my-project\\",\\n  \\"RequestId\\": \\"2F398FF5-B349-5C01-8638-8E9A0BF1DBE6\\",\\n  \\"LogStore\\": \\"my-log-store\\",\\n  \\"Success\\": \\"true\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeHighDefinationMonitorResponse>\\n    <LogProject>my-project</LogProject>\\n    <RequestId>2F398FF5-B349-5C01-8638-8E9A0BF1DBE6</RequestId>\\n    <LogStore>my-log-store</LogStore>\\n    <Success>true</Success>\\n</DescribeHighDefinationMonitorResponse>","errorExample":""}]',
      'title' => '查询实例业务运行监控数据',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡实例的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要修改资源组的目标资源的id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-uf6ghek7ds2btzt65****',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型定义，取值：

- **loadbalancer**：传统型负载均衡实例。

- **certificate**：证书。

- **acl**：访问控制。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
              'loadbalancer' => 'loadbalancer',
              'certificate' => 'certificate',
              'acl' => 'acl',
            ),
            'example' => 'loadbalancer',
          ),
        ),
        3 => 
        array (
          'name' => 'NewResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新资源组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rg-aek2rpsek5h****',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aek2dmxj56z****',
          ),
        ),
        5 => 
        array (
          'name' => 'access_key_id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阿里云颁发给用户的访问服务所用的密钥ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'LTAI5tPmFGUpmyWwD8gp****',
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
                'example' => '18CAE30A-79CF-544C-86DB-EB36C739642E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"18CAE30A-79CF-544C-86DB-EB36C739642E\\"\\n}","type":"json"}]',
      'title' => '修改资源组',
      'summary' => '修改云资源所属的资源组。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'slb.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'slb.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'slb.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'slb.cn-huhehaote.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'slb.cn-wulanchabu.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'slb.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'slb.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'slb.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'slb.cn-heyuan.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'slb.cn-guangzhou.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'slb.cn-chengdu.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'slb.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'slb.ap-northeast-1.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'slb.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'slb.ap-southeast-2.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'slb.ap-southeast-3.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'slb.ap-southeast-5.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'ap-southeast-6',
      'endpoint' => 'slb.ap-southeast-6.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'slb.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'slb.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'slb.eu-west-1.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'slb.eu-central-1.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'slb.ap-south-1.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'slb.me-east-1.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'slb.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'slb.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'slb.cn-beijing-finance-1.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'slb.aliyuncs.com',
    ),
  ),
);
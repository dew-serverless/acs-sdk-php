<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Alb',
    'version' => '2020-06-16',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 47949,
      'title' => '地域与可用区',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRegions',
        1 => 'DescribeZones',
      ),
    ),
    1 => 
    array (
      'id' => 47964,
      'title' => '实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateLoadBalancer',
        1 => 'GetLoadBalancerAttribute',
        2 => 'DeleteLoadBalancer',
        3 => 'UpdateLoadBalancerAttribute',
        4 => 'UpdateLoadBalancerZones',
        5 => 'UpdateLoadBalancerEdition',
        6 => 'UpdateLoadBalancerAddressTypeConfig',
        7 => 'ListLoadBalancers',
        8 => 'DisableDeletionProtection',
        9 => 'EnableDeletionProtection',
        10 => 'StartShiftLoadBalancerZones',
        11 => 'CancelShiftLoadBalancerZones',
        12 => 'EnableLoadBalancerIpv6Internet',
        13 => 'DisableLoadBalancerIpv6Internet',
        14 => 'LoadBalancerJoinSecurityGroup',
        15 => 'LoadBalancerLeaveSecurityGroup',
      ),
    ),
    2 => 
    array (
      'id' => 47993,
      'title' => '监听',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateListener',
        1 => 'GetListenerAttribute',
        2 => 'DeleteListener',
        3 => 'ListListeners',
        4 => 'StartListener',
        5 => 'StopListener',
        6 => 'UpdateListenerAttribute',
        7 => 'UpdateListenerLogConfig',
        8 => 'GetListenerHealthStatus',
      ),
    ),
    3 => 
    array (
      'id' => 47984,
      'title' => '服务器组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddServersToServerGroup',
        1 => 'CreateServerGroup',
        2 => 'DeleteServerGroup',
        3 => 'UpdateServerGroupAttribute',
        4 => 'UpdateServerGroupServersAttribute',
        5 => 'ListServerGroups',
        6 => 'ListServerGroupServers',
        7 => 'RemoveServersFromServerGroup',
        8 => 'ReplaceServersInServerGroup',
      ),
    ),
    4 => 
    array (
      'id' => 48002,
      'title' => '转发规则',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateRule',
        1 => 'CreateRules',
        2 => 'DeleteRule',
        3 => 'DeleteRules',
        4 => 'UpdateRuleAttribute',
        5 => 'UpdateRulesAttribute',
        6 => 'ListRules',
      ),
    ),
    5 => 
    array (
      'id' => 47960,
      'title' => '监听器证书',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AssociateAdditionalCertificatesWithListener',
        1 => 'DissociateAdditionalCertificatesFromListener',
        2 => 'ListListenerCertificates',
      ),
    ),
    6 => 
    array (
      'id' => 169897,
      'title' => '共享带宽包',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DetachCommonBandwidthPackageFromLoadBalancer',
        1 => 'AttachCommonBandwidthPackageToLoadBalancer',
      ),
    ),
    7 => 
    array (
      'id' => 47954,
      'title' => '访问日志',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DisableLoadBalancerAccessLog',
        1 => 'EnableLoadBalancerAccessLog',
      ),
    ),
    8 => 
    array (
      'id' => 47971,
      'title' => '健康检查',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateHealthCheckTemplate',
        1 => 'GetHealthCheckTemplateAttribute',
        2 => 'DeleteHealthCheckTemplates',
        3 => 'UpdateHealthCheckTemplateAttribute',
        4 => 'ListHealthCheckTemplates',
        5 => 'ApplyHealthCheckTemplateToServerGroup',
      ),
    ),
    9 => 
    array (
      'id' => 47977,
      'title' => '安全策略',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateSecurityPolicy',
        1 => 'DeleteSecurityPolicy',
        2 => 'UpdateSecurityPolicyAttribute',
        3 => 'ListSecurityPolicies',
        4 => 'ListSecurityPolicyRelations',
        5 => 'ListSystemSecurityPolicies',
      ),
    ),
    10 => 
    array (
      'id' => 48015,
      'title' => '访问控制',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddEntriesToAcl',
        1 => 'CreateAcl',
        2 => 'DeleteAcl',
        3 => 'UpdateAclAttribute',
        4 => 'ListAcls',
        5 => 'ListAclEntries',
        6 => 'AssociateAclsWithListener',
        7 => 'ListAclRelations',
        8 => 'DissociateAclsFromListener',
        9 => 'RemoveEntriesFromAcl',
      ),
    ),
    11 => 
    array (
      'id' => 47952,
      'title' => '资源组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'MoveResourceGroup',
      ),
    ),
    12 => 
    array (
      'id' => 48009,
      'title' => '标签',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListTagKeys',
        1 => 'ListTagResources',
        2 => 'ListTagValues',
        3 => 'TagResources',
        4 => 'UnTagResources',
      ),
    ),
    13 => 
    array (
      'id' => 47947,
      'title' => '异步任务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListAsynJobs',
      ),
    ),
    14 => 
    array (
      'id' => 181849,
      'title' => '可编程脚本',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UpdateAScripts',
        1 => 'CreateAScripts',
        2 => 'DeleteAScripts',
        3 => 'ListAScripts',
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
    'DescribeRegions' => 
    array (
      'summary' => '查询ALB可用地域。',
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
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '语言',
            'description' => '支持的语言。取值：

- **zh-CN**（默认）：中文

- **en-US**：英文

- **ja**：日文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh-CN',
            'default' => 'zh-CN',
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
            'description' => '返回数据的结构。',
            'type' => 'object',
            'properties' => 
            array (
              'Regions' => 
              array (
                'title' => 'Region列表',
                'description' => '地域列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '地域信息结构。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'LocalName' => 
                    array (
                      'title' => '名称',
                      'description' => '地域名称。',
                      'type' => 'string',
                      'example' => '华东1（杭州）',
                    ),
                    'RegionEndpoint' => 
                    array (
                      'title' => 'endpoint',
                      'description' => '地域服务的Endpoint地址。',
                      'type' => 'string',
                      'example' => 'alb.cn-hangzhou.aliyuncs.com',
                    ),
                    'RegionId' => 
                    array (
                      'title' => 'RegionId',
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Regions\\": [\\n    {\\n      \\"LocalName\\": \\"华东1（杭州）\\",\\n      \\"RegionEndpoint\\": \\"alb.cn-hangzhou.aliyuncs.com\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <Regions>\\n        <LocalName>华东1（杭州）</LocalName>\\n        <RegionEndpoint>alb.cn-hangzhou.aliyuncs.com</RegionEndpoint>\\n        <RegionId>cn-hangzhou</RegionId>\\n    </Regions>\\n    <RequestId>593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3</RequestId>\\n</DescribeRegionsResponse>","errorExample":""}]',
      'title' => '查询地域',
    ),
    'DescribeZones' => 
    array (
      'summary' => '查询ALB一个地域下的可用区列表。',
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
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '支持的语言。取值：

- **zh-CN**（默认）：中文

- **en-US**：英文

- **ja**：日文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh-CN',
            'default' => 'zh-CN',
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
            'description' => '返回数据的结构。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3',
              ),
              'Zones' => 
              array (
                'title' => '可用区列表',
                'description' => '可用区列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '可用区信息结构。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'LocalName' => 
                    array (
                      'title' => '可用区名称',
                      'description' => '可用区名称。',
                      'type' => 'string',
                      'example' => '杭州 可用区G',
                    ),
                    'ZoneId' => 
                    array (
                      'title' => '可用区id',
                      'description' => '可用区ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-g',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3\\",\\n  \\"Zones\\": [\\n    {\\n      \\"LocalName\\": \\"杭州 可用区G\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-g\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeZonesResponse>\\n    <RequestId>593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3</RequestId>\\n    <Zones>\\n        <LocalName>华东 1 可用区G</LocalName>\\n        <ZoneId>cn-hangzhou-g</ZoneId>\\n    </Zones>\\n</DescribeZonesResponse>","errorExample":""}]',
      'title' => '查询可用区',
    ),
    'CreateLoadBalancer' => 
    array (
      'summary' => '在指定地域创建应用型负载均衡实例。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B3FF3898',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会创建应用型负载均衡实例。检查项包括是否填写了必需参数、请求格式和业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '负载均衡实例的专有网络ID。',
            'description' => '应用型负载均衡实例的专有网络ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vpc-bp1b49rqrybk45nio****',
          ),
        ),
        3 => 
        array (
          'name' => 'AddressType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '负载均衡的地址类型',
            'description' => '应用型负载均衡的地址类型。取值：

- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。

- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。',
            'type' => 'string',
            'required' => true,
            'example' => 'Internet',
          ),
        ),
        4 => 
        array (
          'name' => 'LoadBalancerName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '名称',
            'description' => '应用型负载均衡实例名称。

长度为2~128个英文或中文字符，必须以字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'alb1',
          ),
        ),
        5 => 
        array (
          'name' => 'DeletionProtectionEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否开启删除保护',
            'description' => '是否开启删除保护。取值：

- **true**：开启。
- **false**（默认值）：关闭。
',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'ModificationProtectionConfig',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '负载均衡修改保护相关信息',
            'description' => '修改保护配置。',
            'type' => 'object',
            'properties' => 
            array (
              'Reason' => 
              array (
                'title' => '设置修改保护状态的原因',
                'description' => '输入开启修改保护的原因。长度为2~128个英文或中文字符，必须以字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。

>仅在`Status`为**ConsoleProtection**时该参数有效且合法。',
                'type' => 'string',
                'required' => false,
                'example' => '托管实例',
              ),
              'Status' => 
              array (
                'title' => '负载均衡修改保护状态',
                'description' => '修改应用型负载均衡实例的修改保护状态。取值：

- **NonProtection**：不保护，表示不允许传入ModificationProtectionReason。如果配置了ModificationProtectionReason，则清空其配置信息。

- **ConsoleProtection**：控制台修改保护，此时允许传入ModificationProtectionReason。

> 当取值为**ConsoleProtection**，即开启修改保护后，用户不能通过负载均衡控制台修改实例配置，但可以通过调用API修改实例配置。',
                'type' => 'string',
                'required' => false,
                'example' => 'ConsoleProtection',
              ),
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'ZoneMappings',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '可用区及交换机映射列表',
            'description' => '可用区及交换机映射列表，至少指定2个可用区，最多支持添加10个可用区。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '可用区及交换机映射列表，至少指定2个可用区，最多支持添加10个可用区。',
              'type' => 'object',
              'properties' => 
              array (
                'VSwitchId' => 
                array (
                  'title' => '交换机标识',
                  'description' => '可用区对应的交换机，每个可用区只能使用一台交换机和一个子网。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'vsw-sersdf****',
                ),
                'ZoneId' => 
                array (
                  'title' => '可用区',
                  'description' => '可用区ID。您可以通过调用[DescribeZones](~~36064~~)接口获取可用区ID对应的可用区的信息。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'cn-hangzhou-a',
                ),
                'AllocationId' => 
                array (
                  'title' => '弹性公网IP实例ID',
                  'description' => '公网实例绑定的EIP实例ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'eip-bp1aedxso6u80u0qf****',
                ),
                'IntranetAddress' => 
                array (
                  'description' => 'IPv4私网地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '192.168.10.1',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 10,
            'minItems' => 1,
          ),
        ),
        8 => 
        array (
          'name' => 'AddressAllocatedMode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地址模式',
            'description' => '地址模式。取值 ：

- **Fixed**：固定IP模式，表示使用固定的IP地址。

- **Dynamic**（默认）：动态IP模式，表示每个可用区动态分配IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'Dynamic',
            'default' => 'Dynamic',
          ),
        ),
        9 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源组',
            'description' => '企业资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        10 => 
        array (
          'name' => 'LoadBalancerEdition',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '负载均衡的版本',
            'description' => '应用型负载均衡的版本，不同版本有不同功能限制和计费策略。取值：

- **Basic**：基础版。

- **Standard**：标准版。

- **StandardWithWaf**：WAF增强版。

',
            'type' => 'string',
            'required' => true,
            'example' => 'Standard',
          ),
        ),
        11 => 
        array (
          'name' => 'LoadBalancerBillingConfig',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '计费相关配置信息',
            'description' => '应用型负载均衡实例计费配置。',
            'type' => 'object',
            'properties' => 
            array (
              'PayType' => 
              array (
                'title' => '实例的计费类型',
                'description' => '实例的计费类型。

仅取值**PostPay**：表示按量计费。',
                'type' => 'string',
                'required' => true,
                'example' => 'PostPay',
                'default' => 'PostPay',
              ),
              'BandwidthPackageId' => 
              array (
                'title' => '共享带宽实例ID',
                'description' => '公网类型实例关联的共享带宽包ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'cbwp-bp1vevu8h3ieh****',
              ),
            ),
            'required' => true,
          ),
        ),
        12 => 
        array (
          'name' => 'AddressIpVersion',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '协议版本',
            'description' => '协议版本。取值：

- **IPv4**：IPv4类型。
- **DualStack**：双栈类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'IPv4',
          ),
        ),
        13 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签结构。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'env',
                ),
                'Value' => 
                array (
                  'description' => '最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'product',
                ),
              ),
              'required' => false,
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
            'description' => '创建负载均衡实例。',
            'type' => 'object',
            'properties' => 
            array (
              'LoadBalancerId' => 
              array (
                'title' => '负载均衡实例标识',
                'description' => '应用型负载均衡实例ID。',
                'type' => 'string',
                'example' => 'alb-o9ulmq5hgn68jk****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
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
            'errorCode' => 'ResourceNotEnough.VSwitchIp',
            'errorMessage' => 'The specified resource %s is not enough.',
          ),
          1 => 
          array (
            'errorCode' => 'QuotaExceeded.LoadBalancersNum',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          2 => 
          array (
            'errorCode' => 'Mismatch.ZoneIdAndVSwitchId',
            'errorMessage' => 'The %s and %s are mismatched.',
          ),
          3 => 
          array (
            'errorCode' => 'DuplicatedParam.ZoneId',
            'errorMessage' => 'The param of ZoneId is duplicated.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenyed.ServiceLinkedRoleNotExist',
            'errorMessage' => 'The service linked role AliyunServiceRoleForAlb does not exist.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.VSwitch',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"LoadBalancerId\\": \\"alb-o9ulmq5hgn68jk****\\",\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateLoadBalancerResponse>\\n    <LoadBalancerId>alb-o9ulmq5hgn68jk****</LoadBalancerId>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</CreateLoadBalancerResponse>","errorExample":""}]',
      'title' => '创建应用型负载均衡实例',
      'description' => '**CreateLoadBalancer**接口属于异步接口，即系统返回一个实例ID，但该应用型负载均衡实例尚未创建成功，系统后台的创建任务仍在进行。您可以调用[GetLoadBalancerAttribute](~~214362~~)查询应用型负载均衡实例的创建状态：
- 当应用型负载均衡实例处于**Provisioning**状态时，表示应用型负载均衡实例正在创建中。
- 当应用型负载均衡实例处于**Active**状态时，表示应用型负载均衡实例创建成功。',
    ),
    'GetLoadBalancerAttribute' => 
    array (
      'summary' => '查询指定负载均衡实例的详细信息。',
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
        'abilityTreeCode' => '200',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslbKS6M4D',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例标识',
            'description' => '应用型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'alb-o9ulmq5hgn68jk****',
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
            'description' => '应用型负载均衡实例详细配置信息。',
            'type' => 'object',
            'properties' => 
            array (
              'AccessLogConfig' => 
              array (
                'title' => '访问日志属性',
                'description' => '访问日志配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'LogProject' => 
                  array (
                    'title' => '访问日志投递的logProject',
                    'description' => '日志项目。',
                    'type' => 'string',
                    'example' => 'sls-setter',
                  ),
                  'LogStore' => 
                  array (
                    'title' => '删除保护开启时间',
                    'description' => '日志存储。

',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                ),
              ),
              'AddressAllocatedMode' => 
              array (
                'title' => '地址分配方式',
                'description' => '地址模式。取值 ：

- **Fixed**：固定IP模式，表示使用固定的IP地址。

- **Dynamic**：动态IP模式，表示在每个可用区动态分配IP地址。',
                'type' => 'string',
                'example' => 'Dynamic',
              ),
              'AddressType' => 
              array (
                'title' => '地址类型',
                'description' => '应用型负载均衡实例的网络地址类型。取值：

- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。

- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。

',
                'type' => 'string',
                'example' => 'Intranet',
              ),
              'BandwidthPackageId' => 
              array (
                'title' => '带宽包ID',
                'description' => '公网类型实例关联的共享带宽包ID。',
                'type' => 'string',
                'example' => 'cbwp-bp1vevu8h3ieh****',
              ),
              'CreateTime' => 
              array (
                'title' => '资源创建时间',
                'description' => '资源创建时间，使用格林威治时间，格式为`yyyy-MM-ddTHH:mm:ssZ`。',
                'type' => 'string',
                'example' => '2022-07-02T02:49:05Z',
              ),
              'DNSName' => 
              array (
                'title' => 'DNS域名',
                'description' => 'DNS域名。',
                'type' => 'string',
                'example' => 'alb-95qnr2itwu9orb****.cn-hangzhou.alb.aliyuncs.com',
              ),
              'DeletionProtectionConfig' => 
              array (
                'title' => '负载均衡删除保护相关信息',
                'description' => '删除保护配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'Enabled' => 
                  array (
                    'title' => '删除保护状态',
                    'description' => '删除保护状态，取值：

- **true**：开启状态。

- **false**：关闭状态。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'EnabledTime' => 
                  array (
                    'title' => '删除保护开启时间',
                    'description' => '删除保护开启时间，使用格林威治时间，格式为`yyyy-MM-ddTHH:mm:ssZ`。',
                    'type' => 'string',
                    'example' => '2022-08-02T02:49:05Z',
                  ),
                ),
              ),
              'LoadBalancerBillingConfig' => 
              array (
                'title' => '计费相关属性',
                'description' => '应用型负载均衡实例计费配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'PayType' => 
                  array (
                    'title' => '实例的计费类型',
                    'description' => '计费类型。

取值： **PostPay**表示按量计费。',
                    'type' => 'string',
                    'example' => 'PostPay',
                    'default' => 'PostPay',
                  ),
                ),
              ),
              'LoadBalancerBussinessStatus' => 
              array (
                'title' => '实例业务状态',
                'description' => '应用型负载均衡的业务状态。取值：

- **Abnormal**：异常状态。

- **Normal**：正常状态。',
                'type' => 'string',
                'example' => 'Normal',
              ),
              'LoadBalancerEdition' => 
              array (
                'title' => '负载均衡的版本',
                'description' => '应用型负载均衡的版本，不同版本有不同功能限制和计费策略。取值：

- **Basic**：基础版。

- **Standard**：标准版。

- **StandardWithWaf**：WAF增强版。',
                'type' => 'string',
                'example' => 'Standard',
              ),
              'LoadBalancerId' => 
              array (
                'title' => '负载均衡标识',
                'description' => '应用型负载均衡实例ID。',
                'type' => 'string',
                'example' => 'alb-o9ulmq5hgn68jk****',
              ),
              'LoadBalancerName' => 
              array (
                'title' => '实例名称',
                'description' => '实例名称。

长度为2~128个英文或中文字符，必须以字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                'type' => 'string',
                'example' => 'alb1',
              ),
              'LoadBalancerOperationLocks' => 
              array (
                'title' => '锁定原因',
                'description' => '应用型负载均衡操作锁配置。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '应用型负载均衡操作锁配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'LockReason' => 
                    array (
                      'title' => '锁定原因',
                      'description' => '锁定的原因。在**LoadBalancerBussinessStatus**为**异常**时有效。',
                      'type' => 'string',
                      'example' => '欠费',
                    ),
                    'LockType' => 
                    array (
                      'title' => '锁定类型',
                      'description' => '锁定的类型。取值 ：

- **SecurityLocked**：安全锁定。

- **RelatedResourceLocked**：关联锁定。

- **FinancialLocked**：欠费锁定。

- **ResidualLocked**：残留锁定。',
                      'type' => 'string',
                      'example' => 'FinancialLocked',
                    ),
                  ),
                ),
              ),
              'LoadBalancerStatus' => 
              array (
                'title' => '实例状态',
                'description' => '应用型负载均衡实例状态。取值：

- **Inactive**: 已停止，表示实例监听不会再转发流量。

- **Active**: 运行中。

- **Provisioning**：创建中。

- **Configuring**：变配中。

- **CreateFailed**：创建失败，此时不会产生费用，实例只能被删除。',
                'type' => 'string',
                'example' => 'Active',
              ),
              'ModificationProtectionConfig' => 
              array (
                'title' => '负载均衡修改保护相关信息',
                'description' => '修改保护配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'Reason' => 
                  array (
                    'title' => '设置修改保护状态的原因',
                    'description' => '输入开启修改保护的原因。长度为2~128个英文或中文字符，必须以大小字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。

仅在**ModificationProtectionStatus**为**ConsoleProtection**有效且合法。',
                    'type' => 'string',
                    'example' => '托管实例',
                  ),
                  'Status' => 
                  array (
                    'title' => '负载均衡修改保护状态',
                    'description' => '应用型负载均衡修改保护状态。取值：

- **NonProtection**：不保护，表示不允许传入ModificationProtectionReason。如果配置了ModificationProtectionReason，则清空其配置信息。

- **ConsoleProtection**：控制台修改保护，此时允许传入ModificationProtectionReason。

> 当取值为**ConsoleProtection**，即开启修改保护后，用户不能通过负载均衡控制台修改实例配置，但可以通过调用API修改实例配置。
',
                    'type' => 'string',
                    'example' => 'ConsoleProtection',
                  ),
                ),
              ),
              'RegionId' => 
              array (
                'title' => '地域',
                'description' => '应用型负载均衡实例的地域ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF34B540710',
              ),
              'ResourceGroupId' => 
              array (
                'title' => '企业资源组ID',
                'description' => '企业资源组ID。',
                'type' => 'string',
                'example' => 'rg-atstuj3rtop****',
              ),
              'Tags' => 
              array (
                'title' => '标签列表',
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
                      'title' => '实例的标签键',
                      'description' => '实例的标签键。

最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                      'type' => 'string',
                      'example' => 'FinanceDept',
                    ),
                    'Value' => 
                    array (
                      'title' => '实例的标签值',
                      'description' => '实例的标签值。

最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                      'type' => 'string',
                      'example' => 'FinanceJoshua',
                    ),
                  ),
                ),
              ),
              'VpcId' => 
              array (
                'title' => 'Vpc网络ID',
                'description' => '实例的专有网络ID。',
                'type' => 'string',
                'example' => 'vpc-bp1b49rqrybk45nio****',
              ),
              'ZoneMappings' => 
              array (
                'title' => '负载均衡的可用区资源',
                'description' => '可用区及交换机映射列表，至少指定两个可用区。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '可用区及交换机映射列表，至少指定两个可用区。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'LoadBalancerAddresses' => 
                    array (
                      'title' => '固定VIP模式下，负载均衡在此可用区中的地址列表',
                      'description' => '实例地址。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '实例地址。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Address' => 
                          array (
                            'title' => 'IP地址',
                            'description' => '标识IPv4类型的IP地址。

**AddressIPVersion**为**IPv4**和**DualStack**均生效，公网或私网IP地址由**AddressType**决定。',
                            'type' => 'string',
                            'example' => '192.168.10.1',
                          ),
                          'Ipv6Address' => 
                          array (
                            'title' => 'Ipv6地址',
                            'description' => '标识IPv6类型的IP地址。

仅在**AddressIPVersion**为**DualStack**时有效，公网或私网IP地址由**Ipv6AddressType**决定。',
                            'type' => 'string',
                            'example' => '2408:XXXX:39d:eb00::/56',
                          ),
                          'IntranetAddress' => 
                          array (
                            'title' => '私网地址',
                            'description' => 'IPv4私网地址。',
                            'type' => 'string',
                            'example' => '10.0.1.181',
                          ),
                          'AllocationId' => 
                          array (
                            'description' => '弹性公网IP标识。',
                            'type' => 'string',
                            'example' => 'eip-uf6wm****1zj9',
                          ),
                          'EipType' => 
                          array (
                            'description' => '公网EIP的类型。取值：

- **Common**：弹性公网IP，简称EIP。
- **Anycast**：任播弹性公网IP，简称Anycast EIP。

> ALB支持绑定Anycast EIP的地域，请参见[使用限制](~~460727~~)。',
                            'type' => 'string',
                            'example' => 'Common',
                          ),
                        ),
                      ),
                    ),
                    'VSwitchId' => 
                    array (
                      'title' => '交换机标识',
                      'description' => '可用区对应的交换机，每个可用区只能使用一台交换机和一个子网。',
                      'type' => 'string',
                      'example' => 'vsw-bp12mw1f8k3jgy****',
                    ),
                    'ZoneId' => 
                    array (
                      'title' => '可用区标识',
                      'description' => '应用型负载均衡实例的可用区ID。

您可以通过调用[DescribeZones](~~189196~~)接口获取可用区ID对应的可用区的信息。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-a',
                    ),
                  ),
                ),
              ),
              'AddressIpVersion' => 
              array (
                'title' => '协议版本',
                'description' => '协议版本。取值：

- **IPv4**：IPv4类型
- **DualStack**：双栈类型',
                'type' => 'string',
                'example' => 'DualStack',
              ),
              'Ipv6AddressType' => 
              array (
                'title' => 'IPV6地址类型',
                'description' => '应用型负载均衡IPv6的网络地址类型。取值：

- **Internet**：公网。负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。
- **Intranet**：私网。负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。',
                'type' => 'string',
                'example' => 'Intranet',
              ),
              'SecurityGroupIds' => 
              array (
                'description' => '应用型负载均衡实例绑定的安全组ID集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '应用型负载均衡实例绑定的安全组ID。',
                  'type' => 'string',
                  'example' => 'sg-uf63j385dzwlm6cy****',
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
            'errorCode' => 'Forbidden.LoadBalancer',
            'errorMessage' => 'Authentication has failed for LoadBalancer.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.LoadBalancer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AccessLogConfig\\": {\\n    \\"LogProject\\": \\"sls-setter\\",\\n    \\"LogStore\\": \\"test\\"\\n  },\\n  \\"AddressAllocatedMode\\": \\"Dynamic\\",\\n  \\"AddressType\\": \\"Intranet\\",\\n  \\"BandwidthPackageId\\": \\"cbwp-bp1vevu8h3ieh****\\",\\n  \\"CreateTime\\": \\"2022-07-02T02:49:05Z\\",\\n  \\"DNSName\\": \\"alb-95qnr2itwu9orb****.cn-hangzhou.alb.aliyuncs.com\\",\\n  \\"DeletionProtectionConfig\\": {\\n    \\"Enabled\\": true,\\n    \\"EnabledTime\\": \\"2022-08-02T02:49:05Z\\"\\n  },\\n  \\"LoadBalancerBillingConfig\\": {\\n    \\"PayType\\": \\"PostPay\\"\\n  },\\n  \\"LoadBalancerBussinessStatus\\": \\"Normal\\",\\n  \\"LoadBalancerEdition\\": \\"Standard\\",\\n  \\"LoadBalancerId\\": \\"alb-o9ulmq5hgn68jk****\\",\\n  \\"LoadBalancerName\\": \\"alb1\\",\\n  \\"LoadBalancerOperationLocks\\": [\\n    {\\n      \\"LockReason\\": \\"欠费\\",\\n      \\"LockType\\": \\"FinancialLocked\\"\\n    }\\n  ],\\n  \\"LoadBalancerStatus\\": \\"Active\\",\\n  \\"ModificationProtectionConfig\\": {\\n    \\"Reason\\": \\"托管实例\\",\\n    \\"Status\\": \\"ConsoleProtection\\"\\n  },\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\",\\n  \\"ResourceGroupId\\": \\"rg-atstuj3rtop****\\",\\n  \\"Tags\\": [\\n    {\\n      \\"Key\\": \\"FinanceDept\\",\\n      \\"Value\\": \\"FinanceJoshua\\"\\n    }\\n  ],\\n  \\"VpcId\\": \\"vpc-bp1b49rqrybk45nio****\\",\\n  \\"ZoneMappings\\": [\\n    {\\n      \\"LoadBalancerAddresses\\": [\\n        {\\n          \\"Address\\": \\"192.168.10.1\\",\\n          \\"Ipv6Address\\": \\"2408:XXXX:39d:eb00::/56\\",\\n          \\"IntranetAddress\\": \\"10.0.1.181\\",\\n          \\"AllocationId\\": \\"eip-uf6wm****1zj9\\",\\n          \\"EipType\\": \\"Common\\"\\n        }\\n      ],\\n      \\"VSwitchId\\": \\"vsw-bp12mw1f8k3jgy****\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-a\\"\\n    }\\n  ],\\n  \\"AddressIpVersion\\": \\"DualStack\\",\\n  \\"Ipv6AddressType\\": \\"Intranet\\",\\n  \\"SecurityGroupIds\\": [\\n    \\"sg-uf63j385dzwlm6cy****\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetLoadBalancerAttributeResponse>\\n    <AccessLogConfig>\\n        <LogProject>sls-setter</LogProject>\\n        <LogStore>test</LogStore>\\n    </AccessLogConfig>\\n    <AddressAllocatedMode>Dynamic</AddressAllocatedMode>\\n    <AddressType>Intranet</AddressType>\\n    <BandwidthPackageId>cbwp-bp1vevu8h3ieh****</BandwidthPackageId>\\n    <CreateTime>2022-07-02T02:49:05Z</CreateTime>\\n    <DNSName>alb-95qnr2itwu9orb****.cn-hangzhou.alb.aliyuncs.com</DNSName>\\n    <DeletionProtectionConfig>\\n        <Enabled>true</Enabled>\\n        <EnabledTime>2022-08-02T02:49:05Z</EnabledTime>\\n    </DeletionProtectionConfig>\\n    <LoadBalancerBillingConfig>\\n        <PayType>PostPay</PayType>\\n    </LoadBalancerBillingConfig>\\n    <LoadBalancerBussinessStatus>Normal</LoadBalancerBussinessStatus>\\n    <LoadBalancerEdition>Standard</LoadBalancerEdition>\\n    <LoadBalancerId>alb-o9ulmq5hgn68jk****</LoadBalancerId>\\n    <LoadBalancerName>alb1</LoadBalancerName>\\n    <LoadBalancerOperationLocks>\\n        <LockReason>欠费</LockReason>\\n        <LockType>FinancialLocked</LockType>\\n    </LoadBalancerOperationLocks>\\n    <LoadBalancerStatus>Active</LoadBalancerStatus>\\n    <ModificationProtectionConfig>\\n        <Reason>托管实例</Reason>\\n        <Status>ConsoleProtection</Status>\\n    </ModificationProtectionConfig>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <ResourceGroupId>rg-atstuj3rtop****</ResourceGroupId>\\n    <Tags>\\n        <Key>FinanceDept</Key>\\n        <Value>FinanceJoshua</Value>\\n    </Tags>\\n    <VpcId>vpc-bp1b49rqrybk45nio****</VpcId>\\n    <ZoneMappings>\\n        <LoadBalancerAddresses>\\n            <Address>192.168.10.1</Address>\\n            <Ipv6Address>2408:XXXX:39d:eb00::/56</Ipv6Address>\\n        </LoadBalancerAddresses>\\n        <VSwitchId>vsw-bp12mw1f8k3jgy****</VSwitchId>\\n        <ZoneId>cn-hangzhou-a</ZoneId>\\n    </ZoneMappings>\\n    <AddressIpVersion>DualStack</AddressIpVersion>\\n    <Ipv6AddressType>Intranet</Ipv6AddressType>\\n</GetLoadBalancerAttributeResponse>","errorExample":""}]',
      'title' => '查询负载均衡实例的详细信息',
    ),
    'DeleteLoadBalancer' => 
    array (
      'summary' => '删除指定的负载均衡实例。',
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
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例id',
            'description' => '应用型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'alb-o9ulmq5hgn68jk****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B3FF3898',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会删除应用型负载均衡实例。检查项包括是否填写了必需参数、请求格式和业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回`HTTP 2xx`状态码并直接进行操作。',
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
            'description' => '删除应用型负载均衡实例。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
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
            'errorCode' => 'IncorrectStatus.LoadBalancer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.LoadBalancer',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.DeletionProtectionEnabled',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.LoadBalancer',
            'errorMessage' => 'Authentication has failed for LoadBalancer.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.LoadBalancer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteLoadBalancerResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</DeleteLoadBalancerResponse>","errorExample":""}]',
      'title' => '删除负载均衡实例',
      'description' => '**DeleteLoadBalancer**接口属于异步接口，即系统返回一个请求ID，但该应用型负载均衡实例尚未删除成功，系统后台的删除任务仍在进行。您可以调用[GetLoadBalancerAttribute](~~214362~~)查询应用型负载均衡实例的删除状态：
- 当应用型负载均衡实例处于**Deleting**状态时，表示应用型负载均衡实例正在删除中。
- 当查询不到指定的应用型负载均衡实例时，表示应用型负载均衡实例删除成功。',
    ),
    'UpdateLoadBalancerAttribute' => 
    array (
      'summary' => '更新负载均衡实例属性，如名称、修改保护等。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B3FF3898',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会修改应用型负载均衡实例的属性。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回`HTTP_2xx`状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例id',
            'description' => '应用型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'alb-o9ulmq5hgn68jk****',
          ),
        ),
        3 => 
        array (
          'name' => 'LoadBalancerName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '名称',
            'description' => '应用型负载均衡实例的名称，长度为2~128个英文或中文字符，必须以大小写字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'alb-instance-test',
          ),
        ),
        4 => 
        array (
          'name' => 'ModificationProtectionConfig',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '负载均衡修改保护相关信息',
            'description' => '修改保护配置。',
            'type' => 'object',
            'properties' => 
            array (
              'Reason' => 
              array (
                'title' => '设置修改保护状态的原因',
                'description' => '长度为2~128个英文或中文字符，必须以大小写字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。

仅在**ModificationProtectionStatus**为**ConsoleProtection**有效且合法。',
                'type' => 'string',
                'required' => false,
                'example' => '托管实例',
              ),
              'Status' => 
              array (
                'title' => '负载均衡修改保护状态',
                'description' => '应用型负载均衡修改保护状态。取值：

- **NonProtection**：不保护，表示不允许传入**ModificationProtectionReason**。如果配置了**ModificationProtectionReason**，则清空其配置信息。

- **ConsoleProtection**：控制台修改保护，此时允许传入**ModificationProtectionReason**。

> 当取值为**ConsoleProtection**，即开启修改保护后，用户不能通过负载均衡控制台修改实例配置，但可以通过调用API修改实例配置。',
                'type' => 'string',
                'required' => false,
                'example' => 'ConsoleProtection',
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
            'title' => 'Schema of Response',
            'description' => '更新负责均衡实例属性。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务id',
                'description' => '同步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
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
            'errorCode' => 'IncorrectStatus.LoadBalancer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.LoadBalancer',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.LoadBalancer',
            'errorMessage' => 'Authentication is failed for %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.LoadBalancer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateLoadBalancerAttributeResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</UpdateLoadBalancerAttributeResponse>","errorExample":""}]',
      'title' => '更新负载均衡实例属性',
      'description' => '**UpdateLoadBalancerAttribute**接口属于异步接口，即系统返回一个请求ID，但该应用型负载均衡实例属性尚未修改成功，系统后台的修改任务仍在进行。您可以调用[GetLoadBalancerAttribute](~~214362~~)查询应用型负载均衡实例属性的修改状态：
- 当应用型负载均衡实例属性处于**Configuring**状态时，表示应用型负载均衡实例属性正在修改中。
- 当应用型负载均衡实例属性处于**Active**状态时，表示应用型负载均衡实例属性修改成功。',
    ),
    'UpdateLoadBalancerZones' => 
    array (
      'summary' => '修改应用型负载均衡实例可用区属性。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B3FF3898',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会修改应用型负载均衡实例可用区属性。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回`HTTP_2xx`状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例id',
            'description' => '应用型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'alb-o9ulmq5hgn68jk****',
          ),
        ),
        3 => 
        array (
          'name' => 'ZoneMappings',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '可用区及交换机映射列表',
            'description' => '可用区及交换机映射列表，至少指定两个可用区。如果指定，则会替换之前的可用区配置。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '可用区及交换机映射结构。至少指定两个可用区。如果指定，则会替换之前的可用区配置。',
              'type' => 'object',
              'properties' => 
              array (
                'VSwitchId' => 
                array (
                  'title' => '交换机标识',
                  'description' => '可用区对应的交换机，每个可用区默认使用一台交换机和一个子网。最多支持添加10个可用区。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'vsw-bp1rmcrwg3erh1fh8****',
                ),
                'ZoneId' => 
                array (
                  'title' => '可用区',
                  'description' => '可用区名称，通过调用[DescribeZones](~~189196~~)接口获得。最多支持添加10个可用区。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'cn-hangzhou-a',
                ),
                'IntranetAddress' => 
                array (
                  'description' => 'IPv4私网地址。至少需要添加2个可用区，最多支持添加10个可用区。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '192.168.10.1',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 10,
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
            'description' => '修改可用区属性。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
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
            'errorCode' => 'IncorrectStatus.LoadBalancer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.LoadBalancer',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
          2 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.Eip',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.ZoneVSwitchChanged',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.ZoneMappingsNotChanged',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          5 => 
          array (
            'errorCode' => 'ResourceNotEnough.VSwitchIp',
            'errorMessage' => 'The specified resource %s is not enough.',
          ),
          6 => 
          array (
            'errorCode' => 'Mismatch.ZoneIdAndVSwitchId',
            'errorMessage' => 'The %s and %s are mismatched.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.LoadBalancer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.VSwitch',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateLoadBalancerZonesResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</UpdateLoadBalancerZonesResponse>","errorExample":""}]',
      'title' => '更新负载均衡可用区',
      'description' => '**UpdateLoadBalancerZones**接口属于异步接口，即系统返回一个请求ID，但该应用型负载均衡实例可用区属性尚未修改成功，系统后台的修改任务仍在进行。您可以调用[GetLoadBalancerAttribute](~~214362~~)查询应用型负载均衡实例可用区属性的修改状态：
- 当应用型负载均衡实例处于**Configuring**状态时，表示应用型负载均衡实例可用区属性正在修改中。
- 当应用型负载均衡实例处于**Active**状态时，表示应用型负载均衡实例可用区属性修改成功。

> 调用UpdateLoadBalancerZones接口可能会产生费用。',
    ),
    'UpdateLoadBalancerEdition' => 
    array (
      'summary' => '变更当前负载均衡版本。',
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
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B3FF3898',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会修改应用型负载均衡版本。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回`HTTP_2xx`状态码并直接进行修改。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例Id',
            'description' => '应用型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'alb-bp1b6c719dfa08ex****',
          ),
        ),
        3 => 
        array (
          'name' => 'LoadBalancerEdition',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例版本',
            'description' => '应用型负载均衡的版本，不同版本有不同功能限制和计费策略。

- **Basic**：基础版。

- **Standard**：标准版。

- **StandardWithWaf**：WAF增强版。',
            'type' => 'string',
            'required' => true,
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
            'title' => 'Schema of Response',
            'description' => '修改负载均衡版本。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3',
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
            'errorCode' => 'IncorrectStatus.LoadBalancer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.LoadBalancer',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.Downgrade',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.EditionNotChanged',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.LoadBalancer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateLoadBalancerEditionResponse>\\n    <RequestId>593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3</RequestId>\\n</UpdateLoadBalancerEditionResponse>","errorExample":""}]',
      'title' => '变更负载均衡版本',
      'description' => '- ALB实例仅支持基础版升级为标准版和WAF增强版，WAF增强版变更为标准版，不支持标准版和WAF增强版变更为基础版。具体操作，请参见[升级实例功能版本](~~214654~~)。
- **UpdateLoadBalancerEdition**接口属于异步接口，即系统返回一个请求ID，但该应用型负载均衡版本尚未修改成功，系统后台的修改任务仍在进行。您可以调用[GetLoadBalancerAttribute](~~214362~~)查询应用型负载均衡版本的修改状态：
    - 当应用型负载均衡版本处于**Configuring**状态时，表示应用型负载均衡版本正在修改中。
    - 当应用型负载均衡版本处于**Active**状态时，表示应用型负载均衡版本修改成功。',
    ),
    'UpdateLoadBalancerAddressTypeConfig' => 
    array (
      'summary' => '变更应用型负载均衡实例的网络类型。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否只预检此次请求',
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会更新实例的网络类型。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'string',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例id',
            'description' => '应用型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'alb-bp1o94dp5i6ea****',
          ),
        ),
        3 => 
        array (
          'name' => 'AddressType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '目标网络类型',
            'description' => '目标网络类型。取值：

- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。

- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。',
            'type' => 'string',
            'required' => true,
            'example' => 'Internet',
          ),
        ),
        4 => 
        array (
          'name' => 'ZoneMappings',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '可用区及交换机映射列表',
            'description' => '可用区及交换机映射列表，至少指定两个可用区。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '可用区及交换映射列表结构体。',
              'type' => 'object',
              'properties' => 
              array (
                'VSwitchId' => 
                array (
                  'title' => '交换机标识',
                  'description' => '可用区对应的交换机，每个可用区只能使用一台交换机和一个子网。最多支持添加10个可用区。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vsw-bp10ttov87felojcn****',
                ),
                'ZoneId' => 
                array (
                  'title' => '可用区',
                  'description' => '应用型负载均衡实例的可用区ID。最多支持添加10个可用区。

您可以通过调用[DescribeZones](~~189196~~)接口获取可用区ID对应的可用区信息。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cn-hangzhou-a',
                ),
                'AllocationId' => 
                array (
                  'title' => '弹性公网IP',
                  'description' => '弹性公网IP实例ID。最多支持添加10个可用区。

> 调用此接口由私网转换为公网时，需要输入此参数。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'eip-bp1aedxso6u80u0qf****',
                ),
              ),
              'required' => false,
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
            'description' => '返回数据结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3',
              ),
              'JobId' => 
              array (
                'title' => '异步任务id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
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
            'errorCode' => 'OperationDenied.OnlyPostPaidEipSupported',
            'errorMessage' => 'The operation is not allowed because of OnlyPostPaidEipSupported.',
          ),
          1 => 
          array (
            'errorCode' => 'Mismatch.ZoneIdAndVSwitchId',
            'errorMessage' => 'The ZoneId and VSwitchId are mismatched.',
          ),
          2 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.Eip',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.Eip',
            'errorMessage' => 'The specified resource ResourceNotFound.Eip is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'IncorrectStatus.CommonBandwidthPackage',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          5 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.CommonBandwidthPackage',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.AddressTypeNotChanged',
            'errorMessage' => 'The operation is not allowed because of AddressTypeNotChanged.',
          ),
          7 => 
          array (
            'errorCode' => 'IncorrectStatus.LoadBalancer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.CommonBandwidthPackage',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateLoadBalancerAddressTypeConfigResponse>\\n    <RequestId>593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</UpdateLoadBalancerAddressTypeConfigResponse>","errorExample":""}]',
      'title' => '变更负载均衡实例的网络类型配置',
      'description' => '前提条件：

- 您已经创建应用型负载均衡实例，具体操作，请参见[CreateLoadBalancer](~~214358~~)。
- 当您需要通过此接口将应用型负载均衡实例的网络类型由私网变为公网时，您需要先创建一个弹性公网IP。具体操作，请参见[AllocateEipAddress](~~120192~~)。

使用说明：

**UpdateLoadBalancerAddressTypeConfig**接口属于异步接口，即系统返回一个请求ID，但该应用型负载均衡实例的网络类型尚未变更成功，系统后台的变更任务仍在进行。您可以调用[GetLoadBalancerAttribute](~~214362~~)查询应用型负载均衡实例的网络类型的变更状态：
- 当应用型负载均衡实例处于**Configuring**状态时，表示应用型负载均衡实例的网络类型正在变更中。
- 当应用型负载均衡实例处于**Active**状态时，表示应用型负载均衡实例的网络类型变更成功。',
    ),
    'ListLoadBalancers' => 
    array (
      'summary' => '查询指定地域的负载均衡，支持根据条件过滤。',
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
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用来标记当前开始读取的位置，置空表示从头开始。',
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
            'title' => '本次读取的最大数据记录数量，此参数为可选参数，取值1-100，用户传入为空时，默认为20。',
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值：**20**。

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '可用区ID',
            'description' => '应用型负载均衡实例所在的可用区ID。

您可以通过调用[DescribeZones](~~189196~~)接口获取可用区ID对应的可用区信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-a',
          ),
        ),
        3 => 
        array (
          'name' => 'LoadBalancerStatus',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例状态',
            'description' => '应用型负载均衡实例状态。取值：

- **Inactive**： 已停止，监听不再转发流量。

- **Active**:：运行中。

- **Provisioning**：创建中。

- **Configuring**：变配中。

- **CreateFailed**：创建失败，此时不会产生费用，实例只能被删除。系统默认清理最近1天创建失败的实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'Active',
          ),
        ),
        4 => 
        array (
          'name' => 'LoadBalancerBussinessStatus',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例业务状态',
            'description' => '应用型负载均衡的业务状态。取值：

- **Abnormal**：异常。

- **Normal**：正常。',
            'type' => 'string',
            'required' => false,
            'example' => 'Normal',
          ),
        ),
        5 => 
        array (
          'name' => 'LoadBalancerIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '实例ID列表，N最大支持20',
            'description' => '实例ID列表。最多支持20个应用型负载均衡实例ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例的ID。最多支持20个实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'alb-o9ulmq5hgn68jk****',
            ),
            'required' => false,
            'maxItems' => 21,
            'minItems' => 1,
          ),
        ),
        6 => 
        array (
          'name' => 'LoadBalancerNames',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '实例Name列表，N最大支持10',
            'description' => '实例名称列表。最多支持10个实例名称。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例名称。最多支持10个实例名称。

长度为2~128个英文或中文字符，必须以大小写英文字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
              'type' => 'string',
              'required' => false,
              'example' => 'alb-instance-test',
            ),
            'required' => false,
            'maxItems' => 11,
            'minItems' => 1,
          ),
        ),
        7 => 
        array (
          'name' => 'VpcIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => 'vpcId列表',
            'description' => '应用型负载均衡实例所属的VPC ID。最多支持10个VPC ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '应用型负载均衡实例所属的VPC ID。最多支持10个VPC ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'vpc-bp1b49rqrybk45nio****',
            ),
            'required' => false,
            'maxItems' => 11,
            'minItems' => 1,
          ),
        ),
        8 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => 'tag列表',
            'description' => '实例标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例标签结构。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '实例的标签键',
                  'description' => '实例的标签键。最多支持输入20个标签键。一旦输入该值，则不允许为空字符串。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'KeyTest',
                ),
                'Value' => 
                array (
                  'title' => '实例的标签值',
                  'description' => '实例的标签值。最多支持输入20个标签值。一旦输入该值，可以为空字符串。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'alueTest',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
            'minItems' => 1,
          ),
        ),
        9 => 
        array (
          'name' => 'AddressType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '负载均衡的地址类型',
            'description' => '实例地址类型。取值：

- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。

- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。',
            'type' => 'string',
            'required' => false,
            'example' => 'Intranet',
          ),
        ),
        10 => 
        array (
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '付费类型',
            'description' => '实例的计费类型。取值：

**PostPay**（默认值）：表示按量计费。',
            'type' => 'string',
            'required' => false,
            'example' => 'PostPay',
          ),
        ),
        11 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源组ID',
            'description' => '企业资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmxazb4ph****',
          ),
        ),
        12 => 
        array (
          'name' => 'AddressIpVersion',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '需要过滤的协议版本',
            'description' => '协议版本。取值：

- **IPv4**：IPv4类型。
- **DualStack**：双栈类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'IPv4',
          ),
        ),
        13 => 
        array (
          'name' => 'Ipv6AddressType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'IPV6的地址网络类型',
            'description' => '应用型负载均衡的IPv6地址类型。取值：

- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。

- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。',
            'type' => 'string',
            'required' => false,
            'example' => 'Intranet',
          ),
        ),
        14 => 
        array (
          'name' => 'DNSName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS域名。',
            'type' => 'string',
            'required' => false,
            'example' => 'alb-95qnr2itwu9orb****.cn-hangzhou.alb.aliyuncs.com',
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
            'description' => '应用型负载均衡实例配置信息。',
            'type' => 'object',
            'properties' => 
            array (
              'LoadBalancers' => 
              array (
                'title' => '实例列表',
                'description' => '应用型负载均衡实例列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '应用型负载均衡实例结构。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AccessLogConfig' => 
                    array (
                      'title' => '访问日志属性',
                      'description' => '访问日志配置结构。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'LogProject' => 
                        array (
                          'title' => '访问日志投递的logProject',
                          'description' => '日志项目。',
                          'type' => 'string',
                          'example' => 'sls-setter',
                        ),
                        'LogStore' => 
                        array (
                          'title' => '删除保护开启时间',
                          'description' => '日志存储。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                      ),
                    ),
                    'AddressAllocatedMode' => 
                    array (
                      'title' => '地址模式',
                      'description' => '地址模式。取值 ：

- **Fixed**：固定IP模式，表示使用固定IP地址。

- **Dynamic**：动态IP模式，表示每个可用区动态分配IP地址。',
                      'type' => 'string',
                      'example' => 'Fixed',
                    ),
                    'AddressType' => 
                    array (
                      'title' => '地址类型',
                      'description' => '负载均衡的地址类型。取值：

- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。

- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。',
                      'type' => 'string',
                      'example' => 'Intranet',
                    ),
                    'BandwidthPackageId' => 
                    array (
                      'title' => '带宽包ID',
                      'description' => '公网类型实例关联的共享带宽包ID。',
                      'type' => 'string',
                      'example' => 'cbwp-bp1vevu8h3ieh****',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '资源创建时间',
                      'description' => '资源创建时间。',
                      'type' => 'string',
                      'example' => '2022-07-02T02:49:05Z',
                    ),
                    'DNSName' => 
                    array (
                      'title' => 'DNS域名',
                      'description' => 'DNS域名。',
                      'type' => 'string',
                      'example' => 'alb-95qnr2itwu9orb****.cn-hangzhou.alb.aliyuncs.com',
                    ),
                    'DeletionProtectionConfig' => 
                    array (
                      'title' => '负载均衡删除保护相关信息',
                      'description' => '删除保护配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Enabled' => 
                        array (
                          'title' => '删除保护状态',
                          'description' => '删除保护状态，取值：

- **true**：开启。

- **false**：关闭。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'EnabledTime' => 
                        array (
                          'title' => '删除保护开启时间',
                          'description' => '开启删除保护时间。',
                          'type' => 'string',
                          'example' => '2022-08-02T02:49:05Z',
                        ),
                      ),
                    ),
                    'LoadBalancerBillingConfig' => 
                    array (
                      'title' => '计费相关属性',
                      'description' => '负载均衡实例计费配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PayType' => 
                        array (
                          'title' => '实例的计费类型',
                          'description' => '计费类型。取值：

**PostPay**：按量计费。',
                          'type' => 'string',
                          'example' => 'PostPay',
                          'default' => 'PostPay',
                        ),
                      ),
                    ),
                    'LoadBalancerBussinessStatus' => 
                    array (
                      'title' => '实例业务状态',
                      'description' => '负载均衡的业务状态。取值：

- **Abnormal**：异常。

- **Normal**：正常。',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'LoadBalancerEdition' => 
                    array (
                      'title' => '负载均衡的版本',
                      'description' => '负载均衡的版本，不同版本有不同功能限制和计费策略。取值：

- **Basic**：基础版。

- **Standard**：标准版。

- **StandardWithWaf**：WAF增强版。

',
                      'type' => 'string',
                      'example' => 'Standard',
                    ),
                    'LoadBalancerId' => 
                    array (
                      'title' => '负载均衡标识',
                      'description' => '应用型负载均衡实例ID。',
                      'type' => 'string',
                      'example' => 'alb-o9ulmq5hgn68jk****',
                    ),
                    'LoadBalancerName' => 
                    array (
                      'title' => '实例名称',
                      'description' => '负载均衡实例名称。',
                      'type' => 'string',
                      'example' => 'alb-instance-test',
                    ),
                    'LoadBalancerOperationLocks' => 
                    array (
                      'title' => '锁定的原因',
                      'description' => '负载均衡操作锁配置。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '负载均衡操作锁结构。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'LockReason' => 
                          array (
                            'title' => '锁定的原因',
                            'description' => '锁定的原因。在**LoadBalancerBussinessStatus**为**异常**时有效。',
                            'type' => 'string',
                            'example' => '欠费',
                          ),
                          'LockType' => 
                          array (
                            'title' => '锁定的类型',
                            'description' => '锁定的类型。取值 ：

- **SecurityLocked**：安全锁定。

- **RelatedResourceLocked**：关联锁定。

- **FinancialLocked**：欠费锁定。

- **ResidualLocked**：残留锁定。',
                            'type' => 'string',
                            'example' => 'FinancialLocked',
                          ),
                        ),
                      ),
                    ),
                    'LoadBalancerStatus' => 
                    array (
                      'title' => '实例状态',
                      'description' => '应用型负载均衡实例状态。取值：

- **Inactive**: 已停止，表示实例监听不会再转发流量。

- **Active**: 运行中。

- **Provisioning**：创建中。

- **Configuring**：变配中。

- **CreateFailed**：创建失败。',
                      'type' => 'string',
                      'example' => 'Active',
                    ),
                    'ModificationProtectionConfig' => 
                    array (
                      'title' => '负载均衡修改保护相关信息',
                      'description' => '修改保护配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Reason' => 
                        array (
                          'title' => '设置修改保护状态的原因',
                          'description' => '开启删除保护的原因。

长度为2~128个英文或中文字符，必须以大小写英文字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。

仅在**ModificationProtectionStatus**为**ConsoleProtection**有效且合法。',
                          'type' => 'string',
                          'example' => '托管实例',
                        ),
                        'Status' => 
                        array (
                          'title' => '负载均衡修改保护状态',
                          'description' => '负载均衡修改保护状态。取值：

- **NonProtection**：不保护，表示不允许传入ModificationProtectionReason。如果配置了ModificationProtectionReason，则清空其配置信息。

- **ConsoleProtection**：控制台修改保护，此时允许传入ModificationProtectionReason。

> 当取值为**ConsoleProtection**，即开启修改保护后，用户不能通过负载均衡控制台修改实例配置，但可以通过调用API修改实例配置。',
                          'type' => 'string',
                          'example' => 'ConsoleProtection',
                        ),
                      ),
                    ),
                    'ResourceGroupId' => 
                    array (
                      'title' => '企业资源组ID',
                      'description' => '企业资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-atstuj3rtop****',
                    ),
                    'Tags' => 
                    array (
                      'title' => '标签列表',
                      'description' => '标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签结构。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'title' => '实例的标签键',
                            'description' => '实例的标签键。',
                            'type' => 'string',
                            'example' => 'KeyTest',
                          ),
                          'Value' => 
                          array (
                            'title' => '实例的标签值',
                            'description' => '实例的标签值。',
                            'type' => 'string',
                            'example' => 'alueTest',
                          ),
                        ),
                      ),
                    ),
                    'VpcId' => 
                    array (
                      'title' => 'Vpc网络ID',
                      'description' => '应用型负载均衡实例的专有网络ID。',
                      'type' => 'string',
                      'example' => 'vpc-bp1b49rqrybk45nio****',
                    ),
                    'AddressIpVersion' => 
                    array (
                      'title' => '协议版本',
                      'description' => '协议版本。取值：

- **IPv4**：IPv4类型。

- **DualStack**：双栈类型。',
                      'type' => 'string',
                      'example' => 'DualStack',
                    ),
                    'Ipv6AddressType' => 
                    array (
                      'title' => 'IPV6地址类型',
                      'description' => '应用型负载均衡IPv6的网络地址类型。取值：

- **Internet**：公网。负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。

- **Intranet**：私网。负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。',
                      'type' => 'string',
                      'example' => 'Intranet',
                    ),
                  ),
                ),
              ),
              'MaxResults' => 
              array (
                'title' => '本次请求所返回的最大记录条数。',
                'description' => '分批次查询时每次显示的条目数。

',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'NextToken' => 
              array (
                'title' => '用来表示当前调用返回读取到的位置，空代表数据已经读取完毕。',
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF34B540710',
              ),
              'TotalCount' => 
              array (
                'title' => '本次请求条件下的数据总量。',
                'description' => '列表条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"LoadBalancers\\": [\\n    {\\n      \\"AccessLogConfig\\": {\\n        \\"LogProject\\": \\"sls-setter\\",\\n        \\"LogStore\\": \\"test\\"\\n      },\\n      \\"AddressAllocatedMode\\": \\"Fixed\\",\\n      \\"AddressType\\": \\"Intranet\\",\\n      \\"BandwidthPackageId\\": \\"cbwp-bp1vevu8h3ieh****\\",\\n      \\"CreateTime\\": \\"2022-07-02T02:49:05Z\\",\\n      \\"DNSName\\": \\"alb-95qnr2itwu9orb****.cn-hangzhou.alb.aliyuncs.com\\",\\n      \\"DeletionProtectionConfig\\": {\\n        \\"Enabled\\": true,\\n        \\"EnabledTime\\": \\"2022-08-02T02:49:05Z\\"\\n      },\\n      \\"LoadBalancerBillingConfig\\": {\\n        \\"PayType\\": \\"PostPay\\"\\n      },\\n      \\"LoadBalancerBussinessStatus\\": \\"Normal\\",\\n      \\"LoadBalancerEdition\\": \\"Standard\\",\\n      \\"LoadBalancerId\\": \\"alb-o9ulmq5hgn68jk****\\",\\n      \\"LoadBalancerName\\": \\"alb-instance-test\\",\\n      \\"LoadBalancerOperationLocks\\": [\\n        {\\n          \\"LockReason\\": \\"欠费\\",\\n          \\"LockType\\": \\"FinancialLocked\\"\\n        }\\n      ],\\n      \\"LoadBalancerStatus\\": \\"Active\\",\\n      \\"ModificationProtectionConfig\\": {\\n        \\"Reason\\": \\"托管实例\\",\\n        \\"Status\\": \\"ConsoleProtection\\"\\n      },\\n      \\"ResourceGroupId\\": \\"rg-atstuj3rtop****\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"KeyTest\\",\\n          \\"Value\\": \\"alueTest\\"\\n        }\\n      ],\\n      \\"VpcId\\": \\"vpc-bp1b49rqrybk45nio****\\",\\n      \\"AddressIpVersion\\": \\"DualStack\\",\\n      \\"Ipv6AddressType\\": \\"Intranet\\"\\n    }\\n  ],\\n  \\"MaxResults\\": 20,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\",\\n  \\"TotalCount\\": 100\\n}","errorExample":""},{"type":"xml","example":"<ListLoadBalancersResponse>\\n    <LoadBalancers>\\n        <AccessLogConfig>\\n            <LogProject>sls-setter</LogProject>\\n            <LogStore>test</LogStore>\\n        </AccessLogConfig>\\n        <AddressAllocatedMode>Fixed</AddressAllocatedMode>\\n        <AddressType>Intranet</AddressType>\\n        <BandwidthPackageId>cbwp-bp1vevu8h3ieh****</BandwidthPackageId>\\n        <CreateTime>2022-07-02T02:49:05Z</CreateTime>\\n        <DNSName>alb-95qnr2itwu9orb****.cn-hangzhou.alb.aliyuncs.com</DNSName>\\n        <DeletionProtectionConfig>\\n            <Enabled>true</Enabled>\\n            <EnabledTime>2022-08-02T02:49:05Z</EnabledTime>\\n        </DeletionProtectionConfig>\\n        <LoadBalancerBillingConfig>\\n            <PayType>PostPay</PayType>\\n        </LoadBalancerBillingConfig>\\n        <LoadBalancerBussinessStatus>Normal</LoadBalancerBussinessStatus>\\n        <LoadBalancerEdition>Standard</LoadBalancerEdition>\\n        <LoadBalancerId>alb-o9ulmq5hgn68jk****</LoadBalancerId>\\n        <LoadBalancerName>alb-instance-test</LoadBalancerName>\\n        <LoadBalancerOperationLocks>\\n            <LockReason>欠费</LockReason>\\n            <LockType>FinancialLocked</LockType>\\n        </LoadBalancerOperationLocks>\\n        <LoadBalancerStatus>Active</LoadBalancerStatus>\\n        <ModificationProtectionConfig>\\n            <Reason>托管实例</Reason>\\n            <Status>ConsoleProtection</Status>\\n        </ModificationProtectionConfig>\\n        <ResourceGroupId>rg-atstuj3rtop****</ResourceGroupId>\\n        <Tags>\\n            <Key>KeyTest</Key>\\n            <Value>alueTest</Value>\\n        </Tags>\\n        <VpcId>vpc-bp1b49rqrybk45nio****</VpcId>\\n        <AddressIpVersion>DualStack</AddressIpVersion>\\n        <Ipv6AddressType>Intranet</Ipv6AddressType>\\n    </LoadBalancers>\\n    <MaxResults>20</MaxResults>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <TotalCount>100</TotalCount>\\n</ListLoadBalancersResponse>","errorExample":""}]',
      'title' => '查询负载均衡',
    ),
    'DisableDeletionProtection' => 
    array (
      'summary' => '关闭指定负载均衡实例的删除保护。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B3FF3898',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会创建资源。检查项包括是否填写了必需参数、请求格式和业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回`HTTP_2xx`状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例id',
            'description' => '资源ID，此处为ALB实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'alb-o9ulmq5hgn68jk****',
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
            'description' => '关闭删除保护。',
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
            'errorCode' => 'IncorrectStatus.LoadBalancer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.LoadBalancer',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.LoadBalancer',
            'errorMessage' => 'Authentication is failed for %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.LoadBalancer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<DisableDeletionProtectionResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</DisableDeletionProtectionResponse>","errorExample":""}]',
      'title' => '关闭删除保护',
    ),
    'EnableDeletionProtection' => 
    array (
      'summary' => '开启指定资源的删除保护。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B3FF3898',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会创建资源。检查项包括是否填写了必需参数、请求格式和业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回`HTTP_2xx`状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例id',
            'description' => '资源ID，此处为ALB实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'alb-o9ulmq5hgn68jk****',
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
            'description' => '开启删除保护功能。',
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
            'errorCode' => 'IncorrectStatus.LoadBalancer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.LoadBalancer',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.LoadBalancer',
            'errorMessage' => 'Authentication is failed for %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.LoadBalancer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<EnableDeletionProtectionResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</EnableDeletionProtectionResponse>","errorExample":""}]',
      'title' => '开启删除保护',
    ),
    'StartShiftLoadBalancerZones' => 
    array (
      'summary' => '将可用区对应的EIP/VIP从域名解析中摘除。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B3FF3898
',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会移除可用区。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回`HTTP_2xx`状态码并直接进行修改。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例id',
            'description' => '应用型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'alb-o9ulmq5hgn68jk****
',
          ),
        ),
        3 => 
        array (
          'name' => 'ZoneMappings',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '可用区及交换机映射列表',
            'description' => '可用区及交换机映射列表。

> 一次调用最多支持移除一个可用区。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'VSwitchId' => 
                array (
                  'title' => '交换机标识',
                  'description' => '可用区对应的交换机，每个可用区默认使用一台交换机和一个子网。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'vsw-bp1rmcrwg3erh1fh8****
',
                ),
                'ZoneId' => 
                array (
                  'title' => '可用区',
                  'description' => '可用区ID，通过调用[DescribeZones](~~189196~~)接口获得。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'cn-hangzhou-a',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 1,
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A2CFF0E-5718-45B5-9D4D-70B3FF3898',
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
            'errorCode' => 'IncorrectStatus.LoadBalancer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.LoadBalancer',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
          2 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.Eip',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.ZoneVSwitchChanged',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.ZoneMappingsNotChanged',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.ZoneVSwitchNotExist',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.EniStatusNotSupport',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          7 => 
          array (
            'errorCode' => 'OperationDenied.OnlyFixedAddressAllocatedModeSupported',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          8 => 
          array (
            'errorCode' => 'OperationDenied.ConfigLastActiveZoneNotSupport',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          9 => 
          array (
            'errorCode' => 'OperationFailed.ShiftLoadBalancerZonesFailed',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          10 => 
          array (
            'errorCode' => 'ResourceNotEnough.VSwitchIp',
            'errorMessage' => 'The specified resource %s is not enough.',
          ),
          11 => 
          array (
            'errorCode' => 'Mismatch.ZoneIdAndVSwitchId',
            'errorMessage' => 'The %s and %s are mismatched.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.LoadBalancer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.VSwitch',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A2CFF0E-5718-45B5-9D4D-70B3FF3898\\"\\n}","type":"json"}]',
      'title' => '把可用区的EIP/VIP从域名解析中摘除',
      'description' => '仅支持固定IP模式的ALB实例。
当前ALB实例active状态的可用区数量为1时，不支持移除实例可用区。',
    ),
    'CancelShiftLoadBalancerZones' => 
    array (
      'summary' => '将可用区对应的EIP/VIP加回到域名解析中。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。


> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B3FF3898
',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会加回可用区。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回`HTTP_2xx`状态码并直接进行修改。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例id',
            'description' => '应用型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'alb-o9ulmq5hgn68jk****
',
          ),
        ),
        3 => 
        array (
          'name' => 'ZoneMappings',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '可用区及交换机映射列表',
            'description' => '可用区及交换机映射列表。

> 一次调用最多支持加回一个可用区。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'VSwitchId' => 
                array (
                  'title' => '交换机标识',
                  'description' => '可用区对应的交换机，每个可用区默认使用一台交换机和一个子网。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'vsw-bp1rmcrwg3erh1fh8****
',
                ),
                'ZoneId' => 
                array (
                  'title' => '可用区',
                  'description' => '可用区ID，通过调用[DescribeZones](~~189196~~)接口获得。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'cn-hangzhou-a',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 1,
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A2CFF0E-5718-45B5-9D4D-70B3FF3898
',
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
            'errorCode' => 'IncorrectStatus.LoadBalancer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.LoadBalancer',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
          2 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.Eip',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.ZoneVSwitchChanged',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.ZoneMappingsNotChanged',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.ZoneVSwitchNotExist',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.EniStatusNotSupport',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          7 => 
          array (
            'errorCode' => 'OperationDenied.OnlyFixedAddressAllocatedModeSupported',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          8 => 
          array (
            'errorCode' => 'OperationFailed.CancelShiftLoadBalancerZonesFailed',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          9 => 
          array (
            'errorCode' => 'ResourceNotEnough.VSwitchIp',
            'errorMessage' => 'The specified resource %s is not enough.',
          ),
          10 => 
          array (
            'errorCode' => 'Mismatch.ZoneIdAndVSwitchId',
            'errorMessage' => 'The %s and %s are mismatched.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.LoadBalancer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.VSwitch',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A2CFF0E-5718-45B5-9D4D-70B3FF3898\\\\n\\"\\n}","type":"json"}]',
      'title' => '把可用区的EIP/VIP加到DNS中',
      'description' => '仅支持固定IP模式的ALB实例。调用本接口时，您已通过StartShiftLoadBalancerZones接口或控制台移除ALB实例的某个可用区。',
    ),
    'EnableLoadBalancerIpv6Internet' => 
    array (
      'summary' => '将双栈应用型负载均衡实例的IPv6私网变更为IPv6公网。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '幂等参数',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B3FF3898',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '预校验',
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会开启负载均衡ALB的IPv6公网。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '应用型负载均衡实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'alb-o2cvudgo6rlqz7****',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BB920797-D70E-567F-8098-55A861DD7912',
              ),
              'JobId' => 
              array (
                'title' => '异步任务ID',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '4a6e3ad4-ef08-4ab1-b332-fa621cfe****',
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
            'errorCode' => 'IncorrectStatus.LoadBalancer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.LoadBalancer',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.NonDualStackInstance',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.Ipv6InternetInstance',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.LoadBalancer',
            'errorMessage' => 'Authentication is failed for %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.LoadBalancer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BB920797-D70E-567F-8098-55A861DD7912\\",\\n  \\"JobId\\": \\"4a6e3ad4-ef08-4ab1-b332-fa621cfe****\\"\\n}","errorExample":""},{"type":"xml","example":"<EnableLoadBalancerIpv6InternetResponse>\\n    <RequestId>BB920797-D70E-567F-8098-55A861DD7912</RequestId>\\n    <JobId>4a6e3ad4-ef08-4ab1-b332-fa621cfe****</JobId>\\n</EnableLoadBalancerIpv6InternetResponse>","errorExample":""}]',
      'title' => '开启负载均衡IPv6公网',
      'description' => '### 前提条件

已创建双栈ALB实例，调用[CreateLoadBalancer](~~214358~~)接口将**AddressIpVersion**设置为**DualStack**。

> **AddressIpVersion**设置为**DualStack**时：
> - **AddressType**设置为**Internet**表示ALB实例拥有IPv4公网和IPv6私网访问能力。
> - **AddressType**设置为**Intranet**表示ALB实例拥有IPv4私网和IPv6私网访问能力。

### 使用说明
- 变更成功后，**Ipv6AddressType**类型将变为**Internet**，ALB实例IPv6地址即具备公网能力，后续该ALB实例下变配或者弹性产生的新的弹性网卡ENI（Elastic Network Interface）也会自动开启公网能力，您可以通过调用[GetLoadBalancerAttribute](~~214362~~)接口查看**Ipv6AddressType**的取值。

- **EnableLoadBalancerIpv6Internet**接口属于异步接口，即系统返回一个请求ID，但该ALB实例的IPv6私网尚未变更为IPv6公网，系统后台的变更任务仍在进行。您可以调用[GetLoadBalancerAttribute](~~214362~~)查询ALB实例IPv6网络的变更状态：

    - 当应用型负载均衡处于**Configuring**状态时，表示ALB实例的IPv6私网正在变更为IPv6公网。

    - 当应用型负载均衡处于**Active**状态时，表示ALB实例的IPv6私网变更IPv6公网成功。',
    ),
    'DisableLoadBalancerIpv6Internet' => 
    array (
      'summary' => '将双栈应用型负载均衡实例的IPv6公网变更为IPv6私网。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '幂等参数',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '预校验',
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会关闭应用型负载均衡实例的IPv6公网。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '应用型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'alb-chugtlrj1iusjh****',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7D866E37-1123-5160-AFF1-BDAF5EB86A8A',
              ),
              'JobId' => 
              array (
                'title' => '异步任务ID',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => 'd12871a6-ebb2-41f3-8d74-d9f452bb****',
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
            'errorCode' => 'IncorrectStatus.LoadBalancer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.LoadBalancer',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.NonDualStackInstance',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.Ipv6IntranetInstance',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.LoadBalancer',
            'errorMessage' => 'Authentication is failed for %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.LoadBalancer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7D866E37-1123-5160-AFF1-BDAF5EB86A8A\\",\\n  \\"JobId\\": \\"d12871a6-ebb2-41f3-8d74-d9f452bb****\\"\\n}","errorExample":""},{"type":"xml","example":"<DisableLoadBalancerIpv6InternetResponse>\\n    <RequestId>7D866E37-1123-5160-AFF1-BDAF5EB86A8A</RequestId>\\n    <JobId>d12871a6-ebb2-41f3-8d74-d9f452bb****</JobId>\\n</DisableLoadBalancerIpv6InternetResponse>","errorExample":""}]',
      'title' => '关闭负载均衡IPv6公网',
      'description' => '### 前提条件

已创建双栈ALB实例，调用[CreateLoadBalancer](~~214358~~)接口将**AddressIpVersion**设置为**DualStack**。

>  **AddressIpVersion**设置为**DualStack**时：
   - **AddressType**设置为**Internet**表示ALB实例拥有IPv4公网和IPv6私网访问能力。
   - **AddressType**设置为**Intranet**表示ALB实例拥有IPv4私网和IPv6私网访问能力。

### 使用说明

- 变更成功后，**Ipv6AddressType**类型将变为**Intranet**，ALB实例IPv6地址即具备私网能力，后续该ALB实例下变配或者弹性产生的新的弹性网卡ENI（Elastic Network Interface）也会默认具备私网能力。您可以通过调用[GetLoadBalancerAttribute](~~214362~~)接口查看**Ipv6AddressType**的取值。

- **DisableLoadBalancerIpv6Internet**接口属于异步接口，即系统返回一个请求ID，但该ALB实例的IPv6公网尚未变更为IPv6私网，系统后台的变更任务仍在进行。您可以调用[GetLoadBalancerAttribute](~~214362~~)查询ALB实例IPv6网络的变更状态：

    - 当应用型负载均衡处于**Configuring**状态时，表示ALB实例的IPv6公网正在变更为IPv6私网。

    - 当应用型负载均衡处于**Active**状态时，表示ALB实例的IPv6公网变更IPv6私网成功。',
    ),
    'LoadBalancerJoinSecurityGroup' => 
    array (
      'summary' => '为应用型负载均衡实例绑定已创建的安全组',
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
        'operationType' => 'none',
        'abilityTreeCode' => '171521',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslbKS6M4D',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SecurityGroupIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '安全组ID集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '安全组ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'sg-m5e7xkprgt1pi1ik****',
            ),
            'required' => true,
            'maxItems' => 4,
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'alb-h7kcw4g4nnvtqp****',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会创建资源。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
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
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '创建结果',
            'description' => '创建结果',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'description' => '异步任务ID',
                'type' => 'string',
                'example' => '8fe81f25-79a0-4fa0-9036-f2601fda****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D3B9AE45-F5DB-58E3-A4B5-EE58F1EC****',
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
            'errorCode' => 'IncorrectStatus.LoadBalancer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceAlreadyAssociated.SecurityGroup',
            'errorMessage' => 'The specified resource of %s is already associated.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.SecurityGroupNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.SecurityGroupNotSupport',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.LbAssociatedAclCanNotJoinSecurityGroup',
            'errorMessage' => 'The operation is not allowed because of loadBalancer associated acl can not join security group.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.LoadBalancer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.SecurityGroup',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'asynchronous',
        'callback' => 'Alb::2020-06-16::ListAsynJobs',
        'callbackInterval' => 3000,
        'maxCallbackTimes' => 20,
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"JobId\\": \\"8fe81f25-79a0-4fa0-9036-f2601fda****\\",\\n  \\"RequestId\\": \\"D3B9AE45-F5DB-58E3-A4B5-EE58F1EC****\\"\\n}","type":"json"}]',
      'title' => '负载均衡实例加入安全组',
      'description' => '- 安全组功能默认不开放，如需使用，请向商务经理申请。

- 请确保您已创建安全组。创建安全组，请参见[CreateSecurityGroup](~~2679843~~)。

- 一个应用型负载均衡实例最多支持加入 4 个安全组。

- 您可以通过[GetLoadBalancerAttribute](~~2254835~~)接口查询实例绑定的安全组。

- LoadBalancerJoinSecurityGroup 属于异步接口，即系统返回一个请求 ID，但该应用型负载均衡实例绑定安全组尚未成功，系统后台的绑定任务仍在进行。您可以调用 [ListAsynJobs](~~2254893~~) 查询安全组的绑定状态：

   - 当任务状态处于 Succeeded 时，表示安全组绑定成功。

  - 当任务状态处于 Processing 时，表示安全组正在绑定中，在该状态下，您只能执行查询操作，不能执行其他操作。',
    ),
    'LoadBalancerLeaveSecurityGroup' => 
    array (
      'summary' => '为应用型负载均衡实例解绑安全组',
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SecurityGroupIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '安全组ID集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '安全组ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'sg-1nmf15kvwj37g2g1****',
            ),
            'required' => true,
            'maxItems' => 4,
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'alb-iv9gj3lpak6fbj****',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会创建资源。检查项包括是否填写了必需参数、请求格式和业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回**http_2xx**状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。


> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '593B0448-D13E-4C56-AC0D-FDF0FDE0****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '创建结果',
            'description' => '创建结果',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'EC0C96E4-7CCB-599C-9329-3A5DB6FF****',
              ),
              'JobId' => 
              array (
                'description' => '异步任务ID',
                'type' => 'string',
                'example' => '51c5b627-3500-487c-b17d-5cc583f0****',
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
            'errorCode' => 'IncorrectStatus.LoadBalancer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.SecurityGroupNotSupport',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotAssociated.SecurityGroup',
            'errorMessage' => 'The specified resource of %s is not associated.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.LoadBalancer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.SecurityGroup',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'asynchronous',
        'callback' => 'Alb::2020-06-16::ListAsynJobs',
        'callbackInterval' => 3000,
        'maxCallbackTimes' => 20,
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EC0C96E4-7CCB-599C-9329-3A5DB6FF****\\",\\n  \\"JobId\\": \\"51c5b627-3500-487c-b17d-5cc583f0****\\"\\n}","type":"json"}]',
      'title' => '负载均衡实例移出安全组',
      'description' => '- LoadBalancerLeaveSecurityGroup 接口属于异步接口，即系统返回一个请求 ID，但该应用型负载均衡实例的安全组尚未解绑成功，系统后台的解绑任务仍在进行。您可以调用 [ListAsynJobs](~~2254893~~) 查询安全组的解绑状态：

  - 当任务状态处于 Succeeded 时，表示安全组解绑成功。

  - 当任务状态处于 Processing 时，表示安全组正在解绑中，在该状态下，您只能执行查询操作，不能执行其他操作。',
    ),
    'CreateListener' => 
    array (
      'summary' => '在指定地域创建HTTP、HTTPS或QUIC监听。',
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
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '负载均衡标识',
            'description' => '应用型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'alb-n5qw04uq8vavfe****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
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
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会创建监听。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ListenerProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '监听协议',
            'description' => '监听协议。

取值：**HTTP**、**HTTPS**或**QUIC**。',
            'type' => 'string',
            'required' => true,
            'example' => 'HTTP',
          ),
        ),
        4 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '监听端口',
            'description' => '负载均衡实例前端使用的端口。

取值：**1~65535**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '80',
          ),
        ),
        5 => 
        array (
          'name' => 'ListenerDescription',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '监听描述',
            'description' => '自定义监听名称。

长度为2~256个字符，必须是中文和无害字符串中的字符，可包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）、下划线（_）。',
            'type' => 'string',
            'required' => false,
            'example' => 'HTTP_80',
          ),
        ),
        6 => 
        array (
          'name' => 'RequestTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '请求超时时间',
            'description' => '指定请求超时时间。单位：秒。

取值：**1~180**。

默认值：**60**。

如果在超时时间内后端服务器一直没有响应，负载均衡将放弃等待，并给客户端返回` HTTP 504 `错误码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '60',
            'default' => '60',
          ),
        ),
        7 => 
        array (
          'name' => 'IdleTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '连接空闲超时时间',
            'description' => '指定连接空闲超时时间。单位：秒。

取值范围：**1~60**。

默认值：**15**。

如果在超时时间内一直没有访问请求，负载均衡会暂时中断当前连接，直到一下次请求来临时重新建立新的连接。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '3',
            'default' => '15',
          ),
        ),
        8 => 
        array (
          'name' => 'GzipEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否开启Gzip压缩',
            'description' => '是否开启`Gzip`压缩，对特定文件类型进行压缩。取值：

- **true**（默认值）：是。
- **false**：否。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        9 => 
        array (
          'name' => 'Http2Enabled',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否开启HTTP/2特性',
            'description' => '是否开启`HTTP/2`特性。取值：
- **true**（默认值）：是。
- **false**：否。

> 仅HTTPS监听支持此参数。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        10 => 
        array (
          'name' => 'SecurityPolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '安全策略',
            'description' => '安全策略ID。支持系统安全策略和自定义安全策略。

默认值：**tls\\_cipher\\_policy\\_1_0**（系统安全策略）。

> 仅HTTPS监听支持此参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'tls_cipher_policy_1_0',
          ),
        ),
        11 => 
        array (
          'name' => 'CaEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否开启双向认证',
            'description' => '是否开启双向认证。取值：

- **true**：开启。
- **false**（默认值）：不开启。
',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        12 => 
        array (
          'name' => 'XForwardedForConfig',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => 'XForward字段相关的配置',
            'description' => 'XForward字段配置信息。',
            'type' => 'object',
            'properties' => 
            array (
              'XForwardedForClientCertClientVerifyAlias' => 
              array (
                'title' => '自定义HEADER头名称，只有当XForwardedForClientCertClientVerifyEnabled的值为true的时候，此值才会生效；否则该值不会生效。HTTPS监听有效',
                'description' => '自定义头名称，只有当**XForwardedForClientCertClientVerifyEnabled**的值为**true**的时候，该值才会生效；否则该值不会生效。

取值：1\\~40个字符。支持字母a~z、短划线（-）、下划线（_）和数字。

> 仅HTTPS监听支持此参数。',
                'type' => 'string',
                'required' => false,
                'example' => 'test_client-verify-alias_123456',
              ),
              'XForwardedForClientCertClientVerifyEnabled' => 
              array (
                'title' => '是否通过X-Forwarded-Clientcert-clientverify  头字段获取对访问负载均衡实例客户端证书的校验结果。HTTPS监听有效。',
                'description' => '是否通过`X-Forwarded-Clientcert-clientverify`头字段获取对访问负载均衡实例客户端证书的校验结果。取值：

- **true**：是。
- **false**（默认值）：否。

> 仅HTTPS监听支持此参数。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'XForwardedForClientCertFingerprintAlias' => 
              array (
                'title' => '自定义HEADER头名称，只有当XForwardedForClientCertFingerprintEnabled的值为true的时候，此值才会生效；否则该值不会生效。HTTPS监听有效',
                'description' => '自定义头名称，只有当**XForwardedForClientCertFingerprintEnabled**的值为**true**时生效。

取值：1\\~40个字符。支持字母a~z、短划线（-）、下划线（_）和数字。

> 仅HTTPS监听支持此参数。',
                'type' => 'string',
                'required' => false,
                'example' => 'test_finger-print-alias_123456',
              ),
              'XForwardedForClientCertFingerprintEnabled' => 
              array (
                'title' => '是否通过X-Forwarded-Clientcert-fingerprint 头字段获取访问负载均衡实例客户端证书的指纹取值，HTTPS监听有效。',
                'description' => '是否通过`X-Forwarded-Clientcert-fingerprint`头字段获取访问负载均衡实例客户端证书的指纹取值。取值：

- **true**：是。
- **false**（默认值）：否。

> 仅HTTPS监听支持此参数。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'XForwardedForClientCertIssuerDNAlias' => 
              array (
                'title' => '自定义HEADER头名称，只有当XForwardedForClientCertIssuerDNEnabled的值为‘On’的时候，此值才会生效；否则该值不会生效。HTTPS监听有效',
                'description' => '自定义头名称，只有当**XForwardedForClientCertIssuerDNEnabled**的值为**true**的时候，此值才会生效。

取值：1\\~40个字符。支持字母a~z、短划线（-）、下划线（_）和数字。

> 仅HTTPS监听支持此参数。',
                'type' => 'string',
                'required' => false,
                'example' => 'test_issue-dn-alias_123456',
              ),
              'XForwardedForClientCertIssuerDNEnabled' => 
              array (
                'title' => '是否通过 X-Forwarded-Clientcert-issuerdn 头字段获取访问负载均衡实例客户端证书的发行者信息。HTTPS监听有效。',
                'description' => '是否通过`X-Forwarded-Clientcert-issuerdn`头字段获取访问负载均衡实例客户端证书的发行者信息。取值：

- **true**：是。
- **false**（默认值）：否。

> 仅HTTPS监听支持此参数。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'XForwardedForClientCertSubjectDNAlias' => 
              array (
                'title' => '自定义HEADER头名称，只有当XForwardedForClientCertSubjectDNEnabled的值为true的时候，此值才会生效；否则该值不会生效。HTTPS监听有效',
                'description' => '自定义头名称，只有当**XForwardedForClientCertSubjectDNEnabled**的值为**true**时，此值才会生效。

取值：1\\~40个字符。支持字母a~z、短划线（-）、下划线（_）和数字。

> 仅HTTPS监听支持此参数。',
                'type' => 'string',
                'required' => false,
                'example' => 'test_subject-dn-alias_123456',
              ),
              'XForwardedForClientCertSubjectDNEnabled' => 
              array (
                'title' => '是否通过X-Forwarded-Clientcert-subjectdn  头字段获取访问负载均衡实例客户端证书的所有者信息。HTTPS监听有效。',
                'description' => '是否通过`X-Forwarded-Clientcert-subjectdn`头字段获取访问负载均衡实例客户端证书的所有者信息。取值：
- **true**：是。
- **false**（默认值）：否。

> 仅HTTPS监听支持此参数。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'XForwardedForClientSrcPortEnabled' => 
              array (
                'title' => '是否通过X-Forwarded-Client-Port 头字段获取访问负载均衡实例客户端的端口。HTTPS监听有效。',
                'description' => '是否通过`X-Forwarded-Client-Port`头字段获取访问负载均衡实例客户端的端口。取值：
- **true**：是。
- **false**（默认值）：否。

> HTTP和HTTPS监听支持此参数。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'XForwardedForEnabled' => 
              array (
                'title' => '是否开启通过X-Forwarded-For头字段获取来访者真实 IP',
                'description' => '是否通过`X-Forwarded-For`头字段获取来访者真实IP。取值：
- **true**（默认值）：是。
- **false**：否。

> HTTP和HTTPS监听支持此参数。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'XForwardedForProtoEnabled' => 
              array (
                'title' => '是否通过X-Forwarded-Proto头字段获取负载均衡实例的监听协议。',
                'description' => '是否通过`X-Forwarded-Proto`头字段获取负载均衡实例的监听协议。取值：
- **true**：是。
- **false**（默认值）：否。

> HTTP、HTTPS和QUIC监听支持此参数。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'XForwardedForSLBIdEnabled' => 
              array (
                'title' => '是否通过SLB-ID头字段获取负载均衡实例ID。',
                'description' => '是否通过`SLB-ID`头字段获取负载均衡实例ID。取值：
- **true**：是。
- **false**（默认值）：否。

> HTTP、HTTPS和QUIC监听支持此参数。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'XForwardedForSLBPortEnabled' => 
              array (
                'title' => '是否通过X-Forwarded-Port 头字段获取负载均衡实例的监听端口。HTTPS监听有效。',
                'description' => '是否通过`X-Forwarded-Port`头字段获取负载均衡实例的监听端口。取值：
- **true**：是。
- **false**（默认值）：否。

> HTTP、HTTPS和QUIC监听支持此参数。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'XForwardedForClientSourceIpsEnabled' => 
              array (
                'description' => '是否允许ALB从X-Forwarded-For头字段中查找真实客户端IP。取值：

- **true**：是。
- **false**（默认值）：否。

> HTTP、HTTPS监听支持此参数。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'XForwardedForClientSourceIpsTrusted' => 
              array (
                'description' => '指定可信的代理IP。

应用型负载均衡ALB会从后往前遍历`X-Forwarded-For`，选取第一个不在可信IP列表中的IP作为真实的客户端IP，该IP会被用于源IP限速。',
                'type' => 'string',
                'required' => false,
                'example' => '10.1.1.0/24',
              ),
            ),
            'required' => false,
          ),
        ),
        13 => 
        array (
          'name' => 'QuicConfig',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => 'HTTPS启用QUIC时相关属性',
            'description' => '配置关联的QUIC监听。',
            'type' => 'object',
            'properties' => 
            array (
              'QuicListenerId' => 
              array (
                'title' => '需要关联的QUIC监听ID，HTTPS监听时有效，QuicUpgradeEnabled为true时必选',
                'description' => '需要关联的QUIC监听ID，HTTPS监听时有效，当**QuicUpgradeEnabled**为**true**时该参数必选。

> 原始监听和关联的QUIC监听必须属于同一个ALB实例，并且此QUIC监听之前没有被关联过。',
                'type' => 'string',
                'required' => false,
                'example' => 'lsn-o4u54y73wq7b******',
              ),
              'QuicUpgradeEnabled' => 
              array (
                'title' => '是否开启quic升级，HTTPS监听时有效',
                'description' => '是否开启QUIC升级。取值：
- **true**：是。
- **false**（默认值）：否。

> 仅HTTPS监听支持此参数。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
            ),
            'required' => false,
          ),
        ),
        14 => 
        array (
          'name' => 'Certificates',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '监听默认服务器证书列表，N当前取值范围为1',
            'description' => '证书列表信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '证书结构体。',
              'type' => 'object',
              'properties' => 
              array (
                'CertificateId' => 
                array (
                  'title' => '正式标识',
                  'description' => '证书ID，当前仅支持服务器证书。最多支持添加20个证书ID。

> 当**ListenerProtocol**参数取值为**HTTPS**或**QUIC**的时候，此参数为必填。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '103705*******',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 2,
            'minItems' => 1,
          ),
        ),
        15 => 
        array (
          'name' => 'CaCertificates',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '监听默认CA证书列表，N当前取值范围为1',
            'description' => '监听配置的CA证书列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '监听配置的CA证书列表。',
              'type' => 'object',
              'properties' => 
              array (
                'CertificateId' => 
                array (
                  'title' => '正式标识',
                  'description' => 'CA证书ID。目前仅支持添加1个CA证书。

> 当**CaEnabled**参数取值为**true**的时候，此参数为必填。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '123157*******',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 1,
            'minItems' => 1,
          ),
        ),
        16 => 
        array (
          'name' => 'DefaultActions',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '监听默认动作',
            'description' => '规则动作列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '规则动作列表。',
              'type' => 'object',
              'properties' => 
              array (
                'ForwardGroupConfig' => 
                array (
                  'title' => '转发组',
                  'description' => '转发动作对应的配置。最多支持添加20个转发动作对应的配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ServerGroupTuples' => 
                    array (
                      'title' => '服务器组列表',
                      'description' => '转发目标服务器元组。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '转发目标服务器元组。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ServerGroupId' => 
                          array (
                            'title' => '服务器组ID',
                            'description' => '转发到的目的服务器组ID。',
                            'type' => 'string',
                            'required' => true,
                            'example' => 'sgp-8ilqs4axp6******',
                          ),
                        ),
                        'required' => true,
                      ),
                      'required' => true,
                    ),
                  ),
                  'required' => true,
                ),
                'Type' => 
                array (
                  'title' => '动作类型',
                  'description' => '动作类型。最多支持添加1个动作类型。

取值：**ForwardGroup**，表示转发至多个服务器组。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'ForwardGroup',
                ),
              ),
              'required' => true,
            ),
            'required' => true,
          ),
        ),
        17 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签结构。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'env',
                ),
                'Value' => 
                array (
                  'description' => '标签值。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'product',
                ),
              ),
              'required' => false,
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
            'description' => '创建监听。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务Id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'ListenerId' => 
              array (
                'title' => '监听标识',
                'description' => '监听ID。',
                'type' => 'string',
                'example' => 'lsn-o4u54y73wq7b******',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
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
            'errorCode' => 'ResourceAlreadyExist.Listener',
            'errorMessage' => 'The specified resource %s is already exist.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectStatus.LoadBalancer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          2 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.LoadBalancer',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.LoadBalancerListenersNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.CrossLoadBalancerQUICListener',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          5 => 
          array (
            'errorCode' => 'ResourceAlreadyAssociated.Listener',
            'errorMessage' => 'The specified resource %s is already associated.',
          ),
          6 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.SecurityPolicyAttachedNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          7 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.ServerGroupAttachedNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          8 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.LoadBalancerServersNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          9 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.ServerAddedNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          10 => 
          array (
            'errorCode' => 'Mismatch.VpcId',
            'errorMessage' => 'The %s is mismatched for %s and %s.',
          ),
          11 => 
          array (
            'errorCode' => 'OperationDenied.ServerGroupProtocolNotSupport',
            'errorMessage' => 'The operation is not allowed because of ServerGroupProtocolNotSupport.',
          ),
          12 => 
          array (
            'errorCode' => 'OperationDenied.GRPCServerGroup',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          13 => 
          array (
            'errorCode' => 'Mismatch.LoadBalancerEditionAndConnectionDrain',
            'errorMessage' => 'The %s and %s are mismatched.',
          ),
          14 => 
          array (
            'errorCode' => 'Mismatch.LoadBalancerEditionAndSlowStartEnable',
            'errorMessage' => 'The %s and %s are mismatched.',
          ),
          15 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'Invalid parameter, please check the parameter input.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.SecurityPolicy',
            'errorMessage' => 'Authentication has failed for SecurityPolicy.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.LoadBalancer',
            'errorMessage' => 'Authentication is failed for %s.',
          ),
          2 => 
          array (
            'errorCode' => 'Forbidden.Listener',
            'errorMessage' => 'Authentication is failed for %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.LoadBalancer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.ServerGroup',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotFound.SecurityPolicy',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.Listener',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'ResourceNotFound.Certificate',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"ListenerId\\": \\"lsn-o4u54y73wq7b******\\",\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876*******\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateListenerResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <ListenerId>lsr-bp1bpn0kn908w4nbw****</ListenerId>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</CreateListenerResponse>","errorExample":""}]',
      'title' => '创建监听',
      'description' => '**CreateListener**接口属于异步接口，即系统返回一个请求ID，但该HTTP、HTTPS或QUIC监听尚未创建成功，系统后台的创建任务仍在进行。您可以调用[GetListenerAttribute](~~2254865~~)查询HTTP、HTTPS或QUIC监听的创建状态：
- 当HTTP、HTTPS或QUIC监听处于**Provisioning**状态时，表示HTTP、HTTPS或QUIC监听正在创建中。
- 当HTTP、HTTPS或QUIC监听处于**Running**状态时，表示HTTP、HTTPS或QUIC监听创建成功。',
    ),
    'GetListenerAttribute' => 
    array (
      'summary' => '查询监听的详细信息。',
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
          'name' => 'ListenerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '监听标识',
            'description' => '监听ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lsn-o4u54y73wq7b******',
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
            'description' => '查询监听的详细信息。',
            'type' => 'object',
            'properties' => 
            array (
              'AclConfig' => 
              array (
                'title' => 'ACL相关配置信息',
                'description' => 'ACL配置结构。',
                'type' => 'object',
                'properties' => 
                array (
                  'AclRelations' => 
                  array (
                    'title' => '监听绑定的访问策略组',
                    'description' => '监听绑定的访问策略组ID列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '监听绑定的访问策略组结构。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AclId' => 
                        array (
                          'title' => 'ACL标识',
                          'description' => '监听绑定的访问策略组ID。',
                          'type' => 'string',
                          'example' => 'acl-doc****',
                        ),
                        'Status' => 
                        array (
                          'title' => 'ACL与监听关联的状态',
                          'description' => 'ACL与监听关联的状态。取值：

- **Associating**：关联中。

- **Associated**：已关联。

- **Dissociating**：解关联中。',
                          'type' => 'string',
                          'example' => 'Associating',
                        ),
                      ),
                    ),
                  ),
                  'AclType' => 
                  array (
                    'title' => '访问控制类型',
                    'description' => '访问控制类型。取值：

- **White**：仅转发来自所选访问控制策略组中设置的IP地址或地址段的请求，白名单适用于应用只允许特定IP访问的场景。设置白名单存在一定业务风险。一旦设置白名单，就只有白名单中的IP可以访问负载均衡监听。

   如果开启了白名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。

- **Black**：来自所选访问控制策略组中设置的IP地址或地址段的所有请求都不会转发，黑名单适用于应用只限制某些特定IP访问的场景。

  如果开启了黑名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。',
                    'type' => 'string',
                    'example' => 'White',
                  ),
                ),
              ),
              'Certificates' => 
              array (
                'title' => '监听默认服务器证书列表，N当前取值范围为1',
                'description' => '证书列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '证书结构。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CertificateId' => 
                    array (
                      'title' => '正式标识',
                      'description' => '证书ID，当前仅支持服务器证书。',
                      'type' => 'string',
                      'example' => '123157*******',
                    ),
                  ),
                ),
              ),
              'CaCertificates' => 
              array (
                'title' => '监听默认CA证书列表，N当前取值范围为1',
                'description' => 'CA证书列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CertificateId' => 
                    array (
                      'title' => '正式标识',
                      'description' => 'CA证书ID。',
                      'type' => 'string',
                      'example' => '139a00*****',
                    ),
                    'Status' => 
                    array (
                      'title' => '证书状态',
                      'description' => '证书状态。',
                      'type' => 'string',
                      'example' => 'Associated',
                    ),
                    'IsDefault' => 
                    array (
                      'title' => '是否为默认证书',
                      'description' => '是否为默认证书。取值：

- **true**：是。

- **false**：否。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                  ),
                ),
              ),
              'CaEnabled' => 
              array (
                'title' => '是否开启双向认证',
                'description' => '是否开启双向认证。取值：
- **true**：是。
- **false**：否。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'DefaultActions' => 
              array (
                'title' => '默认动作',
                'description' => '默认规则动作列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '默认规则动作结构。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ForwardGroupConfig' => 
                    array (
                      'title' => '转发到服务器组',
                      'description' => '转发动作对应的配置，类型为**ForwardGroup**时有效。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ServerGroupTuples' => 
                        array (
                          'title' => '服务器组列表',
                          'description' => '转发目标服务器组。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '转发目标服务器组。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ServerGroupId' => 
                              array (
                                'title' => '服务器组ID',
                                'description' => '转发到的目的服务器组ID。',
                                'type' => 'string',
                                'example' => 'sgp-i5qt20******',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'Type' => 
                    array (
                      'title' => '类型',
                      'description' => '动作类型。

取值：**ForwardGroup**，表示转发至多个服务器组。',
                      'type' => 'string',
                      'example' => 'ForwardGroup',
                    ),
                  ),
                ),
              ),
              'GzipEnabled' => 
              array (
                'title' => '是否开启Gzip压缩',
                'description' => '是否开启Gzip压缩，对特定文件类型进行压缩。取值：
- **true**：是。
- **false**：否。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Http2Enabled' => 
              array (
                'title' => '是否开启HTTP/2特性',
                'description' => '是否开启HTTP/2特性。取值：
- **true**：是。
- **false**：否。

> 仅HTTPS监听支持此参数。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'IdleTimeout' => 
              array (
                'title' => '连接空闲超时时间',
                'description' => '指定连接空闲超时时间。单位：秒。

如果在超时时间内一直没有访问请求，负载均衡会暂时中断当前连接，直到下一次请求来临时重新建立新的连接。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'ListenerDescription' => 
              array (
                'title' => '监听描述',
                'description' => '自定义监听名称。',
                'type' => 'string',
                'example' => 'HTTP_80',
              ),
              'ListenerId' => 
              array (
                'title' => '监听标识',
                'description' => '监听ID。',
                'type' => 'string',
                'example' => 'lsn-o4u54y73wq7b******',
              ),
              'ListenerPort' => 
              array (
                'title' => '监听端口',
                'description' => '负载均衡实例前端使用的端口。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '80',
              ),
              'ListenerProtocol' => 
              array (
                'title' => '监听协议',
                'description' => '监听协议。取值：**HTTP**、**HTTPS**或**QUIC**。',
                'type' => 'string',
                'example' => 'HTTP',
              ),
              'ListenerStatus' => 
              array (
                'title' => '监听状态',
                'description' => '当前监听的状态。取值：

- **Provisioning**：创建中。

- **Running**：运行中。

- **Configuring**：配置中。

- **Stopped**：已停止。',
                'type' => 'string',
                'example' => 'Running',
              ),
              'LoadBalancerId' => 
              array (
                'title' => '负载均衡标识',
                'description' => '应用型负载均衡实例ID。',
                'type' => 'string',
                'example' => 'alb-bd6oylbckp6k9x****',
              ),
              'LogConfig' => 
              array (
                'title' => '监听访问日志相关配置',
                'description' => '日志配置信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'AccessLogRecordCustomizedHeadersEnabled' => 
                  array (
                    'title' => '访问日志是否开启携带自定义Header',
                    'description' => '访问日志是否开启携带自定义头字段。取值：
- **true**：是。
- **false**：否。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'AccessLogTracingConfig' => 
                  array (
                    'title' => '访问日志Xtrace相关的配置',
                    'description' => '访问日志Xtrace相关的配置信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'TracingEnabled' => 
                      array (
                        'title' => 'Xtrace功能状态',
                        'description' => 'Xtrace功能状态。取值：
- **true**：是。
- **false**：否。

> 只有实例访问日志开关（AccessLogEnabled）打开时，才能设置为**true**。',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'TracingSample' => 
                      array (
                        'title' => 'Xtrace功能状态',
                        'description' => 'Xtrace的采样率。取值：1~10000。

> **TracingEnabled**为**true**时，此值有效。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '100',
                      ),
                      'TracingType' => 
                      array (
                        'title' => 'xtrace的类型',
                        'description' => 'xtrace的类型。合法取值为**Zipkin**。

> **TracingEnabled**为**true**时，此值有效。',
                        'type' => 'string',
                        'example' => 'Zipkin',
                      ),
                    ),
                  ),
                ),
              ),
              'QuicConfig' => 
              array (
                'title' => 'HTTPS启用QUIC时相关属性',
                'description' => '启用关联QUIC监听时的配置信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'QuicListenerId' => 
                  array (
                    'title' => '需要关联的QUIC监听ID，HTTPS监听时有效，QuicUpgradeEnabled为true时必选',
                    'description' => '需要关联的QUIC监听ID。**QuicUpgradeEnabled**为**true**时必选。HTTPS监听时有效。

> 原始监听和关联的QUIC监听必须属于同一个ALB实例，并且此QUIC监听之前没有被关联过。',
                    'type' => 'string',
                    'example' => 'lsn-ek6ad66t****',
                  ),
                  'QuicUpgradeEnabled' => 
                  array (
                    'title' => '是否开启quic升级，HTTPS监听时有效',
                    'description' => '是否开启QUIC升级。取值：
- **true**：是。
- **false**：否。

> 仅HTTPS监听时有效。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF******',
              ),
              'RequestTimeout' => 
              array (
                'title' => '请求超时时间',
                'description' => '指定请求超时时间。单位：秒。

如果在超时时间内后端服务器一直没有响应，负载均衡将放弃等待，给客户端返回`HTTP 504`错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '34',
              ),
              'SecurityPolicyId' => 
              array (
                'title' => '安全策略',
                'description' => '安全策略。

> 仅HTTPS监听支持此参数。',
                'type' => 'string',
                'example' => 'tls_cipher_policy_1_1',
              ),
              'XForwardedForConfig' => 
              array (
                'title' => 'XForward字段相关的配置',
                'description' => 'XForward字段配置信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'XForwardedForClientCertClientVerifyAlias' => 
                  array (
                    'title' => '自定义HEADER头名称，只有当XForwardedForClientCertClientVerifyEnabled的值为true的时候，此值才会生效；否则该值不会生效。HTTPS监听有效',
                    'description' => '自定义头名称。只有当**XForwardedForClientCertClientVerifyEnabled**的值为**true**的时候，此值才会生效，否则该值不会生效。

取值限制：长度为1\\~40字符。支持字母a~z、短划线（-）、下划线（_）和数字。

> 仅HTTPS监听支持此参数。',
                    'type' => 'string',
                    'example' => 'test_client-verify-alias_123456',
                  ),
                  'XForwardedForClientCertClientVerifyEnabled' => 
                  array (
                    'title' => '是否通过X-Forwarded-Clientcert-clientverify  头字段获取对访问负载均衡实例客户端证书的校验结果。HTTPS监听有效。',
                    'description' => '是否通过`X-Forwarded-Clientcert-clientverify`头字段获取访问负载均衡实例客户端证书的校验结果。取值：
- **true**：是。
- **false**：否。

> 仅HTTPS监听支持此参数。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'XForwardedForClientCertFingerprintAlias' => 
                  array (
                    'title' => '自定义HEADER头名称，只有当XForwardedForClientCertFingerprintEnabled的值为true的时候，此值才会生效；否则该值不会生效。HTTPS监听有效',
                    'description' => '自定义头名称，只有当**XForwardedForClientCertFingerprintEnabled**的值为**true**时生效。

取值限制：长度为1\\~40字符。支持字母a~z、短划线（-）、下划线（_）和数字。

> 仅HTTPS监听支持此参数。',
                    'type' => 'string',
                    'example' => 'test_finger-print-alias_123456',
                  ),
                  'XForwardedForClientCertFingerprintEnabled' => 
                  array (
                    'title' => '是否通过X-Forwarded-Clientcert-fingerprint 头字段获取访问负载均衡实例客户端证书的指纹取值，HTTPS监听有效。',
                    'description' => '是否通过`X-Forwarded-Clientcert-fingerprint`头字段获取访问负载均衡实例客户端证书的指纹取值。取值：
- **true**：是。
- **false**：否。

> 仅HTTPS监听支持此参数。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'XForwardedForClientCertIssuerDNAlias' => 
                  array (
                    'title' => '自定义HEADER头名称，只有当XForwardedForClientCertIssuerDNEnabled的值为‘On’的时候，此值才会生效；否则该值不会生效。HTTPS监听有效',
                    'description' => '自定义头名称，只有当**XForwardedForClientCertIssuerDNEnabled**的值为**true**的时候，此值才会生效。

取值限制：长度为1\\~40字符。支持字母a~z、短划线（-）、下划线（_）和数字。

> 仅HTTPS监听支持此参数。',
                    'type' => 'string',
                    'example' => 'test_issue-dn-alias_123456',
                  ),
                  'XForwardedForClientCertIssuerDNEnabled' => 
                  array (
                    'title' => '是否通过 X-Forwarded-Clientcert-issuerdn 头字段获取访问负载均衡实例客户端证书的发行者信息。HTTPS监听有效。',
                    'description' => '是否通过`X-Forwarded-Clientcert-issuerdn`头字段获取访问负载均衡实例客户端证书的发行者信息。取值：
- **true**：是。
- **false**：否。


> 仅HTTPS监听支持此参数。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'XForwardedForClientCertSubjectDNAlias' => 
                  array (
                    'title' => '自定义HEADER头名称，只有当XForwardedForClientCertSubjectDNEnabled的值为true的时候，此值才会生效；否则该值不会生效。HTTPS监听有效',
                    'description' => '自定义头名称，只有当**XForwardedForClientCertSubjectDNEnabled的**值为**true**时，此值才会生效。

取值限制：长度为1\\~40字符。支持字母a~z、短划线（-）、下划线（_）和数字。

> 仅HTTPS监听支持此参数。',
                    'type' => 'string',
                    'example' => 'test_subject-dn-alias_123456',
                  ),
                  'XForwardedForClientCertSubjectDNEnabled' => 
                  array (
                    'title' => '是否通过X-Forwarded-Clientcert-subjectdn  头字段获取访问负载均衡实例客户端证书的所有者信息。HTTPS监听有效。',
                    'description' => '是否通过`X-Forwarded-Clientcert-subjectdn`头字段获取访问负载均衡实例客户端证书的所有者信息。取值：
- **true**：是。
- **false**：否。

> 仅HTTPS监听支持此参数。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'XForwardedForClientSrcPortEnabled' => 
                  array (
                    'title' => '是否通过X-Forwarded-Client-Port 头字段获取访问负载均衡实例客户端的端口。HTTPS监听有效。',
                    'description' => '是否通过`X-Forwarded-Client-Port`头字段获取访问负载均衡实例客户端的端口。取值：
- **true**：是。
- **false**：否。

> HTTP和HTTPS监听支持此参数。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'XForwardedForEnabled' => 
                  array (
                    'title' => '是否开启通过X-Forwarded-For头字段获取来访者真实 IP',
                    'description' => '是否开启通过`X-Forwarded-For`头字段获取来访者真实IP。取值：
- **true**：是。
- **false**：否。

> HTTP和HTTPS监听支持此参数。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'XForwardedForProtoEnabled' => 
                  array (
                    'title' => '是否通过X-Forwarded-Proto头字段获取负载均衡实例的监听协议。',
                    'description' => '是否通过`X-Forwarded-Proto`头字段获取负载均衡实例的监听协议。取值：
- **true**：是。
- **false**：否。

> HTTP、HTTPS和QUIC监听支持此参数。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'XForwardedForSLBIdEnabled' => 
                  array (
                    'title' => '是否通过SLB-ID头字段获取负载均衡实例ID。',
                    'description' => '是否通过`SLB-ID`头字段获取负载均衡实例ID。取值：
- **true**：是。
- **false**：否。

> HTTP、HTTPS和QUIC监听支持此参数。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'XForwardedForSLBPortEnabled' => 
                  array (
                    'title' => '是否通过X-Forwarded-Port 头字段获取负载均衡实例的监听端口。HTTPS监听有效。',
                    'description' => '是否通过`X-Forwarded-Port`头字段获取负载均衡实例的监听端口。取值：
- **true**：是。
- **false**：否。

> HTTP、HTTPS和QUIC监听支持此参数。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'XForwardedForClientSourceIpsEnabled' => 
                  array (
                    'description' => '是否允许ALB从X-Forwarded-For头字段中查找真实客户端IP。取值：

- **true**：是。
- **false**：否。

> HTTP、HTTPS监听支持此参数。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'XForwardedForClientSourceIpsTrusted' => 
                  array (
                    'description' => '指定可信的代理IP。

应用型负载均衡ALB会从后往前遍历`X-Forwarded-For`，选取第一个不在可信IP列表中的IP作为真实的客户端IP，该IP会被用于源IP限速。',
                    'type' => 'string',
                    'example' => '10.1.1.0/24',
                  ),
                ),
              ),
              'Tags' => 
              array (
                'description' => '标签。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签结构。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '标签键。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                      'type' => 'string',
                      'example' => 'env',
                    ),
                    'Value' => 
                    array (
                      'description' => '标签值。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                      'type' => 'string',
                      'example' => 'product',
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
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.LoadBalancer',
            'errorMessage' => 'Authentication is failed for %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Listener',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AclConfig\\": {\\n    \\"AclRelations\\": [\\n      {\\n        \\"AclId\\": \\"acl-doc****\\",\\n        \\"Status\\": \\"Associating\\"\\n      }\\n    ],\\n    \\"AclType\\": \\"White\\"\\n  },\\n  \\"Certificates\\": [\\n    {\\n      \\"CertificateId\\": \\"123157*******\\"\\n    }\\n  ],\\n  \\"CaCertificates\\": [\\n    {\\n      \\"CertificateId\\": \\"139a00*****\\",\\n      \\"Status\\": \\"Associated\\",\\n      \\"IsDefault\\": true\\n    }\\n  ],\\n  \\"CaEnabled\\": false,\\n  \\"DefaultActions\\": [\\n    {\\n      \\"ForwardGroupConfig\\": {\\n        \\"ServerGroupTuples\\": [\\n          {\\n            \\"ServerGroupId\\": \\"sgp-i5qt20******\\"\\n          }\\n        ]\\n      },\\n      \\"Type\\": \\"ForwardGroup\\"\\n    }\\n  ],\\n  \\"GzipEnabled\\": true,\\n  \\"Http2Enabled\\": true,\\n  \\"IdleTimeout\\": 2,\\n  \\"ListenerDescription\\": \\"HTTP_80\\",\\n  \\"ListenerId\\": \\"lsn-o4u54y73wq7b******\\",\\n  \\"ListenerPort\\": 80,\\n  \\"ListenerProtocol\\": \\"HTTP\\",\\n  \\"ListenerStatus\\": \\"Running\\",\\n  \\"LoadBalancerId\\": \\"alb-bd6oylbckp6k9x****\\",\\n  \\"LogConfig\\": {\\n    \\"AccessLogRecordCustomizedHeadersEnabled\\": true,\\n    \\"AccessLogTracingConfig\\": {\\n      \\"TracingEnabled\\": true,\\n      \\"TracingSample\\": 100,\\n      \\"TracingType\\": \\"Zipkin\\"\\n    }\\n  },\\n  \\"QuicConfig\\": {\\n    \\"QuicListenerId\\": \\"lsn-ek6ad66t****\\",\\n    \\"QuicUpgradeEnabled\\": true\\n  },\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF******\\",\\n  \\"RequestTimeout\\": 34,\\n  \\"SecurityPolicyId\\": \\"tls_cipher_policy_1_1\\",\\n  \\"XForwardedForConfig\\": {\\n    \\"XForwardedForClientCertClientVerifyAlias\\": \\"test_client-verify-alias_123456\\",\\n    \\"XForwardedForClientCertClientVerifyEnabled\\": true,\\n    \\"XForwardedForClientCertFingerprintAlias\\": \\"test_finger-print-alias_123456\\",\\n    \\"XForwardedForClientCertFingerprintEnabled\\": true,\\n    \\"XForwardedForClientCertIssuerDNAlias\\": \\"test_issue-dn-alias_123456\\",\\n    \\"XForwardedForClientCertIssuerDNEnabled\\": true,\\n    \\"XForwardedForClientCertSubjectDNAlias\\": \\"test_subject-dn-alias_123456\\",\\n    \\"XForwardedForClientCertSubjectDNEnabled\\": true,\\n    \\"XForwardedForClientSrcPortEnabled\\": true,\\n    \\"XForwardedForEnabled\\": true,\\n    \\"XForwardedForProtoEnabled\\": true,\\n    \\"XForwardedForSLBIdEnabled\\": true,\\n    \\"XForwardedForSLBPortEnabled\\": true,\\n    \\"XForwardedForClientSourceIpsEnabled\\": false,\\n    \\"XForwardedForClientSourceIpsTrusted\\": \\"10.1.1.0/24\\"\\n  },\\n  \\"Tags\\": [\\n    {\\n      \\"Key\\": \\"env\\",\\n      \\"Value\\": \\"product\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetListenerAttributeResponse>\\n    <AclConfig>\\n        <AclRelations>\\n            <AclId>acl-doc****</AclId>\\n            <Status>Associating</Status>\\n        </AclRelations>\\n        <AclType>White</AclType>\\n    </AclConfig>\\n    <Certificates>\\n        <CertificateId>12315790212_166f8204689_1714763408_70998****</CertificateId>\\n    </Certificates>\\n    <CaCertificates>\\n        <CertificateId>139a00604bd-cn-east-hangzho****</CertificateId>\\n        <Status>Associated</Status>\\n        <IsDefault>true</IsDefault>\\n    </CaCertificates>\\n    <CaEnabled>false</CaEnabled>\\n    <DefaultActions>\\n        <ForwardGroupConfig>\\n            <ServerGroupTuples>\\n                <ServerGroupId>rsp-cige6j****</ServerGroupId>\\n            </ServerGroupTuples>\\n        </ForwardGroupConfig>\\n        <Type>ForwardGroup</Type>\\n    </DefaultActions>\\n    <GzipEnabled>true</GzipEnabled>\\n    <Http2Enabled>true</Http2Enabled>\\n    <IdleTimeout>2</IdleTimeout>\\n    <ListenerDescription>HTTP_80</ListenerDescription>\\n    <ListenerId>lsr-bp1bpn0kn908w4nbw****</ListenerId>\\n    <ListenerPort>80</ListenerPort>\\n    <ListenerProtocol>HTTP</ListenerProtocol>\\n    <ListenerStatus>Running</ListenerStatus>\\n    <LoadBalancerId>alb-bd6oylbckp6k9x****</LoadBalancerId>\\n    <LogConfig>\\n        <AccessLogRecordCustomizedHeadersEnabled>true</AccessLogRecordCustomizedHeadersEnabled>\\n        <AccessLogTracingConfig>\\n            <TracingEnabled>true</TracingEnabled>\\n            <TracingSample>100</TracingSample>\\n            <TracingType>Zipkin</TracingType>\\n        </AccessLogTracingConfig>\\n    </LogConfig>\\n    <QuicConfig>\\n        <QuicListenerId>lsn-333</QuicListenerId>\\n        <QuicUpgradeEnabled>true</QuicUpgradeEnabled>\\n    </QuicConfig>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <RequestTimeout>34</RequestTimeout>\\n    <SecurityPolicyId>tls_cipher_policy_1_1</SecurityPolicyId>\\n    <XForwardedForConfig>\\n        <XForwardedForClientCertClientVerifyAlias>test_client-verify-alias_123456</XForwardedForClientCertClientVerifyAlias>\\n        <XForwardedForClientCertClientVerifyEnabled>true</XForwardedForClientCertClientVerifyEnabled>\\n        <XForwardedForClientCertFingerprintAlias>test_finger-print-alias_123456</XForwardedForClientCertFingerprintAlias>\\n        <XForwardedForClientCertFingerprintEnabled>true</XForwardedForClientCertFingerprintEnabled>\\n        <XForwardedForClientCertIssuerDNAlias>test_issue-dn-alias_123456</XForwardedForClientCertIssuerDNAlias>\\n        <XForwardedForClientCertIssuerDNEnabled>true</XForwardedForClientCertIssuerDNEnabled>\\n        <XForwardedForClientCertSubjectDNAlias>test_subject-dn-alias_123456</XForwardedForClientCertSubjectDNAlias>\\n        <XForwardedForClientCertSubjectDNEnabled>true</XForwardedForClientCertSubjectDNEnabled>\\n        <XForwardedForClientSrcPortEnabled>true</XForwardedForClientSrcPortEnabled>\\n        <XForwardedForEnabled>true</XForwardedForEnabled>\\n        <XForwardedForProtoEnabled>true</XForwardedForProtoEnabled>\\n        <XForwardedForSLBIdEnabled>true</XForwardedForSLBIdEnabled>\\n        <XForwardedForSLBPortEnabled>true</XForwardedForSLBPortEnabled>\\n        <XForwardedForClientSourceIpsEnabled>false</XForwardedForClientSourceIpsEnabled>\\n        <XForwardedForClientSourceIpsTrusted>10.1.1.0/24</XForwardedForClientSourceIpsTrusted>\\n    </XForwardedForConfig>\\n</GetListenerAttributeResponse>","errorExample":""}]',
      'title' => '查询监听器的属性',
    ),
    'DeleteListener' => 
    array (
      'summary' => '删除指定的监听。',
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
          'name' => 'ListenerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '监听id',
            'description' => '应用型负载均衡实例的监听ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lsn-o4u54y73wq7b******',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B******',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会删除应用型负载均衡的监听。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回`HTTP_2xx`状态码并直接进行操作。',
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
            'description' => '删除监听。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
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
            'errorCode' => 'IncorrectStatus.Listener',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceInUse.Listener',
            'errorMessage' => 'The specified resource %s is in use.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceInConfiguring.Listener',
            'errorMessage' => 'The specified resource is being configured, please try again later.',
          ),
          3 => 
          array (
            'errorCode' => 'IncorrectStatus.LoadBalancer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.LoadBalancer',
            'errorMessage' => 'Authentication is failed for %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Listener',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.LoadBalancer',
            'errorMessage' => 'The specified resource of %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF3******\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteListenerResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n</DeleteListenerResponse>","errorExample":""}]',
      'title' => '删除监听',
      'description' => '**DeleteListener**接口属于异步接口，即系统返回一个请求ID，但该监听尚未删除成功，系统后台的删除任务仍在进行。您可以调用[GetListenerAttribute](~~2254865~~)查询监听的删除状态：
- 当监听器处于**Deleting**状态时，表示监听正在删除中。
- 当查询不到该监听时，表示监听删除成功。',
    ),
    'ListListeners' => 
    array (
      'summary' => '查询指定地域的监听。',
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
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用来标记当前开始读取的位置，置空表示从头开始。',
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
            'title' => '本次读取的最大数据记录数量，此参数为可选参数，取值1-100，用户传入为空时，默认为20。',
            'description' => '本次读取的最大数据记录数量，此参数为可选参数。取值范围：**1~100**。入参为空时，默认值为**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '监听ID列表，N最大支持20',
            'description' => '监听实例ID列表。最多支持20个监听ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '监听实例ID。最多支持20个监听ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'lsn-o4u54y73wq7b******',
            ),
            'required' => false,
            'maxItems' => 21,
            'minItems' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'LoadBalancerIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '实例ID列表，N最大支持20',
            'description' => '应用型负载均衡实例ID。最多支持20个实例ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '应用型负载均衡实例ID。最多支持20个实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'alb-bd6oylbckp6k9x****',
            ),
            'required' => false,
            'maxItems' => 21,
            'minItems' => 1,
          ),
        ),
        4 => 
        array (
          'name' => 'ListenerProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '监听协议',
            'description' => '需要过滤的监听协议。取值：

- **HTTP**：协议类型为HTTP。
- **HTTPS**：协议类型为HTTPS。
- **QUIC**：协议类型为QUIC。',
            'type' => 'string',
            'required' => false,
            'example' => 'HTTP',
          ),
        ),
        5 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签结构。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'env',
                ),
                'Value' => 
                array (
                  'description' => '标签值。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'product',
                ),
              ),
              'required' => false,
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
            'description' => '应用型负载均衡监听信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Listeners' => 
              array (
                'title' => '监听列表',
                'description' => '应用型负载均衡监听列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '应用型负载均衡监听结构。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DefaultActions' => 
                    array (
                      'title' => '默认动作',
                      'description' => '默认规则动作列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '默认规则动作结构。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ForwardGroupConfig' => 
                          array (
                            'title' => '转发到服务器组',
                            'description' => '转发规则动作对应的配置。动作类型为**ForwardGroup**时有效。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ServerGroupTuples' => 
                              array (
                                'title' => '服务器组列表',
                                'description' => '转发目标服务器组。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '转发目标服务器组。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'ServerGroupId' => 
                                    array (
                                      'title' => '服务器组ID',
                                      'description' => '转发到的目的服务器组ID。',
                                      'type' => 'string',
                                      'example' => 'sgp-i5qt20******',
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                          'Type' => 
                          array (
                            'title' => '类型',
                            'description' => '动作类型。取值：**ForwardGroup**，表示转发至多个服务器组。',
                            'type' => 'string',
                            'example' => 'ForwardGroup',
                          ),
                        ),
                      ),
                    ),
                    'GzipEnabled' => 
                    array (
                      'title' => '是否开启Gzip压缩',
                      'description' => '是否开启Gzip压缩，对特定文件类型进行压缩。取值：

- **true**：是。
- **false**：否。

',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'Http2Enabled' => 
                    array (
                      'title' => '是否开启HTTP/2特性',
                      'description' => '是否开启HTTP/2特性。取值：

- **true**：是。
- **false**：否。

> 仅HTTPS监听支持此参数。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'IdleTimeout' => 
                    array (
                      'title' => '连接空闲超时时间',
                      'description' => '指定连接空闲超时时间。单位：秒。取值范围：**1~60**。

如果在超时时间内一直没有访问请求，负载均衡会暂时中断当前连接，直到接收到下一次请求时重新建立新的连接。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'ListenerDescription' => 
                    array (
                      'title' => '监听描述',
                      'description' => '自定义监听名称。',
                      'type' => 'string',
                      'example' => 'HTTP_80',
                    ),
                    'ListenerId' => 
                    array (
                      'title' => '监听标识',
                      'description' => '监听ID。',
                      'type' => 'string',
                      'example' => 'lsn-o4u54y73wq7b******',
                    ),
                    'ListenerPort' => 
                    array (
                      'title' => '监听端口',
                      'description' => '应用型负载均衡实例前端使用的端口。取值：**1~65535**。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '80',
                    ),
                    'ListenerProtocol' => 
                    array (
                      'title' => '监听协议',
                      'description' => '监听协议。取值：

- **HTTP**：协议类型为HTTP。
- **HTTPS**：协议类型为HTTPS。
- **QUIC**：协议类型为QUIC。',
                      'type' => 'string',
                      'example' => 'HTTP',
                    ),
                    'ListenerStatus' => 
                    array (
                      'title' => '监听状态',
                      'description' => '当前监听的状态，取值：

- **Provisioning**：创建中。

- **Running**：运行中。

- **Configuring**：配置中。

- **Stopped**：已停止。',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'LoadBalancerId' => 
                    array (
                      'title' => '负载均衡标识',
                      'description' => '应用型负载均衡实例ID。',
                      'type' => 'string',
                      'example' => 'alb-bd6oylbckp6k9x****',
                    ),
                    'LogConfig' => 
                    array (
                      'title' => '监听访问日志相关配置',
                      'description' => '日志配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AccessLogRecordCustomizedHeadersEnabled' => 
                        array (
                          'title' => '访问日志是否开启携带自定义Header',
                          'description' => '访问日志是否开启携带自定义头。取值：

- **true**：是。
- **false**：否。
',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'AccessLogTracingConfig' => 
                        array (
                          'title' => '访问日志Xtrace相关的配置',
                          'description' => '访问日志Xtrace相关的配置信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'TracingEnabled' => 
                            array (
                              'title' => 'Xtrace功能状态',
                              'description' => '是否开启Xtrace功能。取值：

- **true**：是。
- **false**：否。

> 只有实例访问日志开关**AccessLogEnabled**打开时，才能设置此参数为**true**。',
                              'type' => 'boolean',
                              'example' => 'true',
                            ),
                            'TracingSample' => 
                            array (
                              'title' => 'Xtrace功能状态',
                              'description' => 'Xtrace的采样率。取值：**1~10000**。

> **TracingEnabled**为**true**时，此值有效。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '100',
                            ),
                            'TracingType' => 
                            array (
                              'title' => 'xtrace的类型',
                              'description' => 'Xtrace类型，合法取值为**Zipkin**。

> **TracingEnabled**为**true**时，此值有效。',
                              'type' => 'string',
                              'example' => 'Zipkin',
                            ),
                          ),
                        ),
                      ),
                    ),
                    'QuicConfig' => 
                    array (
                      'title' => 'HTTPS启用QUIC时相关属性',
                      'description' => '启用关联QUIC监听时的配置信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'QuicListenerId' => 
                        array (
                          'title' => '需要关联的QUIC监听ID，HTTPS监听时有效，QuicUpgradeEnabled为true时必选',
                          'description' => '需要关联的QUIC监听ID。**QuicUpgradeEnabled**为**true**时必选。HTTPS监听时有效。

> 原始监听和关联的QUIC监听必须属于同一个ALB实例，并且此QUIC监听之前没有被关联过。',
                          'type' => 'string',
                          'example' => 'lsn-o4u54y73wq7b******',
                        ),
                        'QuicUpgradeEnabled' => 
                        array (
                          'title' => '是否开启quic升级，HTTPS监听时有效',
                          'description' => '是否开启QUIC升级。取值：

- **true**：是。
- **false**：否。

> 仅HTTPS监听时有效。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                      ),
                    ),
                    'RequestTimeout' => 
                    array (
                      'title' => '请求超时时间',
                      'description' => '指定请求超时时间。单位：秒。取值：**1~180**。

如果在超时时间内后端服务器一直没有响应，负载均衡将放弃等待，给客户端返回`HTTP 504`错误码。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '34',
                    ),
                    'SecurityPolicyId' => 
                    array (
                      'title' => '安全策略',
                      'description' => '安全策略。

> 仅HTTPS监听支持此参数。',
                      'type' => 'string',
                      'example' => 'tls_cipher_policy_1_1',
                    ),
                    'XForwardedForConfig' => 
                    array (
                      'title' => 'XForward字段相关的配置',
                      'description' => '`XForward`头字段配置信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'XForwardedForClientCertClientVerifyAlias' => 
                        array (
                          'title' => '自定义HEADER头名称，只有当XForwardedForClientCertClientVerifyEnabled的值为true的时候，此值才会生效；否则该值不会生效。HTTPS监听有效',
                          'description' => '自定义头字段名称，只有当**XForwardedForClientCertClientVerifyEnabled**的值为**true**的时候，此值才会生效；否则该值不会生效。

取值限制：长度为1~40字符。支持字母a-z、数字、短划线（-）和下划线（_）。

> 仅HTTPS监听支持此参数。',
                          'type' => 'string',
                          'example' => 'test_client-verify-alias_123456',
                        ),
                        'XForwardedForClientCertClientVerifyEnabled' => 
                        array (
                          'title' => '是否通过X-Forwarded-Clientcert-clientverify  头字段获取对访问负载均衡实例客户端证书的校验结果。HTTPS监听有效。',
                          'description' => '是否通过`X-Forwarded-Clientcert-clientverify`头字段获取对访问负载均衡实例客户端证书的校验结果。取值：

- **true**：是。
- **false**：否。

> 仅HTTPS监听支持此参数。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'XForwardedForClientCertFingerprintAlias' => 
                        array (
                          'title' => '自定义HEADER头名称，只有当XForwardedForClientCertFingerprintEnabled的值为true的时候，此值才会生效；否则该值不会生效。HTTPS监听有效',
                          'description' => '自定义头名称，只有当**XForwardedForClientCertFingerprintEnabled**的值为**true**时生效。

取值限制：长度为1~40字符。支持字母a-z、数字、短划线（-）和下划线（_）。

> 仅HTTPS监听支持此参数。',
                          'type' => 'string',
                          'example' => 'test_finger-print-alias_123456',
                        ),
                        'XForwardedForClientCertFingerprintEnabled' => 
                        array (
                          'title' => '是否通过X-Forwarded-Clientcert-fingerprint 头字段获取访问负载均衡实例客户端证书的指纹取值，HTTPS监听有效。',
                          'description' => '是否通过`X-Forwarded-Clientcert-fingerprint`头字段获取访问负载均衡实例客户端证书的指纹取值。取值：

- **true**：是。
- **false**：否。

> 仅HTTPS监听支持此参数。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'XForwardedForClientCertIssuerDNAlias' => 
                        array (
                          'title' => '自定义HEADER头名称，只有当XForwardedForClientCertIssuerDNEnabled的值为‘On’的时候，此值才会生效；否则该值不会生效。HTTPS监听有效',
                          'description' => '自定义头名称，只有当**XForwardedForClientCertIssuerDNEnabled**的值为**true**的时候，此值才会生效。

取值限制：长度为1~40字符。支持字母a-z、数字、短划线（-）和下划线（_）。

> 仅HTTPS监听支持此参数。',
                          'type' => 'string',
                          'example' => 'test_issue-dn-alias_123456',
                        ),
                        'XForwardedForClientCertIssuerDNEnabled' => 
                        array (
                          'title' => '是否通过 X-Forwarded-Clientcert-issuerdn 头字段获取访问负载均衡实例客户端证书的发行者信息。HTTPS监听有效。',
                          'description' => '是否通过`X-Forwarded-Clientcert-issuerdn`头字段获取访问负载均衡实例客户端证书的发行者信息。取值：

- **true**：是。
- **false**：否。

> 仅HTTPS监听支持此参数。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'XForwardedForClientCertSubjectDNAlias' => 
                        array (
                          'title' => '自定义HEADER头名称，只有当XForwardedForClientCertSubjectDNEnabled的值为true的时候，此值才会生效；否则该值不会生效。HTTPS监听有效',
                          'description' => '自定义头名称，只有当**XForwardedForClientCertSubjectDNEnabled**的值为**true**时，此值才会生效。

取值限制：长度为1~40字符。支持字母a-z、数字、短划线（-）和下划线（_）。

> 仅HTTPS监听支持此参数。',
                          'type' => 'string',
                          'example' => 'test_subject-dn-alias_123456',
                        ),
                        'XForwardedForClientCertSubjectDNEnabled' => 
                        array (
                          'title' => '是否通过X-Forwarded-Clientcert-subjectdn  头字段获取访问负载均衡实例客户端证书的所有者信息。HTTPS监听有效。',
                          'description' => '是否通过`X-Forwarded-Clientcert-subjectdn`头字段获取访问负载均衡实例客户端证书的所有者信息。取值：

- **true**：是。
- **false**：否。

> 仅HTTPS监听支持此参数。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'XForwardedForClientSrcPortEnabled' => 
                        array (
                          'title' => '是否通过X-Forwarded-Client-Port 头字段获取访问负载均衡实例客户端的端口。HTTPS监听有效。',
                          'description' => '是否通过`X-Forwarded-Client-Port`头字段获取访问负载均衡实例客户端的端口。取值：

- **true**：是。
- **false**：否。

> HTTP和HTTPS监听支持此参数。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'XForwardedForEnabled' => 
                        array (
                          'title' => '是否开启通过X-Forwarded-For头字段获取来访者真实 IP',
                          'description' => '是否开启通过`X-Forwarded-For`头字段获取来访者真实IP。取值：

- **true**：是。
- **false**：否。

> HTTP和HTTPS监听支持此参数。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'XForwardedForProtoEnabled' => 
                        array (
                          'title' => '是否通过X-Forwarded-Proto头字段获取负载均衡实例的监听协议。',
                          'description' => '是否通过`X-Forwarded-Proto`头字段获取负载均衡实例的监听协议。取值：

- **true**：是。
- **false**：否。

> HTTP、HTTPS和QUIC监听支持此参数。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'XForwardedForSLBIdEnabled' => 
                        array (
                          'title' => '是否通过SLB-ID头字段获取负载均衡实例ID。',
                          'description' => '是否通过`SLB-ID`头字段获取负载均衡实例ID。取值：

- **true**：是。
- **false**：否。

> HTTP、HTTPS和QUIC监听支持此参数。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'XForwardedForSLBPortEnabled' => 
                        array (
                          'title' => '是否通过X-Forwarded-Port 头字段获取负载均衡实例的监听端口。HTTPS监听有效。',
                          'description' => '是否通过`X-Forwarded-Port`头字段获取负载均衡实例的监听端口。取值：

- **true**：是。
- **false**：否。

> HTTP、HTTPS和QUIC监听支持此参数。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'XForwardedForClientSourceIpsEnabled' => 
                        array (
                          'description' => '是否允许ALB从X-Forwarded-For头字段中查找真实客户端IP。取值：

- **true**：是。

- **false**：否。

> HTTP、HTTPS监听支持此参数。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'XForwardedForClientSourceIpsTrusted' => 
                        array (
                          'description' => '指定可信的代理IP。

应用型负载均衡ALB会从后往前遍历`X-Forwarded-For`，选取第一个不在可信IP列表中的IP作为真实的客户端IP，该IP会被用于源IP限速。',
                          'type' => 'string',
                          'example' => '10.1.1.0/24',
                        ),
                      ),
                    ),
                    'Tags' => 
                    array (
                      'description' => '标签。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签结构。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '标签键。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                            'type' => 'string',
                            'example' => 'env',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签值。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                            'type' => 'string',
                            'example' => 'product',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'MaxResults' => 
              array (
                'title' => '本次请求所返回的最大记录条数。',
                'description' => '本次请求所返回的最大记录条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'NextToken' => 
              array (
                'title' => '用来表示当前调用返回读取到的位置，空代表数据已经读取完毕。',
                'description' => '当前调用返回读取到的位置，设置为空代表数据已经读取完毕。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF3******',
              ),
              'TotalCount' => 
              array (
                'title' => '本次请求条件下的数据总量。',
                'description' => '本次请求条件下的数据总量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1000',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.LoadBalancer',
            'errorMessage' => 'Authentication is failed for %s.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Listeners\\": [\\n    {\\n      \\"DefaultActions\\": [\\n        {\\n          \\"ForwardGroupConfig\\": {\\n            \\"ServerGroupTuples\\": [\\n              {\\n                \\"ServerGroupId\\": \\"sgp-i5qt20******\\"\\n              }\\n            ]\\n          },\\n          \\"Type\\": \\"ForwardGroup\\"\\n        }\\n      ],\\n      \\"GzipEnabled\\": false,\\n      \\"Http2Enabled\\": false,\\n      \\"IdleTimeout\\": 3,\\n      \\"ListenerDescription\\": \\"HTTP_80\\",\\n      \\"ListenerId\\": \\"lsn-o4u54y73wq7b******\\",\\n      \\"ListenerPort\\": 80,\\n      \\"ListenerProtocol\\": \\"HTTP\\",\\n      \\"ListenerStatus\\": \\"Running\\",\\n      \\"LoadBalancerId\\": \\"alb-bd6oylbckp6k9x****\\",\\n      \\"LogConfig\\": {\\n        \\"AccessLogRecordCustomizedHeadersEnabled\\": true,\\n        \\"AccessLogTracingConfig\\": {\\n          \\"TracingEnabled\\": true,\\n          \\"TracingSample\\": 100,\\n          \\"TracingType\\": \\"Zipkin\\"\\n        }\\n      },\\n      \\"QuicConfig\\": {\\n        \\"QuicListenerId\\": \\"lsn-o4u54y73wq7b******\\",\\n        \\"QuicUpgradeEnabled\\": true\\n      },\\n      \\"RequestTimeout\\": 34,\\n      \\"SecurityPolicyId\\": \\"tls_cipher_policy_1_1\\",\\n      \\"XForwardedForConfig\\": {\\n        \\"XForwardedForClientCertClientVerifyAlias\\": \\"test_client-verify-alias_123456\\",\\n        \\"XForwardedForClientCertClientVerifyEnabled\\": true,\\n        \\"XForwardedForClientCertFingerprintAlias\\": \\"test_finger-print-alias_123456\\",\\n        \\"XForwardedForClientCertFingerprintEnabled\\": true,\\n        \\"XForwardedForClientCertIssuerDNAlias\\": \\"test_issue-dn-alias_123456\\",\\n        \\"XForwardedForClientCertIssuerDNEnabled\\": true,\\n        \\"XForwardedForClientCertSubjectDNAlias\\": \\"test_subject-dn-alias_123456\\",\\n        \\"XForwardedForClientCertSubjectDNEnabled\\": true,\\n        \\"XForwardedForClientSrcPortEnabled\\": true,\\n        \\"XForwardedForEnabled\\": true,\\n        \\"XForwardedForProtoEnabled\\": true,\\n        \\"XForwardedForSLBIdEnabled\\": true,\\n        \\"XForwardedForSLBPortEnabled\\": true,\\n        \\"XForwardedForClientSourceIpsEnabled\\": false,\\n        \\"XForwardedForClientSourceIpsTrusted\\": \\"10.1.1.0/24\\"\\n      },\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"env\\",\\n          \\"Value\\": \\"product\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"MaxResults\\": 50,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF3******\\",\\n  \\"TotalCount\\": 1000\\n}","errorExample":""},{"type":"xml","example":"<ListListenersResponse>\\n    <Listeners>\\n        <DefaultActions>\\n            <ForwardGroupConfig>\\n                <ServerGroupTuples>\\n                    <ServerGroupId>rsp-cige6j****</ServerGroupId>\\n                </ServerGroupTuples>\\n            </ForwardGroupConfig>\\n            <Type>ForwardGroup</Type>\\n        </DefaultActions>\\n        <GzipEnabled>false</GzipEnabled>\\n        <Http2Enabled>false</Http2Enabled>\\n        <IdleTimeout>3</IdleTimeout>\\n        <ListenerDescription>HTTP_80</ListenerDescription>\\n        <ListenerId>lsr-bp1bpn0kn908w4nbw****</ListenerId>\\n        <ListenerPort>80</ListenerPort>\\n        <ListenerProtocol>HTTP</ListenerProtocol>\\n        <ListenerStatus>Running</ListenerStatus>\\n        <LoadBalancerId>alb-bd6oylbckp6k9x****</LoadBalancerId>\\n        <LogConfig>\\n            <AccessLogRecordCustomizedHeadersEnabled>true</AccessLogRecordCustomizedHeadersEnabled>\\n            <AccessLogTracingConfig>\\n                <TracingEnabled>true</TracingEnabled>\\n                <TracingSample>100</TracingSample>\\n                <TracingType>Zipkin</TracingType>\\n            </AccessLogTracingConfig>\\n        </LogConfig>\\n        <QuicConfig>\\n            <QuicListenerId>lsr-bp1bpn908w4nbw****</QuicListenerId>\\n            <QuicUpgradeEnabled>true</QuicUpgradeEnabled>\\n        </QuicConfig>\\n        <RequestTimeout>34</RequestTimeout>\\n        <SecurityPolicyId>tls_cipher_policy_1_1</SecurityPolicyId>\\n        <XForwardedForConfig>\\n            <XForwardedForClientCertClientVerifyAlias>test_client-verify-alias_123456</XForwardedForClientCertClientVerifyAlias>\\n            <XForwardedForClientCertClientVerifyEnabled>true</XForwardedForClientCertClientVerifyEnabled>\\n            <XForwardedForClientCertFingerprintAlias>test_finger-print-alias_123456</XForwardedForClientCertFingerprintAlias>\\n            <XForwardedForClientCertFingerprintEnabled>true</XForwardedForClientCertFingerprintEnabled>\\n            <XForwardedForClientCertIssuerDNAlias>test_issue-dn-alias_123456</XForwardedForClientCertIssuerDNAlias>\\n            <XForwardedForClientCertIssuerDNEnabled>true</XForwardedForClientCertIssuerDNEnabled>\\n            <XForwardedForClientCertSubjectDNAlias>test_subject-dn-alias_123456</XForwardedForClientCertSubjectDNAlias>\\n            <XForwardedForClientCertSubjectDNEnabled>true</XForwardedForClientCertSubjectDNEnabled>\\n            <XForwardedForClientSrcPortEnabled>true</XForwardedForClientSrcPortEnabled>\\n            <XForwardedForEnabled>true</XForwardedForEnabled>\\n            <XForwardedForProtoEnabled>true</XForwardedForProtoEnabled>\\n            <XForwardedForSLBIdEnabled>true</XForwardedForSLBIdEnabled>\\n            <XForwardedForSLBPortEnabled>true</XForwardedForSLBPortEnabled>\\n            <XForwardedForClientSourceIpsEnabled>false</XForwardedForClientSourceIpsEnabled>\\n            <XForwardedForClientSourceIpsTrusted>10.1.1.0/24</XForwardedForClientSourceIpsTrusted>\\n        </XForwardedForConfig>\\n    </Listeners>\\n    <MaxResults>50</MaxResults>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <TotalCount>1000</TotalCount>\\n</ListListenersResponse>","errorExample":""}]',
      'title' => '查询监听',
    ),
    'StartListener' => 
    array (
      'summary' => '启动指定的监听。',
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
          'name' => 'ListenerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '监听id',
            'description' => '应用型负载均衡实例监听的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lsn-o4u54y73wq7b******',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B******',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会启动监听。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码**DryRunOperation**。

- **false**（默认值）：发送正常请求，通过检查后返回`HTTP_2xx`状态码并直接进行操作。',
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
            'description' => '启动监听。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF******',
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
            'errorCode' => 'IncorrectStatus.LoadBalancer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.LoadBalancer',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
          2 => 
          array (
            'errorCode' => 'IncorrectStatus.Listener',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceInConfiguring.Listener',
            'errorMessage' => 'The specified resource of %s is being configured, please try again later.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Listener',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF******\\"\\n}","errorExample":""},{"type":"xml","example":"<StartListenerResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n</StartListenerResponse>","errorExample":""}]',
      'title' => '启动监听',
      'description' => '**StartListener**接口属于异步接口，即系统返回一个请求ID，但该监听尚未启动成功，系统后台的启动任务仍在进行。您可以调用[GetListenerAttribute](~~2254865~~)查询监听的启动状态：
- 当监听处于**Configuring**状态时，表示监听正在启动中。
- 当监听处于**Running**状态时，表示监听启动成功。',
    ),
    'StopListener' => 
    array (
      'summary' => '停止指定的监听。',
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
          'name' => 'ListenerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '监听id',
            'description' => '应用型负载均衡实例的监听ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lsn-o4u54y73wq7b******',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B******',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会停止监听。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回`HTTP 2xx`状态码并直接进行操作。',
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
            'description' => '停止监听。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
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
            'errorCode' => 'IncorrectStatus.LoadBalancer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.LoadBalancer',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
          2 => 
          array (
            'errorCode' => 'IncorrectStatus.Listener',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceInConfiguring.Listener',
            'errorMessage' => 'The specified resource of %s is being configured, please try again later.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Listener',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF3******\\"\\n}","errorExample":""},{"type":"xml","example":"<StopListenerResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n</StopListenerResponse>","errorExample":""}]',
      'title' => '停止监听',
      'description' => '**StopListener**接口属于异步接口，即系统返回一个请求ID，但该监听尚未停止成功，系统后台的停止任务仍在进行。您可以调用[GetListenerAttribute](~~2254865~~)查询监听的停止状态：
- 当监听处于**Configuring**状态时，表示监听正在停止中。
- 当监听处于**Stopped**状态时，表示监听停止运行成功。',
    ),
    'UpdateListenerAttribute' => 
    array (
      'summary' => '更新监听的配置，如名称、默认动作等。',
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
          'name' => 'ListenerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '监听标识',
            'description' => '应用型负载均衡实例监听ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lsn-o4u54y73wq7b******',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B******',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求。取值：

- **true**：发送检查请求，不会更新监听的配置。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回`HTTP 2xx`状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ListenerDescription',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '监听描述',
            'description' => '自定义监听名称。

长度为2\\~256个字符，长度为2\\~256个字符，可包含英文字母、数字、中文、半角逗号（,）、半角句号（.）、半角分号（;）、正斜线（/）、at（@）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'HTTP_80',
          ),
        ),
        4 => 
        array (
          'name' => 'RequestTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '请求超时时间',
            'description' => '指定请求超时时间。单位：秒。取值范围：**1~180**。

如果在超时时间内后端服务器一直没有响应，负载均衡将放弃等待，给客户端返回`HTTP 504`错误码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '3',
          ),
        ),
        5 => 
        array (
          'name' => 'IdleTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '连接空闲超时时间',
            'description' => '指定连接空闲超时时间。单位：秒。取值范围：**1~60**。

如果在超时时间内一直没有访问请求，负载均衡会暂时中断当前连接，直到一下次请求来临时重新建立新的连接。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '15',
          ),
        ),
        6 => 
        array (
          'name' => 'GzipEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否开启Gzip压缩',
            'description' => '是否开启Gzip压缩，对特定文件类型进行压缩。取值：

- **true**：是。
- **false**：否。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        7 => 
        array (
          'name' => 'Http2Enabled',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否开启HTTP/2特性',
            'description' => '是否开启HTTP/2特性。取值：
- **true**：是。
- **false**：否。

> 仅HTTPS监听支持此参数。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        8 => 
        array (
          'name' => 'SecurityPolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '安全策略',
            'description' => '安全策略，支持系统安全策略和自定义安全策略。

> 仅HTTPS监听支持此参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'tls_cipher_policy_1_0',
          ),
        ),
        9 => 
        array (
          'name' => 'CaEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否开启双向认证',
            'description' => '是否开启双向认证。取值：
- **true**：是。
- **false**：否。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        10 => 
        array (
          'name' => 'XForwardedForConfig',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => 'XForward字段相关的配置',
            'description' => 'XForwardedFor相关属性配置。',
            'type' => 'object',
            'properties' => 
            array (
              'XForwardedForClientCertClientVerifyAlias' => 
              array (
                'title' => '自定义HEADER头名称，只有当XForwardedForClientCertClientVerifyEnabled的值为true的时候，此值才会生效；否则该值不会生效。HTTPS监听有效',
                'description' => '自定义头字段名称，只有当**XForwardedForClientCertClientVerifyEnabled**的值为**true**时，此值才会生效。

取值限制：长度1\\~40个字符。支持字母a~z、短划线（-）、下划线（_）和数字。

> 仅HTTPS监听支持此参数。',
                'type' => 'string',
                'required' => false,
                'example' => 'test_client-verify-alias_123456',
              ),
              'XForwardedForClientCertClientVerifyEnabled' => 
              array (
                'title' => '是否通过X-Forwarded-Clientcert-clientverify  头字段获取对访问负载均衡实例客户端证书的校验结果。HTTPS监听有效。',
                'description' => '是否通过`X-Forwarded-Clientcert-clientverify`头字段获取对访问负载均衡实例客户端证书的校验结果。取值：
- **true**：是。
- **false**：否。

> 仅HTTPS监听支持此参数。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'XForwardedForClientCertFingerprintAlias' => 
              array (
                'title' => '自定义HEADER头名称，只有当XForwardedForClientCertFingerprintEnabled的值为true的时候，此值才会生效；否则该值不会生效。HTTPS监听有效',
                'description' => '自定义头字段名称，只有当**XForwardedForClientCertFingerprintEnabled**的值为**true**时生效。

取值限制：长度为1\\~40个字符。支持字母a~z、短划线（-）、下划线（_）和数字。

> 仅HTTPS监听支持此参数。',
                'type' => 'string',
                'required' => false,
                'example' => 'test_finger-print-alias_123456',
              ),
              'XForwardedForClientCertFingerprintEnabled' => 
              array (
                'title' => '是否通过X-Forwarded-Clientcert-fingerprint 头字段获取访问负载均衡实例客户端证书的指纹取值，HTTPS监听有效。',
                'description' => '是否通过`X-Forwarded-Clientcert-fingerprint`头字段获取访问负载均衡实例客户端证书的指纹取值。取值：
- **true**：是。
- **false**：否。

> 仅HTTPS监听支持此参数。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'XForwardedForClientCertIssuerDNAlias' => 
              array (
                'title' => '自定义HEADER头名称，只有当XForwardedForClientCertIssuerDNEnabled的值为‘On’的时候，此值才会生效；否则该值不会生效。HTTPS监听有效',
                'description' => '自定义头字段名称，只有当**XForwardedForClientCertIssuerDNEnabled**的值为**true**时才生效。

取值限制：长度为1\\~40个字符。支持字母a~z、短划线（-）、下划线（_）和数字。

> 仅HTTPS监听支持此参数。',
                'type' => 'string',
                'required' => false,
                'example' => 'test_issue-dn-alias_123456',
              ),
              'XForwardedForClientCertIssuerDNEnabled' => 
              array (
                'title' => '是否通过 X-Forwarded-Clientcert-issuerdn 头字段获取访问负载均衡实例客户端证书的发行者信息。HTTPS监听有效。',
                'description' => '是否通过`X-Forwarded-Clientcert-issuerdn`头字段获取访问负载均衡实例客户端证书的发行者信息。取值：
- **true**：是。
- **false**：否。

> 仅HTTPS监听支持此参数。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'XForwardedForClientCertSubjectDNAlias' => 
              array (
                'title' => '自定义HEADER头名称，只有当XForwardedForClientCertSubjectDNEnabled的值为true的时候，此值才会生效；否则该值不会生效。HTTPS监听有效',
                'description' => '自定义头字段名称，只有当**XForwardedForClientCertSubjectDNEnabled**的值为**true**时才生效。

取值限制：长度为1\\~40字符。支持字母a~z、短划线（-）、下划线（_）和数字。

> 仅HTTPS监听支持此参数。',
                'type' => 'string',
                'required' => false,
                'example' => 'test_subject-dn-alias_123456',
              ),
              'XForwardedForClientCertSubjectDNEnabled' => 
              array (
                'title' => '是否通过X-Forwarded-Clientcert-subjectdn  头字段获取访问负载均衡实例客户端证书的所有者信息。HTTPS监听有效。',
                'description' => '是否通过`X-Forwarded-Clientcert-subjectdn`头字段获取访问负载均衡实例客户端证书的所有者信息。取值：
- **true**：是。
- **false**：否。

> 仅HTTPS监听支持此参数。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'XForwardedForClientSrcPortEnabled' => 
              array (
                'title' => '是否通过X-Forwarded-Client-Port 头字段获取访问负载均衡实例客户端的端口。HTTPS监听有效。',
                'description' => '是否通过`X-Forwarded-Client-Port`头字段获取访问负载均衡实例客户端的端口。取值：
- **true**：是。
- **false**：否。

> HTTP和HTTPS监听支持此参数。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'XForwardedForEnabled' => 
              array (
                'title' => '是否开启通过X-Forwarded-For头字段获取来访者真实 IP',
                'description' => '是否开启通过`X-Forwarded-For`头字段获取来访者真实IP。取值：
- **true**：是。
- **false**：否。

> HTTP和HTTPS监听支持此参数。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'XForwardedForProtoEnabled' => 
              array (
                'title' => '是否通过X-Forwarded-Proto头字段获取负载均衡实例的监听协议。',
                'description' => '是否通过`X-Forwarded-Proto`头字段获取负载均衡实例的监听协议。取值：
- **true**：是。
- **false**：否。

> HTTP、HTTPS和QUIC监听支持此参数。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'XForwardedForSLBIdEnabled' => 
              array (
                'title' => '是否通过SLB-ID头字段获取负载均衡实例ID。',
                'description' => '是否通过`SLB-ID`头字段获取负载均衡实例ID。取值：
- **true**：是。
- **false**：否。

> HTTP、HTTPS和QUIC监听支持此参数。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'XForwardedForSLBPortEnabled' => 
              array (
                'title' => '是否通过X-Forwarded-Port 头字段获取负载均衡实例的监听端口。HTTPS监听有效。',
                'description' => '是否通过`X-Forwarded-Port`头字段获取负载均衡实例的监听端口。取值：
- **true**：是。
- **false**：否。

> HTTP、HTTPS和QUIC监听支持此参数。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'XForwardedForClientSourceIpsEnabled' => 
              array (
                'description' => '是否允许ALB从X-Forwarded-For头字段中查找真实客户端IP。取值：

- **true**：是。
- **false**：否。

> HTTP、HTTPS监听支持此参数。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'XForwardedForClientSourceIpsTrusted' => 
              array (
                'description' => '指定可信的代理IP。

应用型负载均衡ALB会从后往前遍历`X-Forwarded-For`，选取第一个不在可信IP列表中的IP作为真实的客户端IP，该IP会被用于源IP限速。',
                'type' => 'string',
                'required' => false,
                'example' => '10.1.1.0/24',
              ),
            ),
            'required' => false,
          ),
        ),
        11 => 
        array (
          'name' => 'QuicConfig',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => 'HTTPS启用QUIC时相关属性',
            'description' => '启用关联QUIC监听时的配置信息。',
            'type' => 'object',
            'properties' => 
            array (
              'QuicListenerId' => 
              array (
                'title' => '需要关联的QUIC监听ID，HTTPS监听时有效，QuicUpgradeEnabled为true时必选',
                'description' => '需要关联的QUIC监听ID。**QuicUpgradeEnabled**值为**true**时必选。HTTPS监听时有效。

> 原始监听和关联的QUIC监听必须属于同一个ALB实例，并且此QUIC监听之前没有被关联过。',
                'type' => 'string',
                'required' => false,
                'example' => 'lsn-333',
              ),
              'QuicUpgradeEnabled' => 
              array (
                'title' => '是否开启quic升级，HTTPS监听时有效',
                'description' => '是否开启QUIC升级。取值：
- **true**：是。
- **false**：否。

> 仅HTTPS监听时有效。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
            ),
            'required' => false,
          ),
        ),
        12 => 
        array (
          'name' => 'Certificates',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '监听默认服务器证书列表，N当前取值范围为1',
            'description' => '证书列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '证书结构。',
              'type' => 'object',
              'properties' => 
              array (
                'CertificateId' => 
                array (
                  'title' => '正式标识',
                  'description' => '证书ID，当前仅支持服务器证书。最多支持添加20个证书ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '123157******',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 2,
            'minItems' => 1,
          ),
        ),
        13 => 
        array (
          'name' => 'CaCertificates',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '监听默认CA证书列表，N当前取值范围为1',
            'description' => 'CA证书信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'CA证书信息。',
              'type' => 'object',
              'properties' => 
              array (
                'CertificateId' => 
                array (
                  'title' => '正式标识',
                  'description' => 'CA证书ID。目前仅支持添加1个CA证书。

> 当**CaEnabled**参数取值为**true**的时候，此参数为必填。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '123359******',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 1,
            'minItems' => 1,
          ),
        ),
        14 => 
        array (
          'name' => 'DefaultActions',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '监听默认动作',
            'description' => '默认规则动作列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '默认规则动作结构。',
              'type' => 'object',
              'properties' => 
              array (
                'ForwardGroupConfig' => 
                array (
                  'title' => '转发组',
                  'description' => '转发动作对应的配置，**Type**类型为**ForwardGroup**时必填且有效。最多支持添加20个转发动作对应的配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ServerGroupTuples' => 
                    array (
                      'title' => '服务器组列表',
                      'description' => '转发目标服务器元组列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '转发目标服务器元组结构。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ServerGroupId' => 
                          array (
                            'title' => '服务器组ID',
                            'description' => '转发到的目的服务器组ID。',
                            'type' => 'string',
                            'required' => true,
                            'example' => 'sgp-i5qt20******',
                          ),
                        ),
                        'required' => false,
                      ),
                      'required' => true,
                    ),
                  ),
                  'required' => false,
                ),
                'Type' => 
                array (
                  'title' => '动作类型',
                  'description' => '动作类型。最多支持添加1个动作类型。

取值：**ForwardGroup**，表示转发至多个服务器组。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'ForwardGroup',
                ),
              ),
              'required' => false,
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
            'description' => '返回数据结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务Id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF******',
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
            'errorCode' => 'IncorrectStatus.LoadBalancer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.LoadBalancer',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
          2 => 
          array (
            'errorCode' => 'IncorrectStatus.Listener',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.CrossLoadBalancerQUICListener',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          4 => 
          array (
            'errorCode' => 'ResourceAlreadyAssociated.Listener',
            'errorMessage' => 'The specified resource %s is already associated.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.GRPCServerGroup',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          6 => 
          array (
            'errorCode' => 'ResourceAlreadyAssociated.Certificate',
            'errorMessage' => 'The specified resource %s is already associated.',
          ),
          7 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.SecurityPolicyAttachedNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          8 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.ServerGroupAttachedNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          9 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.LoadBalancerServersNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          10 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.ServerAddedNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          11 => 
          array (
            'errorCode' => 'OperationDenied.ServerGroupProtocolNotSupport',
            'errorMessage' => 'The operation is not allowed because of ServerGroupProtocolNotSupport.',
          ),
          12 => 
          array (
            'errorCode' => 'UnsupportedFeature.FullTraceHttps',
            'errorMessage' => 'The feature of FullTraceHttps is not supported for current instance.',
          ),
          13 => 
          array (
            'errorCode' => 'ResourceInConfiguring.Listener',
            'errorMessage' => 'The specified resource of %s is being configured, please try again later.',
          ),
          14 => 
          array (
            'errorCode' => 'Mismatch.VpcId',
            'errorMessage' => 'The %s is mismatched for %s and %s.',
          ),
          15 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'Invalid parameter, please check the parameter input.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.LoadBalancer',
            'errorMessage' => 'Authentication is failed for %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Listener',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.ServerGroup',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotFound.SecurityPolicy',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.Certificate',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF******\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateListenerAttributeResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n</UpdateListenerAttributeResponse>","errorExample":""}]',
      'title' => '更新监听的配置',
      'description' => '**UpdateListenerAttribute**接口属于异步接口，即系统返回一个请求ID，但该监听的配置尚未更新成功，系统后台的更新任务仍在进行。您可以调用[GetListenerAttribute](~~2254865~~)查询监听的配置的更新状态：
- 当监听器处于**Configuring**状态时，表示监听的配置正在更新中。
- 当监听器处于**Running**状态时，表示监听的配置更新成功。',
    ),
    'UpdateListenerLogConfig' => 
    array (
      'summary' => '更新监听日志相关属性，如访问日志等。',
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
          'name' => 'ListenerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '监听标识',
            'description' => '应用型负载均衡实例监听ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lsn-o4u54y73wq7b******',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B******',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会更新监听的日志配置。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回**HTTP_2xx**状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'AccessLogRecordCustomizedHeadersEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否开启携带自定义Header',
            'description' => '访问日志是否开启携带自定义头字段。取值：

- **true**：是。
- **false**（默认值）：否。

> 只有实例访问日志开关**AccessLogEnabled**打开时，才能设置此参数为**true**。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'AccessLogTracingConfig',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '访问日志xtrace字段相关的配置',
            'description' => 'Xtrace配置信息。',
            'type' => 'object',
            'properties' => 
            array (
              'TracingEnabled' => 
              array (
                'title' => 'Xtrace功能状态',
                'description' => 'Xtrace功能状态。取值：

- **true**：是。
- **false**（默认值）：否。

> 只有实例访问日志开关**AccessLogEnabled**打开时，才能设置此参数为**true**。',
                'type' => 'boolean',
                'required' => true,
                'example' => 'true',
              ),
              'TracingSample' => 
              array (
                'title' => 'xtrace的采样率',
                'description' => 'Xtrace采样率。

取值范围：**1~10000**。

> **TracingEnabled**为**true**时有效。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '100',
              ),
              'TracingType' => 
              array (
                'title' => 'xtrace的类型',
                'description' => 'Xtrace类型，取值为**Zipkin**。

> **TracingEnabled**为**true**时有效。',
                'type' => 'string',
                'required' => false,
                'example' => 'Zipkin',
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
            'title' => 'Schema of Response',
            'description' => '更新监听的日志配置。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务Id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
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
            'errorCode' => 'IncorrectBusinessStatus.LoadBalancer',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectStatus.LoadBalancer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          2 => 
          array (
            'errorCode' => 'IncorrectStatus.Listener',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.AccessLogDisabled',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          4 => 
          array (
            'errorCode' => 'ResourceInConfiguring.Listener',
            'errorMessage' => 'The specified resource of %s is being configured, please try again later.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Listener',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF3******\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateListenerLogConfigResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n</UpdateListenerLogConfigResponse>","errorExample":""}]',
      'title' => '更新监听日志相关属性',
      'description' => '**UpdateListenerLogConfig**接口属于异步接口，即系统返回一个请求ID，但该监听的日志配置尚未更新成功，系统后台的更新任务仍在进行。您可以调用[GetListenerAttribute](~~2254865~~)查询监听的日志配置的更新状态：
- 当监听器处于**Configuring**状态时，表示监听的日志配置正在更新中。
- 当监听器处于**Running**状态时，表示监听的日志配置更新成功。
> 只有开启实例访问日志后，才能更新监听的日志配置。',
    ),
    'GetListenerHealthStatus' => 
    array (
      'summary' => '查询监听及其转发规则的健康检查状态。',
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
          'name' => 'ListenerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '监听Id',
            'description' => '实例的监听ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lsn-o4u54y73wq7b******',
          ),
        ),
        1 => 
        array (
          'name' => 'IncludeRule',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否包含转发规则健康检查结果',
            'description' => '是否包含转发规则的检查结果。取值：

- **true**：是。
- **false**（默认值）：否。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。',
            'type' => 'string',
            'required' => false,
            'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
          ),
        ),
        3 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的最大条目数。取值范围：**1**~**30**，默认值为**20**。',
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
            'description' => '查询监听及其相应配置的转发规则的健康检查状态。',
            'type' => 'object',
            'properties' => 
            array (
              'ListenerHealthStatus' => 
              array (
                'title' => '监听健康检查结果',
                'description' => '监听的服务器组健康检查状态列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '监听的服务器组健康检查状态结构。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ListenerId' => 
                    array (
                      'title' => '监听Id',
                      'description' => '实例的监听ID。',
                      'type' => 'string',
                      'example' => 'lsn-o4u54y73wq7b******',
                    ),
                    'ListenerPort' => 
                    array (
                      'title' => '监听的端口号',
                      'description' => '监听的端口号。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '80',
                    ),
                    'ListenerProtocol' => 
                    array (
                      'title' => '监听的协议',
                      'description' => '监听的协议。',
                      'type' => 'string',
                      'example' => 'http',
                    ),
                    'ServerGroupInfos' => 
                    array (
                      'title' => '服务器组健康检查结果',
                      'description' => '服务器组信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '服务器组信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'HealthCheckEnabled' => 
                          array (
                            'title' => '健康检查开启/关闭',
                            'description' => '健康检查开启状态。取值： **on**，表示开启健康检查。',
                            'type' => 'string',
                            'example' => 'on',
                          ),
                          'NonNormalServers' => 
                          array (
                            'title' => '处于非正常状态的后端服务器',
                            'description' => '非正常状态的后端服务器列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '非正常状态的后端服务器列表。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Port' => 
                                array (
                                  'title' => '后端服务器端口',
                                  'description' => '后端服务器端口。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '90',
                                ),
                                'Reason' => 
                                array (
                                  'title' => 'status为非正常状态时的详细异常原因',
                                  'description' => '非正常状态的原因。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'ActualResponse' => 
                                    array (
                                      'title' => '后端实际的返回码信息',
                                      'description' => '后端服务器实际的返回码信息，例如，**302**。

> `ReasonCode`为**RESPONSE_MISMATCH**才该返回值。',
                                      'type' => 'string',
                                      'example' => '302',
                                    ),
                                    'ExpectedResponse' => 
                                    array (
                                      'title' => '用户预期的后端返回码信息',
                                      'description' => '用户预期的后端服务器返回码信息。

取值：**HTTP\\_2xx**、**HTTP\\_3xx**、**HTTP\\_4xx**和**HTTP\\_5xx**。多个返回码之间用半角逗号（,）分隔。

> **ReasonCode**为**RESPONSE_MISMATCH**才返回该值。',
                                      'type' => 'string',
                                      'example' => 'HTTP_2xx',
                                    ),
                                    'ReasonCode' => 
                                    array (
                                      'title' => '失败reasonCode',
                                      'description' => '**Status**为异常状态时的详细原因，目前仅HTTP和HTTPS的监听与转发规则支持查看异常状态原因：
- **CONNECT_TIMEOUT**：负载均衡健康检查时向后端服务器建立连接超时。

- **CONNECT_FAILED**：负载均衡健康检查时向后端服务器建立连接失败。

- **RECV_RESPONSE_FAILED**：负载均衡健康检查时从后端服务器接收响应失败。

- **RECV_RESPONSE_TIMEOUT**：负载均衡健康检查时从后端服务器接收响应超时。

- **SEND_REQUEST_FAILED**：负载均衡健康检查时向后端服务器发送请求失败。

- **SEND_REQUEST_TIMEOUT**：负载均衡健康检查时向后端服务器发送请求超时。

- **RESPONSE_FORMAT_ERROR**：负载均衡健康检查时从后端服务器接收响应格式错误。

- **RESPONSE_MISMATCH**：负载均衡健康检查时从后端服务器接收的响应码与预期配置返回码不一致。',
                                      'type' => 'string',
                                      'example' => 'RESPONSE_MISMATCH',
                                    ),
                                  ),
                                ),
                                'ServerId' => 
                                array (
                                  'title' => '后端服务器id',
                                  'description' => '后端服务器ID。',
                                  'type' => 'string',
                                  'example' => 'i-uf62h8v******',
                                ),
                                'ServerIp' => 
                                array (
                                  'title' => '后端服务器Ip',
                                  'description' => '后端服务器IP。',
                                  'type' => 'string',
                                  'example' => '192.168.8.10',
                                ),
                                'Status' => 
                                array (
                                  'title' => '健康检查状态',
                                  'description' => '健康检查状态。取值：

- **Initial**：初始化中，表示负载均衡实例配置了健康检查，但查不到数据。

- **Unhealthy**：异常，表示连续上报不健康的状态。

- **Unused**：未使用，表示后端服务器的权重为0。

- **Unavailable**：未开启，表示未开启健康检查。
',
                                  'type' => 'string',
                                  'example' => 'Initial',
                                ),
                              ),
                            ),
                          ),
                          'ServerGroupId' => 
                          array (
                            'title' => '服务器组ID',
                            'description' => '关联的服务器组ID。',
                            'type' => 'string',
                            'example' => 'sgp-8ilqs4axp6******',
                          ),
                          'ActionType' => 
                          array (
                            'title' => '服务器组使用类型',
                            'description' => '服务器组使用类型。',
                            'type' => 'string',
                            'example' => 'TrafficMirror',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求Id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876F******',
              ),
              'RuleHealthStatus' => 
              array (
                'title' => '转发规则健康检查结果',
                'description' => '转发规则的健康状态列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '转发规则的健康状态结构。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RuleId' => 
                    array (
                      'title' => '转发规则ID',
                      'description' => '转发规则ID。',
                      'type' => 'string',
                      'example' => 'rule-hp34s2h0xx1ht4nwo****',
                    ),
                    'ServerGroupInfos' => 
                    array (
                      'title' => '服务器组健康检查结果',
                      'description' => '服务器组列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '服务器组结构。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'HealthCheckEnabled' => 
                          array (
                            'title' => '健康检查开启/关闭',
                            'description' => '健康检查开启状态。取值： **on**，表示开启健康检查。',
                            'type' => 'string',
                            'example' => 'on',
                          ),
                          'NonNormalServers' => 
                          array (
                            'title' => '处于非正常状态的后端服务器',
                            'description' => '非正常状态的后端服务器列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '非正常状态的后端服务器列表。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Port' => 
                                array (
                                  'title' => '后端服务器端口',
                                  'description' => '后端服务器端口。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '90',
                                ),
                                'Reason' => 
                                array (
                                  'title' => 'status为非正常状态时的详细异常原因',
                                  'description' => '非正常状态的原因。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'ActualResponse' => 
                                    array (
                                      'title' => '后端实际的返回码信息',
                                      'description' => '后端服务器实际的返回码信息，例如，**302**。

> **ReasonCode**为**RESPONSE_MISMATCH**才有值。',
                                      'type' => 'string',
                                      'example' => '302',
                                    ),
                                    'ExpectedResponse' => 
                                    array (
                                      'title' => '用户预期的后端返回码信息',
                                      'description' => '用户预期的后端服务器返回码信息。

取值：**HTTP\\_2xx**、**HTTP\\_3xx**、**HTTP\\_4xx**和**HTTP\\_5xx**。多个返回码之间用半角逗号（,）分隔。

> **ReasonCode**为**RESPONSE_MISMATCH**才有值。',
                                      'type' => 'string',
                                      'example' => 'HTTP_2xx',
                                    ),
                                    'ReasonCode' => 
                                    array (
                                      'title' => '失败reasonCode',
                                      'description' => '**Status**为异常状态时的详细原因，目前仅HTTP和HTTPS的监听与转发规则支持查看异常状态原因：
- **CONNECT_TIMEOUT**：负载均衡健康检查时向后端服务器建立连接超时。

- **CONNECT_FAILED**：负载均衡健康检查时向后端服务器建立连接失败。

- **RECV_RESPONSE_FAILED**：负载均衡健康检查时从后端服务器接收响应失败。

- **RECV_RESPONSE_TIMEOUT**：负载均衡健康检查时从后端服务器接收响应超时。

- **SEND_REQUEST_FAILED**：负载均衡健康检查时向后端服务器发送请求失败。

- **SEND_REQUEST_TIMEOUT**：负载均衡健康检查时向后端服务器发送请求超时。

- **RESPONSE_FORMAT_ERROR**：负载均衡健康检查时从后端服务器接收响应格式错误。

- **RESPONSE_MISMATCH**：负载均衡健康检查时从后端服务器接收的响应码与预期配置返回码不一致。',
                                      'type' => 'string',
                                      'example' => 'RESPONSE_MISMATCH',
                                    ),
                                  ),
                                ),
                                'ServerId' => 
                                array (
                                  'title' => '后端服务器Id',
                                  'description' => '后端服务器ID。',
                                  'type' => 'string',
                                  'example' => 'i-uf62h8v******',
                                ),
                                'ServerIp' => 
                                array (
                                  'title' => '后端服务器ID',
                                  'description' => '后端服务器组IP。',
                                  'type' => 'string',
                                  'example' => '192.168.2.11',
                                ),
                                'Status' => 
                                array (
                                  'title' => '健康检查状态',
                                  'description' => '健康检查状态。取值：

- **Initial**：初始化中，表示负载均衡实例配置了健康检查，但查不到数据。

- **Unhealthy**：异常，表示连续上报不健康的状态。

- **Unused**：未使用，表示后端服务器的权重为0。

- **Unavailable**：未开启，表示未开启健康检查。
',
                                  'type' => 'string',
                                  'example' => 'Initial',
                                ),
                              ),
                            ),
                          ),
                          'ServerGroupId' => 
                          array (
                            'title' => '服务器组ID',
                            'description' => '关联的服务器组ID。',
                            'type' => 'string',
                            'example' => 'sgp-8ilqs4axp6******',
                          ),
                          'ActionType' => 
                          array (
                            'title' => '服务器组使用类型',
                            'description' => '服务器组使用类型。',
                            'type' => 'string',
                            'example' => 'TrafficMirror',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'title' => '下一页标识',
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.LoadBalancer',
            'errorMessage' => 'Authentication is failed for %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.LoadBalancer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.Listener',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ListenerHealthStatus\\": [\\n    {\\n      \\"ListenerId\\": \\"lsn-o4u54y73wq7b******\\",\\n      \\"ListenerPort\\": 80,\\n      \\"ListenerProtocol\\": \\"http\\",\\n      \\"ServerGroupInfos\\": [\\n        {\\n          \\"HealthCheckEnabled\\": \\"on\\",\\n          \\"NonNormalServers\\": [\\n            {\\n              \\"Port\\": 90,\\n              \\"Reason\\": {\\n                \\"ActualResponse\\": \\"302\\",\\n                \\"ExpectedResponse\\": \\"HTTP_2xx\\",\\n                \\"ReasonCode\\": \\"RESPONSE_MISMATCH\\"\\n              },\\n              \\"ServerId\\": \\"i-uf62h8v******\\",\\n              \\"ServerIp\\": \\"192.168.8.10\\",\\n              \\"Status\\": \\"Initial\\"\\n            }\\n          ],\\n          \\"ServerGroupId\\": \\"sgp-8ilqs4axp6******\\",\\n          \\"ActionType\\": \\"TrafficMirror\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876F******\\",\\n  \\"RuleHealthStatus\\": [\\n    {\\n      \\"RuleId\\": \\"rule-hp34s2h0xx1ht4nwo****\\",\\n      \\"ServerGroupInfos\\": [\\n        {\\n          \\"HealthCheckEnabled\\": \\"on\\",\\n          \\"NonNormalServers\\": [\\n            {\\n              \\"Port\\": 90,\\n              \\"Reason\\": {\\n                \\"ActualResponse\\": \\"302\\",\\n                \\"ExpectedResponse\\": \\"HTTP_2xx\\",\\n                \\"ReasonCode\\": \\"RESPONSE_MISMATCH\\"\\n              },\\n              \\"ServerId\\": \\"i-uf62h8v******\\",\\n              \\"ServerIp\\": \\"192.168.2.11\\",\\n              \\"Status\\": \\"Initial\\"\\n            }\\n          ],\\n          \\"ServerGroupId\\": \\"sgp-8ilqs4axp6******\\",\\n          \\"ActionType\\": \\"TrafficMirror\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\"\\n}","errorExample":""},{"type":"xml","example":"<GetListenerHealthStatusResponse>\\n    <ListenerHealthStatus>\\n        <ListenerId>lsr-bp1bpn0kn908w4nbw****</ListenerId>\\n        <ListenerPort>80</ListenerPort>\\n        <ListenerProtocol>http</ListenerProtocol>\\n        <ServerGroupInfos>\\n            <HealthCheckEnabled>on</HealthCheckEnabled>\\n            <NonNormalServers>\\n                <Port>90</Port>\\n                <Reason>\\n                    <ActualResponse>302</ActualResponse>\\n                    <ExpectedResponse>HTTP_2xx</ExpectedResponse>\\n                    <ReasonCode>RESPONSE_MISMATCH</ReasonCode>\\n                </Reason>\\n                <ServerId>rg-bp1bfa08ex*****</ServerId>\\n                <ServerIp>192.168.8.10</ServerIp>\\n                <Status>Initial</Status>\\n            </NonNormalServers>\\n            <ServerGroupId>vsp-bp1qjwo61pqz3ahltv****</ServerGroupId>\\n            <ActionType>TrafficMirror</ActionType>\\n        </ServerGroupInfos>\\n    </ListenerHealthStatus>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <RuleHealthStatus>\\n        <RuleId>rule-hp34s2h0xx1ht4nwo****</RuleId>\\n        <ServerGroupInfos>\\n            <HealthCheckEnabled>on</HealthCheckEnabled>\\n            <NonNormalServers>\\n                <Port>90</Port>\\n                <Reason>\\n                    <ActualResponse>302</ActualResponse>\\n                    <ExpectedResponse>HTTP_2xx</ExpectedResponse>\\n                    <ReasonCode>RESPONSE_MISMATCH</ReasonCode>\\n                </Reason>\\n                <ServerId>rg-bp1bfa08ex****</ServerId>\\n                <ServerIp>192.168.2.11</ServerIp>\\n                <Status>Initial</Status>\\n            </NonNormalServers>\\n            <ServerGroupId>vsp-bp1qjwo61pqz3ahlt****</ServerGroupId>\\n            <ActionType>TrafficMirror</ActionType>\\n        </ServerGroupInfos>\\n    </RuleHealthStatus>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n</GetListenerHealthStatusResponse>","errorExample":""}]',
      'title' => '查询健康检查',
    ),
    'AddServersToServerGroup' => 
    array (
      'summary' => '向服务器组中添加后端服务器。',
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
          'name' => 'ServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '后端服务器Id',
            'description' => '服务器组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sgp-atstuj3rtop****',
          ),
        ),
        1 => 
        array (
          'name' => 'Servers',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '后端服务器',
            'description' => '后端服务器列表， 单次调用最多支持添加200个服务器。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '后端服务器组结构体。',
              'type' => 'object',
              'properties' => 
              array (
                'Description' => 
                array (
                  'title' => '描述信息',
                  'description' => '后端服务器描述。长度为2\\~256个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）、短划线（-）、半角逗号（,）、半角分号（;）、正斜线（/）和at（@）。 单次调用最多支持添加200个服务器。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
                'Port' => 
                array (
                  'title' => '后端端口号',
                  'description' => '后端服务器使用的端口。取值范围：**1**~**65535**。 单次调用最多支持添加200个服务器。

> 当**ServerType**取值为**Ecs**、**Eni**、**Eci**、**Ip**时，该参数必传。当**ServerType**取值为**Fc**时，无需配置该参数。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'docRequired' => false,
                  'example' => '80',
                ),
                'ServerId' => 
                array (
                  'title' => '后端服务器id',
                  'description' => '后端服务器ID。 单次调用最多支持添加200个服务器。

- 当服务器组为**Instance**类型时，该参数为**Ecs**、**Eni**、**Eci**的资源Id。

- 当服务器组为**Ip**类型时，该参数为IP地址。

- 当服务器组为**Fc**时，该参数为函数计算的ARN标识。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'i-uf616vu8me******',
                ),
                'ServerIp' => 
                array (
                  'title' => '后端服务器ip',
                  'description' => '指定IP地址。 单次调用最多支持添加200个服务器。

>**ServerType**取值为**Fc**时，无需配置该参数。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '192.168.1.1',
                ),
                'ServerType' => 
                array (
                  'title' => '后端服务器类型',
                  'description' => '后端服务器类型。 单次调用最多支持添加200个服务器。取值：
- **Ecs**：ECS实例
- **Eni**：ENI弹性网卡实例
- **Eci**：ECI弹性容器
- **Ip**：IP地址
- **Fc**：函数计算',
                  'type' => 'string',
                  'required' => true,
                  'docRequired' => true,
                  'example' => 'Ecs',
                ),
                'Weight' => 
                array (
                  'title' => '后端服务器权重',
                  'description' => '后端服务器的权重，取值范围：**0**~**100**。默认值为**100**。如果设置权重为**0**，则不会将请求转发给该后端服务器。 单次调用最多支持添加200个服务器。

>**ServerType**取值为**Fc**时，无需配置该参数。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '100',
                ),
                'RemoteIpEnabled' => 
                array (
                  'title' => '是否是远端ip',
                  'description' => '是否开启远端IP功能。 单次调用最多支持添加200个服务器。取值：

- **true**：开启。

- **false**：不开启。


> 当**ServerType**取值为**Ip**时，该参数有效。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 200,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等Token',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '593B0448-D13E-4C56-AC0D-FDF0******',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'dryRun',
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会向服务器组中添加后端服务器。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
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
            'description' => '返回数据结构体',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
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
            'errorCode' => 'ResourceQuotaExceeded.ServerAddedNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectStatus.ServerGroup',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          2 => 
          array (
            'errorCode' => 'Conflict.BackendServer',
            'errorMessage' => 'There is already %s having the same configuration with %s.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.VpcVportNotFound',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          4 => 
          array (
            'errorCode' => 'IncorrectStatus.Eni',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          5 => 
          array (
            'errorCode' => 'ResourceInUse.IP',
            'errorMessage' => 'The specified resource %s is in use.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.NoAvailableVSwitch',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          7 => 
          array (
            'errorCode' => 'OperationDenied.VgwVipNotFound',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          8 => 
          array (
            'errorCode' => 'OperationDenied.CloudBox',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          9 => 
          array (
            'errorCode' => 'Mismatch.Type',
            'errorMessage' => 'The %s is mismatched for %s and %s.',
          ),
          10 => 
          array (
            'errorCode' => 'Mismatch.VpcId',
            'errorMessage' => 'The %s is mismatched for %s and %s.',
          ),
          11 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.LoadBalancerServersNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          12 => 
          array (
            'errorCode' => 'ResourceInConfiguring',
            'errorMessage' => 'The specified resource of %s is being configured. Please try again later.',
          ),
          13 => 
          array (
            'errorCode' => 'DuplicatedParam.BackendServer',
            'errorMessage' => 'The param of %s is duplicated.',
          ),
          14 => 
          array (
            'errorCode' => 'OperationDenied.EciNotSupportJobType',
            'errorMessage' => 'The operation is not allowed because of eci not support job type.',
          ),
          15 => 
          array (
            'errorCode' => 'IllegalParam.ServerIp',
            'errorMessage' => 'The param of ServerIp is illegal.',
          ),
          16 => 
          array (
            'errorCode' => 'Mismatch.ServerType',
            'errorMessage' => 'The %s is mismatched for %s and %s.',
          ),
          17 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.ServerGroup',
            'errorMessage' => 'Authentication has failed for ServerGroup.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.ServerGroup',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.Ecs',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotFound.Eci',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.Eni',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34******\\"\\n}","errorExample":""},{"type":"xml","example":"<AddServersToServerGroupResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n</AddServersToServerGroupResponse>","errorExample":""}]',
      'title' => '添加后端服务器',
      'description' => '**AddServersToServerGroup**接口属于异步接口，即系统返回一个请求ID，但该后端服务器尚未添加成功，系统后台的添加任务仍在进行。

1. 您可以调用[ListServerGroups](~~213627~~)查询服务器组的状态：

- 当服务器组处于**Configuring**状态时，表示服务器组正在变配中。
- 当服务器组处于**Available**状态时，表示服务器组运行中。

2. 您可以调用[ListServerGroupServers](~~213628~~)查询后端服务器的状态：

- 当后端服务器处于**Adding**状态时，表示后端服务器正在加入服务器组。
- 当后端服务器处于**Available**状态时，表示后端服务器运行中。',
    ),
    'CreateServerGroup' => 
    array (
      'summary' => '在指定地域创建服务器组。',
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
          'name' => 'ServerGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '服务器组名称',
            'description' => '服务器组名称。长度为2~128个字符，必须以大小写字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'ServerGroupType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '服务器组类型',
            'description' => '服务器组类型。取值：

- **Instance**（默认值）：服务器类型，该类型服务器组支持添加**Ecs**、**Eni**、**Eci**实例。

- **Ip**：IP地址类型，该类型服务器组支持添加IP地址类型的后端服务器。

- **Fc**：函数计算类型，该类型支持添加函数计算类型的后端服务器。',
            'type' => 'string',
            'required' => false,
            'example' => 'Instance',
          ),
        ),
        2 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'VpcId',
            'description' => 'VPC实例ID。只有该VPC下的服务器可以加入到该服务器组。

> **ServerGroupType**取值为**Instance**或**Ip**时，该参数生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-bp15zdkdt37pq72zv****',
          ),
        ),
        3 => 
        array (
          'name' => 'Scheduler',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '调度策略',
            'description' => '调度算法。取值：

- **Wrr**（默认值）：加权轮询，权重值越高的后端服务器，被轮询到的概率也越高。

- **Wlc**：加权最小连接数，除了根据每台后端服务器设定的权重值来进行轮询，同时还考虑后端服务器的实际负载（即连接数）。当权重值相同时，当前连接数越小的后端服务器被轮询到的概率也越高。

- **Sch**：一致性哈希，相同哈希因子计算结果的请求将会调度到相同的后端服务器。不配置**UchConfig**参数时，默认哈希因子为源IP，相同源IP地址的请求会分发到同一台后端服务器；配置了**UchConfig**参数时，哈希因子为URL参数，相同URL参数的请求会分发到同一台后端服务器。


> **ServerGroupType**取值为**Instance**或**Ip**时，该参数生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'Wrr',
          ),
        ),
        4 => 
        array (
          'name' => 'Protocol',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '后端协议类型',
            'description' => '后端协议。取值：

- **HTTP**（默认值）：支持关联HTTPS、HTTP和QUIC监听。

- **HTTPS**：支持关联HTTPS监听。

- **gRPC**：关联HTTPS和QUIC监听。

> **ServerGroupType**取值为**Fc**时，仅支持**HTTP**协议。',
            'type' => 'string',
            'required' => false,
            'example' => 'HTTP',
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源组id',
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rsop****',
          ),
        ),
        6 => 
        array (
          'name' => 'HealthCheckConfig',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '健康检查配置',
            'description' => '健康检查相关配置。',
            'type' => 'object',
            'properties' => 
            array (
              'HealthCheckConnectPort' => 
              array (
                'title' => '健康检查端口',
                'description' => '健康检查的后端服务器的端口。

取值范围：  **0**~**65535**。

默认值：**0**，表示使用后端服务器的端口进行健康检查。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'maximum' => '65535',
                'minimum' => '0',
                'example' => '80',
                'default' => '0',
              ),
              'HealthCheckEnabled' => 
              array (
                'title' => '是否启用健康检查',
                'description' => '是否开启健康检查，取值：

- **true**：开启

- **false**：不开启

> **ServerGroupType**取值为**Instance**或**Ip**时，默认开启健康检查。**ServerGroupType**取值为**Fc**时，默认不开启健康检查。',
                'type' => 'boolean',
                'required' => true,
                'example' => 'true',
              ),
              'HealthCheckHost' => 
              array (
                'title' => '健康检查域名',
                'description' => '健康检查域名。字符要求：

- 长度限制为1~80个字符。

- 可包含小写字母、数字、短划线（-）和半角句号（.）。

- 至少包含一个半角句号（.），半角句号（.）不能出现在开头或结尾。

- 最右侧的域标签，只能包含字母，不能包含数字或短划线（-）。

- 短划线（-）不能出现在开头或结尾。

> 只有**HealthCheckProtocol**设置为**HTTP**或**HTTPS**时，该参数生效。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
                'type' => 'string',
                'required' => false,
                'example' => 'www.example.com',
              ),
              'HealthCheckCodes' => 
              array (
                'title' => '健康检查正常的状态码',
                'description' => '健康检查正常的状态码列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '健康检查正常的状态码。


- 当**HealthCheckProtocol**取值为**HTTP**或**HTTPS**时，**HealthCheckCodes**可以选择**http\\_2xx**（默认值）、 **http\\_3xx**、**http\\_4xx**和**http\\_5xx**。多个状态码用半角逗号（,）分隔。

- 当**HealthCheckProtocol**取值为**gRPC**时，**HealthCheckCodes**状态码范围：**0~99**，默认值：**0**。支持范围输入，最多支持20个范围值。多个范围值使用半角逗号（,）隔开。

> **HealthCheckProtocol**为**HTTP**或**HTTPS**或**gRPC**，该参数生效。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'http_2xx',
                ),
                'required' => false,
              ),
              'HealthCheckHttpVersion' => 
              array (
                'title' => '健康检查HTTP协议版本',
                'description' => '健康检查HTTP协议版本，取值：**HTTP1.0**或**HTTP1.1**（默认值）。

> 只有**HealthCheckProtocol**设置为**HTTP**或**HTTPS**时，该参数生效。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
                'type' => 'string',
                'required' => false,
                'example' => 'HTTP1.1',
                'default' => 'HTTP1.1',
              ),
              'HealthCheckInterval' => 
              array (
                'title' => '健康检查间隔',
                'description' => '健康检查的时间间隔。单位：秒。

取值范围：**1**~**50**。

默认值：**2**。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'maximum' => '50',
                'minimum' => '1',
                'example' => '2',
                'default' => '2',
              ),
              'HealthCheckMethod' => 
              array (
                'title' => '健康检查方法',
                'description' => '健康检查方法，取值：

- **GET**：如果响应报文长度超过8K，会被截断，但不会影响健康检查结果的判定。

- **POST**：gRPC监听健康检查默认采用POST方法。

- **HEAD**（默认值）：HTTP和HTTPS监听健康检查默认采用HEAD方法。

> 只有**HealthCheckProtocol**设置为**HTTP**或**HTTPS**或**gRPC**时，该参数生效。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
                'type' => 'string',
                'required' => false,
                'example' => 'HEAD',
              ),
              'HealthCheckPath' => 
              array (
                'title' => '健康检查Path',
                'description' => '健康检查的转发规则路径。

长度为1~80个字符，只能使用字母、数字、字符`-/.%?#&=`以及扩展字符`_;~!（)*[]@$^:\',+`。 URL必须以正斜线（/）开头。

> 只有**HealthCheckProtocol**设置为**HTTP**或**HTTPS**时，该参数生效。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
                'type' => 'string',
                'required' => false,
                'example' => '/test/index.html',
              ),
              'HealthCheckProtocol' => 
              array (
                'title' => '健康检查协议类型',
                'description' => '健康检查协议，取值：

- **HTTP**：通过发送HEAD或GET请求模拟浏览器的访问行为来检查服务器应用是否健康。

- **HTTPS**：通过发送HEAD或GET请求模拟浏览器的访问行为来检查服务器应用是否健康。（数据加密，相比HTTP更安全。）

- **TCP**：通过发送SYN握手报文来检测服务器端口是否存活。

- **gRPC**：通过发送POST或GET请求来检查服务器应用是否健康。

> HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。',
                'type' => 'string',
                'required' => false,
                'example' => 'HTTP',
                'default' => 'HTTP',
              ),
              'HealthCheckTimeout' => 
              array (
                'title' => '健康检查超时时间',
                'description' => '接收来自运行状况检查的响应需要等待的时间。如果后端服务器在指定的时间内没有正确响应，则判定为健康检查失败。单位：秒。

取值范围：**1**~**300**。

默认值：**5**。

> 如果**HealthCHeckTimeout**的值小于**HealthCheckInterval**的值，则**HealthCHeckTimeout**无效，超时时间为**HealthCheckInterval**的值。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'maximum' => '300',
                'minimum' => '1',
                'example' => '5',
                'default' => '5',
              ),
              'HealthyThreshold' => 
              array (
                'title' => '健康检查成功判定阈值',
                'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**失败**判定为**成功**。

取值范围：**2**~**10**。

默认值：**3**。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'maximum' => '10',
                'minimum' => '2',
                'example' => '3',
                'default' => '3',
              ),
              'UnhealthyThreshold' => 
              array (
                'title' => '健康检查不成功判定阈值',
                'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**成功**判定为**失败**。

取值范围：**2**~**10**。

默认值：**3**。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'maximum' => '10',
                'minimum' => '2',
                'example' => '3',
                'default' => '3',
              ),
            ),
            'required' => true,
          ),
        ),
        7 => 
        array (
          'name' => 'StickySessionConfig',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '会话保持配置',
            'description' => '会话保持配置结构体。

> **ServerGroupType**取值为**Instance**或**Ip**时，该参数生效。',
            'type' => 'object',
            'properties' => 
            array (
              'Cookie' => 
              array (
                'title' => '服务器上配置的Cookie',
                'description' => '服务器上配置的Cookie。

长度为1~200个字符，只能包含ASCII英文字母和数字字符，不能包含半角逗号（,）、半角分号（;）或空格，也不能以美元符号（$）开头。

> 当**StickySessionEnabled**为**true**且**StickySessionType**为**server**时，该参数生效。',
                'type' => 'string',
                'required' => false,
                'example' => 'B490B6EBF6F3CD402E515D22BCDA****',
              ),
              'CookieTimeout' => 
              array (
                'title' => '服务器上配置的Cookie',
                'description' => 'Cookie超时时间。单位：秒。

取值范围：**1**~**86400**。

默认值：**1000**。

> 当**StickySessionEnabled**为**true**且**StickySessionType**为**Insert**时，该参数生效。



',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'maximum' => '86400',
                'minimum' => '1',
                'example' => '1000',
                'default' => '1000',
              ),
              'StickySessionEnabled' => 
              array (
                'title' => '是否启用会话保持',
                'description' => '是否启用会话保持，取值：

- **true**：开启
- **false**：不开启。

> **ServerGroupType**取值为**Instance**或**Ip**时，该参数生效。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'StickySessionType' => 
              array (
                'title' => '会话保持类型',
                'description' => 'Cookie的处理方式。取值：

- **Insert**（默认值）：植入Cookie。
客户端第一次访问时，负载均衡会在返回请求中植入Cookie（即在HTTP或HTTPS响应报文中插入SERVERID），下次客户端携带此Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器上。

- **Server**：重写Cookie。
负载均衡发现用户自定义了Cookie，将会对原来的Cookie进行重写，下次客户端携带新的Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器。

> 当**StickySessionEnabled**的值为**true**时，该参数生效。',
                'type' => 'string',
                'required' => false,
                'example' => 'Insert',
                'default' => 'Insert',
              ),
            ),
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CAF0E-5718-45B5-9D4D-70B******',
          ),
        ),
        9 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会创建服务器组。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        10 => 
        array (
          'name' => 'UpstreamKeepaliveEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否开启后端长链接',
            'description' => '是否开启后端长链接。

- **true**：开启
- **false**（默认值）：不开启。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        11 => 
        array (
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '服务器名称',
            'description' => '仅适用于ALB Ingress场景，表示服务器组对应的`K8s Service`名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        12 => 
        array (
          'name' => 'UchConfig',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => 'url一致性hash参数配置',
            'description' => 'url一致性hash参数配置。',
            'type' => 'object',
            'properties' => 
            array (
              'Type' => 
              array (
                'title' => '参数类型',
                'description' => '参数类型。只能填**QueryString**。',
                'type' => 'string',
                'required' => true,
                'example' => 'QueryString',
              ),
              'Value' => 
              array (
                'title' => '一致性hash参数值',
                'description' => '一致性hash参数值。',
                'type' => 'string',
                'required' => true,
                'example' => 'abc',
              ),
            ),
            'required' => false,
          ),
        ),
        13 => 
        array (
          'name' => 'ConnectionDrainConfig',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '连接优雅中断相关配置。

开启连接优雅中断，在移除后端服务器或者健康检查失败后，负载均衡使现有连接在一定时间内正常传输。

>
> - 连接优雅中断功能默认不开放，如需使用，请向商务经理申请。
> - 基础版实例不支持开启连接优雅中断，仅标准版、WAF增强版实例支持。
> - 服务器类型、IP类型服务器组支持连接优雅中断，函数计算类型不支持。',
            'type' => 'object',
            'properties' => 
            array (
              'ConnectionDrainEnabled' => 
              array (
                'description' => '是否开启连接优雅中断。

- **true**：开启
- **false**：关闭（默认值）',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'ConnectionDrainTimeout' => 
              array (
                'description' => '连接优雅中断超时时间。

取值范围：**0**~**900**。

默认值：**300**。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '300',
              ),
            ),
            'required' => false,
          ),
        ),
        14 => 
        array (
          'name' => 'SlowStartConfig',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '慢启动相关配置。

开启慢启动后，将会在设定的时间段内对新添加到后端服务器组的后端服务器进行预热，转发到该服务器的请求数量线性增加。

> 
> - 基础版实例不支持开启慢启动，仅标准版、WAF增强版实例支持。
> - 服务器类型、IP类型服务器组支持配置慢启动，函数计算类型不支持。
> - 慢启动仅在后端调度算法是加权轮询算法时可开启。',
            'type' => 'object',
            'properties' => 
            array (
              'SlowStartEnabled' => 
              array (
                'description' => '是否开启慢启动。

- **true**：开启
- **false**：关闭（默认值）',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'SlowStartDuration' => 
              array (
                'description' => '慢启动持续时间。

取值范围：**30**~**900**。

默认值：**30**。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '30',
              ),
            ),
            'required' => false,
          ),
        ),
        15 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签结构。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'env',
                ),
                'Value' => 
                array (
                  'description' => '标签值。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'product',
                ),
              ),
              'required' => false,
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
            'description' => '返回数据结构体',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务Id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF******',
              ),
              'ServerGroupId' => 
              array (
                'title' => '服务器组id',
                'description' => '服务器组ID。',
                'type' => 'string',
                'example' => 'sgp-8ilqs4axp6******',
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
            'errorCode' => 'QuotaExceeded.ServerGroupsNum',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          1 => 
          array (
            'errorCode' => 'Mismatch.LoadBalancerEditionAndSlowStartEnable',
            'errorMessage' => 'The %s and %s are mismatched.',
          ),
          2 => 
          array (
            'errorCode' => 'Mismatch.ServerGroupSchedulerAndSlowStartEnable',
            'errorMessage' => 'The %s and %s are mismatched.',
          ),
          3 => 
          array (
            'errorCode' => 'QuotaExceeded.SlowStartDuration',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          4 => 
          array (
            'errorCode' => 'UnsupportedFeature.SlowStart',
            'errorMessage' => 'The feature of %s is not supported.',
          ),
          5 => 
          array (
            'errorCode' => 'Mismatch.LoadBalancerEditionAndConnectionDrain',
            'errorMessage' => 'The %s and %s are mismatched.',
          ),
          6 => 
          array (
            'errorCode' => 'QuotaExceeded.ConnectionDrainTimeout',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          7 => 
          array (
            'errorCode' => 'UnsupportedFeature.ConnectionDrain',
            'errorMessage' => 'The feature of %s is not supported.',
          ),
          8 => 
          array (
            'errorCode' => 'NotExist.ResourceGroup',
            'errorMessage' => 'ResourceGroup does not exist.',
          ),
          9 => 
          array (
            'errorCode' => 'OperationDenied.VpcNotSupportIpv6',
            'errorMessage' => 'The operation is not allowed because of VpcNotSupportIpv6.',
          ),
          10 => 
          array (
            'errorCode' => 'UnsupportedFeature.FcServerGroup',
            'errorMessage' => 'Server groups of type FC are not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Vpc',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF******\\",\\n  \\"ServerGroupId\\": \\"sgp-8ilqs4axp6******\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateServerGroupResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <ServerGroupId>sg-atstuj3rtoptyui****</ServerGroupId>\\n</CreateServerGroupResponse>","errorExample":""}]',
      'title' => '创建服务器组',
      'description' => '**CreateServerGroup**接口属于异步接口，即系统返回一个请求ID，但该服务器组尚未创建成功，系统后台的创建任务仍在进行。您可以调用[ListServerGroups](~~213627~~)查询服务器组的创建状态：
- 当服务器组处于**Creating**状态时，表示服务器组正在创建中。
- 当服务器组处于**Available**状态时，表示服务器组创建成功。',
    ),
    'DeleteServerGroup' => 
    array (
      'summary' => '删除指定的服务器组。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '幂等参数',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B3FF3898',
          ),
        ),
        1 => 
        array (
          'name' => 'ServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '服务器组id',
            'description' => '服务器组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sgp-cige6j****',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否DryRun',
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会删除服务器组。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2XX状态码并直接进行操作。',
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
            'description' => '返回数据结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => 'job',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
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
            'errorCode' => 'IncorrectStatus.ServerGroup',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceInUse.ServerGroup',
            'errorMessage' => 'The specified resource %s is in use.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceInConfiguring',
            'errorMessage' => 'The specified resource of %s is being configured. Please try again later.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.ServerGroup',
            'errorMessage' => 'Authentication has failed for ServerGroup.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.ServerGroup',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteServerGroupResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n</DeleteServerGroupResponse>","errorExample":""}]',
      'title' => '删除服务器组',
      'description' => '**DeleteServerGroup**接口属于异步接口，即系统返回一个请求ID，但该服务器组尚未删除成功，系统后台的删除任务仍在进行。您可以调用[ListServerGroups](~~213627~~)查询服务器组的删除状态：
- 当服务器组处于**Deleting**状态时，表示服务器组正在删除中。
- 当查询不到指定的服务器组时，表示服务器组删除成功。',
    ),
    'UpdateServerGroupAttribute' => 
    array (
      'summary' => '更新服务器组的配置，例如健康检查、会话保持、名称、调度算法和协议等。',
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
          'name' => 'ServerGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Acl名称',
            'description' => '服务器组名称。

长度为2~128个英文或中文字符，必须以大小字母或中文开头，可包含数字，半角句号（.），下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'Scheduler',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '调度策略',
            'description' => '调度算法。取值：

- **Wrr**：加权轮询，权重值越高的后端服务器，被轮询到的次数（概率）也越高。
- **Wlc**：加权最小连接数，除了根据每台后端服务器设定的权重值来进行轮询，同时还考虑后端服务器的实际负载（即连接数）。当权重值相同时，当前连接数越小的后端服务器被轮询到的次数（概率）也越高。
- **Sch**：一致性哈希，相同哈希因子计算结果的请求将会调度到相同的后端服务器。不配置UchConfig参数时，默认哈希因子为源IP，相同源IP地址的请求会分发到同一台后端服务器；配置了UchConfig参数时，哈希因子为URL参数，相同URL参数的请求会分发到同一台后端服务器。',
            'type' => 'string',
            'required' => false,
            'example' => 'Wrr',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B3******',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会修改资源。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP `2xx`状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'HealthCheckConfig',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '健康检查配置',
            'description' => '健康检查相关配置结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'HealthCheckConnectPort' => 
              array (
                'title' => '健康检查端口',
                'description' => '健康检查的后端服务器的端口。

取值范围：**0**~**65535**。

设置为**0**时代表使用后端服务器的端口进行健康检查。

> 当前服务器组**HealthCheckEnabled**为**true**时，该参数配置生效。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'maximum' => '65535',
                'minimum' => '0',
                'example' => '80',
              ),
              'HealthCheckEnabled' => 
              array (
                'title' => '是否启用健康检查',
                'description' => '是否启用健康检查，取值：
- **true**：启用
- **false**：不启用',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'HealthCheckHost' => 
              array (
                'title' => '健康检查域名',
                'description' => '健康检查域名。字符要求：
- 长度限制为1~80个字符。
- 可包含小写字母、数字、短划线（-）和半角句号（.）。
- 至少包含一个半角句号（.），半角句号（.）不能出现在开头或结尾。
- 最右侧的地域标签，只能包含字母，不能包含数字或短划线（-）。
- 其他地域标签，短划线（-）不能出现在开头或结尾。

> 当前服务器组**HealthCheckEnabled**为true且**HealthCheckProtocol**设置为**HTTP**或**HTTPS**时该参数生效。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
                'type' => 'string',
                'required' => false,
                'example' => 'example.com',
              ),
              'HealthCheckCodes' => 
              array (
                'title' => '健康检查正常的状态码',
                'description' => '健康检查正常的状态码列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '健康检查正常的状态码。

- 当**HealthCheckProtocol**取值为**HTTP**或**HTTPS**时，**HealthCheckCodes**可以选择**http\\_2xx**（默认值）、 **http\\_3xx**、**http\\_4xx**和**http\\_5xx**。多个状态码用半角逗号（,）分隔。

- 当**HealthCheckProtocol**取值为**gRPC**时，**HealthCheckCodes**状态码范围：**0~99**，默认值：**0**。支持范围输入，最多支持20个范围值。多个范围值使用半角逗号（,）隔开。

> 当前服务器组**HealthCheckEnabled**为**true**且**HealthCheckProtocol**设置为**HTTP**或**HTTPS**或**gRPC**时该参数生效。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
                  'type' => 'string',
                  'required' => false,
                  'example' => '200',
                ),
                'required' => false,
              ),
              'HealthCheckHttpVersion' => 
              array (
                'title' => '健康检查HTTP协议版本',
                'description' => '健康检查HTTP协议版本。取值：

- **HTTP1.0**
- **HTTP1.1**

> 当前服务器组**HealthCheckEnabled**为true且**HealthCheckProtocol**设置为**HTTP**或**HTTPS**时该参数生效。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
                'type' => 'string',
                'required' => false,
                'example' => 'HTTP1.1',
              ),
              'HealthCheckInterval' => 
              array (
                'title' => '健康检查间隔',
                'description' => '健康检查的时间间隔。单位：秒。 

取值范围：**1**~**50**。

> 当前服务器组**HealthCheckEnabled**为**true**时，该参数配置生效。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'maximum' => '50',
                'minimum' => '1',
                'example' => '5',
              ),
              'HealthCheckMethod' => 
              array (
                'title' => '健康检查方法',
                'description' => '健康检查方法。取值：

- **GET**：如果响应报文长度超过8K，会被截断，但不会影响健康检查结果的判定。

- **POST**：gRPC监听健康检查默认采用POST方法。

- **HEAD**：HTTP和HTTPS监听健康检查默认采用HEAD方法。

> 当前服务器组**HealthCheckEnabled**为true且**HealthCheckProtocol**设置为**HTTP**或**HTTPS**或**gRPC**时该参数生效。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
                'type' => 'string',
                'required' => false,
                'example' => 'HEAD',
              ),
              'HealthCheckPath' => 
              array (
                'title' => '健康检查Path',
                'description' => '健康检查的转发规则路径。

长度限制为1~80，只能使用字母、数字、字符`-/.%?#&=`以及扩展字符`_;~!（)*[]@$^:\',+`。 URL开头必须为`/`。

> 当前服务器组**HealthCheckEnabled**为**true**且**HealthCheckProtocol**设置为**HTTP**或**HTTPS**时该参数生效。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
                'type' => 'string',
                'required' => false,
                'example' => '/test/index.html',
              ),
              'HealthCheckProtocol' => 
              array (
                'title' => '健康检查协议类型',
                'description' => '健康检查协议。取值：

- **HTTP**：通过发送HEAD或GET请求模拟浏览器的访问行为来检查服务器应用是否健康。

- **HTTPS**：通过发送HEAD或GET请求模拟浏览器的访问行为来检查服务器应用是否健康。（数据加密，相比HTTP更安全。）

- **TCP**：通过发送SYN握手报文来检测服务器端口是否存活。

- **gRPC**：通过发送POST或GET请求来检查服务器应用是否健康。

> HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。',
                'type' => 'string',
                'required' => false,
                'example' => 'HTTP',
              ),
              'HealthCheckTimeout' => 
              array (
                'title' => '健康检查超时时间',
                'description' => '接收来自运行状况检查的响应需要等待的时间。如果后端ECS在指定的时间内没有正确响应，则判定为健康检查失败。单位：秒。

取值范围：**1**~**300**。

> - 如果**HealthCHeckTimeout**的值小于**HealthCheckInterval**的值，则**HealthCHeckTimeout**无效，超时时间为**HealthCheckInterval**的值。
- 当前服务器组**HealthCheckEnabled**为**true**时，该参数配置生效。
',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'maximum' => '300',
                'minimum' => '1',
                'example' => '3',
              ),
              'HealthyThreshold' => 
              array (
                'title' => '健康检查成功判定阈值',
                'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**fail**判定为**success**。

取值范围：**2**~**10**。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'maximum' => '10',
                'minimum' => '2',
                'example' => '4',
              ),
              'UnhealthyThreshold' => 
              array (
                'title' => '健康检查不成功判定阈值',
                'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**success**判定为**fail**。

取值范围：**2**~**10**。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'maximum' => '10',
                'minimum' => '2',
                'example' => '4',
              ),
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'StickySessionConfig',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '会话保持配置',
            'description' => '会话保持配置结构体',
            'type' => 'object',
            'properties' => 
            array (
              'Cookie' => 
              array (
                'title' => '服务器上配置的Cookie',
                'description' => '服务器上配置的Cookie。

长度为1~200个字符，只能包含ASCII英文字母和数字字符，不能包含半角逗号（,）、半角分号（;）或空格，也不能以美元符号（$）开头。

> 当前服务器组**StickySessionEnabled**为**true**且**StickySessionType**配置为**Server**时，该参数生效。',
                'type' => 'string',
                'required' => false,
                'example' => 'B490B5EBF6F3CD402E515D22B******',
              ),
              'CookieTimeout' => 
              array (
                'title' => '服务器上配置的Cookie',
                'description' => 'Cookie超时时间。单位：秒。

取值范围：**1**~**86400**。

>当前服务器组**StickySessionEnabled**为**true**且**StickySessionType**配置为**Insert**时，该参数生效。

',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'maximum' => '86400',
                'minimum' => '1',
                'example' => '1000',
              ),
              'StickySessionEnabled' => 
              array (
                'title' => '是否启用会话保持',
                'description' => '是否启用会话保持。取值：

- **true**：是。
- **false**：否。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'StickySessionType' => 
              array (
                'title' => '会话保持类型',
                'description' => 'Cookie的处理方式。取值：

- **Insert**：植入Cookie。
客户端第一次访问时，负载均衡会在返回请求中植入Cookie（即在HTTP或HTTPS响应报文中插入SERVERID），下次客户端携带此Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器上。
- **Server**：重写Cookie。
负载均衡发现用户自定义了Cookie，将会对原来的Cookie进行重写，下次客户端携带新的Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器。

> 当前服务器组**StickySessionEnabled**为**true**时，该参数生效。',
                'type' => 'string',
                'required' => false,
                'example' => 'Insert',
              ),
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'ServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '服务器组Id',
            'description' => '服务器组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sgp-atstuj3rtop****',
          ),
        ),
        7 => 
        array (
          'name' => 'UpstreamKeepaliveEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否开启后端长链接',
            'description' => '是否开启后端长连接。

- **true**：开启

- **false**：不开启。',
            'type' => 'boolean',
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '服务器名称',
            'description' => '仅适用于ALB Ingress场景，表示服务器组对应的`K8s Service`名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test2',
          ),
        ),
        9 => 
        array (
          'name' => 'UchConfig',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => 'url一致性hash参数配置',
            'description' => 'url一致性hash参数配置。',
            'type' => 'object',
            'properties' => 
            array (
              'Type' => 
              array (
                'title' => '参数类型',
                'description' => '参数类型。只支持输入QueryString。',
                'type' => 'string',
                'required' => true,
                'example' => 'QueryString',
              ),
              'Value' => 
              array (
                'title' => '一致性hash参数值',
                'description' => '一致性hash参数值。',
                'type' => 'string',
                'required' => true,
                'example' => 'abc',
              ),
            ),
            'required' => false,
          ),
        ),
        10 => 
        array (
          'name' => 'ConnectionDrainConfig',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '连接优雅中断相关配置。

开启连接优雅中断，在移除后端服务器或者健康检查失败后，负载均衡使现有连接在一定时间内正常传输。
> 
> - 连接优雅中断功能默认不开放，如需使用，请向商务经理申请。
> - 基础版实例不支持开启连接优雅中断，仅标准版、WAF增强版实例支持。
> - 服务器类型、IP类型服务器组支持连接优雅中断，函数计算类型不支持。',
            'type' => 'object',
            'properties' => 
            array (
              'ConnectionDrainEnabled' => 
              array (
                'description' => '是否开启连接优雅中断。

- **true**：开启
- **false**：关闭',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'ConnectionDrainTimeout' => 
              array (
                'description' => '连接优雅中断超时时间。

取值范围：**0**~**900**。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '300',
              ),
            ),
            'required' => false,
          ),
        ),
        11 => 
        array (
          'name' => 'SlowStartConfig',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '慢启动配置',
            'description' => '慢启动相关配置。

开启慢启动后，将会在设定的时间段内对新添加到后端服务器组的后端服务器进行预热，转发到该服务器的请求数量线性增加。
>
> - 基础版实例不支持开启慢启动，仅标准版、WAF增强版实例支持。
> - 服务器类型、IP类型服务器组支持配置慢启动，函数计算类型不支持。
> - 慢启动仅在后端调度算法是加权轮询算法时可开启。',
            'type' => 'object',
            'properties' => 
            array (
              'SlowStartEnabled' => 
              array (
                'title' => '是否开启慢启动
',
                'description' => '是否开启慢启动。

- **true**：开启
- **false**：关闭',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'SlowStartDuration' => 
              array (
                'title' => '慢启动时间',
                'description' => '慢启动持续时间。

取值范围：**30**~**900**。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '30',
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
            'title' => 'Schema of Response',
            'description' => '返回数据结构组',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务Id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF3*****',
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
            'errorCode' => 'IncorrectStatus.ServerGroup',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'Mismatch.LoadBalancerEditionAndConnectionDrain',
            'errorMessage' => 'The %s and %s are mismatched.',
          ),
          2 => 
          array (
            'errorCode' => 'Mismatch.ServerGroupSchedulerAndSlowStartEnable',
            'errorMessage' => 'The %s and %s are mismatched.',
          ),
          3 => 
          array (
            'errorCode' => 'QuotaExceeded.ConnectionDrainTimeout',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          4 => 
          array (
            'errorCode' => 'UnsupportedFeature.ConnectionDrain',
            'errorMessage' => 'The feature of %s is not supported.',
          ),
          5 => 
          array (
            'errorCode' => 'QuotaExceeded.SlowStartDuration',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          6 => 
          array (
            'errorCode' => 'UnsupportedFeature.SlowStart',
            'errorMessage' => 'The feature of %s is not supported.',
          ),
          7 => 
          array (
            'errorCode' => 'Mismatch.LoadBalancerEditionAndSlowStartEnable',
            'errorMessage' => 'The %s and %s are mismatched.',
          ),
          8 => 
          array (
            'errorCode' => 'OperationDenied.UpstreamKeepaliveDisabled',
            'errorMessage' => 'The operation is not allowed because of UpstreamKeepaliveDisabled.',
          ),
          9 => 
          array (
            'errorCode' => 'OperationDenied.UpstreamKeepaliveEnabled',
            'errorMessage' => 'The operation is not allowed because of UpstreamKeepaliveEnabled.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.ServerGroup',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF3*****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateServerGroupAttributeResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n</UpdateServerGroupAttributeResponse>","errorExample":""}]',
      'title' => '更新服务器组配置',
      'description' => '**UpdateServerGroupAttribute**接口属于异步接口，即系统返回一个请求ID，但该服务器组的配置尚未更新成功，系统后台的更新任务仍在进行。您可以调用[ListServerGroups](~~213627~~)查询服务器组的配置的更新状态：
- 当服务器组的配置处于**Configuring**状态时，表示服务器组的配置正在更新中。
- 当服务器组的配置处于**Available**状态时，表示服务器组的配置更新成功。',
    ),
    'UpdateServerGroupServersAttribute' => 
    array (
      'summary' => '更新服务器组中后端服务器的权重和描述等配置。',
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
          'name' => 'ServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '后端服务器Id',
            'description' => '服务器组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sgp-atstuj3rtop****',
          ),
        ),
        1 => 
        array (
          'name' => 'Servers',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '后端服务器',
            'description' => '后端服务器组列表，单次调用最多支持传入40个服务器。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '后端服务器组结构体',
              'type' => 'object',
              'properties' => 
              array (
                'Description' => 
                array (
                  'title' => '后端服务器描述',
                  'description' => '后端服务器描述。长度为2~256个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）、短划线（-）、半角逗号（,）、半角分号（;）、正斜线（/）和at（@）。单次调用最多支持传入40个服务器。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
                'Port' => 
                array (
                  'title' => '后端端口号',
                  'description' => '后端服务器使用的端口。取值范围：**1**~**65535**。单次调用最多支持传入40个服务器。

> 当**ServerType**取值为**Fc**时，无需配置该参数。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'docRequired' => false,
                  'example' => '80',
                ),
                'ServerId' => 
                array (
                  'title' => '后端服务器id',
                  'description' => '后端服务器ID。单次调用最多支持传入40个服务器。

- 当**ServerType**取值为**Ecs**、**Eni**、**Eci**时，该参数为Ecs、Eni、Eci的资源ID。
- 当**ServerType**取值为**Ip**时，该参数为IP地址。
- 当**ServerType**取值为**Fc**时，该参数为函数计算的ARN标识。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'i-bp1f9kdprbgy9uiu****',
                ),
                'ServerIp' => 
                array (
                  'title' => '后端服务器ip',
                  'description' => '指定IP地址。单次调用最多支持传入40个服务器。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '192.168.1.1',
                ),
                'ServerType' => 
                array (
                  'title' => '后端服务器类型',
                  'description' => '后端服务器类型。单次调用最多支持传入40个服务器。取值：
- **Ecs**：ECS实例。
- **Eni**：ENI弹性网卡实例。
- **Eci**：ECI弹性容器。
- **Ip**：IP地址。
- **Fc**：函数计算。',
                  'type' => 'string',
                  'required' => true,
                  'docRequired' => false,
                  'example' => 'Ecs',
                ),
                'Weight' => 
                array (
                  'title' => '后端服务器权重',
                  'description' => '后端服务器的权重。取值范围：**0**~**100**。默认值为**100**。如果设置权重为**0**，则不会将请求转发给该后端服务器。单次调用最多支持传入40个服务器。

> 当**ServerType**取值为**Fc**时，无需配置该参数。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '100',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 200,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等Token',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '593B0448-D13E-4C56-AC0D-FDF0******',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'dryRun',
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会更新服务器组中后端服务器的权重和描述等配置信息。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
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
            'description' => '返回数据结构体',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务Id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF3*****',
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
            'errorCode' => 'IncorrectStatus.ServerGroup',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceInConfiguring',
            'errorMessage' => 'The specified resource of %s is being configured. Please try again later.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.ServerGroup',
            'errorMessage' => 'Authentication has failed for ServerGroup.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.ServerGroup',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.BackendServer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF3*****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateServerGroupServersAttributeResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n</UpdateServerGroupServersAttributeResponse>","errorExample":""}]',
      'title' => '更新后端服务器配置',
      'description' => '**UpdateServerGroupServersAttribute**接口属于异步接口，即系统返回一个请求ID，但该后端服务器配置信息尚未添加成功，系统后台的添加任务仍在进行。
1. 您可以调用[ListServerGroups](~~213627~~)查询服务器组状态：
    - 当服务器组处于**Configuring**状态时，表示服务器组正在变配中。
    - 当服务器组处于**Available**状态时，表示服务器组运行中。

2. 您可以调用[ListServerGroupServers](~~213628~~)查询后端服务器状态：
    - 当后端服务器处于**Configuring**状态时，表示后端服务器正在变配中。
    - 当后端服务器处于**Available**状态时，表示后端服务器运行中。',
    ),
    'ListServerGroups' => 
    array (
      'summary' => '查询指定地域的服务器组。',
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
          'name' => 'ServerGroupIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '服务器组Id列表',
            'description' => '服务器组ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '服务器组ID，一次最多支持查询20个服务器组ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'sgp-atstuj3rtop****',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        1 => 
        array (
          'name' => 'ServerGroupNames',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '服务器组名称',
            'description' => '服务器组名称列表，最多10个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '服务器组名称，一次最多支持查询10个服务器组名称。',
              'type' => 'string',
              'required' => false,
              'example' => 'Group3',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源组ID',
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        3 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页查询标识',
            'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。',
            'type' => 'string',
            'required' => false,
            'example' => 'FFmyTO70tTpLG6I3FmYAXG****',
          ),
        ),
        4 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询数量',
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
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
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'VpcId',
            'description' => 'VPC实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-bp15zckdt37pq72zv****',
          ),
        ),
        6 => 
        array (
          'name' => 'ServerGroupType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '服务器组类型',
            'description' => '服务器组类型。取值：

- **Instance**：服务器类型，包括Ecs、Eni、Eci实例。

- **Ip**：IP地址类型。

- **Fc**：函数计算类型。

- 不填则查询所有类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'Instance',
          ),
        ),
        7 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => 'Tag列表',
            'description' => '服务器组绑定的标签列表。一次请求中，绑定的标签列表中最多支持10个标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '服务器组绑定的标签，单次支持传入10个标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '标签键',
                  'description' => '标签键。最多支持10个标签键。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Test',
                ),
                'Value' => 
                array (
                  'title' => '标签值',
                  'description' => '标签值。最多支持10个标签值。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Test',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'example' => 'Instance',
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
            'description' => ' 返回数据结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'MaxResults' => 
              array (
                'title' => '本次查询返回记录数量',
                'description' => '分批次查询时每次显示的条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'NextToken' => 
              array (
                'title' => '分页查询标识',
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f8****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876******',
              ),
              'ServerGroups' => 
              array (
                'title' => '服务器组',
                'description' => '后端服务器组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '后端服务器组列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'HealthCheckConfig' => 
                    array (
                      'title' => '健康检查配置',
                      'description' => '健康检查配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'HealthCheckConnectPort' => 
                        array (
                          'title' => '端口',
                          'description' => '健康检查的后端服务器的端口。取值范围：**0**~**65535**。

返回为**0**时代表使用后端服务器的端口进行健康检查。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '80',
                        ),
                        'HealthCheckEnabled' => 
                        array (
                          'title' => '是否启用健康检查',
                          'description' => '是否启用健康检查，取值：
- **true**：启用。
- **false**：不启用。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'HealthCheckHost' => 
                        array (
                          'title' => '域名',
                          'description' => '健康检查域名。字符要求：

- 长度限制为1~80个字符。

- 可包含小写字母、数字、短划线（-）和半角句号（.）。

- 至少包含一个半角句号（.），半角句号（.）不能出现在开头或结尾。

- 最右侧的域标签，只能包含字母，不能包含数字或短划线（-）。

- 短划线（-）不能出现在开头或结尾。

> 只有**HealthCheckProtocol**设置为**HTTP**或**HTTPS**时，该参数生效。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
                          'type' => 'string',
                          'example' => 'www.example.com',
                        ),
                        'HealthCheckCodes' => 
                        array (
                          'title' => '状态码',
                          'description' => '健康检查正常的状态码列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '健康检查正常的状态码。

- 当**HealthCheckProtocol**取值为**HTTP**或**HTTPS**时，**HealthCheckCodes**可以选择**http\\_2xx**、 **http\\_3xx**、**http\\_4xx**和**http\\_5xx**。多个状态码用半角逗号（,）分隔。

- 当**HealthCheckProtocol**取值为**gRPC**时，**HealthCheckCodes**状态码范围：**0~99**。支持范围输入，最多支持20个范围值，多个范围值使用半角逗号（,）隔开。

> **HealthCheckProtocol**为**HTTP**或**HTTPS**或**gRPC**时，该参数生效。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
                            'type' => 'string',
                            'example' => 'http_2xx',
                          ),
                        ),
                        'HealthCheckHttpVersion' => 
                        array (
                          'title' => '版本',
                          'description' => '健康检查HTTP协议版本。

取值：**HTTP1.0**或**HTTP1.1**。

> 只有**HealthCheckProtocol**设置为**HTTP**或**HTTPS**时，该参数生效。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
                          'type' => 'string',
                          'example' => 'HTTP1.1',
                        ),
                        'HealthCheckInterval' => 
                        array (
                          'title' => '间隔时间',
                          'description' => '健康检查的时间间隔。单位：秒。取值范围：**1**~**50**。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5',
                        ),
                        'HealthCheckMethod' => 
                        array (
                          'title' => '方法',
                          'description' => '健康检查方法。取值：

- **GET**：如果响应报文长度超过8K，会被截断，但不会影响健康检查结果的判定。

- **POST**：gRPC监听健康检查默认采用POST方法。

- **HEAD**：HTTP和HTTPS监听健康检查默认采用HEAD方法。


> 只有**HealthCheckProtocol**设置为**HTTP**或**HTTPS**或**gRPC**时，该参数生效。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
                          'type' => 'string',
                          'example' => 'HEAD',
                        ),
                        'HealthCheckPath' => 
                        array (
                          'title' => 'uri',
                          'description' => '健康检查的转发规则路径。

> 只有**HealthCheckProtocol**设置为**HTTP**或**HTTPS**时，该参数生效。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
                          'type' => 'string',
                          'example' => '/test/index.html',
                        ),
                        'HealthCheckProtocol' => 
                        array (
                          'title' => '协议',
                          'description' => '健康检查协议。取值：

- **HTTP**：通过发送HEAD或GET请求模拟浏览器的访问行为来检查服务器应用是否健康。

- **HTTPS**：通过发送HEAD或GET请求模拟浏览器的访问行为来检查服务器应用是否健康。（数据加密，相比HTTP更安全。）

- **TCP**：通过发送SYN握手报文来检测服务器端口是否存活。

- **gRPC**：通过发送POST或GET请求来检查服务器应用是否健康。

> HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。',
                          'type' => 'string',
                          'example' => 'HTTP',
                        ),
                        'HealthCheckTimeout' => 
                        array (
                          'title' => '超时时间',
                          'description' => '接收来自运行状况检查的响应需要等待的时间。如果后端服务器在指定的时间内没有正确响应，则判定为健康检查失败。单位：秒。

',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3',
                        ),
                        'HealthyThreshold' => 
                        array (
                          'title' => '健康阈值',
                          'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**失败**判定为**成功**。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '4',
                        ),
                        'UnhealthyThreshold' => 
                        array (
                          'title' => '不健康阈值',
                          'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**成功**判定为**失败**。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '4',
                        ),
                      ),
                    ),
                    'Protocol' => 
                    array (
                      'title' => '服务器组协议',
                      'description' => '后端协议类型。取值：

- **HTTP**：支持关联HTTPS、HTTP和QUIC监听。
- **HTTPS**：支持关联HTTPS监听。

- **GRPC**：关联HTTPS和QUIC监听。
',
                      'type' => 'string',
                      'example' => 'HTTP',
                    ),
                    'RelatedLoadBalancerIds' => 
                    array (
                      'title' => '关联的实例id',
                      'description' => '关联的实例id',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '关联的负载均衡实例id',
                        'type' => 'string',
                        'example' => 'alb-n5qw04uq8vavfe****',
                      ),
                    ),
                    'ResourceGroupId' => 
                    array (
                      'title' => '资源组id',
                      'description' => '资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-atstuj3rtop****',
                    ),
                    'Scheduler' => 
                    array (
                      'title' => '调度策略',
                      'description' => '调度算法。取值：

- **Wrr**：加权轮询，权重值越高的后端服务器，被轮询到的概率也越高。
- **Wlc**：加权最小连接数，除了根据每台后端服务器设定的权重值来进行轮询，同时还考虑后端服务器的实际负载（即连接数）。当权重值相同时，当前连接数越小的后端服务器被轮询到的概率也越高。
- **Sch**：一致性哈希，相同哈希因子计算结果的请求将会调度到相同的后端服务器。不配置UchConfig参数时，默认哈希因子为源IP，相同源IP地址的请求会分发到同一台后端服务器；配置了UchConfig参数时，哈希因子为URL参数，相同URL参数的请求会分发到同一台后端服务器。',
                      'type' => 'string',
                      'example' => 'Wrr',
                    ),
                    'ServerGroupId' => 
                    array (
                      'title' => '服务器组Id',
                      'description' => '服务器组ID。',
                      'type' => 'string',
                      'example' => 'sgp-cige6j****',
                    ),
                    'ServerGroupName' => 
                    array (
                      'title' => '服务器组名称',
                      'description' => '服务器组名称。',
                      'type' => 'string',
                      'example' => 'Group3',
                    ),
                    'ServerGroupStatus' => 
                    array (
                      'title' => '服务器组状态',
                      'description' => '服务器组状态。取值：
- **Creating**：创建中。

- **Available**：可用。

- **Configuring**：变配中。',
                      'type' => 'string',
                      'example' => 'Available',
                    ),
                    'ServerGroupType' => 
                    array (
                      'title' => '服务器组类型',
                      'description' => '服务器组类型。取值：

- **Instance**：服务器类型，包括Ecs、Eni、Eci实例。

- **Ip**：IP类型。

- **Fc**：函数计算类型。',
                      'type' => 'string',
                      'example' => 'Instance',
                    ),
                    'StickySessionConfig' => 
                    array (
                      'title' => '会话保持配置',
                      'description' => '会话保持配置结构体。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Cookie' => 
                        array (
                          'title' => 'Cookie',
                          'description' => '服务器上配置的Cookie。',
                          'type' => 'string',
                          'example' => 'B490B5EBF6F3CD402E515D22BCDA****',
                        ),
                        'CookieTimeout' => 
                        array (
                          'title' => 'Cookie超时时间',
                          'description' => 'Cookie超时时间。单位：秒。取值范围：**1**~**86400**。

> 当**StickySessionEnabled**为**true**且**StickySessionType**为**Insert**时，该参数生效。



',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1000',
                        ),
                        'StickySessionEnabled' => 
                        array (
                          'title' => '是否开启会话保持',
                          'description' => '是否启用会话保持。取值：

- **true**：开启。
- **false**：关闭。
',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'StickySessionType' => 
                        array (
                          'title' => '会话保持类型',
                          'description' => 'Cookie的处理方式。取值：

- **Insert**：植入Cookie。
客户端第一次访问时，负载均衡会在返回请求中植入Cookie（即在HTTP或HTTPS响应报文中插入SERVERID），下次客户端携带此Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器上。
- **Server**：重写Cookie。
负载均衡发现用户自定义了Cookie，将会对原来的Cookie进行重写，下次客户端携带新的Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器。',
                          'type' => 'string',
                          'example' => 'Insert',
                        ),
                      ),
                    ),
                    'VpcId' => 
                    array (
                      'title' => '服务器组所在VpcId',
                      'description' => 'VPC实例ID。',
                      'type' => 'string',
                      'example' => 'vpc-bp15zckdt37pq72zv****',
                    ),
                    'Tags' => 
                    array (
                      'title' => '标签列表',
                      'description' => '服务器组绑定的标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '服务器组绑定的标签列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'title' => '标签键',
                            'description' => '标签键。',
                            'type' => 'string',
                            'example' => 'Test',
                          ),
                          'Value' => 
                          array (
                            'title' => '标签值',
                            'description' => '标签值。',
                            'type' => 'string',
                            'example' => 'Test',
                          ),
                        ),
                      ),
                    ),
                    'ConfigManagedEnabled' => 
                    array (
                      'title' => '是否开启配置管理',
                      'description' => '是否开启配置管理。取值：
- **true**：开启。
- **false**：关闭。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'UpstreamKeepaliveEnabled' => 
                    array (
                      'title' => '是否开启后端长链接',
                      'description' => '是否开启后端长链接。取值：
- **true**：开启。
- **false**：关闭。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'Ipv6Enabled' => 
                    array (
                      'title' => '是否支持Ipv6',
                      'description' => '是否支持IPv6。取值：
- **true**：支持。
- **false**：不支持。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'ServerCount' => 
                    array (
                      'title' => '服务器组内服务器数量',
                      'description' => '服务器组内服务器数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'ServiceName' => 
                    array (
                      'title' => '服务器名称',
                      'description' => '服务名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'UchConfig' => 
                    array (
                      'title' => 'url一致性hash参数配置',
                      'description' => 'url一致性hash参数配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'title' => '参数类型',
                          'description' => '参数类型。只能填QueryString。',
                          'type' => 'string',
                          'example' => 'QueryString',
                        ),
                        'Value' => 
                        array (
                          'title' => '一致性hash参数值',
                          'description' => '一致性hash参数值。',
                          'type' => 'string',
                          'example' => 'abc',
                        ),
                      ),
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '资源创建时间。',
                      'type' => 'string',
                      'example' => '2022-07-02T02:49:05Z',
                    ),
                    'ConnectionDrainConfig' => 
                    array (
                      'description' => '连接优雅中断相关配置。

开启连接优雅中断，在移除后端服务器或者健康检查失败后，负载均衡使现有连接在一定时间内正常传输。
>
> - 连接优雅中断功能默认不开放，如需使用，请向商务经理申请。
> - 基础版实例不支持开启连接优雅中断，仅标准版、WAF增强版实例支持。
> - 服务器类型、IP类型服务器组支持连接优雅中断，函数计算类型不支持。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ConnectionDrainEnabled' => 
                        array (
                          'description' => '是否开启连接优雅中断。

- **true**：开启
- **false**：关闭',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'ConnectionDrainTimeout' => 
                        array (
                          'description' => '连接优雅中断超时时间。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '300',
                        ),
                      ),
                    ),
                    'SlowStartConfig' => 
                    array (
                      'title' => '慢启动配置',
                      'description' => '慢启动相关配置。

开启慢启动后，将会在设定的时间段内对新添加到后端服务器组的后端服务器进行预热，转发到该服务器的请求数量线性增加。
>
> - 基础版实例不支持开启慢启动，仅标准版、WAF增强版实例支持。
> - 服务器类型、IP类型服务器组支持配置慢启动，函数计算类型不支持。
> - 慢启动仅在后端调度算法是加权轮询算法时可开启。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SlowStartEnabled' => 
                        array (
                          'description' => '是否开启慢启动。

- **true**：开启
- **false**：关闭',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'SlowStartDuration' => 
                        array (
                          'description' => '慢启动持续时间。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '30',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'title' => '总记录数',
                'description' => '列表条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1000',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"MaxResults\\": 50,\\n  \\"NextToken\\": \\"caeba0bbb2be03f8****\\",\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876******\\",\\n  \\"ServerGroups\\": [\\n    {\\n      \\"HealthCheckConfig\\": {\\n        \\"HealthCheckConnectPort\\": 80,\\n        \\"HealthCheckEnabled\\": true,\\n        \\"HealthCheckHost\\": \\"www.example.com\\",\\n        \\"HealthCheckCodes\\": [\\n          \\"http_2xx\\"\\n        ],\\n        \\"HealthCheckHttpVersion\\": \\"HTTP1.1\\",\\n        \\"HealthCheckInterval\\": 5,\\n        \\"HealthCheckMethod\\": \\"HEAD\\",\\n        \\"HealthCheckPath\\": \\"/test/index.html\\",\\n        \\"HealthCheckProtocol\\": \\"HTTP\\",\\n        \\"HealthCheckTimeout\\": 3,\\n        \\"HealthyThreshold\\": 4,\\n        \\"UnhealthyThreshold\\": 4\\n      },\\n      \\"Protocol\\": \\"HTTP\\",\\n      \\"RelatedLoadBalancerIds\\": [\\n        \\"alb-n5qw04uq8vavfe****\\"\\n      ],\\n      \\"ResourceGroupId\\": \\"rg-atstuj3rtop****\\",\\n      \\"Scheduler\\": \\"Wrr\\",\\n      \\"ServerGroupId\\": \\"sgp-cige6j****\\",\\n      \\"ServerGroupName\\": \\"Group3\\",\\n      \\"ServerGroupStatus\\": \\"Available\\",\\n      \\"ServerGroupType\\": \\"Instance\\",\\n      \\"StickySessionConfig\\": {\\n        \\"Cookie\\": \\"B490B5EBF6F3CD402E515D22BCDA****\\",\\n        \\"CookieTimeout\\": 1000,\\n        \\"StickySessionEnabled\\": false,\\n        \\"StickySessionType\\": \\"Insert\\"\\n      },\\n      \\"VpcId\\": \\"vpc-bp15zckdt37pq72zv****\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"Test\\",\\n          \\"Value\\": \\"Test\\"\\n        }\\n      ],\\n      \\"ConfigManagedEnabled\\": false,\\n      \\"UpstreamKeepaliveEnabled\\": false,\\n      \\"Ipv6Enabled\\": false,\\n      \\"ServerCount\\": 1,\\n      \\"ServiceName\\": \\"test\\",\\n      \\"UchConfig\\": {\\n        \\"Type\\": \\"QueryString\\",\\n        \\"Value\\": \\"abc\\"\\n      },\\n      \\"CreateTime\\": \\"2022-07-02T02:49:05Z\\",\\n      \\"ConnectionDrainConfig\\": {\\n        \\"ConnectionDrainEnabled\\": false,\\n        \\"ConnectionDrainTimeout\\": 300\\n      },\\n      \\"SlowStartConfig\\": {\\n        \\"SlowStartEnabled\\": false,\\n        \\"SlowStartDuration\\": 30\\n      }\\n    }\\n  ],\\n  \\"TotalCount\\": 1000\\n}","errorExample":""},{"type":"xml","example":"<ListServerGroupsResponse>\\n    <MaxResults>50</MaxResults>\\n    <NextToken>caeba0bbb2be03f8****</NextToken>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <ServerGroups>\\n        <HealthCheckConfig>\\n            <HealthCheckConnectPort>80</HealthCheckConnectPort>\\n            <HealthCheckEnabled>true</HealthCheckEnabled>\\n            <HealthCheckHost>www.example.com</HealthCheckHost>\\n            <HealthCheckCodes>http_2xx</HealthCheckCodes>\\n            <HealthCheckHttpVersion>HTTP1.1</HealthCheckHttpVersion>\\n            <HealthCheckInterval>5</HealthCheckInterval>\\n            <HealthCheckMethod>HEAD</HealthCheckMethod>\\n            <HealthCheckPath>/test/index.html</HealthCheckPath>\\n            <HealthCheckProtocol>HTTP</HealthCheckProtocol>\\n            <HealthCheckTimeout>3</HealthCheckTimeout>\\n            <HealthyThreshold>4</HealthyThreshold>\\n            <UnhealthyThreshold>4</UnhealthyThreshold>\\n        </HealthCheckConfig>\\n        <Protocol>HTTP</Protocol>\\n        <ResourceGroupId>rg-atstuj3rtop****</ResourceGroupId>\\n        <Scheduler>Wrr</Scheduler>\\n        <ServerGroupId>sgp-cige6j****</ServerGroupId>\\n        <ServerGroupName>Group3</ServerGroupName>\\n        <ServerGroupStatus>Available</ServerGroupStatus>\\n        <ServerGroupType>Instance</ServerGroupType>\\n        <StickySessionConfig>\\n            <Cookie>B490B5EBF6F3CD402E515D22BCDA****</Cookie>\\n            <CookieTimeout>1000</CookieTimeout>\\n            <StickySessionEnabled>false</StickySessionEnabled>\\n            <StickySessionType>Insert</StickySessionType>\\n        </StickySessionConfig>\\n        <VpcId>vpc-bp15zckdt37pq72zv****</VpcId>\\n        <Tags>\\n            <Key>Test</Key>\\n            <Value>Test</Value>\\n        </Tags>\\n        <ConfigManagedEnabled>false</ConfigManagedEnabled>\\n        <UpstreamKeepaliveEnabled>false</UpstreamKeepaliveEnabled>\\n        <Ipv6Enabled>false</Ipv6Enabled>\\n        <ServerCount>1</ServerCount>\\n        <ServiceName>test</ServiceName>\\n        <CreateTime>2023-03-21T07:43:10Z</CreateTime>\\n    </ServerGroups>\\n    <TotalCount>1000</TotalCount>\\n</ListServerGroupsResponse>","errorExample":""}]',
      'title' => '查询服务器组',
    ),
    'ListServerGroupServers' => 
    array (
      'summary' => '查询服务器组中的服务器。',
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
        'abilityTreeCode' => '167',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslbULKWF1',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页查询标识',
            'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。',
            'type' => 'string',
            'required' => false,
            'example' => 'FFmyTO70tTpLG6I3FmYAXG****',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询数量',
            'description' => '本次读取的最大数据记录数量。取值范围：**1**~**100**，入参为空时，默认值为**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '50',
            'default' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'ServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '服务器组id',
            'description' => '服务器组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'sgp-cb25e2i2vr******',
          ),
        ),
        3 => 
        array (
          'name' => 'ServerIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '服务器ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '服务器ID。单次调用最多支持展示40个服务器。

- 当服务器组为**Instance**类型时，该参数为Ecs、Eni、Eci的资源Id。
- 当服务器组为**Ip**类型时，该参数为IP地址。
- 当服务器组为**Fc**时，该参数为函数计算的ARN标识。

',
              'type' => 'string',
              'required' => false,
              'example' => 'i-bp1e0u8f10by57wl****',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        4 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '服务器组绑定的标签列表。一次请求中，绑定的标签列表中最多支持10个标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '服务器组绑定的标签列表。一次请求中，绑定的标签列表中最多支持10个标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '标签键',
                  'description' => '标签键。最多支持10个标签键。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Test',
                ),
                'Value' => 
                array (
                  'title' => '标签值',
                  'description' => '标签值。最多支持10个标签值。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Test',
                ),
              ),
              'required' => false,
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
            'description' => '返回数据结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'MaxResults' => 
              array (
                'title' => '本次查询返回记录数量',
                'description' => '本次请求所返回的最大记录条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'NextToken' => 
              array (
                'title' => '分页查询标识',
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f8****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF*****',
              ),
              'Servers' => 
              array (
                'title' => '后端服务器',
                'description' => '服务器列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '后端服务器描述结构体。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Description' => 
                    array (
                      'title' => '描述信息',
                      'description' => '后端服务器描述。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Port' => 
                    array (
                      'title' => '端口',
                      'description' => '后端服务器使用的端口。取值范围：**1**~**65535**。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '80',
                    ),
                    'ServerId' => 
                    array (
                      'title' => '服务器id',
                      'description' => '后端服务器ID。

>当**ServerType**为**Fc**时，**ServerId**为函数计算的ARN标识。',
                      'type' => 'string',
                      'example' => 'i-bp1f9kdprbgy9uiu****',
                    ),
                    'ServerIp' => 
                    array (
                      'title' => '服务器ip',
                      'description' => '指定的IP地址。',
                      'type' => 'string',
                      'example' => '192.168.XX.XX',
                    ),
                    'ServerType' => 
                    array (
                      'title' => '后端服务器类型',
                      'description' => '后端服务器类型。',
                      'type' => 'string',
                      'example' => 'Ecs',
                    ),
                    'Status' => 
                    array (
                      'title' => '状态',
                      'description' => '后端服务器的添加状态。取值：

- **Adding**：添加中。
- **Available**：正常可用状态。
- **Configuring**：配置中。
- **Removing**：移除中。',
                      'type' => 'string',
                      'example' => 'Available',
                    ),
                    'Weight' => 
                    array (
                      'title' => '权重',
                      'description' => '后端服务器的权重。权重越高的服务器将被分配到更多的访问请求。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '100',
                    ),
                    'ServerGroupId' => 
                    array (
                      'title' => '服务器组id',
                      'description' => '服务器组ID。',
                      'type' => 'string',
                      'example' => 'sgp-qy042e1jabmprh****',
                    ),
                    'RemoteIpEnabled' => 
                    array (
                      'title' => '是否是远端ip',
                      'description' => '是否开启远端IP。取值：
 
- **true**：是。
- **false**：否。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'title' => '总记录数',
                'description' => '本次请求条件下的数据总量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.ServerGroup',
            'errorMessage' => 'Authentication has failed for ServerGroup.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"MaxResults\\": 50,\\n  \\"NextToken\\": \\"caeba0bbb2be03f8****\\",\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF*****\\",\\n  \\"Servers\\": [\\n    {\\n      \\"Description\\": \\"test\\",\\n      \\"Port\\": 80,\\n      \\"ServerId\\": \\"i-bp1f9kdprbgy9uiu****\\",\\n      \\"ServerIp\\": \\"192.168.XX.XX\\",\\n      \\"ServerType\\": \\"Ecs\\",\\n      \\"Status\\": \\"Available\\",\\n      \\"Weight\\": 100,\\n      \\"ServerGroupId\\": \\"sgp-qy042e1jabmprh****\\",\\n      \\"RemoteIpEnabled\\": true\\n    }\\n  ],\\n  \\"TotalCount\\": 3\\n}","errorExample":""},{"type":"xml","example":"<ListServerGroupServersResponse>\\n    <MaxResults>50</MaxResults>\\n    <NextToken>caeba0bbb2be03f8****</NextToken>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <Servers>\\n        <Description>test</Description>\\n        <Port>80</Port>\\n        <ServerId>i-bp1f9kdprbgy9uiu****</ServerId>\\n        <ServerIp>192.168.XX.XX</ServerIp>\\n        <ServerType>Ecs</ServerType>\\n        <Status>Available</Status>\\n        <Weight>100</Weight>\\n        <ServerGroupId>sgp-qy042e1jabmprh****</ServerGroupId>\\n        <RemoteIpEnabled>true</RemoteIpEnabled>\\n    </Servers>\\n    <TotalCount>3</TotalCount>\\n</ListServerGroupServersResponse>","errorExample":""}]',
      'title' => '查询服务器',
    ),
    'RemoveServersFromServerGroup' => 
    array (
      'summary' => '从服务器组中移除后端服务器。',
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
          'name' => 'ServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '后端服务器Id',
            'description' => '服务器组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sgp-atstuj3rtop****',
          ),
        ),
        1 => 
        array (
          'name' => 'Servers',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '后端服务器',
            'description' => '后端服务器组列表，最多支持200个服务器。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '后端服务器组配置信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Port' => 
                array (
                  'title' => '后端端口号',
                  'description' => '后端服务器使用的端口。取值范围：**1**~**65535**。单次调用最多支持传入200个服务器。

> 当**ServerType**取值为**Ecs**、**Eni**、**Eci**、**Ip**时，该参数必传。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'docRequired' => false,
                  'example' => '80',
                ),
                'ServerId' => 
                array (
                  'title' => '后端服务器id',
                  'description' => '后端服务器ID。单次调用最多支持传入200个服务器。

- 当服务器组为**Instance**类型时，该参数为**Ecs**、**Eni**、**Eci**资源ID。

- 当服务器组为**Ip**类型时，该参数为IP地址。

- 当服务器组为**Fc**类型时，该参数为函数计算的ARN标识。

>您可以通过调用[ListServerGroups](~~213627~~)接口获取服务器组类型的取值。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'i-bp1f9kdprbgy9uiu****',
                ),
                'ServerIp' => 
                array (
                  'title' => '后端服务器ip',
                  'description' => 'ENI多IP模式时指定的IP地址。单次调用最多支持传入200个服务器。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '192.168.1.1',
                ),
                'ServerType' => 
                array (
                  'title' => '后端服务器类型',
                  'description' => '后端服务器类型。单次调用最多支持传入200个服务器。取值：
- **Ecs**：ECS实例。
- **Eni**：ENI弹性网卡实例。
- **Eci**：ECI弹性容器。
- **Ip**：IP地址。
- **Fc**：函数计算。',
                  'type' => 'string',
                  'required' => true,
                  'docRequired' => false,
                  'example' => 'Ecs',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 200,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会从服务器组中移除后端服务器。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
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
            'description' => '返回数据结构体',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
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
            'errorCode' => 'IncorrectStatus.ServerGroup',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceInConfiguring.BackendServer',
            'errorMessage' => 'The specified resource of %s is being configured, please try again later.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceInConfiguring',
            'errorMessage' => 'The specified resource of %s is being configured. Please try again later.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.ServerGroup',
            'errorMessage' => 'Authentication is failed for ServerGroup.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.ServerGroup',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.BackendServer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveServersFromServerGroupResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n</RemoveServersFromServerGroupResponse>","errorExample":""}]',
      'title' => '移除后端服务器',
      'description' => '**RemoveServersFromServerGroup**接口属于异步接口，即系统返回一个请求ID，但该后端服务器尚未移除成功，系统后台的移除任务仍在进行。
1. 您可以调用[ListServerGroups](~~213627~~)查询服务器组的状态：
    - 当服务器组处于**Configuring**状态时，表示服务器组正在变配中。
    - 当服务器组处于**Available**状态时，表示服务器组运行中。

2. 您可以调用[ListServerGroupServers](~~213628~~)查询后端服务器的状态：
    - 当后端服务器处于**Removing**状态时，表示后端服务器正在从服务器组中移除。
    - 当查询不到该后端服务器时，表示后端服务器移除成功。',
    ),
    'ReplaceServersInServerGroup' => 
    array (
      'summary' => '替换后端服务器组中的后端服务器。',
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
          'name' => 'ServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '后端服务器Id',
            'description' => '服务器组ID。

>函数计算类型的服务器组不支持替换后端服务器。',
            'type' => 'string',
            'required' => true,
            'example' => 'sgp-5114d593o96qxy****',
          ),
        ),
        1 => 
        array (
          'name' => 'AddedServers',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '待添加后端服务器',
            'description' => '待添加的后端服务器列表，单次调用最多支持传入200个服务器。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '后端服务器结构体。',
              'type' => 'object',
              'properties' => 
              array (
                'Description' => 
                array (
                  'title' => '描述信息',
                  'description' => '后端服务器描述。长度为2~256个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）、短划线（-）、半角逗号（,）、半角分号（;）、正斜线（/）和at（@）。单次调用最多支持传入200个服务器。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
                'Port' => 
                array (
                  'title' => '后端端口号',
                  'description' => '后端服务器组使用的端口。取值范围：**1**~**65535**。单次调用最多支持传入200个服务器。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'docRequired' => true,
                  'example' => '80',
                ),
                'ServerId' => 
                array (
                  'title' => '后端服务器id',
                  'description' => '后端服务器ID。单次调用最多支持传入200个服务器。

- 当服务器组为**Instance**类型时，该参数为**Ecs**、**Eni**、**Eci**资源ID。

- 当服务器组为**Ip**类型时，该参数为IP地址。

>函数计算类型的服务器组不支持替换后端服务器。您可以通过调用[ListServerGroups](~~213627~~)接口获取服务器组类型的取值。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'i-bp1f9kdprbgy9uiu****',
                ),
                'ServerIp' => 
                array (
                  'title' => '后端服务器ip',
                  'description' => 'ENI多IP模式时指定的IP地址。单次调用最多支持传入200个服务器。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '192.168.1.1',
                ),
                'ServerType' => 
                array (
                  'title' => '后端服务器类型',
                  'description' => '后端服务器类型，单次调用最多支持传入200个服务器。取值：

- **Ecs**：ECS实例。
- **Eni**：ENI弹性网卡实例。
- **Eci**：ECI弹性容器。',
                  'type' => 'string',
                  'required' => true,
                  'docRequired' => true,
                  'example' => 'Ecs',
                ),
                'Weight' => 
                array (
                  'title' => '后端服务器权重',
                  'description' => '后端服务器的权重，单次调用最多支持传入200个服务器。

取值：**0**~**100**。默认值：**100**。如果设置权重为**0**，则不会将请求转发给该后端服务器。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '100',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 200,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'RemovedServers',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '待删除后端服务器',
            'description' => '待删除的后端服务器。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '待删除的后端服务器的结构体。',
              'type' => 'object',
              'properties' => 
              array (
                'ServerId' => 
                array (
                  'title' => '后端服务器id',
                  'description' => '后端服务器ID。单次调用最多支持传入200个服务器。

- 当服务器组为**Instance**类型时，该参数为**Ecs**、**Eni**、**Eci**资源ID。

- 当服务器组为**Ip**类型时，该参数为IP地址。

>函数计算类型的服务器组不支持替换后端服务器。您可以通过调用[ListServerGroups](~~213627~~)接口获取服务器组类型的取值。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'i-bp1f9kdprbgy9uiu****',
                ),
                'ServerIp' => 
                array (
                  'title' => '后端服务器ip',
                  'description' => 'ENI多IP模式时指定的IP地址。单次调用最多支持传入200个服务器。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '192.168.1.12',
                ),
                'ServerType' => 
                array (
                  'title' => '后端服务器类型',
                  'description' => '后端服务器类型，单次调用最多支持传入200个服务器。取值：

- **Ecs**：ECS实例。
- **Eni**：ENI弹性网卡实例。
- **Eci**：ECI弹性容器。',
                  'type' => 'string',
                  'required' => true,
                  'docRequired' => true,
                  'example' => 'ecs',
                ),
                'Port' => 
                array (
                  'title' => '端口',
                  'description' => '后端服务器使用的端口。取值范围：**1**~**65535**。单次调用最多支持传入200个服务器。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'docRequired' => true,
                  'example' => '81',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 200,
            'minItems' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等Token',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3',
          ),
        ),
        4 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'dryRun',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会替换服务器组中的后端服务器。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回`HTTP 2xx`状态码并直接进行操作。',
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
            'description' => '返回数据结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
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
            'errorCode' => 'ResourceQuotaExceeded.ServerAddedNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectStatus.ServerGroup',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          2 => 
          array (
            'errorCode' => 'Conflict.BackendServer',
            'errorMessage' => 'There is already %s having the same configuration with %s.',
          ),
          3 => 
          array (
            'errorCode' => 'DuplicatedParam.BackendServer',
            'errorMessage' => 'The param of %s is duplicated.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.EciNotSupportJobType',
            'errorMessage' => 'The operation is not allowed because of eci not support job type.',
          ),
          5 => 
          array (
            'errorCode' => 'Mismatch.ServerType',
            'errorMessage' => 'The %s is mismatched for %s and %s.',
          ),
          6 => 
          array (
            'errorCode' => 'ResourceInConfiguring',
            'errorMessage' => 'The specified resource of %s is being configured. Please try again later.',
          ),
          7 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.LoadBalancerServersNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          8 => 
          array (
            'errorCode' => 'ResourceInConfiguring.BackendServer',
            'errorMessage' => 'The specified resource of %s is being configured, please try again later.',
          ),
          9 => 
          array (
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.ServerGroup',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.Ecs',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotFound.Eci',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.Eni',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'ResourceNotFound.BackendServer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\"\\n}","errorExample":""},{"type":"xml","example":"<ReplaceServersInServerGroupResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n</ReplaceServersInServerGroupResponse>","errorExample":""}]',
      'title' => '替换后端服务器组中的后端服务器',
      'description' => '**ReplaceServersInServerGroup**接口属于异步接口，即系统返回一个请求ID，但该后端服务器尚未替换成功，系统后台的替换任务仍在进行。
1. 您可以调用[ListServerGroups](~~213627~~)查询服务器组的状态：
    - 当服务器组处于**Configuring**状态时，表示服务器组正在变配中。
    - 当服务器组处于**Available**状态时，表示服务器组运行中。

2. 您可以调用[ListServerGroupServers](~~213628~~)查询后端服务器的状态：
    - 当后端服务器处于**Replacing**状态时，表示服务器组移出服务器并加入新的服务器。
    - 当后端服务器处于** Available**状态时，表示后端服务器运行中。',
    ),
    'CreateRule' => 
    array (
      'summary' => '在指定监听下创建转发规则。',
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
          'name' => 'ListenerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '监听标识',
            'description' => '应用型负载均衡实例监听ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lsn-l16uo9y******',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B******',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会创建转发规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回`HTTP 2xx`状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'Priority',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '转发规则优先级',
            'description' => '规则优先级，取值范围：**1~10000**。值越小表示优先级越高。

> 同一个监听内规则优先级必须唯一。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'Direction',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '转发规则方向',
            'description' => '转发规则的方向。取值：

- **Request**（默认值）：请求类型，对从客户端发送到ALB的报文进行条件匹配并进行相应的处理。

- **Response**：响应类型，对从后端服务器组返回到ALB的报文进行条件匹配并进行相应的处理。

> 基础版的ALB实例不支持**Response**类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'Request',
          ),
        ),
        5 => 
        array (
          'name' => 'RuleActions',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '转发规则动作',
            'description' => '转发规则动作列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '规则动作列表。',
              'type' => 'object',
              'properties' => 
              array (
                'FixedResponseConfig' => 
                array (
                  'title' => '返回固定内容动作配置',
                  'description' => '固定响应内容配置。

',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Content' => 
                    array (
                      'title' => '内容',
                      'description' => '返回的固定内容。最大支持存储1 KB，只支持ASCII字符。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'dssacav',
                    ),
                    'ContentType' => 
                    array (
                      'title' => '内容类型',
                      'description' => '返回固定内容的格式。

取值：**text/plain**、**text/css**、**text/html**、**application/javascript**或**application/json**。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'text/plain',
                    ),
                    'HttpCode' => 
                    array (
                      'title' => 'HTTP响应码',
                      'description' => '返回的HTTP响应码，仅支持**2xx**、**4xx**、**5xx**数字型字符串，**x**为任意数字。',
                      'type' => 'string',
                      'required' => false,
                      'example' => '200',
                    ),
                  ),
                  'required' => false,
                ),
                'ForwardGroupConfig' => 
                array (
                  'title' => '转发组动作配置',
                  'description' => '转发到的目的服务器组列表。一条转发规则中最多支持添加5个目的服务器组。
',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ServerGroupTuples' => 
                    array (
                      'title' => '转发到的目的服务器组列表',
                      'description' => '转发到的目的服务器组列表。一条转发规则中最多支持添加5个目的服务器组。

',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '转发到的目的服务器组列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ServerGroupId' => 
                          array (
                            'title' => '服务器组标识',
                            'description' => '转发到的目的服务器组。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'sgp-k86c1ov501id6p****',
                          ),
                          'Weight' => 
                          array (
                            'title' => '权重',
                            'description' => '权重。取值越大，权重越大，表示转发的访问请求更多。取值范围：**0**~**100**。

- 目的服务器组数为1时，未指定权重时默认值为**100**。

- 目的服务器组数大于1时，需要用户指定权重值。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'minimum' => '0',
                            'example' => '100',
                          ),
                        ),
                        'required' => false,
                      ),
                      'required' => false,
                    ),
                    'ServerGroupStickySession' => 
                    array (
                      'title' => '服务器组之间会话保持',
                      'description' => '服务器组之间会话保持。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Enabled' => 
                        array (
                          'title' => '是否开启会话保持',
                          'description' => '是否开启会话保持。取值：

- **true**：开启。
- **false**（默认值）：不开启。',
                          'type' => 'boolean',
                          'required' => false,
                          'example' => 'false',
                        ),
                        'Timeout' => 
                        array (
                          'title' => '超时时间',
                          'description' => '超时时间。单位：秒。取值范围：**1**~**86400**。默认值：**1000**。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'required' => false,
                          'example' => '100',
                        ),
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
                'InsertHeaderConfig' => 
                array (
                  'title' => '插入头部动作配置',
                  'description' => '写入头字段配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'title' => 'HTTP标头',
                      'description' => '插入的头字段名称，长度为1\\~40个字符，支持大小写字母a\\~z、数字、下划线（_）和短划线（-）。**InsertHeaderConfig**中的头字段名称不能重复。

> 不允许将头名称设置为以下字段（不区分大小写）：`slb-id`、`slb-ip`、`x-forwarded-for`、`x-forwarded-proto`、`x-forwarded-eip`、`x-forwarded-port`、`x-forwarded-client-srcport`、`connection`、`upgrade`、`content-length`、`transfer-encoding`、`keep-alive`、`te`、`host`、`cookie`、`remoteip`、`authority`。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'key',
                    ),
                    'Value' => 
                    array (
                      'title' => 'HTTP标头内容',
                      'description' => '插入的头字段内容。

- **ValueType**取值为**SystemDefined**时取值如下：
    - **ClientSrcPort**：客户端端口。
    - **ClientSrcIp**：客户端IP地址。
    - **Protocol**：客户端请求的协议（HTTP或HTTPS)。
    - **SLBId**：应用型负载均衡实例ID。
    - **SLBPort**：应用型负载均衡实例监听端口。
- **ValueType**取值为**UserDefined**时：您可自定义头字段内容，限制长度为1~128个字符，支持通配符星号（*）、半角问号（?）和ASCII码值`ch >= 32 && ch < 127`范围内的可打印字符，开头和结尾不能为空格。
- **ValueType**取值为**ReferenceHeader**时：您可以引用请求头字段中的某一个字段，限制长度限制为1\\~128个字符，支持小写字母a\\~z、数字、短划线（-）和下划线（_）。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'UserDefined',
                    ),
                    'ValueType' => 
                    array (
                      'title' => '取值类型',
                      'description' => '头字段内容类型。取值：

- **UserDefined**：您自定义头字段内容。

- **ReferenceHeader**：引用请求头中的某一个头字段内容。

- **SystemDefined**：系统定义头字段内容。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'UserDefined',
                    ),
                  ),
                  'required' => false,
                ),
                'Order' => 
                array (
                  'title' => '优先级',
                  'description' => '转发规则动作执行的顺序，取值范围：**1~50000**，按值从小到大执行动作。值不能为空，不能重复。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'example' => '1',
                ),
                'RedirectConfig' => 
                array (
                  'title' => '重定向动作配置',
                  'description' => '外部重定向配置。

> **RedirectConfig**的参数，除了**httpCode**外，不能都使用默认值。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Host' => 
                    array (
                      'title' => '要跳转的主机地址',
                      'description' => '要跳转的主机地址。取值：
- **${host}**（默认值）：取此值时不支持和其他字符拼接使用。
- 其他取值，字符集和格式限制如下：
    - 主机名长度为3\\~128个字符，支持小写字母a\\~z、数字、短划线（-）、半角句号（.）以及通配符星号（*）、等号（=）、波浪线（~）、下划线（_）、加号（+）、反斜线（\\）、脱字号（^）、感叹号（!）、美元符号（$）、and（&）、竖线（|）、半角圆括号（()）、方括号（\\[\\]）和半角问号（?）。
    - 主机名至少包含一个半角句号（.），且半角句号（.）不能出现在开头或结尾。
    - 最右侧的域标签只能包含字母和通配符，不能包含数字或短划线（-），最左侧`domainlable`允许是星号（*）。
    - 短划线（-）不能出现在其它域标签的开头或结尾。
    -  通配符星号（*）和半角问号（?）可以出现在域标签的任意位置。',
                      'type' => 'string',
                      'required' => false,
                      'example' => '${host}',
                    ),
                    'HttpCode' => 
                    array (
                      'title' => '跳转方式',
                      'description' => '跳转方式。取值：**301**、**302**、**303**、**307**或**308**。',
                      'type' => 'string',
                      'required' => false,
                      'example' => '301',
                    ),
                    'Path' => 
                    array (
                      'title' => '要跳转的路径',
                      'description' => '要跳转的路径。取值：
- **${path}**（默认值）：可以引用 **${host}**、**${protocol}**和**${port}**，每个变量最多出现一次。上述变量可以同时使用，也可以和下面罗列的可取值范围内的字符串拼接使用。
- 其他取值，字符集和格式限制如下：
    - 长度为1\\~128个字符，大小写敏感，支持通配符星号（*）和半角问号（?）作为通配符使用。
    - 必须以正斜线（/）开头，支持大小写字母、数字和特殊字符`$-_.+/&~@:\'*?`，不支持`“%#;!()[]^,” `，同时支持通配符星号（*）和半角问号（?）。',
                      'type' => 'string',
                      'required' => false,
                      'example' => '/test',
                    ),
                    'Port' => 
                    array (
                      'title' => '要跳转的端口',
                      'description' => '要跳转的端口。
- **${port}**（默认值）：该取值不支持和其他字符同时使用。
- 其他取值：**1~63335**。',
                      'type' => 'string',
                      'required' => false,
                      'example' => '10',
                    ),
                    'Protocol' => 
                    array (
                      'title' => '要跳转的协议',
                      'description' => '要跳转的协议。

- **${protocol}**（默认值）：取该值时不支持和其他字符拼接使用。
- **HTTP**或**HTTPS**。

> HTTPS监听仅支持跳转HTTPS协议。
',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'HTTP',
                    ),
                    'Query' => 
                    array (
                      'title' => '要跳转的查询字符串',
                      'description' => '要跳转的查询字符串。
- **${query}**（默认值）：可以引用 **${host}**、**${protocol}**和**${port}**，每个变量最多出现一次。上述变量可以同时使用，也可以和下面罗列的可取值范围内的字符串拼接使用。
- 其他取值，字符集和格式限制如下：
    - 长度为1\\~128个字符。
    - 支持可见字符，不支持空格和 `#[]{}\\|<>&`。如果是字母则必须是小写字母。',
                      'type' => 'string',
                      'required' => false,
                      'example' => '${query}',
                    ),
                  ),
                  'required' => false,
                ),
                'RewriteConfig' => 
                array (
                  'title' => '内部重定向动作配置',
                  'description' => '内部重定向。

> 同一个转发规则配置多个动作时，**RewriteConfig**动作使用时必须配置**ForwardGroup**的动作类型。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Host' => 
                    array (
                      'title' => '主机名',
                      'description' => '内部跳转的目的主机地址。取值：
- **${host}**（默认值）：该取值不支持和其他字符拼接。

- 其他取值，字符格式限制如下：

    - 主机名长度为3\\~128个字符，支持小写字母a\\~z、数字、短划线（-）、半角句号（.）以及通配符星号（*）、等号（=）、波浪线（~）、下划线（_）、加号（+）、反斜线（\\）、脱字号（^）、感叹号（!）、美元符号（$）、and（&）、竖线（|）、半角圆括号（()）、方括号（\\[\\]）和半角问号（?）。

    - 主机名至少包含一个半角句号（.），且半角句号（.）不能出现在开头或结尾。

    - 最右侧的域标签只能包含字母和通配符，不能包含数字或短划线（-），最左侧`domainlable`允许是星号（*）。

    - 短划线（-）不能出现在其它域标签的开头或结尾。通配符星号（*）和半角问号（？）可以出现在域标签的任意位置。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'www.example.com',
                    ),
                    'Path' => 
                    array (
                      'title' => '路径',
                      'description' => '要跳转的路径。取值：
- **${path}**（默认值）：可以引用 **${host}**、**${protocol}**和**${port}**，每个变量最多出现一次。上述变量可以同时使用，也可以和下面罗列的可取值范围内的字符串拼接使用。
- 其他取值，字符集和格式限制如下：
    - 长度为1\\~128个字符，大小写敏感，支持通配符星号（*）和半角问号（?）作为通配符使用。
    - 必须以正斜线（/）开头，支持大小写字母、数字和特殊字符`$-_.+/&~@:\'*?`，不支持`“%#;!()[]^,” `，同时支持通配符星号（*）和半角问号（?）。',
                      'type' => 'string',
                      'required' => false,
                      'example' => '/tsdf',
                    ),
                    'Query' => 
                    array (
                      'title' => '查询',
                      'description' => '内部跳转的查询字符串。
- **${query}**（默认值）：可以引用 **${host}**、**${protocol}**和**${port}**，每个变量最多出现一次。上述变量可以同时使用，也可以和下面罗列的可取值范围内的字符串拼接使用。
- 其他取值，字符集和格式限制如下：
    - 长度为1\\~128个字符。
    - 支持可见字符，不支持空格和 `#[]{}\\|<>&`。如果是字母则必须是小写字母。',
                      'type' => 'string',
                      'required' => false,
                      'example' => '${query}',
                    ),
                  ),
                  'required' => false,
                ),
                'Type' => 
                array (
                  'title' => '转发规则动作类型',
                  'description' => '动作类型。取值：

- **ForwardGroup**：转发至多个虚拟服务器组。

- **Redirect**：重定向。

- **FixedResponse**：返回固定内容。

- **Rewrite**：重写。

- **InsertHeader**：写入头字段。

- **RemoveHeader**：删除头字段。

- **TrafficLimit**：流量限速。

- **TrafficMirror**：流量镜像。

- **Cors**：跨域。


转发规则中包括的动作类型：

- **FinalType**：一个转发规则的动作中仅能有一项FinalType的动作并且最后执行，只能包含一项**ForwardGroup**、**Redirect**、或**FixedResponse**。

- **ExtType**：一个转发规则可以有一项或多项此类**ExtType**的动作，在**FinalType**的动作之前执行，且需要与**FinalType**并存。包含多项**InsertHeader**或一项**Rewrite**。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'ForwardGroup',
                ),
                'TrafficLimitConfig' => 
                array (
                  'title' => '流量限速',
                  'description' => '流量限速。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'QPS' => 
                    array (
                      'description' => '每秒请求次数。取值范围：**1~1000000**。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '100',
                    ),
                    'PerIpQps' => 
                    array (
                      'description' => '单IP每秒请求次数。 取值范围：**1 ~ 1000000**。

> 如果同时配置**QPS**参数，**PerIpQps**参数的取值必须小于**QPS**参数的取值。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '80',
                    ),
                  ),
                  'required' => false,
                ),
                'TrafficMirrorConfig' => 
                array (
                  'title' => '流量镜像',
                  'description' => '流量镜像。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TargetType' => 
                    array (
                      'title' => '镜像目标类型',
                      'description' => '镜像的目标类型。取值：
- **ForwardGroupMirror**：表示镜像至服务器组。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'ForwardGroupMirror',
                    ),
                    'MirrorGroupConfig' => 
                    array (
                      'title' => '镜像至服务器组',
                      'description' => '流量镜像至服务器组。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ServerGroupTuples' => 
                        array (
                          'description' => '流量镜像至服务器组。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '流量镜像至服务器组。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ServerGroupId' => 
                              array (
                                'description' => '服务器组ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'sgp-00mkgijak0w4qgz9****',
                              ),
                            ),
                            'required' => false,
                          ),
                          'required' => false,
                        ),
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
                'RemoveHeaderConfig' => 
                array (
                  'title' => '去除HTTP标头',
                  'description' => '去除HTTP头部配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'title' => 'HTTP标头键',
                      'description' => '去除的头字段名称，长度为1~40个字符，支持大小写字母a~z、数字、下划线（_）和短划线（-）。头字段名称不能重复用于RemoveHeader中。

- 请求方向（Direction取值为Request）：不允许将头名称设置为以下字段（不区分大小写）：`slb-id`、`slb-ip`、`x-forwarded-for`、`x-forwarded-proto`、`x-forwarded-eip`、`x-forwarded-port`、`x-forwarded-client-srcport`、`connection`、`upgrade`、`content-length`、`transfer-encoding`、`keep-alive`、`te`、`host`、`cookie`、`remoteip`、`authority`。
- 响应方向（Direction取值为Response）：响应方向不允许将头名称设置为以下字段（不区分大小写）：`connection`、`upgrade`、`content-length`、`transfer-encoding`。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'test',
                    ),
                  ),
                  'required' => false,
                ),
                'CorsConfig' => 
                array (
                  'title' => '跨域',
                  'description' => '跨域。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AllowOrigin' => 
                    array (
                      'title' => '允许的访问来源',
                      'description' => '允许的访问来源列表。支持只配置一个元素`*`，或配置一个或多个值。
- 单个值必须以`http://`或者`https://`开头，后边加一个正确的域名或一级泛域名。（例：`http://*.test.abc.example.com`）
- 单个值可以不加端口，也可以指定端口，端口范围：**1**~**65535**。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '允许访问的来源。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://example.com',
                      ),
                      'required' => false,
                    ),
                    'AllowMethods' => 
                    array (
                      'title' => '选择跨域访问时允许的HTTP方法',
                      'description' => '选择跨域访问时允许的HTTP方法。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '选择跨域访问时允许的HTTP方法。取值：

- **GET**。
- **POST**。
- **PUT**。
- **DELETE**。
- **HEAD**。
- **OPTIONS**。
- **PATCH**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GET',
                      ),
                      'required' => false,
                    ),
                    'AllowHeaders' => 
                    array (
                      'title' => '允许跨域的Header列表',
                      'description' => '允许跨域的Header列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '允许跨域的Header列表。支持配置为`*`或配置一个或多个value值，多个value值用半角逗号（,）隔开。单个value值只允许包含大小写字母、数字，不能以下划线（_）和短划线（-）开头或结尾，最大长度限制为32个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_123',
                      ),
                      'required' => false,
                    ),
                    'ExposeHeaders' => 
                    array (
                      'title' => '允许暴露的Header列表',
                      'description' => '允许暴露的Header列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '允许暴露的Header列表。支持配置为`*`或配置一个或多个value值，多个value值用半角逗号（,）隔开。单个value值只允许包含大小写字母、数字，不能以下划线（_）和短划线（-）开头或结尾，最大长度限制为32个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_123',
                      ),
                      'required' => false,
                    ),
                    'AllowCredentials' => 
                    array (
                      'title' => '是否允许携带凭证信息',
                      'description' => '是否允许携带凭证信息。取值：

- **on**：是。
- **off**：否。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'on',
                    ),
                    'MaxAge' => 
                    array (
                      'title' => '预检请求在浏览器的最大缓存时间',
                      'description' => '预检请求在浏览器的最大缓存时间，单位：秒。

取值范围：**-1**~**172800**。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'required' => false,
                      'example' => '1000',
                    ),
                  ),
                  'required' => false,
                ),
              ),
              'required' => true,
            ),
            'required' => true,
            'maxItems' => 100,
            'minItems' => 1,
          ),
        ),
        6 => 
        array (
          'name' => 'RuleConditions',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '转发规则条件',
            'description' => '转发规则条件列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '转发规则条件。',
              'type' => 'object',
              'properties' => 
              array (
                'CookieConfig' => 
                array (
                  'title' => 'Cookie条件配置',
                  'description' => 'Cookie配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Values' => 
                    array (
                      'title' => 'Cookie键值对列表',
                      'description' => 'Cookie值列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'Cookie值结构体。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'title' => 'Cookie条件键',
                            'description' => 'Cookie键。
- 支持1\\~100个字符。
- 支持可见字符和通配符星号（*）和半角问号（?），如果是字母必须为小写字母。
- 不支持空格和`;#[]{}\\|<>&`。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'test',
                          ),
                          'Value' => 
                          array (
                            'title' => 'Cookie条件值',
                            'description' => 'Cookie值。

- 支持1\\~100个字符。
- 支持可见字符和通配符星号（*）和半角问号（?），如果是字母必须为小写字母。
- 不支持空格和`;#[]{}\\|<>&`。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'test',
                          ),
                        ),
                        'required' => false,
                      ),
                      'required' => false,
                      'maxItems' => 10,
                    ),
                  ),
                  'required' => false,
                ),
                'HeaderConfig' => 
                array (
                  'title' => 'HTTP标头条件配置',
                  'description' => '头字段配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'title' => 'HTTP标头键',
                      'description' => '头字段键。

- 支持1\\~40个字符。
- 支持字母a~z、数字、短划线（-）和下划线（_）。
- 不支持Cookie和Host。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'Port',
                    ),
                    'Values' => 
                    array (
                      'title' => 'HTTP标头值列表',
                      'description' => '头字段值。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '头字段值。同一个转发规则条件内头字段值不能重复。
- 支持1\\~128个字符。
- 支持ASCII码值`ch >= 32 && ch < 127`范围内可打印字符、星号（*）和半角问号（?）。
- 开头和结尾不能为空格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '5006',
                      ),
                      'required' => false,
                      'maxItems' => 10,
                    ),
                  ),
                  'required' => false,
                ),
                'HostConfig' => 
                array (
                  'title' => '主机名条件配置',
                  'description' => '主机配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Values' => 
                    array (
                      'title' => '主机名列表',
                      'description' => '主机名。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '主机名。一个转发规则条件中只能有一个主机名，并且取值不能重复。

- 主机名长度为3\\~128个字符，支持小写字母a~z、数字0~9、短划线（-）、半角句号（.）、星号（*）、等号（=）、波浪线（~）、下划线（_）、加号（+）、反斜线（\\）、脱字号（^）、感叹号（!）、美元符号（$）、and（&）、竖线（|）、半角圆括号（()）、方括号（\\[\\]）和半角问号（?）。

- 主机名至少包含一个半角句号（.），且半角句号（.）不能出现在开头或结尾。

- 最右侧的域标签只能包含字母和通配符，不能包含数字或短划线（-），最左侧`domainlable`允许是星号（*）。

- 短划线（-）不能出现在其它域标签的开头或结尾。通配符星号（*）和半角问号（？）可以出现在域标签的任意位置。

- 对于<精确匹配和通配符>的输入框，首字符不可以为波浪线（~）。
- 对于正则的输入框（<正则匹配（不区分大小写）>，首字符不可以为星号（*）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.example.edu',
                      ),
                      'required' => false,
                      'maxItems' => 10,
                    ),
                  ),
                  'required' => false,
                ),
                'MethodConfig' => 
                array (
                  'title' => 'HTTP请求方法条件配置',
                  'description' => '请求方法配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Values' => 
                    array (
                      'title' => 'HTTP请求方法列表',
                      'description' => '请求方法。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '请求方法。

取值：**HEAD**、**GET**、**POST**、**OPTIONS**、**PUT**、**PATCH**、**DELETE**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PUT',
                      ),
                      'required' => false,
                      'maxItems' => 10,
                    ),
                  ),
                  'required' => false,
                ),
                'PathConfig' => 
                array (
                  'title' => '路径条件配置',
                  'description' => '转发路径配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Values' => 
                    array (
                      'title' => '路径条件列表',
                      'description' => '转发路径。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '转发路径。取值范围：
- 长度为1\\~128个字符，大小写敏感，支持星号（*）和半角问号（?）作为通配符使用。

- 非正则表达式的URL ，必须以正斜线（/）开头，支持字母、数字和特殊字符`$-_.+/&~@:\'*?`，不支持`“%#;!()[]^,” `，支持星号（*）和半角问号（?）作为通配符使用。

- 正则表达式的URL ，必须以~开头，支持大小写字母、数字和特殊字符`.-_/=?~^*$:()[]+|`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/test',
                      ),
                      'required' => false,
                      'maxItems' => 10,
                    ),
                  ),
                  'required' => false,
                ),
                'QueryStringConfig' => 
                array (
                  'title' => '查询字符串条件配置',
                  'description' => '查询字符串配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Values' => 
                    array (
                      'title' => '查询字符串条件键值对列表',
                      'description' => '查询字符串。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '查询字符串。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'title' => '查询字符串条件键',
                            'description' => '查询字符串键。

- 长度为1\\~100个字符。
- 支持可见字符、通配符星号（*）和半角问号（？），如果是字母则必须为小写字母。不支持空格和`#[]{}\\|<>&`。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'test',
                          ),
                          'Value' => 
                          array (
                            'title' => '查询字符串条件值',
                            'description' => '查询字符串值。

- 长度为1\\~128个字符。
- 支持小写字母、可见字符和通配符星号（*）和半角问号（？），不支持空格和`#[]{}\\|<>&`。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'test',
                          ),
                        ),
                        'required' => false,
                      ),
                      'required' => false,
                      'maxItems' => 10,
                    ),
                  ),
                  'required' => false,
                ),
                'ResponseStatusCodeConfig' => 
                array (
                  'title' => '返回状态码条件',
                  'description' => '响应状态码配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Values' => 
                    array (
                      'title' => '返回状态码条件',
                      'description' => '响应状态码列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '响应状态码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
                'ResponseHeaderConfig' => 
                array (
                  'title' => '返回HTTP标头',
                  'description' => '标头条件配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'title' => '返回HTTP标头键',
                      'description' => '头字段键。
- 长度为1~40个字符。
- 支持字母a~z、数字、短划线（-）和下划线（_）。
- 不支持Cookie和Host。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'test',
                    ),
                    'Values' => 
                    array (
                      'title' => '返回HTTP标头值',
                      'description' => '头字段值。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '头字段值。

- 长度为1~128个字符。
- 支持ASCII码值`ch >= 32 && ch < 127`范围内可打印字符、小写字母以及通配符星号（*）和半角问号（?）。
- 开头和结尾不能为空格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '50006',
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
                'Type' => 
                array (
                  'title' => '条件类型',
                  'description' => '转发规则类型。取值：

- **Host**：主机。

- **Path**：路径。

- **Header**：HTTP头字段。

- **QueryString**：查询字符串。

- **Method**：请求方法。

- **Cookie**：Cookie。

- **SourceIp**：源IP。

- **ResponseHeader**：响应HTTP头字段。

- **ResponseStatusCode**: 响应状态码。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'Host',
                ),
                'SourceIpConfig' => 
                array (
                  'title' => '基于源IP业务流量匹配',
                  'description' => '基于源IP业务流量匹配。当**Type**为**SourceIP**时必选且有效。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Values' => 
                    array (
                      'title' => '基于源IP业务流量匹配',
                      'description' => '基于源IP业务流量匹配',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '添加一个或多个IP地址或者IP地址段。
',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.0.0/32',
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
              ),
              'required' => true,
            ),
            'required' => true,
            'maxItems' => 100,
            'minItems' => 1,
          ),
        ),
        7 => 
        array (
          'name' => 'RuleName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '转发规则名称',
            'description' => '转发规则名称。 
- 长度为2\\~128个英文或中文字符。
- 必须以大小字母或中文开头，可包含数字，半角句号（.），下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'rule-doc',
          ),
        ),
        8 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签结构。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'env',
                ),
                'Value' => 
                array (
                  'description' => '最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'product',
                ),
              ),
              'required' => false,
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
            'description' => '返回数据结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务Id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF34B540750',
              ),
              'RuleId' => 
              array (
                'title' => '转发规则标识',
                'description' => '转发规则ID。',
                'type' => 'string',
                'example' => 'rule-a3x3pg1yohq3lq****',
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
            'errorCode' => 'IncorrectStatus.Listener',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.SameGroupForForwardAndMirrorAction',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.IpGroupCanNotUsedForMirrorAction',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.GRPCServerGroup',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          4 => 
          array (
            'errorCode' => 'Conflict.Priority',
            'errorMessage' => 'There is already %s having the same configuration with %s.',
          ),
          5 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.LoadBalancerRulesNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          6 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.ServerGroupAttachedNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          7 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.LoadBalancerServersNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          8 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.ServerAddedNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          9 => 
          array (
            'errorCode' => 'QuotaExceeded.RuleWildcardsNum',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          10 => 
          array (
            'errorCode' => 'QuotaExceeded.RuleMatchEvaluationsNum',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          11 => 
          array (
            'errorCode' => 'QuotaExceeded.RuleActionsNum',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          12 => 
          array (
            'errorCode' => 'Mismatch.Protocol',
            'errorMessage' => 'The %s is mismatched for %s and %s.',
          ),
          13 => 
          array (
            'errorCode' => 'Mismatch.VpcId',
            'errorMessage' => 'The %s is mismatched for %s and %s.',
          ),
          14 => 
          array (
            'errorCode' => 'OperationDenied.RewriteMissingForwardGroup',
            'errorMessage' => 'The operation is not allowed because of RewriteMissingForwardGroup.',
          ),
          15 => 
          array (
            'errorCode' => 'ResourceInConfiguring.Listener',
            'errorMessage' => 'The specified listener is being configured, please try again later.',
          ),
          16 => 
          array (
            'errorCode' => 'OperationDenied.MirrorActionSupportHttpGroupOnly',
            'errorMessage' => 'The operation is not allowed because of MirrorActionSupportHttpGroupOnly.',
          ),
          17 => 
          array (
            'errorCode' => 'OperationDenied.ProtocolMustSameForForwardGroupAction',
            'errorMessage' => 'The operation is not allowed because of ProtocolMustSameForForwardGroupAction.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Listener',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.ServerGroup',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540750\\",\\n  \\"RuleId\\": \\"rule-a3x3pg1yohq3lq****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateRuleResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540750</RequestId>\\n    <RuleId>rule-a3x3pg1yohq3lq****</RuleId>\\n</CreateRuleResponse>","errorExample":""}]',
      'title' => '创建转发规则',
      'description' => '调用该接口创建转发规则时，请注意以下事项：
- 配置**Redirect**转发动作时，除了**HttpCode**参数外，其余参数不能全部配置为默认值。
- 同一个转发规则配置多个转发动作时，**Rewrite**转发动作必须配置**ForwardGroup**的动作类型。

- **CreateRule**接口属于异步接口，即系统返回一个实例ID，但该转发规则尚未创建成功，系统后台的创建任务仍在进行。您可以调用[ListRules](~~214379~~)查询转发规则的创建状态：
    - 当转发规则处于**Provisioning**状态时，表示转发规则正在创建中。
    - 当转发规则处于**Available**状态时，表示转发规则创建成功。

-  一条转发规则最多支持添加的条件数（**RuleConditions**）和动作数（**RuleActions**）如下：
    - 条件数：基础版5条，标准版10条，WAF增强版10条。
    - 动作数：基础版3条，标准版5条，WAF增强版5条。',
    ),
    'CreateRules' => 
    array (
      'summary' => '创建多条转发规则。',
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
          'name' => 'ListenerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '监听标识',
            'description' => '应用型负载均衡实例监听ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lsn-l16uo9y******',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B3FF3898',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会创建多条转发规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回`HTTP 2xx`状态码并直接进行创建。
',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'Rules',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '转发规则列表',
            'description' => '转发规则列表。一次最多不能超过10条。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '转发规则结构体。',
              'type' => 'object',
              'properties' => 
              array (
                'Priority' => 
                array (
                  'title' => '转发规则优先级',
                  'description' => '规则优先级，取值：**1**~**10000**。值越小表示优先级越高。最多支持添加10个规则优先级。

> 同一个监听内规则优先级必须唯一。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'example' => '10',
                ),
                'RuleActions' => 
                array (
                  'title' => '转发规则动作',
                  'description' => '规则动作列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '规则动作结构体。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'FixedResponseConfig' => 
                      array (
                        'title' => '返回固定内容动作配置',
                        'description' => '固定响应内容配置。最多支持添加20个固定响应内容。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Content' => 
                          array (
                            'title' => '内容',
                            'description' => '返回的固定内容。最大支持存储1 KB，只支持ASCII字符。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'dssacav',
                          ),
                          'ContentType' => 
                          array (
                            'title' => '内容类型',
                            'description' => '返回固定内容的格式。取值：

- **text/plain**。

- **text/css**。

- **text/html**。

- **application/javascript**。

- **application/json**。
',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'text/plain',
                          ),
                          'HttpCode' => 
                          array (
                            'title' => 'HTTP响应码',
                            'description' => '返回的HTTP响应码，仅支持**2xx**、**4xx**、**5xx**数字型字符串，**x**为任意数字。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '200',
                          ),
                        ),
                        'required' => false,
                      ),
                      'ForwardGroupConfig' => 
                      array (
                        'title' => '转发组动作配置',
                        'description' => '转发组对应的配置。最多支持添加20个转发组。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ServerGroupTuples' => 
                          array (
                            'title' => '转发到的目的服务器组列表',
                            'description' => '转发到的目的服务器组列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '转发到的目的服务器组结构体。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'ServerGroupId' => 
                                array (
                                  'title' => '服务器组标识',
                                  'description' => '转发到的目的服务器组。',
                                  'type' => 'string',
                                  'required' => false,
                                  'example' => 'sgp-k86c1ov501id6p****',
                                ),
                                'Weight' => 
                                array (
                                  'title' => '权重',
                                  'description' => '权重。取值越大，权重越大，表示转发的访问请求更多。取值范围：**0**~**100**。

- 目的服务器组数为1时，未指定权重时默认值为**100**。

- 目的服务器组数大于1时，需要用户指定权重值。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'required' => false,
                                  'minimum' => '0',
                                  'example' => '100',
                                ),
                              ),
                              'required' => false,
                            ),
                            'required' => false,
                          ),
                          'ServerGroupStickySession' => 
                          array (
                            'title' => '服务器组之间会话保持',
                            'description' => '服务器组之间会话保持。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Enabled' => 
                              array (
                                'title' => '是否开启会话保持',
                                'description' => '是否开启会话保持。取值：

- **true**：开启。
- **false**（默认值）：不开启。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                              ),
                              'Timeout' => 
                              array (
                                'title' => '超时时间',
                                'description' => '超时时间。单位：秒。取值范围：**1~86400**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2',
                              ),
                            ),
                            'required' => false,
                          ),
                        ),
                        'required' => false,
                      ),
                      'InsertHeaderConfig' => 
                      array (
                        'title' => '插入头部动作配置',
                        'description' => '写入头字段配置。最多支持添加20个写入头字段。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'title' => 'HTTP标头',
                            'description' => '插入的头字段名称，长度为1\\~40个字符，支持大小写字母a\\~z、数字、下划线（_）和短划线（-）。**InsertHeaderConfig**中的头字段名称不能重复。

> 不允许将头名称设置为以下字段（不区分大小写）：`slb-id`、`slb-ip`、`x-forwarded-for`、`x-forwarded-proto`、`x-forwarded-eip`、`x-forwarded-port`、`x-forwarded-client-srcport`、`connection`、`upgrade`、`content-length`、`transfer-encoding`、`keep-alive`、`te`、`host`、`cookie`、`remoteip`、`authority`。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'key',
                          ),
                          'Value' => 
                          array (
                            'title' => 'HTTP标头内容',
                            'description' => '插入的头字段内容。

- **ValueType**取值为**SystemDefined**时取值如下：
    - **ClientSrcPort**：客户端端口。
    - **ClientSrcIp**：客户端IP地址。
    - **Protocol**：客户端请求的协议（HTTP或HTTPS)。
    - **SLBId**：应用型负载均衡实例ID。
    - **SLBPort**：应用型负载均衡实例监听端口。
- **ValueType**取值为**UserDefined**时：您可自定义头字段内容，限制长度为1~128个字符，支持通配符星号（*）、半角问号（?）和ASCII码值`ch >= 32 && ch < 127`范围内的可打印字符，开头和结尾不能为空格。
- **ValueType**取值为**ReferenceHeader**时：您可以引用请求头字段中的某一个字段，限制长度限制为1\\~128个字符，支持小写字母a\\~z、数字、短划线（-）和下划线（_）。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'UserDefined',
                          ),
                          'ValueType' => 
                          array (
                            'title' => '取值类型',
                            'description' => '头字段内容类型。取值：

- **UserDefined**：您自定义头字段内容。

- **ReferenceHeader**：引用请求头中的某一个头字段内容。

- **SystemDefined**：系统定义头字段内容。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'UserDefined',
                          ),
                        ),
                        'required' => false,
                      ),
                      'Order' => 
                      array (
                        'title' => '优先级',
                        'description' => '转发规则动作执行的顺序，取值范围：**1~50000**，按值从小到大执行动作。值不能为空，不能重复。最多支持添加20个转发规则动作的顺序。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                      ),
                      'RedirectConfig' => 
                      array (
                        'title' => '重定向动作配置',
                        'description' => '外部重定向配置。最多支持添加20个外部重定向。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Host' => 
                          array (
                            'title' => '要跳转的主机地址',
                            'description' => '要跳转的主机地址。取值：
- **${host}**（默认值）：取此值时不支持和其他字符拼接使用。
- 其他取值，字符集和格式限制如下：
    - 主机名长度为3\\~128个字符，支持小写字母a~z、数字、短划线（-）、半角句号（.）以及通配符星号（*）和半角问号（?）。
    - 主机名至少包含一个半角句号（.），且半角句号（.）不能出现在开头或结尾。
    - 最右侧的域标签只能包含字母和通配符，不能包含数字或短划线（-）。
    - 短划线（-）不能出现在其它域标签的开头或结尾。
    -  通配符星号（*）和半角问号（?）可以出现在域标签l的任意位置。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'www.example.com',
                          ),
                          'HttpCode' => 
                          array (
                            'title' => '跳转方式',
                            'description' => '跳转方式。取值：**301**、**302**、**303**、**307**或**308**。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '301',
                          ),
                          'Path' => 
                          array (
                            'title' => '要跳转的路径',
                            'description' => '要跳转的路径。取值：
- **${path}**（默认值）：可以引用 **${host}**、**${protocol}**和**${port}**，每个变量最多出现一次。上述变量可以同时使用，也可以和下面罗列的可取值范围内的字符串拼接使用。
- 其他取值，字符集和格式限制如下：
    - 长度为1\\~128个字符。
    - 必须以正斜线（/）开头，支持字母、数字和特殊字符`$-_.+/&~@:`，不支持`“%#;!()[]^,” `，同时支持通配符星号（*）和半角问号（?）。
    - 大小写敏感。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '/test',
                          ),
                          'Port' => 
                          array (
                            'title' => '要跳转的端口',
                            'description' => '要跳转的端口。
- **${port}**（默认值）：该取值不支持和其他字符同时使用。
- 其他取值：**1~63335**。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '10',
                          ),
                          'Protocol' => 
                          array (
                            'title' => '要跳转的协议',
                            'description' => '要跳转的协议。取值：

- **${protocol}**（默认值）：取该值时不支持和其他字符拼接使用。

- **HTTP**或**HTTPS**。

> HTTPS监听仅支持跳转HTTPS协议。
',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'HTTP',
                          ),
                          'Query' => 
                          array (
                            'title' => '要跳转的查询字符串',
                            'description' => '要跳转的查询字符串。
- **${query}**（默认值）：可以引用 **${host}**、**${protocol}**和**${port}**，每个变量最多出现一次。上述变量可以同时使用，也可以和下面罗列的可取值范围内的字符串拼接使用。
- 其他取值，字符集和格式限制如下：
    - 长度为1\\~128个字符。
    - 支持可见字符，不支持空格和 `#[]{}\\|<>&`。如果是字母则必须是小写字母。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'quert',
                          ),
                        ),
                        'required' => false,
                      ),
                      'RewriteConfig' => 
                      array (
                        'title' => '内部重定向动作配置',
                        'description' => '内部重定向。最多支持添加20个内部重定向。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Host' => 
                          array (
                            'title' => '主机名',
                            'description' => '内部跳转的目的主机地址。取值：
- **${host}**（默认值）：该取值不支持和其他字符拼接。

- 其他取值，字符格式限制如下：

    - 主机名长度为3\\~128个字符，支持小写字母a~z、数字、短划线（-）、半角句号（.）以及通配符星号（*）和半角问号（?）。

    - 主机名至少包含一个半角句号（.），且半角句号（.）不能出现在开头或结尾。

    - 最右侧的域标签只能包含字母和通配符，不能包含数字或短划线（-）。

    - 短划线（-）不能出现在其它域标签的开头或结尾。通配符星号（*）和半角问号（?）可以出现在域标签的任意位置。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'www.example.com',
                          ),
                          'Path' => 
                          array (
                            'title' => '路径',
                            'description' => '要跳转的路径。取值：
- **${path}**（默认值）：可以引用 **${host}**、**${protocol}**和**${port}**，每个变量最多出现一次。上述变量可以同时使用，也可以和下面罗列的可取值范围内的字符串拼接使用。
- 其他取值，字符集和格式限制如下：
    - 长度为1\\~128个字符。
    - 必须以正斜线（/）开头，支持字母、数字和特殊字符`$-_.+/&~@:`，不支持`“%#;!()[]^,” `，同时支持通配符星号（*）和半角问号（?）。
    - 大小写敏感。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '/tsdf',
                          ),
                          'Query' => 
                          array (
                            'title' => '查询',
                            'description' => '内部跳转的查询字符串。
- **${query}**（默认值）：可以引用 **${host}**、**${protocol}**和**${port}**，每个变量最多出现一次。上述变量可以同时使用，也可以和下面罗列的可取值范围内的字符串拼接使用。
- 其他取值，字符集和格式限制如下：
    - 长度为1\\~128个字符。
    - 支持可见字符，不支持空格和 `#[]{}\\|<>&`。如果是字母则必须是小写字母。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'quedsa',
                          ),
                        ),
                        'required' => false,
                      ),
                      'Type' => 
                      array (
                        'title' => '转发规则动作类型',
                        'description' => '动作类型。最多支持添加11个动作类型。取值：

- **ForwardGroup**：转发至多个虚拟服务器组。

- **Redirect**：重定向。

- **FixedResponse**：返回固定内容。

- **Rewrite**：重写。

- **InsertHeader**：写入头字段。

- **RemoveHeader**：删除头字段。

- **TrafficLimit**：流量限速。

- **TrafficMirror**：流量镜像。

- **Cors**：跨域。

转发规则中包括的动作类型：

- **FinalType**：一个转发规则的动作中仅能有一项FinalType的动作并且最后执行，只能包含一项**ForwardGroup**、**Redirect**、或**FixedResponse**。

- **ExtType**：一个转发规则可以有一项或多项此类**ExtType**的动作，在**FinalType**的动作之前执行，且需要与**FinalType**并存。包含多项**InsertHeader**或一项**Rewrite**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ForwardGroup',
                      ),
                      'TrafficLimitConfig' => 
                      array (
                        'title' => '流量限速',
                        'description' => '流量限速。最多支持添加20个流量限速。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'QPS' => 
                          array (
                            'description' => '每秒请求次数。取值范围：**1~1000000**。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'example' => '100',
                          ),
                          'PerIpQps' => 
                          array (
                            'description' => '单IP每秒请求次数。 取值范围：**1 ~ 1000000**。

> 如果同时配置**QPS**参数，**PerIpQps**参数的取值必须小于**QPS**参数的取值。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'example' => '80',
                          ),
                        ),
                        'required' => false,
                      ),
                      'TrafficMirrorConfig' => 
                      array (
                        'title' => '流量镜像',
                        'description' => '流量镜像。最多支持添加20个流量镜像。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'TargetType' => 
                          array (
                            'title' => '镜像目标类型',
                            'description' => '镜像的目标类型。取值：
- **ForwardGroupMirror**：表示镜像至服务器组。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ForwardGroupMirror',
                          ),
                          'MirrorGroupConfig' => 
                          array (
                            'title' => '镜像至服务器组',
                            'description' => '流量镜像至服务器组。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ServerGroupTuples' => 
                              array (
                                'description' => '流量镜像至服务器组。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '流量镜像至服务器组。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'ServerGroupId' => 
                                    array (
                                      'description' => '服务器组ID。',
                                      'type' => 'string',
                                      'required' => false,
                                      'example' => 'sgp-cb25e2i2*****',
                                    ),
                                  ),
                                  'required' => false,
                                ),
                                'required' => false,
                              ),
                            ),
                            'required' => false,
                          ),
                        ),
                        'required' => false,
                      ),
                      'RemoveHeaderConfig' => 
                      array (
                        'title' => '去除HTTP标头',
                        'description' => '去除HTTP头部配置。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'title' => 'HTTP标头键',
                            'description' => '去除的头字段名称，长度为1\\~40个字符，支持大小写字母a~z、数字、下划线（_）和短划线（-）。头字段名称不能重复用于RemoveHeader中。

* 请求方向（Direction取值为Request）：不允许将头名称设置为以下字段（不区分大小写）：`slb-id`、`slb-ip`、`x-forwarded-for`、`x-forwarded-proto`、`x-forwarded-eip`、`x-forwarded-port`、`x-forwarded-client-srcport`、`connection`、`upgrade`、`content-length`、`transfer-encoding`、`keep-alive`、`te`、`host`、`cookie`、`remoteip`、`authority`。
* 响应方向（Direction取值为Response）：响应方向不允许将头名称设置为以下字段（不区分大小写）：`connection`、`upgrade`、`content-length`、`transfer-encoding`。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'test',
                          ),
                        ),
                        'required' => false,
                      ),
                      'CorsConfig' => 
                      array (
                        'title' => '跨域',
                        'description' => '跨域。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'AllowOrigin' => 
                          array (
                            'title' => '允许的访问来源',
                            'description' => '允许的访问来源列表。支持只配置一个元素`*`，或配置一个或多个值。
- 单个值必须以`http://`或者`https://`开头，后边加一个正确的域名或一级泛域名。（例：`http://*.test.abc.example.com`）
- 单个值可以不加端口，也可以指定端口，端口范围：**1**~**65535**。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '允许访问的来源。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'http://example.com',
                            ),
                            'required' => false,
                          ),
                          'AllowMethods' => 
                          array (
                            'title' => '选择跨域访问时允许的HTTP方法',
                            'description' => '选择跨域访问时允许的HTTP方法。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '选择跨域访问时允许的HTTP方法。取值：
- **GET**。
- **POST**。
- **PUT**。
- **DELETE**。
- **HEAD**。
- **OPTIONS**。
- **PATCH**。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'GET',
                            ),
                            'required' => false,
                          ),
                          'AllowHeaders' => 
                          array (
                            'title' => '允许跨域的Header列表',
                            'description' => '允许跨域的Header列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '允许跨域的Header列表。支持配置为`*`或配置一个或多个value值，多个value值用半角逗号（,）隔开。单个value值只允许包含大小写字母、数字，不能以下划线（_）和短划线（-）开头或结尾，最大长度限制为32个字符。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'test_123',
                            ),
                            'required' => false,
                          ),
                          'ExposeHeaders' => 
                          array (
                            'title' => '允许暴露的Header列表',
                            'description' => '允许暴露的Header列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '允许暴露的Header列表。支持配置为`*`或配置一个或多个value值，多个value值用半角逗号（,）隔开。单个value值只允许包含大小写字母、数字，不能以下划线（_）和短划线（-）开头或结尾，最大长度限制为32个字符。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'test_123',
                            ),
                            'required' => false,
                          ),
                          'AllowCredentials' => 
                          array (
                            'title' => '是否允许携带凭证信息',
                            'description' => '是否允许携带凭证信息。取值：

- **on**：是。
- **off**：否。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'on',
                          ),
                          'MaxAge' => 
                          array (
                            'title' => '预检请求在浏览器的最大缓存时间',
                            'description' => '预检请求在浏览器的最大缓存时间，单位：秒。

取值范围：**-1**~**172800**。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                            'example' => '1000',
                          ),
                        ),
                        'required' => false,
                      ),
                    ),
                    'required' => true,
                  ),
                  'required' => true,
                  'maxItems' => 100,
                  'minItems' => 1,
                ),
                'RuleConditions' => 
                array (
                  'title' => '转发规则条件',
                  'description' => '转发规则条件列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '转发规则条件。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CookieConfig' => 
                      array (
                        'title' => 'Cookie条件配置',
                        'description' => 'Cookie配置。最多支持添加20个Cookie。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Values' => 
                          array (
                            'title' => 'Cookie键值对列表',
                            'description' => 'Cookie值。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => 'Cookie值结构体。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Key' => 
                                array (
                                  'title' => 'Cookie条件键',
                                  'description' => 'Cookie键。

- 支持1\\~100个字符。
- 支持可见字符和通配符星号（*）和半角问号（?），如果是字母必须为小写字母。
- 不支持空格和`;#[]{}\\|<>&`。',
                                  'type' => 'string',
                                  'required' => false,
                                  'example' => 'test',
                                ),
                                'Value' => 
                                array (
                                  'title' => 'Cookie条件值',
                                  'description' => 'Cookie值。
- 支持1\\~100个字符。
- 支持可见字符和通配符星号（*）和半角问号（?），如果是字母必须为小写字母。
- 不支持空格和`;#[]{}\\|<>&`。',
                                  'type' => 'string',
                                  'required' => false,
                                  'example' => 'test',
                                ),
                              ),
                              'required' => false,
                            ),
                            'required' => false,
                            'maxItems' => 10,
                          ),
                        ),
                        'required' => false,
                      ),
                      'HeaderConfig' => 
                      array (
                        'title' => 'HTTP标头条件配置',
                        'description' => '头字段配置。最多支持添加20个头字段。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'title' => 'HTTP标头键',
                            'description' => '头字段键。

- 支持1\\~40个字符。
- 支持字母a~z、数字、短划线（-）和下划线（_）。
- 不支持Cookie和Host。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'Port',
                          ),
                          'Values' => 
                          array (
                            'title' => 'HTTP标头值列表',
                            'description' => '头字段值。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '头字段值。同一个转发规则条件内头字段值不能重复。
- 支持1\\~128个字符。
- 支持ASCII码值`ch >= 32 && ch < 127`范围内可打印字符、星号（*）和半角问号（?）。
- 开头和结尾不能为空格。',
                              'type' => 'string',
                              'required' => false,
                              'example' => '5006',
                            ),
                            'required' => false,
                            'maxItems' => 10,
                          ),
                        ),
                        'required' => false,
                      ),
                      'HostConfig' => 
                      array (
                        'title' => '主机名条件配置',
                        'description' => '主机配置。最多支持添加20个主机。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Values' => 
                          array (
                            'title' => '主机名列表',
                            'description' => '主机名。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '主机名。一个转发规则条件中只能有一个主机名，并且取值不能重复。

- 主机名长度为3\\~128个字符，支持小写字母a\\~z、数字0\\~9、短划线（-）、半角句号（.）、星号（*）和半角问号（?）。

- 主机名至少包含一个半角句号（.），且半角句号（.）不能出现在开头或结尾。

- 最右侧的域标签只能包含字母和通配符，不能包含数字或短划线（-）。

- 短划线（-）不能出现在其它域标签的开头或结尾。通配符星号（*）和半角问号（?）可以出现在域标签的任意位置。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'www.example.com',
                            ),
                            'required' => false,
                            'maxItems' => 10,
                          ),
                        ),
                        'required' => false,
                      ),
                      'MethodConfig' => 
                      array (
                        'title' => 'HTTP请求方法条件配置',
                        'description' => '请求方法配置。最多支持添加20个请求方法。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Values' => 
                          array (
                            'title' => 'HTTP请求方法列表',
                            'description' => '请求方法。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '请求方法。取值：**HEAD**、**GET**、**POST**、**OPTIONS**、**PUT**、**PATCH**、**DELETE**。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'PUT',
                            ),
                            'required' => false,
                            'maxItems' => 10,
                          ),
                        ),
                        'required' => false,
                      ),
                      'PathConfig' => 
                      array (
                        'title' => '路径条件配置',
                        'description' => '转发路径配置。最多支持添加20个请转发路径。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Values' => 
                          array (
                            'title' => '路径条件列表',
                            'description' => '转发路径。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '转发路径。取值范围：
- 长度为1\\~128个字符。
- 必须以正斜线（/）开头，支持字母、数字和特殊字符`$-_.+/&~@:`，不支持`“%#;!()[]^,” `，同时支持通配符星号（*）和半角问号（?）。
- 大小写敏感。',
                              'type' => 'string',
                              'required' => false,
                              'example' => '/test',
                            ),
                            'required' => false,
                            'maxItems' => 10,
                          ),
                        ),
                        'required' => false,
                      ),
                      'QueryStringConfig' => 
                      array (
                        'title' => '查询字符串条件配置',
                        'description' => '查询字符串条件配置。最多支持添加20个查询字符串条件。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Values' => 
                          array (
                            'title' => '查询字符串条件键值对列表',
                            'description' => '查询字符串条件。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '查询字符串条件。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Key' => 
                                array (
                                  'title' => '查询字符串条件键',
                                  'description' => '查询字符串键。

- 长度为1~100个字符。
- 支持可见字符、通配符星号（*）和半角问号（?），如果是字母则必须为小写字母。不支持空格和`#[]{}\\|<>&`。',
                                  'type' => 'string',
                                  'required' => false,
                                  'example' => 'test',
                                ),
                                'Value' => 
                                array (
                                  'title' => '查询字符串条件值',
                                  'description' => '查询字符串值。

- 长度为1\\~128个字符。
- 支持小写字母、可见字符和通配符星号（*）和半角问号（?），不支持空格和`#[]{}\\|<>&`。',
                                  'type' => 'string',
                                  'required' => false,
                                  'example' => 'test',
                                ),
                              ),
                              'required' => false,
                            ),
                            'required' => false,
                            'maxItems' => 10,
                          ),
                        ),
                        'required' => false,
                      ),
                      'ResponseHeaderConfig' => 
                      array (
                        'title' => '返回HTTP标头',
                        'description' => '标头条件配置。最多支持添加20个标头条件。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'title' => '返回HTTP标头键',
                            'description' => '头字段键。
- 长度为1~40个字符。
- 支持字母a~z、数字、短划线（-）和下划线（_）。
- 不支持Cookie和Host。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'Port',
                          ),
                          'Values' => 
                          array (
                            'title' => '返回HTTP标头值',
                            'description' => '头字段值。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '头字段值。
- 长度为1\\~128个字符。
- 支持ASCII码值`ch >= 32 && ch < 127`范围内可打印字符、小写字母以及通配符星号（*）和半角问号（?）。
- 开头和结尾不能为空格。',
                              'type' => 'string',
                              'required' => false,
                              'example' => '5006',
                            ),
                            'required' => false,
                          ),
                        ),
                        'required' => false,
                      ),
                      'ResponseStatusCodeConfig' => 
                      array (
                        'title' => '返回状态码条件',
                        'description' => '响应状态码配置。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Values' => 
                          array (
                            'title' => '返回状态码条件',
                            'description' => '响应状态码列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '响应状态码。',
                              'type' => 'string',
                              'required' => false,
                              'example' => '200',
                            ),
                            'required' => false,
                          ),
                        ),
                        'required' => false,
                      ),
                      'Type' => 
                      array (
                        'title' => '条件类型',
                        'description' => '转发规则类型。最多支持添加7个转发类型。取值：

- **Host**：主机。

- **Path**：路径。

- **Header**：HTTP头字段。

- **QueryString**：查询字符串。

- **Method**：请求方法。

- **Cookie**：Cookie。

- **SourceIp**：源IP。

- **ResponseHeader**：响应HTTP头字段。

- **ResponseStatusCode**: 响应状态码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Host',
                      ),
                      'SourceIpConfig' => 
                      array (
                        'title' => '基于源IP业务流量匹配',
                        'description' => '基于源IP业务流量匹配。当**Type**为**SourceIP**时必选且有效。一条转发规则中最多支持添加5条**SourceIp**。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Values' => 
                          array (
                            'title' => '基于源IP业务流量匹配',
                            'description' => '基于源IP业务流量匹配',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '添加一个或多个IP地址或者IP地址段。

一条转发规则中最多支持添加5条**SourceIp**。',
                              'type' => 'string',
                              'required' => false,
                              'example' => '192.168.0.0/32',
                            ),
                            'required' => false,
                          ),
                        ),
                        'required' => false,
                      ),
                    ),
                    'required' => true,
                  ),
                  'required' => true,
                  'maxItems' => 100,
                  'minItems' => 1,
                ),
                'RuleName' => 
                array (
                  'title' => '转发规则名称',
                  'description' => '转发规则名称。最多支持添加20个转发规则名称。
- 长度为2\\~128个英文或中文字符。
- 必须以大小字母或中文开头，可包含数字，半角句号（.），下划线（_）和短划线（-）。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'test',
                ),
                'Direction' => 
                array (
                  'title' => '转发规则方向',
                  'description' => '转发规则的方向。最多支持添加1个转发规则方向。取值：

- **Request**（默认值）：请求类型，对从客户端发送到ALB的报文进行条件匹配并进行相应的处理。

- **Response**：响应类型，对从后端服务器组返回到ALB的报文进行条件匹配并进行相应的处理。

> 基础版的ALB实例不支持**Response**类型。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Request',
                ),
                'Tag' => 
                array (
                  'description' => '标签。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '标签结构。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Key' => 
                      array (
                        'description' => '标签键。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'env',
                      ),
                      'Value' => 
                      array (
                        'description' => '标签值。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'product',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                ),
              ),
              'required' => true,
            ),
            'required' => true,
            'maxItems' => 11,
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
            'description' => '创建多条转发规则。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务Id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF34B540710',
              ),
              'RuleIds' => 
              array (
                'title' => '转发规则标识列表',
                'description' => '转发规则列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '转发规则列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RuleId' => 
                    array (
                      'title' => '转发规则标识',
                      'description' => '转发规则ID。',
                      'type' => 'string',
                      'example' => 'rule-a3x3pg1yohq3lq****',
                    ),
                    'Priority' => 
                    array (
                      'title' => '转发规则优先级',
                      'description' => '转发规则优先级，取值范围：**1~10000**。值越小表示优先级越高。

> 同一个监听内规则优先级必须唯一。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '10',
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
            'errorCode' => 'IncorrectStatus.Listener',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.IpGroupCanNotUsedForMirrorAction',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.SameGroupForForwardAndMirrorAction',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.GRPCServerGroup',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          4 => 
          array (
            'errorCode' => 'Conflict.Priority',
            'errorMessage' => 'There is already %s having the same configuration with %s.',
          ),
          5 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.LoadBalancerRulesNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          6 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.ServerGroupAttachedNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          7 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.LoadBalancerServersNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          8 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.ServerAddedNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          9 => 
          array (
            'errorCode' => 'QuotaExceeded.RuleWildcardsNum',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          10 => 
          array (
            'errorCode' => 'QuotaExceeded.RuleMatchEvaluationsNum',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          11 => 
          array (
            'errorCode' => 'QuotaExceeded.RuleActionsNum',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          12 => 
          array (
            'errorCode' => 'Mismatch.VpcId',
            'errorMessage' => 'The %s is mismatched for %s and %s.',
          ),
          13 => 
          array (
            'errorCode' => 'Mismatch.Protocol',
            'errorMessage' => 'The %s is mismatched for %s and %s.',
          ),
          14 => 
          array (
            'errorCode' => 'OperationDenied.RewriteMissingForwardGroup',
            'errorMessage' => 'The operation is not allowed because of RewriteMissingForwardGroup.',
          ),
          15 => 
          array (
            'errorCode' => 'OperationDenied.MirrorActionSupportHttpGroupOnly',
            'errorMessage' => 'The operation is not allowed because of MirrorActionSupportHttpGroupOnly.',
          ),
          16 => 
          array (
            'errorCode' => 'OperationDenied.ProtocolMustSameForForwardGroupAction',
            'errorMessage' => 'The operation is not allowed because of ProtocolMustSameForForwardGroupAction.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Listener',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.ServerGroup',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\",\\n  \\"RuleIds\\": [\\n    {\\n      \\"RuleId\\": \\"rule-a3x3pg1yohq3lq****\\",\\n      \\"Priority\\": 10\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<CreateRulesResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <RuleIds>\\n        <RuleId>rule-a3x3pg1yohq3lq****</RuleId>\\n        <Priority>10</Priority>\\n    </RuleIds>\\n</CreateRulesResponse>","errorExample":""}]',
      'title' => '批量创建转发规则',
      'description' => '调用该接口创建转发规则时，请注意以下事项：
- 配置**Redirect**转发动作时，除了**HttpCode**参数外，其余参数不能都配置默认值。
- 同一个转发规则配置多个转发动作时，**Rewrite**转发动作必须配置**ForwardGroup**的动作类型。
- **CreateRules**接口属于异步接口，即系统返回一个实例ID，但该多条转发规则尚未创建成功，系统后台的创建任务仍在进行。您可以调用[ListRules](~~214379~~)查询多条转发规则的创建状态：
    - 当多条转发规则处于**Provisioning**状态时，表示多条转发规则正在创建中。
    - 当多条转发规则处于**Available**状态时，表示多条转发规则创建成功。
-  一条转发规则最多支持添加的条件数（**RuleConditions**）和动作数（**RuleActions**）如下：
    - 条件数：基础版5条，标准版10条，WAF增强版10条。
    - 动作数：基础版3条，标准版5条，WAF增强版10条。',
    ),
    'DeleteRule' => 
    array (
      'summary' => '删除指定的转发规则。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B3FF3898',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会删除一条转发规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回`HTTP_2xx`状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '转发规则标识',
            'description' => '转发规则ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'rule-doc****',
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
            'description' => '删除一条转发规则。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务Id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
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
            'errorCode' => 'IncorrectStatus.Rule',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceInConfiguring.Listener',
            'errorMessage' => 'The specified listener is being configured, please try again later.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Rule',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteRuleResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n</DeleteRuleResponse>","errorExample":""}]',
      'title' => '删除转发规则',
      'description' => '**DeleteRule**接口属于异步接口，即系统返回一个请求ID，但该转发规则尚未删除成功，系统后台的删除任务仍在进行。您可以调用[ListRules](~~214379~~)查询转发规则的删除状态：
- 当转发规则处于**Deleting**状态时，表示转发规则正在删除中。
- 当查询不到转发规则状态时，表示转发规则删除成功。',
    ),
    'DeleteRules' => 
    array (
      'summary' => '批量删除同一监听下的转发规则。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B3FF3898',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会删除多条转发规则。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回`HTTP 2xx`状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'RuleIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '同一个监听下的转发规则标识列表',
            'description' => '转发规则列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '转发规则ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'rule-a3x3pg1yohq3lq****',
            ),
            'required' => true,
            'maxItems' => 11,
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
            'description' => '删除多条转发规则。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务Id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7BED4F62-3E6E-5E4F-8C53-2D8CCE77F2ED',
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
            'errorCode' => 'IncorrectStatus.Rule',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.CrossLoadBalancerRules',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.LoadBalancer',
            'errorMessage' => 'Authentication is failed for %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Rule',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"7BED4F62-3E6E-5E4F-8C53-2D8CCE77F2ED\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteRulesResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>7BED4F62-3E6E-5E4F-8C53-2D8CCE77F2ED</RequestId>\\n</DeleteRulesResponse>","errorExample":""}]',
      'title' => '批量删除转发规则',
      'description' => '**DeleteRules**接口属于异步接口，即系统返回一个请求ID，但该多条转发规则尚未删除成功，系统后台的删除任务仍在进行。您可以调用[ListRules](~~214379~~)查询多条转发规则的删除状态：
- 当多条转发规则处于**Deleting**状态时，表示多条转发规则正在删除中。
- 当查询不到多条转发规则的状态时，表示多条转发规则删除成功。',
    ),
    'UpdateRuleAttribute' => 
    array (
      'summary' => '更新转发规则属性，如条件、动作、名称等。',
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
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '转发规则标识',
            'description' => '转发规则ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'rule-4dp5i6ea****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B3FF3898',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会更新转发规则属性。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回`HTTP 2xx`状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'RuleConditions',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '转发规则条件',
            'description' => '转发规则条件。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '转发规则条件。',
              'type' => 'object',
              'properties' => 
              array (
                'CookieConfig' => 
                array (
                  'title' => 'Cookie条件配置',
                  'description' => 'Cookie配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Values' => 
                    array (
                      'title' => 'Cookie键值对列表',
                      'description' => 'Cookie配置。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'Cookie配置。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'title' => 'Cookie条件键',
                            'description' => 'Cookie键。长度为1~100个字符，支持小写字母、可见字符、星号（*）和半角问号（?），不支持空格和`#[]{}\\|<>&`。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'test',
                          ),
                          'Value' => 
                          array (
                            'title' => 'Cookie条件值',
                            'description' => 'Cookie值。长度为1~128个字符，支持小写英文字母、可见字符、星号（*）和半角问号（?），不支持空格和`#[]{}\\|<>&`。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'test',
                          ),
                        ),
                        'required' => false,
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
                'HeaderConfig' => 
                array (
                  'title' => 'HTTP标头条件配置',
                  'description' => '头字段配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'title' => 'HTTP标头键',
                      'description' => '头字段键。长度为1~40个字符，支持字母、数字、短划线（-）和下划线（_），不支持Cookie和Host。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'Port',
                    ),
                    'Values' => 
                    array (
                      'title' => 'HTTP标头值列表',
                      'description' => '头字段值。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '头字段值。同一个转发规则条件内头字段值不能重复。命名规则：
- 支持1~128个字符。
- 支持ASCII码值`ch >= 32 && ch < 127`范围内可打印字符、星号（*）和半角问号（?）。
- 开头和结尾不能为空格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '5006',
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
                'HostConfig' => 
                array (
                  'title' => '主机名条件配置',
                  'description' => '主机配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Values' => 
                    array (
                      'title' => '主机名列表',
                      'description' => '主机名。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '主机名。命名规则：

- 主机名长度为3\\~128个字符，支持小写字母a\\~z、数字、短划线（-）、半角句号（.）以及星号（*）和半角问号（?）。

- 主机名至少包含一个半角句号（.），且半角句号（.）不能出现在开头或结尾。

- 最右侧的域标签只能包含字母、星号（*）和问号（？），不能包含数字或短划线（-）。

- 短划线（-）不能出现在其它域标签的开头或结尾。星号（*）和半角问号（?）可以出现在域标签的任意位置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.example.com',
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
                'MethodConfig' => 
                array (
                  'title' => 'HTTP请求方法条件配置',
                  'description' => '请求方法配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Values' => 
                    array (
                      'title' => 'HTTP请求方法列表',
                      'description' => '请求方法。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '请求方法。

取值：**HEAD**、**GET**、**POST**、**OPTIONS**、**PUT**、**PATCH**或**DELETE**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PUT',
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
                'PathConfig' => 
                array (
                  'title' => '路径条件配置',
                  'description' => '转发的路径配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Values' => 
                    array (
                      'title' => '路径条件列表',
                      'description' => '转发路径。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '转发路径。命名规则：
- 长度为1~128个字符。
- 必须以正斜线（/）开头，支持字母、数字和特殊字符`$-_.+/&~@:`，不支持`“%#;!()[]^,” `，支持星号（*）和半角问号（?）作为通配符使用。
',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/test',
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
                'QueryStringConfig' => 
                array (
                  'title' => '查询字符串条件配置',
                  'description' => '查询字符串配置。最多支持添加20个查询字符串。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Values' => 
                    array (
                      'title' => '查询字符串条件键值对列表',
                      'description' => '查询字符串。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '查询字符串。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'title' => '查询字符串条件键',
                            'description' => '查询字符串键。长度为1~100个字符，支持小写字母、可见字符、星号（*）和半角问号（?），不支持空格和`#[]{}\\|<>&`。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'test',
                          ),
                          'Value' => 
                          array (
                            'title' => '查询字符串条件值',
                            'description' => '查询字符串值。长度为1~128个字符，支持小写字母、可见字符、星号（*）和半角问号（?），不支持空格和`#[]{}\\|<>&`。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'test',
                          ),
                        ),
                        'required' => false,
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
                'Type' => 
                array (
                  'title' => '条件类型',
                  'description' => '转发规则类型。最多支持添加7个转发规则类型。取值：

- **Host**：主机。

- **Path**：路径。

- **Header**：HTTP头字段。

- **QueryString**：查询字符串。

- **Method**：请求方法。

- **Cookie**：Cookie。

- **SourceIp**：源IP。

- **ResponseHeader**：响应HTTP头字段。

- **ResponseStatusCode**: 响应状态码。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Host',
                ),
                'ResponseStatusCodeConfig' => 
                array (
                  'title' => '返回状态码条件',
                  'description' => '响应状态码配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Values' => 
                    array (
                      'title' => '返回状态码条件',
                      'description' => '响应状态码列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '响应状态码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
                'ResponseHeaderConfig' => 
                array (
                  'title' => '返回HTTP标头',
                  'description' => '标头条件配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'title' => '返回HTTP标头键',
                      'description' => '头字段键。
- 长度为1~40个字符。
- 支持字母a~z、数字、短划线（-）和下划线（_）。
- 不支持Cookie和Host。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'test',
                    ),
                    'Values' => 
                    array (
                      'title' => '返回HTTP标头值',
                      'description' => '头字段值。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '头字段值。

- 长度为1~128个字符。
- 支持ASCII码值`ch >= 32 && ch < 127`范围内可打印字符、小写字母以及通配符星号（*）和半角问号（?）。
- 开头和结尾不能为空格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '50006',
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
                'SourceIpConfig' => 
                array (
                  'title' => '基于源IP业务流量匹配',
                  'description' => '基于源IP业务流量匹配。最多支持添加5个基于源IP业务流量匹配。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Values' => 
                    array (
                      'title' => '基于源IP业务流量匹配',
                      'description' => '添加一个或多个IP地址或者IP地址段。

',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '添加一个或多个IP地址或者IP地址段。

',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.0.0/32',
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
            'minItems' => 1,
          ),
        ),
        4 => 
        array (
          'name' => 'RuleActions',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '转发规则动作',
            'description' => '转发规则动作列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '转发规则动作列表。',
              'type' => 'object',
              'properties' => 
              array (
                'FixedResponseConfig' => 
                array (
                  'title' => '返回固定内容动作配置',
                  'description' => '固定响应内容配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Content' => 
                    array (
                      'title' => '内容',
                      'description' => '返回的固定内容。最大1 KB，只支持ASCII字符。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'dssacav',
                    ),
                    'ContentType' => 
                    array (
                      'title' => '内容类型',
                      'description' => '返回固定内容的格式。

取值：**text/plain**、**text/css**、**text/html**、**application/javascript**或**application/json**。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'text/plain',
                    ),
                    'HttpCode' => 
                    array (
                      'title' => 'HTTP响应码',
                      'description' => '返回的HTTP响应码，仅支持**2xx**、**4xx**、**5xx**数字型字符串，**x**为任意数字。',
                      'type' => 'string',
                      'required' => false,
                      'example' => '200',
                    ),
                  ),
                  'required' => false,
                ),
                'ForwardGroupConfig' => 
                array (
                  'title' => '转发组动作配置',
                  'description' => '转发组配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ServerGroupTuples' => 
                    array (
                      'title' => '转发到的目的服务器组列表',
                      'description' => '转发到的目标服务器组列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '转发到的目的服务器组列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ServerGroupId' => 
                          array (
                            'title' => '服务器组标识',
                            'description' => '转发到的目的服务器组ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'sg--atstuj3rtoptyui****',
                          ),
                          'Weight' => 
                          array (
                            'title' => '权重',
                            'description' => '权重。取值越大，权重越大，表示转发的访问请求更多。取值范围：**0**~**100**。

- 目的服务器组数为1时，未指定权重时默认值为**100**。

- 目的服务器组数大于1时，需要用户指定权重值。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'minimum' => '0',
                            'example' => '30',
                          ),
                        ),
                        'required' => false,
                      ),
                      'required' => false,
                    ),
                    'ServerGroupStickySession' => 
                    array (
                      'title' => '服务器组之间会话保持',
                      'description' => '服务器组之间会话保持。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Enabled' => 
                        array (
                          'title' => '是否开启会话保持',
                          'description' => '是否开启会话保持。取值：

- **true**：开启。
- **false**（默认值）：不开启。',
                          'type' => 'boolean',
                          'required' => false,
                          'example' => 'false',
                        ),
                        'Timeout' => 
                        array (
                          'title' => '超时时间',
                          'description' => '超时时间。单位：秒。取值范围：1~86400。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'required' => false,
                          'example' => '2',
                        ),
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
                'InsertHeaderConfig' => 
                array (
                  'title' => '插入头部动作配置',
                  'description' => '写入头字段配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CoverEnabled' => 
                    array (
                      'title' => '是否覆盖请求中的值',
                      'description' => '是否覆盖请求中的值。取值：
- **true**：是。
- **false**（默认值）：否。',
                      'type' => 'boolean',
                      'required' => false,
                      'example' => 'false',
                    ),
                    'Key' => 
                    array (
                      'title' => 'HTTP标头',
                      'description' => '插入的头字段名称，长度为1\\~40个字符，支持大小写字母a\\~z、数字、下划线（_）和短划线（-）。**InsertHeaderConfig**中的头字段名称不能重复。

> 不允许将头名称设置为以下字段（不区分大小写）：`slb-id`、`slb-ip`、`x-forwarded-for`、`x-forwarded-proto`、`x-forwarded-eip`、`x-forwarded-port`、`x-forwarded-client-srcport`、`connection`、`upgrade`、`content-length`、`transfer-encoding`、`keep-alive`、`te`、`host`、`cookie`、`remoteip`、`authority`。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'key',
                    ),
                    'Value' => 
                    array (
                      'title' => 'HTTP标头内容',
                      'description' => '插入的头字段内容。

- **ValueType**取值为**SystemDefined**时取值如下：
    - **ClientSrcPort**：客户端端口。
    - **ClientSrcIp**：客户端IP地址。
    - **Protocol**：客户端请求的协议（HTTP或HTTPS)。
    - **SLBId**：应用型负载均衡实例ID。
    - **SLBPort**：应用型负载均衡实例监听端口。
- **ValueType**取值为**UserDefined**时：您可自定义头字段内容，限制长度为1\\~128个字符，支持通配符星号（*）、半角问号（?）和ASCII码值`ch >= 32 && ch < 127`范围内的可打印字符，开头和结尾不能为空格。
- **ValueType**取值为**ReferenceHeader**时：您可以引用请求头字段中的某一个字段，限制长度限制为1\\~128个字符，支持小写字母a\\~z、数字、短划线（-）和下划线（_）。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'UserDefined',
                    ),
                    'ValueType' => 
                    array (
                      'title' => '取值类型',
                      'description' => '头字段内容类型。取值：

- **UserDefined**：您自定义头字段内容。

- **ReferenceHeader**：引用请求头中的某一个头字段内容。

- **SystemDefined**：系统定义头字段内容。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'UserDefined',
                    ),
                  ),
                  'required' => false,
                ),
                'Order' => 
                array (
                  'title' => '优先级',
                  'description' => '转发规则动作执行的顺序，取值范围：**1~50000**，按值从小到大执行动作。值不能为空，不能重复。最多支持添加20个转发规则动作执行的顺序。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'RedirectConfig' => 
                array (
                  'title' => '重定向动作配置',
                  'description' => '重定向配置。最多支持添加20个重定向。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Host' => 
                    array (
                      'title' => '要跳转的主机地址',
                      'description' => '要跳转的主机地址。取值：
- **${host}**（默认值）：取此值时不支持和其他字符拼接使用。
- 其他取值，字符集和格式限制如下：
    - 主机名长度为3\\~128个字符，支持小写字母a\\~z、数字、短划线（-）、半角句号（.）以及通配符星号（*）和半角问号（?）。
    - 主机名至少包含一个半角句号（.），且半角句号（.）不能出现在开头或结尾。
    - 最右侧的域标签只能包含字母和通配符，不能包含数字或短划线（-）。
    - 短划线（-）不能出现在其它域标签的开头或结尾。
    -  通配符星号（*）和半角问号（?）可以出现在域标签的任意位置。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'www.example.com',
                    ),
                    'HttpCode' => 
                    array (
                      'title' => '跳转方式',
                      'description' => '跳转方式，取值为**301**、**302**、**303**、**307**或**308**。',
                      'type' => 'string',
                      'required' => false,
                      'example' => '301',
                    ),
                    'Path' => 
                    array (
                      'title' => '要跳转的路径',
                      'description' => '要跳转的路径。取值：
- **${path}**（默认值）：可以引用**${host}**、**${protocol}**和**${port}**，每个变量最多出现一次。上述变量可以同时使用，也可以和下面罗列的可取值范围内的字符串拼接使用。
- 其他取值，字符集和格式限制如下：
    - 长度为1~128个字符。
    - 必须以正斜线（/）开头，支持字母、数字和特殊字符`$-_.+/&~@:`，不支持`“%#;!()[]^,” `，同时支持通配符星号（*）和半角问号（?）。',
                      'type' => 'string',
                      'required' => false,
                      'example' => '/test',
                    ),
                    'Port' => 
                    array (
                      'title' => '要跳转的端口',
                      'description' => '要跳转的端口。取值：
- **${port}**（默认值）：该取值不支持和其他字符同时使用。
- 其他取值：**1~63335**。',
                      'type' => 'string',
                      'required' => false,
                      'example' => '10',
                    ),
                    'Protocol' => 
                    array (
                      'title' => '要跳转的协议',
                      'description' => '要跳转的协议。取值：

- **${protocol}**（默认值）：取该值时不支持和其他字符拼接使用。

- **HTTP**或**HTTPS**。

> HTTPS监听仅支持跳转HTTPS协议。
',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'HTTP',
                    ),
                    'Query' => 
                    array (
                      'title' => '要跳转的查询字符串',
                      'description' => '要跳转的查询字符串。取值：
- **${query}**（默认值）：可以引用**${host}**、**${protocol}**和**${port}**，每个变量最多出现一次。上述变量可以同时使用，也可以和下面罗列的可取值范围内的字符串拼接使用。
- 其他取值，字符集和格式限制如下：
    - 长度为1~128个字符。
    - 支持可见字符，不支持空格和 `#[]{}\\|<>&`。如果是字母则必须是小写字母。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'quert',
                    ),
                  ),
                  'required' => false,
                ),
                'RewriteConfig' => 
                array (
                  'title' => '内部重定向动作配置',
                  'description' => '重写配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Host' => 
                    array (
                      'title' => '主机名',
                      'description' => '内部跳转的目的主机地址。取值：
- **${host}**（默认值）：该取值不支持和其他字符拼接。

- 其他取值，字符格式限制如下：

    - 主机名长度为3\\~128个字符，支持小写字母a\\~z、数字、短划线（-）、半角句号（.）以及通配符星号（*）和半角问号（?）。

    - 主机名至少包含一个半角句号（.），且半角句号（.）不能出现在开头或结尾。

    - 最右侧的域标签只能包含字母和通配符，不能包含数字或短划线（-）。

    - 短划线（-）不能出现在其它域标签的开头或结尾。通配符星号（*）和半角问号（?）可以出现在域标签的任意位置。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'www.example.com',
                    ),
                    'Path' => 
                    array (
                      'title' => '路径',
                      'description' => '要跳转的路径。取值：
- **${path}**（默认值）：可以引用**${host}**、**${protocol}**和**${port}**，每个变量最多出现一次。上述变量可以同时使用，也可以和下面罗列的可取值范围内的字符串拼接使用。
- 其他取值，字符集和格式限制如下：
    - 长度为1~128个字符。
    - 必须以正斜线（/）开头，支持字母、数字和特殊字符`$-_.+/&~@:`，不支持`“%#;!()[]^,” `，同时支持通配符星号（*）和半角问号（?）。',
                      'type' => 'string',
                      'required' => false,
                      'example' => '/tsdf',
                    ),
                    'Query' => 
                    array (
                      'title' => '查询',
                      'description' => '内部跳转的查询字符串。取值：
- **${query}**（默认值）：可以引用**${host}**、**${protocol}**和**${port}**，每个变量最多出现一次。上述变量可以同时使用，也可以和下面罗列的可取值范围内的字符串拼接使用。
- 其他取值，字符集和格式限制如下：
    - 长度为1~128个字符。
    - 支持可见字符，不支持空格和 `#[]{}\\|<>&`。如果是字母则必须是小写字母。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'quedsa',
                    ),
                  ),
                  'required' => false,
                ),
                'Type' => 
                array (
                  'title' => '转发规则动作类型',
                  'description' => '动作类型。最多支持添加11个动作类型。取值：

- **ForwardGroup**：转发至多个虚拟服务器组。

- **Redirect**：重定向。

- **FixedResponse**：返回固定内容。

- **Rewrite**：重写。

- **InsertHeader**：写入头字段。

- **RemoveHeader**：删除头字段。

- **TrafficLimit**：流量限速。

- **TrafficMirror**：流量镜像。

- **Cors**：跨域。

转发规则中包括的动作类型：

- **FinalType**：一个转发规则的动作中仅能有一项FinalType的动作并且最后执行，只能包含一项**ForwardGroup**、**Redirect**、或**FixedResponse**。

- **ExtType**：一个转发规则可以有一项或多项此类**ExtType**的动作，在**FinalType**的动作之前执行，且需要与**FinalType**并存。包含多项**InsertHeader**或一项**Rewrite**。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ForwardGroup',
                ),
                'TrafficLimitConfig' => 
                array (
                  'title' => '流量限速',
                  'description' => '流量限速。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'QPS' => 
                    array (
                      'description' => '每秒请求次数。取值范围：**1~1000000**。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '100',
                    ),
                    'PerIpQps' => 
                    array (
                      'description' => '单IP每秒请求次数。 取值范围：**1 ~ 1000000**。

> 如果同时配置**QPS**参数，**PerIpQps**参数的取值必须小于**QPS**参数的取值。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '80',
                    ),
                  ),
                  'required' => false,
                ),
                'TrafficMirrorConfig' => 
                array (
                  'title' => '流量镜像',
                  'description' => '流量镜像。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TargetType' => 
                    array (
                      'title' => '镜像目标类型',
                      'description' => '镜像的目标类型。取值：
- **ForwardGroupMirror**：表示镜像至服务器组。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'ForwardGroupMirror',
                    ),
                    'MirrorGroupConfig' => 
                    array (
                      'title' => '镜像至服务器组',
                      'description' => '流量镜像至服务器组。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ServerGroupTuples' => 
                        array (
                          'description' => '流量镜像至服务器组。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '流量镜像至服务器组。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ServerGroupId' => 
                              array (
                                'description' => '服务器组ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'srg-00mkgijak0w4qgz9****',
                              ),
                            ),
                            'required' => false,
                          ),
                          'required' => false,
                        ),
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
                'RemoveHeaderConfig' => 
                array (
                  'title' => '去除HTTP标头',
                  'description' => '去除HTTP头部配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'title' => 'HTTP标头键',
                      'description' => '去除的头字段名称，长度为1~40个字符，支持大小写字母a~z、数字、下划线（_）和短划线（-）。头字段名称不能重复用于RemoveHeader中。

- 请求方向（Direction取值为Request）：不允许将头名称设置为以下字段（不区分大小写）：`slb-id`、`slb-ip`、`x-forwarded-for`、`x-forwarded-proto`、`x-forwarded-eip`、`x-forwarded-port`、`x-forwarded-client-srcport`、`connection`、`upgrade`、`content-length`、`transfer-encoding`、`keep-alive`、`te`、`host`、`cookie`、`remoteip`、`authority`。
- 响应方向（Direction取值为Response）：响应方向不允许将头名称设置为以下字段（不区分大小写）：`connection`、`upgrade`、`content-length`、`transfer-encoding`。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'test',
                    ),
                  ),
                  'required' => false,
                ),
                'CorsConfig' => 
                array (
                  'title' => '跨域',
                  'description' => '跨域。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AllowOrigin' => 
                    array (
                      'title' => '允许的访问来源',
                      'description' => '允许的访问来源列表。支持只配置一个元素`*`，或配置一个或多个值。
- 单个值必须以`http://`或者`https://`开头，后边加一个正确的域名或一级泛域名。（例：`http://*.test.abc.example.com`）
- 单个值可以不加端口，也可以指定端口，端口范围：**1**~**65535**。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '允许的访问来源。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://test.com',
                      ),
                      'required' => false,
                    ),
                    'AllowMethods' => 
                    array (
                      'title' => '选择跨域访问时允许的HTTP方法',
                      'description' => '选择跨域访问时允许的HTTP方法。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '选择跨域访问时允许的HTTP方法。取值：

- **GET**。
- **POST**。
- **PUT**。
- **DELETE**。
- **HEAD**。
- **OPTIONS**。
- **PATCH**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GET',
                      ),
                      'required' => false,
                    ),
                    'AllowHeaders' => 
                    array (
                      'title' => '允许跨域的Header列表',
                      'description' => '允许跨域的Header列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '允许跨域的Header列表。支持配置为`*`或配置一个或多个value值，多个value值用半角逗号（,）隔开。单个value值只允许包含大小写字母、数字，不能以下划线（_）和短划线（-）开头或结尾，最大长度限制为32个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_123',
                      ),
                      'required' => false,
                    ),
                    'ExposeHeaders' => 
                    array (
                      'title' => '允许暴露的Header列表',
                      'description' => '允许暴露的Header列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '允许暴露的 Header 列表。支持配置为`*`或配置一个或多个value值，多个value值用半角逗号（,）隔开。单个value值只允许包含大小写字母、数字，不能以下划线（_）和短划线（-）开头或结尾，最大长度限制为32个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_123',
                      ),
                      'required' => false,
                    ),
                    'AllowCredentials' => 
                    array (
                      'title' => '是否允许携带凭证信息',
                      'description' => '是否允许携带凭证信息。取值：

- **on**：是。
- **off**：否。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'on',
                    ),
                    'MaxAge' => 
                    array (
                      'title' => '预检请求在浏览器的最大缓存时间',
                      'description' => '预检请求在浏览器的最大缓存时间，单位：秒。

取值范围：**-1**~**172800**。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'required' => false,
                      'example' => '1000',
                    ),
                  ),
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
            'minItems' => 1,
          ),
        ),
        5 => 
        array (
          'name' => 'RuleName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '转发规则名称',
            'description' => '转发规则名称。 长度为2~128个英文或中文字符，必须以大小字母或中文开头，可包含数字，半角句号（.），下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'rule-instance-test',
          ),
        ),
        6 => 
        array (
          'name' => 'Priority',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '转发规则优先级',
            'description' => '规则优先级，取值范围：**1~10000**。值越小表示优先级越高。

> 同一个监听内规则优先级必须唯一。',
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
            'title' => 'Schema of Response',
            'description' => '更新转发规则属性。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务Id',
                'description' => ' 异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F5378-41F6-4AE4-92F8-7FF34B540710',
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
            'errorCode' => 'IncorrectStatus.Rule',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.IpGroupCanNotUsedForMirrorAction',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.SameGroupForForwardAndMirrorAction',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.GRPCServerGroup',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          4 => 
          array (
            'errorCode' => 'Conflict.Priority',
            'errorMessage' => 'There is already %s having the same configuration with %s.',
          ),
          5 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.ServerGroupAttachedNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          6 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.LoadBalancerServersNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          7 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.ServerAddedNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          8 => 
          array (
            'errorCode' => 'QuotaExceeded.RuleWildcardsNum',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          9 => 
          array (
            'errorCode' => 'QuotaExceeded.RuleMatchEvaluationsNum',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          10 => 
          array (
            'errorCode' => 'QuotaExceeded.RuleActionsNum',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          11 => 
          array (
            'errorCode' => 'Mismatch.Protocol',
            'errorMessage' => 'The %s is mismatched for %s and %s.',
          ),
          12 => 
          array (
            'errorCode' => 'Mismatch.VpcId',
            'errorMessage' => 'The %s is mismatched for %s and %s.',
          ),
          13 => 
          array (
            'errorCode' => 'OperationDenied.RewriteMissingForwardGroup',
            'errorMessage' => 'The operation is not allowed because of RewriteMissingForwardGroup.',
          ),
          14 => 
          array (
            'errorCode' => 'ResourceInConfiguring.Listener',
            'errorMessage' => 'The specified listener is being configured, please try again later.',
          ),
          15 => 
          array (
            'errorCode' => 'OperationDenied.ProtocolMustSameForForwardGroupAction',
            'errorMessage' => 'The operation is not allowed because of ProtocolMustSameForForwardGroupAction.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.ServerGroup',
            'errorMessage' => 'Authentication has failed for ServerGroup.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.LoadBalancer',
            'errorMessage' => 'Authentication is failed for %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Rule',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.ServerGroup',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"365F5378-41F6-4AE4-92F8-7FF34B540710\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateRuleAttributeResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>365F5378-41F6-4AE4-92F8-7FF34B540710</RequestId>\\n</UpdateRuleAttributeResponse>","errorExample":""}]',
      'title' => '更新转发规则属性',
      'description' => '- **UpdateRuleAttribute**接口属于异步接口，即系统返回一个请求ID，但该转发规则属性尚未更新成功，系统后台的更新任务仍在进行。您可以调用[ListRules](~~214379~~)查询转发规则属性的更新状态：
    - 当转发规则属性处于**Configuring**状态时，表示转发规则属性正在更新中。
    - 当转发规则属性处于**Available**状态时，表示转发规则属性更新成功。

-  一条转发规则最多支持添加的条件数（**RuleConditions**）和动作数（**RuleActions**）如下：
    - 条件数：基础版5条、标准版10条、WAF增强版10条。
    - 动作数：基础版3条，标准版5条、WAF增强版5条。',
    ),
    'UpdateRulesAttribute' => 
    array (
      'summary' => '批量更新转发规则属性。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        1 => 
        array (
          'name' => 'Rules',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '转发规则列表',
            'description' => '转发规则列表。一次最多不能超过10条。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '转发规则列表。一次最多不能超过10条。',
              'type' => 'object',
              'properties' => 
              array (
                'Priority' => 
                array (
                  'title' => '转发规则优先级',
                  'description' => '规则优先级，取值范围：**1~10000**。值越小表示优先级越高。最多支持添加20个规则优先级

> 同一个监听内规则优先级必须唯一。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '10',
                ),
                'RuleName' => 
                array (
                  'title' => '转发规则名称',
                  'description' => '转发规则名称。 长度为2~128个英文或中文字符，必须以大小字母或中文开头，可包含数字，半角句号（.），下划线（_）和短划线（-）。最多支持添加20个转发规则名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'rule-ins******',
                ),
                'RuleActions' => 
                array (
                  'title' => '转发规则动作',
                  'description' => '转发规则动作列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '转发规则动作列表。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'FixedResponseConfig' => 
                      array (
                        'title' => '返回固定内容动作配置',
                        'description' => '返回固定内容动作配置。最多支持添加20个返回固定内容动作配置。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Content' => 
                          array (
                            'title' => '内容',
                            'description' => '返回的固定内容。最大1 KB，只支持ASCII字符。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'dssacav',
                          ),
                          'ContentType' => 
                          array (
                            'title' => '内容类型',
                            'description' => '返回固定内容的格式。

取值：**text/plain**、**text/css**、**text/html**、**application/javascript**或**application/json**。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'text/plain',
                          ),
                          'HttpCode' => 
                          array (
                            'title' => 'HTTP响应码',
                            'description' => '返回的HTTP响应码，仅支持**2xx**、**4xx**、**5xx**数字型字符串，**x**为任意数字。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '200',
                          ),
                        ),
                        'required' => false,
                      ),
                      'ForwardGroupConfig' => 
                      array (
                        'title' => '转发组动作配置',
                        'description' => '转发组动作配置。最多支持添加20个转发组动作配置。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ServerGroupTuples' => 
                          array (
                            'title' => '转发到的目的服务器组列表',
                            'description' => '转发到的目的服务器组列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '转发到的目的服务器组列表。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'ServerGroupId' => 
                                array (
                                  'title' => '服务器组标识',
                                  'description' => '转发到的目的服务器组。',
                                  'type' => 'string',
                                  'required' => false,
                                  'example' => 'sgp-atstuj3rtoptyui****',
                                ),
                                'Weight' => 
                                array (
                                  'title' => '权重',
                                  'description' => '权重。取值越大，权重越大，表示转发的访问请求更多。取值范围：**0**~**100**。

- 目的服务器组数为1时，未指定权重时默认值为**100**。

- 目的服务器组数大于1时，需要用户指定权重值。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'required' => false,
                                  'minimum' => '0',
                                  'example' => '30',
                                ),
                              ),
                              'required' => false,
                            ),
                            'required' => false,
                          ),
                          'ServerGroupStickySession' => 
                          array (
                            'title' => '服务器组之间会话保持',
                            'description' => '服务器组之间会话保持。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Enabled' => 
                              array (
                                'title' => '是否开启会话保持',
                                'description' => '是否开启会话保持。取值：

- **true**：开启。
- **false**（默认值）：不开启。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                              ),
                              'Timeout' => 
                              array (
                                'title' => '超时时间',
                                'description' => '超时时间。单位：秒。取值范围：**1**~**86400**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2',
                              ),
                            ),
                            'required' => false,
                          ),
                        ),
                        'required' => false,
                      ),
                      'InsertHeaderConfig' => 
                      array (
                        'title' => '插入头部动作配置',
                        'description' => '插入头部动作配置。最多支持添加20个插入头部动作配置。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'CoverEnabled' => 
                          array (
                            'title' => '是否覆盖请求中的值',
                            'description' => '是否覆盖请求中的值。取值：
- **true**：是。
- **false**（默认值）：否。',
                            'type' => 'boolean',
                            'required' => false,
                            'example' => 'false',
                          ),
                          'Key' => 
                          array (
                            'title' => 'HTTP标头',
                            'description' => '插入的头字段名称，长度为1\\~40个字符，支持大小写字母a\\~z、数字、下划线（_）和短划线（-）。头字段名称不能重复用于`InsertHeader`中。

> 不支持将Key设为以下字段（不区分大小写）：`slb-id`、`slb-ip`、`x-forwarded-for`、`x-forwarded-proto`、`x-forwarded-eip`、`x-forwarded-port`、`x-forwarded-client-srcport`、`connection`、`upgrade`、`content-length`、`transfer-encoding`、`keep-alive`、`te、host`、`cookie`、`remoteip`、`authority`。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'test',
                          ),
                          'Value' => 
                          array (
                            'title' => 'HTTP标头内容',
                            'description' => '插入的头字段内容。

- **ValueType**取值为**SystemDefined**时取值如下：
    - **ClientSrcPort**：客户端端口。
    - **ClientSrcIp**：客户端IP地址。
    - **Protocol**：客户端请求的协议（HTTP或HTTPS)。
    - **SLBId**：应用型负载均衡实例ID。
    - **SLBPort**：应用型负载均衡实例监听端口。
- **ValueType**取值为**UserDefined**时：您可自定义头字段内容，限制长度为1\\~128个字符，支持通配符星号（*）、半角问号（?）和ASCII码值`ch >= 32 && ch < 127`范围内的可打印字符，开头和结尾不能为空格。
- **ValueType**取值为**ReferenceHeader**时：您可以引用请求头字段中的某一个字段，限制长度限制为1\\~128个字符，支持小写字母a\\~z、数字、短划线（-）和下划线（_）。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'UserDefined',
                          ),
                          'ValueType' => 
                          array (
                            'title' => '取值类型',
                            'description' => '取值类型。取值：

- **UserDefined**：用户指定。

- **ReferenceHeader**：引用用户请求头中的某一个字段。

- **SystemDefined**：系统定义。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'UserDefined',
                          ),
                        ),
                        'required' => false,
                      ),
                      'Order' => 
                      array (
                        'title' => '优先级',
                        'description' => '转发规则动作执行的顺序，取值范围：**1**~**50000**，按值从小到大执行动作。值不能为空，不能重复。最多支持添加20个转发规则动作执行的顺序。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                      ),
                      'RedirectConfig' => 
                      array (
                        'title' => '重定向动作配置',
                        'description' => '重定向动作配置。最多支持添加20个重定向动作配置。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Host' => 
                          array (
                            'title' => '要跳转的主机地址',
                            'description' => '要跳转到的主机名。

命名规则：

- 主机名长度为3\\~128个字符，支持小写字母a\\~z、数字、短划线（-）、半角句号（.）、星号（*）、等号（=）、波浪线（~）、下划线（_）、加号（+）、反斜线（\\）、脱字号（^）、感叹号（!）、美元符号（$）、and（&）、竖线（|）、半角圆括号（()）、方括号（\\[\\]）和半角问号（?）。

- 主机名至少包含一个半角句号（.），且半角句号（.）不能出现在开头或结尾。

- 最右侧的域标签只能包含字母、星号（*）和半角问号（?），不能包含数字或短划线（-），最左侧`domainlable`允许是星号（*）。

- 短划线（-）不能出现在其它域标签的开头或结尾。星号（*）和半角问号（?）可以出现在域标签的任意位置。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'www.example.com',
                          ),
                          'HttpCode' => 
                          array (
                            'title' => '跳转方式',
                            'description' => '跳转方式。取值：**301**、**302**、**303**、**307**、**308**。
',
                            'type' => 'string',
                            'required' => false,
                            'example' => '301',
                          ),
                          'Path' => 
                          array (
                            'title' => '要跳转的路径',
                            'description' => '要跳转的路径。
- **${path}**（默认值）：可以引用**${host}**、**${protocol}**和**${port}**，每个变量最多出现一次。上述变量可以同时使用，也可以和下面罗列的可取值范围内的字符串拼接使用。
- 其他取值，字符集和格式限制如下：
    - 长度为1~128个字符，支持通配符星号（*）和半角问号（?）作为通配符使用。
    - 必须以正斜线（/）开头，支持大小写字母、数字和特殊字符`$-_.+/&~@:\'*?`，不支持`“%#;!()[]^,” `。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '/test',
                          ),
                          'Port' => 
                          array (
                            'title' => '要跳转的端口',
                            'description' => '要跳转的端口。

取值范围：**1**~**63335**。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '10',
                          ),
                          'Protocol' => 
                          array (
                            'title' => '要跳转的协议',
                            'description' => '要跳转的协议。

取值：**HTTP**或**HTTPS**。

> HTTPS监听仅支持跳转HTTPS协议。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'HTTP',
                          ),
                          'Query' => 
                          array (
                            'title' => '要跳转的查询字符串',
                            'description' => '要跳转的查询字符串。

长度为1~128个字符，支持小写字母和可见字符，不支持 `#[]{}\\|<>&`。
',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'quert',
                          ),
                        ),
                        'required' => false,
                      ),
                      'RewriteConfig' => 
                      array (
                        'title' => '内部重定向动作配置',
                        'description' => '重写配置。最多支持添加20个重写配置。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Host' => 
                          array (
                            'title' => '主机名',
                            'description' => '内部跳转的目的主机地址。

命名规则：

- 主机名长度为3\\~128个字符，支持小写字母a\\~z、数字、短划线（-）、半角句号（.）、星号（*）、等号（=）、波浪线（~）、下划线（_）、加号（+）、反斜线（\\）、脱字号（^）、感叹号（!）、美元符号（$）、and（&）、竖线（|）、半角圆括号（()）、方括号（\\[\\]）和半角问号（?）。

- 主机名至少包含一个半角句号（.），且半角句号（.）不能出现在开头或结尾。

- 最右侧的域标签只能包含字母、星号（*）和半角问号（?），不能包含数字或短划线（-），最左侧`domainlable`允许是星号（*）。

- 短划线（-）不能出现在其它域标签的开头或结尾。星号（*）和半角问号（?）可以出现在域标签的任意位置。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'www.example.com',
                          ),
                          'Path' => 
                          array (
                            'title' => '路径',
                            'description' => '内部跳转的目的路径。

- **${path}**（默认值）：可以引用**${host}**、**${protocol}**和**${port}**，每个变量最多出现一次。上述变量可以同时使用，也可以和下面罗列的可取值范围内的字符串拼接使用。
- 其他取值，字符集和格式限制如下：
    - 长度为1~128个字符，支持通配符星号（*）和半角问号（?）作为通配符使用。
    - 必须以正斜线（/）开头，支持大小写字母、数字和特殊字符`$-_.+/&~@:\'*?`，不支持`“%#;!()[]^,” `。
',
                            'type' => 'string',
                            'required' => false,
                            'example' => '/tsdf',
                          ),
                          'Query' => 
                          array (
                            'title' => '查询',
                            'description' => '内部跳转的查询字符串。

长度为1~128个字符，支持小写字母和可见字符，不支持 `#[]{}\\|<>&`。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'quedsa',
                          ),
                        ),
                        'required' => false,
                      ),
                      'Type' => 
                      array (
                        'title' => '转发规则动作类型',
                        'description' => '动作类型，最多支持添加11个动作类型。取值：

- **ForwardGroup**：转发至多个虚拟服务器组。

- **Redirect**：重定向。

- **FixedResponse**：返回固定内容。

- **Rewrite**：重写。

- **InsertHeader**：写入头字段。

- **RemoveHeader**：删除头字段。

- **TrafficLimit**：流量限速。

- **TrafficMirror**：流量镜像。

- **Cors**：跨域。

转发规则中包括的动作类型：

- **FinalType**：一个转发规则的动作中仅能有一项FinalType的动作并且最后执行，只能包含一项**ForwardGroup**、**Redirect**、或**FixedResponse**。

- **ExtType**：一个转发规则可以有一项或多项此类**ExtType**的动作，在**FinalType**的动作之前执行，且需要与**FinalType**并存。包含多项**InsertHeader**或一项**Rewrite**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Host',
                      ),
                      'TrafficLimitConfig' => 
                      array (
                        'title' => '流量限速',
                        'description' => '流量限速。最多支持添加20个流量限速。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'QPS' => 
                          array (
                            'description' => '每秒请求次数。取值范围：**1**~**1000000**。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'example' => '2',
                          ),
                          'PerIpQps' => 
                          array (
                            'description' => '单IP每秒请求次数。 取值范围：**1**~**1000000**。

> 如果同时配置QPS参数，PerIpQps参数的取值必须小于QPS参数的取值。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'example' => '80',
                          ),
                        ),
                        'required' => false,
                      ),
                      'TrafficMirrorConfig' => 
                      array (
                        'title' => '流量镜像',
                        'description' => '流量镜像。最多支持添加20个流量镜像。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'TargetType' => 
                          array (
                            'title' => '镜像目标类型',
                            'description' => '镜像的目标类型。取值：
- **ForwardGroupMirror**：表示镜像至服务器组。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ForwardGroupMirror',
                          ),
                          'MirrorGroupConfig' => 
                          array (
                            'title' => '镜像至服务器组',
                            'description' => '流量镜像至服务器组。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ServerGroupTuples' => 
                              array (
                                'description' => '流量镜像至服务器组。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '流量镜像至服务器组。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'ServerGroupId' => 
                                    array (
                                      'description' => '	
服务器组ID。',
                                      'type' => 'string',
                                      'required' => false,
                                      'example' => 'sgp-mkgijak0w4qgz9****',
                                    ),
                                  ),
                                  'required' => false,
                                ),
                                'required' => false,
                              ),
                            ),
                            'required' => false,
                          ),
                        ),
                        'required' => false,
                      ),
                      'RemoveHeaderConfig' => 
                      array (
                        'title' => '去除HTTP标头',
                        'description' => '去除HTTP标头。最多支持添加20个去除HTTP标头。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'title' => 'HTTP标头键',
                            'description' => '头字段键。

- 长度为1~40个字符。

- 支持字母a~z、数字、短划线（-）和下划线（_）。

- 不支持Cookie和Host。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'Port',
                          ),
                        ),
                        'required' => false,
                      ),
                      'CorsConfig' => 
                      array (
                        'title' => '跨域',
                        'description' => '跨域。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'AllowOrigin' => 
                          array (
                            'title' => '允许的访问来源',
                            'description' => '允许的访问来源列表。支持只配置一个元素`*`，或配置一个或多个值。
- 单个值必须以`http://`或者`https://`开头，后边加一个正确的域名或一级泛域名。（例：`http://*.test.abc.example.com`）
- 单个值可以不加端口，也可以指定端口，端口范围：**1**~**65535**。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '允许的访问来源列表。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'http://example.com',
                            ),
                            'required' => false,
                          ),
                          'AllowMethods' => 
                          array (
                            'title' => '选择跨域访问时允许的HTTP方法',
                            'description' => '选择跨域访问时允许的HTTP方法。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '选择跨域访问时允许的HTTP方法。取值：

- **GET**。
- **POST**。
- **PUT**。
- **DELETE**。
- **HEAD**。
- **OPTIONS**。
- **PATCH**。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'GET',
                            ),
                            'required' => false,
                          ),
                          'AllowHeaders' => 
                          array (
                            'title' => '允许跨域的Header列表',
                            'description' => '允许跨域的Header列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '允许跨域的Header列表。支持配置为`*`或配置一个或多个value值，多个value值用半角逗号（,）隔开。单个value值只允许包含大小写字母、数字，不能以下划线（_）和短划线（-）开头或结尾，最大长度限制为32个字符。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'test_123',
                            ),
                            'required' => false,
                          ),
                          'ExposeHeaders' => 
                          array (
                            'title' => '允许暴露的Header列表',
                            'description' => '允许暴露的Header列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '允许暴露的 Header 列表。支持配置为`*`或配置一个或多个value值，多个value值用半角逗号（,）隔开。单个value值只允许包含大小写字母、数字，不能以下划线（_）和短划线（-）开头或结尾，最大长度限制为32个字符。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'test_123',
                            ),
                            'required' => false,
                          ),
                          'AllowCredentials' => 
                          array (
                            'title' => '是否允许携带凭证信息',
                            'description' => '是否允许携带凭证信息。取值：

- **on**：是。
- **off**：否。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'on',
                          ),
                          'MaxAge' => 
                          array (
                            'title' => '预检请求在浏览器的最大缓存时间',
                            'description' => '预检请求在浏览器的最大缓存时间，单位：秒。

取值范围：**-1**~**172800**。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                            'example' => '1000',
                          ),
                        ),
                        'required' => false,
                      ),
                    ),
                    'required' => true,
                  ),
                  'required' => false,
                ),
                'RuleConditions' => 
                array (
                  'title' => '转发规则条件',
                  'description' => '转发规则条件。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '转发规则条件。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CookieConfig' => 
                      array (
                        'title' => 'Cookie条件配置',
                        'description' => 'Cookie条件配置。最多支持添加20个Cookie条件配置。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Values' => 
                          array (
                            'title' => 'Cookie键值对列表',
                            'description' => 'Cookie键值对列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => 'Cookie键值对列表。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Key' => 
                                array (
                                  'title' => 'Cookie条件键',
                                  'description' => 'Cookie键，长度为1~100个字符，支持小写字母、可见字符、星号（*）和半角问号（?），不支持空格和`#[]{}\\|<>&`。',
                                  'type' => 'string',
                                  'required' => false,
                                  'example' => 'test',
                                ),
                                'Value' => 
                                array (
                                  'title' => 'Cookie条件值',
                                  'description' => 'Cookie值，长度为1~128个字符，支持小写英文字母、可见字符、星号（*）和半角问号（?），不支持空格和`#[]{}\\|<>&`。',
                                  'type' => 'string',
                                  'required' => false,
                                  'example' => 'test',
                                ),
                              ),
                              'required' => false,
                            ),
                            'required' => false,
                          ),
                        ),
                        'required' => false,
                      ),
                      'HeaderConfig' => 
                      array (
                        'title' => 'HTTP标头条件配置',
                        'description' => 'HTTP标头条件配置。最多支持添加20个HTTP标头条件配置。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'title' => 'HTTP标头键',
                            'description' => '头字段键，长度为1\\~40个字符。支持字母a\\~z、数字、短划线（-）和下划线（_）。不支持Cookie和Host。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'Port',
                          ),
                          'Values' => 
                          array (
                            'title' => 'HTTP标头值列表',
                            'description' => 'HTTP标头值列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '头字段值。长度为1\\~128个字符。支持ASCII码值`ch >= 32 && ch < 127`范围内可打印字符、小写字母、星号（*）和半角问号（?）。开头和结尾不能为空格。',
                              'type' => 'string',
                              'required' => false,
                              'example' => '5006',
                            ),
                            'required' => false,
                          ),
                        ),
                        'required' => false,
                      ),
                      'HostConfig' => 
                      array (
                        'title' => '主机名条件配置',
                        'description' => '主机名条件配置。最多支持添加20个主机名条件配置。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Values' => 
                          array (
                            'title' => '主机名列表',
                            'description' => '主机名列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '主机名。

命名规则：

- 主机名长度为3\\~128个字符，支持小写字母a\\~z、数字、短划线（-）、半角句号（.）以及星号（*）、等号（=）、波浪线（~）、下划线（_）、加号（+）、反斜线（\\）、脱字号（^）、感叹号（!）、美元符号（$）、and（&）、竖线（|）、半角圆括号（()）、方括号（\\[\\]）和半角问号（?）。

- 主机名至少包含一个半角句号（.），且半角句号（.）不能出现在开头或结尾。

- 最右侧的域标签只能包含字母、星号（*）和问号（？），不能包含数字或短划线（-），最左侧`domainlable`允许是星号（*）。

- 短划线（-）不能出现在其它域标签的开头或结尾。星号（*）和半角问号（?）可以出现在域标签的任意位置。

- 对于<精确匹配和通配符>的输入框，首字符不可以为波浪线（~）。

- 对于正则的输入框（<正则匹配（不区分大小写）>，首字符不可以为星号（*）。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'www.example.com',
                            ),
                            'required' => false,
                          ),
                        ),
                        'required' => false,
                      ),
                      'MethodConfig' => 
                      array (
                        'title' => 'HTTP请求方法条件配置',
                        'description' => 'HTTP请求方法条件配置。N的取值范围：**1**~**20**。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Values' => 
                          array (
                            'title' => 'HTTP请求方法列表',
                            'description' => 'HTTP请求方法列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '请求方法。

取值：**HEAD**、**GET**、**POST**、**OPTIONS**、**PUT**、**PATCH**、**DELETE**。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'PUT',
                            ),
                            'required' => false,
                          ),
                        ),
                        'required' => false,
                      ),
                      'PathConfig' => 
                      array (
                        'title' => '查询字符串条件配置',
                        'description' => '查询字符串条件配置。最多支持添加20个查询字符串条件配置。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Values' => 
                          array (
                            'title' => '路径条件列表',
                            'description' => '路径条件列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '转发路径。

- 长度为1~128个字符，支持星号（*）和半角问号（?）作为通配符使用。

- 非正则表达式的URL ，必须以正斜线（/）开头，支持大小写字母、数字和特殊字符`$-_.+/&~@:\'*?`，不支持`“%#;!()[]^,” `。

- 正则表达式的URL ，必须以~开头，支持大小写字母、数字和特殊字符`.-_/=?~^*$:()[]+|`。
',
                              'type' => 'string',
                              'required' => false,
                              'example' => '/test',
                            ),
                            'required' => false,
                          ),
                        ),
                        'required' => false,
                      ),
                      'QueryStringConfig' => 
                      array (
                        'title' => '查询字符串条件配置',
                        'description' => '查询字符串条件配置。最多支持添加20个查询字符串条件配置。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Values' => 
                          array (
                            'title' => '查询字符串条件键值对列表',
                            'description' => '查询字符串条件键值对列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '查询字符串条件键值对列表。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Key' => 
                                array (
                                  'title' => '查询字符串条件键',
                                  'description' => '查询字符串键。

长度为1~100个字符，支持小写字母、可见字符、星号（*）和半角问号（?），不支持空格和`#[]{}\\|<>&`。',
                                  'type' => 'string',
                                  'required' => false,
                                  'example' => 'test',
                                ),
                                'Value' => 
                                array (
                                  'title' => '查询字符串条件值',
                                  'description' => '查询字符串值。

长度为1~128个字符，支持小写字母、可见字符、星号（*）和半角问号（?），不支持空格和`#[]{}\\|<>&`。',
                                  'type' => 'string',
                                  'required' => false,
                                  'example' => 'test',
                                ),
                              ),
                              'required' => false,
                            ),
                            'required' => false,
                          ),
                        ),
                        'required' => false,
                      ),
                      'ResponseHeaderConfig' => 
                      array (
                        'title' => '返回HTTP标头',
                        'description' => '返回HTTP标头。最多支持添加20个返回HTTP标头。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'title' => '返回HTTP标头键',
                            'description' => '头字段键。

- 长度为1~40个字符。

- 支持字母a~z、数字、短划线（-）和下划线（_）。

- 不支持Cookie和Host。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'test',
                          ),
                          'Values' => 
                          array (
                            'title' => '返回HTTP标头值',
                            'description' => '头字段值。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '头字段值。

- 长度为1~128个字符。

- 支持ASCII码值`ch >= 32 && ch < 127`范围内可打印字符、小写字母、星号（*）和半角问号（?）。

- 开头和结尾不能为空格。',
                              'type' => 'string',
                              'required' => false,
                              'example' => '5006',
                            ),
                            'required' => false,
                          ),
                        ),
                        'required' => false,
                      ),
                      'ResponseStatusCodeConfig' => 
                      array (
                        'title' => '返回状态码条件',
                        'description' => '返回状态码条件配置。当**Type**为**ResponseStatusCode**时必选且有效。最多支持添加20个返回状态码条件配置。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Values' => 
                          array (
                            'title' => '返回状态码条件',
                            'description' => '返回状态码条件。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '返回给客户端响应中的状态码，取值范围：**100**~**599**。',
                              'type' => 'string',
                              'required' => false,
                              'example' => '301',
                            ),
                            'required' => false,
                          ),
                        ),
                        'required' => false,
                      ),
                      'Type' => 
                      array (
                        'title' => '条件类型',
                        'description' => '转发规则类型。最多支持添加7个转发规则类型。取值：

- **Host**：主机。

- **Path**：路径。

- **Header**：HTTP头字段。

- **QueryString**：查询字符串。

- **Method**：请求方法。

- **Cookie**：Cookie。

- **SourceIp**：源IP。

- **ResponseHeader**：响应HTTP头字段。

- **ResponseStatusCode**: 响应状态码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ForwardGroup',
                      ),
                      'SourceIpConfig' => 
                      array (
                        'title' => '基于源IP业务流量匹配',
                        'description' => '基于源IP业务流量匹配。最多支持添加20个基于源IP业务流量匹配。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Values' => 
                          array (
                            'description' => '基于源IP业务流量匹配。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '添加一个或多个IP地址或者IP地址段。

一条转发规则中最多支持添加5条源IP。',
                              'type' => 'string',
                              'required' => false,
                              'example' => '192.168.0.1/32',
                            ),
                            'required' => false,
                          ),
                        ),
                        'required' => false,
                      ),
                    ),
                    'required' => true,
                  ),
                  'required' => false,
                ),
                'RuleId' => 
                array (
                  'title' => '转发规则ID',
                  'description' => '转发规则ID。最多支持添加20个转发规则ID。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'rule-cxjh7vazn2jpnl****',
                ),
              ),
              'required' => true,
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会批量更新转发规则属性。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回`HTTP 2xx`状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF34B540710',
              ),
              'JobId' => 
              array (
                'title' => '异步任务Id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
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
            'errorCode' => 'OperationDenied.IpGroupCanNotUsedForMirrorAction',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectStatus.Rule',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.SameGroupForForwardAndMirrorAction',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.GRPCServerGroup',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          4 => 
          array (
            'errorCode' => 'Conflict.Priority',
            'errorMessage' => 'There is already %s having the same configuration with %s.',
          ),
          5 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.ServerGroupAttachedNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          6 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.LoadBalancerServersNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          7 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.ServerAddedNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          8 => 
          array (
            'errorCode' => 'QuotaExceeded.RuleWildcardsNum',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          9 => 
          array (
            'errorCode' => 'QuotaExceeded.RuleMatchEvaluationsNum',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          10 => 
          array (
            'errorCode' => 'QuotaExceeded.RuleActionsNum',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          11 => 
          array (
            'errorCode' => 'Mismatch.Protocol',
            'errorMessage' => 'The %s is mismatched for %s and %s.',
          ),
          12 => 
          array (
            'errorCode' => 'Mismatch.VpcId',
            'errorMessage' => 'The %s is mismatched for %s and %s.',
          ),
          13 => 
          array (
            'errorCode' => 'OperationDenied.ServiceManagedResource',
            'errorMessage' => 'The operation is not allowed because the current resource of %s is managed resource.',
          ),
          14 => 
          array (
            'errorCode' => 'OperationDenied.ListenerIdInconsistent',
            'errorMessage' => 'The operation is not allowed because of ListenerIdInconsistent.',
          ),
          15 => 
          array (
            'errorCode' => 'IllegalParam.Priority',
            'errorMessage' => 'The param of Priority is illegal.',
          ),
          16 => 
          array (
            'errorCode' => 'OperationDenied.MirrorActionSupportHttpGroupOnly',
            'errorMessage' => 'The operation is not allowed because of MirrorActionSupportHttpGroupOnly.',
          ),
          17 => 
          array (
            'errorCode' => 'OperationDenied.ProtocolMustSameForForwardGroupAction',
            'errorMessage' => 'The operation is not allowed because of ProtocolMustSameForForwardGroupAction.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Rule',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.ServerGroup',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateRulesAttributeResponse>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</UpdateRulesAttributeResponse>","errorExample":""}]',
      'title' => '批量更新转发规则属性',
      'description' => '**UpdateRulesAttribute**接口属于异步接口，即系统返回一个请求ID，但该转发规则属性尚未批量更新成功，系统后台的更新任务仍在进行。您可以调用[ListRules](~~214379~~)查询转发规则属性的更新状态：
- 当多条转发规则属性处于**Configuring**状态时，表示转发规则属性正在批量更新中。
- 当多条转发规则属性处于**Available**状态时，表示转发规则属性批量更新成功。

-  一条转发规则最多支持添加的条件数（**RuleConditions**）和动作数（**RuleActions**）如下：
    - 条件数：基础版5条，标准版10条，WAF增强版10条。
    - 动作数：基础版3条，标准版5条，WAF增强版5条。',
    ),
    'ListRules' => 
    array (
      'summary' => '查询指定地域的转发规则。',
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
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用来标记当前开始读取的位置，置空表示从头开始。',
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
            'title' => '本次读取的最大数据记录数量，此参数为可选参数，取值1-100，用户传入为空时，默认为20。',
            'description' => '本次读取的最大数据记录数。

取值：**1~100**。

默认值：**20**，表示用户没有传入数据。

> 此参数为可选。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'RuleIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '转发规则ID列表，N最大支持20',
            'description' => '转发规则列表，一次最多支持查询20个转发规则。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '转发规则ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'rule-sada******',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'ListenerIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '监听ID列表',
            'description' => '监听ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '监听ID列表，一次最多支持查询20个监听。',
              'type' => 'string',
              'required' => false,
              'example' => 'lsn-i35udpz3pxsmnf****',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        4 => 
        array (
          'name' => 'LoadBalancerIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '实例ID列表',
            'description' => '负载均衡实例ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '负载均衡实例ID列表，一次最多支持查询20个实例。',
              'type' => 'string',
              'required' => false,
              'example' => 'alb-x30o38azsuj0sx****',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        5 => 
        array (
          'name' => 'Direction',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '转发规则方向',
            'description' => '转发规则的方向。取值：

- **Request**（默认值）：请求类型，对从客户端发送到ALB的报文进行条件匹配并进行相应的处理。

- **Response**：响应类型，对从后端服务器组返回到ALB的报文进行条件匹配并进行相应的处理。

>基础版的ALB实例不支持Response类型.',
            'type' => 'string',
            'required' => false,
            'example' => 'Request',
          ),
        ),
        6 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签结构。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'env',
                ),
                'Value' => 
                array (
                  'description' => '标签值。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'product',
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
            'title' => 'Schema of Response',
            'description' => '转发规则。',
            'type' => 'object',
            'properties' => 
            array (
              'MaxResults' => 
              array (
                'title' => '本次请求所返回的最大记录条数。',
                'description' => '本次请求所返回的最大记录条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'NextToken' => 
              array (
                'title' => '用来表示当前调用返回读取到的位置，空代表数据已经读取完毕。',
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876F******',
              ),
              'Rules' => 
              array (
                'title' => '转发规则列表',
                'description' => '转发规则列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '转发规则结构。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ListenerId' => 
                    array (
                      'title' => '监听ID',
                      'description' => '转发规则所属监听ID。',
                      'type' => 'string',
                      'example' => 'lsn-i35udpz3pxsmnf****',
                    ),
                    'LoadBalancerId' => 
                    array (
                      'title' => '实例ID',
                      'description' => '转发规则所属负载均衡实例ID。',
                      'type' => 'string',
                      'example' => 'alb-x30o38azsuj0sx****',
                    ),
                    'Priority' => 
                    array (
                      'title' => '转发规则优先级',
                      'description' => '规则优先级，取值为**1~10000**。值越小表示优先级越高。

> 同一个监听内规则优先级必须唯一。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'RuleActions' => 
                    array (
                      'title' => '转发规则动作',
                      'description' => '转发规则动作列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '转发规则动作结构。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'FixedResponseConfig' => 
                          array (
                            'title' => '返回固定内容动作配置',
                            'description' => '固定响应内容配置。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Content' => 
                              array (
                                'title' => '内容',
                                'description' => '返回的固定内容。最大1 KB字节，只支持ASCII字符。',
                                'type' => 'string',
                                'example' => 'dssacav',
                              ),
                              'ContentType' => 
                              array (
                                'title' => '内容类型',
                                'description' => '返回固定内容的格式。

取值：**text/plain**、**text/css**、**text/html**、**application/javascript**或**application/json**。',
                                'type' => 'string',
                                'example' => 'text/plain',
                              ),
                              'HttpCode' => 
                              array (
                                'title' => 'HTTP响应码',
                                'description' => '返回的HTTP响应码，仅支持**HTTP_2xx**、**HTTP_4xx**、**HTTP_5xx**数字型字符串，**x**为任意数字。',
                                'type' => 'string',
                                'example' => 'HTTP_2xx',
                              ),
                            ),
                          ),
                          'ForwardGroupConfig' => 
                          array (
                            'title' => '转发组动作配置',
                            'description' => '转发组配置。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ServerGroupTuples' => 
                              array (
                                'title' => '转发到的目的服务器组列表',
                                'description' => '转发到的目的服务器组列表。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '转发到的目的服务器组列表。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'ServerGroupId' => 
                                    array (
                                      'title' => '服务器组标识',
                                      'description' => '转发到的目的服务器组ID。',
                                      'type' => 'string',
                                      'example' => 'sgp-atstuj3rtoptyui****',
                                    ),
                                    'Weight' => 
                                    array (
                                      'title' => '当ServerGroupTuple.N数量大于1时，可配置每个服务器组的权重',
                                      'description' => '权重。取值范围：**0**~**100**。',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '2',
                                    ),
                                  ),
                                ),
                              ),
                              'ServerGroupStickySession' => 
                              array (
                                'title' => '服务器组间会话保持配置',
                                'description' => '服务器组间会话保持配置',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Enabled' => 
                                  array (
                                    'title' => '当ServerGroupTuple.N数量大于1时，可选是否开启在服务器组间的会话保持',
                                    'description' => '当ServerGroupTuple.N数量大于1时，可选是否开启在服务器组间的会话保持',
                                    'type' => 'boolean',
                                  ),
                                  'Timeout' => 
                                  array (
                                    'title' => '当Enabled=True时，可以配置会话保持的超时时间',
                                    'description' => '当Enabled=True时，可以配置会话保持的超时时间',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '100',
                                  ),
                                ),
                              ),
                            ),
                          ),
                          'InsertHeaderConfig' => 
                          array (
                            'title' => '插入头部动作配置',
                            'description' => '写入头字段配置。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Key' => 
                              array (
                                'title' => 'HTTP标头',
                                'description' => '插入的头字段名称，长度为1\\~40个字符，支持大小写字母a\\~z、数字、下划线（_）和短划线（-）。头字段名称不能重复用于`InsertHeader`中。

> 不允许用户在头字段名称中使用**Cookie**和**Host**。',
                                'type' => 'string',
                                'example' => 'key',
                              ),
                              'Value' => 
                              array (
                                'title' => 'HTTP标头内容',
                                'description' => '插入的头字段内容。

- **ValueType**取值为**SystemDefined**时取值如下：
    - **ClientSrcPort**：客户端端口。
    - **ClientSrcIp**：客户端IP地址。
    - **Protocol**：客户端请求的协议（HTTP或HTTPS)。
    - **SLBId**：应用型负载均衡实例ID。
    - **SLBPort**：应用型负载均衡实例监听端口。
- **ValueType**取值为**UserDefined**时：您可自定义头字段内容，限制长度为1\\~128个字符，支持通配符星号（*）、半角问号（?）和ASCII码值`ch >= 32 && ch < 127`范围内的可打印字符，开头和结尾不能为空格。
- **ValueType**取值为**ReferenceHeader**时：您可以引用请求头字段中的某一个字段，限制长度限制为1\\~128个字符，支持小写字母a\\~z、数字、短划线（-）和下划线（_）。',
                                'type' => 'string',
                                'example' => 'ClientSrcPort',
                              ),
                              'ValueType' => 
                              array (
                                'title' => '取值类型',
                                'description' => '头字段内容类型。取值：

- **UserDefined**：用户指定。

- **ReferenceHeader**：引用用户请求头中的某一个字段。

- **SystemDefined**：系统定义。',
                                'type' => 'string',
                                'example' => 'SystemDefined',
                              ),
                            ),
                          ),
                          'Order' => 
                          array (
                            'title' => '优先级',
                            'description' => '转发规则动作执行的顺序，取值为**1~50000**，按值从小到大执行动作。值不能为空，不能重复。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'RedirectConfig' => 
                          array (
                            'title' => '重定向动作配置',
                            'description' => '重定向配置。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Host' => 
                              array (
                                'title' => '要跳转的主机地址',
                                'description' => '要跳转的主机地址。取值：
- **${host}**（默认值）：取此值时不支持和其他字符拼接使用。
- 其他取值，字符集和格式限制如下：
    - 主机名长度为3\\~128个字符，支持小写字母a\\~z、数字、短划线（-）、半角句号（.）以及通配符星号（*）和半角问号（?）。
    - 主机名至少包含一个半角句号（.），且半角句号（.）不能出现在开头或结尾。
    - 最右侧的域标签只能包含字母和通配符，不能包含数字或短划线（-）。
    - 短划线（-）不能出现在其它域标签的开头或结尾。
    -  通配符星号（*）和半角问号（?）可以出现在域标签的任意位置。',
                                'type' => 'string',
                                'example' => 'www.example.com',
                              ),
                              'HttpCode' => 
                              array (
                                'title' => '跳转方式',
                                'description' => '跳转方式，取值为**301**、**302**、**303**、**307**或**308**。',
                                'type' => 'string',
                                'example' => '301',
                              ),
                              'Path' => 
                              array (
                                'title' => '要跳转的路径',
                                'description' => '要跳转的路径。取值：
- **${path}**（默认值）：可以引用**${host}**、**${protocol}**和**${port}**，由**${host}**、**${protocol}**和**${port}**组成，每个变量最多出现一次。上述变量可以同时使用，也可以和下面罗列的可取值范围内的字符串拼接使用。
- 其他取值，字符集和格式限制如下：
    - 长度为1~128个字符。
    - 必须以正斜线（/）开头，支持字母、数字和特殊字符`$-_.+/&~@:`，不支持`“%#;!()[]^,” `，同时支持通配符星号（*）和半角问号（?）。',
                                'type' => 'string',
                                'example' => '/test',
                              ),
                              'Port' => 
                              array (
                                'title' => '要跳转的端口',
                                'description' => '要跳转的端口。取值：
- **${port}**（默认值）：该取值不支持和其他字符同时使用。
- 其他取值：**1~63335**。',
                                'type' => 'string',
                                'example' => '10',
                              ),
                              'Protocol' => 
                              array (
                                'title' => '要跳转的协议',
                                'description' => '要跳转的协议。取值：
- **${protocol}**（默认值）：取该值时不支持和其他字符拼接使用。
- **HTTP**或**HTTPS**。

    
> HTTPS监听仅支持跳转HTTPS协议。',
                                'type' => 'string',
                                'example' => 'HTTP',
                              ),
                              'Query' => 
                              array (
                                'title' => '要跳转的查询字符串',
                                'description' => '要跳转的查询字符串。长度为1~128个字符，支持小写字母和可见字符，不支持 `#[]{}\\|<>&`。
',
                                'type' => 'string',
                                'example' => 'quert',
                              ),
                            ),
                          ),
                          'RemoveHeaderConfig' => 
                          array (
                            'title' => '去除HTTP标头',
                            'description' => '去除HTTP头部配置。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Key' => 
                              array (
                                'title' => 'HTTP标头',
                                'description' => '去除的头字段名称，长度为1\\~40个字符，支持大小写字母a~z、数字、下划线（_）和短划线（-）。头字段名称不能重复用于RemoveHeader中。

* 请求方向（Direction取值为Request）：不允许将头名称设置为以下字段（不区分大小写）：`slb-id`、`slb-ip`、`x-forwarded-for`、`x-forwarded-proto`、`x-forwarded-eip`、`x-forwarded-port`、`x-forwarded-client-srcport`、`connection`、`upgrade`、`content-length`、`transfer-encoding`、`keep-alive`、`te`、`host`、`cookie`、`remoteip`、`authority`。
* 响应方向（Direction取值为Response）：响应方向不允许将头名称设置为以下字段（不区分大小写）：`connection`、`upgrade`、`content-length`、`transfer-encoding`。',
                                'type' => 'string',
                                'example' => 'key',
                              ),
                            ),
                          ),
                          'RewriteConfig' => 
                          array (
                            'title' => '内部重定向动作配置',
                            'description' => '重写配置。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Host' => 
                              array (
                                'title' => '主机名',
                                'description' => '要跳转的主机地址。取值：
- **${host}**（默认值）：取此值时不支持和其他字符拼接使用。
- 其他取值，字符集和格式限制如下：
    - 主机名长度为3\\~128个字符，支持小写字母a\\~z、数字、短划线（-）、半角句号（.）以及通配符星号（*）和半角问号（?）。
    - 主机名至少包含一个半角句号（.），且半角句号（.）不能出现在开头或结尾。
    - 最右侧的域标签只能包含字母和通配符，不能包含数字或短划线（-）。
    - 短划线（-）不能出现在其它域标签的开头或结尾。
    -  通配符星号（*）和半角问号（?）可以出现在域标签的任意位置。',
                                'type' => 'string',
                                'example' => 'www.example.com',
                              ),
                              'Path' => 
                              array (
                                'title' => '路径',
                                'description' => '内部跳转的目的路径。长度为1~128个字符，以正斜线（/）开头，支持字母、数字、星号（*）、半角问号（?）和`$-_.+/&~@:`，不支持`“%#;!()[]^,” `。',
                                'type' => 'string',
                                'example' => '/tsdf',
                              ),
                              'Query' => 
                              array (
                                'title' => '查询',
                                'description' => '内部跳转的查询字符串。长度为1~128个字符，支持小写字母和可见字符，不支持 `#[]{}\\|<>&`。

',
                                'type' => 'string',
                                'example' => 'quedsa',
                              ),
                            ),
                          ),
                          'TrafficMirrorConfig' => 
                          array (
                            'title' => '流量镜像Action对应的配置，type为TrafficMirror时必填且有效',
                            'description' => '流量镜像。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'TargetType' => 
                              array (
                                'title' => '流量镜像的目的，可以是服务器组',
                                'description' => '流量镜像的目的，可以是服务器组',
                                'type' => 'string',
                                'example' => 'ForwardGroupMirror',
                              ),
                              'MirrorGroupConfig' => 
                              array (
                                'title' => 'TargetType为服务器组时必选，目标服务器组',
                                'description' => '流量镜像至服务器组。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'ServerGroupTuples' => 
                                  array (
                                    'description' => '流量镜像至服务器组。',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'type' => 'object',
                                      'properties' => 
                                      array (
                                        'ServerGroupId' => 
                                        array (
                                          'description' => '服务器组ID。',
                                          'type' => 'string',
                                          'example' => 'sgp-00mkgijak0w4qgz9****',
                                        ),
                                        'Weight' => 
                                        array (
                                          'description' => '权重。取值范围：**0**~**100**。',
                                          'type' => 'integer',
                                          'format' => 'int32',
                                          'example' => '2',
                                        ),
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                          'TrafficLimitConfig' => 
                          array (
                            'description' => '流量限速。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'QPS' => 
                              array (
                                'description' => '每秒请求次数。取值范围：**1**~**100000**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '4',
                              ),
                              'PerIpQps' => 
                              array (
                                'description' => '单IP每秒请求次数。 取值范围：**1 ~ 100000**。

> 如果同时配置**QPS**参数，**PerIpQps**参数的取值必须小于**QPS**参数的取值。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '80',
                              ),
                            ),
                          ),
                          'Type' => 
                          array (
                            'title' => '转发规则动作类型',
                            'description' => '动作类型。取值：

- **ForwardGroup**：转发至多个虚拟服务器组。

- **Redirect**：重定向。

- **FixedResponse**：返回固定内容。

- **Rewrite**：重写。

- **InsertHeader**：写入头字段。

- **RemoveHeaderConfig**：删除头字段。

- **TrafficLimitConfig**：流量限速。

- **TrafficMirrorConfig**：流量镜像。

- **CorsConfig**：跨域。

转发规则中包括的动作类型：

- **FinalType**：一个转发规则的动作中仅能有一项FinalType的动作并且最后执行，只能包含一项**ForwardGroup**、**Redirect**、或**FixedResponse**。

- **ExtType**：一个转发规则可以有一项或多项此类**ExtType**的动作，在**FinalType**的动作之前执行，且需要与**FinalType**并存。包含多项**InsertHeader**或一项**Rewrite**。',
                            'type' => 'string',
                            'example' => 'ForwardGroup',
                          ),
                          'CorsConfig' => 
                          array (
                            'title' => '跨域',
                            'description' => '跨域。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'AllowOrigin' => 
                              array (
                                'title' => '允许的访问来源',
                                'description' => '允许的访问来源。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '允许访问的来源。支持配置为`*`或配置为一个或多个value值。value的值不能为`*`。

- 单个value值必须以`http://`或者`https://`开头，后面加一个正确的域名或者一级的泛域名（例如，`*.test.abc.example.com`）。
- 单个value值可以不加端口，也可以指定端口，端口范围：**1**~**65535**。',
                                  'type' => 'string',
                                  'example' => 'http://test.com',
                                ),
                              ),
                              'AllowMethods' => 
                              array (
                                'title' => '选择跨域访问时允许的HTTP方法',
                                'description' => '选择跨域访问时允许的HTTP方法。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '选择跨域访问时允许的HTTP方法。取值：
- **GET**。
- **POST**。
- **PUT**。
- **DELETE**。
- **HEAD**。
- **OPTIONS**。
- **PATCH**。',
                                  'type' => 'string',
                                  'example' => 'GET',
                                ),
                              ),
                              'AllowHeaders' => 
                              array (
                                'title' => '允许跨域的Header列表',
                                'description' => '允许跨域的Header列表。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '允许跨域的Header列表。支持配置为`*`或配置一个或多个value值，多个value值用半角逗号（,）隔开。单个value值只允许包含大小写字母、数字，不能以下划线（_）和短划线（-）开头或结尾，最大长度限制为32个字符。',
                                  'type' => 'string',
                                  'example' => 'test_123',
                                ),
                              ),
                              'ExposeHeaders' => 
                              array (
                                'title' => '允许暴露的Header列表',
                                'description' => '允许暴露的Header列表。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '允许跨域的Header列表。支持配置为`*`或配置一个或多个value值，多个value值用半角逗号（,）隔开。单个value值只允许包含大小写字母、数字，不能以下划线（_）和短划线（-）开头或结尾，最大长度限制为32个字符。',
                                  'type' => 'string',
                                  'example' => 'test_123',
                                ),
                              ),
                              'AllowCredentials' => 
                              array (
                                'title' => '是否允许携带凭证信息',
                                'description' => '是否允许携带凭证信息。取值：

- **on**：是。
- **off**：否。',
                                'type' => 'string',
                                'example' => 'on',
                              ),
                              'MaxAge' => 
                              array (
                                'title' => '预检请求在浏览器的最大缓存时间',
                                'description' => '预检请求在浏览器的最大缓存时间，单位：秒。

取值范围：**-1**~**172800**。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1000',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'RuleConditions' => 
                    array (
                      'title' => '转发规则条件',
                      'description' => '转发规则条件列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '转发规则条件结构。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'CookieConfig' => 
                          array (
                            'title' => 'Cookie条件配置',
                            'description' => 'Cookie配置。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Values' => 
                              array (
                                'title' => 'Cookie键值对列表',
                                'description' => 'Cookie值。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => 'Cookie值。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'Key' => 
                                    array (
                                      'title' => 'Cookie条件键',
                                      'description' => 'Cookie键。长度为1~100个字符，支持小写字母、可见字符、星号（*）和半角问号（?），不支持空格和`#[]{}\\|<>&`。',
                                      'type' => 'string',
                                      'example' => 'test',
                                    ),
                                    'Value' => 
                                    array (
                                      'title' => 'Cookie条件值',
                                      'description' => 'Cookie值。长度为1~128个字符，支持小写字母、可见字符、星号（*）和半角问号（?），不支持空格和`#[]{}\\|<>&`。',
                                      'type' => 'string',
                                      'example' => 'test',
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                          'HeaderConfig' => 
                          array (
                            'title' => 'HTTP标头条件配置',
                            'description' => '头字段配置。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Key' => 
                              array (
                                'title' => 'HTTP标头键',
                                'description' => '头字段键。长度为1\\~40个字符。支持字母a\\~z、数字、短划线（-）和下划线（_）。不支持Cookie和Host。',
                                'type' => 'string',
                                'example' => 'Port',
                              ),
                              'Values' => 
                              array (
                                'title' => 'HTTP标头值列表',
                                'description' => '头字段值。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '头字段值。长度为1\\~128个字符。支持ASCII码值`ch >= 32 && ch < 127`范围内可打印字符、小写字母、星号（*）和半角问号（?）。开头和结尾不能为空格。',
                                  'type' => 'string',
                                  'example' => '5006',
                                ),
                              ),
                            ),
                          ),
                          'HostConfig' => 
                          array (
                            'title' => '主机名条件配置',
                            'description' => '主机配置。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Values' => 
                              array (
                                'title' => '主机名列表',
                                'description' => '主机名。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '主机名。命名规则：

- 域名长度为3\\~128个字符，支持小写字母a\\~z、数字、短划线（-）、半角句号（.）、星号（*）和半角问号（?）。

- 域名至少包含一个半角句号（.），且半角句号（.）不能出现在开头或结尾。

- 最右侧的域标签只能包含字母、星号（*）和半角问号（?），不能包含数字或短划线（-）。

- 短划线（-）不能出现在其它域标签的开头或结尾。星号（*）和半角问号（?）可以出现在域标签的任意位置。',
                                  'type' => 'string',
                                  'example' => 'www.example.com',
                                ),
                              ),
                            ),
                          ),
                          'MethodConfig' => 
                          array (
                            'title' => 'HTTP请求方法条件配置',
                            'description' => '请求方法配置。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Values' => 
                              array (
                                'title' => 'HTTP请求方法列表',
                                'description' => '请求方法。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '请求方法。

取值：**HEAD**、**GET**、**POST**、**OPTIONS**、**PUT**、**PATCH**或**DELETE**。',
                                  'type' => 'string',
                                  'example' => 'PUT',
                                ),
                              ),
                            ),
                          ),
                          'PathConfig' => 
                          array (
                            'title' => '路径条件配置',
                            'description' => '转发路径配置。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Values' => 
                              array (
                                'title' => '路径条件列表',
                                'description' => '转发路径。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '转发路径。长度为1~128个字符，以正斜线（/）开头，支持字母、数字、星号（*）、半角问号（?）和`$-_.+/&~@:`，不支持`“%#;!()[]^,” `。',
                                  'type' => 'string',
                                  'example' => '/test',
                                ),
                              ),
                            ),
                          ),
                          'QueryStringConfig' => 
                          array (
                            'title' => '查询字符串条件配置',
                            'description' => '查询字符串配置。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Values' => 
                              array (
                                'title' => '查询字符串条件键值对列表',
                                'description' => '查询字符串。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '查询字符串。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'Key' => 
                                    array (
                                      'title' => '查询字符串条件键',
                                      'description' => '查询字符串键。长度为1~100个字符，支持小写字母、可见字符、星号（*）和半角问号（?），不支持空格和`#[]{}\\|<>&`。',
                                      'type' => 'string',
                                      'example' => 'test',
                                    ),
                                    'Value' => 
                                    array (
                                      'title' => '查询字符串条件值',
                                      'description' => '查询字符串值。长度为1~128个字符，支持小写字母、可见字符、星号（*）和半角问号（?），不支持空格和`#[]{}\\|<>&`。',
                                      'type' => 'string',
                                      'example' => 'test',
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                          'SourceIpConfig' => 
                          array (
                            'title' => '源IP业务流量匹配',
                            'description' => '基于源IP业务流量匹配。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Values' => 
                              array (
                                'title' => '需要匹配的源IP列表',
                                'description' => '需要匹配的源IP列表。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '添加一个或多个IP地址或者IP地址段。

一条转发规则中最多支持添加5条源IP。',
                                  'type' => 'string',
                                  'example' => '192.168.XX.XX/32',
                                ),
                              ),
                            ),
                          ),
                          'ResponseStatusCodeConfig' => 
                          array (
                            'title' => '返回状态码条件',
                            'description' => '响应状态码配置。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Values' => 
                              array (
                                'title' => '返回状态码条件列表',
                                'description' => '响应状态码列表。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '响应状态码。',
                                  'type' => 'string',
                                  'example' => '200',
                                ),
                              ),
                            ),
                          ),
                          'ResponseHeaderConfig' => 
                          array (
                            'title' => '返回HTTP标头',
                            'description' => '响应HTTP头部配置。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Key' => 
                              array (
                                'title' => '返回HTTP标头键',
                                'description' => '响应HTTP头部键。长度为1\\~40个字符。支持字母a~z、数字、短划线（-）和下划线（_）。不支持Cookie和Host。',
                                'type' => 'string',
                                'example' => 'key',
                              ),
                              'Values' => 
                              array (
                                'title' => '返回HTTP标头值',
                                'description' => '响应HTTP头部值列表。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '响应HTTP头部值。长度为1~128个字符。',
                                  'type' => 'string',
                                  'example' => 'value',
                                ),
                              ),
                            ),
                          ),
                          'Type' => 
                          array (
                            'title' => '条件类型',
                            'description' => '转发规则类型。取值：

- **Host**：主机。

- **Path**：路径。

- **Header**：HTTP头字段。

- **QueryString**：查询字符串。

- **Method**：请求方法。

- **Cookie**：Cookie。

- **SourceIp**：源IP。',
                            'type' => 'string',
                            'example' => 'Host',
                          ),
                        ),
                        'required' => true,
                      ),
                    ),
                    'RuleId' => 
                    array (
                      'title' => '转发规则标识',
                      'description' => '转发规则ID。',
                      'type' => 'string',
                      'example' => 'rule-bpn0kn908w4nbw****',
                    ),
                    'RuleName' => 
                    array (
                      'title' => '转发规则名称',
                      'description' => '转发规则名称。 长度为2~128个英文或中文字符，必须以大小字母或中文开头，可包含数字，半角句号（.），下划线（_）和短划线（-）。',
                      'type' => 'string',
                      'example' => 'rule-instance-test',
                    ),
                    'RuleStatus' => 
                    array (
                      'title' => '转发规则状态',
                      'description' => '转发规则状态。取值：

- **Provisioning**：创建中。

- **Configuring**：变配中。

- **Available**：运行中。',
                      'type' => 'string',
                      'example' => 'Available',
                    ),
                    'Direction' => 
                    array (
                      'title' => '转发规则方向',
                      'description' => '转发规则的方向。取值：

* Request（默认值）：请求类型，对从客户端发送到ALB的报文进行条件匹配并进行相应的处理。

* Response：响应类型，对从后端服务器组返回到ALB的报文进行条件匹配并进行相应的处理。

> 基础版的ALB实例不支持Response类型。',
                      'type' => 'string',
                      'example' => 'Request',
                    ),
                    'Tags' => 
                    array (
                      'description' => '标签。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签结构。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '标签键。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                            'type' => 'string',
                            'example' => 'env',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签值。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                            'type' => 'string',
                            'example' => 'product',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'title' => '本次请求条件下的数据总量。',
                'description' => '本次请求条件下返回的总数据记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1000',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.LoadBalancer',
            'errorMessage' => 'Authentication is failed for %s.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"MaxResults\\": 50,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876F******\\",\\n  \\"Rules\\": [\\n    {\\n      \\"ListenerId\\": \\"lsn-i35udpz3pxsmnf****\\",\\n      \\"LoadBalancerId\\": \\"alb-x30o38azsuj0sx****\\",\\n      \\"Priority\\": 1,\\n      \\"RuleActions\\": [\\n        {\\n          \\"FixedResponseConfig\\": {\\n            \\"Content\\": \\"dssacav\\",\\n            \\"ContentType\\": \\"text/plain\\",\\n            \\"HttpCode\\": \\"HTTP_2xx\\"\\n          },\\n          \\"ForwardGroupConfig\\": {\\n            \\"ServerGroupTuples\\": [\\n              {\\n                \\"ServerGroupId\\": \\"sgp-atstuj3rtoptyui****\\",\\n                \\"Weight\\": 2\\n              }\\n            ],\\n            \\"ServerGroupStickySession\\": {\\n              \\"Enabled\\": true,\\n              \\"Timeout\\": 100\\n            }\\n          },\\n          \\"InsertHeaderConfig\\": {\\n            \\"Key\\": \\"key\\",\\n            \\"Value\\": \\"ClientSrcPort\\",\\n            \\"ValueType\\": \\"SystemDefined\\"\\n          },\\n          \\"Order\\": 1,\\n          \\"RedirectConfig\\": {\\n            \\"Host\\": \\"www.example.com\\",\\n            \\"HttpCode\\": \\"301\\",\\n            \\"Path\\": \\"/test\\",\\n            \\"Port\\": \\"10\\",\\n            \\"Protocol\\": \\"HTTP\\",\\n            \\"Query\\": \\"quert\\"\\n          },\\n          \\"RemoveHeaderConfig\\": {\\n            \\"Key\\": \\"key\\"\\n          },\\n          \\"RewriteConfig\\": {\\n            \\"Host\\": \\"www.example.com\\",\\n            \\"Path\\": \\"/tsdf\\",\\n            \\"Query\\": \\"quedsa\\"\\n          },\\n          \\"TrafficMirrorConfig\\": {\\n            \\"TargetType\\": \\"ForwardGroupMirror\\",\\n            \\"MirrorGroupConfig\\": {\\n              \\"ServerGroupTuples\\": [\\n                {\\n                  \\"ServerGroupId\\": \\"sgp-00mkgijak0w4qgz9****\\",\\n                  \\"Weight\\": 2\\n                }\\n              ]\\n            }\\n          },\\n          \\"TrafficLimitConfig\\": {\\n            \\"QPS\\": 4,\\n            \\"PerIpQps\\": 80\\n          },\\n          \\"Type\\": \\"ForwardGroup\\",\\n          \\"CorsConfig\\": {\\n            \\"AllowOrigin\\": [\\n              \\"http://test.com\\"\\n            ],\\n            \\"AllowMethods\\": [\\n              \\"GET\\"\\n            ],\\n            \\"AllowHeaders\\": [\\n              \\"test_123\\"\\n            ],\\n            \\"ExposeHeaders\\": [\\n              \\"test_123\\"\\n            ],\\n            \\"AllowCredentials\\": \\"on\\",\\n            \\"MaxAge\\": 1000\\n          }\\n        }\\n      ],\\n      \\"RuleConditions\\": [\\n        {\\n          \\"CookieConfig\\": {\\n            \\"Values\\": [\\n              {\\n                \\"Key\\": \\"test\\",\\n                \\"Value\\": \\"test\\"\\n              }\\n            ]\\n          },\\n          \\"HeaderConfig\\": {\\n            \\"Key\\": \\"Port\\",\\n            \\"Values\\": [\\n              \\"5006\\"\\n            ]\\n          },\\n          \\"HostConfig\\": {\\n            \\"Values\\": [\\n              \\"www.example.com\\"\\n            ]\\n          },\\n          \\"MethodConfig\\": {\\n            \\"Values\\": [\\n              \\"PUT\\"\\n            ]\\n          },\\n          \\"PathConfig\\": {\\n            \\"Values\\": [\\n              \\"/test\\"\\n            ]\\n          },\\n          \\"QueryStringConfig\\": {\\n            \\"Values\\": [\\n              {\\n                \\"Key\\": \\"test\\",\\n                \\"Value\\": \\"test\\"\\n              }\\n            ]\\n          },\\n          \\"SourceIpConfig\\": {\\n            \\"Values\\": [\\n              \\"192.168.XX.XX/32\\"\\n            ]\\n          },\\n          \\"ResponseStatusCodeConfig\\": {\\n            \\"Values\\": [\\n              \\"200\\"\\n            ]\\n          },\\n          \\"ResponseHeaderConfig\\": {\\n            \\"Key\\": \\"key\\",\\n            \\"Values\\": [\\n              \\"value\\"\\n            ]\\n          },\\n          \\"Type\\": \\"Host\\"\\n        }\\n      ],\\n      \\"RuleId\\": \\"rule-bpn0kn908w4nbw****\\",\\n      \\"RuleName\\": \\"rule-instance-test\\",\\n      \\"RuleStatus\\": \\"Available\\",\\n      \\"Direction\\": \\"Request\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"env\\",\\n          \\"Value\\": \\"product\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"TotalCount\\": 1000\\n}","errorExample":""},{"type":"xml","example":"<ListRulesResponse>\\n    <MaxResults>50</MaxResults>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <Rules>\\n        <ListenerId>lsn-i35udpz3pxsmnf****</ListenerId>\\n        <LoadBalancerId>alb-x30o38azsuj0sx****</LoadBalancerId>\\n        <Priority>1</Priority>\\n        <RuleActions>\\n            <FixedResponseConfig>\\n                <Content>dssacav</Content>\\n                <ContentType>text/plain</ContentType>\\n                <HttpCode>HTTP_2xx</HttpCode>\\n            </FixedResponseConfig>\\n            <ForwardGroupConfig>\\n                <ServerGroupTuples>\\n                    <ServerGroupId>sg-atstuj3rtoptyui****</ServerGroupId>\\n                    <Weight>2</Weight>\\n                </ServerGroupTuples>\\n            </ForwardGroupConfig>\\n            <InsertHeaderConfig>\\n                <Key>key</Key>\\n                <Value>ClientSrcPort</Value>\\n                <ValueType>SystemDefined</ValueType>\\n            </InsertHeaderConfig>\\n            <Order>1</Order>\\n            <RedirectConfig>\\n                <Host>www.example.com</Host>\\n                <HttpCode>301</HttpCode>\\n                <Path>/test</Path>\\n                <Port>10</Port>\\n                <Protocol>HTTP</Protocol>\\n                <Query>quert</Query>\\n            </RedirectConfig>\\n            <RewriteConfig>\\n                <Host>www.example.com</Host>\\n                <Path>/tsdf</Path>\\n                <Query>quedsa</Query>\\n            </RewriteConfig>\\n            <TrafficMirrorConfig>\\n                <MirrorGroupConfig>\\n                    <ServerGroupTuples>\\n                        <ServerGroupId>srg-00mkgijak0w4qgz9****</ServerGroupId>\\n                        <Weight>2</Weight>\\n                    </ServerGroupTuples>\\n                </MirrorGroupConfig>\\n            </TrafficMirrorConfig>\\n            <TrafficLimitConfig>\\n                <QPS>4</QPS>\\n                <PerIpQps>80</PerIpQps>\\n            </TrafficLimitConfig>\\n            <Type>ForwardGroup</Type>\\n            <CorsConfig>\\n                <AllowOrigin>http://test.com</AllowOrigin>\\n                <AllowMethods>GET</AllowMethods>\\n                <AllowHeaders>test_123</AllowHeaders>\\n                <ExposeHeaders>test_123</ExposeHeaders>\\n                <AllowCredentials>on</AllowCredentials>\\n                <MaxAge>1000</MaxAge>\\n            </CorsConfig>\\n        </RuleActions>\\n        <RuleConditions>\\n            <CookieConfig>\\n                <Values>\\n                    <Key>test</Key>\\n                    <Value>test</Value>\\n                </Values>\\n            </CookieConfig>\\n            <HeaderConfig>\\n                <Key>Port</Key>\\n                <Values>5006</Values>\\n            </HeaderConfig>\\n            <HostConfig>\\n                <Values>www.example.com</Values>\\n            </HostConfig>\\n            <MethodConfig>\\n                <Values>PUT</Values>\\n            </MethodConfig>\\n            <PathConfig>\\n                <Values>/test</Values>\\n            </PathConfig>\\n            <QueryStringConfig>\\n                <Values>\\n                    <Key>test</Key>\\n                    <Value>test</Value>\\n                </Values>\\n            </QueryStringConfig>\\n            <SourceIpConfig>\\n                <Values>192.168.XX.XX/32</Values>\\n            </SourceIpConfig>\\n            <Type>Host</Type>\\n        </RuleConditions>\\n        <RuleId>rule-bpn0kn908w4nbw****</RuleId>\\n        <RuleName>rule-instance-test</RuleName>\\n        <RuleStatus>Available</RuleStatus>\\n    </Rules>\\n    <TotalCount>1000</TotalCount>\\n</ListRulesResponse>","errorExample":""}]',
      'title' => '查询转发规则',
    ),
    'AssociateAdditionalCertificatesWithListener' => 
    array (
      'summary' => '将扩展证书关联到监听。',
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
          'name' => 'ListenerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '监听Id',
            'description' => '监听ID。HTTPS和QUIC监听有效。',
            'type' => 'string',
            'required' => true,
            'example' => 'lsn-5qnirjhpt******',
          ),
        ),
        1 => 
        array (
          'name' => 'Certificates',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '证书列表',
            'description' => '扩展证书列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '扩展证书列表。',
              'type' => 'object',
              'properties' => 
              array (
                'CertificateId' => 
                array (
                  'title' => '证书Id',
                  'description' => '证书ID，当前仅支持服务器证书。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '103705******',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 15,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等Token',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B3F******',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'dryRun',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会为HTTPS和QUIC监听添加扩展证书。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false（默认值）**：发送正常请求，通过检查后返回HTTP `2xx`状态码并直接进行操作。',
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
            'description' => '为HTTPS或QUIC监听添加扩展证书。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
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
            'errorCode' => 'IncorrectStatus.Listener',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.DefaultCertificateUsed',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationFailed.DefaultCertificateNotFound',
            'errorMessage' => 'The operation failed because of %s.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceAlreadyAssociated.Certificate',
            'errorMessage' => 'The specified resource %s is already associated.',
          ),
          4 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.LoadBalancerCertificatesNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.HttpListenerNotSupport',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'Invalid parameter, please check the parameter input.',
          ),
          7 => 
          array (
            'errorCode' => 'ResourceInConfiguring.Listener',
            'errorMessage' => 'The specified resource %s is configuring, please try again later.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.LoadBalancer',
            'errorMessage' => 'Authentication has failed for LoadBalancer.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Certificate',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.Listener',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF3******\\"\\n}","errorExample":""},{"type":"xml","example":"<AssociateAdditionalCertificatesWithListenerResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n</AssociateAdditionalCertificatesWithListenerResponse>","errorExample":""}]',
      'title' => '关联扩展证书和监听',
      'description' => '**AssociateAdditionalCertificatesWithListener**接口属于异步接口，即系统返回一个请求ID，但该扩展证书尚未添加成功，系统后台的添加任务仍在进行。您可以调用[GetListenerAttribute](~~2254865~~)查询扩展证书的添加状态：
   - 当HTTPS和QUIC监听处于**Associating**状态时，表示扩展证书正在添加中。
   - 当HTTPS和QUIC监听处于**Associated**状态时，表示扩展证书添加成功。',
    ),
    'DissociateAdditionalCertificatesFromListener' => 
    array (
      'summary' => '将扩展证书从监听上解除关联。',
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
          'name' => 'ListenerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '监听Id',
            'description' => '监听ID。HTTPS和QUIC监听有效。',
            'type' => 'string',
            'required' => true,
            'example' => 'lsn-5qnirjhpt7******',
          ),
        ),
        1 => 
        array (
          'name' => 'Certificates',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '证书列表',
            'description' => '扩展证书列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '扩展证书。',
              'type' => 'object',
              'properties' => 
              array (
                'CertificateId' => 
                array (
                  'title' => '证书Id',
                  'description' => '证书ID，当前仅支持服务器证书。最多支持20个证书ID。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '103705******',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 15,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等Token',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B3******',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'dryRun',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会从HTTPS和QUIC监听移除扩展证书。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回**HTTP 2xx**状态码并直接进行操作。',
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
            'description' => '从HTTPS和QUIC监听移除扩展证书。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF34B******',
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
            'errorCode' => 'IncorrectStatus.Listener',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.HttpListenerNotSupport',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.DefaultCertificateUsed',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotAssociated.Certificate',
            'errorMessage' => 'The specified resource %s is not associated.',
          ),
          4 => 
          array (
            'errorCode' => 'ResourceInConfiguring.Listener',
            'errorMessage' => 'The specified resource of %s is being configured, please try again later.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Listener',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B******\\"\\n}","errorExample":""},{"type":"xml","example":"<DissociateAdditionalCertificatesFromListenerResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n</DissociateAdditionalCertificatesFromListenerResponse>","errorExample":""}]',
      'title' => '解除关联监听和扩展证书',
      'description' => '**DissociateAdditionalCertificatesFromListener**接口属于异步接口，即系统返回一个请求ID，但该扩展证书尚未解绑成功，系统后台的解绑任务仍在进行。您可以调用[ListListenerCertificates](~~214354~~)查询扩展证书的解绑状态：

- 当扩展证书状态处于**Dissociating**状态时，表示扩展证书正在解绑中。

- 当扩展证书状态处于**Dissociated**状态时，表示扩展证书解绑成功。',
    ),
    'ListListenerCertificates' => 
    array (
      'summary' => '查询指定监听关联的证书，包含扩展证书和默认证书。',
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
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页查询标识',
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
            'title' => '查询数量',
            'description' => '本次读取的最大数据记录。取值范围：**1~100**。入参为空时，默认值为**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '50',
            'default' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '监听Id',
            'description' => '监听ID。HTTPS和QUIC监听有效。',
            'type' => 'string',
            'required' => true,
            'example' => 'lsn-5qnirjhpt******',
          ),
        ),
        3 => 
        array (
          'name' => 'CertificateType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '证书类型',
            'description' => '证书类型。取值：**Ca**或**Server**。
',
            'type' => 'string',
            'required' => false,
            'example' => 'Server',
          ),
        ),
        4 => 
        array (
          'name' => 'CertificateIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '证书id列表',
            'description' => '证书id列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
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
            'description' => '监听证书结构。',
            'type' => 'object',
            'properties' => 
            array (
              'MaxResults' => 
              array (
                'title' => '本次查询返回记录数量',
                'description' => '本次请求所返回的最大记录条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'NextToken' => 
              array (
                'title' => '分页查询标识',
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF3******',
              ),
              'TotalCount' => 
              array (
                'title' => '总记录数',
                'description' => '本次请求条件下的数据总量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1000',
              ),
              'Certificates' => 
              array (
                'title' => '监听SSL证书列表',
                'description' => '证书列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '证书结构。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CertificateId' => 
                    array (
                      'title' => '证书Id',
                      'description' => '证书ID，当前仅支持服务器证书。',
                      'type' => 'string',
                      'example' => '123157******',
                    ),
                    'IsDefault' => 
                    array (
                      'title' => '是否为默认证书',
                      'description' => '是否为监听默认证书。取值：

- **true**：默认证书。

- **false**：扩展证书。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Status' => 
                    array (
                      'title' => '证书状态',
                      'description' => '证书与监听关联的状态。取值：

- **Associating**：关联中。

- **Associated**：已关联。

- **Diassociating**：解除关联中。',
                      'type' => 'string',
                      'example' => 'Associating',
                    ),
                    'CertificateType' => 
                    array (
                      'title' => '证书类型',
                      'description' => '证书类型。',
                      'type' => 'string',
                      'example' => 'Server',
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
            'errorCode' => 'OperationDenied.HttpListenerNotSupport',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Listener',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"MaxResults\\": 50,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF3******\\",\\n  \\"TotalCount\\": 1000,\\n  \\"Certificates\\": [\\n    {\\n      \\"CertificateId\\": \\"123157******\\",\\n      \\"IsDefault\\": true,\\n      \\"Status\\": \\"Associating\\",\\n      \\"CertificateType\\": \\"Server\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListListenerCertificatesResponse>\\n    <MaxResults>50</MaxResults>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <TotalCount>1000</TotalCount>\\n    <Certificates>\\n        <CertificateId>12315790343_166f8204689_1714763408_70998****</CertificateId>\\n        <IsDefault>true</IsDefault>\\n        <Status>Associating</Status>\\n        <CertificateType>Server</CertificateType>\\n    </Certificates>\\n</ListListenerCertificatesResponse>","errorExample":""}]',
      'title' => '查询监听证书',
    ),
    'DetachCommonBandwidthPackageFromLoadBalancer' => 
    array (
      'summary' => '将共享带宽包从负载均衡实例中移除。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '幂等参数',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-4266******',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '应用型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '应用型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'alb-d676fho813rmu3****',
          ),
        ),
        3 => 
        array (
          'name' => 'BandwidthPackageId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '带宽包ID',
            'description' => '移除的共享带宽包ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cbwp-bp1pzf0ym72pu3y76****',
          ),
        ),
        4 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '预校验',
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会将共享带宽包从负载均衡实例中移除。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
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
            'description' => '将共享带宽包从负载均衡实例中移除。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2EF39708-974B-5E74-AFF5-344******',
              ),
              'JobId' => 
              array (
                'title' => '异步任务ID',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
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
            'errorCode' => 'IncorrectBusinessStatus.CommonBandwidthPackage',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectStatus.CommonBandwidthPackage',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.LoadBalancer',
            'errorMessage' => 'Authentication is failed for %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.LoadBalancer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2EF39708-974B-5E74-AFF5-344******\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<DetachCommonBandwidthPackageFromLoadBalancerResponse>\\n    <RequestId>2EF39708-974B-5E74-AFF5-3445263035A8</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</DetachCommonBandwidthPackageFromLoadBalancerResponse>","errorExample":""}]',
      'title' => '实例解绑共享带宽包',
      'description' => '**DetachCommonBandwidthPackageFromLoadBalancer**接口属于异步接口，即系统返回一个请求ID，但该负载均衡实例尚未解除关联共享带宽包，系统后台的解除任务仍在进行。您可以调用[GetLoadBalancerAttribute](~~214359~~)查询共享带宽包的解除状态：
- 当负载均衡实例处于**Configuring**状态时，表示共享带宽包正在解除中。
- 当负载均衡实例处于**Active**状态时，表示共享带宽包解除成功。',
    ),
    'AttachCommonBandwidthPackageToLoadBalancer' => 
    array (
      'summary' => '将共享带宽包绑定到应用型负载均衡实例上。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '幂等参数',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665*****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '应用型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~36063~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '应用型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'alb-d676fho813rmu3****',
          ),
        ),
        3 => 
        array (
          'name' => 'BandwidthPackageId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '带宽包ID',
            'description' => '绑定的共享带宽包ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cbwp-bp1pzf0ym72pu3y76****',
          ),
        ),
        4 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否只预检此次请求',
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会将共享带宽包绑定到负载均衡实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
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
            'description' => '将共享带宽包绑定到应用型负载均衡实例。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2EF39708-974B-5E74-AFF5-3445******',
              ),
              'JobId' => 
              array (
                'title' => '异步任务id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
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
            'errorCode' => 'IncorrectBusinessStatus.CommonBandwidthPackage',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectStatus.CommonBandwidthPackage',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.LoadBalancer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.CommonBandwidthPackage',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2EF39708-974B-5E74-AFF5-3445******\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<AttachCommonBandwidthPackageToLoadBalancerResponse>\\n    <RequestId>2EF39708-974B-5E74-AFF5-3445263035A8</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</AttachCommonBandwidthPackageToLoadBalancerResponse>","errorExample":""}]',
      'title' => '实例绑定共享带宽包',
      'description' => '**AttachCommonBandwidthPackageToLoadBalancer**接口属于异步接口，即系统返回一个请求ID，但该负载均衡实例尚未绑定关联共享带宽包，系统后台的绑定任务仍在进行。您可以调用[GetLoadBalancerAttribute](~~214362~~)查询共享带宽包的绑定状态：
- 当负载均衡实例处于**Configuring**状态时，表示共享带宽包正在绑定中。
- 当负载均衡实例处于**Active**状态时，表示共享带宽包绑定成功。',
    ),
    'DisableLoadBalancerAccessLog' => 
    array (
      'summary' => '关闭指定负载均衡实例的访问日志。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。

>若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '593B0448-D13E-4C56-AC0D-FDF0******',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会创建资源。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例id',
            'description' => '负载均衡实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'alb-bp1b6c719dfa08ex*****',
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
            'description' => '返回数据结构',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '593B0448-D13E-4C56-AC0D-FDF******',
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
            'errorCode' => 'OperationDenied.AccessLogDisabled',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceInConfiguring.LoadBalancer',
            'errorMessage' => 'The specified resource of %s is being configured, please try again later.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.LoadBalancer',
            'errorMessage' => 'Authentication is failed for %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.LoadBalancer',
            'errorMessage' => 'The specified resource of %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"593B0448-D13E-4C56-AC0D-FDF******\\"\\n}","errorExample":""},{"type":"xml","example":"<DisableLoadBalancerAccessLogResponse>\\n    <RequestId>593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3</RequestId>\\n</DisableLoadBalancerAccessLogResponse>","errorExample":""}]',
      'title' => '关闭访问日志',
    ),
    'EnableLoadBalancerAccessLog' => 
    array (
      'summary' => '开启指定负载均衡实例的访问日志。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。

> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '593B0448-D13E-4C56-AC0D-FDF******',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会创建资源。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例id',
            'description' => '应用型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'alb-bd6oylbckp6k9x****',
          ),
        ),
        3 => 
        array (
          'name' => 'LogProject',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '日志Project',
            'description' => '访问日志投递的日志项目。',
            'type' => 'string',
            'required' => true,
            'example' => 'sls-setter',
          ),
        ),
        4 => 
        array (
          'name' => 'LogStore',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '日志Store',
            'description' => '访问日志投递的日志库。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
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
            'description' => '返回数据结构。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '593B0448-D13E-4C56-AC0D-FDF0******',
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
            'errorCode' => 'OperationDenied.AccessLogEnabled',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectStatus.LoadBalancer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.LoadBalancer',
            'errorMessage' => 'Authentication is failed for %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.LoadBalancer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"593B0448-D13E-4C56-AC0D-FDF0******\\"\\n}","errorExample":""},{"type":"xml","example":"<EnableLoadBalancerAccessLogResponse>\\n    <RequestId>593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3</RequestId>\\n</EnableLoadBalancerAccessLogResponse>","errorExample":""}]',
      'title' => '开启访问日志',
    ),
    'CreateHealthCheckTemplate' => 
    array (
      'summary' => '在指定地域创建健康检查模板。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '幂等参数',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。


> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B******',
          ),
        ),
        1 => 
        array (
          'name' => 'HealthCheckTemplateName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '名称',
            'description' => '健康检查模板名称。

长度为2~128个英文或中文字符，必须以大小写英文字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'HealthCheckTemplate1',
          ),
        ),
        2 => 
        array (
          'name' => 'HealthCheckConnectPort',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '端口号',
            'description' => '健康检查使用的端口。

取值范围：**0~65535**。

默认值：**0**，表示使用后端服务器的端口进行健康检查。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '80',
          ),
        ),
        3 => 
        array (
          'name' => 'HealthCheckHost',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '域名',
            'description' => '用于健康检查的域名。取值： 

- **$SERVER_IP**：后端服务器的私网IP。当指定了IP或该参数未指定时，负载均衡会使用后端服务器的私网IP当做健康检查使用的域名。

- **domain**：域名长度为1~80字符，只能包含字母、数字、半角句号（.）和短划线（-）。

> 只有`HealthCheckProtocol`设置为**HTTP**或**HTTPS**时该参数生效。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
            'type' => 'string',
            'required' => false,
            'example' => '$SERVER_IP',
          ),
        ),
        4 => 
        array (
          'name' => 'HealthCheckCodes',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '状态码',
            'description' => '健康检查正常的状态码列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '健康检查正常的HTTP状态码。


- 当**HealthCheckProtocol**取值为**HTTP**或**HTTPS**时，**HealthCheckCodes**可以选择**http\\_2xx**（默认值）、 **http\\_3xx**、**http\\_4xx**和**http\\_5xx**，多个状态码用半角逗号（,）分隔。

- 当**HealthCheckProtocol**取值为**gRPC**时，**HealthCheckCodes**状态码范围：**0~99**，默认值：**0**。支持范围输入，最多支持20个范围值，多个范围值使用半角逗号（,）隔开。

> 只有**HealthCheckProtocol**为**HTTP**或**HTTPS**或**gRPC**时才有该参数。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
              'type' => 'string',
              'required' => false,
              'example' => 'http_2xx',
            ),
            'required' => false,
            'example' => '5',
          ),
        ),
        5 => 
        array (
          'name' => 'HealthCheckInterval',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '时间间隔',
            'description' => '健康检查的时间间隔。

取值范围：**1~50**秒。

默认值：**2**秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        6 => 
        array (
          'name' => 'HealthCheckTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '超时时间',
            'description' => '接收来自运行状况检查的响应需要等待的时间。如果后端服务器在指定的时间内没有正确响应，则判定为健康检查失败。

取值范围：**1~300**秒。

默认值：**5**秒。


> 如果`HealthCHeckTimeout`的值小于`HealthCheckInterval`的值，则`HealthCHeckTimeout`无效，超时时间为`HealthCheckInterval`的值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
          ),
        ),
        7 => 
        array (
          'name' => 'HealthCheckPath',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'uri',
            'description' => '用于健康检查的URL。

长度限制为1~80，支持使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）和and（&）以及扩展字符集`_;~!（)*[]@$^:\',+`。URL必须以正斜线（/）开头。

> 只有`HealthCheckProtocol`为**HTTP**或**HTTPS**时才有该参数。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
            'type' => 'string',
            'required' => false,
            'example' => '/test/index.html',
          ),
        ),
        8 => 
        array (
          'name' => 'HealthCheckMethod',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '方法',
            'description' => '健康检查方法。取值：

- **HEAD**（默认值）：HTTP和HTTPS监听健康检查默认采用HEAD方法。

- **POST**：gRPC监听健康检查默认采用POST方法。

- **GET**：如果响应报文长度超过8KB，会被截断，但不会影响健康检查结果的判定。

> 只有**HealthCheckProtocol**为**HTTP**或**HTTPS**或**gRPC**时才有该参数。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
            'type' => 'string',
            'required' => false,
            'example' => 'HEAD',
          ),
        ),
        9 => 
        array (
          'name' => 'HealthCheckProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '协议',
            'description' => '健康检查采用的协议。取值：

- **HTTP**（默认值）：通过发送HEAD或GET请求模拟浏览器的访问行为来检查服务器应用是否健康。

- **HTTPS**：通过发送HEAD或GET请求模拟浏览器的访问行为来检查服务器应用是否健康。（数据加密，相比HTTP更安全。）

- **TCP**：通过发送SYN握手报文来检测服务器端口是否存活。

- **gRPC**：通过发送POST或GET请求来检查服务器应用是否健康。

> HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。',
            'type' => 'string',
            'required' => false,
            'example' => 'HTTP',
          ),
        ),
        10 => 
        array (
          'name' => 'HealthCheckHttpVersion',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '版本',
            'description' => '健康检查HTTP协议版本。

取值：**HTTP 1.0**或**HTTP 1.1**。

默认值：**HTTP 1.1**。

> 只有`HealthCheckProtocol`为**HTTP**或**HTTPS**时才有该参数。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
            'type' => 'string',
            'required' => false,
            'example' => 'HTTP 1.0',
          ),
        ),
        11 => 
        array (
          'name' => 'HealthyThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '健康阈值',
            'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**失败**判定为**成功**。

取值范围：**2~10**。

默认值：**3**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '4',
          ),
        ),
        12 => 
        array (
          'name' => 'UnhealthyThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '不健康阈值',
            'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**成功**判定为**失败**。

取值范围：**2~10**。

默认值：**3**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '4',
          ),
        ),
        13 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'dryRun',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会创建资源。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回**http_2xx**状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        14 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签结构。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'env',
                ),
                'Value' => 
                array (
                  'description' => '标签值。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'product',
                ),
              ),
              'required' => false,
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
            'description' => '健康检查模板。',
            'type' => 'object',
            'properties' => 
            array (
              'HealthCheckTemplateId' => 
              array (
                'title' => '健康检查模板ID',
                'description' => '健康检查模板ID。',
                'type' => 'string',
                'example' => 'hct-pno8sisi******',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
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
            'errorCode' => 'QuotaExceeded.HealthCheckTemplatesNum',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.HealthCheckTemplate',
            'errorMessage' => 'Authentication has failed for HealthCheckTemplate.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HealthCheckTemplateId\\": \\"hct-pno8sisi******\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34******\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateHealthCheckTemplateResponse>\\n    <HealthCheckTemplateId>hct-1224334</HealthCheckTemplateId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n</CreateHealthCheckTemplateResponse>","errorExample":""}]',
      'title' => '创建健康检查模板',
    ),
    'GetHealthCheckTemplateAttribute' => 
    array (
      'summary' => '查询指定健康检查模板详细信息。',
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
          'name' => 'HealthCheckTemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '健康检查模板Id',
            'description' => '健康检查模板ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hct-x4jazoyi6tvsq9****',
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
              'HealthCheckConnectPort' => 
              array (
                'title' => '端口',
                'description' => '健康检查使用的端口。

取值范围： **0**~**65535**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '80',
              ),
              'HealthCheckHost' => 
              array (
                'title' => '域名',
                'description' => '用于健康检查的域名。取值： 

- **$SERVER_IP**：后端服务器的私网IP。当指定了IP或该参数未指定时，负载均衡会使用后端服务器的私网IP当做健康检查使用的域名。

- **domain**：域名长度为1~80字符，只能包含字母、数字、半角句号（.）和短划线（-）。

> 只有`HealthCheckProtocol`设置为**HTTP**或**HTTPS**时该参数生效。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
                'type' => 'string',
                'example' => '$SERVER_IP',
              ),
              'HealthCheckCodes' => 
              array (
                'title' => '状态码',
                'description' => '健康检查正常的状态码列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '健康检查正常的HTTP状态码。

- 当**HealthCheckProtocol**取值为**HTTP**或**HTTPS**时，**HealthCheckCodes**可以选择**http_2xx**（默认值）、 **http_3xx**、**http_4xx**和**http_5xx**，多个状态码用半角逗号（,）分隔。

- 当**HealthCheckProtocol**取值为**gRPC**时，**HealthCheckCodes**状态码范围：**0~99**，默认值：**0**。支持范围输入，最多支持20个范围值，多个范围值使用半角逗号（,）隔开。


> 只有**HealthCheckProtocol**为**HTTP**或**HTTPS**或**gRPC**时该参数生效。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
                  'type' => 'string',
                  'example' => 'http_2xx',
                ),
              ),
              'HealthCheckHttpVersion' => 
              array (
                'title' => '版本',
                'description' => '健康检查HTTP协议版本。

取值：**HTTP1.0**或**HTTP1.1**。

> 只有`HealthCheckProtocol`为**HTTP**或**HTTPS**时该参数生效。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
                'type' => 'string',
                'example' => 'HTTP1.0',
              ),
              'HealthCheckTemplateId' => 
              array (
                'title' => '健康检查模板Id',
                'description' => '健康检查模板ID。',
                'type' => 'string',
                'example' => 'hct-x4jazoyi6tvsq9****',
              ),
              'HealthCheckInterval' => 
              array (
                'title' => '间隔时间',
                'description' => '健康检查的时间间隔。单位：秒。取值范围：**1~50**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'HealthCheckMethod' => 
              array (
                'title' => '方法',
                'description' => '健康检查方法。取值：

- **HEAD**（默认值）：HTTP和HTTPS监听健康检查默认采用HEAD方法。

- **GET**：如果响应报文长度超过8K，会被截断，但不会影响健康检查结果的判定。

- **POST**：gRPC监听健康检查默认采用POST方法。


> 只有**HealthCheckProtocol**为**HTTP**或**HTTPS**或**gRPC**时该参数生效。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
                'type' => 'string',
                'example' => 'GET',
              ),
              'HealthCheckPath' => 
              array (
                'title' => 'uri',
                'description' => '用于健康检查的URL。

长度限制为1~80，只能使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）、and（&）这些字符以及扩展字符集`_;~!（)*[]@$^:\',+`。
URL必须以正斜线（/）开头。

> 只有**HealthCheckProtocol**为**HTTP**或**HTTPS**或**gRPC**时该参数生效。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
                'type' => 'string',
                'example' => '/test/index.html',
              ),
              'HealthCheckProtocol' => 
              array (
                'title' => '协议',
                'description' => '健康检查采用的协议。取值：

- **HTTP**（默认值）：通过发送HEAD或GET请求模拟浏览器的访问行为来检查服务器应用是否健康。

- **HTTPS**：通过发送HEAD或GET请求模拟浏览器的访问行为来检查服务器应用是否健康。（数据加密，相比HTTP更安全。）

- **TCP**：通过发送SYN握手报文来检测服务器端口是否存活。

- **gRPC**：通过发送POST或GET请求来检查服务器应用是否健康。

> HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。',
                'type' => 'string',
                'example' => 'HTTP',
              ),
              'HealthCheckTemplateName' => 
              array (
                'title' => '名称',
                'description' => '健康检查模板名称。

长度为2~128个英文或中文字符，必须以大小字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。
',
                'type' => 'string',
                'example' => 'HealthCheckTemplate1',
              ),
              'HealthCheckTimeout' => 
              array (
                'title' => '超时时间',
                'description' => '接收来自运行状况检查的响应需要等待的时间。如果后端服务器在指定的时间内没有正确响应，则判定为健康检查失败。单位：秒。

取值范围：**1**~**300**。

> 如果`HealthCHeckTimeout`的值小于`HealthCheckInterval`的值，则`HealthCHeckTimeout`无效，超时时间为`HealthCheckInterval`的值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'HealthyThreshold' => 
              array (
                'title' => '健康阈值',
                'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**失败**判定为**成功**。

取值范围：**2**~**10**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DB1AFC33-DAE8-528E-AA4D-4A6A******',
              ),
              'UnhealthyThreshold' => 
              array (
                'title' => '不健康阈值',
                'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**成功**判定为**失败**。

取值范围：**2**~**10**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'Tags' => 
              array (
                'description' => '标签。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签结构。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '标签键。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                      'type' => 'string',
                      'example' => 'env',
                    ),
                    'Value' => 
                    array (
                      'description' => '标签值。最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                      'type' => 'string',
                      'example' => 'product',
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
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.HealthCheckTemplate',
            'errorMessage' => 'Authentication has failed for HealthCheckTemplate.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.HealthCheckTemplate',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HealthCheckConnectPort\\": 80,\\n  \\"HealthCheckHost\\": \\"$SERVER_IP\\",\\n  \\"HealthCheckCodes\\": [\\n    \\"http_2xx\\"\\n  ],\\n  \\"HealthCheckHttpVersion\\": \\"HTTP1.0\\",\\n  \\"HealthCheckTemplateId\\": \\"hct-x4jazoyi6tvsq9****\\",\\n  \\"HealthCheckInterval\\": 3,\\n  \\"HealthCheckMethod\\": \\"GET\\",\\n  \\"HealthCheckPath\\": \\"/test/index.html\\",\\n  \\"HealthCheckProtocol\\": \\"HTTP\\",\\n  \\"HealthCheckTemplateName\\": \\"HealthCheckTemplate1\\",\\n  \\"HealthCheckTimeout\\": 200,\\n  \\"HealthyThreshold\\": 5,\\n  \\"RequestId\\": \\"DB1AFC33-DAE8-528E-AA4D-4A6A******\\",\\n  \\"UnhealthyThreshold\\": 5,\\n  \\"Tags\\": [\\n    {\\n      \\"Key\\": \\"env\\",\\n      \\"Value\\": \\"product\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetHealthCheckTemplateAttributeResponse>\\n    <HealthCheckConnectPort>80</HealthCheckConnectPort>\\n    <HealthCheckHost>$SERVER_IP</HealthCheckHost>\\n    <HealthCheckCodes>http_2xx,http_3xx</HealthCheckCodes>\\n    <HealthCheckHttpVersion>HTTP1.0</HealthCheckHttpVersion>\\n    <HealthCheckTemplateId>hct-x4jazoyi6tvsq9****</HealthCheckTemplateId>\\n    <HealthCheckInterval>3</HealthCheckInterval>\\n    <HealthCheckMethod>GET</HealthCheckMethod>\\n    <HealthCheckPath>/test/index.html</HealthCheckPath>\\n    <HealthCheckProtocol>HTTP</HealthCheckProtocol>\\n    <HealthCheckTemplateName>HealthCheckTemplate1</HealthCheckTemplateName>\\n    <HealthCheckTimeout>200</HealthCheckTimeout>\\n    <HealthyThreshold>5</HealthyThreshold>\\n    <RequestId>DB1AFC33-DAE8-528E-AA4D-4A6AABE71945</RequestId>\\n    <UnhealthyThreshold>5</UnhealthyThreshold>\\n</GetHealthCheckTemplateAttributeResponse>","errorExample":""}]',
      'title' => '查询健康检查模板详细信息',
    ),
    'DeleteHealthCheckTemplates' => 
    array (
      'summary' => '批量删除指定的健康检查模板。',
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
          'name' => 'HealthCheckTemplateIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '健康检查模板Id列表',
            'description' => '健康检查模板ID',
            'type' => 'array',
            'items' => 
            array (
              'description' => '删除指定的健康检查模板ID列表，列表最多10条。',
              'type' => 'string',
              'required' => false,
              'example' => 'hct-bp1qjwo61pqz3ahltv****',
            ),
            'required' => true,
            'example' => 'acl-123',
            'maxItems' => 10,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等token',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。


> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B3******',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'dryRun',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会创建资源。检查项包括是否填写了必需参数、请求格式和业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回**http_2xx**状态码并直接进行操作。',
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
            'description' => '删除健康检查模板。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
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
            'errorCode' => 'IncorrectStatus.HealthCheckTemplate',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF3******\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteHealthCheckTemplatesResponse>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n</DeleteHealthCheckTemplatesResponse>","errorExample":""}]',
      'title' => '批量删除健康检查模板',
    ),
    'UpdateHealthCheckTemplateAttribute' => 
    array (
      'summary' => '更新健康检查模板的属性，如名称、健康检查协议等。',
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
        1 => 
        array (
          'PrivateKey' => 
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
          'name' => 'ClientToken',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '幂等参数',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B******',
          ),
        ),
        1 => 
        array (
          'name' => 'HealthCheckTemplateName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '名称',
            'description' => '健康检查模板名称。

长度为2~128个英文或中文字符，必须以大小字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。
',
            'type' => 'string',
            'required' => false,
            'example' => 'HealthCheckTemplate1',
          ),
        ),
        2 => 
        array (
          'name' => 'HealthCheckConnectPort',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '端口号',
            'description' => '健康检查使用的端口。取值范围： **0~65535**。
默认值：**0**，表示使用后端服务器的端口进行健康检查。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '80',
          ),
        ),
        3 => 
        array (
          'name' => 'HealthCheckHost',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '域名',
            'description' => '用于健康检查的域名。取值： 

- **$SERVER_IP**（默认值）：后端服务器的私网IP。当指定了IP或该参数未指定时，负载均衡会使用后端服务器的私网IP当做健康检查使用的域名。

- **domain**：域名长度为1~80字符，只能包含字母、数字、半角句号点（.）和短划线（-）。

> 只有`HealthCheckProtocol`设置为**HTTP**或**HTTPS**时才有该参数。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
            'type' => 'string',
            'required' => false,
            'example' => '$SERVER_IP',
          ),
        ),
        4 => 
        array (
          'name' => 'HealthCheckCodes',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '状态码',
            'description' => '健康检查正常的状态码列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '健康检查正常的HTTP状态码。

- 当**HealthCheckProtocol**取值为**HTTP**或**HTTPS**时，**HealthCheckCodes**可以选择**http_2xx**（默认值）、 **http_3xx**、**http_4xx**和**http_5xx**，多个状态码用半角逗号（,）分隔。

- 当**HealthCheckProtocol**取值为**gRPC**时，**HealthCheckCodes**状态码范围：**0~99**，默认值：**0**。支持范围输入，最多支持20个范围值，多个范围值使用半角逗号（,）隔开。

> 只有**HealthCheckProtocol**为**HTTP**或**HTTPS**或**gRPC**时才有该参数。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
              'type' => 'string',
              'required' => false,
              'example' => 'http_2xx',
            ),
            'required' => false,
            'example' => '5',
          ),
        ),
        5 => 
        array (
          'name' => 'HealthCheckInterval',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '时间间隔',
            'description' => '健康检查的时间间隔。单位：秒。取值范围：**1~50**。默认值：**2**秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
          ),
        ),
        6 => 
        array (
          'name' => 'HealthCheckTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '超时时间',
            'description' => '接收来自运行状况检查的响应需要等待的时间。如果后端服务器在指定的时间内没有正确响应，则判定为健康检查失败。

单位：秒。取值范围：**1~300**。默认值：**5**秒。

> 如果`HealthCHeckTimeout`的值小于`HealthCheckInterval`的值，则`HealthCHeckTimeout`无效，超时时间为`HealthCheckInterval`的值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '300',
            'minimum' => '1',
            'example' => '3',
          ),
        ),
        7 => 
        array (
          'name' => 'HealthCheckPath',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'uri',
            'description' => '用于健康检查的URL。

长度限制为1~80，只能使用字母、数字和短划线（-）、正斜线（/）、半角句号点（.）、百分号（%）、半角问号（?）、井号（#）、and（&）这些字符以及扩展字符集`_;~!（)*[]@$^:\',+`。

URL必须以正斜线（/）开头。

> 只有**HealthCheckProtocol**为**HTTP**或**HTTPS**或**gRPC**时才有该参数。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
            'type' => 'string',
            'required' => false,
            'example' => '/test/index.html',
          ),
        ),
        8 => 
        array (
          'name' => 'HealthCheckMethod',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '方法',
            'description' => '健康检查方法。取值：

- **HEAD**（默认值）：HTTP和HTTPS监听健康检查默认采用HEAD方法。

- **GET**：如果响应报文长度超过8K，会被截断，但不会影响健康检查结果的判定。

- **POST**：gRPC监听健康检查默认采用POST方法。


> 只有**HealthCheckProtocol**为**HTTP**或**HTTPS**或**gRPC**时才有该参数。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
            'type' => 'string',
            'required' => false,
            'example' => 'HEAD',
          ),
        ),
        9 => 
        array (
          'name' => 'HealthCheckProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '协议',
            'description' => '健康检查采用的协议。取值：

- **HTTP**（默认值）：通过发送HEAD或GET请求模拟浏览器的访问行为来检查服务器应用是否健康。

- **HTTPS**：通过发送HEAD或GET请求模拟浏览器的访问行为来检查服务器应用是否健康。（数据加密，相比HTTP更安全。）

- **TCP**：通过发送SYN握手报文来检测服务器端口是否存活。

- **gRPC**：通过发送POST或GET请求来检查服务器应用是否健康。

> HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。',
            'type' => 'string',
            'required' => false,
            'example' => 'HTTP',
          ),
        ),
        10 => 
        array (
          'name' => 'HealthCheckHttpVersion',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '版本',
            'description' => '健康检查HTTP协议版本。

取值：**HTTP1.0**或**HTTP1.1**。

默认值：**HTTP1.1**。

> 只有`HealthCheckProtocol`为**HTTP**或**HTTPS**时才有该参数。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
            'type' => 'string',
            'required' => false,
            'example' => 'HTTP1.0',
          ),
        ),
        11 => 
        array (
          'name' => 'HealthyThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '健康阈值',
            'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**失败**判定为**成功**。

取值范围：**2~10**。

默认值：**3**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '4',
          ),
        ),
        12 => 
        array (
          'name' => 'UnhealthyThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '不健康阈值',
            'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**成功**判定为**失败**。

取值范围：**2~10**。

默认值：**3**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '4',
          ),
        ),
        13 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'dryRun',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会修改资源。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回**http_2xx**状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        14 => 
        array (
          'name' => 'HealthCheckTemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '健康检查模板ID',
            'description' => '模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'hct-bp1qjwo61******',
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
            'description' => '更新健康检查模板属性。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
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
            'errorCode' => 'IncorrectStatus.HealthCheckTemplate',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.HealthCheckTemplate',
            'errorMessage' => 'Authentication is failed for %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.HealthCheckTemplate',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF3******\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateHealthCheckTemplateAttributeResponse>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n</UpdateHealthCheckTemplateAttributeResponse>","errorExample":""}]',
      'title' => '更新健康检查模板的属性',
    ),
    'ListHealthCheckTemplates' => 
    array (
      'summary' => '查询指定地域的健康检查模板。',
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
            'title' => '分页查询标识',
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
            'title' => '查询数量',
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '50',
            'default' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'HealthCheckTemplateIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '健康检查模板ID列表',
            'description' => '健康检查模版ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '健康检查模版ID。最多支持20个健康检查模板ID。如果传入则根据模板ID过滤。',
              'type' => 'string',
              'required' => false,
              'example' => 'hct-bp1qjwo61pqz3ahltv****',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        3 => 
        array (
          'name' => 'HealthCheckTemplateNames',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '健康检查模板名称列表',
            'description' => '健康检查模板名称列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '健康检查模版名称。最多支持10个健康检查模板名称。如果传入则根据模板名称过滤。',
              'type' => 'string',
              'required' => false,
              'example' => 'test',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        4 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签结构。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'env',
                ),
                'Value' => 
                array (
                  'description' => '标签值。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'product',
                ),
              ),
              'required' => false,
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
            'description' => '健康检查模板信息。',
            'type' => 'object',
            'properties' => 
            array (
              'HealthCheckTemplates' => 
              array (
                'title' => '健康检查模板',
                'description' => '健康检查模板列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '健康检查模板结构。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'HealthCheckConnectPort' => 
                    array (
                      'title' => '端口',
                      'description' => '健康检查使用的端口。

取值：** 0~65535**。

默认值：**0**，表示使用后端服务器的端口进行健康检查。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '80',
                    ),
                    'HealthCheckHost' => 
                    array (
                      'title' => '域名',
                      'description' => '用于健康检查的域名，取值：

- **$SERVER_IP**（默认值）： 后端服务器的私网IP。当指定了IP或该参数未指定时，负载均衡会使用各后端服务器的私网IP当做健康检查使用的域名。

- **domain**：域名长度为1~80字符，只能包含字母、数字、半角句号（.）和短划线（-）。

> 只有`HealthCheckProtocol`为**HTTP**或**HTTPS**时才有效。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
                      'type' => 'string',
                      'example' => '$SERVER_IP',
                    ),
                    'HealthCheckCodes' => 
                    array (
                      'title' => '状态码',
                      'description' => '健康检查正常的状态码列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '健康检查正常的HTTP状态码。

- 当**HealthCheckProtocol**取值为**HTTP**或**HTTPS**时，**HealthCheckCodes**可以选择**http_2xx**（默认值）、 **http_3xx**、**http_4xx**和**http_5xx**，多个状态码用半角逗号（,）分隔。

- 当**HealthCheckProtocol**取值为**gRPC**时，**HealthCheckCodes**状态码范围：**0~99**，默认值：**0**。支持范围输入，最多支持20个范围值，多个范围值使用半角逗号（,）隔开。

> 只有**HealthCheckProtocol**为**HTTP**或**HTTPS**或**gRPC**时才有该参数。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
                        'type' => 'string',
                        'example' => 'http_2xx',
                      ),
                    ),
                    'HealthCheckHttpVersion' => 
                    array (
                      'title' => '版本',
                      'description' => '健康检查HTTP协议版本。

取值：**HTTP 1.0**或**HTTP 1.1**。

默认值：**HTTP 1.1**。

> 只有`HealthCheckProtocol`为**HTTP**或**HTTPS**时才有效。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
                      'type' => 'string',
                      'example' => 'HTTP 1.0',
                    ),
                    'HealthCheckInterval' => 
                    array (
                      'title' => '间隔时间',
                      'description' => '健康检查的时间间隔。单位：秒。取值范围：**1~50**。默认值：**2**秒。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '5',
                    ),
                    'HealthCheckMethod' => 
                    array (
                      'title' => '方法',
                      'description' => '健康检查方法。取值：

- **HEAD**（默认值）：HTTP和HTTPS监听健康检查默认采用HEAD方法。

- **GET**：如果响应报文长度超过8K，会被截断，但不会影响健康检查结果的判定。

- **POST**：gRPC监听健康检查默认采用POST方法。

> 只有**HealthCheckProtocol**为**HTTP** 或**HTTPS**或**gRPC**时才有效。（HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。）',
                      'type' => 'string',
                      'example' => 'HEAD',
                    ),
                    'HealthCheckPath' => 
                    array (
                      'title' => 'uri',
                      'description' => '用于健康检查的URL。

长度限制为1~80，只能使用字母、数字和短划线（-）、正斜线（/）、半角句号（.）、百分号（%）、半角问号（?）、井号（#）、and（&）这些字符以及扩展字符集`_;~!（)*[]@$^:\',+`。URL必须以正斜线（/）开头。',
                      'type' => 'string',
                      'example' => '/test/index.html',
                    ),
                    'HealthCheckProtocol' => 
                    array (
                      'title' => '协议',
                      'description' => '健康检查采用的协议。取值：

- **HTTP**（默认值）：通过发送HEAD或GET请求模拟浏览器的访问行为来检查服务器应用是否健康。

- **HTTPS**：通过发送HEAD或GET请求模拟浏览器的访问行为来检查服务器应用是否健康。（数据加密，相比HTTP更安全。）

- **TCP**：通过发送SYN握手报文来检测服务器端口是否存活。

- **gRPC**：通过发送POST或GET请求来检查服务器应用是否健康。

> HTTPS协议默认不开放，如需使用，请登录负载均衡控制台的配额管理页面，在**应用型负载均衡ALB**页签申请权益配额。',
                      'type' => 'string',
                      'example' => 'HTTP',
                    ),
                    'HealthCheckTemplateId' => 
                    array (
                      'title' => '健康检查模板Id',
                      'description' => '健康检查模板ID。',
                      'type' => 'string',
                      'example' => 'hct-bp1qjwo61pqz3ahltv****',
                    ),
                    'HealthCheckTemplateName' => 
                    array (
                      'title' => '名称',
                      'description' => '健康检查模板名称。

长度为2~128个英文或中文字符，必须以大小字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                      'type' => 'string',
                      'example' => 'HealthCheckTemplate1',
                    ),
                    'HealthCheckTimeout' => 
                    array (
                      'title' => '超时时间',
                      'description' => '接收来自运行状况检查的响应需要等待的时间。如果后端ECS在指定的时间内没有正确响应，则判定为健康检查失败。

取值：**1~300**秒。

默认值：**5**秒。

> 如果**HealthCHeckTimeout**的值小于**HealthCheckInterval**的值，则**HealthCHeckTimeout**无效，超时时间为**HealthCheckInterval**的值。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'HealthyThreshold' => 
                    array (
                      'title' => '健康阈值',
                      'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**失败**判定为**成功**。

取值：**2~10**。

默认值：**3**。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '4',
                    ),
                    'UnhealthyThreshold' => 
                    array (
                      'title' => '不健康阈值',
                      'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**成功**判定为**失败**。

取值：**2~10**。

默认值：**3**。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '4',
                    ),
                    'Tags' => 
                    array (
                      'description' => '标签。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签结构。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '标签键。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                            'type' => 'string',
                            'example' => 'env',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签值。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                            'type' => 'string',
                            'example' => 'product',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'MaxResults' => 
              array (
                'title' => '本次查询返回记录数量',
                'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'NextToken' => 
              array (
                'title' => '分页查询标识',
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF3******',
              ),
              'TotalCount' => 
              array (
                'title' => '总记录数',
                'description' => '本次请求条件下返回的总数据记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1000',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.HealthCheckTemplate',
            'errorMessage' => 'Authentication has failed for HealthCheckTemplate.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HealthCheckTemplates\\": [\\n    {\\n      \\"HealthCheckConnectPort\\": 80,\\n      \\"HealthCheckHost\\": \\"$SERVER_IP\\",\\n      \\"HealthCheckCodes\\": [\\n        \\"http_2xx\\"\\n      ],\\n      \\"HealthCheckHttpVersion\\": \\"HTTP 1.0\\",\\n      \\"HealthCheckInterval\\": 5,\\n      \\"HealthCheckMethod\\": \\"HEAD\\",\\n      \\"HealthCheckPath\\": \\"/test/index.html\\",\\n      \\"HealthCheckProtocol\\": \\"HTTP\\",\\n      \\"HealthCheckTemplateId\\": \\"hct-bp1qjwo61pqz3ahltv****\\",\\n      \\"HealthCheckTemplateName\\": \\"HealthCheckTemplate1\\",\\n      \\"HealthCheckTimeout\\": 3,\\n      \\"HealthyThreshold\\": 4,\\n      \\"UnhealthyThreshold\\": 4,\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"env\\",\\n          \\"Value\\": \\"product\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"MaxResults\\": 50,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF3******\\",\\n  \\"TotalCount\\": 1000\\n}","errorExample":""},{"type":"xml","example":"<ListHealthCheckTemplatesResponse>\\n    <HealthCheckTemplates>\\n        <HealthCheckConnectPort>80</HealthCheckConnectPort>\\n        <HealthCheckHost>$_ip</HealthCheckHost>\\n        <HealthCheckCodes>http_2xx,http_3xx</HealthCheckCodes>\\n        <HealthCheckHttpVersion>HTTP 1.0</HealthCheckHttpVersion>\\n        <HealthCheckInterval>5</HealthCheckInterval>\\n        <HealthCheckMethod>HEAD</HealthCheckMethod>\\n        <HealthCheckPath>/test/index.html</HealthCheckPath>\\n        <HealthCheckProtocol>HTTP</HealthCheckProtocol>\\n        <HealthCheckTemplateId>hct-bp1qjwo61pqz3ahltv****</HealthCheckTemplateId>\\n        <HealthCheckTemplateName>HealthCheckTemplate1</HealthCheckTemplateName>\\n        <HealthCheckTimeout>3</HealthCheckTimeout>\\n        <HealthyThreshold>4</HealthyThreshold>\\n        <UnhealthyThreshold>4</UnhealthyThreshold>\\n    </HealthCheckTemplates>\\n    <MaxResults>50</MaxResults>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <TotalCount>1000</TotalCount>\\n</ListHealthCheckTemplatesResponse>","errorExample":""}]',
      'title' => '查询健康检查模板',
    ),
    'ApplyHealthCheckTemplateToServerGroup' => 
    array (
      'summary' => '将健康检查配置模板应用到后端服务器组，从而将后端服务器组的健康检查配置修改为模板值。',
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
          'name' => 'HealthCheckTemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '健康检查模板Id',
            'description' => '模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'hct-bp1qjwo61pqz3ahltv****',
          ),
        ),
        1 => 
        array (
          'name' => 'ServerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '服务器组Id',
            'description' => '后端服务器组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sgp-n80wyad08u0tox****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等Token',
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665******',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'dryRun',
            'description' => '是否只预检此次请求。取值：

-  **true**：发送检查请求，不会创建资源。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
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
            'description' => '向后端服务器组应用健康检查模板。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF******',
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
            'errorCode' => 'IncorrectStatus.HealthCheckTemplate',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectStatus.ServerGroup',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.ServerGroup',
            'errorMessage' => 'Authentication has failed for ServerGroup.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.HealthCheckTemplate',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.ServerGroup',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF******\\"\\n}","errorExample":""},{"type":"xml","example":"<ApplyHealthCheckTemplateToServerGroupResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n</ApplyHealthCheckTemplateToServerGroupResponse>","errorExample":""}]',
      'title' => '应用健康检查模板到服务组',
    ),
    'CreateSecurityPolicy' => 
    array (
      'summary' => '在指定地域创建自定义安全策略。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。

> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '593B0448-D13E-4C56-AC0D-FDF0F******',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会创建资源。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP_2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'TLSVersions',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => 'tls版本',
            'description' => '支持的TLS协议版本列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '支持的TLS协议版本，取值：**TLSv1.0**、**TLSv1.1**、**TLSv1.2**和**TLSv1.3**。',
              'type' => 'string',
              'required' => true,
              'example' => 'TLSv1.0',
            ),
            'required' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源组id',
            'description' => '资源组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        4 => 
        array (
          'name' => 'SecurityPolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '安全策略名称',
            'description' => '安全策略名称。

长度为2~128个英文或中文字符，必须以大小字母或中文开头，可包含数字、半角句点（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-secrity',
          ),
        ),
        5 => 
        array (
          'name' => 'Ciphers',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '加密套件',
            'description' => '支持的加密套件列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '支持的加密套件，具体依赖**TLSVersions**的取值。

Cipher只要被任何一个传入的**TLSVersions**支持即可。

> 选择了TLSv1.3，那么Cipher列表必须包含TLSv1.3支持的Cipher。

- TLSv1.0和TLSv1.1 支持：
    -   ECDHE-ECDSA-AES128-SHA
    -   ECDHE-ECDSA-AES256-SHA
    -   ECDHE-RSA-AES128-SHA
    -   ECDHE-RSA-AES256-SHA
    -   AES128-SHA
    -   AES256-SHA
   -   DES-CBC3-SHA

- TLSv1.2支持
    -   ECDHE-ECDSA-AES128-SHA
    -   ECDHE-ECDSA-AES256-SHA
    -   ECDHE-RSA-AES128-SHA
    -   ECDHE-RSA-AES256-SHA
    -   AES128-SHA
    -   AES256-SHA
    -   DES-CBC3-SHA
    -   ECDHE-ECDSA-AES128-GCM-SHA256
    -   ECDHE-ECDSA-AES256-GCM-SHA384
    -   ECDHE-ECDSA-AES128-SHA256
    -   ECDHE-ECDSA-AES256-SHA384
    -   ECDHE-RSA-AES128-GCM-SHA256
    -   ECDHE-RSA-AES256-GCM-SHA384
    -   ECDHE-RSA-AES128-SHA256
    -   ECDHE-RSA-AES256-SHA384 
    -   AES128-GCM-SHA256
    -   AES256-GCM-SHA384
    -   AES128-SHA256
    -   AES256-SHA256

- TLSv1.3支持： 
    - TLS_AES_128_GCM_SHA256
    - TLS_AES_256_GCM_SHA384
    - TLS_CHACHA20_POLY1305_SHA256
    - TLS_AES_128_CCM_SHA256
    - TLS_AES_128_CCM_8_SHA256',
              'type' => 'string',
              'required' => true,
              'example' => ' ECDHE-ECDSA-AES128-SHA',
            ),
            'required' => true,
            'minItems' => 1,
          ),
        ),
        6 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签结构。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'env',
                ),
                'Value' => 
                array (
                  'description' => '标签值。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'product',
                ),
              ),
              'required' => false,
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
            'description' => '返回数据结构',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '593B0448-D13E-4C56-AC0D-FDF0******',
              ),
              'SecurityPolicyId' => 
              array (
                'title' => '安全策略id',
                'description' => '安全策略ID',
                'type' => 'string',
                'example' => 'sp-9cdjz6o8ha70******',
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
            'errorCode' => 'QuotaExceeded.SecurityPoliciesNum',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"593B0448-D13E-4C56-AC0D-FDF0******\\",\\n  \\"SecurityPolicyId\\": \\"sp-9cdjz6o8ha70******\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateSecurityPolicyResponse>\\n    <RequestId>593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3</RequestId>\\n    <SecurityPolicyId>scp-bp1bpn0kn9****</SecurityPolicyId>\\n</CreateSecurityPolicyResponse>","errorExample":""}]',
      'title' => '创建自定义安全策略',
    ),
    'DeleteSecurityPolicy' => 
    array (
      'summary' => '删除指定的自定义安全策略。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。

> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '593B0448-D13E-4C56-AC0D-FDF0******',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会创建资源。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'SecurityPolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '安全策略Id',
            'description' => '安全策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sp-n0kn923****',
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
            'description' => '返回数据结构',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '593B0448-D13E-4C56-AC0D-FDF0F******',
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
            'errorCode' => 'IncorrectStatus.SecurityPolicy',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceInUse.SecurityPolicy',
            'errorMessage' => 'The specified resource %s is in use.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.SecurityPolicy',
            'errorMessage' => 'Authentication has failed for SecurityPolicy.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.SecurityPolicy',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"593B0448-D13E-4C56-AC0D-FDF0F******\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteSecurityPolicyResponse>\\n    <RequestId>593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3</RequestId>\\n</DeleteSecurityPolicyResponse>","errorExample":""}]',
      'title' => '删除安全策略',
    ),
    'UpdateSecurityPolicyAttribute' => 
    array (
      'summary' => '更新安全策略属性，如安全协议版本、加密套件。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '593B0448-D13E-4C56-AC0D-FDF0F******',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会更新安全策略属性。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'SecurityPolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '安全策略id',
            'description' => '安全策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sp-n0kn923****',
          ),
        ),
        3 => 
        array (
          'name' => 'TLSVersions',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => 'TLS版本',
            'description' => '支持的TLS协议版本列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '支持的TLS协议版本，取值：**TLSv1.0**、**TLSv1.1**、**TLSv1.2**和**TLSv1.3**。
最多支持添加4个TLS协议版本。',
              'type' => 'string',
              'required' => false,
              'example' => 'TLSv1.0',
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'Ciphers',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '加密套件',
            'description' => '支持的加密套件列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '支持的加密套件，具体依赖**TLSVersions**的取值。
最多支持添加32个加密套件。

Cipher只要被任何一个传入的**TLSVersions**支持即可。

> 选择了TLSv1.3那么Cipher列表必须包含TLSv1.3支持的Cipher。

- TLSv1.0和TLSv1.1 支持：
    -   ECDHE-ECDSA-AES128-SHA
    -   ECDHE-ECDSA-AES256-SHA
    -   ECDHE-RSA-AES128-SHA
    -   ECDHE-RSA-AES256-SHA
    -   AES128-SHA
    -   AES256-SHA
   -   DES-CBC3-SHA

- TLSv1.2支持
    -   ECDHE-ECDSA-AES128-SHA
    -   ECDHE-ECDSA-AES256-SHA
    -   ECDHE-RSA-AES128-SHA
    -   ECDHE-RSA-AES256-SHA
    -   AES128-SHA
    -   AES256-SHA
    -   DES-CBC3-SHA
    -   ECDHE-ECDSA-AES128-GCM-SHA256
    -   ECDHE-ECDSA-AES256-GCM-SHA384
    -   ECDHE-ECDSA-AES128-SHA256
    -   ECDHE-ECDSA-AES256-SHA384
    -   ECDHE-RSA-AES128-GCM-SHA256
    -   ECDHE-RSA-AES256-GCM-SHA384
    -   ECDHE-RSA-AES128-SHA256
    -   ECDHE-RSA-AES256-SHA384 
    -   AES128-GCM-SHA256
    -   AES256-GCM-SHA384
    -   AES128-SHA256
    -   AES256-SHA256

- TLSv1.3支持： 
    - TLS_AES_128_GCM_SHA256
    - TLS_AES_256_GCM_SHA384
    - TLS_CHACHA20_POLY1305_SHA256
    - TLS_AES_128_CCM_SHA256
    - TLS_AES_128_CCM_8_SHA256',
              'type' => 'string',
              'required' => false,
              'example' => 'ECDHE-ECDSA-AES128-SHA',
            ),
            'required' => false,
            'minItems' => 1,
          ),
        ),
        5 => 
        array (
          'name' => 'SecurityPolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '安全策略名称',
            'description' => '安全策略名称。

长度为2~128个英文或中文字符，必须以大小字母或中文开头，可包含数字，半角句点（.），下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-secrity',
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
            'description' => '返回数据结构。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务Id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '593B0448-D13E-4C56-AC0D-FDF0******',
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
            'errorCode' => 'IncorrectStatus.SecurityPolicy',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.SecurityPolicy',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"593B0448-D13E-4C56-AC0D-FDF0******\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateSecurityPolicyAttributeResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3</RequestId>\\n</UpdateSecurityPolicyAttributeResponse>","errorExample":""}]',
      'title' => '更新安全策略属性',
      'description' => '## 使用说明
**UpdateSecurityPolicyAttribute**接口属于异步接口，即系统返回一个请求ID，但该安全策略属性尚未更新成功，系统后台的更新任务仍在进行。您可以调用[ListSecurityPolicies](~~213609~~)查询安全策略属性的更新状态：
- 当安全策略属性处于**Configuring**状态时，表示安全策略属性正在更新中。
- 当安全策略属性处于**Available**状态时，表示安全策略属性已更新完成。',
    ),
    'ListSecurityPolicies' => 
    array (
      'summary' => '查询指定地域的自定义安全策略。',
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源组ID',
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        1 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页查询标识',
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
            'title' => '查询数量',
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '50',
            'default' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'SecurityPolicyNames',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '安全策略名称',
            'description' => '安全策略名称列表，最多支持10个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '安全策略名称，查询指定名称的安全策略。最多支持10个安全策略名称。',
              'type' => 'string',
              'required' => false,
              'example' => 'test-secrity',
            ),
            'required' => false,
            'maxItems' => 10,
            'minItems' => 1,
          ),
        ),
        4 => 
        array (
          'name' => 'SecurityPolicyIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '安全策略id',
            'description' => '安全策略ID列表，最多20个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '安全策略ID，查询指定ID的安全策略。最多支持20个安全策略ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'sp-bp1bpn0kn9****',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        5 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签结构。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'env',
                ),
                'Value' => 
                array (
                  'description' => '标签值。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'product',
                ),
              ),
              'required' => false,
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
            'description' => '返回数据结构。',
            'type' => 'object',
            'properties' => 
            array (
              'MaxResults' => 
              array (
                'title' => '本次查询返回记录数量',
                'description' => '分批次查询时每次显示的条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'NextToken' => 
              array (
                'title' => '分页查询标识',
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '593B0448-D13E-4C56-AC0D-FDF0F******',
              ),
              'SecurityPolicies' => 
              array (
                'title' => '安全策略',
                'description' => '支持的安全策略列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '安全策略数据结构。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Ciphers' => 
                    array (
                      'title' => '加密套件',
                      'description' => '支持的加密算法列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '支持的加密套件，具体依赖**TLSVersions**的取值。

- TLSv1.0和TLSv1.1 支持：
    -   ECDHE-ECDSA-AES128-SHA
    -   ECDHE-ECDSA-AES256-SHA
    -   ECDHE-RSA-AES128-SHA
    -   ECDHE-RSA-AES256-SHA
    -   AES128-SHA
    -   AES256-SHA
    -   DES-CBC3-SHA

- TLSv1.2支持
    -   ECDHE-ECDSA-AES128-SHA
    -   ECDHE-ECDSA-AES256-SHA
    -   ECDHE-RSA-AES128-SHA
    -   ECDHE-RSA-AES256-SHA
    -   AES128-SHA
    -   AES256-SHA
    -   DES-CBC3-SHA
    -   ECDHE-ECDSA-AES128-GCM-SHA256
    -   ECDHE-ECDSA-AES256-GCM-SHA384
    -   ECDHE-ECDSA-AES128-SHA256
    -   ECDHE-ECDSA-AES256-SHA384
    -   ECDHE-RSA-AES128-GCM-SHA256
    -   ECDHE-RSA-AES256-GCM-SHA384
    -   ECDHE-RSA-AES128-SHA256
    -   ECDHE-RSA-AES256-SHA384 
    -   AES128-GCM-SHA256
    -   AES256-GCM-SHA384
    -   AES128-SHA256
    -   AES256-SHA256

- TLSv1.3支持： 
    - TLS_AES_128_GCM_SHA256
    - TLS_AES_256_GCM_SHA384
    - TLS_CHACHA20_POLY1305_SHA256
    - TLS_AES_128_CCM_SHA256
    - TLS_AES_128_CCM_8_SHA256',
                        'type' => 'string',
                        'example' => 'ECDHE-ECDSA-AES128-SHA',
                      ),
                    ),
                    'ResourceGroupId' => 
                    array (
                      'title' => '资源组id',
                      'description' => '资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-atstuj3rtop****',
                    ),
                    'SecurityPolicyId' => 
                    array (
                      'title' => '安全策略id',
                      'description' => '安全策略ID。',
                      'type' => 'string',
                      'example' => 'sp-9cdjz6o******',
                    ),
                    'SecurityPolicyName' => 
                    array (
                      'title' => '安全策略名称',
                      'description' => '安全策略名称。',
                      'type' => 'string',
                      'example' => 'test-secrity',
                    ),
                    'SecurityPolicyStatus' => 
                    array (
                      'title' => '状态',
                      'description' => '策略的状态，取值：

- **Configuring**：配置中。
- **Available**：正常可用。',
                      'type' => 'string',
                      'example' => 'Available',
                    ),
                    'TLSVersions' => 
                    array (
                      'title' => 'TLS策略',
                      'description' => '支持的TLS协议版本列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '支持的TLS协议版本，取值：**TLSv1.0**、**TLSv1.1**、**TLSv1.2**和**TLSv1.3**。',
                        'type' => 'string',
                        'example' => 'TLSv1.1',
                      ),
                    ),
                    'CreateTime' => 
                    array (
                      'description' => 'ACL创建时间，格式为：`YYYY-MM-DDThh:mm:ssZ`。',
                      'type' => 'string',
                      'example' => '2023-02-15T07:37:33Z',
                    ),
                    'Tags' => 
                    array (
                      'description' => '标签。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签结构。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '标签键。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                            'type' => 'string',
                            'example' => 'env',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签值。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                            'type' => 'string',
                            'example' => 'product',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'title' => '总记录数',
                'description' => '列表条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1000',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.SecurityPolicy',
            'errorMessage' => 'Authentication has failed for SecurityPolicy.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"MaxResults\\": 50,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"RequestId\\": \\"593B0448-D13E-4C56-AC0D-FDF0F******\\",\\n  \\"SecurityPolicies\\": [\\n    {\\n      \\"Ciphers\\": [\\n        \\"ECDHE-ECDSA-AES128-SHA\\"\\n      ],\\n      \\"ResourceGroupId\\": \\"rg-atstuj3rtop****\\",\\n      \\"SecurityPolicyId\\": \\"sp-9cdjz6o******\\",\\n      \\"SecurityPolicyName\\": \\"test-secrity\\",\\n      \\"SecurityPolicyStatus\\": \\"Available\\",\\n      \\"TLSVersions\\": [\\n        \\"TLSv1.1\\"\\n      ],\\n      \\"CreateTime\\": \\"2023-02-15T07:37:33Z\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"env\\",\\n          \\"Value\\": \\"product\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"TotalCount\\": 1000\\n}","errorExample":""},{"type":"xml","example":"<ListSecurityPoliciesResponse>\\n    <MaxResults>50</MaxResults>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <RequestId>593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3</RequestId>\\n    <SecurityPolicies>\\n        <Ciphers>ECDHE-ECDSA-AES128-SHA</Ciphers>\\n        <ResourceGroupId>rg-atstuj3rtop****</ResourceGroupId>\\n        <SecurityPolicyId>rg-atstuj3rtop****</SecurityPolicyId>\\n        <SecurityPolicyName>test-secrity</SecurityPolicyName>\\n        <SecurityPolicyStatus>Available</SecurityPolicyStatus>\\n        <TLSVersions>TLSv1.1</TLSVersions>\\n        <CreateTime>2023-02-15T07:37:33Z</CreateTime>\\n    </SecurityPolicies>\\n    <TotalCount>1000</TotalCount>\\n</ListSecurityPoliciesResponse>","errorExample":""}]',
      'title' => '查询自定义安全策略',
    ),
    'ListSecurityPolicyRelations' => 
    array (
      'summary' => '查询安全策略关联的监听列表。',
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
          'name' => 'SecurityPolicyIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '安全策略id',
            'description' => '安全策略实例ID列表，最多支持5个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '安全策略ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'sp-n0kn923****',
            ),
            'required' => true,
            'maxItems' => 5,
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
            'description' => '返回数据结构。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '593B0448-D13E-4C56-AC0D-FDF******',
              ),
              'SecrityPolicyRelations' => 
              array (
                'title' => '安全策略关联关系',
                'description' => '安全策略与监听的关联关系列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '安全策略与监听的关联关系。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RelatedListeners' => 
                    array (
                      'title' => '关联的监听列表',
                      'description' => '关联的监听列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '关联的监听结构。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ListenerId' => 
                          array (
                            'title' => '监听id',
                            'description' => '监听ID。',
                            'type' => 'string',
                            'example' => 'lsn-0bfuc****',
                          ),
                          'ListenerPort' => 
                          array (
                            'title' => '监听端口',
                            'description' => '监听端口。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '80',
                          ),
                          'ListenerProtocol' => 
                          array (
                            'title' => '监听协议',
                            'description' => '监听协议。',
                            'type' => 'string',
                            'example' => 'HTTPS',
                          ),
                          'LoadBalancerId' => 
                          array (
                            'title' => '实例id',
                            'description' => '应用型负载均衡实例ID。',
                            'type' => 'string',
                            'example' => 'alb-umwzbz6******',
                          ),
                        ),
                      ),
                    ),
                    'SecurityPolicyId' => 
                    array (
                      'title' => '安全策略id',
                      'description' => '安全策略实例ID。',
                      'type' => 'string',
                      'example' => 'sp-bp1bpn0kn9****',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.SecurityPolicy',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"593B0448-D13E-4C56-AC0D-FDF******\\",\\n  \\"SecrityPolicyRelations\\": [\\n    {\\n      \\"RelatedListeners\\": [\\n        {\\n          \\"ListenerId\\": \\"lsn-0bfuc****\\",\\n          \\"ListenerPort\\": 80,\\n          \\"ListenerProtocol\\": \\"HTTPS\\",\\n          \\"LoadBalancerId\\": \\"alb-umwzbz6******\\"\\n        }\\n      ],\\n      \\"SecurityPolicyId\\": \\"sp-bp1bpn0kn9****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListSecurityPolicyRelationsResponse>\\n    <RequestId>593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3</RequestId>\\n    <SecrityPolicyRelations>\\n        <RelatedListeners>\\n            <ListenerId>lsn-0bfuc****</ListenerId>\\n            <ListenerPort>80</ListenerPort>\\n            <ListenerProtocol>HTTPS</ListenerProtocol>\\n            <LoadBalancerId>lb-bp1o94dp5i6ea****</LoadBalancerId>\\n        </RelatedListeners>\\n        <SecurityPolicyId>scp-bp1bpn0kn9****</SecurityPolicyId>\\n    </SecrityPolicyRelations>\\n</ListSecurityPolicyRelationsResponse>","errorExample":""}]',
      'title' => '查询安全策略关联关系',
    ),
    'ListSystemSecurityPolicies' => 
    array (
      'summary' => '查询指定地域下的系统安全策略。',
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
            'title' => 'Schema of Response',
            'description' => '返回数据结构。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '593B0448-D13E-4C56-AC0D-FDF0F******',
              ),
              'SecurityPolicies' => 
              array (
                'title' => '安全策略',
                'description' => '安全策略列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '安全策略结构。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Ciphers' => 
                    array (
                      'title' => '加密套件',
                      'description' => '支持的加密算法。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '支持的加密套件，具体依赖**TLSVersions**的取值。
- TLSv1.0和TLSv1.1 支持：
    -   ECDHE-ECDSA-AES128-SHA
    -   ECDHE-ECDSA-AES256-SHA
    -   ECDHE-RSA-AES128-SHA
    -   ECDHE-RSA-AES256-SHA
    -   AES128-SHA
    -   AES256-SHA
   -   DES-CBC3-SHA

- TLSv1.2支持
    -   ECDHE-ECDSA-AES128-SHA
    -   ECDHE-ECDSA-AES256-SHA
    -   ECDHE-RSA-AES128-SHA
    -   ECDHE-RSA-AES256-SHA
    -   AES128-SHA
    -   AES256-SHA
    -   DES-CBC3-SHA
    -   ECDHE-ECDSA-AES128-GCM-SHA256
    -   ECDHE-ECDSA-AES256-GCM-SHA384
    -   ECDHE-ECDSA-AES128-SHA256
    -   ECDHE-ECDSA-AES256-SHA384
    -   ECDHE-RSA-AES128-GCM-SHA256
    -   ECDHE-RSA-AES256-GCM-SHA384
    -   ECDHE-RSA-AES128-SHA256
    -   ECDHE-RSA-AES256-SHA384 
    -   AES128-GCM-SHA256
    -   AES256-GCM-SHA384
    -   AES128-SHA256
    -   AES256-SHA256

- TLSv1.3支持： 
    - TLS_AES_128_GCM_SHA256
    - TLS_AES_256_GCM_SHA384
    - TLS_CHACHA20_POLY1305_SHA256
    - TLS_AES_128_CCM_SHA256
    - TLS_AES_128_CCM_8_SHA256',
                        'type' => 'string',
                        'example' => 'ECDHE-ECDSA-AES128-SHA',
                      ),
                    ),
                    'SecurityPolicyId' => 
                    array (
                      'title' => '安全策略Id',
                      'description' => '安全策略实例ID。',
                      'type' => 'string',
                      'example' => 'sp-n0kn923****',
                    ),
                    'TLSVersions' => 
                    array (
                      'title' => '协议版本',
                      'description' => '支持的TLS协议版本列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '支持的TLS协议版本，取值：**TLSv1.0**、**TLSv1.1**、**TLSv1.2**和**TLSv1.3**。',
                        'type' => 'string',
                        'example' => 'TLSv1.0',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"593B0448-D13E-4C56-AC0D-FDF0F******\\",\\n  \\"SecurityPolicies\\": [\\n    {\\n      \\"Ciphers\\": [\\n        \\"ECDHE-ECDSA-AES128-SHA\\"\\n      ],\\n      \\"SecurityPolicyId\\": \\"sp-n0kn923****\\",\\n      \\"TLSVersions\\": [\\n        \\"TLSv1.0\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListSystemSecurityPoliciesResponse>\\n    <RequestId>593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3</RequestId>\\n    <SecurityPolicies>\\n        <Ciphers>ECDHE-ECDSA-AES128-SHA</Ciphers>\\n        <SecurityPolicyId>spy-n0kn923****</SecurityPolicyId>\\n        <TLSVersions>TLSv1.0</TLSVersions>\\n    </SecurityPolicies>\\n</ListSystemSecurityPoliciesResponse>","errorExample":""}]',
      'title' => '查询系统安全策略',
    ),
    'AddEntriesToAcl' => 
    array (
      'summary' => '向访问控制策略组中添加IP条目。',
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
          'name' => 'AclId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'AclId',
            'description' => 'ACL实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'acl-hp34s2h0xx1ht4nwo****',
          ),
        ),
        1 => 
        array (
          'name' => 'AclEntries',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '条目信息列表',
            'description' => '添加的访问控制条目列表。单次调用最多支持20个访问控制条目。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '访问控制策略结构。',
              'type' => 'object',
              'properties' => 
              array (
                'Description' => 
                array (
                  'title' => '描述信息',
                  'description' => '访问控制条目备注描述，长度为2~256个字符，可包含英文字母、数字、中文、半角逗号（,）、半角句号（.）、半角分号（;）、正斜线（/）、at（@）、下划线（_）和短划线（-）。

单次调用最多支持20个访问控制条目。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test-entry',
                ),
                'Entry' => 
                array (
                  'title' => '条目',
                  'description' => '访问控制条目IP地址段。

单次调用最多支持20个访问控制条目。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '10.0.1.0/24',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等Token',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B3******',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'dryRun',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会在访问控制策略组中添加IP条目。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
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
            'description' => '向访问控制策略组中添加IP条目。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => 'job',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
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
            'errorCode' => 'ResourceAlreadyExist.AclEntry',
            'errorMessage' => 'The specified resource %s already exists.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.AclEntriesNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          2 => 
          array (
            'errorCode' => 'IncorrectStatus.Acl',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.ListenerAclEntriesNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          4 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.LoadBalancerAclEntriesNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Acl',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34******\\"\\n}","errorExample":""},{"type":"xml","example":"<AddEntriesToAclResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n</AddEntriesToAclResponse>","errorExample":""}]',
      'title' => '添加访问控制条目',
      'description' => '- 每个策略组可包含多个IP地址条目或IP地址段条目，访问控制策略组的条目限制如下： 

    - 单账号每次可添加的IP地址条目个数：20 
    - 每个访问控制策略组可包含的条目个数：500
- **AddEntriesToAcl**接口属于异步接口，即系统返回一个请求ID，但该访问控制策略组尚未成功添加IP条目，系统后台的添加任务仍在进行。您可以调用[ListAclEntries](~~213616~~)查询IP条目的添加状态：
    - 当访问控制策略组处于**Adding**状态时，表示IP条目正在添加中。
    - 当访问控制策略组处于**Available**状态时，表示IP条目添加成功。',
    ),
    'CreateAcl' => 
    array (
      'summary' => '在指定地域创建访问控制。',
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
          'name' => 'AclName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Acl名称',
            'description' => 'ACL的名称。必须以大小写字母或中文开头，可包含数字，半角句号（.），下划线（_）和短划线（-），限制长度为2~128个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-acl',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等Token',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B3*****',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'dryRun',
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会创建访问控制策略组。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源组Id',
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        4 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签结构。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'env',
                ),
                'Value' => 
                array (
                  'description' => '标签值。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'product',
                ),
              ),
              'required' => false,
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
            'description' => '创建访问控制。',
            'type' => 'object',
            'properties' => 
            array (
              'AclId' => 
              array (
                'title' => 'AclId',
                'description' => 'ACL实例ID。',
                'type' => 'string',
                'example' => 'acl-hp34s2h0xx1ht4nwo****',
              ),
              'JobId' => 
              array (
                'title' => '异步任务Id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876******',
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
            'errorCode' => 'QuotaExceeded.AclsNum',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          1 => 
          array (
            'errorCode' => 'NotExist.ResourceGroup',
            'errorMessage' => 'ResourceGroup does not exist.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.Acl',
            'errorMessage' => 'ACL authentication has failed.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AclId\\": \\"acl-hp34s2h0xx1ht4nwo****\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876******\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateAclResponse>\\n    <AclId>nacl-hp34s2h0xx1ht4nwo****</AclId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</CreateAclResponse>","errorExample":""}]',
      'title' => '创建访问控制',
      'description' => '**CreateAcl**接口属于异步接口，即系统返回一个实例ID，但该访问控制策略组尚未创建成功，系统后台的创建任务仍在进行。您可以调用[ListAcls](~~213617~~)查询访问控制策略组的创建状态：
- 当访问控制策略组处于**Creating**状态时，表示访问控制策略组正在创建中。
- 当访问控制策略组处于**Available**状态时，表示访问控制策略组创建成功。',
    ),
    'DeleteAcl' => 
    array (
      'summary' => '删除指定的访问控制。',
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
          'name' => 'AclId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '访问控制策略id',
            'description' => 'ACL实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'acl-hp34s2h0xx1ht4nwo****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等Token',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B3******',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'DryRun',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会删除访问控制。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。
',
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
            'description' => '删除访问控制。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876******',
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
            'errorCode' => 'ResourceInUse.Acl',
            'errorMessage' => 'The specified resource %s is in use.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectStatus.Acl',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.Acl',
            'errorMessage' => 'Authentication is failed for %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Acl',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876******\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteAclResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</DeleteAclResponse>","errorExample":""}]',
      'title' => '删除访问控制',
      'description' => '**DeleteAcl**接口属于异步接口，即系统返回一个请求ID，但该访问控制尚未删除成功，系统后台的删除任务仍在进行。您可以调用[ListAcls](~~213617~~)查询访问控制的删除状态：
- 当访问控制处于**Deleting**状态时，表示访问控制正在删除中。
- 当查询不到该访问控制实例的状态时，表示访问控制删除成功。',
    ),
    'UpdateAclAttribute' => 
    array (
      'summary' => '更新访问控制的属性，如名称。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '幂等参数',
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。

> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B******',
          ),
        ),
        1 => 
        array (
          'name' => 'AclId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'AclId',
            'description' => 'ACL实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'acl-hp34s2h0xx1ht4nwo****',
          ),
        ),
        2 => 
        array (
          'name' => 'AclName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '访问控制策略名称',
            'description' => 'ACL的名称。必须以大小写字母或中文开头，可包含数字，半角句号（.），下划线（_）和短划线（-），限制长度为2~128个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-acl',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否预校验请求',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会创建资源。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP `2xx`状态码并直接进行操作。',
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
            'description' => '异步任务ID结构',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876F******',
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
            'errorCode' => 'Conflict.Acl',
            'errorMessage' => 'There is already %s having the same configuration with %s.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectStatus.Acl',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Acl',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876F******\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateAclAttributeResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</UpdateAclAttributeResponse>","errorExample":""}]',
      'title' => '更新访问控制的属性',
    ),
    'ListAcls' => 
    array (
      'summary' => '查询某一个地域的访问控制列表。',
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AclIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '访问控制策略Id',
            'description' => '根据ACL ID来过滤查找ACL列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ACL ID。一次最多支持查询20个ACL ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'acl-hp34s2h0xx1ht4nwo****',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        1 => 
        array (
          'name' => 'AclNames',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '访问控制策略名称',
            'description' => 'ACL名称列表。一次最多支持查询10个ACL名称。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ACL名称。一次最多支持查询10个ACL名称。',
              'type' => 'string',
              'required' => false,
              'example' => 'test-acl',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源组ID',
            'description' => '资源组ID，根据设置的资源组ID来过滤。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtopty****',
          ),
        ),
        3 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页查询标识',
            'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
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
            'title' => '查询数量',
            'description' => '本次读取的最大数据记录数量，此参数为可选参数。取值范围：**1**~**100**。默认值：**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '50',
            'default' => '20',
          ),
        ),
        5 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签结构。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'env',
                ),
                'Value' => 
                array (
                  'description' => '标签值。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'product',
                ),
              ),
              'required' => false,
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
            'description' => '返回数据结构',
            'type' => 'object',
            'properties' => 
            array (
              'Acls' => 
              array (
                'title' => '访问控制列表',
                'description' => 'ACL列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'ACL结构。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AclId' => 
                    array (
                      'title' => '访问控制策略id',
                      'description' => 'ACL ID。',
                      'type' => 'string',
                      'example' => 'acl-hp34s2h0xx1ht4nwo****',
                    ),
                    'AclName' => 
                    array (
                      'title' => '访问控制策略名称',
                      'description' => 'ACL名称。',
                      'type' => 'string',
                      'example' => 'test-acl',
                    ),
                    'AclStatus' => 
                    array (
                      'title' => '状态',
                      'description' => 'ACL状态。取值：
- **Creating**：创建中。
- **Available**：正常可用状态。
- **Configuring**：配置中。',
                      'type' => 'string',
                      'example' => 'Available',
                    ),
                    'AddressIPVersion' => 
                    array (
                      'title' => 'IP版本',
                      'description' => 'ACL IP版本。取值：**IPv4**。
',
                      'type' => 'string',
                      'example' => 'IPv4',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'title' => '资源组ID',
                      'description' => '资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-atstuj3rtopty****',
                    ),
                    'ConfigManagedEnabled' => 
                    array (
                      'title' => '配置管理',
                      'description' => '配置管理开关。取值：

- **true**：开启配置管理。

- **false**：未开启配置管理。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => 'ACL创建时间，格式为：`YYYY-MM-DDThh:mm:ssZ`。',
                      'type' => 'string',
                      'example' => '2023-02-15T07:37:33Z',
                    ),
                    'Tags' => 
                    array (
                      'description' => '标签。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签结构。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '标签键。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                            'type' => 'string',
                            'example' => 'env',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签值。最多支持128个字符，不能以aliyun或acs:开头，不能包含http://或https://。',
                            'type' => 'string',
                            'example' => 'product',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'MaxResults' => 
              array (
                'title' => '本次查询返回记录数量',
                'description' => '本次读取的最大数据记录数量，此参数为可选参数，取值**1**~**100**。参数传入为空时，默认值为**20**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'NextToken' => 
              array (
                'title' => '分页查询标识',
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70t****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '593B0448-D13E-4C56-AC0D-FDF******',
              ),
              'TotalCount' => 
              array (
                'title' => '总记录数',
                'description' => '本次请求条件下的数据总量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.Acl',
            'errorMessage' => 'ACL authentication has failed.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Acls\\": [\\n    {\\n      \\"AclId\\": \\"acl-hp34s2h0xx1ht4nwo****\\",\\n      \\"AclName\\": \\"test-acl\\",\\n      \\"AclStatus\\": \\"Available\\",\\n      \\"AddressIPVersion\\": \\"IPv4\\",\\n      \\"ResourceGroupId\\": \\"rg-atstuj3rtopty****\\",\\n      \\"ConfigManagedEnabled\\": false,\\n      \\"CreateTime\\": \\"2023-02-15T07:37:33Z\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"env\\",\\n          \\"Value\\": \\"product\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"MaxResults\\": 20,\\n  \\"NextToken\\": \\"FFmyTO70t****\\",\\n  \\"RequestId\\": \\"593B0448-D13E-4C56-AC0D-FDF******\\",\\n  \\"TotalCount\\": 10\\n}","errorExample":""},{"type":"xml","example":"<ListAclsResponse>\\n    <Acls>\\n        <AclId>nacl-hp34s2h0xx1ht4nwo****</AclId>\\n        <AclName>test-acl</AclName>\\n        <AclStatus>Available</AclStatus>\\n        <AddressIPVersion>IPv4</AddressIPVersion>\\n        <ResourceGroupId>rg-atstuj3rtopty****</ResourceGroupId>\\n        <ConfigManagedEnabled>false</ConfigManagedEnabled>\\n        <CreateTime>2023-02-15T07:37:33Z</CreateTime>\\n    </Acls>\\n    <MaxResults>20</MaxResults>\\n    <NextToken>FFmyTO70t****</NextToken>\\n    <RequestId>593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3</RequestId>\\n    <TotalCount>10</TotalCount>\\n</ListAclsResponse>","errorExample":""}]',
      'title' => '查询访问控制列表',
    ),
    'ListAclEntries' => 
    array (
      'summary' => '查询指定访问控制的条目。',
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
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页查询标识',
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
            'title' => '查询数量',
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '50',
            'default' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'AclId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '访问控制策略Id',
            'description' => 'ACL实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'acl-hp34s2h0xx1ht4nwo****',
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
            'description' => '返回数据结构。',
            'type' => 'object',
            'properties' => 
            array (
              'AclEntries' => 
              array (
                'title' => '访问控制列表',
                'description' => '访问控制条目列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '访问控制条目结构。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Description' => 
                    array (
                      'title' => '描述信息',
                      'description' => '访问控制条目备注描述，长度限制为1~256个字符，允许包含字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_），支持中文字符。',
                      'type' => 'string',
                      'example' => 'test-entry',
                    ),
                    'Entry' => 
                    array (
                      'title' => 'IP条目',
                      'description' => '访问控制条目IP地址段。',
                      'type' => 'string',
                      'example' => '10.0.1.1/24',
                    ),
                    'Status' => 
                    array (
                      'title' => '状态',
                      'description' => 'ACL条目状态，取值：
- **Adding**：添加中。
- **Available**：添加成功，可用状态。
- **Removing**：移除中。',
                      'type' => 'string',
                      'example' => 'Available',
                    ),
                  ),
                ),
              ),
              'MaxResults' => 
              array (
                'title' => '本次查询返回记录数量',
                'description' => '分批次查询时每次显示的条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'NextToken' => 
              array (
                'title' => '分页查询标识',
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F87******',
              ),
              'TotalCount' => 
              array (
                'title' => '总记录数',
                'description' => '本次请求条件下返回的总数据记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1000',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.Acl',
            'errorMessage' => 'ACL authentication has failed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Acl',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AclEntries\\": [\\n    {\\n      \\"Description\\": \\"test-entry\\",\\n      \\"Entry\\": \\"10.0.1.1/24\\",\\n      \\"Status\\": \\"Available\\"\\n    }\\n  ],\\n  \\"MaxResults\\": 50,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F87******\\",\\n  \\"TotalCount\\": 1000\\n}","errorExample":""},{"type":"xml","example":"<ListAclEntriesResponse>\\n    <AclEntries>\\n        <Description>test-entry</Description>\\n        <Entry>10.0.1.1/24</Entry>\\n        <Status>Available</Status>\\n    </AclEntries>\\n    <MaxResults>50</MaxResults>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <TotalCount>1000</TotalCount>\\n</ListAclEntriesResponse>","errorExample":""}]',
      'title' => '查询访问控制条目',
    ),
    'AssociateAclsWithListener' => 
    array (
      'summary' => '将访问控制关联到监听。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '161',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslbAYSA83',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AclIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '访问控制策略Id',
            'description' => 'ACL实例ID，最多支持3个ACL实例ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ACL实例ID，最多支持3个ACL实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'acl-hp34s2h0xx1ht4nwo****',
            ),
            'required' => true,
            'maxItems' => 20,
          ),
        ),
        1 => 
        array (
          'name' => 'ListenerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '监听Id',
            'description' => '监听实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'lsn-bp1bpn0kn9*******',
          ),
        ),
        2 => 
        array (
          'name' => 'AclType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '绑定类型',
            'description' => '访问控制类型：

- **White**： 仅转发来自所选访问控制策略组中设置的IP地址或地址段的请求，白名单适用于只允许特定IP访问的场景。设置白名单存在一定业务风险。一旦设置白名单，就只有白名单中的IP可以访问负载均衡监听。如果开启了白名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。
- **Black**： 来自所选访问控制策略组中设置的IP地址或地址段的所有请求都不会转发，黑名单适用于只限制某些特定IP访问的场景。如果开启了黑名单访问，但访问策略组中没有添加任何IP，则负载均衡监听会转发全部请求。',
            'type' => 'string',
            'required' => true,
            'example' => 'White',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '预检此次请求',
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会关联ACL到监听。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
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
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B******',
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
            'description' => '将访问控制关联到监听。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务id',
                'description' => '异步任务ID',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F87******',
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
            'errorCode' => 'QuotaExceeded.AclsNum',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectStatus.Acl',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.ListenerAclEntriesNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.AclNotSupport',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          4 => 
          array (
            'errorCode' => 'ResourceAlreadyExist.AclEntry',
            'errorMessage' => 'The specified resource %s already exists.',
          ),
          5 => 
          array (
            'errorCode' => 'ResourceInUse.Acl',
            'errorMessage' => 'The specified resource %s is in use.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.LoadBalancerJoinedSecurityGroupNotSupportAcl',
            'errorMessage' => 'The operation is not allowed because of loadbalancer joined security group not support acl.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Acl',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.Listener',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F87******\\"\\n}","errorExample":""},{"type":"xml","example":"<AssociateAclsWithListenerResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</AssociateAclsWithListenerResponse>","errorExample":""}]',
      'title' => '关联访问控制和监听',
      'description' => '**DeleteDhcpOptionsSet**接口属于异步接口，即系统返回一个请求ID，但该ACL尚未成功绑定监听器，系统后台的绑定任务仍在进行。您可以调用[ListAclRelations](~~213618~~)查询ACL的绑定状态：
- 当ACL处于**Associating**状态时，表示ACL正在绑定监听器中。
- 当ACL处于**Associated**状态时，表示ACL已成功绑定监听器。',
    ),
    'ListAclRelations' => 
    array (
      'summary' => '查询访问控制关联的监听。',
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
          'name' => 'AclIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '访问控制策略Id',
            'description' => 'ACL实例ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ACL实例ID，一次最多支持查询5个ACL实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'acl-hp34s2h0xx1ht4nwo****',
            ),
            'required' => true,
            'maxItems' => 5,
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
            'description' => '返回数据结构',
            'type' => 'object',
            'properties' => 
            array (
              'AclRelations' => 
              array (
                'title' => '访问控制列表',
                'description' => 'ACL与监听关系列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'ACL与监听关系结构',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AclId' => 
                    array (
                      'title' => '访问控制策略id',
                      'description' => 'ACL ID',
                      'type' => 'string',
                      'example' => 'acl-hp34s2h0xx1ht4nwo****',
                    ),
                    'RelatedListeners' => 
                    array (
                      'title' => '关联的监听',
                      'description' => '关联的监听列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '关联的监听信息结构',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ListenerId' => 
                          array (
                            'title' => '监听ID',
                            'description' => '监听ID',
                            'type' => 'string',
                            'example' => 'lsn-bpn0kn908w4nbw****',
                          ),
                          'ListenerPort' => 
                          array (
                            'title' => '监听端口',
                            'description' => '监听端口',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '80',
                          ),
                          'ListenerProtocol' => 
                          array (
                            'title' => '监听协议',
                            'description' => '监听协议',
                            'type' => 'string',
                            'example' => 'HTTPS',
                          ),
                          'LoadBalancerId' => 
                          array (
                            'title' => '实例ID',
                            'description' => '负载均衡实例ID',
                            'type' => 'string',
                            'example' => 'alb-bp1b6c719dfa08ex****',
                          ),
                          'Status' => 
                          array (
                            'title' => '关联状态',
                            'description' => 'ACL与监听关联的状态：

- **Associating**：关联中
- **Associated**：已关联
- **Dissociating**：解除关联中',
                            'type' => 'string',
                            'example' => 'Associated',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '593B0448-D13E-4C56-AC0D-FDF0******',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.Acl',
            'errorMessage' => 'Authentication is failed for %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Acl',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AclRelations\\": [\\n    {\\n      \\"AclId\\": \\"acl-hp34s2h0xx1ht4nwo****\\",\\n      \\"RelatedListeners\\": [\\n        {\\n          \\"ListenerId\\": \\"lsn-bpn0kn908w4nbw****\\",\\n          \\"ListenerPort\\": 80,\\n          \\"ListenerProtocol\\": \\"HTTPS\\",\\n          \\"LoadBalancerId\\": \\"alb-bp1b6c719dfa08ex****\\",\\n          \\"Status\\": \\"Associated\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"593B0448-D13E-4C56-AC0D-FDF0******\\"\\n}","errorExample":""},{"type":"xml","example":"<ListAclRelationsResponse>\\n    <AclRelations>\\n        <AclId>nacl-hp34s2h0xx1ht4nwo****</AclId>\\n        <RelatedListeners>\\n            <ListenerId>lsr-bp1bpn0kn908w4nbw****</ListenerId>\\n            <ListenerPort>80</ListenerPort>\\n            <ListenerProtocol>HTTPS</ListenerProtocol>\\n            <LoadBalancerId>lb-bp1b6c719dfa08ex****</LoadBalancerId>\\n            <Status>Associated</Status>\\n        </RelatedListeners>\\n    </AclRelations>\\n    <RequestId>593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3</RequestId>\\n</ListAclRelationsResponse>","errorExample":""}]',
      'title' => '查询访问控制关联关系',
    ),
    'DissociateAclsFromListener' => 
    array (
      'summary' => '将访问控制从监听上解除关联。',
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
          'name' => 'AclIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '访问控制策略Id',
            'description' => 'ACL实例ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ACL实例ID，一次最多支持将3个ACL实例与监听解除关联。',
              'type' => 'string',
              'required' => false,
              'example' => 'acl-hp34s2h0xx1ht4nwo****',
            ),
            'required' => true,
            'maxItems' => 20,
          ),
        ),
        1 => 
        array (
          'name' => 'ListenerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '监听Id',
            'description' => '监听实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lsn-bpn0kn908w4nbw****',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '预检此次请求',
            'description' => '是否只预检此次请求，取值：
- **true**：发送检查请求，不会将ACL与监听解除关联。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B3******',
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
            'description' => '将访问控制从监听上解除关联。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876******',
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
            'errorCode' => 'IncorrectStatus.Listener',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectStatus.Acl',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceInConfiguring',
            'errorMessage' => 'The specified resource of %s is being configured. Please try again later.',
          ),
          3 => 
          array (
            'errorCode' => 'LockFailed',
            'errorMessage' => 'The specified resource lock failed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotAssociated.Acl',
            'errorMessage' => 'The specified resource %s is not associated.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876******\\"\\n}","errorExample":""},{"type":"xml","example":"<DissociateAclsFromListenerResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</DissociateAclsFromListenerResponse>","errorExample":""}]',
      'title' => '解除关联访问控制和监听',
      'description' => '**DeleteDhcpOptionsSet**接口属于异步接口，即系统返回一个请求ID，但该ACL尚未成功解绑监听器，系统后台的解绑任务仍在进行。您可以调用[ListAclRelations](~~213618~~)查询ACL的解绑状态：
- 当ACL处于**Dissociating**状态时，表示ACL正在解绑监听器中。
- 当ACL处于**Dissociated**状态时，表示ACL已成功解绑监听器。',
    ),
    'RemoveEntriesFromAcl' => 
    array (
      'summary' => '从访问控制中移除条目。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '593B0448-D13E-4C56-AC0D-FDF******',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会删除访问控制策略组中的IP条目。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'AclId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '访问控制策略Id',
            'description' => 'ACL实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'acl-hp34s2h0xx1ht4nwo****',
          ),
        ),
        3 => 
        array (
          'name' => 'Entries',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '条目列表',
            'description' => '移除的访问控制条目列表，单次调用最多移除20条。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '移除的访问控制条目，单次调用最多移除20条。',
              'type' => 'string',
              'required' => false,
              'example' => '192.168.1.0/24',
            ),
            'required' => true,
            'maxItems' => 20,
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
            'description' => '从访问控制中移除条目。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务Id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '593B0448-D13E-4C56-AC0D-FDF0F******',
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
            'errorCode' => 'IncorrectStatus.Acl',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.Acl',
            'errorMessage' => 'ACL authentication has failed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Acl',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.AclEntry',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\",\\n  \\"RequestId\\": \\"593B0448-D13E-4C56-AC0D-FDF0F******\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveEntriesFromAclResponse>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n    <RequestId>593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3</RequestId>\\n</RemoveEntriesFromAclResponse>","errorExample":""}]',
      'title' => '移除访问控制条目',
      'description' => '**RemoveEntriesFromAcl**接口属于异步接口，即系统返回一个请求ID，但该访问控制策略组中的IP条目尚未删除成功，系统后台的删除任务仍在进行。您可以调用[ListAclEntries](~~213616~~)查询访问控制策略组中的IP条目的删除状态：
- 当访问控制策略组处于**Removing**状态时，表示访问控制策略组中的IP条目正在删除中。
- 当查询不到该访问控制策略组时，表示访问控制策略组中的IP条目删除成功。',
    ),
    'MoveResourceGroup' => 
    array (
      'summary' => '修改云资源所属的资源组。',
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
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型',
            'description' => '需要修改资源组的云资源类型，取值：


- **loadbalancer**：应用型负载均衡实例
- **acl**：访问控制
- **securitypolicy**：安全策略
- **servergroup**：服务器组
',
            'type' => 'string',
            'required' => true,
            'example' => 'acl',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '指定资源Id',
            'description' => '需要修改资源组的云资源的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'acl-hp34s2h0xx1ht4nwo****',
          ),
        ),
        2 => 
        array (
          'name' => 'NewResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源组id',
            'description' => '需要移入云资源实例的资源组ID。

> 资源组是在阿里云账号下进行资源分组管理的一种机制，资源组能够帮助您解决单个云账号内的资源分组和授权管理等复杂性问题。更多信息，请参见[什么是资源管理](~~94475~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'rg-aekzbi7******',
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
            'description' => '返回数据结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '593B0448-D13E-4C56-AC0D-FDF******',
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
            'errorCode' => 'NotExist.ResourceGroup',
            'errorMessage' => 'ResourceGroup does not exist.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.Acl',
            'errorMessage' => 'ACL authentication has failed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Acl',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.LoadBalancer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotFound.SecurityPolicy',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.ServerGroup',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"593B0448-D13E-4C56-AC0D-FDF******\\"\\n}","errorExample":""},{"type":"xml","example":"<MoveResourceGroupResponse>\\n    <RequestId>593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3</RequestId>\\n</MoveResourceGroupResponse>","errorExample":""}]',
      'title' => '修改资源组',
    ),
    'ListTagKeys' => 
    array (
      'summary' => '查询指定标签的键。',
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
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页查询标识',
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
            'title' => '查询数量',
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '20',
            'default' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型',
            'description' => '资源类型，取值：

- **acl**：访问控制。

- **loadbalancer**：应用型负载均衡实例。

- **securitypolicy**：安全策略。

- **servergroup**：服务器组。',
            'type' => 'string',
            'required' => true,
            'example' => 'loadbalancer',
          ),
        ),
        3 => 
        array (
          'name' => 'Category',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '标签类型',
            'description' => '标签类型。

取值：**Custom**、**System**或**All**。

默认值：**All**。',
            'type' => 'string',
            'required' => false,
            'example' => 'System',
          ),
        ),
        4 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '具体的标签Key',
            'description' => '标签键。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
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
            'description' => '标签键。',
            'type' => 'object',
            'properties' => 
            array (
              'MaxResults' => 
              array (
                'title' => '本次查询返回记录数量',
                'description' => '分批次查询时每次显示的条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'NextToken' => 
              array (
                'title' => '分页查询标识',
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3',
              ),
              'TagKeys' => 
              array (
                'title' => '标签Key列表',
                'description' => '标签键列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签键结构。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Category' => 
                    array (
                      'title' => '标签类型',
                      'description' => '标签类型。

取值：**Custom**、**System**或**All**。

默认值：**All**。',
                      'type' => 'string',
                      'example' => 'System',
                    ),
                    'TagKey' => 
                    array (
                      'title' => '标签Key',
                      'description' => '返回满足所有筛选条件的标签。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'title' => '总记录数',
                'description' => '列表条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"MaxResults\\": 20,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"RequestId\\": \\"593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3\\",\\n  \\"TagKeys\\": [\\n    {\\n      \\"Category\\": \\"System\\",\\n      \\"TagKey\\": \\"test\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 10\\n}","errorExample":""},{"type":"xml","example":"<ListTagKeysResponse>\\n    <MaxResults>20</MaxResults>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <RequestId>593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3</RequestId>\\n    <TagKeys>\\n        <Category>System</Category>\\n        <TagKey>test</TagKey>\\n    </TagKeys>\\n    <TotalCount>10</TotalCount>\\n</ListTagKeysResponse>","errorExample":""}]',
      'title' => '查询标签键',
    ),
    'ListTagResources' => 
    array (
      'summary' => '查询指定资源标签。',
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
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页查询标识',
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
            'title' => '查询数量',
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**。默认值：**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '20',
            'default' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型',
            'description' => '资源类型，取值：

- **acl**：访问控制。

- **loadbalancer**：应用型负载均衡实例。

- **securitypolicy**：安全策略。

- **servergroup**：服务器组。',
            'type' => 'string',
            'required' => true,
            'example' => 'loadbalancer',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '资源实例Id',
            'description' => '资源ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。

> **ResourceId**和**Tag**参数至少填写其中一个。',
              'type' => 'string',
              'required' => false,
              'example' => 'alb-gws76zi******',
            ),
            'required' => false,
            'example' => 'acl-123',
            'maxItems' => 50,
            'minItems' => 1,
          ),
        ),
        4 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '标签列表',
            'description' => '标签。

> **ResourceId**和**Tag**参数至少填写其中一个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签结构。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '标签键',
                  'description' => '标签键。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'env',
                ),
                'Value' => 
                array (
                  'title' => '标签值',
                  'description' => '标签值。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'product',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'example' => 'test',
            'maxItems' => 20,
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
            'description' => '标签资源信息。',
            'type' => 'object',
            'properties' => 
            array (
              'MaxResults' => 
              array (
                'title' => '本次查询返回记录数量',
                'description' => '分批次查询时每次显示的条目数。
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'NextToken' => 
              array (
                'title' => '分页查询标识',
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '593B0448-D13E-4C56-AC0D-FDF0FD******',
              ),
              'TagResources' => 
              array (
                'title' => '标签值列表',
                'description' => '返回符合标签键和标签值的标签。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回符合标签键和标签值的标签。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ResourceId' => 
                    array (
                      'title' => '资源ID',
                      'description' => '资源ID。',
                      'type' => 'string',
                      'example' => 'alb-gws76zijb0******',
                    ),
                    'ResourceType' => 
                    array (
                      'title' => '资源类型',
                      'description' => '资源类型，取值：

- **acl**：访问控制。

- **loadbalancer**：应用型负载均衡实例。

- **securitypolicy**：安全策略。

- **servergroup**：服务器组。',
                      'type' => 'string',
                      'example' => 'loadbalancer',
                    ),
                    'TagKey' => 
                    array (
                      'title' => '标签Key',
                      'description' => '标签键。',
                      'type' => 'string',
                      'example' => 'env',
                    ),
                    'TagValue' => 
                    array (
                      'title' => '标签Value',
                      'description' => '标签值。',
                      'type' => 'string',
                      'example' => 'product',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Acl',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.LoadBalancer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotFound.SecurityPolicy',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.ServerGroup',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"MaxResults\\": 20,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"RequestId\\": \\"593B0448-D13E-4C56-AC0D-FDF0FD******\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"ResourceId\\": \\"alb-gws76zijb0******\\",\\n      \\"ResourceType\\": \\"loadbalancer\\",\\n      \\"TagKey\\": \\"env\\",\\n      \\"TagValue\\": \\"product\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n    <MaxResults>20</MaxResults>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <RequestId>593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3</RequestId>\\n    <TagResources>\\n        <ResourceId>d-2ze1ot4ah7xjyv0d****</ResourceId>\\n        <ResourceType>loadbalancer</ResourceType>\\n        <TagKey>env</TagKey>\\n        <TagValue>product</TagValue>\\n    </TagResources>\\n</ListTagResourcesResponse>","errorExample":""}]',
      'title' => '查询资源标签',
    ),
    'ListTagValues' => 
    array (
      'summary' => '查询指定标签的值。',
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
            'title' => '分页查询标识',
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
            'title' => '查询数量',
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '20',
            'default' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型',
            'description' => '资源类型，取值：

- **loadbalancer**：应用型负载均衡实例。

- **acl**：访问控制。

- **securitypolicy**：安全策略。

- **servergroup**：服务器组。',
            'type' => 'string',
            'required' => false,
            'example' => 'loadbalancer',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源实例Id',
            'description' => '资源实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'alb-gws76zijb0******',
          ),
        ),
        4 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '具体的标签Key',
            'description' => '标签键。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
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
            'description' => '查询标签值。',
            'type' => 'object',
            'properties' => 
            array (
              'MaxResults' => 
              array (
                'title' => '本次查询返回记录数量',
                'description' => '分批次查询时每次显示的条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'NextToken' => 
              array (
                'title' => '分页查询标识',
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '593B0448-D13E-4C56-AC0D-FDF0F******',
              ),
              'TagValues' => 
              array (
                'title' => '标签值列表',
                'description' => '标签值。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回满足所有筛选条件的标签。',
                  'type' => 'string',
                  'example' => 'owner',
                ),
              ),
              'TotalCount' => 
              array (
                'title' => '总记录数',
                'description' => '列表条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
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
            'errorCode' => 'ResourceNotFound.Acl',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.LoadBalancer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotFound.SecurityPolicy',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.ServerGroup',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"MaxResults\\": 20,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"RequestId\\": \\"593B0448-D13E-4C56-AC0D-FDF0F******\\",\\n  \\"TagValues\\": [\\n    \\"owner\\"\\n  ],\\n  \\"TotalCount\\": 10\\n}","errorExample":""},{"type":"xml","example":"<ListTagValuesResponse>\\n    <MaxResults>20</MaxResults>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <RequestId>593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3</RequestId>\\n    <TagValues>owner</TagValues>\\n    <TotalCount>10</TotalCount>\\n</ListTagValuesResponse>","errorExample":""}]',
      'title' => '查询标签值',
    ),
    'TagResources' => 
    array (
      'summary' => '给指定资源添加标签。',
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
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型',
            'description' => '资源类型，取值：

- **acl**：访问控制。

- **loadbalancer**：应用型负载均衡实例。

- **securitypolicy**：安全策略。

- **servergroup**：服务器组。',
            'type' => 'string',
            'required' => true,
            'example' => 'loadbalancer',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '资源实例Id',
            'description' => '资源ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'alb-gws76zi******',
            ),
            'required' => true,
            'example' => 'acl-123',
            'maxItems' => 50,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '标签列表',
            'description' => '标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签结构。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '标签键',
                  'description' => '标签键。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'env',
                ),
                'Value' => 
                array (
                  'title' => '标签值',
                  'description' => '标签值。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'product',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'example' => 'test',
            'maxItems' => 20,
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
            'description' => '给资源添加标签。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '593B0448-D13E-4C56-AC0D-FDF******',
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
            'errorCode' => 'ResourceNotFound.Acl',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.LoadBalancer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotFound.SecurityPolicy',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.ServerGroup',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"593B0448-D13E-4C56-AC0D-FDF******\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\n    <RequestId>593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3</RequestId>\\n</TagResourcesResponse>","errorExample":""}]',
      'title' => '给资源添加标签',
    ),
    'UnTagResources' => 
    array (
      'summary' => '删除资源上配置的标签。',
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
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型',
            'description' => '资源类型，取值：

- **acl**：访问控制。

- **loadbalancer**：应用型负载均衡实例。

- **securitypolicy**：安全策略。

- **servergroup**：服务器组。',
            'type' => 'string',
            'required' => true,
            'example' => 'loadbalancer',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '资源实例Id',
            'description' => '要删除标签的资源ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '要删除标签的资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'alb-gws76zij******',
            ),
            'required' => true,
            'example' => 'acl-123',
            'maxItems' => 50,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '标签列表',
            'description' => '要删除的标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '要删除的标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '标签键',
                  'description' => '要删除标签的标签键。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'env',
                ),
                'Value' => 
                array (
                  'title' => '标签值',
                  'description' => '要删除标签的标签值。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'product',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'example' => 'test',
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '标签键列表',
            'description' => '要删除标签的标签键。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签键。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。',
              'type' => 'string',
              'required' => false,
              'example' => 'env',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        4 => 
        array (
          'name' => 'All',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否删除全部',
            'description' => '是否解绑资源的所有标签。取值：

- **true**：解绑资源的所有标签。
- **false**（默认值）：不解绑资源的所有标签。
',
            'type' => 'boolean',
            'required' => false,
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
            'description' => '删除标签。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '593B0448-D13E-4C56-AC0D-FDF0F******',
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
            'errorCode' => 'ResourceNotFound.Acl',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.LoadBalancer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotFound.SecurityPolicy',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.ServerGroup',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"593B0448-D13E-4C56-AC0D-FDF0F******\\"\\n}","errorExample":""},{"type":"xml","example":"<UnTagResourcesResponse>\\n    <RequestId>593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3</RequestId>\\n</UnTagResourcesResponse>","errorExample":""}]',
      'title' => '删除资源的标签',
    ),
    'ListAsynJobs' => 
    array (
      'summary' => '查询指定地域的异步任务。',
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
          'name' => 'JobIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '任务ID列表',
            'description' => '任务ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '异步任务ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'bfb728bf-53a8-4886-84cb-829******',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型类型',
            'description' => '关联的资源类型。取值：

- **loadbalancer**：应用型负载均衡实例。
- **listener**：监听。
- **rule**：转发规则。
- **acl**：访问控制。
- **securitypolicy**：安全策略。
- **servergroup**：服务器组。',
            'type' => 'string',
            'required' => false,
            'example' => 'loadbalancer',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '资源实例ID列表',
            'description' => '资源实例ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'alb-o8mszt95oamfjy****',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        3 => 
        array (
          'name' => 'ApiName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '操作接口名',
            'description' => '操作接口名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'CreateLoadBalancer',
          ),
        ),
        4 => 
        array (
          'name' => 'BeginTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '任务过滤时间范围-开始时间',
            'description' => '任务开始时间戳。单位：毫秒。

时间戳的格式采用Unix时间戳，表示从格林威治时间1970年01月01日00时00分00秒至开始查询异步任务状态时的总时长。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2134663231234',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '任务过滤时间范围-结束时间',
            'description' => '任务结束时间戳。单位：毫秒。

时间戳的格式采用Unix时间戳，表示从格林威治时间1970年01月01日00时00分00秒至查询异步任务状态结束时的总时长。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2144663233315',
          ),
        ),
        6 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '下一个查询开始Token',
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
            'title' => '本次读取的最大数据记录数量',
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值：**20**。',
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
            'description' => '任务列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Jobs' => 
              array (
                'title' => '任务列表',
                'description' => '任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '任务列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ApiName' => 
                    array (
                      'title' => 'openapi名称',
                      'description' => '操作接口名称。',
                      'type' => 'string',
                      'example' => 'CreateLoadBalancer',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '任务开始时间戳',
                      'description' => '任务开始时间戳。单位：毫秒。

时间戳的格式采用Unix时间戳，表示从格林威治时间1970年01月01日00时00分00秒至开始查询异步任务状态时的总时长。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2134663231234',
                    ),
                    'ErrorCode' => 
                    array (
                      'title' => '如果Status为失败，则为错误码',
                      'description' => '如果**Status**为失败，则为错误码。',
                      'type' => 'string',
                      'example' => '506',
                    ),
                    'ErrorMessage' => 
                    array (
                      'title' => '如果Status为失败，则为错误信息',
                      'description' => '如果**Status**为失败，则为错误信息。',
                      'type' => 'string',
                      'example' => 'AllocateEipAddress Failed',
                    ),
                    'Id' => 
                    array (
                      'title' => '任务ID',
                      'description' => '任务ID。',
                      'type' => 'string',
                      'example' => '365F4154-92F6-4AE4-92F8-7FF34B5****',
                    ),
                    'ModifyTime' => 
                    array (
                      'title' => '任务结束时间戳',
                      'description' => '任务结束时间戳。单位：毫秒。

时间戳的格式采用Unix时间戳，表示从格林威治时间1970年01月01日00时00分00秒至查询异步任务状态结束时的总时长。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2144663233315',
                    ),
                    'OperateType' => 
                    array (
                      'title' => '操作类型',
                      'description' => '操作类型，取值：

- **Create**：创建。

- **Update**：修改。

- **Delete**： 删除。',
                      'type' => 'string',
                      'example' => 'Create',
                    ),
                    'ResourceId' => 
                    array (
                      'title' => '关联的资源实例ID',
                      'description' => '关联的资源实例ID。',
                      'type' => 'string',
                      'example' => 'alb-o8mszt95oamfjy****',
                    ),
                    'ResourceType' => 
                    array (
                      'title' => '关联的资源类型',
                      'description' => '关联的资源类型。取值：

- **loadbalancer**：应用型负载均衡实例。
- **listener**：监听。
- **rule**：转发规则。
- **acl**：访问控制。
- **securitypolicy**：安全策略。
- **servergroup**：服务器组。',
                      'type' => 'string',
                      'example' => 'loadbalancer',
                    ),
                    'Status' => 
                    array (
                      'title' => '任务状态',
                      'description' => '任务状态，取值：

- **Succeeded**：成功。

- **Failed**：失败。

- **Processing**：执行。',
                      'type' => 'string',
                      'example' => 'Succeeded',
                    ),
                  ),
                ),
              ),
              'MaxResults' => 
              array (
                'title' => '本次查询返回记录数量',
                'description' => '分批次查询时每次显示的条目数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'NextToken' => 
              array (
                'title' => '分页查询标识',
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF3******',
              ),
              'TotalCount' => 
              array (
                'title' => '总记录数	',
                'description' => '列表条目数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1000',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Jobs\\": [\\n    {\\n      \\"ApiName\\": \\"CreateLoadBalancer\\",\\n      \\"CreateTime\\": 2134663231234,\\n      \\"ErrorCode\\": \\"506\\",\\n      \\"ErrorMessage\\": \\"AllocateEipAddress Failed\\",\\n      \\"Id\\": \\"365F4154-92F6-4AE4-92F8-7FF34B5****\\",\\n      \\"ModifyTime\\": 2144663233315,\\n      \\"OperateType\\": \\"Create\\",\\n      \\"ResourceId\\": \\"alb-o8mszt95oamfjy****\\",\\n      \\"ResourceType\\": \\"loadbalancer\\",\\n      \\"Status\\": \\"Succeeded\\"\\n    }\\n  ],\\n  \\"MaxResults\\": 10,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF3******\\",\\n  \\"TotalCount\\": 1000\\n}","errorExample":""},{"type":"xml","example":"<ListAsynJobsResponse>\\n    <Jobs>\\n        <ApiName>CreateLoadBalancer</ApiName>\\n        <CreateTime>2134663231234</CreateTime>\\n        <ErrorCode>506</ErrorCode>\\n        <ErrorMessage>AllocateEipAddress Failed</ErrorMessage>\\n        <Id>365F4154-92F6-4AE4-92F8-7FF34B5****</Id>\\n        <ModifyTime>2144663233315</ModifyTime>\\n        <OperateType>Create</OperateType>\\n        <ResourceId>alb-o8mszt95oamfjy****</ResourceId>\\n        <ResourceType>acl</ResourceType>\\n        <Status>Succeeded</Status>\\n    </Jobs>\\n    <MaxResults>10</MaxResults>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <TotalCount>1000</TotalCount>\\n</ListAsynJobsResponse>","errorExample":""}]',
      'title' => '查询异步任务',
    ),
    'UpdateAScripts' => 
    array (
      'summary' => '更新可编程脚本。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '34540',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslb2Q6O49',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'b1f642ac-5558-4a36-b7d9-cf53******',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会更新可编程脚本。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'AScripts',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '脚本',
            'description' => '可编程脚本信息列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '可编程脚本信息。',
              'type' => 'object',
              'properties' => 
              array (
                'AScriptName' => 
                array (
                  'title' => '脚本名称',
                  'description' => '可编程脚本名称。

长度为2~128个英文或中文字符，必须以大小写英文字母或中文开头，可包含数字，半角句号（.），下划线（_）和短划线（-）。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Group1',
                ),
                'Enabled' => 
                array (
                  'title' => '是否启用',
                  'description' => '是否启用可编程脚本。取值：

- **true**：启用。

- **false**（默认值）：不启用。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'ScriptContent' => 
                array (
                  'title' => '脚本内容',
                  'description' => '可编程脚本内容。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'if and(match_re($uri, \'^/1.txt$\'), $arg_type) { rewrite(concat(\'/1.\', $arg_type), \'break\') }',
                ),
                'ExtAttributes' => 
                array (
                  'title' => '扩展属性',
                  'description' => '扩展属性',
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'AttributeKey' => 
                      array (
                        'title' => '属性名称',
                        'description' => 'Ascript脚本的属性名称。

仅取值**EsDebug**：当请求携带_es_dbg参数，且值为此处配置的密钥时，开启相应的调试响应头，以输出规则执行记录。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'EsDebug',
                      ),
                      'AttributeValue' => 
                      array (
                        'title' => '属性值',
                        'description' => '属性值，大小写英文字母或数字，长度为1~128个字符',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test123',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                ),
                'AScriptId' => 
                array (
                  'title' => '脚本Id',
                  'description' => '可编程脚本ID。

',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'as-mhqxcanmivn4g5****',
                ),
                'ExtAttributeEnabled' => 
                array (
                  'title' => '是否启用扩展属性',
                  'description' => '是否启用可编程脚本扩展属性。取值：

- true：启用。

- false(默认值)：不启用',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
              ),
              'required' => false,
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
            'description' => '更新可编程脚本。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务Id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '2e82b5f4-1ba9-4d20-89c8-1082ebaa****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ACA19FE1-C09E-53C7-8FDA-560******',
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
            'errorCode' => 'IncorrectStatus.Listener',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.AScriptsNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.AScriptsTotalLinesNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.AScriptLinesNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Ascript',
            'errorMessage' => 'The specified resource of %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"2e82b5f4-1ba9-4d20-89c8-1082ebaa****\\",\\n  \\"RequestId\\": \\"ACA19FE1-C09E-53C7-8FDA-560******\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateAScriptsResponse>\\n    <JobId>2e82b5f4-1ba9-4d20-89c8-1082ebaa****</JobId>\\n    <RequestId>ACA19FE1-C09E-53C7-8FDA-560F49D71891</RequestId>\\n</UpdateAScriptsResponse>","errorExample":""}]',
      'title' => '更新可编程脚本',
      'description' => '**UpdateAScripts**接口属于异步接口，即系统返回一个请求ID，但该可编程脚本尚未更新成功，系统后台的更新任务仍在进行。您可以调用[ListAScripts](~~472574~~)查询可编程脚本的更新状态：

   - 当可编程脚本处于**Configuring**状态时，表示可编程脚本正在更新中。

   - 当可编程脚本处于**Available**状态时，表示可编程脚本更新成功。',
    ),
    'CreateAScripts' => 
    array (
      'summary' => '创建可编程脚本。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '34526',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREslb2Q6O49',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '5A2CFF0E-5718-45B5-9D4D-70B******',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => ' 是否只预检此次请求。取值：
- **true**：发送检查请求，不会创建可编程脚本。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '监听id',
            'description' => '监听ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lsn-6hfq3zs0x04ibn****',
          ),
        ),
        3 => 
        array (
          'name' => 'AScripts',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '脚本',
            'description' => '可编程脚本信息列表。

',
            'type' => 'array',
            'items' => 
            array (
              'description' => '可编程脚本信息。',
              'type' => 'object',
              'properties' => 
              array (
                'AScriptName' => 
                array (
                  'title' => '脚本名称',
                  'description' => '可编程脚本名称。

长度为2~128个英文或中文字符，必须以大小写英文字母或中文开头，可包含数字，半角句号（.），下划线（_）和短划线（-）。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'test',
                ),
                'Enabled' => 
                array (
                  'title' => '是否启用',
                  'description' => '是否启用可编程脚本。取值：

- **true**：启用。

- **false**（默认值）：不启用。

',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'ScriptContent' => 
                array (
                  'title' => '脚本内容',
                  'description' => '可编程脚本内容。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'if and(match_re($uri, \'^/1.txt$\'), $arg_type) {   rewrite(concat(\'/1.\', $arg_type), \'break\') }',
                ),
                'ExtAttributes' => 
                array (
                  'title' => '扩展属性',
                  'description' => '扩展属性',
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'AttributeKey' => 
                      array (
                        'title' => '属性名称',
                        'description' => 'Ascript脚本的属性名称。

仅取值  **EsDebug**：当请求携带_es_dbg参数，且值为此处配置的密钥时，开启相应的调试响应头，以输出规则执行记录。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'EsDebug',
                      ),
                      'AttributeValue' => 
                      array (
                        'title' => '属性值',
                        'description' => '属性值，大小写英文字母或数字，长度为1~128个字符',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test123',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                ),
                'ExtAttributeEnabled' => 
                array (
                  'title' => '是否启用扩展属性',
                  'description' => '是否启用可编程脚本扩展属性。取值：

- true：启用。

- false(默认值)：不启用
',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
              ),
              'required' => false,
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
            'description' => '创建可编程脚本。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务Id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '5c607642-535e-4e06-9d77-df53049b****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BF0FE763-9603-558F-A55B-0F4******',
              ),
              'AScriptIds' => 
              array (
                'title' => '可编程脚本列表',
                'description' => '可编程脚本ID列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '可编程脚本ID。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AScriptId' => 
                    array (
                      'title' => '脚本id',
                      'description' => '可编程脚本ID。',
                      'type' => 'string',
                      'example' => 'as-xvq5igaa7uv6vr****',
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
            'errorCode' => 'IncorrectStatus.Listener',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.AScriptsNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.AScriptsTotalLinesNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceQuotaExceeded.AScriptLinesNum',
            'errorMessage' => 'The quota of %s is exceeded for resource %s, usage %s/%s.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"5c607642-535e-4e06-9d77-df53049b****\\",\\n  \\"RequestId\\": \\"BF0FE763-9603-558F-A55B-0F4******\\",\\n  \\"AScriptIds\\": [\\n    {\\n      \\"AScriptId\\": \\"as-xvq5igaa7uv6vr****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<CreateAScriptsResponse>\\n    <JobId>5c607642-535e-4e06-9d77-df53049b****</JobId>\\n    <RequestId>BF0FE763-9603-558F-A55B-0F4B9A3E3C02</RequestId>\\n    <AScriptIds>\\n        <AScriptId>as-xvq5igaa7uv6vr****</AScriptId>\\n    </AScriptIds>\\n</CreateAScriptsResponse>","errorExample":""}]',
      'title' => '创建可编程脚本',
      'description' => '### 前提条件

- 已创建标准版或WAF增强版ALB实例。具体操作，请参见[CreateLoadBalancer](~~214358~~)。

- 创建和管理AScript可编程脚本规则功能默认不开放，请登录[配额中心控制台](https://quotas.console.aliyun.com/white-list-products/alb/quotas?spm=a2c4g.11186623.0.0.6e8834f6IFiF2I)，在**权益配额列表**页面，输入配额ID为`slb_user_visible_gray_label/ascript`，然后进行申请。

### 使用说明

**CreateAScripts**接口属于异步接口，即系统返回一个请求ID，但该可编程脚本尚未创建成功，系统后台的创建任务仍在进行。您可以调用[ListAScripts](~~472574~~)查询可编程脚本的创建状态：

   - 当可编程脚本处于**Creating**状态时，表示可编程脚本正在创建中。

   - 当可编程脚本处于**Available**状态时，表示可编程脚本创建成功。',
    ),
    'DeleteAScripts' => 
    array (
      'summary' => '删除可编程脚本。',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '幂等标识',
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => 'f516e84e-fc0c-4c2d-a461-6cd77******',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'title' => ' 是否只预检此次请求',
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会删除可编程脚本。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'AScriptIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '脚本id列表',
            'description' => '可编程脚本ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '可编程脚本ID。

一次最多支持删除4个可编程脚本。',
              'type' => 'string',
              'required' => true,
              'example' => 'as-59hl7uu******',
            ),
            'required' => true,
            'maxItems' => 10,
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
            'description' => '删除可编程脚本。',
            'type' => 'object',
            'properties' => 
            array (
              'JobId' => 
              array (
                'title' => '异步任务Id',
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => '03cf3fe1-ab37-479b-92a6-b481d762****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1B7B7695-3596-50C8-B739-030C******',
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
            'errorCode' => 'ResourceNotFound.AScript',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectStatus.Listener',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.CrossListenerAScripts',
            'errorMessage' => 'The operation is not allowed because of %s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"03cf3fe1-ab37-479b-92a6-b481d762****\\",\\n  \\"RequestId\\": \\"1B7B7695-3596-50C8-B739-030C******\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteAScriptsResponse>\\n    <JobId>03cf3fe1-ab37-479b-92a6-b481d762****</JobId>\\n    <RequestId>1B7B7695-3596-50C8-B739-030C6C685E61</RequestId>\\n</DeleteAScriptsResponse>","errorExample":""}]',
      'title' => '删除可编程脚本',
      'description' => '**DeleteAScripts**接口属于异步接口，即系统返回一个请求ID，但可编程脚本尚未删除成功，系统后台的删除任务仍在进行。您可以调用[ListAScripts](~~472574~~)查询可编程脚本的删除状态：

- 当可编程脚本处于**Deleting**状态时，表示可编程脚本正在删除中。

- 当查询不到该可编程脚本时，表示该可编程脚本删除成功。',
    ),
    'ListAScripts' => 
    array (
      'summary' => '查询可编程脚本列表。',
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '标记当前开始读取的位置，置空表示从头开始',
            'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
            'type' => 'string',
            'required' => false,
            'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '本次读取的最大数据记录数量',
            'description' => '本次读取的最大数据记录数。

取值：**1**~**100**。

默认值：**20**，表示用户没有传入数据。

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '监听ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '监听ID，一次最多支持查询20个监听。',
              'type' => 'string',
              'required' => false,
              'example' => 'lsn-9v9b8576m2laih****',
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'AScriptIds',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '可编程脚本ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '可编程脚本ID，一次最多支持查询20个ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'as-aznwocxofkakf7****',
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'AScriptNames',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '可编程脚本名称列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '可编程脚本名称，一次最多支持查询10个名称。',
              'type' => 'string',
              'required' => false,
              'example' => 'test',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '本次请求条件下返回的总数据记录数。

> 此参数为可选，默认可不返回。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1000',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2CA81429-F160-593A-8AB5-A2A9617845B9',
              ),
              'NextToken' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'required' => true,
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'MaxResults' => 
              array (
                'title' => 'MaxResults本次请求所返回的最大记录条数',
                'description' => '本次请求所返回的最大记录条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'AScripts' => 
              array (
                'title' => '可编程脚本列表',
                'description' => '可编程脚本信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '可编程脚本信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AScriptId' => 
                    array (
                      'title' => '脚本id',
                      'description' => '可编程脚本ID。',
                      'type' => 'string',
                      'example' => 'as-aznwocxofkakf7****',
                    ),
                    'AScriptName' => 
                    array (
                      'title' => '脚本名称',
                      'description' => '可编程脚本名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Enabled' => 
                    array (
                      'title' => '是否启用',
                      'description' => '可编程脚本是否启用。取值：

- **true**：启用。

- **false**：不启用。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ScriptContent' => 
                    array (
                      'title' => '脚本内容',
                      'description' => '可编程脚本内容。',
                      'type' => 'string',
                      'example' => '{test}',
                    ),
                    'AScriptStatus' => 
                    array (
                      'title' => '脚本状态',
                      'description' => '可编程脚本状态。取值：

- **Creating**：表示创建中。

- **Available**：表示创建或变配成功。

- **Configuring**：表示变配中。

- **Deleting**：表示删除中。',
                      'type' => 'string',
                      'example' => 'Available',
                    ),
                    'ListenerId' => 
                    array (
                      'title' => '监听id',
                      'description' => '监听ID。',
                      'type' => 'string',
                      'example' => 'lsn-t0w1m9r6suiwmc****',
                    ),
                    'LoadBalancerId' => 
                    array (
                      'title' => '实例id',
                      'description' => '应用型负载均衡实例的ID。',
                      'type' => 'string',
                      'example' => 'alb-vv9rg2ub31tyec****',
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
            'errorCode' => 'Forbidden.LoadBalancer',
            'errorMessage' => 'Authentication has failed for LoadBalancer.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1000,\\n  \\"RequestId\\": \\"2CA81429-F160-593A-8AB5-A2A9617845B9\\",\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 50,\\n  \\"AScripts\\": [\\n    {\\n      \\"AScriptId\\": \\"as-aznwocxofkakf7****\\",\\n      \\"AScriptName\\": \\"test\\",\\n      \\"Enabled\\": true,\\n      \\"ScriptContent\\": \\"{test}\\",\\n      \\"AScriptStatus\\": \\"Available\\",\\n      \\"ListenerId\\": \\"lsn-t0w1m9r6suiwmc****\\",\\n      \\"LoadBalancerId\\": \\"alb-vv9rg2ub31tyec****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListAScriptsResponse>\\n    <TotalCount>1000</TotalCount>\\n    <RequestId>2CA81429-F160-593A-8AB5-A2A9617845B9</RequestId>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>50</MaxResults>\\n    <AScripts>\\n        <AScriptId>as-aznwocxofkakf7****</AScriptId>\\n        <AScriptName>test</AScriptName>\\n        <Enabled>true</Enabled>\\n        <ScriptContent>{test}</ScriptContent>\\n        <AScriptStatus>Available</AScriptStatus>\\n        <ListenerId>lsn-t0w1m9r6suiwmc****</ListenerId>\\n        <LoadBalancerId>alb-vv9rg2ub31tyec****</LoadBalancerId>\\n    </AScripts>\\n</ListAScriptsResponse>","errorExample":""}]',
      'title' => '查询可编程脚本列表',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'alb.cn-qingdao.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'alb.cn-beijing.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'alb.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'alb.cn-wulanchabu.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'alb.cn-hangzhou.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'alb.cn-shanghai.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'alb.cn-shenzhen.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'alb.cn-chengdu.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'alb.cn-hongkong.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'alb.ap-northeast-1.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'alb.ap-southeast-1.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'alb.ap-southeast-2.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'alb.ap-southeast-3.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'alb.ap-southeast-5.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'alb.us-east-1.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'alb.us-west-1.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'alb.eu-west-1.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'alb.eu-central-1.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'alb.ap-south-1.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'ap-northeast-2',
      'endpoint' => 'alb.ap-northeast-2.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'alb.cn-guangzhou.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-nanjing',
      'endpoint' => 'alb.cn-nanjing.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'ap-southeast-7',
      'endpoint' => 'alb.ap-southeast-7.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'ap-southeast-6',
      'endpoint' => 'alb.ap-southeast-6.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-fuzhou',
      'endpoint' => 'alb.cn-fuzhou.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'alb.cn-shanghai-finance-1.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'alb.cn-shenzhen-finance-1.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'alb.cn-beijing-finance-1.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'me-central-1',
      'endpoint' => 'alb.me-central-1.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-wuhan-lr',
      'endpoint' => 'alb.cn-wuhan-lr.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'alb.cn-hangzhou.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'alb.cn-heyuan.aliyuncs.com',
    ),
  ),
);
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Nlb',
    'version' => '2022-04-30',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 192387,
      'title' => '监控',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeHdMonitorRegionConfig',
        1 => 'SetHdMonitorRegionConfig',
      ),
    ),
    1 => 
    array (
      'id' => 175130,
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
      'id' => 175092,
      'title' => '实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateLoadBalancer',
        1 => 'DeleteLoadBalancer',
        2 => 'UpdateLoadBalancerAddressTypeConfig',
        3 => 'UpdateLoadBalancerAttribute',
        4 => 'UpdateLoadBalancerZones',
        5 => 'EnableLoadBalancerIpv6Internet',
        6 => 'DisableLoadBalancerIpv6Internet',
        7 => 'LoadBalancerLeaveSecurityGroup',
        8 => 'LoadBalancerJoinSecurityGroup',
        9 => 'UpdateLoadBalancerProtection',
        10 => 'ListLoadBalancers',
        11 => 'GetLoadBalancerAttribute',
        12 => 'StartShiftLoadBalancerZones',
        13 => 'CancelShiftLoadBalancerZones',
      ),
    ),
    3 => 
    array (
      'id' => 175084,
      'title' => '监听',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateListener',
        1 => 'DeleteListener',
        2 => 'StartListener',
        3 => 'StopListener',
        4 => 'UpdateListenerAttribute',
        5 => 'ListListeners',
        6 => 'GetListenerAttribute',
        7 => 'GetListenerHealthStatus',
      ),
    ),
    4 => 
    array (
      'id' => 175131,
      'title' => '监听证书',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListListenerCertificates',
        1 => 'AssociateAdditionalCertificatesWithListener',
        2 => 'DisassociateAdditionalCertificatesWithListener',
      ),
    ),
    5 => 
    array (
      'id' => 175112,
      'title' => '服务器组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateServerGroup',
        1 => 'AddServersToServerGroup',
        2 => 'DeleteServerGroup',
        3 => 'RemoveServersFromServerGroup',
        4 => 'UpdateServerGroupAttribute',
        5 => 'UpdateServerGroupServersAttribute',
        6 => 'ListServerGroups',
        7 => 'ListServerGroupServers',
      ),
    ),
    6 => 
    array (
      'id' => 175103,
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
      'id' => 175106,
      'title' => '安全策略',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateSecurityPolicy',
        1 => 'DeleteSecurityPolicy',
        2 => 'UpdateSecurityPolicyAttribute',
        3 => 'ListSecurityPolicy',
        4 => 'ListSystemSecurityPolicy',
      ),
    ),
    8 => 
    array (
      'id' => 183551,
      'title' => '资源组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'MoveResourceGroup',
      ),
    ),
    9 => 
    array (
      'id' => 175122,
      'title' => '异步任务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetJobStatus',
      ),
    ),
    10 => 
    array (
      'id' => 175132,
      'title' => '标签',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'TagResources',
        1 => 'UntagResources',
        2 => 'ListTagResources',
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
    'DescribeHdMonitorRegionConfig' => 
    array (
      'summary' => '查询秒级监控存储配置。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'add 必选',
            'description' => '资源所在的地域ID。',
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
            'title' => 'RpcResponse<GetJodResponse>',
            'description' => 'RpcResponse<GetJodResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'RegionId' => 
              array (
                'description' => '资源所在的地域ID。

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'LogProject' => 
              array (
                'description' => '日志服务LogProject的名称。',
                'type' => 'string',
                'example' => 'hdmonitor-cn-hangzhou-223794579283657556
',
              ),
              'MetricStore' => 
              array (
                'description' => '日志服务MetricStore的名称。',
                'type' => 'string',
                'example' => 'hdmonitor-cn-hangzhou-metricStore-1',
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
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DescribeHDMonitor.Fail',
            'errorMessage' => 'DescribeHDMonitor Fail.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"LogProject\\": \\"hdmonitor-cn-hangzhou-223794579283657556\\\\n\\",\\n  \\"MetricStore\\": \\"hdmonitor-cn-hangzhou-metricStore-1\\"\\n}","type":"json"}]',
      'title' => '查询秒级监控配置',
      'description' => '查询当前地域配置的秒级监控存储数仓。',
    ),
    'SetHdMonitorRegionConfig' => 
    array (
      'summary' => '配置秒级监控存储。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'add 必选',
            'description' => '资源所在的地域ID。

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LogProject',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'add 必选',
            'description' => '日志服务LogProject的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'hdmonitor-cn-hangzhou-223794579283657556',
          ),
        ),
        2 => 
        array (
          'name' => 'MetricStore',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'add 必选',
            'description' => '日志服务MetricStore的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'hdmonitor-cn-hangzhou-metricStore-1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'RpcResponse<GetJodResponse>',
            'description' => 'RpcResponse<GetJodResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'RegionId' => 
              array (
                'description' => '资源所在的地域ID。

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。 ',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'LogProject' => 
              array (
                'description' => '日志服务LogProject的名称。',
                'type' => 'string',
                'example' => 'hdmonitor-cn-hangzhou-223794579283657556',
              ),
              'MetricStore' => 
              array (
                'description' => '日志服务MetricStore的名称。',
                'type' => 'string',
                'example' => 'hdmonitor-cn-hangzhou-metricStore-1',
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
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EnableHDMonitor.Fail',
            'errorMessage' => 'EnableHDMonitor Fail.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"LogProject\\": \\"hdmonitor-cn-hangzhou-223794579283657556\\",\\n  \\"MetricStore\\": \\"hdmonitor-cn-hangzhou-metricStore-1\\"\\n}","type":"json"}]',
      'title' => '配置秒级监控',
      'description' => '设置秒级监控数仓信息，如果当前地域存在已开启秒级监控的监听，需要先关闭才可以调整秒级监控数仓。',
    ),
    'DescribeRegions' => 
    array (
      'summary' => '查询NLB的可用地域。',
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
          'name' => 'ServiceCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云产品的ServiceCode，仅取值：**nlb**。',
            'type' => 'string',
            'required' => false,
            'example' => 'nlb',
            'default' => 'nlb',
          ),
        ),
        1 => 
        array (
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '支持的语言。取值：

- **zh-CN**：中文
- **en-US**（默认）：英文
- **ja**：日文',
            'type' => 'string',
            'required' => false,
            'example' => 'en-US',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'RpcResponse<DescribeRegionsResponse>',
            'description' => '返回数据的结构。',
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
                  'description' => '地域信息结构。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'LocalName' => 
                    array (
                      'description' => '地域名称。',
                      'type' => 'string',
                      'example' => 'China (Hangzhou)',
                    ),
                    'RegionEndpoint' => 
                    array (
                      'description' => '地域服务的Endpoint地址。',
                      'type' => 'string',
                      'example' => 'nlb.cn-hangzhou.aliyuncs.com',
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
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'System is busy, please try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParam',
            'errorMessage' => 'The param of %s is illegal.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"Regions\\": [\\n    {\\n      \\"LocalName\\": \\"China (Hangzhou)\\",\\n      \\"RegionEndpoint\\": \\"nlb.cn-hangzhou.aliyuncs.com\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <Regions>\\n        <LocalName>华东1（杭州）</LocalName>\\n        <RegionEndpoint>nlb.cn-hangzhou.aliyuncs.com</RegionEndpoint>\\n        <RegionId>cn-hangzhou</RegionId>\\n    </Regions>\\n</DescribeRegionsResponse>","errorExample":""}]',
      'title' => '查询地域',
    ),
    'DescribeZones' => 
    array (
      'summary' => '查询NLB一个地域下的可用区列表。',
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
          'name' => 'ServiceCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云产品的ServiceCode，仅取值：**nlb**。',
            'type' => 'string',
            'required' => false,
            'example' => 'nlb',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区所在的地域ID。您可以调用[DescribeRegions](~~443657~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '支持的语言。取值：

- **zh-CN**：中文
- **en-US**（默认）：英文
- **ja**：日文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh-CN',
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

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
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
            'title' => 'RpcResponse<DescribeZonesResponse>',
            'description' => '返回数据的结构。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'Zones' => 
              array (
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
                      'description' => '可用区名称。',
                      'type' => 'string',
                      'example' => '杭州 可用区G',
                    ),
                    'ZoneId' => 
                    array (
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'IllegalParam.AcceptLanguage',
            'errorMessage' => 'The param of AcceptLanguage[%s] is illegal from bundle %s',
          ),
          1 => 
          array (
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'System is busy, please try again later.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalParam',
            'errorMessage' => 'The param of %s is illegal.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"Zones\\": [\\n    {\\n      \\"LocalName\\": \\"杭州 可用区G\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-g\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeZonesResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <Zones>\\n        <LocalName>华东 1 可用区G</LocalName>\\n        <ZoneId>cn-hangzhou-g</ZoneId>\\n    </Zones>\\n</DescribeZonesResponse>","errorExample":""}]',
      'title' => '查询可用区',
    ),
    'CreateLoadBalancer' => 
    array (
      'summary' => '创建网络型负载均衡实例。',
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
        0 => 
        array (
          'name' => 'LoadBalancerType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '负载均衡的类型，仅取值：**network**，表示网络型负载均衡。',
            'type' => 'string',
            'required' => false,
            'example' => 'network',
            'default' => 'network',
            'enum' => 
            array (
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例名称。

长度为2~128个英文或中文字符，必须以大小写英文字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'NLB1',
          ),
        ),
        2 => 
        array (
          'name' => 'AddressType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例的IPv4地址类型。取值：

- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。
- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。

> 网络型负载均衡双栈实例的IPv6公网需通过[EnableLoadBalancerIpv6Internet](~~445878~~)接口开启。',
            'type' => 'string',
            'required' => true,
            'example' => 'Internet',
            'enum' => 
            array (
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'AddressIpVersion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '协议版本。取值：

- **ipv4**（默认值）：IPv4类型。
- **DualStack**：双栈类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'ipv4',
            'default' => 'ipv4',
            'enum' => 
            array (
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'VpcId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例的专有网络ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vpc-bp1b49rqrybk45nio****',
          ),
        ),
        5 => 
        array (
          'name' => 'ZoneMappings',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '可用区及交换机映射列表。至少需要添加2个可用区，最多支持添加10个可用区。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '可用区及交换机映射列表。至少需要添加2个可用区，最多支持添加10个可用区。',
              'type' => 'object',
              'properties' => 
              array (
                'VSwitchId' => 
                array (
                  'description' => '可用区对应的交换机，每个可用区只能使用一台交换机和一个子网。至少需要添加2个可用区，最多支持添加10个可用区。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'vsw-sersdf****',
                ),
                'ZoneId' => 
                array (
                  'description' => '网络型负载均衡实例的可用区ID。至少需要添加2个可用区，最多支持添加10个可用区。

您可以通过调用[DescribeZones](~~443890~~)接口获取可用区ID。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'cn-hangzhou-a',
                ),
                'PrivateIPv4Address' => 
                array (
                  'title' => '私网ip',
                  'description' => 'IPv4 私网VIP地址。NLB对外提供服务的私网IPv4地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '192.168.10.1',
                ),
                'AllocationId' => 
                array (
                  'title' => '公网ipId',
                  'description' => '公网实例绑定的EIP实例ID，每个可用区对应1个EIP实例ID。至少需要添加2个可用区，最多支持添加10个可用区。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'eip-bp1aedxso6u80u0qf****',
                ),
                'Ipv6Address' => 
                array (
                  'description' => 'IPv6 VIP地址。NLB对外提供服务的IPv6地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '2408:400a:d5:3080:b409:840a:ca:e8e5',
                ),
                'Ipv4LocalAddresses' => 
                array (
                  'description' => 'IPv4 Local地址列表。NLB与后端服务交互的地址列表。
地址个数必须是偶数，且最少2个，最多8个。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => 'IPv4 Local地址。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '192.168.10.2',
                  ),
                  'required' => false,
                  'maxItems' => 8,
                  'minItems' => 2,
                ),
                'Ipv6LocalAddresses' => 
                array (
                  'description' => 'IPv6 Local地址列表。NLB与后端服务交互的地址列表。
地址个数必须是偶数，且最少2个，最多8个。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => 'IPv6 Local地址。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '2408:400a:d5:3080:b409:840a:ca:e8e6',
                  ),
                  'required' => false,
                  'maxItems' => 8,
                  'minItems' => 2,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 10,
            'minItems' => 1,
          ),
        ),
        6 => 
        array (
          'name' => 'BandwidthPackageId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '公网类型实例关联的共享带宽包ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cbwp-bp1vevu8h3ieh****',
          ),
        ),
        7 => 
        array (
          'name' => 'LoadBalancerBillingConfig',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例计费配置。',
            'type' => 'object',
            'properties' => 
            array (
              'PayType' => 
              array (
                'title' => 'PrePay, PostPay',
                'description' => '网络型负载均衡实例的计费类型。

仅取值**PostPay**：表示按量计费。',
                'type' => 'string',
                'required' => false,
                'example' => 'PostPay',
              ),
            ),
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        9 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会创建实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        10 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
        11 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        12 => 
        array (
          'name' => 'DeletionProtectionConfig',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '删除保护配置。',
            'type' => 'object',
            'properties' => 
            array (
              'Enabled' => 
              array (
                'description' => '删除保护状态，取值：

- **true**：开启状态。
- **false**（默认值）：关闭状态。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'Reason' => 
              array (
                'description' => '更改删除保护状态的原因。长度为2~128个英文或中文字符，必须以大小写英文字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                'type' => 'string',
                'required' => false,
                'example' => '实例运行中',
              ),
            ),
            'required' => false,
          ),
        ),
        13 => 
        array (
          'name' => 'ModificationProtectionConfig',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '修改保护配置。',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '网络型负载均衡修改保护状态。取值：

- **NonProtection**：不保护，表示不允许传入保护配置的**Reason**。如果配置了保护配置的**Reason**，则清空其配置信息。
- **ConsoleProtection**：控制台修改保护，此时允许传入保护配置的**Reason**。

> 当取值为**ConsoleProtection**，即开启修改保护后，用户不能通过负载均衡控制台修改实例配置，但可以通过调用API修改实例配置。',
                'type' => 'string',
                'required' => false,
                'example' => 'ConsoleProtection',
              ),
              'Reason' => 
              array (
                'description' => '输入开启修改保护的原因。长度为2~128个英文或中文字符，必须以大小写英文字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。

> 仅在**Status**为**ConsoleProtection**时有效且合法。',
                'type' => 'string',
                'required' => false,
                'example' => '业务保障期',
              ),
            ),
            'required' => false,
          ),
        ),
        14 => 
        array (
          'name' => 'Tag',
          'in' => 'formData',
          'allowEmptyValue' => true,
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。最多支持64个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。支持字符包括字母、数字、下划线 (_)、点 (.)、冒号 (:)、斜线 (/)、等号 (=)、加号 (+)、减号 (-)、@符号 (@) 。

一次调用最多支持添加20个标签。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'env',
                ),
                'Value' => 
                array (
                  'description' => '标签值。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。支持字符包括字母、数字、下划线 (_)、点 (.)、冒号 (:)、斜线 (/)、等号 (=)、加号 (+)、减号 (-)、@符号 (@) 。

一次调用最多支持添加20个标签。',
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
            'title' => 'response',
            'description' => 'response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'LoadbalancerId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'nlb-83ckzc8d4xlp8o****',
              ),
              'OrderId' => 
              array (
                'description' => '网络型负载均衡实例的订单ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20230000',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.OnlyPayByTrafficSupported',
            'errorMessage' => 'The operation is not allowed because of OnlyPayByTrafficSupported.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationFailed.%s',
            'errorMessage' => 'The operation failed because of %s.',
          ),
          2 => 
          array (
            'errorCode' => 'Mismatch.ZoneIdAndVswitchId',
            'errorMessage' => 'The ZoneIdAndVswitchId is mismatched for %s and %s.',
          ),
          3 => 
          array (
            'errorCode' => 'QuotaExceeded.%s',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          4 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.OnlyPostPaidSupported',
            'errorMessage' => 'The operation is not allowed because of OnlyPostPaidSupported.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationFailed.DuplicateZones.',
            'errorMessage' => 'The operation failed because of Can not Specify duplicate zones.',
          ),
          7 => 
          array (
            'errorCode' => 'ResourceNotEnough.VSwitchIp',
            'errorMessage' => 'The specified resource of VSwitchIp is not enough.',
          ),
          8 => 
          array (
            'errorCode' => 'DuplicatedParam.AllocationId',
            'errorMessage' => 'The param of AllocationId is duplicated.',
          ),
          9 => 
          array (
            'errorCode' => 'ResourceInConfiguring.VswitchId',
            'errorMessage' => 'The specified resource of VswitchId is being configured, please try again later.',
          ),
          10 => 
          array (
            'errorCode' => 'IllegalParam',
            'errorMessage' => 'The param of %s is illegal.',
          ),
          11 => 
          array (
            'errorCode' => 'OperationFailed.UnpaidBill',
            'errorMessage' => 'The operation failed because of UnpaidBill.',
          ),
          12 => 
          array (
            'errorCode' => 'OperationDenied.ServiceLinkedRoleNotExist',
            'errorMessage' => 'The operation is not allowed because of ServiceLinkedRoleNotExist.',
          ),
          13 => 
          array (
            'errorCode' => 'ResourceAlreadyAssociated.AllocationId',
            'errorMessage' => 'The specified resource of %s is already associated.',
          ),
          14 => 
          array (
            'errorCode' => 'OperationFailed.vSwitchNotSupportIpv6',
            'errorMessage' => 'The operation failed because of vSwitchNotSupportIpv6.',
          ),
          15 => 
          array (
            'errorCode' => 'InvalidZones',
            'errorMessage' => 'The current zone list is illegal.',
          ),
          16 => 
          array (
            'errorCode' => 'QuotaExceeded.QuotaInsufficient',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          17 => 
          array (
            'errorCode' => 'ResourceInUse.IP',
            'errorMessage' => 'The specified resource of IP is in use.',
          ),
          18 => 
          array (
            'errorCode' => 'OperationFailed.CreateOrderError',
            'errorMessage' => 'Operation failed because CreateOrderError.',
          ),
          19 => 
          array (
            'errorCode' => 'OperationFailed.NotExist.ResourceGroup',
            'errorMessage' => 'Operation failed because ResourceGroup not exist.',
          ),
          20 => 
          array (
            'errorCode' => 'IllegalParam.loadBalancerName',
            'errorMessage' => 'Param loadBalancerName is illegal.',
          ),
          21 => 
          array (
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'System is busy, please try again later.',
          ),
          22 => 
          array (
            'errorCode' => 'MissingParam.%s',
            'errorMessage' => 'The parameter of %s is missing.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnauthorizedZone',
            'errorMessage' => 'The specified zone of %s is not authorized.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
          2 => 
          array (
            'errorCode' => 'UnauthorizedRegion',
            'errorMessage' => 'The specified region of %s is not authorized.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.VSwitch',
            'errorMessage' => 'The specified resource of vSwitch is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.Vpc',
            'errorMessage' => 'The specified resource of Vpc is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"LoadbalancerId\\": \\"nlb-83ckzc8d4xlp8o****\\",\\n  \\"OrderId\\": 20230000\\n}","errorExample":""},{"type":"xml","example":"<CreateLoadBalancerResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <LoadbalancerId>nlb-83ckzc8d4xlp8o****</LoadbalancerId>\\n    <OrderId>20230000</OrderId>\\n</CreateLoadBalancerResponse>","errorExample":""}]',
      'title' => '创建网络型负载均衡实例',
      'description' => '- 创建网络型负载均衡实例时会自动为用户创建AliyunServiceRoleForNlb SLR角色。
- **CreateLoadBalancer**接口属于异步接口，即系统返回一个实例ID，但该网络型负载均衡实例尚未创建成功，系统后台的创建任务仍在进行。您可以调用[GetLoadBalancerAttribute](~~445873~~)查询网络型负载均衡实例的创建状态：
    - 当网络型负载均衡实例处于**Provisioning**状态时，表示网络型负载均衡实例正在创建中。
    - 当网络型负载均衡实例处于**Active**状态时，表示网络型负载均衡实例创建成功。',
    ),
    'DeleteLoadBalancer' => 
    array (
      'summary' => '删除网络型负载均衡实例。',
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
        0 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'nlb-wb7r6dlwetvt5j****',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会删除实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
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
            'title' => 'response',
            'description' => '删除网络型负载均衡实例。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF34B540710',
              ),
              'JobId' => 
              array (
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
            'errorCode' => 'OperationDenied.%s',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceInConfiguring.loadbalancer',
            'errorMessage' => 'The specified resource of loadbalancer is being configured, please try again later.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceInCreating.loadbalancer',
            'errorMessage' => 'The specified resource of loadbalancer is creating, please try again later.',
          ),
          3 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.DeletionProtectionEnabled',
            'errorMessage' => 'The operation is not allowed because of DeletionProtectionEnabled.',
          ),
          5 => 
          array (
            'errorCode' => 'IncorrectStatus.loadbalancer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          6 => 
          array (
            'errorCode' => 'Conflict.Lock',
            'errorMessage' => 'The Lock [%s] is conflict.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.loadBalancer',
            'errorMessage' => 'The specified resource of loadbalancer is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteLoadBalancerResponse>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</DeleteLoadBalancerResponse>","errorExample":""}]',
      'title' => '删除负载均衡实例',
    ),
    'UpdateLoadBalancerAddressTypeConfig' => 
    array (
      'summary' => '变更网络型负载均衡NLB实例的IPv4地址的网络类型。',
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
          'name' => 'LoadBalancerId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'nlb-83ckzc8d4xlp8o****',
          ),
        ),
        1 => 
        array (
          'name' => 'AddressType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '目标网络类型。取值：

- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。
- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。',
            'type' => 'string',
            'required' => true,
            'example' => 'Internet',
            'enum' => 
            array (
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneMappings',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '可用区及交换机映射列表，最多支持10个可用区。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '可用区及交换机映射列表。',
              'type' => 'object',
              'properties' => 
              array (
                'VSwitchId' => 
                array (
                  'description' => '可用区对应的交换机，每个可用区只能使用一台交换机和一个子网。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vsw-bp10ttov87felojcn****',
                ),
                'ZoneId' => 
                array (
                  'description' => '网络型负载均衡实例的可用区ID。

您可以通过调用[DescribeZones](~~443890~~)接口获取可用区ID对应的可用区信息。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cn-hangzhou-a',
                ),
                'AllocationId' => 
                array (
                  'title' => '公网ipId',
                  'description' => '弹性公网IP实例ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'eip-bp1aedxso6u80u0qf****',
                ),
                'EipType' => 
                array (
                  'description' => '公网EIP的类型。取值：

- **Common**：弹性公网IP，简称EIP。
- **Anycast**：任播弹性公网IP，简称Anycast EIP。

> **AddressType**配置为**Internet**时，需要配置该参数。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Common',
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
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：

- **true**：发送检查请求，不会更新实例的网络类型。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
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
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'title' => 'response',
            'description' => '变更NLB实例的IPv4地址的网络类型。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'JobId' => 
              array (
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
            'errorCode' => 'DuplicatedParam.AllocationId',
            'errorMessage' => 'The param of AllocationId is duplicated.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceInConfiguring.loadbalancer',
            'errorMessage' => 'The specified resource of loadbalancer is being configured, please try again later.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.EipAlreadyInBandwidthPackage',
            'errorMessage' => 'The operation is not allowed because of EipAlreadyInBandwidthPackage.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceInConfiguring.%s',
            'errorMessage' => 'The specified resource of %s is being configured, please try again later.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.AddressTypeNotChanged',
            'errorMessage' => 'The operation is not allowed because of AddressTypeNotChanged.',
          ),
          5 => 
          array (
            'errorCode' => 'Mismatch.ZoneIdAndVswitchId',
            'errorMessage' => 'The ZoneIdAndVswitchId is mismatched for %s and %s.',
          ),
          6 => 
          array (
            'errorCode' => 'TagInvokeError',
            'errorMessage' => 'listTagsByResourceIds: InvalidResourceId.NotFound : The specified ResourceIds are not found in our records.',
          ),
          7 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
          8 => 
          array (
            'errorCode' => 'IllegalParam',
            'errorMessage' => 'The param of %s is illegal.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.loadBalancer',
            'errorMessage' => 'The specified resource of loadbalancer is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.AnycastInstance',
            'errorMessage' => 'The specified resource of AnycastInstance is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateLoadBalancerAddressTypeConfigResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</UpdateLoadBalancerAddressTypeConfigResponse>","errorExample":""}]',
      'title' => '变更网络类型配置',
      'description' => '- 您已创建NLB实例，请参见[CreateLoadBalancer](~~445868~~)。
- 您可以通过[GetLoadBalancerAttribute](~~445873~~)接口查询变更后NLB实例的**AddressType**取值。
-  **UpdateLoadBalancerAddressTypeConfig**属于异步接口，即系统返回一个请求ID，但该NLB实例IPv4地址的网络类型尚未变更成功，系统后台的变更任务仍在进行。您可以调用[GetJobStatus](~~445904~~)查询IPv4地址网络类型变更状态：
    - 当任务状态处于**Succeeded**时，表示实例IPv4地址的网络类型变更成功。
    - 当任务状态处于**Processing**时，表示实例IPv4地址的网络类型变更中，在该状态下，您只能执行查询操作，不能执行其他操作。',
    ),
    'UpdateLoadBalancerAttribute' => 
    array (
      'summary' => '更新网络型负载均衡实例名称等属性。',
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
          'name' => 'LoadBalancerId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'nlb-wb7r6dlwetvt5j****',
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例名称。

长度为2~128个英文或中文字符，必须以字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'NLB1',
          ),
        ),
        2 => 
        array (
          'name' => 'CrossZoneEnabled',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例是否开启跨可用区。取值：

- **true**：开启。
- **false**：关闭。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会更新实例信息。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        6 => 
        array (
          'name' => 'Cps',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例的每秒新建连接限速值。取值范围：**1**~**1000000**。',
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
            'title' => 'response',
            'description' => '更新网络型负载均衡实例名称等属性。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7294679F-08DE-16D4-8E5D-1625685DC10B',
              ),
              'JobId' => 
              array (
                'description' => '异步任务ID。',
                'type' => 'string',
                'example' => 'aab74cfa-3bc4-48fc-80fc-0101da5a****',
              ),
            ),
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
            'errorMessage' => 'System is busy, please try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceInConfiguring.loadbalancer',
            'errorMessage' => 'The specified resource of loadbalancer is being configured, please try again later.',
          ),
          2 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalParam.loadBalancerName',
            'errorMessage' => 'Param loadBalancerName is illegal.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.loadBalancer',
            'errorMessage' => 'The specified resource of loadbalancer is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7294679F-08DE-16D4-8E5D-1625685DC10B\\",\\n  \\"JobId\\": \\"aab74cfa-3bc4-48fc-80fc-0101da5a****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateLoadBalancerAttributeResponse>\\n    <RequestId>7294679F-08DE-16D4-8E5D-1625685DC10B</RequestId>\\n    <JobId>aab74cfa-3bc4-48fc-80fc-0101da5a****</JobId>\\n</UpdateLoadBalancerAttributeResponse>","errorExample":""}]',
      'title' => '更新负载均衡实例属性',
    ),
    'UpdateLoadBalancerZones' => 
    array (
      'summary' => '修改网络型负载均衡实例可用区及可用区属性。',
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
          'name' => 'LoadBalancerId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'nlb-83ckzc8d4xlp8o****',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneMappings',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '可用区及交换机映射列表，最多支持添加10个可用区。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '可用区及交换机映射列表，最多支持添加10个可用区。',
              'type' => 'object',
              'properties' => 
              array (
                'VSwitchId' => 
                array (
                  'description' => '可用区对应的交换机，每个可用区默认使用一台交换机和一个子网。
',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'vsw-bp1rmcrwg3erh1fh8****',
                ),
                'ZoneId' => 
                array (
                  'description' => '可用区ID，您可以通过调用[DescribeZones](~~443890~~)接口获取。

',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'cn-hangzhou-a',
                ),
                'PrivateIPv4Address' => 
                array (
                  'title' => '私网ip',
                  'description' => '私网IP地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '192.168.36.16',
                ),
                'AllocationId' => 
                array (
                  'title' => '公网ipId',
                  'description' => '弹性公网IP或任播弹性公网IP的实例ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'eip-bp1aedxso6u80u0qf****',
                ),
                'EipType' => 
                array (
                  'description' => '公网EIP的类型。取值：

- **Common**：弹性公网IP，简称EIP。
- **Anycast**：任播弹性公网IP，简称Anycast EIP。

> 支持绑定Anycast EIP的地域见[使用限制
](~~470000~~)，**AddressType**配置为**Internet**时，需要配置该参数。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Common',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 10,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会修改实例可用区属性。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP_2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
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
            'title' => 'response',
            'description' => 'response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'JobId' => 
              array (
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
            'errorCode' => 'ResourceInCreating.loadbalancer',
            'errorMessage' => 'The specified resource of loadbalancer is creating, please try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.ProtectedPrivateIPv4AddressChanged',
            'errorMessage' => 'The operation is not allowed because of ProtectedPrivateIPv4AddressChanged.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationFailed.vSwitchNotSupportIpv6',
            'errorMessage' => 'The operation failed because of vSwitchNotSupportIpv6.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.%s',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.ZoneVSwitchChanged',
            'errorMessage' => 'The operation is not allowed because of ZoneVSwitchChanged.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidZones',
            'errorMessage' => 'The current zone list is illegal.',
          ),
          6 => 
          array (
            'errorCode' => 'ResourceInConfiguring.loadbalancer',
            'errorMessage' => 'The specified resource of loadbalancer is being configured, please try again later.',
          ),
          7 => 
          array (
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'System is busy, please try again later.',
          ),
          8 => 
          array (
            'errorCode' => 'ResourceNotEnough.VSwitchIp',
            'errorMessage' => 'The specified resource of VSwitchIp is not enough.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnauthorizedZone',
            'errorMessage' => 'The specified zone of %s is not authorized.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.loadBalancer',
            'errorMessage' => 'The specified resource of loadbalancer is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.VSwitch',
            'errorMessage' => 'The specified resource of vSwitch is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateLoadBalancerZonesResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</UpdateLoadBalancerZonesResponse>","errorExample":""}]',
      'title' => '更新实例可用区及可用区属性',
      'description' => '每次调用该接口时，请确保您传入该NLB实例的所有可用区参数，包括存量和新增的可用区。如您未传入存量的可用区参数，存量可用区将会被删掉。

前提条件：
- 您已创建NLB实例，请参见[CreateLoadBalancer](~~445868~~)。
- 您可以通过[GetLoadBalancerAttribute](~~445873~~)接口查询该NLB实例的可用区及可用区属性。
-  **UpdateLoadBalancerZones**属于异步接口，即系统返回一个请求ID，但该NLB实例可用区及可用区属性尚未修改成功，系统后台的变更任务仍在进行。您可以调用[GetJobStatus](~~445904~~)查询修改状态：
    - 当任务状态处于**Succeeded**时，表示实例可用区及可用区属性修改成功。
    - 当任务状态处于**Processing**时，表示实例可用区及可用区属性正在修改中，在该状态下，您只能执行查询操作，不能执行其他操作。',
    ),
    'EnableLoadBalancerIpv6Internet' => 
    array (
      'summary' => '将双栈NLB实例的IPv6地址从私网变更为公网。',
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
          'name' => 'LoadBalancerId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'nlb-83ckzc8d4xlp8o****',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会变更Pv6类型实例的网络类型。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。
',
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
            'title' => 'response',
            'description' => '双栈NLB实例的IPv6地址从私网变更为公网。',
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
            'errorCode' => 'OperationDenied.NonDualStackInstance',
            'errorMessage' => 'The operation is not allowed because of NonDualStackInstance.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceInCreating.%s',
            'errorMessage' => 'The specified resource of %s is creating, please try again later.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceInCreating.loadbalancer',
            'errorMessage' => 'The specified resource of loadbalancer is creating, please try again later.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.loadBalancer',
            'errorMessage' => 'The specified resource of loadbalancer is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.Ipv6Gateway',
            'errorMessage' => 'The specified resource of Ipv6Gateway is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<EnableLoadBalancerIpv6InternetResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</EnableLoadBalancerIpv6InternetResponse>","errorExample":""}]',
      'title' => '开启NLB实例IPv6公网',
    ),
    'DisableLoadBalancerIpv6Internet' => 
    array (
      'summary' => '将双栈NLB实例的Pv6地址从公网变更为私网。',
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
          'name' => 'LoadBalancerId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'nlb-83ckzc8d4xlp8o****',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会变更Pv6类型实例的网络类型。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
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
            'title' => 'response',
            'description' => 'response',
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
            'errorCode' => 'OperationDenied.Ipv6IntranetInstance',
            'errorMessage' => 'The operation is not allowed because of Ipv6IntranetInstance.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.NonDualStackInstance',
            'errorMessage' => 'The operation is not allowed because of NonDualStackInstance.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceInConfiguring.loadbalancer',
            'errorMessage' => 'The specified resource of loadbalancer is being configured, please try again later.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.loadBalancer',
            'errorMessage' => 'The specified resource of loadbalancer is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<DisableLoadBalancerIpv6InternetResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</DisableLoadBalancerIpv6InternetResponse>","errorExample":""}]',
      'title' => '关闭NLB实例IPv6公网',
    ),
    'LoadBalancerLeaveSecurityGroup' => 
    array (
      'summary' => '为网络型负载均衡实例解绑安全组。',
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
          'name' => 'SecurityGroupIds',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待解绑的安全组ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '待解绑的安全组ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'sg-bp1fg655nh68xyz9****',
            ),
            'required' => true,
            'maxItems' => 10,
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'nlb-83ckzc8d4xlp8o****',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会为实例解绑安全组。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。  ',
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
            'title' => 'response',
            'description' => 'response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'JobId' => 
              array (
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
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'System is busy, please try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceInConfiguring.loadbalancer',
            'errorMessage' => 'The specified resource of loadbalancer is being configured, please try again later.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.SecurityGroup',
            'errorMessage' => 'Authentication is failed for SecurityGroup.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.%s',
            'errorMessage' => 'The specified resource of %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.loadBalancer',
            'errorMessage' => 'The specified resource of loadbalancer is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<LoadBalancerLeaveSecurityGroupResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</LoadBalancerLeaveSecurityGroupResponse>","errorExample":""}]',
      'title' => '解绑安全组',
      'description' => 'LoadBalancerLeaveSecurityGroup接口属于异步接口，即系统返回一个请求ID，但该网络型负载均衡实例的安全组尚未解绑成功，系统后台的解绑任务仍在进行。您可以调用[GetJobStatus](~~445904~~)查询安全组的解绑状态：

- 当任务状态处于**Succeeded**时，表示安全组解绑成功。
- 当任务状态处于**Processing**时，表示安全组正在解绑中，在该状态下，您只能执行查询操作，不能执行其他操作。',
    ),
    'LoadBalancerJoinSecurityGroup' => 
    array (
      'summary' => '为网络型负载均衡实例绑定已创建的安全组。',
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
          'name' => 'SecurityGroupIds',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '安全组ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '安全组ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'sg-bp1fg655nh68xyz9****',
            ),
            'required' => true,
            'maxItems' => 10,
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待绑定安全组的网络型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'nlb-83ckzc8d4xlp8o****',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会为实例绑定安全组。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
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
            'title' => 'response',
            'description' => '为NLB实例绑定已创建的安全组。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'JobId' => 
              array (
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
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'System is busy, please try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'QuotaExceeded.QuotaInsufficient',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          2 => 
          array (
            'errorCode' => 'Conflict.SecurityGroup',
            'errorMessage' => 'The SecurityGroup [%s] is conflict.',
          ),
          3 => 
          array (
            'errorCode' => 'Mismatch.%s',
            'errorMessage' => 'The %s is mismatched for %s and %s.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.%s',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          5 => 
          array (
            'errorCode' => 'TagInvokeError',
            'errorMessage' => 'listTagsByResourceIds: InvalidResourceId.NotFound : The specified ResourceIds are not found in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'Conflict.Lock',
            'errorMessage' => 'The Lock [%s] is conflict.',
          ),
          7 => 
          array (
            'errorCode' => 'Mismatch.vpc',
            'errorMessage' => 'The Vpc is mismatched for %s and %s.',
          ),
          8 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
          9 => 
          array (
            'errorCode' => 'ResourceInCreating.loadbalancer',
            'errorMessage' => 'The specified resource of loadbalancer is creating, please try again later.',
          ),
          10 => 
          array (
            'errorCode' => 'ResourceInConfiguring.loadbalancer',
            'errorMessage' => 'The specified resource of loadbalancer is being configured, please try again later.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.SecurityGroup',
            'errorMessage' => 'Authentication is failed for SecurityGroup.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.loadBalancer',
            'errorMessage' => 'The specified resource of loadbalancer is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.SecurityGroup',
            'errorMessage' => 'The specified resource of SecurityGroup is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<LoadBalancerJoinSecurityGroupResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</LoadBalancerJoinSecurityGroupResponse>","errorExample":""}]',
      'title' => '绑定安全组',
      'description' => '- 请确保您已创建安全组。创建安全组，请参见[CreateSecurityGroup](~~25553~~)。
- 一个网络型负载均衡实例最多支持加入4个安全组。
- 您可以通过[GetLoadBalancerAttribute](~~214362~~)接口查询实例绑定的安全组。
- LoadBalancerJoinSecurityGroup属于异步接口，即系统返回一个请求ID，但该网络型负载均衡实例绑定安全组尚未成功，系统后台的绑定任务仍在进行。您可以调用[GetJobStatus](~~445904~~)查询安全组的绑定状态：
    - 当任务状态处于**Succeeded**时，表示安全组绑定成功。
    - 当任务状态处于**Processing**时，表示安全组正在绑定中，在该状态下，您只能执行查询操作，不能执行其他操作。',
    ),
    'UpdateLoadBalancerProtection' => 
    array (
      'summary' => '开启或关闭删除保护功能，及更新修改保护功能。',
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
          'name' => 'DeletionProtectionEnabled',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否开启删除保护。取值：

- **true**：开启。
- **false**：关闭。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        1 => 
        array (
          'name' => 'DeletionProtectionReason',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输入开启删除保护的原因。长度为2~128个英文或中文字符，必须以字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。

> 仅在**DeletionProtectionEnabled**为**true**时该参数有效且合法。',
            'type' => 'string',
            'required' => false,
            'example' => '实例使用中',
          ),
        ),
        2 => 
        array (
          'name' => 'ModificationProtectionStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡修改保护状态。取值：

- **NonProtection**：不保护，表示不允许传入**ModificationProtectionReason**。如果配置了保护配置的**ModificationProtectionReason**，则清空其配置信息。
- **ConsoleProtection**：控制台修改保护，此时允许传入**ModificationProtectionReason**。

> 当取值为**ConsoleProtection**，即开启修改保护后，用户不能通过负载均衡控制台修改实例配置，但可以通过调用API修改实例配置。',
            'type' => 'string',
            'required' => false,
            'example' => 'ConsoleProtection',
          ),
        ),
        3 => 
        array (
          'name' => 'ModificationProtectionReason',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输入开启修改保护的原因。长度为2~128个英文或中文字符，必须以字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。

> 仅在**Status**为**ConsoleProtection**时该参数有效且合法。',
            'type' => 'string',
            'required' => false,
            'example' => '托管实例',
          ),
        ),
        4 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'nlb-83ckzc8d4xlp8o****',
          ),
        ),
        5 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会更新修改保护和删除保护。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。 ',
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
            'title' => 'response',
            'description' => '更新修改删除保护。',
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
            'errorCode' => 'ResourceInConfiguring.%s',
            'errorMessage' => 'The specified resource of %s is being configured, please try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParam',
            'errorMessage' => 'The param of %s is illegal.',
          ),
          2 => 
          array (
            'errorCode' => 'IdempotenceSignatureMismatch',
            'errorMessage' => 'The idempotence token of request is same with the prev one, but the signature is different.',
          ),
          3 => 
          array (
            'errorCode' => 'Conflict.Lock',
            'errorMessage' => 'The Lock [%s] is conflict.',
          ),
          4 => 
          array (
            'errorCode' => 'ResourceInConfiguring.loadbalancer',
            'errorMessage' => 'The specified resource of loadbalancer is being configured, please try again later.',
          ),
          5 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
          6 => 
          array (
            'errorCode' => 'IllegalParam.deletionProtectionReason',
            'errorMessage' => 'The param of deletionProtectionReason is illegal.',
          ),
          7 => 
          array (
            'errorCode' => 'IllegalParam.modificationProtectionReason',
            'errorMessage' => 'The param of modificationProtectionReason is illegal.',
          ),
          8 => 
          array (
            'errorCode' => 'ResourceInCreating.loadbalancer',
            'errorMessage' => 'The specified resource of loadbalancer is creating, please try again later.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.loadBalancer',
            'errorMessage' => 'The specified resource of loadbalancer is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateLoadBalancerProtectionResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n</UpdateLoadBalancerProtectionResponse>","errorExample":""}]',
      'title' => '修改删除保护',
      'description' => '> 您可以通过[GetLoadBalancerAttribute](~~445873~~)接口查询删除保护和修改保护详细信息。',
    ),
    'ListLoadBalancers' => 
    array (
      'summary' => '查询已创建的网络型负载均衡实例的基本信息。',
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
          'name' => 'LoadBalancerType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '负载均衡类型',
            'description' => '负载均衡类型。仅取值：**network**，表示网络型负载均衡。',
            'type' => 'string',
            'required' => false,
            'example' => 'network',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '负载均衡拥有的可用区',
            'description' => '可用区名称。您可以通过调用[DescribeZones](~~443890~~)接口获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-a',
          ),
        ),
        2 => 
        array (
          'name' => 'VpcIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '专有网络唯一标识',
            'description' => '网络型负载均衡实例的专有网络ID。一次最多支持查询10个VPC ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '网络型负载均衡实例的专有网络ID。一次最多支持查询10个VPC ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'vpc-bp1b49rqrybk45nio****',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        3 => 
        array (
          'name' => 'AddressType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地址类型：取值 internet，intranet',
            'description' => '网络型负载均衡的IPv4地址类型。取值：
- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。
- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。',
            'type' => 'string',
            'required' => false,
            'example' => 'Internet',
          ),
        ),
        4 => 
        array (
          'name' => 'AddressIpVersion',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '协议类型',
            'description' => '协议版本。取值：
- **ipv4**：IPv4类型。
- **DualStack**：双栈类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'ipv4',
          ),
        ),
        5 => 
        array (
          'name' => 'Ipv6AddressType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '协议类型',
            'description' => '网络型负载均衡的IPv6地址类型。取值：
- **Internet**：公网类型。网络型负载均衡实例具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。
- **Intranet**：私网类型。网络型负载均衡实例只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。',
            'type' => 'string',
            'required' => false,
            'example' => 'Internet',
          ),
        ),
        6 => 
        array (
          'name' => 'DNSName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'dns 地址',
            'description' => 'DNS域名。',
            'type' => 'string',
            'required' => false,
            'example' => 'nlb-wb7r6dlwetvt5j****.cn-hangzhou.nlb.aliyuncs.com',
          ),
        ),
        7 => 
        array (
          'name' => 'LoadBalancerStatus',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例状态',
            'description' => '网络型负载均衡实例状态。取值：
- **Inactive**：已停止，表示实例监听不会再转发流量。
- **Active**：运行中。
- **Provisioning**：创建中。
- **Configuring**：变配中。
- **Deleting**：删除中。
- **Deleted**：已删除。',
            'type' => 'string',
            'required' => false,
            'example' => 'Active',
          ),
        ),
        8 => 
        array (
          'name' => 'LoadBalancerBusinessStatus',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例业务状态',
            'description' => '网络型负载均衡的业务状态。取值：
- **Abnormal**：异常状态。
- **Normal**：正常状态。',
            'type' => 'string',
            'required' => false,
            'example' => 'Normal',
          ),
        ),
        9 => 
        array (
          'name' => 'LoadBalancerNames',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '负载均衡实例名称',
            'description' => '网络型负载均衡实例名称。一次最多支持查询20个实例名称。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '网络型负载均衡实例名称。一次最多支持查询20个实例。',
              'type' => 'string',
              'required' => false,
              'example' => 'NLB1',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        10 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '企业资源组标识',
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        11 => 
        array (
          'name' => 'LoadBalancerIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '实例列表',
            'description' => '网络型负载均衡实例的ID。一次最多支持查询20个实例。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '网络型负载均衡实例的ID。一次最多支持查询20个实例。',
              'type' => 'string',
              'required' => false,
              'example' => 'nlb-83ckzc8d4xlp8o****',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        12 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '网络型负载均衡实例标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '实例的标签键。最多支持输入20个标签键。一旦输入该值，则不允许为空字符串。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'KeyTest',
                ),
                'Value' => 
                array (
                  'description' => '实例的标签值。最多支持输入20个标签值。一旦输入该值，可以为空字符串。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ValueTest',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        13 => 
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
        14 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
            'default' => '20',
          ),
        ),
        15 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
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
            'title' => 'response',
            'description' => 'response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'LoadBalancers' => 
              array (
                'description' => '网络型负载均衡实例列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '网络型负载均衡实例列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RegionId' => 
                    array (
                      'title' => '业务location',
                      'description' => '网络型负载均衡实例所在的地域ID。 ',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'LoadBalancerId' => 
                    array (
                      'description' => '网络型负载均衡实例ID。',
                      'type' => 'string',
                      'example' => 'nlb-83ckzc8d4xlp8o****',
                    ),
                    'LoadBalancerName' => 
                    array (
                      'description' => '网络型负载均衡实例名称。',
                      'type' => 'string',
                      'example' => 'NLB1',
                    ),
                    'LoadBalancerType' => 
                    array (
                      'description' => '负载均衡实例类型。仅取值**Network**，表示网络型负载均衡。',
                      'type' => 'string',
                      'example' => 'Network',
                    ),
                    'AddressType' => 
                    array (
                      'description' => '网络型负载均衡的IPv4地址类型。取值：
- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。
- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。',
                      'type' => 'string',
                      'example' => 'Internet',
                    ),
                    'AddressIpVersion' => 
                    array (
                      'description' => '协议版本。取值：
- **ipv4**：IPv4类型。
- **DualStack**：双栈类型。',
                      'type' => 'string',
                      'example' => 'ipv4',
                    ),
                    'Ipv6AddressType' => 
                    array (
                      'description' => '网络型负载均衡的IPv6地址类型。取值：

- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。
- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。',
                      'type' => 'string',
                      'example' => 'Internet',
                    ),
                    'LoadBalancerStatus' => 
                    array (
                      'description' => '网络型负载均衡实例状态。取值：
- **Inactive**：已停止，表示实例监听不会再转发流量。
- **Active**：运行中。
- **Provisioning**：创建中。
- **Configuring**：变配中。
- **Deleting**：删除中。
- **Deleted**：已删除。',
                      'type' => 'string',
                      'example' => 'Active',
                    ),
                    'LoadBalancerBusinessStatus' => 
                    array (
                      'description' => '网络型负载均衡的业务状态。取值：
- **Abnormal**：异常状态。
- **Normal**：正常状态。',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'OperationLocks' => 
                    array (
                      'title' => '实例处于锁定状态列表',
                      'description' => '网络型负载均衡操作锁配置。在`LoadBalancerBussinessStatus`为**Abnormal**（异常状态）时有效。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '网络型负载均衡操作锁配置。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'LockType' => 
                          array (
                            'description' => '锁定的类型。取值 ：

- **SecurityLocked**：安全锁定。
- **RelatedResourceLocked**：关联锁定。
- **FinancialLocked**：欠费锁定。
- **ResidualLocked**：残留锁定。',
                            'type' => 'string',
                            'example' => 'SecurityLocked',
                          ),
                          'LockReason' => 
                          array (
                            'description' => '锁定的原因。',
                            'type' => 'string',
                            'example' => '业务异常',
                          ),
                        ),
                      ),
                    ),
                    'VpcId' => 
                    array (
                      'description' => '网络型负载均衡实例的专有网络ID。',
                      'type' => 'string',
                      'example' => 'vpc-bp1b49rqrybk45nio****',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '资源创建时间，使用格林威治时间，格式为`yyyy-MM-ddTHH:mm:ssZ`。',
                      'type' => 'string',
                      'example' => '2022-07-18T17:22:45Z',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-atstuj3rtop****',
                    ),
                    'DNSName' => 
                    array (
                      'description' => 'DNS域名。',
                      'type' => 'string',
                      'example' => 'nlb-wb7r6dlwetvt5j****.cn-hangzhou.nlb.aliyuncs.com',
                    ),
                    'ZoneMappings' => 
                    array (
                      'description' => '可用区及交换机映射列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '可用区及交换机映射列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'VSwitchId' => 
                          array (
                            'description' => '可用区对应的交换机，每个可用区默认使用一台交换机和一个子网。',
                            'type' => 'string',
                            'example' => 'vsw-bp1rmcrwg3erh1fh8****',
                          ),
                          'ZoneId' => 
                          array (
                            'description' => '可用区名称，您可以通过调用[DescribeZones](~~443890~~)接口获取。',
                            'type' => 'string',
                            'example' => 'cn-hangzhou-a',
                          ),
                          'LoadBalancerAddresses' => 
                          array (
                            'description' => '网络型负载均衡实例地址信息。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '网络型负载均衡实例地址信息。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'EniId' => 
                                array (
                                  'description' => '网络型负载均衡实例挂载的ENI的ID。',
                                  'type' => 'string',
                                  'example' => 'eni-bp12f1xhs5yal61a****',
                                ),
                                'PrivateIPv4Address' => 
                                array (
                                  'title' => '私网ip',
                                  'description' => '网络型负载均衡实例私网IPv4地址。',
                                  'type' => 'string',
                                  'example' => '192.168.3.32',
                                ),
                                'AllocationId' => 
                                array (
                                  'title' => '公网ipId',
                                  'description' => '弹性公网IP实例ID。',
                                  'type' => 'string',
                                  'example' => 'eip-bp1aedxso6u80u0qf****',
                                ),
                                'PublicIPv4Address' => 
                                array (
                                  'title' => '公网ip地址：仅Get的时候有值',
                                  'description' => '网络型负载均衡实例公网IPv4地址。',
                                  'type' => 'string',
                                  'example' => '120.XX.XX.69',
                                ),
                                'Ipv6Address' => 
                                array (
                                  'description' => '网络型负载均衡实例Ipv6地址。',
                                  'type' => 'string',
                                  'example' => '2001:db8:1:1:1:1:1:1',
                                ),
                                'PrivateIPv4HcStatus' => 
                                array (
                                  'description' => '网络型负载均衡实例私网IPv4地址探测状态。取值：
- **Healthy**：健康。
- **Unhealthy**：异常。

> 只有可用区状态（**Status**）为运行中（**Active**）时才返回该参数。',
                                  'type' => 'string',
                                  'example' => 'Healthy',
                                ),
                                'PrivateIPv6HcStatus' => 
                                array (
                                  'description' => '网络型负载均衡实例IPv6地址探测状态。
- **Healthy**：健康。
- **Unhealthy**：异常。

> 只有可用区状态（**Status**）为运行中（**Active**）时才返回该参数。',
                                  'type' => 'string',
                                  'example' => 'Healthy',
                                ),
                              ),
                            ),
                          ),
                          'Status' => 
                          array (
                            'description' => '可用区状态。取值：

- **Active**：启动。
- **Stopped**：停止。该状态仅支持通过CADT容灾管理服务调用实现。
- **Shifted**：DNS摘除。
- **Starting**：启动中。该状态仅支持通过CADT容灾管理服务调用实现。
- **Stopping**：停止中。该状态仅支持通过CADT容灾管理服务调用实现。',
                            'type' => 'string',
                            'example' => 'Active',
                          ),
                        ),
                      ),
                    ),
                    'BandwidthPackageId' => 
                    array (
                      'description' => '公网类型实例关联的共享带宽包ID。',
                      'type' => 'string',
                      'example' => 'cbwp-bp1vevu8h3ieh****',
                    ),
                    'SecurityGroupIds' => 
                    array (
                      'description' => '网络型负载均衡实例加入的安全组。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '网络型负载均衡实例加入的安全组。',
                        'type' => 'string',
                        'example' => 'sg-bp10uag3q0jkxu72****',
                      ),
                    ),
                    'CrossZoneEnabled' => 
                    array (
                      'description' => '网络型负载均衡实例是否开启跨可用区。取值：
- **true**：开启。
- **false**：关闭。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'LoadBalancerBillingConfig' => 
                    array (
                      'title' => '计费相关属性',
                      'description' => '网络型负载均衡实例计费配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PayType' => 
                        array (
                          'title' => '实例的计费类型',
                          'description' => '网络型负载均衡实例的计费类型。仅取值**PostPay**：表示按量计费。',
                          'type' => 'string',
                          'example' => 'PostPay',
                          'default' => 'PostPay',
                        ),
                      ),
                    ),
                    'DeletionProtectionConfig' => 
                    array (
                      'description' => '删除保护配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Enabled' => 
                        array (
                          'description' => '删除保护状态，取值：

- **true**：开启状态。
- **false**：关闭状态。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'Reason' => 
                        array (
                          'description' => '更改删除保护状态的原因。长度为2~128个英文或中文字符，必须以大小字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。
',
                          'type' => 'string',
                          'example' => '实例运行中',
                        ),
                        'EnabledTime' => 
                        array (
                          'description' => '删除保护开启时间，使用格林威治时间，格式为`yyyy-MM-ddTHH:mm:ssZ`。',
                          'type' => 'string',
                          'example' => '2022-12-01T17:22:45Z',
                        ),
                      ),
                    ),
                    'ModificationProtectionConfig' => 
                    array (
                      'description' => '修改保护配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '网络型负载均衡修改保护状态。取值：

- **NonProtection**：不保护，表示不允许传入**Reason**。如果配置了**Reason**，则清空其配置信息。
- **ConsoleProtection**：控制台修改保护，此时允许传入**Reason**。

> 当取值为**ConsoleProtection**，即开启修改保护后，用户不能通过负载均衡控制台修改实例配置，但可以通过调用API修改实例配置。',
                          'type' => 'string',
                          'example' => 'ConsoleProtection',
                        ),
                        'Reason' => 
                        array (
                          'description' => '输入开启修改保护的原因。长度为2~128个英文或中文字符，必须以大小字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。

仅在**Status**为**ConsoleProtection**时有效。',
                          'type' => 'string',
                          'example' => '业务保障期',
                        ),
                        'EnabledTime' => 
                        array (
                          'description' => '修改保护开启时间，使用格林威治时间，格式为`yyyy-MM-ddTHH:mm:ssZ`。',
                          'type' => 'string',
                          'example' => '2022-12-01T17:22:45Z',
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
                          'Key' => 
                          array (
                            'description' => '实例的标签键。',
                            'type' => 'string',
                            'example' => 'KeyTest',
                          ),
                          'Value' => 
                          array (
                            'description' => '实例的标签值。',
                            'type' => 'string',
                            'example' => 'ValueTest',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
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
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
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
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'IllegalParam.%s',
            'errorMessage' => 'The param of %s is illegal.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParam.LoadBalancerType',
            'errorMessage' => 'The LoadBalancerType value is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'System is busy, please try again later.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalParam.loadBalancerName',
            'errorMessage' => 'Param loadBalancerName is illegal.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"LoadBalancers\\": [\\n    {\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"LoadBalancerId\\": \\"nlb-83ckzc8d4xlp8o****\\",\\n      \\"LoadBalancerName\\": \\"NLB1\\",\\n      \\"LoadBalancerType\\": \\"Network\\",\\n      \\"AddressType\\": \\"Internet\\",\\n      \\"AddressIpVersion\\": \\"ipv4\\",\\n      \\"Ipv6AddressType\\": \\"Internet\\",\\n      \\"LoadBalancerStatus\\": \\"Active\\",\\n      \\"LoadBalancerBusinessStatus\\": \\"Normal\\",\\n      \\"OperationLocks\\": [\\n        {\\n          \\"LockType\\": \\"SecurityLocked\\",\\n          \\"LockReason\\": \\"业务异常\\"\\n        }\\n      ],\\n      \\"VpcId\\": \\"vpc-bp1b49rqrybk45nio****\\",\\n      \\"CreateTime\\": \\"2022-07-18T17:22:45Z\\",\\n      \\"ResourceGroupId\\": \\"rg-atstuj3rtop****\\",\\n      \\"DNSName\\": \\"nlb-wb7r6dlwetvt5j****.cn-hangzhou.nlb.aliyuncs.com\\",\\n      \\"ZoneMappings\\": [\\n        {\\n          \\"VSwitchId\\": \\"vsw-bp1rmcrwg3erh1fh8****\\",\\n          \\"ZoneId\\": \\"cn-hangzhou-a\\",\\n          \\"LoadBalancerAddresses\\": [\\n            {\\n              \\"EniId\\": \\"eni-bp12f1xhs5yal61a****\\",\\n              \\"PrivateIPv4Address\\": \\"192.168.3.32\\",\\n              \\"AllocationId\\": \\"eip-bp1aedxso6u80u0qf****\\",\\n              \\"PublicIPv4Address\\": \\"120.XX.XX.69\\",\\n              \\"Ipv6Address\\": \\"2001:db8:1:1:1:1:1:1\\",\\n              \\"PrivateIPv4HcStatus\\": \\"Healthy\\",\\n              \\"PrivateIPv6HcStatus\\": \\"Healthy\\"\\n            }\\n          ],\\n          \\"Status\\": \\"Active\\"\\n        }\\n      ],\\n      \\"BandwidthPackageId\\": \\"cbwp-bp1vevu8h3ieh****\\",\\n      \\"SecurityGroupIds\\": [\\n        \\"sg-bp10uag3q0jkxu72****\\"\\n      ],\\n      \\"CrossZoneEnabled\\": true,\\n      \\"LoadBalancerBillingConfig\\": {\\n        \\"PayType\\": \\"PostPay\\"\\n      },\\n      \\"DeletionProtectionConfig\\": {\\n        \\"Enabled\\": true,\\n        \\"Reason\\": \\"实例运行中\\",\\n        \\"EnabledTime\\": \\"2022-12-01T17:22:45Z\\"\\n      },\\n      \\"ModificationProtectionConfig\\": {\\n        \\"Status\\": \\"ConsoleProtection\\",\\n        \\"Reason\\": \\"业务保障期\\",\\n        \\"EnabledTime\\": \\"2022-12-01T17:22:45Z\\"\\n      },\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"KeyTest\\",\\n          \\"Value\\": \\"ValueTest\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"TotalCount\\": 10,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 20\\n}","errorExample":""},{"type":"xml","example":"<ListLoadBalancersResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <LoadBalancers>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <LoadBalancerId>nlb-83ckzc8d4xlp8o****</LoadBalancerId>\\n        <LoadBalancerName>NLB1</LoadBalancerName>\\n        <LoadBalancerType>Network</LoadBalancerType>\\n        <AddressType>Internet</AddressType>\\n        <AddressIpVersion>ipv4</AddressIpVersion>\\n        <Ipv6AddressType>Internet</Ipv6AddressType>\\n        <LoadBalancerStatus>Active</LoadBalancerStatus>\\n        <LoadBalancerBusinessStatus>Normal</LoadBalancerBusinessStatus>\\n        <OperationLocks>\\n            <LockType>SecurityLocked</LockType>\\n            <LockReason>业务异常</LockReason>\\n        </OperationLocks>\\n        <VpcId>vpc-bp1b49rqrybk45nio****</VpcId>\\n        <CreateTime>2022-07-18T17:22Z</CreateTime>\\n        <ResourceGroupId>rg-atstuj3rtop****</ResourceGroupId>\\n        <DNSName>nlb-wb7r6dlwetvt5j****.cn-hangzhou.nlb.aliyuncs.com</DNSName>\\n        <ZoneMappings>\\n            <VSwitchId>vsw-bp1rmcrwg3erh1fh8****</VSwitchId>\\n            <ZoneId>cn-hangzhou-a</ZoneId>\\n            <LoadBalancerAddresses>\\n                <EniId>eni-bp12f1xhs5yal61a****</EniId>\\n                <PrivateIPv4Address>192.168.3.32</PrivateIPv4Address>\\n                <AllocationId>eip-bp1aedxso6u80u0qf****</AllocationId>\\n                <PublicIPv4Address>120.XX.XX.69</PublicIPv4Address>\\n                <Ipv6Address>2001:db8:1:1:1:1:1:1</Ipv6Address>\\n                <PrivateIPv4HcStatus>Healthy</PrivateIPv4HcStatus>\\n                <PrivateIPv6HcStatus>Healthy</PrivateIPv6HcStatus>\\n            </LoadBalancerAddresses>\\n            <Status>Active</Status>\\n        </ZoneMappings>\\n        <BandwidthPackageId>cbwp-bp1vevu8h3ieh****</BandwidthPackageId>\\n        <SecurityGroupIds>sg-bp10uag3q0jkxu72****</SecurityGroupIds>\\n        <CrossZoneEnabled>true</CrossZoneEnabled>\\n        <LoadBalancerBillingConfig>\\n            <PayType>PostPay</PayType>\\n        </LoadBalancerBillingConfig>\\n        <DeletionProtectionConfig>\\n            <Enabled>true</Enabled>\\n            <Reason>实例运行中</Reason>\\n            <EnabledTime>2022-12-01T17:22Z</EnabledTime>\\n        </DeletionProtectionConfig>\\n        <ModificationProtectionConfig>\\n            <Status>ConsoleProtection</Status>\\n            <Reason>业务保障期</Reason>\\n            <EnabledTime>2022-12-01T17:22Z</EnabledTime>\\n        </ModificationProtectionConfig>\\n        <Tags>\\n            <Key>KeyTest</Key>\\n            <Value>ValueTest</Value>\\n        </Tags>\\n    </LoadBalancers>\\n    <TotalCount>10</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>20</MaxResults>\\n</ListLoadBalancersResponse>","errorExample":""}]',
      'title' => '查询负载均衡实例信息',
    ),
    'GetLoadBalancerAttribute' => 
    array (
      'summary' => '查询指定网络型负载均衡实例的详细信息。',
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
          'name' => 'LoadBalancerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'nlb-83ckzc8d4xlp8o****',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会查询实例的配置信息。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
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

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
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
            'title' => 'response',
            'description' => 'response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'RegionId' => 
              array (
                'description' => 'NLB实例所在的地域ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'LoadBalancerId' => 
              array (
                'description' => 'NLB实例ID。',
                'type' => 'string',
                'example' => 'nlb-83ckzc8d4xlp8o****',
              ),
              'LoadBalancerName' => 
              array (
                'description' => 'NLB实例名称。

长度为2~128个英文或中文字符，必须以字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                'type' => 'string',
                'example' => 'NLB1',
              ),
              'LoadBalancerType' => 
              array (
                'description' => '负载均衡类型。仅取值：**network**，表示网络型负载均衡。',
                'type' => 'string',
                'example' => 'network',
              ),
              'AddressType' => 
              array (
                'description' => 'NLB实例的IPv4网络地址类型。取值：
- **Internet**：公网。负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。
- **Intranet**：私网。负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。',
                'type' => 'string',
                'example' => 'Internet',
              ),
              'AddressIpVersion' => 
              array (
                'description' => '协议版本。取值：

- **ipv4**：IPv4类型。
- **DualStack**：双栈类型。',
                'type' => 'string',
                'example' => 'ipv4',
              ),
              'Ipv6AddressType' => 
              array (
                'description' => 'NLB实例的IPv6地址类型。取值：
- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。
- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。',
                'type' => 'string',
                'example' => 'Internet',
              ),
              'LoadBalancerStatus' => 
              array (
                'description' => 'NLB实例状态。取值：
- **Inactive**：已停止，表示实例监听不会再转发流量。
- **Active**：运行中。
- **Provisioning**：创建中。
- **Configuring**：变配中。
- **CreateFailed**：创建失败，此时不会产生费用，实例只能被删除。',
                'type' => 'string',
                'example' => 'Active',
              ),
              'LoadBalancerBusinessStatus' => 
              array (
                'description' => 'NLB的业务状态。取值：
- **Abnormal**：异常状态。
- **Normal**：正常状态。',
                'type' => 'string',
                'example' => 'Normal',
              ),
              'OperationLocks' => 
              array (
                'title' => '实例处于锁定状态列表',
                'description' => 'NLB实例处于锁定状态列表。在`LoadBalancerBussinessStatus`为**Abnormal**（异常状态）时才返回当前参数。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '网络型负载均衡实例处于锁定状态列表。在`LoadBalancerBussinessStatus`为**Abnormal**（异常状态）时才返回当前参数。。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'LockType' => 
                    array (
                      'description' => '锁定的类型。取值 ：
- **SecurityLocked**：安全锁定。
- **RelatedResourceLocked**：关联锁定。
- **FinancialLocked**：欠费锁定。
- **ResidualLocked**：残留锁定。
',
                      'type' => 'string',
                      'example' => 'SecurityLocked',
                    ),
                    'LockReason' => 
                    array (
                      'description' => '锁定的原因。',
                      'type' => 'string',
                      'example' => '业务异常。',
                    ),
                  ),
                ),
              ),
              'VpcId' => 
              array (
                'description' => 'NLB实例的专有网络ID。',
                'type' => 'string',
                'example' => 'vpc-bp1b49rqrybk45nio****',
              ),
              'CreateTime' => 
              array (
                'description' => '资源创建时间，使用格林威治时间，格式为`yyyy-MM-ddTHH:mm:ssZ`。',
                'type' => 'string',
                'example' => '2022-07-02T02:49:05Z',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源组ID。',
                'type' => 'string',
                'example' => 'rg-atstuj3rtop****',
              ),
              'DNSName' => 
              array (
                'description' => 'DNS域名。',
                'type' => 'string',
                'example' => 'nlb-wb7r6dlwetvt5j****.cn-hangzhou.nlb.aliyuncs.com',
              ),
              'ZoneMappings' => 
              array (
                'description' => '可用区及交换机映射列表，至少需要添加2个可用区，最多支持添加10个可用区。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '可用区及交换机映射列表，至少需要添加2个可用区，最多支持添加10个可用区。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'VSwitchId' => 
                    array (
                      'description' => '可用区对应的交换机，每个可用区默认使用一台交换机和一个子网。',
                      'type' => 'string',
                      'example' => 'vsw-bp1rmcrwg3erh1fh8****',
                    ),
                    'ZoneId' => 
                    array (
                      'description' => '可用区ID，您可以通过调用[DescribeZones](~~443890~~)接口获取。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-a',
                    ),
                    'LoadBalancerAddresses' => 
                    array (
                      'description' => '网络型负载均衡实例地址信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '网络型负载均衡实例地址信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'EniId' => 
                          array (
                            'description' => 'ENI的ID。',
                            'type' => 'string',
                            'example' => 'eni-bp12f1xhs5yal61a****',
                          ),
                          'PrivateIPv4Address' => 
                          array (
                            'title' => '私网ip',
                            'description' => 'IPv4 私网VIP地址。NLB对外提供服务的私网IPv4地址。',
                            'type' => 'string',
                            'example' => '192.168.3.32',
                          ),
                          'AllocationId' => 
                          array (
                            'title' => '公网ipId',
                            'description' => '弹性公网IP实例ID。',
                            'type' => 'string',
                            'example' => 'eip-bp1aedxso6u80u0qf****',
                          ),
                          'PublicIPv4Address' => 
                          array (
                            'title' => '公网ip地址：仅Get的时候有值',
                            'description' => 'NLB实例公网IPv4地址。',
                            'type' => 'string',
                            'example' => '120.XX.XX.69',
                          ),
                          'Ipv6Address' => 
                          array (
                            'description' => 'IPv6 VIP地址。NLB对外提供服务的IPv6地址。',
                            'type' => 'string',
                            'example' => '2001:db8:1:1:1:1:1:1',
                          ),
                          'PrivateIPv4HcStatus' => 
                          array (
                            'description' => 'NLB实例私网IPv4地址的探测状态。取值：

- **Healthy**：健康。
- **Unhealthy**：异常。

> 只有可用区状态（**Status**）为运行中（**Active**）时才返回该参数。',
                            'type' => 'string',
                            'example' => 'Healthy',
                          ),
                          'PrivateIPv6HcStatus' => 
                          array (
                            'description' => 'NLB实例IPv6地址的探测状态。取值：

- **Healthy**：健康。
- **Unhealthy**：异常。

> 只有可用区状态（**Status**）为运行中（**Active**）时才返回该参数。',
                            'type' => 'string',
                            'example' => 'Healthy',
                          ),
                          'Ipv4LocalAddresses' => 
                          array (
                            'description' => 'IPv4 Local地址列表。NLB与后端服务交互的地址列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => 'IPv4 Local地址。',
                              'type' => 'string',
                              'example' => '192.168.36.16',
                            ),
                          ),
                          'Ipv6LocalAddresses' => 
                          array (
                            'description' => 'IPv6 Local地址列表。NLB与后端服务交互的地址列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => 'IPv6 Local地址。',
                              'type' => 'string',
                              'example' => '2408:4005:357:ba00:64a2:221f:5685:8854',
                            ),
                          ),
                        ),
                      ),
                    ),
                    'Status' => 
                    array (
                      'description' => '可用区状态。取值：

- **Active**：启动。
- **Stopped**：停止。该状态仅支持通过CADT容灾管理服务调用实现。
- **Shifted**：DNS摘除。
- **Starting**：启动中。该状态仅支持通过CADT容灾管理服务调用实现。
- **Stopping**：停止中。该状态仅支持通过CADT容灾管理服务调用实现。',
                      'type' => 'string',
                      'example' => 'Active',
                    ),
                  ),
                ),
              ),
              'BandwidthPackageId' => 
              array (
                'description' => '公网类型实例关联的共享带宽包ID。',
                'type' => 'string',
                'example' => 'cbwp-bp1vevu8h3ieh****',
              ),
              'SecurityGroupIds' => 
              array (
                'description' => 'NLB实例绑定的安全组ID。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'NLB实例绑定的安全组ID。',
                  'type' => 'string',
                  'example' => 'sg-bp10uag3q0jkxu72****',
                ),
              ),
              'CrossZoneEnabled' => 
              array (
                'description' => 'NLB实例是否开启跨可用区。取值：
- **true**：开启。
- **false**：关闭。',
                'type' => 'boolean',
                'example' => 'true',
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
                    'description' => 'NLB实例的计费类型。
仅取值**PostPay**：表示按量计费。',
                    'type' => 'string',
                    'example' => 'PostPay',
                    'default' => 'PostPay',
                  ),
                ),
              ),
              'Cps' => 
              array (
                'description' => 'NLB实例每秒新建连接限速值。取值范围：**0**~**1000000**。

**0**表示不限速。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'DeletionProtectionConfig' => 
              array (
                'description' => '删除保护配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'Enabled' => 
                  array (
                    'description' => '删除保护状态，取值：

- **true**：开启状态。
- **false**：关闭状态。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'Reason' => 
                  array (
                    'description' => '更改删除保护状态的原因。长度为2~128个英文或中文字符，必须以大小字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                    'type' => 'string',
                    'example' => '实例运行中',
                  ),
                  'EnabledTime' => 
                  array (
                    'description' => '删除保护开启时间，使用格林威治时间，格式为`yyyy-MM-ddTHH:mm:ssZ`。',
                    'type' => 'string',
                    'example' => '2022-11-02T02:49:05Z',
                  ),
                ),
              ),
              'ModificationProtectionConfig' => 
              array (
                'description' => '修改保护配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '网络型负载均衡修改保护状态。取值：

- **NonProtection**：不保护，表示不允许传入修改保护配置的**Reason**字段。如果配置了**Reason**，则清空其配置信息。
- **ConsoleProtection**：控制台修改保护，此时允许传入修改保护配置的**Reason**字段。

> 当取值为**ConsoleProtection**，即开启修改保护后，用户不能通过负载均衡控制台修改实例配置，但可以通过调用API修改实例配置。
',
                    'type' => 'string',
                    'example' => 'ConsoleProtection',
                  ),
                  'Reason' => 
                  array (
                    'description' => '输入开启修改保护的原因。长度为2~128个英文或中文字符，必须以大小字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。

仅在修改保护配置的**Status**为**ConsoleProtection**有效且合法。',
                    'type' => 'string',
                    'example' => '业务保障期',
                  ),
                  'EnabledTime' => 
                  array (
                    'description' => '修改保护时间，使用格林威治时间，格式为`yyyy-MM-ddTHH:mm:ssZ`。',
                    'type' => 'string',
                    'example' => '2022-12-02T02:49:05Z',
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
                    'TagKey' => 
                    array (
                      'description' => '实例的标签键。',
                      'type' => 'string',
                      'example' => 'KeyTest',
                    ),
                    'TagValue' => 
                    array (
                      'description' => '实例的标签值。',
                      'type' => 'string',
                      'example' => 'ValueTest',
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
            'errorCode' => 'DuplicatedParam.%s',
            'errorMessage' => 'The param of %s is duplicated.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationFailed.GetXipFailed',
            'errorMessage' => 'Operation failed because GetXipFailed.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.loadBalancer',
            'errorMessage' => 'The specified resource of loadbalancer is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"LoadBalancerId\\": \\"nlb-83ckzc8d4xlp8o****\\",\\n  \\"LoadBalancerName\\": \\"NLB1\\",\\n  \\"LoadBalancerType\\": \\"network\\",\\n  \\"AddressType\\": \\"Internet\\",\\n  \\"AddressIpVersion\\": \\"ipv4\\",\\n  \\"Ipv6AddressType\\": \\"Internet\\",\\n  \\"LoadBalancerStatus\\": \\"Active\\",\\n  \\"LoadBalancerBusinessStatus\\": \\"Normal\\",\\n  \\"OperationLocks\\": [\\n    {\\n      \\"LockType\\": \\"SecurityLocked\\",\\n      \\"LockReason\\": \\"业务异常。\\"\\n    }\\n  ],\\n  \\"VpcId\\": \\"vpc-bp1b49rqrybk45nio****\\",\\n  \\"CreateTime\\": \\"2022-07-02T02:49:05Z\\",\\n  \\"ResourceGroupId\\": \\"rg-atstuj3rtop****\\",\\n  \\"DNSName\\": \\"nlb-wb7r6dlwetvt5j****.cn-hangzhou.nlb.aliyuncs.com\\",\\n  \\"ZoneMappings\\": [\\n    {\\n      \\"VSwitchId\\": \\"vsw-bp1rmcrwg3erh1fh8****\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-a\\",\\n      \\"LoadBalancerAddresses\\": [\\n        {\\n          \\"EniId\\": \\"eni-bp12f1xhs5yal61a****\\",\\n          \\"PrivateIPv4Address\\": \\"192.168.3.32\\",\\n          \\"AllocationId\\": \\"eip-bp1aedxso6u80u0qf****\\",\\n          \\"PublicIPv4Address\\": \\"120.XX.XX.69\\",\\n          \\"Ipv6Address\\": \\"2001:db8:1:1:1:1:1:1\\",\\n          \\"PrivateIPv4HcStatus\\": \\"Healthy\\",\\n          \\"PrivateIPv6HcStatus\\": \\"Healthy\\",\\n          \\"Ipv4LocalAddresses\\": [\\n            \\"192.168.36.16\\"\\n          ],\\n          \\"Ipv6LocalAddresses\\": [\\n            \\"2408:4005:357:ba00:64a2:221f:5685:8854\\"\\n          ]\\n        }\\n      ],\\n      \\"Status\\": \\"Active\\"\\n    }\\n  ],\\n  \\"BandwidthPackageId\\": \\"cbwp-bp1vevu8h3ieh****\\",\\n  \\"SecurityGroupIds\\": [\\n    \\"sg-bp10uag3q0jkxu72****\\"\\n  ],\\n  \\"CrossZoneEnabled\\": true,\\n  \\"LoadBalancerBillingConfig\\": {\\n    \\"PayType\\": \\"PostPay\\"\\n  },\\n  \\"Cps\\": 100,\\n  \\"DeletionProtectionConfig\\": {\\n    \\"Enabled\\": true,\\n    \\"Reason\\": \\"实例运行中\\",\\n    \\"EnabledTime\\": \\"2022-11-02T02:49:05Z\\"\\n  },\\n  \\"ModificationProtectionConfig\\": {\\n    \\"Status\\": \\"ConsoleProtection\\",\\n    \\"Reason\\": \\"业务保障期\\",\\n    \\"EnabledTime\\": \\"2022-12-02T02:49:05Z\\"\\n  },\\n  \\"Tags\\": [\\n    {\\n      \\"TagKey\\": \\"KeyTest\\",\\n      \\"TagValue\\": \\"ValueTest\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetLoadBalancerAttributeResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <LoadBalancerId>nlb-83ckzc8d4xlp8o****</LoadBalancerId>\\n    <LoadBalancerName>NLB1</LoadBalancerName>\\n    <LoadBalancerType>network</LoadBalancerType>\\n    <AddressType>Internet</AddressType>\\n    <AddressIpVersion>ipv4</AddressIpVersion>\\n    <Ipv6AddressType>Internet</Ipv6AddressType>\\n    <LoadBalancerStatus>Active</LoadBalancerStatus>\\n    <LoadBalancerBusinessStatus>Normal</LoadBalancerBusinessStatus>\\n    <OperationLocks>\\n        <LockType>SecurityLocked</LockType>\\n        <LockReason>业务异常。</LockReason>\\n    </OperationLocks>\\n    <VpcId>vpc-bp1b49rqrybk45nio****</VpcId>\\n    <CreateTime>2022-07-02T02:49:05Z</CreateTime>\\n    <ResourceGroupId>rg-atstuj3rtop****</ResourceGroupId>\\n    <DNSName>nlb-wb7r6dlwetvt5j****.cn-hangzhou.nlb.aliyuncs.com</DNSName>\\n    <ZoneMappings>\\n        <VSwitchId>vsw-bp1rmcrwg3erh1fh8****</VSwitchId>\\n        <ZoneId>cn-hangzhou-a</ZoneId>\\n        <LoadBalancerAddresses>\\n            <EniId>eni-bp12f1xhs5yal61a****</EniId>\\n            <PrivateIPv4Address>192.168.3.32</PrivateIPv4Address>\\n            <AllocationId>eip-bp1aedxso6u80u0qf****</AllocationId>\\n            <PublicIPv4Address>120.XX.XX.69</PublicIPv4Address>\\n            <Ipv6Address>2001:db8:1:1:1:1:1:1</Ipv6Address>\\n            <PrivateIPv4HcStatus>Healthy</PrivateIPv4HcStatus>\\n            <PrivateIPv6HcStatus>Healthy</PrivateIPv6HcStatus>\\n        </LoadBalancerAddresses>\\n        <Status>Active</Status>\\n    </ZoneMappings>\\n    <BandwidthPackageId>cbwp-bp1vevu8h3ieh****</BandwidthPackageId>\\n    <SecurityGroupIds>sg-bp10uag3q0jkxu72****</SecurityGroupIds>\\n    <CrossZoneEnabled>true</CrossZoneEnabled>\\n    <LoadBalancerBillingConfig>\\n        <PayType>PostPay</PayType>\\n    </LoadBalancerBillingConfig>\\n    <Cps>100</Cps>\\n    <DeletionProtectionConfig>\\n        <Enabled>true</Enabled>\\n        <Reason>实例运行中</Reason>\\n        <EnabledTime>2022-11-02T02:49:05Z</EnabledTime>\\n    </DeletionProtectionConfig>\\n    <ModificationProtectionConfig>\\n        <Status>ConsoleProtection</Status>\\n        <Reason>业务保障期</Reason>\\n        <EnabledTime>2022-12-02T02:49:05Z</EnabledTime>\\n    </ModificationProtectionConfig>\\n    <Tags>\\n        <TagKey>KeyTest</TagKey>\\n        <TagValue>ValueTest</TagValue>\\n    </Tags>\\n</GetLoadBalancerAttributeResponse>","errorExample":""}]',
      'title' => '查询负载均衡实例的详细信息',
    ),
    'StartShiftLoadBalancerZones' => 
    array (
      'summary' => '将可用区对应的EIP/VIP从域名解析中摘除。',
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
          'name' => 'ZoneMappings',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '可用区及交换机映射列表。

> 一次调用最多支持移除一个可用区。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '可用区及交换机映射列表。

> 一次调用最多支持移除一个可用区。',
              'type' => 'object',
              'properties' => 
              array (
                'VSwitchId' => 
                array (
                  'description' => '可用区对应的交换机，每个可用区默认使用一台交换机和一个子网。
',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'vsw-bp1rmcrwg3erh1fh8****',
                ),
                'ZoneId' => 
                array (
                  'description' => 'NLB实例的可用区ID。
> 一次调用最多支持移除一个可用区。

您可以通过调用[DescribeZones](~~443890~~)接口获取可用区ID。
',
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
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'NLB实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'nlb-83ckzc8d4xlp8o****',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会移除可用区。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'NLB实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
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
            'title' => 'RpcResponse<LoadBalancerZonesResponse>',
            'description' => 'RpcResponse<LoadBalancerZonesResponse>',
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
            'errorCode' => 'ResourceInConfiguring.loadbalancer',
            'errorMessage' => 'The specified resource of loadbalancer is being configured, please try again later.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.%s',
            'errorMessage' => 'Authentication is failed for %s.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.loadBalancer',
            'errorMessage' => 'The specified resource of loadbalancer is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\"\\n}","errorExample":""},{"type":"xml","example":"<StartShiftLoadBalancerZonesResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n</StartShiftLoadBalancerZonesResponse>","errorExample":""}]',
      'title' => '把可用区的EIP/VIP从域名解析中摘除',
      'description' => '> 当前NLB实例可用区数量为1时，不支持移除实例可用区。',
    ),
    'CancelShiftLoadBalancerZones' => 
    array (
      'summary' => '将可用区对应的EIP/VIP加回到域名解析中。',
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
          'name' => 'ZoneMappings',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '可用区及交换机映射列表。

> 一次调用最多支持加回一个可用区。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '可用区及交换机映射列表。

> 一次调用最多支持加回一个可用区。',
              'type' => 'object',
              'properties' => 
              array (
                'VSwitchId' => 
                array (
                  'description' => '可用区对应的交换机，每个可用区默认使用一台交换机和一个子网。
',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'vsw-sersdf****',
                ),
                'ZoneId' => 
                array (
                  'description' => 'NLB实例的可用区ID。
> 一次调用最多支持加回一个可用区。

您可以通过调用[DescribeZones](~~443890~~)接口获取可用区ID。',
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
        1 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'NLB实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'nlb-83ckzc8d4xlp8o****',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会加回可用区。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'NLB实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
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
            'title' => 'RpcResponse<LoadBalancerZonesResponse>',
            'description' => 'RpcResponse<LoadBalancerZonesResponse>',
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
            'errorCode' => 'IncorrectStatus.ZoneId',
            'errorMessage' => 'The zoneId status of eni [%s] is incorrect.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.%s',
            'errorMessage' => 'Authentication is failed for %s.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.loadBalancer',
            'errorMessage' => 'The specified resource of loadbalancer is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\"\\n}","errorExample":""},{"type":"xml","example":"<CancelShiftLoadBalancerZonesResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n</CancelShiftLoadBalancerZonesResponse>","errorExample":""}]',
      'title' => '把可用区的EIP/VIP加到DNS中',
      'description' => '调用本接口时，您已通过[StartShiftLoadBalancerZones](~~2411999~~)接口或控制台移除NLB实例的某个可用区。',
    ),
    'CreateListener' => 
    array (
      'summary' => '在网络型负载均衡实例中创建TCP、UDP或TCPSSL监听。',
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
        0 => 
        array (
          'name' => 'ListenerProtocol',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '监听协议',
            'description' => '监听协议。取值：**TCP**、**UDP**或**TCPSSL**。',
            'type' => 'string',
            'required' => true,
            'example' => 'TCP',
            'enum' => 
            array (
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'ListenerPort',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '监听端口',
            'description' => '监听端口。取值范围：**0**~**65535**。

**0**：表示使用全端口功能。当设置为**0**时，您需要配置**StartPort**和**EndPort**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '65535',
            'minimum' => '0',
            'example' => '80',
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerDescription',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '监听描述',
            'description' => '自定义监听名称。

长度限制为2~256个字符，支持中文和英文字母，可包含数字、半角逗号（,）、半角句号（.）、半角分号（;）、正斜线（/）、at（@）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'tcp_80',
          ),
        ),
        3 => 
        array (
          'name' => 'LoadBalancerId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'add 必选',
            'description' => '网络型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'nlb-83ckzc8d4xlp8o****',
          ),
        ),
        4 => 
        array (
          'name' => 'ServerGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'servergroupId',
            'description' => '服务器组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sgp-ppdpc14gdm3x4o****',
          ),
        ),
        5 => 
        array (
          'name' => 'IdleTimeout',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '空闲超时时间',
            'description' => '连接空闲超时时间。单位：秒。
取值范围：**1**~**900**。默认值：**900**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '3600',
            'minimum' => '1',
            'example' => '900',
          ),
        ),
        6 => 
        array (
          'name' => 'SecurityPolicyId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'Tclssl监听的安全策略',
            'description' => '安全策略ID。支持系统安全策略和自定义安全策略。

- 系统策略取值：**tls_cipher_policy_1_0**（默认值）、**tls_cipher_policy_1_1**、**tls_cipher_policy_1_2**、**tls_cipher_policy_1_2_strict**或**tls_cipher_policy_1_2_strict_with_1_3**。
- 自定义安全策略：输入自定义安全策略ID。
    - 创建自定义策略，请参见[CreateSecurityPolicy](~~445901~~)。
    - 查询安全策略，请参见[ListSecurityPolicy](~~445900~~)。

>仅对TCPSSL监听生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'tls_cipher_policy_1_0',
          ),
        ),
        7 => 
        array (
          'name' => 'CertificateIds',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => 'server证书列表',
            'description' => '服务器证书列表信息。仅对TCPSSL监听生效。

> 目前仅支持添加1个服务器证书。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '服务器证书列表信息。仅对TCPSSL监听生效。

> 目前仅支持添加1个服务器证书。',
              'type' => 'string',
              'required' => false,
              'example' => '123157******',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        8 => 
        array (
          'name' => 'CaCertificateIds',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => 'ca 证书列表',
            'description' => 'CA证书列表。仅对TCPSSL监听生效。

> 目前仅支持添加1个CA证书。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'CA证书列表。仅对TCPSSL监听生效。

> 目前仅支持添加1个CA证书。',
              'type' => 'string',
              'required' => false,
              'example' => '139a00******',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        9 => 
        array (
          'name' => 'CaEnabled',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否启动双向认证。取值：

- **true**：启动。

- **false**（默认值）：关闭。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        10 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会创建监听。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        11 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
        12 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        13 => 
        array (
          'name' => 'ProxyProtocolEnabled',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否开启通过Proxy Protocol协议携带客户端源地址到后端服务器。取值：

- **true**：开启。

- **false**（默认值）：关闭。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        14 => 
        array (
          'name' => 'SecSensorEnabled',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否开启秒级监控功能。取值：

- **true**：开启。

- **false**（默认值）：关闭。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        15 => 
        array (
          'name' => 'AlpnEnabled',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否开启ALPN。取值：

- **true**：开启。

- **false**（默认值）：关闭。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        16 => 
        array (
          'name' => 'AlpnPolicy',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'ALPN策略。取值：

- **HTTP1Only**：只协商使用HTTP1.x协议，优先级为HTTP1.1>HTTP1.0。
- **HTTP2Only**：只协商使用HTTP2.0协议。
- **HTTP2Optional**：优先使用HTTP1.x协议，但也接受HTTP2.0协议，优先级为HTTP1.1>HTTP1.0>HTTP2.0。
- **HTTP2Preferred**：优先使用HTTP2.0协议，但也接受HTTP1.x协议，优先级为HTTP2.0>HTTP1.1>HTTP1.0。

> **AlpnEnabled**开启后需配置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'HTTP1Only',
            'enum' => 
            array (
              0 => 'HTTP1Only',
              1 => 'HTTP2Only',
              2 => 'HTTP2Preferred',
              3 => 'HTTP2Optional',
            ),
          ),
        ),
        17 => 
        array (
          'name' => 'StartPort',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '全端口监听起始端口。取值范围：**0** ~ **65535**。

> 当**ListenerPort**为**0**时，需要配置该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '244',
          ),
        ),
        18 => 
        array (
          'name' => 'EndPort',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '全端口监听结束端口。取值范围：**0** ~ **65535**。
终止端口的取值大于起始端口。

> 当**ListenerPort**为**0**时，需要配置该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '566',
          ),
        ),
        19 => 
        array (
          'name' => 'Cps',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例每秒新建连接限速值。取值范围：**0**~**1000000**。**0**表示不限速。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100',
          ),
        ),
        20 => 
        array (
          'name' => 'Mss',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'TCP报文的最大段大小。单位：字节，取值范围：**0**~**1500**。
**0**：表示不修改用户TCP报文的MSS值。

> 仅TCP、TCPSSL类型的监听支持该字段值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '43',
          ),
        ),
        21 => 
        array (
          'name' => 'Tag',
          'in' => 'formData',
          'allowEmptyValue' => true,
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。最多支持64个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。支持字符包括字母、数字、下划线 (_)、点 (.)、冒号 (:)、斜线 (/)、等号 (=)、加号 (+)、减号 (-)、@符号 (@) 。

一次调用最多支持添加20个标签。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'KeyTest',
                ),
                'Value' => 
                array (
                  'description' => '标签值。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。支持字符包括字母、数字、下划线 (_)、点 (.)、冒号 (:)、斜线 (/)、等号 (=)、加号 (+)、减号 (-)、@符号 (@) 。

一次调用最多支持添加20个标签。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Test',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        22 => 
        array (
          'name' => 'ProxyProtocolV2Config',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '通过Proxy Protocol协议携带VpcId、PrivateLinkEpId、PrivateLinkEpsId信息到后端服务器配置。',
            'type' => 'object',
            'properties' => 
            array (
              'Ppv2VpcIdEnabled' => 
              array (
                'description' => '是否开启通过Proxy Protocol协议携带VpcId到后端服务器。取值：

- **true**：开启。

- **false**（默认值）：关闭。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
                'default' => 'false',
              ),
              'Ppv2PrivateLinkEpIdEnabled' => 
              array (
                'description' => '是否开启通过Proxy Protocol协议携带Ppv2PrivateLinkEpId到后端服务器。取值：

- **true**：开启。

- **false**（默认值）：关闭。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
                'default' => 'false',
              ),
              'Ppv2PrivateLinkEpsIdEnabled' => 
              array (
                'description' => '是否开启通过Proxy Protocol协议携带PrivateLinkEpsId到后端服务器。取值：

- **true**：开启。

- **false**（默认值）：关闭。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
                'default' => 'false',
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
            'title' => 'RpcResponse<CreateListenerResponse>',
            'description' => 'RpcResponse<CreateListenerResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'ListenerId' => 
              array (
                'description' => '监听ID。',
                'type' => 'string',
                'example' => 'lsn-bp1bpn0kn908w4nbw****',
              ),
              'JobId' => 
              array (
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
            'errorCode' => 'Conflict.Port',
            'errorMessage' => 'The Port [%s] is conflict.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParam.MssConflictWithUdpAndGeneve',
            'errorMessage' => 'The param of MssConflictWithUdpAndGeneve is illegal.',
          ),
          2 => 
          array (
            'errorCode' => 'QuotaExceeded.%s',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          3 => 
          array (
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'System is busy, please try again later.',
          ),
          4 => 
          array (
            'errorCode' => 'Mismatch.VpcId',
            'errorMessage' => 'The VpcId is mismatched for %s and %s.',
          ),
          5 => 
          array (
            'errorCode' => 'ResourceNotEnough.%s',
            'errorMessage' => 'The specified resource of %s is not enough.',
          ),
          6 => 
          array (
            'errorCode' => 'Conflict.Lock',
            'errorMessage' => 'The Lock [%s] is conflict.',
          ),
          7 => 
          array (
            'errorCode' => 'IllegalParam.AnyPortListenerConflictWithNonAnyPortServerGroup',
            'errorMessage' => 'The param of AnyPortListenerConflictWithNonAnyPortServerGroup is illegal.',
          ),
          8 => 
          array (
            'errorCode' => 'IncorrectStatus.loadbalancer',
            'errorMessage' => 'The status of loadbalancer [%s] is incorrect.',
          ),
          9 => 
          array (
            'errorCode' => 'ResourceNotFound.Certificate',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          10 => 
          array (
            'errorCode' => 'IllegalParam.ServerGroupId',
            'errorMessage' => 'The param of ServerGroupId is illegal.',
          ),
          11 => 
          array (
            'errorCode' => 'IllegalParam.NonAnyPortListenerConflictWithAnyPortServerGroup',
            'errorMessage' => 'The param of NonAnyPortListenerConflictWithAnyPortServerGroup is illegal.',
          ),
          12 => 
          array (
            'errorCode' => 'MissingParam.Certificate',
            'errorMessage' => 'The param of certificate is missing.',
          ),
          13 => 
          array (
            'errorCode' => 'IllegalParam.Port',
            'errorMessage' => 'The param of Port is illegal.',
          ),
          14 => 
          array (
            'errorCode' => 'QuotaExceeded.QuotaInsufficient',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          15 => 
          array (
            'errorCode' => 'Mismatch.Protocol',
            'errorMessage' => 'The Protocol is mismatched for %s and %s.',
          ),
          16 => 
          array (
            'errorCode' => 'ResourceNotEnough.CaCertificateApiCount',
            'errorMessage' => 'The specified resource of CaCertificateApiCount is not enough.',
          ),
          17 => 
          array (
            'errorCode' => 'MissingParam.ServerGroupId',
            'errorMessage' => 'The param of ServerGroupId is missing.',
          ),
          18 => 
          array (
            'errorCode' => 'IllegalParam.ListenerDescription',
            'errorMessage' => 'The parameter ListenerDescription of listener is illegal.',
          ),
          19 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
          20 => 
          array (
            'errorCode' => 'IllegalParam.IdleTimeout',
            'errorMessage' => 'The param of IdleTimeout is illegal.',
          ),
          21 => 
          array (
            'errorCode' => 'MissingParam.%s',
            'errorMessage' => 'The parameter of %s is missing.',
          ),
          22 => 
          array (
            'errorCode' => 'IllegalParam',
            'errorMessage' => 'The param of %s is illegal.',
          ),
          23 => 
          array (
            'errorCode' => 'IllegalParamSize.certificateIds',
            'errorMessage' => 'The param size of certificateIds or  caCertificateIds is illegal.',
          ),
          24 => 
          array (
            'errorCode' => 'DuplicatedParam.listener',
            'errorMessage' => 'The param of any port listener is duplicated.',
          ),
          25 => 
          array (
            'errorCode' => 'IllegalParam.PreserveClientIpSwitch',
            'errorMessage' => 'The server group associated with the tcpssl listener does not support enabling PreserveClientIp.',
          ),
          26 => 
          array (
            'errorCode' => 'OperationDenied.RegionNotSupportHDMonitor',
            'errorMessage' => 'The operation is not allowed because of RegionNotSupportHDMonitor.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.VSwitch',
            'errorMessage' => 'The specified resource of vSwitch is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.loadBalancer',
            'errorMessage' => 'The specified resource of loadbalancer is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotFound.serverGroup',
            'errorMessage' => 'The specified resource of serverGroup is not found.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.CaCertificate',
            'errorMessage' => 'The specified resource of CaCertificate is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'ResourceNotFound.HdMonitorConfigNotExist',
            'errorMessage' => 'The specified resource of HdMonitorConfigNotExist is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"ListenerId\\": \\"lsn-bp1bpn0kn908w4nbw****\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateListenerResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <ListenerId>lsn-bp1bpn0kn908w4nbw****</ListenerId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</CreateListenerResponse>","errorExample":""}]',
      'title' => '创建监听',
    ),
    'DeleteListener' => 
    array (
      'summary' => '删除网络型负载均衡监听。',
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
          'name' => 'ListenerId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'update or delete必选, add在custom中生成',
            'description' => '监听ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lsn-bp1bpn0kn908w4nbw****',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会删除监听。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
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
            'title' => 'RpcResponse<UpdateOrDeleteListenerResponse>',
            'description' => '删除监听。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'JobId' => 
              array (
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
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectStatus.listener',
            'errorMessage' => 'The status of listener [%s] is incorrect.',
          ),
          2 => 
          array (
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'System is busy, please try again later.',
          ),
          3 => 
          array (
            'errorCode' => 'IncorrectStatus.loadbalancer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          4 => 
          array (
            'errorCode' => 'Conflict.Lock',
            'errorMessage' => 'The Lock [%s] is conflict.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.loadBalancer',
            'errorMessage' => 'The specified resource of loadbalancer is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.listener',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteListenerResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</DeleteListenerResponse>","errorExample":""}]',
      'title' => '删除监听',
    ),
    'StartListener' => 
    array (
      'summary' => '启动网络型负载均衡监听。',
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
          'name' => 'ListenerId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'update or delete必选, add在custom中生成',
            'description' => '监听ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'lsn-bp1bpn0kn908w4nbw****',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会启动监听。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
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
            'title' => 'RpcResponse<StopOrStartListenerResponse>',
            'description' => 'RpcResponse<StopOrStartListenerResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'JobId' => 
              array (
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
            'errorCode' => 'IncorrectStatus.listener',
            'errorMessage' => 'The status of listener [%s] is incorrect.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.listener',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<StartListenerResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</StartListenerResponse>","errorExample":""}]',
      'title' => '启动监听',
    ),
    'StopListener' => 
    array (
      'summary' => '停止网络型负载均衡实例的监听。',
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
          'name' => 'ListenerId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'update or delete必选, add在custom中生成',
            'description' => '监听ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lsn-bp1bpn0kn908w4nbw****',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会停止监听。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
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
            'title' => 'RpcResponse<StopOrStartListenerResponse>',
            'description' => '停止监听。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'JobId' => 
              array (
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
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'System is busy, please try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectStatus.listener',
            'errorMessage' => 'The status of listener [%s] is incorrect.',
          ),
          2 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.listener',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.loadBalancer',
            'errorMessage' => 'The specified resource of loadbalancer is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<StopListenerResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</StopListenerResponse>","errorExample":""}]',
      'title' => '停止监听',
    ),
    'UpdateListenerAttribute' => 
    array (
      'summary' => '更新网络型负载均衡监听的配置。',
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
          'name' => 'ListenerId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'update or delete必选, add在custom中生成',
            'description' => '监听实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lsn-bp1bpn0kn908w4nbw****',
          ),
        ),
        1 => 
        array (
          'name' => 'ListenerDescription',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '监听描述',
            'description' => '自定义监听名称。

长度限制为2~256个字符，支持中文和英文字母，可包含数字、半角逗号（,）、半角句号（.）、半角分号（;）、正斜线（/）、at（@）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'tcpssl_443',
          ),
        ),
        2 => 
        array (
          'name' => 'ServerGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实服务组',
            'description' => '服务器组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'sgp-ppdpc14gdm3x4o****',
          ),
        ),
        3 => 
        array (
          'name' => 'SecurityPolicyId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'https监听的安全策略',
            'description' => '安全策略ID。

> 仅对TCPSSL监听生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'tls_cipher_policy_1_1',
          ),
        ),
        4 => 
        array (
          'name' => 'CertificateIds',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => 'server证书列表',
            'description' => '服务器证书列表信息。目前仅支持添加1个服务器证书。


> 仅对TCPSSL监听生效。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '服务器证书列表信息。目前仅支持添加1个服务器证书。

> 仅对TCPSSL监听生效。',
              'type' => 'string',
              'required' => false,
              'example' => '123157******',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        5 => 
        array (
          'name' => 'CaCertificateIds',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => 'ca 证书列表',
            'description' => 'CA证书列表信息。目前仅支持添加1个CA证书。

> 仅对TCPSSL监听生效。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'CA证书列表信息。目前仅支持添加1个CA证书。

> 仅对TCPSSL监听生效。',
              'type' => 'string',
              'required' => false,
              'example' => '139a00******',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        6 => 
        array (
          'name' => 'CaEnabled',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否启动双向认证。取值：

- **true**：启动。

- **false**（默认值）：关闭。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'IdleTimeout',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '连接空闲超时时间。单位：秒。取值范围：**1**~**900**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '3600',
            'minimum' => '1',
            'example' => '900',
          ),
        ),
        8 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会更新监听信息。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        9 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
        10 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        11 => 
        array (
          'name' => 'ProxyProtocolEnabled',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否开启通过Proxy Protocol协议携带客户端源地址到后端服务器。取值：

- **true**：开启。

- **false**：关闭。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        12 => 
        array (
          'name' => 'SecSensorEnabled',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否开启秒级监控功能。取值：

- **true**：开启。

- **false**：关闭。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        13 => 
        array (
          'name' => 'AlpnEnabled',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否开启ALPN。取值：

- **true**：开启。

- **false**：关闭。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        14 => 
        array (
          'name' => 'AlpnPolicy',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'ALPN策略。取值：

- **HTTP1Only**：只协商使用HTTP1.x协议，优先级为HTTP1.1>HTTP1.0。
- **HTTP2Only**：只协商使用HTTP2.0协议。
- **HTTP2Optional**：优先使用HTTP1.x协议，但也接受HTTP2.0协议，优先级为HTTP1.1>HTTP1.0>HTTP2.0。
- **HTTP2Preferred**：优先使用HTTP2.0协议，但也接受HTTP1.x协议，优先级为HTTP2.0>HTTP1.1>HTTP1.0。

> AlpnEnabled开启后需配置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'HTTP1Only',
            'enum' => 
            array (
              0 => 'HTTP1Only',
              1 => 'HTTP2Only',
              2 => 'HTTP2Preferred',
              3 => 'HTTP2Optional',
            ),
          ),
        ),
        15 => 
        array (
          'name' => 'Cps',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例每秒新建连接限速值。取值范围：**0**~**1000000**。**0**表示不限速。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10000',
          ),
        ),
        16 => 
        array (
          'name' => 'Mss',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'TCP报文的最大段大小。单位：字节，取值范围：**0**~**1500**。**0**表示不修改用户TCP报文的MSS值。仅TCP、TCPSSL类型的监听支持该字段值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '344',
          ),
        ),
        17 => 
        array (
          'name' => 'ProxyProtocolV2Config',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '通过Proxy Protocol协议携带VpcId、PrivateLinkEpId、PrivateLinkEpsId信息到后端服务器配置。',
            'type' => 'object',
            'properties' => 
            array (
              'Ppv2VpcIdEnabled' => 
              array (
                'description' => '是否开启通过Proxy Protocol协议携带VpcId到后端服务器。取值：

- **true**：开启。

- **false**：关闭。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'Ppv2PrivateLinkEpIdEnabled' => 
              array (
                'description' => '是否开启通过Proxy Protocol协议携带PrivateLinkEpId到后端服务器。取值：

- **true**：开启。

- **false**：关闭。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'Ppv2PrivateLinkEpsIdEnabled' => 
              array (
                'description' => '是否开启通过Proxy Protocol协议携带PrivateLinkEpsId到后端服务器。取值：

- **true**：开启。

- **false**：关闭。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
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
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'title' => 'RpcResponse<UpdateOrDeleteListenerResponse>',
            'description' => '更新监听配置。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'JobId' => 
              array (
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
            'errorCode' => 'Mismatch.VpcId',
            'errorMessage' => 'The VpcId is mismatched for %s and %s.',
          ),
          1 => 
          array (
            'errorCode' => 'Conflict.Port',
            'errorMessage' => 'The Port [%s] is conflict.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotFound.Certificate',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          3 => 
          array (
            'errorCode' => 'IncorrectStatus.listener',
            'errorMessage' => 'The status of listener [%s] is incorrect.',
          ),
          4 => 
          array (
            'errorCode' => 'IdempotenceSignatureMismatch',
            'errorMessage' => 'The idempotence token of request is same with the prev one, but the signature is different.',
          ),
          5 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
          6 => 
          array (
            'errorCode' => 'ResourceAlreadyAssociated.Certificate',
            'errorMessage' => 'The specified resource %s is already associated.',
          ),
          7 => 
          array (
            'errorCode' => 'IllegalParamSize.certificateIds',
            'errorMessage' => 'The param size of certificateIds or  caCertificateIds is illegal.',
          ),
          8 => 
          array (
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'System is busy, please try again later.',
          ),
          9 => 
          array (
            'errorCode' => 'IllegalParam.IdleTimeout',
            'errorMessage' => 'The param of IdleTimeout is illegal.',
          ),
          10 => 
          array (
            'errorCode' => 'OperationDenied.RegionNotSupportHDMonitor',
            'errorMessage' => 'The operation is not allowed because of RegionNotSupportHDMonitor.',
          ),
          11 => 
          array (
            'errorCode' => 'ResourceNotEnough.CaCertificateApiCount',
            'errorMessage' => 'The specified resource of CaCertificateApiCount is not enough.',
          ),
          12 => 
          array (
            'errorCode' => 'IllegalParam',
            'errorMessage' => 'The param of %s is illegal.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.listener',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.HdMonitorConfigNotExist',
            'errorMessage' => 'The specified resource of HdMonitorConfigNotExist is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotFound.CaCertificate',
            'errorMessage' => 'The specified resource of CaCertificate is not found.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.securitypolicy',
            'errorMessage' => 'The specified resource of securitypolicy is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateListenerAttributeResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</UpdateListenerAttributeResponse>","errorExample":""}]',
      'title' => '更新监听配置',
    ),
    'ListListeners' => 
    array (
      'summary' => '查询网络型负载均衡监听列表。',
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
          'name' => 'ListenerIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '监听唯一标识',
            'description' => '监听实例ID。最多支持20个监听ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '监听实例ID。最多支持20个监听ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'lsn-bp1bpn0kn908w4nbw****',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        1 => 
        array (
          'name' => 'LoadBalancerIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '负载均衡实例标识',
            'description' => '网络型负载均衡实例ID。最多支持20个实例ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '网络型负载均衡实例ID。最多支持20个实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'nlb-83ckzc8d4xlp8o****',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        2 => 
        array (
          'name' => 'ListenerProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '监听协议',
            'description' => '监听协议。取值：**TCP**、**UDP**或**TCPSSL**。',
            'type' => 'string',
            'required' => false,
            'example' => 'TCPSSL',
          ),
        ),
        3 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '实例的标签键。最多支持输入20个标签键。一旦输入该值，则不允许为空字符串。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'env',
                ),
                'Value' => 
                array (
                  'description' => '实例的标签值。最多支持输入20个标签值。一旦输入该值，可以为空字符串。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'product',
                ),
              ),
              'required' => false,
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
- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
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
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
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
            'title' => 'RpcResponse<ListListenersResponse>',
            'description' => '查询监听列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'Listeners' => 
              array (
                'description' => '网络型负载均衡监听列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '网络型负载均衡监听列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Tags' => 
                    array (
                      'description' => '标签列表。',
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
                            'example' => 'Created',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签值。',
                            'type' => 'string',
                            'example' => 'TF',
                          ),
                        ),
                      ),
                    ),
                    'LoadBalancerId' => 
                    array (
                      'description' => '网络型负载均衡实例ID。',
                      'type' => 'string',
                      'example' => 'nlb-83ckzc8d4xlp8o****',
                    ),
                    'ListenerId' => 
                    array (
                      'title' => '自己生成后赋值',
                      'description' => '监听ID。',
                      'type' => 'string',
                      'example' => 'lsn-ga6sjjcll6ou34l1et****',
                    ),
                    'ListenerProtocol' => 
                    array (
                      'title' => '监听协议 (TCP, UDP, TCPSSL, GENEVE)',
                      'description' => '监听协议。取值：**TCP**、**UDP**或**TCPSSL**。',
                      'type' => 'string',
                      'example' => 'TCPSSL',
                    ),
                    'ListenerPort' => 
                    array (
                      'title' => '监听端口',
                      'description' => '监听端口。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '443',
                    ),
                    'StartPort' => 
                    array (
                      'title' => 'anyPort监听起始端口',
                      'description' => '全端口监听起始端口。',
                      'type' => 'string',
                      'example' => '233',
                    ),
                    'EndPort' => 
                    array (
                      'title' => 'anyPort监听结束端口',
                      'description' => '全端口监听结束端口。',
                      'type' => 'string',
                      'example' => '455',
                    ),
                    'ListenerDescription' => 
                    array (
                      'title' => '监听描述',
                      'description' => '自定义监听名称。

长度限制为2~256个字符，支持中文和英文字母，可包含数字、半角逗号（,）、半角句号（.）、半角分号（;）、正斜线（/）、at（@）、下划线（_）和短划线（-）。',
                      'type' => 'string',
                      'example' => 'tcpssl_443',
                    ),
                    'ServerGroupId' => 
                    array (
                      'title' => 'servergroupId',
                      'description' => '服务器组ID。',
                      'type' => 'string',
                      'example' => 'sgp-ppdpc14gdm3x4o****',
                    ),
                    'IdleTimeout' => 
                    array (
                      'title' => '空闲超时时间',
                      'description' => '连接空闲超时时间。单位：秒。取值范围：**1**~**900**。默认值：**900**。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '900',
                    ),
                    'SecurityPolicyId' => 
                    array (
                      'title' => 'Tclssl监听的安全策略',
                      'description' => '安全策略ID。

> 仅对TCPSSL监听生效。',
                      'type' => 'string',
                      'example' => 'tls_cipher_policy_1_1',
                    ),
                    'CertificateIds' => 
                    array (
                      'title' => 'server证书列表',
                      'description' => '服务器证书列表信息。

> 仅对TCPSSL监听生效。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '服务器证书列表信息。

> 仅对TCPSSL监听生效。',
                        'type' => 'string',
                        'example' => '123157******',
                      ),
                    ),
                    'CaCertificateIds' => 
                    array (
                      'title' => 'ca 证书列表',
                      'description' => 'CA证书列表信息。
> 仅对TCPSSL监听生效。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'CA证书列表信息。
> 仅对TCPSSL监听生效。',
                        'type' => 'string',
                        'example' => '139a00******',
                      ),
                    ),
                    'CaEnabled' => 
                    array (
                      'description' => '是否启动双向认证。取值：

- **true**：启动。

- **false**：关闭。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'ListenerStatus' => 
                    array (
                      'description' => '当前监听的状态，取值：

- **Provisioning**：创建中。

- **Running**：运行中。

- **Configuring**：配置中。

- **Stopping**：停止中。

- **Stopped**：已停止。

- **Starting**：启动中。

- **Deleting**：删除中。

- **Deleted**：已删除。',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'RegionId' => 
                    array (
                      'title' => '业务location',
                      'description' => '网络型负载均衡实例所在的地域ID。 ',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'AlpnEnabled' => 
                    array (
                      'description' => '是否开启ALPN。取值：

- **true**：开启。

- **false**：关闭。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'AlpnPolicy' => 
                    array (
                      'description' => 'ALPN策略。取值：

- **HTTP1Only**
- **HTTP2Only**
- **HTTP2Preferred**
- **HTTP2Optional**',
                      'type' => 'string',
                      'example' => 'HTTP1Only',
                    ),
                    'SecSensorEnabled' => 
                    array (
                      'description' => '是否开启秒级监控功能。取值：

- **true**：开启。

- **false**：关闭。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'ProxyProtocolEnabled' => 
                    array (
                      'description' => '是否开启通过Proxy Protocol协议携带客户端源地址到后端服务器。取值：

- **true**：开启。

- **false**：关闭。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'ProxyProtocolV2Config' => 
                    array (
                      'description' => '通过Proxy Protocol协议携带VpcId、PrivateLinkEpId、PrivateLinkEpsId信息到后端服务器配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Ppv2VpcIdEnabled' => 
                        array (
                          'description' => '是否开启通过Proxy Protocol协议携带VpcId到后端服务器。取值：

- **true**：开启。

- **false**：关闭。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'Ppv2PrivateLinkEpIdEnabled' => 
                        array (
                          'description' => '是否开启通过Proxy Protocol协议携带PrivateLinkEpId到后端服务器。取值：

- **true**：开启。

- **false**：关闭。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'Ppv2PrivateLinkEpsIdEnabled' => 
                        array (
                          'description' => '是否开启通过Proxy Protocol协议携带PrivateLinkEpsId到后端服务器。取值：

- **true**：开启。

- **false**：关闭。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                      ),
                    ),
                    'Cps' => 
                    array (
                      'description' => '网络型负载均衡实例每秒新建连接限速值。取值范围：**0**~**1000000**。**0**表示不限速。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1000',
                    ),
                    'Mss' => 
                    array (
                      'description' => 'TCP报文的最大段大小。单位：字节，取值范围：**0**~**1500**。**0**表示不修改用户TCP报文的MSS值。

> 仅TCP、TCPSSL类型的监听支持该字段值。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '200',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '列表条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
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
            ),
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
            'errorMessage' => 'System is busy, please try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParam',
            'errorMessage' => 'The param of %s is illegal.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"Listeners\\": [\\n    {\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"Created\\",\\n          \\"Value\\": \\"TF\\"\\n        }\\n      ],\\n      \\"LoadBalancerId\\": \\"nlb-83ckzc8d4xlp8o****\\",\\n      \\"ListenerId\\": \\"lsn-ga6sjjcll6ou34l1et****\\",\\n      \\"ListenerProtocol\\": \\"TCPSSL\\",\\n      \\"ListenerPort\\": 443,\\n      \\"StartPort\\": \\"233\\",\\n      \\"EndPort\\": \\"455\\",\\n      \\"ListenerDescription\\": \\"tcpssl_443\\",\\n      \\"ServerGroupId\\": \\"sgp-ppdpc14gdm3x4o****\\",\\n      \\"IdleTimeout\\": 900,\\n      \\"SecurityPolicyId\\": \\"tls_cipher_policy_1_1\\",\\n      \\"CertificateIds\\": [\\n        \\"123157******\\"\\n      ],\\n      \\"CaCertificateIds\\": [\\n        \\"139a00******\\"\\n      ],\\n      \\"CaEnabled\\": false,\\n      \\"ListenerStatus\\": \\"Running\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"AlpnEnabled\\": false,\\n      \\"AlpnPolicy\\": \\"HTTP1Only\\",\\n      \\"SecSensorEnabled\\": false,\\n      \\"ProxyProtocolEnabled\\": false,\\n      \\"ProxyProtocolV2Config\\": {\\n        \\"Ppv2VpcIdEnabled\\": false,\\n        \\"Ppv2PrivateLinkEpIdEnabled\\": false,\\n        \\"Ppv2PrivateLinkEpsIdEnabled\\": false\\n      },\\n      \\"Cps\\": 1000,\\n      \\"Mss\\": 200\\n    }\\n  ],\\n  \\"TotalCount\\": 4,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 20\\n}","errorExample":""},{"type":"xml","example":"<ListListenersResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <Listeners>\\n        <LoadBalancerId>nlb-83ckzc8d4xlp8o****</LoadBalancerId>\\n        <ListenerId>lsn-ga6sjjcll6ou34l1et****</ListenerId>\\n        <ListenerProtocol>TCPSSL</ListenerProtocol>\\n        <ListenerPort>443</ListenerPort>\\n        <StartPort>233</StartPort>\\n        <EndPort>455</EndPort>\\n        <ListenerDescription>tcpssl_443</ListenerDescription>\\n        <ServerGroupId>sgp-ppdpc14gdm3x4o****</ServerGroupId>\\n        <IdleTimeout>900</IdleTimeout>\\n        <SecurityPolicyId>tls_cipher_policy_1_1</SecurityPolicyId>\\n        <CertificateIds>12315790212_166f8204689_1714763408_70998****</CertificateIds>\\n        <CaCertificateIds>139a00604ad-cn-east-hangzh****</CaCertificateIds>\\n        <CaEnabled>false</CaEnabled>\\n        <ListenerStatus>Running</ListenerStatus>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <AlpnEnabled>false</AlpnEnabled>\\n        <AlpnPolicy>ALPN</AlpnPolicy>\\n        <SecSensorEnabled>false</SecSensorEnabled>\\n        <ProxyProtocolEnabled>false</ProxyProtocolEnabled>\\n        <Cps>1000</Cps>\\n        <Mss>200</Mss>\\n    </Listeners>\\n    <TotalCount>4</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>20</MaxResults>\\n</ListListenersResponse>","errorExample":""}]',
      'title' => '查询监听',
    ),
    'GetListenerAttribute' => 
    array (
      'summary' => '查询网络型负载均衡实例的监听详情。',
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
            'title' => 'update or delete必选, add在custom中生成',
            'description' => '监听ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lsn-bp1bpn0kn908w4nbw****',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会查询监听详情。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
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

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
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
            'title' => 'RpcResponse<GetListenerAttributeResponse>',
            'description' => '查询监听属性。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'RegionId' => 
              array (
                'title' => '业务location',
                'description' => '网络型负载均衡实例所在的地域ID。 ',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'LoadBalancerId' => 
              array (
                'title' => '列表id',
                'description' => '网络型负载均衡实例ID。',
                'type' => 'string',
                'example' => 'nlb-83ckzc8d4xlp8o****',
              ),
              'ListenerId' => 
              array (
                'title' => '监听id',
                'description' => '监听ID。',
                'type' => 'string',
                'example' => 'lsn-ga6sjjcll6ou34l1et****',
              ),
              'ListenerProtocol' => 
              array (
                'title' => '监听协议 (TCP, UDP, TCPSSL, GENEVE)',
                'description' => '监听协议。取值：**TCP**、**UDP**或**TCPSSL**。',
                'type' => 'string',
                'example' => 'TCPSSL',
              ),
              'ListenerPort' => 
              array (
                'title' => '监听端口',
                'description' => '监听端口。取值范围：**0**~**65535**。**0**：表示使用全端口监听。当设置为**0**时，您需要配置**StartPort**和**EndPort**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '233',
              ),
              'StartPort' => 
              array (
                'title' => 'anyPort监听起始端口',
                'description' => '全端口监听起始端口。取值范围：**0** ~ **65535**。',
                'type' => 'string',
                'example' => '233',
              ),
              'EndPort' => 
              array (
                'title' => 'anyPort监听结束端口',
                'description' => '全端口监听结束端口。取值范围：**0**~ **65535**。结束端口的取值小于起始端口。',
                'type' => 'string',
                'example' => '455',
              ),
              'ListenerDescription' => 
              array (
                'title' => '监听描述',
                'description' => '自定义监听名称。

长度限制为2~256个字符，支持中文和英文字母，可包含数字、半角逗号（,）、半角句号（.）、半角分号（;）、正斜线（/）、at（@）、下划线（_）和短划线（-）。',
                'type' => 'string',
                'example' => 'tcpssl_443',
              ),
              'ServerGroupId' => 
              array (
                'title' => 'servergroupId',
                'description' => '服务器组ID。',
                'type' => 'string',
                'example' => 'sgp-ppdpc14gdm3x4o****',
              ),
              'IdleTimeout' => 
              array (
                'title' => '空闲超时时间',
                'description' => '连接空闲超时时间。单位：秒。取值范围：**1**~**900**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '900',
              ),
              'SecurityPolicyId' => 
              array (
                'title' => 'Tclssl监听的安全策略',
                'description' => '安全策略ID。支持系统安全策略和自定义安全策略。

- 系统策略取值：**tls_cipher_policy_1_0**（默认值）、**tls_cipher_policy_1_1**、**tls_cipher_policy_1_2**、**tls_cipher_policy_1_2_strict**或**tls_cipher_policy_1_2_strict_with_1_3**。
- 自定义安全策略：输入自定义安全策略ID。
    - 创建自定义策略，请参见[CreateSecurityPolicy](~~445901~~)。
    - 查询安全策略，请参见[ListSecurityPolicy](~~445900~~)。

>仅对TCPSSL监听生效。',
                'type' => 'string',
                'example' => 'tls_cipher_policy_1_0',
              ),
              'CertificateIds' => 
              array (
                'title' => 'server证书列表',
                'description' => '服务器证书列表信息。目前仅支持添加1个服务器证书。

> 该参数仅对TCPSSL监听生效。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '服务器证书列表信息。目前仅支持添加1个服务器证书。

> 该参数仅对TCPSSL监听生效。',
                  'type' => 'string',
                  'example' => '123157******',
                ),
              ),
              'CaCertificateIds' => 
              array (
                'title' => 'ca 证书列表',
                'description' => 'CA证书列表信息。目前仅支持添加1个CA证书。
> 该参数仅对TCPSSL监听生效。
',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'CA证书列表信息。目前仅支持添加1个CA证书。
> 该参数仅对TCPSSL监听生效。',
                  'type' => 'string',
                  'example' => '139a00******',
                ),
              ),
              'CaEnabled' => 
              array (
                'description' => '是否启动双向认证。取值：

- **true**：启动。

- **false**：关闭。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'AlpnEnabled' => 
              array (
                'description' => '是否开启ALPN。取值：

- **true**：开启。

- **false**：关闭。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'AlpnPolicy' => 
              array (
                'description' => 'ALPN策略。取值：

- **HTTP1Only**
- **HTTP2Only**
- **HTTP2Preferred**
- **HTTP2Optional**',
                'type' => 'string',
                'example' => 'HTTP1Only',
              ),
              'ProxyProtocolEnabled' => 
              array (
                'description' => '是否开启通过Proxy Protocol协议携带客户端源地址到后端服务器。取值：

- **true**：开启。

- **false**：关闭。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'ProxyProtocolV2Config' => 
              array (
                'description' => '通过Proxy Protocol协议携带VpcId、PrivateLinkEpId、PrivateLinkEpsId信息到后端服务器配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'Ppv2VpcIdEnabled' => 
                  array (
                    'description' => '是否开启通过Proxy Protocol协议携带VpcId到后端服务器。取值：

- **true**：开启。

- **false**：关闭。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'Ppv2PrivateLinkEpIdEnabled' => 
                  array (
                    'description' => '是否开启通过Proxy Protocol协议携带PrivateLinkEpId到后端服务器。取值：

- **true**：开启。

- **false**：关闭。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'Ppv2PrivateLinkEpsIdEnabled' => 
                  array (
                    'description' => '是否开启通过Proxy Protocol协议携带PrivateLinkEpsId到后端服务器。取值：

- **true**：开启。

- **false**：关闭。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                ),
              ),
              'SecSensorEnabled' => 
              array (
                'description' => '是否开启秒级监控功能。取值：

- **true**：开启。

- **false**：关闭。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'ListenerStatus' => 
              array (
                'description' => '当前监听的状态，取值：

- **Provisioning**：创建中。

- **Running**：运行中。

- **Configuring**：配置中。

- **Stopping**：停止中。

- **Stopped**：已停止。

- **Starting**：启动中。

- **Deleting**：删除中。

- **Deleted**：已删除。',
                'type' => 'string',
                'example' => 'Running',
              ),
              'Cps' => 
              array (
                'description' => '网络型负载均衡实例每秒新建连接限速值。取值范围：**0**~**1000000**。**0**表示不限速。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1000',
              ),
              'Mss' => 
              array (
                'description' => 'TCP报文的最大段大小。单位：字节，取值范围：**0**~**1500**。**0**表示不修改用户TCP报文的MSS值。

> 仅TCP、TCPSSL类型的监听支持该字段值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '166',
              ),
              'Tags' => 
              array (
                'description' => '标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TagKey' => 
                    array (
                      'description' => '标签键。',
                      'type' => 'string',
                      'example' => 'ac-cus-tag-4',
                    ),
                    'TagValue' => 
                    array (
                      'description' => '标签值。',
                      'type' => 'string',
                      'example' => 'ON',
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
            'errorMessage' => 'System is busy, please try again later.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.loadBalancer',
            'errorMessage' => 'The specified resource of loadbalancer is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.listener',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"LoadBalancerId\\": \\"nlb-83ckzc8d4xlp8o****\\",\\n  \\"ListenerId\\": \\"lsn-ga6sjjcll6ou34l1et****\\",\\n  \\"ListenerProtocol\\": \\"TCPSSL\\",\\n  \\"ListenerPort\\": 233,\\n  \\"StartPort\\": \\"233\\",\\n  \\"EndPort\\": \\"455\\",\\n  \\"ListenerDescription\\": \\"tcpssl_443\\",\\n  \\"ServerGroupId\\": \\"sgp-ppdpc14gdm3x4o****\\",\\n  \\"IdleTimeout\\": 900,\\n  \\"SecurityPolicyId\\": \\"tls_cipher_policy_1_0\\",\\n  \\"CertificateIds\\": [\\n    \\"123157******\\"\\n  ],\\n  \\"CaCertificateIds\\": [\\n    \\"139a00******\\"\\n  ],\\n  \\"CaEnabled\\": false,\\n  \\"AlpnEnabled\\": false,\\n  \\"AlpnPolicy\\": \\"HTTP1Only\\",\\n  \\"ProxyProtocolEnabled\\": false,\\n  \\"ProxyProtocolV2Config\\": {\\n    \\"Ppv2VpcIdEnabled\\": false,\\n    \\"Ppv2PrivateLinkEpIdEnabled\\": false,\\n    \\"Ppv2PrivateLinkEpsIdEnabled\\": false\\n  },\\n  \\"SecSensorEnabled\\": false,\\n  \\"ListenerStatus\\": \\"Running\\",\\n  \\"Cps\\": 1000,\\n  \\"Mss\\": 166,\\n  \\"Tags\\": [\\n    {\\n      \\"TagKey\\": \\"ac-cus-tag-4\\",\\n      \\"TagValue\\": \\"ON\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetListenerAttributeResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <LoadBalancerId>nlb-83ckzc8d4xlp8o****</LoadBalancerId>\\n    <ListenerId>lsn-ga6sjjcll6ou34l1et****</ListenerId>\\n    <ListenerProtocol>TCPSSL</ListenerProtocol>\\n    <ListenerPort>233</ListenerPort>\\n    <StartPort>233</StartPort>\\n    <EndPort>455</EndPort>\\n    <ListenerDescription>tcpssl_443</ListenerDescription>\\n    <ServerGroupId>sgp-ppdpc14gdm3x4o****</ServerGroupId>\\n    <IdleTimeout>900</IdleTimeout>\\n    <SecurityPolicyId>tls_cipher_policy_1_0</SecurityPolicyId>\\n    <CertificateIds>12315790212_166f8204689_1714763408_70998****</CertificateIds>\\n    <CaCertificateIds>139a00604ad-cn-east-hangzh****</CaCertificateIds>\\n    <CaEnabled>false</CaEnabled>\\n    <AlpnEnabled>false</AlpnEnabled>\\n    <AlpnPolicy>HTTP1Only</AlpnPolicy>\\n    <ProxyProtocolEnabled>false</ProxyProtocolEnabled>\\n    <SecSensorEnabled>false</SecSensorEnabled>\\n    <ListenerStatus>Running</ListenerStatus>\\n    <Cps>1000</Cps>\\n    <Mss>166</Mss>\\n</GetListenerAttributeResponse>","errorExample":""}]',
      'title' => '查询监听的属性',
    ),
    'GetListenerHealthStatus' => 
    array (
      'summary' => '查询网络型负载均衡实例监听的健康检查状态。',
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
          'name' => 'ListenerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例的监听ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lsn-bp1bpn0kn908w4nbw****',
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
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
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
            'title' => 'RpcResponse<GetListenerHealthStatusResponse>',
            'description' => '查询监听健康检查状态。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'ListenerHealthStatus' => 
              array (
                'description' => '监听的服务器组健康检查状态列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '监听的服务器组健康检查状态列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ListenerId' => 
                    array (
                      'description' => '网络型负载均衡实例的监听ID。',
                      'type' => 'string',
                      'example' => 'lsn-agkd9gmjx8nd85jjs0****',
                    ),
                    'ListenerPort' => 
                    array (
                      'description' => '监听的端口号。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '80',
                    ),
                    'ListenerProtocol' => 
                    array (
                      'description' => '监听协议。取值：**TCP**、**UDP**或**TCPSSL**。',
                      'type' => 'string',
                      'example' => 'TCPSSL',
                    ),
                    'ServerGroupInfos' => 
                    array (
                      'description' => '服务器组信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '服务器组信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'HeathCheckEnabled' => 
                          array (
                            'description' => '是否开启健康检查。取值：

- **true**：开启。

- **false**：关闭。',
                            'type' => 'boolean',
                            'example' => 'true',
                          ),
                          'ServerGroupId' => 
                          array (
                            'description' => '服务器组ID。',
                            'type' => 'string',
                            'example' => 'sgp-ppdpc14gdm3x4o****',
                          ),
                          'NonNormalServers' => 
                          array (
                            'description' => '非正常状态的后端服务器列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '非正常状态的后端服务器列表。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Status' => 
                                array (
                                  'description' => '健康检查状态。取值：

- **Initial**：初始化中，表示负载均衡实例配置了健康检查，但查不到数据。

- **Unhealthy**：异常，表示连续上报不健康的状态。

- **Unused**：未使用，表示后端服务器的权重为0。

- **Unavailable**：未开启，表示未开启健康检查。',
                                  'type' => 'string',
                                  'example' => 'Initial',
                                ),
                                'Port' => 
                                array (
                                  'description' => '后端服务器端口。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '80',
                                ),
                                'Reason' => 
                                array (
                                  'description' => '非正常状态的原因。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'ReasonCode' => 
                                    array (
                                      'description' => '**Status**为异常状态时的详细原因。取值：

- **CONNECT_TIMEOUT**：负载均衡健康检查时向后端服务器建立连接超时。
- **CONNECT_FAIL**：负载均衡健康检查时向后端服务器建立连接失败。
- **RECV_TIMEOUT**：负载均衡健康检查时从后端服务器接收响应超时。
- **CONNECT_INTERRUPT**：负载均衡健康检查与后端服务器连接中断。
- **HTTP_CODE_NOT_MATCH**：负载均衡健康HTTP检查时从后端服务器接收的响应码与预期配置返回码不一致。
- **HTTP_INVALID_HEADER**：负载均衡健康HTTP检查时从后端服务器接收响应格式错误。',
                                      'type' => 'string',
                                      'example' => 'CONNECT_TIMEOUT',
                                    ),
                                  ),
                                ),
                                'ServerId' => 
                                array (
                                  'description' => '后端服务器ID。',
                                  'type' => 'string',
                                  'example' => 'i-bp1bt75jaujl7tjl****',
                                ),
                                'ServerIp' => 
                                array (
                                  'description' => '后端服务器IP。',
                                  'type' => 'string',
                                  'example' => '192.168.8.10',
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
            ),
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
            'errorMessage' => 'System is busy, please try again later.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.loadBalancer',
            'errorMessage' => 'The specified resource of loadbalancer is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.listener',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"ListenerHealthStatus\\": [\\n    {\\n      \\"ListenerId\\": \\"lsn-agkd9gmjx8nd85jjs0****\\",\\n      \\"ListenerPort\\": 80,\\n      \\"ListenerProtocol\\": \\"TCPSSL\\",\\n      \\"ServerGroupInfos\\": [\\n        {\\n          \\"HeathCheckEnabled\\": true,\\n          \\"ServerGroupId\\": \\"sgp-ppdpc14gdm3x4o****\\",\\n          \\"NonNormalServers\\": [\\n            {\\n              \\"Status\\": \\"Initial\\",\\n              \\"Port\\": 80,\\n              \\"Reason\\": {\\n                \\"ReasonCode\\": \\"CONNECT_TIMEOUT\\"\\n              },\\n              \\"ServerId\\": \\"i-bp1bt75jaujl7tjl****\\",\\n              \\"ServerIp\\": \\"192.168.8.10\\"\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  ],\\n  \\"TotalCount\\": 10,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 20\\n}","errorExample":""},{"type":"xml","example":"<GetListenerHealthStatusResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <ListenerHealthStatus>\\n        <ListenerId>lsn-agkd9gmjx8nd85jjs0****</ListenerId>\\n        <ListenerPort>80</ListenerPort>\\n        <ListenerProtocol>TCPSSL</ListenerProtocol>\\n        <ServerGroupInfos>\\n            <HeathCheckEnabled>true</HeathCheckEnabled>\\n            <ServerGroupId>sgp-ppdpc14gdm3x4o****</ServerGroupId>\\n            <NonNormalServers>\\n                <Status>Initial</Status>\\n                <Port>80</Port>\\n                <Reason>\\n                    <ReasonCode>CONNECT_TIMEOUT</ReasonCode>\\n                </Reason>\\n                <ServerId>i-bp1bt75jaujl7tjl****</ServerId>\\n                <ServerIp>192.168.8.10</ServerIp>\\n            </NonNormalServers>\\n        </ServerGroupInfos>\\n    </ListenerHealthStatus>\\n    <TotalCount>10</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>20</MaxResults>\\n</GetListenerHealthStatusResponse>","errorExample":""}]',
      'title' => '查询监听健康检查状态',
    ),
    'ListListenerCertificates' => 
    array (
      'summary' => '查询TCPSSL监听的服务器证书。',
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
          'name' => 'ListenerId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '监听ID。仅TCPSSL监听有效。',
            'type' => 'string',
            'required' => true,
            'example' => 'lsn-j49ht1jxxqyg45****@80',
          ),
        ),
        1 => 
        array (
          'name' => 'CertType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '证书类型。

- **Ca**：CA证书。
- **Server**：服务器证书。',
            'type' => 'string',
            'required' => false,
            'example' => 'Ca',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'formData',
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
        3 => 
        array (
          'name' => 'MaxResults',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '20',
            'default' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
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
            'title' => 'RpcResponse<ListListenerCertificatesResponse>',
            'description' => '查询TCPSSL监听证书。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2198BD6D-9EBB-5E1C-9C48-E0ABB79CF831',
              ),
              'CertificateIds' => 
              array (
                'description' => '服务器证书列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '服务器证书列表。',
                  'type' => 'string',
                  'example' => '[ "931****-cn-hangzhou"]',
                ),
              ),
              'Certificates' => 
              array (
                'description' => '证书列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '证书列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CertificateId' => 
                    array (
                      'title' => '证书id',
                      'description' => '证书ID，当前仅支持服务器证书。',
                      'type' => 'string',
                      'example' => '12315790343_166f8204689_1714763408_70998****',
                    ),
                    'IsDefault' => 
                    array (
                      'title' => '是否为监听默认证书',
                      'description' => '是否为监听默认证书。取值：

- **true**：默认证书。

- **false**：扩展证书。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Status' => 
                    array (
                      'title' => '证书与监听关联的状态',
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
              'TotalCount' => 
              array (
                'description' => '列表条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
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
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.Protocol',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParam.%s',
            'errorMessage' => 'The param of %s is illegal.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.loadbalancer',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.listener',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2198BD6D-9EBB-5E1C-9C48-E0ABB79CF831\\",\\n  \\"CertificateIds\\": [\\n    \\"[ \\\\\\"931****-cn-hangzhou\\\\\\"]\\"\\n  ],\\n  \\"Certificates\\": [\\n    {\\n      \\"CertificateId\\": \\"12315790343_166f8204689_1714763408_70998****\\",\\n      \\"IsDefault\\": true,\\n      \\"Status\\": \\"Associating\\",\\n      \\"CertificateType\\": \\"Server\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 1,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 20\\n}","errorExample":""},{"type":"xml","example":"<ListListenerCertificatesResponse>\\n    <RequestId>2198BD6D-9EBB-5E1C-9C48-E0ABB79CF831</RequestId>\\n    <CertificateIds>[ \\"931****-cn-hangzhou\\"]</CertificateIds>\\n    <Certificates>\\n        <CertificateId>12315790343_166f8204689_1714763408_70998****</CertificateId>\\n        <IsDefault>true</IsDefault>\\n        <Status>Associating</Status>\\n        <CertificateType>Server</CertificateType>\\n    </Certificates>\\n    <TotalCount>1</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>20</MaxResults>\\n</ListListenerCertificatesResponse>","errorExample":""}]',
      'title' => '查询TCPSSL监听证书',
    ),
    'AssociateAdditionalCertificatesWithListener' => 
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AdditionalCertificateIds',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => 'server扩展证书列表',
            'description' => '扩展证书列表。一次调用最多支持为监听关联15个扩展证书。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '扩展证书列表。一次调用最多支持为监听关联15个扩展证书。',
              'type' => 'string',
              'required' => false,
              'example' => '123157******',
            ),
            'required' => true,
            'maxItems' => 15,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'ListenerId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'update or delete必选, add在custom中生成',
            'description' => '监听ID。该接口仅支持输入TCPSSL监听ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lsn-bpn0kn908w4nbw****',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会为TCPSSL监听添加扩展证书。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。  ',
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
            'title' => 'RpcResponse<AdditionalCertificatesWithListenerResponse>',
            'description' => '为TCPSSL监听添加扩展证书。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF34B540710',
              ),
              'JobId' => 
              array (
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
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'System is busy, please try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.%s',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationFailed.%s',
            'errorMessage' => 'The operation failed because of %s.',
          ),
          3 => 
          array (
            'errorCode' => 'IncorrectStatus.%s',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          4 => 
          array (
            'errorCode' => 'ResourceAlreadyAssociated.%s',
            'errorMessage' => 'The specified resource of %s is already associated.',
          ),
          5 => 
          array (
            'errorCode' => 'IncorrectStatus.listener',
            'errorMessage' => 'The status of listener [%s] is incorrect.',
          ),
          6 => 
          array (
            'errorCode' => 'ResourceAlreadyAssociated.Certificate',
            'errorMessage' => 'The specified resource %s is already associated.',
          ),
          7 => 
          array (
            'errorCode' => 'Conflict.Lock',
            'errorMessage' => 'The Lock [%s] is conflict.',
          ),
          8 => 
          array (
            'errorCode' => 'OperationDenied.Protocol',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          9 => 
          array (
            'errorCode' => 'ResourceNotFound.Certificate',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.%s',
            'errorMessage' => 'The specified resource of %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.listener',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'asynchronous',
        'callback' => 'Nlb::2022-04-30::GetJobStatus',
        'callbackInterval' => 5000,
        'maxCallbackTimes' => 10,
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<AssociateAdditionalCertificatesWithListenerResponse>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</AssociateAdditionalCertificatesWithListenerResponse>","errorExample":""}]',
      'title' => '关联扩展证书和监听',
      'summary' => '为TCPSSL监听关联扩展证书。',
      'description' => '**AssociateAdditionalCertificatesWithListener**接口属于异步接口，即系统返回一个请求ID，但该扩展证书尚未添加成功，系统后台的添加任务仍在进行。您可以调用[ListListenerCertificates](~~615175~~)查询扩展证书的添加状态：

- 当TCPSSL监听处于**Associating**状态时，表示扩展证书正在添加中。
- 当TCPSSL监听处于**Associated**状态时，表示扩展证书添加成功。',
    ),
    'DisassociateAdditionalCertificatesWithListener' => 
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AdditionalCertificateIds',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => 'server扩展证书列表',
            'description' => '扩展证书列表。一次调用最多支持为监听解绑15个扩展证书。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '扩展证书列表。仅支持服务器证书，一次调用最多支持为监听解绑15个扩展证书。',
              'type' => 'string',
              'required' => false,
              'example' => '123157******',
            ),
            'required' => true,
            'maxItems' => 15,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'ListenerId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'update or delete必选, add在custom中生成',
            'description' => '监听ID。该接口仅支持输入TCPSSL监听ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lsn-bpn0kn908w4nbw****',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会为TCPSSL监听解绑扩展证书。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。  ',
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
            'title' => 'RpcResponse<AdditionalCertificatesWithListenerResponse>',
            'description' => 'RpcResponse<AdditionalCertificatesWithListenerResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF34B540710',
              ),
              'JobId' => 
              array (
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
            'errorCode' => 'IncorrectStatus.listener',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectStatus.certificate',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          2 => 
          array (
            'errorCode' => 'IncorrectStatus.loadbalancer',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.Protocol',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.DefaultCertificateUsed',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          5 => 
          array (
            'errorCode' => 'ResourceNotAssociated.Certificate',
            'errorMessage' => 'The specified resource %s is not associated.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.CaCertificateUsed',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          7 => 
          array (
            'errorCode' => 'Conflict.Lock',
            'errorMessage' => 'The Lock [%s] is conflict.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.listener',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.loadBalancer',
            'errorMessage' => 'The specified resource of loadbalancer is not found.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'asynchronous',
        'callback' => 'Nlb::2022-04-30::GetJobStatus',
        'callbackInterval' => 5,
        'maxCallbackTimes' => 10,
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<DisassociateAdditionalCertificatesWithListenerResponse>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</DisassociateAdditionalCertificatesWithListenerResponse>","errorExample":""}]',
      'title' => '解除关联监听和扩展证书',
      'summary' => '解除TCPSSL监听关联的扩展证书。',
      'description' => '**DisassociateAdditionalCertificatesWithListener**接口属于异步接口，即系统返回一个请求ID，但该扩展证书尚未解绑成功，系统后台的解绑任务仍在进行。您可以调用[ListListenerCertificates](~~615175~~)查询扩展证书的解绑状态：
 - 当扩展证书状态处于**Dissociating**状态时，表示扩展证书正在解绑中。
 - 当扩展证书状态处于**Dissociated**状态时，表示扩展证书解绑成功。',
    ),
    'CreateServerGroup' => 
    array (
      'summary' => '在指定地域创建服务器组。',
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
        0 => 
        array (
          'name' => 'ServerGroupType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '服务器组类型',
            'description' => '服务器组类型。取值：

- **Instance**（默认值）：服务器类型，该类型服务器组支持添加**Ecs**、**Ens**、**Eci**类型实例。

- **Ip**：IP地址类型，该类型服务器组支持直接添加IP地址类型的后端服务器。',
            'type' => 'string',
            'required' => false,
            'example' => 'Instance',
            'default' => 'Instance',
            'enum' => 
            array (
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'ServerGroupName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '服务器组名称',
            'description' => '服务器组名称。

长度为2~128个字符，必须以大小写字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'NLB_ServerGroup',
          ),
        ),
        2 => 
        array (
          'name' => 'AddressIPVersion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '协议版本。取值：

- **ipv4**（默认值）：IPv4类型。

- **DualStack**：双栈类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'ipv4',
            'default' => 'Ipv4',
            'enum' => 
            array (
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'Protocol',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '后端服务器类型',
            'description' => '转发到后端服务器使用的通信协议。取值：

- **TCP**（默认值）
- **UDP**
- **TCPSSL**',
            'type' => 'string',
            'required' => false,
            'example' => 'TCP',
            'default' => 'Tcp',
            'enum' => 
            array (
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'VpcId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '服务器组所在vpc的id',
            'description' => '服务器组所在VPC的ID。

> 如果**ServerGroupType**取值为**Instance**时，只有该VPC下的服务器可以加入到该服务器组。',
            'type' => 'string',
            'required' => true,
            'example' => 'vpc-bp15zckdt37pq72zv****',
          ),
        ),
        5 => 
        array (
          'name' => 'AnyPortEnabled',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否开启全端口转发。取值：

- **true**：开启。

- **false**（默认值）：关闭。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'ConnectionDrainEnabled',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否开启连接优雅中断',
            'description' => '是否开启连接优雅中断。取值：

- **true**：开启。

- **false**（默认值）：关闭。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'ConnectionDrainTimeout',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '连接优雅中断超时时间',
            'description' => '设置连接优雅中断超时时间。单位：秒。
取值范围：**0**~**900**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '3600',
            'minimum' => '0',
            'example' => '10',
            'default' => '10',
          ),
        ),
        8 => 
        array (
          'name' => 'Scheduler',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '调度类型',
            'description' => '调度算法。取值：

- **Wrr**（默认值）：加权轮询，权重值越高的后端服务器，被轮询到的概率也越高。

- **Wlc**：加权最小连接数，除了根据每台后端服务器设定的权重值来进行轮询，同时还考虑后端服务器的实际负载（即连接数）。当权重值相同时，当前连接数越小的后端服务器被轮询到的概率也越高。

- **rr**：轮询，按照访问顺序依次将外部请求分发到后端服务器。

- **sch**：源IP哈希：相同的源地址会调度到相同的后端服务器。

- **tch**：四元组哈希，基于四元组（源IP、目的IP、源端口和目的端口）的一致性哈希，相同的流会调度到相同的后端服务器。

- **qch**：QUIC ID哈希，支持将同一个QUIC ID的请求哈希到同一台后端服务器上。

>  仅后端协议为UDP时，支持选择QUIC ID哈希。',
            'type' => 'string',
            'required' => false,
            'example' => 'Wrr',
            'default' => 'wrr',
            'enum' => 
            array (
            ),
          ),
        ),
        9 => 
        array (
          'name' => 'PreserveClientIpEnabled',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否开启客户端地址保持功能。取值：

- **true**（默认值）：开启。
- **false**：关闭。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        10 => 
        array (
          'name' => 'HealthCheckConfig',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '健康检查配置',
            'description' => '健康检查相关配置。',
            'type' => 'object',
            'properties' => 
            array (
              'HealthCheckEnabled' => 
              array (
                'title' => '是否开启健康检查',
                'description' => '是否开启健康检查，取值：

- **true**（默认值）：开启。

- **false**：关闭。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'HealthCheckType' => 
              array (
                'title' => '健康检查协议类型',
                'description' => '健康检查协议。取值：**TCP**（默认值）或**HTTP**。',
                'type' => 'string',
                'required' => false,
                'example' => 'TCP',
              ),
              'HealthCheckConnectPort' => 
              array (
                'title' => '健康检查使用的端口',
                'description' => '健康检查的后端服务器的端口。

取值范围： **0**~**65535**。

默认值：**0**，表示使用后端服务器的端口进行健康检查。

',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '0',
              ),
              'HealthyThreshold' => 
              array (
                'title' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由fail判定为success',
                'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**失败**判定为**成功**。

取值范围：**2**~**10**。

默认值：**2**。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '2',
              ),
              'UnhealthyThreshold' => 
              array (
                'title' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由success判定为fail',
                'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**成功**判定为**失败**。

取值范围：**2**~**10**。

默认值：**2**。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '2',
              ),
              'HealthCheckConnectTimeout' => 
              array (
                'title' => '健康检查响应的最大超时时间',
                'description' => '健康检查响应的最大超时时间。单位：秒。
取值范围：**1**~**300**。
默认值：**5**。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '5',
              ),
              'HealthCheckInterval' => 
              array (
                'title' => '健康检查时间间隔',
                'description' => '健康检查的时间间隔。单位：秒。

取值范围：**1**~**50**。

默认值：**10**。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '10',
              ),
              'HealthCheckDomain' => 
              array (
                'title' => '健康检查的域名',
                'description' => '用于健康检查的域名。取值：

- **$SERVER_IP**：使用后端服务器内网IP。

- **domain**：指定特定域名。长度限制1~80个字符，只能使用大小写字母、数字、短划线（-）、半角句号（.）。

> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                'type' => 'string',
                'required' => false,
                'example' => '$SERVER_IP',
              ),
              'HealthCheckUrl' => 
              array (
                'title' => '健康检查的url',
                'description' => '健康检查路径。

长度为1~80个字符，只能使用大小写英文字母、数字、字符`-/.%?#&`。 必须以正斜线（/）开头。
> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                'type' => 'string',
                'required' => false,
                'example' => '/test/index.html',
              ),
              'HealthCheckHttpCode' => 
              array (
                'title' => '状态码，多个状态码用逗号分隔',
                'description' => '健康状态返回码，多个状态码用半角逗号（,）分隔。
取值：**http\\_2xx**（默认值）、**http\\_3xx**、**http\\_4xx**和**http\\_5xx**。
> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '健康状态返回码，多个状态码用半角逗号（,）分隔。
取值：**http\\_2xx**（默认值）、**http\\_3xx**、**http\\_4xx**和**http\\_5xx**。
> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'http_2xx',
                ),
                'required' => false,
              ),
              'HttpCheckMethod' => 
              array (
                'description' => '健康检查方法，取值：**GET**（默认值）或**HEAD**。
> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                'type' => 'string',
                'required' => false,
                'example' => 'GET',
                'enum' => 
                array (
                ),
              ),
            ),
            'required' => false,
          ),
        ),
        11 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务器组所属的资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        12 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会创建服务器组。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        13 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
        14 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        15 => 
        array (
          'name' => 'Tag',
          'in' => 'formData',
          'allowEmptyValue' => true,
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。最多支持64个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。支持字符包括字母、数字、下划线 (_)、点 (.)、冒号 (:)、斜线 (/)、等号 (=)、加号 (+)、减号 (-)、@符号 (@) 。

一次调用最多支持添加20个标签。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'env',
                ),
                'Value' => 
                array (
                  'description' => '标签值。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。支持字符包括字母、数字、下划线 (_)、点 (.)、冒号 (:)、斜线 (/)、等号 (=)、加号 (+)、减号 (-)、@符号 (@) 。

一次调用最多支持添加20个标签。',
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
            'title' => 'RpcResponse<CreateServerGroupResponse>',
            'description' => '创建服务器组。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'ServerGroupId' => 
              array (
                'description' => '服务器组ID。',
                'type' => 'string',
                'example' => 'sgp-atstuj3rtoptyui****',
              ),
              'JobId' => 
              array (
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
            'errorCode' => 'IllegalParam.AnyPortServerGroupConflictWithHealthCheckConfig',
            'errorMessage' => 'The param of AnyPortServerGroupConflictWithHealthCheckConfig is illegal.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParamFormat.ParseCreateRsPoolRequestFailed',
            'errorMessage' => 'The param format of CreateRsPoolRequest is illegal.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalParam.PreserveClientIpSwitch',
            'errorMessage' => 'The param of PreserveClientIpSwitch is illegal.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.VpcNotSupportIpv6',
            'errorMessage' => 'The operation is not allowed because of VpcNotSupportIpv6.',
          ),
          4 => 
          array (
            'errorCode' => 'IllegalParam.healthCheckDomain',
            'errorMessage' => 'The parameter of healthCheckConfig.healthCheckDomain is illegal.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.UidNotAllowQuic29',
            'errorMessage' => 'The operation is not allowed because of uid not allow quic29 version.',
          ),
          6 => 
          array (
            'errorCode' => 'IlleagalParam.healthCheckUrl',
            'errorMessage' => 'The parameter of healthCheckUrl in healthCheckConfig is illegal.',
          ),
          7 => 
          array (
            'errorCode' => 'IllegalParam.ServerGroupName',
            'errorMessage' => 'The param of ServerGroupName is illegal.',
          ),
          8 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
          9 => 
          array (
            'errorCode' => 'MissingParam.%s',
            'errorMessage' => 'The parameter of %s is missing.',
          ),
          10 => 
          array (
            'errorCode' => 'IllegalParam.ConnectionDrainTimeout',
            'errorMessage' => 'The param of ConnectionDrainTimeout is illegal.',
          ),
          11 => 
          array (
            'errorCode' => 'IllegalParam',
            'errorMessage' => 'The param of %s is illegal.',
          ),
          12 => 
          array (
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'System is busy, please try again later.',
          ),
          13 => 
          array (
            'errorCode' => 'QuotaExceeded.QuotaInsufficient',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Vpc',
            'errorMessage' => 'The specified resource of Vpc is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.ResourceGroup',
            'errorMessage' => 'The param of resourceGroup not existed.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"ServerGroupId\\": \\"sgp-atstuj3rtoptyui****\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateServerGroupResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <ServerGroupId>sgp-atstuj3rtoptyui****</ServerGroupId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</CreateServerGroupResponse>","errorExample":""}]',
      'title' => '创建服务器组',
      'description' => '**CreateServerGroup**接口属于异步接口，即系统返回一个请求ID，但该网络型负载均衡的服务器组尚未创建成功，系统后台的创建任务仍在进行。您可以调用[GetJobStatus](~~445904~~)查询服务器组的创建状态：
   - 当任务状态处于**Succeeded**时，表示服务器组创建成功。
   - 当任务状态处于**Processing**时，表示服务器组正在创建中，在该状态下，您只能执行查询操作，不能执行其他操作。',
    ),
    'AddServersToServerGroup' => 
    array (
      'summary' => '向网络型负载均衡服务器组中添加后端服务器。',
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
        0 => 
        array (
          'name' => 'ServerGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务器组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sgp-atstuj3rtoptyui****',
          ),
        ),
        1 => 
        array (
          'name' => 'Servers',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '后端服务器列表。

> 单次调用最多支持传入200个服务器。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '后端服务器列表。

> 单次调用最多支持传入200个服务器。',
              'type' => 'object',
              'properties' => 
              array (
                'ServerId' => 
                array (
                  'title' => '服务器id',
                  'description' => '后端服务器ID。

- 当服务器组为**Instance**类型时，该参数为**Ecs**、**Eni**、**Eci**的资源ID。

- 当服务器组为**Ip**类型时，该参数为IP地址。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'i-bp67acfmxazb4p****',
                ),
                'ServerType' => 
                array (
                  'title' => '服务器类型',
                  'description' => '后端服务器类型，取值：

- **Ecs**：ECS实例。
- **Eni**：ENI弹性网卡实例。
- **Eci**：ECI弹性容器。
- **Ip**：Ip地址。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'Ecs',
                  'enum' => 
                  array (
                  ),
                ),
                'ServerIp' => 
                array (
                  'title' => '服务器ip',
                  'description' => '服务器IP地址。当服务器组为**Ip**类型时，必须指定IP地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '192.168.6.6',
                ),
                'Port' => 
                array (
                  'title' => '服务器端口',
                  'description' => '后端服务器使用的端口。端口范围**0~65535**，不填则默认传入端口值**0**。

当服务器组开启全端口转发后，添加后端服务器时无需指定端口（默认传入0），NLB将按照前端请求端口转发流量至后端服务器。您可以通过[ListServerGroups](~~445895~~)接口返回的**AnyPortEnabled**字段查询是否开启了全端口转发。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '443',
                ),
                'Weight' => 
                array (
                  'title' => '后端权重',
                  'description' => '后端服务器的权重，取值范围：**0**~**100**。默认值为**100**。如果设置权重为**0**，则不会将请求转发给该后端服务器。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '100',
                  'default' => '100',
                ),
                'Description' => 
                array (
                  'title' => '服务器描述信息',
                  'description' => '服务器描述信息。

长度限制为2-256个字符，可包含英文字母、数字、中文、半角逗号（,）、半角句号（.）、半角分号（;）、正斜线（/）、at（@）、下划线（_）和短划线（-）。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ECS',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 200,
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会添加服务器。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'RpcResponse<AddServersToServerGroupResponse>',
            'description' => '添加后端服务器。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'ServerGroupId' => 
              array (
                'description' => '服务器组ID。',
                'type' => 'string',
                'example' => 'sgp-atstuj3rtoptyui****',
              ),
              'JobId' => 
              array (
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
            'errorCode' => 'Conflict.Lock',
            'errorMessage' => 'The Lock [%s] is conflict.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParam.IP',
            'errorMessage' => 'The param of IP is illegal.',
          ),
          2 => 
          array (
            'errorCode' => 'QuotaExceeded.QuotaInsufficient',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          3 => 
          array (
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'System is busy, please try again later.',
          ),
          4 => 
          array (
            'errorCode' => 'DuplicatedParam.Server',
            'errorMessage' => 'The param of Server is duplicated.',
          ),
          5 => 
          array (
            'errorCode' => 'IncorrectStatus.serverGroup',
            'errorMessage' => 'The status of servergroup [%s] is incorrect.',
          ),
          6 => 
          array (
            'errorCode' => 'Mismatch.VpcId',
            'errorMessage' => 'The VpcId is mismatched for %s and %s.',
          ),
          7 => 
          array (
            'errorCode' => 'Mismatch.ServerType',
            'errorMessage' => 'The ServerType is mismatched for %s and %s.',
          ),
          8 => 
          array (
            'errorCode' => 'IllegalParam.RSPortConflictWithServerGroup',
            'errorMessage' => 'The param of RSPortConflictWithServerGroup is illegal.',
          ),
          9 => 
          array (
            'errorCode' => 'TagInvokeError',
            'errorMessage' => 'listTagsByResourceIds: InvalidResourceId.NotFound : The specified ResourceIds are not found in our records.',
          ),
          10 => 
          array (
            'errorCode' => 'ResourceInUse.IP',
            'errorMessage' => 'The specified resource of IP is in use.',
          ),
          11 => 
          array (
            'errorCode' => 'IllegalParam',
            'errorMessage' => 'The param of %s is illegal.',
          ),
          12 => 
          array (
            'errorCode' => 'MissingParam.%s',
            'errorMessage' => 'The parameter of %s is missing.',
          ),
          13 => 
          array (
            'errorCode' => 'IllegalParam.description',
            'errorMessage' => 'The parameter description of server is illegal.',
          ),
          14 => 
          array (
            'errorCode' => 'MissingParam.IP',
            'errorMessage' => 'The param of IP is missing.',
          ),
          15 => 
          array (
            'errorCode' => 'OperationDenied.ServerGroupNotSupportIpv6',
            'errorMessage' => 'The operation is not allowed because of ServerGroupNotSupportIpv6.',
          ),
          16 => 
          array (
            'errorCode' => 'IncorrectStatus.Eni',
            'errorMessage' => 'Eni status is invalid.',
          ),
          17 => 
          array (
            'errorCode' => 'IdempotenceSignatureMismatch',
            'errorMessage' => 'The idempotence token of request is same with the prev one, but the signature is different.',
          ),
          18 => 
          array (
            'errorCode' => 'Throttling.User',
            'errorMessage' => 'Request was denied due to api flow control.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.serverGroup',
            'errorMessage' => 'The specified resource of serverGroup is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.Eci',
            'errorMessage' => 'The specified resource of Eci is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotFound.Ecs',
            'errorMessage' => 'The specified resource of Ecs is not found.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.Eni',
            'errorMessage' => 'The specified resource Eni is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"ServerGroupId\\": \\"sgp-atstuj3rtoptyui****\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<AddServersToServerGroupResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <ServerGroupId>sgp-atstuj3rtoptyui****</ServerGroupId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</AddServersToServerGroupResponse>","errorExample":""}]',
      'title' => '添加后端服务器',
    ),
    'DeleteServerGroup' => 
    array (
      'summary' => '删除网络型负载均衡的服务器组。',
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
        0 => 
        array (
          'name' => 'ServerGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '服务器组ID',
            'description' => '服务器组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sgp-atstuj3rtoptyui****',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会删除服务器组。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
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
            'title' => 'RpcResponse<DeleteServerGroupResponse>',
            'description' => '删除服务器组。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'JobId' => 
              array (
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
            'errorCode' => 'ResourceInUse.ServerGroup',
            'errorMessage' => 'The specified resource of ServerGroup is in use.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'System is busy, please try again later.',
          ),
          2 => 
          array (
            'errorCode' => 'IncorrectStatus.serverGroup',
            'errorMessage' => 'The status of servergroup [%s] is incorrect.',
          ),
          3 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
          4 => 
          array (
            'errorCode' => 'Conflict.Lock',
            'errorMessage' => 'The Lock [%s] is conflict.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.serverGroup',
            'errorMessage' => 'The specified resource of serverGroup is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteServerGroupResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</DeleteServerGroupResponse>","errorExample":""}]',
      'title' => '删除服务器组',
      'description' => '服务器组未被任何监听使用时支持删除。',
    ),
    'RemoveServersFromServerGroup' => 
    array (
      'summary' => '从网络型负载均衡服务器组中移除后端服务器。',
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
        0 => 
        array (
          'name' => 'ServerGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务器组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sgp-atstuj3rtoptyui****',
          ),
        ),
        1 => 
        array (
          'name' => 'Servers',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '后端服务器列表，单次调用最多支持传入200个服务器。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '后端服务器列表，单次调用最多支持传入200个服务器。',
              'type' => 'object',
              'properties' => 
              array (
                'ServerId' => 
                array (
                  'title' => '服务器id',
                  'description' => '后端服务器ID。

- 当服务器组为**Instance**类型时，该参数为**Ecs**、**Eni**、**Eci**的资源ID。

- 当服务器组为**Ip**类型时，该参数为IP地址。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'i-bp67acfmxazb4p****',
                ),
                'ServerType' => 
                array (
                  'title' => '服务器类型',
                  'description' => '后端服务器类型，取值：

- **Ecs**：ECS实例。
- **Eni**：ENI弹性网卡实例。
- **Eci**：ECI弹性容器。
- **Ip**：Ip地址。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'Ecs',
                  'enum' => 
                  array (
                  ),
                ),
                'ServerIp' => 
                array (
                  'title' => '服务器ip',
                  'description' => '服务器IP地址。当服务器组为**Ip**类型时，必须指定IP地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '192.168.6.6',
                ),
                'Port' => 
                array (
                  'title' => '服务器端口',
                  'description' => '后端服务器使用的端口。端口范围**0**~**65535**，不填则默认传入端口值**0**。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '443',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 200,
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会移除服务器。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
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
            'title' => 'RpcResponse<RemoveServersFromServerGroupResponse>',
            'description' => '移除后端服务器。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'ServerGroupId' => 
              array (
                'description' => '服务器组ID。',
                'type' => 'string',
                'example' => 'sgp-atstuj3rtoptyui****',
              ),
              'JobId' => 
              array (
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
            'errorCode' => 'Conflict.Lock',
            'errorMessage' => 'The Lock [%s] is conflict.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectStatus.serverGroup',
            'errorMessage' => 'The status of servergroup [%s] is incorrect.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalParam.%s',
            'errorMessage' => 'The param of %s is illegal.',
          ),
          3 => 
          array (
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'System is busy, please try again later.',
          ),
          4 => 
          array (
            'errorCode' => 'IdempotenceSignatureMismatch',
            'errorMessage' => 'The idempotence token of request is same with the prev one, but the signature is different.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.BackendServer',
            'errorMessage' => 'The specified resource of BackendServer is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.serverGroup',
            'errorMessage' => 'The specified resource of serverGroup is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"ServerGroupId\\": \\"sgp-atstuj3rtoptyui****\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveServersFromServerGroupResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <ServerGroupId>sgp-atstuj3rtoptyui****</ServerGroupId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</RemoveServersFromServerGroupResponse>","errorExample":""}]',
      'title' => '移除后端服务器',
    ),
    'UpdateServerGroupAttribute' => 
    array (
      'summary' => '更新网络型负载均衡服务器组的配置。',
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
          'name' => 'ServerGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '服务器组ID',
            'description' => '服务器组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sgp-atstuj3rtoptyui****',
          ),
        ),
        1 => 
        array (
          'name' => 'ServerGroupName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '修改后的服务器组名称。

长度为2~128个字符，必须以大小写字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'NLB_ServerGroup1',
          ),
        ),
        2 => 
        array (
          'name' => 'ConnectionDrainEnabled',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否开启连接优雅中断',
            'description' => '是否开启连接优雅中断。取值：

- **true**：开启。

- **false**：不开启。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ConnectionDrainTimeout',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '连接优雅中断超时时间',
            'description' => '设置连接优雅中断超时时间。单位：秒。取值范围：**0**~**900**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'Scheduler',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '调度类型',
            'description' => '调度算法。取值：

- **Wrr**：加权轮询，权重值越高的后端服务器，被轮询到的概率也越高。

- **Wlc**：加权最小连接数，除了根据每台后端服务器设定的权重值来进行轮询，同时还考虑后端服务器的实际负载（即连接数）。当权重值相同时，当前连接数越小的后端服务器被轮询到的概率也越高。

- **rr**：轮询，按照访问顺序依次将外部请求分发到后端服务器。

- **sch**：源IP哈希：相同的源地址会调度到相同的后端服务器。

- **tch**：四元组哈希，基于四元组（源IP、目的IP、源端口和目的端口）的一致性哈希，相同的流会调度到相同的后端服务器。

- **qch**：QUIC ID哈希，支持将同一个QUIC ID的请求哈希到同一台后端服务器上。

> 仅后端协议为UDP时，支持选择QUIC ID哈希。',
            'type' => 'string',
            'required' => false,
            'example' => 'Wrr',
          ),
        ),
        5 => 
        array (
          'name' => 'PreserveClientIpEnabled',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否开启客户端地址保持功能。取值：

- **true**：开启。

- **false**：关闭。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'HealthCheckConfig',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '健康检查配置',
            'description' => '健康检查相关配置。',
            'type' => 'object',
            'properties' => 
            array (
              'HealthCheckEnabled' => 
              array (
                'title' => '是否开启健康检查',
                'description' => '是否开启健康检查，取值：

- **true**：开启。

- **false**：关闭。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'HealthCheckType' => 
              array (
                'title' => '健康检查协议类型',
                'description' => '健康检查协议。取值：**TCP**或**HTTP**。',
                'type' => 'string',
                'required' => false,
                'example' => 'TCP',
              ),
              'HealthCheckConnectPort' => 
              array (
                'title' => '健康检查使用的端口',
                'description' => '健康检查的后端服务器的端口。取值范围：**0**~**65535**。**0**表示使用后端服务器的端口进行健康检查。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '0',
              ),
              'HealthyThreshold' => 
              array (
                'title' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由fail判定为success',
                'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**失败**判定为**成功**。取值范围：**2**~**10**。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '3',
              ),
              'UnhealthyThreshold' => 
              array (
                'title' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由success判定为fail',
                'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**成功**判定为**失败**。取值范围：**2**~**10**。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '3',
              ),
              'HealthCheckConnectTimeout' => 
              array (
                'title' => '健康检查响应的最大超时时间',
                'description' => '健康检查响应的最大超时时间。单位：秒。取值范围：**1**~**300**。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '100',
              ),
              'HealthCheckInterval' => 
              array (
                'title' => '健康检查时间间隔',
                'description' => '健康检查的时间间隔。单位：秒。

取值范围：**1**~**50**。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '5',
              ),
              'HealthCheckDomain' => 
              array (
                'title' => '健康检查的域名',
                'description' => '用于健康检查的域名。取值：
- **$SERVER_IP**：使用后端服务器内网IP。
- **domain**：指定特定域名。长度限制1~80个字符，只能使用小写字母、数字、短划线（-）、半角句号（.）。

> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                'type' => 'string',
                'required' => false,
                'example' => '$SERVER_IP',
              ),
              'HealthCheckUrl' => 
              array (
                'title' => '健康检查的url',
                'description' => '健康检查路径。

长度为1~80个字符，只能使用字母、数字、字符`-/.%?#&=`以及扩展字符`_;~!（)*[]@$^:\',+`。 必须以正斜线（/）开头。
> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                'type' => 'string',
                'required' => false,
                'example' => '/test/index.html',
              ),
              'HealthCheckHttpCode' => 
              array (
                'title' => '状态码，多个状态码用逗号分隔',
                'description' => '健康状态返回码，多个状态码用半角逗号（,）分隔。
取值：**http\\_2xx**（默认值）、**http\\_3xx**、**http\\_4xx**和**http\\_5xx**。
> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '健康状态返回码，多个状态码用半角逗号（,）分隔。
取值：**http\\_2xx**（默认值）、**http\\_3xx**、**http\\_4xx**和**http\\_5xx**。
> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'http_2xx',
                ),
                'required' => false,
              ),
              'HttpCheckMethod' => 
              array (
                'description' => '健康检查方法，取值：**GET**或**HEAD**。
> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                'type' => 'string',
                'required' => false,
                'example' => 'GET',
                'enum' => 
                array (
                ),
              ),
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        8 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会更新服务器组信息。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => ' false',
          ),
        ),
        9 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
            'title' => 'RpcResponse<UpdateServerGroupAttributeResponse>',
            'description' => '更新服务器组配置。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'ServerGroupId' => 
              array (
                'description' => '服务器组ID。',
                'type' => 'string',
                'example' => 'sgp-atstuj3rtoptyui****',
              ),
              'JobId' => 
              array (
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
            'errorCode' => 'IllegalParam.%s',
            'errorMessage' => 'The param of %s is illegal.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'System is busy, please try again later.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalParam.healthCheckDomain',
            'errorMessage' => 'The parameter of healthCheckConfig.healthCheckDomain is illegal.',
          ),
          3 => 
          array (
            'errorCode' => 'IlleagalParam.healthCheckUrl',
            'errorMessage' => 'The parameter of healthCheckUrl in healthCheckConfig is illegal.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.UidNotAllowQuic29',
            'errorMessage' => 'The operation is not allowed because of uid not allow quic29 version.',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalParam',
            'errorMessage' => 'The param of %s is illegal.',
          ),
          6 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
          7 => 
          array (
            'errorCode' => 'IllegalParam.ServerGroupName',
            'errorMessage' => 'The param of ServerGroupName is illegal.',
          ),
          8 => 
          array (
            'errorCode' => 'IllegalParam.PreserveClientIpSwitch',
            'errorMessage' => 'The server group associated with the tcpssl listener does not support enabling PreserveClientIp.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.serverGroup',
            'errorMessage' => 'The specified resource of serverGroup is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"ServerGroupId\\": \\"sgp-atstuj3rtoptyui****\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateServerGroupAttributeResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <ServerGroupId>sgp-atstuj3rtoptyui****</ServerGroupId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</UpdateServerGroupAttributeResponse>","errorExample":""}]',
      'title' => '更新服务器组配置',
    ),
    'UpdateServerGroupServersAttribute' => 
    array (
      'summary' => '更新网络型负载均衡服务器组中后端服务器的权重和描述信息。',
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
          'name' => 'ServerGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务器组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sgp-atstuj3rtoptyui****',
          ),
        ),
        1 => 
        array (
          'name' => 'Servers',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '后端服务器列表，单次调用最多支持传入200个后端服务器。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '后端服务器列表，单次调用最多支持传入200个后端服务器。',
              'type' => 'object',
              'properties' => 
              array (
                'ServerId' => 
                array (
                  'title' => '服务器id',
                  'description' => '后端服务器ID。

- 当服务器组为**Instance**类型时，该参数为**Ecs**、**Eni**、**Eci**的资源ID。

- 当服务器组为**Ip**类型时，该参数为IP地址。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'i-bp67acfmxazb4p****',
                ),
                'ServerType' => 
                array (
                  'title' => '服务器类型',
                  'description' => '后端服务器类型，取值：

- **Ecs**：ECS实例。
- **Eni**：ENI弹性网卡实例。
- **Eci**：ECI弹性容器。
- **Ip**：IP地址。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'Ecs',
                  'enum' => 
                  array (
                  ),
                ),
                'ServerIp' => 
                array (
                  'title' => '服务器ip',
                  'description' => '服务器IP地址。当服务器组为**Ip**类型时，必须指定IP地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '192.168.6.6',
                ),
                'Port' => 
                array (
                  'title' => '服务器端口',
                  'description' => '后端服务器使用的端口。取值范围：**1**~**65535**。

> 该参数暂不支持修改。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'example' => '443',
                ),
                'Weight' => 
                array (
                  'title' => '后端权重',
                  'description' => '后端服务器的权重，取值范围：**0**~**100**。默认值为**100**。如果设置权重为**0**，则不会将请求转发给该后端服务器。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '100',
                ),
                'Description' => 
                array (
                  'title' => '服务器描述信息',
                  'description' => '服务器描述信息。

长度限制为2-256个字符，可包含英文字母、数字、中文、半角逗号（,）、半角句号（.）、半角分号（;）、正斜线（/）、at（@）、下划线（_）和短划线（-）。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '后端服务器描述',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 200,
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会更新服务器配置信息。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
            'title' => 'RpcResponse<UpdateServerGroupServersAttributeResponse>',
            'description' => '更新后端服务器配置。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'ServerGroupId' => 
              array (
                'description' => '服务器组ID。',
                'type' => 'string',
                'example' => 'sgp-atstuj3rtoptyui****',
              ),
              'JobId' => 
              array (
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
            'errorCode' => 'IncorrectStatus.serverGroup',
            'errorMessage' => 'The status of servergroup [%s] is incorrect.',
          ),
          1 => 
          array (
            'errorCode' => 'Conflict.Lock',
            'errorMessage' => 'The Lock [%s] is conflict.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalParam.%s',
            'errorMessage' => 'The param of %s is illegal.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParam.%s',
            'errorMessage' => 'The parameter of %s is missing.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.%s',
            'errorMessage' => 'Authentication is failed for %s.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.BackendServer',
            'errorMessage' => 'The specified resource of BackendServer is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.serverGroup',
            'errorMessage' => 'The specified resource of serverGroup is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"ServerGroupId\\": \\"sgp-atstuj3rtoptyui****\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateServerGroupServersAttributeResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <ServerGroupId>sgp-atstuj3rtoptyui****</ServerGroupId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</UpdateServerGroupServersAttributeResponse>","errorExample":""}]',
      'title' => '更新后端服务器配置',
      'description' => '**UpdateServerGroupServersAttribute**接口属于异步接口，即系统返回一个请求ID，但该后端服务器配置信息尚未添加成功，系统后台的添加任务仍在进行。
1. 您可以调用[ListServerGroups](~~445895~~)查询服务器组状态：
    - 当服务器组处于**Configuring**状态时，表示服务器组正在变配中。
    - 当服务器组处于**Available**状态时，表示服务器组运行中。

2. 您可以调用[ListServerGroupServers](~~445896~~)查询后端服务器状态：
    - 当后端服务器处于**Configuring**状态时，表示后端服务器正在变配中。
    - 当后端服务器处于**Available**状态时，表示后端服务器运行中。',
    ),
    'ListServerGroups' => 
    array (
      'summary' => '查询网络型负载均衡实例的服务器组列表。',
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
          'name' => 'ServerGroupIds',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '服务器组ID。一次最多支持查询20个服务器组ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '服务器组ID。一次最多支持查询20个服务器组ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'sgp-atstuj3rtoptyui****',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        1 => 
        array (
          'name' => 'ServerGroupNames',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '服务器组名称，一次最多支持查询20个服务器组名称。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '服务器组名称，一次最多支持查询20个服务器组名称。',
              'type' => 'string',
              'required' => false,
              'example' => 'NLB_ServerGroup',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务器组所属的资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        3 => 
        array (
          'name' => 'ServerGroupType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务器组类型。取值：

- **Instance**：服务器类型，该类型服务器组支持添加**Ecs**、**Ens**、**Eci**类型实例。
- **Ip**：IP地址类型，该类型服务器组支持直接添加IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'Instance',
          ),
        ),
        4 => 
        array (
          'name' => 'VpcId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '服务器组所在vpc的id',
            'description' => '服务器组所在VPC的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-bp15zckdt37pq72zv****',
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
              'description' => '标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。最多支持10个标签键。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或`者https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Test',
                ),
                'Value' => 
                array (
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
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        6 => 
        array (
          'name' => 'NextToken',
          'in' => 'formData',
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
        7 => 
        array (
          'name' => 'MaxResults',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        8 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
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
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'title' => 'RpcResponse<ListServerGroupsResponse>',
            'description' => '查询服务器组。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B28E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'ServerGroups' => 
              array (
                'description' => '后端服务器组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '后端服务器组列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RegionId' => 
                    array (
                      'title' => '业务region',
                      'description' => '网络型负载均衡实例所在的地域ID。 ',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'ServerGroupId' => 
                    array (
                      'title' => '服务器组id',
                      'description' => '服务器组ID。',
                      'type' => 'string',
                      'example' => 'sgp-atstuj3rtoptyui****',
                    ),
                    'ServerGroupName' => 
                    array (
                      'title' => '服务器组名称',
                      'description' => '服务器组名称。',
                      'type' => 'string',
                      'example' => 'NLB_ServerGroup',
                    ),
                    'ServerGroupType' => 
                    array (
                      'title' => '服务器组类型',
                      'description' => '服务器组类型。取值：

- **Instance**：服务器类型，该类型服务器组支持添加**Ecs**、**Ens**、**Eci**类型实例。
- **Ip**：IP地址类型，该类型服务器组支持直接添加IP地址。',
                      'type' => 'string',
                      'example' => 'Instance',
                    ),
                    'AddressIPVersion' => 
                    array (
                      'title' => '服务器组地址类型',
                      'description' => '协议版本。取值：

- **Ipv4**：ipv4类型。
- **DualStack**：双栈类型。',
                      'type' => 'string',
                      'example' => 'ipv4',
                    ),
                    'VpcId' => 
                    array (
                      'title' => '服务器组的vpcid',
                      'description' => '服务器组所在VPC的ID。',
                      'type' => 'string',
                      'example' => 'vpc-bp15zckdt37pq72zv****',
                    ),
                    'Scheduler' => 
                    array (
                      'title' => '调度类型',
                      'description' => '调度算法。取值：

- **Wrr**：加权轮询，权重值越高的后端服务器，被轮询到的概率也越高。
- **Wlc**：加权最小连接数，除了根据每台后端服务器设定的权重值来进行轮询，同时还考虑后端服务器的实际负载（即连接数）。当权重值相同时，当前连接数越小的后端服务器被轮询到的概率也越高。
- **rr**：轮询，按照访问顺序依次将外部请求分发到后端服务器sch：源IP哈希：相同的源地址会调度到相同的后端服务器。
- **sch**：源IP哈希，相同的源地址会调度到相同的后端服务器。
- **tch**：四元组哈希，基于四元组（源IP、目的IP、源端口和目的端口）的一致性哈希，相同的流会调度到相同的后端服务器。
- **qch**：QUIC ID哈希，支持将同一个QUIC ID的请求哈希到同一台后端服务器上。',
                      'type' => 'string',
                      'example' => 'Wrr',
                    ),
                    'Protocol' => 
                    array (
                      'title' => '后端协议',
                      'description' => '后端转发协议，取值：**TCP**、**UDP**或**TCPSSL**。
',
                      'type' => 'string',
                      'example' => 'TCP',
                    ),
                    'HealthCheck' => 
                    array (
                      'title' => '健康检查配置',
                      'description' => '健康检查配置信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'HealthCheckEnabled' => 
                        array (
                          'title' => '是否开启健康检查',
                          'description' => '是否开启健康检查，取值：

- **true**：开启。

- **false**：关闭。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'HealthCheckType' => 
                        array (
                          'title' => '健康检查协议类型',
                          'description' => '健康检查协议。取值：**TCP**或**HTTP**。',
                          'type' => 'string',
                          'example' => 'TCP',
                        ),
                        'HealthCheckConnectPort' => 
                        array (
                          'title' => '健康检查使用的端口',
                          'description' => '健康检查的后端服务器的端口。

取值范围： **0**~**65535**。

**0**表示使用后端服务器的端口进行健康检查。
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '200',
                        ),
                        'HealthyThreshold' => 
                        array (
                          'title' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由fail判定为success',
                          'description' => '健康检查连续成功多少次后，将后端服务器的健康检查状态由**失败**判定为**成功**。

取值范围：**2**~**10**。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'UnhealthyThreshold' => 
                        array (
                          'title' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由success判定为fail',
                          'description' => '健康检查连续失败多少次后，将后端服务器的健康检查状态由**成功**判定为**失败**。

取值范围：**2**~**10**。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3',
                        ),
                        'HealthCheckConnectTimeout' => 
                        array (
                          'title' => '健康检查响应的最大超时时间',
                          'description' => '健康检查响应的最大超时时间。单位：秒。
取值范围：**1**~**300**。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '200',
                        ),
                        'HealthCheckInterval' => 
                        array (
                          'title' => '健康检查时间间隔',
                          'description' => '健康检查的时间间隔。单位：秒。

取值范围：**1**~**50**。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '10',
                        ),
                        'HealthCheckDomain' => 
                        array (
                          'title' => '健康检查的域名',
                          'description' => '用于健康检查的域名。取值：

- **$SERVER_IP**：使用后端服务器内网IP。

- **domain**：指定特定域名。长度限制1~80个字符，只能使用小写字母、数字、短划线（-）、半角句号（.）。

> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                          'type' => 'string',
                          'example' => '$SERVER_IP',
                        ),
                        'HealthCheckUrl' => 
                        array (
                          'title' => '健康检查的url',
                          'description' => '健康检查路径。

> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                          'type' => 'string',
                          'example' => '/test/index.html',
                        ),
                        'HealthCheckHttpCode' => 
                        array (
                          'title' => '状态码，多个状态码用逗号分隔',
                          'description' => '健康状态返回码，多个状态码用半角逗号（,）分隔。
取值：**http\\_2xx**、**http\\_3xx**、**http\\_4xx**和**http\\_5xx**。
> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '健康状态返回码，多个状态码用半角逗号（,）分隔。
取值：**http\\_2xx**、**http\\_3xx**、**http\\_4xx**和**http\\_5xx**。
> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                            'type' => 'string',
                            'example' => 'http_2xx',
                          ),
                        ),
                        'HttpCheckMethod' => 
                        array (
                          'description' => '健康检查方法，取值：**GET**或**HEAD**。
> 仅**HealthCheckType**为**HTTP**时，该参数生效。',
                          'type' => 'string',
                          'example' => 'GET',
                        ),
                      ),
                    ),
                    'ConnectionDrainEnabled' => 
                    array (
                      'title' => '连接优雅中断开关',
                      'description' => '是否开启连接优雅中断。取值：

- **true**：开启。

- **false**：关闭。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'ConnectionDrainTimeout' => 
                    array (
                      'title' => '连接优雅中断超时时间',
                      'description' => '设置连接优雅中断超时时间。单位：秒。
取值范围：**10**~**900**。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '200',
                    ),
                    'PreserveClientIpEnabled' => 
                    array (
                      'title' => '客户端地址保持开关',
                      'description' => '是否开启客户端地址保持功能。取值：

- **true**：开启。
- **false**：关闭。

> 特殊说明：**AddressIPVersion**为**ipv4**类型时默认为**true**。**AddressIPVersion**为**ipv6**值时只能是**false**，后续待底层支持后可以为**true**。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'AnyPortEnabled' => 
                    array (
                      'description' => '是否开启全端口转发。取值：

- **true**：开启。

- **false**：关闭。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'title' => '资源组id',
                      'description' => '服务器组所属的资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-atstuj3rtop****',
                    ),
                    'ServerGroupStatus' => 
                    array (
                      'title' => '状态',
                      'description' => '服务器组状态。取值：

- **Creating**：创建中。
- **Available**：可用。
- **Configuring**：变配中。',
                      'type' => 'string',
                      'example' => 'Available',
                    ),
                    'AliUid' => 
                    array (
                      'description' => '用户UID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '165820696622****',
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
                            'description' => '标签键。最多支持10个标签键。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或`者https://`。',
                            'type' => 'string',
                            'example' => 'Test',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签值。最多支持10个标签值。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                            'type' => 'string',
                            'example' => 'Test',
                          ),
                        ),
                      ),
                    ),
                    'RelatedLoadBalancerIds' => 
                    array (
                      'description' => '网络型负载均衡实例列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '网络型负载均衡实例列表。',
                        'type' => 'string',
                        'example' => 'nlb-83ckzc8d4xlp8o****',
                      ),
                    ),
                    'ServerCount' => 
                    array (
                      'description' => '后端服务器数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '列表条目数。',
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
                'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
            ),
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
            'errorMessage' => 'System is busy, please try again later.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.%s',
            'errorMessage' => 'Authentication is failed for %s.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B28E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"ServerGroups\\": [\\n    {\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"ServerGroupId\\": \\"sgp-atstuj3rtoptyui****\\",\\n      \\"ServerGroupName\\": \\"NLB_ServerGroup\\",\\n      \\"ServerGroupType\\": \\"Instance\\",\\n      \\"AddressIPVersion\\": \\"ipv4\\",\\n      \\"VpcId\\": \\"vpc-bp15zckdt37pq72zv****\\",\\n      \\"Scheduler\\": \\"Wrr\\",\\n      \\"Protocol\\": \\"TCP\\",\\n      \\"HealthCheck\\": {\\n        \\"HealthCheckEnabled\\": false,\\n        \\"HealthCheckType\\": \\"TCP\\",\\n        \\"HealthCheckConnectPort\\": 200,\\n        \\"HealthyThreshold\\": 2,\\n        \\"UnhealthyThreshold\\": 3,\\n        \\"HealthCheckConnectTimeout\\": 200,\\n        \\"HealthCheckInterval\\": 10,\\n        \\"HealthCheckDomain\\": \\"$SERVER_IP\\",\\n        \\"HealthCheckUrl\\": \\"/test/index.html\\",\\n        \\"HealthCheckHttpCode\\": [\\n          \\"http_2xx\\"\\n        ],\\n        \\"HttpCheckMethod\\": \\"GET\\"\\n      },\\n      \\"ConnectionDrainEnabled\\": false,\\n      \\"ConnectionDrainTimeout\\": 200,\\n      \\"PreserveClientIpEnabled\\": true,\\n      \\"AnyPortEnabled\\": false,\\n      \\"ResourceGroupId\\": \\"rg-atstuj3rtop****\\",\\n      \\"ServerGroupStatus\\": \\"Available\\",\\n      \\"AliUid\\": 0,\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"Test\\",\\n          \\"Value\\": \\"Test\\"\\n        }\\n      ],\\n      \\"RelatedLoadBalancerIds\\": [\\n        \\"nlb-83ckzc8d4xlp8o****\\"\\n      ],\\n      \\"ServerCount\\": 2\\n    }\\n  ],\\n  \\"TotalCount\\": 1,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 20\\n}","errorExample":""},{"type":"xml","example":"<ListServerGroupsResponse>\\n    <RequestId>54B28E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <ServerGroups>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <ServerGroupId>sgp-atstuj3rtoptyui****</ServerGroupId>\\n        <ServerGroupName>NLB_ServerGroup</ServerGroupName>\\n        <ServerGroupType>Instance</ServerGroupType>\\n        <AddressIPVersion>ipv4</AddressIPVersion>\\n        <VpcId>vpc-bp15zckdt37pq72zv****</VpcId>\\n        <Scheduler>Wrr</Scheduler>\\n        <Protocol>TCP</Protocol>\\n        <HealthCheck>\\n            <HealthCheckEnabled>false</HealthCheckEnabled>\\n            <HealthCheckType>TCP</HealthCheckType>\\n            <HealthCheckConnectPort>200</HealthCheckConnectPort>\\n            <HealthyThreshold>2</HealthyThreshold>\\n            <UnhealthyThreshold>3</UnhealthyThreshold>\\n            <HealthCheckConnectTimeout>200</HealthCheckConnectTimeout>\\n            <HealthCheckInterval>200</HealthCheckInterval>\\n            <HealthCheckDomain>$SERVER_IP</HealthCheckDomain>\\n            <HealthCheckUrl>/test/index.html</HealthCheckUrl>\\n            <HealthCheckHttpCode>http2xx</HealthCheckHttpCode>\\n            <HttpCheckMethod>GET</HttpCheckMethod>\\n        </HealthCheck>\\n        <ConnectionDrainEnabled>false</ConnectionDrainEnabled>\\n        <ConnectionDrainTimeout>200</ConnectionDrainTimeout>\\n        <PreserveClientIpEnabled>true</PreserveClientIpEnabled>\\n        <AnyPortEnabled>false</AnyPortEnabled>\\n        <ResourceGroupId>rg-atstuj3rtop****</ResourceGroupId>\\n        <ServerGroupStatus>Available</ServerGroupStatus>\\n        <Tags>\\n            <Key>Test</Key>\\n            <Value>Test</Value>\\n        </Tags>\\n        <RelatedLoadBalancerIds>nlb-83ckzc8d4xlp8o****</RelatedLoadBalancerIds>\\n        <ServerCount>2</ServerCount>\\n    </ServerGroups>\\n    <TotalCount>1</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>20</MaxResults>\\n</ListServerGroupsResponse>","errorExample":""}]',
      'title' => '查询服务器组',
    ),
    'ListServerGroupServers' => 
    array (
      'summary' => '查询网络型负载均衡服务器组中的服务器列表。',
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
          'name' => 'ServerGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务器组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'sgp-atstuj3rtoptyui****',
          ),
        ),
        1 => 
        array (
          'name' => 'ServerIds',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '服务器ID列表。单次调用最多支持展示40个服务器。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '服务器ID列表。单次调用最多支持展示40个服务器。',
              'type' => 'string',
              'required' => false,
              'example' => 'i-bp67acfmxazb4p****',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        2 => 
        array (
          'name' => 'ServerIps',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '服务器IP列表。单次调用最多支持展示40个服务器。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '服务器IP列表。单次调用最多支持展示40个服务器。',
              'type' => 'string',
              'required' => false,
              'example' => '192.168.6.3',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        3 => 
        array (
          'name' => 'NextToken',
          'in' => 'formData',
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
        4 => 
        array (
          'name' => 'MaxResults',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
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
            'title' => 'RpcResponse<ListServerGroupServersResponse>',
            'description' => '查询服务器。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'Servers' => 
              array (
                'description' => '服务器列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '服务器列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ServerId' => 
                    array (
                      'title' => '服务器id',
                      'description' => '后端服务器ID。',
                      'type' => 'string',
                      'example' => 'i-bp67acfmxazb4p****',
                    ),
                    'ServerType' => 
                    array (
                      'title' => '服务器类型',
                      'description' => '后端服务器类型，取值：

- **Ecs**：ECS实例。
- **Eni**：ENI弹性网卡实例。
- **Eci**：ECI弹性容器。
- **Ip**：IP地址。',
                      'type' => 'string',
                      'example' => 'Ecs',
                    ),
                    'ServerIp' => 
                    array (
                      'title' => '服务器ip',
                      'description' => '后端服务器IP地址。',
                      'type' => 'string',
                      'example' => '192.168.2.1',
                    ),
                    'Port' => 
                    array (
                      'title' => '服务器端口',
                      'description' => '后端服务器使用的端口。取值范围：**1**~**65535**。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '80',
                    ),
                    'Weight' => 
                    array (
                      'title' => '后端权重',
                      'description' => '后端服务器的权重。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '100',
                    ),
                    'ServerGroupId' => 
                    array (
                      'description' => '服务器组ID。',
                      'type' => 'string',
                      'example' => 'sgp-atstuj3rtoptyui****',
                    ),
                    'Description' => 
                    array (
                      'title' => '服务器描述信息',
                      'description' => '后端服务器描述。',
                      'type' => 'string',
                      'example' => 'ECS',
                    ),
                    'ZoneId' => 
                    array (
                      'title' => '服务器对应的zoneId',
                      'description' => '服务器对应的可用区ID。
',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-a',
                    ),
                    'Status' => 
                    array (
                      'title' => '服务器的状态',
                      'description' => '后端服务器的添加状态。取值：

- **Adding**：添加中。
- **Available**：正常可用状态。
- **Configuring**：配置中。
- **Removing**：移除中。',
                      'type' => 'string',
                      'example' => 'Available',
                    ),
                  ),
                ),
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
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
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
            ),
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
            'errorMessage' => 'System is busy, please try again later.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.serverGroup',
            'errorMessage' => 'The specified resource of serverGroup is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"Servers\\": [\\n    {\\n      \\"ServerId\\": \\"i-bp67acfmxazb4p****\\",\\n      \\"ServerType\\": \\"Ecs\\",\\n      \\"ServerIp\\": \\"192.168.2.1\\",\\n      \\"Port\\": 80,\\n      \\"Weight\\": 100,\\n      \\"ServerGroupId\\": \\"sgp-atstuj3rtoptyui****\\",\\n      \\"Description\\": \\"ECS\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-a\\",\\n      \\"Status\\": \\"Available\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 10,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 20\\n}","errorExample":""},{"type":"xml","example":"<ListServerGroupServersResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <Servers>\\n        <ServerId>ecs-bp67acfmxazb4p****</ServerId>\\n        <ServerType>Ecs</ServerType>\\n        <ServerIp>192.168.2.1</ServerIp>\\n        <Port>80</Port>\\n        <Weight>100</Weight>\\n        <ServerGroupId>sgp-atstuj3rtoptyui****</ServerGroupId>\\n        <Description>ECS</Description>\\n        <ZoneId>cn-hangzhou-a</ZoneId>\\n        <Status>Available</Status>\\n    </Servers>\\n    <TotalCount>10</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>20</MaxResults>\\n</ListServerGroupServersResponse>","errorExample":""}]',
      'title' => '查询服务器',
    ),
    'DetachCommonBandwidthPackageFromLoadBalancer' => 
    array (
      'summary' => '解绑网络型负载均衡实例中的共享带宽包。',
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
          'name' => 'LoadBalancerId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'nlb-83ckzc8d4xlp8o****',
          ),
        ),
        1 => 
        array (
          'name' => 'BandwidthPackageId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要移除的共享带宽包ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cbwp-bp1pzf0ym72pu3y76****',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会解绑带宽包。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
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
            'title' => 'response',
            'description' => '解绑共享带宽包。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'JobId' => 
              array (
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
            'errorCode' => 'OperationDenied.%s',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotAssociated.loadbalancer',
            'errorMessage' => 'Thre resource is not associated with loadbalancer.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.loadBalancer',
            'errorMessage' => 'The specified resource of loadbalancer is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<DetachCommonBandwidthPackageFromLoadBalancerResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</DetachCommonBandwidthPackageFromLoadBalancerResponse>","errorExample":""}]',
      'title' => '实例解绑共享带宽包',
    ),
    'AttachCommonBandwidthPackageToLoadBalancer' => 
    array (
      'summary' => '为网络型负载均衡实例绑定共享带宽包。',
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
          'name' => 'LoadBalancerId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'nlb-83ckzc8d4xlp8o****',
          ),
        ),
        1 => 
        array (
          'name' => 'BandwidthPackageId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '绑定的共享带宽包ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cbwp-bp1pzf0ym72pu3y76****',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会绑定带宽包。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
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
            'title' => 'response',
            'description' => '实例绑定共享带宽包。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'JobId' => 
              array (
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
            'errorCode' => 'OperationDenied.IntranetLoadBalancer',
            'errorMessage' => 'The operation is not allowed because of IntranetLoadBalancer.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceAlreadyAssociated.loadbalancer',
            'errorMessage' => 'The specified resource of loadbalancer is already associated.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceInConfiguring.loadbalancer',
            'errorMessage' => 'The specified resource of loadbalancer is being configured, please try again later.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.loadBalancer',
            'errorMessage' => 'The specified resource of loadbalancer is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.BandwidthPackageId',
            'errorMessage' => 'The specified resource of BandwidthPackageId is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotFound.CommonBandwidthPackage',
            'errorMessage' => 'The specified resource of CommonBandwidthPackage is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<AttachCommonBandwidthPackageToLoadBalancerResponse>\\n    <RequestId>CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</AttachCommonBandwidthPackageToLoadBalancerResponse>","errorExample":""}]',
      'title' => '实例绑定共享带宽包',
    ),
    'CreateSecurityPolicy' => 
    array (
      'summary' => '在指定地域创建TCPSSL监听的自定义安全策略。',
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
          'name' => 'TlsVersions',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '支持的TLS协议版本，取值：**TLSv1.0**、**TLSv1.1**、**TLSv1.2**和**TLSv1.3**。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '支持的TLS协议版本，取值：**TLSv1.0**、**TLSv1.1**、**TLSv1.2**和**TLSv1.3**。最多支持添加4个TLS协议版本。',
              'type' => 'string',
              'required' => false,
              'example' => 'TLSv1.0',
            ),
            'required' => true,
            'maxItems' => 4,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'SecurityPolicyName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '安全策略名称。

长度为1~200个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'TLSCipherPolicy',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
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
          'name' => 'Ciphers',
          'in' => 'formData',
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
            'maxItems' => 32,
          ),
        ),
        4 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会创建自定义安全策略。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        7 => 
        array (
          'name' => 'Tag',
          'in' => 'formData',
          'allowEmptyValue' => true,
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。最多支持64个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。支持字符包括字母、数字、下划线 (_)、点 (.)、冒号 (:)、斜线 (/)、等号 (=)、加号 (+)、减号 (-)、@符号 (@) 。

一次调用最多支持添加20个标签。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'KeyTest',
                ),
                'Value' => 
                array (
                  'description' => '标签值。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。支持字符包括字母、数字、下划线 (_)、点 (.)、冒号 (:)、斜线 (/)、等号 (=)、加号 (+)、减号 (-)、@符号 (@) 。

一次调用最多支持添加20个标签。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ValueTest',
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
            'title' => 'RpcResponse<CreateSecurityPolicyResponse>',
            'description' => '创建自定义安全策略。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D7A8875F-373A-5F48-8484-25B07A61F2AF',
              ),
              'SecurityPolicyId' => 
              array (
                'description' => 'TLS安全策略ID。',
                'type' => 'string',
                'example' => 'sp-wuytp9pa******',
              ),
              'JobId' => 
              array (
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
            'errorCode' => 'IllegalParam',
            'errorMessage' => 'The param of %s is illegal.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D7A8875F-373A-5F48-8484-25B07A61F2AF\\",\\n  \\"SecurityPolicyId\\": \\"sp-wuytp9pa******\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateSecurityPolicyResponse>\\n    <RequestId>D7A8875F-373A-5F48-8484-25B07A61F2AF</RequestId>\\n    <SecurityPolicyId>tls-bp14bb1e7dll4f****</SecurityPolicyId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</CreateSecurityPolicyResponse>","errorExample":""}]',
      'title' => '创建自定义安全策略',
    ),
    'DeleteSecurityPolicy' => 
    array (
      'summary' => '删除网络型负载均衡TLS自定义安全策略。',
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
          'name' => 'SecurityPolicyId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'TLS安全策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sp-wuytp9pa******
',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会删除自定义安全策略。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
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
            'title' => 'RpcResponse<DeleteSecurityPolicyResponse>',
            'description' => '删除TLS自定义安全策略。',
            'type' => 'object',
            'properties' => 
            array (
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
            'errorCode' => 'ResourceInUse.SecurityPolicy',
            'errorMessage' => 'The specified resource of SecurityPolicy is in use.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.securitypolicy',
            'errorMessage' => 'The specified resource of securitypolicy is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D7A8875F-373A-5F48-8484-25B07A61F2AF\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteSecurityPolicyResponse>\\n    <RequestId>D7A8875F-373A-5F48-8484-25B07A61F2AF</RequestId>\\n</DeleteSecurityPolicyResponse>","errorExample":""}]',
      'title' => '删除自定义安全策略',
    ),
    'UpdateSecurityPolicyAttribute' => 
    array (
      'summary' => '更新网络型负载均衡自定义安全策略属性。',
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
          'name' => 'TlsVersions',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '支持的TLS协议版本，取值：**TLSv1.0**、**TLSv1.1**、**TLSv1.2**和**TLSv1.3**。最多支持添加4个TLS协议版本。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '支持的TLS协议版本，取值：**TLSv1.0**、**TLSv1.1**、**TLSv1.2**和**TLSv1.3**。最多支持添加4个TLS协议版本。',
              'type' => 'string',
              'required' => false,
              'example' => 'TLSv1.0',
            ),
            'required' => false,
            'maxItems' => 4,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'SecurityPolicyId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'TLS安全策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sp-wuytp9pa******
',
          ),
        ),
        2 => 
        array (
          'name' => 'SecurityPolicyName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '安全策略名称。

长度为1~200个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'TLSCipherPolicy',
          ),
        ),
        3 => 
        array (
          'name' => 'Ciphers',
          'in' => 'formData',
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
            'required' => false,
            'maxItems' => 32,
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        5 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会更新自定义安全策略。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
            'title' => 'RpcResponse<UpdateSecurityPolicyAttributeResponse>',
            'description' => '更新安全策略属性。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D7A8875F-373A-5F48-8484-25B07A61F2AF',
              ),
              'SecurityPolicyId' => 
              array (
                'description' => 'TLS安全策略ID。',
                'type' => 'string',
                'example' => 'sp-wuytp9pa******
',
              ),
              'JobId' => 
              array (
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
            'errorCode' => 'IllegalParam.PreserveClientIpSwitch',
            'errorMessage' => 'The param of PreserveClientIpSwitch is illegal.',
          ),
          1 => 
          array (
            'errorCode' => 'UpdateSecurityPolicyFailed',
            'errorMessage' => 'The operation failed because of Security Policy is not changed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.securitypolicy',
            'errorMessage' => 'The specified resource of securitypolicy is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.serverGroup',
            'errorMessage' => 'The specified resource of serverGroup is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D7A8875F-373A-5F48-8484-25B07A61F2AF\\",\\n  \\"SecurityPolicyId\\": \\"sp-wuytp9pa******\\\\n\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateSecurityPolicyAttributeResponse>\\n    <RequestId>D7A8875F-373A-5F48-8484-25B07A61F2AF</RequestId>\\n    <SecurityPolicyId>tls-bp14bb1e7dll4f****</SecurityPolicyId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</UpdateSecurityPolicyAttributeResponse>","errorExample":""}]',
      'title' => '更新自定义安全策略属性',
    ),
    'ListSecurityPolicy' => 
    array (
      'summary' => '查询网络型负载均衡的TLS自定义安全策略。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SecurityPolicyIds',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '安全策略实例ID列表。最多支持添加20个安全策略实例。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '安全策略实例ID列表。最多支持添加20个安全策略实例。',
              'type' => 'string',
              'required' => false,
              'example' => 'sp-wuytp9pa******
',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        1 => 
        array (
          'name' => 'SecurityPolicyNames',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '安全策略名称列表。最多支持添加20个安全策略实例。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '安全策略名称列表。最多支持添加20个安全策略实例。',
              'type' => 'string',
              'required' => false,
              'example' => 'TLSCipherPolicy',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        2 => 
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
              'description' => '标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。最多支持10个标签键。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Test',
                ),
                'Value' => 
                array (
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
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'formData',
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
          'name' => 'MaxResults',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值为**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
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
            'title' => 'RpcResponse<ListSecurityPolicyResponse>',
            'description' => '查询TLS安全策略。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D7A8875F-373A-5F48-8484-25B07A61F2AF',
              ),
              'SecurityPolicies' => 
              array (
                'description' => 'TLS安全策略列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'TLS安全策略列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SecurityPolicyId' => 
                    array (
                      'title' => 'tls策略ID',
                      'description' => 'TLS安全策略ID。',
                      'type' => 'string',
                      'example' => 'sp-wuytp9pa******
',
                    ),
                    'SecurityPolicyName' => 
                    array (
                      'title' => '名称',
                      'description' => 'TLS安全策略名称。',
                      'type' => 'string',
                      'example' => 'TLSCipherPolicy',
                    ),
                    'TlsVersion' => 
                    array (
                      'title' => 'tls版本',
                      'description' => 'TLS协议版本，取值：**TLSv1.0**、**TLSv1.1**、**TLSv1.2**和**TLSv1.3**。',
                      'type' => 'string',
                      'example' => 'TLSv1.0',
                    ),
                    'Ciphers' => 
                    array (
                      'title' => '加密套件',
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
                      'example' => 'ECDHE-ECDSA-AES128-SHA',
                    ),
                    'RegionId' => 
                    array (
                      'title' => '业务location',
                      'description' => '网络型负载均衡实例所在的地域ID。 ',
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
                            'description' => '标签键。最多支持10个标签键。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                            'type' => 'string',
                            'example' => 'Test',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签值。最多支持10个标签值。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                            'type' => 'string',
                            'example' => 'Test',
                          ),
                        ),
                      ),
                    ),
                    'RelatedListeners' => 
                    array (
                      'description' => '关联的监听列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '关联的监听列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ListenerId' => 
                          array (
                            'description' => '监听ID。',
                            'type' => 'string',
                            'example' => 'lsn-bp1bpn0kn908w4nbw****',
                          ),
                          'ListenerPort' => 
                          array (
                            'description' => '监听端口。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '443',
                          ),
                          'ListenerProtocol' => 
                          array (
                            'description' => '监听协议。仅取值**TCPSSL**。',
                            'type' => 'string',
                            'example' => 'TCPSSL',
                          ),
                          'LoadBalancerId' => 
                          array (
                            'description' => '网络型负载均衡实例ID。',
                            'type' => 'string',
                            'example' => 'nlb-83ckzc8d4xlp8o****',
                          ),
                        ),
                      ),
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-atstuj3rtop****',
                    ),
                    'SecurityPolicyStatus' => 
                    array (
                      'description' => 'TLS安全策略的状态，取值：

- **Configuring** ：配置中。
- **Available**： 正常可用。',
                      'type' => 'string',
                      'example' => 'Available',
                    ),
                  ),
                ),
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
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
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
            ),
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
            'errorMessage' => 'System is busy, please try again later.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D7A8875F-373A-5F48-8484-25B07A61F2AF\\",\\n  \\"SecurityPolicies\\": [\\n    {\\n      \\"SecurityPolicyId\\": \\"sp-wuytp9pa******\\\\n\\",\\n      \\"SecurityPolicyName\\": \\"TLSCipherPolicy\\",\\n      \\"TlsVersion\\": \\"TLSv1.0\\",\\n      \\"Ciphers\\": \\"ECDHE-ECDSA-AES128-SHA\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"Test\\",\\n          \\"Value\\": \\"Test\\"\\n        }\\n      ],\\n      \\"RelatedListeners\\": [\\n        {\\n          \\"ListenerId\\": \\"lsn-bp1bpn0kn908w4nbw****\\",\\n          \\"ListenerPort\\": 443,\\n          \\"ListenerProtocol\\": \\"TCPSSL\\",\\n          \\"LoadBalancerId\\": \\"nlb-83ckzc8d4xlp8o****\\"\\n        }\\n      ],\\n      \\"ResourceGroupId\\": \\"rg-atstuj3rtop****\\",\\n      \\"SecurityPolicyStatus\\": \\"Available\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 10,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 20\\n}","errorExample":""},{"type":"xml","example":"<ListSecurityPolicyResponse>\\n    <RequestId>D7A8875F-373A-5F48-8484-25B07A61F2AF</RequestId>\\n    <SecurityPolicies>\\n        <SecurityPolicyId>tls-bp14bb1e7dll4f****</SecurityPolicyId>\\n        <SecurityPolicyName>TLSCipherPolicy</SecurityPolicyName>\\n        <TlsVersion>TLSv1.0</TlsVersion>\\n        <Ciphers>ECDHE-ECDSA-AES128-SHA</Ciphers>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <Tags>\\n            <Key>Test</Key>\\n            <Value>Test</Value>\\n        </Tags>\\n        <RelatedListeners>\\n            <ListenerId>lsn-bp1bpn0kn908w4nbw****</ListenerId>\\n            <ListenerPort>443</ListenerPort>\\n            <ListenerProtocol>TCPSSL</ListenerProtocol>\\n            <LoadBalancerId>nlb-83ckzc8d4xlp8o****</LoadBalancerId>\\n        </RelatedListeners>\\n        <ResourceGroupId>rg-atstuj3rtop****</ResourceGroupId>\\n        <SecurityPolicyStatus>Available</SecurityPolicyStatus>\\n    </SecurityPolicies>\\n    <TotalCount>10</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <MaxResults>20</MaxResults>\\n</ListSecurityPolicyResponse>","errorExample":""}]',
      'title' => '查询自定义安全策略',
    ),
    'ListSystemSecurityPolicy' => 
    array (
      'summary' => '查询系统默认的TLS安全策略。',
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
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '网络型负载均衡实例所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。',
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
            'title' => 'RpcResponse<ListSystemSecurityPolicyResponse>',
            'description' => '查询系统默认的TLS安全策略。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5C057647-284B-5C67-A07E-4B8F3DABA9F9',
              ),
              'SecurityPolicies' => 
              array (
                'description' => 'TLS安全策略列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '安全策略。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SecurityPolicyId' => 
                    array (
                      'title' => 'tls策略ID',
                      'description' => 'TLS策略ID。',
                      'type' => 'string',
                      'example' => 'tls_cipher_policy_1_0',
                    ),
                    'SecurityPolicyName' => 
                    array (
                      'title' => '名称',
                      'description' => 'TLS安全策略名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'TlsVersion' => 
                    array (
                      'title' => 'tls版本',
                      'description' => 'TLS版本。',
                      'type' => 'string',
                      'example' => 'TLSv1.0,TLSv1.1,TLSv1.2',
                    ),
                    'Ciphers' => 
                    array (
                      'title' => '加密套件',
                      'description' => '加密套件。',
                      'type' => 'string',
                      'example' => 'ECDHE-ECDSA-AES128-GCM-SHA256,ECDHE-ECDSA-AES256-GCM-SHA384,ECDHE-ECDSA-AES128-SHA256,ECDHE-ECDSA-AES256-SHA384,ECDHE-RSA-AES128-GCM-SHA256,ECDHE-RSA-AES256-GCM-SHA384,ECDHE-RSA-AES128-SHA256,ECDHE-RSA-AES256-SHA384,AES128-GCM-SHA256,AES256-GCM-SHA384,AES128-SHA256,AES256-SHA256,ECDHE-ECDSA-AES128-SHA,ECDHE-ECDSA-AES256-SHA,ECDHE-RSA-AES128-SHA,ECDHE-RSA-AES256-SHA,AES128-SHA,AES256-SHA,DES-CBC3-SHA',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5C057647-284B-5C67-A07E-4B8F3DABA9F9\\",\\n  \\"SecurityPolicies\\": [\\n    {\\n      \\"SecurityPolicyId\\": \\"tls_cipher_policy_1_0\\",\\n      \\"SecurityPolicyName\\": \\"test\\",\\n      \\"TlsVersion\\": \\"TLSv1.0,TLSv1.1,TLSv1.2\\",\\n      \\"Ciphers\\": \\"ECDHE-ECDSA-AES128-GCM-SHA256,ECDHE-ECDSA-AES256-GCM-SHA384,ECDHE-ECDSA-AES128-SHA256,ECDHE-ECDSA-AES256-SHA384,ECDHE-RSA-AES128-GCM-SHA256,ECDHE-RSA-AES256-GCM-SHA384,ECDHE-RSA-AES128-SHA256,ECDHE-RSA-AES256-SHA384,AES128-GCM-SHA256,AES256-GCM-SHA384,AES128-SHA256,AES256-SHA256,ECDHE-ECDSA-AES128-SHA,ECDHE-ECDSA-AES256-SHA,ECDHE-RSA-AES128-SHA,ECDHE-RSA-AES256-SHA,AES128-SHA,AES256-SHA,DES-CBC3-SHA\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询系统安全策略',
    ),
    'MoveResourceGroup' => 
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NewResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '新资源组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'rg-aekzjcnrv3v****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源类型，取值：

- **loadbalancer**：网络型负载均衡实例。
- **securitypolicy**：安全策略。
- **servergroup**：服务器组。',
            'type' => 'string',
            'required' => true,
            'example' => 'loadbalancer',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'nlb-nrnrxwd15en27r****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源所在的地域ID。',
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
            'title' => 'RpcResponse<MoveResourceGroupResponse>',
            'description' => 'RpcResponse<MoveResourceGroupResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
              'Success' => 
              array (
                'description' => '接口请求结果，取值：

- **true**：请求成功。
- **false**：请求失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'ResourceId' => 
                  array (
                    'description' => '资源ID。',
                    'type' => 'string',
                    'example' => 'nlb-nrnrxwd15en27r****',
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
            'errorCode' => 'IllegalParam.resourceType',
            'errorMessage' => 'The param of resourceType is illegal.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationFailed.StatusCheckFail.ResourceGroup',
            'errorMessage' => 'The operation failed because of StatusCheckFail.ResourceGroup.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.loadBalancer',
            'errorMessage' => 'The specified resource of loadbalancer is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.ResourceGroup',
            'errorMessage' => 'The param of resourceGroup not existed.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"ResourceId\\": \\"nlb-nrnrxwd15en27r****\\"\\n  }\\n}","type":"json"}]',
      'title' => '变更资源所属的资源组',
      'summary' => '修改云资源所属的资源组。',
    ),
    'GetJobStatus' => 
    array (
      'summary' => '查询网络型负载均衡的异步任务执行结果信息。',
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
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'add 必选',
            'description' => '异步任务ID。',
            'type' => 'string',
            'required' => true,
            'example' => '72dcd26b-f12d-4c27-b3af-18f6aed5****',
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
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'RpcResponse<GetJodResponse>',
            'description' => '查询异步任务结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '365F4154-92F6-4AE4-92F8-7FF34B540710',
              ),
              'Status' => 
              array (
                'description' => '任务状态。取值：

- **Succeeded**：成功。
- **Processing**：执行中。',
                'type' => 'string',
                'example' => 'Succeeded',
              ),
            ),
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
            'errorMessage' => 'System is busy, please try again later.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.JobId',
            'errorMessage' => 'The specified resource of JobId is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"365F4154-92F6-4AE4-92F8-7FF34B540710\\",\\n  \\"Status\\": \\"Succeeded\\"\\n}","errorExample":""},{"type":"xml","example":"<GetJobStatusResponse>\\n    <RequestId>365F4154-92F6-4AE4-92F8-7FF34B540710</RequestId>\\n    <Status>Succeeded</Status>\\n</GetJobStatusResponse>","errorExample":""}]',
      'title' => '查询异步任务结果',
    ),
    'TagResources' => 
    array (
      'summary' => '为指定的资源列表统一创建并绑定标签。',
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
          'name' => 'ResourceId',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '资源ID。一次调用最多支持添加50个资源ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。一次调用最多支持添加50个资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'nlb-nrnrxwd15en27r****',
            ),
            'required' => true,
            'maxItems' => 50,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'Tag',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
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
                  'description' => '标签键。最多支持64个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。支持字符包括字母、数字、下划线 (_)、点 (.)、冒号 (:)、斜线 (/)、等号 (=)、加号 (+)、减号 (-)、@符号 (@) 。

一次调用最多支持添加20个标签。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'env',
                ),
                'Value' => 
                array (
                  'description' => '标签值。最多支持128个字符，不能以`aliyun`或`acs:`开头，不能包含`http://`或`https://`。支持字符包括字母、数字、下划线 (_)、点 (.)、冒号 (:)、斜线 (/)、等号 (=)、加号 (+)、减号 (-)、@符号 (@) 。

一次调用最多支持添加20个标签。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'product',
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
          'name' => 'ResourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源类型，取值：

- **loadbalancer**：网络型负载均衡实例。
- **securitypolicy**：安全策略。
- **servergroup**：服务器组。',
            'type' => 'string',
            'required' => true,
            'example' => 'loadbalancer',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会为资源创建并绑定标签。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源所在的地域ID。

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。 ',
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
            'title' => 'RpcResponse<BaseResult>',
            'description' => '绑定标签。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'JobId' => 
              array (
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
            'errorCode' => 'IllegalParam',
            'errorMessage' => 'The param of %s is illegal.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParam.%s',
            'errorMessage' => 'The parameter of %s is missing.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.securitypolicy',
            'errorMessage' => 'The specified resource of securitypolicy is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.loadBalancer',
            'errorMessage' => 'The specified resource of loadbalancer is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</TagResourcesResponse>","errorExample":""}]',
      'title' => '给资源添加标签',
    ),
    'UntagResources' => 
    array (
      'summary' => '为指定的资源列表统一解绑标签。',
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
          'name' => 'ResourceId',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '资源ID。一次调用最多支持添加50个资源ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。一次调用最多支持添加50个资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'nlb-nrnrxwd15en27r****',
            ),
            'required' => true,
            'maxItems' => 50,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'TagKey',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '要删除标签的标签键。一次调用最多支持删除20个标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '要删除标签的标签键。一次调用最多支持删除20个标签。

> 如果不指定**TagKey**，会删除掉这个实例上所有的标签。',
              'type' => 'string',
              'required' => false,
              'example' => 'env',
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'All',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否解绑资源的所有标签。取值：

- **true**：解绑资源的所有标签。
- **false**（默认值）：不解绑资源的所有标签。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源类型。取值：

- **loadbalancer**：网络型负载均衡实例。
- **securitypolicy**：安全策略。
- **servergroup**：服务器组。',
            'type' => 'string',
            'required' => true,
            'example' => 'loadbalancer',
          ),
        ),
        4 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会为资源解绑标签。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
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
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源所在的地域ID。 

您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。 ',
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
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'title' => 'RpcResponse<BaseResult>',
            'description' => '解绑标签。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'JobId' => 
              array (
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
            'errorCode' => 'IllegalParam',
            'errorMessage' => 'The param of %s is illegal.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.loadBalancer',
            'errorMessage' => 'The specified resource of loadbalancer is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"JobId\\": \\"72dcd26b-f12d-4c27-b3af-18f6aed5****\\"\\n}","errorExample":""},{"type":"xml","example":"<UntagResourcesResponse>\\n    <RequestId>54B48E3D-DF70-471B-AA93-08E683A1B45</RequestId>\\n    <JobId>72dcd26b-f12d-4c27-b3af-18f6aed5****</JobId>\\n</UntagResourcesResponse>","errorExample":""}]',
      'title' => '删除资源的标签',
    ),
    'ListTagResources' => 
    array (
      'summary' => '查询指定资源标签。',
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
          'name' => 'ResourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源类型。取值：

- **loadbalancer**：网络型负载均衡实例。
- **securitypolicy**：安全策略。
- **servergroup**：服务器组。
- **listener**：监听。',
            'type' => 'string',
            'required' => true,
            'example' => 'loadbalancer',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '资源ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'nlb-nrnrxwd15en27r****',
            ),
            'required' => false,
            'maxItems' => 50,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'Tag',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
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
            'maxItems' => 20,
            'minItems' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'NextToken',
          'in' => 'formData',
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
        4 => 
        array (
          'name' => 'MaxResults',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**50**，默认值为**50**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '您可以通过调用[DescribeRegions](~~443657~~)接口获取地域ID。 ',
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
            'title' => 'RpcResponse<ListTagResourcesResponse>',
            'description' => '查询资源标签。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '54B48E3D-DF70-471B-AA93-08E683A1B45',
              ),
              'TagResources' => 
              array (
                'description' => '由资源及其标签组成的集合，包含了资源ID、资源类型和标签键值等信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '由资源及其标签组成的集合，包含了资源ID、资源类型和标签键值等信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ResourceId' => 
                    array (
                      'description' => '资源ID。',
                      'type' => 'string',
                      'example' => 'nlb-nrnrxwd15en27r****',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '资源类型，取值：

- **loadbalancer**：网络型负载均衡实例。
- **securitypolicy**：安全策略。
- **servergroup**：服务器组。',
                      'type' => 'string',
                      'example' => 'loadbalancer',
                    ),
                    'RegionNo' => 
                    array (
                      'description' => '地域信息。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'AliUid' => 
                    array (
                      'description' => '用户UID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1429****39299349',
                    ),
                    'TagKey' => 
                    array (
                      'description' => '标签键。',
                      'type' => 'string',
                      'example' => 'env',
                    ),
                    'TagValue' => 
                    array (
                      'description' => '标签值。',
                      'type' => 'string',
                      'example' => 'product',
                    ),
                    'Scope' => 
                    array (
                      'description' => '标签可见范围。',
                      'type' => 'string',
                      'example' => 'public',
                    ),
                    'Category' => 
                    array (
                      'description' => '标签类型。取值：

- **Custom**：自定义标签。
- **System**：系统标签。
- **All**：全部标签。
',
                      'type' => 'string',
                      'example' => 'All',
                    ),
                  ),
                ),
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
            ),
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
            'errorMessage' => 'System is busy, please try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalParam.resourceType',
            'errorMessage' => 'The param of resourceType is illegal.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingParam.%s',
            'errorMessage' => 'The parameter of %s is missing.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.NoPermission',
            'errorMessage' => 'Authentication is failed for NoPermission.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.securitypolicy',
            'errorMessage' => 'The specified resource of securitypolicy is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.loadBalancer',
            'errorMessage' => 'The specified resource of loadbalancer is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotFound.listener',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.serverGroup',
            'errorMessage' => 'The specified resource of serverGroup is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"54B48E3D-DF70-471B-AA93-08E683A1B45\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"ResourceId\\": \\"nlb-nrnrxwd15en27r****\\",\\n      \\"ResourceType\\": \\"loadbalancer\\",\\n      \\"RegionNo\\": \\"cn-hangzhou\\",\\n      \\"AliUid\\": 0,\\n      \\"TagKey\\": \\"env\\",\\n      \\"TagValue\\": \\"product\\",\\n      \\"Scope\\": \\"public\\",\\n      \\"Category\\": \\"All\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 10,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"MaxResults\\": 20\\n}","type":"json"}]',
      'title' => '查询资源标签',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'nlb.cn-qingdao.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'nlb.cn-beijing.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'nlb.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-zhengzhou-jva',
      'endpoint' => 'nlb.cn-zhengzhou-jva.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'nlb.cn-wulanchabu.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'nlb.cn-hangzhou.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'nlb.cn-shanghai.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-nanjing',
      'endpoint' => 'nlb.cn-nanjing.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'nlb.cn-shenzhen.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'nlb.cn-heyuan.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'nlb.cn-guangzhou.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'nlb.cn-chengdu.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'nlb.cn-hongkong.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'nlb.ap-northeast-1.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'ap-northeast-2',
      'endpoint' => 'nlb.ap-northeast-2.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'nlb.ap-southeast-1.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'nlb.ap-southeast-3.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'nlb.ap-southeast-5.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'ap-southeast-6',
      'endpoint' => 'nlb.ap-southeast-6.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'nlb.us-east-1.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'nlb.us-west-1.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'nlb.eu-west-1.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'nlb.eu-central-1.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'nlb.ap-south-1.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'nlb.cn-shanghai-finance-1.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'nlb.cn-shenzhen-finance-1.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'ap-southeast-7',
      'endpoint' => 'nlb.ap-southeast-7.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'nlb.cn-beijing-finance-1.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'me-central-1',
      'endpoint' => 'nlb.me-central-1.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-wuhan-lr',
      'endpoint' => 'nlb.cn-wuhan-lr.aliyuncs.com',
    ),
  ),
);